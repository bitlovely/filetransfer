<?php


function getServerInfo()
{
	global $B011a3b12114e3e5;
	$Fee36b56c9a521cf = json_decode(shell_exec('ip --json address list'), true);
	$Ed48a28037cd1e3e = false;
	$ca155a1ae6a5bb31 = NULL;
	$dd1e15015c786815 = NULL;

	foreach ($Fee36b56c9a521cf as $B77c4808efe777e0) {
		foreach ($B77c4808efe777e0['addr_info'] as $B6de2c76015b2174) {
			goto label20;

			label20:
			if (!(filter_var($B77c4808efe777e0['address'], FILTER_VALIDATE_MAC) && ($B77c4808efe777e0['address'] != '00:00:00:00:00:00'))) {
				goto label55;
			}

			if ($B6de2c76015b2174['local'] == $B011a3b12114e3e5) {
				goto label61;
			}

			if ($ca155a1ae6a5bb31) {
				goto label58;
			}

			$ca155a1ae6a5bb31 = $B77c4808efe777e0['address'];
			$dd1e15015c786815 = $B6de2c76015b2174['local'];
			goto label58;

			label52:

			goto label71;

			label55:

			goto label67;

			label58:

			goto label55;

			label61:

			$ca155a1ae6a5bb31 = $B77c4808efe777e0['address'];
			$Ed48a28037cd1e3e = true;
			goto label52;

			label67:
		}
	}

	label71:

	return [$ca155a1ae6a5bb31, $Ed48a28037cd1e3e, trim(explode("\n", shell_exec('../bin/blkid -o value -s UUID'))[0]), $dd1e15015c786815];
}

goto label322;

label1:

if ($Dbdc22406030e489['error'] == 'STATUS_INVALID_LICENSE') {
	goto label43;
}

if ($Dbdc22406030e489['error'] == 'STATUS_BILLING_INACTIVE') {
	goto label133;
}

if ($Dbdc22406030e489['error'] == 'STATUS_INVALID_MAC') {
	goto label131;
}

if ($Dbdc22406030e489['error'] == 'STATUS_INVALID_IP') {
	goto label242;
}

if ($Dbdc22406030e489['error'] == 'STATUS_REVOKED') {
	goto label287;
}

goto label186;

label22:

echo '                                        <div class="form-group row mt-4 mb-4">' . "\r\n" . '                                            <label class="col-md-4 col-form-label" for="whmcs_license">WHMCS License</label>' . "\r\n" . '                                            <div class="col-md-8">' . "\r\n" . '                                                <input type="text" class="form-control" id="whmcs_license" name="whmcs_license" maxlength="16" value="';
echo $C8642dbd4015cd7e;
echo '">' . "\r\n" . '                                            </div>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        ';

label25:

if ($Ffc2f317a32f24c0) {
	goto label284;
}

goto label31;

label28:

echo '<strong>Licensing Failed:</strong> Licensing system failed to decrypt the request.';

label29:

goto label85;

label30:

goto label84;

label31:

if (!$dbaf3cd4fbd0f046[0]) {
	goto label283;
}

echo '                                        <div class="form-group row mb-4">' . "\r\n" . '                                            <label class="col-md-4 col-form-label" for="server_ip">Server IP</label>' . "\r\n" . '                                            <div class="col-md-8">' . "\r\n" . '                                                <input id="server_ip" type="text" class="form-control"  value="';
echo $B011a3b12114e3e5;
echo '" readonly>' . "\r\n" . '                                            </div>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <div class="form-group row mb-4">' . "\r\n" . '                                            <label class="col-md-4 col-form-label" for="mac_address">MAC Address</label>' . "\r\n" . '                                            <div class="col-md-8">' . "\r\n" . '                                                <input id="mac_address" type="text" class="form-control"  value="';
echo $dbaf3cd4fbd0f046[0];
goto label282;

label41:

echo '<strong>Licensing Failed:</strong> This license is no longer active, please check your billing details.';

label42:

goto label155;

label43:

echo '<strong>Licensing Failed:</strong> Invalid license key entered.';
goto label155;

label45:

$F0d99ffa8aa87812 = explode("\n", file_get_contents('../config/config.ini'));

foreach ($F0d99ffa8aa87812 as $F5ba2106d5227309) {
	if (!(strtolower(substr($F5ba2106d5227309, 0, 7)) == 'license')) {
		goto label72;
	}

	$F5ba2106d5227309 = 'license     =   "' . $C8642dbd4015cd7e . '"';
	$C43a906501e17594 = true;

	label72:

	$Ad30cb98d119a216[] = $F5ba2106d5227309;
}

if ($C43a906501e17594) {
	goto label118;
}

