<?php


goto label1;

label1:

include 'functions.php';
if (!(!($fe93a43f53d92a4e = XUI::Cb6Ee16e86f09e61(XUI::$rRequest['id'])) || !in_array(XUI::$rRequest['id'], $E59d0debc75e7be8['vod_ids']))) {
	goto label26;
}

header('Location: movies.php');
exit();

label26:

goto label396;

label27:

goto label49;

label28:

$b62d6460eb33ea07->query('SELECT `streams`.*, COUNT(`user_id`) AS `count` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `user_id` IN (SELECT DISTINCT(`user_id`) FROM `lines_activity` WHERE `stream_id` = ? AND (`date_end` - `date_start` > 60)) AND `type` = 2 AND ' . $e047bc7418ea776f . ' `stream_id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') AND (SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1 GROUP BY `stream_id` ORDER BY `count` DESC LIMIT ' . (6 - count($B5480d3e75586b54)) . ';', $fe93a43f53d92a4e['id']);

label49:

goto label420;

label50:

echo ' min</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li><span><strong>Country:</strong></span> <a href="#">';
echo $Ccbdf03f8a4df633['country'];
echo '</a> </li>' . "\n" . '                                        <li>' . "\n" . '                                            <span><strong>Cast:</strong></span>' . "\n" . '                                            ';
echo implode(', ', array_slice(explode(',', $Ccbdf03f8a4df633['cast']), 0, 5));
echo '                                        </li>' . "\n\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="card__description card__description--details">' . "\n\t\t\t\t\t\t\t\t\t\t";
goto label552;

label71:

$B5480d3e75586b54 = [];
$e9e8d0bf28ba88c0 = json_decode($fe93a43f53d92a4e['similar'], true);

if (!(0 < count($e9e8d0bf28ba88c0))) {
	goto label271;
}

if (XUI::$rSettings['player_hide_incompatible']) {
	goto label149;
}

if (PLATFORM == 'xui') {
	goto label596;
}

goto label586;

label94:

$da347709f6cb60f4 = ($b41097c951ee83d3['_data']['images']['backdrops'][$af55af2273851465] ? 'https://image.tmdb.org/t/p/w1280' . $b41097c951ee83d3['_data']['images']['backdrops'][$af55af2273851465]['file_path'] : XUI::fCA722697178454B($Ccbdf03f8a4df633['backdrop_path'][0]) ?: '');
$Df7b5971cf1d6194 = array_rand($b41097c951ee83d3['_data']['images']['posters']);
$a03b04712997db0a = ($b41097c951ee83d3['_data']['images']['posters'][$Df7b5971cf1d6194] ? 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $b41097c951ee83d3['_data']['images']['posters'][$Df7b5971cf1d6194]['file_path'] : XUI::fCA722697178454b($Ccbdf03f8a4df633['cover']) ?: '');

label144:

$a559e456f0fa34f1 = [$fe93a43f53d92a4e['id']];
goto label71;

label148:

goto label158;

label149:

$b62d6460eb33ea07->query('SELECT * FROM `streams` WHERE `tmdb_id` IN (' . implode(',', $e9e8d0bf28ba88c0) . ') AND (SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1 LIMIT 6;');

label158:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$E3ce58b49f6265cc = json_decode(PLATFORM == 'xui' ? $Fb9da1713bff19ce['movie_properties'] : $Fb9da1713bff19ce['movie_propeties'], true);
	$B5480d3e75586b54[] = ['type' => 'movie', 'id' => $Fb9da1713bff19ce['id'], 'title' => $Fb9da1713bff19ce['title'] ?: $Fb9da1713bff19ce['stream_display_name'], 'year' => $Fb9da1713bff19ce['year'] ?: NULL, 'rating' => $E3ce58b49f6265cc['rating'], 'cover' => XUI::FCA722697178454B($E3ce58b49f6265cc['movie_image']) ?: '', 'backdrop' => XUI::FCA722697178454b($E3ce58b49f6265cc['backdrop_path'][0]) ?: ''];
	$a559e456f0fa34f1[] = $Fb9da1713bff19ce['id'];
}

goto label271;

label212:

echo "\t" . '<section class="section details">' . "\n\t\t" . '<div class="details__bg" data-bg="';
echo $da347709f6cb60f4;
echo '"></div>' . "\n\t\t" . '<div class="container top-margin">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<h1 class="details__title">';
echo $fe93a43f53d92a4e['stream_display_name'];
echo '<br/>' . "\n" . '                        <ul class="card__list">' . "\n" . '                            ';
goto label307;

label219:

$b41097c951ee83d3 = XUI::unserialize(file_get_contents(TMP_PATH . 'tmdb_' . $Ccbdf03f8a4df633['tmdb_id']));
goto label345;

label231:

$b41097c951ee83d3 = json_decode(json_encode(XUI::getMovieTMDB($Ccbdf03f8a4df633['tmdb_id'])), true);

