<?php


function Ed8Dbf4549416FA2()
{
	global $b62d6460eb33ea07;
	global $Ca53486c36275349;
	global $Abcb228699a7f743;

	switch ($Ca53486c36275349) {
	case 'images':
		goto label304;

		label12:

		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_series`;');
		$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];

		if (!(0 < $d353a4da8a0bb857)) {
			goto label93;
		}

		$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);
		goto label30;

		label30:

		if ($C455840d1f015c68) {
			goto label33;
		}

		$C455840d1f015c68 = [0];

		label33:

		foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
			try {
				$b62d6460eb33ea07->query('SELECT `cover`, `cover_big` FROM `streams_series` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
				$e02ff34f7d898a7b = $b62d6460eb33ea07->get_rows();

				foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
					if (!(!empty($D577b2a7889a5fb6['cover']) && (substr($D577b2a7889a5fb6['cover'], 0, 2) == 's:'))) {
						goto label64;
					}

					$c7cd6f7517c43969[] = $D577b2a7889a5fb6['cover'];

					label64:
					if (!(!empty($D577b2a7889a5fb6['cover_big']) && (substr($D577b2a7889a5fb6['cover_big'], 0, 2) == 's:'))) {
						goto label83;
					}

					$c7cd6f7517c43969[] = $D577b2a7889a5fb6['cover_big'];

					label83:
				}
			}
			catch (Exception $E0f0519e12b13b6b) {
				echo 'Error: ' . $E0f0519e12b13b6b . "\n";
			}
		}

		goto label93;

		label93:

		$c7cd6f7517c43969 = array_unique($c7cd6f7517c43969);

		foreach ($c7cd6f7517c43969 as $c68b76c7e42b19eb) {
			goto label143;

			label101:

			goto label178;

			label103:

			$edb4ddb5fe603c5f = Xui\Functions::decrypt($c68b76c7e42b19eb, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
			if (!(!empty($edb4ddb5fe603c5f) && (substr($edb4ddb5fe603c5f, 0, 4) == 'http'))) {
				goto label101;
			}

			if (file_exists(IMAGES_PATH . $d88ca0c1f58e0dc1['basename'])) {
				goto label101;
			}

			echo 'Downloading: ' . $edb4ddb5fe603c5f . "\n";
			XUI::cCcee53491F4Af9c($edb4ddb5fe603c5f);
			goto label101;

			label143:

			$E3665d09b9cea208 = explode(':', $c68b76c7e42b19eb, 3);

			if (!(intval($E3665d09b9cea208[1]) == SERVER_ID)) {
				goto label101;
			}

			$fe9ef1640816311c = explode('/', $E3665d09b9cea208[2]);
			$d88ca0c1f58e0dc1 = pathinfo($fe9ef1640816311c[count($fe9ef1640816311c) - 1]);
			$c68b76c7e42b19eb = $d88ca0c1f58e0dc1['filename'];
			goto label103;

			label178:
		}

		goto label642;
		goto label323;

		label182:

		if ($C455840d1f015c68) {
			goto label185;
		}

		$C455840d1f015c68 = [0];

		label185:

		foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
			try {
				$b62d6460eb33ea07->query('SELECT `stream_icon`, `movie_properties` FROM `streams` LIMIT ' . $Feb130957c9ca68a . ', 1000;');
				$e02ff34f7d898a7b = $b62d6460eb33ea07->get_rows();

				foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
					goto label225;

					label200:
					if (!(!empty($Ccbdf03f8a4df633['backdrop_path'][0]) && (substr($Ccbdf03f8a4df633['backdrop_path'][0], 0, 2) == 's:'))) {
						goto label222;
					}

					$c7cd6f7517c43969[] = $Ccbdf03f8a4df633['backdrop_path'][0];

					label222:

					goto label294;

					label225:

					$Ccbdf03f8a4df633 = json_decode($D577b2a7889a5fb6['movie_properties'], true);
					if (!(!empty($D577b2a7889a5fb6['stream_icon']) && (substr($D577b2a7889a5fb6['stream_icon'], 0, 2) == 's:'))) {
						goto label250;
					}

					$c7cd6f7517c43969[] = $D577b2a7889a5fb6['stream_icon'];

					label250:
					if (!(!empty($Ccbdf03f8a4df633['movie_image']) && (substr($Ccbdf03f8a4df633['movie_image'], 0, 2) == 's:'))) {
						goto label272;
					}

					goto label269;

					label269:

					$c7cd6f7517c43969[] = $Ccbdf03f8a4df633['movie_image'];

					label272:
					if (!(!empty($Ccbdf03f8a4df633['cover_big']) && (substr($Ccbdf03f8a4df633['cover_big'], 0, 2) == 's:'))) {
						goto label291;
					}

					$c7cd6f7517c43969[] = $Ccbdf03f8a4df633['cover_big'];

					label291:

					goto label200;

					label294:
				}
			}
			catch (Exception $E0f0519e12b13b6b) {
				echo 'Error: ' . $E0f0519e12b13b6b . "\n";
			}
		}

		goto label12;

		label304:

		$c7cd6f7517c43969 = [];
		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams`;');
		$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];

		if (!(0 < $d353a4da8a0bb857)) {
			goto label12;
		}

		$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);
		goto label182;
	case 'duplicates':
		label323:

		goto label345;

		label324:

		if (!(0 < count($dec36723d7be7c49))) {
			goto label342;
		}

		foreach (array_chunk($dec36723d7be7c49, 100) as $a4f07102a25c8088) {
			deleteStreams($a4f07102a25c8088);
		}

		label342:

		goto label343;

		label343:

		goto label642;
		goto label382;

		label345:

		$c65e1c212da2f6fc = $dec36723d7be7c49 = [];
		$b62d6460eb33ea07->query('SELECT `a`.`id`, `a`.`stream_source` FROM `streams` `a` INNER JOIN (SELECT  `stream_source`, COUNT(*) `totalCount` FROM `streams` WHERE `type` IN (2,5) GROUP BY `stream_source`) `b` ON `a`.`stream_source` = `b`.`stream_source` WHERE `b`.`totalCount` > 1;');

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$c65e1c212da2f6fc[md5($Fb9da1713bff19ce['stream_source'])][] = $Fb9da1713bff19ce['id'];
		}

		foreach ($c65e1c212da2f6fc as $Abcb228699a7f743 => $ef283dee605972af) {
			array_shift($ef283dee605972af);

			foreach ($ef283dee605972af as $ee6d1fc5d801b43f) {
				$dec36723d7be7c49[] = intval($ee6d1fc5d801b43f);
			}
		}

		goto label324;
	case 'bouquets':
		label382:

		goto label383;

		label383:

		$dec36723d7be7c49 = [
			[],
			[]
		];
		$b62d6460eb33ea07->query('SELECT `id` FROM `streams`;');

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label618;
		}

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$dec36723d7be7c49[0][] = intval($Fb9da1713bff19ce['id']);
		}

		goto label618;

		label407:

		goto label641;

		label408:

		$b62d6460eb33ea07->query('SELECT * FROM `bouquets` ORDER BY `bouquet_order` ASC;');

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label407;
		}

		foreach ($b62d6460eb33ea07->get_rows() as $f155fef57262b32a) {
			goto label425;

			label423:

			goto label615;

			label425:

			$B8630a7c92543099 = [
				[],
				[],
				[],
				[]
			];

			foreach (json_decode($f155fef57262b32a['bouquet_channels'], true) as $Abcb228699a7f743) {
				if (!((0 < intval($Abcb228699a7f743)) && in_array(intval($Abcb228699a7f743), $dec36723d7be7c49[0]))) {
					goto label458;
				}

				$B8630a7c92543099[0][] = intval($Abcb228699a7f743);

				label458:
			}

			foreach (json_decode($f155fef57262b32a['bouquet_movies'], true) as $Abcb228699a7f743) {
				if (!((0 < intval($Abcb228699a7f743)) && in_array(intval($Abcb228699a7f743), $dec36723d7be7c49[0]))) {
					goto label492;
				}

				$B8630a7c92543099[1][] = intval($Abcb228699a7f743);

				label492:
			}

			goto label496;

			label496:

			foreach (json_decode($f155fef57262b32a['bouquet_radios'], true) as $Abcb228699a7f743) {
				if (!((0 < intval($Abcb228699a7f743)) && in_array(intval($Abcb228699a7f743), $dec36723d7be7c49[0]))) {
					goto label528;
				}

				$B8630a7c92543099[2][] = intval($Abcb228699a7f743);

				label528:
			}

			foreach (json_decode($f155fef57262b32a['bouquet_series'], true) as $Abcb228699a7f743) {
				if (!((0 < intval($Abcb228699a7f743)) && in_array(intval($Abcb228699a7f743), $dec36723d7be7c49[1]))) {
					goto label562;
				}

				$B8630a7c92543099[3][] = intval($Abcb228699a7f743);

				label562:
			}

			$b62d6460eb33ea07->query('UPDATE `bouquets` SET `bouquet_channels` = \'[' . implode(',', array_map('intval', $B8630a7c92543099[0])) . ']\', `bouquet_movies` = \'[' . implode(',', array_map('intval', $B8630a7c92543099[1])) . ']\', `bouquet_radios` = \'[' . implode(',', array_map('intval', $B8630a7c92543099[2])) . ']\', `bouquet_series` = \'[' . implode(',', array_map('intval', $B8630a7c92543099[3])) . ']\' WHERE `id` = ?;', $f155fef57262b32a['id']);
			goto label423;

			label615:
		}

		goto label407;

		label618:

		$b62d6460eb33ea07->query('SELECT `id` FROM `streams_series`;');

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label408;
		}

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$dec36723d7be7c49[1][] = intval($Fb9da1713bff19ce['id']);
		}

		goto label408;
	}

	label641:

	goto label642;

	label642:
}

