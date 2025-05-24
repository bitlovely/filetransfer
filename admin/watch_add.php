<?php


goto label780;

label1:

echo 'value="0">Do Not Use</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F769E3F0c739d1a6('movie') as $Dbcac322b4274e46) {
	goto label23;

	label9:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label45;

	label12:

	echo 'value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label9;

	label23:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label12;
	}

	if (!(intval($E2461a25530fd8a2['fb_category_id']) == intval($Dbcac322b4274e46['id']))) {
		goto label43;
	}

	echo 'selected ';

	label43:

	goto label12;

	label45:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4" id="fb_category_series"';

if (isset($E2461a25530fd8a2)) {
	goto label824;
}

goto label822;

label52:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label69;
}

echo ' style="display: none;"';

label69:

goto label592;

label70:

echo 'value="0">Do Not Use</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769E3F0c739d1a6('series') as $Dbcac322b4274e46) {
	goto label89;

	label78:

	echo 'value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label111;

	label89:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label78;
	}

	if (!(intval($E2461a25530fd8a2['category_id']) == intval($Dbcac322b4274e46['id']))) {
		goto label109;
	}

	echo 'selected ';

	label109:

	goto label78;

	label111:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label114;

	label114:
}

goto label539;

label117:

foreach (f769E3f0c739d1a6('movie') as $Dbcac322b4274e46) {
	goto label138;

	label124:

	echo 'value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label135;

	label135:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label160;

	label138:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label124;
	}

	if (!(intval($E2461a25530fd8a2['category_id']) == intval($Dbcac322b4274e46['id']))) {
		goto label158;
	}

	echo 'selected ';

	label158:

	goto label124;

	label160:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4" id="category_series"';

if (isset($E2461a25530fd8a2)) {
	goto label832;
}

echo ' style="display: none;"';
goto label831;

label168:

echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="fb_category_id_series">Fallback Category <i title="Add to this category if the Genre isn\'t found in the category allocation list." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="fb_category_id_series" id="fb_category_id_series" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($E2461a25530fd8a2)) {
	goto label653;
}

if (!(intval($E2461a25530fd8a2['fb_category_id']) == 0)) {
	goto label653;
}

goto label652;

label182:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th width="20px"></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Directory</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-files" class="table">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th width="20px"></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Filename</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="settings">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_tmdb">Disable TMDb <i title="Do not use TMDb to match the content." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_tmdb" id="disable_tmdb" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label201;
}

if (!$E2461a25530fd8a2['disable_tmdb']) {
	goto label201;
}

echo 'checked ';
goto label201;

label193:

echo $E2461a25530fd8a2['rclone_dir'];

label195:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="active">Enabled</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="active" id="active" type="checkbox" ';

if (isset($E2461a25530fd8a2)) {
	goto label760;
}

echo 'checked ';
goto label759;

label201:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ignore_no_match">Ignore No Match <i title="Add to database even if no TMDb match is found." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ignore_no_match" id="ignore_no_match" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label351;
}

if (!$E2461a25530fd8a2['ignore_no_match']) {
	goto label351;
}

goto label350;

label211:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#folder-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#settings" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-wrench mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Settings</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#override" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Overrides</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="folder-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="folder_type">Folder Type</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="folder_type" name="folder_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['movie' => 'Movies', 'series' => 'TV Series'] as $C76f4ce654f9daf7 => $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $C76f4ce654f9daf7;
	echo '"';
	if (!(isset($E2461a25530fd8a2) && ($E2461a25530fd8a2['type'] == $C76f4ce654f9daf7))) {
		goto label228;
	}

	echo ' selected';

	label228:

	echo '>';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_id">Server Name</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="server_id" name="server_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (c6A90bfcd425EB63() as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset($E2461a25530fd8a2) && ($E2461a25530fd8a2['server_id'] == $Ec379295dc7029e6['id']))) {
		goto label253;
	}

	echo ' selected';

	label253:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label645;

label260:

echo 'Edit';

label261:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label857;

label263:

echo 'checked ';

label264:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="auto_subtitles">Auto-Add Subtitles <i title="Automatically embed subtitles of the same name in the same folder." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="auto_subtitles" id="auto_subtitles" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label771;
}

