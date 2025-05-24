<?php


goto label187;

label1:
if (!($E59d0debc75e7be8['isp_is_server'] && !$E59d0debc75e7be8['is_restreamer'])) {
	goto label12;
}

$cbcf0bbd5e139431 = CLIENT_DISALLOWED;
goto label224;

label12:

$_SESSION['phash'] = $E59d0debc75e7be8['id'];
goto label211;

label17:

if (empty($Ed75bdbe6497efd6)) {
	goto label107;
}

$D154a76cf486ca25 = !empty($E59d0debc75e7be8['forced_country']);
if (!($D154a76cf486ca25 && ($E59d0debc75e7be8['forced_country'] != 'ALL') && ($Ed75bdbe6497efd6 != $E59d0debc75e7be8['forced_country']))) {
	goto label125;
}

$cbcf0bbd5e139431 = CLIENT_DISALLOWED;
goto label124;

label37:

XUI::aeeA5d3137274f80();

label39:

echo '<!DOCTYPE html>' . "\r\n" . '<html lang="en">' . "\r\n" . '<head>' . "\r\n\t" . '<meta charset="utf-8">' . "\r\n\t" . '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">' . "\r\n\t" . '<link rel="stylesheet" href="css/bootstrap-reboot.min.css">' . "\r\n\t" . '<link rel="stylesheet" href="css/bootstrap-grid.min.css">' . "\r\n\t" . '<link rel="stylesheet" href="css/default-skin.css">' . "\r\n\t" . '<link rel="stylesheet" href="css/main.css">' . "\r\n\t" . '<link rel="shortcut icon" href="img/favicon.ico">' . "\r\n\t" . '<title>';
echo XUI::$rSettings['server_name'];
goto label174;

label44:

XUI::verifyLicense();
DBC3e29f55C945AB();
define('CLIENT_INVALID', 0);
define('CLIENT_IS_E2', 1);
define('CLIENT_IS_MAG', 2);
goto label247;

label61:

if (!$E59d0debc75e7be8['is_stalker']) {
	goto label68;
}

$cbcf0bbd5e139431 = CLIENT_IS_STALKER;
goto label224;

label68:
if (!(!is_null($E59d0debc75e7be8['exp_date']) && ($E59d0debc75e7be8['exp_date'] <= time()))) {
	goto label231;
}

goto label228;

label83:

$f76e05a7b2c4a341 = false;
if (!(!empty($E59d0debc75e7be8['allowed_ips']) && !in_array($b38e11ffdc6a3abb, array_map('gethostbyname', $E59d0debc75e7be8['allowed_ips'])))) {
	goto label17;
}

$cbcf0bbd5e139431 = CLIENT_DISALLOWED;
goto label224;
goto label17;

label105:

echo '                        <div class="alert bg-animate" style="color: #fff;padding-top: 80px; padding-bottom: 80px;">' . "\r\n" . '                            Installation has been completed!<br/><br/>Please delete <strong>install.php</strong> to continue.' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

label106:

goto label339;

label107:
if (!(!empty($E59d0debc75e7be8['allowed_ua']) && !in_array($Ecc2c91f94cb4fcb, $E59d0debc75e7be8['allowed_ua']))) {
	goto label166;
}

$cbcf0bbd5e139431 = CLIENT_DISALLOWED;
goto label224;
goto label166;

label124:

goto label224;

label125:
if (!(!$D154a76cf486ca25 && !in_array('ALL', XUI::$rSettings['allow_countries']) && !in_array($Ed75bdbe6497efd6, XUI::$rSettings['allow_countries']))) {
	goto label107;
}

$cbcf0bbd5e139431 = CLIENT_DISALLOWED;
goto label224;
goto label107;

label151:

goto label224;

label152:

if (!$E59d0debc75e7be8['is_e2']) {
	goto label239;
}

$cbcf0bbd5e139431 = CLIENT_IS_E2;
goto label224;
goto label239;

label160:

echo $c9c7d3ab646c9696[$cbcf0bbd5e139431];
echo '                            </div>' . "\r\n" . '                            ';

label163:

echo '                            <button class="sign__btn" type="submit">LOGIN</button>' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n" . '                        ';
goto label106;
goto label105;

label166:

if (!$E59d0debc75e7be8['isp_violate']) {
	goto label173;
}

$cbcf0bbd5e139431 = CLIENT_DISALLOWED;
goto label224;

label173:

goto label1;

label174:

echo '</title>' . "\r\n" . '</head>' . "\r\n" . '<body class="body" style="padding-bottom: 0 !important;">' . "\r\n\t" . '<div class="sign">' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t" . '<div class="sign__content">' . "\r\n" . '                        ';

if (file_exists('install.php')) {
	goto label105;
}

echo "\t\t\t\t\t\t" . '<form action="./login.php" class="sign__form" method="post">' . "\r\n\t\t\t\t\t\t\t" . '<span class="sign__logo">' . "\r\n" . '                                <img src="img/logo.png" alt="" height="80px">' . "\r\n" . '                            </span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="sign__group">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="text" name="username" class="sign__input" placeholder="Username">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="sign__group">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="password" name="password" class="sign__input" placeholder="Password">' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                            ';

if (!isset($cbcf0bbd5e139431)) {
	goto label163;
}

echo '                            <div class="alert alert-danger">' . "\r\n" . '                                ';
goto label160;

label187:

$A2369d6b9e3c5c6e = true;
include 'functions.php';
if (!(file_exists('install.php') && !file_exists('config.php') && !extension_loaded('xui'))) {
	goto label210;
}

header('Location: install.php');

label210:

goto label44;

label211:

$_SESSION['pverify'] = md5($E59d0debc75e7be8['username'] . '||' . $E59d0debc75e7be8['password']);
header('Location: index.php');

label224:

if (!$f76e05a7b2c4a341) {
	goto label39;
}

goto label37;

label228:

$cbcf0bbd5e139431 = CLIENT_EXPIRED;
goto label224;

label231:

if (!($E59d0debc75e7be8['admin_enabled'] == 0)) {
	goto label269;
}

$cbcf0bbd5e139431 = CLIENT_BANNED;
goto label268;

label239:

if (!$E59d0debc75e7be8['is_mag']) {
	goto label246;
}

$cbcf0bbd5e139431 = CLIENT_IS_MAG;
goto label224;

label246:

goto label61;

label247:

define('CLIENT_IS_STALKER', 3);
define('CLIENT_EXPIRED', 4);
define('CLIENT_BANNED', 5);
define('CLIENT_DISABLED', 6);
define('CLIENT_DISALLOWED', 7);
goto label300;

label268:

goto label224;

label269:

if (!($E59d0debc75e7be8['enabled'] == 0)) {
	goto label83;
}

$cbcf0bbd5e139431 = CLIENT_DISABLED;
goto label224;
goto label83;

label278:

$f76e05a7b2c4a341 = true;
$Ecc2c91f94cb4fcb = (empty($_SERVER['HTTP_USER_AGENT']) ? '' : htmlentities(trim($_SERVER['HTTP_USER_AGENT'])));

if ($E59d0debc75e7be8) {
	goto label152;
}

$cbcf0bbd5e139431 = CLIENT_INVALID;
goto label224;
goto label151;

label300:

$c9c7d3ab646c9696 = ['Invalid username or password.', 'Enigma lines are not permitted here.', 'MAG lines are not permitted here.', 'Stalker lines are not permitted here.', 'Your line has expired.', 'Your line has been banned.', 'Your line has been disabled.', 'You are not allowed to access this player.'];
if (!(!empty(XUI::$rRequest['username']) || !empty(XUI::$rRequest['password']))) {
	goto label39;
}

$b38e11ffdc6a3abb = XUI::aD72B4259ca295b2();
$Ed75bdbe6497efd6 = (PLATFORM == 'xui' ? XUI::AEd9009B5dc15cAE($b38e11ffdc6a3abb)['country']['iso_code'] : NULL);
$E59d0debc75e7be8 = XUI::cC988751eeBBF271(NULL, XUI::$rRequest['username'], XUI::$rRequest['password'], true);
goto label278;

label339:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n\t" . '<script src="js/jquery-3.5.1.min.js"></script>' . "\r\n\t" . '<script src="js/bootstrap.bundle.min.js"></script>' . "\r\n" . '</body>' . "\r\n" . '</html>';

?>