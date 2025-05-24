<?php


goto label573;

label1:

if (isset($Bf508e08aecfc95f)) {
	goto label18;
}

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => 'offline',
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
}

goto label776;

label18:

goto label714;

label19:

echo htmlspecialchars($Bf508e08aecfc95f['properties']['backdrop_path'][0]);

label26:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="plot">';
echo $_['plot'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea rows="6" class="form-control" id="plot" name="plot">';
goto label499;

label31:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-5">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="tmdb_search" class="form-control" data-toggle="select2"></select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="tmdb_language" id="tmdb_language" class="form-control" data-toggle="select2">' . "\n" . '                                                            ';
$c1b1d2174645ee44 = (!empty($Bf508e08aecfc95f['tmdb_language']) ? $Bf508e08aecfc95f['tmdb_language'] : $f1dcaed925076e67['tmdb_language']);

foreach ($b991f823f0dd214d as $Bb672d1983256a93 => $rLanguage) {
	echo '                                                            <option';

	if (!($Bb672d1983256a93 == $c1b1d2174645ee44)) {
		goto label51;
	}

	echo ' selected';

	label51:

	echo ' value="';
	echo $Bb672d1983256a93;
	echo '">';
	echo $rLanguage;
	echo '</option>' . "\n" . '                                                            ';
}

echo '                                                        </select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
goto label346;

label60:

echo 'Categories</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F769E3F0C739D1A6('movie') as $Dbcac322b4274e46) {
	goto label68;

	label68:

	echo '                                                            <option ';

	if (!isset($Bf508e08aecfc95f)) {
		goto label94;
	}

	if (!in_array(intval($Dbcac322b4274e46['id']), json_decode($Bf508e08aecfc95f['category_id'], true))) {
		goto label92;
	}

	echo 'selected ';

	label92:

	goto label94;

	label94:

	echo 'value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label102;

	label102:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label105;

	label105:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">' . "\n" . '                                                            <strong>New Categories:</strong> <span id="category_new"></span>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="bouquets">';
goto label325;

label109:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="release_date">';
echo $_['release_date'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="release_date" name="release_date" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label1003;
}

goto label997;

label118:

echo $_['choose'];
echo '...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F964b9222b35aDDD() as $f155fef57262b32a) {
	goto label127;

	label127:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($Bf508e08aecfc95f)) {
		goto label150;
	}

	if (!in_array($Bf508e08aecfc95f['id'], json_decode($f155fef57262b32a['bouquet_movies'], true))) {
		goto label148;
	}

	echo 'selected ';

	label148:

	goto label150;

	label150:

	echo 'value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	goto label158;

	label158:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label161;

	label161:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">' . "\n" . '                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';
goto label315;

label165:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_movie" type="submit" class="btn btn-primary" value="';

if (isset($Bf508e08aecfc95f)) {
	goto label171;
}

echo 'Add';
goto label593;

label171:

goto label592;

label172:

$Dfa434fb466da5d3 = htmlspecialchars(XUI::$rRequest['path']);

label178:

goto label1081;

label179:

goto label1074;

label180:

if (!isset(XUI::$rRequest['title'])) {
	goto label193;
}

echo str_replace('"', '&quot;', XUI::$rRequest['title']);

label193:

goto label811;

label194:

goto label806;

label195:

if (!($Bf508e08aecfc95f['read_native'] == 1)) {
	goto label201;
}

echo 'checked ';

label201:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_symlink">';
goto label900;

label203:

$F771d40e8cf51e59 = F769e3F0C739d1A6('movie');
$Cf9848d22b37a744 = F93E9343c3D7fD99();

if (!isset(XUI::$rRequest['id'])) {
	goto label565;
}

$Bf508e08aecfc95f = F260b7A31f021e39(XUI::$rRequest['id']);
if (!(!$Bf508e08aecfc95f || ($Bf508e08aecfc95f['type'] != 2))) {
	goto label565;
}

goto label563;

label230:

if (isset(XUI::$rRequest['import'])) {
	goto label569;
}

