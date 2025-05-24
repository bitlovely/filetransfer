<?php


function startLoopback($ee6d1fc5d801b43f, $C082ca9ed03f473c, $A2a3af9a448a2a87, $E70d57032209f597)
{
	goto label155;

	label5:

	$aefc4bd38091c3a7 = '';
	$cd35af0e530a8bc8 = floor(strlen($E6ebe1d751d53850) / PACKET_SIZE);

	if (!(0 < $cd35af0e530a8bc8)) {
		goto label456;
	}

	$A55377054fbc441a = time();

	if (!(strlen($E6ebe1d751d53850) != $cd35af0e530a8bc8 * PACKET_SIZE)) {
		goto label253;
	}

	goto label231;

	label32:

	echo 'PID: ' . getmypid() . "\n";

	label37:

	if (feof($B3299684b062e356)) {
		goto label154;
	}

	stream_set_timeout($B3299684b062e356, TIMEOUT_READ);
	$E6ebe1d751d53850 = $E6ebe1d751d53850 . $aefc4bd38091c3a7 . fread($B3299684b062e356, BUFFER_SIZE - strlen($E6ebe1d751d53850 . $aefc4bd38091c3a7));
	goto label5;

	label61:

	fwrite($f73a0c8f2d0c1725, $b59459cdc2428059, strlen($b59459cdc2428059));

	label69:

	if ($ed6c61238a679529) {
		goto label219;
	}

	fclose($f73a0c8f2d0c1725);
	goto label75;

	label75:

	$a1eb372116d9e2f0++;
	$f73a0c8f2d0c1725 = fopen(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $a1eb372116d9e2f0 . '.ts', 'wb');
	$c02b2314075c480e[$a1eb372116d9e2f0] = true;
	$Cc94a38613bedf6b = deleteOldSegments($ee6d1fc5d801b43f, $A2a3af9a448a2a87, $E70d57032209f597);
	updateSegments($ee6d1fc5d801b43f, $Cc94a38613bedf6b);
	goto label219;

	label100:

	stream_set_blocking($B3299684b062e356, true);
	$aefc4bd38091c3a7 = $A432ec14fb9a1e04 = $E6ebe1d751d53850 = $c887a284a62c4f33 = '';
	$f0dea401591e325f = [];
	$dbc11e57b69a8e41 = $fdb13c463b1acd6e = false;
	$ed6c61238a679529 = true;
	goto label492;

	label113:

	if (!((time() - $A55377054fbc441a) < TIMEOUT)) {
		goto label125;
	}

	writeError($ee6d1fc5d801b43f, '[Loopback] Connection to source closed unexpectedly.');

	label125:

	fclose($f73a0c8f2d0c1725);
	fclose($B3299684b062e356);
	goto label132;

	label132:

	goto label517;

	label133:

	if ($dbc11e57b69a8e41) {
		goto label144;
	}

	fwrite($f73a0c8f2d0c1725, $E6ebe1d751d53850, strlen($E6ebe1d751d53850));
	goto label455;

	label144:

	goto label466;

	label145:

	writeError($ee6d1fc5d801b43f, '[Loopback] No data received for ' . TIMEOUT . ' seconds, closing source.');
	goto label154;

	label153:

	goto label37;

	label154:

	goto label113;

	label155:

	global $Bcf70cba56392975;
	global $f1dcaed925076e67;
	global $c02b2314075c480e;
	global $f73a0c8f2d0c1725;
	global $B3299684b062e356;
	global $c6f78f20ef249d06;
	global $Fff2b8f685fec57a;
	$f1909b8abf41f80d = (!is_null($Bcf70cba56392975[SERVER_ID]['private_url_ip']) && !is_null($Bcf70cba56392975[$C082ca9ed03f473c]['private_url_ip']) ? $Bcf70cba56392975[$C082ca9ed03f473c]['private_url_ip'] : $Bcf70cba56392975[$C082ca9ed03f473c]['public_url_ip']);
	$B3299684b062e356 = @fopen($f1909b8abf41f80d . 'admin/live?stream=' . intval($ee6d1fc5d801b43f) . '&password=' . urlencode($f1dcaed925076e67['live_streaming_pass']) . '&extension=ts&prebuffer=1', 'rb');

	if (!$B3299684b062e356) {
		goto label132;
	}

	shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*.ts');
	goto label100;

	label219:

	$ed6c61238a679529 = false;
	fwrite($f73a0c8f2d0c1725, $A432ec14fb9a1e04, strlen($A432ec14fb9a1e04));
	$A432ec14fb9a1e04 = '';
	$dbc11e57b69a8e41 = false;
	goto label455;

	label231:

	$aefc4bd38091c3a7 = substr($E6ebe1d751d53850, $cd35af0e530a8bc8 * PACKET_SIZE, strlen($E6ebe1d751d53850) - ($cd35af0e530a8bc8 * PACKET_SIZE));
	$E6ebe1d751d53850 = substr($E6ebe1d751d53850, 0, $cd35af0e530a8bc8 * PACKET_SIZE);

	label253:

	$ead4a7257d7ee969 = 0;

	foreach (str_split($E6ebe1d751d53850, PACKET_SIZE) as $c887a284a62c4f33) {
		goto label321;

		label263:

		if (!($df6991d59f367c7e < strlen($c887a284a62c4f33))) {
			goto label314;
		}

		if (!(substr($c887a284a62c4f33, $df6991d59f367c7e, 2) == 'G' . "\x1")) {
			goto label428;
		}

		if (!(strlen(fread($B3299684b062e356, $df6991d59f367c7e)) == $df6991d59f367c7e)) {
			goto label428;
		}

		writeError($ee6d1fc5d801b43f, '[Loopback] Resynchronised stream. Continuing...');
		goto label423;

		label299:

		goto label303;

		label301:

		$fdb13c463b1acd6e = true;
		$f0dea401591e325f = [];

		label303:

		goto label346;

		label305:

		$c6f78f20ef249d06 = $e84ef010eb8e88ae['pts'];

		label307:

		unset($c77460809d41e988);

		label308:

		goto label299;

		label310:

		$df6991d59f367c7e++;
		goto label263;

		label314:

		writeError($ee6d1fc5d801b43f, '[Loopback] Couldn\'t rectify out-of-sync data. Exiting.');
		exit();
		goto label400;

		label321:

		$Be3c637a16a727b1 = unpack('N', substr($c887a284a62c4f33, 0, 4))[1];
		$Ba90f6e2230cba27 = ($Be3c637a16a727b1 >> 24) & 255;

		if ($Ba90f6e2230cba27 == 71) {
			goto label402;
		}

		writeError($ee6d1fc5d801b43f, '[Loopback] No sync byte detected! Stream is out of sync.');
		$df6991d59f367c7e = 0;
		goto label263;

		label346:
		if (!($fdb13c463b1acd6e && (count($f0dea401591e325f) < 10))) {
			goto label358;
		}

		$f0dea401591e325f[] = $c887a284a62c4f33;

		label358:

		if (!$dbc11e57b69a8e41) {
			goto label431;
		}

		goto label430;

		label364:
		if (!((0 < count($f0dea401591e325f)) && ((unpack('C', $c887a284a62c4f33[4])[1] == 7) && (substr($c887a284a62c4f33, 4, 2) == KEYFRAME_HEADER)))) {
			goto label308;
		}

		$A432ec14fb9a1e04 = implode('', $f0dea401591e325f);
		$dbc11e57b69a8e41 = true;
		$fdb13c463b1acd6e = false;
		$f0dea401591e325f = [];
		goto label435;

		label400:

		goto label346;

		label402:

		if (substr($c887a284a62c4f33, 6, 4) == PAT_HEADER) {
			goto label301;
		}

		$bbae58f184e65cf9 = ($Be3c637a16a727b1 >> 4) & 3;

		if (!(($bbae58f184e65cf9 & 2) === 2)) {
			goto label308;
		}

		goto label364;

		label423:

		$A55377054fbc441a = time();
		goto label133;

		label428:

		goto label310;

		label430:

		$A432ec14fb9a1e04 .= $c887a284a62c4f33;

		label431:

		$ead4a7257d7ee969++;
		goto label452;

		label435:

		$c77460809d41e988 = new TS();
		$c77460809d41e988->setPacket($c887a284a62c4f33);
		$e84ef010eb8e88ae = $c77460809d41e988->parsePacket();

		if (!isset($e84ef010eb8e88ae['pts'])) {
			goto label307;
		}

		$Fff2b8f685fec57a = $c6f78f20ef249d06;
		goto label305;

		label452:
	}

	goto label133;

	label455:

	$E6ebe1d751d53850 = '';

	label456:

	if (!(TIMEOUT <= time() - $A55377054fbc441a)) {
		goto label153;
	}

	echo 'No data, timeout reached' . "\n";
	goto label145;

	label466:

	$B0db7f560b0a4caa = round(microtime(true) * 1000);
	$aa8757e440328b92 = strpos($E6ebe1d751d53850, $A432ec14fb9a1e04);

	if (!(0 < $aa8757e440328b92)) {
		goto label69;
	}

	$b59459cdc2428059 = substr($E6ebe1d751d53850, 0, $aa8757e440328b92);

	if ($ed6c61238a679529) {
		goto label69;
	}

	goto label61;

	label492:

	$A55377054fbc441a = time();
	$B0db7f560b0a4caa = round(microtime(true) * 1000);
	$a1eb372116d9e2f0 = 0;
	$f73a0c8f2d0c1725 = fopen(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $a1eb372116d9e2f0 . '.ts', 'wb');
	$c02b2314075c480e[$a1eb372116d9e2f0] = true;
	goto label32;

	label517:
}

