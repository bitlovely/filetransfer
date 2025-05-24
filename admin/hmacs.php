<?php


goto label1;

label1:

include 'session.php';
include 'functions.php';

if (e6d500e19634d513()) {
	goto label9;
}

e72F42A93714ba87();

label9:

goto label74;

label10:

echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t";

foreach (AB3a786b762A1806() as $f7c0c7b6c4fcdd8f) {
	goto label31;

	label19:

	echo $f7c0c7b6c4fcdd8f['notes'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t\t";

	if ($f7c0c7b6c4fcdd8f['enabled']) {
		goto label46;
	}

	echo '<i class="text-secondary fas fa-square"></i>';
	goto label47;
	goto label46;

	label31:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="hmac-';
	echo $f7c0c7b6c4fcdd8f['id'];
	echo '">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $f7c0c7b6c4fcdd8f['id'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label19;

	label40:

	echo '"><button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit Key" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete Key" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $f7c0c7b6c4fcdd8f['id'];
	echo ', \'delete\');""><i class="mdi mdi-close"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t";
	goto label52;

	label46:

	echo '<i class="text-success fas fa-square"></i>';

	label47:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./hmac?id=';
	echo $f7c0c7b6c4fcdd8f['id'];
	goto label40;

	label52:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label93;

label56:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'HMAC Token has been authenticated and can now be used.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label57:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Description</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Enabled</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label10;

label62:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">HMAC Keys</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label57;
}

goto label56;

label74:

$F6edd90960a3bd9d = 'HMAC Keys';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label62;
}

echo ' style="display: none;"';
goto label62;

label93:

include 'footer.php';

?>