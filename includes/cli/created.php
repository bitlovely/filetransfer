<?php


function c7Cc2f0dd6f71EBb($ee6d1fc5d801b43f)
{
	goto label51;

	label2:

	goto label11;

	label3:

	shell_exec('kill -9 `ps -ef | grep \'XUICreate\\[' . intval($ee6d1fc5d801b43f) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

	label11:

	goto label41;

	label12:

	if (!file_exists('/proc/' . $C98e11437faf4199)) {
		goto label2;
	}

	$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));

	if (!($C6671ac66a4f1c57 == 'XUICreate[' . $ee6d1fc5d801b43f . ']')) {
		goto label40;
	}

	posix_kill($C98e11437faf4199, 9);

	label40:

	goto label2;

	label41:

	file_put_contents(CREATED_PATH . $ee6d1fc5d801b43f . '_.create', getmypid());
	goto label77;

	label51:

	clearstatcache(true);

	if (!file_exists(CREATED_PATH . $ee6d1fc5d801b43f . '_.create')) {
		goto label73;
	}

	$C98e11437faf4199 = intval(file_get_contents(CREATED_PATH . $ee6d1fc5d801b43f . '_.create'));

	label73:

	if (empty($C98e11437faf4199)) {
		goto label3;
	}

	goto label12;

	label77:
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

goto label305;

label1:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
$ee6d1fc5d801b43f = intval($argv[1]);
c7CC2f0DD6f71ebb($ee6d1fc5d801b43f);
goto label399;

label24:
if (!(!empty($fd7f71c89c071af7) || ($D9d6a5d0b76a9aaf['stream_source'] !== $dbaf3cd4fbd0f046['cchannel_rsources']))) {
	goto label290;
}

foreach ($fd7f71c89c071af7 as $fd51b5505224fc7c) {
	goto label51;

	label38:

	echo 'Processing source: ' . $fd51b5505224fc7c . '...' . "\n";
	$cd5783ff4c8e28c3 = XUI::e462180Cf8B466f4($ee6d1fc5d801b43f, $fd51b5505224fc7c);
	$b62d6460eb33ea07->close_mysql();
	goto label148;

	label51:

	$Cd8e1820d4075a5c = md5($fd51b5505224fc7c);

	if (!file_exists(CREATED_PATH . intval($ee6d1fc5d801b43f) . ('_' . $Cd8e1820d4075a5c . '.pid'))) {
		goto label38;
	}

	$Db7106b8a7218748 = intval(file_get_contents(CREATED_PATH . intval($ee6d1fc5d801b43f) . ('_' . $Cd8e1820d4075a5c . '.pid')));

	if (!XUI::a633007d15904f34(SERVER_ID, $Db7106b8a7218748, XUI::$rFFMPEG_CPU)) {
		goto label38;
	}

	exec('kill -9 ' . $Db7106b8a7218748);
	goto label38;

	label105:

	goto label166;

	label107:

	$dbaf3cd4fbd0f046['cchannel_rsources'][] = $fd51b5505224fc7c;
	$b62d6460eb33ea07->db_connect();
	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `cchannel_rsources` = ? WHERE `server_stream_id` = ?', json_encode($dbaf3cd4fbd0f046['cchannel_rsources']), $dbaf3cd4fbd0f046['server_stream_id']);
	unlink(CREATED_PATH . intval($ee6d1fc5d801b43f) . ('_' . $Cd8e1820d4075a5c . '.pid'));
	unlink(CREATED_PATH . intval($ee6d1fc5d801b43f) . ('_' . $Cd8e1820d4075a5c . '.errors'));
	goto label105;

	label148:

	if (!XUI::A633007D15904F34(SERVER_ID, $cd5783ff4c8e28c3, XUI::$rFFMPEG_CPU)) {
		goto label164;
	}

	sleep(1);
	goto label148;

	label164:

	goto label107;

	label166:
}

$b1afcdaefbdae5dc = '';

foreach ($D9d6a5d0b76a9aaf['stream_source'] as $fd51b5505224fc7c) {
	goto label204;

	label174:

	if (!file_exists(CREATED_PATH . $ee6d1fc5d801b43f . '_' . md5($fd51b5505224fc7c) . '.' . $Daecfbd6410b9c42)) {
		goto label202;
	}

	$b1afcdaefbdae5dc .= 'file \'' . CREATED_PATH . $ee6d1fc5d801b43f . '_' . md5($fd51b5505224fc7c) . '.' . $Daecfbd6410b9c42 . '\'' . "\n";

	label202:

	goto label260;

	label204:

	if (substr($fd51b5505224fc7c, 0, 2) == 's:') {
		goto label217;
	}

	$C082ca9ed03f473c = SERVER_ID;
	goto label246;

	label217:

	$E3665d09b9cea208 = explode(':', $fd51b5505224fc7c, 3);
	goto label241;

	label225:

	$Daecfbd6410b9c42 = pathinfo($fd51b5505224fc7c)['extension'];

	if (!(strlen($Daecfbd6410b9c42) == 0)) {
		goto label239;
	}

	$Daecfbd6410b9c42 = 'mp4';

	label239:

	goto label174;

	label241:

	$C082ca9ed03f473c = intval($E3665d09b9cea208[1]);

	label246:
	if (($C082ca9ed03f473c == SERVER_ID) && ($D9d6a5d0b76a9aaf['movie_symlink'] == 1)) {
		goto label225;
	}

	$Daecfbd6410b9c42 = 'ts';
	goto label174;
	goto label225;

	label260:
}

