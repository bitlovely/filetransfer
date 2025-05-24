<?php


goto label49;

label1:

echo '                                </tbody>' . "\n" . '                            </table>' . "\n" . '                        </div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label366;

label3:

echo ' style="display: none;"';

label4:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n" . '                    <div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n" . '                    ';
goto label178;

label8:

$fe93a43f53d92a4e = f260B7a31F021e39(XUI::$rRequest['id']);
if (!(!$fe93a43f53d92a4e || ($fe93a43f53d92a4e['type'] != 1) || ($fe93a43f53d92a4e['tv_archive_duration'] == 0) || ($fe93a43f53d92a4e['tv_archive_server_id'] == 0))) {
	goto label32;
}

e72f42a93714BA87();

label32:

$ba10d8a0b8348643 = c2ae9fda76b23ED4($fe93a43f53d92a4e['id']);
goto label340;

label38:

echo "\t\t\t\t\t" . '<h4 class="page-title">Recordings</h4>' . "\n" . '                    ';

label39:

echo "\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label59;
}

goto label58;

label49:

include 'session.php';
include 'functions.php';

if (e6d500E19634D513()) {
	goto label57;
}

e72f42a93714bA87();

label57:

goto label330;

label58:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Recording has been scheduled.' . "\n\t\t\t\t" . '</div>' . "\n" . '                ';

label59:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<div class="table">' . "\n" . '                            <table id="datatable" class="table table-striped table-borderless mb-0">' . "\n" . '                                <thead>' . "\n" . '                                    <tr>' . "\n" . '                                        <th class="text-center">ID</th>' . "\n" . '                                        <th class="text-center">Date</th>' . "\n" . '                                        <th class="text-center">Duration</th>' . "\n" . '                                        <th>Title</th>' . "\n" . '                                        <th class="text-center">Status</th>' . "\n" . '                                        <th class="text-center">Player</th>' . "\n" . '                                        <th class="text-center">Actions</th>' . "\n" . '                                    </tr>' . "\n" . '                                </thead>' . "\n" . '                                <tbody>' . "\n" . '                                    ';

if (!is_null($ee34d49b6caaedbc)) {
	goto label191;
}

foreach ($ba10d8a0b8348643 as $B4a603c2a57d3acf) {
	goto label70;

	label70:

	$f7037fc395d8fcad = $B4a603c2a57d3acf['end'] - $B4a603c2a57d3acf['start'];
	$B4a603c2a57d3acf['stream_id'] = XUI::$rRequest['id'];
	echo '                                    <tr>' . "\n" . '                                        <td>';
	echo $B4a603c2a57d3acf['id'];
	echo '</td>' . "\n" . '                                        <td class="text-center">';
	goto label147;

	label84:

	echo '                                            <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>IN PROGRESS</button>' . "\n" . '                                            ';

	label85:

	echo '                                        </td>' . "\n" . '                                        <td class="text-center"><button type="button" class="btn btn-info waves-effect waves-light btn-xs" onclick="player(';
	echo intval($fe93a43f53d92a4e['id']);
	echo ', ';
	goto label110;

	label94:

	echo '                                        <td class="text-center"><button disabled type="button" class="btn btn-danger waves-effect waves-light btn-xs"><i class="mdi mdi-record"></i></button></td>' . "\n" . '                                        ';
	goto label130;

	label97:

	echo '                                        <td class="text-center"><a href="record?archive=';
	echo urlencode(base64_encode(json_encode($B4a603c2a57d3acf)));
	goto label129;

	label110:

	echo intval($B4a603c2a57d3acf['start']);
	echo ', ';
	echo intval($f7037fc395d8fcad / 60);
	echo ');"><i class="mdi mdi-play"></i></button></td>' . "\n" . '                                        ';

	if (!$B4a603c2a57d3acf['in_progress']) {
		goto label97;
	}

	goto label94;

	label129:

	echo '"><button type="button" class="btn btn-danger waves-effect waves-light btn-xs"><i class="mdi mdi-record"></i></button></a></td>' . "\n" . '                                        ';

	label130:

	echo '                                    </tr>' . "\n" . '                                    ';
	goto label175;

	label133:

	echo '</td>' . "\n" . '                                        <td class="text-center">' . "\n" . '                                            ';

	if ($B4a603c2a57d3acf['in_progress']) {
		goto label173;
	}

	if ($B4a603c2a57d3acf['complete']) {
		goto label170;
	}

	echo '                                            <button type=\'button\' class=\'btn btn-warning btn-xs waves-effect waves-light\'>INCOMPLETE</button>' . "\n" . '                                            ';
	goto label171;
	goto label170;

	label147:

	echo date($f1dcaed925076e67['date_format'] . ' H:i', $B4a603c2a57d3acf['start']);
	echo '</td>' . "\n" . '                                        <td class="text-center">';
	echo sprintf('%02dh %02dm', $f7037fc395d8fcad / 3600, ($f7037fc395d8fcad / 60) % 60);
	echo '</td>' . "\n" . '                                        <td>';
	echo $B4a603c2a57d3acf['title'];
	goto label133;

	label170:

	echo '                                            <button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light\'>COMPLETE</button>' . "\n" . '                                            ';

	label171:

	goto label85;

	label173:

	goto label84;

	label175:
}

