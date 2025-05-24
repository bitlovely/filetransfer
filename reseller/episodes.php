<?php


goto label112;

label1:

$F6edd90960a3bd9d = 'Episodes';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\n" . '    <div class="container-fluid">' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-12">' . "\n" . '                <div class="page-title-box">' . "\n" . '                    <div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n" . '                    <h4 class="page-title">';
goto label121;

label7:

echo '>';
echo $_['all_series'];
echo '</option>' . "\n" . '                                    ';

foreach (DecBAb9141F9EE50() as $F955f269a1230501) {
	goto label17;

	label17:

	if (!in_array($F955f269a1230501['id'], $db0a61ef32b89a27['series_ids'])) {
		goto label45;
	}

	echo '                                    <option value="';
	echo $F955f269a1230501['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['series']) && (XUI::$rRequest['series'] == $F955f269a1230501['id']))) {
		goto label48;
	}

	goto label47;

	label45:

	goto label54;

	label47:

	echo ' selected';

	label48:

	echo '>';
	echo $F955f269a1230501['title'];
	echo '</option>' . "\n" . '                                    ';
	goto label45;

	label54:
}

goto label57;

label57:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="series_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['category'])) {
	goto label63;
}

echo ' selected';

label63:

echo '>';
goto label138;

label65:

echo $_['show'];
echo '</label>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="episodes_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label72;

	label72:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label98;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label85;
	}

	echo ' selected';

	label85:

	goto label96;

	label87:

	echo '</option>' . "\n" . '                                    ';
	goto label108;

	label90:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label87;

	label96:

	goto label90;

	label98:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label106;
	}

	echo ' selected';

	label106:

	goto label90;

	label108:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        <table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n" . '                            <thead>' . "\n" . '                                <tr>' . "\n" . '                                    <th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Image</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n" . '                                    <th>Category</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Kill</th>' . "\n" . '                                </tr>' . "\n" . '                            </thead>' . "\n" . '                            <tbody></tbody>' . "\n" . '                        </table>' . "\n" . '                    </div> ' . "\n" . '                </div> ' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n";
goto label203;

label112:

include 'session.php';
include 'functions.php';

if (BaF6e9ef7775b5A9()) {
	goto label120;
}

e72f42a93714bA87();

label120:

goto label1;

label121:

echo $_['episodes'];
echo '</h4>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>     ' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-12">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label128;
}

echo 'collapse';

label128:

goto label189;

label129:

echo $_['search_episodes'];
echo '...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="episodes_series" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['series'])) {
	goto label137;
}

echo ' selected';

label137:

goto label7;

label138:

echo $_['all_categories'];
echo '</option>' . "\n" . '                                    ';

foreach (F769e3F0c739d1a6('series') as $Dbcac322b4274e46) {
	goto label157;

	label148:

	goto label185;

	label150:

	echo ' selected';

	label151:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
	goto label148;

	label157:

	if (!in_array($Dbcac322b4274e46['id'], $db0a61ef32b89a27['category_ids'])) {
		goto label148;
	}

	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label151;
	}

	goto label150;

	label185:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="episodes_show_entries">';
goto label65;

label189:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <input type="text" class="form-control" id="episodes_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label201;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label201:

echo '" placeholder="';
goto label129;

label203:

include 'footer.php';

?>