<?php


goto label56;

label1:

goto label271;

label2:

$fe93a43f53d92a4e = f260B7a31F021E39(XUI::$rRequest['id']);
$E32a27f7af5bdb9d = XUI::getProgramme(XUI::$rRequest['id'], XUI::$rRequest['programme']);
if (!(!$fe93a43f53d92a4e || ($fe93a43f53d92a4e['type'] != 1) || !$E32a27f7af5bdb9d)) {
	goto label271;
}

goto label269;

label29:

foreach ($B075a4c00323e8f8 as $C082ca9ed03f473c) {
	echo '                                                                <option value="';
	echo XUI::$rServers[$C082ca9ed03f473c]['id'];
	echo '">';
	echo XUI::$rServers[$C082ca9ed03f473c]['server_name'];
	echo ' - ';
	echo XUI::$rServers[$C082ca9ed03f473c]['server_ip'];
	echo '</option>' . "\n" . '                                                                ';
}

goto label53;

label50:

echo '                                                                <option selected value="';
goto label319;

label52:

echo '</option>' . "\n" . '                                                            ';

label53:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="submit" class="btn btn-primary" value="Schedule" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n" . '            ';

label54:

echo "\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label434;

label56:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label64;
}

E72f42a93714bA87();

label64:

goto label90;

label65:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Record an Event</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n" . '            <div class="col-xl-12">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body">' . "\n" . '                        ';

if ($fe93a43f53d92a4e) {
	goto label242;
}

echo '<form action="record" method="POST" data-parsley-validate="">';
goto label242;

label72:

echo '</td>' . "\n" . '                                    <td class="text-center">';
echo date(XUI::$rSettings['date_format'], $E32a27f7af5bdb9d['start']);
echo '<br/>';
echo date('H:i', $E32a27f7af5bdb9d['start']);
echo '</td>' . "\n" . '                                    <td class="text-center">';
goto label225;

label90:

$B075a4c00323e8f8 = $Bcf70cba56392975 = [];
$fe93a43f53d92a4e = $E32a27f7af5bdb9d = NULL;

if (isset(XUI::$rRequest['id'])) {
	goto label2;
}

if (isset(XUI::$rRequest['archive'])) {
	goto label160;
}

if (!isset(XUI::$rRequest['stream_id'])) {
	goto label159;
}

goto label176;

label108:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form';

if (!isset(XUI::$rRequest['import'])) {
	goto label115;
}

echo ' enctype="multipart/form-data"';

label115:

echo ' action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="stream_id" value="';
goto label416;

label117:

echo '" />' . "\n" . '                            <input type="hidden" name="archive" value="';
echo isset($E32a27f7af5bdb9d['archive']) ? 1 : 0;
echo '" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                </ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="title">Event Title</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <input type="text" class="form-control" id="title" name="title" value="';
goto label337;

label129:

$E32a27f7af5bdb9d = ['start' => $ba10d8a0b8348643['start'], 'end' => $ba10d8a0b8348643['end'], 'title' => $ba10d8a0b8348643['title'], 'description' => $ba10d8a0b8348643['description'], 'archive' => true];
if (!(!$fe93a43f53d92a4e || ($fe93a43f53d92a4e['type'] != 1) || !$E32a27f7af5bdb9d)) {
	goto label152;
}

E72f42a93714ba87();

label152:

goto label1;

label153:

echo '                                    <td><select id="stream_id" name="stream_id" class="form-control" data-toggle="select2"></select></td>' . "\n" . '                                    <td style="max-width:120px;" class="text-center"><input type="text" class="form-control text-center date" id="start_date" name="start_date" value="" data-toggle="date-picker" data-single-date-picker="true"></td>' . "\n" . '                                    <td style="max-width:40px;" class="text-center"><input type="text" class="form-control text-center" id="duration" name="duration" value="0"></td>' . "\n" . '                                    ';
goto label241;

label155:

echo '                                    <td>';
echo $fe93a43f53d92a4e['stream_display_name'];
goto label72;

label159:

goto label152;

label160:

$ba10d8a0b8348643 = json_decode(base64_decode(XUI::$rRequest['archive']), true);
$fe93a43f53d92a4e = F260B7A31F021E39($ba10d8a0b8348643['stream_id']);
goto label129;

label176:

$fe93a43f53d92a4e = f260b7a31f021e39(XUI::$rRequest['stream_id']);
$E32a27f7af5bdb9d = ['start' => strtotime(XUI::$rRequest['start_date']), 'end' => strtotime(XUI::$rRequest['start_date']) + (intval(XUI::$rRequest['duration']) * 60), 'title' => '', 'description' => ''];
if (!(!$fe93a43f53d92a4e || ($fe93a43f53d92a4e['type'] != 1) || !$E32a27f7af5bdb9d || ($E32a27f7af5bdb9d['end'] < time()))) {
	goto label224;
}

header('Location: record');

