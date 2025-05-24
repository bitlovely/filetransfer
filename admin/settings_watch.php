<?php


goto label340;

label1:

echo htmlspecialchars($f1dcaed925076e67['max_genres']);
echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="max_items">Max Items <i title="Maximum number of items to add per folder per scan. Set this to 0 to scan everything." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="max_items" name="max_items" value="';
echo htmlspecialchars($f1dcaed925076e67['max_items']);
echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="alternative_titles">Check Alternative Titles <i title="If a title partially matches a TMDb result, check the alternative titles of that Movie or TV Show to see if any of those match the title." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="alternative_titles" id="alternative_titles" type="checkbox"';

if (!($f1dcaed925076e67['alternative_titles'] == 1)) {
	goto label41;
}

goto label40;

label19:

echo ' style="display: none;"';

label20:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo '                    </div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Folder Watch Settings</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t";
goto label24;

label24:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label33;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'Watch settings sucessfully updated!' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label33:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#setup" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Setup</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#categories" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Movie Categories</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#categories-tv" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-youtube-tv mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">TV Categories</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="setup">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="scan_seconds">Scan Frequency <i title="Scan a folder every X seconds." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="scan_seconds" name="scan_seconds" value="';
echo htmlspecialchars($f1dcaed925076e67['scan_seconds']);
goto label167;

label40:

echo ' checked ';

label41:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="fallback_parser">Use Fallback Parser <i title="If no match is found using your preferred title parser, fallback to the parser you didn\'t select and run again." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="fallback_parser" id="fallback_parser" type="checkbox"';

if (!($f1dcaed925076e67['fallback_parser'] == 1)) {
	goto label181;
}

echo ' checked ';
goto label181;

label49:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label55;

	label55:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="genretv_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '">';
	echo $Fb9da1713bff19ce['genre'];
	echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="genretv_';
	goto label144;

	label64:

	echo 'selected ';

	label65:

	echo 'value="0">Do Not Use</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	foreach (F769E3F0C739D1a6('series') as $Dbcac322b4274e46) {
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

		if (!(intval($Fb9da1713bff19ce['category_id']) == intval($Dbcac322b4274e46['id']))) {
			goto label87;
		}

		echo 'selected ';

		label87:

		echo 'value="';
		echo $Dbcac322b4274e46['id'];
		echo '">';
		echo $Dbcac322b4274e46['category_name'];
		echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	}

	goto label135;

	label98:

	echo $Fb9da1713bff19ce['genre_id'];
	echo '" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

		if (!in_array(intval($f155fef57262b32a['id']), json_decode($Fb9da1713bff19ce['bouquets'], true))) {
			goto label123;
		}

		echo 'selected ';

		label123:

		echo 'value="';
		echo $f155fef57262b32a['id'];
		echo '">';
		echo $f155fef57262b32a['bouquet_name'];
		echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label161;

	label135:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="bouquettv_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '">Bouquets</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquettv_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '[]" id="bouquettv_';
	goto label98;

	label144:

	echo $Fb9da1713bff19ce['genre_id'];
	echo '" id="genretv_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!(intval($Fb9da1713bff19ce['category_id']) == 0)) {
		goto label65;
	}

	goto label64;

	label161:

	goto label163;

	label163:
}

label165:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label349;

label167:

echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="percentage_match">Match Percentage <i title="TMDb match tolerance. Will not accept match if below this percentage threshold." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="percentage_match" name="percentage_match" value="';
echo htmlspecialchars($f1dcaed925076e67['percentage_match']);
echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="thread_count">Thread Count <i title="Number of threads to run simultaneously." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="thread_count" name="thread_count" value="';
echo htmlspecialchars($f1dcaed925076e67['thread_count']);
echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="max_genres">Max Categories & Bouquets <i title="Maximum number of TMDb genres to convert into categories and bouquets. Enter 0 for unlimited." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="max_genres" name="max_genres" value="';
goto label1;

label181:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="categories">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'Select a Category and / or Bouquet to apply to each Genre.' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t";
$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` WHERE `type` = 1 ORDER BY `genre` ASC;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label329;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label233;

	label197:

	goto label305;

	label199:

	echo 'selected ';

	label200:

	echo 'value="0">Do Not Use</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	foreach (F769E3f0C739d1a6('movie') as $Dbcac322b4274e46) {
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

		if (!(intval($Fb9da1713bff19ce['category_id']) == intval($Dbcac322b4274e46['id']))) {
			goto label222;
		}

		echo 'selected ';

		label222:

		echo 'value="';
		echo $Dbcac322b4274e46['id'];
		echo '">';
		echo $Dbcac322b4274e46['category_name'];
		echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	}

	goto label242;

	label233:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="genre_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '">';
	echo $Fb9da1713bff19ce['genre'];
	echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="genre_';
	goto label288;

	label242:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="bouquet_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '">Bouquets</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquet_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '[]" id="bouquet_';
	goto label251;

	label251:

	echo $Fb9da1713bff19ce['genre_id'];
	echo '" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

		if (!in_array(intval($f155fef57262b32a['id']), json_decode($Fb9da1713bff19ce['bouquets'], true))) {
			goto label276;
		}

		echo 'selected ';

		label276:

		echo 'value="';
		echo $f155fef57262b32a['id'];
		echo '">';
		echo $f155fef57262b32a['bouquet_name'];
		echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label197;

	label288:

	echo $Fb9da1713bff19ce['genre_id'];
	echo '" id="genre_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!(intval($Fb9da1713bff19ce['category_id']) == 0)) {
		goto label200;
	}

	goto label199;

	label305:
}

goto label329;

label308:

$Df5cd7b5dc4cc10c = F964b9222b35aDDd();
$F6edd90960a3bd9d = 'Watch Settings';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label20;
}

goto label19;

label329:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="categories-tv">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'Select a Category and / or Bouquet to apply to each Genre.' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\r\n" . '                                                ';
$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` WHERE `type` = 2 ORDER BY `genre` ASC;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label165;
}

goto label49;

label340:

include 'session.php';
include 'functions.php';

if (e6d500e19634D513()) {
	goto label348;
}

E72f42a93714ba87();

label348:

goto label308;

label349:

include 'footer.php';

?>