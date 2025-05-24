<?php


goto label371;

label1:

echo '                                                            </optgroup>' . "\r\n" . '                                                            ';

label2:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                ';

label3:

if (!isset($e6ceb472dd6d165f)) {
	goto label439;
}

goto label435;

label8:

$F5ba2106d5227309 = $c050a23c479bc67e['user'];

if (!(0 < $F5ba2106d5227309['package_id'])) {
	goto label20;
}

$e6ceb472dd6d165f = Fddf8Da6ab3Fe47b($F5ba2106d5227309['package_id']);

label20:

goto label21;

label21:

$F6edd90960a3bd9d = 'Enigma Device';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label74;

label27:

if (!isset($F5ba2106d5227309)) {
	goto label32;
}

echo 'Add ';

label32:

echo 'Package</label>' . "\r\n" . '                                                    <div class="col-md-8">' . "\r\n" . '                                                        <select name="package" id="package" class="form-control select2" data-toggle="select2">' . "\r\n" . '                                                            ';

if (!isset($F5ba2106d5227309)) {
	goto label267;
}

goto label266;

label38:

echo "\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label558;

label40:

echo htmlspecialchars($F5ba2106d5227309['reseller_notes']);

label45:

echo '</textarea>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t";

if (!isset($c050a23c479bc67e['device_id'])) {
	goto label475;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="device-info">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Line Username</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" readonly class="form-control sticky" id="username" value="';
goto label166;

label52:

echo ' selected';

label53:

echo '>';
echo $E59d0debc75e7be8['username'];
echo '</option>' . "\r\n" . '                                                            </optgroup>' . "\r\n" . '                                                            ';
goto label196;

label58:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="review-purchase">' . "\r\n" . '                                        <div class="row">' . "\r\n" . '                                            <div class="col-12">' . "\r\n" . '                                                <div class="alert alert-danger" role="alert" style="display:none;" id="no-credits">' . "\r\n" . '                                                    <i class="mdi mdi-block-helper mr-2"></i> You do not have enough credits to complete this transaction!' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <table class="table table-striped table-borderless" id="credits-cost">' . "\r\n" . '                                                        <thead>' . "\r\n" . '                                                            <tr>' . "\r\n" . '                                                                <th class="text-center">Total Credits</th>' . "\r\n" . '                                                                <th class="text-center">Purchase Cost</th>' . "\r\n" . '                                                                <th class="text-center">Remaining Credits</th>' . "\r\n" . '                                                            </tr>' . "\r\n" . '                                                        </thead>' . "\r\n" . '                                                        <tbody>' . "\r\n" . '                                                            <tr>' . "\r\n" . '                                                                <td class="text-center">';
echo number_format($E59d0debc75e7be8['credits'], 0);
echo '</td>' . "\r\n" . '                                                                <td class="text-center" id="cost_credits">0</td>' . "\r\n" . '                                                                <td class="text-center" id="remaining_credits">';
echo number_format($E59d0debc75e7be8['credits'], 0);
echo '</td>' . "\r\n" . '                                                            </tr>' . "\r\n" . '                                                        </tbody>' . "\r\n" . '                                                    </table>' . "\r\n" . '                                                    <table id="datatable-review" class="table table-striped table-borderless dt-responsive nowrap" style="margin-top:30px;">' . "\r\n" . '                                                        <thead>' . "\r\n" . '                                                            <tr>' . "\r\n" . '                                                                <th class="text-center"></th>' . "\r\n" . '                                                                <th>';
goto label380;

label74:

if (isset($c050a23c479bc67e)) {
	goto label79;
}

echo 'Add';
goto label158;

label79:

echo 'Edit';
goto label158;

label81:

if (!isset($F5ba2106d5227309)) {
	goto label454;
}

if (!is_null($F5ba2106d5227309['exp_date'])) {
	goto label94;
}

echo '" disabled="disabled';
goto label454;

label94:

goto label448;

label95:

foreach (json_decode($F5ba2106d5227309['allowed_ips'], true) as $b38e11ffdc6a3abb) {
	echo '                                                            <option value="';
	echo $b38e11ffdc6a3abb;
	echo '">';
	echo $b38e11ffdc6a3abb;
	echo '</option>' . "\r\n" . '                                                            ';
}

label109:

echo '                                                            </select>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>' . "\r\n" . '                                                        <div class="col-md-2">' . "\r\n" . '                                                            <input name="is_isplock" id="is_isplock" type="checkbox" ';

if (!isset($F5ba2106d5227309)) {
	goto label410;
}

goto label404;

label115:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#device-info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi mdi-cellphone-key mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Device Info</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t";

label116:

if (!$db0a61ef32b89a27['allow_restrictions']) {
	goto label121;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-hazard-lights mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Restrictions</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n" . '                                    ';

label121:

goto label184;

label122:

if (!isset(XUI::$rRequest['id'])) {
	goto label20;
}

$c050a23c479bc67e = EF70A93E98Fb7ce9(XUI::$rRequest['id']);
if (!(!$c050a23c479bc67e || !$c050a23c479bc67e['user'] || !$c050a23c479bc67e['user']['is_e2'] || !e589A4bf54A2daD1('line', $c050a23c479bc67e['user']['id']))) {
	goto label157;
}

E72F42a93714BA87();

label157:

goto label8;

label158:

if (!isset(XUI::$rRequest['trial'])) {
	goto label164;
}

echo ' Trial';

label164:

echo ' Enigma Device</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n" . '                ';
goto label308;

label166:

echo htmlspecialchars($F5ba2106d5227309['username']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Line Password</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" readonly class="form-control sticky" id="password" value="';
echo htmlspecialchars($F5ba2106d5227309['password']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="modem_mac">Modem MAC</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="modem_mac" name="modem_mac" value="';
echo htmlspecialchars($c050a23c479bc67e['modem_mac']);
goto label460;

label184:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n" . '                                        <a href="#review-purchase" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n" . '                                            <i class="mdi mdi-book-open-variant mr-1"></i>' . "\r\n" . '                                            <span class="d-none d-sm-inline">Review Purchase</span>' . "\r\n" . '                                        </a>' . "\r\n" . '                                    </li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="mac">MAC Address</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="mac" name="mac" value="';

if (!isset($c050a23c479bc67e)) {
	goto label194;
}

echo htmlspecialchars($c050a23c479bc67e['mac']);

label194:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                ';
goto label244;

label196:

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label485;
}

echo '                                                            <optgroup label="Direct Reports">' . "\r\n" . '                                                                ';

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label210;

	label210:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                                                <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $f7107e3a92443147))) {
		goto label228;
	}

	goto label227;

	label227:

	echo ' selected';

	label228:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n" . '                                                                ';
	goto label234;

	label234:

	goto label236;

	label236:
}

