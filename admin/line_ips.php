<?php


goto label35;

label1:

$cf397b349f533737 = intval(XUI::$rRequest['range']) ?: 0;
$fddb70e71d731603 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'lines_per_ip')) ?: [];
$F6edd90960a3bd9d = 'Line IP Usage';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
goto label64;

label24:

if (!($cf397b349f533737 == 604800)) {
	goto label29;
}

echo ' selected';

label29:

echo '>Last 7 Days</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="86400"';

if (!($cf397b349f533737 == 86400)) {
	goto label83;
}

goto label82;

label35:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label43;
}

E72f42a93714ba87();

label43:

goto label1;

label44:

echo '>Last Hour</option>' . "\r\n\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label55;
	}

	echo ' selected';

	label55:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">User ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Username</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">IP Count</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n" . '                                ';
goto label90;

label64:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label79;
}

echo ' style="display: none;"';

label79:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
goto label183;

label82:

echo ' selected';

label83:

echo '>Last 24 Hours</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="3600"';

if (!($cf397b349f533737 == 3600)) {
	goto label44;
}

echo ' selected';
goto label44;

label90:

foreach ($fddb70e71d731603[$cf397b349f533737] as $Fb9da1713bff19ce) {
	goto label126;

	label95:

	$E8e13b4c9d9584b6 = '<a href="line_activity?user_id=' . $Fb9da1713bff19ce['user_id'] . '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs">View Logs</button></a>';

	label99:

	if (E589a4bF54a2dAD1('adv', 'edit_user')) {
		goto label163;
	}

	$Abcb228699a7f743 = $Fb9da1713bff19ce['user_id'];
	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label161;

	label112:

	echo '                                    <tr>' . "\r\n" . '                                        <td class="text-center">';
	echo $Abcb228699a7f743;
	echo '</td>' . "\r\n" . '                                        <td>';
	echo $ff5cf44f96903d64;
	echo '</td>' . "\r\n" . '                                        <td class="text-center">';
	goto label119;

	label119:

	echo $Fb9da1713bff19ce['ip_count'];
	echo '</td>' . "\r\n" . '                                        <td class="text-center">';
	echo $E8e13b4c9d9584b6;
	echo '</td>' . "\r\n" . '                                    </tr>' . "\r\n" . '                                ';
	goto label179;

	label126:

	if ($cf397b349f533737 == 0) {
		goto label159;
	}

	$Cec8eeb85b74d82b = date($f1dcaed925076e67['date_format'], time() - intval($cf397b349f533737)) . ' - ' . date($f1dcaed925076e67['date_format'], time());
	$E8e13b4c9d9584b6 = '<a href="line_activity?user_id=' . $Fb9da1713bff19ce['user_id'] . '&range=' . $Cec8eeb85b74d82b . '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs">View Logs</button></a>';
	goto label99;

	label159:

	goto label95;

	label161:

	goto label177;

	label163:

	$Abcb228699a7f743 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['user_id'] . '</a>';
	$ff5cf44f96903d64 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label177:

	goto label112;

	label179:
}

echo '                            </tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label191;

label183:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Line IP Usage</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-7">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="range" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value="0"';

if (!($cf397b349f533737 == 0)) {
	goto label189;
}

echo ' selected';

label189:

echo '>All Time</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="604800"';
goto label24;

label191:

include 'footer.php';

?>