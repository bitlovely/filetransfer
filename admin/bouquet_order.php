<?php


goto label1;

label1:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label9;
}

e72F42A93714ba87();

label9:

goto label67;

label10:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-control custom-checkbox add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="custom-control-input" name="confirmReplace" id="confirmReplace">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="custom-control-label" for="confirmReplace">Replace bouquet order for all users and packages retrospectively. This can take a while.</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp()" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown()" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveTop()" class="btn btn-pink"><i class="mdi mdi-chevron-triple-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveBottom()" class="btn btn-pink"><i class="mdi mdi-chevron-triple-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ()" class="btn btn-info">';
echo $_['a_to_z'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">';
echo $_['save_changes'];
goto label45;

label17:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n\t\t\t\t\t\t";
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n" . '                    <h4 class="page-title">';
echo $_['bouquet_order'];
goto label23;

label23:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t";
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS_REPLACE)) {
	goto label42;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label40;
}

echo "\t\t\t\t" . '<div class="alert alert-success show" role="alert">' . "\r\n\t\t\t\t\t" . 'Bouquet order has taken effect, any <strong>new</strong> lines and packages will use this order.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label40:

goto label41;

label41:

goto label43;

label42:

echo "\t\t\t\t" . '<div class="alert alert-success show" role="alert">' . "\r\n\t\t\t\t\t" . 'Bouquet order has taken effect and <strong>all</strong> lines and packages have been modified to utilise the new bouquet order.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label43:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\r\n\t\t\t\t\t\t\t" . '<input type="hidden" id="bouquet_order_array" name="bouquet_order_array" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#order-stream" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-flower-tulip-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label47;

label45:

echo '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label86;

label47:

echo $_['bouquet_order'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="order-stream">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
echo $_['bouquet_sort_text'];
echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select multiple id="sort_bouquet" class="form-control" style="min-height:400px;">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f964B9222B35ADDd() as $f155fef57262b32a) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label10;

label67:

$F6edd90960a3bd9d = 'Bouquet Order';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label17;
}

echo ' style="display: none;"';
goto label17;

label86:

include 'footer.php';

?>