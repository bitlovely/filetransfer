<?php


goto label110;

label1:

if (isset(XUI::$rRequest['user_id'])) {
	goto label6;
}

echo ' selected';

label6:

echo '>All Users</option>' . "\r\n" . '                                        <option value="';
echo $E59d0debc75e7be8['id'];
goto label95;

label10:

echo '                                    </optgroup>' . "\r\n" . '                                    ';

label11:

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="range">Dates</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center date" id="range" name="range" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="All Dates">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="show_entries">Show</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label22;
	}

	echo ' selected';

	label22:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";
}

goto label87;

label30:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label11;
}

echo '                                    <optgroup label="Indirect Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label68;

	label48:
	if (!(isset(XUI::$rRequest['user_id']) && (XUI::$rRequest['user_id'] == $f7107e3a92443147))) {
		goto label60;
	}

	echo ' selected';

	label60:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label65;

	label65:

	echo '</option>' . "\r\n" . '                                            ';

	label66:

	goto label84;

	label68:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label66;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                            <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label48;

	label84:
}

goto label10;

label87:

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Reseller</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Line / User</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Action</th>' . "\r\n" . '                                    <th class="text-center">Cost</th>' . "\r\n" . '                                    <th class="text-center">Credits Remaining</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Date</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label165;

label89:

$F6edd90960a3bd9d = 'User Logs';
include 'header.php';
echo '<div class="wrapper">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Reseller Logs</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="reseller">Reseller</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="reseller" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<optgroup label="Global">' . "\r\n" . '                                        <option value=""';
goto label1;

label95:

echo '"';
if (!(isset(XUI::$rRequest['user_id']) && (XUI::$rRequest['user_id'] == $E59d0debc75e7be8['id']))) {
	goto label108;
}

echo ' selected';

label108:

echo '>My Logs</option>' . "\r\n" . '                                    </optgroup>' . "\r\n" . '                                    ';
goto label119;

label110:

include 'session.php';
include 'functions.php';

if (baF6e9eF7775B5a9()) {
	goto label118;
}

E72F42a93714BA87();

label118:

goto label89;

label119:

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label30;
}

echo '                                    <optgroup label="Direct Reports">' . "\r\n" . '                                        ';

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label140;

	label133:

	echo ' selected';

	label134:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n" . '                                        ';
	goto label159;

	label140:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                        <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset(XUI::$rRequest['user_id']) && (XUI::$rRequest['user_id'] == $f7107e3a92443147))) {
		goto label134;
	}

	goto label133;

	label159:

	goto label161;

	label161:
}

echo '                                    </optgroup>' . "\r\n" . '                                    ';
goto label30;

label165:

include 'footer.php';

?>