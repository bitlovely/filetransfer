<?php


goto label594;

label1:

shuffle($d45cedf44809851e);
$d45cedf44809851e = array_slice($d45cedf44809851e, 0, 20);
$B149a33cab1dcf5f = XUI::Ca290dC77E86B74B($E59d0debc75e7be8, ['movie'], NULL, NULL, 'added', NULL, NULL, 0, 20);
goto label360;

label23:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</section>' . "\r\n" . '    ';

label24:

echo "\t" . '<section class="content"';

if (!(count($d45cedf44809851e) == 0)) {
	goto label160;
}

echo ' style="margin-top: 10px;"';
goto label160;

label34:

goto label59;

label35:

$b62d6460eb33ea07->query('SELECT `id`, `title`, `year`, `rating`, `cover`, `backdrop_path` FROM `streams_series` WHERE `id` IN (' . implode(',', $D9474d40e461a104['series']) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104['series']) . ') ASC LIMIT 50;');

label59:

goto label111;
goto label87;

label61:

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `year`, `rating`, `movie_properties` FROM `streams` WHERE `id` IN (' . implode(',', $D9474d40e461a104['movies']) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104['movies']) . ') ASC LIMIT 50;');

label85:

goto label418;

label86:

goto label394;

label87:

$b62d6460eb33ea07->query('SELECT `id`, `title`, `year`, `rating`, `cover`, `backdrop_path` FROM `streams_series` WHERE `id` IN (' . implode(',', $D9474d40e461a104['series']) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ') AND (SELECT MAX(`compatible`) FROM `streams_servers` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams_servers`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) = 1 ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104['series']) . ') ASC LIMIT 50;');

label111:

$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows();

foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
	$af55af2273851465 = json_decode($fe93a43f53d92a4e['backdrop_path'], true);
	$d45cedf44809851e[] = ['type' => 'episodes', 'id' => $fe93a43f53d92a4e['id'], 'title' => $fe93a43f53d92a4e['title'], 'year' => $fe93a43f53d92a4e['year'] ?: (substr($fe93a43f53d92a4e['releaseDate'], 0, 4) ?: NULL), 'rating' => $fe93a43f53d92a4e['rating'], 'cover' => XUI::Fca722697178454B($fe93a43f53d92a4e['cover']) ?: '', 'backdrop' => XUI::Fca722697178454b($af55af2273851465[0]) ?: ''];
}

goto label1;

label160:

echo '>' . "\r\n\t\t" . '<div class="content__head">' . "\r\n\t\t\t" . '<div class="container">' . "\r\n\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t" . '<h1 class="home__title" style="margin-top:30px;">NEWLY <b>ADDED</b></h1>' . "\r\n\t\t\t\t\t\t" . '<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">' . "\r\n\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t" . '<a class="nav-link active" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="true">MOVIES</a>' . "\r\n\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t" . '<a class="nav-link" data-toggle="tab" href="#series" role="tab" aria-controls="series" aria-selected="false">TV SERIES</a>' . "\r\n\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t" . '<div class="content__mobile-tabs" id="content__mobile-tabs">' . "\r\n\t\t\t\t\t\t\t" . '<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\r\n\t\t\t\t\t\t\t\t" . '<input type="button" value="Movies">' . "\r\n\t\t\t\t\t\t\t\t" . '<span></span>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-tabs" role="tablist">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item"><a class="nav-link active" id="movies-tab" data-toggle="tab" href="#movies" role="tab" aria-controls="movies" aria-selected="true">MOVIES</a></li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item"><a class="nav-link" id="series-tab" data-toggle="tab" href="#series" role="tab" aria-controls="series" aria-selected="false">TV SERIES</a></li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<!-- content tabs -->' . "\r\n\t\t\t" . '<div class="tab-content">' . "\r\n\t\t\t\t" . '<div class="tab-pane fade show active" id="movies" role="tabpanel" aria-labelledby="movies-tab">' . "\r\n\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t";

