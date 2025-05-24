<?php


goto label169;

label1:

$b7a2be4a9b9c6aad = Xui\Functions::checkReissues('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
$b62d6460eb33ea07->query('UPDATE `settings` SET `reissues` = ?', json_encode($b7a2be4a9b9c6aad));

label12:

if (isset($b7a2be4a9b9c6aad)) {
	goto label178;
}

$b7a2be4a9b9c6aad = json_decode(XUI::$rSettings['reissues'], true) ?: [];
goto label178;

label25:

echo '                <div class="card-box">' . "\r\n" . '                    <form action="./license_info" method="POST" data-parsley-validate="">' . "\r\n" . '                        <div class="row">' . "\r\n" . '                            <div class="col-12">' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-3 col-form-label" for="whmcs_license">WHMCS License</label>' . "\r\n" . '                                    <div class="col-md-3">' . "\r\n" . '                                        <input type="text" class="form-control text-center" id="whmcs_license" name="whmcs_license" maxlength="16" value="';
echo XUI::$rConfig['license'];
echo '" readonly>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <label class="col-md-3 col-form-label" for="whmcs_account">WHMCS Account</label>' . "\r\n" . '                                    <div class="col-md-3">' . "\r\n" . '                                        <input id="whmcs_account" type="text" class="form-control text-center"  value="';
echo $a3c3f656c0bb428b[1];
goto label227;

label33:

echo '                            </div>' . "\r\n" . '                        </div> ' . "\r\n" . '                        <ul class="list-inline wizard mb-4">' . "\r\n" . '                            <li class="list-inline-item float-right">' . "\r\n" . '                                <input name="update_license" type="submit" class="btn btn-primary" value="Refresh License" />' . "\r\n" . '                                ';
if (!($ed04192a51041c44 && ($Bcf70cba56392975[SERVER_ID]['status'] != 5))) {
	goto label44;
}

echo '                                <input name="update_xui" type="submit" class="btn btn-info" value="Update XUI" />' . "\r\n" . '                                ';

label44:

goto label100;

label45:

echo '                    Your load balancers and proxies will automatically update once the main server has updated.' . "\r\n" . '                    ';

label46:

goto label202;

label47:

echo '                    XUI is currently waiting to be updated... Your server will become unavailable once the process begins.' . "\r\n" . '                    ';
goto label202;

label49:

echo ' is available for download now! Click the update button below when you\'re ready to update your main server, the process won\'t take long however the server will go offline while the update is in progress.<br/><br/>' . "\r\n" . '                    ';

if ($f1dcaed925076e67['auto_update_lb']) {
	goto label55;
}

echo '                    Your load balancers and proxies can be manually updated by clicking the Download icon next to them.' . "\r\n" . '                    ';
goto label46;

label55:

goto label45;

label56:
if (!(($a3c3f656c0bb428b[3] < time()) && (time() <= $a3c3f656c0bb428b[4]))) {
	goto label99;
}

echo '                <div class="alert alert-danger mb-4" role="alert">' . "\r\n" . '                    Your license has expired! XUI will shut down in ';
echo 86400 < ($a3c3f656c0bb428b[4] - time()) ? intval(($a3c3f656c0bb428b[4] - time()) / 86400) . ' days' : intval(($a3c3f656c0bb428b[4] - time()) / 3600) . ' hours';
echo '.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label99:

goto label241;

label100:

echo '                            </li>' . "\r\n" . '                        </ul>' . "\r\n" . '                    </form>' . "\r\n" . '                </div>' . "\r\n" . '            </div> ' . "\r\n" . '        </div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label356;

label102:

if (!$ed04192a51041c44) {
	goto label203;
}

echo '                <div class="alert alert-info mb-4" role="alert">' . "\r\n" . '                    ';

if ($Bcf70cba56392975[SERVER_ID]['status'] == 5) {
	goto label47;
}

echo '                    XUI v';
echo $f1dcaed925076e67['update_version'];
goto label49;

label116:

echo '                <div class="alert alert-warning mb-4" role="alert">' . "\r\n" . '                    You\'ve almost used all of your license reissues, you can only move this license to one more server.</br><br/>Please raise a ticket on the Billing Panel in order to get the reissues for your license reset.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label117:

goto label25;

label118:

echo '                <div class="alert alert-danger mb-4" role="alert">' . "\r\n" . '                    You\'ve used all of your license reissues, if you attempt to move the license to a new server or reinstall this server and re-license it, you will be met with an error and will be unable to do so.</br><br/>Please raise a ticket on the Billing Panel in order to get the reissues for your license reset.' . "\r\n" . '                </div>' . "\r\n" . '                ';
goto label25;

label120:

echo ' style="display: none;"';

label121:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">License Info</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t" . '<div class="row">' . "\r\n" . '            <div class="col-xl-12">' . "\r\n" . '                ';

if (isset($Dbdc22406030e489)) {
	goto label197;
}
if ((time() < $a3c3f656c0bb428b[3]) && (($a3c3f656c0bb428b[3] - time()) < 604800)) {
	goto label242;
}

goto label56;

label139:

echo $b7a2be4a9b9c6aad['max'];
echo '" readonly>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <label class="col-md-3 col-form-label" for="current_reissues">Current Reissues</label>' . "\r\n" . '                                    <div class="col-md-3">' . "\r\n" . '                                        <input id="current_reissues" type="text" class="form-control text-center" value="';
echo $b7a2be4a9b9c6aad['reissues'];
echo '" readonly>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                                ';

if (!(0 < count($b7a2be4a9b9c6aad['log']))) {
	goto label33;
}

goto label273;

label154:

goto label12;

label155:

$Dbdc22406030e489 = Xui\Functions::updateLicense('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', intval($_SERVER['SERVER_PORT']));
$a3c3f656c0bb428b = Xui\Functions::getLicense();
goto label1;

label169:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label177;
}

