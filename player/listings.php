<?php


goto label261;

label1:

$cef812722e0345be = intval(strtotime(XUI::$rRequest['startdate'])) ?: time();
$Cb3142d0e6e76fd5 = $cef812722e0345be + ($Aa6711f02f4e8165 * 3600);
$abac6c68d279439d = floatval(100 / ($Aa6711f02f4e8165 * 60));
$F6a625ab4f31c702 = $A5a4a57a12bb19b3;
sort($F6a625ab4f31c702);
goto label335;

label28:

file_put_contents(TMP_PATH . 'cache_' . $e4881d82e4bc2dc5, XUI::serialize($B9869413eae86beb));

label38:

echo json_encode($B9869413eae86beb);
goto label771;
goto label209;

label44:

echo json_encode($B9869413eae86beb);
goto label771;

label49:

if (PLATFORM == 'xui') {
	goto label61;
}

$b62d6460eb33ea07->query('SELECT FROM_BASE64(`title`) AS `title`, FROM_BASE64(`description`) AS `description`, UNIX_TIMESTAMP(`start`) AS `start`, UNIX_TIMESTAMP(`end`) AS `end` FROM `epg_data` WHERE UNIX_TIMESTAMP() >= UNIX_TIMESTAMP(`start`) AND UNIX_TIMESTAMP() < UNIX_TIMESTAMP(`end`) AND `epg_id` = ? AND `channel_id` = ? LIMIT 1;', $fe93a43f53d92a4e['epg_id'], $fe93a43f53d92a4e['channel_id']);
goto label411;

label61:

$b62d6460eb33ea07->query('SELECT `title`, `description`, `start`, `end` FROM `epg_data` WHERE UNIX_TIMESTAMP() >= `start` AND UNIX_TIMESTAMP() < `end` AND `epg_id` = ? AND `channel_id` = ? LIMIT 1;', $fe93a43f53d92a4e['epg_id'], $fe93a43f53d92a4e['channel_id']);
goto label411;

label69:

$e32a66a2a62d634c = ['ChannelId' => NULL, 'Title' => 'No Programme Information...', 'RelativeSize' => 100, 'StartTime' => 'N/A', 'EndTime' => '', 'Specialisation' => 'tv', 'Archive' => NULL];
$b62d6460eb33ea07->query('SELECT `id`, `stream_icon`, `stream_display_name`, `tv_archive_duration`, `tv_archive_server_id`, `category_id` FROM `streams` WHERE `id` IN (' . implode(',', $A5a4a57a12bb19b3) . ') ORDER BY FIELD(`id`, ' . implode(',', $A5a4a57a12bb19b3) . ') ASC;');

foreach ($b62d6460eb33ea07->get_rows() as $fe93a43f53d92a4e) {
	goto label155;

	label91:

	$F771d40e8cf51e59 = XUI::c721Bd954a5F072F('live');

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label112;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label124;

	label112:

	goto label114;

	label114:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label124:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label139;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label139:

	goto label182;

	label141:

	$ba10d8a0b8348643 = $fe93a43f53d92a4e['tv_archive_duration'];

	label143:

	$e506580b84e6e5da = $e32a66a2a62d634c;
	$e506580b84e6e5da['ChannelId'] = $fe93a43f53d92a4e['id'];
	$F05acfe4a87b8eb0 = json_decode($fe93a43f53d92a4e['category_id'], true);
	goto label91;

	label155:
	if (!(!$e284534cd21c2e0d || (0 < count($Ecb33c10e149ff2a[$fe93a43f53d92a4e['id']])))) {
		goto label204;
	}
	if ((0 < $fe93a43f53d92a4e['tv_archive_duration']) && (0 < $fe93a43f53d92a4e['tv_archive_server_id'])) {
		goto label180;
	}

	$ba10d8a0b8348643 = 0;
	goto label143;

	label180:

	goto label141;

	label182:

	$B9869413eae86beb['Channels'][] = ['Id' => $fe93a43f53d92a4e['id'], 'DisplayName' => $fe93a43f53d92a4e['stream_display_name'], 'CategoryName' => $Dbcac322b4274e46, 'Archive' => $ba10d8a0b8348643, 'Image' => XUI::fcA722697178454b($fe93a43f53d92a4e['stream_icon']) ?: '', 'TvListings' => $Ecb33c10e149ff2a[$fe93a43f53d92a4e['id']] ?: [$e506580b84e6e5da]];

	label204:

	goto label206;

	label206:
}

goto label28;

label209:

$B9869413eae86beb = ['id' => XUI::$rRequest['id'], 'title' => 'LIVE TV', 'epg_title' => 'No Programme Information...', 'epg_description' => '', 'url' => NULL];

if (!isset($b6a1c857cfab5b33[XUI::$rRequest['id']])) {
	goto label44;
}

$bcfd61adc96d4b72 = intval(XUI::$rRequest['start']) ?: '';
$f7037fc395d8fcad = intval(XUI::$rRequest['duration']) ?: '';
goto label453;

label240:

if (!(count($A5a4a57a12bb19b3) == 0)) {
	goto label252;
}

