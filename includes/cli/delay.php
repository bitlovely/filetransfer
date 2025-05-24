<?php


function C23a9e3BD783fff0()
{
	global $ee6d1fc5d801b43f;
	global $cbf541d72500f722;
	shell_exec('find ' . DELAY_PATH . intval($ee6d1fc5d801b43f) . '_*' . (' -type f -cmin +' . $cbf541d72500f722 . ' -delete'));
}

function AA260198262d3A85($Ac1adc37e57ef7cd)
{
	global $ee6d1fc5d801b43f;

	if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $Ac1adc37e57ef7cd . '.ts')) {
		goto label21;
	}

	unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $Ac1adc37e57ef7cd . '.ts');

	label21:

	if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $Ac1adc37e57ef7cd . '.ts.enc')) {
		goto label40;
	}

	unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_' . $Ac1adc37e57ef7cd . '.ts.enc');

	label40:
}

function D182BFAfec02c67F($Da063ce7d50d331c, &$B0b66e80093fc832, $F238092e4e4d82a9)
{
	goto label41;

	label4:

	if (!file_exists($Da063ce7d50d331c)) {
		goto label23;
	}

	$E313244dd91127bf = array_merge($E313244dd91127bf, A4D45E1f279652D4($Da063ce7d50d331c, $F238092e4e4d82a9 - count($E313244dd91127bf)));

	label23:

	return $E313244dd91127bf;
	goto label70;

	label25:
	if (!(($df6991d59f367c7e < $F238092e4e4d82a9) && ($df6991d59f367c7e < count($B0b66e80093fc832)))) {
		goto label58;
	}

	$E313244dd91127bf[] = $B0b66e80093fc832[$df6991d59f367c7e];
	$df6991d59f367c7e++;
	goto label57;

	label41:

	$E313244dd91127bf = [];

	if (empty($B0b66e80093fc832)) {
		goto label4;
	}

	$E313244dd91127bf = array_shift($B0b66e80093fc832);
	unlink(DELAY_PATH . $E313244dd91127bf['file']);
	$df6991d59f367c7e = 0;
	goto label25;

	label57:

	goto label25;

	label58:

	$B0b66e80093fc832 = array_values($B0b66e80093fc832);
	$E313244dd91127bf = array_shift($B0b66e80093fc832);
	a18CE7E6880756e6($B0b66e80093fc832);
	goto label4;

	label70:
}

function a18CE7e6880756E6($B0b66e80093fc832)
{
	global $ad242636af36d5a7;

	if (!empty($B0b66e80093fc832)) {
		goto label10;
	}

	unlink($ad242636af36d5a7);
	goto label29;

	label10:

	$ba2d146bb5a55097 = '';

	foreach ($B0b66e80093fc832 as $a1eb372116d9e2f0) {
		$ba2d146bb5a55097 .= '#EXTINF:' . $a1eb372116d9e2f0['seconds'] . ',' . "\n" . $a1eb372116d9e2f0['file'] . "\n";
	}

	file_put_contents($ad242636af36d5a7, $ba2d146bb5a55097, LOCK_EX);

	label29:
}

function A4D45e1f279652D4($Aac64ae34ff57fc4, $ed06f1a4ada62a86 = 0)
{
	goto label60;

	label3:

	if (!(count($E313244dd91127bf) == $ed06f1a4ada62a86)) {
		goto label11;
	}

	goto label79;

	label11:

	$F5ba2106d5227309 = trim(fgets($B3299684b062e356));

	if (!stristr($F5ba2106d5227309, 'EXTINF')) {
		goto label78;
	}

	goto label26;

	label26:

	list($Fec5fd95e6ba7e67, $d03052828cab569a) = explode(':', $F5ba2106d5227309);
	$d03052828cab569a = rtrim($d03052828cab569a, ',');
	$f73a0c8f2d0c1725 = trim(fgets($B3299684b062e356));

	if (!file_exists(DELAY_PATH . $f73a0c8f2d0c1725)) {
		goto label78;
	}

	$E313244dd91127bf[] = ['seconds' => $d03052828cab569a, 'file' => $f73a0c8f2d0c1725];
	goto label78;

	label60:

	$E313244dd91127bf = [];

	if (!file_exists($Aac64ae34ff57fc4)) {
		goto label83;
	}

	$B3299684b062e356 = fopen($Aac64ae34ff57fc4, 'r');

	label72:

	if (feof($B3299684b062e356)) {
		goto label79;
	}

	goto label3;

	label78:

	goto label72;

	label79:

	fclose($B3299684b062e356);
	goto label83;

	label83:

	return $E313244dd91127bf;
	goto label85;

	label85:
}

