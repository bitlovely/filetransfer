<?php


function C7cC2f0dd6f71Ebb($Cea68b43e2d6b34e)
{
	goto label12;

	label2:

	file_put_contents(ARCHIVE_PATH . $Cea68b43e2d6b34e . '_.record', getmypid());
	goto label85;

	label12:

	clearstatcache(true);

	if (!file_exists(ARCHIVE_PATH . $Cea68b43e2d6b34e . '_.record')) {
		goto label34;
	}

	$C98e11437faf4199 = intval(file_get_contents(ARCHIVE_PATH . $Cea68b43e2d6b34e . '_.record'));

	label34:

	if (empty($C98e11437faf4199)) {
		goto label39;
	}

	goto label48;

	label38:

	goto label47;

	label39:

	shell_exec('kill -9 `ps -ef | grep \'Record\\[' . intval($Cea68b43e2d6b34e) . '\\]\' | grep -v grep | awk \'{print $2}\'`;');

	label47:

	goto label2;

	label48:

	if (!file_exists('/proc/' . $C98e11437faf4199)) {
		goto label38;
	}

	$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
	if (!(($C6671ac66a4f1c57 == 'Record[' . $Cea68b43e2d6b34e . ']') && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
		goto label84;
	}

	posix_kill($C98e11437faf4199, 9);

	label84:

	goto label38;

	label85:
}

function C79e45b9106CF57B($ce0840c647e1bbc7)
{
	return strtolower(preg_replace('/[^a-z0-9_]+/i', '', $ce0840c647e1bbc7));
}

function C483a3A59265139e($F647a429f8089f01)
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

function c73ed8D0B70CE12F($b5a93f3474101e1f, $ba2d146bb5a55097 = [], $ed6a5662734f48dc = false)
{
	global $b62d6460eb33ea07;
	$B9869413eae86beb = [];
	$b62d6460eb33ea07->query('SELECT `column_name`, `column_default`, `is_nullable`, `data_type` FROM `information_schema`.`columns` WHERE `table_schema` = (SELECT DATABASE()) AND `table_name` = ? ORDER BY `ordinal_position`;', $b5a93f3474101e1f);

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label74;

		label15:

		if (in_array($Fb9da1713bff19ce['data_type'], ['int', 'float', 'tinyint', 'double', 'decimal', 'smallint', 'mediumint', 'bigint', 'bit'])) {
			goto label27;
		}

		$Fb9da1713bff19ce['column_default'] = '';
		goto label58;

		label27:

		$Fb9da1713bff19ce['column_default'] = 0;
		goto label58;

		label31:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = $Fb9da1713bff19ce['column_default'];

		label35:

		goto label72;

		label37:
		if (empty($ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']]) && !is_numeric($ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']]) && is_null($Fb9da1713bff19ce['column_default'])) {
			goto label102;
		}

		goto label95;

		label58:

		$F970ffb77cdacc94 = true;

		label59:

		if (array_key_exists($Fb9da1713bff19ce['column_name'], $ba2d146bb5a55097)) {
			goto label37;
		}

		if ($ed6a5662734f48dc) {
			goto label35;
		}

		goto label31;

		label72:

		goto label112;

		label74:

		if (!($Fb9da1713bff19ce['column_default'] == 'NULL')) {
			goto label82;
		}

		$Fb9da1713bff19ce['column_default'] = NULL;

		label82:

		$F970ffb77cdacc94 = false;
		if (!(($Fb9da1713bff19ce['is_nullable'] == 'NO') && !$Fb9da1713bff19ce['column_default'])) {
			goto label59;
		}

		goto label15;

		label95:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = $ba2d146bb5a55097[$Fb9da1713bff19ce['column_name']];
		goto label110;

		label102:

		$B9869413eae86beb[$Fb9da1713bff19ce['column_name']] = ($F970ffb77cdacc94 ? $Fb9da1713bff19ce['column_default'] : NULL);

		label110:

		goto label72;

		label112:
	}

	return $B9869413eae86beb;
}

