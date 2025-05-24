<?php


function filterRow($Fb9da1713bff19ce, $C17543903e9aa6ae, $c733678227713664)
{
	if (!(!$C17543903e9aa6ae && !$c733678227713664)) {
	}
	else {
		return $Fb9da1713bff19ce;
	}

	$B9869413eae86beb = [];

	foreach (array_keys($Fb9da1713bff19ce) as $Bb672d1983256a93) {
		goto label36;

		label19:

		goto label55;

		label21:

		goto label19;

		label23:

		if (!in_array($Bb672d1983256a93, $C17543903e9aa6ae)) {
			goto label19;
		}

		$B9869413eae86beb[$Bb672d1983256a93] = $Fb9da1713bff19ce[$Bb672d1983256a93];
		goto label19;

		label36:

		if ($C17543903e9aa6ae) {
			goto label23;
		}

		if (!$c733678227713664) {
			goto label21;
		}

		if (in_array($Bb672d1983256a93, $c733678227713664)) {
			goto label53;
		}

		$B9869413eae86beb[$Bb672d1983256a93] = $Fb9da1713bff19ce[$Bb672d1983256a93];

		label53:

		goto label21;

		label55:
	}

	return $B9869413eae86beb;
}

goto label4362;

label1:

require_once '../www/init.php';

label2:

if (PHP_ERRORS) {
	goto label2639;
}
if (!(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest'))) {
	goto label2639;
}

goto label2638;

label19:

if (0 < count($db0a61ef32b89a27['stream_ids'])) {
	goto label32;
}

echo json_encode($B9869413eae86beb);
exit();
goto label6684;

label32:

goto label6671;

label33:

$f7107e3a92443147 = $b62d6460eb33ea07->get_row()['id'];
$De97a60c730465cd = true;
require_once XUI_HOME . 'includes/admin.php';
$E59d0debc75e7be8 = bA89228dC958ce05($f7107e3a92443147);
goto label3529;

label46:

if (!(0 < count($C98047839de3d474))) {
	goto label2215;
}

$b62d6460eb33ea07->query('SELECT `users`.`username`, `lines`.`id` FROM `users` LEFT JOIN `lines` ON `lines`.`member_id` = `users`.`id` WHERE `lines`.`id` IN (' . implode(',', $C98047839de3d474) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f4e5ef13910179a5[$Fb9da1713bff19ce['id']]['owner_name'] = $Fb9da1713bff19ce['username'];
}

goto label799;

label74:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label101;
}

foreach (range(1, 9) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`users`.`id` LIKE ? OR `users`.`username` LIKE ? OR `users`.`notes` LIKE ? OR `r`.`username` LIKE ? OR FROM_UNIXTIME(`users`.`date_registered`) LIKE ? OR FROM_UNIXTIME(`users`.`last_login`) LIKE ? OR `users`.`email` LIKE ? OR `users`.`ip` LIKE ? OR `users_groups`.`group_name` LIKE ?)';

label101:

goto label4853;

label102:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label117;
}

$cf0aab70014807af[] = '`users`.`owner_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label117:

if (0 < count($cf0aab70014807af)) {
	goto label3186;
}

goto label3184;

label124:

echo json_encode($B9869413eae86beb);
exit();
goto label6751;

label130:

echo json_encode($B9869413eae86beb);
exit();

label135:

goto label3374;

label136:

$cf0aab70014807af[] = '`lines`.`member_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['user'];

label142:

if (!(0 < strlen(XUI::$rRequest['line']))) {
	goto label3298;
}

$cf0aab70014807af[] = '`lines_activity`.`user_id` = ?';
goto label3294;

label154:

$F771d40e8cf51e59 = f769e3F0c739d1a6('live');
$a2a53f18f4f95c8b = ['`id`', false, '`stream_display_name`', '`category_id`', '`clients`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label1436;
}

$E7dbfc96029b3745 = 0;
goto label1444;
goto label1436;

label176:

echo json_encode($B9869413eae86beb);
exit();
goto label3113;

label182:

$cf0aab70014807af[] = '`streams`.`id` IN (' . implode(',', array_map('intval', $db0a61ef32b89a27['stream_ids'])) . ')';
goto label3113;

label196:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label208;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label4608;

label208:

goto label4603;

label209:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label236;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`id` LIKE ? OR `stream_display_name` LIKE ?)';

label236:

goto label2587;

label237:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label459;

	label241:

	$eb4dd4cef4d22e4b = '<img loading=\'lazy\' src=\'assets/images/countries/' . strtolower($Fb9da1713bff19ce['geoip_country_code']) . '.png\'></img> &nbsp;';

	label248:

	if ($Fb9da1713bff19ce['user_ip']) {
		goto label402;
	}

	$b38e11ffdc6a3abb = '';
	goto label400;

	label255:

	$f7037fc395d8fcad = sprintf('%02dh %02dm', $f7037fc395d8fcad / 3600, ($f7037fc395d8fcad / 60) % 60);

	label264:

	goto label315;

	label266:

	$f7037fc395d8fcad = sprintf('%02dd %02dh', $f7037fc395d8fcad / 86400, ($f7037fc395d8fcad / 3600) % 24);
	goto label314;

	label277:

	$ff5cf44f96903d64 = '<a href=\'enigma?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label284:

	goto label373;

	label286:

	$ff5cf44f96903d64 = '<a href=\'mag?id=' . $Fb9da1713bff19ce['mag_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';
	goto label373;

	label295:

	if ($Fb9da1713bff19ce['is_mag']) {
		goto label286;
	}

	if ($Fb9da1713bff19ce['is_e2']) {
		goto label312;
	}

	$ff5cf44f96903d64 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';
	goto label284;

	label312:

	goto label277;

	label314:

	$E65328c8afa8e30a = 'danger';

	label315:

	$f7037fc395d8fcad = '<button type=\'button\' class=\'btn btn-' . $E65328c8afa8e30a . ' btn-xs waves-effect waves-light btn-fixed\'>' . $f7037fc395d8fcad . '</button>';
	$E8e13b4c9d9584b6 = '<button title="Kill Connection" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $Fb9da1713bff19ce['uuid'] . '\', \'kill\');"><i class="fas fa-hammer"></i></button>';
	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['activity_id'], $af895dada1de7cb4, $ff5cf44f96903d64, $aa4e95f1ed1932a8, $eb0ed57b1401ceea, $Fb9da1713bff19ce['isp'], $b38e11ffdc6a3abb, $f7037fc395d8fcad, strtoupper($Fb9da1713bff19ce['container']), $E8e13b4c9d9584b6];
	goto label346;

	label346:

	goto label498;

	label348:

	if ($Fb9da1713bff19ce['divergence'] <= 80) {
		goto label363;
	}

	$af895dada1de7cb4 = '<i class="text-danger fas fa-square tooltip" title="' . intval(100 - $Fb9da1713bff19ce['divergence']) . '%"></i>';
	goto label388;

	label363:

	$af895dada1de7cb4 = '<i class="text-warning fas fa-square tooltip" title="' . intval(100 - $Fb9da1713bff19ce['divergence']) . '%"></i>';
	goto label388;

	label373:

	$aa4e95f1ed1932a8 = $Fb9da1713bff19ce['stream_display_name'];

	if (0 < strlen($Fb9da1713bff19ce['geoip_country_code'])) {
		goto label241;
	}

	$eb4dd4cef4d22e4b = '';
	goto label248;
	goto label241;

	label388:

	goto label398;

	label390:

	$af895dada1de7cb4 = '<i class="text-success fas fa-square tooltip" title="' . intval(100 - $Fb9da1713bff19ce['divergence']) . '%"></i>';

	label398:

	goto label295;

	label400:

	goto label410;

	label402:

	$b38e11ffdc6a3abb = $eb4dd4cef4d22e4b . '<a onClick="whois(\'' . $Fb9da1713bff19ce['user_ip'] . '\');" href=\'javascript: void(0);\'>' . $Fb9da1713bff19ce['user_ip'] . '</a>';

	label410:

	$eb0ed57b1401ceea = trim(explode('(', $Fb9da1713bff19ce['user_agent'])[0]);
	goto label428;

	label423:

	goto label426;

	label425:

	$E65328c8afa8e30a = 'warning';

	label426:

	goto label255;

	label428:

	$f7037fc395d8fcad = intval(time()) - intval($Fb9da1713bff19ce['date_start']);
	$E65328c8afa8e30a = 'success';

	if (86400 <= $f7037fc395d8fcad) {
		goto label266;
	}

	if (3600 <= $f7037fc395d8fcad) {
		goto label486;
	}

	$f7037fc395d8fcad = sprintf('%02dm %02ds', ($f7037fc395d8fcad / 60) % 60, $f7037fc395d8fcad % 60);
	goto label484;

	label459:

	if (!$De97a60c730465cd) {
		goto label477;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label346;

	label477:

	if ($Fb9da1713bff19ce['divergence'] <= 50) {
		goto label390;
	}

	goto label348;

	label484:

	goto label264;

	label486:

	if (14400 < $f7037fc395d8fcad) {
		goto label425;
	}

	if (!(43200 < $f7037fc395d8fcad)) {
		goto label423;
	}

	$E65328c8afa8e30a = 'danger';
	goto label423;

	label498:
}

label500:

echo json_encode($B9869413eae86beb);
exit();
goto label2254;

label506:

goto label2254;

label507:

if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label511;
}

exit();

label511:

goto label5686;

label512:

if ($db0a61ef32b89a27['create_mag']) {
	goto label516;
}

exit();

label516:

$a2a53f18f4f95c8b = ['`lines`.`id`', '`lines`.`username`', '`mag_devices`.`mac`', '`mag_devices`.`stb_type`', '`users`.`username`', '`lines`.`enabled`', '`active_connections`', '`lines`.`is_trial`', '`lines`.`exp_date`', false];
goto label2994;

