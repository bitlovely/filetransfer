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

goto label25770;

label1:

$cf0aab70014807af[] = '`streams_episodes`.`series_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['series'];

label7:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label17402;
}

foreach (range(1, 5) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label17400;

label33:

if (XUI::$rRequest['filter'] == 1) {
	goto label25710;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label11988;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label17255;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label26875;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label7983;
}

goto label550;

label59:

$B9869413eae86beb['recordsTotal'] = 0;
goto label67;

label62:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label67:

goto label18808;

label68:

$E3665d09b9cea208 = explode(':', XUI::$rRequest['category_id']);

if (intval($E3665d09b9cea208[0]) == 0) {
	goto label12711;
}

$cf0aab70014807af[] = '(`streams`.`type` = 5 AND `streams`.`series_no` = ?)';
$B03cfeca75020c69[] = $E3665d09b9cea208[1];
goto label12716;
goto label12711;

label89:

goto label92;

label90:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 1)';

label92:

goto label11183;

label93:

if (0 < intval(XUI::$rRequest['category'])) {
	goto label5425;
}

if (!(intval(XUI::$rRequest['category']) == -1)) {
	goto label112;
}

$cf0aab70014807af[] = '(`streams`.`category_id` = \'[]\' OR `streams`.`category_id` IS NULL)';

label112:

goto label5431;
goto label5425;

label114:

XUI::$rSettings['group_buttons'] = false;

label117:

$A7d54b094ae83c95 = XUI::$rRequest['id'];
$bcfd61adc96d4b72 = intval(XUI::$rRequest['start']);
goto label15760;

label128:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label17893;
}

foreach (range(1, 6) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `mag_devices`.`stb_type` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`reseller_notes` LIKE ? OR `lines`.`admin_notes` LIKE ?)';
goto label17893;

label158:

if ($A7d54b094ae83c95 == 'credits_log') {
	goto label24261;
}

if ($A7d54b094ae83c95 == 'client_logs') {
	goto label24586;
}

if ($A7d54b094ae83c95 == 'reg_user_logs') {
	goto label5071;
}

if ($A7d54b094ae83c95 == 'stream_errors') {
	goto label15384;
}

if ($A7d54b094ae83c95 == 'stream_unique') {
	goto label9846;
}

goto label18882;

label174:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label196;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label196:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `users` ' . $F5190fed237fabec . ';';
goto label26796;

label201:

$cf0aab70014807af[] = '`ondemand_check`.`status` = 0';

label203:

goto label24295;

label204:

$cf0aab70014807af[] = '`ondemand_check`.`status` = 1';
goto label24295;

label207:

goto label210;

label208:

$cf0aab70014807af[] = '`lines`.`enabled` = 0';

label210:

goto label7943;
goto label7941;

label212:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label14988;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label14993;
goto label14988;

label229:

goto label232;

label230:

$cf0aab70014807af[] = '`users`.`status` = 1';

label232:

goto label6805;

label233:

$cf0aab70014807af[] = '`streams`.`id` IN (SELECT MIN(`id`) FROM `streams` WHERE `type` = 5 GROUP BY `stream_source` HAVING COUNT(`stream_source`) > 1)';
$F1a9d7720adbf27a = true;

label236:

goto label25805;

label237:

goto label25803;

label238:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label280;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label266;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label278;

	label266:

	$B9869413eae86beb['data'][] = [date('H:i:s', $Fb9da1713bff19ce['date']), $D0947405e5d9e2fc[$Fb9da1713bff19ce['action']]];

	label278:
}

label280:

goto label5418;

label281:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label286:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label6986;
}

goto label15783;

label306:

goto label309;

label307:

$cf0aab70014807af[] = '(SELECT COUNT(*) AS `count` FROM `streams_logs` WHERE `streams_logs`.`action` = \'STREAM_FAILED\' AND `streams_logs`.`date` >= UNIX_TIMESTAMP()-86400 AND `streams_logs`.`stream_id` = `streams`.`id`) > 144';

label309:

goto label21808;

label310:

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';

label327:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label19404;
}

goto label19386;

label332:

$F5190fed237fabec = '';
goto label340;

label334:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label340:

goto label20536;

label341:

echo json_encode($B9869413eae86beb);
exit();

label346:

goto label9845;

label347:

goto label12275;

label348:

$cf0aab70014807af[] = '(`target`.`username` LIKE ? OR `owner`.`username` LIKE ? OR FROM_UNIXTIME(`date`) LIKE ? OR `users_credits_logs`.`amount` LIKE ? OR `users_credits_logs`.`reason` LIKE ?)';

label350:

if (!(0 < strlen(XUI::$rRequest['range']))) {
	goto label12695;
}

$F56066ad7b074468 = substr(XUI::$rRequest['range'], 0, 10);
$b120584763e3d117 = substr(XUI::$rRequest['range'], strlen(XUI::$rRequest['range']) - 10, 10);
goto label1760;

label382:

if (0 < count($cf0aab70014807af)) {
	goto label390;
}

$F5190fed237fabec = '';
goto label9231;

label390:

goto label9225;

label391:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label19721;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_display_name`, `streams`.`category_id` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label19721;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label433;

	label422:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $E8e13b4c9d9584b6];

	label431:

	goto label518;

	label433:

	if (!$De97a60c730465cd) {
		goto label451;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label431;

	label451:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	goto label489;

	label459:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label474;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label474:

	$E8e13b4c9d9584b6 = '<div class="btn-group"><button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="stream" type="button" style="display: none;" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(' . $Fb9da1713bff19ce['id'] . ', \'stream\');"><i class="mdi mdi-minus"></i></button>' . "\r\n" . '                <button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="stream" type="button" style="display: none;" class="btn-add btn btn-success waves-effect waves-success btn-xs" onClick="toggleBouquet(' . $Fb9da1713bff19ce['id'] . ', \'stream\');"><i class="mdi mdi-plus"></i></button></div>';
	goto label422;

	label489:

	if (0 < strlen(XUI::$rRequest['category_id'])) {
		goto label506;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label459;

	label506:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category_id'])]['category_name'] ?: 'No Category';
	goto label459;

	label518:
}

goto label19721;

label521:

$B03cfeca75020c69[] = intval(XUI::$rRequest['resolution']) ?: NULL;

label530:

if (0 < intval(XUI::$rRequest['server'])) {
	goto label17155;
}

if (!(intval(XUI::$rRequest['server']) == -1)) {
	goto label17154;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` IS NULL';
goto label17154;

label550:

if (XUI::$rRequest['filter'] == 6) {
	goto label7980;
}

if (XUI::$rRequest['filter'] == 7) {
	goto label21809;
}

if (XUI::$rRequest['filter'] == 8) {
	goto label15654;
}

if (XUI::$rRequest['filter'] == 9) {
	goto label23855;
}

if (XUI::$rRequest['filter'] == 10) {
	goto label3525;
}

goto label7762;

label576:

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`server_name` LIKE ? OR `server_ip` LIKE ?)';

label593:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label21068;
}

goto label21050;

label598:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label616:

if (0 < count($cf0aab70014807af)) {
	goto label7108;
}

$F5190fed237fabec = '';
goto label7107;

label624:

if (XUI::$rRequest['filter'] == 2) {
	goto label19883;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label7903;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label25806;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label237;
}

if (XUI::$rRequest['filter'] == 6) {
	goto label5608;
}

goto label5599;

label650:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label656:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams_series` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label18026;
}

goto label18023;

label670:

$cf0aab70014807af[] = '`lines_activity`.`user_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['user'];

label676:

if (!(0 < intval(XUI::$rRequest['server']))) {
	goto label22126;
}

$cf0aab70014807af[] = '(`lines_activity`.`server_id` = ? OR `lines_activity`.`proxy_id` = ?)';
goto label22112;

label688:

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_display_name` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label22401;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label730;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label742;

	label730:

	$E8e13b4c9d9584b6 = '<a href="stream_view?id=' . $Fb9da1713bff19ce['id'] . '"><button type="button" title="View Station" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-play"></i></button></a>';
	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name'], $E8e13b4c9d9584b6];

	label742:
}

goto label22401;

label745:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_display_name'] = $Fb9da1713bff19ce['stream_display_name'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];
}

goto label17765;

label767:

$B1e93ae2ae39e1ff = XUI::A96ab74F1921d4ad($C98047839de3d474, true);
goto label26056;

label773:

foreach ($F3f66625345f16f6 as $aae4eee56abeed7c) {
	goto label785;

	label777:

	$f568d17f15a42f2f = '<i class=\'text-success fas fa-square\'></i>';
	unset($B088125f4a2f342c[$aae4eee56abeed7c['filename']]);

	label780:

	$C25c0917c2df834a[] = $aae4eee56abeed7c['filename'];
	goto label856;

	label785:

	$E8e13b4c9d9584b6 = '<div class="btn-group"><button type="button" title="Restore Backup" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $aae4eee56abeed7c['filename'] . '\', \'restore\');"><i class="mdi mdi-folder-upload"></i></button>' . "\r\n" . '        <button type="button" title="Delete Backup" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $aae4eee56abeed7c['filename'] . '\', \'delete\');"><i class="mdi mdi-close"></i></button></div>';
	$d679086dc987042b = '<i class=\'text-success fas fa-square\'></i>';

	if (isset($B088125f4a2f342c[$aae4eee56abeed7c['filename']])) {
		goto label777;
	}

	if (file_exists(XUI_HOME . 'backups/' . $aae4eee56abeed7c['filename'] . '.error')) {
		goto label838;
	}
	if (file_exists(XUI_HOME . 'backups/' . $aae4eee56abeed7c['filename'] . '.uploading') && ((time() - filemtime(XUI_HOME . 'backups/' . $aae4eee56abeed7c['filename'] . '.uploading')) < 600)) {
		goto label887;
	}

	goto label884;

	label836:

	goto label852;

	label838:

	$f568d17f15a42f2f = '<i title=\'' . htmlspecialchars(file_get_contents(XUI_HOME . 'backups/' . $aae4eee56abeed7c['filename'] . '.error')) . '\' class=\'text-danger fas fa-square tooltip\'></i>';

	label852:

	goto label780;
	goto label777;

	label856:

	$B9869413eae86beb['data'][] = [date($f1dcaed925076e67['datetime_format'], strtotime($aae4eee56abeed7c['date'])), $aae4eee56abeed7c['filename'], ceil($aae4eee56abeed7c['filesize'] / 1024 / 1024) . ' MB', $d679086dc987042b, $f568d17f15a42f2f, $E8e13b4c9d9584b6];
	goto label890;

	label884:

	$f568d17f15a42f2f = '<i class=\'text-secondary fas fa-square\'></i>';
	goto label888;

	label887:

	$f568d17f15a42f2f = '<i title=\'Uploading...\' class=\'text-warning fas fa-square tooltip\'></i>';

	label888:

	goto label836;

	label890:
}

foreach ($B088125f4a2f342c as $aae4eee56abeed7c) {
	$E8e13b4c9d9584b6 = '<div class="btn-group"><button type="button" title="Restore Backup" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $aae4eee56abeed7c['name'] . '\', \'restore\');"><i class="mdi mdi-folder-upload"></i></button>' . "\r\n" . '        <button type="button" title="Delete Backup" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $aae4eee56abeed7c['name'] . '\', \'delete\');"><i class="mdi mdi-close"></i></button></div>';

	if (in_array($aae4eee56abeed7c['name'], $C25c0917c2df834a)) {
		goto label912;
	}

	$d679086dc987042b = '<i class=\'text-secondary fas fa-square\'></i>';
	goto label913;

	label912:

	$d679086dc987042b = '<i class=\'text-success fas fa-square\'></i>';

	label913:

	$f568d17f15a42f2f = '<i class=\'text-success fas fa-square\'></i>';
	$B9869413eae86beb['data'][] = [date($f1dcaed925076e67['datetime_format'], $aae4eee56abeed7c['time']), $aae4eee56abeed7c['name'], ceil($aae4eee56abeed7c['size'] / 1024 / 1024) . ' MB', $d679086dc987042b, $f568d17f15a42f2f, $E8e13b4c9d9584b6];
}

echo json_encode($B9869413eae86beb);
goto label17830;

label944:

if (isset(XUI::$rRequest['stream_id'])) {
	goto label26793;
}

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label26082;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams`.`notes` LIKE ? OR `streams_servers`.`current_source` LIKE ?)';
goto label26082;

label976:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label981:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label20666;
}

$B91645b8411dc88c = 'SELECT `lines_logs`.`id`, `lines_logs`.`user_id`, `lines_logs`.`stream_id`, `streams`.`stream_display_name`, `streams`.`type`, `lines`.`username`, `lines_logs`.`client_status`, `lines_logs`.`query_string`, `lines_logs`.`user_agent`, `lines_logs`.`ip`, FROM_UNIXTIME(`lines_logs`.`date`) AS `date` FROM `lines_logs` LEFT JOIN `streams` ON `streams`.`id` = `lines_logs`.`stream_id` LEFT JOIN `lines` ON `lines`.`id` = `lines_logs`.`user_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label23491;

label1011:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label1016:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label17222;
}

goto label16446;

label1036:

goto label1043;

label1037:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label1043:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label21192;
}

goto label21174;

label1048:

if (0 < count($cf0aab70014807af)) {
	goto label1056;
}

$F5190fed237fabec = '';
goto label21085;

label1056:

goto label21079;

label1057:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label1062:

if (0 < count($cf0aab70014807af)) {
	goto label25695;
}

$F5190fed237fabec = '';
goto label25701;
goto label25695;

label1071:

if (0 < intval(XUI::$rRequest['server'])) {
	goto label6652;
}

if (!(intval(XUI::$rRequest['server']) == -1)) {
	goto label1090;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` IS NULL';

label1090:

goto label6651;

label1091:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$a2a53f18f4f95c8b = ['`lines`.`id`', '`lines`.`username`', '`enigma2_devices`.`mac`', '`enigma2_devices`.`public_ip`', '`lines`.`member_id`', '`lines`.`enabled`', '`active_connections` > 0', '`lines`.`is_trial`', '`lines`.`exp_date`', '`active_connections` ' . $bc89bec2d7c7cf08 . ', `last_activity`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label11797;
}

$E7dbfc96029b3745 = 0;
goto label11805;
goto label11797;

label1135:

$cf0aab70014807af[] = 'LENGTH(`streams`.`channel_id`) > 0';

label1137:

goto label11940;

label1138:

goto label12414;

label1139:

exit();

label1140:

$a2a53f18f4f95c8b = ['`lines_logs`.`id`', '`lines`.`username`', '`streams`.`stream_display_name`', '`lines_logs`.`client_status`', '`lines_logs`.`user_agent`', '`lines_logs`.`ip`', '`lines_logs`.`date`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label26016;
}

$E7dbfc96029b3745 = 0;
goto label26015;

label1157:

echo json_encode($B9869413eae86beb);
exit();

label1162:

goto label27408;

label1163:

$ee6d1fc5d801b43f = (0 < intval(XUI::$rRequest['stream_id']) ? intval(XUI::$rRequest['stream_id']) : NULL);
$f7107e3a92443147 = (0 < intval(XUI::$rRequest['user_id']) ? intval(XUI::$rRequest['user_id']) : NULL);

if ($f7107e3a92443147) {
	goto label21108;
}

if ($ee6d1fc5d801b43f) {
	goto label1329;
}

if ($C082ca9ed03f473c) {
	goto label5906;
}

goto label9983;

label1202:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label12394;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label12393;

label1218:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label1240;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label1240:

goto label12595;

label1241:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label5378;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';
goto label5378;

label1269:
if (!(!$db0a61ef32b89a27['is_admin'] || !e589a4bF54A2DaD1('adv', 'restream_logs'))) {
	goto label1282;
}

exit();

label1282:

$a2a53f18f4f95c8b = ['`detect_restream_logs`.`id`', '`lines`.`username`', '`streams`.`stream_display_name`', '`detect_restream_logs`.`ip`', '`detect_restream_logs`.`time`', false];
goto label12774;

label1284:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label1299;
}

$cf0aab70014807af[] = '`blocked_asns`.`blocked` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['filter'];

label1299:

if (!(0 < strlen(XUI::$rRequest['type']))) {
	goto label17210;
}

goto label17204;

label1309:

exit();

label1310:

goto label3364;

label1311:
if (!(!e589a4bf54A2dAD1('adv', 'movies') && !e589a4bF54a2dAD1('adv', 'mass_sedits_vod'))) {
	goto label23859;
}

goto label23858;

label1327:

$F74c31745a712716 = false;

label1328:

goto label24702;

label1329:

goto label6239;

label1330:

$F5190fed237fabec = '';
goto label1338;

label1332:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label1338:

goto label1654;

label1339:

$B91645b8411dc88c = 'SELECT `streams_errors`.`id`, `streams_errors`.`stream_id`, `streams`.`type`, `streams_errors`.`server_id`, `streams`.`stream_display_name`, `servers`.`server_name`, `streams_errors`.`error`, FROM_UNIXTIME(`streams_errors`.`date`) AS `date` FROM `streams_errors` LEFT JOIN `streams` ON `streams`.`id` = `streams_errors`.`stream_id` LEFT JOIN `servers` ON `servers`.`id` = `streams_errors`.`server_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label12252;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label1392;

	label1365:

	if ($Fb9da1713bff19ce['type'] == 5) {
		goto label1383;
	}

	$aa4e95f1ed1932a8 = '<a href=\'' . $F83b167f3cf044be[$Fb9da1713bff19ce['type']] . '?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';
	goto label1429;

	label1383:

	$aa4e95f1ed1932a8 = '<a href=\'serie?id=' . $Fb9da1713bff19ce['series_no'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';
	goto label1429;

	label1392:

	if (!$De97a60c730465cd) {
		goto label1410;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label1441;

	label1410:

	$f51fdbb70a8cbb4b = [1 => 'streams', 2 => 'movies', 3 => 'streams', 4 => 'radio', 5 => 'series'];
	goto label1413;

	label1413:

	$F83b167f3cf044be = [1 => 'stream_view', 2 => 'stream_view', 3 => 'stream_view', 4 => 'stream_view'];

	if (e589a4bF54a2dAD1('adv', $f51fdbb70a8cbb4b[$Fb9da1713bff19ce['type']])) {
		goto label1427;
	}

	$aa4e95f1ed1932a8 = $Fb9da1713bff19ce['stream_display_name'];
	goto label1429;

	label1427:

	goto label1365;

	label1429:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $aa4e95f1ed1932a8, $Fb9da1713bff19ce['server_name'], $Fb9da1713bff19ce['error'], $Fb9da1713bff19ce['date']];

	label1441:

	goto label1443;

	label1443:
}

goto label12252;

label1446:

if (!$F1a9d7720adbf27a) {
	goto label8243;
}

$D5c525522fef1d4a = [];
$b62d6460eb33ea07->query('SELECT MD5(`stream_source`) AS `source`, COUNT(`stream_source`) AS `count` FROM `streams` WHERE `stream_source` IN (SELECT `stream_source` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ')) GROUP BY `stream_source` HAVING COUNT(`stream_source`) > 1;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D5c525522fef1d4a[$Fb9da1713bff19ce['source']] = $Fb9da1713bff19ce['count'];
}

goto label8243;

label1474:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label27307;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$D52a67130c4ab288 = $dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

goto label5239;

label1493:

if (XUI::$rSettings['redis_handler']) {
	goto label7526;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$a2a53f18f4f95c8b = ['`lines_live`.`activity_id`', '`lines_live`.`divergence`', '`username` ' . $bc89bec2d7c7cf08 . ', `lines_live`.`hmac_identifier`', '`streams`.`stream_display_name`', '`server_name`', '`lines_live`.`user_agent`', '`lines_live`.`isp`', '`lines_live`.`user_ip`', 'UNIX_TIMESTAMP() - `lines_live`.`date_start`', '`lines_live`.`container`', '`lines`.`is_restreamer`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label12114;
}

$E7dbfc96029b3745 = 0;
goto label12113;

label1542:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM (SELECT `id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL ' . $F5190fed237fabec . ' GROUP BY `streams`.`id`) t1;';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label12150;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label12155;
goto label12150;

label1559:

if (XUI::$rRequest['filter'] == 2) {
	goto label21154;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label11184;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label90;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label24877;
}

if (!(XUI::$rRequest['filter'] == 7)) {
	goto label24876;
}

goto label24874;

label1586:

$cf0aab70014807af[] = '`streams_servers`.`on_demand` = 1';

label1588:

goto label6119;

label1589:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` = 2)';
goto label6119;

label1592:

$B9869413eae86beb['recordsTotal'] = count($a2ebb817d88c810b) ?: 0;
$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label7882;
}

foreach ($a2ebb817d88c810b as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label1638;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label1651;

	label1638:

	$B9869413eae86beb['data'][] = [date('H:i:s', $Fb9da1713bff19ce['start']), $Fb9da1713bff19ce['title'], $Fb9da1713bff19ce['description']];

	label1651:
}

goto label7882;

label1654:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `panel_logs` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label9894;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label9899;
goto label9894;

label1671:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label1676:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label16270;
}

goto label21314;

label1696:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1738;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label1724;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label1736;

	label1724:

	$E8e13b4c9d9584b6 = '<a href="stream_view?id=' . $Fb9da1713bff19ce['id'] . '"><button type="button" title="View Movie" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-play"></i></button></a>';
	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name'], $E8e13b4c9d9584b6];

	label1736:
}

label1738:

goto label15331;

label1739:
if (!(!E589A4bF54a2DAd1('adv', 'series') && !e589a4BF54A2daD1('adv', 'mass_sedits'))) {
	goto label1755;
}

exit();

label1755:

$F771d40e8cf51e59 = F769E3f0C739d1a6('series');
goto label9965;

label1760:

if ($F56066ad7b074468 = strtotime($F56066ad7b074468 . ' 00:00:00')) {
	goto label1768;
}

$F56066ad7b074468 = NULL;

label1768:

if ($b120584763e3d117 = strtotime($b120584763e3d117 . ' 23:59:59')) {
	goto label19965;
}

$b120584763e3d117 = NULL;
goto label19965;

label1777:

$B9869413eae86beb['recordsTotal'] = 0;
goto label1785;

label1780:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label1785:

goto label16638;

label1786:

goto label3454;

label1787:
if (!(!$db0a61ef32b89a27['is_admin'] || !e589A4BF54a2DAD1('adv', 'bouquets'))) {
	goto label1800;
}

exit();

label1800:

goto label9919;

label1801:

if ($A7d54b094ae83c95 == 'bouquets_radios') {
	goto label25736;
}

if ($A7d54b094ae83c95 == 'streams_short') {
	goto label15337;
}

if ($A7d54b094ae83c95 == 'movies_short') {
	goto label4998;
}

if ($A7d54b094ae83c95 == 'radios_short') {
	goto label2555;
}

if ($A7d54b094ae83c95 == 'series_short') {
	goto label15466;
}

goto label12326;

label1817:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$a9b562b640795042[intval($Fb9da1713bff19ce['server_id'])][$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

$b62d6460eb33ea07->query('SELECT `stream_id`, `server_id`, COUNT(*) AS `count` FROM `ondemand_check` WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ') AND `status` = 0 GROUP BY CONCAT(`stream_id`, \'_\', `server_id`);');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$aa2402d87b97aa29[intval($Fb9da1713bff19ce['server_id'])][$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

goto label18989;

label1857:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label2035;

	label1863:

	$C0a1fd30f0173389 = $Fb9da1713bff19ce['username'];
	goto label1874;

	label1867:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . $Fb9da1713bff19ce['owner'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label1874:

	goto label1876;

	label1876:

	$c050a23c479bc67e = ['line' => 'User Line', 'mag' => 'MAG Device', 'enigma' => 'Enigma2 Device', 'user' => 'Reseller'][$Fb9da1713bff19ce['type']];
	$fb173e63c96d4021 = '';

	switch ($Fb9da1713bff19ce['action']) {
	case 'new':
		if ($Fb9da1713bff19ce['package_id']) {
			goto label1912;
		}

		$fb173e63c96d4021 = 'Created New ' . $c050a23c479bc67e;
		goto label1920;

		label1912:

		$fb173e63c96d4021 = 'Created New ' . $c050a23c479bc67e . ' with Package: ' . $b00d1d65528795d1[$Fb9da1713bff19ce['package_id']]['package_name'];

		label1920:

		goto label1987;
	case 'extend':
		if ($Fb9da1713bff19ce['package_id']) {
			goto label1934;
		}

		$fb173e63c96d4021 = 'Extended ' . $c050a23c479bc67e;
		goto label1942;

		label1934:

		$fb173e63c96d4021 = 'Extended ' . $c050a23c479bc67e . ' with Package: ' . $b00d1d65528795d1[$Fb9da1713bff19ce['package_id']]['package_name'];

		label1942:

		goto label1987;
	case 'convert':
		$fb173e63c96d4021 = 'Converted Device to User Line';
		goto label1987;
	case 'edit':
		$fb173e63c96d4021 = 'Edited ' . $c050a23c479bc67e;
		goto label1987;
	case 'enable':
		$fb173e63c96d4021 = 'Enabled ' . $c050a23c479bc67e;
		goto label1987;
	case 'disable':
		$fb173e63c96d4021 = 'Disabled ' . $c050a23c479bc67e;
		goto label1987;
	case 'delete':
		$fb173e63c96d4021 = 'Deleted ' . $c050a23c479bc67e;
		goto label1987;
	case 'send_event':
		$fb173e63c96d4021 = 'Sent Event to ' . $c050a23c479bc67e;
		goto label1987;
	case 'adjust_credits':
		$fb173e63c96d4021 = 'Adjusted Credits by ' . $Fb9da1713bff19ce['cost'];
		goto label1987;
	default:
	}

	label1987:

	goto label2078;

	label1989:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $C0a1fd30f0173389, $f4e5ef13910179a5, $fb173e63c96d4021, number_format($Fb9da1713bff19ce['cost'], 0), number_format($Fb9da1713bff19ce['credits_after'], 0), date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date'])];

	label2016:

	goto label2180;

	label2018:

	$a60b15f35e32ef1b = json_decode($Fb9da1713bff19ce['deleted_info'], true);

	if (is_array($a60b15f35e32ef1b)) {
		goto label2033;
	}

	$f4e5ef13910179a5 = '<span class=\'text-secondary\'>DELETED</span>';
	goto label1989;

	label2033:

	goto label2062;

	label2035:

	if (!$De97a60c730465cd) {
		goto label2053;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label2016;

	label2053:

	if (e589A4bf54a2Dad1('adv', 'edit_reguser')) {
		goto label1867;
	}

	goto label1863;

	label2062:

	if (isset($a60b15f35e32ef1b['mac'])) {
		goto label2072;
	}

	$f4e5ef13910179a5 = '<span class=\'text-secondary\'>' . $a60b15f35e32ef1b['username'] . '</span>';
	goto label1989;

	label2072:

	$f4e5ef13910179a5 = '<span class=\'text-secondary\'>' . $a60b15f35e32ef1b['mac'] . '</span>';
	goto label1989;

	label2078:

	$f4e5ef13910179a5 = NULL;

	switch ($Fb9da1713bff19ce['type']) {
	case 'line':
		$F5ba2106d5227309 = b5ad1D95a92CE732($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label2108;
		}

		$f4e5ef13910179a5 = '<a href=\'line?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['username'] . '</a>';

		label2108:

		goto label2175;
	case 'user':
		$F5ba2106d5227309 = ba89228DC958ce05($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label2129;
		}

		$f4e5ef13910179a5 = '<a href=\'user?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['username'] . '</a>';

		label2129:

		goto label2175;
	case 'mag':
		$F5ba2106d5227309 = a32d85AefA28959d($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label2150;
		}

		$f4e5ef13910179a5 = '<a href=\'mag?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['mac'] . '</a>';

		label2150:

		goto label2175;
	case 'enigma':
		$F5ba2106d5227309 = Ef70A93E98fb7ce9($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label2171;
		}

		$f4e5ef13910179a5 = '<a href=\'enigma?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['mac'] . '</a>';

		label2171:

		goto label2175;
	default:
	}

	label2175:

	if ($f4e5ef13910179a5) {
		goto label1989;
	}

	goto label2018;

	label2180:
}

label2182:

echo json_encode($B9869413eae86beb);
goto label24584;

label2187:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label2409;

	label2191:

	goto label2272;

	label2193:

	if (intval($Fb9da1713bff19ce['direct_proxy']) == 1) {
		goto label2271;
	}

	$a22fa0d1973a0b0e = 5;
	goto label2269;

	label2204:

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];

	if (!(1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']])) {
		goto label2219;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>+ ' . ($D52a67130c4ab288[$Fb9da1713bff19ce['id']] - 1) . '</button>';

	label2219:

	goto label2388;

	label2221:

	if ($Fb9da1713bff19ce['server_id']) {
		goto label2228;
	}

	$a22fa0d1973a0b0e = -1;
	goto label2279;

	label2228:

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label2193;
	}

	goto label2330;

	label2238:

	$B080674c55093935 = '<img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url=' . urlencode($Fb9da1713bff19ce['stream_icon']) . '\' />';

	label2245:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $B080674c55093935, $B7bbd17ec35a49aa, $Dbcac322b4274e46, $D8d609d5bdc92a03, $f7d55d79e2700f0d[$a22fa0d1973a0b0e]];

	label2256:

	goto label2430;

	label2258:

	$B7bbd17ec35a49aa = $Fb9da1713bff19ce['stream_display_name'];

	if ($Fb9da1713bff19ce['server_name']) {
		goto label2267;
	}

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label2219;

	label2267:

	goto label2204;

	label2269:

	goto label2272;

	label2271:

	$a22fa0d1973a0b0e = 7;

	label2272:

	goto label2279;

	label2274:

	goto label2277;

	label2276:

	$a22fa0d1973a0b0e = 2;

	label2277:

	goto label2191;

	label2279:

	if (0 < strlen($Fb9da1713bff19ce['stream_icon'])) {
		goto label2290;
	}

	$B080674c55093935 = '';
	goto label2245;

	label2290:

	goto label2238;

	label2292:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label2315;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label2371;

	label2315:

	goto label2361;

	label2317:

	$a22fa0d1973a0b0e = 4;

	label2318:

	goto label2191;

	label2320:
	if ($Fb9da1713bff19ce['pid'] && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label2350;
	}

	goto label2347;

	label2330:

	if ($Fb9da1713bff19ce['monitor_pid']) {
		goto label2320;
	}

	if (intval($Fb9da1713bff19ce['on_demand']) == 1) {
		goto label2345;
	}

	$a22fa0d1973a0b0e = 0;
	goto label2318;

	label2345:

	goto label2317;

	label2347:

	$a22fa0d1973a0b0e = 3;
	goto label2277;

	label2350:

	if (intval($Fb9da1713bff19ce['stream_status']) == 2) {
		goto label2276;
	}

	$a22fa0d1973a0b0e = 1;
	goto label2274;

	label2361:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label2371:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label2386;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label2386:

	goto label2258;

	label2388:

	$Bd92fffa215178e4 = 0;
	$a22fa0d1973a0b0e = 0;

	if (!(0 < intval($Fb9da1713bff19ce['stream_started']))) {
		goto label2407;
	}

	$Bd92fffa215178e4 = time() - intval($Fb9da1713bff19ce['stream_started']);

	label2407:

	goto label2221;

	label2409:

	if (!$De97a60c730465cd) {
		goto label2428;
	}

	unset($Fb9da1713bff19ce['stream_source']);
	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label2256;

	label2428:

	goto label2292;

	label2430:
}

label2432:

goto label17886;

label2433:

goto label2436;

label2434:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 0 AND `streams_servers`.`stream_status` <> 1)';

label2436:

goto label27333;

label2437:

goto label19522;

label2438:

$cf0aab70014807af[] = '`streams`.`id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['stream_id'];
goto label19521;

label2445:

$b62d6460eb33ea07->query('SELECT `users`.`username`, `lines`.`id` FROM `users` LEFT JOIN `lines` ON `lines`.`member_id` = `users`.`id` WHERE `lines`.`id` IN (' . implode(',', $C98047839de3d474) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f4e5ef13910179a5[$Fb9da1713bff19ce['id']]['owner_name'] = $Fb9da1713bff19ce['username'];
}

if (XUI::$rSettings['redis_handler']) {
	goto label767;
}

$b62d6460eb33ea07->query('SELECT `lines_live`.`user_id`, `lines_live`.`stream_id`, `lines_live`.`date_start` AS `last_active`, `streams`.`stream_display_name` FROM `lines_live` LEFT JOIN `streams` ON `streams`.`id` = `lines_live`.`stream_id` INNER JOIN (SELECT `user_id`, MAX(`date_start`) AS `ts` FROM `lines_live` GROUP BY `user_id`) `maxt` ON (`lines_live`.`user_id` = `maxt`.`user_id` AND `lines_live`.`date_start` = `maxt`.`ts`) WHERE `lines_live`.`user_id` IN (' . implode(',', $C98047839de3d474) . ');');
goto label745;

label2479:

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`server_stream_id`) AS `count` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

if (!XUI::$rSettings['redis_handler']) {
	goto label7844;
}

if ($f1dcaed925076e67['streams_grouped']) {
	goto label18801;
}

goto label18794;

label2511:

$cf0aab70014807af[] = '(`lines_activity`.`date_start` >= ? AND `lines_activity`.`date_end` <= ?)';
$B03cfeca75020c69[] = $F56066ad7b074468;
$B03cfeca75020c69[] = $b120584763e3d117;

label2517:

goto label22225;

label2518:

if (!(0 < strlen(XUI::$rRequest['resolution']))) {
	goto label2538;
}

$cf0aab70014807af[] = '`streams_servers`.`resolution` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['resolution']) ?: NULL;

label2538:

if (0 < intval(XUI::$rRequest['server'])) {
	goto label27116;
}

goto label27104;

label2547:

echo json_encode($B9869413eae86beb);
exit();
goto label25735;

label2553:

exit();

label2554:

goto label22406;

label2555:
if (!(!$db0a61ef32b89a27['is_admin'] || !E589a4bF54a2dad1('adv', 'categories'))) {
	goto label20587;
}

goto label20586;

label2568:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label3175;

	label2572:

	$bad7716b52f57546 = '';

	if (!(0 < strlen($Fb9da1713bff19ce['admin_notes']))) {
		goto label2584;
	}

	$bad7716b52f57546 .= $Fb9da1713bff19ce['admin_notes'];

	label2584:

	if (!(0 < strlen($Fb9da1713bff19ce['reseller_notes']))) {
		goto label3001;
	}

	goto label2990;

	label2595:

	$Da8120ce4761cb4b = '<i class="text-success fas fa-square"></i>';

	label2596:

	if ($Fb9da1713bff19ce['is_trial']) {
		goto label3024;
	}

	$dc2b8ff4adf881ae = '<i class="text-secondary far fa-square"></i>';
	goto label3025;
	goto label3024;

	label2605:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . $Fb9da1713bff19ce['member_id'] . '\'>' . $Fb9da1713bff19ce['owner_name'] . '</a>';

	label2612:
	if ($Fb9da1713bff19ce['active_connections'] && $Fb9da1713bff19ce['last_active']) {
		goto label2627;
	}

	if ($Fb9da1713bff19ce['last_active']) {
		goto label3081;
	}

	goto label3078;

	label2625:

	goto label2643;

	label2627:

	$c8629372383359e0 = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a><br/><small class=\'text-secondary\'>Online: ' . XUI::a5d0a3407690f047(time() - $Fb9da1713bff19ce['last_active']) . '</small>';

	label2643:

	if (!isset(XUI::$rRequest['no_url'])) {
		goto label2672;
	}

	goto label2651;

	label2651:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['device_id'], $Fb9da1713bff19ce['username'], $Fb9da1713bff19ce['mac'], $Fb9da1713bff19ce['public_ip'], $Fb9da1713bff19ce['owner_name'], $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $Fd59b51c86fe1420, $c8629372383359e0, $E8e13b4c9d9584b6];
	goto label2705;

	label2672:

	$B9869413eae86beb['data'][] = ['<a href=\'enigma?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['device_id'] . '</a>', $Fb9da1713bff19ce['username'], '<a href=\'enigma?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['mac'] . '</a>', '<a onClick="whois(\'' . $Fb9da1713bff19ce['public_ip'] . '\');" href=\'javascript: void(0);\'>' . $Fb9da1713bff19ce['public_ip'] . '</a>', $C0a1fd30f0173389, $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $Fd59b51c86fe1420, $c8629372383359e0, $E8e13b4c9d9584b6];

	label2705:

	goto label3098;

	label2707:

	if (!$De97a60c730465cd) {
		goto label2725;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label3098;

	label2725:

	goto label2873;

	label2727:

	goto label2730;

	label2729:

	$b9f049445aa9bd5d = '<i class="text-warning far fa-square tooltip" title="Expired"></i>';

	label2730:

	goto label3128;
	goto label3127;

	label2734:

	$E8e13b4c9d9584b6 .= '</div>';

	label2735:

	if (0 < $Fb9da1713bff19ce['member_id']) {
		goto label2605;
	}

	$C0a1fd30f0173389 = $Fb9da1713bff19ce['owner_name'];
	goto label2612;
	goto label2605;

	label2746:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';

	label2749:

	if (!E589a4BF54A2Dad1('adv', 'edit_user')) {
		goto label3003;
	}

	$E8e13b4c9d9584b6 .= '<button title="Convert to User Line" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'convert\');"><i class="fas fa-retweet"></i></button>';
	goto label3003;

	label2763:

	goto label2807;

	label2765:

	if ($Fb9da1713bff19ce['exp_date'] < time()) {
		goto label2791;
	}

	$Fd59b51c86fe1420 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small>';
	goto label2807;
	goto label2791;

	label2791:

	$Fd59b51c86fe1420 = '<span class="expired">' . date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small></span>';

	label2807:

	if (E589a4bf54A2daD1('adv', 'live_connections')) {
		goto label3104;
	}

	goto label3100;

	label2816:

	$E8e13b4c9d9584b6 .= '<button title="Fingerprint" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="modalFingerprint(' . $Fb9da1713bff19ce['user_id'] . ', \'user\');"><i class="mdi mdi-fingerprint"></i></button>';

	label2820:

	if (!e589a4Bf54a2Dad1('adv', 'edit_e2')) {
		goto label2927;
	}

	goto label3132;

	label2830:

	$E8e13b4c9d9584b6 .= '<button title="Ban" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'ban\');"><i class="mdi mdi-power"></i></button>';

	label2834:

	if ($Fb9da1713bff19ce['enabled'] == 1) {
		goto label2919;
	}

	$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
	goto label2923;
	goto label2919;

	label2847:

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square tooltip" title="Banned"></i>';

	label2848:

	goto label2863;

	label2850:

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square tooltip" title="Damaged - Line Missing"></i>';
	goto label2863;

	label2853:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'disable\');">Disable Device</a>';

	label2857:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'delete\');">Delete Device</a>';

	label2861:

	goto label2734;

	label2863:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label2871;
	}

	$Da8120ce4761cb4b = '<i class="text-warning far fa-square"></i>';
	goto label2596;

	label2871:

	goto label2595;

	label2873:

	if (!$Fb9da1713bff19ce['id']) {
		goto label2850;
	}

	if (!$Fb9da1713bff19ce['admin_enabled']) {
		goto label3130;
	}

	if (!$Fb9da1713bff19ce['enabled']) {
		goto label3127;
	}
	if ($Fb9da1713bff19ce['exp_date'] && ($Fb9da1713bff19ce['exp_date'] < time())) {
		goto label2729;
	}

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square tooltip" title="Active"></i>';
	goto label2727;

	label2901:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';

	label2904:

	$E8e13b4c9d9584b6 .= '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';

	if (!E589a4Bf54A2daD1('adv', 'edit_user')) {
		goto label3032;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'convert\');">Convert to Line</a>';
	goto label3032;

	label2919:

	$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

	label2923:

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label2927:

	goto label3113;

	label2929:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="enigma?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'enigma\', ' . intval($Fb9da1713bff19ce['device_id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['username'])) . '\')" data-modal="true"' : '') . '>Edit Device</a>';

	if ($Fb9da1713bff19ce['admin_enabled']) {
		goto label2970;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'unban\');">Unban Device</a>';
	goto label3065;

	label2970:

	goto label3061;

	label2972:

	if (XUI::$rSettings['group_buttons']) {
		goto label3116;
	}

	$E8e13b4c9d9584b6 = '<div class="btn-group">';

	if (0 < strlen($bad7716b52f57546)) {
		goto label2746;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label2749;
	goto label2746;

	label2990:

	if (!(strlen($bad7716b52f57546) != 0)) {
		goto label2999;
	}

	$bad7716b52f57546 .= "\n";

	label2999:

	$bad7716b52f57546 .= $Fb9da1713bff19ce['reseller_notes'];

	label3001:

	goto label2972;

	label3003:

	if (!E589A4bF54a2dAD1('adv', 'fingerprint')) {
		goto label2820;
	}
	if ($Fb9da1713bff19ce['user_id'] && (0 < $Fb9da1713bff19ce['active_connections'])) {
		goto label2816;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-fingerprint"></i></button>';
	goto label2820;
	goto label2816;

	label3024:

	$dc2b8ff4adf881ae = '<i class="text-warning fas fa-square"></i>';

	label3025:

	if ($Fb9da1713bff19ce['exp_date']) {
		goto label2765;
	}

	$Fd59b51c86fe1420 = '&infin;';
	goto label2763;

	label3032:
	if (!(e589A4BF54A2DaD1('adv', 'fingerprint') && $Fb9da1713bff19ce['user_id'] && (0 < $Fb9da1713bff19ce['active_connections']))) {
		goto label3051;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="modalFingerprint(' . $Fb9da1713bff19ce['user_id'] . ', \'user\');">Fingerprint</a>';

	label3051:

	if (!e589a4BF54a2Dad1('adv', 'edit_e2')) {
		goto label2861;
	}

	goto label2929;

	label3061:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'ban\');">Ban Device</a>';

	label3065:

	if ($Fb9da1713bff19ce['enabled'] == 1) {
		goto label2853;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'enable\');">Enable Device</a>';
	goto label2857;
	goto label2853;

	label3078:

	$c8629372383359e0 = 'Never';
	goto label3096;

	label3081:

	$c8629372383359e0 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['last_active']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['last_active']) . '</small>';

	label3096:

	goto label2625;

	label3098:

	goto label3206;

	label3100:

	$F970919c38a333cf = $Fb9da1713bff19ce['active_connections'];
	goto label3111;

	label3104:

	$F970919c38a333cf = '<a href="live_connections?user_id=' . $Fb9da1713bff19ce['id'] . '">' . $Fb9da1713bff19ce['active_connections'] . '</a>';

	label3111:

	goto label2572;

	label3113:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label2735;

	label3116:

	$E8e13b4c9d9584b6 = '';

	if (!(0 < strlen($bad7716b52f57546))) {
		goto label2904;
	}

	goto label2901;

	label3127:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>';

	label3128:

	goto label2848;

	label3130:

	goto label2847;

	label3132:

	$E8e13b4c9d9584b6 .= '<a href="enigma?id=' . $Fb9da1713bff19ce['device_id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'enigma\', ' . intval($Fb9da1713bff19ce['device_id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['mac'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>';

	if ($Fb9da1713bff19ce['admin_enabled']) {
		goto label3173;
	}

	$E8e13b4c9d9584b6 .= '<button title="Unban" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['device_id'] . ', \'unban\');"><i class="mdi mdi-power"></i></button>';
	goto label2834;

	label3173:

	goto label2830;

	label3175:

	if (!isset($f4e5ef13910179a5[$Fb9da1713bff19ce['id']])) {
		goto label3188;
	}

	$Fb9da1713bff19ce = array_merge($Fb9da1713bff19ce, $f4e5ef13910179a5[$Fb9da1713bff19ce['id']]);

	label3188:

	if (!XUI::$rSettings['redis_handler']) {
		goto label2707;
	}

	$Fb9da1713bff19ce['active_connections'] = (isset($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']]) ? $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] : 0);
	goto label2707;

	label3206:
}

label3208:

echo json_encode($B9869413eae86beb);
goto label11713;

label3213:

$F771d40e8cf51e59 = f769E3F0c739d1a6('live');
$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_icon`', '`streams`.`stream_display_name`', '`streams`.`category_id`', '`streams_servers`.`server_id`', '`streams_servers`.`stream_status`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label24678;
}

$E7dbfc96029b3745 = 0;
goto label24686;
goto label24678;

label3235:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label9811;
}

$E59d0debc75e7be8 = $D861acc8063e8100 = $ec80784a08a705f6 = $E153b6005aa003ab = [];
$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$ec80784a08a705f6[] = $Fb9da1713bff19ce['id'];

	if (!$Fb9da1713bff19ce['owner_id']) {
		goto label3265;
	}

	$E153b6005aa003ab[] = $Fb9da1713bff19ce['owner_id'];

	label3265:

	$E59d0debc75e7be8[$Fb9da1713bff19ce['id']] = ['is_reseller' => 0, 'user_lines' => 0, 'mag_lines' => 0, 'e2_lines' => 0, 'user_count' => 0, 'group_name' => NULL];
}

goto label11992;

label3271:

goto label11215;

label3272:

if (E589a4bf54a2dAd1('adv', 'mass_delete')) {
	goto label3279;
}

exit();

label3279:

goto label19991;

label3280:

$E7dbfc96029b3745 = 0;
goto label3290;

label3282:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label3290:

goto label14909;

label3291:

if (!($df6991d59f367c7e < count($D8e7681dfae2905b))) {
	goto label23938;
}

$D8e7681dfae2905b[$df6991d59f367c7e]['divergence'] = $ef631b924556ee2e[$D8e7681dfae2905b[$df6991d59f367c7e]['uuid']] ?: 0;
$D8e7681dfae2905b[$df6991d59f367c7e]['series_no'] = $cb98d4eed473e4c8[$D8e7681dfae2905b[$df6991d59f367c7e]['stream_id']] ?: NULL;
$D8e7681dfae2905b[$df6991d59f367c7e]['stream_display_name'] = $Af1444cd652ebf84[$D8e7681dfae2905b[$df6991d59f367c7e]['stream_id']][0] ?: '';
goto label12368;

label3324:

$a2a53f18f4f95c8b = ['`queue`.`id`', '`streams`.`stream_display_name`', '`servers`.`server_name`', '`queue`.`pid`', '`queue`.`added`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label10100;
}

$E7dbfc96029b3745 = 0;
goto label10108;
goto label10100;

label3342:

goto label3344;

label3343:

include 'functions.php';

label3344:

goto label25862;
goto label12758;

label3346:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label3354:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`stream_source` LIKE ?';
goto label19446;

label3359:

echo json_encode($B9869413eae86beb);
exit();

label3364:

goto label23967;
goto label22200;

label3366:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label21701;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$D52a67130c4ab288 = $dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

goto label19851;

label3385:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label3407;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label3407:

if (0 < count($cf0aab70014807af)) {
	goto label19694;
}

goto label19692;

label3414:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label3422;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label20632;

label3422:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label20632;

label3428:

if (!(0 < intval(XUI::$rRequest['user_id']))) {
	goto label3443;
}

$cf0aab70014807af[] = '`lines_live`.`user_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['user_id'];

label3443:

if (!isset(XUI::$rRequest['refresh'])) {
	goto label15147;
}

goto label15127;

label3449:

echo json_encode($B9869413eae86beb);
exit();

label3454:

goto label11757;

label3455:

goto label21813;

label3456:

exit();

label3457:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$a2a53f18f4f95c8b = ['`lines`.`id`', '`lines`.`username`', '`mag_devices`.`mac`', '`mag_devices`.`stb_type`', '`lines`.`member_id`', '`lines`.`enabled`', '`active_connections` > 0', '`lines`.`is_trial`', '`lines`.`exp_date`', '`active_connections` ' . $bc89bec2d7c7cf08 . ', `last_activity`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label9835;
}

goto label9833;

label3499:

if ($A7d54b094ae83c95 == 'epg_modal') {
	goto label5424;
}

if ($A7d54b094ae83c95 == 'stream_logs') {
	goto label26014;
}

if (!($A7d54b094ae83c95 == 'ondemand')) {
	goto label26013;
}

if (e589A4Bf54a2dAD1('adv', 'streams')) {
	goto label14888;
}

exit();
goto label14888;

label3517:

goto label27495;

label3518:

$cf0aab70014807af[] = '`streams`.`id` IN (SELECT MIN(`id`) FROM `streams` WHERE `type` = 2 GROUP BY `stream_source` HAVING COUNT(`stream_source`) > 1)';
$F1a9d7720adbf27a = true;
goto label27495;

label3522:

$cf0aab70014807af[] = '`streams`.`adaptive_link` IS NOT NULL';

label3524:

goto label23854;

label3525:

goto label23852;

label3526:

$cf0aab70014807af[] = '`streams_servers`.`video_codec` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['video'];
goto label20732;

label3533:

$cf0aab70014807af[] = '`streams_servers`.`video_codec` IS NULL';
goto label20732;

label3536:

$cf0aab70014807af[] = '`streams`.`type` = 5';
$F1a9d7720adbf27a = false;

if (isset(XUI::$rRequest['stream_id'])) {
	goto label19942;
}

if (isset(XUI::$rRequest['source_id'])) {
	goto label21146;
}

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label17700;
}

goto label17683;

label3558:

$cf0aab70014807af[] = '`lines`.`member_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label3564:

if (0 < count($cf0aab70014807af)) {
	goto label21707;
}

$F5190fed237fabec = '';
goto label21706;

label3572:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label3584;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label981;

label3584:

goto label976;

label3585:

$cf0aab70014807af[] = '(`streams_servers`.`monitor_pid` > 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`stream_status` = 0)';

label3587:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label7441;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label7439;

label3613:

if (0 < intval(XUI::$rRequest['category'])) {
	goto label21162;
}

if (!(intval(XUI::$rRequest['category']) == -1)) {
	goto label3632;
}

$cf0aab70014807af[] = '(`streams`.`category_id` = \'[]\' OR `streams`.`category_id` IS NULL)';

label3632:

goto label21168;
goto label21162;

label3634:

goto label3640;

label3635:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label3640:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);
goto label19500;

label3655:

$Cc2b5dfe75dc164b = 10;
$a2ebb817d88c810b = XUI::getEPG(XUI::$rRequest['stream_id'], time(), time() + 604800);
if (!($a2ebb817d88c810b && ($Cc2b5dfe75dc164b < count($a2ebb817d88c810b)))) {
	goto label3684;
}

$a2ebb817d88c810b = array_slice($a2ebb817d88c810b, 0, $Cc2b5dfe75dc164b);

label3684:

goto label1592;

label3685:

$cf0aab70014807af[] = '(`lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 AND `lines`.`is_restreamer` = 0 AND `lines`.`is_stalker` = 0)';

label3687:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label20013;

label3694:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label4382;

	label3698:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="movie?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'movie\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '>Edit</a>' . "\r\n\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');">Delete</a>';

	label3735:

	goto label3815;

	label3737:

	goto label4688;

	label3739:

	if (isset($D9d6a5d0b76a9aaf['codecs']['video'])) {
		goto label3747;
	}

	$D9d6a5d0b76a9aaf['codecs']['video'] = ['width' => '?', 'height' => '?', 'codec_name' => 'N/A', 'r_frame_rate' => '--'];

	label3747:

	if (isset($D9d6a5d0b76a9aaf['codecs']['audio'])) {
		goto label4360;
	}

	$D9d6a5d0b76a9aaf['codecs']['audio'] = ['codec_name' => 'N/A'];
	goto label4360;

	label3757:

	$d5faa5f11beba133 = '<a href=\'javascript: void(0);\' onClick="viewDuplicates(\'' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name']) . '\', \'' . $Fb9da1713bff19ce['source'] . '\');">Duplicate of <strong>' . $Bd75771848e8df2b . '</strong> other movie' . ($Bd75771848e8df2b == 1 ? '' : 's') . '</a>';

	label3778:

	if (e589a4BF54A2DaD1('adv', 'player')) {
		goto label3999;
	}

	$eb0ed57b1401ceea = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-play"></i></button>';
	goto label4163;
	goto label3999;

	label3790:

	$Fb9da1713bff19ce['server_id'] = 0;

	label3792:

	if (!($f1dcaed925076e67['streams_grouped'] == 1)) {
		goto label3800;
	}

	$Fb9da1713bff19ce['server_id'] = -1;

	label3800:

	goto label4794;

	label3802:

	if (!isset(XUI::$rRequest['single'])) {
		goto label3815;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');">Delete</a>';

	label3815:

	$E8e13b4c9d9584b6 .= '</div></div>';
	goto label3920;

	label3818:
	if (empty($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) || (strtoupper($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) == 'H264') || (strtoupper($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) == 'N/A')) {
		goto label3845;
	}

	$eb0ed57b1401ceea = '<button type="button" class="btn btn-dark waves-effect waves-light btn-xs tooltip" title="Incompatible Video Codec"><i class="mdi mdi-play"></i></button>';
	goto label4163;

	label3845:

	$eb0ed57b1401ceea = '<button title="Play" type="button" class="btn btn-info waves-effect waves-light btn-xs tooltip" onClick="player(' . $Fb9da1713bff19ce['id'] . ', \'' . $Fb9da1713bff19ce['target_container'] . '\');"><i class="mdi mdi-play"></i></button>';
	goto label4163;

	label3854:

	goto label3863;

	label3856:

	$E8e13b4c9d9584b6 .= '<button title="Stop Encoding" type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';

	label3863:

	goto label4745;
	goto label4744;

	label3867:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label3874;

	label3870:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label3874:

	goto label3876;

	label3876:

	if (!E589a4bF54A2dAd1('adv', 'edit_movie')) {
		goto label4222;
	}

	if (intval($a22fa0d1973a0b0e) == 1) {
		goto label4747;
	}
	if ((intval($a22fa0d1973a0b0e) == 3) || (intval($a22fa0d1973a0b0e) == 5)) {
		goto label4744;
	}

	if (intval($a22fa0d1973a0b0e) == 2) {
		goto label3856;
	}

	$E8e13b4c9d9584b6 .= '<button title="Start Encoding" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-play"></i></button>';
	goto label3854;

	label3920:

	if ($F1a9d7720adbf27a) {
		goto label4314;
	}

	$d5faa5f11beba133 = '<table style=\'font-size: 10px;\' class=\'table-data nowrap\' align=\'center\'><tbody><tr><td colspan=\'3\'>No information available</td></tr></tbody></table>';
	$D9d6a5d0b76a9aaf = json_decode($Fb9da1713bff19ce['stream_info'], true);

	if (!($a22fa0d1973a0b0e == 1)) {
		goto label4312;
	}

	goto label3739;

	label3937:

	goto label4821;

	label3939:

	goto label3948;

	label3941:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');">Stop Encoding</a>';

	label3948:

	goto label4439;
	goto label4439;

	label3952:

	goto label3955;

	label3954:

	$a22fa0d1973a0b0e = 4;

	label3955:

	goto label4255;
	goto label4254;

	label3959:

	goto label4255;

	label3961:

	if ($Fb9da1713bff19ce['to_analyze'] == 1) {
		goto label4254;
	}

	if ($Fb9da1713bff19ce['stream_status'] == 1) {
		goto label3954;
	}

	$a22fa0d1973a0b0e = 1;
	goto label3952;

	label3974:

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label3997;

	label3977:

	$a93d58fa34cf616f = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ', ' . intval($Fb9da1713bff19ce['server_id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['clients'], 0) . '</button></a>';

	label3997:

	goto label4650;

	label3999:
	if ((intval($a22fa0d1973a0b0e) == 1) || ($a22fa0d1973a0b0e == 3)) {
		goto label4012;
	}

	$eb0ed57b1401ceea = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-play"></i></button>';
	goto label4163;

	label4012:

	goto label3818;

	label4014:

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label4515;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label4513;

	label4031:

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label4038:

	$eca9936f0487fe83 = ($Fb9da1713bff19ce['year'] ? '<strong>' . $Fb9da1713bff19ce['year'] . '</strong> &nbsp;' : '');
	$B7bbd17ec35a49aa = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'><strong>' . $Fb9da1713bff19ce['stream_display_name'] . ('</strong><br><span style=\'font-size:11px;\'>' . $eca9936f0487fe83 . $B93a4cfa6336a834 . '<br/>' . $Dbcac322b4274e46 . '</span></a>');

	if ($Fb9da1713bff19ce['server_name']) {
		goto label4111;
	}

	goto label4108;

	label4066:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label3920;

	label4069:

	$E8e13b4c9d9584b6 = '';
	goto label4408;

	label4072:

	if (intval($a22fa0d1973a0b0e) == 1) {
		goto label4474;
	}
	if ((intval($a22fa0d1973a0b0e) == 3) || (intval($a22fa0d1973a0b0e) == 5)) {
		goto label4471;
	}

	if (intval($a22fa0d1973a0b0e) == 2) {
		goto label4146;
	}

	$E8e13b4c9d9584b6 .= '<button title="Start Encoding" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-play"></i></button>';
	goto label4144;

	label4108:

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label4811;

	label4111:

	if (E589A4bF54a2DAd1('adv', 'servers')) {
		goto label4452;
	}

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];
	goto label4450;

	label4122:

	goto label4131;

	label4124:

	$c68b76c7e42b19eb = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Ccbdf03f8a4df633['movie_image'] . '\'><img loading=\'lazy\' src=\'resize?maxh=58&maxw=32&url=' . $Ccbdf03f8a4df633['movie_image'] . '\' /></a>';

	label4131:
	if (isset($Ccbdf03f8a4df633['kinopoisk_url']) && (0 < strlen($Ccbdf03f8a4df633['kinopoisk_url']))) {
		goto label4160;
	}

	goto label4157;

	label4144:

	goto label4153;

	label4146:

	$E8e13b4c9d9584b6 .= '<button title="Stop Encoding" type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';

	label4153:

	goto label4472;
	goto label4471;

	label4157:

	$b41097c951ee83d3 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light btn-fixed-xs"><i class="text-light fas fa-minus-circle"></i></button>';
	goto label4161;

	label4160:

	$b41097c951ee83d3 = '<button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed-xs"><i class="text-light fas fa-check-circle"></i></button>';

	label4161:

	goto label4476;

	label4163:
	if ((0 < strlen($Ccbdf03f8a4df633['movie_image'])) && XUI::$rSettings['show_images']) {
		goto label4124;
	}

	$c68b76c7e42b19eb = '';
	goto label4122;

	label4178:

	$E8e13b4c9d9584b6 .= '<button title="Encode" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-refresh"></i></button>';

	label4185:

	$E8e13b4c9d9584b6 .= '<a href="movie?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'movie\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>' . "\r\n\t\t\t\t\t\t\t" . '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label4222:

	goto label4066;
	goto label4072;

	label4226:

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label3937;

	label4240:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);
	goto label4773;

	label4254:

	$a22fa0d1973a0b0e = 2;

	label4255:

	goto label4682;
	goto label4535;

	label4259:

	$C39bf74bcb6f2a82 = 5 - ($Be927fb456a47264 + ($ac699a87736bb3c0 ? 1 : 0));

	if (!(0 < $Be927fb456a47264)) {
		goto label4280;
	}

	foreach (range(1, $Be927fb456a47264) as $df6991d59f367c7e) {
		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star\'></i>';
	}

	label4280:

	goto label4618;

	label4282:

	$d5faa5f11beba133 = '<table class=\'table-data nowrap table-data-120 text-center\' align=\'center\'>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'double\'>' . number_format($Fb9da1713bff19ce['bitrate'], 0) . ' Kbps</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'text-success\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'text-success\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'text-success\'><i class=\'mdi mdi-clock\' data-name=\'mdi-clock\'></i></td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'double\'>' . $D9d6a5d0b76a9aaf['codecs']['video']['width'] . ' x ' . $D9d6a5d0b76a9aaf['codecs']['video']['height'] . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>' . $D9d6a5d0b76a9aaf['codecs']['video']['codec_name'] . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>' . $D9d6a5d0b76a9aaf['codecs']['audio']['codec_name'] . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>' . $f7037fc395d8fcad . '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>';

	label4312:

	goto label3778;

	label4314:

	$Bd75771848e8df2b = ($D5c525522fef1d4a[$Fb9da1713bff19ce['source']] - 1) ?: 0;
	goto label3757;

	label4322:

	if (!E589a4BF54a2DAD1('adv', 'edit_movie')) {
		goto label3735;
	}

	if (intval($a22fa0d1973a0b0e) == 1) {
		goto label4441;
	}

	if (intval($a22fa0d1973a0b0e) == 3) {
		goto label4439;
	}

	if (intval($a22fa0d1973a0b0e) == 2) {
		goto label3941;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Start Encoding</a>';
	goto label3939;

	label4360:

	if (!($Fb9da1713bff19ce['bitrate'] == 0)) {
		goto label4368;
	}

	$Fb9da1713bff19ce['bitrate'] = '?';

	label4368:

	$f7037fc395d8fcad = (empty($D9d6a5d0b76a9aaf['duration']) ? '--' : substr($D9d6a5d0b76a9aaf['duration'], 0, 5));
	goto label4282;

	label4382:

	if (!XUI::$rSettings['redis_handler']) {
		goto label4737;
	}

	if ($f1dcaed925076e67['streams_grouped'] == 1) {
		goto label4406;
	}

	$Fb9da1713bff19ce['clients'] = count($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']][$Fb9da1713bff19ce['server_id']]) ?: 0;
	goto label4737;

	label4406:

	goto label4731;

	label4408:

	if (!(0 < strlen($Fb9da1713bff19ce['notes']))) {
		goto label4421;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label4421:

	$E8e13b4c9d9584b6 .= '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';
	if ((isset(XUI::$rRequest['single']) || isset(XUI::$rRequest['simple'])) && e589A4bF54A2DaD1('adv', 'edit_movie')) {
		goto label3737;
	}

	goto label4322;

	label4439:

	goto label3698;

	label4441:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Encode</a>';
	goto label3698;

	label4450:

	goto label4459;

	label4452:

	$D8d609d5bdc92a03 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';

	label4459:
	if (!($f1dcaed925076e67['streams_grouped'] && (1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']]))) {
		goto label4607;
	}

	goto label4587;

	label4471:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop"><i class="mdi mdi-stop"></i></button>';

	label4472:

	goto label4572;

	label4474:

	goto label4565;

	label4476:

	$Abcb228699a7f743 = $Fb9da1713bff19ce['id'];
	if (!(!$f1dcaed925076e67['streams_grouped'] && (1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']]))) {
		goto label4492;
	}

	$Abcb228699a7f743 .= '-' . $Fb9da1713bff19ce['server_id'];

	label4492:

	$B9869413eae86beb['data'][] = ['<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Abcb228699a7f743 . '</a>', $c68b76c7e42b19eb, $B7bbd17ec35a49aa, $D8d609d5bdc92a03, $a93d58fa34cf616f, $E537e0b49c6c29c9[$a22fa0d1973a0b0e], $b41097c951ee83d3, $E8e13b4c9d9584b6, $eb0ed57b1401ceea, $d5faa5f11beba133];
	goto label3937;

	label4513:

	goto label4525;

	label4515:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label4525:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label4038;
	}

	goto label4031;

	label4535:

	if (intval($Fb9da1713bff19ce['direct_proxy']) == 1) {
		goto label4546;
	}

	$a22fa0d1973a0b0e = 3;
	goto label4682;

	label4546:

	goto label4681;

	label4548:

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['clients'], 0) . '</button>';

	label4556:

	goto label4650;

	label4558:

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label3977;
	}

	goto label3974;

	label4565:

	$E8e13b4c9d9584b6 .= '<button title="Encode" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-refresh"></i></button>';

	label4572:

	if (!isset(XUI::$rRequest['single'])) {
		goto label4585;
	}

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label4585:

	goto label4066;

	label4587:

	$D8d609d5bdc92a03 .= ' &nbsp; <button title="View All Servers" onClick="viewSources(\'' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name']) . '\', ' . intval($Fb9da1713bff19ce['id']) . ');" type=\'button\' class=\'tooltip-left btn btn-info btn-xs waves-effect waves-light\'>+ ' . ($D52a67130c4ab288[$Fb9da1713bff19ce['id']] - 1) . '</button>';

	label4607:

	if (!($Bcf70cba56392975[$Fb9da1713bff19ce['server_id']]['last_status'] != 1)) {
		goto label4616;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button title="Server Offline!<br/>Uptime cannot be confirmed." type=\'button\' class=\'tooltip btn btn-danger btn-xs waves-effect waves-light\'><i class=\'mdi mdi-alert\'></i></button>';

	label4616:

	goto label4811;

	label4618:

	if (!$ac699a87736bb3c0) {
		goto label4623;
	}

	$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-half\'></i>';

	label4623:

	if (!(0 < $C39bf74bcb6f2a82)) {
		goto label4014;
	}

	foreach (range(1, $C39bf74bcb6f2a82) as $df6991d59f367c7e) {
		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-outline\'></i>';
	}

	goto label4014;

	label4639:

	goto label4648;

	label4641:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Encode</a>';

	label4648:

	goto label3802;

	label4650:

	if (XUI::$rSettings['group_buttons']) {
		goto label4069;
	}

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	if ((isset(XUI::$rRequest['single']) || isset(XUI::$rRequest['simple'])) && E589a4bF54A2dAD1('adv', 'edit_movie')) {
		goto label4072;
	}

	if (0 < strlen($Fb9da1713bff19ce['notes'])) {
		goto label3870;
	}

	goto label3867;

	label4681:

	$a22fa0d1973a0b0e = 5;

	label4682:

	if ($Fb9da1713bff19ce['server_id']) {
		goto label3792;
	}

	goto label3790;

	label4688:

	if (intval($a22fa0d1973a0b0e) == 1) {
		goto label4641;
	}

	if (intval($a22fa0d1973a0b0e) == 3) {
		goto label4729;
	}

	if (intval($a22fa0d1973a0b0e) == 2) {
		goto label4720;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Start Encoding</a>';
	goto label4727;
	goto label4720;

	label4720:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');">Stop Encoding</a>';

	label4727:

	goto label4639;

	label4729:

	goto label4639;

	label4731:

	$Fb9da1713bff19ce['clients'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label4737:

	if (!$De97a60c730465cd) {
		goto label4240;
	}

	unset($B9869413eae86beb['source']);
	goto label4226;

	label4744:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop"><i class="mdi mdi-stop"></i></button>';

	label4745:

	goto label4185;

	label4747:

	goto label4178;

	label4749:

	$a22fa0d1973a0b0e = 0;

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label4535;
	}
	if (!is_null($Fb9da1713bff19ce['pid']) && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label3961;
	}

	$a22fa0d1973a0b0e = 0;
	goto label3959;

	label4773:

	$B93a4cfa6336a834 = '';

	if (!$Ccbdf03f8a4df633['rating']) {
		goto label4014;
	}

	$e1928169d299e86c = round($Ccbdf03f8a4df633['rating']) / 2.0;
	$Be927fb456a47264 = floor($e1928169d299e86c);
	$ac699a87736bb3c0 = 0 < ($e1928169d299e86c - $Be927fb456a47264);
	goto label4259;

	label4794:

	if (e589A4Bf54A2dad1('adv', 'live_connections')) {
		goto label4558;
	}

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label4809;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label4556;

	label4809:

	goto label4548;

	label4811:

	$Bd92fffa215178e4 = 0;

	if ($Fb9da1713bff19ce['server_id']) {
		goto label4749;
	}

	$a22fa0d1973a0b0e = -1;
	goto label4682;
	goto label4749;

	label4821:
}

label4823:

goto label3359;

label4824:

goto label4827;

label4825:

$cf0aab70014807af[] = '`lines`.`admin_enabled` = 0';

label4827:

goto label207;

label4828:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label4850;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label4850:

goto label27454;

label4851:

$B9869413eae86beb['recordsTotal'] = 0;
goto label4859;

label4854:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label4859:

goto label19793;

label4860:

exit();
goto label27506;

label4862:

if (!(0 < count($E153b6005aa003ab))) {
	goto label4888;
}

$b62d6460eb33ea07->query('SELECT `id`, `username` FROM `users` WHERE `id` IN (' . implode(',', $E153b6005aa003ab) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D861acc8063e8100[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['username'];
}

label4888:

goto label9291;

label4889:

$a2a53f18f4f95c8b = ['`login_logs`.`date`', '`login_logs`.`type`', '`login_logs`.`status`', '`users`.`username`', '`access_codes`.`code`', '`login_logs`.`login_ip`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label4906;
}

$E7dbfc96029b3745 = 0;
goto label24627;

label4906:

goto label24619;

label4907:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label10042;
}

foreach (range(1, 7) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`users`.`id` LIKE ? OR `users`.`username` LIKE ? OR `users`.`notes` LIKE ? OR FROM_UNIXTIME(`users`.`date_registered`) LIKE ? OR FROM_UNIXTIME(`users`.`last_login`) LIKE ? OR `users`.`email` LIKE ? OR `users`.`ip` LIKE ?)';
goto label10042;

label4937:

goto label7463;

label4938:

$B9869413eae86beb = [
	'status' => 'STATUS_SUCCESS',
	'data'   => []
];
$b62d6460eb33ea07->query('SELECT `id` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `api_key` = ? AND LENGTH(`api_key`) > 0 AND `is_admin` = 1 AND `status` = 1;', XUI::$rRequest['api_key']);

if (!($b62d6460eb33ea07->num_rows() == 0)) {
	goto label25755;
}

goto label25750;

label4952:

if (0 < count($cf0aab70014807af)) {
	goto label4960;
}

$F5190fed237fabec = '';
goto label25619;

label4960:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label25619;

label4967:
if (!(!e589a4BF54a2dAd1('adv', 'users') && !e589a4BF54a2dAd1('adv', 'mass_edit_users'))) {
	goto label4983;
}

exit();

label4983:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label6315;

label4997:

goto label15336;

label4998:
if (!(!$db0a61ef32b89a27['is_admin'] || !e589a4bf54a2daD1('adv', 'categories'))) {
	goto label5011;
}

exit();

label5011:

goto label24357;

label5012:
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label5028;
}

$E7dbfc96029b3745 = 0;
goto label20682;

label5028:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);
goto label20682;

label5037:

$F5190fed237fabec = '';
goto label5045;

label5039:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label5045:

goto label16276;

label5046:

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label5055:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label25712;
}

if (!isset(XUI::$rRequest['only_channels'])) {
	goto label17399;
}

goto label9853;

label5070:

goto label24585;

label5071:

if (e589a4BF54A2dad1('adv', 'reg_userlog')) {
	goto label5078;
}

exit();

label5078:

goto label6123;

label5079:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label5125;

	label5085:

	if (0 < strlen(XUI::$rRequest['category_id'])) {
		goto label5102;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label5151;

	label5102:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category_id'])]['category_name'] ?: 'No Category';
	goto label5151;

	label5114:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $E8e13b4c9d9584b6];

	label5123:

	goto label5181;

	label5125:

	if (!$De97a60c730465cd) {
		goto label5143;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label5123;

	label5143:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	goto label5085;

	label5151:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label5166;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label5166:

	$E8e13b4c9d9584b6 = '<div class="btn-group"><button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="movies" type="button" style="display: none;" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(' . $Fb9da1713bff19ce['id'] . ', \'movies\');"><i class="mdi mdi-minus"></i></button>' . "\r\n" . '                <button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="movies" type="button" style="display: none;" class="btn-add btn btn-success waves-effect waves-success btn-xs" onClick="toggleBouquet(' . $Fb9da1713bff19ce['id'] . ', \'movies\');"><i class="mdi mdi-plus"></i></button></div>';
	goto label5114;

	label5181:
}

label5183:

echo json_encode($B9869413eae86beb);
goto label11756;

label5188:

exit();

label5189:

goto label15724;

label5190:

if (E589A4bf54A2DAD1('adv', 'folder_watch_output')) {
	goto label6676;
}

goto label6675;

label5197:

$cf0aab70014807af[] = '`streams`.`direct_source` = 1';

label5199:

goto label22009;

label5200:

$cf0aab70014807af[] = '`streams_servers`.`on_demand` = 1';
goto label22009;

label5203:

foreach (range(1, 6) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`lines`.`username` LIKE ? OR `enigma2_devices`.`mac` LIKE ? OR `enigma2_devices`.`public_ip` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`reseller_notes` LIKE ? OR `lines`.`admin_notes` LIKE ?)';

label5220:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label23791;
}

goto label15626;

label5230:

if (0 < count($cf0aab70014807af)) {
	goto label5238;
}

$F5190fed237fabec = '';
goto label11824;

label5238:

goto label11818;

label5239:

if (!(0 < count($dec36723d7be7c49))) {
	goto label5269;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`server_stream_id`) AS `count` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

label5269:

goto label27137;

label5270:

$cf0aab70014807af[] = '`streams_servers`.`audio_codec` IS NULL';

label5272:

if (!(0 < strlen(XUI::$rRequest['video']))) {
	goto label7913;
}

goto label24025;

label5282:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label5329;

	label5288:

	$C0a1fd30f0173389 = $Fb9da1713bff19ce['owner_username'];
	$B4731e3da198a28c = $Fb9da1713bff19ce['target_username'];
	goto label5310;

	label5294:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . $Fb9da1713bff19ce['admin_id'] . '\'>' . $Fb9da1713bff19ce['owner_username'] . '</a>';
	goto label5303;

	label5303:

	$B4731e3da198a28c = '<a href=\'user?id=' . $Fb9da1713bff19ce['target_id'] . '\'>' . $Fb9da1713bff19ce['target_username'] . '</a>';

	label5310:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $C0a1fd30f0173389, $B4731e3da198a28c, number_format($Fb9da1713bff19ce['amount'], 0), $Fb9da1713bff19ce['reason'], $Fb9da1713bff19ce['date']];

	label5327:

	goto label5356;

	label5329:

	if (!$De97a60c730465cd) {
		goto label5347;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label5327;

	label5347:

	if (e589A4bF54a2DAd1('adv', 'edit_reguser')) {
		goto label5294;
	}

	goto label5288;

	label5356:
}

label5358:

echo json_encode($B9869413eae86beb);
goto label7504;

label5363:

goto label12046;

label5364:
if (!(!$db0a61ef32b89a27['is_admin'] || !e589a4bf54A2DAd1('adv', 'login_logs'))) {
	goto label5377;
}

exit();

label5377:

goto label4889;

label5378:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label5400;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label5400:

goto label4952;

label5401:

exit();

label5402:

$F3f66625345f16f6 = array_reverse(D436A797A6bf499F());
$B088125f4a2f342c = [];

if (!(0 < strlen($f1dcaed925076e67['dropbox_token']))) {
	goto label20819;
}

goto label20807;

label5418:

echo json_encode($B9869413eae86beb);
exit();

label5423:

goto label7887;

label5424:

goto label3655;

label5425:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label5431:

if (0 < intval(XUI::$rRequest['server'])) {
	goto label22567;
}

goto label22555;

label5440:

$a9b562b640795042 = $aa2402d87b97aa29 = $dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['id']);
}

if (!(0 < count($dec36723d7be7c49))) {
	goto label18989;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, `server_id`, COUNT(*) AS `count` FROM `ondemand_check` WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ') AND `status` = 1 GROUP BY CONCAT(`stream_id`, \'_\', `server_id`);');
goto label1817;

label5470:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label5482;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label21723;

label5482:

goto label21718;

label5483:

goto label5486;

label5484:

$cf0aab70014807af[] = '(`streams_series`.`tmdb_id` = 0 OR `streams_series`.`tmdb_id` IS NULL)';

label5486:

goto label22172;

label5487:

$A38e57f944de21df = 'SELECT COUNT(DISTINCT(`streams`.`id`)) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ';';

label5491:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label3635;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label3634;

label5503:

if (!(0 < count($B12f177002ce1b47))) {
	goto label24914;
}

$b62d6460eb33ea07->query('SELECT `user_id`, `stream_id`, `date_end` AS `last_active` FROM `lines_activity` WHERE `activity_id` IN (' . implode(',', $B12f177002ce1b47) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (isset($f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'])) {
		goto label5539;
	}

	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];

	label5539:
}

goto label24914;

label5542:

$F56066ad7b074468 = NULL;

label5543:

if ($b120584763e3d117 = strtotime($b120584763e3d117 . ' 23:59:59')) {
	goto label5551;
}

$b120584763e3d117 = NULL;

label5551:

goto label20553;

label5552:

goto label5559;

label5553:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label5559:

if (!isset(XUI::$rRequest['single'])) {
	goto label15482;
}

goto label15480;

label5565:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label27307;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, MD5(`streams`.`stream_source`) AS `source`, `streams_servers`.`to_analyze`, `streams`.`movie_properties`, `streams`.`target_container`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, `streams_series`.`title`, `streams_series`.`seasons`, `streams_series`.`id` AS `sid`, `streams_episodes`.`season_num` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` ' . $F5190fed237fabec . ' GROUP BY `streams`.`id` ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label1474;

label5599:

if (!(XUI::$rRequest['filter'] == 7)) {
	goto label5607;
}

$cf0aab70014807af[] = '`streams`.`transcode_profile_id` > 0';

label5607:

goto label236;

label5608:

goto label233;

label5609:

$B91645b8411dc88c = 'SELECT `server_id`, `action`, `source`, `date` FROM `streams_logs` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1157;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label5651;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label5694;

	label5651:

	$b45008dac88f7d0a = '';

	if (empty($Fb9da1713bff19ce['source'])) {
		goto label5666;
	}

	$b45008dac88f7d0a = strtolower(parse_url($Fb9da1713bff19ce['source'])['host']);

	label5666:

	$B9869413eae86beb['data'][] = ['<a href=\'server_view?id=' . intval($Fb9da1713bff19ce['server_id']) . '\'>' . XUI::$rServers[$Fb9da1713bff19ce['server_id']]['server_name'] . '</a>', $b45008dac88f7d0a, $e04681f39f3c4415[$Fb9da1713bff19ce['action']], date(XUI::$rSettings['datetime_format'], $Fb9da1713bff19ce['date'])];

	label5694:
}

goto label1157;

label5697:

$F5190fed237fabec = '';
goto label5705;

label5699:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label5705:

goto label1542;

label5706:

$B9869413eae86beb['recordsTotal'] = 0;
goto label5714;

label5709:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label5714:

goto label14953;

label5715:

$A38e57f944de21df = 'SELECT COUNT(DISTINCT(`streams`.`id`)) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ';';

label5719:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label5709;
}

goto label5706;

label5729:

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label5738:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label26792;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label26787;

label5756:

$cf0aab70014807af[] = '`date` >= (UNIX_TIMESTAMP()-86400)';
$e4829bf95c7424f6 = 'ORDER BY `date` DESC';
$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams_logs` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label6210;

label5774:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label23422;
}

$c5feeca020e7bf5c = [];
$b62d6460eb33ea07->query('SELECT `ip` FROM `blocked_ips`;');
goto label23902;

label5798:

$ca8155fd3c07c1ee = XUI::$redis->zRangeByScore('LINE#' . $f7107e3a92443147, '-inf', '+inf', [
	'limit' => [$bcfd61adc96d4b72, $Cc2b5dfe75dc164b]
]);

label5810:

$a3b35b5bcdf091ff = XUI::$redis->zCard('LINE#' . $f7107e3a92443147);
goto label7790;
goto label7781;

label5818:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label12549;
}

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label20786;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`type`, `streams`.`stream_icon`, `streams`.`adaptive_link`, `streams`.`title_sync`, `streams_servers`.`cchannel_rsources`, `streams`.`stream_source`, `streams`.`stream_display_name`, `streams`.`tv_archive_duration`, `streams`.`tv_archive_server_id`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`cc_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, `streams`.`epg_id`, `streams`.`channel_id`, `streams_servers`.`parent_id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label20796;
goto label20786;

label5853:

$B692d6e1f0cf1f67 = XUI::getFirstConnection($C98047839de3d474);
$dec36723d7be7c49 = [];

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $Fd10d59f87b19e71) {
	if (in_array($Fd10d59f87b19e71['stream_id'], $dec36723d7be7c49)) {
		goto label5875;
	}

	$dec36723d7be7c49[] = intval($Fd10d59f87b19e71['stream_id']);

	label5875:
}

$b42f717d234fde64 = [];
goto label16678;

label5879:

goto label5886;

label5880:

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, true, true);

label5886:

goto label1446;

label5887:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label5895:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`providers`.`enabled` = 1 AND `providers`.`status` = 1';
goto label7002;

label5900:

$a3b35b5bcdf091ff = XUI::$redis->zCard('LIVE');
goto label1328;

label5906:
if ($f7107e3a92443147 || $ee6d1fc5d801b43f) {
	goto label24348;
}

goto label18854;

label5911:

exit();

label5912:

$a2a53f18f4f95c8b = ['`streams`.`id`', false, '`streams`.`stream_display_name`', '`server_name`', '`clients`', '`streams_servers`.`stream_started`', false, false, '`streams_servers`.`bitrate`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label21998;
}

$E7dbfc96029b3745 = 0;
goto label21997;

label5929:

goto label5936;

label5930:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label5936:

$A38e57f944de21df = 'SELECT COUNT(`id`) AS `count` FROM `lines` ' . $F5190fed237fabec . ';';
goto label17165;

label5941:

if (0 < intval(XUI::$rRequest['category'])) {
	goto label22056;
}

if (!(intval(XUI::$rRequest['category']) == -1)) {
	goto label5960;
}

$cf0aab70014807af[] = '(`streams`.`category_id` = \'[]\' OR `streams`.`category_id` IS NULL)';

label5960:

goto label22062;
goto label22056;

label5962:

goto label5969;

label5963:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label5969:

goto label11188;

label5970:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label11871;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`stream_display_name` LIKE ? OR `servers`.`server_name` LIKE ? OR FROM_UNIXTIME(`date`) LIKE ? OR `streams_errors`.`error` LIKE ?)';
goto label11871;

label6000:

if (!(0 < strlen(XUI::$rRequest['range']))) {
	goto label8233;
}

$F56066ad7b074468 = substr(XUI::$rRequest['range'], 0, 10);
$b120584763e3d117 = substr(XUI::$rRequest['range'], strlen(XUI::$rRequest['range']) - 10, 10);

if ($F56066ad7b074468 = strtotime($F56066ad7b074468 . ' 00:00:00')) {
	goto label26102;
}

$F56066ad7b074468 = NULL;
goto label26102;

label6040:

$b120584763e3d117 = substr(XUI::$rRequest['range'], strlen(XUI::$rRequest['range']) - 10, 10);

if ($F56066ad7b074468 = strtotime($F56066ad7b074468 . ' 00:00:00')) {
	goto label6062;
}

$F56066ad7b074468 = NULL;

label6062:

if ($b120584763e3d117 = strtotime($b120584763e3d117 . ' 23:59:59')) {
	goto label18557;
}

goto label18556;

label6070:

goto label6073;

label6071:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NULL OR `streams_servers`.`monitor_pid` <= 0) AND `streams_servers`.`on_demand` = 0)';

label6073:

goto label17220;
goto label17218;

label6075:
if (!($bc89bec2d7c7cf08 && !$F74c31745a712716)) {
	goto label6085;
}

$ca8155fd3c07c1ee = array_reverse($ca8155fd3c07c1ee);

label6085:

if ($F74c31745a712716) {
	goto label16976;
}

goto label16972;

label6088:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label6093:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label1157;
}

goto label5609;

label6113:

echo json_encode($B9869413eae86beb);
exit();

label6118:

goto label12060;

label6119:

goto label6122;

label6120:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NULL OR `streams_servers`.`monitor_pid` <= 0) AND `streams_servers`.`on_demand` = 0)';

label6122:

goto label16265;

label6123:

$a2a53f18f4f95c8b = ['`users_logs`.`id`', '`users`.`username`', '`users_logs`.`log_id`', '`users_logs`.`type`, `users_logs`.`action`', '`users_logs`.`cost`', '`users_logs`.`credits_after`', '`users_logs`.`date`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label6140;
}

$E7dbfc96029b3745 = 0;
goto label18589;

label6140:

goto label18581;

label6141:

if ($A7d54b094ae83c95 == 'restream_logs') {
	goto label1269;
}

if ($A7d54b094ae83c95 == 'mag_events') {
	goto label6225;
}

if ($A7d54b094ae83c95 == 'bouquets_streams') {
	goto label11758;
}

if ($A7d54b094ae83c95 == 'bouquets_vod') {
	goto label3455;
}

if ($A7d54b094ae83c95 == 'bouquets_series') {
	goto label1787;
}

goto label1801;

label6157:

echo json_encode($B9869413eae86beb);
exit();

label6162:

goto label12612;
goto label1269;

label6164:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

if (!XUI::$rSettings['redis_handler']) {
	goto label5886;
}

if ($f1dcaed925076e67['streams_grouped']) {
	goto label5880;
}

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, false, false);
goto label5879;

label6189:

goto label6195;

label6190:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label6195:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);
goto label16129;

label6210:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label6218;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label7470;

label6218:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label7470;

label6224:

goto label6162;

label6225:
if (!(!$db0a61ef32b89a27['is_admin'] || !e589a4bF54A2DaD1('adv', 'manage_events'))) {
	goto label19568;
}

exit();
goto label19568;

label6239:
if ($f7107e3a92443147 || $C082ca9ed03f473c) {
	goto label27103;
}

if ($bc89bec2d7c7cf08) {
	goto label6258;
}

$ca8155fd3c07c1ee = XUI::$redis->zRevRangeByScore('STREAM#' . $ee6d1fc5d801b43f, '+inf', '-inf', [
	'limit' => [$bcfd61adc96d4b72, $Cc2b5dfe75dc164b]
]);
goto label27096;

label6258:

goto label27084;

label6259:

$b62d6460eb33ea07->query('SELECT `id`, `type`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Af1444cd652ebf84[$Fb9da1713bff19ce['id']] = [$Fb9da1713bff19ce['stream_display_name'], $Fb9da1713bff19ce['type']];
}

label6281:

if (!(0 < count($d5649ba25d2e07d4))) {
	goto label24293;
}

goto label24274;

label6289:

$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label6293:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label1048;
}

$cf0aab70014807af[] = '`users_logs`.`action` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['filter'];
goto label1048;

label6309:

$f1dcaed925076e67['streams_grouped'] = 1;

label6311:

goto label22148;

label6312:

$f1dcaed925076e67['streams_grouped'] = 0;
goto label22148;

label6315:

$a2a53f18f4f95c8b = ['`lines`.`id`', '`lines`.`username`', '`lines`.`password`', '`lines`.`member_id`', '`lines`.`enabled` - `lines`.`admin_enabled`', '`active_connections` > 0', '`lines`.`is_trial`', '`lines`.`is_restreamer`', '`active_connections`', '`lines`.`max_connections`', '`lines`.`exp_date`', '`active_connections` ' . $bc89bec2d7c7cf08 . ', `last_activity`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label6347;
}

$E7dbfc96029b3745 = 0;
goto label19539;

label6347:

goto label19531;

label6348:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label6353:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label12252;
}

goto label1339;

label6373:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label6381:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`type` = 2';
if (!(isset(XUI::$rRequest['category_id']) && (0 < intval(XUI::$rRequest['category_id'])))) {
	goto label24848;
}

goto label24842;

label6399:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label8018;
}

$B91645b8411dc88c = 'SELECT `lines`.`username`, `lines`.`is_e2`, `lines`.`is_mag`, `lines_activity`.`activity_id`, `lines_activity`.`hmac_identifier`, `lines_activity`.`hmac_id`, `lines_activity`.`proxy_id`, `lines_activity`.`container`, `lines_activity`.`isp`, `lines_activity`.`user_id`, `lines_activity`.`stream_id`, `streams`.`series_no`, `lines_activity`.`server_id`, `lines_activity`.`user_agent`, `lines_activity`.`user_ip`, `lines_activity`.`container`, `lines_activity`.`date_start`, `lines_activity`.`date_end`, `lines_activity`.`geoip_country_code`, `streams`.`stream_display_name`, `streams`.`type`, (SELECT `server_name` FROM `servers` WHERE `id` = `lines_activity`.`server_id`) AS `server_name`, `lines`.`is_restreamer` FROM `lines_activity` LEFT JOIN `lines` ON `lines_activity`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_activity`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label8018;
}

goto label12641;

label6439:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label6466;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`watch_logs`.`id` LIKE ? OR `watch_logs`.`filename` LIKE ? OR `watch_logs`.`dateadded` LIKE ?)';

label6466:

goto label17766;

label6467:

$E7dbfc96029b3745 = 0;
goto label6477;

label6469:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label6477:

goto label5970;

label6478:

$cf0aab70014807af[] = '`lines`.`admin_enabled` = 0';

label6480:

goto label17882;

label6481:

$cf0aab70014807af[] = '`lines`.`enabled` = 0';
goto label17882;

label6484:

if (!(0 < count($B12f177002ce1b47))) {
	goto label6522;
}

$b62d6460eb33ea07->query('SELECT `user_id`, `stream_id`, `date_end` AS `last_active` FROM `lines_activity` WHERE `activity_id` IN (' . implode(',', $B12f177002ce1b47) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (isset($f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'])) {
		goto label6520;
	}

	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];

	label6520:
}

label6522:

goto label26116;

label6523:

$B03cfeca75020c69[] = XUI::$rRequest['stream_id'];
$e4829bf95c7424f6 = 'ORDER BY `streams_servers`.`server_stream_id` ASC';

label6528:

if (0 < count($cf0aab70014807af)) {
	goto label5553;
}

$F5190fed237fabec = '';
goto label5552;

label6536:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` = 2)';

label6538:

goto label18850;

label6539:

goto label18848;

label6540:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label6650;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label6552;

	label6552:

	if (!$De97a60c730465cd) {
		goto label6570;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label6587;

	label6570:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	goto label6619;

	label6578:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['title'], $Dbcac322b4274e46, $E8e13b4c9d9584b6];

	label6587:

	goto label6648;

	label6589:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label6604;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label6604:

	$E8e13b4c9d9584b6 = '<div class="btn-group"><button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="series" type="button" style="display: none;" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(' . $Fb9da1713bff19ce['id'] . ', \'series\');"><i class="mdi mdi-minus"></i></button>' . "\r\n" . '                <button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="series" type="button" style="display: none;" class="btn-add btn btn-success waves-effect waves-success btn-xs" onClick="toggleBouquet(' . $Fb9da1713bff19ce['id'] . ', \'series\');"><i class="mdi mdi-plus"></i></button></div>';
	goto label6578;

	label6619:

	if (0 < strlen(XUI::$rRequest['category_id'])) {
		goto label6636;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label6589;

	label6636:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category_id'])]['category_name'] ?: 'No Category';
	goto label6589;

	label6648:
}

label6650:

goto label3449;

label6651:

goto label6661;

label6652:

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label6661:

goto label11365;

label6662:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label6674;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label16235;

label6674:

goto label16230;

label6675:

exit();

label6676:

$a2a53f18f4f95c8b = ['`watch_logs`.`id`', '`watch_logs`.`type`', '`watch_logs`.`server_id`', '`watch_logs`.`filename`', '`watch_logs`.`status`', '`watch_logs`.`dateadded`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label16627;
}

$E7dbfc96029b3745 = 0;
goto label16626;

label6693:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label6701:

$cf0aab70014807af = $B03cfeca75020c69 = [];
if (!(isset(XUI::$rRequest['category_id']) && (0 < intval(XUI::$rRequest['category_id'])))) {
	goto label24104;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams_series`.`category_id`, ?, \'$\')';
goto label24100;

label6719:

if (XUI::$rRequest['filter'] == 1) {
	goto label3685;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label22452;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label9962;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label6748;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label11261;
}

goto label11252;

label6745:

$cf0aab70014807af[] = '`lines`.`is_restreamer` = 1';

label6747:

goto label9961;

label6748:

$cf0aab70014807af[] = '`lines`.`is_trial` = 1';
goto label9961;

label6751:

$E7dbfc96029b3745 = 0;
goto label6761;

label6753:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label6761:

goto label15078;

label6762:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label4828;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';
goto label4828;

label6790:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label6796:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams_series` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label10086;

label6805:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label6820;
}

$cf0aab70014807af[] = '`users`.`owner_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label6820:

if (0 < count($cf0aab70014807af)) {
	goto label20675;
}

goto label20673;

label6827:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label6880;

	label6831:

	goto label6917;

	label6833:

	if (!$De97a60c730465cd) {
		goto label6919;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label6917;
	goto label6919;

	label6853:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label6863:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label6903;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';
	goto label6903;

	label6880:

	if (!XUI::$rSettings['redis_handler']) {
		goto label6892;
	}

	$Fb9da1713bff19ce['active_count'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label6892:

	if (!($Fb9da1713bff19ce['active_count'] == 0)) {
		goto label6833;
	}

	$B9869413eae86beb['recordsTotal']--;
	goto label6831;

	label6903:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $Fb9da1713bff19ce['active_count'], '<button type=\'button\' class=\'btn btn-info waves-effect waves-light btn-xs\' href=\'javascript:void(0);\' onClick=\'selectFingerprint(' . $Fb9da1713bff19ce['id'] . ')\'><i class=\'mdi mdi-fingerprint\'></i></button>'];

	label6917:

	goto label6944;

	label6919:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label6853;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label6863;
	goto label6853;

	label6944:
}

label6946:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);
goto label15378;

label6961:

$cf0aab70014807af[] = '(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())';

label6963:

goto label6480;

label6964:

goto label6478;

label6965:

if (0 < intval(XUI::$rRequest['server'])) {
	goto label7088;
}

if (!(intval(XUI::$rRequest['server']) == -1)) {
	goto label6984;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` IS NULL';

label6984:

goto label7097;
goto label7088;

label6986:

echo json_encode($B9869413eae86beb);
exit();

label6991:

goto label3271;

label6992:

if (!(XUI::$rRequest['filter'] == 6)) {
	goto label7000;
}

$cf0aab70014807af[] = '`streams`.`direct_source` = 1';

label7000:

goto label1588;

label7001:

goto label1586;

label7002:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label7029;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`providers`.`name` LIKE ? OR `providers`.`ip` LIKE ? OR `providers_streams`.`stream_display_name` LIKE ? OR `providers_streams`.`stream_id` LIKE ?)';

label7029:

goto label11232;

label7030:

goto label7037;

label7031:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label7037:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `mag_events` LEFT JOIN `mag_devices` ON `mag_devices`.`mag_id` = `mag_events`.`mag_device_id` ' . $F5190fed237fabec . ';';
goto label15102;

label7042:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label7050:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`epg_api`.`callSign` <> \'\'';
goto label7261;

label7055:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label7077;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label7077:

if (0 < count($cf0aab70014807af)) {
	goto label14925;
}

goto label14923;

label7084:

goto label7087;

label7085:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 1 AND `streams_servers`.`stream_status` <> 1)';

label7087:

goto label21832;

label7088:

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label7097:

if (!(0 < strlen(XUI::$rRequest['series']))) {
	goto label7;
}

goto label1;

label7107:

goto label7114;

label7108:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label7114:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `queue` LEFT JOIN `servers` ON `servers`.`id` = `queue`.`server_id` LEFT JOIN `streams` ON `streams`.`id` = `queue`.`stream_id` ' . $F5190fed237fabec . ';';
goto label6662;

label7119:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label7215;

	label7125:

	$Ec379295dc7029e6 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';

	label7132:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], [1 => 'Movies', 2 => 'Series'][$Fb9da1713bff19ce['type']], $Ec379295dc7029e6, $Fb9da1713bff19ce['filename'], $Da7a5d6e82ba0f40[$Fb9da1713bff19ce['status']], $Fb9da1713bff19ce['dateadded'], $E8e13b4c9d9584b6];

	label7149:

	goto label7254;

	label7151:
	if (!((1 < $Fb9da1713bff19ce['status']) && ($Fb9da1713bff19ce['type'] == 1))) {
		goto label7172;
	}

	$E8e13b4c9d9584b6 .= '<a href="movie.php?path=' . urlencode('s:' . $Fb9da1713bff19ce['server_id'] . ':' . $Fb9da1713bff19ce['filename']) . '"><button type="button" title="Manual Match" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-plus"></i></button></a>';

	label7172:

	goto label7236;

	label7174:

	if (!(0 < $Fb9da1713bff19ce['stream_id'])) {
		goto label7151;
	}

	if ($Fb9da1713bff19ce['type'] == 1) {
		goto label7201;
	}

	if (!E589A4Bf54a2DaD1('adv', 'edit_episode')) {
		goto label7197;
	}

	$E8e13b4c9d9584b6 = '<a href="stream_view?id=' . $Fb9da1713bff19ce['stream_id'] . '"><button title="View Episode" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-eye"></i></button></a>';

	label7197:

	goto label7199;

	label7199:

	goto label7151;

	label7201:

	if (!e589a4bf54A2DAd1('adv', 'edit_movie')) {
		goto label7213;
	}

	$E8e13b4c9d9584b6 = '<a href="stream_view?id=' . $Fb9da1713bff19ce['stream_id'] . '"><button title="View Movie" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-eye"></i></button></a>';

	label7213:

	goto label7151;

	label7215:

	if (!$De97a60c730465cd) {
		goto label7233;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label7149;

	label7233:

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	goto label7174;

	label7236:

	$E8e13b4c9d9584b6 .= '<button type="button" title="Delete" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';
	$E8e13b4c9d9584b6 .= '</div>';

	if (E589A4Bf54a2DAD1('adv', 'servers')) {
		goto label7125;
	}

	$Ec379295dc7029e6 = $Fb9da1713bff19ce['server_name'];
	goto label7132;
	goto label7125;

	label7254:
}

label7256:

echo json_encode($B9869413eae86beb);
goto label15723;

label7261:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label7288;
}

foreach (range(1, 5) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`epg_api`.`callSign` LIKE ? OR `epg_api`.`name` LIKE ? OR `epg_api`.`bcastLangs` LIKE ? OR `epg_api`.`videoType` LIKE ? OR `epg_api`.`affiliateCallSign` LIKE ?)';

label7288:

goto label7055;

label7289:

$B1e93ae2ae39e1ff = XUI::a96ab74f1921D4Ad($C98047839de3d474, true);
$B692d6e1f0cf1f67 = XUI::getFirstConnection($C98047839de3d474);
$dec36723d7be7c49 = [];

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $Fd10d59f87b19e71) {
	if (in_array($Fd10d59f87b19e71['stream_id'], $dec36723d7be7c49)) {
		goto label7316;
	}

	$dec36723d7be7c49[] = intval($Fd10d59f87b19e71['stream_id']);

	label7316:
}

goto label26844;

label7319:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`streams`.`type` = 2';

if (0 < intval(XUI::$rRequest['category'])) {
	goto label11734;
}

if (!(intval(XUI::$rRequest['category']) == -1)) {
	goto label11733;
}

$cf0aab70014807af[] = '(`streams`.`category_id` = \'[]\' OR `streams`.`category_id` IS NULL)';
goto label11733;

label7343:

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label7352:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label15162;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label15157;

label7370:

$B03cfeca75020c69[] = XUI::$rRequest['status'];

label7374:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label5230;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;
goto label5230;

label7397:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label7424;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams`.`notes` LIKE ? OR `streams_servers`.`current_source` LIKE ?)';

label7424:

goto label3613;

label7425:

if ($b120584763e3d117 = strtotime($b120584763e3d117 . ' 23:59:59')) {
	goto label7433;
}

$b120584763e3d117 = NULL;

label7433:
if (!($F56066ad7b074468 && $b120584763e3d117)) {
	goto label2517;
}

goto label2511;

label7439:

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams`.`notes` LIKE ? OR `streams_servers`.`current_source` LIKE ?)';

label7441:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label20877;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label20872;

label7459:

date_default_timezone_set($E59d0debc75e7be8['timezone']);

label7463:

if (!$Ebb0b63f7c597ba4) {
	goto label117;
}

XUI::$rSettings['modal_edit'] = false;
goto label114;

label7470:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label280;
}

$B91645b8411dc88c = 'SELECT `date`, `action` FROM `streams_logs` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label238;

label7504:

exit();

label7505:

goto label6991;

label7506:

if (e589a4bF54A2dAd1('adv', 'mass_delete')) {
	goto label17376;
}

goto label17375;

label7513:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label7521:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`streams`.`type` = 5';
goto label6965;

label7526:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? false : true);
$F74c31745a712716 = true;

if (isset(XUI::$rRequest['refresh'])) {
	goto label17144;
}

$C082ca9ed03f473c = (0 < intval(XUI::$rRequest['server_id']) ? intval(XUI::$rRequest['server_id']) : NULL);
goto label1163;

label7561:

if (!(0 < count($B12f177002ce1b47))) {
	goto label7599;
}

$b62d6460eb33ea07->query('SELECT `user_id`, `stream_id`, `date_end` AS `last_active` FROM `lines_activity` WHERE `activity_id` IN (' . implode(',', $B12f177002ce1b47) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (isset($f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'])) {
		goto label7597;
	}

	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];

	label7597:
}

label7599:

goto label2568;

label7600:

exit();

label7601:

$F771d40e8cf51e59 = f769e3f0c739d1A6('movie');
$a2a53f18f4f95c8b = ['`streams`.`id`', false, '`streams`.`stream_display_name`', '`streams`.`category_id`', '`streams_servers`.`server_id`', '`streams_servers`.`stream_status`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label20888;
}

goto label20886;

label7621:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label7626:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label23932;
}

goto label24480;

label7646:

$cf0aab70014807af[] = '`lines`.`is_trial` = 1';

label7648:

goto label17609;

label7649:

$cf0aab70014807af[] = '(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())';
goto label17609;

label7652:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label7674;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label7674:

if (0 < count($cf0aab70014807af)) {
	goto label22049;
}

goto label22047;

label7681:

goto label18617;

label7682:

if (e589a4bf54A2DAd1('adv', 'connection_logs')) {
	goto label18690;
}

exit();
goto label18690;

label7690:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label7695:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label27499;
}

$B91645b8411dc88c = 'SELECT `lines`.`id`, `lines`.`username`, `lines`.`member_id`, `lines`.`last_activity`, `lines`.`last_activity_array`, `mag_devices`.`mac`, `mag_devices`.`stb_type`, `mag_devices`.`mag_id`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`enabled`, `lines`.`admin_notes`, `lines`.`reseller_notes`, `lines`.`max_connections`, `lines`.`is_trial`, (SELECT count(*) FROM `lines_live` WHERE `lines`.`id` = `lines_live`.`user_id` AND `hls_end` = 0) AS `active_connections` FROM `lines` RIGHT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label16362;

label7725:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 1)';

label7727:

goto label16595;

label7728:

goto label16593;

label7729:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams_logs` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label6088;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label6093;
goto label6088;

label7746:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label7761;
}

$cf0aab70014807af[] = '`lines`.`member_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label7761:

goto label19950;

label7762:

if (XUI::$rRequest['filter'] == 11) {
	goto label3522;
}

if (XUI::$rRequest['filter'] == 12) {
	goto label7907;
}

if (!(XUI::$rRequest['filter'] == 13)) {
	goto label7780;
}

$cf0aab70014807af[] = '`streams`.`transcode_profile_id` > 0';

label7780:

goto label7906;

label7781:

$ca8155fd3c07c1ee = XUI::$redis->zRevRangeByScore('LINE#' . $f7107e3a92443147, '+inf', '-inf');
$F74c31745a712716 = false;

label7790:

goto label17143;

label7791:

goto label7798;

label7792:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label7798:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label12213;
}

goto label12208;

label7803:

$B03cfeca75020c69[] = XUI::$rRequest['category_id'];

label7807:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label15494;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label15492;

label7833:

$E7dbfc96029b3745 = 0;
goto label7843;

label7835:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label7843:

goto label4907;

label7844:

if ($Ab7613704ad1bb6c) {
	goto label12861;
}

$Ab13f2545dd3df14 = time();

if (!(0 < count($dec36723d7be7c49))) {
	goto label12861;
}

goto label16293;

label7857:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

if (!XUI::$rSettings['redis_handler']) {
	goto label12234;
}

if ($f1dcaed925076e67['streams_grouped']) {
	goto label12228;
}

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, false, false);
goto label12227;

label7882:

echo json_encode($B9869413eae86beb);
exit();

label7887:

goto label1162;
goto label7984;

label7889:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label7901;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label17345;

label7901:

goto label17340;

label7902:

goto label7905;

label7903:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`stream_status` = 1)';

label7905:

goto label19882;

label7906:

goto label7909;

label7907:

$cf0aab70014807af[] = '`streams`.`title_sync` IS NOT NULL';

label7909:

goto label3524;
goto label3522;

label7911:

$cf0aab70014807af[] = '`streams_servers`.`video_codec` IS NULL';

label7913:

if (!(0 < strlen(XUI::$rRequest['resolution']))) {
	goto label530;
}

$cf0aab70014807af[] = '`streams_servers`.`resolution` = ?';
goto label521;

label7925:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label7933:

$Ab7613704ad1bb6c = isset(XUI::$rRequest['created']);
$cf0aab70014807af = $B03cfeca75020c69 = [];

if ($Ab7613704ad1bb6c) {
	goto label27436;
}

goto label27433;

label7941:

$cf0aab70014807af[] = '(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))';

label7943:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label22140;
}

goto label22134;

label7953:

foreach (range(1, 6) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`lines`.`username` LIKE ? OR `lines`.`password` LIKE ? OR FROM_UNIXTIME(`exp_date`) LIKE ? OR `lines`.`max_connections` LIKE ? OR `lines`.`reseller_notes` LIKE ? OR `lines`.`admin_notes` LIKE ?)';

label7970:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label7943;
}

goto label24130;

label7980:

$cf0aab70014807af[] = '`streams`.`direct_source` = 1';

label7982:

goto label26874;

label7983:

goto label26872;

label7984:

if (E589A4Bf54a2dAD1('adv', 'streams')) {
	goto label7991;
}

exit();

label7991:

$Cc2b5dfe75dc164b = 10;
goto label24156;

label7993:
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label8009;
}

$E7dbfc96029b3745 = 0;
goto label19358;

label8009:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);
goto label19358;

label8018:

echo json_encode($B9869413eae86beb);
exit();
goto label18617;

label8024:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label8226;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label8157;

	label8040:

	$B080674c55093935 = '<img loading=\'lazy\' src=\'' . $Fb9da1713bff19ce['stream_icon'] . '\' height=\'32px\' />';

	label8044:

	$D0c88fcede6a73f7 = json_decode($Fb9da1713bff19ce['data'], true);
	$Dcd345fd677c6c87 = $D0c88fcede6a73f7['exp_date'] ?: 'Never';
	goto label8182;

	label8056:

	$b16df9df82ee1dc5 = ($Fb9da1713bff19ce['ssl'] ? 'https' : 'http') . '://' . $Fb9da1713bff19ce['ip'] . ':' . $Fb9da1713bff19ce['port'] . '/movie/' . $Fb9da1713bff19ce['username'] . '/' . $Fb9da1713bff19ce['password'] . '/' . $Fb9da1713bff19ce['stream_id'] . '.' . $Fb9da1713bff19ce['channel_id'];
	$E8e13b4c9d9584b6 = '<a href="javascript: void(0);" onClick="addStream(\'' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name']) . '\', \'' . str_replace('\'', '\\\'', $b16df9df82ee1dc5) . '\');"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-check"></i></button></a>';
	goto label8140;

	label8098:

	$b16df9df82ee1dc5 = ($Fb9da1713bff19ce['ssl'] ? 'https' : 'http') . '://' . $Fb9da1713bff19ce['ip'] . ':' . $Fb9da1713bff19ce['port'] . '/live/' . $Fb9da1713bff19ce['username'] . '/' . $Fb9da1713bff19ce['password'] . '/' . $Fb9da1713bff19ce['stream_id'] . ($Fb9da1713bff19ce['hls'] ? '.m3u8' : ($Fb9da1713bff19ce['legacy'] ? '.ts' : ''));
	goto label8132;

	label8132:

	$E8e13b4c9d9584b6 = '<a href="javascript: void(0);" onClick="addStream(\'' . str_replace('\'', '\\\'', $b16df9df82ee1dc5) . '\');"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-check"></i></button></a>';

	label8140:
	if ((0 < strlen($Fb9da1713bff19ce['stream_icon'])) && ($Fb9da1713bff19ce['type'] == 'live')) {
		goto label8040;
	}

	$B080674c55093935 = '';
	goto label8044;
	goto label8040;

	label8157:

	if (!$De97a60c730465cd) {
		goto label8175;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label8222;

	label8175:

	if ($Fb9da1713bff19ce['type'] == 'live') {
		goto label8098;
	}

	goto label8056;

	label8182:

	$A9c066cee616f400 = $D0c88fcede6a73f7['max_connections'] ?: '&infin;';
	$A2ff75fed18f4512 = '<span class=\'tooltip\' title=\'Expires: ' . $Dcd345fd677c6c87 . '<br/>Connections: ' . $D0c88fcede6a73f7['active_connections'] . ' / ' . $A9c066cee616f400 . '\'>' . $Fb9da1713bff19ce['name'] . '</span>';

	if ($Fb9da1713bff19ce['type'] == 'live') {
		goto label8214;
	}

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['stream_display_name'], $A2ff75fed18f4512, $E8e13b4c9d9584b6];
	goto label8222;
	goto label8214;

	label8214:

	$B9869413eae86beb['data'][] = [$B080674c55093935, $Fb9da1713bff19ce['stream_display_name'], $A2ff75fed18f4512, $E8e13b4c9d9584b6];

	label8222:

	goto label8224;

	label8224:
}

label8226:

goto label9245;

label8227:

$cf0aab70014807af[] = '(`lines_logs`.`date` >= ? AND `lines_logs`.`date` <= ?)';
$B03cfeca75020c69[] = $F56066ad7b074468;
$B03cfeca75020c69[] = $b120584763e3d117;

label8233:

goto label10064;

label8234:

if (0 < count($cf0aab70014807af)) {
	goto label8242;
}

$F5190fed237fabec = '';
goto label12031;

label8242:

goto label12025;

label8243:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label8412;

	label8247:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop"><i class="mdi mdi-stop"></i></button>';

	label8248:

	goto label9113;

	label8250:

	goto label9106;

	label8252:

	$a22fa0d1973a0b0e = 0;
	goto label9177;

	label8255:

	if ($Fb9da1713bff19ce['to_analyze'] == 1) {
		goto label9176;
	}

	if ($Fb9da1713bff19ce['stream_status'] == 1) {
		goto label8441;
	}

	goto label8438;

	label8267:

	if (intval($a22fa0d1973a0b0e) == 1) {
		goto label9065;
	}

	if (intval($a22fa0d1973a0b0e) == 3) {
		goto label8880;
	}

	if (intval($a22fa0d1973a0b0e) == 2) {
		goto label8871;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Encode</a>';
	goto label8878;
	goto label8871;

	label8299:

	if (intval($a22fa0d1973a0b0e) == 1) {
		goto label8250;
	}

	if (intval($a22fa0d1973a0b0e) == 3) {
		goto label8247;
	}

	if (intval($a22fa0d1973a0b0e) == 2) {
		goto label8821;
	}

	$E8e13b4c9d9584b6 .= '<button title="Encode" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-play"></i></button>';
	goto label8819;

	label8329:

	if (e589a4bf54A2daD1('adv', 'player')) {
		goto label8339;
	}

	$eb0ed57b1401ceea = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-play"></i></button>';
	goto label8843;

	label8339:

	goto label8633;

	label8341:

	$Fb9da1713bff19ce['clients'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label8347:

	if (!$De97a60c730465cd) {
		goto label8987;
	}

	unset($B9869413eae86beb['source']);
	goto label8973;

	label8354:

	$a22fa0d1973a0b0e = 5;

	label8355:

	if ($Fb9da1713bff19ce['server_id']) {
		goto label8708;
	}

	goto label8706;

	label8361:

	$E8e13b4c9d9584b6 .= '<button title="Encode" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-refresh"></i></button>';

	label8368:

	$E8e13b4c9d9584b6 .= '<a href="episode?id=' . $Fb9da1713bff19ce['id'] . '&sid=' . $Fb9da1713bff19ce['sid'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'episode\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>' . "\r\n\t\t\t\t\t\t\t" . '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label8408:

	goto label8865;
	goto label8299;

	label8412:

	if (!XUI::$rSettings['redis_handler']) {
		goto label8347;
	}

	if ($f1dcaed925076e67['streams_grouped'] == 1) {
		goto label8436;
	}

	$Fb9da1713bff19ce['clients'] = count($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']][$Fb9da1713bff19ce['server_id']]) ?: 0;
	goto label8347;

	label8436:

	goto label8341;

	label8438:

	$a22fa0d1973a0b0e = 1;
	goto label8442;

	label8441:

	$a22fa0d1973a0b0e = 4;

	label8442:

	goto label9174;

	label8444:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="episode?id=' . $Fb9da1713bff19ce['id'] . '&sid=' . $Fb9da1713bff19ce['sid'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'episode\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '>Edit</a>' . "\r\n\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');">Delete</a>';

	label8484:

	goto label8703;

	label8486:

	goto label8267;

	label8488:

	if (!($Fb9da1713bff19ce['bitrate'] == 0)) {
		goto label8496;
	}

	$Fb9da1713bff19ce['bitrate'] = '?';

	label8496:

	$d5faa5f11beba133 = '<table class=\'table-data nowrap table-data-120\' align=\'center\'>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'double\'>' . number_format($Fb9da1713bff19ce['bitrate'], 0) . ' Kbps</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'text-success\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'text-success\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class=\'double\'>' . $D9d6a5d0b76a9aaf['codecs']['video']['width'] . ' x ' . $D9d6a5d0b76a9aaf['codecs']['video']['height'] . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>' . $D9d6a5d0b76a9aaf['codecs']['video']['codec_name'] . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>' . $D9d6a5d0b76a9aaf['codecs']['audio']['codec_name'] . '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>';
	goto label8925;

	label8526:
	if (!($f1dcaed925076e67['streams_grouped'] && (1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']]))) {
		goto label8556;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button title="View All Servers" onClick="viewSources(\'' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name']) . '\', ' . intval($Fb9da1713bff19ce['id']) . ');" type=\'button\' class=\'tooltip-left btn btn-info btn-xs waves-effect waves-light\'>+ ' . ($D52a67130c4ab288[$Fb9da1713bff19ce['id']] - 1) . '</button>';

	label8556:

	if (!($Bcf70cba56392975[$Fb9da1713bff19ce['server_id']]['last_status'] != 1)) {
		goto label9091;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button title="Server Offline!<br/>Uptime cannot be confirmed." type=\'button\' class=\'tooltip btn btn-danger btn-xs waves-effect waves-light\'><i class=\'mdi mdi-alert\'></i></button>';
	goto label9091;

	label8567:

	if ($Fb9da1713bff19ce['server_name']) {
		goto label8574;
	}

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label9091;

	label8574:

	if (E589A4BF54A2Dad1('adv', 'servers')) {
		goto label8599;
	}

	goto label8595;

	label8583:

	$eb0ed57b1401ceea = '<button type="button" class="btn btn-dark waves-effect waves-light btn-xs tooltip" title="Incompatible Video Codec"><i class="mdi mdi-play"></i></button>';
	goto label8593;

	label8586:

	$eb0ed57b1401ceea = '<button title="Play" type="button" class="btn btn-info waves-effect waves-light btn-xs tooltip" onClick="player(' . $Fb9da1713bff19ce['id'] . ', \'' . $Fb9da1713bff19ce['target_container'] . '\');"><i class="mdi mdi-play"></i></button>';

	label8593:

	goto label8843;

	label8595:

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];
	goto label8606;

	label8599:

	$D8d609d5bdc92a03 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';

	label8606:

	goto label8526;

	label8608:

	$c68b76c7e42b19eb = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Ccbdf03f8a4df633['movie_image'] . '\'><img loading=\'lazy\' src=\'resize?maxh=32&maxw=64&url=' . $Ccbdf03f8a4df633['movie_image'] . '\' /></a>';

	label8615:

	$Abcb228699a7f743 = $Fb9da1713bff19ce['id'];
	if (!(!$f1dcaed925076e67['streams_grouped'] && (1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']]))) {
		goto label8727;
	}

	$Abcb228699a7f743 .= '-' . $Fb9da1713bff19ce['server_id'];
	goto label8727;

	label8633:
	if ((intval($a22fa0d1973a0b0e) == 1) || ($a22fa0d1973a0b0e == 3)) {
		goto label8646;
	}

	$eb0ed57b1401ceea = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-play"></i></button>';
	goto label8843;

	label8646:
	if (empty($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) || (strtoupper($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) == 'H264') || (strtoupper($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) == 'N/A')) {
		goto label8586;
	}

	goto label8583;

	label8672:

	if (isset($D9d6a5d0b76a9aaf['codecs']['video'])) {
		goto label8680;
	}

	$D9d6a5d0b76a9aaf['codecs']['video'] = ['width' => '?', 'height' => '?', 'codec_name' => 'N/A', 'r_frame_rate' => '--'];

	label8680:

	if (isset($D9d6a5d0b76a9aaf['codecs']['audio'])) {
		goto label8488;
	}

	$D9d6a5d0b76a9aaf['codecs']['audio'] = ['codec_name' => 'N/A'];
	goto label8488;

	label8690:

	if (!isset(XUI::$rRequest['single'])) {
		goto label8703;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');">Delete</a>';

	label8703:

	$E8e13b4c9d9584b6 .= '</div></div>';
	goto label8956;

	label8706:

	$Fb9da1713bff19ce['server_id'] = 0;

	label8708:

	if (!($f1dcaed925076e67['streams_grouped'] == 1)) {
		goto label8716;
	}

	$Fb9da1713bff19ce['server_id'] = -1;

	label8716:

	goto label9074;

	label8718:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label8725;

	label8721:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label8725:

	goto label9179;

	label8727:

	$B9869413eae86beb['data'][] = ['<a href=\'stream_view?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Abcb228699a7f743 . '</a>', $c68b76c7e42b19eb, '<a href=\'stream_view?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $B7bbd17ec35a49aa . '</a>', $D8d609d5bdc92a03, $a93d58fa34cf616f, $E537e0b49c6c29c9[$a22fa0d1973a0b0e], $E8e13b4c9d9584b6, $eb0ed57b1401ceea, $d5faa5f11beba133];

	label8756:

	goto label9217;

	label8758:

	if (!(0 < strlen($Fb9da1713bff19ce['notes']))) {
		goto label8771;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label8771:

	$E8e13b4c9d9584b6 .= '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';
	if ((isset(XUI::$rRequest['single']) || isset(XUI::$rRequest['simple'])) && e589a4BF54a2Dad1('adv', 'edit_episode')) {
		goto label8486;
	}

	goto label9001;

	label8789:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop"><i class="mdi mdi-stop"></i></button>';

	label8790:

	goto label8368;

	label8792:

	goto label8361;

	label8794:

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label8817;

	label8797:

	$a93d58fa34cf616f = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ', ' . intval($Fb9da1713bff19ce['server_id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['clients'], 0) . '</button></a>';

	label8817:

	goto label9143;

	label8819:

	goto label8828;

	label8821:

	$E8e13b4c9d9584b6 .= '<button title="Stop Encoding" type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';

	label8828:

	goto label8248;
	goto label8247;

	label8832:

	goto label8444;

	label8834:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Encode</a>';
	goto label8444;

	label8843:

	$c68b76c7e42b19eb = '';
	$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);
	if (!((0 < strlen($Ccbdf03f8a4df633['movie_image'])) && XUI::$rSettings['show_images'])) {
		goto label8615;
	}

	goto label8608;

	label8865:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label8956;

	label8868:

	$E8e13b4c9d9584b6 = '';
	goto label8758;

	label8871:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');">Stop Encoding</a>';

	label8878:

	goto label9063;

	label8880:

	goto label9063;

	label8882:

	goto label8891;

	label8884:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');">Stop Encoding</a>';

	label8891:

	goto label8832;
	goto label8832;

	label8895:

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['clients'], 0) . '</button>';

	label8903:

	goto label9143;

	label8905:

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label8797;
	}

	goto label8794;

	label8912:

	goto label8921;

	label8914:

	$E8e13b4c9d9584b6 .= '<button title="Stop Encoding" type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';

	label8921:

	goto label8790;
	goto label8789;

	label8925:

	goto label8329;

	label8927:

	$Bd75771848e8df2b = ($D5c525522fef1d4a[$Fb9da1713bff19ce['source']] - 1) ?: 0;
	$d5faa5f11beba133 = '<a href=\'javascript: void(0);\' onClick="viewDuplicates(\'' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name']) . '\', \'' . $Fb9da1713bff19ce['source'] . '\');">Duplicate of <strong>' . $Bd75771848e8df2b . '</strong> other episode' . ($Bd75771848e8df2b == 1 ? '' : 's') . '</a>';
	goto label8329;

	label8956:

	if ($F1a9d7720adbf27a) {
		goto label8927;
	}

	$d5faa5f11beba133 = '<table style=\'font-size: 10px;\' class=\'table-data nowrap\' align=\'center\'><tbody><tr><td colspan=\'3\'>No information available</td></tr></tbody></table>';
	$D9d6a5d0b76a9aaf = json_decode($Fb9da1713bff19ce['stream_info'], true);

	if (!($a22fa0d1973a0b0e == 1)) {
		goto label8925;
	}

	goto label8672;

	label8973:

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label8756;

	label8987:

	$E276bd7f89cfc862 = $Fb9da1713bff19ce['title'] . ' - Season ' . $Fb9da1713bff19ce['season_num'];
	$B7bbd17ec35a49aa = '<strong>' . $Fb9da1713bff19ce['stream_display_name'] . ('</strong><br><span style=\'font-size:11px;\'>' . $E276bd7f89cfc862 . '</span>');
	goto label8567;

	label9001:

	if (!E589a4Bf54a2dad1('adv', 'edit_episode')) {
		goto label8484;
	}

	if (intval($a22fa0d1973a0b0e) == 1) {
		goto label8834;
	}

	if (intval($a22fa0d1973a0b0e) == 3) {
		goto label8832;
	}

	if (intval($a22fa0d1973a0b0e) == 2) {
		goto label8884;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Encode</a>';
	goto label8882;

	label9039:

	$Bd92fffa215178e4 = 0;
	$a22fa0d1973a0b0e = 0;

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label9130;
	}
	if (!is_null($Fb9da1713bff19ce['pid']) && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label8255;
	}

	goto label8252;

	label9063:

	goto label9072;

	label9065:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Encode</a>';

	label9072:

	goto label8690;

	label9074:

	if (e589a4bf54a2daD1('adv', 'live_connections')) {
		goto label8905;
	}

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label9089;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label8903;

	label9089:

	goto label8895;

	label9091:

	if ($f1dcaed925076e67['streams_grouped']) {
		goto label9039;
	}

	$b45008dac88f7d0a = '<br/><span style=\'font-size:11px;\'>' . parse_url($Fb9da1713bff19ce['current_source'])['host'] . '</span>';
	$D8d609d5bdc92a03 .= $b45008dac88f7d0a;
	goto label9039;

	label9106:

	$E8e13b4c9d9584b6 .= '<button title="Encode" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-refresh"></i></button>';

	label9113:

	if (!isset(XUI::$rRequest['single'])) {
		goto label9126;
	}

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label9126:

	goto label8865;

	label9128:

	goto label8355;

	label9130:

	if (intval($Fb9da1713bff19ce['direct_proxy']) == 1) {
		goto label8354;
	}

	$a22fa0d1973a0b0e = 3;
	goto label8355;
	goto label8354;

	label9143:

	if (XUI::$rSettings['group_buttons']) {
		goto label8868;
	}

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	if ((isset(XUI::$rRequest['single']) || isset(XUI::$rRequest['simple'])) && e589A4bF54a2dAD1('adv', 'edit_episode')) {
		goto label8299;
	}

	if (0 < strlen($Fb9da1713bff19ce['notes'])) {
		goto label8721;
	}

	goto label8718;

	label9174:

	goto label9177;

	label9176:

	$a22fa0d1973a0b0e = 2;

	label9177:

	goto label9128;

	label9179:

	if (!E589A4Bf54A2dAD1('adv', 'edit_episode')) {
		goto label8408;
	}

	if (intval($a22fa0d1973a0b0e) == 1) {
		goto label8792;
	}

	if (intval($a22fa0d1973a0b0e) == 3) {
		goto label8789;
	}

	if (intval($a22fa0d1973a0b0e) == 2) {
		goto label8914;
	}

	$E8e13b4c9d9584b6 .= '<button title="Encode" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-play"></i></button>';
	goto label8912;

	label9217:
}

label9219:

goto label24206;

label9220:

goto label9223;

label9221:

$cf0aab70014807af[] = '(`streams_servers`.`monitor_pid` IS NULL OR `streams_servers`.`monitor_pid` <= 0) AND (REPLACE(`streams_servers`.`cchannel_rsources`, \'\\\\/\', \'/\') = REPLACE(`streams`.`stream_source`, \'\\\\/\', \'/\'))';

label9223:

goto label17398;
goto label17396;

label9225:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label9231:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label21288;
}

goto label21285;

label9245:

echo json_encode($B9869413eae86beb);
exit();

label9250:

goto label23937;
goto label15166;

label9252:

exit();

label9253:

$B9869413eae86beb = [
	'draw'            => intval(XUI::$rRequest['draw']),
	'recordsTotal'    => 0,
	'recordsFiltered' => 0,
	'data'            => []
];
$De97a60c730465cd = false;
goto label22586;

label9265:

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $Fd10d59f87b19e71) {
	$f4e5ef13910179a5[$f7107e3a92443147]['stream_display_name'] = $b42f717d234fde64[$Fd10d59f87b19e71['stream_id']];
	$f4e5ef13910179a5[$f7107e3a92443147]['stream_id'] = $Fd10d59f87b19e71['stream_id'];
	$f4e5ef13910179a5[$f7107e3a92443147]['last_active'] = $Fd10d59f87b19e71['date_start'];
}

unset($B692d6e1f0cf1f67);
goto label5503;

label9285:

$cf0aab70014807af[] = '(REPLACE(`streams_servers`.`cchannel_rsources`, \'\\\\/\', \'/\') <> REPLACE(`streams`.`stream_source`, \'\\\\/\', \'/\'))';

label9287:

goto label21804;

label9288:

$cf0aab70014807af[] = '(`streams_servers`.`monitor_pid` IS NULL OR `streams_servers`.`monitor_pid` <= 0) AND (REPLACE(`streams_servers`.`cchannel_rsources`, \'\\\\/\', \'/\') = REPLACE(`streams`.`stream_source`, \'\\\\/\', \'/\'))';
goto label21804;

label9291:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label9572;

	label9295:

	if (0 < $Fb9da1713bff19ce['user_count']) {
		goto label9303;
	}

	$F951699bbe4a956e = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">0</button>';
	goto label9587;

	label9303:

	$F951699bbe4a956e = '<a href="users?owner=' . intval($Fb9da1713bff19ce['id']) . '"><button type="button" class="btn btn-pink btn-xs waves-effect waves-light">' . number_format($Fb9da1713bff19ce['user_count'], 0) . '</button></a>';
	goto label9587;

	label9319:

	$B23bdc2b274cb1fb = '<a href="mags?owner=' . intval($Fb9da1713bff19ce['id']) . '"><button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($Fb9da1713bff19ce['mag_lines'], 0) . '</button></a>';

	label9333:

	if (0 < $Fb9da1713bff19ce['e2_lines']) {
		goto label9483;
	}

	$Eeb9f09a9fb28b66 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">0</button>';
	goto label9481;

	label9341:

	$E8e13b4c9d9584b6 .= '</div></div>';

	label9342:

	if (0 < strlen($Fb9da1713bff19ce['ip'])) {
		goto label9677;
	}

	$b38e11ffdc6a3abb = '';
	goto label9718;
	goto label9677;

	label9355:

	$Fb9da1713bff19ce = array_merge($Fb9da1713bff19ce, $E59d0debc75e7be8[$Fb9da1713bff19ce['id']]);

	if (!$De97a60c730465cd) {
		goto label9799;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label9551;
	goto label9799;

	label9382:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="user?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'user\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['username'])) . '\')" data-modal="true"' : '') . '>Edit</a>';

	if ($Fb9da1713bff19ce['status'] == 1) {
		goto label9523;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'enable\');">Enable</a>';
	goto label9527;
	goto label9523;

	label9426:

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square tooltip" title="Active"></i>';

	label9427:

	if ($Fb9da1713bff19ce['last_login']) {
		goto label9433;
	}

	$Fb9da1713bff19ce['last_login'] = 'NEVER';

	label9433:

	goto label9553;

	label9435:

	$C50e4262dbc7b171 = '<a href="lines?owner=' . intval($Fb9da1713bff19ce['id']) . '"><button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($Fb9da1713bff19ce['user_lines'], 0) . '</button></a>';

	label9449:

	if (0 < $Fb9da1713bff19ce['mag_lines']) {
		goto label9319;
	}

	$B23bdc2b274cb1fb = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">0</button>';
	goto label9333;
	goto label9319;

	label9459:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-coin"></i></button>';
	goto label9466;

	label9462:

	$E8e13b4c9d9584b6 .= '<button title="Adjust Credits" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="addCredits(' . $Fb9da1713bff19ce['id'] . ');"><i class="mdi mdi-coin"></i></button>';

	label9466:

	goto label9724;

	label9468:

	$E8f21e009ba7a8c5 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">-</button>';
	goto label9479;

	label9471:

	$E8f21e009ba7a8c5 = '<button type="button" class="btn btn-purple btn-xs waves-effect waves-light">' . number_format($Fb9da1713bff19ce['credits'], 0) . '</button>';

	label9479:

	goto label9295;

	label9481:

	goto label9497;

	label9483:

	$Eeb9f09a9fb28b66 = '<a href="enigmas?owner=' . intval($Fb9da1713bff19ce['id']) . '"><button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($Fb9da1713bff19ce['e2_lines'], 0) . '</button></a>';

	label9497:

	if (!isset(XUI::$rRequest['no_url'])) {
		goto label9622;
	}

	goto label9597;

	label9505:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label9509:

	if (!E589a4bF54A2DaD1('adv', 'edit_reguser')) {
		goto label9796;
	}

	if ($Fb9da1713bff19ce['is_reseller']) {
		goto label9462;
	}

	goto label9459;

	label9523:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'disable\');">Disable</a>';

	label9527:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');">Delete</a>';

	label9531:

	goto label9341;

	label9533:

	goto label9342;

	label9535:

	$E8e13b4c9d9584b6 = '';

	if (!(0 < strlen($Fb9da1713bff19ce['notes']))) {
		goto label9768;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';
	goto label9768;

	label9551:

	goto label9809;

	label9553:

	if (XUI::$rSettings['group_buttons']) {
		goto label9535;
	}

	$E8e13b4c9d9584b6 = '<div class="btn-group">';

	if (0 < strlen($Fb9da1713bff19ce['notes'])) {
		goto label9505;
	}

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label9509;
	goto label9505;

	label9572:

	if (isset($D861acc8063e8100[$Fb9da1713bff19ce['owner_id']])) {
		goto label9581;
	}

	$Fb9da1713bff19ce['owner_username'] = '';
	goto label9355;

	label9581:

	$Fb9da1713bff19ce['owner_username'] = $D861acc8063e8100[$Fb9da1713bff19ce['owner_id']];
	goto label9355;

	label9587:

	if (0 < $Fb9da1713bff19ce['user_lines']) {
		goto label9595;
	}

	$C50e4262dbc7b171 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">0</button>';
	goto label9449;

	label9595:

	goto label9435;

	label9597:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['username'], $Fb9da1713bff19ce['owner_username'], $b38e11ffdc6a3abb, $b9f049445aa9bd5d, '<button type="button" class="btn btn-dark btn-fixed btn-xs waves-effect waves-light">' . $Fb9da1713bff19ce['group_name'] . '</button>', $E8f21e009ba7a8c5, $F951699bbe4a956e, $C50e4262dbc7b171, $B23bdc2b274cb1fb, $Eeb9f09a9fb28b66, $Fb9da1713bff19ce['last_login'], $E8e13b4c9d9584b6];
	goto label9675;

	label9622:

	$B9869413eae86beb['data'][] = ['<a href=\'user?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Fb9da1713bff19ce['id'] . '</a>', '<a href=\'user?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Fb9da1713bff19ce['username'] . '</a>', '<a href=\'user?id=' . intval($Fb9da1713bff19ce['owner_id']) . '\'>' . $Fb9da1713bff19ce['owner_username'] . '</a>', $b38e11ffdc6a3abb, $b9f049445aa9bd5d, '<a href="users?filter=' . intval($Fb9da1713bff19ce['member_group_id']) . '"><button type="button" class="btn btn-dark btn-fixed btn-xs waves-effect waves-light">' . $Fb9da1713bff19ce['group_name'] . '</button></a>', $E8f21e009ba7a8c5, $F951699bbe4a956e, $C50e4262dbc7b171, $B23bdc2b274cb1fb, $Eeb9f09a9fb28b66, $Fb9da1713bff19ce['last_login'], $E8e13b4c9d9584b6];

	label9675:

	goto label9551;

	label9677:

	$Edebd7b009e56f17 = explode(':', $Fb9da1713bff19ce['ip']);
	$b38e11ffdc6a3abb = '<a onClick="whois(\'' . $Fb9da1713bff19ce['ip'] . '\');" href=\'javascript: void(0);\'>' . (1 < count($Edebd7b009e56f17) ? implode(':', array_slice($Edebd7b009e56f17, 0, 4)) . ':<br/>' . implode(':', array_slice($Edebd7b009e56f17, 4, 8)) : $Fb9da1713bff19ce['ip']) . '</a>';

	label9718:

	if ($Fb9da1713bff19ce['is_reseller']) {
		goto label9471;
	}

	goto label9468;

	label9724:

	$E8e13b4c9d9584b6 .= '<a href="user?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'user\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['username'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>';

	if ($Fb9da1713bff19ce['status'] == 1) {
		goto label9766;
	}

	$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
	goto label9792;

	label9766:

	goto label9788;

	label9768:

	$E8e13b4c9d9584b6 .= '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';

	if (!E589A4bf54A2dAD1('adv', 'edit_reguser')) {
		goto label9531;
	}

	if (!$Fb9da1713bff19ce['is_reseller']) {
		goto label9382;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="addCredits(' . $Fb9da1713bff19ce['id'] . ');">Adjust Credits</a>';
	goto label9382;

	label9788:

	$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

	label9792:

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label9796:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label9533;

	label9799:

	if ($Fb9da1713bff19ce['status'] == 1) {
		goto label9807;
	}

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>';
	goto label9427;

	label9807:

	goto label9426;

	label9809:
}

label9811:

echo json_encode($B9869413eae86beb);
goto label9844;

label9816:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams`.`series_no` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label1011;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label1016;
goto label1011;

label9833:

$E7dbfc96029b3745 = 0;
goto label9843;

label9835:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label9843:

goto label128;

label9844:

exit();

label9845:

goto label15383;

label9846:

if (e589A4Bf54a2dAd1('adv', 'fingerprint')) {
	goto label25909;
}

goto label25908;

label9853:

if (XUI::$rRequest['filter'] == 1) {
	goto label17396;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label9221;
}

if (!(XUI::$rRequest['filter'] == 3)) {
	goto label9871;
}

$cf0aab70014807af[] = '(REPLACE(`streams_servers`.`cchannel_rsources`, \'\\\\/\', \'/\') <> REPLACE(`streams`.`stream_source`, \'\\\\/\', \'/\'))';

label9871:

goto label9220;

label9872:

goto label9875;

label9873:

$cf0aab70014807af[] = '`streams`.`direct_source` = 1';

label9875:

goto label7727;
goto label7725;

label9877:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label9885:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`stream_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['stream_id'];
goto label5756;

label9894:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label9899:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label6113;
}

goto label15236;

label9919:

$F771d40e8cf51e59 = f769e3F0c739D1A6('series');
$a2a53f18f4f95c8b = ['`streams_series`.`id`', '`streams_series`.`title`', false, false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label23255;
}

$E7dbfc96029b3745 = 0;
goto label23263;
goto label23255;

label9941:

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$D52a67130c4ab288 = $dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($dec36723d7be7c49))) {
	goto label10134;
}

goto label24375;

label9961:

goto label9964;

label9962:

$cf0aab70014807af[] = '`lines`.`is_e2` = 1';

label9964:

goto label22451;

label9965:

$a2a53f18f4f95c8b = ['`streams_series`.`id`', '`streams_series`.`cover`', '`streams_series`.`title`', '`streams_series`.`category_id`', '`latest_season`', '`episode_count`', false, '`streams_series`.`release_date`', '`streams_series`.`last_modified`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label9982;
}

$E7dbfc96029b3745 = 0;
goto label17551;

label9982:

goto label17543;

label9983:

if ($bc89bec2d7c7cf08) {
	goto label9997;
}

$ca8155fd3c07c1ee = XUI::$redis->zRevRangeByScore('LIVE', '+inf', '-inf', [
	'limit' => [$bcfd61adc96d4b72, $Cc2b5dfe75dc164b]
]);
goto label5900;

label9997:

$ca8155fd3c07c1ee = XUI::$redis->zRangeByScore('LIVE', '-inf', '+inf', [
	'limit' => [$bcfd61adc96d4b72, $Cc2b5dfe75dc164b]
]);
goto label5900;

label10009:

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `ondemand_check`.`fps` LIKE ? OR `ondemand_check`.`resolution` LIKE ? OR `ondemand_check`.`video_codec` LIKE ? OR `ondemand_check`.`audio_codec` LIKE ?)';

label10011:

if (!(0 < strlen(XUI::$rRequest['category']))) {
	goto label14813;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
goto label14809;

label10023:

if (!(0 < intval(XUI::$rRequest['server']))) {
	goto label10041;
}

$cf0aab70014807af[] = '`streams_errors`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label10041:

goto label20753;

label10042:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label232;
}

if (XUI::$rRequest['filter'] == -1) {
	goto label230;
}

if (XUI::$rRequest['filter'] == -2) {
	goto label18739;
}

$cf0aab70014807af[] = '`users`.`member_group_id` = ?';
goto label18734;

label10064:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label10079;
}

$cf0aab70014807af[] = '`lines_logs`.`client_status` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['filter'];

label10079:

if (0 < count($cf0aab70014807af)) {
	goto label25763;
}

goto label25761;

label10086:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label10094;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label25809;

label10094:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label25809;

label10100:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label10108:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label24055;
}

goto label24038;

label10121:

$B03cfeca75020c69[] = XUI::$rRequest['stream_id'];
$e4829bf95c7424f6 = 'ORDER BY `streams_servers`.`server_stream_id` ASC';

label10126:

if (0 < count($cf0aab70014807af)) {
	goto label19759;
}

$F5190fed237fabec = '';
goto label19758;

label10134:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label10209;

	label10138:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label10156;

	label10146:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label10156:

	goto label10761;

	label10158:

	if (isset($Debb6b730aee3ce9['speed'])) {
		goto label10165;
	}

	$Cae0c79563bb38d6 = '1x';
	goto label10890;

	label10165:

	goto label10882;

	label10167:

	goto label11033;

	label10169:
	if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($Fb9da1713bff19ce['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5)) {
		goto label10318;
	}

	$E8e13b4c9d9584b6 .= '<button title="Start" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-play"></i></button>';
	goto label10315;

	label10204:

	goto label10207;

	label10206:

	$a22fa0d1973a0b0e = 2;

	label10207:

	goto label11123;

	label10209:

	if (!XUI::$rSettings['redis_handler']) {
		goto label10364;
	}

	if ($f1dcaed925076e67['streams_grouped'] == 1) {
		goto label10233;
	}

	$Fb9da1713bff19ce['clients'] = count($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']][$Fb9da1713bff19ce['server_id']]) ?: 0;
	goto label10364;

	label10233:

	goto label10358;

	label10235:

	goto label10244;

	label10237:

	$D8d609d5bdc92a03 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';

	label10244:
	if (!($f1dcaed925076e67['streams_grouped'] && (1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']]))) {
		goto label10692;
	}

	goto label10672;

	label10256:

	$Debb6b730aee3ce9 = json_decode($Fb9da1713bff19ce['progress_info'], true);

	if (!($a22fa0d1973a0b0e == 1)) {
		goto label10901;
	}

	if (isset($D9d6a5d0b76a9aaf['codecs']['video'])) {
		goto label10275;
	}

	$D9d6a5d0b76a9aaf['codecs']['video'] = ['width' => '?', 'height' => '?', 'codec_name' => 'N/A', 'r_frame_rate' => '--'];

	label10275:

	goto label11039;

	label10277:

	if ($Fb9da1713bff19ce['monitor_pid']) {
		goto label11113;
	}

	if (intval($Fb9da1713bff19ce['on_demand']) == 1) {
		goto label10292;
	}

	$a22fa0d1973a0b0e = 0;
	goto label11111;

	label10292:

	goto label11110;

	label10294:

	goto label11007;

	label10296:

	if (86400 <= $Bd92fffa215178e4) {
		goto label10991;
	}

	$Bd92fffa215178e4 = sprintf('%02dh %02dm %02ds', $Bd92fffa215178e4 / 3600, ($Bd92fffa215178e4 / 60) % 60, $Bd92fffa215178e4 % 60);
	goto label11003;
	goto label10991;

	label10315:

	$b9f049445aa9bd5d = ' disabled';
	goto label10737;

	label10318:

	$E8e13b4c9d9584b6 .= '<button title="Stop" type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';
	$b9f049445aa9bd5d = '';
	goto label10737;

	label10328:

	if ($Fb9da1713bff19ce['server_id']) {
		goto label10335;
	}

	$a22fa0d1973a0b0e = -1;
	goto label11096;

	label10335:

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label11125;
	}

	goto label10277;

	label10345:

	$b45008dac88f7d0a = '<br/><span style=\'font-size:11px;\'>loop: ' . strtolower(XUI::$rServers[$Fb9da1713bff19ce['parent_id']]['server_name']) . '</span>';

	label10355:

	$D8d609d5bdc92a03 .= $b45008dac88f7d0a;

	label10356:

	goto label11159;

	label10358:

	$Fb9da1713bff19ce['clients'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label10364:

	if (!$De97a60c730465cd) {
		goto label10445;
	}

	unset($Fb9da1713bff19ce['stream_source']);
	goto label10431;

	label10371:

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label10473;

	label10374:

	if (e589a4bF54A2DAd1('adv', 'servers')) {
		goto label10237;
	}

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];
	goto label10235;

	label10385:

	if (!e589A4BF54a2Dad1('adv', 'edit_radio')) {
		goto label10167;
	}
	if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($Fb9da1713bff19ce['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5)) {
		goto label10928;
	}

	$E8e13b4c9d9584b6 .= '<button title="Start" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-play"></i></button>';
	$b9f049445aa9bd5d = ' disabled';
	goto label10936;
	goto label10928;

	label10431:

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label11094;

	label10445:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label10146;
	}

	goto label10138;

	label10462:

	if ($Fb9da1713bff19ce['stream_status'] == 0) {
		goto label10470;
	}

	$a22fa0d1973a0b0e = 3;
	goto label10915;

	label10470:

	$a22fa0d1973a0b0e = 2;
	goto label10915;

	label10473:

	if ($f1dcaed925076e67['streams_grouped']) {
		goto label10356;
	}

	if (0 < intval($Fb9da1713bff19ce['parent_id'])) {
		goto label10345;
	}

	$b45008dac88f7d0a = '<br/><span style=\'font-size:11px;\'>' . strtolower(parse_url($Fb9da1713bff19ce['current_source'])['host']) . '</span>';
	goto label10355;
	goto label10345;

	label10501:

	$B080674c55093935 = '';
	goto label10511;

	label10504:

	$B080674c55093935 = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Fb9da1713bff19ce['stream_icon'] . '\'><img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url=' . $Fb9da1713bff19ce['stream_icon'] . '\' /></a>';

	label10511:

	goto label10703;

	label10513:

	if (!e589A4bf54a2DAd1('adv', 'edit_radio')) {
		goto label10668;
	}
	if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($Fb9da1713bff19ce['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5)) {
		goto label10556;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Start</a>';
	goto label10631;

	label10556:

	goto label10612;

	label10558:

	$Bd92fffa215178e4 = str_replace('btn-fixed\'', 'btn-fixed-xl\'', $Bd92fffa215178e4);

	if (XUI::$rSettings['group_buttons']) {
		goto label11036;
	}

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	if ((isset(XUI::$rRequest['single']) || isset(XUI::$rRequest['simple'])) && e589a4bF54a2Dad1('adv', 'edit_radio')) {
		goto label10169;
	}

	if (0 < strlen($Fb9da1713bff19ce['notes'])) {
		goto label10805;
	}

	goto label10802;

	label10595:

	$Fb9da1713bff19ce['server_id'] = -1;

	label10597:

	if (E589A4bF54A2daD1('adv', 'live_connections')) {
		goto label10792;
	}

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label11021;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label11019;

	label10612:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');">Stop</a>' . "\r\n\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'restart\');">Restart</a>' . "\r\n\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'purge\');">Kill Connections</a>';

	label10631:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="radio?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'radio\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '>Edit</a>' . "\r\n\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');">Delete</a>';

	label10668:

	goto label11009;
	goto label11057;

	label10672:

	$D8d609d5bdc92a03 .= ' &nbsp; <button title="View All Servers" onClick="viewSources(\'' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name']) . '\', ' . intval($Fb9da1713bff19ce['id']) . ');" type=\'button\' class=\'tooltip-left btn btn-info btn-xs waves-effect waves-light\'>+ ' . ($D52a67130c4ab288[$Fb9da1713bff19ce['id']] - 1) . '</button>';

	label10692:

	if (!($Bcf70cba56392975[$Fb9da1713bff19ce['server_id']]['last_status'] != 1)) {
		goto label10701;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button title="Server Offline!<br/>Uptime cannot be confirmed." type=\'button\' class=\'tooltip btn btn-danger btn-xs waves-effect waves-light\'><i class=\'mdi mdi-alert\'></i></button>';

	label10701:

	goto label10473;

	label10703:

	$Abcb228699a7f743 = $Fb9da1713bff19ce['id'];
	if (!(!$f1dcaed925076e67['streams_grouped'] && (1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']]))) {
		goto label10719;
	}

	$Abcb228699a7f743 .= '-' . $Fb9da1713bff19ce['server_id'];

	label10719:

	$B9869413eae86beb['data'][] = ['<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Abcb228699a7f743 . '</a>', $B080674c55093935, $B7bbd17ec35a49aa, $D8d609d5bdc92a03, $a93d58fa34cf616f, $Bd92fffa215178e4, $E8e13b4c9d9584b6, $d5faa5f11beba133];
	goto label11094;

	label10737:

	$E8e13b4c9d9584b6 .= '<button title="Restart" type="button" class="btn btn-light waves-effect waves-light btn-xs api-restart tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'restart\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-refresh"></i></button>';

	if (!isset(XUI::$rRequest['single'])) {
		goto label10759;
	}

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label10759:

	goto label11033;

	label10761:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label10776;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label10776:

	$B7bbd17ec35a49aa = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'><strong>' . $Fb9da1713bff19ce['stream_display_name'] . ('</strong><br><span style=\'font-size:11px;\'>' . $Dbcac322b4274e46 . '</span></a>');

	if ($Fb9da1713bff19ce['server_name']) {
		goto label10374;
	}

	goto label10371;

	label10792:

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label10800;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label10872;

	label10800:

	goto label10852;

	label10802:

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label10809;

	label10805:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label10809:

	goto label10385;

	label10811:

	$Bd92fffa215178e4 = $f7d55d79e2700f0d[$a22fa0d1973a0b0e];
	goto label10816;

	label10815:

	$Bd92fffa215178e4 = '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light btn-fixed-xl\'>DOWN</button>';

	label10816:

	goto label10294;

	label10818:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');">Stop</a>' . "\r\n\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'restart\');">Restart</a>' . "\r\n\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'purge\');">Kill Connections</a>';

	label10837:

	if (!isset(XUI::$rRequest['single'])) {
		goto label10850;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');">Delete</a>';

	label10850:

	goto label11009;

	label10852:

	$a93d58fa34cf616f = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ', ' . intval($Fb9da1713bff19ce['server_id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['clients'], 0) . '</button></a>';

	label10872:

	if ($a22fa0d1973a0b0e == 1) {
		goto label10296;
	}

	if ($a22fa0d1973a0b0e == 3) {
		goto label10815;
	}

	goto label10811;

	label10882:

	$Cae0c79563bb38d6 = (floor($Debb6b730aee3ce9['speed'] * 100) / 100) . 'x';

	label10890:

	$d5faa5f11beba133 = '<table class=\'table-data nowrap table-data-90\' align=\'center\'>' . "\r\n" . '                        <tbody>' . "\r\n" . '                            <tr>' . "\r\n" . '                                <td class=\'text-success\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td>' . "\r\n" . '                                <td class=\'text-success\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>' . "\r\n" . '                                <td class=\'text-success\'><i class=\'mdi mdi-play-speed\' data-name=\'mdi-play-speed\'></i></td>' . "\r\n" . '                            </tr>' . "\r\n" . '                            <tr>' . "\r\n" . '                                <td>' . $Fb9da1713bff19ce['bitrate'] . ' Kbps</td>' . "\r\n" . '                                <td>' . $D9d6a5d0b76a9aaf['codecs']['audio']['codec_name'] . '</td>' . "\r\n" . '                                <td>' . $Cae0c79563bb38d6 . '</td>' . "\r\n" . '                            </tr>' . "\r\n" . '                        </tbody>' . "\r\n" . '                    </table>';

	label10901:
	if ((0 < strlen($Fb9da1713bff19ce['stream_icon'])) && XUI::$rSettings['show_images']) {
		goto label10504;
	}

	goto label10501;

	label10915:

	goto label10207;

	label10917:

	if (intval($Fb9da1713bff19ce['stream_status']) == 2) {
		goto label10206;
	}

	$a22fa0d1973a0b0e = 1;
	goto label10204;

	label10928:

	$E8e13b4c9d9584b6 .= '<button title="Stop" type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';
	$b9f049445aa9bd5d = '';

	label10936:

	$E8e13b4c9d9584b6 .= '<button title="Restart" type="button" class="btn btn-light waves-effect waves-light btn-xs api-restart tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'restart\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-refresh"></i></button>' . "\r\n\t\t\t\t\t\t\t" . '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'purge\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-hammer"></i></button>' . "\r\n\t\t\t\t\t\t\t" . '<a href="radio?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'radio\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>' . "\r\n\t\t\t\t\t\t\t" . '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';
	goto label10167;

	label10991:

	$Bd92fffa215178e4 = sprintf('%02dd %02dh %02dm', $Bd92fffa215178e4 / 86400, ($Bd92fffa215178e4 / 3600) % 24, ($Bd92fffa215178e4 / 60) % 60);

	label11003:

	$Bd92fffa215178e4 = '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed-xl\'>' . $Bd92fffa215178e4 . '</button>';

	label11007:

	goto label10558;

	label11009:

	$E8e13b4c9d9584b6 .= '</div></div>';

	label11010:

	$d5faa5f11beba133 = '<table style=\'font-size: 10px;\' class=\'table-data nowrap\' align=\'center\'><tbody><tr><td colspan=\'5\'>No information available</td></tr></tbody></table>';
	$D9d6a5d0b76a9aaf = json_decode($Fb9da1713bff19ce['stream_info'], true);
	goto label10256;

	label11019:

	goto label11029;

	label11021:

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['clients'], 0) . '</button>';

	label11029:

	goto label10872;
	goto label10792;

	label11033:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label11010;

	label11036:

	$E8e13b4c9d9584b6 = '';
	goto label11128;

	label11039:

	if (isset($D9d6a5d0b76a9aaf['codecs']['audio'])) {
		goto label11047;
	}

	$D9d6a5d0b76a9aaf['codecs']['audio'] = ['codec_name' => 'N/A'];

	label11047:

	if (!($Fb9da1713bff19ce['bitrate'] == 0)) {
		goto label10158;
	}

	$Fb9da1713bff19ce['bitrate'] = '?';
	goto label10158;

	label11057:
	if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($Fb9da1713bff19ce['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5)) {
		goto label11092;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Start</a>';
	goto label10837;

	label11092:

	goto label10818;

	label11094:

	goto label11180;

	label11096:

	if ($Fb9da1713bff19ce['server_id']) {
		goto label11102;
	}

	$Fb9da1713bff19ce['server_id'] = 0;

	label11102:

	if (!($f1dcaed925076e67['streams_grouped'] == 1)) {
		goto label10597;
	}

	goto label10595;

	label11110:

	$a22fa0d1973a0b0e = 4;

	label11111:

	goto label11123;

	label11113:
	if ($Fb9da1713bff19ce['pid'] && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label10917;
	}

	goto label10462;

	label11123:

	goto label11126;

	label11125:

	$a22fa0d1973a0b0e = 5;

	label11126:

	goto label11096;

	label11128:

	if (!(0 < strlen($Fb9da1713bff19ce['notes']))) {
		goto label11141;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label11141:

	$E8e13b4c9d9584b6 .= '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';
	if ((isset(XUI::$rRequest['single']) || isset(XUI::$rRequest['simple'])) && e589A4bf54A2DAd1('adv', 'edit_radio')) {
		goto label11057;
	}

	goto label10513;

	label11159:

	$Bd92fffa215178e4 = 0;
	$a22fa0d1973a0b0e = 0;

	if (!(0 < intval($Fb9da1713bff19ce['stream_started']))) {
		goto label11178;
	}

	$Bd92fffa215178e4 = time() - intval($Fb9da1713bff19ce['stream_started']);

	label11178:

	goto label10328;

	label11180:
}

label11182:

goto label23962;

label11183:

goto label11186;

label11184:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`stream_status` = 1)';

label11186:

goto label21156;
goto label21154;

label11188:

if (!isset(XUI::$rRequest['refresh'])) {
	goto label11213;
}

$cf0aab70014807af = ['`streams`.`id` IN (' . implode(',', array_map('intval', explode(',', XUI::$rRequest['refresh']))) . ')'];
$bcfd61adc96d4b72 = 0;
$Cc2b5dfe75dc164b = 1000;

label11213:

goto label12521;

label11214:

exit();

label11215:

goto label19645;

label11216:
if (!(!E589A4bF54a2DAD1('adv', 'import_movies') && !e589a4bf54A2dAD1('adv', 'mass_delete'))) {
	goto label7601;
}

goto label7600;

label11232:

if (!(0 < strlen(XUI::$rRequest['type']))) {
	goto label11247;
}

$cf0aab70014807af[] = '`providers_streams`.`type` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['type'];

label11247:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label17135;
}

goto label17117;

label11252:

if (!(XUI::$rRequest['filter'] == 6)) {
	goto label11260;
}

$cf0aab70014807af[] = '`lines`.`is_stalker` = 1';

label11260:

goto label6747;

label11261:

goto label6745;

label11262:

if (!(0 < strlen(XUI::$rRequest['video']))) {
	goto label15187;
}

if (XUI::$rRequest['video'] == -1) {
	goto label15185;
}

$cf0aab70014807af[] = '`streams_servers`.`video_codec` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['video'];
goto label15184;

label11283:

echo json_encode($B9869413eae86beb);
exit();

label11288:

goto label5363;

label11289:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label11316;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams_series`.`title` LIKE ?)';

label11316:

goto label7652;

label11317:

$E7dbfc96029b3745 = 0;
goto label11327;

label11319:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label11327:

goto label11722;

label11328:

if (E589A4Bf54A2DAd1('adv', 'live_connections')) {
	goto label11335;
}

exit();

label11335:

$D8e7681dfae2905b = [];
goto label1493;

label11337:

require_once XUI_HOME . 'includes/admin.php';
$E59d0debc75e7be8 = ba89228dC958ce05($f7107e3a92443147);
$db0a61ef32b89a27 = aceB5CFE4194F4f0($E59d0debc75e7be8['member_group_id']);
$db0a61ef32b89a27['advanced'] = json_decode($db0a61ef32b89a27['allowed_pages'], true);

if (!(0 < strlen($E59d0debc75e7be8['timezone']))) {
	goto label7463;
}

goto label7459;

label11365:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label11387;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label11387:

goto label21153;
goto label21146;

label11389:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

label11399:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label11594;

	label11403:

	$b41097c951ee83d3 = '<button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed-xs"><i class="text-light fas fa-check-circle"></i></button>';

	label11404:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $c68b76c7e42b19eb, $B7bbd17ec35a49aa, $Dbcac322b4274e46, $D8d609d5bdc92a03, $E537e0b49c6c29c9[$a22fa0d1973a0b0e], $b41097c951ee83d3];

	label11416:

	goto label11710;

	label11418:

	foreach (range(1, $C39bf74bcb6f2a82) as $df6991d59f367c7e) {
		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-outline\'></i>';
	}

	label11427:

	$eca9936f0487fe83 = ($Fb9da1713bff19ce['year'] ? '<strong>' . $Fb9da1713bff19ce['year'] . '</strong> &nbsp;' : '');
	goto label11633;

	label11438:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label11448:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label11463;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label11463:

	goto label11471;

	label11465:

	$a22fa0d1973a0b0e = 4;

	label11466:

	goto label11698;

	label11468:

	$a22fa0d1973a0b0e = 2;
	goto label11698;

	label11471:

	$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);
	$B93a4cfa6336a834 = '';

	if (!$Ccbdf03f8a4df633['rating']) {
		goto label11427;
	}

	$e1928169d299e86c = round($Ccbdf03f8a4df633['rating']) / 2.0;
	$Be927fb456a47264 = floor($e1928169d299e86c);
	goto label11495;

	label11495:

	$ac699a87736bb3c0 = 0 < ($e1928169d299e86c - $Be927fb456a47264);
	$C39bf74bcb6f2a82 = 5 - ($Be927fb456a47264 + ($ac699a87736bb3c0 ? 1 : 0));

	if (!(0 < $Be927fb456a47264)) {
		goto label11621;
	}

	foreach (range(1, $Be927fb456a47264) as $df6991d59f367c7e) {
		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star\'></i>';
	}

	goto label11621;

	label11521:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label11544;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label11448;

	label11544:

	goto label11438;

	label11546:

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label11700;
	}
	if (!is_null($Fb9da1713bff19ce['pid']) && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label11569;
	}

	$a22fa0d1973a0b0e = 0;
	goto label11698;

	label11569:

	goto label11674;

	label11571:

	$c68b76c7e42b19eb = '<a href=\'javascript: void(0);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Ccbdf03f8a4df633['movie_image'] . '\'><img loading=\'lazy\' src=\'resize?maxh=58&maxw=32&url=' . $Ccbdf03f8a4df633['movie_image'] . '\' /></a>';

	label11578:
	if (isset($Ccbdf03f8a4df633['kinopoisk_url']) && (0 < strlen($Ccbdf03f8a4df633['kinopoisk_url']))) {
		goto label11403;
	}

	$b41097c951ee83d3 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light btn-fixed-xs"><i class="text-light fas fa-minus-circle"></i></button>';
	goto label11404;
	goto label11403;

	label11594:

	if (!$De97a60c730465cd) {
		goto label11612;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label11416;

	label11612:

	$a22fa0d1973a0b0e = 0;
	goto label11546;

	label11615:

	$a22fa0d1973a0b0e = 3;
	goto label11619;

	label11618:

	$a22fa0d1973a0b0e = 5;

	label11619:

	goto label11689;

	label11621:

	if (!$ac699a87736bb3c0) {
		goto label11626;
	}

	$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-half\'></i>';

	label11626:

	if (!(0 < $C39bf74bcb6f2a82)) {
		goto label11427;
	}

	goto label11418;

	label11633:

	$B7bbd17ec35a49aa = $Fb9da1713bff19ce['stream_display_name'] . ('<br><span style=\'font-size:11px;\'>' . $eca9936f0487fe83 . $B93a4cfa6336a834 . '</span>');
	if ((0 < strlen($Ccbdf03f8a4df633['movie_image'])) && XUI::$rSettings['show_images']) {
		goto label11655;
	}

	$c68b76c7e42b19eb = '';
	goto label11578;

	label11655:

	goto label11571;

	label11657:

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];

	if (!(1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']])) {
		goto label11672;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>+ ' . ($D52a67130c4ab288[$Fb9da1713bff19ce['id']] - 1) . '</button>';

	label11672:

	goto label11521;

	label11674:

	if ($Fb9da1713bff19ce['to_analyze'] == 1) {
		goto label11468;
	}

	if ($Fb9da1713bff19ce['stream_status'] == 1) {
		goto label11687;
	}

	$a22fa0d1973a0b0e = 1;
	goto label11466;

	label11687:

	goto label11465;

	label11689:

	if ($Fb9da1713bff19ce['server_name']) {
		goto label11696;
	}

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label11672;

	label11696:

	goto label11657;

	label11698:

	goto label11689;

	label11700:

	if (intval($Fb9da1713bff19ce['direct_proxy']) == 1) {
		goto label11618;
	}

	goto label11615;

	label11710:
}

goto label19640;

label11713:

exit();

label11714:

goto label27504;

label11715:

if (e589a4BF54a2dad1('adv', 'manage_mag')) {
	goto label3457;
}

goto label3456;

label11722:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`streams`.`type` = 1';

if (XUI::$rSettings['redis_handler']) {
	goto label11732;
}

$cf0aab70014807af[] = '(SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `lines_live`.`hls_end` = 0) > 0';

label11732:

goto label26809;

label11733:

goto label19701;

label11734:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];
goto label19701;

label11741:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label11747:

if (0 < intval(XUI::$rRequest['server'])) {
	goto label22681;
}

goto label22669;

label11756:

exit();

label11757:

goto label6224;

label11758:
if (!(!$db0a61ef32b89a27['is_admin'] || !e589a4BF54A2dAd1('adv', 'bouquets'))) {
	goto label14933;
}

goto label14932;

label11771:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label11789:

if (0 < count($cf0aab70014807af)) {
	goto label7031;
}

$F5190fed237fabec = '';
goto label7030;

label11797:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label11805:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label5220;
}

goto label5203;

label11818:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label11824:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `watch_logs` LEFT JOIN `servers` ON `servers`.`id` = `watch_logs`.`server_id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label26838;
}

goto label26835;

label11838:

$cf0aab70014807af[] = '(`streams_series`.`id` LIKE ? OR `streams_series`.`title` LIKE ? OR `streams_series`.`release_date` LIKE ?)';

label11840:

if (!(0 < strlen(XUI::$rRequest['category']))) {
	goto label22023;
}

if (XUI::$rRequest['category'] == -1) {
	goto label23899;
}

goto label15538;

label11855:

if ($A7d54b094ae83c95 == 'streams') {
	goto label12826;
}

if ($A7d54b094ae83c95 == 'radios') {
	goto label22200;
}

if ($A7d54b094ae83c95 == 'movies') {
	goto label1311;
}

if ($A7d54b094ae83c95 == 'episode_list') {
	goto label18618;
}

if ($A7d54b094ae83c95 == 'line_activity') {
	goto label7682;
}

goto label15580;

label11871:

if (!(0 < strlen(XUI::$rRequest['range']))) {
	goto label10023;
}

$F56066ad7b074468 = substr(XUI::$rRequest['range'], 0, 10);
$b120584763e3d117 = substr(XUI::$rRequest['range'], strlen(XUI::$rRequest['range']) - 10, 10);

if ($F56066ad7b074468 = strtotime($F56066ad7b074468 . ' 00:00:00')) {
	goto label5543;
}

goto label5542;

label11910:

$cf0aab70014807af[] = '`hls_end` = 0';

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label27117;
}

foreach (range(1, 10) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`lines_live`.`hmac_identifier` LIKE ? OR `lines_live`.`user_agent` LIKE ? OR `lines_live`.`user_ip` LIKE ? OR `lines_live`.`container` LIKE ? OR FROM_UNIXTIME(`lines_live`.`date_start`) LIKE ? OR `lines_live`.`geoip_country_code` LIKE ? OR `lines`.`username` LIKE ? OR `mag_devices`.`mac` LIKE ? OR `enigma2_devices`.`mac` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';
goto label27117;

label11940:

goto label17299;

label11941:

$cf0aab70014807af[] = '`streams`.`tv_archive_server_id` > 0 AND `streams`.`tv_archive_duration` > 0';
goto label17299;

label11944:

$Af1444cd652ebf84 = $ef631b924556ee2e = $cb98d4eed473e4c8 = $E1902340fde7c04b = [];

if (!(0 < count($ec80784a08a705f6))) {
	goto label18635;
}

$b62d6460eb33ea07->query('SELECT `lines`.`id`, `lines`.`is_mag`, `lines`.`is_e2`, `lines`.`is_restreamer`, `lines`.`username`, `mag_devices`.`mag_id`, `enigma2_devices`.`device_id` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` WHERE `lines`.`id` IN (' . implode(',', $ec80784a08a705f6) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f7107e3a92443147 = $Fb9da1713bff19ce['id'];
	unset($Fb9da1713bff19ce['id']);
	$E1902340fde7c04b[$f7107e3a92443147] = $Fb9da1713bff19ce;
}

goto label18635;

label11976:

goto label11986;

label11977:

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label11986:

goto label25980;

label11987:

goto label11990;

label11988:

$cf0aab70014807af[] = '((`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` = 1))';

label11990:

goto label25712;
goto label25710;

label11992:

if (!(0 < count($ec80784a08a705f6))) {
	goto label20585;
}

$b62d6460eb33ea07->query('SELECT `users`.`id`, `users_groups`.`is_reseller`, `users_groups`.`group_name` FROM `users_groups` LEFT JOIN `users` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `users`.`id` IN (' . implode(',', $ec80784a08a705f6) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$E59d0debc75e7be8[$Fb9da1713bff19ce['id']]['is_reseller'] = $Fb9da1713bff19ce['is_reseller'];
	$E59d0debc75e7be8[$Fb9da1713bff19ce['id']]['group_name'] = $Fb9da1713bff19ce['group_name'];
}

goto label22497;

label12025:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label12031:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams_series` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label62;
}

goto label59;

label12045:

exit();

label12046:

goto label6118;

label12047:
if (!(!$db0a61ef32b89a27['is_admin'] || !E589A4BF54a2dAd1('adv', 'panel_logs'))) {
	goto label20898;
}

goto label20897;

label12060:

goto label5189;

label12061:
if (!(!$db0a61ef32b89a27['is_admin'] || !E589A4bF54a2DaD1('adv', 'panel_logs'))) {
	goto label12074;
}

exit();

label12074:

goto label17094;

label12075:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($dec36723d7be7c49))) {
	goto label2187;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`server_stream_id`) AS `count` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

goto label2187;

label12113:

goto label12122;

label12114:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label12122:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label11910;

label12125:

$cf0aab70014807af[] = '(`detect_restream_logs`.`ip` LIKE ? OR `lines`.`username` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';

label12127:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label19349;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;
goto label19349;

label12150:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label12155:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label17886;
}

goto label21852;

label12175:

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';

label12177:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label18572;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label18567;

label12195:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label12207;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label22614;

label12207:

goto label22609;

label12208:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label12213:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `lines_activity` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label24410;
}

goto label24407;

label12227:

goto label12234;

label12228:

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, true, true);

label12234:

goto label20604;

label12235:

if (0 < count($cf0aab70014807af)) {
	goto label12243;
}

$F5190fed237fabec = '';
goto label656;

label12243:

goto label650;

label12244:

$B03cfeca75020c69[] = XUI::$rRequest['category'];
goto label12251;

label12249:

$cf0aab70014807af[] = '(`streams`.`category_id` = \'[]\' OR `streams`.`category_id` IS NULL)';

label12251:

goto label5483;

label12252:

echo json_encode($B9869413eae86beb);
exit();

label12257:

goto label5070;

label12258:

goto label16112;

label12259:

if (XUI::$rRequest['filter'] == 1) {
	goto label19322;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label18851;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label6539;
}

goto label17228;

label12275:

if (e589A4bF54a2DAD1('adv', 'mng_regusers')) {
	goto label12282;
}

exit();

label12282:

$a2a53f18f4f95c8b = ['`users`.`id`', '`users`.`username`', '`users`.`owner_id`', '`users`.`ip`', '`users`.`status`', '`users`.`member_group_id`', '`users`.`credits`', false, false, false, false, '`users`.`last_login`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label7835;
}

goto label7833;

label12298:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label12325;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams`.`notes` LIKE ? OR `streams_servers`.`current_source` LIKE ?)';

label12325:

goto label15551;

label12326:

if ($A7d54b094ae83c95 == 'vod_selection') {
	goto label24770;
}

if ($A7d54b094ae83c95 == 'epg_api') {
	goto label15166;
}

if ($A7d54b094ae83c95 == 'provider_streams') {
	goto label21908;
}

if ($A7d54b094ae83c95 == 'parent_servers') {
	goto label27409;
}

if ($A7d54b094ae83c95 == 'failures_modal') {
	goto label7984;
}

goto label3499;

label12342:

goto label12351;

label12343:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label12351:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label12424;

label12354:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label12362;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label20915;

label12362:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label20915;

label12368:

$D8e7681dfae2905b[$df6991d59f367c7e]['type'] = $Af1444cd652ebf84[$D8e7681dfae2905b[$df6991d59f367c7e]['stream_id']][1] ?: 1;
$D8e7681dfae2905b[$df6991d59f367c7e] = array_merge($D8e7681dfae2905b[$df6991d59f367c7e], $E1902340fde7c04b[$D8e7681dfae2905b[$df6991d59f367c7e]['user_id']] ?: []);
$df6991d59f367c7e++;
goto label3291;
goto label23938;

label12393:

goto label12399;

label12394:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label12399:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);
goto label391;

label12414:

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label12421;
}

$cf0aab70014807af[] = '(SELECT COUNT(*) AS `count` FROM `streams_logs` WHERE `streams_logs`.`action` = \'STREAM_FAILED\' AND `streams_logs`.`date` >= UNIX_TIMESTAMP()-86400 AND `streams_logs`.`stream_id` = `streams`.`id` AND `streams_logs`.`server_id` = `streams_servers`.`server_id`) > 144';
goto label11940;

label12421:

$cf0aab70014807af[] = '(SELECT COUNT(*) AS `count` FROM `streams_logs` WHERE `streams_logs`.`action` = \'STREAM_FAILED\' AND `streams_logs`.`date` >= UNIX_TIMESTAMP()-86400 AND `streams_logs`.`stream_id` = `streams`.`id`) > 144';
goto label11940;

label12424:

$cf0aab70014807af[] = '`streams`.`type` = 1';
$cf0aab70014807af[] = '`streams`.`direct_source` = 0';
$cf0aab70014807af[] = '`streams_servers`.`on_demand` = 1';

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label10011;
}

foreach (range(1, 6) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label10009;

label12456:
if (!(!isset(XUI::$rServers[XUI::$rRequest['proxy_id']]) || (count(XUI::$rServers[XUI::$rRequest['proxy_id']]['parent_id']) == 0))) {
	goto label12480;
}

echo json_encode($B9869413eae86beb);
exit();

label12480:

$a2a53f18f4f95c8b = ['`id`', '`server_name`', '`server_ip`'];
goto label5012;

label12482:

$b62d6460eb33ea07->query('SELECT `user_id`, `mag_id`, `mac` FROM `mag_devices` WHERE `user_id` IN (' . implode(',', $d35d9ca02b9f3063) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$d1f284eb9d636fef[intval($Fb9da1713bff19ce['user_id'])]['device_id'] = $Fb9da1713bff19ce['mag_id'];
	$d1f284eb9d636fef[intval($Fb9da1713bff19ce['user_id'])]['device_name'] = $Fb9da1713bff19ce['mac'];
}

label12513:

if (!(0 < count($a7488241ded4637b))) {
	goto label20073;
}

goto label20042;

label12521:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label16112;
}

if (!$Ab7613704ad1bb6c) {
	goto label12259;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label21805;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label9288;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label22022;
}

goto label22013;

label12549:

echo json_encode($B9869413eae86beb);
exit();

label12554:

goto label23780;

label12555:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label5183;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_display_name`, `streams`.`category_id` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label5183;
}

goto label5079;

label12595:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams_errors` LEFT JOIN `streams` ON `streams`.`id` = `streams_errors`.`stream_id` LEFT JOIN `servers` ON `servers`.`id` = `streams_errors`.`server_id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label6348;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label6353;
goto label6348;

label12612:

goto label11288;

label12613:
if (!(!$db0a61ef32b89a27['is_admin'] || (!E589a4bF54A2DAD1('adv', 'movies') && !e589a4BF54A2DAd1('adv', 'episodes') && !e589a4BF54a2dad1('adv', 'series')))) {
	goto label3324;
}

exit();
goto label3324;

label12641:

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$d1f284eb9d636fef = $d35d9ca02b9f3063 = $a7488241ded4637b = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	if (!$Fb9da1713bff19ce['is_mag']) {
		goto label12660;
	}

	$d35d9ca02b9f3063[] = intval($Fb9da1713bff19ce['user_id']);

	label12660:

	if (!$Fb9da1713bff19ce['is_e2']) {
		goto label12671;
	}

	$a7488241ded4637b[] = intval($Fb9da1713bff19ce['user_id']);

	label12671:
	if (!($Fb9da1713bff19ce['is_mag'] || $Fb9da1713bff19ce['is_e2'])) {
		goto label12685;
	}

	$d1f284eb9d636fef[intval($Fb9da1713bff19ce['user_id'])] = ['device_id' => NULL, 'device_name' => NULL];

	label12685:
}

if (!(0 < count($d35d9ca02b9f3063))) {
	goto label12513;
}

goto label12482;

label12695:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label23246;
}

$cf0aab70014807af[] = '(`users_credits_logs`.`target_id` = ? OR `users_credits_logs`.`admin_id` = ?)';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];
goto label23242;

label12711:

$cf0aab70014807af[] = '(`streams`.`type` = 2 AND JSON_CONTAINS(`streams`.`category_id`, ?, \'$\'))';
$B03cfeca75020c69[] = $E3665d09b9cea208[1];

label12716:

goto label11289;

label12717:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams_series`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category_id'];

label12723:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label21296;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label21294;

label12749:

$B9869413eae86beb['recordsTotal'] = 0;
goto label12757;

label12752:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label12757:

goto label5818;

label12758:

$De97a60c730465cd = true;
require_once XUI_HOME . 'includes/admin.php';
$E59d0debc75e7be8 = Ba89228DC958cE05(XUI::$rRequest['api_user_id']);
$db0a61ef32b89a27 = ACEb5CFE4194F4f0($E59d0debc75e7be8['member_group_id']);
goto label25843;

label12774:
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label12790;
}

$E7dbfc96029b3745 = 0;
goto label15732;

label12790:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);
goto label15732;

label12799:

$a2a53f18f4f95c8b = ['`date`', '`action`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label12816;
}

$E7dbfc96029b3745 = 0;
goto label9885;

label12816:

goto label9877;

label12817:

goto label2437;

label12818:

$cf0aab70014807af[] = 'MD5(`streams`.`stream_source`) = ?';
$B03cfeca75020c69[] = XUI::$rRequest['source_id'];
$e4829bf95c7424f6 = 'ORDER BY `streams_servers`.`server_stream_id` ASC';
goto label2437;

label12826:
if (!(!e589a4Bf54A2Dad1('adv', 'streams') && !e589A4Bf54a2DaD1('adv', 'mass_edit_streams'))) {
	goto label12842;
}

exit();

label12842:

$F771d40e8cf51e59 = f769e3f0c739d1A6('live');
goto label19646;

label12847:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM (SELECT `id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL ' . $F5190fed237fabec . ' GROUP BY `streams`.`id`) t1;';

label12851:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label12752;
}

goto label12749;

label12861:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label13786;

	label12865:

	goto label13153;

	label12867:

	if (!(1000 <= $c7b8b5438b915f8f)) {
		goto label12877;
	}

	$c7b8b5438b915f8f = intval($c7b8b5438b915f8f / 1000);

	label12877:

	goto label13151;

	label12879:

	goto label13339;

	label12881:

	$d39b06d67f28803d = json_decode($Fb9da1713bff19ce['cc_info'], true);
	$c0649c73d5cc8ac4 = ($Fb9da1713bff19ce['parent_id'] ? 'Channel is looping from another server, real position cannot be determined.' : 'No information available.');
	if (($a22fa0d1973a0b0e == 1) && (0 < count($d39b06d67f28803d)) && !$Fb9da1713bff19ce['parent_id']) {
		goto label13693;
	}

	goto label13684;

	label12909:

	if (86400 <= $Bd92fffa215178e4) {
		goto label12926;
	}

	$Bd92fffa215178e4 = sprintf('%02dh %02dm %02ds', $Bd92fffa215178e4 / 3600, ($Bd92fffa215178e4 / 60) % 60, $Bd92fffa215178e4 % 60);
	goto label14444;

	label12926:

	$Bd92fffa215178e4 = sprintf('%02dd %02dh %02dm', $Bd92fffa215178e4 / 86400, ($Bd92fffa215178e4 / 3600) % 24, ($Bd92fffa215178e4 / 60) % 60);
	goto label14444;

	label12940:

	goto label12949;

	label12942:

	$a2ebb817d88c810b = '<button onClick="viewEPG(' . intval($Fb9da1713bff19ce['id']) . ');" type=\'button\' title=\'View EPG\' class=\'tooltip btn btn-success btn-xs waves-effect waves-light\'><i class=\'text-white fas fa-square\'></i></button>';

	label12949:
	if ((0 < strlen($Fb9da1713bff19ce['stream_icon'])) && XUI::$rSettings['show_images']) {
		goto label13998;
	}

	goto label13995;

	label12963:

	$b0fb924d1ef9fa85 = count(array_diff($Ec0879f16d0cdddb, json_decode($Fb9da1713bff19ce['cchannel_rsources'], true)));
	$C349f8a7743e51c0 = intval(((count($Ec0879f16d0cdddb) - $b0fb924d1ef9fa85) / count($Ec0879f16d0cdddb)) * 100);
	$Bd92fffa215178e4 = '<button type=\'button\' class=\'btn btn-primary btn-xs waves-effect waves-light btn-fixed-xl\'>' . $C349f8a7743e51c0 . '% DONE</button>';

	label12993:

	goto label14045;
	goto label14041;

	label12997:

	if (XUI::$rSettings['group_buttons']) {
		goto label14584;
	}

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	if ((isset(XUI::$rRequest['single']) || isset(XUI::$rRequest['simple'])) && E589a4bF54A2dad1('adv', 'edit_stream')) {
		goto label14058;
	}

	if (0 < strlen($Fb9da1713bff19ce['notes'])) {
		goto label13625;
	}

	$E8e13b4c9d9584b6 .= '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label13623;

	label13029:

	$c7b8b5438b915f8f = intval($Debb6b730aee3ce9['fps']);

	label13034:

	if ($c7b8b5438b915f8f) {
		goto label12867;
	}

	$c7b8b5438b915f8f = '--';
	goto label12865;

	label13040:

	goto label13653;

	label13042:

	if (e589a4bf54A2DaD1('adv', 'servers')) {
		goto label14542;
	}

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];
	goto label14549;
	goto label14542;

	label13055:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="modalFingerprint(' . $Fb9da1713bff19ce['id'] . ', \'stream\');">Fingerprint</a>';

	label13059:

	if (!E589a4Bf54A2DAd1('adv', 'edit_stream')) {
		goto label13183;
	}

	if ($Fb9da1713bff19ce['type'] == 3) {
		goto label13228;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="stream?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'stream\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '>Edit</a>';
	goto label13226;

	label13105:

	goto label14442;

	label13107:

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label14230;
	}

	if ($Fb9da1713bff19ce['monitor_pid']) {
		goto label13430;
	}

	if (intval($Fb9da1713bff19ce['on_demand']) == 1) {
		goto label13783;
	}

	goto label13780;

	label13129:

	if (isset($Debb6b730aee3ce9['fps'])) {
		goto label13029;
	}

	if (!isset($D9d6a5d0b76a9aaf['codecs']['video']['r_frame_rate'])) {
		goto label13147;
	}

	$c7b8b5438b915f8f = intval($D9d6a5d0b76a9aaf['codecs']['video']['r_frame_rate']);

	label13147:

	goto label13034;
	goto label13029;

	label13151:

	$c7b8b5438b915f8f = $c7b8b5438b915f8f . ' FPS';

	label13153:

	$d5faa5f11beba133 = '<table class=\'table-data nowrap\' align=\'center\'><tbody><tr><td class=\'double\'>' . number_format($Fb9da1713bff19ce['bitrate'], 0) . ' Kbps</td><td class=\'text-success\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td class=\'text-success\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>';

	if ($Ab7613704ad1bb6c) {
		goto label14145;
	}

	$d5faa5f11beba133 .= '<td class=\'text-success\'><i class=\'mdi mdi-play-speed\' data-name=\'mdi-play-speed\'></i></td>';
	goto label14145;

	label13167:

	if (file_exists(EPG_PATH . 'stream_' . $Fb9da1713bff19ce['id'])) {
		goto label12942;
	}

	if ($Fb9da1713bff19ce['channel_id']) {
		goto label13223;
	}

	goto label13220;

	label13183:

	goto label13466;

	label13185:
	if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($Fb9da1713bff19ce['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5)) {
		goto label13550;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Start</a>';
	goto label13548;

	label13220:

	$a2ebb817d88c810b = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'><i class=\'text-white fas fa-square\'></i></button>';
	goto label13224;

	label13223:

	$a2ebb817d88c810b = '<button type=\'button\' class=\'btn btn-warning btn-xs waves-effect waves-light\'><i class=\'text-white fas fa-square\'></i></button>';

	label13224:

	goto label12940;

	label13226:

	goto label13259;

	label13228:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="created_channel?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'created_channel\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '>Edit</a>';

	label13259:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');">Delete</a>';
	goto label13183;

	label13268:

	if (E589a4BF54a2DaD1('adv', 'live_connections')) {
		goto label13587;
	}

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label13577;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label13585;
	goto label13577;

	label13285:

	$E8e13b4c9d9584b6 = '';

	if (!(0 < strlen($Fb9da1713bff19ce['notes']))) {
		goto label13299;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label13299:

	$E8e13b4c9d9584b6 .= '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';
	goto label14482;

	label13302:

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label13310;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label13469;

	label13310:

	$a93d58fa34cf616f = '<a href=\'javascript: void(0);\' onClick=\'viewLiveConnections(' . intval($Fb9da1713bff19ce['id']) . ', ' . intval($Fb9da1713bff19ce['server_id']) . ');\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['clients'], 0) . '</button></a>';
	goto label13469;

	label13332:

	$Bd92fffa215178e4 = '<button type=\'button\' title=\'' . htmlspecialchars($c0649c73d5cc8ac4) . '\' class=\'btn tooltip btn-success btn-xs waves-effect waves-light btn-fixed-xs\'><i class=\'text-light fas fa-check-circle\'></i></button>' . $Bd92fffa215178e4;

	label13339:

	goto label12997;

	label13341:

	$E8e13b4c9d9584b6 .= '<button title="Stop" type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';
	$b9f049445aa9bd5d = '';

	label13349:

	$E8e13b4c9d9584b6 .= '<button title="Restart" type="button" class="btn btn-light waves-effect waves-light btn-xs api-restart tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'restart\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-refresh"></i></button>' . "\r\n\t\t\t\t\t\t\t" . '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'purge\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-hammer"></i></button>';

	label13366:

	goto label13368;

	label13368:
	if (!(E589a4bF54A2Dad1('adv', 'fingerprint') && !$Ab7613704ad1bb6c)) {
		goto label13608;
	}

	if (0 < $Fb9da1713bff19ce['clients']) {
		goto label13387;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-fingerprint"></i></button>';
	goto label13608;

	label13387:

	goto label13604;

	label13389:

	$B9869413eae86beb['data'][] = ['<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Abcb228699a7f743 . '</a>', $B080674c55093935, $B7bbd17ec35a49aa, $D8d609d5bdc92a03, $a93d58fa34cf616f, $Bd92fffa215178e4, $E8e13b4c9d9584b6, $eb0ed57b1401ceea, $a2ebb817d88c810b, $d5faa5f11beba133];
	goto label13426;

	label13409:

	$B9869413eae86beb['data'][] = ['<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Abcb228699a7f743 . '</a>', $B080674c55093935, $B7bbd17ec35a49aa, $D8d609d5bdc92a03, $a93d58fa34cf616f, $Bd92fffa215178e4, $E8e13b4c9d9584b6, $eb0ed57b1401ceea, $d5faa5f11beba133];

	label13426:

	goto label14086;

	label13428:

	goto label13640;

	label13430:
	if ($Fb9da1713bff19ce['pid'] && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label14113;
	}

	if ($Fb9da1713bff19ce['stream_status'] == 0) {
		goto label14360;
	}

	$a22fa0d1973a0b0e = 3;
	goto label14358;

	label13446:

	if (!$Ab7613704ad1bb6c) {
		goto label13107;
	}

	if ($Fb9da1713bff19ce['monitor_pid']) {
		goto label13457;
	}

	$a22fa0d1973a0b0e = 0;
	goto label14013;

	label13457:

	goto label14274;

	label13459:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');">Delete</a>';

	label13466:

	$E8e13b4c9d9584b6 .= '</div></div>';

	label13467:

	goto label14088;

	label13469:
	if (XUI::$rSettings['hide_failures'] && !$Ab7613704ad1bb6c) {
		goto label14347;
	}

	$Cee783c1eb00ca39 = 'btn-fixed';
	goto label14348;
	goto label14347;

	label13482:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label13497;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label13497:
	if (!((0 < $Fb9da1713bff19ce['tv_archive_duration']) && (0 < $Fb9da1713bff19ce['tv_archive_server_id']))) {
		goto label13950;
	}

	$Fb9da1713bff19ce['stream_display_name'] .= ' &nbsp;<a href=\'archive?id=' . $Fb9da1713bff19ce['id'] . '\'><i class=\'text-danger mdi mdi-record\'></i></a>';
	goto label13950;

	label13514:

	if (0 < intval($Fb9da1713bff19ce['parent_id'])) {
		goto label13536;
	}

	$b45008dac88f7d0a = '<br/><span style=\'font-size:11px;\'>' . strtolower(parse_url($Fb9da1713bff19ce['current_source'])['host']) . '</span>';
	goto label14311;

	label13536:

	$b45008dac88f7d0a = '<br/><span style=\'font-size:11px;\'>loop: ' . strtolower(XUI::$rServers[$Fb9da1713bff19ce['parent_id']]['server_name']) . '</span>';
	goto label14311;

	label13548:

	goto label13569;

	label13550:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');">Stop</a>' . "\r\n\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'restart\');">Restart</a>' . "\r\n\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'purge\');">Kill Connections</a>';

	label13569:

	if (!isset(XUI::$rRequest['single'])) {
		goto label13466;
	}

	goto label13459;

	label13577:

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['clients'], 0) . '</button>';

	label13585:

	goto label13469;

	label13587:

	goto label13302;

	label13589:

	if (!($Fb9da1713bff19ce['bitrate'] == 0)) {
		goto label13597;
	}

	$Fb9da1713bff19ce['bitrate'] = '?';

	label13597:

	if (isset($Debb6b730aee3ce9['speed'])) {
		goto label14471;
	}

	$Cae0c79563bb38d6 = '1x';
	goto label14469;

	label13604:

	$E8e13b4c9d9584b6 .= '<button title="Fingerprint" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="modalFingerprint(' . $Fb9da1713bff19ce['id'] . ', \'stream\');"><i class="mdi mdi-fingerprint"></i></button>';

	label13608:

	if (!E589A4bf54a2DAd1('adv', 'edit_stream')) {
		goto label14056;
	}

	if ($Fb9da1713bff19ce['type'] == 3) {
		goto label13917;
	}

	goto label13884;

	label13623:

	goto label13629;

	label13625:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $Fb9da1713bff19ce['notes'] . '"><i class="mdi mdi-note"></i></button>';

	label13629:

	if (!E589a4bF54a2dAd1('adv', 'edit_stream')) {
		goto label13366;
	}

	goto label14768;

	label13639:

	$a22fa0d1973a0b0e = 2;

	label13640:

	goto label14442;
	goto label14230;

	label13644:

	if (!($Bcf70cba56392975[$Fb9da1713bff19ce['server_id']]['last_status'] != 1)) {
		goto label13653;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button title="Server Offline!<br/>Uptime cannot be confirmed." type=\'button\' class=\'tooltip btn btn-danger btn-xs waves-effect waves-light\'><i class=\'mdi mdi-alert\'></i></button>';

	label13653:

	goto label13514;

	label13655:

	$a22fa0d1973a0b0e = 2;

	label13656:

	goto label14013;

	label13658:

	if (intval($Fb9da1713bff19ce['stream_status']) == 2) {
		goto label14466;
	}

	goto label14463;

	label13668:

	if ($Fb9da1713bff19ce['server_id']) {
		goto label13674;
	}

	$Fb9da1713bff19ce['server_id'] = 0;

	label13674:

	if (!($f1dcaed925076e67['streams_grouped'] == 1)) {
		goto label13268;
	}

	$Fb9da1713bff19ce['server_id'] = -1;
	goto label13268;

	label13684:

	$Bd92fffa215178e4 = '<button type=\'button\' title=\'' . htmlspecialchars($c0649c73d5cc8ac4) . '\' class=\'btn tooltip btn-secondary btn-xs waves-effect waves-light btn-fixed-xs\'><i class=\'text-light fas fa-minus-circle\'></i></button>' . $Bd92fffa215178e4;
	goto label13339;

	label13693:

	$Ec0879f16d0cdddb = json_decode($Fb9da1713bff19ce['stream_source'], true);

	foreach ($d39b06d67f28803d as $Cd3fb7f84d1dfaae) {
		if (!(($Cd3fb7f84d1dfaae['start'] <= $d03052828cab569a) && ($d03052828cab569a < $Cd3fb7f84d1dfaae['finish']))) {
			goto label13762;
		}

		$c0649c73d5cc8ac4 = pathinfo($Ec0879f16d0cdddb[$Cd3fb7f84d1dfaae['position']])['filename'] . '<br/><br/>Track # ' . ($Cd3fb7f84d1dfaae['position'] + 1) . ' of ' . count($Ec0879f16d0cdddb) . '<br/>';

		if ($Cd3fb7f84d1dfaae['position'] < (count($Ec0879f16d0cdddb) - 1)) {
			goto label13752;
		}

		$c0649c73d5cc8ac4 .= 'Looping in ' . number_format(($Cd3fb7f84d1dfaae['finish'] - $d03052828cab569a) / 60, 0) . ' minutes.';
		goto label13762;

		label13752:

		$c0649c73d5cc8ac4 .= 'Next track in ' . number_format(($Cd3fb7f84d1dfaae['finish'] - $d03052828cab569a) / 60, 0) . ' minutes.';

		label13762:
	}

	goto label13332;

	label13766:
	if ($Fb9da1713bff19ce['pid'] && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label13777;
	}

	$a22fa0d1973a0b0e = 7;
	goto label14442;

	label13777:

	$a22fa0d1973a0b0e = 1;
	goto label14442;

	label13780:

	$a22fa0d1973a0b0e = 0;
	goto label13784;

	label13783:

	$a22fa0d1973a0b0e = 4;

	label13784:

	goto label13428;

	label13786:

	if (!XUI::$rSettings['redis_handler']) {
		goto label14592;
	}

	if ($f1dcaed925076e67['streams_grouped'] == 1) {
		goto label13810;
	}

	$Fb9da1713bff19ce['clients'] = count($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']][$Fb9da1713bff19ce['server_id']]) ?: 0;
	goto label14592;

	label13810:

	goto label14586;

	label13812:

	goto label13837;

	label13814:

	$Bd92fffa215178e4 = '<button onClick=\'showFailures(' . intval($Fb9da1713bff19ce['id']) . ', ' . (!$f1dcaed925076e67['streams_grouped'] ? intval($Fb9da1713bff19ce['server_id']) : '0') . ')\' type=\'button\' title=\'' . $b4ed9049346b1781[0] . ' restarts\' class=\'btn tooltip-left btn-success btn-xs waves-effect waves-light btn-fixed-xs\'><i class=\'text-light fas fa-check-circle\'></i></button>' . $Bd92fffa215178e4;

	label13837:

	goto label12879;

	label13839:
	if (((intval($a22fa0d1973a0b0e) == 1) || ($a22fa0d1973a0b0e == 4)) && !$Fb9da1713bff19ce['direct_proxy']) {
		goto label13856;
	}

	$eb0ed57b1401ceea = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-play"></i></button>';
	goto label13167;

	label13856:

	goto label14197;

	label13858:

	$b4ed9049346b1781 = [0, 0];

	label13859:

	if (XUI::$rSettings['hide_failures']) {
		goto label13837;
	}
	if (!isset($b4ed9049346b1781) || ($b4ed9049346b1781[0] <= 2)) {
		goto label13814;
	}
	if (($b4ed9049346b1781[0] <= 4) || (21600 < $b4ed9049346b1781[1])) {
		goto label14727;
	}

	goto label14599;

	label13884:

	$E8e13b4c9d9584b6 .= '<a href="stream?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'stream\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>';
	goto label13948;

	label13917:

	$E8e13b4c9d9584b6 .= '<a href="created_channel?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'created_channel\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>';

	label13948:

	goto label14049;

	label13950:

	if (!(0 < count(json_decode($Fb9da1713bff19ce['adaptive_link'], true)))) {
		goto label13968;
	}

	$Fb9da1713bff19ce['stream_display_name'] .= ' &nbsp;<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'><i class=\'text-info mdi mdi-wifi-strength-3\'></i></a>';

	label13968:

	if (!$Fb9da1713bff19ce['title_sync']) {
		goto label14294;
	}

	goto label14292;

	label13975:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label13993;

	label13983:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label13993:

	goto label13482;

	label13995:

	$B080674c55093935 = '';
	goto label14011;

	label13998:

	$B080674c55093935 = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . urlencode($Fb9da1713bff19ce['stream_icon']) . '\'><img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url=' . urlencode($Fb9da1713bff19ce['stream_icon']) . '\' /></a>';

	label14011:

	goto label14253;

	label14013:
	if (!((count(json_decode($Fb9da1713bff19ce['cchannel_rsources'], true)) != count(json_decode($Fb9da1713bff19ce['stream_source'], true))) && !$Fb9da1713bff19ce['parent_id'])) {
		goto label14039;
	}

	$a22fa0d1973a0b0e = 6;

	label14039:

	goto label13105;

	label14041:

	$Bd92fffa215178e4 = '<button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light ' . $Cee783c1eb00ca39 . '\'>DOWN</button>';

	label14045:

	goto label14450;

	label14047:

	goto label12909;

	label14049:

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label14056:

	goto label14581;

	label14058:
	if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($Fb9da1713bff19ce['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5)) {
		goto label14136;
	}

	goto label14126;

	label14086:

	goto label14806;

	label14088:

	$d5faa5f11beba133 = '<table style=\'font-size: 10px;\' class=\'table-data nowrap\' align=\'center\'><tbody><tr><td colspan=\'5\'>No information available</td></tr></tbody></table>';
	$D9d6a5d0b76a9aaf = json_decode($Fb9da1713bff19ce['stream_info'], true);
	$Debb6b730aee3ce9 = json_decode($Fb9da1713bff19ce['progress_info'], true);

	if (!($a22fa0d1973a0b0e == 1)) {
		goto label14335;
	}

	if (isset($D9d6a5d0b76a9aaf['codecs']['video'])) {
		goto label14401;
	}

	goto label14398;

	label14113:

	if (intval($Fb9da1713bff19ce['stream_status']) == 2) {
		goto label14124;
	}

	$a22fa0d1973a0b0e = 1;
	goto label13640;

	label14124:

	goto label13639;

	label14126:

	$E8e13b4c9d9584b6 .= '<button title="Start" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-play"></i></button>';
	$b9f049445aa9bd5d = ' disabled';
	goto label14366;

	label14136:

	$E8e13b4c9d9584b6 .= '<button title="Stop" type="button" class="btn btn-light waves-effect waves-light btn-xs api-stop tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');"><i class="mdi mdi-stop"></i></button>';
	goto label14365;

	label14145:

	$d5faa5f11beba133 .= '<td class=\'text-success\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td></tr><tr><td class=\'double\'>' . $D9d6a5d0b76a9aaf['codecs']['video']['width'] . ' x ' . $D9d6a5d0b76a9aaf['codecs']['video']['height'] . '</td><td>' . $D9d6a5d0b76a9aaf['codecs']['video']['codec_name'] . '</td><td>' . $D9d6a5d0b76a9aaf['codecs']['audio']['codec_name'] . '</td>';

	if ($Ab7613704ad1bb6c) {
		goto label14172;
	}

	$d5faa5f11beba133 .= '<td>' . $Cae0c79563bb38d6 . '</td>';

	label14172:

	goto label14332;

	label14174:

	$a22fa0d1973a0b0e = 0;

	if ($Fb9da1713bff19ce['server_id']) {
		goto label14195;
	}

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label14192;
	}

	$a22fa0d1973a0b0e = -1;
	goto label14193;
	goto label14192;

	label14192:

	$a22fa0d1973a0b0e = 5;

	label14193:

	goto label14442;

	label14195:

	goto label13446;

	label14197:
	if (empty($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) || (strtoupper($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) == 'H264') || (strtoupper($D9d6a5d0b76a9aaf['codecs']['video']['codec_name']) == 'N/A')) {
		goto label14224;
	}

	$eb0ed57b1401ceea = '<button type="button" class="btn btn-dark waves-effect waves-light btn-xs tooltip" title="Incompatible Video Codec"><i class="mdi mdi-play"></i></button>';
	goto label13167;

	label14224:

	$eb0ed57b1401ceea = '<button title="Play" type="button" class="btn btn-info waves-effect waves-light btn-xs tooltip" onClick="player(' . $Fb9da1713bff19ce['id'] . ');"><i class="mdi mdi-play"></i></button>';
	goto label13167;

	label14230:

	if (intval($Fb9da1713bff19ce['direct_proxy']) == 1) {
		goto label14241;
	}

	$a22fa0d1973a0b0e = 5;
	goto label14442;

	label14241:

	goto label13766;

	label14243:

	goto label14248;

	label14245:

	$b4ed9049346b1781 = $e1751a10c8f69e7b[$Fb9da1713bff19ce['id']];

	label14248:

	if ($b4ed9049346b1781) {
		goto label13859;
	}

	goto label13858;

	label14253:

	$Abcb228699a7f743 = $Fb9da1713bff19ce['id'];
	if (!(!$f1dcaed925076e67['streams_grouped'] && (1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']]))) {
		goto label14269;
	}

	$Abcb228699a7f743 .= '-' . $Fb9da1713bff19ce['server_id'];

	label14269:

	if ($Ab7613704ad1bb6c) {
		goto label13409;
	}

	goto label13389;

	label14274:
	if ($Fb9da1713bff19ce['pid'] && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label13658;
	}

	if ($Fb9da1713bff19ce['stream_status'] == 0) {
		goto label14290;
	}

	$a22fa0d1973a0b0e = 3;
	goto label13656;

	label14290:

	goto label13655;

	label14292:

	$Fb9da1713bff19ce['stream_display_name'] .= ' &nbsp;<i class=\'text-info mdi mdi-sync tooltip\' title=\'Title Sync\'></i>';

	label14294:

	$B7bbd17ec35a49aa = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'><strong>' . $Fb9da1713bff19ce['stream_display_name'] . ('</strong><br><span style=\'font-size:11px;\'>' . $Dbcac322b4274e46 . '</span></a>');

	if ($Fb9da1713bff19ce['server_name']) {
		goto label13042;
	}

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label13040;

	label14311:

	$D8d609d5bdc92a03 .= $b45008dac88f7d0a;

	if (!(0 < intval($Fb9da1713bff19ce['stream_started']))) {
		goto label14330;
	}

	$d03052828cab569a = $Bd92fffa215178e4 = time() - intval($Fb9da1713bff19ce['stream_started']);

	label14330:

	goto label14174;

	label14332:

	$d5faa5f11beba133 .= '<td>' . $c7b8b5438b915f8f . '</td></tr></tbody></table>';

	label14335:

	if (e589A4Bf54a2DAD1('adv', 'player')) {
		goto label13839;
	}

	$eb0ed57b1401ceea = '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-play"></i></button>';
	goto label13167;
	goto label13839;

	label14347:

	$Cee783c1eb00ca39 = 'btn-fixed-xl';

	label14348:

	if ($a22fa0d1973a0b0e == 1) {
		goto label14047;
	}

	if ($a22fa0d1973a0b0e == 3) {
		goto label14041;
	}

	goto label14752;

	label14358:

	goto label14361;

	label14360:

	$a22fa0d1973a0b0e = 2;

	label14361:

	goto label13640;
	goto label14113;

	label14365:

	$b9f049445aa9bd5d = '';

	label14366:

	$E8e13b4c9d9584b6 .= '<button title="Restart" type="button" class="btn btn-light waves-effect waves-light btn-xs api-restart tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'restart\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-refresh"></i></button>' . "\r\n\t\t\t\t\t\t" . '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs api-restart tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'purge\');"' . $b9f049445aa9bd5d . '><i class="mdi mdi-hammer"></i></button>';

	if (!isset(XUI::$rRequest['single'])) {
		goto label14581;
	}

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';
	goto label14581;

	label14398:

	$D9d6a5d0b76a9aaf['codecs']['video'] = ['width' => '?', 'height' => '?', 'codec_name' => 'N/A', 'r_frame_rate' => '--'];

	label14401:

	if (isset($D9d6a5d0b76a9aaf['codecs']['audio'])) {
		goto label14409;
	}

	$D9d6a5d0b76a9aaf['codecs']['audio'] = ['codec_name' => 'N/A'];

	label14409:

	goto label13589;

	label14411:
	if (!(XUI::$rSettings['hide_failures'] && (stripos($Bd92fffa215178e4, 'btn-fixed-xl') === false))) {
		goto label14430;
	}

	$Bd92fffa215178e4 = str_replace('btn-fixed', 'btn-fixed-xl', $Bd92fffa215178e4);

	label14430:

	if ($f1dcaed925076e67['streams_grouped'] == 1) {
		goto label14245;
	}

	$b4ed9049346b1781 = $a393a187b7247477[$Fb9da1713bff19ce['id']][$Fb9da1713bff19ce['server_id']];
	goto label14243;

	label14442:

	goto label13668;

	label14444:

	$Bd92fffa215178e4 = '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light ' . $Cee783c1eb00ca39 . '\'>' . $Bd92fffa215178e4 . '</button>';

	label14450:

	if (!in_array($a22fa0d1973a0b0e, [1, 2, 3])) {
		goto label13339;
	}

	if ($Ab7613704ad1bb6c) {
		goto label12881;
	}

	goto label14411;

	label14463:

	$a22fa0d1973a0b0e = 1;
	goto label14467;

	label14466:

	$a22fa0d1973a0b0e = 2;

	label14467:

	goto label14013;

	label14469:

	goto label14479;

	label14471:

	$Cae0c79563bb38d6 = (floor($Debb6b730aee3ce9['speed'] * 100) / 100) . 'x';

	label14479:

	$c7b8b5438b915f8f = NULL;
	goto label13129;

	label14482:
	if ((isset(XUI::$rRequest['single']) || isset(XUI::$rRequest['simple'])) && e589a4Bf54a2DaD1('adv', 'edit_stream')) {
		goto label13185;
	}

	if (!e589A4Bf54a2daD1('adv', 'edit_stream')) {
		goto label14677;
	}
	if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($Fb9da1713bff19ce['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5)) {
		goto label14658;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');">Start</a>';
	goto label14677;
	goto label14658;

	label14542:

	$D8d609d5bdc92a03 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';

	label14549:
	if (!($f1dcaed925076e67['streams_grouped'] && (1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']]))) {
		goto label13644;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button title="View All Servers" onClick="viewSources(\'' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['stream_display_name']) . '\', ' . intval($Fb9da1713bff19ce['id']) . ');" type=\'button\' class=\'tooltip-left btn btn-info btn-xs waves-effect waves-light\'>+ ' . ($D52a67130c4ab288[$Fb9da1713bff19ce['id']] - 1) . '</button>';
	goto label13644;

	label14581:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label13467;

	label14584:

	goto label13285;

	label14586:

	$Fb9da1713bff19ce['clients'] = $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] ?: 0;

	label14592:

	if (!$De97a60c730465cd) {
		goto label14708;
	}

	unset($Fb9da1713bff19ce['stream_source']);
	goto label14694;

	label14599:
	if (($b4ed9049346b1781[0] <= 144) || (600 < $b4ed9049346b1781[1])) {
		goto label14633;
	}

	$Bd92fffa215178e4 = '<button onClick=\'showFailures(' . intval($Fb9da1713bff19ce['id']) . ', ' . (!$f1dcaed925076e67['streams_grouped'] ? intval($Fb9da1713bff19ce['server_id']) : '0') . ')\' type=\'button\' title=\'' . $b4ed9049346b1781[0] . ' restarts\' class=\'btn tooltip-left btn-danger btn-xs waves-effect waves-light btn-fixed-xs\'><i class=\'text-light fas fa-times-circle\'></i></button>' . $Bd92fffa215178e4;
	goto label14725;

	label14633:

	$Bd92fffa215178e4 = '<button onClick=\'showFailures(' . intval($Fb9da1713bff19ce['id']) . ', ' . (!$f1dcaed925076e67['streams_grouped'] ? intval($Fb9da1713bff19ce['server_id']) : '0') . ')\' type=\'button\' title=\'' . $b4ed9049346b1781[0] . ' restarts\' class=\'btn tooltip-left btn-warning btn-xs waves-effect waves-light btn-fixed-xs\'><i class=\'text-light fas fa-exclamation-circle\'></i></button>' . $Bd92fffa215178e4;
	goto label14725;

	label14658:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'stop\');">Stop</a>' . "\r\n\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'restart\');">Restart</a>' . "\r\n\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'purge\');">Kill Connections</a>';

	label14677:
	if (!(E589A4BF54a2dad1('adv', 'fingerprint') && !$Ab7613704ad1bb6c && (0 < $Fb9da1713bff19ce['clients']))) {
		goto label13059;
	}

	goto label13055;

	label14694:

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label14086;

	label14708:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label13983;
	}

	goto label13975;

	label14725:

	goto label14750;

	label14727:

	$Bd92fffa215178e4 = '<button onClick=\'showFailures(' . intval($Fb9da1713bff19ce['id']) . ', ' . (!$f1dcaed925076e67['streams_grouped'] ? intval($Fb9da1713bff19ce['server_id']) : '0') . ')\' type=\'button\' title=\'' . $b4ed9049346b1781[0] . ' restarts\' class=\'btn tooltip-left btn-info btn-xs waves-effect waves-light btn-fixed-xs\'><i class=\'text-light fas fa-minus-circle\'></i></button>' . $Bd92fffa215178e4;

	label14750:

	goto label13812;

	label14752:

	if ($a22fa0d1973a0b0e == 6) {
		goto label14760;
	}

	$Bd92fffa215178e4 = $f7d55d79e2700f0d[$a22fa0d1973a0b0e];
	goto label12993;

	label14760:

	$Ec0879f16d0cdddb = json_decode($Fb9da1713bff19ce['stream_source'], true);
	goto label12963;

	label14768:
	if ((intval($a22fa0d1973a0b0e) == 1) || (intval($a22fa0d1973a0b0e) == 2) || (intval($a22fa0d1973a0b0e) == 3) || ($Fb9da1713bff19ce['on_demand'] == 1) || ($a22fa0d1973a0b0e == 5)) {
		goto label14804;
	}

	$E8e13b4c9d9584b6 .= '<button title="Start" type="button" class="btn btn-light waves-effect waves-light btn-xs api-start tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', ' . $Fb9da1713bff19ce['server_id'] . ', \'start\');"><i class="mdi mdi-play"></i></button>';
	$b9f049445aa9bd5d = ' disabled';
	goto label13349;

	label14804:

	goto label13341;

	label14806:
}

goto label12549;

label14809:

$B03cfeca75020c69[] = XUI::$rRequest['category'];

label14813:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label24295;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label204;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label16592;
}

goto label16583;

label14833:

if (0 < intval(XUI::$rRequest['category'])) {
	goto label11741;
}

if (!(intval(XUI::$rRequest['category']) == -1)) {
	goto label14852;
}

$cf0aab70014807af[] = '(`streams`.`category_id` = \'[]\' OR `streams`.`category_id` IS NULL)';

label14852:

goto label11747;
goto label11741;

label14854:

$b62d6460eb33ea07->query('SELECT `users`.`username`, `lines`.`id` FROM `users` LEFT JOIN `lines` ON `lines`.`member_id` = `users`.`id` WHERE `lines`.`id` IN (' . implode(',', $C98047839de3d474) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f4e5ef13910179a5[$Fb9da1713bff19ce['id']]['owner_name'] = $Fb9da1713bff19ce['username'];
}

if (XUI::$rSettings['redis_handler']) {
	goto label19634;
}

$b62d6460eb33ea07->query('SELECT `lines_live`.`user_id`, `lines_live`.`stream_id`, `lines_live`.`date_start` AS `last_active`, `streams`.`stream_display_name` FROM `lines_live` LEFT JOIN `streams` ON `streams`.`id` = `lines_live`.`stream_id` INNER JOIN (SELECT `user_id`, MAX(`date_start`) AS `ts` FROM `lines_live` GROUP BY `user_id`) `maxt` ON (`lines_live`.`user_id` = `maxt`.`user_id` AND `lines_live`.`date_start` = `maxt`.`ts`) WHERE `lines_live`.`hls_end` = 0 AND `lines_live`.`user_id` IN (' . implode(',', $C98047839de3d474) . ');');
goto label19612;

label14888:

$F771d40e8cf51e59 = f769e3F0C739d1A6('live');
$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_icon`', '`streams`.`stream_display_name`', '`streams_servers`.`server_id`', '`ondemand_check`.`status`', '`ondemand_check`.`response`', '`ondemand_check`.`resolution`', '`ondemand_check`.`date`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label12343;
}

$E7dbfc96029b3745 = 0;
goto label12342;

label14909:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`streams`.`type` = 2';
$F1a9d7720adbf27a = false;

if (isset(XUI::$rRequest['stream_id'])) {
	goto label2438;
}

if (isset(XUI::$rRequest['source_id'])) {
	goto label12818;
}

goto label17854;

label14923:

$F5190fed237fabec = '';
goto label14931;

label14925:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label14931:

goto label23879;

label14932:

exit();

label14933:

$F771d40e8cf51e59 = f769e3F0c739d1a6('live');
$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_display_name`', false, false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label24786;
}

goto label24784;

label14953:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label23962;
}

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label22407;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_icon`, `streams`.`type`, `streams_servers`.`cchannel_rsources`, `streams`.`stream_source`, `streams`.`stream_display_name`, `streams`.`tv_archive_duration`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, `streams_servers`.`parent_id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label22417;
goto label22407;

label14988:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label14993:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label22401;
}

goto label688;

label15013:

if (!(0 < count($dec36723d7be7c49))) {
	goto label15026;
}

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, true, true);

label15026:

goto label6827;

label15027:

$E7dbfc96029b3745 = 0;
goto label15037;

label15029:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label15037:

goto label24886;

label15038:

if (XUI::$rRequest['filter'] == 1) {
	goto label20031;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label16266;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label6120;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label1589;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label7001;
}

goto label6992;

label15064:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label15073;
}

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label15073:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `lines` RIGHT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` ' . $F5190fed237fabec . ';';
goto label17286;

label15078:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['category']))) {
	goto label5486;
}

if (XUI::$rRequest['category'] == -1) {
	goto label5484;
}

if (XUI::$rRequest['category'] == -2) {
	goto label12249;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams_series`.`category_id`, ?, \'$\')';
goto label12244;

label15102:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label15114;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label16750;

label15114:

goto label16745;

label15115:

goto label15124;

label15116:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label15124:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label15385;

label15127:

$cf0aab70014807af = ['`lines_live`.`activity_id` IN (' . implode(',', array_map('intval', explode(',', XUI::$rRequest['refresh']))) . ') AND `hls_end` = 0'];
$bcfd61adc96d4b72 = 0;
$Cc2b5dfe75dc164b = 1000;

label15147:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label3687;
}

goto label6719;

label15157:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label15162:

goto label10126;

label15163:

$cf0aab70014807af[] = '`streams`.`id` = ?';
goto label10121;

label15166:

$a2a53f18f4f95c8b = ['`epg_api`.`callSign`', '`epg_api`.`name`', '`epg_api`.`bcastLangs`', '`epg_api`.`videoType`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label7042;
}

$E7dbfc96029b3745 = 0;
goto label7050;
goto label7042;

label15184:

goto label15187;

label15185:

$cf0aab70014807af[] = '`streams_servers`.`video_codec` IS NULL';

label15187:

goto label2518;

label15188:

if (XUI::$rRequest['filter'] == 6) {
	goto label25930;
}

if (XUI::$rRequest['filter'] == 7) {
	goto label21973;
}

if (!(XUI::$rRequest['filter'] == 8)) {
	goto label15206;
}

$cf0aab70014807af[] = '`streams`.`transcode_profile_id` > 0';

label15206:

goto label21972;

label15207:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label15229;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label15229:

if (0 < count($cf0aab70014807af)) {
	goto label5039;
}

goto label5037;

label15236:

$B91645b8411dc88c = 'SELECT `panel_logs`.`id`, `panel_logs`.`date`, `panel_logs`.`server_id`, `servers`.`server_name`, `panel_logs`.`type`, `panel_logs`.`log_message`, `panel_logs`.`log_extra` FROM `panel_logs` LEFT JOIN `servers` ON `servers`.`id` = `panel_logs`.`server_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label6113;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label15278;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label15313;

	label15278:

	$B9869413eae86beb['data'][] = [date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date']), '<a href=\'server_view?id=' . intval($Fb9da1713bff19ce['server_id']) . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>', strtoupper($Fb9da1713bff19ce['type']), $Fb9da1713bff19ce['log_message'] . ($Fb9da1713bff19ce['log_extra'] ? '<br/>' . $Fb9da1713bff19ce['log_extra'] : '')];

	label15313:
}

goto label6113;

label15316:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label15322:

$A38e57f944de21df = 'SELECT COUNT(DISTINCT(`streams`.`id`)) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label19554;

label15331:

echo json_encode($B9869413eae86beb);
exit();

label15336:

goto label25735;

label15337:

goto label17918;

label15338:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label23177;
}

$B91645b8411dc88c = 'SELECT `streams_series`.`id`, `streams_series`.`year`, `streams_series`.`rating`, `streams_series`.`cover`, `streams_series`.`title`, `streams_series`.`category_id`, `streams_series`.`tmdb_id`, `streams_series`.`release_date`, `streams_series`.`last_modified`, (SELECT MAX(`season_num`) FROM `streams_episodes` WHERE `series_id` = `streams_series`.`id`) AS `latest_season`, (SELECT COUNT(*) FROM `streams_episodes` WHERE `series_id` = `streams_series`.`id`) AS `episode_count` FROM `streams_series` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label23177;
}

goto label22682;

label15378:

echo json_encode($B9869413eae86beb);
exit();

label15383:

goto label12257;

label15384:

goto label18966;

label15385:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label15412;
}

foreach (range(1, 5) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`blocked_asns`.`asn` LIKE ? OR `blocked_asns`.`isp` LIKE ? OR `blocked_asns`.`domain` LIKE ? OR `blocked_asns`.`country` LIKE ? OR `blocked_asns`.`type` LIKE ?)';

label15412:

goto label1284;

label15413:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label15418:

if (0 < count($cf0aab70014807af)) {
	goto label22283;
}

$F5190fed237fabec = '';
goto label22289;
goto label22283;

label15427:

if (!(0 < count($dec36723d7be7c49))) {
	goto label15453;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$b42f717d234fde64[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['stream_display_name'];
}

label15453:

goto label17746;

label15454:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label15463;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

label15463:

goto label23954;
goto label7526;

label15465:

goto label2554;

label15466:
if (!(!$db0a61ef32b89a27['is_admin'] || !E589a4BF54A2Dad1('adv', 'categories'))) {
	goto label15479;
}

exit();

label15479:

goto label21128;

label15480:

$f1dcaed925076e67['streams_grouped'] = 0;

label15482:

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label12847;
}

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ';';
goto label12851;
goto label12847;

label15492:

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';

label15494:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label382;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;
goto label382;

label15517:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label24206;
}

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label15537;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, MD5(`streams`.`stream_source`) AS `source`, `streams_servers`.`to_analyze`, `streams`.`movie_properties`, `streams`.`target_container`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, `streams_series`.`title`, `streams_series`.`seasons`, `streams_series`.`id` AS `sid`, `streams_episodes`.`season_num` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label19335;

label15537:

goto label19325;

label15538:

if (XUI::$rRequest['category'] == -2) {
	goto label15550;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams_series`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];
goto label23898;

label15550:

goto label23896;

label15551:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label15573;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label15573:

if (0 < count($cf0aab70014807af)) {
	goto label5699;
}

goto label5697;

label15580:

if ($A7d54b094ae83c95 == 'live_connections') {
	goto label11328;
}

if ($A7d54b094ae83c95 == 'stream_list') {
	goto label19587;
}

if ($A7d54b094ae83c95 == 'movie_list') {
	goto label11216;
}

if ($A7d54b094ae83c95 == 'radio_list') {
	goto label3272;
}

if ($A7d54b094ae83c95 == 'series_list') {
	goto label7506;
}

goto label158;

label15596:

$D52a67130c4ab288 = $dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($dec36723d7be7c49))) {
	goto label11399;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`server_stream_id`) AS `count` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`;');
goto label11389;

label15626:

if (XUI::$rRequest['filter'] == 1) {
	goto label23789;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label25603;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label17610;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label7649;
}

if (!(XUI::$rRequest['filter'] == 5)) {
	goto label7648;
}

goto label7646;

label15653:

goto label309;

label15654:

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label307;
}

$cf0aab70014807af[] = '(SELECT COUNT(*) AS `count` FROM `streams_logs` WHERE `streams_logs`.`action` = \'STREAM_FAILED\' AND `streams_logs`.`date` >= UNIX_TIMESTAMP()-86400 AND `streams_logs`.`stream_id` = `streams`.`id` AND `streams_logs`.`server_id` = `streams_servers`.`server_id`) > 144';
goto label306;

label15661:

goto label15667;

label15662:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label15667:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);
goto label20843;

label15682:

$f1dcaed925076e67['streams_grouped'] = 0;

label15684:

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label5715;
}

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ';';
goto label5719;
goto label5715;

label15694:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label15699:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `users_credits_logs` LEFT JOIN `users` AS `target` ON `target`.`id` = `users_credits_logs`.`target_id` LEFT JOIN `users` AS `owner` ON `owner`.`id` = `users_credits_logs`.`admin_id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label4854;
}

goto label4851;

label15713:

if (isset(XUI::$rRequest['only_channels'])) {
	goto label15720;
}

$cf0aab70014807af[] = '`streams`.`type` = 1';
goto label22221;

label15720:

$cf0aab70014807af[] = '`streams`.`type` = 3';
goto label22221;

label15723:

exit();

label15724:

goto label17831;

label15725:

if (e589A4Bf54a2Dad1('adv', 'database')) {
	goto label5402;
}

goto label5401;

label15732:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label12127;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label12125;

label15760:

$Cc2b5dfe75dc164b = intval(XUI::$rRequest['length']);
if (!(((1000 < $Cc2b5dfe75dc164b) || ($Cc2b5dfe75dc164b <= 0)) && !$De97a60c730465cd)) {
	goto label15777;
}

$Cc2b5dfe75dc164b = 1000;

label15777:

if (!XUI::$rSettings['redis_handler']) {
	goto label25685;
}

goto label25683;

label15783:

$B91645b8411dc88c = 'SELECT `streams_series`.`id`, `streams_series`.`year`, `streams_series`.`rating`, `streams_series`.`cover`, `streams_series`.`title`, `streams_series`.`category_id`, `streams_series`.`tmdb_id`, `streams_series`.`release_date`, `streams_series`.`last_modified`, (SELECT MAX(`season_num`) FROM `streams_episodes` WHERE `series_id` = `streams_series`.`id`) AS `latest_season`, (SELECT COUNT(*) FROM `streams_episodes` WHERE `series_id` = `streams_series`.`id`) AS `episode_count` FROM `streams_series` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label6986;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label16058;

	label15809:

	if (!$ac699a87736bb3c0) {
		goto label15814;
	}

	$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-half\'></i>';

	label15814:

	goto label15936;

	label15816:

	$c68b76c7e42b19eb = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Fb9da1713bff19ce['cover'] . '\'><img loading=\'lazy\' src=\'resize?maxh=58&maxw=32&url=' . $Fb9da1713bff19ce['cover'] . '\' /></a>';

	label15823:

	$B93a4cfa6336a834 = '';

	if (!$Fb9da1713bff19ce['rating']) {
		goto label15950;
	}

	$e1928169d299e86c = round($Fb9da1713bff19ce['rating']) / 2.0;
	goto label15870;

	label15837:

	if (0 < $Fb9da1713bff19ce['tmdb_id']) {
		goto label15845;
	}

	$b41097c951ee83d3 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light btn-fixed-xs"><i class="text-light fas fa-minus-circle"></i></button>';
	goto label16012;

	label15845:

	$b41097c951ee83d3 = '<button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed-xs"><i class="text-light fas fa-check-circle"></i></button>';
	goto label16012;

	label15848:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label15863;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label15863:

	if (0 < $Fb9da1713bff19ce['latest_season']) {
		goto label16005;
	}

	goto label16001;

	label15870:

	$Be927fb456a47264 = floor($e1928169d299e86c);
	$ac699a87736bb3c0 = 0 < ($e1928169d299e86c - $Be927fb456a47264);
	$C39bf74bcb6f2a82 = 5 - ($Be927fb456a47264 + ($ac699a87736bb3c0 ? 1 : 0));

	if (!(0 < $Be927fb456a47264)) {
		goto label15809;
	}

	foreach (range(1, $Be927fb456a47264) as $df6991d59f367c7e) {
		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star\'></i>';
	}

	goto label15809;

	label15900:

	$eca9936f0487fe83 = ($Fb9da1713bff19ce['year'] ? '<strong>' . $Fb9da1713bff19ce['year'] . '</strong> &nbsp;' : '');
	$b87030f28ff32396 = '<strong>' . $Fb9da1713bff19ce['title'] . ('</strong><br><span style=\'font-size:11px;\'>' . $eca9936f0487fe83 . $B93a4cfa6336a834 . '</span></a>');
	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $c68b76c7e42b19eb, $b87030f28ff32396, $Dbcac322b4274e46, $Fb9da1713bff19ce['latest_season'], $Fb9da1713bff19ce['episode_count'], $b41097c951ee83d3, $Fb9da1713bff19ce['release_date'], $Fb9da1713bff19ce['last_modified']];

	label15934:

	goto label16084;

	label15936:

	if (!(0 < $C39bf74bcb6f2a82)) {
		goto label15950;
	}

	foreach (range(1, $C39bf74bcb6f2a82) as $df6991d59f367c7e) {
		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-outline\'></i>';
	}

	label15950:

	goto label15900;

	label15952:

	$Fb9da1713bff19ce['last_modified'] = 'Never';

	label15954:

	if (!$Fb9da1713bff19ce['release_date']) {
		goto label15970;
	}

	$Fb9da1713bff19ce['release_date'] = date($f1dcaed925076e67['date_format'], strtotime($Fb9da1713bff19ce['release_date']));

	label15970:

	goto label15837;

	label15972:

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label15989;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label15848;

	label15989:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';
	goto label15848;

	label16001:

	$Fb9da1713bff19ce['latest_season'] = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label16010;

	label16005:

	$Fb9da1713bff19ce['latest_season'] = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['latest_season'] . '</button>';

	label16010:

	goto label16025;

	label16012:

	if (0 < strlen($Fb9da1713bff19ce['cover'])) {
		goto label16023;
	}

	$c68b76c7e42b19eb = '';
	goto label15823;

	label16023:

	goto label15816;

	label16025:

	if (0 < $Fb9da1713bff19ce['episode_count']) {
		goto label16034;
	}

	$Fb9da1713bff19ce['episode_count'] = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label16041;

	label16034:

	$Fb9da1713bff19ce['episode_count'] = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['episode_count'] . '</button>';
	goto label16041;

	label16041:

	if ($Fb9da1713bff19ce['last_modified'] == 0) {
		goto label16056;
	}

	$Fb9da1713bff19ce['last_modified'] = date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['last_modified']);
	goto label15954;

	label16056:

	goto label15952;

	label16058:

	if (!$De97a60c730465cd) {
		goto label16076;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label15934;

	label16076:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	goto label15972;

	label16084:
}

goto label6986;

label16087:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 0 AND `streams_servers`.`stream_status` <> 1)';

label16089:

if (!(0 < strlen(XUI::$rRequest['audio']))) {
	goto label22540;
}

goto label16099;

label16099:

if (XUI::$rRequest['audio'] == -1) {
	goto label16111;
}

$cf0aab70014807af[] = '`streams_servers`.`audio_codec` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['audio'];
goto label22540;

label16111:

goto label22538;

label16112:

if (!(0 < strlen(XUI::$rRequest['audio']))) {
	goto label11262;
}

if (XUI::$rRequest['audio'] == -1) {
	goto label19609;
}

$cf0aab70014807af[] = '`streams_servers`.`audio_codec` = ?';
goto label19604;

label16129:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label2547;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_display_name` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2547;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label16176;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label16188;

	label16176:

	$E8e13b4c9d9584b6 = '<a href="stream_view?id=' . $Fb9da1713bff19ce['id'] . '"><button type="button" title="View Stream" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-play"></i></button></a>';
	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name'], $E8e13b4c9d9584b6];

	label16188:
}

goto label2547;

label16191:

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label16199;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label5565;

label16199:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label5565;

label16205:

$cf0aab70014807af[] = '(`streams_series`.`id` LIKE ? OR `streams_series`.`title` LIKE ?)';

label16207:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label8234;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;
goto label8234;

label16230:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label16235:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label11283;
}

$B91645b8411dc88c = 'SELECT `queue`.*, `servers`.`server_name`, `streams`.`type`, `streams`.`stream_display_name` FROM `queue` LEFT JOIN `servers` ON `servers`.`id` = `queue`.`server_id` LEFT JOIN `streams` ON `streams`.`id` = `queue`.`stream_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label23654;

label16265:

goto label16268;

label16266:

$cf0aab70014807af[] = '((`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` = 1))';

label16268:

goto label20033;
goto label20031;

label16270:

echo json_encode($B9869413eae86beb);
exit();

label16275:

goto label1786;

label16276:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label1671;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label1676;
goto label1671;

label16293:

$B91645b8411dc88c = 'SELECT `stream_id`, `server_id`, COUNT(*) AS `fails`, MAX(`date`) AS `last` FROM `streams_logs` WHERE `action` IN (\'STREAM_FAILED\', \'STREAM_START_FAIL\') AND `date` >= (UNIX_TIMESTAMP()-' . intval($f1dcaed925076e67['fails_per_time'] ?: 86400) . ') AND `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`, `server_id`;';
$b62d6460eb33ea07->query($B91645b8411dc88c);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label12861;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$a393a187b7247477[$Fb9da1713bff19ce['stream_id']][intval($Fb9da1713bff19ce['server_id'])] = [$Fb9da1713bff19ce['fails'], $Ab13f2545dd3df14 - $Fb9da1713bff19ce['last']];
	$e1751a10c8f69e7b[$Fb9da1713bff19ce['stream_id']][0] += $Fb9da1713bff19ce['fails'];

	if (!($e1751a10c8f69e7b[$Fb9da1713bff19ce['stream_id']]['last'] < ($Ab13f2545dd3df14 - $Fb9da1713bff19ce['last']))) {
		goto label16359;
	}

	$e1751a10c8f69e7b[$Fb9da1713bff19ce['stream_id']][1] = $Ab13f2545dd3df14 - $Fb9da1713bff19ce['last'];

	label16359:
}

goto label12861;

label16362:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label25581;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$B12f177002ce1b47 = $f4e5ef13910179a5 = $C98047839de3d474 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label16400;

	label16382:

	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])]['stream_id'] = $E4fc21fdcc2ed803['stream_id'];
	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])]['last_active'] = $E4fc21fdcc2ed803['date_end'];

	label16398:

	goto label16443;

	label16400:

	if (!$Fb9da1713bff19ce['id']) {
		goto label16417;
	}

	$C98047839de3d474[] = intval($Fb9da1713bff19ce['id']);
	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])] = ['owner_name' => NULL, 'stream_display_name' => NULL, 'stream_id' => NULL, 'last_active' => NULL];

	label16417:

	if ($E4fc21fdcc2ed803 = json_decode($Fb9da1713bff19ce['last_activity_array'], true)) {
		goto label16441;
	}

	goto label16428;

	label16428:

	if (!$Fb9da1713bff19ce['last_activity']) {
		goto label16439;
	}

	$B12f177002ce1b47[] = intval($Fb9da1713bff19ce['last_activity']);

	label16439:

	goto label16398;

	label16441:

	goto label16382;

	label16443:
}

goto label21743;

label16446:

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_display_name`, `streams`.`category_id`, `streams_series`.`title` FROM `streams` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams`.`series_no` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label17222;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label16478;

	label16472:

	goto label16476;

	label16474:

	$Dbcac322b4274e46 = $Fb9da1713bff19ce['title'];

	label16476:

	goto label16511;

	label16478:

	if (!$De97a60c730465cd) {
		goto label16496;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label16520;

	label16496:

	$E8e13b4c9d9584b6 = '<div class="btn-group"><button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="vod" type="button" style="display: none;" class="btn-remove btn btn-light waves-effect waves-light btn-xs" onClick="toggleSelection(' . $Fb9da1713bff19ce['id'] . ');"><i class="mdi mdi-minus"></i></button>' . "\r\n" . '                <button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="vod" type="button" style="display: none;" class="btn-add btn btn-light waves-effect waves-light btn-xs" onClick="toggleSelection(' . $Fb9da1713bff19ce['id'] . ');"><i class="mdi mdi-plus"></i></button></div>';
	goto label16548;

	label16511:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $E8e13b4c9d9584b6];

	label16520:

	goto label16580;

	label16522:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval($E3665d09b9cea208[1])]['category_name'] ?: 'No Category';

	label16531:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label16472;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';
	goto label16472;

	label16548:

	if (0 < strlen($Fb9da1713bff19ce['title'])) {
		goto label16474;
	}

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen($E3665d09b9cea208[1])) {
		goto label16522;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label16531;
	goto label16522;

	label16580:
}

goto label17222;

label16583:

if (!(XUI::$rRequest['filter'] == 3)) {
	goto label16591;
}

$cf0aab70014807af[] = '`ondemand_check`.`status` IS NULL';

label16591:

goto label203;

label16592:

goto label201;

label16593:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`to_analyze` = 0 AND `streams_servers`.`stream_status` = 1)';

label16595:

goto label2433;

label16596:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 1 AND `streams_servers`.`stream_status` <> 1)';
goto label2433;

label16599:

if (XUI::$rRequest['filter'] == 9) {
	goto label1135;
}

if (XUI::$rRequest['filter'] == 10) {
	goto label17113;
}

if (XUI::$rRequest['filter'] == 11) {
	goto label24911;
}

if (XUI::$rRequest['filter'] == 12) {
	goto label20840;
}

if (!(XUI::$rRequest['filter'] == 13)) {
	goto label20839;
}

goto label20837;

label16626:

goto label16635;

label16627:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label16635:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label6439;

label16638:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label26782;
}

$B91645b8411dc88c = 'SELECT `lines`.`id`, `lines`.`member_id`, `lines`.`last_activity`, `lines`.`last_activity_array`, `lines`.`username`, `lines`.`password`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`is_restreamer`, `lines`.`enabled`, `lines`.`admin_notes`, `lines`.`reseller_notes`, `lines`.`max_connections`, `lines`.`is_trial`, (SELECT COUNT(*) AS `active_connections` FROM `lines_live` WHERE `user_id` = `lines`.`id` AND `hls_end` = 0) AS `active_connections` FROM `lines` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label26782;
}

goto label17947;

label16678:

if (!(0 < count($dec36723d7be7c49))) {
	goto label16704;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$b42f717d234fde64[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['stream_display_name'];
}

label16704:

goto label22068;

label16705:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label7256;
}

$B91645b8411dc88c = 'SELECT `watch_logs`.`id`, `watch_logs`.`type`, `watch_logs`.`server_id`, `servers`.`server_name`, `watch_logs`.`filename`, `watch_logs`.`status`, `watch_logs`.`stream_id`, `watch_logs`.`dateadded` FROM `watch_logs` LEFT JOIN `servers` ON `servers`.`id` = `watch_logs`.`server_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label7256;
}

goto label7119;

label16745:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label16750:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label6157;
}

$B91645b8411dc88c = 'SELECT `mag_events`.`id`, `mag_events`.`send_time`, `mag_devices`.`mac`, `mag_events`.`event`, `mag_events`.`msg`, `mag_events`.`mag_device_id` FROM `mag_events` LEFT JOIN `mag_devices` ON `mag_devices`.`mag_id` = `mag_events`.`mag_device_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label23969;

label16780:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label16802;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label16802:

goto label12817;

label16803:

goto label16809;

label16804:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label16809:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);
goto label19471;

label16824:

if (0 < count($cf0aab70014807af)) {
	goto label16832;
}

$F5190fed237fabec = '';
goto label25947;

label16832:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label25947;

label16839:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label16869;

	label16845:

	$E8e13b4c9d9584b6 = '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" disabled><i class="fas fa-hammer"></i></button>';
	$b38e11ffdc6a3abb = '';
	goto label16938;

	label16849:

	if (!in_array($Fb9da1713bff19ce['login_ip'], $c5feeca020e7bf5c)) {
		goto label16863;
	}

	goto label16860;

	label16860:

	$E8e13b4c9d9584b6 = '<button title="IP Already Blocked" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="fas fa-hammer"></i></button>';
	goto label16867;

	label16863:

	$E8e13b4c9d9584b6 = '<button title="Block IP" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $Fb9da1713bff19ce['login_ip'] . '\', \'block\');"><i class="fas fa-hammer"></i></button>';

	label16867:

	goto label16897;

	label16869:

	if (!$De97a60c730465cd) {
		goto label16887;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label16963;

	label16887:

	if (0 < strlen($Fb9da1713bff19ce['login_ip'])) {
		goto label16849;
	}

	goto label16845;

	label16897:

	$Edebd7b009e56f17 = explode(':', $Fb9da1713bff19ce['ip']);
	$b38e11ffdc6a3abb = '<a onClick="whois(\'' . $Fb9da1713bff19ce['ip'] . '\');" href=\'javascript: void(0);\'>' . (1 < count($Edebd7b009e56f17) ? implode(':', array_slice($Edebd7b009e56f17, 0, 4)) . ':<br/>' . implode(':', array_slice($Edebd7b009e56f17, 4, 8)) : $Fb9da1713bff19ce['ip']) . '</a>';

	label16938:

	$B9869413eae86beb['data'][] = [date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date']), $Fb9da1713bff19ce['type'], $Fb9da1713bff19ce['status'], '<a href="user?id=' . $Fb9da1713bff19ce['user_id'] . '">' . $Fb9da1713bff19ce['username'] . '</a>', $Fb9da1713bff19ce['code'], $b38e11ffdc6a3abb, $E8e13b4c9d9584b6];

	label16963:

	goto label16965;

	label16965:
}

label16967:

echo json_encode($B9869413eae86beb);
goto label12045;

label16972:

$a3b35b5bcdf091ff = count($ca8155fd3c07c1ee);

label16976:

foreach (XUI::$redis->mGet($ca8155fd3c07c1ee) as $Fb9da1713bff19ce) {
	goto label17042;

	label16984:

	$Fb9da1713bff19ce['identifier'] = $Fb9da1713bff19ce['user_id'] ?: ($Fb9da1713bff19ce['hmac_id'] . '_' . $Fb9da1713bff19ce['hmac_identifier']);
	$Fb9da1713bff19ce['active_time'] = time() - $Fb9da1713bff19ce['date_start'];
	$Fb9da1713bff19ce['server_name'] = XUI::$rServers[$Fb9da1713bff19ce['server_id']]['server_name'] ?: '';
	$D8e7681dfae2905b[] = $Fb9da1713bff19ce;

	label17009:

	goto label17075;

	label17011:
	if (!($ee6d1fc5d801b43f && ($ee6d1fc5d801b43f != $Fb9da1713bff19ce['stream_id']))) {
		goto label17023;
	}

	$a3b35b5bcdf091ff--;
	goto label17009;

	label17023:
	if (!($f7107e3a92443147 && ($f7107e3a92443147 != $Fb9da1713bff19ce['user_id']))) {
		goto label17037;
	}

	goto label17033;

	label17033:

	$a3b35b5bcdf091ff--;
	goto label17009;

	label17037:

	$Fb9da1713bff19ce['activity_id'] = $Fb9da1713bff19ce['uuid'];
	goto label16984;

	label17042:

	$Fb9da1713bff19ce = igbinary_unserialize($Fb9da1713bff19ce);

	if (is_array($Fb9da1713bff19ce)) {
		goto label17056;
	}

	$a3b35b5bcdf091ff--;
	goto label17009;

	label17056:

	goto label17058;

	label17058:

	if ($F74c31745a712716) {
		goto label17037;
	}
	if (!($C082ca9ed03f473c && ($C082ca9ed03f473c != $Fb9da1713bff19ce['server_id']))) {
		goto label17073;
	}

	$a3b35b5bcdf091ff--;
	goto label17009;

	label17073:

	goto label17011;

	label17075:
}

if ($F74c31745a712716) {
	goto label23438;
}

goto label23432;

label17080:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label17085:

if (0 < count($cf0aab70014807af)) {
	goto label27439;
}

$F5190fed237fabec = '';
goto label27445;
goto label27439;

label17094:

$a2a53f18f4f95c8b = ['`mysql_syslog`.`date`', '`servers`.`server_name`', '`mysql_syslog`.`type`', '`mysql_syslog`.`error`', '`mysql_syslog`.`ip`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label17111;
}

$E7dbfc96029b3745 = 0;
goto label17802;

label17111:

goto label17794;

label17112:

goto label17115;

label17113:

$cf0aab70014807af[] = '(`streams`.`channel_id` IS NULL OR LENGTH(`streams`.`channel_id`) = 0)';

label17115:

goto label1137;
goto label1135;

label17117:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label17135:

if (0 < count($cf0aab70014807af)) {
	goto label21961;
}

$F5190fed237fabec = '';
goto label21960;

label17143:

goto label6075;

label17144:

$bcfd61adc96d4b72 = 0;
$Cc2b5dfe75dc164b = 1000;
$ca8155fd3c07c1ee = explode(',', XUI::$rRequest['refresh']);
goto label6075;

label17154:

goto label16780;

label17155:

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);
goto label16780;

label17165:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label17174;
}

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label17174:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label1780;
}

goto label1777;

label17184:

$cf0aab70014807af[] = '(`users`.`username` LIKE ? OR `users_logs`.`deleted_info` LIKE ? OR `users_logs`.`action` LIKE ?)';

label17186:

if (!(0 < strlen(XUI::$rRequest['range']))) {
	goto label19839;
}

$F56066ad7b074468 = substr(XUI::$rRequest['range'], 0, 10);
goto label6040;

label17204:

$cf0aab70014807af[] = '`blocked_asns`.`type` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['type'];

label17210:

if (0 < count($cf0aab70014807af)) {
	goto label1037;
}

$F5190fed237fabec = '';
goto label1036;

label17218:

$cf0aab70014807af[] = '((`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` = 1))';

label17220:

goto label3587;

label17221:

goto label3585;

label17222:

echo json_encode($B9869413eae86beb);
exit();

label17227:

goto label15465;

label17228:

if (XUI::$rRequest['filter'] == 4) {
	goto label6536;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label24820;
}

if (XUI::$rRequest['filter'] == 6) {
	goto label17300;
}

if (XUI::$rRequest['filter'] == 7) {
	goto label11941;
}

if (XUI::$rRequest['filter'] == 8) {
	goto label1138;
}

goto label16599;

label17254:

goto label17257;

label17255:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NULL OR `streams_servers`.`monitor_pid` <= 0) AND `streams_servers`.`on_demand` = 0)';

label17257:

goto label11987;

label17258:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label17285;
}

foreach (range(1, 7) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`lines_activity`.`hmac_identifier` LIKE ? OR `lines_activity`.`user_agent` LIKE ? OR `lines_activity`.`user_ip` LIKE ? OR `lines_activity`.`container` LIKE ? OR FROM_UNIXTIME(`lines_activity`.`date_start`) LIKE ? OR FROM_UNIXTIME(`lines_activity`.`date_end`) LIKE ? OR `lines_activity`.`geoip_country_code` LIKE ?)';

label17285:

goto label24060;

label17286:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label17298;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label7695;

label17298:

goto label7690;

label17299:

goto label17302;

label17300:

$cf0aab70014807af[] = '`streams`.`direct_source` = 1';

label17302:

goto label24819;

label17303:

if (XUI::$rRequest['filter'] == 4) {
	goto label6961;
}

if (!(XUI::$rRequest['filter'] == 5)) {
	goto label17316;
}

$cf0aab70014807af[] = '`lines`.`is_trial` = 1';

label17316:

goto label6963;
goto label6961;

label17318:

$F771d40e8cf51e59 = f769e3f0C739d1A6('movie');
$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_display_name`', '`streams_series`.`title`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label3346;
}

$E7dbfc96029b3745 = 0;
goto label3354;
goto label3346;

label17340:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label17345:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label9245;
}

$B91645b8411dc88c = 'SELECT `providers`.`id`,`providers_streams`.`type`,`providers`.`username`, `providers`.`password`, `providers`.`ssl`, `providers`.`legacy`, `providers`.`hls`, `providers`.`ip`, `providers`.`port`, `providers`.`name`, `providers`.`data`, `providers_streams`.`stream_id`, `providers_streams`.`category_array`, `providers_streams`.`stream_display_name`, `providers_streams`.`stream_icon`,`providers_streams`.`channel_id` FROM `providers_streams` LEFT JOIN `providers` ON `providers`.`id` = `providers_streams`.`provider_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label8024;

label17375:

exit();

label17376:

$F771d40e8cf51e59 = F769e3f0C739d1a6('series');
$a2a53f18f4f95c8b = ['`streams_series`.`id`', '`streams_series`.`cover`', '`streams_series`.`title`', '`streams_series`.`category_id`', '`latest_season`', '`episode_count`', false, '`streams_series`.`release_date`', '`streams_series`.`last_modified`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label6753;
}

goto label6751;

label17396:

$cf0aab70014807af[] = '(`streams_servers`.`monitor_pid` > 0 AND `streams_servers`.`pid` > 0)';

label17398:

goto label25712;

label17399:

goto label33;

label17400:

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams_series`.`title` LIKE ? OR `streams`.`notes` LIKE ? OR `streams_servers`.`current_source` LIKE ?)';

label17402:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label21979;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label21157;
}

goto label1559;

label17417:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label17513;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label17441;

	label17429:

	goto label17511;

	label17431:

	$E8e13b4c9d9584b6 .= '</div>';

	if ($Fb9da1713bff19ce['blocked']) {
		goto label17478;
	}

	$b9f049445aa9bd5d = '<button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed">ALLOWED</button>';
	goto label17479;
	goto label17478;

	label17441:

	if (!$De97a60c730465cd) {
		goto label17459;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label17429;

	label17459:

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	goto label17462;

	label17462:

	if ($Fb9da1713bff19ce['blocked']) {
		goto label17472;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-danger waves-effect waves-light btn-xs" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'block\');"><i class="mdi mdi-cancel"></i></button>';
	goto label17431;

	label17472:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-success waves-effect waves-light btn-xs" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'allow\');"><i class="mdi mdi-check"></i></button>';
	goto label17431;

	label17478:

	$b9f049445aa9bd5d = '<button type="button" class="btn btn-danger btn-xs waves-effect waves-light btn-fixed">BLOCKED</button>';

	label17479:

	$A7d54b094ae83c95 = strtoupper($Fb9da1713bff19ce['type']);
	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['asn'], $Fb9da1713bff19ce['isp'], $Fb9da1713bff19ce['domain'], '<img loading="lazy" src="assets/images/countries/' . strtolower($Fb9da1713bff19ce['country']) . '.png">', number_format($Fb9da1713bff19ce['num_ips'], 0), $A7d54b094ae83c95, $b9f049445aa9bd5d, $E8e13b4c9d9584b6];
	goto label17429;

	label17511:
}

label17513:

goto label341;

label17514:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label19640;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, MD5(`streams`.`stream_source`) AS `source`, `streams`.`movie_properties`, `streams`.`year`, `streams_servers`.`to_analyze`, `streams`.`target_container`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL ' . $F5190fed237fabec . ' GROUP BY `streams`.`id` ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label19640;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
goto label15596;

label17543:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label17551:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label11840;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label11838;

label17579:

$cf0aab70014807af = ['`streams`.`id` IN (' . implode(',', array_map('intval', explode(',', XUI::$rRequest['refresh']))) . ')'];
$bcfd61adc96d4b72 = 0;
$Cc2b5dfe75dc164b = 1000;

label17599:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label20033;
}

goto label15038;

label17609:

goto label17612;

label17610:

$cf0aab70014807af[] = '`lines`.`admin_enabled` = 0';

label17612:

goto label25602;

label17613:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label17635;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label17635:

if (0 < count($cf0aab70014807af)) {
	goto label334;
}

goto label332;

label17642:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label17664;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label17676;

	label17664:

	$E8e13b4c9d9584b6 = '<a href="series?id=' . $Fb9da1713bff19ce['id'] . '"><button type="button" title="Edit Series" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-play"></i></button></a>';
	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['title'], $E8e13b4c9d9584b6];

	label17676:
}

label17678:

echo json_encode($B9869413eae86beb);
goto label2553;

label17683:

foreach (range(1, 5) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams_series`.`title` LIKE ? OR `streams`.`notes` LIKE ? OR `streams_servers`.`current_source` LIKE ?)';

label17700:

if (!(0 < strlen(XUI::$rRequest['series']))) {
	goto label21884;
}

goto label21878;

label17710:

$F771d40e8cf51e59 = F769E3F0c739D1a6('radio');
$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_display_name`', false, false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label18955;
}

$E7dbfc96029b3745 = 0;
goto label18954;

label17731:

if (0 < count($cf0aab70014807af)) {
	goto label17739;
}

$F5190fed237fabec = '';
goto label24720;

label17739:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label24720;

label17746:

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $Fd10d59f87b19e71) {
	$f4e5ef13910179a5[$f7107e3a92443147]['stream_display_name'] = $b42f717d234fde64[$Fd10d59f87b19e71['stream_id']];
	$f4e5ef13910179a5[$f7107e3a92443147]['stream_id'] = $Fd10d59f87b19e71['stream_id'];
	$f4e5ef13910179a5[$f7107e3a92443147]['last_active'] = $Fd10d59f87b19e71['date_start'];
}

unset($B692d6e1f0cf1f67);

label17765:

goto label7561;

label17766:

if (!(0 < intval(XUI::$rRequest['server']))) {
	goto label17784;
}

$cf0aab70014807af[] = '`watch_logs`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label17784:

if (!(0 < strlen(XUI::$rRequest['type']))) {
	goto label22574;
}

goto label22568;

label17794:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label17802:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label25584;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label25582;

label17830:

exit();

label17831:

goto label24211;

label17832:
if (!(!E589A4bf54A2DaD1('adv', 'episodes') && !e589A4bF54A2DAd1('adv', 'mass_sedits'))) {
	goto label5912;
}

goto label5911;

label17848:

echo json_encode($B9869413eae86beb);
exit();
goto label12612;

label17854:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label17881;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams`.`notes` LIKE ? OR `streams_servers`.`current_source` LIKE ?)';

label17881:

goto label5941;

label17882:

goto label17885;

label17883:

$cf0aab70014807af[] = '(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))';

label17885:

goto label7746;

label17886:

echo json_encode($B9869413eae86beb);
exit();

label17891:

goto label7681;
goto label11328;

label17893:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label7746;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label17883;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label6481;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label6964;
}

goto label17303;

label17918:
if (!(!$db0a61ef32b89a27['is_admin'] || !E589A4bF54A2DaD1('adv', 'categories'))) {
	goto label17931;
}

exit();

label17931:

$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_display_name`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label15029;
}

goto label15027;

label17947:

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$B12f177002ce1b47 = $f4e5ef13910179a5 = $C98047839de3d474 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label17959;

	label17957:

	goto label18013;

	label17959:

	$C98047839de3d474[] = intval($Fb9da1713bff19ce['id']);
	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])] = ['owner_name' => NULL, 'stream_display_name' => NULL, 'stream_id' => NULL, 'last_active' => NULL];

	if ($E4fc21fdcc2ed803 = json_decode($Fb9da1713bff19ce['last_activity_array'], true)) {
		goto label17995;
	}

	if (!$Fb9da1713bff19ce['last_activity']) {
		goto label17993;
	}

	$B12f177002ce1b47[] = intval($Fb9da1713bff19ce['last_activity']);
	goto label17993;

	label17993:

	goto label17957;

	label17995:

	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])]['stream_id'] = $E4fc21fdcc2ed803['stream_id'];
	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])]['last_active'] = $E4fc21fdcc2ed803['date_end'];
	goto label17957;

	label18013:
}

if (!(0 < count($C98047839de3d474))) {
	goto label22087;
}

goto label14854;

label18023:

$B9869413eae86beb['recordsTotal'] = 0;
goto label18031;

label18026:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label18031:

goto label15338;

label18032:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label18129;

	label18036:

	$eb0ed57b1401ceea = trim(explode('(', $Fb9da1713bff19ce['user_agent'])[0]);
	$f7037fc395d8fcad = intval(time()) - intval($Fb9da1713bff19ce['date_start']);
	$E65328c8afa8e30a = 'success';

	if ($Fb9da1713bff19ce['hls_end']) {
		goto label18374;
	}

	goto label18307;

	label18065:

	$ff5cf44f96903d64 = 'HMAC - ' . $Fb9da1713bff19ce['hmac_identifier'];
	goto label18077;

	label18070:

	$ff5cf44f96903d64 = '<a href=\'hmac?id=' . $Fb9da1713bff19ce['hmac_id'] . '\'>HMAC - ' . $Fb9da1713bff19ce['hmac_identifier'] . '</a>';

	label18077:

	goto label18501;

	label18079:

	goto label18501;

	label18081:

	if (e589A4bf54A2DAD1('adv', 'add_hmac')) {
		goto label18070;
	}

	goto label18065;

	label18090:

	$ff5cf44f96903d64 = '<a href=\'enigma?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label18097:

	goto label18079;

	label18099:

	goto label18516;

	label18101:

	if (14400 < $f7037fc395d8fcad) {
		goto label18362;
	}

	if (!(43200 < $f7037fc395d8fcad)) {
		goto label18111;
	}

	$E65328c8afa8e30a = 'danger';

	label18111:

	goto label18363;
	goto label18362;

	label18115:

	goto label18127;

	label18117:

	$f7037fc395d8fcad = sprintf('%02dd %02dh', $f7037fc395d8fcad / 86400, ($f7037fc395d8fcad / 3600) % 24);
	$E65328c8afa8e30a = 'danger';

	label18127:

	goto label18196;

	label18129:

	if (!$De97a60c730465cd) {
		goto label18147;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label18423;

	label18147:

	if ($Fb9da1713bff19ce['divergence'] <= 50) {
		goto label18491;
	}

	goto label18464;

	label18154:
	if (!((0 < $Fb9da1713bff19ce['proxy_id']) && isset($a080f5083618911e[$Fb9da1713bff19ce['proxy_id']]))) {
		goto label18170;
	}

	$Ec379295dc7029e6 .= '<br/><small>(via ' . $a080f5083618911e[$Fb9da1713bff19ce['proxy_id']]['server_name'] . ')</small>';

	label18170:

	if (0 < strlen($Fb9da1713bff19ce['geoip_country_code'])) {
		goto label18183;
	}

	$eb4dd4cef4d22e4b = '';
	goto label18181;

	label18181:

	goto label18190;

	label18183:

	$eb4dd4cef4d22e4b = '<img loading=\'lazy\' src=\'assets/images/countries/' . strtolower($Fb9da1713bff19ce['geoip_country_code']) . '.png\'></img> &nbsp;';

	label18190:

	if ($Fb9da1713bff19ce['user_ip']) {
		goto label18228;
	}

	goto label18225;

	label18196:

	if (!$Fb9da1713bff19ce['is_restreamer']) {
		goto label18202;
	}

	$E65328c8afa8e30a = 'success';

	label18202:

	$f7037fc395d8fcad = '<button type=\'button\' class=\'btn btn-' . $E65328c8afa8e30a . ' btn-xs waves-effect waves-light btn-fixed\'>' . $f7037fc395d8fcad . '</button>';
	goto label18375;
	goto label18374;

	label18212:

	$Ec379295dc7029e6 = $Fb9da1713bff19ce['server_name'];
	goto label18223;

	label18216:

	$Ec379295dc7029e6 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';

	label18223:

	goto label18154;

	label18225:

	$b38e11ffdc6a3abb = '';
	goto label18036;

	label18228:

	$Edebd7b009e56f17 = explode(':', $Fb9da1713bff19ce['user_ip']);
	$b38e11ffdc6a3abb = $eb4dd4cef4d22e4b . '<a onClick="whois(\'' . $Fb9da1713bff19ce['user_ip'] . '\');" href=\'javascript: void(0);\'>' . (1 < count($Edebd7b009e56f17) ? implode(':', array_slice($Edebd7b009e56f17, 0, 4)) . ':<br/>' . implode(':', array_slice($Edebd7b009e56f17, 4, 8)) : $Fb9da1713bff19ce['user_ip']) . '</a>';
	goto label18036;

	label18272:

	goto label18432;

	label18274:

	if ($Fb9da1713bff19ce['type'] == 5) {
		goto label18425;
	}

	$aa4e95f1ed1932a8 = '<a href=\'' . $F83b167f3cf044be[$Fb9da1713bff19ce['type']] . '?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';
	goto label18432;
	goto label18425;

	label18294:

	if (e589a4BF54a2dAD1('adv', 'edit_e2')) {
		goto label18305;
	}

	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label18097;

	label18305:

	goto label18090;

	label18307:

	if (86400 <= $f7037fc395d8fcad) {
		goto label18117;
	}

	if (3600 <= $f7037fc395d8fcad) {
		goto label18326;
	}

	$f7037fc395d8fcad = sprintf('%02dm %02ds', ($f7037fc395d8fcad / 60) % 60, $f7037fc395d8fcad % 60);
	goto label18372;

	label18326:

	goto label18101;

	label18328:

	if (isset(XUI::$rRequest['fingerprint'])) {
		goto label18538;
	}

	$E8e13b4c9d9584b6 .= '<button title="Kill Connection" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $Fb9da1713bff19ce['uuid'] . '\', \'kill\');"><i class="fas fa-hammer"></i></button>';
	if (!(E589a4bf54A2dad1('adv', 'fingerprint') && (0 < intval($Fb9da1713bff19ce['user_id'])) && ($Fb9da1713bff19ce['type'] == 1))) {
		goto label18360;
	}

	$E8e13b4c9d9584b6 .= '<button title="Fingerprint" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="modalFingerprint(' . $Fb9da1713bff19ce['user_id'] . ', \'user\');"><i class="mdi mdi-fingerprint"></i></button>';

	label18360:

	goto label18536;

	label18362:

	$E65328c8afa8e30a = 'warning';

	label18363:

	$f7037fc395d8fcad = sprintf('%02dh %02dm', $f7037fc395d8fcad / 3600, ($f7037fc395d8fcad / 60) % 60);

	label18372:

	goto label18115;

	label18374:

	$f7037fc395d8fcad = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light btn-fixed\'>CLOSED</button>';

	label18375:

	if ($Fb9da1713bff19ce['is_restreamer'] == 1) {
		goto label18398;
	}

	$ab037ad2072943df = '<i class="text-secondary fas fa-square"></i>';
	goto label18396;

	label18383:

	goto label18392;

	label18385:

	$ff5cf44f96903d64 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label18392:

	goto label18097;
	goto label18294;

	label18396:

	goto label18399;

	label18398:

	$ab037ad2072943df = '<i class="text-info fas fa-square"></i>';

	label18399:

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	goto label18328;

	label18402:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['activity_id'], $af895dada1de7cb4, $ff5cf44f96903d64, $aa4e95f1ed1932a8, $Ec379295dc7029e6, $eb0ed57b1401ceea, $Fb9da1713bff19ce['isp'], $b38e11ffdc6a3abb, $f7037fc395d8fcad, strtoupper($Fb9da1713bff19ce['container']), $ab037ad2072943df, $E8e13b4c9d9584b6];

	label18423:

	goto label18548;

	label18425:

	$aa4e95f1ed1932a8 = '<a href=\'serie?id=' . $Fb9da1713bff19ce['series_no'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';

	label18432:

	if (E589a4bF54a2dAd1('adv', 'servers')) {
		goto label18216;
	}

	goto label18212;

	label18441:

	if ($Fb9da1713bff19ce['hmac_id']) {
		goto label18081;
	}

	if ($Fb9da1713bff19ce['is_mag']) {
		goto label18099;
	}

	if ($Fb9da1713bff19ce['is_e2']) {
		goto label18294;
	}

	if (e589A4BF54A2Dad1('adv', 'users')) {
		goto label18385;
	}

	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label18383;

	label18464:

	if ($Fb9da1713bff19ce['divergence'] <= 80) {
		goto label18479;
	}

	$af895dada1de7cb4 = '<i class="text-danger fas fa-square tooltip" title="' . intval(100 - $Fb9da1713bff19ce['divergence']) . '%"></i>';
	goto label18489;

	label18479:

	$af895dada1de7cb4 = '<i class="text-warning fas fa-square tooltip" title="' . intval(100 - $Fb9da1713bff19ce['divergence']) . '%"></i>';
	goto label18489;

	label18489:

	goto label18499;

	label18491:

	$af895dada1de7cb4 = '<i class="text-success fas fa-square tooltip" title="' . intval(100 - $Fb9da1713bff19ce['divergence']) . '%"></i>';

	label18499:

	goto label18441;

	label18501:

	$f51fdbb70a8cbb4b = [1 => 'streams', 2 => 'movies', 3 => 'streams', 4 => 'radio', 5 => 'series'];
	$F83b167f3cf044be = [1 => 'stream_view', 2 => 'stream_view', 3 => 'stream_view', 4 => 'stream_view'];

	if (e589a4bf54a2DAd1('adv', $f51fdbb70a8cbb4b[$Fb9da1713bff19ce['type']])) {
		goto label18274;
	}

	$aa4e95f1ed1932a8 = $Fb9da1713bff19ce['stream_display_name'];
	goto label18272;

	label18516:

	if (e589A4BF54A2DAd1('adv', 'edit_mag')) {
		goto label18527;
	}

	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label18079;

	label18527:

	$ff5cf44f96903d64 = '<a href=\'mag?id=' . $Fb9da1713bff19ce['mag_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';
	goto label18079;

	label18536:

	goto label18545;

	label18538:

	$E8e13b4c9d9584b6 .= '<button title="Kill Connection" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $Fb9da1713bff19ce['uuid'] . '\', \'kill\', \'' . $Fb9da1713bff19ce['activity_id'] . '\');"><i class="fas fa-hammer"></i></button>';

	label18545:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label18402;

	label18548:
}

label18550:

echo json_encode($B9869413eae86beb);
exit();
goto label7681;

label18556:

$b120584763e3d117 = NULL;

label18557:
if (!($F56066ad7b074468 && $b120584763e3d117)) {
	goto label19839;
}

$cf0aab70014807af[] = '(`users_logs`.`date` >= ? AND `users_logs`.`date` <= ?)';
$B03cfeca75020c69[] = $F56066ad7b074468;
goto label19837;

label18567:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label18572:

if (0 < count($cf0aab70014807af)) {
	goto label25893;
}

$F5190fed237fabec = '';
goto label25899;
goto label25893;

label18581:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label18589:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label17186;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label17184;

label18617:

goto label1310;

label18618:
if (!(!E589A4BF54a2dAD1('adv', 'import_episodes') && !e589A4bf54A2dAd1('adv', 'mass_delete'))) {
	goto label20768;
}

exit();
goto label20768;

label18635:

if (!(0 < count($dec36723d7be7c49))) {
	goto label6281;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, `series_id` FROM `streams_episodes` WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$cb98d4eed473e4c8[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['series_id'];
}

goto label6259;

label18662:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label18689;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`panel_logs`.`log_message` LIKE ? OR `panel_logs`.`log_extra` LIKE ? OR `panel_logs`.`type` LIKE ?)';

label18689:

goto label26027;

label18690:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$a2a53f18f4f95c8b = ['`username` ' . $bc89bec2d7c7cf08 . ', `lines_activity`.`hmac_identifier`', '`streams`.`stream_display_name`', '`server_name`', '`lines_activity`.`user_agent`', '`lines_activity`.`isp`', '`lines_activity`.`user_ip`', '`lines_activity`.`date_start`', '`lines_activity`.`activity_id`', '`lines_activity`.`date_end` - `lines_activity`.`date_start`', '`lines_activity`.`container`', '`lines`.`is_restreamer`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label24451;
}

$E7dbfc96029b3745 = 0;
goto label24450;

label18734:

$B03cfeca75020c69[] = XUI::$rRequest['filter'];
goto label18741;

label18739:

$cf0aab70014807af[] = '`users`.`status` = 0';

label18741:

goto label229;

label18742:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label18769;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';

label18769:

goto label3385;

label18770:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '(`type` = 1 OR `type` = 3)';
if (!(isset(XUI::$rRequest['category_id']) && (0 < intval(XUI::$rRequest['category_id'])))) {
	goto label6762;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category_id'];
goto label6762;

label18794:

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, false, false);
goto label18807;

label18801:

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, true, true);

label18807:

goto label7844;

label18808:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label17678;
}

$B91645b8411dc88c = 'SELECT `streams_series`.`id`, `streams_series`.`title` FROM `streams_series` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label17678;
}

goto label17642;

label18848:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NULL OR `streams_servers`.`monitor_pid` <= 0) AND `streams_servers`.`on_demand` = 0)';

label18850:

goto label19321;

label18851:

$cf0aab70014807af[] = '((`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` = 1))';
goto label19321;

label18854:

if ($bc89bec2d7c7cf08) {
	goto label18869;
}

$ca8155fd3c07c1ee = XUI::$redis->zRevRangeByScore('SERVER#' . $C082ca9ed03f473c, '+inf', '-inf', [
	'limit' => [$bcfd61adc96d4b72, $Cc2b5dfe75dc164b]
]);
goto label24341;

label18869:

$ca8155fd3c07c1ee = XUI::$redis->zRangeByScore('SERVER#' . $C082ca9ed03f473c, '-inf', '+inf', [
	'limit' => [$bcfd61adc96d4b72, $Cc2b5dfe75dc164b]
]);
goto label24341;

label18882:

if ($A7d54b094ae83c95 == 'reg_users') {
	goto label347;
}

if ($A7d54b094ae83c95 == 'asns') {
	goto label18900;
}

if ($A7d54b094ae83c95 == 'series') {
	goto label1739;
}

if ($A7d54b094ae83c95 == 'episodes') {
	goto label17832;
}

if ($A7d54b094ae83c95 == 'backups') {
	goto label15725;
}

goto label21836;

label18898:

exit();

label18899:

goto label346;

label18900:

if (e589A4Bf54A2DAD1('adv', 'block_isps')) {
	goto label24825;
}

goto label24824;

label18907:

$cf0aab70014807af[] = '`server_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['server_id'];

label18913:

$cf0aab70014807af[] = '`date` >= UNIX_TIMESTAMP()-' . intval($f1dcaed925076e67['fails_per_time'] ?: 86400);
$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label7729;

label18929:
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label18945;
}

$E7dbfc96029b3745 = 0;
goto label19301;

label18945:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);
goto label19301;

label18954:

goto label18963;

label18955:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label18963:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label19771;

label18966:

if (e589A4bf54A2dAD1('adv', 'stream_errors')) {
	goto label18973;
}

exit();

label18973:

$a2a53f18f4f95c8b = ['`streams_errors`.`id`', '`streams`.`stream_display_name`', '`servers`.`server_name`', '`streams_errors`.`error`', '`streams_errors`.`date`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label6469;
}

goto label6467;

label18989:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label19070;

	label18993:

	$D8d609d5bdc92a03 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';

	label19000:

	if (!empty($Fb9da1713bff19ce['stream_icon'])) {
		goto label19119;
	}

	$B080674c55093935 = '';
	goto label19117;

	label19008:

	goto label19011;

	label19010:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square tooltip" title="Not Scanned"></i>';

	label19011:

	goto label19043;

	label19013:

	$C082ca9ed03f473c = intval($Fb9da1713bff19ce['server_id']);
	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label19169;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label19179;
	goto label19169;

	label19043:

	$b319df80382e8fa9 = '<button type="button" class="btn btn-dark bg-animate btn-xs waves-effect waves-light no-border">' . ($a9b562b640795042[$C082ca9ed03f473c][$Fb9da1713bff19ce['id']] ?: 0) . ' <i class="mdi mdi-arrow-up-thick"></i> &nbsp; ' . ($aa2402d87b97aa29[$C082ca9ed03f473c][$Fb9da1713bff19ce['id']] ?: 0) . ' <i class="mdi mdi-arrow-down-thick"></i></button>';
	$f8bd5a091fcdba80 = 'Never';
	$a9ea956d26555a47 = '<button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light\'>--</button>';
	$d5faa5f11beba133 = '<table style=\'font-size: 10px;\' class=\'table-data nowrap\' align=\'center\'><tbody><tr><td colspan=\'3\'>No information available</td></tr></tbody></table>';

	if (is_null($Fb9da1713bff19ce['ondemand_status'])) {
		goto label19296;
	}

	goto label19196;

	label19070:

	if (!$De97a60c730465cd) {
		goto label19089;
	}

	unset($Fb9da1713bff19ce['stream_source']);
	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label19167;

	label19089:

	goto label19013;

	label19091:

	if ($Fb9da1713bff19ce['ondemand_status'] == 1) {
		goto label19114;
	}

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square tooltip" title="' . (!empty($Fb9da1713bff19ce['errors']) ? '<strong>Latest Error:</strong><br/>' . str_replace('"', '\\"', $Fb9da1713bff19ce['errors']) : 'Down') . '"></i>';
	goto label19008;

	label19114:

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square tooltip" title="Ready"></i>';
	goto label19008;

	label19117:

	goto label19126;

	label19119:

	$B080674c55093935 = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Fb9da1713bff19ce['stream_icon'] . '\'><img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url=' . $Fb9da1713bff19ce['stream_icon'] . '\' /></a>';

	label19126:

	if (is_null($Fb9da1713bff19ce['ondemand_status'])) {
		goto label19010;
	}

	goto label19091;

	label19135:

	if (E589A4bF54A2daD1('adv', 'servers')) {
		goto label19146;
	}

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];
	goto label19000;

	label19146:

	goto label18993;

	label19148:

	$B9869413eae86beb['data'][] = ['<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Fb9da1713bff19ce['id'] . '</a>', $B080674c55093935, $B7bbd17ec35a49aa, $D8d609d5bdc92a03, $b9f049445aa9bd5d . ' &nbsp; ' . $b319df80382e8fa9, $a9ea956d26555a47, $d5faa5f11beba133, $f8bd5a091fcdba80];

	label19167:

	goto label19298;

	label19169:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';

	label19179:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label19232;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';
	goto label19232;

	label19196:

	if (!(0 < $Fb9da1713bff19ce['ondemand_date'])) {
		goto label19216;
	}

	$f8bd5a091fcdba80 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['ondemand_date']) . '<br/>' . date('H:i:s', $Fb9da1713bff19ce['ondemand_date']);

	label19216:

	if (!(0 < $Fb9da1713bff19ce['response'])) {
		goto label19251;
	}

	$a9ea956d26555a47 = '<button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light\'>' . number_format($Fb9da1713bff19ce['response'], 0) . ' ms</button>';
	goto label19251;

	label19232:

	$B7bbd17ec35a49aa = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['id'] . '\'><strong>' . $Fb9da1713bff19ce['stream_display_name'] . ('</strong><br><span style=\'font-size:11px;\'>' . $Dbcac322b4274e46 . '</span></a>');

	if ($Fb9da1713bff19ce['server_name']) {
		goto label19135;
	}

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label19000;
	goto label19135;

	label19251:
	if (!($Fb9da1713bff19ce['fps'] || $Fb9da1713bff19ce['video_codec'] || $Fb9da1713bff19ce['audio_codec'] || $Fb9da1713bff19ce['resolution'])) {
		goto label19296;
	}

	$d5faa5f11beba133 = '<table class=\'table-data nowrap table-data-120 text-center\' align=\'center\'>' . "\r\n" . '                            <tbody>' . "\r\n" . '                                <tr>' . "\r\n" . '                                    <td class=\'text-success\'><i class=\'mdi mdi-image-size-select-large\' data-name=\'mdi-image-size-select-large\'></i></td>' . "\r\n" . '                                    <td class=\'text-success\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td>' . "\r\n" . '                                    <td class=\'text-success\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>' . "\r\n" . '                                    <td class=\'text-success\'><i class=\'mdi mdi-clock\' data-name=\'mdi-clock\'></i></td>' . "\r\n" . '                                </tr>' . "\r\n" . '                                <tr>' . "\r\n" . '                                    <td>' . ($Fb9da1713bff19ce['resolution'] ? $Fb9da1713bff19ce['resolution'] . 'p' : 'N/A') . '</td>' . "\r\n" . '                                    <td>' . (str_replace('mpeg2video', 'mpeg2', $Fb9da1713bff19ce['video_codec']) ?: 'N/A') . '</td>' . "\r\n" . '                                    <td>' . ($Fb9da1713bff19ce['audio_codec'] ?: 'N/A') . '</td>' . "\r\n" . '                                    <td>' . (($Fb9da1713bff19ce['fps'] . ' FPS') ?: 'N/A') . '</td>' . "\r\n" . '                                </tr>' . "\r\n" . '                            </tbody>' . "\r\n" . '                        </table>';

	label19296:

	goto label19148;

	label19298:
}

label19300:

goto label26008;

label19301:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`type` = 2';
if (!(isset(XUI::$rRequest['category_id']) && (0 < intval(XUI::$rRequest['category_id'])))) {
	goto label7807;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
goto label7803;

label19321:

goto label19324;

label19322:

$cf0aab70014807af[] = '(`streams_servers`.`monitor_pid` > 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`stream_status` = 0)';

label19324:

goto label16112;

label19325:

$B91645b8411dc88c = 'SELECT `streams`.`id`, MD5(`streams`.`stream_source`) AS `source`, `streams_servers`.`to_analyze`, `streams`.`movie_properties`, `streams`.`target_container`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, `streams_series`.`title`, `streams_series`.`seasons`, `streams_series`.`id` AS `sid`, `streams_episodes`.`season_num` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` ' . $F5190fed237fabec . ' GROUP BY `streams`.`id` ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';

label19335:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label9219;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
goto label21241;

label19349:

if (0 < count($cf0aab70014807af)) {
	goto label19357;
}

$F5190fed237fabec = '';
goto label23838;

label19357:

goto label23832;

label19358:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label350;
}

foreach (range(1, 5) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label348;

label19386:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label19404:

if (0 < count($cf0aab70014807af)) {
	goto label21793;
}

$F5190fed237fabec = '';
goto label21792;

label19412:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label21701;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_icon`, `streams`.`movie_properties`, `streams_servers`.`to_analyze`, `streams`.`target_container`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL ' . $F5190fed237fabec . ' GROUP BY `streams`.`id` ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label3366;

label19446:

$B03cfeca75020c69[] = '%s:' . intval(XUI::$rRequest['server_id']) . ':%';
if (isset(XUI::$rRequest['category_id']) && (0 < strlen(XUI::$rRequest['category_id']))) {
	goto label19470;
}

$cf0aab70014807af[] = '(`streams`.`type` = 2 OR `streams`.`type` = 5)';
goto label12716;

label19470:

goto label68;

label19471:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label2182;
}

$b00d1d65528795d1 = d8C8284136938EF0();
$B91645b8411dc88c = 'SELECT `users`.`username`, `users_logs`.`id`, `users_logs`.`owner`, `users_logs`.`type`, `users_logs`.`action`, `users_logs`.`log_id`, `users_logs`.`package_id`, `users_logs`.`cost`, `users_logs`.`credits_after`, `users_logs`.`date`, `users_logs`.`deleted_info` FROM `users_logs` LEFT JOIN `users` ON `users`.`id` = `users_logs`.`owner` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2182;
}

goto label1857;

label19500:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label3359;
}

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label19520;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, MD5(`streams`.`stream_source`) AS `source`, `streams`.`movie_properties`, `streams`.`year`, `streams_servers`.`to_analyze`, `streams`.`target_container`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label25669;

label19520:

goto label25659;

label19521:

$e4829bf95c7424f6 = 'ORDER BY `streams_servers`.`server_stream_id` ASC';

label19522:

if (0 < count($cf0aab70014807af)) {
	goto label19676;
}

$F5190fed237fabec = '';
goto label19682;
goto label19676;

label19531:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label19539:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '(`is_mag` + `is_e2`) = 0';

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label7970;
}

goto label7953;

label19554:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label19562;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label19412;

label19562:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label19412;

label19568:

$a2a53f18f4f95c8b = ['`mag_events`.`send_time`', '`mag_devices`.`mac`', '`mag_events`.`event`', '`mag_events`.`msg`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label27312;
}

$E7dbfc96029b3745 = 0;
goto label27320;
goto label27312;

label19586:

goto label17891;

label19587:
if (!(!e589a4bF54a2dad1('adv', 'import_streams') && !e589a4bf54a2dAd1('adv', 'mass_delete'))) {
	goto label19603;
}

exit();

label19603:

goto label3213;

label19604:

$B03cfeca75020c69[] = XUI::$rRequest['audio'];
goto label19611;

label19609:

$cf0aab70014807af[] = '`streams_servers`.`audio_codec` IS NULL';

label19611:

goto label11262;

label19612:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_display_name'] = $Fb9da1713bff19ce['stream_display_name'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];
}

goto label22087;

label19634:

$B1e93ae2ae39e1ff = XUI::A96Ab74F1921D4ad($C98047839de3d474, true);
goto label5853;

label19640:

echo json_encode($B9869413eae86beb);
exit();

label19645:

goto label19586;

label19646:

$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_icon`', '`streams`.`stream_display_name`', '`streams_servers`.`current_source`', '`clients`', '`streams_servers`.`stream_started`', false, false, false, '`streams_servers`.`bitrate`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label19663;
}

$E7dbfc96029b3745 = 0;
goto label7933;

label19663:

goto label7925;

label19664:

goto label19673;

label19665:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label19673:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label27386;

label19676:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label19682:

if (isset(XUI::$rRequest['single'])) {
	goto label6312;
}

if (!isset(XUI::$rRequest['grouped'])) {
	goto label6311;
}

goto label6309;

label19692:

$F5190fed237fabec = '';
goto label19700;

label19694:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label19700:

goto label212;

label19701:

if (0 < intval(XUI::$rRequest['server'])) {
	goto label11977;
}

if (!(intval(XUI::$rRequest['server']) == -1)) {
	goto label19720;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` IS NULL';

label19720:

goto label11976;

label19721:

echo json_encode($B9869413eae86beb);
exit();
goto label6224;

label19727:

if (XUI::$rRequest['filter'] == 6) {
	goto label21158;
}

if (XUI::$rRequest['filter'] == 7) {
	goto label23428;
}

if (!(XUI::$rRequest['filter'] == 8)) {
	goto label19745;
}

$cf0aab70014807af[] = '(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` > UNIX_TIMESTAMP() AND `lines`.`exp_date` <= (UNIX_TIMESTAMP() + (86400*14)))';

label19745:

goto label23427;

label19746:

$B9869413eae86beb['recordsTotal'] = 0;

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label19757;
}

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` ' . $F5190fed237fabec . ';';
goto label27421;

label19757:

goto label27417;

label19758:

goto label19765;

label19759:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label19765:

if (!isset(XUI::$rRequest['single'])) {
	goto label15684;
}

goto label15682;

label19771:

$cf0aab70014807af[] = '`type` = 4';
if (!(isset(XUI::$rRequest['category_id']) && (0 < intval(XUI::$rRequest['category_id'])))) {
	goto label19792;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category_id'];

label19792:

goto label22469;

label19793:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label5358;
}

$B91645b8411dc88c = 'SELECT `users_credits_logs`.`id`, `users_credits_logs`.`target_id`, `users_credits_logs`.`admin_id`, `target`.`username` AS `target_username`, `owner`.`username` AS `owner_username`, `amount`, FROM_UNIXTIME(`date`) AS `date`, `users_credits_logs`.`reason` FROM `users_credits_logs` LEFT JOIN `users` AS `target` ON `target`.`id` = `users_credits_logs`.`target_id` LEFT JOIN `users` AS `owner` ON `owner`.`id` = `users_credits_logs`.`admin_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label5358;
}

goto label5282;

label19833:

$cf0aab70014807af[] = '`streams`.`direct_source` = 1';

label19835:

goto label23487;

label19836:

goto label23485;

label19837:

$B03cfeca75020c69[] = $b120584763e3d117;

label19839:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label6293;
}

$cf0aab70014807af[] = '`users_logs`.`owner` = ?';
goto label6289;

label19851:

if (!(0 < count($dec36723d7be7c49))) {
	goto label19881;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`server_stream_id`) AS `count` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

label19881:

goto label21467;

label19882:

goto label19885;

label19883:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 1 AND `streams_servers`.`stream_status` <> 1)';

label19885:

goto label16089;
goto label16087;

label19887:

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$fa4629d757fa3640 = $e1751a10c8f69e7b = $a393a187b7247477 = $D52a67130c4ab288 = $dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
	if (!($Fb9da1713bff19ce['channel_id'] && !in_array('\'' . $Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'] . '\'', $fa4629d757fa3640))) {
		goto label19931;
	}

	$fa4629d757fa3640[] = '\'' . $Fb9da1713bff19ce['epg_id'] . '_' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['channel_id']) . '\'';

	label19931:
}

if (!(0 < count($dec36723d7be7c49))) {
	goto label7844;
}

goto label2479;

label19941:

goto label23476;

label19942:

$cf0aab70014807af[] = '`streams`.`id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['stream_id'];
$e4829bf95c7424f6 = 'ORDER BY `streams_servers`.`server_stream_id` ASC';
goto label23476;

label19950:

if (0 < count($cf0aab70014807af)) {
	goto label19958;
}

$F5190fed237fabec = '';
goto label15064;

label19958:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label15064;

label19965:
if (!($F56066ad7b074468 && $b120584763e3d117)) {
	goto label12695;
}

$cf0aab70014807af[] = '(`users_credits_logs`.`date` >= ? AND `users_credits_logs`.`date` <= ?)';
$B03cfeca75020c69[] = $F56066ad7b074468;
$B03cfeca75020c69[] = $b120584763e3d117;
goto label12695;

label19977:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label19985;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label5774;

label19985:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label5774;

label19991:

$F771d40e8cf51e59 = f769e3F0c739D1A6('radio');
$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_icon`', '`streams`.`stream_display_name`', '`streams`.`category_id`', '`streams_servers`.`server_id`', '`streams_servers`.`stream_status`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label25934;
}

$E7dbfc96029b3745 = 0;
goto label25942;
goto label25934;

label20013:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label20022;
}

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label20022:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `lines_live` LEFT JOIN `lines` ON `lines_live`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_live`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_live`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_live`.`user_id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label12354;

label20031:

$cf0aab70014807af[] = '(`streams_servers`.`monitor_pid` > 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`stream_status` = 0)';

label20033:

if (0 < intval(XUI::$rRequest['server'])) {
	goto label22468;
}

goto label22456;

label20042:

$b62d6460eb33ea07->query('SELECT `user_id`, `device_id`, `mac` FROM `enigma2_devices` WHERE `user_id` IN (' . implode(',', $a7488241ded4637b) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$d1f284eb9d636fef[intval($Fb9da1713bff19ce['user_id'])]['device_id'] = $Fb9da1713bff19ce['device_id'];
	$d1f284eb9d636fef[intval($Fb9da1713bff19ce['user_id'])]['device_name'] = $Fb9da1713bff19ce['mac'];
}

label20073:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label20336;

	label20077:

	goto label20453;

	label20079:

	if (E589A4BF54a2Dad1('adv', 'edit_e2')) {
		goto label20443;
	}

	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label20441;

	label20090:

	$aa4e95f1ed1932a8 = '<a href=\'' . $F83b167f3cf044be[$Fb9da1713bff19ce['type']] . '?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';
	goto label20110;

	label20103:

	$aa4e95f1ed1932a8 = '<a href=\'serie?id=' . $Fb9da1713bff19ce['series_no'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';

	label20110:

	goto label20402;

	label20112:

	if (0 < strlen($Fb9da1713bff19ce['geoip_country_code'])) {
		goto label20123;
	}

	$eb4dd4cef4d22e4b = '';
	goto label20461;

	label20123:

	$eb4dd4cef4d22e4b = '<img loading=\'lazy\' src=\'assets/images/countries/' . strtolower($Fb9da1713bff19ce['geoip_country_code']) . '.png\'></img> &nbsp;';
	goto label20461;

	label20132:

	goto label20303;

	label20134:

	if ($Fb9da1713bff19ce['hmac_id']) {
		goto label20163;
	}

	if ($Fb9da1713bff19ce['is_mag']) {
		goto label20389;
	}

	if ($Fb9da1713bff19ce['is_e2']) {
		goto label20079;
	}

	goto label20367;

	label20148:

	goto label20157;

	label20150:

	$bcfd61adc96d4b72 = date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date_start']);

	label20157:

	if ($Fb9da1713bff19ce['date_end']) {
		goto label20227;
	}

	goto label20224;

	label20163:

	if (E589a4Bf54a2Dad1('adv', 'add_hmac')) {
		goto label20175;
	}

	$ff5cf44f96903d64 = 'HMAC - ' . $Fb9da1713bff19ce['hmac_identifier'];
	goto label20200;

	label20175:

	goto label20193;

	label20177:

	$f7037fc395d8fcad = '<button type=\'button\' class=\'btn btn-' . $E65328c8afa8e30a . ' btn-xs waves-effect waves-light btn-fixed\'>' . $f7037fc395d8fcad . '</button>';

	if ($Fb9da1713bff19ce['is_restreamer'] == 1) {
		goto label20283;
	}

	$ab037ad2072943df = '<i class="text-secondary fas fa-square"></i>';
	goto label20284;
	goto label20283;

	label20193:

	$ff5cf44f96903d64 = '<a href=\'hmac?id=' . $Fb9da1713bff19ce['hmac_id'] . '\'>HMAC - ' . $Fb9da1713bff19ce['hmac_identifier'] . '</a>';

	label20200:

	$f51fdbb70a8cbb4b = [1 => 'streams', 2 => 'movies', 3 => 'streams', 4 => 'radio', 5 => 'series'];
	$F83b167f3cf044be = [1 => 'stream_view', 2 => 'stream_view', 3 => 'stream_view', 4 => 'stream_view'];
	goto label20204;

	label20204:

	if (E589a4bF54a2DAd1('adv', $f51fdbb70a8cbb4b[$Fb9da1713bff19ce['type']])) {
		goto label20217;
	}

	$aa4e95f1ed1932a8 = $Fb9da1713bff19ce['stream_display_name'];
	goto label20402;

	label20217:

	if ($Fb9da1713bff19ce['type'] == 5) {
		goto label20103;
	}

	goto label20090;

	label20224:

	$e7d4a79fdee9a1a0 = '';
	goto label20234;

	label20227:

	$e7d4a79fdee9a1a0 = date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date_end']);

	label20234:

	goto label20415;

	label20236:

	$Ec379295dc7029e6 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';

	label20243:
	if (!((0 < $Fb9da1713bff19ce['proxy_id']) && isset($a080f5083618911e[$Fb9da1713bff19ce['proxy_id']]))) {
		goto label20259;
	}

	$Ec379295dc7029e6 .= '<br/><small>(via ' . $a080f5083618911e[$Fb9da1713bff19ce['proxy_id']]['server_name'] . ')</small>';

	label20259:

	goto label20112;

	label20261:

	$f7037fc395d8fcad = sprintf('%02dm %02ds', ($f7037fc395d8fcad / 60) % 60, $f7037fc395d8fcad % 60);
	goto label20332;

	label20272:

	if (14400 < $f7037fc395d8fcad) {
		goto label20458;
	}

	if (!(43200 < $f7037fc395d8fcad)) {
		goto label20456;
	}

	goto label20455;

	label20283:

	$ab037ad2072943df = '<i class="text-info fas fa-square"></i>';

	label20284:

	$B9869413eae86beb['data'][] = [$ff5cf44f96903d64, $aa4e95f1ed1932a8, $Ec379295dc7029e6, $eb0ed57b1401ceea, $Fb9da1713bff19ce['isp'], $b38e11ffdc6a3abb, $bcfd61adc96d4b72, $e7d4a79fdee9a1a0, $f7037fc395d8fcad, strtoupper($Fb9da1713bff19ce['container']), $ab037ad2072943df];

	label20303:

	goto label20533;

	label20305:

	$f7037fc395d8fcad = sprintf('%02dd %02dh', $f7037fc395d8fcad / 86400, ($f7037fc395d8fcad / 3600) % 24);
	$E65328c8afa8e30a = 'danger';

	label20315:

	if (!$Fb9da1713bff19ce['is_restreamer']) {
		goto label20177;
	}

	$E65328c8afa8e30a = 'success';
	goto label20177;

	label20323:

	$f7037fc395d8fcad = sprintf('%02dh %02dm', $f7037fc395d8fcad / 3600, ($f7037fc395d8fcad / 60) % 60);

	label20332:

	goto label20315;

	label20334:

	goto label20305;

	label20336:

	if (!isset($d1f284eb9d636fef[$Fb9da1713bff19ce['user_id']])) {
		goto label20349;
	}

	$Fb9da1713bff19ce = array_merge($Fb9da1713bff19ce, $d1f284eb9d636fef[$Fb9da1713bff19ce['user_id']]);

	label20349:

	if (!$De97a60c730465cd) {
		goto label20134;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label20132;

	label20367:

	if (e589A4BF54a2DaD1('adv', 'users')) {
		goto label20378;
	}

	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label20077;

	label20378:

	$ff5cf44f96903d64 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';
	goto label20077;

	label20387:

	goto label20529;

	label20389:

	if (E589A4Bf54a2dAd1('adv', 'edit_mag')) {
		goto label20519;
	}

	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label20529;
	goto label20519;

	label20402:

	if (E589A4bF54A2DAD1('adv', 'servers')) {
		goto label20413;
	}

	$Ec379295dc7029e6 = $Fb9da1713bff19ce['server_name'];
	goto label20243;

	label20413:

	goto label20236;

	label20415:

	$eb0ed57b1401ceea = trim(explode('(', $Fb9da1713bff19ce['user_agent'])[0]);
	$f7037fc395d8fcad = $Fb9da1713bff19ce['date_end'] - $Fb9da1713bff19ce['date_start'];
	$E65328c8afa8e30a = 'success';

	if (86400 <= $f7037fc395d8fcad) {
		goto label20334;
	}

	if (3600 <= $f7037fc395d8fcad) {
		goto label20272;
	}

	goto label20261;

	label20441:

	goto label20453;

	label20443:

	$ff5cf44f96903d64 = '<a href=\'enigma?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '<br/>' . $Fb9da1713bff19ce['device_name'] . '</a>';

	label20453:

	goto label20387;

	label20455:

	$E65328c8afa8e30a = 'danger';

	label20456:

	goto label20323;

	label20458:

	$E65328c8afa8e30a = 'warning';
	goto label20323;

	label20461:

	if ($Fb9da1713bff19ce['user_ip']) {
		goto label20468;
	}

	$b38e11ffdc6a3abb = '';
	goto label20512;

	label20468:

	goto label20470;

	label20470:

	$Edebd7b009e56f17 = explode(':', $Fb9da1713bff19ce['user_ip']);
	$b38e11ffdc6a3abb = $eb4dd4cef4d22e4b . '<a onClick="whois(\'' . $Fb9da1713bff19ce['user_ip'] . '\');" href=\'javascript: void(0);\'>' . (1 < count($Edebd7b009e56f17) ? implode(':', array_slice($Edebd7b009e56f17, 0, 4)) . ':<br/>' . implode(':', array_slice($Edebd7b009e56f17, 4, 8)) : $Fb9da1713bff19ce['user_ip']) . '</a>';

	label20512:

	if ($Fb9da1713bff19ce['date_start']) {
		goto label20150;
	}

	$bcfd61adc96d4b72 = '';
	goto label20148;

	label20519:

	$ff5cf44f96903d64 = '<a href=\'mag?id=' . $Fb9da1713bff19ce['device_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '<br/><strong>MAC: </strong> <span class=\'text-secondary\'>' . $Fb9da1713bff19ce['device_name'] . '</span></a>';

	label20529:

	goto label20200;
	goto label20163;

	label20533:
}

goto label8018;

label20536:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams_series` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label281;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label286;
goto label281;

label20553:
if (!($F56066ad7b074468 && $b120584763e3d117)) {
	goto label20564;
}

$cf0aab70014807af[] = '(`streams_errors`.`date` >= ? AND `streams_errors`.`date` <= ?)';
$B03cfeca75020c69[] = $F56066ad7b074468;
$B03cfeca75020c69[] = $b120584763e3d117;

label20564:

goto label10023;

label20565:

$b62d6460eb33ea07->query('SELECT `member_id`, COUNT(`id`) AS `e2_lines` FROM `lines` WHERE `member_id` IN (' . implode(',', $ec80784a08a705f6) . ') AND `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 1 GROUP BY `member_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$E59d0debc75e7be8[$Fb9da1713bff19ce['member_id']]['e2_lines'] = $Fb9da1713bff19ce['e2_lines'];
}

label20585:

goto label4862;

label20586:

exit();

label20587:

$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_display_name`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label19665;
}

$E7dbfc96029b3745 = 0;
goto label19664;

label20604:

if (!$F1a9d7720adbf27a) {
	goto label3694;
}

$D5c525522fef1d4a = [];
$b62d6460eb33ea07->query('SELECT MD5(`stream_source`) AS `source`, COUNT(`stream_source`) AS `count` FROM `streams` WHERE `stream_source` IN (SELECT `stream_source` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ')) GROUP BY `stream_source` HAVING COUNT(`stream_source`) > 1;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D5c525522fef1d4a[$Fb9da1713bff19ce['source']] = $Fb9da1713bff19ce['count'];
}

goto label3694;

label20632:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label17513;
}

$B91645b8411dc88c = 'SELECT `blocked_asns`.`id`, `blocked_asns`.`asn`, `blocked_asns`.`isp`, `blocked_asns`.`domain`, `blocked_asns`.`country`, `blocked_asns`.`num_ips`, `blocked_asns`.`type`, `blocked_asns`.`blocked` FROM `blocked_asns` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label17417;

label20666:

echo json_encode($B9869413eae86beb);
exit();

label20671:

goto label7505;
goto label24261;

label20673:

$F5190fed237fabec = '';
goto label20681;

label20675:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label20681:

goto label174;

label20682:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`server_type` = 0';
$cf0aab70014807af[] = '`id` IN (' . implode(',', array_map('intval', XUI::$rServers[XUI::$rRequest['proxy_id']]['parent_id'])) . ')';

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label593;
}

goto label576;

label20714:

require_once '../www/init.php';

label20715:

if (PHP_ERRORS) {
	goto label9253;
}
if (!(empty($_SERVER['HTTP_X_REQUESTED_WITH']) || (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest'))) {
	goto label9253;
}

goto label9252;

label20732:

if (!(0 < strlen(XUI::$rRequest['resolution']))) {
	goto label1071;
}

$cf0aab70014807af[] = '`streams_servers`.`resolution` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['resolution']) ?: NULL;
goto label1071;

label20753:

if (0 < count($cf0aab70014807af)) {
	goto label20761;
}

$F5190fed237fabec = '';
goto label1218;

label20761:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label1218;

label20768:

$a2a53f18f4f95c8b = ['`streams`.`id`', false, '`streams`.`stream_display_name`', '`streams_servers`.`server_id`', '`streams_servers`.`stream_status`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label7513;
}

$E7dbfc96029b3745 = 0;
goto label7521;
goto label7513;

label20786:

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams_servers`.`stream_id`, `streams`.`type`, `streams`.`stream_icon`, `streams`.`adaptive_link`, `streams`.`title_sync`, `streams_servers`.`cchannel_rsources`, `streams`.`stream_source`, `streams`.`stream_display_name`, `streams`.`tv_archive_duration`, `streams`.`tv_archive_server_id`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`cc_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, `streams`.`epg_id`, `streams`.`channel_id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL ' . $F5190fed237fabec . ' GROUP BY `streams`.`id` ' . $e4829bf95c7424f6 . ', -`stream_started` DESC LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';

label20796:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label12549;
}

goto label19887;

label20807:

foreach (array_reverse(F8aF02a007c4B90C()) as $aae4eee56abeed7c) {
	$B088125f4a2f342c[$aae4eee56abeed7c['name']] = $aae4eee56abeed7c;
}

label20819:

$B9869413eae86beb = [
	'draw'            => intval(XUI::$rRequest['draw']),
	'recordsTotal'    => count($F3f66625345f16f6),
	'recordsFiltered' => count($F3f66625345f16f6),
	'data'            => []
];
$C25c0917c2df834a = [];
goto label773;

label20837:

$cf0aab70014807af[] = '`streams`.`transcode_profile_id` > 0';

label20839:

goto label24910;

label20840:

$cf0aab70014807af[] = '`streams`.`title_sync` IS NOT NULL';
goto label24910;

label20843:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label19300;
}

$B91645b8411dc88c = 'SELECT `ondemand_check`.`status` AS `ondemand_status`, `ondemand_check`.`date` AS `ondemand_date`, `ondemand_check`.`errors`, `ondemand_check`.`response`, `ondemand_check`.`resolution`, `ondemand_check`.`fps`, `ondemand_check`.`video_codec`, `ondemand_check`.`audio_codec`, `streams`.`id`, `streams`.`type`, `streams`.`stream_icon`, `streams`.`stream_source`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`llod`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` LEFT JOIN `ondemand_check` ON `ondemand_check`.`id` = `streams_servers`.`ondemand_check` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label19300;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
goto label5440;

label20872:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label20877:

if (0 < count($cf0aab70014807af)) {
	goto label15316;
}

$F5190fed237fabec = '';
goto label15322;
goto label15316;

label20886:

$E7dbfc96029b3745 = 0;
goto label20896;

label20888:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label20896:

goto label7319;

label20897:

exit();

label20898:

$a2a53f18f4f95c8b = ['`panel_logs`.`date`', '`servers`.`server_name`', '`panel_logs`.`type`', '`panel_logs`.`log_message`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label25608;
}

$E7dbfc96029b3745 = 0;
goto label25607;

label20915:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label15463;
}

$B91645b8411dc88c = 'SELECT `mag_devices`.`mag_id`, `enigma2_devices`.`device_id`, `lines`.`is_e2`, `lines`.`is_mag`, `lines_live`.`activity_id`, `lines_live`.`hmac_id`, `lines_live`.`hmac_identifier`, `lines_live`.`proxy_id`, `lines_live`.`divergence`, `lines_live`.`user_id`, `lines_live`.`stream_id`, `streams`.`series_no`, `lines`.`is_restreamer`, `lines_live`.`isp`, `lines_live`.`server_id`, `lines_live`.`user_agent`, `lines_live`.`user_ip`, `lines_live`.`container`, `lines_live`.`pid`, `lines_live`.`uuid`, `lines_live`.`date_start`, `lines_live`.`geoip_country_code`, IF(`lines`.`is_mag`, `mag_devices`.`mac`, IF(`lines`.`is_e2`, `enigma2_devices`.`mac`, `lines`.`username`)) AS `username`, `streams`.`stream_display_name`, `streams`.`type`, (SELECT `server_name` FROM `servers` WHERE `id` = `lines_live`.`server_id`) AS `server_name` FROM `lines_live` LEFT JOIN `lines` ON `lines_live`.`user_id` = `lines`.`id` LEFT JOIN `streams` ON `lines_live`.`stream_id` = `streams`.`id` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines_live`.`user_id` LEFT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines_live`.`user_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label15454;

label20949:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label20954:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label9811;
}

$B91645b8411dc88c = 'SELECT `users`.`member_group_id`, `users`.`id`, `users`.`status`, `users`.`notes`, `users`.`owner_id`, `users`.`credits`, `users`.`username`, `users`.`email`, `users`.`ip`, FROM_UNIXTIME(`users`.`date_registered`) AS `date_registered`, FROM_UNIXTIME(`users`.`last_login`) AS `last_login`, `users`.`status` FROM `users` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label3235;

label20984:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label27333;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label2434;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label16596;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label7728;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label7725;
}

goto label22088;

label21014:

if (XUI::$rSettings['redis_handler']) {
	goto label7289;
}

$b62d6460eb33ea07->query('SELECT `lines_live`.`user_id`, `lines_live`.`stream_id`, `lines_live`.`date_start` AS `last_active`, `streams`.`stream_display_name` FROM `lines_live` LEFT JOIN `streams` ON `streams`.`id` = `lines_live`.`stream_id` INNER JOIN (SELECT `user_id`, MAX(`date_start`) AS `ts` FROM `lines_live` GROUP BY `user_id`) `maxt` ON (`lines_live`.`user_id` = `maxt`.`user_id` AND `lines_live`.`date_start` = `maxt`.`ts`) WHERE `lines_live`.`user_id` IN (' . implode(',', $C98047839de3d474) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_display_name'] = $Fb9da1713bff19ce['stream_display_name'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['stream_id'] = $Fb9da1713bff19ce['stream_id'];
	$f4e5ef13910179a5[$Fb9da1713bff19ce['user_id']]['last_active'] = $Fb9da1713bff19ce['last_active'];
}

goto label5503;
goto label7289;

label21050:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label21068:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `servers` ' . $F5190fed237fabec . ';';
goto label12195;

label21079:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label21085:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label24704;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;
goto label24704;

label21108:
if ($C082ca9ed03f473c || $ee6d1fc5d801b43f) {
	goto label7781;
}

if ($bc89bec2d7c7cf08) {
	goto label5798;
}

$ca8155fd3c07c1ee = XUI::$redis->zRevRangeByScore('LINE#' . $f7107e3a92443147, '+inf', '-inf', [
	'limit' => [$bcfd61adc96d4b72, $Cc2b5dfe75dc164b]
]);
goto label5810;
goto label5798;

label21128:

$a2a53f18f4f95c8b = ['`streams_series`.`id`', '`streams_series`.`title`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label21145;
}

$E7dbfc96029b3745 = 0;
goto label6701;

label21145:

goto label6693;

label21146:

$cf0aab70014807af[] = 'MD5(`streams`.`stream_source`) = ?';
$B03cfeca75020c69[] = XUI::$rRequest['source_id'];
$e4829bf95c7424f6 = 'ORDER BY `streams_servers`.`server_stream_id` ASC';

label21153:

goto label19941;

label21154:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 1 AND `streams_servers`.`stream_status` <> 1)';

label21156:

goto label21979;

label21157:

goto label21977;

label21158:

$cf0aab70014807af[] = '`lines`.`is_restreamer` = 1';

label21160:

goto label24882;

label21161:

goto label24880;

label21162:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label21168:

if (!isset(XUI::$rRequest['refresh'])) {
	goto label17599;
}

goto label17579;

label21174:

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label21192:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `blocked_asns` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label3414;

label21201:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label3208;
}

$B91645b8411dc88c = 'SELECT `lines`.`id`, `lines`.`username`, `lines`.`member_id`, `lines`.`last_activity`, `lines`.`last_activity_array`, `enigma2_devices`.`mac`, `enigma2_devices`.`public_ip`, `enigma2_devices`.`device_id`, `lines`.`exp_date`, `lines`.`admin_enabled`, `lines`.`enabled`, `lines`.`admin_notes`, `lines`.`reseller_notes`, `lines`.`max_connections`, `lines`.`is_trial`, (SELECT count(*) FROM `lines_live` WHERE `lines`.`id` = `lines_live`.`user_id` AND `hls_end` = 0) AS `active_connections` FROM `lines` RIGHT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label3208;
}

goto label22320;

label21241:

$D52a67130c4ab288 = $dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($dec36723d7be7c49))) {
	goto label8243;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`server_stream_id`) AS `count` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`;');
goto label6164;

label21271:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label21279;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label21926;

label21279:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label21926;

label21285:

$B9869413eae86beb['recordsTotal'] = 0;
goto label21293;

label21288:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label21293:

goto label12555;

label21294:

$cf0aab70014807af[] = '(`streams_series`.`id` LIKE ? OR `streams_series`.`title` LIKE ?)';

label21296:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label22163;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label22158;

label21314:

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_display_name`, `streams`.`category_id` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label16270;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label21340;

	label21340:

	if (!$De97a60c730465cd) {
		goto label21358;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label21404;

	label21358:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	goto label21366;

	label21366:

	if (0 < strlen(XUI::$rRequest['category_id'])) {
		goto label21383;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label21406;

	label21383:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category_id'])]['category_name'] ?: 'No Category';
	goto label21406;

	label21395:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $E8e13b4c9d9584b6];

	label21404:

	goto label21436;

	label21406:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label21421;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label21421:

	$E8e13b4c9d9584b6 = '<div class="btn-group"><button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="radios" type="button" style="display: none;" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(' . $Fb9da1713bff19ce['id'] . ', \'radios\');"><i class="mdi mdi-minus"></i></button>' . "\r\n" . '                <button data-id="' . $Fb9da1713bff19ce['id'] . '" data-type="radios" type="button" style="display: none;" class="btn-add btn btn-success waves-effect waves-success btn-xs" onClick="toggleBouquet(' . $Fb9da1713bff19ce['id'] . ', \'radios\');"><i class="mdi mdi-plus"></i></button></div>';
	goto label21395;

	label21436:
}

goto label16270;

label21439:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label21466;
}

foreach (range(1, 7) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`lines_logs`.`client_status` LIKE ? OR `lines_logs`.`query_string` LIKE ? OR FROM_UNIXTIME(`date`) LIKE ? OR `lines_logs`.`user_agent` LIKE ? OR `lines_logs`.`ip` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `lines`.`username` LIKE ?)';

label21466:

goto label6000;

label21467:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label21515;

	label21471:

	goto label21474;

	label21473:

	$a22fa0d1973a0b0e = 5;

	label21474:

	goto label21573;

	label21476:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $B080674c55093935, $Fb9da1713bff19ce['stream_display_name'], $Dbcac322b4274e46, $D8d609d5bdc92a03, $f7d55d79e2700f0d[$a22fa0d1973a0b0e]];

	label21488:

	goto label21699;

	label21490:

	goto label21655;

	label21492:
	if ($Fb9da1713bff19ce['pid'] && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label21543;
	}

	$a22fa0d1973a0b0e = 3;
	goto label21541;

	label21503:

	$B080674c55093935 = '';
	goto label21513;

	label21506:

	$B080674c55093935 = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Fb9da1713bff19ce['stream_icon'] . '\'><img loading=\'lazy\' src=\'resize?maxw=96&maxh=32&url=' . $Fb9da1713bff19ce['stream_icon'] . '\' /></a>';

	label21513:

	goto label21476;

	label21515:

	if (!$De97a60c730465cd) {
		goto label21533;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label21488;

	label21533:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	goto label21625;

	label21541:

	goto label21655;

	label21543:

	if (intval($Fb9da1713bff19ce['stream_status']) == 2) {
		goto label21654;
	}

	$a22fa0d1973a0b0e = 1;
	goto label21655;
	goto label21654;

	label21556:

	$a22fa0d1973a0b0e = -1;
	goto label21474;

	label21559:

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label21473;
	}

	if ($Fb9da1713bff19ce['monitor_pid']) {
		goto label21492;
	}

	goto label21584;

	label21573:

	if ($Fb9da1713bff19ce['server_name']) {
		goto label21580;
	}

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label21611;

	label21580:

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];
	goto label21598;

	label21584:

	if (intval($Fb9da1713bff19ce['on_demand']) == 1) {
		goto label21595;
	}

	$a22fa0d1973a0b0e = 0;
	goto label21490;

	label21595:

	$a22fa0d1973a0b0e = 4;
	goto label21490;

	label21598:

	if (!(1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']])) {
		goto label21611;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>+ ' . ($D52a67130c4ab288[$Fb9da1713bff19ce['id']] - 1) . '</button>';

	label21611:
	if ((0 < strlen($Fb9da1713bff19ce['stream_icon'])) && XUI::$rSettings['show_images']) {
		goto label21506;
	}

	goto label21503;

	label21625:

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label21642;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label21657;

	label21642:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';
	goto label21657;

	label21654:

	$a22fa0d1973a0b0e = 2;

	label21655:

	goto label21471;

	label21657:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label21672;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label21672:

	$Bd92fffa215178e4 = 0;
	goto label21675;

	label21675:

	$a22fa0d1973a0b0e = 0;

	if (!(0 < intval($Fb9da1713bff19ce['stream_started']))) {
		goto label21693;
	}

	$Bd92fffa215178e4 = time() - intval($Fb9da1713bff19ce['stream_started']);

	label21693:

	if ($Fb9da1713bff19ce['server_id']) {
		goto label21559;
	}

	goto label21556;

	label21699:
}

label21701:

echo json_encode($B9869413eae86beb);
goto label11214;

label21706:

goto label21713;

label21707:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label21713:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label27481;
}

goto label27476;

label21718:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label21723:

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label6946;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_display_name`, `streams`.`category_id`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `lines_live`.`hls_end` = 0) AS `active_count` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label24655;

label21743:

if (!(0 < count($C98047839de3d474))) {
	goto label5503;
}

$b62d6460eb33ea07->query('SELECT `users`.`username`, `lines`.`id` FROM `users` LEFT JOIN `lines` ON `lines`.`member_id` = `users`.`id` WHERE `lines`.`id` IN (' . implode(',', $C98047839de3d474) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$f4e5ef13910179a5[$Fb9da1713bff19ce['id']]['owner_name'] = $Fb9da1713bff19ce['username'];
}

goto label21014;

label21771:

goto label21777;

label21772:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label21777:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);
goto label17514;

label21792:

goto label21799;

label21793:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label21799:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
goto label5470;

label21804:

goto label21807;

label21805:

$cf0aab70014807af[] = '(`streams_servers`.`monitor_pid` > 0 AND `streams_servers`.`pid` > 0)';

label21807:

goto label12258;

label21808:

goto label21811;

label21809:

$cf0aab70014807af[] = '`streams`.`tv_archive_server_id` > 0 AND `streams`.`tv_archive_duration` > 0';

label21811:

goto label7982;
goto label7980;

label21813:
if (!(!$db0a61ef32b89a27['is_admin'] || !e589a4Bf54A2dAd1('adv', 'bouquets'))) {
	goto label21826;
}

exit();

label21826:

$F771d40e8cf51e59 = f769e3F0C739D1a6('movie');
$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_display_name`', false, false];
goto label18929;

label21832:

goto label21835;

label21833:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 0 AND `streams_servers`.`stream_status` <> 1)';

label21835:

goto label22298;

label21836:

if ($A7d54b094ae83c95 == 'watch_output') {
	goto label5190;
}

if ($A7d54b094ae83c95 == 'mysql_syslog') {
	goto label12061;
}

if ($A7d54b094ae83c95 == 'panel_logs') {
	goto label12047;
}

if ($A7d54b094ae83c95 == 'login_logs') {
	goto label5364;
}

if ($A7d54b094ae83c95 == 'queue') {
	goto label12613;
}

goto label6141;

label21852:

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams_servers`.`stream_id`, `streams`.`type`, `streams`.`stream_icon`, `streams`.`adaptive_link`, `streams`.`title_sync`, `streams_servers`.`cchannel_rsources`, `streams`.`stream_source`, `streams`.`stream_display_name`, `streams`.`tv_archive_duration`, `streams`.`tv_archive_server_id`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`cc_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, `streams`.`epg_id`, `streams`.`channel_id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL ' . $F5190fed237fabec . ' GROUP BY `streams`.`id` ' . $e4829bf95c7424f6 . ', -`stream_started` DESC LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label2432;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$D52a67130c4ab288 = $dec36723d7be7c49 = [];
goto label12075;

label21878:

$cf0aab70014807af[] = '`streams_series`.`id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['series'];

label21884:

if (!isset(XUI::$rRequest['refresh'])) {
	goto label23817;
}

$cf0aab70014807af = ['`streams`.`id` IN (' . implode(',', array_map('intval', explode(',', XUI::$rRequest['refresh']))) . ')'];
goto label23815;

label21908:

$a2a53f18f4f95c8b = ['`providers`.`name`', '`providers_streams`.`stream_icon`', '`providers_streams`.`stream_display_name`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label5887;
}

$E7dbfc96029b3745 = 0;
goto label5895;
goto label5887;

label21926:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label1738;
}

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_display_name` FROM `streams` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label1696;

label21960:

goto label21967;

label21961:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label21967:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `providers_streams` LEFT JOIN `providers` ON `providers`.`id` = `providers_streams`.`provider_id` ' . $F5190fed237fabec . ';';
goto label7889;

label21972:

goto label21976;

label21973:

$cf0aab70014807af[] = '`streams`.`id` IN (SELECT MIN(`id`) FROM `streams` WHERE `type` = 2 GROUP BY `stream_source` HAVING COUNT(`stream_source`) > 1)';
$F1a9d7720adbf27a = true;

label21976:

goto label25929;

label21977:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 0 AND `streams_servers`.`stream_status` <> 1)';

label21979:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label17085;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label17080;

label21997:

goto label22006;

label21998:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label22006:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label3536;

label22009:

goto label22012;

label22010:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` = 2)';

label22012:

goto label6070;

label22013:

if (!(XUI::$rRequest['filter'] == 4)) {
	goto label22021;
}

$cf0aab70014807af[] = '`streams`.`transcode_profile_id` > 0';

label22021:

goto label9287;

label22022:

goto label9285;

label22023:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label12235;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08 . ', `streams_series`.`id` ASC';
goto label12235;

label22047:

$F5190fed237fabec = '';
goto label22055;

label22049:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label22055:

goto label9816;

label22056:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label22062:

if (!isset(XUI::$rRequest['refresh'])) {
	goto label25883;
}

goto label25863;

label22068:

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $Fd10d59f87b19e71) {
	$f4e5ef13910179a5[$f7107e3a92443147]['stream_display_name'] = $b42f717d234fde64[$Fd10d59f87b19e71['stream_id']];
	$f4e5ef13910179a5[$f7107e3a92443147]['stream_id'] = $Fd10d59f87b19e71['stream_id'];
	$f4e5ef13910179a5[$f7107e3a92443147]['last_active'] = $Fd10d59f87b19e71['date_start'];
}

unset($B692d6e1f0cf1f67);

label22087:

goto label6484;

label22088:

if (XUI::$rRequest['filter'] == 5) {
	goto label9873;
}

if (XUI::$rRequest['filter'] == 6) {
	goto label27496;
}

if (XUI::$rRequest['filter'] == 7) {
	goto label3518;
}

if (!(XUI::$rRequest['filter'] == 8)) {
	goto label3517;
}

$cf0aab70014807af[] = '`streams`.`transcode_profile_id` > 0';
goto label3517;

label22112:

$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label22126:

if (0 < count($cf0aab70014807af)) {
	goto label7792;
}

$F5190fed237fabec = '';
goto label7791;

label22134:

$cf0aab70014807af[] = '`lines`.`member_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label22140:

if (0 < count($cf0aab70014807af)) {
	goto label5930;
}

$F5190fed237fabec = '';
goto label5929;

label22148:

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label22157;
}

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ';';
goto label5491;

label22157:

goto label5487;

label22158:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label22163:

if (0 < count($cf0aab70014807af)) {
	goto label6790;
}

$F5190fed237fabec = '';
goto label6796;
goto label6790;

label22172:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label22199;
}

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams_series`.`id` LIKE ? OR `streams_series`.`title` LIKE ? OR `streams_series`.`release_date` LIKE ?)';

label22199:

goto label17613;

label22200:
if (!(!e589A4Bf54A2dAD1('adv', 'radio') && !E589a4bF54A2dAd1('adv', 'mass_edit_radio'))) {
	goto label22216;
}

exit();

label22216:

$F771d40e8cf51e59 = F769E3F0C739D1a6('radio');
goto label24462;

label22221:

goto label22224;

label22222:

$cf0aab70014807af[] = '`streams`.`type` IN (1,3)';

label22224:

goto label93;

label22225:

if (!(0 < strlen(XUI::$rRequest['stream']))) {
	goto label22240;
}

$cf0aab70014807af[] = '`lines_activity`.`stream_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['stream'];

label22240:

if (!(0 < strlen(XUI::$rRequest['user']))) {
	goto label676;
}

goto label670;

label22250:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label17848;
}

$c5feeca020e7bf5c = [];
$b62d6460eb33ea07->query('SELECT `ip` FROM `blocked_ips`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$c5feeca020e7bf5c[] = $Fb9da1713bff19ce['ip'];
}

goto label26878;

label22283:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label22289:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `mysql_syslog` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label19977;

label22298:

if (!(0 < strlen(XUI::$rRequest['audio']))) {
	goto label5272;
}

if (XUI::$rRequest['audio'] == -1) {
	goto label5270;
}

$cf0aab70014807af[] = '`streams_servers`.`audio_codec` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['audio'];
goto label5272;
goto label5270;

label22320:

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$B12f177002ce1b47 = $f4e5ef13910179a5 = $C98047839de3d474 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label22363;

	label22330:

	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])]['stream_id'] = $E4fc21fdcc2ed803['stream_id'];
	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])]['last_active'] = $E4fc21fdcc2ed803['date_end'];

	label22346:

	goto label22391;

	label22348:

	if (!$Fb9da1713bff19ce['last_activity']) {
		goto label22359;
	}

	$B12f177002ce1b47[] = intval($Fb9da1713bff19ce['last_activity']);

	label22359:

	goto label22346;

	label22361:

	goto label22330;

	label22363:

	if (!$Fb9da1713bff19ce['id']) {
		goto label22380;
	}

	$C98047839de3d474[] = intval($Fb9da1713bff19ce['id']);
	$f4e5ef13910179a5[intval($Fb9da1713bff19ce['id'])] = ['owner_name' => NULL, 'stream_display_name' => NULL, 'stream_id' => NULL, 'last_active' => NULL];

	label22380:

	if ($E4fc21fdcc2ed803 = json_decode($Fb9da1713bff19ce['last_activity_array'], true)) {
		goto label22361;
	}

	goto label22348;

	label22391:
}

if (!(0 < count($C98047839de3d474))) {
	goto label17765;
}

goto label2445;

label22401:

echo json_encode($B9869413eae86beb);
exit();

label22406:

goto label4997;

label22407:

$B91645b8411dc88c = 'SELECT `streams`.`id`, `streams`.`stream_icon`, `streams`.`movie_properties`, `streams_servers`.`to_analyze`, `streams`.`target_container`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL ' . $F5190fed237fabec . ' GROUP BY `streams`.`id` ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';

label22417:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label11182;
}

goto label9941;

label22428:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label22450;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label22450:

goto label17731;

label22451:

goto label22454;

label22452:

$cf0aab70014807af[] = '`lines`.`is_mag` = 1';

label22454:

goto label3687;
goto label3685;

label22456:

if (!(intval(XUI::$rRequest['server']) == -1)) {
	goto label22467;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` IS NULL';

label22467:

goto label7352;

label22468:

goto label7343;

label22469:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label22496;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ?)';

label22496:

goto label15207;

label22497:

$b62d6460eb33ea07->query('SELECT `member_id`, COUNT(`id`) AS `user_lines` FROM `lines` WHERE `member_id` IN (' . implode(',', $ec80784a08a705f6) . ') AND `lines`.`is_mag` = 0 AND `lines`.`is_e2` = 0 GROUP BY `member_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$E59d0debc75e7be8[$Fb9da1713bff19ce['member_id']]['user_lines'] = $Fb9da1713bff19ce['user_lines'];
}

$b62d6460eb33ea07->query('SELECT `member_id`, COUNT(`id`) AS `mag_lines` FROM `lines` WHERE `member_id` IN (' . implode(',', $ec80784a08a705f6) . ') AND `lines`.`is_mag` = 1 AND `lines`.`is_e2` = 0 GROUP BY `member_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$E59d0debc75e7be8[$Fb9da1713bff19ce['member_id']]['mag_lines'] = $Fb9da1713bff19ce['mag_lines'];
}

goto label20565;

label22538:

$cf0aab70014807af[] = '`streams_servers`.`audio_codec` IS NULL';

label22540:

if (!(0 < strlen(XUI::$rRequest['video']))) {
	goto label20732;
}

if (XUI::$rRequest['video'] == -1) {
	goto label3533;
}

goto label3526;

label22555:

if (!(intval(XUI::$rRequest['server']) == -1)) {
	goto label22566;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` IS NULL';

label22566:

goto label5055;

label22567:

goto label5046;

label22568:

$cf0aab70014807af[] = '`watch_logs`.`type` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['type'];

label22574:

if (!(0 < strlen(XUI::$rRequest['status']))) {
	goto label7374;
}

$cf0aab70014807af[] = '`watch_logs`.`status` = ?';
goto label7370;

label22586:

if (isset(XUI::$rRequest['api_key'])) {
	goto label4938;
}
if (($_SERVER['REMOTE_ADDR'] == '127.0.0.1') && isset(XUI::$rRequest['api_user_id'])) {
	goto label12758;
}

if (isset($_SESSION['hash'])) {
	goto label3343;
}

echo json_encode($B9869413eae86beb);
exit();
goto label3342;

label22609:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label22614:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label27469;
}

$B91645b8411dc88c = 'SELECT `id`, `server_name`, `server_ip` FROM `servers` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
goto label23182;

label22644:

$B9869413eae86beb['recordsTotal'] = 0;
goto label22652;

label22647:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label22652:

goto label22250;

label22653:

if (!(0 < intval(XUI::$rRequest['stream_id']))) {
	goto label22668;
}

$cf0aab70014807af[] = '`lines_live`.`stream_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['stream_id'];

label22668:

goto label3428;

label22669:

if (!(intval(XUI::$rRequest['server']) == -1)) {
	goto label22680;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` IS NULL';

label22680:

goto label24754;

label22681:

goto label24745;

label22682:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label22702;

	label22688:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label23053;

	label22691:

	$E8e13b4c9d9584b6 = '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';

	if (!e589A4BF54a2dAd1('adv', 'add_episode')) {
		goto label22913;
	}

	goto label22909;

	label22702:

	if (!$De97a60c730465cd) {
		goto label22720;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label22907;

	label22720:

	$F05acfe4a87b8eb0 = json_decode($Fb9da1713bff19ce['category_id'], true);
	goto label22746;

	label22728:

	$B93a4cfa6336a834 = '';

	if (!$Fb9da1713bff19ce['rating']) {
		goto label23128;
	}

	$e1928169d299e86c = round($Fb9da1713bff19ce['rating']) / 2.0;
	$Be927fb456a47264 = floor($e1928169d299e86c);
	goto label22859;

	label22746:

	if (0 < strlen(XUI::$rRequest['category'])) {
		goto label22763;
	}

	$Dbcac322b4274e46 = $F771d40e8cf51e59[$F05acfe4a87b8eb0[0]]['category_name'] ?: 'No Category';
	goto label22927;

	label22763:

	$Dbcac322b4274e46 = $F771d40e8cf51e59[intval(XUI::$rRequest['category'])]['category_name'] ?: 'No Category';
	goto label22927;

	label22775:

	$b87030f28ff32396 = '<strong>' . $Fb9da1713bff19ce['title'] . '</strong>';
	goto label22728;

	label22781:

	$Abcb228699a7f743 = '<a href=\'serie?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Fb9da1713bff19ce['id'] . '</a>';
	$b87030f28ff32396 = '<a href=\'serie?id=' . intval($Fb9da1713bff19ce['id']) . '\'><strong>' . $Fb9da1713bff19ce['title'] . '</strong></a>';
	goto label22728;

	label22803:

	if (0 < $Fb9da1713bff19ce['tmdb_id']) {
		goto label22811;
	}

	$b41097c951ee83d3 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light btn-fixed-xs"><i class="text-light fas fa-minus-circle"></i></button>';
	goto label23158;

	label22811:

	goto label23157;

	label22813:

	if (!$ac699a87736bb3c0) {
		goto label22818;
	}

	$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-half\'></i>';

	label22818:

	if (!(0 < $C39bf74bcb6f2a82)) {
		goto label23128;
	}

	goto label23119;

	label22825:

	if (0 < $Fb9da1713bff19ce['episode_count']) {
		goto label22834;
	}

	$Fb9da1713bff19ce['episode_count'] = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label22949;

	label22834:

	goto label22986;

	label22836:

	$E8e13b4c9d9584b6 = '<div class="btn-group">';

	if (!e589A4BF54A2DAD1('adv', 'add_episode')) {
		goto label22849;
	}

	$E8e13b4c9d9584b6 .= '<a href="episode?sid=' . $Fb9da1713bff19ce['id'] . '"><button title="Add Episode(s)" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-plus-circle-outline"></i></button></a>';

	label22849:

	if (!E589a4BF54a2dAd1('adv', 'episodes')) {
		goto label23059;
	}

	goto label23055;

	label22859:

	$ac699a87736bb3c0 = 0 < ($e1928169d299e86c - $Be927fb456a47264);
	$C39bf74bcb6f2a82 = 5 - ($Be927fb456a47264 + ($ac699a87736bb3c0 ? 1 : 0));

	if (!(0 < $Be927fb456a47264)) {
		goto label22813;
	}

	foreach (range(1, $Be927fb456a47264) as $df6991d59f367c7e) {
		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star\'></i>';
	}

	goto label22813;

	label22885:

	$b87030f28ff32396 .= '<br><span style=\'font-size:11px;\'>' . $eca9936f0487fe83 . $B93a4cfa6336a834 . '</span></a>';
	$B9869413eae86beb['data'][] = [$Abcb228699a7f743, $c68b76c7e42b19eb, $b87030f28ff32396, $Dbcac322b4274e46, $Fb9da1713bff19ce['latest_season'], $Fb9da1713bff19ce['episode_count'], $b41097c951ee83d3, $Fb9da1713bff19ce['release_date'], $Fb9da1713bff19ce['last_modified'], $E8e13b4c9d9584b6];

	label22907:

	goto label23175;

	label22909:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="episode?sid=' . $Fb9da1713bff19ce['id'] . '">Add Episode(s)</a>';

	label22913:

	if (!e589A4bF54A2dAD1('adv', 'episodes')) {
		goto label22925;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="episodes?series=' . $Fb9da1713bff19ce['id'] . '">View Episodes</a>';

	label22925:

	goto label23010;

	label22927:

	if (!(1 < count($F05acfe4a87b8eb0))) {
		goto label22942;
	}

	$Dbcac322b4274e46 .= ' (+' . (count($F05acfe4a87b8eb0) - 1) . ' others)';

	label22942:

	if (XUI::$rSettings['group_buttons']) {
		goto label22691;
	}

	goto label22836;

	label22949:

	if ($Fb9da1713bff19ce['last_modified'] == 0) {
		goto label22966;
	}

	$Fb9da1713bff19ce['last_modified'] = date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['last_modified']);
	goto label22968;
	goto label22966;

	label22966:

	$Fb9da1713bff19ce['last_modified'] = 'Never';

	label22968:

	if (!$Fb9da1713bff19ce['release_date']) {
		goto label22803;
	}

	$Fb9da1713bff19ce['release_date'] = date($f1dcaed925076e67['date_format'], strtotime($Fb9da1713bff19ce['release_date']));
	goto label22803;

	label22986:

	if (E589a4bF54A2daD1('adv', 'episodes')) {
		goto label23000;
	}

	$Fb9da1713bff19ce['episode_count'] = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['episode_count'] . '</button>';
	goto label22949;

	label23000:

	$Fb9da1713bff19ce['episode_count'] = '<a href=\'episodes?series=' . $Fb9da1713bff19ce['id'] . '\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['episode_count'] . '</button></a>';
	goto label22949;

	label23010:

	if (!e589a4bf54a2dAD1('adv', 'edit_series')) {
		goto label23052;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="serie?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'serie\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['title'])) . '\')" data-modal="true"' : '') . '>Edit</a>' . "\r\n\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');">Delete</a>';

	label23052:

	$E8e13b4c9d9584b6 .= '</div></div>';

	label23053:

	goto label23103;

	label23055:

	$E8e13b4c9d9584b6 .= '<a href="episodes?series=' . $Fb9da1713bff19ce['id'] . '"><button title="View Episodes" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-eye"></i></button></a>';

	label23059:

	if (!E589a4Bf54A2dAD1('adv', 'edit_series')) {
		goto label23101;
	}

	$E8e13b4c9d9584b6 .= '<a href="serie?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'serie\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['title'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>' . "\r\n\t\t\t\t\t\t" . '<button type="button" title="Delete" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label23101:

	goto label22688;

	label23103:

	if (0 < $Fb9da1713bff19ce['latest_season']) {
		goto label23112;
	}

	$Fb9da1713bff19ce['latest_season'] = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label22825;

	label23112:

	$Fb9da1713bff19ce['latest_season'] = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['latest_season'] . '</button>';
	goto label22825;

	label23119:

	foreach (range(1, $C39bf74bcb6f2a82) as $df6991d59f367c7e) {
		$B93a4cfa6336a834 .= '<i class=\'mdi mdi-star-outline\'></i>';
	}

	label23128:

	$eca9936f0487fe83 = ($Fb9da1713bff19ce['year'] ? '<strong>' . $Fb9da1713bff19ce['year'] . '</strong> &nbsp;' : '');
	goto label22885;

	label23139:

	$c68b76c7e42b19eb = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Fb9da1713bff19ce['cover'] . '\'><img loading=\'lazy\' src=\'resize?maxh=58&maxw=32&url=' . $Fb9da1713bff19ce['cover'] . '\' /></a>';

	label23146:

	if (E589a4bF54A2DAd1('adv', 'episodes')) {
		goto label22781;
	}

	$Abcb228699a7f743 = $Fb9da1713bff19ce['id'];
	goto label22775;

	label23157:

	$b41097c951ee83d3 = '<button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed-xs"><i class="text-light fas fa-check-circle"></i></button>';

	label23158:
	if ((0 < strlen($Fb9da1713bff19ce['cover'])) && XUI::$rSettings['show_images']) {
		goto label23139;
	}

	$c68b76c7e42b19eb = '';
	goto label23146;
	goto label23139;

	label23175:
}

label23177:

echo json_encode($B9869413eae86beb);
goto label18898;

label23182:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label23241;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label23214;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label23239;

	label23214:

	$B9869413eae86beb['data'][] = ['<a href=\'server_view?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Fb9da1713bff19ce['id'] . '</a>', '<a href=\'server_view?id=' . intval($Fb9da1713bff19ce['id']) . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>', $Fb9da1713bff19ce['server_ip']];

	label23239:
}

label23241:

goto label27469;

label23242:

$B03cfeca75020c69[] = XUI::$rRequest['reseller'];

label23246:

if (0 < count($cf0aab70014807af)) {
	goto label25635;
}

$F5190fed237fabec = '';
goto label25641;
goto label25635;

label23255:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label23263:

$cf0aab70014807af = $B03cfeca75020c69 = [];
if (!(isset(XUI::$rRequest['category_id']) && (0 < intval(XUI::$rRequest['category_id'])))) {
	goto label12723;
}

goto label12717;

label23279:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label23378;

	label23285:

	$B9869413eae86beb['data'][] = [date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date']), '<a href=\'server_view?id=' . intval($Fb9da1713bff19ce['server_id']) . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>', $Fb9da1713bff19ce['type'], $Fb9da1713bff19ce['error'], $b38e11ffdc6a3abb, $E8e13b4c9d9584b6];

	label23311:

	goto label23420;

	label23313:

	$E8e13b4c9d9584b6 = '<button title="Block IP" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $Fb9da1713bff19ce['ip'] . '\', \'block\');"><i class="fas fa-hammer"></i></button>';

	label23317:

	$Edebd7b009e56f17 = explode(':', $Fb9da1713bff19ce['ip']);
	$b38e11ffdc6a3abb = '<a onClick="whois(\'' . $Fb9da1713bff19ce['ip'] . '\');" href=\'javascript: void(0);\'>' . (1 < count($Edebd7b009e56f17) ? implode(':', array_slice($Edebd7b009e56f17, 0, 4)) . ':<br/>' . implode(':', array_slice($Edebd7b009e56f17, 4, 8)) : $Fb9da1713bff19ce['ip']) . '</a>';
	goto label23285;

	label23360:

	$Fb9da1713bff19ce['ip'] = 'localhost';

	label23362:
	if ((0 < strlen($Fb9da1713bff19ce['ip'])) && ($Fb9da1713bff19ce['ip'] != 'localhost')) {
		goto label23406;
	}

	$E8e13b4c9d9584b6 = '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" disabled><i class="fas fa-hammer"></i></button>';
	$b38e11ffdc6a3abb = 'localhost';
	goto label23404;

	label23378:

	if (!$De97a60c730465cd) {
		goto label23396;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label23311;

	label23396:

	if (!($Fb9da1713bff19ce['ip'] == '127.0.0.1')) {
		goto label23362;
	}

	goto label23360;

	label23404:

	goto label23285;

	label23406:

	if (!in_array($Fb9da1713bff19ce['ip'], $c5feeca020e7bf5c)) {
		goto label23313;
	}

	$E8e13b4c9d9584b6 = '<button title="IP Already Blocked" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="fas fa-hammer"></i></button>';
	goto label23317;
	goto label23313;

	label23420:
}

label23422:

echo json_encode($B9869413eae86beb);
goto label5188;

label23427:

goto label23430;

label23428:

$cf0aab70014807af[] = '`lines`.`is_stalker` = 1';

label23430:

goto label21160;
goto label21158;

label23432:

$D8e7681dfae2905b = array_slice($D8e7681dfae2905b, $bcfd61adc96d4b72, $Cc2b5dfe75dc164b);

label23438:

$d5649ba25d2e07d4 = $dec36723d7be7c49 = $ec80784a08a705f6 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	if (!$Fb9da1713bff19ce['stream_id']) {
		goto label23454;
	}

	$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);

	label23454:

	if (!$Fb9da1713bff19ce['user_id']) {
		goto label23465;
	}

	$ec80784a08a705f6[] = intval($Fb9da1713bff19ce['user_id']);

	label23465:

	if (!$Fb9da1713bff19ce['uuid']) {
		goto label23473;
	}

	$d5649ba25d2e07d4[] = $Fb9da1713bff19ce['uuid'];

	label23473:
}

goto label11944;

label23476:

if (0 < count($cf0aab70014807af)) {
	goto label23484;
}

$F5190fed237fabec = '';
goto label24219;

label23484:

goto label24213;

label23485:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 1)';

label23487:

goto label7084;

label23488:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND `streams_servers`.`to_analyze` = 0 AND `streams_servers`.`stream_status` = 1)';
goto label7084;

label23491:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label23653;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label23561;

	label23507:

	if ($Fb9da1713bff19ce['type'] == 5) {
		goto label23525;
	}

	$aa4e95f1ed1932a8 = '<a href=\'' . $F83b167f3cf044be[$Fb9da1713bff19ce['type']] . '?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';
	goto label23608;

	label23525:

	goto label23601;

	label23527:

	$f51fdbb70a8cbb4b = [1 => 'streams', 2 => 'movies', 3 => 'streams', 4 => 'radio', 5 => 'series'];
	$F83b167f3cf044be = [1 => 'stream_view', 2 => 'stream_view', 3 => 'stream_view', 4 => 'stream_view'];

	if (E589a4BF54a2DAd1('adv', $f51fdbb70a8cbb4b[$Fb9da1713bff19ce['type']])) {
		goto label23507;
	}

	$aa4e95f1ed1932a8 = $Fb9da1713bff19ce['stream_display_name'];
	goto label23608;
	goto label23507;

	label23544:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $ff5cf44f96903d64, $aa4e95f1ed1932a8, $Efdd269715ece679[$Fb9da1713bff19ce['client_status']], $Fb9da1713bff19ce['user_agent'], $b38e11ffdc6a3abb, $Fb9da1713bff19ce['date']];

	label23559:

	goto label23651;

	label23561:

	if (!$De97a60c730465cd) {
		goto label23579;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label23559;

	label23579:

	if (E589a4bf54A2DAD1('adv', 'edit_user')) {
		goto label23592;
	}

	goto label23588;

	label23588:

	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label23599;

	label23592:

	$ff5cf44f96903d64 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label23599:

	goto label23527;

	label23601:

	$aa4e95f1ed1932a8 = '<a href=\'serie?id=' . $Fb9da1713bff19ce['series_no'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';

	label23608:

	$Edebd7b009e56f17 = explode(':', $Fb9da1713bff19ce['ip']);
	$b38e11ffdc6a3abb = '<a onClick="whois(\'' . $Fb9da1713bff19ce['ip'] . '\');" href=\'javascript: void(0);\'>' . (1 < count($Edebd7b009e56f17) ? implode(':', array_slice($Edebd7b009e56f17, 0, 4)) . ':<br/>' . implode(':', array_slice($Edebd7b009e56f17, 4, 8)) : $Fb9da1713bff19ce['ip']) . '</a>';
	goto label23544;

	label23651:
}

label23653:

goto label20666;

label23654:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label11283;
}

$aa8757e440328b92 = $bcfd61adc96d4b72 + 1;

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label23755;

	label23672:

	if (e589a4bF54a2DAd1('adv', 'servers')) {
		goto label23683;
	}

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];
	goto label23707;

	label23683:

	$D8d609d5bdc92a03 = '<a href=\'server_view?id=' . $Fb9da1713bff19ce['server_id'] . '\'>' . $Fb9da1713bff19ce['server_name'] . '</a>';
	goto label23707;

	label23692:

	$fe93a43f53d92a4e = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';

	label23699:

	if (0 < $Fb9da1713bff19ce['pid']) {
		goto label23729;
	}

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square tooltip" title="Queued..."></i>';
	goto label23723;

	label23707:

	$f51fdbb70a8cbb4b = [2 => 'movies', 5 => 'series'];

	if (E589A4Bf54a2dAD1('adv', $f51fdbb70a8cbb4b[$Fb9da1713bff19ce['type']])) {
		goto label23692;
	}

	$fe93a43f53d92a4e = $Fb9da1713bff19ce['stream_display_name'];
	goto label23699;
	goto label23692;

	label23723:

	$E8e13b4c9d9584b6 = '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $Fb9da1713bff19ce['id'] . '\', \'delete\');"><i class="mdi mdi-close"></i></button>';
	goto label23736;

	label23729:

	$b9f049445aa9bd5d = '<i class="text-info fas fa-square tooltip" title="In Progress"></i>';
	$E8e13b4c9d9584b6 = '<button title="Stop" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $Fb9da1713bff19ce['id'] . '\', \'stop\');"><i class="mdi mdi-stop"></i></button>';
	goto label23736;

	label23736:

	$B9869413eae86beb['data'][] = [$aa8757e440328b92, $fe93a43f53d92a4e, $D8d609d5bdc92a03, $b9f049445aa9bd5d, date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['added']), $E8e13b4c9d9584b6];
	$aa8757e440328b92++;

	label23753:

	goto label23777;

	label23755:

	if (!$De97a60c730465cd) {
		goto label23775;
	}

	$Fb9da1713bff19ce['position'] = $aa8757e440328b92;
	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label23753;

	label23775:

	goto label23672;

	label23777:
}

goto label11283;

label23780:

goto label11714;

label23781:

if (E589a4BF54A2dad1('adv', 'manage_e2')) {
	goto label23788;
}

exit();

label23788:

goto label1091;

label23789:

$cf0aab70014807af[] = '(`lines`.`admin_enabled` = 1 AND `lines`.`enabled` = 1 AND (`lines`.`exp_date` IS NULL OR `lines`.`exp_date` > UNIX_TIMESTAMP()))';

label23791:

if (!(0 < strlen(XUI::$rRequest['reseller']))) {
	goto label3564;
}

goto label3558;

label23801:

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label23809;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label24795;

label23809:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];
goto label24795;

label23815:

$bcfd61adc96d4b72 = 0;
$Cc2b5dfe75dc164b = 1000;

label23817:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label16089;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label16087;
}

goto label624;

label23832:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label23838:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `detect_restream_logs` LEFT JOIN `lines` ON `lines`.`id` = `detect_restream_logs`.`user_id` LEFT JOIN `streams` ON `streams`.`id` = `detect_restream_logs`.`stream_id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label22647;
}

goto label22644;

label23852:

$cf0aab70014807af[] = '(`streams`.`channel_id` IS NULL OR LENGTH(`streams`.`channel_id`) = 0)';

label23854:

goto label15653;

label23855:

$cf0aab70014807af[] = 'LENGTH(`streams`.`channel_id`) > 0';
goto label15653;

label23858:

exit();

label23859:

$F771d40e8cf51e59 = f769e3f0C739D1a6('movie');
$a2a53f18f4f95c8b = ['`streams`.`id`', false, '`streams`.`stream_display_name`', '`server_name`', '`clients`', '`streams_servers`.`stream_started`', false, false, false, '`streams_servers`.`bitrate`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label3282;
}

goto label3280;

label23879:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `epg_api` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label7621;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label7626;
goto label7621;

label23896:

$cf0aab70014807af[] = '(`streams_series`.`category_id` = \'[]\' OR `streams_series`.`category_id` IS NULL)';

label23898:

goto label22023;

label23899:

$cf0aab70014807af[] = '(`streams_series`.`tmdb_id` = 0 OR `streams_series`.`tmdb_id` IS NULL)';
goto label22023;

label23902:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$c5feeca020e7bf5c[] = $Fb9da1713bff19ce['ip'];
}

$B91645b8411dc88c = 'SELECT `mysql_syslog`.`id`, `mysql_syslog`.`server_id`, `servers`.`server_name`, `mysql_syslog`.`type`, `mysql_syslog`.`error`, `mysql_syslog`.`ip`, `mysql_syslog`.`date` FROM `mysql_syslog` LEFT JOIN `servers` ON `servers`.`id` = `mysql_syslog`.`server_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label23422;
}

goto label23279;

label23932:

echo json_encode($B9869413eae86beb);
exit();

label23937:

goto label24769;

label23938:

$B9869413eae86beb['recordsTotal'] = $a3b35b5bcdf091ff;
$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

label23954:

if (!(0 < count($D8e7681dfae2905b))) {
	goto label18550;
}

goto label18032;

label23962:

echo json_encode($B9869413eae86beb);
exit();

label23967:

goto label12554;
goto label12826;

label23969:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label24024;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$De97a60c730465cd) {
		goto label24001;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label24022;

	label24001:

	$E8e13b4c9d9584b6 = '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';
	$B9869413eae86beb['data'][] = [date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['send_time']), $Fb9da1713bff19ce['mac'], $Fb9da1713bff19ce['event'], $Fb9da1713bff19ce['msg'], $E8e13b4c9d9584b6];

	label24022:
}

label24024:

goto label6157;

label24025:

if (XUI::$rRequest['video'] == -1) {
	goto label24037;
}

$cf0aab70014807af[] = '`streams_servers`.`video_codec` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['video'];
goto label7913;

label24037:

goto label7911;

label24038:

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`stream_display_name` LIKE ? OR `servers`.`server_name` LIKE ? OR `streams`.`id` LIKE ?)';

label24055:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label616;
}

goto label598;

label24060:

if (!(0 < strlen(XUI::$rRequest['range']))) {
	goto label2517;
}

$F56066ad7b074468 = substr(XUI::$rRequest['range'], 0, 10);
$b120584763e3d117 = substr(XUI::$rRequest['range'], strlen(XUI::$rRequest['range']) - 10, 10);

if ($F56066ad7b074468 = strtotime($F56066ad7b074468 . ' 00:00:00')) {
	goto label7425;
}

$F56066ad7b074468 = NULL;
goto label7425;

label24100:

$B03cfeca75020c69[] = XUI::$rRequest['category_id'];

label24104:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label16207;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label16205;

label24130:

if (XUI::$rRequest['filter'] == 1) {
	goto label7941;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label208;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label4825;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label24883;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label21161;
}

goto label19727;

label24156:

$e4829bf95c7424f6 = 'ORDER BY `date` DESC';
$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`stream_id` = ?';
$B03cfeca75020c69[] = XUI::$rRequest['stream_id'];
if (!(isset(XUI::$rRequest['server_id']) && (0 < intval(XUI::$rRequest['server_id'])))) {
	goto label18913;
}

goto label18907;

label24179:

if (XUI::$rRequest['filter'] == 2) {
	goto label17218;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label6071;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label22010;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label5200;
}

if (!(XUI::$rRequest['filter'] == 6)) {
	goto label5199;
}

goto label5197;

label24206:

echo json_encode($B9869413eae86beb);
exit();

label24211:

goto label18899;
goto label1739;

label24213:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label24219:

if (isset(XUI::$rRequest['single'])) {
	goto label24271;
}

if (!isset(XUI::$rRequest['grouped'])) {
	goto label24270;
}

$f1dcaed925076e67['streams_grouped'] = 1;
goto label24270;

label24231:

$D52a67130c4ab288 = $dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($dec36723d7be7c49))) {
	goto label3694;
}

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`server_stream_id`) AS `count` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`;');
goto label7857;

label24261:

if (E589a4BF54A2Dad1('adv', 'credits_log')) {
	goto label24268;
}

exit();

label24268:

$a2a53f18f4f95c8b = ['`users_credits_logs`.`id`', '`owner_username`', '`target_username`', '`users_credits_logs`.`amount`', '`users_credits_logs`.`reason`', '`date`'];
goto label7993;

label24270:

goto label24273;

label24271:

$f1dcaed925076e67['streams_grouped'] = 0;

label24273:

goto label19746;

label24274:

$b62d6460eb33ea07->query('SELECT `uuid`, `divergence` FROM `lines_divergence` WHERE `uuid` IN (\'' . implode('\',\'', $d5649ba25d2e07d4) . '\');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$ef631b924556ee2e[$Fb9da1713bff19ce['uuid']] = $Fb9da1713bff19ce['divergence'];
}

label24293:

$df6991d59f367c7e = 0;
goto label3291;

label24295:

if (!(0 < intval(XUI::$rRequest['server']))) {
	goto label22428;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);
goto label22428;

label24314:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label24336;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label24336:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `lines_logs` LEFT JOIN `streams` ON `streams`.`id` = `lines_logs`.`stream_id` LEFT JOIN `lines` ON `lines`.`id` = `lines_logs`.`user_id` ' . $F5190fed237fabec . ';';
goto label3572;

label24341:

$a3b35b5bcdf091ff = XUI::$redis->zCard('SERVER#' . $C082ca9ed03f473c);
goto label1328;

label24348:

$ca8155fd3c07c1ee = XUI::$redis->zRevRangeByScore('SERVER#' . $C082ca9ed03f473c, '+inf', '-inf');
goto label1327;

label24357:

$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_display_name`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label24374;
}

$E7dbfc96029b3745 = 0;
goto label6381;

label24374:

goto label6373;

label24375:

$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`server_stream_id`) AS `count` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') GROUP BY `stream_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D52a67130c4ab288[$Fb9da1713bff19ce['stream_id']] = $Fb9da1713bff19ce['count'];
}

if (!XUI::$rSettings['redis_handler']) {
	goto label10134;
}

if ($f1dcaed925076e67['streams_grouped']) {
	goto label24423;
}

goto label24416;

label24407:

$B9869413eae86beb['recordsTotal'] = 0;
goto label24415;

label24410:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label24415:

goto label6399;

label24416:

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, false, false);
goto label24429;

label24423:

$B1e93ae2ae39e1ff = XUI::getStreamConnections($dec36723d7be7c49, true, true);

label24429:

goto label10134;

label24430:

$cf0aab70014807af[] = '(`login_logs`.`login_ip` LIKE ? OR `login_logs`.`status` LIKE ? OR `users`.`username` LIKE ? OR `access_codes`.`code` LIKE ?)';

label24432:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label1062;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label1057;

label24450:

goto label24459;

label24451:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label24459:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label17258;

label24462:

$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_icon`', '`streams`.`stream_display_name`', '`server_name`', '`clients`', '`streams_servers`.`stream_started`', false, '`streams_servers`.`bitrate`'];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label24479;
}

$E7dbfc96029b3745 = 0;
goto label25971;

label24479:

goto label25963;

label24480:

$B91645b8411dc88c = 'SELECT `epg_api`.`stationId`, `epg_api`.`callSign`, `epg_api`.`name`, `epg_api`.`bcastLangs`, `epg_api`.`videoType`, `epg_api`.`picon` FROM `epg_api` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label23932;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label24543;

	label24506:

	if (0 < strlen($Fb9da1713bff19ce['picon'])) {
		goto label24517;
	}

	$B080674c55093935 = '';
	goto label24523;

	label24517:

	$B080674c55093935 = '<img loading=\'lazy\' src=\'' . $Fb9da1713bff19ce['picon'] . '\' height=\'32px\' />';
	goto label24523;

	label24523:

	$B9869413eae86beb['data'][] = [$B080674c55093935, $Fb9da1713bff19ce['callSign'], $Fb9da1713bff19ce['name'], json_decode($Fb9da1713bff19ce['bcastLangs'], true)[0], $Fb9da1713bff19ce['videoType'], $E8e13b4c9d9584b6];

	label24541:

	goto label24581;

	label24543:

	if (!$De97a60c730465cd) {
		goto label24561;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label24541;

	label24561:

	$E8e13b4c9d9584b6 = '<a href="javascript: void(0);" onClick="selectEPGAPI(\'' . $Fb9da1713bff19ce['callSign'] . '\', \'' . $Fb9da1713bff19ce['stationId'] . '\', \'' . str_replace('\'', '\\\'', $Fb9da1713bff19ce['name']) . '\', \'' . $Fb9da1713bff19ce['picon'] . '\')"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-check"></i></button></a>';
	goto label24506;

	label24581:
}

goto label23932;

label24584:

exit();

label24585:

goto label20671;

label24586:

if (e589a4bf54a2dad1('adv', 'client_request_log')) {
	goto label1140;
}

goto label1139;

label24593:

if (XUI::$rRequest['filter'] == 1) {
	goto label21833;
}

if (XUI::$rRequest['filter'] == 2) {
	goto label7085;
}

if (XUI::$rRequest['filter'] == 3) {
	goto label23488;
}

if (XUI::$rRequest['filter'] == 4) {
	goto label19836;
}

if (XUI::$rRequest['filter'] == 5) {
	goto label19833;
}

goto label15188;

label24619:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label24627:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label24432;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label24430;

label24655:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label6946;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

if (!XUI::$rSettings['redis_handler']) {
	goto label15026;
}

$dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

goto label15013;

label24678:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label24686:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (isset(XUI::$rRequest['include_channels'])) {
	goto label22222;
}

goto label15713;

label24693:

$ca8155fd3c07c1ee = XUI::$redis->zRevRangeByScore('STREAM#' . $ee6d1fc5d801b43f, '+inf', '-inf');
$F74c31745a712716 = false;

label24702:

goto label7790;
goto label21108;

label24704:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `users_logs` LEFT JOIN `users` ON `users`.`id` = `users_logs`.`owner` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label16804;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label16803;

label24720:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` LEFT JOIN `ondemand_check` ON `ondemand_check`.`id` = `streams_servers`.`ondemand_check` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label15662;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label15661;

label24736:

$B9869413eae86beb['recordsTotal'] = 0;
goto label24744;

label24739:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label24744:

goto label21201;

label24745:

$cf0aab70014807af[] = '`streams_servers`.`server_id` = ?';
$B03cfeca75020c69[] = intval(XUI::$rRequest['server']);

label24754:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label3587;
}

if (XUI::$rRequest['filter'] == 1) {
	goto label17221;
}

goto label24179;

label24769:

goto label17227;

label24770:
if (!(!$db0a61ef32b89a27['is_admin'] || !E589a4bf54A2dAD1('adv', 'create_channel'))) {
	goto label24783;
}

exit();

label24783:

goto label17318;

label24784:

$E7dbfc96029b3745 = 0;
goto label24794;

label24786:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label24794:

goto label18770;

label24795:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label16967;
}

$c5feeca020e7bf5c = [];
$b62d6460eb33ea07->query('SELECT `ip` FROM `blocked_ips`;');
goto label27356;

label24819:

goto label24822;

label24820:

$cf0aab70014807af[] = '`streams_servers`.`on_demand` = 1';

label24822:

goto label6538;
goto label6536;

label24824:

exit();

label24825:

$a2a53f18f4f95c8b = ['`blocked_asns`.`asn`', '`blocked_asns`.`isp`', '`blocked_asns`.`domain`', '`blocked_asns`.`country`', '`blocked_asns`.`num_ips`', '`blocked_asns`.`type`', '`blocked_asns`.`blocked`', false];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label15116;
}

$E7dbfc96029b3745 = 0;
goto label15115;

label24842:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category_id'];

label24848:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label12177;
}

foreach (range(1, 2) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

goto label12175;

label24874:

$cf0aab70014807af[] = '`streams`.`transcode_profile_id` > 0';

label24876:

goto label89;

label24877:

$cf0aab70014807af[] = '`streams`.`direct_source` = 1';
goto label89;

label24880:

$cf0aab70014807af[] = '`lines`.`is_trial` = 1';

label24882:

goto label4824;

label24883:

$cf0aab70014807af[] = '(`lines`.`exp_date` IS NOT NULL AND `lines`.`exp_date` <= UNIX_TIMESTAMP())';
goto label4824;

label24886:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '(`type` = 1 OR `type` = 3)';
if (!(isset(XUI::$rRequest['category_id']) && (0 < intval(XUI::$rRequest['category_id'])))) {
	goto label1241;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category_id'];
goto label1241;

label24910:

goto label24913;

label24911:

$cf0aab70014807af[] = '`streams`.`adaptive_link` IS NOT NULL';

label24913:

goto label17112;

label24914:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label25410;

	label24918:

	$F970919c38a333cf = $Fb9da1713bff19ce['active_connections'];
	goto label24929;

	label24922:

	$F970919c38a333cf = '<a href="live_connections?user_id=' . $Fb9da1713bff19ce['id'] . '">' . $Fb9da1713bff19ce['active_connections'] . '</a>';

	label24929:

	goto label25148;

	label24931:

	$Da8120ce4761cb4b = '<i class="text-success fas fa-square"></i>';

	label24932:

	if ($Fb9da1713bff19ce['is_trial']) {
		goto label25341;
	}

	$dc2b8ff4adf881ae = '<i class="text-secondary far fa-square"></i>';
	goto label25342;
	goto label25341;

	label24941:

	goto label25375;

	label24943:

	if ($Fb9da1713bff19ce['exp_date'] < time()) {
		goto label25359;
	}

	$Fd59b51c86fe1420 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small>';
	goto label25375;
	goto label25359;

	label24969:

	if (!e589a4bf54a2daD1('adv', 'edit_mag')) {
		goto label25445;
	}

	$E8e13b4c9d9584b6 .= '<a href="mag?id=' . $Fb9da1713bff19ce['mag_id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'mag\', ' . intval($Fb9da1713bff19ce['mag_id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['mac'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>';

	if ($Fb9da1713bff19ce['admin_enabled']) {
		goto label25481;
	}

	goto label25475;

	label25014:

	if ($Fb9da1713bff19ce['enabled'] == 1) {
		goto label25025;
	}

	$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
	goto label25441;

	label25025:

	$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';
	goto label25441;

	label25031:

	goto label25037;

	label25033:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'disable\');">Disable Device</a>';

	label25037:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'delete\');">Delete Device</a>';
	goto label25528;

	label25043:

	if (!E589A4bf54a2DaD1('adv', 'edit_mag')) {
		goto label25528;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="mag?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'mag\', ' . intval($Fb9da1713bff19ce['mag_id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['username'])) . '\')" data-modal="true"' : '') . '>Edit Device</a>';

	if ($Fb9da1713bff19ce['admin_enabled']) {
		goto label25513;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'unban\');">Unban Device</a>';
	goto label25517;
	goto label25513;

	label25094:

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square tooltip" title="Banned"></i>';

	label25095:

	goto label25349;

	label25097:

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square tooltip" title="Damaged - Line Missing"></i>';
	goto label25349;

	label25100:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>';

	label25101:

	goto label25095;

	label25103:

	goto label25094;

	label25105:

	goto label25114;

	label25107:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . $Fb9da1713bff19ce['member_id'] . '\'>' . $Fb9da1713bff19ce['owner_name'] . '</a>';

	label25114:
	if ($Fb9da1713bff19ce['active_connections'] && $Fb9da1713bff19ce['last_active']) {
		goto label25250;
	}

	goto label25386;

	label25123:

	if (XUI::$rSettings['group_buttons']) {
		goto label25285;
	}

	$E8e13b4c9d9584b6 = '<div class="btn-group">';

	if (0 < strlen($bad7716b52f57546)) {
		goto label25228;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label25231;
	goto label25228;

	label25141:

	goto label25144;

	label25143:

	$b9f049445aa9bd5d = '<i class="text-warning far fa-square tooltip" title="Expired"></i>';

	label25144:

	goto label25101;
	goto label25100;

	label25148:

	$bad7716b52f57546 = '';

	if (!(0 < strlen($Fb9da1713bff19ce['admin_notes']))) {
		goto label25160;
	}

	$bad7716b52f57546 .= $Fb9da1713bff19ce['admin_notes'];

	label25160:

	if (!(0 < strlen($Fb9da1713bff19ce['reseller_notes']))) {
		goto label25577;
	}

	goto label25566;

	label25171:

	if (!isset(XUI::$rRequest['no_url'])) {
		goto label25198;
	}

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['mag_id'], $Fb9da1713bff19ce['username'], $Fb9da1713bff19ce['mac'], $Fb9da1713bff19ce['stb_type'], $Fb9da1713bff19ce['owner_name'], $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $Fd59b51c86fe1420, $c8629372383359e0, $E8e13b4c9d9584b6];
	goto label25384;

	label25198:

	$B9869413eae86beb['data'][] = ['<a href=\'mag?id=' . $Fb9da1713bff19ce['mag_id'] . '\'>' . $Fb9da1713bff19ce['mag_id'] . '</a>', $Fb9da1713bff19ce['username'], '<a href=\'mag?id=' . $Fb9da1713bff19ce['mag_id'] . '\'>' . $Fb9da1713bff19ce['mac'] . '</a>', $Fb9da1713bff19ce['stb_type'], $C0a1fd30f0173389, $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $Fd59b51c86fe1420, $c8629372383359e0, $E8e13b4c9d9584b6];
	goto label25384;

	label25228:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';

	label25231:

	if (!E589a4BF54A2dad1('adv', 'manage_events')) {
		goto label25319;
	}

	$E8e13b4c9d9584b6 .= '<button title="MAG Event" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="message(' . $Fb9da1713bff19ce['mag_id'] . ', \'' . $Fb9da1713bff19ce['mac'] . '\');"><i class="mdi mdi-message-alert"></i></button>';
	goto label25319;

	label25248:

	goto label25266;

	label25250:

	$c8629372383359e0 = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a><br/><small class=\'text-secondary\'>Online: ' . XUI::A5d0a3407690f047(time() - $Fb9da1713bff19ce['last_active']) . '</small>';

	label25266:

	goto label25171;

	label25268:
	if ($Fb9da1713bff19ce['user_id'] && (0 < $Fb9da1713bff19ce['active_connections'])) {
		goto label25279;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-fingerprint"></i></button>';
	goto label24969;

	label25279:

	$E8e13b4c9d9584b6 .= '<button title="Fingerprint" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="modalFingerprint(' . $Fb9da1713bff19ce['user_id'] . ', \'user\');"><i class="mdi mdi-fingerprint"></i></button>';
	goto label24969;

	label25285:

	$E8e13b4c9d9584b6 = '';

	if (!(0 < strlen($bad7716b52f57546))) {
		goto label25297;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';

	label25297:

	goto label25487;

	label25299:

	if (!$De97a60c730465cd) {
		goto label25317;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label25384;

	label25317:

	goto label25538;

	label25319:

	if (!e589A4bf54A2DAd1('adv', 'edit_user')) {
		goto label25331;
	}

	$E8e13b4c9d9584b6 .= '<button title="Convert to User Line" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'convert\');"><i class="fas fa-retweet"></i></button>';

	label25331:

	if (!e589a4BF54a2dad1('adv', 'fingerprint')) {
		goto label24969;
	}

	goto label25268;

	label25341:

	$dc2b8ff4adf881ae = '<i class="text-warning fas fa-square"></i>';

	label25342:

	if ($Fb9da1713bff19ce['exp_date']) {
		goto label24943;
	}

	$Fd59b51c86fe1420 = '&infin;';
	goto label24941;

	label25349:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label25357;
	}

	$Da8120ce4761cb4b = '<i class="text-warning far fa-square"></i>';
	goto label24932;

	label25357:

	goto label24931;

	label25359:

	$Fd59b51c86fe1420 = '<span class="expired">' . date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small></span>';

	label25375:

	if (e589a4bf54A2DAD1('adv', 'live_connections')) {
		goto label24922;
	}

	goto label24918;

	label25384:

	goto label25579;

	label25386:

	if ($Fb9da1713bff19ce['last_active']) {
		goto label25393;
	}

	$c8629372383359e0 = 'Never';
	goto label25248;

	label25393:

	$c8629372383359e0 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['last_active']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['last_active']) . '</small>';
	goto label25248;

	label25410:

	if (!isset($f4e5ef13910179a5[$Fb9da1713bff19ce['id']])) {
		goto label25423;
	}

	$Fb9da1713bff19ce = array_merge($Fb9da1713bff19ce, $f4e5ef13910179a5[$Fb9da1713bff19ce['id']]);

	label25423:

	if (!XUI::$rSettings['redis_handler']) {
		goto label25299;
	}

	$Fb9da1713bff19ce['active_connections'] = (isset($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']]) ? $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] : 0);
	goto label25299;

	label25441:

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label25445:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label25529;
	goto label25285;

	label25450:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'convert\');">Convert to Line</a>';

	label25454:
	if (!(E589A4BF54a2DaD1('adv', 'fingerprint') && $Fb9da1713bff19ce['user_id'] && (0 < $Fb9da1713bff19ce['active_connections']))) {
		goto label25473;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="modalFingerprint(' . $Fb9da1713bff19ce['user_id'] . ', \'user\');">Fingerprint</a>';

	label25473:

	goto label25043;

	label25475:

	$E8e13b4c9d9584b6 .= '<button title="Unban" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'unban\');"><i class="mdi mdi-power"></i></button>';
	goto label25485;

	label25481:

	$E8e13b4c9d9584b6 .= '<button title="Ban" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'ban\');"><i class="mdi mdi-power"></i></button>';

	label25485:

	goto label25014;

	label25487:

	$E8e13b4c9d9584b6 .= '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';

	if (!e589A4BF54A2dAd1('adv', 'manage_events')) {
		goto label25503;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="message(' . $Fb9da1713bff19ce['mag_id'] . ', \'' . $Fb9da1713bff19ce['mac'] . '\');">MAG Event</a>';

	label25503:

	if (!E589A4bF54a2dAD1('adv', 'edit_user')) {
		goto label25454;
	}

	goto label25450;

	label25513:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'ban\');">Ban Device</a>';

	label25517:

	if ($Fb9da1713bff19ce['enabled'] == 1) {
		goto label25033;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['mag_id'] . ', \'enable\');">Enable Device</a>';
	goto label25031;

	label25528:

	$E8e13b4c9d9584b6 .= '</div>';

	label25529:

	if (0 < $Fb9da1713bff19ce['member_id']) {
		goto label25107;
	}

	$C0a1fd30f0173389 = $Fb9da1713bff19ce['owner_name'];
	goto label25105;

	label25538:

	if (!$Fb9da1713bff19ce['id']) {
		goto label25097;
	}

	if (!$Fb9da1713bff19ce['admin_enabled']) {
		goto label25103;
	}

	if (!$Fb9da1713bff19ce['enabled']) {
		goto label25100;
	}
	if ($Fb9da1713bff19ce['exp_date'] && ($Fb9da1713bff19ce['exp_date'] < time())) {
		goto label25143;
	}

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square tooltip" title="Active"></i>';
	goto label25141;

	label25566:

	if (!(strlen($bad7716b52f57546) != 0)) {
		goto label25575;
	}

	$bad7716b52f57546 .= "\n";

	label25575:

	$bad7716b52f57546 .= $Fb9da1713bff19ce['reseller_notes'];

	label25577:

	goto label25123;

	label25579:
}

label25581:

goto label27499;

label25582:

$cf0aab70014807af[] = '(`mysql_syslog`.`ip` LIKE ? OR `mysql_syslog`.`type` LIKE ? OR `mysql_syslog`.`error` LIKE ?)';

label25584:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label15418;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label15413;

label25602:

goto label25605;

label25603:

$cf0aab70014807af[] = '`lines`.`enabled` = 0';

label25605:

goto label23791;
goto label23789;

label25607:

goto label25616;

label25608:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label25616:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label18662;

label25619:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label6190;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label6189;

label25635:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label25641:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label15699;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
goto label15694;

label25659:

$B91645b8411dc88c = 'SELECT `streams`.`id`, MD5(`streams`.`stream_source`) AS `source`, `streams`.`movie_properties`, `streams`.`year`, `streams_servers`.`to_analyze`, `streams`.`target_container`, `streams`.`stream_display_name`, `streams_servers`.`server_id`, `streams`.`notes`, `streams`.`direct_source`, `streams`.`direct_proxy`, `streams_servers`.`pid`, `streams_servers`.`monitor_pid`, `streams_servers`.`stream_status`, `streams_servers`.`stream_started`, `streams_servers`.`stream_info`, `streams_servers`.`current_source`, `streams_servers`.`bitrate`, `streams_servers`.`progress_info`, `streams_servers`.`on_demand`, `streams`.`category_id`, (SELECT COUNT(*) FROM `lines_live` WHERE `lines_live`.`server_id` = `streams_servers`.`server_id` AND `lines_live`.`stream_id` = `streams`.`id` AND `hls_end` = 0) AS `clients`, (SELECT `server_name` FROM `servers` WHERE `id` = `streams_servers`.`server_id`) AS `server_name` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL ' . $F5190fed237fabec . ' GROUP BY `streams`.`id` ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';

label25669:

$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label4823;
}

$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
goto label24231;

label25683:

XUI::D6AEb3175a43F301();

label25685:

if ($A7d54b094ae83c95 == 'lines') {
	goto label4967;
}

if ($A7d54b094ae83c95 == 'mags') {
	goto label11715;
}

if ($A7d54b094ae83c95 == 'enigmas') {
	goto label23781;
}

goto label11855;

label25695:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label25701:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `login_logs` LEFT JOIN `users` ON `users`.`id` = `login_logs`.`user_id` LEFT JOIN `access_codes` ON `access_codes`.`id` = `login_logs`.`access_code` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label23801;

label25710:

$cf0aab70014807af[] = '(`streams_servers`.`monitor_pid` > 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`stream_status` = 0)';

label25712:

goto label12298;

label25713:

foreach (range(1, 3) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`mag_devices`.`mac` LIKE ? OR `mag_events`.`event` LIKE ? OR `mag_events`.`msg` LIKE ?)';

label25730:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label11789;
}

goto label11771;

label25735:

goto label16275;

label25736:
if (!(!$db0a61ef32b89a27['is_admin'] || !e589a4bF54A2dAD1('adv', 'bouquets'))) {
	goto label17710;
}

exit();
goto label17710;

label25750:

echo json_encode(['status' => 'STATUS_FAILURE', 'error' => 'Invalid API key.']);
exit();

label25755:

$f7107e3a92443147 = $b62d6460eb33ea07->get_row()['id'];
$De97a60c730465cd = true;
goto label11337;

label25761:

$F5190fed237fabec = '';
goto label25769;

label25763:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label25769:

goto label24314;

label25770:

session_start();
session_write_close();

if (file_exists('../www/init.php')) {
	goto label20714;
}

require_once '../../../www/init.php';
goto label20715;
goto label20714;

label25782:

goto label25788;

label25783:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label25788:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);
goto label15517;

label25803:

$cf0aab70014807af[] = '`streams`.`direct_source` = 1';

label25805:

goto label7902;

label25806:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 1)';
goto label7902;

label25809:

$B9869413eae86beb['recordsFiltered'] = ($De97a60c730465cd ? ($B9869413eae86beb['recordsTotal'] < $Cc2b5dfe75dc164b ? $B9869413eae86beb['recordsTotal'] : $Cc2b5dfe75dc164b) : $B9869413eae86beb['recordsTotal']);

if (!(0 < $B9869413eae86beb['recordsTotal'])) {
	goto label6650;
}

$B91645b8411dc88c = 'SELECT `streams_series`.`id`, `streams_series`.`title`, `streams_series`.`category_id` FROM `streams_series` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
goto label6540;

label25843:

$db0a61ef32b89a27['advanced'] = json_decode($db0a61ef32b89a27['allowed_pages'], true);

if (!(0 < strlen($E59d0debc75e7be8['timezone']))) {
	goto label25862;
}

date_default_timezone_set($E59d0debc75e7be8['timezone']);

label25862:

goto label4937;

label25863:

$cf0aab70014807af = ['`streams`.`id` IN (' . implode(',', array_map('intval', explode(',', XUI::$rRequest['refresh']))) . ')'];
$bcfd61adc96d4b72 = 0;
$Cc2b5dfe75dc164b = 1000;

label25883:

if (!(0 < strlen(XUI::$rRequest['filter']))) {
	goto label21835;
}

goto label24593;

label25893:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label25899:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `streams` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label21271;

label25908:

exit();

label25909:

$F771d40e8cf51e59 = F769E3f0c739d1a6('live');
$a2a53f18f4f95c8b = ['`streams`.`id`', '`streams`.`stream_display_name`', false, '`active_count`', NULL];
if (isset(XUI::$rRequest['order']) && (0 < strlen(XUI::$rRequest['order'][0]['column']))) {
	goto label11319;
}

goto label11317;

label25929:

goto label25932;

label25930:

$cf0aab70014807af[] = '(`streams`.`movie_properties` IS NULL OR `streams`.`movie_properties` = \'\' OR `streams`.`movie_properties` = \'[]\' OR `streams`.`movie_properties` = \'{}\' OR `streams`.`movie_properties` LIKE \'%tmdb_id":""%\')';

label25932:

goto label19835;
goto label19833;

label25934:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label25942:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`streams`.`type` = 4';
goto label14833;

label25947:

$A38e57f944de21df = 'SELECT COUNT(DISTINCT(`streams`.`id`)) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label21772;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label21771;

label25963:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label25971:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`streams`.`type` = 4';

if (isset(XUI::$rRequest['stream_id'])) {
	goto label15163;
}

goto label7397;

label25980:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label26007;
}

foreach (range(1, 4) as $be083ab4cd4f4e7e) {
	$B03cfeca75020c69[] = '%' . XUI::$rRequest['search']['value'] . '%';
}

$cf0aab70014807af[] = '(`streams`.`id` LIKE ? OR `streams`.`stream_display_name` LIKE ? OR `streams`.`notes` LIKE ? OR `streams_servers`.`current_source` LIKE ?)';

label26007:

goto label20984;

label26008:

echo json_encode($B9869413eae86beb);
exit();

label26013:

goto label5423;

label26014:

goto label12799;

label26015:

goto label26024;

label26016:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label26024:

$cf0aab70014807af = $B03cfeca75020c69 = [];
goto label21439;

label26027:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label26049;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label26049:

if (0 < count($cf0aab70014807af)) {
	goto label1332;
}

goto label1330;

label26056:

$B692d6e1f0cf1f67 = XUI::getFirstConnection($C98047839de3d474);
$dec36723d7be7c49 = [];

foreach ($B692d6e1f0cf1f67 as $f7107e3a92443147 => $Fd10d59f87b19e71) {
	if (in_array($Fd10d59f87b19e71['stream_id'], $dec36723d7be7c49)) {
		goto label26078;
	}

	$dec36723d7be7c49[] = intval($Fd10d59f87b19e71['stream_id']);

	label26078:
}

$b42f717d234fde64 = [];
goto label15427;

label26082:

if (0 < intval(XUI::$rRequest['category'])) {
	goto label5963;
}

if (!(intval(XUI::$rRequest['category']) == -1)) {
	goto label26101;
}

$cf0aab70014807af[] = '(`streams`.`category_id` = \'[]\' OR `streams`.`category_id` IS NULL)';

label26101:

goto label5962;

label26102:

if ($b120584763e3d117 = strtotime($b120584763e3d117 . ' 23:59:59')) {
	goto label26110;
}

$b120584763e3d117 = NULL;

label26110:
if (!($F56066ad7b074468 && $b120584763e3d117)) {
	goto label8233;
}

goto label8227;

label26116:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label26362;

	label26120:

	$Fd59b51c86fe1420 = '<span class="expired">' . date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small></span>';

	label26136:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label26462;
	}

	$F970919c38a333cf = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label26460;

	label26144:

	goto label26481;

	label26146:

	$E8e13b4c9d9584b6 = '';

	if (!(0 < strlen($bad7716b52f57546))) {
		goto label26701;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';
	goto label26701;

	label26160:

	goto label26177;

	label26162:

	$c8629372383359e0 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['last_active']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['last_active']) . '</small>';

	label26177:

	goto label26550;
	goto label26534;

	label26181:

	if (!E589a4bF54a2DaD1('adv', 'edit_user')) {
		goto label26220;
	}

	$E8e13b4c9d9584b6 .= '<a href="line?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'line\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['username'])) . '\')" data-modal="true"' : '') . '><button title="Edit" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil"></i></button></a>';

	label26220:

	if (!e589A4bf54A2DAd1('adv', 'fingerprint')) {
		goto label26511;
	}

	goto label26283;

	label26230:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['username'], $Fb9da1713bff19ce['password'], $Fb9da1713bff19ce['owner_name'], $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $ab037ad2072943df, $F970919c38a333cf, $A9c066cee616f400, $Fd59b51c86fe1420, $c8629372383359e0, $E8e13b4c9d9584b6];
	goto label26281;

	label26252:

	$B9869413eae86beb['data'][] = ['<a href=\'line?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Fb9da1713bff19ce['id'] . '</a>', '<a href=\'line?id=' . $Fb9da1713bff19ce['id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>', $Fb9da1713bff19ce['password'], $C0a1fd30f0173389, $b9f049445aa9bd5d, $Da8120ce4761cb4b, $dc2b8ff4adf881ae, $ab037ad2072943df, $F970919c38a333cf, $A9c066cee616f400, $Fd59b51c86fe1420, $c8629372383359e0, $E8e13b4c9d9584b6];

	label26281:

	goto label26532;

	label26283:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label26291;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-fingerprint"></i></button>';
	goto label26511;

	label26291:

	$E8e13b4c9d9584b6 .= '<button title="Fingerprint" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="modalFingerprint(' . $Fb9da1713bff19ce['id'] . ', \'user\');"><i class="mdi mdi-fingerprint"></i></button>';
	goto label26511;

	label26297:

	if ($Fb9da1713bff19ce['exp_date'] < time()) {
		goto label26321;
	}

	$Fd59b51c86fe1420 = date($f1dcaed925076e67['date_format'], $Fb9da1713bff19ce['exp_date']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['exp_date']) . '</small>';
	goto label26136;

	label26321:

	goto label26120;

	label26323:

	if ($Fb9da1713bff19ce['is_restreamer']) {
		goto label26330;
	}

	$ab037ad2072943df = '<i class="text-secondary far fa-square"></i>';
	goto label26560;

	label26330:

	goto label26559;

	label26332:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'disable\');">Disable Line</a>';

	label26336:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');">Delete Line</a>';

	label26340:

	goto label26480;

	label26342:

	$F970919c38a333cf = '<a href="live_connections?user_id=' . $Fb9da1713bff19ce['id'] . ('">' . $F970919c38a333cf . '</a>');

	label26349:

	if ($Fb9da1713bff19ce['max_connections'] == 0) {
		goto label26584;
	}

	$A9c066cee616f400 = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['max_connections'] . '</button>';
	goto label26585;
	goto label26584;

	label26362:

	$Fb9da1713bff19ce = array_merge($Fb9da1713bff19ce, $f4e5ef13910179a5[$Fb9da1713bff19ce['id']]);

	if (!XUI::$rSettings['redis_handler']) {
		goto label26385;
	}

	$Fb9da1713bff19ce['active_connections'] = (isset($B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']]) ? $B1e93ae2ae39e1ff[$Fb9da1713bff19ce['id']] : 0);

	label26385:

	if (!$De97a60c730465cd) {
		goto label26426;
	}

	goto label26412;

	label26391:

	$bad7716b52f57546 .= $Fb9da1713bff19ce['reseller_notes'];

	label26393:

	if (XUI::$rSettings['group_buttons']) {
		goto label26146;
	}

	$E8e13b4c9d9584b6 = '<div class="btn-group">';
	goto label26569;

	label26401:

	$E8e13b4c9d9584b6 .= '<button title="Disable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'disable\');"><i class="mdi mdi-lock"></i></button>';

	label26405:

	$E8e13b4c9d9584b6 .= '<button title="Delete" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'delete\');"><i class="mdi mdi-close"></i></button>';

	label26409:

	$E8e13b4c9d9584b6 .= '</div>';
	goto label26144;

	label26412:

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label26532;

	label26426:

	if (!$Fb9da1713bff19ce['admin_enabled']) {
		goto label26745;
	}

	if (!$Fb9da1713bff19ce['enabled']) {
		goto label26777;
	}

	goto label26597;

	label26438:

	if ($Fb9da1713bff19ce['admin_enabled']) {
		goto label26448;
	}

	$E8e13b4c9d9584b6 .= '<button title="Unban" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'unban\');"><i class="mdi mdi-power"></i></button>';
	goto label26629;

	label26448:

	$E8e13b4c9d9584b6 .= '<button title="Ban" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'ban\');"><i class="mdi mdi-power"></i></button>';
	goto label26629;

	label26454:

	$Da8120ce4761cb4b = '<i class="text-secondary far fa-square"></i>';
	goto label26458;

	label26457:

	$Da8120ce4761cb4b = '<i class="text-success fas fa-square"></i>';

	label26458:

	goto label26691;

	label26460:

	goto label26466;

	label26462:

	$F970919c38a333cf = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $Fb9da1713bff19ce['active_connections'] . '</button>';

	label26466:
	if (!(e589A4Bf54a2DAD1('adv', 'live_connections') && (0 < $Fb9da1713bff19ce['active_connections']))) {
		goto label26349;
	}

	goto label26342;

	label26480:

	$E8e13b4c9d9584b6 .= '</div></div>';

	label26481:
	if ($Fb9da1713bff19ce['active_connections'] && $Fb9da1713bff19ce['last_active']) {
		goto label26534;
	}

	if ($Fb9da1713bff19ce['last_active']) {
		goto label26162;
	}

	$c8629372383359e0 = 'Never';
	goto label26160;

	label26495:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'kill\');">Kill Connections</a>';

	if ($Fb9da1713bff19ce['admin_enabled']) {
		goto label26509;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'unban\');">Unban Line</a>';
	goto label26617;

	label26509:

	goto label26613;

	label26511:

	$E8e13b4c9d9584b6 .= '<button type="button" title="Download Playlist" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="openDownload(\'' . $Fb9da1713bff19ce['username'] . '\', \'' . $Fb9da1713bff19ce['password'] . '\');"><i class="mdi mdi-download"></i></button>';

	if (!E589A4Bf54A2DAD1('adv', 'edit_user')) {
		goto label26409;
	}

	$E8e13b4c9d9584b6 .= '<button title="Kill Connections" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'kill\');"><i class="fas fa-hammer"></i></button>';
	goto label26438;

	label26532:

	goto label26780;

	label26534:

	$c8629372383359e0 = '<a href=\'stream_view?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a><br/><small class=\'text-secondary\'>Online: ' . XUI::a5D0a3407690f047(time() - $Fb9da1713bff19ce['last_active']) . '</small>';

	label26550:

	if (0 < $Fb9da1713bff19ce['member_id']) {
		goto label26643;
	}

	$C0a1fd30f0173389 = $Fb9da1713bff19ce['owner_name'];
	goto label26641;

	label26559:

	$ab037ad2072943df = '<i class="text-info fas fa-square"></i>';

	label26560:

	if ($Fb9da1713bff19ce['exp_date']) {
		goto label26297;
	}

	$Fd59b51c86fe1420 = '&infin;';
	goto label26136;
	goto label26297;

	label26569:

	if (0 < strlen($bad7716b52f57546)) {
		goto label26579;
	}

	$E8e13b4c9d9584b6 .= '<button type="button" disabled class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-note"></i></button>';
	goto label26181;

	label26579:

	$E8e13b4c9d9584b6 .= '<button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . $bad7716b52f57546 . '"><i class="mdi mdi-note"></i></button>';
	goto label26181;

	label26584:

	$A9c066cee616f400 = '<button type=\'button\' class=\'btn btn-dark text-white btn-xs waves-effect waves-light\'>&infin;</button>';

	label26585:

	$bad7716b52f57546 = '';

	if (!(0 < strlen($Fb9da1713bff19ce['admin_notes']))) {
		goto label26755;
	}

	goto label26753;

	label26597:
	if ($Fb9da1713bff19ce['exp_date'] && ($Fb9da1713bff19ce['exp_date'] < time())) {
		goto label26610;
	}

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square tooltip" title="Active"></i>';
	goto label26775;

	label26610:

	$b9f049445aa9bd5d = '<i class="text-warning far fa-square tooltip" title="Expired"></i>';
	goto label26775;

	label26613:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'ban\');">Ban Line</a>';

	label26617:

	if ($Fb9da1713bff19ce['enabled']) {
		goto label26332;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'enable\');">Enable Line</a>';
	goto label26336;
	goto label26332;

	label26629:

	if ($Fb9da1713bff19ce['enabled']) {
		goto label26639;
	}

	$E8e13b4c9d9584b6 .= '<button title="Enable" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(' . $Fb9da1713bff19ce['id'] . ', \'enable\');"><i class="mdi mdi-lock"></i></button>';
	goto label26405;

	label26639:

	goto label26401;

	label26641:

	goto label26650;

	label26643:

	$C0a1fd30f0173389 = '<a href=\'user?id=' . $Fb9da1713bff19ce['member_id'] . '\'>' . $Fb9da1713bff19ce['owner_name'] . '</a>';

	label26650:

	if (!isset(XUI::$rRequest['no_url'])) {
		goto label26252;
	}

	goto label26230;

	label26658:
	if (!(E589A4Bf54a2DAd1('adv', 'fingerprint') && (0 < $Fb9da1713bff19ce['active_connections']))) {
		goto label26674;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="modalFingerprint(' . $Fb9da1713bff19ce['id'] . ', \'user\');">Fingerprint</a>';

	label26674:

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="javascript:void(0);" onClick="openDownload(\'' . $Fb9da1713bff19ce['username'] . '\', \'' . $Fb9da1713bff19ce['password'] . '\');">Download Playlist</a>';

	if (!E589A4BF54A2daD1('adv', 'edit_user')) {
		goto label26340;
	}

	goto label26495;

	label26691:

	if ($Fb9da1713bff19ce['is_trial']) {
		goto label26698;
	}

	$dc2b8ff4adf881ae = '<i class="text-secondary far fa-square"></i>';
	goto label26323;

	label26698:

	$dc2b8ff4adf881ae = '<i class="text-warning fas fa-square"></i>';
	goto label26323;

	label26701:

	$E8e13b4c9d9584b6 .= '<div class="btn-group dropdown"><a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a><div class="dropdown-menu dropdown-menu-right">';

	if (!E589A4bf54a2dad1('adv', 'edit_user')) {
		goto label26741;
	}

	$E8e13b4c9d9584b6 .= '<a class="dropdown-item" href="line?id=' . $Fb9da1713bff19ce['id'] . '" ' . (XUI::$rSettings['modal_edit'] ? 'onClick="editModal(event, \'line\', ' . intval($Fb9da1713bff19ce['id']) . ', \'' . str_replace('"', '&quot;', str_replace('\'', '\\\'', $Fb9da1713bff19ce['username'])) . '\')" data-modal="true"' : '') . '>Edit Line</a>';

	label26741:

	goto label26658;

	label26743:

	goto label26746;

	label26745:

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square tooltip" title="Banned"></i>';

	label26746:

	if (0 < $Fb9da1713bff19ce['active_connections']) {
		goto label26457;
	}

	goto label26454;

	label26753:

	$bad7716b52f57546 .= $Fb9da1713bff19ce['admin_notes'];

	label26755:

	if (!(0 < strlen($Fb9da1713bff19ce['reseller_notes']))) {
		goto label26393;
	}

	if (!(strlen($bad7716b52f57546) != 0)) {
		goto label26391;
	}

	$bad7716b52f57546 .= "\n";
	goto label26391;

	label26775:

	goto label26778;

	label26777:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>';

	label26778:

	goto label26743;

	label26780:
}

label26782:

echo json_encode($B9869413eae86beb);
goto label4860;

label26787:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label26792:

goto label6528;

label26793:

$cf0aab70014807af[] = '`streams`.`id` = ?';
goto label6523;

label26796:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label26808;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label20954;

label26808:

goto label20949;

label26809:

if (!(0 < strlen(XUI::$rRequest['category']))) {
	goto label26824;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label26824:

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label327;
}

goto label310;

label26835:

$B9869413eae86beb['recordsTotal'] = 0;
goto label26843;

label26838:

$B9869413eae86beb['recordsTotal'] = $b62d6460eb33ea07->get_row()['count'];

label26843:

goto label16705;

label26844:

$b42f717d234fde64 = [];

if (!(0 < count($dec36723d7be7c49))) {
	goto label9265;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$b42f717d234fde64[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['stream_display_name'];
}

goto label9265;

label26872:

$cf0aab70014807af[] = '`streams_servers`.`on_demand` = 1';

label26874:

goto label17254;

label26875:

$cf0aab70014807af[] = '(`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` = 2)';
goto label17254;

label26878:

$B91645b8411dc88c = 'SELECT `detect_restream_logs`.`id`, `detect_restream_logs`.`user_id`, `detect_restream_logs`.`stream_id`, `detect_restream_logs`.`ip`, `detect_restream_logs`.`time`, `lines`.`username`, `streams`.`stream_display_name`, `streams`.`type` FROM `detect_restream_logs` LEFT JOIN `lines` ON `lines`.`id` = `detect_restream_logs`.`user_id` LEFT JOIN `streams` ON `streams`.`id` = `detect_restream_logs`.`stream_id` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label17848;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label27044;

	label26904:

	$F5ba2106d5227309 = '<a href="line?id=' . $Fb9da1713bff19ce['user_id'] . '">' . $Fb9da1713bff19ce['username'] . '</a>';

	label26911:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $F5ba2106d5227309, $fe93a43f53d92a4e, $b38e11ffdc6a3abb, date($f1dcaed925076e67['datetime_format'], $Fb9da1713bff19ce['date']), $E8e13b4c9d9584b6];

	label26927:

	goto label27081;

	label26929:

	if (E589A4BF54a2DAD1('adv', 'edit_user')) {
		goto label26940;
	}

	$F5ba2106d5227309 = $Fb9da1713bff19ce['username'];
	goto label26911;

	label26940:

	goto label26904;

	label26942:

	$fe93a43f53d92a4e = '<a href=\'' . $F83b167f3cf044be[$Fb9da1713bff19ce['type']] . '?id=' . $Fb9da1713bff19ce['stream_id'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';
	goto label26962;

	label26955:

	$fe93a43f53d92a4e = '<a href=\'serie?id=' . $Fb9da1713bff19ce['series_no'] . '\'>' . $Fb9da1713bff19ce['stream_display_name'] . '</a>';

	label26962:

	goto label26929;

	label26964:

	$Edebd7b009e56f17 = explode(':', $Fb9da1713bff19ce['ip']);
	$b38e11ffdc6a3abb = '<a onClick="whois(\'' . $Fb9da1713bff19ce['ip'] . '\');" href=\'javascript: void(0);\'>' . (1 < count($Edebd7b009e56f17) ? implode(':', array_slice($Edebd7b009e56f17, 0, 4)) . ':<br/>' . implode(':', array_slice($Edebd7b009e56f17, 4, 8)) : $Fb9da1713bff19ce['ip']) . '</a>';

	label27005:

	$f51fdbb70a8cbb4b = [1 => 'streams', 2 => 'movies', 3 => 'streams', 4 => 'radio', 5 => 'series'];
	$F83b167f3cf044be = [1 => 'stream_view', 2 => 'stream_view', 3 => 'stream_view', 4 => 'stream_view'];
	goto label27009;

	label27009:

	if (e589a4bf54A2DAD1('adv', $f51fdbb70a8cbb4b[$Fb9da1713bff19ce['type']])) {
		goto label27022;
	}

	$fe93a43f53d92a4e = $Fb9da1713bff19ce['stream_display_name'];
	goto label26929;

	label27022:

	if ($Fb9da1713bff19ce['type'] == 5) {
		goto label26955;
	}

	goto label26942;

	label27029:

	$E8e13b4c9d9584b6 = '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" disabled><i class="fas fa-hammer"></i></button>';
	$b38e11ffdc6a3abb = '';
	goto label27005;

	label27033:

	if (!in_array($Fb9da1713bff19ce['ip'], $c5feeca020e7bf5c)) {
		goto label27075;
	}

	goto label27072;

	label27044:

	if (!$De97a60c730465cd) {
		goto label27062;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label26927;

	label27062:

	if (0 < strlen($Fb9da1713bff19ce['ip'])) {
		goto label27033;
	}

	goto label27029;

	label27072:

	$E8e13b4c9d9584b6 = '<button title="IP Already Blocked" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="fas fa-hammer"></i></button>';
	goto label27079;

	label27075:

	$E8e13b4c9d9584b6 = '<button title="Block IP" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(\'' . $Fb9da1713bff19ce['ip'] . '\', \'block\');"><i class="fas fa-hammer"></i></button>';

	label27079:

	goto label26964;

	label27081:
}

goto label17848;

label27084:

$ca8155fd3c07c1ee = XUI::$redis->zRangeByScore('STREAM#' . $ee6d1fc5d801b43f, '-inf', '+inf', [
	'limit' => [$bcfd61adc96d4b72, $Cc2b5dfe75dc164b]
]);

label27096:

$a3b35b5bcdf091ff = XUI::$redis->zCard('STREAM#' . $ee6d1fc5d801b43f);
goto label24702;

label27103:

goto label24693;

label27104:

if (!(intval(XUI::$rRequest['server']) == -1)) {
	goto label27115;
}

$cf0aab70014807af[] = '`streams_servers`.`server_id` IS NULL';

label27115:

goto label5738;

label27116:

goto label5729;

label27117:

if (!(0 < intval(XUI::$rRequest['server_id']))) {
	goto label22653;
}

$cf0aab70014807af[] = '(`lines_live`.`server_id` = ? OR `lines_live`.`proxy_id` = ?)';
$B03cfeca75020c69[] = XUI::$rRequest['server_id'];
$B03cfeca75020c69[] = XUI::$rRequest['server_id'];
goto label22653;

label27137:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label27206;

	label27141:

	$a22fa0d1973a0b0e = 4;

	label27142:

	goto label27172;

	label27144:

	$a22fa0d1973a0b0e = 2;
	goto label27172;

	label27147:

	$c68b76c7e42b19eb = '<a href=\'javascript: void(0);\' data-src=\'resize?maxw=512&maxh=512&url=' . $Ccbdf03f8a4df633['movie_image'] . '\'><img loading=\'lazy\' src=\'resize?maxh=32&maxw=64&url=' . $Ccbdf03f8a4df633['movie_image'] . '\' /></a>';

	label27154:

	$B9869413eae86beb['data'][] = [$Fb9da1713bff19ce['id'], $c68b76c7e42b19eb, $B7bbd17ec35a49aa, $D8d609d5bdc92a03, $E537e0b49c6c29c9[$a22fa0d1973a0b0e]];

	label27164:

	goto label27305;

	label27166:

	$a22fa0d1973a0b0e = 3;
	goto label27170;

	label27169:

	$a22fa0d1973a0b0e = 5;

	label27170:

	goto label27242;

	label27172:

	goto label27242;

	label27174:

	if (intval($Fb9da1713bff19ce['direct_proxy']) == 1) {
		goto label27169;
	}

	goto label27166;

	label27184:

	$c68b76c7e42b19eb = '';
	$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);
	if (!((0 < strlen($Ccbdf03f8a4df633['movie_image'])) && XUI::$rSettings['show_images'])) {
		goto label27154;
	}

	goto label27147;

	label27206:

	if (!$De97a60c730465cd) {
		goto label27224;
	}

	$B9869413eae86beb['data'][] = filterrow($Fb9da1713bff19ce, XUI::$rRequest['show_columns'], XUI::$rRequest['hide_columns']);
	goto label27164;

	label27224:

	$a22fa0d1973a0b0e = 0;
	goto label27280;

	label27227:

	if ($Fb9da1713bff19ce['to_analyze'] == 1) {
		goto label27144;
	}

	if ($Fb9da1713bff19ce['stream_status'] == 1) {
		goto label27240;
	}

	$a22fa0d1973a0b0e = 1;
	goto label27142;

	label27240:

	goto label27141;

	label27242:

	$E276bd7f89cfc862 = $Fb9da1713bff19ce['title'] . ' - Season ' . $Fb9da1713bff19ce['season_num'];
	$B7bbd17ec35a49aa = '<strong>' . $Fb9da1713bff19ce['stream_display_name'] . ('</strong><br><span style=\'font-size:11px;\'>' . $E276bd7f89cfc862 . '</span>');

	if ($Fb9da1713bff19ce['server_name']) {
		goto label27263;
	}

	$D8d609d5bdc92a03 = 'No Server Selected';
	goto label27261;

	label27261:

	goto label27184;

	label27263:

	$D8d609d5bdc92a03 = $Fb9da1713bff19ce['server_name'];

	if (!(1 < $D52a67130c4ab288[$Fb9da1713bff19ce['id']])) {
		goto label27184;
	}

	$D8d609d5bdc92a03 .= ' &nbsp; <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>+ ' . ($D52a67130c4ab288[$Fb9da1713bff19ce['id']] - 1) . '</button>';
	goto label27184;

	label27280:

	if (intval($Fb9da1713bff19ce['direct_source']) == 1) {
		goto label27174;
	}
	if (!is_null($Fb9da1713bff19ce['pid']) && (0 < $Fb9da1713bff19ce['pid'])) {
		goto label27303;
	}

	$a22fa0d1973a0b0e = 0;
	goto label27172;

	label27303:

	goto label27227;

	label27305:
}

label27307:

echo json_encode($B9869413eae86beb);
goto label1309;

label27312:

$E7dbfc96029b3745 = intval(XUI::$rRequest['order'][0]['column']);

label27320:

$cf0aab70014807af = $B03cfeca75020c69 = [];

if (!(0 < strlen(XUI::$rRequest['search']['value']))) {
	goto label25730;
}

goto label25713;

label27333:

if (!$a2a53f18f4f95c8b[$E7dbfc96029b3745]) {
	goto label27355;
}

$bc89bec2d7c7cf08 = (strtolower(XUI::$rRequest['order'][0]['dir']) === 'desc' ? 'desc' : 'asc');
$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label27355:

goto label16824;

label27356:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$c5feeca020e7bf5c[] = $Fb9da1713bff19ce['ip'];
}

$B91645b8411dc88c = 'SELECT `login_logs`.`id`, `login_logs`.`type`, `login_logs`.`access_code`, `access_codes`.`code`, `login_logs`.`user_id`, `users`.`username`, `login_logs`.`status`, `login_logs`.`login_ip`, `login_logs`.`date` FROM `login_logs` LEFT JOIN `users` ON `users`.`id` = `login_logs`.`user_id` LEFT JOIN `access_codes` ON `access_codes`.`id` = `login_logs`.`access_code` ' . $F5190fed237fabec . ' ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label16967;
}

goto label16839;

label27386:

$cf0aab70014807af[] = '`type` = 4';
if (!(isset(XUI::$rRequest['category_id']) && (0 < intval(XUI::$rRequest['category_id'])))) {
	goto label27407;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category_id'];

label27407:

goto label18742;

label27408:

goto label27474;

label27409:

if (e589A4Bf54A2daD1('adv', 'servers')) {
	goto label27416;
}

exit();

label27416:

goto label12456;

label27417:

$A38e57f944de21df = 'SELECT COUNT(DISTINCT(`streams`.`id`)) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` ' . $F5190fed237fabec . ';';

label27421:

$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label25783;
}

$B9869413eae86beb['recordsTotal'] = 0;
goto label25782;

label27433:

$cf0aab70014807af[] = '`streams`.`type` = 1';
goto label27438;

label27436:

$cf0aab70014807af[] = '`streams`.`type` = 3';

label27438:

goto label944;

label27439:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label27445:

$A38e57f944de21df = 'SELECT COUNT(DISTINCT(`streams`.`id`)) AS `count` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams`.`id` LEFT JOIN `streams_series` ON `streams_series`.`id` = `streams_episodes`.`series_id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);
goto label16191;

label27454:

if (0 < count($cf0aab70014807af)) {
	goto label27462;
}

$F5190fed237fabec = '';
goto label1202;

label27462:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
goto label1202;

label27469:

echo json_encode($B9869413eae86beb);
exit();

label27474:

goto label9250;
goto label21908;

label27476:

$e4829bf95c7424f6 = 'ORDER BY ' . $a2a53f18f4f95c8b[$E7dbfc96029b3745] . ' ' . $bc89bec2d7c7cf08;

label27481:

$A38e57f944de21df = 'SELECT COUNT(*) AS `count` FROM `lines` RIGHT JOIN `enigma2_devices` ON `enigma2_devices`.`user_id` = `lines`.`id` ' . $F5190fed237fabec . ';';
$b62d6460eb33ea07->query($A38e57f944de21df, ...$B03cfeca75020c69);

if ($b62d6460eb33ea07->num_rows() == 1) {
	goto label24739;
}

goto label24736;

label27495:

goto label27498;

label27496:

$cf0aab70014807af[] = '(`streams`.`movie_properties` IS NULL OR `streams`.`movie_properties` = \'\' OR `streams`.`movie_properties` = \'[]\' OR `streams`.`movie_properties` = \'{}\' OR `streams`.`movie_properties` LIKE \'%tmdb_id":""%\')';

label27498:

goto label9872;

label27499:

echo json_encode($B9869413eae86beb);
exit();

label27504:

goto label27506;
goto label4967;

label27506:

?>