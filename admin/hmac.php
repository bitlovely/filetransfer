<?php


goto label46;

label1:

echo '" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label113;

label3:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="keygen">HMAC Key</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-5 input-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input readonly type="text" maxlength="32" class="form-control" id="keygen" name="keygen" value="';

if (!isset($f7c0c7b6c4fcdd8f)) {
	goto label9;
}

echo 'HMAC KEY HIDDEN';

label9:

echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-info waves-effect waves-light" onClick="generateCode();" type="button"><i class="mdi mdi-refresh"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                    <label class="col-md-2 col-form-label" for="enabled">Enabled</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enabled" id="enabled" type="checkbox" ';
goto label29;

label11:
if (!(isset(XUI::$rRequest['id']) && !($f7c0c7b6c4fcdd8f = FA460aBdD5DcA199(XUI::$rRequest['id'])))) {
	goto label26;
}

exit();

label26:

$F6edd90960a3bd9d = 'HMAC Key';
include 'header.php';
goto label75;

label29:

if (isset($f7c0c7b6c4fcdd8f)) {
	goto label34;
}

echo 'checked ';
goto label70;

label34:

if (!($f7c0c7b6c4fcdd8f['enabled'] == 1)) {
	goto label70;
}

goto label69;

label40:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $f7c0c7b6c4fcdd8f['id'];
echo '" />' . "\r\n\t\t\t\t\t\t\t";

label44:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#hmac-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label100;

label46:

include 'session.php';
include 'functions.php';

if (e6D500E19634D513()) {
	goto label54;
}

e72F42a93714BA87();

label54:

goto label11;

label55:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($f7c0c7b6c4fcdd8f)) {
	goto label93;
}

echo 'Add HMAC Key';
goto label94;
goto label93;

label63:

echo $_['add'];
goto label68;

label66:

echo $_['edit'];

label68:

goto label1;

label69:

echo 'checked ';

label70:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_key" type="submit" class="btn btn-primary" value="';

if (isset($f7c0c7b6c4fcdd8f)) {
	goto label66;
}

goto label63;

label75:

echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label91;
}

echo ' style="display: none;"';

label91:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
goto label55;

label93:

echo 'Edit HMAC Key';

label94:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n" . '                <div class="alert alert-info" role="alert">' . "\r\n\t\t\t\t\t" . 'Use this tool to generate a key you can use to generate HMAC tokens that can access a stream or movie. Visit the XUI documentation for more information on how to use it.<br/><br/><strong>Write down the HMAC key as you will not see it again, it will also be encrypted in the database so cannot be extracted.</strong>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\r\n\t\t\t\t\t\t\t";

if (!isset($f7c0c7b6c4fcdd8f)) {
	goto label44;
}

goto label40;

label100:

echo $_['details'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="hmac-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="notes">Description</label>' . "\r\n" . '                                                    <div class="col-md-9">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="notes" name="notes" value="';

if (!isset($f7c0c7b6c4fcdd8f)) {
	goto label112;
}

echo htmlspecialchars($f7c0c7b6c4fcdd8f['notes']);

label112:

goto label3;

label113:

include 'footer.php';

?>