goto label766;

label270:

if (!isset($E2461a25530fd8a2)) {
	goto label283;
}

if (!(intval($E2461a25530fd8a2['fb_category_id']) == 0)) {
	goto label283;
}

echo 'selected ';

label283:

goto label1;

label284:

if (!isset($E2461a25530fd8a2)) {
	goto label293;
}

if (!$E2461a25530fd8a2['movie_symlink']) {
	goto label293;
}

echo 'checked ';

label293:

goto label800;

label294:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="fb_bouquets">Fallback Bouquets <i title="Add to these bouquets if the Genre isn\'t found in the category allocation list." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="fb_bouquets[]" id="fb_bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
	goto label313;

	label299:

	echo 'value="';
	echo intval($f155fef57262b32a['id']);
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	goto label310;

	label310:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label339;

	label313:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label299;
	}

	if (!in_array(intval($f155fef57262b32a['id']), json_decode($E2461a25530fd8a2['fb_bouquets'], true))) {
		goto label337;
	}

	echo 'selected ';

	label337:

	goto label299;

	label339:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="fallback_title">Fallback to Folder Name <i title="If the title of the file isn\'t matched with TMDb, try to match the folder name instead." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="fallback_title" id="fallback_title" type="checkbox" ';
goto label847;

label343:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                            </li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_folder" type="submit" class="btn btn-primary" value="';

if (isset($E2461a25530fd8a2)) {
	goto label260;
}

echo 'Add';
goto label261;
goto label260;

label350:

echo 'checked ';

label351:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="read_native">Native Frames <i title="Read input video at native frame rate." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="read_native" id="read_native" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label362;
}

goto label357;

label357:

if (!$E2461a25530fd8a2['read_native']) {
	goto label362;
}

echo 'checked ';

label362:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_symlink">Create Symlink <i title="Generate a symlink to the original file instead of encoding. File needs to exist on all selected servers." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="movie_symlink" id="movie_symlink" type="checkbox" ';
goto label284;

label364:

echo ' <i title="Which container to use when transcoding files." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="target_container" id="target_container" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['auto', 'mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'] as $Bd8c8f05432c0333) {
	goto label369;

	label369:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label384;
	}

	if (!($E2461a25530fd8a2['target_container'] == $Bd8c8f05432c0333)) {
		goto label382;
	}

	echo 'selected ';

	label382:

	goto label384;

	label384:

	echo 'value="';
	echo $Bd8c8f05432c0333;
	echo '">';
	echo $Bd8c8f05432c0333;
	goto label390;

	label390:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label393;

	label393:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Select a transcoding profile to autoamtically encode videos." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($E2461a25530fd8a2)) {
	goto label453;
}

goto label444;

label401:
if (!(isset(XUI::$rRequest['id']) && !($E2461a25530fd8a2 = d8eC9843FC5457DF(XUI::$rRequest['id'])))) {
	goto label417;
}

E72F42a93714BA87();

label417:

$Df5cd7b5dc4cc10c = F964b9222b35AdDD();
$F6edd90960a3bd9d = 'Add Folder';
goto label52;

label422:

if (!isset($E2461a25530fd8a2)) {
	goto label431;
}

if (!$E2461a25530fd8a2['auto_upgrade']) {
	goto label431;
}

echo 'checked ';

label431:

goto label613;

label432:

