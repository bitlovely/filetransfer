<?php


goto label108;

label1:

goto label3;

label2:

echo '                <div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    The playlist you selected has more than 500 results, the review page will not show all results.' . "\n" . '                </div>' . "\n" . '                ';

label3:

goto label370;

label4:

if (isset($ac8a8c4b32f5a746)) {
	goto label366;
}

echo '                        <input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\n" . '                        <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />' . "\n" . '                        <input type="hidden" name="type" value=\'';
echo $A7d54b094ae83c95;
echo '\' />' . "\n" . '                        <div id="basicwizard">' . "\n" . '                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n" . '                                <li class="nav-item">' . "\n" . '                                    <a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n" . '                                        <i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n" . '                                        <span class="d-none d-sm-inline">Options</span>' . "\n" . '                                    </a>' . "\n" . '                                </li>' . "\n" . '                                <li class="nav-item">' . "\n" . '                                    <a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n" . '                                        <i class="mdi mdi-server-network mr-1"></i>' . "\n" . '                                        <span class="d-none d-sm-inline">Servers</span>' . "\n" . '                                    </a>' . "\n" . '                                </li>' . "\n" . '                            </ul>' . "\n" . '                            <div class="tab-content b-0 mb-0 pt-0">' . "\n" . '                                <div class="tab-pane" id="advanced-options">' . "\n" . '                                    <div class="row">' . "\n" . '                                        <div class="col-12">' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="duplicates">Show Potential Duplicates <i title="This option will remove all potential duplicate results from the review page, if you do not select this, duplicates will be unchecked by default so you are able to check them to include them anyway." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="duplicates" id="duplicates" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="col-md-6">' . "\n" . '                                                    <input type="file" id="m3u_file" name="m3u_file" style="padding-top: 5px;" accept=".m3u, .m3u8">' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            ';

if ($A7d54b094ae83c95 == 1) {
	goto label794;
}

goto label408;

label14:

foreach ($Cf9848d22b37a744 as $b376970f4d4df746) {
	echo '                                                        <option value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	echo '</option>' . "\n" . '                                                        ';
}

echo '                                                    </select>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-4 col-form-label" for="delay_minutes">Minute Delay <i title="Delay stream by X minutes. Will not work with on demand streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-2">' . "\n" . '                                                    <input type="text" class="form-control" id="delay_minutes" name="delay_minutes" value="">' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="user_agent">User Agent</label>' . "\n" . '                                                <div class="col-md-9">' . "\n" . '                                                    <input type="text" class="form-control" id="user_agent" name="user_agent" value="';
echo htmlspecialchars($b5337d8a535cf6dd['user_agent']['argument_default_value']);
echo '">' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="http_proxy">HTTP Proxy <i title="Format: ip:port" class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-9">' . "\n" . '                                                    <input type="text" class="form-control" id="http_proxy" name="http_proxy" value="';
goto label714;

label34:

echo intval($A7d54b094ae83c95);
echo '" method="POST" id="stream_form" data-parsley-validate="">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n" . '                    ';

if (!isset($ac8a8c4b32f5a746)) {
	goto label44;
}

echo '                    <div class="page-title-right">' . "\n\t\t\t\t\t\t" . '<ol class="breadcrumb m-0">' . "\n\t\t\t\t\t\t\t" . '<li>' . "\n\t\t\t\t\t\t\t\t" . '<input name="submit_stream" type="submit" class="btn btn-primary" value="Import Selected" />' . "\n\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t" . '</ol>' . "\n\t\t\t\t\t" . '</div>' . "\n" . '                    ';

label44:

goto label308;

label45:

echo '                                                    </select>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            ';

label46:

echo '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="restart_on_edit">';

if ($A7d54b094ae83c95 == 1) {
	goto label398;
}

echo 'Auto-Encode Movies';
goto label397;

label52:

goto label54;

label53:

echo '                        <div class="form-group row">' . "\n" . '                            <div class="col-md-12">' . "\n" . '                                <h4 class="header-title">Stream Import</h4>' . "\n" . '                                <p class="sub-header" style="margin-bottom: 0;">' . "\n" . '                                    To import a stream, ensure the checkbox next to it is selected. You will need to go to each page for that page of streams to be included in the import.' . "\n" . '                                </p>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        ';

label54:

echo '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '        ';
goto label822;

label56:

if (isset(XUI::$rRequest['type'])) {
	goto label803;
}

if (isset(XUI::$rRequest['type'])) {
	goto label66;
}

$A7d54b094ae83c95 = 1;
goto label802;

label66:

goto label796;

label67:
if (!(!isset($ac8a8c4b32f5a746) || !$ac8a8c4b32f5a746)) {
	goto label819;
}

