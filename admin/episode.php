<?php


goto label585;

label1:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

if (isset($e61e6dcee1252fa2)) {
	goto label531;
}

$ab7f15d256034e8c = '';
goto label538;
goto label531;

label8:

echo "\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="current_path">';
echo $_['current_path'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="current_path" name="current_path" class="form-control" value="/">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-primary waves-effect waves-light" type="button" id="changeDir"><i class="mdi mdi-chevron-right"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4"';

if (!isset($d344a66178d455b1)) {
	goto label225;
}

echo 'style=\'display:none;\'';
goto label225;

label18:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="remove_subtitles">';
echo $_['remove_existing_subtitles'];
echo ' <i title="';
echo $_['episode_tooltip_3'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="remove_subtitles" id="remove_subtitles" type="checkbox" ';
goto label134;

label26:

if (!isset($d344a66178d455b1)) {
	goto label34;
}

echo "\t\t\t\t\t\t\t\t" . '<div class="float-right">' . "\n\t\t\t\t\t\t\t\t\t" . '<input id="select_folder" type="button" class="btn btn-info" value="';
echo $_['add_this_directory'];
echo '" />' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t";

label34:

goto label683;

label35:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="load-balancing">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="servers">';
echo $_['server_tree'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="server_tree"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="restart_on_edit">';
goto label460;

label43:

if ($d344a66178d455b1) {
	goto label48;
}

echo $_['add_single'];
goto label307;

label48:

echo $_['add_multiple'];
goto label307;

label51:

echo ' <i title="';
echo $_['episode_tooltip_7'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($e61e6dcee1252fa2)) {
	goto label295;
}

if (!(intval($e61e6dcee1252fa2['transcode_profile_id']) == 0)) {
	goto label295;
}

goto label294;

label68:

echo htmlspecialchars($e61e6dcee1252fa2['custom_sid']);

label73:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

label74:

$A1cfd5fd317b5c02 = '';
goto label701;

label76:

$F6edd90960a3bd9d = 'Episode';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label419;
}

echo ' style="display: none;"';
goto label419;

label95:

$e61e6dcee1252fa2['properties'] = json_decode($e61e6dcee1252fa2['movie_properties'], true);
$bfeef7b0d44ec01c = B25f6F50DfA04EB7(XUI::$rRequest['id']);

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	if (isset($bfeef7b0d44ec01c[intval($Ec379295dc7029e6['id'])])) {
		goto label121;
	}

	$f6cad74ab6fb4eea = 'offline';
	goto label122;

	label121:

	$f6cad74ab6fb4eea = 'source';

	label122:

	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => $f6cad74ab6fb4eea,
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
}

label133:

goto label76;

label134:

if (!isset($e61e6dcee1252fa2)) {
	goto label144;
}

if (!($e61e6dcee1252fa2['remove_subtitles'] == 1)) {
	goto label144;
}

echo 'checked ';

label144:

goto label385;

label145:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => 'offline',
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
}

if (!isset(XUI::$rRequest['multi'])) {
	goto label507;
}

if (E589A4bf54A2DAD1('adv', 'import_episodes')) {
	goto label506;
}

exit();
goto label506;

label171:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_episode" type="submit" class="btn btn-primary" value="';

if (isset($e61e6dcee1252fa2)) {
	goto label560;
}

goto label557;

label179:
if (!(empty(XUI::$rRequest['sid']) && !empty(XUI::$rRequest['id']))) {
	goto label734;
}

$b62d6460eb33ea07->query('SELECT `series_id` FROM `streams_episodes` WHERE `stream_id` = ?;', intval(XUI::$rRequest['id']));

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label214;
}

XUI::$rRequest['sid'] = intval($b62d6460eb33ea07->get_row()['series_id']);

label214:

goto label734;

label215:

echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

