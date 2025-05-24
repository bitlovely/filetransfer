<?php


function shutdown()
{
	global $b62d6460eb33ea07;
	global $f76e05a7b2c4a341;
	global $cd3f9ed18bcee9bd;
	global $E59d0debc75e7be8;

	if (!$f76e05a7b2c4a341) {
		goto label9;
	}

	XUI::aeea5D3137274F80();

	label9:

	if (!is_object($b62d6460eb33ea07)) {
		goto label17;
	}

	$b62d6460eb33ea07->close_mysql();

	label17:

	if (!$cd3f9ed18bcee9bd) {
		goto label27;
	}

	XUI::F655a951d8E1e798('playlist', $E59d0debc75e7be8, getmypid());

	label27:
}

goto label200;

label1:

$ad7ee38ca629358c = (empty(XUI::$rRequest['output']) ? '' : XUI::$rRequest['output']);
$a7c147e53ad84ee6 = !empty(XUI::$rRequest['nocache']);
if (isset(XUI::$rRequest['username']) && isset(XUI::$rRequest['password'])) {
	goto label151;
}

if (isset(XUI::$rRequest['token'])) {
	goto label286;
}

generateError('NO_CREDENTIALS');
goto label285;

label30:

$ff5cf44f96903d64 = XUI::$rRequest['username'];
$fd093b5358e9a519 = XUI::$rRequest['password'];
if (!(empty($ff5cf44f96903d64) || empty($fd093b5358e9a519))) {
	goto label46;
}

generateError('NO_CREDENTIALS');

label46:

goto label421;

label47:

generateError('ASN_BLOCKED');

label50:

$cd3f9ed18bcee9bd = true;

if (XUI::bc4858ba4c3cD1fd('playlist', $E59d0debc75e7be8, getmypid())) {
	goto label182;
}

goto label173;

label61:

generateError('INVALID_CREDENTIALS');
goto label199;

label65:

$f76e05a7b2c4a341 = false;
if (!(!$E59d0debc75e7be8['is_restreamer'] && XUI::$rSettings['disable_playlist'])) {
	goto label89;
}

goto label86;

label76:

if ($E59d0debc75e7be8['admin_enabled']) {
	goto label82;
}

generateError('BANNED');

label82:

if ($E59d0debc75e7be8['enabled']) {
	goto label155;
}

goto label152;

label86:

generateError('PLAYLIST_DISABLED');

label89:
if (!($E59d0debc75e7be8['is_restreamer'] && XUI::$rSettings['disable_playlist_restreamer'])) {
	goto label100;
}

generateError('PLAYLIST_DISABLED');

label100:

goto label183;

label101:

$D154a76cf486ca25 = !empty($E59d0debc75e7be8['forced_country']);
if (!($D154a76cf486ca25 && ($E59d0debc75e7be8['forced_country'] != 'ALL') && ($Ed75bdbe6497efd6 != $E59d0debc75e7be8['forced_country']))) {
	goto label118;
}

generateError('FORCED_COUNTRY_INVALID');

label118:
if (!(!$D154a76cf486ca25 && !in_array('ALL', XUI::$rSettings['allow_countries']) && !in_array($Ed75bdbe6497efd6, XUI::$rSettings['allow_countries']))) {
	goto label268;
}

goto label265;

label141:

$E59d0debc75e7be8 = XUI::cC988751EEBbF271(NULL, $B259c62825689c1b, NULL, true, false, $b38e11ffdc6a3abb);

label150:

goto label430;

label151:

goto label30;

label152:

generateError('DISABLED');

label155:

if (!XUI::$rSettings['restrict_playlists']) {
	goto label50;
}
if (!(empty($Ecc2c91f94cb4fcb) && (XUI::$rSettings['disallow_empty_user_agents'] == 1))) {
	goto label372;
}

generateError('EMPTY_USER_AGENT');
goto label372;

label173:

generateError('DOWNLOAD_LIMIT_REACHED', false);
http_response_code(429);
exit();
goto label199;

label182:

goto label396;

label183:

if (!($E59d0debc75e7be8['bypass_ua'] == 0)) {
	goto label198;
}

