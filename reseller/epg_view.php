<?php


goto label153;

label1:

$e4829bf95c7424f6 = $a2a53f18f4f95c8b[XUI::$rRequest['sort']];

label5:

$dec36723d7be7c49 = [];

if (!empty(XUI::$rRequest['search'])) {
	goto label567;
}

goto label542;

label12:

echo "\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t";

label13:

echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label14:

goto label207;

label15:

$F6edd90960a3bd9d = 'TV Guide';
include 'header.php';
echo '<div class="wrapper "';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label176;
}

goto label175;

label33:

$bcfd61adc96d4b72 = ($Df6ec63986c742df - 1) * $Cc2b5dfe75dc164b;

if (0 < count($db0a61ef32b89a27['stream_ids'])) {
	goto label717;
}

$dec36723d7be7c49 = [];
$d353a4da8a0bb857 = 0;
goto label180;
goto label717;

label47:

$a2a53f18f4f95c8b = ['name' => '`stream_display_name` ASC', 'added' => '`added` DESC'];
if (!empty(XUI::$rRequest['sort']) && isset($a2a53f18f4f95c8b[XUI::$rRequest['sort']])) {
	goto label1;
}

$e99a4642ffdbd364 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'channel_order'));
if ((XUI::$rSettings['channel_number_type'] != 'manual') && (0 < count($e99a4642ffdbd364))) {
	goto label502;
}

$e4829bf95c7424f6 = '`order` ASC';
goto label501;

label80:

if (!isset(XUI::$rRequest['search'])) {
	goto label91;
}

echo htmlspecialchars(XUI::$rRequest['search']);

label91:

echo '" placeholder="Search Streams and Programmes...">' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="category" name="category" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<option value=""';

if (isset(XUI::$rRequest['category'])) {
	goto label512;
}

goto label511;

label97:

foreach (F769e3F0C739D1a6('live') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label122;
	}

	echo ' selected';

	label122:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="user_show_entries">Sort</label>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="sort" name="sort" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t";

