<?php


function Aa16F234Cc629fbA($Abcb228699a7f743)
{
	global $db0a61ef32b89a27;
	global $E59d0debc75e7be8;
	if (!isset($db0a61ef32b89a27['users'][$Abcb228699a7f743]['parent']) || ($db0a61ef32b89a27['users'][$Abcb228699a7f743]['parent'] == 0) || ($db0a61ef32b89a27['users'][$Abcb228699a7f743]['parent'] == $E59d0debc75e7be8['id'])) {
		goto label30;
	}

	return AA16F234CC629fBa($db0a61ef32b89a27['users'][$Abcb228699a7f743]['parent']);
	goto label31;

	label30:

	return $Abcb228699a7f743;

	label31:
}

function D0f5f880C2806A45($Caf4325605347834)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `id`, `username` FROM `users` WHERE `owner_id` = ?;', $Caf4325605347834);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['id']] = ['username' => $Fb9da1713bff19ce['username'], 'parent' => $Caf4325605347834];

		foreach (D0f5f880C2806a45($Fb9da1713bff19ce['id']) as $f7107e3a92443147 => $af8369fae2c3f851) {
			$B9869413eae86beb[$f7107e3a92443147] = $af8369fae2c3f851;
		}
	}

	return $B9869413eae86beb;
}

function Ed66A460312D79a4($A7ca171405b19571, $e67d13066773cc34, $c4689ba24233da2d)
{
	$Daecfbd6410b9c42 = explode('.', strtolower(pathinfo($A7ca171405b19571)['extension']))[0];
	$Cf5e0f5f58fe7b78 = IMAGES_PATH . 'admin/' . md5($A7ca171405b19571) . '_' . $e67d13066773cc34 . '_' . $c4689ba24233da2d . '.' . $Daecfbd6410b9c42;

	if (file_exists($Cf5e0f5f58fe7b78)) {
		goto label40;
	}

	return XUI::fCa722697178454B($A7ca171405b19571);
	goto label86;

	label40:

	$f547aeca99c55c3e = (empty(XUI::$rServers[SERVER_ID]['domain_name']) ? XUI::$rServers[SERVER_ID]['server_ip'] : explode(',', XUI::$rServers[SERVER_ID]['domain_name'])[0]);
	return XUI::$rServers[SERVER_ID]['server_protocol'] . '://' . $f547aeca99c55c3e . ':' . XUI::$rServers[SERVER_ID]['request_port'] . '/images/admin/' . md5($A7ca171405b19571) . '_' . $e67d13066773cc34 . '_' . $c4689ba24233da2d . '.' . $Daecfbd6410b9c42;

	label86:
}

function E7045B4678cC9DB2($ee6d1fc5d801b43f, $ea00e7b975303471 = 250)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM (SELECT MAX(`date`) AS `date`, `error` FROM `streams_errors` WHERE `stream_id` = ? GROUP BY `error`) AS `output` ORDER BY `date` DESC LIMIT ' . intval($ea00e7b975303471) . ';', $ee6d1fc5d801b43f);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	return $B9869413eae86beb;
}

function getPageFromURL($A7ca171405b19571)
{
	if ($A7ca171405b19571) {
	}
	else {
		return NULL;
	}

	return strtolower(basename(ltrim(parse_url($A7ca171405b19571)['path'], '/'), '.php'));
}

function b790Ff255E9F25F5($ee6d1fc5d801b43f, $ba10d8a0b8348643 = false)
{
	goto label24;

	label3:

	goto label17;

	label4:

	$b62d6460eb33ea07->query('SELECT * FROM `epg_data` WHERE ((`start` >= ? AND `start` < UNIX_TIMESTAMP()) OR (`start` >= UNIX_TIMESTAMP() AND `end` < UNIX_TIMESTAMP())) AND `epg_id` = ? AND `channel_id` = ? ORDER BY `start` ASC;', time() - ($fe93a43f53d92a4e['tv_archive_duration'] * 86400), $fe93a43f53d92a4e['epg_id'], $fe93a43f53d92a4e['channel_id']);

	label17:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label46;
	}

	goto label43;

	label24:

	global $b62d6460eb33ea07;
	$fe93a43f53d92a4e = F260B7A31F021e39($ee6d1fc5d801b43f);

	if (!$fe93a43f53d92a4e['channel_id']) {
		goto label46;
	}

	if ($ba10d8a0b8348643) {
		goto label4;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `epg_data` WHERE `end` > UNIX_TIMESTAMP() AND `epg_id` = ? AND `channel_id` = ? ORDER BY `start` ASC;', $fe93a43f53d92a4e['epg_id'], $fe93a43f53d92a4e['channel_id']);
	goto label3;

	label43:

	return $b62d6460eb33ea07->get_rows();

	label46:

	return [];
	goto label48;

	label48:
}

function getEPG($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `epg` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function b2Be0B935A31Df18($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `streams_options` WHERE `stream_id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label25;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['argument_id'])] = $Fb9da1713bff19ce;
	}

	label25:

	return $B9869413eae86beb;
}

function b25f6F50dfA04Eb7($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `streams_servers` WHERE `stream_id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label25;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['server_id'])] = $Fb9da1713bff19ce;
	}

	label25:

	return $B9869413eae86beb;
}

function b36Ce90e79FB0e76($C0a1fd30f0173389 = NULL, $d73ad526f02ac0e3 = true)
{
	goto label5;

	label3:

	return $B9869413eae86beb;
	goto label54;

	label5:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `users` ORDER BY `username` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label44;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!(!$C0a1fd30f0173389 || ($Fb9da1713bff19ce['owner_id'] == $C0a1fd30f0173389) || (($Fb9da1713bff19ce['id'] == $C0a1fd30f0173389) && $d73ad526f02ac0e3))) {
			goto label41;
		}

		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;

		label41:
	}

	goto label44;

	label44:

	if (!(count($B9869413eae86beb) == 0)) {
		goto label53;
	}

	$B9869413eae86beb[-1] = [];

	label53:

	goto label3;

	label54:
}

function EBd26D3621708B16($Cc2b5dfe75dc164b = 2419200)
{
	global $b62d6460eb33ea07;
	global $E59d0debc75e7be8;
	global $db0a61ef32b89a27;
	$B9869413eae86beb = [];
	$C93288e1d85b6c77 = array_map('intval', array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['all_reports']));

	if (!(0 < count($C93288e1d85b6c77))) {
		goto label48;
	}

	$b62d6460eb33ea07->query('SELECT `is_mag`, `is_e2`, `lines`.`id` AS `line_id`, `lines`.`reseller_notes`, `mag_devices`.`mag_id`, `enigma2_devices`.`device_id` AS `e2_id`, `member_id`, `username`, `password`, `exp_date`, `mag_devices`.`mac` AS `mag_mac`, `enigma2_devices`.`mac` AS `e2_mac` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `member_id` IN (' . implode(',', $C93288e1d85b6c77) . ') AND `exp_date` IS NOT NULL AND `exp_date` >= ? AND `exp_date` < ? ORDER BY `exp_date` ASC LIMIT 250;', time(), time() + $Cc2b5dfe75dc164b);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label48:

	return $B9869413eae86beb;
}

function a58FDb6c7fc6fEB0($Abcb228699a7f743 = NULL, $A55040edeb29965a = false)
{
	goto label5;

	label3:

	return $B9869413eae86beb;
	goto label195;

	label5:

	global $b62d6460eb33ea07;
	global $E59d0debc75e7be8;
	global $db0a61ef32b89a27;
	$B9869413eae86beb = [];

	if ($Abcb228699a7f743) {
		goto label16;
	}

	$b62d6460eb33ea07->query('SELECT `tickets`.`id`, `tickets`.`member_id`, `tickets`.`title`, `tickets`.`status`, `tickets`.`admin_read`, `tickets`.`user_read`, `users`.`username` FROM `tickets`, `users` WHERE `users`.`id` = `tickets`.`member_id` ORDER BY `id` DESC;');
	goto label44;
	goto label16;

	label16:

	if ($A55040edeb29965a) {
		goto label39;
	}

	$b62d6460eb33ea07->query('SELECT `tickets`.`id`, `tickets`.`member_id`, `tickets`.`title`, `tickets`.`status`, `tickets`.`admin_read`, `tickets`.`user_read`, `users`.`username` FROM `tickets`, `users` WHERE `member_id` IN (' . implode(',', array_map('intval', array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['all_reports']))) . ') AND `users`.`id` = `tickets`.`member_id` ORDER BY `id` DESC;');
	goto label44;

	label39:

	goto label40;

	label40:

	$b62d6460eb33ea07->query('SELECT `tickets`.`id`, `tickets`.`member_id`, `tickets`.`title`, `tickets`.`status`, `tickets`.`admin_read`, `tickets`.`user_read`, `users`.`username` FROM `tickets`, `users` WHERE `member_id` IN (SELECT `id` FROM `users` WHERE `owner_id` = ?) AND `users`.`id` = `tickets`.`member_id` ORDER BY `id` DESC;', $Abcb228699a7f743);

	label44:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label3;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label174;

		label56:

		goto label60;

		label58:

		$Fb9da1713bff19ce['status'] = 5;

		label60:

		goto label66;
		goto label105;

		label64:

		$Fb9da1713bff19ce['status'] = 6;

		label66:

		goto label118;
		goto label151;

		label70:

		if ($Fb9da1713bff19ce['user_read'] == 1) {
			goto label79;
		}

		$Fb9da1713bff19ce['status'] = 4;
		goto label118;

		label79:

		goto label116;

		label81:

		if ($Fb9da1713bff19ce['member_id'] == $Abcb228699a7f743) {
			goto label151;
		}

		if (!($Fb9da1713bff19ce['status'] != 0)) {
			goto label66;
		}

		if ($e66f9bb7bd75780b['admin_reply']) {
			goto label105;
		}

		if ($Fb9da1713bff19ce['admin_read'] == 1) {
			goto label58;
		}

		$Fb9da1713bff19ce['status'] = 4;
		goto label56;

		label105:

		if ($Fb9da1713bff19ce['user_read'] == 1) {
			goto label114;
		}

		$Fb9da1713bff19ce['status'] = 2;
		goto label66;

		label114:

		goto label64;

		label116:

		$Fb9da1713bff19ce['status'] = 3;

		label118:

		goto label170;

		label120:

		$Fb9da1713bff19ce['created'] = date('Y-m-d H:i', $e36d2f5d3c9f0972);

		label126:

		$b62d6460eb33ea07->query('SELECT * FROM `tickets_replies` WHERE `ticket_id` = ? ORDER BY `id` DESC LIMIT 1;', $Fb9da1713bff19ce['id']);
		$e66f9bb7bd75780b = $b62d6460eb33ea07->get_row();
		$Fb9da1713bff19ce['last_reply'] = date('Y-m-d H:i', $e66f9bb7bd75780b['date']);
		goto label81;

		label143:

		goto label147;

		label145:

		$Fb9da1713bff19ce['status'] = 5;

		label147:

		goto label118;
		goto label70;

		label151:

		if (!($Fb9da1713bff19ce['status'] != 0)) {
			goto label118;
		}

		if ($e66f9bb7bd75780b['admin_reply']) {
			goto label70;
		}

		if ($Fb9da1713bff19ce['admin_read'] == 1) {
			goto label145;
		}

		$Fb9da1713bff19ce['status'] = 2;
		goto label143;

		label170:

		$B9869413eae86beb[] = $Fb9da1713bff19ce;
		goto label192;

		label174:

		$b62d6460eb33ea07->query('SELECT MIN(`date`) AS `date` FROM `tickets_replies` WHERE `ticket_id` = ?;', $Fb9da1713bff19ce['id']);

		if ($e36d2f5d3c9f0972 = $b62d6460eb33ea07->get_row()['date']) {
			goto label190;
		}

		$Fb9da1713bff19ce['created'] = '';
		goto label126;

		label190:

		goto label120;

		label192:
	}

	goto label3;

	label195:
}

function DeBA522c14d0644c($fd093b5358e9a519, $A2e0a2d56a0b0953 = 'xui', $Db4c2eb1d542b544 = 20000)
{
	if (!($A2e0a2d56a0b0953 == '')) {
		goto label19;
	}

	$A2e0a2d56a0b0953 = substr(bin2hex(openssl_random_pseudo_bytes(16)), 0, 16);

	label19:

	if (stripos($A2e0a2d56a0b0953, 'rounds=')) {
		goto label31;
	}

	$A2e0a2d56a0b0953 = sprintf('$6$rounds=%d$%s$', $Db4c2eb1d542b544, $A2e0a2d56a0b0953);

	label31:

	return crypt($fd093b5358e9a519, $A2e0a2d56a0b0953);
}

function DFaC1B11d332c193()
{
	return XUI::AD72B4259cA295B2();
}

function aCeb5cfE4194f4F0($Abcb228699a7f743)
{
	goto label2;

	label2:

	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `users_groups` WHERE `group_id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label35;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$Fb9da1713bff19ce['subresellers'] = json_decode($Fb9da1713bff19ce['subresellers'], true);
	goto label24;

	label24:

	if (!(count($Fb9da1713bff19ce['subresellers']) == 0)) {
		goto label34;
	}

	$Fb9da1713bff19ce['create_sub_resellers'] = 0;

	label34:

	return $Fb9da1713bff19ce;

	label35:

	goto label36;

	label36:

	return NULL;
	goto label38;

	label38:
}

function getSimilarMovies($Abcb228699a7f743, $D7209256c56b1469 = 1)
{
	require_once XUI_HOME . 'includes/libs/tmdb.php';

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label20;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label29;

	label20:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label29:

	return json_decode(json_encode($b41097c951ee83d3->getSimilarMovies($Abcb228699a7f743, $D7209256c56b1469)), true);
}

function getSimilarSeries($Abcb228699a7f743, $D7209256c56b1469 = 1)
{
	require_once XUI_HOME . 'includes/libs/tmdb.php';

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label20;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label29;

	label20:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label29:

	return json_decode(json_encode($b41097c951ee83d3->getSimilarSeries($Abcb228699a7f743, $D7209256c56b1469)), true);
}

function generateReport($A7ca171405b19571, $ffb2d1a0985b1293)
{
	$c34589bb44ab4b2a = http_build_query($ffb2d1a0985b1293);
	$ab701fbbd66214d9 = curl_init();
	curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $A7ca171405b19571);
	curl_setopt($ab701fbbd66214d9, CURLOPT_POST, true);
	curl_setopt($ab701fbbd66214d9, CURLOPT_POSTFIELDS, $c34589bb44ab4b2a);
	curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ab701fbbd66214d9, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ab701fbbd66214d9, CURLOPT_TIMEOUT, 300);
	return curl_exec($ab701fbbd66214d9);
}

function convertToCSV($ba2d146bb5a55097)
{
	$Be3c637a16a727b1 = false;
	$F48d5724f3b4ec96 = TMP_PATH . Fc34407b2842461b(32) . '.csv';
	$D6be258a9043b749 = fopen($F48d5724f3b4ec96, 'w');

	foreach ($ba2d146bb5a55097 as $Fb9da1713bff19ce) {
		if (!empty($Be3c637a16a727b1)) {
			goto label33;
		}

		$Be3c637a16a727b1 = array_keys($Fb9da1713bff19ce);
		fputcsv($D6be258a9043b749, $Be3c637a16a727b1);
		$Be3c637a16a727b1 = array_flip($Be3c637a16a727b1);

		label33:

		fputcsv($D6be258a9043b749, array_merge($Be3c637a16a727b1, $Fb9da1713bff19ce));
	}

	fclose($D6be258a9043b749);
	return $F48d5724f3b4ec96;
}

function processEPGAPI($ee6d1fc5d801b43f, $b39b8fa9afa1ec53)
{
	shell_exec(PHP_BIN . ' ' . CRON_PATH . 'epg.php ' . intval($ee6d1fc5d801b43f) . ' ' . escapeshellarg($b39b8fa9afa1ec53) . ' > /dev/null 2>/dev/null &');
	return true;
}

function CBB79f154DB723A8($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `servers` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return false;
}

function d8BB46ce92ce0066($C082ca9ed03f473c, $A1f381c3d6825384 = false)
{
	goto label50;

	label3:

	return $d353a4da8a0bb857;

	label4:

	goto label73;

	label5:

	$d353a4da8a0bb857 = 0;

	if ($A1f381c3d6825384) {
		goto label20;
	}

	$d353a4da8a0bb857 = XUI::D72C0f56211B6f7C(NULL, $C082ca9ed03f473c, NULL, true, true, false)[0];
	goto label49;
	goto label20;

	label20:

	$Ee7511dcb615b77d = XUI::$rServers[$C082ca9ed03f473c]['parent_id'];

	foreach ($Ee7511dcb615b77d as $A3206fae422859ef) {
		foreach (XUI::d72c0F56211B6f7C(NULL, $A3206fae422859ef, NULL, true, false, false) as $Fd10d59f87b19e71) {
			if (!($Fd10d59f87b19e71['proxy_id'] == $C082ca9ed03f473c)) {
				goto label45;
			}

			$d353a4da8a0bb857++;

			label45:
		}
	}

	label49:

	goto label3;

	label50:

	global $b62d6460eb33ea07;

	if (XUI::$rSettings['redis_handler']) {
		goto label5;
	}

	if ($A1f381c3d6825384) {
		goto label63;
	}

	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0;', $C082ca9ed03f473c);
	goto label67;
	goto label63;

	label63:

	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `proxy_id` = ? AND `hls_end` = 0;', $C082ca9ed03f473c);

	label67:

	return $b62d6460eb33ea07->get_row()['count'];
	goto label4;
	goto label5;

	label73:
}

function E91c9873459eC2BA()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `epg`;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label20;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce;
	}

	label20:

	return $B9869413eae86beb;
}

function F769e3f0C739d1a6($A7d54b094ae83c95 = 'live')
{
	goto label27;

	label2:

	return $B9869413eae86beb;
	goto label36;

	label4:

	$b62d6460eb33ea07->query('SELECT * FROM `streams_categories` WHERE `category_type` = ? ORDER BY `cat_order` ASC;', $A7d54b094ae83c95);

	label8:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label2;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	goto label2;

	label27:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];

	if ($A7d54b094ae83c95) {
		goto label4;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `streams_categories` ORDER BY `cat_order` ASC;');
	goto label8;
	goto label4;

	label36:
}

function d7D50845A0d5902F($C0231f13b9482ebf)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id`, `data` FROM `epg`;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label59;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		foreach (json_decode($Fb9da1713bff19ce['data'], true) as $b39b8fa9afa1ec53 => $F310149f6e092e85) {
			if (!($b39b8fa9afa1ec53 == $C0231f13b9482ebf)) {
				goto label55;
			}

			if (0 < count($F310149f6e092e85['langs'])) {
				goto label42;
			}

			$af9a244a6c82cb77 = '';
			goto label45;

			label42:

			$af9a244a6c82cb77 = $F310149f6e092e85['langs'][0];

			label45:

			return ['channel_id' => $b39b8fa9afa1ec53, 'epg_lang' => $af9a244a6c82cb77, 'epg_id' => intval($Fb9da1713bff19ce['id'])];

			label55:
		}
	}

	label59:

	return NULL;
}

function A752238c4005cbBC($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `users_groups` WHERE `group_id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function bF80879C11CDdcc0()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `output_formats` ORDER BY `access_output_id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function cfC02922066C4Cd5()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `id`, `bouquet` FROM `lines` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label23;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	label23:

	return $B9869413eae86beb;
}

function F964B9222b35ADDd()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` ORDER BY `bouquet_order` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label23;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	label23:

	return $B9869413eae86beb;
}

function BCa35E1D9e85240C()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` ORDER BY `bouquet_order` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label23;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	label23:

	return $B9869413eae86beb;
}

function Bb4898D08a4EE099($Bccd07953f314962, $ba2d146bb5a55097)
{
	$F83b167f3cf044be = [];

	foreach ($Bccd07953f314962 as $C082ca9ed03f473c) {
		if (!XUI::$rServers[$C082ca9ed03f473c]['server_online']) {
			goto label19;
		}

		$F83b167f3cf044be[$C082ca9ed03f473c] = ['url' => XUI::$rServers[$C082ca9ed03f473c]['api_url'], 'postdata' => $ba2d146bb5a55097];

		label19:
	}

	XUI::B2EF9C6c7AFa4eEc($F83b167f3cf044be);
	return ['result' => true];
}

function c63CE1240E996BbC($C082ca9ed03f473c, $A7d54b094ae83c95, $c2339b431f4d68cb, $b0663135b9a59341 = false)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $C082ca9ed03f473c, time(), json_encode(['action' => 'set_port', 'type' => intval($A7d54b094ae83c95), 'ports' => $c2339b431f4d68cb, 'reload' => $b0663135b9a59341]));
}

function e08262D3291c63f5($C082ca9ed03f473c, $Ec83f78804da3fa0, $b0663135b9a59341 = true)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $C082ca9ed03f473c, time(), json_encode(['action' => 'set_services', 'count' => intval($Ec83f78804da3fa0), 'reload' => $b0663135b9a59341]));
}

function setGovernor($C082ca9ed03f473c, $C3e7ad56e5c3b3d2)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $C082ca9ed03f473c, time(), json_encode(['action' => 'set_governor', 'data' => $C3e7ad56e5c3b3d2]));
}

function setSysctl($C082ca9ed03f473c, $fecd6def1873b5e6)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $C082ca9ed03f473c, time(), json_encode(['action' => 'set_sysctl', 'data' => $fecd6def1873b5e6]));
}

function A0C5C8DE2109Dd97()
{
	global $b62d6460eb33ea07;
	global $Bcf70cba56392975;
	global $a080f5083618911e;
	$b62d6460eb33ea07->query('TRUNCATE `blocked_ips`;');
	shell_exec('rm ' . FLOOD_TMP_PATH . 'block_*');

	foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
		$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $Ec379295dc7029e6['id'], time(), json_encode(['action' => 'flush']));
	}

	foreach ($a080f5083618911e as $Ec379295dc7029e6) {
		$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $Ec379295dc7029e6['id'], time(), json_encode(['action' => 'flush']));
	}

	return true;
}

function CCc79a775f24dD39()
{
	goto label1;

	label1:

	global $b62d6460eb33ea07;
	require_once XUI_HOME . 'includes/libs/tmdb.php';

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label109;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label118;
	goto label109;

	label21:

	foreach ($ee6dd4b8fd1ab749 as $e2cb1d4d305cf0a4) {
		if (in_array($e2cb1d4d305cf0a4->getID(), $fd095edbdbfc9eea[1])) {
			goto label42;
		}

		$b62d6460eb33ea07->query('INSERT INTO `watch_categories`(`type`, `genre_id`, `genre`, `category_id`, `bouquets`) VALUES(1, ?, ?, 0, \'[]\');', $e2cb1d4d305cf0a4->getID(), $e2cb1d4d305cf0a4->getName());

		label42:

		if (in_array($e2cb1d4d305cf0a4->getID(), $fd095edbdbfc9eea[2])) {
			goto label61;
		}

		$b62d6460eb33ea07->query('INSERT INTO `watch_categories`(`type`, `genre_id`, `genre`, `category_id`, `bouquets`) VALUES(2, ?, ?, 0, \'[]\');', $e2cb1d4d305cf0a4->getID(), $e2cb1d4d305cf0a4->getName());

		label61:
	}

	$cdfe2b1582c9840e = $b41097c951ee83d3->getTVGenres();

	foreach ($cdfe2b1582c9840e as $Dd4c855f4187040f) {
		if (in_array($Dd4c855f4187040f->getID(), $fd095edbdbfc9eea[1])) {
			goto label87;
		}

		$b62d6460eb33ea07->query('INSERT INTO `watch_categories`(`type`, `genre_id`, `genre`, `category_id`, `bouquets`) VALUES(1, ?, ?, 0, \'[]\');', $Dd4c855f4187040f->getID(), $Dd4c855f4187040f->getName());

		label87:

		if (in_array($Dd4c855f4187040f->getID(), $fd095edbdbfc9eea[2])) {
			goto label106;
		}

		$b62d6460eb33ea07->query('INSERT INTO `watch_categories`(`type`, `genre_id`, `genre`, `category_id`, `bouquets`) VALUES(2, ?, ?, 0, \'[]\');', $Dd4c855f4187040f->getID(), $Dd4c855f4187040f->getName());

		label106:
	}

	goto label160;

	label109:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label118:

	$fd095edbdbfc9eea = [
		1 => [],
		2 => []
	];
	$b62d6460eb33ea07->query('SELECT `id`, `type`, `genre_id` FROM `watch_categories`;');
	goto label123;

	label123:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label156;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!in_array($Fb9da1713bff19ce['genre_id'], $fd095edbdbfc9eea[$Fb9da1713bff19ce['type']])) {
			goto label149;
		}

		$b62d6460eb33ea07->query('DELETE FROM `watch_categories` WHERE `id` = ?;', $Fb9da1713bff19ce['id']);

		label149:

		$fd095edbdbfc9eea[$Fb9da1713bff19ce['type']][] = $Fb9da1713bff19ce['genre_id'];
	}

	label156:

	$ee6dd4b8fd1ab749 = $b41097c951ee83d3->getMovieGenres();
	goto label21;

	label160:
}

function E72f42A93714Ba87()
{
	header('Location: dashboard');
	exit();
}

function bAF6e9eF7775b5A9($D7209256c56b1469 = NULL)
{
	global $db0a61ef32b89a27;

	if ($D7209256c56b1469) {
		goto label14;
	}

	$D7209256c56b1469 = strtolower(basename($_SERVER['SCRIPT_FILENAME'], '.php'));

	label14:

	switch ($D7209256c56b1469) {
	case 'user':
	case 'users':
		return $db0a61ef32b89a27['create_sub_resellers'];
	case 'line':
	case 'lines':
		return $db0a61ef32b89a27['create_line'];
	case 'mag':
	case 'mags':
		return $db0a61ef32b89a27['create_mag'];
	case 'enigma':
	case 'enigmas':
		return $db0a61ef32b89a27['create_enigma'];
	case 'epg_view':
	case 'streams':
	case 'created_channels':
	case 'movies':
	case 'episodes':
	case 'radios':
		return $db0a61ef32b89a27['can_view_vod'];
	case 'live_connections':
	case 'line_activity':
		return $db0a61ef32b89a27['reseller_client_connection_logs'];
	}

	return true;
}

function e6D500E19634D513($D7209256c56b1469 = NULL)
{
	if ($D7209256c56b1469) {
		goto label13;
	}

	$D7209256c56b1469 = strtolower(basename($_SERVER['SCRIPT_FILENAME'], '.php'));

	label13:

	switch ($D7209256c56b1469) {
	case 'isps':
	case 'isp':
	case 'asns':
		return E589a4bf54a2Dad1('adv', 'block_isps');
	case 'bouquet':
		if (isset(XUI::$rRequest['id']) && e589A4BF54a2DAD1('adv', 'edit_bouquet')) {
			goto label268;
		}
		if (!(!isset(XUI::$rRequest['id']) && E589a4bf54A2dad1('adv', 'add_bouquet'))) {
			goto label267;
		}

		return true;

		label267:

		goto label269;

		label268:

		return true;
	case 'bouquet_order':
	case 'bouquet_sort':
		label269:

		return e589A4Bf54A2DaD1('adv', 'edit_bouquet');
	case 'bouquets':
		return E589a4bf54a2DAd1('adv', 'bouquets');
	case 'channel_order':
		return E589A4Bf54A2DaD1('adv', 'channel_order');
	case 'client_logs':
		return e589A4BF54a2DAD1('adv', 'client_request_log');
	case 'created_channel':
		if (isset(XUI::$rRequest['id']) && e589A4BF54a2dAd1('adv', 'edit_cchannel')) {
			goto label313;
		}
		if (!(!isset(XUI::$rRequest['id']) && e589a4bF54A2daD1('adv', 'create_channel'))) {
			goto label312;
		}

		return true;

		label312:

		goto label314;

		label313:

		return true;
	case 'code':
	case 'codes':
		label314:

		return e589a4bf54a2Dad1('adv', 'add_code');
	case 'hmac':
	case 'hmacs':
		return e589A4bf54a2DaD1('adv', 'add_hmac');
	case 'credit_logs':
		return E589A4Bf54A2dAd1('adv', 'credits_log');
	case 'enigmas':
		return E589A4BF54A2dAD1('adv', 'manage_e2');
	case 'epg':
		if (isset(XUI::$rRequest['id']) && e589a4BF54A2DAd1('adv', 'epg_edit')) {
			goto label358;
		}
		if (!(!isset(XUI::$rRequest['id']) && e589A4bF54A2Dad1('adv', 'add_epg'))) {
			goto label357;
		}

		return true;

		label357:

		goto label359;

		label358:

		return true;
	case 'epgs':
		label359:

		return E589A4bF54A2dAd1('adv', 'epg');
	case 'episode':
		if (isset(XUI::$rRequest['id']) && E589A4bf54A2daD1('adv', 'edit_episode')) {
			goto label388;
		}
		if (!(!isset(XUI::$rRequest['id']) && e589A4Bf54A2DAD1('adv', 'add_episode'))) {
			goto label387;
		}

		return true;

		label387:

		goto label389;

		label388:

		return true;
	case 'episodes':
		label389:

		return e589A4bF54A2Dad1('adv', 'episodes');
	case 'series_mass':
	case 'episodes_mass':
		return E589a4bF54a2daD1('adv', 'mass_sedits');
	case 'fingerprint':
		return E589A4bf54a2DAD1('adv', 'fingerprint');
	case 'group':
		if (isset(XUI::$rRequest['id']) && E589A4bF54a2DAD1('adv', 'edit_group')) {
			goto label428;
		}
		if (!(!isset(XUI::$rRequest['id']) && E589a4Bf54a2DAd1('adv', 'add_group'))) {
			goto label427;
		}

		return true;

		label427:

		goto label429;

		label428:

		return true;
	case 'groups':
		label429:

		return E589A4bf54A2daD1('adv', 'mng_groups');
	case 'ip':
	case 'ips':
		return E589a4bF54a2dAd1('adv', 'block_ips');
	case 'live_connections':
		return e589A4BF54a2DAD1('adv', 'live_connections');
	case 'mag':
		if (isset(XUI::$rRequest['id']) && e589a4BF54A2dAD1('adv', 'edit_mag')) {
			goto label468;
		}
		if (!(!isset(XUI::$rRequest['id']) && E589a4bf54A2DAD1('adv', 'add_mag'))) {
			goto label467;
		}

		return true;

		label467:

		goto label469;

		label468:

		return true;

		label469:

		goto label978;
	case 'mag_events':
		return e589A4bf54a2DAd1('adv', 'manage_events');
	case 'mags':
		return e589A4BF54A2dAd1('adv', 'manage_mag');
	case 'mass_delete':
		return e589A4BF54A2daD1('adv', 'mass_delete');
	case 'record':
		return e589a4bF54A2DaD1('adv', 'add_movie');
	case 'recordings':
		return e589a4Bf54a2Dad1('adv', 'movies');
	case 'queue':
		return e589A4Bf54a2DAD1('adv', 'streams') || E589A4bF54A2dAd1('adv', 'episodes') || E589A4BF54a2Dad1('adv', 'series');
	case 'movie':
		goto label515;

		label513:

		goto label978;
		goto label554;

		label515:
		if (isset(XUI::$rRequest['id']) && e589A4BF54a2DaD1('adv', 'edit_movie')) {
			goto label552;
		}
		if (!(!isset(XUI::$rRequest['id']) && E589A4BF54A2Dad1('adv', 'add_movie'))) {
			goto label551;
		}
		if (!(!isset(XUI::$rRequest['import']) || E589a4bF54A2DaD1('adv', 'import_movies'))) {
			goto label550;
		}

		return true;

		label550:

		goto label551;

		label551:

		goto label553;

		label552:

		return true;

		label553:

		goto label513;
	case 'movie_mass':
		label554:

		return e589A4BF54A2dad1('adv', 'mass_sedits_vod');
	case 'movies':
		return e589A4bF54a2DAD1('adv', 'movies');
	case 'package':
		if (isset(XUI::$rRequest['id']) && E589a4bF54a2DAD1('adv', 'edit_package')) {
			goto label588;
		}
		if (!(!isset(XUI::$rRequest['id']) && E589a4bf54a2DAd1('adv', 'add_packages'))) {
			goto label587;
		}

		return true;

		label587:

		goto label589;

		label588:

		return true;

		label589:

		goto label978;
	case 'packages':
	case 'addons':
		return E589a4BF54A2DaD1('adv', 'mng_packages');
	case 'player':
		return e589a4bf54A2Dad1('adv', 'player');
	case 'process_monitor':
		return e589a4bf54A2DAD1('adv', 'process_monitor');
	case 'profile':
		return E589A4bF54A2DAd1('adv', 'tprofile');
	case 'profiles':
		return e589A4Bf54A2dad1('adv', 'tprofiles');
	case 'radio':
		if (isset(XUI::$rRequest['id']) && e589a4bF54a2DAD1('adv', 'edit_radio')) {
			goto label639;
		}
		if (!(!isset(XUI::$rRequest['id']) && e589a4Bf54A2DAD1('adv', 'add_radio'))) {
			goto label638;
		}

		return true;

		label638:

		goto label640;

		label639:

		return true;

		label640:

		goto label978;
	case 'radio_mass':
		return E589A4BF54A2DAd1('adv', 'mass_edit_radio');
	case 'radios':
		return E589a4bf54A2Dad1('adv', 'radio');
	case 'user':
		if (isset(XUI::$rRequest['id']) && E589A4bf54A2dAd1('adv', 'edit_reguser')) {
			goto label675;
		}
		if (!(!isset(XUI::$rRequest['id']) && e589A4bF54a2dad1('adv', 'add_reguser'))) {
			goto label674;
		}

		return true;

		label674:

		goto label676;

		label675:

		return true;

		label676:

		goto label978;
	case 'user_logs':
		return E589a4bf54a2daD1('adv', 'reg_userlog');
	case 'users':
		return E589a4Bf54a2dAD1('adv', 'mng_regusers');
	case 'rtmp_ip':
		return e589A4Bf54a2Dad1('adv', 'add_rtmp');
	case 'rtmp_ips':
	case 'rtmp_monitor':
		return E589A4bF54a2Dad1('adv', 'rtmp');
	case 'serie':
		if (isset(XUI::$rRequest['id']) && e589A4BF54A2DaD1('adv', 'edit_series')) {
			goto label721;
		}
		if (!(!isset(XUI::$rRequest['id']) && e589A4Bf54A2DaD1('adv', 'add_series'))) {
			goto label720;
		}

		return true;

		label720:

		goto label722;

		label721:

		return true;

		label722:

		goto label978;
	case 'series':
		return E589A4BF54a2DAd1('adv', 'series');
	case 'series_order':
		return e589a4BF54a2DaD1('adv', 'edit_series');
	case 'server':
	case 'proxy':
		if (isset(XUI::$rRequest['id']) && e589a4bf54a2dAD1('adv', 'edit_server')) {
			goto label757;
		}
		if (!(!isset(XUI::$rRequest['id']) && e589A4Bf54a2DAd1('adv', 'add_server'))) {
			goto label756;
		}

		return true;

		label756:

		goto label758;

		label757:

		return true;

		label758:

		goto label978;
	case 'server_install':
		return e589A4BF54a2DaD1('adv', 'add_server');
	case 'servers':
	case 'server_view':
	case 'server_order':
	case 'proxies':
		return e589a4BF54A2daD1('adv', 'servers');
	case 'settings':
		return e589A4BF54A2DAd1('adv', 'settings');
	case 'license_info':
		return E589A4bf54a2daD1('adv', 'license');
	case 'backups':
	case 'cache':
	case 'setup':
		return E589a4bF54a2DAD1('adv', 'database');
	case 'settings_watch':
	case 'settings_plex':
		return e589a4bF54A2DaD1('adv', 'folder_watch_settings');
	case 'stream':
		goto label790;

		label790:
		if (isset(XUI::$rRequest['id']) && E589A4bf54A2dad1('adv', 'edit_stream')) {
			goto label829;
		}
		if (!(!isset(XUI::$rRequest['id']) && E589A4Bf54A2DAD1('adv', 'add_stream'))) {
			goto label828;
		}
		if (!(!isset(XUI::$rRequest['import']) || E589A4bF54A2dAd1('adv', 'import_streams'))) {
			goto label825;
		}

		return true;

		label825:

		goto label828;

		label826:

		goto label978;
		goto label831;

		label828:

		goto label830;

		label829:

		return true;

		label830:

		goto label826;
	case 'review':
		label831:

		return E589A4bF54a2DAd1('adv', 'import_streams');
	case 'mass_edit_streams':
		return E589a4bF54a2DAD1('adv', 'edit_stream');
	case 'stream_categories':
		return E589a4bf54a2DAd1('adv', 'categories');
	case 'stream_category':
		return E589A4Bf54a2dAd1('adv', 'add_cat');
	case 'stream_errors':
		return E589A4bF54a2dAd1('adv', 'stream_errors');
	case 'created_channel_mass':
	case 'stream_mass':
		return e589a4Bf54a2dAD1('adv', 'mass_edit_streams');
	case 'user_mass':
		return e589a4bf54A2dAD1('adv', 'mass_edit_users');
	case 'mag_mass':
		return E589a4bF54a2DAD1('adv', 'mass_edit_mags');
	case 'enigma_mass':
		return E589A4BF54A2DAD1('adv', 'mass_edit_enigmas');
	case 'quick_tools':
		return E589A4bF54A2dAd1('adv', 'quick_tools');
	case 'stream_tools':
		return e589A4BF54a2dAd1('adv', 'stream_tools');
	case 'stream_view':
	case 'provider':
	case 'providers':
	case 'streams':
	case 'epg_view':
	case 'created_channels':
	case 'stream_rank':
	case 'archive':
		return e589A4bF54a2dAd1('adv', 'streams');
	case 'ticket':
		return e589A4Bf54A2dad1('adv', 'ticket');
	case 'ticket_view':
	case 'tickets':
		return E589A4bF54A2dAd1('adv', 'manage_tickets');
	case 'line':
		if (isset(XUI::$rRequest['id']) && e589A4bf54A2DAD1('adv', 'edit_user')) {
			goto label925;
		}
		if (!(!isset(XUI::$rRequest['id']) && e589A4Bf54a2DAD1('adv', 'add_user'))) {
			goto label924;
		}

		return true;

		label924:

		goto label926;

		label925:

		return true;

		label926:

		goto label978;
	case 'line_activity':
	case 'theft_detection':
	case 'line_ips':
		return e589a4BF54a2DaD1('adv', 'connection_logs');
	case 'line_mass':
		return e589a4BF54a2dAD1('adv', 'mass_edit_lines');
	case 'useragents':
	case 'useragent':
		return E589a4bF54A2dad1('adv', 'block_uas');
	case 'lines':
		return E589A4Bf54a2daD1('adv', 'users');
	case 'plex':
	case 'watch':
		return E589a4bF54a2dAd1('adv', 'folder_watch');
	case 'plex_add':
	case 'watch_add':
		return e589A4Bf54A2dAd1('adv', 'folder_watch_add');
	case 'watch_output':
		return e589a4bF54a2DaD1('adv', 'folder_watch_output');
	case 'mysql_syslog':
	case 'panel_logs':
		return E589a4BF54A2dAD1('adv', 'panel_logs');
	case 'login_logs':
		return e589A4bF54a2dAd1('adv', 'login_logs');
	case 'restream_logs':
		return e589a4bF54a2dAD1('adv', 'restream_logs');
		return true;
	}

	label978:

	return false;
}

