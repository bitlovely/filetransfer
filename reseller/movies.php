<?php


goto label118;

label1:

echo '>';
echo $_['all_categories'];
echo '</option>' . "\n" . '                                    ';

foreach (f769e3f0c739d1a6('movie') as $Dbcac322b4274e46) {
	goto label19;

	label12:

	echo ' selected';

	label13:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
	goto label47;

	label19:

	if (!in_array($Dbcac322b4274e46['id'], $db0a61ef32b89a27['category_ids'])) {
		goto label47;
	}

	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label13;
	}

	goto label12;

	label47:

	goto label49;

	label49:
}

goto label69;

label52:

echo $_['search_movies'];
echo '...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4">' . "\n" . '                                <select id="movies_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['category'])) {
	goto label60;
}

echo ' selected';

label60:

goto label1;

label61:

echo $_['movies'];
echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label68;
}

echo 'collapse';

label68:

goto label133;

label69:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="movies_show_entries">';
echo $_['show'];
echo '</label>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="movies_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label89;

	label77:

	goto label104;

	label79:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label87;
	}

	echo ' selected';

	label87:

	goto label104;

	label89:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label79;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label102;
	}

	echo ' selected';

	label102:

	goto label77;

	label104:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label110;

	label110:

	echo '</option>' . "\n" . '                                    ';
	goto label113;

	label113:
}

goto label116;

label116:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Image</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n" . '                                    <th>Category</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Kill</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label147;

label118:

include 'session.php';
include 'functions.php';

if (bAF6E9EF7775b5a9()) {
	goto label126;
}

e72F42A93714bA87();

label126:

goto label127;

label127:

$F6edd90960a3bd9d = 'Movies';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label61;

label133:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-5">' . "\n" . '                                <input type="text" class="form-control" id="movies_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label145;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label145:

echo '" placeholder="';
goto label52;

label147:

include 'footer.php';

?>