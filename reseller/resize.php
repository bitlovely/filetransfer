<?php


function dDAe3533677977cB($B7d8cc28e3e1d1d0, $d3b47f338b3a06be, $D34e9a57f9f2ea59, $ef1a33e2798d23ed)
{
	goto label12;

	label5:

	$d2d13a36f63d68b0 = $d3b47f338b3a06be;
	$f9fbf5dea2a37027 = $B7d8cc28e3e1d1d0;
	goto label26;

	label8:

	$f9fbf5dea2a37027 = (int) $B7d8cc28e3e1d1d0 * $c8f99206383d5078;
	goto label23;

	label12:

	if (!($D34e9a57f9f2ea59 == 0)) {
		goto label17;
	}

	$D34e9a57f9f2ea59 = $B7d8cc28e3e1d1d0;

	label17:

	if (!($ef1a33e2798d23ed == 0)) {
		goto label38;
	}

	$ef1a33e2798d23ed = $d3b47f338b3a06be;
	goto label38;

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
		goto label8;
	}

	goto label5;

	label55:
}

function D3d36E6b67Ba14f6($A7ca171405b19571)
{
	$E5f5fbcd0c39ff43 = '/^(?:ftp|https?|feed)?:?\\/\\/(?:(?:(?:[\\w\\.\\-\\+!$&\'\\(\\)*\\+,;=]|%[0-9a-f]{2})+:)*' . "\r\n" . '    (?:[\\w\\.\\-\\+%!$&\'\\(\\)*\\+,;=]|%[0-9a-f]{2})+@)?(?:' . "\r\n" . '    (?:[a-z0-9\\-\\.]|%[0-9a-f]{2})+|(?:\\[(?:[0-9a-f]{0,4}:)*(?:[0-9a-f]{0,4})\\]))(?::[0-9]+)?(?:[\\/|\\?]' . "\r\n" . '    (?:[\\w#!:\\.\\?\\+\\|=&@$\'~*,;\\/\\(\\)\\[\\]\\-]|%[0-9a-f]{2})*)?$/xi';
	return (bool) preg_match($E5f5fbcd0c39ff43, $A7ca171405b19571);
}

goto label286;

label1:

$a1977ecf8aadf4c3 = DdAE3533677977cB($C0b9b91118f9138c[0], $C0b9b91118f9138c[1], $e67d13066773cc34, $c4689ba24233da2d);
if (!($a1977ecf8aadf4c3['width'] && $a1977ecf8aadf4c3['height'])) {
	goto label73;
}

if ($C0b9b91118f9138c['mime'] == 'image/png') {
	goto label58;
}

if ($C0b9b91118f9138c['mime'] == 'image/jpeg') {
	goto label127;
}

$c68b76c7e42b19eb = NULL;
goto label126;

label27:

set_time_limit(2);
ini_set('default_socket_timeout', 2);
define('XUI_HOME', '/home/xui/');
define('WWW_PATH', XUI_HOME . 'www/');
define('IMAGES_PATH', WWW_PATH . 'images/');
goto label150;

label51:

goto label53;

label52:

$D6248a373ed1c81c = $A7ca171405b19571;

label53:

$C0b9b91118f9138c = getimagesize($D6248a373ed1c81c);
goto label1;

label58:

$c68b76c7e42b19eb = imagecreatefrompng($D6248a373ed1c81c);

label62:

if (!$c68b76c7e42b19eb) {
	goto label125;
}

$Fae3e8768480a34e = imagecreatetruecolor($a1977ecf8aadf4c3['width'], $a1977ecf8aadf4c3['height']);
goto label97;

label73:

if (!file_exists($Cf5e0f5f58fe7b78)) {
	goto label88;
}

header('Content-Type: image/png');
echo file_get_contents($Cf5e0f5f58fe7b78);
goto label87;

label87:

exit();

label88:

header('Content-Type: image/png');
$c68b76c7e42b19eb = imagecreatetruecolor(1, 1);
goto label313;

label97:

imagealphablending($Fae3e8768480a34e, false);
imagesavealpha($Fae3e8768480a34e, true);
imagecopyresampled($Fae3e8768480a34e, $c68b76c7e42b19eb, 0, 0, 0, 0, $a1977ecf8aadf4c3['width'], $a1977ecf8aadf4c3['height'], $C0b9b91118f9138c[0], $C0b9b91118f9138c[1]);
imagepng($Fae3e8768480a34e, $Cf5e0f5f58fe7b78);

label125:

goto label73;

label126:

goto label131;

label127:

$c68b76c7e42b19eb = imagecreatefromjpeg($D6248a373ed1c81c);

label131:

goto label62;
goto label58;

label133:

$A7ca171405b19571 = $_GET['url'];
$e67d13066773cc34 = 0;
$c4689ba24233da2d = 0;

if (!isset($_GET['maxw'])) {
	goto label296;
}

$e67d13066773cc34 = intval($_GET['maxw']);
goto label296;

label150:

define('TMP_PATH', XUI_HOME . 'tmp/');
define('CACHE_TMP_PATH', TMP_PATH . 'cache/');
$Bcf70cba56392975 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'servers'));
goto label133;

label174:

$e67d13066773cc34 = intval($_GET['max']);
$c4689ba24233da2d = intval($_GET['max']);

label186:

if (!(substr($A7ca171405b19571, 0, 2) == 's:')) {
	goto label285;
}

$E3665d09b9cea208 = explode(':', $A7ca171405b19571, 3);
goto label248;

label202:
if (!($A7ca171405b19571 && (0 < $e67d13066773cc34) && (0 < $c4689ba24233da2d))) {
	goto label88;
}

$Cf5e0f5f58fe7b78 = IMAGES_PATH . 'admin/' . md5($A7ca171405b19571) . '_' . $e67d13066773cc34 . '_' . $c4689ba24233da2d . '.png';
if (!(!file_exists($Cf5e0f5f58fe7b78) || (filesize($Cf5e0f5f58fe7b78) == 0))) {
	goto label73;
}

if (d3d36e6b67ba14f6($A7ca171405b19571)) {
	goto label52;
}

$D6248a373ed1c81c = IMAGES_PATH . basename($A7ca171405b19571);
goto label51;

label248:

$C082ca9ed03f473c = intval($E3665d09b9cea208[1]);
$f547aeca99c55c3e = (empty($Bcf70cba56392975[$C082ca9ed03f473c]['domain_name']) ? $Bcf70cba56392975[$C082ca9ed03f473c]['server_ip'] : explode(',', $Bcf70cba56392975[$C082ca9ed03f473c]['domain_name'])[0]);
$B447bd0870faed42 = $Bcf70cba56392975[$C082ca9ed03f473c]['server_protocol'] . '://' . $f547aeca99c55c3e . ':' . $Bcf70cba56392975[$C082ca9ed03f473c]['request_port'] . '/';
$A7ca171405b19571 = $B447bd0870faed42 . 'images/' . basename($A7ca171405b19571);

label285:

goto label202;

label286:

session_start();
session_write_close();

if (isset($_SESSION['reseller'])) {
	goto label295;
}

exit();

label295:

goto label27;

label296:

if (!isset($_GET['maxh'])) {
	goto label307;
}

$c4689ba24233da2d = intval($_GET['maxh']);

label307:

if (!isset($_GET['max'])) {
	goto label186;
}

goto label174;

label313:

imagesavealpha($c68b76c7e42b19eb, true);
imagefill($c68b76c7e42b19eb, 0, 0, imagecolorallocatealpha($c68b76c7e42b19eb, 0, 0, 0, 127));
goto label331;

label331:

imagepng($c68b76c7e42b19eb);

?>