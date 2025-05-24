<?php


goto label103;

label1:
if (!(!$f8bd5a091fcdba80 || ($Df19f1dc3a6ffd8b <= time() - $f8bd5a091fcdba80))) {
	goto label129;
}

if (XUI::ab992b2373f7beca()) {
	goto label17;
}

echo 'Not running! Break.' . "\n";
goto label48;

label17:

goto label451;

label18:

$e6b4427b1f3ec758 = [];

foreach (XUI::$redis->sMembers('SIGNALS#' . SERVER_ID) as $Bb672d1983256a93) {
	$e6b4427b1f3ec758[] = $Bb672d1983256a93;
}

if (!(0 < count($e6b4427b1f3ec758))) {
	goto label427;
}

$E105c1467f7aeea3 = XUI::$redis->mGet($e6b4427b1f3ec758);
goto label343;

label44:

usleep(250000);
goto label566;

label48:

if (!is_object($b62d6460eb33ea07)) {
	goto label93;
}

goto label91;

label55:

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php "streams_update" "' . implode(',', $d9a2c088495aa002) . '"');

label69:

if (!(0 < count($d2c58080f592907c))) {
	goto label90;
}

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php "lines_update" "' . implode(',', $d2c58080f592907c) . '"');

label90:

goto label321;

label91:

$b62d6460eb33ea07->close_mysql();

label93:

goto label579;

label94:

if ($b62d6460eb33ea07->query('SELECT `signal_id`, `custom_data` FROM `signals` WHERE `server_id` = ? AND `cache` = 1 ORDER BY `signal_id` ASC LIMIT 1000;', SERVER_ID)) {
	goto label102;
}

goto label48;

label102:

goto label159;

label103:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label114;
}

exit('Please run as XUI!' . "\n");

label114:

if (@$argc) {
	goto label428;
}

exit(0);
goto label428;

label121:

XUI::$rServers = XUI::F76008F8dfE1898C(true);
$f8bd5a091fcdba80 = time();

label129:
if (!(XUI::$rSettings['redis_handler'] && (!XUI::$redis || !XUI::$redis->ping()))) {
	goto label466;
}

goto label48;
goto label466;

label146:

$Df19f1dc3a6ffd8b = 60;
$Cd8e1820d4075a5c = md5_file(__FILE__);

if (!XUI::$rSettings['redis_handler']) {
	goto label158;
}

XUI::d6Aeb3175A43F301();

label158:

goto label566;

label159:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label337;
}

$Ad0a05fbd7908cbf = $d9a2c088495aa002 = $d2c58080f592907c = $Fe53bcd53690fff4 = [];

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Fc7d7bc87567c1a5 = json_decode($Fb9da1713bff19ce['custom_data'], true);
	$Fe53bcd53690fff4[] = $Fb9da1713bff19ce['signal_id'];

	switch ($Fc7d7bc87567c1a5['type']) {
	case 'update_stream':
		if (in_array($Fc7d7bc87567c1a5['id'], $d9a2c088495aa002)) {
			goto label211;
		}

		$d9a2c088495aa002[] = $Fc7d7bc87567c1a5['id'];

		label211:

		goto label311;
	case 'update_line':
		if (in_array($Fc7d7bc87567c1a5['id'], $d2c58080f592907c)) {
			goto label226;
		}

		$d2c58080f592907c[] = $Fc7d7bc87567c1a5['id'];

		label226:

		goto label311;
	case 'update_streams':
		foreach ($Fc7d7bc87567c1a5['id'] as $Abcb228699a7f743) {
			if (in_array($Abcb228699a7f743, $d9a2c088495aa002)) {
				goto label243;
			}

			$d9a2c088495aa002[] = $Abcb228699a7f743;

			label243:
		}

		goto label311;
	case 'update_lines':
		foreach ($Fc7d7bc87567c1a5['id'] as $Abcb228699a7f743) {
			if (in_array($Abcb228699a7f743, $d2c58080f592907c)) {
				goto label262;
			}

			$d2c58080f592907c[] = $Abcb228699a7f743;

			label262:
		}

		goto label311;
	case 'delete_con':
		unlink(CONS_TMP_PATH . $Fc7d7bc87567c1a5['uuid']);
		goto label311;
	case 'delete_vod':
		exec('rm ' . XUI_HOME . 'content/vod/' . intval($Fc7d7bc87567c1a5['id']) . '.*');
		goto label311;
	case 'delete_vods':
		foreach ($Fc7d7bc87567c1a5['id'] as $Abcb228699a7f743) {
			exec('rm ' . XUI_HOME . 'content/vod/' . intval($Abcb228699a7f743) . '.*');
		}

		goto label311;
	default:
	}

	label311:
}

