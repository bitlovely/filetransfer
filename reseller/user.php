<?php


goto label241;

label1:
if (!($db0a61ef32b89a27['allow_change_password'] || !isset($Caf4325605347834))) {
	goto label55;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="password">';

if (!isset($Caf4325605347834)) {
	goto label15;
}

echo 'Change ';

label15:

goto label233;

label16:

echo '                                                            </optgroup>' . "\n" . '                                                            ';

label17:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label18:

goto label327;

label19:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo intval($Caf4325605347834['id']);
echo '" />' . "\n\t\t\t\t\t\t\t";

label26:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";
goto label414;

label28:

echo 'name="submit_user" type="submit" class="btn btn-primary purchase" value="Purchase" />' . "\n" . '                                            </li>' . "\n" . '                                        </ul>' . "\n" . '                                    </div>' . "\n" . '                                    ';

label29:

echo "\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label489;

label31:

echo isset($Caf4325605347834) ? '' : ($db0a61ef32b89a27['allow_change_username'] ? fC34407b2842461b(10 < XUI::$rSettings['pass_length'] ? XUI::$rSettings['pass_length'] : 10) : '');
echo '" data-indicator="pwindicator">' . "\n" . '                                                        <div id="pwindicator">' . "\n" . '                                                            <div class="bar"></div>' . "\n" . '                                                            <div class="label"></div>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label55:

if (!isset($Caf4325605347834)) {
	goto label401;
}

if (!(($Bb672d1983256a93 = array_search($Caf4325605347834['id'], $db0a61ef32b89a27['all_reports'])) !== false)) {
	goto label434;
}

goto label432;

label71:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="email">Email Address</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="email" id="email" class="form-control" name="email" value="';

if (!isset($Caf4325605347834)) {
	goto label81;
}

echo htmlspecialchars($Caf4325605347834['email']);

label81:

goto label185;

label82:

echo '<div class="wrapper boxed-layout">' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($Caf4325605347834)) {
	goto label486;
}

echo 'Add';
goto label485;

label90:

echo 'disabled ';

label91:

echo 'type="text" class="form-control" id="username" name="username" value="';

if (isset($Caf4325605347834)) {
	goto label394;
}

echo $db0a61ef32b89a27['allow_change_username'] ? FC34407b2842461B(10) : '';
goto label393;

label105:

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <table class="table table-striped table-borderless" id="credits-cost">' . "\n" . '                                                        <thead>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <th class="text-center">Total Credits</th>' . "\n" . '                                                                <th class="text-center">Purchase Cost</th>' . "\n" . '                                                                <th class="text-center">Remaining Credits</th>' . "\n" . '                                                            </tr>' . "\n" . '                                                        </thead>' . "\n" . '                                                        <tbody>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <td class="text-center">';
echo number_format($E59d0debc75e7be8['credits'], 0);
echo '</td>' . "\n" . '                                                                <td class="text-center" id="cost_credits">';
echo number_format($db0a61ef32b89a27['create_sub_resellers_price'], 0);
goto label294;

label120:

echo '                                                            </optgroup>' . "\n" . '                                                            ';

label121:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label17;
}

echo '                                                            <optgroup label="Indirect Reports">' . "\n" . '                                                                ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label157;

	label139:

	echo '</option>' . "\n" . '                                                                    ';

	label140:

	goto label173;

	label142:
	if (!(isset($Caf4325605347834['owner_id']) && ($Caf4325605347834['owner_id'] == $f7107e3a92443147))) {
		goto label152;
	}

	echo ' selected';

	label152:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label139;

	label157:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label140;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                                                    <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label142;

	label173:
}

goto label16;

label176:

echo $C0a1fd30f0173389['username'];
echo '</a></strong> when doing so.' . "\n" . '                </div>' . "\n" . '                ';

label179:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($Caf4325605347834)) {
	goto label26;
}

goto label19;

label185:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_dns">Custom DNS</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="reseller_dns" name="reseller_dns" value="';

if (!isset($Caf4325605347834)) {
	goto label195;
}

echo htmlspecialchars($Caf4325605347834['reseller_dns']);

label195:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="notes">Notes</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">';
goto label197;

label197:

if (!isset($Caf4325605347834)) {
	goto label203;
}

echo $Caf4325605347834['notes'];

label203:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            ';

if (isset($Caf4325605347834)) {
	goto label430;
}

goto label428;

label208:
if (!(isset(XUI::$rRequest['id']) && (!($Caf4325605347834 = Ba89228dC958Ce05(XUI::$rRequest['id'])) || (XUI::$rRequest['id'] == $E59d0debc75e7be8['id'])))) {
	goto label230;
}

E72f42a93714ba87();

label230:

$F6edd90960a3bd9d = 'User';
include 'header.php';
goto label82;

label233:

echo 'Password</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <input type="text" class="form-control" id="password" name="password"';

if (!isset($Caf4325605347834)) {
	goto label239;
}

echo ' placeholder="Enter a new password here to change it"';

label239:

echo ' value="';
goto label31;

label241:

include 'session.php';
include 'functions.php';

if (bAf6e9EF7775B5A9()) {
	goto label249;
}

e72F42A93714Ba87();

label249:

goto label208;

label250:

echo '</option>' . "\n" . '                                                            </optgroup>' . "\n" . '                                                            ';

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label121;
}