label518:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label712;

	label524:

	goto label533;

	label526:

	$bcfd61adc96d4b72 = date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date_start']);

	label533:

	if ($Fb9da1713bff19ce['date_end']) {
		goto label660;
	}

	goto label657;

	label539:

	goto label758;

	label541:

	$eb4dd4cef4d22e4b = '<img loading=\'lazy\' src=\'assets/images/countries/' . strtolower($Fb9da1713bff19ce['geoip_country_code']) . '.png\'></img> &nbsp;';

	label548:

	if ($Fb9da1713bff19ce['user_ip']) {
		goto label557;
	}

	$b38e11ffdc6a3abb = '';
	goto label565;
	goto label557;

	label557:

	$b38e11ffdc6a3abb = $eb4dd4cef4d22e4b . '<a onClick="whois(\'' . $Fb9da1713bff19ce['user_ip'] . '\');" href=\'javascript: void(0);\'>' . $Fb9da1713bff19ce['user_ip'] . '</a>';

	label565:

	if ($Fb9da1713bff19ce['date_start']) {
		goto label526;
	}

	$bcfd61adc96d4b72 = '';
	goto label524;

	label572:

	if ($Fb9da1713bff19ce['is_e2']) {
		goto label585;
	}

	$ff5cf44f96903d64 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';
	goto label675;

	label585:

	$ff5cf44f96903d64 = '<a href=\'enigma?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';
	goto label675;

	label594:

	$aa4e95f1ed1932a8 = $Fb9da1713bff19ce['stream_display_name'];

	if (0 < strlen($Fb9da1713bff19ce['geoip_country_code'])) {
		goto label607;
	}

	$eb4dd4cef4d22e4b = '';
	goto label548;

	label607:

	goto label541;

	label609:

	$f7037fc395d8fcad = sprintf('%02dh %02dm', $f7037fc395d8fcad / 3600, ($f7037fc395d8fcad / 60) % 60);

	label618:

	goto label632;

	label620:

	goto label622;

	label622:

	$f7037fc395d8fcad = sprintf('%02dd %02dh', $f7037fc395d8fcad / 86400, ($f7037fc395d8fcad / 3600) % 24);
	$E65328c8afa8e30a = 'danger';

	label632:

	$f7037fc395d8fcad = '<button type=\'button\' class=\'btn btn-' . $E65328c8afa8e30a . ' btn-xs waves-effect waves-light btn-fixed\'>' . $f7037fc395d8fcad . '</button>';
	$B9869413eae86beb['data'][] = [$ff5cf44f96903d64, $aa4e95f1ed1932a8, $eb0ed57b1401ceea, $Fb9da1713bff19ce['isp'], $b38e11ffdc6a3abb, $bcfd61adc96d4b72, $e7d4a79fdee9a1a0, $f7037fc395d8fcad, strtoupper($Fb9da1713bff19ce['container'])];
	goto label539;

	label657:

	$e7d4a79fdee9a1a0 = '';
	goto label667;

	label660:

	$e7d4a79fdee9a1a0 = date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date_end']);

	label667:

	goto label686;

	label669:

	$E65328c8afa8e30a = 'danger';

	label670:

	goto label609;

	label672:

	$E65328c8afa8e30a = 'warning';
	goto label609;

	label675:

	goto label684;

	label677:

	$ff5cf44f96903d64 = '<a href=\'mag?id=' . $Fb9da1713bff19ce['mag_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label684:

	goto label594;

	label686:

	$eb0ed57b1401ceea = trim(explode('(', $Fb9da1713bff19ce['user_agent'])[0]);
	$f7037fc395d8fcad = $Fb9da1713bff19ce['date_end'] - $Fb9da1713bff19ce['date_start'];
	$E65328c8afa8e30a = 'success';

	if (86400 <= $f7037fc395d8fcad) {
		goto label620;
	}

	if (3600 <= $f7037fc395d8fcad) {
		goto label747;
	}

	goto label736;

	label712:

	if (!$De97a60c730465cd) {
		goto label730;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label539;

	label730:

	if ($Fb9da1713bff19ce['is_mag']) {
		goto label677;
	}

	goto label572;

	label736:

	$f7037fc395d8fcad = sprintf('%02dm %02ds', ($f7037fc395d8fcad / 60) % 60, $f7037fc395d8fcad % 60);
	goto label618;

	label747:

	if (14400 < $f7037fc395d8fcad) {
		goto label672;
	}

	if (!(43200 < $f7037fc395d8fcad)) {
		goto label670;
	}

	goto label669;

	label758:
}

label760:

echo json_encode($B9869413eae86beb);
goto label5602;

label765:

$E7dbfc96029b3745 = 0;
goto label775;

label767:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label775:

goto label3488;

label776:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label798;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label798:

goto label4627;

label799:

if (XUI::$rSettings['redis_handler']) {
	goto label944;
}

$b62d6460eb33ea07->query('SELECT `lines_live`.`user_id`, `lines_live`.`stream_id`, `lines_live`.`date_start` AS `last_active`, `streams`.`stream_display_name` FROM `lines_live` LEFT JOIN `streams` ON `streams`.`id` = `lines_live`.`stream_id` INNER JOIN (SELECT `user_id`, MAX(`date_start`) AS `ts` FROM `lines_live` GROUP BY `user_id`) `maxt` ON (`lines_live`.`user_id` = `maxt`.`user_id` AND `lines_live`.`date_start` = `maxt`.`ts`) WHERE `lines_live`.`user_id` IN (' . implode(',', $C98047839de3d474) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_display_name'] = $Fb9da1713bff19ce['stream_display_name'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];
}

goto label2215;
goto label944;

label835:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label840:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `lines_activity` LEFT JOIN `lines` ON `lines_activity`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_activity`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_activity`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_activity`.`user_id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label4645;
}

goto label4642;

label854:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label859:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label130;
}

$B91645b8411dc88c = 'SELECT `id`, `stream_icon`, `stream_display_name`, `category_id`, (SELECT COUNT(*) FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . (')) AS `clients` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';');
goto label3065;

label885:

$ee6d1fc5d801b43f = (0 < intval(XUI::$rRequest['stream_id']) ? intval(XUI::$rRequest['stream_id']) : NULL);
if ($f7107e3a92443147 && in_array($f7107e3a92443147, $E59d0debc75e7be8['reports'])) {
	goto label921;
}

$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
goto label4289;

label921:

goto label4285;

label922:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label934;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label859;

label934:

goto label854;

label935:

$B9869413eae86beb['recordsTotal'] = 0;
goto label943;

label938:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label943:

goto label6494;

label944:

$B1e93ae2ae39e1ff = [];
$B692d6e1f0cf1f67 = XUI::a96AB74f1921d4AD($C98047839de3d474, false);
$dec36723d7be7c49 = [];

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $A1a73957c6feb09a) {
	foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
		if (in_array($Fd10d59f87b19e71['stream_id'], $dec36723d7be7c49)) {
			goto label971;
		}

		$dec36723d7be7c49[] = intval($Fd10d59f87b19e71['stream_id']);

		label971:
	}
}

goto label1227;

label976:

$D8e7681dfae2905b = array_slice($D8e7681dfae2905b, $bcfd61adc96d4b72, $Cc2b5dfe75dc164b);
$d5649ba25d2e07d4 = $dec36723d7be7c49 = $ec80784a08a705f6 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	if (!$Fb9da1713bff19ce['stream_id']) {
		goto label998;
	}

	$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);

	label998:

	if (!$Fb9da1713bff19ce['user_id']) {
		goto label1009;
	}

	$ec80784a08a705f6[] = intval($Fb9da1713bff19ce['user_id']);

	label1009:

	if (!$Fb9da1713bff19ce['uuid']) {
		goto label1017;
	}

	$d5649ba25d2e07d4[] = $Fb9da1713bff19ce['uuid'];

	label1017:
}

goto label3978;

label1020:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label1035;
}

$cf0aab70014807af[] = '`users_logs`.`owner` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label1035:

if (0 < count($cf0aab70014807af)) {
	goto label4307;
}

goto label4305;

label1042:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1055;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

label1055:

goto label4821;

label1056:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label1932;
}

$B91645b8411dc88c = 'SELECT `lines`.`id`, `lines`.`username`, `lines`.`member_id`, `lines`.`is_isplock`, `enigma2_devices`.`mac`, `enigma2_devices`.`public_ip`, `enigma2_devices`.`device_id`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`enabled`, `lines`.`reseller_notes`, `lines`.`max_connections`,  `lines`.`is_trial`, `users`.`username` AS `owner_name`, (SELECT count(*) FROM `lines_live` WHERE `lines`.`id` = `lines_live`.`user_id` AND `hls_end` = 0) AS `active_connections` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` INNER JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label3977;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
goto label2965;

label1085:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label2122;
}

$B91645b8411dc88c = 'SELECT `id`, `stream_icon`, `stream_display_name`, `movie_properties`, `category_id`, (SELECT COUNT(*) FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . (')) AS `clients` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';');
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2122;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
goto label1336;

label1121:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label760;
}

$B91645b8411dc88c = 'SELECT `mag_devices`.`mag_id`, `enigma2_devices`.`device_id`, `lines`.`is_e2`, `lines`.`is_mag`, `lines_activity`.`activity_id`, `lines_activity`.`container`, `lines_activity`.`isp`, `lines_activity`.`user_id`, `lines_activity`.`stream_id`, `streams`.`series_no`, `lines_activity`.`server_id`, `lines_activity`.`user_agent`, `lines_activity`.`user_ip`, `lines_activity`.`container`, `lines_activity`.`date_start`, `lines_activity`.`date_end`, `lines_activity`.`geoip_country_code`, IF(`lines`.`is_mag`, `mag_devices`.`mac`, IF(`lines`.`is_e2`, `enigma2_devices`.`mac`, `lines`.`username`)) AS `username`, `streams`.`stream_display_name`, `streams`.`type`, `lines`.`is_restreamer` FROM `lines_activity` LEFT JOIN `lines` ON `lines_activity`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_activity`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_activity`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_activity`.`user_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label760;
}

goto label518;

label1150:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label1165;
}

$cf0aab70014807af[] = '`lines`.`member_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label1165:

if (0 < count($cf0aab70014807af)) {
	goto label6646;
}

goto label6644;

label1172:

if (!$E59d0debc75e7be8['id']) {
	goto label3609;
}

if (isset($E59d0debc75e7be8['reports'])) {
	goto label1184;
}

echo json_encode($B9869413eae86beb);
exit();

label1184:

goto label3608;

label1185:

if ($b120584763e3d117 = strtotime($b120584763e3d117 . ' 23:59:59')) {
	goto label1193;
}

$b120584763e3d117 = NULL;

label1193:
if (!($F56066ad7b074468 && $b120584763e3d117)) {
	goto label5679;
}

goto label5673;

label1199:

$cf0aab70014807af[] = '`type` = 3';

label1201:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label1452;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label1450;

label1227:

$b42f717d234fde64 = [];

if (!(0 < count($dec36723d7be7c49))) {
	goto label2655;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$b42f717d234fde64[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['stream_display_name'];
}

goto label2655;

label1255:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label1282;
}

