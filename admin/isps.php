<?php


goto label78;

label1:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Blocked ISP\'s</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label16;
}

goto label15;

label13:

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label87;

label15:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'ISP has been blocked on all servers.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label16:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>ISP Name</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Blocked</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t";

foreach (e87Ade454d6C69d1() as $fc07e00b86ce286c) {
	goto label35;

	label23:

	echo $fc07e00b86ce286c['isp'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t\t";

	if ($fc07e00b86ce286c['blocked']) {
		goto label44;
	}

	echo "\t\t\t\t\t\t\t\t\t\t" . '<i class="text-secondary fas fa-square"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t";
	goto label45;
	goto label44;

	label35:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="isp-';
	echo $fc07e00b86ce286c['id'];
	echo '">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $fc07e00b86ce286c['id'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label23;

	label44:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<i class="text-success fas fa-square"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t";

	label45:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./isp?id=';
	echo $fc07e00b86ce286c['id'];
	goto label50;

	label50:

	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $fc07e00b86ce286c['id'];
	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t";
	goto label56;

	label56:
}

goto label13;

label59:

$F6edd90960a3bd9d = 'Blocked ISP\'s';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1;
}

echo ' style="display: none;"';
goto label1;

label78:

include 'session.php';
include 'functions.php';

if (E6D500e19634D513()) {
	goto label86;
}

e72f42a93714Ba87();

label86:

goto label59;

label87:

include 'footer.php';

?>