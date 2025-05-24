<?php


goto label123;

label1:

$C3277274bfd50f59 = f8A524f607010c5F($B792efb991603d69);
goto label203;

label6:

$E59d0debc75e7be8['reports'] = array_map('intval', array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['all_reports']));
$b38e11ffdc6a3abb = dFac1B11d332C193();
$Ed48a28037cd1e3e = ($f1dcaed925076e67['ip_subnet_match'] ? implode('.', array_slice(explode('.', $_SESSION['rip']), 0, -1)) == implode('.', array_slice(explode('.', $b38e11ffdc6a3abb), 0, -1)) : $_SESSION['rip'] == $b38e11ffdc6a3abb);
if (!$E59d0debc75e7be8 || !$db0a61ef32b89a27 || !$db0a61ef32b89a27['is_reseller'] || (!$Ed48a28037cd1e3e && $f1dcaed925076e67['ip_logout']) || ($_SESSION['rverify'] != md5($E59d0debc75e7be8['username'] . '||' . $E59d0debc75e7be8['password']))) {
	goto label143;
}
if (!(($_SESSION['rip'] != $b38e11ffdc6a3abb) && !$f1dcaed925076e67['ip_logout'])) {
	goto label142;
}

goto label139;

label99:

if (!isset(XUI::$rRequest['status'])) {
	goto label203;
}

$cbcf0bbd5e139431 = intval(XUI::$rRequest['status']);
$B792efb991603d69 = XUI::$rRequest;
unset($B792efb991603d69['status']);
goto label1;

label114:

unset($db0a61ef32b89a27);
DBC3e29f55C945ab('reseller');
header('Location: ./index');
exit();

label122:

goto label99;

label123:

if (defined('XUI_HOME')) {
	goto label132;
}

define('XUI_HOME', '/home/xui/');

label132:

require_once XUI_HOME . 'includes/admin.php';

if (!$Ebb0b63f7c597ba4) {
	goto label183;
}

goto label181;

label139:

$_SESSION['rip'] = $b38e11ffdc6a3abb;

label142:

goto label122;

label143:

unset($E59d0debc75e7be8);
goto label114;

label145:

date_default_timezone_set($E59d0debc75e7be8['timezone']);

label149:

setcookie('hue', $E59d0debc75e7be8['hue'], time() + 604800);
setcookie('theme', $E59d0debc75e7be8['theme'], time() + 604800);
$db0a61ef32b89a27 = array_merge(ACeb5CfE4194f4F0($E59d0debc75e7be8['member_group_id']), a0bb5aDf0f9ccC8e($E59d0debc75e7be8['id']));
goto label6;

label181:

$f1dcaed925076e67['js_navigate'] = 0;

label183:

if (!isset($_SESSION['reseller'])) {
	goto label99;
}

$E59d0debc75e7be8 = ba89228Dc958cE05($_SESSION['reseller']);

if (!(0 < strlen($E59d0debc75e7be8['timezone']))) {
	goto label149;
}

goto label145;

label203:

?>