<?php


goto label13;

label1:

echo '                    </div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Server Order</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label11;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Servers have been re-ordered.' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label11:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#servers" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Servers</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="servers">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="server_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" id="server_order" name="server_order" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'To re-order a server, drag it up or down the list using the <i class="mdi mdi-view-sequential"></i> icon. Click Save Changes at the bottom once finished.<br/>Servers will be ordered as below on the dashboard, with offline servers moved to the end of the list automatically.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-dd dd" id="server_items">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<ol class="dd-list">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label55;

label13:

include 'session.php';
include 'functions.php';

if (e6D500E19634D513()) {
	goto label21;
}

e72F42a93714Ba87();

label21:

goto label40;

label22:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label37;
}

echo ' style="display: none;"';

label37:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
goto label1;

label40:

$D2dab59f18f3fe06 = $Bcf70cba56392975;
array_multisort(array_column($D2dab59f18f3fe06, 'order'), SORT_ASC, $D2dab59f18f3fe06);
$F6edd90960a3bd9d = 'Server Order';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
goto label22;

label55:

foreach ($D2dab59f18f3fe06 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="dd-item dd3-item server-';
	echo $Ec379295dc7029e6['id'];
	echo '" data-id="';
	echo $Ec379295dc7029e6['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd-handle dd3-handle"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dd3-content">#';
	echo $Ec379295dc7029e6['id'];
	echo ' - ';
	echo $Ec379295dc7029e6['server_name'];
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span style="float:right;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</ol>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0 add-margin-top-20">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label74;

label74:

include 'footer.php';

?>