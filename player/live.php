<?php


goto label134;

label1:

echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-archive">' . "\n" . '                                    ';

foreach ($Fa372bd670cae8cd as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t" . '<li>';
	echo $ce0840c647e1bbc7;
	echo '</li>' . "\n" . '                                    ';
}

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__sort">' . "\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">SORT:</span>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\n" . '                                    <input type="button" value="';
echo isset($b17035b5fb966195) ? $e00f609d4f0c2c89[$b17035b5fb966195] : 'Date Added';
goto label241;

label19:

$Fa372bd670cae8cd = ['all' => 'All Channels', 'timeshift' => 'Timeshift Only', 'epg' => 'Has EPG Only'];
$c06098d489559fa8 = (isset($Fa372bd670cae8cd[XUI::$rRequest['filter']]) ? XUI::$rRequest['filter'] : 'all');
$C92f406d98c77d35 = ['filter' => $c06098d489559fa8];
$e00f609d4f0c2c89 = ['number' => 'Default', 'name' => 'Name A-Z', 'added' => 'Date Added'];
$b17035b5fb966195 = (isset($e00f609d4f0c2c89[XUI::$rRequest['sort']]) ? XUI::$rRequest['sort'] : 'number');
goto label204;

label44:

echo "\t" . '<div class="catalog details';

if (!$Eac3da04c89f6001) {
	goto label49;
}

echo ' top-margin-med';

label49:

echo '">' . "\n\t\t" . '<div class="container">' . "\n\t\t\t" . '<div class="row">' . "\n" . '                <div class="col-12">' . "\n" . '                    ';
goto label252;

label51:

if (PLATFORM == 'xui') {
	goto label59;
}

$b62d6460eb33ea07->query('SELECT `movie_propeties` AS `movie_properties` FROM `streams` WHERE `movie_propeties` IS NOT NULL AND `type` = 2 ORDER BY RAND() LIMIT 5;');
goto label63;

label59:

goto label60;

label60:

$b62d6460eb33ea07->query('SELECT `movie_properties` FROM `streams` WHERE `movie_properties` IS NOT NULL AND `type` = 2 ORDER BY RAND() LIMIT 5;');

label63:

$da347709f6cb60f4 = '';

foreach ($b62d6460eb33ea07->get_rows() as $fe93a43f53d92a4e) {
	$Ccbdf03f8a4df633 = json_decode($fe93a43f53d92a4e['movie_properties'], true);

	if (empty($Ccbdf03f8a4df633['backdrop_path'][0])) {
		goto label87;
	}

	$da347709f6cb60f4 = XUI::fcA722697178454B($Ccbdf03f8a4df633['backdrop_path'][0]);
	goto label89;

	label87:
}

label89:

goto label198;

label90:

echo strtoupper(htmlspecialchars($Eac3da04c89f6001)) ?: 'LIVE TV';
echo '</h2>' . "\n" . '                        <button onClick="closeChannel();" class="close__btn" type="button" style="display: none;">CLOSE</button>' . "\n\t\t\t\t\t" . '</div>' . "\n" . '                    <span id="now__playing__box" style="display: none;">' . "\n" . '                        <h3 class="card__title" id="now__playing__epg"></h3>' . "\n" . '                        <span class="card__rate" id="now__playing__text"></span>' . "\n" . '                        <div id="now__playing__player"></div>' . "\n" . '                    </span>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</section>' . "\n" . '    ';

if ($Eac3da04c89f6001) {
	goto label251;
}

echo "\t" . '<div class="filter">' . "\n\t\t" . '<div class="container">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<div class="filter__content">' . "\n\t\t\t\t\t\t" . '<div class="filter__items">' . "\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__genre">' . "\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">CATEGORY:</span>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\n\t\t\t\t\t\t\t\t\t" . '<input type="button" value="';
echo !empty($fe63f70cd74f3298) ? XUI::$rCategories[$fe63f70cd74f3298]['category_name'] : $F771d40e8cf51e59[0]['title'];
goto label116;

label116:

echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">' . "\n" . '                                    ';

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t" . '<li>';
	echo $Dbcac322b4274e46['title'];
	echo '</li>' . "\n" . '                                    ';
}

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="filter__item" id="filter__filter">' . "\n\t\t\t\t\t\t\t\t" . '<span class="filter__item-label">FILTER:</span>' . "\n\t\t\t\t\t\t\t\t" . '<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-archive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . "\n" . '                                    <input type="button" value="';
echo isset($c06098d489559fa8) ? $Fa372bd670cae8cd[$c06098d489559fa8] : 'All Channels';
goto label1;

label134:

include 'functions.php';
if (!((PLATFORM == 'xui') && (!in_array(1, $E59d0debc75e7be8['allowed_outputs']) || XUI::$rSettings['disable_hls']))) {
	goto label155;
}

header('Location: index.php');

label155:

$F771d40e8cf51e59 = XUI::D15dCe7a49f71FeA($E59d0debc75e7be8['category_ids'], 'live');
goto label19;

label162:

if (!$Eac3da04c89f6001) {
	goto label51;
}

$b62d6460eb33ea07->query('SELECT DISTINCT(`streams`.`id`) FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `epg_data`.`title` LIKE ? AND `streams`.`id` IN (' . implode(',', $E59d0debc75e7be8['live_ids']) . ') AND (`start` <= UNIX_TIMESTAMP() AND `end` > UNIX_TIMESTAMP()) ORDER BY `epg_data`.`title` ASC;', '%' . $Eac3da04c89f6001 . '%');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if (in_array($Fb9da1713bff19ce['id'], $dec36723d7be7c49)) {
		goto label193;
	}

	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];

	label193:
}

goto label51;

label196:

echo '                </div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n";
goto label262;

label198:

$F6edd90960a3bd9d = 'Live TV';
include 'header.php';
echo "\t" . '<section class="section section--first">' . "\n" . '        <div class="details__bg" data-bg="';
echo $da347709f6cb60f4;
echo '"></div>' . "\n\t\t" . '<div class="container">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<div class="section__wrap">' . "\n\t\t\t\t\t\t" . '<h2 class="section__title" id="now__playing__title">';
goto label90;

label204:

$fe63f70cd74f3298 = intval(XUI::$rRequest['category']) ?: $F771d40e8cf51e59[0]['id'];
$Eac3da04c89f6001 = XUI::$rRequest['search'] ?: NULL;
$dec36723d7be7c49 = [];
$D9846544dffb63c9 = XUI::Ca290dC77e86b74B($E59d0debc75e7be8, ['live', 'created_live'], $fe63f70cd74f3298, NULL, $b17035b5fb966195, $Eac3da04c89f6001, $C92f406d98c77d35, NULL, NULL, true);

foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
	$dec36723d7be7c49[] = $fe93a43f53d92a4e['id'];
}

goto label162;

label241:

echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<span></span>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">' . "\n" . '                                    ';

foreach ($e00f609d4f0c2c89 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t" . '<li>';
	echo $ce0840c647e1bbc7;
	echo '</li>' . "\n" . '                                    ';
}

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n" . '                        <div>' . "\n" . '                            <button class="filter__btn" type="button">filter</button>' . "\n" . '                            <button class="clear__btn" type="button">X</button>' . "\n" . '                        </div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '    ';

label251:

goto label44;

label252:

if (0 < count($dec36723d7be7c49)) {
	goto label260;
}

echo '                    <div class="results_form">' . "\n" . '                        <div class="row">' . "\n" . '                            <div class="col-12">' . "\n" . '                                <h4 class="results__error">No Live Channels or Programmes have been found matching your search terms.</h4>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                    ';
goto label196;

label260:

echo '                    <div class="listings-grid-container">' . "\n" . '                        <a href="#" class="listings-direction-link left day-nav-arrow js-day-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir"></span></a>' . "\n" . '                        <a href="#" class="listings-direction-link right day-nav-arrow js-day-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir"></span></a>' . "\n" . '                        <div class="listings-day-slider-wrapper">' . "\n" . '                            <div class="listings-day-slider js-listings-day-slider">' . "\n" . '                                <div class="js-listings-day-nav-inner"></div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        <div class="js-billboard-fix-point"></div>' . "\n" . '                        <div class="listings-grid-inner">' . "\n" . '                            <div class="time-nav-bar cf js-time-nav-bar">' . "\n" . '                                <div class="listings-mobile-nav">' . "\n" . '                                    <a class="listings-now-btn js-now-btn" href="#">NOW</a>' . "\n" . '                                </div>' . "\n" . '                                <div class="listings-times-wrapper">' . "\n" . '                                    <a href="#" class="listings-direction-link left js-time-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir"></span></a>' . "\n" . '                                    <a href="#" class="listings-direction-link right js-time-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir"></span></a>' . "\n" . '                                    <div class="times-slider js-times-slider"></div>' . "\n" . '                                </div>' . "\n" . '                                <div class="listings-loader js-listings-loader"><span class="isvg isvg-loader animate-spin"></span></div>' . "\n" . '                            </div>' . "\n" . '                            <div class="listings-wrapper cf js-listings-wrapper">' . "\n" . '                                <div class="listings-timeline js-listings-timeline"></div>' . "\n" . '                                <div class="js-listings-container"></div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                    ';
goto label196;

label262:

include 'footer.php';

?>