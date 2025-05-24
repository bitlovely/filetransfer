<?php


goto label591;

label1:

goto label563;

label2:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label559;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label66;

	label14:

	$C98609e3115bee61 = $E9de85a1ad46b96d['codecs']['video']['height'] ?: NULL;
	$A73248a4eae8759f = $E9de85a1ad46b96d['codecs']['video']['bit_rate'] ?: 0;
	$D448c4b14b08fed4 = $E9de85a1ad46b96d['codecs']['audio']['bit_rate'] ?: 0;
	$c7b8b5438b915f8f = intval(explode('/', $E9de85a1ad46b96d['codecs']['video']['r_frame_rate'])[0]) ?: 0;

	if (!($c7b8b5438b915f8f == 0)) {
		goto label544;
	}

	goto label529;

	label54:

	if (!$C98609e3115bee61) {
		goto label63;
	}

	$C98609e3115bee61 = XUI::b954Bd7c2BEc3C82([240, 360, 480, 576, 720, 1080, 1440, 2160], $C98609e3115bee61);

	label63:

	$b9f049445aa9bd5d = 1;

	label64:

	goto label92;

	label66:

	echo '[' . $Fb9da1713bff19ce['id'] . '] - ' . $Fb9da1713bff19ce['stream_display_name'] . "\n";
	$b62d6460eb33ea07->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = ? AND t1.argument_id = t2.id', $Fb9da1713bff19ce['id']);
	$b5337d8a535cf6dd = $b62d6460eb33ea07->get_rows();
	$ea5e624c582e2c75 = intval($Fb9da1713bff19ce['probesize_ondemand']) ?: 512000;
	$Fe2ee13c1d643ec7 = '10000000';
	goto label484;

	label92:

	$fd51b5505224fc7c = $Ec0879f16d0cdddb[$b5a40c381c85db59];
	$b62d6460eb33ea07->query('INSERT INTO `ondemand_check`(`stream_id`, `server_id`, `status`, `source_id`, `source_url`, `fps`, `video_codec`, `audio_codec`, `resolution`, `response`, `errors`, `date`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);', $Fb9da1713bff19ce['id'], SERVER_ID, $b9f049445aa9bd5d, $b5a40c381c85db59, $fd51b5505224fc7c, $c7b8b5438b915f8f, $Dcf2a78a4c7b0c6f, $Ea0fade993e4268b, $C98609e3115bee61, $a9ea956d26555a47, $c9c7d3ab646c9696, time());
	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `ondemand_check` = ? WHERE `stream_id` = ? AND `server_id` = ?;', $b62d6460eb33ea07->last_insert_id(), $Fb9da1713bff19ce['id'], SERVER_ID);
	echo "\n";
	goto label556;

	label126:

	if (!empty($E9de85a1ad46b96d)) {
		goto label143;
	}

	echo 'Source down!' . "\n";
	$c7b8b5438b915f8f = $Ea0fade993e4268b = $Dcf2a78a4c7b0c6f = $C98609e3115bee61 = $a9ea956d26555a47 = NULL;
	$b5a40c381c85db59 = $b9f049445aa9bd5d = 0;
	goto label64;
	goto label143;

	label143:

	echo 'Source live!' . "\n";
	$E9de85a1ad46b96d = XUI::C24aC2006B36a530($E9de85a1ad46b96d);
	$Ea0fade993e4268b = $E9de85a1ad46b96d['codecs']['audio']['codec_name'] ?: NULL;
	$Dcf2a78a4c7b0c6f = $E9de85a1ad46b96d['codecs']['video']['codec_name'] ?: NULL;
	goto label14;

	label162:

	$Ec0879f16d0cdddb = json_decode($Fb9da1713bff19ce['stream_source'], true);
	$b5a40c381c85db59 = 0;
	$c9c7d3ab646c9696 = NULL;

	foreach ($Ec0879f16d0cdddb as $fd51b5505224fc7c) {
		goto label276;

		label175:

		$Ab13f2545dd3df14 = round(microtime(true) * 1000);
		$E9de85a1ad46b96d = json_decode(shell_exec(str_replace(['{FETCH_OPTIONS}', '{STREAM_SOURCE}'], [$cfec4a34eff5c713, escapeshellarg($b45008dac88f7d0a)], $b7ce96d09b50faff)), true);
		$a9ea956d26555a47 = round(microtime(true) * 1000) - $Ab13f2545dd3df14;
		goto label227;

		label213:

		if (!$Fb9da1713bff19ce['llod']) {
			goto label222;
		}

		goto label482;

		label222:

		$b5a40c381c85db59++;
		goto label480;

		label227:
		if (!(file_exists(STREAMS_TMP_PATH . $Fb9da1713bff19ce['id'] . '._errors') && (0 < filesize(STREAMS_TMP_PATH . $Fb9da1713bff19ce['id'] . '._errors')))) {
			goto label465;
		}
		if (!(!$c9c7d3ab646c9696 && ($b5a40c381c85db59 == 0))) {
			goto label266;
		}

		$c9c7d3ab646c9696 = file_get_contents(STREAMS_TMP_PATH . $Fb9da1713bff19ce['id'] . '._errors');

		label266:

		unlink(STREAMS_TMP_PATH . $Fb9da1713bff19ce['id'] . '._errors');
		goto label465;

		label276:

		$de578ef493699315 = false;
		$e4e67f6bddd67d31 = $fd51b5505224fc7c;
		$b45008dac88f7d0a = XUI::C1f42cA38AD7A48D($fd51b5505224fc7c);
		echo 'Checking source: ' . $fd51b5505224fc7c . "\n";
		$d24a79ef5aa1793c = parse_url($b45008dac88f7d0a);
		goto label292;

		label292:

		$E69320832f358c18 = XUI::c6C3738aeeBB9958($b45008dac88f7d0a);
		if (!($E69320832f358c18 && XUI::$rSettings['send_xui_header'])) {
			goto label334;
		}

		foreach (array_keys($b5337d8a535cf6dd) as $Abcb228699a7f743) {
			if (!($b5337d8a535cf6dd[$Abcb228699a7f743]['argument_key'] == 'headers')) {
				goto label323;
			}

			$b5337d8a535cf6dd[$Abcb228699a7f743]['value'] .= "\r\n" . 'X-XUI-Detect:1';
			$de578ef493699315 = true;

			label323:
		}

		if ($de578ef493699315) {
			goto label334;
		}

		goto label332;

		label332:

		$b5337d8a535cf6dd[] = ['value' => 'X-XUI-Detect:1', 'argument_key' => 'headers', 'argument_cat' => 'fetch', 'argument_wprotocol' => 'http', 'argument_type' => 'text', 'argument_cmd' => '-headers \'%s' . "\r\n" . '\''];

		label334:
		if (!($E69320832f358c18 && (XUI::$rSettings['request_prebuffer'] == 1))) {
			goto label462;
		}

		foreach (array_keys($b5337d8a535cf6dd) as $Abcb228699a7f743) {
			if (!($b5337d8a535cf6dd[$Abcb228699a7f743]['argument_key'] == 'headers')) {
				goto label362;
			}

			$b5337d8a535cf6dd[$Abcb228699a7f743]['value'] .= "\r\n" . 'X-XUI-Prebuffer:1';
			$de578ef493699315 = true;

			label362:
		}

		goto label456;

		label367:

		$Bf9be24c69c0f17b = strtolower(substr($b45008dac88f7d0a, 0, strpos($b45008dac88f7d0a, '://')));
		$cfec4a34eff5c713 = implode(' ', XUI::a0779cB0A5bDf6fF($b5337d8a535cf6dd, $Bf9be24c69c0f17b, 'fetch'));
		if (!($E69320832f358c18 && XUI::$rSettings['api_probe'])) {
			goto label175;
		}

		$Dfd95aa1f46fdf22 = $d24a79ef5aa1793c['scheme'] . '://' . $d24a79ef5aa1793c['host'] . ':' . $d24a79ef5aa1793c['port'] . '/probe/' . base64_encode($d24a79ef5aa1793c['path']);
		$Ab13f2545dd3df14 = round(microtime(true) * 1000);
		goto label424;

		label424:

		$E9de85a1ad46b96d = json_decode(XUI::C6CEEC588476Ec43($Dfd95aa1f46fdf22), true);
		$a9ea956d26555a47 = round(microtime(true) * 1000) - $Ab13f2545dd3df14;
		if (!($E9de85a1ad46b96d && isset($E9de85a1ad46b96d['streams']))) {
			goto label175;
		}

		echo 'Got stream information via API' . "\n";
		goto label482;
		goto label175;

		label456:

		if ($de578ef493699315) {
			goto label462;
		}

		$b5337d8a535cf6dd[] = ['value' => 'X-XUI-Prebuffer:1', 'argument_key' => 'headers', 'argument_cat' => 'fetch', 'argument_wprotocol' => 'http', 'argument_type' => 'text', 'argument_cmd' => '-headers \'%s' . "\r\n" . '\''];

		label462:

		goto label367;

		label465:
		if (!($E9de85a1ad46b96d && isset($E9de85a1ad46b96d['streams']))) {
			goto label477;
		}

		echo 'Got stream information via ffprobe' . "\n";
		goto label482;

		label477:

		goto label213;

		label480:
	}

	label482:

	goto label126;

	label484:

	$F7379362daea673f = intval($Fe2ee13c1d643ec7 / 1000000) + XUI::$rSettings['probe_extra_wait'];
	if (!((XUI::$rSettings['on_demand_max_probe'] < $F7379362daea673f) && (0 < XUI::$rSettings['on_demand_max_probe']))) {
		goto label510;
	}

	$F7379362daea673f = intval(XUI::$rSettings['on_demand_max_probe']);

	label510:

	$b7ce96d09b50faff = 'timeout ' . $F7379362daea673f . ' ' . XUI::$rFFPROBE . (' {FETCH_OPTIONS} -probesize ' . $ea5e624c582e2c75 . ' -analyzeduration ' . $Fe2ee13c1d643ec7 . ' -i {STREAM_SOURCE} -loglevel error -print_format json -show_streams -show_format 2>') . STREAMS_TMP_PATH . $Fb9da1713bff19ce['id'] . '._errors';
	goto label162;

	label529:

	$c7b8b5438b915f8f = intval(explode('/', $E9de85a1ad46b96d['codecs']['video']['avg_frame_rate'])[0]) ?: 0;

	label544:

	if (!(1000 <= $c7b8b5438b915f8f)) {
		goto label554;
	}

	$c7b8b5438b915f8f = intval($c7b8b5438b915f8f / 1000);

	label554:

	goto label54;

	label556:
}

