<?php


goto label460;

label1:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="fallback_bouquets">Fallback Bouquets</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="fallback_bouquets[]" id="fallback_bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!in_array(intval($f155fef57262b32a['id']), json_decode($E2461a25530fd8a2['fb_bouquets'], true))) {
		goto label23;
	}

	echo 'selected ';

	label23:

	echo 'value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4" id="override_category">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="override_category">Override Category</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="override_category" id="override_category" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($E2461a25530fd8a2)) {
	goto label142;
}

goto label133;

label38:

if (!isset($E2461a25530fd8a2)) {
	goto label49;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo intval($E2461a25530fd8a2['id']);
echo '" />' . "\n\t\t\t\t\t\t\t";

label49:

goto label217;

label50:

echo 'checked ';

label51:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="scan_missing">Scan Missing ID\'s <i title="Check all Plex ID\'s in the XUI database against Plex database and scan missing items too. If this is off, XUI will only request items modified after the last scan date. Turning this on will increase time taken to scan as the entire library needs to be scanned instead of the recent items." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="scan_missing" id="scan_missing" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label62;
}

goto label57;

label57:

if (!$E2461a25530fd8a2['scan_missing']) {
	goto label62;
}

echo 'checked ';

label62:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="auto_upgrade">Auto-Upgrade Quality <i title="Automatically upgrade quality if the system finds a new file with better quality that has the same Plex or TMDb ID." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="auto_upgrade" id="auto_upgrade" type="checkbox" ';
goto label665;

label64:

foreach (['auto', 'mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'] as $Bd8c8f05432c0333) {
	goto label71;

	label68:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label92;

	label71:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label86;
	}

	if (!($E2461a25530fd8a2['target_container'] == $Bd8c8f05432c0333)) {
		goto label84;
	}

	echo 'selected ';

	label84:

	goto label86;

	label86:

	echo 'value="';
	echo $Bd8c8f05432c0333;
	echo '">';
	echo $Bd8c8f05432c0333;
	goto label68;

	label92:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="override_bouquets">Override Bouquets</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="override_bouquets[]" id="override_bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!in_array(intval($f155fef57262b32a['id']), json_decode($E2461a25530fd8a2['bouquets'], true))) {
		goto label116;
	}

	echo 'selected ';

	label116:

	echo 'value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1;

label126:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                        <ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                            </li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_folder" type="submit" class="btn btn-primary" value="';

if (isset($E2461a25530fd8a2)) {
	goto label503;
}

echo 'Add';
goto label504;
goto label503;

label133:

if (!(intval($E2461a25530fd8a2['category_id']) == 0)) {
	goto label142;
}

echo 'selected ';

label142:

echo 'value="0">Do Not Use</option>' . "\n" . '                                                            <optgroup label="Movies">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label329;

label144:

if (!isset($E2461a25530fd8a2)) {
	goto label153;
}

if (!$E2461a25530fd8a2['read_native']) {
	goto label153;
}

echo 'checked ';

label153:

goto label443;

label154:

goto label156;

label155:

echo 'Edit';

label156:

echo ' Library</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";
goto label38;

label158:

foreach (F769e3f0c739d1A6('series') as $Dbcac322b4274e46) {
	goto label179;

	label165:

	echo 'value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label176;

	label176:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label201;

	label179:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label165;
	}

	if (!(intval($E2461a25530fd8a2['fb_category_id']) == intval($Dbcac322b4274e46['id']))) {
		goto label199;
	}

	echo 'selected ';

	label199:

	goto label165;

	label201:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Select a transcoding profile to autoamtically encode videos." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($E2461a25530fd8a2)) {
	goto label537;
}

if (!(intval($E2461a25530fd8a2['transcode_profile_id']) == 0)) {
	goto label537;
}

goto label536;

label217:

echo '                            <input type="hidden" name="libraries" id="libraries" value="';
echo isset($E2461a25530fd8a2['plex_libraries']) ? htmlspecialchars($E2461a25530fd8a2['plex_libraries']) : '';
echo '" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#folder-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#settings" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-wrench mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Settings</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="folder-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_id">Server Name</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <select name="server_id[]" id="server_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
$c87c8c36774fd883 = [];

if (!isset($E2461a25530fd8a2)) {
	goto label709;
}

goto label421;

label235:

echo 'checked ';
goto label323;

label237:

if (!$E2461a25530fd8a2['store_categories']) {
	goto label323;
}

echo 'checked ';
goto label323;

label243:

echo 'checked ';

label244:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="store_categories">Store Categories <i title="Save unrecognised categories to Plex Settings, this will allow you to allocate a category after the first run and it will then be added on the second run." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="store_categories" id="store_categories" type="checkbox" ';

if (isset($E2461a25530fd8a2)) {
	goto label237;
}