foreach (range(1, 10) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`lines_activity`.`user_agent` LIKE ? OR `lines_activity`.`user_ip` LIKE ? OR `lines_activity`.`container` LIKE ? OR FROM_UNIXTIME(`lines_activity`.`date_start`) LIKE ? OR FROM_UNIXTIME(`lines_activity`.`date_end`) LIKE ? OR `lines_activity`.`geoip_country_code` LIKE ? OR `lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';

label1282:

goto label1296;

label1283:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label1295;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label6475;

label1295:

goto label6470;

label1296:

if (!(0 < strlen(XUI::$rRequest['range']))) {
	goto label5601;
}

$F56066ad7b074468 = substr(XUI::$rRequest['range'], 0, 10);
$b120584763e3d117 = substr(XUI::$rRequest['range'], strlen(XUI::$rRequest['range']) - 10, 10);

if ($F56066ad7b074468 = strtotime($F56066ad7b074468 . ' 00:00:00')) {
	goto label5191;
}

$F56066ad7b074468 = NULL;
goto label5191;

label1336:

if (!XUI::$rSettings['redis_handler']) {
	goto label4756;
}

$B1e93ae2ae39e1ff = $C93288e1d85b6c77 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

goto label4732;

label1363:

goto label1369;

label1364:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label1369:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];
goto label1085;

label1373:

$Cc2b5dfe75dc164b = 1000;

label1374:

if ($A7d54b094ae83c95 == 'lines') {
	goto label3556;
}

if ($A7d54b094ae83c95 == 'mags') {
	goto label512;
}

if ($A7d54b094ae83c95 == 'enigmas') {
	goto label2266;
}

goto label4394;

label1384:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label1402:

if (0 < count($cf0aab70014807af)) {
	goto label3597;
}

$F5190fed237fabec = '';
goto label3596;

label1410:

echo json_encode($B9869413eae86beb);
exit();

label1415:

goto label5681;
goto label6102;

label1417:

goto label1423;

label1418:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label1423:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];
goto label1056;

label1427:

$B9869413eae86beb['recordsTotal'] = 0;
goto label1435;

label1430:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label1435:

goto label4530;

label1436:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label1444:

$Ab7613704ad1bb6c = isset(XUI::$rRequest['created']);
$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label19;

label1450:

$cf0aab70014807af[] = '(`id` LIKE ? OR `stream_display_name` LIKE ?)';

label1452:

if (!(0 < strlen(XUI::$rRequest['category']))) {
	goto label5724;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`category_id`, ?, \'$\')';
goto label5720;

label1464:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label1757;

	label1468:

	if ($Fb9da1713bff19ce['exp_date'] < time()) {
		goto label1492;
	}

	$Fd59b51c86fe1420 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small>';
	goto label1747;

	label1492:

	$Fd59b51c86fe1420 = '<span class="expired">' . date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small></span>';
	goto label1747;

	label1510:

	$Da8120ce4761cb4b = '<i class="text-secondary far fa-square"></i>';
	goto label1514;

	label1513:

	$Da8120ce4761cb4b = '<i class="text-success fas fa-square"></i>';

	label1514:

	goto label1786;

	label1516:

	$bad7716b52f57546 = '';

	if (!(0 < strlen($Fb9da1713bff19ce['reseller_notes']))) {
		goto label1839;
	}

	if (!(strlen($bad7716b52f57546) != 0)) {
		goto label1535;
	}

	$bad7716b52f57546 .= "\n";

	label1535:

	goto label1837;

	label1537:

	$E8e13b4c9d9584b6 .= '<button type="button" title="Download Playlist" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="download(\'' . $Fb9da1713bff19ce['username'] . '\', \'' . $Fb9da1713bff19ce['password'] . '\');"><i class="mdi mdi-download"></i></button>';

	label1544:

	if (!$db0a61ef32b89a27['reseller_client_connection_logs']) {
		goto label1857;
	}

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label1853;
	}

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="fas fa-hammer"></i></button>';
	goto label1851;

	label1557:

	if ($Fb9da1713bff19ce['exp_date']) {
		goto label1564;
	}

	$Fd59b51c86fe1420 = '&infin;';
	goto label1747;

	label1564:

	goto label1468;

	label1566:

	$c8629372383359e0 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['last_active']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['last_active']) . '</small>';

	label1581:

	goto label1617;

	label1583:

	goto label1601;

	label1585:
	if ($Fb9da1713bff19ce['exp_date'] && ($Fb9da1713bff19ce['exp_date'] < time())) {
		goto label1598;
	}

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square tooltip" title="Active"></i>';
	goto label1832;

	label1598:

	$b9f049445aa9bd5d = '<i class="text-warning far fa-square tooltip" title="Expired"></i>';
	goto label1832;

	label1601:

	$c8629372383359e0 = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a><br/><small class=\'text-secondary\'>Online: ' . XUI::A5d0a3407690F047(time() - $Fb9da1713bff19ce['last_active']) . '</small>';

	label1617:

	if (in_array($Fb9da1713bff19ce['member_id'], array_merge($db0a61ef32b89a27['direct_reports'], [$E59d0debc75e7be8['id']]))) {
		goto label1646;
	}

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['member_id']) . '\'>' . $Fb9da1713bff19ce['owner_name'] . '<br/><small class=\'text-pink\'>(indirect)</small></a>';
	goto label1656;
	goto label1646;

	label1646:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['member_id']) . '\'>' . $Fb9da1713bff19ce['owner_name'] . '</a>';

	label1656:

	$B9869413eae86beb['data'][] = ['<a href=\'line?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Fb9da1713bff19ce['id'] . '</a>', '<a href=\'line?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>', $Fb9da1713bff19ce['password'], $C0a1fd30f0173389, $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $F970919c38a333cf, $A9c066cee616f400, $Fd59b51c86fe1420, $c8629372383359e0, $E8e13b4c9d9584b6];

	label1684:

	goto label1899;

	label1686:

	$E8e13b4c9d9584b6 .= '</div>';
	if ($Fb9da1713bff19ce['active_connections'] && $Fb9da1713bff19ce['last_active']) {
		goto label1583;
	}

	if ($Fb9da1713bff19ce['last_active']) {
		goto label1566;
	}

	$c8629372383359e0 = 'Never';
	goto label1581;
	goto label1566;

	label1703:

	goto label1706;

	label1705:

	$A9c066cee616f400 = '<button type=\'button\' class=\'btn btn-dark text-white btn-xs waves-effect waves-light\'>&infin;</button>';

	label1706:

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	goto label1516;

	label1709:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';

	label1712:

	$E8e13b4c9d9584b6 .= '<a href="line?id=' . $Fb9da1713bff19ce['id'] . '"><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>';

	if (!$db0a61ef32b89a27['allow_download']) {
		goto label1544;
	}

	goto label1537;

	label1723:

	goto label1729;

	label1725:

	$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

	label1729:

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';
	goto label1686;

	label1735:

	if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
		goto label1745;
	}

	$F970919c38a333cf = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['active_connections'] . '</button>';
	goto label1869;

	label1745:

	goto label1859;

	label1747:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label1735;
	}

	$F970919c38a333cf = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label1869;
	goto label1735;

	label1757:

	$Fb9da1713bff19ce = array_merge($Fb9da1713bff19ce, $f4e5ef13910179a5[$Fb9da1713bff19ce['id']]);

	if (!XUI::$rSettings['redis_handler']) {
		goto label1780;
	}

	$Fb9da1713bff19ce['active_connections'] = (isset($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']]) ? $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] : 0);

	label1780:

	if (!$De97a60c730465cd) {
		goto label1810;
	}

	goto label1796;

	label1786:

	if ($Fb9da1713bff19ce['is_trial']) {
		goto label1793;
	}

	$dc2b8ff4adf881ae = '<i class="text-secondary far fa-square"></i>';
	goto label1557;

	label1793:

	$dc2b8ff4adf881ae = '<i class="text-warning fas fa-square"></i>';
	goto label1557;

	label1796:

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label1684;

	label1810:

	if (!$Fb9da1713bff19ce['admin_enabled']) {
		goto label1824;
	}

	if (!$Fb9da1713bff19ce['enabled']) {
		goto label1834;
	}

	goto label1585;

	label1822:

	goto label1825;

	label1824:

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square tooltip" title="Banned"></i>';

	label1825:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label1513;
	}

	goto label1510;

	label1832:

	goto label1835;

	label1834:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>';

	label1835:

	goto label1822;

	label1837:

	$bad7716b52f57546 .= $Fb9da1713bff19ce['reseller_notes'];

	label1839:

	if (0 < strlen($bad7716b52f57546)) {
		goto label1709;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label1712;
	goto label1709;

	label1851:

	goto label1857;

	label1853:

	$E8e13b4c9d9584b6 .= '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'kill_line\');"><i class="fas fa-hammer"></i></button>';

	label1857:

	goto label1880;

	label1859:

	$F970919c38a333cf = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['active_connections'] . '</button></a>';

	label1869:

	if ($Fb9da1713bff19ce['max_connections'] == 0) {
		goto label1705;
	}

	$A9c066cee616f400 = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['max_connections'] . '</button>';
	goto label1703;

	label1880:

	if (!$Fb9da1713bff19ce['is_isplock']) {
		goto label1889;
	}

	$E8e13b4c9d9584b6 .= '<button title="Reset ISP Lock" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'reset_isp\');"><i class="mdi mdi-lock-reset"></i></button>';

	label1889:

	if ($Fb9da1713bff19ce['enabled']) {
		goto label1725;
	}

	$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
	goto label1723;

	label1899:
}

label1901:

goto label124;

label1902:

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

if (!XUI::$rSettings['redis_handler']) {
	goto label2398;
}

$B1e93ae2ae39e1ff = $C93288e1d85b6c77 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

goto label3159;

label1932:

echo json_encode($B9869413eae86beb);
exit();

label1937:

goto label4246;
goto label512;

label1939:

$cf0aab70014807af[] = '(`lines_live`.`user_agent` LIKE ? OR `lines_live`.`user_ip` LIKE ? OR `lines_live`.`container` LIKE ? OR FROM_UNIXTIME(`lines_live`.`date_start`) LIKE ? OR `lines_live`.`geoip_country_code` LIKE ? OR `lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';

label1941:

if (!(0 < intval(XUI::$rRequest['stream']))) {
	goto label4378;
}

$cf0aab70014807af[] = '`lines_live`.`stream_id` = ?';
goto label4374;

label1953:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label2017;

	label1957:

	goto label1969;

	label1959:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label1969:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label2074;
	}

	goto label2067;

	label1979:

	goto label2065;

	label1981:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label1959;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label1957;

	label2004:

	goto label2083;

	label2006:

	if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
		goto label2104;
	}

	$E8e13b4c9d9584b6 = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['clients'] . '</button>';
	goto label2102;

	label2017:

	if (!XUI::$rSettings['redis_handler']) {
		goto label2029;
	}

	$Fb9da1713bff19ce['clients'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label2029:

	if (!$De97a60c730465cd) {
		goto label1981;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label1979;

	label2047:

	$c68b76c7e42b19eb = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Ccbdf03f8a4df633['movie_image'] . '\'><img loading=\'lazy\' src=\'resize?maxh=58&maxw=32&url=' . $Ccbdf03f8a4df633['movie_image'] . '\' /></a>';

	label2054:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $c68b76c7e42b19eb, $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $a93d58fa34cf616f, $E8e13b4c9d9584b6];

	label2065:

	goto label2120;

	label2067:

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label2074:

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label2006;
	}

	$E8e13b4c9d9584b6 = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label2004;

	label2083:

	$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);

	if (0 < strlen($Ccbdf03f8a4df633['movie_image'])) {
		goto label2047;
	}

	$c68b76c7e42b19eb = '';
	goto label2054;
	goto label2047;

	label2102:

	goto label2118;

	label2104:

	$E8e13b4c9d9584b6 = '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'purge\');"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['clients'] . '</button></a>';

	label2118:

	goto label2083;

	label2120:
}

label2122:

echo json_encode($B9869413eae86beb);
goto label5680;

label2127:

$a2a53f18f4f95c8b = ['`lines`.`id`', '`lines`.`username`', '`lines`.`password`', '`users`.`username`', '`lines`.`enabled` - `lines`.`admin_enabled`', '`active_connections` > 0', '`lines`.`is_trial`', '`active_connections`', '`lines`.`max_connections`', '`lines`.`exp_date`', '`last_activity`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label2144;
}

$E7dbfc96029b3745 = 0;
goto label2715;

label2144:

goto label2707;

label2145:

$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label2149:

if (0 < count($cf0aab70014807af)) {
	goto label3247;
}

$F5190fed237fabec = '';
goto label3253;
goto label3247;

label2158:

$B9869413eae86beb['recordsTotal'] = $a3b35b5bcdf091ff;
$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

label2174:

if (!(0 < count($D8e7681dfae2905b))) {
	goto label500;
}

goto label237;

label2182:

if (!($df6991d59f367c7e < count($D8e7681dfae2905b))) {
	goto label2158;
}

$D8e7681dfae2905b[$df6991d59f367c7e]['divergence'] = $ef631b924556ee2e[$D8e7681dfae2905b[$df6991d59f367c7e]['uuid']] ?: 0;
$D8e7681dfae2905b[$df6991d59f367c7e]['series_no'] = $cb98d4eed473e4c8[$D8e7681dfae2905b[$df6991d59f367c7e]['stream_id']] ?: NULL;
$D8e7681dfae2905b[$df6991d59f367c7e]['stream_display_name'] = $Af1444cd652ebf84[$D8e7681dfae2905b[$df6991d59f367c7e]['stream_id']][0] ?: '';
goto label4916;

label2215:

if (!(0 < count($B12f177002ce1b47))) {
	goto label1464;
}

$b62d6460eb33ea07->query('SELECT `user_id`, `stream_id`, `date_end` AS `last_active` FROM `lines_activity` WHERE `activity_id` IN (' . implode(',', $B12f177002ce1b47) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (isset($f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'])) {
		goto label2251;
	}

	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];

	label2251:
}

goto label1464;

label2254:

goto label5603;

label2255:

if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label6653;
}

exit();
goto label6653;

label2260:

echo json_encode($B9869413eae86beb);
exit();

label2265:

goto label1937;

label2266:

goto label4576;

label2267:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1901;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$B12f177002ce1b47 = $f4e5ef13910179a5 = $C98047839de3d474 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label2309;

	label2287:

	goto label2307;

	label2289:

	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])]['stream_id'] = $E4fc21fdcc2ed803['stream_id'];
	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])]['last_active'] = $E4fc21fdcc2ed803['date_end'];
	goto label2307;

	label2307:

	goto label2343;

	label2309:

	$C98047839de3d474[] = intval($Fb9da1713bff19ce['id']);
	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])] = ['owner_name' => NULL, 'stream_display_name' => NULL, 'stream_id' => NULL, 'last_active' => NULL];

	if ($E4fc21fdcc2ed803 = json_decode($Fb9da1713bff19ce['last_activity_array'], true)) {
		goto label2289;
	}

	if (!$Fb9da1713bff19ce['last_activity']) {
		goto label2287;
	}

	$B12f177002ce1b47[] = intval($Fb9da1713bff19ce['last_activity']);
	goto label2287;

	label2343:
}

goto label46;

label2346:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label2352:

$A38e57f944de21df = 'SELECT COUNT(`streams`.`id`) AS `count` FROM `streams` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label3561;

label2361:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ')';

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label5176;
}

