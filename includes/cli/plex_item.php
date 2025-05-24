<?php


function C79E45b9106cF57B($ce0840c647e1bbc7)
{
	return strtolower(preg_replace('/[^a-z0-9_]+/i', '', $ce0840c647e1bbc7));
}

function c483a3A59265139E($F647a429f8089f01)
{
	$B8630a7c92543099 = $E7d73c61c6fc4cd9 = $Ca123c0b300f7947 = $ba2d146bb5a55097 = [];

	foreach (array_keys($F647a429f8089f01) as $Bb672d1983256a93) {
		$E7d73c61c6fc4cd9[] = '`' . c79e45b9106cf57b($Bb672d1983256a93) . '`';
		$B8630a7c92543099[] = '`' . c79e45b9106cf57b($Bb672d1983256a93) . '` = ?';
	}

	foreach (array_values($F647a429f8089f01) as $ce0840c647e1bbc7) {
		if (!is_array($ce0840c647e1bbc7)) {
			goto label44;
		}

		$ce0840c647e1bbc7 = json_encode($ce0840c647e1bbc7, JSON_UNESCAPED_UNICODE);

		label44:

		$Ca123c0b300f7947[] = '?';
		$ba2d146bb5a55097[] = $ce0840c647e1bbc7;
	}

	return ['placeholder' => implode(',', $Ca123c0b300f7947), 'columns' => implode(',', $E7d73c61c6fc4cd9), 'data' => $ba2d146bb5a55097, 'update' => implode(',', $B8630a7c92543099)];
}

