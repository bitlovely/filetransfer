<?php


goto label13;

label1:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">RTMP IP Addresses</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label26;
}

goto label22;

label13:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label21;
}

E72F42a93714Ba87();

label21:

goto label99;

label22:

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    ';
echo $_['rtmp_success'];
echo '                </div>' . "\n" . '                ';

label26:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">IP Address</th>' . "\n" . '                                    <th class="text-center">Password</th>' . "\n" . '                                    <th class="text-center">Push</th>' . "\n" . '                                    <th class="text-center">Pull</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";
goto label28;

label28:

foreach (D5dE20BCa4dd43AB() as $b38e11ffdc6a3abb) {
	goto label34;

	label34:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="ip-';
	echo $b38e11ffdc6a3abb['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $b38e11ffdc6a3abb['id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label77;

	label43:

	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label95;

	label46:

	echo '                                    </td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                    ';

	if ($b38e11ffdc6a3abb['pull']) {
		goto label54;
	}

	echo '<i class="text-secondary fas fa-square"></i>';
	goto label57;

	label54:

	goto label56;

	label56:

	echo '<i class="text-success fas fa-square"></i>';

	label57:

	echo '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t";

	if (!E589A4bF54a2DAD1('adv', 'add_rtmp')) {
		goto label72;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./rtmp_ip?id=';
	goto label69;

	label69:

	echo $b38e11ffdc6a3abb['id'];
	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t";

	label72:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $b38e11ffdc6a3abb['id'];
	goto label43;

	label77:

	echo $b38e11ffdc6a3abb['ip'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $b38e11ffdc6a3abb['password'];
	echo '</td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                    ';

	if ($b38e11ffdc6a3abb['push']) {
		goto label92;
	}

	goto label89;

	label89:

	echo '<i class="text-secondary fas fa-square"></i>';
	goto label93;

	label92:

	echo '<i class="text-success fas fa-square"></i>';

	label93:

	goto label46;

	label95:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label118;

label99:

$F6edd90960a3bd9d = 'RTMP IP\'s';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1;
}

echo ' style="display: none;"';
goto label1;

label118:

include 'footer.php';

?>