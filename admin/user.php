<?php


goto label210;

label1:

echo ' style="display: none;"';

label2:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label68;

label6:

echo 'Change ';

label7:

echo 'Password</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="password" name="password"';

if (!isset($Caf4325605347834)) {
	goto label313;
}

echo ' placeholder="Enter a new password here to change it"';
goto label313;

label14:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_user" type="submit" class="btn btn-primary" value="';

if (isset($Caf4325605347834)) {
	goto label20;
}

echo 'Add';
goto label42;

label20:

goto label41;

label21:

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Username</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="username" name="username" value="';

if (isset($Caf4325605347834)) {
	goto label57;
}

echo fc34407B2842461b(10);
goto label62;
goto label57;

label31:

echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
echo '</option>' . "\n" . '                                                            ';

label40:

goto label336;

label41:

echo 'Edit';

label42:

echo ' User" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

if (!isset($Caf4325605347834)) {
	goto label202;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="override">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                ';
goto label190;

label49:

echo '" />' . "\n\t\t\t\t\t\t\t";

label50:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';

if (!isset($Caf4325605347834)) {
	goto label21;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#override" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-pencil-plus mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Overrides</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';
goto label21;

label57:

echo htmlspecialchars($Caf4325605347834['username']);

label62:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="password">';

if (!isset($Caf4325605347834)) {
	goto label7;
}

goto label6;

label68:

if (isset($Caf4325605347834)) {
	goto label73;
}

echo 'Add';
goto label282;

label73:

echo 'Edit';
goto label282;

label75:

$F6edd90960a3bd9d = 'User';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label2;
}

goto label1;

label93:

foreach ($b00d1d65528795d1 as $cc386f9ba082650e) {
	goto label120;

	label97:

	if (!isset($dd3211a322da8474[$cc386f9ba082650e['id']])) {
		goto label117;
	}

	echo empty($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']) ? '' : intval($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']);

	label117:

	echo '" style="width:100px; display: inline;" class="text-center" />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label118:

	goto label136;

	label120:

	if (!$cc386f9ba082650e['is_official']) {
		goto label118;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo intval($cc386f9ba082650e['id']);
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $cc386f9ba082650e['package_name'];
	goto label138;

	label136:

	goto label153;

	label138:

	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo intval($cc386f9ba082650e['official_credits']);
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td align="center">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input class="form-control text-center" onkeypress="return isNumberKey(event)" name="override_';
	echo intval($cc386f9ba082650e['id']);
	echo '" type="text" value="';
	goto label97;

	label153:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</table><br/><br/>' . "\n" . '                                                ';

label156:

goto label183;

label157:
if (!(isset(XUI::$rRequest['id']) && !($Caf4325605347834 = Ba89228DC958ce05(XUI::$rRequest['id'])))) {
	goto label173;
}

e72F42a93714bA87();

label173:

if (!isset($Caf4325605347834)) {
	goto label75;
}

$b00d1d65528795d1 = D8C8284136938ef0($Caf4325605347834['member_group_id']);
goto label75;

label183:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_user" type="submit" class="btn btn-primary" value="';

if (isset($Caf4325605347834)) {
	goto label189;
}

echo 'Add';
goto label201;

label189:

goto label200;

label190:

if (0 < count($b00d1d65528795d1)) {
	goto label198;
}

echo '                                                <div class="alert alert-info" role="alert">' . "\n" . '                                                    No packages have been allocated to this user group. You can either modify the package to include the group, or the group to include the package you want.' . "\n" . '                                                </div>' . "\n" . '                                                ';
goto label156;

label198:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'Leave the override cell blank to disable package override for the selected package.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">#</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Package</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Credits</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Override</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label219;

label200:

echo 'Edit';

label201:

echo ' User" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

label202:

echo "\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label367;

label204:

echo $E59d0debc75e7be8['username'];
echo '</option>' . "\n" . '                                                            ';
goto label40;

label208:

echo '                                                            <option value="';
goto label31;

label210:

include 'session.php';
include 'functions.php';

if (e6D500e19634d513()) {
	goto label218;
}

E72f42A93714ba87();

label218:

goto label157;

label219:

if (isset($Caf4325605347834)) {
	goto label224;
}

$dd3211a322da8474 = [];
goto label93;

label224:

$dd3211a322da8474 = json_decode($Caf4325605347834['override_packages'], true);
goto label93;

label231:

echo htmlspecialchars($Caf4325605347834['email']);

label236:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="member_group_id">Member Group</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="member_group_id" id="member_group_id" class="form-control select2" data-toggle="select2">' . "\n" . '                                                            <option></option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (aD052A625C6Ac011() as $fb719dae9595b9fa) {
	goto label257;

	label243:

	echo 'value="';
	echo intval($fb719dae9595b9fa['group_id']);
	echo '">';
	echo $fb719dae9595b9fa['group_name'];
	goto label254;

	label254:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label279;

	label257:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($Caf4325605347834)) {
		goto label243;
	}

	if (!(intval($Caf4325605347834['member_group_id']) == intval($fb719dae9595b9fa['group_id']))) {
		goto label277;
	}

	echo 'selected ';

	label277:

	goto label243;

	label279:
}

goto label294;

label282:

echo ' User</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($Caf4325605347834)) {
	goto label50;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo intval($Caf4325605347834['id']);
goto label49;

label294:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="owner_id">Owner</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="owner_id" id="owner_id" class="form-control select2" data-toggle="select2">' . "\n" . '                                                            ';
if (isset($Caf4325605347834['owner_id']) && ($C0a1fd30f0173389 = bA89228dC958Ce05(intval($Caf4325605347834['owner_id'])))) {
	goto label208;
}

echo '                                                            <option value="';
echo $E59d0debc75e7be8['id'];
echo '">';
goto label204;

label313:

echo ' value="';
echo isset($Caf4325605347834) ? '' : Fc34407B2842461B(10 < $db0a61ef32b89a27['minimum_password_length'] ? $db0a61ef32b89a27['minimum_password_length'] : 10);
echo '" data-indicator="pwindicator">' . "\n" . '                                                        <div id="pwindicator">' . "\n" . '                                                            <div class="bar"></div>' . "\n" . '                                                            <div class="label"></div>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="email">Email Address</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="email" id="email" class="form-control" name="email" value="';

if (!isset($Caf4325605347834)) {
	goto label236;
}

goto label231;

label336:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <a href="javascript: void(0);" onClick="clearOwner();" class="btn btn-warning" style="width: 100%">Clear</a>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="credits">Credits</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="credits" onkeypress="return isNumberKey(event)" name="credits" value="';

if (isset($Caf4325605347834)) {
	goto label342;
}

echo '0';
goto label348;

label342:

goto label343;

label343:

echo intval($Caf4325605347834['credits']);

label348:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="credits_reason" name="credits_reason" placeholder="Reason for Adjustment..." value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_dns">Reseller DNS</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="reseller_dns" name="reseller_dns" value="';

if (!isset($Caf4325605347834)) {
	goto label359;
}

echo htmlspecialchars($Caf4325605347834['reseller_dns']);
goto label359;

label359:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="notes">Notes</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">';

if (!isset($Caf4325605347834)) {
	goto label366;
}

echo $Caf4325605347834['notes'];

label366:

goto label14;

label367:

include 'footer.php';

?>