$E23b1ca1f188e5ac = [
	[
	'id'     => 'source',
	'parent' => '#',
	'text'   => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Live Stream</strong>',
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

goto label813;

label90:

if ($A7d54b094ae83c95 == 1) {
	goto label95;
}

echo '                                            <th>TMDb Results</th>' . "\n" . '                                            ';
goto label416;

label95:

echo '                                            <th>EPG Search</th>' . "\n" . '                                            <th class="text-center">Language</th>' . "\n" . '                                            ';
goto label416;

label97:

echo '                        <div class="row">' . "\n" . '                            <div class="col-12">' . "\n" . '                                <table id="datatable" class="table table-striped table-borderless dt-responsive nowrap" data-count="';
echo count($ac8a8c4b32f5a746);
echo '">' . "\n" . '                                    <thead>' . "\n" . '                                        <tr>' . "\n" . '                                            <th class="text-center">Add</th>' . "\n" . '                                            ';

if ($A7d54b094ae83c95 == 1) {
	goto label1264;
}

echo '                                            <th class="text-center">Image</th>' . "\n" . '                                            <th>Movie Name</th>' . "\n" . '                                            ';
goto label1263;

label108:

include 'session.php';
include 'functions.php';

if (e6d500e19634d513()) {
	goto label116;
}

e72F42a93714BA87();

label116:

goto label56;

label117:

echo '                </div>' . "\n" . '                ';

label118:

goto label1;

label119:

echo '                <div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    No results were found in the playlist.' . "\n" . '                </div>' . "\n" . '                ';
goto label1;

label121:

$ac8a8c4b32f5a746 = NULL;

label122:

goto label1077;

label123:

$cbcf0bbd5e139431 = STATUS_INVALID_FILE;
goto label1077;

label126:

$e02ff34f7d898a7b = b4018DE13163b303($_FILES['m3u_file']['tmp_name']);

foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
	goto label137;

	label137:

	$B654d1aff7429f67 = $D577b2a7889a5fb6->getExtTags()[0];

	if (!$B654d1aff7429f67) {
		goto label182;
	}

	$A7ca171405b19571 = $D577b2a7889a5fb6->getPath();

	if ($A7d54b094ae83c95 == 1) {
		goto label157;
	}

	$f4297700901e0590 = ['mp4', 'mkv', 'mov', 'avi', 'mpg', 'mpeg', 'flv', 'wmv', 'm4v'];
	goto label155;

	label155:

	goto label158;

	label157:

	$f4297700901e0590 = ['ts', 'm3u8', 'm3u', 'mpd', 'ism', ''];

	label158:

	if (!in_array(strtolower(pathinfo(explode('?', $A7ca171405b19571)[0])['extension']), $f4297700901e0590)) {
		goto label182;
	}

	goto label209;

	label182:

	goto label270;

	label184:

	goto label268;

	label186:

	if ($A7d54b094ae83c95 == 1) {
		goto label241;
	}

	$ac8a8c4b32f5a746[] = ['url' => $A7ca171405b19571, 'title' => $B654d1aff7429f67->getTitle() ?: '', 'category' => $B654d1aff7429f67->getAttribute('group-title') ?: '', 'exists' => $a2442da801f46da6];
	goto label268;
	goto label241;

	label209:

	$a2442da801f46da6 = in_array(str_replace('https://', 'http://', $A7ca171405b19571), $Ec0879f16d0cdddb);
	if (!(!$a2442da801f46da6 || XUI::$rRequest['duplicates'])) {
		goto label268;
	}

	if (count($ac8a8c4b32f5a746) < 500) {
		goto label186;
	}

	$cbcf0bbd5e139431 = STATUS_TOO_MANY_RESULTS;
	goto label272;
	goto label184;

	label241:

	$ac8a8c4b32f5a746[] = ['url' => $A7ca171405b19571, 'logo' => $B654d1aff7429f67->getAttribute('tvg-logo') ?: '', 'tvg_id' => $B654d1aff7429f67->getAttribute('tvg-id') ?: '', 'title' => $B654d1aff7429f67->getTitle() ?: '', 'category' => $B654d1aff7429f67->getAttribute('group-title') ?: '', 'exists' => $a2442da801f46da6];

	label268:

	goto label182;

	label270:
}

label272:

if (!(count($ac8a8c4b32f5a746) == 0)) {
	goto label122;
}

$cbcf0bbd5e139431 = STATUS_NO_SOURCES;
goto label121;

label282:

echo '"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label298;
}

echo ' style="display: none;"';

label298:

goto label401;

label299:

echo $_['native_frames'];
echo '</label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-3 col-form-label" for="remove_subtitles">';
echo $_['remove_existing_subtitles'];
echo ' <i title="';
echo $_['episode_tooltip_3'];
goto label742;

label308:

echo "\t\t\t\t\t" . '<h4 class="page-title">';
echo [1 => 'Stream', 2 => 'Movie'][$A7d54b094ae83c95];
echo ' Review</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n" . '        ';