function fbBDC48C690d2D1b($C082ca9ed03f473c)
{
	A730c6DE034ba241($C082ca9ed03f473c, ['action' => 'reload_nginx']);
}

function getFPMStatus($C082ca9ed03f473c)
{
	return a730c6De034bA241($C082ca9ed03f473c, ['action' => 'fpm_status']);
}

function EDa0B738b69CF18F()
{
	global $Bcf70cba56392975;

	foreach ($Bcf70cba56392975 as $C082ca9ed03f473c => $Fdbe2b9ed5184132) {
		Xui\Functions::grantPrivileges('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $Fdbe2b9ed5184132['server_ip']);
	}
}

function B11216Ab01aAA78C($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `profiles` WHERE `profile_id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function b603Bf039ABA700F($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `blocked_uas` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function D8c8284136938ef0($fb719dae9595b9fa = NULL, $A7d54b094ae83c95 = NULL)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `users_packages` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label54;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!(!isset($fb719dae9595b9fa) || in_array(intval($fb719dae9595b9fa), json_decode($Fb9da1713bff19ce['groups'], true)))) {
			goto label52;
		}
		if (!(!$A7d54b094ae83c95 || $Fb9da1713bff19ce['is_' . $A7d54b094ae83c95])) {
			goto label52;
		}

		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;

		label52:
	}

	label54:

	return $B9869413eae86beb;
}

function dBa308160c3F6Ca5($E80c89ab7135afc8, $A31de3fcde4ff256)
{
	$f2c65d6d10964465 = fddf8Da6ab3fe47B($E80c89ab7135afc8);
	$f0a4ba08667ea471 = FdDF8Da6aB3Fe47B($A31de3fcde4ff256);
	$ec173304ea5bcb05 = true;
	if (!($f2c65d6d10964465 && $f0a4ba08667ea471)) {
		goto label48;
	}

	foreach (['bouquets', 'output_formats'] as $Bb672d1983256a93) {
		if (!(json_decode($f2c65d6d10964465[$Bb672d1983256a93], true) != json_decode($f0a4ba08667ea471[$Bb672d1983256a93], true))) {
			goto label34;
		}

		$ec173304ea5bcb05 = false;

		label34:
	}

	foreach (['is_restreamer', 'is_isplock', 'max_connections', 'force_server_id', 'forced_country', 'lock_device'] as $Bb672d1983256a93) {
		if (!($f2c65d6d10964465[$Bb672d1983256a93] != $f0a4ba08667ea471[$Bb672d1983256a93])) {
			goto label46;
		}

		$ec173304ea5bcb05 = false;

		label46:
	}

	label48:

	return $ec173304ea5bcb05;
}

function FDdf8dA6AB3fE47B($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `users_packages` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function eFADB87d8C867176($A7d54b094ae83c95 = NULL)
{
	goto label2;

	label2:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];

	if (!is_null($A7d54b094ae83c95)) {
		goto label17;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `access_codes` ORDER BY `id` ASC;');
	goto label21;
	goto label17;

	label15:

	return $B9869413eae86beb;
	goto label40;

	label17:

	$b62d6460eb33ea07->query('SELECT * FROM `access_codes` WHERE `type` = ? ORDER BY `id` ASC;', $A7d54b094ae83c95);

	label21:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label15;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	goto label15;

	label40:
}

function eAce9b35c7c59E8a($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `access_codes` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function dc088F5bec67ce39()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `blocked_ips` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function D5de20bca4Dd43aB()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `rtmp_ips` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function f260b7a31F021e39($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `streams` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function B5aD1d95a92CE732($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `lines` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function Ba89228Dc958CE05($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `users` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function B20d33b2749AdfEC()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `streams_arguments` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label20;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['argument_key']] = $Fb9da1713bff19ce;
	}

	label20:

	return $B9869413eae86beb;
}

function f93e9343c3D7FD99()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `profiles` ORDER BY `profile_id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function dFFCDAFE3A02352c($A7d54b094ae83c95 = NULL)
{
	goto label23;

	label2:

	return $B9869413eae86beb;
	goto label32;

	label4:

	$b62d6460eb33ea07->query('SELECT * FROM `watch_folders` WHERE `type` = ? AND `type` <> \'plex\' ORDER BY `id` ASC;', $A7d54b094ae83c95);

	label8:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label2;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	goto label2;

	label23:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];

	if ($A7d54b094ae83c95) {
		goto label4;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `watch_folders` WHERE `type` <> \'plex\' ORDER BY `id` ASC;');
	goto label8;
	goto label4;

	label32:
}

function getPlexServers()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `watch_folders` WHERE `type` = \'plex\' ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function D9AA526FdB80307A($A7d54b094ae83c95 = NULL)
{
	goto label24;

	label2:

	return $B9869413eae86beb;
	goto label33;

	label4:

	$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` WHERE `type` = ? ORDER BY `genre_id` ASC;', $A7d54b094ae83c95);

	label8:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label2;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['genre_id']] = $Fb9da1713bff19ce;
	}

	goto label2;

	label24:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];

	if ($A7d54b094ae83c95) {
		goto label4;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` ORDER BY `genre_id` ASC;');
	goto label8;
	goto label4;

	label33:
}

function D8EC9843Fc5457DF($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `watch_folders` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function a46356E1B5ED3eC6($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `tmdb_id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function f5E03449E4B2215C()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` ORDER BY `title` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function A2297542d8Bd35F6($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function Dda34Be3370CDfb2($D7f17b03d6498825, $rLanguage = NULL)
{
	goto label29;

	label3:

	foreach ($F36e7d4d6716c100['results'] as $Ad03ea8872dcd56e) {
		if (!((strtolower($Ad03ea8872dcd56e['type']) == 'trailer') && (strtolower($Ad03ea8872dcd56e['site']) == 'youtube'))) {
			goto label25;
		}

		return $Ad03ea8872dcd56e['key'];

		label25:
	}

	return '';
	goto label75;

	label29:

	$A7ca171405b19571 = 'https://api.themoviedb.org/3/tv/' . intval($D7f17b03d6498825) . '/videos?api_key=' . urlencode(XUI::$rSettings['tmdb_api_key']);

	if ($rLanguage) {
		goto label61;
	}

	if (!(0 < strlen(XUI::$rSettings['tmdb_language']))) {
		goto label59;
	}

	$A7ca171405b19571 .= '&language=' . urlencode(XUI::$rSettings['tmdb_language']);

	label59:

	goto label60;

	label60:

	goto label66;

	label61:

	$A7ca171405b19571 .= '&language=' . urlencode($rLanguage);

	label66:

	$F36e7d4d6716c100 = json_decode(file_get_contents($A7ca171405b19571), true);
	goto label3;

	label75:
}

function AdC21eF12c018A4c($ff5cf44f96903d64, $fd093b5358e9a519)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id`, `username`, `password`, `member_group_id`, `status` FROM `users` WHERE `username` = ? LIMIT 1;', $ff5cf44f96903d64);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label27;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();

	if (!(deba522c14d0644c($fd093b5358e9a519, $Fb9da1713bff19ce['password']) == $Fb9da1713bff19ce['password'])) {
		goto label27;
	}

	return $Fb9da1713bff19ce;

	label27:

	return NULL;
}

function DEcBAB9141f9ee50()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `id`, `title` FROM `streams_series` ORDER BY `title` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label23;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	label23:

	return $B9869413eae86beb;
}

function f942Fc1EeF457735($c1897a2406fd3d93)
{
	goto label31;

	label2:

	$Cd1d606253170dc5 = floor($d4e02c53acd0292a / $F04e0cbd97c52acc);
	$C3f0a96f535e6a09 = $d4e02c53acd0292a % $F04e0cbd97c52acc;
	$D3ff76dbac31c150 = floor($C3f0a96f535e6a09 / $Febcd3d9bf97d1f8);
	$Eab0679b6876680a = $C3f0a96f535e6a09 % $Febcd3d9bf97d1f8;
	$B6b88d51b02556c8 = ceil($Eab0679b6876680a);
	goto label21;

	label21:

	return ['d' => (int) $D188d06e19bee042, 'h' => (int) $Cd1d606253170dc5, 'm' => (int) $D3ff76dbac31c150, 's' => (int) $B6b88d51b02556c8];
	goto label44;

	label31:

	$Febcd3d9bf97d1f8 = 60;
	$F04e0cbd97c52acc = 60 * $Febcd3d9bf97d1f8;
	$E604446139f9a9de = 24 * $F04e0cbd97c52acc;
	$D188d06e19bee042 = floor($c1897a2406fd3d93 / $E604446139f9a9de);
	$d4e02c53acd0292a = $c1897a2406fd3d93 % $E604446139f9a9de;
	goto label2;

	label44:
}

function F97e4b199845efe6($Abcb228699a7f743)
{
	goto label2;

	label2:

	global $b62d6460eb33ea07;
	require_once XUI_HOME . 'includes/libs/tmdb.php';
	$b62d6460eb33ea07->query('SELECT `tmdb_id`, `tmdb_language` FROM `streams_series` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label56;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	goto label69;

	label20:

	foreach ($A29d8a2356bd9140 as $Bb9fda5ebf825f11) {
		$Bb9fda5ebf825f11['cover'] = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $Bb9fda5ebf825f11['poster_path'];

		if (!XUI::$rSettings['download_images']) {
			goto label38;
		}

		$Bb9fda5ebf825f11['cover'] = XUI::CCCee53491F4AF9c($Bb9fda5ebf825f11['cover']);

		label38:

		$Bb9fda5ebf825f11['cover_big'] = $Bb9fda5ebf825f11['cover'];
		unset($Bb9fda5ebf825f11['poster_path']);
		$B9869413eae86beb[] = $Bb9fda5ebf825f11;
	}

	$b62d6460eb33ea07->query('UPDATE `streams_series` SET `seasons` = ? WHERE `id` = ?;', json_encode($B9869413eae86beb, JSON_UNESCAPED_UNICODE), $Abcb228699a7f743);

	label56:

	goto label121;

	label57:

	goto label67;

	label58:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label67:

	goto label108;
	goto label100;

	label69:

	$D7f17b03d6498825 = $Fb9da1713bff19ce['tmdb_id'];

	if (!(0 < strlen($D7f17b03d6498825))) {
		goto label56;
	}

	if (0 < strlen($Fb9da1713bff19ce['tmdb_language'])) {
		goto label100;
	}

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label58;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label57;

	label100:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], $Fb9da1713bff19ce['tmdb_language']);

	label108:

	$B9869413eae86beb = [];
	$A29d8a2356bd9140 = json_decode($b41097c951ee83d3->getTVShow($D7f17b03d6498825)->getJSON(), true)['seasons'];
	goto label20;

	label121:
}

function f8D3626b322aAf7F($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('INSERT INTO `watch_refresh`(`type`, `stream_id`, `status`) VALUES(4, ?, 0);', $Abcb228699a7f743);
}

function D60f670923AdBF13()
{
	return strtolower(basename(get_included_files()[0], '.php'));
}

function sortArrayByArray($F647a429f8089f01, $C3552efd343ac0d5)
{
	if (!(empty($F647a429f8089f01) || empty($C3552efd343ac0d5))) {
	}
	else {
		return [];
	}

	$e6570651eec8c25e = [];

	foreach ($C3552efd343ac0d5 as $ce0840c647e1bbc7) {
		if (!(($Bb672d1983256a93 = array_search($ce0840c647e1bbc7, $F647a429f8089f01)) !== false)) {
			goto label26;
		}

		$e6570651eec8c25e[] = $ce0840c647e1bbc7;
		unset($F647a429f8089f01[$Bb672d1983256a93]);

		label26:
	}

	return $e6570651eec8c25e + $F647a429f8089f01;
}

function D598209935a1afC3($ce0840c647e1bbc7)
{
	goto label7;

	label2:

	return trim($ce0840c647e1bbc7);
	goto label59;

	label7:

	if (!($ce0840c647e1bbc7 == '')) {
		goto label12;
	}

	return '';

	label12:

	$ce0840c647e1bbc7 = str_replace('&#032;', ' ', stripslashes($ce0840c647e1bbc7));
	$ce0840c647e1bbc7 = str_replace(["\r\n", "\n\r", "\r"], "\n", $ce0840c647e1bbc7);
	goto label28;

	label28:

	$ce0840c647e1bbc7 = str_replace('<!--', '&#60;&#33;--', $ce0840c647e1bbc7);
	$ce0840c647e1bbc7 = str_replace('-->', '--&#62;', $ce0840c647e1bbc7);
	$ce0840c647e1bbc7 = str_ireplace('<script', '&#60;script', $ce0840c647e1bbc7);
	$ce0840c647e1bbc7 = preg_replace('/&amp;#([0-9]+);/s', '&#\\1;', $ce0840c647e1bbc7);
	$ce0840c647e1bbc7 = preg_replace('/&#(\\d+?)([^\\d;])/i', '&#\\1;\\2', $ce0840c647e1bbc7);
	goto label2;

	label59:
}

function C3361271347717fC($ee6d1fc5d801b43f)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `streams_stats` WHERE `stream_id` = ?;', $ee6d1fc5d801b43f);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label22;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['type']] = $Fb9da1713bff19ce;
	}

	label22:

	foreach (['today', 'week', 'month', 'all'] as $A7d54b094ae83c95) {
		if (isset($B9869413eae86beb[$A7d54b094ae83c95])) {
			goto label30;
		}

		$B9869413eae86beb[$A7d54b094ae83c95] = ['rank' => 0, 'users' => 0, 'connections' => 0, 'time' => 0];

		label30:
	}

	return $B9869413eae86beb;
}

function forceWatch($C082ca9ed03f473c, $Ca501e1e166a2b22)
{
	a730c6de034Ba241($C082ca9ed03f473c, ['action' => 'watch_force', 'id' => $Ca501e1e166a2b22]);
}

function forcePlex($C082ca9ed03f473c, $d646ff8e6c81b7df)
{
	A730C6De034ba241($C082ca9ed03f473c, ['action' => 'plex_force', 'id' => $d646ff8e6c81b7df]);
}

function Fd0E20dFf7028A69($C082ca9ed03f473c)
{
	a730C6De034bA241($C082ca9ed03f473c, ['action' => 'free_temp']);
}

function dde85BB00b3a8Ad3($C082ca9ed03f473c)
{
	A730C6DE034Ba241($C082ca9ed03f473c, ['action' => 'free_streams']);
}

function probeSource($C082ca9ed03f473c, $A7ca171405b19571, $Ecc2c91f94cb4fcb = NULL, $A1f381c3d6825384 = NULL, $Ba4d67a1ede88759 = NULL, $df59d69b3ccd0f39 = NULL)
{
	return json_decode(A730c6DE034Ba241($C082ca9ed03f473c, ['action' => 'probe', 'url' => $A7ca171405b19571, 'user_agent' => $Ecc2c91f94cb4fcb, 'http_proxy' => $A1f381c3d6825384, 'cookies' => $Ba4d67a1ede88759, 'headers' => $df59d69b3ccd0f39], 30), true);
}

function DF7F787e9f296801($C082ca9ed03f473c)
{
	goto label71;

	label2:

	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `type`, `vframes_pid` FROM `streams` WHERE `vframes_server_id` = ?;', $C082ca9ed03f473c);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label29;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['vframes_pid']] = ['id' => $Fb9da1713bff19ce['id'], 'title' => $Fb9da1713bff19ce['stream_display_name'], 'type' => $Fb9da1713bff19ce['type'], 'pid_type' => 'vframes'];
	}

	goto label29;

	label29:

	if (XUI::$rSettings['redis_handler']) {
		goto label127;
	}

	$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`stream_display_name`, `streams`.`type`, `lines_live`.`pid` FROM `lines_live` LEFT JOIN `streams` ON `streams`.`id` = `lines_live`.`stream_id` WHERE `lines_live`.`server_id` = ?;', $C082ca9ed03f473c);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label126;
	}

	goto label110;

	label44:

	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `type`, `tv_archive_pid` FROM `streams` WHERE `tv_archive_server_id` = ?;', $C082ca9ed03f473c);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label2;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['tv_archive_pid']] = ['id' => $Fb9da1713bff19ce['id'], 'title' => $Fb9da1713bff19ce['stream_display_name'], 'type' => $Fb9da1713bff19ce['type'], 'pid_type' => 'timeshift'];
	}

	goto label2;

	label71:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`stream_display_name`, `streams`.`type`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`delay_pid` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams_servers`.`server_id` = ?;', $C082ca9ed03f473c);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label44;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		foreach (['pid', 'monitor_pid', 'delay_pid'] as $c04a7f76854e4e4e) {
			if (!$Fb9da1713bff19ce[$c04a7f76854e4e4e]) {
				goto label105;
			}

			$B9869413eae86beb[$Fb9da1713bff19ce[$c04a7f76854e4e4e]] = ['id' => $Fb9da1713bff19ce['id'], 'title' => $Fb9da1713bff19ce['stream_display_name'], 'type' => $Fb9da1713bff19ce['type'], 'pid_type' => $c04a7f76854e4e4e];

			label105:
		}
	}

	goto label44;

	label110:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['pid']] = ['id' => $Fb9da1713bff19ce['id'], 'title' => $Fb9da1713bff19ce['stream_display_name'], 'type' => $Fb9da1713bff19ce['type'], 'pid_type' => 'activity'];
	}

	label126:

	goto label165;

	label127:

	goto label128;

	label128:

	$dec36723d7be7c49 = $b42f717d234fde64 = [];
	$A1a73957c6feb09a = XUI::d72C0F56211b6f7C(NULL, $C082ca9ed03f473c, NULL, true, false, false);

	foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
		if (in_array($Fd10d59f87b19e71['stream_id'], $dec36723d7be7c49)) {
			goto label155;
		}

		$dec36723d7be7c49[] = intval($Fd10d59f87b19e71['stream_id']);

		label155:
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label189;
	}

	goto label167;

	label165:

	return $B9869413eae86beb;
	goto label208;

	label167:

	$b62d6460eb33ea07->query('SELECT `id`, `type`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b42f717d234fde64[$Fb9da1713bff19ce['id']] = [$Fb9da1713bff19ce['stream_display_name'], $Fb9da1713bff19ce['type']];
	}

	label189:

	foreach ($A1a73957c6feb09a as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['pid']] = ['id' => $Fb9da1713bff19ce['stream_id'], 'title' => $b42f717d234fde64[$Fb9da1713bff19ce['stream_id']][0], 'type' => $b42f717d234fde64[$Fb9da1713bff19ce['stream_id']][1], 'pid_type' => 'activity'];
	}

	goto label165;

	label208:
}

function a1DB5e3C7d45b85f($C5ea9f09c3a6ffee, $Fcb4a7d9a9652882 = 5)
{
	return round(($C5ea9f09c3a6ffee + ($Fcb4a7d9a9652882 / 2)) / $Fcb4a7d9a9652882) * $Fcb4a7d9a9652882;
}

function C62A8993f9BCa434($C082ca9ed03f473c, $F48d5724f3b4ec96)
{
	$Aa1ed9476fca75e9 = XUI::$rServers[intval($C082ca9ed03f473c)]['api_url_ip'] . '&action=getFile&filename=' . urlencode($F48d5724f3b4ec96);
	$C6671ac66a4f1c57 = 'timeout 10 ' . XUI::$rFFPROBE . ' -user_agent "Mozilla/5.0" -show_streams -v quiet "' . $Aa1ed9476fca75e9 . '" -of json';
	return json_decode(shell_exec($C6671ac66a4f1c57), true);
}

function B647618532763671($C082ca9ed03f473c)
{
	$Aa1ed9476fca75e9 = XUI::$rServers[intval($C082ca9ed03f473c)]['api_url_ip'] . '&action=getFile&filename=' . urlencode(BIN_PATH . 'certbot/logs/xui.log');
	return json_decode(file_get_contents($Aa1ed9476fca75e9), true);
}

function A28a55B8f823E432($Abcb228699a7f743, $Cc2b5dfe75dc164b = 86400)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `servers_stats` WHERE `server_id` = ? AND UNIX_TIMESTAMP() - `time` <= ? ORDER BY `time` DESC;', $Abcb228699a7f743, $Cc2b5dfe75dc164b);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label23;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label23:

	return $B9869413eae86beb;
}