function eD8dBf4549416FA2()
{
	goto label2563;

	label1:

	$C85af697f0731d8b = $F05acfe4a87b8eb0 = [];

	if (!(0 < $b036a2bf442dddad['category_id'])) {
		goto label14;
	}

	$F05acfe4a87b8eb0 = [intval($b036a2bf442dddad['category_id'])];

	label14:

	goto label2587;

	label15:

	$d3f731f42044395a = ['movie' => 1, 'show' => 2][$b036a2bf442dddad['type']];

	switch ($b036a2bf442dddad['type']) {
	case 'movie':
		goto label586;

		label27:

		foreach (makeArray($e48a3195e981780e['Video']['Media']) as $bb77f29082f7d6e6) {
			if ($E843e202743c8a9e) {
				goto label42;
			}

			$E843e202743c8a9e = $bb77f29082f7d6e6['Part']['@attributes']['file'];

			label42:
			if (!(!$E9b1fd38e68414a7['size'] || ($E9b1fd38e68414a7['size'] < intval($bb77f29082f7d6e6['Part']['@attributes']['size'])))) {
				goto label90;
			}
			if (!(file_exists($bb77f29082f7d6e6['Part']['@attributes']['file']) || $b036a2bf442dddad['direct_proxy'])) {
				goto label90;
			}

			$E9b1fd38e68414a7 = ['file' => $bb77f29082f7d6e6['Part']['@attributes']['file'], 'size' => intval($bb77f29082f7d6e6['Part']['@attributes']['size']), 'data' => $bb77f29082f7d6e6, 'key' => $bb77f29082f7d6e6['Part']['@attributes']['key']];

			label90:
		}

		if (!empty($E9b1fd38e68414a7['file'])) {
			goto label865;
		}

		if ($E843e202743c8a9e) {
			goto label660;
		}

		exit();
		goto label658;

		label103:

		$d5d6bbc743dab4c0 = [];

		foreach (array_slice(makeArray($e48a3195e981780e['Video']['Role']), 0, 5) as $efdfec64a4041aa6) {
			$d5d6bbc743dab4c0[] = $efdfec64a4041aa6['@attributes']['tag'];
		}

		$Ddc486c18cb21e76 = [];

		foreach (array_slice(makeArray($e48a3195e981780e['Video']['Director']), 0, 3) as $efdfec64a4041aa6) {
			$Ddc486c18cb21e76[] = $efdfec64a4041aa6['@attributes']['tag'];
		}

		goto label266;

		label143:

		if (!(count($C85af697f0731d8b) == 0)) {
			goto label161;
		}

		$C85af697f0731d8b = array_map('intval', json_decode($b036a2bf442dddad['fb_bouquets'], true));

		label161:

		goto label913;

		label163:

		$Cc94312f13005bd4[] = $fda35c5a7025b7ea;
		$Cc94312f13005bd4[] = $E75286ab211f4201;
		if (($b036a2bf442dddad['target_container'] != 'auto') && $b036a2bf442dddad['target_container'] && !$b036a2bf442dddad['direct_proxy']) {
			goto label217;
		}

		$Dd41a39d4bb950cf['target_container'] = pathinfo($E9b1fd38e68414a7['file'])['extension'];
		goto label220;
		goto label217;

		label190:

		if (0 < $b036a2bf442dddad['max_genres']) {
			goto label203;
		}

		$f981dd0e5ffffa8c = makeArray($e48a3195e981780e['Video']['Genre']);
		goto label734;

		label203:

		$f981dd0e5ffffa8c = array_slice(makeArray($e48a3195e981780e['Video']['Genre']), 0, $b036a2bf442dddad['max_genres']);
		goto label734;

		label217:

		$Dd41a39d4bb950cf['target_container'] = $b036a2bf442dddad['target_container'];

		label220:

		if (!empty($Dd41a39d4bb950cf['target_container'])) {
			goto label619;
		}

		$Dd41a39d4bb950cf['target_container'] = 'mp4';
		goto label619;

		label229:

		echo 'Upgrade movie!' . "\n";
		$Dd41a39d4bb950cf['id'] = $a10de9fbe1c0cb61['id'];

		label233:

		$Fac87d38f7786df0 = c483a3a59265139e($Dd41a39d4bb950cf);
		goto label1010;

		label239:

		$F05acfe4a87b8eb0 = [intval($b036a2bf442dddad['fb_category_id'])];

		label245:

		if (!(count($C85af697f0731d8b) == 0)) {
			goto label143;
		}

		if (0 < $b036a2bf442dddad['max_genres']) {
			goto label513;
		}

		$f981dd0e5ffffa8c = makeArray($e48a3195e981780e['Video']['Genre']);
		goto label511;

		label266:

		$Bbe4c2a2b1efd5b2 = [];

		foreach (array_slice(makeArray($e48a3195e981780e['Video']['Genre']), 0, $b036a2bf442dddad['max_genres']) as $cb7c230a28039130) {
			$Bbe4c2a2b1efd5b2[] = $cb7c230a28039130['@attributes']['tag'];
		}

		$b8f81a9f6e93f6a9 = makeArray($e48a3195e981780e['Video']['Country'])[0]['@attributes']['tag'] ?: NULL;
		goto label701;

		label299:

		goto label233;

		label301:

		if (!($a10de9fbe1c0cb61['source'] == $E9b1fd38e68414a7['file'])) {
			goto label357;
		}

		echo 'File remains unchanged' . "\n";
		goto label356;

		label311:

		$D7f17b03d6498825 = NULL;
		$E843e202743c8a9e = NULL;

		foreach (makeArray($e48a3195e981780e['Video']['Guid']) as $b4f1256aaf083c94) {
			if (!(substr($b4f1256aaf083c94['@attributes']['id'], 0, 7) == 'tmdb://')) {
				goto label351;
			}

			$D7f17b03d6498825 = intval(explode('tmdb://', $b4f1256aaf083c94['@attributes']['id'])[1]);
			echo 'TMDB ID: ' . $D7f17b03d6498825 . "\n";
			goto label353;

			label351:
		}

		label353:

		$E9b1fd38e68414a7 = ['file' => NULL, 'size' => NULL, 'data' => NULL, 'key' => NULL];
		goto label27;

		label356:

		exit();

		label357:

		if ($b036a2bf442dddad['auto_upgrade']) {
			goto label229;
		}

		echo 'Upgrade disabled' . "\n";
		exit();
		goto label229;

		label365:

		$Dd41a39d4bb950cf['tmdb_id'] = $D7f17b03d6498825 ?: NULL;
		$Dd41a39d4bb950cf['movie_properties'] = [
			'kinopoisk_url'          => $D7f17b03d6498825 ? 'https://www.themoviedb.org/movie/' . $D7f17b03d6498825 : NULL,
			'tmdb_id'                => $D7f17b03d6498825,
			'plex_id'                => $b036a2bf442dddad['key'],
			'name'                   => $e48a3195e981780e['Video']['@attributes']['title'],
			'o_name'                 => $e48a3195e981780e['Video']['@attributes']['title'],
			'cover_big'              => $Df7b5971cf1d6194,
			'movie_image'            => $Df7b5971cf1d6194,
			'release_date'           => $e48a3195e981780e['Video']['@attributes']['originallyAvailableAt'],
			'episode_run_time'       => intval($d03052828cab569a / 60),
			'youtube_trailer'        => NULL,
			'director'               => implode(', ', $Ddc486c18cb21e76),
			'actors'                 => implode(', ', $d5d6bbc743dab4c0),
			'cast'                   => implode(', ', $d5d6bbc743dab4c0),
			'description'            => trim($e48a3195e981780e['Video']['@attributes']['summary']),
			'plot'                   => $e48a3195e981780e['Video']['@attributes']['summary'],
			'age'                    => '',
			'mpaa_rating'            => '',
			'rating_count_kinopoisk' => 0,
			'country'                => $b8f81a9f6e93f6a9,
			'genre'                  => implode(', ', $Bbe4c2a2b1efd5b2),
			'backdrop_path'          => [$A0232f15a223f0e1],
			'duration_secs'          => $d03052828cab569a,
			'duration'               => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
			'video'                  => [],
			'audio'                  => [],
			'bitrate'                => 0,
			'rating'                 => floatval($e48a3195e981780e['Video']['@attributes']['rating']) ?: floatval($e48a3195e981780e['Video']['@attributes']['audienceRating'])
		];
		$Dd41a39d4bb950cf['rating'] = floatval($e48a3195e981780e['Video']['@attributes']['rating']) ?: floatval($e48a3195e981780e['Video']['@attributes']['audienceRating']) ?: 0;
		$Dd41a39d4bb950cf['read_native'] = $b036a2bf442dddad['read_native'];
		$Dd41a39d4bb950cf['movie_symlink'] = $b036a2bf442dddad['movie_symlink'];
		goto label837;

		label493:

		$Dd41a39d4bb950cf['direct_proxy'] = 1;

		label495:

		$Dd41a39d4bb950cf['order'] = aDD0b2C53B2714a1();
		$Dd41a39d4bb950cf['tmdb_language'] = $rLanguage;

		if (!(count($F05acfe4a87b8eb0) == 0)) {
			goto label796;
		}

		goto label190;

		label511:

		goto label525;

		label513:

		$f981dd0e5ffffa8c = array_slice(makeArray($e48a3195e981780e['Video']['Genre']), 0, $b036a2bf442dddad['max_genres']);

		label525:

		foreach ($f981dd0e5ffffa8c as $cb7c230a28039130) {
			$Eecd08117295a068 = $cb7c230a28039130['@attributes']['tag'];
			$Df5cd7b5dc4cc10c = json_decode($Cb61bff653722624[3][$Eecd08117295a068]['bouquets'], true);

			foreach ($Df5cd7b5dc4cc10c as $b5fd3e3f0096d7f4) {
				if (in_array($b5fd3e3f0096d7f4, $C85af697f0731d8b)) {
					goto label551;
				}

				$C85af697f0731d8b[] = $b5fd3e3f0096d7f4;

				label551:
			}
		}

		goto label143;

		label557:

		foreach ($C85af697f0731d8b as $f155fef57262b32a) {
			B8B65E8cB6a1dfE9('movie', $f155fef57262b32a, $E5b50d60c471d7d6);
		}

		$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 1, ?);', $d3f731f42044395a, SERVER_ID, utf8_decode($E9b1fd38e68414a7['file']), $E5b50d60c471d7d6);
		exit();
		goto label813;

		label581:

		echo 'Success!' . "\n";

		label582:

		goto label2549;
		goto label1040;

		label586:

		$A7ca171405b19571 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/library/metadata/' . $b036a2bf442dddad['key'] . '?X-Plex-Token=' . $b036a2bf442dddad['token'];
		$e48a3195e981780e = json_decode(json_encode(simplexml_load_string(readURL($A7ca171405b19571))), true);

		if ($e48a3195e981780e) {
			goto label617;
		}

		exit('Failed to get information.' . "\n");

		label617:

		goto label311;

		label619:

		$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE `filename` = ? AND `type` = ? AND `server_id` = ?;', utf8_decode($E9b1fd38e68414a7['file']), $d3f731f42044395a, SERVER_ID);

		if (!$e48a3195e981780e['Video']['@attributes']['thumb']) {
			goto label673;
		}

		$f22c03cec8ad9f56 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/photo/:/transcode?width=300&height=450&minSize=1&quality=100&upscale=1&url=' . $e48a3195e981780e['Video']['@attributes']['thumb'] . '&X-Plex-Token=' . $b036a2bf442dddad['token'];
		$Df7b5971cf1d6194 = XUI::CcCee53491F4Af9C($f22c03cec8ad9f56);
		goto label673;

		label658:

		goto label671;

		label660:

		$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 5, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($E843e202743c8a9e));
		exit();

		label671:

		goto label863;

		label673:

		if (!$e48a3195e981780e['Video']['@attributes']['art']) {
			goto label699;
		}

		$F3e063f4612b08b2 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/photo/:/transcode?width=1280&height=720&minSize=1&quality=100&upscale=1&url=' . $e48a3195e981780e['Video']['@attributes']['art'] . '&X-Plex-Token=' . $b036a2bf442dddad['token'];
		$A0232f15a223f0e1 = XUI::cccEe53491F4AF9C($F3e063f4612b08b2);

		label699:

		goto label103;

		label701:

		$d03052828cab569a = intval(intval($e48a3195e981780e['Video']['@attributes']['duration']) / 1000);
		$Dd41a39d4bb950cf['stream_display_name'] = $e48a3195e981780e['Video']['@attributes']['title'];

		if (!$e48a3195e981780e['Video']['@attributes']['year']) {
			goto label732;
		}

		$Dd41a39d4bb950cf['year'] = intval($e48a3195e981780e['Video']['@attributes']['year']);

		label732:

		goto label365;

		label734:

		foreach ($f981dd0e5ffffa8c as $cb7c230a28039130) {
			goto label771;

			label739:

			$F05acfe4a87b8eb0[] = $fe63f70cd74f3298;

			label741:

			goto label794;

			label744:

			goto label741;

			label747:

			$fe63f70cd74f3298 = intval($Cb61bff653722624[3][$Eecd08117295a068]['category_id']);

			if (!(0 < $fe63f70cd74f3298)) {
				goto label741;
			}

			if (in_array($fe63f70cd74f3298, $F05acfe4a87b8eb0)) {
				goto label741;
			}

			goto label739;

			label771:

			$Eecd08117295a068 = $cb7c230a28039130['@attributes']['tag'];

			if (isset($Cb61bff653722624[3][$Eecd08117295a068])) {
				goto label747;
			}

			if (!$b036a2bf442dddad['store_categories']) {
				goto label791;
			}

			addCategory($b036a2bf442dddad['type'], $Eecd08117295a068);

			label791:

			goto label744;

			label794:
		}

		label796:
		if (!((count($F05acfe4a87b8eb0) == 0) && (0 < intval($b036a2bf442dddad['fb_category_id'])))) {
			goto label245;
		}

		goto label239;

		label813:

		goto label947;

		label815:

		foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
			$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = NULL, `current_source` = NULL, `to_analyze` = 0, `pid` = NULL, `stream_started` = NULL, `stream_info` = NULL, `compatible` = 0, `video_codec` = NULL, `audio_codec` = NULL, `resolution` = NULL, `stream_status` = 0 WHERE `stream_id` = ? AND `server_id` = ?', $E5b50d60c471d7d6, $C082ca9ed03f473c);
		}

		$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 6, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($E9b1fd38e68414a7['file']));
		goto label947;

		label837:

		$Dd41a39d4bb950cf['remove_subtitles'] = $b036a2bf442dddad['remove_subtitles'];
		$Dd41a39d4bb950cf['transcode_profile_id'] = $b036a2bf442dddad['transcode_profile_id'];

		if ($b036a2bf442dddad['direct_proxy']) {
			goto label857;
		}

		$Dd41a39d4bb950cf['stream_source'] = $fda35c5a7025b7ea;
		$Dd41a39d4bb950cf['direct_source'] = 0;
		goto label853;

		label853:

		$Dd41a39d4bb950cf['direct_proxy'] = 0;
		goto label495;

		label857:

		$Dd41a39d4bb950cf['stream_source'] = $E75286ab211f4201;
		$Dd41a39d4bb950cf['direct_source'] = 1;
		goto label493;

		label863:

		goto label582;

		label865:

		$fda35c5a7025b7ea = json_encode(['s:' . SERVER_ID . ':' . $E9b1fd38e68414a7['file']], JSON_UNESCAPED_UNICODE);
		$E75286ab211f4201 = json_encode(['http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . $E9b1fd38e68414a7['key'] . '?X-Plex-Token=' . $b036a2bf442dddad['token']], JSON_UNESCAPED_UNICODE);
		if (!(!in_array($fda35c5a7025b7ea, $Cc94312f13005bd4) && !in_array($E75286ab211f4201, $Cc94312f13005bd4))) {
			goto label582;
		}

		goto label163;

		label913:

		if (!$eca9936f0487fe83) {
			goto label919;
		}

		$Dd41a39d4bb950cf['year'] = $eca9936f0487fe83;

		label919:

		$Dd41a39d4bb950cf['added'] = time();
		$Dd41a39d4bb950cf['plex_uuid'] = $b036a2bf442dddad['uuid'];
		goto label962;

		label928:

		goto label582;

		label930:

		$E5b50d60c471d7d6 = $b62d6460eb33ea07->last_insert_id();

		if ($a10de9fbe1c0cb61) {
			goto label815;
		}

		foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
			$b62d6460eb33ea07->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`) VALUES(?, ?, NULL);', $E5b50d60c471d7d6, $C082ca9ed03f473c);
		}

		goto label557;

		label947:

		if (!$b036a2bf442dddad['auto_encode']) {
			goto label960;
		}

		foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
			XUI::queueMovie($E5b50d60c471d7d6, $C082ca9ed03f473c);
		}

		label960:

		goto label581;

		label962:

		$Dd41a39d4bb950cf['category_id'] = '[' . implode(',', array_map('intval', $F05acfe4a87b8eb0)) . ']';

		if ($a10de9fbe1c0cb61 = getMovie($b036a2bf442dddad['uuid'], $b036a2bf442dddad['check_tmdb'] ? $D7f17b03d6498825 : NULL)) {
			goto label301;
		}

		if (!(count($F05acfe4a87b8eb0) == 0)) {
			goto label299;
		}

		$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 3, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($E9b1fd38e68414a7['file']));
		exit();
		goto label299;

		label1010:

		$B91645b8411dc88c = 'REPLACE INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if ($b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label930;
		}

		echo 'Insert failed!' . "\n";
		$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 2, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($E9b1fd38e68414a7['file']));
		exit();
		goto label928;
	case 'show':
		label1040:

		goto label1379;

		label1042:

		$e789f71986a63dfb = [
			'title'            => $b9bb8f475c84b5be['@attributes']['title'],
			'category_id'      => [],
			'episode_run_time' => intval($b9bb8f475c84b5be['@attributes']['duration'] / 1000 / 60) ?: 0,
			'tmdb_id'          => $D7f17b03d6498825,
			'cover'            => '',
			'genre'            => '',
			'plot'             => trim($b9bb8f475c84b5be['@attributes']['summary']),
			'cast'             => '',
			'rating'           => floatval($b9bb8f475c84b5be['@attributes']['rating']) ?: floatval($b9bb8f475c84b5be['@attributes']['audienceRating']) ?: 0,
			'director'         => '',
			'release_date'     => $b9bb8f475c84b5be['@attributes']['originallyAvailableAt'],
			'last_modified'    => time(),
			'seasons'          => $Eaa4da8f4690ffe5,
			'backdrop_path'    => [],
			'youtube_trailer'  => '',
			'year'             => NULL
		];

		if (!$e789f71986a63dfb['release_date']) {
			goto label1109;
		}

		$e789f71986a63dfb['year'] = intval(substr($e789f71986a63dfb['release_date'], 0, 4));

		label1109:

		if (!$b9bb8f475c84b5be['@attributes']['thumb']) {
			goto label1461;
		}

		goto label1443;

		label1117:

		$rLanguage = explode('?lang=', $E3665d09b9cea208)[1] ?: NULL;
		echo 'TMDB ID: ' . $D7f17b03d6498825 . "\n";

		label1128:

		if ($D7f17b03d6498825) {
			goto label1242;
		}

		foreach ($b9bb8f475c84b5be['Guid'] as $b4f1256aaf083c94) {
			if (!(substr($b4f1256aaf083c94['@attributes']['id'], 0, 7) == 'tmdb://')) {
				goto label1175;
			}

			$D7f17b03d6498825 = substr($b4f1256aaf083c94['@attributes']['id'], 7, strlen($b4f1256aaf083c94['@attributes']['id']) - 7);
			$rLanguage = explode('?lang=', $E3665d09b9cea208)[1] ?: NULL;
			echo 'TMDB ID: ' . $D7f17b03d6498825 . "\n";
			goto label1242;

			label1175:
		}

		goto label1242;

		label1179:

		foreach (array_slice(makeArray($b9bb8f475c84b5be['Director']), 0, 3) as $efdfec64a4041aa6) {
			$Ddc486c18cb21e76[] = $efdfec64a4041aa6['@attributes']['tag'];
		}

		$e789f71986a63dfb['director'] = implode(', ', $Ddc486c18cb21e76);
		$Bbe4c2a2b1efd5b2 = [];

		foreach (array_slice(makeArray($b9bb8f475c84b5be['Genre']), 0, 3) as $cb7c230a28039130) {
			$Bbe4c2a2b1efd5b2[] = $cb7c230a28039130['@attributes']['tag'];
		}

		goto label2522;

		label1222:

		exit();

		label1223:

		$e789f71986a63dfb['plex_uuid'] = $b036a2bf442dddad['uuid'];
		$e789f71986a63dfb['tmdb_language'] = $rLanguage;
		$e789f71986a63dfb['category_id'] = '[' . implode(',', array_map('intval', $F05acfe4a87b8eb0)) . ']';
		goto label1412;

		label1242:

		$Dd1fc530420a7bf3 = $Eaa4da8f4690ffe5 = [];
		$A7ca171405b19571 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/library/metadata/' . $b036a2bf442dddad['key'] . '/children?X-Plex-Token=' . $b036a2bf442dddad['token'];
		$A29d8a2356bd9140 = makeArray(json_decode(json_encode(simplexml_load_string(readURL($A7ca171405b19571))), true)['Directory']);
		goto label1713;

		label1278:

		if (!$b9bb8f475c84b5be['@attributes']['thumb']) {
			goto label1302;
		}

		$f22c03cec8ad9f56 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/photo/:/transcode?width=300&height=450&minSize=1&quality=100&upscale=1&url=' . $b9bb8f475c84b5be['@attributes']['thumb'] . '&X-Plex-Token=' . $b036a2bf442dddad['token'];
		$Df7b5971cf1d6194 = XUI::CcceE53491F4Af9C($f22c03cec8ad9f56);

		label1302:

		if (!$b9bb8f475c84b5be['@attributes']['art']) {
			goto label1355;
		}

		goto label1337;

		label1310:

		$d02ef9ae10a41939 = getSeriesByID($b036a2bf442dddad['uuid'], $D7f17b03d6498825);

		if (!$d02ef9ae10a41939) {
			goto label1525;
		}

		$b62d6460eb33ea07->query('UPDATE `streams_series` SET `seasons` = ? WHERE `id` = ?;', json_encode($Eaa4da8f4690ffe5, JSON_UNESCAPED_UNICODE), $d02ef9ae10a41939['id']);

		if ($d02ef9ae10a41939['cover']) {
			goto label1523;
		}

		goto label1278;

		label1337:

		$F3e063f4612b08b2 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/photo/:/transcode?width=1280&height=720&minSize=1&quality=100&upscale=1&url=' . $b9bb8f475c84b5be['@attributes']['art'] . '&X-Plex-Token=' . $b036a2bf442dddad['token'];
		$A0232f15a223f0e1 = XUI::cccEe53491F4af9C($F3e063f4612b08b2);

		label1355:
		if (!($Df7b5971cf1d6194 || $A0232f15a223f0e1)) {
			goto label1523;
		}

		if ($A0232f15a223f0e1) {
			goto label1439;
		}

		goto label1436;

		label1366:

		$A0232f15a223f0e1 = XUI::CccEe53491F4AF9C($F3e063f4612b08b2);

		label1370:

		$e789f71986a63dfb['cover'] = $Df7b5971cf1d6194;
		$e789f71986a63dfb['cover_big'] = $Df7b5971cf1d6194;

		if ($A0232f15a223f0e1) {
			goto label1487;
		}

		goto label1483;

		label1379:

		$A7ca171405b19571 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/library/metadata/' . $b036a2bf442dddad['key'] . '?X-Plex-Token=' . $b036a2bf442dddad['token'];
		$e48a3195e981780e = json_decode(json_encode(simplexml_load_string(readURL($A7ca171405b19571))), true);

		if ($e48a3195e981780e) {
			goto label1410;
		}

		exit('Failed to get information.' . "\n");

		label1410:

		goto label1674;

		label1412:

		$Fac87d38f7786df0 = c483a3a59265139e($e789f71986a63dfb);
		$B91645b8411dc88c = 'INSERT INTO `streams_series`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if ($b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label2442;
		}

		$d02ef9ae10a41939 = NULL;
		goto label1837;
		goto label2442;

		label1436:

		$A0232f15a223f0e1 = [];
		goto label1441;

		label1439:

		$A0232f15a223f0e1 = [$A0232f15a223f0e1];

		label1441:

		goto label1515;

		label1443:

		$f22c03cec8ad9f56 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/photo/:/transcode?width=300&height=450&minSize=1&quality=100&upscale=1&url=' . $b9bb8f475c84b5be['@attributes']['thumb'] . '&X-Plex-Token=' . $b036a2bf442dddad['token'];
		$Df7b5971cf1d6194 = XUI::CCCEE53491F4af9c($f22c03cec8ad9f56);

		label1461:

		if (!$b9bb8f475c84b5be['@attributes']['art']) {
			goto label1370;
		}

		$F3e063f4612b08b2 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/photo/:/transcode?width=1280&height=720&minSize=1&quality=100&upscale=1&url=' . $b9bb8f475c84b5be['@attributes']['art'] . '&X-Plex-Token=' . $b036a2bf442dddad['token'];
		goto label1366;

		label1483:

		$e789f71986a63dfb['backdrop_path'] = [];
		goto label1490;

		label1487:

		$e789f71986a63dfb['backdrop_path'] = [$A0232f15a223f0e1];

		label1490:

		goto label1527;

		label1492:
		if (!((count($F05acfe4a87b8eb0) == 0) && (0 < intval($b036a2bf442dddad['fb_category_id'])))) {
			goto label1513;
		}

		$F05acfe4a87b8eb0 = [intval($b036a2bf442dddad['fb_category_id'])];

		label1513:

		goto label2460;

		label1515:

		$b62d6460eb33ea07->query('UPDATE `streams_series` SET `cover` = ?, `cover_big` = ?, `backdrop_path` = ? WHERE `id` = ?;', $Df7b5971cf1d6194, $Df7b5971cf1d6194, $A0232f15a223f0e1, $d02ef9ae10a41939['id']);

		label1523:

		goto label1837;

		label1525:

		goto label1042;

		label1527:

		$d5d6bbc743dab4c0 = [];

		foreach (array_slice(makeArray($b9bb8f475c84b5be['Role']), 0, 5) as $efdfec64a4041aa6) {
			$d5d6bbc743dab4c0[] = $efdfec64a4041aa6['@attributes']['tag'];
		}

		$e789f71986a63dfb['cast'] = implode(', ', $d5d6bbc743dab4c0);
		$Ddc486c18cb21e76 = [];
		goto label1179;

		label1554:

		goto label1567;

		label1556:

		$f981dd0e5ffffa8c = array_slice(makeArray($b9bb8f475c84b5be['Genre']), 0, $b036a2bf442dddad['max_genres']);

		label1567:

		foreach ($f981dd0e5ffffa8c as $cb7c230a28039130) {
			goto label1599;

			label1572:

			goto label1624;

			label1575:

			$fe63f70cd74f3298 = intval($Cb61bff653722624[4][$Eecd08117295a068]['category_id']);

			if (!(0 < $fe63f70cd74f3298)) {
				goto label1624;
			}

			if (in_array($fe63f70cd74f3298, $F05acfe4a87b8eb0)) {
				goto label1624;
			}

			goto label1622;

			label1599:

			$Eecd08117295a068 = $cb7c230a28039130['@attributes']['tag'];

			if (isset($Cb61bff653722624[3][$Eecd08117295a068])) {
				goto label1575;
			}

			if (!$b036a2bf442dddad['store_categories']) {
				goto label1619;
			}

			addCategory($b036a2bf442dddad['type'], $Eecd08117295a068);

			label1619:

			goto label1572;

			label1622:

			$F05acfe4a87b8eb0[] = $fe63f70cd74f3298;

			label1624:

			goto label1627;

			label1627:
		}

		goto label1492;

		label1631:

		$f981dd0e5ffffa8c = array_slice(makeArray($b9bb8f475c84b5be['Genre']), 0, $b036a2bf442dddad['max_genres']);

		label1642:

		foreach ($f981dd0e5ffffa8c as $cb7c230a28039130) {
			$Eecd08117295a068 = $cb7c230a28039130['@attributes']['tag'];
			$Df5cd7b5dc4cc10c = json_decode($Cb61bff653722624[4][$Eecd08117295a068]['bouquets'], true);

			foreach ($Df5cd7b5dc4cc10c as $b5fd3e3f0096d7f4) {
				if (in_array($b5fd3e3f0096d7f4, $C85af697f0731d8b)) {
					goto label1668;
				}

				$C85af697f0731d8b[] = $b5fd3e3f0096d7f4;

				label1668:
			}
		}

		label1672:

		goto label2482;

		label1674:

		$b9bb8f475c84b5be = makeArray($e48a3195e981780e['Directory'])[0];
		$D7f17b03d6498825 = NULL;

		if (!(substr($b9bb8f475c84b5be['@attributes']['guid'], 0, 32) == 'com.plexapp.agents.themoviedb://')) {
			goto label1128;
		}

		$E3665d09b9cea208 = explode('com.plexapp.agents.themoviedb://', $b9bb8f475c84b5be['@attributes']['guid'])[1];
		$D7f17b03d6498825 = intval(explode('?lang=', $E3665d09b9cea208)[0]);
		goto label1117;

		label1713:

		$A7ca171405b19571 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/library/metadata/' . $b036a2bf442dddad['key'] . '/allLeaves?X-Plex-Token=' . $b036a2bf442dddad['token'];
		$D8329ce54de87aa5 = makeArray(json_decode(json_encode(simplexml_load_string(readURL($A7ca171405b19571))), true)['Video']);

		foreach ($D8329ce54de87aa5 as $e61e6dcee1252fa2) {
			if (in_array($e61e6dcee1252fa2['@attributes']['parentIndex'], array_keys($Dd1fc530420a7bf3))) {
				goto label1766;
			}

			$Dd1fc530420a7bf3[$e61e6dcee1252fa2['@attributes']['parentIndex']] = $e61e6dcee1252fa2['@attributes']['originallyAvailableAt'];

			label1766:
		}

		foreach ($A29d8a2356bd9140 as $Bb9fda5ebf825f11) {
			if (!$Bb9fda5ebf825f11['@attributes']['index']) {
				goto label1833;
			}

			$da347709f6cb60f4 = NULL;

			if (!$Bb9fda5ebf825f11['@attributes']['thumb']) {
				goto label1803;
			}

			$f22c03cec8ad9f56 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/photo/:/transcode?width=300&height=450&minSize=1&quality=100&upscale=1&url=' . $Bb9fda5ebf825f11['@attributes']['thumb'] . '&X-Plex-Token=' . $b036a2bf442dddad['token'];
			$da347709f6cb60f4 = XUI::ccceE53491f4Af9C($f22c03cec8ad9f56);

			label1803:

			$Eaa4da8f4690ffe5[] = ['name' => $Bb9fda5ebf825f11['@attributes']['title'], 'air_date' => $Dd1fc530420a7bf3[$Bb9fda5ebf825f11['@attributes']['index']] ?: '', 'overview' => trim($b9bb8f475c84b5be['@attributes']['summary']) ?: '', 'cover_big' => $da347709f6cb60f4, 'cover' => $da347709f6cb60f4, 'episode_count' => $Bb9fda5ebf825f11['@attributes']['leafCount'], 'season_number' => $Bb9fda5ebf825f11['@attributes']['index'], 'id' => $Bb9fda5ebf825f11['@attributes']['ratingKey']];

			label1833:
		}

		goto label1310;

		label1837:

		foreach ($D8329ce54de87aa5 as $e61e6dcee1252fa2) {
			goto label2016;

			label1842:

			$Dd41a39d4bb950cf['transcode_profile_id'] = $b036a2bf442dddad['transcode_profile_id'];

			if ($b036a2bf442dddad['direct_proxy']) {
				goto label2312;
			}

			$Dd41a39d4bb950cf['stream_source'] = $fda35c5a7025b7ea;
			$Dd41a39d4bb950cf['direct_source'] = 0;
			$Dd41a39d4bb950cf['direct_proxy'] = 0;
			goto label2309;

			label1859:

			$Dd41a39d4bb950cf['target_container'] = pathinfo($E9b1fd38e68414a7['file'])['extension'];
			goto label1872;

			label1869:

			$Dd41a39d4bb950cf['target_container'] = $b036a2bf442dddad['target_container'];

			label1872:

			goto label1979;

			label1875:

			$b62d6460eb33ea07->query('INSERT INTO `streams_episodes`(`season_num`, `series_id`, `stream_id`, `episode_num`) VALUES(?, ?, ?, ?);', $aeca783a7d194e9a, $d02ef9ae10a41939['id'], $E5b50d60c471d7d6, $ec5c07d724bec80c);

			if (!$b036a2bf442dddad['auto_encode']) {
				goto label2405;
			}

			foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
				XUI::queueMovie($E5b50d60c471d7d6, $C082ca9ed03f473c);
			}

			goto label2405;

			label1900:

			$Dd41a39d4bb950cf['movie_properties'] = [
				'tmdb_id'       => $d02ef9ae10a41939['tmdb_id'] ?: NULL,
				'release_date'  => $e61e6dcee1252fa2['@attributes']['originallyAvailableAt'],
				'plot'          => $e61e6dcee1252fa2['@attributes']['summary'],
				'duration_secs' => $d03052828cab569a,
				'duration'      => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
				'movie_image'   => $Df7b5971cf1d6194,
				'video'         => [],
				'audio'         => [],
				'bitrate'       => 0,
				'rating'        => floatval($e61e6dcee1252fa2['@attributes']['rating']) ?: floatval($e61e6dcee1252fa2['@attributes']['audienceRating']) ?: $d02ef9ae10a41939['rating'],
				'season'        => $aeca783a7d194e9a
			];
			$Dd41a39d4bb950cf['stream_display_name'] = $d02ef9ae10a41939['title'] . ' - S' . sprintf('%02d', intval($aeca783a7d194e9a)) . 'E' . sprintf('%02d', $ec5c07d724bec80c) . ' - ' . $e61e6dcee1252fa2['@attributes']['title'];
			$Dd41a39d4bb950cf['read_native'] = $b036a2bf442dddad['read_native'];
			$Dd41a39d4bb950cf['movie_symlink'] = $b036a2bf442dddad['movie_symlink'];
			$Dd41a39d4bb950cf['remove_subtitles'] = $b036a2bf442dddad['remove_subtitles'];
			goto label1842;

			label1979:

			if (!empty($Dd41a39d4bb950cf['target_container'])) {
				goto label1987;
			}

			$Dd41a39d4bb950cf['target_container'] = 'mp4';

			label1987:

			if (!($a10de9fbe1c0cb61 = getEpisode($b036a2bf442dddad['uuid'], $b036a2bf442dddad['check_tmdb'] ? $D7f17b03d6498825 : NULL, $aeca783a7d194e9a, $ec5c07d724bec80c))) {
				goto label2079;
			}

			if (!($a10de9fbe1c0cb61['source'] == $E9b1fd38e68414a7['file'])) {
				goto label2155;
			}

			goto label2151;

			label2016:
			if (!($e61e6dcee1252fa2['@attributes']['parentIndex'] && $e61e6dcee1252fa2['@attributes']['index'])) {
				goto label2321;
			}

			$E843e202743c8a9e = NULL;
			$aeca783a7d194e9a = $e61e6dcee1252fa2['@attributes']['parentIndex'];
			$ec5c07d724bec80c = $e61e6dcee1252fa2['@attributes']['index'];
			$E9b1fd38e68414a7 = ['file' => NULL, 'size' => NULL, 'data' => NULL, 'key' => NULL];
			goto label2324;

			label2038:

			$Dd41a39d4bb950cf['series_no'] = $d02ef9ae10a41939['id'];
			$Fac87d38f7786df0 = c483a3a59265139e($Dd41a39d4bb950cf);
			$B91645b8411dc88c = 'REPLACE INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if ($b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label2136;
			}

			echo 'Insert failed!' . "\n";
			goto label2122;

			label2065:

			$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 6, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($E9b1fd38e68414a7['file']));
			goto label2321;

			label2079:

			$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE `filename` = ? AND `type` = ? AND `server_id` = ?;', utf8_decode($E9b1fd38e68414a7['file']), $d3f731f42044395a, SERVER_ID);
			$Df7b5971cf1d6194 = NULL;
			goto label2274;

			label2094:

			goto label2321;

			label2097:

			echo 'Upgrade episode!' . "\n";
			$b62d6460eb33ea07->query('UPDATE `streams` SET `plex_uuid` = ?, `stream_source` = ?, `target_container` = ? WHERE `id` = ?;', $b036a2bf442dddad['uuid'], $Dd41a39d4bb950cf['stream_source'], $Dd41a39d4bb950cf['target_container'], $a10de9fbe1c0cb61['id']);

			foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
				$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = NULL, `current_source` = NULL, `to_analyze` = 0, `pid` = NULL, `stream_started` = NULL, `stream_info` = NULL, `compatible` = 0, `video_codec` = NULL, `audio_codec` = NULL, `resolution` = NULL, `stream_status` = 0 WHERE `stream_id` = ? AND `server_id` = ?', $a10de9fbe1c0cb61['id'], $C082ca9ed03f473c);
			}

			goto label2214;

			label2122:

			$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 2, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($E9b1fd38e68414a7['file']));
			goto label2417;

			label2136:

			$E5b50d60c471d7d6 = $b62d6460eb33ea07->last_insert_id();

			foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
				$b62d6460eb33ea07->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`) VALUES(?, ?, NULL);', $E5b50d60c471d7d6, $C082ca9ed03f473c);
			}

			goto label1875;

			label2151:

			echo 'File remains unchanged' . "\n";
			goto label2321;

			label2155:

			if ($b036a2bf442dddad['auto_upgrade']) {
				goto label2097;
			}

			echo 'Upgrade disabled' . "\n";
			goto label2094;

			label2164:

			$fda35c5a7025b7ea = json_encode(['s:' . SERVER_ID . ':' . $E9b1fd38e68414a7['file']], JSON_UNESCAPED_UNICODE);
			$E75286ab211f4201 = json_encode(['http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . $E9b1fd38e68414a7['key'] . '?X-Plex-Token=' . $b036a2bf442dddad['token']], JSON_UNESCAPED_UNICODE);
			if (!in_array($fda35c5a7025b7ea, $Cc94312f13005bd4) && !in_array($E75286ab211f4201, $Cc94312f13005bd4)) {
				goto label2254;
			}

			echo 'Already exists!' . "\n";
			goto label2251;

			label2214:

			if (!$b036a2bf442dddad['auto_encode']) {
				goto label2229;
			}

			foreach ($Bcf70cba56392975 as $C082ca9ed03f473c) {
				XUI::queueMovie($a10de9fbe1c0cb61['id'], $C082ca9ed03f473c);
			}

			label2229:

			goto label2065;

			label2232:

			goto label2245;

			label2235:

			$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 5, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($E843e202743c8a9e));

			label2245:

			goto label2417;
			goto label2164;

			label2251:

			goto label2417;

			label2254:

			$Cc94312f13005bd4[] = $fda35c5a7025b7ea;
			$Cc94312f13005bd4[] = $E75286ab211f4201;
			if (($b036a2bf442dddad['target_container'] != 'auto') && $b036a2bf442dddad['target_container'] && !$b036a2bf442dddad['direct_proxy']) {
				goto label1869;
			}

			goto label1859;

			label2274:

			if (!$e61e6dcee1252fa2['@attributes']['thumb']) {
				goto label2299;
			}

			$f22c03cec8ad9f56 = 'http://' . $b036a2bf442dddad['ip'] . ':' . $b036a2bf442dddad['port'] . '/photo/:/transcode?width=450&height=253&minSize=1&quality=100&upscale=1&url=' . $e61e6dcee1252fa2['@attributes']['thumb'] . '&X-Plex-Token=' . $b036a2bf442dddad['token'];
			$Df7b5971cf1d6194 = XUI::CCCeE53491F4AF9C($f22c03cec8ad9f56);

			label2299:

			$d03052828cab569a = intval($e61e6dcee1252fa2['@attributes']['duration'] / 1000);
			goto label1900;

			label2309:

			goto label2420;

			label2312:

			$Dd41a39d4bb950cf['stream_source'] = $E75286ab211f4201;
			$Dd41a39d4bb950cf['direct_source'] = 1;
			$Dd41a39d4bb950cf['direct_proxy'] = 1;
			goto label2420;

			label2321:

			goto label2436;

			label2324:

			foreach (makeArray($e61e6dcee1252fa2['Media']) as $bb77f29082f7d6e6) {
				if ($E843e202743c8a9e) {
					goto label2339;
				}

				$E843e202743c8a9e = $bb77f29082f7d6e6['Part']['@attributes']['file'];

				label2339:
				if (!(!$E9b1fd38e68414a7['size'] || ($E9b1fd38e68414a7['size'] < intval($bb77f29082f7d6e6['Part']['@attributes']['size'])))) {
					goto label2389;
				}
				if (!(file_exists($bb77f29082f7d6e6['Part']['@attributes']['file']) || $b036a2bf442dddad['direct_proxy'])) {
					goto label2389;
				}

				$E9b1fd38e68414a7 = ['file' => $bb77f29082f7d6e6['Part']['@attributes']['file'], 'size' => intval($bb77f29082f7d6e6['Part']['@attributes']['size']), 'data' => $bb77f29082f7d6e6, 'key' => $bb77f29082f7d6e6['Part']['@attributes']['key']];

				label2389:
			}

			if (!empty($E9b1fd38e68414a7['file'])) {
				goto label2164;
			}

			if ($E843e202743c8a9e) {
				goto label2235;
			}

			exit();
			goto label2232;

			label2405:

			$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 1, ?);', $d3f731f42044395a, SERVER_ID, utf8_decode($E9b1fd38e68414a7['file']), $E5b50d60c471d7d6);

			label2417:

			goto label2321;

			label2420:

			$Dd41a39d4bb950cf['order'] = aDD0B2C53B2714a1();
			$Dd41a39d4bb950cf['tmdb_language'] = $rLanguage;
			$Dd41a39d4bb950cf['added'] = time();
			$Dd41a39d4bb950cf['uuid'] = $b036a2bf442dddad['uuid'];
			goto label2038;

			label2436:
		}

		goto label2549;
		goto label2548;

		label2442:

		$E5b50d60c471d7d6 = $b62d6460eb33ea07->last_insert_id();
		$d02ef9ae10a41939 = a2297542D8bD35F6($E5b50d60c471d7d6);

		foreach ($C85af697f0731d8b as $f155fef57262b32a) {
			B8B65E8cB6A1dfE9('series', $f155fef57262b32a, $E5b50d60c471d7d6);
		}

		goto label1837;

		label2460:

		if (!(count($C85af697f0731d8b) == 0)) {
			goto label1672;
		}

		if (0 < $b036a2bf442dddad['max_genres']) {
			goto label2480;
		}

		$f981dd0e5ffffa8c = makeArray($b9bb8f475c84b5be['Genre']);
		goto label1642;

		label2480:

		goto label1631;

		label2482:

		if (!(count($C85af697f0731d8b) == 0)) {
			goto label2500;
		}

		$C85af697f0731d8b = array_map('intval', json_decode($b036a2bf442dddad['fb_bouquets'], true));

		label2500:

		if (!(count($F05acfe4a87b8eb0) == 0)) {
			goto label1223;
		}

		$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 3, 0);', $d3f731f42044395a, SERVER_ID, 'Plex Series: ' . utf8_decode($e789f71986a63dfb['title']));
		goto label1222;

		label2522:

		$e789f71986a63dfb['genre'] = implode(', ', $Bbe4c2a2b1efd5b2);

		if (!(count($F05acfe4a87b8eb0) == 0)) {
			goto label1492;
		}

		if (0 < $b036a2bf442dddad['max_genres']) {
			goto label1556;
		}

		$f981dd0e5ffffa8c = makeArray($b9bb8f475c84b5be['Genre']);
		goto label1554;
	}

	label2548:

	label2549:

	goto label2609;

	label2550:

	$Dd41a39d4bb950cf = c73eD8D0b70CE12f('streams');
	$Dd41a39d4bb950cf['type'] = ['movie' => 2, 'show' => 5][$b036a2bf442dddad['type']];

	if ($Dd41a39d4bb950cf['type']) {
		goto label2562;
	}

	exit();

	label2562:

	goto label15;

	label2563:

	global $b62d6460eb33ea07;
	global $b036a2bf442dddad;
	global $Cc94312f13005bd4;
	$Bcf70cba56392975 = [SERVER_ID];

	if (empty($b036a2bf442dddad['server_add'])) {
		goto label1;
	}

	foreach (json_decode($b036a2bf442dddad['server_add'], true) as $C082ca9ed03f473c) {
		$Bcf70cba56392975[] = intval($C082ca9ed03f473c);
	}

	goto label1;

	label2587:

	if (!(0 < count(json_decode($b036a2bf442dddad['bouquets'], true)))) {
		goto label2605;
	}

	$C85af697f0731d8b = json_decode($b036a2bf442dddad['bouquets'], true);

	label2605:

	$rLanguage = NULL;
	$Cb61bff653722624 = $b036a2bf442dddad['plex_categories'];
	goto label2550;

	label2609:
}