goto label559;

label559:

sleep(60);
goto label642;

label563:

if (!is_object($b62d6460eb33ea07)) {
	goto label637;
}

goto label635;

label570:

XUI::$rSettings = XUI::AC49b56DbE10e52c(true);
$f8bd5a091fcdba80 = time();

label578:

if ($b62d6460eb33ea07->query('SELECT `streams`.* FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams_servers`.`pid` IS NULL AND `streams_servers`.`on_demand` = 1 AND `streams_servers`.`parent_id` IS NULL AND `streams`.`type` = 1 AND `streams`.`direct_source` = 0 AND `streams_servers`.`server_id` = ? AND (UNIX_TIMESTAMP() - (SELECT MAX(`date`) FROM `ondemand_check` WHERE `stream_id` = `streams`.`id` AND `server_id` = `streams_servers`.`server_id`) > ? OR (SELECT MAX(`date`) FROM `ondemand_check` WHERE `stream_id` = `streams`.`id` AND `server_id` = `streams_servers`.`server_id`) IS NULL);', SERVER_ID, XUI::$rSettings['on_demand_scan_time'] ?: 3600)) {
	goto label2;
}

goto label1;

label591:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label602;
}

exit('Please run as XUI!' . "\n");

label602:

if (@$argc) {
	goto label609;
}

