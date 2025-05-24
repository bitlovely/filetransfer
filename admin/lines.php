<?php


goto label47;

label1:

$F6edd90960a3bd9d = 'Lines';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label188;
}

echo ' style="display: none;"';
goto label188;

label20:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <input type="text" class="form-control" id="user_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label32;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label32:

goto label65;

label33:

echo '>Ministra</option>' . "\n" . '                                    <option value="8"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 8))) {
	goto label45;
}

echo ' selected';

label45:

echo '>Expiring Soon</option>' . "\n" . '                                    ' . "\n" . '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="user_show_entries">Show</label>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="user_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';
goto label200;

label47:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label55;
}

E72F42A93714ba87();

label55:

goto label1;

label56:

echo $C0a1fd30f0173389['username'];
echo '</option>' . "\n" . '                                    ';

label59:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="user_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label175;
}

goto label174;

label65:

echo '" placeholder="Search Lines...">' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-2 col-form-label text-center" for="user_reseller">Filter Results &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="user_reseller" class="form-control" data-toggle="select2">' . "\n" . '                                    ';
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = ba89228DC958Ce05(intval(XUI::$rRequest['owner']))))) {
	goto label59;
}

echo '                                    <option value="';
echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
goto label56;

label90:

echo '>Disabled</option>' . "\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label102;
}

echo ' selected';

label102:

echo '>Banned</option>' . "\n" . '                                    <option value="4"';
goto label151;

label104:

echo '>Active</option>' . "\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label116;
}

echo ' selected';

label116:

goto label90;

label117:

echo ' selected';

label118:

echo '>Trial</option>' . "\n" . '                                    <option value="6"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 6))) {
	goto label138;
}

echo ' selected';
goto label138;

label131:

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    Line has been added / modified.' . "\n" . '                </div>' . "\n" . '                ';

label132:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label20;
}

echo 'collapse';
goto label20;

label138:

echo '>Restreamer</option>' . "\n" . '                                    <option value="7"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 7))) {
	goto label150;
}

echo ' selected';

label150:

goto label33;

label151:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label162;
}

echo ' selected';

label162:

echo '>Expired</option>' . "\n" . '                                    <option value="5"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label118;
}

goto label117;

label174:

echo ' selected';

label175:

echo '>No Filter</option>' . "\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label104;
}

echo ' selected';
goto label104;

label188:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Lines</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label132;
}

goto label131;

label200:

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label210;

	label204:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label225;

	label210:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label230;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label223;
	}

	echo ' selected';

	label223:

	goto label228;

	label225:

	echo '</option>' . "\n" . '                                    ';
	goto label240;

	label228:

	goto label204;

	label230:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label238;
	}

	echo ' selected';

	label238:

	goto label204;

	label240:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Username</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Password</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Owner</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Online</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Trial</th>' . "\n" . '                                    <th class="text-center">Restreamer</th>' . "\n" . '                                    <th class="text-center">Active</th>' . "\n" . '                                    <th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Expiration</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Connection</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label244;

label244:

include 'footer.php';

?>