$Dbdc22406030e489 = ['status' => false, 'error' => 'STATUS_WRITE_FAILED'];
goto label117;

label80:

goto label82;

label81:

echo 'No license has been generated for this server. If the <strong>WHMCS License</strong> below is correct and matches your XUI Account, click the <strong>Update License</strong> button to force an update.';

label82:

goto label108;
goto label102;

label84:

echo '<strong>Licensing Failed:</strong> Your IP has been banned by the flood detection system.';

label85:

echo '                                                </div>' . "\r\n" . '                                            ';

label86:

goto label110;

label87:

$e42c4b7374cb0545 = true;

label88:

goto label228;

label89:

$dfa35ab98c9a379f = false;

if (!(trim($Ffc2f317a32f24c0[5]) != $dbaf3cd4fbd0f046[2])) {
	goto label100;
}

$dfa35ab98c9a379f = true;

label100:

echo '<!DOCTYPE html>' . "\r\n" . '<html lang="en">' . "\r\n" . '    <head>' . "\r\n" . '        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . "\r\n" . '        <title>XUI | License</title>' . "\r\n" . '        <meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\r\n" . '        <meta http-equiv="X-UA-Compatible" content="IE=edge" />' . "\r\n" . '        <meta name="robots" content="noindex,nofollow">' . "\r\n" . '        <link rel="shortcut icon" href="assets/images/favicon.ico">' . "\r\n\t\t" . '<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />' . "\r\n" . '        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />' . "\r\n" . '    </head>' . "\r\n" . '    <body>' . "\r\n" . '        <header id="topnav">' . "\r\n" . '            <div class="navbar-overlay bg-animate"></div>' . "\r\n" . '            <div class="navbar-custom">' . "\r\n" . '                <div class="container-fluid">' . "\r\n" . '                    <div class="logo-box">' . "\r\n" . '                        <a href="javascript: void(0);" class="logo text-center">' . "\r\n" . '                            <span class="logo-lg">' . "\r\n" . '                                <img src="assets/images/logo-topbar.png" alt="" height="26">' . "\r\n" . '                            </span>' . "\r\n" . '                            <span class="logo-sm">' . "\r\n" . '                                <img src="assets/images/logo-topbar.png" alt="" height="28">' . "\r\n" . '                            </span>' . "\r\n" . '                        </a>' . "\r\n" . '                    </div>' . "\r\n" . '                    <div class="clearfix"></div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </header>' . "\r\n" . '        <div class="wrapper boxed-layout"';
goto label245;

label102:

echo 'The stored IP address information on your server is showing a different IP (' . $dbaf3cd4fbd0f046[3] . ') to what XUI expected (' . $B011a3b12114e3e5 . '). This will likely mean a license won\'t generate. Contact support with both IP addresses and we will map them to your account.';

label108:

goto label365;

label109:

goto label364;

label110:

goto label112;

label111:

echo '                                        <div class="alert alert-warning" role="alert">' . "\r\n" . '                                            The WHMCS License key you entered isn\'t valid, please ensure it is a 16 character hexadecimal string.' . "\r\n" . '                                        </div>' . "\r\n" . '                                        ';

label112:

if (!$dbaf3cd4fbd0f046[0]) {
	goto label25;
}

goto label22;

label117:

goto label87;

label118:

$F0d99ffa8aa87812 = implode("\n", $Ad30cb98d119a216);

if (file_put_contents('../config/config.ini', $F0d99ffa8aa87812)) {
	goto label334;
}

$Dbdc22406030e489 = ['status' => false, 'error' => 'STATUS_WRITE_FAILED'];
goto label333;

label131:

echo '<strong>Licensing Failed:</strong> Couldn\'t match your MAC address to your system.';

label132:

goto label42;

label133:

goto label41;

label134:

$C8642dbd4015cd7e = parse_ini_file('../config/config.ini')['license'];
goto label88;

label140:

$C8642dbd4015cd7e = $_POST['whmcs_license'];
if ((strlen($C8642dbd4015cd7e) == 16) && ctype_xdigit($C8642dbd4015cd7e)) {
	goto label183;
}

goto label181;

label155:

goto label157;

label156:

echo '<strong>Licensing Failed:</strong> No network configuration details detected.';

label157:

goto label307;

label158:

echo '                                        <div class="alert alert-info" role="alert">' . "\r\n" . '                                            Your license has expired, and it also seems your server configuration has changed since first generating your license. Please visit the <strong><a href="https://xui.one/billing/">XUI Billing Panel</a></strong>, pay your invoices, then click the <strong>Update License</strong> button to generate a new license.' . "\r\n" . '                                        </div>' . "\r\n" . '                                        ';

label159:

goto label86;

label160:

if ($e42c4b7374cb0545) {
	goto label367;
}

goto label264;

label163:

goto label165;

label164:

echo '<strong>Licensing Failed:</strong> Config file couldn\'t be written to safely. Please check permissions.';

label165:

goto label373;
goto label372;

label167:

$B011a3b12114e3e5 = $_SERVER['SERVER_ADDR'];
$dbaf3cd4fbd0f046 = getServerInfo();
$e42c4b7374cb0545 = false;
$e8f25ceae9fc7476 = false;

if (isset($_POST['update_license'])) {
	goto label140;
}

goto label134;

label180:

goto label375;

label181:

$e8f25ceae9fc7476 = true;
goto label88;

label183:

$C43a906501e17594 = false;
$Ad30cb98d119a216 = [];
goto label45;

label186:

if ($Dbdc22406030e489['error'] == 'STATUS_REISSUES_USED') {
	goto label370;
}

if ($Dbdc22406030e489['error'] == 'STATUS_INVALID_PRODUCT') {
	goto label374;
}

if ($Dbdc22406030e489['error'] == 'STATUS_LICENSE_FAILED') {
	goto label372;
}

if ($Dbdc22406030e489['error'] == 'STATUS_WRITE_FAILED') {
	goto label164;
}

echo 'Could not generate a license, please checked your <strong>WHMCS License</strong> below and ensure your license is set to <strong>Reissued</strong> in the billing panel. If it still doesn\'t work, contact support.';
goto label163;

label204:

echo $Ffc2f317a32f24c0[1];
echo '" readonly>' . "\r\n" . '                                            </div>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <div class="form-group row mb-4">' . "\r\n" . '                                            <label class="col-md-4 col-form-label" for="server_ip">Licensed Server IP</label>' . "\r\n" . '                                            <div class="col-md-8">' . "\r\n" . '                                                <input id="server_ip" type="text" class="form-control" value="';
echo $Ffc2f317a32f24c0[2];
echo '" readonly>' . "\r\n" . '                                            </div>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <div class="form-group row mb-4">' . "\r\n" . '                                            <label class="col-md-4 col-form-label" for="expiration_date">Expiration Date</label>' . "\r\n" . '                                            <div class="col-md-8">' . "\r\n" . '                                                <input id="expiration_date" type="text" class="form-control" value="';
echo date('jS F Y', $Ffc2f317a32f24c0[3]);
goto label220;

label217:

echo '                                        <div class="alert alert-info" role="alert">' . "\r\n" . '                                            Your license has expired. Please visit the <strong><a href="https://xui.one/billing/">XUI Billing Panel</a></strong> and pay your invoices, you can then click the <strong>Update License</strong> button to generate a new license.' . "\r\n" . '                                        </div>' . "\r\n" . '                                        ';

label218:

goto label159;

label219:

goto label158;

label220:

echo '" readonly>' . "\r\n" . '                                            </div>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        ';

label221:

echo '                                    </div> ' . "\r\n" . '                                </div> ' . "\r\n" . '                                ';

if (!$dbaf3cd4fbd0f046[0]) {
	goto label180;
}

echo '                                <ul class="list-inline wizard mb-4">' . "\r\n" . '                                    <li class="list-inline-item float-right">' . "\r\n" . '                                        <input name="update_license" type="submit" class="btn btn-primary" value="Update License" />' . "\r\n" . '                                    </li>' . "\r\n" . '                                </ul>' . "\r\n" . '                                ';
goto label180;

label228:

$Ffc2f317a32f24c0 = Xui\Functions::getLicense();
$ab0a0a504b4f3f13 = false;

if (!($Ffc2f317a32f24c0[3] < time())) {
	goto label240;
}

$ab0a0a504b4f3f13 = true;

label240:

goto label89;

label241:

goto label243;

label242:

echo '<strong>Licensing Failed:</strong> Couldn\'t match your outgoing IP address to your system.';

label243:

goto label132;
goto label131;

label245:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label260;
}

echo ' style="display: none;"';

label260:

echo '>' . "\r\n" . '            <div class="container-fluid">' . "\r\n" . '                <div class="row">' . "\r\n" . '                    <div class="col-12">' . "\r\n" . '                        <div class="page-title-box">' . "\r\n" . '                            <h4 class="page-title">XUI License</h4>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '                <div class="row">' . "\r\n" . '                    <div class="col-xl-12">' . "\r\n" . '                        <div class="card-box">' . "\r\n" . '                            <form action="./license" method="POST" data-parsley-validate="">' . "\r\n" . '                                <div class="row">' . "\r\n" . '                                    <div class="col-12">' . "\r\n" . '                                        ';

if ($e8f25ceae9fc7476) {
	goto label111;
}

