<?php


goto label332;

label1:

$c48ba51a637216f1 = intval(XUI::$rRequest['season']) ?: ($A29d8a2356bd9140[0] ?: 1);

if (XUI::$rSettings['player_hide_incompatible']) {
	goto label423;
}

if (PLATFORM == 'xui') {
	goto label788;
}

$b62d6460eb33ea07->query('SELECT * FROM `series_episodes` LEFT JOIN `streams` ON `streams`.`id` = `series_episodes`.`stream_id` WHERE `series_id` = ? AND `season_num` = ? ORDER BY `sort` ASC;', $d02ef9ae10a41939['id'], $c48ba51a637216f1);
goto label787;

label27:
if ($Bb9fda5ebf825f11 && $Bb9fda5ebf825f11['episodes']) {
	goto label89;
}

foreach ($D8329ce54de87aa5 as $e61e6dcee1252fa2) {
	$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $e61e6dcee1252fa2['movie_properties'] : $e61e6dcee1252fa2['movie_propeties'], true);
	$Ed866740a38cba1f[$e61e6dcee1252fa2['episode_num']] = ['title' => 'Episode ' . intval($e61e6dcee1252fa2['episode_num']), 'description' => $Ccbdf03f8a4df633['plot'] ?: 'No description is available...', 'rating' => $Ccbdf03f8a4df633['rating'] ?: NULL, 'image' => str_replace('w600_and_h900_bestv2', 'w500', XUI::fCA722697178454B($Ccbdf03f8a4df633['movie_image'])) ?: '', 'image_cover' => str_replace('w600_and_h900_bestv2', 'w500', XUI::FCa722697178454B($Ccbdf03f8a4df633['movie_image']))];
}

goto label419;

label89:

goto label384;

label90:

$df6991d59f367c7e++;
goto label290;

label93:

$Bb9fda5ebf825f11 = NULL;

if (!$d02ef9ae10a41939['tmdb_id']) {
	goto label331;
}

goto label476;

label99:

foreach (array_slice($B5480d3e75586b54, 0, 6) as $B4a603c2a57d3acf) {
	goto label145;

	label108:

	echo $B4a603c2a57d3acf['id'];
	echo '">';
	echo htmlspecialchars($B4a603c2a57d3acf['title']);
	echo '</a></h3>' . "\n" . '                                    <span class="card__rate">';
	echo $B4a603c2a57d3acf['year'] ? intval($B4a603c2a57d3acf['year']) . ' &nbsp; ' : '';
	goto label130;

	label130:

	echo '<i class="icon ion-ios-star"></i>';
	echo $B4a603c2a57d3acf['rating'] ? number_format($B4a603c2a57d3acf['rating'], 1) : 'N/A';
	echo '</span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n" . '                        ';
	goto label157;

	label145:

	echo "\t\t\t\t\t\t" . '<div class="col-4 col-sm-4 col-lg-2">' . "\n\t\t\t\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t\t\t\t" . '<div class="card__cover">' . "\n\t\t\t\t\t\t\t\t\t" . '<img loading="lazy" src="resize.php?url=';
	echo urlencode($B4a603c2a57d3acf['cover']);
	echo '&w=267&h=400" alt="">' . "\n" . '                                    <a href="episodes.php?id=';
	echo $B4a603c2a57d3acf['id'];
	echo '" class="card__play">' . "\n" . '                                        <i class="icon ion-ios-play"></i>' . "\n" . '                                    </a>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="card__content">' . "\n" . '                                    <h3 class="card__title"><a href="episodes.php?id=';
	goto label108;

	label157:
}

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</section>' . "\n" . '    ';

label160:

goto label892;