exit(0);
goto label609;

label609:

set_time_limit(0);
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
shell_exec('kill -9 $(ps aux | grep scanner | grep -v grep | grep -v ' . getmypid() . ' | awk \'{print $2}\')');

if (XUI::$rSettings['on_demand_checker']) {
	goto label652;
}

goto label650;

label635:

$b62d6460eb33ea07->close_mysql();

label637:

goto label675;

label638:

$Cd8e1820d4075a5c = md5_file(__FILE__);

label642:

if (false) {
	goto label563;
}

if ($b62d6460eb33ea07->ping()) {
	goto label655;
}

goto label563;
goto label655;

label650:

echo 'On-Demand - Source Scanner is disabled.' . "\n";
exit();

label652:

$f8bd5a091fcdba80 = NULL;
$Df19f1dc3a6ffd8b = 60;
goto label638;

label655:
if (!(!$f8bd5a091fcdba80 || ($Df19f1dc3a6ffd8b <= time() - $f8bd5a091fcdba80))) {
	goto label578;
}

if (!(md5_file(__FILE__) != $Cd8e1820d4075a5c)) {
	goto label570;
}

echo 'File changed! Break.' . "\n";
goto label563;
goto label570;

label675:

shell_exec('(sleep 1; ' . PHP_BIN . ' ' . __FILE__ . ' ) > /dev/null 2>/dev/null &');

?>