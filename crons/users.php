<?php


function processDeletions($B575e4db9840f393, $D8ff8abc17944d44 = [])
{
	goto label188;

	label3:

	foreach ($B575e4db9840f393['proxy'] as $Bdf1a4d575de41e8 => $d5649ba25d2e07d4) {
		$ed6449291d7f1a64->zRem('PROXY#' . $Bdf1a4d575de41e8, ...$d5649ba25d2e07d4);
	}

	if (!(0 < count($B575e4db9840f393['uuid']))) {
		goto label44;
	}

	$ed6449291d7f1a64->zRem('CONNECTIONS', ...$B575e4db9840f393['uuid']);
	$ed6449291d7f1a64->zRem('LIVE', ...$B575e4db9840f393['uuid']);
	goto label35;

	label34:

	goto label219;

	label35:

	$ed6449291d7f1a64->sRem('ENDED', ...$B575e4db9840f393['uuid']);
	$ed6449291d7f1a64->del(...$B575e4db9840f393['uuid']);

	label44:

	$ed6449291d7f1a64->exec();

	label46:

	goto label115;

	label47:

	foreach ($B575e4db9840f393['stream'] as $ee6d1fc5d801b43f => $d5649ba25d2e07d4) {
		$ed6449291d7f1a64->zRem('STREAM#' . $ee6d1fc5d801b43f, ...$d5649ba25d2e07d4);
	}

	foreach ($B575e4db9840f393['server'] as $C082ca9ed03f473c => $d5649ba25d2e07d4) {
		$ed6449291d7f1a64->zRem('SERVER#' . $C082ca9ed03f473c, ...$d5649ba25d2e07d4);
		$ed6449291d7f1a64->zRem('SERVER_LINES#' . $C082ca9ed03f473c, ...$d5649ba25d2e07d4);
	}

	goto label3;

	label78:

	goto label115;

	label79:

	if (!(0 < $B575e4db9840f393['count'])) {
		goto label46;
	}

	$ed6449291d7f1a64 = XUI::$redis->multi();

	foreach ($B575e4db9840f393['line'] as $f7107e3a92443147 => $d5649ba25d2e07d4) {
		$ed6449291d7f1a64->zRem('LINE#' . $f7107e3a92443147, ...$d5649ba25d2e07d4);
		$ed6449291d7f1a64->zRem('LINE_ALL#' . $f7107e3a92443147, ...$d5649ba25d2e07d4);
	}

	goto label47;

	label107:

	if (XUI::$rSettings['redis_handler']) {
		goto label113;
	}

	return [];
	goto label34;

	label113:

	return [
		'line'         => [],
		'server'       => [],
		'server_lines' => [],
		'proxy'        => [],
		'stream'       => [],
		'uuid'         => [],
		'count'        => 0
	];
	goto label34;

	label115:

	foreach (XUI::$rSettings['redis_handler'] ? $B575e4db9840f393['server'] : $B575e4db9840f393 as $C082ca9ed03f473c => $A1a73957c6feb09a) {
		if (!($C082ca9ed03f473c != SERVER_ID)) {
			goto label167;
		}

		$B91645b8411dc88c = '';

		foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
			$B91645b8411dc88c .= '(' . $C082ca9ed03f473c . ',1,' . $Ab13f2545dd3df14 . ',' . $b62d6460eb33ea07->escape(json_encode(['type' => 'delete_con', 'uuid' => $Fd10d59f87b19e71])) . '),';
		}

		$B91645b8411dc88c = rtrim($B91645b8411dc88c, ',');

		if (empty($B91645b8411dc88c)) {
			goto label167;
		}

		$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES ' . $B91645b8411dc88c . ';');

		label167:
	}

	foreach ($D8ff8abc17944d44 as $ee6d1fc5d801b43f => $A1a73957c6feb09a) {
		foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
			@unlink(CONS_TMP_PATH . $ee6d1fc5d801b43f . '/' . $Fd10d59f87b19e71);
		}
	}

	goto label107;

	label188:

	global $b62d6460eb33ea07;
	$Ab13f2545dd3df14 = time();

	if (XUI::$rSettings['redis_handler']) {
		goto label79;
	}

	foreach ($B575e4db9840f393 as $C082ca9ed03f473c => $A1a73957c6feb09a) {
		if (!(0 < count($A1a73957c6feb09a))) {
			goto label216;
		}

		$b62d6460eb33ea07->query('DELETE FROM `lines_live` WHERE `uuid` IN (\'' . implode('\',\'', $A1a73957c6feb09a) . '\')');

		label216:
	}

	goto label78;

	label219:
}

