<?php


goto label32;

label1:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">On-Demand Scanner</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>       ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t";

if (XUI::$rSettings['on_demand_checker']) {
	goto label7;
}

echo "\t\t\t\t" . '<div class="alert alert-info alert-dismissible fade show" role="alert">' . "\r\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n" . '                        <span aria-hidden="true">×</span>' . "\r\n" . '                    </button>' . "\r\n" . '                    On-Demand Scanner isn\'t active, please enable it in the <a href="settings">Settings</a> menu to continue.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label7:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="search" value="" placeholder="Search Streams...">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n" . '                                <select id="server" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value="" selected>All Servers</option>' . "\r\n" . '                                    ';
goto label38;

label9:

echo $_['no_filter'];
echo '</option>' . "\r\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label23;
}

echo ' selected';

label23:

goto label145;

label24:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n" . '                                <select id="filter" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label30;
}

echo ' selected';

label30:

echo '>';
goto label9;

label32:

include 'session.php';
include 'functions.php';
$F6edd90960a3bd9d = 'On-Demand Scanner';
include 'header.php';
echo '<div class="wrapper"';
goto label127;

label38:

foreach (c6A90BfcD425EB63() as $Ec379295dc7029e6) {
	echo '                                    <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label59;
	}

	echo ' selected';

	label59:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n" . '                                    ';
}

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n" . '                                <select id="category" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value="" selected>All Categories</option>' . "\r\n" . '                                    ';

foreach (f769E3F0C739d1A6('live') as $Dbcac322b4274e46) {
	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label88;
	}

	echo ' selected';

	label88:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\r\n" . '                                    ';
}

goto label24;

label95:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label106;
}

echo ' selected';

label106:

echo '>Not Scanned</option>' . "\r\n" . '                                </select>' . "\r\n" . '                            </div>' . "\r\n\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="show_entries">Show</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label117;
	}

	echo ' selected';

	label117:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";
}

goto label125;

label125:

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n" . '                                    <th class="text-center">Icon</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Stream</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Server</th>' . "\r\n" . '                                    <th class="text-center">Status</th>' . "\r\n" . '                                    <th class="text-center">Response</th>' . "\r\n" . '                                    <th class="text-center">Stream Info</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Scanned</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n" . '    </div>' . "\r\n" . '</div>' . "\r\n";
goto label159;

label127:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label142;
}

echo ' style="display: none;"';

label142:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
goto label1;

label145:

echo '>Ready</option>' . "\r\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label157;
}

echo ' selected';

label157:

echo '>Down</option>' . "\r\n" . '                                    <option value="3"';
goto label95;

label159:

include 'footer.php';

?>