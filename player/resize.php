<?php


function DDAe3533677977cB($B7d8cc28e3e1d1d0, $d3b47f338b3a06be, $D34e9a57f9f2ea59, $ef1a33e2798d23ed)
{
	goto label5;

	label5:

	if (!($D34e9a57f9f2ea59 == 0)) {
		goto label10;
	}

	$D34e9a57f9f2ea59 = $B7d8cc28e3e1d1d0;

	label10:

	if (!($ef1a33e2798d23ed == 0)) {
		goto label38;
	}

	$ef1a33e2798d23ed = $d3b47f338b3a06be;
	goto label38;

	label16:

	$d2d13a36f63d68b0 = $d3b47f338b3a06be;
	$f9fbf5dea2a37027 = $B7d8cc28e3e1d1d0;
	goto label26;

	label19:

	$f9fbf5dea2a37027 = (int) $B7d8cc28e3e1d1d0 * $c8f99206383d5078;
	goto label23;

	label23:

	$d2d13a36f63d68b0 = (int) $d3b47f338b3a06be * $c8f99206383d5078;

	label26:

	return ['height' => round($d2d13a36f63d68b0, 0), 'width' => round($f9fbf5dea2a37027, 0)];
	goto label55;

	label38:

	$f08deccb5646dc1b = $D34e9a57f9f2ea59 / ($B7d8cc28e3e1d1d0 ?: 1);
	$F2db63485ee4bbef = $ef1a33e2798d23ed / ($d3b47f338b3a06be ?: 1);
	$c8f99206383d5078 = min($f08deccb5646dc1b, $F2db63485ee4bbef);

	if ($c8f99206383d5078 < 1) {
		goto label19;
	}

	goto label16;

	label55:
}

function d3D36e6b67ba14f6($A7ca171405b19571)
{
	$E5f5fbcd0c39ff43 = '/^(?:ftp|https?|feed)?:?\\/\\/(?:(?:(?:[\\w\\.\\-\\+!$&\'\\(\\)*\\+,;=]|%[0-9a-f]{2})+:)*' . "\r\n" . '    (?:[\\w\\.\\-\\+%!$&\'\\(\\)*\\+,;=]|%[0-9a-f]{2})+@)?(?:' . "\r\n" . '    (?:[a-z0-9\\-\\.]|%[0-9a-f]{2})+|(?:\\[(?:[0-9a-f]{0,4}:)*(?:[0-9a-f]{0,4})\\]))(?::[0-9]+)?(?:[\\/|\\?]' . "\r\n" . '    (?:[\\w#!:\\.\\?\\+\\|=&@$\'~*,;\\/\\(\\)\\[\\]\\-]|%[0-9a-f]{2})*)?$/xi';
	return (bool) preg_match($E5f5fbcd0c39ff43, $A7ca171405b19571);
}

goto label259;

label1:

$Bcf70cba56392975 = (function_exists('igbinary_unserialize') ? igbinary_unserialize(file_get_contents($a998abd856b07a59['tmp_path'] . 'servers')) : unserialize(file_get_contents($a998abd856b07a59['tmp_path'] . 'servers')));
goto label33;

label26:

$Bcf70cba56392975 = igbinary_unserialize(file_get_contents('/home/xui/tmp/cache/servers'));

label33:

goto label222;

label34:

$a1977ecf8aadf4c3 = dDAe3533677977Cb($C0b9b91118f9138c[0], $C0b9b91118f9138c[1], $e67d13066773cc34, $c4689ba24233da2d);

label43:
if (!($a1977ecf8aadf4c3['width'] && $a1977ecf8aadf4c3['height'])) {
	goto label287;
}

if ($C0b9b91118f9138c['mime'] == 'image/png') {
	goto label251;
}

if ($C0b9b91118f9138c['mime'] == 'image/jpeg') {
	goto label162;
}

goto label160;

label59:

$B447bd0870faed42 = $Bcf70cba56392975[$C082ca9ed03f473c]['server_protocol'] . '://' . $f547aeca99c55c3e . ':' . $Bcf70cba56392975[$C082ca9ed03f473c]['request_port'] . '/';
$A7ca171405b19571 = $B447bd0870faed42 . 'images/' . basename($A7ca171405b19571);

label75:

header('Content-Type: image/png');
if (!($A7ca171405b19571 && (((0 < $e67d13066773cc34) && (0 < $c4689ba24233da2d)) || isset($a1977ecf8aadf4c3)))) {
	goto label168;
}

goto label362;

label91:
if (!(isset($_GET['h']) && isset($_GET['w']))) {
	goto label107;
}

$a1977ecf8aadf4c3 = ['width' => $_GET['w'], 'height' => $_GET['h']];

label107:

if (!isset($_GET['icon'])) {
	goto label177;
}

$c4689ba24233da2d = $e67d13066773cc34 = 48;
goto label177;

label115:

$Fae3e8768480a34e = imagecreatetruecolor($a1977ecf8aadf4c3['width'], $a1977ecf8aadf4c3['height']);
imagealphablending($Fae3e8768480a34e, false);
imagesavealpha($Fae3e8768480a34e, true);
imagecopyresampled($Fae3e8768480a34e, $c68b76c7e42b19eb, 0, 0, 0, 0, $a1977ecf8aadf4c3['width'], $a1977ecf8aadf4c3['height'], $C0b9b91118f9138c[0], $C0b9b91118f9138c[1]);
imagepng($Fae3e8768480a34e, $Cf5e0f5f58fe7b78);
goto label287;

label151:

$D6248a373ed1c81c = $A7ca171405b19571;

label152:

$C0b9b91118f9138c = getimagesize($D6248a373ed1c81c);

if (isset($a1977ecf8aadf4c3)) {
	goto label43;
}

goto label34;

label160:

$c68b76c7e42b19eb = NULL;
goto label166;

label162:

$c68b76c7e42b19eb = imagecreatefromjpeg($D6248a373ed1c81c);

label166:

goto label250;

label167:

exit();

label168:

if (isset($_GET['icon'])) {
	goto label335;
}

echo file_get_contents('img/placeholder.png');
goto label333;

label177:

if (!(substr($A7ca171405b19571, 0, 2) == 's:')) {
	goto label75;
}

$E3665d09b9cea208 = explode(':', $A7ca171405b19571, 3);
$C082ca9ed03f473c = intval($E3665d09b9cea208[1]);
$f547aeca99c55c3e = (empty($Bcf70cba56392975[$C082ca9ed03f473c]['domain_name']) ? $Bcf70cba56392975[$C082ca9ed03f473c]['server_ip'] : explode(',', $Bcf70cba56392975[$C082ca9ed03f473c]['domain_name'])[0]);
goto label59;

label214:

$A7ca171405b19571 = $_GET['url'];
$e67d13066773cc34 = 0;
$c4689ba24233da2d = 0;
goto label310;

label222:

if ($Bcf70cba56392975) {
	goto label228;
}

$A2369d6b9e3c5c6e = true;
require_once 'functions.php';
$Bcf70cba56392975 = XUI::$rServers;

label228:

goto label214;

label229:

imagesavealpha($c68b76c7e42b19eb, true);
imagefill($c68b76c7e42b19eb, 0, 0, imagecolorallocatealpha($c68b76c7e42b19eb, 0, 0, 0, 127));
imagepng($c68b76c7e42b19eb);
goto label399;

label250:

goto label255;

label251:

$c68b76c7e42b19eb = imagecreatefrompng($D6248a373ed1c81c);

label255:

if (!$c68b76c7e42b19eb) {
	goto label287;
}

goto label115;

label259:

session_start();
session_write_close();

if (isset($_SESSION['phash'])) {
	goto label268;
}

exit();

label268:

goto label344;

label269:

if (!isset($_GET['max'])) {
	goto label286;
}

$e67d13066773cc34 = intval($_GET['max']);
$c4689ba24233da2d = intval($_GET['max']);

label286:

goto label91;

label287:

if (!file_exists($Cf5e0f5f58fe7b78)) {
	goto label168;
}

echo file_get_contents($Cf5e0f5f58fe7b78);
goto label167;

label298:

goto label300;

label299:

require_once 'config.php';

label300:
if (extension_loaded('xui') && ($a998abd856b07a59['platform'] == 'xui')) {
	goto label26;
}

goto label1;

label310:

if (!isset($_GET['maxw'])) {
	goto label321;
}

$e67d13066773cc34 = intval($_GET['maxw']);

label321:

if (!isset($_GET['maxh'])) {
	goto label269;
}

$c4689ba24233da2d = intval($_GET['maxh']);
goto label269;

label333:

exit();
goto label399;

label335:

header('Content-Type: image/png');
$c68b76c7e42b19eb = imagecreatetruecolor(1, 1);
goto label229;

label344:

set_time_limit(2);
ini_set('default_socket_timeout', 2);
define('IMAGES_PATH', 'img/thumbs/');

if (file_exists('config.php')) {
	goto label299;
}

$a998abd856b07a59 = ['platform' => 'xui'];
goto label298;

label362:

$Cf5e0f5f58fe7b78 = IMAGES_PATH . md5($A7ca171405b19571) . '_' . $e67d13066773cc34 . '_' . $c4689ba24233da2d . '.png';
if (!(!file_exists($Cf5e0f5f58fe7b78) || (filesize($Cf5e0f5f58fe7b78) == 0))) {
	goto label287;
}

if (d3d36e6b67ba14f6($A7ca171405b19571)) {
	goto label151;
}

$D6248a373ed1c81c = IMAGES_PATH . basename($A7ca171405b19571);
goto label152;
goto label151;

label399:

?>