function AB8369074Df2aaA3()
{
	goto label131;

	label1:

	if (!(0 < count($E168155b71278f7e))) {
		goto label19;
	}

	$B8eefa080a77380f = implode(',', $E168155b71278f7e);
	$b62d6460eb33ea07->query('INSERT INTO `lines_divergence`(`uuid`,`divergence`) VALUES ' . $B8eefa080a77380f . ' ON DUPLICATE KEY UPDATE `divergence`=VALUES(`divergence`);');

	label19:

	goto label1152;

	label20:

	goto label1067;

	label21:

	$b42f717d234fde64 = $D0151557c4eb49dd = [];
	$b62d6460eb33ea07->query('SELECT `stream_id`, `bitrate` FROM `streams_servers` WHERE `server_id` = ? AND `bitrate` IS NOT NULL;', SERVER_ID);
	goto label269;

	label29:
	if (XUI::$rSettings['redis_handler'] && (0 < $A90e7869eacbfcdd['count'])) {
		goto label1080;
	}
	if (!(!XUI::$rSettings['redis_handler'] && (0 < count($B575e4db9840f393)))) {
		goto label53;
	}

	processdeletions($B575e4db9840f393, $dad45cb1704cdea6);

	label53:

	goto label1085;
	goto label1080;

	label55:

	goto label1097;

	label56:

	unset($A1a73957c6feb09a);

	label57:

	$de087005c7d6222d = $D0e37626bb210a75 = [];
	goto label60;

	label60:

	$ec80784a08a705f6 = XUI::confirmIDs(array_keys($d7bd0890458933bb));

	if (!(0 < count($ec80784a08a705f6))) {
		goto label158;
	}

	$b62d6460eb33ea07->query('SELECT `id`, `max_connections`, `is_restreamer` FROM `lines` WHERE `id` IN (' . implode(',', $ec80784a08a705f6) . ');');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$D0e37626bb210a75[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['max_connections'];
		$de087005c7d6222d[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['is_restreamer'];
	}

	goto label158;

	label98:

	if (!(0 < count($Fbaaadca22b5c4a0))) {
		goto label1024;
	}

	if (XUI::$rSettings['redis_handler']) {
		goto label21;
	}

	$D0151557c4eb49dd = [];
	$b62d6460eb33ea07->query('SELECT `lines_live`.`uuid`, `streams_servers`.`bitrate` FROM `lines_live` LEFT JOIN `streams_servers` ON `lines_live`.`stream_id` = `streams_servers`.`stream_id` AND `lines_live`.`server_id` = `streams_servers`.`server_id` WHERE `lines_live`.`server_id` = ?;', SERVER_ID);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$D0151557c4eb49dd[$Fb9da1713bff19ce['uuid']] = intval(($Fb9da1713bff19ce['bitrate'] / 8) * 0.92);
	}

	goto label20;

	label131:

	global $b62d6460eb33ea07;
	global $daca82e98f511305;

	if (!XUI::$rSettings['redis_handler']) {
		goto label140;
	}

	XUI::d6AEB3175A43f301();

	label140:

	$F56066ad7b074468 = time();
	goto label1104;

	label144:

	if (is_array($Fd10d59f87b19e71)) {
		goto label157;
	}

	$A90e7869eacbfcdd['count']++;
	$A90e7869eacbfcdd['uuid'][] = $ca8155fd3c07c1ee[$df6991d59f367c7e];
	goto label1064;

	label157:

	goto label1057;

	label158:
	if (!(XUI::$rSettings['redis_handler'] && XUI::$rServers[SERVER_ID]['is_main'])) {
		goto label311;
	}

	foreach (XUI::getEnded() as $Fd10d59f87b19e71) {
		goto label217;

		label175:

		$A90e7869eacbfcdd['count']++;
		$A90e7869eacbfcdd['line'][$Fd10d59f87b19e71['identity']][] = $Fd10d59f87b19e71['uuid'];
		$A90e7869eacbfcdd['stream'][$Fd10d59f87b19e71['stream_id']][] = $Fd10d59f87b19e71['uuid'];
		$A90e7869eacbfcdd['server'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
		$A90e7869eacbfcdd['uuid'][] = $Fd10d59f87b19e71['uuid'];
		goto label204;

		label202:

		goto label261;

		label204:

		if (!$Fd10d59f87b19e71['proxy_id']) {
			goto label215;
		}

		$A90e7869eacbfcdd['proxy'][$Fd10d59f87b19e71['proxy_id']][] = $Fd10d59f87b19e71['uuid'];

		label215:

		goto label202;

		label217:

		if (!is_array($Fd10d59f87b19e71)) {
			goto label215;
		}
		if (!in_array($Fd10d59f87b19e71['container'], ['ts', 'hls', 'rtmp']) && ((time() - $Fd10d59f87b19e71['hls_last_read']) < 300)) {
			goto label243;
		}

		$a7126e848020c09d = true;
		goto label246;

		label243:

		goto label245;

		label245:

		$a7126e848020c09d = false;

		label246:

		if (!$a7126e848020c09d) {
			goto label215;
		}

		echo 'Close connection: ' . $Fd10d59f87b19e71['uuid'] . "\n";
		XUI::b0020C716fDF67bB($Fd10d59f87b19e71, false, false);
		goto label175;

		label261:
	}

	if (!(1000 <= $A90e7869eacbfcdd['count'])) {
		goto label311;
	}

	goto label305;

	label269:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b42f717d234fde64[intval($Fb9da1713bff19ce['stream_id'])] = intval(($Fb9da1713bff19ce['bitrate'] / 8) * 0.92);
	}

	$d5649ba25d2e07d4 = [];

	foreach ($Fbaaadca22b5c4a0 as $c10af368bfcdcfb4) {
		if (!empty($c10af368bfcdcfb4)) {
			goto label297;
		}

		goto label302;

		label297:

		$d5649ba25d2e07d4[] = basename($c10af368bfcdcfb4);

		label302:
	}

	goto label1182;

	label305:

	$A90e7869eacbfcdd = processdeletions($A90e7869eacbfcdd, $A90e7869eacbfcdd['stream']);

	label311:

	foreach ($d7bd0890458933bb as $f7107e3a92443147 => $A1a73957c6feb09a) {
		goto label485;

		label316:
		if (!(XUI::$rServers[SERVER_ID]['is_main'] && (0 < $A9c066cee616f400) && ($A9c066cee616f400 < $fc63d3a60e073dd2))) {
			goto label444;
		}

		foreach ($A1a73957c6feb09a as $Bb672d1983256a93 => $Fd10d59f87b19e71) {
			goto label378;

			label336:

			if (!$Fd10d59f87b19e71['proxy_id']) {
				goto label348;
			}

			$A90e7869eacbfcdd['proxy'][$Fd10d59f87b19e71['proxy_id']][] = $Fd10d59f87b19e71['uuid'];

			label348:

			$fc63d3a60e073dd2--;
			goto label430;

			label353:

			$A90e7869eacbfcdd['server'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['uuid'][] = $Fd10d59f87b19e71['uuid'];

			if (!$Fd10d59f87b19e71['user_id']) {
				goto label375;
			}

			$A90e7869eacbfcdd['server_lines'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];

			label375:

			goto label336;

			label378:

			if ($Fd10d59f87b19e71['hls_end']) {
				goto label430;
			}

			echo 'Close connection: ' . $Fd10d59f87b19e71['uuid'] . "\n";
			XUI::b0020C716FDf67bB($Fd10d59f87b19e71, false, false);

			if (XUI::$rSettings['redis_handler']) {
				goto label412;
			}

			$dad45cb1704cdea6[$Fd10d59f87b19e71['stream_id']] = $B575e4db9840f393[$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label409;

			label409:

			goto label348;

			label412:

			$A90e7869eacbfcdd['count']++;
			$A90e7869eacbfcdd['line'][$Fd10d59f87b19e71['identity']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['stream'][$Fd10d59f87b19e71['stream_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label353;

			label430:

			if (!($fc63d3a60e073dd2 <= $A9c066cee616f400)) {
				goto label439;
			}

			goto label444;

			label439:

			goto label442;

			label442:
		}

		label444:
		if (XUI::$rSettings['redis_handler'] && (1000 <= $A90e7869eacbfcdd['count'])) {
			goto label475;
		}

		goto label455;

		label455:
		if (!(!XUI::$rSettings['redis_handler'] && (1000 <= count($B575e4db9840f393)))) {
			goto label473;
		}

		$B575e4db9840f393 = processdeletions($B575e4db9840f393, $dad45cb1704cdea6);

		label473:

		goto label483;

		label475:

		goto label477;

		label477:

		$A90e7869eacbfcdd = processdeletions($A90e7869eacbfcdd, $A90e7869eacbfcdd['stream']);

		label483:

		goto label1021;

		label485:

		$fc63d3a60e073dd2 = 0;
		$A9c066cee616f400 = $D0e37626bb210a75[$f7107e3a92443147];
		$b2947ecd187f362d = $de087005c7d6222d[$f7107e3a92443147] ?: false;

		foreach ($A1a73957c6feb09a as $Bb672d1983256a93 => $Fd10d59f87b19e71) {
			goto label796;

			label498:

			$C883fbfac782fb30 = XUI::E764F10e99C26365($Fd10d59f87b19e71['pid'], 'php-fpm');

			label504:
			if (!((($Fd10d59f87b19e71['hls_end'] == 1) && (300 <= $F56066ad7b074468 - $Fd10d59f87b19e71['hls_last_read'])) || !$C883fbfac782fb30)) {
				goto label555;
			}

			echo 'Close connection: ' . $Fd10d59f87b19e71['uuid'] . "\n";
			XUI::b0020C716fDF67bb($Fd10d59f87b19e71, false, false);
			goto label994;

			label531:

			$A90e7869eacbfcdd['server_lines'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];

			label537:

			if (!$Fd10d59f87b19e71['proxy_id']) {
				goto label549;
			}

			$A90e7869eacbfcdd['proxy'][$Fd10d59f87b19e71['proxy_id']][] = $Fd10d59f87b19e71['uuid'];

			label549:

			goto label552;

			label552:

			goto label776;

			label555:

			goto label696;
			goto label623;

			label561:

			$A90e7869eacbfcdd['stream'][$Fd10d59f87b19e71['stream_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['server'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['uuid'][] = $Fd10d59f87b19e71['uuid'];

			if (!$Fd10d59f87b19e71['user_id']) {
				goto label880;
			}

			$A90e7869eacbfcdd['server_lines'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label880;

			label592:

			$A90e7869eacbfcdd['stream'][$Fd10d59f87b19e71['stream_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['server'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['uuid'][] = $Fd10d59f87b19e71['uuid'];

			if (!$Fd10d59f87b19e71['user_id']) {
				goto label865;
			}

			$A90e7869eacbfcdd['server_lines'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label865;

			label623:
			if (!((30 <= $F56066ad7b074468 - $Fd10d59f87b19e71['hls_last_read']) || ($Fd10d59f87b19e71['hls_end'] == 1))) {
				goto label696;
			}

			echo 'Close connection: ' . $Fd10d59f87b19e71['uuid'] . "\n";
			XUI::b0020C716fdf67Bb($Fd10d59f87b19e71, false, false);

			if (XUI::$rSettings['redis_handler']) {
				goto label934;
			}

			goto label923;

			label653:

			if (!($Fd10d59f87b19e71['container'] != 'rtmp')) {
				goto label555;
			}

			if ($Fd10d59f87b19e71['server_id'] == SERVER_ID) {
				goto label793;
			}
			if (($Fd10d59f87b19e71['date_start'] <= XUI::$rServers[$Fd10d59f87b19e71['server_id']]['last_check_ago'] - 1) && (0 < count($daca82e98f511305[$Fd10d59f87b19e71['server_id']]))) {
				goto label779;
			}

			$C883fbfac782fb30 = true;
			goto label790;
			goto label779;

			label693:

			goto label776;

			label696:

			if ($Fd10d59f87b19e71['hls_end']) {
				goto label776;
			}

			goto label774;

			label704:

			goto label776;

			label707:

			if ($Fd10d59f87b19e71['container'] == 'hls') {
				goto label623;
			}

			goto label653;

			label716:

			if (!$Fd10d59f87b19e71['user_id']) {
				goto label728;
			}

			$A90e7869eacbfcdd['server_lines'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];

			label728:

			if (!$Fd10d59f87b19e71['proxy_id']) {
				goto label704;
			}

			$A90e7869eacbfcdd['proxy'][$Fd10d59f87b19e71['proxy_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label704;

			label743:

			$A90e7869eacbfcdd['line'][$Fd10d59f87b19e71['identity']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['stream'][$Fd10d59f87b19e71['stream_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['server'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['uuid'][] = $Fd10d59f87b19e71['uuid'];

			if (!$Fd10d59f87b19e71['user_id']) {
				goto label537;
			}

			goto label531;

			label774:

			$fc63d3a60e073dd2++;

			label776:

			goto label1017;

			label779:

			$C883fbfac782fb30 = in_array(intval($Fd10d59f87b19e71['pid']), $daca82e98f511305[$Fd10d59f87b19e71['server_id']]);

			label790:

			goto label504;

			label793:

			goto label498;

			label796:
			if (!(($Fd10d59f87b19e71['server_id'] == SERVER_ID) || XUI::$rSettings['redis_handler'])) {
				goto label696;
			}
			if (!(!is_null($Fd10d59f87b19e71['exp_date']) && ($Fd10d59f87b19e71['exp_date'] < $F56066ad7b074468))) {
				goto label843;
			}

			echo 'Close connection: ' . $Fd10d59f87b19e71['uuid'] . "\n";
			XUI::B0020C716FDF67bB($Fd10d59f87b19e71, false, false);

			if (XUI::$rSettings['redis_handler']) {
				goto label957;
			}

			goto label946;

			label840:

			goto label776;

			label843:

			$D03c6419bc41f7d2 = $F56066ad7b074468 - $Fd10d59f87b19e71['date_start'];
			if (!(($b2a42271e26122d9 != 0) && ($b2a42271e26122d9 <= $D03c6419bc41f7d2) && !$b2947ecd187f362d)) {
				goto label707;
			}

			echo 'Close connection: ' . $Fd10d59f87b19e71['uuid'] . "\n";
			goto label969;

			label865:

			if (!$Fd10d59f87b19e71['proxy_id']) {
				goto label877;
			}

			$A90e7869eacbfcdd['proxy'][$Fd10d59f87b19e71['proxy_id']][] = $Fd10d59f87b19e71['uuid'];

			label877:

			goto label693;

			label880:

			if (!$Fd10d59f87b19e71['proxy_id']) {
				goto label892;
			}

			$A90e7869eacbfcdd['proxy'][$Fd10d59f87b19e71['proxy_id']][] = $Fd10d59f87b19e71['uuid'];

			label892:

			goto label840;

			label895:

			$A90e7869eacbfcdd['count']++;
			$A90e7869eacbfcdd['line'][$Fd10d59f87b19e71['identity']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['stream'][$Fd10d59f87b19e71['stream_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['server'][$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			$A90e7869eacbfcdd['uuid'][] = $Fd10d59f87b19e71['uuid'];
			goto label716;

			label923:

			$dad45cb1704cdea6[$Fd10d59f87b19e71['stream_id']] = $B575e4db9840f393[$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label877;

			label934:

			$A90e7869eacbfcdd['count']++;
			$A90e7869eacbfcdd['line'][$Fd10d59f87b19e71['identity']][] = $Fd10d59f87b19e71['uuid'];
			goto label592;

			label946:

			$dad45cb1704cdea6[$Fd10d59f87b19e71['stream_id']] = $B575e4db9840f393[$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label892;

			label957:

			$A90e7869eacbfcdd['count']++;
			$A90e7869eacbfcdd['line'][$Fd10d59f87b19e71['identity']][] = $Fd10d59f87b19e71['uuid'];
			goto label561;

			label969:

			XUI::B0020c716FdF67bB($Fd10d59f87b19e71, false, false);

			if (XUI::$rSettings['redis_handler']) {
				goto label991;
			}

			$dad45cb1704cdea6[$Fd10d59f87b19e71['stream_id']] = $B575e4db9840f393[$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label704;

			label991:

			goto label895;

			label994:

			if (XUI::$rSettings['redis_handler']) {
				goto label1011;
			}

			$dad45cb1704cdea6[$Fd10d59f87b19e71['stream_id']] = $B575e4db9840f393[$Fd10d59f87b19e71['server_id']][] = $Fd10d59f87b19e71['uuid'];
			goto label552;

			label1011:

			$A90e7869eacbfcdd['count']++;
			goto label743;

			label1017:
		}

		goto label316;

		label1021:
	}

	goto label29;

	label1024:

	if (!XUI::$rServers[SERVER_ID]['is_main']) {
		goto label1049;
	}

	if (XUI::$rSettings['redis_handler']) {
		goto label1040;
	}

	$b62d6460eb33ea07->query('DELETE FROM `lines_divergence` WHERE `uuid` NOT IN (SELECT `uuid` FROM `lines_live`);');
	goto label1049;
	goto label1040;

	label1040:

	$b62d6460eb33ea07->query('DELETE FROM `lines_divergence` WHERE `uuid` NOT IN (\'' . implode('\',\'', $afbaa4af19b6108e) . '\');');

	label1049:

	if (!XUI::$rServers[SERVER_ID]['is_main']) {
		goto label1079;
	}

	goto label1076;

	label1057:

	$d7bd0890458933bb[$Fd10d59f87b19e71['identity']][] = $Fd10d59f87b19e71;
	$afbaa4af19b6108e[] = $Fd10d59f87b19e71['uuid'];

	label1064:

	++$df6991d59f367c7e;
	goto label55;

	label1066:

	unset($b42f717d234fde64);

	label1067:

	if (XUI::$rSettings['redis_handler']) {
		goto label1228;
	}

	$e440a09270b566be = [];
	$b62d6460eb33ea07->query('SELECT `uuid`, `activity_id` FROM `lines_live`;');
	goto label1218;

	label1076:

	$b62d6460eb33ea07->query('DELETE FROM `lines_live` WHERE `uuid` IS NULL;');

	label1079:

	goto label1305;

	label1080:

	processdeletions($A90e7869eacbfcdd, $A90e7869eacbfcdd['stream']);

	label1085:

	$Fbaaadca22b5c4a0 = glob(DIVERGENCE_TMP_PATH . '*');
	goto label98;

	label1092:

	$df6991d59f367c7e = 0;
	$A963e07ce47787da = count($A1a73957c6feb09a);

	label1097:

	if (!($df6991d59f367c7e < $A963e07ce47787da)) {
		goto label56;
	}

	$Fd10d59f87b19e71 = $A1a73957c6feb09a[$df6991d59f367c7e];
	goto label144;

	label1104:
	if (!(!XUI::$rSettings['redis_handler'] || XUI::$rServers[SERVER_ID]['is_main'])) {
		goto label1085;
	}

	$b2a42271e26122d9 = XUI::$rSettings['user_auto_kick_hours'] * 3600;
	$afbaa4af19b6108e = $B575e4db9840f393 = $dad45cb1704cdea6 = [];

	if (XUI::$rSettings['redis_handler']) {
		goto label1142;
	}

	$d7bd0890458933bb = XUI::E7C45286b27f999B(XUI::$rServers[SERVER_ID]['is_main'] ? NULL : SERVER_ID);
	goto label1141;

	label1141:

	goto label57;

	label1142:

	$A90e7869eacbfcdd = [
		'line'         => [],
		'server'       => [],
		'server_lines' => [],
		'proxy'        => [],
		'stream'       => [],
		'uuid'         => [],
		'count'        => 0
	];
	$d7bd0890458933bb = [];
	list($ca8155fd3c07c1ee, $A1a73957c6feb09a) = XUI::e7C45286b27F999b();
	goto label1092;

	label1152:
	if (!(!XUI::$rSettings['redis_handler'] && (0 < count($ed60e358f071d03c)))) {
		goto label1175;
	}

	$ed60e358f071d03c = implode(',', $ed60e358f071d03c);
	$b62d6460eb33ea07->query('INSERT INTO `lines_live`(`activity_id`,`divergence`) VALUES ' . $ed60e358f071d03c . ' ON DUPLICATE KEY UPDATE `divergence`=VALUES(`divergence`);');

	label1175:

	shell_exec('rm -f ' . DIVERGENCE_TMP_PATH . '*');
	goto label1024;

	label1182:

	if (!(0 < count($d5649ba25d2e07d4))) {
		goto label1217;
	}

	$A1a73957c6feb09a = array_map('igbinary_unserialize', XUI::$redis->mGet($d5649ba25d2e07d4));

	foreach ($A1a73957c6feb09a as $Fd10d59f87b19e71) {
		if (!is_array($Fd10d59f87b19e71)) {
			goto label1215;
		}

		$D0151557c4eb49dd[$Fd10d59f87b19e71['uuid']] = $b42f717d234fde64[intval($Fd10d59f87b19e71['stream_id'])];

		label1215:
	}

	label1217:

	goto label1066;

	label1218:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$e440a09270b566be[$Fb9da1713bff19ce['uuid']] = $Fb9da1713bff19ce['activity_id'];
	}

	label1228:

	$ed60e358f071d03c = $E168155b71278f7e = [];

	foreach ($Fbaaadca22b5c4a0 as $c10af368bfcdcfb4) {
		goto label1282;

		label1234:

		$af895dada1de7cb4 = intval((($Cbfc0cb1d7e2f2ca - $D0151557c4eb49dd[$c6407c71209d9290]) / $D0151557c4eb49dd[$c6407c71209d9290]) * 100);

		if (!(0 < $af895dada1de7cb4)) {
			goto label1249;
		}

		$af895dada1de7cb4 = 0;

		label1249:

		$E168155b71278f7e[] = '(\'' . $c6407c71209d9290 . '\', ' . abs($af895dada1de7cb4) . ')';
		goto label1260;

		label1260:
		if (!(!XUI::$rSettings['redis_handler'] && isset($e440a09270b566be[$c6407c71209d9290]))) {
			goto label1280;
		}

		$ed60e358f071d03c[] = '(' . $e440a09270b566be[$c6407c71209d9290] . ', ' . abs($af895dada1de7cb4) . ')';

		label1280:

		goto label1302;

		label1282:

		if (!empty($c10af368bfcdcfb4)) {
			goto label1289;
		}

		goto label1280;

		label1289:

		$c6407c71209d9290 = basename($c10af368bfcdcfb4);
		$Cbfc0cb1d7e2f2ca = intval(file_get_contents($c10af368bfcdcfb4));
		goto label1234;

		label1302:
	}

	goto label1;

	label1305:
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

goto label326;

label1:

if (@$argc) {
	goto label7;
}

exit(0);

label7:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
goto label66;

label22:

XUI::d6aeB3175a43F301();

if (is_object(XUI::$redis)) {
	goto label31;
}

exit('Couldn\'t connect to Redis.' . "\n");

label31:

$Ba90f6e2230cba27 = intval($argv[1]);
goto label345;

label37:

$b62d6460eb33ea07->query('SELECT `stream_id`, `server_id`, `on_demand` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Cc9b6078c1293a96[$Fb9da1713bff19ce['stream_id']][$Fb9da1713bff19ce['server_id']] = intval($Fb9da1713bff19ce['on_demand']);
}

label61:

$ed6449291d7f1a64 = XUI::$redis->multi();
goto label168;

label66:

cli_set_process_title('XUI[Users]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336B0daD3eaF634() . __FILE__);
XUI::a3CF732c257Bd804($F2db9d2971f5c8c4);
$Ba90f6e2230cba27 = NULL;
if (!((count($argv) == 2) && XUI::$rServers[SERVER_ID]['is_main'])) {
	goto label122;
}

goto label22;

label96:

XUI::$rServers = XUI::F76008f8Dfe1898C(true);
$daca82e98f511305 = [];

foreach (XUI::$rServers as $Ec379295dc7029e6) {
	$daca82e98f511305[$Ec379295dc7029e6['id']] = array_map('intval', json_decode($Ec379295dc7029e6['php_pids'], true)) ?: [];
}

label121:

goto label367;

label122:
if (!(XUI::$rSettings['redis_handler'] && XUI::$rServers[SERVER_ID]['is_main'])) {
	goto label121;
}

goto label96;

label134:

$dec36723d7be7c49 = [];

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	if (!(!in_array($Fb9da1713bff19ce['stream_id'], $dec36723d7be7c49) && (0 < $Fb9da1713bff19ce['stream_id']))) {
		goto label157;
	}

	$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);

	label157:
}

$Cc9b6078c1293a96 = [];

if (!(0 < count($dec36723d7be7c49))) {
	goto label61;
}

goto label37;

label168:

foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
	goto label273;

	label172:

	if (!$Fb9da1713bff19ce['proxy_id']) {
		goto label187;
	}

	$ed6449291d7f1a64->zAdd('PROXY#' . $Fb9da1713bff19ce['proxy_id'], $Fb9da1713bff19ce['date_start'], $Fb9da1713bff19ce['uuid']);

	label187:

	$ed6449291d7f1a64->zAdd('CONNECTIONS', $Fb9da1713bff19ce['date_start'], $Fb9da1713bff19ce['uuid']);
	$ed6449291d7f1a64->zAdd('LIVE', $Fb9da1713bff19ce['date_start'], $Fb9da1713bff19ce['uuid']);
	goto label292;

	label203:

	$ed6449291d7f1a64->zAdd('STREAM#' . $Fb9da1713bff19ce['stream_id'], $Fb9da1713bff19ce['date_start'], $Fb9da1713bff19ce['uuid']);
	$ed6449291d7f1a64->zAdd('SERVER#' . $Fb9da1713bff19ce['server_id'], $Fb9da1713bff19ce['date_start'], $Fb9da1713bff19ce['uuid']);

	if (!$Fb9da1713bff19ce['user_id']) {
		goto label238;
	}

	$ed6449291d7f1a64->zAdd('SERVER_LINES#' . $Fb9da1713bff19ce['server_id'], $Fb9da1713bff19ce['user_id'], $Fb9da1713bff19ce['uuid']);

	label238:

	goto label172;

	label240:

	$Fb9da1713bff19ce['identity'] = $Fb9da1713bff19ce['user_id'];

	label243:

	$Fb9da1713bff19ce['on_demand'] = $Cc9b6078c1293a96[$Fb9da1713bff19ce['stream_id']][$Fb9da1713bff19ce['server_id']] ?: 0;
	$ed6449291d7f1a64->zAdd('LINE#' . $Fb9da1713bff19ce['identity'], $Fb9da1713bff19ce['date_start'], $Fb9da1713bff19ce['uuid']);
	$ed6449291d7f1a64->zAdd('LINE_ALL#' . $Fb9da1713bff19ce['identity'], $Fb9da1713bff19ce['date_start'], $Fb9da1713bff19ce['uuid']);
	goto label203;

	label273:

	echo 'Resynchronising UUID: ' . $Fb9da1713bff19ce['uuid'] . "\n";

	if (empty($Fb9da1713bff19ce['hmac_id'])) {
		goto label290;
	}

	$Fb9da1713bff19ce['identity'] = $Fb9da1713bff19ce['hmac_id'] . '_' . $Fb9da1713bff19ce['hmac_identifier'];
	goto label243;

	label290:

	goto label240;

	label292:

	$ed6449291d7f1a64->set($Fb9da1713bff19ce['uuid'], igbinary_serialize($Fb9da1713bff19ce));
	$F33157719fe11fda[] = $Fb9da1713bff19ce['uuid'];
	goto label305;

	label305:
}

$ed6449291d7f1a64->exec();

if (!(0 < count($F33157719fe11fda))) {
	goto label122;
}

$b62d6460eb33ea07->query('DELETE FROM `lines_live` WHERE `uuid` IN (\'' . implode('\',\'', $F33157719fe11fda) . '\');');
goto label122;

label326:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label337;
}

exit('Please run as XUI!' . "\n");

label337:

set_time_limit(0);
ini_set('memory_limit', -1);
goto label1;

label345:

if (!($Ba90f6e2230cba27 == 1)) {
	goto label122;
}

$F33157719fe11fda = $B97c3a0dd93e08fd = $A4d262620b37c91e = $De88931a52fe8f84 = [];
$b62d6460eb33ea07->query('SELECT * FROM `lines_live` WHERE `hls_end` = 0;');
$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

if (!(0 < count($D8e7681dfae2905b))) {
	goto label122;
}

goto label134;

label367:

ab8369074df2aaa3();
goto label372;

label372:

?>