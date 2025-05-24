<?php


function eD8dBF4549416fa2()
{
	global $b62d6460eb33ea07;
	global $C6671ac66a4f1c57;

	switch ($C6671ac66a4f1c57) {
	case 'update':
		goto label96;

		label9:

		goto label16;

		label10:

		$B8630a7c92543099 = Xui\Functions::checkUpdate('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', XUI_VERSION);

		label16:

		goto label36;

		label17:

		$A72eea6fcca1e46c = TMP_PATH . '.update.tar.gz';
		$d094d3e133ec8c03 = fopen($A72eea6fcca1e46c, 'wb');
		stream_copy_to_stream($ba2d146bb5a55097, $d094d3e133ec8c03);
		fclose($ba2d146bb5a55097);
		fclose($d094d3e133ec8c03);
		goto label81;

		label36:
		if ($B8630a7c92543099 && (0 < strlen($B8630a7c92543099['url']))) {
			goto label47;
		}

		exit(0);
		goto label67;

		label47:

		$ba2d146bb5a55097 = fopen($B8630a7c92543099['url'], 'rb');
		goto label17;

		label54:

		$C6671ac66a4f1c57 = 'sudo /usr/bin/python3 ' . XUI_HOME . 'update "' . $A72eea6fcca1e46c . '" "' . $B8630a7c92543099['md5'] . '" > /dev/null 2>&1 &';
		shell_exec($C6671ac66a4f1c57);
		exit(1);

		label67:

		goto label138;

		label68:

		if ($A7ca171405b19571) {
			goto label72;
		}

		exit(0);
		goto label9;

		label72:

		$B8630a7c92543099 = json_decode(file_get_contents($A7ca171405b19571), true);
		goto label9;

		label81:

		if (md5_file($A72eea6fcca1e46c) == $B8630a7c92543099['md5']) {
			goto label90;
		}

		exit(-1);
		goto label67;

		label90:

		$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 5 WHERE `id` = ?;', SERVER_ID);
		goto label54;

		label96:

		if (XUI::$rServers[SERVER_ID]['is_main']) {
			goto label10;
		}

		$B46d13165b878130 = NULL;
		$A7ca171405b19571 = NULL;

		foreach (XUI::$rServers as $Ec379295dc7029e6) {
			if (!$Ec379295dc7029e6['is_main']) {
				goto label135;
			}

			$A7ca171405b19571 = 'http://' . $Ec379295dc7029e6['server_ip'] . ':' . $Ec379295dc7029e6['http_broadcast_port'] . '/api?password=' . XUI::$rSettings['live_streaming_pass'] . '&action=request_update&type=' . intval(XUI::$rServers[SERVER_ID]['server_type']);
			$B46d13165b878130 = $Ec379295dc7029e6['xui_version'];
			goto label137;

			label135:
		}

		label137:

		goto label68;
	case 'post-update':
		label138:

		goto label332;

		label139:

		if (!file_exists(XUI_HOME . 'crons/status.php')) {
			goto label152;
		}

		unlink(XUI_HOME . 'crons/status.php');

		label152:

		if (!file_exists(XUI_HOME . 'includes/handler.php')) {
			goto label310;
		}

		unlink(XUI_HOME . 'includes/handler.php');
		goto label310;

		label166:

		if (!file_exists(XUI_HOME . 'bin/ffprobe')) {
			goto label179;
		}

		unlink(XUI_HOME . 'bin/ffprobe');

		label179:

		foreach (['http', 'https'] as $A7d54b094ae83c95) {
			$dfbd28cf8ffb8e7b = file_get_contents(XUI_HOME . 'bin/nginx/ports/' . $A7d54b094ae83c95 . '.conf');

			if (!(stripos($dfbd28cf8ffb8e7b, ' reuseport') !== false)) {
				goto label211;
			}

			file_put_contents(XUI_HOME . 'bin/nginx/ports/' . $A7d54b094ae83c95 . '.conf', str_replace(' reuseport', '', $dfbd28cf8ffb8e7b));

			label211:
		}

		goto label257;

		label214:

		unlink(XUI_HOME . 'www/stream/auth.php');

		label219:

		if (!file_exists(XUI_HOME . 'includes/aes.php')) {
			goto label232;
		}

		unlink(XUI_HOME . 'includes/aes.php');

		label232:

		goto label139;

		label233:

		if (XUI::$rServers[SERVER_ID]['is_main']) {
			goto label179;
		}

		if (!file_exists('/etc/init.d/xuione')) {
			goto label248;
		}

		unlink('/etc/init.d/xuione');

		label248:

		if (!file_exists(XUI_HOME . 'www/stream/auth.php')) {
			goto label219;
		}

		goto label214;

		label257:

		if (!file_exists(XUI_HOME . 'bin/redis')) {
			goto label271;
		}

		exec('rm -rf ' . XUI_HOME . 'bin/redis');

		label271:

		exec('sudo chown -R xui:xui ' . XUI_HOME);
		goto label296;

		label277:

		unlink(XUI_HOME . 'includes/cli/closed_cons.php');

		label282:

		if (!file_exists(XUI_HOME . 'bin/ffmpeg')) {
			goto label295;
		}

		unlink(XUI_HOME . 'bin/ffmpeg');

		label295:

		goto label166;

		label296:

		exec('sudo systemctl daemon-reload');
		exec('sudo echo \'net.ipv4.ip_unprivileged_port_start=0\' > /etc/sysctl.d/50-allports-nonroot.conf && sudo sysctl --system');
		exec('sudo ' . XUI_HOME . 'status');
		goto label390;
		goto label390;

		label310:

		if (!file_exists(XUI_HOME . 'includes/nhandler.php')) {
			goto label323;
		}

		unlink(XUI_HOME . 'includes/nhandler.php');

		label323:

		if (!file_exists(XUI_HOME . 'includes/cli/closed_cons.php')) {
			goto label282;
		}

		goto label277;

		label332:
		if (!(XUI::$rServers[SERVER_ID]['is_main'] && XUI::$rSettings['auto_update_lbs'])) {
			goto label380;
		}

		foreach (XUI::$rServers as $Ec379295dc7029e6) {
			if (!($Ec379295dc7029e6['enabled'] && ($Ec379295dc7029e6['status'] == 1) && ((time() - $Ec379295dc7029e6['last_check_ago']) <= 180) && !$Ec379295dc7029e6['is_main'])) {
				goto label378;
			}

			$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $Ec379295dc7029e6['id'], time(), json_encode(['action' => 'update']));

			label378:
		}

		label380:

		$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 1, `xui_version` = ?, `xui_revision` = ? WHERE `id` = ?;', XUI_VERSION, XUI_REVISION, SERVER_ID);
		goto label233;
	}

	label390:
}

function shutdown()
{
	global $b62d6460eb33ea07;

	if (!is_object($b62d6460eb33ea07)) {
		goto label9;
	}

	$b62d6460eb33ea07->close_mysql();

	label9:
}

goto label19;

label1:

exit('Not supported in Trial Mode.' . "\n");

label2:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
$C6671ac66a4f1c57 = $argv[1];
goto label44;

label19:

set_time_limit(0);
if (!(!@$argc || (count($argv) != 2))) {
	goto label36;
}

exit(0);

label36:

if (!(Xui\Functions::getLicense()[9] == 1)) {
	goto label2;
}

goto label1;

label44:

ed8dbf4549416fa2();
goto label48;

label48:

?>