<?php


goto label258;

label1:

echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">' . "\n" . '                                    ';

foreach ($e00f609d4f0c2c89 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t" . '<li>';
	echo $ce0840c647e1bbc7;
	echo '</li>' . "\n" . '                                    ';
}

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n" . '                        <div>' . "\n" . '                            <button class="filter__btn" type="button">filter</button>' . "\n" . '                            <button class="clear__btn" type="button">X</button>' . "\n" . '                        </div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '    ';

label11:

goto label367;

label12:

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</section>' . "\n" . '    ';
if (!(!$D9474d40e461a104 && !$Eac3da04c89f6001)) {
	goto label11;
}

echo "\t" . '<div class="filter">' . "\n\t\t" . '<div class="container">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<div class="filter__content">' . "\n\t\t\t\t\t\t" . '<div class="filter__items">' . "\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__genre">' . "\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">GENRE:</span>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\n\t\t\t\t\t\t\t\t\t" . '<input type="button" value="';
echo isset($fe63f70cd74f3298) ? XUI::$rCategories[$fe63f70cd74f3298]['category_name'] : 'All Genres';
goto label594;

label31:

echo "\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '    ';

if ($D9474d40e461a104) {
	goto label617;
}

$D9474d40e461a104 = XUI::unserialize(file_get_contents(CONTENT_PATH . 'tmdb_popular'))['movies'] ?: [];
if (!((0 < count($D9474d40e461a104)) && (0 < count($E59d0debc75e7be8['vod_ids'])))) {
	goto label617;
}

goto label690;

label61:

$dcd05fe9ef95ab60 = floatval(XUI::$rRequest['rating_e']) ?: 10.0;
if (!(($f41820ace7a6107e < 0.0) || (10.0 < $f41820ace7a6107e))) {
	goto label77;
}

$f41820ace7a6107e = 0.0;

label77:
if (!(($dcd05fe9ef95ab60 < 0.0) || (10.0 < $dcd05fe9ef95ab60) || ($dcd05fe9ef95ab60 < $f41820ace7a6107e))) {
	goto label424;
}

goto label423;

label88:

$D9846544dffb63c9 = XUI::Ca290dc77E86b74b($E59d0debc75e7be8, ['movie'], $fe63f70cd74f3298, NULL, $b17035b5fb966195, $Eac3da04c89f6001, $C92f406d98c77d35, ($D7209256c56b1469 - 1) * $Cc2b5dfe75dc164b, $Cc2b5dfe75dc164b);
goto label468;

label103:

$D9474d40e461a104 = true;
goto label327;

label105:

$c532a07032cc6243 = $D9846544dffb63c9['streams'];
shuffle($c532a07032cc6243);

foreach ($c532a07032cc6243 as $fe93a43f53d92a4e) {
	$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $fe93a43f53d92a4e['movie_properties'] : $fe93a43f53d92a4e['movie_propeties'], true);

	if (empty($Ccbdf03f8a4df633['backdrop_path'][0])) {
		goto label138;
	}

	$da347709f6cb60f4 = XUI::fca722697178454B($Ccbdf03f8a4df633['backdrop_path'][0]);
	goto label140;

	label138:
}

label140:
if (!(!$D9474d40e461a104 && !$Eac3da04c89f6001)) {
	goto label772;
}

goto label298;

label148:

if (!($cff4296633224ff9[count($cff4296633224ff9) - 1] < $f61aba7fb6fff24b)) {
	goto label357;
}

if (!(1 < count($cff4296633224ff9))) {
	goto label165;
}

echo '<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>';

label165:

echo '<li class="paginator__item' . ($D7209256c56b1469 == $f61aba7fb6fff24b ? ' paginator__item--active' : '') . '"><a href="movies.php?page=' . $f61aba7fb6fff24b . '">' . $f61aba7fb6fff24b . '</a></li>';
goto label357;

label178:

echo '            <section class="section">' . "\n" . '                <div class="details__bg" data-bg="';
echo $da347709f6cb60f4;
echo '"></div>' . "\n" . '                <div class="container">' . "\n" . '                    <div class="row">' . "\n" . '                        <div class="col-12">' . "\n" . '                            <h1 class="home__title bottom-margin-sml">POPULAR <b>THIS WEEK</b></h1>' . "\n" . '                        </div>' . "\n" . '                        ';

foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
	goto label226;

	label185:

	echo $fe93a43f53d92a4e['year'] ? intval($fe93a43f53d92a4e['year']) . ' &nbsp; ' : '';
	echo '<i class="icon ion-ios-star"></i>';
	echo $Ccbdf03f8a4df633['rating'] ? number_format($Ccbdf03f8a4df633['rating'], 1) : 'N/A';
	echo '</span>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        ';
	goto label255;

	label211:

	echo '" class="card__play">' . "\n" . '                                            <i class="icon ion-ios-play"></i>' . "\n" . '                                        </a>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="card__content">' . "\n" . '                                        <h3 class="card__title"><a href="movie.php?id=';
	echo $fe93a43f53d92a4e['id'];
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['title'] ?: $fe93a43f53d92a4e['stream_display_name']);
	echo '</a></h3>' . "\n" . '                                        <span class="card__rate">';
	goto label185;

	label226:

	$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $fe93a43f53d92a4e['movie_properties'] : $fe93a43f53d92a4e['movie_propeties'], true);
	echo '                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">' . "\n" . '                                <div class="card">' . "\n" . '                                    <div class="card__cover">' . "\n" . '                                        <img loading="lazy" src="resize.php?url=';
	echo urlencode(XUI::fCa722697178454B($Ccbdf03f8a4df633['movie_image']) ?: '');
	echo '&w=267&h=400" alt="">' . "\n" . '                                        <a href="movie.php?id=';
	echo $fe93a43f53d92a4e['id'];
	goto label211;

	label255:
}

goto label616;

label258:

include 'functions.php';
if (isset(XUI::$rRequest['sort']) && (XUI::$rRequest['sort'] == 'popular')) {
	goto label103;
}

$D9474d40e461a104 = false;
$D7209256c56b1469 = intval(XUI::$rRequest['page']) ?: 1;
$Cc2b5dfe75dc164b = 48;
goto label740;

label279:

$fe63f70cd74f3298 = intval(XUI::$rRequest['category']) ?: NULL;
$Eac3da04c89f6001 = XUI::$rRequest['search'] ?: NULL;

if (!$Eac3da04c89f6001) {
	goto label88;
}

$D7209256c56b1469 = 1;
$Cc2b5dfe75dc164b = 100;
goto label88;

label298:

$d353a4da8a0bb857 = $D9846544dffb63c9['count'];
$f61aba7fb6fff24b = ceil($d353a4da8a0bb857 / $Cc2b5dfe75dc164b);
$cff4296633224ff9 = [];

foreach (range($D7209256c56b1469 - 2, $D7209256c56b1469 + 2) as $df6991d59f367c7e) {
	if (!((1 <= $df6991d59f367c7e) && ($df6991d59f367c7e <= $f61aba7fb6fff24b))) {
		goto label324;
	}

	$cff4296633224ff9[] = $df6991d59f367c7e;

	label324:
}

goto label772;

label327:

$D9474d40e461a104 = XUI::unserialize(file_get_contents(CONTENT_PATH . 'tmdb_popular'))['movies'] ?: [];
if ((0 < count($D9474d40e461a104)) && (0 < count($E59d0debc75e7be8['vod_ids']))) {
	goto label356;
}

header('Location: movies.php');
goto label468;

label356:

goto label618;

label357:

if (!($D7209256c56b1469 < $f61aba7fb6fff24b)) {
	goto label365;
}

echo '<li class="paginator__item paginator__item--next">' . "\n" . '                                <a href="movies.php?page=' . ($D7209256c56b1469 + 1) . '"><i class="icon ion-ios-arrow-forward"></i></a>' . "\n" . '                            </li>';

label365:

echo "\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t" . '</div>' . "\n" . '                ';
goto label31;

label367:

echo "\t" . '<div class="catalog details';
if (!($D9474d40e461a104 || $Eac3da04c89f6001)) {
	goto label374;
}

echo ' top-margin-med';

label374:

echo '">' . "\n\t\t" . '<div class="container">' . "\n\t\t\t" . '<div class="row">' . "\n" . '                ';
goto label470;

label376:

echo '<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>';

label377:

foreach ($cff4296633224ff9 as $df6991d59f367c7e) {
	echo '<li class="paginator__item' . ($D7209256c56b1469 == $df6991d59f367c7e ? ' paginator__item--active' : '') . '"><a href="movies.php?page=' . $df6991d59f367c7e . '">' . $df6991d59f367c7e . '</a></li>';
}

