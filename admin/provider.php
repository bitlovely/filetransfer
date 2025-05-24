<?php


goto label183;

label1:

echo $_['edit'];

label3:

echo ' Provider</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($A2ff75fed18f4512)) {
	goto label13;
}

goto label9;

label9:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $A2ff75fed18f4512['id'];
echo '" />' . "\n" . '                            <input class=\'copyfrom\' tabindex=\'-1\' aria-hidden=\'true\' id="stream_url" value="" style="position: absolute; left: -9999px;">' . "\n\t\t\t\t\t\t\t";

label13:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#category-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label163;

label15:

if (!($A2ff75fed18f4512['legacy'] == 1)) {
	goto label21;
}

echo 'checked ';

label21:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="hls">Use HLS</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="hls" id="hls" type="checkbox" ';
goto label152;

label23:

if (!isset($A2ff75fed18f4512)) {
	goto label32;
}

echo htmlspecialchars($A2ff75fed18f4512['ip']);

label32:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="port">Broadcast Port</label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="port" name="port" value="';

if (isset($A2ff75fed18f4512)) {
	goto label115;
}

goto label113;

label37:

echo $_['edit'];

label39:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

if (!isset($A2ff75fed18f4512)) {
	goto label288;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="view-streams">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-streams" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Stream Name</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Categories</th>' . "\n" . '                                                            <th class="text-center">Modified</th>' . "\n" . '                                                            <th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label290;

label46:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="username">Username</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="username" name="username" value="';

if (!isset($A2ff75fed18f4512)) {
	goto label56;
}

echo htmlspecialchars($A2ff75fed18f4512['username']);

label56:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="password">Password</label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="password" name="password" value="';
goto label138;

label58:

echo 'checked ';

label59:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="legacy">Legacy XC</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="legacy" id="legacy" type="checkbox" ';

if (!isset($A2ff75fed18f4512)) {
	goto label21;
}

goto label15;

label65:

echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label81;
}

echo ' style="display: none;"';

label81:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
goto label129;

label83:

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="category-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="name">Provider Name</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="name" name="name" value="';

if (!isset($A2ff75fed18f4512)) {
	goto label93;
}

echo htmlspecialchars($A2ff75fed18f4512['name']);

label93:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="ip">Server IP / Domain</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="ip" name="ip" value="';
goto label23;

label95:
if (!(isset(XUI::$rRequest['id']) && !($A2ff75fed18f4512 = getStreamProvider(XUI::$rRequest['id'])))) {
	goto label110;
}

exit();

label110:

$F6edd90960a3bd9d = 'Stream Provider';
include 'header.php';
goto label65;

label113:

echo '80';
goto label120;

label115:

echo htmlspecialchars($A2ff75fed18f4512['port']);

label120:

goto label46;

label121:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_provider" type="submit" class="btn btn-primary" value="';

if (isset($A2ff75fed18f4512)) {
	goto label128;
}

echo $_['add'];
goto label39;

label128:

goto label37;

label129:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($A2ff75fed18f4512)) {
	goto label1;
}

echo $_['add'];
goto label3;
goto label1;

label138:

if (!isset($A2ff75fed18f4512)) {
	goto label147;
}

echo htmlspecialchars($A2ff75fed18f4512['password']);

label147:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="enabled">Enabled</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enabled" id="enabled" type="checkbox" ';

if (isset($A2ff75fed18f4512)) {
	goto label194;
}

goto label192;

label152:

if (!isset($A2ff75fed18f4512)) {
	goto label162;
}

if (!($A2ff75fed18f4512['hls'] == 1)) {
	goto label162;
}

echo 'checked ';

label162:

goto label121;

label163:

echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

