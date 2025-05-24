<?php


function Ab8369074dF2aaa3()
{
	goto label385;

	label1:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		$b62d6460eb33ea07->query('SELECT t1.*,t2.* FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.direct_source = 0 INNER JOIN `streams_types` t3 ON t3.type_id = t2.type AND t3.live = 0 WHERE t1.to_analyze = 1 AND t1.server_id = ? LIMIT ' . $Feb130957c9ca68a . ', 1000', SERVER_ID);

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label368;
		}

		$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

		foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
			goto label125;

			label25:

			$Dcf2a78a4c7b0c6f = $b7ce96d09b50faff['codecs']['video']['codec_name'] ?: NULL;
			$C98609e3115bee61 = $b7ce96d09b50faff['codecs']['video']['height'] ?: NULL;

			if (!$C98609e3115bee61) {
				goto label47;
			}

			$C98609e3115bee61 = XUI::B954Bd7c2bec3c82([240, 360, 480, 576, 720, 1080, 1440, 2160], $C98609e3115bee61);

			label47:

			goto label200;

			label50:
			if (!(!isset($cafd95b045dd7515['video']) || ($b7ce96d09b50faff['codecs']['video']['codec_name'] != $cafd95b045dd7515['video']))) {
				goto label68;
			}

			$cafd95b045dd7515['video'] = $b7ce96d09b50faff['codecs']['video'];

			label68:
			if (!(!isset($cafd95b045dd7515['audio']) || ($b7ce96d09b50faff['codecs']['audio']['codec_name'] != $cafd95b045dd7515['audio']))) {
				goto label172;
			}

			goto label168;

			label85:
			if (!(isset($b7ce96d09b50faff['codecs']['subtitle']) && XUI::$rSettings['extract_subtitles'])) {
				goto label111;
			}

			$df6991d59f367c7e = 0;

			foreach ($b7ce96d09b50faff['codecs']['subtitle'] as $Dd11fd28d5f0e5fd) {
				XUI::extractSubtitle($Fb9da1713bff19ce['stream_id'], $Aa67586dd3803ca0, $df6991d59f367c7e);
				$df6991d59f367c7e++;
			}

			label111:

			goto label271;

			label114:

			XUI::CAc325153A658C37($Fb9da1713bff19ce['stream_id']);
			goto label122;

			label121:

			echo 'ENCODING...' . "\n";

			label122:

			goto label363;

			label125:

			echo '[*] Checking Movie ' . $Fb9da1713bff19ce['stream_display_name'] . ' ' . "\t\t" . '---> ';

			if (in_array($Fb9da1713bff19ce['pid'], $A480aa67ca5eba71)) {
				goto label121;
			}

			$Aa67586dd3803ca0 = VOD_PATH . intval($Fb9da1713bff19ce['stream_id']) . '.' . escapeshellcmd($Fb9da1713bff19ce['target_container']);

			if ($b7ce96d09b50faff = XUI::e57006536Cd5655d($Aa67586dd3803ca0)) {
				goto label346;
			}

			$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `to_analyze` = 0,`stream_status` = 1 WHERE `server_stream_id` = ?', $Fb9da1713bff19ce['server_stream_id']);
			goto label342;

			label168:

			$cafd95b045dd7515['audio'] = $b7ce96d09b50faff['codecs']['audio'];

			label172:

			if (!XUI::$rSettings['extract_subtitles']) {
				goto label231;
			}
			if (!(!isset($cafd95b045dd7515['subtitle']) || ($b7ce96d09b50faff['codecs']['subtitle']['codec_name'] != $cafd95b045dd7515['subtitle']))) {
				goto label231;
			}

			$cafd95b045dd7515['subtitle'] = $b7ce96d09b50faff['codecs']['subtitle'];
			goto label231;

			label200:

			$b62d6460eb33ea07->query('UPDATE `streams` SET `movie_properties` = ? WHERE `id` = ?', json_encode($cafd95b045dd7515, JSON_UNESCAPED_UNICODE), $Fb9da1713bff19ce['stream_id']);
			$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = ?,`to_analyze` = 0,`stream_status` = 0,`stream_info` = ?,`audio_codec` = ?,`video_codec` = ?,`resolution` = ?,`compatible` = ? WHERE `server_stream_id` = ?', $Bf1105c589a3fe51, json_encode($b7ce96d09b50faff, JSON_UNESCAPED_UNICODE), $Ea0fade993e4268b, $Dcf2a78a4c7b0c6f, $C98609e3115bee61, $ec173304ea5bcb05, $Fb9da1713bff19ce['server_stream_id']);
			echo 'VALID' . "\n";

			label228:

			goto label114;

			label231:
			if (!(!isset($cafd95b045dd7515['bitrate']) || ($Bf1105c589a3fe51 != $cafd95b045dd7515['bitrate']))) {
				goto label301;
			}

			if (0 < $Bf1105c589a3fe51) {
				goto label299;
			}

			$Bf1105c589a3fe51 = $cafd95b045dd7515['bitrate'];
			goto label296;

			label252:

			$cafd95b045dd7515 = [];

			label253:
			if (!(!isset($cafd95b045dd7515['duration_secs']) || ($d03052828cab569a != $cafd95b045dd7515['duration_secs']))) {
				goto label50;
			}

			$cafd95b045dd7515['duration_secs'] = $d03052828cab569a;
			$cafd95b045dd7515['duration'] = $f7037fc395d8fcad;
			goto label50;

			label271:

			$ec173304ea5bcb05 = 0;
			$Ea0fade993e4268b = $Dcf2a78a4c7b0c6f = $C98609e3115bee61 = NULL;

			if (!$b7ce96d09b50faff) {
				goto label200;
			}

			$ec173304ea5bcb05 = intval(XUI::d00C33C8075D14A5($b7ce96d09b50faff));
			$Ea0fade993e4268b = $b7ce96d09b50faff['codecs']['audio']['codec_name'] ?: NULL;
			goto label25;

			label296:

			goto label301;

			label299:

			$cafd95b045dd7515['bitrate'] = $Bf1105c589a3fe51;

			label301:

			goto label85;

			label304:

			$d03052828cab569a = (isset($d03052828cab569a) ? ($Aa6711f02f4e8165 * 3600) + ($C01784a58c8748e0 * 60) + $d03052828cab569a : ($Aa6711f02f4e8165 * 60) + $C01784a58c8748e0);
			$A963e07ce47787da = filesize($Aa67586dd3803ca0);
			$Bf1105c589a3fe51 = round(($A963e07ce47787da * 0.008) / $d03052828cab569a);
			$cafd95b045dd7515 = json_decode($Fb9da1713bff19ce['movie_properties'], true);

			if (is_array($cafd95b045dd7515)) {
				goto label253;
			}

			goto label252;

			label342:

			echo 'BROKEN' . "\n";
			goto label228;

			label346:

			$f7037fc395d8fcad = (isset($b7ce96d09b50faff['duration']) ? $b7ce96d09b50faff['duration'] : 0);
			sscanf($f7037fc395d8fcad, '%d:%d:%d', $Aa6711f02f4e8165, $C01784a58c8748e0, $d03052828cab569a);
			goto label304;

			label363:

			goto label366;

			label366:
		}

		label368:
	}

	label370:

	goto label558;

	label371:

	if (!(0 < $d353a4da8a0bb857)) {
		goto label370;
	}

	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

	if ($C455840d1f015c68) {
		goto label384;
	}

	$C455840d1f015c68 = [0];

	label384:

	goto label1;

	label385:

	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_servers` t3 ON t3.stream_id = t1.id LEFT JOIN `profiles` t2 ON t2.profile_id = t1.transcode_profile_id WHERE t1.type = 3 AND t3.server_id = ? AND t3.parent_id IS NULL;', SERVER_ID);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label512;
	}

	$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows();

	foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
		goto label404;

		label404:

		echo "\n\n" . '[*] Checking Stream ' . $fe93a43f53d92a4e['stream_display_name'] . "\n";
		$C98e11437faf4199 = intval(file_get_contents(CREATED_PATH . $fe93a43f53d92a4e['id'] . '_.create'));
		if ($C98e11437faf4199 && XUI::a633007D15904F34(SERVER_ID, $C98e11437faf4199, PHP_BIN)) {
			goto label504;
		}

		$fd7f71c89c071af7 = array_diff(json_decode($fe93a43f53d92a4e['stream_source'], true), json_decode($fe93a43f53d92a4e['cchannel_rsources'], true));

		if (0 < count($fd7f71c89c071af7)) {
			goto label495;
		}

		goto label456;

		label456:

		if (!file_exists(CREATED_PATH . $fe93a43f53d92a4e['id'] . '_.info')) {
			goto label490;
		}

		$d39b06d67f28803d = file_get_contents(CREATED_PATH . $fe93a43f53d92a4e['id'] . '_.info');
		$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `cc_info` = ? WHERE `server_id` = ? AND `stream_id` = ?;', $d39b06d67f28803d, SERVER_ID, $fe93a43f53d92a4e['id']);
		unlink(CREATED_PATH . $fe93a43f53d92a4e['id'] . '_.info');

		label490:

		goto label492;

		label492:

		echo "\t" . 'Build Finished' . "\n";
		goto label502;

		label495:

		echo "\t" . 'Needs Updating!' . "\n";
		XUI::queueChannel($fe93a43f53d92a4e['id']);
		goto label502;

		label502:

		goto label505;

		label504:

		echo "\t" . 'Build Is Still Going!' . "\n";

		label505:

		goto label507;

		label507:

		goto label509;

		label509:
	}

	goto label512;

	label512:

	$b62d6460eb33ea07->query('SELECT `id` FROM `recordings` WHERE `status` NOT IN (1,2) AND `source_id` = ? AND ((`start` <= UNIX_TIMESTAMP() AND `end` > UNIX_TIMESTAMP()) OR (`archive` = 1));', SERVER_ID);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label544;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		shell_exec(PHP_BIN . ' ' . INCLUDES_PATH . 'cli/record.php ' . intval($Fb9da1713bff19ce['id']) . ' > /dev/null 2>/dev/null &');
	}

	goto label544;

	label544:

	exec('ps ax | grep \'ffmpeg\' | awk \'{print $1}\'', $A480aa67ca5eba71);
	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` WHERE `to_analyze` = 1 AND `server_id` = ?', SERVER_ID);
	$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];
	goto label371;

	label558:
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

goto label1;

label1:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label12;
}

exit('Please run as XUI!' . "\n");

label12:

if (@$argc) {
	goto label19;
}

exit(0);
goto label19;

label19:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[VOD]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336b0dAD3EAF634() . __FILE__);
goto label46;

label46:

XUI::a3cf732C257Bd804($F2db9d2971f5c8c4);
ab8369074df2aaa3();
goto label53;

label53:

?>