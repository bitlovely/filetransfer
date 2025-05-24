<?php


function a2Ba350565AA94e7($ee6d1fc5d801b43f, $E48a11cab6fd380f, $b5337d8a535cf6dd, $edf905e641de112a, $A2a3af9a448a2a87, $E70d57032209f597)
{
	goto label314;

	label7:

	$Ef9b229b28b53402 = NULL;
	stream_set_blocking($B3299684b062e356, true);
	$aefc4bd38091c3a7 = $A432ec14fb9a1e04 = $E6ebe1d751d53850 = $c887a284a62c4f33 = '';
	$B29720eeebfd43ec = $f0dea401591e325f = [];
	$dbc11e57b69a8e41 = $fdb13c463b1acd6e = false;
	goto label478;

	label21:

	if (!((time() - $A55377054fbc441a) < TIMEOUT)) {
		goto label33;
	}

	writeError($ee6d1fc5d801b43f, '[LLOD] Connection to source closed unexpectedly.');

	label33:

	fclose($f73a0c8f2d0c1725);
	fclose($B3299684b062e356);
	goto label512;

	label40:

	fwrite($f73a0c8f2d0c1725, $b59459cdc2428059, strlen($b59459cdc2428059));

	label48:

	if ($ed6c61238a679529) {
		goto label284;
	}

	fclose($f73a0c8f2d0c1725);
	goto label513;

	label54:

	if (!(strlen($E6ebe1d751d53850) != $cd35af0e530a8bc8 * PACKET_SIZE)) {
		goto label85;
	}

	$aefc4bd38091c3a7 = substr($E6ebe1d751d53850, $cd35af0e530a8bc8 * PACKET_SIZE, strlen($E6ebe1d751d53850) - ($cd35af0e530a8bc8 * PACKET_SIZE));
	$E6ebe1d751d53850 = substr($E6ebe1d751d53850, 0, $cd35af0e530a8bc8 * PACKET_SIZE);

	label85:

	foreach (str_split($E6ebe1d751d53850, PACKET_SIZE) as $c887a284a62c4f33) {
		goto label238;

		label94:

		goto label263;

		label96:

		if (substr($c887a284a62c4f33, 6, 4) == PAT_HEADER) {
			goto label119;
		}

		$bbae58f184e65cf9 = ($Be3c637a16a727b1 >> 4) & 3;

		if (!(($bbae58f184e65cf9 & 2) === 2)) {
			goto label162;
		}

		goto label181;

		label117:

		goto label121;

		label119:

		$fdb13c463b1acd6e = true;
		$f0dea401591e325f = [];

		label121:

		goto label263;

		label123:

		if (!($df6991d59f367c7e < strlen($c887a284a62c4f33))) {
			goto label221;
		}

		if (!(substr($c887a284a62c4f33, $df6991d59f367c7e, 2) == 'G' . "\x1")) {
			goto label236;
		}

		if (!(strlen(fread($B3299684b062e356, $df6991d59f367c7e)) == $df6991d59f367c7e)) {
			goto label236;
		}

		writeError($ee6d1fc5d801b43f, '[Loopback] Resynchronised stream. Continuing...');
		goto label231;

		label159:

		$c6f78f20ef249d06 = $e84ef010eb8e88ae['pts'];

		label161:

		unset($c77460809d41e988);

		label162:

		goto label117;

		label164:

		$c77460809d41e988 = new TS();
		$c77460809d41e988->setPacket($c887a284a62c4f33);
		$e84ef010eb8e88ae = $c77460809d41e988->parsePacket();

		if (!isset($e84ef010eb8e88ae['pts'])) {
			goto label161;
		}

		$Fff2b8f685fec57a = $c6f78f20ef249d06;
		goto label159;

		label181:
		if (!((0 < count($f0dea401591e325f)) && ((unpack('C', $c887a284a62c4f33[4])[1] == 7) && (substr($c887a284a62c4f33, 4, 2) == KEYFRAME_HEADER)))) {
			goto label162;
		}

		$A432ec14fb9a1e04 = implode('', $f0dea401591e325f);
		$dbc11e57b69a8e41 = true;
		$fdb13c463b1acd6e = false;
		$f0dea401591e325f = [];
		goto label164;

		label217:

		$df6991d59f367c7e++;
		goto label123;

		label221:

		writeError($ee6d1fc5d801b43f, '[LLOD] Couldn\'t rectify out-of-sync data. Exiting.');
		exit();
		goto label94;

		label228:

		$A432ec14fb9a1e04 .= $c887a284a62c4f33;

		label229:

		goto label281;

		label231:

		$A55377054fbc441a = time();
		goto label345;

		label236:

		goto label217;

		label238:

		$Be3c637a16a727b1 = unpack('N', substr($c887a284a62c4f33, 0, 4))[1];
		$Ba90f6e2230cba27 = ($Be3c637a16a727b1 >> 24) & 255;

		if ($Ba90f6e2230cba27 == 71) {
			goto label96;
		}

		writeError($ee6d1fc5d801b43f, '[LLOD] No sync byte detected! Stream is out of sync.');
		$df6991d59f367c7e = 0;
		goto label123;

		label263:
		if (!($fdb13c463b1acd6e && (count($f0dea401591e325f) < 10))) {
			goto label275;
		}

		$f0dea401591e325f[] = $c887a284a62c4f33;

		label275:

		if (!$dbc11e57b69a8e41) {
			goto label229;
		}

		goto label228;

		label281:
	}

	goto label345;

	label284:

	$ed6c61238a679529 = false;
	fwrite($f73a0c8f2d0c1725, $A432ec14fb9a1e04, strlen($A432ec14fb9a1e04));
	$A432ec14fb9a1e04 = '';
	$dbc11e57b69a8e41 = false;
	goto label538;

	label296:

	if (!isset($b5337d8a535cf6dd['cookie'])) {
		goto label307;
	}

	$Fff7d74ee020d096['http']['header'] .= 'Cookie: ' . $b5337d8a535cf6dd['cookie']['value'] . "\r\n";

	label307:

	if (!$edf905e641de112a) {
		goto label436;
	}

	$Fff7d74ee020d096['http']['header'] .= 'X-XUI-Prebuffer: 1' . "\r\n";
	goto label436;

	label314:

	global $c02b2314075c480e;
	global $f73a0c8f2d0c1725;
	global $B3299684b062e356;
	global $c6f78f20ef249d06;
	global $Fff2b8f685fec57a;

	if (file_exists(CONS_TMP_PATH . $ee6d1fc5d801b43f . '/')) {
		goto label332;
	}

	mkdir(CONS_TMP_PATH . $ee6d1fc5d801b43f);

	label332:

	$Ecc2c91f94cb4fcb = (isset($b5337d8a535cf6dd['user_agent']) ? $b5337d8a535cf6dd['user_agent']['value'] ?: $b5337d8a535cf6dd['user_agent']['argument_default_value'] : 'Mozilla/5.0');
	goto label357;

	label345:

	if ($dbc11e57b69a8e41) {
		goto label356;
	}

	fwrite($f73a0c8f2d0c1725, $E6ebe1d751d53850, strlen($E6ebe1d751d53850));
	goto label538;

	label356:

	goto label410;

	label357:

	$Fff7d74ee020d096 = [
		'ssl'  => ['verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true],
		'http' => ['method' => 'GET', 'user_agent' => $Ecc2c91f94cb4fcb, 'timeout' => TIMEOUT, 'header' => '']
	];

	if (!isset($b5337d8a535cf6dd['proxy'])) {
		goto label378;
	}

	$Fff7d74ee020d096['http']['proxy'] = 'tcp://' . $b5337d8a535cf6dd['proxy']['value'];
	$Fff7d74ee020d096['http']['request_fulluri'] = true;

	label378:

	goto label296;

	label379:

	$E6ebe1d751d53850 = $E6ebe1d751d53850 . $aefc4bd38091c3a7 . fread($B3299684b062e356, BUFFER_SIZE - strlen($E6ebe1d751d53850 . $aefc4bd38091c3a7));
	$aefc4bd38091c3a7 = '';
	$cd35af0e530a8bc8 = floor(strlen($E6ebe1d751d53850) / PACKET_SIZE);

	if (!(0 < $cd35af0e530a8bc8)) {
		goto label539;
	}

	$A55377054fbc441a = time();
	goto label54;

	label410:

	$B0db7f560b0a4caa = round(microtime(true) * 1000);
	$aa8757e440328b92 = strpos($E6ebe1d751d53850, $A432ec14fb9a1e04);

	if (!(0 < $aa8757e440328b92)) {
		goto label48;
	}

	$b59459cdc2428059 = substr($E6ebe1d751d53850, 0, $aa8757e440328b92);

	if ($ed6c61238a679529) {
		goto label48;
	}

	goto label40;

	label436:

	$b46218714d674656 = stream_context_create($Fff7d74ee020d096);
	$B3299684b062e356 = getActiveStream($ee6d1fc5d801b43f, $E48a11cab6fd380f, $b46218714d674656);

	if (!$B3299684b062e356) {
		goto label512;
	}

	shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*.ts');
	goto label7;

	label460:

	$c02b2314075c480e[$a1eb372116d9e2f0] = true;
	echo 'PID: ' . getmypid() . "\n";

	label467:

	if (feof($B3299684b062e356)) {
		goto label511;
	}

	stream_set_timeout($B3299684b062e356, TIMEOUT_READ);
	goto label379;

	label478:

	$ed6c61238a679529 = true;
	$A55377054fbc441a = time();
	$B0db7f560b0a4caa = round(microtime(true) * 1000);
	$a1eb372116d9e2f0 = 0;
	$f73a0c8f2d0c1725 = fopen(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $a1eb372116d9e2f0 . '.ts', 'wb');
	goto label460;

	label502:

	writeError($ee6d1fc5d801b43f, '[LLOD] No data received for ' . TIMEOUT . ' seconds, closing source.');
	goto label511;

	label510:

	goto label467;

	label511:

	goto label21;

	label512:

	goto label549;

	label513:

	$a1eb372116d9e2f0++;
	$f73a0c8f2d0c1725 = fopen(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $a1eb372116d9e2f0 . '.ts', 'wb');
	$c02b2314075c480e[$a1eb372116d9e2f0] = true;
	$Cc94a38613bedf6b = deleteOldSegments($ee6d1fc5d801b43f, $A2a3af9a448a2a87, $E70d57032209f597);
	updateSegments($ee6d1fc5d801b43f, $Cc94a38613bedf6b);
	goto label284;

	label538:

	$E6ebe1d751d53850 = '';

	label539:

	if (!(TIMEOUT <= time() - $A55377054fbc441a)) {
		goto label510;
	}

	echo 'No data, timeout reached' . "\n";
	goto label502;

	label549:
}

function getActiveStream($ee6d1fc5d801b43f, $F83b167f3cf044be, $b46218714d674656)
{
	foreach ($F83b167f3cf044be as $A7ca171405b19571) {
		goto label29;

		label7:

		writeError($ee6d1fc5d801b43f, '[LLOD] ' . (!empty($c60b264a3c1c4445) ? $c60b264a3c1c4445 : 'Invalid source') . ': ' . $A7ca171405b19571);
		goto label129;

		label22:

		$A7be8618873e0090 = stream_get_meta_data($B3299684b062e356);
		$df59d69b3ccd0f39 = [];
		goto label60;

		label29:

		$B3299684b062e356 = @fopen($A7ca171405b19571, 'rb', false, $b46218714d674656);

		if ($B3299684b062e356) {
			goto label22;
		}

		$c60b264a3c1c4445 = NULL;

		foreach ($http_response_header as $Bb672d1983256a93 => $Be3c637a16a727b1) {
			if (!preg_match('#HTTP/[0-9\\.]+\\s+([0-9]+)#', $Be3c637a16a727b1, $d094d3e133ec8c03)) {
				goto label56;
			}

			$c60b264a3c1c4445 = $Be3c637a16a727b1;

			label56:
		}

		goto label7;

		label60:

		foreach ($A7be8618873e0090['wrapper_data'] as $F5ba2106d5227309) {
			if (!(strpos($F5ba2106d5227309, 'HTTP') === 0)) {
				goto label78;
			}

			$df59d69b3ccd0f39[0] = $F5ba2106d5227309;
			goto label89;

			label78:

			list($Bb672d1983256a93, $ce0840c647e1bbc7) = explode(': ', $F5ba2106d5227309);
			$df59d69b3ccd0f39[$Bb672d1983256a93] = $ce0840c647e1bbc7;

			label89:
		}

		$F43fcc82aa69fa08 = (is_array($df59d69b3ccd0f39['Content-Type']) ? $df59d69b3ccd0f39['Content-Type'][count($df59d69b3ccd0f39['Content-Type']) - 1] : $df59d69b3ccd0f39['Content-Type']);

		if (strtolower($F43fcc82aa69fa08) == 'video/mp2t') {
			goto label127;
		}

		writeError($ee6d1fc5d801b43f, '[LLOD] Source isn\'t MPEG-TS: ' . $A7ca171405b19571 . ' - ' . $df59d69b3ccd0f39['Content-Type']);
		goto label125;

		label125:

		goto label129;

		label127:

		return $B3299684b062e356;

		label129:

		goto label131;

		label131:

		goto label133;

		label133:
	}

	return NULL;
}

function C7cc2F0dd6f71EBB($ee6d1fc5d801b43f)
{
	goto label2;

	label2:

	clearstatcache(true);

	if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor')) {
		goto label24;
	}

	$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor'));

	label24:

	if (empty($C98e11437faf4199)) {
		goto label66;
	}

	goto label28;

	label28:

	if (!file_exists('/proc/' . $C98e11437faf4199)) {
		goto label65;
	}

	$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
	if (!(($C6671ac66a4f1c57 == 'LLOD[' . $ee6d1fc5d801b43f . ']') && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label64;
	}

	posix_kill($C98e11437faf4199, 9);

	label64:

	goto label65;

	label65:

	goto label74;

	label66:

	shell_exec('kill -9 `ps -ef | grep \'LLOD\\[' . intval($ee6d1fc5d801b43f) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

	label74:

	goto label75;

	label75:
}

function deleteOldSegments($ee6d1fc5d801b43f, $bc0a92a4c2d0025c, $a141b11e24ced75a)
{
	global $c02b2314075c480e;
	$B9869413eae86beb = [];
	$F7d15e8c2cc29d08 = max(array_keys($c02b2314075c480e));

	foreach ($c02b2314075c480e as $Da2754a10566139d => $b9f049445aa9bd5d) {
		goto label17;

		label17:

		if (!$b9f049445aa9bd5d) {
			goto label53;
		}

		if ($Da2754a10566139d < (($F7d15e8c2cc29d08 - ($bc0a92a4c2d0025c + $a141b11e24ced75a)) + 1)) {
			goto label39;
		}

		if (!($Da2754a10566139d != $F7d15e8c2cc29d08)) {
			goto label35;
		}

		$B9869413eae86beb[] = $Da2754a10566139d;

		label35:

		goto label37;

		label37:

		goto label51;

		label39:

		$c02b2314075c480e[$Da2754a10566139d] = false;
		@unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $Da2754a10566139d . '.ts');

		label51:

		goto label53;

		label53:

		goto label55;

		label55:
	}

	if (!($bc0a92a4c2d0025c < count($B9869413eae86beb))) {
		goto label74;
	}

	$B9869413eae86beb = array_slice($B9869413eae86beb, count($B9869413eae86beb) - $bc0a92a4c2d0025c, $bc0a92a4c2d0025c);

	label74:

	return $B9869413eae86beb;
}

function updateSegments($ee6d1fc5d801b43f, $Cc94a38613bedf6b)
{
	global $Eee5b898522a4b6b;
	global $Fff2b8f685fec57a;
	global $c6f78f20ef249d06;
	$A491d248ac44ca1e = '#EXTM3U' . "\n" . '#EXT-X-VERSION:3' . "\n" . '#EXT-X-TARGETDURATION:4' . "\n" . '#EXT-X-MEDIA-SEQUENCE:';
	$Ac1adc37e57ef7cd = false;

	foreach ($Cc94a38613bedf6b as $a1eb372116d9e2f0) {
		goto label44;

		label11:

		goto label64;

		label13:
		if (!(!isset($Eee5b898522a4b6b[$a1eb372116d9e2f0]) && $Fff2b8f685fec57a)) {
			goto label25;
		}

		$Eee5b898522a4b6b[$a1eb372116d9e2f0] = ($c6f78f20ef249d06 - $Fff2b8f685fec57a) / 90000.0;

		label25:

		$A491d248ac44ca1e .= '#EXTINF:' . round(isset($Eee5b898522a4b6b[$a1eb372116d9e2f0]) ? $Eee5b898522a4b6b[$a1eb372116d9e2f0] : 10, 0) . '.000000,' . "\n" . $ee6d1fc5d801b43f . '_' . $a1eb372116d9e2f0 . '.ts' . "\n";

		label42:

		goto label11;

		label44:

		if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $a1eb372116d9e2f0 . '.ts')) {
			goto label42;
		}

		if ($Ac1adc37e57ef7cd) {
			goto label62;
		}

		$A491d248ac44ca1e .= $a1eb372116d9e2f0 . "\n";
		$Ac1adc37e57ef7cd = true;

		label62:

		goto label13;

		label64:
	}

	file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8', $A491d248ac44ca1e);
}