function c7cc2F0dD6F71ebb($ee6d1fc5d801b43f)
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
	if (!(($C6671ac66a4f1c57 == 'Loopback[' . $ee6d1fc5d801b43f . ']') && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label64;
	}

	posix_kill($C98e11437faf4199, 9);

	label64:

	goto label65;

	label65:

	goto label74;

	label66:

	shell_exec('kill -9 `ps -ef | grep \'Loopback\\[' . intval($ee6d1fc5d801b43f) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

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
		goto label35;

		label17:

		goto label55;

		label19:

		goto label33;

		label21:

		$c02b2314075c480e[$Da2754a10566139d] = false;
		@unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $Da2754a10566139d . '.ts');

		label33:

		goto label17;

		label35:

		if (!$b9f049445aa9bd5d) {
			goto label17;
		}

		if ($Da2754a10566139d < (($F7d15e8c2cc29d08 - ($bc0a92a4c2d0025c + $a141b11e24ced75a)) + 1)) {
			goto label21;
		}

		if (!($Da2754a10566139d != $F7d15e8c2cc29d08)) {
			goto label53;
		}

		$B9869413eae86beb[] = $Da2754a10566139d;

		label53:

		goto label19;

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
		goto label13;

		label11:

		goto label64;

		label13:

		if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $a1eb372116d9e2f0 . '.ts')) {
			goto label62;
		}

		if ($Ac1adc37e57ef7cd) {
			goto label31;
		}

		$A491d248ac44ca1e .= $a1eb372116d9e2f0 . "\n";
		$Ac1adc37e57ef7cd = true;

		label31:

		goto label33;

		label33:
		if (!(!isset($Eee5b898522a4b6b[$a1eb372116d9e2f0]) && $Fff2b8f685fec57a)) {
			goto label45;
		}

		$Eee5b898522a4b6b[$a1eb372116d9e2f0] = ($c6f78f20ef249d06 - $Fff2b8f685fec57a) / 90000.0;

		label45:

		$A491d248ac44ca1e .= '#EXTINF:' . round(isset($Eee5b898522a4b6b[$a1eb372116d9e2f0]) ? $Eee5b898522a4b6b[$a1eb372116d9e2f0] : 10, 0) . '.000000,' . "\n" . $ee6d1fc5d801b43f . '_' . $a1eb372116d9e2f0 . '.ts' . "\n";

		label62:

		goto label11;

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

