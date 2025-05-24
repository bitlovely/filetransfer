<?php


function log_error($F82926233fc1ba3e, $cef8ac5fe6153726, $D6be258a9043b749, $F5ba2106d5227309, $b46218714d674656 = NULL)
{
	if (!in_array($F82926233fc1ba3e, [1, 2, 4])) {
		goto label37;
	}
	if (!(($F82926233fc1ba3e != 2) || (stripos($cef8ac5fe6153726, 'undefined variable') !== false) || (stripos($cef8ac5fe6153726, 'undefined constant') !== false))) {
		goto label37;
	}

	panelLog([1 => 'error', 2 => 'warning', 4 => 'parse'][$F82926233fc1ba3e], $cef8ac5fe6153726, $D6be258a9043b749, $F5ba2106d5227309);

	label37:
}

function log_exception($E0f0519e12b13b6b)
{
	panelLog('exception', $E0f0519e12b13b6b->getMessage(), $E0f0519e12b13b6b->getTraceAsString(), $E0f0519e12b13b6b->getLine());
}

function log_fatal()
{
	$c60b264a3c1c4445 = error_get_last();
	if (!(($c60b264a3c1c4445 !== NULL) && ($c60b264a3c1c4445['type'] == 1))) {
		goto label20;
	}

	panelLog('error', $c60b264a3c1c4445['message'], $c60b264a3c1c4445['file'], $c60b264a3c1c4445['line']);

	label20:
}

function panelLog($A7d54b094ae83c95, $cef8ac5fe6153726, $dfee9ca8292e4734 = '', $F5ba2106d5227309 = 0)
{
	$ba2d146bb5a55097 = ['type' => $A7d54b094ae83c95, 'message' => $cef8ac5fe6153726, 'extra' => $dfee9ca8292e4734, 'line' => $F5ba2106d5227309, 'time' => time()];
	file_put_contents(LOGS_TMP_PATH . 'error_log.log', base64_encode(json_encode($ba2d146bb5a55097)) . "\n", FILE_APPEND);
}

function keygen($dd6e9ef90b719870, $e5ed22dc86d465a8)
{
	$Bb672d1983256a93 = 'AYZP6IulCXgssFBfJH68fN8SKxQPZlh5aSAfzxMzD1F473ivbunfgMNTI5ep5Vyy';
	$df6991d59f367c7e = 0;

	label4:

	if (!($df6991d59f367c7e < strlen($e5ed22dc86d465a8))) {
		goto label23;
	}

	$e5ed22dc86d465a8[$df6991d59f367c7e] = $e5ed22dc86d465a8[$df6991d59f367c7e] ^ $Bb672d1983256a93[$df6991d59f367c7e % strlen($Bb672d1983256a93)];
	$df6991d59f367c7e++;
	goto label4;

	label23:

	return hash($dd6e9ef90b719870, $e5ed22dc86d465a8);
}

function generateError($c60b264a3c1c4445, $Bc8811941f11a84b = true)
{
	goto label3;

	label3:

	global $D60b50059153ad77;
	global $f1dcaed925076e67;

	if ($f1dcaed925076e67['debug_show_errors']) {
		goto label20;
	}

	if (!$Bc8811941f11a84b) {
		goto label13;
	}

	F82199eFF9017bC9();

	label13:

	goto label19;

	label14:

	if (!$Bc8811941f11a84b) {
		goto label18;
	}

	exit();

	label18:

	goto label33;

	label19:

	goto label18;

	label20:

	$E9cee9523de503bc = $D60b50059153ad77[$c60b264a3c1c4445] ?: '';
	$B60a3176c6d1bada = '*{-webkit-box-sizing:border-box;box-sizing:border-box}body{padding:0;margin:0}#notfound{position:relative;height:100vh}#notfound .notfound{position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.notfound{max-width:520px;width:100%;line-height:1.4;text-align:center}.notfound .notfound-404{position:relative;height:200px;margin:0 auto 20px;z-index:-1}.notfound .notfound-404 h1{font-family:Montserrat,sans-serif;font-size:236px;font-weight:200;margin:0;color:#211b19;text-transform:uppercase;position:absolute;left:50%;top:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}.notfound .notfound-404 h2{font-family:Montserrat,sans-serif;font-size:28px;font-weight:400;text-transform:uppercase;color:#211b19;background:#fff;padding:10px 5px;margin:auto;display:inline-block;position:absolute;bottom:0;left:0;right:0}.notfound p{font-family:Montserrat,sans-serif;font-size:14px;font-weight:300;text-transform:uppercase}@media only screen and (max-width:767px){.notfound .notfound-404 h1{font-size:148px}}@media only screen and (max-width:480px){.notfound .notfound-404{height:148px;margin:0 auto 10px}.notfound .notfound-404 h1{font-size:86px}.notfound .notfound-404 h2{font-size:16px}}';
	echo '<html><head><title>XUI.one - Debug Mode</title><link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet"><style>' . $B60a3176c6d1bada . '</style></head><body><div id="notfound"><div class="notfound"><div class="notfound-404"><h1>XUI.ONE</h1><h2>' . $c60b264a3c1c4445 . '</h2><br/></div><p>' . $E9cee9523de503bc . '</p></div></div></body></html>';
	goto label14;

	label33:
}

