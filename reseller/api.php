<?php


goto label1718;

label1:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label16;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::B0020C716FdF67bb($Fb9da1713bff19ce);
}

label16:

goto label280;
goto label267;

label18:

exit();

label19:

if (XUI::$rSettings['redis_handler']) {
	goto label45;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` = ?;', $A5672c717a6d107d['user_id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label44;
}

goto label35;

label35:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::B0020c716fDF67bb($Fb9da1713bff19ce);
}

label44:

goto label2691;

label45:

goto label2676;

label46:

$C93288e1d85b6c77 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

goto label205;

label67:

if (!($c4584835207f1ecb == 'kill_line')) {
	goto label471;
}

if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label75;
}

exit();

label75:

if (XUI::$rSettings['redis_handler']) {
	goto label2915;
}

goto label2807;

label80:

$abac6c68d279439d = floatval(100 / ($Aa6711f02f4e8165 * 60));
$F6a625ab4f31c702 = $A5a4a57a12bb19b3;
sort($F6a625ab4f31c702);
$Ecb33c10e149ff2a = [];

if (!(0 < count($A5a4a57a12bb19b3))) {
	goto label804;
}

goto label680;

label99:

if ($c4584835207f1ecb == 'delete') {
	goto label2440;
}

if ($c4584835207f1ecb == 'enable') {
	goto label465;
}

if ($c4584835207f1ecb == 'disable') {
	goto label927;
}

if ($c4584835207f1ecb == 'convert') {
	goto label877;
}

if ($c4584835207f1ecb == 'reset_isp') {
	goto label472;
}

goto label67;

label115:

if ($c4584835207f1ecb == 'kill_line') {
	goto label124;
}

echo json_encode(['result' => false]);
exit();
goto label2932;

label124:

goto label2155;

label125:

$ba2d146bb5a55097 = $b62d6460eb33ea07->get_row();
if (!(isset($dd3211a322da8474[$ba2d146bb5a55097['id']]['official_credits']) && (0 < strlen($dd3211a322da8474[$ba2d146bb5a55097['id']]['official_credits'])))) {
	goto label148;
}

$ba2d146bb5a55097['cost_credits'] = $dd3211a322da8474[$ba2d146bb5a55097['id']]['official_credits'];

label148:
if (isset(XUI::$rRequest['orig_id']) && $ba2d146bb5a55097['check_compatible']) {
	goto label1707;
}

goto label1704;

label156:

goto label2845;

label157:

if ($db0a61ef32b89a27['create_mag']) {
	goto label1815;
}

exit();
goto label1815;

label162:

echo json_encode(['result' => false]);
exit();

label167:

goto label1600;
goto label192;

label169:

$B9869413eae86beb['open_connections'] = $b62d6460eb33ea07->get_row()['count'] ?: 0;
$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ') GROUP BY `lines_live`.`user_id`;');
$B9869413eae86beb['online_users'] = $b62d6460eb33ea07->num_rows();
goto label857;

label191:

goto label982;

label192:

if ($db0a61ef32b89a27['create_sub_resellers']) {
	goto label196;
}

exit();

label196:

if (E589a4bF54a2dad1('user', XUI::$rRequest['id'])) {
	goto label421;
}

goto label416;

label205:

if (!(0 < count($C93288e1d85b6c77))) {
	goto label231;
}

foreach (XUI::A96aB74F1921d4ad($C93288e1d85b6c77, true) as $f7107e3a92443147 => $A1a73957c6feb09a) {
	$B9869413eae86beb['total_connections'] += $A1a73957c6feb09a;

	if (!(0 < $A1a73957c6feb09a)) {
		goto label229;
	}

	$B9869413eae86beb['total_users']++;

	label229:
}

label231:

goto label1956;

label232:

exit();

label233:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];

if (!isset(XUI::$rRequest['search'])) {
	goto label1737;
}

if (isset(XUI::$rRequest['page'])) {
	goto label3046;
}

goto label3044;

label244:

if (!$e37d504062f6c301) {
	goto label261;
}

if (E589a4BF54A2dAd1('line', $e37d504062f6c301['user_id'])) {
	goto label259;
}

echo json_encode(['result' => false, 'error' => 'No permissions.']);
exit();

label259:

goto label99;

label260:

exit();

label261:

echo json_encode(['result' => false]);
exit();
goto label1731;

label267:

foreach (XUI::a96aB74f1921d4aD([$f7107e3a92443147], false)[$f7107e3a92443147] as $Fd10d59f87b19e71) {
	XUI::b0020c716FDf67bB($Fd10d59f87b19e71);
}

label280:

echo json_encode(['result' => true]);
goto label2931;

label285:

exit();

label286:

goto label156;

label287:
if (!(!$db0a61ef32b89a27['create_mag'] && !$db0a61ef32b89a27['can_view_vod'] && !$db0a61ef32b89a27['reseller_client_connection_logs'])) {
	goto label233;
}

goto label232;

label301:

exit();

label302:

$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'close') {
	goto label2663;
}

if (!($c4584835207f1ecb == 'reopen')) {
	goto label2662;
}

goto label2531;

label313:

if (PHP_ERRORS) {
	goto label2768;
}
if (!(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest'))) {
	goto label330;
}

exit();

label330:

goto label2768;

label331:

if (XUI::$rRequest['action'] == 'get_epg') {
	goto label1576;
}

if (!(XUI::$rRequest['action'] == 'get_programme')) {
	goto label2114;
}

if ($db0a61ef32b89a27['can_view_vod']) {
	goto label346;
}

exit();

label346:

goto label1345;

label347:

if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label351;
}

exit();

label351:

$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label571;

label355:

if (!($fc6701f880be9dd9 = igbinary_unserialize(XUI::$redis->get(XUI::$rRequest['uuid'])))) {
	goto label876;
}

if (E589a4BF54a2DaD1('line', $fc6701f880be9dd9['user_id'])) {
	goto label380;
}

echo json_encode(['result' => false, 'error' => 'No permissions.']);
exit();

label380:

goto label868;

label381:

if (!($c4584835207f1ecb == 'disable')) {
	goto label1022;
}

$b62d6460eb33ea07->query('UPDATE `users` SET `status` = 0 WHERE `id` = ?;', XUI::$rRequest['user_id']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'disable', XUI::$rRequest['user_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($Caf4325605347834));
echo json_encode(['result' => true]);
exit();
goto label1022;

label416:

echo json_encode(['result' => false, 'error' => 'No permissions.']);
exit();

label421:

$Caf4325605347834 = BA89228dc958ce05(XUI::$rRequest['id']);
if (!($Caf4325605347834 && is_numeric(XUI::$rRequest['credits']))) {
	goto label1595;
}

goto label2046;

label438:

$C93288e1d85b6c77 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

goto label2008;

label459:

echo json_encode(['result' => true]);
exit();

label464:

goto label981;

label465:

goto label952;

label466:

echo json_encode(['result' => true]);
exit();

label471:

goto label1887;

label472:

goto label1876;

label473:

$ba2d146bb5a55097 = $b62d6460eb33ea07->get_row();
$ba2d146bb5a55097['exp_date'] = date('Y-m-d H:i', strtotime('+' . intval($ba2d146bb5a55097['trial_duration']) . ' ' . $ba2d146bb5a55097['trial_duration_in']));

foreach (json_decode($ba2d146bb5a55097['bouquets'], true) as $f155fef57262b32a) {
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` WHERE `id` = ?;', $f155fef57262b32a);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label549;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$B9869413eae86beb[] = ['id' => $Fb9da1713bff19ce['id'], 'bouquet_name' => str_replace('\'', '\\\'', $Fb9da1713bff19ce['bouquet_name']), 'bouquet_channels' => json_decode($Fb9da1713bff19ce['bouquet_channels'], true), 'bouquet_radios' => json_decode($Fb9da1713bff19ce['bouquet_radios'], true), 'bouquet_movies' => json_decode($Fb9da1713bff19ce['bouquet_movies'], true), 'bouquet_series' => json_decode($Fb9da1713bff19ce['bouquet_series'], true)];

	label549:
}