echo json_encode($B9869413eae86beb);
exit();

label252:

$Aa6711f02f4e8165 = intval(XUI::$rRequest['hours']) ?: 3;
goto label1;

label261:

include 'functions.php';
$b6a1c857cfab5b33 = array_flip($E59d0debc75e7be8['channel_ids']);
$Ea248c6503c74cd4 = XUI::$rRequest['timezone'] ?: 'Europe/London';
date_default_timezone_set($Ea248c6503c74cd4);

if (isset(XUI::$rRequest['id'])) {
	goto label209;
}

goto label301;

label280:

goto label44;

label281:

if (PLATFORM == 'xui') {
	goto label750;
}

$fd1716760f731949 = date('Y-m-d:H-i', $bcfd61adc96d4b72);
goto label729;

label291:

goto label300;

label292:

$b62d6460eb33ea07->query('SELECT `title`, `description`, `start`, `end` FROM `epg_data` WHERE `start` = ? AND `epg_id` = ? AND `channel_id` = ? LIMIT 1;', $bcfd61adc96d4b72, $fe93a43f53d92a4e['epg_id'], $fe93a43f53d92a4e['channel_id']);

label300:

goto label672;

label301:

$B9869413eae86beb = [
	'Channels' => []
];
$A5a4a57a12bb19b3 = [];
$e284534cd21c2e0d = intval(XUI::$rRequest['hideempty']) ?: 0;

foreach (array_map('intval', explode(',', XUI::$rRequest['channels'])) as $b39b8fa9afa1ec53) {
	if (!($b39b8fa9afa1ec53 && isset($b6a1c857cfab5b33[$b39b8fa9afa1ec53]))) {
		goto label332;
	}

	$A5a4a57a12bb19b3[] = $b39b8fa9afa1ec53;

	label332:
}

goto label240;

label335:

$e4881d82e4bc2dc5 = md5($Ea248c6503c74cd4 . '_' . $cef812722e0345be . '_' . $Aa6711f02f4e8165 . '_' . implode(',', $F6a625ab4f31c702) . '_' . $e284534cd21c2e0d);
if (!file_exists(TMP_PATH . 'cache_' . $e4881d82e4bc2dc5) || (600 < (time() - filemtime(TMP_PATH . 'cache_' . $e4881d82e4bc2dc5)))) {
	goto label383;
}

$B9869413eae86beb = XUI::unserialize(file_get_contents(TMP_PATH . 'cache_' . $e4881d82e4bc2dc5));
goto label38;

label383:

goto label704;

label384:

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `channel_id`, `epg_id` FROM `streams` WHERE `id` = ?;', XUI::$rRequest['id']);

if (!($b62d6460eb33ea07->num_rows() == 1)) {
	goto label425;
}

$fe93a43f53d92a4e = $b62d6460eb33ea07->get_row();
$B9869413eae86beb['title'] = $fe93a43f53d92a4e['stream_display_name'];
if (($bcfd61adc96d4b72 < time()) && (0 < $f7037fc395d8fcad)) {
	goto label412;
}

goto label49;

label411:

goto label300;

label412:

if (PLATFORM == 'xui') {
	goto label292;
}

$b62d6460eb33ea07->query('SELECT FROM_BASE64(`title`) AS `title`, FROM_BASE64(`description`) AS `description`, UNIX_TIMESTAMP(`start`) AS `start`, UNIX_TIMESTAMP(`end`) AS `end` FROM `epg_data` WHERE UNIX_TIMESTAMP(`start`) = ? AND `epg_id` = ? AND `channel_id` = ? LIMIT 1;', $bcfd61adc96d4b72, $fe93a43f53d92a4e['epg_id'], $fe93a43f53d92a4e['channel_id']);
goto label291;