goto label148;

label394:
if (!(($Bb96377dd3ea6d19 < 1900) || (date('Y') < $Bb96377dd3ea6d19))) {
	goto label405;
}

$Bb96377dd3ea6d19 = 1900;

label405:
if (!(($Bb1ad3c3aa5b1156 < 1900) || (date('Y') < $Bb1ad3c3aa5b1156) || ($Bb1ad3c3aa5b1156 < $Bb96377dd3ea6d19))) {
	goto label777;
}

$Bb1ad3c3aa5b1156 = date('Y');
goto label777;

label423:

$dcd05fe9ef95ab60 = 10.0;

label424:
if (!((0.0 < $f41820ace7a6107e) || ($dcd05fe9ef95ab60 < 10.0))) {
	goto label435;
}

$C92f406d98c77d35['rating_range'] = [$f41820ace7a6107e, $dcd05fe9ef95ab60];

label435:

goto label279;

label436:

echo '<li class="paginator__item paginator__item--prev">' . "\n" . '                                <a href="movies.php?page=' . ($D7209256c56b1469 - 1) . '"><i class="icon ion-ios-arrow-back"></i></a>' . "\n" . '                            </li>';

label440:

if (!(1 < $cff4296633224ff9[0])) {
	goto label377;
}

echo '<li class="paginator__item' . ($D7209256c56b1469 == 1 ? ' paginator__item--active' : '') . '"><a href="movies.php?page=1">1</a></li>';

if (!(1 < count($cff4296633224ff9))) {
	goto label377;
}

goto label376;

label461:

$D9846544dffb63c9 = ['count' => $b62d6460eb33ea07->num_rows(), 'streams' => $b62d6460eb33ea07->get_rows()];

label468:

$da347709f6cb60f4 = '';
goto label105;

label470:

foreach ($D9846544dffb63c9['streams'] as $ee6d1fc5d801b43f => $fe93a43f53d92a4e) {
	goto label476;

	label476:

	$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $fe93a43f53d92a4e['movie_properties'] : $fe93a43f53d92a4e['movie_propeties'], true);
	echo '                    <div class="col-6 col-sm-4 col-lg-3 col-xl-3">' . "\n" . '                        <div class="card">' . "\n" . '                            <div class="card__cover">' . "\n" . '                                <img loading="lazy" src="resize.php?url=';
	echo urlencode(XUI::FCa722697178454B($Ccbdf03f8a4df633['movie_image']) ?: '');
	echo '&w=267&h=400" alt="">' . "\n" . '                                <a href="movie.php?id=';
	echo $fe93a43f53d92a4e['id'];
	goto label505;

	label505:

	echo '" class="card__play">' . "\n" . '                                    <i class="icon ion-ios-play"></i>' . "\n" . '                                </a>' . "\n" . '                            </div>' . "\n" . '                            <div class="card__content">' . "\n" . '                                <h3 class="card__title"><a href="movie.php?id=';
	echo $fe93a43f53d92a4e['id'];
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['title'] ?: $fe93a43f53d92a4e['stream_display_name']);
	echo '</a></h3>' . "\n" . '                                <span class="card__rate">';
	goto label520;

	label520:

	echo $fe93a43f53d92a4e['year'] ? intval($fe93a43f53d92a4e['year']) . ' &nbsp; ' : '';
	echo '<i class="icon ion-ios-star"></i>';
	echo $Ccbdf03f8a4df633['rating'] ? number_format($Ccbdf03f8a4df633['rating'], 1) : 'N/A';
	echo '</span>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                ';
	goto label546;

	label546:
}

if ($D9474d40e461a104) {
	goto label31;
}

echo "\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<ul class="paginator">' . "\n" . '                        ';

if (!(1 < $D7209256c56b1469)) {
	goto label440;
}

goto label436;

label556:

$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows();
$c532a07032cc6243 = $D9846544dffb63c9;
shuffle($c532a07032cc6243);

foreach ($c532a07032cc6243 as $fe93a43f53d92a4e) {
	$Ccbdf03f8a4df633 = json_decode(PLATFORM == 'xui' ? $fe93a43f53d92a4e['movie_properties'] : $fe93a43f53d92a4e['movie_propeties'], true);

	if (empty($Ccbdf03f8a4df633['backdrop_path'][0])) {
		goto label591;
	}

	$da347709f6cb60f4 = XUI::fcA722697178454b($Ccbdf03f8a4df633['backdrop_path'][0]);
	goto label178;

	label591:
}