function getMovie($d646ff8e6c81b7df, $D7f17b03d6498825)
{
	if (file_exists(WATCH_TMP_PATH . 'movie_' . $d646ff8e6c81b7df . '.pcache')) {
		goto label34;
	}

	if (!file_exists(WATCH_TMP_PATH . 'movie_' . $D7f17b03d6498825 . '.pcache')) {
		goto label33;
	}

	return json_decode(file_get_contents(WATCH_TMP_PATH . 'movie_' . $D7f17b03d6498825 . '.pcache'), true);

	label33:

	goto label46;

	label34:

	return json_decode(file_get_contents(WATCH_TMP_PATH . 'movie_' . $d646ff8e6c81b7df . '.pcache'), true);

	label46:

	return NULL;
}

function getEpisode($d646ff8e6c81b7df, $D7f17b03d6498825, $Bb9fda5ebf825f11, $e61e6dcee1252fa2)
{
	goto label38;

	label5:

	if (!file_exists(WATCH_TMP_PATH . 'series_' . $D7f17b03d6498825 . '.pcache')) {
		goto label71;
	}

	$ba2d146bb5a55097 = json_decode(file_get_contents(WATCH_TMP_PATH . 'series_' . $D7f17b03d6498825 . '.pcache'), true);

	if (!isset($ba2d146bb5a55097[$Bb9fda5ebf825f11 . '_' . $e61e6dcee1252fa2])) {
		goto label71;
	}

	return $ba2d146bb5a55097[$Bb9fda5ebf825f11 . '_' . $e61e6dcee1252fa2];
	goto label71;

	label38:

	if (!file_exists(WATCH_TMP_PATH . 'series_' . $d646ff8e6c81b7df . '.pcache')) {
		goto label5;
	}

	$ba2d146bb5a55097 = json_decode(file_get_contents(WATCH_TMP_PATH . 'series_' . $d646ff8e6c81b7df . '.pcache'), true);

	if (!isset($ba2d146bb5a55097[$Bb9fda5ebf825f11 . '_' . $e61e6dcee1252fa2])) {
		goto label70;
	}

	return $ba2d146bb5a55097[$Bb9fda5ebf825f11 . '_' . $e61e6dcee1252fa2];

	label70:

	goto label5;

	label71:

	return NULL;
	goto label73;

	label73:
}

