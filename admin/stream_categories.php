<?php


goto label1;

label1:

include 'session.php';
include 'functions.php';

if (e6d500e19634D513()) {
	goto label9;
}

E72F42A93714Ba87();

label9:

goto label177;

label10:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label27;
}

echo ' style="display: none;"';

label27:

goto label209;

label28:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</ol>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="category-order-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="stream_categories_form-4">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" id="categories_input-4" name="categories" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'To re-order a category, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-dd dd" id="category_order-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<ol class="dd-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($ff30d0ac8e38c2bb[4] as $Dbcac322b4274e46) {
	goto label34;

	label34:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dd-item dd3-item category-';
	echo $Dbcac322b4274e46['id'];
	echo '" data-id="';
	echo $Dbcac322b4274e46['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd-handle dd3-handle"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd3-content">';
	goto label64;

	label43:

	echo $Dbcac322b4274e46['id'];
	echo ')"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label46:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label75;

	label49:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span style="float:right;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	if (!e589a4BF54A2DaD1('adv', 'edit_cat')) {
		goto label46;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" onClick="navigate(\'stream_category?id=';
	echo $Dbcac322b4274e46['id'];
	echo '\');" class="btn btn-light waves-effect waves-light sml-button"><i class="mdi mdi-pencil-outline"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light sml-button" onClick="deleteCategory(';
	goto label43;

	label64:

	echo $Dbcac322b4274e46['category_name'];
	echo ' ';

	if (!$Dbcac322b4274e46['is_adult']) {
		goto label73;
	}

	echo '<i class=\'text-pink mdi mdi-record\'></i>';

	label73:

	goto label49;

	label75:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</ol>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label283;

label79:

foreach ($ff30d0ac8e38c2bb[2] as $Dbcac322b4274e46) {
	goto label116;

	label84:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span style="float:right;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	if (!E589A4bF54A2daD1('adv', 'edit_cat')) {
		goto label113;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" onClick="navigate(\'stream_category?id=';
	echo $Dbcac322b4274e46['id'];
	echo '\');" class="btn btn-light waves-effect waves-light sml-button"><i class="mdi mdi-pencil-outline"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light sml-button" onClick="deleteCategory(';
	goto label110;

	label99:

	echo $Dbcac322b4274e46['category_name'];
	echo ' ';

	if (!$Dbcac322b4274e46['is_adult']) {
		goto label108;
	}

	echo '<i class=\'text-pink mdi mdi-record\'></i>';

	label108:

	goto label84;

	label110:

	echo $Dbcac322b4274e46['id'];
	echo ')"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label113:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label125;

	label116:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dd-item dd3-item category-';
	echo $Dbcac322b4274e46['id'];
	echo '" data-id="';
	echo $Dbcac322b4274e46['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd-handle dd3-handle"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd3-content">';
	goto label99;

	label125:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</ol>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="category-order-3">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="stream_categories_form-3">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" id="categories_input-3" name="categories" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'To re-order a category, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-dd dd" id="category_order-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<ol class="dd-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($ff30d0ac8e38c2bb[3] as $Dbcac322b4274e46) {
	goto label165;

	label133:

	echo $Dbcac322b4274e46['category_name'];
	echo ' ';

	if (!$Dbcac322b4274e46['is_adult']) {
		goto label142;
	}

	echo '<i class=\'text-pink mdi mdi-record\'></i>';

	label142:

	goto label150;

	label144:

	echo $Dbcac322b4274e46['id'];
	echo ')"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label147:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label174;

	label150:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span style="float:right;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	if (!e589a4BF54A2Dad1('adv', 'edit_cat')) {
		goto label147;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" onClick="navigate(\'stream_category?id=';
	echo $Dbcac322b4274e46['id'];
	echo '\');" class="btn btn-light waves-effect waves-light sml-button"><i class="mdi mdi-pencil-outline"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light sml-button" onClick="deleteCategory(';
	goto label144;

	label165:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dd-item dd3-item category-';
	echo $Dbcac322b4274e46['id'];
	echo '" data-id="';
	echo $Dbcac322b4274e46['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd-handle dd3-handle"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd3-content">';
	goto label133;

	label174:
}

goto label28;

label177:

$F771d40e8cf51e59 = [1 => F769e3F0C739D1A6(), 2 => f769e3F0C739D1A6('movie'), 3 => F769e3F0c739d1a6('series'), 4 => F769e3F0C739d1A6('radio')];
$ff30d0ac8e38c2bb = [
	1 => [],
	2 => [],
	3 => []
];

foreach ([1, 2, 3, 4] as $Abcb228699a7f743) {
	foreach ($F771d40e8cf51e59[$Abcb228699a7f743] as $fe63f70cd74f3298 => $C80f49411fd82ff1) {
		$ff30d0ac8e38c2bb[$Abcb228699a7f743][] = $C80f49411fd82ff1;
	}
}

$F6edd90960a3bd9d = 'Stream Categories';
goto label10;

label209:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo '                    </div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Categories</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n" . '                ';
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS)) {
	goto label281;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS_MULTI))) {
	goto label280;
}

goto label279;

label228:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#category-order-1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Streams</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#category-order-2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Movies</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#category-order-3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-youtube-tv mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Series</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#category-order-4" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-radio mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Radio</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="category-order-1">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="stream_categories_form-1">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" id="categories_input-1" name="categories" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'To re-order a category, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-dd dd" id="category_order-1">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<ol class="dd-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($ff30d0ac8e38c2bb[1] as $Dbcac322b4274e46) {
	goto label266;

	label234:

	echo $Dbcac322b4274e46['id'];
	echo ')"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label237:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label275;

	label240:

	echo $Dbcac322b4274e46['category_name'];
	echo ' ';

	if (!$Dbcac322b4274e46['is_adult']) {
		goto label249;
	}

	echo '<i class=\'text-pink mdi mdi-record\'></i>';

	label249:

	goto label251;

	label251:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span style="float:right;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	if (!e589a4bF54a2DAD1('adv', 'edit_cat')) {
		goto label237;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" onClick="navigate(\'stream_category?id=';
	echo $Dbcac322b4274e46['id'];
	echo '\');" class="btn btn-light waves-effect waves-light sml-button"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light sml-button" onClick="deleteCategory(';
	goto label234;

	label266:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dd-item dd3-item category-';
	echo $Dbcac322b4274e46['id'];
	echo '" data-id="';
	echo $Dbcac322b4274e46['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd-handle dd3-handle"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd3-content">';
	goto label240;

	label275:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</ol>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="category-order-2">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="stream_categories_form-2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" id="categories_input-2" name="categories" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'To re-order a category, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-dd dd" id="category_order-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<ol class="dd-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label79;

label279:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Categories have been re-ordered.' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label280:

goto label228;

label281:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Your new Category has been added. You can move it up the list to re-order it.' . "\n\t\t\t\t" . '</div>' . "\n" . '                ';
goto label228;

label283:

include 'footer.php';

?>