goto label235;

label249:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4" id="fallback_category">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="fallback_category">Fallback Category</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="fallback_category" id="fallback_category" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($E2461a25530fd8a2)) {
	goto label264;
}

if (!(intval($E2461a25530fd8a2['fb_category_id']) == 0)) {
	goto label263;
}

echo 'selected ';

label263:

goto label264;

label264:

echo 'value="0">Do Not Use</option>' . "\n" . '                                                            <optgroup label="Movies">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F769e3f0C739D1A6('movie') as $Dbcac322b4274e46) {
	goto label272;

	label272:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label294;
	}

	if (!(intval($E2461a25530fd8a2['fb_category_id']) == intval($Dbcac322b4274e46['id']))) {
		goto label292;
	}

	echo 'selected ';

	label292:

	goto label294;

	label294:

	echo 'value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label305;

	label305:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label308;

	label308:
}

echo '                                                            <optgroup label="Series">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label158;

label312:

if (!$E2461a25530fd8a2['active']) {
	goto label317;
}

echo 'checked ';

label317:

goto label469;

label318:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="target_container">';
echo $_['target_container'];
echo ' <i title="Which container to use when transcoding files." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="target_container" id="target_container" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label64;

label323:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="check_tmdb">Check Against TMDb <i title="If the item has a TMDb ID, check it against the database to ensure duplicates aren\'t created due to previous content in the XUI system." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="check_tmdb" id="check_tmdb" type="checkbox" ';

if (isset($E2461a25530fd8a2)) {
	goto label581;
}

echo 'checked ';
goto label580;

label329:

foreach (f769E3f0c739D1A6('movie') as $Dbcac322b4274e46) {
	goto label336;

	label336:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label361;
	}

	if (!(intval($E2461a25530fd8a2['category_id']) == intval($Dbcac322b4274e46['id']))) {
		goto label356;
	}

	echo 'selected ';

	label356:

	goto label361;

	label358:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label372;

	label361:

	echo 'value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label358;

	label372:
}

echo '                                                            <optgroup label="Series">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769e3f0c739d1a6('series') as $Dbcac322b4274e46) {
	goto label385;

	label382:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label418;

	label385:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label407;
	}

	if (!(intval($E2461a25530fd8a2['category_id']) == intval($Dbcac322b4274e46['id']))) {
		goto label405;
	}

	echo 'selected ';

	label405:

	goto label407;

	label407:

	echo 'value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label382;

	label418:
}

goto label249;

label421:

if (!$E2461a25530fd8a2['server_id']) {
	goto label438;
}

$c87c8c36774fd883[] = $E2461a25530fd8a2['server_id'];
echo '<option value="' . $E2461a25530fd8a2['server_id'] . '" selected>' . XUI::$rServers[$E2461a25530fd8a2['server_id']]['server_name'] . '</option>';

label438:

if (!$E2461a25530fd8a2['server_add']) {
	goto label709;
}

goto label689;

label443:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_symlink">Create Symlink <i title="Generate a symlink to the original file instead of encoding. File needs to exist on all selected servers." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="movie_symlink" id="movie_symlink" type="checkbox" ';

if (isset($E2461a25530fd8a2)) {
	goto label449;
}

echo 'checked ';
goto label501;

label449:

goto label496;

label450:

if (isset($E2461a25530fd8a2)) {
	goto label455;
}

echo 'checked ';
goto label51;

label455:

if (!$E2461a25530fd8a2['auto_encode']) {
	goto label51;
}

goto label50;

label460:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label468;
}

e72F42a93714bA87();

label468:

goto label515;

label469:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original Plex URL by proxying the movie through your servers. This will consume bandwidth but won\'t require the movie to be saved to your servers permanently." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_proxy" id="direct_proxy" type="checkbox" ';

if (isset($E2461a25530fd8a2)) {
	goto label475;
}

echo 'checked ';
goto label687;

label475:

goto label682;

label476:

if (!isset($E2461a25530fd8a2)) {
	goto label482;
}

echo $E2461a25530fd8a2['plex_username'];

label482:

echo '" placeholder="Username" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="password" id="password" name="password" class="form-control" value="';

if (!isset($E2461a25530fd8a2)) {
	goto label626;
}

goto label624;

label488:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="plex_ip">Plex Server</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="plex_ip" name="plex_ip" class="form-control" value="';

if (!isset($E2461a25530fd8a2)) {
	goto label495;
}

echo $E2461a25530fd8a2['plex_ip'];

label495:

goto label506;

label496:

if (!$E2461a25530fd8a2['movie_symlink']) {
	goto label501;
}

echo 'checked ';

label501:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="auto_encode">Auto-Encode <i title="Start encoding as soon as the movie is added." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="auto_encode" id="auto_encode" type="checkbox" ';
goto label450;

