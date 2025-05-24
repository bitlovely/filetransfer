<?php


goto label171;

label1:

$ed04192a51041c44 = false;

if (version_compare($Bcf70cba56392975[SERVER_ID]['xui_version'], XUI::$rSettings['update_version'], '>=')) {
	goto label15;
}

$ed04192a51041c44 = true;

label15:

goto label152;

label16:
if (!(!isset($_COOKIE['theme']) || ($_COOKIE['theme'] != $E59d0debc75e7be8['theme']))) {
	goto label37;
}

setcookie('theme', $E59d0debc75e7be8['theme'], time() + 604800);

label37:

$db0a61ef32b89a27 = ACeB5CFE4194f4F0($E59d0debc75e7be8['member_group_id']);
$db0a61ef32b89a27['advanced'] = json_decode($db0a61ef32b89a27['allowed_pages'], true);
goto label213;

label50:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	if (!(!$Ec379295dc7029e6['server_online'] && $Ec379295dc7029e6['enabled'] && ($Ec379295dc7029e6['status'] != 3) && ($Ec379295dc7029e6['status'] != 5))) {
		goto label70;
	}

	$A01d920dab3a448e = true;

	label70:
}

$A7f9d587bdf5cddf = false;

foreach ($a080f5083618911e as $Ec379295dc7029e6) {
	if (!(!$Ec379295dc7029e6['server_online'] && $Ec379295dc7029e6['enabled'] && ($Ec379295dc7029e6['status'] != 3) && ($Ec379295dc7029e6['status'] != 5))) {
		goto label93;
	}

	$A7f9d587bdf5cddf = true;

	label93:
}

goto label1;

label96:

date_default_timezone_set($E59d0debc75e7be8['timezone']);

label100:
if (!(!isset($_COOKIE['hue']) || ($_COOKIE['hue'] != $E59d0debc75e7be8['hue']))) {
	goto label121;
}

setcookie('hue', $E59d0debc75e7be8['hue'], time() + 604800);

label121:

goto label16;

label122:

$f1dcaed925076e67['js_navigate'] = 0;

label124:

if (!isset($_SESSION['hash'])) {
	goto label15;
}

$E59d0debc75e7be8 = BA89228Dc958cE05($_SESSION['hash']);

if (!(0 < strlen($E59d0debc75e7be8['timezone']))) {
	goto label100;
}

goto label96;

label144:

DBc3E29F55C945AB();
header('Location: index');
exit();

label150:

$A01d920dab3a448e = false;
goto label50;

label152:

if (!isset(XUI::$rRequest['status'])) {
	goto label191;
}

$cbcf0bbd5e139431 = intval(XUI::$rRequest['status']);
$B792efb991603d69 = XUI::$rRequest;
unset($B792efb991603d69['status']);
$C3277274bfd50f59 = F8a524F607010C5F($B792efb991603d69);
goto label191;

label171:

if (defined('XUI_HOME')) {
	goto label180;
}

define('XUI_HOME', '/home/xui/');

label180:

require_once XUI_HOME . 'includes/admin.php';

if (!$Ebb0b63f7c597ba4) {
	goto label124;
}

goto label122;

label187:

goto label150;

label188:

unset($E59d0debc75e7be8, $db0a61ef32b89a27);
goto label144;

label191:

if (!(d60f670923adbf13() != 'setup')) {
	goto label296;
}

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `users_groups`.`is_admin` = 1;');

if (!($b62d6460eb33ea07->get_row()['count'] == 0)) {
	goto label212;
}

header('Location: ./setup');
goto label211;

label211:

exit();

label212:

goto label296;

label213:

$b38e11ffdc6a3abb = DfAc1B11d332c193();
$Ed48a28037cd1e3e = ($f1dcaed925076e67['ip_subnet_match'] ? implode('.', array_slice(explode('.', $_SESSION['ip']), 0, -1)) == implode('.', array_slice(explode('.', $b38e11ffdc6a3abb), 0, -1)) : $_SESSION['ip'] == $b38e11ffdc6a3abb);
if (!$E59d0debc75e7be8 || !$db0a61ef32b89a27 || !$db0a61ef32b89a27['is_admin'] || (!$Ed48a28037cd1e3e && $f1dcaed925076e67['ip_logout']) || ($_SESSION['verify'] != md5($E59d0debc75e7be8['username'] . '||' . $E59d0debc75e7be8['password']))) {
	goto label188;
}
if (!(($_SESSION['ip'] != $b38e11ffdc6a3abb) && !$f1dcaed925076e67['ip_logout'])) {
	goto label187;
}

$_SESSION['ip'] = $b38e11ffdc6a3abb;
goto label187;

label296:

?>