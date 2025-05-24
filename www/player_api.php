<?php


function getOutputFormats($d936054a94607c0a)
{
	$E34a578bda7e1cee = [1 => 'm3u8', 2 => 'ts', 3 => 'rtmp'];
	$B9869413eae86beb = [];

	foreach ($d936054a94607c0a as $da9fbb9cc2084c63) {
		$B9869413eae86beb[] = $E34a578bda7e1cee[$da9fbb9cc2084c63];
	}

	return $B9869413eae86beb;
}

function shutdown()
{
	global $f76e05a7b2c4a341;

	if (!$f76e05a7b2c4a341) {
		goto label6;
	}

	XUI::aeEa5D3137274f80();

	label6:

	if (!is_object(XUI::$db)) {
		goto label16;
	}

	XUI::$db->close_mysql();

	label16:
}

goto label3637;

label1:
if ($fb4b25e8039f660e && empty($dabeadfcc3ba1288)) {
	goto label12;
}

$dc19ad592a6b5ac0 = in_array($dabeadfcc3ba1288, ['get_series', 'get_vod_streams', 'get_live_streams']);
goto label174;

label12:

$dc19ad592a6b5ac0 = true;
goto label174;

label14:

$fb4b25e8039f660e = false;

if (!(strtolower(explode('.', ltrim(parse_url($_SERVER['REQUEST_URI'])['path'], '/'))[0]) == 'panel_api')) {
	goto label200;
}

if (!XUI::$rSettings['legacy_panel_api']) {
	goto label3672;
}

$fb4b25e8039f660e = true;
goto label3671;

label46:

goto label135;

label47:

$ff5cf44f96903d64 = XUI::$rRequest['username'];
$fd093b5358e9a519 = XUI::$rRequest['password'];
goto label118;

label54:

$B259c62825689c1b = XUI::$rRequest['token'];

if (!empty($B259c62825689c1b)) {
	goto label64;
}

generateError('NO_CREDENTIALS');

label64:

$E59d0debc75e7be8 = XUI::cc988751eEBBF271(NULL, $B259c62825689c1b, NULL, $dc19ad592a6b5ac0);
goto label46;

label72:

if (!$E59d0debc75e7be8['enabled']) {
	goto label80;
}

generateError('EXPIRED');
goto label195;

label80:

generateError('DISABLED');
goto label195;

label84:

$d094d3e133ec8c03 = [];
$dabeadfcc3ba1288 = (!empty(XUI::$rRequest['action']) && (in_array(XUI::$rRequest['action'], $f5e707a1e98bcf4a) || array_key_exists(XUI::$rRequest['action'], $f5e707a1e98bcf4a)) ? XUI::$rRequest['action'] : '');

if (!isset($f5e707a1e98bcf4a[$dabeadfcc3ba1288])) {
	goto label117;
}

$dabeadfcc3ba1288 = $f5e707a1e98bcf4a[$dabeadfcc3ba1288];

label117:

goto label1;

label118:
if (!(empty($ff5cf44f96903d64) || empty($fd093b5358e9a519))) {
	goto label128;
}

generateError('NO_CREDENTIALS');

label128:

$E59d0debc75e7be8 = XUI::cc988751eebbF271(NULL, $ff5cf44f96903d64, $fd093b5358e9a519, $dc19ad592a6b5ac0);

label135:

goto label3677;

label136:

$f76e05a7b2c4a341 = false;
$e32e4078d2af09ab = false;
if (($E59d0debc75e7be8['admin_enabled'] == 1) && ($E59d0debc75e7be8['enabled'] == 1) && (is_null($E59d0debc75e7be8['exp_date']) || (time() < $E59d0debc75e7be8['exp_date']))) {
	goto label3722;
}

if (!$E59d0debc75e7be8['admin_enabled']) {
	goto label196;
}

goto label72;

label163:

$f76e05a7b2c4a341 = true;

if (!XUI::$rSettings['disable_player_api']) {
	goto label14;
}

$f76e05a7b2c4a341 = false;
generateError('PLAYER_API_DISABLED');
goto label14;

label174:

if (!$dc19ad592a6b5ac0) {
	goto label182;
}

XUI::$rBouquets = XUI::e74a9A4510c4ffE4('bouquets');

label182:
if (!(($fb4b25e8039f660e && empty($dabeadfcc3ba1288)) || in_array($dabeadfcc3ba1288, ['get_vod_categories', 'get_series_categories', 'get_live_categories']))) {
	goto label233;
}

goto label228;

label195:

goto label199;

label196:

generateError('BANNED');

label199:

goto label3721;

label200:

$b38e11ffdc6a3abb = $_SERVER['REMOTE_ADDR'];
$Ecc2c91f94cb4fcb = trim($_SERVER['HTTP_USER_AGENT']);
$A486d2019332744a = (empty(XUI::$rRequest['params']['offset']) ? 0 : abs(intval(XUI::$rRequest['params']['offset'])));
goto label3693;

label228:

XUI::$rCategories = XUI::e74a9a4510c4fFE4('categories');

label233:

$Bb57dd8e4ccf3ae6 = ['offset' => $A486d2019332744a, 'items_per_page' => $Cc2b5dfe75dc164b];
if (isset(XUI::$rRequest['username']) && isset(XUI::$rRequest['password'])) {
	goto label47;
}

if (!isset(XUI::$rRequest['token'])) {
	goto label46;
}

goto label54;

label250:

switch ($dabeadfcc3ba1288) {
case 'get_epg':
	goto label526;

	label275:

	$d344a66178d455b1 = false;
	$dec36723d7be7c49 = [intval(XUI::$rRequest['stream_id'])];

	label283:

	$b68337617f88a5c2 = [];
	goto label551;

	label285:

	XUI::$db->query('SELECT * FROM `epg_data` WHERE CONCAT(`epg_id`, \'_\', `channel_id`) IN (\'' . implode('\',\'', array_keys($b42f717d234fde64)) . '\') AND `end` >= ?;', time());

	label301:

	$D8e7681dfae2905b = XUI::$db->get_rows();

	foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
		goto label323;

		label309:

		goto label363;

		label311:

		if ($d344a66178d455b1) {
			goto label318;
		}

		$b68337617f88a5c2[] = $Fb9da1713bff19ce;
		goto label309;

		label318:

		$b68337617f88a5c2[$ee6d1fc5d801b43f][] = $Fb9da1713bff19ce;
		goto label309;

		label323:

		$ee6d1fc5d801b43f = intval($b42f717d234fde64[str_replace('\'', '\\\'', $Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'])]);
		$Fb9da1713bff19ce['title'] = base64_encode($Fb9da1713bff19ce['title']);
		$Fb9da1713bff19ce['description'] = base64_encode($Fb9da1713bff19ce['description']);
		$Fb9da1713bff19ce['start'] = intval($Fb9da1713bff19ce['start']);
		$Fb9da1713bff19ce['end'] = intval($Fb9da1713bff19ce['end']);
		goto label311;

		label363:
	}

	goto label431;

	label366:

	if (!(0 < count($b42f717d234fde64))) {
		goto label431;
	}

	if ($d7f009ef0da38922) {
		goto label285;
	}

	XUI::$db->query('SELECT * FROM `epg_data` WHERE CONCAT(`epg_id`, \'_\', `channel_id`) IN (\'' . implode('\',\'', array_keys($b42f717d234fde64)) . '\');');
	goto label301;
	goto label285;

	label390:

	echo json_encode($b68337617f88a5c2);
	exit();
	goto label550;

	label396:
	$d7f009ef0da38922 = !empty(XUI::$rRequest['from_now']) && (0 < XUI::$rRequest['from_now']);
	if (is_numeric(XUI::$rRequest['stream_id']) && !isset(XUI::$rRequest['multi'])) {
		goto label275;
	}

	$d344a66178d455b1 = true;
	$dec36723d7be7c49 = array_map('intval', explode(',', XUI::$rRequest['stream_id']));
	goto label283;
	goto label275;

	label431:

	goto label390;

	label432:

	foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
		if (!file_exists(EPG_PATH . 'stream_' . intval($ee6d1fc5d801b43f))) {
			goto label523;
		}

		$D8e7681dfae2905b = igbinary_unserialize(file_get_contents(EPG_PATH . 'stream_' . $ee6d1fc5d801b43f));

		foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
			goto label462;

			label462:
			if (!($d7f009ef0da38922 && ($Fb9da1713bff19ce['end'] < time()))) {
				goto label476;
			}

			goto label494;

			label476:

			$Fb9da1713bff19ce['title'] = base64_encode($Fb9da1713bff19ce['title']);
			$Fb9da1713bff19ce['description'] = base64_encode($Fb9da1713bff19ce['description']);
			goto label497;

			label491:

			$b68337617f88a5c2[$ee6d1fc5d801b43f][] = $Fb9da1713bff19ce;

			label494:

			goto label521;

			label497:

			$Fb9da1713bff19ce['start'] = intval($Fb9da1713bff19ce['start']);
			$Fb9da1713bff19ce['end'] = intval($Fb9da1713bff19ce['end']);

			if ($d344a66178d455b1) {
				goto label491;
			}

			$b68337617f88a5c2[] = $Fb9da1713bff19ce;
			goto label494;
			goto label491;

			label521:
		}

		label523:
	}

	goto label390;

	label526:
	if (!empty(XUI::$rRequest['stream_id']) && (is_null($E59d0debc75e7be8['exp_date']) || (time() < $E59d0debc75e7be8['exp_date']))) {
		goto label549;
	}

	echo json_encode([]);
	exit();
	goto label550;

	label549:

	goto label396;

	label550:

	goto label592;

	label551:

	if (!(0 < count($dec36723d7be7c49))) {
		goto label390;
	}

	if (XUI::$rCached) {
		goto label432;
	}

	$b42f717d234fde64 = [];
	XUI::$db->query('SELECT `id`, `epg_id`, `channel_id` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

	foreach (XUI::$db->get_rows() as $Fb9da1713bff19ce) {
		$b42f717d234fde64[str_replace('\'', '\\\'', $Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'])] = $Fb9da1713bff19ce['id'];
	}

	goto label366;
case 'get_series_info':
	label592:

	goto label687;

	label593:

	if (!(0 < count($f542eb18b9e5f798))) {
		goto label618;
	}

	foreach (range(0, count($f542eb18b9e5f798) - 1) as $df6991d59f367c7e) {
		$f542eb18b9e5f798[$df6991d59f367c7e] = XUI::FcA722697178454b($f542eb18b9e5f798[$df6991d59f367c7e]);
	}

	label618:

	$d094d3e133ec8c03['info'] = ['name' => XUI::cF5D4a2f3De8982C($E84de30ab6e5b0c1['title'], $E84de30ab6e5b0c1['year']), 'title' => $E84de30ab6e5b0c1['title'], 'year' => $E84de30ab6e5b0c1['year'], 'cover' => XUI::fca722697178454b($E84de30ab6e5b0c1['cover']), 'plot' => $E84de30ab6e5b0c1['plot'], 'cast' => $E84de30ab6e5b0c1['cast'], 'director' => $E84de30ab6e5b0c1['director'], 'genre' => $E84de30ab6e5b0c1['genre'], 'release_date' => $E84de30ab6e5b0c1['release_date'], 'releaseDate' => $E84de30ab6e5b0c1['release_date'], 'last_modified' => $E84de30ab6e5b0c1['last_modified'], 'rating' => number_format($E84de30ab6e5b0c1['rating'], 0), 'rating_5based' => number_format($E84de30ab6e5b0c1['rating'] * 0.5, 1) + 0, 'backdrop_path' => $f542eb18b9e5f798, 'youtube_trailer' => $E84de30ab6e5b0c1['youtube_trailer'], 'episode_run_time' => $E84de30ab6e5b0c1['episode_run_time'], 'category_id' => strval(json_decode($E84de30ab6e5b0c1['category_id'], true)[0]), 'category_ids' => json_decode($E84de30ab6e5b0c1['category_id'], true)];
	goto label762;

	label687:

	$E6f758b9be57a931 = (empty(XUI::$rRequest['series_id']) ? 0 : intval(XUI::$rRequest['series_id']));

	if (XUI::$rCached) {
		goto label1002;
	}

	XUI::$db->query('SELECT * FROM `streams_episodes` t1 INNER JOIN `streams` t2 ON t2.id=t1.stream_id WHERE t1.series_id = ? ORDER BY t1.season_num ASC, t1.episode_num ASC', $E6f758b9be57a931);
	$D8e7681dfae2905b = XUI::$db->get_rows(true, 'season_num', false);
	XUI::$db->query('SELECT * FROM `streams_series` WHERE `id` = ?', $E6f758b9be57a931);
	goto label997;

	label720:

	$d094d3e133ec8c03['seasons'] = [];

	foreach (!empty($E84de30ab6e5b0c1['seasons']) ? array_values(json_decode($E84de30ab6e5b0c1['seasons'], true)) : [] as $Bb9fda5ebf825f11) {
		$Bb9fda5ebf825f11['cover'] = XUI::fcA722697178454b($Bb9fda5ebf825f11['cover']);
		$Bb9fda5ebf825f11['cover_big'] = XUI::FcA722697178454B($Bb9fda5ebf825f11['cover_big']);
		$d094d3e133ec8c03['seasons'][] = $Bb9fda5ebf825f11;
	}

	$f542eb18b9e5f798 = json_decode($E84de30ab6e5b0c1['backdrop_path'], true);
	goto label593;

	label762:

	foreach ($D8e7681dfae2905b as $Bb9fda5ebf825f11 => $D8329ce54de87aa5) {
		$c99954774a4fb4f5 = 1;

		foreach ($D8329ce54de87aa5 as $e61e6dcee1252fa2) {
			goto label964;

			label771:

			if (XUI::$rSettings['api_redirect']) {
				goto label781;
			}

			$A7ca171405b19571 = '';
			goto label810;

			label781:

			goto label784;

			label784:

			$Ccbe1c85185d3717 = 'series/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $Fe97ae9d15f530b6['id'] . '/' . $Fe97ae9d15f530b6['target_container'];
			$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
			$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b);

			label810:

			$Ccbdf03f8a4df633 = (!empty($Fe97ae9d15f530b6['movie_properties']) ? json_decode($Fe97ae9d15f530b6['movie_properties'], true) : '');
			goto label858;

			label825:

			if (!is_array($Ccbdf03f8a4df633['subtitle'])) {
				goto label855;
			}

			$df6991d59f367c7e = 0;

			foreach ($Ccbdf03f8a4df633['subtitle'] as $Dd11fd28d5f0e5fd) {
				$bfe0795d7498567d[] = ['index' => $df6991d59f367c7e, 'language' => $Dd11fd28d5f0e5fd['tags']['language'] ?: NULL, 'title' => $Dd11fd28d5f0e5fd['tags']['title'] ?: NULL];
				$df6991d59f367c7e++;
			}

			label855:

			goto label881;

			label858:

			$Ccbdf03f8a4df633['cover_big'] = XUI::Fca722697178454B($Ccbdf03f8a4df633['cover_big']);
			$Ccbdf03f8a4df633['movie_image'] = XUI::FCa722697178454B($Ccbdf03f8a4df633['movie_image']);

			if ($Ccbdf03f8a4df633['cover_big']) {
				goto label878;
			}

			$Ccbdf03f8a4df633['cover_big'] = $Ccbdf03f8a4df633['movie_image'];

			label878:

			goto label921;

			label881:

			foreach (['audio', 'video', 'subtitle'] as $Bb672d1983256a93) {
				if (!isset($Ccbdf03f8a4df633[$Bb672d1983256a93])) {
					goto label891;
				}

				unset($Ccbdf03f8a4df633[$Bb672d1983256a93]);

				label891:
			}

			$d094d3e133ec8c03['episodes'][$Bb9fda5ebf825f11][] = ['id' => $e61e6dcee1252fa2['stream_id'], 'episode_num' => $e61e6dcee1252fa2['episode_num'], 'title' => $Fe97ae9d15f530b6['stream_display_name'], 'container_extension' => $Fe97ae9d15f530b6['target_container'], 'info' => $Ccbdf03f8a4df633, 'subtitles' => $bfe0795d7498567d, 'custom_sid' => strval($Fe97ae9d15f530b6['custom_sid']), 'added' => $Fe97ae9d15f530b6['added'] ?: '', 'season' => $Bb9fda5ebf825f11, 'direct_source' => $A7ca171405b19571];
			goto label991;

			label921:

			if (!(0 < count($Ccbdf03f8a4df633['backdrop_path']))) {
				goto label960;
			}

			foreach (range(0, count($Ccbdf03f8a4df633['backdrop_path']) - 1) as $df6991d59f367c7e) {
				if (!$Ccbdf03f8a4df633['backdrop_path'][$df6991d59f367c7e]) {
					goto label958;
				}

				$Ccbdf03f8a4df633['backdrop_path'][$df6991d59f367c7e] = XUI::fca722697178454B($Ccbdf03f8a4df633['backdrop_path'][$df6991d59f367c7e]);

				label958:
			}

			label960:

			$bfe0795d7498567d = [];
			goto label825;

			label964:

			if (XUI::$rCached) {
				goto label973;
			}

			$Fe97ae9d15f530b6 = $e61e6dcee1252fa2;
			goto label771;

			label973:

			$Fe97ae9d15f530b6 = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($e61e6dcee1252fa2['stream_id'])))['info'];
			goto label771;

			label991:
		}
	}

	goto label3630;
	goto label1023;

	label997:

	$E84de30ab6e5b0c1 = XUI::$db->get_row();
	goto label720;

	label1002:

	$E84de30ab6e5b0c1 = igbinary_unserialize(file_get_contents(SERIES_TMP_PATH . 'series_' . $E6f758b9be57a931));
	$D8e7681dfae2905b = igbinary_unserialize(file_get_contents(SERIES_TMP_PATH . 'episodes_' . $E6f758b9be57a931));
	goto label720;
case 'get_series':
	label1023:

	goto label1037;

	label1024:

	goto label1365;

	label1025:

	if (!XUI::$rSettings['vod_sort_newest']) {
		goto label1036;
	}

	$E59d0debc75e7be8['series_ids'] = XUI::sortSeries($E59d0debc75e7be8['series_ids']);

	label1036:

	goto label1223;

	label1037:

	$B609613473ecda8a = (empty(XUI::$rRequest['category_id']) ? NULL : intval(XUI::$rRequest['category_id']));
	$Bc92d14b995819be = 0;

	if (!(0 < count($E59d0debc75e7be8['series_ids']))) {
		goto label1365;
	}

	if (XUI::$rCached) {
		goto label1025;
	}

	if (empty($E59d0debc75e7be8['series_ids'])) {
		goto label1222;
	}

	goto label1367;

	label1065:

	$d02ef9ae10a41939 = XUI::$db->get_rows(true, 'id');

	foreach ($d02ef9ae10a41939 as $F7f30ae59097abd6) {
		goto label1190;

		label1075:

		foreach (range(0, count($f542eb18b9e5f798) - 1) as $df6991d59f367c7e) {
			$f542eb18b9e5f798[$df6991d59f367c7e] = XUI::FCA722697178454B($f542eb18b9e5f798[$df6991d59f367c7e]);
		}

		label1093:

		$F05acfe4a87b8eb0 = json_decode($F7f30ae59097abd6['category_id'], true);

		foreach ($F05acfe4a87b8eb0 as $fe63f70cd74f3298) {
			if (!(!$B609613473ecda8a || ($B609613473ecda8a == $fe63f70cd74f3298))) {
				goto label1172;
			}

			$d094d3e133ec8c03[] = ['num' => ++$Bc92d14b995819be, 'name' => XUI::CF5D4A2F3De8982c($F7f30ae59097abd6['title'], $F7f30ae59097abd6['year']), 'title' => $F7f30ae59097abd6['title'], 'year' => $F7f30ae59097abd6['year'], 'stream_type' => 'series', 'series_id' => (int) $F7f30ae59097abd6['id'], 'cover' => XUI::fcA722697178454b($F7f30ae59097abd6['cover']), 'plot' => $F7f30ae59097abd6['plot'], 'cast' => $F7f30ae59097abd6['cast'], 'director' => $F7f30ae59097abd6['director'], 'genre' => $F7f30ae59097abd6['genre'], 'release_date' => $F7f30ae59097abd6['release_date'], 'releaseDate' => $F7f30ae59097abd6['release_date'], 'last_modified' => $F7f30ae59097abd6['last_modified'], 'rating' => number_format($F7f30ae59097abd6['rating'], 0), 'rating_5based' => number_format($F7f30ae59097abd6['rating'] * 0.5, 1) + 0, 'backdrop_path' => $f542eb18b9e5f798, 'youtube_trailer' => $F7f30ae59097abd6['youtube_trailer'], 'episode_run_time' => $F7f30ae59097abd6['episode_run_time'], 'category_id' => strval($fe63f70cd74f3298), 'category_ids' => $F05acfe4a87b8eb0];

			label1172:
			if (!(!$B609613473ecda8a && !XUI::$rSettings['show_category_duplicates'])) {
				goto label1186;
			}

			goto label1218;

			label1186:
		}

		goto label1218;

		label1190:
		if (!(isset($F7f30ae59097abd6['last_modified_stream']) && !empty($F7f30ae59097abd6['last_modified_stream']))) {
			goto label1202;
		}

		$F7f30ae59097abd6['last_modified'] = $F7f30ae59097abd6['last_modified_stream'];

		label1202:

		$f542eb18b9e5f798 = json_decode($F7f30ae59097abd6['backdrop_path'], true);

		if (!(0 < count($f542eb18b9e5f798))) {
			goto label1093;
		}

		goto label1075;

		label1218:

		goto label1220;

		label1220:
	}

	label1222:

	goto label1024;

	label1223:

	foreach ($E59d0debc75e7be8['series_ids'] as $E6f758b9be57a931) {
		$F7f30ae59097abd6 = igbinary_unserialize(file_get_contents(SERIES_TMP_PATH . 'series_' . $E6f758b9be57a931));
		$f542eb18b9e5f798 = json_decode($F7f30ae59097abd6['backdrop_path'], true);

		if (!(0 < count($f542eb18b9e5f798))) {
			goto label1268;
		}

		foreach (range(0, count($f542eb18b9e5f798) - 1) as $df6991d59f367c7e) {
			$f542eb18b9e5f798[$df6991d59f367c7e] = XUI::fca722697178454b($f542eb18b9e5f798[$df6991d59f367c7e]);
		}

		label1268:

		$F05acfe4a87b8eb0 = json_decode($F7f30ae59097abd6['category_id'], true);

		foreach ($F05acfe4a87b8eb0 as $fe63f70cd74f3298) {
			if (!(!$B609613473ecda8a || ($B609613473ecda8a == $fe63f70cd74f3298))) {
				goto label1347;
			}

			$d094d3e133ec8c03[] = ['num' => ++$Bc92d14b995819be, 'name' => XUI::cF5D4A2F3DE8982c($F7f30ae59097abd6['title'], $F7f30ae59097abd6['year']), 'title' => $F7f30ae59097abd6['title'], 'year' => $F7f30ae59097abd6['year'], 'stream_type' => 'series', 'series_id' => (int) $F7f30ae59097abd6['id'], 'cover' => XUI::fcA722697178454B($F7f30ae59097abd6['cover']), 'plot' => $F7f30ae59097abd6['plot'], 'cast' => $F7f30ae59097abd6['cast'], 'director' => $F7f30ae59097abd6['director'], 'genre' => $F7f30ae59097abd6['genre'], 'release_date' => $F7f30ae59097abd6['release_date'], 'releaseDate' => $F7f30ae59097abd6['release_date'], 'last_modified' => $F7f30ae59097abd6['last_modified'], 'rating' => number_format($F7f30ae59097abd6['rating'], 0), 'rating_5based' => number_format($F7f30ae59097abd6['rating'] * 0.5, 1) + 0, 'backdrop_path' => $f542eb18b9e5f798, 'youtube_trailer' => $F7f30ae59097abd6['youtube_trailer'], 'episode_run_time' => $F7f30ae59097abd6['episode_run_time'], 'category_id' => strval($fe63f70cd74f3298), 'category_ids' => $F05acfe4a87b8eb0];

			label1347:
			if (!(!$B609613473ecda8a && !XUI::$rSettings['show_category_duplicates'])) {
				goto label1361;
			}

			goto label1363;

			label1361:
		}

		label1363:
	}

	label1365:

	goto label3630;
	goto label1410;

	label1367:

	if (XUI::$rSettings['vod_sort_newest']) {
		goto label1394;
	}

	XUI::$db->query('SELECT * FROM `streams_series` WHERE `id` IN (' . implode(',', array_map('intval', $E59d0debc75e7be8['series_ids'])) . ') ORDER BY FIELD(`id`,' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ASC;');
	goto label1065;

	label1394:

	XUI::$db->query('SELECT *, (SELECT MAX(`streams`.`added`) FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) AS `last_modified_stream` FROM `streams_series` WHERE `id` IN (' . implode(',', array_map('intval', $E59d0debc75e7be8['series_ids'])) . ') ORDER BY `last_modified_stream` DESC, `last_modified` DESC;');
	goto label1065;
case 'get_vod_categories':
	label1410:

	$F771d40e8cf51e59 = XUI::C721Bd954A5F072f('movie');

	foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
		if (!in_array($Dbcac322b4274e46['id'], $E59d0debc75e7be8['category_ids'])) {
			goto label1436;
		}

		$d094d3e133ec8c03[] = ['category_id' => strval($Dbcac322b4274e46['id']), 'category_name' => $Dbcac322b4274e46['category_name'], 'parent_id' => 0];

		label1436:
	}

	goto label3630;
case 'get_series_categories':
	$F771d40e8cf51e59 = XUI::c721BD954A5f072f('series');

	foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
		if (!in_array($Dbcac322b4274e46['id'], $E59d0debc75e7be8['category_ids'])) {
			goto label1465;
		}

		$d094d3e133ec8c03[] = ['category_id' => strval($Dbcac322b4274e46['id']), 'category_name' => $Dbcac322b4274e46['category_name'], 'parent_id' => 0];

		label1465:
	}

	goto label3630;