if (!isset($ac8a8c4b32f5a746)) {
	goto label822;
}

echo '        <div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n" . '                        <div class="form-group row mb-4">' . "\n" . '                            <div class="col-md-12">' . "\n" . '                                <h4 class="header-title">Category Creation</h4>' . "\n" . '                                <p class="sub-header">' . "\n" . '                                    You can create categories by typing them in the below box, this will allow you to quickly add categories to the imported results.' . "\n" . '                                </p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-12">' . "\n" . '                                <select name="category_selection[]" id="category_selection" class="form-control col-md-12 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                    ';
goto label340;

label318:

$b52154585ae961fd['review'] = [];
$b52154585ae961fd['custom_sid'] = $b52154585ae961fd['notes'] = '';
$F05acfe4a87b8eb0 = [];

foreach (F769e3f0C739D1a6([1 => 'live', 2 => 'movie'][intval($A7d54b094ae83c95)]) as $Dbcac322b4274e46) {
	$F05acfe4a87b8eb0[] = $Dbcac322b4274e46['id'];
}

goto label853;

label340:

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo '                                    <option selected value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        ';

if ($A7d54b094ae83c95 == 1) {
	goto label53;
}

echo '                        <div class="form-group row">' . "\n" . '                            <div class="col-md-12">' . "\n" . '                                <h4 class="header-title">Movie Import</h4>' . "\n" . '                                <p class="sub-header" style="margin-bottom: 0;">' . "\n" . '                                    To import a movie, ensure the checkbox next to it is selected. You will need to go to each page for that page of movies to be included in the import.' . "\n" . '                                </p>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        ';
goto label52;

label357:

echo '">' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            ';

label358:

echo '                                        </div> ' . "\n" . '                                    </div> ' . "\n" . '                                    <ul class="list-inline wizard mb-0">' . "\n" . '                                        <li class="prevb list-inline-item">' . "\n" . '                                            <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                        </li>' . "\n" . '                                        <li class="nextb list-inline-item float-right">' . "\n" . '                                            <a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n" . '                                        </li>' . "\n" . '                                    </ul>' . "\n" . '                                </div>' . "\n" . '                                <div class="tab-pane" id="load-balancing">' . "\n" . '                                    <div class="row">' . "\n" . '                                        <div class="col-12">' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="servers">Server Tree</label>' . "\n" . '                                                <div class="col-md-9">' . "\n" . '                                                    <div id="server_tree"></div>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            ';

if (!($A7d54b094ae83c95 == 1)) {
	goto label46;
}

echo '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="on_demand">On-Demand Servers</label>' . "\n" . '                                                <div class="col-md-9">' . "\n" . '                                                    <select name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                                        ';
goto label374;

label365:

goto label811;

label366:

echo '                        <input type="hidden" name="post_data" value=\'';
echo $b52154585ae961fd;
echo '\' />' . "\n" . '                        <input type="hidden" name="type" value=\'';
goto label1098;

label370:

goto label372;

label371:

echo '                <div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    Invalid playlist selected, please ensure the playlist is in M3U format.' . "\n" . '                </div>' . "\n" . '                ';

label372:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n" . '                        ';
goto label4;

label374:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo '                                                        <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                                        ';
}

echo '                                                    </select>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="tv_archive_server_id">Timeshift Server</label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <select name="tv_archive_server_id" id="tv_archive_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                        <option value="0">Disabled</option>' . "\n" . '                                                    </select>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-3 col-form-label" for="tv_archive_duration">Timeshift Days</label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input type="text" class="form-control" id="tv_archive_duration" name="tv_archive_duration" value="0">' . "\n" . '                                                    </select>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="vframes_server_id">Thumbnails</label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <select name="vframes_server_id" id="vframes_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                        <option value="0">Disabled</option>' . "\n" . '                                                    </select>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-3 col-form-label" for="llod">Low Latency On-Demand</label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <select name="llod" id="llod" class="form-control" data-toggle="select2">' . "\n" . '                                                        ';

