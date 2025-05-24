<?php


function ed8dBF4549416fA2()
{
	goto label197;

	label1:

	if (!(gmdate('Y-m-d:H-i') != $ed730c026944fd42)) {
		goto label84;
	}

	fclose($Aeedba454ae18dad);

	if (file_exists(ARCHIVE_PATH . $ee6d1fc5d801b43f)) {
		goto label23;
	}

	mkdir(ARCHIVE_PATH . $ee6d1fc5d801b43f);

	label23:

	goto label50;

	label24:

	if (!XUI::e764F10e99c26365($Fb9da1713bff19ce['tv_archive_pid'], PHP_BIN)) {
		goto label49;
	}
	if (!(is_numeric($Fb9da1713bff19ce['tv_archive_pid']) && (0 < $Fb9da1713bff19ce['tv_archive_pid']))) {
		goto label49;
	}

	posix_kill($Fb9da1713bff19ce['tv_archive_pid'], 9);

	label49:

	goto label85;

	label50:

	$A486d2019332744a = XUI::findKeyframe(ARCHIVE_PATH . $ee6d1fc5d801b43f . '/' . $ed730c026944fd42 . '.ts') ?: 0;
	file_put_contents(ARCHIVE_PATH . $ee6d1fc5d801b43f . '/' . $ed730c026944fd42 . '.ts.offset', $A486d2019332744a);
	$ed730c026944fd42 = gmdate('Y-m-d:H-i');
	$Aeedba454ae18dad = fopen(ARCHIVE_PATH . $ee6d1fc5d801b43f . '/' . $ed730c026944fd42 . '.ts', 'a');

	label84:

	goto label181;

	label85:

	if (!empty($Fb9da1713bff19ce['pid'])) {
		goto label95;
	}

	posix_kill(getmypid(), 9);

	label95:

	$b62d6460eb33ea07->query('UPDATE `streams` SET `tv_archive_pid` = ? WHERE `id` = ?', getmypid(), $ee6d1fc5d801b43f);
	XUI::Cac325153A658C37($ee6d1fc5d801b43f);
	goto label113;

	label106:

	sleep(1);
	goto label115;

	label110:

	goto label111;

	label111:

	exit();

	label112:

	goto label269;

	label113:

	$b62d6460eb33ea07->close_mysql();

	label115:
	if (!(XUI::b4AB2a8EB0aA68eE($C98e11437faf4199, $ee6d1fc5d801b43f) && file_exists($Aac64ae34ff57fc4))) {
		goto label110;
	}

	$f8bd5a091fcdba80 = time();
	aA260198262D3a85($ee6d1fc5d801b43f, $Fb9da1713bff19ce['tv_archive_duration']);
	goto label232;

	label136:

	$Aac64ae34ff57fc4 = STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8';

	if (!(0 < $C98e11437faf4199)) {
		goto label112;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t1.id = t2.stream_id AND t2.server_id = t1.tv_archive_server_id WHERE t1.`id` = ? AND t1.`tv_archive_server_id` = ? AND t1.`tv_archive_duration` > 0', $ee6d1fc5d801b43f, SERVER_ID);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label110;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	goto label24;

	label160:

	if (feof($B3299684b062e356)) {
		goto label193;
	}

	if (!(3600 <= time() - $f8bd5a091fcdba80)) {
		goto label180;
	}

	aA260198262d3A85($ee6d1fc5d801b43f, $Fb9da1713bff19ce['tv_archive_duration']);
	$f8bd5a091fcdba80 = time();

	label180:

	goto label1;

	label181:

	fwrite($Aeedba454ae18dad, stream_get_line($B3299684b062e356, 4096));
	fflush($Aeedba454ae18dad);
	goto label268;

	label193:

	fclose($B3299684b062e356);
	goto label106;

	label197:

	global $b62d6460eb33ea07;
	global $ee6d1fc5d801b43f;

	if (file_exists(ARCHIVE_PATH . $ee6d1fc5d801b43f)) {
		goto label211;
	}

	mkdir(ARCHIVE_PATH . $ee6d1fc5d801b43f);

	label211:

	$C98e11437faf4199 = (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid') ? intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) : 0);
	goto label136;

	label232:

	$ed730c026944fd42 = gmdate('Y-m-d:H-i');
	$B3299684b062e356 = @fopen('http://127.0.0.1:' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/admin/live?password=' . XUI::$rSettings['live_streaming_pass'] . '&stream=' . $ee6d1fc5d801b43f . '&extension=ts', 'r');

	if (!$B3299684b062e356) {
		goto label106;
	}

	$Aeedba454ae18dad = fopen(ARCHIVE_PATH . $ee6d1fc5d801b43f . '/' . $ed730c026944fd42 . '.ts', 'a');

	label268:

	goto label160;

	label269:
}

function aA260198262D3A85($ee6d1fc5d801b43f, $f7037fc395d8fcad)
{
	goto label3;

	label3:

	$b9128caffaf4f48e = intval(count(scandir(ARCHIVE_PATH . $ee6d1fc5d801b43f . '/')) - 2);

	if (!(($f7037fc395d8fcad * 24 * 60) < $b9128caffaf4f48e)) {
		goto label51;
	}

	$d45bd80ce3681188 = $b9128caffaf4f48e - ($f7037fc395d8fcad * 24 * 60);
	$dd6d6da4a65a40fa = array_values(array_filter(explode("\n", shell_exec('ls -tr ' . ARCHIVE_PATH . intval($ee6d1fc5d801b43f) . ' | sed -e \'s/\\s\\+/\\n/g\''))));
	$df6991d59f367c7e = 0;
	goto label52;

	label50:

	goto label52;

	label51:

	goto label67;

	label52:

	if (!($df6991d59f367c7e < $d45bd80ce3681188)) {
		goto label51;
	}

	unlink(ARCHIVE_PATH . $ee6d1fc5d801b43f . '/' . $dd6d6da4a65a40fa[$df6991d59f367c7e]);
	$df6991d59f367c7e++;
	goto label50;

	label67:
}

function c7cC2f0DD6f71Ebb($ee6d1fc5d801b43f)
{
	goto label2;

	label2:

	clearstatcache(true);

	if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.archive')) {
		goto label24;
	}

	$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.archive'));

	label24:

	if (empty($C98e11437faf4199)) {
		goto label29;
	}

	goto label48;

	label28:

	goto label37;

	label29:

	shell_exec('kill -9 `ps -ef | grep \'TVArchive\\[' . intval($ee6d1fc5d801b43f) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

	label37:

	goto label38;

	label38:

	file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.archive', getmypid());
	goto label85;

	label48:

	if (!file_exists('/proc/' . $C98e11437faf4199)) {
		goto label28;
	}

	$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
	if (!(($C6671ac66a4f1c57 == 'TVArchive[' . $ee6d1fc5d801b43f . ']') && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label84;
	}

	posix_kill($C98e11437faf4199, 9);

	label84:

	goto label28;

	label85:
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

goto label38;

label1:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
$ee6d1fc5d801b43f = intval($argv[1]);
c7cC2f0dd6f71EbB($ee6d1fc5d801b43f);
goto label24;

label24:

set_time_limit(0);
cli_set_process_title('TVArchive[' . $ee6d1fc5d801b43f . ']');
ed8dbf4549416fa2();
goto label61;

label38:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label49;
}

exit('Please run as XUI!' . "\n");

label49:
if (!(!@$argc || ($argc <= 1))) {
	goto label1;
}

exit(0);
goto label1;

label61:

goto label63;

label63:

?>