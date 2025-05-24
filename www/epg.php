<?php


function readChunked($F48d5724f3b4ec96)
{
	goto label18;

	label2:

	if (feof($e23e1b2beefc1001)) {
		goto label30;
	}

	$E6ebe1d751d53850 = fread($e23e1b2beefc1001, 1048576);
	echo $E6ebe1d751d53850;
	ob_flush();
	flush();
	goto label29;

	label18:

	$e23e1b2beefc1001 = fopen($F48d5724f3b4ec96, 'rb');

	if (!($e23e1b2beefc1001 === false)) {
		goto label28;
	}

	return false;

	label28:

	goto label2;

	label29:

	goto label28;

	label30:

	return fclose($e23e1b2beefc1001);
	goto label35;

	label35:
}

function shutdown()
{
	global $b62d6460eb33ea07;
	global $f76e05a7b2c4a341;
	global $E59d0debc75e7be8;
	global $cd3f9ed18bcee9bd;

	if (!$f76e05a7b2c4a341) {
		goto label9;
	}

	XUI::AEeA5d3137274f80();

	label9:

	if (!is_object($b62d6460eb33ea07)) {
		goto label17;
	}

	$b62d6460eb33ea07->close_mysql();

	label17:

	if (!$cd3f9ed18bcee9bd) {
		goto label27;
	}

	XUI::F655a951d8e1E798('epg', $E59d0debc75e7be8, getmypid());

	label27:
}

goto label283;

label1:

sort($Df5cd7b5dc4cc10c);
$ca44c9b980fc82b0 = md5(implode('_', $Df5cd7b5dc4cc10c));

if (file_exists(EPG_PATH . ('epg_' . $ca44c9b980fc82b0 . '.xml'))) {
	goto label175;
}

$D6be258a9043b749 = EPG_PATH . 'epg_all.xml';
goto label174;

label26:

if (!($E59d0debc75e7be8['isp_violate'] == 1)) {
	goto label34;
}

generateError('ISP_BLOCKED');

label34:
if (!(($E59d0debc75e7be8['isp_is_server'] == 1) && !$E59d0debc75e7be8['is_restreamer'])) {
	goto label381;
}

goto label378;

label44:
if (!((strtolower(explode('.', ltrim(parse_url($_SERVER['REQUEST_URI'])['path'], '/'))[0]) == 'xmltv') && !XUI::$rSettings['legacy_xmltv'])) {
	goto label77;
}

$f76e05a7b2c4a341 = false;
generateError('LEGACY_EPG_DISABLED');

label77:

goto label402;

label79:

generateError('NOT_IN_ALLOWED_COUNTRY');

label82:
if (!(!empty($E59d0debc75e7be8['allowed_ua']) && !in_array($Ecc2c91f94cb4fcb, $E59d0debc75e7be8['allowed_ua']))) {
	goto label26;
}

generateError('NOT_IN_ALLOWED_UAS');
goto label26;

label99:

header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: Binary');

label105:

readchunked($D6be258a9043b749);

label108:

goto label366;

label109:

generateError('INVALID_CREDENTIALS');
goto label367;

label113:

$f76e05a7b2c4a341 = false;
if (!(!$E59d0debc75e7be8['is_restreamer'] && XUI::$rSettings['disable_xmltv'])) {
	goto label127;
}

goto label124;

label124:

generateError('EPG_DISABLED');

label127:
if (!($E59d0debc75e7be8['is_restreamer'] && XUI::$rSettings['disable_xmltv_restreamer'])) {
	goto label138;
}

generateError('EPG_DISABLED');

label138:

goto label211;

label139:

if (!$B521595a86a927bf) {
	goto label144;
}

$D6be258a9043b749 .= '.gz';
$F48d5724f3b4ec96 .= '.gz';

label144:

if (file_exists($D6be258a9043b749)) {
	goto label252;
}

goto label248;

label150:
if (!(!empty($E59d0debc75e7be8['allowed_ips']) && !in_array($b38e11ffdc6a3abb, array_map('gethostbyname', $E59d0debc75e7be8['allowed_ips'])))) {
	goto label170;
}

generateError('NOT_IN_ALLOWED_IPS');

label170:

if (empty($Ed75bdbe6497efd6)) {
	goto label82;
}

goto label295;

label174:

goto label181;

label175:

$D6be258a9043b749 = EPG_PATH . ('epg_' . $ca44c9b980fc82b0 . '.xml');

label181:

$F48d5724f3b4ec96 = 'epg.xml';
goto label139;

label183:
if (!(!is_null($E59d0debc75e7be8['exp_date']) && ($E59d0debc75e7be8['exp_date'] <= time()))) {
	goto label200;
}

generateError('EXPIRED');

label200:
if (!($E59d0debc75e7be8['is_mag'] || $E59d0debc75e7be8['is_e2'])) {
	goto label368;
}

generateError('DEVICE_NOT_ALLOWED');
goto label368;

label211:

if (!($E59d0debc75e7be8['bypass_ua'] == 0)) {
	goto label226;
}