foreach (['Disabled', 'LLOD v2 - FFMPEG', 'LLOD v3 - PHP'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo '                                                        <option value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n" . '                                                        ';
}

goto label45;

label397:

goto label399;

label398:

echo 'Auto-Start Streams';

label399:

echo '</label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                        </div> ' . "\n" . '                                    </div> ' . "\n" . '                                    <ul class="list-inline wizard mb-0">' . "\n" . '                                        <li class="prevb list-inline-item">' . "\n" . '                                            <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                        </li>' . "\n" . '                                        <li class="nextb list-inline-item float-right">' . "\n" . '                                            <input name="submit_stream" type="submit" class="btn btn-primary" value="Review" />' . "\n" . '                                        </li>' . "\n" . '                                    </ul>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        ';
goto label365;

label401:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n" . '        <form';

if (isset($ac8a8c4b32f5a746)) {
	goto label406;
}

echo ' enctype="multipart/form-data"';

label406:

echo ' action="./review?type=';
goto label34;

label408:

echo '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="direct_source">';
echo $_['direct_source'];
echo ' <i title="';
echo $_['episode_tooltip_1'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-3 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the movie through your servers. This will consume bandwidth but won\'t require the movie to be saved to your servers permanently." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="read_native">';
goto label299;

label416:

echo '                                            <th></th>' . "\n" . '                                        </tr>' . "\n" . '                                    </thead>' . "\n" . '                                    <tbody>' . "\n" . '                                        ';
$df6991d59f367c7e = 0;

foreach ($ac8a8c4b32f5a746 as $fe93a43f53d92a4e) {
	goto label643;

	label422:

	echo '" type="button" title="View EPG API" class="tooltip btn btn-secondary btn-xs waves-effect waves-light"><i class="text-white far fa-circle"></i></button>' . "\n" . '                                                <a href="javascript: void(0);" title="';
	echo htmlspecialchars($fe93a43f53d92a4e['url']);
	echo '" class="tooltip-left btn btn-primary btn-xs waves-effect waves-light"><i class="text-white mdi mdi-link"></i></a>' . "\n" . '                                            </td>' . "\n" . '                                            ';

	label429:

	echo '                                        </tr>' . "\n" . '                                        ';
	goto label463;

	label432:

	echo '                                        <tr id="stream_';
	echo $df6991d59f367c7e;
	echo '" data-id="';
	echo $df6991d59f367c7e;
	echo '">' . "\n" . '                                            <td class="text-center">' . "\n" . '                                                <div class="checkbox checkbox-single checkbox-offset ';
	goto label465;

	label439:

	echo $df6991d59f367c7e;
	echo '">';
	echo $B080674c55093935;
	echo '</td>' . "\n" . '                                            <td>' . "\n" . '                                                <div class="input-group">' . "\n" . '                                                    <input type="text" class="form-control" id="name_';
	echo $df6991d59f367c7e;
	goto label525;

	label446:

	if (!$fb719dae9595b9fa) {
		goto label452;
	}

	$b26127289d025fb0[] = $df6991d59f367c7e;

	label452:

	if (0 < strlen($fe93a43f53d92a4e['logo'])) {
		goto label626;
	}

	$B080674c55093935 = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'\'><img class=\'lazyload\' src=\'\' /></a>';
	goto label624;

	label463:

	goto label671;

	label465:

	if ($fe93a43f53d92a4e['exists']) {
		goto label472;
	}

	echo 'checkbox-primary';
	goto label563;

	label472:

	echo 'checkbox-warning';
	goto label563;

	label475:

	echo htmlspecialchars($fe93a43f53d92a4e['title']);
	echo '<br/>';
	echo htmlspecialchars($fe93a43f53d92a4e['url']);
	echo '" class="tooltip-left btn btn-primary btn-xs waves-effect waves-light"><i class="text-white mdi mdi-information-variant"></i></a>' . "\n" . '                                            </td>' . "\n" . '                                            ';
	goto label429;
	goto label637;

	label491:

	goto label496;

	label493:

	echo 'scanEPG(' . $df6991d59f367c7e . ');';

	label496:

	echo '" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-magnify text-white"></i></a>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                            </td>' . "\n" . '                                            <td>' . "\n" . '                                                <select id="category_id_';
	goto label569;

	label499:

	echo '" class="form-control epg_api" data-toggle="select2"></select>' . "\n" . '                                            </td>' . "\n" . '                                            <td style="width: 80px;">' . "\n" . '                                                <input type="text" class="form-control text-center" id="epg_lang_';
	echo $df6991d59f367c7e;
	echo '" readonly value=""></input>' . "\n" . '                                            </td>' . "\n" . '                                            <td class="text-center">' . "\n" . '                                                <button onClick="clearEPG(this);" id="clear_epg_';
	echo $df6991d59f367c7e;
	echo '" data-id="';
	goto label550;

	label506:

	echo '" class="form-control select2-multiple bouquet" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                                    ';

	foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
		echo '                                                    <option value="';
		echo $f155fef57262b32a['id'];
		echo '">';
		echo $f155fef57262b32a['bouquet_name'];
		echo '</option>' . "\n" . '                                                    ';
	}

	echo '                                                </select>' . "\n" . '                                            </td>' . "\n" . '                                            ';

	if ($A7d54b094ae83c95 == 1) {
		goto label637;
	}

	goto label617;

	label525:

	echo '" value="';
	echo htmlspecialchars($fe93a43f53d92a4e['title']);
	echo '">' . "\n" . '                                                    <div class="input-group-append">' . "\n" . '                                                        <a href="javascript: void(0);" onClick="';

	if ($A7d54b094ae83c95 == 1) {
		goto label493;
	}

	echo 'scanTMDb(' . $df6991d59f367c7e . ');';
	goto label491;

	label541:

	echo '" type="checkbox" class="activate ';

	if ($fe93a43f53d92a4e['exists']) {
		goto label547;
	}

	echo ' checked';

	label547:

	echo '">' . "\n" . '                                                    <label></label>' . "\n" . '                                                </div>' . "\n" . '                                            </td>' . "\n" . '                                            <td class="text-center" id="picon_';
	goto label439;

	label550:

	echo $df6991d59f367c7e;
	echo '" type="button" title="Clear EPG" class="tooltip btn btn-secondary btn-xs waves-effect waves-light"><i class="text-white fas fa-times"></i></button>' . "\n" . '                                                <button onClick="viewEPG(this);" id="view_epg_';
	echo $df6991d59f367c7e;
	echo '" data-id="';
	echo $df6991d59f367c7e;
	goto label422;

	label557:

	echo '                                                </select>' . "\n" . '                                            </td>' . "\n" . '                                            <td>' . "\n" . '                                                <select id="bouquets_';
	echo $df6991d59f367c7e;
	echo '" data-id="';
	echo $df6991d59f367c7e;
	goto label506;

	label563:

	echo '">' . "\n" . '                                                    <input id="check_';
	echo $df6991d59f367c7e;
	echo '" data-id="';
	echo $df6991d59f367c7e;
	goto label541;

	label569:

	echo $df6991d59f367c7e;
	echo '" class="form-control select2-multiple category_id" data-id="';
	echo $df6991d59f367c7e;
	echo '" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                                    ';

	foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
		goto label578;

		label578:

		echo '                                                    <option ';

		if (!isset($fb719dae9595b9fa)) {
			goto label600;
		}

		if (!intval($fb719dae9595b9fa['id'] == $Dbcac322b4274e46['id'])) {
			goto label597;
		}

		echo 'selected ';

		label597:

		goto label600;

		label600:

		echo 'value="';
		echo $Dbcac322b4274e46['id'];
		echo '">';
		echo $Dbcac322b4274e46['category_name'];
		goto label609;

		label609:

		echo '</option>' . "\n" . '                                                    ';
		goto label613;

		label613:
	}

	goto label557;

	label617:

	echo '                                            <td>' . "\n" . '                                                <select id="tmdb_search_';
	echo $df6991d59f367c7e;
	echo '" data-id="';
	echo $df6991d59f367c7e;
	echo '" class="form-control tmdb_search" data-toggle="select2"></select>' . "\n" . '                                            </td>' . "\n" . '                                            <td class="text-center">' . "\n" . '                                                <a href="javascript: void(0);" title="';
	goto label475;

	label624:

	goto label635;

	label626:

	$e5455ef9ce45b712[] = $df6991d59f367c7e;
	$B080674c55093935 = '<a href=\'javascript: void(0);\' onClick=\'openImage(this);\' data-src=\'./resize?maxw=512&maxh=512&url=' . $fe93a43f53d92a4e['logo'] . '\'><img class=\'lazyload\' src=\'./resize?maxw=96&maxh=32&url=' . $fe93a43f53d92a4e['logo'] . '\' /></a>';

	label635:

	goto label432;

	label637:

	echo '                                            <td>' . "\n" . '                                                <select id="epg_api_';
	echo $df6991d59f367c7e;
	echo '" data-id="';
	echo $df6991d59f367c7e;
	goto label499;

	label643:

	$df6991d59f367c7e++;
	$fb719dae9595b9fa = NULL;
	$ea1e6ba580c86486 = 0;

	foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
		similar_text($Dbcac322b4274e46['category_name'], $fe93a43f53d92a4e['category'], $C7b14ffca13af0a3);
		if (!(($ea1e6ba580c86486 < $C7b14ffca13af0a3) && (70 <= $C7b14ffca13af0a3))) {
			goto label667;
		}

		$fb719dae9595b9fa = $Dbcac322b4274e46;
		$ea1e6ba580c86486 = $C7b14ffca13af0a3;

		label667:
	}

	goto label446;

	label671:
}

