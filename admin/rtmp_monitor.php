<?php


goto label14;

label1:

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n" . '                                    <th>RTMP URL</th>' . "\r\n" . '                                    <th class="text-center">Publisher IP</th>' . "\r\n" . '                                    <th class="text-center">Uptime</th>' . "\r\n" . '                                    <th class="text-center">Clients</th>' . "\r\n" . '                                    <th class="text-center">Stream Info</th>' . "\r\n" . '                                    <th class="text-center">Actions</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n" . '                                ';
$D9846544dffb63c9 = $C8b124a9a0212ac0['server']['application']['live']['stream'];

if (!isset($D9846544dffb63c9['name'])) {
	goto label99;
}

$D9846544dffb63c9 = [$D9846544dffb63c9];
goto label99;

label14:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label22;
}

e72F42a93714ba87();

label22:

goto label315;

label23:

echo '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed\'>' . $Bd92fffa215178e4 . '</button>';
echo '                                    </td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
echo number_format($C8b124a9a0212ac0['bw_in'] / 1000 / 1000, 2);
echo ' Mbps</td>' . "\r\n" . '                                    <td class="text-center">';
goto label47;

label38:

echo $C8b124a9a0212ac0['nginx_version'];
echo '</td>' . "\r\n" . '                                    <td class="text-center">';
echo $C8b124a9a0212ac0['nginx_http_flv_version'];
echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n" . '                                        ';
$Bd92fffa215178e4 = $C8b124a9a0212ac0['uptime'];
goto label369;

label47:

echo number_format($C8b124a9a0212ac0['bw_out'] / 1000 / 1000, 2);
echo ' Mbps</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<form id="line_activity_search">' . "\r\n\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="live_search" value="" placeholder="Search Streams...">' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="live_filter">';
echo $_['server'];
echo '</label>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<select id="live_filter" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';

	if (!(XUI::$rRequest['server'] == $Ec379295dc7029e6['id'])) {
		goto label74;
	}

	echo ' selected';

	label74:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t";
}

goto label339;

label81:

include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label98;
}

echo ' style="display: none;"';

label98:

goto label361;

label99:

foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
	goto label161;

	label103:

	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo htmlspecialchars(XUI::$rServers[intval(XUI::$rRequest['server'])]['rtmp_server']) . $fe93a43f53d92a4e['name'];
	echo '</td>' . "\r\n" . '                                    <td class="text-center">';
	echo $c06aa6f21bd152f1;
	echo '</td>' . "\r\n" . '                                    <td class="text-center">' . "\r\n" . '                                        ';
	goto label123;

	label123:

	$Bd92fffa215178e4 = $fe93a43f53d92a4e['time'] / 1000;

	if (86400 <= $Bd92fffa215178e4) {
		goto label143;
	}

	$Bd92fffa215178e4 = sprintf('%02dh %02dm %02ds', $Bd92fffa215178e4 / 3600, ($Bd92fffa215178e4 / 60) % 60, $Bd92fffa215178e4 % 60);
	goto label298;

	label143:

	goto label286;

	label145:

	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n" . '                                        <table class=\'table-data\' style="width: 300px !important; white-space: nowrap;" align=\'center\'><tbody><tr><td class=\'double\'>';
	echo number_format($fe93a43f53d92a4e['bw_in'] / 1000, 0);
	echo ' Kbps</td><td style=\'color: #20a009;\'><i class=\'mdi mdi-video\' data-name=\'mdi-video\'></i></td><td style=\'color: #20a009;\'><i class=\'mdi mdi-volume-high\' data-name=\'mdi-volume-high\'></i></td><td style=\'color: #20a009;\'><i class=\'mdi mdi-layers\' data-name=\'mdi-layers\'></i></td></tr><tr><td class=\'double\'>';
	echo $fe93a43f53d92a4e['meta']['video']['width'];
	echo ' x ';
	goto label198;

	label161:

	if (!isset($fe93a43f53d92a4e['client']['id'])) {
		goto label171;
	}

	$fe93a43f53d92a4e['client'] = [$fe93a43f53d92a4e['client']];

	label171:

	$D5bc8db92c852326 = count($fe93a43f53d92a4e['client']);
	$c06aa6f21bd152f1 = '';
	goto label235;

	label179:

	echo '</td><td>';
	echo round($fe93a43f53d92a4e['meta']['video']['frame_rate'], 0);
	echo ' FPS</td></tr></tbody></table>' . "\r\n" . '                                    </td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<button data-toggle="tooltip" title="Kill Stream" type="button" class="btn tooltip btn-light waves-effect waves-light btn-xs" onClick="kill(';
	echo intval(XUI::$rRequest['server']);
	echo ', \'';
	goto label306;

	label198:

	echo $fe93a43f53d92a4e['meta']['video']['height'];
	echo '</td><td>';
	echo $fe93a43f53d92a4e['meta']['video']['codec'];
	echo '</td><td>';
	echo $fe93a43f53d92a4e['meta']['audio']['codec'];
	goto label179;

	label214:

	$a93d58fa34cf616f = '<a href=\'live_connections?search=RTMP&stream_id=' . intval($fe93a43f53d92a4e['name']) . '&server=' . intval(XUI::$rRequest['server']) . '\'><button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $D5bc8db92c852326 . '</button></a>';

	label230:

	echo "\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $fe93a43f53d92a4e['name'];
	goto label103;

	label235:

	foreach ($fe93a43f53d92a4e['client'] as $cf20aa9dec61583c) {
		if (!($fe93a43f53d92a4e['time'] <= $cf20aa9dec61583c['time'])) {
			goto label258;
		}

		$c06aa6f21bd152f1 = '<a onClick="whois(\'' . $cf20aa9dec61583c['address'] . '\');" href=\'javascript: void(0);\'>' . $cf20aa9dec61583c['address'] . '</a>';
		$D5bc8db92c852326--;
		goto label260;

		label258:
	}

	label260:
	if ((0 < $D5bc8db92c852326) && is_numeric($fe93a43f53d92a4e['name'])) {
		goto label214;
	}

	if (0 < $D5bc8db92c852326) {
		goto label279;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-secondary btn-xs waves-effect waves-light\'>0</button>';
	goto label277;

	label277:

	goto label282;

	label279:

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>' . $D5bc8db92c852326 . '</button>';

	label282:

	goto label230;
	goto label214;

	label286:

	$Bd92fffa215178e4 = sprintf('%02dd %02dh %02dm', $Bd92fffa215178e4 / 86400, ($Bd92fffa215178e4 / 3600) % 24, ($Bd92fffa215178e4 / 60) % 60);

	label298:

	echo '<button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light btn-fixed\'>' . $Bd92fffa215178e4 . '</button>';
	echo '                                    </td>' . "\r\n" . '                                    <td class="text-center">';
	echo $a93d58fa34cf616f;
	goto label145;

	label306:

	echo $fe93a43f53d92a4e['name'];
	echo '\');"><i class="mdi mdi-close"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t";
	goto label311;

	label311:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label397;

label315:
if (!(!isset(XUI::$rRequest['server']) || !isset($Bcf70cba56392975[XUI::$rRequest['server']]))) {
	goto label331;
}

XUI::$rRequest['server'] = SERVER_ID;

label331:

$C8b124a9a0212ac0 = E4996afFb045c086(XUI::$rRequest['server']);
$F6edd90960a3bd9d = 'RTMP Monitor';
goto label81;

label339:

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="live_show_entries">';
echo $_['show'];
echo '</label>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<select id="live_show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label353;
	}

	echo ' selected';

	label353:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t";
}

goto label1;

label361:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n\t\t\t\t\t\t" . '<ol class="breadcrumb m-0">' . "\r\n\t\t\t\t\t\t\t" . '<li>' . "\r\n\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0);" onClick="navigate(\'rtmp_monitor\');" style="margin-right:10px;">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-dark waves-effect waves-light btn-sm">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-refresh"></i> ';
echo $_['refresh'];
echo "\t\t\t\t\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t" . '</ol>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">RTMP Monitor</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<table class="table table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t" . '<thead class="thead-light">' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">RTMP PID</th>' . "\r\n" . '                                    <th class="text-center">NGINX Version</th>' . "\r\n" . '                                    <th class="text-center">FLV Version</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Uptime</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Input Mbps</th>' . "\r\n" . '                                    <th class="text-center">Output Mbps</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
echo $C8b124a9a0212ac0['pid'];
echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
goto label38;

label369:

if (86400 <= $Bd92fffa215178e4) {
	goto label384;
}

$Bd92fffa215178e4 = sprintf('%02dh %02dm %02ds', $Bd92fffa215178e4 / 3600, ($Bd92fffa215178e4 / 60) % 60, $Bd92fffa215178e4 % 60);
goto label23;

label384:

$Bd92fffa215178e4 = sprintf('%02dd %02dh %02dm', $Bd92fffa215178e4 / 86400, ($Bd92fffa215178e4 / 3600) % 24, ($Bd92fffa215178e4 / 60) % 60);
goto label23;

label397:

include 'footer.php';

?>