<?php


function E5B50A3E1aE37F5f()
{
	goto label1422;

	label1:

	$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
	XUI::$db = &$b62d6460eb33ea07;

	if (in_array($b38e11ffdc6a3abb, XUI::De052f142A92e9bf())) {
		goto label18;
	}

	generateError('API_IP_NOT_ALLOWED');

	label18:

	goto label19;

	label19:

	header('Access-Control-Allow-Origin: *');
	$dabeadfcc3ba1288 = (!empty(XUI::$rRequest['action']) ? XUI::$rRequest['action'] : '');
	$f76e05a7b2c4a341 = false;

	switch ($dabeadfcc3ba1288) {
	case 'view_log':
		goto label110;

		label98:

		goto label106;

		label99:

		echo file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '.errors');

		label106:

		goto label107;

		label107:

		exit();

		label108:

		goto label1456;
		goto label145;

		label110:

		if (empty(XUI::$rRequest['stream_id'])) {
			goto label108;
		}

		$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream_id']);

		if (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '.errors')) {
			goto label99;
		}

		if (!file_exists(VOD_PATH . $ee6d1fc5d801b43f . '.errors')) {
			goto label98;
		}

		echo file_get_contents(VOD_PATH . $ee6d1fc5d801b43f . '.errors');
		goto label98;
	case 'fpm_status':
		label145:

		echo file_get_contents('http://127.0.0.1:' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/status');
		goto label1456;
	case 'reload_epg':
		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'epg.php >/dev/null 2>/dev/null &');
		goto label1456;
	case 'restore_images':
		shell_exec(PHP_BIN . ' ' . INCLUDES_PATH . 'cli/tools.php "images" >/dev/null 2>/dev/null &');
		goto label1456;
	case 'reload_nginx':
		shell_exec(BIN_PATH . 'nginx_rtmp/sbin/nginx_rtmp -s reload');
		shell_exec(BIN_PATH . 'nginx/sbin/nginx -s reload');
		goto label1456;
	case 'streams_ramdisk':
		set_time_limit(30);
		$B9869413eae86beb = [
			'result'  => true,
			'streams' => []
		];
		exec('ls -l ' . STREAMS_PATH, $dd6d6da4a65a40fa);

		foreach ($dd6d6da4a65a40fa as $D6be258a9043b749) {
			$E3665d09b9cea208 = explode(' ', preg_replace('!\\s+!', ' ', $D6be258a9043b749));
			$A34c27f65a0c09e6 = explode('_', $E3665d09b9cea208[count($E3665d09b9cea208) - 1]);

			if (!(count($A34c27f65a0c09e6) == 2)) {
				goto label245;
			}

			$ee6d1fc5d801b43f = intval($A34c27f65a0c09e6[0]);
			$e769a3eadf0d06cc = intval($E3665d09b9cea208[4]);

			if (!((0 < $ee6d1fc5d801b43f) & (0 < $e769a3eadf0d06cc))) {
				goto label245;
			}

			$B9869413eae86beb['streams'][$ee6d1fc5d801b43f] += $e769a3eadf0d06cc;

			label245:
		}

		echo json_encode($B9869413eae86beb);
		exit();
	case 'vod':
		if (!(!empty(XUI::$rRequest['stream_ids']) && !empty(XUI::$rRequest['function']))) {
			goto label321;
		}

		$dec36723d7be7c49 = array_map('intval', XUI::$rRequest['stream_ids']);
		$F0b86a4fb54e0dc2 = XUI::$rRequest['function'];

		switch ($F0b86a4fb54e0dc2) {
		case 'start':
			foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
				XUI::d6cC5a7De37FA642($ee6d1fc5d801b43f, true);
				if (isset(XUI::$rRequest['force']) && XUI::$rRequest['force']) {
					goto label299;
				}

				XUI::queueMovie($ee6d1fc5d801b43f);
				goto label302;

				label299:

				XUI::a0D6DA3165B447b7($ee6d1fc5d801b43f);

				label302:
			}

			echo json_encode(['result' => true]);
			exit();
		case 'stop':
			foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
				XUI::d6cC5a7DE37fA642($ee6d1fc5d801b43f);
			}

			echo json_encode(['result' => true]);
			exit();
		}

		label321:

		goto label1456;
	case 'rtmp_stats':
		echo json_encode(XUI::E5AF2E0e9Ad188b4());
		goto label1456;
	case 'kill_pid':
		$C98e11437faf4199 = intval(XUI::$rRequest['pid']);

		if (0 < $C98e11437faf4199) {
			goto label343;
		}

		echo json_encode(['result' => false]);
		goto label351;

		label343:

		posix_kill($C98e11437faf4199, 9);
		echo json_encode(['result' => true]);

		label351:

		goto label1456;
	case 'rtmp_kill':
		$b7319702635da556 = XUI::$rRequest['name'];
		shell_exec('wget --timeout=2 -O /dev/null -o /dev/null "' . XUI::$rServers[SERVER_ID]['rtmp_mport_url'] . 'control/drop/publisher?app=live&name=' . escapeshellcmd($b7319702635da556) . '" >/dev/null 2>/dev/null &');
		echo json_encode(['result' => true]);
		exit();
	case 'stream':
		if (!(!empty(XUI::$rRequest['stream_ids']) && !empty(XUI::$rRequest['function']))) {
			goto label438;
		}

		$dec36723d7be7c49 = array_map('intval', XUI::$rRequest['stream_ids']);
		$F0b86a4fb54e0dc2 = XUI::$rRequest['function'];

		switch ($F0b86a4fb54e0dc2) {
		case 'start':
			foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
				if (XUI::b820C3eB85eBD48C($ee6d1fc5d801b43f, true)) {
					goto label415;
				}

				echo json_encode(['result' => false]);
				exit();

				label415:

				usleep(50000);
			}

			echo json_encode(['result' => true]);
			exit();
		case 'stop':
			foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
				XUI::Ee173b194544B3A2($ee6d1fc5d801b43f, true);
			}

			echo json_encode(['result' => true]);
			exit();
		}

		label438:

		goto label1456;
	case 'stats':
		echo json_encode(XUI::afF015c358eb0964());
		exit();
	case 'force_stream':
		$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream_id']);
		$c4620a212189e773 = intval(XUI::$rRequest['force_id']);

		if (!(0 < $ee6d1fc5d801b43f)) {
			goto label470;
		}

		file_put_contents(SIGNALS_TMP_PATH . ($ee6d1fc5d801b43f . '.force'), $c4620a212189e773);

		label470:

		exit(json_encode(['result' => true]));
	case 'closeConnection':
		XUI::b0020c716fDF67BB(intval(XUI::$rRequest['activity_id']));
		exit(json_encode(['result' => true]));
	case 'pidsAreRunning':
		if (!(!empty(XUI::$rRequest['pids']) && is_array(XUI::$rRequest['pids']) && !empty(XUI::$rRequest['program']))) {
			goto label561;
		}

		$A480aa67ca5eba71 = array_map('intval', XUI::$rRequest['pids']);
		$Cfca905db9e9531b = XUI::$rRequest['program'];
		$d094d3e133ec8c03 = [];

		foreach ($A480aa67ca5eba71 as $C98e11437faf4199) {
			$d094d3e133ec8c03[$C98e11437faf4199] = false;
			if (!(file_exists('/proc/' . $C98e11437faf4199) && is_readable('/proc/' . $C98e11437faf4199 . '/exe') && (strpos(basename(readlink('/proc/' . $C98e11437faf4199 . '/exe')), basename($Cfca905db9e9531b)) === 0))) {
				goto label554;
			}

			$d094d3e133ec8c03[$C98e11437faf4199] = true;

			label554:
		}

		echo json_encode($d094d3e133ec8c03);
		exit();

		label561:

		goto label1456;
	case 'getFile':
		goto label644;

		label563:
		if (!(($ceb330df8e425c1e < $B93606dc467fa184) || (($A963e07ce47787da - 1) < $B93606dc467fa184) || ($A963e07ce47787da <= $ceb330df8e425c1e))) {
			goto label587;
		}

		header('HTTP/1.1 416 Requested Range Not Satisfiable');
		header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
		exit();

		label587:

		goto label773;

		label588:

		$bcfd61adc96d4b72 = 0;
		$b54a5805c0b9816e = $A963e07ce47787da - 1;
		header('Accept-Ranges: 0-' . $Fc7fdb080dbcd39f);

		if (!isset($_SERVER['HTTP_RANGE'])) {
			goto label603;
		}

		$ceb330df8e425c1e = $b54a5805c0b9816e;
		goto label741;

		label603:

		header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
		header('Content-Length: ' . $Fc7fdb080dbcd39f);

		label616:
		if (!(!feof($B3299684b062e356) && (ftell($B3299684b062e356) <= $b54a5805c0b9816e))) {
			goto label710;
		}

		goto label697;

		label630:

		goto label637;

		label631:

		$B93606dc467fa184 = $A963e07ce47787da - substr($cf397b349f533737, 1);

		label637:

		$ceb330df8e425c1e = ($b54a5805c0b9816e < $ceb330df8e425c1e ? $b54a5805c0b9816e : $ceb330df8e425c1e);
		goto label563;

		label644:

		if (empty(XUI::$rRequest['filename'])) {
			goto label739;
		}

		$F48d5724f3b4ec96 = XUI::$rRequest['filename'];

		if (in_array(strtolower(pathinfo($F48d5724f3b4ec96)['extension']), ['log', 'tar.gz', 'gz', 'zip', 'm3u8', 'mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts', 'srt', 'sub', 'sbv', 'jpg', 'png', 'bmp', 'jpeg', 'gif', 'tif'])) {
			goto label669;
		}

		exit(json_encode(['result' => false, 'error' => 'Invalid file extension.']));

		label669:

		goto label670;

		label670:
		if (!(file_exists($F48d5724f3b4ec96) && is_readable($F48d5724f3b4ec96))) {
			goto label713;
		}

		header('Content-Type: application/octet-stream');
		$B3299684b062e356 = @fopen($F48d5724f3b4ec96, 'rb');
		$A963e07ce47787da = filesize($F48d5724f3b4ec96);
		$Fc7fdb080dbcd39f = $A963e07ce47787da;
		goto label588;

		label697:

		echo stream_get_line($B3299684b062e356, intval(XUI::$rSettings['read_buffer_size']) ?: 8192);
		goto label616;

		label710:

		fclose($B3299684b062e356);

		label713:

		goto label738;

		label714:

		if ($cf397b349f533737 == '-') {
			goto label631;
		}

		$cf397b349f533737 = explode('-', $cf397b349f533737);
		$B93606dc467fa184 = $cf397b349f533737[0];
		$ceb330df8e425c1e = (isset($cf397b349f533737[1]) && is_numeric($cf397b349f533737[1]) ? $cf397b349f533737[1] : $A963e07ce47787da);
		goto label630;

		label738:

		exit();

		label739:

		goto label1456;
		goto label786;

		label741:

		list(, $cf397b349f533737) = explode('=', $_SERVER['HTTP_RANGE'], 2);

		if (!(strpos($cf397b349f533737, ',') !== false)) {
			goto label714;
		}

		header('HTTP/1.1 416 Requested Range Not Satisfiable');
		header('Content-Range: bytes ' . $bcfd61adc96d4b72 . '-' . $b54a5805c0b9816e . '/' . $A963e07ce47787da);
		exit();
		goto label714;

		label773:

		$bcfd61adc96d4b72 = $B93606dc467fa184;
		$b54a5805c0b9816e = $ceb330df8e425c1e;
		$Fc7fdb080dbcd39f = ($b54a5805c0b9816e - $bcfd61adc96d4b72) + 1;
		fseek($B3299684b062e356, $bcfd61adc96d4b72);
		header('HTTP/1.1 206 Partial Content');
		goto label603;
	case 'scandir_recursive':
		label786:

		goto label803;

		label787:

		exec($C6671ac66a4f1c57, $B9869413eae86beb);
		echo json_encode($B9869413eae86beb, JSON_UNESCAPED_UNICODE);
		exit();

		label798:

		exit(json_encode(['result' => false]));
		goto label852;

		label803:

		set_time_limit(30);
		$c13177660204b2bb = urldecode(XUI::$rRequest['dir']);
		$b2fc2ccc466d8a65 = (!empty(XUI::$rRequest['allowed']) ? urldecode(XUI::$rRequest['allowed']) : NULL);

		if (!file_exists($c13177660204b2bb)) {
			goto label798;
		}

		if ($b2fc2ccc466d8a65) {
			goto label840;
		}

		goto label834;

		label834:

		$C6671ac66a4f1c57 = '/usr/bin/find ' . escapeshellarg($c13177660204b2bb);
		goto label851;

		label840:

		$C6671ac66a4f1c57 = '/usr/bin/find ' . escapeshellarg($c13177660204b2bb) . ' -regex ".*\\.\\(' . escapeshellcmd($b2fc2ccc466d8a65) . '\\)"';

		label851:

		goto label787;
	case 'scandir':
		label852:

		goto label853;

		label853:

		set_time_limit(30);
		$c13177660204b2bb = urldecode(XUI::$rRequest['dir']);
		$b2fc2ccc466d8a65 = (!empty(XUI::$rRequest['allowed']) ? explode('|', urldecode(XUI::$rRequest['allowed'])) : []);

		if (!file_exists($c13177660204b2bb)) {
			goto label887;
		}

		$B9869413eae86beb = [
			'result' => true,
			'dirs'   => [],
			'files'  => []
		];
		goto label892;

		label887:

		exit(json_encode(['result' => false]));
		goto label963;

		label892:

		$dd6d6da4a65a40fa = scanDir($c13177660204b2bb);

		foreach ($dd6d6da4a65a40fa as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			goto label901;

			label901:

			if (in_array($ce0840c647e1bbc7, ['.', '..'])) {
				goto label946;
			}

			if (is_dir($c13177660204b2bb . '/' . $ce0840c647e1bbc7)) {
				goto label950;
			}

			$E3f5ab103227acc2 = strtolower(pathinfo($ce0840c647e1bbc7)['extension']);
			if (!((is_array($b2fc2ccc466d8a65) && in_array($E3f5ab103227acc2, $b2fc2ccc466d8a65)) || !$b2fc2ccc466d8a65)) {
				goto label948;
			}

			$B9869413eae86beb['files'][] = $ce0840c647e1bbc7;
			goto label948;

			label946:

			goto label955;

			label948:

			goto label953;

			label950:

			$B9869413eae86beb['dirs'][] = $ce0840c647e1bbc7;

			label953:

			goto label946;

			label955:
		}

		echo json_encode($B9869413eae86beb);
		exit();
		goto label887;
	case 'get_free_space':
		label963:

		exec('df -h', $B9869413eae86beb);
		echo json_encode($B9869413eae86beb);
		exit();
	case 'get_pids':
		exec('ps -e -o user,pid,%cpu,%mem,vsz,rss,tty,stat,time,etime,command', $B9869413eae86beb);
		echo json_encode($B9869413eae86beb);
		exit();
	case 'free_temp':
		exec('rm -rf ' . XUI_HOME . 'tmp/*');
		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'cache.php');
		echo json_encode(['result' => true]);
		goto label1456;
	case 'free_streams':
		exec('rm ' . XUI_HOME . 'content/streams/*');
		echo json_encode(['result' => true]);
		goto label1456;
	case 'signal_send':
		if (!(!empty(XUI::$rRequest['message']) && !empty(XUI::$rRequest['uuid']) && ctype_xdigit(XUI::$rRequest['uuid']))) {
			goto label1041;
		}

		file_put_contents(SIGNALS_PATH . XUI::$rRequest['uuid'], json_encode(XUI::$rRequest));

		label1041:

		goto label1456;
	case 'get_certificate_info':
		echo json_encode(XUI::D6A9d4057776E78d());
		exit();
	case 'watch_force':
		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'watch.php ' . intval(XUI::$rRequest['id']) . ' >/dev/null 2>/dev/null &');
		goto label1456;
	case 'plex_force':
		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'plex.php ' . intval(XUI::$rRequest['id']) . ' >/dev/null 2>/dev/null &');
		goto label1456;
	case 'get_archive_files':
		$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream_id']);
		echo json_encode(['result' => true, 'data' => glob(ARCHIVE_PATH . $ee6d1fc5d801b43f . '/*.ts')]);
		exit();
	case 'request_update':
		goto label1150;

		label1101:

		if (!file_exists($D6be258a9043b749)) {
			goto label1145;
		}

		$Cd8e1820d4075a5c = md5_file($D6be258a9043b749);
		$A7ca171405b19571 = 'http://' . XUI::$rServers[SERVER_ID]['server_ip'] . ':' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/api?password=' . XUI::$rSettings['live_streaming_pass'] . '&action=getFile&filename=' . urlencode($D6be258a9043b749);
		exit(json_encode(['result' => true, 'md5' => $Cd8e1820d4075a5c, 'url' => $A7ca171405b19571, 'version' => XUI::$rServers[SERVER_ID]['xui_version']]));
		goto label1145;

		label1145:

		exit(json_encode(['result' => false]));
		goto label1161;

		label1150:

		if (XUI::$rRequest['type'] == 0) {
			goto label1158;
		}

		$D6be258a9043b749 = PROXY_UPDATE;
		goto label1101;

		label1158:

		$D6be258a9043b749 = LOADBALANCER_UPDATE;
		goto label1101;
	case 'kill_watch':
		label1161:

		goto label1218;

		label1162:

		foreach ($A480aa67ca5eba71 as $a91ff23de10024c2) {
			$C98e11437faf4199 = intval(basename($a91ff23de10024c2, '.wpid'));
			if (!($C98e11437faf4199 && XUI::e764F10e99c26365($C98e11437faf4199, 'php'))) {
				goto label1187;
			}

			shell_exec('kill -9 ' . $C98e11437faf4199);

			label1187:

			unlink($a91ff23de10024c2);
		}

		exit(json_encode(['result' => true]));
		goto label1237;

		label1197:
		if (!($af3fb7e07a56c784 && XUI::E764f10e99c26365($af3fb7e07a56c784, 'php'))) {
			goto label1211;
		}

		shell_exec('kill -9 ' . $af3fb7e07a56c784);

		label1211:

		$A480aa67ca5eba71 = glob(WATCH_TMP_PATH . '*.wpid');
		goto label1162;

		label1218:

		if (file_exists(CACHE_TMP_PATH . 'watch_pid')) {
			goto label1227;
		}

		$af3fb7e07a56c784 = NULL;
		goto label1197;

		label1227:

		$af3fb7e07a56c784 = intval(file_get_contents(CACHE_TMP_PATH . 'watch_pid'));
		goto label1197;
	case 'kill_plex':
		label1237:

		goto label1238;

		label1238:

		if (file_exists(CACHE_TMP_PATH . 'plex_pid')) {
			goto label1247;
		}

		$af3fb7e07a56c784 = NULL;
		goto label1292;

		label1247:

		$af3fb7e07a56c784 = intval(file_get_contents(CACHE_TMP_PATH . 'plex_pid'));
		goto label1292;

		label1257:

		foreach ($A480aa67ca5eba71 as $a91ff23de10024c2) {
			$C98e11437faf4199 = intval(basename($a91ff23de10024c2, '.ppid'));
			if (!($C98e11437faf4199 && XUI::E764F10e99C26365($C98e11437faf4199, 'php'))) {
				goto label1282;
			}

			shell_exec('kill -9 ' . $C98e11437faf4199);

			label1282:

			unlink($a91ff23de10024c2);
		}

		exit(json_encode(['result' => true]));
		goto label1313;

		label1292:
		if (!($af3fb7e07a56c784 && XUI::E764F10E99C26365($af3fb7e07a56c784, 'php'))) {
			goto label1306;
		}

		shell_exec('kill -9 ' . $af3fb7e07a56c784);

		label1306:

		$A480aa67ca5eba71 = glob(WATCH_TMP_PATH . '*.ppid');
		goto label1257;
	case 'probe':
		label1313:

		goto label1336;

		label1314:

		if (!XUI::$rRequest['http_proxy']) {
			goto label1330;
		}

		$de11de6855c66abb[] = sprintf('-http_proxy \'%s\'', escapeshellcmd(XUI::$rRequest['http_proxy']));

		label1330:

		if (!XUI::$rRequest['cookies']) {
			goto label1375;
		}

		goto label1364;

		label1336:

		if (empty(XUI::$rRequest['url'])) {
			goto label1412;
		}

		$A7ca171405b19571 = escapeshellcmd(XUI::$rRequest['url']);
		$de11de6855c66abb = [];

		if (!XUI::$rRequest['user_agent']) {
			goto label1314;
		}

		$de11de6855c66abb[] = sprintf('-user_agent \'%s\'', escapeshellcmd(XUI::$rRequest['user_agent']));
		goto label1314;

		label1364:

		$de11de6855c66abb[] = sprintf('-cookies \'%s\'', escapeshellcmd(XUI::$rRequest['cookies']));

		label1375:

		$df59d69b3ccd0f39 = (XUI::$rRequest['headers'] ? rtrim(XUI::$rRequest['headers'], "\r\n") . "\r\n" : '');
		$df59d69b3ccd0f39 .= 'X-XUI-Prebuffer:1' . "\r\n";
		$de11de6855c66abb[] = sprintf('-headers %s', escapeshellarg($df59d69b3ccd0f39));
		goto label1400;

		label1400:

		exit(json_encode(['result' => true, 'data' => XUI::e57006536Cd5655D($A7ca171405b19571, $de11de6855c66abb, '', false)]));

		label1412:

		exit(json_encode(['result' => false]));
		goto label1417;
	default:
	}

	label1417:

	exit(json_encode(['result' => false]));
	goto label1456;

	label1422:

	global $f76e05a7b2c4a341;

	if (empty(XUI::$rRequest['status'])) {
		goto label1438;
	}

	if (!($b9f049445aa9bd5d = Xui\Functions::checkStatus(XUI::$rRequest['data']))) {
		goto label1437;
	}

	exit($b9f049445aa9bd5d);

	label1437:

	goto label1438;

	label1438:
	if (!(empty(XUI::$rRequest['password']) || (XUI::$rRequest['password'] != XUI::$rSettings['live_streaming_pass']))) {
		goto label1453;
	}

	generateError('INVALID_API_PASSWORD');

	label1453:

	unset(XUI::$rRequest['password']);
	goto label1;

	label1456:

	goto label1457;

	label1457:
}

function shutdown()
{
	global $b62d6460eb33ea07;
	global $f76e05a7b2c4a341;

	if (!$f76e05a7b2c4a341) {
		goto label7;
	}

	XUI::AEEa5D3137274F80();

	label7:

	if (!is_object($b62d6460eb33ea07)) {
		goto label15;
	}

	$b62d6460eb33ea07->close_mysql();

	label15:
}

register_shutdown_function('shutdown');
set_time_limit(0);
require 'init.php';
$f76e05a7b2c4a341 = true;
e5b50a3e1ae37f5f();

?>