goto label810;

label674:

if (isset(XUI::$rRequest['post_data'])) {
	goto label1078;
}

if (!isset($_FILES['m3u_file'])) {
	goto label1077;
}

unset(XUI::$rRequest['submit_stream']);
$b52154585ae961fd = base64_encode(json_encode(XUI::$rRequest));
goto label774;

label694:

if ($A7d54b094ae83c95 == 1) {
	goto label737;
}

$B9869413eae86beb = API::bB0Bf26077F756B6($b52154585ae961fd);
$cbcf0bbd5e139431 = $B9869413eae86beb['status'];

if (!($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label736;
}

header('Location: ./movies?status=' . STATUS_SUCCESS);
goto label735;

label714:

echo htmlspecialchars($b5337d8a535cf6dd['proxy']['argument_default_value']);
echo '">' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="cookie">Cookie <i title="Format: key=value;" class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-9">' . "\n" . '                                                    <input type="text" class="form-control" id="cookie" name="cookie" value="';
echo htmlspecialchars($b5337d8a535cf6dd['cookie']['argument_default_value']);
echo '">' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="headers">Headers <i title="FFmpeg -headers command." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-9">' . "\n" . '                                                    <input type="text" class="form-control" id="headers" name="headers" value="';
echo htmlspecialchars($b5337d8a535cf6dd['headers']['argument_default_value']);
goto label357;

label735:

exit();

label736:

goto label67;

label737:

$B9869413eae86beb = API::c880AAaF942BB5ee($b52154585ae961fd);
goto label1249;

label742:

echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="remove_subtitles" id="remove_subtitles" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Sometimes, in order to make a stream compatible with most devices, it must be transcoded. Please note that the transcode will only be applied to the server(s) that take the stream directly from the source, all other servers attached to the transcoding server will not transcode the stream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-9">' . "\n" . '                                                    <select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n" . '                                                        <option selected value="0">Transcoding Disabled</option>' . "\n" . '                                                        ';

foreach ($Cf9848d22b37a744 as $b376970f4d4df746) {
	echo '                                                        <option value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	echo '</option>' . "\n" . '                                                        ';
}

echo '                                                    </select>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="tmdb_language">TMDb Language</label>' . "\n" . '                                                <div class="col-md-9">' . "\n" . '                                                    <select name="tmdb_language" id="tmdb_language" class="form-control" data-toggle="select2">' . "\n" . '                                                        ';

foreach ($b991f823f0dd214d as $Bb672d1983256a93 => $rLanguage) {
	echo '                                                        <option';

	if (!($Bb672d1983256a93 == $f1dcaed925076e67['tmdb_language'])) {
		goto label766;
	}

	echo ' selected';

	label766:

	echo ' value="';
	echo $Bb672d1983256a93;
	echo '">';
	echo $rLanguage;
	echo '</option>' . "\n" . '                                                        ';
}

goto label792;

label774:

$F771d40e8cf51e59 = f769E3f0c739D1a6([1 => 'live', 2 => 'movie'][intval($A7d54b094ae83c95)]);
$Df5cd7b5dc4cc10c = f964B9222b35AdDD();
$Ec0879f16d0cdddb = [];
$F1a9d7720adbf27a = [];
$b62d6460eb33ea07->query('SELECT `stream_source` FROM `streams` WHERE `type` = ?;', $A7d54b094ae83c95);
goto label1193;

label792:

echo '                                                    </select>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            ';
goto label358;

label794:

echo '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="gen_timestamps">Generate PTS <i title="Allow FFmpeg to generate presentation timestamps for you to achieve better synchronization with the stream codecs. In some streams this can cause de-sync." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="gen_timestamps" id="gen_timestamps" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-4 col-form-label" for="read_native">Native Frames <i title="You should always read live streams as non-native frames. However if you are streaming static video files, set this to true otherwise the encoding process will fail." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-2">' . "\n" . '                                                    <input name="read_native" id="read_native" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="stream_all">Stream All Codecs <i title="This option will stream all codecs from your stream. Some streams have more than one audio/video/subtitles channels." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="stream_all" id="stream_all" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-4 col-form-label" for="allow_record">Allow Recording</label>' . "\n" . '                                                <div class="col-md-2">' . "\n" . '                                                    <input name="allow_record" id="allow_record" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="direct_source">Direct Source <i title="Redirect clients to the source directly. Do not use if you want to keep your source secure." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="direct_source" id="direct_source" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the live stream through your servers via UDP. MPEG-TS and HLS is supported as an input format, however only MPEG-TS is supported as an output format to clients.<br/><br/>Experimental! This may not work for all streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-2">' . "\n" . '                                                    <input name="direct_proxy" id="direct_proxy" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="rtmp_output">Output RTMP <i title="Enable RTMP output for this channel." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <input name="rtmp_output" id="rtmp_output" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                </div>' . "\n" . '                                                <label class="col-md-4 col-form-label" for="probesize_ondemand">On Demand Probesize <i title="Adjustable probesize for ondemand streams. Adjust this setting if you experience issues with no audio." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-2">' . "\n" . '                                                    <input type="text" class="form-control" id="probesize_ondemand" name="probesize_ondemand" value="128000">' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                            <div class="form-group row mb-4">' . "\n" . '                                                <label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Sometimes, in order to make a stream compatible with most devices, it must be transcoded. Please note that the transcode will only be applied to the server(s) that take the stream directly from the source, all other servers attached to the transcoding server will not transcode the stream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                <div class="col-md-3">' . "\n" . '                                                    <select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n" . '                                                        <option selected value="0">Transcoding Disabled</option>' . "\n" . '                                                        ';
goto label14;

label796:

$A7d54b094ae83c95 = intval(XUI::$rRequest['type']);

label802:

goto label674;

label803:

$A7d54b094ae83c95 = intval(XUI::$rRequest['type']);
goto label674;

label810:

echo '                                    </tbody>' . "\n" . '                                </table>' . "\n" . '                            </div>' . "\n" . '                        </div> ' . "\n" . '                        ';

label811:

echo '                    </div> ' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '        </form>' . "\n" . '    </div>' . "\n" . '</div>' . "\n";
goto label1267;

label813:

$b5337d8a535cf6dd = b20d33b2749adFec();
$Cf9848d22b37a744 = F93E9343c3D7fD99();

label819:

$e5455ef9ce45b712 = $b26127289d025fb0 = [];
goto label845;

label822:

echo "\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_INVALID_FILE)) {
	goto label371;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_TOO_MANY_RESULTS)) {
	goto label2;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_NO_SOURCES)) {
	goto label119;
}

