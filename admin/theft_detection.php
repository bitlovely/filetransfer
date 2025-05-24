<?php


goto label182;

label1:

$cf397b349f533737 = intval(XUI::$rRequest['range']) ?: 0;
$deec48c5265dbeb0 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'theft_detection')) ?: [];
$F6edd90960a3bd9d = 'VOD Theft Detection';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
goto label63;

label24:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">VOD Theft Detection</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-7">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="range" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value="0"';

if (!($cf397b349f533737 == 0)) {
	goto label30;
}

echo ' selected';

label30:

echo '>All Time</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="604800"';
goto label52;

label32:

echo '>Last Hour</option>' . "\r\n\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label43;
	}

	echo ' selected';

	label43:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">User ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Username</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">View Count</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n" . '                                ';
goto label89;

label52:

if (!($cf397b349f533737 == 604800)) {
	goto label57;
}

echo ' selected';

label57:

echo '>Last 7 Days</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="86400"';

if (!($cf397b349f533737 == 86400)) {
	goto label82;
}

goto label81;

label63:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label78;
}

echo ' style="display: none;"';

label78:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
goto label24;

label81:

echo ' selected';

label82:

echo '>Last 24 Hours</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="3600"';

if (!($cf397b349f533737 == 3600)) {
	goto label32;
}

echo ' selected';
goto label32;

label89:

foreach ($deec48c5265dbeb0[$cf397b349f533737] as $Fb9da1713bff19ce) {
	goto label94;

	label94:

	if ($cf397b349f533737 == 0) {
		goto label127;
	}

	$Cec8eeb85b74d82b = date($f1dcaed925076e67['date_format'], time() - intval($cf397b349f533737)) . ' - ' . date($f1dcaed925076e67['date_format'], time());
	$E8e13b4c9d9584b6 = '<a href="line_activity?search=' . $Fb9da1713bff19ce['username'] . '&dates=' . $Cec8eeb85b74d82b . '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs">View Logs</button></a>';
	goto label147;

	label127:

	goto label143;

	label129:

	echo $Fb9da1713bff19ce['vod_count'];
	echo '</td>' . "\r\n" . '                                        <td class="text-center">';
	echo $E8e13b4c9d9584b6;
	echo '</td>' . "\r\n" . '                                    </tr>' . "\r\n" . '                                ';
	goto label178;

	label136:

	echo '                                    <tr>' . "\r\n" . '                                        <td class="text-center">';
	echo $Abcb228699a7f743;
	echo '</td>' . "\r\n" . '                                        <td>';
	echo $ff5cf44f96903d64;
	echo '</td>' . "\r\n" . '                                        <td class="text-center">';
	goto label129;

	label143:

	$E8e13b4c9d9584b6 = '<a href="line_activity?search=' . $Fb9da1713bff19ce['username'] . '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs">View Logs</button></a>';

	label147:

	if (E589a4Bf54a2Dad1('adv', 'edit_user')) {
		goto label162;
	}

	$Abcb228699a7f743 = $Fb9da1713bff19ce['user_id'];
	$ff5cf44f96903d64 = $Fb9da1713bff19ce['username'];
	goto label160;

	label160:

	goto label176;

	label162:

	$Abcb228699a7f743 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['user_id'] . '</a>';
	$ff5cf44f96903d64 = '<a href=\'line?id=' . $Fb9da1713bff19ce['user_id'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';

	label176:

	goto label136;

	label178:
}

echo '                            </tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label191;

label182:

include 'session.php';
include 'functions.php';

if (e6d500e19634D513()) {
	goto label190;
}

e72F42A93714Ba87();

label190:

goto label1;

label191:

include 'footer.php';

?>