goto label190;

label178:

if (!is_null($ee34d49b6caaedbc)) {
	goto label38;
}

echo '                    <h4 class="page-title">';
echo $fe93a43f53d92a4e['stream_display_name'];
echo '<small> - TV Archive</small></h4>' . "\n" . '                    ';
goto label39;
goto label38;

label190:

goto label1;

label191:

foreach ($ee34d49b6caaedbc as $B4a603c2a57d3acf) {
	goto label264;

	label195:

	echo intval($B4a603c2a57d3acf['created_id']);
	echo ');"><i class="mdi mdi-play"></i></button></td>' . "\n" . '                                        ';

	label201:

	echo '                                        <td class="text-center">' . "\n" . '                                            <div class="btn-group">' . "\n" . '                                                ';

	if ($B4a603c2a57d3acf['created_id']) {
		goto label319;
	}

	goto label316;

	label208:

	echo $B4a603c2a57d3acf['id'];
	echo '</td>' . "\n" . '                                        <td class="text-center">';
	echo date($f1dcaed925076e67['date_format'] . ' H:i', $B4a603c2a57d3acf['start']);
	echo '</td>' . "\n" . '                                        <td class="text-center">';
	echo sprintf('%02dh %02dm', $f7037fc395d8fcad / 3600, ($f7037fc395d8fcad / 60) % 60);
	goto label246;

	label231:

	if ($B4a603c2a57d3acf['created_id']) {
		goto label238;
	}

	echo '                                        <td class="text-center"><button disabled type="button" class="btn btn-info waves-effect waves-light btn-xs"><i class="mdi mdi-play"></i></button></td>' . "\n" . '                                        ';
	goto label201;

	label238:

	echo '                                        <td class="text-center"><button type="button" class="btn btn-info waves-effect waves-light btn-xs" onclick="player(';
	goto label195;

	label241:

	goto label244;

	label243:

	echo '                                            <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>RECORDING</button>' . "\n" . '                                            ';

	label244:

	goto label310;

	label246:

	echo '</td>' . "\n" . '                                        <td>';
	echo $B4a603c2a57d3acf['title'];
	echo '</td>' . "\n" . '                                        <td class="text-center">' . "\n" . '                                            ';

	if ($B4a603c2a57d3acf['status'] == 0) {
		goto label312;
	}

	if ($B4a603c2a57d3acf['status'] == 1) {
		goto label243;
	}

	goto label289;

	label262:

	goto label327;

	label264:

	$f7037fc395d8fcad = $B4a603c2a57d3acf['end'] - $B4a603c2a57d3acf['start'];
	if (!(($B4a603c2a57d3acf['status'] == 0) && !$B4a603c2a57d3acf['archive'] && ($B4a603c2a57d3acf['end'] < time()))) {
		goto label286;
	}

	$B4a603c2a57d3acf['status'] = 3;

	label286:

	echo '                                    <tr>' . "\n" . '                                        <td>';
	goto label208;

	label289:

	if ($B4a603c2a57d3acf['status'] == 2) {
		goto label297;
	}

	echo '                                            <button type=\'button\' class=\'btn btn-danger btn-xs waves-effect waves-light\'>FAILED</button>' . "\n" . '                                            ';
	goto label241;

	label297:

	echo '                                            <button type=\'button\' class=\'btn btn-success btn-xs waves-effect waves-light\'>COMPLETE</button>' . "\n" . '                                            ';
	goto label241;

	label300:

	echo '"><button title="View Movie" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-movie-outline"></i></button></a>' . "\n" . '                                                ';

	label301:

	echo '                                                <button title="Delete Recording" onClick="deleteRecording(';
	echo intval($B4a603c2a57d3acf['id']);
	echo ')" type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-close"></i></button>' . "\n" . '                                            </div>' . "\n" . '                                        </td>' . "\n" . '                                    </tr>' . "\n" . '                                    ';
	goto label262;

	label310:

	goto label313;

	label312:

	echo '                                            <button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light\'>WAITING</button>' . "\n" . '                                            ';

	label313:

	echo '                                        </td>' . "\n" . '                                        ';
	goto label231;

	label316:

	echo '                                                <button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-movie-outline"></i></button>' . "\n" . '                                                ';
	goto label301;

	label319:

	echo '                                                <a href="stream_view?id=';
	echo intval($B4a603c2a57d3acf['created_id']);
	goto label300;

	label327:
}

goto label1;

label330:

$ee34d49b6caaedbc = NULL;

if (isset(XUI::$rRequest['id'])) {
	goto label339;
}

$ee34d49b6caaedbc = getRecordings();
goto label340;

label339:

goto label8;

label340:

$F6edd90960a3bd9d = (!is_null($ee34d49b6caaedbc) ? 'Recodings' : 'TV Archive');
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label4;
}

goto label3;

label366:

include 'footer.php';

?>