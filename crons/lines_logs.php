<?php


function aB8369074Df2AAa3()
{
	global $b62d6460eb33ea07;
	$Ee6546c7961a39a7 = LOGS_TMP_PATH . 'client_request.log';

	if (!file_exists($Ee6546c7961a39a7)) {
		goto label30;
	}

	$B91645b8411dc88c = rtrim(B7e8E5d6F40567F4($Ee6546c7961a39a7), ',');

	if (empty($B91645b8411dc88c)) {
		goto label27;
	}

	$b62d6460eb33ea07->query('INSERT INTO `lines_logs` (`stream_id`,`user_id`,`client_status`,`query_string`,`user_agent`,`ip`,`extra_data`,`date`) VALUES ' . $B91645b8411dc88c . ';');

	label27:

	unlink($Ee6546c7961a39a7);

	label30:
}

function B7e8E5D6F40567F4($Ee6546c7961a39a7)
{
	goto label25;

	label2:

	$F5ba2106d5227309 = trim(fgets($B3299684b062e356));

	if (!empty($F5ba2106d5227309)) {
		goto label14;
	}

	goto label72;

	label14:

	$F5ba2106d5227309 = json_decode(base64_decode($F5ba2106d5227309), true);
	goto label38;

	label23:

	return $B91645b8411dc88c;
	goto label76;

	label25:

	global $b62d6460eb33ea07;
	$B91645b8411dc88c = '';
	$B3299684b062e356 = fopen($Ee6546c7961a39a7, 'r');

	label32:

	if (feof($B3299684b062e356)) {
		goto label72;
	}

	goto label2;

	label38:

	$F5ba2106d5227309 = array_map([$b62d6460eb33ea07, 'escape'], $F5ba2106d5227309);
	$B91645b8411dc88c .= '(' . $F5ba2106d5227309['stream_id'] . ',' . $F5ba2106d5227309['user_id'] . ',' . $F5ba2106d5227309['action'] . ',' . $F5ba2106d5227309['query_string'] . ',' . $F5ba2106d5227309['user_agent'] . ',' . $F5ba2106d5227309['user_ip'] . ',' . $F5ba2106d5227309['extra_data'] . ',' . $F5ba2106d5227309['time'] . '),';
	goto label32;

	label72:

	fclose($B3299684b062e356);
	goto label23;

	label76:
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

goto label37;

label1:

$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336b0daD3eAF634() . __FILE__);
XUI::a3cf732c257bd804($F2db9d2971f5c8c4);
ab8369074df2aaa3();
goto label57;

label18:

exit(0);

label19:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Lines Logs]');
goto label1;

label37:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label48;
}

exit('Please run as XUI!' . "\n");

label48:

set_time_limit(0);

if (@$argc) {
	goto label19;
}

goto label18;

label57:

?>