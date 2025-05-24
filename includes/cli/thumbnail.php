<?php


function Ed8dBf4549416Fa2()
{
	goto label1;

	label1:

	global $b62d6460eb33ea07;
	global $ee6d1fc5d801b43f;
	$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t1.id = t2.stream_id AND t2.server_id = t1.vframes_server_id WHERE t1.`id` = ? AND t1.`vframes_server_id` = ?', $ee6d1fc5d801b43f, SERVER_ID);

	if (0 < $b62d6460eb33ea07->num_rows()) {
		goto label46;
	}

	exit();
	goto label59;
	goto label46;

	label17:

	$b62d6460eb33ea07->close_mysql();

	label19:

	if (!XUI::B4AB2A8Eb0aA68Ee($Fb9da1713bff19ce['pid'], $ee6d1fc5d801b43f)) {
		goto label45;
	}

	shell_exec(XUI::$rFFMPEG_CPU . ' -y -i "' . STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8" -qscale:v 4 -frames:v 1 "' . STREAMS_PATH . $ee6d1fc5d801b43f . '_.jpg" >/dev/null 2>/dev/null &');
	sleep(5);
	goto label44;

	label44:

	goto label19;

	label45:

	goto label60;

	label46:

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$b62d6460eb33ea07->query('UPDATE `streams` SET `vframes_pid` = ? WHERE `id` = ?', getmypid(), $ee6d1fc5d801b43f);
	XUI::CAc325153a658C37($ee6d1fc5d801b43f);

	label59:

	goto label17;

	label60:
}

function c7cc2f0dd6F71ebB($ee6d1fc5d801b43f)
{
	goto label39;

	label2:

	if (!file_exists('/proc/' . $C98e11437faf4199)) {
		goto label75;
	}

	$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
	if (!(($C6671ac66a4f1c57 == 'Thumbnail[' . $ee6d1fc5d801b43f . ']') && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label38;
	}

	posix_kill($C98e11437faf4199, 9);

	label38:

	goto label75;

	label39:

	clearstatcache(true);

	if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.thumb')) {
		goto label61;
	}

	$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.thumb'));

	label61:

	if (empty($C98e11437faf4199)) {
		goto label76;
	}

	goto label2;

	label65:

	file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.thumb', getmypid());
	goto label83;

	label75:

	goto label82;

	label76:

	shell_exec('kill -9 `ps -ef | grep \'Thumbnail\\[' . $ee6d1fc5d801b43f . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

	label82:

	goto label65;

	label83:
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

goto label1;

label1:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label12;
}

exit('Please run as XUI!' . "\n");

label12:
if (!(!@$argc || ($argc != 2))) {
	goto label24;
}

exit(0);
goto label24;

label24:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
$ee6d1fc5d801b43f = intval($argv[1]);
C7cC2F0dD6F71EBB($ee6d1fc5d801b43f);
goto label47;

label47:

set_time_limit(0);
cli_set_process_title('Thumbnail[' . $ee6d1fc5d801b43f . ']');
ed8dbf4549416fa2();
goto label61;

label61:

?>