<?php


class RuntestsValgrind
{
	protected $version = '';
	protected $header = '';
	protected $version_3_3_0 = false;
	protected $version_3_8_0 = false;
	protected $tool;

	public function getVersion()
	{
		return $this->version;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function __construct(array $environment, string $tool = 'memcheck')
	{
		$this->tool = $tool;
		$header = system_with_timeout('valgrind --tool=' . $this->tool . ' --version', $environment);

		if (!$header) {
			error('Valgrind returned no version info for ' . $this->tool . ', cannot proceed.' . "\n" . 'Please check if Valgrind is installed and the tool is named correctly.');
		}

		$count = 0;
		$version = preg_replace('/valgrind-(\\d+)\\.(\\d+)\\.(\\d+)([.\\w_-]+)?(\\s+)/', '$1.$2.$3', $header, 1, $count);

		if ($count != 1) {
			error('Valgrind returned invalid version info ("' . $header . '") for ' . $this->tool . ', cannot proceed.');
		}

		$this->version = $version;
		$this->header = sprintf('%s (%s)', trim($header), $this->tool);
		$this->version_3_3_0 = version_compare($version, '3.3.0', '>=');
		$this->version_3_8_0 = version_compare($version, '3.8.0', '>=');
	}

	public function wrapCommand($cmd, $memcheck_filename, $check_all)
	{
		$vcmd = 'valgrind -q --tool=' . $this->tool . ' --trace-children=yes';

		if ($check_all) {
			$vcmd .= ' --smc-check=all';
		}

		if ($this->version_3_8_0) {
			return $vcmd . ' --vex-iropt-register-updates=allregs-at-mem-access --log-file=' . $memcheck_filename . ' ' . $cmd;
		}
		else if ($this->version_3_3_0) {
			return $vcmd . ' --vex-iropt-precise-memory-exns=yes --log-file=' . $memcheck_filename . ' ' . $cmd;
		}
		else {
			return $vcmd . ' --vex-iropt-precise-memory-exns=yes --log-file-exactly=' . $memcheck_filename . ' ' . $cmd;
		}
	}
}

/**
 * One function to rule them all, one function to find them, one function to
 * bring them all and in the darkness bind them.
 * This is the entry point and exit point überfunction. It contains all the
 * code that was previously found at the top level. It could and should be
 * refactored to be smaller and more manageable.
 */
function main()
{
	global $DETAILED;
	global $PHP_FAILED_TESTS;
	global $SHOW_ONLY_GROUPS;
	global $argc;
	global $argv;
	global $cfg;
	global $cfgfiles;
	global $cfgtypes;
	global $conf_passed;
	global $end_time;
	global $environment;
	global $exts_skipped;
	global $exts_tested;
	global $exts_to_test;
	global $failed_tests_file;
	global $html_file;
	global $html_output;
	global $ignored_by_ext;
	global $ini_overwrites;
	global $is_switch;
	global $just_save_results;
	global $log_format;
	global $matches;
	global $no_clean;
	global $no_file_cache;
	global $optionals;
	global $output_file;
	global $pass_option_n;
	global $pass_options;
	global $pattern_match;
	global $php;
	global $php_cgi;
	global $phpdbg;
	global $preload;
	global $redir_tests;
	global $repeat;
	global $result_tests_file;
	global $slow_min_ms;
	global $start_time;
	global $switch;
	global $temp_source;
	global $temp_target;
	global $temp_urlbase;
	global $test_cnt;
	global $test_dirs;
	global $test_files;
	global $test_idx;
	global $test_list;
	global $test_results;
	global $testfile;
	global $user_tests;
	global $valgrind;
	global $sum_results;
	global $shuffle;
	global $workers;
	global $workerID;
	$workerID = 0;

	if (getenv('TEST_PHP_WORKER')) {
		$workerID = intval(getenv('TEST_PHP_WORKER'));
		run_worker();
		return NULL;
	}

	define('INIT_DIR', getcwd());

	if (getenv('TEST_PHP_SRCDIR')) {
		@chdir(getenv('TEST_PHP_SRCDIR'));
	}

	define('TEST_PHP_SRCDIR', getcwd());

	if (!function_exists('proc_open')) {
		echo "\n" . '+-----------------------------------------------------------+' . "\n" . '|                       ! ERROR !                           |' . "\n" . '| The test-suite requires that proc_open() is available.    |' . "\n" . '| Please check if you disabled it in php.ini.               |' . "\n" . '+-----------------------------------------------------------+' . "\n";
		exit(1);
	}

	if (ini_get('date.timezone') == '') {
		date_default_timezone_set('UTC');
	}

	putenv('SSH_CLIENT=deleted');
	putenv('SSH_AUTH_SOCK=deleted');
	putenv('SSH_TTY=deleted');
	putenv('SSH_CONNECTION=deleted');
	set_time_limit(0);
	ini_set('pcre.backtrack_limit', PHP_INT_MAX);

	while (@ob_end_clean()) {
	}

	if (ob_get_level()) {
		echo 'Not all buffers were deleted.' . "\n";
	}

	error_reporting(32767);
	$environment = $_ENV ?? [];

	if (empty($environment)) {
		$environment = getenv();
	}

	if (empty($environment['TEMP'])) {
		$environment['TEMP'] = sys_get_temp_dir();

		if (empty($environment['TEMP'])) {
			exit('TEMP environment is NOT set');
		}
		else if (count($environment) == 1) {
			echo 'WARNING: Only 1 environment variable will be available to tests(TEMP environment variable)' . PHP_EOL;
		}
	}
	if ((substr(PHP_OS, 0, 3) == 'WIN') && empty($environment['SystemRoot'])) {
		$environment['SystemRoot'] = getenv('SystemRoot');
	}

	$php = NULL;
	$php_cgi = NULL;
	$phpdbg = NULL;

	if (getenv('TEST_PHP_EXECUTABLE')) {
		$php = getenv('TEST_PHP_EXECUTABLE');

		if ($php == 'auto') {
			$php = TEST_PHP_SRCDIR . '/sapi/cli/php';
			putenv('TEST_PHP_EXECUTABLE=' . $php);

			if (!getenv('TEST_PHP_CGI_EXECUTABLE')) {
				$php_cgi = TEST_PHP_SRCDIR . '/sapi/cgi/php-cgi';

				if (file_exists($php_cgi)) {
					putenv('TEST_PHP_CGI_EXECUTABLE=' . $php_cgi);
				}
				else {
					$php_cgi = NULL;
				}
			}
		}

		$environment['TEST_PHP_EXECUTABLE'] = $php;
	}

	if (getenv('TEST_PHP_CGI_EXECUTABLE')) {
		$php_cgi = getenv('TEST_PHP_CGI_EXECUTABLE');

		if ($php_cgi == 'auto') {
			$php_cgi = TEST_PHP_SRCDIR . '/sapi/cgi/php-cgi';
			putenv('TEST_PHP_CGI_EXECUTABLE=' . $php_cgi);
		}

		$environment['TEST_PHP_CGI_EXECUTABLE'] = $php_cgi;
	}

	if (!getenv('TEST_PHPDBG_EXECUTABLE')) {
		if (!strncasecmp(PHP_OS, 'win', 3) && file_exists(dirname($php) . '/phpdbg.exe')) {
			$phpdbg = realpath(dirname($php) . '/phpdbg.exe');
		}
		else if (file_exists(dirname($php) . '/../../sapi/phpdbg/phpdbg')) {
			$phpdbg = realpath(dirname($php) . '/../../sapi/phpdbg/phpdbg');
		}
		else if (file_exists('./sapi/phpdbg/phpdbg')) {
			$phpdbg = realpath('./sapi/phpdbg/phpdbg');
		}
		else if (file_exists(dirname($php) . '/phpdbg')) {
			$phpdbg = realpath(dirname($php) . '/phpdbg');
		}
		else {
			$phpdbg = NULL;
		}

		if ($phpdbg) {
			putenv('TEST_PHPDBG_EXECUTABLE=' . $phpdbg);
		}
	}

	if (getenv('TEST_PHPDBG_EXECUTABLE')) {
		$phpdbg = getenv('TEST_PHPDBG_EXECUTABLE');

		if ($phpdbg == 'auto') {
			$phpdbg = TEST_PHP_SRCDIR . '/sapi/phpdbg/phpdbg';
			putenv('TEST_PHPDBG_EXECUTABLE=' . $phpdbg);
		}

		$environment['TEST_PHPDBG_EXECUTABLE'] = $phpdbg;
	}

	if (getenv('TEST_PHP_LOG_FORMAT')) {
		$log_format = strtoupper(getenv('TEST_PHP_LOG_FORMAT'));
	}
	else {
		$log_format = 'LEODS';
	}

	if (getenv('TEST_PHP_DETAILED')) {
		$DETAILED = getenv('TEST_PHP_DETAILED');
	}
	else {
		$DETAILED = 0;
	}

	junit_init();

	if (getenv('SHOW_ONLY_GROUPS')) {
		$SHOW_ONLY_GROUPS = explode(',', getenv('SHOW_ONLY_GROUPS'));
	}
	else {
		$SHOW_ONLY_GROUPS = [];
	}

	if (getenv('TEST_PHP_USER')) {
		$user_tests = explode(',', getenv('TEST_PHP_USER'));
	}
	else {
		$user_tests = [];
	}

	$exts_to_test = [];
	$ini_overwrites = ['output_handler=', 'open_basedir=', 'disable_functions=', 'output_buffering=Off', 'error_reporting=32767', 'display_errors=1', 'display_startup_errors=1', 'log_errors=0', 'html_errors=0', 'track_errors=0', 'report_memleaks=1', 'report_zend_debug=0', 'docref_root=', 'docref_ext=.html', 'error_prepend_string=', 'error_append_string=', 'auto_prepend_file=', 'auto_append_file=', 'ignore_repeated_errors=0', 'precision=14', 'memory_limit=128M', 'log_errors_max_len=0', 'opcache.fast_shutdown=0', 'opcache.file_update_protection=0', 'opcache.revalidate_freq=0', 'zend.assertions=1', 'zend.exception_ignore_args=0'];
	$no_file_cache = '-d opcache.file_cache= -d opcache.file_cache_only=0';
	define('PHP_QA_EMAIL', 'qa-reports@lists.php.net');
	define('QA_SUBMISSION_PAGE', 'http://qa.php.net/buildtest-process.php');
	define('QA_REPORTS_PAGE', 'http://qa.php.net/reports');
	define('TRAVIS_CI', (bool) getenv('TRAVIS'));
	$test_files = [];
	$redir_tests = [];
	$test_results = [];
	$PHP_FAILED_TESTS = [
		'BORKED'  => [],
		'FAILED'  => [],
		'WARNED'  => [],
		'LEAKED'  => [],
		'XFAILED' => [],
		'XLEAKED' => [],
		'SLOW'    => []
	];
	$result_tests_file = false;
	$failed_tests_file = false;
	$pass_option_n = false;
	$pass_options = '';
	$output_file = INIT_DIR . '/php_test_results_' . date('Ymd_Hi') . '.txt';
	$just_save_results = false;
	$valgrind = NULL;
	$html_output = false;
	$html_file = NULL;
	$temp_source = NULL;
	$temp_target = NULL;
	$temp_urlbase = NULL;
	$conf_passed = NULL;
	$no_clean = false;
	$slow_min_ms = INF;
	$preload = false;
	$shuffle = false;
	$workers = NULL;
	$cfgtypes = ['show', 'keep'];
	$cfgfiles = ['skip', 'php', 'clean', 'out', 'diff', 'exp', 'mem'];
	$cfg = [];

	foreach ($cfgtypes as $type) {
		$cfg[$type] = [];

		foreach ($cfgfiles as $file) {
			$cfg[$type][$file] = false;
		}
	}
	if (!(isset($argc) && isset($argv)) || !$argc) {
		$argv = [__FILE__];
		$argc = 1;
	}

	if (getenv('TEST_PHP_ARGS')) {
		$argv = array_merge($argv, explode(' ', getenv('TEST_PHP_ARGS')));
		$argc = count($argv);
	}

	for ($i = 1; $i < $argc; $i++) {
		$is_switch = false;
		$switch = substr($argv[$i], 1, 1);
		$repeat = substr($argv[$i], 0, 1) == '-';

		while ($repeat) {
			if (!$is_switch) {
				$switch = substr($argv[$i], 1, 1);
			}

			$is_switch = true;

			if ($repeat) {
				foreach ($cfgtypes as $type) {
					if (strpos($switch, '--' . $type) === 0) {
						foreach ($cfgfiles as $file) {
							if ($switch == '--' . $type . '-' . $file) {
								$cfg[$type][$file] = true;
								$is_switch = false;
								break;
							}
						}
					}
				}
			}

			if (!$is_switch) {
				$is_switch = true;
				break;
			}

			$repeat = false;

			switch ($switch) {
			case 'j':
				$workers = substr($argv[$i], 2);
				if (!preg_match('/^\\d+$/', $workers) || ($workers == 0)) {
					error('\'' . $workers . '\' is not a valid number of workers, try e.g. -j16 for 16 workers');
				}

				$workers = intval($workers, 10);

				if ($workers === 1) {
					$workers = NULL;
				}

				continue 2;
			case 'r':
			case 'l':
				$test_list = file($argv[++$i]);

				if ($test_list) {
					foreach ($test_list as $test) {
						$matches = [];

						if (preg_match('/^#.*\\[(.*)\\]\\:\\s+(.*)$/', $test, $matches)) {
							$redir_tests[] = [$matches[1], $matches[2]];
						}
						else if (strlen($test)) {
							$test_files[] = trim($test);
						}
					}
				}

				if ($switch != 'l') {
					continue 2;
				}

				$i--;
			case 'w':
				$failed_tests_file = fopen($argv[++$i], 'w+t');
				continue 2;
			case 'a':
				$failed_tests_file = fopen($argv[++$i], 'a+t');
				continue 2;
			case 'W':
				$result_tests_file = fopen($argv[++$i], 'w+t');
				continue 2;
			case 'c':
				$conf_passed = $argv[++$i];
				continue 2;
			case 'd':
				$ini_overwrites[] = $argv[++$i];
				continue 2;
			case 'g':
				$SHOW_ONLY_GROUPS = explode(',', $argv[++$i]);
				continue 2;
			case '--keep-all':
				foreach ($cfgfiles as $file) {
					$cfg['keep'][$file] = true;
				}

				continue 2;
			case 'm':
				$valgrind = new RuntestsValgrind($environment);
				continue 2;
			case 'M':
				$valgrind = new RuntestsValgrind($environment, $argv[++$i]);
				continue 2;
			case 'n':
				if (!$pass_option_n) {
					$pass_options .= ' -n';
				}

				$pass_option_n = true;
				continue 2;
			case 'e':
				$pass_options .= ' -e';
				continue 2;
			case '--preload':
				$preload = true;
				continue 2;
			case '--no-clean':
				$no_clean = true;
				continue 2;
			case 'p':
				$php = $argv[++$i];
				putenv('TEST_PHP_EXECUTABLE=' . $php);
				$environment['TEST_PHP_EXECUTABLE'] = $php;
				continue 2;
			case 'P':
				$php = PHP_BINARY;
				putenv('TEST_PHP_EXECUTABLE=' . $php);
				$environment['TEST_PHP_EXECUTABLE'] = $php;
				continue 2;
			case 'q':
				putenv('NO_INTERACTION=1');
				$environment['NO_INTERACTION'] = 1;
				continue 2;
			case 's':
				$output_file = $argv[++$i];
				$just_save_results = true;
				continue 2;
			case '--set-timeout':
				$environment['TEST_TIMEOUT'] = $argv[++$i];
				continue 2;
			case '--show-all':
				foreach ($cfgfiles as $file) {
					$cfg['show'][$file] = true;
				}

				continue 2;
			case '--show-slow':
				$slow_min_ms = $argv[++$i];
				continue 2;
			case '--temp-source':
				$temp_source = $argv[++$i];
				continue 2;
			case '--temp-target':
				$temp_target = $argv[++$i];

				if ($temp_urlbase) {
					$temp_urlbase = $temp_target;
				}

				continue 2;
			case '--temp-urlbase':
				$temp_urlbase = $argv[++$i];
				continue 2;
			case 'v':
			case '--verbose':
				$DETAILED = true;
				continue 2;
			case 'x':
				$environment['SKIP_SLOW_TESTS'] = 1;
				continue 2;
			case '--offline':
				$environment['SKIP_ONLINE_TESTS'] = 1;
				continue 2;
			case '--shuffle':
				$shuffle = true;
				continue 2;
			case '--asan':
				$environment['USE_ZEND_ALLOC'] = 0;
				$environment['USE_TRACKED_ALLOC'] = 1;
				$environment['SKIP_ASAN'] = 1;
				$environment['SKIP_PERF_SENSITIVE'] = 1;
				$lsanSuppressions = __DIR__ . '/azure/lsan-suppressions.txt';

				if (file_exists($lsanSuppressions)) {
					$environment['LSAN_OPTIONS'] = 'suppressions=' . $lsanSuppressions . ':print_suppressions=0';
				}

				continue 2;
			case '-':
				$switch = $argv[$i];

				if ($switch != '-') {
					$repeat = true;
				}

				continue 2;
			case '--html':
				$html_file = fopen($argv[++$i], 'wt');
				$html_output = is_resource($html_file);
				continue 2;
			case '--version':
				echo '$Id: ce16b4fbf0aba210a673410ad92c7fc42ebd9365 $' . "\n";
				exit(1);
			default:
				echo 'Illegal switch \'' . $switch . '\' specified!' . "\n";
			case 'h':
			case '-help':
			case '--help':
				echo 'Synopsis:' . "\n" . '    php run-tests.php [options] [files] [directories]' . "\n\n" . 'Options:' . "\n" . '    -j<workers> Run <workers> simultaneous testing processes in parallel for' . "\n" . '                quicker testing on systems with multiple logical processors.' . "\n" . '                Note that this is experimental feature.' . "\n\n" . '    -l <file>   Read the testfiles to be executed from <file>. After the test' . "\n" . '                has finished all failed tests are written to the same <file>.' . "\n" . '                If the list is empty and no further test is specified then' . "\n" . '                all tests are executed (same as: -r <file> -w <file>).' . "\n\n" . '    -r <file>   Read the testfiles to be executed from <file>.' . "\n\n" . '    -w <file>   Write a list of all failed tests to <file>.' . "\n\n" . '    -a <file>   Same as -w but append rather then truncating <file>.' . "\n\n" . '    -W <file>   Write a list of all tests and their result status to <file>.' . "\n\n" . '    -c <file>   Look for php.ini in directory <file> or use <file> as ini.' . "\n\n" . '    -n          Pass -n option to the php binary (Do not use a php.ini).' . "\n\n" . '    -d foo=bar  Pass -d option to the php binary (Define INI entry foo' . "\n" . '                with value \'bar\').' . "\n\n" . '    -g          Comma separated list of groups to show during test run' . "\n" . '                (possible values: PASS, FAIL, XFAIL, XLEAK, SKIP, BORK, WARN, LEAK, REDIRECT).' . "\n\n" . '    -m          Test for memory leaks with Valgrind (equivalent to -M memcheck).' . "\n\n" . '    -M <tool>   Test for errors with Valgrind tool.' . "\n\n" . '    -p <php>    Specify PHP executable to run.' . "\n\n" . '    -P          Use PHP_BINARY as PHP executable to run (default).' . "\n\n" . '    -q          Quiet, no user interaction (same as environment NO_INTERACTION).' . "\n\n" . '    -s <file>   Write output to <file>.' . "\n\n" . '    -x          Sets \'SKIP_SLOW_TESTS\' environmental variable.' . "\n\n" . '    --offline   Sets \'SKIP_ONLINE_TESTS\' environmental variable.' . "\n\n" . '    --verbose' . "\n" . '    -v          Verbose mode.' . "\n\n" . '    --help' . "\n" . '    -h          This Help.' . "\n\n" . '    --html <file> Generate HTML output.' . "\n\n" . '    --temp-source <sdir>  --temp-target <tdir> [--temp-urlbase <url>]' . "\n" . '                Write temporary files to <tdir> by replacing <sdir> from the' . "\n" . '                filenames to generate with <tdir>. If --html is being used and' . "\n" . '                <url> given then the generated links are relative and prefixed' . "\n" . '                with the given url. In general you want to make <sdir> the path' . "\n" . '                to your source files and <tdir> some patch in your web page' . "\n" . '                hierarchy with <url> pointing to <tdir>.' . "\n\n" . '    --keep-[all|php|skip|clean]' . "\n" . '                Do not delete \'all\' files, \'php\' test file, \'skip\' or \'clean\'' . "\n" . '                file.' . "\n\n" . '    --set-timeout [n]' . "\n" . '                Set timeout for individual tests, where [n] is the number of' . "\n" . '                seconds. The default value is 60 seconds, or 300 seconds when' . "\n" . '                testing for memory leaks.' . "\n\n" . '    --show-[all|php|skip|clean|exp|diff|out|mem]' . "\n" . '                Show \'all\' files, \'php\' test file, \'skip\' or \'clean\' file. You' . "\n" . '                can also use this to show the output \'out\', the expected result' . "\n" . '                \'exp\', the difference between them \'diff\' or the valgrind log' . "\n" . '                \'mem\'. The result types get written independent of the log format,' . "\n" . '                however \'diff\' only exists when a test fails.' . "\n\n" . '    --show-slow [n]' . "\n" . '                Show all tests that took longer than [n] milliseconds to run.' . "\n\n" . '    --no-clean  Do not execute clean section if any.' . "\n";
				exit(1);
			}
		}

		if (!$is_switch) {
			$testfile = realpath($argv[$i]);
			if (!$testfile && (strpos($argv[$i], '*') !== false) && function_exists('glob')) {
				if (substr($argv[$i], -5) == '.phpt') {
					$pattern_match = glob($argv[$i]);
				}
				else if (preg_match('/\\*$/', $argv[$i])) {
					$pattern_match = glob($argv[$i] . '.phpt');
				}
				else {
					exit('Cannot find test file "' . $argv[$i] . '".' . PHP_EOL);
				}

				if (is_array($pattern_match)) {
					$test_files = array_merge($test_files, $pattern_match);
				}

				continue;
			}

			if (is_dir($testfile)) {
				find_files($testfile);
				continue;
			}

			if (substr($testfile, -5) == '.phpt') {
				$test_files[] = $testfile;
				continue;
			}

			exit('Cannot find test file "' . $argv[$i] . '".' . PHP_EOL);
		}
	}

	if (!isset($environment['TEST_PHP_EXECUTABLE'])) {
		$php = PHP_BINARY;
		putenv('TEST_PHP_EXECUTABLE=' . $php);
		$environment['TEST_PHP_EXECUTABLE'] = $php;
	}

	if (strlen($conf_passed)) {
		if (substr(PHP_OS, 0, 3) == 'WIN') {
			$pass_options .= ' -c ' . escapeshellarg($conf_passed);
		}
		else {
			$pass_options .= ' -c \'' . realpath($conf_passed) . '\'';
		}
	}

	$test_files = array_unique($test_files);
	$test_files = array_merge($test_files, $redir_tests);
	$test_cnt = count($test_files);

	if ($test_cnt) {
		putenv('NO_INTERACTION=1');
		verify_config();
		write_information();
		usort($test_files, 'test_sort');
		$start_time = time();

		if (!$html_output) {
			echo 'Running selected tests.' . "\n";
		}
		else {
			show_start($start_time);
		}

		$test_idx = 0;
		run_all_tests($test_files, $environment);
		$end_time = time();

		if ($html_output) {
			show_end($end_time);
		}

		if ($failed_tests_file) {
			fclose($failed_tests_file);
		}

		if ($result_tests_file) {
			fclose($result_tests_file);
		}

		compute_summary();

		if ($html_output) {
			fwrite($html_file, '<hr/>' . "\n" . get_summary(false, true));
		}

		echo '=====================================================================';
		echo get_summary(false, false);

		if ($html_output) {
			fclose($html_file);
		}
		if (($output_file != '') && $just_save_results) {
			save_or_mail_results();
		}

		junit_save_xml();
		if ((getenv('REPORT_EXIT_STATUS') !== '0') && (getenv('REPORT_EXIT_STATUS') !== 'no') && ($sum_results['FAILED'] || $sum_results['BORKED'] || $sum_results['LEAKED'])) {
			exit(1);
		}

		return NULL;
	}

	verify_config();
	write_information();
	$test_files = [];
	$exts_tested = count($exts_to_test);
	$exts_skipped = 0;
	$ignored_by_ext = 0;
	sort($exts_to_test);
	$test_dirs = [];
	$optionals = ['Zend', 'tests', 'ext', 'sapi'];

	foreach ($optionals as $dir) {
		if (is_dir($dir)) {
			$test_dirs[] = $dir;
		}
	}

	foreach ($exts_to_test as $key => $val) {
		$exts_to_test[$key] = strtolower($val);
	}

	foreach ($test_dirs as $dir) {
		find_files(TEST_PHP_SRCDIR . ('/' . $dir), $dir == 'ext');
	}

	foreach ($user_tests as $dir) {
		find_files($dir, $dir == 'ext');
	}

	$test_files = array_unique($test_files);
	usort($test_files, 'test_sort');
	$start_time = time();
	show_start($start_time);
	$test_cnt = count($test_files);
	$test_idx = 0;
	run_all_tests($test_files, $environment);
	$end_time = time();

	if ($failed_tests_file) {
		fclose($failed_tests_file);
	}

	if ($result_tests_file) {
		fclose($result_tests_file);
	}

	if (0 == count($test_results)) {
		echo 'No tests were run.' . "\n";
		return NULL;
	}

	compute_summary();
	show_end($end_time);
	show_summary();

	if ($html_output) {
		fclose($html_file);
	}

	save_or_mail_results();
	junit_save_xml();
	if ((getenv('REPORT_EXIT_STATUS') !== '0') && (getenv('REPORT_EXIT_STATUS') !== 'no') && ($sum_results['FAILED'] || $sum_results['LEAKED'])) {
		exit(1);
	}

	exit(0);
}

function verify_config()
{
	global $php;
	if (empty($php) || !file_exists($php)) {
		error('environment variable TEST_PHP_EXECUTABLE must be set to specify PHP executable!');
	}

	if (!is_executable($php)) {
		error('invalid PHP executable specified by TEST_PHP_EXECUTABLE  = ' . $php);
	}
}

function write_information()
{
	global $php;
	global $php_cgi;
	global $phpdbg;
	global $php_info;
	global $user_tests;
	global $ini_overwrites;
	global $pass_options;
	global $exts_to_test;
	global $valgrind;
	global $no_file_cache;
	$info_file = __DIR__ . '/run-test-info.php';
	@unlink($info_file);
	$php_info = '<?php echo "' . "\n" . 'PHP_SAPI    : " , PHP_SAPI , "' . "\n" . 'PHP_VERSION : " , phpversion() , "' . "\n" . 'ZEND_VERSION: " , zend_version() , "' . "\n" . 'PHP_OS      : " , PHP_OS , " - " , php_uname() , "' . "\n" . 'INI actual  : " , realpath(get_cfg_var("cfg_file_path")) , "' . "\n" . 'More .INIs  : " , (function_exists(\'php_ini_scanned_files\') ? str_replace("\\n","", php_ini_scanned_files()) : "** not determined **"); ?>';
	save_text($info_file, $php_info);
	$info_params = [];
	settings2array($ini_overwrites, $info_params);
	$info_params = settings2params($info_params);
	$php_info = shell_exec($php . ' ' . $pass_options . ' ' . $info_params . ' ' . $no_file_cache . ' "' . $info_file . '"');
	define('TESTED_PHP_VERSION', shell_exec($php . ' -n -r "echo PHP_VERSION;"'));
	if ($php_cgi && ($php != $php_cgi)) {
		$php_info_cgi = shell_exec($php_cgi . ' ' . $pass_options . ' ' . $info_params . ' ' . $no_file_cache . ' -q "' . $info_file . '"');
		$php_info_sep = "\n" . '---------------------------------------------------------------------';
		$php_cgi_info = $php_info_sep . "\n" . 'PHP         : ' . $php_cgi . ' ' . $php_info_cgi . $php_info_sep;
	}
	else {
		$php_cgi_info = '';
	}

	if ($phpdbg) {
		$phpdbg_info = shell_exec($phpdbg . ' ' . $pass_options . ' ' . $info_params . ' ' . $no_file_cache . ' -qrr "' . $info_file . '"');
		$php_info_sep = "\n" . '---------------------------------------------------------------------';
		$phpdbg_info = $php_info_sep . "\n" . 'PHP         : ' . $phpdbg . ' ' . $phpdbg_info . $php_info_sep;
	}
	else {
		$phpdbg_info = '';
	}

	if (function_exists('opcache_invalidate')) {
		opcache_invalidate($info_file, true);
	}

	@unlink($info_file);
	save_text($info_file, '<?php echo str_replace("Zend OPcache", "opcache", implode(",", get_loaded_extensions())); ?>');
	$exts_to_test = explode(',', shell_exec($php . ' ' . $pass_options . ' ' . $info_params . ' ' . $no_file_cache . ' "' . $info_file . '"'));
	$info_params_ex = [
		'session'  => ['session.auto_start=0'],
		'tidy'     => ['tidy.clean_output=0'],
		'zlib'     => ['zlib.output_compression=Off'],
		'xdebug'   => ['xdebug.default_enable=0', 'xdebug.mode=off'],
		'mbstring' => ['mbstring.func_overload=0']
	];

	foreach ($info_params_ex as $ext => $ini_overwrites_ex) {
		if (in_array($ext, $exts_to_test)) {
			$ini_overwrites = array_merge($ini_overwrites, $ini_overwrites_ex);
		}
	}

	if (function_exists('opcache_invalidate')) {
		opcache_invalidate($info_file, true);
	}

	@unlink($info_file);
	echo "\n" . '=====================================================================' . "\n" . 'PHP         : ' . $php . ' ' . $php_info . ' ' . $php_cgi_info . ' ' . $phpdbg_info . "\n" . 'CWD         : ' . TEST_PHP_SRCDIR . "\n" . 'Extra dirs  : ';

	foreach ($user_tests as $test_dir) {
		echo $test_dir . "\n\t\t\t" . '  ';
	}

	echo "\n" . 'VALGRIND    : ' . ($valgrind ? $valgrind->getHeader() : 'Not used') . "\n" . '=====================================================================' . "\n";
}

function save_or_mail_results()
{
	global $sum_results;
	global $just_save_results;
	global $failed_test_summary;
	global $PHP_FAILED_TESTS;
	global $php;
	global $output_file;
	if (!getenv('NO_INTERACTION') && !TRAVIS_CI) {
		$fp = fopen('php://stdin', 'r+');
		if ($sum_results['FAILED'] || $sum_results['BORKED'] || $sum_results['WARNED'] || $sum_results['LEAKED']) {
			echo "\n" . 'You may have found a problem in PHP.';
		}

		echo "\n" . 'This report can be automatically sent to the PHP QA team at' . "\n";
		echo QA_REPORTS_PAGE . ' and http://news.php.net/php.qa.reports' . "\n";
		echo 'This gives us a better understanding of PHP\'s behavior.' . "\n";
		echo 'If you don\'t want to send the report immediately you can choose' . "\n";
		echo 'option "s" to save it.' . "\t" . 'You can then email it to ' . PHP_QA_EMAIL . ' later.' . "\n";
		echo 'Do you want to send this report now? [Yns]: ';
		flush();
		$user_input = fgets($fp, 10);
		$just_save_results = strtolower($user_input[0]) == 's';
	}
	if ($just_save_results || !getenv('NO_INTERACTION') || TRAVIS_CI) {
		if ($just_save_results || TRAVIS_CI || (strlen(trim($user_input)) == 0) || (strtolower($user_input[0]) == 'y')) {
			if ($just_save_results) {
				$user_input = 's';
			}

			if (TRAVIS_CI) {
				$user_email = 'travis at php dot net';
			}
			else if (!strncasecmp($user_input, 'y', 1) || (strlen(trim($user_input)) == 0)) {
				echo "\n" . 'Please enter your email address.' . "\n" . '(Your address will be mangled so that it will not go out on any' . "\n" . 'mailinglist in plain text): ';
				flush();
				$user_email = trim(fgets($fp, 1024));
				$user_email = str_replace('@', ' at ', str_replace('.', ' dot ', $user_email));
			}

			$failed_tests_data = '';
			$sep = "\n" . str_repeat('=', 80) . "\n";
			$failed_tests_data .= $failed_test_summary . "\n";
			$failed_tests_data .= get_summary(true, false) . "\n";

			if ($sum_results['FAILED']) {
				foreach ($PHP_FAILED_TESTS['FAILED'] as $test_info) {
					$failed_tests_data .= $sep . $test_info['name'] . $test_info['info'];
					$failed_tests_data .= $sep . file_get_contents(realpath($test_info['output']), FILE_BINARY);
					$failed_tests_data .= $sep . file_get_contents(realpath($test_info['diff']), FILE_BINARY);
					$failed_tests_data .= $sep . "\n\n";
				}

				$status = 'failed';
			}
			else {
				$status = 'success';
			}

			$failed_tests_data .= "\n" . $sep . 'BUILD ENVIRONMENT' . $sep;
			$failed_tests_data .= 'OS:' . "\n" . PHP_OS . ' - ' . php_uname() . "\n\n";
			$ldd = $autoconf = $sys_libtool = $libtool = $compiler = 'N/A';

			if (substr(PHP_OS, 0, 3) != 'WIN') {
				if (getenv('PHP_AUTOCONF')) {
					$autoconf = shell_exec(getenv('PHP_AUTOCONF') . ' --version');
				}
				else {
					$autoconf = shell_exec('autoconf --version');
				}

				$libtool = shell_exec(INIT_DIR . '/libtool --version');
				$sys_libtool_path = shell_exec(__DIR__ . '/build/shtool path glibtool libtool');

				if ($sys_libtool_path) {
					$sys_libtool = shell_exec(str_replace("\n", '', $sys_libtool_path) . ' --version');
				}

				$flags = ['-v', '-V', '--version'];
				$cc_status = 0;

				foreach ($flags as $flag) {
					system(getenv('CC') . (' ' . $flag . ' >/dev/null 2>&1'), $cc_status);

					if ($cc_status == 0) {
						$compiler = shell_exec(getenv('CC') . (' ' . $flag . ' 2>&1'));
						break;
					}
				}

				$ldd = shell_exec('ldd ' . $php . ' 2>/dev/null');
			}

			$failed_tests_data .= 'Autoconf:' . "\n" . $autoconf . "\n";
			$failed_tests_data .= 'Bundled Libtool:' . "\n" . $libtool . "\n";
			$failed_tests_data .= 'System Libtool:' . "\n" . $sys_libtool . "\n";
			$failed_tests_data .= 'Compiler:' . "\n" . $compiler . "\n";
			$failed_tests_data .= 'Bison:' . "\n" . shell_exec('bison --version 2>/dev/null') . "\n";
			$failed_tests_data .= 'Libraries:' . "\n" . $ldd . "\n";
			$failed_tests_data .= "\n";

			if (isset($user_email)) {
				$failed_tests_data .= 'User\'s E-mail: ' . $user_email . "\n\n";
			}

			$failed_tests_data .= $sep . 'PHPINFO' . $sep;
			$failed_tests_data .= shell_exec($php . ' -ddisplay_errors=stderr -dhtml_errors=0 -i 2> /dev/null');
			if (($just_save_results || !mail_qa_team($failed_tests_data, $status)) && !TRAVIS_CI) {
				file_put_contents($output_file, $failed_tests_data);

				if (!$just_save_results) {
					echo "\n" . 'The test script was unable to automatically send the report to PHP\'s QA Team' . "\n";
				}

				echo 'Please send ' . $output_file . ' to ' . PHP_QA_EMAIL . ' manually, thank you.' . "\n";
			}
			else if (!getenv('NO_INTERACTION') && !TRAVIS_CI) {
				fwrite($fp, "\n" . 'Thank you for helping to make PHP better.' . "\n");
				fclose($fp);
			}
		}
	}
}

function find_files($dir, $is_ext_dir = false, $ignore = false)
{
	global $test_files;
	global $exts_to_test;
	global $ignored_by_ext;
	global $exts_skipped;
	while (($name = readdir($o)) !== false) {
		if (is_dir($dir . '/' . $name) && !in_array($name, ['.', '..', '.svn'])) {
			$skip_ext = $is_ext_dir && !in_array(strtolower($name), $exts_to_test);

			if ($skip_ext) {
				$exts_skipped++;
			}
			find_files($dir . '/' . $name, false, $ignore || $skip_ext);
		}

		if (substr($name, -4) == '.tmp') {
			@unlink($dir . '/' . $name);
			continue;
		}

		if (substr($name, -5) == '.phpt') {
			if ($ignore) {
				$ignored_by_ext++;
				continue;
			}

			$testfile = realpath($dir . '/' . $name);
			$test_files[] = $testfile;
		}
	}

	closedir($o);
}

function test_name($name)
{
	if (is_array($name)) {
		return $name[0] . ':' . $name[1];
	}
	else {
		return $name;
	}
}

function test_sort($a, $b)
{
	$a = test_name($a);
	$b = test_name($b);
	$ta = (strpos($a, TEST_PHP_SRCDIR . '/tests') === 0 ? 1 + (strpos($a, TEST_PHP_SRCDIR . '/tests/run-test') === 0 ? 1 : 0) : 0);
	$tb = (strpos($b, TEST_PHP_SRCDIR . '/tests') === 0 ? 1 + (strpos($b, TEST_PHP_SRCDIR . '/tests/run-test') === 0 ? 1 : 0) : 0);

	if ($ta == $tb) {
		return strcmp($a, $b);
	}
	else {
		return $tb - $ta;
	}
}

function mail_qa_team($data, $status = false)
{
	$url_bits = parse_url(QA_SUBMISSION_PAGE);

	if ($proxy = getenv('http_proxy')) {
		$proxy = parse_url($proxy);
		$path = $url_bits['host'] . $url_bits['path'];
		$host = $proxy['host'];

		if (empty($proxy['port'])) {
			$proxy['port'] = 80;
		}

		$port = $proxy['port'];
	}
	else {
		$path = $url_bits['path'];
		$host = $url_bits['host'];
		$port = (empty($url_bits['port']) ? 80 : $port = $url_bits['port']);
	}

	$data = 'php_test_data=' . urlencode(base64_encode(str_replace("\0", '[0x0]', $data)));
	$data_length = strlen($data);
	$fs = fsockopen($host, $port, $errno, $errstr, 10);

	if (!$fs) {
		return false;
	}

	$php_version = urlencode(TESTED_PHP_VERSION);
	echo "\n" . 'Posting to ' . QA_SUBMISSION_PAGE . "\n";
	fwrite($fs, 'POST ' . $path . ('?status=' . $status . '&version=' . $php_version . ' HTTP/1.1' . "\r\n"));
	fwrite($fs, 'Host: ' . $host . "\r\n");
	fwrite($fs, 'User-Agent: QA Browser 0.1' . "\r\n");
	fwrite($fs, 'Content-Type: application/x-www-form-urlencoded' . "\r\n");
	fwrite($fs, 'Content-Length: ' . $data_length . "\r\n\r\n");
	fwrite($fs, $data);
	fwrite($fs, "\r\n\r\n");
	fclose($fs);
	return 1;
}

function save_text($filename, $text, $filename_copy = NULL)
{
	global $DETAILED;
	if ($filename_copy && ($filename_copy != $filename)) {
		if (file_put_contents($filename_copy, $text, FILE_BINARY) === false) {
			error('Cannot open file \'' . $filename_copy . '\' (save_text)');
		}
	}

	if (file_put_contents($filename, $text, FILE_BINARY) === false) {
		error('Cannot open file \'' . $filename . '\' (save_text)');
	}

	if (1 < $DETAILED) {
		echo "\n" . 'FILE ' . $filename . ' {{{' . "\n" . $text . "\n" . '}}}' . "\n";
	}
}

function error_report($testname, $logname, $tested)
{
	$testname = realpath($testname);
	$logname = realpath($logname);

	switch (strtoupper(getenv('TEST_PHP_ERROR_STYLE'))) {
	case 'MSVC':
		echo $testname . ('(1) : ' . $tested . "\n");
		echo $logname . ('(1) :  ' . $tested . "\n");
		break;
	case 'EMACS':
		echo $testname . (':1: ' . $tested . "\n");
		echo $logname . (':1:  ' . $tested . "\n");
		break;
	}
}

function system_with_timeout($commandline, $env = NULL, $stdin = NULL, $captureStdIn = true, $captureStdOut = true, $captureStdErr = true)
{
	global $valgrind;
	$data = '';
	$bin_env = [];

	foreach ((array) $env as $key => $value) {
		$bin_env[$key] = $value;
	}

	$descriptorspec = [];

	if ($captureStdIn) {
		$descriptorspec[0] = ['pipe', 'r'];
	}

	if ($captureStdOut) {
		$descriptorspec[1] = ['pipe', 'w'];
	}

	if ($captureStdErr) {
		$descriptorspec[2] = ['pipe', 'w'];
	}

	$proc = proc_open($commandline, $descriptorspec, $pipes, TEST_PHP_SRCDIR, $bin_env, ['suppress_errors' => true]);

	if (!$proc) {
		return false;
	}

	if ($captureStdIn) {
		if (!is_null($stdin)) {
			fwrite($pipes[0], $stdin);
		}

		fclose($pipes[0]);
		unset($pipes[0]);
	}

	$timeout = ($valgrind ? 300 : $env['TEST_TIMEOUT'] ?? 60);

	while (true) {
		$r = $pipes;
		$w = NULL;
		$e = NULL;
		$n = @stream_select($r, $w, $e, $timeout);

		if ($n === false) {
			break;
			continue;
		}

		if ($n === 0) {
			$data .= "\n" . ' ** ERROR: process timed out **' . "\n";
			proc_terminate($proc, 9);
			return $data;
			continue;
		}

		if (0 < $n) {
			if ($captureStdOut) {
				$line = fread($pipes[1], 8192);
			}
			else if ($captureStdErr) {
				$line = fread($pipes[2], 8192);
			}
			else {
				$line = '';
			}

			if (strlen($line) == 0) {
				break;
			}

			$data .= $line;
		}
	}

	$stat = proc_get_status($proc);

	if ($stat['signaled']) {
		$data .= "\n" . 'Termsig=' . $stat['stopsig'] . "\n";
	}
	if ((128 < $stat['exitcode']) && ($stat['exitcode'] < 160)) {
		$data .= "\n" . 'Termsig=' . ($stat['exitcode'] - 128) . "\n";
	}

	proc_close($proc);
	return $data;
}

function run_all_tests($test_files, $env, $redir_tested = NULL)
{
	global $test_results;
	global $failed_tests_file;
	global $result_tests_file;
	global $php;
	global $test_idx;
	global $PHP_FAILED_TESTS;
	global $workers;
	global $workerID;
	global $workerSock;
	if (($workers !== NULL) && !$workerID) {
		run_all_tests_parallel($test_files, $env, $redir_tested);
		return NULL;
	}

	foreach ($test_files as $name) {
		if (is_array($name)) {
			$index = '# ' . $name[1] . ': ' . $name[0];

			if ($redir_tested) {
				$name = $name[0];
			}
		}
		else if ($redir_tested) {
			$index = '# ' . $redir_tested . ': ' . $name;
		}
		else {
			$index = $name;
		}

		$test_idx++;

		if ($workerID) {
			$PHP_FAILED_TESTS = [
				'BORKED'  => [],
				'FAILED'  => [],
				'WARNED'  => [],
				'LEAKED'  => [],
				'XFAILED' => [],
				'XLEAKED' => [],
				'SLOW'    => []
			];
			ob_start();
		}

		$result = run_test($php, $name, $env);

		if ($workerID) {
			$resultText = ob_get_clean();
		}
		if (!is_array($name) && ($result != 'REDIR')) {
			if ($workerID) {
				send_message($workerSock, ['type' => 'test_result', 'name' => $name, 'index' => $index, 'result' => $result, 'text' => $resultText, 'PHP_FAILED_TESTS' => $PHP_FAILED_TESTS]);
				continue;
			}

			$test_results[$index] = $result;
			if ($failed_tests_file && (($result == 'XFAILED') || ($result == 'XLEAKED') || ($result == 'FAILED') || ($result == 'WARNED') || ($result == 'LEAKED'))) {
				fwrite($failed_tests_file, $index . "\n");
			}

			if ($result_tests_file) {
				fwrite($result_tests_file, $result . "\t" . $index . "\n");
			}
		}
	}
}

/** The heart of parallel testing. */
function run_all_tests_parallel($test_files, $env, $redir_tested)
{
	global $workers;
	global $test_idx;
	global $test_cnt;
	global $test_results;
	global $failed_tests_file;
	global $result_tests_file;
	global $PHP_FAILED_TESTS;
	global $shuffle;
	global $SHOW_ONLY_GROUPS;
	$thisPHP = PHP_BINARY;
	$thisScript = __FILE__;
	$workerProcs = [];
	$workerSocks = [];
	echo '=====================================================================' . "\n";
	echo '========= WELCOME TO THE FUTURE: run-tests PARALLEL EDITION =========' . "\n";
	echo '=====================================================================' . "\n";
	$dirConflictsWith = [];
	$fileConflictsWith = [];
	$sequentialTests = [];

	foreach ($test_files as $i => $file) {
		$contents = file_get_contents($file);

		if (preg_match('/^--CONFLICTS--(.+?)^--/ms', $contents, $matches)) {
			$conflicts = parse_conflicts($matches[1]);
		}
		else {
			$dir = dirname($file);

			if (!isset($dirConflictsWith[$dir])) {
				$dirConflicts = [];

				if (file_exists($dir . '/CONFLICTS')) {
					$contents = file_get_contents($dir . '/CONFLICTS');
					$dirConflicts = parse_conflicts($contents);
				}

				$dirConflictsWith[$dir] = $dirConflicts;
			}

			$conflicts = $dirConflictsWith[$dir];
		}

		if (in_array('all', $conflicts, true)) {
			$sequentialTests[] = $file;
			unset($test_files[$i]);
		}

		$fileConflictsWith[$file] = $conflicts;
	}

	$test_files = array_reverse($test_files);

	if ($shuffle) {
		shuffle($test_files);
	}

	echo 'Spawning workers… ';
	$sockName = stream_socket_get_name($listenSock, false);
	$portPos = strrpos($sockName, ':');
	$sockHost = substr($sockName, 0, $portPos);

	if (false !== strpos($sockHost, ':')) {
		$sockHost = '[' . $sockHost . ']';
	}

	$sockPort = substr($sockName, $portPos + 1);
	$sockUri = 'tcp://' . $sockHost . ':' . $sockPort;

	for ($i = 1; $i <= $workers; $i++) {
		$proc = proc_open($thisPHP . ' ' . escapeshellarg($thisScript), [], $pipes, NULL, $_ENV + ['TEST_PHP_WORKER' => $i, 'TEST_PHP_URI' => $sockUri], ['suppress_errors' => true, 'create_new_console' => true]);

		if ($proc === false) {
			kill_children($workerProcs);
			error('Failed to spawn worker ' . $i);
		}

		$workerProcs[$i] = $proc;
		$workerSock = stream_socket_accept($listenSock, 5);

		if ($workerSock === false) {
			kill_children($workerProcs);
			error('Failed to accept connection from worker ' . $i);
		}

		$greeting = base64_encode(serialize([
			'type'      => 'hello',
			'workerID'  => $i,
			'GLOBALS'   => $GLOBALS,
			'constants' => ['INIT_DIR' => INIT_DIR, 'TEST_PHP_SRCDIR' => TEST_PHP_SRCDIR, 'PHP_QA_EMAIL' => PHP_QA_EMAIL, 'QA_SUBMISSION_PAGE' => QA_SUBMISSION_PAGE, 'QA_REPORTS_PAGE' => QA_REPORTS_PAGE, 'TRAVIS_CI' => TRAVIS_CI]
		])) . "\n";
		stream_set_timeout($workerSock, 5);

		if (fwrite($workerSock, $greeting) === false) {
			kill_children($workerProcs);
			error('Failed to send greeting to worker ' . $i . '.');
		}

		$rawReply = fgets($workerSock);

		if ($rawReply === false) {
			kill_children($workerProcs);
			error('Failed to read greeting reply from worker ' . $i . '.');
		}

		$reply = unserialize(base64_decode($rawReply));
		if (!$reply || ($reply['type'] !== 'hello_reply') || ($reply['workerID'] !== $i)) {
			kill_children($workerProcs);
			error('Greeting reply from worker ' . $i . ' unexpected or could not be decoded: \'' . $rawReply . '\'');
		}

		stream_set_timeout($workerSock, 0);
		stream_set_blocking($workerSock, false);
		$workerSocks[$i] = $workerSock;
		echo $i . ' ';
	}

	echo '… done!' . "\n";
	echo '=====================================================================' . "\n";
	echo "\n";
	$rawMessageBuffers = [];
	$testsInProgress = 0;
	$activeConflicts = [];
	$waitingTests = [];

	label294:

	while ($test_files || $sequentialTests || (0 < $testsInProgress)) {
		$toRead = array_values($workerSocks);
		$toWrite = NULL;
		$toExcept = NULL;

		if (stream_select($toRead, $toWrite, $toExcept, 10)) {
			foreach ($toRead as $workerSock) {
				$i = array_search($workerSock, $workerSocks);

				if ($i === false) {
					kill_children($workerProcs);
					error('Could not find worker stdout in array of worker stdouts, THIS SHOULD NOT HAPPEN.');
				}

				while (false !== $rawMessage = fgets($workerSock)) {
					if (($rawMessageBuffers[$i] ?? '') !== '') {
						$rawMessage = $rawMessageBuffers[$i] . $rawMessage;
						$rawMessageBuffers[$i] = '';
					}

					if (substr($rawMessage, -1) !== "\n") {
						$rawMessageBuffers[$i] = $rawMessage;
						continue;
					}

					$message = unserialize(base64_decode($rawMessage));

					if (!$message) {
						kill_children($workerProcs);
						$stuff = fread($workerSock, 65536);
						error('Could not decode message from worker ' . $i . ': \'' . $rawMessage . $stuff . '\'');
					}

					switch ($message['type']) {
					case 'tests_finished':
						$testsInProgress--;

						foreach ($activeConflicts as $key => $workerId) {
							if ($workerId === $i) {
								unset($activeConflicts[$key]);

								if (isset($waitingTests[$key])) {
									while ($test = array_pop($waitingTests[$key])) {
										$test_files[] = $test;
									}

									unset($waitingTests[$key]);
								}
							}
						}

						if (junit_enabled()) {
							junit_merge_results($message['junit']);
						}
					case 'ready':
						if ((count($workerProcs) === 1) && $sequentialTests) {
							$test_files = array_merge($test_files, $sequentialTests);
							$sequentialTests = [];
						}

						$files = [];
						$batchSize = ($shuffle ? 4 : 32);

						while ((count($files) <= $batchSize) && ($file = array_pop($test_files))) {
							foreach ($fileConflictsWith[$file] as $conflictKey) {
								if (isset($activeConflicts[$conflictKey])) {
									$waitingTests[$conflictKey][] = $file;
									continue 2;
								}
							}

							$files[] = $file;
						}

						if ($files) {
							foreach ($files as $file) {
								foreach ($fileConflictsWith[$file] as $conflictKey) {
									$activeConflicts[$conflictKey] = $i;
								}
							}

							$testsInProgress++;
							send_message($workerSocks[$i], ['type' => 'run_tests', 'test_files' => $files, 'env' => $env, 'redir_tested' => $redir_tested]);
						}
						else {
							proc_terminate($workerProcs[$i]);
							unset($workerProcs[$i]);
							unset($workerSocks[$i]);
							goto label294;
						}

						break;
					case 'test_result':
						list($name, $index, $result, $resultText) = [$message['name'], $message['index'], $message['result'], $message['text']];

						foreach ($message['PHP_FAILED_TESTS'] as $category => $tests) {
							$PHP_FAILED_TESTS[$category] = array_merge($PHP_FAILED_TESTS[$category], $tests);
						}

						$test_idx++;

						if (!$SHOW_ONLY_GROUPS) {
							clear_show_test();
						}

						echo $resultText;

						if (!$SHOW_ONLY_GROUPS) {
							show_test($test_idx, count($workerProcs) . ('/' . $workers . ' concurrent test workers running'));
						}
						if (!is_array($name) && ($result != 'REDIR')) {
							$test_results[$index] = $result;
							if ($failed_tests_file && (($result == 'XFAILED') || ($result == 'XLEAKED') || ($result == 'FAILED') || ($result == 'WARNED') || ($result == 'LEAKED'))) {
								fwrite($failed_tests_file, $index . "\n");
							}

							if ($result_tests_file) {
								fwrite($result_tests_file, $result . "\t" . $index . "\n");
							}
						}

						break;
					case 'error':
						kill_children($workerProcs);
						error('Worker ' . $i . ' reported error: ' . $message['msg']);
						break;
					case 'php_error':
						kill_children($workerProcs);
						$error_consts = ['E_ERROR', 'E_WARNING', 'E_PARSE', 'E_NOTICE', 'E_CORE_ERROR', 'E_CORE_WARNING', 'E_COMPILE_ERROR', 'E_COMPILE_WARNING', 'E_USER_ERROR', 'E_USER_WARNING', 'E_USER_NOTICE', 'E_STRICT', 'E_RECOVERABLE_ERROR', 'E_USER_DEPRECATED'];
						$error_consts = array_combine(array_map('constant', $error_consts), $error_consts);
						error('Worker ' . $i . ' reported unexpected ' . $error_consts[$message['errno']] . ': ' . $message['errstr'] . ' in ' . $message['errfile'] . ' on line ' . $message['errline']);
					default:
						kill_children($workerProcs);
						error('Unrecognised message type \'' . $message['type'] . '\' from worker ' . $i);
					}
				}
			}
		}
	}

	if (!$SHOW_ONLY_GROUPS) {
		clear_show_test();
	}

	kill_children($workerProcs);

	if ($testsInProgress < 0) {
		error($testsInProgress . ' test batches “in progress”, which is less than zero. THIS SHOULD NOT HAPPEN.');
	}
}

function send_message($stream, array $message)
{
	$blocking = stream_get_meta_data($stream)['blocked'];
	stream_set_blocking($stream, true);
	fwrite($stream, base64_encode(serialize($message)) . "\n");
	stream_set_blocking($stream, $blocking);
}

function kill_children(array $children)
{
	foreach ($children as $child) {
		if ($child) {
			proc_terminate($child);
		}
	}
}

function run_worker()
{
	global $workerID;
	global $workerSock;
	$sockUri = getenv('TEST_PHP_URI');
	$greeting = fgets($workerSock);
	($greeting = unserialize(base64_decode($greeting))) || exit('Could not decode greeting' . "\n");
	if (($greeting['type'] !== 'hello') || ($greeting['workerID'] !== $workerID)) {
		error('Unexpected greeting of type ' . $greeting['type'] . ' and for worker ' . $greeting['workerID']);
	}
	set_error_handler(function($errno, $errstr, $errfile, $errline) use($workerSock) {
		if (error_reporting() & $errno) {
			send_message($workerSock, compact('errno', 'errstr', 'errfile', 'errline') + ['type' => 'php_error']);
		}

		return true;
	});

	foreach ($greeting['GLOBALS'] as $var => $value) {
		if (($var !== 'workerID') && ($var !== 'workerSock') && ($var !== 'GLOBALS')) {
			$GLOBALS[$var] = $value;
		}
	}

	foreach ($greeting['constants'] as $const => $value) {
		define($const, $value);
	}

	send_message($workerSock, ['type' => 'hello_reply', 'workerID' => $workerID]);
	send_message($workerSock, ['type' => 'ready']);

	while ($command = fgets($workerSock)) {
		$command = unserialize(base64_decode($command));

		switch ($command['type']) {
		case 'run_tests':
			run_all_tests($command['test_files'], $command['env'], $command['redir_tested']);
			send_message($workerSock, ['type' => 'tests_finished', 'junit' => junit_enabled() ? $GLOBALS['JUNIT'] : NULL]);
			junit_init();
			break;
		default:
			send_message($workerSock, ['type' => 'error', 'msg' => 'Unrecognised message type: ' . $command['type']]);
			break 2;
		}
	}
}

function show_file_block($file, $block, $section = NULL)
{
	global $cfg;

	if ($cfg['show'][$file]) {
		if (is_null($section)) {
			$section = strtoupper($file);
		}

		echo "\n" . '========' . $section . '========' . "\n";
		echo rtrim($block);
		echo "\n" . '========DONE========' . "\n";
	}
}

function run_test($php, $file, $env)
{
	global $log_format;
	global $ini_overwrites;
	global $PHP_FAILED_TESTS;
	global $pass_options;
	global $DETAILED;
	global $IN_REDIRECT;
	global $test_cnt;
	global $test_idx;
	global $valgrind;
	global $temp_source;
	global $temp_target;
	global $cfg;
	global $environment;
	global $no_clean;
	global $SHOW_ONLY_GROUPS;
	global $no_file_cache;
	global $slow_min_ms;
	global $preload;
	global $workerID;
	$temp_filenames = NULL;
	$org_file = $file;

	if (isset($env['TEST_PHP_CGI_EXECUTABLE'])) {
		$php_cgi = $env['TEST_PHP_CGI_EXECUTABLE'];
	}

	if (isset($env['TEST_PHPDBG_EXECUTABLE'])) {
		$phpdbg = $env['TEST_PHPDBG_EXECUTABLE'];
	}

	if (is_array($file)) {
		$file = $file[0];
	}

	if ($DETAILED) {
		echo "\n" . '=================' . "\n" . 'TEST ' . $file . "\n";
	}

	$section_text = ['TEST' => ''];
	$bork_info = NULL;

	if (!feof($fp)) {
		$line = fgets($fp);

		if ($line === false) {
			$bork_info = 'cannot read test';
		}
	}
	else {
		$bork_info = 'empty test [' . $file . ']';
	}
	if (($bork_info === NULL) && strncmp('--TEST--', $line, 8)) {
		$bork_info = 'tests must start with --TEST-- [' . $file . ']';
	}

	$section = 'TEST';
	$secfile = false;
	$secdone = false;

	while (!feof($fp)) {
		$line = fgets($fp);

		if ($line === false) {
			break;
		}

		if (preg_match('/^--([_A-Z]+)--/', $line, $r)) {
			$section = (string) $r[1];
			if (isset($section_text[$section]) && $section_text[$section]) {
				$bork_info = 'duplicated ' . $section . ' section';
			}

			if (!in_array($section, ['EXPECT', 'EXPECTF', 'EXPECTREGEX', 'EXPECTREGEX_EXTERNAL', 'EXPECT_EXTERNAL', 'EXPECTF_EXTERNAL', 'EXPECTHEADERS', 'POST', 'POST_RAW', 'GZIP_POST', 'DEFLATE_POST', 'PUT', 'GET', 'COOKIE', 'ARGS', 'FILE', 'FILEEOF', 'FILE_EXTERNAL', 'REDIRECTTEST', 'CAPTURE_STDIO', 'STDIN', 'CGI', 'PHPDBG', 'INI', 'ENV', 'EXTENSIONS', 'SKIPIF', 'XFAIL', 'XLEAK', 'CLEAN', 'CREDITS', 'DESCRIPTION', 'CONFLICTS', 'WHITESPACE_SENSITIVE'])) {
				$bork_info = 'Unknown section "' . $section . '"';
			}

			$section_text[$section] = '';
			$secfile = ($section == 'FILE') || ($section == 'FILEEOF') || ($section == 'FILE_EXTERNAL');
			$secdone = false;
			continue;
		}

		if (!$secdone) {
			$section_text[$section] .= $line;
		}
		if ($secfile && preg_match('/^===DONE===\\s*$/', $line)) {
			$secdone = true;
		}
	}

	if ($bork_info === NULL) {
		if (isset($section_text['REDIRECTTEST'])) {
			if ($IN_REDIRECT) {
				$bork_info = 'Can\'t redirect a test from within a redirected test';
			}
		}
		else {
			if (!isset($section_text['PHPDBG']) && ((isset($section_text['FILE']) + isset($section_text['FILEEOF']) + isset($section_text['FILE_EXTERNAL'])) != 1)) {
				$bork_info = 'missing section --FILE--';
			}

			if (isset($section_text['FILEEOF'])) {
				$section_text['FILE'] = preg_replace('/[' . "\r\n" . ']+$/', '', $section_text['FILEEOF']);
				unset($section_text['FILEEOF']);
			}

			foreach (['FILE', 'EXPECT', 'EXPECTF', 'EXPECTREGEX'] as $prefix) {
				$key = $prefix . '_EXTERNAL';

				if (isset($section_text[$key])) {
					$section_text[$key] = dirname($file) . '/' . trim(str_replace('..', '', $section_text[$key]));

					if (file_exists($section_text[$key])) {
						$section_text[$prefix] = file_get_contents($section_text[$key], FILE_BINARY);
						unset($section_text[$key]);
					}
					else {
						$bork_info = 'could not load --' . $key . '-- ' . dirname($file) . '/' . trim($section_text[$key]);
					}
				}
			}

			if ((isset($section_text['EXPECT']) + isset($section_text['EXPECTF']) + isset($section_text['EXPECTREGEX'])) != 1) {
				$bork_info = 'missing section --EXPECT--, --EXPECTF-- or --EXPECTREGEX--';
			}
		}
	}

	fclose($fp);
	$shortname = str_replace(TEST_PHP_SRCDIR . '/', '', $file);
	$tested_file = $shortname;

	if ($bork_info !== NULL) {
		show_result('BORK', $bork_info, $tested_file);
		$PHP_FAILED_TESTS['BORKED'][] = ['name' => $file, 'test_name' => '', 'output' => '', 'diff' => '', 'info' => $bork_info . ' [' . $file . ']'];
		junit_mark_test_as('BORK', $shortname, $tested_file, 0, $bork_info);
		return 'BORKED';
	}

	if (isset($section_text['CAPTURE_STDIO'])) {
		$captureStdIn = stripos($section_text['CAPTURE_STDIO'], 'STDIN') !== false;
		$captureStdOut = stripos($section_text['CAPTURE_STDIO'], 'STDOUT') !== false;
		$captureStdErr = stripos($section_text['CAPTURE_STDIO'], 'STDERR') !== false;
	}
	else {
		$captureStdIn = true;
		$captureStdOut = true;
		$captureStdErr = true;
	}
	if ($captureStdOut && $captureStdErr) {
		$cmdRedirect = ' 2>&1';
	}
	else {
		$cmdRedirect = '';
	}

	$tested = trim($section_text['TEST']);
	if (array_key_exists('CGI', $section_text) || !empty($section_text['GET']) || !empty($section_text['POST']) || !empty($section_text['GZIP_POST']) || !empty($section_text['DEFLATE_POST']) || !empty($section_text['POST_RAW']) || !empty($section_text['PUT']) || !empty($section_text['COOKIE']) || !empty($section_text['EXPECTHEADERS'])) {
		if (isset($php_cgi)) {
			$php = $php_cgi . ' -C ';
		}
		else if (!strncasecmp(PHP_OS, 'win', 3) && file_exists(dirname($php) . '/php-cgi.exe')) {
			$php = realpath(dirname($php) . '/php-cgi.exe') . ' -C ';
		}
		else if (file_exists(dirname($php) . '/../../sapi/cgi/php-cgi')) {
			$php = realpath(dirname($php) . '/../../sapi/cgi/php-cgi') . ' -C ';
		}
		else if (file_exists('./sapi/cgi/php-cgi')) {
			$php = realpath('./sapi/cgi/php-cgi') . ' -C ';
		}
		else if (file_exists(dirname($php) . '/php-cgi')) {
			$php = realpath(dirname($php) . '/php-cgi') . ' -C ';
		}
		else {
			show_result('SKIP', $tested, $tested_file, 'reason: CGI not available');
			junit_init_suite(junit_get_suitename_for($shortname));
			junit_mark_test_as('SKIP', $shortname, $tested, 0, 'CGI not available');
			return 'SKIPPED';
		}

		$uses_cgi = true;
	}

	$extra_options = '';

	if (array_key_exists('PHPDBG', $section_text)) {
		if (!isset($section_text['STDIN'])) {
			$section_text['STDIN'] = $section_text['PHPDBG'] . "\n";
		}

		if (isset($phpdbg)) {
			$php = $phpdbg . ' -qIb';
			$extra_options = '-rr';
		}
		else {
			show_result('SKIP', $tested, $tested_file, 'reason: phpdbg not available');
			junit_init_suite(junit_get_suitename_for($shortname));
			junit_mark_test_as('SKIP', $shortname, $tested, 0, 'phpdbg not available');
			return 'SKIPPED';
		}
	}
	if (!$SHOW_ONLY_GROUPS && !$workerID) {
		show_test($test_idx, $shortname);
	}

	if (is_array($IN_REDIRECT)) {
		$temp_dir = $test_dir = $IN_REDIRECT['dir'];
	}
	else {
		$temp_dir = $test_dir = realpath(dirname($file));
	}
	if ($temp_source && $temp_target) {
		$temp_dir = str_replace($temp_source, $temp_target, $temp_dir);
	}

	$main_file_name = basename($file, 'phpt');
	$diff_filename = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'diff';
	$log_filename = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'log';
	$exp_filename = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'exp';
	$output_filename = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'out';
	$memcheck_filename = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'mem';
	$sh_filename = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'sh';
	$temp_file = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'php';
	$test_file = $test_dir . DIRECTORY_SEPARATOR . $main_file_name . 'php';
	$temp_skipif = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'skip.php';
	$test_skipif = $test_dir . DIRECTORY_SEPARATOR . $main_file_name . 'skip.php';
	$temp_clean = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'clean.php';
	$test_clean = $test_dir . DIRECTORY_SEPARATOR . $main_file_name . 'clean.php';
	$preload_filename = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'preload.php';
	$tmp_post = $temp_dir . DIRECTORY_SEPARATOR . $main_file_name . 'post';
	$tmp_relative_file = str_replace(__DIR__ . DIRECTORY_SEPARATOR, '', $test_file) . 't';
	if ($temp_source && $temp_target) {
		$temp_skipif .= 's';
		$temp_file .= 's';
		$temp_clean .= 's';
		$copy_file = $temp_dir . DIRECTORY_SEPARATOR . basename(is_array($file) ? $file[1] : $file) . '.phps';

		if (!is_dir(dirname($copy_file))) {
		}

		if (isset($section_text['FILE'])) {
			save_text($copy_file, $section_text['FILE']);
		}

		$temp_filenames = ['file' => $copy_file, 'diff' => $diff_filename, 'log' => $log_filename, 'exp' => $exp_filename, 'out' => $output_filename, 'mem' => $memcheck_filename, 'sh' => $sh_filename, 'php' => $temp_file, 'skip' => $temp_skipif, 'clean' => $temp_clean];
	}

	if (is_array($IN_REDIRECT)) {
		$tested = $IN_REDIRECT['prefix'] . ' ' . trim($section_text['TEST']);
		$tested_file = $tmp_relative_file;
		$shortname = str_replace(TEST_PHP_SRCDIR . '/', '', $tested_file);
	}

	@unlink($diff_filename);
	@unlink($log_filename);
	@unlink($exp_filename);
	@unlink($output_filename);
	@unlink($memcheck_filename);
	@unlink($sh_filename);
	@unlink($temp_file);
	@unlink($test_file);
	@unlink($temp_skipif);
	@unlink($test_skipif);
	@unlink($tmp_post);
	@unlink($temp_clean);
	@unlink($test_clean);
	@unlink($preload_filename);
	$env['REDIRECT_STATUS'] = '';
	$env['QUERY_STRING'] = '';
	$env['PATH_TRANSLATED'] = '';
	$env['SCRIPT_FILENAME'] = '';
	$env['REQUEST_METHOD'] = '';
	$env['CONTENT_TYPE'] = '';
	$env['CONTENT_LENGTH'] = '';
	$env['TZ'] = '';

	if (!empty($section_text['ENV'])) {
		foreach (explode("\n", trim($section_text['ENV'])) as $e) {
			$e = explode('=', trim($e), 2);
			if (!empty($e[0]) && isset($e[1])) {
				$env[$e[0]] = $e[1];
			}
		}
	}

	$ini_settings = ($workerID ? ['opcache.cache_id' => 'worker' . $workerID] : []);

	if (array_key_exists('EXTENSIONS', $section_text)) {
		$ext_params = [];
		settings2array($ini_overwrites, $ext_params);
		$ext_params = settings2params($ext_params);
		$ext_dir = shell_exec($php . ' ' . $pass_options . ' ' . $extra_options . ' ' . $ext_params . ' -d display_errors=0 -r "echo ini_get(\'extension_dir\');"');
		$extensions = preg_split('/[' . "\n\r" . ']+/', trim($section_text['EXTENSIONS']));
		$loaded = explode(',', shell_exec($php . ' ' . $pass_options . ' ' . $extra_options . ' ' . $ext_params . ' -d display_errors=0 -r "echo implode(\',\', get_loaded_extensions());"'));
		$ext_prefix = (substr(PHP_OS, 0, 3) === 'WIN' ? 'php_' : '');

		foreach ($extensions as $req_ext) {
			if (!in_array($req_ext, $loaded)) {
				if ($req_ext == 'opcache') {
					$ini_settings['zend_extension'][] = $ext_dir . DIRECTORY_SEPARATOR . $ext_prefix . $req_ext . '.' . PHP_SHLIB_SUFFIX;
				}
				else {
					$ini_settings['extension'][] = $ext_dir . DIRECTORY_SEPARATOR . $ext_prefix . $req_ext . '.' . PHP_SHLIB_SUFFIX;
				}
			}
		}
	}

	settings2array($ini_overwrites, $ini_settings);
	$orig_ini_settings = settings2params($ini_settings);

	if (array_key_exists('INI', $section_text)) {
		$section_text['INI'] = str_replace('{PWD}', dirname($file), $section_text['INI']);
		$section_text['INI'] = str_replace('{TMP}', sys_get_temp_dir(), $section_text['INI']);
		settings2array(preg_split('/[' . "\n\r" . ']+/', $section_text['INI']), $ini_settings);
	}

	$ini_settings = settings2params($ini_settings);
	$env['TEST_PHP_EXTRA_ARGS'] = $pass_options . ' ' . $ini_settings;
	$info = '';
	$warn = false;

	if (array_key_exists('SKIPIF', $section_text)) {
		if (trim($section_text['SKIPIF'])) {
			show_file_block('skip', $section_text['SKIPIF']);
			save_text($test_skipif, $section_text['SKIPIF'], $temp_skipif);
			$extra = (substr(PHP_OS, 0, 3) !== 'WIN' ? 'unset REQUEST_METHOD; unset QUERY_STRING; unset PATH_TRANSLATED; unset SCRIPT_FILENAME; unset REQUEST_METHOD;' : '');

			if ($valgrind) {
				$env['USE_ZEND_ALLOC'] = '0';
				$env['ZEND_DONT_UNLOAD_MODULES'] = 1;
			}

			junit_start_timer($shortname);
			$output = system_with_timeout($extra . ' ' . $php . ' ' . $pass_options . ' ' . $extra_options . ' -q ' . $orig_ini_settings . ' ' . $no_file_cache . ' -d display_errors=0 "' . $test_skipif . '"', $env);
			junit_finish_timer($shortname);

			if (!$cfg['keep']['skip']) {
				@unlink($test_skipif);
			}

			if (!strncasecmp('skip', ltrim($output), 4)) {
				if (preg_match('/^\\s*skip\\s*(.+)\\s*/i', $output, $m)) {
					show_result('SKIP', $tested, $tested_file, 'reason: ' . $m[1], $temp_filenames);
				}
				else {
					show_result('SKIP', $tested, $tested_file, '', $temp_filenames);
				}

				if (!$cfg['keep']['skip']) {
					@unlink($test_skipif);
				}

				$message = (!empty($m[1]) ? $m[1] : '');
				junit_mark_test_as('SKIP', $shortname, $tested, NULL, $message);
				return 'SKIPPED';
			}

			if (!strncasecmp('info', ltrim($output), 4)) {
				if (preg_match('/^\\s*info\\s*(.+)\\s*/i', $output, $m)) {
					$info = ' (info: ' . $m[1] . ')';
				}
			}

			if (!strncasecmp('warn', ltrim($output), 4)) {
				if (preg_match('/^\\s*warn\\s*(.+)\\s*/i', $output, $m)) {
					$warn = true;
					$info = ' (warn: ' . $m[1] . ')';
				}
			}

			if (!strncasecmp('xfail', ltrim($output), 5)) {
				$section_text['XFAIL'] = trim(substr(ltrim($output), 5));
			}
		}
	}
	if (!extension_loaded('zlib') && (array_key_exists('GZIP_POST', $section_text) || array_key_exists('DEFLATE_POST', $section_text))) {
		$message = 'ext/zlib required';
		show_result('SKIP', $tested, $tested_file, 'reason: ' . $message, $temp_filenames);
		junit_mark_test_as('SKIP', $shortname, $tested, NULL, $message);
		return 'SKIPPED';
	}

	if (isset($section_text['REDIRECTTEST'])) {
		$test_files = [];
		$IN_REDIRECT = eval($section_text['REDIRECTTEST']);
		$IN_REDIRECT['via'] = 'via [' . $shortname . ']' . "\n\t";
		$IN_REDIRECT['dir'] = realpath(dirname($file));
		$IN_REDIRECT['prefix'] = trim($section_text['TEST']);

		if (!empty($IN_REDIRECT['TESTS'])) {
			if (is_array($org_file)) {
				$test_files[] = $org_file[1];
			}
			else {
				$GLOBALS['test_files'] = $test_files;
				find_files($IN_REDIRECT['TESTS']);

				foreach ($GLOBALS['test_files'] as $f) {
					$test_files[] = [$f, $file];
				}
			}

			$test_cnt += count($test_files) - 1;
			$test_idx--;
			show_redirect_start($IN_REDIRECT['TESTS'], $tested, $tested_file);
			$redirenv = array_merge($environment, $IN_REDIRECT['ENV']);
			$redirenv['REDIR_TEST_DIR'] = realpath($IN_REDIRECT['TESTS']) . DIRECTORY_SEPARATOR;
			usort($test_files, 'test_sort');
			run_all_tests($test_files, $redirenv, $tested);
			show_redirect_ends($IN_REDIRECT['TESTS'], $tested, $tested_file);
			$IN_REDIRECT = false;
			junit_mark_test_as('PASS', $shortname, $tested);
			return 'REDIR';
		}
		else {
			$bork_info = 'Redirect info must contain exactly one TEST string to be used as redirect directory.';
			show_result('BORK', $bork_info, '', $temp_filenames);
			$PHP_FAILED_TESTS['BORKED'][] = ['name' => $file, 'test_name' => '', 'output' => '', 'diff' => '', 'info' => $bork_info . ' [' . $file . ']'];
		}
	}
	if (is_array($org_file) || isset($section_text['REDIRECTTEST'])) {
		if (is_array($org_file)) {
			$file = $org_file[0];
		}

		$bork_info = 'Redirected test did not contain redirection info';
		show_result('BORK', $bork_info, '', $temp_filenames);
		$PHP_FAILED_TESTS['BORKED'][] = ['name' => $file, 'test_name' => '', 'output' => '', 'diff' => '', 'info' => $bork_info . ' [' . $file . ']'];
		junit_mark_test_as('BORK', $shortname, $tested, NULL, $bork_info);
		return 'BORKED';
	}

	if (isset($section_text['FILE'])) {
		show_file_block('php', $section_text['FILE'], 'TEST');
		save_text($test_file, $section_text['FILE'], $temp_file);
	}
	else {
		$test_file = $temp_file = '';
	}

	if (array_key_exists('GET', $section_text)) {
		$query_string = trim($section_text['GET']);
	}
	else {
		$query_string = '';
	}

	$env['REDIRECT_STATUS'] = '1';

	if (empty($env['QUERY_STRING'])) {
		$env['QUERY_STRING'] = $query_string;
	}

	if (empty($env['PATH_TRANSLATED'])) {
		$env['PATH_TRANSLATED'] = $test_file;
	}

	if (empty($env['SCRIPT_FILENAME'])) {
		$env['SCRIPT_FILENAME'] = $test_file;
	}

	if (array_key_exists('COOKIE', $section_text)) {
		$env['HTTP_COOKIE'] = trim($section_text['COOKIE']);
	}
	else {
		$env['HTTP_COOKIE'] = '';
	}

	$args = (isset($section_text['ARGS']) ? ' -- ' . $section_text['ARGS'] : '');
	if ($preload && !empty($test_file)) {
		save_text($preload_filename, '<?php opcache_compile_file(\'' . $test_file . '\');');
		$local_pass_options = $pass_options;
		unset($pass_options);
		$pass_options = $local_pass_options;
		$pass_options .= ' -d opcache.preload=' . $preload_filename;
	}
	if (array_key_exists('POST_RAW', $section_text) && !empty($section_text['POST_RAW'])) {
		$post = trim($section_text['POST_RAW']);
		$raw_lines = explode("\n", $post);
		$request = '';
		$started = false;

		foreach ($raw_lines as $line) {
			if (empty($env['CONTENT_TYPE']) && preg_match('/^Content-Type:(.*)/i', $line, $res)) {
				$env['CONTENT_TYPE'] = trim(str_replace("\r", '', $res[1]));
				continue;
			}

			if ($started) {
				$request .= "\n";
			}

			$started = true;
			$request .= $line;
		}

		$env['CONTENT_LENGTH'] = strlen($request);
		$env['REQUEST_METHOD'] = 'POST';

		if (empty($request)) {
			junit_mark_test_as('BORK', $shortname, $tested, NULL, 'empty $request');
			return 'BORKED';
		}

		save_text($tmp_post, $request);
		$cmd = $php . ' ' . $pass_options . ' ' . $ini_settings . ' -f "' . $test_file . '"' . $cmdRedirect . ' < "' . $tmp_post . '"';
	}
	else if (array_key_exists('PUT', $section_text) && !empty($section_text['PUT'])) {
		$post = trim($section_text['PUT']);
		$raw_lines = explode("\n", $post);
		$request = '';
		$started = false;

		foreach ($raw_lines as $line) {
			if (empty($env['CONTENT_TYPE']) && preg_match('/^Content-Type:(.*)/i', $line, $res)) {
				$env['CONTENT_TYPE'] = trim(str_replace("\r", '', $res[1]));
				continue;
			}

			if ($started) {
				$request .= "\n";
			}

			$started = true;
			$request .= $line;
		}

		$env['CONTENT_LENGTH'] = strlen($request);
		$env['REQUEST_METHOD'] = 'PUT';

		if (empty($request)) {
			junit_mark_test_as('BORK', $shortname, $tested, NULL, 'empty $request');
			return 'BORKED';
		}

		save_text($tmp_post, $request);
		$cmd = $php . ' ' . $pass_options . ' ' . $ini_settings . ' -f "' . $test_file . '"' . $cmdRedirect . ' < "' . $tmp_post . '"';
	}
	else if (array_key_exists('POST', $section_text) && !empty($section_text['POST'])) {
		$post = trim($section_text['POST']);
		$content_length = strlen($post);
		save_text($tmp_post, $post);
		$env['REQUEST_METHOD'] = 'POST';

		if (empty($env['CONTENT_TYPE'])) {
			$env['CONTENT_TYPE'] = 'application/x-www-form-urlencoded';
		}

		if (empty($env['CONTENT_LENGTH'])) {
			$env['CONTENT_LENGTH'] = $content_length;
		}

		$cmd = $php . ' ' . $pass_options . ' ' . $ini_settings . ' -f "' . $test_file . '"' . $cmdRedirect . ' < "' . $tmp_post . '"';
	}
	else if (array_key_exists('GZIP_POST', $section_text) && !empty($section_text['GZIP_POST'])) {
		$post = trim($section_text['GZIP_POST']);
		$post = gzencode($post, 9, FORCE_GZIP);
		$env['HTTP_CONTENT_ENCODING'] = 'gzip';
		save_text($tmp_post, $post);
		$content_length = strlen($post);
		$env['REQUEST_METHOD'] = 'POST';
		$env['CONTENT_TYPE'] = 'application/x-www-form-urlencoded';
		$env['CONTENT_LENGTH'] = $content_length;
		$cmd = $php . ' ' . $pass_options . ' ' . $ini_settings . ' -f "' . $test_file . '"' . $cmdRedirect . ' < "' . $tmp_post . '"';
	}
	else if (array_key_exists('DEFLATE_POST', $section_text) && !empty($section_text['DEFLATE_POST'])) {
		$post = trim($section_text['DEFLATE_POST']);
		$post = gzcompress($post, 9);
		$env['HTTP_CONTENT_ENCODING'] = 'deflate';
		save_text($tmp_post, $post);
		$content_length = strlen($post);
		$env['REQUEST_METHOD'] = 'POST';
		$env['CONTENT_TYPE'] = 'application/x-www-form-urlencoded';
		$env['CONTENT_LENGTH'] = $content_length;
		$cmd = $php . ' ' . $pass_options . ' ' . $ini_settings . ' -f "' . $test_file . '"' . $cmdRedirect . ' < "' . $tmp_post . '"';
	}
	else {
		$env['REQUEST_METHOD'] = 'GET';
		$env['CONTENT_TYPE'] = '';
		$env['CONTENT_LENGTH'] = '';
		$cmd = $php . ' ' . $pass_options . ' ' . $ini_settings . ' -f "' . $test_file . '" ' . $args . $cmdRedirect;
	}

	if ($valgrind) {
		$env['USE_ZEND_ALLOC'] = '0';
		$env['ZEND_DONT_UNLOAD_MODULES'] = 1;
		$cmd = $valgrind->wrapCommand($cmd, $memcheck_filename, strpos($test_file, 'pcre') !== false);
	}

	if ($DETAILED) {
		echo "\n" . 'CONTENT_LENGTH  = ' . $env['CONTENT_LENGTH'] . "\n" . 'CONTENT_TYPE    = ' . $env['CONTENT_TYPE'] . "\n" . 'PATH_TRANSLATED = ' . $env['PATH_TRANSLATED'] . "\n" . 'QUERY_STRING    = ' . $env['QUERY_STRING'] . "\n" . 'REDIRECT_STATUS = ' . $env['REDIRECT_STATUS'] . "\n" . 'REQUEST_METHOD  = ' . $env['REQUEST_METHOD'] . "\n" . 'SCRIPT_FILENAME = ' . $env['SCRIPT_FILENAME'] . "\n" . 'HTTP_COOKIE     = ' . $env['HTTP_COOKIE'] . ("\n" . 'COMMAND ' . $cmd . "\n");
	}

	junit_start_timer($shortname);
	$hrtime = hrtime();
	$startTime = ($hrtime[0] * 1000000000) + $hrtime[1];
	$out = system_with_timeout($cmd, $env, $section_text['STDIN'] ?? NULL, $captureStdIn, $captureStdOut, $captureStdErr);
	junit_finish_timer($shortname);
	$hrtime = hrtime();
	$time = (($hrtime[0] * 1000000000) + $hrtime[1]) - $startTime;

	if (($slow_min_ms * 1000000) <= $time) {
		$PHP_FAILED_TESTS['SLOW'][] = ['name' => $file, 'test_name' => (is_array($IN_REDIRECT) ? $IN_REDIRECT['via'] : '') . $tested . (' [' . $tested_file . ']'), 'output' => '', 'diff' => '', 'info' => $time / 1000000000];
	}
	if (array_key_exists('CLEAN', $section_text) && (!$no_clean || $cfg['keep']['clean'])) {
		if (trim($section_text['CLEAN'])) {
			show_file_block('clean', $section_text['CLEAN']);
			save_text($test_clean, trim($section_text['CLEAN']), $temp_clean);

			if (!$no_clean) {
				$extra = (substr(PHP_OS, 0, 3) !== 'WIN' ? 'unset REQUEST_METHOD; unset QUERY_STRING; unset PATH_TRANSLATED; unset SCRIPT_FILENAME; unset REQUEST_METHOD;' : '');
				system_with_timeout($extra . ' ' . $php . ' ' . $pass_options . ' ' . $extra_options . ' -q ' . $orig_ini_settings . ' ' . $no_file_cache . ' "' . $test_clean . '"', $env);
			}

			if (!$cfg['keep']['clean']) {
				@unlink($test_clean);
			}
		}
	}

	@unlink($preload_filename);
	$leaked = false;
	$passed = false;

	if ($valgrind) {
		$leaked = 0 < filesize($memcheck_filename);

		if (!$leaked) {
			@unlink($memcheck_filename);
		}
	}

	$output = preg_replace('/' . "\r\n" . '/', "\n", trim($out));
	$headers = [];
	if (!empty($uses_cgi) && preg_match('/^(.*?)' . "\r" . '?' . "\n\r" . '?' . "\n" . '(.*)/s', $out, $match)) {
		$output = trim($match[2]);
		$rh = preg_split('/[' . "\n\r" . ']+/', $match[1]);

		foreach ($rh as $line) {
			if (strpos($line, ':') !== false) {
				$line = explode(':', $line, 2);
				$headers[trim($line[0])] = trim($line[1]);
			}
		}
	}

	$failed_headers = false;

	if (isset($section_text['EXPECTHEADERS'])) {
		$want = [];
		$wanted_headers = [];
		$lines = preg_split('/[' . "\n\r" . ']+/', $section_text['EXPECTHEADERS']);

		foreach ($lines as $line) {
			if (strpos($line, ':') !== false) {
				$line = explode(':', $line, 2);
				$want[trim($line[0])] = trim($line[1]);
				$wanted_headers[] = trim($line[0]) . ': ' . trim($line[1]);
			}
		}

		$output_headers = [];

		foreach ($want as $k => $v) {
			if (isset($headers[$k])) {
				$output_headers[] = $k . ': ' . $headers[$k];
			}
			if (!isset($headers[$k]) || ($headers[$k] != $v)) {
				$failed_headers = true;
			}
		}

		ksort($wanted_headers);
		$wanted_headers = implode("\n", $wanted_headers);
		ksort($output_headers);
		$output_headers = implode("\n", $output_headers);
	}

	show_file_block('out', $output);

	if ($preload) {
		$output = trim(preg_replace('/' . "\n" . '?Warning: Can\'t preload [^' . "\n" . ']*' . "\n" . '?/', '', $output));
	}
	if (isset($section_text['EXPECTF']) || isset($section_text['EXPECTREGEX'])) {
		if (isset($section_text['EXPECTF'])) {
			$wanted = trim($section_text['EXPECTF']);
		}
		else {
			$wanted = trim($section_text['EXPECTREGEX']);
		}

		show_file_block('exp', $wanted);
		$wanted_re = preg_replace('/\\r\\n/', "\n", $wanted);

		if (isset($section_text['EXPECTF'])) {
			$temp = '';
			$r = '%r';
			$startOffset = 0;
			$length = strlen($wanted_re);

			while ($startOffset < $length) {
				$start = strpos($wanted_re, $r, $startOffset);

				if ($start !== false) {
					$end = strpos($wanted_re, $r, $start + 2);

					if ($end === false) {
						$end = $start = $length;
					}
				}
				else {
					$start = $end = $length;
				}

				$temp .= preg_quote(substr($wanted_re, $startOffset, $start - $startOffset), '/');

				if ($start < $end) {
					$temp .= '(' . substr($wanted_re, $start + 2, $end - $start - 2) . ')';
				}

				$startOffset = $end + 2;
			}

			$wanted_re = $temp;
			$wanted_re = str_replace('%e', '\\' . DIRECTORY_SEPARATOR, $wanted_re);
			$wanted_re = str_replace('%s', '[^\\r\\n]+', $wanted_re);
			$wanted_re = str_replace('%S', '[^\\r\\n]*', $wanted_re);
			$wanted_re = str_replace('%a', '.+', $wanted_re);
			$wanted_re = str_replace('%A', '.*', $wanted_re);
			$wanted_re = str_replace('%w', '\\s*', $wanted_re);
			$wanted_re = str_replace('%i', '[+-]?\\d+', $wanted_re);
			$wanted_re = str_replace('%d', '\\d+', $wanted_re);
			$wanted_re = str_replace('%x', '[0-9a-fA-F]+', $wanted_re);
			$wanted_re = str_replace('%f', '[+-]?\\.?\\d+\\.?\\d*(?:[Ee][+-]?\\d+)?', $wanted_re);
			$wanted_re = str_replace('%c', '.', $wanted_re);
		}

		if (preg_match('/^' . $wanted_re . '$/s', $output)) {
			$passed = true;

			if (!$cfg['keep']['php']) {
				@unlink($test_file);
			}

			@unlink($tmp_post);
			if (!$leaked && !$failed_headers) {
				if (isset($section_text['XFAIL'])) {
					$warn = true;
					$info = ' (warn: XFAIL section but test passes)';
				}
				else if (isset($section_text['XLEAK'])) {
					$warn = true;
					$info = ' (warn: XLEAK section but test passes)';
				}
				else {
					show_result('PASS', $tested, $tested_file, '', $temp_filenames);
					junit_mark_test_as('PASS', $shortname, $tested);
					return 'PASSED';
				}
			}
		}
	}
	else {
		$wanted = trim($section_text['EXPECT']);
		$wanted = preg_replace('/\\r\\n/', "\n", $wanted);
		show_file_block('exp', $wanted);

		if (!strcmp($output, $wanted)) {
			$passed = true;

			if (!$cfg['keep']['php']) {
				@unlink($test_file);
			}

			@unlink($tmp_post);
			if (!$leaked && !$failed_headers) {
				if (isset($section_text['XFAIL'])) {
					$warn = true;
					$info = ' (warn: XFAIL section but test passes)';
				}
				else if (isset($section_text['XLEAK'])) {
					$warn = true;
					$info = ' (warn: XLEAK section but test passes)';
				}
				else {
					show_result('PASS', $tested, $tested_file, '', $temp_filenames);
					junit_mark_test_as('PASS', $shortname, $tested);
					return 'PASSED';
				}
			}
		}

		$wanted_re = NULL;
	}

	if ($failed_headers) {
		$passed = false;
		$wanted = $wanted_headers . "\n" . '--HEADERS--' . "\n" . $wanted;
		$output = $output_headers . "\n" . '--HEADERS--' . "\n" . $output;

		if (isset($wanted_re)) {
			$wanted_re = preg_quote($wanted_headers . "\n" . '--HEADERS--' . "\n", '/') . $wanted_re;
		}
	}

	if ($leaked) {
		$restype[] = (isset($section_text['XLEAK']) ? 'XLEAK' : 'LEAK');
	}

	if ($warn) {
		$restype[] = 'WARN';
	}

	if (!$passed) {
		if (isset($section_text['XFAIL'])) {
			$restype[] = 'XFAIL';
			$info = '  XFAIL REASON: ' . rtrim($section_text['XFAIL']);
		}
		else if (isset($section_text['XLEAK'])) {
			$restype[] = 'XLEAK';
			$info = '  XLEAK REASON: ' . rtrim($section_text['XLEAK']);
		}
		else {
			$restype[] = 'FAIL';
		}
	}

	if (!$passed) {
		if ((strpos($log_format, 'E') !== false) && (file_put_contents($exp_filename, $wanted, FILE_BINARY) === false)) {
			error('Cannot create expected test output - ' . $exp_filename);
		}
		if ((strpos($log_format, 'O') !== false) && (file_put_contents($output_filename, $output, FILE_BINARY) === false)) {
			error('Cannot create test output - ' . $output_filename);
		}

		$diff = generate_diff($wanted, $wanted_re, $output);

		if (is_array($IN_REDIRECT)) {
			$orig_shortname = str_replace(TEST_PHP_SRCDIR . '/', '', $file);
			$diff = '# original source file: ' . $orig_shortname . "\n" . $diff;
		}

		show_file_block('diff', $diff);
		if ((strpos($log_format, 'D') !== false) && (file_put_contents($diff_filename, $diff, FILE_BINARY) === false)) {
			error('Cannot create test diff - ' . $diff_filename);
		}
		if ((strpos($log_format, 'S') !== false) && (file_put_contents($sh_filename, '#!/bin/sh' . "\n\n" . $cmd . "\n", FILE_BINARY) === false)) {
			error('Cannot create test shell script - ' . $sh_filename);
		}

		chmod($sh_filename, 493);
		if ((strpos($log_format, 'L') !== false) && (file_put_contents($log_filename, "\n" . '---- EXPECTED OUTPUT' . "\n" . $wanted . "\n" . '---- ACTUAL OUTPUT' . "\n" . $output . "\n" . '---- FAILED' . "\n", FILE_BINARY) === false)) {
			error('Cannot create test log - ' . $log_filename);
			error_report($file, $log_filename, $tested);
		}
	}
	if ($valgrind && $leaked && $cfg['show']['mem']) {
		show_file_block('mem', file_get_contents($memcheck_filename));
	}

	show_result(implode('&', $restype), $tested, $tested_file, $info, $temp_filenames);

	foreach ($restype as $type) {
		$PHP_FAILED_TESTS[$type . 'ED'][] = ['name' => $file, 'test_name' => (is_array($IN_REDIRECT) ? $IN_REDIRECT['via'] : '') . $tested . (' [' . $tested_file . ']'), 'output' => $output_filename, 'diff' => $diff_filename, 'info' => $info];
	}

	$diff = (empty($diff) ? '' : preg_replace('/\\e/', '<esc>', $diff));
	junit_mark_test_as($restype, $shortname, $tested, NULL, $info, $diff);
	return $restype[0] . 'ED';
}

function comp_line($l1, $l2, $is_reg)
{
	if ($is_reg) {
		return preg_match('/^' . $l1 . '$/s', $l2);
	}
	else {
		return !strcmp($l1, $l2);
	}
}

function count_array_diff($ar1, $ar2, $is_reg, $w, $idx1, $idx2, $cnt1, $cnt2, $steps)
{
	$equal = 0;

	while (($idx1 < $cnt1) && ($idx2 < $cnt2) && comp_line($ar1[$idx1], $ar2[$idx2], $is_reg)) {
		$idx1++;
		$idx2++;
		$equal++;
		$steps--;
	}

	if (0 < --$steps) {
		$eq1 = 0;
		$st = $steps / 2;

		for ($ofs1 = $idx1 + 1; ($ofs1 < $cnt1) && (0 < $st--); $ofs1++) {
			$eq = @count_array_diff($ar1, $ar2, $is_reg, $w, $ofs1, $idx2, $cnt1, $cnt2, $st);

			if ($eq1 < $eq) {
				$eq1 = $eq;
			}
		}

		$eq2 = 0;
		$st = $steps;

		for ($ofs2 = $idx2 + 1; ($ofs2 < $cnt2) && (0 < $st--); $ofs2++) {
			$eq = @count_array_diff($ar1, $ar2, $is_reg, $w, $idx1, $ofs2, $cnt1, $cnt2, $st);

			if ($eq2 < $eq) {
				$eq2 = $eq;
			}
		}

		if ($eq2 < $eq1) {
			$equal += $eq1;
		}
		else if (0 < $eq2) {
			$equal += $eq2;
		}
	}

	return $equal;
}

function generate_array_diff($ar1, $ar2, $is_reg, $w)
{
	$idx1 = 0;
	$cnt1 = @count($ar1);
	$idx2 = 0;
	$cnt2 = @count($ar2);
	$diff = [];
	$old1 = [];
	$old2 = [];

	while (($idx1 < $cnt1) && ($idx2 < $cnt2)) {
		if (comp_line($ar1[$idx1], $ar2[$idx2], $is_reg)) {
			$idx1++;
			$idx2++;
			continue;
		}
		else {
			$c1 = @count_array_diff($ar1, $ar2, $is_reg, $w, $idx1 + 1, $idx2, $cnt1, $cnt2, 10);
			$c2 = @count_array_diff($ar1, $ar2, $is_reg, $w, $idx1, $idx2 + 1, $cnt1, $cnt2, 10);

			if ($c2 < $c1) {
				$old1[$idx1] = sprintf('%03d- ', $idx1 + 1) . $w[$idx1++];
				continue;
			}

			if (0 < $c2) {
				$old2[$idx2] = sprintf('%03d+ ', $idx2 + 1) . $ar2[$idx2++];
				continue;
			}

			$old1[$idx1] = sprintf('%03d- ', $idx1 + 1) . $w[$idx1++];
			$old2[$idx2] = sprintf('%03d+ ', $idx2 + 1) . $ar2[$idx2++];
		}
	}

	reset($old1);
	$k1 = key($old1);
	$l1 = -2;
	reset($old2);
	$k2 = key($old2);
	$l2 = -2;

	while (($k1 !== NULL) || ($k2 !== NULL)) {
		if (($k1 == $l1 + 1) || ($k2 === NULL)) {
			$l1 = $k1;
			$diff[] = current($old1);
			$k1 = (next($old1) ? key($old1) : NULL);
			continue;
		}
		if (($k2 == $l2 + 1) || ($k1 === NULL)) {
			$l2 = $k2;
			$diff[] = current($old2);
			$k2 = (next($old2) ? key($old2) : NULL);
			continue;
		}

		if ($k1 < $k2) {
			$l1 = $k1;
			$diff[] = current($old1);
			$k1 = (next($old1) ? key($old1) : NULL);
			continue;
		}

		$l2 = $k2;
		$diff[] = current($old2);
		$k2 = (next($old2) ? key($old2) : NULL);
	}

	while ($idx1 < $cnt1) {
		$diff[] = sprintf('%03d- ', $idx1 + 1) . $w[$idx1++];
	}

	while ($idx2 < $cnt2) {
		$diff[] = sprintf('%03d+ ', $idx2 + 1) . $ar2[$idx2++];
	}

	return $diff;
}

function generate_diff($wanted, $wanted_re, $output)
{
	$w = explode("\n", $wanted);
	$o = explode("\n", $output);
	$r = (is_null($wanted_re) ? $w : explode("\n", $wanted_re));
	$diff = generate_array_diff($r, $o, !is_null($wanted_re), $w);
	return implode(PHP_EOL, $diff);
}

function error($message)
{
	echo 'ERROR: ' . $message . "\n";
	exit(1);
}

function settings2array($settings, &$ini_settings)
{
	foreach ($settings as $setting) {
		if (strpos($setting, '=') !== false) {
			$setting = explode('=', $setting, 2);
			$name = trim($setting[0]);
			$value = trim($setting[1]);
			if (($name == 'extension') || ($name == 'zend_extension')) {
				if (!isset($ini_settings[$name])) {
					$ini_settings[$name] = [];
				}

				$ini_settings[$name][] = $value;
			}
			else {
				$ini_settings[$name] = $value;
			}
		}
	}
}

function settings2params($ini_settings)
{
	$settings = '';

	foreach ($ini_settings as $name => $value) {
		if (is_array($value)) {
			foreach ($value as $val) {
				$val = addslashes($val);
				$settings .= ' -d "' . $name . '=' . $val . '"';
			}
		}
		else {
			if ((substr(PHP_OS, 0, 3) == 'WIN') && !empty($value) && ($value[0] == '"')) {
				$len = strlen($value);

				if ($value[$len - 1] == '"') {
					$value[0] = '\'';
					$value[$len - 1] = '\'';
				}
			}
			else {
				$value = addslashes($value);
			}

			$settings .= ' -d "' . $name . '=' . $value . '"';
		}
	}

	return $settings;
}

function compute_summary()
{
	global $n_total;
	global $test_results;
	global $ignored_by_ext;
	global $sum_results;
	global $percent_results;
	$n_total = count($test_results);
	$n_total += $ignored_by_ext;
	$sum_results = ['PASSED' => 0, 'WARNED' => 0, 'SKIPPED' => 0, 'FAILED' => 0, 'BORKED' => 0, 'LEAKED' => 0, 'XFAILED' => 0, 'XLEAKED' => 0];

	foreach ($test_results as $v) {
		$sum_results[$v]++;
	}

	$sum_results['SKIPPED'] += $ignored_by_ext;
	$percent_results = [];

	foreach ($sum_results as $v => $n) {
		$percent_results[$v] = (100.0 * $n) / $n_total;
	}
}

function get_summary($show_ext_summary, $show_html)
{
	global $exts_skipped;
	global $exts_tested;
	global $n_total;
	global $sum_results;
	global $percent_results;
	global $end_time;
	global $start_time;
	global $failed_test_summary;
	global $PHP_FAILED_TESTS;
	global $valgrind;
	$x_total = $n_total - $sum_results['SKIPPED'] - $sum_results['BORKED'];

	if ($x_total) {
		$x_warned = (100.0 * $sum_results['WARNED']) / $x_total;
		$x_failed = (100.0 * $sum_results['FAILED']) / $x_total;
		$x_xfailed = (100.0 * $sum_results['XFAILED']) / $x_total;
		$x_xleaked = (100.0 * $sum_results['XLEAKED']) / $x_total;
		$x_leaked = (100.0 * $sum_results['LEAKED']) / $x_total;
		$x_passed = (100.0 * $sum_results['PASSED']) / $x_total;
	}
	else {
		$x_warned = $x_failed = $x_passed = $x_leaked = $x_xfailed = $x_xleaked = 0;
	}

	$summary = '';

	if ($show_html) {
		$summary .= '<pre>' . "\n";
	}

	if ($show_ext_summary) {
		$summary .= "\n" . '=====================================================================' . "\n" . 'TEST RESULT SUMMARY' . "\n" . '---------------------------------------------------------------------' . "\n" . 'Exts skipped    : ' . sprintf('%4d', $exts_skipped) . "\n" . 'Exts tested     : ' . sprintf('%4d', $exts_tested) . "\n" . '---------------------------------------------------------------------' . "\n";
	}

	$summary .= "\n" . 'Number of tests : ' . sprintf('%4d', $n_total) . '          ' . sprintf('%8d', $x_total);

	if ($sum_results['BORKED']) {
		$summary .= "\n" . 'Tests borked    : ' . sprintf('%4d (%5.1f%%)', $sum_results['BORKED'], $percent_results['BORKED']) . ' --------';
	}

	$summary .= "\n" . 'Tests skipped   : ' . sprintf('%4d (%5.1f%%)', $sum_results['SKIPPED'], $percent_results['SKIPPED']) . ' --------' . "\n" . 'Tests warned    : ' . sprintf('%4d (%5.1f%%)', $sum_results['WARNED'], $percent_results['WARNED']) . ' ' . sprintf('(%5.1f%%)', $x_warned) . "\n" . 'Tests failed    : ' . sprintf('%4d (%5.1f%%)', $sum_results['FAILED'], $percent_results['FAILED']) . ' ' . sprintf('(%5.1f%%)', $x_failed);

	if ($sum_results['XFAILED']) {
		$summary .= "\n" . 'Expected fail   : ' . sprintf('%4d (%5.1f%%)', $sum_results['XFAILED'], $percent_results['XFAILED']) . ' ' . sprintf('(%5.1f%%)', $x_xfailed);
	}

	if ($valgrind) {
		$summary .= "\n" . 'Tests leaked    : ' . sprintf('%4d (%5.1f%%)', $sum_results['LEAKED'], $percent_results['LEAKED']) . ' ' . sprintf('(%5.1f%%)', $x_leaked);

		if ($sum_results['XLEAKED']) {
			$summary .= "\n" . 'Expected leak   : ' . sprintf('%4d (%5.1f%%)', $sum_results['XLEAKED'], $percent_results['XLEAKED']) . ' ' . sprintf('(%5.1f%%)', $x_xleaked);
		}
	}

	$summary .= "\n" . 'Tests passed    : ' . sprintf('%4d (%5.1f%%)', $sum_results['PASSED'], $percent_results['PASSED']) . ' ' . sprintf('(%5.1f%%)', $x_passed) . "\n" . '---------------------------------------------------------------------' . "\n" . 'Time taken      : ' . sprintf('%4d seconds', $end_time - $start_time) . "\n" . '=====================================================================' . "\n";
	$failed_test_summary = '';

	if (count($PHP_FAILED_TESTS['SLOW'])) {
		usort($PHP_FAILED_TESTS['SLOW'], function($a, $b) {
			return $a['info'] < $b['info'] ? 1 : -1;
		});
		$failed_test_summary .= "\n" . '=====================================================================' . "\n" . 'SLOW TEST SUMMARY' . "\n" . '---------------------------------------------------------------------' . "\n";

		foreach ($PHP_FAILED_TESTS['SLOW'] as $failed_test_data) {
			$failed_test_summary .= sprintf('(%.3f s) ', $failed_test_data['info']) . $failed_test_data['test_name'] . "\n";
		}

		$failed_test_summary .= '=====================================================================' . "\n";
	}

	if (count($PHP_FAILED_TESTS['XFAILED'])) {
		$failed_test_summary .= "\n" . '=====================================================================' . "\n" . 'EXPECTED FAILED TEST SUMMARY' . "\n" . '---------------------------------------------------------------------' . "\n";

		foreach ($PHP_FAILED_TESTS['XFAILED'] as $failed_test_data) {
			$failed_test_summary .= $failed_test_data['test_name'] . $failed_test_data['info'] . "\n";
		}

		$failed_test_summary .= '=====================================================================' . "\n";
	}

	if (count($PHP_FAILED_TESTS['BORKED'])) {
		$failed_test_summary .= "\n" . '=====================================================================' . "\n" . 'BORKED TEST SUMMARY' . "\n" . '---------------------------------------------------------------------' . "\n";

		foreach ($PHP_FAILED_TESTS['BORKED'] as $failed_test_data) {
			$failed_test_summary .= $failed_test_data['info'] . "\n";
		}

		$failed_test_summary .= '=====================================================================' . "\n";
	}

	if (count($PHP_FAILED_TESTS['FAILED'])) {
		$failed_test_summary .= "\n" . '=====================================================================' . "\n" . 'FAILED TEST SUMMARY' . "\n" . '---------------------------------------------------------------------' . "\n";

		foreach ($PHP_FAILED_TESTS['FAILED'] as $failed_test_data) {
			$failed_test_summary .= $failed_test_data['test_name'] . $failed_test_data['info'] . "\n";
		}

		$failed_test_summary .= '=====================================================================' . "\n";
	}

	if (count($PHP_FAILED_TESTS['WARNED'])) {
		$failed_test_summary .= "\n" . '=====================================================================' . "\n" . 'WARNED TEST SUMMARY' . "\n" . '---------------------------------------------------------------------' . "\n";

		foreach ($PHP_FAILED_TESTS['WARNED'] as $failed_test_data) {
			$failed_test_summary .= $failed_test_data['test_name'] . $failed_test_data['info'] . "\n";
		}

		$failed_test_summary .= '=====================================================================' . "\n";
	}

	if (count($PHP_FAILED_TESTS['LEAKED'])) {
		$failed_test_summary .= "\n" . '=====================================================================' . "\n" . 'LEAKED TEST SUMMARY' . "\n" . '---------------------------------------------------------------------' . "\n";

		foreach ($PHP_FAILED_TESTS['LEAKED'] as $failed_test_data) {
			$failed_test_summary .= $failed_test_data['test_name'] . $failed_test_data['info'] . "\n";
		}

		$failed_test_summary .= '=====================================================================' . "\n";
	}

	if (count($PHP_FAILED_TESTS['XLEAKED'])) {
		$failed_test_summary .= "\n" . '=====================================================================' . "\n" . 'EXPECTED LEAK TEST SUMMARY' . "\n" . '---------------------------------------------------------------------' . "\n";

		foreach ($PHP_FAILED_TESTS['XLEAKED'] as $failed_test_data) {
			$failed_test_summary .= $failed_test_data['test_name'] . $failed_test_data['info'] . "\n";
		}

		$failed_test_summary .= '=====================================================================' . "\n";
	}
	if ($failed_test_summary && !getenv('NO_PHPTEST_SUMMARY')) {
		$summary .= $failed_test_summary;
	}

	if ($show_html) {
		$summary .= '</pre>';
	}

	return $summary;
}

function show_start($start_time)
{
	global $html_output;
	global $html_file;

	if ($html_output) {
		fwrite($html_file, '<h2>Time Start: ' . date('Y-m-d H:i:s', $start_time) . '</h2>' . "\n");
		fwrite($html_file, '<table>' . "\n");
	}

	echo 'TIME START ' . date('Y-m-d H:i:s', $start_time) . "\n" . '=====================================================================' . "\n";
}

function show_end($end_time)
{
	global $html_output;
	global $html_file;

	if ($html_output) {
		fwrite($html_file, '</table>' . "\n");
		fwrite($html_file, '<h2>Time End: ' . date('Y-m-d H:i:s', $end_time) . '</h2>' . "\n");
	}

	echo '=====================================================================' . "\n" . 'TIME END ' . date('Y-m-d H:i:s', $end_time) . "\n";
}

function show_summary()
{
	global $html_output;
	global $html_file;

	if ($html_output) {
		fwrite($html_file, '<hr/>' . "\n" . get_summary(true, true));
	}

	echo get_summary(true, false);
}

function show_redirect_start($tests, $tested, $tested_file)
{
	global $html_output;
	global $html_file;
	global $line_length;
	global $SHOW_ONLY_GROUPS;

	if ($html_output) {
		fwrite($html_file, '<tr><td colspan=\'3\'>---&gt; ' . $tests . ' (' . $tested . ' [' . $tested_file . ']) begin</td></tr>' . "\n");
	}
	if (!$SHOW_ONLY_GROUPS || in_array('REDIRECT', $SHOW_ONLY_GROUPS)) {
		echo 'REDIRECT ' . $tests . ' (' . $tested . ' [' . $tested_file . ']) begin' . "\n";
	}
	else {
		clear_show_test();
	}
}

function show_redirect_ends($tests, $tested, $tested_file)
{
	global $html_output;
	global $html_file;
	global $line_length;
	global $SHOW_ONLY_GROUPS;

	if ($html_output) {
		fwrite($html_file, '<tr><td colspan=\'3\'>---&gt; ' . $tests . ' (' . $tested . ' [' . $tested_file . ']) done</td></tr>' . "\n");
	}
	if (!$SHOW_ONLY_GROUPS || in_array('REDIRECT', $SHOW_ONLY_GROUPS)) {
		echo 'REDIRECT ' . $tests . ' (' . $tested . ' [' . $tested_file . ']) done' . "\n";
	}
	else {
		clear_show_test();
	}
}

function show_test($test_idx, $shortname)
{
	global $test_cnt;
	global $line_length;
	$str = 'TEST ' . $test_idx . '/' . $test_cnt . ' [' . $shortname . ']' . "\r";
	$line_length = strlen($str);
	echo $str;
	flush();
}

function clear_show_test()
{
	global $line_length;
	global $workerID;

	if (!$workerID) {
		echo str_repeat(' ', $line_length);
		echo "\r";
	}
}

function parse_conflicts(string $text): array
{
	$text = preg_replace('/#.*/', '', $text);
	return array_map('trim', explode("\n", trim($text)));
}

function show_result($result, $tested, $tested_file, $extra = '', $temp_filenames = NULL)
{
	global $html_output;
	global $html_file;
	global $temp_target;
	global $temp_urlbase;
	global $line_length;
	global $SHOW_ONLY_GROUPS;
	if (!$SHOW_ONLY_GROUPS || in_array($result, $SHOW_ONLY_GROUPS)) {
		echo $result . ' ' . $tested . ' [' . $tested_file . '] ' . $extra . "\n";
	}
	else if (!$SHOW_ONLY_GROUPS) {
		clear_show_test();
	}

	if ($html_output) {
		if (isset($temp_filenames['file']) && file_exists($temp_filenames['file'])) {
			$url = str_replace($temp_target, $temp_urlbase, $temp_filenames['file']);
			$tested = '<a href=\'' . $url . '\'>' . $tested . '</a>';
		}
		if (isset($temp_filenames['skip']) && file_exists($temp_filenames['skip'])) {
			if (empty($extra)) {
				$extra = 'skipif';
			}

			$url = str_replace($temp_target, $temp_urlbase, $temp_filenames['skip']);
			$extra = '<a href=\'' . $url . '\'>' . $extra . '</a>';
		}
		else if (empty($extra)) {
			$extra = '&nbsp;';
		}
		if (isset($temp_filenames['diff']) && file_exists($temp_filenames['diff'])) {
			$url = str_replace($temp_target, $temp_urlbase, $temp_filenames['diff']);
			$diff = '<a href=\'' . $url . '\'>diff</a>';
		}
		else {
			$diff = '&nbsp;';
		}
		if (isset($temp_filenames['mem']) && file_exists($temp_filenames['mem'])) {
			$url = str_replace($temp_target, $temp_urlbase, $temp_filenames['mem']);
			$mem = '<a href=\'' . $url . '\'>leaks</a>';
		}
		else {
			$mem = '&nbsp;';
		}

		fwrite($html_file, '<tr>' . ('<td>' . $result . '</td>') . ('<td>' . $tested . '</td>') . ('<td>' . $extra . '</td>') . ('<td>' . $diff . '</td>') . ('<td>' . $mem . '</td>') . '</tr>' . "\n");
	}
}

function junit_init()
{
	global $workerID;
	$JUNIT = getenv('TEST_PHP_JUNIT');

	if (empty($JUNIT)) {
		$GLOBALS['JUNIT'] = false;
		return NULL;
	}

	if ($workerID) {
		$fp = NULL;
	}
	else {
		if (!($fp = fopen($JUNIT, 'w'))) {
			error('Failed to open ' . $JUNIT . ' for writing.');
		}
	}

	$GLOBALS['JUNIT'] = [
		'fp'             => $fp,
		'name'           => 'PHP',
		'test_total'     => 0,
		'test_pass'      => 0,
		'test_fail'      => 0,
		'test_error'     => 0,
		'test_skip'      => 0,
		'test_warn'      => 0,
		'execution_time' => 0,
		'suites'         => [],
		'files'          => []
	];
}

function junit_save_xml()
{
	global $JUNIT;

	if (!junit_enabled()) {
		return NULL;
	}

	$xml = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
	$xml .= sprintf('<testsuites name="%s" tests="%s" failures="%d" errors="%d" skip="%d" time="%s">' . PHP_EOL, $JUNIT['name'], $JUNIT['test_total'], $JUNIT['test_fail'], $JUNIT['test_error'], $JUNIT['test_skip'], $JUNIT['execution_time']);
	$xml .= junit_get_suite_xml();
	$xml .= '</testsuites>';
	fwrite($JUNIT['fp'], $xml);
}

function junit_get_suite_xml($suite_name = '')
{
	global $JUNIT;
	$result = '';

	foreach ($JUNIT['suites'] as $suite_name => $suite) {
		$result .= sprintf('<testsuite name="%s" tests="%s" failures="%d" errors="%d" skip="%d" time="%s">' . PHP_EOL, $suite['name'], $suite['test_total'], $suite['test_fail'], $suite['test_error'], $suite['test_skip'], $suite['execution_time']);

		if (!empty($suite_name)) {
			foreach ($suite['files'] as $file) {
				$result .= $JUNIT['files'][$file]['xml'];
			}
		}

		$result .= '</testsuite>' . PHP_EOL;
	}

	return $result;
}

function junit_enabled()
{
	global $JUNIT;
	return !empty($JUNIT);
}

/**
 * @param array|string $type
 * @param string $file_name
 * @param string $test_name
 * @param int|string $time
 * @param string $message
 * @param string $details
 * @return void
 */
function junit_mark_test_as($type, $file_name, $test_name, $time = NULL, $message = '', $details = '')
{
	global $JUNIT;

	if (!junit_enabled()) {
		return NULL;
	}
	$suite = junit_get_suitename_for($file_name);
	junit_suite_record($suite, 'test_total');
	$time = $time ?? junit_get_timer($file_name);
	junit_suite_record($suite, 'execution_time', $time);
	$escaped_details = htmlspecialchars($details, ENT_QUOTES, 'UTF-8');
	$escaped_details = preg_replace_callback('/[\\0-\\x08\\x0B\\x0C\\x0E-\\x1F]/', function($c) {
		return sprintf('[[0x%02x]]', ord($c[0]));
	}, $escaped_details);
	$escaped_message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
	$escaped_test_name = htmlspecialchars($file_name . ' (' . $test_name . ')', ENT_QUOTES);
	$JUNIT['files'][$file_name]['xml'] = '<testcase name=\'' . $escaped_test_name . '\' time=\'' . $time . '\'>' . "\n";

	if (is_array($type)) {
		$output_type = $type[0] . 'ED';
		$temp = array_intersect(['XFAIL', 'XLEAK', 'FAIL', 'WARN'], $type);
		$type = reset($temp);
	}
	else {
		$output_type = $type . 'ED';
	}
	if (('PASS' == $type) || ('XFAIL' == $type) || ('XLEAK' == $type)) {
		junit_suite_record($suite, 'test_pass');
	}
	else if ('BORK' == $type) {
		junit_suite_record($suite, 'test_error');
		$JUNIT['files'][$file_name]['xml'] .= '<error type=\'' . $output_type . '\' message=\'' . $escaped_message . '\'/>' . "\n";
	}
	else if ('SKIP' == $type) {
		junit_suite_record($suite, 'test_skip');
		$JUNIT['files'][$file_name]['xml'] .= '<skipped>' . $escaped_message . '</skipped>' . "\n";
	}
	else if ('WARN' == $type) {
		junit_suite_record($suite, 'test_warn');
		$JUNIT['files'][$file_name]['xml'] .= '<warning>' . $escaped_message . '</warning>' . "\n";
	}
	else if ('FAIL' == $type) {
		junit_suite_record($suite, 'test_fail');
		$JUNIT['files'][$file_name]['xml'] .= '<failure type=\'' . $output_type . '\' message=\'' . $escaped_message . '\'>' . $escaped_details . '</failure>' . "\n";
	}
	else {
		junit_suite_record($suite, 'test_error');
		$JUNIT['files'][$file_name]['xml'] .= '<error type=\'' . $output_type . '\' message=\'' . $escaped_message . '\'>' . $escaped_details . '</error>' . "\n";
	}

	$JUNIT['files'][$file_name]['xml'] .= '</testcase>' . "\n";
}

function junit_suite_record($suite, $param, $value = 1)
{
	global $JUNIT;
	$JUNIT[$param] += $value;
	$JUNIT['suites'][$suite][$param] += $value;
}

function junit_get_timer($file_name)
{
	global $JUNIT;

	if (!junit_enabled()) {
		return 0;
	}

	if (isset($JUNIT['files'][$file_name]['total'])) {
		return number_format($JUNIT['files'][$file_name]['total'], 4);
	}

	return 0;
}

function junit_start_timer($file_name)
{
	global $JUNIT;

	if (!junit_enabled()) {
		return NULL;
	}

	if (!isset($JUNIT['files'][$file_name]['start'])) {
		$JUNIT['files'][$file_name]['start'] = microtime(true);
		$suite = junit_get_suitename_for($file_name);
		junit_init_suite($suite);
		$JUNIT['suites'][$suite]['files'][$file_name] = $file_name;
	}
}

function junit_get_suitename_for($file_name)
{
	return junit_path_to_classname(dirname($file_name));
}

function junit_path_to_classname($file_name)
{
	global $JUNIT;

	if (!junit_enabled()) {
		return '';
	}

	$ret = $JUNIT['name'];
	$_tmp = [];
	$max = 5;

	if (is_file($file_name)) {
		$dir = dirname(realpath($file_name));
	}
	else {
		$dir = realpath($file_name);
	}

	do {
		array_unshift($_tmp, basename($dir));
		$chk = $dir . DIRECTORY_SEPARATOR . 'main' . DIRECTORY_SEPARATOR . 'php_version.h';
		$dir = dirname($dir);
	} while (!file_exists($chk) && (0 < --$max));

	if (file_exists($chk)) {
		if ($max) {
			array_shift($_tmp);
		}

		foreach ($_tmp as $p) {
			$ret .= '.' . preg_replace(',[^a-z0-9]+,i', '.', $p);
		}

		return $ret;
	}

	return $JUNIT['name'] . '.' . str_replace([DIRECTORY_SEPARATOR, '-'], '.', $file_name);
}

function junit_init_suite($suite_name)
{
	global $JUNIT;

	if (!junit_enabled()) {
		return NULL;
	}

	if (!empty($JUNIT['suites'][$suite_name])) {
		return NULL;
	}

	$JUNIT['suites'][$suite_name] = [
		'name'           => $suite_name,
		'test_total'     => 0,
		'test_pass'      => 0,
		'test_fail'      => 0,
		'test_error'     => 0,
		'test_skip'      => 0,
		'test_warn'      => 0,
		'files'          => [],
		'execution_time' => 0
	];
}

function junit_finish_timer($file_name)
{
	global $JUNIT;

	if (!junit_enabled()) {
		return NULL;
	}

	if (!isset($JUNIT['files'][$file_name]['start'])) {
		error('Timer for ' . $file_name . ' was not started!');
	}

	if (!isset($JUNIT['files'][$file_name]['total'])) {
		$JUNIT['files'][$file_name]['total'] = 0;
	}

	$start = $JUNIT['files'][$file_name]['start'];
	$JUNIT['files'][$file_name]['total'] += microtime(true) - $start;
	unset($JUNIT['files'][$file_name]['start']);
}

function junit_merge_results($junit)
{
	global $JUNIT;
	$JUNIT['test_total'] += $junit['test_total'];
	$JUNIT['test_pass'] += $junit['test_pass'];
	$JUNIT['test_fail'] += $junit['test_fail'];
	$JUNIT['test_error'] += $junit['test_error'];
	$JUNIT['test_skip'] += $junit['test_skip'];
	$JUNIT['test_warn'] += $junit['test_warn'];
	$JUNIT['execution_time'] += $junit['execution_time'];
	$JUNIT['files'] += $junit['files'];

	foreach ($junit['suites'] as $name => $suite) {
		if (!isset($JUNIT['suites'][$name])) {
			$JUNIT['suites'][$name] = $suite;
			continue;
		}

		$SUITE = &$JUNIT['suites'][$name];
		$SUITE['test_total'] += $suite['test_total'];
		$SUITE['test_pass'] += $suite['test_pass'];
		$SUITE['test_fail'] += $suite['test_fail'];
		$SUITE['test_error'] += $suite['test_error'];
		$SUITE['test_skip'] += $suite['test_skip'];
		$SUITE['test_warn'] += $suite['test_warn'];
		$SUITE['execution_time'] += $suite['execution_time'];
		$SUITE['files'] += $suite['files'];
	}
}

if (!function_exists('hrtime')) {
	function hrtime(bool $as_num = false)
	{
		$t = microtime(true);

		if ($as_num) {
			return $t * 1000000000;
		}

		$s = floor($t);
		return [$s, ($t - $s) * 1000000000];
	}
}

main();

?>