echo '                                                            </optgroup>' . "\r\n" . '                                                            ';
goto label485;

label240:

echo '                            <input type="hidden" name="trial" value="1" />' . "\r\n" . '                            ';

label241:

goto label418;

label242:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
goto label412;

label244:

if (!(0 < count($db0a61ef32b89a27['all_reports']))) {
	goto label3;
}

echo '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="member_id">Owner</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<optgroup label="Myself">' . "\r\n" . '                                                                <option value="';
echo $E59d0debc75e7be8['id'];
echo '"';
if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $E59d0debc75e7be8['id']))) {
	goto label53;
}

goto label52;

label266:

echo '                                                            <option value="">No Changes</option>' . "\r\n" . '                                                            ';

label267:

foreach (D8c8284136938ef0($E59d0debc75e7be8['member_group_id'], 'e2') as $cc386f9ba082650e) {
	if (!(($cc386f9ba082650e['is_trial'] && isset(XUI::$rRequest['trial'])) || ($cc386f9ba082650e['is_official'] && !isset(XUI::$rRequest['trial'])))) {
		goto label304;
	}

	echo '                                                                <option value="';
	echo intval($cc386f9ba082650e['id']);
	echo '">';
	echo htmlspecialchars($cc386f9ba082650e['package_name']);
	echo '</option>' . "\r\n" . '                                                                ';

	label304:
}