goto label1089;

label845:

$F6edd90960a3bd9d = 'Review';
include 'header.php';
echo '<div class="wrapper';

if (isset($ac8a8c4b32f5a746)) {
	goto label282;
}

echo ' boxed-layout-ext';
goto label282;

label853:

$Bbaf8e3ba7b2daf9 = [];

foreach (XUI::$rRequest['category_selection'] as $Dbcac322b4274e46) {
	if (!(!in_array($Dbcac322b4274e46, $F05acfe4a87b8eb0) && !is_numeric($Dbcac322b4274e46))) {
		goto label887;
	}

	$B9869413eae86beb = API::Ef92c3ebB0E25473(['category_type' => [1 => 'live', 2 => 'movie'][intval($A7d54b094ae83c95)], 'category_name' => $Dbcac322b4274e46]);
	$Bbaf8e3ba7b2daf9[$Dbcac322b4274e46] = $B9869413eae86beb['data']['insert_id'];

	label887:
}

foreach (XUI::$rRequest as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	goto label895;

	label895:

	if (!(substr($Bb672d1983256a93, 0, 7) == 'import_')) {
		goto label1072;
	}

	$Abcb228699a7f743 = intval(explode('import_', $Bb672d1983256a93)[1]);

	if (!XUI::$rRequest['import_' . $Abcb228699a7f743]) {
		goto label1072;
	}

	$F771d40e8cf51e59 = [];

	foreach (json_decode(XUI::$rRequest['category_id_' . $Abcb228699a7f743], true) as $Dbcac322b4274e46) {
		if (!is_numeric($Dbcac322b4274e46) && isset($Bbaf8e3ba7b2daf9[$Dbcac322b4274e46])) {
			goto label959;
		}

		if (!is_numeric($Dbcac322b4274e46)) {
			goto label956;
		}

		$F771d40e8cf51e59[] = intval($Dbcac322b4274e46);

		label956:

		goto label965;

		label959:

		$F771d40e8cf51e59[] = intval($Bbaf8e3ba7b2daf9[$Dbcac322b4274e46]);

		label965:
	}

	goto label969;

	label969:

	if ($A7d54b094ae83c95 == 1) {
		goto label1008;
	}

	$b52154585ae961fd['review'][] = [
		'stream_source'       => [XUI::$rRequest['url_' . $Abcb228699a7f743]],
		'stream_display_name' => XUI::$rRequest['name_' . $Abcb228699a7f743],
		'tmdb_id'             => !empty(XUI::$rRequest['tmdb_id_' . $Abcb228699a7f743]) ? XUI::$rRequest['tmdb_id_' . $Abcb228699a7f743] : NULL,
		'bouquets'            => json_decode(XUI::$rRequest['bouquets_' . $Abcb228699a7f743], true),
		'category_id'         => $F771d40e8cf51e59
	];
	goto label1072;

	label1008:

	goto label1010;

	label1010:

	$b52154585ae961fd['review'][] = [
		'stream_source'       => [XUI::$rRequest['url_' . $Abcb228699a7f743]],
		'stream_icon'         => XUI::$rRequest['icon_' . $Abcb228699a7f743],
		'stream_display_name' => XUI::$rRequest['name_' . $Abcb228699a7f743],
		'epg_lang'            => NULL,
		'channel_id'          => !empty(XUI::$rRequest['channel_id_' . $Abcb228699a7f743]) ? XUI::$rRequest['channel_id_' . $Abcb228699a7f743] : NULL,
		'epg_api'             => !empty(XUI::$rRequest['epg_type_' . $Abcb228699a7f743]) ? XUI::$rRequest['epg_type_' . $Abcb228699a7f743] : 0,
		'epg_id'              => !empty(XUI::$rRequest['epg_id_' . $Abcb228699a7f743]) ? XUI::$rRequest['epg_id_' . $Abcb228699a7f743] : 0,
		'bouquets'            => json_decode(XUI::$rRequest['bouquets_' . $Abcb228699a7f743], true),
		'category_id'         => $F771d40e8cf51e59
	];

	label1072:

	goto label1074;

	label1074:
}