goto label352;

label264:

echo '                                                <div class="alert alert-info" role="alert">' . "\r\n" . '                                                    ';

if (0 < !$dbaf3cd4fbd0f046[0]) {
	goto label109;
}

if (!$dbaf3cd4fbd0f046[1]) {
	goto label102;
}

if (0 < strlen($C8642dbd4015cd7e)) {
	goto label81;
}

echo 'Welcome to XUI! Please visit the <strong><a href="https://xui.one/billing/">XUI Billing Panel</a></strong> to find your license number and enter it in the box below, then click <strong>Update License</strong> to generate your license file.';
goto label80;

label282:

echo '" readonly>' . "\r\n" . '                                            </div>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        ';

label283:

goto label221;

label284:

echo '                                        <div class="form-group row mb-4">' . "\r\n" . '                                            <label class="col-md-4 col-form-label" for="whmcs_account">WHMCS Account</label>' . "\r\n" . '                                            <div class="col-md-8">' . "\r\n" . '                                                <input id="whmcs_account" type="text" class="form-control"  value="';
goto label204;

label286:

goto label288;

label287:

echo '<strong>Licensing Failed:</strong> License has been revoked! Please check the billing panel.';

label288:

goto label241;

label289:

echo '                                                    <div class="alert alert-danger" role="alert">' . "\r\n" . '                                                    ';

if ($Dbdc22406030e489['error'] == 'STATUS_IP_BANNED') {
	goto label30;
}

if ($Dbdc22406030e489['error'] == 'STATUS_DECRYPT_FAILED') {
	goto label28;
}

if ($Dbdc22406030e489['error'] == 'STATUS_NO_SERVER_ID') {
	goto label308;
}

if ($Dbdc22406030e489['error'] == 'STATUS_NO_NETWORK') {
	goto label156;
}

goto label1;

label307:

goto label309;

label308:

echo '<strong>Licensing Failed:</strong> No server ID detected, check your configuration file.';

label309:

goto label29;
goto label28;

label311:

shell_exec('/home/xui/bin/php/bin/php /home/xui/crons/license.php');
shell_exec('/home/xui/bin/php/bin/php /home/xui/includes/cli/startup.php');
header('Location: ./index');
exit();

label321:

goto label87;

label322:

if (!Xui\Functions::verifyLicense()) {
	goto label331;
}

header('Location: ./index');
exit();

label331:

goto label167;

label333:

goto label87;

label334:

$Dbdc22406030e489 = Xui\Functions::updateLicense('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', intval($_SERVER['SERVER_PORT']));

if (!$Dbdc22406030e489['status']) {
	goto label321;
}

shell_exec('/home/xui/bin/php/bin/php /home/xui/crons/epg.php > /dev/null 2>/dev/null &');
goto label311;

label352:

if (!$Ffc2f317a32f24c0) {
	goto label160;
}
if ($ab0a0a504b4f3f13 && $dfa35ab98c9a379f) {
	goto label219;
}

if ($ab0a0a504b4f3f13) {
	goto label217;
}

echo '                                        <div class="alert alert-info" role="alert">' . "\r\n" . '                                            Your server configuration has changed since first generating your license. You can click the <strong>Update License</strong> button to generate a new license, this will reissue your license ensuring you have enough reissues to continue.' . "\r\n" . '                                        </div>' . "\r\n" . '                                        ';
goto label218;
goto label217;

label364:

echo 'Your server isn\'t giving XUI information about the installed network devices, such as your external IP Address and MAC Address. Please contact support!';

label365:

echo '                                                </div>' . "\r\n" . '                                            ';
goto label86;

label367:

goto label289;

label368:

echo '<strong>Licensing Failed:</strong> Invalid product selected. Please contact support.';

label369:

goto label286;

label370:

echo '<strong>Licensing Failed:</strong> Maximum number of reissues has been used. Please contact support.';
goto label286;

label372:

echo '<strong>Licensing Failed:</strong> License failed to generate with an unknown error. Please contact support.';

label373:

goto label369;

label374:

goto label368;

label375:

echo '                            </form>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div> ' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </div>' . "\r\n" . '        <footer class="footer">' . "\r\n" . '            <div class="container-fluid">' . "\r\n" . '                <div class="row">' . "\r\n" . '                    <div class="col-md-12 copyright text-center">&copy; <img height=\'20px\' style=\'padding-left: 10px; padding-right: 10px; margin-top: -2px;\' class=\'whiteout\' src=\'./assets/images/logo-topbar.png\' /> 2021</div>' . "\r\n" . '                </div>' . "\r\n" . '            </div>' . "\r\n" . '        </footer>' . "\r\n" . '    </body>' . "\r\n" . '</html>';

?>