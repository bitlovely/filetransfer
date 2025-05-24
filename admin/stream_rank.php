<?php


goto label123;

label1:

include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label18;
}

echo ' style="display: none;"';

label18:

goto label132;

label19:

$Dcc7a4994cf06d94 = [1 => 'Live Stream', 2 => 'Movie', 3 => 'Created Channel', 4 => 'Radio Station', 5 => 'Episode'];
$d8dafc80325ae183 = XUI::$rRequest['period'] ?: 'all';
$b62d6460eb33ea07->query('SELECT `streams_stats`.*, `streams`.`stream_display_name` FROM `streams_stats` INNER JOIN `streams` ON `streams`.`id` = `streams_stats`.`stream_id` WHERE `streams_stats`.`type` = ? AND `streams`.`type` IN (1,3) GROUP BY `stream_id` ORDER BY `streams_stats`.`rank` ASC LIMIT 500;', $d8dafc80325ae183);
$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
$F6edd90960a3bd9d = 'Stream Rank';
goto label1;

label34:

echo '                            </tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label173;

label36:

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Rank #</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Stream Name</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Time Watched</th>' . "\r\n" . '                                    <th class="text-center">Total Connections</th>' . "\r\n" . '                                    <th class="text-center">Total Users</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n" . '                                ';
$df6991d59f367c7e = 0;

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label54;

	label42:

	echo '</td>' . "\r\n" . '                                        <td><a href="stream_view?id=';
	echo intval($Fb9da1713bff19ce['id']);
	echo '">';
	echo $Fb9da1713bff19ce['stream_display_name'];
	echo '</a></td>' . "\r\n" . '                                        <td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light btn-fixed\'>';
	goto label80;

	label54:

	$df6991d59f367c7e++;
	$Ab13f2545dd3df14 = $Fb9da1713bff19ce['time'];

	if (86400 <= $Ab13f2545dd3df14) {
		goto label97;
	}

	$Ab13f2545dd3df14 = sprintf('%02dh %02dm %02ds', $Ab13f2545dd3df14 / 3600, ($Ab13f2545dd3df14 / 60) % 60, $Ab13f2545dd3df14 % 60);
	goto label109;
	goto label97;

	label77:

	echo '</button></td>' . "\r\n" . '                                    </tr>' . "\r\n" . '                                ';
	goto label113;

	label80:

	echo $Ab13f2545dd3df14;
	echo '</button></td>' . "\r\n" . '                                        <td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light btn-fixed\'>';
	echo number_format($Fb9da1713bff19ce['connections'], 0);
	echo '</button></td>' . "\r\n" . '                                        <td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light btn-fixed\'>';
	echo number_format($Fb9da1713bff19ce['users'], 0);
	goto label77;

	label97:

	$Ab13f2545dd3df14 = sprintf('%02dd %02dh %02dm', $Ab13f2545dd3df14 / 86400, ($Ab13f2545dd3df14 / 3600) % 24, ($Ab13f2545dd3df14 / 60) % 60);

	label109:

	echo '                                    <tr>' . "\r\n" . '                                        <td class="text-center">';
	echo $df6991d59f367c7e;
	goto label42;

	label113:
}

goto label34;

label116:

echo '>Today</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="week"';

if (!($d8dafc80325ae183 == 'week')) {
	goto label122;
}

echo ' selected';

label122:

goto label141;

label123:

include 'session.php';
include 'functions.php';

if (e6D500e19634D513()) {
	goto label131;
}

e72f42a93714bA87();

label131:

goto label19;

label132:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Stream Rank</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-7">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="period" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value="today"';

if (!($d8dafc80325ae183 == 'today')) {
	goto label116;
}

echo ' selected';
goto label116;

label141:

echo '>This Week</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="month"';

if (!($d8dafc80325ae183 == 'month')) {
	goto label147;
}

echo ' selected';

label147:

echo '>This Month</option>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="all"';
goto label149;

label149:

if (!($d8dafc80325ae183 == 'all')) {
	goto label154;
}

echo ' selected';

label154:

echo '>All Time</option>' . "\r\n\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label165;
	}

	echo ' selected';

	label165:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";
}

goto label36;

label173:

include 'footer.php';

?>