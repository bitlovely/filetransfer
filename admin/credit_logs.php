<?php


goto label3;

label1:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label76;

label3:

include 'session.php';
include 'functions.php';

if (e6d500E19634D513()) {
	goto label11;
}

e72F42A93714BA87();

label11:

goto label57;

label12:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['owner'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['target'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label20;

label20:

echo $_['amount'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['reason'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['date'];
goto label1;

label29:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="log_search" value="" placeholder="Search Logs...">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="reseller">Reseller &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="reseller" class="form-control" data-toggle="select2"></select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="range">Dates</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center date" id="range" name="range" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="Dates">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="show_entries">Show</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label40;
	}

	echo ' selected';

	label40:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
goto label12;

label51:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['credit_logs'];
goto label29;

label57:

$F6edd90960a3bd9d = 'Credit Logs';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label51;
}

echo ' style="display: none;"';
goto label51;

label76:

include 'footer.php';

?>