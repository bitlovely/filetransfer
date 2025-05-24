<?php


goto label474;

label1:

echo "\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t" . '<div class="tab-content">' . "\r\n\t\t\t\t\t\t" . '<div class="tab-pane active" id="servers">' . "\r\n\t\t\t\t\t\t\t" . '<div class="table">' . "\r\n\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Source</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Clients</th>' . "\r\n" . '                                            ';

if ($fe93a43f53d92a4e['type'] == 2) {
	goto label1217;
}

echo '                                            <th>Uptime</th>' . "\r\n" . '                                            ';
goto label1218;
goto label1217;

label9:

if (!(0 < $fe93a43f53d92a4e['vframes_server_id'])) {
	goto label1027;
}

$Dcd345fd677c6c87 = time() + 3600;
$D8713f4c40d502da = ['session_id' => session_id(), 'expires' => $Dcd345fd677c6c87, 'stream_id' => intval(XUI::$rRequest['id']), 'ip' => XUI::aD72B4259CA295B2()];
$C28212d1be536d65 = Xui\Functions::encrypt(json_encode($D8713f4c40d502da), XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);

if (a41659d47a278Ceb()) {
	goto label433;
}

goto label403;

label49:

echo XUI::a5d0a3407690f047(intval($Ccbdf03f8a4df633['duration_secs']), false);
echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <div class="form-group row mb-4">' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="rating">';
echo $_['rating'];
echo '</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center" id="rating" name="rating" value="';
echo htmlspecialchars($Ccbdf03f8a4df633['rating']);
goto label1050;

label68:

