<?php


goto label18;

label1:

echo htmlspecialchars(XUI::$rRequest['search']);

label7:

echo '" placeholder="Search Stations...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4">' . "\n" . '                                <select id="station_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value="" selected>';
echo $_['all_categories'];
echo '</option>' . "\n" . '                                    ';
goto label29;

label12:

$F6edd90960a3bd9d = 'Radio Stations';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Radio Stations</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';
goto label119;

label18:

include 'session.php';
include 'functions.php';

if (BaF6E9ef7775b5A9()) {
	goto label26;
}

e72F42a93714bA87();

label26:

goto label12;

label27:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n" . '                                    <th>Category</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Kill</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label130;

label29:

foreach (f769E3F0C739d1A6('radio') as $Dbcac322b4274e46) {
	goto label36;

	label36:

	if (!in_array($Dbcac322b4274e46['id'], $db0a61ef32b89a27['category_ids'])) {
		goto label64;
	}

	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label67;
	}

	goto label66;

	label64:

	goto label73;

	label66:

	echo ' selected';

	label67:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
	goto label64;

	label73:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="station_show_entries">Show</label>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="station_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label80;

	label80:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label103;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label93;
	}

	echo ' selected';

	label93:

	goto label101;

	label95:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label113;

	label101:

	goto label95;

	label103:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label111;
	}

	echo ' selected';

	label111:

	goto label95;

	label113:

	echo '</option>' . "\n" . '                                    ';
	goto label116;

	label116:
}

goto label27;

label119:

if (!$Ebb0b63f7c597ba4) {
	goto label123;
}

echo 'collapse';

label123:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-5">' . "\n" . '                                <input type="text" class="form-control" id="station_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label7;
}

goto label1;

label130:

include 'footer.php';

?>