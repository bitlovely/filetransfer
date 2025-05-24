<?php


goto label319;

label1:

$F6edd90960a3bd9d = 'Stream Providers';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label20;
}

echo ' style="display: none;"';
goto label20;

label20:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Stream Providers</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label329;
}

goto label328;

label32:

foreach (getStreamProviders() as $A2ff75fed18f4512) {
	goto label133;

	label38:

	echo '                                        </td>' . "\n" . '                                        <td class="text-center">' . "\n" . '                                        ';

	if (0 < $ba2d146bb5a55097['movies']) {
		goto label181;
	}

	echo '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['movies'], 0) . '</button>';
	goto label189;
	goto label181;

	label56:

	echo $A2ff75fed18f4512['id'];
	echo '</td>' . "\n" . '                                        <td class="text-center">';
	echo $b9f049445aa9bd5d;
	echo '</td>' . "\n" . '                                        <td>';
	echo $A2ff75fed18f4512['name'];
	goto label124;

	label65:

	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n" . '                                            </div>' . "\n" . '                                        </td>' . "\n" . '                                    </tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label315;

	label68:

	if (0 < $ba2d146bb5a55097['streams']) {
		goto label83;
	}

	echo '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['streams'], 0) . '</button>';
	goto label38;

	label83:

	echo '<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['streams'], 0) . '</button>';
	goto label38;

	label93:

	if (($ba2d146bb5a55097['max_connections'] * 0.75) < $ba2d146bb5a55097['active_connections']) {
		goto label115;
	}

	if (($ba2d146bb5a55097['max_connections'] * 0.5) < $ba2d146bb5a55097['active_connections']) {
		goto label112;
	}

	$E65328c8afa8e30a = 'success';
	goto label113;
	goto label112;

	label112:

	$E65328c8afa8e30a = 'warning';

	label113:

	goto label257;

	label115:

	goto label256;

	label117:

	$b9f049445aa9bd5d = '<i class="text-secondary fas fa-square"></i>';

	label118:

	echo '                                    <tr id="provider-';
	echo $A2ff75fed18f4512['id'];
	echo '">' . "\n" . '                                        <td class="text-center">';
	goto label56;

	label124:

	echo '<br/><small>';
	echo $A2ff75fed18f4512['ip'];
	echo ':';
	echo $A2ff75fed18f4512['port'];
	echo '</small></td>' . "\n" . '                                        <td class="text-center">';
	goto label286;

	label133:

	$ba2d146bb5a55097 = json_decode($A2ff75fed18f4512['data'], true);

	if (!$A2ff75fed18f4512['enabled']) {
		goto label179;
	}
	if ($A2ff75fed18f4512['enabled'] && $A2ff75fed18f4512['status']) {
		goto label176;
	}

	$b9f049445aa9bd5d = '<i class="text-danger fas fa-square"></i>';
	goto label177;
	goto label176;

	label156:

	echo '<button type="button" class="btn btn-secondary btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['series'], 0) . '</button>';
	goto label174;

	label166:

	echo '<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['series'], 0) . '</button>';

	label174:

	goto label197;

	label176:

	$b9f049445aa9bd5d = '<i class="text-success fas fa-square"></i>';

	label177:

	goto label118;

	label179:

	goto label117;

	label181:

	echo '<button type="button" class="btn btn-info btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['movies'], 0) . '</button>';

	label189:

	echo '                                        </td>' . "\n" . '                                        <td class="text-center">' . "\n" . '                                        ';

	if (0 < $ba2d146bb5a55097['series']) {
		goto label166;
	}

	goto label156;

	label197:

	echo '                                        </td>' . "\n" . '                                        <td class="text-center">';
	echo $ba2d146bb5a55097['exp_date'] == -1 ? 'Unknown' : ($ba2d146bb5a55097['exp_date'] ? date('Y-m-d', $ba2d146bb5a55097['exp_date']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $ba2d146bb5a55097['exp_date']) . '</small>' : 'Never');
	echo '</td>' . "\n" . '                                        <td class="text-center">';
	echo $A2ff75fed18f4512['last_changed'] ? date('Y-m-d', $A2ff75fed18f4512['last_changed']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $A2ff75fed18f4512['last_changed']) . '</small>' : 'Never';
	echo '</td>' . "\n" . '                                        <td class="text-center">' . "\n" . '                                            <div class="btn-group">' . "\n" . '                                                <a href="provider?id=';
	goto label246;

	label246:

	echo $A2ff75fed18f4512['id'];
	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil"></i></button></a>' . "\n" . '                                                <button type="button" title="Force Reload" class="tooltip btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $A2ff75fed18f4512['id'];
	echo ', \'reload\');"><i class="mdi mdi-refresh"></i></button>' . "\n" . '                                                <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $A2ff75fed18f4512['id'];
	goto label65;

	label256:

	$E65328c8afa8e30a = 'danger';

	label257:

	echo '<a href="streams?search=' . urlencode(strtolower($A2ff75fed18f4512['ip'])) . '&filter=1"><button type="button" class="btn btn-' . $E65328c8afa8e30a . ' btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['active_connections'], 0) . ' / ' . number_format($ba2d146bb5a55097['max_connections'], 0) . '</button></a>';

	label283:

	echo '                                        </td>' . "\n" . '                                        <td class="text-center">' . "\n" . '                                        ';
	goto label68;

	label286:

	echo $A2ff75fed18f4512['username'];
	echo '</td>' . "\n" . '                                        <td class="text-center">' . "\n" . '                                        ';

	if (0 < $ba2d146bb5a55097['max_connections']) {
		goto label93;
	}

	echo '<a href="streams?search=' . urlencode(strtolower($A2ff75fed18f4512['ip'])) . '&filter=1"><button type="button" class="btn btn-success btn-xs waves-effect waves-light">' . number_format($ba2d146bb5a55097['active_connections'], 0) . ' / &infin;</button></a>';
	goto label283;
	goto label93;

	label315:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label334;

label319:

include 'session.php';
include 'functions.php';

if (E6D500e19634d513()) {
	goto label327;
}

e72f42A93714bA87();

label327:

goto label1;

label328:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Provider has been added to the database and will be periodically scanned.' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label329:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n" . '                                    <th class="text-center">';
echo $_['id'];
echo '</th>' . "\n" . '                                    <th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Provider</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Username</th>' . "\n" . '                                    <th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Streams</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Movies</th>' . "\n" . '                                    <th class="text-center">Series</th>' . "\n" . '                                    <th class="text-center">Expires</th>' . "\n" . '                                    <th class="text-center">Last Changed</th>' . "\n" . '                                    <th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";
goto label32;

label334:

include 'footer.php';

?>