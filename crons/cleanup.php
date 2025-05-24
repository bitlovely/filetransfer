<?php


function ab8369074DF2aaa3()
{
	goto label777;

	label1:

	foreach (glob(STREAMS_PATH . '*') as $F48d5724f3b4ec96) {
		$Abcb228699a7f743 = intval(rtrim(explode('.', basename($F48d5724f3b4ec96))[0], '_')) . "\n";
		if (!((0 < $Abcb228699a7f743) && !in_array($Abcb228699a7f743, $D9846544dffb63c9))) {
			goto label44;
		}

		echo 'Deleting: ' . $F48d5724f3b4ec96 . "\n";
		unlink($F48d5724f3b4ec96);

		label44:
	}

	$ba10d8a0b8348643 = [];
	$b62d6460eb33ea07->query('SELECT `id`, `tv_archive_duration` FROM `streams` WHERE `type` = 1 AND `tv_archive_server_id` = ? AND `tv_archive_duration` > 0;', SERVER_ID);
	goto label292;

	label53:

	$cbc633376c324db1 = [
		'lines_activity' => ['keep_activity', 'date_end'],
		'lines_logs'     => ['keep_client', 'date'],
		'login_logs'     => ['keep_login', 'date'],
		'streams_errors' => ['keep_errors', 'date'],
		'streams_logs'   => ['keep_restarts', 'date'],
		'ondemand_check' => ['on_demand_scan_keep', 'date']
	];

	foreach ($cbc633376c324db1 as $b5a93f3474101e1f => $F647a429f8089f01) {
		if (!(XUI::$rSettings[$F647a429f8089f01[0]] && (0 < XUI::$rSettings[$F647a429f8089f01[0]]))) {
			goto label89;
		}

		$d22b530f361e103a = time() - intval(XUI::$rSettings[$F647a429f8089f01[0]]);
		$b62d6460eb33ea07->query('DELETE FROM `' . $b5a93f3474101e1f . '` WHERE `' . $F647a429f8089f01[1] . '` < ?;', $d22b530f361e103a);

		label89:
	}

	goto label806;

	label92:

	$Ab7613704ad1bb6c = [];
	$b62d6460eb33ea07->query('SELECT `id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`type` = 3 AND `streams_servers`.`server_id` = ?;', SERVER_ID);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Ab7613704ad1bb6c[] = intval($Fb9da1713bff19ce['id']);
	}

	foreach (glob(CREATED_PATH . '*') as $F48d5724f3b4ec96) {
		$Abcb228699a7f743 = intval(rtrim(explode('.', basename($F48d5724f3b4ec96))[0], '_')) . "\n";
		if (!((0 < $Abcb228699a7f743) && !in_array($Abcb228699a7f743, $Ab7613704ad1bb6c))) {
			goto label153;
		}

		echo 'Deleting: ' . $F48d5724f3b4ec96 . "\n";
		unlink($F48d5724f3b4ec96);

		label153:
	}

	goto label425;

	label156:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label291;
	}

	$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows();

	foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
		goto label262;

		label169:

		goto label260;

		label171:

		$Cf6971a7f2ab0752 = explode("\n", file_get_contents(CREATED_PATH . $fe93a43f53d92a4e['id'] . '_.list'));
		$E040f3dc6e7f2c7b = glob(CREATED_PATH . $fe93a43f53d92a4e['id'] . '*.*');
		$e8e48c6bab7d343e = false;
		goto label194;

		label194:

		$c17887403716548e = [];

		foreach ($Cf6971a7f2ab0752 as $B4a603c2a57d3acf) {
			$F48d5724f3b4ec96 = trim(explode('\'', explode('\'', $B4a603c2a57d3acf)[1])[0]);

			if (!(0 < strlen($F48d5724f3b4ec96))) {
				goto label236;
			}

			if (in_array($F48d5724f3b4ec96, $E040f3dc6e7f2c7b)) {
				goto label234;
			}

			$e8e48c6bab7d343e = true;
			goto label236;

			label234:

			$c17887403716548e[] = $F48d5724f3b4ec96;

			label236:
		}

		if (!$e8e48c6bab7d343e) {
			goto label260;
		}

		echo 'BAD CHANNEL' . "\n";
		goto label245;

		label245:

		$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `cchannel_rsources` = ? WHERE `server_stream_id` = ?;', json_encode($c17887403716548e, JSON_UNESCAPED_UNICODE), $fe93a43f53d92a4e['server_stream_id']);
		XUI::cac325153A658C37($fe93a43f53d92a4e['id']);

		label260:

		goto label289;

		label262:

		echo "\n\n" . '[*] Checking Channel ' . $fe93a43f53d92a4e['stream_display_name'] . "\n";

		if (file_exists(CREATED_PATH . $fe93a43f53d92a4e['id'] . '_.list')) {
			goto label171;
		}

		echo 'BAD CHANNEL' . "\n";
		$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `cchannel_rsources` = \'[]\' WHERE `server_stream_id` = ?;', $fe93a43f53d92a4e['server_stream_id']);
		XUI::caC325153A658C37($fe93a43f53d92a4e['id']);
		goto label169;

		label289:
	}

	label291:

	goto label53;

	label292:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$ba10d8a0b8348643[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce['tv_archive_duration'];
	}

	date_default_timezone_set('UTC');

	foreach (glob(ARCHIVE_PATH . '*') as $ee6d1fc5d801b43f) {
		goto label317;

		label317:

		$Abcb228699a7f743 = intval(basename($ee6d1fc5d801b43f));
		if (!((0 < $Abcb228699a7f743) && is_dir(ARCHIVE_PATH . $Abcb228699a7f743))) {
			goto label420;
		}

		if (!isset($ba10d8a0b8348643[$Abcb228699a7f743])) {
			goto label411;
		}

		$f7037fc395d8fcad = $ba10d8a0b8348643[$Abcb228699a7f743];
		$d22b530f361e103a = (time() - ($f7037fc395d8fcad * 86400)) + 3600;
		goto label351;

		label351:

		foreach (glob(ARCHIVE_PATH . $Abcb228699a7f743 . '/*') as $e61ec12fb337a2ce) {
			list($e36d2f5d3c9f0972, $Ab13f2545dd3df14) = explode(':', explode('.', basename($e61ec12fb337a2ce))[0]);
			list($f4f8138a4ae6c15f, $bb8b0a36358f45b8) = explode('-', $Ab13f2545dd3df14);
			$ed730c026944fd42 = strtotime($e36d2f5d3c9f0972 . ' ' . $f4f8138a4ae6c15f . ':' . $bb8b0a36358f45b8 . ':00');

			if (!($ed730c026944fd42 < $d22b530f361e103a)) {
				goto label407;
			}

			echo 'Deleting: ' . $e61ec12fb337a2ce . "\n";
			unlink($e61ec12fb337a2ce);

			label407:
		}

		goto label420;

		label411:

		echo 'Deleting: ' . $ee6d1fc5d801b43f . "\n";
		goto label416;

		label416:

		exec('rm -rf ' . $ee6d1fc5d801b43f);

		label420:

		goto label422;

		label422:
	}

	goto label92;

	label425:

	if (!(intval(XUI::$rSettings['check_vod']) == 1)) {
		goto label53;
	}

	$b62d6460eb33ea07->query('SELECT `server_stream_id`, `id`, `target_container`, `movie_properties`, `stream_status` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `server_id` = ? AND `type` IN (2,5) AND `streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0;', SERVER_ID);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label771;
	}

	goto label446;

	label446:

	$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

	foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
		goto label486;

		label453:

		$b62d6460eb33ea07->query('UPDATE `streams` SET `movie_properties` = ? WHERE `id` = ?', json_encode($cafd95b045dd7515, JSON_UNESCAPED_UNICODE), $Fb9da1713bff19ce['id']);
		$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = ?,`to_analyze` = 0,`stream_status` = 0,`stream_info` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ?, `compatible` = ? WHERE `server_stream_id` = ?', $Bf1105c589a3fe51, json_encode($b7ce96d09b50faff, JSON_UNESCAPED_UNICODE), $Ea0fade993e4268b, $Dcf2a78a4c7b0c6f, $C98609e3115bee61, $ec173304ea5bcb05, $Fb9da1713bff19ce['server_stream_id']);
		XUI::caC325153A658c37($Fb9da1713bff19ce['id']);
		goto label764;

		label486:

		$Aa67586dd3803ca0 = VOD_PATH . $Fb9da1713bff19ce['id'] . '.' . $Fb9da1713bff19ce['target_container'];

		if ($Fb9da1713bff19ce['stream_status'] == 0) {
			goto label767;
		}

		if (!($Fb9da1713bff19ce['stream_status'] == 1)) {
			goto label765;
		}
		if (!(file_exists($Aa67586dd3803ca0) && ($b7ce96d09b50faff = XUI::E57006536Cd5655d($Aa67586dd3803ca0)))) {
			goto label765;
		}

		$f7037fc395d8fcad = (isset($b7ce96d09b50faff['duration']) ? $b7ce96d09b50faff['duration'] : 0);
		goto label610;

		label526:
		if (!(isset($b7ce96d09b50faff['codecs']['subtitle']) && XUI::$rSettings['extract_subtitles'])) {
			goto label553;
		}

		$df6991d59f367c7e = 0;

		foreach ($b7ce96d09b50faff['codecs']['subtitle'] as $Dd11fd28d5f0e5fd) {
			XUI::extractSubtitle($Fb9da1713bff19ce['stream_id'], $Aa67586dd3803ca0, $df6991d59f367c7e);
			$df6991d59f367c7e++;
		}

		goto label553;

		label553:

		$ec173304ea5bcb05 = 0;
		$Ea0fade993e4268b = $Dcf2a78a4c7b0c6f = $C98609e3115bee61 = NULL;

		if (!$b7ce96d09b50faff) {
			goto label453;
		}

		$ec173304ea5bcb05 = intval(XUI::d00C33c8075D14a5($b7ce96d09b50faff));
		goto label647;

		label570:
		if (!(!isset($cafd95b045dd7515['audio']) || ($b7ce96d09b50faff['codecs']['audio']['codec_name'] != $cafd95b045dd7515['audio']))) {
			goto label587;
		}

		$cafd95b045dd7515['audio'] = $b7ce96d09b50faff['codecs']['audio'];

		label587:

		if (!XUI::$rSettings['extract_subtitles']) {
			goto label748;
		}
		if (!(!isset($cafd95b045dd7515['subtitle']) || ($b7ce96d09b50faff['codecs']['subtitle']['codec_name'] != $cafd95b045dd7515['subtitle']))) {
			goto label748;
		}

		goto label744;

		label608:

		goto label769;

		label610:

		sscanf($f7037fc395d8fcad, '%d:%d:%d', $Aa6711f02f4e8165, $C01784a58c8748e0, $d03052828cab569a);
		$d03052828cab569a = (isset($d03052828cab569a) ? ($Aa6711f02f4e8165 * 3600) + ($C01784a58c8748e0 * 60) + $d03052828cab569a : ($Aa6711f02f4e8165 * 60) + $C01784a58c8748e0);
		$A963e07ce47787da = filesize($Aa67586dd3803ca0);
		$Bf1105c589a3fe51 = round(($A963e07ce47787da * 0.008) / $d03052828cab569a);
		$cafd95b045dd7515 = json_decode($Fb9da1713bff19ce['movie_properties'], true);
		goto label715;

		label647:

		$Ea0fade993e4268b = $b7ce96d09b50faff['codecs']['audio']['codec_name'] ?: NULL;
		$Dcf2a78a4c7b0c6f = $b7ce96d09b50faff['codecs']['video']['codec_name'] ?: NULL;
		$C98609e3115bee61 = $b7ce96d09b50faff['codecs']['video']['height'] ?: NULL;

		if (!$C98609e3115bee61) {
			goto label453;
		}

		$C98609e3115bee61 = XUI::b954Bd7c2beC3c82([240, 360, 480, 576, 720, 1080, 1440, 2160], $C98609e3115bee61);
		goto label453;

		label676:

		$cafd95b045dd7515['duration'] = $f7037fc395d8fcad;

		label678:
		if (!(!isset($cafd95b045dd7515['video']) || ($b7ce96d09b50faff['codecs']['video']['codec_name'] != $cafd95b045dd7515['video']))) {
			goto label695;
		}

		$cafd95b045dd7515['video'] = $b7ce96d09b50faff['codecs']['video'];

		label695:

		goto label570;

		label697:

		if (file_exists($Aa67586dd3803ca0)) {
			goto label713;
		}

		echo 'BAD MOVIE' . "\n";
		$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `stream_status` = 1 WHERE `server_stream_id` = ?', $Fb9da1713bff19ce['server_stream_id']);
		XUI::cAC325153A658c37($Fb9da1713bff19ce['id']);

		label713:

		goto label608;

		label715:

		if (is_array($cafd95b045dd7515)) {
			goto label722;
		}

		$cafd95b045dd7515 = [];

		label722:
		if (!(!isset($cafd95b045dd7515['duration_secs']) || ($d03052828cab569a != $cafd95b045dd7515['duration_secs']))) {
			goto label678;
		}

		$cafd95b045dd7515['duration_secs'] = $d03052828cab569a;
		goto label676;

		label736:

		$Bf1105c589a3fe51 = $cafd95b045dd7515['bitrate'];
		goto label742;

		label740:

		$cafd95b045dd7515['bitrate'] = $Bf1105c589a3fe51;

		label742:

		goto label526;

		label744:

		$cafd95b045dd7515['subtitle'] = $b7ce96d09b50faff['codecs']['subtitle'];

		label748:
		if (!(!isset($cafd95b045dd7515['bitrate']) || ($Bf1105c589a3fe51 != $cafd95b045dd7515['bitrate']))) {
			goto label526;
		}

		if (0 < $Bf1105c589a3fe51) {
			goto label740;
		}

		goto label736;

		label764:

		echo 'VALID MOVIE' . "\n";

		label765:

		goto label608;

		label767:

		goto label697;

		label769:
	}

	label771:

	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `server_stream_id` FROM `streams` t1 INNER JOIN `streams_servers` t3 ON t3.stream_id = t1.id LEFT JOIN `profiles` t2 ON t2.profile_id = t1.transcode_profile_id WHERE t1.type = 3 AND t3.server_id = ? AND JSON_CONTAINS(t3.cchannel_rsources, t1.stream_source) AND JSON_CONTAINS(t1.stream_source, t3.cchannel_rsources) AND t3.pids_create_channel = \'[]\';', SERVER_ID);
	goto label156;

	label777:

	global $b62d6460eb33ea07;

	if (!(intval(XUI::$rSettings['cleanup']) == 1)) {
		goto label425;
	}

	$D9846544dffb63c9 = [];
	$b62d6460eb33ea07->query('SELECT `id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`type` IN (1,3,4) AND `streams_servers`.`server_id` = ?;', SERVER_ID);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$D9846544dffb63c9[] = intval($Fb9da1713bff19ce['id']);
	}

	goto label1;

	label806:
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

goto label4;

label1:

ab8369074Df2AAa3();
goto label62;

label4:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label15;
}

exit('Please run as XUI!' . "\n");

label15:

if (@$argc) {
	goto label35;
}

exit(0);
goto label35;

label22:

XUI::A3cf732C257Bd804($F2db9d2971f5c8c4);
$F7379362daea673f = 3600;
set_time_limit($F7379362daea673f);
ini_set('max_execution_time', $F7379362daea673f);
goto label1;

label35:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Cleanup]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336B0Dad3EAF634() . __FILE__);
goto label22;

label62:

?>