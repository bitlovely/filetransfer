<?php


function shutdown()
{
	global $b62d6460eb33ea07;
	global $Bf9899a172ecff52;
	global $C98e11437faf4199;
	global $ee6d1fc5d801b43f;

	if (!is_object($b62d6460eb33ea07)) {
		goto label12;
	}

	$b62d6460eb33ea07->close_mysql();

	label12:
	if (!(XUI::$rSettings['on_demand_instant_off'] && ($Bf9899a172ecff52['on_demand'] == 1))) {
		goto label25;
	}

	XUI::e1E756bD417e235b($ee6d1fc5d801b43f, $C98e11437faf4199);

	label25:
}

goto label843;

label1:
if (!(!file_exists($Aac64ae34ff57fc4) && !file_exists($F70ee6b6db717e21) && ($Db31291fb30eca1e < (intval($bf2e2ba8c3ab6d98) * 100)))) {
	goto label738;
}

usleep(10000);
$Db31291fb30eca1e++;
goto label1;
goto label738;

label28:

$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.`id` = ?', SERVER_ID, $ee6d1fc5d801b43f);

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label42;
}

f82199eff9017BC9();
goto label595;

label42:

goto label596;

label43:

$Db31291fb30eca1e = 0;
$Aac64ae34ff57fc4 = STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8';

if ($Daecfbd6410b9c42 == 'ts') {
	goto label739;
}

$F70ee6b6db717e21 = STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8';
goto label1;

label56:

$D8713f4c40d502da = json_decode(Xui\Functions::decrypt(XUI::$rRequest['uitoken'], XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA), true);
XUI::$rRequest['stream'] = $D8713f4c40d502da['stream_id'];
XUI::$rRequest['extension'] = 'm3u8';
$Ed48a28037cd1e3e = (XUI::$rSettings['ip_subnet_match'] ? implode('.', array_slice(explode('.', $D8713f4c40d502da['ip']), 0, -1)) == implode('.', array_slice(explode('.', XUI::AD72b4259ca295b2()), 0, -1)) : $D8713f4c40d502da['ip'] == XUI::aD72B4259ca295b2());
if (!(($D8713f4c40d502da['expires'] < time()) || !$Ed48a28037cd1e3e)) {
	goto label166;
}

goto label164;

label130:

exit();

label131:

if ($Bf9899a172ecff52['pid']) {
	goto label192;
}

$Bf9899a172ecff52['pid'] = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'));
goto label192;

label146:

XUI::A60D4C9F99f8330B($ee6d1fc5d801b43f, $C98e11437faf4199);

label150:

if (XUI::b4Ab2A8Eb0aa68eE($Bf9899a172ecff52['pid'], $ee6d1fc5d801b43f)) {
	goto label43;
}

$Bf9899a172ecff52['pid'] = NULL;

if ($Bf9899a172ecff52['on_demand'] == 1) {
	goto label793;
}

goto label790;

label164:

f82199eFf9017Bc9();

label166:

$A432ec14fb9a1e04 = XUI::$rSegmentSettings['seg_time'];

label169:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
goto label722;

label174:

$C98e11437faf4199 = getmypid();

if (!(XUI::$rSettings['use_buffer'] == 0)) {
	goto label186;
}

header('X-Accel-Buffering: no');

label186:

if (!empty(XUI::$rRequest['uitoken'])) {
	goto label884;
}

goto label674;

label192:

switch ($Daecfbd6410b9c42) {
case 'm3u8':
	goto label240;

	label197:

	header('Content-Length: ' . $daf83d49b4736e8d);
	header('Content-Type: video/mp2t');
	readfile($a1eb372116d9e2f0);
	exit();

	label208:

	goto label209;

	label209:

	goto label239;

	label210:

	if (!($fd51b5505224fc7c = XUI::C527CfDb95C0a595($Aac64ae34ff57fc4, $fd093b5358e9a519, $ee6d1fc5d801b43f, XUI::$rRequest['uitoken']))) {
		goto label239;
	}

	header('Content-Type: application/vnd.apple.mpegurl');
	header('Content-Length: ' . strlen($fd51b5505224fc7c));
	goto label235;

	label233:

	goto label595;
	goto label276;

	label235:

	ob_end_flush();
	echo $fd51b5505224fc7c;
	exit();

	label239:

	goto label233;

	label240:

	if (!XUI::aedcfe9cCb2C4A4B($Aac64ae34ff57fc4, $Bf9899a172ecff52['pid'])) {
		goto label233;
	}

	if (empty(XUI::$rRequest['segment'])) {
		goto label210;
	}

	$a1eb372116d9e2f0 = STREAMS_PATH . str_replace(['\\', '/'], '', urldecode(XUI::$rRequest['segment']));

	if (!file_exists($a1eb372116d9e2f0)) {
		goto label208;
	}

	$daf83d49b4736e8d = filesize($a1eb372116d9e2f0);
	goto label197;
}

label276:

goto label405;

label277:

exit();
goto label280;

