<?php


function b8B65E8cB6A1DfE9($A7d54b094ae83c95, $b5fd3e3f0096d7f4, $Abcb228699a7f743)
{
	goto label12;

	label4:

	goto label6;

	label5:

	$E8d2f47901b176c3 = 'bouquet_movies';

	label6:

	goto label60;
	goto label59;

	label8:

	$E8d2f47901b176c3 = 'bouquet_series';
	goto label11;

	label10:

	$E8d2f47901b176c3 = 'bouquet_radios';

	label11:

	goto label4;

	label12:

	global $b62d6460eb33ea07;
	global $b036a2bf442dddad;

	if ($b036a2bf442dddad['import']) {
		goto label41;
	}

	file_put_contents(WATCH_TMP_PATH . md5($b036a2bf442dddad['file'] . '_' . $A7d54b094ae83c95 . '_' . $b5fd3e3f0096d7f4 . '_' . $Abcb228699a7f743) . '.bouquet', json_encode(['type' => $A7d54b094ae83c95, 'bouquet_id' => $b5fd3e3f0096d7f4, 'id' => $Abcb228699a7f743]));
	goto label111;

	label41:

	goto label42;

	label42:

	$f155fef57262b32a = b47fB5320E43f112($b5fd3e3f0096d7f4);

	if (!$f155fef57262b32a) {
		goto label111;
	}

	if ($A7d54b094ae83c95 == 'stream') {
		goto label59;
	}

	if ($A7d54b094ae83c95 == 'movie') {
		goto label5;
	}

	if ($A7d54b094ae83c95 == 'radio') {
		goto label10;
	}

	goto label8;

	label59:

	$E8d2f47901b176c3 = 'bouquet_channels';

	label60:

	$A5a4a57a12bb19b3 = confirmIDs(json_decode($f155fef57262b32a[$E8d2f47901b176c3], true));
	if (!((0 < intval($Abcb228699a7f743)) && !in_array($Abcb228699a7f743, $A5a4a57a12bb19b3))) {
		goto label110;
	}

	goto label84;

	label84:

	$A5a4a57a12bb19b3[] = $Abcb228699a7f743;

	if (!(0 < count($A5a4a57a12bb19b3))) {
		goto label110;
	}

	$b62d6460eb33ea07->query('UPDATE `bouquets` SET `' . $E8d2f47901b176c3 . '` = ? WHERE `id` = ?;', '[' . implode(',', array_map('intval', $A5a4a57a12bb19b3)) . ']', $b5fd3e3f0096d7f4);

	label110:

	goto label111;

	label111:

	goto label112;

	label112:
}

function a891e68753730298($Effb0ac2c5e5cfd3, $A7d54b094ae83c95 = 'guessit')
{
	if ($A7d54b094ae83c95 == 'guessit') {
		goto label19;
	}

	$C6671ac66a4f1c57 = '/usr/bin/python3 ' . XUI_HOME . 'includes/python/release.py ' . escapeshellarg(str_replace('-', '_', $Effb0ac2c5e5cfd3));
	goto label27;

	label19:

	$C6671ac66a4f1c57 = XUI_HOME . 'bin/guess ' . escapeshellarg($Effb0ac2c5e5cfd3 . '.mkv');

	label27:

	return json_decode(shell_exec($C6671ac66a4f1c57), true);
}

function getMovie($D7f17b03d6498825)
{
	if (!file_exists(WATCH_TMP_PATH . 'movie_' . $D7f17b03d6498825 . '.cache')) {
		goto label23;
	}

	return json_decode(file_get_contents(WATCH_TMP_PATH . 'movie_' . $D7f17b03d6498825 . '.cache'), true);

	label23:

	return NULL;
}

function getEpisode($D7f17b03d6498825, $Bb9fda5ebf825f11, $e61e6dcee1252fa2)
{
	if (!file_exists(WATCH_TMP_PATH . 'series_' . $D7f17b03d6498825 . '.cache')) {
		goto label35;
	}

	$ba2d146bb5a55097 = json_decode(file_get_contents(WATCH_TMP_PATH . 'series_' . $D7f17b03d6498825 . '.cache'), true);

	if (!isset($ba2d146bb5a55097[$Bb9fda5ebf825f11 . '_' . $e61e6dcee1252fa2])) {
		goto label35;
	}

	return $ba2d146bb5a55097[$Bb9fda5ebf825f11 . '_' . $e61e6dcee1252fa2];

	label35:

	return NULL;
}

function parseTitle($b87030f28ff32396)
{
	return strtolower(preg_replace('/(?![.=$\'€%-])\\p{P}/u', '', $b87030f28ff32396));
}

function dDA34be3370cDFB2($D7f17b03d6498825, $rLanguage = NULL)
{
	goto label29;

	label3:

	foreach ($F36e7d4d6716c100['results'] as $Ad03ea8872dcd56e) {
		if (!((strtolower($Ad03ea8872dcd56e['type']) == 'trailer') && (strtolower($Ad03ea8872dcd56e['site']) == 'youtube'))) {
			goto label25;
		}

		return $Ad03ea8872dcd56e['key'];

		label25:
	}

	return '';
	goto label75;

	label29:

	$A7ca171405b19571 = 'https://api.themoviedb.org/3/tv/' . intval($D7f17b03d6498825) . '/videos?api_key=' . urlencode(XUI::$rSettings['tmdb_api_key']);

	if ($rLanguage) {
		goto label61;
	}

	if (!(0 < strlen(XUI::$rSettings['tmdb_language']))) {
		goto label59;
	}

	$A7ca171405b19571 .= '&language=' . urlencode(XUI::$rSettings['tmdb_language']);

	label59:

	goto label60;

	label60:

	goto label66;

	label61:

	$A7ca171405b19571 .= '&language=' . urlencode($rLanguage);

	label66:

	$F36e7d4d6716c100 = json_decode(file_get_contents($A7ca171405b19571), true);
	goto label3;

	label75:
}

function A2297542d8BD35f6($Abcb228699a7f743)
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

function add0B2C53b2714a1()
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

function confirmIDs($Fe53bcd53690fff4)
{
	$B9869413eae86beb = [];

	foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
		if (!(0 < intval($Abcb228699a7f743))) {
			goto label14;
		}

		$B9869413eae86beb[] = $Abcb228699a7f743;

		label14:
	}

	return $B9869413eae86beb;
}

function b47fb5320E43F112($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$b62d6460eb33ea07->query('SELECT * FROM `bouquets` WHERE `id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label15;
	}

	return $b62d6460eb33ea07->get_row();

	label15:

	return NULL;
}

