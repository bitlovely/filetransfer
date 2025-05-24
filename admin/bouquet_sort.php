<?php


goto label406;

label1:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquet-series">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_series_l" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['series'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['title']);
	echo '</option>' . "\r\n" . '                                                ';
}

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-2 text-center" style="display: flex; justify-content: center; align-items: center; margin-top:-18px;">' . "\r\n" . '                                                <ul class="list-inline wizard mb-0">' . "\r\n" . '                                                    <li class="list-inline-item">' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveLeft(\'series\')" class="btn btn-info"><i class="mdi mdi-chevron-left"></i></a>' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveRight(\'series\')" class="btn btn-info"><i class="mdi mdi-chevron-right"></i></a>' . "\r\n" . '                                                    </li>' . "\r\n" . '                                                </ul>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_series_r" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['series'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['title']);
	echo '</option>' . "\r\n" . '                                                ';
}

goto label449;

label40:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'radio\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'radio\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop(\'radio\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom(\'radio\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'radio\')" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label167;

label47:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquet-stations">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_radio_l" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['radio'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</option>' . "\r\n" . '                                                ';
}

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-2 text-center" style="display: flex; justify-content: center; align-items: center; margin-top:-18px;">' . "\r\n" . '                                                <ul class="list-inline wizard mb-0">' . "\r\n" . '                                                    <li class="list-inline-item">' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveLeft(\'radio\')" class="btn btn-info"><i class="mdi mdi-chevron-left"></i></a>' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveRight(\'radio\')" class="btn btn-info"><i class="mdi mdi-chevron-right"></i></a>' . "\r\n" . '                                                    </li>' . "\r\n" . '                                                </ul>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_radio_r" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['radio'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</option>' . "\r\n" . '                                                ';
}

goto label40;

label86:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label101;
}

echo ' style="display: none;"';

label101:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n\t\t\t\t\t\t";
include 'topbar.php';
goto label150;

label104:

$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`type`, `streams`.`category_id`, `streams`.`stream_display_name` FROM `streams` WHERE `streams`.`type` IN (1,3) AND `streams`.`id` IN (' . implode(',', array_map('intval', $A5a4a57a12bb19b3)) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Ecb33c10e149ff2a['stream'][intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
}

label130:

if (!(0 < count($B149a33cab1dcf5f))) {
	goto label441;
}

goto label415;

