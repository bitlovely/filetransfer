<?php


goto label524;

label1:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$e2631b4e50927afe[] = $Fb9da1713bff19ce['video_codec'];
}

$F6edd90960a3bd9d = 'Streams';
include 'header.php';
echo '<div class="wrapper"';
goto label144;

label14:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label25;
}

echo ' selected';

label25:

echo '>Online</option>' . "\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label361;
}

goto label360;

label37:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label42;
}

echo 'collapse';

label42:

goto label116;

label43:

$B247e2c3d7cb24f2 = $e2631b4e50927afe = [];
$b62d6460eb33ea07->query('SELECT DISTINCT(`audio_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `audio_codec` IS NOT NULL AND `type` = 1 ORDER BY `audio_codec` ASC;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B247e2c3d7cb24f2[] = $Fb9da1713bff19ce['audio_codec'];
}

$b62d6460eb33ea07->query('SELECT DISTINCT(`video_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `video_codec` IS NOT NULL AND `type` = 1 ORDER BY `video_codec` ASC;');
goto label1;

label61:

echo '>Transcoding</option>' . "\n" . '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="stream_audio" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['audio'])) {
	goto label67;
}

echo ' selected';

label67:

goto label533;

label68:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 6))) {
	goto label79;
}

echo ' selected';

label79:

echo '>Direct</option>' . "\n" . '                                    <option value="7"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 7))) {
	goto label488;
}

goto label487;

label91:

echo ' selected';

label92:

echo '>Quality</option>' . "\n" . '                                    ';

foreach ([240, 360, 480, 576, 720, 1080, 1440, 2160] as $C98609e3115bee61) {
	echo '                                    <option value="';
	echo $C98609e3115bee61;
	echo '"';
	if (!(isset(XUI::$rRequest['resolution']) && (XUI::$rRequest['resolution'] == $C98609e3115bee61))) {
		goto label110;
	}

	echo ' selected';

	label110:

	echo '>';
	echo $C98609e3115bee61;
	echo 'p</option>' . "\n" . '                                    ';
}

goto label311;

label116:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <input type="text" class="form-control" id="stream_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label128;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label128:

echo '" placeholder="Search Streams...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="stream_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';
goto label515;

label130:

echo ' selected';

label131:

echo '>Title Sync</option>' . "\n\t\t\t\t\t\t\t\t\t" . '<option value="13"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 13))) {
	goto label61;
}

echo ' selected';
goto label61;

label144:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label159;
}

echo ' style="display: none;"';

label159:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
goto label501;

label162:

echo '>Has EPG</option>' . "\n" . '                                    <option value="10"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 10))) {
	goto label174;
}

echo ' selected';

label174:

echo '>No EPG</option>' . "\n" . '                                    <option value="11"';
goto label403;

label176:

echo '</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == -1))) {
	goto label188;
}

echo ' selected';

label188:

echo '>No Servers</option>' . "\n" . '                                    ';
goto label251;

label190:

echo ' selected';

label191:

echo '>No Categories</option>' . "\n" . '                                    ';

foreach (F769e3f0c739d1a6('live') as $Dbcac322b4274e46) {
	echo '                                    <option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label217;
	}

	echo ' selected';

	label217:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
}

goto label301;

label224:

echo '>Looping</option>' . "\n" . '                                    <option value="9"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 9))) {
	goto label236;
}

echo ' selected';

label236:

goto label162;

label237:

echo '>Starting</option>' . "\n" . '                                    <option value="5"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label249;
}

echo ' selected';

label249:

echo '>On Demand</option>' . "\n" . '                                    <option value="6"';
goto label68;

label251:

foreach (C6a90Bfcd425eb63() as $Ec379295dc7029e6) {
	echo '                                    <option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label275;
	}

	echo ' selected';

	label275:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="stream_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['category'])) {
	goto label443;
}

echo ' selected';
goto label443;

label288:

echo '>Video</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['video']) && (XUI::$rRequest['video'] == '-1'))) {
	goto label300;
}

echo ' selected';

label300:

goto label374;

label301:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="stream_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label307;
}

echo ' selected';

label307:

echo '>No Filter</option>' . "\n" . '                                    <option value="1"';
goto label14;

label309:

echo "\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Clients</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Uptime</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Player</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">EPG</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Stream Info</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label547;

label311:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="stream_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label322;

	label316:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label337;

	label322:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label342;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label335;
	}

	echo ' selected';

	label335:

	goto label340;

	label337:

	echo '</option>' . "\n" . '                                    ';
	goto label352;

	label340:

	goto label316;

	label342:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label350;
	}

	echo ' selected';

	label350:

	goto label316;

	label352:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-borderless table-striped dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n" . '                                    ';

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label441;
}

goto label439;

label360:

echo ' selected';

label361:

echo '>Down</option>' . "\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label426;
}

echo ' selected';
goto label426;

label374:

echo '>None</option>' . "\n" . '                                    ';

foreach ($e2631b4e50927afe as $a42d28fc2a08c3b1) {
	echo '                                    <option value="';
	echo $a42d28fc2a08c3b1;
	echo '"';
	if (!(isset(XUI::$rRequest['video']) && (XUI::$rRequest['video'] == $a42d28fc2a08c3b1))) {
		goto label392;
	}

	echo ' selected';

	label392:

	echo '>';
	echo $a42d28fc2a08c3b1;
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="stream_resolution" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['resolution'])) {
	goto label92;
}

goto label91;

label403:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 11))) {
	goto label414;
}

echo ' selected';

label414:

echo '>Adaptive Link</option>' . "\n\t\t\t\t\t\t\t\t\t" . '<option value="12"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 12))) {
	goto label131;
}

goto label130;

label426:

echo '>Stopped</option>' . "\n" . '                                    <option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label438;
}

echo ' selected';

label438:

goto label237;

label439:

echo '                                    <th>Source</th>' . "\n\t\t\t\t\t\t\t\t\t";
goto label442;

label441:

echo "\t\t\t\t\t\t\t\t\t" . '<th>Servers</th>' . "\n" . '                                    ';

label442:

goto label309;

label443:

echo '>';
echo $_['all_categories'];
echo '</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == -1))) {
	goto label191;
}

goto label190;

label458:

foreach ($B247e2c3d7cb24f2 as $a42d28fc2a08c3b1) {
	echo '                                    <option value="';
	echo $a42d28fc2a08c3b1;
	echo '"';
	if (!(isset(XUI::$rRequest['audio']) && (XUI::$rRequest['audio'] == $a42d28fc2a08c3b1))) {
		goto label475;
	}

	echo ' selected';

	label475:

	echo '>';
	echo $a42d28fc2a08c3b1;
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="stream_video" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['video'])) {
	goto label288;
}

echo ' selected';
goto label288;

label487:

echo ' selected';

label488:

echo '>Timeshift</option>' . "\n" . '                                    <option value="8"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 8))) {
	goto label224;
}

echo ' selected';
goto label224;

label501:

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Streams</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label37;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    ';
echo $_['stream_success'];
echo '                </div>' . "\n" . '                ';
goto label37;

label515:

if (isset(XUI::$rRequest['server'])) {
	goto label520;
}

echo ' selected';

label520:

echo '>';
echo $_['all_servers'];
goto label176;

label524:

include 'session.php';
include 'functions.php';

if (E6D500e19634D513()) {
	goto label532;
}

E72F42A93714BA87();

label532:

goto label43;

label533:

echo '>Audio</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['audio']) && (XUI::$rRequest['audio'] == '-1'))) {
	goto label545;
}

echo ' selected';

label545:

echo '>None</option>' . "\n" . '                                    ';
goto label458;

label547:

include 'footer.php';

?>