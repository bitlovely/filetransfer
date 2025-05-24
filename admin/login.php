<?php


goto label211;

label1:

if (!($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label68;
}

if (c9359222B3e3d256() == 'setup') {
	goto label64;
}

if (0 < strlen(XUI::$rRequest['referrer'])) {
	goto label105;
}

header('Location: dashboard');
exit();
goto label104;

label24:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
echo $_['login_message_4'];
echo '                            </div>' . "\n" . '                            ';

label28:

goto label203;

label29:

echo '        <link href="assets/css/extra.css" rel="stylesheet" type="text/css" />' . "\n\t\t" . '<style>' . "\n" . '        .g-recaptcha {' . "\n" . '            display: inline-block;' . "\n" . '        }' . "\n" . '        .vertical-center {' . "\n" . '            margin: 0;' . "\n" . '            position: absolute;' . "\n" . '            top: 50%;' . "\n" . '            -ms-transform: translateY(-50%);' . "\n" . '            transform: translateY(-50%);' . "\n" . '            width: 100%;' . "\n" . '        }' . "\n\t\t" . '</style>' . "\n" . '    </head>' . "\n" . '    <body class="bg-animate';
if (!(isset($_COOKIE['hue']) && (0 < strlen($_COOKIE['hue'])) && in_array($_COOKIE['hue'], array_keys($f1b18060c577d4da)))) {
	goto label58;
}

echo '-' . $_COOKIE['hue'];

label58:

echo '">' . "\n" . '        <div class="body-full navbar-custom">' . "\n" . '            <div class="account-pages vertical-center">' . "\n" . '                <div class="container">' . "\n" . '                    <div class="row justify-content-center">' . "\n" . '                        <div class="col-md-8 col-lg-6 col-xl-5">' . "\n" . '                            <div class="text-center w-75 m-auto whiteout">' . "\n" . '                                <span><img src="assets/images/logo.png" height="80px" alt=""></span>' . "\n" . '                                <p class="text-muted mb-4 mt-3"></p>' . "\n" . '                            </div>' . "\n" . '                            ';
goto label287;

label60:

echo '                            </div>' . "\n" . '                            ';

label61:

goto label82;

label62:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
goto label79;

label64:

header('Location: codes');
exit();

label68:

goto label90;

label69:

echo '        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />' . "\n" . '        <link href="assets/css/app.css" rel="stylesheet" type="text/css" />' . "\n" . '        ';
goto label72;

label71:

echo "\t\t" . '<link href="assets/css/bootstrap.dark.css" rel="stylesheet" type="text/css" />' . "\n" . '        <link href="assets/css/app.dark.css" rel="stylesheet" type="text/css" />' . "\n" . '        ';

label72:

goto label29;

label73:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
echo $_['login_message_5'];
echo '                            </div>' . "\n" . '                            ';

label77:

goto label28;
goto label24;

label79:

echo $_['login_message_1'];
echo '                            </div>' . "\n" . '                            ';

label82:

echo '                            <form action="./login" method="POST" data-parsley-validate="">' . "\n" . '                                <div class="card">' . "\n" . '                                    <div class="card-body p-4">' . "\n" . '                                        <input type="hidden" name="referrer" value="';
echo htmlspecialchars(XUI::$rRequest['referrer']);
goto label175;

label90:

echo '<!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '    <head>' . "\n" . '        <meta charset="utf-8" />' . "\n" . '        <title data-id="login">XUI | ';
echo $_['login'];
echo '</title>' . "\n" . '        <meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n" . '        <meta http-equiv="X-UA-Compatible" content="IE=edge" />' . "\n" . '        <link rel="shortcut icon" href="assets/images/favicon.ico">' . "\n\t\t" . '<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />' . "\n" . '        ';
if (isset($_COOKIE['theme']) && ($_COOKIE['theme'] == 1)) {
	goto label71;
}

goto label69;

label104:

goto label280;

label105:

$C7c58dad8ae2bc6c = basename(XUI::$rRequest['referrer']);

if (!(substr($C7c58dad8ae2bc6c, 0, 6) == 'logout')) {
	goto label275;
}

$C7c58dad8ae2bc6c = 'dashboard';
goto label275;

label122:

header('Location: dashboard');
exit();

label126:

session_start();

if (!($d741c98ae96b4809 = in_array(C9359222b3E3D256(), ['setup', 'rescue']))) {
	goto label259;
}

goto label257;

label139:

echo '                                    </div>' . "\n" . '                                </div>' . "\n" . '                                <div class="form-group mb-0 text-center">' . "\n" . '                                    <button style="border:0" class="btn btn-info ';
if (isset($_COOKIE['hue']) && (0 < strlen($_COOKIE['hue'])) && in_array($_COOKIE['hue'], array_keys($f1b18060c577d4da))) {
	goto label165;
}

echo 'bg-animate-info';
goto label196;

label165:

goto label192;

label166:

echo '>';
echo $_['login'];
echo '</button>' . "\n" . '                                </div>' . "\n" . '                            </form>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '        <script src="assets/js/vendor.min.js"></script>' . "\n" . '        <script src="assets/libs/parsleyjs/parsley.min.js"></script>' . "\n" . '        <script src="assets/js/app.min.js"></script>' . "\n\t\t";

if (!$f1dcaed925076e67['recaptcha_enable']) {
	goto label210;
}

goto label209;

label175:

echo '" />' . "\n" . '                                        <div class="form-group mb-3" id="username_group">' . "\n" . '                                            <label for="username">';
echo $_['username'];
echo '</label>' . "\n" . '                                            <input class="form-control" autocomplete="off" type="text" id="username" name="username" required data-parsley-trigger="change" placeholder="">' . "\n" . '                                        </div>' . "\n" . '                                        <div class="form-group mb-3">' . "\n" . '                                            <label for="password">';
echo $_['password'];
echo '</label>' . "\n" . '                                            <input class="form-control" autocomplete="off" type="password" required data-parsley-trigger="change" id="password" name="password" placeholder="">' . "\n" . '                                        </div>' . "\n" . '                                        ';
goto label183;

label183:

if (!$f1dcaed925076e67['recaptcha_enable']) {
	goto label191;
}

echo '                                        <h5 class="auth-title text-center" style="margin-bottom:0;">' . "\n" . '                                            <div class="g-recaptcha" data-callback="recaptchaCallback" id="verification" data-sitekey="';
echo $f1dcaed925076e67['recaptcha_v2_site_key'];
echo '"></div>' . "\n" . '                                        </h5>' . "\n" . '                                        ';

label191:

goto label139;

label192:

echo 'bg-animate-' . $_COOKIE['hue'];

label196:

echo ' btn-block" type="submit" id="login_button" name="login"';

if (!$f1dcaed925076e67['recaptcha_enable']) {
	goto label166;
}

echo ' disabled';
goto label166;

label203:

goto label282;

label204:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
echo $_['login_message_3'];
echo '                            </div>' . "\n" . '                            ';
goto label282;

label209:

echo "\t\t" . '<script src="https://www.google.com/recaptcha/api.js" async defer></script>' . "\n\t\t";

label210:

goto label338;

label211:

include 'functions.php';

if (!file_exists(TMP_PATH . '.migration.first')) {
	goto label223;
}

header('Location: setup');

label223:

if (!isset($_SESSION['hash'])) {
	goto label126;
}

goto label122;

label229:

if (!($b62d6460eb33ea07->num_rows() == 1)) {
	goto label324;
}

if (!(intval($f1dcaed925076e67['login_flood']) <= intval($b62d6460eb33ea07->get_row()['count']))) {
	goto label256;
}

API::f7e2383F47283CB7(['ip' => $b38e11ffdc6a3abb, 'notes' => 'LOGIN FLOOD ATTACK']);
exit();

label256:

goto label324;

label257:

$f1dcaed925076e67['recaptcha_enable'] = false;

label259:

$b38e11ffdc6a3abb = dfAc1b11D332C193();

if (!(0 < intval($f1dcaed925076e67['login_flood']))) {
	goto label324;
}

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `login_logs` WHERE `status` = \'INVALID_LOGIN\' AND `login_ip` = ? AND TIME_TO_SEC(TIMEDIFF(NOW(), `date`)) <= 86400;', $b38e11ffdc6a3abb);
goto label229;

label275:

header('Location: ' . $C7c58dad8ae2bc6c);
exit();

label280:

goto label68;
goto label64;

label282:

goto label61;

label283:

echo '                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">' . "\n" . '                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' . "\n" . '                                ';
echo $_['login_message_2'];
goto label60;

label287:
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_FAILURE)) {
	goto label62;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_INVALID_CODE)) {
	goto label283;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_NOT_ADMIN)) {
	goto label204;
}
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_DISABLED)) {
	goto label24;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_INVALID_CAPTCHA))) {
	goto label77;
}

goto label73;

label324:

if (!isset(XUI::$rRequest['login'])) {
	goto label90;
}

$B9869413eae86beb = API::E10E6f46945857eB(XUI::$rRequest, $d741c98ae96b4809);
$cbcf0bbd5e139431 = $B9869413eae86beb['status'];
goto label1;

label338:

echo '        <script>' . "\n" . '        function recaptchaCallback() {' . "\n" . '            $(\'#login_button\').removeAttr(\'disabled\');' . "\n" . '        };' . "\n" . '        </script>' . "\n" . '    </body>' . "\n" . '</html>';

?>