<?php


goto label26;

label1:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="stb_type">STB Type</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stb_type" name="stb_type" value="';
echo htmlspecialchars($c050a23c479bc67e['stb_type']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="image_version">Image Version</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="image_version" name="image_version" value="';
echo htmlspecialchars($c050a23c479bc67e['image_version']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="hw_version">HW Version</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="hw_version" name="hw_version" value="';
goto label195;

label15:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>' . "\r\n" . '                                                        <div class="col-md-8 input-group">' . "\r\n" . '                                                            <input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="';

if (!isset($F5ba2106d5227309)) {
	goto label25;
}

echo htmlspecialchars($F5ba2106d5227309['isp_desc']);

label25:

goto label367;

label26:

include 'session.php';
include 'functions.php';

if (baf6e9Ef7775B5A9()) {
	goto label34;
}

e72f42a93714ba87();

label34:

goto label521;

label35:

echo '>';
echo $E59d0debc75e7be8['username'];
echo '</option>' . "\r\n" . '                                                            </optgroup>' . "\r\n" . '                                                            ';

if (!(0 < count($db0a61ef32b89a27['direct_reports']))) {
	goto label294;
}

echo '                                                            <optgroup label="Direct Reports">' . "\r\n" . '                                                                ';
goto label260;

label49:

if (!isset(XUI::$rRequest['trial'])) {
	goto label55;
}

echo ' Trial';

label55:

echo ' MAG Device</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n" . '                ';
goto label401;

label57:

echo $E59d0debc75e7be8['id'];
echo '"';
if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $E59d0debc75e7be8['id']))) {
	goto label70;
}

echo ' selected';

label70:

goto label35;

label71:

echo '" disabled="disabled';
goto label79;

label73:

echo date('Y-m-d H:i', $F5ba2106d5227309['exp_date']);

label79:

goto label557;

label80:

echo htmlspecialchars($F5ba2106d5227309['reseller_notes']);

label85:

echo '</textarea>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t";