function cB24148cf9ab2A75($F48d5724f3b4ec96, $c68b76c7e42b19eb)
{
	goto label5;

	label3:

	return NULL;
	goto label106;

	label5:
	if (!((0 < strlen($c68b76c7e42b19eb)) && (substr(strtolower($c68b76c7e42b19eb), 0, 4) == 'http'))) {
		goto label3;
	}

	$E3f5ab103227acc2 = 'jpg';
	$a325d670de291ca7 = IMAGES_PATH . $F48d5724f3b4ec96 . '.' . $E3f5ab103227acc2;

	if (file_exists($a325d670de291ca7)) {
		goto label39;
	}

	$Daaec03d386c8f6a = curl_init();
	goto label47;

	label38:

	goto label3;

	label39:

	return 's:' . SERVER_ID . ':/images/' . $F48d5724f3b4ec96 . '.' . $E3f5ab103227acc2;
	goto label3;

	label47:

	curl_setopt($Daaec03d386c8f6a, CURLOPT_URL, $c68b76c7e42b19eb);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($Daaec03d386c8f6a, CURLOPT_TIMEOUT, 5);
	$ba2d146bb5a55097 = curl_exec($Daaec03d386c8f6a);
	goto label76;

	label76:

	if (!(0 < strlen($ba2d146bb5a55097))) {
		goto label38;
	}

	$E111d28e9acc50b9 = IMAGES_PATH . $F48d5724f3b4ec96 . '.' . $E3f5ab103227acc2;
	file_put_contents($E111d28e9acc50b9, $ba2d146bb5a55097);

	if (!file_exists($E111d28e9acc50b9)) {
		goto label38;
	}

	return 's:' . SERVER_ID . ':/images/' . $F48d5724f3b4ec96 . '.' . $E3f5ab103227acc2;
	goto label38;

	label106:
}

function ADD0B2C53b2714A1()
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

function B47fB5320E43F112($Abcb228699a7f743)
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

function b8b65e8cB6A1DfE9($b5fd3e3f0096d7f4, $Abcb228699a7f743)
{
	global $b62d6460eb33ea07;
	$f155fef57262b32a = b47fb5320e43f112($b5fd3e3f0096d7f4);
	$B149a33cab1dcf5f = json_decode($f155fef57262b32a['bouquet_movies'], true);

	if (in_array($Abcb228699a7f743, $B149a33cab1dcf5f)) {
		goto label24;
	}

	$B149a33cab1dcf5f[] = intval($Abcb228699a7f743);

	label24:

	$B149a33cab1dcf5f = '[' . implode(',', array_map('intval', $B149a33cab1dcf5f)) . ']';
	$b62d6460eb33ea07->query('UPDATE `bouquets` SET `bouquet_movies` = ? WHERE `id` = ?;', $B149a33cab1dcf5f, $b5fd3e3f0096d7f4);
}