$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` = (SELECT `series_id` FROM `streams_episodes` WHERE `stream_id` = ?);', $fe93a43f53d92a4e['id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label82;
}

$d02ef9ae10a41939 = $b62d6460eb33ea07->get_row();

label82:

$E6f758b9be57a931 = $d02ef9ae10a41939['id'];
goto label483;

label85:

echo '                                            <th>';
echo $A252f2fdcada8336;
echo ' Info</th>' . "\r\n" . '                                            ';
goto label1178;

label89:

goto label1177;

label90:

echo $_['runtime'];
echo '</label>' . "\r\n" . '                                    <div class="col-md-4">' . "\r\n" . '                                        <input readonly type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="';
echo XUI::a5D0A3407690F047(intval($Ccbdf03f8a4df633['episode_run_time']) * 60, false);
echo '">' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="youtube_trailer">';
echo $_['youtube_trailer'];
goto label695;

label107:

echo htmlspecialchars($d02ef9ae10a41939['release_date']);
echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="episode_run_time">Runtime</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="';
echo XUI::A5d0a3407690f047(intval($Ccbdf03f8a4df633['episode_run_time']) * 60, false);
echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <div class="form-group row mb-4">' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="youtube_trailer">Youtube Trailer</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center" id="youtube_trailer" name="youtube_trailer" value="';
echo htmlspecialchars($d02ef9ae10a41939['youtube_trailer']);
goto label493;

label130:

if (!$d02ef9ae10a41939) {
	goto label500;
}

echo '                        <div class="tab-pane" id="s-information">' . "\r\n" . '                            <div class="row">' . "\r\n" . '                                <div class="col-12 input-view">' . "\r\n" . '                                    <div class="form-group row mb-4">' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="plot">Plot</label>' . "\r\n" . '                                        <div class="col-md-10">' . "\r\n" . '                                            <textarea readonly rows="6" class="form-control" id="plot" name="plot">';
echo htmlspecialchars($d02ef9ae10a41939['plot']);
echo '</textarea>' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <div class="form-group row mb-4">' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="cast">Cast</label>' . "\r\n" . '                                        <div class="col-md-10">' . "\r\n" . '                                            <input readonly type="text" class="form-control" id="cast" name="cast" value="';
echo htmlspecialchars($d02ef9ae10a41939['cast']);
goto label1077;

label146:

foreach (['today', 'week', 'month', 'all'] as $A7d54b094ae83c95) {
	goto label150;

	label150:

	echo "\t\t\t\t\t\t" . '<div class="tab-pane';

	if (!($A7d54b094ae83c95 == 'today')) {
		goto label157;
	}

	echo ' active';

	label157:

	echo '" id="';
	goto label160;

	label160:

	echo $A7d54b094ae83c95;
	echo '">' . "\r\n\t\t\t\t\t\t\t" . '<div class="row text-center" style="padding-top: 20px;">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<h4 class="header-title">Stream Rank</h4>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<p class="sub-header" id="s_conns">';

	if (0 < $bbbf113c8125381d[$A7d54b094ae83c95]['rank']) {
		goto label173;
	}

	echo 'N/A';
	goto label177;
	goto label173;

	label173:

	echo '#' . $bbbf113c8125381d[$A7d54b094ae83c95]['rank'];

	label177:

	echo '</p>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<h4 class="header-title">Time Played</h4>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<p class="sub-header" id="s_users">';
	echo f515D75037A9122f($bbbf113c8125381d[$A7d54b094ae83c95]['time']);
	goto label188;

	label186:

	goto label207;

	label188:

	echo '</p>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<h4 class="header-title">Total Streams</h4>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<p class="sub-header" id="s_online">';
	echo number_format($bbbf113c8125381d[$A7d54b094ae83c95]['connections'], 0);
	echo '</p>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<h4 class="header-title">Total Users</h4>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<p class="sub-header" id="s_online">';
	echo number_format($bbbf113c8125381d[$A7d54b094ae83c95]['users'], 0);
	echo '</p>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t";
	goto label186;

	label207:
}

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n" . '                ';

label210:

echo "\t\t\t\t" . '<div class="card-box">' . "\r\n\t\t\t\t\t" . '<ul class="nav nav-tabs nav-bordered nav-justified">' . "\r\n\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#servers" data-toggle="tab" aria-expanded="true" class="nav-link active">' . "\r\n\t\t\t\t\t\t\t\t" . 'Active Servers' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';
goto label1518;

label212:

echo htmlspecialchars($Ccbdf03f8a4df633['rating']);
echo '">' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="country">';
echo $_['country'];
echo '</label>' . "\r\n" . '                                    <div class="col-md-10">' . "\r\n" . '                                        <input readonly type="text" class="form-control" id="country" name="country" value="';
echo htmlspecialchars($Ccbdf03f8a4df633['country']);
goto label706;

label227:

$df6991d59f367c7e = 0;

foreach (json_decode($fe93a43f53d92a4e['stream_source'], true) as $fd51b5505224fc7c) {
	goto label257;

	label237:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<tr class="stream_info" data-id="';
	echo $df6991d59f367c7e - 1;
	echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n" . '                                                <button onClick="overrideSource(';
	echo intval(XUI::$rRequest['id']);
	goto label249;

	label249:

	echo ', ';
	echo $df6991d59f367c7e - 1;
	echo ');" type="button" title="Override Source" class="tooltip btn btn-info btn-xs waves-effect waves-light btn-fixed-xs">';
	echo $df6991d59f367c7e;
	echo '</button>' . "\r\n" . '                                            </td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td><span>';
	goto label316;

	label257:

	$df6991d59f367c7e++;
	$C9febb240944fd1e = parse_url($fd51b5505224fc7c)['host'];
	$D40a32e5c217bb4e = intval(explode('?', explode('.', explode('/', $fd51b5505224fc7c)[count(explode('/', $fd51b5505224fc7c)) - 1])[0])[0]);

	if (0 < $D40a32e5c217bb4e) {
		goto label347;
	}

	if (!in_array(strtolower(pathinfo($fd51b5505224fc7c)['extension']), ['ts', 'm3u8', 'mp4', 'mkv'])) {
		goto label345;
	}

	goto label323;

	label316:

	echo $C9febb240944fd1e;
	echo '</span></td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center" id="stream_info_';
	echo $df6991d59f367c7e - 1;
	echo '" style="width:300px;">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<table tstyle=\'width: 300px;\' class=\'table-data\' align=\'center\'><tbody><tr><td colspan=\'4\'>Not scanned</td></tr></tbody></table>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t";
	goto label352;

	label323:

	$C9febb240944fd1e .= ' [' . explode('?', explode('/', $fd51b5505224fc7c)[count(explode('/', $fd51b5505224fc7c)) - 1])[0] . ']';

	label345:

	goto label237;

	label347:

	$C9febb240944fd1e .= ' [ID: ' . $D40a32e5c217bb4e . ']';
	goto label237;

	label352:
}

echo "\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

if (!(0 < count($Ebc983494a99df63))) {
	goto label1496;
}

goto label1539;

label363:

goto label1035;

label364:

$b1eed3fdb609052d = b790fF255E9f25f5($fe93a43f53d92a4e['id']);
goto label9;

label370:

echo '                        <li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#s-information" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Series Information' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';

label371:

echo '                        <li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#information" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Episode Information' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';

label372:

goto label1605;
goto label1604;

label374:

$b62d6460eb33ea07->query('SELECT `streams_servers`.`stream_started`, `streams_servers`.`cc_info` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` AND `streams_servers`.`parent_id` IS NULL WHERE `streams`.`id` = ? GROUP BY `streams`.`id`;', $fe93a43f53d92a4e['id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1042;
}

$dfde7ab39786a333 = $b62d6460eb33ea07->get_row();
$d39b06d67f28803d = json_decode($dfde7ab39786a333['cc_info'], true);
$d03052828cab569a = time() - intval($dfde7ab39786a333['stream_started']);
goto label1042;

label403:

$c68b76c7e42b19eb = 'http://' . (XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['domain_name'] ? XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['domain_name'] : XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['server_ip']) . ':' . intval(XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['http_broadcast_port']) . '/admin/thumb?uitoken=' . $C28212d1be536d65;
goto label462;

label433:

$c68b76c7e42b19eb = 'https://' . (XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['domain_name'] ? XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['domain_name'] : XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['server_ip']) . ':' . intval(XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['https_broadcast_port']) . '/admin/thumb?uitoken=' . $C28212d1be536d65;

label462:

goto label1027;

label463:

echo '</label>' . "\r\n" . '                                    <div class="col-md-10">' . "\r\n" . '                                        <input readonly type="text" class="form-control" id="cast" name="cast" value="';
echo htmlspecialchars($Ccbdf03f8a4df633['cast']);
echo '">' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="director">';
echo $_['director'];
echo '</label>' . "\r\n" . '                                    <div class="col-md-4">' . "\r\n" . '                                        <input readonly type="text" class="form-control" id="director" name="director" value="';
goto label637;

label474:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label482;
}

E72f42a93714bA87();

label482:

goto label740;

label483:

$bbbf113c8125381d = c3361271347717fc($fe93a43f53d92a4e['id']);
$F6edd90960a3bd9d = 'View ' . $A252f2fdcada8336;
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
goto label982;

label493:

echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="rating">Rating</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center" id="rating" name="rating" value="';
echo htmlspecialchars($d02ef9ae10a41939['rating']);
echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div> ' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

label500:

echo '                        <div class="tab-pane" id="information">' . "\r\n" . '                            <div class="row">' . "\r\n" . '                                <div class="col-12 input-view">' . "\r\n" . '                                    <div class="form-group row mb-4">' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="plot">';
goto label1054;

label502:
if (!((0 < $fe93a43f53d92a4e['tv_archive_server_id']) && (0 < $fe93a43f53d92a4e['tv_archive_duration']))) {
	goto label1186;
}

$ba10d8a0b8348643 = c2Ae9fdA76B23ED4($fe93a43f53d92a4e['id']);
echo '                        <div class="tab-pane" id="archive">' . "\r\n\t\t\t\t\t\t\t" . '<div class="table">' . "\r\n\t\t\t\t\t\t\t\t" . '<table id="datatable-archive" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Date</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Title</th>' . "\r\n" . '                                            <th class="text-center">Status</th>' . "\r\n" . '                                            <th class="text-center">Player</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n" . '                                        ';

foreach ($ba10d8a0b8348643 as $B4a603c2a57d3acf) {
	goto label561;

	label521:

	echo '</td>' . "\r\n" . '                                            <td class="text-center">' . "\r\n" . '                                                ';

	if ($B4a603c2a57d3acf['in_progress']) {
		goto label559;
	}

	if ($B4a603c2a57d3acf['complete']) {
		goto label556;
	}

	echo '                                                <button type=\'button\' class=\'btn btn-warning btn-xs waves-effect waves-light\'>INCOMPLETE</button>' . "\r\n" . '                                                ';
	goto label557;
	goto label556;

	label535:

	echo ');"><i class="mdi mdi-play"></i></button></td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n" . '                                        ';
	goto label614;

	label538:

	echo date('H:i:s', $B4a603c2a57d3acf['start']);
	echo ' - ';
	echo date('H:i:s', $B4a603c2a57d3acf['end']);
	echo '</td>' . "\r\n" . '                                            <td>';
	echo $B4a603c2a57d3acf['title'];
	goto label521;

	label556:

	echo '                                                <button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light\'>COMPLETE</button>' . "\r\n" . '                                                ';

	label557:

	goto label581;

	label559:

	goto label580;

	label561:

	$f7037fc395d8fcad = $B4a603c2a57d3acf['end'] - $B4a603c2a57d3acf['start'];
	$B4a603c2a57d3acf['stream_id'] = XUI::$rRequest['id'];
	echo "\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n" . '                                            <td class="text-center">';
	echo date($f1dcaed925076e67['date_format'], $B4a603c2a57d3acf['start']);
	echo '<br/>';
	goto label538;

	label580:

	echo '                                                <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>IN PROGRESS</button>' . "\r\n" . '                                                ';

	label581:

	echo '                                                <a href="record?archive=';
	echo urlencode(base64_encode(json_encode($B4a603c2a57d3acf)));
	echo '"><button class="btn btn-danger btn-xs waves-effect waves-light tooltip" title="Save to VOD"><i class="mdi mdi-record"></i></button></a>' . "\r\n" . '                                            </td>' . "\r\n" . '                                            <td class="text-center"><button type="button" class="btn btn-info waves-effect waves-light btn-xs" onclick="player(';
	goto label595;

	label595:

	echo intval($fe93a43f53d92a4e['id']);
	echo ', ';
	echo intval($B4a603c2a57d3acf['start']);
	echo ', ';
	echo intval($f7037fc395d8fcad / 60);
	goto label535;

	label614:
}

goto label1185;

label617:

$c68b76c7e42b19eb = NULL;

if ($fe93a43f53d92a4e['type'] == 1) {
	goto label364;
}
if (($fe93a43f53d92a4e['type'] == 2) || ($fe93a43f53d92a4e['type'] == 5)) {
	goto label1043;
}

if (!($fe93a43f53d92a4e['type'] == 3)) {
	goto label1042;
}

$d39b06d67f28803d = NULL;
goto label374;

label637:

echo htmlspecialchars($Ccbdf03f8a4df633['director']);
echo '">' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="genre">';
echo $_['genres'];
echo '</label>' . "\r\n" . '                                    <div class="col-md-4">' . "\r\n" . '                                        <input readonly type="text" class="form-control" id="genre" name="genre" value="';
echo htmlspecialchars($Ccbdf03f8a4df633['genre']);
goto label1224;

