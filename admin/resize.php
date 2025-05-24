<?php


function dDae3533677977cB($B7d8cc28e3e1d1d0, $d3b47f338b3a06be, $D34e9a57f9f2ea59, $ef1a33e2798d23ed)
{
	goto label20;

	label5:

	$d2d13a36f63d68b0 = (int) $d3b47f338b3a06be * $c8f99206383d5078;

	label8:

	return ['height' => round($d2d13a36f63d68b0, 0), 'width' => round($f9fbf5dea2a37027, 0)];
	goto label55;

	label20:

	if (!($D34e9a57f9f2ea59 == 0)) {
		goto label25;
	}

	$D34e9a57f9f2ea59 = $B7d8cc28e3e1d1d0;

	label25:

	if (!($ef1a33e2798d23ed == 0)) {
		goto label31;
	}

	$ef1a33e2798d23ed = $d3b47f338b3a06be;
	goto label31;

	label31:

	$f08deccb5646dc1b = $D34e9a57f9f2ea59 / ($B7d8cc28e3e1d1d0 ?: 1);
	$F2db63485ee4bbef = $ef1a33e2798d23ed / ($d3b47f338b3a06be ?: 1);
	$c8f99206383d5078 = min($f08deccb5646dc1b, $F2db63485ee4bbef);

	if ($c8f99206383d5078 < 1) {
		goto label51;
	}

	goto label48;

	label48:

	$d2d13a36f63d68b0 = $d3b47f338b3a06be;
	$f9fbf5dea2a37027 = $B7d8cc28e3e1d1d0;
	goto label8;

	label51:

	$f9fbf5dea2a37027 = (int) $B7d8cc28e3e1d1d0 * $c8f99206383d5078;
	goto label5;

	label55:
}

function d3D36E6b67bA14F6($A7ca171405b19571)
{
	$E5f5fbcd0c39ff43 = '/^(?:ftp|https?|feed)?:?\\/\\/(?:(?:(?:[\\w\\.\\-\\+!$&\'\\(\\)*\\+,;=]|%[0-9a-f]{2})+:)*' . "\r\n" . '    (?:[\\w\\.\\-\\+%!$&\'\\(\\)*\\+,;=]|%[0-9a-f]{2})+@)?(?:' . "\r\n" . '    (?:[a-z0-9\\-\\.]|%[0-9a-f]{2})+|(?:\\[(?:[0-9a-f]{0,4}:)*(?:[0-9a-f]{0,4})\\]))(?::[0-9]+)?(?:[\\/|\\?]' . "\r\n" . '    (?:[\\w#!:\\.\\?\\+\\|=&@$\'~*,;\\/\\(\\)\\[\\]\\-]|%[0-9a-f]{2})*)?$/xi';
	return (bool) preg_match($E5f5fbcd0c39ff43, $A7ca171405b19571);
}

goto label235;

label1:

imagesavealpha($c68b76c7e42b19eb, true);
imagefill($c68b76c7e42b19eb, 0, 0, imagecolorallocatealpha($c68b76c7e42b19eb, 0, 0, 0, 127));
goto label331;

label19:

if (!file_exists($Cf5e0f5f58fe7b78)) {
	goto label130;
}

header('Content-Type: image/png');
echo file_get_contents($Cf5e0f5f58fe7b78);
goto label129;

label33:
if (!($A7ca171405b19571 && (0 < $e67d13066773cc34) && (0 < $c4689ba24233da2d))) {
	goto label130;
}

$Cf5e0f5f58fe7b78 = IMAGES_PATH . 'admin/' . md5($A7ca171405b19571) . '_' . $e67d13066773cc34 . '_' . $c4689ba24233da2d . '.png';
if (!(!file_exists($Cf5e0f5f58fe7b78) || (filesize($Cf5e0f5f58fe7b78) == 0))) {
	goto label19;
}

if (D3D36e6b67BA14f6($A7ca171405b19571)) {
	goto label246;
}

$D6248a373ed1c81c = IMAGES_PATH . basename($A7ca171405b19571);
goto label245;

label79:

goto label84;

label80:

$c68b76c7e42b19eb = imagecreatefromjpeg($D6248a373ed1c81c);

label84:

goto label90;
goto label86;

label86:

$c68b76c7e42b19eb = imagecreatefrompng($D6248a373ed1c81c);

label90:

if (!$c68b76c7e42b19eb) {
	goto label330;
}

$Fae3e8768480a34e = imagecreatetruecolor($a1977ecf8aadf4c3['width'], $a1977ecf8aadf4c3['height']);
goto label302;

label101:

$e67d13066773cc34 = intval($_GET['max']);
$c4689ba24233da2d = intval($_GET['max']);

label113:

if (!(substr($A7ca171405b19571, 0, 2) == 's:')) {
	goto label193;
}

$E3665d09b9cea208 = explode(':', $A7ca171405b19571, 3);
goto label156;

label129:

exit();

label130:

header('Content-Type: image/png');
$c68b76c7e42b19eb = imagecreatetruecolor(1, 1);
goto label1;

label139:

$A7ca171405b19571 = $_GET['url'];
$e67d13066773cc34 = 0;
$c4689ba24233da2d = 0;

if (!isset($_GET['maxw'])) {
	goto label218;
}

$e67d13066773cc34 = intval($_GET['maxw']);
goto label218;

label156:

$C082ca9ed03f473c = intval($E3665d09b9cea208[1]);
$f547aeca99c55c3e = (empty($Bcf70cba56392975[$C082ca9ed03f473c]['domain_name']) ? $Bcf70cba56392975[$C082ca9ed03f473c]['server_ip'] : explode(',', $Bcf70cba56392975[$C082ca9ed03f473c]['domain_name'])[0]);
$B447bd0870faed42 = $Bcf70cba56392975[$C082ca9ed03f473c]['server_protocol'] . '://' . $f547aeca99c55c3e . ':' . $Bcf70cba56392975[$C082ca9ed03f473c]['request_port'] . '/';
$A7ca171405b19571 = $B447bd0870faed42 . 'images/' . basename($A7ca171405b19571);

label193:

goto label33;

label194:

set_time_limit(2);
ini_set('default_socket_timeout', 2);
define('XUI_HOME', '/home/xui/');
define('WWW_PATH', XUI_HOME . 'www/');
define('IMAGES_PATH', WWW_PATH . 'images/');
goto label252;

label218:

if (!isset($_GET['maxh'])) {
	goto label229;
}

$c4689ba24233da2d = intval($_GET['maxh']);

label229:

if (!isset($_GET['max'])) {
	goto label113;
}

goto label101;

label235:

session_start();
session_write_close();

if (isset($_SESSION['hash'])) {
	goto label244;
}

exit();

label244:

goto label194;

label245:

goto label247;

label246:

$D6248a373ed1c81c = $A7ca171405b19571;

label247:

$C0b9b91118f9138c = getimagesize($D6248a373ed1c81c);
goto label276;

label252:

define('TMP_PATH', XUI_HOME . 'tmp/');
define('CACHE_TMP_PATH', TMP_PATH . 'cache/');
$Bcf70cba56392975 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'servers'));
goto label139;

label276:

$a1977ecf8aadf4c3 = ddae3533677977cb($C0b9b91118f9138c[0], $C0b9b91118f9138c[1], $e67d13066773cc34, $c4689ba24233da2d);
if (!($a1977ecf8aadf4c3['width'] && $a1977ecf8aadf4c3['height'])) {
	goto label19;
}

if ($C0b9b91118f9138c['mime'] == 'image/png') {
	goto label86;
}

if ($C0b9b91118f9138c['mime'] == 'image/jpeg') {
	goto label80;
}

$c68b76c7e42b19eb = NULL;
goto label79;

label302:

imagealphablending($Fae3e8768480a34e, false);
imagesavealpha($Fae3e8768480a34e, true);
imagecopyresampled($Fae3e8768480a34e, $c68b76c7e42b19eb, 0, 0, 0, 0, $a1977ecf8aadf4c3['width'], $a1977ecf8aadf4c3['height'], $C0b9b91118f9138c[0], $C0b9b91118f9138c[1]);
imagepng($Fae3e8768480a34e, $Cf5e0f5f58fe7b78);

label330:

goto label19;

label331:

imagepng($c68b76c7e42b19eb);

?>