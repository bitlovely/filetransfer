<?php


goto label123;

label1:

echo $_['change_password'];
echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="password" name="password" placeholder="Enter a new password here to change it" value="">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="email">';
echo $_['email_address'];
echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="email" id="email" class="form-control" name="email" value="';
echo htmlspecialchars($E59d0debc75e7be8['email']);
goto label129;

label13:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                ';

foreach (efAdB87D8C867176() as $E28b12c74d51f0b0) {
	if (!(($E28b12c74d51f0b0['type'] == 4) && in_array($E59d0debc75e7be8['member_group_id'], json_decode($E28b12c74d51f0b0['groups'], true)))) {
		goto label70;
	}

	echo '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="api_key">API Key <i title="API URL:<br/>';
	echo (empty($E59d0debc75e7be8['reseller_dns']) ? XUI::$rServers[SERVER_ID]['http_url'] : 'http://' . $E59d0debc75e7be8['reseller_dns'] . ':' . intval(XUI::$rServers[SERVER_ID]['http_broadcast_port']) . '/') . $E28b12c74d51f0b0['code'];
	echo '/" class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input readonly type="text" maxlength="32" class="form-control" id="api_key" name="api_key" value="';
	echo htmlspecialchars($E59d0debc75e7be8['api_key']);
	echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-danger waves-effect waves-light" onClick="clearCode();" type="button"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                                            <button class="btn btn-info waves-effect waves-light" onClick="generateCode();" type="button"><i class="mdi mdi-refresh"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                ';
	goto label72;

	label70:
}

label72:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_profile" type="submit" class="btn btn-primary" value="';
echo $_['save_profile'];
goto label76;

label76:

echo '" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label181;

label78:

echo ucfirst($E59d0debc75e7be8['username']);
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label118;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t";
echo $_['profile_success'];
goto label117;

label96:

echo ' value="">Server Default</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($b763a8051452ee57 as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($E59d0debc75e7be8['timezone'] == $ce0840c647e1bbc7)) {
		goto label108;
	}

	echo 'selected ';

	label108:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="theme">System Theme</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="theme" id="theme" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label142;

label117:

echo "\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label118:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form onSubmit="return false;" action="#" method="POST" data-parsley-validate="">' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="password">';
goto label1;

label123:

include 'session.php';
include 'functions.php';
$F6edd90960a3bd9d = 'Edit Profile';
include 'header.php';
echo '<div class="wrapper boxed-layout">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label78;

label129:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_dns">Custom DNS</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="reseller_dns" id="reseller_dns" class="form-control" name="reseller_dns" value="';
echo htmlspecialchars($E59d0debc75e7be8['reseller_dns']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="timezone">Timezone</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="timezone" id="timezone" class="form-control" data-toggle="select2">' . "\r\n" . '                                                            <option ';

if (!empty($E59d0debc75e7be8['timezone'])) {
	goto label96;
}

echo 'selected ';
goto label96;

label142:

foreach ($cc474bf3b4c0707e as $ce0840c647e1bbc7 => $F647a429f8089f01) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($E59d0debc75e7be8['theme'] == $ce0840c647e1bbc7)) {
		goto label153;
	}

	echo 'selected ';

	label153:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $F647a429f8089f01['name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="hue">Topbar Theme</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="hue" id="hue" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($f1b18060c577d4da as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($E59d0debc75e7be8['hue'] == $ce0840c647e1bbc7)) {
		goto label173;
	}

	echo 'selected ';

	label173:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label13;

label181:

include 'footer.php';

?>