function b23579CdE727d32F($Abcb228699a7f743)
{
	goto label2;

	label2:

	global $b62d6460eb33ea07;
	$fb719dae9595b9fa = a752238c4005cbbc($Abcb228699a7f743);
	if (!($fb719dae9595b9fa && $fb719dae9595b9fa['can_delete'])) {
		goto label71;
	}

	$b62d6460eb33ea07->query('SELECT `id`, `groups` FROM `users_packages` WHERE JSON_CONTAINS(`groups`, ?, \'$\');', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Fb9da1713bff19ce['groups'] = json_decode($Fb9da1713bff19ce['groups'], true);

		if (!(($Bb672d1983256a93 = array_search($Abcb228699a7f743, $Fb9da1713bff19ce['groups'])) !== false)) {
			goto label41;
		}

		unset($Fb9da1713bff19ce['groups'][$Bb672d1983256a93]);

		label41:

		$b62d6460eb33ea07->query('UPDATE `users_packages` SET `groups` = \'[' . implode(',', array_map('intval', $Fb9da1713bff19ce['groups'])) . ']\' WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	}

	goto label62;

	label60:

	return false;
	goto label72;

	label62:

	$b62d6460eb33ea07->query('UPDATE `users` SET `member_group_id` = 0 WHERE `member_group_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `users_groups` WHERE `group_id` = ?;', $Abcb228699a7f743);
	return true;

	label71:

	goto label60;

	label72:
}

function Eb37711a9250A829($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$cc386f9ba082650e = fddf8da6ab3fe47b($Abcb228699a7f743);

	if (!$cc386f9ba082650e) {
		goto label18;
	}

	$b62d6460eb33ea07->query('UPDATE `lines` SET `package_id` = null WHERE `package_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `users_packages` WHERE `id` = ?;', $Abcb228699a7f743);
	return true;

	label18:

	return false;
}

function deleteProvider($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$A2ff75fed18f4512 = getStreamProvider($Abcb228699a7f743);

	if (!$A2ff75fed18f4512) {
		goto label18;
	}

	$b62d6460eb33ea07->query('DELETE FROM `providers` WHERE `id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `providers_streams` WHERE `provider_id` = ?;', $Abcb228699a7f743);
	return true;

	label18:

	return false;
}

function d7eae25709b24003($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$a2ebb817d88c810b = getepg($Abcb228699a7f743);

	if (!$a2ebb817d88c810b) {
		goto label26;
	}

	$b62d6460eb33ea07->query('DELETE FROM `epg` WHERE `id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `epg_channels` WHERE `epg_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `epg_data` WHERE `epg_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('UPDATE `streams` SET `epg_id` = null, `channel_id` = null, `epg_lang` = null WHERE `epg_id` = ?;', $Abcb228699a7f743);
	return true;

	label26:

	return false;
}

function EfA9379345817B87($Abcb228699a7f743, $cf1eeb2c7a026e97 = NULL)
{
	goto label38;

	label3:

	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `server_id` = ? WHERE `server_id` = ?;', $cf1eeb2c7a026e97, $Abcb228699a7f743);

	if (XUI::$rSettings['redis_handler']) {
		goto label17;
	}

	$b62d6460eb33ea07->query('UPDATE `lines_live` SET `server_id` = ? WHERE `server_id` = ?;', $cf1eeb2c7a026e97, $Abcb228699a7f743);

	label17:

	goto label20;

	label18:

	return false;
	goto label83;

	label20:

	$b62d6460eb33ea07->query('UPDATE `lines_activity` SET `server_id` = ? WHERE `server_id` = ?;', $cf1eeb2c7a026e97, $Abcb228699a7f743);

	label25:

	$b62d6460eb33ea07->query('UPDATE `servers` SET `parent_id` = NULL, `enabled` = 0 WHERE `server_type` = 1 AND `parent_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `servers_stats` WHERE `server_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `servers` WHERE `id` = ?;', $Abcb228699a7f743);
	goto label57;

	label38:

	global $b62d6460eb33ea07;
	$Ec379295dc7029e6 = cbb79f154db723a8($Abcb228699a7f743);
	if (!($Ec379295dc7029e6 && !$Ec379295dc7029e6['is_main'])) {
		goto label68;
	}

	if ($cf1eeb2c7a026e97) {
		goto label3;
	}

	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `server_id` = ?;', $Abcb228699a7f743);
	goto label69;

	label57:

	if (!($Ec379295dc7029e6['server_type'] == 0)) {
		goto label67;
	}

	Xui\Functions::revokePrivileges('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $Ec379295dc7029e6['server_ip']);

	label67:

	return true;

	label68:

	goto label18;

	label69:

	if (XUI::$rSettings['redis_handler']) {
		goto label77;
	}

	$b62d6460eb33ea07->query('DELETE FROM `lines_live` WHERE `server_id` = ?;', $Abcb228699a7f743);

	label77:

	$b62d6460eb33ea07->query('UPDATE `lines_activity` SET `server_id` = 0 WHERE `server_id` = ?;', $Abcb228699a7f743);
	goto label25;
	goto label3;

	label83:
}

function deleteLines($Fe53bcd53690fff4)
{
	goto label77;

	label2:

	if (!(0 < count($E6d1c32e34967baa))) {
		goto label21;
	}

	$b62d6460eb33ea07->query('UPDATE `lines` SET `pair_id` = null WHERE `id` = (' . implode(',', $E6d1c32e34967baa) . ');');
	XUI::updateLines($E6d1c32e34967baa);

	label21:

	goto label74;

	label22:

	$b62d6460eb33ea07->query('DELETE FROM `lines_logs` WHERE `user_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('UPDATE `lines_activity` SET `user_id` = 0 WHERE `user_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$E6d1c32e34967baa = [];
	$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `pair_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!((0 < $Fb9da1713bff19ce['id']) && !in_array($Fb9da1713bff19ce['id'], $E6d1c32e34967baa))) {
			goto label71;
		}

		$E6d1c32e34967baa[] = $Fb9da1713bff19ce['id'];

		label71:
	}

	goto label2;

	label74:

	return true;

	label75:

	return false;
	goto label102;

	label77:

	global $b62d6460eb33ea07;
	$Fe53bcd53690fff4 = confirmIDs($Fe53bcd53690fff4);

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label75;
	}

	XUI::deleteLines($Fe53bcd53690fff4);
	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label22;

	label102:
}

function Dd81518d00a2dd90($Abcb228699a7f743, $f18881da97d4ada1 = false, $C70e11844586b07f = true, $F67f0149dad79ae0 = false)
{
	goto label68;

	label5:

	$b62d6460eb33ea07->query('SELECT `mag_id` FROM `mag_devices` WHERE `user_id` = ?;', $F25600b52c026389['user']['id']);
	$d353a4da8a0bb857 += $b62d6460eb33ea07->num_rows();
	$b62d6460eb33ea07->query('SELECT `device_id` FROM `enigma2_devices` WHERE `user_id` = ?;', $F25600b52c026389['user']['id']);
	$d353a4da8a0bb857 += $b62d6460eb33ea07->num_rows();

	if (!($d353a4da8a0bb857 == 0)) {
		goto label35;
	}

	goto label28;

	label28:

	c24b1b1FDad37c5E($F25600b52c026389['user']['id'], $f18881da97d4ada1, $C70e11844586b07f);

	label35:

	goto label50;

	label36:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `is_mag` = 0 WHERE `id` = ?;', $F25600b52c026389['user']['id']);
	goto label45;

	label43:

	return false;
	goto label85;

	label45:

	XUI::cCb5075C679E7314($F25600b52c026389['user']['id']);

	label50:

	return true;

	label51:

	goto label43;

	label52:

	$b62d6460eb33ea07->query('DELETE FROM `mag_events` WHERE `mag_device_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `mag_logs` WHERE `mag_id` = ?;', $Abcb228699a7f743);

	if (!$F25600b52c026389['user']) {
		goto label50;
	}

	if ($F67f0149dad79ae0) {
		goto label36;
	}

	$d353a4da8a0bb857 = 0;
	goto label5;

	label68:

	global $b62d6460eb33ea07;
	$F25600b52c026389 = A32d85AEfA28959D($Abcb228699a7f743);

	if (!$F25600b52c026389) {
		goto label51;
	}

	$b62d6460eb33ea07->query('DELETE FROM `mag_devices` WHERE `mag_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `mag_claims` WHERE `mag_id` = ?;', $Abcb228699a7f743);
	goto label52;

	label85:
}

function deleteMAGs($Fe53bcd53690fff4)
{
	goto label4;

	label2:

	return false;
	goto label85;

	label4:

	global $b62d6460eb33ea07;
	$Fe53bcd53690fff4 = confirmIDs($Fe53bcd53690fff4);

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label2;
	}

	$ec80784a08a705f6 = [];
	$b62d6460eb33ea07->query('SELECT `user_id` FROM `mag_devices` WHERE `mag_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label48;

	label27:

	$b62d6460eb33ea07->query('DELETE FROM `mag_logs` WHERE `mag_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');

	if (!(0 < count($ec80784a08a705f6))) {
		goto label46;
	}

	deletelines($ec80784a08a705f6);

	label46:

	return true;
	goto label2;

	label48:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$ec80784a08a705f6[] = $Fb9da1713bff19ce['user_id'];
	}

	$b62d6460eb33ea07->query('DELETE FROM `mag_devices` WHERE `mag_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `mag_claims` WHERE `mag_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `mag_events` WHERE `mag_device_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label27;

	label85:
}

function a486863E198221fa($Abcb228699a7f743, $f18881da97d4ada1 = false, $C70e11844586b07f = true, $F67f0149dad79ae0 = false)
{
	goto label29;

	label5:

	return true;

	label6:

	return false;
	goto label76;

	label8:

	$b62d6460eb33ea07->query('SELECT `device_id` FROM `enigma2_devices` WHERE `user_id` = ?;', $efad0bbefceb72c4['user']['id']);
	$d353a4da8a0bb857 += $b62d6460eb33ea07->num_rows();

	if (!($d353a4da8a0bb857 == 0)) {
		goto label28;
	}

	c24b1b1fdAD37C5e($efad0bbefceb72c4['user']['id'], $f18881da97d4ada1, $C70e11844586b07f);

	label28:

	goto label63;

	label29:

	global $b62d6460eb33ea07;
	$efad0bbefceb72c4 = ef70A93E98FB7Ce9($Abcb228699a7f743);

	if (!$efad0bbefceb72c4) {
		goto label6;
	}

	$b62d6460eb33ea07->query('DELETE FROM `enigma2_devices` WHERE `device_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `enigma2_actions` WHERE `device_id` = ?;', $Abcb228699a7f743);
	goto label46;

	label46:

	if (!$efad0bbefceb72c4['user']) {
		goto label5;
	}

	if ($F67f0149dad79ae0) {
		goto label64;
	}

	$d353a4da8a0bb857 = 0;
	$b62d6460eb33ea07->query('SELECT `mag_id` FROM `mag_devices` WHERE `user_id` = ?;', $efad0bbefceb72c4['user']['id']);
	$d353a4da8a0bb857 += $b62d6460eb33ea07->num_rows();
	goto label8;

	label63:

	goto label75;

	label64:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `is_e2` = 0 WHERE `id` = ?;', $efad0bbefceb72c4['user']['id']);
	XUI::cCb5075c679E7314($efad0bbefceb72c4['user']['id']);

	label75:

	goto label5;

	label76:
}

function deleteEnigmas($Fe53bcd53690fff4)
{
	goto label43;

	label2:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$ec80784a08a705f6[] = $Fb9da1713bff19ce['user_id'];
	}

	$b62d6460eb33ea07->query('DELETE FROM `enigma2_devices` WHERE `device_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `enigma2_actions` WHERE `device_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');

	if (!(0 < count($ec80784a08a705f6))) {
		goto label40;
	}

	goto label37;

	label37:

	deletelines($ec80784a08a705f6);

	label40:

	return true;

	label41:

	return false;
	goto label66;

	label43:

	global $b62d6460eb33ea07;
	$Fe53bcd53690fff4 = confirmIDs($Fe53bcd53690fff4);

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label41;
	}

	$ec80784a08a705f6 = [];
	$b62d6460eb33ea07->query('SELECT `user_id` FROM `enigma2_devices` WHERE `device_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label2;

	label66:
}

function E14531eb75C10786()
{
	return '&copy; 2021 <img height=\'20px\' style=\'padding-left: 10px; padding-right: 10px; margin-top: -2px;\' class=\'whiteout\' src=\'./assets/images/logo-topbar.png\' /> v' . XUI_VERSION;
}

function D537d94b49D06806()
{
	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'tools.php "bouquets" > /dev/null 2>/dev/null &');
}

function F314129A46C64Db0($Abcb228699a7f743)
{
	goto label2;

	label2:

	global $b62d6460eb33ea07;
	$f155fef57262b32a = b47fB5320E43f112($Abcb228699a7f743);

	if (!$f155fef57262b32a) {
		goto label112;
	}

	$dec36723d7be7c49 = [
		[],
		[]
	];
	$b62d6460eb33ea07->query('SELECT `id` FROM `streams`;');
	goto label213;

	label15:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label34;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[1][] = intval($Fb9da1713bff19ce['id']);
	}

	label34:

	$B8630a7c92543099 = [
		[],
		[],
		[],
		[]
	];
	goto label113;

	label36:

	foreach (json_decode($f155fef57262b32a['bouquet_series'], true) as $Abcb228699a7f743) {
		if (!in_array(intval($Abcb228699a7f743), $dec36723d7be7c49[1])) {
			goto label61;
		}

		$B8630a7c92543099[3][] = intval($Abcb228699a7f743);

		label61:
	}

	$b62d6460eb33ea07->query('UPDATE `bouquets` SET `bouquet_channels` = \'[' . implode(',', array_map('intval', $B8630a7c92543099[0])) . ']\', `bouquet_movies` = \'[' . implode(',', array_map('intval', $B8630a7c92543099[1])) . ']\', `bouquet_radios` = \'[' . implode(',', array_map('intval', $B8630a7c92543099[2])) . ']\', `bouquet_series` = \'[' . implode(',', array_map('intval', $B8630a7c92543099[3])) . ']\' WHERE `id` = ?;', $f155fef57262b32a['id']);

	label112:

	goto label236;

	label113:

	foreach (json_decode($f155fef57262b32a['bouquet_channels'], true) as $Abcb228699a7f743) {
		if (!((0 < intval($Abcb228699a7f743)) && in_array(intval($Abcb228699a7f743), $dec36723d7be7c49[0]))) {
			goto label144;
		}

		$B8630a7c92543099[0][] = intval($Abcb228699a7f743);

		label144:
	}

	foreach (json_decode($f155fef57262b32a['bouquet_movies'], true) as $Abcb228699a7f743) {
		if (!((0 < intval($Abcb228699a7f743)) && in_array(intval($Abcb228699a7f743), $dec36723d7be7c49[0]))) {
			goto label177;
		}

		$B8630a7c92543099[1][] = intval($Abcb228699a7f743);

		label177:
	}

	foreach (json_decode($f155fef57262b32a['bouquet_radios'], true) as $Abcb228699a7f743) {
		if (!((0 < intval($Abcb228699a7f743)) && in_array(intval($Abcb228699a7f743), $dec36723d7be7c49[0]))) {
			goto label210;
		}

		$B8630a7c92543099[2][] = intval($Abcb228699a7f743);

		label210:
	}

	goto label36;

	label213:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label232;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[0][] = intval($Fb9da1713bff19ce['id']);
	}

	label232:

	$b62d6460eb33ea07->query('SELECT `id` FROM `streams_series`;');
	goto label15;

	label236:
}

function AdD0B2c53b2714a1()
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT MAX(`order`) AS `order` FROM `streams`;');

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label19;
	}

	return intval($b62d6460eb33ea07->get_row()['order']) + 1;

	label19:

	return 0;
}

function Cda6Bf7272Fcebb4($D2cf30902076ecee)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_episodes` WHERE `series_id` = ? ORDER BY `season_num` ASC, `episode_num` ASC;', $D2cf30902076ecee);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label43;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b62d6460eb33ea07->query('SELECT `stream_source` FROM `streams` WHERE `id` = ?;', $Fb9da1713bff19ce['stream_id']);

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label41;
		}

		$fd51b5505224fc7c = json_decode($b62d6460eb33ea07->get_row()['stream_source'], true)[0];
		$B9869413eae86beb[] = $fd51b5505224fc7c;

		label41:
	}

	label43:

	return $B9869413eae86beb;
}

function D1132f737572929c($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `streams_categories` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return false;
}

function a32D85AEfa28959d($Abcb228699a7f743)
{
	goto label24;

	label2:

	return [];
	goto label45;

	label4:

	$b62d6460eb33ea07->query('SELECT `pair_id` FROM `lines` WHERE `id` = ?;', $Fb9da1713bff19ce['user_id']);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label22;
	}

	$Fb9da1713bff19ce['paired'] = b5ad1d95a92ce732($Fb9da1713bff19ce['user']['pair_id']);

	label22:

	return $Fb9da1713bff19ce;
	goto label2;

	label24:

	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `mag_devices` WHERE `mag_id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label2;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$Fb9da1713bff19ce['user'] = b5ad1d95a92ce732($Fb9da1713bff19ce['user_id']);
	goto label4;

	label45:
}

function EF70a93e98fB7Ce9($Abcb228699a7f743)
{
	goto label24;

	label2:

	$b62d6460eb33ea07->query('SELECT `pair_id` FROM `lines` WHERE `id` = ?;', $Fb9da1713bff19ce['user_id']);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label20;
	}

	$Fb9da1713bff19ce['paired'] = b5ad1d95a92ce732($Fb9da1713bff19ce['user']['pair_id']);

	label20:

	return $Fb9da1713bff19ce;
	goto label22;

	label22:

	return [];
	goto label45;

	label24:

	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `enigma2_devices` WHERE `device_id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label22;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$Fb9da1713bff19ce['user'] = b5ad1d95a92ce732($Fb9da1713bff19ce['user_id']);
	goto label2;

	label45:
}

function eaf7B7a8a760eD43($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `enigma2_devices` WHERE `user_id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return '';
}

function dEf05EcDb21b0a50($Abcb228699a7f743)
{
	goto label5;

	label2:

	return $Fb9da1713bff19ce;

	label3:

	return NULL;
	goto label74;

	label5:

	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `tickets` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label3;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$Fb9da1713bff19ce['replies'] = [];
	goto label22;

	label22:

	$Fb9da1713bff19ce['title'] = htmlspecialchars($Fb9da1713bff19ce['title']);
	$b62d6460eb33ea07->query('SELECT * FROM `tickets_replies` WHERE `ticket_id` = ? ORDER BY `date` ASC;', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Da1012a3a401fd39) {
		$Da1012a3a401fd39['message'] = htmlspecialchars($Da1012a3a401fd39['message']);

		if (!(strlen($Da1012a3a401fd39['message']) < 80)) {
			goto label62;
		}

		$Da1012a3a401fd39['message'] .= str_repeat('&nbsp; ', 80 - strlen($Da1012a3a401fd39['message']));

		label62:

		$Fb9da1713bff19ce['replies'][] = $Da1012a3a401fd39;
	}

	$Fb9da1713bff19ce['user'] = ba89228dc958ce05($Fb9da1713bff19ce['member_id']);
	goto label2;

	label74:
}

function A298662C65177297($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `blocked_isps` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function Dd77C27786c11aAd($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `rtmp_ips` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function C8e66f17258AC811()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `epg` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label23;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	label23:

	return $B9869413eae86beb;
}

function A76a6c90A3e6546b($A7d54b094ae83c95 = 'live')
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `streams_categories` WHERE `category_type` = ? ORDER BY `cat_order` ASC;', $A7d54b094ae83c95);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label25;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	label25:

	return $B9869413eae86beb;
}

function FB3EA84C44Ba34ec($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `streams` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return false;
}

function c43C3ce5c5838F3D($Abcb228699a7f743)
{
	goto label21;

	label2:

	if (!file_exists(FLOOD_TMP_PATH . 'block_' . $Fb9da1713bff19ce['ip'])) {
		goto label19;
	}

	unlink(FLOOD_TMP_PATH . 'block_' . $Fb9da1713bff19ce['ip']);

	label19:

	return true;

	label20:

	goto label40;

	label21:

	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id`, `ip` FROM `blocked_ips` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label20;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$b62d6460eb33ea07->query('DELETE FROM `blocked_ips` WHERE `id` = ?;', $Abcb228699a7f743);
	goto label2;

	label40:

	return false;
	goto label42;

	label42:
}

function ebA75CECAD9d3196($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id` FROM `blocked_isps` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label17;
	}

	$b62d6460eb33ea07->query('DELETE FROM `blocked_isps` WHERE `id` = ?;', $Abcb228699a7f743);
	return true;

	label17:

	return false;
}

function aB10108edD7Ce309($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id` FROM `blocked_uas` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label17;
	}

	$b62d6460eb33ea07->query('DELETE FROM `blocked_uas` WHERE `id` = ?;', $Abcb228699a7f743);
	return true;

	label17:

	return false;
}

function bae6b79f4A41EE46($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id` FROM `access_codes` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	$b62d6460eb33ea07->query('DELETE FROM `access_codes` WHERE `id` = ?;', $Abcb228699a7f743);
	D670A8140995cD6F();
	return true;

	label19:

	return false;
}

function Eb09d3583Fd7e3d6($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id` FROM `hmac_keys` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label17;
	}

	$b62d6460eb33ea07->query('DELETE FROM `hmac_keys` WHERE `id` = ?;', $Abcb228699a7f743);
	return true;

	label17:

	return false;
}

function F2476161E17b4aa7($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id` FROM `rtmp_ips` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label17;
	}

	$b62d6460eb33ea07->query('DELETE FROM `rtmp_ips` WHERE `id` = ?;', $Abcb228699a7f743);
	return true;

	label17:

	return false;
}

function ed770984CFB04dFa($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id` FROM `watch_folders` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label17;
	}

	$b62d6460eb33ea07->query('DELETE FROM `watch_folders` WHERE `id` = ?;', $Abcb228699a7f743);
	return true;

	label17:

	return false;
}

function d6B24a18E97A936D($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id` FROM `tickets` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label21;
	}

	$b62d6460eb33ea07->query('DELETE FROM `tickets` WHERE `id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `tickets_replies` WHERE `ticket_id` = ?;', $Abcb228699a7f743);
	return true;

	label21:

	return false;
}

function e167d33DBF12D418($f7107e3a92443147)
{
	goto label2;

	label2:

	global $b62d6460eb33ea07;
	global $f1dcaed925076e67;
	$Caf4325605347834 = ba89228dc958ce05($f7107e3a92443147);
	$db0a61ef32b89a27 = aceb5cfe4194f4f0($Caf4325605347834['member_group_id']);

	if ($f1dcaed925076e67['disable_trial']) {
		goto label30;
	}

	if (floatval($Caf4325605347834['credits']) < floatval($db0a61ef32b89a27['minimum_trial_credits'])) {
		goto label61;
	}

	goto label33;

	label28:

	return false;

	label29:

	goto label32;

	label30:

	return false;
	goto label32;

	label32:

	goto label78;

	label33:

	$f284dbe435ee25e6 = $db0a61ef32b89a27['total_allowed_gen_trials'];

	if (!(0 < $f284dbe435ee25e6)) {
		goto label59;
	}

	$e3ac90a32dc9d058 = $db0a61ef32b89a27['total_allowed_gen_in'];

	if ($e3ac90a32dc9d058 == 'hours') {
		goto label63;
	}

	$Ab13f2545dd3df14 = time() - (intval($f284dbe435ee25e6) * 3600 * 24);
	goto label62;

	label54:

	return $b62d6460eb33ea07->get_row()['count'] < $f284dbe435ee25e6;

	label59:

	return false;
	goto label29;

	label61:

	goto label28;

	label62:

	goto label71;

	label63:

	$Ab13f2545dd3df14 = time() - (intval($f284dbe435ee25e6) * 3600);

	label71:

	$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `lines` WHERE `member_id` = ? AND `created_at` >= ? AND `is_trial` = 1;', $Caf4325605347834['id'], $Ab13f2545dd3df14);
	goto label54;

	label78:
}

function a0bb5adf0F9CcC8E($f7107e3a92443147, $D9846544dffb63c9 = true, $d7bd0890458933bb = true)
{
	goto label99;

	label4:

	return $B9869413eae86beb;
	goto label117;

	label6:

	if (!file_exists(CACHE_TMP_PATH . 'permissions_' . intval($Caf4325605347834['member_group_id']))) {
		goto label37;
	}

	$B9869413eae86beb = array_merge($B9869413eae86beb, igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'permissions_' . intval($Caf4325605347834['member_group_id']))));

	label37:

	$b62d6460eb33ea07->query('SELECT * FROM `users_packages` WHERE JSON_CONTAINS(`groups`, ?, \'$\');', $Caf4325605347834['member_group_id']);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!$Fb9da1713bff19ce['is_line']) {
			goto label53;
		}

		$B9869413eae86beb['create_line'] = true;

		label53:

		if (!$Fb9da1713bff19ce['is_mag']) {
			goto label60;
		}

		$B9869413eae86beb['create_mag'] = true;

		label60:

		if (!$Fb9da1713bff19ce['is_e2']) {
			goto label67;
		}

		$B9869413eae86beb['create_enigma'] = true;

		label67:
	}

	goto label70;

	label70:

	if (!$d7bd0890458933bb) {
		goto label4;
	}

	$B9869413eae86beb['users'] = d0f5f880c2806a45($Caf4325605347834['id']);

	foreach ($B9869413eae86beb['users'] as $f7107e3a92443147 => $af8369fae2c3f851) {
		if (!($Caf4325605347834['id'] == $af8369fae2c3f851['parent'])) {
			goto label93;
		}

		$B9869413eae86beb['direct_reports'][] = $f7107e3a92443147;

		label93:

		$B9869413eae86beb['all_reports'][] = $f7107e3a92443147;
	}

	goto label4;

	label99:

	global $b62d6460eb33ea07;
	$bcfd61adc96d4b72 = round(microtime(true) * 1000);
	$B9869413eae86beb = [
		'create_line'    => false,
		'create_mag'     => false,
		'create_enigma'  => false,
		'stream_ids'     => [],
		'series_ids'     => [],
		'category_ids'   => [],
		'users'          => [],
		'direct_reports' => [],
		'all_reports'    => [],
		'report_map'     => []
	];
	$Caf4325605347834 = ba89228dc958ce05($f7107e3a92443147);

	if (!$Caf4325605347834) {
		goto label4;
	}

	goto label6;

	label117:
}

function Ab3a786B762a1806()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `hmac_keys` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label23;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	label23:

	return $B9869413eae86beb;
}

function fA460abdd5dca199($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `hmac_keys` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function CdF3aAb9a6EDdf47()
{
	$e974a8ab557c036d = [];
	$dd6d6da4a65a40fa = scandir(XUI_HOME . 'bin/nginx/conf/codes/');

	foreach ($dd6d6da4a65a40fa as $D6be258a9043b749) {
		$d88ca0c1f58e0dc1 = pathinfo($D6be258a9043b749);
		$E3f5ab103227acc2 = $d88ca0c1f58e0dc1['extension'];
		if (!(($E3f5ab103227acc2 == 'conf') && ($d88ca0c1f58e0dc1['filename'] != 'default'))) {
			goto label27;
		}

		$e974a8ab557c036d[] = $d88ca0c1f58e0dc1['filename'];

		label27:
	}

	return $e974a8ab557c036d;
}

function d670a8140995Cd6f()
{
	goto label1;

	label1:

	$Ed57ec34fa5a51be = file_get_contents(XUI_HOME . 'bin/nginx/conf/codes/template');
	shell_exec('rm -f ' . XUI_HOME . 'bin/nginx/conf/codes/*.conf');

	foreach (efadb87d8c867176() as $E28b12c74d51f0b0) {
		goto label19;

		label19:

		if (!$E28b12c74d51f0b0['enabled']) {
			goto label128;
		}

		$Bc4e53d8062ddc70 = [];

		foreach (json_decode($E28b12c74d51f0b0['whitelist'], true) as $b38e11ffdc6a3abb) {
			if (!filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP)) {
				goto label46;
			}

			$Bc4e53d8062ddc70[] = 'allow ' . $b38e11ffdc6a3abb . ';';

			label46:
		}

		if (!(0 < count($Bc4e53d8062ddc70))) {
			goto label60;
		}

		goto label58;

		label58:

		$Bc4e53d8062ddc70[] = 'deny all;';

		label60:

		$A7d54b094ae83c95 = ['admin', 'reseller', 'ministra', 'includes/api/admin', 'includes/api/reseller', 'ministra/new', 'player'][$E28b12c74d51f0b0['type']];
		$D8e8edec0fa52c7f = [500, 50, 50, 1000, 1000, 50, 500][$E28b12c74d51f0b0['type']];

		if (4 <= strlen($E28b12c74d51f0b0['code'])) {
			goto label103;
		}

		goto label76;

		label76:

		file_put_contents(XUI_HOME . 'bin/nginx/conf/codes/' . $E28b12c74d51f0b0['code'] . '.conf', str_replace(['#WHITELIST#', '#CODE#', '#TYPE#', '#BURST#'], [implode(' ', $Bc4e53d8062ddc70), $E28b12c74d51f0b0['code'] . '/', $A7d54b094ae83c95 . '/', $D8e8edec0fa52c7f], $Ed57ec34fa5a51be));
		goto label126;

		label103:

		file_put_contents(XUI_HOME . 'bin/nginx/conf/codes/' . $E28b12c74d51f0b0['code'] . '.conf', str_replace(['#WHITELIST#', '#CODE#', '#TYPE#', '#BURST#'], [implode(' ', $Bc4e53d8062ddc70), $E28b12c74d51f0b0['code'], $A7d54b094ae83c95, $D8e8edec0fa52c7f], $Ed57ec34fa5a51be));

		label126:

		goto label128;

		label128:

		goto label130;

		label130:
	}

	if (count(cdf3aab9a6eddf47()) == 0) {
		goto label178;
	}

	goto label164;

	label141:

	if (file_exists(XUI_HOME . 'bin/nginx/conf/codes/default.conf')) {
		goto label159;
	}

	file_put_contents(XUI_HOME . 'bin/nginx/conf/codes/default.conf', str_replace(['alias ', '#WHITELIST#', '#CODE#', '#TYPE#'], ['root ', '', '', 'admin'], $Ed57ec34fa5a51be));

	label159:

	fbbdc48c690d2d1b(SERVER_ID);
	goto label179;

	label164:

	if (!file_exists(XUI_HOME . 'bin/nginx/conf/codes/default.conf')) {
		goto label177;
	}

	unlink(XUI_HOME . 'bin/nginx/conf/codes/default.conf');

	label177:

	goto label159;

	label178:

	goto label141;

	label179:
}

function C9359222b3E3d256($fb361b5f838abd3c = false)
{
	goto label26;

	label2:

	$b62d6460eb33ea07->query('SELECT * FROM `access_codes` WHERE `code` = ?;', basename(dirname($_SERVER['PHP_SELF'])));

	if ($b62d6460eb33ea07->num_rows() == 1) {
		goto label21;
	}

	return NULL;
	goto label25;

	label21:

	goto label22;

	label22:

	return $b62d6460eb33ea07->get_row();

	label25:

	goto label40;

	label26:

	if ($fb361b5f838abd3c) {
		goto label38;
	}

	return basename(dirname($_SERVER['PHP_SELF']));
	goto label25;

	label38:

	global $b62d6460eb33ea07;
	goto label2;

	label40:
}

function A1d77bF3fE20056a($Ec0879f16d0cdddb)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];

	foreach ($Ec0879f16d0cdddb as $fd51b5505224fc7c) {
		$b62d6460eb33ea07->query('SELECT `id` FROM `streams` WHERE `type` IN (2,5) AND `stream_source` LIKE ? ESCAPE \'|\' LIMIT 1;', '%' . str_replace('/', '\\/', $fd51b5505224fc7c) . '"%');

		if (!($b62d6460eb33ea07->num_rows() == 1)) {
			goto label32;
		}

		$B9869413eae86beb[] = intval($b62d6460eb33ea07->get_row()['id']);

		label32:
	}

	return $B9869413eae86beb;
}

function d436a797a6BF499f()
{
	$F3f66625345f16f6 = [];

	foreach (scandir(XUI_HOME . 'backups/') as $aae4eee56abeed7c) {
		$fb361b5f838abd3c = pathinfo(XUI_HOME . 'backups/' . $aae4eee56abeed7c);

		if (!($fb361b5f838abd3c['extension'] == 'sql')) {
			goto label49;
		}

		$F3f66625345f16f6[] = ['filename' => $aae4eee56abeed7c, 'timestamp' => filemtime(XUI_HOME . 'backups/' . $aae4eee56abeed7c), 'date' => date('Y-m-d H:i:s', filemtime(XUI_HOME . 'backups/' . $aae4eee56abeed7c)), 'filesize' => filesize(XUI_HOME . 'backups/' . $aae4eee56abeed7c)];

		label49:
	}
	usort($F3f66625345f16f6, function($a5fd10913e5b22d3, $bbbe5eca9c8056cb) {
		return $a5fd10913e5b22d3['timestamp'] <=> $bbbe5eca9c8056cb['timestamp'];
	});
	return $F3f66625345f16f6;
}

function d40B5c7f5AC7E326()
{
	require_once XUI_HOME . 'includes/libs/Dropbox.php';

	try {
		$cf20aa9dec61583c = new DropboxClient();
		$cf20aa9dec61583c->SetBearerToken(['t' => XUI::$rSettings['dropbox_token']]);
		$cf20aa9dec61583c->GetFiles();
		return true;
	}
	catch (exception $E0f0519e12b13b6b) {
		return false;
	}
}

function F8af02A007c4B90C()
{
	require_once XUI_HOME . 'includes/libs/Dropbox.php';

	try {
		$cf20aa9dec61583c = new DropboxClient();
		$cf20aa9dec61583c->SetBearerToken(['t' => XUI::$rSettings['dropbox_token']]);
		$dd6d6da4a65a40fa = $cf20aa9dec61583c->GetFiles();
	}
	catch (exception $E0f0519e12b13b6b) {
		$dd6d6da4a65a40fa = [];
	}

	$F3f66625345f16f6 = [];

	foreach ($dd6d6da4a65a40fa as $D6be258a9043b749) {
		try {
			if (!(!$D6be258a9043b749->isDir && (strtolower(pathinfo($D6be258a9043b749->name)['extension']) == 'sql') && (0 < $D6be258a9043b749->size))) {
				goto label61;
			}

			$F36e7d4d6716c100 = json_decode(json_encode($D6be258a9043b749, JSON_UNESCAPED_UNICODE), true);
			$F36e7d4d6716c100['time'] = strtotime($D6be258a9043b749->server_modified);
			$F3f66625345f16f6[] = $F36e7d4d6716c100;
		}
		catch (exception $E0f0519e12b13b6b) {
		}
	}

	array_multisort(array_column($F3f66625345f16f6, 'time'), SORT_ASC, $F3f66625345f16f6);
	return $F3f66625345f16f6;
}

function EeFfdE114c5f721A($E111d28e9acc50b9, $F48d5724f3b4ec96, $a8aa4c3787a7e6dd = true)
{
	require_once XUI_HOME . 'includes/libs/Dropbox.php';
	$cf20aa9dec61583c = new DropboxClient();

	try {
		$cf20aa9dec61583c->SetBearerToken(['t' => XUI::$rSettings['dropbox_token']]);
		return $cf20aa9dec61583c->UploadFile($F48d5724f3b4ec96, $E111d28e9acc50b9, $a8aa4c3787a7e6dd);
	}
	catch (exception $E0f0519e12b13b6b) {
		return (object) ['error' => $E0f0519e12b13b6b];
	}
}

function Dbc3E29f55c945ab($A7d54b094ae83c95 = 'admin')
{
	global $_SESSION;
	$ca8155fd3c07c1ee = [
		'admin'    => ['hash', 'ip', 'code', 'verify', 'last_activity'],
		'reseller' => ['reseller', 'rip', 'rcode', 'rverify', 'rlast_activity'],
		'player'   => ['phash', 'pverify']
	];

	foreach ($ca8155fd3c07c1ee[$A7d54b094ae83c95] as $Bb672d1983256a93) {
		if (!isset($_SESSION[$Bb672d1983256a93])) {
			goto label17;
		}

		unset($_SESSION[$Bb672d1983256a93]);

		label17:
	}
}

function a35ab026c7590C99($Eb0a6a5b16cf7dd7)
{
	goto label49;

	label2:

	return is_null($ff4f71351d905f44) ? true : $ff4f71351d905f44 <= 32;

	label11:

	if (!filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
		goto label30;
	}

	return is_null($ff4f71351d905f44) ? true : $ff4f71351d905f44 <= 128;

	label30:

	goto label47;

	label31:

	if (!($ff4f71351d905f44 < 0)) {
		goto label36;
	}

	return false;

	label36:

	if (!filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
		goto label11;
	}

	goto label2;

	label47:

	return false;
	goto label70;

	label49:

	$ed78c78249db8aa9 = explode('/', $Eb0a6a5b16cf7dd7);
	$b38e11ffdc6a3abb = $ed78c78249db8aa9[0];
	$ff4f71351d905f44 = NULL;

	if (!(count($ed78c78249db8aa9) == 2)) {
		goto label36;
	}

	$ff4f71351d905f44 = intval($ed78c78249db8aa9[1]);
	goto label31;

	label70:
}

function C2b0C0f9DD458149($C082ca9ed03f473c)
{
	$B9869413eae86beb = [];
	$d6fbf2cdbc7895f2 = json_decode(A730c6de034BA241($C082ca9ed03f473c, ['action' => 'get_free_space']), true);
	array_shift($d6fbf2cdbc7895f2);

	foreach ($d6fbf2cdbc7895f2 as $F5ba2106d5227309) {
		$E3665d09b9cea208 = explode(' ', preg_replace('!\\s+!', ' ', trim($F5ba2106d5227309)));
		if (!(((0 < strlen($E3665d09b9cea208[0])) && (strpos($E3665d09b9cea208[5], 'xui') !== false)) || ($E3665d09b9cea208[5] == '/'))) {
			goto label76;
		}

		$B9869413eae86beb[] = ['filesystem' => $E3665d09b9cea208[0], 'size' => $E3665d09b9cea208[1], 'used' => $E3665d09b9cea208[2], 'avail' => $E3665d09b9cea208[3], 'percentage' => $E3665d09b9cea208[4], 'mount' => implode(' ', array_slice($E3665d09b9cea208, 5, count($E3665d09b9cea208) - 5))];

		label76:
	}

	return $B9869413eae86beb;
}

function getStreamsRamdisk($C082ca9ed03f473c)
{
	$B9869413eae86beb = json_decode(A730c6De034bA241($C082ca9ed03f473c, ['action' => 'streams_ramdisk']), true);

	if (!$B9869413eae86beb['result']) {
		goto label16;
	}

	return $B9869413eae86beb['streams'];

	label16:

	return [];
}

function killPID($C082ca9ed03f473c, $C98e11437faf4199)
{
	A730C6De034bA241($C082ca9ed03f473c, ['action' => 'kill_pid', 'pid' => $C98e11437faf4199]);
}