label161:
$aa049d3d6d423a70 = XUI::c65C7F64e35c199F((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off')) || ($_SERVER['SERVER_PORT'] == 443));
$b41097c951ee83d3 = NULL;

if (!$d02ef9ae10a41939['tmdb_id']) {
	goto label209;
}

if (!file_exists(TMP_PATH . 'tmdb_' . $d02ef9ae10a41939['tmdb_id'])) {
	goto label867;
}

$b41097c951ee83d3 = XUI::unserialize(file_get_contents(TMP_PATH . 'tmdb_' . $d02ef9ae10a41939['tmdb_id']));
goto label866;

label205:

echo '                        <div class="row top-margin-sml">' . "\n" . '                            <div class="col-12">' . "\n" . '                                <div id="player_row">' . "\n" . '                                    <div id="now__playing__player"></div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        ';
goto label208;

label207:

echo '                        <div class="row top-margin-sml" id="player_row" style="display: none;">' . "\n" . '                            <div class="col-12">' . "\n" . '                                <video controls width="100%" preload="none" id="video__player">' . "\n" . '                                    <source src="" type="video/mp4" />' . "\n" . '                                </video>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        ';

label208:

goto label807;

label209:

if ($b41097c951ee83d3) {
	goto label556;
}

$da347709f6cb60f4 = XUI::Fca722697178454b(json_decode($d02ef9ae10a41939['backdrop_path'], true)[0]) ?: '';
goto label548;

label225:

goto label235;

label226:

$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `tmdb_id` IN (' . implode(',', $e9e8d0bf28ba88c0) . ') AND (SELECT MAX(`compatible`) FROM `streams_servers` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams_servers`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) = 1 LIMIT 6;');

label235:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B5480d3e75586b54[] = ['type' => 'series', 'id' => $Fb9da1713bff19ce['id'], 'title' => $Fb9da1713bff19ce['title'], 'year' => $Fb9da1713bff19ce['year'] ?: ($Fb9da1713bff19ce['releaseDate'] ? substr($Fb9da1713bff19ce['releaseDate'], 0, 4) : NULL), 'rating' => $Fb9da1713bff19ce['rating'], 'cover' => XUI::fCa722697178454B($Fb9da1713bff19ce['cover']) ?: '', 'backdrop' => XUI::fCa722697178454B(json_decode($Fb9da1713bff19ce['backdrop_path'], true)[0]) ?: ''];
	$a559e456f0fa34f1[] = $Fb9da1713bff19ce['id'];
}

goto label887;

label289:

$df6991d59f367c7e = 0;

label290:

if (!($df6991d59f367c7e < count($D8329ce54de87aa5))) {
	goto label93;
}

if (!(PLATFORM != 'xui')) {
	goto label514;
}

$D8329ce54de87aa5[$df6991d59f367c7e]['target_container'] = json_decode($D8329ce54de87aa5[$df6991d59f367c7e]['target_container'], true)[0] ?: 'mp4';
goto label509;

label315:

if (!$Bb9fda5ebf825f11) {
	goto label331;
}

file_put_contents(TMP_PATH . 'tmdb_' . $d02ef9ae10a41939['tmdb_id'] . '_' . $c48ba51a637216f1, XUI::serialize($Bb9fda5ebf825f11));

label331:

goto label27;

label332:

include 'functions.php';
if (!(!($d02ef9ae10a41939 = XUI::BA2e785f0326D499(XUI::$rRequest['id'])) || !in_array(XUI::$rRequest['id'], $E59d0debc75e7be8['series_ids']))) {
	goto label357;
}

header('Location: series.php');
exit();

label357:

goto label161;

label358:

$a03b04712997db0a = ($b41097c951ee83d3['poster_path'] ? 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $b41097c951ee83d3['poster_path'] : XUI::fCa722697178454b($d02ef9ae10a41939['cover']) ?: '');

label372:

$F83b167f3cf044be = $A29d8a2356bd9140 = [];

if (PLATFORM == 'xui') {
	goto label589;
}

$b62d6460eb33ea07->query('SELECT DISTINCT(`season_num`) AS `season_num` FROM `series_episodes` WHERE `series_id` = ? ORDER BY `season_num` ASC;', $d02ef9ae10a41939['id']);
goto label588;

label384:

$Ed866740a38cba1f = [];

foreach ($Bb9fda5ebf825f11['episodes'] as $e61e6dcee1252fa2) {
	$Ed866740a38cba1f[$e61e6dcee1252fa2['episode_number']] = ['title' => $e61e6dcee1252fa2['name'], 'description' => $e61e6dcee1252fa2['overview'] ?: 'No description is available...', 'rating' => $e61e6dcee1252fa2['vote_average'] ?: NULL, 'image' => $e61e6dcee1252fa2['still_path'] ? 'https://image.tmdb.org/t/p/w500' . $e61e6dcee1252fa2['still_path'] : '', 'image_cover' => $e61e6dcee1252fa2['still_path'] ? 'https://image.tmdb.org/t/p/w1280' . $e61e6dcee1252fa2['still_path'] : ''];
}

label419:

$a559e456f0fa34f1 = [$d02ef9ae10a41939['id']];
goto label764;

label423:

$b62d6460eb33ea07->query('SELECT * FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` WHERE `series_id` = ? AND `season_num` = ? AND (SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1 ORDER BY `episode_num` ASC;', $d02ef9ae10a41939['id'], $c48ba51a637216f1);

label429:

$A412a8fc85cbb7e7 = false;
$D8329ce54de87aa5 = $b62d6460eb33ea07->get_rows();
goto label289;

label434:

echo $da347709f6cb60f4;
echo '"></div>' . "\n\t\t" . '<div class="container top-margin">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<h1 class="details__title">';
echo $d02ef9ae10a41939['title'];
echo '<br/>' . "\n" . '                        <ul class="card__list">' . "\n" . '                            ';

foreach (PLATFORM == 'xui' ? json_decode($d02ef9ae10a41939['category_id'], true) : [$d02ef9ae10a41939['category_id']] as $fe63f70cd74f3298) {
	echo '                            <li>';
	echo XUI::$rCategories[$fe63f70cd74f3298]['category_name'];
	echo '</li>' . "\n" . '                            ';
}

goto label628;

label463:

echo '<i class="icon ion-ios-star"></i>';
echo $d02ef9ae10a41939['rating'] ?: 'N/A';
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<ul class="card__meta">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<li><span><strong>Duration:</strong></span> ';
echo intval($d02ef9ae10a41939['episode_run_time']);
echo ' min</li>' . "\n" . '                                        <li>' . "\n" . '                                            <span><strong>Cast:</strong></span>' . "\n" . '                                            ';
goto label826;

label476:

if (!file_exists(TMP_PATH . 'tmdb_' . $d02ef9ae10a41939['tmdb_id'] . '_' . $c48ba51a637216f1)) {
	goto label502;
}

$Bb9fda5ebf825f11 = XUI::unserialize(file_get_contents(TMP_PATH . 'tmdb_' . $d02ef9ae10a41939['tmdb_id'] . '_' . $c48ba51a637216f1));
goto label331;

label502:

$Bb9fda5ebf825f11 = XUI::getSeasonTMDB($d02ef9ae10a41939['tmdb_id'], $c48ba51a637216f1);
goto label315;

label509:

$D8329ce54de87aa5[$df6991d59f367c7e]['episode_num'] = $D8329ce54de87aa5[$df6991d59f367c7e]['sort'];

label514:

$F83b167f3cf044be[$D8329ce54de87aa5[$df6991d59f367c7e]['id']] = $aa049d3d6d423a70 . 'series/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $D8329ce54de87aa5[$df6991d59f367c7e]['id'] . '.' . $D8329ce54de87aa5[$df6991d59f367c7e]['target_container'];
$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $D8329ce54de87aa5[$df6991d59f367c7e]['movie_properties'] : $D8329ce54de87aa5[$df6991d59f367c7e]['movie_propeties'], true);
goto label90;

label548:

$a03b04712997db0a = XUI::Fca722697178454b($d02ef9ae10a41939['cover']) ?: '';
goto label372;

label556:

$af55af2273851465 = array_rand($b41097c951ee83d3['images']['backdrops']);
$da347709f6cb60f4 = ($b41097c951ee83d3['images']['backdrops'][$af55af2273851465] ? 'https://image.tmdb.org/t/p/w1280' . $b41097c951ee83d3['images']['backdrops'][$af55af2273851465]['file_path'] : XUI::FCa722697178454B(json_decode($d02ef9ae10a41939['backdrop_path'], true)[0]) ?: '');
goto label358;

label588:

goto label594;

label589:

$b62d6460eb33ea07->query('SELECT DISTINCT(`season_num`) AS `season_num` FROM `streams_episodes` WHERE `series_id` = ? ORDER BY `season_num` ASC;', $d02ef9ae10a41939['id']);

label594:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (XUI::$rSettings['player_hide_incompatible']) {
		goto label608;
	}

	$A29d8a2356bd9140[] = $Fb9da1713bff19ce['season_num'];
	goto label625;

	label608:

	$b62d6460eb33ea07->query('SELECT MAX(`compatible`) AS `compatible` FROM `streams_servers` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams_servers`.`stream_id` WHERE `series_id` = ? AND `season_num` = ?;', $d02ef9ae10a41939['id'], $Fb9da1713bff19ce['season_num']);

	if (!$b62d6460eb33ea07->get_row()['compatible']) {
		goto label625;
	}

	$A29d8a2356bd9140[] = $Fb9da1713bff19ce['season_num'];

	label625:
}

goto label1;

label628:

echo '                        </ul>' . "\n" . '                    </h1>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '<div class="col-12 col-xl-12">' . "\n\t\t\t\t\t" . '<div class="card card--details">' . "\n\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t" . '<div class="col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">' . "\n\t\t\t\t\t\t\t\t" . '<div class="card__cover">' . "\n\t\t\t\t\t\t\t\t\t" . '<img src="';
echo $a03b04712997db0a;
echo '" alt="">' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9">' . "\n\t\t\t\t\t\t\t\t" . '<div class="card__content">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="card__wrap">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="card__rate">';
echo $d02ef9ae10a41939['year'] ? $d02ef9ae10a41939['year'] . ' &nbsp; ' : '';
goto label463;

label640:

$b62d6460eb33ea07->query('SELECT * FROM `series` WHERE `tmdb_id` IN (' . implode(',', $e9e8d0bf28ba88c0) . ') LIMIT 6;');
goto label659;

label650:

$b62d6460eb33ea07->query('SELECT * FROM `streams_series` WHERE `tmdb_id` IN (' . implode(',', $e9e8d0bf28ba88c0) . ') LIMIT 6;');

label659:

goto label225;

label660:

foreach ($D8329ce54de87aa5 as $Fb9da1713bff19ce) {
	goto label722;

	label664:

	echo $Fe97ae9d15f530b6['rating'] ? number_format($Fe97ae9d15f530b6['rating'], 1) : ($d02ef9ae10a41939['rating'] ? number_format($d02ef9ae10a41939['rating'], 1) : 'N/A');
	echo '</span>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        ';
	goto label759;

	label688:

	echo ' - ';
	echo $Fe97ae9d15f530b6['title'];
	echo '</a></h3>' . "\n" . '                                        <span class="card__episode">' . "\n" . '                                            ';
	echo 500 < strlen($Fe97ae9d15f530b6['description']) ? substr($Fe97ae9d15f530b6['description'], 0, 500) . '...' : $Fe97ae9d15f530b6['description'];
	echo '                                        </span>' . "\n" . '                                        <ul class="card__list card__danger" style="display: none;">' . "\n" . '                                            <li>UNAVAILABLE</li>' . "\n" . '                                        </ul>' . "\n" . '                                        <span class="card__rate"><i class="icon ion-ios-star"></i>';
	goto label664;

	label713:

	echo '" data-index="';
	echo $df6991d59f367c7e - 1;
	echo '">' . "\n" . '                                <div class="card card--big">' . "\n" . '                                    <div class="card__cover">' . "\n" . '                                        <img loading="lazy" src="';
	echo $Fe97ae9d15f530b6['image'];
	echo '" alt="">' . "\n" . '                                        <a href="javascript:void(0)" onClick="openPlayer(';
	goto label745;

	label722:

	$df6991d59f367c7e++;
	$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $Fb9da1713bff19ce['movie_properties'] : $Fb9da1713bff19ce['movie_propeties'], true);
	$Fe97ae9d15f530b6 = $Ed866740a38cba1f[$Fb9da1713bff19ce['episode_num']];
	echo '                            <div class="item" id="episode_';
	echo $Fb9da1713bff19ce['id'];
	goto label713;

	label745:

	echo $Fb9da1713bff19ce['id'];
	echo ');" class="card__play">' . "\n" . '                                            <i class="icon ion-ios-play"></i>' . "\n" . '                                        </a>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="card__content">' . "\n" . '                                        <h3 class="card__title"><a href="javascript:void(0);" onClick="openPlayer(';
	echo $Fb9da1713bff19ce['id'];
	echo ');">';
	echo sprintf('%02d', $Fb9da1713bff19ce['episode_num']);
	goto label688;

	label759:
}

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n" . '        ';
goto label797;

label763:

goto label796;

label764:

$B5480d3e75586b54 = [];
$e9e8d0bf28ba88c0 = json_decode($d02ef9ae10a41939['similar'], true);

if (!(0 < count($e9e8d0bf28ba88c0))) {
	goto label887;
}

if (XUI::$rSettings['player_hide_incompatible']) {
	goto label226;
}

if (PLATFORM == 'xui') {
	goto label650;
}

goto label640;

label787:

goto label794;

label788:

$b62d6460eb33ea07->query('SELECT * FROM `streams_episodes` LEFT JOIN `streams` ON `streams`.`id` = `streams_episodes`.`stream_id` WHERE `series_id` = ? AND `season_num` = ? ORDER BY `episode_num` ASC;', $d02ef9ae10a41939['id'], $c48ba51a637216f1);

label794:

goto label429;
goto label423;

label796:

echo '        <div class="container">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n" . '                    <div class="alert alert-danger">' . "\n" . '                        No episodes are available for this series. Please check back later.' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '        ';

label797:

echo "\t" . '</section>' . "\n" . '    ';

if (!(0 < count($B5480d3e75586b54))) {
	goto label160;
}

echo "\t" . '<section class="content">' . "\n\t\t" . '<div class="container" style="margin-top: 30px;">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12 col-lg-12 col-xl-12">' . "\n\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t" . '<h2 class="section__title section__title--sidebar">Users Also Watched</h2>' . "\n\t\t\t\t\t\t" . '</div>' . "\n" . '                        ';
goto label99;

label807:

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</section>' . "\n" . '    <section class="seasons">' . "\n" . '        ';

if (count($D8329ce54de87aa5) == 0) {
	goto label763;
}

echo "\t\t" . '<div class="owl-carousel seasons__bg">' . "\n" . '            ';

foreach ($D8329ce54de87aa5 as $e61e6dcee1252fa2) {
	echo "\t\t\t" . '<div class="item seasons__cover" data-bg="';
	echo $Ed866740a38cba1f[$e61e6dcee1252fa2['episode_num']]['image_cover'];
	echo '"></div>' . "\n" . '            ';
}

goto label848;

label826:

echo implode(', ', array_slice(explode(',', $d02ef9ae10a41939['cast']), 0, 5));
echo '                                        </li>' . "\n\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="card__description card__description--details">' . "\n\t\t\t\t\t\t\t\t\t\t";
echo $d02ef9ae10a41939['plot'];
echo "\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n" . '                        ';

if ($A412a8fc85cbb7e7) {
	goto label207;
}

goto label205;

label848:

echo "\t\t" . '</div>' . "\n\t\t" . '<div class="container">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<h1 class="seasons__title">' . "\n" . '                        <select id="season__select">' . "\n" . '                            ';

foreach ($A29d8a2356bd9140 as $df6991d59f367c7e) {
	echo '                            <option';

	if (!($c48ba51a637216f1 == $df6991d59f367c7e)) {
		goto label858;
	}

	echo ' selected';

	label858:

	echo '>Season ';
	echo $df6991d59f367c7e;
	echo '</option>' . "\n" . '                            ';
}

echo '                        </select>' . "\n" . '                    </h1>' . "\n\t\t\t\t\t" . '<button class="seasons__nav seasons__nav--prev" type="button">' . "\n\t\t\t\t\t\t" . '<i class="icon ion-ios-arrow-round-back"></i>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . '<button class="seasons__nav seasons__nav--next" type="button">' . "\n\t\t\t\t\t\t" . '<i class="icon ion-ios-arrow-round-forward"></i>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<div class="owl-carousel seasons__carousel">' . "\n" . '                        ';
$df6991d59f367c7e = 0;
goto label660;

label866:

goto label209;

label867:

$b41097c951ee83d3 = XUI::getSeriesTMDB($d02ef9ae10a41939['tmdb_id']);

if (!$b41097c951ee83d3) {
	goto label209;
}

file_put_contents(TMP_PATH . 'tmdb_' . $d02ef9ae10a41939['tmdb_id'], XUI::serialize($b41097c951ee83d3));
goto label209;

label887:

$F6edd90960a3bd9d = $d02ef9ae10a41939['title'];
include 'header.php';
echo "\t" . '<section class="section details">' . "\n\t\t" . '<div class="details__bg" data-bg="';
goto label434;

label892:

include 'footer.php';

?>