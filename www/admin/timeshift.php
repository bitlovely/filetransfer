<?php


function getLength($b4b2b0820a243f3b)
{
	$Fc7fdb080dbcd39f = 0;

	foreach ($b4b2b0820a243f3b as $bfaffd59f038b138) {
		$Fc7fdb080dbcd39f += $bfaffd59f038b138['filesize'];
	}

	return $Fc7fdb080dbcd39f;
}

function shutdown()
{
	global $b62d6460eb33ea07;

	if (!is_object($b62d6460eb33ea07)) {
		goto label9;
	}

	$b62d6460eb33ea07->close_mysql();

	label9:
}

goto label665;

label1:

$ad246beea4e2bbaa = substr($e36d2f5d3c9f0972, 6, 2);
$C01784a58c8748e0 = 0;
$f4f8138a4ae6c15f = $Ab13f2545dd3df14;

label9:

$F80243ca532d6374 = mktime($f4f8138a4ae6c15f, $C01784a58c8748e0, 0, $bd2ed222ba9617a1, $ad246beea4e2bbaa, $eca9936f0487fe83);
goto label724;

label19:

f82199Eff9017Bc9();

label21:

goto label190;

label22:

goto label71;

label23:

if (!($df6991d59f367c7e < $f7037fc395d8fcad)) {
	goto label698;
}

$D6be258a9043b749 = ARCHIVE_PATH . $ee6d1fc5d801b43f . '/' . date('Y-m-d:H-i', $F80243ca532d6374 + ($df6991d59f367c7e * 60)) . '.ts';

if (!file_exists($D6be258a9043b749)) {
	goto label695;
}

$b4b2b0820a243f3b[] = ['filename' => $D6be258a9043b749, 'filesize' => filesize($D6be258a9043b749)];
goto label695;

label53:
if (!(!file_exists($D6be258a9043b749) || !is_readable($D6be258a9043b749))) {
	goto label68;
}

f82199Eff9017BC9();

label68:

$b4b2b0820a243f3b = [];
$df6991d59f367c7e = 0;
goto label23;

label71:

$D8713f4c40d502da = json_decode(Xui\Functions::decrypt(XUI::$rRequest['uitoken'], XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA), true);
XUI::$rRequest['stream'] = $D8713f4c40d502da['stream_id'];
XUI::$rRequest['extension'] = 'm3u8';

if (!isset($D8713f4c40d502da['start'])) {
	goto label559;
}

XUI::$rRequest['start'] = $D8713f4c40d502da['start'];
goto label559;

label102:

goto label9;

label103:

list($e36d2f5d3c9f0972, $Ab13f2545dd3df14) = explode('-', $cef812722e0345be);
$eca9936f0487fe83 = substr($e36d2f5d3c9f0972, 0, 4);
$bd2ed222ba9617a1 = substr($e36d2f5d3c9f0972, 4, 2);
goto label1;

label125:

if (substr_count($cef812722e0345be, '-') == 1) {
	goto label103;
}

list($e36d2f5d3c9f0972, $Ab13f2545dd3df14) = explode(':', $cef812722e0345be);
list($eca9936f0487fe83, $bd2ed222ba9617a1, $ad246beea4e2bbaa) = explode('-', $e36d2f5d3c9f0972);
list($f4f8138a4ae6c15f, $C01784a58c8748e0) = explode('-', $Ab13f2545dd3df14);
goto label102;

label162:

if (!(XUI::$rSettings['use_buffer'] == 0)) {
	goto label172;
}

header('X-Accel-Buffering: no');

label172:

if (!empty(XUI::$rRequest['uitoken'])) {
	goto label22;
}

goto label699;

label178:
if (!(($D8713f4c40d502da['expires'] < time()) || !$Ed48a28037cd1e3e)) {
	goto label190;
}

f82199eFF9017BC9();

label190:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
goto label645;

label195:

if (!(count($b4b2b0820a243f3b) == 0)) {
	goto label204;
}

F82199eFf9017Bc9();

label204:

switch ($Daecfbd6410b9c42) {
case 'm3u8':
	goto label269;

	label211:

	$daf83d49b4736e8d = filesize($a1eb372116d9e2f0);
	header('Content-Length: ' . $daf83d49b4736e8d);
	header('Content-Type: video/mp2t');
	readfile($a1eb372116d9e2f0);
	goto label312;

	label226:

	$d094d3e133ec8c03 .= '#EXT-X-TARGETDURATION:60' . "\n";
	$d094d3e133ec8c03 .= '#EXT-X-MEDIA-SEQUENCE:0' . "\n";
	$d094d3e133ec8c03 .= '#EXT-X-PLAYLIST-TYPE:VOD' . "\n";

	foreach ($b4b2b0820a243f3b as $Bb672d1983256a93 => $B4a603c2a57d3acf) {
		$d094d3e133ec8c03 .= '#EXTINF:60.0,' . "\n";

		if (!empty(XUI::$rRequest['uitoken'])) {
			goto label252;
		}

		$d094d3e133ec8c03 .= '/admin/timeshift?extension=m3u8&stream=' . $ee6d1fc5d801b43f . '&segment=' . basename($B4a603c2a57d3acf['filename']) . '&password=' . $fd093b5358e9a519 . "\n";
		goto label263;

		label252:

		$d094d3e133ec8c03 .= '/admin/timeshift?extension=m3u8&segment=' . basename($B4a603c2a57d3acf['filename']) . '&uitoken=' . XUI::$rRequest['uitoken'] . "\n";

		label263:
	}

	goto label297;

	label266:

	exit();

	label267:

	goto label679;
	goto label316;

	label269:

	if (empty(XUI::$rRequest['segment'])) {
		goto label313;
	}

	$a1eb372116d9e2f0 = ARCHIVE_PATH . $ee6d1fc5d801b43f . '/' . str_replace(['\\', '/'], '', urldecode(XUI::$rRequest['segment']));

	if (file_exists($a1eb372116d9e2f0)) {
		goto label211;
	}

	F82199eff9017BC9();
	goto label312;
	goto label211;

	label297:

	$d094d3e133ec8c03 .= '#EXT-X-ENDLIST';
	ob_end_clean();
	header('Content-Type: application/x-mpegurl');
	header('Content-Length: ' . strlen($d094d3e133ec8c03));
	echo $d094d3e133ec8c03;
	goto label266;

	label312:

	goto label267;

	label313:

	$d094d3e133ec8c03 = '#EXTM3U' . "\n";
	$d094d3e133ec8c03 .= '#EXT-X-VERSION:3' . "\n";
	goto label226;
case 'ts':
	label316:

	goto label524;

	label317:

	header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
	exit();

	label327:

	$bcfd61adc96d4b72 = $B93606dc467fa184;
	$b54a5805c0b9816e = $ceb330df8e425c1e;
	goto label330;

	label330:

	$Fc7fdb080dbcd39f = ($b54a5805c0b9816e - $bcfd61adc96d4b72) + 1;
	header('HTTP/1.1 206 Partial Content');

	label336:

	header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
	header('Content-Length: ' . $Fc7fdb080dbcd39f);
	goto label372;

	label350:

	$cf397b349f533737 = explode('-', $cf397b349f533737);
	$B93606dc467fa184 = $cf397b349f533737[0];
	$ceb330df8e425c1e = (isset($cf397b349f533737[1]) && is_numeric($cf397b349f533737[1]) ? $cf397b349f533737[1] : $A963e07ce47787da);
	goto label394;

	label371:

	goto label388;

	label372:

	$c5c0e938eebf77cf = 0;

	if (!(0 < $bcfd61adc96d4b72)) {
		goto label386;
	}

	$c5c0e938eebf77cf = floor($bcfd61adc96d4b72 / ($A963e07ce47787da / count($b4b2b0820a243f3b)));

	label386:

	$E843e202743c8a9e = false;
	goto label415;

	label388:

	$B93606dc467fa184 = $A963e07ce47787da - substr($cf397b349f533737, 1);

	label394:

	$ceb330df8e425c1e = ($b54a5805c0b9816e < $ceb330df8e425c1e ? $b54a5805c0b9816e : $ceb330df8e425c1e);
	if (!(($ceb330df8e425c1e < $B93606dc467fa184) || (($A963e07ce47787da - 1) < $B93606dc467fa184) || ($A963e07ce47787da <= $ceb330df8e425c1e))) {
		goto label327;
	}

	header('HTTP/1.1 416 Requested Range Not Satisfiable');
	goto label317;

	label415:

	$b658bd996e2edddf = 0;
	$Fe0edddc45b3daa9 = 0;
	$E6ebe1d751d53850 = XUI::$rSettings['read_buffer_size'];

	foreach ($b4b2b0820a243f3b as $Bb672d1983256a93 => $B4a603c2a57d3acf) {
		goto label425;

		label425:

		$Fe0edddc45b3daa9 += $B4a603c2a57d3acf['filesize'];
		if (!(!$E843e202743c8a9e && (0 < $c5c0e938eebf77cf))) {
			goto label493;
		}

		if ($Bb672d1983256a93 < $c5c0e938eebf77cf) {
			goto label491;
		}

		$E843e202743c8a9e = true;
		$b658bd996e2edddf = $bcfd61adc96d4b72 - $Fe0edddc45b3daa9;
		goto label489;

		label444:

		$B3299684b062e356 = fopen($B4a603c2a57d3acf['filename'], 'rb');
		fseek($B3299684b062e356, $b658bd996e2edddf);

		label454:

		if (feof($B3299684b062e356)) {
			goto label474;
		}

		$aa8757e440328b92 = ftell($B3299684b062e356);
		goto label466;

		label466:

		$Fca04b1755da7bd5 = stream_get_line($B3299684b062e356, $E6ebe1d751d53850);
		echo $Fca04b1755da7bd5;
		goto label454;

		label474:

		if (!is_resource($B3299684b062e356)) {
			goto label486;
		}

		goto label483;

		label483:

		fclose($B3299684b062e356);

		label486:

		$b658bd996e2edddf = 0;

		label487:

		goto label495;

		label489:

		goto label493;

		label491:

		goto label487;

		label493:

		goto label444;

		label495:
	}

	goto label558;

	label498:

	if (!isset($_SERVER['HTTP_RANGE'])) {
		goto label336;
	}

	$B93606dc467fa184 = $bcfd61adc96d4b72;
	$ceb330df8e425c1e = $b54a5805c0b9816e;
	list(, $cf397b349f533737) = explode('=', $_SERVER['HTTP_RANGE'], 2);

	if (!(strpos($cf397b349f533737, ',') !== false)) {
		goto label554;
	}

	goto label541;

	label524:

	header('Content-Type: video/mp2t');
	$Fc7fdb080dbcd39f = $A963e07ce47787da = getlength($b4b2b0820a243f3b);
	header('Accept-Ranges: 0-' . $Fc7fdb080dbcd39f);
	$bcfd61adc96d4b72 = 0;
	$b54a5805c0b9816e = $A963e07ce47787da - 1;
	goto label498;

	label541:

	header('HTTP/1.1 416 Requested Range Not Satisfiable');
	header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
	exit();

	label554:

	if ($cf397b349f533737 == '-') {
		goto label371;
	}

	goto label350;
}