goto label2712;

label552:

if ($db0a61ef32b89a27['create_enigma']) {
	goto label556;
}

exit();

label556:

$c4584835207f1ecb = XUI::$rRequest['sub'];
$e37d504062f6c301 = Ef70A93E98FB7cE9(intval(XUI::$rRequest['e2_id']));
goto label244;

label569:

exit();

label570:

goto label3053;

label571:

if (!($c4584835207f1ecb == 'kill')) {
	goto label650;
}

if (XUI::$rSettings['redis_handler']) {
	goto label2530;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `uuid` = ? LIMIT 1;', XUI::$rRequest['uuid']);

if (!($b62d6460eb33ea07->num_rows() == 1)) {
	goto label2529;
}

$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
goto label2469;

label595:

exit();

label596:

$Aa6711f02f4e8165 = intval(XUI::$rRequest['hours']) ?: 3;
$cef812722e0345be = intval(strtotime(XUI::$rRequest['startdate'])) ?: time();
$Cb3142d0e6e76fd5 = $cef812722e0345be + ($Aa6711f02f4e8165 * 3600);
goto label80;

label621:

if ($c4584835207f1ecb == 'disable') {
	goto label1315;
}

if ($c4584835207f1ecb == 'convert') {
	goto label917;
}

if ($c4584835207f1ecb == 'reset_isp') {
	goto label1011;
}

if (!($c4584835207f1ecb == 'kill_line')) {
	goto label1010;
}

if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label19;
}

goto label18;

label638:

$B9869413eae86beb = [
	'total_count' => 0,
	'items'       => [],
	'result'      => true
];

if (!isset(XUI::$rRequest['search'])) {
	goto label2364;
}

if (isset(XUI::$rRequest['page'])) {
	goto label1070;
}

$D7209256c56b1469 = 1;
goto label1069;

label650:

echo json_encode(['result' => false]);
exit();

label655:

goto label1184;
goto label1152;

label657:

$c4584835207f1ecb = XUI::$rRequest['sub'];
$A5672c717a6d107d = A32d85aEFA28959D(intval(XUI::$rRequest['mag_id']));

if (!$A5672c717a6d107d) {
	goto label1743;
}

if (e589A4bF54a2DAD1('line', $A5672c717a6d107d['user_id'])) {
	goto label2852;
}

goto label2847;

label680:

$b62d6460eb33ea07->query('SELECT `streams`.`id`, `epg_data`.`id` AS `listing_id`, `streams`.`tv_archive_duration`, `tv_archive_server_id`, `epg_data`.`title`, `epg_data`.`description`, `epg_data`.`start`, `epg_data`.`end` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `streams`.`id` IN (' . implode(',', $A5a4a57a12bb19b3) . ') AND (`end` > ? AND `start` < ?) ORDER BY `id` ASC, `start` ASC;', $cef812722e0345be, $Cb3142d0e6e76fd5);
$a2ebb817d88c810b = $b62d6460eb33ea07->get_rows(true, 'id', false);

