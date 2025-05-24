<?php


function b7e8E5D6F40567f4($Ee6546c7961a39a7)
{
	goto label2;

	label2:

	$B91645b8411dc88c = '';

	if (!file_exists($Ee6546c7961a39a7)) {
		goto label68;
	}

	$B3299684b062e356 = fopen($Ee6546c7961a39a7, 'r');

	label14:

	if (feof($B3299684b062e356)) {
		goto label64;
	}

	goto label20;

	label20:

	$F5ba2106d5227309 = trim(fgets($B3299684b062e356));

	if (!empty($F5ba2106d5227309)) {
		goto label32;
	}

	goto label64;

	label32:

	$F5ba2106d5227309 = json_decode(base64_decode($F5ba2106d5227309), true);
	goto label41;

	label41:

	if (!$F5ba2106d5227309['stream_id']) {
		goto label63;
	}

	$B91645b8411dc88c .= '(' . $F5ba2106d5227309['stream_id'] . ',' . SERVER_ID . (',\'' . $F5ba2106d5227309['action'] . '\',\'' . $F5ba2106d5227309['source'] . '\',\'' . $F5ba2106d5227309['time'] . '\'),');

	label63:

	goto label14;

	label64:

	goto label65;

	label65:

	fclose($B3299684b062e356);

	label68:

	return $B91645b8411dc88c;
	goto label70;

	label70:
}

function shutdown()
{
	global $b62d6460eb33ea07;
	global $F2db9d2971f5c8c4;

	if (!is_object($b62d6460eb33ea07)) {
		goto label10;
	}

	$b62d6460eb33ea07->close_mysql();

	label10:

	@unlink($F2db9d2971f5c8c4);
}

goto label65;

label1:

$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::A336B0DAd3eAF634() . __FILE__);
XUI::a3cf732C257BD804($F2db9d2971f5c8c4);
$Ee6546c7961a39a7 = LOGS_TMP_PATH . 'stream_log.log';

if (!file_exists($Ee6546c7961a39a7)) {
	goto label64;
}

$B91645b8411dc88c = rtrim(B7E8E5D6F40567F4($Ee6546c7961a39a7), ',');
goto label52;

label31:

goto label85;

label33:

exit(0);

label34:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Stream Logs]');
goto label1;

label52:

if (empty($B91645b8411dc88c)) {
	goto label61;
}

$b62d6460eb33ea07->query('INSERT INTO `streams_logs` (`stream_id`,`server_id`,`action`,`source`,`date`) VALUES ' . $B91645b8411dc88c . ';');

label61:

unlink($Ee6546c7961a39a7);

label64:

goto label31;

label65:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label76;
}

exit('Please run as XUI!' . "\n");

label76:

set_time_limit(0);

if (@$argc) {
	goto label34;
}

goto label33;

label85:

?>