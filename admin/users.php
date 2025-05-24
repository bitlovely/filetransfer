<?php


goto label15;

label1:

echo ' selected';

label2:

echo '>No Filter</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == -1))) {
	goto label60;
}

echo ' selected';
goto label60;

label15:

include 'session.php';
include 'functions.php';

if (E6D500e19634d513()) {
	goto label23;
}

E72f42a93714ba87();

label23:

goto label183;

label24:

echo $C0a1fd30f0173389['username'];
echo '</option>' . "\n" . '                                    ';

label27:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="reg_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label2;
}

goto label1;

label33:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Username</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Owner</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">IP</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\n" . '                                    <th class="text-center">Type</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Credits</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Users</th>' . "\n" . '                                    <th class="text-center">Lines</th>' . "\n" . '                                    <th class="text-center">MAGs</th>' . "\n" . '                                    <th class="text-center">Enigmas</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Login</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label202;

label35:

echo '" placeholder="Search Users...">' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-2 col-form-label text-center" for="reg_reseller">Filter Results &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="reg_reseller" class="form-control" data-toggle="select2">' . "\n" . '                                    ';
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = bA89228DC958cE05(intval(XUI::$rRequest['owner']))))) {
	goto label27;
}

echo '                                    <option value="';
echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
goto label24;

label60:

echo '>Active</option>' . "\n" . '                                    <option value="-2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == -2))) {
	goto label72;
}

echo ' selected';

label72:

goto label93;

label73:

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    User has been added / modified.' . "\n" . '                </div>' . "\n" . '                ';

label74:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label80;
}

echo 'collapse';
goto label80;

label80:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <input type="text" class="form-control" id="reg_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label92;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label92:

goto label35;

label93:

echo '>Disabled</option>' . "\n" . '                                    ';

foreach (AD052A625C6AC011() as $fb719dae9595b9fa) {
	echo '                                    <option value="';
	echo intval($fb719dae9595b9fa['group_id']);
	echo '"';
	if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == intval($fb719dae9595b9fa['group_id'])))) {
		goto label121;
	}

	echo ' selected';

	label121:

	echo '>';
	echo $fb719dae9595b9fa['group_name'];
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="reg_show_entries">Show</label>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="reg_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label153;

	label132:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label150;

	label138:

	goto label132;

	label140:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label148;
	}

	echo ' selected';

	label148:

	goto label132;

	label150:

	echo '</option>' . "\n" . '                                    ';
	goto label168;

	label153:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label140;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label166;
	}

	echo ' selected';

	label166:

	goto label138;

	label168:
}

goto label33;

label171:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Users</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label74;
}

goto label73;

label183:

$F6edd90960a3bd9d = 'Users';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label171;
}

echo ' style="display: none;"';
goto label171;

label202:

include 'footer.php';

?>