function e4996afFb045c086($C082ca9ed03f473c)
{
	return json_decode(a730C6dE034ba241($C082ca9ed03f473c, ['action' => 'rtmp_stats']), true);
}

function restoreImages()
{
	global $b62d6460eb33ea07;

	foreach (array_keys(XUI::$rServers) as $C082ca9ed03f473c) {
		if (!XUI::$rServers[$C082ca9ed03f473c]['server_online']) {
			goto label18;
		}

		a730C6de034bA241($C082ca9ed03f473c, ['action' => 'restore_images']);

		label18:
	}

	return true;
}

function cD13e1314381e208()
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT DISTINCT(`server_id`) AS `server_id` FROM `watch_folders` WHERE `active` = 11 AND `type` <> \'plex\';');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!XUI::$rServers[$Fb9da1713bff19ce['server_id']]['server_online']) {
			goto label21;
		}

		A730c6DE034Ba241($Fb9da1713bff19ce['server_id'], ['action' => 'kill_watch']);

		label21:
	}

	return true;
}

function Fab77284d2868942()
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT DISTINCT(`server_id`) AS `server_id` FROM `watch_folders` WHERE `active` = 1 AND `type` = \'plex\';');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!XUI::$rServers[$Fb9da1713bff19ce['server_id']]['server_online']) {
			goto label21;
		}

		a730c6De034ba241($Fb9da1713bff19ce['server_id'], ['action' => 'kill_plex']);

		label21:
	}

	return true;
}

function c87bc8E30A2b322D($C082ca9ed03f473c)
{
	$B9869413eae86beb = [];
	$d828dca113bddc83 = json_decode(a730C6DE034ba241($C082ca9ed03f473c, ['action' => 'get_pids']), true);
	array_shift($d828dca113bddc83);

	foreach ($d828dca113bddc83 as $d0bf680e3271ee34) {
		goto label18;

		label18:

		$E3665d09b9cea208 = explode(' ', preg_replace('!\\s+!', ' ', trim($d0bf680e3271ee34)));

		if (!($E3665d09b9cea208[0] == 'xui')) {
			goto label127;
		}

		$fe2897cee6d64a44 = [0, 0, 0];
		$d78b5d74bc5c2761 = explode('-', $E3665d09b9cea208[9]);

		if (1 < count($d78b5d74bc5c2761)) {
			goto label58;
		}

		goto label53;

		label53:

		$A1337727c59c9463 = 0;
		$Ab13f2545dd3df14 = $d78b5d74bc5c2761[0];
		goto label151;

		label58:

		$A1337727c59c9463 = intval($d78b5d74bc5c2761[0]);
		goto label149;

		label65:

		$A1337727c59c9463 = intval($d78b5d74bc5c2761[0]);
		$Ab13f2545dd3df14 = $d78b5d74bc5c2761[1];

		label72:

		$Ab13f2545dd3df14 = explode(':', $Ab13f2545dd3df14);
		goto label172;

		label79:

		$fe2897cee6d64a44[1] = $d03052828cab569a + ($A1337727c59c9463 * 86400);
		$fe2897cee6d64a44[2] = ($fe2897cee6d64a44[1] / $fe2897cee6d64a44[0]) * 100;
		$B9869413eae86beb[] = ['user' => $E3665d09b9cea208[0], 'pid' => $E3665d09b9cea208[1], 'cpu' => $E3665d09b9cea208[2], 'mem' => $E3665d09b9cea208[3], 'vsz' => $E3665d09b9cea208[4], 'rss' => $E3665d09b9cea208[5], 'tty' => $E3665d09b9cea208[6], 'stat' => $E3665d09b9cea208[7], 'time' => $fe2897cee6d64a44[1], 'etime' => $fe2897cee6d64a44[0], 'load_average' => $fe2897cee6d64a44[2], 'command' => implode(' ', array_splice($E3665d09b9cea208, 10, count($E3665d09b9cea208) - 10))];

		label127:

		goto label247;

		label129:

		$d03052828cab569a = intval($Ab13f2545dd3df14[2]);
		goto label147;

		label136:

		$d03052828cab569a = (intval($Ab13f2545dd3df14[0]) * 60) + intval($Ab13f2545dd3df14[1]);

		label147:

		goto label249;

		label149:

		$Ab13f2545dd3df14 = $d78b5d74bc5c2761[1];

		label151:

		$Ab13f2545dd3df14 = explode(':', $Ab13f2545dd3df14);

		if (count($Ab13f2545dd3df14 == 3)) {
			goto label251;
		}

		if (count($Ab13f2545dd3df14) == 2) {
			goto label136;
		}

		goto label129;

		label172:

		if (count($Ab13f2545dd3df14 == 3)) {
			goto label208;
		}

		if (count($Ab13f2545dd3df14) == 2) {
			goto label193;
		}

		$d03052828cab569a = intval($Ab13f2545dd3df14[2]);
		goto label206;

		label193:

		goto label195;

		label195:

		$d03052828cab569a = (intval($Ab13f2545dd3df14[0]) * 60) + intval($Ab13f2545dd3df14[1]);

		label206:

		goto label79;

		label208:

		$d03052828cab569a = (intval($Ab13f2545dd3df14[0]) * 3600) + (intval($Ab13f2545dd3df14[1]) * 60) + intval($Ab13f2545dd3df14[2]);
		goto label79;

		label227:

		$d78b5d74bc5c2761 = explode('-', $E3665d09b9cea208[8]);

		if (1 < count($d78b5d74bc5c2761)) {
			goto label65;
		}

		$A1337727c59c9463 = 0;
		$Ab13f2545dd3df14 = $d78b5d74bc5c2761[0];
		goto label72;
		goto label65;

		label247:

		goto label274;

		label249:

		goto label268;

		label251:

		$d03052828cab569a = (intval($Ab13f2545dd3df14[0]) * 3600) + (intval($Ab13f2545dd3df14[1]) * 60) + intval($Ab13f2545dd3df14[2]);

		label268:

		$fe2897cee6d64a44[0] = $d03052828cab569a + ($A1337727c59c9463 * 86400);
		goto label227;

		label274:
	}

	return $B9869413eae86beb;
}

function Dd93e05E9bFf8A1E()
{
	unlink(CACHE_TMP_PATH . 'settings');
}

function C05365dcb6d79618($Abcb228699a7f743, $e9074345c9c7ffb9 = false, $d23a5026db861667 = false, $cf1eeb2c7a026e97 = NULL)
{
	goto label44;

	label5:

	$b62d6460eb33ea07->query('DELETE FROM `users_logs` WHERE `owner` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `tickets_replies` WHERE `ticket_id` IN (SELECT `id` FROM `tickets` WHERE `member_id` = ?);', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `tickets` WHERE `member_id` = ?;', $Abcb228699a7f743);

	if ($e9074345c9c7ffb9) {
		goto label26;
	}

	$b62d6460eb33ea07->query('UPDATE `users` SET `owner_id` = ? WHERE `owner_id` = ?;', $cf1eeb2c7a026e97, $Abcb228699a7f743);
	goto label25;

	label25:

	goto label61;

	label26:

	$b62d6460eb33ea07->query('SELECT `id` FROM `users` WHERE `owner_id` = ?;', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		C05365DCb6D79618($Fb9da1713bff19ce['id'], $e9074345c9c7ffb9, $d23a5026db861667, $cf1eeb2c7a026e97);
	}

	goto label61;

	label44:

	global $b62d6460eb33ea07;
	$Caf4325605347834 = ba89228dc958ce05($Abcb228699a7f743);

	if (!$Caf4325605347834) {
		goto label86;
	}

	$b62d6460eb33ea07->query('DELETE FROM `users` WHERE `id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `users_credits_logs` WHERE `admin_id` = ?;', $Abcb228699a7f743);
	goto label5;

	label61:

	if ($d23a5026db861667) {
		goto label69;
	}

	$b62d6460eb33ea07->query('UPDATE `lines` SET `member_id` = ? WHERE `member_id` = ?;', $cf1eeb2c7a026e97, $Abcb228699a7f743);
	goto label84;

	label69:

	goto label70;

	label70:

	$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` = ?;', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		c24B1B1fdAD37c5E($Fb9da1713bff19ce['id']);
	}

	label84:

	return true;
	goto label86;

	label86:

	return false;
	goto label88;

	label88:
}

function deleteUsers($Fe53bcd53690fff4)
{
	goto label51;

	label2:

	$b62d6460eb33ea07->query('DELETE FROM `users_logs` WHERE `owner` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `tickets_replies` WHERE `ticket_id` IN (SELECT `id` FROM `tickets` WHERE `member_id` IN (' . implode(',', $Fe53bcd53690fff4) . '));');
	$b62d6460eb33ea07->query('DELETE FROM `tickets` WHERE `member_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('UPDATE `users` SET `owner_id` = NULL WHERE `owner_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('UPDATE `lines` SET `member_id` = NULL WHERE `member_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label48;

	label48:

	return true;

	label49:

	return false;
	goto label82;

	label51:

	global $b62d6460eb33ea07;
	$Fe53bcd53690fff4 = confirmIDs($Fe53bcd53690fff4);

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label49;
	}

	$b62d6460eb33ea07->query('DELETE FROM `users` WHERE `id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `users_credits_logs` WHERE `admin_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label2;

	label82:
}

function fc84e25737908CB5($Abcb228699a7f743, $C082ca9ed03f473c = -1, $E029a8506407d5d5 = true, $c5ac1f2d77fbb80c = true)
{
	goto label148;

	label5:

	d537d94b49d06806();
	return true;

	label8:

	return false;
	goto label165;

	label10:

	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `stream_id` = ?;', $Abcb228699a7f743);

	label14:

	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `parent_id` IS NOT NULL AND `parent_id` > 0 AND `parent_id` NOT IN (SELECT `id` FROM `servers` WHERE `server_type` = 0);');
	XUI::cAc325153A658C37($Abcb228699a7f743);
	goto label5;

	label21:

	$Bccd07953f314962 = [$C082ca9ed03f473c];
	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `stream_id` = ? AND `server_id` = ?;', $Abcb228699a7f743, $C082ca9ed03f473c);
	if (!($E029a8506407d5d5 && in_array($A7d54b094ae83c95, [2, 5]))) {
		goto label42;
	}

	d7A4E214c9a305Fb([$C082ca9ed03f473c], $Abcb228699a7f743);

	label42:

	goto label83;

	label43:

	$b62d6460eb33ea07->query('DELETE FROM `watch_refresh` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `recordings` WHERE `created_id` = ? OR `stream_id` = ?;', $Abcb228699a7f743, $Abcb228699a7f743);
	$b62d6460eb33ea07->query('UPDATE `lines_activity` SET `stream_id` = 0 WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('SELECT `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	goto label118;

	label65:

	if (!($C082ca9ed03f473c != -1)) {
		goto label77;
	}

	$b62d6460eb33ea07->query('SELECT `server_stream_id` FROM `streams_servers` WHERE `stream_id` = ? AND `server_id` <> ?;', $Abcb228699a7f743, $C082ca9ed03f473c);
	$Fdc1c59343e7fc90 = $b62d6460eb33ea07->num_rows();

	label77:
	if (($Fdc1c59343e7fc90 == 0) && $c5ac1f2d77fbb80c) {
		goto label84;
	}

	goto label21;

	label83:

	goto label14;

	label84:

	$b62d6460eb33ea07->query('DELETE FROM `lines_logs` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `mag_claims` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `streams` WHERE `id` = ?;', $Abcb228699a7f743);
	goto label97;

	label97:

	$b62d6460eb33ea07->query('DELETE FROM `streams_episodes` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `streams_errors` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `streams_logs` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `streams_options` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `streams_stats` WHERE `stream_id` = ?;', $Abcb228699a7f743);
	goto label43;

	label118:

	$Bccd07953f314962 = [];

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Bccd07953f314962[] = $Fb9da1713bff19ce['server_id'];
	}
	if (!($E029a8506407d5d5 && (0 < count($Bccd07953f314962)) && in_array($A7d54b094ae83c95, [2, 5]))) {
		goto label10;
	}

	D7a4E214c9A305fb($Bccd07953f314962, $Abcb228699a7f743);
	goto label10;

	label148:

	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `id`, `type` FROM `streams` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label8;
	}

	$A7d54b094ae83c95 = $b62d6460eb33ea07->get_row()['type'];
	$Fdc1c59343e7fc90 = 0;
	goto label65;

	label165:
}

function deleteStreams($Fe53bcd53690fff4, $E029a8506407d5d5 = false)
{
	goto label146;

	label3:

	$b62d6460eb33ea07->query('DELETE FROM `streams` WHERE `id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_episodes` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_errors` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_logs` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_options` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label94;

	label49:

	$b62d6460eb33ea07->query('UPDATE `lines_activity` SET `stream_id` = 0 WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('SELECT `server_id` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `parent_id` IS NOT NULL AND `parent_id` > 0 AND `parent_id` NOT IN (SELECT `id` FROM `servers` WHERE `server_type` = 0);');
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', SERVER_ID, time(), json_encode(['type' => 'update_streams', 'id' => $Fe53bcd53690fff4]));
	goto label179;

	label94:

	$b62d6460eb33ea07->query('DELETE FROM `streams_stats` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `watch_refresh` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `lines_live` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `recordings` WHERE `created_id` IN (' . implode(',', $Fe53bcd53690fff4) . ') OR `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label49;

	label146:

	global $b62d6460eb33ea07;
	$Fe53bcd53690fff4 = confirmIDs($Fe53bcd53690fff4);

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label177;
	}

	$b62d6460eb33ea07->query('DELETE FROM `lines_logs` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `mag_claims` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label3;

	label177:

	return true;
	goto label206;

	label179:

	if (!$E029a8506407d5d5) {
		goto label203;
	}

	foreach (array_keys(XUI::$rServers) as $C082ca9ed03f473c) {
		$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`, `cache`) VALUES(?, ?, ?, 1);', $C082ca9ed03f473c, time(), json_encode(['type' => 'delete_vods', 'id' => $Fe53bcd53690fff4]));
	}

	label203:

	d537d94b49d06806();
	goto label177;

	label206:
}

function deleteStreamsByServer($Fe53bcd53690fff4, $C082ca9ed03f473c, $E029a8506407d5d5 = false)
{
	goto label25;

	label4:

	if (!$E029a8506407d5d5) {
		goto label20;
	}

	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`, `cache`) VALUES(?, ?, ?, 1);', $C082ca9ed03f473c, time(), json_encode(['type' => 'delete_vods', 'id' => $Fe53bcd53690fff4]));

	label20:

	d537d94b49d06806();

	label22:

	goto label23;

	label23:

	return true;
	goto label58;

	label25:

	global $b62d6460eb33ea07;
	$Fe53bcd53690fff4 = confirmIDs($Fe53bcd53690fff4);

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label22;
	}

	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `server_id` = ? AND `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');', $C082ca9ed03f473c);
	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `parent_id` = NULL WHERE `parent_id` = ? AND `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');', $C082ca9ed03f473c);
	goto label4;

	label58:
}

function c2789DA0026D2c05($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('UPDATE `mag_devices` SET `ip` = \'\', `ver` = \'\', `image_version` = \'\', `stb_type` = \'\', `sn` = \'\', `device_id` = \'\', `device_id2` = \'\', `hw_version` = \'\', `token` = \'\' WHERE `mag_id` = ?;', $Abcb228699a7f743);
}

function F515d75037A9122f($Bd92fffa215178e4)
{
	if (86400 <= $Bd92fffa215178e4) {
		goto label16;
	}

	$Bd92fffa215178e4 = sprintf('%02dh %02dm %02ds', $Bd92fffa215178e4 / 3600, ($Bd92fffa215178e4 / 60) % 60, $Bd92fffa215178e4 % 60);
	goto label28;

	label16:

	$Bd92fffa215178e4 = sprintf('%02dd %02dh %02dm', $Bd92fffa215178e4 / 86400, ($Bd92fffa215178e4 / 3600) % 24, ($Bd92fffa215178e4 / 60) % 60);

	label28:

	return $Bd92fffa215178e4;
}

function cdBe6Bc7B26C4902()
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `settings` LIMIT 1;');
	return $b62d6460eb33ea07->get_row();
}

function d5612F049a8056A5($ba2d146bb5a55097, $F7379362daea673f = 5)
{
	goto label3;

	label3:

	ini_set('default_socket_timeout', $F7379362daea673f);
	$Aa1ed9476fca75e9 = 'http://127.0.0.1:' . intval(XUI::$rServers[SERVER_ID]['http_broadcast_port']) . '/admin/api';

	if (empty(XUI::$rSettings['api_pass'])) {
		goto label25;
	}

	$ba2d146bb5a55097['api_pass'] = XUI::$rSettings['api_pass'];

	label25:

	goto label26;

	label26:

	$c34589bb44ab4b2a = http_build_query($ba2d146bb5a55097);
	$ab701fbbd66214d9 = curl_init();
	curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $Aa1ed9476fca75e9);
	curl_setopt($ab701fbbd66214d9, CURLOPT_POST, true);
	curl_setopt($ab701fbbd66214d9, CURLOPT_POSTFIELDS, $c34589bb44ab4b2a);
	goto label52;

	label52:

	curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ab701fbbd66214d9, CURLOPT_CONNECTTIMEOUT, $F7379362daea673f);
	curl_setopt($ab701fbbd66214d9, CURLOPT_TIMEOUT, $F7379362daea673f);
	return curl_exec($ab701fbbd66214d9);
	goto label75;

	label75:
}

function a730C6dE034bA241($C082ca9ed03f473c, $ba2d146bb5a55097, $F7379362daea673f = 5)
{
	goto label70;

	label4:

	curl_setopt($ab701fbbd66214d9, CURLOPT_POST, true);
	curl_setopt($ab701fbbd66214d9, CURLOPT_POSTFIELDS, $c34589bb44ab4b2a);
	curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ab701fbbd66214d9, CURLOPT_CONNECTTIMEOUT, $F7379362daea673f);
	curl_setopt($ab701fbbd66214d9, CURLOPT_TIMEOUT, $F7379362daea673f);
	goto label82;

	label35:

	$Aa1ed9476fca75e9 = 'http://' . XUI::$rServers[intval($C082ca9ed03f473c)]['server_ip'] . ':' . XUI::$rServers[intval($C082ca9ed03f473c)]['http_broadcast_port'] . '/api';
	$ba2d146bb5a55097['password'] = XUI::$rSettings['live_streaming_pass'];
	$c34589bb44ab4b2a = http_build_query($ba2d146bb5a55097);
	$ab701fbbd66214d9 = curl_init();
	curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $Aa1ed9476fca75e9);
	goto label4;

	label70:

	ini_set('default_socket_timeout', $F7379362daea673f);

	if (XUI::$rServers[$C082ca9ed03f473c]['server_online']) {
		goto label81;
	}

	return NULL;
	goto label86;

	label81:

	goto label35;

	label82:

	return curl_exec($ab701fbbd66214d9);

	label86:

	goto label87;

	label87:
}

function D7A4E214c9A305FB($Bccd07953f314962, $Abcb228699a7f743)
{
	global $b62d6460eb33ea07;

	if (is_array($Bccd07953f314962)) {
		goto label10;
	}

	$Bccd07953f314962 = [$Bccd07953f314962];

	label10:

	foreach ($Bccd07953f314962 as $C082ca9ed03f473c) {
		$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`, `cache`) VALUES(?, ?, ?, 1);', $C082ca9ed03f473c, time(), json_encode(['type' => 'delete_vod', 'id' => $Abcb228699a7f743]));
	}

	return true;
}

function fC34407b2842461b($d726bf95ad282ca7 = 10)
{
	goto label20;

	label2:

	if (!($df6991d59f367c7e < $d726bf95ad282ca7)) {
		goto label18;
	}

	$b334b7a204192e9e = $c52305dcb24222b4[mt_rand(0, $B970db2c731c3c6e - 1)];
	$f3daa5805b04df09 .= $b334b7a204192e9e;
	$df6991d59f367c7e++;
	goto label17;

	label17:

	goto label27;

	label18:

	return $f3daa5805b04df09;
	goto label28;

	label20:

	$c52305dcb24222b4 = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ';
	$B970db2c731c3c6e = strlen($c52305dcb24222b4);
	$f3daa5805b04df09 = '';
	$df6991d59f367c7e = 0;

	label27:

	goto label2;

	label28:
}

function c6a90bFcd425EB63($F0b2d14f22704d6a = false)
{
	global $b62d6460eb33ea07;
	global $db0a61ef32b89a27;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `servers` WHERE `server_type` = 0 ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label56;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!$db0a61ef32b89a27['is_reseller']) {
			goto label26;
		}

		$Fb9da1713bff19ce['server_name'] = 'Server #' . $Fb9da1713bff19ce['id'];

		label26:
		$Fb9da1713bff19ce['server_online'] = (in_array($Fb9da1713bff19ce['status'], [1, 3]) && ((time() - $Fb9da1713bff19ce['last_check_ago']) <= 90)) || $Fb9da1713bff19ce['is_main'];
		if (!($Fb9da1713bff19ce['server_online'] || !$F0b2d14f22704d6a)) {
			goto label54;
		}

		$B9869413eae86beb[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce;

		label54:
	}

	label56:

	return $B9869413eae86beb;
}

function FB63109715B78126()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `servers` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label20;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce;
	}

	label20:

	return $B9869413eae86beb;
}

function e988f4De594a8e78($F0b2d14f22704d6a = false)
{
	global $b62d6460eb33ea07;
	global $db0a61ef32b89a27;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `servers` WHERE `server_type` = 1 ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label56;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if (!$db0a61ef32b89a27['is_reseller']) {
			goto label26;
		}

		$Fb9da1713bff19ce['server_name'] = 'Proxy #' . $Fb9da1713bff19ce['id'];

		label26:
		$Fb9da1713bff19ce['server_online'] = (in_array($Fb9da1713bff19ce['status'], [1, 3]) && ((time() - $Fb9da1713bff19ce['last_check_ago']) <= 90)) || $Fb9da1713bff19ce['is_main'];
		if (!($Fb9da1713bff19ce['server_online'] || !$F0b2d14f22704d6a)) {
			goto label54;
		}

		$B9869413eae86beb[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce;

		label54:
	}

	label56:

	return $B9869413eae86beb;
}

function e3F2F09F39a132Fe()
{
	goto label1;

	label1:

	global $E59d0debc75e7be8;

	if (isset($E59d0debc75e7be8)) {
		goto label6;
	}

	return false;

	label6:

	$Ae7171937d7e569f = c9359222b3e3d256(true);
	goto label11;

	label11:
	if (in_array($E59d0debc75e7be8['member_group_id'], json_decode($Ae7171937d7e569f['groups'], true)) || (count(cdf3aab9a6eddf47()) == 0)) {
		goto label33;
	}

	return false;
	goto label48;

	label33:
	if (isset($_SESSION['code']) && ($_SESSION['code'] != $Ae7171937d7e569f['code'])) {
		goto label46;
	}

	goto label44;

	label44:

	return true;
	goto label47;

	label46:

	return false;

	label47:

	goto label48;

	label48:

	goto label49;

	label49:
}

function C38B1d921e6C27a6($f8eff582a589238e, $a01d93244ad473e6)
{
	$A4a83c33b43d63e2 = NULL;

	foreach ($f8eff582a589238e as $bfaffd59f038b138) {
		if (!(($A4a83c33b43d63e2 === NULL) || (abs($bfaffd59f038b138 - $a01d93244ad473e6) < abs($a01d93244ad473e6 - $A4a83c33b43d63e2)))) {
			goto label22;
		}

		$A4a83c33b43d63e2 = $bfaffd59f038b138;

		label22:
	}

	return $A4a83c33b43d63e2;
}

function DA42bbb41531b011()
{
	return substr(md5(XUI::$rSettings['live_streaming_pass']), 0, 15);
}

function BD57390a052fD83B($b5a93f3474101e1f, $E8d2f47901b176c3, $ce0840c647e1bbc7, $D0e42443c7074f63 = NULL, $ff46e6d0242ce5b6 = NULL)
{
	global $b62d6460eb33ea07;
	if ($D0e42443c7074f63 && $ff46e6d0242ce5b6) {
		goto label25;
	}

	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `' . C79E45b9106cF57B($b5a93f3474101e1f) . '` WHERE `' . C79E45B9106CF57b($E8d2f47901b176c3) . '` = ?;', $ce0840c647e1bbc7);
	goto label45;

	label25:

	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `' . C79e45b9106CF57b($b5a93f3474101e1f) . '` WHERE `' . c79e45B9106Cf57b($E8d2f47901b176c3) . '` = ? AND `' . C79e45b9106cf57B($D0e42443c7074f63) . '` <> ?;', $ce0840c647e1bbc7, $ff46e6d0242ce5b6);

	label45:

	return 0 < $b62d6460eb33ea07->get_row()['count'];
}

function B4018De13163B303($ba2d146bb5a55097, $D6be258a9043b749 = true)
{
	require_once INCLUDES_PATH . 'libs/m3u.php';
	$cbb85748d0e86b8c = new M3uParser();
	$cbb85748d0e86b8c->addDefaultTags();

	if ($D6be258a9043b749) {
		goto label17;
	}

	return $cbb85748d0e86b8c->parse($ba2d146bb5a55097);
	goto label21;

	label17:

	return $cbb85748d0e86b8c->parseFile($ba2d146bb5a55097);

	label21:
}

function E42eD0b0860Db08A($ba2d146bb5a55097, $a8aa4c3787a7e6dd, $E3ff158a26e6e252 = [])
{
	foreach ($a8aa4c3787a7e6dd as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
		if (!(array_key_exists($Bb672d1983256a93, $ba2d146bb5a55097) && !in_array($Bb672d1983256a93, $E3ff158a26e6e252))) {
			goto label37;
		}
		if (empty($ce0840c647e1bbc7) && is_null($ba2d146bb5a55097[$Bb672d1983256a93])) {
			goto label35;
		}

		$ba2d146bb5a55097[$Bb672d1983256a93] = $ce0840c647e1bbc7;
		goto label37;

		label35:

		$ba2d146bb5a55097[$Bb672d1983256a93] = NULL;

		label37:
	}

	return $ba2d146bb5a55097;
}

function c73eD8d0b70Ce12f($b5a93f3474101e1f, $ba2d146bb5a55097 = [], $ed6a5662734f48dc = false)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `column_name`, `column_default`, `is_nullable`, `data_type` FROM `information_schema`.`columns` WHERE `table_schema` = (SELECT DATABASE()) AND `table_name` = ? ORDER BY `ordinal_position`;', $b5a93f3474101e1f);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label75;

		label15:

		if (in_array($Fb9da1713bff19ce['data_type'], ['int', 'float', 'tinyint', 'double', 'decimal', 'smallint', 'mediumint', 'bigint', 'bit'])) {
			goto label27;
		}

		$Fb9da1713bff19ce['column_default'] = '';
		goto label98;

		label27:

		$Fb9da1713bff19ce['column_default'] = 0;
		goto label98;

		label31:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = $Fb9da1713bff19ce['column_default'];

		label35:

		goto label96;

		label37:
		if (empty($ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']]) && !is_numeric($ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']]) && is_null($Fb9da1713bff19ce['column_default'])) {
			goto label65;
		}

		goto label58;

		label58:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = $ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']];
		goto label73;

		label65:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = ($F970ffb77cdacc94 ? $Fb9da1713bff19ce['column_default'] : NULL);

		label73:

		goto label96;

		label75:

		if (!($Fb9da1713bff19ce['column_default'] == 'NULL')) {
			goto label83;
		}

		$Fb9da1713bff19ce['column_default'] = NULL;

		label83:

		$F970ffb77cdacc94 = false;
		if (!(($Fb9da1713bff19ce['is_nullable'] == 'NO') && !$Fb9da1713bff19ce['column_default'])) {
			goto label99;
		}

		goto label15;

		label96:

		goto label112;

		label98:

		$F970ffb77cdacc94 = true;

		label99:

		if (array_key_exists($Fb9da1713bff19ce['column_name'], $ba2d146bb5a55097)) {
			goto label37;
		}

		if ($ed6a5662734f48dc) {
			goto label35;
		}

		goto label31;

		label112:
	}

	return $B9869413eae86beb;
}

function c79E45b9106CF57b($ce0840c647e1bbc7)
{
	return strtolower(preg_replace('/[^a-z0-9_]+/i', '', $ce0840c647e1bbc7));
}

function C483a3A59265139E($F647a429f8089f01)
{
	$B8630a7c92543099 = $E7d73c61c6fc4cd9 = $Ca123c0b300f7947 = $ba2d146bb5a55097 = [];

	foreach (array_keys($F647a429f8089f01) as $Bb672d1983256a93) {
		$E7d73c61c6fc4cd9[] = '`' . c79e45b9106cf57b($Bb672d1983256a93) . '`';
		$B8630a7c92543099[] = '`' . c79e45b9106cf57b($Bb672d1983256a93) . '` = ?';
	}

	foreach (array_values($F647a429f8089f01) as $ce0840c647e1bbc7) {
		goto label35;

		label33:

		goto label71;

		label35:

		if (is_array($ce0840c647e1bbc7)) {
			goto label59;
		}
		if (!(is_null($ce0840c647e1bbc7) || (strtolower($ce0840c647e1bbc7) == 'null'))) {
			goto label55;
		}

		$ce0840c647e1bbc7 = NULL;

		label55:

		goto label65;
		goto label59;

		label59:

		$ce0840c647e1bbc7 = json_encode($ce0840c647e1bbc7, JSON_UNESCAPED_UNICODE);

		label65:

		$Ca123c0b300f7947[] = '?';
		$ba2d146bb5a55097[] = $ce0840c647e1bbc7;
		goto label33;

		label71:
	}

	return ['placeholder' => implode(',', $Ca123c0b300f7947), 'columns' => implode(',', $E7d73c61c6fc4cd9), 'data' => $ba2d146bb5a55097, 'update' => implode(',', $B8630a7c92543099)];
}

function F8A524f607010c5f($B792efb991603d69, $d141c3a822109766 = true)
{
	$A7ca171405b19571 = d60f670923adbf13();

	if (!(0 < count($B792efb991603d69))) {
		goto label28;
	}

	$A7ca171405b19571 .= '?' . http_build_query($B792efb991603d69);

	if (!$d141c3a822109766) {
		goto label28;
	}

	foreach ($B792efb991603d69 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
		XUI::$rRequest[$Bb672d1983256a93] = $ce0840c647e1bbc7;
	}

	label28:

	return '<script>history.replaceState({},\'\',\'' . $A7ca171405b19571 . '\');</script>';
}

function bd08b9C71a1Ca5f5($f7107e3a92443147, $Db0336509474eb3e = NULL)
{
	goto label3;

	label3:

	global $b62d6460eb33ea07;
	$Caf4325605347834 = b5ad1d95a92ce732($f7107e3a92443147);

	if (!$Caf4325605347834) {
		goto label69;
	}

	unset($Caf4325605347834['id']);

	if ($Db0336509474eb3e) {
		goto label75;
	}

	goto label70;

	label15:

	foreach ($b62d6460eb33ea07->get_rows() as $c050a23c479bc67e) {
		goto label23;

		label21:

		goto label67;

		label23:

		$D667ceefd3d061e1 = $Caf4325605347834;
		$D667ceefd3d061e1['pair_id'] = intval($f7107e3a92443147);
		$D667ceefd3d061e1['play_token'] = '';

		foreach (['id', 'is_mag', 'is_e2', 'is_restreamer', 'max_connections', 'created_at', 'username', 'password', 'admin_notes', 'reseller_notes'] as $Bb672d1983256a93) {
			$D667ceefd3d061e1[$Bb672d1983256a93] = $c050a23c479bc67e[$Bb672d1983256a93];
		}

		goto label40;

		label40:

		if (!isset($D667ceefd3d061e1['id'])) {
			goto label21;
		}

		$Fac87d38f7786df0 = c483a3a59265139e($D667ceefd3d061e1);
		$B91645b8411dc88c = 'REPLACE INTO `lines`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
		$b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		XUI::CcB5075C679E7314($D667ceefd3d061e1['id']);
		goto label21;

		label67:
	}

	label69:

	goto label80;

	label70:

	$b62d6460eb33ea07->query('SELECT * FROM `lines` WHERE `pair_id` = ?;', $f7107e3a92443147);
	goto label79;

	label75:

	$b62d6460eb33ea07->query('SELECT * FROM `lines` WHERE `id` = (SELECT `user_id` FROM `mag_devices` WHERE `mag_id` = ?);', $Db0336509474eb3e);

	label79:

	goto label15;

	label80:
}

function D086D1b99322B788($Fb9da1713bff19ce)
{
	foreach ($Fb9da1713bff19ce as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
		if (!is_array($ce0840c647e1bbc7)) {
			goto label18;
		}

		$Fb9da1713bff19ce[$Bb672d1983256a93] = json_encode($ce0840c647e1bbc7, JSON_UNESCAPED_UNICODE);

		label18:
	}

	return $Fb9da1713bff19ce;
}

function D47Af76340844E65($b7319702635da556 = NULL)
{
	goto label23;

	label2:

	return $B9869413eae86beb;
	goto label32;

	label4:

	$b62d6460eb33ea07->query('SELECT `callSign`, `bcastLangs`, `name`, `picon` FROM `epg_api` WHERE SOUNDEX(`name`) = SOUNDEX(?) ORDER BY `name` ASC, `eng` DESC;', $b7319702635da556);

	label8:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label2;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	goto label2;

	label23:

	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];

	if ($b7319702635da556) {
		goto label4;
	}

	$b62d6460eb33ea07->query('SELECT `callSign`, `bcastLangs`, `name`, `picon` FROM `epg_api` ORDER BY `name` ASC, `eng` DESC;');
	goto label8;
	goto label4;

	label32:
}

function d9EDF1f1058474D4($C082ca9ed03f473c, $ee6d1fc5d801b43f)
{
	return json_decode(a730c6de034ba241($C082ca9ed03f473c, ['action' => 'get_archive_files', 'stream_id' => $ee6d1fc5d801b43f]), true)['data'];
}

function c2ae9fDA76b23eD4($ee6d1fc5d801b43f)
{
	goto label4;

	label2:

	return $B9869413eae86beb;
	goto label241;

	label4:

	$B9869413eae86beb = [];
	$fe93a43f53d92a4e = f260b7a31f021e39($ee6d1fc5d801b43f);
	$a2ebb817d88c810b = b790ff255e9f25f5($ee6d1fc5d801b43f, true);
	$dd6d6da4a65a40fa = d9edf1f1058474d4($fe93a43f53d92a4e['tv_archive_server_id'], $ee6d1fc5d801b43f);
	if (!((0 < count($dd6d6da4a65a40fa)) && (0 < count($a2ebb817d88c810b)))) {
		goto label166;
	}

	goto label34;

	label34:

	foreach ($dd6d6da4a65a40fa as $D6be258a9043b749) {
		goto label38;

		label38:

		$F48d5724f3b4ec96 = pathinfo($D6be258a9043b749)['filename'];
		$F80243ca532d6374 = strtotime(explode(':', $F48d5724f3b4ec96)[0] . 'T' . implode(':', explode('-', explode(':', $F48d5724f3b4ec96)[1])) . ':00Z ' . str_replace(':', '', gmdate('P')));
		$E7cba019ce58e458 = NULL;
		$ea985000609c5ff6 = 0;

		foreach ($a2ebb817d88c810b as $a5725df552d26b87) {
			if (!filter_var($F80243ca532d6374, FILTER_VALIDATE_INT, [
				'options' => ['min_range' => $a5725df552d26b87['start'], 'max_range' => $a5725df552d26b87['end'] - 1]
			])) {
				goto label103;
			}

			$E7cba019ce58e458 = $ea985000609c5ff6;
			goto label109;

			label103:

			$ea985000609c5ff6++;
		}

		goto label109;

		label109:

		if (!$E7cba019ce58e458) {
			goto label131;
		}

		if (isset($B9869413eae86beb[$E7cba019ce58e458])) {
			goto label133;
		}

		$B9869413eae86beb[$E7cba019ce58e458] = $a2ebb817d88c810b[$E7cba019ce58e458];
		$B9869413eae86beb[$E7cba019ce58e458]['archive_start'] = $B9869413eae86beb[$E7cba019ce58e458]['archive_stop'] = NULL;
		goto label133;

		label128:

		$B9869413eae86beb[$E7cba019ce58e458]['archive_stop'] = $F80243ca532d6374;

		label131:

		goto label164;

		label133:
		if (!((($F80243ca532d6374 - 60) < $B9869413eae86beb[$E7cba019ce58e458]['archive_start']) || !$B9869413eae86beb[$E7cba019ce58e458]['archive_start'])) {
			goto label150;
		}

		$B9869413eae86beb[$E7cba019ce58e458]['archive_start'] = $F80243ca532d6374 - 60;

		label150:
		if (!(($B9869413eae86beb[$E7cba019ce58e458]['archive_stop'] < $F80243ca532d6374) || !$B9869413eae86beb[$E7cba019ce58e458]['archive_stop'])) {
			goto label131;
		}

		goto label128;

		label164:
	}

	label166:

	foreach ($B9869413eae86beb as $Bb672d1983256a93 => $B4a603c2a57d3acf) {
		goto label171;

		label171:

		if (time() < $B4a603c2a57d3acf['end']) {
			goto label183;
		}

		$B9869413eae86beb[$Bb672d1983256a93]['in_progress'] = false;
		goto label188;

		label183:

		$B9869413eae86beb[$Bb672d1983256a93]['in_progress'] = true;
		goto label188;

		label188:
		if (!$B9869413eae86beb[$Bb672d1983256a93]['in_progress'] && filter_var($B4a603c2a57d3acf['start'], FILTER_VALIDATE_INT, [
			'options' => ['min_range' => $B4a603c2a57d3acf['archive_start'] - 60, 'max_range' => $B4a603c2a57d3acf['archive_start'] + 60]
		]) && filter_var($B4a603c2a57d3acf['end'], FILTER_VALIDATE_INT, [
			'options' => ['min_range' => $B4a603c2a57d3acf['archive_stop'] - 60, 'max_range' => $B4a603c2a57d3acf['archive_stop'] + 60]
		])) {
			goto label231;
		}

		$B9869413eae86beb[$Bb672d1983256a93]['complete'] = false;
		goto label236;

		label231:

		goto label233;

		label233:

		$B9869413eae86beb[$Bb672d1983256a93]['complete'] = true;

		label236:

		goto label238;

		label238:
	}

	goto label2;

	label241:
}

function getResellers($C0a1fd30f0173389, $d73ad526f02ac0e3 = true)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];

	if ($d73ad526f02ac0e3) {
		goto label11;
	}

	$b62d6460eb33ea07->query('SELECT `id`, `username` FROM `users` WHERE `owner_id` = ? ORDER BY `username` ASC;', $C0a1fd30f0173389);
	goto label16;

	label11:

	$b62d6460eb33ea07->query('SELECT `id`, `username` FROM `users` WHERE `owner_id` = ? OR `id` = ? ORDER BY `username` ASC;', $C0a1fd30f0173389, $C0a1fd30f0173389);

	label16:

	return $b62d6460eb33ea07->get_rows(true, 'id');
}

function aC2C85EbE8ED988b($d73ad526f02ac0e3 = true)
{
	goto label44;

	label2:

	$B9869413eae86beb = [];

	if (!(0 < count($ec80784a08a705f6))) {
		goto label42;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `users` WHERE `owner_id` IN (' . implode(',', array_map('intval', $ec80784a08a705f6)) . ') ORDER BY `username` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label42;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
	}

	goto label42;

	label42:

	return $B9869413eae86beb;
	goto label56;

	label44:

	global $b62d6460eb33ea07;
	global $db0a61ef32b89a27;
	global $E59d0debc75e7be8;
	$ec80784a08a705f6 = $db0a61ef32b89a27['direct_reports'];

	if (!$d73ad526f02ac0e3) {
		goto label55;
	}

	$ec80784a08a705f6[] = $E59d0debc75e7be8['id'];

	label55:

	goto label2;

	label56:
}

function a7dC2607457949EC($A7d54b094ae83c95)
{
	global $db0a61ef32b89a27;
	return $db0a61ef32b89a27[$A7d54b094ae83c95];
}

function e589A4bF54A2daD1($A7d54b094ae83c95, $Abcb228699a7f743)
{
	goto label54;

	label3:

	goto label20;

	label4:

	$b62d6460eb33ea07->query('SELECT `id` FROM `users` WHERE `id` = ? AND (`owner_id` IN (' . implode(',', $C93288e1d85b6c77) . ') OR `id` = ?);', $Abcb228699a7f743, $E59d0debc75e7be8['id']);
	return 0 < $b62d6460eb33ea07->num_rows();

	label20:

	goto label31;

	label21:

	return in_array($Abcb228699a7f743, $db0a61ef32b89a27['advanced'] ?: []);

	label29:

	goto label85;
	goto label33;

	label31:

	return false;
	goto label131;

	label33:

	$C93288e1d85b6c77 = array_map('intval', array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['all_reports']));

	if (0 < count($C93288e1d85b6c77)) {
		goto label71;
	}

	return false;
	goto label85;
	goto label71;

	label54:

	global $E59d0debc75e7be8;
	global $b62d6460eb33ea07;
	global $db0a61ef32b89a27;
	if (!(!isset($E59d0debc75e7be8) || !isset($db0a61ef32b89a27))) {
		goto label67;
	}

	return false;

	label67:

	if ($A7d54b094ae83c95 == 'user') {
		goto label87;
	}

	goto label107;

	label71:

	$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `id` = ? AND `member_id` IN (' . implode(',', $C93288e1d85b6c77) . ');', $Abcb228699a7f743);
	return 0 < $b62d6460eb33ea07->num_rows();

	label85:

	goto label86;

	label86:

	goto label31;

	label87:

	$C93288e1d85b6c77 = array_map('intval', array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['all_reports']));

	if (0 < count($C93288e1d85b6c77)) {
		goto label4;
	}

	return false;
	goto label3;

	label107:

	if ($A7d54b094ae83c95 == 'line') {
		goto label33;
	}
	if (!(($A7d54b094ae83c95 == 'adv') && $db0a61ef32b89a27['is_admin'])) {
		goto label29;
	}
	if ((0 < count($db0a61ef32b89a27['advanced'])) && ($E59d0debc75e7be8['member_group_id'] != 1)) {
		goto label21;
	}

	return true;
	goto label29;
	goto label21;

	label131:
}

function aD052A625C6AC011()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `users_groups` ORDER BY `group_id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label23;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[intval($Fb9da1713bff19ce['group_id'])] = $Fb9da1713bff19ce;
	}

	label23:

	return $B9869413eae86beb;
}

