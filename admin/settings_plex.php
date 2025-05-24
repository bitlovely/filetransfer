<?php


goto label63;

label1:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="categories-tv">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'Select a Category and / or Bouquet to apply to each Genre.' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\r\n" . '                                                ';
$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` WHERE `type` = 4 ORDER BY `genre` ASC;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label193;
}

goto label77;

label12:

$Df5cd7b5dc4cc10c = F964b9222b35AdDd();
$F6edd90960a3bd9d = 'Plex Settings';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label73;
}

goto label72;

label33:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label42;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'Plex settings sucessfully updated!' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label42:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#setup" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Setup</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#categories" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Movie Categories</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#categories-tv" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-youtube-tv mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">TV Categories</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="setup">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="thread_count_movie">Movie Thread Count <i title="Number of threads to run simultaneously for movies." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="thread_count_movie" name="thread_count_movie" value="';
echo htmlspecialchars($f1dcaed925076e67['thread_count_movie']);
goto label49;

label49:

echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="thread_count_show">Series Thread Count <i title="Number of threads to run simultaneously for TV series. This should be lower as the series thread will be responsible for grabbing all episodes. So this is the number of TV series to scan at once rather than episodes. Try 1/10th of movie thread limit." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="thread_count_show" name="thread_count_show" value="';
echo htmlspecialchars($f1dcaed925076e67['thread_count_show']);
echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="scan_seconds">Scan Frequency <i title="Scan a library every X seconds." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="scan_seconds" name="scan_seconds" value="';
echo htmlspecialchars($f1dcaed925076e67['scan_seconds']);
echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="max_genres">Max Categories & Bouquets <i title="Maximum number of TMDb genres to convert into categories and bouquets. Enter 0 for unlimited." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="max_genres" name="max_genres" value="';
goto label195;

label63:

include 'session.php';
include 'functions.php';

if (e6D500e19634d513()) {
	goto label71;
}

e72F42A93714Ba87();

label71:

goto label12;

label72:

echo ' style="display: none;"';

label73:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo '                    </div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Plex Settings</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t";
goto label33;

label77:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label182;

	label83:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="bouquettv_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '">Bouquets</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquettv_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '[]" id="bouquettv_';
	goto label92;

	label92:

	echo $Fb9da1713bff19ce['genre_id'];
	echo '" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

		if (!in_array(intval($f155fef57262b32a['id']), json_decode($Fb9da1713bff19ce['bouquets'], true))) {
			goto label117;
		}

		echo 'selected ';

		label117:

		echo 'value="';
		echo $f155fef57262b32a['id'];
		echo '">';
		echo $f155fef57262b32a['bouquet_name'];
		echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label129;

	label129:

	goto label191;

	label131:

	echo $Fb9da1713bff19ce['genre_id'];
	echo '" id="genretv_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!(intval($Fb9da1713bff19ce['category_id']) == 0)) {
		goto label149;
	}

	goto label148;

	label148:

	echo 'selected ';

	label149:

	echo 'value="0">Do Not Use</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	foreach (f769e3f0C739D1a6('series') as $Dbcac322b4274e46) {
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

		if (!(intval($Fb9da1713bff19ce['category_id']) == intval($Dbcac322b4274e46['id']))) {
			goto label171;
		}

		echo 'selected ';

		label171:

		echo 'value="';
		echo $Dbcac322b4274e46['id'];
		echo '">';
		echo $Dbcac322b4274e46['category_name'];
		echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	}

	goto label83;

	label182:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="genretv_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '">';
	echo $Fb9da1713bff19ce['genre'];
	echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="genretv_';
	goto label131;

	label191:
}

label193:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label327;

label195:

echo htmlspecialchars($f1dcaed925076e67['max_genres']);
echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="categories">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'Select a Category and / or Bouquet to apply to each Genre.' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t";
$b62d6460eb33ea07->query('SELECT * FROM `watch_categories` WHERE `type` = 3 ORDER BY `genre` ASC;');

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label272;

	label216:

	goto label324;

	label218:

	echo $Fb9da1713bff19ce['genre_id'];
	echo '" id="genre_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!(intval($Fb9da1713bff19ce['category_id']) == 0)) {
		goto label282;
	}

	goto label281;

	label235:

	echo $Fb9da1713bff19ce['genre_id'];
	echo '" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

		if (!in_array(intval($f155fef57262b32a['id']), json_decode($Fb9da1713bff19ce['bouquets'], true))) {
			goto label260;
		}

		echo 'selected ';

		label260:

		echo 'value="';
		echo $f155fef57262b32a['id'];
		echo '">';
		echo $f155fef57262b32a['bouquet_name'];
		echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label216;

	label272:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="genre_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '">';
	echo $Fb9da1713bff19ce['genre'];
	echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="genre_';
	goto label218;

	label281:

	echo 'selected ';

	label282:

	echo 'value="0">Do Not Use</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	foreach (f769e3f0C739d1A6('movie') as $Dbcac322b4274e46) {
		echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

		if (!(intval($Fb9da1713bff19ce['category_id']) == intval($Dbcac322b4274e46['id']))) {
			goto label304;
		}

		echo 'selected ';

		label304:

		echo 'value="';
		echo $Dbcac322b4274e46['id'];
		echo '">';
		echo $Dbcac322b4274e46['category_name'];
		echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	}

	goto label315;

	label315:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="bouquet_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '">Bouquets</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquet_';
	echo $Fb9da1713bff19ce['genre_id'];
	echo '[]" id="bouquet_';
	goto label235;

	label324:
}

goto label1;

label327:

include 'footer.php';

?>