foreach (range(1, 6) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label5174;

label2398:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label2543;

	label2402:

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label2411;
	}

	$E8e13b4c9d9584b6 = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label2520;

	label2411:

	goto label2530;

	label2413:

	goto label2504;

	label2415:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label2473;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label2471;

	label2438:

	$B080674c55093935 = '';
	goto label2448;

	label2441:

	$B080674c55093935 = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Fb9da1713bff19ce['stream_icon'] . '\'><img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url=' . $Fb9da1713bff19ce['stream_icon'] . '\' /></a>';

	label2448:

	goto label2493;

	label2450:

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label2457:
	if (!((0 < $Fb9da1713bff19ce['tv_archive_duration']) && (0 < $Fb9da1713bff19ce['tv_archive_server_id']))) {
		goto label2469;
	}

	$Fb9da1713bff19ce['stream_display_name'] .= ' <i class=\'text-danger mdi mdi-record\'></i>';

	label2469:

	goto label2402;

	label2471:

	goto label2483;

	label2473:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label2483:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label2457;
	}

	goto label2450;

	label2493:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $B080674c55093935, $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $a93d58fa34cf616f, $E8e13b4c9d9584b6];

	label2504:

	goto label2573;

	label2506:

	$E8e13b4c9d9584b6 = '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'purge\');"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['clients'] . '</button></a>';

	label2520:

	if (0 < strlen($Fb9da1713bff19ce['stream_icon'])) {
		goto label2441;
	}

	goto label2438;

	label2530:

	if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
		goto label2541;
	}

	$E8e13b4c9d9584b6 = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['clients'] . '</button>';
	goto label2520;

	label2541:

	goto label2506;

	label2543:

	if (!XUI::$rSettings['redis_handler']) {
		goto label2555;
	}

	$Fb9da1713bff19ce['clients'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label2555:

	if (!$De97a60c730465cd) {
		goto label2415;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label2413;

	label2573:
}

label2575:

goto label2260;

label2576:

$E7dbfc96029b3745 = 0;
goto label2586;

label2578:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label2586:

goto label4267;

label2587:

if (!(0 < strlen(XUI::$rRequest['category']))) {
	goto label2602;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label2602:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label1402;
}

goto label1384;

label2607:

echo json_encode($B9869413eae86beb);
exit();

label2612:

goto label506;

label2613:

if (!(0 < strlen(XUI::$rRequest['stream']))) {
	goto label2628;
}

$cf0aab70014807af[] = '`lines_activity`.`stream_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['stream'];

label2628:

if (!(0 < strlen(XUI::$rRequest['user']))) {
	goto label142;
}

goto label136;

label2638:

exit();

label2639:

$B9869413eae86beb = [
	'draw'            => intval(XUI::$rRequest['draw']),
	'recordsTotal'    => 0,
	'recordsFiltered' => 0,
	'data'            => []
];
$De97a60c730465cd = false;
goto label4660;

label2651:

$cf0aab70014807af[] = '`lines`.`enabled` = 0';

label2653:

goto label5583;

label2654:

goto label5581;

label2655:

foreach (array_keys($B692d6e1f0cf1f67) as $f7107e3a92443147) {
	array_multisort(array_column($B692d6e1f0cf1f67[$f7107e3a92443147], 'date_start'), SORT_DESC, $B692d6e1f0cf1f67[$f7107e3a92443147]);
	$f4e5ef13910179a5[$f7107e3a92443147]['stream_display_name'] = $b42f717d234fde64[$B692d6e1f0cf1f67[$f7107e3a92443147][0]['stream_id']];
	$f4e5ef13910179a5[$f7107e3a92443147]['stream_id'] = $B692d6e1f0cf1f67[$f7107e3a92443147][0]['stream_id'];
	$f4e5ef13910179a5[$f7107e3a92443147]['last_active'] = $B692d6e1f0cf1f67[$f7107e3a92443147][0]['date_start'];
	$B1e93ae2ae39e1ff[$f7107e3a92443147] = count($B692d6e1f0cf1f67[$f7107e3a92443147]);
}

unset($B692d6e1f0cf1f67);
goto label2215;

label2701:

$cf0aab70014807af[] = '(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())';

label2703:

goto label5747;

label2704:

$cf0aab70014807af[] = '`lines`.`admin_enabled` = 0';
goto label5747;

label2707:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label2715:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0';
$cf0aab70014807af[] = '`lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ')';
goto label4437;

label2729:

include 'functions.php';

label2730:

goto label3554;

label2731:

goto label5223;

label2732:

if (!$bc89bec2d7c7cf08) {
	goto label2739;
}

$ca8155fd3c07c1ee = array_reverse($ca8155fd3c07c1ee);

label2739:

$a3b35b5bcdf091ff = count($ca8155fd3c07c1ee);

foreach (XUI::$redis->mGet($ca8155fd3c07c1ee) as $Fb9da1713bff19ce) {
	goto label2784;

	label2751:

	if ($F74c31745a712716) {
		goto label2780;
	}
	if (!($ee6d1fc5d801b43f && ($ee6d1fc5d801b43f != $Fb9da1713bff19ce['stream_id']))) {
		goto label2766;
	}

	$a3b35b5bcdf091ff--;
	goto label2782;

	label2766:

	goto label2768;

	label2768:

	if (in_array($Fb9da1713bff19ce['user_id'], $C93288e1d85b6c77)) {
		goto label2780;
	}

	$a3b35b5bcdf091ff--;
	goto label2782;

	label2780:

	goto label2800;

	label2782:

	goto label2830;

	label2784:

	$Fb9da1713bff19ce = igbinary_unserialize($Fb9da1713bff19ce);

	if (is_array($Fb9da1713bff19ce)) {
		goto label2798;
	}

	$a3b35b5bcdf091ff--;
	goto label2782;

	label2798:

	goto label2751;

	label2800:

	$Fb9da1713bff19ce['activity_id'] = $Fb9da1713bff19ce['uuid'];
	$Fb9da1713bff19ce['identifier'] = $Fb9da1713bff19ce['user_id'] ?: ($Fb9da1713bff19ce['hmac_id'] . '_' . $Fb9da1713bff19ce['hmac_identifier']);
	$Fb9da1713bff19ce['active_time'] = time() - $Fb9da1713bff19ce['date_start'];
	$Fb9da1713bff19ce['server_name'] = XUI::$rServers[$Fb9da1713bff19ce['server_id']]['server_name'] ?: '';
	$D8e7681dfae2905b[] = $Fb9da1713bff19ce;
	goto label2782;

	label2830:
}

goto label3047;

label2833:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label2838:

if (0 < count($cf0aab70014807af)) {
	goto label2346;
}

$F5190fed237fabec = '';
goto label2352;
goto label2346;

label2847:

$a2a53f18f4f95c8b = ['`id`', false, '`stream_display_name`', '`category_id`', '`clients`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label2864;
}

$E7dbfc96029b3745 = 0;
goto label4949;

label2864:

goto label4941;

label2865:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label3022;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label3020;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label5748;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label2704;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label5796;
}

goto label5787;

label2895:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label2922;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `stream_display_name` LIKE ? OR `streams_series`.`title` LIKE ?)';

label2922:

goto label3442;

label2923:

$B1e93ae2ae39e1ff = [];
$B692d6e1f0cf1f67 = XUI::a96ab74f1921d4Ad($C98047839de3d474, false);

foreach (array_keys($B692d6e1f0cf1f67) as $f7107e3a92443147) {
	$B1e93ae2ae39e1ff[$f7107e3a92443147] = count($B692d6e1f0cf1f67[$f7107e3a92443147]);
}

unset($B692d6e1f0cf1f67);
goto label3642;

label2944:

$b62d6460eb33ea07->query('SELECT `uuid`, `divergence` FROM `lines_divergence` WHERE `uuid` IN (\'' . implode('\',\'', $d5649ba25d2e07d4) . '\');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$ef631b924556ee2e[$Fb9da1713bff19ce['uuid']] = $Fb9da1713bff19ce['divergence'];
}

label2963:

$df6991d59f367c7e = 0;
goto label2182;

label2965:

$C98047839de3d474 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	if (!$Fb9da1713bff19ce['id']) {
		goto label2979;
	}

	$C98047839de3d474[] = intval($Fb9da1713bff19ce['id']);

	label2979:
}

if (!(0 < count($C98047839de3d474))) {
	goto label3642;
}

if (!XUI::$rSettings['redis_handler']) {
	goto label3642;
}

goto label2923;

label2994:
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label3010;
}

$E7dbfc96029b3745 = 0;
goto label2361;

label3010:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);
goto label2361;

label3019:

goto label3022;

label3020:

$cf0aab70014807af[] = '(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))';

label3022:

goto label1150;

label3023:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label3029:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label840;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label835;

label3047:

$a2a53f18f4f95c8b = ['uuid', 'divergence', 'identifier', 'stream_display_name', 'user_agent', 'isp', 'user_ip', 'active_time', 'container', NULL];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label4703;
}

$E7dbfc96029b3745 = 0;
goto label4711;
goto label4703;

label3065:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label130;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

if (!XUI::$rSettings['redis_handler']) {
	goto label4991;
}

$B1e93ae2ae39e1ff = $C93288e1d85b6c77 = [];
goto label4757;

label3086:

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$C98047839de3d474 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	if (!$Fb9da1713bff19ce['id']) {
		goto label3103;
	}

	$C98047839de3d474[] = intval($Fb9da1713bff19ce['id']);

	label3103:
}

if (!(0 < count($C98047839de3d474))) {
	goto label5243;
}

goto label5608;

label3113:

$cf0aab70014807af[] = '`type` = 2';

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label3143;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label3141;

label3141:

$cf0aab70014807af[] = '(`id` LIKE ? OR `stream_display_name` LIKE ?)';

label3143:

if (!(0 < strlen(XUI::$rRequest['category']))) {
	goto label776;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];
goto label776;

label3159:

if (!(0 < count($C93288e1d85b6c77))) {
	goto label3183;
}

foreach (XUI::a96AB74f1921d4Ad($C93288e1d85b6c77, false) as $f7107e3a92443147 => $A1a73957c6feb09a) {
	foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
		$B1e93ae2ae39e1ff[$Fd10d59f87b19e71['stream_id']]++;
	}
}

label3183:

goto label2398;

label3184:

$F5190fed237fabec = '';
goto label3192;

label3186:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label3192:

goto label4410;

label3193:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label3201:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`users_logs`.`owner` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ')';
goto label4675;

label3213:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($C93288e1d85b6c77))) {
	goto label4010;
}

foreach (XUI::a96Ab74f1921D4ad($C93288e1d85b6c77, false) as $f7107e3a92443147 => $A1a73957c6feb09a) {
	foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
		$B1e93ae2ae39e1ff[$Fd10d59f87b19e71['stream_id']]++;
	}
}

goto label4010;

label3247:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label3253:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label6566;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label6561;

label3271:

goto label3285;

label3272:

$cf0aab70014807af[] = '`streams`.`id` IN (' . implode(',', array_map('intval', $db0a61ef32b89a27['stream_ids'])) . ')';

label3285:

$cf0aab70014807af[] = '`type` = 5';
goto label2895;

label3288:

$cf0aab70014807af[] = '`lines`.`enabled` = 0';

label3290:

goto label5633;

label3291:

$cf0aab70014807af[] = '(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))';
goto label5633;

label3294:

$B03cfeca75020c69[] = XUI::$rRequest['line'];

label3298:

if (0 < count($cf0aab70014807af)) {
	goto label3023;
}

$F5190fed237fabec = '';
goto label3029;
goto label3023;

label3307:

goto label3321;

label3308:

$cf0aab70014807af[] = '`streams`.`id` IN (' . implode(',', array_map('intval', $db0a61ef32b89a27['stream_ids'])) . ')';

label3321:

$cf0aab70014807af[] = '`type` = 4';
goto label209;

label3324:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label1410;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `stream_icon`, `stream_display_name`, `movie_properties`, `streams_series`.`category_id`, `streams_series`.`title`, `streams_episodes`.`season_num`, (SELECT COUNT(*) FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . (')) AS `clients` FROM `streams` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';');
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label3615;

label3354:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label3369;
}

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label3369:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines_live`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_live`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_live`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_live`.`user_id` ' . $F5190fed237fabec . ';';
goto label4962;

label3374:

goto label2265;

label3375:

if ($db0a61ef32b89a27['can_view_vod']) {
	goto label3379;
}

exit();

label3379:

goto label154;

label3380:

$cf0aab70014807af[] = '(`lines`.`username` LIKE ? OR `enigma2_devices`.`mac` LIKE ? OR `enigma2_devices`.`public_ip` LIKE ? OR `users`.`username` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`reseller_notes` LIKE ?)';

label3382:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label5633;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label3291;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label3528;
}

