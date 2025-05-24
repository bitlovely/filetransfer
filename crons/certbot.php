<?php


function AB8369074Df2aAA3()
{
	goto label70;

	label1:

	if (!(0 < count($ba2d146bb5a55097['domain']))) {
		goto label21;
	}

	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', SERVER_ID, time(), json_encode($ba2d146bb5a55097));

	label21:

	goto label82;

	label22:

	$Dd495f648db49eb5 = XUI::D6a9D4057776E78D();
	if (!(XUI::$rServers[SERVER_ID]['enable_https'] && $Dd495f648db49eb5)) {
		goto label21;
	}

	if (($Dd495f648db49eb5['expiration'] - time()) < 604800) {
		goto label44;
	}

	echo 'Certificate valid, not due for renewal.' . "\n";
	goto label21;
	goto label44;

	label44:

	echo 'Certificate due for renewal.' . "\n";
	$ba2d146bb5a55097 = [
		'action' => 'certbot_generate',
		'domain' => []
	];

	foreach (explode(',', XUI::$rServers[SERVER_ID]['domain_name']) as $f547aeca99c55c3e) {
		if (filter_var($f547aeca99c55c3e, FILTER_VALIDATE_IP)) {
			goto label67;
		}

		$ba2d146bb5a55097['domain'][] = $f547aeca99c55c3e;

		label67:
	}

	goto label1;

	label70:

	global $b62d6460eb33ea07;
	global $a6691616d494dd58;

	if ($a6691616d494dd58) {
		goto label82;
	}

	if (!XUI::$rSettings['auto_send_logs']) {
		goto label81;
	}

	XUI::submitPanelLogs();

	label81:

	goto label22;

	label82:

	$b62d6460eb33ea07->query('SELECT `certbot_ssl` FROM `servers` WHERE `id` = ?;', SERVER_ID);
	$f8dc6c05bd4116fc = json_decode($b62d6460eb33ea07->get_row()['certbot_ssl'], true);
	$d6fbf2cdbc7895f2 = explode("\n", file_get_contents(XUI_HOME . 'bin/nginx/conf/ssl.conf'));

	foreach ($d6fbf2cdbc7895f2 as $F5ba2106d5227309) {
		goto label110;

		label110:

		if (!(explode(' ', $F5ba2106d5227309)[0] == 'ssl_certificate')) {
			goto label191;
		}

		$B1a3986a5f168faf = explode(';', explode(' ', $F5ba2106d5227309)[1])[0];

		if ($B1a3986a5f168faf != 'server.crt') {
			goto label223;
		}

		if (!XUI::$rServers[SERVER_ID]['certbot_ssl']) {
			goto label174;
		}

		$Dd495f648db49eb5 = json_decode(XUI::$rServers[SERVER_ID]['certbot_ssl'], true);
		goto label193;

		label155:

		file_put_contents(BIN_PATH . 'nginx/conf/ssl.conf', $db954b3657036de1);
		echo 'Fixed ssl configuration file' . "\n";
		$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', SERVER_ID, time(), json_encode(['action' => 'reload_nginx']));

		label174:

		goto label221;

		label176:

		goto label257;

		label178:

		echo 'Updated ssl configuration in database' . "\n";
		$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $Ec379295dc7029e6['id'], time(), json_encode(['action' => 'reload_nginx']));

		label191:

		goto label176;

		label193:

		if (!file_exists($Dd495f648db49eb5['path'] . '/fullchain.pem')) {
			goto label174;
		}

		$B1a3986a5f168faf = $Dd495f648db49eb5['path'] . '/fullchain.pem';
		$Aa0de803ec231c25 = $Dd495f648db49eb5['path'] . '/chain.pem';
		$cc439151d556d135 = $Dd495f648db49eb5['path'] . '/privkey.pem';
		$db954b3657036de1 = 'ssl_certificate ' . $B1a3986a5f168faf . ';' . "\n" . 'ssl_certificate_key ' . $cc439151d556d135 . ';' . "\n" . 'ssl_trusted_certificate ' . $Aa0de803ec231c25 . ';' . "\n" . 'ssl_protocols TLSv1.2 TLSv1.3;' . "\n" . 'ssl_ciphers ECDHE-ECDSA-AES128-GCM-SHA256:ECDHE-RSA-AES128-GCM-SHA256:ECDHE-ECDSA-AES256-GCM-SHA384:ECDHE-RSA-AES256-GCM-SHA384:ECDHE-ECDSA-CHACHA20-POLY1305:ECDHE-RSA-CHACHA20-POLY1305:DHE-RSA-AES128-GCM-SHA256:DHE-RSA-AES256-GCM-SHA384;' . "\n" . 'ssl_prefer_server_ciphers off;' . "\n" . 'ssl_ecdh_curve auto;' . "\n" . 'ssl_session_timeout 10m;' . "\n" . 'ssl_session_cache shared:MozSSL:10m;' . "\n" . 'ssl_session_tickets off;';
		goto label155;

		label221:

		goto label191;

		label223:

		$C076168e9e09ddef = XUI::d6A9D4057776E78d($B1a3986a5f168faf);
		if (!(($Dd495f648db49eb5['serial'] != $C076168e9e09ddef['serial']) || !XUI::$rServers[SERVER_ID]['certbot_ssl'] || ($f8dc6c05bd4116fc['serial'] != $C076168e9e09ddef['serial']))) {
			goto label191;
		}

		$b62d6460eb33ea07->query('UPDATE `servers` SET `certbot_ssl` = ? WHERE `id` = ?;', json_encode($C076168e9e09ddef), SERVER_ID);
		goto label178;

		label257:
	}

	goto label260;

	label260:

	goto label261;

	label261:
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

goto label18;

label1:

$a6691616d494dd58 = true;

label2:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
goto label33;

label18:

if (@$argc) {
	goto label24;
}

exit(0);

label24:

$a6691616d494dd58 = false;

if (!(count($argv) == 2)) {
	goto label2;
}

goto label1;

label33:

ab8369074df2aaa3();
goto label36;

label36:

?>