<?php


goto label6322;

label1:

exit();

label2:

echo json_encode(['result' => false]);
exit();

label7:

goto label4053;

label8:

include XUI_HOME . 'includes/libs/tmdb.php';

if (0 < strlen(XUI::$rRequest['language'])) {
	goto label11579;
}

if (0 < strlen($f1dcaed925076e67['tmdb_language'])) {
	goto label11571;
}

$b41097c951ee83d3 = new TMDB($f1dcaed925076e67['tmdb_api_key']);
goto label11578;
goto label11571;

label33:

goto label1682;

label34:

if (e589a4BF54A2DAd1('adv', 'backups')) {
	goto label9846;
}

echo json_encode(['result' => false]);
goto label9845;

label45:

$B9869413eae86beb['open_connections'] = $Bcf70cba56392975[$C082ca9ed03f473c]['connections'];
$B9869413eae86beb['online_users'] = $Bcf70cba56392975[$C082ca9ed03f473c]['users'];

foreach (array_keys($Bcf70cba56392975) as $Cf9afd442cc40b3d) {
	if (!$Bcf70cba56392975[$Cf9afd442cc40b3d]['server_online']) {
		goto label68;
	}

	$B9869413eae86beb['total_connections'] += $Bcf70cba56392975[$Cf9afd442cc40b3d]['connections'];

	label68:
}

label70:

goto label4073;

label71:

$F48d5724f3b4ec96 = XUI_HOME . 'backups/' . $aae4eee56abeed7c . '.sql';

if (file_exists($F48d5724f3b4ec96)) {
	goto label4663;
}

$F48d5724f3b4ec96 = XUI_HOME . 'tmp/restore.sql';

if (0 < strlen($f1dcaed925076e67['dropbox_token'])) {
	goto label11905;
}

echo json_encode(['result' => false]);
goto label11903;

label96:

echo json_encode(['result' => true, 'bouquets' => $B9869413eae86beb, 'data' => $ba2d146bb5a55097]);

label103:

exit();

label104:

goto label11594;
goto label11918;

label106:

if (e589a4Bf54a2dAd1('adv', 'edit_movie')) {
	goto label117;
}

echo json_encode(['result' => false]);
exit();

label117:

goto label7624;

label118:

echo json_encode(['result' => true]);
exit();

label123:

goto label14268;

label124:

if (!(0 < count($F36e7d4d6716c100))) {
	goto label1226;
}

echo json_encode(['result' => true, 'data' => $F36e7d4d6716c100]);
exit();
goto label1226;

label139:

goto label982;

label140:

$Bccd07953f314962 = [];
$b62d6460eb33ea07->query('SELECT `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $ee6d1fc5d801b43f);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
}

goto label11182;

label158:

echo json_encode(['result' => false]);
exit();

label163:

goto label1278;

label164:

$A5a4a57a12bb19b3 = array_map('intval', explode(',', XUI::$rRequest['channels']));

if (!(count($A5a4a57a12bb19b3) == 0)) {
	goto label187;
}

echo json_encode($B9869413eae86beb);
exit();

label187:

goto label13739;

label188:

goto label7622;

label189:

if (E589A4BF54a2dAd1('adv', 'edit_server')) {
	goto label9475;
}

echo json_encode(['result' => false]);
goto label9474;

label200:

$ba2d146bb5a55097 = $b62d6460eb33ea07->get_row();
$ba2d146bb5a55097['exp_date'] = date('Y-m-d', strtotime('+' . intval($ba2d146bb5a55097['trial_duration']) . ' ' . $ba2d146bb5a55097['trial_duration_in']));

foreach (json_decode($ba2d146bb5a55097['bouquets'], true) as $f155fef57262b32a) {
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` WHERE `id` = ?;', $f155fef57262b32a);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label276;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$B9869413eae86beb[] = ['id' => $Fb9da1713bff19ce['id'], 'bouquet_name' => str_replace('\'', '\\\'', $Fb9da1713bff19ce['bouquet_name']), 'bouquet_channels' => json_decode($Fb9da1713bff19ce['bouquet_channels'], true), 'bouquet_radios' => json_decode($Fb9da1713bff19ce['bouquet_radios'], true), 'bouquet_movies' => json_decode($Fb9da1713bff19ce['bouquet_movies'], true), 'bouquet_series' => json_decode($Fb9da1713bff19ce['bouquet_series'], true)];

	label276:
}

goto label11292;

label279:

if (!$D577b2a7889a5fb6) {
	goto label289;
}

echo json_encode(['result' => true, 'data' => $D577b2a7889a5fb6]);
exit();

label289:

echo json_encode(['result' => false]);
goto label7796;

label294:

echo json_encode(['result' => false]);
exit();

label299:

$f23658ae5c2456c3 = XUI::$rRequest['term'];

if (!(0 < strlen($f23658ae5c2456c3))) {
	goto label1226;
}

goto label8;

label310:

XUI::b0020c716fdF67BB(XUI::$rRequest['stream_id']);
echo json_encode(['result' => true]);
exit();

label320:

goto label1733;
goto label1723;

label322:

if ($c4584835207f1ecb == 'disable') {
	goto label13555;
}

if ($c4584835207f1ecb == 'ban') {
	goto label7651;
}

if ($c4584835207f1ecb == 'unban') {
	goto label4041;
}

if ($c4584835207f1ecb == 'kill') {
	goto label9278;
}

echo json_encode(['result' => false]);
goto label9276;

label339:

$C082ca9ed03f473c = intval(XUI::$rRequest['server']);

label345:

$d5faa5f11beba133 = '<table style=\'width: 380px;\' class=\'table-data\' align=\'center\'><tbody><tr><td colspan=\'4\'>Stream probe failed!</td></tr></tbody></table>';
$D9d6a5d0b76a9aaf = NULL;

if (empty(XUI::$rRequest['url'])) {
	goto label1538;
}

goto label11213;

label352:

forcePlex($E2461a25530fd8a2['server_id'], $E2461a25530fd8a2['id']);
echo json_encode(['result' => true]);
exit();

label363:

goto label6439;

label364:

goto label1370;

label365:

$e23be30f5a16d035 = a28A55B8F823e432($Abcb228699a7f743);
$B9869413eae86beb = [];

foreach ($e23be30f5a16d035 as $ba2d146bb5a55097) {
	$B9869413eae86beb[] = ['cpu' => $ba2d146bb5a55097['cpu'], 'memory' => $ba2d146bb5a55097['total_mem_used_percent'], 'input' => $ba2d146bb5a55097['bytes_received'], 'output' => $ba2d146bb5a55097['bytes_sent'], 'date' => $ba2d146bb5a55097['time']];
}

goto label1363;

label387:

$ba2d146bb5a55097['cost_credits'] = $dd3211a322da8474[$ba2d146bb5a55097['id']]['official_credits'];

label392:

$ba2d146bb5a55097['exp_date'] = date('Y-m-d', strtotime('+' . intval($ba2d146bb5a55097['official_duration']) . ' ' . $ba2d146bb5a55097['official_duration_in']));

if (!isset(XUI::$rRequest['user_id'])) {
	goto label14635;
}

if (!($Caf4325605347834 = B5Ad1D95a92Ce732(XUI::$rRequest['user_id']))) {
	goto label14635;
}

goto label5185;

label424:

$b62d6460eb33ea07->query('SELECT `server_id`, `time`, `cpu`, `iostat_info`, `total_mem_used_percent`, `connections`, `streams`, `users`, `total_users`, `bytes_received`, `bytes_sent` FROM `servers_stats` WHERE `time` >= ? AND `server_id` = ? ORDER BY `time` DESC;', $fa59d8fa25ff8bf2, XUI::$rRequest['server_id']);

label431:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label6451;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$Bcf70cba56392975[$Fb9da1713bff19ce['server_id']]['server_online']) {
		goto label473;
	}

	$a5d0209c3808b4b0 = C38b1d921E6c27A6($Aa3b04b0b61d8776, intval($Fb9da1713bff19ce['time']));

	if (isset($Aa3b04b0b61d8776[$a5d0209c3808b4b0][intval($Fb9da1713bff19ce['server_id'])])) {
		goto label473;
	}

	$d14a20b240a88fb2[$a5d0209c3808b4b0][intval($Fb9da1713bff19ce['server_id'])] = $Fb9da1713bff19ce;

	label473:
}

goto label6451;

label476:

goto label483;

label477:

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, true, true);

label483:

goto label4590;

label484:

goto label11673;

label485:

if (e589A4Bf54A2DAd1('adv', 'block_ips')) {
	goto label1746;
}

goto label1741;

label492:

exit();

label493:

goto label12930;

label494:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $e37d504062f6c301['user_id']);
goto label12921;

label500:

goto label7674;

label501:

$b62d6460eb33ea07->query('UPDATE `servers` SET `enabled` = 0 WHERE `id` = ? AND `is_main` = 0;', XUI::$rRequest['server_id']);
echo json_encode(['result' => true]);
exit();
goto label7674;

label513:

$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE `id` = ?;', XUI::$rRequest['result_id']);
echo json_encode(['result' => true]);
exit();

label524:

goto label998;

label525:

foreach ($d6fbf2cdbc7895f2 as $F5ba2106d5227309) {
	$E3665d09b9cea208 = explode('/', $F5ba2106d5227309);

	foreach ($E3665d09b9cea208 as $ab8782c89c1e5476) {
		goto label563;

		label537:

		try {
			$ca9355a1a2bb547f = Xui\Functions::decrypt($ab8782c89c1e5476, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
		}
		catch (Exception $E0f0519e12b13b6b) {
			$ca9355a1a2bb547f = NULL;
		}

		if (!$ca9355a1a2bb547f) {
			goto label560;
		}

		$f99bf45807d34d5a[] = utf8_decode($ca9355a1a2bb547f);

		label560:

		goto label596;

		label563:

		if (!(stripos($ab8782c89c1e5476, 'token=') !== false)) {
			goto label579;
		}

		$ab8782c89c1e5476 = explode('token=', $ab8782c89c1e5476)[1];

		label579:

		$F4f63a636c57af3b = base64_decode(strtr($ab8782c89c1e5476, '-_', '+/'));

		if (empty($F4f63a636c57af3b)) {
			goto label560;
		}

		goto label537;

		label596:

		goto label599;

		label599:
	}
}

label603:

if (0 < count($f99bf45807d34d5a)) {
	goto label15034;
}

echo json_encode(['result' => false]);
goto label15032;

label614:

if (!(0 < count($dec36723d7be7c49))) {
	goto label638;
}

$D577b2a7889a5fb6 = d5612F049a8056a5([
	'action'     => 'stream',
	'sub'        => 'stop',
	'stream_ids' => array_values($dec36723d7be7c49),
	'servers'    => [intval(XUI::$rRequest['server_id'])]
]);

label638:

echo json_encode(['result' => true]);
exit();
goto label4378;

label644:

XUI::cCB5075C679E7314($A5672c717a6d107d['user_id']);
echo json_encode(['result' => true]);
exit();

label653:

goto label4560;
goto label818;

label655:
if (!(!E589A4bF54A2dad1('adv', 'add_series') && !e589a4BF54A2dAd1('adv', 'edit_series') && !E589A4Bf54A2daD1('adv', 'add_movie') && !E589A4bF54a2daD1('adv', 'edit_movie') && !e589A4BF54a2DAD1('adv', 'add_episode') && !e589A4BF54A2DAD1('adv', 'edit_episode'))) {
	goto label703;
}

echo json_encode(['result' => false]);
exit();

label703:

goto label12183;

label704:

goto label725;

label705:

foreach (XUI::D72C0F56211b6f7C(NULL, $C082ca9ed03f473c == -1 ? NULL : $C082ca9ed03f473c, $ee6d1fc5d801b43f, true, false, false) as $Fd10d59f87b19e71) {
	XUI::B0020c716FDf67Bb($Fd10d59f87b19e71);
}

label725:

goto label5010;

label726:

echo json_encode(['result' => true]);
exit();

label731:

goto label12359;
goto label14870;

label733:

if (XUI::$rRequest['action'] == 'clear_failures') {
	goto label1279;
}

if (!(XUI::$rRequest['action'] == 'multi')) {
	goto label163;
}

$A7d54b094ae83c95 = XUI::$rRequest['type'];
$a89d7e3381b91204 = json_decode(XUI::$rRequest['ids'], true);
$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label9948;

label758:

if (e589A4BF54A2dAD1('adv', 'edit_group')) {
	goto label769;
}

echo json_encode(['result' => false]);
exit();

label769:

$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label833;

label773:

goto label780;

label774:

$D7209256c56b1469 = intval(XUI::$rRequest['page']);

label780:

$b62d6460eb33ea07->query('SELECT COUNT(`stream_id`) AS `stream_id` FROM `providers_streams` WHERE `type` = \'live\' AND (`stream_display_name` LIKE ? OR `stream_id` LIKE ?);', '%' . XUI::$rRequest['search'] . '%', XUI::$rRequest['search'] . '%');
goto label14203;

label793:

exit();

label794:

goto label13919;

label795:
if (!(!E589A4BF54a2DAd1('adv', 'streams') && !e589A4bf54A2DAD1('adv', 'series') && !e589a4bF54a2Dad1('adv', 'episodes'))) {
	goto label7238;
}

goto label7233;

label818:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $A5672c717a6d107d['user_id']);
XUI::Ccb5075c679E7314($A5672c717a6d107d['user_id']);
echo json_encode(['result' => true]);
exit();
goto label4560;

label833:

if ($c4584835207f1ecb == 'delete') {
	goto label9708;
}

if (in_array($c4584835207f1ecb, ['is_admin', 'is_reseller'])) {
	goto label9891;
}

echo json_encode(['result' => false]);
exit();
goto label9906;
goto label9891;

label849:

if (isset(XUI::$rRequest['server_id'])) {
	goto label13052;
}

$Bd92fffa215178e4 = 0;

if (XUI::$rSettings['redis_handler']) {
	goto label12646;
}

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `hls_end` = 0;');

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label11177;
}

goto label11175;

label867:

echo json_encode(['result' => false]);
goto label103;

label872:

$ba2d146bb5a55097 = $b62d6460eb33ea07->get_row();
if (!(isset($dd3211a322da8474[$ba2d146bb5a55097['id']]['official_credits']) && (0 < strlen($dd3211a322da8474[$ba2d146bb5a55097['id']]['official_credits'])))) {
	goto label392;
}

goto label387;

label891:

echo json_encode(['result' => false]);
exit();

label896:

$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `active` = 0 WHERE `type` = \'plex\';');
echo json_encode(['result' => true]);
goto label11377;

label904:

$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 0 WHERE `type` = ?;', $df9ce9bd5a53be95);
echo json_encode(['result' => true]);
exit();

label913:

goto label7656;

label914:

if (!XUI::$rSettings['redis_handler']) {
	goto label921;
}

XUI::D6aEB3175a43F301();

label921:

if (!isset(XUI::$rRequest['action'])) {
	goto label6082;
}

goto label11642;

label927:

exit();

label928:

goto label5405;

label929:

$aae4eee56abeed7c = pathinfo(XUI::$rRequest['filename'])['filename'];
goto label71;

label937:

echo json_encode(['result' => false]);
exit();
goto label9810;

label943:

echo json_encode(['result' => true, 'data' => trim(file_get_contents($F48d5724f3b4ec96)), 'status' => intval(XUI::$rServers[$C082ca9ed03f473c]['status'])]);
goto label9809;

label963:

A730C6dE034bA241(XUI::$rRequest['server'], ['action' => 'kill_pid', 'pid' => intval(XUI::$rRequest['pid'])]);
echo json_encode(['result' => true]);
exit();

label981:

goto label5937;

label982:

goto label6082;

label983:

goto label5653;

label984:

if (E589A4bf54a2DAd1('adv', 'folder_watch')) {
	goto label995;
}

echo json_encode(['result' => false]);
exit();

label995:

fab77284D2868942();
goto label12026;

label998:

goto label484;

label999:

if (e589a4Bf54A2daD1('adv', 'add_rtmp')) {
	goto label7178;
}

echo json_encode(['result' => false]);
exit();
goto label7178;

label1011:

exit();

label1012:

XUI::$redis->flushAll();
echo json_encode(['result' => true]);
exit();
goto label33;

label1021:

if (e589A4bf54A2DAD1('adv', 'block_ips')) {
	goto label1032;
}

echo json_encode(['result' => false]);
exit();

label1032:

goto label14461;

label1033:

goto label9812;

label1034:

if (e589A4Bf54A2DaD1('adv', 'streams')) {
	goto label4767;
}

goto label4762;

label1041:

if (!isset(XUI::$rRequest['data']['series'])) {
	goto label1071;
}

foreach (XUI::$rRequest['data']['series'] as $E6f758b9be57a931) {
	$b62d6460eb33ea07->query('SELECT `id`, `title` FROM `streams_series` WHERE `id` = ?;', $E6f758b9be57a931);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label1069;
	}

	$ba2d146bb5a55097 = $b62d6460eb33ea07->get_row();
	$B9869413eae86beb['series'][] = $ba2d146bb5a55097;

	label1069:
}

label1071:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
goto label1146;

label1078:

exit();

label1079:

goto label7326;

label1080:

$Abcb228699a7f743 = 0;
goto label13136;

label1082:

exit();

label1083:

echo json_encode(['result' => false]);
exit();

label1088:

goto label5995;

label1089:

D7eaE25709B24003(XUI::$rRequest['epg_id']);
echo json_encode(['result' => true]);
exit();

label1099:

goto label13603;

label1100:

if (XUI::$rRequest['action'] == 'process') {
	goto label12992;
}

if (XUI::$rRequest['action'] == 'adjust_credits') {
	goto label14079;
}

if (XUI::$rRequest['action'] == 'reg_user') {
	goto label7576;
}

if (XUI::$rRequest['action'] == 'ticket') {
	goto label14962;
}

if (XUI::$rRequest['action'] == 'mag') {
	goto label9262;
}

goto label13110;

label1126:

echo json_encode(['result' => false]);
exit();

label1131:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label5406;
}

goto label9211;

label1138:

exit();

label1139:

goto label5008;

label1140:

D6b24A18E97A936d(XUI::$rRequest['ticket_id']);
goto label5003;

label1146:

exit();

label1147:

goto label4199;

label1148:
if (!(!e589a4bF54A2daD1('adv', 'edit_cchannel') && !e589A4bf54A2DAD1('adv', 'create_channel'))) {
	goto label14531;
}

goto label14526;

label1164:

goto label5625;

label1165:

if (E589a4bf54a2dAd1('adv', 'edit_stream')) {
	goto label11606;
}

echo json_encode(['result' => false]);
exit();
goto label11606;

label1177:

echo json_encode(['result' => true, 'data' => $ba2d146bb5a55097]);
exit();

label1184:

goto label1537;

label1185:

goto label13771;

label1186:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if (!($c4584835207f1ecb == 'kill')) {
	goto label1083;
}

XUI::B0020C716FDf67Bb(XUI::$rRequest['pid']);
echo json_encode(['result' => true]);
goto label1082;

label1203:

if (isset($Bcf70cba56392975[XUI::$rRequest['server_id']])) {
	goto label7405;
}

if (isset($a080f5083618911e[XUI::$rRequest['server_id']])) {
	goto label1357;
}

echo json_encode(['result' => false]);
exit();
goto label1356;

label1219:

echo json_encode(['result' => true]);
exit();

label1224:

goto label4576;

label1225:

goto label4180;

label1226:

echo json_encode(['result' => false]);
exit();

label1231:

goto label14722;

label1232:
if (!(XUI::c6c3738AEebB9958($A7ca171405b19571) && XUI::$rSettings['api_probe'])) {
	goto label9296;
}

$d24a79ef5aa1793c = parse_url($A7ca171405b19571);
$Dfd95aa1f46fdf22 = $d24a79ef5aa1793c['scheme'] . '://' . $d24a79ef5aa1793c['host'] . ($d24a79ef5aa1793c['port'] ? ':' . $d24a79ef5aa1793c['port'] : '') . '/probe/' . base64_encode($d24a79ef5aa1793c['path']);

if (!($Baba9277b00445b2 = json_decode(XUI::C6cEec588476ec43($Dfd95aa1f46fdf22), true))) {
	goto label9296;
}

$D9d6a5d0b76a9aaf = [];
goto label9287;

label1278:

goto label5792;

label1279:

if (E589a4bf54A2DaD1('adv', 'streams')) {
	goto label12691;
}

echo json_encode(['result' => false]);
exit();
goto label12691;

label1291:

if (!isset(XUI::$rRequest['search'])) {
	goto label9940;
}

$de1147c2d043d565 = $E7a3167b9fe69b2d = [];
$b62d6460eb33ea07->query('SELECT `epg_channels`.`epg_id`, `epg_channels`.`channel_id`, `epg_channels`.`name`, `epg_channels`.`langs`, `epg`.`epg_name` FROM `epg_channels` LEFT JOIN `epg` ON `epg_channels`.`epg_id` = `epg`.`id` WHERE (LOWER(`epg_channels`.`channel_id`) LIKE ? OR LOWER(`epg_channels`.`name`) LIKE ?) ORDER BY `epg_channels`.`name` ASC LIMIT 50;', strtolower(XUI::$rRequest['search']) . '%', strtolower(XUI::$rRequest['search']) . '%');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (isset($de1147c2d043d565[$Fb9da1713bff19ce['epg_id']])) {
		goto label1328;
	}

	$de1147c2d043d565[$Fb9da1713bff19ce['epg_id']] = $Fb9da1713bff19ce['epg_name'];

	label1328:

	$ebf287dbbc3574f3 = json_decode($Fb9da1713bff19ce['langs'], true);
	$E7a3167b9fe69b2d[$Fb9da1713bff19ce['epg_id']][] = ['id' => $Fb9da1713bff19ce['channel_id'], 'text' => $Fb9da1713bff19ce['name'], 'icon' => NULL, 'lang' => isset($ebf287dbbc3574f3[0]) ? $ebf287dbbc3574f3[0] : '', 'epg_id' => $Fb9da1713bff19ce['epg_id'], 'type' => 0];
}

goto label5415;

label1356:

goto label1361;

label1357:

$Ec379295dc7029e6 = $a080f5083618911e[XUI::$rRequest['server_id']];

label1361:

goto label7409;
goto label7405;

label1363:

echo json_encode(['result' => true, 'data' => $B9869413eae86beb]);
exit();

label1370:

goto label11827;

label1371:

goto label6082;

label1372:

$Bccd07953f314962 = [];
$b62d6460eb33ea07->query('SELECT `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $ee6d1fc5d801b43f);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
}

goto label1768;

label1390:

if (XUI::$rRequest['action'] == 'proxy') {
	goto label14449;
}

if (XUI::$rRequest['action'] == 'package') {
	goto label14753;
}

if (XUI::$rRequest['action'] == 'code') {
	goto label12425;
}

if (XUI::$rRequest['action'] == 'hmac') {
	goto label4808;
}

if (XUI::$rRequest['action'] == 'group') {
	goto label15242;
}

goto label6343;

label1416:

exit();
goto label14118;

label1418:

$b62d6460eb33ea07->query('UPDATE `users` SET `status` = 0 WHERE `id` = ?;', XUI::$rRequest['user_id']);
echo json_encode(['result' => true]);
goto label14117;

label1429:

echo json_encode(['result' => true, 'data' => $Fca04b1755da7bd5]);
exit();

label1436:

goto label7843;
goto label11201;

label1438:

$D577b2a7889a5fb6 = D5612f049a8056a5([
	'action'     => 'stream',
	'sub'        => 'start',
	'stream_ids' => array_values($dec36723d7be7c49),
	'servers'    => [intval(XUI::$rRequest['server_id'])]
]);

label1455:

echo json_encode(['result' => true]);
exit();

label1460:

goto label13637;

label1461:

goto label484;

label1462:

f2476161E17B4aA7(XUI::$rRequest['ip']);
echo json_encode(['result' => true]);
exit();
goto label484;

label1473:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1487;
}

$Abcb228699a7f743 = intval($b62d6460eb33ea07->get_row()['stationId']);

label1487:

$e02ff34f7d898a7b = [];
goto label9492;

label1489:

goto label5786;

label1490:

if (E589A4bf54a2DAd1('adv', 'manage_streams')) {
	goto label14612;
}

echo json_encode(['result' => false]);
goto label14611;

label1501:

if (XUI::$rRequest['type'] == 'movie') {
	goto label12320;
}

if (!(XUI::$rRequest['type'] == 'series')) {
	goto label12319;
}

$e02ff34f7d898a7b = $b41097c951ee83d3->searchTVShow($f23658ae5c2456c3);

foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
	$F36e7d4d6716c100[] = json_decode($D577b2a7889a5fb6->getJSON(), true);
}

goto label12319;

label1529:

shell_exec($C6671ac66a4f1c57);
echo json_encode(['result' => true]);
exit();

label1537:

goto label12337;

label1538:

if (isset(XUI::$rRequest['map'])) {
	goto label6207;
}

if (!(0 < count($D9d6a5d0b76a9aaf['streams']))) {
	goto label4723;
}

$fb361b5f838abd3c = [];

foreach ($D9d6a5d0b76a9aaf['streams'] as $a42d28fc2a08c3b1) {
	goto label1613;

	label1556:

	goto label1611;

	label1558:

	$fb361b5f838abd3c['width'] = intval($a42d28fc2a08c3b1['width']);
	$fb361b5f838abd3c['height'] = intval($a42d28fc2a08c3b1['height']);
	$fb361b5f838abd3c['vbitrate'] = intval($a42d28fc2a08c3b1['bit_rate']);
	goto label1578;

	label1578:

	$fb361b5f838abd3c['vcodec'] = $a42d28fc2a08c3b1['codec_name'];
	$fb361b5f838abd3c['fps'] = intval(explode('/', $a42d28fc2a08c3b1['r_frame_rate'])[0]);

	if ($fb361b5f838abd3c['fps']) {
		goto label1609;
	}

	$fb361b5f838abd3c['fps'] = intval(explode('/', $a42d28fc2a08c3b1['avg_frame_rate'])[0]);

	label1609:

	goto label1611;

	label1611:

	goto label1635;

	label1613:

	if ($a42d28fc2a08c3b1['codec_type'] == 'video') {
		goto label1558;
	}

	if (!($a42d28fc2a08c3b1['codec_type'] == 'audio')) {
		goto label1633;
	}

	$fb361b5f838abd3c['abitrate'] = intval($a42d28fc2a08c3b1['bit_rate']);
	$fb361b5f838abd3c['acodec'] = $a42d28fc2a08c3b1['codec_name'];

	label1633:

	goto label1556;

	label1635:
}

goto label8513;

label1638:

echo json_encode(['result' => false]);
exit();

label1643:

goto label794;

label1644:

goto label12810;

label1645:

goto label4341;

label1646:

$E8f21e009ba7a8c5 = intval($Caf4325605347834['credits']) + intval(XUI::$rRequest['credits']);

if (0 <= $E8f21e009ba7a8c5) {
	goto label12512;
}

echo json_encode(['result' => false]);
goto label12510;

label1665:

goto label1537;

label1666:

$ffb2d1a0985b1293 = json_decode(file_get_contents($F48d5724f3b4ec96), true);
$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 3 WHERE `id` = ?;', $C082ca9ed03f473c);

if (isset($ffb2d1a0985b1293['http_broadcast_port'])) {
	goto label4911;
}

goto label4871;

label1682:

goto label14524;

label1683:

if (e589a4bf54A2DAd1('adv', 'backups')) {
	goto label7687;
}

echo json_encode(['result' => false]);
goto label7686;

label1694:

$B9869413eae86beb['offline_streams'] = $b62d6460eb33ea07->get_row()['count'];

label1699:

$B9869413eae86beb['network_guaranteed_speed'] = $Bcf70cba56392975[$C082ca9ed03f473c]['network_guaranteed_speed'];

label1703:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
goto label9093;

label1710:

echo json_encode(['result' => false]);
exit();

label1715:

$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `active` = 0 WHERE `type` <> \'plex\';');
echo json_encode(['result' => true]);
goto label15535;

label1723:

Fc84e25737908CB5($ee6d1fc5d801b43f, $C082ca9ed03f473c, false);
echo json_encode(['result' => true]);
exit();

label1733:

goto label12836;

label1734:

echo json_encode(['result' => false]);
exit();

label1739:

goto label13806;

label1740:

goto label8532;

label1741:

echo json_encode(['result' => false]);
exit();

label1746:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label12742;
}

goto label12736;

label1753:

if (e589a4Bf54a2DaD1('adv', 'ticket')) {
	goto label1764;
}

echo json_encode(['result' => false]);
exit();

label1764:

$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label15520;

label1768:

if (!(0 < count($Bccd07953f314962))) {
	goto label1785;
}

echo D5612f049a8056a5([
	'action'     => 'stream',
	'sub'        => $c4584835207f1ecb,
	'stream_ids' => [$ee6d1fc5d801b43f],
	'servers'    => $Bccd07953f314962
]);
exit();

label1785:

goto label6082;

label1786:

echo json_encode(['result' => false]);
exit();

label1791:

goto label8483;

label1792:

goto label8482;

label1793:

goto label14600;

label1794:

Efa9379345817B87(XUI::$rRequest['server_id']);
echo json_encode(['result' => true]);
goto label14599;

label1804:

$c65e1c212da2f6fc = Ad052A625C6Ac011();