function addCategory($A7d54b094ae83c95, $Eecd08117295a068)
{
	file_put_contents(WATCH_TMP_PATH . md5($A7d54b094ae83c95 . '_' . $Eecd08117295a068) . '.pcat', json_encode(['type' => $A7d54b094ae83c95, 'title' => $Eecd08117295a068]));
}

function readURL($A7ca171405b19571)
{
	$Daaec03d386c8f6a = curl_init($A7ca171405b19571);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_TIMEOUT, 10);
	return curl_exec($Daaec03d386c8f6a);
}

function makeArray($F647a429f8089f01)
{
	if (!isset($F647a429f8089f01['@attributes'])) {
		goto label7;
	}

	$F647a429f8089f01 = [$F647a429f8089f01];

	label7:

	return $F647a429f8089f01;
}

function C73Ed8d0B70ce12F($b5a93f3474101e1f, $ba2d146bb5a55097 = [], $ed6a5662734f48dc = false)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `column_name`, `column_default`, `is_nullable`, `data_type` FROM `information_schema`.`columns` WHERE `table_schema` = (SELECT DATABASE()) AND `table_name` = ? ORDER BY `ordinal_position`;', $b5a93f3474101e1f);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label60;

		label15:

		goto label112;

		label17:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = $Fb9da1713bff19ce['column_default'];

		label21:

		goto label15;

		label23:
		if (empty($ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']]) && !is_numeric($ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']]) && is_null($Fb9da1713bff19ce['column_default'])) {
			goto label102;
		}

		goto label95;

		label44:

		if (in_array($Fb9da1713bff19ce['data_type'], ['int', 'float', 'tinyint', 'double', 'decimal', 'smallint', 'mediumint', 'bigint', 'bit'])) {
			goto label56;
		}

		$Fb9da1713bff19ce['column_default'] = '';
		goto label81;

		label56:

		$Fb9da1713bff19ce['column_default'] = 0;
		goto label81;

		label60:

		if (!($Fb9da1713bff19ce['column_default'] == 'NULL')) {
			goto label68;
		}

		$Fb9da1713bff19ce['column_default'] = NULL;

		label68:

		$F970ffb77cdacc94 = false;
		if (!(($Fb9da1713bff19ce['is_nullable'] == 'NO') && !$Fb9da1713bff19ce['column_default'])) {
			goto label82;
		}

		goto label44;

		label81:

		$F970ffb77cdacc94 = true;

		label82:

		if (array_key_exists($Fb9da1713bff19ce['column_name'], $ba2d146bb5a55097)) {
			goto label23;
		}

		if ($ed6a5662734f48dc) {
			goto label21;
		}

		goto label17;

		label95:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = $ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']];
		goto label110;

		label102:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = ($F970ffb77cdacc94 ? $Fb9da1713bff19ce['column_default'] : NULL);

		label110:

		goto label15;

		label112:
	}

	return $B9869413eae86beb;
}

