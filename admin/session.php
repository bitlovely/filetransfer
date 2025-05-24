<?php


goto label15;

label1:

exit();

label2:

goto label124;

label3:

if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
	goto label103;
}

goto label88;

label15:

$d69c2304d340f5ce = 60;

if (defined('TMP_PATH')) {
	goto label25;
}

define('TMP_PATH', '/home/xui/tmp/');

label25:

if (!(session_status() == PHP_SESSION_NONE)) {
	goto label57;
}

goto label55;

label33:

if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
	goto label50;
}

$_SESSION['last_activity'] = time();
goto label2;

label50:

echo json_encode(['result' => true]);
goto label1;

label55:

session_start();

label57:
if (!(isset($_SESSION['hash']) && isset($_SESSION['last_activity']) && (($d69c2304d340f5ce * 60) < (time() - $_SESSION['last_activity'])))) {
	goto label117;
}

foreach (['hash', 'ip', 'code', 'verify', 'last_activity'] as $Bb672d1983256a93) {
	if (!isset($_SESSION[$Bb672d1983256a93])) {
		goto label85;
	}

	unset($_SESSION[$Bb672d1983256a93]);

	label85:
}

goto label108;

label88:

header('Location: ./login?referrer=' . urlencode(basename($_SERVER['REQUEST_URI'], '.php')));
exit();
goto label124;

label103:

echo json_encode(['result' => false]);
goto label123;

label108:

if (!(session_status() === PHP_SESSION_NONE)) {
	goto label117;
}

session_start();

label117:

if (!isset($_SESSION['hash'])) {
	goto label3;
}

goto label33;

label123:

exit();

label124:

goto label125;

label125:

session_write_close();

?>