foreach ($c299da94f66c1d36 as $B4a603c2a57d3acf) {
	$C7af3e63901b4f3c = $cbc633376c324db1[$B4a603c2a57d3acf['table']];

	switch ($B4a603c2a57d3acf['table']) {
	case 'streams':
		goto label2851;

		label1830:

		goto label1835;

		label1833:

		$a3fa1eca36691abc = $D7209256c56b1469 = 'radio';

		label1835:

		goto label2161;
		goto label2159;

		label1841:

		$D8d609d5bdc92a03 = $Bcf70cba56392975[$B4a603c2a57d3acf['server_id']]['server_name'];

		if (!(1 < $D52a67130c4ab288[$B4a603c2a57d3acf['id']])) {
			goto label1859;
		}

		$D8d609d5bdc92a03 .= ' (+' . ($D52a67130c4ab288[$B4a603c2a57d3acf['id']] - 1) . ')';

		label1859:

		goto label1882;

		label1862:

		$a22fa0d1973a0b0e = 2;

		label1863:

		goto label2348;

		label1866:

		goto label2967;

		label1869:

		if (E589A4BF54A2DAD1('adv', 'manage_streams')) {
			goto label2889;
		}

		$b87030f28ff32396 = $B4a603c2a57d3acf['stream_display_name'];
		goto label2886;

		label1882:

		if ($C815cfd0505ca88e) {
			goto label1937;
		}

		if (intval($B4a603c2a57d3acf['direct_source']) == 1) {
			goto label1933;
		}

		$a22fa0d1973a0b0e = -1;
		goto label1934;
		goto label1933;

		label1902:

		$E8e13b4c9d9584b6 .= '<button title="Purge" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onclick="searchAPI(\'stream\', ' . intval($B4a603c2a57d3acf['id']) . ', \'purge\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-hammer"></i></button>';

		if (!($B4a603c2a57d3acf['type'] == 1)) {
			goto label2747;
		}

		if ($B1e93ae2ae39e1ff[$B4a603c2a57d3acf['id']] ?: false) {
			goto label2743;
		}

		$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-fingerprint"></i></button>';
		goto label2747;
		goto label2743;

		label1933:

		$a22fa0d1973a0b0e = 5;

		label1934:

		goto label2415;

		label1937:

		goto label2507;

		label1940:

		$E8e13b4c9d9584b6 .= '</div>';

		if (in_array($B4a603c2a57d3acf['type'], [1, 3, 4])) {
			goto label2808;
		}

		$B080674c55093935 = urlencode($Ccbdf03f8a4df633['movie_image']);
		$F884ebaff96f2cda = '<div class="card-search text-white">' . "\n\t\t\t\t\t\t\t\t" . '<div class="search-fade">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="search-image" style="background: url(\'resize?maxw=512&maxh=512&url=' . $B080674c55093935 . '\');"></div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1 text-truncate">' . $b87030f28ff32396 . '</h3>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-white mb-1 text-truncate"><small>' . $Dbcac322b4274e46 . '<br/>' . $D8d609d5bdc92a03 . '</small></p>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="card-body action-block">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="media align-items-center align-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%; display: flex;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn bg-animate-primary btn-xs waves-effect waves-light no-border">' . strtoupper($D7209256c56b1469) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-zap text-white"></i> &nbsp; <button onClick="navigate(\'live_connections?stream_id=' . $B4a603c2a57d3acf['id'] . '\');" type="button" class="btn bg-animate-info btn-xs waves-effect waves-light no-border">' . number_format($B1e93ae2ae39e1ff[$B4a603c2a57d3acf['id']], 0) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-clock text-white"></i> &nbsp; ' . $Bd92fffa215178e4 . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>';
		goto label2936;

		label1985:

		if (!(stripos($B4a603c2a57d3acf['stream_display_name'], $b87030f28ff32396) === 0)) {
			goto label1866;
		}

		$Dbcac322b4274e46 = ltrim(substr($B4a603c2a57d3acf['stream_display_name'], strlen($b87030f28ff32396), strlen($B4a603c2a57d3acf['stream_display_name']) - strlen($b87030f28ff32396)));

		if (!(substr($Dbcac322b4274e46, 0, 1) == '-')) {
			goto label2036;
		}

		$Dbcac322b4274e46 = trim(ltrim($Dbcac322b4274e46, '-'));

		label2036:

		goto label1866;

		label2039:

		$a22fa0d1973a0b0e = 0;
		goto label1863;

		label2043:
		if ($C815cfd0505ca88e['pid'] && (0 < $C815cfd0505ca88e['pid'])) {
			goto label2310;
		}

		if ($C815cfd0505ca88e['stream_status'] == 0) {
			goto label2235;
		}

		goto label2231;

		label2061:

		$a22fa0d1973a0b0e = 2;

		label2062:

		goto label2293;

		label2065:

		if (intval($C815cfd0505ca88e['stream_status']) == 2) {
			goto label2243;
		}

		goto label2239;

		label2077:

		goto label2081;

		label2080:

		$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-stop"></i></button>';

		label2081:

		goto label2640;

		label2084:

		$B4a603c2a57d3acf['server_id'] = $C815cfd0505ca88e['server_id'] ?: NULL;

		if ($B4a603c2a57d3acf['server_id']) {
			goto label1841;
		}

		$D8d609d5bdc92a03 = '';
		goto label1882;
		goto label1841;

		label2101:

		if ($B4a603c2a57d3acf['type'] == 3) {
			goto label2159;
		}

		if ($B4a603c2a57d3acf['type'] == 4) {
			goto label1833;
		}

		if (!($B4a603c2a57d3acf['type'] == 5)) {
			goto label2122;
		}

		$a3fa1eca36691abc = $D7209256c56b1469 = 'episode';

		label2122:

		goto label1830;

		label2125:

		if (86400 <= $Bd92fffa215178e4) {
			goto label2144;
		}

		$Bd92fffa215178e4 = sprintf('%02dh %02dm %02ds', $Bd92fffa215178e4 / 3600, ($Bd92fffa215178e4 / 60) % 60, $Bd92fffa215178e4 % 60);
		goto label2789;

		label2144:

		$Bd92fffa215178e4 = sprintf('%02dd %02dh %02dm', $Bd92fffa215178e4 / 86400, ($Bd92fffa215178e4 / 3600) % 24, ($Bd92fffa215178e4 / 60) % 60);
		goto label2789;

		label2159:

		$a3fa1eca36691abc = 'channel';
		$D7209256c56b1469 = 'created_channel';

		label2161:

		goto label2930;
		goto label2928;

		label2167:

		$a3fa1eca36691abc = $D7209256c56b1469 = 'stream';

		label2169:

		$b56c94f862684e1c = false;
		$E8e13b4c9d9584b6 = '<div class="btn-group bg-animate-info">';

		if (in_array($B4a603c2a57d3acf['type'], [1, 3, 4])) {
			goto label2273;
		}

		goto label2750;

		label2183:

		$C349f8a7743e51c0 = intval(((count($Ec0879f16d0cdddb) - $b0fb924d1ef9fa85) / count($Ec0879f16d0cdddb)) * 100);
		$Bd92fffa215178e4 = '<button type=\'button\' class=\'btn bg-animate-primary btn-xs waves-effect waves-light no-border btn-fixed-xl\'>' . $C349f8a7743e51c0 . '% DONE</button>';

		label2200:

		goto label2793;

		label2203:

		goto label2125;

		label2206:

		$C39bf74bcb6f2a82 = 5 - ($Be927fb456a47264 + ($ac699a87736bb3c0 ? 1 : 0));

		if (!(0 < $Be927fb456a47264)) {
			goto label2228;
		}

		foreach (range(1, $Be927fb456a47264) as $df6991d59f367c7e) {
			$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star\'></i>';
		}

		label2228:

		goto label2580;

		label2231:

		$a22fa0d1973a0b0e = 3;
		goto label2236;

		label2235:

		$a22fa0d1973a0b0e = 2;

		label2236:

		goto label2307;

		label2239:

		$a22fa0d1973a0b0e = 1;
		goto label2244;

		label2243:

		$a22fa0d1973a0b0e = 2;

		label2244:

		goto label2293;

		label2247:

		$B93a4cfa6336a834 = '';

		if (!$Ccbdf03f8a4df633['rating']) {
			goto label2666;
		}

		$e1928169d299e86c = round($Ccbdf03f8a4df633['rating']) / 2.0;
		$Be927fb456a47264 = floor($e1928169d299e86c);
		$ac699a87736bb3c0 = 0 < ($e1928169d299e86c - $Be927fb456a47264);
		goto label2206;

		label2270:

		goto label1940;

		label2273:

		if (!e589A4bf54a2dAd1('adv', 'edit_stream')) {
			goto label2747;
		}

		$b56c94f862684e1c = true;
		goto label2683;

		label2286:

		$a22fa0d1973a0b0e = 5;

		label2287:

		goto label2415;

		label2290:

		goto label2550;

		label2293:

		goto label2415;

		label2296:

		$a22fa0d1973a0b0e = 5;
		goto label2415;

		label2300:

		$a22fa0d1973a0b0e = 7;

		label2301:

		goto label2287;

		label2304:

		goto label2286;

		label2307:

		goto label1863;

		label2310:

		if (intval($C815cfd0505ca88e['stream_status']) == 2) {
			goto label1862;
		}

		$a22fa0d1973a0b0e = 1;
		goto label1863;
		goto label1862;

		label2326:
		if ($C815cfd0505ca88e['pid'] && (0 < $C815cfd0505ca88e['pid'])) {
			goto label2065;
		}

		if ($C815cfd0505ca88e['stream_status'] == 0) {
			goto label2345;
		}

		$a22fa0d1973a0b0e = 3;
		goto label2062;

		label2345:

		goto label2061;

		label2348:
		if (!((count(json_decode($C815cfd0505ca88e['cchannel_rsources'], true)) != count(json_decode($B4a603c2a57d3acf['stream_source'], true))) && !$C815cfd0505ca88e['parent_id'])) {
			goto label2375;
		}

		$a22fa0d1973a0b0e = 6;

		label2375:

		goto label2287;
		goto label2611;

		label2381:

		$Bd92fffa215178e4 = $d09052108da9e080[$a22fa0d1973a0b0e];
		goto label2200;

		label2386:

		$Ec0879f16d0cdddb = json_decode($B4a603c2a57d3acf['stream_source'], true);
		$b0fb924d1ef9fa85 = count(array_diff($Ec0879f16d0cdddb, json_decode($C815cfd0505ca88e['cchannel_rsources'], true)));
		goto label2183;

		label2408:

		$F884ebaff96f2cda .= '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>';

		label2409:

		goto label3995;
		goto label2977;

		label2415:

		if ($a22fa0d1973a0b0e == 1) {
			goto label2203;
		}

		if ($a22fa0d1973a0b0e == 6) {
			goto label2386;
		}

		goto label2381;

		label2428:

		$b87030f28ff32396 = $ae2ffcbcd86503e6[$B4a603c2a57d3acf['id']] ?: 'No Series';
		goto label2453;

		label2436:

		$b87030f28ff32396 = ($ae2ffcbcd86503e6[$B4a603c2a57d3acf['id']] ? '<span style=\'cursor: pointer;\' onClick="navigate(\'stream_view?id=' . intval($B4a603c2a57d3acf['id']) . '\');">' . $ae2ffcbcd86503e6[$B4a603c2a57d3acf['id']] . '</span>' : 'No Series');

		label2453:

		goto label1985;

		label2456:

		if (intval($a22fa0d1973a0b0e) == 7) {
			goto label2476;
		}

		$E8e13b4c9d9584b6 .= '<button title="Start Encoding" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'' . $D7209256c56b1469 . '\', ' . intval($B4a603c2a57d3acf['id']) . ', \'start\');"><i class="mdi mdi-play"></i></button>';
		goto label2077;

		label2476:

		$E8e13b4c9d9584b6 .= '<button title="Stop Encoding" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'' . $D7209256c56b1469 . '\', ' . intval($B4a603c2a57d3acf['id']) . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';
		goto label2077;

		label2488:

		if ($C815cfd0505ca88e['to_analyze'] == 1) {
			goto label2608;
		}

		if ($C815cfd0505ca88e['stream_status'] == 1) {
			goto label2604;
		}

		$a22fa0d1973a0b0e = 9;
		goto label2605;
		goto label2604;

		label2507:

		$Bd92fffa215178e4 = time() - intval($C815cfd0505ca88e['stream_started']);
		if (($B4a603c2a57d3acf['type'] == 1) || ($B4a603c2a57d3acf['type'] == 4)) {
			goto label2290;
		}
		if (($B4a603c2a57d3acf['type'] == 2) || ($B4a603c2a57d3acf['type'] == 5)) {
			goto label2611;
		}

		if (!($B4a603c2a57d3acf['type'] == 3)) {
			goto label2375;
		}

		if ($C815cfd0505ca88e['monitor_pid']) {
			goto label2043;
		}

		goto label2039;

		label2550:

		if (intval($B4a603c2a57d3acf['direct_source']) == 1) {
			goto label2296;
		}

		if ($C815cfd0505ca88e['monitor_pid']) {
			goto label2740;
		}

		if (intval($C815cfd0505ca88e['on_demand']) == 1) {
			goto label2736;
		}

		$a22fa0d1973a0b0e = 0;
		goto label2737;
		goto label2736;

		label2580:

		if (!$ac699a87736bb3c0) {
			goto label2586;
		}

		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-half\'></i>';

		label2586:

		if (!(0 < $C39bf74bcb6f2a82)) {
			goto label2666;
		}

		foreach (range(1, $C39bf74bcb6f2a82) as $df6991d59f367c7e) {
			$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-outline\'></i>';
		}

		goto label2666;

		label2604:

		$a22fa0d1973a0b0e = 10;

		label2605:

		goto label2301;

		label2608:

		goto label2300;

		label2611:

		if (intval($B4a603c2a57d3acf['direct_source']) == 1) {
			goto label2304;
		}
		if (!is_null($C815cfd0505ca88e['pid']) && (0 < $C815cfd0505ca88e['pid'])) {
			goto label2488;
		}

		$a22fa0d1973a0b0e = 8;
		goto label2301;
		goto label2488;

		label2640:

		goto label2652;

		label2643:

		$E8e13b4c9d9584b6 .= '<button title="Re-Encode" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'' . $D7209256c56b1469 . '\', ' . intval($B4a603c2a57d3acf['id']) . ', \'start\');"><i class="mdi mdi-refresh"></i></button>';

		label2652:

		$E8e13b4c9d9584b6 .= '<button title="Purge" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onclick="searchAPI(\'' . $D7209256c56b1469 . '\', ' . intval($B4a603c2a57d3acf['id']) . ', \'purge\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-hammer"></i></button>';
		goto label2270;

		label2666:

		$eca9936f0487fe83 = ($B4a603c2a57d3acf['year'] ? '<strong>' . $B4a603c2a57d3acf['year'] . '</strong> &nbsp;' : '');
		$b87030f28ff32396 .= '<br><span style=\'font-size:11px;\'>' . $eca9936f0487fe83 . $B93a4cfa6336a834 . '</span></a>';
		goto label2084;

		label2683:

		$E8e13b4c9d9584b6 .= '<button title="Edit" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onclick="navigate(\'' . $D7209256c56b1469 . '?id=' . intval($B4a603c2a57d3acf['id']) . '\');"><i class="mdi mdi-pencil"></i></button>';
		if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($B4a603c2a57d3acf['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5) || ($a22fa0d1973a0b0e == 7)) {
			goto label2908;
		}

		$E8e13b4c9d9584b6 .= '<button title="Start" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onclick="searchAPI(\'stream\', ' . intval($B4a603c2a57d3acf['id']) . ', \'start\');"><i class="mdi mdi-play"></i></button>';
		$b9f049445aa9bd5d = ' disabled';
		goto label2916;
		goto label2908;

		label2736:

		$a22fa0d1973a0b0e = 4;

		label2737:

		goto label2293;

		label2740:

		goto label2326;

		label2743:

		$E8e13b4c9d9584b6 .= '<button title="Fingerprint" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="modalFingerprint(' . $B4a603c2a57d3acf['id'] . ', \'stream\');"><i class="mdi mdi-fingerprint"></i></button>';

		label2747:

		goto label1940;

		label2750:

		if (!e589A4BF54A2Dad1('adv', 'edit_' . $D7209256c56b1469)) {
			goto label2270;
		}

		$b56c94f862684e1c = true;
		$E8e13b4c9d9584b6 .= '<button title="Edit" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onclick="navigate(\'' . $D7209256c56b1469 . '?id=' . intval($B4a603c2a57d3acf['id']) . '\');"><i class="mdi mdi-pencil"></i></button>';

		if (intval($a22fa0d1973a0b0e) == 9) {
			goto label2643;
		}

		if (intval($a22fa0d1973a0b0e) == 5) {
			goto label2080;
		}

		goto label2456;

		label2789:

		$Bd92fffa215178e4 = '<button type=\'button\' class=\'btn bg-animate-info btn-xs waves-effect waves-light no-border btn-fixed-xl\'>' . $Bd92fffa215178e4 . '</button>';

		label2793:

		if ($B4a603c2a57d3acf['type'] == 1) {
			goto label2933;
		}

		if ($B4a603c2a57d3acf['type'] == 2) {
			goto label2928;
		}

		goto label2101;

		label2808:

		$B080674c55093935 = urlencode($B4a603c2a57d3acf['stream_icon']);
		$F884ebaff96f2cda = '<div class="card-search text-white">' . "\n\t\t\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="col-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1 text-truncate">' . $b87030f28ff32396 . '</h3>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-white mb-1 text-truncate"><small>' . $Dbcac322b4274e46 . '<br/>' . $D8d609d5bdc92a03 . '</small></p>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="col-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="float-right text-center search-icon">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<img src="resize?maxw=96&maxh=96&url=' . $B080674c55093935 . '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="card-body action-block">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="media align-items-center align-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%; display: flex;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn bg-animate-success btn-xs waves-effect waves-light no-border">' . strtoupper($a3fa1eca36691abc) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-zap text-white"></i> &nbsp; <button onClick="navigate(\'live_connections?stream_id=' . $B4a603c2a57d3acf['id'] . '\');" type="button" class="btn bg-animate-info btn-xs waves-effect waves-light no-border">' . number_format($B1e93ae2ae39e1ff[$B4a603c2a57d3acf['id']], 0) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-clock text-white"></i> &nbsp; ' . $Bd92fffa215178e4 . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>';

		if (!$b56c94f862684e1c) {
			goto label2408;
		}

		$F884ebaff96f2cda .= '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-sliders text-white"></i> &nbsp; ' . $E8e13b4c9d9584b6 . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>';
		goto label2408;

		label2851:

		$C815cfd0505ca88e = $dc8696899854d891[$B4a603c2a57d3acf['id']][0] ?: NULL;
		$F05acfe4a87b8eb0 = json_decode($B4a603c2a57d3acf['category_id'], true);
		$Ccbdf03f8a4df633 = json_decode($B4a603c2a57d3acf['movie_properties'], true);

		if ($B4a603c2a57d3acf['type'] != 5) {
			goto label1869;
		}

		if (E589A4bF54A2DAD1('adv', 'manage_streams')) {
			goto label2436;
		}

		goto label2428;

		label2886:

		goto label2899;

		label2889:

		$b87030f28ff32396 = '<span style=\'cursor: pointer;\' onClick="navigate(\'stream_view?id=' . intval($B4a603c2a57d3acf['id']) . '\');">' . $B4a603c2a57d3acf['stream_display_name'] . '</span>';

		label2899:

		$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
		goto label2951;

		label2908:

		$E8e13b4c9d9584b6 .= '<button title="Stop" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onclick="searchAPI(\'stream\', ' . intval($B4a603c2a57d3acf['id']) . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';
		$b9f049445aa9bd5d = '';

		label2916:

		$E8e13b4c9d9584b6 .= '<button title="Restart" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onclick="searchAPI(\'stream\', ' . intval($B4a603c2a57d3acf['id']) . ', \'restart\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-refresh"></i></button>';
		goto label1902;

		label2928:

		$a3fa1eca36691abc = $D7209256c56b1469 = 'movie';

		label2930:

		goto label2169;

		label2933:

		goto label2167;

		label2936:

		if (!$b56c94f862684e1c) {
			goto label2944;
		}

		$F884ebaff96f2cda .= '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-sliders text-white"></i> &nbsp; ' . $E8e13b4c9d9584b6 . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>';

		label2944:

		$F884ebaff96f2cda .= '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>';
		goto label2409;
		goto label2808;

		label2951:

		if (!(1 < count($F05acfe4a87b8eb0))) {
			goto label2967;
		}

		$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ')';

		label2967:

		if (!($B4a603c2a57d3acf['type'] == 2)) {
			goto label2084;
		}

		goto label2247;
	case 'streams_series':
		label2977:

		goto label3184;

		label2980:

		$eca9936f0487fe83 = ($B4a603c2a57d3acf['year'] ? '<strong>' . $B4a603c2a57d3acf['year'] . '</strong> &nbsp;' : '');
		$b87030f28ff32396 .= '<br><span style=\'font-size:11px;\'>' . $eca9936f0487fe83 . $B93a4cfa6336a834 . '</span></a>';
		$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';

		if (!(1 < count($F05acfe4a87b8eb0))) {
			goto label3134;
		}

		goto label3127;

		label3012:

		$E8e13b4c9d9584b6 .= '<button title="View Episodes" onClick="navigate(\'episodes?series=' . $B4a603c2a57d3acf['id'] . '\');" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-eye"></i></button>';

		label3016:

		if (!e589a4BF54a2DAd1('adv', 'edit_series')) {
			goto label3033;
		}

		$b56c94f862684e1c = true;
		$E8e13b4c9d9584b6 .= '<button title="Edit" onClick="navigate(\'serie?id=' . $B4a603c2a57d3acf['id'] . '\');" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-pencil"></i></button>';
		goto label3033;

		label3033:

		$E8e13b4c9d9584b6 .= '</div>';
		$B080674c55093935 = urlencode($B4a603c2a57d3acf['cover']);
		$F884ebaff96f2cda = '<div class="card-search text-white">' . "\n\t\t\t\t\t\t\t" . '<div class="search-fade">' . "\n\t\t\t\t\t\t\t\t" . '<div class="search-image" style="background: url(\'resize?maxw=512&maxh=512&url=' . $B080674c55093935 . '\');"></div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1 text-truncate">' . $b87030f28ff32396 . '</h3>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-white mb-1 text-truncate"><small>' . $Dbcac322b4274e46 . '<br/>' . $D8d609d5bdc92a03 . '</small></p>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="card-body action-block">' . "\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center align-center">' . "\n\t\t\t\t\t\t\t\t\t" . '<ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%; display: flex;">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn bg-animate-danger btn-xs waves-effect waves-light no-border">TV SERIES</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'S &nbsp; <button type="button" class="btn bg-animate-info btn-xs waves-effect waves-light no-border">' . number_format($F7f30ae59097abd6[0], 0) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'E &nbsp; <button type="button" class="btn bg-animate-info btn-xs waves-effect waves-light no-border">' . number_format($F7f30ae59097abd6[1], 0) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>';

		if (!$b56c94f862684e1c) {
			goto label3091;
		}

		goto label3088;

		label3070:

		foreach (range(1, $Be927fb456a47264) as $df6991d59f367c7e) {
			$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star\'></i>';
		}

		label3079:

		if (!$ac699a87736bb3c0) {
			goto label3166;
		}

		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-half\'></i>';
		goto label3166;

		label3088:

		$F884ebaff96f2cda .= '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-sliders text-white"></i> &nbsp; ' . $E8e13b4c9d9584b6 . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>';

		label3091:

		$F884ebaff96f2cda .= '</ul>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>';
		goto label3995;
		goto label3207;

		label3098:

		$e1928169d299e86c = round($B4a603c2a57d3acf['rating']) / 2.0;
		$Be927fb456a47264 = floor($e1928169d299e86c);
		$ac699a87736bb3c0 = 0 < ($e1928169d299e86c - $Be927fb456a47264);
		$C39bf74bcb6f2a82 = 5 - ($Be927fb456a47264 + ($ac699a87736bb3c0 ? 1 : 0));

		if (!(0 < $Be927fb456a47264)) {
			goto label3079;
		}

		goto label3070;

		label3127:

		$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ')';

		label3134:

		$b56c94f862684e1c = false;
		$E8e13b4c9d9584b6 = '<div class="btn-group bg-animate-info">';

		if (!e589a4BF54a2daD1('adv', 'add_episode')) {
			goto label3153;
		}

		goto label3148;

		label3148:

		$b56c94f862684e1c = true;
		$E8e13b4c9d9584b6 .= '<button title="Add Episode(s)" onClick="navigate(\'episode?sid=' . $B4a603c2a57d3acf['id'] . '\');" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-plus-circle-outline"></i></button>';

		label3153:

		if (!e589A4Bf54a2dAD1('adv', 'episodes')) {
			goto label3016;
		}

		$b56c94f862684e1c = true;
		goto label3012;

		label3166:

		if (!(0 < $C39bf74bcb6f2a82)) {
			goto label3181;
		}

		foreach (range(1, $C39bf74bcb6f2a82) as $df6991d59f367c7e) {
			$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-outline\'></i>';
		}

		label3181:

		goto label2980;

		label3184:

		$F7f30ae59097abd6 = $E84de30ab6e5b0c1[$B4a603c2a57d3acf['id']] ?: [];
		$F05acfe4a87b8eb0 = json_decode($B4a603c2a57d3acf['category_id'], true);
		$b87030f28ff32396 = $B4a603c2a57d3acf['title'];
		$B93a4cfa6336a834 = '';

		if (!$B4a603c2a57d3acf['rating']) {
			goto label2980;
		}

		goto label3098;
	case 'users':
		label3207:

		goto label3224;

		label3210:

		$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'user\', ' . $B4a603c2a57d3acf['id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

		label3214:

		$E8e13b4c9d9584b6 .= '</div>';

		if ($B4a603c2a57d3acf['status'] == 1) {
			goto label3310;
		}

		goto label3305;

		label3224:

		$F951699bbe4a956e = $fd4ac8a686a5a700[$B4a603c2a57d3acf['id']] ?: 0;
		$C50e4262dbc7b171 = $f97dc62b89e38d3f[$B4a603c2a57d3acf['id']] ?: 0;
		$be8083145a42ee96 = $ed9dfa07f9e6092a[$B4a603c2a57d3acf['owner_id']] ?: NULL;
		$b56c94f862684e1c = false;
		$E8e13b4c9d9584b6 = '<div class="btn-group bg-animate-info">';
		goto label3314;

		label3244:

		$E8e13b4c9d9584b6 .= '<button title="Edit" onClick="navigate(\'user?id=' . $B4a603c2a57d3acf['id'] . '\');" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-pencil"></i></button>';

		if ($B4a603c2a57d3acf['status'] == 1) {
			goto label3261;
		}

		$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'user\', ' . $B4a603c2a57d3acf['id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
		goto label3214;

		label3261:

		goto label3210;

		label3264:

		if (!$c65e1c212da2f6fc[$B4a603c2a57d3acf['member_group_id']]['is_reseller']) {
			goto label3280;
		}

		$F884ebaff96f2cda .= '<div class="col-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="float-right text-center font-24 search-icon-xl">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-coin text-white"></i><br/>' . number_format($B4a603c2a57d3acf['credits'], 0) . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>';

		label3280:

		$F884ebaff96f2cda .= '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="card-body action-block">' . "\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center align-center">' . "\n\t\t\t\t\t\t\t\t\t" . '<ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%; display: flex;">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn bg-animate-warning btn-xs waves-effect waves-light no-border">USER</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-user-check text-white"></i> &nbsp; <button type="button" class="btn bg-animate-' . $bb066376b47ec43f . ' btn-xs waves-effect waves-light no-border">' . $b9f049445aa9bd5d . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-users text-white"></i> &nbsp; <button type="button" class="btn bg-animate-info btn-xs waves-effect waves-light no-border">' . number_format($F951699bbe4a956e, 0) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-tv text-white"></i> &nbsp; <button type="button" class="btn bg-animate-info btn-xs waves-effect waves-light no-border">' . number_format($C50e4262dbc7b171, 0) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>';

		if (!$b56c94f862684e1c) {
			goto label3355;
		}

		goto label3352;

		label3305:

		$b9f049445aa9bd5d = 'Inactive';
		$bb066376b47ec43f = 'warning';
		goto label3340;

		label3310:

		$b9f049445aa9bd5d = 'Active';
		goto label3339;

		label3314:

		if (!E589a4Bf54a2dAD1('adv', 'edit_reguser')) {
			goto label3214;
		}

		$b56c94f862684e1c = true;

		if (!$c65e1c212da2f6fc[$B4a603c2a57d3acf['member_group_id']]['is_reseller']) {
			goto label3336;
		}

		$E8e13b4c9d9584b6 .= '<button title="Add Credits" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="addCredits(' . $B4a603c2a57d3acf['id'] . ');"><i class="mdi mdi-coin"></i></button>';

		label3336:

		goto label3244;

		label3339:

		$bb066376b47ec43f = 'info';

		label3340:

		$F884ebaff96f2cda = '<div class="card-search text-white">' . "\n\t\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">';

		if ($c65e1c212da2f6fc[$B4a603c2a57d3acf['member_group_id']]['is_reseller']) {
			goto label3365;
		}

		$F884ebaff96f2cda .= '<div class="col-12">';
		goto label3362;

		label3352:

		$F884ebaff96f2cda .= '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-sliders text-white"></i> &nbsp; ' . $E8e13b4c9d9584b6 . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>';

		label3355:

		$F884ebaff96f2cda .= '</ul>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>';
		goto label3995;
		goto label3393;

		label3362:

		goto label3366;

		label3365:

		$F884ebaff96f2cda .= '<div class="col-9">';

		label3366:

		$F884ebaff96f2cda .= '<div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1 text-truncate">' . $B4a603c2a57d3acf['username'] . '</h3>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-lighter mb-1 text-truncate"><small>' . ($c65e1c212da2f6fc[$B4a603c2a57d3acf['member_group_id']]['group_name'] ? '<span class="text-white">' . $c65e1c212da2f6fc[$B4a603c2a57d3acf['member_group_id']]['group_name'] . '</span><br/>' : '') . ($be8083145a42ee96 ? '<span class="text-white">owner:</span> ' . $be8083145a42ee96 : '') . '</small></p>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>';
		goto label3264;
	case 'lines':
		label3393:

		goto label3473;

		label3396:

		goto label3403;

		label3399:

		$E8e13b4c9d9584b6 .= '<button title="Disable Line" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $B4a603c2a57d3acf['id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

		label3403:

		if ($f104f5a2d297abd1[$B4a603c2a57d3acf['id']] ?: false) {
			goto label3582;
		}

		goto label3578;

		label3414:

		goto label3995;
		goto label3682;

		label3420:

		$E8e13b4c9d9584b6 .= '</div>';

		if (!$B4a603c2a57d3acf['admin_enabled']) {
			goto label3440;
		}

		if (!$B4a603c2a57d3acf['enabled']) {
			goto label3497;
		}

		$b9f049445aa9bd5d = 'Active';
		goto label3493;

		label3437:

		goto label3445;

		label3440:

		$b9f049445aa9bd5d = 'Banned';
		$bb066376b47ec43f = 'danger';
		goto label3445;

		label3445:

		$E4fc21fdcc2ed803 = (isset($F3eeccba3a6d46c3[$B4a603c2a57d3acf['id']]) ? $F3eeccba3a6d46c3[$B4a603c2a57d3acf['id']] : json_decode($B4a603c2a57d3acf['last_activity_array'], true));

		if (is_array($E4fc21fdcc2ed803)) {
			goto label3541;
		}

		$F5dd33b2d93b9434 = 'Last Active<br/><small class=\'text-lighter\'>Never</small>';
		goto label3608;
		goto label3541;

		label3473:

		$be8083145a42ee96 = $ed9dfa07f9e6092a[$B4a603c2a57d3acf['member_id']] ?: NULL;
		$b56c94f862684e1c = false;
		$E8e13b4c9d9584b6 = '<div class="btn-group bg-animate-info">';

		if (!e589A4Bf54A2daD1('adv', 'edit_user')) {
			goto label3420;
		}

		$b56c94f862684e1c = true;
		goto label3502;

		label3493:

		$bb066376b47ec43f = 'info';
		goto label3437;

		label3497:

		$b9f049445aa9bd5d = 'Disabled';
		$bb066376b47ec43f = 'warning';
		goto label3437;

		label3502:

		$E8e13b4c9d9584b6 .= '<button title="Edit" onClick="navigate(\'line?id=' . $B4a603c2a57d3acf['id'] . '\');" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-pencil"></i></button>';
		$E8e13b4c9d9584b6 .= '<button title="Kill Connections" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $B4a603c2a57d3acf['id'] . ', \'kill\');"><i class="fas fa-hammer"></i></button>';

		if ($B4a603c2a57d3acf['admin_enabled']) {
			goto label3525;
		}

		$E8e13b4c9d9584b6 .= '<button title="Unban Line" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $B4a603c2a57d3acf['id'] . ', \'unban\');"><i class="mdi mdi-power"></i></button>';
		goto label3529;
		goto label3525;

		label3525:

		$E8e13b4c9d9584b6 .= '<button title="Ban Line" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $B4a603c2a57d3acf['id'] . ', \'ban\');"><i class="mdi mdi-power"></i></button>';

		label3529:

		if ($B4a603c2a57d3acf['enabled']) {
			goto label3399;
		}

		$E8e13b4c9d9584b6 .= '<button title="Enable Line" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $B4a603c2a57d3acf['id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
		goto label3396;

		label3541:

		$E4fc21fdcc2ed803['stream_display_name'] = $Af1444cd652ebf84[$E4fc21fdcc2ed803['stream_id']];

		if ($E4fc21fdcc2ed803['online']) {
			goto label3589;
		}

		$F5dd33b2d93b9434 = 'Last Active<br/><small class=\'text-lighter\'>' . ($E4fc21fdcc2ed803['date_end'] ? date(XUI::$rSettings['date_format'], $E4fc21fdcc2ed803['date_end']) . '<br/>' . date('H:i:s', $E4fc21fdcc2ed803['date_end']) : 'Never') . '</small>';
		goto label3608;
		goto label3589;

		label3578:

		$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-fingerprint"></i></button>';
		goto label3586;

		label3582:

		$E8e13b4c9d9584b6 .= '<button title="Fingerprint" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="modalFingerprint(' . $B4a603c2a57d3acf['id'] . ', \'user\');"><i class="mdi mdi-fingerprint"></i></button>';

		label3586:

		goto label3420;

		label3589:

		$F5dd33b2d93b9434 = '<a class=\'text-white\' href=\'javascript:void(0);\' onClick="navigate(\'stream_view?id=' . intval($E4fc21fdcc2ed803['stream_id']) . '\');">' . $E4fc21fdcc2ed803['stream_display_name'] . '</a><br/><small class=\'text-lighter\'>Online: ' . XUI::a5d0a3407690f047(time() - $E4fc21fdcc2ed803['last_active']) . '</small>';

		label3608:

		$Dcd345fd677c6c87 = ($B4a603c2a57d3acf['exp_date'] ? date(XUI::$rSettings['datetime_format'], $B4a603c2a57d3acf['exp_date']) : NULL);
		goto label3624;

		label3624:

		$F884ebaff96f2cda = '<div class="card-search text-white">' . "\n\t\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-9">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1 text-truncate">' . $B4a603c2a57d3acf['username'] . '</h3>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-lighter mb-1 text-truncate"><small>' . ($Dcd345fd677c6c87 ? '<span class="text-white">expires:</span> ' . $Dcd345fd677c6c87 . '<br/>' : '') . ($be8083145a42ee96 ? '<span class="text-white">owner:</span> ' . $be8083145a42ee96 : '') . '</small></p>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-3">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="float-right text-center search-icon-xl mt-1">' . $F5dd33b2d93b9434 . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="card-body action-block">' . "\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center align-center">' . "\n\t\t\t\t\t\t\t\t\t" . '<ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%; display: flex;">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn bg-animate-pink btn-xs waves-effect waves-light no-border">' . ($B4a603c2a57d3acf['is_restreamer'] ? '<i title=\'Restreamer\' class=\'mdi mdi-swap-horizontal tooltip\'></i> ' : ($B4a603c2a57d3acf['is_trial'] ? '<i title=\'Trial\' class=\'mdi mdi-gavel tooltip\'></i> ' : '')) . 'LINE</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-user-check text-white"></i> &nbsp; <button type="button" class="btn bg-animate-' . $bb066376b47ec43f . ' btn-xs waves-effect waves-light no-border">' . $b9f049445aa9bd5d . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-zap text-white"></i> &nbsp; <button type="button" class="btn bg-animate-info btn-xs waves-effect waves-light no-border">' . number_format($f104f5a2d297abd1[$B4a603c2a57d3acf['id']] ?: 0, 0) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>';

		if (!$b56c94f862684e1c) {
			goto label3678;
		}

		$F884ebaff96f2cda .= '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-sliders text-white"></i> &nbsp; ' . $E8e13b4c9d9584b6 . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>';

		label3678:

		$F884ebaff96f2cda .= '</ul>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>';
		goto label3414;
	case 'enigma_devices':
	case 'mag_devices':
		label3682:

		goto label3919;

		label3685:

		$F5dd33b2d93b9434 = '<a class=\'text-white\' href=\'javascript:void(0);\' onClick="navigate(\'stream_view?id=' . intval($E4fc21fdcc2ed803['stream_id']) . '\');">' . $E4fc21fdcc2ed803['stream_display_name'] . '</a><br/><small class=\'text-lighter\'>Online: ' . XUI::A5d0a3407690F047(time() - $E4fc21fdcc2ed803['last_active']) . '</small>';

		label3704:

		$Dcd345fd677c6c87 = ($f4e5ef13910179a5['exp_date'] ? date(XUI::$rSettings['datetime_format'], $f4e5ef13910179a5['exp_date']) : NULL);
		goto label3737;

		label3720:

		$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-fingerprint"></i></button>';
		goto label3728;

		label3724:

		$E8e13b4c9d9584b6 .= '<button title="Fingerprint" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="modalFingerprint(' . $f4e5ef13910179a5['id'] . ', \'user\');"><i class="mdi mdi-fingerprint"></i></button>';

		label3728:

		goto label3977;

		label3731:

		goto label3995;
		goto label3994;

		label3737:

		$F884ebaff96f2cda = '<div class="card-search text-white">' . "\n\t\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-9">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1 text-truncate">' . $B4a603c2a57d3acf['mac'] . '</h3>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-lighter mb-1 text-truncate"><small>' . ($Dcd345fd677c6c87 ? '<span class="text-white">expires:</span> ' . $Dcd345fd677c6c87 . '<br/>' : '') . ($be8083145a42ee96 ? '<span class="text-white">owner:</span> ' . $be8083145a42ee96 : '') . '</small></p>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-3">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="float-right text-center search-icon-xl mt-1">' . $F5dd33b2d93b9434 . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="card-body action-block">' . "\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center align-center">' . "\n\t\t\t\t\t\t\t\t\t" . '<ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%; display: flex;">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn bg-animate-pink btn-xs waves-effect waves-light no-border">' . ($f4e5ef13910179a5['is_trial'] ? '<i class=\'mdi mdi-gavel\'></i> ' : '') . strtoupper($Fd0d4c02204da727) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-user-check text-white"></i> &nbsp; <button type="button" class="btn bg-animate-' . $bb066376b47ec43f . ' btn-xs waves-effect waves-light no-border">' . $b9f049445aa9bd5d . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-zap text-white"></i> &nbsp; <button type="button" class="btn bg-animate-info btn-xs waves-effect waves-light no-border">' . number_format($f104f5a2d297abd1[$f4e5ef13910179a5['id']] ?: 0, 0) . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>';

		if (!$b56c94f862684e1c) {
			goto label3790;
		}

		$F884ebaff96f2cda .= '<li class="dropdown notification-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="mr-0 waves-effect pd-left pd-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="pro-user-name text-white ml-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-sliders text-white"></i> &nbsp; ' . $E8e13b4c9d9584b6 . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</li>';

		label3790:

		$F884ebaff96f2cda .= '</ul>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>';
		goto label3731;

		label3794:

		$E4fc21fdcc2ed803 = (isset($F3eeccba3a6d46c3[$f4e5ef13910179a5['id']]) ? $F3eeccba3a6d46c3[$f4e5ef13910179a5['id']] : json_decode($f4e5ef13910179a5['last_activity_array'], true));

		if (is_array($E4fc21fdcc2ed803)) {
			goto label3822;
		}

		$F5dd33b2d93b9434 = 'Last Active<br/><small class=\'text-lighter\'>Never</small>';
		goto label3704;
		goto label3822;

		label3822:

		$E4fc21fdcc2ed803['stream_display_name'] = $Af1444cd652ebf84[$E4fc21fdcc2ed803['stream_id']];

		if ($E4fc21fdcc2ed803['online']) {
			goto label3685;
		}

		$F5dd33b2d93b9434 = 'Last Active<br/><small class=\'text-lighter\'>' . ($E4fc21fdcc2ed803['date_end'] ? date(XUI::$rSettings['date_format'], $E4fc21fdcc2ed803['date_end']) . '<br/>' . date('H:i:s', $E4fc21fdcc2ed803['date_end']) : 'Never') . '</small>';
		goto label3704;
		goto label3685;

		label3859:

		goto label3794;

		label3862:

		$b9f049445aa9bd5d = 'Banned';
		$bb066376b47ec43f = 'danger';
		goto label3794;

		label3867:

		$E8e13b4c9d9584b6 .= '<button title="Edit" onClick="navigate(\'' . $Fd0d4c02204da727 . '?id=' . $B4a603c2a57d3acf['id'] . '\');" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip"><i class="mdi mdi-pencil"></i></button>';
		$E8e13b4c9d9584b6 .= '<button title="Kill Connection" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $f4e5ef13910179a5['id'] . ', \'kill\');"><i class="fas fa-hammer"></i></button>';

		if ($B4a603c2a57d3acf['admin_enabled']) {
			goto label3941;
		}

		$E8e13b4c9d9584b6 .= '<button title="Unban Device" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $f4e5ef13910179a5['id'] . ', \'unban\');"><i class="mdi mdi-power"></i></button>';
		goto label3945;
		goto label3941;

		label3892:

		$bb066376b47ec43f = 'info';
		goto label3859;

		label3896:

		$b9f049445aa9bd5d = 'Disabled';
		$bb066376b47ec43f = 'warning';
		goto label3859;

		label3901:

		goto label3908;

		label3904:

		$E8e13b4c9d9584b6 .= '<button title="Disable Device" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $f4e5ef13910179a5['id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

		label3908:

		if ($f104f5a2d297abd1[$f4e5ef13910179a5['id']] ?: false) {
			goto label3724;
		}

		goto label3720;

		label3919:

		$f4e5ef13910179a5 = $D5cd4a6da1994ac8[$B4a603c2a57d3acf['user_id']] ?: NULL;

		if ($f4e5ef13910179a5) {
			goto label3931;
		}

		goto label3995;

		label3931:

		$Fd0d4c02204da727 = ($B4a603c2a57d3acf['table'] == 'mag_devices' ? 'mag' : 'enigma');
		goto label3957;

		label3941:

		$E8e13b4c9d9584b6 .= '<button title="Ban Device" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $f4e5ef13910179a5['id'] . ', \'ban\');"><i class="mdi mdi-power"></i></button>';

		label3945:

		if ($B4a603c2a57d3acf['enabled']) {
			goto label3904;
		}

		$E8e13b4c9d9584b6 .= '<button title="Enable Device" type="button" class="btn btn-xs waves-effect waves-light no-border tooltip" onClick="searchAPI(\'line\', ' . $f4e5ef13910179a5['id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
		goto label3901;

		label3957:

		$be8083145a42ee96 = $ed9dfa07f9e6092a[$f4e5ef13910179a5['member_id']] ?: NULL;
		$b56c94f862684e1c = false;
		$E8e13b4c9d9584b6 = '<div class="btn-group bg-animate-info">';

		if (!E589a4Bf54A2dad1('adv', 'edit_user')) {
			goto label3977;
		}

		$b56c94f862684e1c = true;
		goto label3867;

		label3977:

		$E8e13b4c9d9584b6 .= '</div>';

		if (!$f4e5ef13910179a5['admin_enabled']) {
			goto label3862;
		}

		if (!$f4e5ef13910179a5['enabled']) {
			goto label3896;
		}

		$b9f049445aa9bd5d = 'Active';
		goto label3892;
	}

	label3994:

	label3995:

	$B9869413eae86beb['items'][] = ['id' => $b5a93f3474101e1f . '#' . $B4a603c2a57d3acf[$C7af3e63901b4f3c[3]], 'url' => $C7af3e63901b4f3c[1] . $B4a603c2a57d3acf[$C7af3e63901b4f3c[3]], 'text' => $B4a603c2a57d3acf[$C7af3e63901b4f3c[4]], 'html' => $F884ebaff96f2cda];
}

label4014:

$B9869413eae86beb['total_count'] = count($B9869413eae86beb['items']);
goto label14579;

label4021:

$df9ce9bd5a53be95 = $Fca04b1755da7bd5['isp']['autonomous_system_number'];
$b62d6460eb33ea07->query('SELECT `type` FROM `blocked_asns` WHERE `asn` = ?;', $df9ce9bd5a53be95);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label4039;
}

$Fca04b1755da7bd5['type'] = $b62d6460eb33ea07->get_row()['type'];

label4039:

goto label14001;

label4040:

goto label7650;

label4041:

$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;', $f7107e3a92443147);
XUI::ccb5075c679e7314($f7107e3a92443147);
echo json_encode(['result' => true]);
goto label7649;

label4053:

goto label15219;

label4054:

if (e589A4Bf54a2dad1('adv', 'stream_tools')) {
	goto label4827;
}

echo json_encode(['result' => false]);
exit();
goto label4827;

label4066:

echo json_encode(['result' => true]);
exit();

label4071:

goto label11123;

label4072:

goto label11115;

label4073:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `stream_status` <> 2 AND `type` = 1;', $C082ca9ed03f473c);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label4088;
}

$B9869413eae86beb['total_streams'] = $b62d6460eb33ea07->get_row()['count'];

label4088:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `pid` > 0 AND `type` = 1;', $C082ca9ed03f473c);
goto label4158;

label4093:

if (XUI::$rRequest['action'] == 'ip_whois') {
	goto label8147;
}

if (XUI::$rRequest['action'] == 'asn') {
	goto label7731;
}

if (XUI::$rRequest['action'] == 'server_view') {
	goto label11828;
}

if (XUI::$rRequest['action'] == 'server_stats') {
	goto label6266;
}

if (XUI::$rRequest['action'] == 'epg_api_single') {
	goto label1080;
}

goto label12141;

label4119:

$Bf3377811d8e2b3a['online_users'] = $Ec379295dc7029e6['users'] ?: 0;
$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `pid` > 0 AND `type` = 1;', $Ec379295dc7029e6['id']);
$Bf3377811d8e2b3a['total_running_streams'] = $b62d6460eb33ea07->get_row()['count'];
$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `type` = 1 AND ((`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0);', $Ec379295dc7029e6['id']);
$Bf3377811d8e2b3a['offline_streams'] = $b62d6460eb33ea07->get_row()['count'];
goto label7716;

label4145:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label1794;
}

if ($c4584835207f1ecb == 'enable') {
	goto label15712;
}

if ($c4584835207f1ecb == 'disable') {
	goto label13625;
}

goto label14622;

label4158:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label4169;
}

$B9869413eae86beb['total_running_streams'] = $b62d6460eb33ea07->get_row()['count'];

label4169:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `type` = 1 AND (`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0);', $C082ca9ed03f473c);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1699;
}

goto label1694;

label4180:

if (E589a4bF54a2DAD1('adv', 'fingerprint')) {
	goto label4191;
}

echo json_encode(['result' => false]);
exit();

label4191:

$ba2d146bb5a55097 = json_decode(XUI::$rRequest['data'], true);
goto label8393;

label4199:

goto label11825;

label4200:

if (E589A4Bf54A2DaD1('adv', 'index')) {
	goto label9082;
}

echo json_encode(['result' => false]);
goto label9081;

label4211:

echo json_encode(['result' => false]);
exit();

label4216:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];

if (!isset(XUI::$rRequest['search'])) {
	goto label7130;
}

goto label14364;

label4223:

if (XUI::$rRequest['action'] == 'stats') {
	goto label11826;
}

if (XUI::$rRequest['action'] == 'header_stats') {
	goto label4200;
}

if (XUI::$rRequest['action'] == 'review_selection') {
	goto label1148;
}

if (XUI::$rRequest['action'] == 'review_bouquet') {
	goto label6404;
}

if (XUI::$rRequest['action'] == 'epglist') {
	goto label13367;
}

goto label7504;

label4249:

$b62d6460eb33ea07->query('SELECT `server_id`, COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `type` = 1 AND (`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0) GROUP BY `server_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Aa0fba5332a8010d[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['count']);
}

foreach (array_keys($Bcf70cba56392975) as $C082ca9ed03f473c) {
	goto label4310;

	label4275:

	$B9869413eae86beb['offline_streams'] += $Aa0fba5332a8010d[$C082ca9ed03f473c] ?: 0;
	$b89534efad61c2e2 = json_decode($Bcf70cba56392975[$C082ca9ed03f473c]['watchdog_data'], true);

	if (!is_array($b89534efad61c2e2)) {
		goto label4308;
	}

	$B9869413eae86beb['bytes_received'] += intval($b89534efad61c2e2['bytes_received']);
	$B9869413eae86beb['bytes_sent'] += intval($b89534efad61c2e2['bytes_sent']);
	goto label4308;

	label4308:

	goto label4333;

	label4310:

	if (!$Bcf70cba56392975[$C082ca9ed03f473c]['server_online']) {
		goto label4308;
	}

	if (!XUI::$rSettings['redis_handler']) {
		goto label4326;
	}

	$B9869413eae86beb['total_connections'] += $Bcf70cba56392975[$C082ca9ed03f473c]['connections'];

	label4326:

	$B9869413eae86beb['total_running_streams'] += $Cb83d0310a2254b4[$C082ca9ed03f473c] ?: 0;
	goto label4275;

	label4333:
}

goto label11818;

label4336:

echo json_encode(['result' => true]);
exit();

label4341:

goto label12991;

label4342:

echo json_encode(['result' => true]);
exit();

label4347:

goto label4040;

label4348:

if (XUI::$rSettings['redis_handler']) {
	goto label11882;
}

if ($C082ca9ed03f473c == -1) {
	goto label12896;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `stream_id` = ? AND `server_id` = ?;', $ee6d1fc5d801b43f, $C082ca9ed03f473c);
goto label12900;
goto label12896;

label4362:

if ($F56066ad7b074468) {
	goto label6763;
}

if ($b120584763e3d117) {
	goto label4377;
}

$b62d6460eb33ea07->query('TRUNCATE ' . C79e45B9106CF57B(XUI::$rRequest['type']) . ';');
goto label6762;

label4377:

goto label6749;

label4378:

goto label1460;

label4379:

$dec36723d7be7c49 = [];
$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_servers` WHERE `server_id` = ? AND `on_demand` = 0;', XUI::$rRequest['server_id']);
goto label5446;

label4387:

exit();

label4388:

goto label6214;

label4389:
if (!(!E589a4Bf54a2DaD1('adv', 'mng_regusers') && !e589a4bf54A2DaD1('adv', 'manage_mag') && !e589a4BF54a2Dad1('adv', 'manage_e2') && !e589A4bf54A2dAD1('adv', 'edit_e2') && !e589a4bF54a2DAD1('adv', 'add_e2') && !E589A4Bf54A2Dad1('adv', 'add_mag') && !E589a4BF54a2dAD1('adv', 'edit_mag'))) {
	goto label14715;
}

goto label14710;

label4440:

if (!isset(XUI::$rRequest['search'])) {
	goto label12690;
}

if (isset(XUI::$rRequest['page'])) {
	goto label4451;
}

$D7209256c56b1469 = 1;
goto label11855;

label4451:

goto label11849;

label4452:

$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 1 WHERE `type` = ?;', $df9ce9bd5a53be95);
echo json_encode(['result' => true]);
exit();

label4461:

goto label913;
goto label904;

label4463:

$B9869413eae86beb['bytes_received'] = intval($b89534efad61c2e2['bytes_received']);
$B9869413eae86beb['bytes_sent'] = intval($b89534efad61c2e2['bytes_sent']);

label4475:

$B9869413eae86beb['requests_per_second'] = $Bcf70cba56392975[$C082ca9ed03f473c]['requests_per_second'];
goto label11786;

label4480:

exec('pgrep -u xui redis-server', $ed6449291d7f1a64);
if (!((0 < count($ed6449291d7f1a64)) && is_numeric($ed6449291d7f1a64[0]))) {
	goto label8779;
}

$C98e11437faf4199 = intval($ed6449291d7f1a64[0]);
shell_exec('kill -9 ' . $C98e11437faf4199);
goto label8779;

label4508:

$d1ea49ac108e66ab = confirmIDs($d1ea49ac108e66ab);

if (!(0 < count($d1ea49ac108e66ab))) {
	goto label5307;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines` WHERE `id` IN (' . implode(',', $d1ea49ac108e66ab) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D5cd4a6da1994ac8[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce;

	if (!(0 < intval($Fb9da1713bff19ce['member_id']))) {
		goto label4547;
	}

	$E153b6005aa003ab[] = $Fb9da1713bff19ce['member_id'];

	label4547:
}

goto label5307;

label4550:

if ($c4584835207f1ecb == 'kill') {
	goto label4559;
}

echo json_encode(['result' => false]);
exit();
goto label6739;

label4559:

goto label7530;

label4560:

goto label14961;

label4561:

Dd81518d00a2dd90(XUI::$rRequest['mag_id']);
echo json_encode(['result' => true]);
goto label14960;

label4571:

echo json_encode(['result' => true]);
exit();

label4576:

goto label12084;

label4577:

echo json_encode(['result' => false]);
exit();
goto label12808;

label4583:

echo json_encode(['result' => true, 'data' => $a2ebb817d88c810b]);
goto label12807;

label4590:

$d611c60168c266f6 = confirmIDs($d611c60168c266f6);

if (!(0 < count($d611c60168c266f6))) {
	goto label13312;
}

$b62d6460eb33ea07->query('SELECT `series_id`, MAX(`season_num`) AS `latest_season`, COUNT(*) AS `episodes` FROM `streams_episodes` WHERE `series_id` IN (' . implode(',', $d611c60168c266f6) . ') GROUP BY `series_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$E84de30ab6e5b0c1[$Fb9da1713bff19ce['series_id']] = [$Fb9da1713bff19ce['latest_season'], $Fb9da1713bff19ce['episodes']];
}

goto label13312;

label4624:

if (e589A4bF54a2dad1('adv', 'rtmp')) {
	goto label4635;
}

echo json_encode(['result' => false]);
exit();

label4635:

echo A730c6DE034Ba241(intval(XUI::$rRequest['server']), ['action' => 'rtmp_kill', 'name' => XUI::$rRequest['name']]);
goto label12012;

label4650:

echo json_encode(['result' => false]);
exit();

label4655:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label5394;
}

goto label5388;

label4662:

exit();

label4663:

Xui\Functions::restore('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $F48d5724f3b4ec96);
goto label5400;

label4668:

goto label4670;

label4669:

$E8d2f47901b176c3 = 'date_start';

label4670:
if ($F56066ad7b074468 && $b120584763e3d117) {
	goto label15725;
}

goto label4362;

label4675:

$d5faa5f11beba133 = '<table class=\'table-data\' style=\'width: 380px;\' align=\'center\'><tbody><tr><td class=\'nowrap\' style=\'color: #20a009;width: 25%;\'><i class=\'mdi mdi-image-size-select-large\' data-name=\'mdi-image-size-select-large\'></i></td><td class=\'nowrap\' style=\'color: #20a009;\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td class=\'nowrap\' style=\'color: #20a009;\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td><td class=\'nowrap\' style=\'color: #20a009;width: 20%;\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td><td class=\'nowrap\' style=\'color: #' . (strtolower($D9d6a5d0b76a9aaf['container']) == 'mpegts' ? '20a009' : 'd65656') . ';width: 18%;\'><i class=\'mdi ' . (strtolower($D9d6a5d0b76a9aaf['container']) == 'mpegts' ? 'mdi-check' : 'mdi-close') . '\' data-name=\'' . (strtolower($D9d6a5d0b76a9aaf['container']) == 'mpegts' ? 'mdi-check' : 'mdi-close') . '\'></i></td></tr><tr><td class=\'nowrap\'>' . $fb361b5f838abd3c['width'] . '&nbsp;x&nbsp;' . $fb361b5f838abd3c['height'] . '</td><td class=\'nowrap\'>' . $fb361b5f838abd3c['vcodec'] . '</td><td class=\'nowrap\'>' . $fb361b5f838abd3c['acodec'] . '</td><td class=\'nowrap\'>' . $c7b8b5438b915f8f . '</td><td class=\'nowrap\'>LLOD&nbsp;v3</td></tr></tbody></table>';

label4723:

echo $d5faa5f11beba133;
exit();
goto label6206;

label4726:

goto label9274;

label4727:

Ed770984CfB04dfa(XUI::$rRequest['folder_id']);
echo json_encode(['result' => true]);
goto label9273;

label4737:

C05365dCb6d79618(XUI::$rRequest['user_id'], false, false, $E59d0debc75e7be8['id']);
echo json_encode(['result' => true]);
exit();

label4751:

goto label14078;

label4752:

if ($c4584835207f1ecb == 'force') {
	goto label4761;
}

echo json_encode(['result' => false]);
exit();
goto label4726;

label4761:

goto label13285;

label4762:

echo json_encode(['result' => false]);
exit();

label4767:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label7550;
}

goto label14107;

label4774:

if (E589A4bF54a2DAD1('adv', 'servers')) {
	goto label4785;
}

echo json_encode(['result' => false]);
exit();

label4785:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	if (!$Ec379295dc7029e6['server_online']) {
		goto label4804;
	}

	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $Ec379295dc7029e6['id'], time(), json_encode(['action' => 'update']));

	label4804:
}

