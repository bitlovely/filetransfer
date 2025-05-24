<?php


goto label519;

label1:

echo '                <div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n" . '                    ';

if ($f1dcaed925076e67['disable_trial']) {
	goto label7;
}

echo 'You have used your allowance of trials for this period. Please try again later.';
goto label456;

label7:

goto label455;

label8:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>' . "\n" . '                                                    <div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="';

if (!isset($F5ba2106d5227309)) {
	goto label446;
}

echo htmlspecialchars($F5ba2106d5227309['isp_desc']);
goto label446;

label19:

if (!(0 < $F5ba2106d5227309['package_id'])) {
	goto label29;
}

$e6ceb472dd6d165f = fddF8da6AB3Fe47b($F5ba2106d5227309['package_id']);

label29:

$F6edd90960a3bd9d = 'Line';
goto label459;

label31:

echo 'Add';
goto label34;

label33:

echo 'Edit';

label34:

goto label242;

label35:

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label176;
}

echo '                                                            <optgroup label="Direct Reports">' . "\n" . '                                                                ';

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label49;

	label49:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                                                <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $f7107e3a92443147))) {
		goto label67;
	}

	goto label66;

	label66:

	echo ' selected';

	label67:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\n" . '                                                                ';
	goto label73;

	label73:

	goto label75;

	label75:
}

echo '                                                            </optgroup>' . "\n" . '                                                            ';
goto label176;

label79:

echo '                                                            <option value="">No Changes</option>' . "\n" . '                                                            ';

label80:

foreach (d8C8284136938ef0($E59d0debc75e7be8['member_group_id'], 'line') as $cc386f9ba082650e) {
	if (!(($cc386f9ba082650e['is_trial'] && isset(XUI::$rRequest['trial'])) || ($cc386f9ba082650e['is_official'] && !isset(XUI::$rRequest['trial'])))) {
		goto label117;
	}

	echo '                                                                <option value="';
	echo intval($cc386f9ba082650e['id']);
	echo '">';
	echo htmlspecialchars($cc386f9ba082650e['package_name']);
	echo '</option>' . "\n" . '                                                                ';

	label117:
}

echo '                                                        </select>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div id="package_info" style="display: none;">' . "\n" . '                                                    <div class="form-group row mb-4">' . "\n" . '                                                        <label class="col-md-4 col-form-label" for="package_cost">Package Cost</label>' . "\n" . '                                                        <div class="col-md-2">' . "\n" . '                                                            <input readonly type="text" class="form-control text-center" id="package_cost" name="package_cost" value="">' . "\n" . '                                                        </div>' . "\n" . '                                                        <label class="col-md-3 col-form-label" for="package_duration">Duration</label>' . "\n" . '                                                        <div class="col-md-3">' . "\n" . '                                                            <input readonly type="text" class="form-control text-center" id="package_duration" name="package_duration" value="">' . "\n" . '                                                        </div>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4" id="package_warning" style="display:none;">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="max_connections">Warning Notice</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n" . '                                                        <div class="alert alert-warning" role="alert">' . "\n" . '                                                            The package you have selected is incompatible with the existing package. This could be due to the number of connections or other restrictions.<br/><br/>You can still upgrade to this package, however the time added will be from today and not from the end of the original package.' . "\n" . '                                                        </div>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="max_connections">Max Connections</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <input readonly type="text" class="form-control text-center" id="max_connections" name="max_connections" value="';
goto label334;

label121:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="restrictions">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ip_field">Allowed IP Addresses</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="ip_field" class="form-control" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allowed_ips">&nbsp;</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="allowed_ips" name="allowed_ips[]" size=6 class="form-control" multiple="multiple">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

if (!isset($F5ba2106d5227309)) {
	goto label140;
}

foreach (json_decode($F5ba2106d5227309['allowed_ips'], true) as $b38e11ffdc6a3abb) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b38e11ffdc6a3abb;
	echo '">';
	echo $b38e11ffdc6a3abb;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

label140:

goto label377;

label141:

echo '">' . "\n" . '                                                    </div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="exp_date">Expiration Date</label>' . "\n" . '                                                    <div class="col-md-3">' . "\n" . '                                                        <input readonly type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="';

if (!isset($F5ba2106d5227309)) {
	goto label300;
}

if (!is_null($F5ba2106d5227309['exp_date'])) {
	goto label294;
}

echo '" disabled="disabled';
goto label293;

label155:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label156:

goto label241;

label157:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="password">Password</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="password" name="password" placeholder="Auto-generate if blank" value="';
goto label231;

label159:

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="orig_package">Original Package</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n" . '                                                        <input type="text" readonly class="form-control" id="orig_package" name="orig_package" value="';
echo $e6ceb472dd6d165f['package_name'];
echo '">' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                ';

label163:

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="package">';
goto label165;

label165:

if (!isset($F5ba2106d5227309)) {
	goto label170;
}

echo 'Add ';

label170:

echo 'Package</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n" . '                                                        <select name="package" id="package" class="form-control select2" data-toggle="select2">' . "\n" . '                                                            ';

if (!isset($F5ba2106d5227309)) {
	goto label80;
}

goto label79;

label176:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label513;
}

echo '                                                            <optgroup label="Indirect Reports">' . "\n" . '                                                                ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label194;

	label194:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label211;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                                                    <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label213;

	label210:

	echo '</option>' . "\n" . '                                                                    ';

	label211:

	goto label228;

	label213:
	if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $f7107e3a92443147))) {
		goto label223;
	}

	echo ' selected';

	label223:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label210;

	label228:
}

goto label512;

label231:

if (!isset($F5ba2106d5227309)) {
	goto label240;
}

echo htmlspecialchars($F5ba2106d5227309['password']);

label240:

echo '" data-indicator="pwindicator">' . "\n" . '                                                        <div id="pwindicator">' . "\n" . '                                                            <div class="bar"></div>' . "\n" . '                                                            <div class="label"></div>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label241:

goto label409;

label242:

if (!isset(XUI::$rRequest['trial'])) {
	goto label248;
}

echo ' Trial';

label248:

echo ' Line</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n" . '                ';
if (!$ba4f280bd137bfad && !isset($F5ba2106d5227309) && isset(XUI::$rRequest['trial'])) {
	goto label571;
}

goto label301;

label261:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Username</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="username" name="username" placeholder="Auto-generate if blank" value="';

if (!isset($F5ba2106d5227309)) {
	goto label271;
}

echo htmlspecialchars($F5ba2106d5227309['username']);

label271:

echo '" data-indicator="unindicator">' . "\n" . '                                                        <div id="unindicator">' . "\n" . '                                                            <div class="bar"></div>' . "\n" . '                                                            <div class="label"></div>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';
goto label498;

label273:

echo $_['streams'];
echo '</th>' . "\n" . '                                                                <th class="text-center">';
echo $_['movies'];
echo '</th>' . "\n" . '                                                                <th class="text-center">';
echo $_['series'];
goto label566;

label282:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (isset($F5ba2106d5227309)) {
	goto label494;
}

if (!isset(XUI::$rRequest['trial'])) {
	goto label493;
}

echo '                            <input type="hidden" name="trial" value="1" />' . "\n" . '                            ';
goto label493;

label293:

goto label300;

label294:

echo date('Y-m-d H:i', $F5ba2106d5227309['exp_date']);

label300:

goto label528;

label301:
if (!(isset($F5ba2106d5227309) && $F5ba2106d5227309['is_trial'])) {
	goto label309;
}

echo '                <div class="alert alert-info" role="alert">' . "\n" . '                    This user is on a trial package. Adding a new package will convert it to an official package.' . "\n" . '                </div>' . "\n" . '                ';

label309:
if (!(isset($F5ba2106d5227309) && !in_array($F5ba2106d5227309['member_id'], array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['direct_reports'])))) {
	goto label282;
}

$C0a1fd30f0173389 = bA89228dc958CE05($F5ba2106d5227309['member_id']);
goto label540;

