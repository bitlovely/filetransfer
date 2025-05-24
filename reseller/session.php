<?php


goto label92;

label1:

if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
	goto label18;
}

$_SESSION['rlast_activity'] = time();
goto label46;

label18:

echo json_encode(['result' => true]);
goto label45;

label23:

header('Location: login?referrer=' . urlencode(basename($_SERVER['REQUEST_URI'], '.php')));
exit();
goto label44;

label38:

echo json_encode(['result' => false]);
goto label43;

label43:

exit();

label44:

goto label125;

label45:

exit();

label46:

goto label44;

label47:

if (basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME'])) {
	goto label38;
}

goto label23;

label59:

session_start();

label61:
if (!(isset($_SESSION['reseller']) && isset($_SESSION['rlast_activity']) && (($d69c2304d340f5ce * 60) < (time() - $_SESSION['rlast_activity'])))) {
	goto label119;
}

foreach (['reseller', 'rip', 'rcode', 'rverify', 'rlast_activity'] as $Bb672d1983256a93) {
	if (!isset($_SESSION[$Bb672d1983256a93])) {
		goto label89;
	}

	unset($_SESSION[$Bb672d1983256a93]);

	label89:
}

goto label110;

label92:

$d69c2304d340f5ce = 60;

if (defined('TMP_PATH')) {
	goto label102;
}

define('TMP_PATH', '/home/xui/tmp/');

label102:

if (!(session_status() == PHP_SESSION_NONE)) {
	goto label61;
}

goto label59;

label110:

if (!(session_status() === PHP_SESSION_NONE)) {
	goto label119;
}

session_start();

label119:

if (!isset($_SESSION['reseller'])) {
	goto label47;
}

goto label1;

label125:

session_write_close();

?>