foreach ($a2ebb817d88c810b as $b39b8fa9afa1ec53 => $b1eed3fdb609052d) {
	foreach ($b1eed3fdb609052d as $a5725df552d26b87) {
		goto label708;

		label705:

		goto label800;

		label708:

		$bfc61716e199dc8e = ($a5725df552d26b87['start'] < $cef812722e0345be ? $cef812722e0345be : $a5725df552d26b87['start']);
		$e168dab3ba6bd7f9 = ($Cb3142d0e6e76fd5 < $a5725df552d26b87['end'] ? $Cb3142d0e6e76fd5 : $a5725df552d26b87['end']);
		$f7037fc395d8fcad = ($e168dab3ba6bd7f9 - $bfc61716e199dc8e) / 60;
		$ba10d8a0b8348643 = NULL;
		if (!((0 < $a5725df552d26b87['tv_archive_server_id']) && (0 < $a5725df552d26b87['tv_archive_duration']))) {
			goto label765;
		}

		goto label742;

		label742:

		if (!((time() - ($a5725df552d26b87['tv_archive_duration'] * 86400)) <= $a5725df552d26b87['start'])) {
			goto label765;
		}

		$ba10d8a0b8348643 = [$a5725df552d26b87['start'], intval(($a5725df552d26b87['end'] - $a5725df552d26b87['start']) / 60)];

		label765:

		$Ecb33c10e149ff2a[$a5725df552d26b87['id']][] = ['ListingId' => $a5725df552d26b87['listing_id'], 'ChannelId' => $a5725df552d26b87['id'], 'Title' => $a5725df552d26b87['title'], 'RelativeSize' => round($f7037fc395d8fcad * $abac6c68d279439d, 2), 'StartTime' => date('h:ia', $bfc61716e199dc8e), 'EndTime' => date('h:ia', $e168dab3ba6bd7f9), 'Start' => $a5725df552d26b87['start'], 'End' => $a5725df552d26b87['end'], 'Specialisation' => 'tv', 'Archive' => $ba10d8a0b8348643];
		goto label705;

		label800:
	}
}

label804:

goto label1185;

label805:

goto label2437;

label806:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $A5672c717a6d107d['user_id']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'enable', XUI::$rRequest['mag_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($A5672c717a6d107d));
goto label2432;

label831:

goto label1963;

label832:

$B9869413eae86beb = ['total_connections' => 0, 'total_users' => 0];

if (XUI::$rSettings['redis_handler']) {
	goto label46;
}

goto label2491;

label838:

foreach (XUI::a96aB74F1921d4ad($C93288e1d85b6c77, true) as $f7107e3a92443147 => $A1a73957c6feb09a) {
	$B9869413eae86beb['open_connections'] += $A1a73957c6feb09a;

	if (!(0 < $A1a73957c6feb09a)) {
		goto label855;
	}

	$B9869413eae86beb['online_users']++;

	label855:
}

label857:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
goto label2116;

label868:

XUI::b0020C716fdF67bB($fc6701f880be9dd9);
echo json_encode(['result' => true]);
exit();

label876:

goto label650;

label877:

a486863E198221Fa(XUI::$rRequest['e2_id'], false, false, true);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'convert', $e37d504062f6c301['user']['id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($e37d504062f6c301['user']));
echo json_encode(['result' => true, 'line_id' => $e37d504062f6c301['user']['id']]);
exit();
goto label926;

label915:

exit();

label916:

goto label1874;

label917:

dD81518D00a2dD90(XUI::$rRequest['mag_id'], false, false, true);
goto label1845;

label926:

goto label464;

label927:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $e37d504062f6c301['user_id']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'enigma\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'disable', XUI::$rRequest['e2_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($e37d504062f6c301));
goto label459;

label952:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $e37d504062f6c301['user_id']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'enigma\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'enable', XUI::$rRequest['e2_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($e37d504062f6c301));
echo json_encode(['result' => true]);
exit();

label981:

goto label2439;

label982:

$C93288e1d85b6c77 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($C93288e1d85b6c77))) {
	goto label857;
}

goto label838;

label1010:

goto label916;

label1011:

$b62d6460eb33ea07->query('UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `id` = ?;', $A5672c717a6d107d['user']['id']);
echo json_encode(['result' => true]);
goto label915;

label1022:

goto label1843;

label1023:

$b62d6460eb33ea07->query('UPDATE `users` SET `status` = 1 WHERE `id` = ?;', XUI::$rRequest['user_id']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'enable', XUI::$rRequest['user_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($Caf4325605347834));
goto label1838;

label1049:

exit();

label1050:

goto label286;

label1051:

$b38e11ffdc6a3abb = XUI::$rRequest['ip'];
goto label2613;

label1055:

echo json_encode(['result' => false, 'error' => 'No permissions.']);
exit();

label1060:

if ($ba2d146bb5a55097['type'] == 'send_msg') {
	goto label2939;
}

if ($ba2d146bb5a55097['type'] == 'play_channel') {
	goto label2421;
}

goto label2828;

label1069:

goto label1076;

label1070:

$D7209256c56b1469 = intval(XUI::$rRequest['page']);

label1076:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `id` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ') AND (`lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ?);', '%' . XUI::$rRequest['search'] . '%', '%' . XUI::$rRequest['search'] . '%', '%' . XUI::$rRequest['search'] . '%');
goto label2257;

label1102:

goto label1590;

label1103:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $f7107e3a92443147);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'enable', XUI::$rRequest['user_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($F5ba2106d5227309));
echo json_encode(['result' => true]);
goto label1589;

label1131:

goto label2675;

label1132:

if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label1136;
}

exit();

label1136:

goto label2697;

label1137:

exit();

label1138:

if (e589A4BF54A2DAD1('user', XUI::$rRequest['user_id'])) {
	goto label1371;
}

echo json_encode(['result' => false, 'error' => 'No permissions.']);
exit();
goto label1371;

label1152:

if ($db0a61ef32b89a27['create_line']) {
	goto label1156;
}

exit();

label1156:

$c4584835207f1ecb = XUI::$rRequest['sub'];
goto label2780;

label1160:

$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'delete', XUI::$rRequest['user_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($F5ba2106d5227309));
echo json_encode(['result' => true]);
exit();

label1184:

goto label1131;

label1185:

$e32a66a2a62d634c = ['ChannelId' => NULL, 'Title' => 'No Programme Information...', 'RelativeSize' => 100, 'StartTime' => '', 'EndTime' => '', 'Specialisation' => 'tv', 'Archive' => NULL];
$b62d6460eb33ea07->query('SELECT `id`, `stream_icon`, `stream_display_name`, `tv_archive_duration`, `tv_archive_server_id`, `category_id` FROM `streams` WHERE `id` IN (' . implode(',', $A5a4a57a12bb19b3) . ') ORDER BY FIELD(`id`, ' . implode(',', $A5a4a57a12bb19b3) . ') ASC;');

foreach ($b62d6460eb33ea07->get_rows() as $fe93a43f53d92a4e) {
	goto label1207;

	label1207:
	if ((0 < $fe93a43f53d92a4e['tv_archive_duration']) && (0 < $fe93a43f53d92a4e['tv_archive_server_id'])) {
		goto label1219;
	}

	$ba10d8a0b8348643 = 0;
	goto label1252;

	label1219:

	$ba10d8a0b8348643 = $fe93a43f53d92a4e['tv_archive_duration'];
	goto label1252;

	label1223:

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label1240;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label1270;

	label1240:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';
	goto label1270;

	label1252:

	$e506580b84e6e5da = $e32a66a2a62d634c;
	$e506580b84e6e5da['ChannelId'] = $fe93a43f53d92a4e['id'];
	$F05acfe4a87b8eb0 = json_decode($fe93a43f53d92a4e['category_id'], true);
	$F771d40e8cf51e59 = F769e3f0c739D1A6('live');
	goto label1223;

	label1268:

	goto label1308;

	label1270:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label1285;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label1285:

	$B9869413eae86beb['Channels'][] = ['Id' => 0, 'DisplayName' => $fe93a43f53d92a4e['stream_display_name'], 'CategoryName' => $Dbcac322b4274e46, 'Archive' => $ba10d8a0b8348643, 'Image' => XUI::FCA722697178454B($fe93a43f53d92a4e['stream_icon']) ?: '', 'TvListings' => $Ecb33c10e149ff2a[$fe93a43f53d92a4e['id']] ?: [$e506580b84e6e5da]];
	goto label1268;

	label1308:
}

echo json_encode($B9869413eae86beb);
goto label1049;

label1315:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $A5672c717a6d107d['user_id']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'disable', XUI::$rRequest['mag_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($A5672c717a6d107d));
echo json_encode(['result' => true]);
exit();
goto label805;

label1345:

$Ea248c6503c74cd4 = XUI::$rRequest['timezone'] ?: 'Europe/London';
date_default_timezone_set($Ea248c6503c74cd4);

if (!isset(XUI::$rRequest['id'])) {
	goto label2109;
}

$b62d6460eb33ea07->query('SELECT * FROM `epg_data` WHERE `id` = ?;', XUI::$rRequest['id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2363;
}

goto label2339;

label1371:

$c4584835207f1ecb = XUI::$rRequest['sub'];
$Caf4325605347834 = bA89228dC958CE05(XUI::$rRequest['user_id']);

if ($c4584835207f1ecb == 'delete') {
	goto label1844;
}

if ($c4584835207f1ecb == 'enable') {
	goto label1023;
}

goto label381;

label1387:

Dd81518d00a2DD90(XUI::$rRequest['mag_id']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'delete', XUI::$rRequest['mag_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($A5672c717a6d107d));
echo json_encode(['result' => true]);
exit();

label1416:

goto label1743;

label1417:

$b62d6460eb33ea07->query('SELECT COUNT(`activity_id`) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
$B9869413eae86beb['open_connections'] = $b62d6460eb33ea07->get_row()['count'] ?: 0;
$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ') GROUP BY `lines_live`.`user_id`;');
$B9869413eae86beb['online_users'] = $b62d6460eb33ea07->num_rows();
goto label2034;
goto label438;

label1450:

echo json_encode(['result' => false]);

label1454:

if (!isset(XUI::$rRequest['action'])) {
	goto label570;
}

if (XUI::$rRequest['action'] == 'dashboard') {
	goto label2241;
}

if (XUI::$rRequest['action'] == 'connections') {
	goto label1132;
}

goto label1982;

label1470:

exit();

label1471:

goto label1731;

label1472:

goto label552;

label1473:

$b62d6460eb33ea07->query('INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);', $Caf4325605347834['id'], $E59d0debc75e7be8['id'], XUI::$rRequest['credits'], time(), XUI::$rRequest['reason']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'adjust_credits', XUI::$rRequest['id'], intval(XUI::$rRequest['credits']), $F26cb152c0824831, time(), json_encode($Caf4325605347834));
echo json_encode(['result' => true]);
exit();

label1517:

goto label1595;

label1518:

$ba2d146bb5a55097['exp_date'] = date('Y-m-d H:i', strtotime('+' . intval($ba2d146bb5a55097['official_duration']) . ' ' . $ba2d146bb5a55097['official_duration_in']));
if (!(isset(XUI::$rRequest['user_id']) && $ba2d146bb5a55097['compatible'])) {
	goto label2168;
}

if (!($Caf4325605347834 = b5AD1d95a92Ce732(XUI::$rRequest['user_id']))) {
	goto label2604;
}

if (time() < $Caf4325605347834['exp_date']) {
	goto label2585;
}

$ba2d146bb5a55097['exp_date'] = date('Y-m-d H:i', strtotime('+' . intval($ba2d146bb5a55097['official_duration']) . ' ' . $ba2d146bb5a55097['official_duration_in']));
goto label2584;

label1576:

if ($db0a61ef32b89a27['can_view_vod']) {
	goto label1580;
}

exit();

label1580:

if (!(count($db0a61ef32b89a27['stream_ids']) == 0)) {
	goto label2036;
}

goto label2035;

label1589:

exit();

label1590:

goto label1184;

label1591:

c24B1b1fdaD37C5E($f7107e3a92443147);
goto label1160;

label1595:

echo json_encode(['result' => false]);
exit();

label1600:

goto label655;
goto label347;

label1602:

c2789DA0026d2C05($ba2d146bb5a55097['id']);
echo json_encode(['result' => true]);
exit();

label1611:

goto label2420;

label1612:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1623;
}

$Fca04b1755da7bd5['type'] = $b62d6460eb33ea07->get_row()['type'];

label1623:

echo json_encode(['result' => true, 'data' => $Fca04b1755da7bd5]);
goto label285;

label1630:

if (isset($E59d0debc75e7be8['reports'])) {
	goto label1637;
}

echo json_encode(['result' => false]);

label1637:

goto label1454;

label1638:

goto label1450;

label1639:

$b3295e009ed68643->close();

label1641:

$Fca04b1755da7bd5['type'] = NULL;

if (!$Fca04b1755da7bd5['isp']['autonomous_system_number']) {
	goto label1623;
}

$b62d6460eb33ea07->query('SELECT `type` FROM `blocked_asns` WHERE `asn` = ?;', $Fca04b1755da7bd5['isp']['autonomous_system_number']);
goto label1612;

label1655:

if ($c4584835207f1ecb == 'delete') {
	goto label1591;
}

if ($c4584835207f1ecb == 'enable') {
	goto label1103;
}

if ($c4584835207f1ecb == 'disable') {
	goto label2338;
}

if ($c4584835207f1ecb == 'reset_isp') {
	goto label2933;
}

goto label115;

label1668:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

$A1a73957c6feb09a = XUI::D72C0f56211b6F7c(NULL, NULL, $ee6d1fc5d801b43f, true, false, false, false);

foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
	if (!in_array($Fd10d59f87b19e71['user_id'], $C93288e1d85b6c77)) {
		goto label1701;
	}

	XUI::b0020C716fdf67Bb($Fd10d59f87b19e71);

	label1701:
}

goto label2670;

label1704:

$ba2d146bb5a55097['compatible'] = true;
goto label1717;

label1707:

$ba2d146bb5a55097['compatible'] = DbA308160C3f6ca5(XUI::$rRequest['package_id'], XUI::$rRequest['orig_id']);

label1717:

goto label1518;

label1718:

include 'functions.php';
session_write_close();

if (isset($_SESSION['reseller'])) {
	goto label313;
}

echo json_encode(['result' => false, 'error' => 'Not logged in']);
exit();
goto label313;

label1731:

goto label1748;

label1732:

if ($db0a61ef32b89a27['create_mag']) {
	goto label657;
}

exit();
goto label657;

label1737:

echo json_encode($B9869413eae86beb);
exit();
goto label156;

label1743:

echo json_encode(['result' => false]);
exit();

label1748:

goto label2486;
goto label2088;

label1750:

echo json_encode(['result' => true]);
exit();

label1755:

echo json_encode(['result' => false]);
goto label2485;

label1760:

c05365DCB6d79618(XUI::$rRequest['user_id'], false, false, $E59d0debc75e7be8['id']);
$b62d6460eb33ea07->query('INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], $E59d0debc75e7be8['id'], intval($Caf4325605347834['credits']), time(), 'Deleted user: ' . $Caf4325605347834['username']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'delete', XUI::$rRequest['user_id'], intval($Caf4325605347834['credits']), $F26cb152c0824831, time(), json_encode($Caf4325605347834));
echo json_encode(['result' => true]);
exit();
goto label162;

label1815:

$ba2d146bb5a55097 = json_decode(XUI::$rRequest['data'], true);
$F25600b52c026389 = A32d85AEFa28959d($ba2d146bb5a55097['id']);

if (!$F25600b52c026389) {
	goto label2840;
}

if (e589A4bf54A2dAd1('line', $F25600b52c026389['user_id'])) {
	goto label1060;
}

goto label1055;

label1838:

echo json_encode(['result' => true]);
exit();

label1843:

goto label162;

label1844:

goto label2311;

label1845:

$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'convert', $A5672c717a6d107d['user']['id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($A5672c717a6d107d['user']));
echo json_encode(['result' => true, 'line_id' => $A5672c717a6d107d['user']['id']]);
exit();

label1874:

goto label805;
goto label1315;

label1876:

$b62d6460eb33ea07->query('UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `id` = ?;', $e37d504062f6c301['user']['id']);
echo json_encode(['result' => true]);
exit();

label1887:

goto label926;
goto label877;

label1889:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `id` FROM `streams` WHERE `stream_display_name` LIKE ? AND `id` IN (' . implode(',', array_map('intval', $db0a61ef32b89a27['stream_ids'])) . ');', '%' . XUI::$rRequest['search'] . '%');
$B9869413eae86beb['total_count'] = $b62d6460eb33ea07->get_row()['id'];
$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $db0a61ef32b89a27['stream_ids'])) . ') AND `stream_display_name` LIKE ? ORDER BY `stream_display_name` ASC LIMIT ' . (($D7209256c56b1469 - 1) * 100) . ', 100;', '%' . XUI::$rRequest['search'] . '%');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1737;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B9869413eae86beb['items'][] = ['id' => $Fb9da1713bff19ce['id'], 'text' => $Fb9da1713bff19ce['stream_display_name']];
}

goto label1737;

label1956:

echo json_encode($B9869413eae86beb, JSON_PARTIAL_OUTPUT_ON_ERROR);
exit();

label1963:

goto label2549;

label1964:

goto label2402;

label1965:

$b62d6460eb33ea07->query('SELECT `id`, `bouquets`, `official_credits` AS `cost_credits`, `official_duration`, `official_duration_in`, `max_connections`, `check_compatible`, `is_isplock` FROM `users_packages` WHERE `id` = ?;', XUI::$rRequest['package_id']);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label1981;
}

