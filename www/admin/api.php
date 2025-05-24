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

goto label443;

label1:

goto label473;

label2:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
$dabeadfcc3ba1288 = (!empty(XUI::$rRequest['action']) ? XUI::$rRequest['action'] : '');
$cc7f8df1cc8d663f = (!empty(XUI::$rRequest['sub']) ? XUI::$rRequest['sub'] : '');

switch ($dabeadfcc3ba1288) {
case 'server':
	switch ($cc7f8df1cc8d663f) {
	case 'list':
		$d094d3e133ec8c03 = [];

		foreach (XUI::$rServers as $C082ca9ed03f473c => $dbaf3cd4fbd0f046) {
			$d094d3e133ec8c03[] = ['id' => $C082ca9ed03f473c, 'server_name' => $dbaf3cd4fbd0f046['server_name'], 'online' => $dbaf3cd4fbd0f046['server_online'], 'info' => json_decode($dbaf3cd4fbd0f046['server_hardware'], true)];
		}

		echo json_encode($d094d3e133ec8c03);
		goto label68;
	}

	label68:

	goto label1;
case 'vod':
	switch ($cc7f8df1cc8d663f) {
	case 'start':
		$dec36723d7be7c49 = array_map('intval', XUI::$rRequest['stream_ids']);
		$ebb4852f69f0dca0 = XUI::$rRequest['force'] ?: false;
		$Bcf70cba56392975 = (empty(XUI::$rRequest['servers']) ? array_keys(XUI::$rServers) : array_map('intval', XUI::$rRequest['servers']));
		$F83b167f3cf044be = [];

		foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
			$F83b167f3cf044be[$C082ca9ed03f473c] = [
				'url'      => XUI::$rServers[$C082ca9ed03f473c]['api_url_ip'] . '&action=vod',
				'postdata' => ['function' => $cc7f8df1cc8d663f, 'stream_ids' => $dec36723d7be7c49, 'force' => $ebb4852f69f0dca0]
			];
		}

		XUI::B2EF9C6C7aFa4EEc($F83b167f3cf044be);
		echo json_encode(['result' => true]);
		exit();
	case 'stop':
		$dec36723d7be7c49 = array_map('intval', XUI::$rRequest['stream_ids']);
		$Bcf70cba56392975 = (empty(XUI::$rRequest['servers']) ? array_keys(XUI::$rServers) : array_map('intval', XUI::$rRequest['servers']));
		$F83b167f3cf044be = [];

		foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
			$F83b167f3cf044be[$C082ca9ed03f473c] = [
				'url'      => XUI::$rServers[$C082ca9ed03f473c]['api_url_ip'] . '&action=vod',
				'postdata' => ['function' => $cc7f8df1cc8d663f, 'stream_ids' => $dec36723d7be7c49]
			];
		}

		XUI::b2eF9C6C7afa4eec($F83b167f3cf044be);
		echo json_encode(['result' => true]);
		exit();
	}

	goto label1;