goto label165;

label1:

register_shutdown_function('shutdown');
set_time_limit(0);
cli_set_process_title('Loopback[' . $ee6d1fc5d801b43f . ']');
require INCLUDES_PATH . 'ts.php';
$B3299684b062e356 = $f73a0c8f2d0c1725 = NULL;
goto label37;

label19:

$Fff2b8f685fec57a = $c6f78f20ef249d06 = NULL;
startloopback($ee6d1fc5d801b43f, $C082ca9ed03f473c, $A2a3af9a448a2a87, $E70d57032209f597);
goto label62;

label31:

const PACKET_SIZE = 188;
const BUFFER_SIZE = 12032;
const PAT_PERIOD = 2;
const TIMEOUT = 20;
const TIMEOUT_READ = 1;
goto label148;

label37:

$Eee5b898522a4b6b = $c02b2314075c480e = [];
$f1dcaed925076e67 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'settings'));
$Bcf70cba56392975 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'servers'));
$A2a3af9a448a2a87 = $f1dcaed925076e67['seg_list_size'];
$E70d57032209f597 = $f1dcaed925076e67['seg_delete_threshold'];
goto label19;

label62:

goto label199;

label66:

exit(0);

label67:

$a998abd856b07a59 = parse_ini_file(CONFIG_PATH . 'config.ini');
define('SERVER_ID', intval($a998abd856b07a59['server_id']));
c7cc2f0dd6f71ebb($ee6d1fc5d801b43f);
goto label1;

label85:

$C082ca9ed03f473c = intval($argv[2]);
define('XUI_HOME', '/home/xui/');
define('STREAMS_PATH', XUI_HOME . 'content/streams/');
define('INCLUDES_PATH', XUI_HOME . 'includes/');
define('FFMPEG', XUI_HOME . 'bin/ffmpeg_bin/4.0/ffmpeg');
goto label127;

label113:

exit(0);

label114:

error_reporting(0);
ini_set('display_errors', 0);
$ee6d1fc5d801b43f = intval($argv[1]);
goto label85;

label127:

define('FFPROBE', XUI_HOME . 'bin/ffmpeg_bin/4.0/ffprobe');
define('CACHE_TMP_PATH', XUI_HOME . 'tmp/cache/');
define('CONFIG_PATH', XUI_HOME . 'config/');
const PAT_HEADER = "\xb0" . '' . "\r" . '' . "\0" . '' . "\x1";
const KEYFRAME_HEADER = "\x7" . 'P';
goto label31;

label148:

if (file_exists(CONFIG_PATH . 'config.ini')) {
	goto label157;
}

echo 'Config file missing!' . "\n";
exit(0);

label157:

if (file_exists(CACHE_TMP_PATH . 'settings')) {
	goto label190;
}

goto label188;

label165:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label176;
}

exit('Please run as XUI!' . "\n");

label176:
if (!(!@$argc || ($argc <= 2))) {
	goto label114;
}

echo 'Loopback cannot be directly run!' . "\n";
goto label113;

label188:

echo 'Settings not cached!' . "\n";
exit(0);

label190:

if (file_exists(CACHE_TMP_PATH . 'servers')) {
	goto label67;
}

echo 'Servers not cached!' . "\n";
goto label66;

label199:

?>