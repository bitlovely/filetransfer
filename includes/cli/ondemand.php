<?php


goto label341;

label1:

usleep(1000000);
goto label438;

label5:

goto label64;

label6:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['stream_id'];
	$Dd3623672a432071[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['attached'];
}

if (!(0 < count($dec36723d7be7c49))) {
	goto label107;
}

$A1a73957c6feb09a = XUI::getStreamConnections($dec36723d7be7c49, false, false);

foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
	$D8e7681dfae2905b[] = ['stream_id' => $ee6d1fc5d801b43f, 'online_clients' => count($A1a73957c6feb09a[$ee6d1fc5d801b43f][SERVER_ID]) ?: 0, 'attached' => $Dd3623672a432071[$ee6d1fc5d801b43f] ?: 0];
}

goto label107;

label53:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label62;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

label62:

goto label107;
goto label370;

label64:

if (!is_object($b62d6460eb33ea07)) {
	goto label72;
}

$b62d6460eb33ea07->close_mysql();

label72:

goto label451;

label73:
if (!(XUI::$rSettings['redis_handler'] && (!XUI::$redis || !XUI::$redis->ping()))) {
	goto label89;
}

goto label5;

label89:
if (!(!$f8bd5a091fcdba80 || ($Df19f1dc3a6ffd8b <= time() - $f8bd5a091fcdba80))) {
	goto label420;
}

if (!(md5_file(__FILE__) != $Cd8e1820d4075a5c)) {
	goto label361;
}

goto label359;

label107:

if (!(0 < count($D8e7681dfae2905b))) {
	goto label1;
}

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label302;

	label118:

	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', $af1fbab0d80794a8, time(), json_encode(['type' => 'update_stream', 'id' => $ee6d1fc5d801b43f]));
	unlink(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f));
	XUI::cac325153A658C37($ee6d1fc5d801b43f);

	label143:

	goto label328;

	label145:

	$Cfd6ac7145ad7b0f = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor'));
	$a5e5695ab793486d = $b4b2b0820a243f3b = 0;

	if (!file_exists(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f))) {
		goto label233;
	}

	foreach (igbinary_unserialize(file_get_contents(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f))) ?: [] as $C98e11437faf4199) {
		if (!XUI::e764f10E99C26365($C98e11437faf4199, 'php-fpm')) {
			goto label197;
		}

		$b4b2b0820a243f3b++;

		label197:
	}

	goto label233;

	label201:
	if (!(is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label215;
	}

	posix_kill($C98e11437faf4199, 9);

	label215:

	shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*');
	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = NULL,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`audio_codec` = NULL,`video_codec` = NULL,`resolution` = NULL,`compatible` = 0,`stream_status` = 0,`monitor_pid` = NULL WHERE `stream_id` = ? AND `server_id` = ?', $ee6d1fc5d801b43f, SERVER_ID);
	goto label118;

	label233:
	if (!(file_exists(SIGNALS_TMP_PATH . 'admin_' . intval($ee6d1fc5d801b43f)) && ((time() - filemtime(SIGNALS_TMP_PATH . 'admin_' . intval($ee6d1fc5d801b43f))) <= 30))) {
		goto label262;
	}

	$a5e5695ab793486d = 1;

	label262:

	echo 'Queue: ' . ($b4b2b0820a243f3b + $a5e5695ab793486d) . "\n";
	goto label268;

	label268:
	if (!(($b4b2b0820a243f3b == 0) && ($a5e5695ab793486d == 0) && XUI::d93aF048a0E404f2($Cfd6ac7145ad7b0f, $ee6d1fc5d801b43f))) {
		goto label143;
	}

	echo 'Killing ID: ' . $ee6d1fc5d801b43f . "\n";
	if (!(is_numeric($Cfd6ac7145ad7b0f) && (0 < $Cfd6ac7145ad7b0f))) {
		goto label300;
	}

	posix_kill($Cfd6ac7145ad7b0f, 9);

	label300:

	goto label201;

	label302:
	if (!((0 < $Fb9da1713bff19ce['online_clients']) || (0 < $Fb9da1713bff19ce['attached']))) {
		goto label314;
	}

	goto label143;

	label314:

	$ee6d1fc5d801b43f = $Fb9da1713bff19ce['stream_id'];
	$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'));
	goto label145;

	label328:
}

goto label1;

label331:

echo 'On-Demand - Instant Off setting is disabled.' . "\n";
exit();

label333:

if (!XUI::$rSettings['redis_handler']) {
	goto label410;
}

XUI::d6aEb3175a43f301();
goto label410;

label341:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label352;
}

exit('Please run as XUI!' . "\n");

label352:

if (@$argc) {
	goto label384;
}

exit(0);
goto label384;

label359:

echo 'File changed! Break.' . "\n";
goto label5;

label361:

XUI::$rSettings = XUI::ac49b56DBE10e52c(true);
$f8bd5a091fcdba80 = time();
goto label420;

label370:

$dec36723d7be7c49 = $Dd3623672a432071 = $D8e7681dfae2905b = [];

if ($b62d6460eb33ea07->query('SELECT t1.stream_id, servers_attached.attached FROM `streams_servers` t1 LEFT JOIN (SELECT `stream_id`, COUNT(*) AS `attached` FROM `streams_servers` WHERE `parent_id` = ? AND `pid` IS NOT NULL AND `pid` > 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0) AS `servers_attached` ON `servers_attached`.`stream_id` = t1.`stream_id` WHERE t1.pid IS NOT NULL AND t1.pid > 0 AND t1.server_id = ? AND t1.`on_demand` = 1;', SERVER_ID, SERVER_ID)) {
	goto label383;
}

goto label5;

label383:

goto label6;

label384:

set_time_limit(0);
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
shell_exec('kill -9 $(ps aux | grep ondemand | grep -v grep | grep -v ' . getmypid() . ' | awk \'{print $2}\')');

if (XUI::$rSettings['on_demand_instant_off']) {
	goto label333;
}

goto label331;

label410:

$af1fbab0d80794a8 = XUI::C3520d240f17dCB1();
$f8bd5a091fcdba80 = NULL;
$Df19f1dc3a6ffd8b = 60;
$Cd8e1820d4075a5c = md5_file(__FILE__);
goto label438;

label420:

$D8e7681dfae2905b = [];

if (XUI::$rSettings['redis_handler']) {
	goto label370;
}

if ($b62d6460eb33ea07->query('SELECT t1.stream_id, clients.online_clients, servers_attached.attached FROM `streams_servers` t1 LEFT JOIN (SELECT stream_id, COUNT(*) as online_clients FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY stream_id) AS clients ON clients.stream_id = t1.stream_id LEFT JOIN (SELECT `stream_id`, COUNT(*) AS `attached` FROM `streams_servers` WHERE `parent_id` = ? AND `pid` IS NOT NULL AND `pid` > 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0) AS `servers_attached` ON `servers_attached`.`stream_id` = t1.`stream_id` WHERE t1.pid IS NOT NULL AND t1.pid > 0 AND t1.server_id = ? AND t1.`on_demand` = 1;', SERVER_ID, SERVER_ID, SERVER_ID)) {
	goto label53;
}

goto label5;
goto label53;

label438:

if (false) {
	goto label5;
}
if (!(!$b62d6460eb33ea07 || !$b62d6460eb33ea07->ping())) {
	goto label450;
}

goto label5;

label450:

goto label73;

label451:

shell_exec('(sleep 1; ' . PHP_BIN . ' ' . __FILE__ . ' ) > /dev/null 2>/dev/null &');

?>