foreach (['' => 'Default', 'name' => 'A to Z', 'added' => 'Date Added'] as $C3552efd343ac0d5 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $C3552efd343ac0d5;
	echo '"';
	if (!(isset(XUI::$rRequest['sort']) && (XUI::$rRequest['sort'] == $C3552efd343ac0d5))) {
		goto label147;
	}

	echo ' selected';

	label147:

	echo '>';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

goto label517;

label153:

include 'session.php';
include 'functions.php';

if (BAf6E9EF7775B5a9()) {
	goto label161;
}

e72F42a93714ba87();

label161:

goto label217;

label162:

$cf0aab70014807af[] = 'JSON_CONTAINS(`streams`.`category_id`, ?, \'$\')';
$B03cfeca75020c69[] = XUI::$rRequest['category'];

label168:

if (empty(XUI::$rRequest['search'])) {
	goto label710;
}

$cf0aab70014807af[] = '(`epg_data`.`title` LIKE ? AND ((`epg_data`.`start` <= UNIX_TIMESTAMP() AND `epg_data`.`end` > UNIX_TIMESTAMP()) OR (`epg_data`.`start` > UNIX_TIMESTAMP() AND `epg_data`.`start` <= UNIX_TIMESTAMP() + 7200))) OR `streams`.`stream_display_name` LIKE ? OR `streams`.`id` LIKE ?';
goto label694;

label175:

echo ' style="display: none;"';

label176:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">TV Guide</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '<form method="GET" action="epg_view">' . "\n\t\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t" . '<div id="collapse_filters" class="form-group row" style="margin-bottom: 0;">' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="search" name="search" value="';
goto label80;

label180:

$f61aba7fb6fff24b = ceil($d353a4da8a0bb857 / $Cc2b5dfe75dc164b);
$cff4296633224ff9 = [];

foreach (range($Df6ec63986c742df - 2, $Df6ec63986c742df + 2) as $df6991d59f367c7e) {
	if (!((1 <= $df6991d59f367c7e) && ($df6991d59f367c7e <= $f61aba7fb6fff24b))) {
		goto label204;
	}

	$cff4296633224ff9[] = $df6991d59f367c7e;

	label204:
}

goto label15;

label207:

echo "\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n";
goto label748;

label209:

echo "\t\t\t\t" . '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">×</span>' . "\n" . '                    </button>' . "\n" . '                    No Live Streams or Programmes have been found matching your search terms.' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";
goto label14;

label211:

echo "\t\t\t\t" . '<div class="listings-grid-container">' . "\n\t\t\t\t\t" . '<a href="#" class="listings-direction-link left day-nav-arrow js-day-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir"></span></a>' . "\n\t\t\t\t\t" . '<a href="#" class="listings-direction-link right day-nav-arrow js-day-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir"></span></a>' . "\n\t\t\t\t\t" . '<div class="listings-day-slider-wrapper">' . "\n\t\t\t\t\t\t" . '<div class="listings-day-slider js-listings-day-slider">' . "\n\t\t\t\t\t\t\t" . '<div class="js-listings-day-nav-inner"></div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<div class="js-billboard-fix-point"></div>' . "\n\t\t\t\t\t" . '<div class="listings-grid-inner">' . "\n\t\t\t\t\t\t" . '<div class="time-nav-bar cf js-time-nav-bar">' . "\n\t\t\t\t\t\t\t" . '<div class="listings-mobile-nav">' . "\n\t\t\t\t\t\t\t\t" . '<a class="listings-now-btn js-now-btn" href="#">NOW</a>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="listings-times-wrapper">' . "\n\t\t\t\t\t\t\t\t" . '<a href="#" class="listings-direction-link left js-time-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir text-white"></span></a>' . "\n\t\t\t\t\t\t\t\t" . '<a href="#" class="listings-direction-link right js-time-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir text-white"></span></a>' . "\n\t\t\t\t\t\t\t\t" . '<div class="times-slider js-times-slider"></div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '<div class="listings-loader js-listings-loader"><span class="isvg isvg-loader animate-spin"></span></div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '<div class="listings-wrapper cf js-listings-wrapper">' . "\n\t\t\t\t\t\t\t" . '<div class="listings-timeline js-listings-timeline"></div>' . "\n\t\t\t\t\t\t\t" . '<div class="js-listings-container"></div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t";

if (!(1 < $f61aba7fb6fff24b)) {
	goto label13;
}

goto label373;

label217:

if (!$Ebb0b63f7c597ba4) {
	goto label223;
}

header('Location: dashboard');

label223:

$Df6ec63986c742df = (0 < intval(XUI::$rRequest['page']) ? intval(XUI::$rRequest['page']) : 1);
$Cc2b5dfe75dc164b = (0 < intval(XUI::$rRequest['entries']) ? intval(XUI::$rRequest['entries']) : XUI::$rSettings['default_entries']);
goto label33;

label258:

$b62d6460eb33ea07->query('SELECT DISTINCT(`streams`.`id`) AS `id` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` ' . $F5190fed237fabec . ';', ...$B03cfeca75020c69);
$d353a4da8a0bb857 = $b62d6460eb33ea07->num_rows();
$b62d6460eb33ea07->query('SELECT DISTINCT(`streams`.`id`) AS `id` FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` ' . $F5190fed237fabec . ' ORDER BY ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';', ...$B03cfeca75020c69);

label281:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$dec36723d7be7c49[] = $Fb9da1713bff19ce['id'];
}

goto label180;

label291:

foreach ($cff4296633224ff9 as $df6991d59f367c7e) {
	echo '<li class="paginator__item' . ($Df6ec63986c742df == $df6991d59f367c7e ? ' paginator__item--active' : '') . '"><a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=' . $df6991d59f367c7e . '">' . $df6991d59f367c7e . '</a></li>';
}

if (!($cff4296633224ff9[count($cff4296633224ff9) - 1] < $f61aba7fb6fff24b)) {
	goto label637;
}

if (!(1 < count($cff4296633224ff9))) {
	goto label577;
}

echo '<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>';
goto label577;

label373:

echo "\t\t\t\t\t" . '<ul class="paginator">' . "\n\t\t\t\t\t\t";

if (!(1 < $Df6ec63986c742df)) {
	goto label430;
}

echo '<li class="paginator__item paginator__item--prev">' . "\n\t\t\t\t\t\t\t\t" . '<a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=' . ($Df6ec63986c742df - 1) . '"><i class="mdi mdi-chevron-left"></i></a>' . "\n\t\t\t\t\t\t\t" . '</li>';

label430:

if (!(1 < $cff4296633224ff9[0])) {
	goto label500;
}

goto label436;

label436:

echo '<li class="paginator__item' . ($Df6ec63986c742df == 1 ? ' paginator__item--active' : '') . '"><a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=1">1</a></li>';

if (!(1 < count($cff4296633224ff9))) {
	goto label500;
}

echo '<li class=\'paginator__item\'><a href=\'javascript: void(0);\'>...</a></li>';

label500:

goto label291;

label501:

goto label509;

label502:

$e4829bf95c7424f6 = 'FIELD(`streams`.`id`,' . implode(',', $e99a4642ffdbd364) . ')';

label509:

goto label5;
goto label1;

label511:

echo ' selected';

label512:

echo '>';
echo $_['all_categories'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
goto label97;

label517:

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="user_show_entries">Show</label>' . "\n\t\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\n\t\t\t\t\t\t\t\t\t" . '<select id="entries" name="entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($Cc2b5dfe75dc164b == $C17543903e9aa6ae)) {
		goto label527;
	}

	echo ' selected';

	label527:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="btn-group col-md-2">' . "\n\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-info">Search</button>' . "\n\t\t\t\t\t\t\t\t\t" . '<button type="button" onClick="clearForm()" class="btn btn-warning"><i class="mdi mdi-filter-remove"></i></button>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</form>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t";

if (0 < count($dec36723d7be7c49)) {
	goto label211;
}

goto label209;

label542:

$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `streams` ' . $F5190fed237fabec . ';', ...$B03cfeca75020c69);
$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];
$b62d6460eb33ea07->query('SELECT `id` FROM `streams` ' . $F5190fed237fabec . ' ORDER BY ' . $e4829bf95c7424f6 . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';', ...$B03cfeca75020c69);
goto label281;

