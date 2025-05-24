<?php


function AB8369074df2Aaa3()
{
	goto label22;

	label1:

	$B91645b8411dc88c = rtrim($B91645b8411dc88c, ',');
	$b62d6460eb33ea07->query('INSERT INTO `streams_errors` (`stream_id`,`server_id`,`date`,`error`) VALUES ' . $B91645b8411dc88c . ';');

	label12:

	$Ee6546c7961a39a7 = LOGS_TMP_PATH . 'error_log.log';

	if (!file_exists($Ee6546c7961a39a7)) {
		goto label182;
	}

	goto label165;

	label22:

	global $a6610c33a10808f3;
	global $b62d6460eb33ea07;
	$B91645b8411dc88c = '';

	foreach ([STREAMS_PATH] as $E111d28e9acc50b9) {
		goto label106;

		label31:

		list($ee6d1fc5d801b43f, $Daecfbd6410b9c42) = explode('.', $d7039149fbbcd135);

		if (!($Daecfbd6410b9c42 == 'errors')) {
			goto label144;
		}

		$c9c7d3ab646c9696 = array_values(array_unique(array_map('trim', explode("\n", file_get_contents($D6be258a9043b749)))));

		foreach ($c9c7d3ab646c9696 as $c60b264a3c1c4445) {
			if (!(empty($c60b264a3c1c4445) || ae7EFC3bF879bd7C($a6610c33a10808f3, $c60b264a3c1c4445))) {
				goto label80;
			}

			goto label102;

			label80:

			if (!XUI::$rSettings['stream_logs_save']) {
				goto label102;
			}

			$B91645b8411dc88c .= '(' . $ee6d1fc5d801b43f . ',' . SERVER_ID . ',' . time() . ',' . $b62d6460eb33ea07->escape($c60b264a3c1c4445) . '),';

			label102:
		}

		goto label141;

		label106:

		if (!($e23e1b2beefc1001 = opendir($E111d28e9acc50b9))) {
			goto label151;
		}

		label114:

		if (!(false !== $d7039149fbbcd135 = readdir($e23e1b2beefc1001))) {
			goto label146;
		}
		if (!(($d7039149fbbcd135 != '.') && ($d7039149fbbcd135 != '..') && is_file($E111d28e9acc50b9 . $d7039149fbbcd135))) {
			goto label144;
		}

		$D6be258a9043b749 = $E111d28e9acc50b9 . $d7039149fbbcd135;
		goto label31;

		label141:

		unlink($D6be258a9043b749);

		label144:

		goto label114;

		label146:

		goto label148;

		label148:

		closedir($e23e1b2beefc1001);

		label151:

		goto label153;

		label153:
	}
	if (!(XUI::$rSettings['stream_logs_save'] && !empty($B91645b8411dc88c))) {
		goto label12;
	}

	goto label1;

	label165:

	$B91645b8411dc88c = rtrim(B7E8e5D6F40567F4($Ee6546c7961a39a7), ',');
	$b62d6460eb33ea07->query('INSERT IGNORE INTO `panel_logs` (`server_id`,`type`,`log_message`,`log_extra`,`line`,`date`,`unique`) VALUES ' . $B91645b8411dc88c . ';');
	unlink($Ee6546c7961a39a7);

	label182:

	goto label183;

	label183:
}

function B7E8e5D6f40567f4($Ee6546c7961a39a7)
{
	goto label4;

	label2:

	return $B91645b8411dc88c;
	goto label126;

	label4:

	global $b62d6460eb33ea07;
	$f7f01a1a1fc10ce6 = [];
	$B91645b8411dc88c = '';

	if (!file_exists($Ee6546c7961a39a7)) {
		goto label107;
	}

	$B3299684b062e356 = fopen($Ee6546c7961a39a7, 'r');
	goto label108;

	label19:

	goto label108;

	label20:

	$F5ba2106d5227309 = array_map([$b62d6460eb33ea07, 'escape'], $F5ba2106d5227309);
	$B91645b8411dc88c .= '(' . SERVER_ID . (',' . $F5ba2106d5227309['type'] . ',' . $F5ba2106d5227309['message'] . ',' . $F5ba2106d5227309['extra'] . ',' . $F5ba2106d5227309['line'] . ',' . $F5ba2106d5227309['time'] . ',\'' . $B1c882f6de186600 . '\'),');
	$f7f01a1a1fc10ce6[] = $B1c882f6de186600;
	goto label103;

	label52:

	$F5ba2106d5227309 = json_decode(base64_decode($F5ba2106d5227309), true);
	$B1c882f6de186600 = md5($F5ba2106d5227309['type'] . $F5ba2106d5227309['message'] . $F5ba2106d5227309['extra'] . $F5ba2106d5227309['line']);

	if (in_array($B1c882f6de186600, $f7f01a1a1fc10ce6)) {
		goto label103;
	}
	if (!((stripos($F5ba2106d5227309['message'], 'server has gone away') !== false) && (stripos($F5ba2106d5227309['message'], 'socket error on read socket') !== false) && (stripos($F5ba2106d5227309['message'], 'connection lost') !== false))) {
		goto label20;
	}

	goto label19;

	label103:

	goto label108;

	label104:

	fclose($B3299684b062e356);

	label107:

	goto label2;

	label108:

	if (feof($B3299684b062e356)) {
		goto label104;
	}

	$F5ba2106d5227309 = trim(fgets($B3299684b062e356));

	if (!empty($F5ba2106d5227309)) {
		goto label52;
	}

	goto label104;
	goto label52;

	label126:
}

function AE7efc3BF879bd7c($Fd94beb5ab19eb72, $D44370d9bef85284)
{
	foreach ($Fd94beb5ab19eb72 as $D26c55a46693b2bb) {
		if (!stristr($D44370d9bef85284, $D26c55a46693b2bb)) {
			goto label14;
		}

		return true;

		label14:
	}

	return false;
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

exit(0);

label2:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Errors]');
goto label20;

label20:

$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336b0dAD3EAf634() . __FILE__);
XUI::A3Cf732C257Bd804($F2db9d2971f5c8c4);
$a6610c33a10808f3 = ['the user-agent option is deprecated', 'last message repeated', 'deprecated', 'packets poorly interleaved', 'invalid timestamps', 'timescale not set', 'frame size not set', 'non-monotonous dts in output stream', 'invalid dts', 'no trailing crlf', 'failed to parse extradata', 'truncated', 'missing picture', 'non-existing pps', 'clipping', 'out of range', 'cannot use rename on non file protocol', 'end of file', 'stream ends prematurely'];
ab8369074df2aaa3();
goto label57;

label37:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label48;
}

exit('Please run as XUI!' . "\n");

label48:

set_time_limit(0);

if (@$argc) {
	goto label2;
}

goto label1;

label57:

goto label60;

label60:

?>