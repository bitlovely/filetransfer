<?php


goto label234;

label1:

echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="groups">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (AD052a625C6ac011() as $fb719dae9595b9fa) {
	goto label14;

	label8:

	echo '>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="custom-control-label" for="group-';
	echo $fb719dae9595b9fa['group_id'];
	echo '">';
	goto label48;

	label14:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-control custom-checkbox mt-1">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="custom-control-input group-checkbox" id="group-';
	echo $fb719dae9595b9fa['group_id'];
	echo '" data-id="';
	echo $fb719dae9595b9fa['group_id'];
	echo '" name="groups[]" value="';
	goto label23;

	label23:

	echo $fb719dae9595b9fa['group_id'];
	echo '"';

	if (!isset($E28b12c74d51f0b0)) {
		goto label8;
	}

	if (!in_array($fb719dae9595b9fa['group_id'], json_decode($E28b12c74d51f0b0['groups'], true))) {
		goto label8;
	}

	echo ' checked';
	goto label8;

	label48:

	echo $fb719dae9595b9fa['group_name'];
	echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label53;

	label53:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
goto label174;

label59:

echo $E28b12c74d51f0b0['id'];
echo '" />' . "\r\n\t\t\t\t\t\t\t";

label62:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#code-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
goto label215;

label66:

echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-info waves-effect waves-light" onClick="generateCode();" type="button"><i class="mdi mdi-refresh"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="type">Access Type <i title="Select what access to grant." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="type" name="type" class="form-control select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([0 => 'Admin', 1 => 'Reseller', 2 => 'Ministra', 3 => 'Admin API', 4 => 'Reseller API', 6 => 'Web Player'] as $Abcb228699a7f743 => $ce0840c647e1bbc7) {
	goto label81;

	label72:

	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label96;

	label75:

	echo ' value="';
	echo $Abcb228699a7f743;
	echo '">';
	echo $ce0840c647e1bbc7;
	goto label72;

	label81:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($E28b12c74d51f0b0)) {
		goto label75;
	}

	if (!($E28b12c74d51f0b0['type'] == $Abcb228699a7f743)) {
		goto label94;
	}

	echo 'selected ';

	label94:

	goto label75;

	label96:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="enabled">Enabled</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enabled" id="enabled" type="checkbox" ';
goto label147;

label100:

echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label116;
}

echo ' style="display: none;"';

label116:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
goto label166;

label118:

if (isset($E28b12c74d51f0b0)) {
	goto label124;
}

echo $_['add'];
goto label195;

label124:

echo $_['edit'];
goto label195;

label127:

if (!isset($E28b12c74d51f0b0)) {
	goto label145;
}

foreach (json_decode($E28b12c74d51f0b0['whitelist'], true) as $b38e11ffdc6a3abb) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b38e11ffdc6a3abb;
	echo '">';
	echo $b38e11ffdc6a3abb;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

label145:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_code" type="submit" class="btn btn-primary" value="';
goto label118;

label147:

if (isset($E28b12c74d51f0b0)) {
	goto label152;
}

echo 'checked ';
goto label230;

label152:

if (!($E28b12c74d51f0b0['enabled'] == 1)) {
	goto label230;
}

goto label229;

label158:

echo '                <div class="alert alert-warning" role="alert">' . "\r\n" . '                    You are editing the Access Code you\'re currently using to access the system. Ensure you have set up another access code before disabling or modifying the access rights of this group.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label159:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\r\n\t\t\t\t\t\t\t";

if (!isset($E28b12c74d51f0b0)) {
	goto label62;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
goto label59;

label166:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($E28b12c74d51f0b0)) {
	goto label182;
}

echo 'Add Code';
goto label183;
goto label182;

label174:

echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="selectAll()" class="btn btn-secondary">';
echo $_['select_all'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="selectNone()" class="btn btn-secondary">';
echo $_['deselect_all'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="restrictions">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ip_field">Allowed IP Addresses <i title="Restrict access to specific IP addresses." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="ip_field" class="form-control" value="">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="whitelist">&nbsp;</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="whitelist" name="whitelist[]" size=6 class="form-control" multiple="multiple">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label127;

label182:

echo 'Edit Code';

label183:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n" . '                ';
if (!(isset($E28b12c74d51f0b0) && (c9359222B3e3D256() == $E28b12c74d51f0b0['code']))) {
	goto label159;
}

goto label158;

label195:

echo '" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label243;

label197:
if (!(isset(XUI::$rRequest['id']) && !($E28b12c74d51f0b0 = eACe9b35c7C59e8a(XUI::$rRequest['id'])))) {
	goto label212;
}

exit();

label212:

$F6edd90960a3bd9d = 'Access Code';
include 'header.php';
goto label100;

label215:

echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#groups" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-group mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['groups'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#restrictions" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-hazard-lights mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Restrictions</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="code-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="code">Access Code <i title="Enter a secure access code that cannot be guessed. It needs to be at least 8 characters and should be random." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9 input-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" maxlength="16" class="form-control" id="code" name="code" value="';

if (!isset($E28b12c74d51f0b0)) {
	goto label66;
}

echo htmlspecialchars($E28b12c74d51f0b0['code']);
goto label66;

label229:

echo 'checked ';

label230:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label1;

label234:

include 'session.php';
include 'functions.php';

if (E6D500E19634d513()) {
	goto label242;
}

E72f42A93714Ba87();

label242:

goto label197;

label243:

include 'footer.php';

?>