label334:

if (isset($F5ba2106d5227309)) {
	goto label339;
}

echo '1';
goto label141;

label339:

echo htmlspecialchars($F5ba2106d5227309['max_connections']);
goto label141;

label345:

if (!isset(XUI::$rRequest['id'])) {
	goto label29;
}

$F5ba2106d5227309 = B5AD1d95A92Ce732(XUI::$rRequest['id']);
if (!(!$F5ba2106d5227309 || $F5ba2106d5227309['is_mag'] || $F5ba2106d5227309['is_e2'] || !E589A4bf54a2Dad1('line', $F5ba2106d5227309['id']))) {
	goto label376;
}

E72f42A93714Ba87();

label376:

goto label19;

label377:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ua_field">Allowed User-Agents</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="ua_field" class="form-control" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="add_ua" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="remove_ua" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allowed_ua">&nbsp;</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="allowed_ua" name="allowed_ua[]" size=6 class="form-control" multiple="multiple">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

if (!isset($F5ba2106d5227309)) {
	goto label396;
}

foreach (json_decode($F5ba2106d5227309['allowed_ua'], true) as $Bc11ab076e603a99) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Bc11ab076e603a99;
	echo '">';
	echo $Bc11ab076e603a99;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

label396:

goto label475;

label397:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_isplock" id="is_isplock" type="checkbox" ';

if (!isset($F5ba2106d5227309)) {
	goto label8;
}

if (!($F5ba2106d5227309['is_isplock'] == 1)) {
	goto label8;
}

echo 'checked ';
goto label8;

label409:

if (!(0 < count($db0a61ef32b89a27['all_reports']))) {
	goto label514;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="member_id">Owner</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<optgroup label="Myself">' . "\n" . '                                                                <option value="';
echo $E59d0debc75e7be8['id'];
echo '"';
if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $E59d0debc75e7be8['id']))) {
	goto label488;
}

goto label487;

label431:

if (!isset($F5ba2106d5227309)) {
	goto label440;
}

echo htmlspecialchars($F5ba2106d5227309['reseller_notes']);

label440:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

if (!$db0a61ef32b89a27['allow_restrictions']) {
	goto label447;
}

goto label121;

label446:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onclick="clearISP()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

label447:

echo '                                    <div class="tab-pane" id="review-purchase">' . "\n" . '                                        <div class="row">' . "\n" . '                                            <div class="col-12">' . "\n" . '                                                <div class="alert alert-danger" role="alert" style="display:none;" id="no-credits">' . "\n" . '                                                    <i class="mdi mdi-block-helper mr-2"></i> You do not have enough credits to complete this transaction!' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <table class="table table-striped table-borderless" id="credits-cost">' . "\n" . '                                                        <thead>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <th class="text-center">Total Credits</th>' . "\n" . '                                                                <th class="text-center">Purchase Cost</th>' . "\n" . '                                                                <th class="text-center">Remaining Credits</th>' . "\n" . '                                                            </tr>' . "\n" . '                                                        </thead>' . "\n" . '                                                        <tbody>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <td class="text-center">';
echo number_format($E59d0debc75e7be8['credits'], 0);
goto label572;

label455:

echo 'Trials have been disabled by the administrator. Please try again later.';

label456:

echo '                </div>' . "\n" . '                ';

label457:

echo "\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label584;

label459:

include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($F5ba2106d5227309)) {
	goto label33;
}

goto label31;

label467:

echo '" />' . "\n\t\t\t\t\t\t\t";

label468:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';