if (!$b41097c951ee83d3) {
	goto label345;
}

goto label334;

label247:

$da347709f6cb60f4 = XUI::FCA722697178454b($Ccbdf03f8a4df633['backdrop_path'][0]) ?: '';
$a03b04712997db0a = XUI::fCA722697178454B($Ccbdf03f8a4df633['cover']) ?: '';
goto label144;

label263:

$af55af2273851465 = array_rand($b41097c951ee83d3['_data']['images']['backdrops']);
goto label94;

label271:

if (!(count($B5480d3e75586b54) < 6)) {
	goto label478;
}

if (0 < count($a559e456f0fa34f1)) {
	goto label607;
}

$e047bc7418ea776f = '';
goto label606;

label286:

if (!($fe93a43f53d92a4e['target_container'] != 'mp4')) {
	goto label292;
}

$A412a8fc85cbb7e7 = true;

label292:

if (!$Ccbdf03f8a4df633['tmdb_id']) {
	goto label345;
}

if (!file_exists(TMP_PATH . 'tmdb_' . $Ccbdf03f8a4df633['tmdb_id'])) {
	goto label231;
}

goto label219;

label307:

foreach (PLATFORM == 'xui' ? json_decode($fe93a43f53d92a4e['category_id'], true) : [$fe93a43f53d92a4e['category_id']] as $fe63f70cd74f3298) {
	echo '                            <li>';
	echo XUI::$rCategories[$fe63f70cd74f3298]['category_name'];
	echo '</li>' . "\n" . '                            ';
}

echo '                        </ul>' . "\n" . '                    </h1>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '<div class="col-12 col-xl-12">' . "\n\t\t\t\t\t" . '<div class="card card--details">' . "\n\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t" . '<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">' . "\n\t\t\t\t\t\t\t\t" . '<div class="card__cover">' . "\n\t\t\t\t\t\t\t\t\t" . '<img src="';
echo $a03b04712997db0a;
echo '" alt="">' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">' . "\n\t\t\t\t\t\t\t\t" . '<div class="card__content">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="card__wrap">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="card__rate">';
goto label560;

label334:

file_put_contents(TMP_PATH . 'tmdb_' . $Ccbdf03f8a4df633['tmdb_id'], XUI::serialize($b41097c951ee83d3));

label345:

if ($b41097c951ee83d3) {
	goto label263;
}

goto label247;

label348:

if (PLATFORM == 'xui') {
	goto label374;
}

$b62d6460eb33ea07->query('SELECT `streams`.*, COUNT(`user_id`) AS `count` FROM `user_activity` LEFT JOIN `streams` ON `streams`.`id` = `user_activity`.`stream_id` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `user_id` IN (SELECT DISTINCT(`user_id`) FROM `user_activity` WHERE `stream_id` = ? AND (`date_end` - `date_start` > 60)) AND `type` = 2 AND ' . $e047bc7418ea776f . ' `stream_id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') GROUP BY `stream_id` ORDER BY `count` DESC LIMIT ' . (6 - count($B5480d3e75586b54)) . ';', $fe93a43f53d92a4e['id']);
goto label27;

label374:

$b62d6460eb33ea07->query('SELECT `streams`.*, COUNT(`user_id`) AS `count` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `user_id` IN (SELECT DISTINCT(`user_id`) FROM `lines_activity` WHERE `stream_id` = ? AND (`date_end` - `date_start` > 60)) AND `type` = 2 AND ' . $e047bc7418ea776f . ' `stream_id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') GROUP BY `stream_id` ORDER BY `count` DESC LIMIT ' . (6 - count($B5480d3e75586b54)) . ';', $fe93a43f53d92a4e['id']);
goto label27;

label396:

if (PLATFORM == 'xui') {
	goto label417;
}

$fe93a43f53d92a4e['target_container'] = json_decode($fe93a43f53d92a4e['target_container'], true)[0] ?: 'mp4';
$Ccbdf03f8a4df633 = json_decode($fe93a43f53d92a4e['movie_propeties'], true);
goto label625;

label417:

goto label619;

label418:

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</section>' . "\n" . '    ';

label419:

goto label658;

label420:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (!$Fb9da1713bff19ce['id']) {
		goto label476;
	}

	$E3ce58b49f6265cc = json_decode(PLATFORM == 'xui' ? $Fb9da1713bff19ce['movie_properties'] : $Fb9da1713bff19ce['movie_propeties'], true);
	$B5480d3e75586b54[] = ['type' => 'movie', 'id' => $Fb9da1713bff19ce['id'], 'title' => $Fb9da1713bff19ce['title'] ?: $Fb9da1713bff19ce['stream_display_name'], 'year' => $Fb9da1713bff19ce['year'] ?: NULL, 'rating' => $E3ce58b49f6265cc['rating'], 'cover' => XUI::FCa722697178454b($E3ce58b49f6265cc['movie_image']) ?: '', 'backdrop' => XUI::fCa722697178454b($E3ce58b49f6265cc['backdrop_path'][0]) ?: ''];
	$a559e456f0fa34f1[] = $Fb9da1713bff19ce['id'];

	label476:
}

