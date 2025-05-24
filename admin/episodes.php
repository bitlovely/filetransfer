<?php


goto label150;

label1:

echo '</option>' . "\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label13;
}

echo ' selected';

label13:

echo '>';
goto label15;

label15:

echo $_['encoding'];
echo '</option>' . "\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label29;
}

echo ' selected';

label29:

goto label261;

label30:

echo '" placeholder="';
echo $_['search_episodes'];
echo '...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="episodes_server" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['server'])) {
	goto label286;
}

echo ' selected';
goto label286;

label40:

echo '>Audio</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['audio']) && (XUI::$rRequest['audio'] == '-1'))) {
	goto label52;
}

echo ' selected';

label52:

goto label53;

label53:

echo '>None</option>' . "\n" . '                                    ';

foreach ($B247e2c3d7cb24f2 as $a42d28fc2a08c3b1) {
	echo '                                    <option value="';
	echo $a42d28fc2a08c3b1;
	echo '"';
	if (!(isset(XUI::$rRequest['audio']) && (XUI::$rRequest['audio'] == $a42d28fc2a08c3b1))) {
		goto label71;
	}

	echo ' selected';

	label71:

	echo '>';
	echo $a42d28fc2a08c3b1;
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="episodes_video" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['video'])) {
	goto label383;
}

goto label382;

label82:

echo "\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['servers'];
echo '</th>' . "\n" . '                                    ';

label86:

echo '                                    <th class="text-center">';
goto label252;

label88:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$e2631b4e50927afe[] = $Fb9da1713bff19ce['video_codec'];
}

$F6edd90960a3bd9d = 'Episodes';
include 'header.php';
echo '<div class="wrapper"';
goto label450;

label101:

$B247e2c3d7cb24f2 = $e2631b4e50927afe = [];
$b62d6460eb33ea07->query('SELECT DISTINCT(`audio_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `audio_codec` IS NOT NULL AND `type` = 5 ORDER BY `audio_codec` ASC;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B247e2c3d7cb24f2[] = $Fb9da1713bff19ce['audio_codec'];
}

$b62d6460eb33ea07->query('SELECT DISTINCT(`video_codec`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `video_codec` IS NOT NULL AND `type` = 5 ORDER BY `video_codec` ASC;');
goto label88;

label119:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="episodes_series">Series &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearSeries();"><i class="mdi mdi-close"></i></button></label>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="episodes_series" class="form-control" data-toggle="select2">' . "\n" . '                                    ';
if (!(isset(XUI::$rRequest['series']) && ($d02ef9ae10a41939 = A2297542D8bd35F6(intval(XUI::$rRequest['series']))))) {
	goto label280;
}

echo '                                    <option value="';
echo intval($d02ef9ae10a41939['id']);
echo '" selected="selected">';
goto label277;

label144:

echo '                                    <th>';
echo $_['server'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t";
goto label86;

label149:

goto label82;

label150:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label158;
}

e72F42a93714BA87();

label158:

goto label101;

label159:

echo ' selected';

label160:

echo '>';
echo $_['no_filter'];
echo '</option>' . "\n" . '                                    <option value="1"';
goto label468;

label165:

echo '>';
echo $_['ready'];
echo '</option>' . "\n" . '                                    <option value="5"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label354;
}

goto label353;

label180:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="episodes_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label203;

	label185:

	goto label197;

	label187:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label195;
	}

	echo ' selected';

	label195:

	goto label197;

	label197:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label218;

	label203:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label187;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label216;
	}

	echo ' selected';

	label216:

	goto label185;

	label218:

	echo '</option>' . "\n" . '                                    ';
	goto label221;

	label221:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        <table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n" . '                            <thead>' . "\n" . '                                <tr>' . "\n" . '                                    <th class="text-center">';
goto label241;

label225:

echo ' selected';

label226:

echo '>Transcoding</option>' . "\n" . '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="episodes_audio" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['audio'])) {
	goto label40;
}

echo ' selected';
goto label40;

label233:

