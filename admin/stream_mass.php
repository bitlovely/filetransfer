<?php


goto label57;

label1:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="time_to_restart">Time to Restart</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input disabled id="time_to_restart" name="time_to_restart" type="text" class="form-control" value="';
echo $f1b1f15f38dab369['at'];
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="load-balancing">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" data-name="server_tree" class="activate" name="c_server_tree" id="c_server_tree">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="server_tree">Server Tree</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="server_tree"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="col-md-1"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="server_type">Server Type</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <select disabled name="server_type" id="server_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['SET' => 'SET SERVERS', 'ADD' => 'ADD SELECTED', 'DEL' => 'DELETE SELECTED'] as $ce0840c647e1bbc7 => $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label78;

label16:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="headers" name="c_headers">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="headers">Headers</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" disabled class="form-control" id="headers" name="headers" value="';
echo htmlspecialchars($b5337d8a535cf6dd['headers']['argument_default_value']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="transcode_profile_id" name="c_transcode_profile_id">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="transcode_profile_id" disabled id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option selected value="0">Transcoding Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Cf9848d22b37a744 as $b376970f4d4df746) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($b376970f4d4df746['profile_id']);
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label290;

label39:

$F6edd90960a3bd9d = 'Mass Edit Streams';
include 'header.php';
echo '<div class="wrapper boxed-layout-xl"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label335;
}

goto label334;

label57:

include 'session.php';
include 'functions.php';

if (E6d500E19634D513()) {
	goto label65;
}

E72F42A93714Ba87();

label65:

goto label238;

label66:

foreach (['Disabled', 'FFMPEG', 'PHP'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="tv_archive_duration">Timeshift Days</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input disabled type="text" class="form-control text-center" id="tv_archive_duration" name="tv_archive_duration" value="0" />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="tv_archive_duration" name="c_tv_archive_duration">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="col-md-1"></div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="restart_on_edit">Restart on Edit</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_stream" type="submit" class="btn btn-primary" value="Edit Streams" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label339;

label78:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="col-md-1"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="on_demand">On-Demand Servers</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <select disabled name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="tv_archive_server_id" name="c_tv_archive_server_id">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="tv_archive_server_id">Timeshift Server</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="tv_archive_server_id" id="tv_archive_server_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="">Timeshift Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo htmlspecialchars($Ec379295dc7029e6['server_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label109;

label109:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="vframes_server_id" name="c_vframes_server_id">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="vframes_server_id">Thumbnail Server</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="vframes_server_id" id="vframes_server_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="">Thumbnails Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo htmlspecialchars($Ec379295dc7029e6['server_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="llod" data-type="switch" name="c_llod">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="llod">Low Latency On-Demand</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="llod" id="llod" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label66;

label129:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <select disabled name="bouquets_type" id="bouquets_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['SET', 'ADD', 'DEL'] as $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $A7d54b094ae83c95;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="gen_timestamps" data-type="switch" name="c_gen_timestamps">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="gen_timestamps">Generate PTS</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="gen_timestamps" id="gen_timestamps" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="read_native">Native Frames</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="read_native" data-type="switch" name="c_read_native">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="stream_all" data-type="switch" name="c_stream_all">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="stream_all">Stream All Codecs</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="stream_all" id="stream_all" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="allow_record">Allow Recording</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_record" id="allow_record" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="allow_record" data-type="switch" name="c_allow_record">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="direct_source" data-type="switch" name="c_direct_source">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="direct_source">Direct Source</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="direct_proxy">Direct Stream</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="direct_proxy" data-type="switch" name="c_direct_proxy">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="delay_minutes" name="c_delay_minutes">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="delay_minutes">Minute Delay</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" disabled class="form-control text-center" id="delay_minutes" name="delay_minutes" value="0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="probesize_ondemand">On Demand Probesize</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" disabled class="form-control text-center" id="probesize_ondemand" name="probesize_ondemand" value="128000">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="probesize_ondemand" name="c_probesize_ondemand">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="fps_restart" data-type="switch" name="c_fps_restart">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="fps_restart">Restart on FPS Drop</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="fps_restart" id="fps_restart" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="fps_threshold">FPS Threshold %</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" disabled class="form-control text-center" id="fps_threshold" name="fps_threshold" value="90">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="fps_threshold" name="c_fps_threshold">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="rtmp_output" data-type="switch" name="c_rtmp_output">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="rtmp_output">Output RTMP</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="rtmp_output" id="rtmp_output" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="custom_sid">Custom Channel SID</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" disabled class="form-control" id="custom_sid" name="custom_sid" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="custom_sid" name="c_custom_sid">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="user_agent" name="c_user_agent">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="user_agent">User Agent</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" disabled class="form-control" id="user_agent" name="user_agent" value="';
goto label269;

label141:

echo '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="category_search" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>All Categories</option>' . "\n" . '                                                    <option value="-1">No Categories</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label164;
	}

	echo ' selected';

	label164:

	echo '>';
	echo htmlspecialchars($Dbcac322b4274e46['category_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-2 col-6">' . "\n" . '                                                <select id="stream_filter" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>No Filter</option>' . "\n" . '                                                    <option value="1">Online</option>' . "\n" . '                                                    <option value="2">Down</option>' . "\n" . '                                                    <option value="3">Stopped</option>' . "\n" . '                                                    <option value="4">Starting</option>' . "\n" . '                                                    <option value="5">On Demand</option>' . "\n" . '                                                    <option value="6">Direct</option>' . "\n" . '                                                    <option value="7">Timeshift</option>' . "\n" . '                                                    <option value="8">Looping</option>' . "\n" . '                                                    <option value="9">Has EPG</option>' . "\n" . '                                                    <option value="10">No EPG</option>' . "\n" . '                                                    <option value="11">Adaptive Link</option>' . "\n" . '                                                    <option value="12">Title Sync</option>' . "\n" . '                                                    <option value="13">Transcoding</option>' . "\n" . '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label202;

label175:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label184;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Mass edit of streams was successfully executed!' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label184:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="streams" id="streams" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Streams</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#auto-restart" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-clock-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Auto Restart</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server-network mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Servers</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-selection">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_search" value="" placeholder="Search Streams...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3 col-6">' . "\n" . '                                                <select id="stream_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>All Servers</option>' . "\n" . '                                                    <option value="-1">No Servers</option>' . "\n" . '                                                    ';

foreach (C6A90bFcd425Eb63() as $Ec379295dc7029e6) {
	echo '                                                    <option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                                    ';
}

goto label141;

label202:

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label212;
	}

	echo ' selected';

	label212:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-mass" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                                        <th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Stream Name</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Category</th>' . "\n" . '                                                        <th>Server</th>' . "\n" . '                                                        <th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="category_id" name="c_category_id">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="category_id">Select Categories</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo htmlspecialchars($Dbcac322b4274e46['category_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label303;

label238:

$F771d40e8cf51e59 = f769e3F0c739D1A6('live');
$b5337d8a535cf6dd = B20D33b2749AdfEC();
$Cf9848d22b37a744 = f93e9343c3d7fD99();
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

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	$E23b1ca1f188e5ac[] = [
		'id'     => intval($Ec379295dc7029e6['id']),
		'parent' => 'offline',
		'text'   => htmlspecialchars($Ec379295dc7029e6['server_name']),
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
}

goto label39;

label269:

echo htmlspecialchars($b5337d8a535cf6dd['user_agent']['argument_default_value']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="http_proxy" name="c_http_proxy">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="http_proxy">HTTP Proxy</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" disabled class="form-control" id="http_proxy" name="http_proxy" value="';
echo htmlspecialchars($b5337d8a535cf6dd['proxy']['argument_default_value']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="cookie" name="c_cookie">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="cookie">Cookie</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" disabled class="form-control" id="cookie" name="cookie" value="';
echo htmlspecialchars($b5337d8a535cf6dd['cookie']['argument_default_value']);
goto label16;

label290:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="auto-restart">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="days_to_restart" name="c_days_to_restart">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="days_to_restart">Days to Restart</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
$f1b1f15f38dab369 = [
	'days' => [],
	'at'   => '06:00'
];
echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled id="days_to_restart" name="days_to_restart[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $ad246beea4e2bbaa) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $ad246beea4e2bbaa;
	echo '">';
	echo $ad246beea4e2bbaa;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1;

label303:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <select disabled name="category_id_type" id="category_id_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['SET', 'ADD', 'DEL'] as $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $A7d54b094ae83c95;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="bouquets" name="c_bouquets">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="bouquets">Select Bouquets</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F964b9222b35ADdD() as $f155fef57262b32a) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($f155fef57262b32a['id']);
	echo '">';
	echo htmlspecialchars($f155fef57262b32a['bouquet_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label129;

label334:

echo ' style="display: none;"';

label335:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Mass Edit Streams <small id="selected_count"></small></h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t";
goto label175;

label339:

include 'footer.php';

?>