e72f42A93714BA87();

label177:

goto label321;

label178:

$F6edd90960a3bd9d = 'License Info';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label121;
}

goto label120;

label196:

goto label226;

label197:

if ($Dbdc22406030e489['status']) {
	goto label225;
}

echo '                <div class="alert alert-danger mb-4" role="alert">' . "\r\n" . '                    A new license could not be generated, please raise a ticket if you think this is an error.' . "\r\n" . '                </div>' . "\r\n" . '                ';
goto label224;

label202:

echo '                </div>' . "\r\n" . '                ';

label203:
if ((0 < $b7a2be4a9b9c6aad['max']) && ($b7a2be4a9b9c6aad['max'] <= $b7a2be4a9b9c6aad['reissues'])) {
	goto label118;
}
if (!((0 < $b7a2be4a9b9c6aad['max']) && ($b7a2be4a9b9c6aad['reissues'] == $b7a2be4a9b9c6aad['max'] - 1))) {
	goto label117;
}

goto label116;

label224:

goto label226;

label225:

echo '                <div class="alert alert-success mb-4" role="alert">' . "\r\n" . '                    A new license has been generated and your details have been updated.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label226:

goto label102;

label227:

echo '" readonly>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-3 col-form-label" for="server_ip">Licensed Server IP</label>' . "\r\n" . '                                    <div class="col-md-3">' . "\r\n" . '                                        <input id="server_ip" type="text" class="form-control text-center" value="';
echo $a3c3f656c0bb428b[2];
echo '" readonly>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <label class="col-md-3 col-form-label" for="expiration_date">Expiration Date</label>' . "\r\n" . '                                    <div class="col-md-3">' . "\r\n" . '                                        <input id="expiration_date" type="text" class="form-control text-center" value="';
echo date(XUI::$rSettings['datetime_format'], $a3c3f656c0bb428b[3]);
echo '" readonly>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="form-group row mb-4">' . "\r\n" . '                                    <label class="col-md-3 col-form-label" for="max_reissues">Max Reissues</label>' . "\r\n" . '                                    <div class="col-md-3">' . "\r\n" . '                                        <input id="max_reissues" type="text" class="form-control text-center" value="';
goto label139;

label241:

goto label196;

label242:

echo '                <div class="alert alert-warning mb-4" role="alert">' . "\r\n" . '                    Your license expires in ';
echo 86400 < ($a3c3f656c0bb428b[3] - time()) ? intval(($a3c3f656c0bb428b[3] - time()) / 86400) . ' days' : intval(($a3c3f656c0bb428b[3] - time()) / 3600) . ' hours';
echo '.' . "\r\n" . '                </div>' . "\r\n" . '                ';
goto label196;

label273:

echo '                                <table class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n" . '                                    <thead>' . "\r\n" . '                                        <tr>' . "\r\n" . '                                            <th class="text-center">#</th>' . "\r\n" . '                                            <th class="text-center">IP Address</th>' . "\r\n" . '                                            <th class="text-center">MAC Address</th>' . "\r\n" . '                                            <th class="text-center">Issue Date</th>' . "\r\n" . '                                        </tr>' . "\r\n" . '                                    </thead>' . "\r\n" . '                                    <tbody>' . "\r\n" . '                                        ';
$df6991d59f367c7e = count($b7a2be4a9b9c6aad['log']) + 1;

foreach ($b7a2be4a9b9c6aad['log'] as $B4a603c2a57d3acf) {
	goto label285;

	label285:

	$df6991d59f367c7e--;
	echo '                                        <tr>' . "\r\n" . '                                            <td class="text-center">';
	echo $df6991d59f367c7e;
	echo '</td>' . "\r\n" . '                                            <td class="text-center">';
	echo htmlentities($B4a603c2a57d3acf['ip']);
	goto label299;

	label297:

	goto label317;

	label299:

	echo '</td>' . "\r\n" . '                                            <td class="text-center">';
	echo htmlentities($B4a603c2a57d3acf['mac']);
	echo '</td>' . "\r\n" . '                                            <td class="text-center">';
	echo date(XUI::$rSettings['datetime_format'], $B4a603c2a57d3acf['date']);
	echo '</td>' . "\r\n" . '                                        </tr>' . "\r\n" . '                                        ';
	goto label297;

	label317:
}

echo '                                    </tbody>' . "\r\n" . '                                </table>' . "\r\n" . '                                ';
goto label33;

label321:

if (isset($_POST['update_license'])) {
	goto label155;
}

if (!isset($_POST['update_xui'])) {
	goto label154;
}

$b62d6460eb33ea07->query('DELETE FROM `signals` WHERE `server_id` = ? AND `custom_data` = ?;', SERVER_ID, json_encode(['action' => 'update']));
$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', SERVER_ID, time(), json_encode(['action' => 'update']));
$Bcf70cba56392975[SERVER_ID]['status'] = 5;
goto label154;

label356:

include 'footer.php';

?>