case 'get_live_categories':
	$F771d40e8cf51e59 = array_merge(XUI::c721Bd954a5F072F('live'), XUI::C721BD954a5f072f('radio'));

	foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
		if (!in_array($Dbcac322b4274e46['id'], $E59d0debc75e7be8['category_ids'])) {
			goto label1501;
		}

		$d094d3e133ec8c03[] = ['category_id' => strval($Dbcac322b4274e46['id']), 'category_name' => $Dbcac322b4274e46['category_name'], 'parent_id' => 0];

		label1501:
	}

	goto label3630;
case 'get_simple_data_table':
	goto label1515;

	label1505:

	goto label1514;

	label1506:

	$d344a66178d455b1 = false;
	$dec36723d7be7c49 = [intval(XUI::$rRequest['stream_id'])];

	label1514:

	goto label1775;

	label1515:

	$d094d3e133ec8c03['epg_listings'] = [];

	if (empty(XUI::$rRequest['stream_id'])) {
		goto label1985;
	}
	if (is_numeric(XUI::$rRequest['stream_id']) && !isset(XUI::$rRequest['multi'])) {
		goto label1506;
	}

	$d344a66178d455b1 = true;
	$dec36723d7be7c49 = array_map('intval', explode(',', XUI::$rRequest['stream_id']));
	goto label1505;

	label1546:

	foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
		if (!file_exists(STREAMS_TMP_PATH . 'stream_' . intval($ee6d1fc5d801b43f))) {
			goto label1589;
		}

		$Fb9da1713bff19ce = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($ee6d1fc5d801b43f)))['info'];
		$b42f717d234fde64[str_replace('\'', '\\\'', $Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'])] = ['stream_id' => $ee6d1fc5d801b43f, 'tv_archive_duration' => $Fb9da1713bff19ce['tv_archive_duration']];

		label1589:
	}

	if (!(0 < count($b42f717d234fde64))) {
		goto label1985;
	}

	foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
		if (!file_exists(EPG_PATH . 'stream_' . intval($ee6d1fc5d801b43f))) {
			goto label1772;
		}

		$D8e7681dfae2905b = igbinary_unserialize(file_get_contents(EPG_PATH . 'stream_' . $ee6d1fc5d801b43f));

		foreach ($D8e7681dfae2905b as $b1eed3fdb609052d) {
			goto label1628;

			label1628:

			$e5d6d9914789e460 = 0;
			$F1fa02f122ed277e = 0;
			$b1eed3fdb609052d['start_timestamp'] = $b1eed3fdb609052d['start'];
			$b1eed3fdb609052d['stop_timestamp'] = $b1eed3fdb609052d['end'];
			if (!(($b1eed3fdb609052d['start_timestamp'] <= time()) && (time() <= $b1eed3fdb609052d['stop_timestamp']))) {
				goto label1723;
			}

			goto label1722;

			label1654:

			$b1eed3fdb609052d['start'] = date('Y-m-d H:i:s', $b1eed3fdb609052d['start_timestamp']);
			$b1eed3fdb609052d['end'] = date('Y-m-d H:i:s', $b1eed3fdb609052d['stop_timestamp']);

			if ($d344a66178d455b1) {
				goto label1715;
			}

			$d094d3e133ec8c03['epg_listings'][] = $b1eed3fdb609052d;
			goto label1719;
			goto label1715;

			label1681:

			$ee6d1fc5d801b43f = intval($b42f717d234fde64[str_replace('\'', '\\\'', $b1eed3fdb609052d['epg_id'] . '_' . $b1eed3fdb609052d['channel_id'])]['stream_id']);
			$b1eed3fdb609052d['now_playing'] = $e5d6d9914789e460;
			$b1eed3fdb609052d['has_archive'] = $F1fa02f122ed277e;
			$b1eed3fdb609052d['title'] = base64_encode($b1eed3fdb609052d['title']);
			$b1eed3fdb609052d['description'] = base64_encode($b1eed3fdb609052d['description']);
			goto label1654;

			label1715:

			$d094d3e133ec8c03['epg_listings'][$ee6d1fc5d801b43f][] = $b1eed3fdb609052d;

			label1719:

			goto label1770;

			label1722:

			$e5d6d9914789e460 = 1;

			label1723:
			if (!(!empty($b42f717d234fde64[str_replace('\'', '\\\'', $b1eed3fdb609052d['epg_id'] . '_' . $b1eed3fdb609052d['channel_id'])]['tv_archive_duration']) && ($b1eed3fdb609052d['stop_timestamp'] < time()) && (strtotime('-' . $b42f717d234fde64[str_replace('\'', '\\\'', $b1eed3fdb609052d['epg_id'] . '_' . $b1eed3fdb609052d['channel_id'])]['tv_archive_duration'] . ' days') <= $b1eed3fdb609052d['stop_timestamp']))) {
				goto label1767;
			}

			$F1fa02f122ed277e = 1;

			label1767:

			goto label1681;

			label1770:
		}

		label1772:
	}

	goto label1985;

	label1775:

	if (!(0 < count($dec36723d7be7c49))) {
		goto label1985;
	}

	$b42f717d234fde64 = [];

	if (XUI::$rCached) {
		goto label1984;
	}

	XUI::$db->query('SELECT `id`, `tv_archive_duration`, `epg_id`, `channel_id` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');

	foreach (XUI::$db->get_rows() as $Fb9da1713bff19ce) {
		$b42f717d234fde64[str_replace('\'', '\\\'', $Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'])] = ['stream_id' => $Fb9da1713bff19ce['id'], 'tv_archive_duration' => $Fb9da1713bff19ce['tv_archive_duration']];
	}

	goto label1819;

	label1819:

	if (!(0 < count($b42f717d234fde64))) {
		goto label1983;
	}

	XUI::$db->query('SELECT *, start as start_timestamp, end as stop_timestamp FROM `epg_data` WHERE CONCAT(`epg_id`, \'_\', `channel_id`) IN (\'' . implode('\',\'', array_keys($b42f717d234fde64)) . '\') ORDER BY `start` ASC');

	if (!(0 < XUI::$db->num_rows())) {
		goto label1983;
	}

	foreach (XUI::$db->get_rows() as $b1eed3fdb609052d) {
		goto label1853;

		label1853:

		$e5d6d9914789e460 = 0;
		$F1fa02f122ed277e = 0;
		if (!(($b1eed3fdb609052d['start_timestamp'] <= time()) && (time() <= $b1eed3fdb609052d['stop_timestamp']))) {
			goto label1870;
		}

		$e5d6d9914789e460 = 1;

		label1870:

		goto label1874;

		label1872:

		goto label1980;

		label1874:
		if (!(!empty($b42f717d234fde64[str_replace('\'', '\\\'', $b1eed3fdb609052d['epg_id'] . '_' . $b1eed3fdb609052d['channel_id'])]['tv_archive_duration']) && ($b1eed3fdb609052d['stop_timestamp'] < time()) && (strtotime('-' . $b42f717d234fde64[str_replace('\'', '\\\'', $b1eed3fdb609052d['epg_id'] . '_' . $b1eed3fdb609052d['channel_id'])]['tv_archive_duration'] . ' days') <= $b1eed3fdb609052d['stop_timestamp']))) {
			goto label1917;
		}

		$F1fa02f122ed277e = 1;

		label1917:

		$ee6d1fc5d801b43f = intval($b42f717d234fde64[str_replace('\'', '\\\'', $b1eed3fdb609052d['epg_id'] . '_' . $b1eed3fdb609052d['channel_id'])]['stream_id']);
		$b1eed3fdb609052d['now_playing'] = $e5d6d9914789e460;
		goto label1950;

		label1936:

		if ($d344a66178d455b1) {
			goto label1944;
		}

		$d094d3e133ec8c03['epg_listings'][] = $b1eed3fdb609052d;
		goto label1872;

		label1944:

		$d094d3e133ec8c03['epg_listings'][$ee6d1fc5d801b43f][] = $b1eed3fdb609052d;
		goto label1872;

		label1950:

		$b1eed3fdb609052d['has_archive'] = $F1fa02f122ed277e;
		$b1eed3fdb609052d['title'] = base64_encode($b1eed3fdb609052d['title']);
		$b1eed3fdb609052d['description'] = base64_encode($b1eed3fdb609052d['description']);
		$b1eed3fdb609052d['start'] = date('Y-m-d H:i:s', $b1eed3fdb609052d['start_timestamp']);
		$b1eed3fdb609052d['end'] = date('Y-m-d H:i:s', $b1eed3fdb609052d['stop_timestamp']);
		goto label1936;

		label1980:
	}

	goto label1983;

	label1983:

	goto label1985;

	label1984:

	goto label1546;

	label1985:

	goto label3630;
	goto label1987;
case 'get_short_epg':
	label1987:

	goto label2185;

	label1988:

	$Ab13f2545dd3df14 = time();

	foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
		if (!file_exists(EPG_PATH . 'stream_' . intval($ee6d1fc5d801b43f))) {
			goto label2109;
		}

		$D8e7681dfae2905b = igbinary_unserialize(file_get_contents(EPG_PATH . 'stream_' . $ee6d1fc5d801b43f));

		foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
			goto label2071;

			label2021:

			$Fb9da1713bff19ce['start'] = date('Y-m-d H:i:s', $Fb9da1713bff19ce['start']);
			$Fb9da1713bff19ce['stop'] = date('Y-m-d H:i:s', $Fb9da1713bff19ce['end']);

			if ($d344a66178d455b1) {
				goto label2048;
			}

			$d094d3e133ec8c03['epg_listings'][] = $Fb9da1713bff19ce;
			goto label2052;
			goto label2048;

			label2048:

			$d094d3e133ec8c03['epg_listings'][$ee6d1fc5d801b43f][] = $Fb9da1713bff19ce;

			label2052:

			if (!($Cc2b5dfe75dc164b <= count($d094d3e133ec8c03['epg_listings']))) {
				goto label2068;
			}

			goto label2109;
			goto label2068;

			label2068:

			goto label2107;

			label2071:
			if (!((($Fb9da1713bff19ce['start'] <= $Ab13f2545dd3df14) && ($Ab13f2545dd3df14 <= $Fb9da1713bff19ce['end'])) || ($Ab13f2545dd3df14 <= $Fb9da1713bff19ce['start']))) {
				goto label2068;
			}

			$Fb9da1713bff19ce['start_timestamp'] = $Fb9da1713bff19ce['start'];
			$Fb9da1713bff19ce['stop_timestamp'] = $Fb9da1713bff19ce['end'];
			$Fb9da1713bff19ce['title'] = base64_encode($Fb9da1713bff19ce['title']);
			$Fb9da1713bff19ce['description'] = base64_encode($Fb9da1713bff19ce['description']);
			goto label2021;

			label2107:
		}

		label2109:
	}

	label2111:

	goto label2161;

	label2112:

	foreach (XUI::$db->get_rows() as $Fb9da1713bff19ce) {
		$ee6d1fc5d801b43f = intval($b42f717d234fde64[str_replace('\'', '\\\'', $Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'])]);
		$Fb9da1713bff19ce['start'] = date('Y-m-d H:i:s', $Fb9da1713bff19ce['start']);
		$Fb9da1713bff19ce['stop'] = date('Y-m-d H:i:s', $Fb9da1713bff19ce['end']);

		if ($d344a66178d455b1) {
			goto label2153;
		}

		$d094d3e133ec8c03['epg_listings'][] = $Fb9da1713bff19ce;
		goto label2157;

		label2153:

		$d094d3e133ec8c03['epg_listings'][$ee6d1fc5d801b43f][] = $Fb9da1713bff19ce;

		label2157:
	}

	label2159:

	goto label2111;
	goto label1988;

	label2161:

	goto label3630;
	goto label2296;

	label2163:

	if (!(0 < count($dec36723d7be7c49))) {
		goto label2161;
	}

	if (XUI::$rCached) {
		goto label1988;
	}

	$b42f717d234fde64 = [];
	XUI::$db->query('SELECT `id`, `epg_id`, `channel_id` FROM `streams` WHERE `id` IN (' . implode(',', $dec36723d7be7c49) . ');');
	goto label2217;

	label2185:

	$d094d3e133ec8c03['epg_listings'] = [];

	if (empty(XUI::$rRequest['stream_id'])) {
		goto label2161;
	}

	$Cc2b5dfe75dc164b = (empty(XUI::$rRequest['limit']) ? 4 : intval(XUI::$rRequest['limit']));
	if (is_numeric(XUI::$rRequest['stream_id']) && !isset(XUI::$rRequest['multi'])) {
		goto label2287;
	}

	$d344a66178d455b1 = true;
	goto label2275;

	label2217:

	foreach (XUI::$db->get_rows() as $Fb9da1713bff19ce) {
		$b42f717d234fde64[str_replace('\'', '\\\'', $Fb9da1713bff19ce['epg_id'] . '_' . $Fb9da1713bff19ce['channel_id'])] = $Fb9da1713bff19ce['id'];
	}

	if (!(0 < count($b42f717d234fde64))) {
		goto label2159;
	}

	XUI::$db->query('SELECT `id`, `channel_id`, `epg_id`, `start`, `end`, `start` as `start_timestamp`, `end` as `stop_timestamp`, TO_BASE64(`title`) AS `title`, TO_BASE64(`description`) AS `description`, `lang` FROM `epg_data` WHERE CONCAT(`epg_id`, \'_\', `channel_id`) IN (\'' . implode('\',\'', array_keys($b42f717d234fde64)) . '\') AND (? BETWEEN `start` AND `end` OR `start` >= ?) ORDER BY `start` LIMIT ' . intval($Cc2b5dfe75dc164b) . ';', time(), time());

	if (!(0 < XUI::$db->num_rows())) {
		goto label2159;
	}

	goto label2112;

	label2275:

	$dec36723d7be7c49 = array_map('intval', explode(',', XUI::$rRequest['stream_id']));
	goto label2163;

	label2287:

	$d344a66178d455b1 = false;
	$dec36723d7be7c49 = [intval(XUI::$rRequest['stream_id'])];
	goto label2163;
case 'get_live_streams':
	label2296:

	goto label2327;

	label2297:

	$E59d0debc75e7be8['live_ids'] = XUI::Ee26f6aDbd1e84E9($E59d0debc75e7be8['live_ids']);

	if (!XUI::$rCached) {
		goto label2382;
	}

	$A5a4a57a12bb19b3 = $E59d0debc75e7be8['live_ids'];
	goto label2645;
	goto label2382;

	label2311:

	if (XUI::$rSettings['channel_number_type'] != 'manual') {
		goto label2318;
	}

	$a2a53f18f4f95c8b = '`order`';
	goto label2631;

	label2318:

	$a2a53f18f4f95c8b = 'FIELD(`t1`.`id`,' . implode(',', $E59d0debc75e7be8['live_ids']) . ')';
	goto label2631;

	label2327:

	$B609613473ecda8a = (empty(XUI::$rRequest['category_id']) ? NULL : intval(XUI::$rRequest['category_id']));
	$ffc1f28dbfb1c664 = 0;
	$E59d0debc75e7be8['live_ids'] = array_merge($E59d0debc75e7be8['live_ids'], $E59d0debc75e7be8['radio_ids']);

	if (empty($Bb57dd8e4ccf3ae6['items_per_page'])) {
		goto label2297;
	}

	$E59d0debc75e7be8['live_ids'] = array_slice($E59d0debc75e7be8['live_ids'], $Bb57dd8e4ccf3ae6['offset'], $Bb57dd8e4ccf3ae6['items_per_page']);
	goto label2297;

	label2362:

	$cf0aab70014807af[] = 'JSON_CONTAINS(`category_id`, ?, \'$\')';
	$B03cfeca75020c69[] = $B609613473ecda8a;

	label2366:

	$cf0aab70014807af[] = '`t1`.`id` IN (' . implode(',', $E59d0debc75e7be8['live_ids']) . ')';
	$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
	goto label2311;

	label2382:

	$A5a4a57a12bb19b3 = [];

	if (!(0 < count($E59d0debc75e7be8['live_ids']))) {
		goto label2645;
	}

	$B03cfeca75020c69 = $cf0aab70014807af = [];

	if (empty($B609613473ecda8a)) {
		goto label2366;
	}

	goto label2362;

	label2397:

	foreach ($A5a4a57a12bb19b3 as $aa4e95f1ed1932a8) {
		if (!XUI::$rCached) {
			goto label2418;
		}

		$aa4e95f1ed1932a8 = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($aa4e95f1ed1932a8)))['info'];

		label2418:

		if (in_array($aa4e95f1ed1932a8['type_key'], ['live', 'created_live', 'radio_streams'])) {
			goto label2428;
		}

		goto label2627;

		label2428:

		$F05acfe4a87b8eb0 = json_decode($aa4e95f1ed1932a8['category_id'], true);

		foreach ($F05acfe4a87b8eb0 as $fe63f70cd74f3298) {
			goto label2588;

			label2439:

			$Ccbe1c85185d3717 = 'thumb/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $aa4e95f1ed1932a8['id'];
			$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
			$f22c03cec8ad9f56 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b);

			label2462:

			$d094d3e133ec8c03[] = ['num' => ++$ffc1f28dbfb1c664, 'name' => $aa4e95f1ed1932a8['stream_display_name'], 'stream_type' => $aa4e95f1ed1932a8['type_key'], 'stream_id' => (int) $aa4e95f1ed1932a8['id'], 'stream_icon' => $c60c238a4089e36c, 'epg_channel_id' => $aa4e95f1ed1932a8['channel_id'], 'added' => $aa4e95f1ed1932a8['added'] ?: '', 'custom_sid' => strval($aa4e95f1ed1932a8['custom_sid']), 'tv_archive' => $Cf63fde41ec84011, 'direct_source' => $A7ca171405b19571, 'tv_archive_duration' => $Cf63fde41ec84011 ? intval($aa4e95f1ed1932a8['tv_archive_duration']) : 0, 'category_id' => strval($fe63f70cd74f3298), 'category_ids' => $F05acfe4a87b8eb0, 'thumbnail' => $f22c03cec8ad9f56];
			goto label2571;

			label2505:

			goto label2559;

			label2508:

			$Ccbe1c85185d3717 = 'live/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $aa4e95f1ed1932a8['id'];
			$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
			if (XUI::$rSettings['cloudflare'] && (XUI::$rSettings['api_container'] == 'ts')) {
				goto label2552;
			}

			goto label2541;

			label2541:

			$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b . '/') . XUI::$rSettings['api_container'];
			goto label2556;

			label2552:

			$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b);

			label2556:

			goto label2559;

			label2559:

			if ($aa4e95f1ed1932a8['vframes_server_id']) {
				goto label2568;
			}

			$f22c03cec8ad9f56 = '';
			goto label2462;

			label2568:

			goto label2439;

			label2571:
			if (!(!$B609613473ecda8a && !XUI::$rSettings['show_category_duplicates'])) {
				goto label2585;
			}

			goto label2627;

			label2585:

			goto label2625;

			label2588:
			if (!(!$B609613473ecda8a || ($B609613473ecda8a == $fe63f70cd74f3298))) {
				goto label2571;
			}

			$c60c238a4089e36c = XUI::fCA722697178454b($aa4e95f1ed1932a8['stream_icon']) ?: '';
			$Cf63fde41ec84011 = (!empty($aa4e95f1ed1932a8['tv_archive_server_id']) && !empty($aa4e95f1ed1932a8['tv_archive_duration']) ? 1 : 0);

			if (XUI::$rSettings['api_redirect']) {
				goto label2508;
			}

			$A7ca171405b19571 = '';
			goto label2505;

			label2625:
		}

		label2627:
	}

	goto label3630;
	goto label2646;

	label2631:

	XUI::$db->query('SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';', ...$B03cfeca75020c69);
	$A5a4a57a12bb19b3 = XUI::$db->get_rows();

	label2645:

	goto label2397;
case 'get_vod_info':
	label2646:

	goto label2647;

	label2647:

	$d094d3e133ec8c03['info'] = [];

	if (empty(XUI::$rRequest['vod_id'])) {
		goto label2834;
	}

	$b33e273c4837adac = intval(XUI::$rRequest['vod_id']);

	if (XUI::$rCached) {
		goto label2819;
	}

	XUI::$db->query('SELECT * FROM `streams` WHERE `id` = ?', $b33e273c4837adac);
	goto label2814;

	label2668:

	$Ccbe1c85185d3717 = 'movie/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $Fb9da1713bff19ce['id'] . '/' . $Fb9da1713bff19ce['target_container'];
	$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
	$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b);

	label2694:

	$d094d3e133ec8c03['info'] = json_decode($Fb9da1713bff19ce['movie_properties'], true);
	goto label2836;

	label2702:

	foreach (['audio', 'video', 'subtitle'] as $Bb672d1983256a93) {
		if (!isset($d094d3e133ec8c03['info'][$Bb672d1983256a93])) {
			goto label2712;
		}

		unset($d094d3e133ec8c03['info'][$Bb672d1983256a93]);

		label2712:
	}

	$d094d3e133ec8c03['movie_data'] = ['stream_id' => (int) $Fb9da1713bff19ce['id'], 'name' => XUI::CF5D4a2f3de8982c($Fb9da1713bff19ce['stream_display_name'], $Fb9da1713bff19ce['year']), 'title' => $Fb9da1713bff19ce['stream_display_name'], 'year' => $Fb9da1713bff19ce['year'], 'added' => $Fb9da1713bff19ce['added'] ?: '', 'category_id' => strval(json_decode($Fb9da1713bff19ce['category_id'], true)[0]), 'category_ids' => json_decode($Fb9da1713bff19ce['category_id'], true), 'container_extension' => $Fb9da1713bff19ce['target_container'], 'custom_sid' => strval($Fb9da1713bff19ce['custom_sid']), 'direct_source' => $A7ca171405b19571];

	label2759:

	goto label2834;

	label2760:

	if (!$Fb9da1713bff19ce) {
		goto label2759;
	}

	if (XUI::$rSettings['api_redirect']) {
		goto label2769;
	}

	$A7ca171405b19571 = '';
	goto label2694;

	label2769:

	goto label2668;

	label2770:

	$d094d3e133ec8c03['info']['rating'] = number_format($d094d3e133ec8c03['info']['rating'], 2) + 0;

	if (!(0 < count($d094d3e133ec8c03['info']['backdrop_path']))) {
		goto label2813;
	}

	foreach (range(0, count($d094d3e133ec8c03['info']['backdrop_path']) - 1) as $df6991d59f367c7e) {
		$d094d3e133ec8c03['info']['backdrop_path'][$df6991d59f367c7e] = XUI::Fca722697178454b($d094d3e133ec8c03['info']['backdrop_path'][$df6991d59f367c7e]);
	}

	label2813:

	goto label2874;

	label2814:

	$Fb9da1713bff19ce = XUI::$db->get_row();
	goto label2833;

	label2819:

	$Fb9da1713bff19ce = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($b33e273c4837adac)))['info'];

	label2833:

	goto label2760;

	label2834:

	goto label3630;
	goto label2910;

	label2836:

	$d094d3e133ec8c03['info']['tmdb_id'] = intval($d094d3e133ec8c03['info']['tmdb_id']);
	$d094d3e133ec8c03['info']['episode_run_time'] = intval($d094d3e133ec8c03['info']['episode_run_time']);
	$d094d3e133ec8c03['info']['releasedate'] = $d094d3e133ec8c03['info']['release_date'];
	$d094d3e133ec8c03['info']['cover_big'] = XUI::fca722697178454b($d094d3e133ec8c03['info']['cover_big']);
	$d094d3e133ec8c03['info']['movie_image'] = XUI::Fca722697178454b($d094d3e133ec8c03['info']['movie_image']);
	goto label2770;

	label2874:

	$d094d3e133ec8c03['info']['subtitles'] = [];

	if (!is_array($d094d3e133ec8c03['info']['subtitle'])) {
		goto label2702;
	}

	$df6991d59f367c7e = 0;

	foreach ($d094d3e133ec8c03['info']['subtitle'] as $Dd11fd28d5f0e5fd) {
		$d094d3e133ec8c03['info']['subtitles'][] = ['index' => $df6991d59f367c7e, 'language' => $Dd11fd28d5f0e5fd['tags']['language'] ?: NULL, 'title' => $Dd11fd28d5f0e5fd['tags']['title'] ?: NULL];
		$df6991d59f367c7e++;
	}

	goto label2702;