label558:

goto label679;

label559:

if (!isset($D8713f4c40d502da['duration'])) {
	goto label567;
}

XUI::$rRequest['duration'] = $D8713f4c40d502da['duration'];

label567:

$Ed48a28037cd1e3e = (XUI::$rSettings['ip_subnet_match'] ? implode('.', array_slice(explode('.', $D8713f4c40d502da['ip']), 0, -1)) == implode('.', array_slice(explode('.', XUI::aD72B4259ca295b2()), 0, -1)) : $D8713f4c40d502da['ip'] == XUI::ad72b4259ca295B2());
goto label178;

label609:

$b4b2b0820a243f3b = [];
$D6be258a9043b749 = ARCHIVE_PATH . $ee6d1fc5d801b43f . '/' . date('Y-m-d:H-i', $F80243ca532d6374) . '.ts';
if (!(empty($ee6d1fc5d801b43f) || empty($F80243ca532d6374) || empty($f7037fc395d8fcad))) {
	goto label632;
}

f82199EFF9017bC9();

label632:

goto label53;

label633:

goto label679;

label634:

$Bf9899a172ecff52 = $b62d6460eb33ea07->get_row();
$b62d6460eb33ea07->close_mysql();

if (!empty(XUI::$rRequest['segment'])) {
	goto label204;
}

goto label609;

label645:

XUI::$db = &$b62d6460eb33ea07;
$fd093b5358e9a519 = XUI::$rSettings['live_streaming_pass'];
$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream']);
$Daecfbd6410b9c42 = XUI::$rRequest['extension'];

if (!empty(XUI::$rRequest['segment'])) {
	goto label724;
}

goto label680;

label665:

register_shutdown_function('shutdown');
header('Access-Control-Allow-Origin: *');
set_time_limit(0);
require '../init.php';
$b38e11ffdc6a3abb = XUI::AD72b4259cA295B2();
goto label162;

label679:

goto label738;

label680:

$cef812722e0345be = XUI::$rRequest['start'];
$f7037fc395d8fcad = XUI::$rRequest['duration'];

if (!is_numeric($cef812722e0345be)) {
	goto label125;
}

$F80243ca532d6374 = $cef812722e0345be;
goto label724;
goto label125;

label695:

$df6991d59f367c7e++;
goto label23;

label698:

goto label195;

label699:

if (!in_array($b38e11ffdc6a3abb, XUI::dE052F142a92E9bf())) {
	goto label19;
}
if (!(empty(XUI::$rRequest['password']) || (XUI::$rSettings['live_streaming_pass'] != XUI::$rRequest['password']))) {
	goto label722;
}

F82199eFF9017Bc9();

label722:

goto label21;
goto label19;

label724:

$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.`id` = ?', SERVER_ID, $ee6d1fc5d801b43f);

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label634;
}

F82199Eff9017Bc9();
goto label633;

label738:

?>