<?php


function pingServer($b38e11ffdc6a3abb, $e5bebfb39a19fe80)
{
	goto label14;

	label3:

	return $b9f049445aa9bd5d;
	goto label37;

	label5:

	$b9f049445aa9bd5d = floor(($Ccc1619d6f278c8a - $F56066ad7b074468) * 1000);
	goto label13;

	label12:

	$b9f049445aa9bd5d = -1;

	label13:

	goto label3;

	label14:

	$F56066ad7b074468 = microtime(true);
	$Cc9358ec75bd69ae = fsockopen($b38e11ffdc6a3abb, $e5bebfb39a19fe80, $F82926233fc1ba3e, $b07e471401202c14, 3);
	$Ccc1619d6f278c8a = microtime(true);

	if (!$Cc9358ec75bd69ae) {
		goto label12;
	}

	fclose($Cc9358ec75bd69ae);
	goto label5;

	label37:
}

function AB8369074Df2AaA3()
{
	goto label530;

	label1:

	$Bcf70cba56392975 = XUI::f76008F8dfe1898C(true);
	if (!($Bcf70cba56392975[SERVER_ID]['is_main'] && XUI::$rSettings['redis_handler'])) {
		goto label259;
	}

	exec('pgrep -u xui redis-server', $ed6449291d7f1a64);

	if (!(count($ed6449291d7f1a64) == 0)) {
		goto label259;
	}

	goto label250;

	label27:

	$af1fbab0d80794a8 = NULL;

	foreach ($Bcf70cba56392975 as $C082ca9ed03f473c => $Fdbe2b9ed5184132) {
		if (!$Fdbe2b9ed5184132['is_main']) {
			goto label39;
		}

		$af1fbab0d80794a8 = $C082ca9ed03f473c;
		goto label41;

		label39:
	}

	label41:

	if (!$af1fbab0d80794a8) {
		goto label606;
	}

	$D02bdcbd21053116 = pingserver($Bcf70cba56392975[$af1fbab0d80794a8]['server_ip'], $Bcf70cba56392975[$af1fbab0d80794a8]['http_broadcast_port']);
	goto label606;

	label54:

	$b4b2b0820a243f3b = intval(trim(shell_exec('pgrep -U xui | xargs ps -f -p | grep queue | grep -v grep | grep -v pgrep | wc -l')));

	if (!($b4b2b0820a243f3b == 0)) {
		goto label76;
	}

	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'queue.php > /dev/null 2>/dev/null &');

	label76:

	$Cc9b6078c1293a96 = intval(trim(shell_exec('pgrep -U xui | xargs ps -f -p | grep ondemand | grep -v grep | grep -v pgrep | wc -l')));
	goto label322;

	label87:

	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'scanner.php > /dev/null 2>/dev/null &');

	label95:

	$Bf3377811d8e2b3a = XUI::afF015C358EB0964();
	$e23be30f5a16d035 = json_decode($Bcf70cba56392975[SERVER_ID]['watchdog_data'], true);
	goto label646;

	label107:

	if (!shell_exec('which cpufreq-info')) {
		goto label138;
	}

	$C8674de38ad84225 = array_filter(explode(' ', trim(shell_exec('cpufreq-info -g'))));
	$C3e7ad56e5c3b3d2 = explode(' ', trim(shell_exec('cpufreq-info -p')));

	label138:

	$Fee36b56c9a521cf = array_values(array_unique(array_map('trim', explode("\n", shell_exec('ip -4 addr | grep -oP \'(?<=inet\\s)\\d+(\\.\\d+){3}\'')))));
	goto label363;

	label157:
	if (XUI::$rSettings['enable_cache'] && ($A66eee85d9566710 == 0)) {
		goto label614;
	}
	if (!(!XUI::$rSettings['enable_cache'] && (0 < $A66eee85d9566710))) {
		goto label613;
	}

	echo 'Killing Cache Handler' . "\n";
	exec('pgrep -U xui | xargs ps | grep cache_handler | awk \'{print $1}\'', $A480aa67ca5eba71);

	foreach ($A480aa67ca5eba71 as $C98e11437faf4199) {
		if (!(0 < intval($C98e11437faf4199))) {
			goto label195;
		}

		shell_exec('kill -9 ' . intval($C98e11437faf4199));

		label195:
	}

	goto label613;

	label198:

	exec('pgrep -U xui | xargs ps | grep scanner | awk \'{print $1}\'', $A480aa67ca5eba71);

	foreach ($A480aa67ca5eba71 as $C98e11437faf4199) {
		if (!(0 < intval($C98e11437faf4199))) {
			goto label219;
		}

		shell_exec('kill -9 ' . intval($C98e11437faf4199));

		label219:
	}

	label221:

	goto label95;
	goto label87;

	label223:

	foreach ($Bcf70cba56392975 as $C082ca9ed03f473c => $Fdbe2b9ed5184132) {
		if (!($Fdbe2b9ed5184132['server_online'] != $Fdbe2b9ed5184132['last_status'])) {
			goto label239;
		}

		$b62d6460eb33ea07->query('UPDATE `servers` SET `last_status` = ? WHERE `id` = ?;', $Fdbe2b9ed5184132['server_online'], $C082ca9ed03f473c);

		label239:
	}

	$b62d6460eb33ea07->query('DELETE FROM `signals` WHERE `time` <= ?;', time() - 86400);

	label248:

	goto label249;

	label249:

	goto label758;

	label250:

	echo 'Restarting Redis!' . "\n";
	shell_exec(XUI_HOME . 'bin/redis/redis-server ' . XUI_HOME . '/bin/redis/redis.conf > /dev/null 2>/dev/null &');

	label259:

	$e6b4427b1f3ec758 = intval(trim(shell_exec('pgrep -U xui | xargs ps -f -p | grep signals | grep -v grep | grep -v pgrep | wc -l')));
	goto label270;

	label270:

	if (!($e6b4427b1f3ec758 == 0)) {
		goto label282;
	}

	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'signals.php > /dev/null 2>/dev/null &');

	label282:

	if (!$Bcf70cba56392975[SERVER_ID]['is_main']) {
		goto label694;
	}

	$A66eee85d9566710 = intval(trim(shell_exec('pgrep -U xui | xargs ps -f -p | grep cache_handler | grep -v grep | grep -v pgrep | wc -l')));
	goto label157;

	label299:

	if (XUI::$rSettings['redis_handler']) {
		goto label559;
	}

	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0;', SERVER_ID);
	$A1a73957c6feb09a = intval($b62d6460eb33ea07->get_row()['count']);
	$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY `user_id`;', SERVER_ID);
	goto label543;

	label322:
	if (XUI::$rSettings['on_demand_instant_off'] && ($Cc9b6078c1293a96 == 0)) {
		goto label749;
	}
	if (!(!XUI::$rSettings['on_demand_instant_off'] && (0 < $Cc9b6078c1293a96))) {
		goto label748;
	}

	echo 'Killing On-Demand Instant-Off' . "\n";
	exec('pgrep -U xui | xargs ps | grep ondemand | awk \'{print $1}\'', $A480aa67ca5eba71);

	foreach ($A480aa67ca5eba71 as $C98e11437faf4199) {
		if (!(0 < intval($C98e11437faf4199))) {
			goto label360;
		}

		shell_exec('kill -9 ' . intval($C98e11437faf4199));

		label360:
	}

	goto label748;

	label363:

	$b62d6460eb33ea07->query('INSERT INTO `servers_stats`(`server_id`, `connections`, `total_users`, `users`, `streams`, `cpu`, `cpu_cores`, `cpu_avg`, `total_mem`, `total_mem_free`, `total_mem_used`, `total_mem_used_percent`, `total_disk_space`, `uptime`, `total_running_streams`, `bytes_sent`, `bytes_received`, `bytes_sent_total`, `bytes_received_total`, `cpu_load_average`, `gpu_info`, `iostat_info`, `time`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, UNIX_TIMESTAMP());', SERVER_ID, $A1a73957c6feb09a, $A19b6a6102984e90, $d7bd0890458933bb, $D9846544dffb63c9, $Bf3377811d8e2b3a['cpu'], $Bf3377811d8e2b3a['cpu_cores'], $Bf3377811d8e2b3a['cpu_avg'], $Bf3377811d8e2b3a['total_mem'], $Bf3377811d8e2b3a['total_mem_free'], $Bf3377811d8e2b3a['total_mem_used'], $Bf3377811d8e2b3a['total_mem_used_percent'], $Bf3377811d8e2b3a['total_disk_space'], $Bf3377811d8e2b3a['uptime'], $Bf3377811d8e2b3a['total_running_streams'], $Bf3377811d8e2b3a['bytes_sent'], $Bf3377811d8e2b3a['bytes_received'], $Bf3377811d8e2b3a['bytes_sent_total'], $Bf3377811d8e2b3a['bytes_received_total'], $Bf3377811d8e2b3a['cpu_load_average'], json_encode($Bf3377811d8e2b3a['gpu_info'], JSON_UNESCAPED_UNICODE), json_encode($Bf3377811d8e2b3a['iostat_info'], JSON_UNESCAPED_UNICODE));
	$b62d6460eb33ea07->query('UPDATE `servers` SET `remote_status` = ?, `xui_version` = ?, `xui_revision` = ?, `server_hardware` = ?,`whitelist_ips` = ?, `governors` = ?, `sysctl` = ?, `video_devices` = ?, `audio_devices` = ?, `gpu_info` = ?, `interfaces` = ?, `time_offset` = ' . intval(time()) . ' - UNIX_TIMESTAMP(), `ping` = ? WHERE `id` = ?', $e23d54ff65e0be87, XUI_VERSION, XUI_REVISION, json_encode($cb0ea013a633ba77, JSON_UNESCAPED_UNICODE), json_encode($Fee36b56c9a521cf, JSON_UNESCAPED_UNICODE), json_encode($C8674de38ad84225, JSON_UNESCAPED_UNICODE), $fecd6def1873b5e6, json_encode($Bf3377811d8e2b3a['video_devices'], JSON_UNESCAPED_UNICODE), json_encode($Bf3377811d8e2b3a['audio_devices'], JSON_UNESCAPED_UNICODE), json_encode($Bf3377811d8e2b3a['gpu_info'], JSON_UNESCAPED_UNICODE), json_encode($Bf3377811d8e2b3a['interfaces'], JSON_UNESCAPED_UNICODE), $D02bdcbd21053116, SERVER_ID);

	if (!$Bcf70cba56392975[SERVER_ID]['is_main']) {
		goto label248;
	}

	if (!(XUI::$rConfig['license'] != XUI::$rSettings['license'])) {
		goto label223;
	}

	$b62d6460eb33ea07->query('UPDATE `settings` SET `license` = ?;', XUI::$rConfig['license']);
	goto label223;

	label502:

	$f49a743ec14a23ee = intval(trim(shell_exec('pgrep -U xui | xargs ps -f -p | grep scanner | grep -v grep | grep -v pgrep | wc -l')));
	if (XUI::$rSettings['on_demand_checker'] && ($f49a743ec14a23ee == 0)) {
		goto label87;
	}
	if (!(!XUI::$rSettings['on_demand_checker'] && (0 < $f49a743ec14a23ee))) {
		goto label221;
	}

	echo 'Killing On-Demand Scanner' . "\n";
	goto label198;

	label530:

	global $b62d6460eb33ea07;
	XUI::$rSettings = XUI::aC49b56dBe10e52c(true);

	if (XUI::aB992b2373f7becA()) {
		goto label1;
	}

	echo 'XUI not running...' . "\n";
	goto label249;
	goto label1;

	label543:

	$d7bd0890458933bb = intval($b62d6460eb33ea07->num_rows());
	$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;');
	$A19b6a6102984e90 = intval($b62d6460eb33ea07->num_rows());
	goto label586;

	label559:

	goto label560;

	label560:

	$A1a73957c6feb09a = $Bcf70cba56392975[SERVER_ID]['connections'];
	$d7bd0890458933bb = $Bcf70cba56392975[SERVER_ID]['users'];
	$A19b6a6102984e90 = 0;

	foreach (array_keys($Bcf70cba56392975) as $C082ca9ed03f473c) {
		if (!$Bcf70cba56392975[$C082ca9ed03f473c]['server_online']) {
			goto label583;
		}

		$A19b6a6102984e90 += $Bcf70cba56392975[$C082ca9ed03f473c]['users'];

		label583:
	}

	goto label586;

	label586:

	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `pid` > 0 AND `type` = 1;', SERVER_ID);
	$D9846544dffb63c9 = intval($b62d6460eb33ea07->get_row()['count']);
	$D02bdcbd21053116 = 0;

	if ($Bcf70cba56392975[SERVER_ID]['is_main']) {
		goto label606;
	}

	goto label27;

	label606:

	$fecd6def1873b5e6 = file_get_contents('/etc/sysctl.conf');
	$C8674de38ad84225 = [];
	$C3e7ad56e5c3b3d2 = NULL;
	goto label107;

	label613:

	goto label694;

	label614:

	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'cache_handler.php > /dev/null 2>/dev/null &');
	goto label694;

	label623:

	$e23be30f5a16d035 = intval(trim(shell_exec('pgrep -U xui | xargs ps -f -p | grep watchdog | grep -v grep | grep -v pgrep | wc -l')));

	if (!($e23be30f5a16d035 == 0)) {
		goto label645;
	}

	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'watchdog.php > /dev/null 2>/dev/null &');

	label645:

	goto label54;

	label646:

	$d817487de81ff041 = $e23be30f5a16d035['cpu_average_array'] ?: [];

	if (!(0 < count($d817487de81ff041))) {
		goto label670;
	}

	$Bf3377811d8e2b3a['cpu'] = round(array_sum($d817487de81ff041) / count($d817487de81ff041), 2);

	label670:

	$cb0ea013a633ba77 = ['total_ram' => $Bf3377811d8e2b3a['total_mem'], 'total_used' => $Bf3377811d8e2b3a['total_mem_used'], 'cores' => $Bf3377811d8e2b3a['cpu_cores'], 'threads' => $Bf3377811d8e2b3a['cpu_cores'], 'kernel' => $Bf3377811d8e2b3a['kernel'], 'total_running_streams' => $Bf3377811d8e2b3a['total_running_streams'], 'cpu_name' => $Bf3377811d8e2b3a['cpu_name'], 'cpu_usage' => $Bf3377811d8e2b3a['cpu'], 'network_speed' => $Bf3377811d8e2b3a['network_speed'], 'bytes_sent' => $Bf3377811d8e2b3a['bytes_sent'], 'bytes_received' => $Bf3377811d8e2b3a['bytes_received']];
	goto label714;

	label694:

	$Cca419e136ea7788 = intval(trim(shell_exec('pgrep -U xui | xargs ps -f -p | grep network | grep -v grep | grep -v pgrep | wc -l')));

	if (!($Cca419e136ea7788 == 0)) {
		goto label623;
	}

	shell_exec(BIN_PATH . 'network > /dev/null 2>/dev/null &');
	goto label623;

	label714:
	if (fsockopen($Bcf70cba56392975[SERVER_ID]['server_ip'], $Bcf70cba56392975[SERVER_ID]['http_broadcast_port'], $F82926233fc1ba3e, $b07e471401202c14, 3) || fsockopen($Bcf70cba56392975[SERVER_ID]['server_ip'], $Bcf70cba56392975[SERVER_ID]['https_broadcast_port'], $F82926233fc1ba3e, $b07e471401202c14, 3)) {
		goto label746;
	}

	$e23d54ff65e0be87 = false;
	goto label299;

	label746:

	$e23d54ff65e0be87 = true;
	goto label299;

	label748:

	goto label502;

	label749:

	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'ondemand.php > /dev/null 2>/dev/null &');
	goto label502;

	label758:
}

function shutdown()
{
	global $b62d6460eb33ea07;
	global $F2db9d2971f5c8c4;

	if (!is_object($b62d6460eb33ea07)) {
		goto label10;
	}

	$b62d6460eb33ea07->close_mysql();

	label10:

	@unlink($F2db9d2971f5c8c4);
}

goto label9;

label1:

XUI::a3CF732C257Bd804($F2db9d2971f5c8c4);
ab8369074df2aaa3();
goto label54;

label9:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label20;
}

exit('Please run as XUI!' . "\n");

label20:

if (@$argc) {
	goto label27;
}

exit(0);
goto label27;

label27:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Servers]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336b0dAd3eaf634() . __FILE__);
goto label1;

label54:

?>