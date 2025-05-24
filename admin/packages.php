<?php


goto label140;

label1:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['packages'];
goto label119;

label7:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['trial'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['official'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label34;

label15:

$F6edd90960a3bd9d = 'Packages';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1;
}

echo ' style="display: none;"';
goto label1;

label34:

echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";

foreach (D8c8284136938Ef0() as $cc386f9ba082650e) {
	goto label43;

	label43:

	if ($cc386f9ba082650e['is_addon']) {
		goto label103;
	}

	echo "\t\t\t\t\t\t\t\t" . '<tr id="package-';
	echo $cc386f9ba082650e['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $cc386f9ba082650e['id'];
	goto label85;

	label55:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";

	if (E589a4BF54a2DAD1('adv', 'edit_package')) {
		goto label68;
	}

	echo '--';
	goto label102;
	goto label68;

	label68:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./package?id=';
	echo $cc386f9ba082650e['id'];
	echo '"><button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="';
	echo $_['edit_package'];
	goto label76;

	label76:

	echo '" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="';
	echo $_['delete_package'];
	echo '" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $cc386f9ba082650e['id'];
	echo ', \'delete\');""><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t";
	goto label102;

	label85:

	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $cc386f9ba082650e['package_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                        ';

	if ($cc386f9ba082650e['is_trial']) {
		goto label98;
	}

	echo '                                        <i class=\'text-secondary mdi mdi-circle\'></i>' . "\n" . '                                        ';
	goto label96;

	label96:

	goto label99;

	label98:

	echo '                                        <i class=\'text-success mdi mdi-circle\'></i>' . "\n" . '                                        ';

	label99:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";
	goto label105;

	label102:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";

	label103:

	goto label115;

	label105:

	if ($cc386f9ba082650e['is_official']) {
		goto label112;
	}

	echo '                                        <i class=\'text-secondary mdi mdi-circle\'></i>' . "\n" . '                                        ';
	goto label55;

	label112:

	echo '                                        <i class=\'text-success mdi mdi-circle\'></i>' . "\n" . '                                        ';
	goto label55;

	label115:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label149;

label119:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label133;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    ';
echo $_['package_success'];
echo '                </div>' . "\n" . '                ';
goto label133;

label133:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['package_name'];
goto label7;

label140:

include 'session.php';
include 'functions.php';

if (e6D500e19634D513()) {
	goto label148;
}

e72f42A93714bA87();

label148:

goto label15;

label149:

include 'footer.php';

?>