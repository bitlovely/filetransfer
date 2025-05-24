<?php


goto label279;

label1:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if ($Fb9da1713bff19ce['pid'] && (XUI::E764f10E99C26365($Fb9da1713bff19ce['pid'], 'ffmpeg') || XUI::e764f10E99C26365($Fb9da1713bff19ce['pid'], PHP_BIN))) {
		goto label29;
	}

	$B575e4db9840f393[] = $Fb9da1713bff19ce['id'];
	goto label32;

	label29:

	$A80401f619ca7e41[] = $Fb9da1713bff19ce['pid'];

	label32:
}

label34:

$A55a86a6a9d4599f = (0 < XUI::$rSettings['max_encode_movies'] ? intval(XUI::$rSettings['max_encode_movies']) - count($A80401f619ca7e41) : 50);

if (!(0 < $A55a86a6a9d4599f)) {
	goto label79;
}

goto label297;

label56:

set_time_limit(0);
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
shell_exec('kill -9 $(ps aux | grep queue | grep -v grep | grep -v ' . getmypid() . ' | awk \'{print $2}\')');
$f8bd5a091fcdba80 = NULL;
goto label408;

label79:

if ($b62d6460eb33ea07->query('SELECT `id`, `pid` FROM `queue` WHERE `server_id` = ? AND `pid` IS NOT NULL AND `type` = \'channel\' ORDER BY `added` ASC;', SERVER_ID)) {
	goto label203;
}

goto label270;
goto label203;

label88:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label192;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label155;

	label100:

	foreach (range(1, 3) as $df6991d59f367c7e) {
		if (!file_exists(CREATED_PATH . $Fb9da1713bff19ce['stream_id'] . '_.create')) {
			goto label132;
		}

		$C98e11437faf4199 = intval(file_get_contents(CREATED_PATH . $Fb9da1713bff19ce['stream_id'] . '_.create'));
		goto label137;

		label132:

		usleep(100000);
	}

	label137:

	if ($C98e11437faf4199) {
		goto label147;
	}

	$B575e4db9840f393[] = $Fb9da1713bff19ce['id'];
	goto label153;
	goto label147;

	label147:

	$b62d6460eb33ea07->query('UPDATE `queue` SET `pid` = ? WHERE `id` = ?;', $C98e11437faf4199, $Fb9da1713bff19ce['id']);

	label153:

	goto label190;

	label155:

	if (!file_exists(CREATED_PATH . $Fb9da1713bff19ce['stream_id'] . '_.create')) {
		goto label173;
	}

	unlink(CREATED_PATH . $Fb9da1713bff19ce['stream_id'] . '_.create');

	label173:

	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'created.php ' . intval($Fb9da1713bff19ce['stream_id']) . ' >/dev/null 2>/dev/null &');
	$C98e11437faf4199 = NULL;
	goto label100;

	label190:
}

label192:

goto label359;

label193:

goto label270;

label194:

XUI::$rSettings = XUI::Ac49B56dBE10e52C(true);
$f8bd5a091fcdba80 = time();

label202:

goto label391;

label203:

$A80401f619ca7e41 = [];

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label237;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if ($Fb9da1713bff19ce['pid'] && XUI::E764f10E99c26365($Fb9da1713bff19ce['pid'], PHP_BIN)) {
		goto label231;
	}

	$B575e4db9840f393[] = $Fb9da1713bff19ce['id'];
	goto label234;

	label231:

	$A80401f619ca7e41[] = $Fb9da1713bff19ce['pid'];

	label234:
}

goto label237;

label237:

$A55a86a6a9d4599f = (0 < XUI::$rSettings['max_encode_cc'] ? intval(XUI::$rSettings['max_encode_cc']) - count($A80401f619ca7e41) : 1);

if (!(0 < $A55a86a6a9d4599f)) {
	goto label359;
}

if ($b62d6460eb33ea07->query('SELECT `id`, `stream_id` FROM `queue` WHERE `server_id` = ? AND `pid` IS NULL AND `type` = \'channel\' ORDER BY `added` ASC LIMIT ' . $A55a86a6a9d4599f . ';', SERVER_ID)) {
	goto label88;
}

goto label270;
goto label88;

label269:

goto label413;

label270:

if (!is_object($b62d6460eb33ea07)) {
	goto label278;
}

$b62d6460eb33ea07->close_mysql();

label278:

goto label420;

label279:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label290;
}

exit('Please run as XUI!' . "\n");

label290:

if (@$argc) {
	goto label56;
}

exit(0);
goto label56;

label297:

if ($b62d6460eb33ea07->query('SELECT `id`, `stream_id` FROM `queue` WHERE `server_id` = ? AND `pid` IS NULL AND `type` = \'movie\' ORDER BY `added` ASC LIMIT ' . $A55a86a6a9d4599f . ';', SERVER_ID)) {
	goto label307;
}

goto label270;

label307:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label79;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$C98e11437faf4199 = XUI::a0D6dA3165B447b7($Fb9da1713bff19ce['stream_id']);

	if ($C98e11437faf4199) {
		goto label330;
	}

	$B575e4db9840f393[] = $Fb9da1713bff19ce['id'];
	goto label336;

	label330:

	$b62d6460eb33ea07->query('UPDATE `queue` SET `pid` = ? WHERE `id` = ?;', $C98e11437faf4199, $Fb9da1713bff19ce['id']);

	label336:
}

goto label79;

label339:

goto label270;

label340:
if (!(!$f8bd5a091fcdba80 || ($Df19f1dc3a6ffd8b <= time() - $f8bd5a091fcdba80))) {
	goto label202;
}

if (!(md5_file(__FILE__) != $Cd8e1820d4075a5c)) {
	goto label194;
}

echo 'File changed! Break.' . "\n";
goto label193;

label359:

if (!(0 < count($B575e4db9840f393))) {
	goto label375;
}

$b62d6460eb33ea07->query('DELETE FROM `queue` WHERE `id` IN (' . implode(',', $B575e4db9840f393) . ');');

label375:

sleep(0 < XUI::$rSettings['queue_loop'] ? intval(XUI::$rSettings['queue_loop']) : 5);
goto label269;

label391:

if ($b62d6460eb33ea07->query('SELECT `id`, `pid` FROM `queue` WHERE `server_id` = ? AND `pid` IS NOT NULL AND `type` = \'movie\' ORDER BY `added` ASC;', SERVER_ID)) {
	goto label399;
}

goto label270;

label399:

$B575e4db9840f393 = $A80401f619ca7e41 = [];

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label34;
}

goto label1;

label408:

$Df19f1dc3a6ffd8b = 60;
$Cd8e1820d4075a5c = md5_file(__FILE__);

label413:

if (false) {
	goto label270;
}

if ($b62d6460eb33ea07->ping()) {
	goto label340;
}

goto label339;

label420:

shell_exec('(sleep 1; ' . PHP_BIN . ' ' . __FILE__ . ' ) > /dev/null 2>/dev/null &');

?>