<?php


goto label21;

label1:

if (isset(XUI::$rRequest['update'])) {
	goto label7;
}

echo 'Reinstall Proxy';
goto label103;

label7:

echo 'Update Proxy';
goto label103;

label9:

if ($B59d0718aa3e5332) {
	goto label13;
}

E72f42A93714Ba87();

label13:

goto label150;

label14:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n" . '                    ';

if ($A7d54b094ae83c95 == 1) {
	goto label68;
}

goto label228;

label21:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label29;
}

e72f42a93714Ba87();

label29:

goto label130;

label30:

echo 'value="';

if (!isset($B59d0718aa3e5332)) {
	goto label40;
}

echo htmlspecialchars($B59d0718aa3e5332['server_name']);

label40:

goto label220;

label41:

goto label43;

label42:

$A7d54b094ae83c95 = 1;

label43:

if (!isset(XUI::$rRequest['id'])) {
	goto label13;
}

goto label183;

label49:
if (isset($B59d0718aa3e5332) && isset(XUI::$rRequest['update'])) {
	goto label71;
}

echo '                                                <div class="alert alert-warning mb-4" role="alert">' . "\n" . '                                                    ';

if ($A7d54b094ae83c95 == 1) {
	goto label311;
}

echo '                                                    Installation will begin immediately, you will be alerted of progress on the Server View page. After installation is complete you can amend the ports and other server settings.' . "\n" . '                                                    ';
goto label310;

label62:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

label63:

echo "\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n" . '                        ';
goto label107;

label65:

goto label106;

label66:

echo '</h4>' . "\n" . '                    ';
goto label104;

label68:

goto label75;

label69:

echo '                                                </div>' . "\n" . '                                                ';
goto label148;

label71:

echo '                                                <div class="alert alert-info" role="alert">' . "\n" . '                                                    In order to update your XUI core from v';
echo $B59d0718aa3e5332['xui_version'];
goto label142;

label75:

echo "\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($B59d0718aa3e5332)) {
	goto label81;
}

echo 'Proxy Installation';
goto label103;

label81:

goto label1;

label82:

if (!isset($B59d0718aa3e5332)) {
	goto label91;
}

echo htmlspecialchars($B59d0718aa3e5332['server_ip']);

label91:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="server_ip">SSH Port</label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="ssh_port" name="ssh_port" value="22" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="root_username">SSH Username <i title="This needs to be either the root user, or sudoer. Root is recommended." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="root_username" name="root_username" value="root" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="root_username">SSH Password</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="root_password" name="root_password" value="" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

if ($A7d54b094ae83c95 == 1) {
	goto label102;
}

goto label96;

label96:

if (!isset($B59d0718aa3e5332)) {
	goto label101;
}

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="update_only">Update Server <i title="Select this option to update the server files to the latest instead of reinstalling it and resetting the PHP-FPM and NGINX settings." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="update_only" id="update_only" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                ';

label101:

goto label158;

label102:

goto label157;

label103:

echo '</h4>' . "\n" . '                    ';

label104:

echo "\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n" . '                        ';
goto label109;

label106:

echo '                        <div class="alert alert-danger" role="alert">' . "\n" . '                            This is your main server, you cannot reinstall it from the XUI panel. To reinstall this server, please use the installation instructions on the billing panel.' . "\n" . '                        </div>' . "\n" . '                        ';

label107:

echo "\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label325;

label109:
if (isset($B59d0718aa3e5332) && ($B59d0718aa3e5332['is_main'] == 1)) {
	goto label65;
}

echo "\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n" . '                            ';

