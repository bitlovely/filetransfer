<?php


goto label376;

label1:

$e70d5d558180c15e += $b62d6460eb33ea07->num_rows();

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$A8a58d9f67df1ccb[] = $Fb9da1713bff19ce;
}

label12:

echo '                        <li class="dropdown notification-list">' . "\r\n" . '                            ';
goto label472;

label14:

echo '        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/listings.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t" . '<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t";

label15:

echo '        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        ';

if ($cc474bf3b4c0707e[$E59d0debc75e7be8['theme']]['image']) {
	goto label23;
}

echo '        <style>' . "\r\n" . '        html, body {' . "\r\n" . '          overflow-x: hidden;' . "\r\n" . '        }' . "\r\n" . '        ';
goto label465;

label23:

echo '        <style>' . "\r\n" . '        body {' . "\r\n" . '            background: url(\'./assets/images/theme/';
echo basename($cc474bf3b4c0707e[$E59d0debc75e7be8['theme']]['image']);
echo '\');' . "\r\n" . '        }' . "\r\n" . '        </style>' . "\r\n\t\t";

label32:

goto label361;

label33:

echo '                                    <li><a href="live_connections">';
echo $_['live_connections'];
echo '</a></li>' . "\r\n" . '                                    <li><a href="line_activity">';
echo $_['activity_logs'];
echo '</a></li>' . "\r\n" . '                                    ';
goto label112;

