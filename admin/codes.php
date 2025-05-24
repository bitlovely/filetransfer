<?php


goto label69;

label1:

foreach (EfadB87D8c867176() as $E28b12c74d51f0b0) {
	goto label37;

	label7:

	goto label46;

	label9:

	echo '<i class="text-secondary fas fa-square"></i>';
	goto label13;

	label12:

	echo '<i class="text-success fas fa-square"></i>';

	label13:

	goto label28;

	label15:

	echo $E28b12c74d51f0b0['code'];
	echo '</td>' . "\r\n" . '                                    <td class="text-center">';
	echo ['Admin', 'Reseller', 'Ministra', 'Admin API', 'Reseller API', 'Ministra XUI - Disbanded', 'Web Player'][$E28b12c74d51f0b0['type']];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t\t";

	if ($E28b12c74d51f0b0['enabled']) {
		goto label12;
	}

	goto label9;

	label28:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./code?id=';
	echo $E28b12c74d51f0b0['id'];
	echo '"><button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Code" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Code" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $E28b12c74d51f0b0['id'];
	echo ', \'delete\');""><i class="mdi mdi-close"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t";
	goto label7;

	label37:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="code-';
	echo $E28b12c74d51f0b0['id'];
	echo '">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $E28b12c74d51f0b0['id'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label15;

	label46:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label101;

label50:

$F6edd90960a3bd9d = 'Access Codes';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label90;
}

echo ' style="display: none;"';
goto label90;

label69:

include 'session.php';
include 'functions.php';

if (e6d500e19634d513()) {
	goto label77;
}

e72f42a93714Ba87();

label77:

goto label50;

label78:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Access Code</th>' . "\r\n" . '                                    <th class="text-center">Type</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Enabled</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t";
goto label1;

label86:

echo "\t\t\t\t" . '<div class="alert alert-info" role="alert">' . "\r\n\t\t\t\t\t" . 'Access codes are tied directly into your webserver, any modifications will reload your webserver settings and can cause a few seconds of inaccessibility.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";
goto label89;

label88:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'Your webserver has been modified to accept this access code.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label89:

goto label78;

label90:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Access Codes</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t";
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label88;
}

goto label86;

label101:

include 'footer.php';

?>