function E1d8dAf1eB55D924($D7f17b03d6498825, $Bb9fda5ebf825f11, $e61e6dcee1252fa2)
{
	$A7ca171405b19571 = 'https://api.themoviedb.org/3/tv/' . intval($D7f17b03d6498825) . '/season/' . intval($Bb9fda5ebf825f11) . '/episode/' . intval($e61e6dcee1252fa2) . '/images?api_key=' . urlencode(XUI::$rSettings['tmdb_api_key']);

	if (!(0 < strlen(XUI::$rSettings['tmdb_language']))) {
		goto label41;
	}

	$A7ca171405b19571 .= '&language=' . urlencode(XUI::$rSettings['tmdb_language']);

	label41:

	return json_decode(file_get_contents($A7ca171405b19571), true);
}

function EAc02E498611cE84()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `blocked_uas` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function e87adE454D6C69d1()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `blocked_isps` ORDER BY `id` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function getStreamProviders()
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `providers` ORDER BY `last_changed` DESC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label19;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label19:

	return $B9869413eae86beb;
}

function getStreamProvider($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `providers` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function dBbE1508Fa3e591f($Abcb228699a7f743, $E029a8506407d5d5 = true)
{
	goto label5;

	label3:

	return false;
	goto label42;

	label5:

	global $b62d6460eb33ea07;
	$d02ef9ae10a41939 = a2297542d8bd35f6($Abcb228699a7f743);

	if (!$d02ef9ae10a41939) {
		goto label3;
	}

	$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_episodes` WHERE `series_id` = ?;', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		fc84e25737908cb5($Fb9da1713bff19ce['stream_id'], -1, $E029a8506407d5d5);
	}

	goto label30;

	label30:

	$b62d6460eb33ea07->query('DELETE FROM `streams_episodes` WHERE `series_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `streams_series` WHERE `id` = ?;', $Abcb228699a7f743);
	d537d94b49d06806();
	return true;
	goto label3;

	label42:
}

function deleteSeriesMass($Fe53bcd53690fff4)
{
	goto label7;

	label2:

	d537d94b49d06806();
	return true;

	label5:

	return false;
	goto label68;

	label7:

	global $b62d6460eb33ea07;
	$Fe53bcd53690fff4 = confirmIDs($Fe53bcd53690fff4);

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label5;
	}

	$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_episodes` WHERE `series_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[] = $Fb9da1713bff19ce['stream_id'];
	}

	goto label38;

	label38:

	$b62d6460eb33ea07->query('DELETE FROM `streams_episodes` WHERE `series_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_series` WHERE `id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');

	if (!(0 < count($dec36723d7be7c49))) {
		goto label2;
	}

	deletestreams($dec36723d7be7c49, true);
	goto label2;

	label68:
}

function ae08Cda9F888114f($Abcb228699a7f743)
{
	goto label2;

	label2:

	global $b62d6460eb33ea07;
	$f155fef57262b32a = b47FB5320e43f112($Abcb228699a7f743);

	if (!$f155fef57262b32a) {
		goto label142;
	}

	$b62d6460eb33ea07->query('SELECT `id`, `bouquet` FROM `lines` WHERE JSON_CONTAINS(`bouquet`, ?, \'$\');', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Fb9da1713bff19ce['bouquet'] = json_decode($Fb9da1713bff19ce['bouquet'], true);

		if (!(($Bb672d1983256a93 = array_search($Abcb228699a7f743, $Fb9da1713bff19ce['bouquet'])) !== false)) {
			goto label38;
		}

		unset($Fb9da1713bff19ce['bouquet'][$Bb672d1983256a93]);

		label38:

		$b62d6460eb33ea07->query('UPDATE `lines` SET `bouquet` = \'[' . implode(',', array_map('intval', $Fb9da1713bff19ce['bouquet'])) . ']\' WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
		XUI::ccB5075C679e7314($Fb9da1713bff19ce['id']);
	}

	goto label144;

	label61:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Fb9da1713bff19ce['bouquets'] = json_decode($Fb9da1713bff19ce['bouquets'], true);

		if (!(($Bb672d1983256a93 = array_search($Abcb228699a7f743, $Fb9da1713bff19ce['bouquets'])) !== false)) {
			goto label85;
		}

		unset($Fb9da1713bff19ce['bouquets'][$Bb672d1983256a93]);

		label85:

		$Fb9da1713bff19ce['fb_bouquets'] = json_decode($Fb9da1713bff19ce['fb_bouquets'], true);

		if (!(($Bb672d1983256a93 = array_search($Abcb228699a7f743, $Fb9da1713bff19ce['fb_bouquets'])) !== false)) {
			goto label105;
		}

		unset($Fb9da1713bff19ce['fb_bouquets'][$Bb672d1983256a93]);

		label105:

		$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `bouquets` = \'[' . implode(',', array_map('intval', $Fb9da1713bff19ce['bouquets'])) . ']\', `fb_bouquets` = \'[' . implode(',', array_map('intval', $Fb9da1713bff19ce['fb_bouquets'])) . ']\' WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	}

	$b62d6460eb33ea07->query('DELETE FROM `bouquets` WHERE `id` = ?;', $Abcb228699a7f743);
	d537d94b49d06806();
	return true;
	goto label142;

	label142:

	return false;
	goto label196;

	label144:

	$b62d6460eb33ea07->query('SELECT `id`, `bouquets` FROM `users_packages` WHERE JSON_CONTAINS(`bouquets`, ?, \'$\');', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Fb9da1713bff19ce['bouquets'] = json_decode($Fb9da1713bff19ce['bouquets'], true);

		if (!(($Bb672d1983256a93 = array_search($Abcb228699a7f743, $Fb9da1713bff19ce['bouquets'])) !== false)) {
			goto label172;
		}

		unset($Fb9da1713bff19ce['bouquets'][$Bb672d1983256a93]);

		label172:

		$b62d6460eb33ea07->query('UPDATE `users_packages` SET `bouquets` = \'[' . implode(',', array_map('intval', $Fb9da1713bff19ce['bouquets'])) . ']\' WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	}

	$b62d6460eb33ea07->query('SELECT `id`, `bouquets` FROM `watch_folders` WHERE JSON_CONTAINS(`bouquets`, ?, \'$\') OR JSON_CONTAINS(`fb_bouquets`, ?, \'$\');', $Abcb228699a7f743, $Abcb228699a7f743);
	goto label61;

	label196:
}

function D30222255BCfe230($Abcb228699a7f743)
{
	goto label64;

	label2:

	$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `category_id` = null WHERE `category_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `fb_category_id` = null WHERE `fb_category_id` = ?;', $Abcb228699a7f743);
	return true;

	label11:

	return false;
	goto label119;

	label13:

	$b62d6460eb33ea07->query('SELECT `id`, `category_id` FROM `streams_series` WHERE JSON_CONTAINS(`category_id`, ?, \'$\');', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Fb9da1713bff19ce['category_id'] = json_decode($Fb9da1713bff19ce['category_id'], true);

		if (!(($Bb672d1983256a93 = array_search($Abcb228699a7f743, $Fb9da1713bff19ce['category_id'])) !== false)) {
			goto label41;
		}

		unset($Fb9da1713bff19ce['category_id'][$Bb672d1983256a93]);

		label41:

		$b62d6460eb33ea07->query('UPDATE `streams_series` SET `category_id` = \'[' . implode(',', array_map('intval', $Fb9da1713bff19ce['category_id'])) . ']\' WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	}

	$b62d6460eb33ea07->query('DELETE FROM `streams_categories` WHERE `id` = ?;', $Abcb228699a7f743);
	goto label2;

	label64:

	global $b62d6460eb33ea07;
	$Dbcac322b4274e46 = d1132f737572929c($Abcb228699a7f743);

	if (!$Dbcac322b4274e46) {
		goto label11;
	}

	$b62d6460eb33ea07->query('SELECT `id`, `category_id` FROM `streams` WHERE JSON_CONTAINS(`category_id`, ?, \'$\');', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Fb9da1713bff19ce['category_id'] = json_decode($Fb9da1713bff19ce['category_id'], true);

		if (!(($Bb672d1983256a93 = array_search($Abcb228699a7f743, $Fb9da1713bff19ce['category_id'])) !== false)) {
			goto label100;
		}

		unset($Fb9da1713bff19ce['category_id'][$Bb672d1983256a93]);

		label100:

		$b62d6460eb33ea07->query('UPDATE `streams` SET `category_id` = \'[' . implode(',', array_map('intval', $Fb9da1713bff19ce['category_id'])) . ']\' WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	}

	goto label13;

	label119:
}

function e6397083B98ca4B5($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b376970f4d4df746 = b11216ab01aaa78c($Abcb228699a7f743);

	if (!$b376970f4d4df746) {
		goto label22;
	}

	$b62d6460eb33ea07->query('DELETE FROM `profiles` WHERE `profile_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('UPDATE `streams` SET `transcode_profile_id` = 0 WHERE `transcode_profile_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `transcode_profile_id` = 0 WHERE `transcode_profile_id` = ?;', $Abcb228699a7f743);
	return true;

	label22:

	return false;
}

function getPlexLogin($ff5cf44f96903d64, $fd093b5358e9a519)
{
	goto label3;

	label3:

	$df59d69b3ccd0f39 = ['Content-Type: application/xml; charset=utf-8', 'X-Plex-Client-Identifier: 526e163c-8dbd-11eb-8dcd-0242ac130003', 'X-Plex-Product: XUI', 'X-Plex-Version: v' . XUI_VERSION];
	$Daaec03d386c8f6a = curl_init('https://plex.tv/users/sign_in.json');
	curl_setopt($Daaec03d386c8f6a, CURLOPT_HTTPHEADER, $df59d69b3ccd0f39);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_HEADER, 0);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	goto label43;

	label34:

	return json_decode(curl_exec($Daaec03d386c8f6a), true);
	goto label76;

	label43:

	curl_setopt($Daaec03d386c8f6a, CURLOPT_USERPWD, $ff5cf44f96903d64 . ':' . $fd093b5358e9a519);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_TIMEOUT, 30);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_POST, 1);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_RETURNTRANSFER, true);
	goto label34;

	label76:
}

function getPlexSections($b38e11ffdc6a3abb, $e5bebfb39a19fe80, $B259c62825689c1b)
{
	$A6cb59980ac73dff = json_decode(json_encode(simplexml_load_string(file_get_contents('http://' . $b38e11ffdc6a3abb . ':' . $e5bebfb39a19fe80 . '/library/sections?X-Plex-Token=' . $B259c62825689c1b))), true);

	if (!isset($A6cb59980ac73dff['Directory'])) {
		goto label38;
	}

	if (!isset($A6cb59980ac73dff['Directory']['@attributes'])) {
		goto label36;
	}

	$A6cb59980ac73dff['Directory'] = [$A6cb59980ac73dff['Directory']];

	label36:

	return $A6cb59980ac73dff['Directory'];

	label38:

	return [];
}

function getMovieTMDB($Abcb228699a7f743)
{
	require_once XUI_HOME . 'includes/libs/tmdb.php';

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label19;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label28;

	label19:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label28:

	return $b41097c951ee83d3->getMovie($Abcb228699a7f743) ?: NULL;
}

function getSeriesTMDB($Abcb228699a7f743)
{
	require_once XUI_HOME . 'includes/libs/tmdb.php';

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label19;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label28;

	label19:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label28:

	return json_decode($b41097c951ee83d3->getTVShow($Abcb228699a7f743)->getJSON(), true) ?: NULL;
}

function getSeasonTMDB($Abcb228699a7f743, $Bb9fda5ebf825f11)
{
	require_once XUI_HOME . 'includes/libs/tmdb.php';

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label20;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label29;

	label20:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label29:

	return json_decode($b41097c951ee83d3->getSeason($Abcb228699a7f743, intval($Bb9fda5ebf825f11))->getJSON(), true);
}

function A6FCc34EA39454a9($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$c9c7d3ab646c9696 = [];
	$b62d6460eb33ea07->query('SELECT `server_id`, `error` FROM `streams_errors` WHERE `stream_id` = ?;', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$c9c7d3ab646c9696[intval($Fb9da1713bff19ce['server_id'])] = $Fb9da1713bff19ce['error'];
	}

	return $c9c7d3ab646c9696;
}

function deleteRecording($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT `created_id`, `source_id` FROM `recordings` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label39;
	}

	$E7b17bfe9a716869 = $b62d6460eb33ea07->get_row();

	if (!$E7b17bfe9a716869['created_id']) {
		goto label27;
	}

	fc84e25737908cb5($E7b17bfe9a716869['created_id'], $E7b17bfe9a716869['source_id'], true, true);

	label27:

	shell_exec('kill -9 `ps -ef | grep \'Record\\[' . intval($Abcb228699a7f743) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');
	$b62d6460eb33ea07->query('DELETE FROM `recordings` WHERE `id` = ?;', $Abcb228699a7f743);

	label39:
}

function getRecordings()
{
	global $b62d6460eb33ea07;
	$ee34d49b6caaedbc = [];
	$b62d6460eb33ea07->query('SELECT * FROM `recordings` ORDER BY `id` DESC;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$ee34d49b6caaedbc[] = $Fb9da1713bff19ce;
	}

	return $ee34d49b6caaedbc;
}

function a41659d47A278cEB()
{
	return (!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off')) || ($_SERVER['SERVER_PORT'] == 443);
}

function C54E7b1d4554677f()
{
	if (a41659d47a278ceb()) {
		goto label6;
	}

	return 'http';
	goto label7;

	label6:

	return 'https';

	label7:
}

function A834b9D0d9F903ba($C082ca9ed03f473c, $df02d8ad3c0e8f06)
{
	return a730c6de034ba241($C082ca9ed03f473c, ['action' => 'closeConnection', 'activity_id' => intval($df02d8ad3c0e8f06)]);
}

function A66e1F04EE686669($C082ca9ed03f473c)
{
	return a730c6de034ba241($C082ca9ed03f473c, ['action' => 'get_certificate_info']);
}

function E66Ae2739944EB3a($be083ab4cd4f4e7e)
{
	goto label2;

	label2:

	if (75 <= $be083ab4cd4f4e7e) {
		goto label14;
	}

	if (50 <= $be083ab4cd4f4e7e) {
		goto label10;
	}

	return 'bg-success';
	goto label13;

	label10:

	goto label12;

	label11:

	goto label16;

	label12:

	return 'bg-warning';

	label13:

	goto label11;

	label14:

	return 'bg-danger';
	goto label11;

	label16:
}

function F055e3A3fd6864af($C082ca9ed03f473c)
{
	global $b62d6460eb33ea07;
	$d828dca113bddc83 = [];
	$Ec379295dc7029e6 = cbb79f154db723a8($C082ca9ed03f473c);
	$D98b04084f3f9863 = json_decode($Ec379295dc7029e6['gpu_info'], true);

	if (!is_array($D98b04084f3f9863)) {
		goto label56;
	}

	foreach ($D98b04084f3f9863['gpus'] as $Fbd977da339c16e3) {
		foreach ($Fbd977da339c16e3['processes'] as $d0bf680e3271ee34) {
			$F647a429f8089f01 = ['pid' => $d0bf680e3271ee34['pid'], 'memory' => $d0bf680e3271ee34['memory'], 'stream_id' => NULL];
			$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_servers` WHERE `pid` = ? AND `server_id` = ?;', $d0bf680e3271ee34['pid'], $C082ca9ed03f473c);

			if (!(0 < $b62d6460eb33ea07->num_rows())) {
				goto label50;
			}

			$F647a429f8089f01['stream_id'] = $b62d6460eb33ea07->get_row()['stream_id'];

			label50:

			$d828dca113bddc83[] = $F647a429f8089f01;
		}
	}

	label56:

	return $d828dca113bddc83;
}

function C24b1B1fdAD37C5e($Abcb228699a7f743, $f18881da97d4ada1 = false, $C70e11844586b07f = true)
{
	goto label61;

	label4:

	$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `pair_id` = ?;', $Abcb228699a7f743);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		if ($f18881da97d4ada1) {
			goto label26;
		}

		$b62d6460eb33ea07->query('UPDATE `lines` SET `pair_id` = null WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
		XUI::CcB5075C679E7314($Fb9da1713bff19ce['id']);
		goto label32;

		label26:

		c24b1b1FdAd37C5E($Fb9da1713bff19ce['id'], true, $C70e11844586b07f);

		label32:
	}

	goto label97;

	label35:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		XUI::b0020C716Fdf67bB($Fb9da1713bff19ce);
	}

	goto label4;

	label45:

	foreach (XUI::D72c0F56211B6f7c($Abcb228699a7f743, NULL, NULL, true, false, false) as $Fd10d59f87b19e71) {
		XUI::b0020c716fDf67BB($Fd10d59f87b19e71);
	}

	goto label4;

	label61:

	global $b62d6460eb33ea07;
	$F5ba2106d5227309 = b5ad1d95a92ce732($Abcb228699a7f743);

	if (!$F5ba2106d5227309) {
		goto label98;
	}

	XUI::cA81C8f24C099495($Abcb228699a7f743);
	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `id` = ?;', $Abcb228699a7f743);
	goto label77;

	label77:

	$b62d6460eb33ea07->query('DELETE FROM `lines_logs` WHERE `user_id` = ?;', $Abcb228699a7f743);
	$b62d6460eb33ea07->query('UPDATE `lines_activity` SET `user_id` = 0 WHERE `user_id` = ?;', $Abcb228699a7f743);

	if (!$C70e11844586b07f) {
		goto label4;
	}

	if (XUI::$rSettings['redis_handler']) {
		goto label45;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` = ?;', $Abcb228699a7f743);
	goto label35;

	label97:

	return true;

	label98:

	return false;
	goto label100;

	label100:
}

function b47FB5320E43f112($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function A214aEd1599664ca()
{
	return [];
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT * FROM `languages` ORDER BY `key` ASC;');

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label20;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B9869413eae86beb[] = $Fb9da1713bff19ce;
	}

	label20:

	return $B9869413eae86beb;
}

function b8B65e8cB6a1Dfe9($A7d54b094ae83c95, $b5fd3e3f0096d7f4, $Fe53bcd53690fff4)
{
	goto label4;

	label4:

	global $b62d6460eb33ea07;

	if (is_array($Fe53bcd53690fff4)) {
		goto label12;
	}

	$Fe53bcd53690fff4 = [$Fe53bcd53690fff4];

	label12:

	$f155fef57262b32a = b47fb5320e43f112($b5fd3e3f0096d7f4);
	goto label55;

	label17:

	goto label19;

	label18:

	$E8d2f47901b176c3 = 'bouquet_radios';

	label19:

	goto label70;
	goto label69;

	label21:

	$E8d2f47901b176c3 = 'bouquet_channels';

	label22:

	$Bb21be20a2aaeb78 = false;
	$A5a4a57a12bb19b3 = confirmIDs(json_decode($f155fef57262b32a[$E8d2f47901b176c3], true));

	foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
		if (!((0 < intval($Abcb228699a7f743)) && !in_array($Abcb228699a7f743, $A5a4a57a12bb19b3))) {
			goto label52;
		}

		$A5a4a57a12bb19b3[] = $Abcb228699a7f743;
		$Bb21be20a2aaeb78 = true;

		label52:
	}

	goto label72;

	label55:

	if (!$f155fef57262b32a) {
		goto label92;
	}

	if ($A7d54b094ae83c95 == 'stream') {
		goto label71;
	}

	if ($A7d54b094ae83c95 == 'movie') {
		goto label69;
	}

	if ($A7d54b094ae83c95 == 'radio') {
		goto label18;
	}

	$E8d2f47901b176c3 = 'bouquet_series';
	goto label17;

	label69:

	$E8d2f47901b176c3 = 'bouquet_movies';

	label70:

	goto label22;

	label71:

	goto label21;

	label72:

	if (!$Bb21be20a2aaeb78) {
		goto label92;
	}

	$b62d6460eb33ea07->query('UPDATE `bouquets` SET `' . $E8d2f47901b176c3 . '` = ? WHERE `id` = ?;', '[' . implode(',', array_map('intval', $A5a4a57a12bb19b3)) . ']', $b5fd3e3f0096d7f4);

	label92:

	goto label93;

	label93:
}

function f8e9Abb1f656E13f($A7d54b094ae83c95, $b5fd3e3f0096d7f4, $Fe53bcd53690fff4)
{
	goto label4;

	label4:

	global $b62d6460eb33ea07;

	if (is_array($Fe53bcd53690fff4)) {
		goto label12;
	}

	$Fe53bcd53690fff4 = [$Fe53bcd53690fff4];

	label12:

	$f155fef57262b32a = b47fb5320e43f112($b5fd3e3f0096d7f4);
	goto label42;

	label17:

	if (!$Bb21be20a2aaeb78) {
		goto label37;
	}

	$b62d6460eb33ea07->query('UPDATE `bouquets` SET `' . $E8d2f47901b176c3 . '` = ? WHERE `id` = ?;', '[' . implode(',', array_map('intval', $A5a4a57a12bb19b3)) . ']', $b5fd3e3f0096d7f4);

	label37:

	goto label87;

	label38:

	goto label40;

	label39:

	$E8d2f47901b176c3 = 'bouquet_radios';

	label40:

	goto label85;
	goto label84;

	label42:

	if (!$f155fef57262b32a) {
		goto label37;
	}

	if ($A7d54b094ae83c95 == 'stream') {
		goto label86;
	}

	if ($A7d54b094ae83c95 == 'movie') {
		goto label84;
	}

	if ($A7d54b094ae83c95 == 'radio') {
		goto label39;
	}

	$E8d2f47901b176c3 = 'bouquet_series';
	goto label38;

	label56:

	$E8d2f47901b176c3 = 'bouquet_channels';

	label57:

	$Bb21be20a2aaeb78 = false;
	$A5a4a57a12bb19b3 = confirmIDs(json_decode($f155fef57262b32a[$E8d2f47901b176c3], true));

	foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
		if (!(($Bb672d1983256a93 = array_search($Abcb228699a7f743, $A5a4a57a12bb19b3)) !== false)) {
			goto label81;
		}

		unset($A5a4a57a12bb19b3[$Bb672d1983256a93]);
		$Bb21be20a2aaeb78 = true;

		label81:
	}

	goto label17;

	label84:

	$E8d2f47901b176c3 = 'bouquet_movies';

	label85:

	goto label57;

	label86:

	goto label56;

	label87:
}

function confirmIDs($Fe53bcd53690fff4)
{
	$B9869413eae86beb = [];

	foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
		if (!(0 < intval($Abcb228699a7f743))) {
			goto label14;
		}

		$B9869413eae86beb[] = $Abcb228699a7f743;

		label14:
	}

	return array_unique($B9869413eae86beb);
}

function D2A972e2CE69c23b($E111d28e9acc50b9, $F48d5724f3b4ec96)
{
	require_once XUI_HOME . 'includes/libs/Dropbox.php';
	$cf20aa9dec61583c = new DropboxClient();

	try {
		$cf20aa9dec61583c->SetBearerToken(['t' => XUI::$rSettings['dropbox_token']]);
		$cf20aa9dec61583c->E06c9333d872bb8F($E111d28e9acc50b9, $F48d5724f3b4ec96);
		return true;
	}
	catch (exception $E0f0519e12b13b6b) {
		return false;
	}
}

