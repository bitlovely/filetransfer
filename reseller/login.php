<?php


goto label83;

label1:

echo '</label>' . "\n" . '                                            <input class="form-control" autocomplete="off" type="text" id="username" name="username" required data-parsley-trigger="change" placeholder="">' . "\n" . '                                        </div>' . "\n" . '                                        <div class="form-group mb-3">' . "\n" . '                                            <label for="password">';
echo $_['password'];
echo '</label>' . "\n" . '                                            <input class="form-control" autocomplete="off" type="password" required data-parsley-trigger="change" id="password" name="password" placeholder="">' . "\n" . '                                        </div>' . "\n" . '                                        ';

if (!$f1dcaed925076e67['recaptcha_enable']) {
	goto label272;
}

echo '                                        <h5 class="auth-title text-center" style="margin-bottom:0;">' . "\n" . '                                            <div class="g-recaptcha" data-callback="recaptchaCallback" id="verification" data-sitekey="';
goto label269;

label11:

echo 'bg-animate-info';
goto label17;

label13:

echo 'bg-animate-' . $_COOKIE['hue'];

label17:

goto label40;

label18:

if (!(intval($f1dcaed925076e67['login_flood']) <= intval($b62d6460eb33ea07->get_row()['count']))) {
	goto label39;
}

API::F7E2383F47283Cb7(['ip' => $b38e11ffdc6a3abb, 'notes' => 'LOGIN FLOOD ATTACK']);
exit();

label39:

goto label118;

label40:

echo ' btn-block" type="submit" id="login_button" name="login"';

if (!$f1dcaed925076e67['recaptcha_enable']) {
	goto label46;
}

echo ' disabled';

label46:

echo '>';
goto label147;

label48:

exit();

label49:

echo '<!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '    <head>' . "\n" . '        <meta charset="utf-8" />' . "\n" . '        <title data-id="login">XUI | ';
goto label249;

label51:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
echo $_['login_message_3'];
echo '                            </div>' . "\n" . '                            ';

label55:

goto label248;
goto label244;

label57:
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_NOT_RESELLER)) {
	goto label268;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_DISABLED)) {
	goto label299;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_INVALID_CAPTCHA))) {
	goto label298;
}

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
echo $_['login_message_5'];
goto label297;

label83:

include 'functions.php';

if (!isset($_SESSION['reseller'])) {
	goto label93;
}

header('Location: dashboard');
exit();

label93:

goto label94;

label94:

session_start();
$b38e11ffdc6a3abb = dFAC1B11D332c193();

if (!(0 < intval($f1dcaed925076e67['login_flood']))) {
	goto label118;
}

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `login_logs` WHERE `status` = \'INVALID_LOGIN\' AND `login_ip` = ? AND TIME_TO_SEC(TIMEDIFF(NOW(), `date`)) <= 86400;', $b38e11ffdc6a3abb);

if (!($b62d6460eb33ea07->num_rows() == 1)) {
	goto label39;
}

goto label18;

label118:

if (!isset(XUI::$rRequest['login'])) {
	goto label49;
}

$B9869413eae86beb = ResellerAPI::e10e6f46945857Eb(XUI::$rRequest);
$cbcf0bbd5e139431 = $B9869413eae86beb['status'];