label138:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\r\n\t\t\t\t\t\t\t" . '<input type="hidden" id="stream_order_array" name="stream_order_array" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<input type="hidden" name="reorder" value="';
echo intval(XUI::$rRequest['id']);
echo '" />' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquet-stream" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="la la-play-circle-o mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['streams'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquet-movie" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="la la-video-camera mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label470;

label150:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
echo htmlspecialchars($f155fef57262b32a['bouquet_name']);
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n" . '                ';

if (!isset($cbcf0bbd5e139431)) {
	goto label503;
}

if (!($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label503;
}

goto label499;

label167:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label543;

label169:

foreach ($B149a33cab1dcf5f as $Bf508e08aecfc95f) {
	if (!isset($Ecb33c10e149ff2a['movie'][intval($Bf508e08aecfc95f)])) {
		goto label188;
	}

	$e6570651eec8c25e['movie'][] = $Ecb33c10e149ff2a['movie'][intval($Bf508e08aecfc95f)];

	label188:
}

foreach ($F8ee992709e46eb1 as $e09a0f1b8f5b99d3) {
	if (!isset($Ecb33c10e149ff2a['radio'][intval($e09a0f1b8f5b99d3)])) {
		goto label209;
	}

	$e6570651eec8c25e['radio'][] = $Ecb33c10e149ff2a['radio'][intval($e09a0f1b8f5b99d3)];

	label209:
}

goto label212;

label212:

foreach ($d02ef9ae10a41939 as $B4a603c2a57d3acf) {
	if (!isset($Ecb33c10e149ff2a['series'][intval($B4a603c2a57d3acf)])) {
		goto label231;
	}

	$e6570651eec8c25e['series'][] = $Ecb33c10e149ff2a['series'][intval($B4a603c2a57d3acf)];

	label231:
}

$F6edd90960a3bd9d = 'Bouquet Sort';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
goto label86;

label237:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquet-movie">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_movie_l" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['movie'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</option>' . "\r\n" . '                                                ';
}

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-2 text-center" style="display: flex; justify-content: center; align-items: center; margin-top:-18px;">' . "\r\n" . '                                                <ul class="list-inline wizard mb-0">' . "\r\n" . '                                                    <li class="list-inline-item">' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveLeft(\'movie\')" class="btn btn-info"><i class="mdi mdi-chevron-left"></i></a>' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveRight(\'movie\')" class="btn btn-info"><i class="mdi mdi-chevron-right"></i></a>' . "\r\n" . '                                                    </li>' . "\r\n" . '                                                </ul>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_movie_r" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['movie'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</option>' . "\r\n" . '                                                ';
}

goto label463;

label276:

$b62d6460eb33ea07->query('SELECT `streams_series`.`id`, `streams_series`.`category_id`, `streams_series`.`title` FROM `streams_series` WHERE `streams_series`.`id` IN (' . implode(',', array_map('intval', $d02ef9ae10a41939)) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Ecb33c10e149ff2a['series'][intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
}

label302:

foreach ($A5a4a57a12bb19b3 as $aa4e95f1ed1932a8) {
	if (!isset($Ecb33c10e149ff2a['stream'][intval($aa4e95f1ed1932a8)])) {
		goto label321;
	}

	$e6570651eec8c25e['stream'][] = $Ecb33c10e149ff2a['stream'][intval($aa4e95f1ed1932a8)];

	label321:
}

goto label169;

label324:

$A5a4a57a12bb19b3 = array_map('intval', json_decode($f155fef57262b32a['bouquet_channels'], true));
$B149a33cab1dcf5f = array_map('intval', json_decode($f155fef57262b32a['bouquet_movies'], true));
$d02ef9ae10a41939 = array_map('intval', json_decode($f155fef57262b32a['bouquet_series'], true));
$F8ee992709e46eb1 = array_map('intval', json_decode($f155fef57262b32a['bouquet_radios'], true));

if (!(0 < count($A5a4a57a12bb19b3))) {
	goto label130;
}

goto label104;

label372:

$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`type`, `streams`.`category_id`, `streams`.`stream_display_name` FROM `streams` WHERE `streams`.`type` = 4 AND `streams`.`id` IN (' . implode(',', array_map('intval', $F8ee992709e46eb1)) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Ecb33c10e149ff2a['radio'][intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
}

label398:

if (!(0 < count($d02ef9ae10a41939))) {
	goto label302;
}

goto label276;

label406:

include 'session.php';
include 'functions.php';

if (e6D500e19634D513()) {
	goto label414;
}

e72F42a93714BA87();

label414:

goto label479;

label415:

$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams`.`type`, `streams`.`category_id`, `streams`.`stream_display_name` FROM `streams` WHERE `streams`.`type` = 2 AND `streams`.`id` IN (' . implode(',', array_map('intval', $B149a33cab1dcf5f)) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Ecb33c10e149ff2a['movie'][intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
}

label441:

if (!(0 < count($F8ee992709e46eb1))) {
	goto label398;
}

goto label372;

label449:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'series\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'series\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop(\'series\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom(\'series\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'series\')" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label47;

label456:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'stream\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'stream\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop(\'stream\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom(\'stream\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'stream\')" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label237;

label463:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'movie\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'movie\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop(\'movie\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom(\'movie\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'movie\')" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label1;

label470:

echo $_['movies'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquet-series" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="la la-tv mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['series'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquet-stations" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-radio-tower mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['stations'];
goto label504;

label479:
if (!(!isset(XUI::$rRequest['id']) || !($f155fef57262b32a = b47fB5320E43F112(XUI::$rRequest['id'])))) {
	goto label496;
}

E72f42A93714bA87();

label496:

$Ecb33c10e149ff2a = [
	'stream' => [],
	'movie'  => [],
	'radio'  => [],
	'series' => []
];
$e6570651eec8c25e = [
	'stream' => [],
	'movie'  => [],
	'radio'  => [],
	'series' => []
];
goto label324;

label499:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t";
echo $_['bouquet_order_success'];
echo "\t\t\t\t" . '</div>' . "\r\n" . '                ';

label503:

goto label138;

label504:

echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquet-stream">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_stream_l" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['stream'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</option>' . "\r\n" . '                                                ';
}

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-2 text-center" style="display: flex; justify-content: center; align-items: center; margin-top:-18px;">' . "\r\n" . '                                                <ul class="list-inline wizard mb-0">' . "\r\n" . '                                                    <li class="list-inline-item">' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveLeft(\'stream\')" class="btn btn-info"><i class="mdi mdi-chevron-left"></i></a>' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveRight(\'stream\')" class="btn btn-info"><i class="mdi mdi-chevron-right"></i></a>' . "\r\n" . '                                                    </li>' . "\r\n" . '                                                </ul>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_stream_r" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['stream'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</option>' . "\r\n" . '                                                ';
}

goto label456;

label543:

include 'footer.php';

?>