label224:

goto label159;

label225:

echo date(XUI::$rSettings['date_format'], $E32a27f7af5bdb9d['end']);
echo '<br/>';
echo date('H:i', $E32a27f7af5bdb9d['end']);
echo '</td>' . "\n" . '                                    ';

label241:

goto label276;

label242:

echo '                        <table class="table table-borderless mb-0">' . "\n" . '                            <thead class="thead-light">' . "\n" . '                                <tr>' . "\n" . '                                    <th>Channel</th>' . "\n" . '                                    <th class="text-center">Start</th>' . "\n" . '                                    <th class="text-center">';
echo $fe93a43f53d92a4e ? 'Finish' : 'Minutes';
echo '</th>' . "\n" . '                                </tr>' . "\n" . '                            </thead>' . "\n" . '                            <tbody>' . "\n" . '                                <tr>' . "\n" . '                                    ';

if ($fe93a43f53d92a4e) {
	goto label155;
}

goto label153;

label252:

if (!$fe93a43f53d92a4e) {
	goto label54;
}

echo "\t\t\t" . '<div class="col-xl-12">' . "\n" . '                ';
if (!(!$E32a27f7af5bdb9d['archive'] && ($E32a27f7af5bdb9d['start'] <= time()))) {
	goto label268;
}

echo '                <div class="alert alert-warning text-center" role="alert">' . "\n" . '                    The programme you are intending to record has already started!' . "\n" . '                </div>' . "\n" . '                ';

label268:

goto label108;

label269:

E72F42A93714BA87();

label271:

if (!$fe93a43f53d92a4e) {
	goto label414;
}

$Bf1105c589a3fe51 = NULL;
goto label383;

label276:

echo '                                </tr>' . "\n" . '                            </tbody>' . "\n" . '                        </table>' . "\n" . '                        ';

if ($fe93a43f53d92a4e) {
	goto label280;
}

echo '                        <ul class="list-inline wizard mb-0">' . "\n" . '                            <li class="list-inline-item float-right">' . "\n" . '                                <input type="submit" class="btn btn-primary" value="Continue" />' . "\n" . '                            </li>' . "\n" . '                        </ul>' . "\n" . '                        </form>' . "\n" . '                        ';

label280:

echo '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            ';
goto label252;

label282:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label299;
}

echo ' style="display: none;"';

label299:

goto label65;

label300:

echo '...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F964B9222B35AdDD() as $f155fef57262b32a) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="source_id">Recording Server</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="source_id" id="source_id" class="form-control" data-toggle="select2">' . "\n" . '                                                            ';

if ($E32a27f7af5bdb9d['archive']) {
	goto label50;
}

goto label29;

label319:

echo XUI::$rServers[$fe93a43f53d92a4e['tv_archive_server_id']]['id'];
echo '">';
echo XUI::$rServers[$fe93a43f53d92a4e['tv_archive_server_id']]['server_name'];
echo ' - ';
echo XUI::$rServers[$fe93a43f53d92a4e['tv_archive_server_id']]['server_ip'];
goto label52;

label337:

echo str_replace('"', '&quot;', $E32a27f7af5bdb9d['title']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="description">Event Description</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea rows="6" class="form-control" id="description" name="description">';
echo htmlspecialchars($E32a27f7af5bdb9d['description']);
echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_icon">';
echo $_['poster_url'];
goto label361;

label354:

echo 'Fallback ';

label355:

echo $_['bouquets'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="';
echo $_['choose'];
goto label300;

label361:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_icon" name="stream_icon" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_id">Categories</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769E3f0c739D1A6('movie') as $Dbcac322b4274e46) {
	echo '                                                            <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="bouquets">';

if (!XUI::$rRequest['import']) {
	goto label355;
}

goto label354;

label383:

$b62d6460eb33ea07->query('SELECT `server_id`, `bitrate` FROM `streams_servers` WHERE `stream_id` = ?;', $fe93a43f53d92a4e['id']);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B075a4c00323e8f8[] = $Fb9da1713bff19ce['server_id'];
	if (!((!$Bf1105c589a3fe51 && $Fb9da1713bff19ce['bitrate']) || ($Fb9da1713bff19ce['bitrate'] && ($Bf1105c589a3fe51 < $Fb9da1713bff19ce['bitrate'])))) {
		goto label412;
	}

	$Bf1105c589a3fe51 = $Fb9da1713bff19ce['bitrate'];

	label412:
}

label414:

$F6edd90960a3bd9d = 'Record';
goto label282;

label416:

echo intval($fe93a43f53d92a4e['id']);
echo '" />' . "\n" . '                            <input type="hidden" name="start" value="';
echo intval($E32a27f7af5bdb9d['start']);
echo '" />' . "\n" . '                            <input type="hidden" name="end" value="';
echo intval($E32a27f7af5bdb9d['end']);
goto label117;

label434:

include 'footer.php';

?>