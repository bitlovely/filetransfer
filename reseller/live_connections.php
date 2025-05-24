<?php


goto label99;

label1:

echo '                                    <optgroup label="Direct Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label7;

	label7:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                        <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $f7107e3a92443147))) {
		goto label29;
	}

	goto label28;

	label26:

	goto label35;

	label28:

	echo ' selected';

	label29:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n" . '                                        ';
	goto label26;

	label35:
}

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label38:

goto label345;

label39:

echo $d701ad5f26544e8f['username'];
echo '</option>' . "\r\n" . '                                    ';

label42:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="live_user" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <optgroup label="Global">' . "\r\n" . '                                        <option value=""';

if (isset(XUI::$rRequest['user'])) {
	goto label65;
}

goto label64;

label48:

echo $E59d0debc75e7be8['id'];
echo '"';
if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $E59d0debc75e7be8['id']))) {
	goto label63;
}

echo ' selected';

label63:

goto label156;

label64:

echo ' selected';

label65:

echo '>All Users</option>' . "\r\n" . '                                        <option value="';
echo $E59d0debc75e7be8['id'];
echo '"';
goto label292;

label70:

if (!isset(XUI::$rRequest['line'])) {
	goto label143;
}

if (E589a4BF54A2DAd1('line', XUI::$rRequest['line'])) {
	goto label84;
}

exit();

label84:

$d701ad5f26544e8f = B5aD1D95a92Ce732(XUI::$rRequest['line']);
goto label143;

label91:

echo '</option>' . "\r\n" . '                                    ';

label92:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="live_line" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($d701ad5f26544e8f)) {
	goto label228;
}

echo '                                    <option value="';
goto label219;

label99:

include 'session.php';
include 'functions.php';

if (bAf6E9eF7775b5A9()) {
	goto label107;
}

E72f42A93714Ba87();

label107:

goto label70;

label108:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="live_line" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($d701ad5f26544e8f)) {
	goto label42;
}

echo '                                    <option value="';
echo intval($d701ad5f26544e8f['id']);
echo '" selected="selected">';
goto label39;

label121:

echo '                            <label class="col-md-1 col-form-label text-center" for="live_show_entries">';
echo $_['show'];
echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="live_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                    <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label135;
	}

	echo ' selected';

	label135:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n" . '                                    ';
}

goto label229;

label143:

if (!isset(XUI::$rRequest['stream'])) {
	goto label154;
}

$bf5cfcad649f465f = f260b7A31f021e39(XUI::$rRequest['stream']);

label154:

$F6edd90960a3bd9d = 'Live Connections';
goto label212;

label156:

echo '>My Lines</option>' . "\r\n" . '                                    </optgroup>' . "\r\n" . '                                    ';

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label235;
}

echo '                                    <optgroup label="Direct Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label171;

	label171:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                        <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $f7107e3a92443147))) {
		goto label191;
	}

	goto label190;

	label190:

	echo ' selected';

	label191:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n" . '                                        ';
	goto label197;

	label197:

	goto label199;

	label199:
}

goto label234;

label202:

echo intval($bf5cfcad649f465f['id']);
echo '" selected="selected">';
echo $bf5cfcad649f465f['stream_display_name'];
echo '</option>' . "\r\n" . '                                    ';

label211:

goto label108;

label212:

include 'header.php';
echo '<div class="wrapper">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['live_connections'];
goto label428;

label219:

echo intval($d701ad5f26544e8f['id']);
echo '" selected="selected">';
echo $d701ad5f26544e8f['username'];
echo '</option>' . "\r\n" . '                                    ';

label228:

goto label403;

label229:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n" . '                                    <th class="text-center">ID</th>' . "\r\n" . '                                    <th class="text-center">Quality</th>' . "\r\n" . '                                    <th>Line</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Stream</th>' . "\r\n" . '                                    <th>Player</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>ISP</th>' . "\r\n" . '                                    <th class="text-center">IP</th>' . "\r\n" . '                                    <th class="text-center">Duration</th>' . "\r\n" . '                                    <th class="text-center">Output</th>' . "\r\n" . '                                    <th class="text-center">';
echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label435;

label234:

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label235:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label343;
}

echo '                                    <optgroup label="Indirect Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label256;

	label253:

	echo '</option>' . "\r\n" . '                                            ';

	label254:

	goto label289;

	label256:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label254;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                            <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label272;

	label272:
	if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $f7107e3a92443147))) {
		goto label284;
	}

	echo ' selected';

	label284:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label253;

	label289:
}

goto label342;

label292:
if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $E59d0debc75e7be8['id']))) {
	goto label304;
}

echo ' selected';

label304:

echo '>My Lines</option>' . "\r\n" . '                                    </optgroup>' . "\r\n" . '                                    ';

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label38;
}

goto label1;

label314:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n\t\t\t\t\t\t\t";
goto label344;

label316:

echo '                            <div class="col-md-4">' . "\r\n" . '                                <select id="live_stream" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';
goto label318;

label318:

if (!isset($bf5cfcad649f465f)) {
	goto label92;
}

echo '                                    <option value="';
echo intval($bf5cfcad649f465f['id']);
echo '" selected="selected">';
echo $bf5cfcad649f465f['stream_display_name'];
goto label91;

label332:

echo '" placeholder="';
echo $_['search_logs'];
echo '...">' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="live_stream" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

if (!isset($bf5cfcad649f465f)) {
	goto label211;
}

echo '                                    <option value="';
goto label202;

label342:

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label343:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n\t\t\t\t\t\t\t";

label344:

goto label121;

label345:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label314;
}

echo '                                    <optgroup label="Indirect Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label366;

	label363:

	echo '</option>' . "\r\n" . '                                            ';

	label364:

	goto label399;

	label366:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label364;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                            <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label382;

	label382:
	if (!(isset(XUI::$rRequest['user']) && (XUI::$rRequest['user'] == $f7107e3a92443147))) {
		goto label394;
	}

	echo ' selected';

	label394:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label363;

	label399:
}

echo '                                    </optgroup>' . "\r\n" . '                                    ';
goto label314;

label403:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="live_user" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <optgroup label="Global">' . "\r\n" . '                                        <option value=""';

if (isset(XUI::$rRequest['user'])) {
	goto label409;
}

echo ' selected';

label409:

echo '>All Users</option>' . "\r\n" . '                                        <option value="';
goto label48;

label411:

if (XUI::$rSettings['redis_handler']) {
	goto label316;
}

echo "\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n" . '                                <input type="text" class="form-control" id="live_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label427;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label427:

goto label332;

label428:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label433;
}

echo 'collapse';

label433:

echo ' form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t";
goto label411;

label435:

include 'footer.php';

?>