<?php


goto label128;

label1:

$c532a07032cc6243 = $d02ef9ae10a41939['streams'];
shuffle($c532a07032cc6243);

foreach ($c532a07032cc6243 as $fe93a43f53d92a4e) {
	$af55af2273851465 = json_decode($fe93a43f53d92a4e['backdrop_path'], true);

	if (empty($af55af2273851465[0])) {
		goto label25;
	}

	$da347709f6cb60f4 = XUI::FCA722697178454b($af55af2273851465[0]);
	goto label27;

	label25:
}

label27:
if (!(!$D9474d40e461a104 && !$Eac3da04c89f6001)) {
	goto label294;
}

goto label640;

label35:

$dcd05fe9ef95ab60 = 10.0;

label36:
if (!((0.0 < $f41820ace7a6107e) || ($dcd05fe9ef95ab60 < 10.0))) {
	goto label47;
}

$C92f406d98c77d35['rating_range'] = [$f41820ace7a6107e, $dcd05fe9ef95ab60];

label47:

goto label347;

label48:

$dcd05fe9ef95ab60 = intval(XUI::$rRequest['rating_e']) ?: 10.0;
if (!(($f41820ace7a6107e < 0.0) || (10.0 < $f41820ace7a6107e))) {
	goto label64;
}

$f41820ace7a6107e = 0.0;

label64:
if (!(($dcd05fe9ef95ab60 < 0.0) || (10.0 < $dcd05fe9ef95ab60) || ($dcd05fe9ef95ab60 < $f41820ace7a6107e))) {
	goto label36;
}

goto label35;

label75:
if (!((1900 < $Bb96377dd3ea6d19) || ($Bb1ad3c3aa5b1156 < date('Y')))) {
	goto label89;
}

$C92f406d98c77d35['year_range'] = [$Bb96377dd3ea6d19, $Bb1ad3c3aa5b1156];

label89:

$f41820ace7a6107e = intval(XUI::$rRequest['rating_s']) ?: 0.0;
goto label48;

label98:

$D9474d40e461a104 = XUI::unserialize(file_get_contents(CONTENT_PATH . 'tmdb_popular'))['series'] ?: [];
if ((0 < count($D9474d40e461a104)) && (0 < count($E59d0debc75e7be8['series_ids']))) {
	goto label127;
}

header('Location: series.php');
goto label405;

label127:

goto label669;

label128:

include 'functions.php';
if (isset(XUI::$rRequest['sort']) && (XUI::$rRequest['sort'] == 'popular')) {
	goto label553;
}

$D9474d40e461a104 = false;
$D7209256c56b1469 = intval(XUI::$rRequest['page']) ?: 1;
$Cc2b5dfe75dc164b = 48;
goto label366;

label149:

if (PLATFORM == 'xui') {
	goto label176;
}

$b62d6460eb33ea07->query('SELECT `id`, `title`, `releaseDate`, `rating`, `cover`, `backdrop_path` FROM `series` WHERE `id` IN (' . implode(',', $D9474d40e461a104) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104) . ') ASC LIMIT 6;');
goto label721;

label176:

$b62d6460eb33ea07->query('SELECT `id`, `title`, `year`, `rating`, `cover`, `backdrop_path` FROM `streams_series` WHERE `id` IN (' . implode(',', $D9474d40e461a104) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104) . ') ASC LIMIT 6;');
goto label721;

label199:

foreach ($d02ef9ae10a41939['streams'] as $ee6d1fc5d801b43f => $fe93a43f53d92a4e) {
	goto label242;

	label205:

	echo $fe93a43f53d92a4e['id'];
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['title']);
	echo '</a></h3>' . "\r\n" . '                                <span class="card__rate">';
	echo $fe93a43f53d92a4e['year'] ? intval($fe93a43f53d92a4e['year']) . ' &nbsp; ' : ($fe93a43f53d92a4e['releaseDate'] ? intval(substr($fe93a43f53d92a4e['releaseDate'], 0, 4)) . ' &nbsp; ' : '');
	goto label259;

	label242:

	echo '                    <div class="col-6 col-sm-4 col-lg-3 col-xl-3">' . "\r\n" . '                        <div class="card">' . "\r\n" . '                            <div class="card__cover">' . "\r\n" . '                                <img loading="lazy" src="resize.php?url=';
	echo urlencode(XUI::Fca722697178454b($fe93a43f53d92a4e['cover']) ?: '');
	echo '&w=267&h=400" alt="">' . "\r\n" . '                                <a href="episodes.php?id=';
	echo $fe93a43f53d92a4e['id'];
	echo '" class="card__play">' . "\r\n" . '                                    <i class="icon ion-ios-play"></i>' . "\r\n" . '                                </a>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="card__content">' . "\r\n" . '                                <h3 class="card__title"><a href="episodes.php?id=';
	goto label205;

	label259:

	echo '<i class="icon ion-ios-star"></i>';
	echo $fe93a43f53d92a4e['rating'] ? number_format($fe93a43f53d92a4e['rating'], 0) : 'N/A';
	echo '</span>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                ';
	goto label274;

	label274:
}