function ED8DbF4549416fa2()
{
	goto label347;

	label1:

	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_source` = ? WHERE `id` = ?;', json_encode([VOD_PATH . $E5b50d60c471d7d6 . '.mp4']), $E5b50d60c471d7d6);
	$b62d6460eb33ea07->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`, `pid`, `to_analyze`) VALUES(?, ?, NULL, 1, 1);', $E5b50d60c471d7d6, SERVER_ID);
	$b62d6460eb33ea07->query('UPDATE `recordings` SET `status` = 2, `created_id` = ? WHERE `id` = ?;', $E5b50d60c471d7d6, $Cea68b43e2d6b34e);

	label24:

	goto label274;

	label25:

	$b62d6460eb33ea07->db_connect();

	label27:

	if (!$a4b031b1cb4f6c1d) {
		goto label274;
	}
	if (file_exists(ARCHIVE_PATH . $Cea68b43e2d6b34e . '.ts') && (0 < filesize(ARCHIVE_PATH . $Cea68b43e2d6b34e . '.ts'))) {
		goto label253;
	}

	echo 'Recording size is 0 bytes.' . "\n";
	goto label251;

	label49:

	$ba2d146bb5a55097 = stream_get_line($B3299684b062e356, 4096);

	if (empty($ba2d146bb5a55097)) {
		goto label137;
	}

	$E612b58293cd8995 += $ba2d146bb5a55097;
	fwrite($Aeedba454ae18dad, $ba2d146bb5a55097);
	fflush($Aeedba454ae18dad);
	goto label136;

	label66:

	$B49464f3cdbbe7df['stream_icon'] = cb24148cf9ab2a75($B49464f3cdbbe7df['stream_icon']);

	label72:

	$d03052828cab569a = intval($B49464f3cdbbe7df['end'] - $B49464f3cdbbe7df['start']);
	$Dd41a39d4bb950cf = c73ed8d0b70ce12f('streams');
	$Dd41a39d4bb950cf['type'] = 2;
	goto label378;

	label86:

	$Dd41a39d4bb950cf['rating'] = 0;
	$Dd41a39d4bb950cf['read_native'] = 0;
	$Dd41a39d4bb950cf['movie_symlink'] = 0;
	$Dd41a39d4bb950cf['remove_subtitles'] = 0;
	$Dd41a39d4bb950cf['transcode_profile_id'] = 0;
	goto label168;

	label97:

	$a4b031b1cb4f6c1d = false;
	goto label24;

	label99:

	foreach (json_decode($B49464f3cdbbe7df['bouquets'], true) as $f155fef57262b32a) {
		b8b65e8cb6a1dfe9($f155fef57262b32a, $E5b50d60c471d7d6);
	}

	goto label1;

	label113:

	$e1751a10c8f69e7b = $E612b58293cd8995 = 0;
	$a4b031b1cb4f6c1d = false;
	$B49464f3cdbbe7df = $b62d6460eb33ea07->get_row();
	if (((($B49464f3cdbbe7df['start'] - 60) <= time()) && (time() <= $B49464f3cdbbe7df['end'])) || $B49464f3cdbbe7df['archive']) {
		goto label319;
	}

	goto label317;

	label136:

	$e1751a10c8f69e7b = 0;

	label137:
	if (!(($B49464f3cdbbe7df['end'] <= time()) && !$B49464f3cdbbe7df['archive'])) {
		goto label530;
	}

	$a4b031b1cb4f6c1d = true;
	fclose($Aeedba454ae18dad);
	goto label529;

	label153:
	if ((0 < $C98e11437faf4199) && file_exists($Aac64ae34ff57fc4)) {
		goto label163;
	}

	echo 'Channel is not running.' . "\n";
	goto label451;

	label163:

	$b62d6460eb33ea07->query('UPDATE `recordings` SET `status` = 1 WHERE `id` = ?;', $Cea68b43e2d6b34e);
	goto label205;

	label168:

	$Dd41a39d4bb950cf['order'] = add0b2c53b2714a1();
	$Dd41a39d4bb950cf['added'] = time();
	$Dd41a39d4bb950cf['category_id'] = '[' . implode(',', array_map('intval', json_decode($B49464f3cdbbe7df['category_id'], true))) . ']';
	$Fac87d38f7786df0 = c483a3a59265139e($Dd41a39d4bb950cf);
	$B91645b8411dc88c = 'REPLACE INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
	goto label467;

	label205:

	$b62d6460eb33ea07->close_mysql();

	label207:
	if (!(XUI::B4AB2a8EB0Aa68eE($C98e11437faf4199, $B49464f3cdbbe7df['stream_id']) && file_exists($Aac64ae34ff57fc4))) {
		goto label451;
	}

	if ($B49464f3cdbbe7df['archive']) {
		goto label283;
	}

	$B3299684b062e356 = @fopen('http://127.0.0.1:' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/admin/live?password=' . XUI::$rSettings['live_streaming_pass'] . '&stream=' . $B49464f3cdbbe7df['stream_id'] . '&extension=ts', 'r');
	goto label282;

	label244:

	echo 'Too many fails!' . "\n";
	goto label451;

	label246:

	echo 'Broken pipe! Restarting...' . "\n";
	sleep(1);
	goto label450;

	label251:

	$a4b031b1cb4f6c1d = false;
	goto label274;

	label253:

	echo 'Recording complete! Converting to MP4...' . "\n";

	if (empty($B49464f3cdbbe7df['stream_icon'])) {
		goto label72;
	}

	goto label66;

	label258:

	@unlink(ARCHIVE_PATH . $Cea68b43e2d6b34e . '.ts');

	label266:

	goto label535;

	label267:

	if (!$B49464f3cdbbe7df['archive']) {
		goto label273;
	}

	$a4b031b1cb4f6c1d = true;
	goto label451;

	label273:

	goto label455;

	label274:

	if ($a4b031b1cb4f6c1d) {
		goto label266;
	}

	echo 'Recording incomplete!' . "\n";
	$b62d6460eb33ea07->query('UPDATE `recordings` SET `status` = 3 WHERE `id` = ?;', $Cea68b43e2d6b34e);
	goto label258;

	label282:

	goto label316;

	label283:

	$f7037fc395d8fcad = intval(($B49464f3cdbbe7df['end'] - $B49464f3cdbbe7df['start']) / 60);
	$B3299684b062e356 = @fopen('http://127.0.0.1:' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/admin/timeshift?password=' . XUI::$rSettings['live_streaming_pass'] . '&stream=' . $B49464f3cdbbe7df['stream_id'] . '&start=' . $B49464f3cdbbe7df['start'] . '&duration=' . $f7037fc395d8fcad . '&extension=ts', 'r');

	label316:

	goto label361;

	label317:

	echo 'Programme is not currently airing.' . "\n";
	goto label451;

	label319:

	$C98e11437faf4199 = (file_exists(STREAMS_PATH . $B49464f3cdbbe7df['stream_id'] . '_.pid') ? intval(file_get_contents(STREAMS_PATH . $B49464f3cdbbe7df['stream_id'] . '_.pid')) : 0);
	$Aac64ae34ff57fc4 = STREAMS_PATH . $B49464f3cdbbe7df['stream_id'] . '_.m3u8';
	goto label153;

	label347:

	global $b62d6460eb33ea07;
	global $Cea68b43e2d6b34e;
	$b62d6460eb33ea07->query('SELECT * FROM `recordings` WHERE `id` = ?;', $Cea68b43e2d6b34e);

	if (0 < $b62d6460eb33ea07->num_rows()) {
		goto label113;
	}

	echo 'Recording entry doesn\'t exist.' . "\n";
	goto label266;
	goto label113;

	label361:

	if (!$B3299684b062e356) {
		goto label273;
	}

	echo 'Recording...' . "\n";

	if ($B49464f3cdbbe7df['archive']) {
		goto label478;
	}

	$Aeedba454ae18dad = fopen(ARCHIVE_PATH . $Cea68b43e2d6b34e . '.ts', 'a');
	goto label486;
	goto label478;

	label378:

	$Dd41a39d4bb950cf['stream_source'] = '[]';
	$Dd41a39d4bb950cf['target_container'] = 'mp4';
	$Dd41a39d4bb950cf['stream_display_name'] = $B49464f3cdbbe7df['title'];
	$Dd41a39d4bb950cf['year'] = date('Y');
	$Dd41a39d4bb950cf['movie_properties'] = [
		'kinopoisk_url'          => NULL,
		'tmdb_id'                => NULL,
		'name'                   => $B49464f3cdbbe7df['title'],
		'o_name'                 => $B49464f3cdbbe7df['title'],
		'cover_big'              => $B49464f3cdbbe7df['stream_icon'],
		'movie_image'            => $B49464f3cdbbe7df['stream_icon'],
		'release_date'           => date('Y-m-d', $B49464f3cdbbe7df['start']),
		'episode_run_time'       => intval($d03052828cab569a / 60),
		'youtube_trailer'        => NULL,
		'director'               => '',
		'actors'                 => '',
		'cast'                   => '',
		'description'            => trim($B49464f3cdbbe7df['description']),
		'plot'                   => trim($B49464f3cdbbe7df['description']),
		'age'                    => '',
		'mpaa_rating'            => '',
		'rating_count_kinopoisk' => 0,
		'country'                => '',
		'genre'                  => '',
		'backdrop_path'          => [],
		'duration_secs'          => $d03052828cab569a,
		'duration'               => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
		'video'                  => [],
		'audio'                  => [],
		'bitrate'                => 0,
		'rating'                 => 0
	];
	goto label86;

	label450:

	goto label207;

	label451:

	if ($b62d6460eb33ea07->connected) {
		goto label27;
	}

	goto label25;

	label455:

	$e1751a10c8f69e7b++;

	if (!($e1751a10c8f69e7b == 5)) {
		goto label246;
	}

	if (!(10485760 <= $E612b58293cd8995)) {
		goto label466;
	}

	$a4b031b1cb4f6c1d = true;

	label466:

	goto label244;

	label467:

	if ($b62d6460eb33ea07->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
		goto label477;
	}

	echo 'Failed to insert into database!' . "\n";
	$a4b031b1cb4f6c1d = false;
	goto label24;

	label477:

	goto label492;

	label478:

	$Aeedba454ae18dad = fopen(ARCHIVE_PATH . $Cea68b43e2d6b34e . '.ts', 'w');

	label486:

	if (feof($B3299684b062e356)) {
		goto label531;
	}

	goto label49;

	label492:

	$E5b50d60c471d7d6 = $b62d6460eb33ea07->last_insert_id();
	$b492c39d2d86c9b6 = shell_exec(FFMPEG_BIN_40 . ' -i \'' . ARCHIVE_PATH . $Cea68b43e2d6b34e . '.ts' . '\' -c:v copy -c:a copy \'' . VOD_PATH . $E5b50d60c471d7d6 . '.mp4' . '\'');
	@unlink(ARCHIVE_PATH . $Cea68b43e2d6b34e . '.ts');

	if (file_exists(VOD_PATH . $E5b50d60c471d7d6 . '.mp4')) {
		goto label99;
	}

	echo 'Couldn\'t convert to MP4' . "\n";
	goto label97;

	label529:

	goto label451;

	label530:

	goto label486;

	label531:

	fclose($B3299684b062e356);
	goto label267;

	label535:
}

function shutdown()
{
	global $b62d6460eb33ea07;
	global $Cea68b43e2d6b34e;

	if (!file_exists(ARCHIVE_PATH . $Cea68b43e2d6b34e . '_.record')) {
		goto label17;
	}

	unlink(ARCHIVE_PATH . $Cea68b43e2d6b34e . '_.record');

	label17:

	if (!is_object($b62d6460eb33ea07)) {
		goto label25;
	}

	$b62d6460eb33ea07->close_mysql();

	label25:
}

goto label47;

label1:

eD8dbf4549416fA2();
goto label70;

label5:

set_time_limit(0);
cli_set_process_title('Record[' . $Cea68b43e2d6b34e . ']');
goto label41;

label18:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
$Cea68b43e2d6b34e = intval($argv[1]);
c7cc2f0dd6f71ebb($Cea68b43e2d6b34e);
goto label5;

label41:

goto label1;

label47:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label58;
}

exit('Please run as XUI!' . "\n");

label58:
if (!(!@$argc || ($argc <= 1))) {
	goto label18;
}

exit(0);
goto label18;

label70:

?>