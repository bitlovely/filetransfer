<?php


goto label2320;

label1:

echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n\t\t\t\t\t\t\t\t\t";

if (!E589A4bF54A2dad1('adv', 'servers')) {
	goto label318;
}

echo '                                    <li><a href="servers">';
echo $_['manage_servers'];
echo '</a></li>' . "\r\n" . '                                    <li><a href="proxies">';
goto label315;

label14:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label15:
if (!(e589A4Bf54A2daD1('adv', 'mass_edit_enigmas') || E589A4bF54A2daD1('adv', 'mass_sedits') || E589a4Bf54a2DaD1('adv', 'mass_edit_lines') || E589A4bF54A2dAD1('adv', 'mass_edit_mags') || e589A4bF54a2DAd1('adv', 'mass_sedits_vod') || E589A4bf54a2dAD1('adv', 'mass_sedits') || e589a4bF54a2Dad1('adv', 'mass_edit_radio') || E589a4Bf54a2dAD1('adv', 'mass_edit_streams') || e589a4BF54a2DaD1('adv', 'mass_edit_users'))) {
	goto label2127;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['mass_edit'];
goto label367;

label74:

echo '                                <div class="dropdown-divider"></div>' . "\r\n" . '                                <a href="settings_plex" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>Plex Settings</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                <a href="settings_watch" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>Watch Settings</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                ';

label75:

echo '                                <div class="dropdown-divider"></div>' . "\r\n" . '                                ';
if (!(e589A4BF54a2DaD1('adv', 'license') && !$E0a8102c8d2ef5b6)) {
	goto label332;
}

echo '                                <a href="license_info" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>License Info</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                ';
goto label332;

label88:

echo $e70d5d558180c15e < 100 ? $e70d5d558180c15e : '99+';
echo '</span>' . "\r\n" . '                                ';

label95:

echo '                            </a>' . "\r\n" . '                            <div class="dropdown-menu dropdown-menu-right dropdown-lg">' . "\r\n" . '                                <div class="dropdown-item noti-title">' . "\r\n" . '                                    <h5 class="m-0">' . "\r\n" . '                                        Tickets' . "\r\n" . '                                    </h5>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="slimscroll noti-scroll">' . "\r\n" . '                                    ';

foreach ($A8a58d9f67df1ccb as $e980e66d0f7b6829) {
	goto label128;

	label100:

	$ec21332021cc3da4 = ceil($ec21332021cc3da4 / 60) . ' minutes ago';

	label106:

	goto label112;

	label108:

	goto label110;

	label110:

	$ec21332021cc3da4 = $ec21332021cc3da4 . ' seconds ago';

	label112:

	echo '                                    <a href="ticket_view?id=';
	echo $e980e66d0f7b6829['id'];
	echo '" class="dropdown-item notify-item">' . "\r\n" . '                                        <div class="notify-icon bg-info">' . "\r\n" . '                                            <i class="mdi mdi-comment"></i>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <p class="notify-details">';
	goto label118;

	label118:

	echo htmlspecialchars($e980e66d0f7b6829['title']);
	echo '                                            <small class="text-muted">';
	echo $ec21332021cc3da4;
	echo '</small>' . "\r\n" . '                                        </p>' . "\r\n" . '                                    </a>' . "\r\n" . '                                    ';
	goto label168;

	label128:

	$ec21332021cc3da4 = time() - intval($e980e66d0f7b6829['date']);

	if ($ec21332021cc3da4 < 60) {
		goto label108;
	}

	if ($ec21332021cc3da4 < 3600) {
		goto label100;
	}

	if ($ec21332021cc3da4 < 86400) {
		goto label158;
	}

	$ec21332021cc3da4 = ceil($ec21332021cc3da4 / 86400) . ' days ago';
	goto label156;

	label156:

	goto label164;

	label158:

	$ec21332021cc3da4 = ceil($ec21332021cc3da4 / 3600) . ' hours ago';

	label164:

	goto label106;
	goto label100;

	label168:
}

goto label1712;

label171:

echo '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0" style="opacity: 80%" id="header_stats">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./live_connections" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <i class="fe-zap text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate';
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label193;
}

echo '-' . $E59d0debc75e7be8['hue'];

label193:

echo ' btn-xs waves-effect waves-light no-border"><span id="header_connections">0</span></button>' . "\r\n" . '                                </span>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./live_connections" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <i class="fe-users text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate';
goto label820;

label195:
if (!(e589a4BF54A2dAd1('adv', 'add_user') || E589A4Bf54a2DaD1('adv', 'users') || e589A4bF54a2DAd1('adv', 'add_mag') || E589A4bf54A2daD1('adv', 'manage_mag') || e589A4Bf54A2DaD1('adv', 'add_e2') || E589a4BF54a2dAD1('adv', 'manage_e2'))) {
	goto label1565;
}

echo "\t\t\t\t\t\t\t" . '<li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-desktop"></i>';
echo $_['lines'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    ';
goto label1102;

label237:

echo "\t\t\t\t\t\t" . '<li class="notification-list">' . "\r\n" . '                            <a href="settings" class="nav-link right-bar-toggle waves-effect ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label244;
}

echo 'text-warning';
goto label686;

label244:

goto label685;

label245:

echo '        <style>' . "\r\n" . '        body {' . "\r\n" . '            background: url(\'./assets/images/theme/';
echo basename($cc474bf3b4c0707e[$E59d0debc75e7be8['theme']]['image']);
echo '\');' . "\r\n" . '        }' . "\r\n" . '        </style>' . "\r\n\t\t";

label254:

goto label1703;

label255:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n\t\t\t\t\t\t\t\t\t";

