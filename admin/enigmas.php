<?php


goto label157;

label1:
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = ba89228dC958CE05(intval(XUI::$rRequest['owner']))))) {
	goto label106;
}

echo '                                    <option value="';
echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
goto label105;

label27:

echo '>';
echo $_['no_filter'];
echo '</option>' . "\r\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label262;
}

goto label261;

label42:

echo '>';
echo $_['expired'];
echo '</option>' . "\r\n" . '                                    <option value="5"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label254;
}

echo ' selected';
goto label254;

label58:

echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="e2_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label84;

	label63:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label81;

	label69:

	goto label63;

	label71:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label79;
	}

	echo ' selected';

	label79:

	goto label63;

	label81:

	echo '</option>' . "\r\n" . '                                    ';
	goto label99;

	label84:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label71;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label97;
	}

	echo ' selected';

	label97:

	goto label69;

	label99:
}

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
goto label235;

label105:

echo '</option>' . "\r\n" . '                                    ';

label106:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="e2_filter" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label27;
}

echo ' selected';
goto label27;

label113:

echo '</option>' . "\r\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label125;
}

echo ' selected';

label125:

echo '>';
goto label142;

label127:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label138;
}

echo ' selected';

label138:

echo '>';
echo $_['disabled'];
goto label113;

label142:

echo $_['banned'];
echo '</option>' . "\r\n" . '                                    <option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label156;
}

echo ' selected';

label156:

goto label42;

label157:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label165;
}

E72F42a93714bA87();

label165:

goto label216;

label166:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label176;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n" . '                        <span aria-hidden="true">&times;</span>' . "\r\n" . '                    </button>' . "\r\n" . '                    Device has been added / modified.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label176:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <div id="collapse_filters" class="';
goto label205;

label178:

echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label267;

label182:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['trial'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['expiration'];
echo '</th>' . "\r\n" . '                                    <th class="text-center">Last Connection</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label178;

label190:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['enigma_devices'];
goto label166;

label196:

echo $_['owner'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['status'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['online'];
goto label182;

label205:

if (!$Ebb0b63f7c597ba4) {
	goto label209;
}

echo 'collapse';

label209:

echo ' form-group row mb-4">' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <input type="text" class="form-control" id="e2_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label249;
}

goto label243;

label216:

$F6edd90960a3bd9d = 'Enigma Devices';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label190;
}

echo ' style="display: none;"';
goto label190;

label235:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['username'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['mac_address'];
echo '</th>' . "\r\n" . '                                    <th class="text-center">Public IP</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
goto label196;

label243:

echo htmlspecialchars(XUI::$rRequest['search']);

label249:

echo '" placeholder="';
echo $_['search_devices'];
echo '...">' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-2 col-form-label text-center" for="e2_reseller">Filter Results &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="e2_reseller" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';
goto label1;

label254:

echo '>';
echo $_['trial'];
echo '</option>' . "\r\n" . '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="e2_show_entries">';
echo $_['show'];
goto label58;

label261:

echo ' selected';

label262:

echo '>';
echo $_['active'];
echo '</option>' . "\r\n" . '                                    <option value="2"';
goto label127;

label267:

include 'footer.php';

?>