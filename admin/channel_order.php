<?php


goto label1;

label1:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label9;
}

E72f42A93714ba87();

label9:

goto label66;

label10:

echo ' style="display: none;"';

label11:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n" . '                    <div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo '                    </div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label332;

label15:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="order-series">' . "\r\n" . '                                        <div class="row">' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_series_l" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['series'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</option>' . "\r\n" . '                                                ';
}

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-2 text-center" style="display: flex; justify-content: center; align-items: center; margin-top:-18px;">' . "\r\n" . '                                                <ul class="list-inline wizard mb-0">' . "\r\n" . '                                                    <li class="list-inline-item">' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveLeft(\'series\')" class="btn btn-info"><i class="mdi mdi-chevron-left"></i></a>' . "\r\n" . '                                                        <a href="javascript: void(0);" onClick="MoveRight(\'series\')" class="btn btn-info"><i class="mdi mdi-chevron-right"></i></a>' . "\r\n" . '                                                    </li>' . "\r\n" . '                                                </ul>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_series_r" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

foreach ($e6570651eec8c25e['series'] as $fe93a43f53d92a4e) {
	echo '                                                    <option value="';
	echo intval($fe93a43f53d92a4e['id']);
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</option>' . "\r\n" . '                                                ';
}

goto label144;

label54:

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'Channel order has been modified.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label55:

if (!($f1dcaed925076e67['channel_number_type'] != 'manual')) {
	goto label124;
}

echo '                <div class="alert alert-warning alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t";
echo $_['channel_order_info'];
goto label123;

label64:

echo "\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label364;

label66:

$dd3211a322da8474 = isset(XUI::$rRequest['override']);
$e6570651eec8c25e = [
	'stream' => [],
	'movie'  => [],
	'series' => [],
	'radio'  => []
];
$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `streams`;');
$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];
if (!(($d353a4da8a0bb857 <= 50000) || $dd3211a322da8474)) {
	goto label305;
}

goto label158;

label84:

echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n" . '                                    <div class="tab-pane" id="order-stream">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_stream_l" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

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

goto label350;

label123:

echo "\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label124:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\r\n\t\t\t\t\t\t\t" . '<input type="hidden" id="stream_order_array" name="stream_order_array" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#order-stream" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['streams'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#order-movie" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label129;

label129:

echo $_['movies'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#order-series" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-youtube-tv mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['episodes'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#order-radio" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-radio mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['stations'];
goto label84;

label138:

echo ' streams in your database! This is far too many to manually order on this page and will crash your browser attempting to display them in a list, therefore manual channel ordering has been disabled.' . "\r\n" . '                    ';

if ($dd3211a322da8474) {
	goto label142;
}

echo "\t\t\t\t\t\t" . '<br/><br/><a href="channel_order?override=1" class="btn btn-danger">Continue Anyway</a>' . "\r\n\t\t\t\t\t";

label142:

echo "\t\t\t\t" . '</div>' . "\r\n" . '                ';
goto label64;

label144:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'series\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'series\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop(\'series\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom(\'series\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'series\')" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label266;

label151:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'movie\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'movie\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop(\'movie\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom(\'movie\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'movie\')" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label15;

label158:

$b62d6460eb33ea07->query('SELECT `id`, `type`, `stream_display_name`, `category_id` FROM `streams` ORDER BY `order` ASC, `stream_display_name` ASC;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label226;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label189;

	label173:

	goto label178;

	label175:

	$e6570651eec8c25e['radio'][] = $Fb9da1713bff19ce;

	label178:

	goto label180;

	label180:

	goto label185;

	label182:

	$e6570651eec8c25e['movie'][] = $Fb9da1713bff19ce;

	label185:

	goto label222;
	goto label219;

	label189:
	if (($Fb9da1713bff19ce['type'] == 1) || ($Fb9da1713bff19ce['type'] == 3)) {
		goto label219;
	}

	if ($Fb9da1713bff19ce['type'] == 2) {
		goto label182;
	}

	if ($Fb9da1713bff19ce['type'] == 4) {
		goto label175;
	}

	if (!($Fb9da1713bff19ce['type'] == 5)) {
		goto label173;
	}

	$e6570651eec8c25e['series'][] = $Fb9da1713bff19ce;
	goto label173;

	label219:

	$e6570651eec8c25e['stream'][] = $Fb9da1713bff19ce;

	label222:

	goto label224;

	label224:
}

label226:

goto label305;

label227:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="order-movie">' . "\r\n" . '                                        <div class="row">' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_movie_l" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

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

goto label151;

label266:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="order-radio">' . "\r\n" . '                                        <div class="row">' . "\r\n" . '                                            <div class="col-5">' . "\r\n" . '                                                <select multiple id="sort_radio_l" class="form-control" style="min-height:400px;">' . "\r\n" . '                                                ';

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

goto label357;

label305:

$F6edd90960a3bd9d = 'Channel Order';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label11;
}

goto label10;

label323:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div>' . "\r\n" . '                ';
goto label64;

label325:

echo '                <div class="alert alert-danger" role="alert">' . "\r\n\t\t\t\t\t" . 'You have ';
echo number_format($d353a4da8a0bb857, 0);
goto label138;

label332:

echo $_['channel_order'];
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n" . '                ';
if ((50000 < $d353a4da8a0bb857) && !$dd3211a322da8474) {
	goto label325;
}

echo "\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == 1))) {
	goto label55;
}

goto label54;

label350:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                        <ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'stream\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'stream\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop(\'stream\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom(\'stream\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'stream\')" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label227;

label357:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'radio\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'radio\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop(\'radio\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom(\'radio\')" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'radio\')" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label323;

label364:

include 'footer.php';

?>