label256:
if (!(E589A4bF54A2DaD1('adv', 'add_e2') || e589a4bF54a2DaD1('adv', 'manage_e2'))) {
	goto label1564;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['enigma_devices'];
goto label1077;

label273:

echo $_['transcode_profiles'];
echo '</a></li>' . "\r\n" . '                                            ';

label276:

if (!E589a4bf54a2dad1('adv', 'folder_watch')) {
	goto label2359;
}

echo '                                            <li><a href="plex">Plex Sync</a></li>' . "\r\n" . '                                            <li><a href="watch">';
goto label2356;

label285:
if (!(e589A4bF54a2dad1('adv', 'add_mag') || E589A4bf54a2Dad1('adv', 'manage_mag'))) {
	goto label256;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['mag_devices'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';
goto label1229;

label303:

echo $_['blocked_ips'];
echo '</a></li>' . "\r\n" . '                                            ';

label306:

if (!E589a4bF54a2DAd1('adv', 'block_isps')) {
	goto label1068;
}

echo '                                            <li><a href="isps">';
goto label1065;

label315:

echo $_['manage_proxies'];
echo '</a></li>' . "\r\n" . '                                    <li><a href="server_order">Server Order</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t";

label318:

if (!e589A4bF54A2DAD1('adv', 'process_monitor')) {
	goto label330;
}

echo '                                    <li><a href="process_monitor">';
goto label327;

label327:

echo $_['process_monitor'];
echo '</a></li>' . "\r\n" . '                                    ';

label330:

echo '                                </ul>' . "\r\n" . '                            </li>' . "\r\n" . '                            ';

label331:

goto label660;

label332:

echo '                                <a href="https://xui.one/billing/index.php?rp=/knowledgebase" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>XUI Knowledgebase</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                <div class="dropdown-divider"></div>' . "\r\n" . '                                <a href="logout" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>Logout</span>' . "\r\n" . '                                </a>' . "\r\n" . '                            </div>' . "\r\n" . '                        </li>' . "\r\n" . '                        ';
if (!(!(XUI::$rSettings['security_key'] ?: '') && e589A4bF54A2DAd1('adv', 'servers'))) {
	goto label2106;
}

echo '                        <li class="notification-list">' . "\r\n" . '                            <a title="<strong>No security key set!</strong><br/><br/>Once you have updated all of your load balancers, go to <strong>Quick Tools -> General</strong> and select <strong>Renew Security Key</strong>." href="quick_tools" class="nav-link right-bar-toggle waves-effect tooltip-left ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label936;
}

goto label934;

label353:

echo '</a></li>' . "\r\n" . '                                            ';

label354:

echo '                                            ';
if (!(!$Ebb0b63f7c597ba4 && e589a4BF54A2DaD1('adv', 'mass_edit_streams'))) {
	goto label2308;
}

echo '                                            <li><a href="stream_review">Stream Review</a></li>' . "\r\n" . '                                            ';
goto label2308;

label367:

echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!E589A4Bf54A2DaD1('adv', 'mass_edit_streams')) {
	goto label376;
}

echo '                                            <li><a href="created_channel_mass">Created Channels</a></li>' . "\r\n" . '                                            ';

label376:

echo '                                            ';
goto label1259;

label378:

if (!E589a4Bf54a2dAD1('adv', 'mass_sedits')) {
	goto label389;
}

echo '                                            <li><a href="series_mass">';
echo $_['series'];
echo '</a></li>' . "\r\n" . '                                            ';

label389:

goto label390;

label390:

echo '                                            ';

if (!E589A4Bf54a2dAd1('adv', 'mass_edit_radio')) {
	goto label1614;
}

echo '                                            <li><a href="radio_mass">';
echo $_['stations'];
echo '</a></li>' . "\r\n" . '                                            ';
goto label1614;

label403:

if (!E589a4bf54A2dad1('adv', 'categories')) {
	goto label414;
}

echo '                                            <li><a href="stream_categories">';
echo $_['categories'];
echo '</a></li>' . "\r\n" . '                                            ';

label414:

goto label2296;

label415:

echo '</title>' . "\r\n" . '        <meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\r\n" . '        <meta http-equiv="X-UA-Compatible" content="IE=edge" />' . "\r\n" . '        <meta name="robots" content="noindex,nofollow">' . "\r\n" . '        <link rel="shortcut icon" href="assets/images/favicon.ico">' . "\r\n" . '        <link href="assets/libs/jquery-nice-select/nice-select.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/switchery/switchery.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/select2/select2.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/jquery-toast/jquery.toast.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/treeview/style.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/nestable2/jquery.nestable.min.css" rel="stylesheet" />' . "\r\n" . '        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/quill/quill.min.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/jbox/jBox.all.min.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t" . '<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t";
if (isset($cac15ca0551bffa7) || !$cc474bf3b4c0707e[$E59d0debc75e7be8['theme']]['dark']) {
	goto label2393;
}

echo "\t\t" . '<link href="assets/css/bootstrap.dark.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/app.dark.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/listings.dark.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t" . '<link href="assets/css/custom.dark.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t";
goto label2394;
goto label2393;

label428:

echo '                                            <li><a href="movie_mass">';
echo $_['movies'];
echo '</a></li>' . "\r\n" . '                                            ';

label432:

echo '                                            ';
goto label378;

label434:

echo '                    <div class="clearfix"></div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '            ';

if (isset($cac15ca0551bffa7)) {
	goto label739;
}

echo '            <div class="topbar-menu">' . "\r\n" . '                <div class="container-fluid">' . "\r\n" . '                    <div id="navigation">' . "\r\n" . '                        <ul class="navigation-menu">' . "\r\n" . '                            <li class="has-submenu">' . "\r\n" . '                                <a href="index"><i class="fe-activity"></i>';
echo $_['dashboard'];

if (!$Ebb0b63f7c597ba4) {
	goto label2245;
}

goto label2243;

label445:

if (!E589A4Bf54a2Dad1('adv', 'streams')) {
	goto label1049;
}

echo '                                            <li><a href="streams">';
echo $_['manage_streams'];
echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";
goto label1049;

label457:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label458:
if (!(E589a4BF54A2dAd1('adv', 'channel_order') || E589A4Bf54A2DaD1('adv', 'rtmp') || e589a4Bf54A2dad1('adv', 'fingerprint') || e589a4bF54A2dad1('adv', 'mass_delete') || E589A4bF54a2DAd1('adv', 'stream_tools') || e589a4bf54a2DaD1('adv', 'quick_tools'))) {
	goto label15;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
goto label512;

label497:

echo '</a></li>' . "\r\n" . '                                    ';

label498:
if (!(e589a4Bf54A2dad1('adv', 'edit_bouquet') && !$Ebb0b63f7c597ba4)) {
	goto label1838;
}

echo '                                    <li><a href="bouquet_order">';
echo $_['order_bouquets'];
goto label1837;

label512:

echo $_['tools'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';
if (!(E589A4bF54a2DAD1('adv', 'channel_order') && !$Ebb0b63f7c597ba4)) {
	goto label1552;
}

echo '                                            <li><a href="channel_order">';
echo $_['channel_order'];
goto label1551;

label529:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label530:
if (!(e589A4bF54A2dad1('adv', 'add_series') || E589a4bf54a2daD1('adv', 'series') || e589A4bf54A2dad1('adv', 'episodes'))) {
	goto label1177;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
goto label1537;

label551:

if (!E589a4bF54A2dAd1('adv', 'stream_tools')) {
	goto label562;
}

echo '                                            <li><a href="stream_tools">';
echo $_['stream_tools'];
echo '</a></li>' . "\r\n" . '                                            ';

label562:

goto label14;

label563:
if (!(E589A4bF54A2dAd1('adv', 'add_stream') || e589a4bf54A2DaD1('adv', 'create_channel') || E589a4bf54a2dAD1('adv', 'import_streams') || E589a4bF54A2Dad1('adv', 'streams') || E589A4Bf54a2DAD1('adv', 'add_movie') || e589A4bf54A2dAD1('adv', 'import_movies') || E589A4bF54A2DaD1('adv', 'movies') || E589A4Bf54a2Dad1('adv', 'series') || E589A4BF54a2daD1('adv', 'episodes') || e589a4bf54a2dad1('adv', 'add_series') || e589A4bf54A2DaD1('adv', 'radio') || E589A4BF54A2Dad1('adv', 'add_radio'))) {
	goto label2275;
}

echo '                            <li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-play"></i>';
echo $_['content'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    ';
if (!(E589a4BF54a2dAd1('adv', 'add_stream') || E589A4Bf54A2dad1('adv', 'import_streams') || E589a4BF54A2Dad1('adv', 'streams'))) {
	goto label1050;
}

goto label2343;

label660:
if (!(e589a4bf54A2DaD1('adv', 'add_reguser') || E589A4BF54a2dad1('adv', 'mng_regusers'))) {
	goto label195;
}

echo '                            <li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-users"></i>';
echo $_['users'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    ';

if (!E589A4Bf54a2dAd1('adv', 'add_reguser')) {
	goto label942;
}

goto label938;

label685:

echo 'text-white';

label686:

echo ' tooltip-left" title="';
echo XUI_BETA ? 'Beta Release ' : 'Official Release ';
echo ' v';
goto label861;

label695:

foreach ($d4acce3098f24392 as $Ee6546c7961a39a7) {
	$Df2ff0ab91f52f85 = true;

	foreach ($Ee6546c7961a39a7['permissions'] as $f51fdbb70a8cbb4b) {
		if (E589a4bF54a2DAD1('adv', $f51fdbb70a8cbb4b)) {
			goto label710;
		}

		$Df2ff0ab91f52f85 = false;

		label710:
	}

	if (!$Df2ff0ab91f52f85) {
		goto label718;
	}

	$f1d3867ac7052095[] = $Ee6546c7961a39a7;

	label718:
}

$E3665d09b9cea208 = NULL;

if (!(8 < count($f1d3867ac7052095))) {
	goto label1012;
}

$E3665d09b9cea208 = ceil(count($f1d3867ac7052095) / 2.0);
goto label1012;

label737:

echo '                                </ul>' . "\r\n" . '                            </li>' . "\r\n" . '                            ';

label738:

echo '                        </ul>' . "\r\n" . '                        <div class="clearfix"></div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '            ';

label739:

goto label1305;

label740:

echo '</a></li>' . "\r\n" . '                                            ';

label741:

if (!E589a4BF54A2dAD1('adv', 'quick_tools')) {
	goto label1579;
}

echo '                                            <li><a href="quick_tools">';
echo $_['quick_tools'];
goto label1578;

label752:

if (!E589A4bf54A2daD1('adv', 'mng_groups')) {
	goto label763;
}

echo '                                            <li><a href="groups">';
echo $_['groups'];
echo '</a></li>' . "\r\n" . '                                            ';

label763:

goto label992;

label764:

echo $_['add_station'];
echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

label767:

if (!e589A4bf54a2Dad1('adv', 'radio')) {
	goto label1274;
}

echo '                                            <li><a href="radios">';
goto label1271;

label776:

echo '                            </li>' . "\r\n\t\t\t\t\t\t\t";
if (!(E589A4bf54a2DAD1('adv', 'servers') || E589A4bf54A2DAD1('adv', 'process_monitor'))) {
	goto label331;
}

echo '                            <li class="has-submenu">' . "\r\n" . '                                <a href="#"><i class="fas fa-server"></i>';
echo $_['servers'];
goto label1;

label794:

echo '                                            ';

if (!e589a4bF54A2dad1('adv', 'mass_sedits')) {
	goto label1334;
}

echo '                                            <li><a href="episodes_mass">';
echo $_['episodes'];
echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";
goto label1334;

label807:

echo ' whiteout';

label808:

echo '">' . "\r\n" . '                                <img src="assets/images/logo-topbar.png" alt="" height="28">' . "\r\n" . '                            </span>' . "\r\n" . '                        </a>' . "\r\n" . '                    </div>' . "\r\n" . '                    ';

if (isset($cac15ca0551bffa7)) {
	goto label1714;
}
if (!(!$Ebb0b63f7c597ba4 && $f1dcaed925076e67['header_stats'])) {
	goto label1396;
}

goto label171;

label820:
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label841;
}

echo '-' . $E59d0debc75e7be8['hue'];

label841:

echo ' btn-xs waves-effect waves-light no-border"><span id="header_users">0</span></button>' . "\r\n" . '                                </span>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./streams" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <i class="fe-play text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate';
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label1770;
}

goto label1767;

label861:

echo $B8630a7c92543099['version'] . ($B8630a7c92543099['revision'] ? ' R' . intval($B8630a7c92543099['revision']) : '');
echo ' is available to download.">' . "\r\n" . '                                <i class="mdi mdi-update noti-icon"></i>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n\t\t\t\t\t\t";

label875:

if (!$f1dcaed925076e67['show_tickets']) {
	goto label1713;
}

$A8a58d9f67df1ccb = [];
goto label1588;

label881:
if (!(E589a4bF54a2daD1('adv', 'add_code') || e589a4bF54A2Dad1('adv', 'block_asns') || e589a4bf54a2dAD1('adv', 'block_ips') || E589a4bF54A2DaD1('adv', 'block_isps') || E589a4bF54a2dAd1('adv', 'block_uas') || e589a4Bf54A2dAd1('adv', 'rtmp') || e589A4bf54a2DaD1('adv', 'add_hmac'))) {
	goto label458;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">Access Control <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!e589A4Bf54A2dad1('adv', 'add_code')) {
	goto label933;
}

echo '                                            <li><a href="codes">Access Codes</a></li>' . "\r\n" . '                                            ';

label933:

goto label1276;

label934:

echo 'text-danger';
goto label937;

label936:

echo 'text-white';

label937:

goto label2105;

label938:

echo '                                    <li><a href="user">';
echo $_['add_user'];
echo '</a></li>' . "\r\n" . '                                    ';

label942:

if (!E589A4BF54A2DaD1('adv', 'mng_regusers')) {
	goto label2258;
}

goto label2254;

label950:

echo $_['add_stream'];
echo '</a></li>' . "\r\n" . '                                            ';

label953:
if (!(e589a4bf54a2dad1('adv', 'import_streams') && !$Ebb0b63f7c597ba4)) {
	goto label445;
}

echo '                                            <li><a href="stream?import=1">Import Multiple</a></li>' . "\r\n" . '                                            <li><a href="review?type=1">Import & Review</a></li>' . "\r\n" . '                                            ';
goto label445;

label965:

echo '                            <a class="nav-link dropdown-toggle waves-effect text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                            ';

label966:

echo '                                <i class="fe-mail noti-icon"></i>' . "\r\n" . '                                ';

if (!(0 < $e70d5d558180c15e)) {
	goto label95;
}

echo '                                <span class="badge badge-info rounded-circle noti-icon-badge" style="min-width:20px;">';
goto label88;

label973:

if (!(0 < strlen($E59d0debc75e7be8['hue']))) {
	goto label982;
}

echo ' whiteout';

label982:

echo '">' . "\r\n" . '                                <img src="assets/images/logo-topbar.png" alt="" height="26">' . "\r\n" . '                            </span>' . "\r\n" . '                            <span class="logo-sm';

if (!(0 < strlen($E59d0debc75e7be8['hue']))) {
	goto label808;
}

goto label807;

label992:

if (!E589A4Bf54a2dAd1('adv', 'mng_packages')) {
	goto label1003;
}

echo '                                            <li><a href="packages">';
echo $_['packages'];
echo '</a></li>' . "\r\n" . '                                            ';

label1003:

goto label2361;

label1004:

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label1010;
}

echo 'text-warning';
goto label1611;

label1010:

echo 'text-white';
goto label1611;

label1012:

$df6991d59f367c7e = 0;

foreach ($f1d3867ac7052095 as $Ee6546c7961a39a7) {
	if (!($E3665d09b9cea208 && ($df6991d59f367c7e == $E3665d09b9cea208))) {
		goto label1023;
	}

	echo '</ul></li><li><ul>';

	label1023:

	echo '<li><a href="' . $Ee6546c7961a39a7['url'] . '">' . $Ee6546c7961a39a7['title'] . '</a></li>';
	$df6991d59f367c7e++;
}

echo '                                                </ul>' . "\r\n" . '                                            </li>' . "\r\n" . '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';
goto label1638;

label1036:

echo "\t\t" . '<link href="assets/css/modal.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t";

label1037:

echo '        ';
if (!isset($cac15ca0551bffa7) && $cc474bf3b4c0707e[$E59d0debc75e7be8['theme']]['image']) {
	goto label245;
}

echo '        <style>' . "\r\n" . '        html, body {' . "\r\n" . '          overflow-x: hidden;' . "\r\n" . '        }' . "\r\n" . '        ';
goto label1727;

label1049:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label1050:
if (!(E589A4Bf54a2dad1('adv', 'create_channel') || E589A4bF54A2DaD1('adv', 'streams'))) {
	goto label1314;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
goto label2260;

label1065:

echo $_['blocked_isps'];
echo '</a></li>' . "\r\n" . '                                            ';

label1068:

if (!e589A4bF54a2dAD1('adv', 'block_uas')) {
	goto label1569;
}

echo '                                            <li><a href="useragents">';
goto label1566;

label1077:

echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!e589a4Bf54A2DAd1('adv', 'add_e2')) {
	goto label1525;
}

echo '                                            <li><a href="enigma">';
echo $_['add_enigma'];
echo '</a></li>' . "\r\n" . '                                            ';
goto label1525;

label1090:

echo $_['mag_devices'];
echo '</a></li>' . "\r\n" . '                                            ';

label1093:

echo '                                            ';

if (!E589a4bF54a2DaD1('adv', 'mass_sedits_vod')) {
	goto label432;
}

goto label428;

label1102:
if (!(e589A4bf54a2Dad1('adv', 'add_user') || e589A4Bf54a2DAD1('adv', 'users'))) {
	goto label285;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['user_lines'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!e589a4BF54a2daD1('adv', 'add_user')) {
	goto label1297;
}

goto label1293;

label1127:

echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

label1128:

if (!e589A4Bf54A2DAd1('adv', 'series')) {
	goto label1483;
}

echo '                                            <li><a href="series">';
echo $_['manage_series'];
goto label1482;

label1139:

echo '                        <li class="notification-list">' . "\r\n" . '                            <a href="servers" class="nav-link right-bar-toggle waves-effect ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label1146;
}

echo 'text-warning';
goto label1794;

label1146:

goto label1793;

label1147:

if (!e589A4bF54A2DAD1('adv', 'database')) {
	goto label1155;
}

echo '                                <a href="backups" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>Backup Settings</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                <a href="cache" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>Cache & Redis</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                ';

label1155:

if (!e589A4Bf54a2dAd1('adv', 'folder_watch_settings')) {
	goto label75;
}

goto label74;

label1163:

if (!E589a4Bf54a2Dad1('adv', 'rtmp')) {
	goto label457;
}

echo '                                            <li><a href="rtmp_ips">';
echo $_['rtmp_ips'];
echo '</a></li>' . "\r\n" . '                                            ';
goto label457;

label1175:

echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

label1176:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label1177:
if (!(E589A4bf54A2DAd1('adv', 'add_radio') || E589A4bf54A2dad1('adv', 'radio'))) {
	goto label1275;
}

goto label1654;

label1191:

echo $_['bouquets'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n\t\t\t\t\t\t\t\t\t";

if (!E589a4BF54A2dAD1('adv', 'add_bouquet')) {
	goto label1514;
}

echo '                                    <li><a href="bouquet">';
echo $_['add_bouquet'];
goto label1513;

label1205:

echo '        <header id="topnav">' . "\r\n" . '            <div class="navbar-overlay bg-animate';
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label1227;
}

echo '-' . $E59d0debc75e7be8['hue'];

label1227:

echo '"></div>' . "\r\n" . '            <div class="navbar-custom">' . "\r\n" . '                <div class="container-fluid">' . "\r\n" . '                    <div class="logo-box">' . "\r\n" . '                        <a href="index" class="logo text-center">' . "\r\n" . '                            <span class="logo-lg';
goto label973;

label1229:

if (!E589a4bF54a2dAD1('adv', 'add_mag')) {
	goto label1240;
}

echo '                                            <li><a href="mag">';
echo $_['add_mag'];
echo '</a></li>' . "\r\n" . '                                            ';

label1240:

goto label1715;

label1241:

echo '</a></li>' . "\r\n" . '                                            ';

label1242:

if (!E589a4bF54a2DaD1('adv', 'streams')) {
	goto label1313;
}

echo '                                            <li><a href="created_channels">';
echo $_['manage_created_channels'];
goto label1312;

label1253:

echo '                                            <li><a href="lines">';
echo $_['manage_lines'];
echo '</a></li>' . "\r\n" . '                                            ';

label1257:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n\t\t\t\t\t\t\t\t\t";
goto label285;

label1259:

if (!E589a4bf54a2daD1('adv', 'mass_edit_enigmas')) {
	goto label1270;
}

echo '                                            <li><a href="enigma_mass">';
echo $_['enigma_devices'];
echo '</a></li>' . "\r\n" . '                                            ';

label1270:

goto label794;

label1271:

echo $_['manage_stations'];
echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

label1274:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label1275:

goto label1747;

label1276:

if (!e589A4bf54A2DaD1('adv', 'block_asns')) {
	goto label1284;
}

echo '                                            <li><a href="asns">Blocked ASN\'s</a></li>' . "\r\n" . '                                            ';

label1284:

if (!E589A4BF54A2DAd1('adv', 'block_ips')) {
	goto label306;
}

echo '                                            <li><a href="ips">';
goto label303;

label1293:

echo '                                            <li><a href="line">';
echo $_['add_line'];
echo '</a></li>' . "\r\n" . '                                            ';

label1297:

if (!E589a4bf54A2dad1('adv', 'users')) {
	goto label1257;
}

goto label1253;

label1305:

echo '        </header>' . "\r\n\t\t";

label1306:

if (!$f1dcaed925076e67['js_navigate']) {
	goto label2399;
}

echo '        <div id="status">' . "\r\n" . '            <div class="spinner"></div>' . "\r\n" . '        </div>' . "\r\n" . '        ';
goto label2399;

label1312:

echo '</a></li>' . "\r\n" . '                                            ';

label1313:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label1314:
if (!(e589A4bf54a2dad1('adv', 'add_movie') || E589a4Bf54a2DAd1('adv', 'import_movies') || E589A4bf54a2DAD1('adv', 'movies'))) {
	goto label530;
}

goto label1734;

label1334:

echo '                                            ';

if (!E589A4Bf54A2DaD1('adv', 'mass_edit_lines')) {
	goto label2095;
}

echo '                                            <li><a href="line_mass">';
echo $_['lines'];
goto label2094;

label1346:

echo '                            <li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-wrench"></i>';
echo $_['management'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    ';
if (!(e589a4Bf54A2DaD1('adv', 'categories') || e589a4BF54A2dad1('adv', 'epg') || e589A4Bf54A2DAd1('adv', 'mng_groups') || E589A4bF54a2DAD1('adv', 'mng_packages') || E589a4BF54a2dAD1('adv', 'tprofiles') || e589A4Bf54a2Dad1('adv', 'folder_watch'))) {
	goto label2360;
}

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">Service Setup <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';
goto label403;

label1389:

echo '                                    <li><a href="live_connections">';
echo $_['live_connections'];
echo '</a></li>' . "\r\n" . '                                    ';

label1393:

echo '                                </ul>' . "\r\n" . '                                ';
goto label776;

label1395:

echo ' btn-xs waves-effect waves-light no-border"><span id="header_network_up">0</span> <small>Mbps</small> <i class="mdi mdi-arrow-up-thick"></i> &nbsp; <span id="header_network_down">0</span> <small>Mbps</small> <i class="mdi mdi-arrow-down-thick"></i></button>' . "\r\n" . '                                </span>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    ';

label1396:

echo '                    <!-- Streams, Channels, Movies, Episodes & Radio Stations -->' . "\r\n" . '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_streams" style="display: none;opacity: 80%;">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_streams_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'start\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-play"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'stop\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-stop"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'restart\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-refresh"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </span>' . "\r\n" . '                            </span>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <!-- TV Series -->' . "\r\n" . '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_series" style="display: none;opacity: 80%;">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_series_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </span>' . "\r\n" . '                            </span>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <!-- Servers -->' . "\r\n" . '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_servers" style="display: none;opacity: 80%;">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_servers_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'tools\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-creation"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'restart\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-refresh"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'start\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-play"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'stop\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-stop"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-shield-check-outline text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'enable_proxy\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'disable_proxy\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-access-point-network text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </span>' . "\r\n" . '                            </span>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <!-- Proxies -->' . "\r\n" . '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_proxies" style="display: none;opacity: 80%;">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_proxies_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'tools\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-creation"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-trash-can-outline"></i></button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-shield-check-outline text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </span>' . "\r\n" . '                            </span>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <!-- Lines -->' . "\r\n" . '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_lines" style="display: none;opacity: 80%;">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_lines_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-lock text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'ban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">ban</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'unban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">unban</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-power text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </span>' . "\r\n" . '                            </span>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <!-- Enigma Devices -->' . "\r\n" . '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_enigmas" style="display: none;opacity: 80%;">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_enigmas_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'convert\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="fas fa-retweet"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-lock text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'ban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">ban</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'unban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">unban</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-power text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </span>' . "\r\n" . '                            </span>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <!-- MAG Devices -->' . "\r\n" . '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_mags" style="display: none;opacity: 80%;">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_mags_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'event\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-message-alert"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'convert\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="fas fa-retweet"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'purge\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-hammer"></i></button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-lock text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'ban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">ban</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'unban\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">unban</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-power text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </span>' . "\r\n" . '                            </span>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <!-- Users -->' . "\r\n" . '                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0 multiselect" id="multiselect_users" style="display: none;opacity: 80%;">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <span class="nav-link nav-user mr-0 waves-effect pd-left pd-right">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <button type="button" class="btn btn-primary btn-xs waves-effect waves-light no-border"><span id="multi_users_selected">0</span></button> &nbsp; <i onClick="multiAPI(\'clear\');" class="mdi mdi-selection-off text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'delete\');" class="btn btn-primary btn-xs waves-effect waves-light no-border"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    &nbsp; <i class="mdi mdi-lock text-white"></i> &nbsp; ' . "\r\n" . '                                    <div class="btn-group">' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'disable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">disable</button>' . "\r\n" . '                                        <button type="button" onClick="multiAPI(\'enable\');" class="btn btn-primary btn-xs waves-effect waves-light no-border">enable</button>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </span>' . "\r\n" . '                            </span>' . "\r\n" . '                        </li>' . "\r\n" . '                    </ul>' . "\r\n" . '                    <ul class="list-unstyled topnav-menu float-right mb-0 topnav-custom">' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="navbar-toggle nav-link">' . "\r\n" . '                                <div class="lines text-white">' . "\r\n" . '                                    <span></span>' . "\r\n" . '                                    <span></span>' . "\r\n" . '                                    <span></span>' . "\r\n" . '                                </div>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n\t\t\t\t\t\t";

if (!XUI::$rSettings['enable_search']) {
	goto label1702;
}

goto label2219;

label1403:

echo '                        <li class="dropdown notification-list">' . "\r\n" . '                            ';

if (0 < $e70d5d558180c15e) {
	goto label1409;
}

echo '                            <a class="nav-link waves-effect text-white" href="tickets" role="button">' . "\r\n" . '                            ';
goto label966;

label1409:

goto label965;

label1410:

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['logs'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu megamenu">' . "\r\n" . '                                            <li>' . "\r\n" . '                                                <ul>' . "\r\n" . '                                                    ';
$d4acce3098f24392 = [
	[
	'url'         => 'line_activity',
	'title'       => $_['activity_logs'],
	'permissions' => ['connection_logs']
],
	[
	'url'         => 'client_logs',
	'title'       => $_['client_logs'],
	'permissions' => ['client_request_log']
],
	[
	'url'         => 'credit_logs',
	'title'       => $_['credit_logs'],
	'permissions' => ['credits_log']
],
	[
	'url'         => 'queue',
	'title'       => 'Encoding Queue',
	'permissions' => ['streams', 'episodes', 'series']
],
	[
	'url'         => 'line_ips',
	'title'       => $_['ips_per_line'],
	'permissions' => ['connection_logs']
],
	[
	'url'         => 'live_connections',
	'title'       => $_['live_connections'],
	'permissions' => ['live_connections']
],
	[
	'url'         => 'login_logs',
	'title'       => 'Login Logs',
	'permissions' => ['login_logs']
],
	[
	'url'         => 'mag_events',
	'title'       => $_['mag_event_logs'],
	'permissions' => ['manage_events']
],
	[
	'url'         => 'ondemand',
	'title'       => 'On-Demand Scanner',
	'permissions' => ['streams']
],
	[
	'url'         => 'panel_logs',
	'title'       => 'Panel Errors',
	'permissions' => ['panel_logs']
],
	[
	'url'         => 'user_logs',
	'title'       => $_['reseller_logs'],
	'permissions' => ['reg_userlog']
],
	[
	'url'         => 'restream_logs',
	'title'       => 'Restream Detection',
	'permissions' => ['restream_logs']
],
	[
	'url'         => 'stream_errors',
	'title'       => $_['stream_errors'],
	'permissions' => ['stream_errors']
],
	[
	'url'         => 'stream_rank',
	'title'       => 'Stream Rank',
	'permissions' => ['streams']
],
	[
	'url'         => 'mysql_syslog',
	'title'       => 'System Logs',
	'permissions' => ['panel_logs']
],
	[
	'url'         => 'theft_detection',
	'title'       => 'VOD Theft Detection',
	'permissions' => ['movies']
],
	[
	'url'         => 'watch_output',
	'title'       => $_['watch_folder_logs'],
	'permissions' => ['folder_watch']
]
];
$f1d3867ac7052095 = [];
goto label695;

label1470:

echo '</a></li>' . "\r\n" . '                                            ';

label1471:

if (!e589a4BF54a2DAD1('adv', 'mass_delete')) {
	goto label741;
}

echo '                                            <li><a href="mass_delete">';
echo $_['mass_delete'];
goto label740;

label1482:

echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

label1483:

if (!E589A4Bf54A2DAD1('adv', 'episodes')) {
	goto label1176;
}

echo '                                            <li><a href="episodes">';
echo $_['manage_episodes'];
goto label1175;

label1494:

$b62d6460eb33ea07->query('SELECT `tickets`.`id`, `tickets`.`title`, MAX(`tickets_replies`.`date`) AS `date`, `users`.`username` FROM `tickets` LEFT JOIN `tickets_replies` ON `tickets_replies`.`ticket_id` = `tickets`.`id` LEFT JOIN `users` ON `users`.`id` = `tickets`.`member_id` WHERE `tickets`.`status` <> 0 AND `admin_read` = 0 AND `user_read` = 1 AND `member_id` <> ? AND `member_id` IN (SELECT `id` FROM `users` WHERE `owner_id` = ?) GROUP BY `tickets_replies`.`ticket_id` ORDER BY `tickets_replies`.`date` DESC LIMIT 50;', $E59d0debc75e7be8['id'], $E59d0debc75e7be8['id']);
$e70d5d558180c15e = $b62d6460eb33ea07->num_rows();

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$A8a58d9f67df1ccb[] = $Fb9da1713bff19ce;
}

label1512:

goto label1403;

label1513:

echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t";

label1514:

if (!E589a4BF54a2DAd1('adv', 'bouquets')) {
	goto label498;
}

echo '                                    <li><a href="bouquets">';
echo $_['manage_bouquets'];
goto label497;

label1525:

if (!e589A4BF54A2daD1('adv', 'manage_e2')) {
	goto label1563;
}

echo '                                            <li><a href="enigmas">';
echo $_['manage_enigma_devices'];
echo '</a></li>' . "\r\n" . '                                            ';
goto label1563;

label1537:

echo $_['series'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!e589a4BF54A2dAD1('adv', 'add_series')) {
	goto label1128;
}

echo '                                            <li><a href="serie">';
echo $_['add_series'];
goto label1127;

label1551:

echo '</a></li>' . "\r\n" . '                                            ';

label1552:

if (!e589a4bF54A2Dad1('adv', 'fingerprint')) {
	goto label1471;
}

echo '                                            <li><a href="fingerprint">';
echo $_['fingerprint'];
goto label1470;

label1563:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label1564:

echo '                                </ul>' . "\r\n" . '                            </li>' . "\r\n\t\t\t\t\t\t\t";

label1565:

goto label563;

label1566:

echo $_['blocked_uas'];
echo '</a></li>' . "\r\n" . '                                            ';

label1569:

if (!e589A4BF54A2DaD1('adv', 'add_hmac')) {
	goto label1163;
}

echo '                                            <li><a href="hmacs">HMAC Keys</a></li>' . "\r\n" . '                                            ';
goto label1163;

label1578:

echo '</a></li>' . "\r\n" . '                                            ';

label1579:

if (!e589A4Bf54A2dAd1('adv', 'rtmp')) {
	goto label1587;
}

echo '                                            <li><a href="rtmp_monitor">RTMP Monitor</a></li>' . "\r\n" . '                                            ';

label1587:

goto label551;

label1588:

$Fe53bcd53690fff4 = [];
$b62d6460eb33ea07->query('SELECT `id` FROM `users` WHERE `owner_id` = ?;', $E59d0debc75e7be8['id']);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Fe53bcd53690fff4[] = $Fb9da1713bff19ce['id'];
}

if (!(0 < count($Fe53bcd53690fff4))) {
	goto label1512;
}

goto label1494;

label1611:

echo '">' . "\r\n" . '                                <i class="mdi mdi-wifi-strength-off noti-icon"></i>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                        ';

label1612:

goto label1795;

label1613:

goto label1139;

label1614:

echo '                                            ';

if (!E589a4bf54A2Dad1('adv', 'mass_edit_streams')) {
	goto label354;
}

echo '                                            <li><a href="stream_mass">';
echo $_['streams'];
goto label353;

label1626:

if (!e589A4bF54a2DaD1('adv', 'movies')) {
	goto label529;
}

echo '                                            <li><a href="movies">';
echo $_['manage_movies'];
echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";
goto label529;

label1638:
if (!(!$f1dcaed925076e67['show_tickets'] && E589A4bF54A2dAd1('adv', 'manage_tickets'))) {
	goto label737;
}

echo '                                    <li><a href="tickets">';
echo $_['tickets'];
echo '</a></li>' . "\r\n" . '                                    ';
goto label737;

label1654:

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['stations'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!e589A4BF54A2DAD1('adv', 'add_radio')) {
	goto label767;
}

echo '                                            <li><a href="radio">';
goto label764;

label1667:

echo '<!DOCTYPE html>' . "\r\n" . '<html lang="en">' . "\r\n" . '    <head>' . "\r\n" . '        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . "\r\n" . '        <title>';
echo $f1dcaed925076e67['server_name'] ?: 'XUI';
echo ' ';

if (!isset($F6edd90960a3bd9d)) {
	goto label415;
}

echo ' | ' . $F6edd90960a3bd9d;
goto label415;

label1680:
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label1701;
}

echo '-' . $E59d0debc75e7be8['hue'];

label1701:

echo '" data-toggle="select2"></select>' . "\r\n" . '                                </div>' . "\r\n" . '                            </div>' . "\r\n" . '                        </li>' . "\r\n\t\t\t\t\t\t";

label1702:

goto label2081;

label1703:

if (!isset($C3277274bfd50f59)) {
	goto label1708;
}

echo $C3277274bfd50f59;

label1708:

echo '    </head>' . "\r\n" . '    <body>' . "\r\n\t\t";

if ($d2fa91a31fd73a96) {
	goto label1306;
}

goto label1205;

label1712:

echo '                                </div>' . "\r\n" . '                                <a href="tickets" class="dropdown-item text-center text-primary notify-item notify-all">' . "\r\n" . '                                    View Tickets' . "\r\n" . '                                    <i class="fi-arrow-right"></i>' . "\r\n" . '                                </a>' . "\r\n" . '                            </div>' . "\r\n" . '                        </li>' . "\r\n" . '                        ';

label1713:

echo '                    </ul>' . "\r\n" . '                    ';

label1714:

goto label434;

label1715:

if (!e589a4Bf54a2DAd1('adv', 'manage_mag')) {
	goto label1726;
}

echo '                                            <li><a href="mags">';
echo $_['manage_mag_devices'];
echo '</a></li>' . "\r\n" . '                                            ';

label1726:

goto label255;

label1727:

if (!$Ebb0b63f7c597ba4) {
	goto label1731;
}

echo '        .dataTables_wrapper {' . "\r\n" . '            overflow-x: auto !important;' . "\r\n" . '        }' . "\r\n" . '        ';

label1731:

echo '        </style>' . "\r\n" . '        ';
goto label254;
goto label245;

label1734:

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['movies'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!e589a4BF54a2DAD1('adv', 'add_movie')) {
	goto label2381;
}

echo '                                            <li><a href="movie">';
goto label2378;

label1747:

if (!e589A4bf54a2dAD1('adv', 'movies')) {
	goto label1755;
}

echo '                                    <li><a href="archive">Recordings</a></li>' . "\r\n" . '                                    ';

label1755:
if (!(!$Ebb0b63f7c597ba4 && E589a4bf54A2Dad1('adv', 'streams'))) {
	goto label2274;
}

echo '                                    <li><a href="epg_view">TV Guide</a></li>' . "\r\n" . '                                    ';
goto label2274;

label1767:

echo '-' . $E59d0debc75e7be8['hue'];

label1770:

echo ' btn-xs waves-effect waves-light no-border"><span id="header_streams_up">0</span> <i class="mdi mdi-arrow-up-thick"></i> &nbsp; <span id="header_streams_down">0</span> <i class="mdi mdi-arrow-down-thick"></i></button>' . "\r\n" . '                                </span>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect pd-left pd-right" data-toggle="dropdown" href="./dashboard" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    <i class="fe-trending-up text-white"></i> &nbsp; <button type="button" class="btn btn-dark bg-animate';
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label1395;
}

echo '-' . $E59d0debc75e7be8['hue'];
goto label1395;

label1793:

echo 'text-white';

label1794:

echo '">' . "\r\n" . '                                <i class="mdi mdi-wifi-strength-off noti-icon"></i>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n" . '                        ';

label1795:
if (!(!$Ebb0b63f7c597ba4 && is_array($B8630a7c92543099) && $B8630a7c92543099['version'] && ((0 < version_compare($B8630a7c92543099['version'], XUI_VERSION)) || ((version_compare($B8630a7c92543099['version'], XUI_VERSION) == 0) && (intval(XUI_REVISION) < intval($B8630a7c92543099['revision'])))))) {
	goto label875;
}

goto label237;

label1837:

echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t";

label1838:

echo '                                </ul>' . "\r\n" . '                            </li>' . "\r\n" . '                            ';

label1839:
if (!(e589a4Bf54A2DAd1('adv', 'streams') || E589A4Bf54a2DAd1('adv', 'episodes') || e589a4bf54a2daD1('adv', 'series') || e589a4bf54A2Dad1('adv', 'categories') || e589a4BF54A2Dad1('adv', 'epg') || e589a4BF54A2DaD1('adv', 'mng_groups') || e589A4Bf54A2Dad1('adv', 'mng_packages') || E589a4Bf54a2Dad1('adv', 'tprofiles') || E589A4bF54A2dAd1('adv', 'folder_watch') || E589a4bf54A2dad1('adv', 'add_code') || E589A4bf54a2dAD1('adv', 'block_asns') || e589A4bF54a2dAd1('adv', 'block_ips') || E589a4BF54a2DAd1('adv', 'block_isps') || e589A4BF54A2dAD1('adv', 'block_uas') || E589A4bF54a2DAd1('adv', 'rtmp') || e589a4bF54a2dad1('adv', 'channel_order') || E589A4bf54A2Dad1('adv', 'fingerprint') || E589A4Bf54a2DaD1('adv', 'mass_delete') || E589a4BF54a2DAd1('adv', 'stream_tools') || e589A4BF54a2DAD1('adv', 'mass_edit_enigmas') || E589A4BF54A2daD1('adv', 'mass_edit_lines') || E589a4Bf54A2Dad1('adv', 'mass_edit_mags') || E589A4BF54a2DaD1('adv', 'mass_sedits_vod') || e589A4bF54a2DaD1('adv', 'mass_sedits') || E589A4BF54A2Dad1('adv', 'mass_edit_radio') || E589a4bf54a2daD1('adv', 'mass_edit_streams') || E589A4bf54A2dAd1('adv', 'mass_edit_users') || e589a4bf54A2DAd1('adv', 'connection_logs') || E589a4bF54a2daD1('adv', 'client_request_log') || E589A4BF54A2daD1('adv', 'login_logs') || E589a4bf54A2Dad1('adv', 'panel_logs') || e589A4Bf54A2daD1('adv', 'credits_log') || e589a4bF54a2dAd1('adv', 'live_connections') || e589A4bf54a2daD1('adv', 'manage_events') || E589a4BF54a2DAD1('adv', 'reg_userlog') || e589A4bF54A2DAd1('adv', 'stream_errors') || e589a4BF54A2DaD1('adv', 'folder_watch') || e589A4BF54a2DAD1('adv', 'add_hmac') || E589A4Bf54A2dad1('adv', 'quick_tools') || e589A4bF54A2dAd1('adv', 'manage_tickets'))) {
	goto label738;
}

goto label1346;

label2081:

echo '                        <li class="dropdown notification-list">' . "\r\n" . '                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">' . "\r\n" . '                                <span class="pro-user-name text-white ml-1">' . "\r\n" . '                                    ';
echo $E59d0debc75e7be8['username'];
echo ' <i class="mdi mdi-chevron-down"></i> ' . "\r\n" . '                                </span>' . "\r\n" . '                                <span class="pro-user-name-mob nav-link text-white waves-effect">' . "\r\n" . '                                    <i class="fe-user noti-icon"></i> ' . "\r\n" . '                                </span>' . "\r\n" . '                            </a>' . "\r\n" . '                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">' . "\r\n" . '                                <a href="edit_profile" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>User Profile</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                ';

if (!e589a4bf54a2daD1('adv', 'settings')) {
	goto label1147;
}

echo '                                <a href="settings" class="dropdown-item notify-item">' . "\r\n" . '                                    <span>General Settings</span>' . "\r\n" . '                                </a>' . "\r\n" . '                                ';
goto label1147;

label2094:

echo '</a></li>' . "\r\n" . '                                            ';

label2095:

echo '                                            ';

if (!E589A4bf54A2DAD1('adv', 'mass_edit_mags')) {
	goto label1093;
}

echo '                                            <li><a href="mag_mass">';
goto label1090;

label2105:

echo '">' . "\r\n" . '                                <i class="mdi mdi-lock noti-icon"></i>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n\t\t\t\t\t\t";

label2106:
if ($A01d920dab3a448e && E589a4BF54A2Dad1('adv', 'servers')) {
	goto label1613;
}
if (!($A7f9d587bdf5cddf && E589A4bf54A2DaD1('adv', 'servers'))) {
	goto label1612;
}

echo '                        <li class="notification-list">' . "\r\n" . '                            <a href="proxies" class="nav-link right-bar-toggle waves-effect ';
goto label1004;

label2125:

echo '</a></li>' . "\r\n" . '                                            ';

label2126:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label2127:
if (!(E589a4Bf54A2DAd1('adv', 'movies') || e589A4bF54a2DAd1('adv', 'streams') || E589A4bF54a2dad1('adv', 'connection_logs') || E589A4BF54a2daD1('adv', 'client_request_log') || e589a4BF54A2DAd1('adv', 'login_logs') || E589a4bF54A2DaD1('adv', 'panel_logs') || E589a4BF54A2Dad1('adv', 'credits_log') || e589a4Bf54a2dad1('adv', 'live_connections') || e589A4bf54A2DAd1('adv', 'manage_events') || e589A4BF54a2dAd1('adv', 'reg_userlog') || E589a4BF54a2dAD1('adv', 'streams') || E589a4BF54A2dAD1('adv', 'episodes') || e589a4BF54A2dad1('adv', 'series') || e589A4Bf54a2daD1('adv', 'stream_errors') || E589a4BF54A2dAd1('adv', 'folder_watch'))) {
	goto label1638;
}

goto label1410;

label2219:

echo "\t\t\t\t\t\t" . '<li class="dropdown notification-list" id="search-mobile">' . "\r\n" . '                            <a href="javascript:void(0);" class="search-toggle pad-15 nav-link right-bar-toggle waves-effect text-white">' . "\r\n" . '                                <i class="mdi mdi-magnify noti-icon"></i>' . "\r\n" . '                            </a>' . "\r\n" . '                        </li>' . "\r\n\t\t\t\t\t\t" . '<li class="d-none d-sm-block" id="topnav-search">' . "\r\n" . '                            <div class="app-search" data-theme="bg-animate';
if (!((0 < strlen($E59d0debc75e7be8['hue'])) && in_array($E59d0debc75e7be8['hue'], array_keys($f1b18060c577d4da)))) {
	goto label2241;
}

echo '-' . $E59d0debc75e7be8['hue'];

label2241:

echo '">' . "\r\n" . '                                <div class="app-search-box">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<select placeholder="Search..." class="quick_search form-control bg-animate';
goto label1680;

label2243:

echo '                                </a>' . "\r\n" . '                                ';
goto label776;

label2245:

echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                <ul class="submenu">' . "\r\n" . '                                    ';

if (!E589a4BF54A2DAD1('adv', 'live_connections')) {
	goto label1393;
}

goto label1389;

label2254:

echo '                                    <li><a href="users">';
echo $_['manage_users'];
echo '</a></li>' . "\r\n" . '                                    ';

label2258:

echo '                                </ul>' . "\r\n" . '                            </li>' . "\r\n" . '                            ';
goto label195;

label2260:

echo $_['created_channels'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!E589A4bF54a2DaD1('adv', 'create_channel')) {
	goto label1242;
}

echo '                                            <li><a href="created_channel">';
echo $_['create_channel'];
goto label1241;

label2274:

echo '                                </ul>' . "\r\n" . '                            </li>' . "\r\n\t\t\t\t\t\t\t";

label2275:
if (!(e589a4BF54a2dad1('adv', 'add_bouquet') || e589A4Bf54A2DaD1('adv', 'bouquets') || e589a4bF54a2DAd1('adv', 'edit_bouquet'))) {
	goto label1839;
}

echo '                            <li class="has-submenu">' . "\r\n" . '                                <a href="#"> <i class="fas fa-spa"></i>';
goto label1191;

label2296:

if (!E589a4bF54a2daD1('adv', 'epg')) {
	goto label2307;
}

echo '                                            <li><a href="epgs">';
echo $_['epgs'];
echo '</a></li>' . "\r\n" . '                                            ';

label2307:

goto label752;

label2308:

echo '                                            ';

if (!E589a4bF54a2dAd1('adv', 'mass_edit_users')) {
	goto label2126;
}

echo '                                            <li><a href="user_mass">';
echo $_['users'];
goto label2125;

label2320:

if (!(count(get_included_files()) == 1)) {
	goto label2330;
}

exit();

label2330:

$d2fa91a31fd73a96 = isset(XUI::$rRequest['modal']);
$B8630a7c92543099 = json_decode(XUI::$rSettings['update_data'], true) ?: [];
goto label1667;

label2343:

echo '                                    <li class="has-submenu">' . "\r\n" . '                                        <a href="#">';
echo $_['streams'];
echo ' <div class="arrow-down"></div></a>' . "\r\n" . '                                        <ul class="submenu">' . "\r\n" . '                                            ';

if (!E589A4BF54a2dAD1('adv', 'add_stream')) {
	goto label953;
}

echo '                                            <li><a href="stream">';
goto label950;

label2356:

echo $_['folder_watch'];
echo '</a></li>' . "\r\n" . '                                            ';

label2359:

echo '                                        </ul>' . "\r\n" . '                                    </li>' . "\r\n" . '                                    ';

label2360:

goto label881;

label2361:

if (!E589A4Bf54a2DAD1('adv', 'streams')) {
	goto label2369;
}

echo '                                            <li><a href="providers">Stream Providers</a></li>' . "\r\n" . '                                            ';

label2369:

if (!e589A4BF54a2DaD1('adv', 'tprofiles')) {
	goto label276;
}

echo '                                            <li><a href="profiles">';
goto label273;

label2378:

echo $_['add_movie'];
echo '</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

label2381:
if (!(E589A4bf54a2DAd1('adv', 'import_movies') && !$Ebb0b63f7c597ba4)) {
	goto label1626;
}

echo '                                            <li><a href="movie?import=1">Import Multiple</a></li>' . "\r\n" . '                                            <li><a href="review?type=2">Import & Review</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";
goto label1626;

label2393:

echo '        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/listings.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t" . '<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t";

label2394:

echo '        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />' . "\r\n\t\t";

if (!$d2fa91a31fd73a96) {
	goto label1037;
}

goto label1036;

label2399:

?>