if (!isset($E2461a25530fd8a2)) {
	goto label443;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo intval($E2461a25530fd8a2['id']);
echo '" />' . "\n\t\t\t\t\t\t\t";

label443:

goto label211;

label444:

if (!(intval($E2461a25530fd8a2['transcode_profile_id']) == 0)) {
	goto label453;
}

echo 'selected ';

label453:

echo 'value="0">Transcoding Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label707;

label455:

if (isset($E2461a25530fd8a2)) {
	goto label460;
}

echo 'checked ';
goto label264;

label460:

if (!$E2461a25530fd8a2['ffprobe_input']) {
	goto label264;
}

goto label263;

label465:

goto label467;

label466:

echo 'Edit';

label467:

echo ' Folder</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";
goto label432;

label469:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allowed_extensions">Allowed Extensions <i title="Allow scanning of the following extensions only. An empty list will allow all extensions." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="allowed_extensions[]" id="allowed_extensions" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'] as $Daecfbd6410b9c42) {
	goto label474;

	label474:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label499;
	}

	if (!in_array($Daecfbd6410b9c42, json_decode($E2461a25530fd8a2['allowed_extensions'], true))) {
		goto label494;
	}

	echo 'selected ';

	label494:

	goto label499;

	label496:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label505;

	label499:

	echo 'value="';
	echo $Daecfbd6410b9c42;
	echo '">';
	echo $Daecfbd6410b9c42;
	goto label496;

	label505:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="language">Force TMDB Language</i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="language" id="language" class="form-control" data-toggle="select2">' . "\n" . '                                                            <option value="">Do Not Force</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (array_slice($b991f823f0dd214d, 1, count($b991f823f0dd214d) - 1) as $Bb672d1983256a93 => $rLanguage) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';
	if (!(isset($E2461a25530fd8a2) && ($E2461a25530fd8a2['language'] == $Bb672d1983256a93))) {
		goto label531;
	}

	echo ' selected';

	label531:

	echo ' value="';
	echo $Bb672d1983256a93;
	echo '">';
	echo $rLanguage;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label343;

label539:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="bouquets">Override Bouquets <i title="Ignore category allocation and force bouquet allocation." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
	goto label544;

	label544:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label573;
	}

	if (!in_array(intval($f155fef57262b32a['id']), json_decode($E2461a25530fd8a2['bouquets'], true))) {
		goto label568;
	}

	echo 'selected ';

	label568:

	goto label573;

	label570:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label584;

	label573:

	echo 'value="';
	echo intval($f155fef57262b32a['id']);
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	goto label570;

	label584:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4" id="fb_category_movie"';

if (!isset($E2461a25530fd8a2)) {
	goto label606;
}

goto label600;

label592:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($E2461a25530fd8a2)) {
	goto label466;
}

echo 'Add';
goto label465;

label600:

if (!($E2461a25530fd8a2['type'] != 'movie')) {
	goto label606;
}

echo ' style="display: none;"';

label606:

echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="fb_category_id_movie">Fallback Category <i title="Add to this category if the Genre isn\'t found in the category allocation list." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="fb_category_id_movie" id="fb_category_id_movie" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
goto label270;

label608:

echo 'checked ';

label609:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="target_container">';
echo $_['target_container'];
goto label364;

label613:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="extract_metadata">Extract Metadata <i title="Use ffprobe to extract metadata information of the file and use that instead of the filename for matching against TMDb." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="extract_metadata" id="extract_metadata" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label789;
}

if (!$E2461a25530fd8a2['extract_metadata']) {
	goto label623;
}

echo 'checked ';

label623:

goto label789;

label624:

if (!(intval($E2461a25530fd8a2['category_id']) == 0)) {
	goto label633;
}

echo 'selected ';

label633:

echo 'value="0">Do Not Use</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label117;

label635:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="remove_subtitles">Remove Existing Subtitles <i title="Remove existing subtitles from file before encoding. You can\'t remove hardcoded subtitles using this method." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="remove_subtitles" id="remove_subtitles" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label609;
}

if (!$E2461a25530fd8a2['remove_subtitles']) {
	goto label609;
}

goto label608;

label645:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="selected_path">Selected Path</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="selected_path" name="selected_path" class="form-control" value="';

if (isset($E2461a25530fd8a2)) {
	goto label839;
}

echo '/';
goto label841;
goto label839;

label652:

echo 'selected ';

label653:

echo 'value="0">Do Not Use</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F769E3F0c739d1A6('series') as $Dbcac322b4274e46) {
	goto label675;

	label661:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label697;

	label664:

	echo 'value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label661;

	label675:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label664;
	}

	if (!(intval($E2461a25530fd8a2['fb_category_id']) == intval($Dbcac322b4274e46['id']))) {
		goto label695;
	}

	echo 'selected ';

	label695:

	goto label664;

	label697:
}

goto label294;

label700:

if (!$E2461a25530fd8a2['auto_encode']) {
	goto label705;
}

echo 'checked ';

