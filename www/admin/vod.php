<?php


function shutdown()
{
	global $b62d6460eb33ea07;

	if (!is_object($b62d6460eb33ea07)) {
		goto label9;
	}

	$b62d6460eb33ea07->close_mysql();

	label9:
}

goto label29;

label1:

exit();

label2:

$bcfd61adc96d4b72 = $B93606dc467fa184;
$b54a5805c0b9816e = $ceb330df8e425c1e;
$Fc7fdb080dbcd39f = ($b54a5805c0b9816e - $bcfd61adc96d4b72) + 1;
goto label8;

label8:

fseek($D6be258a9043b749, $bcfd61adc96d4b72);
header('HTTP/1.1 206 Partial Content');

label15:

header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
header('Content-Length: ' . $Fc7fdb080dbcd39f);
goto label413;

label29:

register_shutdown_function('shutdown');
header('Access-Control-Allow-Origin: *');
set_time_limit(0);
require '../init.php';
$b38e11ffdc6a3abb = XUI::ad72b4259cA295B2();
goto label270;

label43:

header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
exit();

label53:

if ($Be4de0fc2d132f8c == '-') {
	goto label247;
}

$Be4de0fc2d132f8c = explode('-', $Be4de0fc2d132f8c);
goto label231;

label62:

$B93606dc467fa184 = $bcfd61adc96d4b72;
$ceb330df8e425c1e = $b54a5805c0b9816e;
list(, $Be4de0fc2d132f8c) = explode('=', $_SERVER['HTTP_RANGE'], 2);

if (!(strpos($Be4de0fc2d132f8c, ',') !== false)) {
	goto label53;
}

header('HTTP/1.1 416 Requested Range Not Satisfiable');
goto label43;

label86:

$Daecfbd6410b9c42 = $fe93a43f53d92a4e['extension'];
$b62d6460eb33ea07->query('SELECT t1.* FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.pid IS NOT NULL AND t2.server_id = ? INNER JOIN `streams_types` t3 ON t3.type_id = t1.type AND t3.type_key IN (\'movie\', \'series\') WHERE t1.`id` = ?', SERVER_ID, $ee6d1fc5d801b43f);

if (!(XUI::$rSettings['use_buffer'] == 0)) {
	goto label103;
}

header('X-Accel-Buffering: no');

label103:

goto label190;

label104:

goto label107;

label105:

f82199eFf9017bC9();

label107:

goto label301;
goto label309;

label109:

switch ($fb361b5f838abd3c['target_container']) {
case 'mp4':
	header('Content-type: video/mp4');
	goto label172;
case 'mkv':
	header('Content-type: video/x-matroska');
	goto label172;
case 'avi':
	header('Content-type: video/x-msvideo');
	goto label172;
case '3gp':
	header('Content-type: video/3gpp');
	goto label172;
case 'flv':
	header('Content-type: video/x-flv');
	goto label172;
case 'wmv':
	header('Content-type: video/x-ms-wmv');
	goto label172;
case 'mov':
	header('Content-type: video/quicktime');
	goto label172;
case 'ts':
	header('Content-type: video/mp2t');
	goto label172;
default:
	header('Content-Type: application/octet-stream');
}

label172:

$D6be258a9043b749 = @fopen($a0427f79dbb6d965, 'rb');
$A963e07ce47787da = filesize($a0427f79dbb6d965);
goto label254;

label184:

goto label414;

label185:

fclose($D6be258a9043b749);
exit();

label189:

goto label269;

label190:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label269;
}

$fb361b5f838abd3c = $b62d6460eb33ea07->get_row();
$b62d6460eb33ea07->close_mysql();
$a0427f79dbb6d965 = VOD_PATH . $ee6d1fc5d801b43f . '.' . $Daecfbd6410b9c42;

if (!file_exists($a0427f79dbb6d965)) {
	goto label189;
}

goto label109;

label213:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
$fe93a43f53d92a4e = pathinfo(XUI::$rRequest['stream']);
$ee6d1fc5d801b43f = intval($fe93a43f53d92a4e['filename']);
goto label86;

label231:

$B93606dc467fa184 = $Be4de0fc2d132f8c[0];
$ceb330df8e425c1e = (isset($Be4de0fc2d132f8c[1]) && is_numeric($Be4de0fc2d132f8c[1]) ? $Be4de0fc2d132f8c[1] : $A963e07ce47787da);
goto label383;

label247:

$B93606dc467fa184 = $A963e07ce47787da - substr($Be4de0fc2d132f8c, 1);
goto label383;

label254:

$Fc7fdb080dbcd39f = $A963e07ce47787da;
$bcfd61adc96d4b72 = 0;
$b54a5805c0b9816e = $A963e07ce47787da - 1;
header('Accept-Ranges: 0-' . $Fc7fdb080dbcd39f);

if (!isset($_SERVER['HTTP_RANGE'])) {
	goto label15;
}

goto label62;

label269:

goto label435;

label270:

if (!empty(XUI::$rRequest['uitoken'])) {
	goto label309;
}

if (!in_array($b38e11ffdc6a3abb, XUI::de052F142A92E9Bf())) {
	goto label105;
}
if (!(empty(XUI::$rRequest['password']) || (XUI::$rSettings['live_streaming_pass'] != XUI::$rRequest['password']))) {
	goto label298;
}

F82199EFf9017bc9();

label298:

goto label104;

label299:

f82199EFf9017Bc9();

label301:

if (!empty(XUI::$rRequest['stream'])) {
	goto label213;
}

F82199EFf9017BC9();
goto label213;

label309:

$D8713f4c40d502da = json_decode(Xui\Functions::decrypt(XUI::$rRequest['uitoken'], XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA), true);
XUI::$rRequest['stream'] = $D8713f4c40d502da['stream_id'] . '.' . $D8713f4c40d502da['container'];
$Ed48a28037cd1e3e = (XUI::$rSettings['ip_subnet_match'] ? implode('.', array_slice(explode('.', $D8713f4c40d502da['ip']), 0, -1)) == implode('.', array_slice(explode('.', XUI::aD72B4259Ca295B2()), 0, -1)) : $D8713f4c40d502da['ip'] == XUI::Ad72B4259Ca295b2());
if (!(($D8713f4c40d502da['expires'] < time()) || !$Ed48a28037cd1e3e)) {
	goto label301;
}

goto label299;

label383:

$ceb330df8e425c1e = ($b54a5805c0b9816e < $ceb330df8e425c1e ? $b54a5805c0b9816e : $ceb330df8e425c1e);
if (!(($ceb330df8e425c1e < $B93606dc467fa184) || (($A963e07ce47787da - 1) < $B93606dc467fa184) || ($A963e07ce47787da <= $ceb330df8e425c1e))) {
	goto label2;
}

header('HTTP/1.1 416 Requested Range Not Satisfiable');
header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
goto label1;

label413:

$E6ebe1d751d53850 = 8192;

label414:
if (!(!feof($D6be258a9043b749) && (($d377136ebbbc4aad = ftell($D6be258a9043b749)) <= $b54a5805c0b9816e))) {
	goto label185;
}

$Fca04b1755da7bd5 = stream_get_line($D6be258a9043b749, $E6ebe1d751d53850);
echo $Fca04b1755da7bd5;
goto label184;

label435:

?>