label652:

$c68b76c7e42b19eb = (!empty($Ccbdf03f8a4df633['backdrop_path'][0]) ? XUI::FCA722697178454B($Ccbdf03f8a4df633['backdrop_path'][0], a41659D47a278ceB() ? 'https' : 'http') : XUI::FCA722697178454B($Ccbdf03f8a4df633['movie_image'], A41659D47A278CEB() ? 'https' : 'http'));

if (empty($c68b76c7e42b19eb)) {
	goto label363;
}

if (@getimagesize($c68b76c7e42b19eb)) {
	goto label694;
}

$c68b76c7e42b19eb = NULL;

label694:

goto label363;

label695:

echo '</label>' . "\r\n" . '                                    <div class="col-md-4 input-group">' . "\r\n" . '                                        <input readonly type="text" class="form-control text-center" id="youtube_trailer" name="youtube_trailer" value="';
echo htmlspecialchars($Ccbdf03f8a4df633['youtube_trailer']);
echo '">' . "\r\n" . '                                        <div class="input-group-append">' . "\r\n" . '                                            <a href="javascript:void(0)" onClick="openYouTube(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="rating">';
echo $_['rating'];
echo '</label>' . "\r\n" . '                                    <div class="col-md-4">' . "\r\n" . '                                        <input readonly type="text" class="form-control text-center" id="rating" name="rating" value="';
goto label212;

label706:

echo '">' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                            </div> ' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

label707:

goto label1025;

label708:

echo "\t\t\t\t\t\t" . '<div class="tab-pane" id="sources">' . "\r\n\t\t\t\t\t\t\t" . '<div class="table">' . "\r\n\t\t\t\t\t\t\t\t" . '<table id="datatable-sources" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Order</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Source</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center" style="width:300px;">Stream Info &nbsp;<button onClick="scanSources();" type="button" class="btn btn-xs btn-outline-secondary waves-effect waves-light"><i class="mdi mdi-refresh"></i></button></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t";
goto label227;

label710:

$b62d6460eb33ea07->query('SELECT `server_id`, `direct_source`, `monitor_pid`, `pid`, `stream_status`, `on_demand` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`id` = ? AND `server_id` IS NOT NULL;', $fe93a43f53d92a4e['id']);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label739;
}

foreach ($b62d6460eb33ea07->get_rows() as $c5832ce3aa14fb41) {
	if (!($c5832ce3aa14fb41['server_id'] && !$c5832ce3aa14fb41['direct_source'])) {
		goto label737;
	}

	$C5157eb935ac9548 = true;
	goto label739;

	label737:
}

label739:

goto label1091;

label740:
if (!(!isset(XUI::$rRequest['id']) || !($fe93a43f53d92a4e = f260B7A31f021e39(XUI::$rRequest['id'])))) {
	goto label757;
}

E72f42a93714bA87();

label757:

$A252f2fdcada8336 = [1 => 'Stream', 2 => 'Movie', 3 => 'Channel', 4 => 'Station', 5 => 'Episode'][$fe93a43f53d92a4e['type']];
$b1eed3fdb609052d = NULL;
goto label617;

label762:

$b62d6460eb33ea07->query('SELECT `stream_id`, `stream_info`, `progress_info` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $Ebc983494a99df63)) . ') AND `stream_info` IS NOT NULL AND `pid` IS NOT NULL AND `pid` > 0 GROUP BY `stream_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$d8de6914c82ccff9[$Fb9da1713bff19ce['stream_id']] = [json_decode($Fb9da1713bff19ce['stream_info'], true), json_decode($Fb9da1713bff19ce['progress_info'], true)];
}

echo '                        <div class="tab-pane" id="adaptive">' . "\r\n\t\t\t\t\t\t\t" . '<div class="table">' . "\r\n\t\t\t\t\t\t\t\t" . '<table id="datatable-adaptive" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Stream Name</th>' . "\r\n" . '                                            <th class="text-center">Bandwidth</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center" style="width:300px;">Stream Info</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t";

foreach ($Ebc983494a99df63 as $D60e2f1362c3973c) {
	goto label811;

	label801:

	$d5faa5f11beba133 .= '<td>' . $Cae0c79563bb38d6 . '</td>';

	label804:

	$d5faa5f11beba133 .= '<td>' . $c7b8b5438b915f8f . '</td></tr></tbody></table>';
	echo "\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n" . '                                                <a href="stream_view?id=';
	echo $D60e2f1362c3973c;
	goto label834;

	label811:

	list($D9d6a5d0b76a9aaf, $Debb6b730aee3ce9) = $d8de6914c82ccff9[$D60e2f1362c3973c] ?: [];

	if (isset($D9d6a5d0b76a9aaf['codecs']['video'])) {
		goto label827;
	}

	$D9d6a5d0b76a9aaf['codecs']['video'] = ['width' => '?', 'height' => '?', 'codec_name' => 'N/A', 'r_frame_rate' => '--'];

	label827:

	if (isset($D9d6a5d0b76a9aaf['codecs']['audio'])) {
		goto label874;
	}

	goto label871;

	label834:

	echo '"><button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-lg">';
	echo $D60e2f1362c3973c;
	echo '</button></a>' . "\r\n" . '                                            </td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $Af1444cd652ebf84[$D60e2f1362c3973c] ?: 'Not Available';
	echo '</td>' . "\r\n" . '                                            <td class="text-center">';
	goto label844;

	label844:

	echo number_format(floatval($D9d6a5d0b76a9aaf['bitrate']), 0);
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center" style="width:400px;">';
	echo $d5faa5f11beba133;
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t";
	goto label979;

	label858:

	if ($c7b8b5438b915f8f) {
		goto label864;
	}

	$c7b8b5438b915f8f = '--';
	goto label921;

	label864:

	if (!(1000 <= $c7b8b5438b915f8f)) {
		goto label919;
	}

	goto label914;

	label871:

	$D9d6a5d0b76a9aaf['codecs']['audio'] = ['codec_name' => 'N/A'];

	label874:

	if (!($D9d6a5d0b76a9aaf['bitrate'] == 0)) {
		goto label882;
	}

	$D9d6a5d0b76a9aaf['bitrate'] = '?';

	label882:

	goto label932;

	label884:

	if ($Ab7613704ad1bb6c) {
		goto label888;
	}

	$d5faa5f11beba133 .= '<td style=\'color: #20a009;\'><i class=\'mdi mdi-play-speed\' data-name=\'mdi-play-speed\'></i></td>';

	label888:

	$d5faa5f11beba133 .= '<td style=\'color: #20a009;\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td></tr><tr><td class=\'double\'>' . $D9d6a5d0b76a9aaf['codecs']['video']['width'] . ' x ' . $D9d6a5d0b76a9aaf['codecs']['video']['height'] . '</td><td>' . $D9d6a5d0b76a9aaf['codecs']['video']['codec_name'] . '</td><td>' . $D9d6a5d0b76a9aaf['codecs']['audio']['codec_name'] . '</td>';

	if ($Ab7613704ad1bb6c) {
		goto label804;
	}

	goto label801;

	label914:

	$c7b8b5438b915f8f = intval($c7b8b5438b915f8f / 1000);

	label919:

	$c7b8b5438b915f8f = $c7b8b5438b915f8f . ' FPS';

	label921:

	$d5faa5f11beba133 = '<table class=\'table-data nowrap\' style=\'width: 400px;\' align=\'center\'><tbody><tr><td class=\'double\'>' . number_format($D9d6a5d0b76a9aaf['bitrate'] / 1024, 0) . ' Kbps</td><td style=\'color: #20a009;\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td style=\'color: #20a009;\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>';
	goto label884;

	label932:

	if (isset($Debb6b730aee3ce9['speed'])) {
		goto label939;
	}

	$Cae0c79563bb38d6 = '1x';
	goto label949;

	label939:

	$Cae0c79563bb38d6 = (floor($Debb6b730aee3ce9['speed'] * 100) / 100) . 'x';
	goto label949;

	label949:

	$c7b8b5438b915f8f = NULL;

	if (isset($Debb6b730aee3ce9['fps'])) {
		goto label972;
	}

	if (!isset($D9d6a5d0b76a9aaf['codecs']['video']['r_frame_rate'])) {
		goto label970;
	}

	$c7b8b5438b915f8f = intval($D9d6a5d0b76a9aaf['codecs']['video']['r_frame_rate']);
	goto label970;

	label970:

	goto label977;

	label972:

	$c7b8b5438b915f8f = intval($Debb6b730aee3ce9['fps']);

	label977:

	goto label858;

	label979:
}

goto label1495;

label982:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label997;
}

echo ' style="display: none;"';

label997:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
goto label1208;

label1000:

echo $_['plot'];
echo '</label>' . "\r\n" . '                                    <div class="col-md-10">' . "\r\n" . '                                        <textarea readonly rows="6" class="form-control" id="plot" name="plot">';
echo htmlspecialchars($Ccbdf03f8a4df633['plot']);
echo '</textarea>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="cast">';
echo $_['cast'];
goto label463;

label1012:
if (!((0 < $fe93a43f53d92a4e['tv_archive_server_id']) && (0 < $fe93a43f53d92a4e['tv_archive_duration']))) {
	goto label1022;
}

echo '                        <li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#archive" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'TV Archive' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';

label1022:

echo '                        <li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#errors" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Recent Errors' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';
goto label1;

label1024:

echo "\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

label1025:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label1607;

label1027:

$Ebc983494a99df63 = json_decode($fe93a43f53d92a4e['adaptive_link'], true) ?: [];

label1035:

if (!($fe93a43f53d92a4e['type'] == 5)) {
	goto label483;
}

$d02ef9ae10a41939 = NULL;
goto label68;

label1042:

goto label363;

label1043:

$Ccbdf03f8a4df633 = json_decode($fe93a43f53d92a4e['movie_properties'], true);
goto label652;

label1050:

echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div> ' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

label1051:

goto label707;

label1052:

echo '                        <div class="tab-pane" id="information">' . "\r\n" . '                            <div class="col-12 input-view">' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="plot">';
goto label1000;

label1054:

echo $_['plot'];
echo '</label>' . "\r\n" . '                                        <div class="col-md-10">' . "\r\n" . '                                            <textarea readonly rows="6" class="form-control" id="plot" name="plot">';
echo htmlspecialchars($Ccbdf03f8a4df633['plot']);
echo '</textarea>' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <div class="form-group row mb-4">' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="release_date">';
echo $_['release_date'];
goto label1066;

label1066:

echo '</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center" id="release_date" name="release_date" value="';
echo htmlspecialchars($Ccbdf03f8a4df633['release_date']);
echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="episode_run_time">';
echo $_['runtime'];
echo '</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="';
goto label49;

label1077:

echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <div class="form-group row mb-4">' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="director">Director</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center" id="director" name="director" value="';
echo htmlspecialchars($d02ef9ae10a41939['director']);
echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="genre">Genres</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center " id="genre" name="genre" value="';
echo htmlspecialchars($d02ef9ae10a41939['genre']);
echo '">' . "\r\n" . '                                        </div>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <div class="form-group row mb-4">' . "\r\n" . '                                        <label class="col-md-2 col-form-label" for="release_date">Release Date</label>' . "\r\n" . '                                        <div class="col-md-4">' . "\r\n" . '                                            <input readonly type="text" class="form-control text-center" id="release_date" name="release_date" value="';
goto label107;

label1091:

echo "\t\t\t\t\t\t" . '<div class="tab-pane" id="guide">' . "\r\n\t\t\t\t\t\t\t" . '<div class="inbox-widget slimscroll" style="min-height: 400px;">' . "\r\n\t\t\t\t\t\t\t\t";
$B199eab9ae07415b = date('Y-m-d');

foreach ($b1eed3fdb609052d as $a5725df552d26b87) {
	goto label1128;

	label1100:

	echo intval($fe93a43f53d92a4e['id']);
	echo '&programme=';
	echo intval($a5725df552d26b87['id']);
	echo '"><button class="btn btn-danger btn-xs waves-effect waves-light tooltip" title="Record"><i class="mdi mdi-record"></i></button></a>' . "\r\n" . '                                        ';

	label1112:

	goto label1155;

	label1114:

	echo $a5725df552d26b87['title'];
	echo '</p>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<p class="inbox-item-text" style="margin-top:10px;">';
	echo $a5725df552d26b87['description'];
	echo '</p>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<p class="inbox-item-date btn-group">' . "\r\n" . '                                        <button class="btn btn-info btn-xs waves-effect waves-light btn-fixed">';
	echo date('H:i', $a5725df552d26b87['start']);
	goto label1158;

	label1128:

	if (!(date('Y-m-d', $a5725df552d26b87['start']) != $B199eab9ae07415b)) {
		goto label1152;
	}

	$B199eab9ae07415b = date('Y-m-d', $a5725df552d26b87['start']);
	echo '<h4 class="header-title mb-3" style="padding-top: 20px;">' . date('l jS', $a5725df552d26b87['start']) . '</h4>';

	label1152:

	echo "\t\t\t\t\t\t\t\t" . '<div class="inbox-item">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<p class="inbox-item-author">';
	goto label1114;

	label1155:

	echo "\t\t\t\t\t\t\t\t\t" . '</p><br/>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t";
	goto label1173;

	label1158:

	echo ' - ';
	echo date('H:i', $a5725df552d26b87['end']);
	echo '</button>' . "\r\n" . '                                        ';

	if (!$C5157eb935ac9548) {
		goto label1112;
	}

	echo '                                        <a href="record?id=';
	goto label1100;

	label1173:
}

echo "\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';
goto label502;

label1177:

echo '                                            <th>Actions</th>' . "\r\n" . '                                            ';

label1178:

echo '                                            <th>';
echo $A252f2fdcada8336;
echo ' Info</th>' . "\r\n" . '                                            <th>';
goto label1572;

label1182:

echo "\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

label1183:

goto label1051;

label1184:

goto label130;

label1185:

echo "\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

label1186:

echo '                        <div class="tab-pane" id="errors">' . "\r\n\t\t\t\t\t\t\t" . '<div class="table">' . "\r\n\t\t\t\t\t\t\t\t" . '<table id="datatable-errors" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Date</th>' . "\r\n" . '                                            <th>Message</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n" . '                                        ';

foreach (E7045b4678cc9DB2($fe93a43f53d92a4e['id']) as $B4a603c2a57d3acf) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n" . '                                            <td style="width: 80px;" class="text-center">';
	echo date($f1dcaed925076e67['datetime_format'], $B4a603c2a57d3acf['date']);
	echo '</td>' . "\r\n" . '                                            <td onClick=\'showError(this);\' style=\'cursor: pointer;\'>';
	echo $B4a603c2a57d3acf['error'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n" . '                                        ';
}

goto label1024;

label1208:

echo "\t\t\t\t\t" . '</div>' . "\r\n" . '                    <h4 class="page-title">';
echo $fe93a43f53d92a4e['stream_display_name'];
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n" . '                ';

if (!$c68b76c7e42b19eb) {
	goto label1507;
}

echo '                <img class="card-img-top img-fluid" src="';
goto label1505;

label1217:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '<th>Status</th>' . "\r\n" . '                                            ';

label1218:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '<th>Actions</th>' . "\r\n" . '                                            ';

if ($fe93a43f53d92a4e['type'] == 2) {
	goto label89;
}

goto label85;

label1224:

echo '">' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="release_date">';
echo $_['release_date'];
echo '</label>' . "\r\n" . '                                    <div class="col-md-4">' . "\r\n" . '                                        <input readonly type="text" class="form-control text-center" id="release_date" name="release_date" value="';
echo htmlspecialchars($Ccbdf03f8a4df633['release_date']);
echo '">' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <label class="col-md-2 col-form-label" for="episode_run_time">';
goto label90;

label1235:

if (!($fe93a43f53d92a4e['type'] == 3)) {
	goto label1183;
}

if (!$d39b06d67f28803d) {
	goto label1183;
}

echo '                        <div class="tab-pane" id="sources">' . "\r\n\t\t\t\t\t\t\t" . '<div class="table">' . "\r\n\t\t\t\t\t\t\t\t" . '<table id="datatable-sources" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Position</th>' . "\r\n" . '                                            <th>Filename</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Start</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Finish</th>' . "\r\n" . '                                            <th class="text-center">Duration</th>' . "\r\n" . '                                            <th class="text-center">Stream Info</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n" . '                                        ';

foreach ($d39b06d67f28803d as $Cd3fb7f84d1dfaae) {
	goto label1332;

	label1248:

	if ($c7b8b5438b915f8f) {
		goto label1254;
	}

	$c7b8b5438b915f8f = '--';
	goto label1395;

	label1254:

	if (!(1000 <= $c7b8b5438b915f8f)) {
		goto label1393;
	}

	goto label1388;

	label1261:

	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n" . '                                        ';
	goto label1492;

	label1264:

	$d5faa5f11beba133 .= '<td style=\'color: #20a009;\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td></tr><tr><td class=\'double\'>' . $Cd3fb7f84d1dfaae['stream_info']['codecs']['video']['width'] . ' x ' . $Cd3fb7f84d1dfaae['stream_info']['codecs']['video']['height'] . '</td><td>' . $Cd3fb7f84d1dfaae['stream_info']['codecs']['video']['codec_name'] . '</td><td>' . $Cd3fb7f84d1dfaae['stream_info']['codecs']['audio']['codec_name'] . '</td>';
	$d5faa5f11beba133 .= '<td>' . $c7b8b5438b915f8f . '</td></tr></tbody></table>';
	if (($Cd3fb7f84d1dfaae['start'] <= $d03052828cab569a) && ($d03052828cab569a < $Cd3fb7f84d1dfaae['finish'])) {
		goto label1461;
	}

	$aa8757e440328b92 = '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light btn-fixed-xs">' . ($Cd3fb7f84d1dfaae['position'] + 1) . '</button>';
	goto label1466;
	goto label1461;

	label1310:

	echo date('H:i:s', $Cedba011a90e0ad1);
	echo '</td>' . "\r\n" . '                                            <td class="text-center">';
	echo $f7037fc395d8fcad;
	echo '</td>' . "\r\n" . '                                            <td class="text-center">';
	echo $d5faa5f11beba133;
	goto label1261;

	label1321:

	echo '</td>' . "\r\n" . '                                            <td>';
	echo $F48d5724f3b4ec96;
	echo '</td>' . "\r\n" . '                                            <td class="text-center">';
	echo date('H:i:s', $B9fd20b7102e0be3);
	echo '</td>' . "\r\n" . '                                            <td class="text-center">';
	goto label1310;

	label1332:

	$F48d5724f3b4ec96 = pathinfo(json_decode($fe93a43f53d92a4e['stream_source'], true)[$Cd3fb7f84d1dfaae['position']])['filename'];
	$Cd3fb7f84d1dfaae['seconds'] = intval(explode('.', $Cd3fb7f84d1dfaae['seconds'])[0]);
	$A486d2019332744a = $Cd3fb7f84d1dfaae['start'] - $d03052828cab569a;
	$B9fd20b7102e0be3 = time() + $A486d2019332744a;
	$Cedba011a90e0ad1 = $B9fd20b7102e0be3 + $Cd3fb7f84d1dfaae['seconds'];
	goto label1407;

	label1369:

	$c7b8b5438b915f8f = NULL;

	if (!isset($Cd3fb7f84d1dfaae['stream_info']['codecs']['video']['r_frame_rate'])) {
		goto label1386;
	}

	$c7b8b5438b915f8f = intval($Cd3fb7f84d1dfaae['stream_info']['codecs']['video']['r_frame_rate']);

	label1386:

	goto label1248;

	label1388:

	$c7b8b5438b915f8f = intval($c7b8b5438b915f8f / 1000);

	label1393:

	$c7b8b5438b915f8f = $c7b8b5438b915f8f . ' FPS';

	label1395:

	$d5faa5f11beba133 = '<table class=\'table-data nowrap\' align=\'center\'><tbody><tr><td class=\'double\'>' . number_format($Cd3fb7f84d1dfaae['stream_info']['bitrate'] / 1024, 0) . ' Kbps</td><td style=\'color: #20a009;\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td style=\'color: #20a009;\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td>';
	goto label1264;

	label1407:

	if (86400 <= $Cd3fb7f84d1dfaae['seconds']) {
		goto label1428;
	}

	$f7037fc395d8fcad = sprintf('%02dh %02dm %02ds', $Cd3fb7f84d1dfaae['seconds'] / 3600, ($Cd3fb7f84d1dfaae['seconds'] / 60) % 60, $Cd3fb7f84d1dfaae['seconds'] % 60);
	goto label1445;

	label1428:

	$f7037fc395d8fcad = sprintf('%02dd %02dh %02dm', $Cd3fb7f84d1dfaae['seconds'] / 86400, ($Cd3fb7f84d1dfaae['seconds'] / 3600) % 24, ($Cd3fb7f84d1dfaae['seconds'] / 60) % 60);
	goto label1445;

	label1445:

	$f7037fc395d8fcad = '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed\'>' . $f7037fc395d8fcad . '</button>';

	if (isset($Cd3fb7f84d1dfaae['stream_info']['codecs']['video'])) {
		goto label1459;
	}

	$Cd3fb7f84d1dfaae['stream_info']['codecs']['video'] = ['width' => '?', 'height' => '?', 'codec_name' => 'N/A', 'r_frame_rate' => '--'];

	label1459:

	goto label1470;

	label1461:

	$aa8757e440328b92 = '<button type="button" title="Playing Now" class="tooltip btn btn-info btn-xs waves-effect waves-light btn-fixed-xs">' . ($Cd3fb7f84d1dfaae['position'] + 1) . '</button>';

	label1466:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n" . '                                            <td class="text-center">';
	echo $aa8757e440328b92;
	goto label1321;

	label1470:

	if (isset($Cd3fb7f84d1dfaae['stream_info']['codecs']['audio'])) {
		goto label1480;
	}

	$Cd3fb7f84d1dfaae['stream_info']['codecs']['audio'] = ['codec_name' => 'N/A'];

	label1480:

	if (!($Cd3fb7f84d1dfaae['stream_info']['bitrate'] == 0)) {
		goto label1369;
	}

	$Cd3fb7f84d1dfaae['stream_info']['bitrate'] = '?';
	goto label1369;

	label1492:
}

goto label1182;

label1495:

echo "\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

label1496:

if (!(0 < count($b1eed3fdb609052d))) {
	goto label502;
}

$C5157eb935ac9548 = false;
goto label710;

label1505:

echo $c68b76c7e42b19eb;
echo '" onerror="this.style.display=\'none\'"/>' . "\r\n" . '                ';

label1507:

if (!($fe93a43f53d92a4e['type'] == 1)) {
	goto label210;
}

echo "\t\t\t\t" . '<div class="card-box">' . "\r\n\t\t\t\t\t" . '<ul class="nav nav-tabs nav-bordered nav-justified">' . "\r\n\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#today" data-toggle="tab" aria-expanded="true" class="nav-link active">' . "\r\n\t\t\t\t\t\t\t\t" . 'Today' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#week" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'This Week' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#month" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'This Month' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#all" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'All Time' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t" . '<div class="tab-content">' . "\r\n\t\t\t\t\t\t";
goto label146;

label1514:

echo '                        <li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#information" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Movie Information' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';

label1515:

goto label1;

label1516:

echo "\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#sources" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Stream Sources' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';
goto label1587;

label1518:

if ($fe93a43f53d92a4e['type'] == 1) {
	goto label1516;
}

if ($fe93a43f53d92a4e['type'] == 2) {
	goto label1606;
}

if ($fe93a43f53d92a4e['type'] == 3) {
	goto label1604;
}

if (!($fe93a43f53d92a4e['type'] == 5)) {
	goto label372;
}

if (!$d02ef9ae10a41939) {
	goto label371;
}

goto label370;

label1539:

$Ebc983494a99df63 = array_merge([$fe93a43f53d92a4e['id']], $Ebc983494a99df63);
$d8de6914c82ccff9 = $Af1444cd652ebf84 = [];
$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $Ebc983494a99df63)) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Af1444cd652ebf84[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['stream_display_name'];
}

goto label762;

label1572:

echo $A252f2fdcada8336;
echo ' Info</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td colspan="8" class="text-center">Loading information...</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

if ($fe93a43f53d92a4e['type'] == 1) {
	goto label708;
}

if ($fe93a43f53d92a4e['type'] == 2) {
	goto label1052;
}

if ($fe93a43f53d92a4e['type'] == 5) {
	goto label1184;
}

goto label1235;

label1587:

if (!(0 < count($Ebc983494a99df63))) {
	goto label1595;
}

echo '                        <li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#adaptive" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Adaptive Link' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';

label1595:

if (!(0 < count($b1eed3fdb609052d))) {
	goto label1012;
}

echo "\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#guide" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Programme Guide' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';
goto label1012;

label1604:

echo '                        <li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#sources" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Channel Guide' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';

label1605:

goto label1515;

label1606:

goto label1514;

label1607:

include 'footer.php';

?>