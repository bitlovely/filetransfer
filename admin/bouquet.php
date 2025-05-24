<?php


goto label436;

label1:

echo ' style="display: none;"';

label2:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n\t\t\t\t\t\t";
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label419;

label6:

echo $_['all_categories'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769E3F0c739D1a6('live') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo htmlspecialchars($Dbcac322b4274e46['category_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_search">';
goto label278;

label31:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="radios_search" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-radios" class="table nowrap">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['station_name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
goto label287;

label39:

if (!(0 < count($B10ddf7cd8d85fee))) {
	goto label65;
}

$b62d6460eb33ea07->query('SELECT `id`, `title` FROM `streams_series` WHERE `id` IN (' . implode(',', $B10ddf7cd8d85fee) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Ceeaa4e9a71dae9c[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['title'];
}

label65:

goto label338;

label66:

foreach (f769e3F0C739D1a6('movie') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo htmlspecialchars($Dbcac322b4274e46['category_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="vod_search">';
echo $_['search'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="vod_search" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-movies" class="table nowrap">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label212;

label91:

echo $_['add'];
goto label96;

label94:

echo $_['edit'];

label96:

goto label140;

label97:

foreach ($a8d269a680a9c63b as $aa4e95f1ed1932a8) {
	echo '                                                            <tr id="movies-';
	echo $aa4e95f1ed1932a8;
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $aa4e95f1ed1932a8;
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>Movies</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $a9f44ab68ecde326[$aa4e95f1ed1932a8];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                                                    <button type="button" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(';
	echo $aa4e95f1ed1932a8;
	echo ', \'movies\');"><i class="mdi mdi-minus"></i></button>' . "\n" . '                                                                </td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n" . '                                                            ';
}

foreach ($Db39c350c0f82f50 as $aa4e95f1ed1932a8) {
	echo '                                                            <tr id="radios-';
	echo $aa4e95f1ed1932a8;
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $aa4e95f1ed1932a8;
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>Radios</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $a9f44ab68ecde326[$aa4e95f1ed1932a8];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                                                    <button type="button" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(';
	echo $aa4e95f1ed1932a8;
	echo ', \'radios\');"><i class="mdi mdi-minus"></i></button>' . "\n" . '                                                                </td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n" . '                                                            ';
}

foreach ($B10ddf7cd8d85fee as $aa4e95f1ed1932a8) {
	echo '                                                            <tr id="series-';
	echo $aa4e95f1ed1932a8;
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $aa4e95f1ed1932a8;
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>Series</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $Ceeaa4e9a71dae9c[$aa4e95f1ed1932a8];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                                                    <button type="button" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(';
	echo $aa4e95f1ed1932a8;
	echo ', \'series\');"><i class="mdi mdi-minus"></i></button>' . "\n" . '                                                                </td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n" . '                                                            ';
}

goto label189;

label140:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t";

label141:

echo "\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label550;

label143:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="bouquet_name" name="bouquet_name" value="';

if (!isset($c723ecd706cad673)) {
	goto label153;
}

echo htmlspecialchars($c723ecd706cad673['bouquet_name']);

label153:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
goto label296;

label155:

if (!isset($c723ecd706cad673)) {
	goto label200;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#channels" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['streams'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#movies" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['movies'];
goto label487;

label166:

if (!isset(XUI::$rRequest['id'])) {
	goto label177;
}

$c723ecd706cad673 = b47fb5320e43F112(XUI::$rRequest['id']);

label177:

if (!isset(XUI::$rRequest['duplicate'])) {
	goto label224;
}

$c723ecd706cad673 = B47fb5320E43F112(XUI::$rRequest['duplicate']);
goto label221;

label189:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_bouquet" type="submit" class="btn btn-primary" value="';

if (isset($c723ecd706cad673['id'])) {
	goto label94;
}

goto label91;

label197:

echo $_['review'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

label200:

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquet-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="bouquet_name">';
echo $_['bouquet_name'];
goto label143;

label204:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="movies">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_name">';
echo $_['category_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="category_idv" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_categories'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label66;

label212:

echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['vod_name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['category'];
goto label313;

label221:

$c723ecd706cad673['bouquet_name'] .= ' - Copy';
unset($c723ecd706cad673['id']);

label224:

$Ceeaa4e9a71dae9c = $a9f44ab68ecde326 = [];

if (!isset($c723ecd706cad673)) {
	goto label338;
}

goto label379;

label231:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form onSubmit="return false;" action="#" method="POST" id="bouquet_form" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($c723ecd706cad673['id'])) {
	goto label414;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo intval($c723ecd706cad673['id']);
goto label413;

label243:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t";

if (!isset($c723ecd706cad673)) {
	goto label141;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="channels">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_name">';
echo $_['category_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="category_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
goto label6;

label253:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769E3F0c739d1A6('radio') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo htmlspecialchars($Dbcac322b4274e46['category_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="radios_search">';
echo $_['search'];
goto label31;

label278:

echo $_['search'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_search" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-stream" class="table nowrap">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['stream_name'];
goto label305;

label287:

echo $_['category'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
goto label445;

label296:

if (isset($c723ecd706cad673)) {
	goto label365;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_bouquet" type="submit" class="btn btn-primary" value="';
echo $_['add'];
echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
goto label369;
goto label365;

label305:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['category'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label370;

label313:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="toggleBouquets(\'datatable-movies\')" class="btn btn-primary">';
goto label478;

label321:

echo $_['series_name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['category'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
goto label428;

label330:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="series_search">';
echo $_['search'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="series_search" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-series" class="table nowrap">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
goto label321;

label338:

$F6edd90960a3bd9d = 'Bouquets';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label2;
}

goto label1;

label356:

echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="radios">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_idr">';
echo $_['category_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="category_idr" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_categories'];
goto label253;

label365:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

label369:

goto label243;

label370:

echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="toggleBouquets(\'datatable-stream\')" class="btn btn-primary">';
echo $_['toggle_page'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label204;

label379:

$Fcb3b5dd6bc21e23 = json_decode($c723ecd706cad673['bouquet_channels'], true);
$a8d269a680a9c63b = json_decode($c723ecd706cad673['bouquet_movies'], true);
$Db39c350c0f82f50 = json_decode($c723ecd706cad673['bouquet_radios'], true);
$B10ddf7cd8d85fee = json_decode($c723ecd706cad673['bouquet_series'], true);
$E547cecc6bfa5dda = confirmIDs(array_merge($Fcb3b5dd6bc21e23, $a8d269a680a9c63b, $Db39c350c0f82f50));
goto label514;

label413:

echo '" />' . "\n\t\t\t\t\t\t\t";

label414:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" id="bouquet_data" name="bouquet_data" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquet-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";
goto label155;

label419:

if (isset($c723ecd706cad673['id'])) {
	goto label425;
}

echo $_['add_bouquet'];
goto label231;

label425:

echo $_['edit_bouquet'];
goto label231;

label428:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="toggleBouquets(\'datatable-series\')" class="btn btn-primary">';
echo $_['toggle_page'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label356;

label436:

include 'session.php';
include 'functions.php';

if (E6D500e19634d513()) {
	goto label444;
}

E72F42a93714Ba87();

label444:

goto label166;

label445:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="toggleBouquets(\'datatable-series\')" class="btn btn-primary">';
echo $_['toggle_page'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="review">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-review" class="table nowrap">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label541;

label453:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="category_ids" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_categories'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769e3F0c739D1a6('series') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '">';
	echo htmlspecialchars($Dbcac322b4274e46['category_name']);
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label330;

label478:

echo $_['toggle_page'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="series">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_name">';
echo $_['category_name'];
goto label453;

label487:

echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#series" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-youtube-tv mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['series'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#radios" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-radio mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['radio'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#review" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-book-open-variant mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label197;

label495:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n" . '                                                            ';

foreach ($Fcb3b5dd6bc21e23 as $aa4e95f1ed1932a8) {
	echo '                                                            <tr id="stream-';
	echo $aa4e95f1ed1932a8;
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $aa4e95f1ed1932a8;
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>Stream</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $a9f44ab68ecde326[$aa4e95f1ed1932a8];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                                                    <button type="button" class="btn-remove btn btn-warning waves-effect waves-warning btn-xs" onClick="toggleBouquet(';
	echo $aa4e95f1ed1932a8;
	echo ', \'stream\');"><i class="mdi mdi-minus"></i></button>' . "\n" . '                                                                </td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n" . '                                                            ';
}

goto label97;

label514:

if (!(0 < count($E547cecc6bfa5dda))) {
	goto label540;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', $E547cecc6bfa5dda) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$a9f44ab68ecde326[$Fb9da1713bff19ce['id']] = $Fb9da1713bff19ce['stream_display_name'];
}

label540:

goto label39;

label541:

echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['type'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['display_name'];
goto label495;

label550:

include 'footer.php';

?>