goto label9884;

label4807:

goto label9056;

label4808:

if (E589a4bf54a2dad1('adv', 'add_hmac')) {
	goto label14994;
}

goto label14989;

label4815:

exit();

label4816:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label11932;
}

echo json_encode(['result' => false]);
goto label11930;

label4827:

$f99bf45807d34d5a = [];
$fb173e63c96d4021 = XUI::$rRequest['text'] ?: NULL;

if (!$fb173e63c96d4021) {
	goto label603;
}

$d6fbf2cdbc7895f2 = explode("\n", $fb173e63c96d4021);
goto label525;

label4842:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label13983;
}

echo json_encode(['result' => false]);
exit();
goto label13993;
goto label13983;

label4855:

if ($c4584835207f1ecb == 'delete') {
	goto label8751;
}

if ($c4584835207f1ecb == 'update') {
	goto label12872;
}

if ($c4584835207f1ecb == 'enable') {
	goto label7675;
}

if ($c4584835207f1ecb == 'disable') {
	goto label501;
}

if ($c4584835207f1ecb == 'enable_proxy') {
	goto label7704;
}

goto label14415;

label4871:

$C6671ac66a4f1c57 = PHP_BIN . ' ' . CLI_PATH . 'balancer.php ' . $A7d54b094ae83c95 . ' ' . intval($C082ca9ed03f473c) . ' ' . intval($ffb2d1a0985b1293['ssh_port']) . ' ' . escapeshellarg($ffb2d1a0985b1293['root_username']) . ' ' . escapeshellarg($ffb2d1a0985b1293['root_password']) . ' > "' . BIN_PATH . 'install/' . intval($C082ca9ed03f473c) . '.install" 2>/dev/null &';
goto label4962;

label4911:

$C6671ac66a4f1c57 = PHP_BIN . ' ' . CLI_PATH . 'balancer.php ' . $A7d54b094ae83c95 . ' ' . intval($C082ca9ed03f473c) . ' ' . intval($ffb2d1a0985b1293['ssh_port']) . ' ' . escapeshellarg($ffb2d1a0985b1293['root_username']) . ' ' . escapeshellarg($ffb2d1a0985b1293['root_password']) . ' ' . intval($ffb2d1a0985b1293['http_broadcast_port']) . ' ' . intval($ffb2d1a0985b1293['https_broadcast_port']) . ' > "' . BIN_PATH . 'install/' . intval($C082ca9ed03f473c) . '.install" 2>/dev/null &';

label4962:

goto label1529;

label4963:

if (e589A4BF54a2Dad1('adv', 'edit_movie')) {
	goto label4974;
}

echo json_encode(['result' => false]);
exit();

label4974:

goto label12783;

label4975:

$b38e11ffdc6a3abb = XUI::$rRequest['ip'];
$b3295e009ed68643 = new MaxMind\Db\Reader(GEOLITE2C_BIN);
$Fca04b1755da7bd5 = $b3295e009ed68643->get($b38e11ffdc6a3abb);

if (!isset($Fca04b1755da7bd5['location']['time_zone'])) {
	goto label14190;
}

$e36d2f5d3c9f0972 = new DateTime('now', new DateTimeZone($Fca04b1755da7bd5['location']['time_zone']));
goto label14184;

label5003:

echo json_encode(['result' => true]);
exit();

label5008:

goto label4751;
goto label7576;

label5010:

echo json_encode(['result' => true]);
exit();

label5015:

goto label320;

label5016:

goto label310;

label5017:

echo json_encode(['result' => true]);
exit();

label5022:

goto label9889;

label5023:

goto label4774;

label5024:

$df9ce9bd5a53be95 = XUI::$rRequest['id'];

if ($c4584835207f1ecb == 'allow') {
	goto label14288;
}

if ($c4584835207f1ecb == 'block') {
	goto label7657;
}

if ($c4584835207f1ecb == 'allow_all') {
	goto label904;
}

if (!($c4584835207f1ecb == 'block_all')) {
	goto label4461;
}

goto label4452;

label5041:

goto label9274;

label5042:

if (e589A4Bf54a2DaD1('adv', 'folder_watch')) {
	goto label11587;
}

goto label11582;

label5049:

exit();

label5050:

echo json_encode(['result' => false]);
exit();
goto label1489;

label5056:

if (!isset($b89534efad61c2e2['iostat_info'])) {
	goto label5069;
}

$B9869413eae86beb['io'] = round($b89534efad61c2e2['iostat_info']['avg-cpu']['iowait'], 0);

label5069:

if (!isset($b89534efad61c2e2['total_disk_space'])) {
	goto label4463;
}

$B9869413eae86beb['fs'] = intval((($b89534efad61c2e2['total_disk_space'] - $b89534efad61c2e2['free_disk_space']) / $b89534efad61c2e2['total_disk_space']) * 100);
goto label4463;

label5085:

$b62d6460eb33ea07->query('SELECT `callSign`, `bcastLangs`, `name`, `picon` FROM `epg_api` WHERE LOWER(`name`) LIKE ? OR `callSign` = ? ORDER BY `name` ASC, `eng` DESC;', trim($A3aa81b5d3e27866) . '%', $B074f743fd302af8);

foreach ($b62d6460eb33ea07->get_rows() as $a5725df552d26b87) {
	goto label5121;

	label5100:

	$ea1e6ba580c86486 = $C7b14ffca13af0a3;

	label5101:

	goto label5178;

	label5103:

	$a2ebb817d88c810b = ['id' => $a5725df552d26b87['callSign'], 'text' => $a5725df552d26b87['name'], 'icon' => $a5725df552d26b87['picon'], 'lang' => isset($ebf287dbbc3574f3[0]) ? $ebf287dbbc3574f3[0] : '', 'type' => 1, 'epg_id' => 0];
	goto label5178;

	label5121:

	$ebf287dbbc3574f3 = json_decode($a5725df552d26b87['bcastLangs'], true);
	if ($B074f743fd302af8 && (strtolower($a5725df552d26b87['callSign']) == $B074f743fd302af8)) {
		goto label5103;
	}

	similar_text(strtolower($a5725df552d26b87['name']), trim(strtolower($A3aa81b5d3e27866)), $C7b14ffca13af0a3);
	if (!(($ea1e6ba580c86486 < $C7b14ffca13af0a3) && (90 <= $C7b14ffca13af0a3))) {
		goto label5101;
	}

	$a2ebb817d88c810b = ['id' => $a5725df552d26b87['callSign'], 'text' => $a5725df552d26b87['name'], 'icon' => $a5725df552d26b87['picon'], 'lang' => isset($ebf287dbbc3574f3[0]) ? $ebf287dbbc3574f3[0] : '', 'type' => 1, 'epg_id' => 0];
	goto label5100;

	label5178:

	goto label5180;

	label5180:
}

label5182:

if ($a2ebb817d88c810b) {
	goto label9404;
}

goto label9299;

label5185:

if (time() < $Caf4325605347834['exp_date']) {
	goto label5209;
}

$ba2d146bb5a55097['exp_date'] = date('Y-m-d', strtotime('+' . intval($ba2d146bb5a55097['official_duration']) . ' ' . $ba2d146bb5a55097['official_duration_in']));
goto label14635;

label5209:

$ba2d146bb5a55097['exp_date'] = date('Y-m-d', strtotime('+' . intval($ba2d146bb5a55097['official_duration']) . ' ' . $ba2d146bb5a55097['official_duration_in'], $Caf4325605347834['exp_date']));
goto label14635;

label5229:

$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_servers` WHERE `server_id` = ? AND `on_demand` = 0;', XUI::$rRequest['server_id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label5253;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
}

label5253:

goto label614;

label5254:

$b41097c951ee83d3 = new TMDB($f1dcaed925076e67['tmdb_api_key'], XUI::$rRequest['language']);

label5262:

$Abcb228699a7f743 = XUI::$rRequest['id'];

if (XUI::$rRequest['type'] == 'movie') {
	goto label11759;
}

if (!(XUI::$rRequest['type'] == 'series')) {
	goto label7231;
}

goto label7204;

label5277:

$B9869413eae86beb = [];
$dd3211a322da8474 = json_decode($E59d0debc75e7be8['override_packages'], true);
$b62d6460eb33ea07->query('SELECT `id`, `bouquets`, `official_credits` AS `cost_credits`, `official_duration`, `official_duration_in`, `max_connections`, `can_gen_mag`, `can_gen_e2`, `only_mag`, `only_e2` FROM `users_packages` WHERE `id` = ?;', XUI::$rRequest['package_id']);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label872;
}

goto label867;

label5296:

$b62d6460eb33ea07->query('SELECT `activity_id` AS `count` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;');

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label5306;
}

$Db81435e2146d166 = 0;
goto label11157;

label5306:

goto label11154;

label5307:

$dec36723d7be7c49 = confirmIDs($dec36723d7be7c49);

if (!(0 < count($dec36723d7be7c49))) {
	goto label483;
}

$b62d6460eb33ea07->query('SELECT `streams_episodes`.`stream_id`, `streams_series`.`id`, `streams_series`.`title` FROM `streams_episodes` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` WHERE `streams_episodes`.`stream_id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$ae2ffcbcd86503e6[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['title'];
}

goto label6972;

label5338:

exec('pgrep -u xui redis-server', $ed6449291d7f1a64);
if (!((0 < count($ed6449291d7f1a64)) && is_numeric($ed6449291d7f1a64[0]))) {
	goto label7137;
}

$C98e11437faf4199 = intval($ed6449291d7f1a64[0]);
shell_exec('kill -9 ' . $C98e11437faf4199);
goto label7137;

label5366:

goto label11108;

label5367:

foreach (XUI::D72c0f56211B6f7C(NULL, $C082ca9ed03f473c == -1 ? NULL : $C082ca9ed03f473c, $ee6d1fc5d801b43f, true, false, false) as $Fd10d59f87b19e71) {
	XUI::b0020C716Fdf67bb($Fd10d59f87b19e71);
}

goto label11108;

label5388:

echo json_encode(['result' => false]);
exit();
goto label731;

label5394:

eba75CeCAd9d3196(XUI::$rRequest['isp_id']);
goto label726;

label5400:

echo json_encode(['result' => true]);
exit();

label5405:

goto label8512;

label5406:

goto label15656;

label5407:

echo json_encode(['result' => false]);
exit();
goto label4378;

label5413:

$dec36723d7be7c49 = [];
goto label5229;

label5415:

foreach ($E7a3167b9fe69b2d as $E7cba019ce58e458 => $e02ff34f7d898a7b) {
	$B9869413eae86beb['items'][] = ['text' => $de1147c2d043d565[$E7cba019ce58e458], 'children' => $e02ff34f7d898a7b];
	$B9869413eae86beb['total_count'] += count($e02ff34f7d898a7b);
}

$d6c26cc20418eff5 = ['#' => 'Undefined Language'];
$b62d6460eb33ea07->query('SELECT `language`, `name` FROM `epg_languages`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$d6c26cc20418eff5[$Fb9da1713bff19ce['language']] = $Fb9da1713bff19ce['name'];
}

goto label8694;

label5446:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label5464;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
}

label5464:

if (!(0 < count($dec36723d7be7c49))) {
	goto label1455;
}

goto label1438;

label5472:

exit();

label5473:

goto label15536;

label5474:

if (E589A4bf54A2DAd1('adv', 'folder_watch_settings')) {
	goto label1715;
}

goto label1710;

label5481:

echo json_encode(['result' => true]);
exit();

label5486:

goto label12920;

label5487:

goto label14945;

label5488:

$D9d6a5d0b76a9aaf = [];

foreach ($Baba9277b00445b2['codecs'] as $A7d54b094ae83c95 => $a42d28fc2a08c3b1) {
	$D9d6a5d0b76a9aaf['streams'][] = $a42d28fc2a08c3b1;
}

$D9d6a5d0b76a9aaf['container'] = $Baba9277b00445b2['container'];

label5501:

goto label7248;

label5502:

goto label33;

label5503:

if (E589a4BF54A2DaD1('adv', 'backups')) {
	goto label1012;
}

echo json_encode(['result' => false]);
goto label1011;

label5514:

forceWatch($E2461a25530fd8a2['server_id'], $E2461a25530fd8a2['id']);
echo json_encode(['result' => true]);
exit();

label5525:

goto label4726;

label5526:

goto label13801;

label5527:

if (XUI::$rRequest['type'] == 'lines_activity') {
	goto label4669;
}

$E8d2f47901b176c3 = 'date';
goto label4668;

label5534:

$b62d6460eb33ea07->query('SELECT `callSign`, `name`, `picon` FROM `epg_api` WHERE (LOWER(`name`) LIKE ? OR `callSign` = ?) AND `bcastLangs` LIKE \'%"' . $rLanguage . '"%\' ORDER BY `name` ASC;', trim($A3aa81b5d3e27866) . '%', $B074f743fd302af8);

foreach ($b62d6460eb33ea07->get_rows() as $a5725df552d26b87) {
	goto label5553;

	label5551:

	goto label5613;

	label5553:
	if ($B074f743fd302af8 && (strtolower($a5725df552d26b87['callSign']) == $B074f743fd302af8)) {
		goto label5601;
	}

	similar_text(strtolower($a5725df552d26b87['name']), trim(strtolower($A3aa81b5d3e27866)), $C7b14ffca13af0a3);
	if (!(($ea1e6ba580c86486 < $C7b14ffca13af0a3) && (90 <= $C7b14ffca13af0a3))) {
		goto label5599;
	}

	$a2ebb817d88c810b = ['id' => $a5725df552d26b87['callSign'], 'text' => $a5725df552d26b87['name'], 'icon' => $a5725df552d26b87['picon'], 'lang' => $rLanguage, 'type' => 1, 'epg_id' => 0];
	$ea1e6ba580c86486 = $C7b14ffca13af0a3;
	goto label5599;

	label5599:

	goto label5611;

	label5601:

	$a2ebb817d88c810b = ['id' => $a5725df552d26b87['callSign'], 'text' => $a5725df552d26b87['name'], 'icon' => $a5725df552d26b87['picon'], 'lang' => $rLanguage, 'type' => 1, 'epg_id' => 0];

	label5611:

	goto label5551;

	label5613:
}

label5615:

if ($a2ebb817d88c810b) {
	goto label5182;
}

goto label5085;

label5618:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
exit();

label5625:

goto label14609;

label5626:

goto label12757;

label5627:

if (XUI::$rRequest['action'] == 'titlesync') {
	goto label1165;
}

if (XUI::$rRequest['action'] == 'force_epg') {
	goto label14723;
}

if (XUI::$rRequest['action'] == 'tmdb_search') {
	goto label7798;
}

if (XUI::$rRequest['action'] == 'tmdb') {
	goto label655;
}

if (XUI::$rRequest['action'] == 'listdir') {
	goto label12085;
}

goto label5950;

label5653:

if (e589a4BF54a2dAD1('adv', 'edit_stream')) {
	goto label5664;
}

echo json_encode(['result' => false]);
exit();

label5664:

$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream_id']);
goto label7969;

label5671:

foreach ($b62d6460eb33ea07->get_rows() as $fe93a43f53d92a4e) {
	goto label5763;

	label5677:

	goto label5779;

	label5679:

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label5696;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label5708;

	label5696:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';
	goto label5708;

	label5708:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label5723;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label5723:

	$B9869413eae86beb['Channels'][] = ['Id' => $fe93a43f53d92a4e['id'], 'DisplayName' => $fe93a43f53d92a4e['stream_display_name'], 'CategoryName' => $Dbcac322b4274e46, 'Archive' => $ba10d8a0b8348643, 'Image' => XUI::fcA722697178454B($fe93a43f53d92a4e['stream_icon']) ?: '', 'TvListings' => $Ecb33c10e149ff2a[$fe93a43f53d92a4e['id']] ?: [$e506580b84e6e5da]];
	goto label5677;

	label5747:

	$e506580b84e6e5da = $e32a66a2a62d634c;
	$e506580b84e6e5da['ChannelId'] = $fe93a43f53d92a4e['id'];
	$F05acfe4a87b8eb0 = json_decode($fe93a43f53d92a4e['category_id'], true);
	$F771d40e8cf51e59 = f769e3f0C739d1A6('live');
	goto label5679;

	label5763:
	if ((0 < $fe93a43f53d92a4e['tv_archive_duration']) && (0 < $fe93a43f53d92a4e['tv_archive_server_id'])) {
		goto label5775;
	}

	$ba10d8a0b8348643 = 0;
	goto label5747;

	label5775:

	$ba10d8a0b8348643 = $fe93a43f53d92a4e['tv_archive_duration'];
	goto label5747;

	label5779:
}

echo json_encode($B9869413eae86beb);
exit();

label5786:

goto label7051;

label5787:

echo json_encode(['result' => false]);
exit();

label5792:

goto label1643;
goto label4963;

label5794:

ini_set('memory_limit', '-1');
$ffb2d1a0985b1293 = json_decode(XUI::$rRequest['params'], true);

foreach ([] as $Bb672d1983256a93) {
	unset($ffb2d1a0985b1293[$Bb672d1983256a93]);
}

$ffb2d1a0985b1293['api_user_id'] = $E59d0debc75e7be8['id'];
goto label15257;

label5814:

if (XUI::$rRequest['action'] == 'kill_plex') {
	goto label9275;
}

if (XUI::$rRequest['action'] == 'folder') {
	goto label5042;
}

if (XUI::$rRequest['action'] == 'library') {
	goto label12360;
}

if (XUI::$rRequest['action'] == 'useragent') {
	goto label14870;
}

if (XUI::$rRequest['action'] == 'isp') {
	goto label7962;
}

goto label7732;

label5840:

if (e589A4BF54A2Dad1('adv', 'backups')) {
	goto label5851;
}

echo json_encode(['result' => false]);
exit();

label5851:

goto label7936;

label5852:

$b62d6460eb33ea07->query('SELECT `server_id`, COUNT(DISTINCT(`user_id`)) AS `count` FROM `lines_live` GROUP BY `server_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Bbf6067f0af4f59b[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['count']);
}