function f82199eff9017bc9($Bc8811941f11a84b = true)
{
	echo '<html>' . "\r\n" . '<head><title>404 Not Found</title></head>' . "\r\n" . '<body>' . "\r\n" . '<center><h1>404 Not Found</h1></center>' . "\r\n" . '<hr><center>nginx</center>' . "\r\n" . '</body>' . "\r\n" . '</html>' . "\r\n" . '<!-- a padding to disable MSIE and Chrome friendly error page -->' . "\r\n" . '<!-- a padding to disable MSIE and Chrome friendly error page -->' . "\r\n" . '<!-- a padding to disable MSIE and Chrome friendly error page -->' . "\r\n" . '<!-- a padding to disable MSIE and Chrome friendly error page -->' . "\r\n" . '<!-- a padding to disable MSIE and Chrome friendly error page -->' . "\r\n" . '<!-- a padding to disable MSIE and Chrome friendly error page -->';
	http_response_code(404);

	if (!$Bc8811941f11a84b) {
		goto label9;
	}

	exit();

	label9:
}

goto label525;

label1:

$bc808b3878b725a0 = $f1dcaed925076e67['debug_show_errors'] ?? false;

label5:

goto label220;

label6:
if (!(is_array($f1dcaed925076e67) && file_exists(CACHE_TMP_PATH . 'allowed_domains') && $f1dcaed925076e67['verify_host'])) {
	goto label1;
}

$ba2d146bb5a55097 = file_get_contents(CACHE_TMP_PATH . 'allowed_domains');
$Ddab3984ad15686d = igbinary_unserialize($ba2d146bb5a55097);
if (!(is_array($Ddab3984ad15686d) && !in_array(HOST, $Ddab3984ad15686d) && (HOST != 'xui') && !filter_var(HOST, FILTER_VALIDATE_IP))) {
	goto label1;
}

generateError('INVALID_HOST');
goto label1;

label63:

define('XUI_REVISION', NULL);
define('XUI_BETA', false);
define('CONFIG_PATH', XUI_HOME . 'config/');
define('BIN_PATH', XUI_HOME . 'bin/');
define('INCLUDES_PATH', XUI_HOME . 'includes/');
goto label402;

label90:

define('FFMPEG_BIN_44', BIN_PATH . 'ffmpeg_bin/4.4/ffmpeg');
define('FFPROBE_BIN_40', BIN_PATH . 'ffmpeg_bin/4.0/ffprobe');
define('FFPROBE_BIN_43', BIN_PATH . 'ffmpeg_bin/4.3/ffprobe');
define('FFPROBE_BIN_44', BIN_PATH . 'ffmpeg_bin/4.4/ffprobe');
$bc808b3878b725a0 = false;
goto label147;

label116:

define('CACHE_TMP_PATH', TMP_PATH . 'cache/');
define('STREAMS_TMP_PATH', TMP_PATH . 'cache/streams/');
define('SERIES_TMP_PATH', TMP_PATH . 'cache/series/');
define('LINES_TMP_PATH', TMP_PATH . 'cache/lines/');
define('DIVERGENCE_TMP_PATH', TMP_PATH . 'divergence/');
goto label173;

label147:

if (@$argc) {
	goto label5;
}

$b38e11ffdc6a3abb = $_SERVER['REMOTE_ADDR'];
if (!(!empty($b38e11ffdc6a3abb) && file_exists(FLOOD_TMP_PATH . 'block_' . $b38e11ffdc6a3abb))) {
	goto label231;
}

http_response_code(403);
exit();
goto label231;

label173:

define('FLOOD_TMP_PATH', TMP_PATH . 'flood/');
define('PLAYER_TMP_PATH', TMP_PATH . 'player/');
define('MINISTRA_TMP_PATH', TMP_PATH . 'ministra/');
define('SIGNALS_TMP_PATH', TMP_PATH . 'signals/');
define('LOGS_TMP_PATH', TMP_PATH . 'logs/');
goto label265;