echo '                                                            <optgroup label="Direct Reports">' . "\n" . '                                                                ';

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label265;

	label265:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                                                <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset($Caf4325605347834['owner_id']) && ($Caf4325605347834['owner_id'] == $f7107e3a92443147))) {
		goto label283;
	}

	goto label282;

	label282:

	echo ' selected';

	label283:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\n" . '                                                                ';
	goto label289;

	label289:

	goto label291;

	label291:
}

goto label120;

label294:

echo '</td>' . "\n" . '                                                                <td class="text-center" id="remaining_credits">';
echo number_format($E59d0debc75e7be8['credits'] - $db0a61ef32b89a27['create_sub_resellers_price'], 0);
echo '</td>' . "\n" . '                                                            </tr>' . "\n" . '                                                        </tbody>' . "\n" . '                                                    </table>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                        </div>' . "\n" . '                                        <ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                            </li>' . "\n" . '                                            <li class="list-inline-item float-right">' . "\n" . '                                                <input ';

if (!(($E59d0debc75e7be8['credits'] - $db0a61ef32b89a27['create_sub_resellers_price']) < 0)) {
	goto label28;
}

echo 'disabled ';
goto label28;

label313:
if (!(isset($Caf4325605347834['owner_id']) && ($Caf4325605347834['owner_id'] == $E59d0debc75e7be8['id']))) {
	goto label323;
}

echo ' selected';

label323:

echo '>';
echo $E59d0debc75e7be8['username'];
goto label250;

label327:

if (!(1 < count($db0a61ef32b89a27['subresellers']))) {
	goto label71;
}

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="member_group_id">Member Group</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="member_group_id" id="member_group_id" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (ad052A625c6ac011() as $fb719dae9595b9fa) {
	goto label342;

	label342:

	if (in_array($fb719dae9595b9fa['group_id'], $db0a61ef32b89a27['subresellers'])) {
		goto label353;
	}

	goto label387;

	label353:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($Caf4325605347834)) {
		goto label375;
	}

	goto label361;

	label361:

	if (!(intval($Caf4325605347834['member_group_id']) == intval($fb719dae9595b9fa['group_id']))) {
		goto label375;
	}

	echo 'selected ';

	label375:

	echo 'value="';
	goto label378;

	label378:

	echo intval($fb719dae9595b9fa['group_id']);
	echo '">';
	echo $fb719dae9595b9fa['group_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label387:

	goto label389;

	label389:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';
goto label71;

label393:

goto label399;

label394:

echo htmlspecialchars($Caf4325605347834['username']);

label399:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';
goto label1;

label401:

if (!(0 < count($db0a61ef32b89a27['all_reports']))) {
	goto label18;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="owner_id">Owner</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="owner_id" id="owner_id" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<optgroup label="Myself">' . "\n" . '                                                                <option value="';
echo $E59d0debc75e7be8['id'];
echo '"';
goto label313;

label414:

if (isset($Caf4325605347834)) {
	goto label418;
}

echo '                                    <li class="nav-item">' . "\n" . '                                        <a href="#review-purchase" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n" . '                                            <i class="mdi mdi-book-open-variant mr-1"></i>' . "\n" . '                                            <span class="d-none d-sm-inline">Review Purchase</span>' . "\n" . '                                        </a>' . "\n" . '                                    </li>' . "\n" . '                                    ';

label418:

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Username</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input ';
if (!(!$db0a61ef32b89a27['allow_change_username'] && isset($Caf4325605347834))) {
	goto label91;
}

goto label90;

label428:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                            ';
goto label431;

label430:

echo '                                            <li class="list-inline-item float-right">' . "\n" . '                                                <input name="submit_user" type="submit" class="btn btn-primary purchase" value="Edit" />' . "\n" . '                                            </li>' . "\n" . '                                            ';

label431:

goto label471;

label432:

unset($db0a61ef32b89a27['all_reports'][$Bb672d1983256a93]);

label434:

if (!(($Bb672d1983256a93 = array_search($Caf4325605347834['id'], $db0a61ef32b89a27['direct_reports'])) !== false)) {
	goto label447;
}

unset($db0a61ef32b89a27['direct_reports'][$Bb672d1983256a93]);

label447:

goto label401;

label448:
if (!(isset($Caf4325605347834) && !in_array($Caf4325605347834['id'], $db0a61ef32b89a27['direct_reports']))) {
	goto label179;
}

$C0a1fd30f0173389 = ba89228Dc958cE05($Caf4325605347834['owner_id']);
echo '                <div class="alert alert-info" role="alert">' . "\n" . '                    This user does not directly report to you, although you have the right to edit this user you should notify the user\'s parent <strong><a href="user?id=';
echo $C0a1fd30f0173389['id'];
echo '">';
goto label176;

label471:

echo "\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t";

if (isset($Caf4325605347834)) {
	goto label29;
}

echo '                                    <div class="tab-pane" id="review-purchase">' . "\n" . '                                        <div class="row">' . "\n" . '                                            <div class="col-12">' . "\n" . '                                                ';

if (!(($E59d0debc75e7be8['credits'] - $db0a61ef32b89a27['create_sub_resellers_price']) < 0)) {
	goto label105;
}

echo '                                                <div class="alert alert-danger" role="alert" id="no-credits">' . "\n" . '                                                    <i class="mdi mdi-block-helper mr-2"></i> You do not have enough credits to complete this transaction!' . "\n" . '                                                </div>' . "\n" . '                                                ';
goto label105;

label485:

goto label487;

label486:

echo 'Edit';

label487:

echo ' User</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n" . '                ';
goto label448;

label489:

include 'footer.php';

?>