if (!($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label49;
}

goto label230;

label136:

echo '                            <form action="./login" method="POST" data-parsley-validate="">' . "\n" . '                                <div class="card">' . "\n" . '                                    <div class="card-body p-4">' . "\n" . '                                        <input type="hidden" name="referrer" value="';
echo htmlspecialchars(XUI::$rRequest['referrer']);
echo '" />' . "\n" . '                                        <div class="form-group mb-3" id="username_group">' . "\n" . '                                            <label for="username">';
echo $_['username'];
goto label1;

label147:

echo $_['login'];
echo '</button>' . "\n" . '                                </div>' . "\n" . '                            </form>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '        <script src="assets/js/vendor.min.js"></script>' . "\n" . '        <script src="assets/libs/parsleyjs/parsley.min.js"></script>' . "\n" . '        <script src="assets/js/app.min.js"></script>' . "\n\t\t";

if (!$f1dcaed925076e67['recaptcha_enable']) {
	goto label155;
}

echo "\t\t" . '<script src="https://www.google.com/recaptcha/api.js" async defer></script>' . "\n\t\t";

label155:

goto label301;

label156:

echo "\t\t" . '<link href="assets/css/bootstrap.dark.css" rel="stylesheet" type="text/css" />' . "\n" . '        <link href="assets/css/app.dark.css" rel="stylesheet" type="text/css" />' . "\n" . '        ';

label157:

echo '        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />' . "\n\t\t" . '<style>' . "\n" . '        .g-recaptcha {' . "\n" . '            display: inline-block;' . "\n" . '        }' . "\n" . '        .vertical-center {' . "\n" . '            margin: 0;' . "\n" . '            position: absolute;' . "\n" . '            top: 50%;' . "\n" . '            -ms-transform: translateY(-50%);' . "\n" . '            transform: translateY(-50%);' . "\n" . '            width: 100%;' . "\n" . '        }' . "\n\t\t" . '</style>' . "\n" . '    </head>' . "\n" . '    <body class="bg-animate';
if (!(isset($_COOKIE['hue']) && (0 < strlen($_COOKIE['hue'])) && in_array($_COOKIE['hue'], array_keys($f1b18060c577d4da)))) {
	goto label214;
}

goto label210;

label183:

goto label136;

label184:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
echo $_['login_message_1'];
echo '                            </div>' . "\n" . '                            ';
goto label136;

label189:

$C7c58dad8ae2bc6c = basename(XUI::$rRequest['referrer']);

if (!(substr($C7c58dad8ae2bc6c, 0, 6) == 'logout')) {
	goto label205;
}

$C7c58dad8ae2bc6c = 'dashboard';

label205:

header('Location: ' . $C7c58dad8ae2bc6c);
goto label48;

label210:

echo '-' . $_COOKIE['hue'];

label214:

echo '">' . "\n" . '        <div class="body-full navbar-custom">' . "\n" . '            <div class="account-pages vertical-center">' . "\n" . '                <div class="container">' . "\n" . '                    <div class="row justify-content-center">' . "\n" . '                        <div class="col-md-8 col-lg-6 col-xl-5">' . "\n" . '                            <div class="text-center w-75 m-auto whiteout">' . "\n" . '                                <span><img src="assets/images/logo.png" height="80px" alt=""></span>' . "\n" . '                                <p class="text-muted mb-4 mt-3"></p>' . "\n" . '                            </div>' . "\n" . '                            ';
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_FAILURE)) {
	goto label184;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_INVALID_CODE)) {
	goto label244;
}

goto label57;

label230:

if (0 < strlen(XUI::$rRequest['referrer'])) {
	goto label243;
}

header('Location: dashboard');
exit();
goto label49;

label243:

goto label189;

label244:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
echo $_['login_message_2'];
echo '                            </div>' . "\n" . '                            ';

label248:

goto label183;

label249:

echo $_['login'];
echo '</title>' . "\n" . '        <meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n" . '        <meta http-equiv="X-UA-Compatible" content="IE=edge" />' . "\n" . '        <link rel="shortcut icon" href="assets/images/favicon.ico">' . "\n\t\t" . '<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />' . "\n" . '        ';
if (isset($_COOKIE['theme']) && ($_COOKIE['theme'] == 1)) {
	goto label156;
}

echo '        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />' . "\n" . '        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />' . "\n" . '        ';
goto label157;
goto label156;

label264:

echo $_['login_message_4'];
echo '                            </div>' . "\n" . '                            ';

label267:

goto label55;

label268:

goto label51;

label269:

echo $f1dcaed925076e67['recaptcha_v2_site_key'];
echo '"></div>' . "\n" . '                                        </h5>' . "\n" . '                                        ';

label272:

echo '                                    </div>' . "\n" . '                                </div>' . "\n" . '                                <div class="form-group mb-0 text-center">' . "\n" . '                                    <button style="border:0" class="btn btn-info ';
if (isset($_COOKIE['hue']) && (0 < strlen($_COOKIE['hue'])) && in_array($_COOKIE['hue'], array_keys($f1b18060c577d4da))) {
	goto label13;
}

goto label11;

label297:

echo '                            </div>' . "\n" . '                            ';

label298:

goto label267;

label299:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
goto label264;

label301:

echo '        <script>' . "\n" . '        function recaptchaCallback() {' . "\n" . '            $(\'#login_button\').removeAttr(\'disabled\');' . "\n" . '        };' . "\n" . '        </script>' . "\n" . '    </body>' . "\n" . '</html>';

?>