<?php


goto label106;

label1:

echo 'collapse';

label2:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-6">' . "\n" . '                                <input type="text" class="form-control" id="reg_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label115;
}

echo htmlspecialchars(XUI::$rRequest['search']);
goto label115;

label15:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Username</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Owner</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">IP</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Credits</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center"># of Lines</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Login</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label122;

label17:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label28;
}

echo ' selected';

label28:

echo '>Disabled</option>' . "\n" . '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="reg_show_entries">Show</label>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="reg_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label54;

	label33:

	goto label45;

	label35:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label43;
	}

	echo ' selected';

	label43:

	goto label45;

	label45:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label51;

	label51:

	echo '</option>' . "\n" . '                                    ';
	goto label69;

	label54:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label35;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label67;
	}

	echo ' selected';

	label67:

	goto label33;

	label69:
}

goto label15;

label72:

$F6edd90960a3bd9d = 'Users';
include 'header.php';
echo '<div class="wrapper">' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Users</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
goto label78;

label78:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label87;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    User has been added / modified.' . "\n" . '                </div>' . "\n" . '                ';

label87:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label2;
}

goto label1;

label92:

echo '>No Filter</option>' . "\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label104;
}

echo ' selected';

label104:

echo '>Active</option>' . "\n" . '                                    <option value="2"';
goto label17;

label106:

include 'session.php';
include 'functions.php';

if (BAF6E9ef7775b5A9()) {
	goto label114;
}

E72f42A93714ba87();

label114:

goto label72;

label115:

echo '" placeholder="Search Users...">' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-2 col-form-label text-center" for="reg_reseller">Filter Results</label>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="reg_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label121;
}

echo ' selected';

label121:

goto label92;

label122:

include 'footer.php';

?>