if (!isset($c050a23c479bc67e['mag_id'])) {
	goto label132;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="device-info">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Line Username</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" readonly class="form-control sticky" id="username" value="';
goto label349;

label92:

$F6edd90960a3bd9d = 'MAG Device';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label98;

label98:

if (isset($c050a23c479bc67e)) {
	goto label103;
}

echo 'Add';
goto label49;

label103:

echo 'Edit';
goto label49;

label105:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-options">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n" . '                                                <div class="alert alert-warning" role="alert" id="advanced_warning" style="display: none;">' . "\r\n" . '                                                    This device is linked to a user, the options for that user will be used.' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div id="advanced_info">' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="ip_field">Allowed IP Addresses</label>' . "\r\n" . '                                                        <div class="col-md-8 input-group">' . "\r\n" . '                                                            <input type="text" id="ip_field" class="form-control" value="">' . "\r\n" . '                                                            <div class="input-group-append">' . "\r\n" . '                                                                <a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\r\n" . '                                                                <a href="javascript:void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\r\n" . '                                                            </div>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="allowed_ips">&nbsp;</label>' . "\r\n" . '                                                        <div class="col-md-8">' . "\r\n" . '                                                            <select id="allowed_ips" name="allowed_ips[]" size=6 class="form-control" multiple="multiple">' . "\r\n" . '                                                            ';

if (!isset($c050a23c479bc67e)) {
	goto label124;
}

foreach (json_decode($F5ba2106d5227309['allowed_ips'], true) as $b38e11ffdc6a3abb) {
	echo '                                                            <option value="';
	echo $b38e11ffdc6a3abb;
	echo '">';
	echo $b38e11ffdc6a3abb;
	echo '</option>' . "\r\n" . '                                                            ';
}

label124:

goto label315;

label125:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ver">Version</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="ver" name="ver" value="';
echo htmlspecialchars($c050a23c479bc67e['ver']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="clearDevice();" class="btn btn-warning">Clear Device Info</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t";

label132:

if (!$db0a61ef32b89a27['allow_restrictions']) {
	goto label368;
}

goto label105;

label137:

echo htmlspecialchars($c050a23c479bc67e['parent_password']);

label142:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">';

if (!isset($c050a23c479bc67e)) {
	goto label85;
}

goto label80;

label148:

$C0a1fd30f0173389 = Ba89228Dc958Ce05($F5ba2106d5227309['member_id']);
echo '                <div class="alert alert-info" role="alert">' . "\r\n" . '                    This device does not belong to you, although you have the right to edit this device you should notify the device\'s owner <strong><a href="user?id=';
echo $C0a1fd30f0173389['id'];
echo '">';
echo $C0a1fd30f0173389['username'];
goto label327;

label160:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                ';

label161:

if (!isset($e6ceb472dd6d165f)) {
	goto label378;
}

echo '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="orig_package">Original Package</label>' . "\r\n" . '                                                    <div class="col-md-8">' . "\r\n" . '                                                        <input type="text" readonly class="form-control" id="orig_package" name="orig_package" value="';
echo $e6ceb472dd6d165f['package_name'];
goto label377;

label169:

echo $_['stations'];
echo '</th>' . "\r\n" . '                                                            </tr>' . "\r\n" . '                                                        </thead>' . "\r\n" . '                                                        <tbody></tbody>' . "\r\n" . '                                                    </table>' . "\r\n" . '                                                </div>' . "\r\n" . '                                            </div> <!-- end col -->' . "\r\n" . '                                        </div> <!-- end row -->' . "\r\n" . '                                        <ul class="list-inline wizard mb-0">' . "\r\n" . '                                            <li class="prevb list-inline-item">' . "\r\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n" . '                                            </li>' . "\r\n" . '                                            <li class="next list-inline-item float-right">' . "\r\n" . '                                                <input name="submit_line" id="submit_button" type="submit" class="btn btn-primary purchase" value="Purchase" />' . "\r\n" . '                                            </li>' . "\r\n" . '                                        </ul>' . "\r\n" . '                                    </div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div>' . "\r\n" . '                ';
goto label214;

label173:

echo '                <div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\r\n" . '                    ';
goto label571;

label175:

echo number_format($E59d0debc75e7be8['credits'], 0);
echo '</td>' . "\r\n" . '                                                            </tr>' . "\r\n" . '                                                        </tbody>' . "\r\n" . '                                                    </table>' . "\r\n" . '                                                    <table id="datatable-review" class="table table-striped table-borderless dt-responsive nowrap" style="margin-top:30px;">' . "\r\n" . '                                                        <thead>' . "\r\n" . '                                                            <tr>' . "\r\n" . '                                                                <th class="text-center"></th>' . "\r\n" . '                                                                <th>';
echo $_['bouquet_name'];
echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['streams'];
goto label307;

label188:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#device-info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi mdi-cellphone-key mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Device Info</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t";

label189:

if (!$db0a61ef32b89a27['allow_restrictions']) {
	goto label194;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-hazard-lights mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Restrictions</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n" . '                                    ';

label194:

goto label564;

label195:

echo htmlspecialchars($c050a23c479bc67e['hw_version']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="device_id">Primary Device ID</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="device_id" name="device_id" value="';
echo htmlspecialchars($c050a23c479bc67e['device_id']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="device_id2">Secondary Device ID</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="device_id2" name="device_id2" value="';
echo htmlspecialchars($c050a23c479bc67e['device_id2']);
goto label125;

label213:

echo '                </div>' . "\r\n" . '                ';

label214:

echo "\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label578;

label216:

echo '                                                            <optgroup label="Indirect Reports">' . "\r\n" . '                                                                ';

foreach ($db0a61ef32b89a27['all_reports'] as $f7107e3a92443147) {
	goto label237;

	label222:
	if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $f7107e3a92443147))) {
		goto label232;
	}

	echo ' selected';

	label232:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	goto label253;

	label237:

	if (in_array($f7107e3a92443147, $db0a61ef32b89a27['direct_reports'])) {
		goto label254;
	}

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                                                    <option value="';
	echo $f7107e3a92443147;
	echo '"';
	goto label222;

	label253:

	echo '</option>' . "\r\n" . '                                                                    ';

	label254:

	goto label256;

	label256:
}

echo '                                                            </optgroup>' . "\r\n" . '                                                            ';

label259:

goto label160;

label260:

foreach ($db0a61ef32b89a27['direct_reports'] as $f7107e3a92443147) {
	goto label265;

	label265:

	$De48bf4d3fb2f3d2 = $db0a61ef32b89a27['users'][$f7107e3a92443147];
	echo '                                                                <option value="';
	echo $f7107e3a92443147;
	echo '"';
	if (!(isset($F5ba2106d5227309['member_id']) && ($F5ba2106d5227309['member_id'] == $f7107e3a92443147))) {
		goto label283;
	}

	goto label282;

	label282:

	echo ' selected';

	label283:

	echo '>';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n" . '                                                                ';
	goto label289;

	label289:

	goto label291;

	label291:
}

echo '                                                            </optgroup>' . "\r\n" . '                                                            ';

label294:

if (!(count($db0a61ef32b89a27['direct_reports']) < count($db0a61ef32b89a27['all_reports']))) {
	goto label259;
}

goto label216;

label307:

echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['movies'];
echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['series'];
echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
goto label169;

label315:

echo '                                                            </select>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>' . "\r\n" . '                                                        <div class="col-md-2">' . "\r\n" . '                                                            <input name="is_isplock" id="is_isplock" type="checkbox" ';

if (!isset($F5ba2106d5227309)) {
	goto label15;
}

if (!($F5ba2106d5227309['is_isplock'] == 1)) {
	goto label326;
}

echo 'checked ';

label326:

goto label15;

label327:

echo '</a></strong> when doing so.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label328:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\r\n\t\t\t\t\t\t\t";
if (isset($c050a23c479bc67e['mag_id']) && !isset($cbcf0bbd5e139431)) {
	goto label399;
}

if (!isset(XUI::$rRequest['trial'])) {
	goto label398;
}

goto label397;

label342:

echo 'Package</label>' . "\r\n" . '                                                    <div class="col-md-8">' . "\r\n" . '                                                        <select name="package" id="package" class="form-control select2" data-toggle="select2">' . "\r\n" . '                                                            ';

if (!isset($F5ba2106d5227309)) {
	goto label348;
}

echo '                                                            <option value="">No Changes</option>' . "\r\n" . '                                                            ';

label348:

goto label469;

label349:

echo htmlspecialchars($F5ba2106d5227309['username']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Line Password</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" readonly class="form-control sticky" id="password" value="';
echo htmlspecialchars($F5ba2106d5227309['password']);
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="sn">Serial Number</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="sn" name="sn" value="';
echo htmlspecialchars($c050a23c479bc67e['sn']);
goto label1;

label367:

echo '">' . "\r\n" . '                                                            <div class="input-group-append">' . "\r\n" . '                                                                <a href="javascript:void(0)" onclick="clearISP()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\r\n" . '                                                            </div>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                    ';

label368:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="review-purchase">' . "\r\n" . '                                        <div class="row">' . "\r\n" . '                                            <div class="col-12">' . "\r\n" . '                                                <div class="alert alert-danger" role="alert" style="display:none;" id="no-credits">' . "\r\n" . '                                                    <i class="mdi mdi-block-helper mr-2"></i> You do not have enough credits to complete this transaction!' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <table class="table table-striped table-borderless" id="credits-cost">' . "\r\n" . '                                                        <thead>' . "\r\n" . '                                                            <tr>' . "\r\n" . '                                                                <th class="text-center">Total Credits</th>' . "\r\n" . '                                                                <th class="text-center">Purchase Cost</th>' . "\r\n" . '                                                                <th class="text-center">Remaining Credits</th>' . "\r\n" . '                                                            </tr>' . "\r\n" . '                                                        </thead>' . "\r\n" . '                                                        <tbody>' . "\r\n" . '                                                            <tr>' . "\r\n" . '                                                                <td class="text-center">';
echo number_format($E59d0debc75e7be8['credits'], 0);
echo '</td>' . "\r\n" . '                                                                <td class="text-center" id="cost_credits">0</td>' . "\r\n" . '                                                                <td class="text-center" id="remaining_credits">';
goto label175;

label377:

echo '">' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                ';

label378:

echo '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="package">';

if (!isset($F5ba2106d5227309)) {
	goto label342;
}

echo 'Add ';
goto label342;

label385:

echo intval($c050a23c479bc67e['mag_id']);
echo '" />' . "\r\n\t\t\t\t\t\t\t";

label391:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t";

if (!isset($c050a23c479bc67e['mag_id'])) {
	goto label189;
}

goto label188;

label397:

echo '                            <input type="hidden" name="trial" value="1" />' . "\r\n" . '                            ';

label398:

goto label391;

label399:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
goto label385;

label401:
if (!$ba4f280bd137bfad && !isset($F5ba2106d5227309) && isset(XUI::$rRequest['trial'])) {
	goto label173;
}
if (!(isset($F5ba2106d5227309) && $F5ba2106d5227309['is_trial'])) {
	goto label420;
}

echo '                <div class="alert alert-info" role="alert">' . "\r\n" . '                    This device is on a trial package. Adding a new package will convert it to an official package.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label420:
if (!(isset($F5ba2106d5227309) && !in_array($F5ba2106d5227309['member_id'], array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['direct_reports'])))) {
	goto label328;
}

goto label148;

label440:

$F5ba2106d5227309 = $c050a23c479bc67e['user'];

if (!(0 < $F5ba2106d5227309['package_id'])) {
	goto label452;
}

$e6ceb472dd6d165f = Fddf8da6AB3fE47b($F5ba2106d5227309['package_id']);

label452:

goto label92;

label453:

echo htmlspecialchars($c050a23c479bc67e['mac']);

label458:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                ';

if (!(0 < count($db0a61ef32b89a27['all_reports']))) {
	goto label161;
}

echo '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="member_id">Owner</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<optgroup label="Myself">' . "\r\n" . '                                                                <option value="';
goto label57;

label469:

foreach (d8c8284136938ef0($E59d0debc75e7be8['member_group_id'], 'mag') as $cc386f9ba082650e) {
	if (!(($cc386f9ba082650e['is_trial'] && isset(XUI::$rRequest['trial'])) || ($cc386f9ba082650e['is_official'] && !isset(XUI::$rRequest['trial'])))) {
		goto label506;
	}

	echo '                                                                <option value="';
	echo intval($cc386f9ba082650e['id']);
	echo '">';
	echo htmlspecialchars($cc386f9ba082650e['package_name']);
	echo '</option>' . "\r\n" . '                                                                ';

	label506:
}

echo '                                                        </select>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div id="package_info" style="display: none;">' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="package_cost">Package Cost</label>' . "\r\n" . '                                                        <div class="col-md-3">' . "\r\n" . '                                                            <input readonly type="text" class="form-control text-center" id="package_cost" name="package_cost" value="">' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                        <label class="col-md-2 col-form-label" for="package_duration">Duration</label>' . "\r\n" . '                                                        <div class="col-md-3">' . "\r\n" . '                                                            <input readonly type="text" class="form-control text-center" id="package_duration" name="package_duration" value="">' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div class="form-group row mb-4" id="package_warning" style="display:none;">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="max_connections">Warning Notice</label>' . "\r\n" . '                                                    <div class="col-md-8">' . "\r\n" . '                                                        <div class="alert alert-warning" role="alert">' . "\r\n" . '                                                            The package you have selected is incompatible with the existing package. This could be due to the number of connections or other restrictions.<br/><br/>You can still upgrade to this package, however the time added will be from today and not from the end of the original package.' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="exp_date">Expiration Date</label>' . "\r\n" . '                                                    <div class="col-md-3">' . "\r\n" . '                                                        <input readonly type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="';

if (!isset($F5ba2106d5227309)) {
	goto label557;
}

if (!is_null($F5ba2106d5227309['exp_date'])) {
	goto label73;
}

goto label71;

label521:

if (!isset(XUI::$rRequest['id'])) {
	goto label452;
}

$c050a23c479bc67e = A32d85AEfA28959D(XUI::$rRequest['id']);
if (!(!$c050a23c479bc67e || !$c050a23c479bc67e['user'] || !$c050a23c479bc67e['user']['is_mag'] || !e589A4bf54A2dad1('line', $c050a23c479bc67e['user']['id']))) {
	goto label556;
}

e72F42a93714BA87();

label556:

goto label440;

label557:

echo '">' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <label class="col-md-2 col-form-label" for="parent_password">Adult Pin</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="parent_password" name="parent_password" value="';

if (isset($c050a23c479bc67e)) {
	goto label137;
}

echo '0000';
goto label142;
goto label137;

label564:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n" . '                                        <a href="#review-purchase" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n" . '                                            <i class="mdi mdi-book-open-variant mr-1"></i>' . "\r\n" . '                                            <span class="d-none d-sm-inline">Review Purchase</span>' . "\r\n" . '                                        </a>' . "\r\n" . '                                    </li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="mac">MAC Address</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="mac" name="mac" value="';

if (isset($c050a23c479bc67e)) {
	goto label570;
}

echo '00:1A:79:';
goto label458;

label570:

goto label453;

label571:

if ($f1dcaed925076e67['disable_trial']) {
	goto label576;
}

echo 'You have used your allowance of trials for this period. Please try again later.';
goto label213;

label576:

echo 'Trials have been disabled by the administrator. Please try again later.';
goto label213;

label578:

include 'footer.php';

?>