function e167b0a8da1AD2A4($E111d28e9acc50b9)
{
	require_once XUI_HOME . 'includes/libs/Dropbox.php';
	$cf20aa9dec61583c = new DropboxClient();

	try {
		$cf20aa9dec61583c->SetBearerToken(['t' => XUI::$rSettings['dropbox_token']]);
		$cf20aa9dec61583c->Delete($E111d28e9acc50b9);
		return true;
	}
	catch (exception $E0f0519e12b13b6b) {
		return false;
	}
}

function a891e68753730298($Effb0ac2c5e5cfd3)
{
	if (XUI::$rSettings['parse_type'] == 'guessit') {
		goto label25;
	}

	$C6671ac66a4f1c57 = '/usr/bin/python3 ' . XUI_HOME . 'includes/python/release.py ' . escapeshellarg(pathinfo(str_replace('-', '_', $Effb0ac2c5e5cfd3))['filename']);
	goto label37;

	label25:

	$C6671ac66a4f1c57 = XUI_HOME . 'bin/guess ' . escapeshellarg(pathinfo($Effb0ac2c5e5cfd3)['filename'] . '.mkv');

	label37:

	return json_decode(shell_exec($C6671ac66a4f1c57), true);
}

function d43F76aDAB938157($C082ca9ed03f473c, $c13177660204b2bb, $b2fc2ccc466d8a65 = NULL)
{
	return json_decode(a730c6de034ba241($C082ca9ed03f473c, ['action' => 'scandir_recursive', 'dir' => $c13177660204b2bb, 'allowed' => implode('|', $b2fc2ccc466d8a65)]), true);
}

function e3845984369E03a9($C082ca9ed03f473c, $c13177660204b2bb, $b2fc2ccc466d8a65 = NULL)
{
	return json_decode(a730c6de034ba241($C082ca9ed03f473c, ['action' => 'scandir', 'dir' => $c13177660204b2bb, 'allowed' => implode('|', $b2fc2ccc466d8a65)]), true);
}

function shutdown_admin()
{
	global $b62d6460eb33ea07;

	if (!is_object($b62d6460eb33ea07)) {
		goto label9;
	}

	$b62d6460eb33ea07->close_mysql();

	label9:
}

goto label1164;

label1:

$ffb2d1a0985b1293['samesite'] = 'Strict';
session_set_cookie_params($ffb2d1a0985b1293);
session_start();

label8:

define('STATUS_FAILURE', 0);
goto label128;

label13:

$Ebb0b63f7c597ba4 = $dfb23e2fb3018f2e->isMobile();
$F7379362daea673f = 15;
$f2324bb307564adb = 10;
set_time_limit($F7379362daea673f);
ini_set('mysql.connect_timeout', $f2324bb307564adb);
goto label889;

label26:

define('STATUS_EXISTS_NAME', 21);
define('STATUS_EXISTS_USERNAME', 22);
define('STATUS_EXISTS_MAC', 23);
define('STATUS_EXISTS_SOURCE', 24);
define('STATUS_EXISTS_IP', 25);
goto label1195;

label47:

goto label1158;

label53:

goto label1140;

label59:

define('STATUS_INVALID_GROUP', 16);
define('STATUS_INVALID_DATA', 17);
define('STATUS_INVALID_DIR', 18);
define('STATUS_INVALID_MAC', 19);
define('STATUS_EXISTS_CODE', 20);
goto label26;

label80:
if (!(!empty($a3c3f656c0bb428b[11]) && (XUI::$rConfig['license'] != $a3c3f656c0bb428b[11]))) {
	goto label92;
}

exit('Your license key does not match the license file.<br/><br/>Please generate a new license using the CLI command:<br/>/home/xui/status');

label92:
if (!((php_sapi_name() !== 'cli') && !empty($a3c3f656c0bb428b[10]))) {
	goto label1090;
}

if (!(time() < $a3c3f656c0bb428b[10])) {
	goto label1090;
}
goto label1089;

label110:

goto label230;

label116:

goto label1054;

label122:

goto label212;

label128:

define('STATUS_SUCCESS', 1);
define('STATUS_SUCCESS_MULTI', 2);
define('STATUS_CODE_LENGTH', 3);
define('STATUS_NO_SOURCES', 4);
define('STATUS_DISABLED', 5);
goto label1062;

label149:

goto label1222;

label155:

define('STATUS_INVALID_USER', 31);
define('STATUS_CERTBOT', 32);
define('STATUS_CERTBOT_INVALID', 33);
define('STATUS_INVALID_INPUT', 34);
define('STATUS_NOT_RESELLER', 35);
goto label1234;

label176:

$b763a8051452ee57 = ['Africa/Abidjan' => 'Africa/Abidjan [GMT  00:00]', 'Africa/Accra' => 'Africa/Accra [GMT  00:00]', 'Africa/Addis_Ababa' => 'Africa/Addis_Ababa [EAT +03:00]', 'Africa/Algiers' => 'Africa/Algiers [CET +01:00]', 'Africa/Asmara' => 'Africa/Asmara [EAT +03:00]', 'Africa/Bamako' => 'Africa/Bamako [GMT  00:00]', 'Africa/Bangui' => 'Africa/Bangui [WAT +01:00]', 'Africa/Banjul' => 'Africa/Banjul [GMT  00:00]', 'Africa/Bissau' => 'Africa/Bissau [GMT  00:00]', 'Africa/Blantyre' => 'Africa/Blantyre [CAT +02:00]', 'Africa/Brazzaville' => 'Africa/Brazzaville [WAT +01:00]', 'Africa/Bujumbura' => 'Africa/Bujumbura [CAT +02:00]', 'Africa/Cairo' => 'Africa/Cairo [EET +02:00]', 'Africa/Casablanca' => 'Africa/Casablanca [WEST +01:00]', 'Africa/Ceuta' => 'Africa/Ceuta [CEST +02:00]', 'Africa/Conakry' => 'Africa/Conakry [GMT  00:00]', 'Africa/Dakar' => 'Africa/Dakar [GMT  00:00]', 'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam [EAT +03:00]', 'Africa/Djibouti' => 'Africa/Djibouti [EAT +03:00]', 'Africa/Douala' => 'Africa/Douala [WAT +01:00]', 'Africa/El_Aaiun' => 'Africa/El_Aaiun [WEST +01:00]', 'Africa/Freetown' => 'Africa/Freetown [GMT  00:00]', 'Africa/Gaborone' => 'Africa/Gaborone [CAT +02:00]', 'Africa/Harare' => 'Africa/Harare [CAT +02:00]', 'Africa/Johannesburg' => 'Africa/Johannesburg [SAST +02:00]', 'Africa/Juba' => 'Africa/Juba [EAT +03:00]', 'Africa/Kampala' => 'Africa/Kampala [EAT +03:00]', 'Africa/Khartoum' => 'Africa/Khartoum [EAT +03:00]', 'Africa/Kigali' => 'Africa/Kigali [CAT +02:00]', 'Africa/Kinshasa' => 'Africa/Kinshasa [WAT +01:00]', 'Africa/Lagos' => 'Africa/Lagos [WAT +01:00]', 'Africa/Libreville' => 'Africa/Libreville [WAT +01:00]', 'Africa/Lome' => 'Africa/Lome [GMT  00:00]', 'Africa/Luanda' => 'Africa/Luanda [WAT +01:00]', 'Africa/Lubumbashi' => 'Africa/Lubumbashi [CAT +02:00]', 'Africa/Lusaka' => 'Africa/Lusaka [CAT +02:00]', 'Africa/Malabo' => 'Africa/Malabo [WAT +01:00]', 'Africa/Maputo' => 'Africa/Maputo [CAT +02:00]', 'Africa/Maseru' => 'Africa/Maseru [SAST +02:00]', 'Africa/Mbabane' => 'Africa/Mbabane [SAST +02:00]', 'Africa/Mogadishu' => 'Africa/Mogadishu [EAT +03:00]', 'Africa/Monrovia' => 'Africa/Monrovia [GMT  00:00]', 'Africa/Nairobi' => 'Africa/Nairobi [EAT +03:00]', 'Africa/Ndjamena' => 'Africa/Ndjamena [WAT +01:00]', 'Africa/Niamey' => 'Africa/Niamey [WAT +01:00]', 'Africa/Nouakchott' => 'Africa/Nouakchott [GMT  00:00]', 'Africa/Ouagadougou' => 'Africa/Ouagadougou [GMT  00:00]', 'Africa/Porto-Novo' => 'Africa/Porto-Novo [WAT +01:00]', 'Africa/Sao_Tome' => 'Africa/Sao_Tome [GMT  00:00]', 'Africa/Tripoli' => 'Africa/Tripoli [EET +02:00]', 'Africa/Tunis' => 'Africa/Tunis [CET +01:00]', 'Africa/Windhoek' => 'Africa/Windhoek [WAST +02:00]', 'America/Adak' => 'America/Adak [HADT -09:00]', 'America/Anchorage' => 'America/Anchorage [AKDT -08:00]', 'America/Anguilla' => 'America/Anguilla [AST -04:00]', 'America/Antigua' => 'America/Antigua [AST -04:00]', 'America/Araguaina' => 'America/Araguaina [BRT -03:00]', 'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires [ART -03:00]', 'America/Argentina/Catamarca' => 'America/Argentina/Catamarca [ART -03:00]', 'America/Argentina/Cordoba' => 'America/Argentina/Cordoba [ART -03:00]', 'America/Argentina/Jujuy' => 'America/Argentina/Jujuy [ART -03:00]', 'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja [ART -03:00]', 'America/Argentina/Mendoza' => 'America/Argentina/Mendoza [ART -03:00]', 'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos [ART -03:00]', 'America/Argentina/Salta' => 'America/Argentina/Salta [ART -03:00]', 'America/Argentina/San_Juan' => 'America/Argentina/San_Juan [ART -03:00]', 'America/Argentina/San_Luis' => 'America/Argentina/San_Luis [ART -03:00]', 'America/Argentina/Tucuman' => 'America/Argentina/Tucuman [ART -03:00]', 'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia [ART -03:00]', 'America/Aruba' => 'America/Aruba [AST -04:00]', 'America/Asuncion' => 'America/Asuncion [PYT -04:00]', 'America/Atikokan' => 'America/Atikokan [EST -05:00]', 'America/Bahia' => 'America/Bahia [BRT -03:00]', 'America/Bahia_Banderas' => 'America/Bahia_Banderas [CDT -05:00]', 'America/Barbados' => 'America/Barbados [AST -04:00]', 'America/Belem' => 'America/Belem [BRT -03:00]', 'America/Belize' => 'America/Belize [CST -06:00]', 'America/Blanc-Sablon' => 'America/Blanc-Sablon [AST -04:00]', 'America/Boa_Vista' => 'America/Boa_Vista [AMT -04:00]', 'America/Bogota' => 'America/Bogota [COT -05:00]', 'America/Boise' => 'America/Boise [MDT -06:00]', 'America/Cambridge_Bay' => 'America/Cambridge_Bay [MDT -06:00]', 'America/Campo_Grande' => 'America/Campo_Grande [AMT -04:00]', 'America/Cancun' => 'America/Cancun [CDT -05:00]', 'America/Caracas' => 'America/Caracas [VET -04:30]', 'America/Cayenne' => 'America/Cayenne [GFT -03:00]', 'America/Cayman' => 'America/Cayman [EST -05:00]', 'America/Chicago' => 'America/Chicago [CDT -05:00]', 'America/Chihuahua' => 'America/Chihuahua [MDT -06:00]', 'America/Costa_Rica' => 'America/Costa_Rica [CST -06:00]', 'America/Creston' => 'America/Creston [MST -07:00]', 'America/Cuiaba' => 'America/Cuiaba [AMT -04:00]', 'America/Curacao' => 'America/Curacao [AST -04:00]', 'America/Danmarkshavn' => 'America/Danmarkshavn [GMT  00:00]', 'America/Dawson' => 'America/Dawson [PDT -07:00]', 'America/Dawson_Creek' => 'America/Dawson_Creek [MST -07:00]', 'America/Denver' => 'America/Denver [MDT -06:00]', 'America/Detroit' => 'America/Detroit [EDT -04:00]', 'America/Dominica' => 'America/Dominica [AST -04:00]', 'America/Edmonton' => 'America/Edmonton [MDT -06:00]', 'America/Eirunepe' => 'America/Eirunepe [ACT -05:00]', 'America/El_Salvador' => 'America/El_Salvador [CST -06:00]', 'America/Fortaleza' => 'America/Fortaleza [BRT -03:00]', 'America/Glace_Bay' => 'America/Glace_Bay [ADT -03:00]', 'America/Godthab' => 'America/Godthab [WGST -02:00]', 'America/Goose_Bay' => 'America/Goose_Bay [ADT -03:00]', 'America/Grand_Turk' => 'America/Grand_Turk [AST -04:00]', 'America/Grenada' => 'America/Grenada [AST -04:00]', 'America/Guadeloupe' => 'America/Guadeloupe [AST -04:00]', 'America/Guatemala' => 'America/Guatemala [CST -06:00]', 'America/Guayaquil' => 'America/Guayaquil [ECT -05:00]', 'America/Guyana' => 'America/Guyana [GYT -04:00]', 'America/Halifax' => 'America/Halifax [ADT -03:00]', 'America/Havana' => 'America/Havana [CDT -04:00]', 'America/Hermosillo' => 'America/Hermosillo [MST -07:00]', 'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis [EDT -04:00]', 'America/Indiana/Knox' => 'America/Indiana/Knox [CDT -05:00]', 'America/Indiana/Marengo' => 'America/Indiana/Marengo [EDT -04:00]', 'America/Indiana/Petersburg' => 'America/Indiana/Petersburg [EDT -04:00]', 'America/Indiana/Tell_City' => 'America/Indiana/Tell_City [CDT -05:00]', 'America/Indiana/Vevay' => 'America/Indiana/Vevay [EDT -04:00]', 'America/Indiana/Vincennes' => 'America/Indiana/Vincennes [EDT -04:00]', 'America/Indiana/Winamac' => 'America/Indiana/Winamac [EDT -04:00]', 'America/Inuvik' => 'America/Inuvik [MDT -06:00]', 'America/Iqaluit' => 'America/Iqaluit [EDT -04:00]', 'America/Jamaica' => 'America/Jamaica [EST -05:00]', 'America/Juneau' => 'America/Juneau [AKDT -08:00]', 'America/Kentucky/Louisville' => 'America/Kentucky/Louisville [EDT -04:00]', 'America/Kentucky/Monticello' => 'America/Kentucky/Monticello [EDT -04:00]', 'America/Kralendijk' => 'America/Kralendijk [AST -04:00]', 'America/La_Paz' => 'America/La_Paz [BOT -04:00]', 'America/Lima' => 'America/Lima [PET -05:00]', 'America/Los_Angeles' => 'America/Los_Angeles [PDT -07:00]', 'America/Lower_Princes' => 'America/Lower_Princes [AST -04:00]', 'America/Maceio' => 'America/Maceio [BRT -03:00]', 'America/Managua' => 'America/Managua [CST -06:00]', 'America/Manaus' => 'America/Manaus [AMT -04:00]', 'America/Marigot' => 'America/Marigot [AST -04:00]', 'America/Martinique' => 'America/Martinique [AST -04:00]', 'America/Matamoros' => 'America/Matamoros [CDT -05:00]', 'America/Mazatlan' => 'America/Mazatlan [MDT -06:00]', 'America/Menominee' => 'America/Menominee [CDT -05:00]', 'America/Merida' => 'America/Merida [CDT -05:00]', 'America/Metlakatla' => 'America/Metlakatla [PST -08:00]', 'America/Mexico_City' => 'America/Mexico_City [CDT -05:00]', 'America/Miquelon' => 'America/Miquelon [PMDT -02:00]', 'America/Moncton' => 'America/Moncton [ADT -03:00]', 'America/Monterrey' => 'America/Monterrey [CDT -05:00]', 'America/Montevideo' => 'America/Montevideo [UYT -03:00]', 'America/Montserrat' => 'America/Montserrat [AST -04:00]', 'America/Nassau' => 'America/Nassau [EDT -04:00]', 'America/New_York' => 'America/New_York [EDT -04:00]', 'America/Nipigon' => 'America/Nipigon [EDT -04:00]', 'America/Nome' => 'America/Nome [AKDT -08:00]', 'America/Noronha' => 'America/Noronha [FNT -02:00]', 'America/North_Dakota/Beulah' => 'America/North_Dakota/Beulah [CDT -05:00]', 'America/North_Dakota/Center' => 'America/North_Dakota/Center [CDT -05:00]', 'America/North_Dakota/New_Salem' => 'America/North_Dakota/New_Salem [CDT -05:00]', 'America/Ojinaga' => 'America/Ojinaga [MDT -06:00]', 'America/Panama' => 'America/Panama [EST -05:00]', 'America/Pangnirtung' => 'America/Pangnirtung [EDT -04:00]', 'America/Paramaribo' => 'America/Paramaribo [SRT -03:00]', 'America/Phoenix' => 'America/Phoenix [MST -07:00]', 'America/Port-au-Prince' => 'America/Port-au-Prince [EDT -04:00]', 'America/Port_of_Spain' => 'America/Port_of_Spain [AST -04:00]', 'America/Porto_Velho' => 'America/Porto_Velho [AMT -04:00]', 'America/Puerto_Rico' => 'America/Puerto_Rico [AST -04:00]', 'America/Rainy_River' => 'America/Rainy_River [CDT -05:00]', 'America/Rankin_Inlet' => 'America/Rankin_Inlet [CDT -05:00]', 'America/Recife' => 'America/Recife [BRT -03:00]', 'America/Regina' => 'America/Regina [CST -06:00]', 'America/Resolute' => 'America/Resolute [CDT -05:00]', 'America/Rio_Branco' => 'America/Rio_Branco [ACT -05:00]', 'America/Santa_Isabel' => 'America/Santa_Isabel [PDT -07:00]', 'America/Santarem' => 'America/Santarem [BRT -03:00]', 'America/Santiago' => 'America/Santiago [CLST -03:00]', 'America/Santo_Domingo' => 'America/Santo_Domingo [AST -04:00]', 'America/Sao_Paulo' => 'America/Sao_Paulo [BRT -03:00]', 'America/Scoresbysund' => 'America/Scoresbysund [EGST  00:00]', 'America/Sitka' => 'America/Sitka [AKDT -08:00]', 'America/St_Barthelemy' => 'America/St_Barthelemy [AST -04:00]', 'America/St_Johns' => 'America/St_Johns [NDT -02:30]', 'America/St_Kitts' => 'America/St_Kitts [AST -04:00]', 'America/St_Lucia' => 'America/St_Lucia [AST -04:00]', 'America/St_Thomas' => 'America/St_Thomas [AST -04:00]', 'America/St_Vincent' => 'America/St_Vincent [AST -04:00]', 'America/Swift_Current' => 'America/Swift_Current [CST -06:00]', 'America/Tegucigalpa' => 'America/Tegucigalpa [CST -06:00]', 'America/Thule' => 'America/Thule [ADT -03:00]', 'America/Thunder_Bay' => 'America/Thunder_Bay [EDT -04:00]', 'America/Tijuana' => 'America/Tijuana [PDT -07:00]', 'America/Toronto' => 'America/Toronto [EDT -04:00]', 'America/Tortola' => 'America/Tortola [AST -04:00]', 'America/Vancouver' => 'America/Vancouver [PDT -07:00]', 'America/Whitehorse' => 'America/Whitehorse [PDT -07:00]', 'America/Winnipeg' => 'America/Winnipeg [CDT -05:00]', 'America/Yakutat' => 'America/Yakutat [AKDT -08:00]', 'America/Yellowknife' => 'America/Yellowknife [MDT -06:00]', 'Antarctica/Casey' => 'Antarctica/Casey [AWST +08:00]', 'Antarctica/Davis' => 'Antarctica/Davis [DAVT +07:00]', 'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville [DDUT +10:00]', 'Antarctica/Macquarie' => 'Antarctica/Macquarie [MIST +11:00]', 'Antarctica/Mawson' => 'Antarctica/Mawson [MAWT +05:00]', 'Antarctica/McMurdo' => 'Antarctica/McMurdo [NZDT +13:00]', 'Antarctica/Palmer' => 'Antarctica/Palmer [CLST -03:00]', 'Antarctica/Rothera' => 'Antarctica/Rothera [ROTT -03:00]', 'Antarctica/Syowa' => 'Antarctica/Syowa [SYOT +03:00]', 'Antarctica/Troll' => 'Antarctica/Troll [CEST +02:00]', 'Antarctica/Vostok' => 'Antarctica/Vostok [VOST +06:00]', 'Arctic/Longyearbyen' => 'Arctic/Longyearbyen [CEST +02:00]', 'Asia/Aden' => 'Asia/Aden [AST +03:00]', 'Asia/Almaty' => 'Asia/Almaty [ALMT +06:00]', 'Asia/Amman' => 'Asia/Amman [EEST +03:00]', 'Asia/Anadyr' => 'Asia/Anadyr [ANAT +12:00]', 'Asia/Aqtau' => 'Asia/Aqtau [AQTT +05:00]', 'Asia/Aqtobe' => 'Asia/Aqtobe [AQTT +05:00]', 'Asia/Ashgabat' => 'Asia/Ashgabat [TMT +05:00]', 'Asia/Baghdad' => 'Asia/Baghdad [AST +03:00]', 'Asia/Bahrain' => 'Asia/Bahrain [AST +03:00]', 'Asia/Baku' => 'Asia/Baku [AZST +05:00]', 'Asia/Bangkok' => 'Asia/Bangkok [ICT +07:00]', 'Asia/Beirut' => 'Asia/Beirut [EEST +03:00]', 'Asia/Bishkek' => 'Asia/Bishkek [KGT +06:00]', 'Asia/Brunei' => 'Asia/Brunei [BNT +08:00]', 'Asia/Chita' => 'Asia/Chita [IRKT +08:00]', 'Asia/Choibalsan' => 'Asia/Choibalsan [CHOT +08:00]', 'Asia/Colombo' => 'Asia/Colombo [IST +05:30]', 'Asia/Damascus' => 'Asia/Damascus [EEST +03:00]', 'Asia/Dhaka' => 'Asia/Dhaka [BDT +06:00]', 'Asia/Dili' => 'Asia/Dili [TLT +09:00]', 'Asia/Dubai' => 'Asia/Dubai [GST +04:00]', 'Asia/Dushanbe' => 'Asia/Dushanbe [TJT +05:00]', 'Asia/Gaza' => 'Asia/Gaza [EET +02:00]', 'Asia/Hebron' => 'Asia/Hebron [EET +02:00]', 'Asia/Ho_Chi_Minh' => 'Asia/Ho_Chi_Minh [ICT +07:00]', 'Asia/Hong_Kong' => 'Asia/Hong_Kong [HKT +08:00]', 'Asia/Hovd' => 'Asia/Hovd [HOVT +07:00]', 'Asia/Irkutsk' => 'Asia/Irkutsk [IRKT +08:00]', 'Asia/Jakarta' => 'Asia/Jakarta [WIB +07:00]', 'Asia/Jayapura' => 'Asia/Jayapura [WIT +09:00]', 'Asia/Jerusalem' => 'Asia/Jerusalem [IDT +03:00]', 'Asia/Kabul' => 'Asia/Kabul [AFT +04:30]', 'Asia/Kamchatka' => 'Asia/Kamchatka [PETT +12:00]', 'Asia/Karachi' => 'Asia/Karachi [PKT +05:00]', 'Asia/Kathmandu' => 'Asia/Kathmandu [NPT +05:45]', 'Asia/Khandyga' => 'Asia/Khandyga [YAKT +09:00]', 'Asia/Kolkata' => 'Asia/Kolkata [IST +05:30]', 'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk [KRAT +07:00]', 'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur [MYT +08:00]', 'Asia/Kuching' => 'Asia/Kuching [MYT +08:00]', 'Asia/Kuwait' => 'Asia/Kuwait [AST +03:00]', 'Asia/Macau' => 'Asia/Macau [CST +08:00]', 'Asia/Magadan' => 'Asia/Magadan [MAGT +10:00]', 'Asia/Makassar' => 'Asia/Makassar [WITA +08:00]', 'Asia/Manila' => 'Asia/Manila [PHT +08:00]', 'Asia/Muscat' => 'Asia/Muscat [GST +04:00]', 'Asia/Nicosia' => 'Asia/Nicosia [EEST +03:00]', 'Asia/Novokuznetsk' => 'Asia/Novokuznetsk [KRAT +07:00]', 'Asia/Novosibirsk' => 'Asia/Novosibirsk [NOVT +06:00]', 'Asia/Omsk' => 'Asia/Omsk [OMST +06:00]', 'Asia/Oral' => 'Asia/Oral [ORAT +05:00]', 'Asia/Phnom_Penh' => 'Asia/Phnom_Penh [ICT +07:00]', 'Asia/Pontianak' => 'Asia/Pontianak [WIB +07:00]', 'Asia/Pyongyang' => 'Asia/Pyongyang [KST +09:00]', 'Asia/Qatar' => 'Asia/Qatar [AST +03:00]', 'Asia/Qyzylorda' => 'Asia/Qyzylorda [QYZT +06:00]', 'Asia/Rangoon' => 'Asia/Rangoon [MMT +06:30]', 'Asia/Riyadh' => 'Asia/Riyadh [AST +03:00]', 'Asia/Sakhalin' => 'Asia/Sakhalin [SAKT +10:00]', 'Asia/Samarkand' => 'Asia/Samarkand [UZT +05:00]', 'Asia/Seoul' => 'Asia/Seoul [KST +09:00]', 'Asia/Shanghai' => 'Asia/Shanghai [CST +08:00]', 'Asia/Singapore' => 'Asia/Singapore [SGT +08:00]', 'Asia/Srednekolymsk' => 'Asia/Srednekolymsk [SRET +11:00]', 'Asia/Taipei' => 'Asia/Taipei [CST +08:00]', 'Asia/Tashkent' => 'Asia/Tashkent [UZT +05:00]', 'Asia/Tbilisi' => 'Asia/Tbilisi [GET +04:00]', 'Asia/Tehran' => 'Asia/Tehran [IRST +03:30]', 'Asia/Thimphu' => 'Asia/Thimphu [BTT +06:00]', 'Asia/Tokyo' => 'Asia/Tokyo [JST +09:00]', 'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar [ULAT +08:00]', 'Asia/Urumqi' => 'Asia/Urumqi [XJT +06:00]', 'Asia/Ust-Nera' => 'Asia/Ust-Nera [VLAT +10:00]', 'Asia/Vientiane' => 'Asia/Vientiane [ICT +07:00]', 'Asia/Vladivostok' => 'Asia/Vladivostok [VLAT +10:00]', 'Asia/Yakutsk' => 'Asia/Yakutsk [YAKT +09:00]', 'Asia/Yekaterinburg' => 'Asia/Yekaterinburg [YEKT +05:00]', 'Asia/Yerevan' => 'Asia/Yerevan [AMT +04:00]', 'Atlantic/Azores' => 'Atlantic/Azores [AZOST  00:00]', 'Atlantic/Bermuda' => 'Atlantic/Bermuda [ADT -03:00]', 'Atlantic/Canary' => 'Atlantic/Canary [WEST +01:00]', 'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde [CVT -01:00]', 'Atlantic/Faroe' => 'Atlantic/Faroe [WEST +01:00]', 'Atlantic/Madeira' => 'Atlantic/Madeira [WEST +01:00]', 'Atlantic/Reykjavik' => 'Atlantic/Reykjavik [GMT  00:00]', 'Atlantic/South_Georgia' => 'Atlantic/South_Georgia [GST -02:00]', 'Atlantic/St_Helena' => 'Atlantic/St_Helena [GMT  00:00]', 'Atlantic/Stanley' => 'Atlantic/Stanley [FKST -03:00]', 'Australia/Adelaide' => 'Australia/Adelaide [ACDT +10:30]', 'Australia/Brisbane' => 'Australia/Brisbane [AEST +10:00]', 'Australia/Broken_Hill' => 'Australia/Broken_Hill [ACDT +10:30]', 'Australia/Currie' => 'Australia/Currie [AEDT +11:00]', 'Australia/Darwin' => 'Australia/Darwin [ACST +09:30]', 'Australia/Eucla' => 'Australia/Eucla [ACWST +08:45]', 'Australia/Hobart' => 'Australia/Hobart [AEDT +11:00]', 'Australia/Lindeman' => 'Australia/Lindeman [AEST +10:00]', 'Australia/Lord_Howe' => 'Australia/Lord_Howe [LHDT +11:00]', 'Australia/Melbourne' => 'Australia/Melbourne [AEDT +11:00]', 'Australia/Perth' => 'Australia/Perth [AWST +08:00]', 'Australia/Sydney' => 'Australia/Sydney [AEDT +11:00]', 'Europe/Amsterdam' => 'Europe/Amsterdam [CEST +02:00]', 'Europe/Andorra' => 'Europe/Andorra [CEST +02:00]', 'Europe/Athens' => 'Europe/Athens [EEST +03:00]', 'Europe/Belgrade' => 'Europe/Belgrade [CEST +02:00]', 'Europe/Berlin' => 'Europe/Berlin [CEST +02:00]', 'Europe/Bratislava' => 'Europe/Bratislava [CEST +02:00]', 'Europe/Brussels' => 'Europe/Brussels [CEST +02:00]', 'Europe/Bucharest' => 'Europe/Bucharest [EEST +03:00]', 'Europe/Budapest' => 'Europe/Budapest [CEST +02:00]', 'Europe/Busingen' => 'Europe/Busingen [CEST +02:00]', 'Europe/Chisinau' => 'Europe/Chisinau [EEST +03:00]', 'Europe/Copenhagen' => 'Europe/Copenhagen [CEST +02:00]', 'Europe/Dublin' => 'Europe/Dublin [IST +01:00]', 'Europe/Gibraltar' => 'Europe/Gibraltar [CEST +02:00]', 'Europe/Guernsey' => 'Europe/Guernsey [BST +01:00]', 'Europe/Helsinki' => 'Europe/Helsinki [EEST +03:00]', 'Europe/Isle_of_Man' => 'Europe/Isle_of_Man [BST +01:00]', 'Europe/Istanbul' => 'Europe/Istanbul [EEST +03:00]', 'Europe/Jersey' => 'Europe/Jersey [BST +01:00]', 'Europe/Kaliningrad' => 'Europe/Kaliningrad [EET +02:00]', 'Europe/Kiev' => 'Europe/Kiev [EEST +03:00]', 'Europe/Lisbon' => 'Europe/Lisbon [WEST +01:00]', 'Europe/Ljubljana' => 'Europe/Ljubljana [CEST +02:00]', 'Europe/London' => 'Europe/London [BST +01:00]', 'Europe/Luxembourg' => 'Europe/Luxembourg [CEST +02:00]', 'Europe/Madrid' => 'Europe/Madrid [CEST +02:00]', 'Europe/Malta' => 'Europe/Malta [CEST +02:00]', 'Europe/Mariehamn' => 'Europe/Mariehamn [EEST +03:00]', 'Europe/Minsk' => 'Europe/Minsk [MSK +03:00]', 'Europe/Monaco' => 'Europe/Monaco [CEST +02:00]', 'Europe/Moscow' => 'Europe/Moscow [MSK +03:00]', 'Europe/Oslo' => 'Europe/Oslo [CEST +02:00]', 'Europe/Paris' => 'Europe/Paris [CEST +02:00]', 'Europe/Podgorica' => 'Europe/Podgorica [CEST +02:00]', 'Europe/Prague' => 'Europe/Prague [CEST +02:00]', 'Europe/Riga' => 'Europe/Riga [EEST +03:00]', 'Europe/Rome' => 'Europe/Rome [CEST +02:00]', 'Europe/Samara' => 'Europe/Samara [SAMT +04:00]', 'Europe/San_Marino' => 'Europe/San_Marino [CEST +02:00]', 'Europe/Sarajevo' => 'Europe/Sarajevo [CEST +02:00]', 'Europe/Simferopol' => 'Europe/Simferopol [MSK +03:00]', 'Europe/Skopje' => 'Europe/Skopje [CEST +02:00]', 'Europe/Sofia' => 'Europe/Sofia [EEST +03:00]', 'Europe/Stockholm' => 'Europe/Stockholm [CEST +02:00]', 'Europe/Tallinn' => 'Europe/Tallinn [EEST +03:00]', 'Europe/Tirane' => 'Europe/Tirane [CEST +02:00]', 'Europe/Uzhgorod' => 'Europe/Uzhgorod [EEST +03:00]', 'Europe/Vaduz' => 'Europe/Vaduz [CEST +02:00]', 'Europe/Vatican' => 'Europe/Vatican [CEST +02:00]', 'Europe/Vienna' => 'Europe/Vienna [CEST +02:00]', 'Europe/Vilnius' => 'Europe/Vilnius [EEST +03:00]', 'Europe/Volgograd' => 'Europe/Volgograd [MSK +03:00]', 'Europe/Warsaw' => 'Europe/Warsaw [CEST +02:00]', 'Europe/Zagreb' => 'Europe/Zagreb [CEST +02:00]', 'Europe/Zaporozhye' => 'Europe/Zaporozhye [EEST +03:00]', 'Europe/Zurich' => 'Europe/Zurich [CEST +02:00]', 'Indian/Antananarivo' => 'Indian/Antananarivo [EAT +03:00]', 'Indian/Chagos' => 'Indian/Chagos [IOT +06:00]', 'Indian/Christmas' => 'Indian/Christmas [CXT +07:00]', 'Indian/Cocos' => 'Indian/Cocos [CCT +06:30]', 'Indian/Comoro' => 'Indian/Comoro [EAT +03:00]', 'Indian/Kerguelen' => 'Indian/Kerguelen [TFT +05:00]', 'Indian/Mahe' => 'Indian/Mahe [SCT +04:00]', 'Indian/Maldives' => 'Indian/Maldives [MVT +05:00]', 'Indian/Mauritius' => 'Indian/Mauritius [MUT +04:00]', 'Indian/Mayotte' => 'Indian/Mayotte [EAT +03:00]', 'Indian/Reunion' => 'Indian/Reunion [RET +04:00]', 'Pacific/Apia' => 'Pacific/Apia [WSDT +14:00]', 'Pacific/Auckland' => 'Pacific/Auckland [NZDT +13:00]', 'Pacific/Bougainville' => 'Pacific/Bougainville [BST +11:00]', 'Pacific/Chatham' => 'Pacific/Chatham [CHADT +13:45]', 'Pacific/Chuuk' => 'Pacific/Chuuk [CHUT +10:00]', 'Pacific/Easter' => 'Pacific/Easter [EASST -05:00]', 'Pacific/Efate' => 'Pacific/Efate [VUT +11:00]', 'Pacific/Enderbury' => 'Pacific/Enderbury [PHOT +13:00]', 'Pacific/Fakaofo' => 'Pacific/Fakaofo [TKT +13:00]', 'Pacific/Fiji' => 'Pacific/Fiji [FJT +12:00]', 'Pacific/Funafuti' => 'Pacific/Funafuti [TVT +12:00]', 'Pacific/Galapagos' => 'Pacific/Galapagos [GALT -06:00]', 'Pacific/Gambier' => 'Pacific/Gambier [GAMT -09:00]', 'Pacific/Guadalcanal' => 'Pacific/Guadalcanal [SBT +11:00]', 'Pacific/Guam' => 'Pacific/Guam [ChST +10:00]', 'Pacific/Honolulu' => 'Pacific/Honolulu [HST -10:00]', 'Pacific/Johnston' => 'Pacific/Johnston [HST -10:00]', 'Pacific/Kiritimati' => 'Pacific/Kiritimati [LINT +14:00]', 'Pacific/Kosrae' => 'Pacific/Kosrae [KOST +11:00]', 'Pacific/Kwajalein' => 'Pacific/Kwajalein [MHT +12:00]', 'Pacific/Majuro' => 'Pacific/Majuro [MHT +12:00]', 'Pacific/Marquesas' => 'Pacific/Marquesas [MART -09:30]', 'Pacific/Midway' => 'Pacific/Midway [SST -11:00]', 'Pacific/Nauru' => 'Pacific/Nauru [NRT +12:00]', 'Pacific/Niue' => 'Pacific/Niue [NUT -11:00]', 'Pacific/Norfolk' => 'Pacific/Norfolk [NFT +11:30]', 'Pacific/Noumea' => 'Pacific/Noumea [NCT +11:00]', 'Pacific/Pago_Pago' => 'Pacific/Pago_Pago [SST -11:00]', 'Pacific/Palau' => 'Pacific/Palau [PWT +09:00]', 'Pacific/Pitcairn' => 'Pacific/Pitcairn [PST -08:00]', 'Pacific/Pohnpei' => 'Pacific/Pohnpei [PONT +11:00]', 'Pacific/Port_Moresby' => 'Pacific/Port_Moresby [PGT +10:00]', 'Pacific/Rarotonga' => 'Pacific/Rarotonga [CKT -10:00]', 'Pacific/Saipan' => 'Pacific/Saipan [ChST +10:00]', 'Pacific/Tahiti' => 'Pacific/Tahiti [TAHT -10:00]', 'Pacific/Tarawa' => 'Pacific/Tarawa [GILT +12:00]', 'Pacific/Tongatapu' => 'Pacific/Tongatapu [TOT +13:00]', 'Pacific/Wake' => 'Pacific/Wake [WAKT +12:00]', 'Pacific/Wallis' => 'Pacific/Wallis [WFT +12:00]', 'UTC' => 'UTC [UTC  00:00]'];
$E42de0f0a9c9cd4c = ['new' => 'Create', 'extend' => 'Extend', 'convert' => 'Convert', 'edit' => 'Edit', 'enable' => 'Enable', 'disable' => 'Disable', 'delete' => 'Delete', 'send_event' => 'MAG Event', 'adjust_credits' => 'Adjust Credits'];
$Efdd269715ece679 = ['LB_TOKEN_INVALID' => 'Token Failure', 'NOT_IN_BOUQUET' => 'Not in Bouquet', 'BLOCKED_ASN' => 'Blocked ASN', 'ISP_LOCK_FAILED' => 'ISP Lock Failed', 'USER_DISALLOW_EXT' => 'Extension Disallowed', 'AUTH_FAILED' => 'Authentication Failed', 'USER_EXPIRED' => 'User Expired', 'USER_DISABLED' => 'User Disabled', 'USER_BAN' => 'User Banned', 'MAG_TOKEN_INVALID' => 'MAG Token Invalid', 'STALKER_CHANNEL_MISMATCH' => 'Stalker Channel Mismatch', 'STALKER_IP_MISMATCH' => 'Stalker IP Mismatch', 'STALKER_KEY_EXPIRED' => 'Stalker Key Expired', 'STALKER_DECRYPT_FAILED' => 'Stalker Decrypt Failed', 'EMPTY_UA' => 'Empty User-Agent', 'IP_BAN' => 'IP Banned', 'COUNTRY_DISALLOW' => 'Country Disallowed', 'USER_AGENT_BAN' => 'User-Agent Disallowed', 'USER_ALREADY_CONNECTED' => 'IP Limit Reached', 'RESTREAM_DETECT' => 'Restream Detected', 'PROXY_DETECT' => 'Proxy / VPN Detected', 'HOSTING_DETECT' => 'Hosting Server Detected', 'LINE_CREATE_FAIL' => 'Connection Failed', 'CONNECTION_LOOP' => 'Connection Loop', 'TOKEN_EXPIRED' => 'Token Expired', 'IP_MISMATCH' => 'IP Mismatch'];
$f7d55d79e2700f0d = [-1 => '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light btn-fixed-xl\'>NO SERVERS</button>', 0 => '<button type=\'button\' class=\'btn btn-dark btn-xs waves-effect waves-light btn-fixed-xl\'>STOPPED</button>', 1 => '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed-xl\'>ONLINE</button>', 2 => '<button type=\'button\' class=\'btn btn-warning btn-xs waves-effect waves-light btn-fixed\'>STARTING</button>', 3 => '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light btn-fixed\'>DOWN</button>', 4 => '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light btn-fixed-xl\'>ON DEMAND</button>', 5 => '<button type=\'button\' class=\'btn btn-purple btn-xs waves-effect waves-light btn-fixed-xl\'>DIRECT SOURCE</button>', 6 => '<button type=\'button\' class=\'btn btn-primary btn-xs waves-effect waves-light btn-fixed-xl\'>CREATING...</button>', 7 => '<button type=\'button\' class=\'btn btn-purple btn-xs waves-effect waves-light btn-fixed-xl\'>DIRECT STREAM</button>'];
$d09052108da9e080 = [-1 => '<button type=\'button\' class=\'btn bg-animate-secondary btn-xs waves-effect waves-light no-border btn-fixed-xl\'>NO SERVERS</button>', 0 => '<button type=\'button\' class=\'btn bg-animate-dark btn-xs waves-effect waves-light no-border btn-fixed-xl\'>STOPPED</button>', 2 => '<button type=\'button\' class=\'btn bg-animate-warning btn-xs waves-effect waves-light no-border btn-fixed-xl\'>STARTING</button>', 3 => '<button type=\'button\' class=\'btn bg-animate-danger btn-xs waves-effect waves-light no-border btn-fixed-xl\'>DOWN</button>', 4 => '<button type=\'button\' class=\'btn bg-animate-success btn-xs waves-effect waves-light no-border btn-fixed-xl\'>ON DEMAND</button>', 5 => '<button type=\'button\' class=\'btn bg-animate-purple btn-xs waves-effect waves-light no-border btn-fixed-xl\'>DIRECT</button>', 7 => '<button type=\'button\' class=\'btn bg-animate-warning btn-xs waves-effect waves-light no-border btn-fixed-xl\'>ENCODING</button>', 8 => '<button type=\'button\' class=\'btn bg-animate-dark btn-xs waves-effect waves-light no-border btn-fixed-xl\'>NOT ENCODED</button>', 9 => '<button type=\'button\' class=\'btn bg-animate-info btn-xs waves-effect waves-light no-border btn-fixed-xl\'>ENCODED</button>', 10 => '<button type=\'button\' class=\'btn bg-animate-danger btn-xs waves-effect waves-light no-border btn-fixed-xl\'>BROKEN</button>'];
goto label1128;