goto label694;

label1077:

goto label67;

label1078:

$b52154585ae961fd = json_decode(base64_decode(XUI::$rRequest['post_data']), true);
goto label318;

label1089:

if ($ac8a8c4b32f5a746) {
	goto label118;
}

echo '                <div class="alert alert-info" role="alert">' . "\n" . '                    The Review page is for playlists of less than 500 items, you should use the normal M3U Import function for larger playlists or reduce the playlist. The review page will cut off at 500 results and not process any more if you upload a larger playlist anyway.' . "\n" . '                    ';

if (!($A7d54b094ae83c95 == 0)) {
	goto label1097;
}

echo '                    <br/><br/>If you have an XMLTV EPG file for this playlist, you should add it first and rescan your EPG so channels are automatically matched up against the EPG. You can however do this later through the EPG review tool.' . "\n" . '                    ';

label1097:

goto label117;

label1098:

echo $A7d54b094ae83c95;
echo '\' />' . "\n" . '                        ';
$df6991d59f367c7e = 0;

foreach ($ac8a8c4b32f5a746 as $fe93a43f53d92a4e) {
	goto label1105;

	label1105:

	$df6991d59f367c7e++;
	echo '<input type="hidden" name="name_' . $df6991d59f367c7e . '" id="name_i_' . $df6991d59f367c7e . '" value="" />';
	echo '<input type="hidden" name="category_id_' . $df6991d59f367c7e . '" id="category_id_i_' . $df6991d59f367c7e . '" value="" />';
	echo '<input type="hidden" name="bouquets_' . $df6991d59f367c7e . '" id="bouquets_i_' . $df6991d59f367c7e . '" value="" />';
	echo '<input type="hidden" name="icon_' . $df6991d59f367c7e . '" id="icon_' . $df6991d59f367c7e . '" value="' . htmlspecialchars($fe93a43f53d92a4e['logo']) . '" />';
	goto label1163;

	label1135:

	echo '<input type="hidden" id="tvg_id_' . $df6991d59f367c7e . '" value="' . htmlspecialchars($fe93a43f53d92a4e['tvg_id']) . '" />';
	echo '<input type="hidden" name="epg_type_' . $df6991d59f367c7e . '" id="epg_type_' . $df6991d59f367c7e . '" value="0" />';
	echo '<input type="hidden" name="epg_id_' . $df6991d59f367c7e . '" id="epg_id_' . $df6991d59f367c7e . '" value="0" />';
	echo '<input type="hidden" name="channel_id_' . $df6991d59f367c7e . '" id="channel_id_' . $df6991d59f367c7e . '" value="0" />';
	goto label1161;

	label1161:

	goto label1190;

	label1163:

	echo '<input type="hidden" name="url_' . $df6991d59f367c7e . '" value="' . htmlspecialchars($fe93a43f53d92a4e['url']) . '" />';
	echo '<input type="hidden" name="import_' . $df6991d59f367c7e . '" id="import_' . $df6991d59f367c7e . '" value="0" />';

	if ($A7d54b094ae83c95 == 1) {
		goto label1135;
	}

	echo '<input type="hidden" name="tmdb_id_' . $df6991d59f367c7e . '" id="tmdb_id_' . $df6991d59f367c7e . '" value="" />';
	goto label1161;
	goto label1135;

	label1190:
}