label567:

goto label258;

label568:

$F5190fed237fabec = '';
goto label576;

label570:

$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

label576:

goto label47;

label577:

echo '<li class="paginator__item' . ($Df6ec63986c742df == $f61aba7fb6fff24b ? ' paginator__item--active' : '') . '"><a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=' . $f61aba7fb6fff24b . '">' . $f61aba7fb6fff24b . '</a></li>';

label637:

if (!($Df6ec63986c742df < $f61aba7fb6fff24b)) {
	goto label12;
}

echo '<li class="paginator__item paginator__item--next">' . "\n\t\t\t\t\t\t\t\t" . '<a href="epg_view?search=' . (urlencode(XUI::$rRequest['search']) ?: '') . '&category=' . (XUI::$rRequest['category'] ? intval(XUI::$rRequest['category']) : '') . '&sort=' . (XUI::$rRequest['sort'] ? urlencode(XUI::$rRequest['sort']) : '') . '&entries=' . (XUI::$rRequest['entries'] ? intval(XUI::$rRequest['entries']) : '') . '&page=' . ($Df6ec63986c742df + 1) . '"><i class="mdi mdi-chevron-right"></i></a>' . "\n\t\t\t\t\t\t\t" . '</li>';
goto label12;

label694:

$B03cfeca75020c69[] = '%' . XUI::$rRequest['search'] . '%';
$B03cfeca75020c69[] = '%' . XUI::$rRequest['search'] . '%';
$B03cfeca75020c69[] = XUI::$rRequest['search'];

label710:

if (0 < count($cf0aab70014807af)) {
	goto label570;
}

goto label568;

label717:

$cf0aab70014807af = $B03cfeca75020c69 = [];
$cf0aab70014807af[] = '`streams`.`type` = 1 AND `streams`.`epg_id` IS NOT NULL AND `streams`.`channel_id` IS NOT NULL';
$cf0aab70014807af[] = '`streams`.`id` IN (' . implode(',', array_map('intval', $db0a61ef32b89a27['stream_ids'])) . ')';
if (!(isset(XUI::$rRequest['category']) && (0 < intval(XUI::$rRequest['category'])))) {
	goto label168;
}

goto label162;

label748:

include 'footer.php';

?>