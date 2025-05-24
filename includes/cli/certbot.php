<?php


function Ed8dBF4549416Fa2()
{
	goto label167;

	label1:

	file_put_contents(BIN_PATH . 'nginx/conf/ssl.conf', $db954b3657036de1);
	shell_exec('chown xui:xui ' . BIN_PATH . 'nginx/conf/ssl.conf');
	$b62d6460eb33ea07->query('UPDATE `servers` SET `certbot_ssl` = ? WHERE `id` = ?;', json_encode($bbfb281553059cdb[1]), SERVER_ID);
	$D577b2a7889a5fb6 = true;

	label24:

	goto label114;

	label25:

	foreach (['logs', 'config', 'work'] as $E111d28e9acc50b9) {
		if (!file_exists(BIN_PATH . 'certbot/' . $E111d28e9acc50b9 . '/.certbot.lock')) {
			goto label45;
		}

		unlink(BIN_PATH . 'certbot/' . $E111d28e9acc50b9 . '/.certbot.lock');

		label45:
	}

	$e5d605447f0536c9 = [];

	foreach ($ba2d146bb5a55097['domain'] as $f547aeca99c55c3e) {
		if (filter_var($f547aeca99c55c3e, FILTER_VALIDATE_IP)) {
			goto label61;
		}

		$e5d605447f0536c9[] = $f547aeca99c55c3e;

		label61:
	}

	goto label157;

	label64:

	if (!in_array($c60b264a3c1c4445, [0, 1])) {
		goto label114;
	}

	$b62d6460eb33ea07->query('SELECT `certbot_ssl` FROM `servers` WHERE `id` = ?;', SERVER_ID);
	$Dd495f648db49eb5 = json_decode($b62d6460eb33ea07->get_row()['certbot_ssl'], true);

	if ($Dd495f648db49eb5) {
		goto label114;
	}

	goto label423;

	label88:

	file_put_contents(BIN_PATH . 'certbot/logs/xui.log', json_encode($B9869413eae86beb));

	if (!$D577b2a7889a5fb6) {
		goto label105;
	}

	shell_exec(XUI_HOME . 'service reload');

	label105:

	shell_exec(PHP_BIN . ' ' . CRON_PATH . 'certbot.php 1 > /dev/null 2>/dev/null &');
	goto label156;

	label114:

	$B9869413eae86beb = ['status' => $D577b2a7889a5fb6, 'error' => $c60b264a3c1c4445, 'output' => $d094d3e133ec8c03];
	shell_exec('chown -R xui:xui ' . BIN_PATH . 'certbot/');
	goto label88;

	label125:

	$B1a3986a5f168faf = $c13177660204b2bb . '/fullchain.pem';
	$Aa0de803ec231c25 = $c13177660204b2bb . '/chain.pem';
	$cc439151d556d135 = $c13177660204b2bb . '/privkey.pem';
	if (!(file_exists($B1a3986a5f168faf) && file_exists($Aa0de803ec231c25) && file_exists($cc439151d556d135))) {
		goto label24;
	}

	$db954b3657036de1 = 'ssl_certificate ' . $B1a3986a5f168faf . ';' . "\n" . 'ssl_certificate_key ' . $cc439151d556d135 . ';' . "\n" . 'ssl_trusted_certificate ' . $Aa0de803ec231c25 . ';' . "\n" . 'ssl_protocols TLSv1.2 TLSv1.3;' . "\n" . 'ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;' . "\n" . 'ssl_prefer_server_ciphers off;' . "\n" . 'ssl_ecdh_curve auto;' . "\n" . 'ssl_session_timeout 10m;' . "\n" . 'ssl_session_cache shared:MozSSL:10m;' . "\n" . 'ssl_session_tickets off;';
	goto label1;

	label156:

	goto label533;

	label157:

	$c60b264a3c1c4445 = NULL;
	$d094d3e133ec8c03 = [];
	$D577b2a7889a5fb6 = false;

	if (0 < count($e5d605447f0536c9)) {
		goto label199;
	}

	goto label197;

	label167:

	global $b62d6460eb33ea07;
	global $argv;
	$ba2d146bb5a55097 = json_decode(base64_decode($argv[1]), true);

	if (!($ba2d146bb5a55097['action'] == 'certbot_generate')) {
		goto label156;
	}

	if (!file_exists(BIN_PATH . 'certbot/logs/xui.log')) {
		goto label25;
	}

	unlink(BIN_PATH . 'certbot/logs/xui.log');
	goto label25;

	label197:

	$c60b264a3c1c4445 = 3;
	goto label64;

	label199:

	foreach (['--dry-run ', ''] as $daf094fd3e6b0cf4) {
		goto label315;

		label203:

		goto label354;

		label205:

		if (stripos(implode("\n", $d094d3e133ec8c03), 'certificate and chain have been saved at') !== false) {
			goto label358;
		}

		if (stripos(implode("\n", $d094d3e133ec8c03), 'cert not yet due for renewal') !== false) {
			goto label304;
		}

		echo 'Error: An error occured!' . "\n";
		goto label301;

		label232:

		echo 'Error: Failed to generate certificate!' . "\n";
		$c60b264a3c1c4445 = 0;
		goto label352;

		label236:

		$db954b3657036de1 = 'ssl_certificate ' . $B1a3986a5f168faf . ';' . "\n" . 'ssl_certificate_key ' . $cc439151d556d135 . ';' . "\n" . 'ssl_trusted_certificate ' . $Aa0de803ec231c25 . ';' . "\n" . 'ssl_protocols TLSv1.2 TLSv1.3;' . "\n" . 'ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;' . "\n" . 'ssl_prefer_server_ciphers off;' . "\n" . 'ssl_ecdh_curve auto;' . "\n" . 'ssl_session_timeout 10m;' . "\n" . 'ssl_session_cache shared:MozSSL:10m;' . "\n" . 'ssl_session_tickets off;';
		goto label270;

		label246:

		$B1a3986a5f168faf = $c13177660204b2bb . '/fullchain.pem';
		$Aa0de803ec231c25 = $c13177660204b2bb . '/chain.pem';
		$cc439151d556d135 = $c13177660204b2bb . '/privkey.pem';
		if (file_exists($B1a3986a5f168faf) && file_exists($Aa0de803ec231c25) && file_exists($cc439151d556d135)) {
			goto label236;
		}

		goto label232;

		label270:

		file_put_contents(BIN_PATH . 'nginx/conf/ssl.conf', $db954b3657036de1);
		shell_exec('chown xui:xui ' . BIN_PATH . 'nginx/conf/ssl.conf');
		$fb361b5f838abd3c = XUI::d6A9D4057776E78D();

		if (!$fb361b5f838abd3c['serial']) {
			goto label351;
		}

		$b62d6460eb33ea07->query('UPDATE `servers` SET `certbot_ssl` = ? WHERE `id` = ?;', json_encode($fb361b5f838abd3c), SERVER_ID);
		goto label351;

		label301:

		$c60b264a3c1c4445 = 2;
		goto label356;

		label304:

		echo 'Warning: Certificate not due for renewal!' . "\n";
		$c60b264a3c1c4445 = 1;
		goto label356;

		label308:

		goto label422;
		goto label313;

		label312:

		echo 'Dry run successful!' . "\n";

		label313:

		goto label203;

		label315:

		if (XUI::$rServers[SERVER_ID]['http_broadcast_port'] == 80) {
			goto label337;
		}

		$C6671ac66a4f1c57 = 'sudo certbot ' . $daf094fd3e6b0cf4 . '--config-dir ' . BIN_PATH . 'certbot/config --work-dir ' . BIN_PATH . 'certbot/work --logs-dir ' . BIN_PATH . 'certbot/logs certonly --agree-tos --expand --non-interactive --register-unsafely-without-email --standalone';
		goto label398;

		label337:

		$C6671ac66a4f1c57 = 'sudo certbot ' . $daf094fd3e6b0cf4 . '--config-dir ' . BIN_PATH . 'certbot/config --work-dir ' . BIN_PATH . 'certbot/work --logs-dir ' . BIN_PATH . 'certbot/logs certonly --agree-tos --expand --non-interactive --register-unsafely-without-email --webroot -w /home/xui/www/';
		goto label398;

		label351:

		$D577b2a7889a5fb6 = true;

		label352:

		goto label354;

		label354:

		goto label420;

		label356:

		goto label352;

		label358:

		$c13177660204b2bb = NULL;

		foreach ($d094d3e133ec8c03 as $F5ba2106d5227309) {
			$c13177660204b2bb = pathinfo($F5ba2106d5227309)['dirname'];
			goto label411;
		}

		goto label411;

		label373:

		exec($C6671ac66a4f1c57, $d094d3e133ec8c03, $B9869413eae86beb);

		if (empty($daf094fd3e6b0cf4)) {
			goto label205;
		}

		if (stripos(implode("\n", $d094d3e133ec8c03), 'the dry run was successful') !== false) {
			goto label312;
		}

		echo 'Error: Dry run failed!' . "\n";
		$c60b264a3c1c4445 = 4;
		goto label308;

		label398:

		foreach ($e5d605447f0536c9 as $f547aeca99c55c3e) {
			$C6671ac66a4f1c57 .= ' -d ' . basename($f547aeca99c55c3e);
		}

		$C6671ac66a4f1c57 .= ' 2>&1';
		$d094d3e133ec8c03 = [];
		goto label373;

		label411:

		if ($c13177660204b2bb) {
			goto label246;
		}

		echo 'Error: Failed to generate certificate!' . "\n";
		$c60b264a3c1c4445 = 0;
		goto label352;
		goto label246;

		label420:
	}

	label422:

	goto label64;

	label423:

	$bbfb281553059cdb = [NULL, NULL];

	foreach (scandir(BIN_PATH . 'certbot/config/live/') as $c3697707eaafc3a5) {
		goto label435;

		label433:

		goto label523;

		label435:
		if (!(($c3697707eaafc3a5 != '.') && ($c3697707eaafc3a5 != '..'))) {
			goto label482;
		}

		$E3665d09b9cea208 = explode('-', $c3697707eaafc3a5);

		if (is_numeric($E3665d09b9cea208[count($E3665d09b9cea208) - 1])) {
			goto label484;
		}

		$f547aeca99c55c3e = $c3697707eaafc3a5;
		goto label498;
		goto label484;

		label464:
		if (!(($fb361b5f838abd3c['serial'] && ($bbfb281553059cdb[0] < $fb361b5f838abd3c['expiration'])) || !$bbfb281553059cdb[0])) {
			goto label482;
		}

		$bbfb281553059cdb = [$fb361b5f838abd3c['expiration'], $fb361b5f838abd3c];

		label482:

		goto label433;

		label484:

		$f547aeca99c55c3e = implode('-', array_slice($E3665d09b9cea208, 0, count($E3665d09b9cea208) - 1));

		label498:

		if (!in_array(strtolower($f547aeca99c55c3e), array_map('strtolower', $e5d605447f0536c9))) {
			goto label482;
		}

		$fb361b5f838abd3c = XUI::D6a9D4057776e78d(BIN_PATH . 'certbot/config/live/' . $c3697707eaafc3a5 . '/fullchain.pem');
		goto label464;

		label523:
	}

	if (!$bbfb281553059cdb[0]) {
		goto label114;
	}

	$c13177660204b2bb = $bbfb281553059cdb[1]['path'];
	goto label125;

	label533:
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

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
ed8dbf4549416fa2();
goto label42;

label19:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'root')) {
	goto label30;
}

exit('Please run as root!' . "\n");

label30:
if (!(!@$argc || ($argc <= 1))) {
	goto label1;
}

exit(0);
goto label1;

label42:

?>