<?php


goto label16;

label1:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Folder Watch / Plex Sync Output</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<form id="series_form">' . "\n\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="result_search" value="" placeholder="Search Results...">' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="result_server" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>All Servers</option>' . "\n\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

goto label27;

label16:

include 'session.php';
include 'functions.php';

if (e6D500E19634D513()) {
	goto label24;
}

e72F42a93714bA87();

label24:

goto label40;

label25:

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t" . '<table id="datatable-md1" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Type</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Server</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Filename</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Date Added</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label88;

label27:

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="result_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>All Types</option>' . "\n\t\t\t\t\t\t\t\t\t\t";

foreach ([1 => 'Movies', 2 => 'Series'] as $Abcb228699a7f743 => $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Abcb228699a7f743;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="result_status" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>All Statuses</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
goto label59;

label40:

$F6edd90960a3bd9d = 'Watch Folder Logs';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1;
}

echo ' style="display: none;"';
goto label1;

label59:

foreach ([1 => 'Added', 2 => 'SQL Error', 3 => 'No Category', 4 => 'No Match', 5 => 'Invalid File'] as $Abcb228699a7f743 => $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Abcb228699a7f743;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="result_show_entries">Show</label>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="result_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label80;
	}

	echo ' selected';

	label80:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

goto label25;

label88:

include 'footer.php';

?>