goto label5159;

label3402:

$A38e57f944de21df = 'SELECT COUNT(`lines`.`id`) AS `count` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` INNER JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label1418;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label1417;

label3418:

$cf0aab70014807af[] = '`streams_series`.`id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['series'];

label3424:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label2838;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label2833;

label3442:

if (!(0 < strlen(XUI::$rRequest['category']))) {
	goto label3457;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams_series`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label3457:

if (!(0 < strlen(XUI::$rRequest['series']))) {
	goto label3424;
}

goto label3418;

label3467:

exit();

label3468:

$F771d40e8cf51e59 = F769E3F0c739d1a6('series');
$a2a53f18f4f95c8b = ['`id`', false, '`stream_display_name`', '`category_id`', '`clients`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label2578;
}

goto label2576;

label3488:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ')';

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label3382;
}

foreach (range(1, 6) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label3380;

label3525:

$cf0aab70014807af[] = '(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())';

label3527:

goto label3290;

label3528:

goto label3288;

label3529:

$db0a61ef32b89a27 = array_merge(ACeb5cFe4194f4F0($E59d0debc75e7be8['member_group_id']), a0Bb5aDf0F9ccC8E($E59d0debc75e7be8['id']));

if (!(0 < strlen($E59d0debc75e7be8['timezone']))) {
	goto label3554;
}

date_default_timezone_set($E59d0debc75e7be8['timezone']);

label3554:

goto label1172;

label3555:

goto label6751;

label3556:

if ($db0a61ef32b89a27['create_line']) {
	goto label3560;
}

exit();

label3560:

goto label2127;

label3561:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label3569;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label3324;

label3569:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label3324;

label3575:

exit();

label3576:

$F771d40e8cf51e59 = F769e3f0C739D1A6('radio');
$a2a53f18f4f95c8b = ['`id`', false, '`stream_display_name`', '`category_id`', '`clients`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label6532;
}

goto label6530;

label3596:

goto label3603;

label3597:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label3603:

$A38e57f944de21df = 'SELECT COUNT(`streams`.`id`) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
goto label922;

label3608:

goto label3614;

label3609:

echo json_encode($B9869413eae86beb);
exit();

label3614:

goto label6607;

label3615:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label4192;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

if (!XUI::$rSettings['redis_handler']) {
	goto label4010;
}

$B1e93ae2ae39e1ff = $C93288e1d85b6c77 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');
goto label3213;

label3642:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label3821;

	label3646:

	$E8e13b4c9d9584b6 .= '<button title="Convert to User Line" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'convert\');"><i class="fas fa-retweet"></i></button>';

	label3650:

	if (!$db0a61ef32b89a27['reseller_client_connection_logs']) {
		goto label3956;
	}

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label3952;
	}

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="fas fa-hammer"></i></button>';
	goto label3950;

	label3663:

	if ($Fb9da1713bff19ce['exp_date']) {
		goto label3670;
	}

	$Fd59b51c86fe1420 = '&infin;';
	goto label3922;

	label3670:

	if ($Fb9da1713bff19ce['exp_date'] < time()) {
		goto label3904;
	}

	goto label3887;

	label3679:

	$bad7716b52f57546 .= "\n";

	label3680:

	$bad7716b52f57546 .= $Fb9da1713bff19ce['reseller_notes'];

	label3682:

	if (0 < strlen($bad7716b52f57546)) {
		goto label3970;
	}

	goto label3967;

	label3691:

	$dc2b8ff4adf881ae = '<i class="text-secondary far fa-square"></i>';
	goto label3695;

	label3694:

	$dc2b8ff4adf881ae = '<i class="text-warning fas fa-square"></i>';

	label3695:

	goto label3663;

	label3697:

	goto label3709;

	label3699:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['member_id']) . '\'>' . $Fb9da1713bff19ce['owner_name'] . '</a>';

	label3709:

	$B9869413eae86beb['data'][] = ['<a href=\'enigma?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['device_id'] . '</a>', $Fb9da1713bff19ce['username'], '<a href=\'enigma?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['mac'] . '</a>', '<a onClick="whois(\'' . $Fb9da1713bff19ce['public_ip'] . '\');" href=\'javascript: void(0);\'>' . $Fb9da1713bff19ce['public_ip'] . '</a>', $C0a1fd30f0173389, $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $Fd59b51c86fe1420, $E8e13b4c9d9584b6];
	goto label3819;

	label3743:

	goto label3746;

	label3745:

	$Da8120ce4761cb4b = '<i class="text-success fas fa-square"></i>';

	label3746:

	if ($Fb9da1713bff19ce['is_trial']) {
		goto label3694;
	}

	goto label3691;

	label3752:

	goto label3819;

	label3754:

	if (!$Fb9da1713bff19ce['admin_enabled']) {
		goto label3958;
	}

	if (!$Fb9da1713bff19ce['enabled']) {
		goto label3945;
	}
	if ($Fb9da1713bff19ce['exp_date'] && ($Fb9da1713bff19ce['exp_date'] < time())) {
		goto label3799;
	}

	goto label3796;

	label3776:

	$E8e13b4c9d9584b6 .= '<a href="enigma?id=' . $Fb9da1713bff19ce['device_id'] . '"><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>';

	if (!$Fb9da1713bff19ce['is_isplock']) {
		goto label3789;
	}

	$E8e13b4c9d9584b6 .= '<button title="Reset ISP Lock" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'reset_isp\');"><i class="mdi mdi-lock-reset"></i></button>';

	label3789:

	if (!$db0a61ef32b89a27['create_line']) {
		goto label3650;
	}

	goto label3646;

	label3796:

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square"></i>';
	goto label3800;

	label3799:

	$b9f049445aa9bd5d = '<i class="text-warning far fa-square"></i>';

	label3800:

	goto label3943;

	label3802:

	if ($Fb9da1713bff19ce['enabled'] == 1) {
		goto label3813;
	}

	$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
	goto label3855;

	label3813:

	$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';
	goto label3855;

	label3819:

	goto label3975;

	label3821:

	if (!XUI::$rSettings['redis_handler']) {
		goto label3837;
	}

	$Fb9da1713bff19ce['active_connections'] = (isset($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']]) ? $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] : 0);

	label3837:

	if (!$De97a60c730465cd) {
		goto label3754;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label3752;

	label3855:

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';
	$E8e13b4c9d9584b6 .= '</div>';

	if (in_array($Fb9da1713bff19ce['member_id'], array_merge($db0a61ef32b89a27['direct_reports'], [$E59d0debc75e7be8['id']]))) {
		goto label3699;
	}

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['member_id']) . '\'>' . $Fb9da1713bff19ce['owner_name'] . '<br/><small class=\'text-pink\'>(indirect)</small></a>';
	goto label3697;

	label3887:

	$Fd59b51c86fe1420 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small>';
	goto label3920;

	label3904:

	$Fd59b51c86fe1420 = '<span class="expired">' . date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small></span>';

	label3920:

	goto label3922;

	label3922:

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	$bad7716b52f57546 = '';

	if (!(0 < strlen($Fb9da1713bff19ce['reseller_notes']))) {
		goto label3682;
	}

	if (!(strlen($bad7716b52f57546) != 0)) {
		goto label3680;
	}

	goto label3679;

	label3943:

	goto label3946;

	label3945:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square"></i>';

	label3946:

	goto label3959;
	goto label3958;

	label3950:

	goto label3956;

	label3952:

	$E8e13b4c9d9584b6 .= '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'kill_line\');"><i class="fas fa-hammer"></i></button>';

	label3956:

	goto label3802;

	label3958:

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square"></i>';

	label3959:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label3745;
	}

	$Da8120ce4761cb4b = '<i class="text-warning far fa-square"></i>';
	goto label3743;

	label3967:

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label3973;

	label3970:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';

	label3973:

	goto label3776;

	label3975:
}

label3977:

goto label1932;

label3978:

$Af1444cd652ebf84 = $ef631b924556ee2e = $cb98d4eed473e4c8 = $E1902340fde7c04b = [];

if (!(0 < count($ec80784a08a705f6))) {
	goto label5760;
}

$b62d6460eb33ea07->query('SELECT `lines`.`id`, `lines`.`is_mag`, `lines`.`is_e2`, `lines`.`is_restreamer`, `lines`.`username`, `mag_devices`.`mag_id`, `enigma2_devices`.`device_id` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `lines`.`id` IN (' . implode(',', $ec80784a08a705f6) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f7107e3a92443147 = $Fb9da1713bff19ce['id'];
	unset($Fb9da1713bff19ce['id']);
	$E1902340fde7c04b[$f7107e3a92443147] = $Fb9da1713bff19ce;
}

goto label5760;

label4010:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label4112;

	label4014:

	$E8e13b4c9d9584b6 = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['clients'] . '</button>';
	goto label4152;

	label4021:

	$E8e13b4c9d9584b6 = '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'purge\');"><i class="mdi mdi-hammer"></i></button>';
	goto label4142;

	label4027:

	$c68b76c7e42b19eb = '';
	goto label4037;

	label4030:

	$c68b76c7e42b19eb = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Ccbdf03f8a4df633['movie_image'] . '\'><img loading=\'lazy\' src=\'resize?maxh=58&maxw=32&url=' . $Ccbdf03f8a4df633['movie_image'] . '\' /></a>';

	label4037:

	goto label4168;

	label4039:

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label4056;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label4090;

	label4056:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';
	goto label4090;

	label4068:

	goto label4178;

	label4070:

	$E276bd7f89cfc862 = $Fb9da1713bff19ce['title'] . ' - Season ' . $Fb9da1713bff19ce['season_num'];
	$B7bbd17ec35a49aa = '<b>' . $Fb9da1713bff19ce['stream_display_name'] . ('</b><br><span style=\'font-size:11px;\'>' . $E276bd7f89cfc862 . '</span>');
	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	goto label4039;

	label4090:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label4105;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label4105:

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label4184;
	}

	goto label4180;

	label4112:

	if (!XUI::$rSettings['redis_handler']) {
		goto label4124;
	}

	$Fb9da1713bff19ce['clients'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label4124:

	if (!$De97a60c730465cd) {
		goto label4070;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label4068;

	label4142:

	$a93d58fa34cf616f = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['clients'] . '</button></a>';

	label4152:

	$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);

	if (0 < strlen($Ccbdf03f8a4df633['movie_image'])) {
		goto label4030;
	}

	goto label4027;

	label4168:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $c68b76c7e42b19eb, $B7bbd17ec35a49aa, $Dbcac322b4274e46, $a93d58fa34cf616f, $E8e13b4c9d9584b6];

	label4178:

	goto label4190;

	label4180:

	$E8e13b4c9d9584b6 = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label4152;

	label4184:

	if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
		goto label4021;
	}

	goto label4014;

	label4190:
}

label4192:

goto label1410;

label4193:

$a2a53f18f4f95c8b = ['`users_logs`.`id`', '`users`.`username`', '`users_logs`.`log_id`', '`users_logs`.`type`, `users_logs`.`action`', '`users_logs`.`cost`', '`users_logs`.`credits_after`', '`users_logs`.`date`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label3193;
}

$E7dbfc96029b3745 = 0;
goto label3201;
goto label3193;

label4211:

$b62d6460eb33ea07->query('SELECT `id`, `type`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Af1444cd652ebf84[$Fb9da1713bff19ce['id']] = [$Fb9da1713bff19ce['stream_display_name'], $Fb9da1713bff19ce['type']];
}

label4233:

if (!(0 < count($d5649ba25d2e07d4))) {
	goto label2963;
}

goto label2944;

label4241:

echo json_encode($B9869413eae86beb);
exit();

label4246:

goto label3555;

label4247:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label4253:

$A38e57f944de21df = 'SELECT COUNT(`streams`.`id`) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label938;
}

goto label935;

label4267:

$Ab7613704ad1bb6c = isset(XUI::$rRequest['created']);
$cf0aab70014807af = $B03cfeca75020c69 = [];

if (0 < count($db0a61ef32b89a27['stream_ids'])) {
	goto label3272;
}

echo json_encode($B9869413eae86beb);
exit();
goto label3271;

label4285:

$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` = ?;', $f7107e3a92443147);

label4289:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

$ca8155fd3c07c1ee = XUI::A96aB74F1921d4aD($C93288e1d85b6c77, false, true);
goto label2732;

label4305:

$F5190fed237fabec = '';
goto label4313;

label4307:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label4313:

goto label6580;

label4314:

if (XUI::$rRequest['filter'] == 2) {
	goto label2651;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label6098;
}

if (!(XUI::$rRequest['filter'] == 4)) {
	goto label4332;
}

$cf0aab70014807af[] = '`lines`.`is_trial` = 1';

label4332:

goto label6097;

label4333:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label4339:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label3402;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;
goto label3402;

label4362:

session_start();
session_write_close();

if (file_exists('../www/init.php')) {
	goto label1;
}

require_once '../../../www/init.php';
goto label2;
goto label1;

label4374:

$B03cfeca75020c69[] = XUI::$rRequest['stream'];

label4378:

if (!(0 < intval(XUI::$rRequest['user']))) {
	goto label6708;
}

$cf0aab70014807af[] = '`lines`.`member_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['user'];
goto label6708;

label4394:

if ($A7d54b094ae83c95 == 'streams') {
	goto label3375;
}

if ($A7d54b094ae83c95 == 'radios') {
	goto label5682;
}

if ($A7d54b094ae83c95 == 'movies') {
	goto label6102;
}

if ($A7d54b094ae83c95 == 'episodes') {
	goto label5604;
}

if ($A7d54b094ae83c95 == 'line_activity') {
	goto label2255;
}

goto label4476;

label4410:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label4432;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label4432:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` LEFT JOIN `users` AS `r` on `r`.`id` = `users`.`owner_id` ' . $F5190fed237fabec . ';';
goto label196;

label4437:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label4464;
}

foreach (range(1, 6) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`lines`.`username` LIKE ? OR `lines`.`password` LIKE ? OR `users`.`username` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`max_connections` LIKE ? OR `lines`.`reseller_notes` LIKE ?)';

label4464:

goto label2865;

label4465:

$E7dbfc96029b3745 = 0;
goto label4475;

label4467:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label4475:

goto label4491;

label4476:

if ($A7d54b094ae83c95 == 'live_connections') {
	goto label507;
}

if ($A7d54b094ae83c95 == 'reg_user_logs') {
	goto label4193;
}

if (!($A7d54b094ae83c95 == 'reg_users')) {
	goto label4601;
}

if ($db0a61ef32b89a27['create_sub_resellers']) {
	goto label6690;
}

exit();
goto label6690;

label4491:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`hls_end` = 0';
$cf0aab70014807af[] = '`lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ')';

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label1941;
}

