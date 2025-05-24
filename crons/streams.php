<?php


function ab8369074dF2AAA3()
{
	goto label684;

	label1:

	exec('ps aux | grep -v grep | grep \'/*_.m3u8\' | awk \'{print $2}\'', $A9bb0ba05fdbc059);

	foreach ($A9bb0ba05fdbc059 as $C98e11437faf4199) {
		if (!(is_numeric($C98e11437faf4199) && (0 < intval($C98e11437faf4199)) && !in_array($C98e11437faf4199, $ddc1e5c94ac28e95))) {
			goto label37;
		}

		echo 'Kill Roque PID: ' . $C98e11437faf4199 . "\n";
		shell_exec('kill -9 ' . $C98e11437faf4199 . ';');

		label37:
	}

	label39:

	goto label936;

	label40:

	if (XUI::$rSettings['redis_handler']) {
		goto label56;
	}

	$b62d6460eb33ea07->query('SELECT t2.stream_display_name, t1.stream_started, t1.stream_info, t2.fps_restart, t1.stream_status, t1.progress_info, t1.stream_id, t1.monitor_pid, t1.on_demand, t1.server_stream_id, t1.pid, clients.online_clients, clients_hls.online_clients_hls, servers_attached.attached, t2.vframes_server_id, t2.vframes_pid, t2.tv_archive_server_id, t2.tv_archive_pid FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.direct_source = 0 INNER JOIN `streams_types` t3 ON t3.type_id = t2.type LEFT JOIN (SELECT stream_id, COUNT(*) as online_clients FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY stream_id) AS clients ON clients.stream_id = t1.stream_id LEFT JOIN (SELECT `stream_id`, COUNT(*) AS `attached` FROM `streams_servers` WHERE `parent_id` = ? AND `pid` IS NOT NULL AND `pid` > 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0) AS `servers_attached` ON `servers_attached`.`stream_id` = t1.`stream_id` LEFT JOIN (SELECT stream_id, COUNT(*) as online_clients_hls FROM `lines_live` WHERE `server_id` = ? AND `container` = \'hls\' AND `hls_end` = 0 GROUP BY stream_id) AS clients_hls ON clients_hls.stream_id = t1.stream_id WHERE (t1.pid IS NOT NULL OR t1.stream_status <> 0 OR t1.to_analyze = 1) AND t1.server_id = ? AND t3.live = 1', SERVER_ID, SERVER_ID, SERVER_ID, SERVER_ID);
	goto label96;

	label56:

	$b62d6460eb33ea07->query('SELECT t2.stream_display_name, t1.stream_started, t1.stream_info, t2.fps_restart, t1.stream_status, t1.progress_info, t1.stream_id, t1.monitor_pid, t1.on_demand, t1.server_stream_id, t1.pid, servers_attached.attached, t2.vframes_server_id, t2.vframes_pid, t2.tv_archive_server_id, t2.tv_archive_pid FROM `streams_servers` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id AND t2.direct_source = 0 INNER JOIN `streams_types` t3 ON t3.type_id = t2.type LEFT JOIN (SELECT `stream_id`, COUNT(*) AS `attached` FROM `streams_servers` WHERE `parent_id` = ? AND `pid` IS NOT NULL AND `pid` > 0 AND `monitor_pid` IS NOT NULL AND `monitor_pid` > 0) AS `servers_attached` ON `servers_attached`.`stream_id` = t1.`stream_id` WHERE (t1.pid IS NOT NULL OR t1.stream_status <> 0 OR t1.to_analyze = 1) AND t1.server_id = ? AND t3.live = 1', SERVER_ID, SERVER_ID);
	goto label96;

	label64:

	$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_servers` WHERE `on_demand` = 1 AND `server_id` = ?;', SERVER_ID);
	$Ad61a555bcd8edc4 = array_keys($b62d6460eb33ea07->get_rows(true, 'stream_id'));
	$d828dca113bddc83 = shell_exec('ps aux | grep XUI');

	if (!preg_match_all('/XUI\\[(.*)\\]/', $d828dca113bddc83, $Ac97fb1939417214)) {
		goto label745;
	}

	$Ad918567d34100ee = array_diff($Ac97fb1939417214[1], $dec36723d7be7c49);
	goto label702;

	label96:

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label683;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $fe93a43f53d92a4e) {
		goto label622;

		label108:

		echo "\n";

		label109:

		goto label681;

		label111:

		goto label126;

		label113:

		$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `pid` = ?, `progress_info` = ?, `stream_info` = ?, `compatible` = ?, `bitrate` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ? WHERE `server_stream_id` = ?', $C98e11437faf4199, $A5664d150e03a3e8, $D9d6a5d0b76a9aaf, $ec173304ea5bcb05, $Bf1105c589a3fe51, $Ea0fade993e4268b, $Dcf2a78a4c7b0c6f, $C98609e3115bee61, $fe93a43f53d92a4e['server_stream_id']);

		label126:

		goto label108;

		label128:

		goto label109;

		label130:
		if (!(($fe93a43f53d92a4e['vframes_server_id'] == SERVER_ID) && !XUI::Bc5337836B080227($fe93a43f53d92a4e['vframes_pid'], $fe93a43f53d92a4e['stream_id']))) {
			goto label285;
		}

		echo 'Start Thumbnail...' . "\n";
		goto label281;

		label149:

		goto label162;

		label151:

		$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.pid'));

		label162:

		$ddc1e5c94ac28e95[] = intval($C98e11437faf4199);
		goto label240;

		label169:

		usleep(50000);
		goto label109;

		label174:
		if (!(($fe93a43f53d92a4e['on_demand'] == 1) && ($fe93a43f53d92a4e['attached'] == 0))) {
			goto label130;
		}

		if (!XUI::$rSettings['redis_handler']) {
			goto label677;
		}

		goto label318;

		label192:
		if (!(($b4b2b0820a243f3b == 0) && ($a5e5695ab793486d == 0) && ($fe93a43f53d92a4e['online_clients'] == 0) && (file_exists(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.m3u8') || (intval(XUI::$rSettings['on_demand_wait_time']) < (time() - intval($fe93a43f53d92a4e['stream_started']))) || ($fe93a43f53d92a4e['stream_status'] == 1)))) {
			goto label130;
		}

		echo 'Stop on-demand stream...' . "\n\n";
		XUI::ee173B194544B3a2($fe93a43f53d92a4e['stream_id'], true);
		goto label128;

		label240:

		$Aac64ae34ff57fc4 = STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.m3u8';
		if (!(XUI::b4ab2a8Eb0AA68Ee($C98e11437faf4199, $fe93a43f53d92a4e['stream_id']) && file_exists($Aac64ae34ff57fc4))) {
			goto label126;
		}

		echo 'Update Stream Information...' . "\n";
		$Bf1105c589a3fe51 = XUI::E0117654B65ae897('live', STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.m3u8');

		if (file_exists(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.progress')) {
			goto label555;
		}

		goto label551;

		label281:

		XUI::D1B70980B1181C05($fe93a43f53d92a4e['stream_id']);

		label285:
		if (!(($fe93a43f53d92a4e['tv_archive_server_id'] == SERVER_ID) && !XUI::c64f62A7AF653bD1($fe93a43f53d92a4e['tv_archive_pid'], $fe93a43f53d92a4e['stream_id']))) {
			goto label572;
		}

		echo 'Start TV Archive...' . "\n";
		shell_exec(PHP_BIN . ' ' . CLI_PATH . 'archive.php ' . intval($fe93a43f53d92a4e['stream_id']) . ' >/dev/null 2>/dev/null & echo $!');
		goto label572;

		label318:

		$d353a4da8a0bb857 = 0;
		$ca8155fd3c07c1ee = XUI::$redis->zRangeByScore('STREAM#' . $fe93a43f53d92a4e['stream_id'], '-inf', '+inf');

		if (!(0 < count($ca8155fd3c07c1ee))) {
			goto label675;
		}

		$A1a73957c6feb09a = array_map('igbinary_unserialize', XUI::$redis->mGet($ca8155fd3c07c1ee));

		foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
			if (!($Fd10d59f87b19e71 && ($Fd10d59f87b19e71['server_id'] == SERVER_ID))) {
				goto label359;
			}

			$d353a4da8a0bb857++;

			label359:
		}

		goto label675;

		label363:

		$ec173304ea5bcb05 = 0;
		$Ea0fade993e4268b = $Dcf2a78a4c7b0c6f = $C98609e3115bee61 = NULL;

		if (!$D9d6a5d0b76a9aaf) {
			goto label656;
		}

		$ff5ef044498e902a = json_decode($D9d6a5d0b76a9aaf, true);
		goto label520;

		label378:

		$D9d6a5d0b76a9aaf = $fe93a43f53d92a4e['stream_info'];
		goto label363;

		label382:

		$D9d6a5d0b76a9aaf = file_get_contents(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.stream_info');
		unlink(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.stream_info');
		goto label363;

		label399:

		if (!$fe93a43f53d92a4e['fps_restart']) {
			goto label412;
		}

		file_put_contents(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.progress_check', $A5664d150e03a3e8);

		label412:

		if (file_exists(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.stream_info')) {
			goto label382;
		}

		goto label378;

		label424:

		if ((time() - filemtime(SIGNALS_TMP_PATH . 'admin_' . intval($fe93a43f53d92a4e['stream_id']))) <= 30) {
			goto label453;
		}

		unlink(SIGNALS_TMP_PATH . 'admin_' . intval($fe93a43f53d92a4e['stream_id']));
		goto label192;

		label453:

		$a5e5695ab793486d = 1;
		goto label192;

		label456:
		if (!(XUI::$rSettings['on_demand_instant_off'] && file_exists(SIGNALS_TMP_PATH . 'queue_' . intval($fe93a43f53d92a4e['stream_id'])))) {
			goto label504;
		}

		foreach (igbinary_unserialize(file_get_contents(SIGNALS_TMP_PATH . 'queue_' . intval($fe93a43f53d92a4e['stream_id']))) ?: [] as $C98e11437faf4199) {
			if (!XUI::E764F10e99c26365($C98e11437faf4199, 'php-fpm')) {
				goto label502;
			}

			$b4b2b0820a243f3b++;

			label502:
		}

		label504:

		if (!file_exists(SIGNALS_TMP_PATH . 'admin_' . intval($fe93a43f53d92a4e['stream_id']))) {
			goto label192;
		}

		goto label424;

		label520:

		$ec173304ea5bcb05 = intval(XUI::D00c33c8075d14a5($ff5ef044498e902a));
		$Ea0fade993e4268b = $ff5ef044498e902a['codecs']['audio']['codec_name'] ?: NULL;
		$Dcf2a78a4c7b0c6f = $ff5ef044498e902a['codecs']['video']['codec_name'] ?: NULL;
		$C98609e3115bee61 = $ff5ef044498e902a['codecs']['video']['height'] ?: NULL;

		if (!$C98609e3115bee61) {
			goto label656;
		}

		goto label651;

		label551:

		$A5664d150e03a3e8 = $fe93a43f53d92a4e['progress_info'];
		goto label412;

		label555:

		$A5664d150e03a3e8 = file_get_contents(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.progress');
		unlink(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.progress');
		goto label399;

		label572:

		foreach (glob(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_*.ts.enc') as $D6be258a9043b749) {
			if (file_exists(rtrim($D6be258a9043b749, '.enc'))) {
				goto label595;
			}

			unlink($D6be258a9043b749);

			label595:
		}

		if (file_exists(STREAMS_PATH . $fe93a43f53d92a4e['stream_id'] . '_.pid')) {
			goto label151;
		}

		$C98e11437faf4199 = intval(shell_exec('ps aux | grep -v grep | grep \'/' . intval($fe93a43f53d92a4e['stream_id']) . '_.m3u8\' | awk \'{print $2}\''));
		goto label149;

		label622:

		echo 'Stream ID: ' . $fe93a43f53d92a4e['stream_id'] . "\n";
		$dec36723d7be7c49[] = $fe93a43f53d92a4e['stream_id'];
		if (!(!XUI::d93AF048A0e404F2($fe93a43f53d92a4e['monitor_pid'], $fe93a43f53d92a4e['stream_id']) && !$fe93a43f53d92a4e['on_demand'])) {
			goto label174;
		}

		echo 'Start monitor...' . "\n\n";
		XUI::B820c3EB85EBd48c($fe93a43f53d92a4e['stream_id']);
		goto label169;

		label651:

		$C98609e3115bee61 = XUI::B954bD7C2BEC3c82([240, 360, 480, 576, 720, 1080, 1440, 2160], $C98609e3115bee61);

		label656:

		if ($fe93a43f53d92a4e['pid'] != $C98e11437faf4199) {
			goto label113;
		}

		$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `progress_info` = ?, `stream_info` = ?, `compatible` = ?, `bitrate` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ? WHERE `server_stream_id` = ?', $A5664d150e03a3e8, $D9d6a5d0b76a9aaf, $ec173304ea5bcb05, $Bf1105c589a3fe51, $Ea0fade993e4268b, $Dcf2a78a4c7b0c6f, $C98609e3115bee61, $fe93a43f53d92a4e['server_stream_id']);
		goto label111;

		label675:

		$fe93a43f53d92a4e['online_clients'] = $d353a4da8a0bb857;

		label677:

		$a5e5695ab793486d = $b4b2b0820a243f3b = 0;
		goto label456;

		label681:
	}

	label683:

	goto label751;

	label684:

	global $b62d6460eb33ea07;

	if (XUI::aB992b2373F7Beca()) {
		goto label691;
	}

	echo 'XUI not running...' . "\n";
	goto label39;

	label691:

	goto label692;

	label692:

	if (!XUI::$rSettings['redis_handler']) {
		goto label699;
	}

	XUI::D6AEb3175a43F301();

	label699:

	$ddc1e5c94ac28e95 = [];
	$dec36723d7be7c49 = [];
	goto label40;

	label702:

	$Ad918567d34100ee = array_diff($Ad918567d34100ee, $Ad61a555bcd8edc4);

	foreach ($Ad918567d34100ee as $ee6d1fc5d801b43f) {
		if (is_numeric($ee6d1fc5d801b43f)) {
			goto label717;
		}

		goto label743;

		label717:

		echo 'Kill Stream ID: ' . $ee6d1fc5d801b43f . "\n";
		shell_exec('kill -9 `ps -ef | grep \'/' . intval($ee6d1fc5d801b43f) . '_.m3u8\\|XUI\\[' . intval($ee6d1fc5d801b43f) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');
		shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*');

		label743:
	}

	label745:

	if (!XUI::$rSettings['kill_rogue_ffmpeg']) {
		goto label39;
	}

	goto label1;

	label751:

	$b62d6460eb33ea07->query('SELECT `streams`.`id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `streams`.`direct_source` = 1 AND `streams`.`direct_proxy` = 1 AND `streams_servers`.`server_id` = ? AND `streams_servers`.`pid` > 0;', SERVER_ID);

	if (!(0 < $b62d6460eb33ea07->num_rows())) {
		goto label935;
	}

	foreach ($b62d6460eb33ea07->get_rows() as $fe93a43f53d92a4e) {
		goto label898;

		label768:

		closedir($e23e1b2beefc1001);

		label771:

		goto label933;

		label773:

		unlink(CONS_TMP_PATH . $fe93a43f53d92a4e['id'] . '/' . $F48d5724f3b4ec96);

		label781:

		goto label797;

		label783:

		goto label768;

		label785:

		if (!($e23e1b2beefc1001 = opendir(CONS_TMP_PATH . $fe93a43f53d92a4e['id'] . '/'))) {
			goto label771;
		}

		label797:

		if (!(false !== $F48d5724f3b4ec96 = readdir($e23e1b2beefc1001))) {
			goto label783;
		}
		if (!(($F48d5724f3b4ec96 != '.') && ($F48d5724f3b4ec96 != '..'))) {
			goto label781;
		}

		if (in_array($F48d5724f3b4ec96, $d5649ba25d2e07d4)) {
			goto label781;
		}

		goto label773;

		label823:

		$d5649ba25d2e07d4 = [];
		$A1a73957c6feb09a = XUI::e7c45286B27F999B(SERVER_ID, NULL, $fe93a43f53d92a4e['id']);

		foreach ($A1a73957c6feb09a as $f7107e3a92443147 => $c299da94f66c1d36) {
			foreach ($c299da94f66c1d36 as $B4a603c2a57d3acf) {
				$d5649ba25d2e07d4[] = $B4a603c2a57d3acf['uuid'];
			}
		}

		goto label785;

		label846:

		echo 'Stream ID: ' . $fe93a43f53d92a4e['id'] . "\n";
		echo 'Update Stream Information...' . "\n";
		$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = ?, `stream_info` = ?, `audio_codec` = ?, `video_codec` = ?, `resolution` = ?, `compatible` = ? WHERE `stream_id` = ? AND `server_id` = ?', $Bf1105c589a3fe51, json_encode($E9de85a1ad46b96d), $Ea0fade993e4268b, $Dcf2a78a4c7b0c6f, $C98609e3115bee61, $ec173304ea5bcb05, $fe93a43f53d92a4e['id'], SERVER_ID);
		goto label823;

		label869:

		$Ea0fade993e4268b = $E9de85a1ad46b96d['codecs']['audio']['codec_name'] ?: NULL;
		$Dcf2a78a4c7b0c6f = $E9de85a1ad46b96d['codecs']['video']['codec_name'] ?: NULL;
		$C98609e3115bee61 = $E9de85a1ad46b96d['codecs']['video']['height'] ?: NULL;

		if (!$C98609e3115bee61) {
			goto label846;
		}

		$C98609e3115bee61 = XUI::B954BD7C2bEC3C82([240, 360, 480, 576, 720, 1080, 1440, 2160], $C98609e3115bee61);
		goto label846;

		label898:

		if (!file_exists(STREAMS_PATH . $fe93a43f53d92a4e['id'] . '.analyse')) {
			goto label823;
		}

		$E9de85a1ad46b96d = XUI::E57006536cd5655d(STREAMS_PATH . $fe93a43f53d92a4e['id'] . '.analyse');

		if (!$E9de85a1ad46b96d) {
			goto label846;
		}

		$Bf1105c589a3fe51 = $E9de85a1ad46b96d['bitrate'] / 1024;
		$ec173304ea5bcb05 = intval(XUI::d00C33c8075D14a5($E9de85a1ad46b96d));
		goto label869;

		label933:
	}

	label935:

	goto label64;

	label936:
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

goto label28;

label1:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Live Checker]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336b0dAD3eaF634() . __FILE__);
goto label46;

label28:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label39;
}

exit('Please run as XUI!' . "\n");

label39:

if (@$argc) {
	goto label1;
}

exit(0);
goto label1;

label46:

XUI::a3CF732c257BD804($F2db9d2971f5c8c4);
ab8369074df2aaa3();
goto label53;

label53:

?>