if (!XUI::BD0c896A193633eB($Ecc2c91f94cb4fcb, true)) {
	goto label198;
}

generateError('BLOCKED_USER_AGENT');

label198:

goto label344;

label199:

goto label442;

label200:

register_shutdown_function('shutdown');
require 'init.php';
set_time_limit(0);
header('Access-Control-Allow-Origin: *');
$f76e05a7b2c4a341 = true;
goto label230;

label212:

if (!($E59d0debc75e7be8['isp_violate'] == 1)) {
	goto label220;
}

generateError('ISP_BLOCKED');

label220:
if (!(($E59d0debc75e7be8['isp_is_server'] == 1) && !$E59d0debc75e7be8['is_restreamer'])) {
	goto label50;
}

goto label47;

label230:
if (!((strtolower(explode('.', ltrim(parse_url($_SERVER['REQUEST_URI'])['path'], '/'))[0]) == 'get') && !XUI::$rSettings['legacy_get'])) {
	goto label263;
}

$f76e05a7b2c4a341 = false;
generateError('LEGACY_GET_DISABLED');

label263:

$cd3f9ed18bcee9bd = false;
goto label297;

label265:

generateError('NOT_IN_ALLOWED_COUNTRY');

label268:
if (!(!empty($E59d0debc75e7be8['allowed_ua']) && !in_array($Ecc2c91f94cb4fcb, $E59d0debc75e7be8['allowed_ua']))) {
	goto label212;
}

generateError('NOT_IN_ALLOWED_UAS');
goto label212;

label285:

goto label150;

label286:

$B259c62825689c1b = XUI::$rRequest['token'];

if (!empty($B259c62825689c1b)) {
	goto label141;
}

generateError('NO_CREDENTIALS');
goto label141;

label297:

$b38e11ffdc6a3abb = XUI::ad72B4259CA295B2();
$Ed75bdbe6497efd6 = XUI::AEd9009B5dC15cae($b38e11ffdc6a3abb)['country']['iso_code'];
$Ecc2c91f94cb4fcb = (empty($_SERVER['HTTP_USER_AGENT']) ? '' : htmlentities(trim($_SERVER['HTTP_USER_AGENT'])));
$C40c179de6ba94af = (empty(XUI::$rRequest['type']) ? 'm3u_plus' : XUI::$rRequest['type']);
$d7f8ec73fe5d64c5 = (empty(XUI::$rRequest['key']) ? NULL : explode(',', XUI::$rRequest['key']));
goto label1;

label344:
if (!(!is_null($E59d0debc75e7be8['exp_date']) && ($E59d0debc75e7be8['exp_date'] <= time()))) {
	goto label361;
}

generateError('EXPIRED');

label361:
if (!($E59d0debc75e7be8['is_mag'] || $E59d0debc75e7be8['is_e2'])) {
	goto label76;
}

generateError('DEVICE_NOT_ALLOWED');
goto label76;

label372:
if (!(!empty($E59d0debc75e7be8['allowed_ips']) && !in_array($b38e11ffdc6a3abb, array_map('gethostbyname', $E59d0debc75e7be8['allowed_ips'])))) {
	goto label392;
}

generateError('NOT_IN_ALLOWED_IPS');

label392:

if (empty($Ed75bdbe6497efd6)) {
	goto label268;
}

goto label101;

label396:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;

if (XUI::a7cF79752b1aE214($E59d0debc75e7be8, $C40c179de6ba94af, $ad7ee38ca629358c, $d7f8ec73fe5d64c5, $a7c147e53ad84ee6, XUI::efd47D0ab821C8aF($_SERVER['HTTP_X_IP']))) {
	goto label420;
}

generateError('GENERATE_PLAYLIST_FAILED');

label420:

goto label199;

label421:

$E59d0debc75e7be8 = XUI::cc988751EebBF271(NULL, $ff5cf44f96903d64, $fd093b5358e9a519, true, false, $b38e11ffdc6a3abb);

label430:

ini_set('memory_limit', -1);

if ($E59d0debc75e7be8) {
	goto label65;
}

XUI::a1fEF6439C28608e(NULL, NULL, $ff5cf44f96903d64);
goto label61;

label442:

?>