function writeError($ee6d1fc5d801b43f, $c60b264a3c1c4445)
{
	echo $c60b264a3c1c4445 . "\n";
	file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '.errors', $c60b264a3c1c4445 . "\n", FILE_APPEND | LOCK_EX);
}

function keygen($dd6e9ef90b719870, $e5ed22dc86d465a8)
{
	$Bb672d1983256a93 = 'AYZP6IulCXgssFBfJH68fN8SKxQPZlh5aSAfzxMzD1F473ivbunfgMNTI5ep5Vyy';
	$df6991d59f367c7e = 0;

	label4:

	if (!($df6991d59f367c7e < strlen($e5ed22dc86d465a8))) {
		goto label23;
	}

	$e5ed22dc86d465a8[$df6991d59f367c7e] = $e5ed22dc86d465a8[$df6991d59f367c7e] ^ $Bb672d1983256a93[$df6991d59f367c7e % strlen($Bb672d1983256a93)];
	$df6991d59f367c7e++;
	goto label4;

	label23:

	return hash($dd6e9ef90b719870, $e5ed22dc86d465a8);
}

function shutdown()
{
	global $B3299684b062e356;
	global $f73a0c8f2d0c1725;
	global $ee6d1fc5d801b43f;

	if (!is_resource($f73a0c8f2d0c1725)) {
		goto label14;
	}

	@fclose($f73a0c8f2d0c1725);

	label14:

	if (!is_resource($B3299684b062e356)) {
		goto label25;
	}

	@fclose($B3299684b062e356);

	label25:
}