label279:

$F91f9d8010fb9590 = -1;

label280:

goto label474;

label281:
if (XUI::B4aB2a8Eb0Aa68EE($Bf9899a172ecff52['pid'], $ee6d1fc5d801b43f) && ($e1751a10c8f69e7b <= $A97acef1265aaa85) && file_exists(STREAMS_PATH . $f73a0c8f2d0c1725) && is_resource($B3299684b062e356)) {
	goto label305;
}

exit();
goto label404;

label305:

$fe04c51ba389deea = filesize(STREAMS_PATH . $f73a0c8f2d0c1725);
goto label390;

label312:

$A97acef1265aaa85 = XUI::$rSegmentSettings['seg_time'] * 2;

if (!(($A97acef1265aaa85 < intval(XUI::$rSettings['segment_wait_time'])) ?: 20)) {
	goto label335;
}

$A97acef1265aaa85 = intval(XUI::$rSettings['segment_wait_time']) ?: 20;

label335:

goto label545;

label336:

fclose($B3299684b062e356);
$e1751a10c8f69e7b = 0;
$F91f9d8010fb9590++;
goto label335;

label343:

goto label388;

label344:

$e1751a10c8f69e7b = 0;
$c07feb8989fb7333 = time();
$B3299684b062e356 = fopen(STREAMS_PATH . $f73a0c8f2d0c1725, 'r');

label355:

goto label356;

label356:
if (!(($e1751a10c8f69e7b <= $A97acef1265aaa85) && !file_exists(STREAMS_PATH . $a9ed9e86f35524e4))) {
	goto label473;
}

$ba2d146bb5a55097 = stream_get_line($B3299684b062e356, XUI::$rSettings['read_buffer_size']);

if (!empty($ba2d146bb5a55097)) {
	goto label518;
}

if (XUI::B4aB2A8eB0AA68eE($Bf9899a172ecff52['pid'], $ee6d1fc5d801b43f)) {
	goto label512;
}

goto label473;
goto label512;

label388:

goto label595;
goto label595;

label390:

$cc41ccedb364b852 = $fe04c51ba389deea - ftell($B3299684b062e356);

if (!(0 < $cc41ccedb364b852)) {
	goto label404;
}

echo stream_get_line($B3299684b062e356, $cc41ccedb364b852);

label404:

goto label336;

label405:

header('Content-Type: video/mp2t');

if (file_exists($Aac64ae34ff57fc4)) {
	goto label415;
}

$E313244dd91127bf = NULL;
goto label424;

label415:

goto label483;

label416:

$E313244dd91127bf = XUI::B0fBCFF8A7D2659D($Aac64ae34ff57fc4, $A432ec14fb9a1e04, XUI::$rSegmentSettings['seg_time']);

label424:

if (!is_null($E313244dd91127bf)) {
	goto label475;
}

if (!file_exists($Aac64ae34ff57fc4)) {
	goto label279;
}

goto label277;

label437:

if (file_exists(STREAMS_PATH . $f73a0c8f2d0c1725)) {
	goto label445;
}

exit();

label445:
if (!(empty($Bf9899a172ecff52['pid']) && file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'))) {
	goto label344;
}

$Bf9899a172ecff52['pid'] = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'));
goto label344;

label469:

echo $ba2d146bb5a55097;
$ba2d146bb5a55097 = '';
$e1751a10c8f69e7b = 0;
goto label355;

label473:

goto label281;

label474:

goto label573;

label475:

if (is_array($E313244dd91127bf)) {
	goto label519;
}

$F91f9d8010fb9590 = $E313244dd91127bf;
goto label573;
goto label519;

label483:

if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.dur')) {
	goto label416;
}

$f7037fc395d8fcad = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.dur'));

if (!(XUI::$rSegmentSettings['seg_time'] < $f7037fc395d8fcad)) {
	goto label511;
}

XUI::$rSegmentSettings['seg_time'] = $f7037fc395d8fcad;

label511:

goto label416;

label512:

sleep(1);
$e1751a10c8f69e7b++;
goto label355;

label518:

goto label469;

label519:

$daf83d49b4736e8d = 0;
$F56066ad7b074468 = time();

foreach ($E313244dd91127bf as $a1eb372116d9e2f0) {
	if (file_exists(STREAMS_PATH . $a1eb372116d9e2f0)) {
		goto label536;
	}

	exit();
	goto label542;

	label536:

	$daf83d49b4736e8d += readfile(STREAMS_PATH . $a1eb372116d9e2f0);

	label542:
}

goto label563;

label545:

if (false) {
	goto label343;
}

$f73a0c8f2d0c1725 = sprintf('%d_%d.ts', $ee6d1fc5d801b43f, $F91f9d8010fb9590 + 1);
$a9ed9e86f35524e4 = sprintf('%d_%d.ts', $ee6d1fc5d801b43f, $F91f9d8010fb9590 + 2);
$b319df80382e8fa9 = 0;

label562:

goto label575;

label563:

preg_match('/_(.*)\\./', array_pop($E313244dd91127bf), $F7d15e8c2cc29d08);
$F91f9d8010fb9590 = $F7d15e8c2cc29d08[1];

label573:

$e1751a10c8f69e7b = 0;
goto label312;

label575:
if (!(!file_exists(STREAMS_PATH . $f73a0c8f2d0c1725) && ($b319df80382e8fa9 <= $A97acef1265aaa85 * 10))) {
	goto label594;
}

usleep(100000);
$b319df80382e8fa9++;
goto label562;

label594:

goto label437;

label595:

goto label885;

label596:

touch(SIGNALS_TMP_PATH . 'admin_' . intval($ee6d1fc5d801b43f));
$Bf9899a172ecff52 = $b62d6460eb33ea07->get_row();
$b62d6460eb33ea07->close_mysql();

if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) {
	goto label644;
}

$Bf9899a172ecff52['pid'] = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'));
goto label644;

label631:

if ($Db31291fb30eca1e == intval($bf2e2ba8c3ab6d98) * 10) {
	goto label752;
}

if (!isset(XUI::$rRequest['odstart'])) {
	goto label751;
}

goto label749;

label644:

if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor')) {
	goto label664;
}

$Bf9899a172ecff52['monitor_pid'] = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor'));

label664:
if (!(XUI::$rSettings['on_demand_instant_off'] && ($Bf9899a172ecff52['on_demand'] == 1))) {
	goto label150;
}

goto label146;

label674:
if (empty(XUI::$rRequest['password']) || (XUI::$rSettings['live_streaming_pass'] != XUI::$rRequest['password'])) {
	goto label881;
}

if (!in_array($b38e11ffdc6a3abb, XUI::dE052F142A92e9BF())) {
	goto label877;
}

$A432ec14fb9a1e04 = (isset(XUI::$rRequest['prebuffer']) ? XUI::$rSegmentSettings['seg_time'] : 0);

foreach (getallheaders() as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	if (!(strtoupper($Bb672d1983256a93) == 'X-XUI-PREBUFFER')) {
		goto label719;
	}

	$A432ec14fb9a1e04 = XUI::$rSegmentSettings['seg_time'];

	label719:
}

goto label876;

label722:

XUI::$db = &$b62d6460eb33ea07;
$fd093b5358e9a519 = XUI::$rSettings['live_streaming_pass'];
$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream']);
$Daecfbd6410b9c42 = XUI::$rRequest['extension'];
$bf2e2ba8c3ab6d98 = 20;
goto label28;

label738:

goto label631;

label739:

if (file_exists($Aac64ae34ff57fc4)) {
	goto label631;
}

$F70ee6b6db717e21 = STREAMS_PATH . $ee6d1fc5d801b43f . '_0.ts';
goto label753;

label749:

echo '1';
exit();

label751:

goto label131;

label752:

goto label867;

label753:

$B3299684b062e356 = NULL;

label754:

if (!($Db31291fb30eca1e < (intval($bf2e2ba8c3ab6d98) * 100))) {
	goto label860;
}
if (!(file_exists($F70ee6b6db717e21) && !$B3299684b062e356)) {
	goto label827;
}

$B3299684b062e356 = fopen($F70ee6b6db717e21, 'r');
goto label827;

label777:

goto label805;

label778:

$Bf9899a172ecff52['monitor_pid'] = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor'));

label789:

goto label43;

label790:

f82199Eff9017Bc9();
goto label789;

label793:

if (XUI::D93af048A0e404F2($Bf9899a172ecff52['monitor_pid'], $ee6d1fc5d801b43f)) {
	goto label789;
}

XUI::b820C3Eb85Ebd48C($ee6d1fc5d801b43f);
goto label804;

label804:

$Db31291fb30eca1e = 0;

label805:
if (!(!file_exists(STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_.monitor') && ($Db31291fb30eca1e < 300))) {
	goto label778;
}

usleep(10000);
$Db31291fb30eca1e++;
goto label777;

label827:
if (!($B3299684b062e356 && !!fread($B3299684b062e356, 1))) {
	goto label839;
}

goto label860;

label839:

usleep(10000);
goto label857;

label843:

register_shutdown_function('shutdown');
header('Access-Control-Allow-Origin: *');
set_time_limit(0);
require '../init.php';
$b38e11ffdc6a3abb = XUI::aD72b4259CA295B2();
goto label174;

label857:

$Db31291fb30eca1e++;
goto label754;

label860:

if (!$B3299684b062e356) {
	goto label631;
}

fclose($B3299684b062e356);
goto label631;

label867:

if (isset(XUI::$rRequest['odstart'])) {
	goto label874;
}

F82199EFF9017BC9();
goto label131;

label874:

echo '0';
goto label130;

label876:

goto label879;

label877:

f82199eff9017bc9();

label879:

goto label883;
goto label881;

label881:

F82199Eff9017BC9();

label883:

goto label169;

label884:

goto label56;

label885:

?>