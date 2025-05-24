<?php


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

goto label201;

label1:

foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
	$b62d6460eb33ea07->query('SELECT `id`, `tmdb_id` FROM `streams_series` WHERE `similar` IS NULL AND `tmdb_id` > 0 LIMIT ' . $Feb130957c9ca68a . ', 1000;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B5480d3e75586b54 = [];

		foreach (range(1, 3) as $D7209256c56b1469) {
			foreach (json_decode(json_encode($b41097c951ee83d3->getSimilarSeries($Fb9da1713bff19ce['tmdb_id'], $D7209256c56b1469)), true) as $B4a603c2a57d3acf) {
				$B5480d3e75586b54[] = intval($B4a603c2a57d3acf['id']);
			}
		}

		$B5480d3e75586b54 = array_unique($B5480d3e75586b54);
		$b62d6460eb33ea07->query('UPDATE `streams_series` SET `similar` = ? WHERE `id` = ?;', json_encode($B5480d3e75586b54), $Fb9da1713bff19ce['id']);
	}
}

label60:

goto label285;

label61:

cli_set_process_title('XUI[Popular]');
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::A336b0daD3eAf634() . __FILE__);
XUI::a3cF732c257BD804($F2db9d2971f5c8c4);

if (!(0 < strlen(XUI::$rSettings['tmdb_api_key']))) {
	goto label60;
}

if (0 < strlen(XUI::$rSettings['tmdb_language'])) {
	goto label333;
}

goto label326;

label94:

foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
	$b62d6460eb33ea07->query('SELECT `id`, `tmdb_id` FROM `streams` WHERE `type` = 2 AND `similar` IS NULL AND `tmdb_id` > 0 LIMIT ' . $Feb130957c9ca68a . ', 1000;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$B5480d3e75586b54 = [];

		foreach (range(1, 3) as $D7209256c56b1469) {
			foreach (json_decode(json_encode($b41097c951ee83d3->getSimilarMovies($Fb9da1713bff19ce['tmdb_id'], $D7209256c56b1469)), true) as $B4a603c2a57d3acf) {
				$B5480d3e75586b54[] = intval($B4a603c2a57d3acf['_data']['id']);
			}
		}

		$B5480d3e75586b54 = array_unique($B5480d3e75586b54);
		$b62d6460eb33ea07->query('UPDATE `streams` SET `similar` = ? WHERE `id` = ?;', json_encode($B5480d3e75586b54), $Fb9da1713bff19ce['id']);
	}
}

label154:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_series` WHERE `similar` IS NULL AND `tmdb_id` > 0;');
goto label308;

label158:

foreach (range(1, $f61aba7fb6fff24b) as $D7209256c56b1469) {
	$c299da94f66c1d36 = $b41097c951ee83d3->getPopularTVShows($D7209256c56b1469);

	foreach ($c299da94f66c1d36 as $B4a603c2a57d3acf) {
		if (!isset($D7b49764dbd151bf[$B4a603c2a57d3acf->getID()])) {
			goto label184;
		}

		$B9869413eae86beb['series'][] = $D7b49764dbd151bf[$B4a603c2a57d3acf->getID()];

		label184:
	}
}

file_put_contents(CONTENT_PATH . 'tmdb_popular', igbinary_serialize($B9869413eae86beb));
$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams` WHERE `type` = 2 AND `similar` IS NULL AND `tmdb_id` > 0;');
goto label267;

label201:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label212;
}

exit('Please run as XUI!' . "\n");

label212:

set_time_limit(0);

if (@$argc) {
	goto label249;
}

goto label248;

label221:

$f61aba7fb6fff24b = 100;
$D7b49764dbd151bf = [];
$b62d6460eb33ea07->query('SELECT `id`, `movie_properties` FROM `streams` WHERE `type` = 2 AND `movie_properties` IS NOT NULL AND LENGTH(`movie_properties`) > 0;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);

	if (!$Ccbdf03f8a4df633['tmdb_id']) {
		goto label245;
	}

	$D7b49764dbd151bf[$Ccbdf03f8a4df633['tmdb_id']] = $Fb9da1713bff19ce['id'];

	label245:
}

goto label343;

label248:

exit(0);

label249:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
require_once XUI_HOME . 'includes/libs/tmdb.php';
goto label61;

label267:

$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];

if (!(0 < $d353a4da8a0bb857)) {
	goto label154;
}

$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

if ($C455840d1f015c68) {
	goto label94;
}

$C455840d1f015c68 = [0];
goto label94;

label285:

$Ba4fc5e7e084eca7 = [];
$b62d6460eb33ea07->query('SELECT `stream_id`, COUNT(`activity_id`) AS `count` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `type` = 1 AND `date_end` < UNIX_TIMESTAMP() - (86400*28) GROUP BY `stream_id` ORDER BY `count` DESC LIMIT 500;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Ba4fc5e7e084eca7[] = $Fb9da1713bff19ce['stream_id'];
}

file_put_contents(CONTENT_PATH . 'live_popular', igbinary_serialize($Ba4fc5e7e084eca7));
goto label388;

label308:

$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];

if (!(0 < $d353a4da8a0bb857)) {
	goto label60;
}

$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);

if ($C455840d1f015c68) {
	goto label1;
}

$C455840d1f015c68 = [0];
goto label1;

label326:

$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key']);
goto label342;

label333:

$b41097c951ee83d3 = new TMDB(XUI::$rSettings['tmdb_api_key'], XUI::$rSettings['tmdb_language']);

label342:

goto label221;

label343:

$b62d6460eb33ea07->query('SELECT `id`, `tmdb_id` FROM `streams_series` WHERE `tmdb_id` IS NOT NULL AND LENGTH(`tmdb_id`) > 0;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$D7b49764dbd151bf[$Fb9da1713bff19ce['tmdb_id']] = $Fb9da1713bff19ce['id'];
}

$B9869413eae86beb = [
	'movies' => [],
	'series' => []
];

foreach (range(1, $f61aba7fb6fff24b) as $D7209256c56b1469) {
	$c299da94f66c1d36 = $b41097c951ee83d3->getPopularMovies($D7209256c56b1469);

	foreach ($c299da94f66c1d36 as $B4a603c2a57d3acf) {
		if (!isset($D7b49764dbd151bf[$B4a603c2a57d3acf->getID()])) {
			goto label383;
		}

		$B9869413eae86beb['movies'][] = $D7b49764dbd151bf[$B4a603c2a57d3acf->getID()];

		label383:
	}
}

goto label158;

label388:

?>