foreach ($B149a33cab1dcf5f['streams'] as $ee6d1fc5d801b43f => $fe93a43f53d92a4e) {
	goto label167;

	label167:

	$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $fe93a43f53d92a4e['movie_properties'] : $fe93a43f53d92a4e['movie_propeties'], true);
	echo '                            <div class="col-6 col-sm-4 col-lg-3 col-xl-3">' . "\r\n" . '                                <div class="card">' . "\r\n" . '                                    <div class="card__cover">' . "\r\n" . '                                        <img loading="lazy" src="resize.php?url=';
	echo urlencode(XUI::FcA722697178454b($Ccbdf03f8a4df633['movie_image']) ?: '');
	echo '&w=267&h=400" alt="">' . "\r\n" . '                                        <a href="movie.php?id=';
	echo $fe93a43f53d92a4e['id'];
	goto label222;

	label196:

	echo $fe93a43f53d92a4e['year'] ? intval($fe93a43f53d92a4e['year']) . ' &nbsp; ' : '';
	echo '<i class="icon ion-ios-star"></i>';
	echo $Ccbdf03f8a4df633['rating'] ? number_format($Ccbdf03f8a4df633['rating'], 1) : 'N/A';
	echo '</span>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                            </div>' . "\r\n" . '                        ';
	goto label234;

	label222:

	echo '" class="card__play">' . "\r\n" . '                                            <i class="icon ion-ios-play"></i>' . "\r\n" . '                                        </a>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <div class="card__content">' . "\r\n" . '                                        <h3 class="card__title"><a href="movie.php?id=';
	echo $fe93a43f53d92a4e['id'];
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);
	echo '</a></h3>' . "\r\n" . '                                        <span class="card__rate">';
	goto label196;

	label234:
}

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '<div class="tab-pane fade" id="series" role="tabpanel" aria-labelledby="series-tab">' . "\r\n\t\t\t\t\t" . '<div class="row">' . "\r\n" . '                        ';
goto label515;

label238:

foreach ($d45cedf44809851e as $B4a603c2a57d3acf) {
	echo "\t\t\t" . '<div class="item home__cover" data-bg="';
	echo $B4a603c2a57d3acf['backdrop'];
	echo '"></div>' . "\r\n" . '            ';
}

echo "\t\t" . '</div>' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t" . '<h1 class="home__title">POPULAR <b>NOW</b></h1>' . "\r\n\t\t\t\t\t" . '<button class="home__nav home__nav--prev" type="button">' . "\r\n\t\t\t\t\t\t" . '<i class="icon ion-ios-arrow-round-back"></i>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . '<button class="home__nav home__nav--next" type="button">' . "\r\n\t\t\t\t\t\t" . '<i class="icon ion-ios-arrow-round-forward"></i>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t" . '<div class="owl-carousel home__carousel">' . "\r\n" . '                        ';

foreach ($d45cedf44809851e as $B4a603c2a57d3acf) {
	goto label251;

	label251:

	echo "\t\t\t\t\t\t" . '<div class="item">' . "\r\n\t\t\t\t\t\t\t" . '<div class="card card--big">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="card__cover">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<img loading="lazy" src="resize.php?url=';
	echo urlencode($B4a603c2a57d3acf['cover']);
	echo '&w=267&h=400" alt="">' . "\r\n" . '                                    <a href="';
	echo $B4a603c2a57d3acf['type'];
	echo '.php?id=';
	goto label298;

	label263:

	echo $B4a603c2a57d3acf['rating'] ? number_format($B4a603c2a57d3acf['rating'], 1) : 'N/A';
	echo '</span>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';
	goto label308;

	label277:

	echo '">';
	echo htmlspecialchars($B4a603c2a57d3acf['title']);
	echo '</a></h3>' . "\r\n" . '                                    <span class="card__rate">';
	echo $B4a603c2a57d3acf['year'] ? intval($B4a603c2a57d3acf['year']) . ' &nbsp; ' : '';
	echo '<i class="icon ion-ios-star"></i>';
	goto label263;

	label298:

	echo $B4a603c2a57d3acf['id'];
	echo '" class="card__play">' . "\r\n" . '                                        <i class="icon ion-ios-play"></i>' . "\r\n" . '                                    </a>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="card__content">' . "\r\n" . '                                    <h3 class="card__title"><a href="';
	echo $B4a603c2a57d3acf['type'];
	echo '.php?id=';
	echo $B4a603c2a57d3acf['id'];
	goto label277;

	label308:
}

goto label23;

label311:
if (!((0 < count($D9474d40e461a104['movies'])) && (0 < count($E59d0debc75e7be8['vod_ids'])))) {
	goto label467;
}

if (XUI::$rSettings['player_hide_incompatible']) {
	goto label86;
}