if ($D9474d40e461a104) {
	goto label407;
}

echo "\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t" . '<ul class="paginator">' . "\r\n" . '                        ';

if (!(1 < $D7209256c56b1469)) {
	goto label590;
}

goto label586;

label284:

if (!($D7209256c56b1469 < $f61aba7fb6fff24b)) {
	goto label292;
}

echo '<li class="paginator__item paginator__item--next">' . "\r\n" . '                                <a href="series.php?page=' . ($D7209256c56b1469 + 1) . '"><i class="icon ion-ios-arrow-forward"></i></a>' . "\r\n" . '                            </li>';

label292:

echo "\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t" . '</div>' . "\r\n" . '                ';
goto label407;

label294:

$F6edd90960a3bd9d = 'TV Series';
include 'header.php';
echo "\t" . '<section class="section section--first">' . "\r\n" . '        <div class="details__bg" data-bg="';
echo $da347709f6cb60f4;
goto label564;

label299:
if (!(($Bb96377dd3ea6d19 < 1900) || (date('Y') < $Bb96377dd3ea6d19))) {
	goto label310;
}

$Bb96377dd3ea6d19 = 1900;

label310:
if (!(($Bb1ad3c3aa5b1156 < 1900) || (date('Y') < $Bb1ad3c3aa5b1156) || ($Bb1ad3c3aa5b1156 < $Bb96377dd3ea6d19))) {
	goto label75;
}

$Bb1ad3c3aa5b1156 = date('Y');
goto label75;

label328:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</section>' . "\r\n" . '    ';
if (!(!$D9474d40e461a104 && !$Eac3da04c89f6001)) {
	goto label639;
}

echo "\t" . '<div class="filter">' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t" . '<div class="filter__content">' . "\r\n\t\t\t\t\t\t" . '<div class="filter__items">' . "\r\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__genre">' . "\r\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">GENRE:</span>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<input type="button" value="';
echo isset($fe63f70cd74f3298) ? XUI::$rCategories[$fe63f70cd74f3298]['category_name'] : 'All Genres';
goto label437;

label347:

$fe63f70cd74f3298 = intval(XUI::$rRequest['category']) ?: NULL;
$Eac3da04c89f6001 = XUI::$rRequest['search'] ?: NULL;

if (!$Eac3da04c89f6001) {
	goto label539;
}

$D7209256c56b1469 = 1;
$Cc2b5dfe75dc164b = 100;
goto label539;

label366:

$e00f609d4f0c2c89 = ['number' => 'Default', 'added' => 'Last Updated', 'release' => 'Air Date', 'name' => 'Title A-Z', 'top' => 'Rating'];
$b17035b5fb966195 = (isset($e00f609d4f0c2c89[XUI::$rRequest['sort']]) ? XUI::$rRequest['sort'] : 'number');
$C92f406d98c77d35 = [];
$Bb96377dd3ea6d19 = intval(XUI::$rRequest['year_s']) ?: 1900;
$Bb1ad3c3aa5b1156 = intval(XUI::$rRequest['year_e']) ?: date('Y');
goto label299;

label398:

$d02ef9ae10a41939 = ['count' => $b62d6460eb33ea07->num_rows(), 'streams' => $b62d6460eb33ea07->get_rows()];

label405:

$da347709f6cb60f4 = '';
goto label1;

label407:

echo "\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '    ';

if ($D9474d40e461a104) {
	goto label720;
}

$D9474d40e461a104 = XUI::unserialize(file_get_contents(CONTENT_PATH . 'tmdb_popular'))['series'] ?: [];
if (!((0 < count($D9474d40e461a104)) && (0 < count($E59d0debc75e7be8['series_ids'])))) {
	goto label720;
}