echo '</th>' . "\n" . '                                    <th class="text-center">';
echo $_['player'];
echo '</th>' . "\n" . '                                    <th class="text-center">';
echo $_['stream_info'];
echo '</th>' . "\n" . '                                </tr>' . "\n" . '                            </thead>' . "\n" . '                            <tbody></tbody>' . "\n" . '                        </table>' . "\n" . '                    </div> ' . "\n" . '                </div> ' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n";
goto label483;

label241:

echo $_['id'];
echo '</th>' . "\n" . '                                    <th class="text-center">Image</th>' . "\n" . '                                    <th>';
echo $_['name'];
echo '</th>' . "\n" . '                                    ';

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label149;
}

goto label144;

label252:

echo $_['clients'];
echo '</th>' . "\n" . '                                    <th class="text-center">';
echo $_['status'];
echo '</th>' . "\n" . '                                    <th class="text-center">';
echo $_['actions'];
goto label233;

label261:

echo '>';
echo $_['down'];
echo '</option>' . "\n" . '                                    <option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label165;
}

echo ' selected';
goto label165;

label277:

echo $d02ef9ae10a41939['title'];
echo '</option>' . "\n" . '                                    ';

label280:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="episodes_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label160;
}

goto label159;

label286:

echo '>';
echo $_['all_servers'];
echo '</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == -1))) {
	goto label302;
}

goto label301;

label301:

echo ' selected';

label302:

echo '>No Servers</option>' . "\n" . '                                    ';

foreach (C6A90bFcd425eb63() as $Ec379295dc7029e6) {
	echo '                                    <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label324;
	}

	echo ' selected';

	label324:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                    ';
}

goto label119;

label331:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <input type="text" class="form-control" id="episodes_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label343;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label343:

goto label30;

label344:

echo "\t\t\t\t\t" . '</div>' . "\n" . '                    <h4 class="page-title">';
echo $_['episodes'];
echo '</h4>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>     ' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-12">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label331;
}

echo 'collapse';
goto label331;

label353:

echo ' selected';

label354:

echo '>';
echo $_['direct'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t" . '<option value="6"';
goto label359;

label359:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 6))) {
	goto label370;
}

echo ' selected';

label370:

echo '>Duplicate</option>' . "\n\t\t\t\t\t\t\t\t\t" . '<option value="7"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 7))) {
	goto label226;
}

goto label225;

label382:

echo ' selected';

label383:

echo '>Video</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['video']) && (XUI::$rRequest['video'] == '-1'))) {
	goto label425;
}

echo ' selected';
goto label425;

label396:

if (isset(XUI::$rRequest['resolution'])) {
	goto label401;
}

echo ' selected';

label401:

echo '>Quality</option>' . "\n" . '                                    ';

foreach ([240, 360, 480, 576, 720, 1080, 1440, 2160] as $C98609e3115bee61) {
	echo '                                    <option value="';
	echo $C98609e3115bee61;
	echo '"';
	if (!(isset(XUI::$rRequest['resolution']) && (XUI::$rRequest['resolution'] == $C98609e3115bee61))) {
		goto label419;
	}

	echo ' selected';

	label419:

	echo '>';
	echo $C98609e3115bee61;
	echo 'p</option>' . "\n" . '                                    ';
}

goto label180;

label425:

echo '>None</option>' . "\n" . '                                    ';

foreach ($e2631b4e50927afe as $a42d28fc2a08c3b1) {
	echo '                                    <option value="';
	echo $a42d28fc2a08c3b1;
	echo '"';
	if (!(isset(XUI::$rRequest['video']) && (XUI::$rRequest['video'] == $a42d28fc2a08c3b1))) {
		goto label443;
	}

	echo ' selected';

	label443:

	echo '>';
	echo $a42d28fc2a08c3b1;
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="episodes_resolution" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';
goto label396;

label450:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label465;
}

echo ' style="display: none;"';

label465:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-12">' . "\n" . '                <div class="page-title-box">' . "\n" . '                    <div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
goto label344;

label468:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label479;
}

echo ' selected';

label479:

echo '>';
echo $_['encoded'];
goto label1;

label483:

include 'footer.php';

?>