if (isset($d344a66178d455b1)) {
	goto label252;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#episode-information" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['information'];
goto label251;

label225:

echo '>' . "\n\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="search">';
echo $_['search_directory'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="search" name="search" class="form-control" placeholder="';
echo $_['filter_directory'];
goto label377;

label232:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea rows="6" class="form-control" id="plot" name="plot">';

if (!isset($e61e6dcee1252fa2)) {
	goto label243;
}

echo htmlspecialchars($e61e6dcee1252fa2['properties']['plot']);

label243:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="release_date">';
goto label841;

label245:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t";
goto label635;

label247:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="series_name">';
echo $_['series_name'];
goto label327;

label251:

echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

label252:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['advanced'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server-network mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label685;

label257:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the movie through your servers. This will consume bandwidth but won\'t require the movie to be saved to your servers permanently. Make sure to set the correct target container." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_proxy" id="direct_proxy" type="checkbox" ';

if (!isset($e61e6dcee1252fa2)) {
	goto label696;
}

if (!($e61e6dcee1252fa2['direct_proxy'] == 1)) {
	goto label696;
}

echo 'checked ';
goto label696;

label269:

if (!isset($e61e6dcee1252fa2)) {
	goto label278;
}

echo htmlspecialchars($e61e6dcee1252fa2['season']);

label278:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="episode">';
echo $_['episode_number'];
goto label805;

label282:

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

if (isset($e61e6dcee1252fa2)) {
	goto label508;
}

if (e589A4bF54A2dAD1('adv', 'add_episode')) {
	goto label293;
}

exit();

label293:

goto label145;

label294:

echo 'selected ';

label295:

echo 'value="0">';
echo $_['transcoding_disabled'];
goto label860;

label299:

echo "\t\t\t\t\t\t\t\t\t\t\t\t";

if (isset($d344a66178d455b1)) {
	goto label856;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_subtitles">';
echo $_['subtitle_location'];
goto label563;

label307:

goto label310;

label308:

echo $e61e6dcee1252fa2['stream_display_name'];

label310:

goto label594;

label311:

$Fb9da1713bff19ce = $b62d6460eb33ea07->get_row();
$e61e6dcee1252fa2['episode'] = intval($Fb9da1713bff19ce['episode_num']);
$e61e6dcee1252fa2['season'] = intval($Fb9da1713bff19ce['season_num']);

label326:

goto label95;

label327:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="series_name" name="series_name" value="';
echo $F955f269a1230501['title'];
echo '" readonly>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="season_num">';
echo $_['season_number'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="season_num" name="season_num" placeholder="" value="';
goto label269;

label335:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($e61e6dcee1252fa2)) {
	goto label489;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
goto label486;

label342:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t" . '<div id="file-browser" class="mfp-hide white-popup-block">' . "\n\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_id">';
echo $_['server_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<select id="server_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t";

foreach (C6a90bfcd425EB63() as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label367;
	}

	echo ' selected';

	label367:

	echo '>';
	echo htmlspecialchars($Ec379295dc7029e6['server_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t";
}

goto label8;

label377:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-warning waves-effect waves-light" type="button" onClick="clearSearch()"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-primary waves-effect waves-light" type="button" id="doSearch"><i class="mdi mdi-magnify"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th width="20px"></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['directory'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-files" class="table">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th width="20px"></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['filename'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t";
goto label26;

label385:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

if (isset($d344a66178d455b1)) {
	goto label74;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="target_container">';
echo $_['target_container'];
echo ' <i title="';
goto label648;

label394:

if (!isset($e61e6dcee1252fa2)) {
	goto label404;
}

if (!($e61e6dcee1252fa2['read_native'] == 1)) {
	goto label404;
}

echo 'checked ';

label404:

goto label542;

label405:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_display_name">';
echo $_['episode_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="';

if (!isset($e61e6dcee1252fa2)) {
	goto label1;
}

echo htmlspecialchars($e61e6dcee1252fa2['stream_display_name']);
goto label1;

label419:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($e61e6dcee1252fa2)) {
	goto label308;
}

goto label43;

label426:

echo htmlspecialchars($F955f269a1230501['tmdb_id']);
echo '" />' . "\n\t\t\t\t\t\t\t";
goto label840;

label433:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" id="tmdb_id" name="tmdb_id" value="';
goto label829;

label435:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="rating">';
echo $_['rating'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="rating" name="rating" value="';

if (!isset($e61e6dcee1252fa2)) {
	goto label501;
}

goto label495;

label444:

$b62d6460eb33ea07->query('SELECT `season_num`, `episode_num` FROM `streams_episodes` WHERE `stream_id` = ?;', $e61e6dcee1252fa2['id']);

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label311;
}

$e61e6dcee1252fa2['episode'] = 0;
$e61e6dcee1252fa2['season'] = 0;
goto label326;
goto label311;

label460:

if (isset($e61e6dcee1252fa2)) {
	goto label466;
}

echo $_['process_now'];
goto label171;

label466:

echo $_['reprocess_on_edit'];
goto label171;

label469:

$e61e6dcee1252fa2 = F260B7A31F021e39(XUI::$rRequest['id']);
if (!(!$e61e6dcee1252fa2 || ($e61e6dcee1252fa2['type'] != 5))) {
	goto label485;
}

E72f42a93714bA87();

label485:

goto label282;

label486:

echo $e61e6dcee1252fa2['id'];
echo '" />' . "\n\t\t\t\t\t\t\t";

label489:

if (!isset($d344a66178d455b1)) {
	goto label433;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="multi" id="multi" value="" />' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="server" id="server" value="" />' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" id="tmdb_id" name="tmdb_id" value="';
goto label426;

label495:

echo htmlspecialchars($e61e6dcee1252fa2['properties']['rating']);

label501:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label576;

label506:

$d344a66178d455b1 = true;

label507:

goto label133;

label508:

goto label444;

label509:

echo $_['add_series_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-control custom-checkbox">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="custom-control-input" id="addName2" name="addName2" checked>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="custom-control-label" for="addName2">';
echo $_['add_episode_number'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label245;

label518:

if (!isset($e61e6dcee1252fa2)) {
	goto label527;
}

echo htmlspecialchars($e61e6dcee1252fa2['notes']);

label527:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label634;

label531:

$ab7f15d256034e8c = json_decode($e61e6dcee1252fa2['stream_source'], true)[0];

label538:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4 stream-url">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_source">';
echo $_['episode_path'];
goto label550;

label542:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_symlink">';
echo $_['create_symlink'];
echo ' <i title="';
echo $_['episode_tooltip_2'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="movie_symlink" id="movie_symlink" type="checkbox" ';
goto label723;

label550:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="stream_source" name="stream_source" class="form-control" value="';
echo $ab7f15d256034e8c;
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="notes">';
echo $_['notes'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">';
goto label518;

label557:

echo $_['add'];
goto label562;

label560:

echo $_['edit'];

label562:

goto label342;

label563:

echo ' <i title="';
echo $_['episode_tooltip_6'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="movie_subtitles" name="movie_subtitles" class="form-control" value="';

if (!isset($e61e6dcee1252fa2)) {
	goto label855;
}

echo htmlspecialchars($A1cfd5fd317b5c02);
goto label855;

label576:

echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="direct_source">';
echo $_['direct_source'];
echo ' <i title="';
echo $_['episode_tooltip_1'];
goto label817;

label585:

include 'session.php';
include 'functions.php';

if (e6d500e19634D513()) {
	goto label593;
}

e72f42A93714BA87();

label593:

goto label179;

label594:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t";

if (!isset($e61e6dcee1252fa2)) {
	goto label335;
}

echo "\t\t\t\t";
$b56fbe2eecc89270 = a6fCc34Ea39454A9($e61e6dcee1252fa2['id']);

foreach ($b56fbe2eecc89270 as $C082ca9ed03f473c => $b8f08f147ab2227d) {
	echo "\t\t\t\t" . '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . '<strong>';
	echo $_['error_on_server'];
	echo ' - ';
	echo $Bcf70cba56392975[$C082ca9ed03f473c]['server_name'];
	echo '</strong><br/>' . "\n\t\t\t\t\t";
	echo str_replace("\n", '<br/>', $b8f08f147ab2227d);
	echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";
}

goto label335;

label626:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="series" value="';
echo $F955f269a1230501['id'];
echo '" />' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\n" . '                            <input type="hidden" id="tmdb_language" value="';
echo $F955f269a1230501['tmdb_language'];
echo '" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label215;

label634:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t";

label635:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="episode-information">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_image">';
echo $_['image_url'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="movie_image" name="movie_image" value="';
goto label791;

label640:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="series_name" name="series_name" value="';
echo $F955f269a1230501['title'];
echo '" readonly>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="season_num" name="season_num" placeholder="Season" value="" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4 stream-url">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="season_folder">';
echo $_['season_folder'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="season_folder" name="season_folder" readonly class="form-control" value="" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="episode_add"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-control custom-checkbox">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="custom-control-input" id="addName1" name="addName1" checked>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="custom-control-label" for="addName1">';
goto label509;

label648:

echo $_['episode_tooltip_4'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="target_container" id="target_container" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'] as $Bd8c8f05432c0333) {
	goto label658;

	label655:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label679;

	label658:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($e61e6dcee1252fa2)) {
		goto label673;
	}

	if (!($e61e6dcee1252fa2['target_container'] == $Bd8c8f05432c0333)) {
		goto label671;
	}

	echo 'selected ';

	label671:

	goto label673;

	label673:

	echo 'value="';
	echo $Bd8c8f05432c0333;
	echo '">';
	echo $Bd8c8f05432c0333;
	goto label655;

	label679:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="custom_sid">';
goto label780;

label683:

echo "\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label906;

label685:

echo $_['servers'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t";

if (!isset($d344a66178d455b1)) {
	goto label247;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="series_name">';
echo $_['series_name'];
goto label640;

label696:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="read_native">';
echo $_['native_frames'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="read_native" id="read_native" type="checkbox" ';
goto label394;

label701:

if (!isset($e61e6dcee1252fa2)) {
	goto label299;
}

$D3bbf9ebf362834d = json_decode($e61e6dcee1252fa2['movie_subtitles'], true);

if (!isset($D3bbf9ebf362834d['location'])) {
	goto label722;
}

$A1cfd5fd317b5c02 = 's:' . $D3bbf9ebf362834d['location'] . ':' . $D3bbf9ebf362834d['files'][0];

label722:

goto label299;

label723:

if (!isset($e61e6dcee1252fa2)) {
	goto label733;
}

if (!($e61e6dcee1252fa2['movie_symlink'] == 1)) {
	goto label733;
}

echo 'checked ';

label733:

goto label18;

label734:

if ($F955f269a1230501 = A2297542D8bD35F6(XUI::$rRequest['sid'])) {
	goto label744;
}

E72f42A93714bA87();

label744:

if (!isset(XUI::$rRequest['id'])) {
	goto label485;
}

goto label469;

label750:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="episode_run_time">';
echo $_['runtime'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="';

if (!isset($e61e6dcee1252fa2)) {
	goto label435;
}

echo intval($e61e6dcee1252fa2['properties']['duration_secs'] / 60.0);
goto label435;

label766:

if (!(0 < strlen(XUI::$rSettings['tmdb_api_key']))) {
	goto label779;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="tmdb_search">';
echo $_['tmdb_results'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="tmdb_search" class="form-control" data-toggle="select2"></select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

label779:

goto label405;

label780:

echo $_['custom_channel_sid'];
echo ' <i title="';
echo $_['episode_tooltip_5'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="custom_sid" name="custom_sid" value="';

if (!isset($e61e6dcee1252fa2)) {
	goto label73;
}

goto label68;

label791:

if (!isset($e61e6dcee1252fa2)) {
	goto label801;
}

echo htmlspecialchars($e61e6dcee1252fa2['properties']['movie_image']);

label801:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="plot">';
echo $_['plot'];
goto label232;

label805:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="episode" name="episode" placeholder="" value="';

if (!isset($e61e6dcee1252fa2)) {
	goto label815;
}

echo htmlspecialchars($e61e6dcee1252fa2['episode']);

label815:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
goto label766;

label817:

echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_source" id="direct_source" type="checkbox" ';

if (!isset($e61e6dcee1252fa2)) {
	goto label257;
}

if (!($e61e6dcee1252fa2['direct_source'] == 1)) {
	goto label828;
}

echo 'checked ';

label828:

goto label257;

label829:

if (!isset($e61e6dcee1252fa2)) {
	goto label839;
}

echo htmlspecialchars($e61e6dcee1252fa2['properties']['tmdb_id']);

label839:

echo '" />' . "\n\t\t\t\t\t\t\t";

label840:

goto label626;

label841:

echo $_['release_date'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="release_date" name="release_date" value="';

if (!isset($e61e6dcee1252fa2)) {
	goto label854;
}

echo htmlspecialchars($e61e6dcee1252fa2['properties']['release_date']);

label854:

goto label750;

label855:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="#file-browser" id="filebrowser-sub" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

label856:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="transcode_profile_id">';
echo $_['transcoding_profile'];
goto label51;

label860:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f93e9343C3d7fd99() as $b376970f4d4df746) {
	goto label867;

	label867:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($e61e6dcee1252fa2)) {
		goto label889;
	}

	if (!(intval($e61e6dcee1252fa2['transcode_profile_id']) == intval($b376970f4d4df746['profile_id']))) {
		goto label887;
	}

	echo 'selected ';

	label887:

	goto label889;

	label889:

	echo 'value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	goto label897;

	label897:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label900;

	label900:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
goto label35;

label906:

include 'footer.php';

?>