goto label149;

label437:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">' . "\r\n" . '                                    ';

foreach (XUI::D15dcE7A49F71fea($E59d0debc75e7be8['category_ids'], 'series') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t" . '<li>';
	echo $Dbcac322b4274e46['title'];
	echo '</li>' . "\r\n" . '                                    ';
}

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__rate">' . "\r\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">RATING:</span>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="filter__range">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div id="filter__rating-start"></div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div id="filter__rating-end"></div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div id="filter__rating"></div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__year">' . "\r\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">YEAR:</span>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="filter__range">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div id="filter__years-start"></div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div id="filter__years-end"></div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div id="filter__years"></div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__sort">' . "\r\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">SORT:</span>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\r\n" . '                                    <input type="button" value="';
echo isset($b17035b5fb966195) ? $e00f609d4f0c2c89[$b17035b5fb966195] : 'Date Added';
goto label629;

label460:

echo '            <section class="section">' . "\r\n" . '                <div class="details__bg" data-bg="';
echo $da347709f6cb60f4;
echo '"></div>' . "\r\n" . '                <div class="container">' . "\r\n" . '                    <div class="row">' . "\r\n" . '                        <div class="col-12">' . "\r\n" . '                            <h1 class="home__title bottom-margin-sml">POPULAR <b>THIS WEEK</b></h1>' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
	goto label467;

	label467:

	echo '                            <div class="col-6 col-sm-4 col-lg-3 col-xl-2">' . "\r\n" . '                                <div class="card__cover">' . "\r\n" . '                                    <img loading="lazy" src="resize.php?url=';
	echo urlencode(XUI::fCA722697178454B($fe93a43f53d92a4e['cover']) ?: '');
	echo '&w=267&h=400" alt="">' . "\r\n" . '                                    <a href="episodes.php?id=';
	echo $fe93a43f53d92a4e['id'];
	echo '" class="card__play">' . "\r\n" . '                                        <i class="icon ion-ios-play"></i>' . "\r\n" . '                                    </a>' . "\r\n" . '                                </div>' . "\r\n" . '                                <div class="card__content">' . "\r\n" . '                                    <h3 class="card__title"><a href="episodes.php?id=';
	goto label499;

	label484:

	echo '<i class="icon ion-ios-star"></i>';
	echo $fe93a43f53d92a4e['rating'] ? number_format($fe93a43f53d92a4e['rating'], 0) : 'N/A';
	echo '</span>' . "\r\n" . '                                </div>' . "\r\n" . '                            </div>' . "\r\n" . '                        ';
	goto label536;

	label499:

	echo $fe93a43f53d92a4e['id'];
	echo '">';
	echo htmlspecialchars($fe93a43f53d92a4e['title']);
	echo '</a></h3>' . "\r\n" . '                                    <span class="card__rate">';
	echo $fe93a43f53d92a4e['year'] ? intval($fe93a43f53d92a4e['year']) . ' &nbsp; ' : ($fe93a43f53d92a4e['releaseDate'] ? intval(substr($fe93a43f53d92a4e['releaseDate'], 0, 4)) . ' &nbsp; ' : '');
	goto label484;

	label536:
}

goto label719;

label539:

$d02ef9ae10a41939 = XUI::ad7c990925f39c05($E59d0debc75e7be8, $fe63f70cd74f3298, NULL, $b17035b5fb966195, $Eac3da04c89f6001, $C92f406d98c77d35, ($D7209256c56b1469 - 1) * $Cc2b5dfe75dc164b, $Cc2b5dfe75dc164b);
goto label405;

label553:

$D9474d40e461a104 = true;
goto label98;

label555:

echo "\t" . '<div class="catalog details';
if (!($D9474d40e461a104 || $Eac3da04c89f6001)) {
	goto label562;
}

echo ' top-margin-med';

label562:

echo '">' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<div class="row">' . "\r\n" . '                ';
goto label199;

label564:

echo '"></div>' . "\r\n\t\t" . '<div class="container">' . "\r\n\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t" . '<div class="section__wrap">' . "\r\n\t\t\t\t\t\t" . '<h2 class="section__title">';
echo $Eac3da04c89f6001 ? strtoupper(htmlspecialchars($Eac3da04c89f6001)) : ($D9474d40e461a104 ? 'POPULAR TV SERIES' : 'TV SERIES');
echo '</h2>' . "\r\n" . '                        ';