$b62d6460eb33ea07->query('SELECT `server_id`, COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `stream_status` <> 2 AND `type` = 1 GROUP BY `server_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$E32385d980d2da52[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['count']);
}

goto label7366;

label5891:

exit();

label5892:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label6440;
}

if ($c4584835207f1ecb == 'force') {
	goto label8652;
}

goto label8646;

label5902:

exit();

label5903:

goto label8474;

label5904:

if (E589a4Bf54a2dAd1('adv', 'folder_watch_settings')) {
	goto label9683;
}

goto label9678;

label5911:

goto label7609;

label5912:

if (e589a4bf54a2DAD1('adv', 'edit_server')) {
	goto label14157;
}

echo json_encode(['result' => false]);
exit();
goto label14157;

label5924:

$D577b2a7889a5fb6 = [json_decode($b41097c951ee83d3->getTVShow($f23658ae5c2456c3)->getJSON(), true)];

label5935:

goto label13239;

label5936:

goto label13228;

label5937:

goto label1088;

label5938:

if (e589a4BF54A2Dad1('adv', 'connection_logs')) {
	goto label1186;
}

echo json_encode(['result' => false]);
exit();
goto label1186;

label5950:

if (XUI::$rRequest['action'] == 'fingerprint') {
	goto label1225;
}

if (XUI::$rRequest['action'] == 'restart_all_services') {
	goto label7610;
}

if (XUI::$rRequest['action'] == 'restart_services') {
	goto label5912;
}

if (XUI::$rRequest['action'] == 'reboot_server') {
	goto label7623;
}

if (XUI::$rRequest['action'] == 'update_binaries') {
	goto label189;
}

goto label7770;

label5976:

$Fe53bcd53690fff4 = json_decode(XUI::$rRequest['server_id'], true);

label5983:

foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `custom_data`, `time`) VALUES(?, \'{"action": "update_binaries"}\', ?);', $Abcb228699a7f743, time());
}

goto label7617;

label5995:

goto label11123;

label5996:

if (e589A4bF54A2dAd1('adv', 'edit_user')) {
	goto label13269;
}

echo json_encode(['result' => false]);
exit();
goto label13269;

label6008:

$b62d6460eb33ea07->query('INSERT INTO `blocked_ips`(`ip`, `notes`, `date`) VALUES(?, \'MySQL Bruteforce\', ?);', XUI::$rRequest['ip'], time());
touch(FLOOD_TMP_PATH . 'block_' . XUI::$rRequest['ip']);
echo json_encode(['result' => true]);
exit();
goto label7961;

label6031:

goto label6049;

label6032:

foreach (XUI::d72c0f56211b6F7c(NULL, XUI::$rRequest['server_id'], NULL, true, false, false) as $Fd10d59f87b19e71) {
	XUI::B0020c716fDf67Bb($Fd10d59f87b19e71);
}

label6049:

goto label6222;

label6050:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `streams_series` WHERE `title` LIKE ?;', '%' . XUI::$rRequest['search'] . '%');
$B9869413eae86beb['total_count'] = $b62d6460eb33ea07->get_row()['count'];
$b62d6460eb33ea07->query('SELECT `id`, `title` FROM `streams_series` WHERE `title` LIKE ? ORDER BY `title` ASC LIMIT ' . (($D7209256c56b1469 - 1) * 100) . ', 100;', '%' . XUI::$rRequest['search'] . '%');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label7130;
}

goto label7117;

label6082:

goto label15742;

label6083:

sort($F6a625ab4f31c702);
$Ecb33c10e149ff2a = [];

if (!(0 < count($A5a4a57a12bb19b3))) {
	goto label15202;
}

$b62d6460eb33ea07->query('SELECT `streams`.`id`, `epg_data`.`id` AS `listing_id`, `streams`.`tv_archive_duration`, `tv_archive_server_id`, `epg_data`.`title`, `epg_data`.`description`, `epg_data`.`start`, `epg_data`.`end` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `streams`.`id` IN (' . implode(',', $A5a4a57a12bb19b3) . ') AND (`end` > ? AND `start` < ?) ORDER BY `id` ASC, `start` ASC;', $cef812722e0345be, $Cb3142d0e6e76fd5);
$a2ebb817d88c810b = $b62d6460eb33ea07->get_rows(true, 'id', false);
goto label15081;

label6112:

goto label13385;

label6113:

fc84E25737908CB5($ee6d1fc5d801b43f, $C082ca9ed03f473c, true);
echo json_encode(['result' => true]);
exit();
goto label13385;

label6124:

$de1147c2d043d565 = d47Af76340844E65(trim($A3aa81b5d3e27866));

foreach ($de1147c2d043d565 as $a5725df552d26b87) {
	similar_text(strtolower($a5725df552d26b87['name']), trim(strtolower($A3aa81b5d3e27866)), $C7b14ffca13af0a3);
	if (!(($ea1e6ba580c86486 < $C7b14ffca13af0a3) && (90 <= $C7b14ffca13af0a3))) {
		goto label6179;
	}

	$ebf287dbbc3574f3 = json_decode($a5725df552d26b87['bcastLangs'], true);
	$a2ebb817d88c810b = ['id' => $a5725df552d26b87['callSign'], 'text' => $a5725df552d26b87['name'], 'icon' => $a5725df552d26b87['picon'], 'lang' => isset($ebf287dbbc3574f3[0]) ? $ebf287dbbc3574f3[0] : '', 'type' => 1, 'epg_id' => 0];
	$ea1e6ba580c86486 = $C7b14ffca13af0a3;

	label6179:
}

label6181:

if ($a2ebb817d88c810b) {
	goto label4583;
}

goto label4577;

label6184:

$c4584835207f1ecb = XUI::$rRequest['sub'];
$e37d504062f6c301 = eF70a93E98Fb7Ce9(intval(XUI::$rRequest['e2_id']));

if ($c4584835207f1ecb == 'delete') {
	goto label11097;
}

if ($c4584835207f1ecb == 'enable') {
	goto label494;
}

if ($c4584835207f1ecb == 'disable') {
	goto label8765;
}

goto label11554;

label6206:

goto label6212;

label6207:

echo json_encode($D9d6a5d0b76a9aaf);
exit();

label6212:

goto label188;

label6213:

exit();

label6214:

goto label13366;

label6215:

if (e589A4Bf54A2dAd1('adv', 'episodes')) {
	goto label4216;
}

goto label4211;

label6222:

echo json_encode(['result' => true]);
exit();

label6227:

goto label12781;

label6228:

goto label12770;

label6229:

$b62d6460eb33ea07->query('SELECT * FROM `epg_data` WHERE `id` = ?;', XUI::$rRequest['id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label5050;
}

$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
$Fb9da1713bff19ce['date'] = date('H:i', $Fb9da1713bff19ce['start']) . ' - ' . date('H:i', $Fb9da1713bff19ce['end']);
echo json_encode(['result' => true, 'data' => $Fb9da1713bff19ce]);
goto label5049;

label6265:

goto label1370;

label6266:
if (!(!E589A4Bf54A2dad1('adv', 'add_server') && !e589A4BF54A2DAd1('adv', 'edit_server'))) {
	goto label12573;
}

echo json_encode(['result' => false]);
exit();
goto label12573;

label6287:
if (!(!E589A4bf54A2DaD1('adv', 'add_server') && !e589a4BF54a2DaD1('adv', 'edit_server'))) {
	goto label6307;
}

echo json_encode(['result' => false]);
exit();

label6307:

goto label15490;

label6308:

goto label11113;

label6309:

if (XUI::$rSettings['redis_handler']) {
	goto label5367;
}

if ($C082ca9ed03f473c == -1) {
	goto label14931;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `stream_id` = ? AND `server_id` = ?;', $ee6d1fc5d801b43f, $C082ca9ed03f473c);
goto label14930;

label6322:

include 'functions.php';
session_write_close();

if (PHP_ERRORS) {
	goto label14174;
}
if (!(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest'))) {
	goto label14174;
}

exit();
goto label14174;

label6343:

if (XUI::$rRequest['action'] == 'bouquet') {
	goto label11595;
}

if (XUI::$rRequest['action'] == 'category') {
	goto label11918;
}

if (XUI::$rRequest['action'] == 'get_package') {
	goto label5277;
}

if (XUI::$rRequest['action'] == 'get_package_trial') {
	goto label13624;
}

if (XUI::$rRequest['action'] == 'graph_stats') {
	goto label9095;
}

goto label4223;

label6369:

$B9869413eae86beb = [
	'cpu'                   => 0,
	'mem'                   => 0,
	'io'                    => 0,
	'fs'                    => 0,
	'uptime'                => '--',
	'bytes_sent'            => 0,
	'bytes_received'        => 0,
	'open_connections'      => 0,
	'total_connections'     => 0,
	'online_users'          => 0,
	'total_users'           => 0,
	'total_streams'         => 0,
	'total_running_streams' => 0,
	'offline_streams'       => 0,
	'requests_per_second'   => 0,
	'servers'               => []
];

if (XUI::$rSettings['redis_handler']) {
	goto label11619;
}

$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label11618;
}

$B9869413eae86beb['total_users'] = $b62d6460eb33ea07->num_rows();
goto label11618;

label6388:

if (e589a4bf54a2dAd1('adv', 'folder_watch_output')) {
	goto label6399;
}

echo json_encode(['result' => false]);
exit();

label6399:

$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label13808;

label6403:

goto label1147;

label6404:
if (!(!e589a4Bf54a2DAD1('adv', 'edit_bouquet') && !e589A4BF54A2dAD1('adv', 'add_bouquet'))) {
	goto label6881;
}

echo json_encode(['result' => false]);
goto label6880;

label6424:

if (isset($ba2d146bb5a55097['user'])) {
	goto label6433;
}

$b62d6460eb33ea07->query('SELECT `lines_live`.`activity_id`, `lines_live`.`uuid`, `lines_live`.`user_id`, `lines_live`.`server_id`, `lines`.`username` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `stream_id` = ?;', $ba2d146bb5a55097['id']);
goto label11167;

label6433:

$b62d6460eb33ea07->query('SELECT `lines_live`.`activity_id`, `lines_live`.`uuid`, `lines_live`.`user_id`, `lines_live`.`server_id`, `lines`.`username` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `user_id` = ?;', $ba2d146bb5a55097['id']);
goto label11167;

label6439:

goto label5041;

label6440:

ED770984CfB04Dfa(XUI::$rRequest['folder_id']);
echo json_encode(['result' => true]);
exit();
goto label5041;

label6451:

$Bf3377811d8e2b3a = [
	'cpu'    => [],
	'memory' => [],
	'users'  => [],
	'io'     => [],
	'input'  => [],
	'output' => [],
	'dates'  => [NULL, NULL]
];

foreach (array_keys($d14a20b240a88fb2) as $Ab13f2545dd3df14) {
	goto label6637;

	label6459:

	$D7adcae70b547e41 = 0;
	$fd8b41bb9f75a3dd = 0;
	$Ea5e7c5779553728 = 0;
	$ce95ea5d02ef202d = 0;
	$E32385d980d2da52 = 0;
	goto label6644;

	label6466:

	$Db81435e2146d166 = $d14a20b240a88fb2[$Ab13f2545dd3df14][XUI::$rRequest['server_id']]['users'];

	label6472:

	foreach ($d14a20b240a88fb2[$Ab13f2545dd3df14] as $C082ca9ed03f473c => $ba2d146bb5a55097) {
		goto label6499;

		label6479:

		$D7adcae70b547e41++;

		label6481:

		$Dc46e3cd1c1a7767 += $ba2d146bb5a55097['total_mem_used_percent'];
		$e6980daf767ef6b1++;
		$ce95ea5d02ef202d += $ba2d146bb5a55097['connections'];
		goto label6490;

		label6490:

		$E32385d980d2da52 += $ba2d146bb5a55097['streams'];
		$fd8b41bb9f75a3dd += $ba2d146bb5a55097['bytes_received'];
		$Ea5e7c5779553728 += $ba2d146bb5a55097['bytes_sent'];
		goto label6520;

		label6499:

		$Ad267dd8062020b8 += $ba2d146bb5a55097['cpu'];
		$F3c3c26a19bf9404++;
		$Bf162db9680be147 = json_decode($ba2d146bb5a55097['iostat_info'], true);

		if (!$Bf162db9680be147) {
			goto label6481;
		}

		$ae5dcab4758f75ef += $Bf162db9680be147['avg-cpu']['iowait'];
		goto label6479;

		label6520:
	}
	if (!(!$Bf3377811d8e2b3a['dates'][0] || (($Ab13f2545dd3df14 * 1000) < $Bf3377811d8e2b3a['dates'][0]))) {
		goto label6571;
	}

	goto label6567;

	label6537:

	$Bf3377811d8e2b3a['users'][] = [$Ab13f2545dd3df14 * 1000, $Db81435e2146d166];
	$Bf3377811d8e2b3a['input'][] = [$Ab13f2545dd3df14 * 1000, round($fd8b41bb9f75a3dd / 125000, 0)];
	$Bf3377811d8e2b3a['output'][] = [$Ab13f2545dd3df14 * 1000, round($Ea5e7c5779553728 / 125000, 0)];
	goto label6659;

	label6567:

	$Bf3377811d8e2b3a['dates'][0] = $Ab13f2545dd3df14 * 1000;

	label6571:
	if (!(!$Bf3377811d8e2b3a['dates'][1] || ($Bf3377811d8e2b3a['dates'][1] < ($Ab13f2545dd3df14 * 1000)))) {
		goto label6588;
	}

	$Bf3377811d8e2b3a['dates'][1] = $Ab13f2545dd3df14 * 1000;

	label6588:

	goto label6590;

	label6590:

	$Bf3377811d8e2b3a['cpu'][] = [$Ab13f2545dd3df14 * 1000, round($Ad267dd8062020b8 / $F3c3c26a19bf9404, 2)];
	$Bf3377811d8e2b3a['memory'][] = [$Ab13f2545dd3df14 * 1000, round($Dc46e3cd1c1a7767 / $e6980daf767ef6b1, 2)];
	$Bf3377811d8e2b3a['io'][] = [$Ab13f2545dd3df14 * 1000, round($ae5dcab4758f75ef / $D7adcae70b547e41, 2)];
	$Bf3377811d8e2b3a['connections'][] = [$Ab13f2545dd3df14 * 1000, $ce95ea5d02ef202d];
	$Bf3377811d8e2b3a['streams'][] = [$Ab13f2545dd3df14 * 1000, $E32385d980d2da52];
	goto label6537;

	label6637:

	$Ad267dd8062020b8 = 0;
	$F3c3c26a19bf9404 = 0;
	$Dc46e3cd1c1a7767 = 0;
	$e6980daf767ef6b1 = 0;
	$ae5dcab4758f75ef = 0;
	goto label6459;

	label6644:

	$Db81435e2146d166 = 0;

	if (isset(XUI::$rRequest['server_id'])) {
		goto label6657;
	}

	$Db81435e2146d166 = $d14a20b240a88fb2[$Ab13f2545dd3df14][SERVER_ID]['total_users'];
	goto label6472;

	label6657:

	goto label6466;

	label6659:
}

goto label13616;

label6662:

killPID($Fb9da1713bff19ce['server_id'], $Fb9da1713bff19ce['pid']);

label6668:

$b62d6460eb33ea07->query('DELETE FROM `queue` WHERE `id` = ?;', XUI::$rRequest['id']);
echo json_encode(['result' => true]);
exit();
goto label13216;

label6680:

$b62d6460eb33ea07->query('SELECT `member_id`, COUNT(*) AS `count` FROM `lines` WHERE `member_id` IN (' . implode(',', $ec80784a08a705f6) . ') GROUP BY `member_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f97dc62b89e38d3f[$Fb9da1713bff19ce['member_id']] = $Fb9da1713bff19ce['count'];
}

label6699:

goto label9771;

label6700:

goto label6706;

label6701:

$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE UNIX_TIMESTAMP(`dateadded`) >= ? AND UNIX_TIMESTAMP(`dateadded`) <= ?;', $F56066ad7b074468, $b120584763e3d117);

label6706:

goto label5526;

label6707:

$F48d5724f3b4ec96 = BIN_PATH . 'install/' . $C082ca9ed03f473c . '.json';

if (file_exists($F48d5724f3b4ec96)) {
	goto label1666;
}

echo json_encode(['result' => false]);
exit();
goto label1665;

label6723:

exit();

label6724:

$Ea248c6503c74cd4 = XUI::$rRequest['timezone'] ?: 'Europe/London';
date_default_timezone_set($Ea248c6503c74cd4);

if (!isset(XUI::$rRequest['id'])) {
	goto label5050;
}

goto label6229;

label6738:

exit();

label6739:

goto label8043;

label6740:

dd81518D00a2dd90(XUI::$rRequest['mag_id'], false, false, true);
goto label8034;

label6749:

$b62d6460eb33ea07->query('DELETE FROM ' . c79e45B9106CF57B(XUI::$rRequest['type']) . ' WHERE `' . $E8d2f47901b176c3 . '` <= ?;', $b120584763e3d117);

label6762:

goto label15724;

label6763:

$b62d6460eb33ea07->query('DELETE FROM ' . C79E45B9106CF57B(XUI::$rRequest['type']) . ' WHERE `' . $E8d2f47901b176c3 . '` >= ?;', $F56066ad7b074468);
goto label15724;

label6777:

foreach (XUI::D72c0F56211b6F7C($A5672c717a6d107d['user_id'], NULL, NULL, true, false, false) as $Fd10d59f87b19e71) {
	XUI::B0020C716FdF67BB($Fd10d59f87b19e71);
}

label6793:

echo json_encode(['result' => true]);
goto label6738;

label6798:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `id` FROM `users` WHERE `username` LIKE ?;', '%' . XUI::$rRequest['search'] . '%');
$B9869413eae86beb['total_count'] = $b62d6460eb33ea07->get_row()['id'];
$b62d6460eb33ea07->query('SELECT `id`, `username` FROM `users` WHERE `username` LIKE ? ORDER BY `username` ASC LIMIT ' . (($D7209256c56b1469 - 1) * 100) . ', 100;', '%' . XUI::$rRequest['search'] . '%');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label9133;
}

goto label9120;

label6830:

$B9869413eae86beb = [];
$b62d6460eb33ea07->query('SELECT `bouquets`, `trial_credits` AS `cost_credits`, `trial_duration`, `trial_duration_in`, `max_connections`, `can_gen_mag`, `can_gen_e2`, `only_mag`, `only_e2` FROM `users_packages` WHERE `id` = ?;', XUI::$rRequest['package_id']);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label200;
}

echo json_encode(['result' => false]);
goto label11299;
goto label200;

label6848:
if (!((0 < count($C98e11437faf4199)) && is_numeric($C98e11437faf4199[0]))) {
	goto label6879;
}

$C98e11437faf4199 = intval($C98e11437faf4199[0]);
shell_exec('kill -9 ' . $C98e11437faf4199);
shell_exec(PHP_BIN . ' ' . CLI_PATH . 'watchdog.php > /dev/null 2>/dev/null &');

label6879:

goto label14511;

label6880:

exit();

label6881:

$B9869413eae86beb = [
	'streams' => [],
	'movies'  => [],
	'series'  => [],
	'radios'  => [],
	'result'  => true
];

if (!isset(XUI::$rRequest['data']['stream'])) {
	goto label15001;
}

foreach (XUI::$rRequest['data']['stream'] as $ee6d1fc5d801b43f) {
	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `type` FROM `streams` WHERE `id` = ? AND `type` IN (1,3);', $ee6d1fc5d801b43f);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label6910;
	}

	$ba2d146bb5a55097 = $b62d6460eb33ea07->get_row();
	$B9869413eae86beb['streams'][] = $ba2d146bb5a55097;

	label6910:
}

goto label15001;

label6913:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
}

label6925:

if (!(0 < count($dec36723d7be7c49))) {
	goto label7667;
}

$D577b2a7889a5fb6 = d5612f049a8056A5([
	'action'     => 'stream',
	'sub'        => 'start',
	'stream_ids' => array_values($dec36723d7be7c49),
	'servers'    => [intval(XUI::$rRequest['server_id'])]
]);
goto label7667;

label6950:

$ba2d146bb5a55097 = json_decode(XUI::$rRequest['data'], true);

if (!is_numeric($ba2d146bb5a55097['id'])) {
	goto label6971;
}

$Fe53bcd53690fff4 = [intval($ba2d146bb5a55097['id'])];
goto label13658;

label6971:

goto label13652;

label6972:

$b62d6460eb33ea07->query('SELECT * FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']]++;

	if ($Bcf70cba56392975[$Fb9da1713bff19ce['server_id']]['server_online']) {
		goto label6999;
	}

	$Fb9da1713bff19ce['priority'] = 0;
	goto label7007;

	label6999:

	$Fb9da1713bff19ce['priority'] = (0 < $Fb9da1713bff19ce['pid'] ? 1 : 0);

	label7007:

	$dc8696899854d891[$Fb9da1713bff19ce['stream_id']][] = $Fb9da1713bff19ce;
}

foreach (array_keys($dc8696899854d891) as $ee6d1fc5d801b43f) {
	array_multisort(array_column($C815cfd0505ca88e[$ee6d1fc5d801b43f], 'priority'), SORT_DESC, $C815cfd0505ca88e[$ee6d1fc5d801b43f]);
}

goto label11450;

label7033:

$C6671ac66a4f1c57 = ['action' => 'force_stream', 'stream_id' => $ee6d1fc5d801b43f, 'force_id' => $c4620a212189e773];
echo json_encode(bb4898D08A4EE099($Bccd07953f314962, $C6671ac66a4f1c57));
exit();

label7046:

echo json_encode(['result' => false]);
goto label13880;

label7051:

goto label12405;

label7052:

XUI::submitPanelLogs();
echo json_encode(['result' => true]);
exit();
goto label12405;

label7060:

$D577b2a7889a5fb6 = json_decode($b41097c951ee83d3->getSeason($f23658ae5c2456c3, intval(XUI::$rRequest['season']))->getJSON(), true);
if (!(isset($D577b2a7889a5fb6['tvshow_id']) && ($D577b2a7889a5fb6['tvshow_id'] == 0))) {
	goto label7085;
}

$D577b2a7889a5fb6 = NULL;

label7085:

goto label5935;
goto label5924;

label7087:

if (isset(XUI::$rRequest['cookie'])) {
	goto label7093;
}

$Cc08b488984ab476 = '';
goto label7494;

label7093:

$Cc08b488984ab476 = ' -cookies ' . escapeshellarg(XUI::aEFea986184CA49E(XUI::$rRequest['cookie']));
goto label7494;

label7104:

echo json_encode(['result' => false]);
exit();
goto label12486;

label7110:

$b62d6460eb33ea07->query('DELETE FROM `mag_events` WHERE `id` = ?;', XUI::$rRequest['mag_id']);
goto label12481;

label7117:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B9869413eae86beb['items'][] = ['id' => $Fb9da1713bff19ce['id'], 'text' => $Fb9da1713bff19ce['title']];
}

label7130:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
goto label13365;

label7137:

shell_exec(XUI_HOME . 'bin/redis/redis-server ' . XUI_HOME . '/bin/redis/redis.conf > /dev/null 2>/dev/null &');
sleep(1);
exec('pgrep -U xui | xargs ps | grep signals | awk \'{print $1}\'', $C98e11437faf4199);
if (!((0 < count($C98e11437faf4199)) && is_numeric($C98e11437faf4199[0]))) {
	goto label8615;
}

goto label8597;

label7166:

goto label1139;

label7167:

$b62d6460eb33ea07->query('UPDATE `tickets` SET `status` = 0 WHERE `id` = ?;', XUI::$rRequest['ticket_id']);
echo json_encode(['result' => true]);
goto label1138;

label7178:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label1462;
}

echo json_encode(['result' => false]);
exit();
goto label1461;

label7190:

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'epg.php > /dev/null 2>/dev/null &');
echo json_encode(['result' => true]);
exit();

label7203:

goto label1164;

label7204:

$d02ef9ae10a41939 = $b41097c951ee83d3->getTVShow($Abcb228699a7f743);
$D577b2a7889a5fb6 = json_decode($d02ef9ae10a41939->getJSON(), true);
$D577b2a7889a5fb6['trailer'] = DdA34be3370cDFB2($Abcb228699a7f743, !empty(XUI::$rRequest['language']) ? XUI::$rRequest['language'] : $f1dcaed925076e67['tmdb_language']);

label7231:

goto label11774;
goto label11759;

label7233:

echo json_encode(['result' => false]);
exit();

label7238:

$c4584835207f1ecb = XUI::$rRequest['sub'];
$b62d6460eb33ea07->query('SELECT * FROM `queue` WHERE `id` = ?;', XUI::$rRequest['id']);
goto label9656;

label7248:

if ($D9d6a5d0b76a9aaf) {
	goto label7280;
}

$D9d6a5d0b76a9aaf = probeSource($C082ca9ed03f473c, $A7ca171405b19571, XUI::$rRequest['user_agent'] ?: NULL, XUI::$rRequest['http_proxy'] ?: NULL, XUI::$rRequest['cookies'] ?: NULL, XUI::$rRequest['headers'] ?: NULL)['data'];
$D9d6a5d0b76a9aaf['container'] = $D9d6a5d0b76a9aaf['format']['format_name'];

label7280:

goto label1538;

label7281:

$ba2d146bb5a55097 = ['action' => 'report', 'id' => intval(XUI::$rRequest['id']), 'type' => XUI::$rRequest['type'], 'report' => XUI::$rRequest['report']];
$Fff7d74ee020d096 = [
	'http' => ['header' => 'Content-type: application/x-www-form-urlencoded' . "\r\n", 'method' => 'POST', 'content' => http_build_query($ba2d146bb5a55097)]
];
$b46218714d674656 = stream_context_create($Fff7d74ee020d096);
$D577b2a7889a5fb6 = file_get_contents($f1dcaed925076e67['epg_api_url'], false, $b46218714d674656);
echo json_encode(['result' => true]);
goto label1078;

label7319:

echo json_encode(['result' => true, 'data' => $e02ff34f7d898a7b]);
exit();

label7326:

goto label6265;

label7327:

XUI::$rServers = XUI::f76008F8Dfe1898C(true);
$C082ca9ed03f473c = intval(XUI::$rRequest['server_id']);
$F48d5724f3b4ec96 = BIN_PATH . 'install/' . $C082ca9ed03f473c . '.install';

if (file_exists($F48d5724f3b4ec96)) {
	goto label943;
}

goto label937;

label7349:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label9808;
}

if ($c4584835207f1ecb == 'enable') {
	goto label14119;
}

if ($c4584835207f1ecb == 'disable') {
	goto label1418;
}

echo json_encode(['result' => false]);
goto label1416;

label7366:

$b62d6460eb33ea07->query('SELECT `server_id`, COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `type` = 1 AND (`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0) GROUP BY `server_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$ad5262de2430eda4[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['count']);
}

$b62d6460eb33ea07->query('SELECT `server_id`, COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `pid` > 0 AND `type` = 1 GROUP BY `server_id`;');
goto label8807;

label7389:

if (!(1000 <= $fb361b5f838abd3c['fps'])) {
	goto label7401;
}

$fb361b5f838abd3c['fps'] = intval($fb361b5f838abd3c['fps'] / 1000);

label7401:

$c7b8b5438b915f8f = $fb361b5f838abd3c['fps'] . '&nbsp;FPS';

label7404:

goto label12588;

label7405:

$Ec379295dc7029e6 = $Bcf70cba56392975[XUI::$rRequest['server_id']];

label7409:

$Bf3377811d8e2b3a = ['open_connections' => 0, 'total_running_streams' => 0, 'online_users' => 0, 'offline_streams' => 0, 'gpu_info' => json_decode($Ec379295dc7029e6['gpu_info'], true), 'watchdog' => json_decode($Ec379295dc7029e6['watchdog_data'], true)];
$Bf3377811d8e2b3a['open_connections'] = $Ec379295dc7029e6['connections'] ?: 0;
goto label4119;

label7432:

echo json_encode(['result' => false]);
exit();

label7437:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	if (!$Ec379295dc7029e6['server_online']) {
		goto label7452;
	}

	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `custom_data`, `time`) VALUES(?, \'{"action": "restart_services"}\', ?);', $Ec379295dc7029e6['id'], time());

	label7452:
}

goto label1219;

label7455:

goto label7487;

label7456:

foreach (XUI::$rServers[$C082ca9ed03f473c]['parent_id'] as $A3206fae422859ef) {
	foreach (XUI::D72c0F56211b6f7c(NULL, $A3206fae422859ef, NULL, true, false, false) as $Fd10d59f87b19e71) {
		if (!($Fd10d59f87b19e71['proxy_id'] == XUI::$rRequest['server_id'])) {
			goto label7483;
		}

		XUI::b0020C716fDF67BB($Fd10d59f87b19e71);

		label7483:
	}
}

label7487:

goto label9097;

label7488:

$a2ebb817d88c810b = NULL;
$ea1e6ba580c86486 = 0;

if (!$rLanguage) {
	goto label5615;
}

goto label5534;

label7494:

if (!(0 < strlen($A7ca171405b19571))) {
	goto label14447;
}

$d5faa5f11beba133 = '<table style=\'width: 300px;\' class=\'table-data\' align=\'center\'><tbody><tr><td colspan=\'4\'>Stream probe failed!</td></tr></tbody></table>';
$D9d6a5d0b76a9aaf = NULL;
goto label1232;

label7504:

if (XUI::$rRequest['action'] == 'serieslist') {
	goto label6215;
}

if (XUI::$rRequest['action'] == 'reguserlist') {
	goto label4389;
}

if (XUI::$rRequest['action'] == 'userlist') {
	goto label15710;
}

if (XUI::$rRequest['action'] == 'streamlist') {
	goto label14610;
}

if (XUI::$rRequest['action'] == 'adaptivelist') {
	goto label5626;
}

goto label5627;

label7530:

if (XUI::$rSettings['redis_handler']) {
	goto label6777;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` = ?;', $A5672c717a6d107d['user_id']);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::B0020C716fdf67Bb($Fb9da1713bff19ce);
}

goto label6793;
goto label6777;

label7550:

deleteProvider(XUI::$rRequest['id']);
echo json_encode(['result' => true]);
exit();

label7560:

goto label9812;

label7561:

if (E589A4Bf54a2dAD1('adv', 'block_isps')) {
	goto label7572;
}

echo json_encode(['result' => false]);
exit();

label7572:

$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label5024;

label7576:

if (e589a4bf54A2daD1('adv', 'edit_reguser')) {
	goto label7587;
}

echo json_encode(['result' => false]);
exit();

label7587:

goto label7349;

label7588:

if (XUI::$rSettings['redis_handler']) {
	goto label7456;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `proxy_id` = ?;', XUI::$rRequest['server_id']);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::b0020C716FDf67Bb($Fb9da1713bff19ce);
}

goto label7455;

label7608:

exit();

label7609:

goto label1224;

label7610:

if (e589A4Bf54A2DAD1('adv', 'servers')) {
	goto label7437;
}

goto label7432;

label7617:

echo json_encode(['result' => true]);
exit();

label7622:

goto label9756;

label7623:

goto label13899;

label7624:

$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream_id']);
$C082ca9ed03f473c = intval(XUI::$rRequest['server_id']);
$c4584835207f1ecb = XUI::$rRequest['sub'];

if (in_array($c4584835207f1ecb, ['start', 'stop'])) {
	goto label11475;
}

if ($c4584835207f1ecb == 'delete') {
	goto label13592;
}

goto label13867;

label7649:

exit();

label7650:

goto label11757;

label7651:

$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;', $f7107e3a92443147);
goto label11749;

label7656:

goto label14287;

label7657:

$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 1 WHERE `id` = ?;', $df9ce9bd5a53be95);
echo json_encode(['result' => true]);
exit();
goto label14287;

label7667:

echo json_encode(['result' => true]);
exit();

label7672:

goto label6227;
goto label12716;

label7674:

goto label12871;

label7675:

$b62d6460eb33ea07->query('UPDATE `servers` SET `enabled` = 1 WHERE `id` = ?;', XUI::$rRequest['server_id']);
echo json_encode(['result' => true]);
goto label12870;

label7686:

exit();

label7687:

$b62d6460eb33ea07->query('UPDATE `settings` SET `redis_handler` = 1;');

if (!file_exists(CACHE_TMP_PATH . 'settings')) {
	goto label5338;
}

unlink(CACHE_TMP_PATH . 'settings');
goto label5338;

label7704:

$b62d6460eb33ea07->query('UPDATE `servers` SET `enable_proxy` = 1 WHERE `id` = ?;', XUI::$rRequest['server_id']);
echo json_encode(['result' => true]);
exit();

label7715:

goto label500;

label7716:

echo json_encode(['result' => true, 'data' => $Bf3377811d8e2b3a, 'netspeed' => intval($Ec379295dc7029e6['network_guaranteed_speed']) ?: 1000]);
exit();

label7730:

goto label8146;

label7731:

goto label7561;

label7732:

if (XUI::$rRequest['action'] == 'mysql_syslog') {
	goto label1021;
}

if (XUI::$rRequest['action'] == 'ip') {
	goto label485;
}

if (XUI::$rRequest['action'] == 'rtmp_ip') {
	goto label999;
}

if (XUI::$rRequest['action'] == 'watch_output') {
	goto label11291;
}

if (XUI::$rRequest['action'] == 'server') {
	goto label14601;
}

goto label1390;

label7758:

goto label1033;

label7759:

e6397083B98cA4B5(XUI::$rRequest['profile_id']);
echo json_encode(['result' => true]);
exit();
goto label1033;

label7770:

if (XUI::$rRequest['action'] == 'probe_stream') {
	goto label11626;
}

if (XUI::$rRequest['action'] == 'check_stream') {
	goto label12607;
}

if (XUI::$rRequest['action'] == 'clear_logs') {
	goto label1740;
}

if (XUI::$rRequest['action'] == 'backup') {
	goto label7844;
}

if (XUI::$rRequest['action'] == 'send_event') {
	goto label11201;
}

goto label4093;

label7796:

exit();

label7797:

goto label1231;

label7798:
if (!(!E589A4bf54A2DAD1('adv', 'add_series') && !E589a4bf54A2dAd1('adv', 'edit_series') && !E589a4BF54A2dad1('adv', 'add_movie') && !e589a4bF54A2dAD1('adv', 'edit_movie') && !E589a4bf54A2dAd1('adv', 'add_episode') && !E589A4bF54a2dad1('adv', 'edit_episode'))) {
	goto label299;
}

goto label294;

label7842:

exit();

label7843:

goto label1739;

label7844:

if (E589a4bF54A2dad1('adv', 'database')) {
	goto label1131;
}

goto label1126;

label7851:

header('Content-Disposition: attachment; filename=report_' . preg_replace('/[^A-Za-z0-9 ]/', '', $ffb2d1a0985b1293['id']) . '_' . date('YmdHis') . '.csv');

if (!(0 < count($ba2d146bb5a55097['data'] ?: []))) {
	goto label7885;
}

echo file_get_contents(convertToCSV($ba2d146bb5a55097['data']));

label7885:

exit();
goto label5502;

label7887:

$B074f743fd302af8 = (!empty(XUI::$rRequest['id']) ? strtolower(XUI::$rRequest['id']) : NULL);

if (stripos($b7319702635da556, '#') !== false) {
	goto label7909;
}

$A3aa81b5d3e27866 = $b7319702635da556;
goto label13016;

label7909:

goto label13004;

label7910:

if (XUI::$rRequest['action'] == 'clear_redis') {
	goto label5503;
}

if (XUI::$rRequest['action'] == 'report') {
	goto label15220;
}

if (XUI::$rRequest['action'] == 'decrypt_text') {
	goto label4054;
}

if (XUI::$rRequest['action'] == 'get_episode_ids') {
	goto label12406;
}

if (XUI::$rRequest['action'] == 'send_panel_logs') {
	goto label7052;
}

goto label13931;

label7936:

$b62d6460eb33ea07->query('UPDATE `settings` SET `enable_cache` = 1;');

if (!file_exists(CACHE_TMP_PATH . 'settings')) {
	goto label7952;
}

unlink(CACHE_TMP_PATH . 'settings');

label7952:

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php');
goto label12057;

label7961:

goto label731;

label7962:

if (e589a4BF54A2dad1('adv', 'block_isps')) {
	goto label4655;
}

goto label4650;

label7969:

$C082ca9ed03f473c = intval(XUI::$rRequest['server_id']);
$c4584835207f1ecb = XUI::$rRequest['sub'];

if (in_array($c4584835207f1ecb, ['start', 'stop', 'restart'])) {
	goto label13882;
}

if ($c4584835207f1ecb == 'force') {
	goto label12837;
}

if ($c4584835207f1ecb == 'delete') {
	goto label1723;
}

goto label12451;

label7991:

if (E589a4bf54A2daD1('adv', 'index')) {
	goto label8002;
}

echo json_encode(['result' => false]);
exit();

label8002:

$Bcf70cba56392975 = XUI::f76008F8Dfe1898C(true);
goto label6369;

label8007:

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', array_unique($b2bece9f771275c2)) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Af1444cd652ebf84[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['stream_display_name'];
}

label8029:

$F771d40e8cf51e59 = F769e3f0c739D1a6(NULL);
goto label1804;

label8034:

echo json_encode(['result' => true, 'line_id' => $A5672c717a6d107d['user']['id']]);
exit();

label8043:

goto label11733;

label8044:

goto label11719;

label8045:

$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label8058;
}

$B9869413eae86beb['total_users'] = $b62d6460eb33ea07->num_rows();

label8058:

goto label8659;

label8059:
if (!(!E589a4bF54a2dad1('adv', 'edit_e2') && !E589A4bf54a2dAD1('adv', 'add_e2') && !E589A4bf54A2daD1('adv', 'add_mag') && !e589a4BF54a2dAD1('adv', 'edit_mag'))) {
	goto label8093;
}

echo json_encode(['result' => false]);
exit();

label8093:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];
goto label15590;

label8095:

if ($c4584835207f1ecb == 'enable') {
	goto label818;
}

if ($c4584835207f1ecb == 'disable') {
	goto label12419;
}

if ($c4584835207f1ecb == 'ban') {
	goto label9622;
}

if ($c4584835207f1ecb == 'unban') {
	goto label8044;
}

if ($c4584835207f1ecb == 'convert') {
	goto label6740;
}

goto label4550;

label8111:

$Eace76317d47fe26 = [];

if (XUI::$rSettings['parse_type'] == 'guessit') {
	goto label9154;
}

foreach ($ba2d146bb5a55097 as $Edde4f026eed2148 => $b7319702635da556) {
	$Eace76317d47fe26[$Edde4f026eed2148] = pathinfo(str_replace('-', '_', $b7319702635da556))['filename'];
}

$C6671ac66a4f1c57 = '/usr/bin/python3 ' . XUI_HOME . 'includes/python/release.py ' . escapeshellarg(json_encode($Eace76317d47fe26));
goto label9153;

label8145:

exit();

label8146:

goto label1436;

label8147:

goto label4975;

label8148:

$c299da94f66c1d36 = array_slice($c299da94f66c1d36, 0, intval(XUI::$rSettings['search_items']) ?: 50);
$b2bece9f771275c2 = $d1ea49ac108e66ab = $C98047839de3d474 = $E153b6005aa003ab = $ec80784a08a705f6 = $d611c60168c266f6 = $dec36723d7be7c49 = [];

foreach ($c299da94f66c1d36 as $B4a603c2a57d3acf) {
	goto label8182;

	label8172:

	$b2bece9f771275c2[] = intval($Ef5f85e05aa7ab27['stream_id']);

	label8178:

	goto label8319;

	label8180:

	goto label8287;

	label8182:

	if ($B4a603c2a57d3acf['table'] == 'streams') {
		goto label8340;
	}

	if ($B4a603c2a57d3acf['table'] == 'streams_series') {
		goto label8321;
	}

	if ($B4a603c2a57d3acf['table'] == 'users') {
		goto label8180;
	}

	if ($B4a603c2a57d3acf['table'] == 'lines') {
		goto label8216;
	}
	if (!(($B4a603c2a57d3acf['table'] == 'mag_devices') || ($B4a603c2a57d3acf['table'] == 'enigma2_devices'))) {
		goto label8363;
	}

	goto label8342;

	label8214:

	goto label8178;

	label8216:

	if (!(0 < intval($B4a603c2a57d3acf['id']))) {
		goto label8231;
	}

	$C98047839de3d474[] = intval($B4a603c2a57d3acf['id']);

	label8231:

	goto label8250;

	label8233:

	if (!(0 < intval($B4a603c2a57d3acf['id']))) {
		goto label8248;
	}

	$dec36723d7be7c49[] = intval($B4a603c2a57d3acf['id']);

	label8248:

	goto label8365;

	label8250:

	if (!(0 < intval($B4a603c2a57d3acf['member_id']))) {
		goto label8265;
	}

	$E153b6005aa003ab[] = intval($B4a603c2a57d3acf['member_id']);

	label8265:

	$Ef5f85e05aa7ab27 = json_decode($B4a603c2a57d3acf['last_activity_array'], true);
	if (!(is_array($Ef5f85e05aa7ab27) && (0 < intval($Ef5f85e05aa7ab27['stream_id'])))) {
		goto label8178;
	}

	goto label8172;

	label8287:

	if (!(0 < intval($B4a603c2a57d3acf['id']))) {
		goto label8302;
	}

	$ec80784a08a705f6[] = intval($B4a603c2a57d3acf['id']);

	label8302:

	if (!(0 < intval($B4a603c2a57d3acf['owner_id']))) {
		goto label8319;
	}

	$E153b6005aa003ab[] = intval($B4a603c2a57d3acf['owner_id']);
	goto label8319;

	label8319:

	goto label8338;

	label8321:

	if (!(0 < intval($B4a603c2a57d3acf['id']))) {
		goto label8338;
	}

	goto label8332;

	label8332:

	$d611c60168c266f6[] = intval($B4a603c2a57d3acf['id']);

	label8338:

	goto label8248;

	label8340:

	goto label8233;

	label8342:

	if (!(0 < intval($B4a603c2a57d3acf['user_id']))) {
		goto label8363;
	}

	$d1ea49ac108e66ab[] = intval($B4a603c2a57d3acf['user_id']);
	$C98047839de3d474[] = intval($B4a603c2a57d3acf['user_id']);

	label8363:

	goto label8214;

	label8365:
}

$D5cd4a6da1994ac8 = $Af1444cd652ebf84 = $F3eeccba3a6d46c3 = $ed9dfa07f9e6092a = $fd4ac8a686a5a700 = $f97dc62b89e38d3f = $E84de30ab6e5b0c1 = $ae2ffcbcd86503e6 = $dc8696899854d891 = $D52a67130c4ab288 = $B1e93ae2ae39e1ff = $f104f5a2d297abd1 = [];
goto label4508;

label8380:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label11775;
}

echo json_encode(['result' => false]);
exit();
goto label11785;
goto label11775;

label8393:

$c87c8c36774fd883 = [];

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	if (((360 < (time() - $Ec379295dc7029e6['last_check_ago'])) || ($Ec379295dc7029e6['status'] == 2)) && ($Ec379295dc7029e6['is_main'] == 0) && ($Ec379295dc7029e6['status'] != 3)) {
		goto label8419;
	}

	$A01d920dab3a448e = false;
	goto label8420;

	label8419:

	$A01d920dab3a448e = true;

	label8420:
	if (!(($Ec379295dc7029e6['status'] == 1) && !$A01d920dab3a448e)) {
		goto label8432;
	}

	$c87c8c36774fd883[] = $Ec379295dc7029e6['id'];

	label8432:
}
if (!((0 < $ba2d146bb5a55097['id']) && (0 < $ba2d146bb5a55097['font_size']) && (0 < strlen($ba2d146bb5a55097['font_color'])) && (0 < strlen($ba2d146bb5a55097['xy_offset'])) && ((0 < strlen($ba2d146bb5a55097['message'])) || ($ba2d146bb5a55097['type'] < 3)))) {
	goto label4571;
}

if (XUI::$rSettings['redis_handler']) {
	goto label11171;
}

goto label6424;

label8473:

exit();

label8474:

goto label11378;

label8475:

if (E589a4bf54a2DaD1('adv', 'folder_watch_settings')) {
	goto label896;
}

goto label891;

label8482:

$b120584763e3d117 = NULL;

label8483:

if (in_array(XUI::$rRequest['type'], ['lines_logs', 'streams_errors', 'lines_activity', 'users_credits_logs', 'users_logs'])) {
	goto label5527;
}

if (!(XUI::$rRequest['type'] == 'watch_logs')) {
	goto label5526;
}
if ($F56066ad7b074468 && $b120584763e3d117) {
	goto label6701;
}

goto label14694;

label8502:

E167B0a8dA1Ad2A4('/' . $aae4eee56abeed7c . '.sql');

label8507:

echo json_encode(['result' => true]);
exit();

label8512:

goto label1734;

label8513:

if (0 < $fb361b5f838abd3c['fps']) {
	goto label8519;
}

$c7b8b5438b915f8f = '--';
goto label14106;

label8519:

goto label14091;

label8520:

echo json_encode(['result' => false]);
exit();

label8525:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label7110;
}

goto label7104;

label8532:
if (!(!e589A4Bf54A2DAd1('adv', 'reg_userlog') && !E589a4Bf54A2DAd1('adv', 'client_request_log') && !E589a4BF54A2DAD1('adv', 'connection_logs') && !e589a4BF54a2DAd1('adv', 'stream_errors') && !E589a4bF54A2DAd1('adv', 'credits_log') && !e589A4Bf54A2Dad1('adv', 'folder_watch_settings'))) {
	goto label8580;
}

echo json_encode(['result' => false]);
exit();

label8580:

if (strlen(XUI::$rRequest['from']) == 0) {
	goto label9032;
}

goto label9245;

label8589:

$Effb0ac2c5e5cfd3 = a891E68753730298($f23658ae5c2456c3);
$f23658ae5c2456c3 = $Effb0ac2c5e5cfd3['title'];
$F36e7d4d6716c100 = [];
goto label1501;

label8597:

$C98e11437faf4199 = intval($C98e11437faf4199[0]);
shell_exec('kill -9 ' . $C98e11437faf4199);
shell_exec(PHP_BIN . ' ' . CLI_PATH . 'signals.php > /dev/null 2>/dev/null &');

label8615:

exec('pgrep -U xui | xargs ps | grep watchdog | awk \'{print $1}\'', $C98e11437faf4199);
goto label6848;

label8620:

$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE UNIX_TIMESTAMP(`dateadded`) <= ?;', $b120584763e3d117);

label8624:

goto label6700;

label8625:

$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE UNIX_TIMESTAMP(`dateadded`) >= ?;', $F56066ad7b074468);
goto label6700;

label8630:

$Fe53bcd53690fff4 = [intval(XUI::$rRequest['server_id'])];
goto label8645;

label8638:

$Fe53bcd53690fff4 = json_decode(XUI::$rRequest['server_id'], true);

label8645:

goto label9740;

label8646:

echo json_encode(['result' => false]);
exit();
goto label363;

label8652:

$E2461a25530fd8a2 = D8EC9843FC5457DF(XUI::$rRequest['folder_id']);
goto label12208;

label8659:

$Cb83d0310a2254b4 = $Aa0fba5332a8010d = [];
$b62d6460eb33ea07->query('SELECT `server_id`, COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `pid` > 0 AND `type` = 1 GROUP BY `server_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Cb83d0310a2254b4[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['count']);
}

goto label4249;

label8681:

if (XUI::$rRequest['filter'] == 'video') {
	goto label13800;
}

if (XUI::$rRequest['filter'] == 'subs') {
	goto label13798;
}

$B19973b37155645f = ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts', 'srt', 'sub', 'sbv'];
goto label13799;
goto label13798;

label8694:

$D5a23053f1f7c7f7 = [];
$b62d6460eb33ea07->query('SELECT `callSign`, `bcastLangs`, `name`, `picon` FROM `epg_api` WHERE (`callSign` LIKE ? OR `name` LIKE ?) GROUP BY CONCAT(`name`, `bcastLangs`) ORDER BY `name` ASC LIMIT 50;', XUI::$rRequest['search'] . '%', XUI::$rRequest['search'] . '%');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$ebf287dbbc3574f3 = json_decode($Fb9da1713bff19ce['bcastLangs'], true);

	if (!(count($ebf287dbbc3574f3) == 0)) {
		goto label8725;
	}

	$ebf287dbbc3574f3 = ['#'];

	label8725:

	foreach ($ebf287dbbc3574f3 as $bc6b825af9e46f5b) {
		if (isset($D5a23053f1f7c7f7[$bc6b825af9e46f5b])) {
			goto label8734;
		}

		$D5a23053f1f7c7f7[$bc6b825af9e46f5b] = [];

		label8734:

		$D5a23053f1f7c7f7[$bc6b825af9e46f5b][] = ['id' => $Fb9da1713bff19ce['callSign'], 'text' => $Fb9da1713bff19ce['name'], 'icon' => $Fb9da1713bff19ce['picon'], 'lang' => $bc6b825af9e46f5b, 'type' => 1];
	}
}

goto label9923;

label8750:

goto label11290;

label8751:

if ($Bcf70cba56392975[XUI::$rRequest['server_id']]['is_main'] == 0) {
	goto label15070;
}

echo json_encode(['result' => false]);
exit();
goto label15069;

label8764:

goto label493;

label8765:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $e37d504062f6c301['user_id']);
XUI::ccB5075C679E7314($e37d504062f6c301['user_id']);
echo json_encode(['result' => true]);
goto label492;

label8779:

exec('pgrep -U xui | xargs ps | grep signals | awk \'{print $1}\'', $C98e11437faf4199);
if (!((0 < count($C98e11437faf4199)) && is_numeric($C98e11437faf4199[0]))) {
	goto label14134;
}

$C98e11437faf4199 = intval($C98e11437faf4199[0]);
shell_exec('kill -9 ' . $C98e11437faf4199);
goto label14126;

label8807:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$dc4ea959550b2e88[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['count']);
}

foreach (array_keys($Bcf70cba56392975) as $C082ca9ed03f473c) {
	goto label8963;

	label8830:

	$F647a429f8089f01['online_users'] = $Bcf70cba56392975[$C082ca9ed03f473c]['users'];
	$B9869413eae86beb['online_users'] += $Bcf70cba56392975[$C082ca9ed03f473c]['users'];
	$B9869413eae86beb['total_users'] += $Bcf70cba56392975[$C082ca9ed03f473c]['users'];

	label8842:

	$F647a429f8089f01['requests_per_second'] = $Bcf70cba56392975[$C082ca9ed03f473c]['requests_per_second'];
	goto label8987;

	label8848:

	if (!is_array($b89534efad61c2e2)) {
		goto label8919;
	}

	$F647a429f8089f01['uptime'] = $b89534efad61c2e2['uptime'];
	$F647a429f8089f01['mem'] = round($b89534efad61c2e2['total_mem_used_percent'], 0);
	$F647a429f8089f01['cpu'] = round($b89534efad61c2e2['cpu'], 0);

	if (!isset($b89534efad61c2e2['iostat_info'])) {
		goto label8930;
	}

	goto label8921;

	label8879:

	goto label8842;

	label8881:

	$F647a429f8089f01['open_connections'] = $Bcf70cba56392975[$C082ca9ed03f473c]['connections'];
	$B9869413eae86beb['open_connections'] += $Bcf70cba56392975[$C082ca9ed03f473c]['connections'];
	$B9869413eae86beb['total_connections'] += $Bcf70cba56392975[$C082ca9ed03f473c]['connections'];
	goto label8830;

	label8895:

	$F647a429f8089f01['bytes_received'] = intval($b89534efad61c2e2['bytes_received']);
	$F647a429f8089f01['bytes_sent'] = intval($b89534efad61c2e2['bytes_sent']);
	$B9869413eae86beb['bytes_received'] += intval($b89534efad61c2e2['bytes_received']);
	$B9869413eae86beb['bytes_sent'] += intval($b89534efad61c2e2['bytes_sent']);

	label8919:

	goto label8950;

	label8921:

	$F647a429f8089f01['io'] = round($b89534efad61c2e2['iostat_info']['avg-cpu']['iowait'], 0);

	label8930:

	if (!isset($b89534efad61c2e2['total_disk_space'])) {
		goto label8946;
	}

	$F647a429f8089f01['fs'] = intval((($b89534efad61c2e2['total_disk_space'] - $b89534efad61c2e2['free_disk_space']) / $b89534efad61c2e2['total_disk_space']) * 100);

	label8946:

	goto label8895;

	label8948:

	goto label9015;

	label8950:

	$F647a429f8089f01['total_connections'] = $ce95ea5d02ef202d;
	$F647a429f8089f01['server_id'] = $C082ca9ed03f473c;
	$F647a429f8089f01['server_type'] = $Bcf70cba56392975[$C082ca9ed03f473c]['server_type'];
	$B9869413eae86beb['servers'][] = $F647a429f8089f01;

	label8961:

	goto label8948;

	label8963:

	if (!$Bcf70cba56392975[$C082ca9ed03f473c]['server_online']) {
		goto label8961;
	}

	$F647a429f8089f01 = [];

	if (XUI::$rSettings['redis_handler']) {
		goto label8881;
	}

	$F647a429f8089f01['open_connections'] = $Ad3bf144a105a86e[$C082ca9ed03f473c] ?: 0;
	$F647a429f8089f01['online_users'] = $Bbf6067f0af4f59b[$C082ca9ed03f473c] ?: 0;
	goto label8879;

	label8987:

	$F647a429f8089f01['total_streams'] = $E32385d980d2da52[$C082ca9ed03f473c] ?: 0;
	$F647a429f8089f01['total_running_streams'] = $dc4ea959550b2e88[$C082ca9ed03f473c] ?: 0;
	$F647a429f8089f01['offline_streams'] = $ad5262de2430eda4[$C082ca9ed03f473c] ?: 0;
	$F647a429f8089f01['network_guaranteed_speed'] = $Bcf70cba56392975[$C082ca9ed03f473c]['network_guaranteed_speed'];
	$b89534efad61c2e2 = json_decode($Bcf70cba56392975[$C082ca9ed03f473c]['watchdog_data'], true);
	goto label8848;

	label9015:
}

foreach ($B9869413eae86beb['servers'] as $Fdbe2b9ed5184132) {
	$B9869413eae86beb['total_streams'] += $Fdbe2b9ed5184132['total_streams'];
	$B9869413eae86beb['total_running_streams'] += $Fdbe2b9ed5184132['total_running_streams'];
	$B9869413eae86beb['offline_streams'] += $Fdbe2b9ed5184132['offline_streams'];
}

goto label13047;

label9032:

$F56066ad7b074468 = NULL;

label9033:

if (strlen(XUI::$rRequest['to']) == 0) {
	goto label1792;
}

if ($b120584763e3d117 = strtotime(XUI::$rRequest['to'] . ' 23:59:59')) {
	goto label1791;
}

goto label1786;

label9051:

echo json_encode(['result' => true]);
exit();

label9056:

goto label14752;
goto label12425;

label9058:

$Ab13f2545dd3df14 = A1Db5e3c7d45b85F(time(), 10);
$fa59d8fa25ff8bf2 = $Ab13f2545dd3df14 - $Cc2b5dfe75dc164b;
$d8dafc80325ae183 = 60;
$Aa3b04b0b61d8776 = [];

foreach (range($fa59d8fa25ff8bf2, $Ab13f2545dd3df14, $d8dafc80325ae183) as $df6991d59f367c7e) {
	$Aa3b04b0b61d8776[] = $df6991d59f367c7e;
}

goto label13374;

label9081:

exit();

label9082:

$B9869413eae86beb = ['bytes_sent' => 0, 'bytes_received' => 0, 'total_connections' => 0, 'total_users' => 0, 'total_running_streams' => 0, 'offline_streams' => 0];

if (!XUI::$rSettings['redis_handler']) {
	goto label9105;
}

$B9869413eae86beb['total_users'] = XUI::$rSettings['total_users'];
goto label9104;

label9093:

exit();

label9094:

goto label13623;

label9095:

$Cc2b5dfe75dc164b = 3600;
goto label9058;

label9097:

echo json_encode(['result' => true]);
exit();

label9102:

goto label15301;

label9103:

goto label15283;

label9104:

goto label8659;

label9105:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `hls_end` = 0;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label8045;
}

$B9869413eae86beb['total_connections'] = $b62d6460eb33ea07->get_row()['count'];
goto label8045;

label9120:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B9869413eae86beb['items'][] = ['id' => $Fb9da1713bff19ce['id'], 'text' => $Fb9da1713bff19ce['username']];
}

label9133:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
goto label6213;

label9140:

goto label1033;

label9141:

if (E589A4bF54A2Dad1('adv', 'tprofiles')) {
	goto label11968;
}

echo json_encode(['result' => false]);
exit();
goto label11968;

label9153:

goto label13059;

label9154:

foreach ($ba2d146bb5a55097 as $Edde4f026eed2148 => $b7319702635da556) {
	$Eace76317d47fe26[$Edde4f026eed2148] = pathinfo($b7319702635da556)['filename'];
}

$C6671ac66a4f1c57 = XUI_HOME . 'bin/guess ' . escapeshellarg(json_encode($Eace76317d47fe26));
goto label13059;

label9176:

echo json_encode(['result' => false]);
exit();

label9181:

$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `active` = 1 WHERE `type` <> \'plex\';');
echo json_encode(['result' => true]);
goto label5472;

label9189:

$D8e7681dfae2905b = XUI::D72c0F56211b6f7C(NULL, NULL, $ba2d146bb5a55097['id'], true, false, false);
goto label9210;

label9200:

$D8e7681dfae2905b = XUI::d72c0f56211b6f7c($ba2d146bb5a55097['id'], NULL, NULL, true, false, false);

label9210:

goto label11413;

label9211:

if ($c4584835207f1ecb == 'restore') {
	goto label929;
}

if (!($c4584835207f1ecb == 'backup')) {
	goto label928;
}

$C6671ac66a4f1c57 = PHP_BIN . ' ' . CRON_PATH . 'backups.php 1 > /dev/null 2>/dev/null &';
$b492c39d2d86c9b6 = shell_exec($C6671ac66a4f1c57);
echo json_encode(['result' => true]);
goto label927;

label9233:

if (e589a4bF54A2dad1('adv', 'edit_e2')) {
	goto label9244;
}

echo json_encode(['result' => false]);
exit();

label9244:

goto label6184;

label9245:

if ($F56066ad7b074468 = strtotime(XUI::$rRequest['from'] . ' 00:00:00')) {
	goto label9259;
}

echo json_encode(['result' => false]);
exit();

label9259:

goto label9033;
goto label9032;

label9261:

goto label14961;

label9262:

if (e589A4bf54a2Dad1('adv', 'edit_mag')) {
	goto label12465;
}

echo json_encode(['result' => false]);
goto label12464;

label9273:

exit();

label9274:

goto label12031;

label9275:

goto label984;

label9276:

exit();
goto label4347;

label9278:

if (XUI::$rSettings['redis_handler']) {
	goto label11274;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` = ?;', $f7107e3a92443147);
goto label11264;

label9287:

foreach ($Baba9277b00445b2['codecs'] as $A7d54b094ae83c95 => $a42d28fc2a08c3b1) {
	$D9d6a5d0b76a9aaf['streams'][] = $a42d28fc2a08c3b1;
}

label9296:

if ($D9d6a5d0b76a9aaf) {
	goto label15375;
}

goto label15353;

label9299:

$b62d6460eb33ea07->query('SELECT `epg_channels`.`epg_id`, `epg_channels`.`channel_id`, `epg_channels`.`name`, `epg_channels`.`langs`, `epg`.`epg_name` FROM `epg_channels` LEFT JOIN `epg` ON `epg_channels`.`epg_id` = `epg`.`id` WHERE LOWER(`epg_channels`.`name`) LIKE ? OR LOWER(`epg_channels`.`channel_id`) = ? ORDER BY `epg_channels`.`name` ASC;', trim($A3aa81b5d3e27866) . '%', $B074f743fd302af8);

foreach ($b62d6460eb33ea07->get_rows() as $a5725df552d26b87) {
	goto label9345;

	label9314:

	$ea1e6ba580c86486 = $C7b14ffca13af0a3;

	label9315:

	goto label9343;

	label9317:

	$ebf287dbbc3574f3 = json_decode($a5725df552d26b87['langs'], true);
	goto label9325;

	label9325:

	$a2ebb817d88c810b = ['id' => $a5725df552d26b87['channel_id'], 'text' => $a5725df552d26b87['name'], 'icon' => NULL, 'lang' => isset($ebf287dbbc3574f3[0]) ? $ebf287dbbc3574f3[0] : '', 'epg_id' => $a5725df552d26b87['epg_id'], 'type' => 0];
	goto label9404;

	label9343:

	goto label9402;

	label9345:
	if ($B074f743fd302af8 && (strtolower($a5725df552d26b87['channel_id']) == $B074f743fd302af8)) {
		goto label9317;
	}

	similar_text(strtolower($a5725df552d26b87['name']), trim(strtolower($A3aa81b5d3e27866)), $C7b14ffca13af0a3);
	if (!(($ea1e6ba580c86486 < $C7b14ffca13af0a3) && (90 <= $C7b14ffca13af0a3))) {
		goto label9315;
	}

	$ebf287dbbc3574f3 = json_decode($a5725df552d26b87['langs'], true);
	$a2ebb817d88c810b = ['id' => $a5725df552d26b87['channel_id'], 'text' => $a5725df552d26b87['name'], 'icon' => NULL, 'lang' => isset($ebf287dbbc3574f3[0]) ? $ebf287dbbc3574f3[0] : '', 'epg_id' => $a5725df552d26b87['epg_id'], 'type' => 0];
	goto label9314;

	label9402:
}

label9404:

if ($a2ebb817d88c810b) {
	goto label6181;
}

goto label6124;

label9407:

$b89534efad61c2e2 = json_decode($Bcf70cba56392975[$C082ca9ed03f473c]['watchdog_data'], true);

if (!is_array($b89534efad61c2e2)) {
	goto label4475;
}

$B9869413eae86beb['uptime'] = $b89534efad61c2e2['uptime'];
$B9869413eae86beb['mem'] = round($b89534efad61c2e2['total_mem_used_percent'], 0);
$B9869413eae86beb['cpu'] = round($b89534efad61c2e2['cpu'], 0);
goto label5056;

label9438:

echo json_encode(['result' => false]);
exit();

label9443:

$Fe2ee13c1d643ec7 = abs(intval(XUI::$rSettings['stream_max_analyze']));
$F7379362daea673f = intval($Fe2ee13c1d643ec7 / 1000000) + XUI::$rSettings['probe_extra_wait'];
goto label14377;

label9461:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label15611;
}

echo json_encode(['result' => false]);
exit();
goto label15621;
goto label15611;

label9474:

exit();

label9475:

if (!is_numeric(XUI::$rRequest['server_id'])) {
	goto label5976;
}

$Fe53bcd53690fff4 = [intval(XUI::$rRequest['server_id'])];
goto label5983;
goto label5976;

label9492:

if (!(0 < $Abcb228699a7f743)) {
	goto label7319;
}

$c34589bb44ab4b2a = ['action' => 'epg', 'id' => $Abcb228699a7f743, 'days' => 2];
$aa4e95f1ed1932a8 = Xui\Functions::getEPG('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $c34589bb44ab4b2a);
$b4e965a0829ee6e6 = NULL;

foreach ($aa4e95f1ed1932a8[array_keys($aa4e95f1ed1932a8)[0]] as $D577b2a7889a5fb6) {
	goto label9539;

	label9515:

	goto label9581;

	label9517:
	if (!(!$D577b2a7889a5fb6['program']['shortDescription'] || (strlen($D577b2a7889a5fb6['program']['shortDescription']) == 0))) {
		goto label9535;
	}

	$D577b2a7889a5fb6['program']['shortDescription'] = 'No description.';

	label9535:

	$e02ff34f7d898a7b[] = $D577b2a7889a5fb6;

	label9537:

	goto label9515;

	label9539:
	if (!((time() < strtotime($D577b2a7889a5fb6['endTime'])) && (!$b4e965a0829ee6e6 || (strtotime($D577b2a7889a5fb6['startTime']) < ($b4e965a0829ee6e6 + 86400))))) {
		goto label9537;
	}

	if ($b4e965a0829ee6e6) {
		goto label9569;
	}

	$b4e965a0829ee6e6 = strtotime($D577b2a7889a5fb6['startTime']);

	label9569:

	$D577b2a7889a5fb6['startTime'] = date('H:i:s', strtotime($D577b2a7889a5fb6['startTime']));
	goto label9517;

	label9581:
}

goto label7319;

label9584:

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $Fd10d59f87b19e71) {
	if (in_array($Fd10d59f87b19e71['stream_id'], $dec36723d7be7c49)) {
		goto label9601;
	}

	$ab41a6d312cb92e9[] = intval($Fd10d59f87b19e71['stream_id']);

	label9601:
}

$b42f717d234fde64 = [];

if (!(0 < count($ab41a6d312cb92e9))) {
	goto label11501;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $ab41a6d312cb92e9) . ');');
goto label11491;

label9621:

goto label12418;

label9622:

$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;', $A5672c717a6d107d['user_id']);
XUI::CCB5075c679E7314($A5672c717a6d107d['user_id']);
echo json_encode(['result' => true]);
goto label12417;

label9636:

echo json_encode(['result' => true]);
exit();

label9641:

goto label13200;

label9642:

goto label13186;

label9643:

if (e589a4bf54A2daD1('adv', 'manage_mag')) {
	goto label9654;
}

echo json_encode(['result' => false]);
exit();

label9654:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];
goto label4440;

label9656:

if (!($b62d6460eb33ea07->num_rows() == 1)) {
	goto label13995;
}

$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();

if ($c4584835207f1ecb == 'delete') {
	goto label13217;
}

if (!($c4584835207f1ecb == 'stop')) {
	goto label13216;
}

if (!(0 < $Fb9da1713bff19ce['pid'])) {
	goto label6668;
}

goto label6662;

label9678:

echo json_encode(['result' => false]);
exit();

label9683:

$b62d6460eb33ea07->query('UPDATE `watch_folders` SET `active` = 1 WHERE `type` = \'plex\';');
echo json_encode(['result' => true]);
goto label8473;

label9691:

$c4584835207f1ecb = 'start';

label9692:

if ($C082ca9ed03f473c == -1) {
	goto label1372;
}

echo d5612f049a8056a5([
	'action'     => 'stream',
	'sub'        => $c4584835207f1ecb,
	'stream_ids' => [$ee6d1fc5d801b43f],
	'servers'    => [$C082ca9ed03f473c]
]);
exit();
goto label1371;

label9707:

goto label4807;

label9708:

B23579CDe727D32f(XUI::$rRequest['group_id']);
echo json_encode(['result' => true]);
exit();
goto label4807;

label9719:

exit();
goto label11580;

label9721:

$Bccd07953f314962 = [];
$b62d6460eb33ea07->query('SELECT `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $ee6d1fc5d801b43f);
goto label15322;

label9727:

goto label9735;

label9728:

$Bc11ab076e603a99 = ' -user_agent ' . escapeshellarg($A508fa583604eb49[1]['value']);

label9735:

if (isset(XUI::$rRequest['cookie'])) {
	goto label15691;
}

goto label15689;

label9740:

foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `custom_data`, `time`) VALUES(?, \'{"action": "reboot"}\', ?);', $Abcb228699a7f743, time());
}

echo json_encode(['result' => true]);
exit();

label9756:

goto label5911;

label9757:

if (E589a4BF54A2dAD1('adv', 'folder_watch')) {
	goto label9768;
}

echo json_encode(['result' => false]);
exit();

label9768:

Cd13e1314381e208();
goto label5481;

label9771:

$E153b6005aa003ab = confirmIDs($E153b6005aa003ab);

if (!(0 < count($E153b6005aa003ab))) {
	goto label11694;
}

$b62d6460eb33ea07->query('SELECT `id`, `username` FROM `users` WHERE `id` IN (' . implode(',', $E153b6005aa003ab) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$ed9dfa07f9e6092a[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['username'];
}

goto label11694;

label9802:

echo json_encode(['result' => true]);
exit();

label9807:

goto label4751;

label9808:

goto label4737;

label9809:

exit();

label9810:

goto label12013;

label9811:

goto label4624;

label9812:

goto label1099;

label9813:

if (E589A4bf54A2DAd1('adv', 'epg_edit')) {
	goto label11065;
}

echo json_encode(['result' => false]);
goto label11064;

label9824:

foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $Abcb228699a7f743, time(), json_encode(['action' => 'update']));
}

echo json_encode(['result' => true]);
exit();

label9844:

goto label8750;

label9845:

exit();

label9846:

$b62d6460eb33ea07->query('UPDATE `settings` SET `redis_handler` = 0;');

if (!file_exists(CACHE_TMP_PATH . 'settings')) {
	goto label4480;
}

unlink(CACHE_TMP_PATH . 'settings');
goto label4480;

label9863:

$Caf4325605347834 = bA89228dC958ce05(XUI::$rRequest['id']);
if ($Caf4325605347834 && is_numeric(XUI::$rRequest['credits'])) {
	goto label1646;
}

echo json_encode(['result' => false]);
exit();
goto label1645;

label9884:

echo json_encode(['result' => true]);
exit();

label9889:

goto label1184;
goto label6287;

label9891:

$b62d6460eb33ea07->query('UPDATE `users_groups` SET ? = ? WHERE `group_id` = ?;', $c4584835207f1ecb, XUI::$rRequest['value'], XUI::$rRequest['group_id']);
echo json_encode(['result' => true]);
exit();

label9906:

goto label9707;

label9907:

exit();

label9908:

$B9869413eae86beb = [];
$ba2d146bb5a55097 = json_decode(XUI::$rRequest['data'], true);

if (!is_array($ba2d146bb5a55097)) {
	goto label2;
}

goto label8111;

label9923:

foreach ($D5a23053f1f7c7f7 as $bc6b825af9e46f5b => $e02ff34f7d898a7b) {
	$B9869413eae86beb['items'][] = ['text' => 'EPG API - ' . $d6c26cc20418eff5[$bc6b825af9e46f5b], 'children' => $e02ff34f7d898a7b];
	$B9869413eae86beb['total_count'] += count($e02ff34f7d898a7b);
}

label9940:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
exit();
goto label6403;

label9948:

if (!(count($a89d7e3381b91204) == 0)) {
	goto label9960;
}

echo json_encode(['result' => false]);
exit();

label9960:

switch ($A7d54b094ae83c95) {
case 'line':
	goto label10127;

	label9987:

	exit();
	goto label158;
	goto label10151;

	label9990:

	goto label10007;

	label9991:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');
	XUI::updateLines($a89d7e3381b91204);

	label10007:

	goto label10036;

	label10008:

	if (XUI::$rSettings['redis_handler']) {
		goto label10107;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		XUI::B0020C716fdf67bb($Fb9da1713bff19ce);
	}

	goto label10126;
	goto label10107;

	label10036:

	goto label10053;

	label10037:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 1 WHERE `id`IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');
	XUI::updateLines($a89d7e3381b91204);

	label10053:

	goto label10142;

	label10054:

	if ($c4584835207f1ecb == 'enable') {
		goto label10037;
	}

	if ($c4584835207f1ecb == 'disable') {
		goto label9991;
	}

	if ($c4584835207f1ecb == 'ban') {
		goto label10072;
	}

	if ($c4584835207f1ecb == 'unban') {
		goto label10090;
	}

	if (!($c4584835207f1ecb == 'purge')) {
		goto label10126;
	}

	goto label10008;

	label10071:

	goto label10088;

	label10072:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');
	XUI::updateLines($a89d7e3381b91204);

	label10088:

	goto label9990;

	label10089:

	goto label10106;

	label10090:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');
	XUI::updateLines($a89d7e3381b91204);

	label10106:

	goto label10071;

	label10107:

	foreach ($a89d7e3381b91204 as $f7107e3a92443147) {
		foreach (XUI::D72c0F56211B6f7c($f7107e3a92443147, NULL, NULL, true, false, false) as $Fd10d59f87b19e71) {
			XUI::b0020C716Fdf67BB($Fd10d59f87b19e71);
		}
	}

	label10126:

	goto label10089;

	label10127:

	if (e589A4bF54a2DAD1('adv', 'edit_line')) {
		goto label10138;
	}

	echo json_encode(['result' => false]);
	exit();

	label10138:

	if ($c4584835207f1ecb == 'delete') {
		goto label10143;
	}

	goto label10054;

	label10142:

	goto label10146;

	label10143:

	deleteLines($a89d7e3381b91204);

	label10146:

	echo json_encode(['result' => true]);
	goto label9987;
case 'mag':
case 'enigma':
	label10151:

	goto label10208;

	label10152:

	if ($A7d54b094ae83c95 == 'mag') {
		goto label10159;
	}

	deleteEnigmas($a89d7e3381b91204);
	goto label10222;

	label10159:

	deleteMAGs($a89d7e3381b91204);
	goto label10222;

	label10163:

	goto label10177;

	label10164:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` IN (' . implode(',', array_map('intval', $ec80784a08a705f6)) . ');');

	label10177:

	goto label10254;

	label10178:

	$b62d6460eb33ea07->query('SELECT `user_id` FROM `mag_devices` WHERE `mag_id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');

	label10191:

	foreach ($b62d6460eb33ea07->get_Rows() as $Fb9da1713bff19ce) {
		$ec80784a08a705f6[] = $Fb9da1713bff19ce['user_id'];
	}

	if (!(0 < count($ec80784a08a705f6))) {
		goto label10225;
	}

	goto label10368;

	label10208:

	$f51fdbb70a8cbb4b = ['mag' => 'edit_mag', 'enigma2' => 'edit_e2'][$A7d54b094ae83c95];

	if (E589a4Bf54a2dAd1('adv', $f51fdbb70a8cbb4b)) {
		goto label10221;
	}

	echo json_encode(['result' => false]);
	exit();

	label10221:

	goto label10349;

	label10222:

	XUI::updateLines($ec80784a08a705f6);

	label10225:

	echo json_encode(['result' => true]);
	goto label10251;

	label10230:

	goto label10298;

	label10231:

	foreach ($ec80784a08a705f6 as $f7107e3a92443147) {
		foreach (XUI::D72c0f56211B6F7C($f7107e3a92443147, NULL, NULL, true, false, false) as $Fd10d59f87b19e71) {
			XUI::B0020c716FDF67Bb($Fd10d59f87b19e71);
		}
	}

	goto label10298;

	label10251:

	exit();
	goto label158;
	goto label10399;

	label10254:

	goto label10268;

	label10255:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` IN (' . implode(',', array_map('intval', $ec80784a08a705f6)) . ');');

	label10268:

	goto label10397;
	goto label10384;

	label10270:

	goto label10298;

	label10271:

	if (XUI::$rSettings['redis_handler']) {
		goto label10231;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` IN (' . implode(',', array_map('intval', $ec80784a08a705f6)) . ');');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		XUI::B0020c716fdF67bb($Fb9da1713bff19ce);
	}

	goto label10230;

	label10298:

	goto label10163;

	label10299:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` IN (' . implode(',', array_map('intval', $ec80784a08a705f6)) . ');');
	goto label10163;

	label10313:

	if ($c4584835207f1ecb == 'purge') {
		goto label10271;
	}
	if (!(($c4584835207f1ecb == 'convert') && in_array($A7d54b094ae83c95, ['mag', 'enigma']))) {
		goto label10348;
	}

	foreach ($a89d7e3381b91204 as $Db0336509474eb3e) {
		if ($A7d54b094ae83c95 == 'mag') {
			goto label10340;
		}

		A486863E198221Fa($Db0336509474eb3e, false, false, true);
		goto label10346;

		label10340:

		dd81518D00a2dd90($Db0336509474eb3e, false, false, true);

		label10346:
	}

	label10348:

	goto label10270;

	label10349:

	$ec80784a08a705f6 = [];

	if ($A7d54b094ae83c95 == 'mag') {
		goto label10367;
	}

	$b62d6460eb33ea07->query('SELECT `user_id` FROM `enigma2_devices` WHERE `device_id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');
	goto label10191;

	label10367:

	goto label10178;

	label10368:

	if ($c4584835207f1ecb == 'delete') {
		goto label10398;
	}

	if ($c4584835207f1ecb == 'enable') {
		goto label10384;
	}

	if ($c4584835207f1ecb == 'disable') {
		goto label10255;
	}

	if ($c4584835207f1ecb == 'ban') {
		goto label10164;
	}

	if ($c4584835207f1ecb == 'unban') {
		goto label10299;
	}

	goto label10313;

	label10384:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` IN (' . implode(',', array_map('intval', $ec80784a08a705f6)) . ');');

	label10397:

	goto label10222;

	label10398:

	goto label10152;
case 'user':
	label10399:

	goto label10415;

	label10400:

	$b62d6460eb33ea07->query('UPDATE `users` SET `status` = 0 WHERE `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');

	label10413:

	goto label10443;

	label10414:

	goto label10430;

	label10415:

	if (e589a4bF54A2DAd1('adv', 'edit_reguser')) {
		goto label10426;
	}

	echo json_encode(['result' => false]);
	exit();

	label10426:

	if ($c4584835207f1ecb == 'enable') {
		goto label10414;
	}

	goto label10450;

	label10430:

	$b62d6460eb33ea07->query('UPDATE `users` SET `status` = 1 WHERE `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');

	label10443:

	echo json_encode(['result' => true]);
	exit();
	goto label158;
	goto label10462;

	label10450:

	if ($c4584835207f1ecb == 'disable') {
		goto label10400;
	}

	if (!($c4584835207f1ecb == 'delete')) {
		goto label10460;
	}

	deleteUsers($a89d7e3381b91204);

	label10460:

	goto label10413;
	goto label10400;
case 'server':
case 'proxy':
	label10462:

	goto label10596;

	label10463:

	foreach ($a89d7e3381b91204 as $C082ca9ed03f473c) {
		goto label10507;

		label10467:

		if ($A7d54b094ae83c95 == 'proxy') {
			goto label10524;
		}

		foreach (XUI::d72c0f56211B6f7C(NULL, $C082ca9ed03f473c, NULL, true, false, false) as $Fd10d59f87b19e71) {
			XUI::B0020c716Fdf67bB($Fd10d59f87b19e71);
		}

		goto label10554;
		goto label10524;

		label10490:

		$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `proxy_id` = ?;', $C082ca9ed03f473c);

		label10494:

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			XUI::B0020c716fdf67bb($Fb9da1713bff19ce);
		}

		goto label10554;
		goto label10467;

		label10507:

		if (XUI::$rSettings['redis_handler']) {
			goto label10467;
		}

		if ($A7d54b094ae83c95 == 'proxy') {
			goto label10522;
		}

		$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `server_id` = ?;', $C082ca9ed03f473c);
		goto label10494;

		label10522:

		goto label10490;

		label10524:

		foreach (XUI::$rServers[$C082ca9ed03f473c]['parent_id'] as $A3206fae422859ef) {
			foreach (XUI::d72C0F56211b6F7C(NULL, $A3206fae422859ef, NULL, true, false, false) as $Fd10d59f87b19e71) {
				if (!($Fd10d59f87b19e71['proxy_id'] == $C082ca9ed03f473c)) {
					goto label10550;
				}

				XUI::b0020c716FdF67Bb($Fd10d59f87b19e71);

				label10550:
			}
		}

		label10554:

		goto label10556;

		label10556:

		goto label10558;

		label10558:
	}

	label10560:

	goto label10771;

	label10561:

	goto label10577;

	label10562:

	goto label10576;

	label10563:

	$b62d6460eb33ea07->query('UPDATE `servers` SET `enable_proxy` = 1 WHERE `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');

	label10576:

	goto label10617;

	label10577:

	$b42f717d234fde64 = [];

	if ($c4584835207f1ecb == 'start') {
		goto label10595;
	}

	$b62d6460eb33ea07->query('SELECT `server_id`, `stream_id` FROM `streams_servers` WHERE `server_id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ') AND `on_demand` = 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0;');
	goto label10710;

	label10595:

	goto label10697;

	label10596:

	if (E589A4bF54A2Dad1('adv', 'edit_server')) {
		goto label10607;
	}

	echo json_encode(['result' => false]);
	exit();

	label10607:
	if (($A7d54b094ae83c95 == 'server') && in_array($c4584835207f1ecb, ['restart', 'start', 'stop'])) {
		goto label10561;
	}

	goto label10734;

	label10617:

	goto label10631;

	label10618:

	$b62d6460eb33ea07->query('UPDATE `servers` SET `enabled` = 0 WHERE `is_main` = 0 AND `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');

	label10631:

	goto label10769;
	goto label10756;

	label10633:

	foreach ($a89d7e3381b91204 as $C082ca9ed03f473c) {
		if (!($Bcf70cba56392975[$C082ca9ed03f473c]['is_main'] == 0)) {
			goto label10645;
		}

		EfA9379345817b87($C082ca9ed03f473c);

		label10645:
	}

	goto label10562;

	label10648:

	$b62d6460eb33ea07->query('UPDATE `servers` SET `enable_proxy` = 0 WHERE `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');
	goto label10562;

	label10662:

	if (!(0 < count($b42f717d234fde64))) {
		goto label10696;
	}

	foreach ($b42f717d234fde64 as $C082ca9ed03f473c => $dec36723d7be7c49) {
		if ($c4584835207f1ecb == 'stop') {
			goto label10686;
		}

		D5612F049a8056a5([
			'action'     => 'stream',
			'sub'        => 'start',
			'stream_ids' => $dec36723d7be7c49,
			'servers'    => [$C082ca9ed03f473c]
		]);
		goto label10694;

		label10686:

		D5612F049A8056A5([
			'action'     => 'stream',
			'sub'        => 'stop',
			'stream_ids' => $dec36723d7be7c49,
			'servers'    => [$C082ca9ed03f473c]
		]);

		label10694:
	}

	label10696:

	goto label10771;

	label10697:

	$b62d6460eb33ea07->query('SELECT `server_id`, `stream_id` FROM `streams_servers` WHERE `server_id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ') AND `on_demand` = 0;');

	label10710:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label10662;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b42f717d234fde64[intval($Fb9da1713bff19ce['server_id'])][] = intval($Fb9da1713bff19ce['stream_id']);
	}

	goto label10662;

	label10734:

	if ($c4584835207f1ecb == 'purge') {
		goto label10770;
	}

	if ($c4584835207f1ecb == 'enable') {
		goto label10756;
	}

	if ($c4584835207f1ecb == 'disable') {
		goto label10618;
	}
	if (($c4584835207f1ecb == 'enable_proxy') && ($A7d54b094ae83c95 == 'server')) {
		goto label10563;
	}
	if (($c4584835207f1ecb == 'disable_proxy') && ($A7d54b094ae83c95 == 'server')) {
		goto label10648;
	}

	goto label10633;

	label10756:

	$b62d6460eb33ea07->query('UPDATE `servers` SET `enabled` = 1 WHERE `id` IN (' . implode(',', array_map('intval', $a89d7e3381b91204)) . ');');

	label10769:

	goto label10560;

	label10770:

	goto label10463;

	label10771:

	echo json_encode(['result' => true]);
	exit();
	goto label158;
	goto label10778;
case 'series':
	label10778:

	if (!($c4584835207f1ecb == 'delete')) {
		goto label10785;
	}

	deleteSeriesMass($a89d7e3381b91204);

	label10785:

	echo json_encode(['result' => true]);
	exit();
	goto label158;
case 'stream':
case 'movie':
case 'episode':
case 'cchannel':
case 'radio':
	goto label10923;

	label10792:
	if (!((0 < count($b42f717d234fde64)) || (($c4584835207f1ecb == 'delete') && (0 < count($B3bc639acac56bf5))))) {
		goto label11056;
	}

	if (in_array($c4584835207f1ecb, ['start', 'stop', 'restart'])) {
		goto label11042;
	}

	if ($c4584835207f1ecb == 'delete') {
		goto label11048;
	}

	if (!($c4584835207f1ecb == 'purge')) {
		goto label11047;
	}

	foreach ($b42f717d234fde64 as $C082ca9ed03f473c => $dec36723d7be7c49) {
		if (XUI::$rSettings['redis_handler']) {
			goto label10854;
		}

		$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `server_id` = ? AND `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');', $C082ca9ed03f473c);

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			XUI::B0020c716fDF67BB($Fb9da1713bff19ce);
		}

		goto label10873;

		label10854:

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			foreach (XUI::d72c0f56211B6f7c(NULL, $C082ca9ed03f473c, $ee6d1fc5d801b43f, true, false, false) as $Fd10d59f87b19e71) {
				XUI::B0020C716fdf67bB($Fd10d59f87b19e71);
			}
		}

		label10873:
	}

	goto label11047;

	label10876:

	foreach ($a89d7e3381b91204 as $fe93a43f53d92a4e) {
		list($ee6d1fc5d801b43f, $C082ca9ed03f473c) = explode('-', $fe93a43f53d92a4e);

		if (!$C082ca9ed03f473c) {
			goto label10896;
		}

		$b42f717d234fde64[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;
		goto label10898;

		label10896:

		$B52eea01f3d9954b[] = $ee6d1fc5d801b43f;

		label10898:
	}

	$B3bc639acac56bf5 = $D426e89e61729ea8 = [];

	if (!(0 < count($B52eea01f3d9954b))) {
		goto label11027;
	}

	$b62d6460eb33ea07->query('SELECT `stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $B52eea01f3d9954b)) . ');');
	goto label10993;

	label10923:

	if (E589A4bf54a2dad1('adv', 'edit_' . $A7d54b094ae83c95)) {
		goto label10935;
	}

	echo json_encode(['result' => false]);
	exit();

	label10935:

	$B52eea01f3d9954b = $b42f717d234fde64 = [];
	goto label10876;

	label10938:

	$c4584835207f1ecb = 'start';

	label10939:

	foreach ($b42f717d234fde64 as $C082ca9ed03f473c => $dec36723d7be7c49) {
		if (in_array($A7d54b094ae83c95, ['stream', 'radio', 'cchannel'])) {
			goto label10959;
		}

		d5612f049a8056a5([
			'action'     => 'vod',
			'sub'        => $c4584835207f1ecb,
			'stream_ids' => $dec36723d7be7c49,
			'servers'    => [$C082ca9ed03f473c]
		]);
		goto label10967;

		label10959:

		d5612f049A8056A5([
			'action'     => 'stream',
			'sub'        => $c4584835207f1ecb,
			'stream_ids' => $dec36723d7be7c49,
			'servers'    => [$C082ca9ed03f473c]
		]);

		label10967:
	}

	label10969:

	goto label11056;

	label10970:

	foreach ($b42f717d234fde64 as $C082ca9ed03f473c => $dec36723d7be7c49) {
		deleteStreamsByServer($dec36723d7be7c49, $C082ca9ed03f473c, $E029a8506407d5d5 = true);
	}

	label10981:

	if (!(0 < count($B3bc639acac56bf5))) {
		goto label11041;
	}

	deleteStreams($B3bc639acac56bf5, true);
	goto label11041;

	label10993:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b42f717d234fde64[intval($Fb9da1713bff19ce['server_id'])][] = intval($Fb9da1713bff19ce['stream_id']);

		if (in_array(intval($Fb9da1713bff19ce['stream_id']), $D426e89e61729ea8)) {
			goto label11025;
		}

		$D426e89e61729ea8[] = intval($Fb9da1713bff19ce['stream_id']);

		label11025:
	}

	label11027:

	foreach ($B52eea01f3d9954b as $ee6d1fc5d801b43f) {
		if (in_array($ee6d1fc5d801b43f, $D426e89e61729ea8)) {
			goto label11038;
		}

		$B3bc639acac56bf5[] = $ee6d1fc5d801b43f;

		label11038:
	}

	goto label10792;

	label11041:

	goto label10969;

	label11042:

	if (!($c4584835207f1ecb == 'restart')) {
		goto label10939;
	}

	goto label10938;

	label11047:

	goto label11041;

	label11048:

	if (!(0 < count($b42f717d234fde64))) {
		goto label10981;
	}

	goto label10970;

	label11056:

	echo json_encode(['result' => true]);
	exit();
	goto label158;
	goto label11063;
}

label11063:

goto label158;

label11064:

exit();

label11065:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label15477;
}

if ($c4584835207f1ecb == 'reload') {
	goto label12494;
}

goto label12488;

label11075:

$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream_id']);
$C082ca9ed03f473c = intval(XUI::$rRequest['server_id']);
$c4584835207f1ecb = XUI::$rRequest['sub'];

if (in_array($c4584835207f1ecb, ['start', 'stop'])) {
	goto label13386;
}

goto label13568;

label11097:

A486863e198221fa(XUI::$rRequest['e2_id']);
echo json_encode(['result' => true]);
exit();

label11107:

goto label9261;

label11108:

echo json_encode(['result' => true]);
exit();

label11113:

goto label14892;
goto label14882;

label11115:

C24b1B1fDad37c5e($f7107e3a92443147);
echo json_encode(['result' => true]);
exit();

label11123:

goto label14857;

label11124:

foreach (XUI::$rRequest['data'] as $ee6d1fc5d801b43f) {
	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `stream_source` FROM `streams` WHERE `id` = ?;', $ee6d1fc5d801b43f);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label11144;
	}

	$B9869413eae86beb['streams'][] = $b62d6460eb33ea07->get_row();

	label11144:
}

label11146:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
exit();
goto label4199;

label11154:

$Db81435e2146d166 = $b62d6460eb33ea07->num_rows();

label11157:

$b62d6460eb33ea07->query('SELECT `user_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;');
$B9869413eae86beb['online_users'] = $b62d6460eb33ea07->num_rows();
$B9869413eae86beb['open_connections'] = $ce95ea5d02ef202d;
goto label12646;

label11167:

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
goto label13828;

label11171:

if (isset($ba2d146bb5a55097['user'])) {
	goto label9200;
}

goto label9189;

label11175:

$ce95ea5d02ef202d = 0;
goto label11181;

label11177:

$ce95ea5d02ef202d = $b62d6460eb33ea07->get_row()['count'];

label11181:

goto label5296;

label11182:

if (!(0 < count($Bccd07953f314962))) {
	goto label11200;
}

echo d5612f049a8056a5([
	'action'     => 'vod',
	'sub'        => $c4584835207f1ecb,
	'stream_ids' => [$ee6d1fc5d801b43f],
	'servers'    => $Bccd07953f314962,
	'force'      => true
]);
exit();

label11200:

goto label982;

label11201:

if (e589a4BF54a2dAd1('adv', 'manage_events')) {
	goto label11212;
}

echo json_encode(['result' => false]);
exit();

label11212:

goto label6950;

label11213:

$A7ca171405b19571 = XUI::c1F42Ca38ad7a48d(XUI::$rRequest['url']);
if (!(XUI::C6c3738aEEBB9958($A7ca171405b19571) && XUI::$rSettings['api_probe'])) {
	goto label7248;
}

$d24a79ef5aa1793c = parse_url($A7ca171405b19571);
$Dfd95aa1f46fdf22 = $d24a79ef5aa1793c['scheme'] . '://' . $d24a79ef5aa1793c['host'] . ($d24a79ef5aa1793c['port'] ? ':' . $d24a79ef5aa1793c['port'] : '') . '/probe/' . base64_encode($d24a79ef5aa1793c['path']);

if (!($Baba9277b00445b2 = json_decode(XUI::C6CEEc588476Ec43($Dfd95aa1f46fdf22), true))) {
	goto label5501;
}

goto label5488;

label11264:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::B0020c716FDf67Bb($Fb9da1713bff19ce);
}

goto label4342;

label11274:

foreach (XUI::d72c0f56211B6f7C($f7107e3a92443147, NULL, NULL, true, false, false) as $Fd10d59f87b19e71) {
	XUI::B0020C716FDf67BB($Fd10d59f87b19e71);
}

goto label4342;

label11290:

goto label524;

label11291:

goto label6388;

label11292:

echo json_encode(['result' => true, 'bouquets' => $B9869413eae86beb, 'data' => $ba2d146bb5a55097]);

label11299:

exit();

label11300:

goto label104;
goto label5277;

label11302:

foreach ($c65e1c212da2f6fc as $d81ce3a6e68c6760 => $D8e7681dfae2905b) {
	$Dd628d57719ba79c = [
		'text'     => $D8e7681dfae2905b[0]['name'],
		'children' => []
	];

	foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
		$Dd628d57719ba79c['children'][] = ['id' => $Fb9da1713bff19ce['provider_id'] . '_' . $Fb9da1713bff19ce['stream_id'], 'text' => '[' . $Fb9da1713bff19ce['stream_id'] . '] ' . $Fb9da1713bff19ce['stream_display_name']];
	}

	$B9869413eae86beb['items'][] = $Dd628d57719ba79c;
}

label11333:

goto label5618;

label11334:

$B9869413eae86beb['total_count'] += $b62d6460eb33ea07->get_row()['id'];
$b62d6460eb33ea07->query('SELECT COUNT(`mag_id`) AS `id` FROM `mag_devices` WHERE `mac` LIKE ?;', XUI::$rRequest['search'] . '%');
$B9869413eae86beb['total_count'] += $b62d6460eb33ea07->get_row()['id'];
$b62d6460eb33ea07->query('SELECT `id`, IF(`lines`.`is_mag`, `mag_devices`.`mac`, IF(`lines`.`is_e2`, `enigma2_devices`.`mac`, `lines`.`username`)) AS `username` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ? ORDER BY `username` ASC LIMIT ' . (($D7209256c56b1469 - 1) * 100) . ', 100;', XUI::$rRequest['search'] . '%', XUI::$rRequest['search'] . '%', XUI::$rRequest['search'] . '%');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label12005;
}

goto label11992;

label11377:

exit();

label11378:

goto label5473;

label11379:

if (e589a4Bf54A2DaD1('adv', 'folder_watch_settings')) {
	goto label9181;
}

goto label9176;

label11386:

echo json_encode(['result' => false]);
exit();

label11391:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	if (!$Ec379295dc7029e6['server_online']) {
		goto label11410;
	}

	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $Ec379295dc7029e6['id'], time(), json_encode(['action' => 'update_binaries']));

	label11410:
}

goto label5017;

label11413:

$E1902340fde7c04b = $ec80784a08a705f6 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	if (in_array($Fb9da1713bff19ce['user_id'], $ec80784a08a705f6)) {
		goto label11431;
	}

	$ec80784a08a705f6[] = intval($Fb9da1713bff19ce['user_id']);

	label11431:
}

if (!(0 < count($ec80784a08a705f6))) {
	goto label13828;
}

$b62d6460eb33ea07->query('SELECT `id`, `username` FROM `lines` WHERE `id` IN (' . implode(',', $ec80784a08a705f6) . ');');
goto label13818;

label11450:

if (XUI::$rSettings['redis_handler']) {
	goto label477;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(*) AS `count` FROM `lines_live` WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ') AND `hls_end` = 0;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B1e93ae2ae39e1ff[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

goto label476;

label11474:

goto label982;

label11475:

if ($C082ca9ed03f473c == -1) {
	goto label140;
}

echo d5612f049A8056A5([
	'action'     => 'vod',
	'sub'        => $c4584835207f1ecb,
	'stream_ids' => [$ee6d1fc5d801b43f],
	'servers'    => [$C082ca9ed03f473c],
	'force'      => true
]);
exit();
goto label139;

label11491:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$b42f717d234fde64[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['stream_display_name'];
}

label11501:

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $Fd10d59f87b19e71) {
	$F3eeccba3a6d46c3[$f7107e3a92443147]['stream_id'] = $Fd10d59f87b19e71['stream_id'];
	$F3eeccba3a6d46c3[$f7107e3a92443147]['last_active'] = $Fd10d59f87b19e71['date_start'];
	$F3eeccba3a6d46c3[$f7107e3a92443147]['online'] = true;
	$b2bece9f771275c2[] = intval($Fd10d59f87b19e71['stream_id']);
}

goto label13957;

label11524:

$B19973b37155645f = ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'];

label11525:
if (!(isset(XUI::$rRequest['server']) && isset(XUI::$rRequest['dir']))) {
	goto label15276;
}

echo json_encode(['result' => true, 'data' => e3845984369e03A9(intval(XUI::$rRequest['server']), XUI::$rRequest['dir'], $B19973b37155645f)]);
exit();
goto label15276;

label11554:

if ($c4584835207f1ecb == 'ban') {
	goto label9642;
}

if ($c4584835207f1ecb == 'unban') {
	goto label15623;
}

if ($c4584835207f1ecb == 'convert') {
	goto label14269;
}

if ($c4584835207f1ecb == 'kill') {
	goto label11808;
}

echo json_encode(['result' => false]);
goto label11806;

label11571:

$b41097c951ee83d3 = new TMDB($f1dcaed925076e67['tmdb_api_key'], $f1dcaed925076e67['tmdb_language']);

label11578:

goto label12959;

label11579:

goto label12951;

label11580:

goto label982;
goto label106;

label11582:

echo json_encode(['result' => false]);
exit();

label11587:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label4727;
}

goto label4752;

label11594:

goto label15241;

label11595:

if (E589a4bf54A2DAd1('adv', 'edit_bouquet')) {
	goto label4816;
}

echo json_encode(['result' => false]);
goto label4815;

label11606:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];

if (!isset(XUI::$rRequest['search'])) {
	goto label11333;
}

if (isset(XUI::$rRequest['page'])) {
	goto label774;
}

$D7209256c56b1469 = 1;
goto label773;

label11618:

goto label11623;

label11619:

$B9869413eae86beb['total_users'] = XUI::$rSettings['total_users'];

label11623:

goto label849;

label11624:

exit();

label11625:

goto label188;

label11626:
if (!(!e589A4BF54a2DAd1('adv', 'add_stream') && !E589a4Bf54A2dAD1('adv', 'edit_stream'))) {
	goto label9443;
}

goto label9438;

label11642:

if (XUI::$rRequest['action'] == 'stream') {
	goto label983;
}

if (XUI::$rRequest['action'] == 'movie') {
	goto label106;
}

if (XUI::$rRequest['action'] == 'episode') {
	goto label14858;
}

if (XUI::$rRequest['action'] == 'line') {
	goto label5996;
}

if (XUI::$rRequest['action'] == 'line_activity') {
	goto label5938;
}

goto label1100;

label11668:

echo json_encode(['result' => true]);
exit();

label11673:

goto label7961;
goto label1021;

label11675:
if ((0 < $fb361b5f838abd3c['abitrate']) && (0 < $fb361b5f838abd3c['vbitrate'])) {
	goto label11685;
}

$Bf1105c589a3fe51 = 'N/A';
goto label4675;

label11685:

$Bf1105c589a3fe51 = intval(($fb361b5f838abd3c['abitrate'] + $fb361b5f838abd3c['vbitrate']) / 1024);
goto label4675;

label11694:

$C98047839de3d474 = confirmIDs($C98047839de3d474);

if (!(0 < count($C98047839de3d474))) {
	goto label13958;
}

if (XUI::$rSettings['redis_handler']) {
	goto label12885;
}

$b62d6460eb33ea07->query('SELECT `lines_live`.`user_id`, `lines_live`.`stream_id`, `lines_live`.`date_start` AS `last_active`, `streams`.`stream_display_name` FROM `lines_live` LEFT JOIN `streams` ON `streams`.`id` = `lines_live`.`stream_id` INNER JOIN (SELECT `user_id`, MAX(`date_start`) AS `ts` FROM `lines_live` GROUP BY `user_id`) `maxt` ON (`lines_live`.`user_id` = `maxt`.`user_id` AND `lines_live`.`date_start` = `maxt`.`ts`) WHERE `lines_live`.`hls_end` = 0 AND `lines_live`.`user_id` IN (' . implode(',', $C98047839de3d474) . ');');
goto label14297;

label11719:

$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;', $A5672c717a6d107d['user_id']);
XUI::ccb5075C679e7314($A5672c717a6d107d['user_id']);
echo json_encode(['result' => true]);
exit();

label11733:

goto label9621;

label11734:

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'cache.php');
echo json_encode(['result' => true]);
exit();

label11747:

goto label12749;
goto label5840;

label11749:

XUI::ccb5075c679E7314($f7107e3a92443147);
echo json_encode(['result' => true]);
exit();

label11757:

goto label13583;
goto label13555;

label11759:

$Bf508e08aecfc95f = $b41097c951ee83d3->getMovie($Abcb228699a7f743);
$D577b2a7889a5fb6 = json_decode($Bf508e08aecfc95f->getJSON(), true);
$D577b2a7889a5fb6['trailer'] = $Bf508e08aecfc95f->getTrailer();

label11774:

goto label279;

label11775:

bAe6b79F4a41Ee46(XUI::$rRequest['code_id']);
echo json_encode(['result' => true]);
exit();

label11785:

goto label14752;

label11786:

if (XUI::$rSettings['redis_handler']) {
	goto label12404;
}

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0;', $C082ca9ed03f473c);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label11805;
}

$B9869413eae86beb['open_connections'] = $b62d6460eb33ea07->get_row()['count'];

label11805:

goto label15303;

label11806:

exit();
goto label123;

label11808:

