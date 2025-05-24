<?php


goto label74;

label1:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Blocked User-Agents</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label17;
}

goto label13;

label13:

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    ';
echo $_['useragent_success'];
echo '                </div>' . "\n" . '                ';

label17:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>User-Agent</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Exact Match</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";
goto label19;

label19:

foreach (eaC02E498611cE84() as $Ecc2c91f94cb4fcb) {
	goto label34;

	label25:

	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo intval($Ecc2c91f94cb4fcb['id']);
	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label70;

	label34:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="ua-';
	echo intval($Ecc2c91f94cb4fcb['id']);
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo intval($Ecc2c91f94cb4fcb['id']);
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label49;

	label49:

	echo $Ecc2c91f94cb4fcb['user_agent'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";

	if ($Ecc2c91f94cb4fcb['exact_match']) {
		goto label61;
	}

	echo "\t\t\t\t\t\t\t\t\t\t" . '<i class="text-secondary fas fa-square"></i>' . "\n\t\t\t\t\t\t\t\t\t\t";
	goto label62;
	goto label61;

	label61:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<i class="text-success fas fa-square"></i>' . "\n\t\t\t\t\t\t\t\t\t\t";

	label62:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./useragent?id=';
	echo intval($Ecc2c91f94cb4fcb['id']);
	goto label25;

	label70:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label102;

label74:

include 'session.php';
include 'functions.php';

if (e6D500E19634D513()) {
	goto label82;
}

e72f42A93714ba87();

label82:

goto label83;

label83:

$F6edd90960a3bd9d = 'Blocked User-Agents';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1;
}

echo ' style="display: none;"';
goto label1;

label102:

include 'footer.php';

?>