label705:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ffprobe_input">Probe Input <i title="Use ffmpeg to probe input files to ensure broken / incomplete files aren\'t added. Will increase load." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ffprobe_input" id="ffprobe_input" type="checkbox" ';
goto label455;

label707:

foreach (f93e9343c3d7FD99() as $b376970f4d4df746) {
	goto label713;

	label713:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E2461a25530fd8a2)) {
		goto label738;
	}

	if (!(intval($E2461a25530fd8a2['transcode_profile_id']) == intval($b376970f4d4df746['profile_id']))) {
		goto label733;
	}

	echo 'selected ';

	label733:

	goto label738;

	label735:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label746;

	label738:

	echo 'value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	goto label735;

	label746:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                            </li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="override">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4" id="category_movie"';

if (!isset($E2461a25530fd8a2)) {
	goto label774;
}

if (!($E2461a25530fd8a2['type'] != 'movie')) {
	goto label774;
}

goto label773;

label759:

goto label182;

label760:

if (!$E2461a25530fd8a2['active']) {
	goto label765;
}

echo 'checked ';

label765:

goto label182;

label766:

if (!$E2461a25530fd8a2['auto_subtitles']) {
	goto label771;
}

echo 'checked ';

label771:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="auto_upgrade">Auto-Upgrade Quality <i title="Automatically upgrade quality if the system finds a new file with better quality that has the same TMDb ID." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="auto_upgrade" id="auto_upgrade" type="checkbox" ';
goto label422;

label773:

echo ' style="display: none;"';

label774:

echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_id_movie">Override Category <i title="Ignore category allocation and force category allocation." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="category_id_movie" id="category_id_movie" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($E2461a25530fd8a2)) {
	goto label633;
}

goto label624;

label780:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label788;
}

e72f42A93714ba87();

label788:

goto label401;

label789:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="duplicate_tmdb">Allow TMDb Duplicates <i title="Disable checks for duplicates using the TMDb ID. Turn this on if you want to add duplicates based on different file locations. Auto-upgrade won\'t work if you enable this." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="duplicate_tmdb" id="duplicate_tmdb" type="checkbox" ';

if (!isset($E2461a25530fd8a2)) {
	goto label635;
}

if (!$E2461a25530fd8a2['duplicate_tmdb']) {
	goto label635;
}

echo 'checked ';
goto label635;

label800:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="auto_encode">Auto-Encode <i title="Start encoding as soon as the movie is added." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="auto_encode" id="auto_encode" type="checkbox" ';

if (isset($E2461a25530fd8a2)) {
	goto label806;
}

echo 'checked ';
goto label705;

label806:

goto label700;

label807:

echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_id_series">Override Category <i title="Ignore category allocation and force category allocation." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="category_id_series" id="category_id_series" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($E2461a25530fd8a2)) {
	goto label70;
}

if (!(intval($E2461a25530fd8a2['category_id']) == 0)) {
	goto label70;
}

echo 'selected ';
goto label70;

label822:

echo ' style="display: none;"';
goto label168;

label824:

if (!($E2461a25530fd8a2['type'] != 'series')) {
	goto label168;
}

echo ' style="display: none;"';
goto label168;

label831:

goto label807;

label832:

if (!($E2461a25530fd8a2['type'] != 'series')) {
	goto label838;
}

echo ' style="display: none;"';

label838:

goto label807;

label839:

echo $E2461a25530fd8a2['directory'];

label841:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-primary waves-effect waves-light" type="button" id="changeDir"><i class="mdi mdi-chevron-right"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="rclone_dir">Rclone Path <i title="Enter the Rclone path here to scan the folder using the Rclone API, would be quicker for remote drives.<br/><br/>You need to modify the rclone.conf file in the config folder with the correct mount information for this to work." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="rclone_dir" name="rclone_dir" class="form-control" value="';

if (!isset($E2461a25530fd8a2)) {
	goto label195;
}

goto label193;

label847:

if (!isset($E2461a25530fd8a2)) {
	goto label856;
}

if (!$E2461a25530fd8a2['fallback_title']) {
	goto label856;
}

echo 'checked ';

label856:

goto label469;

label857:

include 'footer.php';

?>