echo json_encode(['result' => false]);
goto label1470;

label1981:

goto label125;

label1982:

if (XUI::$rRequest['action'] == 'line') {
	goto label1152;
}

if (XUI::$rRequest['action'] == 'line_activity') {
	goto label347;
}

if (XUI::$rRequest['action'] == 'adjust_credits') {
	goto label192;
}

if (XUI::$rRequest['action'] == 'reg_user') {
	goto label2487;
}

if (XUI::$rRequest['action'] == 'ticket') {
	goto label2088;
}

goto label2729;

label2008:

if (!(0 < count($C93288e1d85b6c77))) {
	goto label2034;
}

foreach (XUI::a96aB74f1921d4Ad($C93288e1d85b6c77, true) as $f7107e3a92443147 => $A1a73957c6feb09a) {
	$B9869413eae86beb['open_connections'] += $A1a73957c6feb09a;

	if (!(0 < $A1a73957c6feb09a)) {
		goto label2032;
	}

	$B9869413eae86beb['online_users']++;

	label2032:
}

label2034:

goto label2370;

label2035:

exit();

label2036:

$Ea248c6503c74cd4 = XUI::$rRequest['timezone'] ?: 'Europe/London';
date_default_timezone_set($Ea248c6503c74cd4);
$B9869413eae86beb = [
	'Channels' => []
];
goto label2985;