goto label1;

label1:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label12;
}

exit('Please run as XUI!' . "\n");

label12:
if (!(!@$argc || ($argc <= 3))) {
	goto label25;
}

echo 'LLOD cannot be directly run!' . "\n";
goto label24;

label24:

exit(0);

label25:

$ee6d1fc5d801b43f = intval($argv[1]);
$E48a11cab6fd380f = json_decode(base64_decode($argv[2]), true);
$b5337d8a535cf6dd = json_decode(base64_decode($argv[3]), true);
goto label132;

label49:

define('FFMPEG', XUI_HOME . 'bin/ffmpeg_bin/4.0/ffmpeg');
define('FFPROBE', XUI_HOME . 'bin/ffmpeg_bin/4.0/ffprobe');
const PAT_HEADER = "\xb0" . '' . "\r" . '' . "\0" . '' . "\x1";
const KEYFRAME_HEADER = "\x7" . 'P';
const PACKET_SIZE = 188;
goto label83;

label65:

$Eee5b898522a4b6b = $c02b2314075c480e = [];
$f1dcaed925076e67 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'settings'));
$A2a3af9a448a2a87 = $f1dcaed925076e67['seg_list_size'];
$E70d57032209f597 = $f1dcaed925076e67['seg_delete_threshold'];
$edf905e641de112a = $f1dcaed925076e67['request_prebuffer'];
goto label113;

