<?php


goto label328;

label1:

echo '>';
echo $_['ready'];
echo '</option>' . "\n" . '                                    <option value="5"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label463;
}

goto label462;

label16:

$b62d6460eb33ea07->query('SELECT DISTINCT(`video_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `video_codec` IS NOT NULL AND `type` = 2 ORDER BY `video_codec` ASC;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$e2631b4e50927afe[] = $Fb9da1713bff19ce['video_codec'];
}

$F6edd90960a3bd9d = 'Movies';
include 'header.php';
goto label207;

label31:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t" . '<option value="7"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 7))) {
	goto label43;
}

echo ' selected';

label43:

echo '>Duplicate</option>' . "\n\t\t\t\t\t\t\t\t\t" . '<option value="8"';
goto label225;

label45:

echo '" placeholder="';
echo $_['search_movies'];
echo '...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="movies_server" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['server'])) {
	goto label313;
}

echo ' selected';
goto label313;

label55:

echo ' selected';

label56:

echo '>';
echo $_['no_filter'];
echo '</option>' . "\n" . '                                    <option value="1"';
goto label426;

label61:

echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['player'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['stream_info'];
goto label242;

label70:

echo '>';
echo $_['down'];
echo '</option>' . "\n" . '                                    <option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label1;
}

echo ' selected';
goto label1;

label86:

echo "\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['clients'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['status'];
echo '</th>' . "\n" . '                                    <th class="text-center">TMDb</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label61;

label94:

foreach ([240, 360, 480, 576, 720, 1080, 1440, 2160] as $C98609e3115bee61) {
	echo '                                    <option value="';
	echo $C98609e3115bee61;
	echo '"';
	if (!(isset(XUI::$rRequest['resolution']) && (XUI::$rRequest['resolution'] == $C98609e3115bee61))) {
		goto label111;
	}

	echo ' selected';

	label111:

	echo '>';
	echo $C98609e3115bee61;
	echo 'p</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="movies_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label121;

	label121:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label144;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label134;
	}

	echo ' selected';

	label134:

	goto label142;

	label136:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label154;

	label142:

	goto label136;

	label144:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label152;
	}

	echo ' selected';

	label152:

	goto label136;

	label154:

	echo '</option>' . "\n" . '                                    ';
	goto label157;

	label157:
}

goto label255;

label160:

echo $_['encoding'];
echo '</option>' . "\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label174;
}

echo ' selected';

label174:

goto label70;

label175:

echo '>No Categories</option>' . "\n" . '                                    ';

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label195;
	}

	echo ' selected';

	label195:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="movies_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label56;
}

goto label55;

label207:

echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label223;
}

echo ' style="display: none;"';

label223:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
goto label441;

label225:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 8))) {
	goto label236;
}

echo ' selected';

label236:

echo '>Transcoding</option>' . "\n" . '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="movies_audio" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['audio'])) {
	goto label285;
}

goto label284;

label242:

echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label546;

label244:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS_MULTI))) {
	goto label253;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Movies are being imported in the background...' . "\n\t\t\t\t" . '</div>' . "\n" . '                ';

label253:

goto label264;

label254:

goto label263;

label255:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n" . '                                    <th class="text-center">Image</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['name'];
echo '</th>' . "\n" . '                                    ';
goto label486;

label263:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Movie has been added / modified.' . "\n\t\t\t\t" . '</div>' . "\n" . '                ';

label264:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label473;
}

echo 'collapse';
goto label473;

label270:

echo '</option>' . "\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label282;
}

echo ' selected';

label282:

echo '>';
goto label160;

label284:

echo ' selected';

label285:

echo '>Audio</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['audio']) && (XUI::$rRequest['audio'] == '-1'))) {
	goto label504;
}

echo ' selected';
goto label504;

label298:

echo $_['all_categories'];
echo '</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == -1))) {
	goto label312;
}

echo ' selected';

label312:

goto label175;

label313:

echo '>';
echo $_['all_servers'];
echo '</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == -1))) {
	goto label372;
}

goto label371;

label328:

include 'session.php';
include 'functions.php';

if (E6D500e19634d513()) {
	goto label336;
}

e72f42a93714BA87();

label336:

goto label352;

label337:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 6))) {
	goto label348;
}

echo ' selected';

label348:

echo '>';
echo $_['no_tmdb_match'];
goto label31;

label352:

$F771d40e8cf51e59 = f769e3f0C739D1A6('movie');
$B247e2c3d7cb24f2 = $e2631b4e50927afe = [];
$b62d6460eb33ea07->query('SELECT DISTINCT(`audio_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `audio_codec` IS NOT NULL AND `type` = 2 ORDER BY `audio_codec` ASC;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B247e2c3d7cb24f2[] = $Fb9da1713bff19ce['audio_codec'];
}

goto label16;

label371:

echo ' selected';

label372:

echo '>No Servers</option>' . "\n" . '                                    ';

foreach (C6a90BFcd425Eb63() as $Ec379295dc7029e6) {
	echo '                                    <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label394;
	}

	echo ' selected';

	label394:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                    ';
}

goto label496;

label401:

echo ' selected';

label402:

echo '>None</option>' . "\n" . '                                    ';

foreach ($e2631b4e50927afe as $a42d28fc2a08c3b1) {
	echo '                                    <option value="';
	echo $a42d28fc2a08c3b1;
	echo '"';
	if (!(isset(XUI::$rRequest['video']) && (XUI::$rRequest['video'] == $a42d28fc2a08c3b1))) {
		goto label420;
	}

	echo ' selected';

	label420:

	echo '>';
	echo $a42d28fc2a08c3b1;
	echo '</option>' . "\n" . '                                    ';
}

goto label454;

label426:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label437;
}

echo ' selected';

label437:

echo '>';
echo $_['encoded'];
goto label270;

label441:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['movies'];
echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label254;
}

goto label244;

label454:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="movies_resolution" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['resolution'])) {
	goto label460;
}

echo ' selected';

label460:

echo '>Quality</option>' . "\n" . '                                    ';
goto label94;

label462:

echo ' selected';

label463:

echo '>';
echo $_['direct'];
echo '</option>' . "\n" . '                                    <option value="6"';
goto label337;

label468:

echo "\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['servers'];
echo '</th>' . "\n" . '                                    ';

label472:

goto label86;

label473:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <input type="text" class="form-control" id="movies_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label485;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label485:

goto label45;

label486:

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label468;
}

echo '                                    <th>';
echo $_['server'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t";
goto label472;
goto label468;

label496:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="movies_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['category'])) {
	goto label502;
}

echo ' selected';

label502:

echo '>';
goto label298;

label504:

echo '>None</option>' . "\n" . '                                    ';

foreach ($B247e2c3d7cb24f2 as $a42d28fc2a08c3b1) {
	echo '                                    <option value="';
	echo $a42d28fc2a08c3b1;
	echo '"';
	if (!(isset(XUI::$rRequest['audio']) && (XUI::$rRequest['audio'] == $a42d28fc2a08c3b1))) {
		goto label522;
	}

	echo ' selected';

	label522:

	echo '>';
	echo $a42d28fc2a08c3b1;
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="movies_video" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';
goto label529;

label529:

if (isset(XUI::$rRequest['video'])) {
	goto label534;
}

echo ' selected';

label534:

echo '>Video</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['video']) && (XUI::$rRequest['video'] == '-1'))) {
	goto label402;
}

goto label401;

label546:

include 'footer.php';

?>