foreach (range(1, 9) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label1939;

label4530:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label4241;
}

$B91645b8411dc88c = 'SELECT `lines`.`id`, `lines`.`username`, `lines`.`member_id`, `lines`.`is_isplock`, `mag_devices`.`mac`, `mag_devices`.`stb_type`, `mag_devices`.`mag_id`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`enabled`, `lines`.`reseller_notes`, `lines`.`max_connections`,  `lines`.`is_trial`, `users`.`username` AS `owner_name`, (SELECT count(*) FROM `lines_live` WHERE `lines`.`id` = `lines_live`.`user_id` AND `hls_end` = 0) AS `active_connections` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` INNER JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label4241;
}

goto label3086;

label4559:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label4564:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label2607;
}

$b00d1d65528795d1 = d8C8284136938eF0();
goto label6111;

label4576:

if ($db0a61ef32b89a27['create_enigma']) {
	goto label4580;
}

exit();

label4580:

$a2a53f18f4f95c8b = ['`lines`.`id`', '`lines`.`username`', '`enigma2_devices`.`mac`', '`enigma2_devices`.`public_ip`', '`users`.`username`', '`lines`.`enabled`', '`active_connections`', '`lines`.`is_trial`', '`lines`.`exp_date`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label767;
}

goto label765;

label4596:

echo json_encode($B9869413eae86beb);
exit();

label4601:

goto label2612;
goto label4193;

label4603:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label4608:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label4596;
}

$B91645b8411dc88c = 'SELECT `users`.`id`, `users`.`status`, `users_groups`.`is_reseller`, `users`.`notes`, `users`.`owner_id`, `users`.`credits`, `users`.`username`, `users`.`email`, `users`.`ip`, FROM_UNIXTIME(`users`.`date_registered`) AS `date_registered`, FROM_UNIXTIME(`users`.`last_login`) AS `last_login`, `r`.`username` as `owner_username`, `users_groups`.`group_name`, `users`.`status`, (SELECT COUNT(`id`) FROM `lines` WHERE `member_id` = `users`.`id`) AS `user_count` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` LEFT JOIN `users` AS `r` on `r`.`id` = `users`.`owner_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label5797;

label4627:

if (0 < count($cf0aab70014807af)) {
	goto label4635;
}

$F5190fed237fabec = '';
goto label4975;

label4635:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label4975;

label4642:

$B9869413eae86beb['recordsTotal'] = 0;
goto label4650;

label4645:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label4650:

goto label1121;

label4651:

if (0 < count($cf0aab70014807af)) {
	goto label4659;
}

$F5190fed237fabec = '';
goto label4253;

label4659:

goto label4247;

label4660:

if (isset(XUI::$rRequest['api_key'])) {
	goto label2731;
}

if (isset($_SESSION['reseller'])) {
	goto label2729;
}

echo json_encode($B9869413eae86beb);
exit();
goto label2730;
goto label2729;

label4675:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label4702;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`users`.`username` LIKE ? OR `users_logs`.`type` LIKE ? OR `users_logs`.`action` LIKE ?)';

label4702:

goto label4876;

label4703:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label4711:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label976;
}

array_multisort(array_column($D8e7681dfae2905b, $a2a53f18f4f95c8b[$E7dbfc96029b3745]), $bc89bec2d7c7cf08 ? SORT_ASC : SORT_DESC, $D8e7681dfae2905b);
goto label976;

label4732:

if (!(0 < count($C93288e1d85b6c77))) {
	goto label4756;
}

foreach (XUI::a96aB74f1921d4ad($C93288e1d85b6c77, false) as $f7107e3a92443147 => $A1a73957c6feb09a) {
	foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
		$B1e93ae2ae39e1ff[$Fd10d59f87b19e71['stream_id']]++;
	}
}

label4756:

goto label1953;

label4757:

$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C93288e1d85b6c77[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($C93288e1d85b6c77))) {
	goto label4991;
}

foreach (XUI::a96Ab74f1921d4AD($C93288e1d85b6c77, false) as $f7107e3a92443147 => $A1a73957c6feb09a) {
	foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
		$B1e93ae2ae39e1ff[$Fd10d59f87b19e71['stream_id']]++;
	}
}

goto label4991;

label4801:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label4809:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ')';
goto label1255;

label4821:

goto label2174;

label4822:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? false : true);
$C93288e1d85b6c77 = [];
$f7107e3a92443147 = (0 < intval(XUI::$rRequest['user']) ? intval(XUI::$rRequest['user']) : NULL);
goto label885;

label4853:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label5158;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label5156;
}

if (!(XUI::$rRequest['filter'] == 2)) {
	goto label4875;
}

$cf0aab70014807af[] = '`users`.`status` = 0';

label4875:

goto label5155;

label4876:

if (!(0 < strlen(XUI::$rRequest['range']))) {
	goto label5679;
}

$F56066ad7b074468 = substr(XUI::$rRequest['range'], 0, 10);
$b120584763e3d117 = substr(XUI::$rRequest['range'], strlen(XUI::$rRequest['range']) - 10, 10);

if ($F56066ad7b074468 = strtotime($F56066ad7b074468 . ' 00:00:00')) {
	goto label1185;
}

$F56066ad7b074468 = NULL;
goto label1185;

label4916:

$D8e7681dfae2905b[$df6991d59f367c7e]['type'] = $Af1444cd652ebf84[$D8e7681dfae2905b[$df6991d59f367c7e]['stream_id']][1] ?: 1;
$D8e7681dfae2905b[$df6991d59f367c7e] = array_merge($D8e7681dfae2905b[$df6991d59f367c7e], $E1902340fde7c04b[$D8e7681dfae2905b[$df6991d59f367c7e]['user_id']] ?: []);
$df6991d59f367c7e++;
goto label2182;
goto label2158;

label4941:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label4949:

$Ab7613704ad1bb6c = isset(XUI::$rRequest['created']);
$cf0aab70014807af = $B03cfeca75020c69 = [];

if (0 < count($db0a61ef32b89a27['stream_ids'])) {
	goto label182;
}

goto label176;

label4962:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label4974;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label5654;

label4974:

goto label5649;

label4975:

$A38e57f944de21df = 'SELECT COUNT(`streams`.`id`) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label1364;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label1363;

label4991:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label5037;

	label4995:

	goto label5007;

	label4997:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label5007:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label5099;
	}

	goto label5092;

	label5017:

	$B080674c55093935 = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Fb9da1713bff19ce['stream_icon'] . '\'><img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url=' . $Fb9da1713bff19ce['stream_icon'] . '\' /></a>';

	label5024:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $B080674c55093935, $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $a93d58fa34cf616f, $E8e13b4c9d9584b6];

	label5035:

	goto label5152;

	label5037:

	if (!XUI::$rSettings['redis_handler']) {
		goto label5049;
	}

	$Fb9da1713bff19ce['clients'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label5049:

	if (!$De97a60c730465cd) {
		goto label5069;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label5067;

	label5067:

	goto label5035;

	label5069:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label4997;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label4995;

	label5092:

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label5099:

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label5123;
	}

	$E8e13b4c9d9584b6 = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label5121;

	label5108:

	if (0 < strlen($Fb9da1713bff19ce['stream_icon'])) {
		goto label5119;
	}

	$B080674c55093935 = '';
	goto label5024;

	label5119:

	goto label5017;

	label5121:

	goto label5108;

	label5123:

	if ($db0a61ef32b89a27['reseller_client_connection_logs']) {
		goto label5136;
	}

	$E8e13b4c9d9584b6 = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['clients'] . '</button>';
	goto label5134;

	label5134:

	goto label5150;

	label5136:

	$E8e13b4c9d9584b6 = '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'purge\');"><i class="mdi mdi-hammer"></i></button>';
	$a93d58fa34cf616f = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['clients'] . '</button></a>';

	label5150:

	goto label5108;

	label5152:
}

goto label130;

label5155:

goto label5158;

label5156:

$cf0aab70014807af[] = '`users`.`status` = 1';

label5158:

goto label102;

label5159:

if (XUI::$rRequest['filter'] == 3) {
	goto label3525;
}

if (!(XUI::$rRequest['filter'] == 4)) {
	goto label5172;
}

$cf0aab70014807af[] = '`lines`.`is_trial` = 1';

label5172:

goto label3527;
goto label3525;

label5174:

$cf0aab70014807af[] = '(`lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `mag_devices`.`stb_type` LIKE ? OR `users`.`username` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`reseller_notes` LIKE ?)';

label5176:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label5583;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label2654;
}

goto label4314;

label5191:

if ($b120584763e3d117 = strtotime($b120584763e3d117 . ' 23:59:59')) {
	goto label5199;
}

$b120584763e3d117 = NULL;

label5199:
if (!($F56066ad7b074468 && $b120584763e3d117)) {
	goto label5601;
}

goto label5595;

label5205:

$Ab7613704ad1bb6c = isset(XUI::$rRequest['created']);
$cf0aab70014807af = $B03cfeca75020c69 = [];

if (0 < count($db0a61ef32b89a27['stream_ids'])) {
	goto label3308;
}

echo json_encode($B9869413eae86beb);
exit();
goto label3307;

label5223:

$B9869413eae86beb = [
	'status' => 'STATUS_SUCCESS',
	'data'   => []
];
$b62d6460eb33ea07->query('SELECT `id` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `api_key` = ? AND LENGTH(`api_key`) > 0 AND `is_reseller` = 1 AND `status` = 1;', XUI::$rRequest['api_key']);

if (!($b62d6460eb33ea07->num_rows() == 0)) {
	goto label33;
}

echo json_encode(['status' => 'STATUS_FAILURE', 'error' => 'Invalid API key.']);
exit();
goto label33;

label5242:

unset($B692d6e1f0cf1f67);

