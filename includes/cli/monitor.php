<?php


function c7CC2F0dd6F71EBB($ee6d1fc5d801b43f)
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
		goto label29;
	}

	goto label38;

	label28:

	goto label37;

	label29:

	shell_exec('kill -9 `ps -ef | grep \'XUI\\[' . intval($ee6d1fc5d801b43f) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

	label37:

	goto label75;

	label38:

	if (!file_exists('/proc/' . $C98e11437faf4199)) {
		goto label28;
	}

	$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
	if (!(($C6671ac66a4f1c57 == 'XUI[' . $ee6d1fc5d801b43f . ']') && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label74;
	}

	posix_kill($C98e11437faf4199, 9);

	label74:

	goto label28;

	label75:
}

goto label686;

label1:
if (!(!isset($eaa731e555c0e0b1['codecs']['audio']) || empty($eaa731e555c0e0b1['codecs']['audio']))) {
	goto label20;
}

echo 'Lost audio! Break' . "\n";
XUI::d242dF32bD80320f($ee6d1fc5d801b43f, SERVER_ID, 'AUDIO_LOSS', $a4ea5aa01e1e6e14);
goto label957;

label20:

goto label330;

label21:

goto label1780;

label22:

echo 'Playlist exists!' . "\n";
goto label524;
goto label1780;

label25:

XUI::cac325153a658c37($ee6d1fc5d801b43f);

label28:

$C98e11437faf4199 = (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid') ? intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) : $D9d6a5d0b76a9aaf['pid']);
$f1b1f15f38dab369 = json_decode($D9d6a5d0b76a9aaf['auto_restart'], true);
$Aac64ae34ff57fc4 = STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8';
goto label1405;

label60:
if ($d7c6f85f8b32d6f1 && $D9d6a5d0b76a9aaf['stream_info'] && $D9d6a5d0b76a9aaf['on_demand']) {
	goto label405;
}

if ($D9d6a5d0b76a9aaf['stream_info']) {
	goto label81;
}

$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `stream_status` = 0, `stream_info` = NULL, `compatible` = 0, `audio_codec` = NULL, `video_codec` = NULL, `resolution` = NULL, `stream_started` = ? WHERE `server_stream_id` = ?', time() - $A486d2019332744a, $D9d6a5d0b76a9aaf['server_stream_id']);
goto label404;

label81:

goto label385;

label82:

$a4ea5aa01e1e6e14 = trim($ba2d146bb5a55097['stream_source'], '\'"');
goto label91;

label89:

$a4ea5aa01e1e6e14 = 'Loopback: #' . $A3206fae422859ef;

label91:

goto label1314;

label92:

if (XUI::$rSettings['fps_check_type'] == 1) {
	goto label99;
}

$C2aaa82626a1b893 = $E6e2f8e227d98f10;
goto label555;

label99:

goto label483;

label100:

usleep(50000);
$Bbd7bb26a5369a1d = $C98e11437faf4199 = 0;

label105:

if (!XUI::$rSettings['kill_rogue_ffmpeg']) {
	goto label329;
}

goto label290;

label111:
if (!(is_numeric($Bbd7bb26a5369a1d) && (0 < $Bbd7bb26a5369a1d))) {
	goto label127;
}

shell_exec('kill -9 ' . intval($Bbd7bb26a5369a1d));

label127:

usleep(50000);

label130:

goto label149;

label131:

$B0db7f560b0a4caa = $d1262bf56a392f1b = NULL;
$b62d6460eb33ea07->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = ? AND t1.argument_id = t2.id', $ee6d1fc5d801b43f);
$b5337d8a535cf6dd = $b62d6460eb33ea07->get_rows();
if ((0 < $D9d6a5d0b76a9aaf['delay_minutes']) && ($D9d6a5d0b76a9aaf['parent_id'] == 0)) {
	goto label1129;
}

goto label1125;

label149:

if (XUI::b4AB2A8Eb0AA68Ee($C98e11437faf4199, $ee6d1fc5d801b43f)) {
	goto label383;
}

$D9bd00f2afbc4d84 = false;
echo 'Restarting...' . "\n";
shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*');
goto label1697;

label168:

if (false) {
	goto label524;
}

echo 'Checking for playlist ' . ($b319df80382e8fa9 + 1) . ('/' . $d25014189921601e . '...' . "\n");

if (XUI::b4Ab2A8EB0aA68EE($C98e11437faf4199, $ee6d1fc5d801b43f)) {
	goto label205;
}

goto label202;

label184:

if (XUI::b4AB2A8eb0Aa68ee($C98e11437faf4199, $ee6d1fc5d801b43f)) {
	goto label200;
}

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor', getmypid());
goto label105;

label200:

echo 'Stream is running.' . "\n";
goto label1467;

label202:

echo 'Ffmpeg stopped running' . "\n";
$D9bd00f2afbc4d84 = true;
goto label524;

label205:

if (file_exists($Aac64ae34ff57fc4)) {
	goto label22;
}

goto label1289;

label211:

$a1eb372116d9e2f0 = $E2461a25530fd8a2 . XUI::B0fBcff8A7D2659d($Aac64ae34ff57fc4, 10)[0];
$D9d6a5d0b76a9aaf['stream_info'] = NULL;

if (!file_exists($a1eb372116d9e2f0)) {
	goto label246;
}

$eaa731e555c0e0b1 = XUI::e57006536cD5655D($a1eb372116d9e2f0);

if (!(10 < intval($eaa731e555c0e0b1['of_duration']))) {
	goto label720;
}

goto label718;

label239:

if ($ba2d146bb5a55097) {
	goto label242;
}

exit();

label242:

goto label1558;

label243:

$E688c279c39e47a5 = time();

label246:

$ec173304ea5bcb05 = 0;
$Ea0fade993e4268b = $Dcf2a78a4c7b0c6f = $C98609e3115bee61 = NULL;
goto label771;

label251:
if (!($b8b0991a282d3e7b || (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.dur') && (300 < (time() - $E688c279c39e47a5))))) {
	goto label1261;
}

echo 'Probe Stream' . "\n";
$a1eb372116d9e2f0 = XUI::b0FBcff8a7d2659D($Aac64ae34ff57fc4, 10)[0];

if (empty($a1eb372116d9e2f0)) {
	goto label1243;
}
if (!((300 < (time() - $E688c279c39e47a5)) && ($a1eb372116d9e2f0 == $B0db7f560b0a4caa))) {
	goto label594;
}

goto label586;

label290:

exec('ps aux | grep -v grep | grep \'/' . $ee6d1fc5d801b43f . '_.m3u8\' | awk \'{print $2}\'', $A9bb0ba05fdbc059);

foreach ($A9bb0ba05fdbc059 as $e50917e00431e32d) {
	if (!(is_numeric($e50917e00431e32d) && (0 < intval($e50917e00431e32d)) && (intval($e50917e00431e32d) != intval($C98e11437faf4199)))) {
		goto label327;
	}

	shell_exec('kill -9 ' . $e50917e00431e32d . ';');

	label327:
}

label329:

goto label1447;

label330:

$Ef48768a7cf70632 = time();

label333:

if (!(($dcd73dd0ee380034 * 6) <= time() - $a4a8f3d7a149c639)) {
	goto label845;
}

$f176734076917881 = md5_file($Aac64ae34ff57fc4);
goto label971;

label346:

echo 'FPS dropped below threshold! Break' . "\n";
XUI::d242DF32bD80320F($ee6d1fc5d801b43f, SERVER_ID, 'FPS_DROP_THRESHOLD', $a4ea5aa01e1e6e14);
goto label957;

label355:

goto label555;
goto label92;

label357:

exit();

label358:

$D9d6a5d0b76a9aaf = $b62d6460eb33ea07->get_row();
$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `monitor_pid` = ? WHERE `server_stream_id` = ?', getmypid(), $D9d6a5d0b76a9aaf['server_stream_id']);

if (!XUI::$rSettings['enable_cache']) {
	goto label28;
}

goto label25;

label375:

if (!(MONITOR_CALLS <= $a493c069d122b481)) {
	goto label381;
}

$a493c069d122b481 = 0;

label381:

goto label149;
goto label383;

label383:

goto label329;

label384:

goto label1880;

label385:

$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `stream_info` = ?, `compatible` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ?, `bitrate` = ?, `stream_status` = 0, `stream_started` = ? WHERE `server_stream_id` = ?', $D9d6a5d0b76a9aaf['stream_info'], $ec173304ea5bcb05, $Ea0fade993e4268b, $Dcf2a78a4c7b0c6f, $C98609e3115bee61, intval($Bf1105c589a3fe51), time() - $A486d2019332744a, $D9d6a5d0b76a9aaf['server_stream_id']);

label404:

goto label1647;

label405:

$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `stream_info` = ?, `compatible` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ?, `bitrate` = ?, `stream_status` = 0 WHERE `server_stream_id` = ?', $D9d6a5d0b76a9aaf['stream_info'], $ec173304ea5bcb05, $Ea0fade993e4268b, $Dcf2a78a4c7b0c6f, $C98609e3115bee61, intval($Bf1105c589a3fe51), $D9d6a5d0b76a9aaf['server_stream_id']);
goto label1647;

label421:

$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `pid` = null, `stream_status` = 1 WHERE `server_stream_id` = ?;', $D9d6a5d0b76a9aaf['server_stream_id']);

if (!XUI::$rSettings['enable_cache']) {
	goto label434;
}

XUI::cAc325153a658c37($ee6d1fc5d801b43f);

label434:

echo 'Sleep for ' . XUI::$rSettings['stream_fail_sleep'] . ' seconds...';
goto label1097;

label440:

list($f4f8138a4ae6c15f, $C01784a58c8748e0) = explode(':', $f1b1f15f38dab369['at']);
if (!(in_array(date('l'), $f1b1f15f38dab369['days']) && (date('H') == $f4f8138a4ae6c15f))) {
	goto label685;
}

if (!($C01784a58c8748e0 == date('i'))) {
	goto label685;
}

echo 'Auto-restart' . "\n";
XUI::D242DF32BD80320f($ee6d1fc5d801b43f, SERVER_ID, 'AUTO_RESTART', $a4ea5aa01e1e6e14);
goto label683;

label483:

$a1eb372116d9e2f0 = XUI::B0FBcFf8A7d2659d($Aac64ae34ff57fc4, 10)[0];

if (empty($a1eb372116d9e2f0)) {
	goto label555;
}

$eaa731e555c0e0b1 = XUI::E57006536cd5655d($E2461a25530fd8a2 . $a1eb372116d9e2f0);
if (!(isset($eaa731e555c0e0b1['codecs']['video']['avg_frame_rate']) || isset($eaa731e555c0e0b1['codecs']['video']['r_frame_rate']))) {
	goto label555;
}

$E6e2f8e227d98f10 = $eaa731e555c0e0b1['codecs']['video']['avg_frame_rate'] ?: $eaa731e555c0e0b1['codecs']['video']['r_frame_rate'];
goto label978;

label518:

$b319df80382e8fa9++;
sleep(1);
goto label168;

label524:

goto label1048;

label525:

XUI::d242Df32Bd80320f($ee6d1fc5d801b43f, SERVER_ID, 'STREAM_START_FAIL', $a4ea5aa01e1e6e14);

label532:
if (!(is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199) && XUI::b4ab2a8eb0Aa68Ee($C98e11437faf4199, $ee6d1fc5d801b43f))) {
	goto label554;
}

shell_exec('kill -9 ' . intval($C98e11437faf4199));

label554:

goto label421;

label555:

goto label1532;

label556:

unlink(SIGNALS_TMP_PATH . $ee6d1fc5d801b43f . '.force');

label562:
if (!($Fd0ea6c36e6ec7df && ($D9d6a5d0b76a9aaf['delay_available_at'] <= time()) && !XUI::d69230d2A98C2fD4($Bbd7bb26a5369a1d, $ee6d1fc5d801b43f))) {
	goto label953;
}

echo 'Start Delay' . "\n";
XUI::D242df32bD80320f($ee6d1fc5d801b43f, SERVER_ID, 'DELAY_START');
goto label930;

label586:

XUI::d242DF32Bd80320f($ee6d1fc5d801b43f, SERVER_ID, 'FFMPEG_ERROR', $a4ea5aa01e1e6e14);
goto label957;

label594:

$B0db7f560b0a4caa = $a1eb372116d9e2f0;
$eaa731e555c0e0b1 = XUI::e57006536cD5655d($E2461a25530fd8a2 . $a1eb372116d9e2f0);
goto label1667;

label601:
if (!(!is_numeric($Bb672d1983256a93) || (0 < $Bb672d1983256a93))) {
	goto label682;
}

foreach ($Ec0879f16d0cdddb as $fd51b5505224fc7c) {
	goto label615;

	label615:
	if (!(($fd51b5505224fc7c == $a4ea5aa01e1e6e14) || ($fd51b5505224fc7c == $d1262bf56a392f1b))) {
		goto label625;
	}

	goto label682;

	label625:

	$b45008dac88f7d0a = XUI::c1F42cA38AD7a48D($fd51b5505224fc7c);
	$Bf9be24c69c0f17b = strtolower(substr($b45008dac88f7d0a, 0, strpos($b45008dac88f7d0a, '://')));
	goto label650;

	label644:

	$E1c50c548d8200d4 = true;
	$df2629c3d4863b69 = false;
	goto label957;

	label648:

	goto label680;

	label650:

	$d2ad997f4540e3ec = implode(' ', XUI::a0779cB0a5BDF6fF($b5337d8a535cf6dd, $Bf9be24c69c0f17b, 'fetch'));

	if (!($eaa731e555c0e0b1 = XUI::E57006536CD5655D($b45008dac88f7d0a, $d2ad997f4540e3ec))) {
		goto label648;
	}

	echo 'Switch priority' . "\n";
	XUI::d242dF32bD80320f($ee6d1fc5d801b43f, SERVER_ID, 'PRIORITY_SWITCH', $fd51b5505224fc7c);
	$d1262bf56a392f1b = $fd51b5505224fc7c;
	goto label644;

	label680:
}

label682:

goto label1601;

label683:

$df2629c3d4863b69 = false;
goto label957;

label685:

goto label251;

label686:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label697;
}

exit('Please run as XUI!' . "\n");

label697:
if (!(!@$argc || ($argc <= 1))) {
	goto label1727;
}

exit(0);
goto label1727;

label709:

if (0 < $A3206fae422859ef) {
	goto label715;
}

$a4ea5aa01e1e6e14 = $D9d6a5d0b76a9aaf['current_source'];
goto label131;

label715:

$a4ea5aa01e1e6e14 = 'Loopback: #' . $A3206fae422859ef;
goto label131;

label718:

$eaa731e555c0e0b1['of_duration'] = 10;

label720:

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.dur', intval($eaa731e555c0e0b1['of_duration']));

if (!($dcd73dd0ee380034 < intval($eaa731e555c0e0b1['of_duration']))) {
	goto label1132;
}

$dcd73dd0ee380034 = intval($eaa731e555c0e0b1['of_duration']);
goto label1132;

label745:

if ($D9d6a5d0b76a9aaf['type'] == 3) {
	goto label758;
}

$ba2d146bb5a55097 = XUI::FFA26438e002c2b7($ee6d1fc5d801b43f, $a493c069d122b481 < MONITOR_CALLS, $d1262bf56a392f1b);
goto label884;

label758:
if (!((0 < $C98e11437faf4199) && !$D9d6a5d0b76a9aaf['parent_id'] && (0 < $D9d6a5d0b76a9aaf['stream_started']))) {
	goto label1391;
}

goto label1360;

label771:

if (!$D9d6a5d0b76a9aaf['stream_info']) {
	goto label1096;
}

$ff5ef044498e902a = json_decode($D9d6a5d0b76a9aaf['stream_info'], true);
$ec173304ea5bcb05 = intval(XUI::D00c33C8075d14a5($ff5ef044498e902a));
$Ea0fade993e4268b = $ff5ef044498e902a['codecs']['audio']['codec_name'] ?: NULL;
$Dcf2a78a4c7b0c6f = $ff5ef044498e902a['codecs']['video']['codec_name'] ?: NULL;
goto label1082;

label801:

shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*');
file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor', getmypid());
if (!($Fd0ea6c36e6ec7df && XUI::D69230d2a98C2Fd4($Bbd7bb26a5369a1d, $ee6d1fc5d801b43f) && is_numeric($Bbd7bb26a5369a1d) && (0 < $Bbd7bb26a5369a1d))) {
	goto label844;
}

shell_exec('kill -9 ' . intval($Bbd7bb26a5369a1d));

label844:

goto label100;

label845:
if (!((XUI::$rSettings['priority_backup'] == 1) && (1 < count($Ec0879f16d0cdddb)) && ($A3206fae422859ef == 0) && (300 < (time() - $b98c58bde5697b35)))) {
	goto label682;
}

echo 'Checking backups...' . "\n";
$b98c58bde5697b35 = time();
$Bb672d1983256a93 = array_search($a4ea5aa01e1e6e14, $Ec0879f16d0cdddb);
goto label601;

label876:

$ba2d146bb5a55097 = XUI::FFA26438e002c2B7($ee6d1fc5d801b43f, false, $d1262bf56a392f1b, false, $A486d2019332744a);

label884:

goto label1802;

label885:

if ($D9d6a5d0b76a9aaf['llod'] == 1) {
	goto label1283;
}

goto label1803;

label890:

usleep(50000);

label893:

if (!XUI::D69230D2A98C2FD4($Bbd7bb26a5369a1d, $ee6d1fc5d801b43f)) {
	goto label130;
}

echo 'Killing stream delay...' . "\n";
goto label111;

label902:

if (!(count(json_decode($D9d6a5d0b76a9aaf['stream_info'], true)) == 0)) {
	goto label915;
}

$b8b0991a282d3e7b = true;

label915:

$a4a8f3d7a149c639 = time();
goto label845;

label919:

$E6e2f8e227d98f10 = floatval($D505676eaf180b04 / $f386e210a5240001);

label924:

if (!(0 < $E6e2f8e227d98f10)) {
	goto label929;
}

$C2aaa82626a1b893 = $E6e2f8e227d98f10;

label929:

goto label555;

label930:

$Bbd7bb26a5369a1d = intval(shell_exec(PHP_BIN . ' ' . CLI_PATH . 'delay.php ' . intval($ee6d1fc5d801b43f) . ' ' . intval($D9d6a5d0b76a9aaf['delay_minutes']) . ' >/dev/null 2>/dev/null & echo $!'));

label953:

sleep(1);
goto label1197;

label957:

goto label1518;

label958:

$E1c50c548d8200d4 = false;
$a1299f5d873559ce = 0;

if (!($A3206fae422859ef == 0)) {
	goto label970;
}

$Ec0879f16d0cdddb = json_decode($D9d6a5d0b76a9aaf['stream_source'], true);

label970:

goto label709;

label971:

if ($Cd8e1820d4075a5c != $f176734076917881) {
	goto label976;
}

goto label957;
goto label1418;

label976:

$Cd8e1820d4075a5c = $f176734076917881;
goto label1415;

label978:

if (stripos($E6e2f8e227d98f10, '/') !== false) {
	goto label990;
}

$E6e2f8e227d98f10 = floatval($E6e2f8e227d98f10);
goto label924;

label990:

list($D505676eaf180b04, $f386e210a5240001) = array_map('floatval', explode('/', $E6e2f8e227d98f10));
goto label919;

label1004:

echo 'Checking FPS...' . "\n";
$E6e2f8e227d98f10 = floatval(json_decode(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.progress_check'), true)['fps']) ?: 0;

if (!(0 < $E6e2f8e227d98f10)) {
	goto label555;
}

if (!$C2aaa82626a1b893) {
	goto label92;
}
if (!($C2aaa82626a1b893 && (($E6e2f8e227d98f10 * ($D9d6a5d0b76a9aaf['fps_threshold'] ?: 100)) < $C2aaa82626a1b893))) {
	goto label355;
}

goto label346;

label1041:

goto label1044;

label1042:

$E2461a25530fd8a2 = DELAY_PATH;

label1044:

$Fab9794ebd542742 = $E2461a25530fd8a2 . $ee6d1fc5d801b43f . '_0.ts';
goto label1324;

label1048:

XUI::$rSettings = XUI::aC49B56Dbe10E52c();
if (XUI::b4ab2A8EB0aA68Ee($C98e11437faf4199, $ee6d1fc5d801b43f) && !$D9bd00f2afbc4d84) {
	goto label1114;
}

echo 'Stream start failed...' . "\n";

if (!($A3206fae422859ef == 0)) {
	goto label532;
}

goto label525;

label1067:

goto label1072;

label1068:

$ba2d146bb5a55097 = XUI::startLoopback($ee6d1fc5d801b43f);

label1072:
if (!(is_numeric($ba2d146bb5a55097) && ($ba2d146bb5a55097 == 0))) {
	goto label239;
}

goto label1489;

label1082:

$C98609e3115bee61 = $ff5ef044498e902a['codecs']['video']['height'] ?: NULL;

if (!$C98609e3115bee61) {
	goto label1096;
}

$C98609e3115bee61 = XUI::B954Bd7c2BeC3c82([240, 360, 480, 576, 720, 1080, 1440, 2160], $C98609e3115bee61);

label1096:

goto label60;

label1097:

sleep(XUI::$rSettings['stream_fail_sleep']);
if (!(XUI::$rSettings['on_demand_failure_exit'] && $D9d6a5d0b76a9aaf['on_demand'])) {
	goto label1112;
}

echo 'On-demand failed to run!' . "\n";
exit();

label1112:

goto label1113;

label1113:

goto label375;

label1114:

echo 'Started! Probe Stream' . "\n";

if ($aa7ca17b42be6668) {
	goto label1658;
}

XUI::D242df32bd80320f($ee6d1fc5d801b43f, SERVER_ID, 'STREAM_RESTART', $a4ea5aa01e1e6e14);
goto label1657;

label1125:

$Fd0ea6c36e6ec7df = false;
$E2461a25530fd8a2 = STREAMS_PATH;
goto label1870;

label1129:

$E2461a25530fd8a2 = DELAY_PATH;
goto label1865;

label1132:

if (!$eaa731e555c0e0b1) {
	goto label246;
}

$D9d6a5d0b76a9aaf['stream_info'] = json_encode($eaa731e555c0e0b1, JSON_UNESCAPED_UNICODE);
$Bf1105c589a3fe51 = XUI::E0117654B65aE897('live', STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8');
$b8b0991a282d3e7b = false;
goto label243;

label1152:

unlink(SIGNALS_TMP_PATH . $ee6d1fc5d801b43f . '.force');
$df2629c3d4863b69 = false;
goto label957;

label1160:

goto label556;

label1161:

if (!XUI::B4AB2a8eb0AA68ee($C98e11437faf4199, $ee6d1fc5d801b43f)) {
	goto label893;
}

echo 'Killing stream...' . "\n";
if (!(is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
	goto label890;
}

shell_exec('kill -9 ' . intval($C98e11437faf4199));
goto label890;

label1186:
$df2629c3d4863b69 = XUI::B4ab2A8eB0aA68eE($C98e11437faf4199, $ee6d1fc5d801b43f) && file_exists($Aac64ae34ff57fc4);
$C2aaa82626a1b893 = NULL;

label1197:
if (!(XUI::b4aB2a8eB0AA68ee($C98e11437faf4199, $ee6d1fc5d801b43f) && file_exists($Aac64ae34ff57fc4))) {
	goto label957;
}
if (!(!empty($f1b1f15f38dab369['days']) && !empty($f1b1f15f38dab369['at']))) {
	goto label685;
}

goto label440;

label1219:

$dcd73dd0ee380034 = intval($eaa731e555c0e0b1['of_duration']);

label1224:

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.stream_info', json_encode($eaa731e555c0e0b1, JSON_UNESCAPED_UNICODE));
$D9d6a5d0b76a9aaf['stream_info'] = json_encode($eaa731e555c0e0b1, JSON_UNESCAPED_UNICODE);

label1243:

goto label1340;

label1244:

if (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor')) {
	goto label1261;
}

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor', getmypid());

label1261:
if (!(($D9d6a5d0b76a9aaf['fps_restart'] == 1) && (XUI::$rSettings['fps_delay'] < (time() - $ba0fb1d583c51a3c)) && file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.progress_check'))) {
	goto label1538;
}

goto label1004;

label1283:

if (!$d1262bf56a392f1b) {
	goto label1288;
}

$D6c0ea408d26a83e = $d1262bf56a392f1b;
goto label1795;

label1288:

goto label1788;

label1289:
if (!(file_exists($Fab9794ebd542742) && !$d7c6f85f8b32d6f1 && $D9d6a5d0b76a9aaf['on_demand'])) {
	goto label21;
}

echo 'Segment exists!' . "\n";
$d7c6f85f8b32d6f1 = true;
$b319df80382e8fa9 = 0;
$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `stream_status` = 0, `stream_started` = ? WHERE `server_stream_id` = ?', time() - $A486d2019332744a, $D9d6a5d0b76a9aaf['server_stream_id']);
goto label21;

label1314:

$A486d2019332744a = $ba2d146bb5a55097['offset'];
$b8b0991a282d3e7b = true;
echo 'Stream started' . "\n";
echo $a4ea5aa01e1e6e14 . "\n";

if (!$E1c50c548d8200d4) {
	goto label1875;
}

goto label1873;

label1324:

$d7c6f85f8b32d6f1 = false;
$b319df80382e8fa9 = 0;
$d25014189921601e = (($dcd73dd0ee380034 * 3) <= 30 ? $dcd73dd0ee380034 * 3 : 30);

if (!($d25014189921601e < 20)) {
	goto label168;
}

$d25014189921601e = 20;
goto label168;

label1340:

$b8b0991a282d3e7b = false;
$E688c279c39e47a5 = time();

if (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) {
	goto label1359;
}

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid', $C98e11437faf4199);

label1359:

goto label1244;

label1360:

$d39b06d67f28803d = json_decode($D9d6a5d0b76a9aaf['cc_info'], true);
if (!($d39b06d67f28803d && ((time() - $D9d6a5d0b76a9aaf['stream_started']) < (intval($d39b06d67f28803d[count($d39b06d67f28803d) - 1]['finish']) * 0.95)))) {
	goto label1391;
}

$A486d2019332744a = time() - $D9d6a5d0b76a9aaf['stream_started'];

label1391:

goto label876;

label1392:

$Aac64ae34ff57fc4 = $ba2d146bb5a55097['playlist'];
$Fd0ea6c36e6ec7df = $ba2d146bb5a55097['delay_enabled'];
$D9d6a5d0b76a9aaf['delay_available_at'] = $ba2d146bb5a55097['delay_start_at'];
$A3206fae422859ef = $ba2d146bb5a55097['parent_id'];

if (0 < $A3206fae422859ef) {
	goto label89;
}

goto label82;

label1405:

$Bbd7bb26a5369a1d = $D9d6a5d0b76a9aaf['delay_pid'];
$A3206fae422859ef = $D9d6a5d0b76a9aaf['parent_id'];
$b8b0991a282d3e7b = false;
$Ec0879f16d0cdddb = [];
$dcd73dd0ee380034 = XUI::$rSegmentSettings['seg_time'];
goto label958;

label1415:

$a4a8f3d7a149c639 = time();

label1418:

if (!XUI::$rSettings['encrypt_hls']) {
	goto label902;
}

foreach (glob(STREAMS_PATH . $ee6d1fc5d801b43f . '_*.ts.enc') as $D6be258a9043b749) {
	if (file_exists(rtrim($D6be258a9043b749, '.enc'))) {
		goto label1444;
	}

	unlink($D6be258a9043b749);

	label1444:
}

goto label902;

label1447:

if (false) {
	goto label384;
}

if (!(0 < $C98e11437faf4199)) {
	goto label1161;
}

$b62d6460eb33ea07->close_mysql();
$ba0fb1d583c51a3c = $E688c279c39e47a5 = $Ef48768a7cf70632 = $a4a8f3d7a149c639 = $b98c58bde5697b35 = time();
$Cd8e1820d4075a5c = md5_file($Aac64ae34ff57fc4);
goto label1186;

label1467:

if (!$C7b0a4584580a53d) {
	goto label105;
}

$a493c069d122b481 = MONITOR_CALLS;
if (!(is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
	goto label1488;
}

shell_exec('kill -9 ' . intval($C98e11437faf4199));

label1488:

goto label801;

label1489:

$D9bd00f2afbc4d84 = true;
$a1299f5d873559ce++;
if (!((0 < XUI::$rSettings['stop_failures']) && ($a1299f5d873559ce == XUI::$rSettings['stop_failures']))) {
	goto label239;
}

echo 'Failure limit reached, exiting.' . "\n";
exit();
goto label239;

label1506:

if (!empty($a1eb372116d9e2f0)) {
	goto label1512;
}

goto label957;
goto label333;

label1512:

$eaa731e555c0e0b1 = XUI::E57006536cd5655D($E2461a25530fd8a2 . $a1eb372116d9e2f0);
goto label1;

label1518:

if (!$df2629c3d4863b69) {
	goto label1529;
}

XUI::d242DF32bD80320F($ee6d1fc5d801b43f, SERVER_ID, 'STREAM_FAILED', $a4ea5aa01e1e6e14);
echo 'Stream failed!' . "\n";

label1529:

$b62d6460eb33ea07->db_connect();
goto label1161;

label1532:

unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_.progress_check');

label1538:
if (!((XUI::$rSettings['audio_restart_loss'] == 1) && (300 < (time() - $Ef48768a7cf70632)))) {
	goto label333;
}

echo 'Checking audio...' . "\n";
$a1eb372116d9e2f0 = XUI::b0fbCFf8a7d2659d($Aac64ae34ff57fc4, 10)[0];
goto label1506;

label1558:

if ($D9bd00f2afbc4d84) {
	goto label1048;
}

$C98e11437faf4199 = intval($ba2d146bb5a55097['main_pid']);

if (!$C98e11437faf4199) {
	goto label1575;
}

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid', $C98e11437faf4199);

label1575:

goto label1392;

label1576:

set_time_limit(0);
cli_set_process_title('XUI[' . $ee6d1fc5d801b43f . ']');
$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.id = ?', SERVER_ID, $ee6d1fc5d801b43f);

if (!($b62d6460eb33ea07->num_rows() <= 0)) {
	goto label358;
}

XUI::eE173B194544b3A2($ee6d1fc5d801b43f);
goto label357;

label1601:
if (!(file_exists(SIGNALS_TMP_PATH . $ee6d1fc5d801b43f . '.force') && ($A3206fae422859ef == 0))) {
	goto label562;
}

$c4620a212189e773 = intval(file_get_contents(SIGNALS_TMP_PATH . $ee6d1fc5d801b43f . '.force'));
$b45008dac88f7d0a = XUI::c1F42CA38AD7a48D($Ec0879f16d0cdddb[$c4620a212189e773]);

if (!($Ec0879f16d0cdddb[$c4620a212189e773] != $a4ea5aa01e1e6e14)) {
	goto label1160;
}

$Bf9be24c69c0f17b = strtolower(substr($b45008dac88f7d0a, 0, strpos($b45008dac88f7d0a, '://')));
goto label1750;

label1647:

if (!XUI::$rSettings['enable_cache']) {
	goto label1655;
}

XUI::cAc325153A658c37($ee6d1fc5d801b43f);

label1655:

echo 'End start process' . "\n";
goto label375;

label1657:

goto label1666;

label1658:

$aa7ca17b42be6668 = false;
XUI::D242DF32bD80320F($ee6d1fc5d801b43f, SERVER_ID, 'STREAM_START', $a4ea5aa01e1e6e14);

label1666:

goto label211;

label1667:

if (!(10 < intval($eaa731e555c0e0b1['of_duration']))) {
	goto label1677;
}

$eaa731e555c0e0b1['of_duration'] = 10;

label1677:

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.dur', intval($eaa731e555c0e0b1['of_duration']));

if (!($dcd73dd0ee380034 < intval($eaa731e555c0e0b1['of_duration']))) {
	goto label1224;
}

goto label1219;

label1697:

file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor', getmypid());
$A486d2019332744a = 0;
$a493c069d122b481++;
if ((0 < $D9d6a5d0b76a9aaf['parent_id']) && XUI::$rSettings['php_loopback']) {
	goto label1068;
}
if ((0 < $D9d6a5d0b76a9aaf['llod']) && $D9d6a5d0b76a9aaf['on_demand'] && $aa7ca17b42be6668) {
	goto label885;
}

goto label745;

label1727:

$ee6d1fc5d801b43f = intval($argv[1]);
$C7b0a4584580a53d = !empty($argv[2]);
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
c7Cc2f0dD6F71Ebb($ee6d1fc5d801b43f);
goto label1576;

label1750:

$d2ad997f4540e3ec = implode(' ', XUI::a0779Cb0a5BdF6FF($b5337d8a535cf6dd, $Bf9be24c69c0f17b, 'fetch'));

if (!($eaa731e555c0e0b1 = XUI::E57006536cd5655D($b45008dac88f7d0a, $d2ad997f4540e3ec))) {
	goto label1160;
}

echo 'Force new source' . "\n";
XUI::D242Df32bd80320F($ee6d1fc5d801b43f, SERVER_ID, 'FORCE_SOURCE', $Ec0879f16d0cdddb[$c4620a212189e773]);
$d1262bf56a392f1b = $Ec0879f16d0cdddb[$c4620a212189e773];
goto label1152;

label1780:

if (!($b319df80382e8fa9 == $d25014189921601e)) {
	goto label518;
}

echo 'Reached max failures' . "\n";
$D9bd00f2afbc4d84 = true;
goto label524;
goto label518;

label1788:

$D6c0ea408d26a83e = json_decode($D9d6a5d0b76a9aaf['stream_source'], true)[0];

label1795:

$ba2d146bb5a55097 = XUI::fFa26438E002C2b7($ee6d1fc5d801b43f, false, $D6c0ea408d26a83e, true);

label1802:

goto label1067;

label1803:

if (!$D9d6a5d0b76a9aaf['parent_id']) {
	goto label1851;
}
$d1262bf56a392f1b = (!is_null(XUI::$rServers[SERVER_ID]['private_url_ip']) && !is_null(XUI::$rServers[$D9d6a5d0b76a9aaf['parent_id']]['private_url_ip']) ? XUI::$rServers[$D9d6a5d0b76a9aaf['parent_id']]['private_url_ip'] : XUI::$rServers[$D9d6a5d0b76a9aaf['parent_id']]['public_url_ip']) . 'admin/live?stream=' . intval($ee6d1fc5d801b43f) . '&password=' . urlencode(XUI::$rSettings['live_streaming_pass']) . '&extension=ts';

label1851:

$ba2d146bb5a55097 = XUI::F7DA8229D2d44874($ee6d1fc5d801b43f, $D9d6a5d0b76a9aaf, $D9d6a5d0b76a9aaf['parent_id'] ? [] : $b5337d8a535cf6dd, $d1262bf56a392f1b);
goto label1802;
goto label1283;

label1865:

$Aac64ae34ff57fc4 = DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8';
$Fd0ea6c36e6ec7df = true;

label1870:

$aa7ca17b42be6668 = true;
$a493c069d122b481 = 0;
goto label184;

label1873:

$d1262bf56a392f1b = NULL;
$E1c50c548d8200d4 = false;

label1875:

if ($Fd0ea6c36e6ec7df) {
	goto label1042;
}

$E2461a25530fd8a2 = STREAMS_PATH;
goto label1041;

label1880:

?>