label425:
$aa049d3d6d423a70 = XUI::C65C7f64E35c199f((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off')) || ($_SERVER['SERVER_PORT'] == 443));
if ((($bcfd61adc96d4b72 + ($f7037fc395d8fcad * 60)) < time()) && (0 < $f7037fc395d8fcad)) {
	goto label281;
}

goto label498;

label453:

$e4881d82e4bc2dc5 = md5($Ea248c6503c74cd4 . '_' . intval(XUI::$rRequest['id']) . '_' . $bcfd61adc96d4b72 . '_' . $f7037fc395d8fcad);
if (!file_exists(TMP_PATH . $e4881d82e4bc2dc5) || (60 < (time() - filemtime(TMP_PATH . $e4881d82e4bc2dc5)))) {
	goto label497;
}

$B9869413eae86beb = XUI::unserialize(file_get_contents(TMP_PATH . $e4881d82e4bc2dc5));
goto label425;

label497:

goto label384;

label498:

if (PLATFORM == 'xui') {
	goto label519;
}

$B9869413eae86beb['url'] = $aa049d3d6d423a70 . 'live/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . intval(XUI::$rRequest['id']) . '.m3u8';
goto label280;

label519:

$B9869413eae86beb['url'] = $aa049d3d6d423a70 . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . intval(XUI::$rRequest['id']) . '.m3u8';
goto label280;

label535:

$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`tv_archive_duration`, `tv_archive_server_id`, `epg_data`.`title`, `epg_data`.`description`, `epg_data`.`start`, `epg_data`.`end` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `streams`.`id` IN (' . implode(',', $A5a4a57a12bb19b3) . ') AND (`end` > ? AND `start` < ?) ORDER BY `id` ASC, `start` ASC;', $cef812722e0345be, $Cb3142d0e6e76fd5);

label546:

$a2ebb817d88c810b = $b62d6460eb33ea07->get_rows(true, 'id', false);

foreach ($a2ebb817d88c810b as $b39b8fa9afa1ec53 => $b1eed3fdb609052d) {
	$D5d27d8ec92c4129 = 0;

	foreach ($b1eed3fdb609052d as $a5725df552d26b87) {
		goto label561;

		label561:

		$bfc61716e199dc8e = ($a5725df552d26b87['start'] < $cef812722e0345be ? $cef812722e0345be : $a5725df552d26b87['start']);
		$e168dab3ba6bd7f9 = ($Cb3142d0e6e76fd5 < $a5725df552d26b87['end'] ? $Cb3142d0e6e76fd5 : $a5725df552d26b87['end']);
		$f7037fc395d8fcad = ($e168dab3ba6bd7f9 - $bfc61716e199dc8e) / 60;
		$ba10d8a0b8348643 = NULL;
		if (!((0 < $a5725df552d26b87['tv_archive_server_id']) && (0 < $a5725df552d26b87['tv_archive_duration']))) {
			goto label658;
		}

		goto label635;

		label595:

		$D5d27d8ec92c4129 += $c40233f3af7b706a;

		if (!(100 < $D5d27d8ec92c4129)) {
			goto label604;
		}

		$c40233f3af7b706a -= $D5d27d8ec92c4129 - 100;

		label604:

		$Ecb33c10e149ff2a[$a5725df552d26b87['id']][] = ['ChannelId' => $a5725df552d26b87['id'], 'Title' => $a5725df552d26b87['title'], 'RelativeSize' => $c40233f3af7b706a, 'StartTime' => date('h:ia', $bfc61716e199dc8e), 'EndTime' => date('h:ia', $e168dab3ba6bd7f9), 'Start' => $a5725df552d26b87['start'], 'End' => $a5725df552d26b87['end'], 'Specialisation' => 'tv', 'Archive' => $ba10d8a0b8348643];
		goto label632;

		label632:

		goto label667;

		label635:

		if (!((time() - ($a5725df552d26b87['tv_archive_duration'] * 86400)) <= $a5725df552d26b87['start'])) {
			goto label658;
		}

		$ba10d8a0b8348643 = [$a5725df552d26b87['start'], intval(($a5725df552d26b87['end'] - $a5725df552d26b87['start']) / 60)];

		label658:

		$c40233f3af7b706a = round($f7037fc395d8fcad * $abac6c68d279439d, 2);
		goto label595;

		label667:
	}
}

goto label69;

label672:

if (!($b62d6460eb33ea07->num_rows() == 1)) {
	goto label425;
}

$Ac8c03ed27c04ef2 = $b62d6460eb33ea07->get_row();
$B9869413eae86beb['epg_title'] = date('h:ia', $Ac8c03ed27c04ef2['start']) . ' - ' . $Ac8c03ed27c04ef2['title'];
$B9869413eae86beb['epg_description'] = $Ac8c03ed27c04ef2['description'];
file_put_contents(TMP_PATH . $e4881d82e4bc2dc5, XUI::serialize($B9869413eae86beb));
goto label425;

label704:

$Ecb33c10e149ff2a = [];

if (!(0 < count($A5a4a57a12bb19b3))) {
	goto label69;
}

if (PLATFORM == 'xui') {
	goto label535;
}

$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`tv_archive_duration`, `tv_archive_server_id`, FROM_BASE64(`epg_data`.`title`) AS `title`, FROM_BASE64(`epg_data`.`description`) AS `description`, UNIX_TIMESTAMP(`epg_data`.`start`) AS `start`, UNIX_TIMESTAMP(`epg_data`.`end`) AS `end` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `streams`.`id` IN (' . implode(',', $A5a4a57a12bb19b3) . ') AND (UNIX_TIMESTAMP(`end`) > ? AND UNIX_TIMESTAMP(`start`) < ?) ORDER BY `id` ASC, `start` ASC;', $cef812722e0345be, $Cb3142d0e6e76fd5);
goto label546;
goto label535;

label729:

$B9869413eae86beb['url'] = $aa049d3d6d423a70 . 'timeshift/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $f7037fc395d8fcad . '/' . $fd1716760f731949 . '/' . intval(XUI::$rRequest['id']) . '.m3u8';
goto label770;

label750:

$B9869413eae86beb['url'] = $aa049d3d6d423a70 . 'timeshift/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $f7037fc395d8fcad . '/' . $bcfd61adc96d4b72 . '/' . intval(XUI::$rRequest['id']) . '.m3u8';

label770:

goto label44;

label771:

?>