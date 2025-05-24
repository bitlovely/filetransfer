<?php


function shutdown()
{
	global $b62d6460eb33ea07;
	global $f76e05a7b2c4a341;

	if (!$f76e05a7b2c4a341) {
		goto label7;
	}

	XUI::aEEa5d3137274f80();

	label7:

	if (!is_object($b62d6460eb33ea07)) {
		goto label15;
	}

	$b62d6460eb33ea07->close_mysql();

	label15:
}

goto label1655;

label1:

$A7d54b094ae83c95 = (!empty(XUI::$rRequest['type']) ? XUI::$rRequest['type'] : NULL);
$edc59762fd5d367a = (!empty(XUI::$rRequest['cat_id']) ? intval(XUI::$rRequest['cat_id']) : NULL);
$abfc3438a2e98dfb = (!empty(XUI::$rRequest['scat_id']) ? intval(XUI::$rRequest['scat_id']) : NULL);
$E6f758b9be57a931 = (!empty(XUI::$rRequest['series_id']) ? intval(XUI::$rRequest['series_id']) : NULL);
$Bb9fda5ebf825f11 = (!empty(XUI::$rRequest['season']) ? intval(XUI::$rRequest['season']) : NULL);
goto label1680;

label64:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
$f76e05a7b2c4a341 = false;
XUI::f1359F4B41c091eC($E59d0debc75e7be8);
goto label1640;

label75:

foreach ($A5a4a57a12bb19b3 as $aa4e95f1ed1932a8) {
	if (!XUI::$rCached) {
		goto label96;
	}

	$aa4e95f1ed1932a8 = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($aa4e95f1ed1932a8)))['info'];

	label96:

	if ($aa4e95f1ed1932a8['live'] == 0) {
		goto label105;
	}

	$b77484ffe825a8a1[] = $aa4e95f1ed1932a8;
	goto label107;

	label105:

	$b7449543b55804c2[] = $aa4e95f1ed1932a8;

	label107:
}

unset($A5a4a57a12bb19b3);

