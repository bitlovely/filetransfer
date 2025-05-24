<?php


goto label32;

label1:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Plex Sync</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label44;
}

goto label43;

label13:

$F6edd90960a3bd9d = 'Plex Sync';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1;
}

echo ' style="display: none;"';
goto label1;

label32:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label40;
}

e72F42a93714bA87();

label40:

goto label13;

label41:

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label190;

label43:

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    The server is now being synced. It will be scanned during the next Plex Sync run.' . "\n" . '                </div>' . "\n\t\t\t\t";

label44:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                    <th class="text-center">Status</th>' . "\n" . '                                    <th class="text-center">Plex IP</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Server Name</th>' . "\n" . '                                    <th>Library</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Run</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";

foreach (getPlexServers() as $Ec379295dc7029e6) {
	goto label68;

	label51:

	if ($Ec379295dc7029e6['active']) {
		goto label58;
	}

	echo '                                        <i class="text-secondary fas fa-square"></i>' . "\n" . '                                        ';
	goto label84;

	label58:

	echo '                                        <i class="text-success fas fa-square"></i>' . "\n" . '                                        ';
	goto label84;

	label61:

	echo '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $E2f3e0533bc8c86a;
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $e36d2f5d3c9f0972;
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./plex_add?id=';
	goto label165;

	label68:

	if (0 < $Ec379295dc7029e6['last_run']) {
		goto label76;
	}

	$e36d2f5d3c9f0972 = 'Never';
	goto label102;

	label76:

	$e36d2f5d3c9f0972 = date('Y-m-d H:i:s', $Ec379295dc7029e6['last_run']);
	goto label102;

	label84:

	echo '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $Ec379295dc7029e6['plex_ip'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $Bcf70cba56392975[$Ec379295dc7029e6['server_id']]['server_name'] . (0 < $dda7c79872497ac0 ? '&nbsp; <button type=\'button\' class=\'btn btn-info btn-xs waves-effect waves-light\'>+ ' . $dda7c79872497ac0 . '</button>' : '');
	goto label61;

	label102:

	$E2f3e0533bc8c86a = 'Unknown';

	foreach (json_decode($Ec379295dc7029e6['plex_libraries'], true) as $De974a070013135b) {
		if (!(intval($De974a070013135b['key']) == intval($Ec379295dc7029e6['directory']))) {
			goto label129;
		}

		$E2f3e0533bc8c86a = $De974a070013135b['title'];
		goto label131;

		label129:
	}

	label131:

	$dda7c79872497ac0 = (is_null($Ec379295dc7029e6['server_add']) ? 0 : count(json_decode($Ec379295dc7029e6['server_add'], true)));
	goto label150;

	label150:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="folder-';
	echo intval($Ec379295dc7029e6['id']);
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo intval($Ec379295dc7029e6['id']);
	echo '</td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';
	goto label51;

	label165:

	echo intval($Ec379295dc7029e6['id']);
	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n" . '                                            <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo intval($Ec379295dc7029e6['id']);
	echo ', \'force\');"><i class="mdi mdi-refresh"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo intval($Ec379295dc7029e6['id']);
	goto label184;

	label184:

	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label187;

	label187:
}

goto label41;

label190:

include 'footer.php';

?>