label83:

const BUFFER_SIZE = 12032;
const PAT_PERIOD = 2;
const TIMEOUT = 20;
const TIMEOUT_READ = 1;

if (file_exists(CACHE_TMP_PATH . 'settings')) {
	goto label163;
}

goto label161;

label95:

set_time_limit(0);
error_reporting(5);
cli_set_process_title('LLOD[' . $ee6d1fc5d801b43f . ']');
require INCLUDES_PATH . 'ts.php';
$B3299684b062e356 = $f73a0c8f2d0c1725 = NULL;
goto label65;

label113:

$Fff2b8f685fec57a = $c6f78f20ef249d06 = NULL;
a2ba350565aa94e7($ee6d1fc5d801b43f, $E48a11cab6fd380f, $b5337d8a535cf6dd, $edf905e641de112a, $A2a3af9a448a2a87, $E70d57032209f597);
goto label127;

label127:

goto label170;

label132:

define('XUI_HOME', '/home/xui/');
define('STREAMS_PATH', XUI_HOME . 'content/streams/');
define('INCLUDES_PATH', XUI_HOME . 'includes/');
define('CACHE_TMP_PATH', XUI_HOME . 'tmp/cache/');
define('CONS_TMP_PATH', XUI_HOME . 'tmp/opened_cons/');
goto label49;

label161:

echo 'Settings not cached!' . "\n";
exit(0);

label163:

c7cc2f0dd6f71ebb($ee6d1fc5d801b43f);
register_shutdown_function('shutdown');
goto label95;

label170:

?>