<?php


goto label94;

label1:

echo $_['servers'];
echo '</span>' . "\n" . '                                        </a>' . "\n" . '                                    </li>' . "\n" . '                                </ul>' . "\n" . '                                <div class="tab-content b-0 mb-0 pt-0">' . "\n" . '                                    <div class="tab-pane" id="stream-selection">' . "\n" . '                                        <div class="row">' . "\n" . '                                            <div class="col-md-2 col-6">' . "\n" . '                                                <input type="text" class="form-control" id="stream_search" value="" placeholder="';
echo $_['search_episodes'];
echo '...">' . "\n" . '                                            </div>' . "\n" . '                                            <div class="col-md-3 col-6">' . "\n" . '                                                <select id="series_id" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="">';
echo $_['all_series'];
goto label123;

label10:

echo $_['mass_edit_info'];
echo '                                                </p>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n" . '                                                        <input type="checkbox" class="activate" data-name="serie_name" name="c_serie_name">' . "\n" . '                                                        <label></label>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="serie_name">';
echo $_['series_name'];
echo '</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n" . '                                                        <select disabled name="serie_name" id="serie_name" class="form-control" data-toggle="select2">' . "\n" . '                                                            ';

foreach ($d02ef9ae10a41939 as $Dbcac322b4274e46) {
	echo '                                                            <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['title'];
	echo '</option>' . "\n" . '                                                            ';
}

goto label187;

label28:

echo $_['target_container'];
echo '</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n" . '                                                        <select disabled name="target_container" id="target_container" class="form-control" data-toggle="select2">' . "\n" . '                                                            ';

foreach (['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'] as $Bd8c8f05432c0333) {
	echo '                                                            <option value="';
	echo $Bd8c8f05432c0333;
	echo '">';
	echo $Bd8c8f05432c0333;
	echo '</option>' . "\n" . '                                                            ';
}

echo '                                                        </select>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n" . '                                                        <input type="checkbox" class="activate" data-name="transcode_profile_id" name="c_transcode_profile_id">' . "\n" . '                                                        <label></label>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="transcode_profile_id">';
goto label103;

label42:

echo '                                                </select>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="col-md-2 col-6">' . "\n" . '                                                <select id="filter" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>';
echo $_['no_filter'];
echo '</option>' . "\n" . '                                                    <option value="1">';
echo $_['encoded'];
goto label240;

label49:

echo '                <div class="card">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <form action="#" method="POST">' . "\n" . '                            <input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="streams" id="streams" value="" />' . "\n" . '                            <div id="basicwizard">' . "\n" . '                                <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n" . '                                    <li class="nav-item">' . "\n" . '                                        <a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n" . '                                            <i class="mdi mdi-play mr-1"></i>' . "\n" . '                                            <span class="d-none d-sm-inline">';
echo $_['episodes'];
echo '</span>' . "\n" . '                                        </a>' . "\n" . '                                    </li>' . "\n" . '                                    <li class="nav-item">' . "\n" . '                                        <a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n" . '                                            <i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n" . '                                            <span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n" . '                                        </a>' . "\n" . '                                    </li>' . "\n" . '                                    <li class="nav-item">' . "\n" . '                                        <a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n" . '                                            <i class="mdi mdi-server-network mr-1"></i>' . "\n" . '                                            <span class="d-none d-sm-inline">';
goto label1;

label57:

echo '</th>' . "\n" . '                                                        <th>';
echo $_['server'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['status'];
echo '</th>' . "\n" . '                                                    </tr>' . "\n" . '                                                </thead>' . "\n" . '                                                <tbody></tbody>' . "\n" . '                                            </table>' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="tab-pane" id="stream-details">' . "\n" . '                                        <div class="row">' . "\n" . '                                            <div class="col-12">' . "\n" . '                                                <p class="sub-header">' . "\n" . '                                                    ';
goto label10;

label65:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-12">' . "\n" . '                <div class="page-title-box">' . "\n" . '                    <div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n" . '                    <h4 class="page-title">';
echo $_['mass_edit_episodes'];
echo ' <small id="selected_count"></small></h4>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>     ' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-xl-12">' . "\n" . '                ';
goto label227;

label72:

echo '</a>' . "\n" . '                                            </li>' . "\n" . '                                        </ul>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="tab-pane" id="load-balancing">' . "\n" . '                                        <div class="row">' . "\n" . '                                            <div class="col-12">' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n" . '                                                        <input type="checkbox" data-name="server_tree" class="activate" name="c_server_tree" id="c_server_tree">' . "\n" . '                                                        <label></label>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="server_tree">';
echo $_['server_tree'];
echo '</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n" . '                                                        <div id="server_tree"></div>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="col-md-1"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="server_type">Server Type</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <select disabled name="server_type" id="server_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['SET' => 'SET SERVERS', 'ADD' => 'ADD SELECTED', 'DEL' => 'DELETE SELECTED'] as $ce0840c647e1bbc7 => $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label179;

label87:

echo '                                                        </select>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                            </div> ' . "\n" . '                                        </div> ' . "\n" . '                                        <ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n" . '                                            </li>' . "\n" . '                                            <li class="nextb list-inline-item float-right">' . "\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label72;

label94:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label102;
}

e72f42A93714BA87();

label102:

goto label153;

label103:

echo $_['transcoding_profile'];
echo '</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n" . '                                                        <select name="transcode_profile_id" disabled id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n" . '                                                            <option selected value="0">';
echo $_['transcoding_disabled'];
echo '</option>' . "\n" . '                                                            ';

