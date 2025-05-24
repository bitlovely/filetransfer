<?php


goto label37;

label1:

ini_set('max_execution_time', $F7379362daea673f);

if (!(strlen(XUI::$rSettings['tmdb_api_key']) == 0)) {
	goto label15;
}

exit('No TMDb API key.');

label15:

$E3f2c8a75a39e861 = [];
goto label55;

label17:

$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::A336B0dAd3eAF634() . __FILE__);
XUI::a3CF732c257Bd804($F2db9d2971f5c8c4);
$F771d40e8cf51e59 = f769e3F0C739D1A6();
$F7379362daea673f = 3600;
set_time_limit($F7379362daea673f);
goto label1;

label37:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label48;
}

exit('Please run as XUI!' . "\n");

label48:

if (@$argc) {
	goto label2085;
}

exit(0);
goto label2085;

label55:

$b62d6460eb33ea07->query('SELECT `id`, `type`, `stream_id` FROM `watch_refresh` WHERE `status` = 0 ORDER BY `stream_id` ASC;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label1121;

	label64:

	$aeca783a7d194e9a = $Befe0ddea3b8acae['season_num'];
	$ec5c07d724bec80c = $Befe0ddea3b8acae['episode_num'];

	label68:
	if (is_array($Effb0ac2c5e5cfd3['episode']) && (count($Effb0ac2c5e5cfd3['episode']) == 2)) {
		goto label1817;
	}

	$b87030f28ff32396 = $b9bb8f475c84b5be['name'] . ' - S' . sprintf('%02d', intval($aeca783a7d194e9a)) . 'E' . sprintf('%02d', $ec5c07d724bec80c);
	goto label1815;

	label101:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], $d02ef9ae10a41939['tmdb_language']);

	label109:

	if (0 < strlen($d02ef9ae10a41939['tmdb_id'])) {
		goto label1279;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -5 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1277;

	label124:

	goto label130;

	label126:

	$F81597ba57a71c15 = $b87030f28ff32396 . '-' . $Effb0ac2c5e5cfd3['group'];

	label130:

	goto label1871;

	label132:

	goto label1976;

	label134:

	$Bf508e08aecfc95f = $b41097c951ee83d3->getMovie($D7f17b03d6498825);
	$d2cbe962ad971030 = json_decode($Bf508e08aecfc95f->getJSON(), true);
	$d2cbe962ad971030['trailer'] = $Bf508e08aecfc95f->getTrailer();
	goto label660;

	label151:

	$b87030f28ff32396 = trim($b87030f28ff32396, is_array($Effb0ac2c5e5cfd3['excess']) ? $Effb0ac2c5e5cfd3['excess'][0] : $Effb0ac2c5e5cfd3['excess']);

	label167:

	if (isset($Effb0ac2c5e5cfd3['group'])) {
		goto label126;
	}

	if (!isset($Effb0ac2c5e5cfd3['alternative_title'])) {
		goto label124;
	}

	$F81597ba57a71c15 = $b87030f28ff32396 . ' - ' . $Effb0ac2c5e5cfd3['alternative_title'];
	goto label124;

	label182:

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -1 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1626;

	label189:

	$C17543903e9aa6ae = $b41097c951ee83d3->getTVShow($D7f17b03d6498825);
	$b9bb8f475c84b5be = json_decode($C17543903e9aa6ae->getJSON(), true);
	goto label1896;

	label202:

	foreach ([$F48d5724f3b4ec96, $fe93a43f53d92a4e['stream_display_name']] as $f2a44150539553b6) {
		goto label527;

		label210:

		$f7cd7a19c0a73464 = NULL;
		$Ac97fb1939417214 = [];

		foreach (range(0, 1) as $d91318d1295fd8f7) {
			goto label240;

			label222:

			if (!(0 < count($Ac97fb1939417214))) {
				goto label236;
			}

			goto label490;

			label236:

			goto label488;

			label240:

			if (!$d91318d1295fd8f7) {
				goto label264;
			}

			if ($eca9936f0487fe83) {
				goto label259;
			}

			goto label490;
			goto label264;

			label259:

			goto label263;

			label263:

			$eca9936f0487fe83 = NULL;

			label264:

			$e02ff34f7d898a7b = $b41097c951ee83d3->searchMovie($b87030f28ff32396, $eca9936f0487fe83);

			foreach ($e02ff34f7d898a7b as $e949d1c919c88f23) {
				goto label412;

				label276:
				if (!(!$eca9936f0487fe83 || in_array(intval(substr($e949d1c919c88f23->get('release_date') ?: $e949d1c919c88f23->get('first_air_date'), 0, 4)), range(intval($eca9936f0487fe83) - 1, intval($eca9936f0487fe83) + 1)))) {
					goto label407;
				}
				if ($F81597ba57a71c15 && (strtolower($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')) == strtolower($F81597ba57a71c15))) {
					goto label398;
				}
				if ((strtolower($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')) == strtolower($b87030f28ff32396)) && !$F81597ba57a71c15) {
					goto label379;
				}

				$Ac97fb1939417214[] = ['percentage' => $C7b14ffca13af0a3, 'data' => $e949d1c919c88f23];
				goto label388;
				goto label379;

				label379:

				$Ac97fb1939417214 = [
					['percentage' => 100, 'data' => $e949d1c919c88f23]
				];
				goto label222;

				label388:

				goto label407;
				goto label398;

				label398:

				$Ac97fb1939417214 = [
					['percentage' => 100, 'data' => $e949d1c919c88f23]
				];
				goto label222;

				label407:

				goto label477;

				label412:

				similar_text(strtoupper($b87030f28ff32396), strtoupper($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')), $C7b14ffca13af0a3);

				if (!$F81597ba57a71c15) {
					goto label457;
				}

				similar_text(strtoupper($F81597ba57a71c15), strtoupper($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')), $de781eedc29fb5e9);

				label457:
				if (!((XUI::$rSettings['percentage_match'] <= $C7b14ffca13af0a3) || (XUI::$rSettings['percentage_match'] <= $de781eedc29fb5e9))) {
					goto label477;
				}

				goto label276;

				label477:

				goto label482;

				label482:
			}

			goto label222;

			label488:
		}

		label490:

		if (!(0 < count($Ac97fb1939417214))) {
			goto label612;
		}

		goto label589;

		label502:

		$F81597ba57a71c15 = $b87030f28ff32396 . '-' . $Effb0ac2c5e5cfd3['group'];

		label506:

		if (!isset($Effb0ac2c5e5cfd3['season'])) {
			goto label517;
		}

		$b87030f28ff32396 .= $Effb0ac2c5e5cfd3['season'];
		goto label517;

		label517:

		$eca9936f0487fe83 = $Effb0ac2c5e5cfd3['year'];

		if ($b87030f28ff32396) {
			goto label524;
		}

		$b87030f28ff32396 = $f2a44150539553b6;

		label524:

		goto label210;

		label527:

		$Effb0ac2c5e5cfd3 = A891E68753730298($f2a44150539553b6);
		$b87030f28ff32396 = $Effb0ac2c5e5cfd3['title'];

		if (!isset($Effb0ac2c5e5cfd3['excess'])) {
			goto label555;
		}

		$b87030f28ff32396 = trim($b87030f28ff32396, is_array($Effb0ac2c5e5cfd3['excess']) ? $Effb0ac2c5e5cfd3['excess'][0] : $Effb0ac2c5e5cfd3['excess']);

		label555:

		goto label568;

		label558:

		$D7f17b03d6498825 = $f7cd7a19c0a73464->get('id');
		goto label622;

		label565:

		goto label620;

		label568:

		if (isset($Effb0ac2c5e5cfd3['group'])) {
			goto label502;
		}

		if (!isset($Effb0ac2c5e5cfd3['alternative_title'])) {
			goto label583;
		}
		$F81597ba57a71c15 = $b87030f28ff32396 . ' - ' . $Effb0ac2c5e5cfd3['alternative_title'];

		label583:

		goto label506;
		goto label502;

		label589:

		$a19cea75625f6914 = max(array_column($Ac97fb1939417214, 'percentage'));
		$ca8155fd3c07c1ee = array_filter(array_map(function($Ac97fb1939417214) use($a19cea75625f6914) {
			return $Ac97fb1939417214['percentage'] == $a19cea75625f6914 ? $Ac97fb1939417214['data'] : NULL;
		}, $Ac97fb1939417214));
		$f7cd7a19c0a73464 = array_values($ca8155fd3c07c1ee)[0];

		label612:

		if (!$f7cd7a19c0a73464) {
			goto label565;
		}

		goto label558;

		label620:
	}

	label622:

	if (0 < $D7f17b03d6498825) {
		goto label134;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -1 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label132;

	label633:

	if (!$A0232f15a223f0e1) {
		goto label639;
	}

	$A0232f15a223f0e1 = [$A0232f15a223f0e1];

	label639:

	$d5d6bbc743dab4c0 = [];

	foreach ($d2cbe962ad971030['credits']['cast'] as $efdfec64a4041aa6) {
		if (!(count($d5d6bbc743dab4c0) < 5)) {
			goto label656;
		}

		$d5d6bbc743dab4c0[] = $efdfec64a4041aa6['name'];

		label656:
	}

	goto label1924;

	label660:

	$Df7b5971cf1d6194 = ($d2cbe962ad971030['poster_path'] ? 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $d2cbe962ad971030['poster_path'] : '');
	$A0232f15a223f0e1 = ($d2cbe962ad971030['backdrop_path'] ? 'https://image.tmdb.org/t/p/w1280' . $d2cbe962ad971030['backdrop_path'] : '');

	if (!XUI::$rSettings['download_images']) {
		goto label1869;
	}

	if (empty($Df7b5971cf1d6194)) {
		goto label1861;
	}

	$Df7b5971cf1d6194 = XUI::CcCeE53491F4aF9C($Df7b5971cf1d6194, 2);
	goto label1861;

	label693:

	if (!($D7f17b03d6498825 == 0)) {
		goto label1256;
	}

	$F48d5724f3b4ec96 = $fe93a43f53d92a4e['title'];
	$Effb0ac2c5e5cfd3 = A891e68753730298($F48d5724f3b4ec96);
	$b87030f28ff32396 = $Effb0ac2c5e5cfd3['title'];

	if (!isset($Effb0ac2c5e5cfd3['excess'])) {
		goto label167;
	}

	goto label151;

	label713:

	$Befe0ddea3b8acae = $b62d6460eb33ea07->get_row();
	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` = ?;', $Befe0ddea3b8acae['series_id']);

	if ($b62d6460eb33ea07->num_rows() == 1) {
		goto label755;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -4 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1056;
	goto label755;

	label736:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label753;

	label744:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label753:

	goto label914;

	label755:

	$d02ef9ae10a41939 = $b62d6460eb33ea07->get_row();

	if (0 < strlen($d02ef9ae10a41939['tmdb_language'])) {
		goto label101;
	}

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label785;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label783;

	label783:

	goto label794;

	label785:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label794:

	goto label109;
	goto label101;

	label798:

	if ($b62d6460eb33ea07->num_rows() == 1) {
		goto label811;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -2 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1056;

	label811:

	$fe93a43f53d92a4e = $b62d6460eb33ea07->get_row();
	goto label1151;

	label816:

	$fe93a43f53d92a4e = $b62d6460eb33ea07->get_row();

	if (0 < strlen($fe93a43f53d92a4e['tmdb_language'])) {
		goto label1922;
	}

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label1911;
	}

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
	goto label1920;
	goto label1911;

	label846:

	goto label859;

	label848:

	$D7f17b03d6498825 = intval(json_decode($fe93a43f53d92a4e['movie_properties'], true)['tmdb_id']);

	label859:

	goto label1173;
	goto label1171;

	label863:

	$A0232f15a223f0e1 = ($b9bb8f475c84b5be['backdrop_path'] ? 'https://image.tmdb.org/t/p/w1280' . $b9bb8f475c84b5be['backdrop_path'] : '');

	if (!XUI::$rSettings['download_images']) {
		goto label1090;
	}

	if (empty($e789f71986a63dfb['cover'])) {
		goto label888;
	}

	$e789f71986a63dfb['cover'] = XUI::cCcEe53491f4Af9C($e789f71986a63dfb['cover'], 2);

	label888:

	goto label1082;

	label890:

	goto label1626;

	label892:

	$fe93a43f53d92a4e = $b62d6460eb33ea07->get_row();

	if (0 < strlen($fe93a43f53d92a4e['tmdb_language'])) {
		goto label916;
	}

	if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
		goto label744;
	}

	goto label736;

	label914:

	goto label924;

	label916:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], $fe93a43f53d92a4e['tmdb_language']);

	label924:

	$D7f17b03d6498825 = intval($fe93a43f53d92a4e['tmdb_id']);
	goto label693;

	label931:

	$Ad59eff1763511c9 = $d2cbe962ad971030['vote_average'] ?: 0;

	if (!(0 < strlen($d2cbe962ad971030['release_date']))) {
		goto label954;
	}

	$eca9936f0487fe83 = intval(substr($d2cbe962ad971030['release_date'], 0, 4));

	label954:

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = 1 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1962;

	label961:

	$b62d6460eb33ea07->query('UPDATE `streams_episodes` SET `season_num` = ?, `episode_num` = ? WHERE `stream_id` = ?;', $aeca783a7d194e9a, $ec5c07d724bec80c, $Fb9da1713bff19ce['stream_id']);

	if (in_array($d02ef9ae10a41939['id'], $E3f2c8a75a39e861)) {
		goto label979;
	}

	$E3f2c8a75a39e861[] = $d02ef9ae10a41939['id'];

	label979:

	goto label1056;

	label981:

	$d03052828cab569a = intval($d2cbe962ad971030['runtime']) * 60;
	$Ccbdf03f8a4df633 = [
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
		'backdrop_path'          => $A0232f15a223f0e1,
		'duration_secs'          => $d03052828cab569a,
		'duration'               => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
		'video'                  => [],
		'audio'                  => [],
		'bitrate'                => 0,
		'rating'                 => $d2cbe962ad971030['vote_average']
	];
	$b87030f28ff32396 = $d2cbe962ad971030['title'];
	$eca9936f0487fe83 = NULL;
	goto label931;

	label1056:

	goto label1795;

	label1058:

	$e789f71986a63dfb['backdrop_path'][] = $A0232f15a223f0e1;

	label1061:

	$d5d6bbc743dab4c0 = [];

	foreach ($b9bb8f475c84b5be['credits']['cast'] as $efdfec64a4041aa6) {
		if (!(count($d5d6bbc743dab4c0) < 5)) {
			goto label1078;
		}

		$d5d6bbc743dab4c0[] = $efdfec64a4041aa6['name'];

		label1078:
	}

	goto label1192;

	label1082:

	if (empty($A0232f15a223f0e1)) {
		goto label1090;
	}

	$A0232f15a223f0e1 = XUI::CCcEE53491f4af9C($A0232f15a223f0e1);

	label1090:

	if (empty($A0232f15a223f0e1)) {
		goto label1061;
	}

	goto label1058;

	label1096:

	$e789f71986a63dfb['release_date'] = $b9bb8f475c84b5be['first_air_date'];
	$e789f71986a63dfb['youtube_trailer'] = DDa34be3370cDfb2($b9bb8f475c84b5be['id']);
	$e789f71986a63dfb['cover'] = ($b9bb8f475c84b5be['poster_path'] ? 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $b9bb8f475c84b5be['poster_path'] : '');
	$e789f71986a63dfb['cover_big'] = $e789f71986a63dfb['cover'];
	$e789f71986a63dfb['backdrop_path'] = [];
	goto label863;

	label1121:

	if ($Fb9da1713bff19ce['type'] == 1) {
		goto label1628;
	}

	if ($Fb9da1713bff19ce['type'] == 2) {
		goto label1797;
	}

	if ($Fb9da1713bff19ce['type'] == 3) {
		goto label1270;
	}

	if (in_array($Fb9da1713bff19ce['stream_id'], $E3f2c8a75a39e861)) {
		goto label1268;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = 1 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1262;

	label1151:

	$b62d6460eb33ea07->query('SELECT * FROM `streams_episodes` WHERE `stream_id` = ?;', $Fb9da1713bff19ce['stream_id']);

	if ($b62d6460eb33ea07->num_rows() == 1) {
		goto label1169;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -3 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1056;

	label1169:

	goto label713;

	label1171:

	$D7f17b03d6498825 = $fe93a43f53d92a4e['tmdb_id'];

	label1173:

	if (!($D7f17b03d6498825 == 0)) {
		goto label622;
	}

	$F48d5724f3b4ec96 = pathinfo(json_decode($fe93a43f53d92a4e['stream_source'], true)[0])['filename'];
	goto label202;

	label1192:

	$e789f71986a63dfb['cast'] = implode(', ', $d5d6bbc743dab4c0);
	$Ddc486c18cb21e76 = [];

	foreach ($b9bb8f475c84b5be['credits']['crew'] as $efdfec64a4041aa6) {
		if (!((count($Ddc486c18cb21e76) < 5) && (($efdfec64a4041aa6['department'] == 'Directing') || ($efdfec64a4041aa6['known_for_department'] == 'Directing')) && !in_array($efdfec64a4041aa6['name'], $Ddc486c18cb21e76))) {
			goto label1231;
		}

		$Ddc486c18cb21e76[] = $efdfec64a4041aa6['name'];

		label1231:
	}
	$e789f71986a63dfb['director'] = implode(', ', $Ddc486c18cb21e76);
	goto label1593;

	label1241:

	$ca8155fd3c07c1ee = array_filter(array_map(function($Ac97fb1939417214) use($a19cea75625f6914) {
		return $Ac97fb1939417214['percentage'] == $a19cea75625f6914 ? $Ac97fb1939417214['data'] : NULL;
	}, $Ac97fb1939417214));
	$f7cd7a19c0a73464 = array_values($ca8155fd3c07c1ee)[0];

	label1256:

	if (0 < $D7f17b03d6498825) {
		goto label189;
	}

	goto label182;

	label1262:

	$E3f2c8a75a39e861[] = intval($Fb9da1713bff19ce['stream_id']);

	label1268:

	goto label1056;

	label1270:

	$b62d6460eb33ea07->query('SELECT * FROM `streams` WHERE `id` = ?;', $Fb9da1713bff19ce['stream_id']);
	goto label798;

	label1277:

	goto label1056;

	label1279:

	$C17543903e9aa6ae = $b41097c951ee83d3->getTVShow($d02ef9ae10a41939['tmdb_id']);
	$b9bb8f475c84b5be = json_decode($C17543903e9aa6ae->getJSON(), true);

	if (!isset($b9bb8f475c84b5be['name'])) {
		goto label979;
	}

	goto label1766;

	label1298:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], $fe93a43f53d92a4e['tmdb_language']);

	label1306:

	if ($fe93a43f53d92a4e['tmdb_id']) {
		goto label1171;
	}

	if (0 < strlen($fe93a43f53d92a4e['movie_properties'])) {
		goto label848;
	}

	$D7f17b03d6498825 = 0;
	goto label846;

	label1321:

	$Ac97fb1939417214 = [];

	foreach (range(0, 1) as $d91318d1295fd8f7) {
		goto label1555;

		label1331:

		if (!(0 < count($Ac97fb1939417214))) {
			goto label1343;
		}

		goto label1575;

		label1343:

		goto label1573;

		label1346:

		$eca9936f0487fe83 = NULL;

		label1347:

		$e02ff34f7d898a7b = $b41097c951ee83d3->searchTVShow($b87030f28ff32396, $eca9936f0487fe83);

		foreach ($e02ff34f7d898a7b as $e949d1c919c88f23) {
			goto label1488;

			label1358:

			$Ac97fb1939417214 = [
				['percentage' => 100, 'data' => $e949d1c919c88f23]
			];
			goto label1331;

			label1366:

			goto label1484;

			label1370:
			if (!(!$eca9936f0487fe83 || in_array(intval(substr($e949d1c919c88f23->get('release_date') ?: $e949d1c919c88f23->get('first_air_date'), 0, 4)), range(intval($eca9936f0487fe83) - 1, intval($eca9936f0487fe83) + 1)))) {
				goto label1366;
			}
			if ($F81597ba57a71c15 && (strtolower($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')) == strtolower($F81597ba57a71c15))) {
				goto label1358;
			}
			if ((strtolower($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')) == strtolower($b87030f28ff32396)) && !$F81597ba57a71c15) {
				goto label1468;
			}

			$Ac97fb1939417214[] = ['percentage' => $C7b14ffca13af0a3, 'data' => $e949d1c919c88f23];
			goto label1476;
			goto label1468;

			label1468:

			$Ac97fb1939417214 = [
				['percentage' => 100, 'data' => $e949d1c919c88f23]
			];
			goto label1331;

			label1476:

			goto label1366;
			goto label1358;

			label1484:

			goto label1550;

			label1488:

			similar_text(strtoupper($b87030f28ff32396), strtoupper($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')), $C7b14ffca13af0a3);

			if (!$F81597ba57a71c15) {
				goto label1532;
			}

			similar_text(strtoupper($F81597ba57a71c15), strtoupper($e949d1c919c88f23->get('title') ?: $e949d1c919c88f23->get('name')), $de781eedc29fb5e9);

			label1532:
			if (!((XUI::$rSettings['percentage_match'] <= $C7b14ffca13af0a3) || (XUI::$rSettings['percentage_match'] <= $de781eedc29fb5e9))) {
				goto label1484;
			}

			goto label1370;

			label1550:
		}

		goto label1331;

		label1555:

		if (!$d91318d1295fd8f7) {
			goto label1347;
		}

		if ($eca9936f0487fe83) {
			goto label1570;
		}

		goto label1575;
		goto label1347;

		label1570:

		goto label1346;

		label1573:
	}

	label1575:

	if (!(0 < count($Ac97fb1939417214))) {
		goto label1256;
	}

	$a19cea75625f6914 = max(array_column($Ac97fb1939417214, 'percentage'));
	goto label1241;

	label1593:

	$Bbe4c2a2b1efd5b2 = [];

	foreach ($b9bb8f475c84b5be['genres'] as $cb7c230a28039130) {
		if (!(count($Bbe4c2a2b1efd5b2) < 3)) {
			goto label1609;
		}

		$Bbe4c2a2b1efd5b2[] = $cb7c230a28039130['name'];

		label1609:
	}

	$e789f71986a63dfb['genre'] = implode(', ', $Bbe4c2a2b1efd5b2);
	$e789f71986a63dfb['episode_run_time'] = intval($b9bb8f475c84b5be['episode_run_time'][0]);
	goto label2044;

	label1626:

	goto label1976;

	label1628:

	goto label2024;

	label1630:

	$Ccbdf03f8a4df633 = [];

	foreach ($D8329ce54de87aa5['episodes'] as $e61e6dcee1252fa2) {
		goto label1643;

		label1637:

		goto label1747;

		label1640:

		goto label1745;

		label1643:

		if (!(intval($e61e6dcee1252fa2['episode_number']) == $ec5c07d724bec80c)) {
			goto label1640;
		}

		if (!(0 < strlen($e61e6dcee1252fa2['still_path']))) {
			goto label1681;
		}

		$c68b76c7e42b19eb = 'https://image.tmdb.org/t/p/w1280' . $e61e6dcee1252fa2['still_path'];

		if (!XUI::$rSettings['download_images']) {
			goto label1681;
		}

		$c68b76c7e42b19eb = XUI::CcCeE53491F4aF9c($c68b76c7e42b19eb, 5);
		goto label1681;

		label1681:

		if (!(0 < strlen($e61e6dcee1252fa2['name']))) {
			goto label1694;
		}

		$b87030f28ff32396 .= ' - ' . $e61e6dcee1252fa2['name'];

		label1694:

		goto label1697;

		label1697:

		$d03052828cab569a = intval($b9bb8f475c84b5be['episode_run_time'][0]) * 60;
		$Ccbdf03f8a4df633 = [
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

		if (!(strlen($Ccbdf03f8a4df633['movie_image'][0]) == 0)) {
			goto label1742;
		}

		unset($Ccbdf03f8a4df633['movie_image']);

		label1742:

		goto label1637;

		label1745:
	}

	label1747:

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = 1 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_display_name` = ?, `movie_properties` = ? WHERE `id` = ?;', $b87030f28ff32396, json_encode($Ccbdf03f8a4df633, JSON_UNESCAPED_UNICODE), $Fb9da1713bff19ce['stream_id']);
	goto label961;

	label1766:

	$F48d5724f3b4ec96 = pathinfo(json_decode($fe93a43f53d92a4e['stream_source'], true)[0])['filename'];
	$Effb0ac2c5e5cfd3 = a891E68753730298($F48d5724f3b4ec96);
	$aeca783a7d194e9a = $Effb0ac2c5e5cfd3['season'];

	if (is_array($Effb0ac2c5e5cfd3['episode'])) {
		goto label2011;
	}

	$ec5c07d724bec80c = $Effb0ac2c5e5cfd3['episode'];
	goto label2009;

	label1795:

	goto label1626;

	label1797:

	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` = ?;', $Fb9da1713bff19ce['stream_id']);

	if ($b62d6460eb33ea07->num_rows() == 1) {
		goto label892;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -2 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label890;

	label1815:

	goto label1844;

	label1817:

	$b87030f28ff32396 = $b9bb8f475c84b5be['name'] . ' - S' . sprintf('%02d', intval($aeca783a7d194e9a)) . 'E' . sprintf('%02d', $Effb0ac2c5e5cfd3['episode'][0]) . '-' . sprintf('%02d', $Effb0ac2c5e5cfd3['episode'][1]);

	label1844:

	$D8329ce54de87aa5 = json_decode($b41097c951ee83d3->getSeason($b9bb8f475c84b5be['id'], intval($aeca783a7d194e9a))->getJSON(), true);
	goto label1630;

	label1861:

	if (empty($A0232f15a223f0e1)) {
		goto label1869;
	}

	$A0232f15a223f0e1 = XUI::CCCeE53491f4AF9c($A0232f15a223f0e1);

	label1869:

	goto label633;

	label1871:

	$eca9936f0487fe83 = $Effb0ac2c5e5cfd3['year'];

	if ($b87030f28ff32396) {
		goto label1877;
	}

	$b87030f28ff32396 = $F48d5724f3b4ec96;

	label1877:

	$f7cd7a19c0a73464 = NULL;
	goto label1321;

	label1880:

	$E5b50d60c471d7d6 = $b62d6460eb33ea07->last_insert_id();
	F97E4B199845eFe6(intval($E5b50d60c471d7d6));
	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = 1 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);

	label1894:

	goto label1626;

	label1896:

	$e789f71986a63dfb = $fe93a43f53d92a4e;
	$e789f71986a63dfb['title'] = $b9bb8f475c84b5be['name'];
	$e789f71986a63dfb['tmdb_id'] = $b9bb8f475c84b5be['id'];
	$e789f71986a63dfb['plot'] = $b9bb8f475c84b5be['overview'];
	$e789f71986a63dfb['rating'] = $b9bb8f475c84b5be['vote_average'];
	goto label1096;

	label1911:

	$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

	label1920:

	goto label1306;

	label1922:

	goto label1298;

	label1924:

	$Ddc486c18cb21e76 = [];

	foreach ($d2cbe962ad971030['credits']['crew'] as $efdfec64a4041aa6) {
		if (!((count($Ddc486c18cb21e76) < 5) && (($efdfec64a4041aa6['department'] == 'Directing') || ($efdfec64a4041aa6['known_for_department'] == 'Directing')) && !in_array($efdfec64a4041aa6['name'], $Ddc486c18cb21e76))) {
			goto label1957;
		}

		$Ddc486c18cb21e76[] = $efdfec64a4041aa6['name'];

		label1957:
	}

	$b8f81a9f6e93f6a9 = '';
	goto label1978;

	label1962:

	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_display_name` = ?, `year` = ?, `movie_properties` = ?, `rating` = ? WHERE `id` = ?;', $b87030f28ff32396, $eca9936f0487fe83, json_encode($Ccbdf03f8a4df633, JSON_UNESCAPED_UNICODE), $Ad59eff1763511c9, $Fb9da1713bff19ce['stream_id']);

	label1976:

	goto label2072;

	label1978:

	if (!isset($d2cbe962ad971030['production_countries'][0]['name'])) {
		goto label1989;
	}

	$b8f81a9f6e93f6a9 = $d2cbe962ad971030['production_countries'][0]['name'];

	label1989:

	$Bbe4c2a2b1efd5b2 = [];

	foreach ($d2cbe962ad971030['genres'] as $cb7c230a28039130) {
		if (!(count($Bbe4c2a2b1efd5b2) < 3)) {
			goto label2005;
		}

		$Bbe4c2a2b1efd5b2[] = $cb7c230a28039130['name'];

		label2005:
	}

	goto label981;

	label2009:

	goto label2014;

	label2011:

	$ec5c07d724bec80c = $Effb0ac2c5e5cfd3['episode'][0];

	label2014:
	if (!(!$aeca783a7d194e9a || !$ec5c07d724bec80c)) {
		goto label68;
	}

	goto label64;

	label2024:

	$b62d6460eb33ea07->query('SELECT * FROM `streams` WHERE `id` = ?;', $Fb9da1713bff19ce['stream_id']);

	if ($b62d6460eb33ea07->num_rows() == 1) {
		goto label2042;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -2 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1976;

	label2042:

	goto label816;

	label2044:

	$Fac87d38f7786df0 = c483a3A59265139e($e789f71986a63dfb);
	$B91645b8411dc88c = 'REPLACE INTO `streams_series`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

	if ($b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
		goto label1880;
	}

	$b62d6460eb33ea07->query('UPDATE `watch_refresh` SET `status` = -2 WHERE `id` = ?;', $Fb9da1713bff19ce['id']);
	goto label1894;
	goto label1880;

	label2072:
}

foreach ($E3f2c8a75a39e861 as $E6f758b9be57a931) {
	f97E4B199845EFe6(intval($E6f758b9be57a931));
}

goto label2106;

label2085:

require str_replace('\\', '/', dirname($argv[0])) . '/../includes/admin.php';
require INCLUDES_PATH . 'libs/tmdb.php';
require INCLUDES_PATH . 'libs/tmdb_release.php';
cli_set_process_title('XUI[TMDB]');
goto label17;

label2106:

@unlink($F2db9d2971f5c8c4);

?>