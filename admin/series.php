<?php


goto label33;

label1:
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label71;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS_MULTI))) {
	goto label17;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Series are being imported in the background, series that can\'t be matched will not be added. Check Watch Folder logs for information.' . "\n\t\t\t\t" . '</div>' . "\n" . '                ';

label17:

goto label72;
goto label71;

label19:

echo '>No TMDb Match</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == -2))) {
	goto label31;
}

echo ' selected';

label31:

echo '>No Categories</option>' . "\n" . '                                    ';
goto label77;

label33:

include 'session.php';
include 'functions.php';

if (e6d500e19634D513()) {
	goto label41;
}

e72F42a93714ba87();

label41:

goto label49;

label42:

echo ' style="display: none;"';

label43:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">TV Series</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
goto label1;

label47:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                    <th class="text-center">Image</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Category</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Seasons</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Episodes</th>' . "\n" . '                                    <th class="text-center">TMDb</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">First Aired</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Updated</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label173;

label49:

$F771d40e8cf51e59 = F769E3f0C739D1a6('series');
$F6edd90960a3bd9d = 'TV Series';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label43;
}

goto label42;

label71:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Series has been added / modified.' . "\n\t\t\t\t" . '</div>' . "\n" . '                ';

label72:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label160;
}

goto label159;

label77:

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label96;
	}

	echo ' selected';

	label96:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="series_show_entries">Show</label>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="series_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label128;

	label107:

	echo '</option>' . "\n" . '                                    ';
	goto label143;

	label110:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label107;

	label116:

	goto label110;

	label118:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label126;
	}

	echo ' selected';

	label126:

	goto label110;

	label128:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label118;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label141;
	}

	echo ' selected';

	label141:

	goto label116;

	label143:
}

goto label47;

label146:

echo '" placeholder="Search Series...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="series_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value="">All Categories</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == -1))) {
	goto label158;
}

echo ' selected';

label158:

goto label19;

label159:

echo 'collapse';

label160:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-6">' . "\n" . '                                <input type="text" class="form-control" id="series_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label146;
}

echo htmlspecialchars(XUI::$rRequest['search']);
goto label146;

label173:

include 'footer.php';

?>