echo '                                                        </select>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div id="package_info" style="display: none;">' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="package_cost">Package Cost</label>' . "\r\n" . '                                                        <div class="col-md-3">' . "\r\n" . '                                                            <input readonly type="text" class="form-control text-center" id="package_cost" name="package_cost" value="">' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                        <label class="col-md-2 col-form-label" for="package_duration">Duration</label>' . "\r\n" . '                                                        <div class="col-md-3">' . "\r\n" . '                                                            <input readonly type="text" class="form-control text-center" id="package_duration" name="package_duration" value="">' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div class="form-group row mb-4" id="package_warning" style="display:none;">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="max_connections">Warning Notice</label>' . "\r\n" . '                                                    <div class="col-md-8">' . "\r\n" . '                                                        <div class="alert alert-warning" role="alert">' . "\r\n" . '                                                            The package you have selected is incompatible with the existing package. This could be due to the number of connections or other restrictions.<br/><br/>You can still upgrade to this package, however the time added will be from today and not from the end of the original package.' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="exp_date">Expiration Date</label>' . "\r\n" . '                                                    <div class="col-md-3">' . "\r\n" . '                                                        <input readonly type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="';
goto label81;

label308:
if (!$ba4f280bd137bfad && !isset($F5ba2106d5227309) && isset(XUI::$rRequest['trial'])) {
	goto label442;
}
if (!(isset($F5ba2106d5227309) && $F5ba2106d5227309['is_trial'])) {
	goto label327;
}

echo '                <div class="alert alert-info" role="alert">' . "\r\n" . '                    This device is on a trial package. Adding a new package will convert it to an official package.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label327:
if (!(isset($F5ba2106d5227309) && !in_array($F5ba2106d5227309['member_id'], array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['direct_reports'])))) {
	goto label390;
}

goto label355;

label347:

echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['series'];
echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['stations'];
echo '</th>' . "\r\n" . '                                                            </tr>' . "\r\n" . '                                                        </thead>' . "\r\n" . '                                                        <tbody></tbody>' . "\r\n" . '                                                    </table>' . "\r\n" . '                                                </div>' . "\r\n" . '                                            </div> <!-- end col -->' . "\r\n" . '                                        </div> <!-- end row -->' . "\r\n" . '                                        <ul class="list-inline wizard mb-0">' . "\r\n" . '                                            <li class="prevb list-inline-item">' . "\r\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n" . '                                            </li>' . "\r\n" . '                                            <li class="next list-inline-item float-right">' . "\r\n" . '                                                <input name="submit_line" id="submit_button" type="submit" class="btn btn-primary purchase" value="Purchase" />' . "\r\n" . '                                            </li>' . "\r\n" . '                                        </ul>' . "\r\n" . '                                    </div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div>' . "\r\n" . '                ';
goto label441;

label355:

$C0a1fd30f0173389 = BA89228DC958ce05($F5ba2106d5227309['member_id']);
echo '                <div class="alert alert-info" role="alert">' . "\r\n" . '                    This device does not belong to you, although you have the right to edit this device you should notify the device\'s owner <strong><a href="user?id=';
echo $C0a1fd30f0173389['id'];
echo '">';
echo $C0a1fd30f0173389['username'];
goto label389;

label367:

goto label369;

label368:

echo 'Trials have been disabled by the administrator. Please try again later.';

label369:

echo '                </div>' . "\r\n" . '                ';
goto label38;

label371:

include 'session.php';
include 'functions.php';

if (BaF6e9Ef7775B5A9()) {
	goto label379;
}

e72f42a93714Ba87();

label379:

goto label122;

label380:

echo $_['bouquet_name'];
echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['streams'];
echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['movies'];
goto label347;

label389:

echo '</a></strong> when doing so.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label390:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\r\n\t\t\t\t\t\t\t";
if (isset($c050a23c479bc67e['device_id']) && !isset($cbcf0bbd5e139431)) {
	goto label242;
}

if (!isset(XUI::$rRequest['trial'])) {
	goto label241;
}

goto label240;

label404:

if (!($F5ba2106d5227309['is_isplock'] == 1)) {
	goto label410;
}