label2046:

$F26cb152c0824831 = intval($E59d0debc75e7be8['credits']) - intval(XUI::$rRequest['credits']);
$E8f21e009ba7a8c5 = intval($Caf4325605347834['credits']) + intval(XUI::$rRequest['credits']);
if (!((0 <= $E8f21e009ba7a8c5) && (0 <= $F26cb152c0824831))) {
	goto label1517;
}

$b62d6460eb33ea07->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $F26cb152c0824831, $E59d0debc75e7be8['id']);
$b62d6460eb33ea07->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $E8f21e009ba7a8c5, $Caf4325605347834['id']);
goto label1473;

label2088:

$e980e66d0f7b6829 = def05ECDB21B0A50(XUI::$rRequest['ticket_id']);

if (!$e980e66d0f7b6829) {
	goto label1755;
}

if (E589A4bF54A2daD1('user', $e980e66d0f7b6829['member_id'])) {
	goto label302;
}

echo json_encode(['result' => false, 'error' => 'No permissions.']);
goto label301;

label2109:

echo json_encode(['result' => false]);
exit();

label2114:

goto label1050;
goto label1576;

label2116:

$B9869413eae86beb['active_accounts'] = $b62d6460eb33ea07->get_row()['count'] ?: 0;
$b62d6460eb33ea07->query('SELECT SUM(`credits`) AS `credits` FROM `users` WHERE `id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
$B9869413eae86beb['credits'] = $b62d6460eb33ea07->get_row()['credits'] ?: 0;
$B9869413eae86beb['credits_assigned'] = ($B9869413eae86beb['credits'] - intval($E59d0debc75e7be8['credits'])) ?: 0;
echo json_encode($B9869413eae86beb);
goto label569;

label2155:

if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label2159;
}

exit();

label2159:

if (XUI::$rSettings['redis_handler']) {
	goto label267;
}

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` = ?;', $f7107e3a92443147);
goto label1;

label2168:

foreach (json_decode($ba2d146bb5a55097['bouquets'], true) as $f155fef57262b32a) {
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` WHERE `id` = ?;', $f155fef57262b32a);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label2224;
	}

	$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
	$B9869413eae86beb[] = ['id' => $Fb9da1713bff19ce['id'], 'bouquet_name' => str_replace('\'', '\\\'', $Fb9da1713bff19ce['bouquet_name']), 'bouquet_channels' => json_decode($Fb9da1713bff19ce['bouquet_channels'], true), 'bouquet_radios' => json_decode($Fb9da1713bff19ce['bouquet_radios'], true), 'bouquet_movies' => json_decode($Fb9da1713bff19ce['bouquet_movies'], true), 'bouquet_series' => json_decode($Fb9da1713bff19ce['bouquet_series'], true)];

	label2224:
}

$ba2d146bb5a55097['duration'] = $ba2d146bb5a55097['official_duration'] . ' ' . $ba2d146bb5a55097['official_duration_in'];
echo json_encode(['result' => true, 'bouquets' => $B9869413eae86beb, 'data' => $ba2d146bb5a55097]);
goto label1470;

label2240:

goto label570;

label2241:

$B9869413eae86beb = ['open_connections' => 0, 'online_users' => 0, 'active_accounts' => 0, 'credits' => 0, 'credits_assigned' => 0];

if (XUI::$rSettings['redis_handler']) {
	goto label191;
}