case 'get_vod_streams':
	label2910:

	goto label2925;

	label2911:

	$E59d0debc75e7be8['vod_ids'] = XUI::Ee26f6aDBd1E84E9($E59d0debc75e7be8['vod_ids']);

	if (!XUI::$rCached) {
		goto label2924;
	}

	$A5a4a57a12bb19b3 = $E59d0debc75e7be8['vod_ids'];
	goto label2994;

	label2924:

	goto label2952;

	label2925:

	$B609613473ecda8a = (empty(XUI::$rRequest['category_id']) ? NULL : intval(XUI::$rRequest['category_id']));
	$Bc92d14b995819be = 0;

	if (empty($Bb57dd8e4ccf3ae6['items_per_page'])) {
		goto label2951;
	}

	$E59d0debc75e7be8['vod_ids'] = array_slice($E59d0debc75e7be8['vod_ids'], $Bb57dd8e4ccf3ae6['offset'], $Bb57dd8e4ccf3ae6['items_per_page']);

	label2951:

	goto label2911;

	label2952:

	$A5a4a57a12bb19b3 = [];

	if (!(0 < count($E59d0debc75e7be8['vod_ids']))) {
		goto label2994;
	}

	$B03cfeca75020c69 = $cf0aab70014807af = [];

	if (empty($B609613473ecda8a)) {
		goto label3200;
	}

	$cf0aab70014807af[] = 'JSON_CONTAINS(`category_id`, ?, \'$\')';
	goto label3198;

	label2969:

	$a2a53f18f4f95c8b = '`order`';
	goto label2979;

	label2971:

	$a2a53f18f4f95c8b = 'FIELD(`t1`.`id`,' . implode(',', $E59d0debc75e7be8['vod_ids']) . ')';

	label2979:

	goto label2980;

	label2980:

	XUI::$db->query('SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';', ...$B03cfeca75020c69);
	$A5a4a57a12bb19b3 = XUI::$db->get_rows();

	label2994:

	foreach ($A5a4a57a12bb19b3 as $aa4e95f1ed1932a8) {
		goto label3000;

		label2998:

		goto label3193;

		label3000:

		if (!XUI::$rCached) {
			goto label3019;
		}

		$aa4e95f1ed1932a8 = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($aa4e95f1ed1932a8)))['info'];

		label3019:

		if (in_array($aa4e95f1ed1932a8['type_key'], ['movie'])) {
			goto label3031;
		}

		goto label2998;
		goto label3031;

		label3031:

		$Ccbdf03f8a4df633 = json_decode($aa4e95f1ed1932a8['movie_properties'], true);
		$F05acfe4a87b8eb0 = json_decode($aa4e95f1ed1932a8['category_id'], true);

		foreach ($F05acfe4a87b8eb0 as $fe63f70cd74f3298) {
			goto label3150;

			label3048:

			$Ccbe1c85185d3717 = 'movie/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $aa4e95f1ed1932a8['id'] . '/' . $aa4e95f1ed1932a8['target_container'];
			$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
			$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b);

			label3074:

			$d094d3e133ec8c03[] = ['num' => ++$Bc92d14b995819be, 'name' => XUI::Cf5D4A2f3DE8982C($aa4e95f1ed1932a8['stream_display_name'], $aa4e95f1ed1932a8['year']), 'title' => $aa4e95f1ed1932a8['stream_display_name'], 'year' => $aa4e95f1ed1932a8['year'], 'stream_type' => $aa4e95f1ed1932a8['type_key'], 'stream_id' => (int) $aa4e95f1ed1932a8['id'], 'stream_icon' => XUI::fca722697178454B($Ccbdf03f8a4df633['movie_image']) ?: '', 'rating' => number_format($Ccbdf03f8a4df633['rating'], 1) + 0, 'rating_5based' => number_format($Ccbdf03f8a4df633['rating'] * 0.5, 1) + 0, 'added' => $aa4e95f1ed1932a8['added'] ?: '', 'plot' => $Ccbdf03f8a4df633['plot'], 'cast' => $Ccbdf03f8a4df633['cast'], 'director' => $Ccbdf03f8a4df633['director'], 'genre' => $Ccbdf03f8a4df633['genre'], 'release_date' => $Ccbdf03f8a4df633['release_date'], 'youtube_trailer' => $Ccbdf03f8a4df633['youtube_trailer'], 'episode_run_time' => $Ccbdf03f8a4df633['episode_run_time'], 'category_id' => strval($fe63f70cd74f3298), 'category_ids' => $F05acfe4a87b8eb0, 'container_extension' => $aa4e95f1ed1932a8['target_container'], 'custom_sid' => strval($aa4e95f1ed1932a8['custom_sid']), 'direct_source' => $A7ca171405b19571];
			goto label3172;

			label3150:
			if (!(!$B609613473ecda8a || ($B609613473ecda8a == $fe63f70cd74f3298))) {
				goto label3172;
			}

			if (XUI::$rSettings['api_redirect']) {
				goto label3169;
			}

			$A7ca171405b19571 = '';
			goto label3074;

			label3169:

			goto label3048;

			label3172:
			if (!(!$B609613473ecda8a && !XUI::$rSettings['show_category_duplicates'])) {
				goto label3186;
			}

			goto label3191;

			label3186:

			goto label3189;

			label3189:
		}

		label3191:

		goto label2998;

		label3193:
	}

	goto label3196;

	label3196:

	goto label3630;
	goto label3221;

	label3198:

	$B03cfeca75020c69[] = $B609613473ecda8a;

	label3200:

	$cf0aab70014807af[] = '`t1`.`id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ')';
	$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

	if (XUI::$rSettings['channel_number_type'] != 'manual') {
		goto label2971;
	}

	goto label2969;