label5243:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label5299;

	label5247:

	$E8e13b4c9d9584b6 .= '<button title="MAG Event" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="message(' . $Fb9da1713bff19ce['mag_id'] . ', \'' . $Fb9da1713bff19ce['mac'] . '\');"><i class="mdi mdi-message-alert"></i></button>';
	$E8e13b4c9d9584b6 .= '<a href="mag?id=' . $Fb9da1713bff19ce['mag_id'] . '"><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>';

	if (!$Fb9da1713bff19ce['is_isplock']) {
		goto label5267;
	}

	$E8e13b4c9d9584b6 .= '<button title="Reset ISP Lock" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'reset_isp\');"><i class="mdi mdi-lock-reset"></i></button>';

	label5267:

	goto label5539;

	label5269:

	$dc2b8ff4adf881ae = '<i class="text-secondary far fa-square"></i>';
	goto label5273;

	label5272:

	$dc2b8ff4adf881ae = '<i class="text-warning fas fa-square"></i>';

	label5273:

	goto label5502;

	label5275:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['member_id']) . '\'>' . $Fb9da1713bff19ce['owner_name'] . '<br/><small class=\'text-pink\'>(indirect)</small></a>';
	goto label5297;

	label5287:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['member_id']) . '\'>' . $Fb9da1713bff19ce['owner_name'] . '</a>';

	label5297:

	goto label5473;

	label5299:

	if (!XUI::$rSettings['redis_handler']) {
		goto label5315;
	}

	$Fb9da1713bff19ce['active_connections'] = (isset($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']]) ? $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] : 0);

	label5315:

	if (!$De97a60c730465cd) {
		goto label5335;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label5333;

	label5333:

	goto label5500;

	label5335:

	if (!$Fb9da1713bff19ce['admin_enabled']) {
		goto label5560;
	}

	if (!$Fb9da1713bff19ce['enabled']) {
		goto label5359;
	}
	if ($Fb9da1713bff19ce['exp_date'] && ($Fb9da1713bff19ce['exp_date'] < time())) {
		goto label5415;
	}

	goto label5412;

	label5357:

	goto label5360;

	label5359:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square"></i>';

	label5360:

	goto label5561;
	goto label5560;

	label5364:

	if ($Fb9da1713bff19ce['enabled'] == 1) {
		goto label5375;
	}

	$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
	goto label5451;

	label5375:

	goto label5447;

	label5377:

	$Fd59b51c86fe1420 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small>';
	goto label5410;

	label5394:

	$Fd59b51c86fe1420 = '<span class="expired">' . date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small></span>';

	label5410:

	goto label5518;

	label5412:

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square"></i>';
	goto label5416;

	label5415:

	$b9f049445aa9bd5d = '<i class="text-warning far fa-square"></i>';

	label5416:

	goto label5357;

	label5418:

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label5424;

	label5421:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';

	label5424:

	goto label5247;

	label5426:

	$bad7716b52f57546 .= "\n";

	label5427:

	$bad7716b52f57546 .= $Fb9da1713bff19ce['reseller_notes'];

	label5429:

	if (0 < strlen($bad7716b52f57546)) {
		goto label5421;
	}

	goto label5418;

	label5438:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="fas fa-hammer"></i></button>';
	goto label5445;

	label5441:

	$E8e13b4c9d9584b6 .= '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'kill_line\');"><i class="fas fa-hammer"></i></button>';

	label5445:

	goto label5364;

	label5447:

	$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

	label5451:

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';
	$E8e13b4c9d9584b6 .= '</div>';

	if (in_array($Fb9da1713bff19ce['member_id'], array_merge($db0a61ef32b89a27['direct_reports'], [$E59d0debc75e7be8['id']]))) {
		goto label5287;
	}

	goto label5275;

	label5473:

	$B9869413eae86beb['data'][] = ['<a href=\'mag?id=' . $Fb9da1713bff19ce['mag_id'] . '\'>' . $Fb9da1713bff19ce['mag_id'] . '</a>', $Fb9da1713bff19ce['username'], '<a href=\'mag?id=' . $Fb9da1713bff19ce['mag_id'] . '\'>' . $Fb9da1713bff19ce['mac'] . '</a>', $Fb9da1713bff19ce['stb_type'], $C0a1fd30f0173389, $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $Fd59b51c86fe1420, $E8e13b4c9d9584b6];

	label5500:

	goto label5578;

	label5502:

	if ($Fb9da1713bff19ce['exp_date']) {
		goto label5509;
	}

	$Fd59b51c86fe1420 = '&infin;';
	goto label5518;

	label5509:

	if ($Fb9da1713bff19ce['exp_date'] < time()) {
		goto label5394;
	}

	goto label5377;

	label5518:

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	$bad7716b52f57546 = '';

	if (!(0 < strlen($Fb9da1713bff19ce['reseller_notes']))) {
		goto label5429;
	}

	if (!(strlen($bad7716b52f57546) != 0)) {
		goto label5427;
	}

	goto label5426;

	label5539:

	if (!$db0a61ef32b89a27['create_line']) {
		goto label5548;
	}

	$E8e13b4c9d9584b6 .= '<button title="Convert to User Line" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'convert\');"><i class="fas fa-retweet"></i></button>';

	label5548:

	if (!$db0a61ef32b89a27['reseller_client_connection_logs']) {
		goto label5364;
	}

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label5441;
	}

	goto label5438;

	label5560:

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square"></i>';

	label5561:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label5571;
	}

	$Da8120ce4761cb4b = '<i class="text-warning far fa-square"></i>';
	goto label5569;

	label5569:

	goto label5572;

	label5571:

	$Da8120ce4761cb4b = '<i class="text-success fas fa-square"></i>';

	label5572:

	if ($Fb9da1713bff19ce['is_trial']) {
		goto label5272;
	}

	goto label5269;

	label5578:
}

goto label4241;

label5581:

$cf0aab70014807af[] = '(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))';

label5583:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label2149;
}

$cf0aab70014807af[] = '`lines`.`member_id` = ?';
goto label2145;

label5595:

$cf0aab70014807af[] = '(`lines_activity`.`date_start` >= ? AND `lines_activity`.`date_end` <= ?)';
$B03cfeca75020c69[] = $F56066ad7b074468;
$B03cfeca75020c69[] = $b120584763e3d117;

label5601:

goto label2613;

label5602:

exit();

label5603:

goto label1415;

label5604:

if ($db0a61ef32b89a27['can_view_vod']) {
	goto label3468;
}

goto label3467;

label5608:

if (!XUI::$rSettings['redis_handler']) {
	goto label5243;
}

$B1e93ae2ae39e1ff = [];
$B692d6e1f0cf1f67 = XUI::a96ab74F1921d4Ad($C98047839de3d474, false);

foreach (array_keys($B692d6e1f0cf1f67) as $f7107e3a92443147) {
	$B1e93ae2ae39e1ff[$f7107e3a92443147] = count($B692d6e1f0cf1f67[$f7107e3a92443147]);
}

goto label5242;

label5633:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label5751;
}

$cf0aab70014807af[] = '`lines`.`member_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];
goto label5751;

label5649:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label5654:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label1055;
}

$B91645b8411dc88c = 'SELECT `mag_devices`.`mag_id`, `enigma2_devices`.`device_id`, `lines`.`is_e2`, `lines`.`is_mag`, `lines_live`.`activity_id`, `lines_live`.`divergence`, `lines_live`.`user_id`, `lines_live`.`stream_id`, `streams`.`series_no`, `lines`.`is_restreamer`, `lines_live`.`isp`, `lines_live`.`server_id`, `lines_live`.`user_agent`, `lines_live`.`user_ip`, `lines_live`.`container`, `lines_live`.`uuid`, `lines_live`.`date_start`, `lines_live`.`geoip_country_code`, IF(`lines`.`is_mag`, `mag_devices`.`mac`, IF(`lines`.`is_e2`, `enigma2_devices`.`mac`, `lines`.`username`)) AS `username`, `streams`.`stream_display_name`, `streams`.`type` FROM `lines_live` LEFT JOIN `lines` ON `lines_live`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_live`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_live`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_live`.`user_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label1042;

label5673:

$cf0aab70014807af[] = '(`users_logs`.`date` >= ? AND `users_logs`.`date` <= ?)';
$B03cfeca75020c69[] = $F56066ad7b074468;
$B03cfeca75020c69[] = $b120584763e3d117;

label5679:

goto label1020;

label5680:

exit();

label5681:

goto label135;

label5682:

if ($db0a61ef32b89a27['can_view_vod']) {
	goto label3576;
}

goto label3575;

label5686:

$D8e7681dfae2905b = [];

if (XUI::$rSettings['redis_handler']) {
	goto label4822;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$a2a53f18f4f95c8b = ['`lines_live`.`activity_id`', '`lines_live`.`divergence`', '`username`', '`streams`.`stream_display_name`', '`lines_live`.`user_agent`', '`lines_live`.`isp`', '`lines_live`.`user_ip`', 'UNIX_TIMESTAMP() - `lines_live`.`date_start`', '`lines_live`.`container`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label4467;
}

goto label4465;

label5720:

$B03cfeca75020c69[] = XUI::$rRequest['category'];

label5724:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label4651;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;
goto label4651;

label5747:

goto label5750;

label5748:

$cf0aab70014807af[] = '`lines`.`enabled` = 0';

label5750:

goto label3019;

label5751:

if (0 < count($cf0aab70014807af)) {
	goto label5759;
}

$F5190fed237fabec = '';
goto label4339;

label5759:

goto label4333;

label5760:

if (!(0 < count($dec36723d7be7c49))) {
	goto label4233;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, `series_id` FROM `streams_episodes` WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$cb98d4eed473e4c8[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['series_id'];
}

goto label4211;

label5787:

if (!(XUI::$rRequest['filter'] == 5)) {
	goto label5795;
}

$cf0aab70014807af[] = '`lines`.`is_trial` = 1';

label5795:

goto label2703;

label5796:

goto label2701;

label5797:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label6096;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label5915;

	label5813:

	if (!$db0a61ef32b89a27['delete_users']) {
		goto label5822;
	}

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label5822:

	$E8e13b4c9d9584b6 .= '</div>';

	if (0 < strlen($Fb9da1713bff19ce['ip'])) {
		goto label6085;
	}

	goto label6082;

	label5833:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['owner_id']) . '\'>' . $Fb9da1713bff19ce['owner_username'] . '</a>';

	label5843:

	$B9869413eae86beb['data'][] = ['<a href=\'user?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Fb9da1713bff19ce['id'] . '</a>', $ff5cf44f96903d64, $C0a1fd30f0173389, $b38e11ffdc6a3abb, $b9f049445aa9bd5d, $E8f21e009ba7a8c5, $F951699bbe4a956e, $Fb9da1713bff19ce['last_login'], $E8e13b4c9d9584b6];

	label5865:

	goto label6094;

	label5867:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label5874;

	label5870:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label5874:

	goto label6020;

	label5876:

	$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
	goto label5886;

	label5882:

	$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

	label5886:

	goto label5813;

	label5888:

	if (0 < $Fb9da1713bff19ce['user_count']) {
		goto label5896;
	}

	$F951699bbe4a956e = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">0</button>';
	goto label5991;

	label5896:

	goto label5983;

	label5898:

	if ($Fb9da1713bff19ce['last_login']) {
		goto label5904;
	}

	$Fb9da1713bff19ce['last_login'] = 'NEVER';

	label5904:

	$E8e13b4c9d9584b6 = '<div class="btn-group">';

	if (0 < strlen($Fb9da1713bff19ce['notes'])) {
		goto label5870;
	}

	goto label5867;

	label5915:

	if (!$De97a60c730465cd) {
		goto label5933;
	}

	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label5865;

	label5933:

	if ($Fb9da1713bff19ce['status'] == 1) {
		goto label5980;
	}

	goto label5977;

	label5940:

	$E8e13b4c9d9584b6 .= '<button title="Adjust Credits" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="addCredits(' . $Fb9da1713bff19ce['id'] . ', \'' . addslashes($Fb9da1713bff19ce['username']) . '\', ' . intval($Fb9da1713bff19ce['credits']) . ');"><i class="mdi mdi-coin"></i></button>';
	$ff5cf44f96903d64 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label5966:

	$E8e13b4c9d9584b6 .= '<a href="user?id=' . $Fb9da1713bff19ce['id'] . '"><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>';

	if ($Fb9da1713bff19ce['status'] == 1) {
		goto label5882;
	}

	goto label5876;

	label5977:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square"></i>';
	goto label5981;

	label5980:

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square"></i>';

	label5981:

	goto label5898;

	label5983:

	$F951699bbe4a956e = '<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($Fb9da1713bff19ce['user_count'], 0) . '</button>';

	label5991:

	if (in_array($Fb9da1713bff19ce['owner_id'], array_merge($db0a61ef32b89a27['direct_reports'], [$E59d0debc75e7be8['id']]))) {
		goto label5833;
	}

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['owner_id']) . '\'>' . $Fb9da1713bff19ce['owner_username'] . '<br/><small class=\'text-pink\'>(indirect)</small></a>';
	goto label5843;
	goto label5833;

	label6020:

	if (in_array($Fb9da1713bff19ce['id'], array_merge($db0a61ef32b89a27['direct_reports'], [$E59d0debc75e7be8['id']]))) {
		goto label6063;
	}

	$E8e13b4c9d9584b6 .= '<button title="Adjust Credits" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="addCredits(' . $Fb9da1713bff19ce['id'] . ', \'' . addslashes($Fb9da1713bff19ce['username']) . '\', ' . intval($Fb9da1713bff19ce['credits']) . ', true);"><i class="mdi mdi-coin"></i></button>';
	$ff5cf44f96903d64 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Fb9da1713bff19ce['username'] . '<br/><small class=\'text-pink\'>(indirect)</small></a>';
	goto label5966;

	label6063:

	goto label5940;

	label6065:

	if ($Fb9da1713bff19ce['is_reseller']) {
		goto label6072;
	}

	$E8f21e009ba7a8c5 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">-</button>';
	goto label5888;

	label6072:

	$E8f21e009ba7a8c5 = '<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($Fb9da1713bff19ce['credits'], 0) . '</button>';
	goto label5888;

	label6082:

	$b38e11ffdc6a3abb = '';
	goto label6092;

	label6085:

	$b38e11ffdc6a3abb = '<a onClick="whois(\'' . $Fb9da1713bff19ce['ip'] . '\');" href=\'javascript: void(0);\'>' . $Fb9da1713bff19ce['ip'] . '</a>';

	label6092:

	goto label6065;

	label6094:
}

