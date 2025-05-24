<?php


goto label144;

label1:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label153;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
echo $_['group_success'];
echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";
goto label153;

label15:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['is_admin'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['is_reseller'];
echo '</th>' . "\n" . '                                    <th class="text-center">Subresellers</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label48;

label23:

$F6edd90960a3bd9d = 'Groups';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label42;
}

echo ' style="display: none;"';
goto label42;

label42:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['groups'];
goto label1;

label48:

echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";

foreach (ad052A625c6aC011() as $fb719dae9595b9fa) {
	goto label131;

	label57:

	echo '                                        <i class=\'text-secondary mdi mdi-circle\'></i>' . "\n" . '                                        ';
	goto label61;

	label60:

	echo '                                        <i class=\'text-success mdi mdi-circle\'></i>' . "\n" . '                                        ';

	label61:

	goto label97;

	label63:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="';
	echo $_['delete_group'];
	echo '" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $fb719dae9595b9fa['group_id'];
	echo ', \'delete\');""><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t";
	goto label107;

	label72:

	echo $fb719dae9595b9fa['group_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                        ';

	if ($fb719dae9595b9fa['is_admin']) {
		goto label110;
	}

	echo '                                        <i class=\'text-secondary mdi mdi-circle\'></i>' . "\n" . '                                        ';
	goto label111;
	goto label110;

	label84:

	echo $fb719dae9595b9fa['group_id'];
	echo '"><button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="';
	echo $_['edit_group'];
	echo '" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t";

	if (!$fb719dae9595b9fa['can_delete']) {
		goto label107;
	}

	goto label63;

	label97:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';

	if ($fb719dae9595b9fa['create_sub_resellers']) {
		goto label105;
	}

	echo '                                        <i class=\'text-secondary mdi mdi-circle\'></i>' . "\n" . '                                        ';
	goto label119;

	label105:

	goto label118;

	label107:

	echo "\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label140;

	label110:

	echo '                                        <i class=\'text-success mdi mdi-circle\'></i>' . "\n" . '                                        ';

	label111:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';

	if ($fb719dae9595b9fa['is_reseller']) {
		goto label60;
	}

	goto label57;

	label118:

	echo '                                        <i class=\'text-success mdi mdi-circle\'></i>' . "\n" . '                                        ';

	label119:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t";

	if (!e589a4bF54A2dad1('adv', 'edit_group')) {
		goto label107;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./group?id=';
	goto label84;

	label131:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="group-';
	echo $fb719dae9595b9fa['group_id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $fb719dae9595b9fa['group_id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label72;

	label140:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label160;

label144:

include 'session.php';
include 'functions.php';

if (E6D500E19634d513()) {
	goto label152;
}

E72f42a93714BA87();

label152:

goto label23;

label153:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['group_name'];
goto label15;

label160:

include 'footer.php';

?>