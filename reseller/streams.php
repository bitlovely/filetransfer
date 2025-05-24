<?php


goto label130;

label1:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="stream_show_entries">Show</label>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="stream_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label6;

	label6:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label23;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label19;
	}

	echo ' selected';

	label19:

	goto label21;

	label21:

	goto label36;

	label23:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label31;
	}

	echo ' selected';

	label31:

	goto label36;

	label33:

	echo '</option>' . "\n" . '                                    ';
	goto label42;

	label36:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label33;

	label42:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-borderless table-striped dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n" . '                                    <th>Category</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Kill</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label139;

label46:

$F6edd90960a3bd9d = 'Streams';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Streams</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';
goto label119;

label52:

echo htmlspecialchars(XUI::$rRequest['search']);

label58:

echo '" placeholder="Search Streams...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4">' . "\n" . '                                <select id="stream_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['category'])) {
	goto label65;
}

echo ' selected';
goto label65;

label65:

echo '>';
echo $_['all_categories'];
echo '</option>' . "\n" . '                                    ';

foreach (F769E3F0C739D1A6('live') as $Dbcac322b4274e46) {
	goto label76;

	label76:

	if (!in_array($Dbcac322b4274e46['id'], $db0a61ef32b89a27['category_ids'])) {
		goto label107;
	}

	echo '                                    <option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label110;
	}

	goto label109;

	label107:

	goto label116;

	label109:

	echo ' selected';

	label110:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
	goto label107;

	label116:
}

goto label1;

label119:

if (!$Ebb0b63f7c597ba4) {
	goto label123;
}

echo 'collapse';

label123:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-5">' . "\n" . '                                <input type="text" class="form-control" id="stream_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label58;
}

goto label52;

label130:

include 'session.php';
include 'functions.php';

if (bAf6e9EF7775b5a9()) {
	goto label138;
}

e72F42a93714BA87();

label138:

goto label46;

label139:

include 'footer.php';

?>