label503:

echo 'Edit';

label504:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label731;

label506:

echo '" placeholder="Server IP" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="plex_port" name="plex_port" class="form-control text-center" value="';

if (!isset($E2461a25530fd8a2)) {
	goto label513;
}

echo $E2461a25530fd8a2['plex_port'];

label513:

echo '" placeholder="Port" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Credentials</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="username" name="username" class="form-control" value="';
goto label476;

label515:
if (!(isset(XUI::$rRequest['id']) && !($E2461a25530fd8a2 = D8eC9843fC5457DF(XUI::$rRequest['id'])))) {
	goto label531;
}

E72f42A93714BA87();

label531:

$Df5cd7b5dc4cc10c = F964b9222b35aDDd();
$F6edd90960a3bd9d = 'Add Library';
goto label598;

label536:

echo 'selected ';

label537:

echo 'value="0">Transcoding Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f93E9343C3D7FD99() as $b376970f4d4df746) {
	goto label544;

	label544:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label569;
	}

	if (!(intval($E2461a25530fd8a2['transcode_profile_id']) == intval($b376970f4d4df746['profile_id']))) {
		goto label564;
	}

	echo 'selected ';

	label564:

	goto label569;

	label566:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label577;

	label569:

	echo 'value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	goto label566;

	label577:
}

goto label126;

label580:

goto label587;

label581:

if (!$E2461a25530fd8a2['check_tmdb']) {
	goto label586;
}

echo 'checked ';

label586:

goto label587;

label587:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="remove_subtitles">Remove Existing Subtitles <i title="Remove existing subtitles from file before encoding. You can\'t remove hardcoded subtitles using this method." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="remove_subtitles" id="remove_subtitles" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label318;
}

if (!$E2461a25530fd8a2['remove_subtitles']) {
	goto label318;
}

echo 'checked ';
goto label318;

label598:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label615;
}

echo ' style="display: none;"';

label615:

goto label616;

label616:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($E2461a25530fd8a2)) {
	goto label155;
}

echo 'Add';
goto label154;

label624:

echo $E2461a25530fd8a2['plex_password'];

label626:

echo '" placeholder="Password">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="library_id">Library</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-7">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="library_id" name="library_id" class="form-control" data-toggle="select2">' . "\n" . '                                                            ';
$dc3d2382bc96f3d5 = (isset($E2461a25530fd8a2['plex_libraries']) ? json_decode($E2461a25530fd8a2['plex_libraries'], true) : []);

foreach ($dc3d2382bc96f3d5 as $De974a070013135b) {
	if ($E2461a25530fd8a2['directory'] == $De974a070013135b['key']) {
		goto label655;
	}

	echo '<option value="' . $De974a070013135b['key'] . '">' . $De974a070013135b['title'] . '</option>';
	goto label662;

	label655:

	echo '<option selected value="' . $De974a070013135b['key'] . '">' . $De974a070013135b['title'] . '</option>';

	label662:
}

goto label675;

label665:

if (isset($E2461a25530fd8a2)) {
	goto label670;
}

echo 'checked ';
goto label244;

label670:

if (!$E2461a25530fd8a2['auto_upgrade']) {
	goto label244;
}

goto label243;

label675:

echo '                                                        </select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-1">' . "\n" . '                                                        <button class="btn btn-primary waves-effect waves-light" type="button" id="scanPlex"><i class="mdi mdi-reload"></i></button>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="active">Enabled</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="active" id="active" type="checkbox" ';

if (isset($E2461a25530fd8a2)) {
	goto label312;
}

echo 'checked ';
goto label317;
goto label312;

label682:

if (!$E2461a25530fd8a2['direct_proxy']) {
	goto label687;
}

echo 'checked ';

label687:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="settings">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="read_native">Native Frames <i title="Read input video at native frame rate." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="read_native" id="read_native" type="checkbox" ';
goto label144;

label689:

foreach (json_decode($E2461a25530fd8a2['server_add'], true) as $C082ca9ed03f473c) {
	$c87c8c36774fd883[] = $C082ca9ed03f473c;
	echo '<option value="' . $C082ca9ed03f473c['server_id'] . '" selected>' . XUI::$rServers[$C082ca9ed03f473c]['server_name'] . '</option>';
}

label709:

foreach (C6a90bfcD425Eb63() as $Ec379295dc7029e6) {
	if (in_array($Ec379295dc7029e6['id'], $c87c8c36774fd883)) {
		goto label728;
	}

	echo '<option value="' . $Ec379295dc7029e6['id'] . '">' . $Ec379295dc7029e6['server_name'] . '</option>';

	label728:
}

goto label488;

label731:

include 'footer.php';

?>