label6096:

goto label4596;

label6097:

goto label6100;

label6098:

$cf0aab70014807af[] = '(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())';

label6100:

goto label2653;
goto label2651;

label6102:

if ($db0a61ef32b89a27['can_view_vod']) {
	goto label6106;
}

exit();

label6106:

$F771d40e8cf51e59 = F769E3F0C739D1a6('movie');
goto label2847;

label6111:

$B91645b8411dc88c = 'SELECT `users`.`username`, `users_logs`.`id`, `users_logs`.`owner`, `users_logs`.`type`, `users_logs`.`action`, `users_logs`.`log_id`, `users_logs`.`package_id`, `users_logs`.`cost`, `users_logs`.`credits_after`, `users_logs`.`date`, `users_logs`.`deleted_info` FROM `users_logs` LEFT JOIN `users` ON `users`.`id` = `users_logs`.`owner` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2607;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label6176;

	label6137:

	if (in_array($Fb9da1713bff19ce['owner'], array_merge($db0a61ef32b89a27['direct_reports'], [$E59d0debc75e7be8['id']]))) {
		goto label6164;
	}

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['owner']) . '\'>' . $Fb9da1713bff19ce['username'] . '<br/><small class=\'text-pink\'>(indirect)</small></a>';
	goto label6345;

	label6164:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . intval($Fb9da1713bff19ce['owner']) . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';
	goto label6345;

	label6176:

	if (!$De97a60c730465cd) {
		goto label6195;
	}

	unset($Fb9da1713bff19ce['deleted_info']);
	$B9869413eae86beb['data'][] = filterRow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label6224;

	label6195:

	goto label6137;

	label6197:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $C0a1fd30f0173389, $f4e5ef13910179a5, $fb173e63c96d4021, number_format($Fb9da1713bff19ce['cost'], 0), number_format($Fb9da1713bff19ce['credits_after'], 0), date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date'])];

	label6224:

	goto label6467;

	label6226:

	$a60b15f35e32ef1b = json_decode($Fb9da1713bff19ce['deleted_info'], true);

	if (is_array($a60b15f35e32ef1b)) {
		goto label6241;
	}

	$f4e5ef13910179a5 = '<span class=\'text-secondary\'>DELETED</span>';
	goto label6197;

	label6241:

	goto label6451;

	label6243:

	$f4e5ef13910179a5 = NULL;

	switch ($Fb9da1713bff19ce['type']) {
	case 'line':
		$F5ba2106d5227309 = b5ad1d95A92Ce732($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label6273;
		}

		$f4e5ef13910179a5 = '<a href=\'line?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['username'] . '</a>';

		label6273:

		goto label6340;
	case 'user':
		$F5ba2106d5227309 = ba89228Dc958cE05($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label6294;
		}

		$f4e5ef13910179a5 = '<a href=\'user?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['username'] . '</a>';

		label6294:

		goto label6340;
	case 'mag':
		$F5ba2106d5227309 = a32D85aEfA28959D($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label6315;
		}

		$f4e5ef13910179a5 = '<a href=\'mag?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['mac'] . '</a>';

		label6315:

		goto label6340;
	case 'enigma':
		$F5ba2106d5227309 = Ef70A93E98FB7Ce9($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label6336;
		}

		$f4e5ef13910179a5 = '<a href=\'enigma?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['mac'] . '</a>';

		label6336:

		goto label6340;
	default:
	}

	label6340:

	if ($f4e5ef13910179a5) {
		goto label6197;
	}

	goto label6226;

	label6345:

	$c050a23c479bc67e = ['line' => 'User Line', 'mag' => 'MAG Device', 'enigma' => 'Enigma2 Device', 'user' => 'Reseller'][$Fb9da1713bff19ce['type']];

	switch ($Fb9da1713bff19ce['action']) {
	case 'new':
		if ($Fb9da1713bff19ce['package_id']) {
			goto label6378;
		}

		$fb173e63c96d4021 = 'Created New ' . $c050a23c479bc67e;
		goto label6386;

		label6378:

		$fb173e63c96d4021 = 'Created New ' . $c050a23c479bc67e . ' with Package: ' . $b00d1d65528795d1[$Fb9da1713bff19ce['package_id']]['package_name'];

		label6386:

		goto label6449;
	case 'extend':
		if ($Fb9da1713bff19ce['package_id']) {
			goto label6400;
		}

		$fb173e63c96d4021 = 'Extended ' . $c050a23c479bc67e;
		goto label6408;

		label6400:

		$fb173e63c96d4021 = 'Extended ' . $c050a23c479bc67e . ' with Package: ' . $b00d1d65528795d1[$Fb9da1713bff19ce['package_id']]['package_name'];

		label6408:

		goto label6449;
	case 'edit':
		$fb173e63c96d4021 = 'Edited ' . $c050a23c479bc67e;
		goto label6449;
	case 'enable':
		$fb173e63c96d4021 = 'Enabled ' . $c050a23c479bc67e;
		goto label6449;
	case 'disable':
		$fb173e63c96d4021 = 'Disabled ' . $c050a23c479bc67e;
		goto label6449;
	case 'delete':
		$fb173e63c96d4021 = 'Deleted ' . $c050a23c479bc67e;
		goto label6449;
	case 'send_event':
		$fb173e63c96d4021 = 'Sent Event to ' . $c050a23c479bc67e;
		goto label6449;
	case 'adjust_credits':
		$fb173e63c96d4021 = 'Adjusted Credits by ' . $Fb9da1713bff19ce['cost'];
		goto label6449;
	default:
	}

	label6449:

	goto label6243;

	label6451:

	if (isset($a60b15f35e32ef1b['mac'])) {
		goto label6461;
	}

	$f4e5ef13910179a5 = '<span class=\'text-secondary\'>' . $a60b15f35e32ef1b['username'] . '</span>';
	goto label6197;

	label6461:

	$f4e5ef13910179a5 = '<span class=\'text-secondary\'>' . $a60b15f35e32ef1b['mac'] . '</span>';
	goto label6197;

	label6467:
}

goto label2607;

label6470:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label6475:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label124;
}

$B91645b8411dc88c = 'SELECT `lines`.`id`, `lines`.`member_id`, `lines`.`last_activity`, `lines`.`last_activity_array`, `lines`.`username`, `lines`.`password`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`is_restreamer`, `lines`.`enabled`, `lines`.`admin_notes`, `lines`.`reseller_notes`, `lines`.`max_connections`, `lines`.`is_trial`, (SELECT COUNT(*) AS `active_connections` FROM `lines_live` WHERE `user_id` = `lines`.`id` AND `hls_end` = 0) AS `active_connections` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label2267;

label6494:

$B9869413eae86beb['recordsFiltered'] = $B9869413eae86beb['recordsTotal'];

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label2575;
}

$B91645b8411dc88c = 'SELECT `id`, `stream_icon`, `stream_display_name`, `tv_archive_duration`, `tv_archive_server_id`, `category_id`, (SELECT COUNT(*) FROM `lines_live` LEFT JOIN `lines` ON `lines`.`id` = `lines_live`.`user_id` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0 AND `lines`.`member_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . (')) AS `clients` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';');
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2575;
}

goto label1902;

label6530:

$E7dbfc96029b3745 = 0;
goto label6540;

label6532:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label6540:

goto label5205;

label6541:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label6549:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`users`.`owner_id` IN (' . implode(',', $E59d0debc75e7be8['reports']) . ')';
goto label74;

label6561:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label6566:

$A38e57f944de21df = 'SELECT COUNT(`lines`.`id`) AS `count` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` INNER JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label1430;
}

goto label1427;

label6580:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label6602;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label6602:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `users_logs` LEFT JOIN `users` ON `users`.`id` = `users_logs`.`owner` ' . $F5190fed237fabec . ';';
goto label6631;

label6607:

$A7d54b094ae83c95 = XUI::$rRequest['id'];
$bcfd61adc96d4b72 = intval(XUI::$rRequest['start']);
$Cc2b5dfe75dc164b = intval(XUI::$rRequest['length']);
if (!((1000 < $Cc2b5dfe75dc164b) || ($Cc2b5dfe75dc164b <= 0))) {
	goto label1374;
}

goto label1373;

label6631:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label6643;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label4564;

label6643:

goto label4559;

label6644:

$F5190fed237fabec = '';
goto label6652;

label6646:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label6652:

goto label6724;

label6653:

$a2a53f18f4f95c8b = ['`username`', '`streams`.`stream_display_name`', '`lines_activity`.`user_agent`', '`lines_activity`.`isp`', '`lines_activity`.`user_ip`', '`lines_activity`.`date_start`', '`lines_activity`.`date_end`', '`lines_activity`.`date_end` - `lines_activity`.`date_start`', '`lines_activity`.`container`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label4801;
}

$E7dbfc96029b3745 = 0;
goto label4809;
goto label4801;

label6671:

$cf0aab70014807af[] = '`streams`.`id` IN (' . implode(',', array_map('intval', $db0a61ef32b89a27['stream_ids'])) . ')';

label6684:

if ($Ab7613704ad1bb6c) {
	goto label1199;
}

$cf0aab70014807af[] = '`type` = 1';
goto label1201;
goto label1199;

label6690:

$a2a53f18f4f95c8b = ['`users`.`id`', '`users`.`username`', '`r`.`username`', '`users`.`ip`', '`users`.`status`', '`users`.`credits`', '`user_count`', '`users`.`last_login`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label6541;
}

$E7dbfc96029b3745 = 0;
goto label6549;
goto label6541;

label6708:

if (!(0 < intval(XUI::$rRequest['line']))) {
	goto label6723;
}

$cf0aab70014807af[] = '`lines_live`.`user_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['line'];

label6723:

goto label3354;

label6724:

$A38e57f944de21df = 'SELECT COUNT(`lines`.`id`) AS `count` FROM `lines` LEFT JOIN `users` ON `users`.`id` = `lines`.`member_id` ' . $F5190fed237fabec . ';';

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label6750;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label6750:

goto label1283;

label6751:

?>