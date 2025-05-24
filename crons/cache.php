<?php


function ab8369074df2AAa3()
{
	goto label801;

	label1:

	$E0886d168ad76648 = [];
	$b62d6460eb33ea07->query('SELECT `id`, `key` FROM `hmac_keys` WHERE `enabled` = 1;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$E0886d168ad76648[] = $Fb9da1713bff19ce;
	}

	file_put_contents(CACHE_TMP_PATH . 'hmac_keys', igbinary_serialize($E0886d168ad76648));
	goto label763;

	label23:

	$dec36723d7be7c49['episodes'] = [];
	$b62d6460eb33ea07->query('SELECT `type`, `id` FROM `streams` WHERE `type` IN (2,5) ORDER BY `added` DESC, `id` DESC;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[[2 => 'movies', 5 => 'episodes'][$Fb9da1713bff19ce['type']]][] = $Fb9da1713bff19ce['id'];
	}

	$A91b4baccec571c1 = [];
	goto label820;

	label42:

	$b62d6460eb33ea07->query('SELECT `id`, `category_id` FROM `streams`;');
	if (!($b62d6460eb33ea07->dbh && $b62d6460eb33ea07->result)) {
		goto label746;
	}

	if (!(0 < $b62d6460eb33ea07->result->rowCount())) {
		goto label746;
	}

	foreach ($b62d6460eb33ea07->result->fetchAll(PDO::FETCH_ASSOC) as $D9d6a5d0b76a9aaf) {
		$F7b2f38b5e45501c[$D9d6a5d0b76a9aaf['id']] = json_decode($D9d6a5d0b76a9aaf['category_id'], true);
	}

	goto label746;

	label77:

	foreach (['channels', 'radios', 'movies', 'episodes'] as $Bb672d1983256a93) {
		foreach ($dec36723d7be7c49[$Bb672d1983256a93] as $ee6d1fc5d801b43f) {
			$e99a4642ffdbd364[] = intval($ee6d1fc5d801b43f);
		}
	}

	$e99a4642ffdbd364 = array_unique($e99a4642ffdbd364);

	label95:

	$F7b2f38b5e45501c = [];
	goto label42;

	label97:

	file_put_contents(STREAMS_TMP_PATH . 'channels_categories', igbinary_serialize($F7b2f38b5e45501c));

	label106:

	goto label1005;

	label107:

	if (!(XUI::$rSettings['channel_number_type'] != 'manual')) {
		goto label95;
	}

	foreach (['channels', 'radios', 'movies', 'episodes'] as $Bb672d1983256a93) {
		goto label117;

		label117:

		if (0 < count($dec36723d7be7c49[$Bb672d1983256a93])) {
			goto label128;
		}

		$cf0aab70014807af = '';
		goto label166;

		label128:

		$cf0aab70014807af = 'AND `id` NOT IN (' . implode(',', array_map('intval', $dec36723d7be7c49[$Bb672d1983256a93])) . ')';
		goto label166;

		label142:

		$b62d6460eb33ea07->query('SELECT `id` FROM `streams` WHERE `type` IN (' . implode(',', $A7d54b094ae83c95) . (') ' . $cf0aab70014807af . ' ORDER BY `order` ASC;'));

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$dec36723d7be7c49[$Bb672d1983256a93][] = $Fb9da1713bff19ce['id'];
		}

		label164:

		goto label198;

		label166:

		switch ($Bb672d1983256a93) {
		case 'channels':
			$A7d54b094ae83c95 = [1, 3];
			goto label188;
		case 'radios':
			$A7d54b094ae83c95 = [4];
			goto label188;
		case 'movies':
			$A7d54b094ae83c95 = [2];
			goto label188;
		case 'episodes':
			$A7d54b094ae83c95 = [5];
			goto label188;
		}

		label188:

		if (!(0 < count($A7d54b094ae83c95))) {
			goto label164;
		}

		goto label142;

		label198:
	}

	if (!XUI::$rSettings['vod_sort_newest']) {
		goto label844;
	}

	$dec36723d7be7c49['movies'] = [];
	goto label23;

	label208:

	if (!file_exists(BIN_PATH . 'maxmind/cidr.db')) {
		goto label708;
	}

	exec('ls ' . CIDR_TMP_PATH . ' | wc -l', $d094d3e133ec8c03);

	if (!(intval($d094d3e133ec8c03[0]) == 0)) {
		goto label708;
	}

	$D16061affd463058 = json_decode(file_get_contents(BIN_PATH . 'maxmind/cidr.db'), true);

	foreach ($D16061affd463058 as $df9ce9bd5a53be95 => $ba2d146bb5a55097) {
		file_put_contents(CIDR_TMP_PATH . $df9ce9bd5a53be95, json_encode($ba2d146bb5a55097));
	}

	goto label708;

	label256:

	echo 'Checking cache readability...' . "\n";
	$f84c3d505dc0863c = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'settings'));
	if (!(!is_array($f84c3d505dc0863c) || !isset($f84c3d505dc0863c['server_name']))) {
		goto label745;
	}

	echo 'Clearing cache...' . "\n\n";

	foreach ([STREAMS_TMP_PATH, LINES_TMP_PATH, SERIES_TMP_PATH] as $d799202a12912af4) {
		foreach (scandir($d799202a12912af4) as $D6be258a9043b749) {
			unlink($d799202a12912af4 . $D6be258a9043b749);
		}
	}

	goto label733;

	label300:

	$B51da85892620f9b = [];
	$dec36723d7be7c49 = [
		'channels' => [],
		'radios'   => [],
		'movies'   => [],
		'episodes' => [],
		'series'   => []
	];
	$b62d6460eb33ea07->query('SELECT *, IF(`bouquet_order` > 0, `bouquet_order`, 999) AS `order` FROM `bouquets` ORDER BY `order` ASC;');

	foreach ($b62d6460eb33ea07->get_rows(true, 'id') as $Abcb228699a7f743 => $A5a4a57a12bb19b3) {
		goto label568;

		label314:

		$F330b1e93afbd525[$Abcb228699a7f743] = array_unique($db964e4a3b739f81);
		goto label668;

		label321:

		foreach (json_decode($A5a4a57a12bb19b3['bouquet_movies'], true) as $ee6d1fc5d801b43f) {
			if (!((0 < intval($ee6d1fc5d801b43f)) && !in_array($ee6d1fc5d801b43f, $dec36723d7be7c49['movies']))) {
				goto label348;
			}

			$dec36723d7be7c49['movies'][] = $ee6d1fc5d801b43f;

			label348:

			if (isset($B51da85892620f9b[intval($ee6d1fc5d801b43f)])) {
				goto label361;
			}

			$B51da85892620f9b[intval($ee6d1fc5d801b43f)] = [];

			label361:

			$B51da85892620f9b[intval($ee6d1fc5d801b43f)][] = $Abcb228699a7f743;
		}

		foreach (json_decode($A5a4a57a12bb19b3['bouquet_series'], true) as $E6f758b9be57a931) {
			if (!((0 < intval($E6f758b9be57a931)) && !in_array($E6f758b9be57a931, $dec36723d7be7c49['series']))) {
				goto label441;
			}

			$b62d6460eb33ea07->query('SELECT `stream_id` FROM `streams_episodes` WHERE `series_id` = ? ORDER BY `season_num` ASC, `episode_num` ASC;', $E6f758b9be57a931);

			foreach ($b62d6460eb33ea07->get_rows() as $e61e6dcee1252fa2) {
				if (!(0 < intval($e61e6dcee1252fa2['stream_id']))) {
					goto label416;
				}

				$dec36723d7be7c49['episodes'][] = $e61e6dcee1252fa2['stream_id'];

				label416:

				if (isset($B51da85892620f9b[intval($e61e6dcee1252fa2['stream_id'])])) {
					goto label432;
				}

				$B51da85892620f9b[intval($e61e6dcee1252fa2['stream_id'])] = [];

				label432:

				$B51da85892620f9b[intval($e61e6dcee1252fa2['stream_id'])][] = $Abcb228699a7f743;
			}

			label441:
		}

		goto label482;

		label445:

		if (!(0 < count($a012b6c652cf30cb))) {
			goto label314;
		}

		$b62d6460eb33ea07->query('SELECT DISTINCT(`category_id`) AS `category_id` FROM `streams_series` WHERE `id` IN (' . implode(',', $a012b6c652cf30cb) . ');');

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$db964e4a3b739f81 = array_merge($db964e4a3b739f81, json_decode($Fb9da1713bff19ce['category_id'], true) ?: []);
		}

		goto label314;

		label482:

		$Bb76666478233032 = array_map('intval', array_unique(array_merge(json_decode($A5a4a57a12bb19b3['bouquet_channels'], true) ?: [], json_decode($A5a4a57a12bb19b3['bouquet_radios'], true) ?: [], json_decode($A5a4a57a12bb19b3['bouquet_movies'], true) ?: [])));
		$a012b6c652cf30cb = array_map('intval', array_unique(json_decode($A5a4a57a12bb19b3['bouquet_series'], true) ?: []));

		if (!(0 < count($Bb76666478233032))) {
			goto label445;
		}

		$b62d6460eb33ea07->query('SELECT DISTINCT(`category_id`) AS `category_id` FROM `streams` WHERE `id` IN (' . implode(',', $Bb76666478233032) . ');');

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$db964e4a3b739f81 = array_merge($db964e4a3b739f81, json_decode($Fb9da1713bff19ce['category_id'], true) ?: []);
		}

		goto label445;

		label568:

		$db964e4a3b739f81 = [];
		$Bb76666478233032 = [];

		foreach (json_decode($A5a4a57a12bb19b3['bouquet_channels'], true) as $ee6d1fc5d801b43f) {
			if (!((0 < intval($ee6d1fc5d801b43f)) && !in_array($ee6d1fc5d801b43f, $dec36723d7be7c49['channels']))) {
				goto label597;
			}

			$dec36723d7be7c49['channels'][] = $ee6d1fc5d801b43f;

			label597:

			if (isset($B51da85892620f9b[intval($ee6d1fc5d801b43f)])) {
				goto label610;
			}

			$B51da85892620f9b[intval($ee6d1fc5d801b43f)] = [];

			label610:

			$B51da85892620f9b[intval($ee6d1fc5d801b43f)][] = $Abcb228699a7f743;
		}

		foreach (json_decode($A5a4a57a12bb19b3['bouquet_radios'], true) as $ee6d1fc5d801b43f) {
			if (!((0 < intval($ee6d1fc5d801b43f)) && !in_array($ee6d1fc5d801b43f, $dec36723d7be7c49['radios']))) {
				goto label645;
			}

			$dec36723d7be7c49['radios'][] = $ee6d1fc5d801b43f;

			label645:

			if (isset($B51da85892620f9b[intval($ee6d1fc5d801b43f)])) {
				goto label658;
			}

			$B51da85892620f9b[intval($ee6d1fc5d801b43f)] = [];

			label658:

			$B51da85892620f9b[intval($ee6d1fc5d801b43f)][] = $Abcb228699a7f743;
		}

		goto label321;

		label668:
	}

	goto label107;

	label671:

	file_put_contents(CACHE_TMP_PATH . 'reseller_domains', igbinary_serialize($b41475b876414118));
	file_put_contents(CACHE_TMP_PATH . 'channel_order', igbinary_serialize($e99a4642ffdbd364));
	file_put_contents(CACHE_TMP_PATH . 'bouquet_map', igbinary_serialize($B51da85892620f9b));
	file_put_contents(CACHE_TMP_PATH . 'category_map', igbinary_serialize($F330b1e93afbd525));
	goto label97;

	label708:

	$e99a4642ffdbd364 = [];

	if (!(XUI::$rSettings['channel_number_type'] == 'manual')) {
		goto label731;
	}

	goto label716;

	label716:

	$b62d6460eb33ea07->query('SELECT `id`, `order` FROM `streams` ORDER BY `order` ASC;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$e99a4642ffdbd364[] = intval($Fb9da1713bff19ce['id']);
	}

	label731:

	$F330b1e93afbd525 = [];
	goto label300;

	label733:

	exec('sudo rm -rf ' . TMP_PATH . '*');
	exec('sudo rm -rf ' . SIGNALS_PATH . '*');

	label745:

	goto label931;

	label746:

	$b41475b876414118 = [];
	$b62d6460eb33ea07->query('SELECT `reseller_dns` FROM `users` WHERE `status` = 1 AND `reseller_dns` IS NOT NULL;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b41475b876414118[] = strtolower($Fb9da1713bff19ce['reseller_dns']);
	}

	goto label671;

	label763:

	$bf5ae4802d1fa318 = [];
	$b62d6460eb33ea07->query('SELECT `ip`, `password`, `push`, `pull` FROM `rtmp_ips`');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$bf5ae4802d1fa318[gethostbyname($Fb9da1713bff19ce['ip'])] = ['password' => $Fb9da1713bff19ce['password'], 'push' => boolval($Fb9da1713bff19ce['push']), 'pull' => boolval($Fb9da1713bff19ce['pull'])];
	}

	file_put_contents(CACHE_TMP_PATH . 'rtmp_ips', igbinary_serialize($bf5ae4802d1fa318));
	goto label208;

	label801:

	global $b62d6460eb33ea07;
	global $C73510f736862639;

	if (defined('CACHE_TMP_PATH')) {
		goto label809;
	}

	exit();

	label809:
	if (!($C73510f736862639 && file_exists(CACHE_TMP_PATH . 'settings'))) {
		goto label745;
	}

	goto label256;

	label820:

	$b62d6460eb33ea07->query('SELECT `id`, (SELECT MAX(`streams`.`added`) FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) AS `last_modified_stream` FROM `streams_series` ORDER BY `last_modified_stream` DESC, `last_modified` DESC, `id` DESC;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$A91b4baccec571c1[] = intval($Fb9da1713bff19ce['id']);
	}

	file_put_contents(CACHE_TMP_PATH . 'series_order', igbinary_serialize($A91b4baccec571c1));

	label844:

	goto label77;

	label845:

	unset($Bcf70cba56392975['php_pids']);
	XUI::f7A8933150230eaB('servers', $Bcf70cba56392975);
	XUI::f7a8933150230EaB('proxy_servers', XUI::E190F2B3b0819F7D(true));
	XUI::f7A8933150230EAb('blocked_servers', XUI::c18B3aa078DD5f59(true));
	XUI::f7a8933150230EAb('blocked_isp', XUI::d0826DaD642a6222(true));
	goto label894;

	label872:

	$ee07e30798ee6b8d = [];
	$b62d6460eb33ea07->query('SELECT `access_output_id`, `output_key` FROM `output_formats`;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$ee07e30798ee6b8d[] = $Fb9da1713bff19ce;
	}

	file_put_contents(CACHE_TMP_PATH . 'output_formats', igbinary_serialize($ee07e30798ee6b8d));
	goto label1;

	label894:

	XUI::f7A8933150230EAB('blocked_ua', XUI::DF8943E432872275(true));
	XUI::F7a8933150230Eab('blocked_ips', XUI::AB69Ecd4D7705061(true));
	XUI::f7A8933150230EAB('allowed_ips', XUI::DE052F142A92e9bf(true));
	XUI::f7A8933150230eab('categories', XUI::C721BD954A5F072f(NULL, true));

	if (!XUI::$rServers[SERVER_ID]['is_main']) {
		goto label106;
	}

	goto label872;

	label931:

	foreach ([EPG_PATH, VOD_PATH, ARCHIVE_PATH, CREATED_PATH, DELAY_PATH, VIDEO_PATH, PLAYLIST_PATH, CONS_TMP_PATH, CRONS_TMP_PATH, PLAYER_TMP_PATH, CACHE_TMP_PATH, DIVERGENCE_TMP_PATH, FLOOD_TMP_PATH, MINISTRA_TMP_PATH, SIGNALS_TMP_PATH, LOGS_TMP_PATH, WATCH_TMP_PATH, CIDR_TMP_PATH, STREAMS_TMP_PATH, LINES_TMP_PATH, SERIES_TMP_PATH] as $E111d28e9acc50b9) {
		if (file_exists($E111d28e9acc50b9)) {
			goto label984;
		}

		mkdir($E111d28e9acc50b9);

		label984:
	}

	XUI::f7a8933150230Eab('settings', XUI::aC49b56DbE10e52c(true));
	XUI::F7A8933150230EaB('bouquets', XUI::dE27bb48F7BFf12d(true));
	$Bcf70cba56392975 = XUI::f76008f8dFe1898c(true);
	goto label845;

	label1005:
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

goto label42;

label1:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
ini_set('memory_limit', -1);
$C73510f736862639 = false;
goto label21;

label21:

if (!(count($argv) == 2)) {
	goto label29;
}

$C73510f736862639 = true;

label29:

cli_set_process_title('XUI[Cache Builder]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::A336b0Dad3Eaf634() . __FILE__);
goto label60;

label42:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label53;
}

exit('Please run as XUI!' . "\n");

label53:

if (@$argc) {
	goto label1;
}

exit(0);
goto label1;

label60:

XUI::a3CF732c257bd804($F2db9d2971f5c8c4);
ab8369074df2aaa3();
goto label67;

label67:

?>