goto label97;

label1193:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	foreach (json_decode($Fb9da1713bff19ce['stream_source'], true) as $A7ca171405b19571) {
		if (in_array($A7ca171405b19571, $Ec0879f16d0cdddb)) {
			goto label1219;
		}

		$Ec0879f16d0cdddb[] = str_replace('https://', 'http://', $A7ca171405b19571);

		label1219:
	}
}

$Cc94312f13005bd4 = [];
if (empty($_FILES['m3u_file']['tmp_name']) || !in_array(strtolower(pathinfo($_FILES['m3u_file']['name'], PATHINFO_EXTENSION)), ['m3u', 'm3u8'])) {
	goto label123;
}

$ac8a8c4b32f5a746 = [];
goto label126;

label1249:

$cbcf0bbd5e139431 = $B9869413eae86beb['status'];

if (!($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label1262;
}

header('Location: ./streams?status=' . STATUS_SUCCESS);
exit();

label1262:

goto label67;

label1263:

goto label1265;

label1264:

echo '                                            <th class="text-center">Icon</th>' . "\n" . '                                            <th>Stream Name</th>' . "\n" . '                                            ';

label1265:

echo '                                            <th>Category</th>' . "\n" . '                                            <th>Bouquets</th>' . "\n" . '                                            ';
goto label90;

label1267:

include 'footer.php';

?>