echo 'checked ';

label410:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>' . "\r\n" . '                                                        <div class="col-md-8 input-group">' . "\r\n" . '                                                            <input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="';
goto label424;

label412:

echo intval($c050a23c479bc67e['device_id']);
echo '" />' . "\r\n\t\t\t\t\t\t\t";

label418:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t";

if (!isset($c050a23c479bc67e['device_id'])) {
	goto label116;
}

goto label115;

label424:

if (!isset($F5ba2106d5227309)) {
	goto label433;
}

echo htmlspecialchars($F5ba2106d5227309['isp_desc']);

label433:

echo '">' . "\r\n" . '                                                            <div class="input-group-append">' . "\r\n" . '                                                                <a href="javascript:void(0)" onclick="clearISP()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\r\n" . '                                                            </div>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                    ';

label434:

goto label58;

label435:

echo '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="orig_package">Original Package</label>' . "\r\n" . '                                                    <div class="col-md-8">' . "\r\n" . '                                                        <input type="text" readonly class="form-control" id="orig_package" name="orig_package" value="';
echo $e6ceb472dd6d165f['package_name'];
echo '">' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                ';

label439:

echo '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="package">';
goto label27;

label441:

goto label38;

label442:

echo '                <div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\r\n" . '                    ';

if ($f1dcaed925076e67['disable_trial']) {
	goto label368;
}

echo 'You have used your allowance of trials for this period. Please try again later.';
goto label367;

label448:

echo date('Y-m-d H:i', $F5ba2106d5227309['exp_date']);

label454:

echo '">' . "\r\n" . '                                                    </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">';

if (!isset($c050a23c479bc67e)) {
	goto label45;
}

goto label40;

label460:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="local_ip">Local IP</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="local_ip" name="local_ip" value="';
echo htmlspecialchars($c050a23c479bc67e['local_ip']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="enigma_version">Enigma Version</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="enigma_version" name="enigma_version" value="';
echo htmlspecialchars($c050a23c479bc67e['enigma_version']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="cpu">CPU</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="cpu" name="cpu" value="';
goto label540;

label474:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="clearDevice();" class="btn btn-warning">Clear Device Info</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t";

label475:

if (!$db0a61ef32b89a27['allow_restrictions']) {
	goto label434;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-options">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n" . '                                                <div class="alert alert-warning" role="alert" id="advanced_warning" style="display: none;">' . "\r\n" . '                                                    This device is linked to a user, the options for that user will be used.' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div id="advanced_info">' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="ip_field">Allowed IP Addresses</label>' . "\r\n" . '                                                        <div class="col-md-8 input-group">' . "\r\n" . '                                                            <input type="text" id="ip_field" class="form-control" value="">' . "\r\n" . '                                                            <div class="input-group-append">' . "\r\n" . '                                                                <a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\r\n" . '                                                                <a href="javascript:void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\r\n" . '                                                            </div>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="allowed_ips">&nbsp;</label>' . "\r\n" . '                                                        <div class="col-md-8">' . "\r\n" . '                                                            <select id="allowed_ips" name="allowed_ips[]" size=6 class="form-control" multiple="multiple">' . "\r\n" . '                                                            ';

if (!isset($c050a23c479bc67e)) {
	goto label109;
}

goto label95;

label485:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label2;
}

echo '                                                            <optgroup label="Indirect Reports">' . "\r\n" . '                                                                ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label518;

	label503:
	if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $f7107e3a92443147))) {
		goto label513;
	}

	echo ' selected';

	label513:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label534;

	label518:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label535;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                                                    <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label503;

	label534:

	echo '</option>' . "\r\n" . '                                                                    ';

	label535:

	goto label537;

	label537:
}

goto label1;

label540:

echo htmlspecialchars($c050a23c479bc67e['cpu']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="lversion">Linux Version</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="lversion" name="lversion" value="';
echo htmlspecialchars($c050a23c479bc67e['lversion']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="token">Token</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="token" name="token" value="';
echo htmlspecialchars($c050a23c479bc67e['token']);
goto label474;

label558:

include 'footer.php';

?>