<?php


goto label263;

label1:

$E23b1ca1f188e5ac = [
	[
	'id'     => 'source',
	'parent' => '#',
	'text'   => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Active</strong>',
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
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => 'offline',
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
}

$F6edd90960a3bd9d = 'Mass Edit Movies';
include 'header.php';
goto label215;

label18:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F964B9222b35addd() as $f155fef57262b32a) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <select disabled name="bouquets_type" id="bouquets_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['SET', 'ADD', 'DEL'] as $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $A7d54b094ae83c95;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label325;

label43:

echo '</th>' . "\n" . '                                                        <th class="text-center">TMDb</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
echo $_['mass_edit_info'];
echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="category_id" name="c_category_id">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="category_id">Select Categories</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo htmlspecialchars($Dbcac322b4274e46['category_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label311;

label65:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1">';
echo $_['encoded'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="2">';
echo $_['encoding'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="3">';
goto label206;

label73:

$F771d40e8cf51e59 = f769E3f0c739D1A6('movie');

if (!isset(XUI::$rRequest['submit_stream'])) {
	goto label105;
}

$B9869413eae86beb = API::E7A12F961Bb49Bc2(XUI::$rRequest);
$cbcf0bbd5e139431 = $B9869413eae86beb['status'];

if (!($cbcf0bbd5e139431 == 0)) {
	goto label105;
}

goto label101;

label94:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label332;

label101:

header('Location: ./movies_mass?status=0');
exit();

label105:

$Cf9848d22b37a744 = F93E9343c3d7Fd99();
goto label1;

label109:

echo $_['movies'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server-network mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['servers'];
goto label125;

label118:

echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_stream" type="submit" class="btn btn-primary" value="';
echo $_['edit_movies'];
echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label355;

label125:

echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-selection">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_search" value="" placeholder="Search Movies...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3 col-6">' . "\n" . '                                                <select id="movie_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>All Servers</option>' . "\n" . '                                                    <option value="-1">No Servers</option>' . "\n" . '                                                    ';

foreach (C6A90BfcD425EB63() as $Ec379295dc7029e6) {
	echo '                                                    <option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                                    ';
}

echo '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="category_search" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_categories'];
goto label233;

label146:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['mass_edit_movies'];
echo ' <small id="selected_count"></small></h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label164;
}

goto label160;

label160:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
echo $_['mass_edit_movies_success'];
echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label164:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="streams" id="streams" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label109;

label166:

echo $_['transcoding_profile'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="transcode_profile_id" disabled id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option selected value="0">';
echo $_['transcoding_disabled'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Cf9848d22b37a744 as $b376970f4d4df746) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label94;

label184:

foreach (['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'] as $Bd8c8f05432c0333) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Bd8c8f05432c0333;
	echo '">';
	echo $Bd8c8f05432c0333;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="remove_subtitles">';
echo $_['remove_subtitles'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="remove_subtitles" id="remove_subtitles" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="remove_subtitles" data-type="switch" name="c_remove_subtitles">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="transcode_profile_id" name="c_transcode_profile_id">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="transcode_profile_id">';
goto label166;

label198:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="movie_symlink" id="movie_symlink" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="read_native">';
echo $_['native_frames'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="read_native" data-type="switch" name="c_read_native">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="target_container" name="c_target_container">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="target_container">';
echo $_['target_container'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="target_container" id="target_container" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label184;

label206:

echo $_['down'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="4">';
echo $_['ready'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="5">';
echo $_['direct'];
goto label272;

label215:

echo '<div class="wrapper boxed-layout-xl"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label231;
}

echo ' style="display: none;"';

label231:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
goto label146;

label233:

echo '</option>' . "\n" . '                                                    <option value="-1">No Categories</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label253;
	}

	echo ' selected';

	label253:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="filter" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['no_filter'];
goto label65;

label263:

include 'session.php';
include 'functions.php';

if (e6D500e19634d513()) {
	goto label271;
}

E72F42A93714ba87();

label271:

goto label73;

label272:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="6">';
echo $_['no_tmdb_match'];
echo '</option>' . "\n" . '                                                    <option value="8">Transcoding</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label286;
	}

	echo ' selected';

	label286:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label303;

label294:

echo $_['category'];
echo '</th>' . "\n" . '                                                        <th>';
echo $_['servers'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['status'];
goto label43;

label303:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-mass" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n" . '                                                        <th class="text-center">Image</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
goto label294;

label311:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <select disabled name="category_id_type" id="category_id_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['SET', 'ADD', 'DEL'] as $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $A7d54b094ae83c95;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="bouquets" name="c_bouquets">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="bouquets">';
echo $_['select_bouquets'];
goto label18;

label325:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="direct_source" data-type="switch" name="c_direct_source">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="direct_source">';
echo $_['direct_source'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="direct_proxy">Direct Stream</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="direct_proxy" data-type="switch" name="c_direct_proxy">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="movie_symlink" data-type="switch" name="c_movie_symlink">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="movie_symlink">';
echo $_['create_symlink'];
goto label198;

label332:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="load-balancing">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" data-name="server_tree" class="activate" name="c_server_tree" id="c_server_tree">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="server_tree">';
echo $_['server_tree'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="server_tree"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="col-md-1"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="server_type">Server Type</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <select disabled name="server_type" id="server_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['SET' => 'SET SERVERS', 'ADD' => 'ADD SELECTED', 'DEL' => 'DELETE SELECTED'] as $ce0840c647e1bbc7 => $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label347;

label347:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="reencode_on_edit">';
echo $_['reencode_on_edit'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="reencode_on_edit" id="reencode_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="reprocess_tmdb">';
echo $_['reprocess_tmdb_data'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="reprocess_tmdb" id="reprocess_tmdb" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label118;

label355:

include 'footer.php';

?>