function C7cC2F0dD6f71eBB($ee6d1fc5d801b43f)
{
	goto label22;

	label2:

	goto label11;

	label3:

	shell_exec('kill -9 `ps -ef | grep \'XUIDelay\\[' . intval($ee6d1fc5d801b43f) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

	label11:

	goto label12;

	label12:

	file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor_delay', getmypid());
	goto label85;

	label22:

	clearstatcache(true);

	if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor_delay')) {
		goto label44;
	}

	$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor_delay'));

	label44:

	if (empty($C98e11437faf4199)) {
		goto label3;
	}

	goto label48;

	label48:

	if (!file_exists('/proc/' . $C98e11437faf4199)) {
		goto label2;
	}

	$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
	if (!(($C6671ac66a4f1c57 == 'XUIDelay[' . $ee6d1fc5d801b43f . ']') && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label84;
	}

	posix_kill($C98e11437faf4199, 9);

	label84:

	goto label2;

	label85:
}

function ED8dBf4549416FA2()
{
	goto label113;

	label1:

	$D9d6a5d0b76a9aaf = $b62d6460eb33ea07->get_row();
	if (!(($D9d6a5d0b76a9aaf['delay_minutes'] == 0) || $D9d6a5d0b76a9aaf['parent_id'])) {
		goto label13;
	}

	exit();

	label13:

	$C98e11437faf4199 = (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid') ? intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) : $D9d6a5d0b76a9aaf['pid']);
	goto label174;

	label35:
	if (!(XUI::b4AB2a8eb0aa68EE($C98e11437faf4199, $ee6d1fc5d801b43f) && file_exists($Da063ce7d50d331c))) {
		goto label93;
	}

	if (!($Cd8e1820d4075a5c != $d8c7bd0a82265276)) {
		goto label214;
	}

	if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.dur')) {
		goto label139;
	}

	$f7037fc395d8fcad = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.dur'));
	goto label130;

	label71:

	if (empty($A340a270d47d5f5a['segments'])) {
		goto label214;
	}

	$ba2d146bb5a55097 = '';
	$Ac1adc37e57ef7cd = 0;

	if (!preg_match('/.*\\_(.*?)\\.ts/', $A340a270d47d5f5a['segments'][0]['file'], $Ac97fb1939417214)) {
		goto label226;
	}

	$Ac1adc37e57ef7cd = intval($Ac97fb1939417214[1]);
	goto label226;

	label93:

	goto label270;

	label94:

	$b62d6460eb33ea07->close_mysql();
	$cbf541d72500f722 = intval($D9d6a5d0b76a9aaf['delay_minutes']) + 5;
	c23a9e3bd783fff0();
	$F238092e4e4d82a9 = intval(XUI::$rSegmentSettings['seg_list_size']) + 5;
	$B0b66e80093fc832 = [];
	goto label154;

	label113:

	global $b62d6460eb33ea07;
	global $ee6d1fc5d801b43f;
	global $cbf541d72500f722;
	$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id AND t2.server_id = ? WHERE t1.id = ?', SERVER_ID, $ee6d1fc5d801b43f);

	if (!($b62d6460eb33ea07->num_rows() <= 0)) {
		goto label129;
	}

	exit();

	label129:

	goto label1;

	label130:

	if (!(XUI::$rSegmentSettings['seg_time'] < $f7037fc395d8fcad)) {
		goto label139;
	}

	XUI::$rSegmentSettings['seg_time'] = $f7037fc395d8fcad;

	label139:

	$A340a270d47d5f5a = [
		'vars'     => ['#EXTM3U' => '', '#EXT-X-VERSION' => 3, '#EXT-X-MEDIA-SEQUENCE' => '0', '#EXT-X-TARGETDURATION' => XUI::$rSegmentSettings['seg_time']],
		'segments' => d182bfafec02c67f($Da063ce7d50d331c, $B0b66e80093fc832, $F238092e4e4d82a9)
	];
	goto label71;

	label154:

	if (!file_exists($ad242636af36d5a7)) {
		goto label165;
	}

	$B0b66e80093fc832 = a4d45e1f279652d4($ad242636af36d5a7, -1);

	label165:

	$d8c7bd0a82265276 = NULL;
	$Cd8e1820d4075a5c = md5(file_get_contents($Da063ce7d50d331c));
	goto label35;

	label174:

	$Aac64ae34ff57fc4 = STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8';
	$Da063ce7d50d331c = DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8';
	$ad242636af36d5a7 = DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8_old';
	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET delay_pid = ? WHERE stream_id = ? AND server_id = ?', getmypid(), $ee6d1fc5d801b43f, SERVER_ID);
	XUI::CaC325153A658C37($D9d6a5d0b76a9aaf['id']);
	goto label94;

	label200:

	file_put_contents($Aac64ae34ff57fc4, $ba2d146bb5a55097, LOCK_EX);
	$Cd8e1820d4075a5c = $d8c7bd0a82265276;
	aa260198262d3a85($Ac1adc37e57ef7cd - 2);
	c23a9e3bd783fff0();
	goto label214;

	label214:

	usleep(1000);
	$d8c7bd0a82265276 = md5(file_get_contents($Da063ce7d50d331c));
	goto label35;
	goto label93;

	label226:

	$A340a270d47d5f5a['vars']['#EXT-X-MEDIA-SEQUENCE'] = $Ac1adc37e57ef7cd;

	foreach ($A340a270d47d5f5a['vars'] as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
		$ba2d146bb5a55097 .= (!empty($ce0840c647e1bbc7) ? $Bb672d1983256a93 . ':' . $ce0840c647e1bbc7 . "\n" : $Bb672d1983256a93 . "\n");
	}

	foreach ($A340a270d47d5f5a['segments'] as $a1eb372116d9e2f0) {
		copy(DELAY_PATH . $a1eb372116d9e2f0['file'], STREAMS_PATH . $a1eb372116d9e2f0['file']);
		$ba2d146bb5a55097 .= '#EXTINF:' . $a1eb372116d9e2f0['seconds'] . ',' . "\n" . $a1eb372116d9e2f0['file'] . "\n";
	}

	goto label200;

	label270:
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

goto label28;

label1:

goto label51;

label7:

$ee6d1fc5d801b43f = intval($argv[1]);
$cbf541d72500f722 = 0;
register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
goto label53;

label28:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label39;
}

exit('Please run as XUI!' . "\n");

label39:
if (!(!@$argc || ($argc <= 1))) {
	goto label7;
}

exit(0);
goto label7;

label51:

goto label69;

label53:

c7cc2f0dd6f71ebb($ee6d1fc5d801b43f);
set_time_limit(0);
cli_set_process_title('XUIDelay[' . $ee6d1fc5d801b43f . ']');
ed8dbf4549416fa2();
goto label1;

label69:

?>