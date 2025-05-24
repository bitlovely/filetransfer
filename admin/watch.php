<?php


goto label125;

label1:

$F6edd90960a3bd9d = 'Watch Folder';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label113;
}

echo ' style="display: none;"';
goto label113;

label20:

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    The folder is now being watched. It will be scanned during the next Watch Folder run.' . "\n" . '                </div>' . "\n\t\t\t\t";

label21:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                    <th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Type</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Server Name</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Directory</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Run</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";

foreach (dffCDAfe3a02352C() as $E2461a25530fd8a2) {
	goto label94;

	label28:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="folder-';
	echo intval($E2461a25530fd8a2['id']);
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo intval($E2461a25530fd8a2['id']);
	goto label42;

	label42:

	echo '</td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';

	if ($E2461a25530fd8a2['active']) {
		goto label50;
	}

	echo '                                        <i class="text-secondary fas fa-square"></i>' . "\n" . '                                        ';
	goto label87;

	label50:

	goto label86;

	label52:

	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./watch_add?id=';
	echo intval($E2461a25530fd8a2['id']);
	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n" . '                                            <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo intval($E2461a25530fd8a2['id']);
	echo ', \'force\');"><i class="mdi mdi-refresh"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	goto label78;

	label67:

	echo $Bcf70cba56392975[$E2461a25530fd8a2['server_id']]['server_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $E2461a25530fd8a2['directory'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $e36d2f5d3c9f0972;
	goto label52;

	label78:

	echo intval($E2461a25530fd8a2['id']);
	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label110;

	label86:

	echo '                                        <i class="text-success fas fa-square"></i>' . "\n" . '                                        ';

	label87:

	echo '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo ['movie' => 'Movies', 'series' => 'Series'][$E2461a25530fd8a2['type']];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label67;

	label94:

	if (0 < $E2461a25530fd8a2['last_run']) {
		goto label102;
	}

	$e36d2f5d3c9f0972 = 'Never';
	goto label28;

	label102:

	$e36d2f5d3c9f0972 = date('Y-m-d H:i:s', $E2461a25530fd8a2['last_run']);
	goto label28;

	label110:
}

goto label134;

label113:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Watch Folder</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label21;
}

goto label20;

label125:

include 'session.php';
include 'functions.php';

if (E6D500e19634d513()) {
	goto label133;
}

e72f42A93714ba87();

label133:

goto label1;

label134:

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label136;

label136:

include 'footer.php';

?>