case 'stream':
	switch ($cc7f8df1cc8d663f) {
	case 'start':
		$dec36723d7be7c49 = array_map('intval', XUI::$rRequest['stream_ids']);
		$Bcf70cba56392975 = (empty(XUI::$rRequest['servers']) ? array_keys(XUI::$rServers) : array_map('intval', XUI::$rRequest['servers']));
		$F83b167f3cf044be = [];

		foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
			$F83b167f3cf044be[$C082ca9ed03f473c] = [
				'url'      => XUI::$rServers[$C082ca9ed03f473c]['api_url_ip'] . '&action=stream',
				'postdata' => ['function' => $cc7f8df1cc8d663f, 'stream_ids' => $dec36723d7be7c49]
			];
		}

		XUI::B2eF9c6c7AfA4eec($F83b167f3cf044be);
		echo json_encode(['result' => true]);
		exit();
	case 'stop':
		$dec36723d7be7c49 = array_map('intval', XUI::$rRequest['stream_ids']);
		$Bcf70cba56392975 = (empty(XUI::$rRequest['servers']) ? array_keys(XUI::$rServers) : array_map('intval', XUI::$rRequest['servers']));
		$F83b167f3cf044be = [];

		foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
			$F83b167f3cf044be[$C082ca9ed03f473c] = [
				'url'      => XUI::$rServers[$C082ca9ed03f473c]['api_url_ip'] . '&action=stream',
				'postdata' => ['function' => $cc7f8df1cc8d663f, 'stream_ids' => $dec36723d7be7c49]
			];
		}

		XUI::B2EF9C6c7AFA4eeC($F83b167f3cf044be);
		echo json_encode(['result' => true]);
		exit();
	case 'list':
		$d094d3e133ec8c03 = [];
		$b62d6460eb33ea07->query('SELECT id,stream_display_name FROM `streams` WHERE type <> 2');

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$d094d3e133ec8c03[] = ['id' => $Fb9da1713bff19ce['id'], 'stream_name' => $Fb9da1713bff19ce['stream_display_name']];
		}

		echo json_encode($d094d3e133ec8c03);
		goto label355;
	case 'offline':
		$b62d6460eb33ea07->query('SELECT t1.stream_status,t1.server_id,t1.stream_id  FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.type <> 2 WHERE t1.stream_status <> 0');
		$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows(true, 'stream_id', false, 'server_id');
		$d094d3e133ec8c03 = [];

		foreach ($D9846544dffb63c9 as $ee6d1fc5d801b43f => $Bcf70cba56392975) {
			$d094d3e133ec8c03[$ee6d1fc5d801b43f] = array_keys($Bcf70cba56392975);
		}

		echo json_encode($d094d3e133ec8c03);
		goto label355;
	case 'online':
		$b62d6460eb33ea07->query('SELECT t1.stream_status,t1.server_id,t1.stream_id FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.type <> 2 WHERE t1.pid > 0 AND t1.stream_status = 0');
		$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows(true, 'stream_id', false, 'server_id');
		$d094d3e133ec8c03 = [];

		foreach ($D9846544dffb63c9 as $ee6d1fc5d801b43f => $Bcf70cba56392975) {
			$d094d3e133ec8c03[$ee6d1fc5d801b43f] = array_keys($Bcf70cba56392975);
		}

		echo json_encode($d094d3e133ec8c03);
		goto label355;
	}

	label355:

	goto label1;
case 'line':
	switch ($cc7f8df1cc8d663f) {
	case 'info':
		goto label368;

		label360:

		echo json_encode(['result' => true, 'user_info' => $E59d0debc75e7be8]);

		label366:

		goto label408;
		goto label408;

		label368:
		if (!empty(XUI::$rRequest['username']) && !empty(XUI::$rRequest['password'])) {
			goto label383;
		}

		echo json_encode(['result' => false, 'error' => 'PARAMETER ERROR (user/pass)']);
		goto label366;

		label383:

		$ff5cf44f96903d64 = XUI::$rRequest['username'];
		goto label387;

		label387:

		$fd093b5358e9a519 = XUI::$rRequest['password'];
		$E59d0debc75e7be8 = XUI::cC988751eeBBF271(false, $ff5cf44f96903d64, $fd093b5358e9a519, true, true);

		if (!empty($E59d0debc75e7be8)) {
			goto label360;
		}

		echo json_encode(['result' => false, 'error' => 'NOT EXISTS']);
		goto label366;
		goto label360;
	}

	label408:

	goto label1;
case 'reg_user':
	switch ($cc7f8df1cc8d663f) {
	case 'list':
		$b62d6460eb33ea07->query('SELECT id,username,credits,group_id,group_name,last_login,date_registered,email,ip,status FROM `users` t1 INNER JOIN `users_groups` t2 ON t1.member_group_id = t2.group_id');
		$e02ff34f7d898a7b = $b62d6460eb33ea07->get_rows();
		echo json_encode($e02ff34f7d898a7b);
		goto label423;
	}

	label423:

	goto label1;
}

goto label1;

label425:

F82199eff9017bc9();

label427:
if (!(!empty(XUI::$rSettings['api_pass']) && (XUI::$rRequest['api_pass'] != XUI::$rSettings['api_pass']))) {
	goto label442;
}

f82199eff9017Bc9();

label442:

goto label2;

label443:

register_shutdown_function('shutdown');
set_time_limit(0);
require '../init.php';
$b38e11ffdc6a3abb = XUI::aD72b4259CA295B2();
if (!(!in_array($b38e11ffdc6a3abb, XUI::de052f142A92e9BF()) && !in_array($b38e11ffdc6a3abb, XUI::$rSettings['api_ips']))) {
	goto label427;
}

goto label425;

label473:

?>