<?php


goto label22;

label1:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label6;
}

echo 'collapse';

label6:

echo ' form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="log_search" value="" placeholder="';
goto label46;

label8:

echo '</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center date" id="range" name="range" data-toggle="date-picker" data-single-date-picker="true" autocomplete="off" placeholder="';
echo $_['all_dates'];
echo '">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="show_entries">';
echo $_['show'];
echo '</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t";
goto label55;

label16:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['client_logs'];
goto label1;

label22:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label30;
}

E72f42A93714bA87();

label30:

goto label81;

label31:

echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";

foreach ($Efdd269715ece679 as $B19973b37155645f => $C3fa99695f3632c9) {
	echo "\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $B19973b37155645f;
	echo '">';
	echo $C3fa99695f3632c9;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="range">';
echo $_['dates'];
goto label8;

label46:

echo $_['search_logs'];
echo '...">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="filter">';
echo $_['reason'];
echo '</label>' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t" . '<select id="filter" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_reasons'];
goto label31;

label55:

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label65;
	}

	echo ' selected';

	label65:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
goto label100;

label77:

echo $_['date'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label117;

label81:

$F6edd90960a3bd9d = 'Client Logs';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label16;
}

echo ' style="display: none;"';
goto label16;

label100:

echo $_['username'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['stream'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['reason'];
goto label109;

label109:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['user_agent'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['ip'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label77;

label117:

include 'footer.php';

?>