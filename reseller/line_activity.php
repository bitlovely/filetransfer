<?php


goto label157;

label1:

echo '" placeholder="';
echo $_['search_logs'];
echo '...">' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="act_stream" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($bf5cfcad649f465f)) {
	goto label101;
}

goto label140;

label10:

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label11:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <input type="text" class="form-control text-center date" id="act_range" name="range" value="';

if (!isset(XUI::$rRequest['range'])) {
	goto label166;
}

echo htmlspecialchars(XUI::$rRequest['range']);
goto label166;

label24:

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label197;
}

echo '                                    <optgroup label="Direct Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label45;

	label38:

	echo ' selected';

	label39:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n" . '                                        ';
	goto label64;

	label45:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                        <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $f7107e3a92443147))) {
		goto label39;
	}

	goto label38;

	label64:

	goto label66;

	label66:
}

echo '                                    </optgroup>' . "\r\n" . '                                    ';
goto label197;

label70:

include 'header.php';
echo '<div class="wrapper">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Activity Logs</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label114;
}

goto label113;

label78:

if (!isset(XUI::$rRequest['line'])) {
	goto label127;
}

if (E589a4bf54A2dAd1('line', XUI::$rRequest['line'])) {
	goto label92;
}

exit();

label92:

$d701ad5f26544e8f = B5aD1d95A92CE732(XUI::$rRequest['line']);
goto label127;

label99:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Line</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Stream</th>' . "\r\n" . '                                    <th>Player</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>ISP</th>' . "\r\n" . '                                    <th class="text-center">IP</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Start</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Stop</th>' . "\r\n" . '                                    <th class="text-center">Duration</th>' . "\r\n" . '                                    <th class="text-center">Output</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label269;

label101:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="act_line" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($d701ad5f26544e8f)) {
	goto label155;
}

echo '                                    <option value="';
echo intval($d701ad5f26544e8f['id']);
goto label151;

label113:

echo 'collapse';

label114:

echo ' form-group row mb-4">' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <input type="text" class="form-control" id="act_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label1;
}

echo htmlspecialchars(XUI::$rRequest['search']);
goto label1;

label127:

if (!isset(XUI::$rRequest['stream'])) {
	goto label138;
}

$bf5cfcad649f465f = F260B7A31f021e39(XUI::$rRequest['stream']);

label138:

$F6edd90960a3bd9d = 'Activity Logs';
goto label70;

label140:

echo '                                    <option value="';
echo intval($bf5cfcad649f465f['id']);
echo '" selected="selected">';
echo $bf5cfcad649f465f['stream_display_name'];
echo '</option>' . "\r\n" . '                                    ';
goto label101;

label151:

echo '" selected="selected">';
echo $d701ad5f26544e8f['username'];
echo '</option>' . "\r\n" . '                                    ';

label155:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="act_user" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <optgroup label="Global">' . "\r\n" . '                                        <option value=""';
goto label188;

label157:

include 'session.php';
include 'functions.php';

if (BaF6E9ef7775b5a9()) {
	goto label165;
}

e72F42a93714bA87();

label165:

goto label78;

label166:

echo '" data-toggle="date-picker" data-single-date-picker="true" placeholder="All Dates">' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="act_show_entries">';
echo $_['show'];
echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="act_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                    <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label180;
	}

	echo ' selected';

	label180:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n" . '                                    ';
}

goto label99;

label188:

if (isset(XUI::$rRequest['user'])) {
	goto label193;
}

echo ' selected';

label193:

echo '>All Users</option>' . "\r\n" . '                                        <option value="';
echo $E59d0debc75e7be8['id'];
goto label254;

label197:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label11;
}

echo '                                    <optgroup label="Indirect Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label232;

	label215:
	if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $f7107e3a92443147))) {
		goto label227;
	}

	echo ' selected';

	label227:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label248;

	label232:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label249;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                            <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label215;

	label248:

	echo '</option>' . "\r\n" . '                                            ';

	label249:

	goto label251;

	label251:
}

goto label10;

label254:

echo '"';
if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $E59d0debc75e7be8['id']))) {
	goto label267;
}

echo ' selected';

label267:

echo '>My Lines</option>' . "\r\n" . '                                    </optgroup>' . "\r\n" . '                                    ';
goto label24;

label269:

include 'footer.php';

?>