default:
	label3221:

	goto label3368;
}

label3222:

if (!isset($B259c62825689c1b)) {
	goto label3229;
}

$d094d3e133ec8c03['user_info']['token'] = $B259c62825689c1b;

label3229:

$d094d3e133ec8c03['user_info']['message'] = XUI::$rSettings['message_of_day'];
$d094d3e133ec8c03['user_info']['auth'] = 1;
goto label3324;

label3238:

if (!(0 < count($E59d0debc75e7be8['channel_ids']))) {
	goto label3430;
}

$B03cfeca75020c69 = $cf0aab70014807af = [];
$cf0aab70014807af[] = '`t1`.`id` IN (' . implode(',', $E59d0debc75e7be8['channel_ids']) . ')';
$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

if (XUI::$rSettings['channel_number_type'] != 'manual') {
	goto label3283;
}

goto label3281;

label3269:

$d094d3e133ec8c03['server_info']['timezone'] = 'UTC';

label3272:

$d094d3e133ec8c03['user_info']['username'] = $E59d0debc75e7be8['username'];
$d094d3e133ec8c03['user_info']['password'] = $E59d0debc75e7be8['password'];
goto label3222;

label3281:

$a2a53f18f4f95c8b = '`order`';
goto label3291;

label3283:

$a2a53f18f4f95c8b = 'FIELD(`t1`.`id`,' . implode(',', $E59d0debc75e7be8['channel_ids']) . ')';

