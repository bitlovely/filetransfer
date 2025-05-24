<?php


goto label83;

label1:

echo '" selected="selected">';
echo $b124d69926c0d8ac['username'];
echo '</option>' . "\r\n" . '                                    ';

label5:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <input type="text" class="form-control text-center date" id="act_range" name="range" value="';
goto label169;

label7:

if (!$Ebb0b63f7c597ba4) {
	goto label11;
}

echo 'collapse';

label11:

echo ' form-group row mb-4">' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <input type="text" class="form-control" id="act_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label136;
}

goto label130;

label18:

echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="act_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                    <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label29;
	}

	echo ' selected';

	label29:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n" . '                                    ';
}

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Line</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Stream</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Server</th>' . "\r\n" . '                                    <th>Player</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>ISP</th>' . "\r\n" . '                                    <th class="text-center">IP</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Start</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Stop</th>' . "\r\n" . '                                    <th class="text-center">Duration</th>' . "\r\n" . '                                    <th class="text-center">Output</th>' . "\r\n" . '                                    <th class="text-center">Restreamer</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label184;

label38:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="act_line" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($b124d69926c0d8ac)) {
	goto label5;
}

echo '                                    <option value="';
echo intval($b124d69926c0d8ac['id']);
goto label1;

label50:

echo '</option>' . "\r\n" . '                                    ';

foreach (XUI::$rServers as $Ec379295dc7029e6) {
	echo '                                    <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label71;
	}

	echo ' selected';

	label71:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n" . '                                    ';
}

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="act_stream" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($bf5cfcad649f465f)) {
	goto label38;
}

goto label119;

label83:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label91;
}

e72F42a93714BA87();

label91:

goto label146;

label92:

$F6edd90960a3bd9d = 'Activity Logs';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label142;
}

goto label141;

label110:

if (isset(XUI::$rRequest['server'])) {
	goto label115;
}

echo ' selected';

label115:

echo '>';
echo $_['all_servers'];
goto label50;

label119:

echo '                                    <option value="';
echo intval($bf5cfcad649f465f['id']);
echo '" selected="selected">';
echo $bf5cfcad649f465f['stream_display_name'];
echo '</option>' . "\r\n" . '                                    ';
goto label38;

label130:

echo htmlspecialchars(XUI::$rRequest['search']);

label136:

echo '" placeholder="';
echo $_['search_logs'];
echo '...">' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="act_server" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';
goto label110;

label141:

echo ' style="display: none;"';

label142:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Activity Logs</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <div id="collapse_filters" class="';
goto label7;

label146:

if (!isset(XUI::$rRequest['user_id'])) {
	goto label157;
}

$b124d69926c0d8ac = b5AD1d95A92ce732(XUI::$rRequest['user_id']);

label157:

if (!isset(XUI::$rRequest['stream_id'])) {
	goto label92;
}

$bf5cfcad649f465f = F260B7a31F021E39(XUI::$rRequest['stream_id']);
goto label92;

label169:

if (!isset(XUI::$rRequest['range'])) {
	goto label180;
}

echo htmlspecialchars(XUI::$rRequest['range']);

label180:

echo '" data-toggle="date-picker" data-single-date-picker="true" placeholder="All Dates">' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="act_show_entries">';
echo $_['show'];
goto label18;

label184:

include 'footer.php';

?>