label478:

$F6edd90960a3bd9d = $fe93a43f53d92a4e['stream_display_name'];
include 'header.php';
goto label212;

label482:

echo '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</section>' . "\n" . '    ';

if (!(0 < count($B5480d3e75586b54))) {
	goto label419;
}

echo "\t" . '<section class="content">' . "\n\t\t" . '<div class="container" style="margin-top: 30px;">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12 col-lg-12 col-xl-12">' . "\n\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t" . '<h2 class="section__title section__title--sidebar">Users Also Watched</h2>' . "\n\t\t\t\t\t\t" . '</div>' . "\n" . '                        ';

foreach (array_slice($B5480d3e75586b54, 0, 6) as $B4a603c2a57d3acf) {
	goto label500;

	label500:

	echo "\t\t\t\t\t\t" . '<div class="col-4 col-sm-4 col-lg-2">' . "\n\t\t\t\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t\t\t\t" . '<div class="card__cover">' . "\n\t\t\t\t\t\t\t\t\t" . '<img loading="lazy" src="resize.php?url=';
	echo urlencode($B4a603c2a57d3acf['cover']);
	echo '&w=267&h=400" alt="">' . "\n" . '                                    <a href="movie.php?id=';
	echo $B4a603c2a57d3acf['id'];
	echo '" class="card__play">' . "\n" . '                                        <i class="icon ion-ios-play"></i>' . "\n" . '                                    </a>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="card__content">' . "\n" . '                                    <h3 class="card__title"><a href="movie.php?id=';
	goto label527;

	label512:

	echo '<i class="icon ion-ios-star"></i>';
	echo $B4a603c2a57d3acf['rating'] ? number_format($B4a603c2a57d3acf['rating'], 1) : 'N/A';
	echo '</span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n" . '                        ';
	goto label549;

	label527:

	echo $B4a603c2a57d3acf['id'];
	echo '">';
	echo htmlspecialchars($B4a603c2a57d3acf['title']);
	echo '</a></h3>' . "\n" . '                                    <span class="card__rate">';
	echo $B4a603c2a57d3acf['year'] ? intval($B4a603c2a57d3acf['year']) . ' &nbsp; ' : '';
	goto label512;

	label549:
}

goto label418;

label552:

echo $Ccbdf03f8a4df633['description'];
echo "\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n" . '                        <div class="row top-margin-sml">' . "\n" . '                            <div class="col-12">' . "\n" . '                                <div class="alert alert-danger" id="player__error" style="display: none;"></div>' . "\n" . '                                <div id="player_row">' . "\n" . '                                    ';

if ($A412a8fc85cbb7e7) {
	goto label581;
}

echo '                                    <div id="now__playing__player"></div>' . "\n" . '                                    ';
goto label585;
goto label581;

label560:

echo $fe93a43f53d92a4e['year'] ? $fe93a43f53d92a4e['year'] . ' &nbsp; ' : '';
echo '<i class="icon ion-ios-star"></i>';
echo $Ccbdf03f8a4df633['rating'] ?: 'N/A';
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<ul class="card__meta">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li><span><strong>Duration:</strong></span> ';
echo intval($Ccbdf03f8a4df633['duration_secs'] / 60);
goto label50;

label581:

echo '                                    <video controls width="100%" autoplay>' . "\n" . '                                        <source src="';
echo $F83b167f3cf044be[0];
echo '" type="video/mp4" />' . "\n" . '                                    </video>' . "\n" . '                                    ';

label585:

goto label482;

label586:

$b62d6460eb33ea07->query('SELECT * FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `tmdb_id` IN (' . implode(',', $e9e8d0bf28ba88c0) . ') LIMIT 6;');
goto label605;

label596:

$b62d6460eb33ea07->query('SELECT * FROM `streams` WHERE `tmdb_id` IN (' . implode(',', $e9e8d0bf28ba88c0) . ') LIMIT 6;');

label605:

goto label148;

label606:

goto label614;

label607:

$e047bc7418ea776f = '`stream_id` NOT IN (' . implode(',', $a559e456f0fa34f1) . ') AND ';

label614:

if (XUI::$rSettings['player_hide_incompatible']) {
	goto label28;
}

goto label348;

label619:

$Ccbdf03f8a4df633 = json_decode($fe93a43f53d92a4e['movie_properties'], true);

label625:
$aa049d3d6d423a70 = XUI::c65c7F64E35c199F((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off')) || ($_SERVER['SERVER_PORT'] == 443));
$F83b167f3cf044be = [$aa049d3d6d423a70 . 'movie/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $fe93a43f53d92a4e['id'] . '.' . $fe93a43f53d92a4e['target_container']];
$A412a8fc85cbb7e7 = false;
goto label286;

label658:

include 'footer.php';

?>