if (!$db0a61ef32b89a27['allow_restrictions']) {
	goto label556;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#restrictions" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-hazard-lights mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Restrictions</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';
goto label556;

label475:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="bypass_ua">Bypass UA Restrictions</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="bypass_ua" id="bypass_ua" type="checkbox" ';

if (!isset($F5ba2106d5227309)) {
	goto label397;
}

if (!($F5ba2106d5227309['bypass_ua'] == 1)) {
	goto label486;
}

echo 'checked ';

label486:

goto label397;

label487:

echo ' selected';

label488:

echo '>';
echo $E59d0debc75e7be8['username'];
echo '</option>' . "\n" . '                                                            </optgroup>' . "\n" . '                                                            ';
goto label35;

label493:

goto label468;

label494:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $F5ba2106d5227309['id'];
goto label467;

label498:

if ($db0a61ef32b89a27['allow_change_password']) {
	goto label157;
}

if (!isset($F5ba2106d5227309)) {
	goto label156;
}

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="password">Password</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" readonly class="form-control" id="password" value="';
echo htmlspecialchars($F5ba2106d5227309['password']);
goto label155;

label512:

echo '                                                            </optgroup>' . "\n" . '                                                            ';

label513:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label514:

if (!isset($e6ceb472dd6d165f)) {
	goto label163;
}

goto label159;

label519:

include 'session.php';
include 'functions.php';

if (bAF6E9ef7775B5a9()) {
	goto label527;
}

e72F42a93714ba87();

label527:

goto label345;

label528:

echo '">' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="contact">Contact Email</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="contact" name="contact" value="';

if (!isset($F5ba2106d5227309)) {
	goto label538;
}

echo htmlspecialchars($F5ba2106d5227309['contact']);

label538:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">';
goto label431;

label540:

echo '                <div class="alert alert-info" role="alert">' . "\n" . '                    This line does not belong to you, although you have the right to edit this line you should notify the line\'s owner <strong><a href="user?id=';
echo $C0a1fd30f0173389['id'];
echo '">';
echo $C0a1fd30f0173389['username'];
echo '</a></strong> when doing so.' . "\n" . '                </div>' . "\n" . '                ';
goto label282;

label548:

echo htmlspecialchars($F5ba2106d5227309['username']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label554:

goto label498;

label555:

goto label261;

label556:

echo '                                    <li class="nav-item">' . "\n" . '                                        <a href="#review-purchase" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n" . '                                            <i class="mdi mdi-book-open-variant mr-1"></i>' . "\n" . '                                            <span class="d-none d-sm-inline">Review Purchase</span>' . "\n" . '                                        </a>' . "\n" . '                                    </li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                ';

if ($db0a61ef32b89a27['allow_change_username']) {
	goto label555;
}

if (!isset($F5ba2106d5227309)) {
	goto label554;
}

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Username</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" readonly class="form-control" id="username" value="';
goto label548;

label566:

echo '</th>' . "\n" . '                                                                <th class="text-center">';
echo $_['stations'];
echo '</th>' . "\n" . '                                                            </tr>' . "\n" . '                                                        </thead>' . "\n" . '                                                        <tbody></tbody>' . "\n" . '                                                    </table>' . "\n" . '                                                </div>' . "\n" . '                                            </div> <!-- end col -->' . "\n" . '                                        </div> <!-- end row -->' . "\n" . '                                        <ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                            </li>' . "\n" . '                                            <li class="next list-inline-item float-right">' . "\n" . '                                                <input name="submit_line" id="submit_button" type="submit" class="btn btn-primary purchase" value="Purchase" />' . "\n" . '                                            </li>' . "\n" . '                                        </ul>' . "\n" . '                                    </div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n" . '                ';
goto label457;

label571:

goto label1;

label572:

echo '</td>' . "\n" . '                                                                <td class="text-center" id="cost_credits">0</td>' . "\n" . '                                                                <td class="text-center" id="remaining_credits">';
echo number_format($E59d0debc75e7be8['credits'], 0);
echo '</td>' . "\n" . '                                                            </tr>' . "\n" . '                                                        </tbody>' . "\n" . '                                                    </table>' . "\n" . '                                                    <table id="datatable-review" class="table table-striped table-borderless dt-responsive nowrap" style="margin-top:30px;">' . "\n" . '                                                        <thead>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <th class="text-center"></th>' . "\n" . '                                                                <th>';
echo $_['bouquet_name'];
echo '</th>' . "\n" . '                                                                <th class="text-center">';
goto label273;

label584:

include 'footer.php';

?>