label204:

if (defined('TMP_PATH')) {
	goto label215;
}

define('TMP_PATH', XUI_HOME . 'tmp/');

label215:

define('XUI_VERSION', '1.5.13');
goto label63;

label220:

define('PHP_ERRORS', $bc808b3878b725a0);
set_error_handler('log_error');
goto label354;

label231:

define('HOST', trim(explode(':', $_SERVER['HTTP_HOST'])[0]));

if (!file_exists(CACHE_TMP_PATH . 'settings')) {
	goto label5;
}

$ba2d146bb5a55097 = file_get_contents(CACHE_TMP_PATH . 'settings');
$f1dcaed925076e67 = igbinary_unserialize($ba2d146bb5a55097);
goto label6;

label265:

define('WATCH_TMP_PATH', TMP_PATH . 'watch/');
define('MONITOR_CALLS', 3);
define('OPENSSL_EXTRA', 'fNiu3XD448xTDa27xoY4');
define('FFMPEG_BIN_40', BIN_PATH . 'ffmpeg_bin/4.0/ffmpeg');
define('FFMPEG_BIN_43', BIN_PATH . 'ffmpeg_bin/4.3/ffmpeg');
goto label90;

label292:

define('FFMPEG_FONT', BIN_PATH . 'free-sans.ttf');
define('STREAMS_PATH', CONTENT_PATH . 'streams/');
define('EPG_PATH', CONTENT_PATH . 'epg/');
define('VOD_PATH', CONTENT_PATH . 'vod/');
define('ARCHIVE_PATH', CONTENT_PATH . 'archive/');
goto label371;

label323:

define('IMAGES_PATH', WWW_PATH . 'images/');
define('E2_IMAGES_PATH', IMAGES_PATH . 'enigma2/');
define('GEOLITE2_BIN', BIN_PATH . 'maxmind/GeoLite2.mmdb');
define('GEOLITE2C_BIN', BIN_PATH . 'maxmind/GeoLite2-City.mmdb');
define('GEOISP_BIN', BIN_PATH . 'maxmind/GeoIP2-ISP.mmdb');
goto label454;

label354:

set_exception_handler('log_exception');
register_shutdown_function('log_fatal');

if (PHP_ERRORS) {
	goto label513;
}

error_reporting(0);
ini_set('display_errors', 0);
goto label512;

label371:

define('CREATED_PATH', CONTENT_PATH . 'created/');
define('DELAY_PATH', CONTENT_PATH . 'delayed/');
define('VIDEO_PATH', CONTENT_PATH . 'video/');
define('PLAYLIST_PATH', CONTENT_PATH . 'playlists/');
define('CLI_PATH', INCLUDES_PATH . 'cli/');
goto label323;

label402:

define('WWW_PATH', XUI_HOME . 'www/');
define('CRON_PATH', XUI_HOME . 'crons/');
define('SIGNALS_PATH', XUI_HOME . 'signals/');
define('PHP_BIN', BIN_PATH . 'php/bin/php');
define('YOUTUBE_BIN', BIN_PATH . 'youtube');
goto label292;

label433:

if (defined('XUI_HOME')) {
	goto label442;
}

define('XUI_HOME', '/home/xui/');

label442:

if (defined('CONTENT_PATH')) {
	goto label204;
}

define('CONTENT_PATH', XUI_HOME . 'content/');
goto label204;

label454:

define('LOADBALANCER_UPDATE', BIN_PATH . 'install/loadbalancer_update.tar.gz');
define('PROXY_UPDATE', BIN_PATH . 'install/proxy_update.tar.gz');
define('CONS_TMP_PATH', TMP_PATH . 'opened_cons/');
define('CRONS_TMP_PATH', TMP_PATH . 'crons/');
define('CIDR_TMP_PATH', TMP_PATH . 'cidr/');
goto label116;

label485:

if (!(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME']))) {
	goto label499;
}

F82199EFf9017bC9();

label499:

@ini_set('user_agent', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.61 Safari/537.36');
@ini_set('default_socket_timeout', 5);
goto label433;

label512:

goto label531;

label513:

error_reporting(5);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);
goto label531;

label525:

$D60b50059153ad77 = ['API_IP_NOT_ALLOWED' => 'IP is not allowed to access the API.', 'ARCHIVE_DOESNT_EXIST' => 'Archive files are missing for this stream ID.', 'ASN_BLOCKED' => 'ASN has been blocked.', 'BANNED' => 'Line has been banned.', 'BLOCKED_USER_AGENT' => 'User-agent has been blocked.', 'DEVICE_NOT_ALLOWED' => 'MAG & Enigma devices are not allowed to access this.', 'DISABLED' => 'Line has been disabled.', 'DOWNLOAD_LIMIT_REACHED' => 'Reached the simultaneous download limit.', 'E2_DEVICE_LOCK_FAILED' => 'Device lock checks failed.', 'E2_DISABLED' => 'Device has been disabled.', 'E2_NO_TOKEN' => 'No token has been specified.', 'E2_TOKEN_DOESNT_MATCH' => 'Token doesn\'t match records.', 'E2_WATCHDOG_TIMEOUT' => 'Time limit reached.', 'EMPTY_USER_AGENT' => 'Empty user-agents are disallowed.', 'EPG_DISABLED' => 'EPG has been disabled.', 'EPG_FILE_MISSING' => 'Cached EPG files are missing.', 'EXPIRED' => 'Line has expired.', 'FORCED_COUNTRY_INVALID' => 'Country does not match forced country.', 'GENERATE_PLAYLIST_FAILED' => 'Playlist failed to generate.', 'HLS_DISABLED' => 'HLS has been disabled.', 'HOSTING_DETECT' => 'Hosting server has been detected.', 'INVALID_API_PASSWORD' => 'API password is invalid.', 'INVALID_CREDENTIALS' => 'Username or password is invalid.', 'INVALID_HOST' => 'Domain name not recognised.', 'INVALID_STREAM_ID' => 'Stream ID doesn\'t exist.', 'INVALID_TYPE_TOKEN' => 'Tokens can\'t be used for this stream type.', 'IP_BLOCKED' => 'IP has been blocked.', 'IP_MISMATCH' => 'Current IP doesn’t match initial connection IP.', 'ISP_BLOCKED' => 'ISP has been blocked.', 'LB_TOKEN_INVALID' => 'AES Token cannot be decrypted.', 'LEGACY_EPG_DISABLED' => 'Legacy epg.php access has been disabled.', 'LEGACY_GET_DISABLED' => 'Legacy get.php access has been disabled.', 'LEGACY_PANEL_API_DISABLED' => 'Legacy panel_api.php access has been disabled.', 'LINE_CREATE_FAIL' => 'Line failed to insert into database.', 'NO_CREDENTIALS' => 'No credentials have been specified.', 'NO_TIMESTAMP' => 'No archive timestamp has been specified.', 'NO_TOKEN_SPECIFIED' => 'No AES encrypted token has been specified.', 'NOT_ENIGMA_DEVICE' => 'Line isn\'t an enigma device.', 'NOT_IN_ALLOWED_COUNTRY' => 'Not in allowed country list.', 'NOT_IN_ALLOWED_IPS' => 'Not in allowed IP list.', 'NOT_IN_ALLOWED_UAS' => 'Not in allowed user-agent list.', 'NOT_IN_BOUQUET' => 'Line doesn’t have access to this stream ID.', 'PLAYER_API_DISABLED' => 'Player API has been disabled.', 'PROXY_DETECT' => 'Proxy has been detected.', 'PROXY_NO_API_ACCESS' => 'Can\'t access API\'s via proxy.', 'RESTREAM_DETECT' => 'Restreaming has been detected.', 'STALKER_CHANNEL_MISMATCH' => 'Stream ID doesn\'t match stalker token.', 'STALKER_DECRYPT_FAILED' => 'Failed to decrypt stalker token.', 'STALKER_INVALID_KEY' => 'Invalid stalker key.', 'STALKER_IP_MISMATCH' => 'IP doesn\'t match stalker token.', 'STALKER_KEY_EXPIRED' => 'Stalker token has expired.', 'STREAM_OFFLINE' => 'Stream is currently offline.', 'THUMBNAIL_DOESNT_EXIST' => 'Thumbnail file doesn’t exist.', 'THUMBNAILS_NOT_ENABLED' => 'Thumbnail not enabled for this stream.', 'TOKEN_ERROR' => 'AES token has incomplete data.', 'TOKEN_EXPIRED' => 'AES token has expired.', 'TS_DISABLED' => 'MPEG-TS has been disabled.', 'USER_ALREADY_CONNECTED' => 'Line already connected on a different IP.', 'USER_DISALLOW_EXT' => 'Extension is not in allowed list.', 'VOD_DOESNT_EXIST' => 'VOD file doesn\'t exist.', 'WAIT_TIME_EXPIRED' => 'Stream start has timed out, failed to start.'];
goto label485;

label531:

?>