if (!(0 < count($d9a2c088495aa002))) {
	goto label69;
}

goto label55;

label321:

if (!(0 < count($Fe53bcd53690fff4))) {
	goto label337;
}

$b62d6460eb33ea07->query('DELETE FROM `signals` WHERE `signal_id` IN (' . implode(',', $Fe53bcd53690fff4) . ')');

label337:

if (!XUI::$rSettings['redis_handler']) {
	goto label44;
}

goto label18;

label343:

$Fe53bcd53690fff4 = [];

foreach ($E105c1467f7aeea3 as $ba2d146bb5a55097) {
	goto label348;

	label348:

	$Fb9da1713bff19ce = igbinary_unserialize($ba2d146bb5a55097);
	$Fe53bcd53690fff4[] = $Fb9da1713bff19ce['key'];
	$C98e11437faf4199 = $Fb9da1713bff19ce['pid'];

	if ($Fb9da1713bff19ce['rtmp'] == 0) {
		goto label382;
	}

	shell_exec('wget --timeout=2 -O /dev/null -o /dev/null "' . XUI::$rServers[SERVER_ID]['rtmp_mport_url'] . 'control/drop/client?clientid=' . intval($C98e11437faf4199) . '" >/dev/null 2>/dev/null &');
	goto label380;

	label378:

	goto label411;

	label380:

	goto label378;

	label382:
	if (!(!empty($C98e11437faf4199) && file_exists('/proc/' . $C98e11437faf4199) && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label409;
	}

	shell_exec('kill -9 ' . intval($C98e11437faf4199));

	label409:

	goto label378;

	label411:
}

XUI::$redis->multi()->del($Fe53bcd53690fff4)->sRem('SIGNALS#' . SERVER_ID, ...$e6b4427b1f3ec758)->exec();

label427:

goto label44;

label428:

set_time_limit(0);
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
shell_exec('kill -9 $(ps aux | grep signals | grep -v grep | grep -v ' . getmypid() . ' | awk \'{print $2}\')');
$f8bd5a091fcdba80 = NULL;
goto label146;

label451:

if (!(md5_file(__FILE__) != $Cd8e1820d4075a5c)) {
	goto label460;
}

echo 'File changed! Break.' . "\n";
goto label48;

label460:

XUI::$rSettings = XUI::ac49B56DbE10e52c(true);
goto label121;

label466:

if ($b62d6460eb33ea07->query('SELECT `signal_id`, `pid`, `rtmp` FROM `signals` WHERE `server_id` = ? AND `pid` IS NOT NULL ORDER BY `signal_id` ASC LIMIT 100', SERVER_ID)) {
	goto label474;
}

goto label48;

label474:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label94;
}

goto label481;

label481:

$Fe53bcd53690fff4 = [];

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label517;

	label488:
	if (!(!empty($C98e11437faf4199) && file_exists('/proc/' . $C98e11437faf4199) && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label515;
	}

	shell_exec('kill -9 ' . intval($C98e11437faf4199));

	label515:

	goto label545;

	label517:

	$Fe53bcd53690fff4[] = $Fb9da1713bff19ce['signal_id'];
	$C98e11437faf4199 = $Fb9da1713bff19ce['pid'];

	if ($Fb9da1713bff19ce['rtmp'] == 0) {
		goto label488;
	}

	shell_exec('wget --timeout=2 -O /dev/null -o /dev/null "' . XUI::$rServers[SERVER_ID]['rtmp_mport_url'] . 'control/drop/client?clientid=' . intval($C98e11437faf4199) . '" >/dev/null 2>/dev/null &');
	goto label515;
	goto label488;

	label545:

	goto label547;

	label547:
}

if (!(0 < count($Fe53bcd53690fff4))) {
	goto label94;
}

$b62d6460eb33ea07->query('DELETE FROM `signals` WHERE `signal_id` IN (' . implode(',', $Fe53bcd53690fff4) . ')');
goto label94;

label566:

if (false) {
	goto label48;
}
if (!(!$b62d6460eb33ea07 || !$b62d6460eb33ea07->ping())) {
	goto label578;
}

goto label48;

label578:

goto label1;

label579:

shell_exec('(sleep 1; ' . PHP_BIN . ' ' . __FILE__ . ' ) > /dev/null 2>/dev/null &');

?>