<?php


goto label444;

label1:

if (!($cff4296633224ff9[count($cff4296633224ff9) - 1] < $f61aba7fb6fff24b)) {
	goto label251;
}

if (!(1 < count($cff4296633224ff9))) {
	goto label18;
}

echo '<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>';

label18:

echo '<li class="paginator__item' . ($Df6ec63986c742df == $f61aba7fb6fff24b ? ' paginator__item--active' : '') . '"><a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=' . $f61aba7fb6fff24b . '">' . $f61aba7fb6fff24b . '</a></li>';
goto label251;

label79:

echo "\t\t\t\t" . '<div class="listings-grid-container">' . "\n\t\t\t\t\t" . '<a href="#" class="listings-direction-link left day-nav-arrow js-day-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir"></span></a>' . "\n\t\t\t\t\t" . '<a href="#" class="listings-direction-link right day-nav-arrow js-day-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir"></span></a>' . "\n\t\t\t\t\t" . '<div class="listings-day-slider-wrapper">' . "\n\t\t\t\t\t\t" . '<div class="listings-day-slider js-listings-day-slider">' . "\n\t\t\t\t\t\t\t" . '<div class="js-listings-day-nav-inner"></div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<div class="js-billboard-fix-point"></div>' . "\n\t\t\t\t\t" . '<div class="listings-grid-inner">' . "\n\t\t\t\t\t\t" . '<div class="time-nav-bar cf js-time-nav-bar">' . "\n\t\t\t\t\t\t\t" . '<div class="listings-mobile-nav">' . "\n\t\t\t\t\t\t\t\t" . '<a class="listings-now-btn js-now-btn" href="#">NOW</a>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="listings-times-wrapper">' . "\n\t\t\t\t\t\t\t\t" . '<a href="#" class="listings-direction-link left js-time-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir text-white"></span></a>' . "\n\t\t\t\t\t\t\t\t" . '<a href="#" class="listings-direction-link right js-time-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir text-white"></span></a>' . "\n\t\t\t\t\t\t\t\t" . '<div class="times-slider js-times-slider"></div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="listings-loader js-listings-loader"><span class="isvg isvg-loader animate-spin"></span></div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '<div class="listings-wrapper cf js-listings-wrapper">' . "\n\t\t\t\t\t\t\t" . '<div class="listings-timeline js-listings-timeline"></div>' . "\n\t\t\t\t\t\t\t" . '<div class="js-listings-container"></div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t";

if (!(1 < $f61aba7fb6fff24b)) {
	goto label508;
}

echo "\t\t\t\t\t" . '<ul class="paginator">' . "\n\t\t\t\t\t\t";

if (!(1 < $Df6ec63986c742df)) {
	goto label578;
}

goto label526;

label90:

if (!$Ebb0b63f7c597ba4) {
	goto label96;
}

header('Location: dashboard');

label96:

$Df6ec63986c742df = (0 < intval(XUI::$rRequest['page']) ? intval(XUI::$rRequest['page']) : 1);
$Cc2b5dfe75dc164b = (0 < intval(XUI::$rRequest['entries']) ? intval(XUI::$rRequest['entries']) : XUI::$rSettings['default_entries']);
goto label309;

label131:

$f61aba7fb6fff24b = ceil($d353a4da8a0bb857 / $Cc2b5dfe75dc164b);
$cff4296633224ff9 = [];

foreach (range($Df6ec63986c742df - 2, $Df6ec63986c742df + 2) as $df6991d59f367c7e) {
	if (!((1 <= $df6991d59f367c7e) && ($df6991d59f367c7e <= $f61aba7fb6fff24b))) {
		goto label155;
	}

	$cff4296633224ff9[] = $df6991d59f367c7e;

	label155:
}

$F6edd90960a3bd9d = 'TV Guide';
goto label409;

label159:

$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];
$b62d6460eb33ea07->query('SELECT `id` FROM `streams` ' . $F5190fed237fabec . ' ORDER BY ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';', ...$B03cfeca75020c69);
goto label381;

label177:

$b62d6460eb33ea07->query('SELECT DISTINCT(`streams`.`id`) AS `id` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` ' . $F5190fed237fabec . ';', ...$B03cfeca75020c69);
goto label365;

label185:

echo '<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>';

label186:

foreach ($cff4296633224ff9 as $df6991d59f367c7e) {
	echo '<li class="paginator__item' . ($Df6ec63986c742df == $df6991d59f367c7e ? ' paginator__item--active' : '') . '"><a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=' . $df6991d59f367c7e . '">' . $df6991d59f367c7e . '</a></li>';
}

goto label1;

label251:

if (!($Df6ec63986c742df < $f61aba7fb6fff24b)) {
	goto label307;
}

echo '<li class="paginator__item paginator__item--next">' . "\n\t\t\t\t\t\t\t\t" . '<a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=' . ($Df6ec63986c742df + 1) . '"><i class="mdi mdi-chevron-right"></i></a>' . "\n\t\t\t\t\t\t\t" . '</li>';

label307:

echo "\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t";
goto label508;

label309:

$bcfd61adc96d4b72 = ($Df6ec63986c742df - 1) * $Cc2b5dfe75dc164b;
$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`streams`.`type` = 1 AND `streams`.`epg_id` IS NOT NULL AND `streams`.`channel_id` IS NOT NULL';
if (!(isset(XUI::$rRequest['category']) && (0 < intval(XUI::$rRequest['category'])))) {
	goto label431;
}

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
goto label427;

label332:
if (!empty(XUI::$rRequest['sort']) && isset($a2a53f18f4f95c8b[XUI::$rRequest['sort']])) {
	goto label722;
}

$e99a4642ffdbd364 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'channel_order'));
if ((XUI::$rSettings['channel_number_type'] != 'manual') && (0 < count($e99a4642ffdbd364))) {
	goto label714;
}