if (!$Eac3da04c89f6001) {
	goto label328;
}

echo '                        <button class="clear__btn wide" type="button">CLEAR</button>' . "\r\n" . '                        ';
goto label328;

label586:

echo '<li class="paginator__item paginator__item--prev">' . "\r\n" . '                                <a href="series.php?page=' . ($D7209256c56b1469 - 1) . '"><i class="icon ion-ios-arrow-back"></i></a>' . "\r\n" . '                            </li>';

label590:

if (!(1 < $cff4296633224ff9[0])) {
	goto label612;
}

echo '<li class="paginator__item' . ($D7209256c56b1469 == 1 ? ' paginator__item--active' : '') . '"><a href="series.php?page=1">1</a></li>';

if (!(1 < count($cff4296633224ff9))) {
	goto label612;
}

goto label611;

label611:

echo '<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>';

label612:

foreach ($cff4296633224ff9 as $df6991d59f367c7e) {
	echo '<li class="paginator__item' . ($D7209256c56b1469 == $df6991d59f367c7e ? ' paginator__item--active' : '') . '"><a href="series.php?page=' . $df6991d59f367c7e . '">' . $df6991d59f367c7e . '</a></li>';
}

goto label750;

label629:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">' . "\r\n" . '                                    ';

foreach ($e00f609d4f0c2c89 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t" . '<li>';
	echo $ce0840c647e1bbc7;
	echo '</li>' . "\r\n" . '                                    ';
}

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        <div>' . "\r\n" . '                            <button class="filter__btn" type="button">filter</button>' . "\r\n" . '                            <button class="clear__btn" type="button">X</button>' . "\r\n" . '                        </div>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '    ';

label639:

goto label555;

label640:

$d353a4da8a0bb857 = $d02ef9ae10a41939['count'];
$f61aba7fb6fff24b = ceil($d353a4da8a0bb857 / $Cc2b5dfe75dc164b);
$cff4296633224ff9 = [];

foreach (range($D7209256c56b1469 - 2, $D7209256c56b1469 + 2) as $df6991d59f367c7e) {
	if (!((1 <= $df6991d59f367c7e) && ($df6991d59f367c7e <= $f61aba7fb6fff24b))) {
		goto label666;
	}

	$cff4296633224ff9[] = $df6991d59f367c7e;

	label666:
}

goto label294;

label669:

if (PLATFORM == 'xui') {
	goto label696;
}

$b62d6460eb33ea07->query('SELECT `id`, `title`, `releaseDate`, `rating`, `cover`, `backdrop_path` FROM `series` WHERE `id` IN (' . implode(',', $D9474d40e461a104) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104) . ') ASC LIMIT 100;');
goto label398;

label696:

$b62d6460eb33ea07->query('SELECT `id`, `title`, `year`, `rating`, `cover`, `backdrop_path` FROM `streams_series` WHERE `id` IN (' . implode(',', $D9474d40e461a104) . ') AND `id` IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ORDER BY FIELD(id, ' . implode(',', $D9474d40e461a104) . ') ASC LIMIT 100;');
goto label398;

label719:

echo '                        <div class="col-12">' . "\r\n" . '                            <a href="series.php?sort=popular" class="section__btn">Show more</a>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                </div>' . "\r\n" . '            </section>' . "\r\n" . '        ';

label720:

goto label780;

label721:

$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows();
$c532a07032cc6243 = $D9846544dffb63c9;
shuffle($c532a07032cc6243);

foreach ($c532a07032cc6243 as $fe93a43f53d92a4e) {
	$af55af2273851465 = json_decode($fe93a43f53d92a4e['backdrop_path'], true);

	if (empty($af55af2273851465[0])) {
		goto label747;
	}

	$da347709f6cb60f4 = XUI::fCa722697178454B($af55af2273851465[0]);
	goto label460;

	label747:
}

goto label460;

label750:

if (!($cff4296633224ff9[count($cff4296633224ff9) - 1] < $f61aba7fb6fff24b)) {
	goto label284;
}

if (!(1 < count($cff4296633224ff9))) {
	goto label767;
}

echo '<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>';

label767:

echo '<li class="paginator__item' . ($D7209256c56b1469 == $f61aba7fb6fff24b ? ' paginator__item--active' : '') . '"><a href="series.php?page=' . $f61aba7fb6fff24b . '">' . $f61aba7fb6fff24b . '</a></li>';
goto label284;

label780:

include 'footer.php';

?>