if (!XUI::BD0C896A193633Eb($Ecc2c91f94cb4fcb, true)) {
	goto label226;
}

generateError('BLOCKED_USER_AGENT');

label226:

goto label183;

label227:

generateError('DISABLED');

label230:

if (!XUI::$rSettings['restrict_playlists']) {
	goto label381;
}
if (!(empty($Ecc2c91f94cb4fcb) && (XUI::$rSettings['disallow_empty_user_agents'] == 1))) {
	goto label150;
}

generateError('EMPTY_USER_AGENT');
goto label150;

label248:

generateError('EPG_FILE_MISSING');
goto label366;

label252:

if (XUI::Bc4858BA4C3CD1fd('epg', $E59d0debc75e7be8, getmypid())) {
	goto label436;
}

generateError('DOWNLOAD_LIMIT_REACHED', false);
goto label431;

label266:

$ff5cf44f96903d64 = XUI::$rRequest['username'];
$fd093b5358e9a519 = XUI::$rRequest['password'];
if (!(empty($ff5cf44f96903d64) || empty($fd093b5358e9a519))) {
	goto label282;
}

generateError('NO_CREDENTIALS');

label282:

goto label473;

label283:

register_shutdown_function('shutdown');
require 'init.php';
set_time_limit(0);
header('Access-Control-Allow-Origin: *');
$f76e05a7b2c4a341 = true;
goto label44;

label295:

$D154a76cf486ca25 = !empty($E59d0debc75e7be8['forced_country']);
if (!($D154a76cf486ca25 && ($E59d0debc75e7be8['forced_country'] != 'ALL') && ($Ed75bdbe6497efd6 != $E59d0debc75e7be8['forced_country']))) {
	goto label312;
}

generateError('FORCED_COUNTRY_INVALID');

label312:
if (!(!$D154a76cf486ca25 && !in_array('ALL', XUI::$rSettings['allow_countries']) && !in_array($Ed75bdbe6497efd6, XUI::$rSettings['allow_countries']))) {
	goto label82;
}

goto label79;

label335:

$fd093b5358e9a519 = XUI::$rRequest['password'];
$B521595a86a927bf = !empty(XUI::$rRequest['gzip']) && (intval(XUI::$rRequest['gzip']) == 1);
if (isset(XUI::$rRequest['username']) && isset(XUI::$rRequest['password'])) {
	goto label472;
}

if (isset(XUI::$rRequest['token'])) {
	goto label451;
}

generateError('NO_CREDENTIALS');
goto label450;

label366:

exit();

label367:

goto label494;

label368:

if ($E59d0debc75e7be8['admin_enabled']) {
	goto label374;
}

generateError('BANNED');

label374:

if ($E59d0debc75e7be8['enabled']) {
	goto label230;
}

goto label227;

label378:

generateError('ASN_BLOCKED');

label381:

$Df5cd7b5dc4cc10c = [];

foreach ($E59d0debc75e7be8['bouquet'] as $b5fd3e3f0096d7f4) {
	if (!in_array($b5fd3e3f0096d7f4, array_keys(XUI::$rBouquets))) {
		goto label399;
	}

	$Df5cd7b5dc4cc10c[] = $b5fd3e3f0096d7f4;

	label399:
}

goto label1;

label402:

$cd3f9ed18bcee9bd = false;
$b38e11ffdc6a3abb = XUI::aD72b4259cA295b2();
$Ed75bdbe6497efd6 = XUI::aEd9009B5dC15cae($b38e11ffdc6a3abb)['country']['iso_code'];
$Ecc2c91f94cb4fcb = (empty($_SERVER['HTTP_USER_AGENT']) ? '' : htmlentities(trim($_SERVER['HTTP_USER_AGENT'])));
$ff5cf44f96903d64 = XUI::$rRequest['username'];
goto label335;

label431:

http_response_code(429);
exit();
goto label108;

label436:

$cd3f9ed18bcee9bd = true;
goto label438;

label438:

header('Content-disposition: attachment; filename="' . $F48d5724f3b4ec96 . '"');

if ($B521595a86a927bf) {
	goto label449;
}

header('Content-Type: application/xml; charset=utf-8');
goto label105;

label449:

goto label99;

label450:

goto label471;

label451:

$B259c62825689c1b = XUI::$rRequest['token'];

if (!empty($B259c62825689c1b)) {
	goto label462;
}

generateError('NO_CREDENTIALS');
goto label462;

label462:

$E59d0debc75e7be8 = XUI::CC988751eeBBF271(NULL, $B259c62825689c1b, NULL, false, false, $b38e11ffdc6a3abb);

label471:

goto label482;

label472:

goto label266;

label473:

$E59d0debc75e7be8 = XUI::cc988751eEBbF271(NULL, $ff5cf44f96903d64, $fd093b5358e9a519, false, false, $b38e11ffdc6a3abb);

label482:

ini_set('memory_limit', -1);

if ($E59d0debc75e7be8) {
	goto label113;
}

XUI::a1FeF6439c28608E(NULL, NULL, $ff5cf44f96903d64);
goto label109;

label494:

?>