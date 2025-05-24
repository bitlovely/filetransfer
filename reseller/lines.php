<?php


goto label230;

label1:

echo '                                    </optgroup>' . "\n" . '                                    ';

label2:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label184;
}

echo '                                    <optgroup label="Indirect Reports">' . "\n" . '                                        ';
goto label140;

label16:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label27;
}

echo ' selected';

label27:

echo '>Trial</option>' . "\n" . '                                    ' . "\n" . '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="user_show_entries">Show</label>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="user_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label53;

	label32:

	goto label47;

	label34:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label42;
	}

	echo ' selected';

	label42:

	goto label47;

	label44:

	echo '</option>' . "\n" . '                                    ';
	goto label68;

	label47:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label44;

	label53:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label34;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label66;
	}

	echo ' selected';

	label66:

	goto label32;

	label68:
}

goto label78;

label71:

echo '" placeholder="Search Lines...">' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-2 col-form-label text-center" for="user_reseller">Filter Results</label>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="user_reseller" class="form-control" data-toggle="select2">' . "\n" . '                                    <optgroup label="Global">' . "\n" . '                                        <option value=""';

if (isset(XUI::$rRequest['owner'])) {
	goto label77;
}

echo ' selected';

label77:

goto label273;

label78:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Username</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Password</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Owner</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Online</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Trial</th>' . "\n" . '                                    <th class="text-center">Active</th>' . "\n" . '                                    <th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Expiration</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Connection</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label290;

label80:

echo 'collapse';

label81:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <input type="text" class="form-control" id="user_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label71;
}

echo htmlspecialchars(XUI::$rRequest['search']);
goto label71;

label94:

echo '>My Lines</option>' . "\n" . '                                    </optgroup>' . "\n" . '                                    ';

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label2;
}

echo '                                    <optgroup label="Direct Reports">' . "\n" . '                                        ';

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label116;

	label109:

	echo ' selected';

	label110:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\n" . '                                        ';
	goto label135;

	label116:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                        <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $f7107e3a92443147))) {
		goto label110;
	}

	goto label109;

	label135:

	goto label137;

	label137:
}

goto label1;

label140:

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label165;

	label145:
	if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $f7107e3a92443147))) {
		goto label157;
	}

	echo ' selected';

	label157:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label162;

	label162:

	echo '</option>' . "\n" . '                                            ';

	label163:

	goto label181;

	label165:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label163;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                            <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label145;

	label181:
}

echo '                                    </optgroup>' . "\n" . '                                    ';

label184:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="user_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';
goto label200;

label186:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label195;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    Line has been added / modified.' . "\n" . '                </div>' . "\n" . '                ';

label195:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label81;
}

goto label80;

label200:

if (isset(XUI::$rRequest['filter'])) {
	goto label205;
}

echo ' selected';

label205:

echo '>No Filter</option>' . "\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label240;
}

goto label239;

label217:

echo '>Disabled</option>' . "\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label229;
}

echo ' selected';

label229:

goto label259;

label230:

include 'session.php';
include 'functions.php';

if (Baf6e9eF7775B5A9()) {
	goto label238;
}

E72f42A93714Ba87();

label238:

goto label253;

label239:

echo ' selected';

label240:

echo '>Active</option>' . "\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label217;
}

echo ' selected';
goto label217;

label253:

$F6edd90960a3bd9d = 'Lines';
include 'header.php';
echo '<div class="wrapper">' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Lines</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
goto label186;

label259:

echo '>Banned</option>' . "\n" . '                                    <option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label271;
}

echo ' selected';

label271:

echo '>Expired</option>' . "\n" . '                                    <option value="5"';
goto label16;

label273:

echo '>All Owners</option>' . "\n" . '                                        <option value="';
echo $E59d0debc75e7be8['id'];
echo '"';
if (!(isset(XUI::$rRequest['owner']) && (XUI::$rRequest['owner'] == $E59d0debc75e7be8['id']))) {
	goto label94;
}

echo ' selected';
goto label94;

label290:

include 'footer.php';

?>