label3291:

goto label3416;

label3292:

foreach (XUI::C721bd954a5f072f() as $Abcb228699a7f743 => $Dbcac322b4274e46) {
	$d094d3e133ec8c03['categories'][$Dbcac322b4274e46['category_type']][] = ['category_id' => $Dbcac322b4274e46['id'], 'category_name' => $Dbcac322b4274e46['category_name'], 'parent_id' => 0];
	$f6b35cbcd6b3c1f1[$Dbcac322b4274e46['id']] = $Dbcac322b4274e46['category_name'];
}

$d094d3e133ec8c03['available_channels'] = [];
$ffc1f28dbfb1c664 = $Bc92d14b995819be = 0;
$E59d0debc75e7be8['channel_ids'] = XUI::ee26F6aDbD1e84e9($E59d0debc75e7be8['channel_ids']);
goto label3586;

label3324:

$d094d3e133ec8c03['user_info']['status'] = 'Active';
$d094d3e133ec8c03['user_info']['exp_date'] = $E59d0debc75e7be8['exp_date'];
$d094d3e133ec8c03['user_info']['is_trial'] = $E59d0debc75e7be8['is_trial'];

if (XUI::$rSettings['redis_handler']) {
	goto label3615;
}

if (!XUI::$rCached) {
	goto label3597;
}