if (XUI::$rSettings['redis_handler']) {
	goto label15052;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` = ?;', $e37d504062f6c301['user_id']);
goto label15042;

label11818:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
exit();

label11825:

goto label9094;

label11826:

goto label7991;

label11827:

goto label7730;

label11828:
if (!(!E589A4bF54A2daD1('adv', 'add_server') && !e589A4bF54a2DaD1('adv', 'edit_server'))) {
	goto label1203;
}

echo json_encode(['result' => false]);
exit();
goto label1203;

label11849:

$D7209256c56b1469 = intval(XUI::$rRequest['page']);

label11855:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `id` FROM `streams` WHERE `stream_display_name` LIKE ?;', '%' . XUI::$rRequest['search'] . '%');
$B9869413eae86beb['total_count'] = $b62d6460eb33ea07->get_row()['id'];
$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `stream_display_name` LIKE ? ORDER BY `stream_display_name` ASC LIMIT ' . (($D7209256c56b1469 - 1) * 100) . ', 100;', '%' . XUI::$rRequest['search'] . '%');
goto label12671;

label11881:

goto label11902;

label11882:

foreach (XUI::D72c0F56211B6F7C(NULL, $C082ca9ed03f473c == -1 ? NULL : $C082ca9ed03f473c, $ee6d1fc5d801b43f, true, false, false) as $Fd10d59f87b19e71) {
	XUI::b0020c716FDf67BB($Fd10d59f87b19e71);
}

label11902:

goto label12984;

label11903:

exit();
goto label4663;

label11905:

if (d2a972e2Ce69c23B('/' . $aae4eee56abeed7c . '.sql', $F48d5724f3b4ec96)) {
	goto label4663;
}

echo json_encode(['result' => false]);
goto label4662;

label11918:

if (e589a4BF54a2dad1('adv', 'edit_cat')) {
	goto label11929;
}

echo json_encode(['result' => false]);
exit();

label11929:

goto label4842;

label11930:

exit();
goto label15241;

label11932:

Ae08CDa9f888114f(XUI::$rRequest['bouquet_id']);
echo json_encode(['result' => true]);
goto label15240;

label11942:

if (isset(XUI::$rRequest['url'])) {
	goto label14500;
}

$fe93a43f53d92a4e = f260b7A31F021E39(XUI::$rRequest['stream']);
$A508fa583604eb49 = b2be0b935A31Df18(XUI::$rRequest['stream']);

if (0 < strlen($A508fa583604eb49[1]['value'])) {
	goto label9728;
}

$Bc11ab076e603a99 = '';
goto label9727;

label11968:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label7759;
}

echo json_encode(['result' => false]);
exit();
goto label7758;

label11980:

if (E589A4bF54a2dad1('adv', 'folder_watch_settings')) {
	goto label11991;
}

echo json_encode(['result' => false]);
exit();

label11991:

goto label14893;

label11992:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B9869413eae86beb['items'][] = ['id' => $Fb9da1713bff19ce['id'], 'text' => $Fb9da1713bff19ce['username']];
}

label12005:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
goto label4387;

label12012:

exit();

label12013:

goto label12808;

label12014:

$b7319702635da556 = str_replace([':', '|', '-', ' hd', ' fhd', ' 4k', ' sd'], ['#', '#', '#', '', '', '', ''], strtolower(XUI::$rRequest['name']));
goto label7887;

label12026:

echo json_encode(['result' => true]);
exit();

label12031:

goto label5486;

label12032:

goto label9757;

label12033:

exit();

label12034:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label14709;
}

if (in_array($c4584835207f1ecb, ['is_trial', 'is_official', 'can_gen_mag', 'can_gen_e2', 'only_mag', 'only_e2'])) {
	goto label14353;
}

goto label14347;

label12047:

if ($c4584835207f1ecb == 'delete') {
	goto label12056;
}

echo json_encode(['result' => false]);
exit();
goto label12920;

label12056:

goto label12910;

label12057:

$A66eee85d9566710 = intval(trim(shell_exec('pgrep -U xui | xargs ps -f -p | grep cache_handler | grep -v grep | grep -v pgrep | wc -l')));

if (!($A66eee85d9566710 == 0)) {
	goto label12079;
}

shell_exec(PHP_BIN . ' ' . CLI_PATH . 'cache_handler.php > /dev/null 2>/dev/null &');

label12079:

echo json_encode(['result' => true]);
goto label12748;

label12084:

goto label15281;

label12085:
if (!(!E589a4Bf54a2DAd1('adv', 'add_episode') && !E589A4BF54a2daD1('adv', 'edit_episode') && !e589a4Bf54A2DaD1('adv', 'add_movie') && !E589a4BF54A2dAD1('adv', 'edit_movie') && !E589a4bF54a2DAD1('adv', 'create_channel') && !e589A4Bf54a2dAD1('adv', 'edit_cchannel') && !e589A4Bf54a2Dad1('adv', 'folder_watch_add'))) {
	goto label8681;
}

echo json_encode(['result' => false]);
exit();
goto label8681;

label12141:

if (XUI::$rRequest['action'] == 'report_epg') {
	goto label12809;
}

if (XUI::$rRequest['action'] == 'guess_epg') {
	goto label12014;
}

if (XUI::$rRequest['action'] == 'rtmp_kill') {
	goto label9811;
}

if (XUI::$rRequest['action'] == 'install_status') {
	goto label12338;
}
if ((XUI::$rRequest['action'] == 'reinstall_server') && !$E0a8102c8d2ef5b6 && !$a76857631510ce75) {
	goto label1185;
}

goto label12217;

label12173:

$Bc11ab076e603a99 = '';
goto label12182;

label12175:

$Bc11ab076e603a99 = ' -user_agent ' . escapeshellarg(XUI::$rRequest['ua']);

label12182:

goto label7087;

label12183:

include XUI_HOME . 'includes/libs/tmdb.php';

if (0 < strlen(XUI::$rRequest['language'])) {
	goto label13185;
}

if (0 < strlen($f1dcaed925076e67['tmdb_language'])) {
	goto label13177;
}

$b41097c951ee83d3 = new TMDB($f1dcaed925076e67['tmdb_api_key']);
goto label13184;
goto label13177;

label12208:

if ($E2461a25530fd8a2) {
	goto label12216;
}

echo json_encode(['result' => false]);
exit();
goto label363;

label12216:

goto label352;

label12217:

if (XUI::$rRequest['action'] == 'fpm_status') {
	goto label6287;
}
if ((XUI::$rRequest['action'] == 'update_all_servers') && !$E0a8102c8d2ef5b6 && !$a76857631510ce75) {
	goto label5023;
}
if ((XUI::$rRequest['action'] == 'update_all_binaries') && !$E0a8102c8d2ef5b6 && !$a76857631510ce75) {
	goto label15537;
}

if (XUI::$rRequest['action'] == 'disable_watch') {
	goto label5474;
}

if (XUI::$rRequest['action'] == 'enable_watch') {
	goto label11379;
}

goto label14538;

label12255:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label12278;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B9869413eae86beb['items'][] = ['id' => $Fb9da1713bff19ce['id'], 'text' => '[' . $Fb9da1713bff19ce['id'] . '] ' . $Fb9da1713bff19ce['stream_display_name']];
}

label12278:

goto label14602;

label12279:

$D7209256c56b1469 = intval(XUI::$rRequest['page']);

label12285:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `id` FROM `streams` WHERE (`stream_display_name` LIKE ? OR `id` LIKE ?) AND `type` = 1;', '%' . XUI::$rRequest['search'] . '%', XUI::$rRequest['search'] . '%');
$B9869413eae86beb['total_count'] = $b62d6460eb33ea07->get_row()['id'];
$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE (`stream_display_name` LIKE ? OR `id` LIKE ?) AND `type` = 1 ORDER BY `stream_display_name` ASC LIMIT ' . (($D7209256c56b1469 - 1) * 100) . ', 100;', '%' . XUI::$rRequest['search'] . '%', XUI::$rRequest['search'] . '%');
goto label12255;

label12319:

goto label124;

label12320:

$e02ff34f7d898a7b = $b41097c951ee83d3->searchMovie($f23658ae5c2456c3);

foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
	$F36e7d4d6716c100[] = json_decode($D577b2a7889a5fb6->getJSON(), true);
}

goto label124;

label12337:

goto label9810;

label12338:
if (!(!e589a4bf54a2Dad1('adv', 'add_server') && !E589a4Bf54A2Dad1('adv', 'edit_server'))) {
	goto label7327;
}

echo json_encode(['result' => false]);
exit();
goto label7327;

label12359:

goto label5041;

label12360:

if (E589a4BF54a2daD1('adv', 'folder_watch')) {
	goto label5892;
}

echo json_encode(['result' => false]);
goto label5891;

label12371:

echo json_encode(['result' => false]);
exit();

label12376:

$A7ca171405b19571 = pathinfo('http://127.0.0.1:' . $Bcf70cba56392975[SERVER_ID]['http_broadcast_port'] . $_SERVER['REQUEST_URI'])['dirname'] . '/table';
set_time_limit(60);
goto label5794;

label12393:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label12403;
}

$B9869413eae86beb['online_users'] = $b62d6460eb33ea07->num_rows();

label12403:

goto label70;

label12404:

goto label45;

label12405:

goto label7;

label12406:

if (E589A4bf54A2DAd1('adv', 'add_episode')) {
	goto label9908;
}

echo json_encode(['result' => false]);
goto label9907;

label12417:

exit();

label12418:

goto label653;

label12419:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $A5672c717a6d107d['user_id']);
goto label644;

label12425:

if (e589A4bF54A2Dad1('adv', 'add_code')) {
	goto label12436;
}

echo json_encode(['result' => false]);
exit();

label12436:

goto label8380;

label12437:

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `stream_id` = ?;', $ee6d1fc5d801b43f);

label12441:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::b0020C716fDf67Bb($Fb9da1713bff19ce);
}

goto label704;

label12451:

if ($c4584835207f1ecb == 'kill') {
	goto label5016;
}

if ($c4584835207f1ecb == 'purge') {
	goto label15243;
}

echo json_encode(['result' => false]);
exit();
goto label5015;
goto label15243;

label12464:

exit();

label12465:

$c4584835207f1ecb = XUI::$rRequest['sub'];
$A5672c717a6d107d = A32d85AEfA28959D(intval(XUI::$rRequest['mag_id']));

if ($c4584835207f1ecb == 'delete') {
	goto label4561;
}

goto label8095;

label12481:

echo json_encode(['result' => true]);
exit();

label12486:

goto label9261;
goto label9233;

label12488:

echo json_encode(['result' => false]);
exit();
goto label15476;

label12494:

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'epg.php "' . intval(XUI::$rRequest['epg_id']) . '" > /dev/null 2>/dev/null &');
goto label15471;

label12510:

exit();
goto label4341;

label12512:

$b62d6460eb33ea07->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $E8f21e009ba7a8c5, $Caf4325605347834['id']);
$b62d6460eb33ea07->query('INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);', $Caf4325605347834['id'], $E59d0debc75e7be8['id'], XUI::$rRequest['credits'], time(), XUI::$rRequest['reason']);
goto label4336;

label12535:

$Fe2ee13c1d643ec7 = abs(intval(XUI::$rSettings['stream_max_analyze']));
$F7379362daea673f = intval($Fe2ee13c1d643ec7 / 1000000) + XUI::$rSettings['probe_extra_wait'];
set_time_limit(intval($F7379362daea673f));
ini_set('max_execution_time', intval($F7379362daea673f));
ini_set('default_socket_timeout', intval($F7379362daea673f));
goto label11942;

label12573:

$Abcb228699a7f743 = intval(XUI::$rRequest['id']);

if (isset($Bcf70cba56392975[$Abcb228699a7f743])) {
	goto label365;
}

echo json_encode(['result' => false]);
exit();
goto label364;

label12588:
if ((0 < $fb361b5f838abd3c['abitrate']) && (0 < $fb361b5f838abd3c['vbitrate'])) {
	goto label12598;
}

$Bf1105c589a3fe51 = 'N/A';
goto label14431;

label12598:

$Bf1105c589a3fe51 = intval(($fb361b5f838abd3c['abitrate'] + $fb361b5f838abd3c['vbitrate']) / 1024);
goto label14431;

label12607:
if (!(!e589a4BF54A2dAd1('adv', 'add_stream') && !e589A4bF54a2dad1('adv', 'edit_stream'))) {
	goto label12627;
}

echo json_encode(['result' => false]);
exit();

label12627:

goto label12535;

label12628:

echo json_encode(['result' => false]);
exit();

label12633:

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php "force"');
echo json_encode(['result' => true]);
goto label13023;

label12646:

$E32385d980d2da52 = $dc4ea959550b2e88 = $ad5262de2430eda4 = $Bbf6067f0af4f59b = $Ad3bf144a105a86e = [];
$b62d6460eb33ea07->query('SELECT `server_id`, COUNT(*) AS `count` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `server_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Ad3bf144a105a86e[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['count']);
}

goto label5852;

label12671:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label12690;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B9869413eae86beb['items'][] = ['id' => $Fb9da1713bff19ce['id'], 'text' => $Fb9da1713bff19ce['stream_display_name']];
}

label12690:

goto label15702;

label12691:
if (!(isset(XUI::$rRequest['id']) && (0 < intval(XUI::$rRequest['id'])))) {
	goto label5787;
}

$b62d6460eb33ea07->query('DELETE FROM `streams_logs` WHERE `stream_id` = ?;', XUI::$rRequest['id']);
echo json_encode(['result' => true]);
exit();
goto label5787;

label12716:

if (XUI::$rSettings['redis_handler']) {
	goto label6032;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `server_id` = ?;', XUI::$rRequest['server_id']);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::b0020c716fdf67Bb($Fb9da1713bff19ce);
}

goto label6031;

label12736:

echo json_encode(['result' => false]);
exit();
goto label11673;

label12742:

C43c3cE5C5838F3d(XUI::$rRequest['ip']);
goto label11668;

label12748:

exit();

label12749:

goto label13024;

label12750:

if (E589a4bf54a2DAd1('adv', 'backups')) {
	goto label12633;
}

goto label12628;

label12757:

if (E589A4BF54A2Dad1('adv', 'edit_stream')) {
	goto label12768;
}

echo json_encode(['result' => false]);
exit();

label12768:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];
goto label13887;

label12770:

$b62d6460eb33ea07->query('UPDATE `servers` SET `enable_proxy` = 0 WHERE `id` = ?;', XUI::$rRequest['server_id']);
echo json_encode(['result' => true]);
exit();

label12781:

goto label7715;
goto label7704;

label12783:
if (!(isset(XUI::$rRequest['id']) && (0 < intval(XUI::$rRequest['id'])))) {
	goto label12806;
}

deleteRecording(XUI::$rRequest['id']);
echo json_encode(['result' => true]);
exit();

label12806:

goto label1638;

label12807:

exit();

label12808:

goto label1079;

label12809:

goto label7281;

label12810:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];
$cbc633376c324db1 = [
	'lines'           => ['Lines', 'line?id=', '`username`, `admin_notes`, `reseller_notes`, `last_ip`, `contact`', 'id', 'username'],
	'mag_devices'     => ['MAG Devices', 'mag?id=', '`mac_filter`, `ip`', 'mag_id', 'mac'],
	'enigma2_devices' => ['Enigma2 Devices', 'enigma?id=', '`mac_filter`, `public_ip`', 'device_id', 'mac'],
	'users'           => ['Users', 'user?id=', '`username`, `email`, `ip`, `notes`, `reseller_dns`', 'id', 'username'],
	'streams'         => ['Streams, Movies & Episodes', 'stream_view?id=', '`stream_display_name`, `stream_source`, `notes`, `channel_id`', 'id', 'stream_display_name'],
	'streams_series'  => ['TV Series', 'serie?id=', '`title`, `plot`, `cast`, `director`', 'id', 'title']
];
$Cc2b5dfe75dc164b = 100;
$f23658ae5c2456c3 = strtolower(preg_replace('/[^[:alnum:][:space:]]/u', '', XUI::$rRequest['search']));
$e24dfec9cf5fd3a2 = strtolower(preg_replace('/[^[:alnum:][:space:]]/u', ' ', XUI::$rRequest['search']));
goto label13401;

label12836:

goto label13881;

label12837:

$c4620a212189e773 = intval(XUI::$rRequest['force_id']);
$Bccd07953f314962 = array_keys(b25f6F50DFa04Eb7($ee6d1fc5d801b43f));

if (!(0 < count($Bccd07953f314962))) {
	goto label7046;
}

goto label7033;

label12858:

echo json_encode(['result' => false]);
exit();
goto label9056;

label12864:

Eb09d3583Fd7e3D6(XUI::$rRequest['hmac_id']);
goto label9051;

label12870:

exit();

label12871:

goto label9844;

label12872:

if (!is_numeric(XUI::$rRequest['server_id'])) {
	goto label13261;
}

goto label13253;

label12881:

goto label12883;

label12882:

$ba2d146bb5a55097 = '<strong>No response from status page.</strong>';

label12883:

goto label1177;

label12884:

goto label13958;

label12885:

$f104f5a2d297abd1 = XUI::a96aB74f1921d4AD($C98047839de3d474, true);
$B692d6e1f0cf1f67 = XUI::getFirstConnection($C98047839de3d474);
$ab41a6d312cb92e9 = [];
goto label9584;

label12896:

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `stream_id` = ?;', $ee6d1fc5d801b43f);

label12900:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::B0020c716fDf67bB($Fb9da1713bff19ce);
}

goto label11881;

label12910:

dbBE1508Fa3e591f(XUI::$rRequest['series_id']);
echo json_encode(['result' => true]);
exit();

label12920:

goto label9140;

label12921:

XUI::cCb5075C679E7314($e37d504062f6c301['user_id']);
echo json_encode(['result' => true]);
exit();

label12930:

goto label11107;
goto label11097;

label12932:

shell_exec('kill -9 ' . $C98e11437faf4199);
shell_exec(PHP_BIN . ' ' . CLI_PATH . 'watchdog.php > /dev/null 2>/dev/null &');

label12945:

echo json_encode(['result' => true]);
exit();
goto label1682;

label12951:

$b41097c951ee83d3 = new TMDB($f1dcaed925076e67['tmdb_api_key'], XUI::$rRequest['language']);

label12959:
if (!(is_numeric($f23658ae5c2456c3) && in_array(XUI::$rRequest['type'], ['movie', 'series', 'episode']))) {
	goto label8589;
}

if (XUI::$rRequest['type'] == 'movie') {
	goto label5936;
}

if (XUI::$rRequest['type'] == 'series') {
	goto label5924;
}

goto label7060;

label12984:

echo json_encode(['result' => true]);
exit();

label12989:

goto label13310;

label12990:

goto label13300;

label12991:

goto label981;

label12992:

if (e589a4BF54a2DAd1('adv', 'process_monitor')) {
	goto label963;
}
echo json_encode(['result' => false]);
exit();
goto label963;

label13004:

$E0da44805287aa37 = explode('#', $b7319702635da556);
usort($E0da44805287aa37, function($a5fd10913e5b22d3, $bbbe5eca9c8056cb) {
	return strlen($a5fd10913e5b22d3) < strlen($bbbe5eca9c8056cb);
});
$A3aa81b5d3e27866 = $E0da44805287aa37[0];

label13016:

$A3aa81b5d3e27866 = preg_replace('/[^A-Za-z0-9 ]/', '', $A3aa81b5d3e27866);
goto label15544;

label13023:

exit();

label13024:

goto label12486;

label13025:

if (E589A4BF54a2Dad1('adv', 'manage_events')) {
	goto label8525;
}

goto label8520;

label13032:

if (e589a4bF54A2dad1('adv', 'edit_server')) {
	goto label13043;
}

echo json_encode(['result' => false]);
exit();

label13043:

$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label4855;

label13047:

$B9869413eae86beb['online_users'] = XUI::$rSettings['total_users'];
goto label1703;

label13052:

$C082ca9ed03f473c = intval(XUI::$rRequest['server_id']);
goto label9407;

label13059:

$D8329ce54de87aa5 = json_decode(shell_exec($C6671ac66a4f1c57), true);

foreach ($D8329ce54de87aa5 as $Edde4f026eed2148 => $e61e6dcee1252fa2) {
	if (!isset($e61e6dcee1252fa2['episode'])) {
		goto label13101;
	}

	if (is_array($e61e6dcee1252fa2['episode'])) {
		goto label13092;
	}

	$B9869413eae86beb[] = [$Edde4f026eed2148, intval($e61e6dcee1252fa2['episode'])];
	goto label13101;

	label13092:

	$B9869413eae86beb[] = [$Edde4f026eed2148, intval($e61e6dcee1252fa2['episode'][0])];

	label13101:
}

echo json_encode(['result' => true, 'data' => $B9869413eae86beb]);
goto label1;

label13110:

if (XUI::$rRequest['action'] == 'enigma') {
	goto label9233;
}

if (XUI::$rRequest['action'] == 'mag_event') {
	goto label13025;
}

if (XUI::$rRequest['action'] == 'regenerate_cache') {
	goto label12750;
}

if (XUI::$rRequest['action'] == 'enable_cache') {
	goto label5840;
}

if (XUI::$rRequest['action'] == 'disable_cache') {
	goto label13604;
}

goto label14963;

label13136:
if ((0 < strlen(XUI::$rRequest['id'])) && !is_numeric(XUI::$rRequest['id'])) {
	goto label13159;
}

$Abcb228699a7f743 = intval(XUI::$rRequest['id']);
goto label1487;

label13159:

$b62d6460eb33ea07->query('SELECT `stationId` FROM `epg_api` WHERE `callSign` = ?;', XUI::$rRequest['id']);
goto label1473;

label13166:

EB37711a9250a829(XUI::$rRequest['package_id']);
echo json_encode(['result' => true]);
exit();

label13176:

goto label14448;

label13177:

$b41097c951ee83d3 = new TMDB($f1dcaed925076e67['tmdb_api_key'], $f1dcaed925076e67['tmdb_language']);

label13184:

goto label5262;

label13185:

goto label5254;

label13186:

$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;', $e37d504062f6c301['user_id']);
XUI::ccb5075C679E7314($e37d504062f6c301['user_id']);
echo json_encode(['result' => true]);
exit();

label13200:

goto label8764;

label13201:

$Fca04b1755da7bd5['isp'] = $b3295e009ed68643->get($b38e11ffdc6a3abb);
$b3295e009ed68643->close();

label13208:

$Fca04b1755da7bd5['type'] = NULL;

if (!$Fca04b1755da7bd5['isp']['autonomous_system_number']) {
	goto label1429;
}

goto label4021;

label13216:

goto label13995;

label13217:

$b62d6460eb33ea07->query('DELETE FROM `queue` WHERE `id` = ?;', XUI::$rRequest['id']);
echo json_encode(['result' => true]);
goto label13994;

label13228:

$D577b2a7889a5fb6 = [json_decode($b41097c951ee83d3->getMovie($f23658ae5c2456c3)->getJSON(), true)];

label13239:

if (!is_array($D577b2a7889a5fb6)) {
	goto label8589;
}

echo json_encode(['result' => true, 'data' => $D577b2a7889a5fb6]);
exit();
goto label8589;

label13253:

$Fe53bcd53690fff4 = [intval(XUI::$rRequest['server_id'])];
goto label13268;

label13261:

$Fe53bcd53690fff4 = json_decode(XUI::$rRequest['server_id'], true);

label13268:

goto label9824;

label13269:

$f7107e3a92443147 = intval(XUI::$rRequest['user_id']);
$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label4072;
}

if ($c4584835207f1ecb == 'enable') {
	goto label13584;
}

goto label322;

label13285:

$E2461a25530fd8a2 = d8eC9843fc5457df(XUI::$rRequest['folder_id']);

if ($E2461a25530fd8a2) {
	goto label5514;
}

echo json_encode(['result' => false]);
exit();
goto label5525;
goto label5514;

label13300:

XUI::B0020c716fDf67bB(XUI::$rRequest['stream_id']);
echo json_encode(['result' => true]);
exit();

label13310:

goto label13602;
goto label13592;

label13312:

$ec80784a08a705f6 = confirmIDs($ec80784a08a705f6);

if (!(0 < count($ec80784a08a705f6))) {
	goto label6699;
}

$b62d6460eb33ea07->query('SELECT `owner_id`, COUNT(*) AS `count` FROM `users` WHERE `owner_id` IN (' . implode(',', $ec80784a08a705f6) . ') GROUP BY `owner_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$fd4ac8a686a5a700[$Fb9da1713bff19ce['owner_id']] = $Fb9da1713bff19ce['count'];
}

goto label6680;

label13343:

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'providers.php "' . intval(XUI::$rRequest['id']) . '" > /dev/null 2>/dev/null &');
echo json_encode(['result' => true]);
exit();

label13363:

goto label7560;
goto label7550;

label13365:

exit();

label13366:

goto label6403;

label13367:

if (E589a4bF54A2DAD1('adv', 'import_streams')) {
	goto label14576;
}

goto label14571;

label13374:

$d14a20b240a88fb2 = [];

if (isset(XUI::$rRequest['server_id'])) {
	goto label424;
}

$b62d6460eb33ea07->query('SELECT `server_id`, `time`, `cpu`, `iostat_info`, `total_mem_used_percent`, `connections`, `streams`, `users`, `total_users`, `bytes_received`, `bytes_sent` FROM `servers_stats` WHERE `server_id` IN (SELECT `id` FROM `servers` WHERE `server_type` = 0) AND `time` >= ? ORDER BY `time` DESC;', $fa59d8fa25ff8bf2);
goto label431;
goto label424;

label13385:

goto label11580;

label13386:

if ($C082ca9ed03f473c == -1) {
	goto label9721;
}

echo d5612F049a8056A5([
	'action'     => 'vod',
	'sub'        => $c4584835207f1ecb,
	'stream_ids' => [$ee6d1fc5d801b43f],
	'servers'    => [$C082ca9ed03f473c],
	'force'      => true
]);
goto label9719;

label13401:

if (empty($e24dfec9cf5fd3a2)) {
	goto label4014;
}

$c299da94f66c1d36 = [];

foreach ($cbc633376c324db1 as $b5a93f3474101e1f => $C7af3e63901b4f3c) {
	if ($b5a93f3474101e1f == 'streams') {
		goto label13439;
	}

	$b62d6460eb33ea07->query('SELECT `' . $b5a93f3474101e1f . ('`.*, MATCH(' . $C7af3e63901b4f3c[2] . ') AGAINST (? IN BOOLEAN MODE) AS `score1`, MATCH(' . $C7af3e63901b4f3c[2] . ') AGAINST (? IN BOOLEAN MODE) AS `score2` FROM `') . $b5a93f3474101e1f . ('` WHERE MATCH(' . $C7af3e63901b4f3c[2] . ') AGAINST (? IN BOOLEAN MODE) ORDER BY `score1` + `score2` DESC LIMIT ') . $Cc2b5dfe75dc164b . ';', $e24dfec9cf5fd3a2, $e24dfec9cf5fd3a2 . '*', $e24dfec9cf5fd3a2 . '*');
	goto label13468;

	label13439:

	$b62d6460eb33ea07->query('SELECT `' . $b5a93f3474101e1f . ('`.*, MATCH(' . $C7af3e63901b4f3c[2] . ') AGAINST (? IN BOOLEAN MODE) AS `score1`, MATCH(' . $C7af3e63901b4f3c[2] . ') AGAINST (? IN BOOLEAN MODE) AS `score2` FROM `') . $b5a93f3474101e1f . ('` WHERE MATCH(' . $C7af3e63901b4f3c[2] . ') AGAINST (? IN BOOLEAN MODE) OR `id` = ? ORDER BY `score1` + `score2` DESC LIMIT ') . $Cc2b5dfe75dc164b . ';', $e24dfec9cf5fd3a2, $e24dfec9cf5fd3a2 . '*', $e24dfec9cf5fd3a2 . '*', intval($f23658ae5c2456c3));

	label13468:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label13492;

		label13475:

		$F1262e9f245b97e6 = 1000;

		label13476:

		$Fb9da1713bff19ce['score'] = $Fb9da1713bff19ce['score1'] + $Fb9da1713bff19ce['score2'] + $F1262e9f245b97e6;
		$Fb9da1713bff19ce['table'] = $b5a93f3474101e1f;
		$c299da94f66c1d36[] = $Fb9da1713bff19ce;
		goto label13489;

		label13489:

		goto label13540;

		label13492:

		similar_text($f23658ae5c2456c3, strtolower(preg_replace('/[^[:alnum:][:space:]]/u', '', $Fb9da1713bff19ce[$C7af3e63901b4f3c[4]])), $F1262e9f245b97e6);
		if (!(($b5a93f3474101e1f == 'streams') && ($Fb9da1713bff19ce['id'] == intval($f23658ae5c2456c3)))) {
			goto label13521;
		}

		$F1262e9f245b97e6 = 1000;

		label13521:

		if (!($f23658ae5c2456c3 == strtolower(preg_replace('/[^[:alnum:][:space:]]/u', '', $Fb9da1713bff19ce[$C7af3e63901b4f3c[4]])))) {
			goto label13476;
		}

		goto label13475;

		label13540:
	}
}

array_multisort(array_column($c299da94f66c1d36, 'score'), SORT_DESC, $c299da94f66c1d36);
goto label8148;

label13555:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $f7107e3a92443147);
XUI::CCb5075c679e7314($f7107e3a92443147);
echo json_encode(['result' => true]);
exit();
goto label13583;

label13568:

if ($c4584835207f1ecb == 'delete') {
	goto label6113;
}

if ($c4584835207f1ecb == 'kill') {
	goto label14882;
}

if ($c4584835207f1ecb == 'purge') {
	goto label6309;
}

echo json_encode(['result' => false]);
exit();
goto label6308;

label13583:

goto label4071;

label13584:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $f7107e3a92443147);
XUI::CCb5075c679E7314($f7107e3a92443147);
goto label4066;

label13592:

FC84E25737908cb5($ee6d1fc5d801b43f, $C082ca9ed03f473c, true);
echo json_encode(['result' => true]);
exit();

label13602:

goto label11474;

label13603:

goto label11747;

label13604:

if (e589A4bF54A2DAD1('adv', 'backups')) {
	goto label14735;
}

echo json_encode(['result' => false]);
exit();
goto label14735;

label13616:

echo json_encode($Bf3377811d8e2b3a, JSON_PARTIAL_OUTPUT_ON_ERROR);
exit();

label13623:

goto label11300;

label13624:

goto label6830;

label13625:

$b62d6460eb33ea07->query('UPDATE `servers` SET `enabled` = 0 WHERE `id` = ?;', XUI::$rRequest['server_id']);
echo json_encode(['result' => true]);
exit();

label13636:

goto label15711;

label13637:

goto label7672;

label13638:

$dec36723d7be7c49 = [];
$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_servers` WHERE `server_id` = ? AND `on_demand` = 0 AND `monitor_pid` > 0 AND `pid` > 0 AND `stream_status` = 0;', XUI::$rRequest['server_id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label6925;
}

goto label6913;

label13652:

$Fe53bcd53690fff4 = json_decode($ba2d146bb5a55097['id'], true);

label13658:

foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
	goto label13662;

	label13662:

	if ($ba2d146bb5a55097['type'] == 'send_msg') {
		goto label13691;
	}

	if ($ba2d146bb5a55097['type'] == 'play_channel') {
		goto label13697;
	}

	if ($ba2d146bb5a55097['type'] == 'reset_stb_lock') {
		goto label13707;
	}

	$ba2d146bb5a55097['need_confirm'] = 0;
	$ba2d146bb5a55097['reboot_portal'] = 0;
	goto label13703;

	label13683:

	$ba2d146bb5a55097['message'] = intval($ba2d146bb5a55097['channel']);

	label13689:

	goto label13715;

	label13691:

	$ba2d146bb5a55097['need_confirm'] = 1;
	goto label13715;

	label13695:

	goto label13689;

	label13697:

	$ba2d146bb5a55097['need_confirm'] = 0;
	$ba2d146bb5a55097['reboot_portal'] = 0;
	goto label13683;

	label13703:

	$ba2d146bb5a55097['message'] = '';
	goto label13695;

	label13707:

	c2789dA0026D2C05($ba2d146bb5a55097['id']);
	goto label13730;
	goto label13695;

	label13715:

	$b62d6460eb33ea07->query('INSERT INTO `mag_events`(`status`, `mag_device_id`, `event`, `need_confirm`, `msg`, `reboot_after_ok`, `send_time`) VALUES (0, ?, ?, ?, ?, ?, ?);', $Abcb228699a7f743, $ba2d146bb5a55097['type'], $ba2d146bb5a55097['need_confirm'], $ba2d146bb5a55097['message'], $ba2d146bb5a55097['reboot_portal'], time());

	label13730:

	goto label13732;

	label13732:
}

echo json_encode(['result' => true]);
goto label7842;

label13739:

$Aa6711f02f4e8165 = intval(XUI::$rRequest['hours']) ?: 3;
$cef812722e0345be = intval(strtotime(XUI::$rRequest['startdate'])) ?: time();
$Cb3142d0e6e76fd5 = $cef812722e0345be + ($Aa6711f02f4e8165 * 3600);
$abac6c68d279439d = floatval(100 / ($Aa6711f02f4e8165 * 60));
$F6a625ab4f31c702 = $A5a4a57a12bb19b3;
goto label6083;

label13771:
if (!(!E589A4bF54A2daD1('adv', 'add_server') && !E589a4bF54A2dAd1('adv', 'edit_server'))) {
	goto label13791;
}

echo json_encode(['result' => false]);
exit();

label13791:

$C082ca9ed03f473c = intval(XUI::$rRequest['server_id']);
goto label15602;

label13798:

$B19973b37155645f = ['srt', 'sub', 'sbv'];

label13799:

goto label11525;

label13800:

goto label11524;

label13801:

echo json_encode(['result' => true]);
exit();

label13806:

goto label11625;
goto label12607;

label13808:

if ($c4584835207f1ecb == 'delete') {
	goto label13817;
}

echo json_encode(['result' => false]);
exit();
goto label524;

label13817:

goto label513;

label13818:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$E1902340fde7c04b[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['username'];
}

label13828:

if (!(0 < count($D8e7681dfae2905b))) {
	goto label4571;
}

goto label14764;

label13836:

if (!isset(XUI::$rRequest['data']['radios'])) {
	goto label13866;
}

foreach (XUI::$rRequest['data']['radios'] as $ee6d1fc5d801b43f) {
	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `type` FROM `streams` WHERE `id` = ? AND `type` = 4;', $ee6d1fc5d801b43f);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label13864;
	}

	$ba2d146bb5a55097 = $b62d6460eb33ea07->get_row();
	$B9869413eae86beb['radios'][] = $ba2d146bb5a55097;

	label13864:
}

label13866:

goto label1041;

label13867:

if ($c4584835207f1ecb == 'kill') {
	goto label12990;
}

if ($c4584835207f1ecb == 'purge') {
	goto label4348;
}

echo json_encode(['result' => false]);
exit();
goto label12989;
goto label4348;

label13880:

exit();

label13881:

goto label6082;

label13882:

if (!($c4584835207f1ecb == 'restart')) {
	goto label9692;
}

goto label9691;

label13887:

if (!isset(XUI::$rRequest['search'])) {
	goto label12278;
}

if (isset(XUI::$rRequest['page'])) {
	goto label13898;
}

$D7209256c56b1469 = 1;
goto label12285;

label13898:

goto label12279;

label13899:

if (e589a4bF54A2dad1('adv', 'edit_server')) {
	goto label13910;
}

echo json_encode(['result' => false]);
exit();

label13910:

if (!is_numeric(XUI::$rRequest['server_id'])) {
	goto label8638;
}

goto label8630;

label13919:

goto label1489;

label13920:

if (E589A4BF54A2dAd1('adv', 'manage_streams')) {
	goto label6724;
}

echo json_encode(['result' => false]);
goto label6723;

label13931:

if (XUI::$rRequest['action'] == 'get_epg') {
	goto label1490;
}

if (XUI::$rRequest['action'] == 'get_programme') {
	goto label13920;
}

if (XUI::$rRequest['action'] == 'queue') {
	goto label795;
}

if (XUI::$rRequest['action'] == 'search') {
	goto label1644;
}

if (XUI::$rRequest['action'] == 'delete_recording') {
	goto label4963;
}

goto label733;

label13957:

unset($B692d6e1f0cf1f67);

label13958:

$b2bece9f771275c2 = confirmIDs($b2bece9f771275c2);

if (!(0 < count($b2bece9f771275c2))) {
	goto label8029;
}

goto label8007;

label13970:

goto label7166;

label13971:

$b62d6460eb33ea07->query('UPDATE `tickets` SET `status` = 1 WHERE `id` = ?;', XUI::$rRequest['ticket_id']);
echo json_encode(['result' => true]);
exit();
goto label7166;

label13983:

D30222255bCFE230(XUI::$rRequest['category_id']);
echo json_encode(['result' => true]);
exit();

label13993:

goto label11594;

label13994:

exit();

label13995:

echo json_encode(['result' => false]);
exit();
goto label13919;

label14001:

if (!file_exists(CIDR_TMP_PATH . $df9ce9bd5a53be95)) {
	goto label14077;
}

$cadd97d85392c96e = json_decode(file_get_contents(CIDR_TMP_PATH . $df9ce9bd5a53be95), true);

foreach ($cadd97d85392c96e as $Eb0a6a5b16cf7dd7 => $ba2d146bb5a55097) {
	goto label14024;

	label14024:
	if (!((ip2long($ba2d146bb5a55097[1]) <= ip2long($b38e11ffdc6a3abb)) && (ip2long($b38e11ffdc6a3abb) <= ip2long($ba2d146bb5a55097[2])))) {
		goto label14056;
	}

	$A377ba6c37a0d3c2 = [];

	if (!$ba2d146bb5a55097[3]) {
		goto label14054;
	}

	$A377ba6c37a0d3c2[] = 'HOSTING';

	label14054:

	goto label14058;

	label14056:

	goto label14075;

	label14058:

	if (!$ba2d146bb5a55097[4]) {
		goto label14065;
	}

	$A377ba6c37a0d3c2[] = 'PROXY';

	label14065:

	$Fca04b1755da7bd5['type'] = implode(', ', $A377ba6c37a0d3c2);
	goto label14077;
	goto label14056;

	label14075:
}

label14077:

goto label1429;

label14078:

goto label4341;

label14079:

if (e589A4Bf54a2DAd1('adv', 'edit_reguser')) {
	goto label9863;
}

echo json_encode(['result' => false]);
exit();
goto label9863;

label14091:

if (!(1000 <= $fb361b5f838abd3c['fps'])) {
	goto label14103;
}

$fb361b5f838abd3c['fps'] = intval($fb361b5f838abd3c['fps'] / 1000);

label14103:

$c7b8b5438b915f8f = $fb361b5f838abd3c['fps'] . '&nbsp;FPS';

label14106:

goto label11675;

label14107:

if ($c4584835207f1ecb == 'reload') {
	goto label14116;
}

echo json_encode(['result' => false]);
exit();
goto label13363;

label14116:

goto label13343;

label14117:

exit();

label14118:

goto label9807;

label14119:

$b62d6460eb33ea07->query('UPDATE `users` SET `status` = 1 WHERE `id` = ?;', XUI::$rRequest['user_id']);
goto label9802;

label14126:

shell_exec(PHP_BIN . ' ' . CLI_PATH . 'signals.php > /dev/null 2>/dev/null &');

label14134:

exec('pgrep -U xui | xargs ps | grep watchdog | awk \'{print $1}\'', $C98e11437faf4199);
if (!((0 < count($C98e11437faf4199)) && is_numeric($C98e11437faf4199[0]))) {
	goto label12945;
}

$C98e11437faf4199 = intval($C98e11437faf4199[0]);
goto label12932;

label14157:

if (!is_numeric(XUI::$rRequest['server_id'])) {
	goto label14173;
}

$Fe53bcd53690fff4 = [intval(XUI::$rRequest['server_id'])];
goto label15640;

label14173:

goto label15633;

label14174:

if (isset($_SESSION['hash'])) {
	goto label914;
}

echo json_encode(['result' => false, 'error' => 'Not logged in']);
exit();
goto label914;

label14184:

$Fca04b1755da7bd5['location']['time'] = $e36d2f5d3c9f0972->format('Y-m-d H:i:s');

label14190:

$b3295e009ed68643->close();

if (!isset(XUI::$rRequest['isp'])) {
	goto label13208;
}

$b3295e009ed68643 = new MaxMind\Db\Reader(GEOISP_BIN);
goto label13201;

label14203:

$B9869413eae86beb['total_count'] = $b62d6460eb33ea07->get_row()['stream_id'];
$b62d6460eb33ea07->query('SELECT `providers`.`name`, `providers_streams`.`provider_id`, `providers_streams`.`stream_id`, `providers_streams`.`stream_display_name` FROM `providers_streams` LEFT JOIN `providers` ON `providers`.`id` = `providers_streams`.`provider_id` WHERE `providers_streams`.`type` = \'live\' AND (`stream_display_name` LIKE ? OR `stream_id` LIKE ?) ORDER BY `stream_display_name` ASC LIMIT ' . (($D7209256c56b1469 - 1) * 100) . ', 100;', '%' . XUI::$rRequest['search'] . '%', XUI::$rRequest['search'] . '%');
$c65e1c212da2f6fc = [];

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label11302;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$c65e1c212da2f6fc[$Fb9da1713bff19ce['provider_id']][] = $Fb9da1713bff19ce;
}

goto label11302;

label14242:

$D7209256c56b1469 = intval(XUI::$rRequest['page']);

label14248:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `id` FROM `lines` WHERE `username` LIKE ? AND `is_e2` = 0 AND `is_mag` = 0;', XUI::$rRequest['search'] . '%');
$B9869413eae86beb['total_count'] = $b62d6460eb33ea07->get_row()['id'];
$b62d6460eb33ea07->query('SELECT COUNT(`device_id`) AS `id` FROM `enigma2_devices` WHERE `mac` LIKE ?;', XUI::$rRequest['search'] . '%');
goto label11334;

label14268:

goto label15622;

label14269:

A486863e198221fA(XUI::$rRequest['e2_id'], false, false, true);
echo json_encode(['result' => true, 'line_id' => $e37d504062f6c301['user']['id']]);
exit();
goto label15622;

label14287:

goto label8146;

label14288:

$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 0 WHERE `id` = ?;', $df9ce9bd5a53be95);
echo json_encode(['result' => true]);
goto label8145;

label14297:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$F3eeccba3a6d46c3[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$F3eeccba3a6d46c3[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];
	$F3eeccba3a6d46c3[$Fb9da1713bff19ce['user_id']]['online'] = true;
	$b2bece9f771275c2[] = intval($Fb9da1713bff19ce['stream_id']);
}

$b62d6460eb33ea07->query('SELECT `user_id`, COUNT(*) AS `count` FROM `lines_live` WHERE `user_id` IN (' . implode(',', array_map('intval', $C98047839de3d474)) . ') AND `hls_end` = 0;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f104f5a2d297abd1[$Fb9da1713bff19ce['user_id']] = $Fb9da1713bff19ce['count'];
}

goto label12884;

label14347:

echo json_encode(['result' => false]);
exit();
goto label14708;

label14353:

$b62d6460eb33ea07->query('UPDATE `users_packages` SET ? = ? WHERE `id` = ?;', $c4584835207f1ecb, XUI::$rRequest['value'], XUI::$rRequest['package_id']);
goto label14703;

label14364:

if (isset(XUI::$rRequest['page'])) {
	goto label14370;
}

$D7209256c56b1469 = 1;
goto label6050;

label14370:

$D7209256c56b1469 = intval(XUI::$rRequest['page']);
goto label6050;

label14377:

set_time_limit(intval($F7379362daea673f));
ini_set('max_execution_time', intval($F7379362daea673f));
ini_set('default_socket_timeout', intval($F7379362daea673f));
$C082ca9ed03f473c = SERVER_ID;
if (!(!empty(XUI::$rRequest['server']) && $Bcf70cba56392975[intval(XUI::$rRequest['server'])]['server_online'])) {
	goto label345;
}

goto label339;

label14415:

if ($c4584835207f1ecb == 'disable_proxy') {
	goto label6228;
}

if ($c4584835207f1ecb == 'kill') {
	goto label12716;
}

if ($c4584835207f1ecb == 'restart') {
	goto label13638;
}

if ($c4584835207f1ecb == 'start') {
	goto label4379;
}

if ($c4584835207f1ecb == 'stop') {
	goto label5413;
}

goto label5407;

label14431:

$d5faa5f11beba133 = '<table class=\'table-data\' style=\'width: 300px;\' align=\'center\'><tbody><tr><td style=\'color: #20a009;width: 34%;\'><i class=\'mdi mdi-image-size-select-large\' data-name=\'mdi-image-size-select-large\'></i></td><td style=\'color: #20a009;width: 23%;\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td style=\'color: #20a009;width: 23%;\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td><td style=\'color: #20a009;width: 23%;\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td></tr><tr><td class=\'double\'>' . $fb361b5f838abd3c['width'] . '&nbsp;x&nbsp;' . $fb361b5f838abd3c['height'] . '</td><td>' . $fb361b5f838abd3c['vcodec'] . '</td><td>' . $fb361b5f838abd3c['acodec'] . '</td><td>' . $c7b8b5438b915f8f . '</td></tr></tbody></table>';

label14446:

echo $d5faa5f11beba133;

label14447:

goto label11624;

label14448:

goto label14600;

label14449:

if (e589a4BF54a2dad1('adv', 'edit_server')) {
	goto label4145;
}

echo json_encode(['result' => false]);
exit();
goto label4145;

label14461:

$c4584835207f1ecb = XUI::$rRequest['sub'];
if (($c4584835207f1ecb == 'block') && filter_var(XUI::$rRequest['ip'], FILTER_VALIDATE_IP)) {
	goto label6008;
}

echo json_encode(['result' => false]);
exit();
goto label7961;
goto label6008;

label14483:

$A7ca171405b19571 = XUI::C1F42ca38AD7a48d(json_decode($fe93a43f53d92a4e['stream_source'], true)[intval(XUI::$rRequest['id'])]);
goto label7494;

label14500:

$A7ca171405b19571 = XUI::c1F42cA38aD7a48D(XUI::$rRequest['url']);

if (isset(XUI::$rRequest['ua'])) {
	goto label12175;
}

goto label12173;

label14511:

shell_exec(PHP_BIN . ' ' . CRON_PATH . 'users.php 1 > /dev/null 2>/dev/null &');
echo json_encode(['result' => true]);
exit();

label14524:

goto label5903;
goto label11980;

label14526:

echo json_encode(['result' => false]);
exit();

label14531:

$B9869413eae86beb = [
	'streams' => [],
	'result'  => true
];

if (!isset(XUI::$rRequest['data'])) {
	goto label11146;
}

goto label11124;

label14538:

if (XUI::$rRequest['action'] == 'disable_plex') {
	goto label8475;
}

if (XUI::$rRequest['action'] == 'enable_plex') {
	goto label5904;
}

if (XUI::$rRequest['action'] == 'plex_sections') {
	goto label11980;
}

if (XUI::$rRequest['action'] == 'enable_handler') {
	goto label1683;
}

if (XUI::$rRequest['action'] == 'disable_handler') {
	goto label34;
}

goto label7910;

label14564:

if (0 < $fb361b5f838abd3c['fps']) {
	goto label14570;
}

$c7b8b5438b915f8f = '--';
goto label7404;

label14570:

goto label7389;

label14571:

echo json_encode(['result' => false]);
exit();

label14576:

$c65e1c212da2f6fc = [];
$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];
goto label1291;

label14579:

if (!($B9869413eae86beb['total_count'] == 0)) {
	goto label14592;
}

$F884ebaff96f2cda = '<div class="card-search text-white">' . "\n\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t" . '<div class="media align-items-center">' . "\n\t\t\t\t\t\t" . '<div class="col-9">' . "\n\t\t\t\t\t\t\t" . '<div>' . "\n\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1 text-truncate">No Results Found</h3>' . "\n\t\t\t\t\t\t\t\t" . '<p class="text-lighter mb-1"><small>Try refining your search or manually locating the content you\'re looking for.</small></p>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '<div class="col-3">' . "\n\t\t\t\t\t\t\t" . '<div class="float-right text-center search-icon-xl mt-1" style="font-size: 72px;"><i class="fe-alert-circle"></i></div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>';
$B9869413eae86beb['items'][] = ['id' => 'no_results', 'url' => NULL, 'text' => 'No Results', 'html' => $F884ebaff96f2cda];

label14592:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
goto label793;

label14599:

exit();

label14600:

goto label11290;

label14601:

goto label13032;

label14602:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
exit();

label14609:

goto label15709;

label14610:

goto label9643;

label14611:

exit();

label14612:

$Ea248c6503c74cd4 = XUI::$rRequest['timezone'] ?: 'Europe/London';
date_default_timezone_set($Ea248c6503c74cd4);
$B9869413eae86beb = [
	'Channels' => []
];
goto label164;

label14622:

if ($c4584835207f1ecb == 'update') {
	goto label9103;
}

if ($c4584835207f1ecb == 'kill') {
	goto label7588;
}

echo json_encode(['result' => false]);
exit();
goto label9102;
goto label7588;

label14635:

foreach (json_decode($ba2d146bb5a55097['bouquets'], true) as $f155fef57262b32a) {
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` WHERE `id` = ?;', $f155fef57262b32a);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label14691;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$B9869413eae86beb[] = ['id' => $Fb9da1713bff19ce['id'], 'bouquet_name' => str_replace('\'', '\\\'', $Fb9da1713bff19ce['bouquet_name']), 'bouquet_channels' => json_decode($Fb9da1713bff19ce['bouquet_channels'], true), 'bouquet_radios' => json_decode($Fb9da1713bff19ce['bouquet_radios'], true), 'bouquet_movies' => json_decode($Fb9da1713bff19ce['bouquet_movies'], true), 'bouquet_series' => json_decode($Fb9da1713bff19ce['bouquet_series'], true)];

	label14691:
}

goto label96;

label14694:

if ($F56066ad7b074468) {
	goto label8625;
}

if ($b120584763e3d117) {
	goto label14702;
}

$b62d6460eb33ea07->query('TRUNCATE `watch_logs`;');
goto label8624;

label14702:

goto label8620;

label14703:

echo json_encode(['result' => true]);
exit();

label14708:

goto label13176;

label14709:

goto label13166;

label14710:

echo json_encode(['result' => false]);
exit();

label14715:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];

if (!isset(XUI::$rRequest['search'])) {
	goto label9133;
}

goto label15227;

label14722:

goto label7203;

label14723:

if (E589a4Bf54a2dAD1('adv', 'epg')) {
	goto label7190;
}

echo json_encode(['result' => false]);
exit();
goto label7190;

label14735:

$b62d6460eb33ea07->query('UPDATE `settings` SET `enable_cache` = 0;');

if (!file_exists(CACHE_TMP_PATH . 'settings')) {
	goto label14751;
}

unlink(CACHE_TMP_PATH . 'settings');

label14751:

goto label11734;

label14752:

goto label13176;

label14753:

if (e589a4bF54a2DAd1('adv', 'edit_package')) {
	goto label12034;
}

echo json_encode(['result' => false]);
goto label12033;

label14764:

set_time_limit(360);
ini_set('max_execution_time', 360);
ini_set('default_socket_timeout', 15);

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label14817;

	label14779:

	$F647a429f8089f01['message'] = $ba2d146bb5a55097['message'];

	label14782:

	goto label14810;

	label14784:

	$F647a429f8089f01['message'] = (XUI::$rSettings['redis_handler'] ? $E1902340fde7c04b[$Fb9da1713bff19ce['user_id']] : $Fb9da1713bff19ce['username']);
	goto label14810;

	label14797:

	$F647a429f8089f01['action'] = 'signal_send';
	$c2a86ea1ba33cb07 = A730C6De034ba241(intval($Fb9da1713bff19ce['server_id']), $F647a429f8089f01);

	label14808:

	goto label14854;

	label14810:

	goto label14815;

	label14812:

	$F647a429f8089f01['message'] = $Fb9da1713bff19ce['uuid'];

	label14815:

	goto label14797;

	label14817:

	if (!in_array($Fb9da1713bff19ce['server_id'], $c87c8c36774fd883)) {
		goto label14808;
	}

	$F647a429f8089f01 = ['font_size' => $ba2d146bb5a55097['font_size'], 'font_color' => $ba2d146bb5a55097['font_color'], 'xy_offset' => $ba2d146bb5a55097['xy_offset'], 'message' => '', 'uuid' => $Fb9da1713bff19ce['uuid']];

	if ($ba2d146bb5a55097['type'] == 1) {
		goto label14812;
	}

	if ($ba2d146bb5a55097['type'] == 2) {
		goto label14784;
	}

	if (!($ba2d146bb5a55097['type'] == 3)) {
		goto label14782;
	}

	goto label14779;

	label14854:
}

goto label4571;

label14857:

goto label11580;

label14858:

if (E589A4bf54a2Dad1('adv', 'edit_episode')) {
	goto label11075;
}

echo json_encode(['result' => false]);
exit();
goto label11075;

label14870:

if (E589a4BF54a2dad1('adv', 'block_uas')) {
	goto label14881;
}

echo json_encode(['result' => false]);
exit();

label14881:

goto label9461;

label14882:

XUI::B0020c716FDf67BB(XUI::$rRequest['stream_id']);
echo json_encode(['result' => true]);
exit();

label14892:

goto label6112;

label14893:

$ba2d146bb5a55097 = getPlexLogin(XUI::$rRequest['username'], XUI::$rRequest['password']);

if (!isset($ba2d146bb5a55097['user']['authToken'])) {
	goto label15485;
}

$B259c62825689c1b = $ba2d146bb5a55097['user']['authToken'];
$A6cb59980ac73dff = getPlexSections(XUI::$rRequest['ip'], XUI::$rRequest['port'], $B259c62825689c1b);
if (!($A6cb59980ac73dff && (0 < count($A6cb59980ac73dff)))) {
	goto label15485;
}

goto label15478;

label14930:

goto label14935;

label14931:

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `stream_id` = ?;', $ee6d1fc5d801b43f);

label14935:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::B0020c716fDF67Bb($Fb9da1713bff19ce);
}

goto label5366;

label14945:

if (E589a4bF54a2DaD1('adv', 'edit_series')) {
	goto label14956;
}

echo json_encode(['result' => false]);
exit();

label14956:

$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label12047;

label14960:

exit();

label14961:

goto label5008;

label14962:

goto label1753;

label14963:

if (XUI::$rRequest['action'] == 'epg') {
	goto label9813;
}

if (XUI::$rRequest['action'] == 'provider') {
	goto label1034;
}

if (XUI::$rRequest['action'] == 'profile') {
	goto label9141;
}

if (XUI::$rRequest['action'] == 'series') {
	goto label5487;
}

if (XUI::$rRequest['action'] == 'kill_watch') {
	goto label12032;
}

goto label5814;

label14989:

echo json_encode(['result' => false]);
exit();

label14994:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'delete') {
	goto label12864;
}

goto label12858;

label15001:

if (!isset(XUI::$rRequest['data']['movies'])) {
	goto label13836;
}

foreach (XUI::$rRequest['data']['movies'] as $ee6d1fc5d801b43f) {
	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `type` FROM `streams` WHERE `id` = ? AND `type` = 2;', $ee6d1fc5d801b43f);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15029;
	}

	$ba2d146bb5a55097 = $b62d6460eb33ea07->get_row();
	$B9869413eae86beb['movies'][] = $ba2d146bb5a55097;

	label15029:
}

goto label13836;

label15032:

exit();
goto label15219;

label15034:

echo json_encode(['result' => true, 'data' => $f99bf45807d34d5a]);
exit();
goto label15219;

label15042:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::b0020C716Fdf67bB($Fb9da1713bff19ce);
}

goto label118;

label15052:

foreach (XUI::d72C0F56211B6f7C($e37d504062f6c301['user_id'], NULL, NULL, true, false, false) as $Fd10d59f87b19e71) {
	XUI::b0020C716Fdf67bb($Fd10d59f87b19e71);
}

goto label118;

label15069:

goto label11290;

label15070:

EfA9379345817b87(XUI::$rRequest['server_id']);
echo json_encode(['result' => true]);
exit();
goto label11290;

label15081:

foreach ($a2ebb817d88c810b as $b39b8fa9afa1ec53 => $b1eed3fdb609052d) {
	$D5d27d8ec92c4129 = 0;

	foreach ($b1eed3fdb609052d as $a5725df552d26b87) {
		goto label15090;

		label15090:

		$bfc61716e199dc8e = ($a5725df552d26b87['start'] < $cef812722e0345be ? $cef812722e0345be : $a5725df552d26b87['start']);
		$e168dab3ba6bd7f9 = ($Cb3142d0e6e76fd5 < $a5725df552d26b87['end'] ? $Cb3142d0e6e76fd5 : $a5725df552d26b87['end']);
		$f7037fc395d8fcad = ($e168dab3ba6bd7f9 - $bfc61716e199dc8e) / 60;
		$ba10d8a0b8348643 = NULL;
		if (!((0 < $a5725df552d26b87['tv_archive_server_id']) && (0 < $a5725df552d26b87['tv_archive_duration']))) {
			goto label15189;
		}

		goto label15166;

		label15124:

		goto label15198;

		label15127:

		$D5d27d8ec92c4129 += $c40233f3af7b706a;

		if (!(100 < $D5d27d8ec92c4129)) {
			goto label15136;
		}

		$c40233f3af7b706a -= $D5d27d8ec92c4129 - 100;

		label15136:

		$Ecb33c10e149ff2a[$a5725df552d26b87['id']][] = ['ListingId' => $a5725df552d26b87['listing_id'], 'ChannelId' => $a5725df552d26b87['id'], 'Title' => $a5725df552d26b87['title'], 'RelativeSize' => $c40233f3af7b706a, 'StartTime' => date('h:iA', $bfc61716e199dc8e), 'EndTime' => date('h:iA', $e168dab3ba6bd7f9), 'Start' => $a5725df552d26b87['start'], 'End' => $a5725df552d26b87['end'], 'Specialisation' => 'tv', 'Archive' => $ba10d8a0b8348643];
		goto label15124;

		label15166:

		if (!((time() - ($a5725df552d26b87['tv_archive_duration'] * 86400)) <= $a5725df552d26b87['start'])) {
			goto label15189;
		}

		$ba10d8a0b8348643 = [$a5725df552d26b87['start'], intval(($a5725df552d26b87['end'] - $a5725df552d26b87['start']) / 60)];

		label15189:

		$c40233f3af7b706a = round($f7037fc395d8fcad * $abac6c68d279439d, 2);
		goto label15127;

		label15198:
	}
}

label15202:

$e32a66a2a62d634c = ['ChannelId' => NULL, 'Title' => 'No Programme Information...', 'RelativeSize' => 100, 'StartTime' => 'Not Available', 'EndTime' => '', 'Specialisation' => 'tv', 'Archive' => NULL];
$b62d6460eb33ea07->query('SELECT `id`, `stream_icon`, `stream_display_name`, `tv_archive_duration`, `tv_archive_server_id`, `category_id` FROM `streams` WHERE `id` IN (' . implode(',', $A5a4a57a12bb19b3) . ') ORDER BY FIELD(`id`, ' . implode(',', $A5a4a57a12bb19b3) . ') ASC;');
goto label5671;

label15219:

goto label5502;

label15220:

if (e589a4bF54a2DaD1('adv', 'backups')) {
	goto label12376;
}

goto label12371;

label15227:

if (isset(XUI::$rRequest['page'])) {
	goto label15233;
}

$D7209256c56b1469 = 1;
goto label6798;

label15233:

$D7209256c56b1469 = intval(XUI::$rRequest['page']);
goto label6798;

label15240:

exit();

label15241:

goto label4807;

label15242:

goto label758;

label15243:

if (XUI::$rSettings['redis_handler']) {
	goto label705;
}

if ($C082ca9ed03f473c == -1) {
	goto label12437;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `stream_id` = ? AND `server_id` = ?;', $ee6d1fc5d801b43f, $C082ca9ed03f473c);
goto label12441;
goto label12437;

label15257:

$ffb2d1a0985b1293['report'] = true;
$ffb2d1a0985b1293['start'] = 0;
$ffb2d1a0985b1293['length'] = 100000;
$ba2d146bb5a55097 = json_decode(generateReport($A7ca171405b19571, $ffb2d1a0985b1293), true);
header('Content-Type: text/csv; charset=utf-8');
goto label7851;

label15276:

echo json_encode(['result' => false]);
exit();

label15281:

goto label7797;
goto label655;

label15283:

$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', XUI::$rRequest['server_id'], time(), json_encode(['action' => 'update']));
echo json_encode(['result' => true]);
exit();

label15301:

goto label13636;
goto label13625;

label15303:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `hls_end` = 0;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label15317;
}

$B9869413eae86beb['total_connections'] = $b62d6460eb33ea07->get_row()['count'];

label15317:

$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY `user_id`;', $C082ca9ed03f473c);
goto label12393;

label15322:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
}

if (!(0 < count($Bccd07953f314962))) {
	goto label11580;
}

echo D5612F049a8056a5([
	'action'     => 'vod',
	'sub'        => $c4584835207f1ecb,
	'stream_ids' => [$ee6d1fc5d801b43f],
	'servers'    => $Bccd07953f314962,
	'force'      => true
]);
exit();
goto label11580;

label15353:

$D9d6a5d0b76a9aaf = json_decode(shell_exec('timeout ' . intval($F7379362daea673f) . ' ' . XUI::$rFFPROBE . $Bc11ab076e603a99 . $Cc08b488984ab476 . ' -v quiet -probesize 5000000 -print_format json -show_format -show_streams ' . escapeshellarg($A7ca171405b19571)), true);

label15375:

if (!(0 < count($D9d6a5d0b76a9aaf['streams']))) {
	goto label14446;
}

$fb361b5f838abd3c = [];

foreach ($D9d6a5d0b76a9aaf['streams'] as $a42d28fc2a08c3b1) {
	goto label15413;

	label15389:

	goto label15468;

	label15391:

	goto label15389;

	label15393:

	$fb361b5f838abd3c['width'] = intval($a42d28fc2a08c3b1['width']);
	$fb361b5f838abd3c['height'] = intval($a42d28fc2a08c3b1['height']);
	$fb361b5f838abd3c['vbitrate'] = intval($a42d28fc2a08c3b1['bit_rate']);
	goto label15435;

	label15413:

	if ($a42d28fc2a08c3b1['codec_type'] == 'video') {
		goto label15393;
	}

	if (!($a42d28fc2a08c3b1['codec_type'] == 'audio')) {
		goto label15433;
	}

	$fb361b5f838abd3c['abitrate'] = intval($a42d28fc2a08c3b1['bit_rate']);
	$fb361b5f838abd3c['acodec'] = $a42d28fc2a08c3b1['codec_name'];

	label15433:

	goto label15391;

	label15435:

	$fb361b5f838abd3c['vcodec'] = $a42d28fc2a08c3b1['codec_name'];
	$fb361b5f838abd3c['fps'] = intval(explode('/', $a42d28fc2a08c3b1['r_frame_rate'])[0]);

	if ($fb361b5f838abd3c['fps']) {
		goto label15466;
	}

	$fb361b5f838abd3c['fps'] = intval(explode('/', $a42d28fc2a08c3b1['avg_frame_rate'])[0]);

	label15466:

	goto label15389;

	label15468:
}

goto label14564;

label15471:

echo json_encode(['result' => true]);
exit();

label15476:

goto label1099;

label15477:

goto label1089;

label15478:

echo json_encode(['result' => true, 'data' => $A6cb59980ac73dff]);
exit();

label15485:

echo json_encode(['result' => false]);
goto label5902;

label15490:

$ba2d146bb5a55097 = str_replace("\n", '<br/>', getFPMStatus(XUI::$rRequest['server_id']));

if (empty($ba2d146bb5a55097)) {
	goto label12882;
}

$c0b3b5354ef455a1 = intval($Bcf70cba56392975[XUI::$rRequest['server_id']]['total_services']);

if (!$c0b3b5354ef455a1) {
	goto label12881;
}

$ba2d146bb5a55097 .= '<br/><br/><strong>Results from 1 of ' . $c0b3b5354ef455a1 . ' PHP-FPM instances</strong>';
goto label12881;

label15520:

if ($c4584835207f1ecb == 'delete') {
	goto label1140;
}

if ($c4584835207f1ecb == 'close') {
	goto label7167;
}

if ($c4584835207f1ecb == 'reopen') {
	goto label13971;
}

echo json_encode(['result' => false]);
exit();
goto label13970;

label15535:

exit();

label15536:

goto label5022;

label15537:

if (E589a4Bf54A2DAd1('adv', 'servers')) {
	goto label11391;
}

goto label11386;

label15544:

$rLanguage = NULL;
$a8ece1a9dd9b22f1 = ['af' => 'af', 'sq' => 'sq', 'ar' => 'ar', 'arc' => 'arc', 'arp' => 'arp', 'hy' => 'hy', 'eu' => 'eu', 'be' => 'be', 'bn' => 'bn', 'bg' => 'bg', 'km' => 'km', 'zh' => 'zh', 'hr' => 'hr', 'cs' => 'cs', 'da' => 'da', 'nl' => 'nl', 'en' => 'en', 'fa' => 'fa', 'fi' => 'fi', 'fr' => 'fr-FR', 'gd' => 'gd', 'de' => 'de', 'el' => 'el', 'he' => 'he', 'hi' => 'hi', 'hu' => 'hu', 'iu' => 'iu', 'it' => 'it', 'ja' => 'ja', 'ko' => 'ko', 'ku' => 'ku', 'mk' => 'mk', 'ml' => 'ml', 'no' => 'no', 'pl' => 'pl', 'pt' => 'pt', 'br' => 'pt-BR', 'pa' => 'pa', 'ro' => 'ro', 'ru' => 'ru', 'sr' => 'sr', 'so' => 'so', 'es' => 'es', 'sv' => 'sv', 'tl' => 'tl', 'ta' => 'ta', 'te' => 'te', 'tr' => 'tr', 'ur' => 'ur', 'vi' => 'vi', 'yi' => 'yi', 'uk' => 'en-GB', 'us' => 'en', 'ca' => 'en'];
$F4e5a2ce883947d5 = explode(' ', preg_replace('/[^A-Za-z0-9 ]/', '', XUI::$rRequest['name']));

if (!(1 < count($F4e5a2ce883947d5))) {
	goto label7488;
}

foreach ([0, count($F4e5a2ce883947d5) - 1] as $df6991d59f367c7e) {
	$ab8782c89c1e5476 = strtolower($F4e5a2ce883947d5[$df6991d59f367c7e]);

	if (!isset($a8ece1a9dd9b22f1[$ab8782c89c1e5476])) {
		goto label15587;
	}

	$rLanguage = $a8ece1a9dd9b22f1[$ab8782c89c1e5476];
	goto label7488;

	label15587:
}

goto label7488;

label15590:

if (!isset(XUI::$rRequest['search'])) {
	goto label12005;
}

if (isset(XUI::$rRequest['page'])) {
	goto label15601;
}

$D7209256c56b1469 = 1;
goto label14248;

label15601:

goto label14242;

label15602:

if ($Bcf70cba56392975[$C082ca9ed03f473c]['server_type'] == 0) {
	goto label15609;
}

$A7d54b094ae83c95 = 1;
goto label6707;

label15609:

$A7d54b094ae83c95 = 2;
goto label6707;

label15611:

AB10108eDd7ce309(XUI::$rRequest['ua_id']);
echo json_encode(['result' => true]);
exit();

label15621:

goto label12359;

label15622:

goto label9641;

label15623:

$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;', $e37d504062f6c301['user_id']);
XUI::cCB5075c679E7314($e37d504062f6c301['user_id']);
goto label9636;

label15633:

$Fe53bcd53690fff4 = json_decode(XUI::$rRequest['server_id'], true);

label15640:

foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `custom_data`, `time`) VALUES(?, \'{"action": "restart_services"}\', ?);', $Abcb228699a7f743, time());
}

echo json_encode(['result' => true]);
goto label7608;

label15656:

$aae4eee56abeed7c = pathinfo(XUI::$rRequest['filename'])['filename'];

if (!file_exists(XUI_HOME . 'backups/' . $aae4eee56abeed7c . '.sql')) {
	goto label15680;
}

unlink(XUI_HOME . 'backups/' . $aae4eee56abeed7c . '.sql');

label15680:

if (!(0 < strlen($f1dcaed925076e67['dropbox_token']))) {
	goto label8507;
}

goto label8502;

label15689:

$Cc08b488984ab476 = '';
goto label15701;

label15691:

$Cc08b488984ab476 = ' -cookies ' . escapeshellarg(XUI::AeFEa986184Ca49E($A508fa583604eb49[17]['value']));

label15701:

goto label14483;

label15702:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
exit();

label15709:

goto label4388;

label15710:

goto label8059;

label15711:

goto label1793;

label15712:

$b62d6460eb33ea07->query('UPDATE `servers` SET `enabled` = 1 WHERE `id` = ?;', XUI::$rRequest['server_id']);
echo json_encode(['result' => true]);
exit();
goto label1793;

label15724:

goto label15741;

label15725:

$b62d6460eb33ea07->query('DELETE FROM ' . C79e45b9106cf57B(XUI::$rRequest['type']) . ' WHERE `' . $E8d2f47901b176c3 . '` >= ? AND `' . $E8d2f47901b176c3 . '` <= ?;', $F56066ad7b074468, $b120584763e3d117);

label15741:

goto label13801;

label15742:

echo json_encode(['result' => false]);

?>