$b62d6460eb33ea07->query('SELECT COUNT(`activity_id`) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
goto label169;

label2257:

$B9869413eae86beb['total_count'] = $b62d6460eb33ea07->get_row()['id'];
$b62d6460eb33ea07->query('SELECT `id`, IF(`lines`.`is_mag`, `mag_devices`.`mac`, IF(`lines`.`is_e2`, `enigma2_devices`.`mac`, `lines`.`username`)) AS `username` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ') AND (`lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ?) ORDER BY `username` ASC LIMIT ' . (($D7209256c56b1469 - 1) * 100) . ', 100;', '%' . XUI::$rRequest['search'] . '%', '%' . XUI::$rRequest['search'] . '%', '%' . XUI::$rRequest['search'] . '%');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2364;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B9869413eae86beb['items'][] = ['id' => $Fb9da1713bff19ce['id'], 'text' => $Fb9da1713bff19ce['username']];
}

goto label2364;

label2311:

if ($db0a61ef32b89a27['delete_users']) {
	goto label2315;
}

exit();

label2315:

$F26cb152c0824831 = intval($E59d0debc75e7be8['credits']) + intval($Caf4325605347834['credits']);
$b62d6460eb33ea07->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $F26cb152c0824831, $E59d0debc75e7be8['id']);
goto label1760;

label2332:

echo json_encode(['result' => true]);
exit();

label2337:

goto label2913;

label2338:

goto label2885;

label2339:

$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
$Fb9da1713bff19ce['date'] = date('H:i', $Fb9da1713bff19ce['start']) . ' - ' . date('H:i', $Fb9da1713bff19ce['end']);
echo json_encode(['result' => true, 'data' => $Fb9da1713bff19ce]);
exit();

label2363:

goto label2109;

label2364:

echo json_encode($B9869413eae86beb);
exit();

label2369:

goto label2605;

label2370:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
$B9869413eae86beb['total_lines'] = $b62d6460eb33ea07->get_row()['count'];
$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count`, SUM(`credits`) AS `credits` FROM `users` WHERE `owner_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
$B9869413eae86beb['total_users'] = $Fb9da1713bff19ce['count'];
goto label2644;

label2402:

$B9869413eae86beb = [];
$b62d6460eb33ea07->query('SELECT `bouquets`, `trial_credits` AS `cost_credits`, `trial_duration`, `trial_duration_in`, `max_connections`, `is_isplock` FROM `users_packages` WHERE `id` = ?;', XUI::$rRequest['package_id']);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label473;
}

echo json_encode(['result' => false]);
goto label2727;
goto label473;

label2420:

goto label2938;

label2421:

$ba2d146bb5a55097['need_confirm'] = 0;
$ba2d146bb5a55097['reboot_portal'] = 0;
$ba2d146bb5a55097['message'] = intval($ba2d146bb5a55097['channel']);
goto label2938;

label2432:

echo json_encode(['result' => true]);
exit();

label2437:

goto label1416;

label2438:

goto label1387;

label2439:

goto label261;

label2440:

A486863e198221fa(XUI::$rRequest['e2_id']);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'enigma\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'delete', XUI::$rRequest['e2_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($e37d504062f6c301));
echo json_encode(['result' => true]);
goto label260;

label2469:

if (E589a4bF54A2dad1('line', $Fb9da1713bff19ce['user_id'])) {
	goto label2481;
}

echo json_encode(['result' => false, 'error' => 'No permissions.']);
exit();

label2481:

XUI::B0020C716fDF67bb($Fb9da1713bff19ce);
goto label2524;

label2485:

exit();

label2486:

goto label167;

label2487:

if ($db0a61ef32b89a27['create_sub_resellers']) {
	goto label1138;
}

goto label1137;

label2491:

$b62d6460eb33ea07->query('SELECT COUNT(`activity_id`) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
$B9869413eae86beb['total_connections'] = $b62d6460eb33ea07->get_row()['count'] ?: 0;
$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ') GROUP BY `lines_live`.`user_id`;');
$B9869413eae86beb['total_users'] = $b62d6460eb33ea07->num_rows();
goto label231;
goto label46;

label2524:

echo json_encode(['result' => true]);
exit();

label2529:

goto label876;

label2530:

goto label355;

label2531:

if (!($e980e66d0f7b6829['member_id'] == $E59d0debc75e7be8['id'])) {
	goto label2538;
}

exit();

label2538:

$b62d6460eb33ea07->query('UPDATE `tickets` SET `status` = 1 WHERE `id` = ?;', XUI::$rRequest['ticket_id']);
echo json_encode(['result' => true]);
goto label2661;

label2549:

goto label1471;

label2550:

$B9869413eae86beb = [];
$dd3211a322da8474 = json_decode($E59d0debc75e7be8['override_packages'], true);
goto label1965;

label2558:

if (XUI::$rRequest['action'] == 'stats') {
	goto label2606;
}

if (XUI::$rRequest['action'] == 'userlist') {
	goto label638;
}

if (XUI::$rRequest['action'] == 'send_event') {
	goto label157;
}

if (XUI::$rRequest['action'] == 'streamlist') {
	goto label287;
}

if (XUI::$rRequest['action'] == 'ip_whois') {
	goto label1051;
}

goto label331;

label2584:

goto label2604;

label2585:

$ba2d146bb5a55097['exp_date'] = date('Y-m-d H:i', strtotime('+' . intval($ba2d146bb5a55097['official_duration']) . ' ' . $ba2d146bb5a55097['official_duration_in'], $Caf4325605347834['exp_date']));

label2604:

goto label2168;

label2605:

goto label831;

label2606:

$B9869413eae86beb = ['open_connections' => 0, 'online_users' => 0, 'total_lines' => 0, 'total_users' => 0, 'owner_credits' => 0, 'user_credits' => 0, 'total_credits' => 0];
$Bd92fffa215178e4 = 0;

if (XUI::$rSettings['redis_handler']) {
	goto label438;
}

goto label1417;

label2613:

$b3295e009ed68643 = new MaxMind\Db\Reader(GEOLITE2C_BIN);
$Fca04b1755da7bd5 = $b3295e009ed68643->get($b38e11ffdc6a3abb);

if (!isset($Fca04b1755da7bd5['location']['time_zone'])) {
	goto label3026;
}

$e36d2f5d3c9f0972 = new DateTime('now', new DateTimeZone($Fca04b1755da7bd5['location']['time_zone']));
$Fca04b1755da7bd5['location']['time'] = $e36d2f5d3c9f0972->format('Y-m-d H:i:s');
goto label3026;

label2644:

$B9869413eae86beb['user_credits'] = $Fb9da1713bff19ce['credits'];
$B9869413eae86beb['owner_credits'] = $E59d0debc75e7be8['credits'];
$B9869413eae86beb['total_credits'] = $B9869413eae86beb['owner_credits'] + $B9869413eae86beb['user_credits'];
echo json_encode($B9869413eae86beb);
exit();
goto label831;

label2661:

exit();

label2662:

goto label1755;

label2663:

$b62d6460eb33ea07->query('UPDATE `tickets` SET `status` = 0 WHERE `id` = ?;', XUI::$rRequest['ticket_id']);
goto label1750;

label2670:

echo json_encode(['result' => true]);
exit();

label2675:

goto label2240;

label2676:

foreach (XUI::A96aB74f1921d4Ad([$A5672c717a6d107d['user_id']], false)[$A5672c717a6d107d['user_id']] as $Fd10d59f87b19e71) {
	XUI::b0020c716fdf67BB($Fd10d59f87b19e71);
}

label2691:

echo json_encode(['result' => true]);
exit();
goto label1010;

label2697:

$ee6d1fc5d801b43f = XUI::$rRequest['stream_id'];
$c4584835207f1ecb = XUI::$rRequest['sub'];

if ($c4584835207f1ecb == 'purge') {
	goto label2860;
}

echo json_encode(['result' => false]);
exit();
goto label2859;

label2712:

$ba2d146bb5a55097['duration'] = $ba2d146bb5a55097['trial_duration'] . ' ' . $ba2d146bb5a55097['trial_duration_in'];
$ba2d146bb5a55097['compatible'] = true;
echo json_encode(['result' => true, 'bouquets' => $B9869413eae86beb, 'data' => $ba2d146bb5a55097]);

label2727:

exit();
goto label2549;

label2729:

if (XUI::$rRequest['action'] == 'mag') {
	goto label1732;
}

if (XUI::$rRequest['action'] == 'enigma') {
	goto label1472;
}

if (XUI::$rRequest['action'] == 'get_package') {
	goto label2550;
}

if (XUI::$rRequest['action'] == 'get_package_trial') {
	goto label1964;
}

if (XUI::$rRequest['action'] == 'header_stats') {
	goto label832;
}

goto label2558;

label2755:

goto label2670;

label2756:

$C93288e1d85b6c77 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
goto label1668;

label2768:

if (!XUI::$rSettings['redis_handler']) {
	goto label2775;
}

XUI::D6AeB3175A43f301();

label2775:

if (!$E59d0debc75e7be8['id']) {
	goto label1638;
}

goto label1630;

label2780:

$f7107e3a92443147 = intval(XUI::$rRequest['user_id']);
$F5ba2106d5227309 = B5ad1d95A92ce732($f7107e3a92443147);
if (!(!E589a4bf54A2daD1('line', $f7107e3a92443147) || !$F5ba2106d5227309)) {
	goto label1655;
}

echo json_encode(['result' => false, 'error' => 'No permissions.']);
exit();
goto label1655;

label2807:

$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `user_id` = ?;', $e37d504062f6c301['user_id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2827;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::b0020C716Fdf67Bb($Fb9da1713bff19ce);
}

label2827:

goto label2914;

label2828:

if ($ba2d146bb5a55097['type'] == 'reset_stb_lock') {
	goto label1602;
}

$ba2d146bb5a55097['need_confirm'] = 0;
$ba2d146bb5a55097['reboot_portal'] = 0;
$ba2d146bb5a55097['message'] = '';
goto label1611;
goto label1602;

label2840:

echo json_encode(['result' => false]);
exit();

label2845:

goto label2369;
goto label638;

label2847:

echo json_encode(['result' => false, 'error' => 'No permissions.']);
exit();

label2852:

if ($c4584835207f1ecb == 'delete') {
	goto label2438;
}

if ($c4584835207f1ecb == 'enable') {
	goto label806;
}

goto label621;

label2859:

goto label2675;

label2860:

if (XUI::$rSettings['redis_handler']) {
	goto label2756;
}

$b62d6460eb33ea07->query('SELECT `lines_live`.* FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = ? AND `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');', $ee6d1fc5d801b43f);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	XUI::b0020c716fDf67bB($Fb9da1713bff19ce);
}