switch ($A7d54b094ae83c95) {
case 'get_live_categories':
	goto label158;

	label129:

	goto label1667;
	goto label249;

	label131:

	$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
	$A5a4a57a12bb19b3->addChild('title', base64_encode('All'));
	$A5a4a57a12bb19b3->addChild('description', base64_encode('Live Streams Category [ ALL ]'));
	$A5a4a57a12bb19b3->addChild('category_id', 0);
	$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
	goto label187;

	label158:

	$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
	$D27fe13c26d2e218->addChild('playlist_name', 'Live [ ' . XUI::$rSettings['server_name'] . ' ]');
	$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
	$Dbcac322b4274e46->addChild('category_id', 1);
	$Dbcac322b4274e46->addChild('category_title', 'Live [ ' . XUI::$rSettings['server_name'] . ' ]');
	goto label131;

	label187:

	$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_live_streams&cat_id=0') . $Dbcac322b4274e46['id']);

	foreach ($Bcb691ed57a1e566 as $fe63f70cd74f3298 => $Dbcac322b4274e46) {
		$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
		$A5a4a57a12bb19b3->addChild('title', base64_encode($Dbcac322b4274e46['category_name']));
		$A5a4a57a12bb19b3->addChild('description', base64_encode('Live Streams Category'));
		$A5a4a57a12bb19b3->addChild('category_id', $Dbcac322b4274e46['id']);
		$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
		$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_live_streams&cat_id=') . $Dbcac322b4274e46['id']);
	}

	header('Content-Type: application/xml; charset=utf-8');
	echo $D27fe13c26d2e218->asXML();
	goto label129;
case 'get_vod_categories':
	label249:

	goto label279;

	label250:

	$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
	$A5a4a57a12bb19b3->addChild('title', base64_encode('All'));
	$A5a4a57a12bb19b3->addChild('description', base64_encode('Movie Streams Category [ ALL ]'));
	$A5a4a57a12bb19b3->addChild('category_id', 0);
	$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
	goto label308;

	label277:

	goto label1667;
	goto label370;

	label279:

	$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
	$D27fe13c26d2e218->addChild('playlist_name', 'Movie [ ' . XUI::$rSettings['server_name'] . ' ]');
	$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
	$Dbcac322b4274e46->addChild('category_id', 1);
	$Dbcac322b4274e46->addChild('category_title', 'Movie [ ' . XUI::$rSettings['server_name'] . ' ]');
	goto label250;

	label308:

	$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_vod_streams&cat_id=0') . $Dbcac322b4274e46['id']);

	foreach ($Ffa193891d20cac0 as $Dedcb63df96843f9 => $Dbcac322b4274e46) {
		$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
		$A5a4a57a12bb19b3->addChild('title', base64_encode($Dbcac322b4274e46['category_name']));
		$A5a4a57a12bb19b3->addChild('description', base64_encode('Movie Streams Category'));
		$A5a4a57a12bb19b3->addChild('category_id', $Dbcac322b4274e46['id']);
		$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
		$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_vod_streams&cat_id=') . $Dbcac322b4274e46['id']);
	}

	header('Content-Type: application/xml; charset=utf-8');
	echo $D27fe13c26d2e218->asXML();
	goto label277;
case 'get_series_categories':
	label370:

	goto label371;

	label371:

	$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
	$D27fe13c26d2e218->addChild('playlist_name', 'SubCategory [ ' . XUI::$rSettings['server_name'] . ' ]');
	$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
	$Dbcac322b4274e46->addChild('category_id', 1);
	$Dbcac322b4274e46->addChild('category_title', 'SubCategory [ ' . XUI::$rSettings['server_name'] . ' ]');
	goto label464;

	label400:

	goto label1667;
	goto label491;

	label402:

	$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_series&cat_id=0') . $Dbcac322b4274e46['id']);

	foreach ($e582de4d4a513639 as $Dedcb63df96843f9 => $Dbcac322b4274e46) {
		$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
		$A5a4a57a12bb19b3->addChild('title', base64_encode($Dbcac322b4274e46['category_name']));
		$A5a4a57a12bb19b3->addChild('description', base64_encode('TV Series Category'));
		$A5a4a57a12bb19b3->addChild('category_id', $Dbcac322b4274e46['id']);
		$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
		$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_series&cat_id=') . $Dbcac322b4274e46['id']);
	}

	header('Content-Type: application/xml; charset=utf-8');
	echo $D27fe13c26d2e218->asXML();
	goto label400;

	label464:

	$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
	$A5a4a57a12bb19b3->addChild('title', base64_encode('All'));
	$A5a4a57a12bb19b3->addChild('description', base64_encode('TV Series Category [ ALL ]'));
	$A5a4a57a12bb19b3->addChild('category_id', 0);
	$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
	goto label402;
case 'get_series':
	label491:

	goto label537;

	label492:

	$Dbcac322b4274e46->addChild('category_id', 1);
	$Dbcac322b4274e46->addChild('category_title', 'TV Series [ ' . $D0d4a22f975b075a . ' ]');

	if (!(0 < count($E59d0debc75e7be8['series_ids']))) {
		goto label679;
	}

	if (XUI::$rSettings['vod_sort_newest']) {
		goto label689;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` IN (' . implode(',', array_map('intval', $E59d0debc75e7be8['series_ids'])) . ') ORDER BY FIELD(`id`,' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ASC;');
	goto label688;

	label537:
	if (!(isset($edc59762fd5d367a) || is_null($edc59762fd5d367a) || (isset($abfc3438a2e98dfb) || is_null($abfc3438a2e98dfb)))) {
		goto label686;
	}

	$fe63f70cd74f3298 = (is_null($edc59762fd5d367a) ? NULL : $edc59762fd5d367a);

	if (!is_null($fe63f70cd74f3298)) {
		goto label578;
	}

	$fe63f70cd74f3298 = (is_null($abfc3438a2e98dfb) ? NULL : $abfc3438a2e98dfb);
	$edc59762fd5d367a = $abfc3438a2e98dfb;
	goto label578;

	label578:

	$D0d4a22f975b075a = (!empty($e582de4d4a513639[$edc59762fd5d367a]) ? $e582de4d4a513639[$edc59762fd5d367a]['category_name'] : 'ALL');
	$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
	$D27fe13c26d2e218->addChild('playlist_name', 'TV Series [ ' . $D0d4a22f975b075a . ' ]');
	$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
	goto label492;

	label603:

	foreach ($d02ef9ae10a41939 as $E6f758b9be57a931 => $E84de30ab6e5b0c1) {
		foreach (json_decode($E84de30ab6e5b0c1['category_id'], true) as $B609613473ecda8a) {
			goto label619;

			label616:

			goto label675;

			label619:
			if (!(!$fe63f70cd74f3298 || ($fe63f70cd74f3298 == $B609613473ecda8a))) {
				goto label665;
			}

			$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
			$A5a4a57a12bb19b3->addChild('title', base64_encode($E84de30ab6e5b0c1['title']));
			$A5a4a57a12bb19b3->addChild('description', '');
			$A5a4a57a12bb19b3->addChild('category_id', $E6f758b9be57a931);
			goto label651;

			label651:

			$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
			$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_seasons&series_id=') . $E6f758b9be57a931);

			label665:

			if ($fe63f70cd74f3298) {
				goto label616;
			}

			goto label677;
			goto label616;

			label675:
		}

		label677:
	}

	label679:

	header('Content-Type: application/xml; charset=utf-8');
	echo $D27fe13c26d2e218->asXML();
	goto label686;

	label686:

	goto label1667;
	goto label709;

	label688:

	goto label703;

	label689:

	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` IN (' . implode(',', array_map('intval', $E59d0debc75e7be8['series_ids'])) . ') ORDER BY `last_modified` DESC;');

	label703:

	$d02ef9ae10a41939 = $b62d6460eb33ea07->get_rows(true, 'id');
	goto label603;
case 'get_seasons':
	label709:

	goto label712;

	label710:

	goto label1667;
	goto label814;

	label712:

	if (!isset($E6f758b9be57a931)) {
		goto label710;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` = ?', $E6f758b9be57a931);
	$E84de30ab6e5b0c1 = $b62d6460eb33ea07->get_row();
	$D0d4a22f975b075a = $E84de30ab6e5b0c1['title'];
	$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
	goto label787;

	label730:

	$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows(true, 'season_num', false);

	foreach (array_keys($D8e7681dfae2905b) as $C8c1648c3b562f56) {
		$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
		$A5a4a57a12bb19b3->addChild('title', base64_encode('Season ' . $C8c1648c3b562f56));
		$A5a4a57a12bb19b3->addChild('description', '');
		$A5a4a57a12bb19b3->addChild('category_id', $C8c1648c3b562f56);
		$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
		$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_series_streams&series_id=') . $E6f758b9be57a931 . '&season=' . $C8c1648c3b562f56);
	}

	header('Content-Type: application/xml; charset=utf-8');
	echo $D27fe13c26d2e218->asXML();
	goto label710;

	label787:

	$D27fe13c26d2e218->addChild('playlist_name', 'TV Series [ ' . $D0d4a22f975b075a . ' ]');
	$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
	$Dbcac322b4274e46->addChild('category_id', 1);
	$Dbcac322b4274e46->addChild('category_title', 'TV Series [ ' . $D0d4a22f975b075a . ' ]');
	$b62d6460eb33ea07->query('SELECT * FROM `streams_episodes` t1 INNER JOIN `streams` t2 ON t2.id=t1.stream_id WHERE t1.series_id = ? ORDER BY t1.season_num ASC, t1.episode_num ASC', $E6f758b9be57a931);
	goto label730;
case 'get_series_streams':
	label814:

	goto label815;

	label815:
	if (!(isset($E6f758b9be57a931) && isset($Bb9fda5ebf825f11))) {
		goto label871;
	}

	$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `id` = ?', $E6f758b9be57a931);
	$E84de30ab6e5b0c1 = $b62d6460eb33ea07->get_row();
	$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
	$D27fe13c26d2e218->addChild('playlist_name', 'TV Series [ ' . $E84de30ab6e5b0c1['title'] . ' Season ' . $Bb9fda5ebf825f11 . ' ]');
	goto label844;

	label844:

	$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
	$Dbcac322b4274e46->addChild('category_id', 1);
	$Dbcac322b4274e46->addChild('category_title', 'TV Series [ ' . $E84de30ab6e5b0c1['title'] . ' Season ' . $Bb9fda5ebf825f11 . ' ]');
	$b62d6460eb33ea07->query('SELECT t2.direct_source,t2.stream_source,t2.target_container,t2.id,t1.series_id,t1.season_num FROM `streams_episodes` t1 INNER JOIN `streams` t2 ON t2.id=t1.stream_id WHERE t1.series_id = ? AND t1.season_num = ? ORDER BY  t1.episode_num ASC', $E6f758b9be57a931, $Bb9fda5ebf825f11);
	$aab84fb0c3e4fd47 = $b62d6460eb33ea07->get_rows();
	goto label873;

	label871:

	goto label1667;
	goto label964;

	label873:

	$D3bdc43c3a3103fb = 0;

	foreach ($aab84fb0c3e4fd47 as $e61e6dcee1252fa2) {
		goto label878;

		label878:

		$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
		$A5a4a57a12bb19b3->addChild('title', base64_encode('Episode ' . sprintf('%02d', ++$D3bdc43c3a3103fb)));
		$d0e5b18df02750f5 = '';
		$A9cb4e37c58ecfe4 = $A5a4a57a12bb19b3->addChild('desc_image');
		$A9cb4e37c58ecfe4->addCData(XUI::fcA722697178454b($E84de30ab6e5b0c1['cover']));
		goto label909;

		label909:

		$A5a4a57a12bb19b3->addChild('description', base64_encode($d0e5b18df02750f5));
		$A5a4a57a12bb19b3->addChild('category_id', $edc59762fd5d367a);
		$e33e90deda1ef67c = $A5a4a57a12bb19b3->addChild('stream_url');
		$Ccbe1c85185d3717 = 'movie/' . $ff5cf44f96903d64 . '/' . $fd093b5358e9a519 . '/' . $e61e6dcee1252fa2['id'] . '/' . $e61e6dcee1252fa2['target_container'];
		$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
		goto label946;

		label946:

		$fd51b5505224fc7c = $A7ca171405b19571 . ('play/' . $B259c62825689c1b);
		$e33e90deda1ef67c->addCData($fd51b5505224fc7c);
		goto label955;

		label955:
	}

	header('Content-Type: application/xml; charset=utf-8');
	echo $D27fe13c26d2e218->asXML();
	goto label871;
case 'get_live_streams':
	label964:

	goto label1253;

	label965:

	echo $D27fe13c26d2e218->asXML();

	label968:

	goto label1667;
	goto label1287;

	label970:

	$Dbcac322b4274e46->addChild('category_id', 1);
	$Dbcac322b4274e46->addChild('category_title', 'Live [ ' . XUI::$rSettings['server_name'] . ' ]');

	foreach ($b77484ffe825a8a1 as $fe93a43f53d92a4e) {
		goto label986;

		label986:
		if (!(!$fe63f70cd74f3298 || in_array($fe63f70cd74f3298, json_decode($fe93a43f53d92a4e['category_id'], true)))) {
			goto label1078;
		}

		$eac6c574ff1e04f2 = [];

		if (XUI::$rCached) {
			goto label1191;
		}

		$b62d6460eb33ea07->query('SELECT * FROM `epg_data` WHERE `epg_id` = ? AND `channel_id` = ? AND `end` >= ? LIMIT 2', $fe93a43f53d92a4e['epg_id'], $fe93a43f53d92a4e['channel_id'], time());
		$eac6c574ff1e04f2 = $b62d6460eb33ea07->get_rows();
		goto label1189;

		label1022:

		goto label1247;

		label1024:

		foreach ($eac6c574ff1e04f2 as $Fb9da1713bff19ce) {
			$d0e5b18df02750f5 .= '[' . date('H:i', $Fb9da1713bff19ce['start']) . '] ' . $Fb9da1713bff19ce['title'] . "\n" . '( ' . $Fb9da1713bff19ce['description'] . ')' . "\n";

			if (!($df6991d59f367c7e == 0)) {
				goto label1076;
			}

			$Eacc86ca4d92309a = '[' . date('H:i', $Fb9da1713bff19ce['start']) . ' - ' . date('H:i', $Fb9da1713bff19ce['end']) . '] + ' . round(($Fb9da1713bff19ce['end'] - time()) / 60, 1) . ' min   ' . $Fb9da1713bff19ce['title'];
			$df6991d59f367c7e++;

			label1076:
		}

		label1078:

		foreach (json_decode($fe93a43f53d92a4e['category_id'], true) as $B609613473ecda8a) {
			goto label1123;

			label1088:

			$A9cb4e37c58ecfe4->addCData(XUI::fca722697178454B($fe93a43f53d92a4e['stream_icon']));
			$A5a4a57a12bb19b3->addChild('category_id', $B609613473ecda8a);
			$A734c30701274baf = $A5a4a57a12bb19b3->addChild('stream_url');
			$Ccbe1c85185d3717 = 'live/' . $ff5cf44f96903d64 . '/' . $fd093b5358e9a519 . '/' . $fe93a43f53d92a4e['id'];
			$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
			goto label1163;

			label1123:
			if (!(!$fe63f70cd74f3298 || ($fe63f70cd74f3298 == $B609613473ecda8a))) {
				goto label1170;
			}

			$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
			$A5a4a57a12bb19b3->addChild('title', base64_encode($fe93a43f53d92a4e['stream_display_name'] . ' ' . $Eacc86ca4d92309a));
			$A5a4a57a12bb19b3->addChild('description', base64_encode($d0e5b18df02750f5));
			$A9cb4e37c58ecfe4 = $A5a4a57a12bb19b3->addChild('desc_image');
			goto label1088;

			label1160:

			goto label1180;

			label1163:

			$fd51b5505224fc7c = $A7ca171405b19571 . ('play/' . $B259c62825689c1b);
			$A734c30701274baf->addCData($fd51b5505224fc7c);

			label1170:

			if ($fe63f70cd74f3298) {
				goto label1160;
			}

			goto label1182;
			goto label1160;

			label1180:
		}

		label1182:

		goto label1022;

		label1184:

		$d0e5b18df02750f5 = '';
		$Eacc86ca4d92309a = '';
		$df6991d59f367c7e = 0;
		goto label1024;

		label1189:

		goto label1184;

		label1191:

		if (!file_exists(EPG_PATH . 'stream_' . intval($fe93a43f53d92a4e['id']))) {
			goto label1184;
		}

		foreach (igbinary_unserialize(file_get_contents(EPG_PATH . 'stream_' . $fe93a43f53d92a4e['id'])) as $Fb9da1713bff19ce) {
			if (!($Fb9da1713bff19ce['end'] < time())) {
				goto label1229;
			}

			goto label1243;

			label1229:

			$eac6c574ff1e04f2[] = $Fb9da1713bff19ce;

			if (!(2 <= count($eac6c574ff1e04f2))) {
				goto label1243;
			}

			goto label1245;

			label1243:
		}

		label1245:

		goto label1184;

		label1247:
	}

	header('Content-Type: application/xml; charset=utf-8');
	goto label965;

	label1253:
	if (!(isset($edc59762fd5d367a) || is_null($edc59762fd5d367a))) {
		goto label968;
	}

	$fe63f70cd74f3298 = (is_null($edc59762fd5d367a) ? NULL : $edc59762fd5d367a);
	$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
	$D27fe13c26d2e218->addChild('playlist_name', 'Live [ ' . XUI::$rSettings['server_name'] . ' ]');
	$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
	goto label970;
case 'get_vod_streams':
	label1287:

	goto label1456;

	label1288:

	$Dbcac322b4274e46->addChild('category_id', 1);
	$Dbcac322b4274e46->addChild('category_title', 'Movie [ ' . XUI::$rSettings['server_name'] . ' ]');

	foreach ($b7449543b55804c2 as $fe93a43f53d92a4e) {
		foreach (json_decode($fe93a43f53d92a4e['category_id'], true) as $B609613473ecda8a) {
			goto label1412;

			label1312:

			if (!$Ccbdf03f8a4df633) {
				goto label1340;
			}

			foreach ($Ccbdf03f8a4df633 as $Bb672d1983256a93 => $b230dae3922d6303) {
				if (!($Bb672d1983256a93 == 'movie_image')) {
					goto label1331;
				}

				goto label1338;

				label1331:

				$d0e5b18df02750f5 .= strtoupper($Bb672d1983256a93) . ': ' . $b230dae3922d6303 . "\n";

				label1338:
			}

			label1340:

			$A9cb4e37c58ecfe4 = $A5a4a57a12bb19b3->addChild('desc_image');
			goto label1347;

			label1347:

			$A9cb4e37c58ecfe4->addCData(XUI::Fca722697178454B($Ccbdf03f8a4df633['movie_image']));
			$A5a4a57a12bb19b3->addChild('description', base64_encode($d0e5b18df02750f5));
			$A5a4a57a12bb19b3->addChild('category_id', $B609613473ecda8a);
			$e33e90deda1ef67c = $A5a4a57a12bb19b3->addChild('stream_url');
			$Ccbe1c85185d3717 = 'movie/' . $ff5cf44f96903d64 . '/' . $fd093b5358e9a519 . '/' . $fe93a43f53d92a4e['id'] . '/' . $fe93a43f53d92a4e['target_container'];
			goto label1383;

			label1383:

			$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
			$fd51b5505224fc7c = $A7ca171405b19571 . ('play/' . $B259c62825689c1b);
			$e33e90deda1ef67c->addCData($fd51b5505224fc7c);

			label1399:

			if ($fe63f70cd74f3298) {
				goto label1409;
			}

			goto label1406;

			label1406:

			goto label1445;

			label1409:

			goto label1443;

			label1412:
			if (!(!$fe63f70cd74f3298 || ($fe63f70cd74f3298 == $B609613473ecda8a))) {
				goto label1399;
			}

			$Ccbdf03f8a4df633 = json_decode($fe93a43f53d92a4e['movie_properties'], true);
			$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
			$A5a4a57a12bb19b3->addChild('title', base64_encode($fe93a43f53d92a4e['stream_display_name']));
			$d0e5b18df02750f5 = '';
			goto label1312;

			label1443:
		}

		label1445:
	}

	header('Content-Type: application/xml; charset=utf-8');
	goto label1451;

	label1451:

	echo $D27fe13c26d2e218->asXML();

	label1454:

	goto label1667;
	goto label1490;

	label1456:
	if (!(isset($edc59762fd5d367a) || is_null($edc59762fd5d367a))) {
		goto label1454;
	}

	$fe63f70cd74f3298 = (is_null($edc59762fd5d367a) ? NULL : $edc59762fd5d367a);
	$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
	$D27fe13c26d2e218->addChild('playlist_name', 'Movie [ ' . XUI::$rSettings['server_name'] . ' ]');
	$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
	goto label1288;
}

label1490:

goto label1614;

label1491:

$A5a4a57a12bb19b3->addChild('title', base64_encode('VOD'));
$A5a4a57a12bb19b3->addChild('description', base64_encode('Video On Demand Category'));
$A5a4a57a12bb19b3->addChild('category_id', 1);
$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_vod_categories'));
goto label1591;

label1523:

$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_series_categories'));
header('Content-Type: application/xml; charset=utf-8');
echo $D27fe13c26d2e218->asXML();
goto label1667;
goto label1639;

label1544:

$A734c30701274baf = $A5a4a57a12bb19b3->addChild('playlist_url');
$A734c30701274baf->addCData($A7ca171405b19571 . ('enigma2?username=' . $ff5cf44f96903d64 . '&password=' . $fd093b5358e9a519 . '&type=get_live_categories'));

label1557:

if (empty($b7449543b55804c2)) {
	goto label1591;
}

$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
goto label1491;

label1565:

if (empty($b77484ffe825a8a1)) {
	goto label1557;
}

$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
$A5a4a57a12bb19b3->addChild('title', base64_encode('Live Streams'));
$A5a4a57a12bb19b3->addChild('description', base64_encode('Live Streams Category'));
$A5a4a57a12bb19b3->addChild('category_id', 0);
goto label1544;

label1591:

$A5a4a57a12bb19b3 = $D27fe13c26d2e218->addChild('channel');
$A5a4a57a12bb19b3->addChild('title', base64_encode('TV Series'));
$A5a4a57a12bb19b3->addChild('description', base64_encode('TV Series Category'));
$A5a4a57a12bb19b3->addChild('category_id', 2);
goto label1523;

label1614:

$D27fe13c26d2e218 = new SimpleXMLExtended('<items/>');
$D27fe13c26d2e218->addChild('playlist_name', XUI::$rSettings['server_name']);
$Dbcac322b4274e46 = $D27fe13c26d2e218->addChild('category');
$Dbcac322b4274e46->addChild('category_id', 1);
$Dbcac322b4274e46->addChild('category_title', XUI::$rSettings['server_name']);
goto label1565;

label1639:

goto label1667;

label1640:

$Bcb691ed57a1e566 = XUI::C721bD954A5f072F('live');
$Ffa193891d20cac0 = XUI::C721bd954a5F072F('movie');
$e582de4d4a513639 = XUI::C721BD954A5f072f('series');
$b77484ffe825a8a1 = [];
$b7449543b55804c2 = [];
goto label1752;

label1655:

register_shutdown_function('shutdown');
require './init.php';
$f76e05a7b2c4a341 = true;

if (!XUI::$rSettings['disable_enigma2']) {
	goto label1671;
}

class SimpleXMLExtended extends SimpleXMLElement
{
	public function addCData($A734c30701274baf)
	{
		$db2bae96fe96e3c2 = dom_import_simplexml($this);
		$B3f3390f5067864e = $db2bae96fe96e3c2->ownerDocument;
		$db2bae96fe96e3c2->appendChild($B3f3390f5067864e->createCDATASection($A734c30701274baf));
	}
}

$f76e05a7b2c4a341 = false;
goto label1668;

label1667:

goto label1806;

label1668:

generateError('E2_DISABLED');

label1671:

$ff5cf44f96903d64 = XUI::$rRequest['username'];
$fd093b5358e9a519 = XUI::$rRequest['password'];
goto label1;

label1680:

$Bf9be24c69c0f17b = (stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https://' : 'http://');
$A7ca171405b19571 = (!empty($_SERVER['HTTP_HOST']) ? $Bf9be24c69c0f17b . $_SERVER['HTTP_HOST'] . '/' : XUI::$rServers[SERVER_ID]['site_url']);
ini_set('memory_limit', -1);
if (!(empty($ff5cf44f96903d64) || empty($fd093b5358e9a519))) {
	goto label1786;
}

generateError('NO_CREDENTIALS');
goto label1786;

label1723:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);
$a2a53f18f4f95c8b = 'FIELD(id,' . implode(',', $E59d0debc75e7be8['channel_ids']) . ')';
XUI::$db->query('SELECT t1.id,t1.epg_id,t1.added,t1.allow_record,t1.year,t1.channel_id,t1.movie_properties,t1.stream_source,t1.tv_archive_server_id,t1.vframes_server_id,t1.tv_archive_duration,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t1.series_no,t1.direct_source,t2.type_output,t1.target_container,t2.live,t1.rtmp_output,t1.order,t2.type_key FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';', ...$B03cfeca75020c69);
$A5a4a57a12bb19b3 = XUI::$db->get_rows();

label1751:

goto label1776;

label1752:

if (XUI::$rCached) {
	goto label1777;
}

$A5a4a57a12bb19b3 = [];

if (!(0 < count($E59d0debc75e7be8['channel_ids']))) {
	goto label1751;
}

$B03cfeca75020c69 = $cf0aab70014807af = [];
$cf0aab70014807af[] = '`id` IN (' . implode(',', $E59d0debc75e7be8['channel_ids']) . ')';
goto label1723;

label1776:

goto label1779;

label1777:

$A5a4a57a12bb19b3 = $E59d0debc75e7be8['channel_ids'];

label1779:

$E59d0debc75e7be8['channel_ids'] = XUI::eE26f6aDbd1E84E9($E59d0debc75e7be8['channel_ids']);
goto label75;

label1786:

if ($E59d0debc75e7be8 = XUI::CC988751EEbBf271(NULL, $ff5cf44f96903d64, $fd093b5358e9a519, true, false)) {
	goto label64;
}

XUI::a1FeF6439c28608e(NULL, NULL, $ff5cf44f96903d64);
generateError('INVALID_CREDENTIALS');
goto label1667;
goto label64;

label1806:

?>