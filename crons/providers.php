<?php


function readURL($A7ca171405b19571)
{
	$b46218714d674656 = stream_context_create([
		'http' => ['timeout' => 30]
	]);
	return json_decode(file_get_contents($A7ca171405b19571, false, $b46218714d674656), true);
}

function Ab8369074dF2Aaa3()
{
	goto label1;

	label1:

	global $b62d6460eb33ea07;
	global $A49cd9d2bf9ab4f1;

	if ($A49cd9d2bf9ab4f1) {
		goto label9;
	}

	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `title_sync` FROM `streams` WHERE `title_sync` IS NOT NULL;');
	goto label26;

	label9:

	goto label21;

	label10:

	if ($A49cd9d2bf9ab4f1) {
		goto label16;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `providers` WHERE `enabled` = 1;');
	goto label61;

	label16:

	$b62d6460eb33ea07->query('SELECT * FROM `providers` WHERE `id` = ?;', $A49cd9d2bf9ab4f1);
	goto label61;

	label21:

	$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `title_sync` FROM `streams` WHERE `title_sync` LIKE ?;', $A49cd9d2bf9ab4f1 . '_%');

	label26:

	$e64bbbf6c5b118b6 = [];

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		list($d86524ca574c2874, $e91152e6386fa135) = array_map('intval', explode('_', $Fb9da1713bff19ce['title_sync']));

		if (isset($e64bbbf6c5b118b6[$d86524ca574c2874])) {
			goto label51;
		}

		$e64bbbf6c5b118b6[$d86524ca574c2874] = [];

		label51:

		$e64bbbf6c5b118b6[$d86524ca574c2874][$e91152e6386fa135] = [$Fb9da1713bff19ce['id'], $Fb9da1713bff19ce['stream_display_name']];
	}

	goto label10;

	label61:

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label490;

		label67:

		$Ee4a5c1f6fb96f8b = $A7ca171405b19571 . '&action=get_live_streams';
		$D9846544dffb63c9 = readurl($Ee4a5c1f6fb96f8b);
		$F647a429f8089f01['streams'] = count($D9846544dffb63c9);
		$A866e7810986dc40 = $A7ca171405b19571 . '&action=get_vod_streams';
		goto label438;

		label82:

		$A7ca171405b19571 .= 'player_api.php?username=' . $Fb9da1713bff19ce['username'] . '&password=' . $Fb9da1713bff19ce['password'];

		label88:

		$fb361b5f838abd3c = readurl($A7ca171405b19571);

		if ($fb361b5f838abd3c) {
			goto label147;
		}

		goto label139;

		label97:

		foreach (array_keys($D506ad7e59d1b101) as $ee6d1fc5d801b43f) {
			if (in_array($ee6d1fc5d801b43f, $Eefa47c19f40e3e2)) {
				goto label112;
			}

			$B575e4db9840f393[] = $ee6d1fc5d801b43f;

			label112:
		}

		if (!(0 < count($B575e4db9840f393))) {
			goto label137;
		}

		$b62d6460eb33ea07->query('DELETE FROM `providers_streams` WHERE `provider_id` = ? AND `stream_id` IN (' . implode(',', array_map('intval', $B575e4db9840f393)) . ');', $Fb9da1713bff19ce['id']);

		label137:

		goto label488;

		label139:

		$b9f049445aa9bd5d = 0;
		$F647a429f8089f01['exp_date'] = $Fb9da1713bff19ce['exp_date'] ?: -1;
		goto label435;

		label147:

		$b9f049445aa9bd5d = 1;
		goto label423;

		label150:

		$Ab13f2545dd3df14 = time();

		foreach (['live' => $D9846544dffb63c9, 'movie' => $D29ecbde177e3d38] as $A7d54b094ae83c95 => $f284920b9991e04c) {
			foreach ($f284920b9991e04c as $fe93a43f53d92a4e) {
				goto label333;

				label164:

				$c6407c71209d9290 = $D506ad7e59d1b101[$fe93a43f53d92a4e['stream_id']];

				if (!(md5($F05acfe4a87b8eb0 . '_' . ($fe93a43f53d92a4e['name'] ?: '') . '_' . ($fe93a43f53d92a4e['stream_icon'] ?: '') . '_' . (($A7d54b094ae83c95 == 'live' ? $fe93a43f53d92a4e['epg_channel_id'] : $fe93a43f53d92a4e['container_extension']) ?: '')) != $c6407c71209d9290)) {
					goto label223;
				}

				$b62d6460eb33ea07->query('UPDATE `providers_streams` SET `category_id` = ?, `category_array` = ?, `stream_display_name` = ?, `stream_icon` = ?, `channel_id` = ?, `modified` = ? WHERE `provider_id` = ? AND `stream_id` = ?;', $F05acfe4a87b8eb0, json_encode($f1d8f92a14989c9e), $fe93a43f53d92a4e['name'], $fe93a43f53d92a4e['stream_icon'], $A7d54b094ae83c95 == 'live' ? $fe93a43f53d92a4e['epg_channel_id'] : $fe93a43f53d92a4e['container_extension'], $Ab13f2545dd3df14, $Fb9da1713bff19ce['id'], $fe93a43f53d92a4e['stream_id']);

				label223:

				goto label284;

				label227:

				goto label365;

				label231:

				$F05acfe4a87b8eb0 = '[' . implode(',', array_map('intval', $F05acfe4a87b8eb0)) . ']';

				if (isset($D506ad7e59d1b101[$fe93a43f53d92a4e['stream_id']])) {
					goto label280;
				}

				$b62d6460eb33ea07->query('INSERT INTO `providers_streams`(`provider_id`, `type`, `stream_id`, `category_id`, `category_array`, `stream_display_name`, `stream_icon`, `channel_id`, `added`, `modified`) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?);', $Fb9da1713bff19ce['id'], $A7d54b094ae83c95, $fe93a43f53d92a4e['stream_id'], $F05acfe4a87b8eb0, json_encode($f1d8f92a14989c9e), $fe93a43f53d92a4e['name'], $fe93a43f53d92a4e['stream_icon'], $A7d54b094ae83c95 == 'live' ? $fe93a43f53d92a4e['epg_channel_id'] : $fe93a43f53d92a4e['container_extension'], $Ab13f2545dd3df14, $Ab13f2545dd3df14);
				goto label223;

				label280:

				goto label164;

				label284:
				if (!(($A7d54b094ae83c95 == 'live') && isset($e64bbbf6c5b118b6[$Fb9da1713bff19ce['id']][$fe93a43f53d92a4e['stream_id']]))) {
					goto label227;
				}

				if (!($fe93a43f53d92a4e['name'] != $e64bbbf6c5b118b6[$Fb9da1713bff19ce['id']][$fe93a43f53d92a4e['stream_id']][1])) {
					goto label329;
				}

				$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_display_name` = ? WHERE `id` = ?;', $fe93a43f53d92a4e['name'], $e64bbbf6c5b118b6[$Fb9da1713bff19ce['id']][$fe93a43f53d92a4e['stream_id']][0]);
				XUI::Cac325153a658C37($e64bbbf6c5b118b6[$Fb9da1713bff19ce['id']][$fe93a43f53d92a4e['stream_id']][0]);

				label329:

				goto label227;

				label333:

				$Eefa47c19f40e3e2[] = $fe93a43f53d92a4e['stream_id'];
				$F05acfe4a87b8eb0 = (isset($fe93a43f53d92a4e['category_ids']) ? (is_array($fe93a43f53d92a4e['category_ids']) ? $fe93a43f53d92a4e['category_ids'] : []) : [$fe93a43f53d92a4e['category_id']]);
				$f1d8f92a14989c9e = [];

				foreach ($F05acfe4a87b8eb0 as $fe63f70cd74f3298) {
					$f1d8f92a14989c9e[] = $F771d40e8cf51e59[$fe63f70cd74f3298];
				}

				goto label231;

				label365:
			}
		}

		$B575e4db9840f393 = [];
		goto label97;

		label372:

		$Dce401fe604e2cd1 = time();
		$b62d6460eb33ea07->query('UPDATE `providers` SET `data` = ?, `last_changed` = ?, `status` = ? WHERE `id` = ?;', json_encode($F647a429f8089f01), $Dce401fe604e2cd1, $b9f049445aa9bd5d, $Fb9da1713bff19ce['id']);
		$b62d6460eb33ea07->query('SELECT `type`, `stream_id`, `category_id`, `stream_display_name`, `stream_icon`, `channel_id` FROM `providers_streams` WHERE `provider_id` = ?;', $Fb9da1713bff19ce['id']);
		$Eefa47c19f40e3e2 = $D506ad7e59d1b101 = [];

		foreach ($b62d6460eb33ea07->get_rows() as $fe93a43f53d92a4e) {
			$D506ad7e59d1b101[$fe93a43f53d92a4e['stream_id']] = md5($fe93a43f53d92a4e['category_id'] . '_' . ($fe93a43f53d92a4e['stream_display_name'] ?: '') . '_' . ($fe93a43f53d92a4e['stream_icon'] ?: '') . '_' . ($fe93a43f53d92a4e['channel_id'] ?: ''));
		}

		goto label150;

		label423:

		$F647a429f8089f01['max_connections'] = $fb361b5f838abd3c['user_info']['max_connections'];
		$F647a429f8089f01['active_connections'] = $fb361b5f838abd3c['user_info']['active_cons'];
		$F647a429f8089f01['exp_date'] = $fb361b5f838abd3c['user_info']['exp_date'];

		label435:

		$F771d40e8cf51e59 = [];
		goto label460;

		label438:

		$D29ecbde177e3d38 = readurl($A866e7810986dc40);
		$F647a429f8089f01['movies'] = count($D29ecbde177e3d38);
		$ad70e22d123219c3 = $A7ca171405b19571 . '&action=get_series';
		$d02ef9ae10a41939 = readurl($ad70e22d123219c3);
		$F647a429f8089f01['series'] = count($d02ef9ae10a41939);
		goto label372;

		label460:

		$a51d20f9a546e7b4 = $A7ca171405b19571 . '&action=get_live_categories';

		foreach (readurl($a51d20f9a546e7b4) as $Dbcac322b4274e46) {
			$F771d40e8cf51e59[$Dbcac322b4274e46['category_id']] = $Dbcac322b4274e46['category_name'];
		}

		$a51d20f9a546e7b4 = $A7ca171405b19571 . '&action=get_vod_categories';

		foreach (readurl($a51d20f9a546e7b4) as $Dbcac322b4274e46) {
			$F771d40e8cf51e59[$Dbcac322b4274e46['category_id']] = $Dbcac322b4274e46['category_name'];
		}

		goto label67;

		label488:

		goto label519;

		label490:

		$F647a429f8089f01 = [];
		$A7ca171405b19571 = ($Fb9da1713bff19ce['ssl'] ? 'https' : 'http') . '://' . $Fb9da1713bff19ce['ip'] . ':' . $Fb9da1713bff19ce['port'] . '/';

		if ($Fb9da1713bff19ce['legacy']) {
			goto label82;
		}

		$A7ca171405b19571 .= 'player_api/' . $Fb9da1713bff19ce['username'] . '/' . $Fb9da1713bff19ce['password'] . '?connections=1';
		goto label88;
		goto label82;

		label519:
	}

	goto label522;

	label522:
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

goto label59;

label1:

$F7379362daea673f = 300;
set_time_limit($F7379362daea673f);
ini_set('max_execution_time', $F7379362daea673f);
goto label56;

label12:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
cli_set_process_title('XUI[Providers]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336B0Dad3eaF634() . __FILE__);
XUI::a3cF732C257Bd804($F2db9d2971f5c8c4);
goto label1;

label42:

$A49cd9d2bf9ab4f1 = NULL;

if (!(1 < count($argv))) {
	goto label55;
}

$A49cd9d2bf9ab4f1 = intval($argv[1]);

label55:

goto label12;

label56:

ab8369074df2aaa3();
goto label77;

label59:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label70;
}

exit('Please run as XUI!' . "\n");

label70:

if (@$argc) {
	goto label42;
}

exit(0);
goto label42;

label77:

?>