function deleteStreams($Fe53bcd53690fff4)
{
	goto label50;

	label2:

	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE `parent_id` IS NOT NULL AND `parent_id` > 0 AND `parent_id` NOT IN (SELECT `id` FROM `servers` WHERE `server_type` = 0);');
	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', SERVER_ID, time(), json_encode(['type' => 'update_streams', 'id' => $Fe53bcd53690fff4]));

	foreach (array_keys(XUI::$rServers) as $C082ca9ed03f473c) {
		$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`, `cache`) VALUES(?, ?, ?, 1);', $C082ca9ed03f473c, time(), json_encode(['type' => 'delete_vods', 'id' => $Fe53bcd53690fff4]));
	}

	goto label186;

	label50:

	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('DELETE FROM `lines_logs` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `mag_claims` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams` WHERE `id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_episodes` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label88;

	label88:

	$b62d6460eb33ea07->query('DELETE FROM `streams_errors` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_logs` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_options` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `streams_stats` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `watch_refresh` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label134;

	label134:

	$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `lines_live` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('DELETE FROM `recordings` WHERE `created_id` IN (' . implode(',', $Fe53bcd53690fff4) . ') OR `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('UPDATE `lines_activity` SET `stream_id` = 0 WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	$b62d6460eb33ea07->query('SELECT `server_id` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', $Fe53bcd53690fff4) . ');');
	goto label2;

	label186:

	return true;
	goto label188;

	label188:
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

goto label5;

label1:

ed8dbf4549416fa2();
goto label49;

label5:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label16;
}

exit('Please run as XUI!' . "\n");

label16:

if (@$argc) {
	goto label23;
}

exit(0);
goto label23;

label23:

set_time_limit(0);
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
$Ca53486c36275349 = (1 < count($argv) ? $argv[1] : NULL);
goto label1;

label49:

?>