goto label3595;

label3344:

goto label3630;
goto label3630;

label3346:

$d094d3e133ec8c03['user_info']['created_at'] = $E59d0debc75e7be8['created_at'];
$d094d3e133ec8c03['user_info']['max_connections'] = $E59d0debc75e7be8['max_connections'];
$d094d3e133ec8c03['user_info']['allowed_output_formats'] = getoutputformats($E59d0debc75e7be8['allowed_outputs']);

if (!$fb4b25e8039f660e) {
	goto label3344;
}

$d094d3e133ec8c03['categories'] = $f6b35cbcd6b3c1f1 = [];
goto label3292;

label3368:

$d094d3e133ec8c03['user_info'] = [];
$d094d3e133ec8c03['server_info'] = ['xui' => true, 'version' => XUI_VERSION, 'revision' => XUI_REVISION, 'url' => $f547aeca99c55c3e, 'port' => XUI::$rServers[SERVER_ID]['http_broadcast_port'], 'https_port' => XUI::$rServers[SERVER_ID]['https_broadcast_port'], 'server_protocol' => XUI::$rServers[SERVER_ID]['server_protocol'], 'rtmp_port' => XUI::$rServers[SERVER_ID]['rtmp_port'], 'timestamp_now' => time(), 'time_now' => date('Y-m-d H:i:s')];

