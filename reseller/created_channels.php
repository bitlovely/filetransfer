<?php


goto label54;

label1:

echo htmlspecialchars(XUI::$rRequest['search']);

label7:

echo '" placeholder="Search Channels...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4">' . "\n" . '                                <select id="stream_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value="" selected>All Categories</option>' . "\n" . '                                    ';

foreach (F769E3f0c739D1a6('live') as $Dbcac322b4274e46) {
	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label30;
	}

	echo ' selected';

	label30:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
}

goto label63;

label37:

$F6edd90960a3bd9d = 'Created Channels';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Created Channels</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';
goto label43;

label43:

if (!$Ebb0b63f7c597ba4) {
	goto label47;
}

echo 'collapse';

label47:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-5">' . "\n" . '                                <input type="text" class="form-control" id="stream_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label7;
}

goto label1;

label54:

include 'session.php';
include 'functions.php';

if (bAf6e9eF7775b5A9()) {
	goto label62;
}

E72F42a93714Ba87();

label62:

goto label37;

label63:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="stream_show_entries">Show</label>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="stream_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label71;

	label68:

	echo '</option>' . "\n" . '                                    ';
	goto label104;

	label71:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label94;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label84;
	}

	echo ' selected';

	label84:

	goto label92;

	label86:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label68;

	label92:

	goto label86;

	label94:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label102;
	}

	echo ' selected';

	label102:

	goto label86;

	label104:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-borderless table-striped dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                    <th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n" . '                                    <th>Category</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Kill</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label108;

label108:

include 'footer.php';

?>