if (PLATFORM == 'xui') {
	goto label61;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `year`, `rating`, `movie_propeties` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `id` IN (' . implode(',', $D9474d40e461a104['movies']) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104['movies']) . ') ASC LIMIT 50;');
goto label85;
goto label61;

label360:

$d02ef9ae10a41939 = XUI::AD7C990925F39C05($E59d0debc75e7be8, NULL, NULL, 'added', $Eac3da04c89f6001, NULL, 0, 20);
$F6edd90960a3bd9d = 'Home';
include 'header.php';

if (!(0 < count($d45cedf44809851e))) {
	goto label24;
}

echo "\t" . '<section class="home">' . "\r\n" . '        <div class="owl-carousel home__bg">' . "\r\n" . '            ';
goto label238;

label382:

exit();

label383:

$d45cedf44809851e = [];
$D9474d40e461a104 = XUI::unserialize(file_get_contents(CONTENT_PATH . 'tmdb_popular'));
goto label311;

label394:

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `year`, `rating`, `movie_properties` FROM `streams` WHERE `id` IN (' . implode(',', $D9474d40e461a104['movies']) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') AND (SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1 ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104['movies']) . ') ASC LIMIT 50;');

label418:

$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows();

foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
	$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $fe93a43f53d92a4e['movie_properties'] : $fe93a43f53d92a4e['movie_propeties'], true);
	$d45cedf44809851e[] = ['type' => 'movie', 'id' => $fe93a43f53d92a4e['id'], 'title' => $fe93a43f53d92a4e['stream_display_name'], 'year' => $fe93a43f53d92a4e['year'] ?: NULL, 'rating' => $fe93a43f53d92a4e['rating'], 'cover' => XUI::fca722697178454B($Ccbdf03f8a4df633['movie_image']) ?: '', 'backdrop' => XUI::fCA722697178454B($Ccbdf03f8a4df633['backdrop_path'][0]) ?: ''];
}

goto label467;

label467:
if (!((0 < count($D9474d40e461a104['series'])) && (0 < count($E59d0debc75e7be8['series_ids'])))) {
	goto label1;
}

if (XUI::$rSettings['player_hide_incompatible']) {
	goto label87;
}

if (PLATFORM == 'xui') {
	goto label35;
}

$b62d6460eb33ea07->query('SELECT `id`, `title`, `releaseDate`, `rating`, `cover`, `backdrop_path` FROM `series` WHERE `id` IN (' . implode(',', $D9474d40e461a104['series']) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104['series']) . ') ASC LIMIT 50;');
goto label34;

label515:

foreach ($d02ef9ae10a41939['streams'] as $ee6d1fc5d801b43f => $fe93a43f53d92a4e) {
	goto label558;

	label521:

	echo $fe93a43f53d92a4e['id'];
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['title']);
	echo '</a></h3>' . "\r\n" . '                                        <span class="card__rate">';
	echo $fe93a43f53d92a4e['year'] ? intval($fe93a43f53d92a4e['year']) . ' &nbsp; ' : ($fe93a43f53d92a4e['releaseDate'] ? intval(substr($fe93a43f53d92a4e['releaseDate'], 0, 4)) . ' &nbsp; ' : '');
	goto label575;

	label558:

	echo '                            <div class="col-6 col-sm-4 col-lg-3 col-xl-3">' . "\r\n" . '                                <div class="card">' . "\r\n" . '                                    <div class="card__cover">' . "\r\n" . '                                        <img loading="lazy" src="resize.php?url=';
	echo urlencode(XUI::Fca722697178454B($fe93a43f53d92a4e['cover']) ?: '');
	echo '&w=267&h=400" alt="">' . "\r\n" . '                                        <a href="episodes.php?id=';
	echo $fe93a43f53d92a4e['id'];
	echo '" class="card__play">' . "\r\n" . '                                            <i class="icon ion-ios-play"></i>' . "\r\n" . '                                        </a>' . "\r\n" . '                                    </div>' . "\r\n" . '                                    <div class="card__content">' . "\r\n" . '                                        <h3 class="card__title"><a href="episodes.php?id=';
	goto label521;

	label575:

	echo '<i class="icon ion-ios-star"></i>';
	echo $fe93a43f53d92a4e['rating'] ? number_format($fe93a43f53d92a4e['rating'], 0) : 'N/A';
	echo '</span>' . "\r\n" . '                                    </div>' . "\r\n" . '                                </div>' . "\r\n" . '                            </div>' . "\r\n" . '                        ';
	goto label590;

	label590:
}

echo '                    </div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</section>' . "\r\n";
goto label629;

label594:

include 'functions.php';
XUI::verifyLicense();
if (!(isset(XUI::$rRequest['search']) && isset(XUI::$rRequest['type']))) {
	goto label383;
}

if (!in_array(XUI::$rRequest['type'], ['live', 'movies', 'series'])) {
	goto label383;
}

header('Location: ' . XUI::$rRequest['type'] . '.php?search=' . urlencode(XUI::$rRequest['search']));
goto label382;

label629:

require 'footer.php';

?>