if (!isset($B59d0718aa3e5332)) {
	goto label126;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $B59d0718aa3e5332['id'];
goto label125;

label125:

echo '" />' . "\n" . '                            ';

label126:

echo '                            <input type="hidden" id="parent_id" name="parent_id" value="" />' . "\n" . '                            <input type="hidden" name="type" value="';
echo $A7d54b094ae83c95;
echo '" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#server-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-creation mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label239;

label130:

if (isset(XUI::$rRequest['proxy'])) {
	goto label42;
}
if (!($E0a8102c8d2ef5b6 || $a76857631510ce75)) {
	goto label140;
}

exit();

label140:

$A7d54b094ae83c95 = 2;
goto label41;

label142:

echo ' to v';
echo $Bcf70cba56392975[SERVER_ID]['xui_version'];
echo ', you will need to enter root SSH details.<br/>This will reinstall your server with the most up to date software, it shouldn\'t take too long, however your server will be offline to customers during the update process.' . "\n" . '                                                </div>' . "\n" . '                                                ';

label148:

echo '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            ';
goto label316;

label150:

if ($A7d54b094ae83c95 == 1) {
	goto label155;
}

$F6edd90960a3bd9d = 'Install Server';
goto label165;

label155:

$F6edd90960a3bd9d = 'Install Proxy';
goto label165;

label157:

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="http_broadcast_port">HTTP Port <i title="Enter a port number between 1024 and 65535. As XUI doesn\'t run as root, it cannot run on a port lower than 1024. This cannot be changed later." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="http_broadcast_port" name="http_broadcast_port" value="80" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="https_broadcast_port">HTTPS Port <i title="Enter a port number between 1024 and 65535. As XUI doesn\'t run as root, it cannot run on a port lower than 1024. This cannot be changed later." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="https_broadcast_port" name="https_broadcast_port" value="443" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label158:

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="update_sysctl">Update sysctl.conf <i title="Use the XUI sysctl.conf file. If you have your own custom sysctl.conf, then disable this or it will be overwritten. If you don\'t know what a sysctl configuration is, use this as it will correctly set your TCP settings and open file limits." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="update_sysctl" id="update_sysctl" type="checkbox" data-plugin="switchery" class="js-switch" checked data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                ';

if (!($A7d54b094ae83c95 == 1)) {
	goto label49;
}

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="use_private_ip">Use Private IP <i title="Use the private IP of the load balancer you\'ve selected to route traffic internally." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="use_private_ip" id="use_private_ip" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                ';
goto label49;

label165:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label14;
}

echo ' style="display: none;"';
goto label14;

label183:

if ($A7d54b094ae83c95 == 1) {
	goto label194;
}

$B59d0718aa3e5332 = $Bcf70cba56392975[intval(XUI::$rRequest['id'])];
goto label9;

label194:

$B59d0718aa3e5332 = $a080f5083618911e[intval(XUI::$rRequest['id'])];
goto label9;

label202:

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="server-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="server_name">';
echo $_['server_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="server_name" name="server_name" ';

if (!isset($B59d0718aa3e5332)) {
	goto label30;
}

echo 'readonly ';
goto label30;

label212:

if (isset(XUI::$rRequest['update'])) {
	goto label218;
}

echo 'Reinstall Server';
goto label66;

label218:

echo 'Update Server';
goto label66;

label220:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="server_ip">Server IP</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="server_ip" name="server_ip" ';

if (!isset($B59d0718aa3e5332)) {
	goto label226;
}

echo 'readonly ';

label226:

echo 'value="';
goto label82;

label228:

echo '                    <h4 class="page-title">';

if (isset($B59d0718aa3e5332)) {
	goto label234;
}

echo 'Server Installation';
goto label66;

label234:

goto label212;

label235:

echo '                                                    <br/><br/>With new installations, the file limit is set in the system. A reboot is required for this, but you can do it at your own pace.' . "\n" . '                                                    ';
goto label238;

label237:

echo '                                                    <br/><br/>As you are reinstalling the server, it will go offline until the installation is complete.' . "\n" . '                                                    ';

label238:

goto label69;

label239:

echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';

if (!($A7d54b094ae83c95 == 1)) {
	goto label247;
}

echo '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#server-coverage" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Server Coverage</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';

label247:

goto label202;

label248:

echo '                                    <div class="tab-pane" id="server-coverage">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Server Name</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Server IP</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (XUI::$rServers as $C082ca9ed03f473c => $d7a58eb484b29045) {
	goto label255;

	label255:

	if (!($d7a58eb484b29045['server_type'] != 0)) {
		goto label263;
	}

	goto label295;

	label263:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr';
	if (!(isset($B59d0718aa3e5332) && in_array($d7a58eb484b29045['id'], XUI::$rServers[$B59d0718aa3e5332['id']]['parent_id']))) {
		goto label283;
	}

	goto label282;

	label282:

	echo ' class=\'selected selectedfilter ui-selected\'';

	label283:

	echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $d7a58eb484b29045['id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label289;

	label289:

	echo $d7a58eb484b29045['server_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $d7a58eb484b29045['server_ip'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label295:

	goto label297;

	label297:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_server" type="submit" class="btn btn-primary" value="';
echo $_['install_server'];
goto label62;

label303:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                            ';

label304:

echo "\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

if (!($A7d54b094ae83c95 == 1)) {
	goto label63;
}

goto label248;

label310:

goto label312;

label311:

echo '                                                    You will not be able to change the port or any other settings through the XUI Admin Panel after installation, you will be required to reinstall the proxy server entirely.<br/><br/>Installation will begin immediately, you will be alerted of progress on the Server View page.' . "\n" . '                                                    ';

label312:

if (isset($B59d0718aa3e5332)) {
	goto label237;
}

goto label235;

label316:

if ($A7d54b094ae83c95 == 1) {
	goto label303;
}

echo '                                            <li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_server" type="submit" class="btn btn-primary" value="';
echo $_['install_server'];
echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                            ';
goto label304;
goto label303;

label325:

include 'footer.php';

?>