function eD8dbf4549416fa2()
{
	goto label2557;

	label1:

	$Fac87d38f7786df0 = C483A3a59265139E($e789f71986a63dfb);
	$B91645b8411dc88c = 'INSERT INTO `streams_series`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

	if ($b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
		goto label2645;
	}

	$d02ef9ae10a41939 = NULL;
	goto label2807;
	goto label2645;

	label22:

	$d9dcd83f7e8608ec[$aeca783a7d194e9a . '_' . $ec5c07d724bec80c] = ['id' => $a10de9fbe1c0cb61['id'], 'source' => 's:' . SERVER_ID . ':' . $D6be258a9043b749];
	file_put_contents(WATCH_TMP_PATH . 'series_' . $f7cd7a19c0a73464->get('id') . '.cache', json_encode($d9dcd83f7e8608ec));
	exit();

	label48:

	goto label1719;

	label49:
	if (!($f7cd7a19c0a73464 && !$b036a2bf442dddad['import'])) {
		goto label76;
	}

	file_put_contents(WATCH_TMP_PATH . 'movie_' . $f7cd7a19c0a73464->get('id') . '.cache', json_encode(['id' => $E5b50d60c471d7d6, 'source' => 's:' . SERVER_ID . ':' . $D6be258a9043b749]));

	label76:

	foreach ($C85af697f0731d8b as $f155fef57262b32a) {
		b8b65e8cb6a1dfe9('movie', $f155fef57262b32a, $E5b50d60c471d7d6);
	}

	goto label2862;

	label86:

	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 2, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
	exit();
	goto label2861;

	label98:

	$E5b50d60c471d7d6 = $b62d6460eb33ea07->last_insert_id();
	goto label2140;

	label102:

	$b94ebc07efbe2e00 = fopen(WATCH_TMP_PATH . 'lock_' . intval($b9bb8f475c84b5be['id']), 'w');

	label114:

	if (flock($b94ebc07efbe2e00, LOCK_EX)) {
		goto label191;
	}

	usleep(100000);
	goto label114;
	goto label191;

	label126:
	if (!((count($F05acfe4a87b8eb0) == 0) && !empty($b036a2bf442dddad['fb_category_id']))) {
		goto label2474;
	}

	if (is_array($b036a2bf442dddad['fb_category_id'])) {
		goto label150;
	}

	$F05acfe4a87b8eb0 = [intval($b036a2bf442dddad['fb_category_id'])];
	goto label2474;

	label150:

	goto label2468;

	label151:

	if (!$b036a2bf442dddad['auto_encode']) {
		goto label159;
	}

	XUI::queueMovie($a10de9fbe1c0cb61['id']);

	label159:

	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 6, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
	file_put_contents(WATCH_TMP_PATH . 'movie_' . $f7cd7a19c0a73464->get('id') . '.cache', json_encode(['id' => $a10de9fbe1c0cb61['id'], 'source' => 's:' . SERVER_ID . ':' . $D6be258a9043b749]));
	goto label636;

	label191:

	fwrite($b94ebc07efbe2e00, time());
	$Eaa4da8f4690ffe5 = [];

	foreach ($b9bb8f475c84b5be['seasons'] as $Bb9fda5ebf825f11) {
		$Bb9fda5ebf825f11['cover'] = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $Bb9fda5ebf825f11['poster_path'];

		if (!XUI::$rSettings['download_images']) {
			goto label218;
		}

		$Bb9fda5ebf825f11['cover'] = XUI::CcceE53491F4AF9C($Bb9fda5ebf825f11['cover'], 2);

		label218:

		$Bb9fda5ebf825f11['cover_big'] = $Bb9fda5ebf825f11['cover'];
		unset($Bb9fda5ebf825f11['poster_path']);
		$Eaa4da8f4690ffe5[] = $Bb9fda5ebf825f11;
	}

	goto label547;

	label227:

	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 4, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
	exit();
	goto label593;

	label239:

	$C85af697f0731d8b = [];
	goto label2932;

	label241:

	$Dd41a39d4bb950cf['stream_display_name'] = $b87030f28ff32396 . ' - S' . sprintf('%02d', intval($aeca783a7d194e9a)) . 'E' . sprintf('%02d', $ec5c07d724bec80c) . ' - ';

	label259:

	goto label1798;

	label260:

	$Dd41a39d4bb950cf['stream_display_name'] = $b87030f28ff32396;
	goto label1793;

	label263:

	foreach ($f981dd0e5ffffa8c as $cb7c230a28039130) {
		$Df5cd7b5dc4cc10c = json_decode($Fd57b4ec233184cb[2][intval($cb7c230a28039130['id'])]['bouquets'], true);

		foreach ($Df5cd7b5dc4cc10c as $b5fd3e3f0096d7f4) {
			if (in_array($b5fd3e3f0096d7f4, $C85af697f0731d8b)) {
				goto label289;
			}

			$C85af697f0731d8b[] = $b5fd3e3f0096d7f4;

			label289:
		}
	}

	label293:
	if (!((count($F05acfe4a87b8eb0) == 0) && !empty($b036a2bf442dddad['fb_category_id']))) {
		goto label2388;
	}

	if (is_array($b036a2bf442dddad['fb_category_id'])) {
		goto label2420;
	}

	goto label2413;

	label311:

	$Dd41a39d4bb950cf['tmdb_id'] = $d2cbe962ad971030['id'] ?: NULL;
	$Dd41a39d4bb950cf['movie_properties'] = [
		'kinopoisk_url'          => 'https://www.themoviedb.org/movie/' . $d2cbe962ad971030['id'],
		'tmdb_id'                => $d2cbe962ad971030['id'],
		'name'                   => $d2cbe962ad971030['title'],
		'o_name'                 => $d2cbe962ad971030['original_title'],
		'cover_big'              => $Df7b5971cf1d6194,
		'movie_image'            => $Df7b5971cf1d6194,
		'release_date'           => $d2cbe962ad971030['release_date'],
		'episode_run_time'       => $d2cbe962ad971030['runtime'],
		'youtube_trailer'        => $d2cbe962ad971030['trailer'],
		'director'               => implode(', ', $Ddc486c18cb21e76),
		'actors'                 => implode(', ', $d5d6bbc743dab4c0),
		'cast'                   => implode(', ', $d5d6bbc743dab4c0),
		'description'            => $d2cbe962ad971030['overview'],
		'plot'                   => $d2cbe962ad971030['overview'],
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
		'rating'                 => $d2cbe962ad971030['vote_average']
	];
	$Dd41a39d4bb950cf['rating'] = $Dd41a39d4bb950cf['movie_properties']['rating'] ?: 0;
	$Dd41a39d4bb950cf['read_native'] = $b036a2bf442dddad['read_native'];
	goto label530;

	label392:

	$d2cbe962ad971030 = json_decode($Bf508e08aecfc95f->getJSON(), true);
	$d2cbe962ad971030['trailer'] = $Bf508e08aecfc95f->getTrailer();
	$Df7b5971cf1d6194 = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $d2cbe962ad971030['poster_path'];
	$A0232f15a223f0e1 = 'https://image.tmdb.org/t/p/w1280' . $d2cbe962ad971030['backdrop_path'];

	if (!XUI::$rSettings['download_images']) {
		goto label486;
	}

	goto label478;

	label415:

	exit();

	label416:
	if (!file_exists($c63ff1f61d9bee90) || (filesize($c63ff1f61d9bee90) < filesize($D6be258a9043b749))) {
		goto label2311;
	}

	echo 'File isn\'t a better source, don\'t upgrade.' . "\n";
	exit();
	goto label2310;

	label434:

	if (!$b036a2bf442dddad['subtitles']) {
		goto label441;
	}

	$Dd41a39d4bb950cf['movie_subtitles'] = $b036a2bf442dddad['subtitles'];

	label441:

	goto label2364;

	label442:

	$Ddc486c18cb21e76 = [];

	foreach ($d2cbe962ad971030['credits']['crew'] as $efdfec64a4041aa6) {
		if (!((count($Ddc486c18cb21e76) < 5) && (($efdfec64a4041aa6['department'] == 'Directing') || ($efdfec64a4041aa6['known_for_department'] == 'Directing')) && !in_array($efdfec64a4041aa6['name'], $Ddc486c18cb21e76))) {
			goto label474;
		}

		$Ddc486c18cb21e76[] = $efdfec64a4041aa6['name'];

		label474:
	}

	$b8f81a9f6e93f6a9 = '';
	goto label2524;

	label478:

	$Df7b5971cf1d6194 = XUI::cCcEe53491F4aF9c($Df7b5971cf1d6194);
	$A0232f15a223f0e1 = XUI::cccEe53491f4aF9c($A0232f15a223f0e1);

	label486:

	$d5d6bbc743dab4c0 = [];

	foreach ($d2cbe962ad971030['credits']['cast'] as $efdfec64a4041aa6) {
		if (!(count($d5d6bbc743dab4c0) < 5)) {
			goto label502;
		}

		$d5d6bbc743dab4c0[] = $efdfec64a4041aa6['name'];

		label502:
	}

	goto label442;

	label505:

	$e789f71986a63dfb['genre'] = implode(', ', $Bbe4c2a2b1efd5b2);
	$e789f71986a63dfb['episode_run_time'] = intval($b9bb8f475c84b5be['episode_run_time'][0]);

	if (!(count($F05acfe4a87b8eb0) == 0)) {
		goto label2456;
	}

	if (0 < $b036a2bf442dddad['max_genres']) {
		goto label2515;
	}

	goto label2512;

	label530:

	$Dd41a39d4bb950cf['movie_symlink'] = $b036a2bf442dddad['movie_symlink'];
	$Dd41a39d4bb950cf['remove_subtitles'] = $b036a2bf442dddad['remove_subtitles'];
	$Dd41a39d4bb950cf['transcode_profile_id'] = $b036a2bf442dddad['transcode_profile_id'];

	if (!$b036a2bf442dddad['import']) {
		goto label1705;
	}

	$Dd41a39d4bb950cf['direct_source'] = $b036a2bf442dddad['direct_source'];
	goto label1702;

	label547:

	$d02ef9ae10a41939 = a46356E1b5eD3EC6($b9bb8f475c84b5be['id']);

	if (!$d02ef9ae10a41939) {
		goto label595;
	}

	$b62d6460eb33ea07->query('UPDATE `streams_series` SET `seasons` = ? WHERE `id` = ?;', json_encode($Eaa4da8f4690ffe5, JSON_UNESCAPED_UNICODE), $d02ef9ae10a41939['id']);

	if (file_exists(WATCH_TMP_PATH . 'series_' . intval($b9bb8f475c84b5be['id']))) {
		goto label594;
	}

	file_put_contents(WATCH_TMP_PATH . 'series_' . intval($b9bb8f475c84b5be['id']), json_encode($d02ef9ae10a41939));
	goto label594;

	label593:

	goto label3018;

	label594:

	goto label2807;

	label595:

	$e789f71986a63dfb = [
		'title'            => $b9bb8f475c84b5be['name'],
		'category_id'      => [],
		'episode_run_time' => 0,
		'tmdb_id'          => $b9bb8f475c84b5be['id'],
		'cover'            => '',
		'genre'            => '',
		'plot'             => $b9bb8f475c84b5be['overview'],
		'cast'             => '',
		'rating'           => $b9bb8f475c84b5be['vote_average'],
		'director'         => '',
		'release_date'     => $b9bb8f475c84b5be['first_air_date'],
		'last_modified'    => time(),
		'seasons'          => $Eaa4da8f4690ffe5,
		'backdrop_path'    => [],
		'youtube_trailer'  => '',
		'year'             => NULL
	];
	$e789f71986a63dfb['youtube_trailer'] = dda34be3370cdfb2($b9bb8f475c84b5be['id'], !empty($b036a2bf442dddad['language']) ? $b036a2bf442dddad['language'] : XUI::$rSettings['tmdb_language']);
	goto label2823;

	label636:

	exit();

	label637:

	goto label2101;

	label638:

	if (substr($a10de9fbe1c0cb61['source'], 0, 3 + strlen(strval(SERVER_ID))) != 's:' . SERVER_ID . ':') {
		goto label669;
	}

	$c63ff1f61d9bee90 = explode('s:' . SERVER_ID . ':', $a10de9fbe1c0cb61['source'])[1];
	goto label416;

	label669:

	echo 'Old file path doesn\'t match this server, don\'t upgrade.' . "\n";
	goto label415;

	label671:

	foreach ($C1f594e39ef88eaa as $F48d5724f3b4ec96) {
		goto label694;

		label675:
		if ($b036a2bf442dddad['fallback_parser'] && (!$b036a2bf442dddad['disable_tmdb'] && !$ac72e8f81b3178f3)) {
			goto label692;
		}

		$Bb39faf12e7b20a2 = [XUI::$rSettings['parse_type']];
		goto label720;

		label692:

		goto label708;

		label694:

		echo 'Scanning: ' . $F48d5724f3b4ec96 . "\n";
		$b87030f28ff32396 = NULL;
		$F81597ba57a71c15 = NULL;

		if (!$b036a2bf442dddad['import']) {
			goto label675;
		}

		$F48d5724f3b4ec96 = $b036a2bf442dddad['title'];
		goto label675;

		label708:

		$Bb39faf12e7b20a2 = [XUI::$rSettings['parse_type'], XUI::$rSettings['parse_type'] == 'guessit' ? 'ptn' : 'guessit'];

		label720:

		foreach ($Bb39faf12e7b20a2 as $B82a955754f7cab1) {
			goto label1350;

			label725:

			goto label732;

			label728:

			$F81597ba57a71c15 = $b87030f28ff32396 . '-' . $Effb0ac2c5e5cfd3['group'];

			label732:

			$eca9936f0487fe83 = $Effb0ac2c5e5cfd3['year'] ?? NULL;
			goto label1457;

			label739:

			foreach (range(0, 1) as $d91318d1295fd8f7) {
				goto label749;

				label749:

				if (!$d91318d1295fd8f7) {
					goto label791;
				}

				if ($eca9936f0487fe83) {
					goto label768;
				}

				goto label1296;
				goto label791;

				label768:

				goto label790;

				label772:

				if (!(0 < count($Ac97fb1939417214))) {
					goto label786;
				}

				goto label1296;

				label786:

				goto label1294;

				label790:

				$eca9936f0487fe83 = NULL;

				label791:

				if ($b036a2bf442dddad['type'] == 'movie') {
					goto label811;
				}

				$e02ff34f7d898a7b = $b41097c951ee83d3->searchTVShow($b87030f28ff32396, $eca9936f0487fe83);
				goto label807;

				label807:

				goto label816;

				label811:

				$e02ff34f7d898a7b = $b41097c951ee83d3->searchMovie($b87030f28ff32396, $eca9936f0487fe83);

				label816:

				foreach ($e02ff34f7d898a7b as $e949d1c919c88f23) {
					goto label828;

					label823:

					goto label1288;

					label828:

					similar_text(parsetitle($b87030f28ff32396), parsetitle($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')), $C7b14ffca13af0a3);
					$de781eedc29fb5e9 = 0;

					if (!$F81597ba57a71c15) {
						goto label874;
					}

					similar_text(parsetitle($F81597ba57a71c15), parsetitle($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')), $de781eedc29fb5e9);

					label874:

					goto label893;

					label879:

					$Ac97fb1939417214 = [
						['percentage' => 100, 'data' => $e949d1c919c88f23]
					];
					goto label772;

					label888:

					goto label823;

					label893:
					if ((XUI::$rSettings['percentage_match'] <= $C7b14ffca13af0a3) || (XUI::$rSettings['percentage_match'] <= $de781eedc29fb5e9)) {
						goto label1180;
					}
					if (!($b036a2bf442dddad['alternative_titles'] && in_array(intval(substr($e949d1c919c88f23->get('release_date') ?: $e949d1c919c88f23->get('first_air_date'), 0, 4)), range(intval($eca9936f0487fe83) - 1, intval($eca9936f0487fe83) + 1)))) {
						goto label1175;
					}

					$Df2fa3da094718a4 = false;

					if (strpos(parsetitle($b87030f28ff32396), parsetitle($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name'))) === 0) {
						goto label1066;
					}
					if (!($F81597ba57a71c15 && (strpos(parsetitle($F81597ba57a71c15), parsetitle($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name'))) === 0))) {
						goto label1061;
					}

					goto label1060;

					label1008:

					if (!$Df2fa3da094718a4) {
						goto label1175;
					}

					if ($b036a2bf442dddad['type'] == 'movie') {
						goto label1072;
					}

					$dd7223051062121c = $b41097c951ee83d3->getSeriesTitles($e949d1c919c88f23->get('id'))['titles'];
					goto label1080;
					goto label1072;

					label1041:

					$Ac97fb1939417214 = [
						['percentage' => 100, 'data' => $e949d1c919c88f23]
					];
					goto label772;

					label1050:

					goto label888;

					label1055:

					goto label879;

					label1060:

					$Df2fa3da094718a4 = true;

					label1061:

					goto label1008;

					label1066:

					$Df2fa3da094718a4 = true;
					goto label1008;

					label1072:

					$dd7223051062121c = $b41097c951ee83d3->getMovieTitles($e949d1c919c88f23->get('id'))['titles'];

					label1080:

					foreach ($dd7223051062121c as $ba00285dbe9b19e9) {
						goto label1094;

						label1088:

						goto label1168;

						label1094:
						if ($F81597ba57a71c15 && (parsetitle($ba00285dbe9b19e9['title']) == parsetitle($F81597ba57a71c15))) {
							goto label1152;
						}
						if (!((parsetitle($ba00285dbe9b19e9['title']) == parsetitle($b87030f28ff32396)) && !$F81597ba57a71c15)) {
							goto label1140;
						}

						$Ac97fb1939417214 = [
							['percentage' => 100, 'data' => $e949d1c919c88f23]
						];
						goto label1170;

						label1140:

						goto label1146;

						label1146:

						goto label1162;

						label1152:

						$Ac97fb1939417214 = [
							['percentage' => 100, 'data' => $e949d1c919c88f23]
						];
						goto label1170;

						label1162:

						goto label1088;

						label1168:
					}

					label1170:

					goto label1175;

					label1175:

					goto label888;

					label1180:
					if (!(!$eca9936f0487fe83 || in_array(intval(substr($e949d1c919c88f23->get('release_date') ?: $e949d1c919c88f23->get('first_air_date'), 0, 4)), range(intval($eca9936f0487fe83) - 1, intval($eca9936f0487fe83) + 1)))) {
						goto label888;
					}

					goto label1227;

					label1227:
					if ($F81597ba57a71c15 && (parsetitle($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')) == parsetitle($F81597ba57a71c15))) {
						goto label1055;
					}
					if ((parsetitle($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')) == parsetitle($b87030f28ff32396)) && !$F81597ba57a71c15) {
						goto label1283;
					}

					$Ac97fb1939417214[] = ['percentage' => $C7b14ffca13af0a3, 'data' => $e949d1c919c88f23];
					goto label1050;

					label1283:

					goto label1041;

					label1288:
				}

				goto label772;

				label1294:
			}

			label1296:

			if (!(0 < count($Ac97fb1939417214))) {
				goto label1482;
			}
			$a19cea75625f6914 = max(array_column($Ac97fb1939417214, 'percentage'));
			$ca8155fd3c07c1ee = array_filter(array_map(function($Ac97fb1939417214) use($a19cea75625f6914) {
				return $Ac97fb1939417214['percentage'] == $a19cea75625f6914 ? $Ac97fb1939417214['data'] : NULL;
			}, $Ac97fb1939417214));
			goto label1477;

			label1326:

			if (isset($Effb0ac2c5e5cfd3['group'])) {
				goto label728;
			}

			if (!isset($Effb0ac2c5e5cfd3['alternative_title'])) {
				goto label1341;
			}

			$F81597ba57a71c15 = $b87030f28ff32396 . ' - ' . $Effb0ac2c5e5cfd3['alternative_title'];

			label1341:

			goto label725;

			label1344:

			$ec5c07d724bec80c = $Effb0ac2c5e5cfd3['episode'][0];

			label1347:

			goto label1410;

			label1350:
			if (!(!$b036a2bf442dddad['disable_tmdb'] && !$ac72e8f81b3178f3)) {
				goto label1347;
			}

			$Effb0ac2c5e5cfd3 = a891e68753730298($F48d5724f3b4ec96, $B82a955754f7cab1);
			$b87030f28ff32396 = $Effb0ac2c5e5cfd3['title'];

			if (!isset($Effb0ac2c5e5cfd3['excess'])) {
				goto label1326;
			}

			$b87030f28ff32396 = trim($b87030f28ff32396, is_array($Effb0ac2c5e5cfd3['excess']) ? $Effb0ac2c5e5cfd3['excess'][0] : $Effb0ac2c5e5cfd3['excess']);
			goto label1326;

			label1392:

			$aeca783a7d194e9a = $Effb0ac2c5e5cfd3['season'];

			if (is_array($Effb0ac2c5e5cfd3['episode'])) {
				goto label1344;
			}

			$ec5c07d724bec80c = $Effb0ac2c5e5cfd3['episode'];
			goto label1347;
			goto label1344;

			label1410:
			if (!(($b036a2bf442dddad['type'] == 'series') && (!$aeca783a7d194e9a || !$ec5c07d724bec80c))) {
				goto label1434;
			}

			$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 4, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
			exit();

			label1434:

			if ($b87030f28ff32396) {
				goto label1442;
			}

			goto label1441;

			label1441:

			$b87030f28ff32396 = $F48d5724f3b4ec96;

			label1442:

			echo 'Title: ' . $b87030f28ff32396 . "\n";

			if ($b036a2bf442dddad['disable_tmdb']) {
				goto label1482;
			}

			$Ac97fb1939417214 = [];
			goto label739;

			label1454:

			goto label1493;

			label1457:

			if ($b036a2bf442dddad['type'] != 'movie') {
				goto label1392;
			}

			if (!isset($Effb0ac2c5e5cfd3['season'])) {
				goto label1471;
			}

			$b87030f28ff32396 .= $Effb0ac2c5e5cfd3['season'];

			label1471:

			goto label1347;
			goto label1392;

			label1477:

			$f7cd7a19c0a73464 = array_values($ca8155fd3c07c1ee)[0];

			label1482:

			if (!$f7cd7a19c0a73464) {
				goto label1454;
			}

			goto label1495;
			goto label1454;

			label1493:
		}

		label1495:

		goto label1497;

		label1497:
	}
	if ($f7cd7a19c0a73464 || $b036a2bf442dddad['ignore_no_match']) {
		goto label239;
	}

	echo 'No match!' . "\n";
	goto label227;

	label1506:

	$Dd41a39d4bb950cf['read_native'] = $b036a2bf442dddad['read_native'];
	$Dd41a39d4bb950cf['movie_symlink'] = $b036a2bf442dddad['movie_symlink'];
	$Dd41a39d4bb950cf['remove_subtitles'] = $b036a2bf442dddad['remove_subtitles'];
	$Dd41a39d4bb950cf['transcode_profile_id'] = $b036a2bf442dddad['transcode_profile_id'];

	if (!$b036a2bf442dddad['import']) {
		goto label1808;
	}

	goto label1802;

	label1523:

	if ($b036a2bf442dddad['type'] == 'movie') {
		goto label1720;
	}

	$C17543903e9aa6ae = $b41097c951ee83d3->getTVShow($f7cd7a19c0a73464->get('id'));

	if ($b036a2bf442dddad['duplicate_tmdb']) {
		goto label2553;
	}

	$a10de9fbe1c0cb61 = getepisode($f7cd7a19c0a73464->get('id'), $aeca783a7d194e9a, $ec5c07d724bec80c);
	goto label2552;

	label1547:

	if (0 < $b036a2bf442dddad['max_genres']) {
		goto label1554;
	}

	$f981dd0e5ffffa8c = $d2cbe962ad971030['genres'];
	goto label2161;

	label1554:

	$f981dd0e5ffffa8c = array_slice($d2cbe962ad971030['genres'], 0, $b036a2bf442dddad['max_genres']);
	goto label2161;

	label1563:

	if ($f7cd7a19c0a73464) {
		goto label1523;
	}

	if ($b036a2bf442dddad['type'] == 'movie') {
		goto label260;
	}
	if (!($aeca783a7d194e9a && $ec5c07d724bec80c)) {
		goto label259;
	}

	goto label241;

	label1575:

	$F05acfe4a87b8eb0 = array_map('intval', $b036a2bf442dddad['category_id']);

	label1581:

	if (empty($b036a2bf442dddad['bouquets'])) {
		goto label1563;
	}

	goto label2492;

	label1585:

	goto label1601;

	label1586:

	$C1f594e39ef88eaa = [pathinfo($D6be258a9043b749)['filename'], basename(pathinfo($D6be258a9043b749)['dirname'])];

	label1601:

	$ac72e8f81b3178f3 = false;
	goto label671;

	label1603:

	echo 'File is broken!' . "\n";
	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 5, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
	exit();
	goto label593;

	label1616:

	goto label2264;

	label1617:

	$Dd41a39d4bb950cf['category_id'] = '[' . implode(',', array_map('intval', $F05acfe4a87b8eb0)) . ']';

	if (!(count($F05acfe4a87b8eb0) == 0)) {
		goto label434;
	}

	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 3, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
	exit();
	goto label434;

	label1648:

	$a10de9fbe1c0cb61 = NULL;

	label1649:

	if ($a10de9fbe1c0cb61) {
		goto label2639;
	}

	$Bf508e08aecfc95f = $b41097c951ee83d3->getMovie($f7cd7a19c0a73464->get('id'));
	goto label392;

	label1659:

	$Dd41a39d4bb950cf['stream_source'] = json_encode(['s:' . SERVER_ID . ':' . $D6be258a9043b749], JSON_UNESCAPED_UNICODE);
	$b62d6460eb33ea07->query('DELETE FROM `watch_logs` WHERE `filename` = ? AND `type` = ? AND `server_id` = ?;', utf8_decode($D6be258a9043b749), $d3f731f42044395a, SERVER_ID);
	goto label2343;

	label1682:

	$Dd41a39d4bb950cf['stream_source'] = json_encode([$D6be258a9043b749], JSON_UNESCAPED_UNICODE);
	goto label2343;

	label1691:

	goto label1701;

	label1692:

	foreach ($b036a2bf442dddad['servers'] as $C082ca9ed03f473c) {
		XUI::queueMovie($E5b50d60c471d7d6, $C082ca9ed03f473c);
	}

	label1701:

	goto label2848;

	label1702:

	$Dd41a39d4bb950cf['direct_proxy'] = $b036a2bf442dddad['direct_proxy'];

	label1705:

	$Dd41a39d4bb950cf['order'] = add0b2c53b2714a1();
	$Dd41a39d4bb950cf['tmdb_language'] = $rLanguage;

	if (!(count($F05acfe4a87b8eb0) == 0)) {
		goto label2068;
	}

	goto label1844;

	label1719:

	goto label637;

	label1720:

	if ($b036a2bf442dddad['duplicate_tmdb']) {
		goto label1648;
	}

	$a10de9fbe1c0cb61 = getmovie($f7cd7a19c0a73464->get('id'));
	goto label1649;
	goto label1648;

	label1732:

	exit();

	label1733:
	if (!file_exists($c63ff1f61d9bee90) || (filesize($c63ff1f61d9bee90) < filesize($D6be258a9043b749))) {
		goto label1861;
	}

	echo 'File isn\'t a better source, don\'t upgrade.' . "\n";
	exit();
	goto label1860;

	label1751:

	$b9bb8f475c84b5be = json_decode($C17543903e9aa6ae->getJSON(), true);

	if (!$b9bb8f475c84b5be['id']) {
		goto label2590;
	}

	label1762:

	if (!file_exists(WATCH_TMP_PATH . 'lock_' . intval($b9bb8f475c84b5be['id']))) {
		goto label2887;
	}

	if (!($F7379362daea673f < (time() - filemtime(WATCH_TMP_PATH . 'lock_' . intval($b9bb8f475c84b5be['id']))))) {
		goto label2883;
	}

	goto label2873;

	label1793:

	if (!$eca9936f0487fe83) {
		goto label1798;
	}

	$Dd41a39d4bb950cf['year'] = $eca9936f0487fe83;

	label1798:

	$Dd41a39d4bb950cf['read_native'] = $b036a2bf442dddad['read_native'];
	goto label1893;

	label1802:

	$Dd41a39d4bb950cf['direct_source'] = $b036a2bf442dddad['direct_source'];
	$Dd41a39d4bb950cf['direct_proxy'] = $b036a2bf442dddad['direct_proxy'];

	label1808:

	$Dd41a39d4bb950cf['order'] = add0b2c53b2714a1();
	if (!($aeca783a7d194e9a && $ec5c07d724bec80c)) {
		goto label2590;
	}

	goto label2203;

	label1818:

	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 3, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
	exit();

	label1829:

	$e789f71986a63dfb['tmdb_language'] = $rLanguage;
	$e789f71986a63dfb['category_id'] = '[' . implode(',', array_map('intval', $F05acfe4a87b8eb0)) . ']';
	goto label1;

	label1844:

	if (0 < $b036a2bf442dddad['max_genres']) {
		goto label1851;
	}

	$f981dd0e5ffffa8c = $d2cbe962ad971030['genres'];
	goto label2039;

	label1851:

	$f981dd0e5ffffa8c = array_slice($d2cbe962ad971030['genres'], 0, $b036a2bf442dddad['max_genres']);
	goto label2039;

	label1860:

	goto label637;

	label1861:

	echo 'Upgrade movie!' . "\n";
	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_source` = ?, `target_container` = ? WHERE `id` = ?;', $Dd41a39d4bb950cf['stream_source'], $Dd41a39d4bb950cf['target_container'], $a10de9fbe1c0cb61['id']);
	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = NULL, `current_source` = NULL, `to_analyze` = 0, `pid` = NULL, `stream_started` = NULL, `stream_info` = NULL, `compatible` = 0, `video_codec` = NULL, `audio_codec` = NULL, `resolution` = NULL, `stream_status` = 0 WHERE `stream_id` = ? AND `server_id` = ?', $a10de9fbe1c0cb61['id'], SERVER_ID);
	goto label151;

	label1879:

	$b036a2bf442dddad['extract_metadata'] = false;

	label1881:

	$Dd41a39d4bb950cf = C73ed8D0B70CE12f('streams');
	$Dd41a39d4bb950cf['type'] = ['movie' => 2, 'series' => 5][$b036a2bf442dddad['type']];

	if ($Dd41a39d4bb950cf['type']) {
		goto label2194;
	}

	goto label2193;

	label1893:

	$Dd41a39d4bb950cf['movie_symlink'] = $b036a2bf442dddad['movie_symlink'];
	$Dd41a39d4bb950cf['remove_subtitles'] = $b036a2bf442dddad['remove_subtitles'];
	$Dd41a39d4bb950cf['transcode_profile_id'] = $b036a2bf442dddad['transcode_profile_id'];

	if (!$b036a2bf442dddad['import']) {
		goto label2580;
	}

	$Dd41a39d4bb950cf['direct_source'] = $b036a2bf442dddad['direct_source'];
	goto label2577;

	label1910:

	$C85af697f0731d8b = array_map('intval', $b036a2bf442dddad['fb_bouquets']);

	label1916:

	if (!(count($F05acfe4a87b8eb0) == 0)) {
		goto label1829;
	}

	goto label1818;

	label1924:

	$e789f71986a63dfb['backdrop_path'] = [XUI::CccEe53491f4aF9c($e789f71986a63dfb['backdrop_path'][0])];

	label1932:

	$d5d6bbc743dab4c0 = [];

	foreach ($b9bb8f475c84b5be['credits']['cast'] as $efdfec64a4041aa6) {
		if (!(count($d5d6bbc743dab4c0) < 5)) {
			goto label1948;
		}

		$d5d6bbc743dab4c0[] = $efdfec64a4041aa6['name'];

		label1948:
	}

	goto label2592;

	label1951:

	if ($b036a2bf442dddad['type'] == 'movie') {
		goto label49;
	}

	$b62d6460eb33ea07->query('INSERT INTO `streams_episodes`(`season_num`, `series_id`, `stream_id`, `episode_num`) VALUES(?, ?, ?, ?);', $aeca783a7d194e9a, $d02ef9ae10a41939['id'], $E5b50d60c471d7d6, $ec5c07d724bec80c);
	goto label2862;
	goto label49;

	label1965:

	if (substr($a10de9fbe1c0cb61['source'], 0, 3 + strlen(strval(SERVER_ID))) != 's:' . SERVER_ID . ':') {
		goto label1996;
	}

	$c63ff1f61d9bee90 = explode('s:' . SERVER_ID . ':', $a10de9fbe1c0cb61['source'])[1];
	goto label1733;

	label1996:

	echo 'Old file path doesn\'t match this server, don\'t upgrade.' . "\n";
	goto label1732;

	label1998:

	$d03052828cab569a = intval($d2cbe962ad971030['runtime']) * 60;
	$Dd41a39d4bb950cf['stream_display_name'] = $d2cbe962ad971030['title'];

	if (!(0 < strlen($d2cbe962ad971030['release_date']))) {
		goto label311;
	}

	$Dd41a39d4bb950cf['year'] = intval(substr($d2cbe962ad971030['release_date'], 0, 4));
	goto label311;

	label2027:

	$f981dd0e5ffffa8c = $b9bb8f475c84b5be['genres'];
	goto label2038;

	label2030:

	$f981dd0e5ffffa8c = array_slice($b9bb8f475c84b5be['genres'], 0, $b036a2bf442dddad['max_genres']);

	label2038:

	goto label263;

	label2039:

	foreach ($f981dd0e5ffffa8c as $cb7c230a28039130) {
		$fe63f70cd74f3298 = intval($Fd57b4ec233184cb[1][intval($cb7c230a28039130['id'])]['category_id']);

		if (!(0 < $fe63f70cd74f3298)) {
			goto label2066;
		}

		if (in_array($fe63f70cd74f3298, $F05acfe4a87b8eb0)) {
			goto label2066;
		}

		$F05acfe4a87b8eb0[] = $fe63f70cd74f3298;

		label2066:
	}

	label2068:

	if (!(count($C85af697f0731d8b) == 0)) {
		goto label2191;
	}

	goto label1547;

	label2076:

	if ($b036a2bf442dddad['auto_upgrade']) {
		goto label2081;
	}

	echo 'Upgrade disabled' . "\n";
	exit();

	label2081:

	goto label638;

	label2082:

	$Fd57b4ec233184cb = $b036a2bf442dddad['watch_categories'];
	$rLanguage = NULL;

	if (!empty($b036a2bf442dddad['language'])) {
		goto label2888;
	}

	if (!empty(XUI::$rSettings['tmdb_language'])) {
		goto label2299;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label2298;

	label2101:

	if ($b036a2bf442dddad['type'] == 'movie') {
		goto label2921;
	}

	if ($d02ef9ae10a41939) {
		goto label2917;
	}

	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 4, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
	exit();
	goto label2920;
	goto label2917;

	label2120:

	$Dd6b447ff583f383 = NULL;
	if (!($b036a2bf442dddad['ffprobe_input'] || $b036a2bf442dddad['extract_metadata'])) {
		goto label2132;
	}

	$Dd6b447ff583f383 = C62A8993F9bca434($D6be258a9043b749);

	label2132:
	if (!$b036a2bf442dddad['ffprobe_input'] || isset($Dd6b447ff583f383['streams'])) {
		goto label1616;
	}

	goto label1603;

	label2140:

	if ($b036a2bf442dddad['import']) {
		goto label2150;
	}

	$b62d6460eb33ea07->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`) VALUES(?, ?, NULL);', $E5b50d60c471d7d6, SERVER_ID);
	goto label1951;

	label2150:

	foreach ($b036a2bf442dddad['servers'] as $C082ca9ed03f473c) {
		$b62d6460eb33ea07->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`) VALUES(?, ?, NULL);', $E5b50d60c471d7d6, $C082ca9ed03f473c);
	}

	goto label1951;

	label2161:

	foreach ($f981dd0e5ffffa8c as $cb7c230a28039130) {
		$Df5cd7b5dc4cc10c = json_decode($Fd57b4ec233184cb[1][intval($cb7c230a28039130['id'])]['bouquets'], true);

		foreach ($Df5cd7b5dc4cc10c as $b5fd3e3f0096d7f4) {
			if (in_array($b5fd3e3f0096d7f4, $C85af697f0731d8b)) {
				goto label2187;
			}

			$C85af697f0731d8b[] = $b5fd3e3f0096d7f4;

			label2187:
		}
	}

	label2191:

	goto label637;
	goto label2639;

	label2193:

	exit();

	label2194:

	$d3f731f42044395a = ['movie' => 1, 'series' => 2][$b036a2bf442dddad['type']];
	$D6be258a9043b749 = $b036a2bf442dddad['file'];

	if ($b036a2bf442dddad['import']) {
		goto label1682;
	}

	goto label1659;

	label2203:
	if (is_array($Effb0ac2c5e5cfd3['episode']) && (count($Effb0ac2c5e5cfd3['episode']) == 2)) {
		goto label2235;
	}

	$Dd41a39d4bb950cf['stream_display_name'] = $b9bb8f475c84b5be['name'] . ' - S' . sprintf('%02d', intval($aeca783a7d194e9a)) . 'E' . sprintf('%02d', $ec5c07d724bec80c);
	goto label2676;

	label2235:

	$Dd41a39d4bb950cf['stream_display_name'] = $b9bb8f475c84b5be['name'] . ' - S' . sprintf('%02d', intval($aeca783a7d194e9a)) . 'E' . sprintf('%02d', $Effb0ac2c5e5cfd3['episode'][0]) . '-' . sprintf('%02d', $Effb0ac2c5e5cfd3['episode'][1]);
	goto label2676;

	label2264:

	$f7cd7a19c0a73464 = $eca9936f0487fe83 = $C1f594e39ef88eaa = NULL;
	$ac72e8f81b3178f3 = false;
	if (!($b036a2bf442dddad['extract_metadata'] && isset($Dd6b447ff583f383['format']) && $Dd6b447ff583f383['tags']['title'])) {
		goto label2905;
	}

	$eca9936f0487fe83 = intval(explode('-', $Dd6b447ff583f383['tags']['date'])[0]) ?: NULL;
	$C1f594e39ef88eaa = [$Dd6b447ff583f383['tags']['title']];
	goto label2904;

	label2298:

	goto label2308;

	label2299:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label2308:

	goto label2898;
	goto label2888;

	label2310:

	goto label48;

	label2311:

	echo 'Upgrade episode!' . "\n";
	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_source` = ?, `target_container` = ? WHERE `id` = ?;', $Dd41a39d4bb950cf['stream_source'], $Dd41a39d4bb950cf['target_container'], $a10de9fbe1c0cb61['id']);
	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = NULL, `current_source` = NULL, `to_analyze` = 0, `pid` = NULL, `stream_started` = NULL, `stream_info` = NULL, `compatible` = 0, `video_codec` = NULL, `audio_codec` = NULL, `resolution` = NULL, `stream_status` = 0 WHERE `stream_id` = ? AND `server_id` = ?', $a10de9fbe1c0cb61['id'], SERVER_ID);
	goto label2984;

	label2329:

	$C85af697f0731d8b = json_decode($b036a2bf442dddad['fb_bouquets'], true);
	goto label2342;

	label2336:

	$C85af697f0731d8b = array_map('intval', $b036a2bf442dddad['fb_bouquets']);

	label2342:

	goto label1617;

	label2343:
	if (($b036a2bf442dddad['target_container'] != 'auto') && $b036a2bf442dddad['target_container']) {
		goto label2363;
	}

	$Dd41a39d4bb950cf['target_container'] = pathinfo(explode('?', $D6be258a9043b749)[0])['extension'];
	goto label2925;

	label2363:

	goto label2922;

	label2364:

	$Dd41a39d4bb950cf['added'] = time();
	$Fac87d38f7786df0 = c483A3A59265139E($Dd41a39d4bb950cf);
	$B91645b8411dc88c = 'INSERT INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

	if ($b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
		goto label98;
	}

	echo 'Insert failed!' . "\n";
	goto label86;

	label2388:
	if (!((count($C85af697f0731d8b) == 0) && !empty($b036a2bf442dddad['fb_bouquets']))) {
		goto label1916;
	}

	if (is_array($b036a2bf442dddad['fb_bouquets'])) {
		goto label1910;
	}

	$C85af697f0731d8b = json_decode($b036a2bf442dddad['fb_bouquets'], true);
	goto label1916;
	goto label1910;

	label2413:

	$F05acfe4a87b8eb0 = [intval($b036a2bf442dddad['fb_category_id'])];
	goto label2426;

	label2420:

	$F05acfe4a87b8eb0 = array_map('intval', $b036a2bf442dddad['fb_category_id']);

	label2426:

	goto label2388;

	label2427:

	foreach ($f981dd0e5ffffa8c as $cb7c230a28039130) {
		$fe63f70cd74f3298 = intval($Fd57b4ec233184cb[2][intval($cb7c230a28039130['id'])]['category_id']);

		if (!(0 < $fe63f70cd74f3298)) {
			goto label2454;
		}

		if (in_array($fe63f70cd74f3298, $F05acfe4a87b8eb0)) {
			goto label2454;
		}

		$F05acfe4a87b8eb0[] = $fe63f70cd74f3298;

		label2454:
	}

	label2456:

	if (!(count($C85af697f0731d8b) == 0)) {
		goto label293;
	}

	if (0 < $b036a2bf442dddad['max_genres']) {
		goto label2030;
	}

	goto label2027;

	label2468:

	$F05acfe4a87b8eb0 = array_map('intval', $b036a2bf442dddad['fb_category_id']);

	label2474:
	if (!((count($C85af697f0731d8b) == 0) && !empty($b036a2bf442dddad['fb_bouquets']))) {
		goto label1617;
	}

	if (is_array($b036a2bf442dddad['fb_bouquets'])) {
		goto label2336;
	}

	goto label2329;

	label2492:

	if (is_array($b036a2bf442dddad['bouquets'])) {
		goto label2505;
	}

	$C85af697f0731d8b = json_decode($b036a2bf442dddad['bouquets'], true);
	goto label1563;

	label2505:

	$C85af697f0731d8b = array_map('intval', $b036a2bf442dddad['bouquets']);
	goto label1563;

	label2512:

	$f981dd0e5ffffa8c = $b9bb8f475c84b5be['genres'];
	goto label2523;

	label2515:

	$f981dd0e5ffffa8c = array_slice($b9bb8f475c84b5be['genres'], 0, $b036a2bf442dddad['max_genres']);

	label2523:

	goto label2427;

	label2524:

	if (!isset($d2cbe962ad971030['production_countries'][0]['name'])) {
		goto label2534;
	}

	$b8f81a9f6e93f6a9 = $d2cbe962ad971030['production_countries'][0]['name'];

	label2534:

	$Bbe4c2a2b1efd5b2 = [];

	foreach ($d2cbe962ad971030['genres'] as $cb7c230a28039130) {
		if (!(count($Bbe4c2a2b1efd5b2) < 3)) {
			goto label2549;
		}

		$Bbe4c2a2b1efd5b2[] = $cb7c230a28039130['name'];

		label2549:
	}

	goto label1998;

	label2552:

	goto label2554;

	label2553:

	$a10de9fbe1c0cb61 = NULL;

	label2554:

	if ($a10de9fbe1c0cb61) {
		goto label2076;
	}

	goto label1751;

	label2557:

	global $b62d6460eb33ea07;
	global $b036a2bf442dddad;
	global $F7379362daea673f;
	if (!((strpos($b036a2bf442dddad['file'], $b036a2bf442dddad['directory']) !== 0) && !$b036a2bf442dddad['import'])) {
		goto label2576;
	}

	echo 'Incorrect root directory!';
	exit();

	label2576:

	goto label2082;

	label2577:

	$Dd41a39d4bb950cf['direct_proxy'] = $b036a2bf442dddad['direct_proxy'];

	label2580:

	$Dd41a39d4bb950cf['order'] = add0b2c53b2714a1();
	$Dd41a39d4bb950cf['tmdb_language'] = $rLanguage;
	goto label637;
	goto label1523;

	label2588:

	$Dd41a39d4bb950cf['stream_display_name'] = 'No Episode Title';

	label2590:

	goto label48;
	goto label2076;

	label2592:

	$e789f71986a63dfb['cast'] = implode(', ', $d5d6bbc743dab4c0);
	$Ddc486c18cb21e76 = [];

	foreach ($b9bb8f475c84b5be['credits']['crew'] as $efdfec64a4041aa6) {
		if (!((count($Ddc486c18cb21e76) < 5) && (($efdfec64a4041aa6['department'] == 'Directing') || ($efdfec64a4041aa6['known_for_department'] == 'Directing')) && !in_array($efdfec64a4041aa6['name'], $Ddc486c18cb21e76))) {
			goto label2630;
		}

		$Ddc486c18cb21e76[] = $efdfec64a4041aa6['name'];

		label2630:
	}

	$e789f71986a63dfb['director'] = implode(', ', $Ddc486c18cb21e76);
	goto label2950;

	label2639:

	if ($b036a2bf442dddad['auto_upgrade']) {
		goto label2644;
	}

	echo 'Upgrade disabled' . "\n";
	exit();

	label2644:

	goto label1965;

	label2645:

	$E5b50d60c471d7d6 = $b62d6460eb33ea07->last_insert_id();
	$d02ef9ae10a41939 = a2297542d8bd35f6($E5b50d60c471d7d6);
	file_put_contents(WATCH_TMP_PATH . 'series_' . intval($b9bb8f475c84b5be['id']), json_encode($d02ef9ae10a41939));

	foreach ($C85af697f0731d8b as $f155fef57262b32a) {
		b8b65e8cb6a1dfe9('series', $f155fef57262b32a, $E5b50d60c471d7d6);
	}

	goto label2807;

	label2676:

	$D8329ce54de87aa5 = json_decode($b41097c951ee83d3->getSeason($b9bb8f475c84b5be['id'], intval($aeca783a7d194e9a))->getJSON(), true);

	foreach ($D8329ce54de87aa5['episodes'] as $e61e6dcee1252fa2) {
		goto label2696;

		label2696:

		if (!(intval($e61e6dcee1252fa2['episode_number']) == $ec5c07d724bec80c)) {
			goto label2794;
		}

		if (!(0 < strlen($e61e6dcee1252fa2['still_path']))) {
			goto label2779;
		}

		$c68b76c7e42b19eb = 'https://image.tmdb.org/t/p/w1280' . $e61e6dcee1252fa2['still_path'];

		if (!XUI::$rSettings['download_images']) {
			goto label2779;
		}

		$c68b76c7e42b19eb = XUI::CcCEe53491f4AF9c($c68b76c7e42b19eb, 5);
		goto label2779;

		label2730:

		$d03052828cab569a = intval($b9bb8f475c84b5be['episode_run_time'][0]) * 60;
		$Dd41a39d4bb950cf['movie_properties'] = [
			'tmdb_id'       => $e61e6dcee1252fa2['id'],
			'release_date'  => $e61e6dcee1252fa2['air_date'],
			'plot'          => $e61e6dcee1252fa2['overview'],
			'duration_secs' => $d03052828cab569a,
			'duration'      => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
			'movie_image'   => $c68b76c7e42b19eb,
			'video'         => [],
			'audio'         => [],
			'bitrate'       => 0,
			'rating'        => $e61e6dcee1252fa2['vote_average'],
			'season'        => $aeca783a7d194e9a
		];

		if (!(strlen($Dd41a39d4bb950cf['movie_properties']['movie_image'][0]) == 0)) {
			goto label2777;
		}

		unset($Dd41a39d4bb950cf['movie_properties']['movie_image']);

		label2777:

		goto label2794;

		label2779:

		if (!(0 < strlen($e61e6dcee1252fa2['name']))) {
			goto label2792;
		}

		$Dd41a39d4bb950cf['stream_display_name'] .= ' - ' . $e61e6dcee1252fa2['name'];

		label2792:

		goto label2730;

		label2794:

		goto label2796;

		label2796:
	}

	if (!(strlen($Dd41a39d4bb950cf['stream_display_name']) == 0)) {
		goto label2590;
	}

	goto label2588;

	label2807:

	flock($b94ebc07efbe2e00, LOCK_UN);
	unlink(WATCH_TMP_PATH . 'lock_' . intval($b9bb8f475c84b5be['id']));
	goto label1506;

	label2823:

	$e789f71986a63dfb['cover'] = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $b9bb8f475c84b5be['poster_path'];
	$e789f71986a63dfb['cover_big'] = $e789f71986a63dfb['cover'];
	$e789f71986a63dfb['backdrop_path'] = ['https://image.tmdb.org/t/p/w1280' . $b9bb8f475c84b5be['backdrop_path']];

	if (!XUI::$rSettings['download_images']) {
		goto label1932;
	}

	$e789f71986a63dfb['cover'] = XUI::CCcee53491F4aF9c($e789f71986a63dfb['cover'], 2);
	goto label1924;

	label2848:

	echo 'Success!' . "\n";
	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 1, ?);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749), $E5b50d60c471d7d6);
	exit();

	label2861:

	goto label593;

	label2862:

	if (!$b036a2bf442dddad['auto_encode']) {
		goto label2848;
	}

	if ($b036a2bf442dddad['import']) {
		goto label1692;
	}

	XUI::queueMovie($E5b50d60c471d7d6);
	goto label1691;

	label2873:

	unlink(WATCH_TMP_PATH . 'lock_' . intval($b9bb8f475c84b5be['id']));

	label2883:

	usleep(100000);
	goto label1762;

	label2887:

	goto label102;

	label2888:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], $b036a2bf442dddad['language']);
	$rLanguage = $b036a2bf442dddad['language'];

	label2898:

	if (!($b036a2bf442dddad['type'] != 'movie')) {
		goto label1881;
	}

	goto label1879;

	label2904:

	$ac72e8f81b3178f3 = true;

	label2905:

	if ($C1f594e39ef88eaa) {
		goto label671;
	}

	if ($b036a2bf442dddad['fallback_title']) {
		goto label1586;
	}

	$C1f594e39ef88eaa = [pathinfo($D6be258a9043b749)['filename']];
	goto label1585;

	label2917:

	$Dd41a39d4bb950cf['series_no'] = $d02ef9ae10a41939['id'];

	label2920:

	goto label434;

	label2921:

	goto label126;

	label2922:

	$Dd41a39d4bb950cf['target_container'] = $b036a2bf442dddad['target_container'];

	label2925:

	if (!empty($Dd41a39d4bb950cf['target_container'])) {
		goto label2931;
	}

	$Dd41a39d4bb950cf['target_container'] = 'mp4';

	label2931:

	goto label2120;

	label2932:

	$F05acfe4a87b8eb0 = [];

	if (empty($b036a2bf442dddad['category_id'])) {
		goto label1581;
	}

	if (is_array($b036a2bf442dddad['category_id'])) {
		goto label1575;
	}

	$F05acfe4a87b8eb0 = [intval($b036a2bf442dddad['category_id'])];
	goto label1581;
	goto label1575;

	label2950:

	$Bbe4c2a2b1efd5b2 = [];

	foreach ($b9bb8f475c84b5be['genres'] as $cb7c230a28039130) {
		if (!(count($Bbe4c2a2b1efd5b2) < $b036a2bf442dddad['max_genres'])) {
			goto label2966;
		}

		$Bbe4c2a2b1efd5b2[] = $cb7c230a28039130['name'];

		label2966:
	}

	if (!$b9bb8f475c84b5be['first_air_date']) {
		goto label505;
	}

	$e789f71986a63dfb['year'] = intval(substr($b9bb8f475c84b5be['first_air_date'], 0, 4));
	goto label505;

	label2984:

	if (!$b036a2bf442dddad['auto_encode']) {
		goto label2992;
	}

	XUI::queueMovie($a10de9fbe1c0cb61['id']);

	label2992:

	$b62d6460eb33ea07->query('INSERT INTO `watch_logs`(`type`, `server_id`, `filename`, `status`, `stream_id`) VALUES(?, ?, ?, 6, 0);', $d3f731f42044395a, SERVER_ID, utf8_decode($D6be258a9043b749));
	$d9dcd83f7e8608ec = json_decode(file_get_contents(WATCH_TMP_PATH . 'series_' . $f7cd7a19c0a73464->get('id') . '.cache'), true);
	goto label22;

	label3018:
}

function c62a8993F9bCA434($F48d5724f3b4ec96)
{
	$C6671ac66a4f1c57 = 'timeout 10 ' . XUI::$rFFPROBE . ' -show_streams -show_format -v quiet ' . escapeshellarg($F48d5724f3b4ec96) . ' -of json';
	return json_decode(shell_exec($C6671ac66a4f1c57), true);
}

function c79e45B9106Cf57b($ce0840c647e1bbc7)
{
	return strtolower(preg_replace('/[^a-z0-9_]+/i', '', $ce0840c647e1bbc7));
}

function c483A3A59265139e($F647a429f8089f01)
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

function c73Ed8d0B70cE12f($b5a93f3474101e1f, $ba2d146bb5a55097 = [], $ed6a5662734f48dc = false)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `column_name`, `column_default`, `is_nullable`, `data_type` FROM `information_schema`.`columns` WHERE `table_schema` = (SELECT DATABASE()) AND `table_name` = ? ORDER BY `ordinal_position`;', $b5a93f3474101e1f);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label50;

		label15:

		goto label112;

		label17:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = $ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']];
		goto label32;

		label24:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = ($F970ffb77cdacc94 ? $Fb9da1713bff19ce['column_default'] : NULL);

		label32:

		goto label15;

		label34:

		if (in_array($Fb9da1713bff19ce['data_type'], ['int', 'float', 'tinyint', 'double', 'decimal', 'smallint', 'mediumint', 'bigint', 'bit'])) {
			goto label46;
		}

		$Fb9da1713bff19ce['column_default'] = '';
		goto label98;

		label46:

		$Fb9da1713bff19ce['column_default'] = 0;
		goto label98;

		label50:

		if (!($Fb9da1713bff19ce['column_default'] == 'NULL')) {
			goto label58;
		}

		$Fb9da1713bff19ce['column_default'] = NULL;

		label58:

		$F970ffb77cdacc94 = false;
		if (!(($Fb9da1713bff19ce['is_nullable'] == 'NO') && !$Fb9da1713bff19ce['column_default'])) {
			goto label99;
		}

		goto label34;

		label71:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = $Fb9da1713bff19ce['column_default'];

		label75:

		goto label15;

		label77:
		if (empty($ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']]) && !is_numeric($ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']]) && is_null($Fb9da1713bff19ce['column_default'])) {
			goto label24;
		}

		goto label17;

		label98:

		$F970ffb77cdacc94 = true;

		label99:

		if (array_key_exists($Fb9da1713bff19ce['column_name'], $ba2d146bb5a55097)) {
			goto label77;
		}

		if ($ed6a5662734f48dc) {
			goto label75;
		}

		goto label71;

		label112:
	}

	return $B9869413eae86beb;
}

function A46356E1B5eD3Ec6($Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	if (!(file_exists(WATCH_TMP_PATH . 'series_' . intval($Abcb228699a7f743) . '.data') && ((time() - filemtime(WATCH_TMP_PATH . 'series_' . intval($Abcb228699a7f743) . '.data')) < 360))) {
		goto label46;
	}

	return json_decode(file_get_contents(WATCH_TMP_PATH . 'series_' . intval($Abcb228699a7f743) . '.data'), true);

	label46:

	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `tmdb_id` = ?;', $Abcb228699a7f743);

	if (!($b62d6460eb33ea07->num_rows() == 1)) {
		goto label59;
	}

	return $b62d6460eb33ea07->get_row();

	label59:

	return NULL;
}

function shutdown()
{
	global $b62d6460eb33ea07;
	global $b9bb8f475c84b5be;
	if (!(is_array($b9bb8f475c84b5be) && $b9bb8f475c84b5be['id'] && file_exists(WATCH_TMP_PATH . 'lock_' . intval($b9bb8f475c84b5be['id'])))) {
		goto label33;
	}

	unlink(WATCH_TMP_PATH . 'lock_' . intval($b9bb8f475c84b5be['id']));

	label33:

	if (!is_object($b62d6460eb33ea07)) {
		goto label41;
	}

	$b62d6460eb33ea07->close_mysql();

	label41:

	@unlink(WATCH_TMP_PATH . getmypid() . '.wpid');
}

goto label43;

label1:

if (@$argc) {
	goto label7;
}

exit(0);

label7:

$F7379362daea673f = 60;
set_time_limit($F7379362daea673f);
goto label18;

label12:

goto label73;

label18:

ini_set('max_execution_time', $F7379362daea673f);
register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
require INCLUDES_PATH . 'libs/tmdb.php';
require INCLUDES_PATH . 'libs/tmdb_release.php';
goto label97;

label43:

setlocale(LC_ALL, 'en_US.UTF-8');
putenv('LC_ALL=en_US.UTF-8');

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label62;
}

exit('Please run as XUI!' . "\n");

label62:

goto label1;

label63:

goto label12;

label69:

ed8dbf4549416fa2();
goto label103;

label73:

$b036a2bf442dddad = json_decode(base64_decode($argv[1]), true);

if ($b036a2bf442dddad) {
	goto label85;
}

exit();

label85:

file_put_contents(WATCH_TMP_PATH . getmypid() . '.wpid', time());
goto label69;

label97:

goto label63;

label103:

?>