function getSeriesByID($d646ff8e6c81b7df, $D7f17b03d6498825)
{
	goto label3;

	label3:

	global $b62d6460eb33ea07;
	if (!(file_exists(WATCH_TMP_PATH . 'series_' . $d646ff8e6c81b7df . '.data') && ((time() - filemtime(WATCH_TMP_PATH . 'series_' . $d646ff8e6c81b7df . '.data')) < 360))) {
		goto label39;
	}

	return json_decode(file_get_contents(WATCH_TMP_PATH . 'series_' . $d646ff8e6c81b7df . '.data'), true);

	label39:
	if (!(file_exists(WATCH_TMP_PATH . 'series_' . intval($D7f17b03d6498825) . '.data') && ((time() - filemtime(WATCH_TMP_PATH . 'series_' . intval($D7f17b03d6498825) . '.data')) < 360))) {
		goto label86;
	}

	goto label71;

	label69:

	return NULL;
	goto label101;

	label71:

	return json_decode(file_get_contents(WATCH_TMP_PATH . 'series_' . intval($D7f17b03d6498825) . '.data'), true);

	label86:

	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `plex_uuid` = ? OR `tmdb_id` = ?;', $d646ff8e6c81b7df, $D7f17b03d6498825);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label69;
	}

	return $b62d6460eb33ea07->get_row();
	goto label69;

	label101:
}

