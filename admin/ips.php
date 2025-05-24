<?php


goto label70;

label1:
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label103;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_FLUSH))) {
	goto label17;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'All blocked IP\'s have been flushed from the database.' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label17:

goto label104;
goto label103;

label19:

echo $_['date'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";

foreach (dC088F5BEC67Ce39() as $b38e11ffdc6a3abb) {
	goto label45;

	label31:

	echo $b38e11ffdc6a3abb['ip'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $b38e11ffdc6a3abb['notes'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo date('Y-m-d H:i:s', $b38e11ffdc6a3abb['date']);
	goto label54;

	label45:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="ip-';
	echo $b38e11ffdc6a3abb['id'];
	echo '">' . "\n" . '                                    <td class="text-center">';
	echo $b38e11ffdc6a3abb['id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label31;

	label54:

	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $b38e11ffdc6a3abb['id'];
	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label60;

	label60:
}

goto label87;

label63:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['blocked_ip_addresses'];
echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t";
goto label1;

label70:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label78;
}

E72f42a93714BA87();

label78:

goto label89;

label79:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['ip_address'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['notes'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label19;

label87:

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label126;

label89:

if (!isset(XUI::$rRequest['flush'])) {
	goto label101;
}

A0C5C8de2109Dd97();
header('Location: ./ips?status=' . STATUS_FLUSH);

label101:

$F6edd90960a3bd9d = 'Blocked IP\'s';
goto label108;

label103:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'IP has been added to the block list and propagated across all servers.' . "\n\t\t\t\t" . '</div>' . "\n" . '                ';

label104:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n" . '                                    <th class="text-center">';
echo $_['id'];
goto label79;

label108:

include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label125;
}

echo ' style="display: none;"';

label125:

goto label63;

label126:

include 'footer.php';

?>