foreach (F93e9343c3d7FD99() as $b376970f4d4df746) {
	echo '                                                            <option value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	echo '</option>' . "\n" . '                                                            ';
}

goto label87;

label123:

echo '</option>' . "\n" . '                                                    ';

foreach ($d02ef9ae10a41939 as $F8e69f8a7a0c470c) {
	echo '                                                    <option value="';
	echo $F8e69f8a7a0c470c['id'];
	echo '">';
	echo $F8e69f8a7a0c470c['title'];
	echo '</option>' . "\n" . '                                                    ';
}

echo '                                                </select>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="col-md-3 col-6">' . "\n" . '                                                <select id="episode_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>All Servers</option>' . "\n" . '                                                    <option value="-1">No Servers</option>' . "\n" . '                                                    ';

foreach (c6a90bFCd425Eb63() as $Ec379295dc7029e6) {
	echo '                                                    <option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                                    ';
}

goto label42;

label153:

$d02ef9ae10a41939 = F5E03449e4b2215c();
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

$F6edd90960a3bd9d = 'Mass Edit Episodes';
goto label209;

label172:

echo $_['prev'];
echo '</a>' . "\n" . '                                            </li>' . "\n" . '                                            <li class="nextb list-inline-item float-right">' . "\n" . '                                                <input name="submit_stream" type="submit" class="btn btn-primary" value="';
echo $_['edit_episodes'];
echo '" />' . "\n" . '                                            </li>' . "\n" . '                                        </ul>' . "\n" . '                                    </div>' . "\n" . '                                </div> ' . "\n" . '                            </div> ' . "\n" . '                        </form>' . "\n" . '                    </div> ' . "\n" . '                </div> ' . "\n" . '            </div> ' . "\n" . '        </div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n";
goto label272;

label179:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="col-md-1"></div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="reencode_on_edit">';
echo $_['reencode_on_edit'];
echo '</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <input name="reencode_on_edit" id="reencode_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />' . "\n" . '                                                    </div>' . "\n" . '                                                    <div class="col-md-1"></div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="reprocess_tmdb">';
echo $_['reprocess_tmdb_data'];
echo '</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <input name="reprocess_tmdb" id="reprocess_tmdb" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                            </div> ' . "\n" . '                                        </div> ' . "\n" . '                                        <ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">';
goto label172;

label187:

echo '                                                        </select>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n" . '                                                        <input type="checkbox" class="activate" data-name="direct_source" data-type="switch" name="c_direct_source">' . "\n" . '                                                        <label></label>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="direct_source">';
echo $_['direct_source'];
echo '</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="direct_proxy">Direct Stream</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="direct_proxy" data-type="switch" name="c_direct_proxy">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n" . '                                                        <input type="checkbox" class="activate" data-name="movie_symlink" data-type="switch" name="c_movie_symlink">' . "\n" . '                                                        <label></label>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="movie_symlink">';
echo $_['create_symlink'];
goto label201;

label194:

echo '                                                </select>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="col-md-1 col-6">' . "\n" . '                                                <button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">' . "\n" . '                                                    <i class="mdi mdi-selection"></i>' . "\n" . '                                                </button>' . "\n" . '                                            </div>' . "\n" . '                                            <table id="datatable-mass" class="table table-borderless mb-0">' . "\n" . '                                                <thead class="bg-light">' . "\n" . '                                                    <tr>' . "\n" . '                                                        <th class="text-center">';
echo $_['id'];
echo '</th>' . "\n" . '                                                        <th class="text-center">Image</th>' . "\n" . '                                                        <th>';
echo $_['name'];
goto label57;

label201:

echo '</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <input name="movie_symlink" id="movie_symlink" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="remove_subtitles">';
echo $_['remove_subtitles'];
echo '</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <input name="remove_subtitles" id="remove_subtitles" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                    </div>' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n" . '                                                        <input type="checkbox" class="activate" data-name="remove_subtitles" data-type="switch" name="c_remove_subtitles">' . "\n" . '                                                        <label></label>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n" . '                                                        <input type="checkbox" class="activate" data-name="read_native" data-type="switch" name="c_read_native">' . "\n" . '                                                        <label></label>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="read_native">';
echo $_['native_frames'];
echo '</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary text-center">' . "\n" . '                                                        <input type="checkbox" class="activate" data-name="target_container" name="c_target_container">' . "\n" . '                                                        <label></label>' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="target_container">';
goto label28;

label209:

include 'header.php';
echo '<div class="wrapper boxed-layout-xl"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label226;
}

echo ' style="display: none;"';

label226:

goto label65;

label227:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label239;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    ';
echo $_['mass_edit_episodes_success'];
echo '                </div>' . "\n" . '                ';

label239:

goto label49;

label240:

echo '</option>' . "\n" . '                                                    <option value="2">';
echo $_['encoding'];
echo '</option>' . "\n" . '                                                    <option value="3">';
echo $_['down'];
echo '</option>' . "\n" . '                                                    <option value="4">';
goto label248;

label248:

echo $_['ready'];
echo '</option>' . "\n" . '                                                    <option value="5">';
echo $_['direct'];
echo '</option>' . "\n" . '                                                    <option value="7">Transcoding</option>' . "\n" . '                                                </select>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="col-md-1 col-6">' . "\n" . '                                                <select id="show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                                    <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label264;
	}

	echo ' selected';

	label264:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n" . '                                                    ';
}

goto label194;

label272:

include 'footer.php';

?>