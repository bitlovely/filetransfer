<?php


function ab8369074DF2aaA3()
{
	goto label63;

	label1:

	$B8eefa080a77380f = rtrim($B8eefa080a77380f, ',');

	if (empty($B8eefa080a77380f)) {
		goto label15;
	}

	$b62d6460eb33ea07->query('INSERT INTO `lines`(`id`,`last_ip`,`last_activity`,`last_activity_array`) VALUES ' . $B8eefa080a77380f . ' ON DUPLICATE KEY UPDATE `id`=VALUES(`id`), `last_ip`=VALUES(`last_ip`), `last_activity`=VALUES(`last_activity`), `last_activity_array`=VALUES(`last_activity_array`);');

	label15:

	goto label101;

	label16:

	goto label72;

	label17:

	goto label1;

	label18:

	$B91645b8411dc88c = rtrim($B91645b8411dc88c, ',');

	if (empty($B91645b8411dc88c)) {
		goto label17;
	}

	if (!$b62d6460eb33ea07->query('INSERT INTO `lines_activity` (`server_id`,`proxy_id`,`user_id`,`isp`,`external_device`,`stream_id`,`date_start`,`user_agent`,`user_ip`,`date_end`,`container`,`geoip_country_code`,`divergence`,`hmac_id`,`hmac_identifier`) VALUES ' . $B91645b8411dc88c)) {
		goto label17;
	}

	$A79392785ea6c59d = $b62d6460eb33ea07->last_insert_id();
	$df6991d59f367c7e = 0;
	goto label72;

	label39:

	if (!file_exists($fbc321b183debe02)) {
		goto label58;
	}

	list($B91645b8411dc88c, $c5d75a627b0fe80a, $d353a4da8a0bb857) = b7e8E5D6f40567f4($fbc321b183debe02);
	unlink($fbc321b183debe02);

	label58:

	if (!(0 < $d353a4da8a0bb857)) {
		goto label17;
	}

	goto label18;

	label63:

	global $b62d6460eb33ea07;
	$fbc321b183debe02 = LOGS_TMP_PATH . 'activity';
	$B8eefa080a77380f = $B91645b8411dc88c = '';
	$c5d75a627b0fe80a = [];
	$d353a4da8a0bb857 = 0;
	goto label39;

	label72:

	if (!($df6991d59f367c7e < $d353a4da8a0bb857)) {
		goto label17;
	}

	$B8eefa080a77380f .= '(' . $c5d75a627b0fe80a[$df6991d59f367c7e][0] . ',' . $b62d6460eb33ea07->escape($c5d75a627b0fe80a[$df6991d59f367c7e][1]) . ',' . ($A79392785ea6c59d + $df6991d59f367c7e) . ',' . $b62d6460eb33ea07->escape($c5d75a627b0fe80a[$df6991d59f367c7e][2]) . '),';
	$df6991d59f367c7e++;
	goto label16;

	label101:
}

function b7e8E5d6F40567f4($D6be258a9043b749)
{
	goto label61;

	label2:

	goto label72;

	label3:

	$F5ba2106d5227309 = json_decode(base64_decode($F5ba2106d5227309), true);
	if (!($F5ba2106d5227309['server_id'] && $F5ba2106d5227309['user_id'] && $F5ba2106d5227309['stream_id'] && $F5ba2106d5227309['user_ip'])) {
		goto label136;
	}

	$c5d75a627b0fe80a[] = [$F5ba2106d5227309['user_id'], $F5ba2106d5227309['user_ip'], json_encode(['date_end' => $F5ba2106d5227309['date_end'], 'stream_id' => $F5ba2106d5227309['stream_id']])];
	goto label80;

	label39:

	$B3299684b062e356 = fopen($D6be258a9043b749, 'r');

	label44:

	if (feof($B3299684b062e356)) {
		goto label72;
	}

	$F5ba2106d5227309 = trim(fgets($B3299684b062e356));

	if (!empty($F5ba2106d5227309)) {
		goto label3;
	}

	goto label2;

	label61:

	global $b62d6460eb33ea07;
	$B91645b8411dc88c = '';
	$c5d75a627b0fe80a = [];
	$d353a4da8a0bb857 = 0;

	if (!file_exists($D6be258a9043b749)) {
		goto label75;
	}

	goto label39;

	label72:

	fclose($B3299684b062e356);

	label75:

	return [$B91645b8411dc88c, $c5d75a627b0fe80a, $d353a4da8a0bb857];
	goto label138;

	label80:

	$F5ba2106d5227309 = array_map([$b62d6460eb33ea07, 'escape'], $F5ba2106d5227309);
	$B91645b8411dc88c .= '(' . $F5ba2106d5227309['server_id'] . ',' . $F5ba2106d5227309['proxy_id'] . ',' . $F5ba2106d5227309['user_id'] . ',' . $F5ba2106d5227309['isp'] . ',' . $F5ba2106d5227309['external_device'] . ',' . $F5ba2106d5227309['stream_id'] . ',' . $F5ba2106d5227309['date_start'] . ',' . $F5ba2106d5227309['user_agent'] . ',' . $F5ba2106d5227309['user_ip'] . ',' . $F5ba2106d5227309['date_end'] . ',' . $F5ba2106d5227309['container'] . ',' . $F5ba2106d5227309['geoip_country_code'] . ',' . $F5ba2106d5227309['divergence'] . ',' . $F5ba2106d5227309['hmac_id'] . ',' . $F5ba2106d5227309['hmac_identifier'] . '),';
	$d353a4da8a0bb857++;

	label136:

	goto label44;
	goto label72;

	label138:
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

goto label18;

label1:

$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::A336b0DaD3eaf634() . __FILE__);
XUI::A3CF732c257Bd804($F2db9d2971f5c8c4);
ab8369074df2aaa3();
goto label57;

label18:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label29;
}

exit('Please run as XUI!' . "\n");

label29:

set_time_limit(0);

if (@$argc) {
	goto label39;
}

goto label38;

label38:

exit(0);

label39:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Activity]');
goto label1;

label57:

?>