function A2297542d8bD35F6($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function ADD0b2c53B2714a1()
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT MAX(`order`) AS `order` FROM `streams`;');

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label19;
	}

	return intval($b62d6460eb33ea07->get_row()['order']) + 1;

	label19:

	return 0;
}

function B8b65e8cb6a1dFe9($A7d54b094ae83c95, $b5fd3e3f0096d7f4, $Abcb228699a7f743)
{
	global $b036a2bf442dddad;
	file_put_contents(WATCH_TMP_PATH . md5($b036a2bf442dddad['uuid'] . '_' . $b036a2bf442dddad['key'] . '_' . $A7d54b094ae83c95 . '_' . $b5fd3e3f0096d7f4 . '_' . $Abcb228699a7f743) . '.pbouquet', json_encode(['type' => $A7d54b094ae83c95, 'bouquet_id' => $b5fd3e3f0096d7f4, 'id' => $Abcb228699a7f743]));
}

function shutdown()
{
	global $b62d6460eb33ea07;

	if (!is_object($b62d6460eb33ea07)) {
		goto label9;
	}

	$b62d6460eb33ea07->close_mysql();

	label9:

	@unlink(WATCH_TMP_PATH . getmypid() . '.ppid');
}

goto label67;

label1:

Ed8dBF4549416Fa2();
goto label124;

label4:

file_put_contents(WATCH_TMP_PATH . getmypid() . '.ppid', time());

if ($b036a2bf442dddad['type'] == 'movie') {
	goto label21;
}

$F7379362daea673f = 600;
goto label58;

label21:

goto label57;

label22:

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(30711);
goto label93;

label36:

if (@$argc) {
	goto label42;
}

exit(0);

label42:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
goto label22;

label57:

$F7379362daea673f = 60;

label58:

set_time_limit($F7379362daea673f);
ini_set('max_execution_time', $F7379362daea673f);
goto label1;

label67:

setlocale(LC_ALL, 'en_US.UTF-8');
putenv('LC_ALL=en_US.UTF-8');

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label86;
}

exit('Please run as XUI!' . "\n");

label86:

goto label36;

label87:

goto label99;

label93:

goto label87;

label99:

$Cc94312f13005bd4 = json_decode(file_get_contents(WATCH_TMP_PATH . 'stream_database.pcache'), true) ?: [];
$b036a2bf442dddad = json_decode(base64_decode($argv[1]), true);

if ($b036a2bf442dddad) {
	goto label123;
}

exit();

label123:

goto label4;

label124:

?>