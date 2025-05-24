<?php


goto label1;

label1:

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(32757);

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label304;
}

exit('Please run as XUI!' . "\n");
goto label304;

label24:

$ebb4852f69f0dca0 = true;

label25:

$F3f66625345f16f6 = XUI::$rSettings['automatic_backups'];
$A59807d44f15449f = intval(XUI::$rSettings['last_backup']);
goto label248;

label35:

$Fca04b1755da7bd5 = json_decode(json_encode($Fca04b1755da7bd5, JSON_UNESCAPED_UNICODE), true);
if (!(!isset($Fca04b1755da7bd5['size']) || (intval($Fca04b1755da7bd5['size']) != filesize($F48d5724f3b4ec96)))) {
	goto label66;
}

$c60b264a3c1c4445 = 'Failed to upload';
file_put_contents($F48d5724f3b4ec96 . '.error', $c60b264a3c1c4445);

label66:

goto label154;

label67:

$F3f66625345f16f6 = d436A797a6BF499F();
if (!((intval(XUI::$rSettings['backups_to_keep']) < count($F3f66625345f16f6)) && (0 < intval(XUI::$rSettings['backups_to_keep'])))) {
	goto label159;
}

$B575e4db9840f393 = array_slice($F3f66625345f16f6, 0, count($F3f66625345f16f6) - intval(XUI::$rSettings['backups_to_keep']));

foreach ($B575e4db9840f393 as $B4a603c2a57d3acf) {
	if (!file_exists(XUI_HOME . 'backups/' . $B4a603c2a57d3acf['filename'])) {
		goto label125;
	}

	unlink(XUI_HOME . 'backups/' . $B4a603c2a57d3acf['filename']);

	label125:
}

goto label159;

label128:

$b62d6460eb33ea07->close_mysql();
$F48d5724f3b4ec96 = XUI_HOME . 'backups/backup_' . date('Y-m-d_H:i:s') . '.sql';
$b492c39d2d86c9b6 = Xui\Functions::backup('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $F48d5724f3b4ec96, true);

if (0 < filesize($F48d5724f3b4ec96)) {
	goto label315;
}

unlink($F48d5724f3b4ec96);
goto label314;

label154:

unlink($F48d5724f3b4ec96 . '.uploading');

label158:

goto label67;

label159:

if (!XUI::$rSettings['dropbox_remote']) {
	goto label383;
}

$B088125f4a2f342c = f8af02a007c4B90c();
if (!((intval(XUI::$rSettings['dropbox_keep']) < count($B088125f4a2f342c)) && (0 < intval(XUI::$rSettings['dropbox_keep'])))) {
	goto label383;
}

goto label358;

label188:

goto label190;

label189:

exit();

label190:

goto label191;

label191:
if (!((isset($F3f66625345f16f6) && ($F3f66625345f16f6 != 'off')) || $ebb4852f69f0dca0)) {
	goto label67;
}
if (!((($A59807d44f15449f + $d8dafc80325ae183[$F3f66625345f16f6]) <= time()) || $ebb4852f69f0dca0)) {
	goto label158;
}

if ($ebb4852f69f0dca0) {
	goto label218;
}

$b62d6460eb33ea07->query('UPDATE `settings` SET `last_backup` = ?;', time());

label218:

goto label128;

label219:

$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336b0Dad3EAF634() . __FILE__);
XUI::a3cf732C257bd804($F2db9d2971f5c8c4);
$ebb4852f69f0dca0 = false;

if (!(1 < count($argv))) {
	goto label25;
}

if (!(intval($argv[1]) == 1)) {
	goto label25;
}

goto label24;

label248:

$d8dafc80325ae183 = ['hourly' => 3600, 'daily' => 86400, 'weekly' => 604800, 'monthly' => 2419200];

if ($ebb4852f69f0dca0) {
	goto label190;
}

$C98e11437faf4199 = getmypid();
if (file_exists('/proc/' . XUI::$rSettings['backups_pid']) && (0 < strlen(XUI::$rSettings['backups_pid']))) {
	goto label189;
}

$b62d6460eb33ea07->query('UPDATE `settings` SET `backups_pid` = ?;', $C98e11437faf4199);
goto label188;

label275:

if (!isset($Fca04b1755da7bd5->error)) {
	goto label303;
}

try {
	$c60b264a3c1c4445 = json_decode(explode(', in apiCall', $Fca04b1755da7bd5->error->getMessage())[0], true)['error_summary'];
}
catch (exception $E0f0519e12b13b6b) {
	$c60b264a3c1c4445 = 'Unknown error';
}

file_put_contents($F48d5724f3b4ec96 . '.error', $c60b264a3c1c4445);
goto label154;

label303:

goto label35;

label304:

set_time_limit(0);

if (@$argc) {
	goto label313;
}

exit(0);

label313:

goto label336;

label314:

goto label158;

label315:

if (!XUI::$rSettings['dropbox_remote']) {
	goto label158;
}

file_put_contents($F48d5724f3b4ec96 . '.uploading', time());
$Fca04b1755da7bd5 = Eeffde114C5F721a(basename($F48d5724f3b4ec96), $F48d5724f3b4ec96);
goto label275;

label336:

require str_replace('\\', '/', dirname($argv[0])) . '/../includes/admin.php';

if (XUI::$rServers[SERVER_ID]['is_main']) {
	goto label354;
}

exit('Please run on main server.');

label354:

cli_set_process_title('XUI[Backups]');
goto label219;

label358:

$B575e4db9840f393 = array_slice($B088125f4a2f342c, 0, count($B088125f4a2f342c) - intval(XUI::$rSettings['dropbox_keep']));

foreach ($B575e4db9840f393 as $B4a603c2a57d3acf) {
	try {
		E167B0A8DA1AD2A4($B4a603c2a57d3acf['path']);
	}
	catch (exception $E0f0519e12b13b6b) {
	}
}

label383:

goto label384;

label384:

@unlink($F2db9d2971f5c8c4);

?>