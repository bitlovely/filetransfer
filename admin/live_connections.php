<?php


goto label295;

label1:

echo '" placeholder="';
echo $_['search_logs'];
echo '...">' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="live_server" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['server'])) {
	goto label365;
}

goto label364;

label10:

echo $_['live_connections'];
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label17;
}

echo 'collapse';

label17:

goto label149;

label18:

echo '</option>' . "\r\n" . '                                    ';

foreach (XUI::$rServers as $Ec379295dc7029e6) {
	goto label33;

	label24:

	echo ' selected';

	label25:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n" . '                                    ';
	goto label31;

	label31:

	goto label56;

	label33:

	if (!$Ec379295dc7029e6['enabled']) {
		goto label31;
	}

	echo '                                    <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label25;
	}

	goto label24;

	label56:
}

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-4">' . "\r\n" . '                                <select id="live_stream" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($bf5cfcad649f465f)) {
	goto label64;
}

goto label379;

label64:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="live_line" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($b124d69926c0d8ac)) {
	goto label120;
}

echo '                                    <option value="';
echo intval($b124d69926c0d8ac['id']);
goto label116;

label76:

echo $_['show'];
echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="live_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                    <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label89;
	}

	echo ' selected';

	label89:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n" . '                                    ';
}

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n\t\t\t\t\t\t\t";
goto label268;

label98:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n\t\t\t\t\t\t\t";
goto label268;

label100:

echo '                            <div class="col-md-3">' . "\r\n" . '                                <select id="live_server" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';
goto label140;

label102:

echo '>MAG Devices</option>' . "\r\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label114;
}

echo ' selected';

label114:

echo '>Enigma2 Devices</option>' . "\r\n" . '                                    <option value="4"';
goto label205;

label116:

echo '" selected="selected">';
echo $b124d69926c0d8ac['username'];
echo '</option>' . "\r\n" . '                                    ';

label120:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="live_show_entries">';
goto label76;

label122:

$F6edd90960a3bd9d = 'Live Connections';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label178;
}

goto label177;

label140:

if (isset(XUI::$rRequest['server'])) {
	goto label145;
}

echo ' selected';

label145:

echo '>';
echo $_['all_servers'];
goto label18;

label149:

echo ' form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t";

if (XUI::$rSettings['redis_handler']) {
	goto label100;
}

echo "\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n" . '                                <input type="text" class="form-control" id="live_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label1;
}

echo htmlspecialchars(XUI::$rRequest['search']);
goto label1;

label167:

echo intval($bf5cfcad649f465f['id']);
echo '" selected="selected">';
echo $bf5cfcad649f465f['stream_display_name'];
echo '</option>' . "\r\n" . '                                    ';

label176:

goto label228;

label177:

echo ' style="display: none;"';

label178:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label10;

label182:

if (!isset(XUI::$rRequest['user_id'])) {
	goto label193;
}

$b124d69926c0d8ac = b5aD1d95a92cE732(XUI::$rRequest['user_id']);

label193:

if (!isset(XUI::$rRequest['stream_id'])) {
	goto label122;
}

$bf5cfcad649f465f = F260B7a31F021e39(XUI::$rRequest['stream_id']);
goto label122;

label205:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label216;
}

echo ' selected';

label216:

echo '>Trial Lines</option>' . "\r\n" . '                                    <option value="5"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label242;
}

goto label241;

label228:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="live_line" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($b124d69926c0d8ac)) {
	goto label373;
}

echo '                                    <option value="';
echo intval($b124d69926c0d8ac['id']);
echo '" selected="selected">';
goto label370;

label241:

echo ' selected';

label242:

echo '>Restreamers</option>' . "\r\n" . '                                    <option value="6"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 6))) {
	goto label273;
}

echo ' selected';
goto label273;

label255:

echo '>User Lines</option>' . "\r\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label267;
}

echo ' selected';

label267:

goto label102;

label268:

echo '                        </div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n" . '                                    <th class="text-center">ID</th>' . "\r\n" . '                                    <th class="text-center">Quality</th>' . "\r\n" . '                                    <th>Line</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Stream</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Server</th>' . "\r\n" . '                                    <th>Player</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>ISP</th>' . "\r\n" . '                                    <th class="text-center">IP</th>' . "\r\n" . '                                    <th class="text-center">Duration</th>' . "\r\n" . '                                    <th class="text-center">Output</th>' . "\r\n" . '                                    <th class="text-center">Restreamer</th>' . "\r\n" . '                                    <th class="text-center">';
echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label390;

label273:

echo '>Ministra Lines</option>' . "\r\n" . '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="live_show_entries">';
echo $_['show'];
echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="live_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                    <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label287;
	}

	echo ' selected';

	label287:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n" . '                                    ';
}

goto label98;

label295:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label303;
}

e72F42A93714Ba87();

label303:

goto label182;

label304:

foreach (XUI::$rServers as $Ec379295dc7029e6) {
	goto label318;

	label309:

	goto label341;

	label311:

	echo ' selected';

	label312:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n" . '                                    ';
	goto label309;

	label318:

	if (!$Ec379295dc7029e6['enabled']) {
		goto label309;
	}

	echo '                                    <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label312;
	}

	goto label311;

	label341:
}

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="live_stream" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($bf5cfcad649f465f)) {
	goto label176;
}

echo '                                    <option value="';
goto label167;

label350:

echo ' selected';

label351:

echo '>No Filter</option>' . "\r\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label255;
}

echo ' selected';
goto label255;

label364:

echo ' selected';

label365:

echo '>';
echo $_['all_servers'];
echo '</option>' . "\r\n" . '                                    ';
goto label304;

label370:

echo $b124d69926c0d8ac['username'];
echo '</option>' . "\r\n" . '                                    ';

label373:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="live_filter" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label351;
}

goto label350;

label379:

echo '                                    <option value="';
echo intval($bf5cfcad649f465f['id']);
echo '" selected="selected">';
echo $bf5cfcad649f465f['stream_display_name'];
echo '</option>' . "\r\n" . '                                    ';
goto label64;

label390:

include 'footer.php';

?>