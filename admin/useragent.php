<?php


goto label3;

label1:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label100;

label3:

include 'session.php';
include 'functions.php';

if (e6d500e19634D513()) {
	goto label11;
}

E72F42a93714ba87();

label11:

goto label81;

label12:

echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label28;
}

echo ' style="display: none;"';

label28:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
goto label61;

label30:

if (!($D1844a0fbdb1c853['exact_match'] == 1)) {
	goto label36;
}

echo 'checked ';

label36:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_ua" type="submit" class="btn btn-primary" value="';
goto label54;

label38:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo intval($D1844a0fbdb1c853['id']);
echo '" />' . "\n\t\t\t\t\t\t\t";

label45:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#useragent-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="useragent-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="user_agent">User-Agent</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="user_agent" name="user_agent" value="';
goto label69;

label47:

echo 'Edit';

label48:

echo ' User-Agent</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($D1844a0fbdb1c853)) {
	goto label45;
}

goto label38;

label54:

if (isset($D1844a0fbdb1c853)) {
	goto label59;
}

echo 'Block';
goto label1;

label59:

echo 'Edit';
goto label1;

label61:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($D1844a0fbdb1c853)) {
	goto label47;
}

echo 'Block';
goto label48;
goto label47;

label69:

if (!isset($D1844a0fbdb1c853)) {
	goto label75;
}

echo $D1844a0fbdb1c853['user_agent'];

label75:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="exact_match">Exact Match</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="exact_match" id="exact_match" type="checkbox" ';

if (!isset($D1844a0fbdb1c853)) {
	goto label36;
}

goto label30;

label81:
if (!(isset(XUI::$rRequest['id']) && !($D1844a0fbdb1c853 = b603Bf039Aba700f(XUI::$rRequest['id'])))) {
	goto label97;
}

e72f42A93714BA87();

label97:

$F6edd90960a3bd9d = 'Block User-Agent';
include 'header.php';
goto label12;

label100:

include 'footer.php';

?>