if (XUI::$rSettings['force_epg_timezone']) {
	goto label3269;
}

$d094d3e133ec8c03['server_info']['timezone'] = XUI::$rSettings['default_timezone'];
goto label3272;
goto label3269;

label3416:

XUI::$db->query('SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';', ...$B03cfeca75020c69);
$A5a4a57a12bb19b3 = XUI::$db->get_rows();

label3430:

foreach ($A5a4a57a12bb19b3 as $aa4e95f1ed1932a8) {
	goto label3541;

	label3434:
	$Cf63fde41ec84011 = (!empty($aa4e95f1ed1932a8['tv_archive_server_id']) && !empty($aa4e95f1ed1932a8['tv_archive_duration']) ? 1 : 0);

	foreach (json_decode($aa4e95f1ed1932a8['category_id'], true) as $fe63f70cd74f3298) {
		$d094d3e133ec8c03['available_channels'][$aa4e95f1ed1932a8['id']] = ['num' => $aa4e95f1ed1932a8['live'] ? $ffc1f28dbfb1c664 : $Bc92d14b995819be, 'name' => XUI::Cf5d4A2F3de8982C($aa4e95f1ed1932a8['stream_display_name'], $aa4e95f1ed1932a8['year']), 'title' => $aa4e95f1ed1932a8['stream_display_name'], 'year' => $aa4e95f1ed1932a8['year'], 'stream_type' => $aa4e95f1ed1932a8['type_key'], 'type_name' => $e1b4bbbe23cc3549[$aa4e95f1ed1932a8['type_key']], 'stream_id' => $aa4e95f1ed1932a8['id'], 'stream_icon' => XUI::fCA722697178454B($B080674c55093935) ?: '', 'epg_channel_id' => $aa4e95f1ed1932a8['channel_id'], 'added' => $aa4e95f1ed1932a8['added'] ?: '', 'category_name' => $f6b35cbcd6b3c1f1[$fe63f70cd74f3298], 'category_id' => strval($fe63f70cd74f3298), 'series_no' => !empty($aa4e95f1ed1932a8['series_no']) ? $aa4e95f1ed1932a8['series_no'] : NULL, 'live' => $aa4e95f1ed1932a8['live'], 'container_extension' => $aa4e95f1ed1932a8['target_container'], 'custom_sid' => strval($aa4e95f1ed1932a8['custom_sid']), 'tv_archive' => $Cf63fde41ec84011, 'direct_source' => $aa4e95f1ed1932a8['direct_source'] ? json_decode($aa4e95f1ed1932a8['stream_source'], true)[0] : '', 'tv_archive_duration' => $Cf63fde41ec84011 ? intval($aa4e95f1ed1932a8['tv_archive_duration']) : 0];
	}

	goto label3583;

	label3541:

	if (!XUI::$rCached) {
		goto label3560;
	}

	$aa4e95f1ed1932a8 = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($aa4e95f1ed1932a8)))['info'];

	label3560:

	if ($aa4e95f1ed1932a8['live']) {
		goto label3577;
	}

	$Bc92d14b995819be++;
	goto label3568;

	label3568:

	$B080674c55093935 = json_decode($aa4e95f1ed1932a8['movie_properties'], true)['movie_image'];
	goto label3434;

	label3577:

	$ffc1f28dbfb1c664++;
	$B080674c55093935 = $aa4e95f1ed1932a8['stream_icon'];
	goto label3434;

	label3583:
}

goto label3344;

label3586:

if (!XUI::$rCached) {
	goto label3593;
}

$A5a4a57a12bb19b3 = $E59d0debc75e7be8['channel_ids'];
goto label3430;

label3593:

$A5a4a57a12bb19b3 = [];
goto label3238;

label3595:

XUI::e43c27EBF86B4C47();

label3597:

XUI::$db->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `user_id` = ? AND `hls_end` = 0 ORDER BY activity_id ASC', $E59d0debc75e7be8['id']);
$d094d3e133ec8c03['user_info']['active_cons'] = XUI::$db->get_row()['count'];
XUI::$db->close_mysql();
goto label3614;

label3614:

goto label3629;

label3615:

XUI::d6aEB3175A43F301();
$d094d3e133ec8c03['user_info']['active_cons'] = count(XUI::E7c45286b27f999b($E59d0debc75e7be8['id'], true, true));

label3629:

goto label3346;

label3630:

exit(json_encode($d094d3e133ec8c03, JSON_PARTIAL_OUTPUT_ON_ERROR));

label3636:

goto label3727;

label3637:

register_shutdown_function('shutdown');
require './stream/init.php';
set_time_limit(0);

if (!XUI::$rSettings['force_epg_timezone']) {
	goto label163;
}

date_default_timezone_set('UTC');
goto label163;

label3653:

header('Content-Type: application/json');

if (!isset($_SERVER['HTTP_ORIGIN'])) {
	goto label3667;
}

header('Access-Control-Allow-Origin: ' . $_SERVER['HTTP_ORIGIN']);

label3667:

header('Access-Control-Allow-Credentials: true');
goto label250;

label3671:

goto label3676;

label3672:

$f76e05a7b2c4a341 = false;
generateError('LEGACY_PANEL_API_DISABLED');

label3676:

goto label200;

label3677:

ini_set('memory_limit', -1);

if ($E59d0debc75e7be8) {
	goto label136;
}

XUI::A1fEF6439c28608e(NULL, NULL, $ff5cf44f96903d64);
generateError('INVALID_CREDENTIALS');
goto label3636;
goto label136;

label3693:

$Cc2b5dfe75dc164b = (empty(XUI::$rRequest['params']['items_per_page']) ? 0 : abs(intval(XUI::$rRequest['params']['items_per_page'])));
$e1b4bbbe23cc3549 = ['live' => 'Live Streams', 'movie' => 'Movies', 'created_live' => 'Created Channels', 'radio_streams' => 'Radio Stations', 'series' => 'TV Series'];
$aa049d3d6d423a70 = XUI::c65c7f64e35c199f();
$f547aeca99c55c3e = parse_url($aa049d3d6d423a70)['host'];
$f5e707a1e98bcf4a = [0 => 'get_epg', 200 => 'get_vod_categories', 201 => 'get_live_categories', 202 => 'get_live_streams', 203 => 'get_vod_streams', 204 => 'get_series_info', 205 => 'get_short_epg', 206 => 'get_series_categories', 207 => 'get_simple_data_table', 208 => 'get_series', 209 => 'get_vod_info'];
goto label84;

label3721:

goto label3723;

label3722:

$e32e4078d2af09ab = true;

label3723:

XUI::F1359F4b41c091Ec($E59d0debc75e7be8);
goto label3653;

label3727:

?>