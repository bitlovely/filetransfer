<?php


goto label640;

label1:

if (!isset(XUI::$rRequest['id'])) {
	goto label497;
}

$Bcceb4705d84ad33 = F260b7A31F021E39(XUI::$rRequest['id']);
if (!(!$Bcceb4705d84ad33 || ($Bcceb4705d84ad33['type'] != 4))) {
	goto label22;
}

e72F42A93714BA87();

label22:

goto label497;

label23:

if (!isset($Bcceb4705d84ad33['id'])) {
	goto label31;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $Bcceb4705d84ad33['id'];
echo '" />' . "\n\t\t\t\t\t\t\t";

label31:

goto label435;

label32:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="stream_source" name="stream_source[]" class="form-control" value="';

if (!isset($Bcceb4705d84ad33)) {
	goto label48;
}

echo htmlspecialchars(json_decode($Bcceb4705d84ad33['stream_source'], true)[0]);

label48:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_id">Categories</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label366;

label50:

if (!isset($Bcceb4705d84ad33)) {
	goto label59;
}

echo htmlspecialchars($Bcceb4705d84ad33['stream_icon']);

label59:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onclick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4 stream-url">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_source">';
echo $_['station_url'];
goto label32;

label63:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label80;
}

echo ' style="display: none;"';

label80:

goto label93;

label81:

echo ' <i title="In this field you can write your own custom FFmpeg command. Please note that this command will be placed after the input and before the output. If the command you will specify here is about to do changes in the output video or audio, it may require to transcode the stream. In this case, you have to use and change at least the Video/Audio Codecs using the transcoding attributes below. The custom FFmpeg command will only be used by the server(s) that take the stream from the Source." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="custom_ffmpeg" name="custom_ffmpeg" value="';

if (!isset($Bcceb4705d84ad33)) {
	goto label91;
}

echo htmlspecialchars($Bcceb4705d84ad33['custom_ffmpeg']);

label91:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="user_agent">';
goto label518;

label93:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n\t\t\t\t\t\t" . '<ol class="breadcrumb m-0">' . "\n\t\t\t\t\t\t\t" . '<li>' . "\n\t\t\t\t\t\t\t\t" . '<a href="./radios">' . "\n\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-primary waves-effect waves-light btn-sm">' . "\n\t\t\t\t\t\t\t\t\t\t";
echo $_['view_stations'];
echo "\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t" . '</ol>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($Bcceb4705d84ad33['id'])) {
	goto label418;
}

echo $_['add_radio_station'];
goto label417;

label103:

echo 'checked ';

label104:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="probesize_ondemand">';
echo $_['on_demand_probesize'];
goto label108;

label108:

echo ' <i title="Adjustable probesize for ondemand streams. Adjust this setting if you experience issues with no audio." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="probesize_ondemand" name="probesize_ondemand" value="';

if (isset($Bcceb4705d84ad33)) {
	goto label114;
}

echo '128000';
goto label635;

label114:

goto label630;

label115:

goto label118;

label116:

echo $_['restart_on_edit'];

label118:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label288;

label120:

echo $_['auto_restart'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server-network mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['servers'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_display_name">';
echo $_['station_name'];
goto label448;

label129:

echo htmlspecialchars($a0b8596a62b75ff6[2]['value']);

label135:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="cookie">';
echo $_['cookie'];
echo ' <i title="Format: key=value;" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="cookie" name="cookie" value="';
goto label613;

label140:

echo htmlspecialchars($a0b8596a62b75ff6[1]['value']);

label146:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="http_proxy">';
echo $_['http_proxy'];
goto label506;

label150:

echo $_['edit'];

label152:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label694;

label154:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="auto-restart">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="days_to_restart">';
goto label678;

label162:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset($fe93a43f53d92a4e) && in_array($Ec379295dc7029e6['id'], $Cc9b6078c1293a96))) {
		goto label181;
	}

	echo ' selected';

	label181:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="restart_on_edit">';

if (isset($Bcceb4705d84ad33['id'])) {
	goto label116;
}

echo $_['start_stream_now'];
goto label115;

label194:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="headers">';
echo $_['headers'];
echo ' <i title="FFmpeg -headers command." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="headers" name="headers" value="';

if (isset($A508fa583604eb49[19])) {
	goto label490;
}

goto label483;

label202:

if (!isset($Bcceb4705d84ad33)) {
	goto label211;
}

echo htmlspecialchars($Bcceb4705d84ad33['custom_sid']);

label211:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="custom_ffmpeg">';
echo $_['custom_ffmpeg_command'];
goto label81;