if (!isset($A2ff75fed18f4512)) {
	goto label171;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#view-streams" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Available Streams</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#view-movies" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Available Movies</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

label171:

goto label83;

label172:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="ssl">SSL</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ssl" id="ssl" type="checkbox" ';

if (!isset($A2ff75fed18f4512)) {
	goto label59;
}

if (!($A2ff75fed18f4512['ssl'] == 1)) {
	goto label59;
}

goto label58;

label183:

include 'session.php';
include 'functions.php';

if (E6D500E19634D513()) {
	goto label191;
}

e72f42a93714bA87();

label191:

goto label95;

label192:

echo 'checked ';
goto label172;

label194:

if (!($A2ff75fed18f4512['enabled'] == 1)) {
	goto label172;
}

echo 'checked ';
goto label172;

label201:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label207;

	label207:

	$b16df9df82ee1dc5 = ($Fb9da1713bff19ce['ssl'] ? 'https' : 'http') . '://' . $A2ff75fed18f4512['ip'] . ':' . $A2ff75fed18f4512['port'] . '/movie/' . $A2ff75fed18f4512['username'] . '/' . $A2ff75fed18f4512['password'] . '/' . $Fb9da1713bff19ce['stream_id'] . '.' . $Fb9da1713bff19ce['channel_id'];
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>    ' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $Fb9da1713bff19ce['stream_id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $Fb9da1713bff19ce['stream_display_name'];
	goto label239;

	label239:

	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo implode(', ', json_decode($Fb9da1713bff19ce['category_array'], true));
	echo '</td>' . "\n" . '                                                            <td class="text-center">';
	echo date('Y-m-d', $Fb9da1713bff19ce['modified']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['modified']) . '</small>';
	echo '</td>' . "\n" . '                                                            <td class="text-center">' . "\n" . '                                                                <a href="movie?title=';
	goto label268;

	label268:

	echo urlencode($Fb9da1713bff19ce['stream_display_name']);
	echo '&path=';
	echo urlencode($b16df9df82ee1dc5);
	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-plus"></i></button></a>' . "\n" . '                                                                <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="Copy URL" onClick="copyURL(\'';
	echo $b16df9df82ee1dc5;
	goto label282;

	label282:

	echo '\');"><i class="mdi mdi-clipboard"></i></button>' . "\n" . '                                                            </td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label285;

	label285:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

label288:

echo "\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label402;

label290:

$b62d6460eb33ea07->query('SELECT `stream_id`, `category_array`, `stream_display_name`, `modified`, `stream_icon` FROM `providers_streams` WHERE `provider_id` = ? AND `type` = \'live\' ORDER BY `modified` DESC, `stream_id` ASC;', $A2ff75fed18f4512['id']);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label353;

	label301:

	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-plus"></i></button></a>' . "\n" . '                                                                <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="Copy URL" onClick="copyURL(\'';
	echo $b16df9df82ee1dc5;
	echo '\');"><i class="mdi mdi-clipboard"></i></button>' . "\n" . '                                                            </td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label393;

	label306:

	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo implode(', ', json_decode($Fb9da1713bff19ce['category_array'], true));
	echo '</td>' . "\n" . '                                                            <td class="text-center">';
	echo date('Y-m-d', $Fb9da1713bff19ce['modified']) . '<br/><small class=\'text-secondary\'>' . date('H:i:s', $Fb9da1713bff19ce['modified']) . '</small>';
	echo '</td>' . "\n" . '                                                            <td class="text-center">' . "\n" . '                                                                <a href="stream?title=';
	goto label335;

	label335:

	echo urlencode($Fb9da1713bff19ce['stream_display_name']);
	echo '&url=';
	echo urlencode($b16df9df82ee1dc5);
	echo '&icon=';
	echo urlencode($Fb9da1713bff19ce['stream_icon']);
	goto label301;

	label353:

	$b16df9df82ee1dc5 = ($A2ff75fed18f4512['ssl'] ? 'https' : 'http') . '://' . $A2ff75fed18f4512['ip'] . ':' . $A2ff75fed18f4512['port'] . '/live/' . $A2ff75fed18f4512['username'] . '/' . $A2ff75fed18f4512['password'] . '/' . $Fb9da1713bff19ce['stream_id'] . ($A2ff75fed18f4512['hls'] ? '.m3u8' : ($A2ff75fed18f4512['legacy'] ? '.ts' : ''));
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>    ' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $Fb9da1713bff19ce['stream_id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $Fb9da1713bff19ce['stream_display_name'];
	goto label306;

	label393:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="view-movies">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-movies" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Movie Name</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Categories</th>' . "\n" . '                                                            <th class="text-center">Modified</th>' . "\n" . '                                                            <th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
$b62d6460eb33ea07->query('SELECT `stream_id`, `category_array`, `stream_display_name`, `modified`, `stream_icon`, `channel_id` FROM `providers_streams` WHERE `provider_id` = ? AND `type` = \'movie\' ORDER BY `modified` DESC, `stream_id` ASC;', $A2ff75fed18f4512['id']);
goto label201;

label402:

include 'footer.php';

?>