goto label420;

label263:

exit();

label264:

$D9d6a5d0b76a9aaf = $b62d6460eb33ea07->get_row();
$b62d6460eb33ea07->query('SELECT * FROM `streams_servers` WHERE stream_id  = ? AND `server_id` = ? AND `parent_id` IS NULL', $ee6d1fc5d801b43f, SERVER_ID);

if (!($b62d6460eb33ea07->num_rows() == 0)) {
	goto label294;
}

goto label292;

label280:

echo 'Completed!' . "\n";
unlink(CREATED_PATH . $ee6d1fc5d801b43f . '_.create', getmypid());

label290:

goto label463;

label292:

echo 'Channel doesn\'t exist on this server.' . "\n";
exit();

label294:

$dbaf3cd4fbd0f046 = $b62d6460eb33ea07->get_row();
$D9d6a5d0b76a9aaf['stream_source'] = json_decode($D9d6a5d0b76a9aaf['stream_source'], true);
goto label443;

label305:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label316;
}

exit('Please run as XUI!' . "\n");

label316:
if (!(!@$argc || ($argc <= 1))) {
	goto label1;
}

exit(0);
goto label1;

label328:

$Cf6971a7f2ab0752 = explode("\n", file_get_contents(CREATED_PATH . $ee6d1fc5d801b43f . '_.list'));
$B9869413eae86beb = [];

foreach ($Cf6971a7f2ab0752 as $B4a603c2a57d3acf) {
	$F48d5724f3b4ec96 = explode('\'', explode('\'', $B4a603c2a57d3acf)[1])[0];

	if (!file_exists($F48d5724f3b4ec96)) {
		goto label384;
	}

	$d694be51989867e0 = XUI::e57006536CD5655D($F48d5724f3b4ec96);
	$B9869413eae86beb[] = ['position' => $be083ab4cd4f4e7e, 'filename' => basename($F48d5724f3b4ec96), 'path' => $F48d5724f3b4ec96, 'stream_info' => $d694be51989867e0, 'seconds' => $d694be51989867e0['of_duration'], 'start' => $d03052828cab569a, 'finish' => $d03052828cab569a + $d694be51989867e0['of_duration']];
	$d03052828cab569a += $d694be51989867e0['of_duration'];
	$be083ab4cd4f4e7e++;

	label384:
}

file_put_contents(CREATED_PATH . $ee6d1fc5d801b43f . '_.info', json_encode($B9869413eae86beb, JSON_UNESCAPED_UNICODE));
goto label280;

label399:

set_time_limit(0);
cli_set_process_title('XUICreate[' . $ee6d1fc5d801b43f . ']');
$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 LEFT JOIN `profiles` t3 ON t1.transcode_profile_id = t3.profile_id WHERE t1.`id` = ?', $ee6d1fc5d801b43f);

if (!($b62d6460eb33ea07->num_rows() == 0)) {
	goto label264;
}

echo 'Channel doesn\'t exist.' . "\n";
goto label263;

label420:

$b1afcdaefbdae5dc = base64_encode($b1afcdaefbdae5dc);
shell_exec('echo ' . $b1afcdaefbdae5dc . ' | base64 --decode > "' . CREATED_PATH . intval($ee6d1fc5d801b43f) . '_.list"');
XUI::caC325153a658C37($ee6d1fc5d801b43f);
$be083ab4cd4f4e7e = $d03052828cab569a = 0;
goto label328;

label443:

$dbaf3cd4fbd0f046['cchannel_rsources'] = json_decode($dbaf3cd4fbd0f046['cchannel_rsources'], true);

if ($dbaf3cd4fbd0f046['cchannel_rsources']) {
	goto label455;
}

$dbaf3cd4fbd0f046['cchannel_rsources'] = [];

label455:

$fd7f71c89c071af7 = array_diff($D9d6a5d0b76a9aaf['stream_source'], $dbaf3cd4fbd0f046['cchannel_rsources']);
goto label24;

label463:

?>