label215:

echo $_['choose'];
echo '...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([$_['monday'] => 'Monday', $_['tuesday'] => 'Tuesday', $_['wednesday'] => 'Wednesday', $_['thursday'] => 'Thursday', $_['friday'] => 'Friday', $_['saturday'] => 'Saturday', $_['sunday'] => 'Sunday'] as $ad246beea4e2bbaa) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $ad246beea4e2bbaa;
	echo '"';

	if (!in_array($ad246beea4e2bbaa, $f1b1f15f38dab369['days'])) {
		goto label247;
	}

	echo ' selected';

	label247:

	echo '>';
	echo $ad246beea4e2bbaa;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="time_to_restart">';
goto label279;

label254:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
echo $_['radio_success'];
echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label258:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";
goto label23;

label260:

$f1b1f15f38dab369 = json_decode($Bcceb4705d84ad33['auto_restart'], true);

if (isset($f1b1f15f38dab369['days'])) {
	goto label271;
}

$f1b1f15f38dab369['days'] = [];

label271:

if (isset($f1b1f15f38dab369['at'])) {
	goto label300;
}

goto label298;

label275:

echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label276:

goto label446;

label277:

echo "\t\t\t\t" . '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
goto label443;

label279:

echo $_['time_to_restart'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input id="time_to_restart" name="time_to_restart" type="text" class="form-control" value="';
echo $f1b1f15f38dab369['at'];
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
goto label649;

label288:

echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_radio" type="submit" class="btn btn-primary" value="';

if (isset($Bcceb4705d84ad33['id'])) {
	goto label150;
}

echo $_['add'];
goto label152;
goto label150;

label298:

$f1b1f15f38dab369['at'] = '06:00';

label300:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="days_to_restart" name="days_to_restart[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="';
goto label215;

label302:

foreach (F964B9222b35adDD() as $f155fef57262b32a) {
	goto label308;

	label308:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($Bcceb4705d84ad33)) {
		goto label331;
	}

	if (!in_array($Bcceb4705d84ad33['id'], json_decode($f155fef57262b32a['bouquet_radios'], true))) {
		goto label329;
	}

	echo 'selected ';

	label329:

	goto label331;

	label331:

	echo 'value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo htmlspecialchars($f155fef57262b32a['bouquet_name']);
	goto label342;

	label342:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label345;

	label345:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">' . "\n" . '                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="notes">';
echo $_['notes'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">';
goto label422;

label352:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-options">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="direct_source">';
echo $_['direct_source'];
echo ' <i title="Don\'t run source through XUI, just redirect instead." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_source" id="direct_source" type="checkbox" ';

if (!isset($Bcceb4705d84ad33)) {
	goto label104;
}

if (!($Bcceb4705d84ad33['direct_source'] == 1)) {
	goto label104;
}

goto label103;

label366:

foreach (F769E3F0c739d1a6('radio') as $Dbcac322b4274e46) {
	goto label376;

	label373:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label410;

	label376:

	echo '                                                            <option ';

	if (!isset($Bcceb4705d84ad33)) {
		goto label402;
	}

	if (!in_array(intval($Dbcac322b4274e46['id']), json_decode($Bcceb4705d84ad33['category_id'], true))) {
		goto label400;
	}

	echo 'selected ';

	label400:

	goto label402;

	label402:

	echo 'value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label373;

	label410:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">' . "\n" . '                                                            <strong>New Categories:</strong> <span id="category_new"></span>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="bouquets">';
echo $_['bouquets'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label302;

label417:

goto label420;

label418:

echo $Bcceb4705d84ad33['stream_display_name'];

label420:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t";
goto label460;

label422:

if (!isset($Bcceb4705d84ad33)) {
	goto label431;
}

echo htmlspecialchars($Bcceb4705d84ad33['notes']);

label431:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label352;

label435:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />' . "\n" . '                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['advanced'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#auto-restart" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-clock-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label120;

label443:

echo $_['radio_info_1'];
echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label446:

goto label258;

label447:

goto label254;

label448:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="';

if (!isset($Bcceb4705d84ad33)) {
	goto label458;
}

echo htmlspecialchars($Bcceb4705d84ad33['stream_display_name']);

label458:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_icon">Station Logo</label>' . "\n" . '                                                    <div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_icon" name="stream_icon" value="';
goto label50;

label460:
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == 0)) {
	goto label447;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == 1)) {
	goto label277;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == 2))) {
	goto label276;
}

echo "\t\t\t\t" . '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
echo $_['radio_info_2'];
goto label275;

label483:

echo htmlspecialchars($B3b6abb455e6de61['headers']['argument_default_value']);
goto label496;

label490:

echo htmlspecialchars($A508fa583604eb49[19]['value']);

label496:

goto label154;

label497:

$Cc9b6078c1293a96 = [];
$B3b6abb455e6de61 = b20d33B2749adFeC();
$E23b1ca1f188e5ac = [
	[
	'id'     => 'source',
	'parent' => '#',
	'text'   => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Online</strong>',
	'icon'   => 'mdi mdi-play',
	'state'  => ['opened' => true]
],
	[
	'id'     => 'offline',
	'parent' => '#',
	'text'   => '<strong class=\'btn btn-secondary waves-effect waves-light btn-xs\'>Offline</strong>',
	'icon'   => 'mdi mdi-stop',
	'state'  => ['opened' => true]
]
];

if (isset($Bcceb4705d84ad33)) {
	goto label671;
}

goto label657;

label506:

echo ' <i title="Format: ip:port" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="http_proxy" name="http_proxy" value="';

if (isset($a0b8596a62b75ff6[2])) {
	goto label517;
}

echo htmlspecialchars($B3b6abb455e6de61['proxy']['argument_default_value']);
goto label135;

label517:

goto label129;

label518:

echo $_['user_agent'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="user_agent" name="user_agent" value="';

if (isset($a0b8596a62b75ff6[1])) {
	goto label140;
}

echo htmlspecialchars($B3b6abb455e6de61['user_agent']['argument_default_value']);
goto label146;
goto label140;

label532:

$ecee4a1c28d26a20 = B25f6F50Dfa04eB7(XUI::$rRequest['id']);

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	goto label542;

	label542:

	if (isset($ecee4a1c28d26a20[intval($Ec379295dc7029e6['id'])])) {
		goto label553;
	}

	$f6cad74ab6fb4eea = 'offline';
	goto label598;

	label553:

	if ($ecee4a1c28d26a20[intval($Ec379295dc7029e6['id'])]['parent_id'] != 0) {
		goto label570;
	}

	goto label567;

	label565:

	goto label609;

	label567:

	$f6cad74ab6fb4eea = 'source';
	goto label580;

	label570:

	$f6cad74ab6fb4eea = intval($ecee4a1c28d26a20[intval($Ec379295dc7029e6['id'])]['parent_id']);

	label580:

	goto label582;

	label582:

	if (!$ecee4a1c28d26a20[intval($Ec379295dc7029e6['id'])]['on_demand']) {
		goto label598;
	}

	$Cc9b6078c1293a96[] = intval($Ec379295dc7029e6['id']);

	label598:

	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => $f6cad74ab6fb4eea,
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
	goto label565;

	label609:
}

label611:

$F6edd90960a3bd9d = 'Radio Stations';
goto label63;

label613:

if (isset($a0b8596a62b75ff6[17])) {
	goto label623;
}

echo htmlspecialchars($B3b6abb455e6de61['cookie']['argument_default_value']);
goto label194;

label623:

echo htmlspecialchars($a0b8596a62b75ff6[17]['value']);
goto label194;

label630:

echo htmlspecialchars($Bcceb4705d84ad33['probesize_ondemand']);

label635:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="custom_sid">';
echo $_['custom_channel_sid'];
echo ' <i title="Here you can specify the SID of the channel in order to work with the epg on the enigma2 devices. You have to specify the code with the \':\' but without the first number, 1 or 4097 . Example: if we have this code:  \'1:0:1:13f:157c:13e:820000:0:0:0:2097\' then you have to add on this field:  \':0:1:13f:157c:13e:820000:0:0:0:" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="custom_sid" name="custom_sid" value="';
goto label202;

label640:

include 'session.php';
include 'functions.php';

if (e6d500E19634D513()) {
	goto label648;
}

E72F42a93714BA87();

label648:

goto label1;

label649:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="load-balancing">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="servers">';
echo $_['server_tree'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="server_tree"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="on_demand">On-Demand Servers</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <select name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label162;

label657:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => 'offline',
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
}

goto label611;

label671:

$a0b8596a62b75ff6 = B2BE0B935a31DF18(XUI::$rRequest['id']);
goto label532;

label678:

echo $_['days_to_restart'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
$f1b1f15f38dab369 = [
	'days' => [],
	'at'   => '06:00'
];

if (!isset($Bcceb4705d84ad33)) {
	goto label300;
}

if (!strlen($Bcceb4705d84ad33['auto_restart'])) {
	goto label300;
}

goto label260;

label694:

include 'footer.php';

?>