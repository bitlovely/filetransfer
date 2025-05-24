<?php


goto label47;

label1:

if (!isset(XUI::$rRequest['search'])) {
	goto label12;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label12:

echo '" placeholder="';
echo $_['search_devices'];
goto label184;

label16:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['username'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label321;

label24:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="e2_filter" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label30;
}

echo ' selected';

label30:

echo '>';
goto label169;

label32:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label43;
}

echo ' selected';

label43:

echo '>';
echo $_['trial'];
goto label262;

label47:

include 'session.php';
include 'functions.php';

if (baF6e9eF7775B5A9()) {
	goto label55;
}

e72F42a93714BA87();

label55:

goto label114;

label56:

echo ' selected';

label57:

echo '>';
echo $_['expired'];
echo '</option>' . "\r\n" . '                                    <option value="5"';
goto label32;

label62:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label67;
}

echo 'collapse';

label67:

echo ' form-group row mb-4">' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <input type="text" class="form-control" id="e2_search" value="';
goto label1;

label69:

echo '>All Owners</option>' . "\r\n" . '                                        <option value="';
echo $E59d0debc75e7be8['id'];
echo '"';
if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $E59d0debc75e7be8['id']))) {
	goto label310;
}

goto label309;

label85:

echo '>';
echo $_['active'];
echo '</option>' . "\r\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label201;
}

echo ' selected';
goto label201;

label101:

echo $_['enigma_devices'];
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label113;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n" . '                        <span aria-hidden="true">&times;</span>' . "\r\n" . '                    </button>' . "\r\n" . '                    Device has been added / modified.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label113:

goto label62;

label114:

$F6edd90960a3bd9d = 'Enigma Devices';
include 'header.php';
echo '<div class="wrapper">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label101;

label120:

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label134;

	label125:

	goto label153;

	label127:

	echo ' selected';

	label128:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n" . '                                        ';
	goto label125;

	label134:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                        <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $f7107e3a92443147))) {
		goto label128;
	}

	goto label127;

	label153:
}

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label156:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label261;
}

goto label216;

label169:

echo $_['no_filter'];
echo '</option>' . "\r\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label183;
}

echo ' selected';

label183:

goto label85;

label184:

echo '...">' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-2 col-form-label text-center" for="e2_reseller">';
echo $_['filter_results'];
echo '</label>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="e2_reseller" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <optgroup label="Global">' . "\r\n" . '                                        <option value=""';

if (isset(XUI::$rRequest['owner'])) {
	goto label69;
}

echo ' selected';
goto label69;

label194:

echo $_['expiration'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label338;

label201:

echo '>';
echo $_['disabled'];
echo '</option>' . "\r\n" . '                                    <option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label57;
}

goto label56;

label216:

echo '                                    <optgroup label="Indirect Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label242;

	label222:
	if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $f7107e3a92443147))) {
		goto label234;
	}

	echo ' selected';

	label234:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label239;

	label239:

	echo '</option>' . "\r\n" . '                                            ';

	label240:

	goto label258;

	label242:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label240;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                            <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label222;

	label258:
}

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label261:

goto label24;

label262:

echo '</option>' . "\r\n" . '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="e2_show_entries">';
echo $_['show'];
echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="e2_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label276;

	label270:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label291;

	label276:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label296;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label289;
	}

	echo ' selected';

	label289:

	goto label294;

	label291:

	echo '</option>' . "\r\n" . '                                    ';
	goto label306;

	label294:

	goto label270;

	label296:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label304;
	}

	echo ' selected';

	label304:

	goto label270;

	label306:
}

goto label16;

label309:

echo ' selected';

label310:

echo '>My Devices</option>' . "\r\n" . '                                    </optgroup>' . "\r\n" . '                                    ';

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label156;
}

echo '                                    <optgroup label="Direct Reports">' . "\r\n" . '                                        ';
goto label120;

label321:

echo $_['mac_address'];
echo '</th>' . "\r\n" . '                                    <th class="text-center">Public IP</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['owner'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['status'];
goto label330;

label330:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['online'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['trial'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label194;

label338:

include 'footer.php';

?>