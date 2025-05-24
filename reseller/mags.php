<?php


goto label183;

label1:

echo $_['no_filter'];
echo '</option>' . "\r\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label15;
}

echo ' selected';

label15:

goto label192;

label16:

echo '</option>' . "\r\n" . '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="mag_show_entries">';
echo $_['show'];
echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="mag_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label33;

	label24:

	echo '</option>' . "\r\n" . '                                    ';
	goto label60;

	label27:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label24;

	label33:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label50;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label46;
	}

	echo ' selected';

	label46:

	goto label48;

	label48:

	goto label27;

	label50:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label58;
	}

	echo ' selected';

	label58:

	goto label27;

	label60:
}

goto label106;

label63:

echo $_['mac_address'];
echo '</th>' . "\r\n" . '                                    <th class="text-center">Device</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['owner'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['status'];
goto label129;

label72:

$F6edd90960a3bd9d = 'MAG Devices';
include 'header.php';
echo '<div class="wrapper">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label269;

label78:

if (!isset(XUI::$rRequest['search'])) {
	goto label89;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label89:

echo '" placeholder="';
echo $_['search_devices'];
goto label259;

label93:

echo ' selected';

label94:

echo '>';
echo $_['expired'];
echo '</option>' . "\r\n" . '                                    <option value="4"';
goto label208;

label99:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label104;
}

echo 'collapse';

label104:

echo ' form-group row mb-4">' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <input type="text" class="form-control" id="mag_search" value="';
goto label78;

label106:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['username'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label63;

label114:

echo '>';
echo $_['disabled'];
echo '</option>' . "\r\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label94;
}

goto label93;

label129:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['online'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['trial'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label331;

label137:

echo '                                    <optgroup label="Indirect Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label163;

	label143:

	echo '</option>' . "\r\n" . '                                            ';

	label144:

	goto label179;

	label146:
	if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $f7107e3a92443147))) {
		goto label158;
	}

	echo ' selected';

	label158:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label143;

	label163:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label144;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                            <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label146;

	label179:
}

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label182:

goto label223;

label183:

include 'session.php';
include 'functions.php';

if (baF6E9eF7775B5a9()) {
	goto label191;
}

e72f42a93714Ba87();

label191:

goto label72;

label192:

echo '>';
echo $_['active'];
echo '</option>' . "\r\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label114;
}

echo ' selected';
goto label114;

label208:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label219;
}

echo ' selected';

label219:

echo '>';
echo $_['trial'];
goto label16;

label223:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="mag_filter" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label229;
}

echo ' selected';

label229:

echo '>';
goto label1;

label231:

echo '>All Owners</option>' . "\r\n" . '                                        <option value="';
echo $E59d0debc75e7be8['id'];
echo '"';
if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $E59d0debc75e7be8['id']))) {
	goto label248;
}

goto label247;

label247:

echo ' selected';

label248:

echo '>My Devices</option>' . "\r\n" . '                                    </optgroup>' . "\r\n" . '                                    ';

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label318;
}

echo '                                    <optgroup label="Direct Reports">' . "\r\n" . '                                        ';
goto label282;

label259:

echo '...">' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-2 col-form-label text-center" for="mag_reseller">';
echo $_['filter_results'];
echo '</label>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="mag_reseller" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <optgroup label="Global">' . "\r\n" . '                                        <option value=""';

if (isset(XUI::$rRequest['owner'])) {
	goto label231;
}

echo ' selected';
goto label231;

label269:

echo $_['mag_devices'];
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label281;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n" . '                        <span aria-hidden="true">&times;</span>' . "\r\n" . '                    </button>' . "\r\n" . '                    Device has been added / modified.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label281:

goto label99;

label282:

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label296;

	label287:

	goto label315;

	label289:

	echo ' selected';

	label290:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n" . '                                        ';
	goto label287;

	label296:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                        <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $f7107e3a92443147))) {
		goto label290;
	}

	goto label289;

	label315:
}

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label318:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label182;
}

goto label137;

label331:

echo $_['expiration'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label338;

label338:

include 'footer.php';

?>