goto label178;

label594:

echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">' . "\n" . '                                    ';

foreach (XUI::D15DCE7a49F71fEa($E59d0debc75e7be8['category_ids']) as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t" . '<li>';
	echo $Dbcac322b4274e46['title'];
	echo '</li>' . "\n" . '                                    ';
}

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__rate">' . "\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">RATING:</span>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="filter__range">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div id="filter__rating-start"></div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div id="filter__rating-end"></div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">' . "\n\t\t\t\t\t\t\t\t\t" . '<div id="filter__rating"></div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__year">' . "\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">YEAR:</span>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="filter__range">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div id="filter__years-start"></div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div id="filter__years-end"></div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">' . "\n\t\t\t\t\t\t\t\t\t" . '<div id="filter__years"></div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__sort">' . "\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">SORT:</span>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\n" . '                                    <input type="button" value="';
echo isset($b17035b5fb966195) ? $e00f609d4f0c2c89[$b17035b5fb966195] : 'Date Added';
goto label1;

label616:

echo '                        <div class="col-12">' . "\n" . '                            <a href="movies.php?sort=popular" class="section__btn">Show more</a>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </section>' . "\n" . '        ';

label617:

goto label800;

label618:

if (PLATFORM == 'xui') {
	goto label645;
}

$b62d6460eb33ea07->query('SELECT `id`, `title`, `stream_display_name`, `year`, `rating`, `movie_propeties` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `id` IN (' . implode(',', $D9474d40e461a104) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104) . ') ASC LIMIT 100;');
goto label461;

label645:

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `year`, `rating`, `movie_properties` FROM `streams` WHERE `id` IN (' . implode(',', $D9474d40e461a104) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104) . ') ASC LIMIT 100;');
goto label461;

label668:

echo '"></div>' . "\n\t\t" . '<div class="container">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<div class="section__wrap">' . "\n" . '                        <h2 class="section__title">';
echo $Eac3da04c89f6001 ? strtoupper(htmlspecialchars($Eac3da04c89f6001)) : ($D9474d40e461a104 ? 'POPULAR MOVIES' : 'MOVIES');
echo '</h2>' . "\n" . '                        ';

if (!$Eac3da04c89f6001) {
	goto label12;
}

echo '                        <button class="clear__btn wide" type="button">CLEAR</button>' . "\n" . '                        ';
goto label12;

label690:

if (PLATFORM == 'xui') {
	goto label717;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `title`, `year`, `rating`, `movie_propeties` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `id` IN (' . implode(',', $D9474d40e461a104) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104) . ') ASC LIMIT 6;');
goto label556;

label717:

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name`, `year`, `rating`, `movie_properties` FROM `streams` WHERE `id` IN (' . implode(',', $D9474d40e461a104) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['vod_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104) . ') ASC LIMIT 6;');
goto label556;

label740:

$e00f609d4f0c2c89 = ['number' => 'Default', 'added' => 'Date Added', 'release' => 'Release Date', 'name' => 'Title A-Z', 'top' => 'Rating'];
$b17035b5fb966195 = (isset($e00f609d4f0c2c89[XUI::$rRequest['sort']]) ? XUI::$rRequest['sort'] : 'number');
$C92f406d98c77d35 = [];
$Bb96377dd3ea6d19 = intval(XUI::$rRequest['year_s']) ?: 1900;
$Bb1ad3c3aa5b1156 = intval(XUI::$rRequest['year_e']) ?: date('Y');
goto label394;

label772:

$F6edd90960a3bd9d = 'Movies';
include 'header.php';
echo "\t" . '<section class="section section--first">' . "\n" . '        <div class="details__bg" data-bg="';
echo $da347709f6cb60f4;
goto label668;

label777:
if (!((1900 < $Bb96377dd3ea6d19) || ($Bb1ad3c3aa5b1156 < date('Y')))) {
	goto label791;
}

$C92f406d98c77d35['year_range'] = [$Bb96377dd3ea6d19, $Bb1ad3c3aa5b1156];

label791:

$f41820ace7a6107e = floatval(XUI::$rRequest['rating_s']) ?: 0.0;
goto label61;

label800:

include 'footer.php';

?>