goto label2755;

label2885:

$b62d6460eb33ea07->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $f7107e3a92443147);
$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'disable', XUI::$rRequest['user_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($F5ba2106d5227309));
echo json_encode(['result' => true]);
exit();

label2913:

goto label1102;

label2914:

goto label2930;

label2915:

foreach (XUI::A96AB74f1921D4Ad([$A5672c717a6d107d['user_id']], false)[$e37d504062f6c301['user_id']] as $Fd10d59f87b19e71) {
	XUI::b0020C716fDF67Bb($Fd10d59f87b19e71);
}

label2930:

goto label466;

label2931:

exit();

label2932:

goto label2337;

label2933:

$b62d6460eb33ea07->query('UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `id` = ?;', $f7107e3a92443147);
goto label2332;

label2938:

goto label2941;

label2939:

$ba2d146bb5a55097['need_confirm'] = 1;

label2941:

goto label2942;

label2942:

if (!$b62d6460eb33ea07->query('INSERT INTO `mag_events`(`status`, `mag_device_id`, `event`, `need_confirm`, `msg`, `reboot_after_ok`, `send_time`) VALUES (0, ?, ?, ?, ?, ?, ?);', $ba2d146bb5a55097['id'], $ba2d146bb5a55097['type'], $ba2d146bb5a55097['need_confirm'], $ba2d146bb5a55097['message'], $ba2d146bb5a55097['reboot_portal'], time())) {
	goto label2984;
}

$b62d6460eb33ea07->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'send_event', $F25600b52c026389['mag_id'], 0, $E59d0debc75e7be8['credits'], time(), json_encode($F25600b52c026389));
echo json_encode(['result' => true]);
exit();

label2984:

goto label2840;

label2985:

$A5a4a57a12bb19b3 = [];

foreach (array_map('intval', explode(',', XUI::$rRequest['channels'])) as $ee6d1fc5d801b43f) {
	if (!(in_array($ee6d1fc5d801b43f, $db0a61ef32b89a27['stream_ids']) && (0 < $ee6d1fc5d801b43f))) {
		goto label3012;
	}

	$A5a4a57a12bb19b3[] = $ee6d1fc5d801b43f;

	label3012:
}

if (!(count($A5a4a57a12bb19b3) == 0)) {
	goto label596;
}

echo json_encode($B9869413eae86beb);
goto label595;

label3026:

$b3295e009ed68643->close();

if (!isset(XUI::$rRequest['isp'])) {
	goto label1641;
}

$b3295e009ed68643 = new MaxMind\Db\Reader(GEOISP_BIN);
$Fca04b1755da7bd5['isp'] = $b3295e009ed68643->get($b38e11ffdc6a3abb);
goto label1639;

label3044:

$D7209256c56b1469 = 1;
goto label3052;

label3046:

$D7209256c56b1469 = intval(XUI::$rRequest['page']);

label3052:

goto label1889;

label3053:

echo json_encode(['result' => false]);

?>