label41:

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['mag_devices'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            <li><a href="mag">';
echo $_['add_mag'];
echo '</a></li>' . "\r\n" . '                                            ';
goto label177;

label49:

echo '                                            <li><a href="enigmas">';
echo $_['manage_enigma_devices'];
echo '</a></li>' . "\r\n" . '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label53:

goto label81;

label54:

echo '-' . $E59d0debc75e7be8['hue'];

label57:

echo '"></div>' . "\r\n" . '            <div class="navbar-custom" id="topnav-custom">' . "\r\n" . '                <div class="container-fluid">' . "\r\n" . '                    <ul class="list-unstyled topnav-menu float-right mb-0">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="navbar-toggle nav-link">' . "\r\n" . '                                <div class="lines text-white">' . "\r\n" . '                                    <span></span>' . "\r\n" . '                                    <span></span>' . "\r\n" . '                                    <span></span>' . "\r\n" . '                                </div>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                                <i class="mdi mdi-coin noti-icon"></i>&nbsp;' . "\r\n" . '                                <span id="owner_credits">';
echo number_format($E59d0debc75e7be8['credits'], 0);
echo '</span><i class="mdi mdi-chevron-down"></i>' . "\r\n" . '                            </a>' . "\r\n" . '                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">' . "\r\n" . '                                <div class="dropdown-item noti-title">' . "\r\n" . '                                    <h5 class="m-0">';
goto label308;

label66:

echo '</a></li>' . "\r\n" . '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label67:

if (!$db0a61ef32b89a27['create_enigma']) {
	goto label53;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['enigma_devices'];
goto label90;

label75:

echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t";

if ($Ebb0b63f7c597ba4) {
	goto label79;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li><a href="epg_view">TV Guide</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t";

label79:

echo '                                </ul>' . "\r\n" . '                            </li>' . "\r\n" . '                            ';
goto label352;

label81:

echo '                                </ul>' . "\r\n" . '                            </li>' . "\r\n" . '                            ';

label82:

if (!$db0a61ef32b89a27['can_view_vod']) {
	goto label352;
}

echo '                            <li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-play"></i>';
echo $_['content'];
goto label393;

label90:

echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            <li><a href="enigma">';
echo $_['add_enigma'];
echo '</a></li>' . "\r\n" . '                                            ';

if (!$ba4f280bd137bfad) {
	goto label49;
}

echo '                                            <li><a href="enigma?trial=1">Generate Trial Device</a></li>' . "\r\n" . '                                            ';
goto label49;

label99:

echo '                                <i class="fe-mail noti-icon"></i>' . "\r\n" . '                                ';

if (!(0 < $e70d5d558180c15e)) {
	goto label196;
}

echo '                                <span class="badge badge-info rounded-circle noti-icon-badge" style="min-width:20px;">';
echo $e70d5d558180c15e < 100 ? $e70d5d558180c15e : '99+';
goto label195;

label112:

echo '                                    <li><a href="user_logs">User Logs</a></li>' . "\r\n" . '                                </ul>' . "\r\n" . '                            </li>' . "\r\n" . '                        </ul>' . "\r\n" . '                        <div class="clearfix"></div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </header>' . "\r\n" . '        ';

if (!$f1dcaed925076e67['js_navigate']) {
	goto label491;
}

echo '        <div id="status">' . "\r\n" . '            <div class="spinner"></div>' . "\r\n" . '        </div>' . "\r\n" . '        ';
goto label491;

label119:

$Fe53bcd53690fff4 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `users` WHERE `id` = ? OR `owner_id` = ?;', $E59d0debc75e7be8['id'], $E59d0debc75e7be8['id']);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Fe53bcd53690fff4[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($Fe53bcd53690fff4))) {
	goto label12;
}

goto label441;

label144:

echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    ';

if (!$db0a61ef32b89a27['create_line']) {
	goto label332;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['user_lines'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            <li><a href="line">';
goto label401;

label154:

echo '                    <div class="clearfix"></div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '            <div class="topbar-menu">' . "\r\n" . '                <div class="container-fluid">' . "\r\n" . '                    <div id="navigation">' . "\r\n" . '                        <ul class="navigation-menu">' . "\r\n" . '                            <li class="has-submenu">' . "\r\n" . '                                <a href="dashboard"><i class="fe-activity"></i>';
echo $_['dashboard'];
echo '</a>' . "\r\n" . '                            </li>' . "\r\n" . '                            ';

if (!$db0a61ef32b89a27['create_sub_resellers']) {
	goto label338;
}

echo '                            <li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-users"></i>';
goto label409;

label164:

if (!(0 < strlen($E59d0debc75e7be8['hue']))) {
	goto label173;
}

echo ' whiteout';

label173:

echo '">' . "\r\n" . '                                <img src="assets/images/logo-topbar.png" alt="" height="28">' . "\r\n" . '                            </span>' . "\r\n" . '                        </a>' . "\r\n" . '                    </div>' . "\r\n" . '                    ';

if ($Ebb0b63f7c597ba4) {
	goto label440;
}

goto label284;

label177:

if (!$ba4f280bd137bfad) {
	goto label181;
}

echo '                                            <li><a href="mag?trial=1">Generate Trial Device</a></li>' . "\r\n" . '                                            ';

label181:

echo '                                            <li><a href="mags">';
echo $_['manage_mag_devices'];
goto label66;

label185:

echo '</title>' . "\r\n" . '        <meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\r\n" . '        <meta http-equiv="X-UA-Compatible" content="IE=edge" />' . "\r\n" . '        <meta name="robots" content="noindex,nofollow">' . "\r\n" . '        <link rel="shortcut icon" href="assets/images/favicon.ico">' . "\r\n" . '        <link href="assets/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/treeview/style.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" />' . "\r\n" . '        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/jbox/jBox.all.min.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t" . '<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t";

if (!$cc474bf3b4c0707e[$E59d0debc75e7be8['theme']]['dark']) {
	goto label194;
}

echo "\t\t" . '<link href="assets/css/bootstrap.dark.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/app.dark.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/listings.dark.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t" . '<link href="assets/css/custom.dark.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t";
goto label15;

label194:

goto label14;

label195:

echo '</span>' . "\r\n" . '                                ';

label196:

echo '                            </a>' . "\r\n" . '                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">' . "\r\n" . '                                <div class="dropdown-item noti-title">' . "\r\n" . '                                    <h5 class="m-0">' . "\r\n" . '                                        Tickets' . "\r\n" . '                                    </h5>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="slimscroll noti-scroll">' . "\r\n" . '                                    ';

foreach ($A8a58d9f67df1ccb as $e980e66d0f7b6829) {
	goto label211;

	label201:

	echo htmlspecialchars($e980e66d0f7b6829['title']);
	echo '                                            <small class="text-muted">';
	echo $ec21332021cc3da4;
	echo '</small>' . "\r\n" . '                                        </p>' . "\r\n" . '                                    </a>' . "\r\n" . '                                    ';
	goto label269;

	label211:

	$ec21332021cc3da4 = time() - intval($e980e66d0f7b6829['date']);

	if ($ec21332021cc3da4 < 60) {
		goto label247;
	}

	if ($ec21332021cc3da4 < 3600) {
		goto label239;
	}

	if ($ec21332021cc3da4 < 86400) {
		goto label259;
	}

	$ec21332021cc3da4 = ceil($ec21332021cc3da4 / 86400) . ' days ago';
	goto label257;

	label239:

	$ec21332021cc3da4 = ceil($ec21332021cc3da4 / 60) . ' minutes ago';

	label245:

	goto label251;

	label247:

	goto label249;

	label249:

	$ec21332021cc3da4 = $ec21332021cc3da4 . ' seconds ago';

	label251:

	echo '                                    <a href="ticket_view?id=';
	echo $e980e66d0f7b6829['id'];
	echo '" class="dropdown-item notify-item">' . "\r\n" . '                                        <div class="notify-icon bg-info">' . "\r\n" . '                                            <i class="mdi mdi-comment"></i>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <p class="notify-details">';
	goto label201;

	label257:

	goto label265;

	label259:

	$ec21332021cc3da4 = ceil($ec21332021cc3da4 / 3600) . ' hours ago';

	label265:

	goto label245;
	goto label239;

	label269:
}

goto label479;

label272:

echo $f1dcaed925076e67['server_name'] ?: 'XUI';
echo ' ';

if (!isset($F6edd90960a3bd9d)) {
	goto label283;
}

echo ' | ' . $F6edd90960a3bd9d;

label283:

goto label185;

label284:

echo '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%" id="header_stats">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./live_connections" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <i class="fe-zap text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate';
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label306;
}

echo '-' . $E59d0debc75e7be8['hue'];

label306:

echo ' btn-xs waves-effect waves-light no-border"><span id="header_connections">0</span></button>' . "\r\n" . '                                </span>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./live_connections" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <i class="fe-users text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate';
goto label418;

label308:

echo $E59d0debc75e7be8['username'];
echo '</h5>' . "\r\n" . '                                </div>' . "\r\n" . '                                <a href="edit_profile" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>User Profile</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                <a href="user_logs?user_id=';
echo intval($E59d0debc75e7be8['id']);
echo '" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>Credit Spend</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                <a href="logout" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>Logout</span>' . "\r\n" . '                                </a>' . "\r\n" . '                            </div>' . "\r\n" . '                        </li>' . "\r\n" . '                        ';
$A8a58d9f67df1ccb = [];
goto label119;

label319:

echo $_['movies'];
echo '</a></li>' . "\r\n" . '                                    <li><a href="episodes">';
echo $_['episodes'];
echo '</a></li>' . "\r\n" . '                                    <li><a href="radios">';
echo $_['stations'];
goto label75;

label328:

echo '                                            <li><a href="lines">';
echo $_['manage_lines'];
echo '</a></li>' . "\r\n" . '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label332:

if (!$db0a61ef32b89a27['create_mag']) {
	goto label67;
}

goto label41;

label337:

echo '</a></li>' . "\r\n" . '                                </ul>' . "\r\n" . '                            </li>' . "\r\n" . '                            ';

label338:
if (!($db0a61ef32b89a27['create_line'] || $db0a61ef32b89a27['create_mag'] || $db0a61ef32b89a27['create_enigma'])) {
	goto label82;
}

echo "\t\t\t\t\t\t\t" . '<li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-desktop"></i>';
echo $_['lines'];
goto label144;

label352:

echo '                            <li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-wrench"></i>';
echo $_['logs'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    ';

if (!$db0a61ef32b89a27['reseller_client_connection_logs']) {
	goto label112;
}

goto label33;

label361:

if (!isset($C3277274bfd50f59)) {
	goto label366;
}

echo $C3277274bfd50f59;

label366:

echo '    </head>' . "\r\n" . '    <body>' . "\r\n" . '        <header id="topnav">' . "\r\n" . '            <div class="navbar-overlay bg-animate';

if (!(0 < strlen($E59d0debc75e7be8['hue']))) {
	goto label57;
}

goto label54;

label376:

if (!(count(get_included_files()) == 1)) {
	goto label386;
}

exit();

label386:

$ba4f280bd137bfad = E167D33DBF12D418($E59d0debc75e7be8['id']);
echo '<!DOCTYPE html>' . "\r\n" . '<html lang="en">' . "\r\n" . '    <head>' . "\r\n" . '        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . "\r\n" . '        <title>';
goto label272;

label393:

echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    <li><a href="streams">';
echo $_['streams'];
echo '</a></li>' . "\r\n" . '                                    <li><a href="created_channels">';
echo $_['created_channels'];
echo '</a></li>' . "\r\n" . '                                    <li><a href="movies">';
goto label319;

label401:

echo $_['add_line'];
echo '</a></li>' . "\r\n" . '                                            ';

if (!$ba4f280bd137bfad) {
	goto label408;
}

echo '                                            <li><a href="line?trial=1">Generate Trial Line</a></li>' . "\r\n" . '                                            ';

label408:

goto label328;

label409:

echo $_['users'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    <li><a href="user">';
echo $_['add_user'];
echo '</a></li>' . "\r\n" . '                                    <li><a href="users">';
echo $_['manage_users'];
goto label337;

label418:
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label439;
}

echo '-' . $E59d0debc75e7be8['hue'];

label439:

echo ' btn-xs waves-effect waves-light no-border"><span id="header_users">0</span></button>' . "\r\n" . '                                </span>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    ';

label440:

goto label154;

label441:

$b62d6460eb33ea07->query('SELECT `tickets`.`id`, `tickets`.`title`, MAX(`tickets_replies`.`date`) AS `date`, `users`.`username` FROM `tickets` LEFT JOIN `tickets_replies` ON `tickets_replies`.`ticket_id` = `tickets`.`id` LEFT JOIN `users` ON `users`.`id` = `tickets`.`member_id` WHERE `tickets`.`status` <> 0 AND `admin_read` = 0 AND `user_read` = 1 AND `member_id` <> ? AND `member_id` IN (SELECT `id` FROM `users` WHERE `owner_id` = ?) GROUP BY `tickets_replies`.`ticket_id` ORDER BY `tickets_replies`.`date` DESC LIMIT 50;', $E59d0debc75e7be8['id'], $E59d0debc75e7be8['id']);
$e70d5d558180c15e = $b62d6460eb33ea07->num_rows();

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$A8a58d9f67df1ccb[] = $Fb9da1713bff19ce;
}

$b62d6460eb33ea07->query('SELECT `tickets`.`id`, `tickets`.`title`, MAX(`tickets_replies`.`date`) AS `date`, `users`.`username` FROM `tickets` LEFT JOIN `tickets_replies` ON `tickets_replies`.`ticket_id` = `tickets`.`id` LEFT JOIN `users` ON `users`.`id` = `tickets`.`member_id` WHERE `tickets`.`status` <> 0 AND `user_read` = 0 AND `admin_read` = 1 AND `member_id` = ? GROUP BY `tickets_replies`.`ticket_id` ORDER BY `tickets_replies`.`date` DESC LIMIT 50;', $E59d0debc75e7be8['id']);
goto label1;

label465:

if (!$Ebb0b63f7c597ba4) {
	goto label469;
}

echo '        .dataTables_wrapper {' . "\r\n" . '            overflow-x: auto !important;' . "\r\n" . '        }' . "\r\n" . '        ';

label469:

echo '        </style>' . "\r\n" . '        ';
goto label32;
goto label23;

label472:

if (0 < $e70d5d558180c15e) {
	goto label477;
}

echo '                            <a class="nav-link waves-effect text-white" href="tickets" role="button">' . "\r\n" . '                            ';
goto label99;

label477:

echo '                            <a class="nav-link dropdown-toggle waves-effect text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                            ';
goto label99;

label479:

echo '                                </div>' . "\r\n" . '                                <a href="tickets" class="dropdown-item text-center text-primary notify-item notify-all">' . "\r\n" . '                                    View Tickets' . "\r\n" . '                                    <i class="fi-arrow-right"></i>' . "\r\n" . '                                </a>' . "\r\n" . '                            </div>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <div class="logo-box">' . "\r\n" . '                        <a href="dashboard" class="logo text-center">' . "\r\n" . '                            <span class="logo-lg';

if (!(0 < strlen($E59d0debc75e7be8['hue']))) {
	goto label489;
}

echo ' whiteout';

label489:

echo '">' . "\r\n" . '                                <img src="assets/images/logo-topbar.png" alt="" height="26">' . "\r\n" . '                            </span>' . "\r\n" . '                            <span class="logo-sm';
goto label164;

label491:

?>