$e4829bf95c7424f6 = '`order` ASC';
goto label721;
goto label714;

label365:

$d353a4da8a0bb857 = $b62d6460eb33ea07->num_rows();
$b62d6460eb33ea07->query('SELECT DISTINCT(`streams`.`id`) AS `id` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` ' . $F5190fed237fabec . ' ORDER BY ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';', ...$B03cfeca75020c69);

label381:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

goto label131;

label391:

$e4829bf95c7424f6 = $a2a53f18f4f95c8b[XUI::$rRequest['sort']];

label395:

$dec36723d7be7c49 = [];

if (!empty(XUI::$rRequest['search'])) {
	goto label177;
}

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `streams` ' . $F5190fed237fabec . ';', ...$B03cfeca75020c69);
goto label159;

label409:

include 'header.php';
echo '<div class="wrapper "';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label426;
}

echo ' style="display: none;"';

label426:

goto label511;

label427:

$B03cfeca75020c69[] = XUI::$rRequest['category'];

label431:

if (empty(XUI::$rRequest['search'])) {
	goto label657;
}

$cf0aab70014807af[] = '(`epg_data`.`title` LIKE ? AND ((`epg_data`.`start` <= UNIX_TIMESTAMP() AND `epg_data`.`end` > UNIX_TIMESTAMP()) OR (`epg_data`.`start` > UNIX_TIMESTAMP() AND `epg_data`.`start` <= UNIX_TIMESTAMP() + 7200))) OR `streams`.`stream_display_name` LIKE ? OR `streams`.`id` LIKE ?';
$B03cfeca75020c69[] = '%' . XUI::$rRequest['search'] . '%';
goto label647;

label444:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label452;
}

e72f42A93714BA87();

label452:

goto label90;

label453:

echo '>';
echo $_['all_categories'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";

foreach (F769e3f0C739d1a6('live') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label482;
	}

	echo ' selected';

	label482:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

goto label672;

label489:

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="btn-group col-md-2">' . "\n\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-info">Search</button>' . "\n\t\t\t\t\t\t\t\t\t" . '<button type="button" onClick="clearForm()" class="btn btn-warning"><i class="mdi mdi-filter-remove"></i></button>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</form>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t";

if (0 < count($dec36723d7be7c49)) {
	goto label79;
}

echo "\t\t\t\t" . '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">×</span>' . "\n" . '                    </button>' . "\n" . '                    No Live Streams or Programmes have been found matching your search terms.' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";
goto label509;
goto label79;

label499:

goto label506;

label500:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label506:

$a2a53f18f4f95c8b = ['name' => '`stream_display_name` ASC', 'added' => '`added` DESC'];
goto label332;

label508:

echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label509:

echo "\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n";
goto label723;

label511:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">TV Guide</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '<form method="GET" action="epg_view">' . "\n\t\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t" . '<div id="collapse_filters" class="form-group row" style="margin-bottom: 0;">' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="search" name="search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label665;
}

echo htmlspecialchars(XUI::$rRequest['search']);
goto label665;

label526:

echo '<li class="paginator__item paginator__item--prev">' . "\n\t\t\t\t\t\t\t\t" . '<a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=' . ($Df6ec63986c742df - 1) . '"><i class="mdi mdi-chevron-left"></i></a>' . "\n\t\t\t\t\t\t\t" . '</li>';

label578:

if (!(1 < $cff4296633224ff9[0])) {
	goto label186;
}

echo '<li class="paginator__item' . ($Df6ec63986c742df == 1 ? ' paginator__item--active' : '') . '"><a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=1">1</a></li>';

if (!(1 < count($cff4296633224ff9))) {
	goto label186;
}

goto label185;

label647:

$B03cfeca75020c69[] = '%' . XUI::$rRequest['search'] . '%';
$B03cfeca75020c69[] = XUI::$rRequest['search'];

label657:

if (0 < count($cf0aab70014807af)) {
	goto label500;
}

$F5190fed237fabec = '';
goto label499;

label665:

echo '" placeholder="Search Streams and Programmes...">' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="category" name="category" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<option value=""';

if (isset(XUI::$rRequest['category'])) {
	goto label671;
}

echo ' selected';

label671:

goto label453;

label672:

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="sort" name="sort" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t";

foreach (['' => 'Default Sort', 'name' => 'Alphabetical', 'added' => 'Date Added'] as $C3552efd343ac0d5 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $C3552efd343ac0d5;
	echo '"';
	if (!(isset(XUI::$rRequest['sort']) && (XUI::$rRequest['sort'] == $C3552efd343ac0d5))) {
		goto label691;
	}

	echo ' selected';

	label691:

	echo '>';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="user_show_entries">Show</label>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="entries" name="entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($Cc2b5dfe75dc164b == $C17543903e9aa6ae)) {
		goto label706;
	}

	echo ' selected';

	label706:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

goto label489;

label714:

$e4829bf95c7424f6 = 'FIELD(`streams`.`id`,' . implode(',', $e99a4642ffdbd364) . ')';

label721:

goto label395;

label722:

goto label391;

label723:

include 'footer.php';

?>