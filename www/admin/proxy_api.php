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

goto label88;

label1:

F82199EfF9017bC9();
goto label280;

label4:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
goto label234;

label11:

$b62d6460eb33ea07->query('INSERT INTO `servers_stats`(`server_id`, `cpu`, `cpu_cores`, `cpu_avg`, `total_mem`, `total_mem_free`, `total_mem_used`, `total_mem_used_percent`, `total_disk_space`, `uptime`, `total_running_streams`, `bytes_sent`, `bytes_received`, `bytes_sent_total`, `bytes_received_total`, `cpu_load_average`, `connections`, `total_users`, `users`, `time`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);', $C082ca9ed03f473c, $Bf3377811d8e2b3a['cpu'], $Bf3377811d8e2b3a['cpu_cores'], $Bf3377811d8e2b3a['cpu_avg'], $Bf3377811d8e2b3a['total_mem'], $Bf3377811d8e2b3a['total_mem_free'], $Bf3377811d8e2b3a['total_mem_used'], $Bf3377811d8e2b3a['total_mem_used_percent'], $Bf3377811d8e2b3a['total_disk_space'], $Bf3377811d8e2b3a['uptime'], $Bf3377811d8e2b3a['total_running_streams'], $Bf3377811d8e2b3a['bytes_sent'], $Bf3377811d8e2b3a['bytes_received'], $Bf3377811d8e2b3a['bytes_sent_total'], $Bf3377811d8e2b3a['bytes_received_total'], $Bf3377811d8e2b3a['cpu_load_average'], $A1a73957c6feb09a, $A19b6a6102984e90, $d7bd0890458933bb, time());
$b62d6460eb33ea07->query('UPDATE `servers` SET `connections` = ?, `users` = ?, `ping` = ?,`server_hardware` = ?,`whitelist_ips` = ?, `interfaces` = ?, `watchdog_data` = ?, `last_check_ago` = ? WHERE `id` = ?', $A1a73957c6feb09a, $d7bd0890458933bb, $D02bdcbd21053116, json_encode($cb0ea013a633ba77), json_encode($Fee36b56c9a521cf), json_encode($Bf3377811d8e2b3a['interfaces']), json_encode($Bf3377811d8e2b3a, JSON_PARTIAL_OUTPUT_ON_ERROR), time(), $C082ca9ed03f473c);

if ($b62d6460eb33ea07->query('SELECT `signal_id`, `custom_data` FROM `signals` WHERE `server_id` = ? AND `custom_data` <> \'\' ORDER BY signal_id ASC;', $C082ca9ed03f473c)) {
	goto label87;
}

exit();

label87:

goto label137;

label88:

set_time_limit(0);
require '../init.php';
$e6b4427b1f3ec758 = [];

if (XUI::eFD47d0Ab821C8af($_SERVER['REMOTE_ADDR'])) {
	goto label4;
}

goto label1;

label102:

$ec79900edc8c252a = time() - $Fb9da1713bff19ce['time'];
$Bf3377811d8e2b3a['bytes_sent'] = ($Bf3377811d8e2b3a['bytes_sent_total'] - $Fb9da1713bff19ce['bytes_sent_total']) / $ec79900edc8c252a;
$Bf3377811d8e2b3a['bytes_received'] = ($Bf3377811d8e2b3a['bytes_received_total'] - $Fb9da1713bff19ce['bytes_received_total']) / $ec79900edc8c252a;

label119:

$Fee36b56c9a521cf = $_POST['addresses'];
goto label194;

label123:

$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;');
$A19b6a6102984e90 = intval($b62d6460eb33ea07->num_rows());
goto label277;

label133:

$A1a73957c6feb09a = $Bcf70cba56392975[$C082ca9ed03f473c]['connections'];
goto label257;

label137:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label162;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$ba2d146bb5a55097 = json_decode($Fb9da1713bff19ce['custom_data'], true);
	$b62d6460eb33ea07->query('DELETE FROM `signals` WHERE `signal_id` = ?;', $Fb9da1713bff19ce['signal_id']);
	$e6b4427b1f3ec758[] = $ba2d146bb5a55097;
}

label162:

echo json_encode($e6b4427b1f3ec758);
goto label278;

label167:

if (XUI::$rSettings['redis_handler']) {
	goto label133;
}

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `proxy_id` = ? AND `hls_end` = 0;', $C082ca9ed03f473c);
$A1a73957c6feb09a = intval($b62d6460eb33ea07->get_row()['count']);
$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `proxy_id` = ? AND `hls_end` = 0 GROUP BY `user_id`;', $C082ca9ed03f473c);
$d7bd0890458933bb = intval($b62d6460eb33ea07->num_rows());
goto label123;

label194:

$cb0ea013a633ba77 = ['total_ram' => $Bf3377811d8e2b3a['total_mem'], 'total_used' => $Bf3377811d8e2b3a['total_mem_used'], 'cores' => $Bf3377811d8e2b3a['cpu_cores'], 'threads' => $Bf3377811d8e2b3a['cpu_cores'], 'kernel' => $Bf3377811d8e2b3a['kernel'], 'total_running_streams' => $Bf3377811d8e2b3a['total_running_streams'], 'cpu_name' => $Bf3377811d8e2b3a['cpu_name'], 'cpu_usage' => $Bf3377811d8e2b3a['cpu'], 'network_speed' => $Bf3377811d8e2b3a['network_speed'], 'bytes_sent' => $Bf3377811d8e2b3a['bytes_sent'], 'bytes_received' => $Bf3377811d8e2b3a['bytes_received']];
$D02bdcbd21053116 = pingserver($Bcf70cba56392975[$C082ca9ed03f473c]['server_ip'], $Bcf70cba56392975[$C082ca9ed03f473c]['http_broadcast_port']) ?: 0;

if (!($D02bdcbd21053116 < 0)) {
	goto label233;
}

$D02bdcbd21053116 = 0;

label233:

goto label167;

label234:

$C082ca9ed03f473c = intval($_POST['server_id']);
$Bf3377811d8e2b3a = $_POST['stats'];
$b62d6460eb33ea07->query('SELECT `bytes_sent_total`, `bytes_received_total`, `time` FROM `servers_stats` WHERE `server_id` = ? ORDER BY `id` DESC LIMIT 1;', $C082ca9ed03f473c);

if (!($b62d6460eb33ea07->num_rows() == 1)) {
	goto label119;
}

$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
goto label102;

label257:

$d7bd0890458933bb = $Bcf70cba56392975[$C082ca9ed03f473c]['users'];
$A19b6a6102984e90 = 0;

foreach (array_keys($Bcf70cba56392975) as $C082ca9ed03f473c) {
	if (!$Bcf70cba56392975[$C082ca9ed03f473c]['server_online']) {
		goto label275;
	}

	$A19b6a6102984e90 += $Bcf70cba56392975[$C082ca9ed03f473c]['users'];

	label275:
}

label277:

goto label11;

label278:

exit();
goto label280;

label280:

?>