$A1cfd5fd317b5c02 = '';

if (!isset($Bf508e08aecfc95f)) {
	goto label883;
}

$D3bbf9ebf362834d = json_decode($Bf508e08aecfc95f['movie_subtitles'], true);

if (!isset($D3bbf9ebf362834d['location'])) {
	goto label883;
}

goto label876;

label250:

echo "\t\t\t\t" . '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
echo $_['movies_info_2'];
echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label254:

goto label598;

label255:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onClick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="backdrop_path">';
echo $_['backdrop_url'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="backdrop_path" name="backdrop_path" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label26;
}

goto label19;

label264:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label855;

label271:

echo $_['type'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-control custom-radio mt-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="radio" id="import_type_1" name="customRadio" class="custom-control-input" checked>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="custom-control-label" for="import_type_1">';
echo $_['m3u'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span style="padding-left:50px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="radio" id="import_type_2" name="customRadio" class="custom-control-input">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="custom-control-label" for="import_type_2">';
echo $_['folder'];
goto label470;

label280:

if (!isset($Bf508e08aecfc95f)) {
	goto label290;
}

if (!($Bf508e08aecfc95f['direct_source'] == 1)) {
	goto label290;
}

echo 'checked ';

label290:

goto label433;

label291:

if (isset(XUI::$rRequest['import'])) {
	goto label895;
}

echo "\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="search">';
echo $_['search_directory'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="search" name="search" class="form-control" placeholder="';
echo $_['filter_files'];
goto label894;

label302:

echo '</label>' . "\n" . '                                                    <div class="col-md-3 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="youtube_trailer" name="youtube_trailer" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label313;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['youtube_trailer']);

label313:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onClick="openYouTube(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="rating">';
goto label966;

label315:

if (!isset(XUI::$rRequest['import'])) {
	goto label321;
}

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_tmdb">Disable TMDb <i title="Do not use TMDb to match the content." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_tmdb" id="disable_tmdb" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ignore_no_match">Ignore No Match <i title="Add to database even if no TMDb match is found." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ignore_no_match" id="ignore_no_match" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label321:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label640;

label325:

if (!XUI::$rRequest['import']) {
	goto label331;
}

echo 'Fallback ';

label331:

echo $_['bouquets'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="';
goto label118;

label335:

echo $_['movies_info_4'];
echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label338:

goto label344;

label339:

goto label340;

label340:

echo "\t\t\t\t" . '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
echo $_['movies_info_3'];
echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label344:

goto label254;
goto label250;

label346:

if (isset($Bf508e08aecfc95f)) {
	goto label179;
}

if (isset(XUI::$rRequest['path'])) {
	goto label172;
}

$Dfa434fb466da5d3 = '';
goto label178;
goto label172;

label356:

echo ' <i title="';
echo $_['episode_tooltip_4'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="target_container" id="target_container" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'] as $Bd8c8f05432c0333) {
	goto label373;

	label364:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label388;

	label367:

	echo 'value="';
	echo $Bd8c8f05432c0333;
	echo '">';
	echo $Bd8c8f05432c0333;
	goto label364;

	label373:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($Bf508e08aecfc95f)) {
		goto label367;
	}

	if (!($Bf508e08aecfc95f['target_container'] == $Bd8c8f05432c0333)) {
		goto label386;
	}

	echo 'selected ';

	label386:

	goto label367;

	label388:
}

goto label478;

label391:

echo $Dfa434fb466da5d3;
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="scan_recursive">';
echo $_['scan_recursively'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="scan_recursive" id="scan_recursive" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
goto label487;
goto label1039;

label398:

foreach (c6A90bfCD425Eb63() as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label419;
	}

	echo ' selected';

	label419:

	echo '>';
	echo htmlspecialchars($Ec379295dc7029e6['server_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="current_path">';
echo $_['current_path'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="current_path" name="current_path" class="form-control" value="/">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-primary waves-effect waves-light" type="button" id="changeDir"><i class="mdi mdi-chevron-right"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t";
goto label291;

label433:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the movie through your servers. This will consume bandwidth but won\'t require the movie to be saved to your servers permanently. Make sure to set the correct target container." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_proxy" id="direct_proxy" type="checkbox" ';

if (!isset($Bf508e08aecfc95f)) {
	goto label554;
}

if (!($Bf508e08aecfc95f['direct_proxy'] == 1)) {
	goto label444;
}

echo 'checked ';

label444:

goto label554;

label445:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t";
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_FAILURE)) {
	goto label250;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_EXISTS_NAME)) {
	goto label339;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_NO_SOURCES))) {
	goto label338;
}

echo "\t\t\t\t" . '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
goto label335;

label470:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="import_m3uf_toggle">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="m3u_file">';
echo $_['m3u_file'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="file" id="m3u_file" name="m3u_file" />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="import_folder_toggle" style="display:none;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="import_folder">';
echo $_['folder'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="import_folder" name="import_folder" class="form-control" value="';
goto label391;

label478:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="load-balancing">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="servers">';
goto label1047;

label486:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

label487:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_id">';

if (!XUI::$rRequest['import']) {
	goto label60;
}

echo 'Fallback ';
goto label60;

label495:

goto label498;

label496:

echo $Bf508e08aecfc95f['stream_display_name'];

label498:

goto label445;

label499:

if (!isset($Bf508e08aecfc95f)) {
	goto label509;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['plot']);

label509:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="cast">';
echo $_['cast'];
goto label523;

label513:

echo $_['filename'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t";

if (!isset(XUI::$rRequest['import'])) {
	goto label522;
}

echo "\t\t\t\t\t\t\t\t" . '<div class="float-right">' . "\n\t\t\t\t\t\t\t\t\t" . '<input id="select_folder" type="button" class="btn btn-info" value="Select" />' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t";

label522:

goto label1057;

label523:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="cast" name="cast" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label534;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['cast']);

label534:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="director">';
goto label681;

label536:

echo '" />' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />' . "\n" . '                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

if (isset(XUI::$rRequest['import'])) {
	goto label802;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#movie-information" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label799;

label546:

if (!($Bf508e08aecfc95f['movie_symlink'] == 1)) {
	goto label552;
}

echo 'checked ';

label552:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="remove_subtitles">';
goto label1028;

label554:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="read_native">';
echo $_['native_frames'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="read_native" id="read_native" type="checkbox" ';

if (!isset($Bf508e08aecfc95f)) {
	goto label201;
}

goto label195;

label563:

E72f42a93714Ba87();

label565:

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
$e05918d659e4e587 = [];
goto label1;

label568:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="#file-browser" id="filebrowser-sub" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

label569:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="transcode_profile_id">';
echo $_['transcoding_profile'];
goto label980;

label573:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label581;
}

e72f42A93714Ba87();

label581:

goto label203;

label582:

if (isset(XUI::$rRequest['import'])) {
	goto label589;
}

echo $_['add_movie'];
goto label495;

label589:

echo $_['import_movies'];
goto label495;

label592:

echo 'Edit';

label593:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t" . '<div id="file-browser" class="mfp-hide white-popup-block">' . "\n\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_id">';
echo $_['server_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<select id="server_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t";
goto label398;

label598:

if (!isset($Bf508e08aecfc95f['id'])) {
	goto label791;
}

echo "\t\t\t\t";
$b56fbe2eecc89270 = A6Fcc34Ea39454a9($Bf508e08aecfc95f['id']);

foreach ($b56fbe2eecc89270 as $C082ca9ed03f473c => $b8f08f147ab2227d) {
	if (!in_array(intval($C082ca9ed03f473c), $e05918d659e4e587)) {
		goto label637;
	}

	echo '                    <div class="alert alert-warning alert-dismissible fade show" role="alert">' . "\n" . '                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                            <span aria-hidden="true">&times;</span>' . "\n" . '                        </button>' . "\n" . '                        <strong>';
	echo $_['error_on_server'];
	echo ' - ';
	echo $Bcf70cba56392975[$C082ca9ed03f473c]['server_name'];
	echo '</strong><br/>' . "\n" . '                        ';
	echo str_replace("\n", '<br/>', $b8f08f147ab2227d);
	echo '                    </div>' . "\n" . '                ';

	label637:
}

goto label791;

label640:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="movie-information">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_image">';
echo $_['poster_url'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="movie_image" name="movie_image" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label255;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['movie_image']);
goto label255;

label655:

echo 'selected ';

label656:

echo 'value="0">';
echo $_['transcoding_disabled'];
goto label911;

label660:

echo $Dfa434fb466da5d3;
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>' . "\n" . '                                                            ';

if ($Ebb0b63f7c597ba4) {
	goto label665;
}

echo '                                                            <a href="javascript:void(0);" id="provider-streams" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-magnify"></i></a>' . "\n" . '                                                            ';

label665:

goto label486;

label666:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="country">';
echo $_['country'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="country" name="country" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label264;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['country']);
goto label264;

label681:

echo $_['director'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="director" name="director" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label694;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['director']);

label694:

goto label840;

label695:

$F6edd90960a3bd9d = 'Movie';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label887;
}

echo ' style="display: none;"';
goto label887;

label714:

$Bf508e08aecfc95f['properties'] = json_decode($Bf508e08aecfc95f['movie_properties'], true);
$bfeef7b0d44ec01c = b25f6F50dfA04EB7(XUI::$rRequest['id']);

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	goto label731;

	label731:
	if (!(($Ec379295dc7029e6['direct_source'] == 0) && ($Ec379295dc7029e6['stream_status'] == 1))) {
		goto label747;
	}

	$e05918d659e4e587[] = intval($Ec379295dc7029e6['id']);

	label747:

	if (isset($bfeef7b0d44ec01c[intval($Ec379295dc7029e6['id'])])) {
		goto label762;
	}

	$f6cad74ab6fb4eea = 'offline';
	goto label760;

	label758:

	goto label774;

	label760:

	goto label763;

	label762:

	$f6cad74ab6fb4eea = 'source';

	label763:

	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => $f6cad74ab6fb4eea,
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
	goto label758;

	label774:
}

label776:

goto label695;

label777:

if (!isset($Bf508e08aecfc95f)) {
	goto label787;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['episode_run_time']);

label787:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="youtube_trailer">';
echo $_['youtube_trailer'];
goto label302;

label791:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form';

if (!isset(XUI::$rRequest['import'])) {
	goto label798;
}

echo ' enctype="multipart/form-data"';

label798:

goto label822;

label799:

echo $_['information'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

label802:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['advanced'];
goto label955;

label806:

echo htmlspecialchars($Bf508e08aecfc95f['stream_display_name']);

label811:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <input type="text" placeholder="Year" class="form-control text-center" id="year" name="year" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label1014;
}

echo htmlspecialchars($Bf508e08aecfc95f['year']);
goto label1014;

label822:

echo ' action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($Bf508e08aecfc95f['id'])) {
	goto label1059;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $Bf508e08aecfc95f['id'];
echo '" />' . "\n\t\t\t\t\t\t\t";
goto label1059;

label832:

if (!($Bf508e08aecfc95f['remove_subtitles'] == 1)) {
	goto label838;
}

echo 'checked ';

label838:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
goto label230;

label840:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="genre">';
echo $_['genres'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="genre" name="genre" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label109;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['genre']);
goto label109;

label855:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="direct_source">';
echo $_['direct_source'];
echo ' <i title="';
echo $_['episode_tooltip_1'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_source" id="direct_source" type="checkbox" ';
goto label280;

label863:

echo ' <i title="';
echo $_['episode_tooltip_6'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="movie_subtitles" name="movie_subtitles" class="form-control" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label568;
}

echo htmlspecialchars($A1cfd5fd317b5c02);
goto label568;

label876:

$A1cfd5fd317b5c02 = 's:' . $D3bbf9ebf362834d['location'] . ':' . $D3bbf9ebf362834d['files'][0];

label883:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4 stream-url">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_subtitles">';
echo $_['subtitle_location'];
goto label863;

label887:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($Bf508e08aecfc95f['id'])) {
	goto label496;
}

goto label582;

label894:

echo '...">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-warning waves-effect waves-light" type="button" onClick="clearSearch()"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-primary waves-effect waves-light" type="button" id="doSearch"><i class="mdi mdi-magnify"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t";

label895:

echo "\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th width="20px"></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['directory'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-files" class="table">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th width="20px"></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
goto label513;

label900:

echo $_['create_symlink'];
echo ' <i title="';
echo $_['episode_tooltip_2'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="movie_symlink" id="movie_symlink" type="checkbox" ';

if (!isset($Bf508e08aecfc95f)) {
	goto label552;
}

goto label546;

label911:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Cf9848d22b37a744 as $b376970f4d4df746) {
	goto label916;

	label916:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($Bf508e08aecfc95f)) {
		goto label941;
	}

	if (!(intval($Bf508e08aecfc95f['transcode_profile_id']) == intval($b376970f4d4df746['profile_id']))) {
		goto label936;
	}

	echo 'selected ';

	label936:

	goto label941;

	label938:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label949;

	label941:

	echo 'value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	goto label938;

	label949:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="target_container">';
echo $_['target_container'];
goto label356;

label955:

echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server-network mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['server'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

if (!isset(XUI::$rRequest['import'])) {
	goto label1039;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n" . '                                                    Importing Movies using this method will parse your M3U or folder and push the individual episodes through Watch Folder. If you have category and bouquet allocation set up in Watch Folder Settings then they will be used here too.' . "\n" . '                                                </p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="import_type">';
goto label271;

label966:

echo $_['rating'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="rating" name="rating" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label979;
}

echo htmlspecialchars($Bf508e08aecfc95f['properties']['rating']);

label979:

goto label666;

label980:

echo ' <i title="';
echo $_['episode_tooltip_7'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($Bf508e08aecfc95f)) {
	goto label656;
}

if (!(intval($Bf508e08aecfc95f['transcode_profile_id']) == 0)) {
	goto label656;
}

goto label655;

label997:

echo htmlspecialchars($Bf508e08aecfc95f['properties']['release_date']);

label1003:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="episode_run_time">';
echo $_['runtime'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="episode_run_time" name="episode_run_time" value="';
goto label777;

label1008:

echo $_['reprocess_on_edit'];

label1010:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
goto label165;

label1014:

echo '">' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

if (!(0 < strlen(XUI::$rSettings['tmdb_api_key']))) {
	goto label346;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="tmdb_search">';
echo $_['tmdb_results'];
goto label31;

label1028:

echo $_['remove_existing_subtitles'];
echo ' <i title="';
echo $_['episode_tooltip_3'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="remove_subtitles" id="remove_subtitles" type="checkbox" ';

if (!isset($Bf508e08aecfc95f)) {
	goto label838;
}

goto label832;

label1039:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_display_name">';
echo $_['movie_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n" . '                                                        <input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="';

if (isset($Bf508e08aecfc95f)) {
	goto label194;
}

goto label180;

label1047:

echo $_['server_tree'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="server_tree"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="restart_on_edit">';

if (isset($Bf508e08aecfc95f)) {
	goto label1008;
}

echo $_['process_movie'];
goto label1010;
goto label1008;

label1057:

echo "\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label1086;

label1059:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" id="tmdb_id" name="tmdb_id" value="';

if (!isset($Bf508e08aecfc95f)) {
	goto label1073;
}

echo htmlspecialchars($Bf508e08aecfc95f['tmdb_id'] ?: $Bf508e08aecfc95f['properties']['tmdb_id']);

label1073:

goto label536;

label1074:

$Dfa434fb466da5d3 = json_decode($Bf508e08aecfc95f['stream_source'], true)[0];

label1081:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4 stream-url">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_source">';
echo $_['movie_path_or_url'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="stream_source" name="stream_source" class="form-control" value="';
goto label660;

label1086:

include 'footer.php';

?>