label182:

goto label1083;

label188:

goto label1122;

label194:

goto label991;

label200:

goto label1009;

label206:

goto label53;

label212:

goto label218;

label218:

goto label1146;

label224:

$B11711270ed77c61 = ['AF' => 'Afghanistan', 'AL' => 'Albania', 'DZ' => 'Algeria', 'AS' => 'American Samoa', 'AD' => 'Andorra', 'AO' => 'Angola', 'AI' => 'Anguilla', 'AQ' => 'Antarctica', 'AG' => 'Antigua and Barbuda', 'AR' => 'Argentina', 'AM' => 'Armenia', 'AW' => 'Aruba', 'AU' => 'Australia', 'AT' => 'Austria', 'AZ' => 'Azerbaijan', 'BS' => 'Bahamas', 'BH' => 'Bahrain', 'BD' => 'Bangladesh', 'BB' => 'Barbados', 'BY' => 'Belarus', 'BE' => 'Belgium', 'BZ' => 'Belize', 'BJ' => 'Benin', 'BM' => 'Bermuda', 'BT' => 'Bhutan', 'BO' => 'Bolivia (Plurinational State of)', 'BQ' => 'Bonaire, Sint Eustatius and Saba', 'BA' => 'Bosnia and Herzegovina', 'BW' => 'Botswana', 'BV' => 'Bouvet Island', 'BR' => 'Brazil', 'IO' => 'British Indian Ocean Territory', 'BN' => 'Brunei Darussalam', 'BG' => 'Bulgaria', 'BF' => 'Burkina Faso', 'BI' => 'Burundi', 'CV' => 'Cabo Verde', 'KH' => 'Cambodia', 'CM' => 'Cameroon', 'CA' => 'Canada', 'KY' => 'Cayman Islands', 'CF' => 'Central African Republic', 'TD' => 'Chad', 'CL' => 'Chile', 'CN' => 'China', 'CX' => 'Christmas Island', 'CC' => 'Cocos (Keeling) Islands', 'CO' => 'Colombia', 'KM' => 'Comoros', 'CD' => 'Congo (the Democratic Republic of the)', 'CG' => 'Congo', 'CK' => 'Cook Islands', 'CR' => 'Costa Rica', 'HR' => 'Croatia', 'CU' => 'Cuba', 'CW' => 'Curaçao', 'CY' => 'Cyprus', 'CZ' => 'Czechia', 'CI' => 'Côte d\'Ivoire', 'DK' => 'Denmark', 'DJ' => 'Djibouti', 'DM' => 'Dominica', 'DO' => 'Dominican Republic', 'EC' => 'Ecuador', 'EG' => 'Egypt', 'SV' => 'El Salvador', 'GQ' => 'Equatorial Guinea', 'ER' => 'Eritrea', 'EE' => 'Estonia', 'SZ' => 'Eswatini', 'ET' => 'Ethiopia', 'FK' => 'Falkland Islands [Malvinas]', 'FO' => 'Faroe Islands', 'FJ' => 'Fiji', 'FI' => 'Finland', 'FR' => 'France', 'GF' => 'French Guiana', 'PF' => 'French Polynesia', 'TF' => 'French Southern Territories', 'GA' => 'Gabon', 'GM' => 'Gambia', 'GE' => 'Georgia', 'DE' => 'Germany', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GR' => 'Greece', 'GL' => 'Greenland', 'GD' => 'Grenada', 'GP' => 'Guadeloupe', 'GU' => 'Guam', 'GT' => 'Guatemala', 'GG' => 'Guernsey', 'GN' => 'Guinea', 'GW' => 'Guinea-Bissau', 'GY' => 'Guyana', 'HT' => 'Haiti', 'HM' => 'Heard Island and McDonald Islands', 'VA' => 'Holy See', 'HN' => 'Honduras', 'HK' => 'Hong Kong', 'HU' => 'Hungary', 'IS' => 'Iceland', 'IN' => 'India', 'ID' => 'Indonesia', 'IR' => 'Iran (Islamic Republic of)', 'IQ' => 'Iraq', 'IE' => 'Ireland', 'IM' => 'Isle of Man', 'IL' => 'Israel', 'IT' => 'Italy', 'JM' => 'Jamaica', 'JP' => 'Japan', 'JE' => 'Jersey', 'JO' => 'Jordan', 'KZ' => 'Kazakhstan', 'KE' => 'Kenya', 'KI' => 'Kiribati', 'KP' => 'Korea (the Democratic People\'s Republic of)', 'KR' => 'Korea (the Republic of)', 'KW' => 'Kuwait', 'KG' => 'Kyrgyzstan', 'LA' => 'Lao People\'s Democratic Republic', 'LV' => 'Latvia', 'LB' => 'Lebanon', 'LS' => 'Lesotho', 'LR' => 'Liberia', 'LY' => 'Libya', 'LI' => 'Liechtenstein', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'MO' => 'Macao', 'MG' => 'Madagascar', 'MW' => 'Malawi', 'MY' => 'Malaysia', 'MV' => 'Maldives', 'ML' => 'Mali', 'MT' => 'Malta', 'MH' => 'Marshall Islands', 'MQ' => 'Martinique', 'MR' => 'Mauritania', 'MU' => 'Mauritius', 'YT' => 'Mayotte', 'MX' => 'Mexico', 'FM' => 'Micronesia (Federated States of)', 'MD' => 'Moldova (the Republic of)', 'MC' => 'Monaco', 'MN' => 'Mongolia', 'ME' => 'Montenegro', 'MS' => 'Montserrat', 'MA' => 'Morocco', 'MZ' => 'Mozambique', 'MM' => 'Myanmar', 'NA' => 'Namibia', 'NR' => 'Nauru', 'NP' => 'Nepal', 'NL' => 'Netherlands', 'NC' => 'New Caledonia', 'NZ' => 'New Zealand', 'NI' => 'Nicaragua', 'NE' => 'Niger', 'NG' => 'Nigeria', 'NU' => 'Niue', 'NF' => 'Norfolk Island', 'MP' => 'Northern Mariana Islands', 'NO' => 'Norway', 'OM' => 'Oman', 'PK' => 'Pakistan', 'PW' => 'Palau', 'PS' => 'Palestine, State of', 'PA' => 'Panama', 'PG' => 'Papua New Guinea', 'PY' => 'Paraguay', 'PE' => 'Peru', 'PH' => 'Philippines', 'PN' => 'Pitcairn', 'PL' => 'Poland', 'PT' => 'Portugal', 'PR' => 'Puerto Rico', 'QA' => 'Qatar', 'MK' => 'Republic of North Macedonia', 'RO' => 'Romania', 'RU' => 'Russian Federation', 'RW' => 'Rwanda', 'RE' => 'Réunion', 'BL' => 'Saint Barthélemy', 'SH' => 'Saint Helena, Ascension and Tristan da Cunha', 'KN' => 'Saint Kitts and Nevis', 'LC' => 'Saint Lucia', 'MF' => 'Saint Martin (French part)', 'PM' => 'Saint Pierre and Miquelon', 'VC' => 'Saint Vincent and the Grenadines', 'WS' => 'Samoa', 'SM' => 'San Marino', 'ST' => 'Sao Tome and Principe', 'SA' => 'Saudi Arabia', 'SN' => 'Senegal', 'RS' => 'Serbia', 'SC' => 'Seychelles', 'SL' => 'Sierra Leone', 'SG' => 'Singapore', 'SX' => 'Sint Maarten (Dutch part)', 'SK' => 'Slovakia', 'SI' => 'Slovenia', 'SB' => 'Solomon Islands', 'SO' => 'Somalia', 'ZA' => 'South Africa', 'GS' => 'South Georgia and the South Sandwich Islands', 'SS' => 'South Sudan', 'ES' => 'Spain', 'LK' => 'Sri Lanka', 'SD' => 'Sudan', 'SR' => 'Suriname', 'SJ' => 'Svalbard and Jan Mayen', 'SE' => 'Sweden', 'CH' => 'Switzerland', 'SY' => 'Syrian Arab Republic', 'TW' => 'Taiwan (Province of China)', 'TJ' => 'Tajikistan', 'TZ' => 'Tanzania, United Republic of', 'TH' => 'Thailand', 'TL' => 'Timor-Leste', 'TG' => 'Togo', 'TK' => 'Tokelau', 'TO' => 'Tonga', 'TT' => 'Trinidad and Tobago', 'TN' => 'Tunisia', 'TR' => 'Turkey', 'TM' => 'Turkmenistan', 'TC' => 'Turks and Caicos Islands', 'TV' => 'Tuvalu', 'UG' => 'Uganda', 'UA' => 'Ukraine', 'AE' => 'United Arab Emirates', 'GB' => 'United Kingdom', 'UM' => 'United States Minor Outlying Islands', 'US' => 'United States of America', 'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VU' => 'Vanuatu', 'VE' => 'Venezuela (Bolivarian Republic of)', 'VN' => 'Viet Nam', 'VG' => 'Virgin Islands (British)', 'VI' => 'Virgin Islands (U.S.)', 'WF' => 'Wallis and Futuna', 'EH' => 'Western Sahara', 'YE' => 'Yemen', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe', 'AX' => 'Åland Islands'];
$dbf6ba9f4917ae91 = [
	['id' => '', 'name' => 'Off'],
	['id' => 'A1', 'name' => 'Anonymous Proxy'],
	['id' => 'A2', 'name' => 'Satellite Provider'],
	['id' => 'O1', 'name' => 'Other Country'],
	['id' => 'AF', 'name' => 'Afghanistan'],
	['id' => 'AX', 'name' => 'Aland Islands'],
	['id' => 'AL', 'name' => 'Albania'],
	['id' => 'DZ', 'name' => 'Algeria'],
	['id' => 'AS', 'name' => 'American Samoa'],
	['id' => 'AD', 'name' => 'Andorra'],
	['id' => 'AO', 'name' => 'Angola'],
	['id' => 'AI', 'name' => 'Anguilla'],
	['id' => 'AQ', 'name' => 'Antarctica'],
	['id' => 'AG', 'name' => 'Antigua And Barbuda'],
	['id' => 'AR', 'name' => 'Argentina'],
	['id' => 'AM', 'name' => 'Armenia'],
	['id' => 'AW', 'name' => 'Aruba'],
	['id' => 'AU', 'name' => 'Australia'],
	['id' => 'AT', 'name' => 'Austria'],
	['id' => 'AZ', 'name' => 'Azerbaijan'],
	['id' => 'BS', 'name' => 'Bahamas'],
	['id' => 'BH', 'name' => 'Bahrain'],
	['id' => 'BD', 'name' => 'Bangladesh'],
	['id' => 'BB', 'name' => 'Barbados'],
	['id' => 'BY', 'name' => 'Belarus'],
	['id' => 'BE', 'name' => 'Belgium'],
	['id' => 'BZ', 'name' => 'Belize'],
	['id' => 'BJ', 'name' => 'Benin'],
	['id' => 'BM', 'name' => 'Bermuda'],
	['id' => 'BT', 'name' => 'Bhutan'],
	['id' => 'BO', 'name' => 'Bolivia'],
	['id' => 'BA', 'name' => 'Bosnia And Herzegovina'],
	['id' => 'BW', 'name' => 'Botswana'],
	['id' => 'BV', 'name' => 'Bouvet Island'],
	['id' => 'BR', 'name' => 'Brazil'],
	['id' => 'IO', 'name' => 'British Indian Ocean Territory'],
	['id' => 'BN', 'name' => 'Brunei Darussalam'],
	['id' => 'BG', 'name' => 'Bulgaria'],
	['id' => 'BF', 'name' => 'Burkina Faso'],
	['id' => 'BI', 'name' => 'Burundi'],
	['id' => 'KH', 'name' => 'Cambodia'],
	['id' => 'CM', 'name' => 'Cameroon'],
	['id' => 'CA', 'name' => 'Canada'],
	['id' => 'CV', 'name' => 'Cape Verde'],
	['id' => 'KY', 'name' => 'Cayman Islands'],
	['id' => 'CF', 'name' => 'Central African Republic'],
	['id' => 'TD', 'name' => 'Chad'],
	['id' => 'CL', 'name' => 'Chile'],
	['id' => 'CN', 'name' => 'China'],
	['id' => 'CX', 'name' => 'Christmas Island'],
	['id' => 'CC', 'name' => 'Cocos (Keeling) Islands'],
	['id' => 'CO', 'name' => 'Colombia'],
	['id' => 'KM', 'name' => 'Comoros'],
	['id' => 'CG', 'name' => 'Congo'],
	['id' => 'CD', 'name' => 'Congo, Democratic Republic'],
	['id' => 'CK', 'name' => 'Cook Islands'],
	['id' => 'CR', 'name' => 'Costa Rica'],
	['id' => 'CI', 'name' => 'Cote D\'Ivoire'],
	['id' => 'HR', 'name' => 'Croatia'],
	['id' => 'CU', 'name' => 'Cuba'],
	['id' => 'CY', 'name' => 'Cyprus'],
	['id' => 'CZ', 'name' => 'Czech Republic'],
	['id' => 'DK', 'name' => 'Denmark'],
	['id' => 'DJ', 'name' => 'Djibouti'],
	['id' => 'DM', 'name' => 'Dominica'],
	['id' => 'DO', 'name' => 'Dominican Republic'],
	['id' => 'EC', 'name' => 'Ecuador'],
	['id' => 'EG', 'name' => 'Egypt'],
	['id' => 'SV', 'name' => 'El Salvador'],
	['id' => 'GQ', 'name' => 'Equatorial Guinea'],
	['id' => 'ER', 'name' => 'Eritrea'],
	['id' => 'EE', 'name' => 'Estonia'],
	['id' => 'ET', 'name' => 'Ethiopia'],
	['id' => 'FK', 'name' => 'Falkland Islands (Malvinas)'],
	['id' => 'FO', 'name' => 'Faroe Islands'],
	['id' => 'FJ', 'name' => 'Fiji'],
	['id' => 'FI', 'name' => 'Finland'],
	['id' => 'FR', 'name' => 'France'],
	['id' => 'GF', 'name' => 'French Guiana'],
	['id' => 'PF', 'name' => 'French Polynesia'],
	['id' => 'TF', 'name' => 'French Southern Territories'],
	['id' => 'MK', 'name' => 'Fyrom'],
	['id' => 'GA', 'name' => 'Gabon'],
	['id' => 'GM', 'name' => 'Gambia'],
	['id' => 'GE', 'name' => 'Georgia'],
	['id' => 'DE', 'name' => 'Germany'],
	['id' => 'GH', 'name' => 'Ghana'],
	['id' => 'GI', 'name' => 'Gibraltar'],
	['id' => 'GR', 'name' => 'Greece'],
	['id' => 'GL', 'name' => 'Greenland'],
	['id' => 'GD', 'name' => 'Grenada'],
	['id' => 'GP', 'name' => 'Guadeloupe'],
	['id' => 'GU', 'name' => 'Guam'],
	['id' => 'GT', 'name' => 'Guatemala'],
	['id' => 'GG', 'name' => 'Guernsey'],
	['id' => 'GN', 'name' => 'Guinea'],
	['id' => 'GW', 'name' => 'Guinea-Bissau'],
	['id' => 'GY', 'name' => 'Guyana'],
	['id' => 'HT', 'name' => 'Haiti'],
	['id' => 'HM', 'name' => 'Heard Island & Mcdonald Islands'],
	['id' => 'VA', 'name' => 'Holy See (Vatican City State)'],
	['id' => 'HN', 'name' => 'Honduras'],
	['id' => 'HK', 'name' => 'Hong Kong'],
	['id' => 'HU', 'name' => 'Hungary'],
	['id' => 'IS', 'name' => 'Iceland'],
	['id' => 'IN', 'name' => 'India'],
	['id' => 'ID', 'name' => 'Indonesia'],
	['id' => 'IR', 'name' => 'Iran, Islamic Republic Of'],
	['id' => 'IQ', 'name' => 'Iraq'],
	['id' => 'IE', 'name' => 'Ireland'],
	['id' => 'IM', 'name' => 'Isle Of Man'],
	['id' => 'IL', 'name' => 'Israel'],
	['id' => 'IT', 'name' => 'Italy'],
	['id' => 'JM', 'name' => 'Jamaica'],
	['id' => 'JP', 'name' => 'Japan'],
	['id' => 'JE', 'name' => 'Jersey'],
	['id' => 'JO', 'name' => 'Jordan'],
	['id' => 'KZ', 'name' => 'Kazakhstan'],
	['id' => 'KE', 'name' => 'Kenya'],
	['id' => 'KI', 'name' => 'Kiribati'],
	['id' => 'KR', 'name' => 'Korea'],
	['id' => 'KW', 'name' => 'Kuwait'],
	['id' => 'KG', 'name' => 'Kyrgyzstan'],
	['id' => 'LA', 'name' => 'Lao People\'s Democratic Republic'],
	['id' => 'LV', 'name' => 'Latvia'],
	['id' => 'LB', 'name' => 'Lebanon'],
	['id' => 'LS', 'name' => 'Lesotho'],
	['id' => 'LR', 'name' => 'Liberia'],
	['id' => 'LY', 'name' => 'Libyan Arab Jamahiriya'],
	['id' => 'LI', 'name' => 'Liechtenstein'],
	['id' => 'LT', 'name' => 'Lithuania'],
	['id' => 'LU', 'name' => 'Luxembourg'],
	['id' => 'MO', 'name' => 'Macao'],
	['id' => 'MG', 'name' => 'Madagascar'],
	['id' => 'MW', 'name' => 'Malawi'],
	['id' => 'MY', 'name' => 'Malaysia'],
	['id' => 'MV', 'name' => 'Maldives'],
	['id' => 'ML', 'name' => 'Mali'],
	['id' => 'MT', 'name' => 'Malta'],
	['id' => 'MH', 'name' => 'Marshall Islands'],
	['id' => 'MQ', 'name' => 'Martinique'],
	['id' => 'MR', 'name' => 'Mauritania'],
	['id' => 'MU', 'name' => 'Mauritius'],
	['id' => 'YT', 'name' => 'Mayotte'],
	['id' => 'MX', 'name' => 'Mexico'],
	['id' => 'FM', 'name' => 'Micronesia, Federated States Of'],
	['id' => 'MD', 'name' => 'Moldova'],
	['id' => 'MC', 'name' => 'Monaco'],
	['id' => 'MN', 'name' => 'Mongolia'],
	['id' => 'ME', 'name' => 'Montenegro'],
	['id' => 'MS', 'name' => 'Montserrat'],
	['id' => 'MA', 'name' => 'Morocco'],
	['id' => 'MZ', 'name' => 'Mozambique'],
	['id' => 'MM', 'name' => 'Myanmar'],
	['id' => 'NA', 'name' => 'Namibia'],
	['id' => 'NR', 'name' => 'Nauru'],
	['id' => 'NP', 'name' => 'Nepal'],
	['id' => 'NL', 'name' => 'Netherlands'],
	['id' => 'AN', 'name' => 'Netherlands Antilles'],
	['id' => 'NC', 'name' => 'New Caledonia'],
	['id' => 'NZ', 'name' => 'New Zealand'],
	['id' => 'NI', 'name' => 'Nicaragua'],
	['id' => 'NE', 'name' => 'Niger'],
	['id' => 'NG', 'name' => 'Nigeria'],
	['id' => 'NU', 'name' => 'Niue'],
	['id' => 'NF', 'name' => 'Norfolk Island'],
	['id' => 'MP', 'name' => 'Northern Mariana Islands'],
	['id' => 'NO', 'name' => 'Norway'],
	['id' => 'OM', 'name' => 'Oman'],
	['id' => 'PK', 'name' => 'Pakistan'],
	['id' => 'PW', 'name' => 'Palau'],
	['id' => 'PS', 'name' => 'Palestinian Territory, Occupied'],
	['id' => 'PA', 'name' => 'Panama'],
	['id' => 'PG', 'name' => 'Papua New Guinea'],
	['id' => 'PY', 'name' => 'Paraguay'],
	['id' => 'PE', 'name' => 'Peru'],
	['id' => 'PH', 'name' => 'Philippines'],
	['id' => 'PN', 'name' => 'Pitcairn'],
	['id' => 'PL', 'name' => 'Poland'],
	['id' => 'PT', 'name' => 'Portugal'],
	['id' => 'PR', 'name' => 'Puerto Rico'],
	['id' => 'QA', 'name' => 'Qatar'],
	['id' => 'RE', 'name' => 'Reunion'],
	['id' => 'RO', 'name' => 'Romania'],
	['id' => 'RU', 'name' => 'Russian Federation'],
	['id' => 'RW', 'name' => 'Rwanda'],
	['id' => 'BL', 'name' => 'Saint Barthelemy'],
	['id' => 'SH', 'name' => 'Saint Helena'],
	['id' => 'KN', 'name' => 'Saint Kitts And Nevis'],
	['id' => 'LC', 'name' => 'Saint Lucia'],
	['id' => 'MF', 'name' => 'Saint Martin'],
	['id' => 'PM', 'name' => 'Saint Pierre And Miquelon'],
	['id' => 'VC', 'name' => 'Saint Vincent And Grenadines'],
	['id' => 'WS', 'name' => 'Samoa'],
	['id' => 'SM', 'name' => 'San Marino'],
	['id' => 'ST', 'name' => 'Sao Tome And Principe'],
	['id' => 'SA', 'name' => 'Saudi Arabia'],
	['id' => 'SN', 'name' => 'Senegal'],
	['id' => 'RS', 'name' => 'Serbia'],
	['id' => 'SC', 'name' => 'Seychelles'],
	['id' => 'SL', 'name' => 'Sierra Leone'],
	['id' => 'SG', 'name' => 'Singapore'],
	['id' => 'SK', 'name' => 'Slovakia'],
	['id' => 'SI', 'name' => 'Slovenia'],
	['id' => 'SB', 'name' => 'Solomon Islands'],
	['id' => 'SO', 'name' => 'Somalia'],
	['id' => 'ZA', 'name' => 'South Africa'],
	['id' => 'GS', 'name' => 'South Georgia And Sandwich Isl.'],
	['id' => 'ES', 'name' => 'Spain'],
	['id' => 'LK', 'name' => 'Sri Lanka'],
	['id' => 'SD', 'name' => 'Sudan'],
	['id' => 'SR', 'name' => 'Suriname'],
	['id' => 'SJ', 'name' => 'Svalbard And Jan Mayen'],
	['id' => 'SZ', 'name' => 'Swaziland'],
	['id' => 'SE', 'name' => 'Sweden'],
	['id' => 'CH', 'name' => 'Switzerland'],
	['id' => 'SY', 'name' => 'Syrian Arab Republic'],
	['id' => 'TW', 'name' => 'Taiwan'],
	['id' => 'TJ', 'name' => 'Tajikistan'],
	['id' => 'TZ', 'name' => 'Tanzania'],
	['id' => 'TH', 'name' => 'Thailand'],
	['id' => 'TL', 'name' => 'Timor-Leste'],
	['id' => 'TG', 'name' => 'Togo'],
	['id' => 'TK', 'name' => 'Tokelau'],
	['id' => 'TO', 'name' => 'Tonga'],
	['id' => 'TT', 'name' => 'Trinidad And Tobago'],
	['id' => 'TN', 'name' => 'Tunisia'],
	['id' => 'TR', 'name' => 'Turkey'],
	['id' => 'TM', 'name' => 'Turkmenistan'],
	['id' => 'TC', 'name' => 'Turks And Caicos Islands'],
	['id' => 'TV', 'name' => 'Tuvalu'],
	['id' => 'UG', 'name' => 'Uganda'],
	['id' => 'UA', 'name' => 'Ukraine'],
	['id' => 'AE', 'name' => 'United Arab Emirates'],
	['id' => 'GB', 'name' => 'United Kingdom'],
	['id' => 'US', 'name' => 'United States'],
	['id' => 'UM', 'name' => 'United States Outlying Islands'],
	['id' => 'UY', 'name' => 'Uruguay'],
	['id' => 'UZ', 'name' => 'Uzbekistan'],
	['id' => 'VU', 'name' => 'Vanuatu'],
	['id' => 'VE', 'name' => 'Venezuela'],
	['id' => 'VN', 'name' => 'Viet Nam'],
	['id' => 'VG', 'name' => 'Virgin Islands, British'],
	['id' => 'VI', 'name' => 'Virgin Islands, U.S.'],
	['id' => 'WF', 'name' => 'Wallis And Futuna'],
	['id' => 'EH', 'name' => 'Western Sahara'],
	['id' => 'YE', 'name' => 'Yemen'],
	['id' => 'ZM', 'name' => 'Zambia'],
	['id' => 'ZW', 'name' => 'Zimbabwe']
];
$D2acd05e090587e2 = ['ALL' => 'All Countries', 'A1' => 'Anonymous Proxy', 'A2' => 'Satellite Provider', 'O1' => 'Other Country', 'AF' => 'Afghanistan', 'AX' => 'Aland Islands', 'AL' => 'Albania', 'DZ' => 'Algeria', 'AS' => 'American Samoa', 'AD' => 'Andorra', 'AO' => 'Angola', 'AI' => 'Anguilla', 'AQ' => 'Antarctica', 'AG' => 'Antigua And Barbuda', 'AR' => 'Argentina', 'AM' => 'Armenia', 'AW' => 'Aruba', 'AU' => 'Australia', 'AT' => 'Austria', 'AZ' => 'Azerbaijan', 'BS' => 'Bahamas', 'BH' => 'Bahrain', 'BD' => 'Bangladesh', 'BB' => 'Barbados', 'BY' => 'Belarus', 'BE' => 'Belgium', 'BZ' => 'Belize', 'BJ' => 'Benin', 'BM' => 'Bermuda', 'BT' => 'Bhutan', 'BO' => 'Bolivia', 'BA' => 'Bosnia And Herzegovina', 'BW' => 'Botswana', 'BV' => 'Bouvet Island', 'BR' => 'Brazil', 'IO' => 'British Indian Ocean Territory', 'BN' => 'Brunei Darussalam', 'BG' => 'Bulgaria', 'BF' => 'Burkina Faso', 'BI' => 'Burundi', 'KH' => 'Cambodia', 'CM' => 'Cameroon', 'CA' => 'Canada', 'CV' => 'Cape Verde', 'KY' => 'Cayman Islands', 'CF' => 'Central African Republic', 'TD' => 'Chad', 'CL' => 'Chile', 'CN' => 'China', 'CX' => 'Christmas Island', 'CC' => 'Cocos (Keeling) Islands', 'CO' => 'Colombia', 'KM' => 'Comoros', 'CG' => 'Congo', 'CD' => 'Congo, Democratic Republic', 'CK' => 'Cook Islands', 'CR' => 'Costa Rica', 'CI' => 'Cote D\'Ivoire', 'HR' => 'Croatia', 'CU' => 'Cuba', 'CY' => 'Cyprus', 'CZ' => 'Czech Republic', 'DK' => 'Denmark', 'DJ' => 'Djibouti', 'DM' => 'Dominica', 'DO' => 'Dominican Republic', 'EC' => 'Ecuador', 'EG' => 'Egypt', 'SV' => 'El Salvador', 'GQ' => 'Equatorial Guinea', 'ER' => 'Eritrea', 'EE' => 'Estonia', 'ET' => 'Ethiopia', 'FK' => 'Falkland Islands (Malvinas)', 'FO' => 'Faroe Islands', 'FJ' => 'Fiji', 'FI' => 'Finland', 'FR' => 'France', 'GF' => 'French Guiana', 'PF' => 'French Polynesia', 'TF' => 'French Southern Territories', 'MK' => 'Fyrom', 'GA' => 'Gabon', 'GM' => 'Gambia', 'GE' => 'Georgia', 'DE' => 'Germany', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GR' => 'Greece', 'GL' => 'Greenland', 'GD' => 'Grenada', 'GP' => 'Guadeloupe', 'GU' => 'Guam', 'GT' => 'Guatemala', 'GG' => 'Guernsey', 'GN' => 'Guinea', 'GW' => 'Guinea-Bissau', 'GY' => 'Guyana', 'HT' => 'Haiti', 'HM' => 'Heard Island & Mcdonald Islands', 'VA' => 'Holy See (Vatican City State)', 'HN' => 'Honduras', 'HK' => 'Hong Kong', 'HU' => 'Hungary', 'IS' => 'Iceland', 'IN' => 'India', 'ID' => 'Indonesia', 'IR' => 'Iran, Islamic Republic Of', 'IQ' => 'Iraq', 'IE' => 'Ireland', 'IM' => 'Isle Of Man', 'IL' => 'Israel', 'IT' => 'Italy', 'JM' => 'Jamaica', 'JP' => 'Japan', 'JE' => 'Jersey', 'JO' => 'Jordan', 'KZ' => 'Kazakhstan', 'KE' => 'Kenya', 'KI' => 'Kiribati', 'KR' => 'Korea', 'KW' => 'Kuwait', 'KG' => 'Kyrgyzstan', 'LA' => 'Lao People\'s Democratic Republic', 'LV' => 'Latvia', 'LB' => 'Lebanon', 'LS' => 'Lesotho', 'LR' => 'Liberia', 'LY' => 'Libyan Arab Jamahiriya', 'LI' => 'Liechtenstein', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'MO' => 'Macao', 'MG' => 'Madagascar', 'MW' => 'Malawi', 'MY' => 'Malaysia', 'MV' => 'Maldives', 'ML' => 'Mali', 'MT' => 'Malta', 'MH' => 'Marshall Islands', 'MQ' => 'Martinique', 'MR' => 'Mauritania', 'MU' => 'Mauritius', 'YT' => 'Mayotte', 'MX' => 'Mexico', 'FM' => 'Micronesia, Federated States Of', 'MD' => 'Moldova', 'MC' => 'Monaco', 'MN' => 'Mongolia', 'ME' => 'Montenegro', 'MS' => 'Montserrat', 'MA' => 'Morocco', 'MZ' => 'Mozambique', 'MM' => 'Myanmar', 'NA' => 'Namibia', 'NR' => 'Nauru', 'NP' => 'Nepal', 'NL' => 'Netherlands', 'AN' => 'Netherlands Antilles', 'NC' => 'New Caledonia', 'NZ' => 'New Zealand', 'NI' => 'Nicaragua', 'NE' => 'Niger', 'NG' => 'Nigeria', 'NU' => 'Niue', 'NF' => 'Norfolk Island', 'MP' => 'Northern Mariana Islands', 'NO' => 'Norway', 'OM' => 'Oman', 'PK' => 'Pakistan', 'PW' => 'Palau', 'PS' => 'Palestinian Territory, Occupied', 'PA' => 'Panama', 'PG' => 'Papua New Guinea', 'PY' => 'Paraguay', 'PE' => 'Peru', 'PH' => 'Philippines', 'PN' => 'Pitcairn', 'PL' => 'Poland', 'PT' => 'Portugal', 'PR' => 'Puerto Rico', 'QA' => 'Qatar', 'RE' => 'Reunion', 'RO' => 'Romania', 'RU' => 'Russian Federation', 'RW' => 'Rwanda', 'BL' => 'Saint Barthelemy', 'SH' => 'Saint Helena', 'KN' => 'Saint Kitts And Nevis', 'LC' => 'Saint Lucia', 'MF' => 'Saint Martin', 'PM' => 'Saint Pierre And Miquelon', 'VC' => 'Saint Vincent And Grenadines', 'WS' => 'Samoa', 'SM' => 'San Marino', 'ST' => 'Sao Tome And Principe', 'SA' => 'Saudi Arabia', 'SN' => 'Senegal', 'RS' => 'Serbia', 'SC' => 'Seychelles', 'SL' => 'Sierra Leone', 'SG' => 'Singapore', 'SK' => 'Slovakia', 'SI' => 'Slovenia', 'SB' => 'Solomon Islands', 'SO' => 'Somalia', 'ZA' => 'South Africa', 'GS' => 'South Georgia And Sandwich Isl.', 'ES' => 'Spain', 'LK' => 'Sri Lanka', 'SD' => 'Sudan', 'SR' => 'Suriname', 'SJ' => 'Svalbard And Jan Mayen', 'SZ' => 'Swaziland', 'SE' => 'Sweden', 'CH' => 'Switzerland', 'SY' => 'Syrian Arab Republic', 'TW' => 'Taiwan', 'TJ' => 'Tajikistan', 'TZ' => 'Tanzania', 'TH' => 'Thailand', 'TL' => 'Timor-Leste', 'TG' => 'Togo', 'TK' => 'Tokelau', 'TO' => 'Tonga', 'TT' => 'Trinidad And Tobago', 'TN' => 'Tunisia', 'TR' => 'Turkey', 'TM' => 'Turkmenistan', 'TC' => 'Turks And Caicos Islands', 'TV' => 'Tuvalu', 'UG' => 'Uganda', 'UA' => 'Ukraine', 'AE' => 'United Arab Emirates', 'GB' => 'United Kingdom', 'US' => 'United States', 'UM' => 'United States Outlying Islands', 'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VU' => 'Vanuatu', 'VE' => 'Venezuela', 'VN' => 'Viet Nam', 'VG' => 'Virgin Islands, British', 'VI' => 'Virgin Islands, U.S.', 'WF' => 'Wallis And Futuna', 'EH' => 'Western Sahara', 'YE' => 'Yemen', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe'];
$f1b18060c577d4da = ['' => 'Default', 'primary' => 'Blue', 'info' => 'Light Blue', 'success' => 'Green', 'danger' => 'Red', 'warning' => 'Orange', 'purple' => 'Purple', 'pink' => 'Pink', 'dark' => 'Dark Grey', 'secondary' => 'Light Grey'];
$b991f823f0dd214d = ['' => 'Default - EN', 'aa' => 'Afar', 'af' => 'Afrikaans', 'ak' => 'Akan', 'an' => 'Aragonese', 'as' => 'Assamese', 'av' => 'Avaric', 'ae' => 'Avestan', 'ay' => 'Aymara', 'az' => 'Azerbaijani', 'ba' => 'Bashkir', 'bm' => 'Bambara', 'bi' => 'Bislama', 'bo' => 'Tibetan', 'br' => 'Breton', 'ca' => 'Catalan', 'cs' => 'Czech', 'ce' => 'Chechen', 'cu' => 'Slavic', 'cv' => 'Chuvash', 'kw' => 'Cornish', 'co' => 'Corsican', 'cr' => 'Cree', 'cy' => 'Welsh', 'da' => 'Danish', 'de' => 'German', 'dv' => 'Divehi', 'dz' => 'Dzongkha', 'eo' => 'Esperanto', 'et' => 'Estonian', 'eu' => 'Basque', 'fo' => 'Faroese', 'fj' => 'Fijian', 'fi' => 'Finnish', 'fr' => 'French', 'fy' => 'Frisian', 'ff' => 'Fulah', 'gd' => 'Gaelic', 'ga' => 'Irish', 'gl' => 'Galician', 'gv' => 'Manx', 'gn' => 'Guarani', 'gu' => 'Gujarati', 'ht' => 'Haitian', 'ha' => 'Hausa', 'sh' => 'Serbo-Croatian', 'hz' => 'Herero', 'ho' => 'Hiri Motu', 'hr' => 'Croatian', 'hu' => 'Hungarian', 'ig' => 'Igbo', 'io' => 'Ido', 'ii' => 'Yi', 'iu' => 'Inuktitut', 'ie' => 'Interlingue', 'ia' => 'Interlingua', 'id' => 'Indonesian', 'ik' => 'Inupiaq', 'is' => 'Icelandic', 'it' => 'Italian', 'ja' => 'Japanese', 'kl' => 'Kalaallisut', 'kn' => 'Kannada', 'ks' => 'Kashmiri', 'kr' => 'Kanuri', 'kk' => 'Kazakh', 'km' => 'Khmer', 'ki' => 'Kikuyu', 'rw' => 'Kinyarwanda', 'ky' => 'Kirghiz', 'kv' => 'Komi', 'kg' => 'Kongo', 'ko' => 'Korean', 'kj' => 'Kuanyama', 'ku' => 'Kurdish', 'lo' => 'Lao', 'la' => 'Latin', 'lv' => 'Latvian', 'li' => 'Limburgish', 'ln' => 'Lingala', 'lt' => 'Lithuanian', 'lb' => 'Letzeburgesch', 'lu' => 'Luba-Katanga', 'lg' => 'Ganda', 'mh' => 'Marshall', 'ml' => 'Malayalam', 'mr' => 'Marathi', 'mg' => 'Malagasy', 'mt' => 'Maltese', 'mo' => 'Moldavian', 'mn' => 'Mongolian', 'mi' => 'Maori', 'ms' => 'Malay', 'my' => 'Burmese', 'na' => 'Nauru', 'nv' => 'Navajo', 'nr' => 'Ndebele', 'nd' => 'Ndebele', 'ng' => 'Ndonga', 'ne' => 'Nepali', 'nl' => 'Dutch', 'nn' => 'Norwegian Nynorsk', 'nb' => 'Norwegian Bokmal', 'no' => 'Norwegian', 'ny' => 'Chichewa', 'oc' => 'Occitan', 'oj' => 'Ojibwa', 'or' => 'Oriya', 'om' => 'Oromo', 'os' => 'Ossetian; Ossetic', 'pi' => 'Pali', 'pl' => 'Polish', 'pt' => 'Portuguese', 'pt-BR' => 'Portuguese - Brazil', 'qu' => 'Quechua', 'rm' => 'Raeto-Romance', 'ro' => 'Romanian', 'rn' => 'Rundi', 'ru' => 'Russian', 'sg' => 'Sango', 'sa' => 'Sanskrit', 'si' => 'Sinhalese', 'sk' => 'Slovak', 'sl' => 'Slovenian', 'se' => 'Northern Sami', 'sm' => 'Samoan', 'sn' => 'Shona', 'sd' => 'Sindhi', 'so' => 'Somali', 'st' => 'Sotho', 'es' => 'Spanish', 'sq' => 'Albanian', 'sc' => 'Sardinian', 'sr' => 'Serbian', 'ss' => 'Swati', 'su' => 'Sundanese', 'sw' => 'Swahili', 'sv' => 'Swedish', 'ty' => 'Tahitian', 'ta' => 'Tamil', 'tt' => 'Tatar', 'te' => 'Telugu', 'tg' => 'Tajik', 'tl' => 'Tagalog', 'th' => 'Thai', 'ti' => 'Tigrinya', 'to' => 'Tonga', 'tn' => 'Tswana', 'ts' => 'Tsonga', 'tk' => 'Turkmen', 'tr' => 'Turkish', 'tw' => 'Twi', 'ug' => 'Uighur', 'uk' => 'Ukrainian', 'ur' => 'Urdu', 'uz' => 'Uzbek', 've' => 'Venda', 'vi' => 'Vietnamese', 'vo' => 'Volapük', 'wa' => 'Walloon', 'wo' => 'Wolof', 'xh' => 'Xhosa', 'yi' => 'Yiddish', 'za' => 'Zhuang', 'zu' => 'Zulu', 'ab' => 'Abkhazian', 'zh' => 'Mandarin', 'ps' => 'Pushto', 'am' => 'Amharic', 'ar' => 'Arabic', 'bg' => 'Bulgarian', 'cn' => 'Cantonese', 'mk' => 'Macedonian', 'el' => 'Greek', 'fa' => 'Persian', 'he' => 'Hebrew', 'hi' => 'Hindi', 'hy' => 'Armenian', 'en' => 'English', 'ee' => 'Ewe', 'ka' => 'Georgian', 'pa' => 'Punjabi', 'bn' => 'Bengali', 'bs' => 'Bosnian', 'ch' => 'Chamorro', 'be' => 'Belarusian', 'yo' => 'Yoruba'];
goto label176;

label230:

goto label979;

label236:

$d9557973ff68d879 = [
	['add_rtmp', $_['permission_add_rtmp'], $_['permission_add_rtmp_text']],
	['add_bouquet', $_['permission_add_bouquet'], $_['permission_add_bouquet_text']],
	['add_cat', $_['permission_add_cat'], $_['permission_add_cat_text']],
	['add_e2', $_['permission_add_e2'], $_['permission_add_e2_text']],
	['add_epg', $_['permission_add_epg'], $_['permission_add_epg_text']],
	['add_episode', $_['permission_add_episode'], $_['permission_add_episode_text']],
	['add_group', $_['permission_add_group'], $_['permission_add_group_text']],
	['add_mag', $_['permission_add_mag'], $_['permission_add_mag_text']],
	['add_movie', $_['permission_add_movie'], $_['permission_add_movie_text']],
	['add_packages', $_['permission_add_packages'], $_['permission_add_packages_text']],
	['add_radio', $_['permission_add_radio'], $_['permission_add_radio_text']],
	['add_reguser', $_['permission_add_reguser'], $_['permission_add_reguser_text']],
	['add_server', $_['permission_add_server'], $_['permission_add_server_text']],
	['add_stream', $_['permission_add_stream'], $_['permission_add_stream_text']],
	['tprofile', $_['permission_tprofile'], $_['permission_tprofile_text']],
	['add_series', $_['permission_add_series'], $_['permission_add_series_text']],
	['add_user', $_['permission_add_user'], $_['permission_add_user_text']],
	['block_ips', $_['permission_block_ips'], $_['permission_block_ips_text']],
	['block_isps', $_['permission_block_isps'], $_['permission_block_isps_text']],
	['block_uas', $_['permission_block_uas'], $_['permission_block_uas_text']],
	['create_channel', $_['permission_create_channel'], $_['permission_create_channel_text']],
	['edit_bouquet', $_['permission_edit_bouquet'], $_['permission_edit_bouquet_text']],
	['edit_cat', $_['permission_edit_cat'], $_['permission_edit_cat_text']],
	['channel_order', $_['permission_channel_order'], $_['permission_channel_order_text']],
	['edit_cchannel', $_['permission_edit_cchannel'], $_['permission_edit_cchannel_text']],
	['edit_e2', $_['permission_edit_e2'], $_['permission_edit_e2_text']],
	['epg_edit', $_['permission_epg_edit'], $_['permission_epg_edit_text']],
	['edit_episode', $_['permission_edit_episode'], $_['permission_edit_episode_text']],
	['folder_watch_settings', $_['permission_folder_watch_settings'], $_['permission_folder_watch_settings_text']],
	['settings', $_['permission_settings'], $_['permission_settings_text']],
	['edit_group', $_['permission_edit_group'], $_['permission_edit_group_text']],
	['edit_mag', $_['permission_edit_mag'], $_['permission_edit_mag_text']],
	['edit_movie', $_['permission_edit_movie'], $_['permission_edit_movie_text']],
	['edit_package', $_['permission_edit_package'], $_['permission_edit_package_text']],
	['edit_radio', $_['permission_edit_radio'], $_['permission_edit_radio_text']],
	['edit_reguser', $_['permission_edit_reguser'], $_['permission_edit_reguser_text']],
	['edit_server', $_['permission_edit_server'], $_['permission_edit_server_text']],
	['edit_stream', $_['permission_edit_stream'], $_['permission_edit_stream_text']],
	['edit_series', $_['permission_edit_series'], $_['permission_edit_series_text']],
	['edit_user', $_['permission_edit_user'], $_['permission_edit_user_text']],
	['fingerprint', $_['permission_fingerprint'], $_['permission_fingerprint_text']],
	['import_episodes', $_['permission_import_episodes'], $_['permission_import_episodes_text']],
	['import_movies', $_['permission_import_movies'], $_['permission_import_movies_text']],
	['import_streams', $_['permission_import_streams'], $_['permission_import_streams_text']],
	['database', $_['permission_database'], $_['permission_database_text']],
	['mass_delete', $_['permission_mass_delete'], $_['permission_mass_delete_text']],
	['mass_sedits_vod', $_['permission_mass_sedits_vod'], $_['permission_mass_sedits_vod_text']],
	['mass_sedits', $_['permission_mass_sedits'], $_['permission_mass_sedits_text']],
	['mass_edit_users', $_['permission_mass_edit_users'], $_['permission_mass_edit_users_text']],
	['mass_edit_lines', $_['permission_mass_edit_lines'], $_['permission_mass_edit_lines_text']],
	['mass_edit_mags', $_['permission_mass_edit_mags'], $_['permission_mass_edit_mags_text']],
	['mass_edit_enigmas', $_['permission_mass_edit_enigmas'], $_['permission_mass_edit_enigmas_text']],
	['mass_edit_streams', $_['permission_mass_edit_streams'], $_['permission_mass_edit_streams_text']],
	['mass_edit_radio', $_['permission_mass_edit_radio'], $_['permission_mass_edit_radio_text']],
	['mass_edit_reguser', $_['permission_mass_edit_reguser'], $_['permission_mass_edit_reguser_text']],
	['ticket', $_['permission_ticket'], $_['permission_ticket_text']],
	['subreseller', $_['permission_subreseller'], $_['permission_subreseller_text']],
	['stream_tools', $_['permission_stream_tools'], $_['permission_stream_tools_text']],
	['bouquets', $_['permission_bouquets'], $_['permission_bouquets_text']],
	['categories', $_['permission_categories'], $_['permission_categories_text']],
	['client_request_log', $_['permission_client_request_log'], $_['permission_client_request_log_text']],
	['connection_logs', $_['permission_connection_logs'], $_['permission_connection_logs_text']],
	['manage_cchannels', $_['permission_manage_cchannels'], $_['permission_manage_cchannels_text']],
	['credits_log', $_['permission_credits_log'], $_['permission_credits_log_text']],
	['index', $_['permission_index'], $_['permission_index_text']],
	['manage_e2', $_['permission_manage_e2'], $_['permission_manage_e2_text']],
	['epg', $_['permission_epg'], $_['permission_epg_text']],
	['folder_watch', $_['permission_folder_watch'], $_['permission_folder_watch_text']],
	['folder_watch_output', $_['permission_folder_watch_output'], $_['permission_folder_watch_output_text']],
	['mng_groups', $_['permission_mng_groups'], $_['permission_mng_groups_text']],
	['live_connections', $_['permission_live_connections'], $_['permission_live_connections_text']],
	['login_logs', $_['permission_login_logs'], $_['permission_login_logs_text']],
	['manage_mag', $_['permission_manage_mag'], $_['permission_manage_mag_text']],
	['manage_events', $_['permission_manage_events'], $_['permission_manage_events_text']],
	['movies', $_['permission_movies'], $_['permission_movies_text']],
	['mng_packages', $_['permission_mng_packages'], $_['permission_mng_packages_text']],
	['player', $_['permission_player'], $_['permission_player_text']],
	['process_monitor', $_['permission_process_monitor'], $_['permission_process_monitor_text']],
	['radio', $_['permission_radio'], $_['permission_radio_text']],
	['mng_regusers', $_['permission_mng_regusers'], $_['permission_mng_regusers_text']],
	['reg_userlog', $_['permission_reg_userlog'], $_['permission_reg_userlog_text']],
	['rtmp', $_['permission_rtmp'], $_['permission_rtmp_text']],
	['servers', $_['permission_servers'], $_['permission_servers_text']],
	['stream_errors', $_['permission_stream_errors'], $_['permission_stream_errors_text']],
	['streams', $_['permission_streams'], $_['permission_streams_text']],
	['subresellers', $_['permission_subresellers'], $_['permission_subresellers_text']],
	['manage_tickets', $_['permission_manage_tickets'], $_['permission_manage_tickets_text']],
	['tprofiles', $_['permission_tprofiles'], $_['permission_tprofiles_text']],
	['series', $_['permission_series'], $_['permission_series_text']],
	['users', $_['permission_users'], $_['permission_users_text']],
	['episodes', $_['permission_episodes'], $_['permission_episodes_text']],
	['edit_tprofile', $_['permission_edit_tprofile'], $_['permission_edit_tprofile_text']],
	['folder_watch_add', $_['permission_folder_watch_add'], $_['permission_folder_watch_add_text']],
	['add_code', $_['permission_add_code'], $_['permission_add_code_text']],
	['add_hmac', $_['permission_add_hmac'], $_['permission_add_hmac_text']],
	['block_asns', $_['permission_block_asns'], $_['permission_block_asns_text']],
	['license', $_['permission_license'], $_['permission_license_text']],
	['panel_logs', $_['permission_panel_logs'], $_['permission_panel_logs_text']],
	['quick_tools', $_['permission_quick_tools'], $_['permission_quick_tools_text']],
	['restream_logs', $_['permission_restream_logs'], $_['permission_restream_logs_text']]
];
goto label1104;

label842:

$a080f5083618911e = e988F4DE594A8e78();
$a3c3f656c0bb428b = Xui\Functions::getLicense();
$E0a8102c8d2ef5b6 = ($a3c3f656c0bb428b[9] == 1) ?: 0;
$a76857631510ce75 = ($a3c3f656c0bb428b[9] == 2) ?: 0;
uasort($Bcf70cba56392975, function($a5fd10913e5b22d3, $bbbe5eca9c8056cb) {
	return $a5fd10913e5b22d3['order'] - $bbbe5eca9c8056cb['order'];
});
goto label80;

label864:

ResellerAPI::$db = &$b62d6460eb33ea07;
ResellerAPI::init();
XUI::d6AEB3175a43f301();
define('SERVER_ID', intval(XUI::$rConfig['server_id']));
$dfb23e2fb3018f2e = new Mobile_Detect();
goto label13;

label883:

goto label906;

label889:

ini_set('max_execution_time', $F7379362daea673f);
ini_set('default_socket_timeout', $F7379362daea673f);
$Bf9be24c69c0f17b = C54e7b1D4554677F();
$Bcf70cba56392975 = C6A90BfCD425Eb63();
$f1dcaed925076e67 = XUI::$rSettings;
goto label842;

label906:

goto label1048;

label912:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
XUI::init();
API::$db = &$b62d6460eb33ea07;
API::init();
goto label864;

label925:

goto label997;

label931:

goto label1098;

label937:

define('STATUS_INVALID_NAME', 11);
define('STATUS_INVALID_CAPTCHA', 12);
define('STATUS_INVALID_CODE', 13);
define('STATUS_INVALID_DATE', 14);
define('STATUS_INVALID_FILE', 15);
goto label59;

label958:

define('STATUS_INVALID_SUBRESELLER', 41);
define('STATUS_NO_DESCRIPTION', 42);
define('STATUS_NO_KEY', 43);
define('STATUS_EXISTS_HMAC', 44);
define('STATUS_CERTBOT_RUNNING', 45);
goto label1031;

label979:

goto label188;

label985:

goto label110;

label991:

goto label985;

label997:

goto label1003;

label1003:

goto label47;

label1009:

goto label194;

label1015:

require_once INCLUDES_PATH . 'xui.php';
require_once INCLUDES_PATH . 'libs/mobiledetect.php';
require_once INCLUDES_PATH . 'admin_api.php';
require_once INCLUDES_PATH . 'reseller_api.php';
register_shutdown_function('shutdown_admin');
goto label912;

label1031:

define('STATUS_RESERVED_CODE', 46);
define('STATUS_NO_TITLE', 47);
define('STATUS_NO_SOURCE', 48);
require_once '/home/xui/www/constants.php';
require_once INCLUDES_PATH . 'pdo.php';
goto label1015;

label1048:

goto label1228;

label1054:

goto label1255;

label1056:

goto label883;

label1062:

define('STATUS_NOT_ADMIN', 6);
define('STATUS_INVALID_EMAIL', 7);
define('STATUS_INVALID_PASSWORD', 8);
define('STATUS_INVALID_IP', 9);
define('STATUS_INVALID_PLAYLIST', 10);
goto label937;

label1083:

goto label1056;

label1089:

exit('Please synchronise your system time with NTP as it seems to be incorrect.<br/><br/>This may help: timedatectl set-ntp 1');

label1090:

$_ = parse_ini_file(XUI_HOME . 'includes/langs/en.ini');
$Fa138f2d2a6da23d = ['AuraHD', 'AuraHD2', 'AuraHD3', 'AuraHD4', 'AuraHD5', 'AuraHD6', 'AuraHD7', 'AuraHD8', 'AuraHD9', 'MAG200', 'MAG245', 'MAG245D', 'MAG250', 'MAG254', 'MAG255', 'MAG256', 'MAG257', 'MAG260', 'MAG270', 'MAG275', 'MAG322', 'MAG323', 'MAG324', 'MAG325', 'MAG349', 'MAG350', 'MAG351', 'MAG352', 'MAG420', 'WR320', 'TH100', 'MAG424', 'MAG424W3'];
goto label224;

label1098:

goto label1152;

label1104:

goto label182;

label1110:

goto label122;

label1116:

goto label1134;

label1122:

goto label1116;

label1128:

$E537e0b49c6c29c9 = [-1 => '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light tooltip\' title=\'No Server Selected\'><i class=\'text-white mdi mdi-triangle\'></i></button>', 0 => '<button type=\'button\' class=\'btn btn-dark btn-xs waves-effect waves-light tooltip\' title=\'Not Encoded\'><i class=\'text-white mdi mdi-checkbox-blank-circle\'></i></button>', 1 => '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light tooltip\' title=\'Encoded\'><i class=\'text-white mdi mdi-check-circle\'></i></button>', 2 => '<button type=\'button\' class=\'btn btn-warning btn-xs waves-effect waves-light tooltip\' title=\'Encoding\'><i class=\'text-white mdi mdi-checkbox-blank-circle\'></i></button>', 3 => '<button type=\'button\' class=\'btn btn-primary btn-xs waves-effect waves-light tooltip\' title=\'Direct Source\'><i class=\'text-white mdi mdi mdi-web\'></i></button>', 4 => '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light tooltip\' title=\'Down\'><i class=\'text-white mdi mdi-triangle\'></i></button>', 5 => '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light tooltip\' title=\'Direct Stream\'><i class=\'text-white mdi mdi mdi-web\'></i></button>'];
$Da7a5d6e82ba0f40 = [1 => '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light\'>ADDED</button>', 2 => '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light\'>SQL FAILED</button>', 3 => '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light\'>NO CATEGORY</button>', 4 => '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light\'>NO TMDb MATCH</button>', 5 => '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light\'>INVALID FILE</button>', 6 => '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>UPGRADED</button>'];
$e04681f39f3c4415 = ['STREAM_STOP' => '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light btn-fixed-xl\'>STOPPED</button>', 'STREAM_START_FAIL' => '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light btn-fixed-xl\'>START FAILED</button>', 'STREAM_START' => '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed-xl\'>STARTED</button>', 'STREAM_RESTART' => '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light btn-fixed-xl\'>RESTARTED</button>', 'STREAM_FAILED' => '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light btn-fixed-xl\'>STREAM FAILED</button>'];
$D0947405e5d9e2fc = ['STREAM_FAILED' => 'Stream Failed', 'STREAM_START' => 'Stream Started', 'STREAM_RESTART' => 'Stream Restarted', 'STREAM_STOP' => 'Stream Stopped', 'FORCE_SOURCE' => 'Force Change Source', 'AUTO_RESTART' => 'Timed Auto Restart', 'AUDIO_LOSS' => 'Audio Lost', 'PRIORITY_SWITCH' => 'Priority Switch', 'DELAY_START' => 'Delay Started', 'FFMPEG_ERROR' => 'FFMPEG Error'];
$cc474bf3b4c0707e = [
	['name' => 'Light', 'dark' => false, 'image' => NULL],
	['name' => 'Dark', 'dark' => true, 'image' => NULL]
];
goto label236;

label1134:

goto label1216;

label1140:

goto label149;

label1146:

goto label206;

label1152:

goto label925;

label1158:

goto label116;

label1164:

if (Xui\Functions::verifyLicense()) {
	goto label1171;
}

header('Location: license');

label1171:
if (!((session_status() == PHP_SESSION_NONE) && (php_sapi_name() !== 'cli'))) {
	goto label8;
}

$ffb2d1a0985b1293 = session_get_cookie_params() ?: [];
goto label1;

label1189:

goto label1110;

label1195:

define('STATUS_EXISTS_DIR', 26);
define('STATUS_SUCCESS_REPLACE', 27);
define('STATUS_FLUSH', 28);
define('STATUS_TOO_MANY_RESULTS', 29);
define('STATUS_SPACE_ISSUE', 30);
goto label155;

label1216:

goto label931;

label1222:

goto label200;

label1228:

goto label1189;

label1234:

define('STATUS_NO_TRIALS', 36);
define('STATUS_INSUFFICIENT_CREDITS', 37);
define('STATUS_INVALID_PACKAGE', 38);
define('STATUS_INVALID_TYPE', 39);
define('STATUS_INVALID_USERNAME', 40);
goto label958;

label1255:

?>