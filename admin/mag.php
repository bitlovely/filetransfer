<?php


goto label546;

label1:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="image_version">Image Version</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="image_version" name="image_version" value="';
echo $c050a23c479bc67e['image_version'];
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="hw_version">HW Version</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="hw_version" name="hw_version" value="';
echo $c050a23c479bc67e['hw_version'];
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="device_id">Primary Device ID</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="device_id" name="device_id" value="';
goto label136;

label9:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                        <label class="col-md-3 col-form-label" for="is_isplock">Lock to ISP</label>' . "\r\n" . '                                                        <div class="col-md-2">' . "\r\n" . '                                                            <input name="is_isplock" id="is_isplock" type="checkbox" ';

if (!isset($c050a23c479bc67e)) {
	goto label33;
}

if (!($c050a23c479bc67e['user']['is_isplock'] == 1)) {
	goto label33;
}

goto label32;

label21:

echo '</textarea>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t";

if (!isset($c050a23c479bc67e['mag_id'])) {
	goto label352;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="device-info">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Line Username</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control sticky" id="username" name="username" value="';
echo $c050a23c479bc67e['user']['username'];
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Line Password</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control sticky" id="password" name="password" value="';
goto label145;

label32:

echo 'checked ';

label33:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="exp_date">Expiry</label>' . "\r\n" . '                                                        <div class="col-md-3">' . "\r\n" . '                                                            <input type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="';

if (isset($c050a23c479bc67e)) {
	goto label123;
}

goto label114;

label38:

goto label46;

label39:

echo date('Y-m-d H:i:s', $c050a23c479bc67e['user']['exp_date']);

label46:

goto label210;

label47:

goto label49;

label48:

echo 'Edit';

label49:

echo ' MAG Device</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\r\n\t\t\t\t\t\t\t";
goto label70;

label51:

echo 'checked ';
goto label102;

label53:

if (!($c050a23c479bc67e['lock_device'] == 1)) {
	goto label102;
}

echo 'checked ';
goto label102;

label60:

echo htmlspecialchars($c050a23c479bc67e['parent_password']);

label65:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="lock_device">Device Lock</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="lock_device" id="lock_device" type="checkbox" ';

if (isset($c050a23c479bc67e)) {
	goto label53;
}

goto label51;

label70:
if (!(isset($c050a23c479bc67e['mag_id']) && !isset($cbcf0bbd5e139431))) {
	goto label85;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo intval($c050a23c479bc67e['mag_id']);
echo '" />' . "\r\n\t\t\t\t\t\t\t";

label85:

goto label367;

label86:

if (!isset($c050a23c479bc67e['user'])) {
	goto label96;
}

echo htmlspecialchars($c050a23c479bc67e['user']['isp_desc']);

label96:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onclick="clearISP()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="ip_field">Allowed IP Addresses</label>' . "\r\n" . '                                                        <div class="col-md-8 input-group">' . "\r\n" . '                                                            <input type="text" id="ip_field" class="form-control" value="">' . "\r\n" . '                                                            <div class="input-group-append">' . "\r\n" . '                                                                <a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\r\n" . '                                                                <a href="javascript:void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\r\n" . '                                                            </div>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="allowed_ips">&nbsp;</label>' . "\r\n" . '                                                        <div class="col-md-8">' . "\r\n" . '                                                            <select id="allowed_ips" name="allowed_ips[]" size=6 class="form-control" multiple="multiple">' . "\r\n" . '                                                            ';

if (!isset($c050a23c479bc67e)) {
	goto label194;
}

goto label179;

label102:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="admin_notes">Admin Notes</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="admin_notes" name="admin_notes" class="form-control" rows="3" placeholder="">';

if (!isset($c050a23c479bc67e)) {
	goto label331;
}

echo htmlspecialchars($c050a23c479bc67e['user']['admin_notes']);
goto label331;

label114:

echo date('Y-m-d H:i:s', time() + 2592000);
goto label46;

label123:

if (!empty($c050a23c479bc67e['user']['exp_date'])) {
	goto label39;
}

echo '" disabled="disabled';
goto label38;

label130:

echo '">';
echo $E59d0debc75e7be8['username'];
echo '</option>' . "\r\n" . '                                                                ';
goto label166;

label135:

goto label383;

label136:

echo $c050a23c479bc67e['device_id'];
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="device_id2">Secondary Device ID</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="device_id2" name="device_id2" value="';
echo $c050a23c479bc67e['device_id2'];
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ver">Version</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="ver" name="ver" value="';
echo $c050a23c479bc67e['ver'];
goto label351;

label145:

echo $c050a23c479bc67e['user']['password'];
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="sn">Serial Number</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="sn" name="sn" value="';
echo $c050a23c479bc67e['sn'];
echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-2 col-form-label" for="stb_type">STB Type</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stb_type" name="stb_type" value="';
echo $c050a23c479bc67e['stb_type'];
goto label1;

label155:

if (isset($c050a23c479bc67e)) {
	goto label160;
}

echo '00:1A:79:';
goto label450;

label160:

echo htmlspecialchars($c050a23c479bc67e['mac']);
goto label450;

label166:

echo '                                                            </select>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                        <div class="col-md-2">' . "\r\n" . '                                                            <a href="javascript: void(0);" onClick="clearOwner();" class="btn btn-warning" style="width: 100%">Clear</a>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="is_trial">Trial Device</label>' . "\r\n" . '                                                        <div class="col-md-3">' . "\r\n" . '                                                            <input name="is_trial" id="is_trial" type="checkbox" ';

if (!isset($c050a23c479bc67e)) {
	goto label9;
}

if (!($c050a23c479bc67e['user']['is_trial'] == 1)) {
	goto label9;
}

echo 'checked ';
goto label9;

label179:

foreach (json_decode($c050a23c479bc67e['user']['allowed_ips'], true) as $b38e11ffdc6a3abb) {
	echo '                                                            <option value="';
	echo $b38e11ffdc6a3abb;
	echo '">';
	echo $b38e11ffdc6a3abb;
	echo '</option>' . "\r\n" . '                                                            ';
}

label194:

echo '                                                            </select>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquets">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n" . '                                                <div class="alert alert-warning" role="alert" id="bouquet_warning" style="display: none;">' . "\r\n" . '                                                    This device is linked to a user, the bouquets for that user will be used.' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4" id="bouquets_info">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-bouquets" class="table table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Bouquet Name</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['streams'];
goto label375;

label198:
if (!(isset($c050a23c479bc67e) && !isset($c050a23c479bc67e['user']))) {
	goto label208;
}

$c050a23c479bc67e['user'] = [
	'bouquet' => []
];

label208:

$F6edd90960a3bd9d = 'MAG Device';
goto label225;

label210:

echo '" data-toggle="date-picker" data-single-date-picker="true">' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                        <label class="col-md-3 col-form-label" for="exp_date">Never Expire</label>' . "\r\n" . '                                                        <div class="col-md-2">' . "\r\n" . '                                                            <input name="no_expire" id="no_expire" type="checkbox" ';

if (!isset($c050a23c479bc67e)) {
	goto label480;
}

if (!is_null($c050a23c479bc67e['user']['exp_date'])) {
	goto label224;
}

echo 'checked ';

label224:

goto label480;

label225:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label242;
}

echo ' style="display: none;"';

label242:

goto label343;

label243:

echo $_['stations'];
echo '</th' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F964B9222B35ADDd() as $f155fef57262b32a) {
	goto label304;

	label252:

	echo '</td>' . "\r\n" . '                                                                <td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_movies'], true));
	echo '</td>' . "\r\n" . '                                                                <td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_series'], true));
	echo '</td>' . "\r\n" . '                                                                <td class="text-center">';
	goto label292;

	label275:

	echo $f155fef57262b32a['id'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</td>' . "\r\n" . '                                                                <td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_channels'], true));
	goto label252;

	label292:

	echo count(json_decode($f155fef57262b32a['bouquet_radios'], true));
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label327;

	label304:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr';
	if (!(isset($c050a23c479bc67e) && in_array($f155fef57262b32a['id'], json_decode($c050a23c479bc67e['user']['bouquet'], true)))) {
		goto label324;
	}

	echo ' class=\'selected selectedfilter ui-selected\'';

	label324:

	echo '>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label275;

	label327:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="toggleBouquets()" class="btn btn-info" id="toggle_bouquets">Toggle All</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_device" type="submit" class="btn btn-primary" value="';
goto label555;

label331:

echo '</textarea>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">';

if (!isset($c050a23c479bc67e)) {
	goto label342;
}

echo htmlspecialchars($c050a23c479bc67e['user']['reseller_notes']);

label342:

goto label21;

label343:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($c050a23c479bc67e)) {
	goto label48;
}

echo 'Add';
goto label47;

label351:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="clearDevice();" class="btn btn-warning">Clear Device Info</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t";

label352:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-options">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n" . '                                                <div class="alert alert-warning" role="alert" id="advanced_warning" style="display: none;">' . "\r\n" . '                                                    This device is linked to a user, the options for that user will be used.' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div id="advanced_info">' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="force_server_id">Forced Connection <i title="Force this user to connect to a specific server. Otherwise, the server with the lowest load will be selected." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n" . '                                                        <div class="col-md-8">' . "\r\n" . '                                                            <select name="force_server_id" id="force_server_id" class="form-control select2" data-toggle="select2">' . "\r\n" . '                                                                <option ';

if (!isset($c050a23c479bc67e)) {
	goto label405;
}

if (!(intval($c050a23c479bc67e['user']['force_server_id']) == 0)) {
	goto label405;
}

goto label404;

label367:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t";

if (!isset($c050a23c479bc67e['mag_id'])) {
	goto label373;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#device-info" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi mdi-cellphone-key mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Device Info</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t";

label373:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Advanced</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquets" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-flower-tulip mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Bouquets</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="mac">MAC Address</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="mac" name="mac" value="';
goto label155;

label375:

echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['movies'];
echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
echo $_['series'];
echo '</th>' . "\r\n" . '                                                                <th class="text-center">';
goto label243;

label383:

echo '                                                                <option value="';
echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
echo '</option>' . "\r\n" . '                                                                ';
goto label166;

label394:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
echo $c050a23c479bc67e['user']['pair_id'];
echo '" selected="selected">';
echo $c050a23c479bc67e['paired']['username'];
echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label526;

label404:

echo 'selected ';

label405:

echo 'value="0">Disabled</option>' . "\r\n" . '                                                                ';

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	goto label424;

	label410:

	echo '</option>' . "\r\n" . '                                                                ';
	goto label447;

	label413:

	echo 'value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo htmlspecialchars($Ec379295dc7029e6['server_name']);
	goto label410;

	label424:

	echo '                                                                <option ';

	if (!isset($c050a23c479bc67e)) {
		goto label413;
	}

	if (!(intval($c050a23c479bc67e['user']['force_server_id']) == intval($Ec379295dc7029e6['id']))) {
		goto label445;
	}

	echo 'selected ';

	label445:

	goto label413;

	label447:
}

goto label487;

label450:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="pair_id">';
echo $_['paired_user'];
echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="pair_id" name="pair_id" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
if (!(isset($c050a23c479bc67e) && (0 < $c050a23c479bc67e['user']['pair_id']))) {
	goto label526;
}

goto label394;

label464:

if (!isset(XUI::$rRequest['id'])) {
	goto label198;
}

$c050a23c479bc67e = a32D85aEFA28959D(XUI::$rRequest['id']);

if ($c050a23c479bc67e['user_id']) {
	goto label479;
}

exit();

label479:

goto label198;

label480:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="parent_password">Adult Pin</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="parent_password" name="parent_password" value="';

if (isset($c050a23c479bc67e)) {
	goto label60;
}

echo '0000';
goto label65;
goto label60;

label487:

echo '                                                            </select>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="forced_country">Forced Country <i title="Force user to connect to loadbalancer associated with the selected country." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n" . '                                                        <div class="col-md-8">' . "\r\n" . '                                                            <select name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">' . "\r\n" . '                                                                ';

foreach ($dbf6ba9f4917ae91 as $b8f81a9f6e93f6a9) {
	goto label503;

	label492:

	echo 'value="';
	echo $b8f81a9f6e93f6a9['id'];
	echo '">';
	echo $b8f81a9f6e93f6a9['name'];
	goto label500;

	label500:

	echo '</option>' . "\r\n" . '                                                                ';
	goto label520;

	label503:

	echo '                                                                <option ';

	if (!isset($c050a23c479bc67e)) {
		goto label492;
	}

	if (!($c050a23c479bc67e['user']['forced_country'] == $b8f81a9f6e93f6a9['id'])) {
		goto label518;
	}

	echo 'selected ';

	label518:

	goto label492;

	label520:
}

echo '                                                            </select>' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="';
goto label86;

label524:

echo '" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label562;

label526:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="unpairUser();" class="btn btn-warning" style="width: 100%">Unpair</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div id="linked_info">' . "\r\n" . '                                                    <div class="form-group row mb-4">' . "\r\n" . '                                                        <label class="col-md-4 col-form-label" for="member_id">Owner</label>' . "\r\n" . '                                                        <div class="col-md-6">' . "\r\n" . '                                                            <select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">' . "\r\n" . '                                                                ';
if (isset($c050a23c479bc67e['user']['member_id']) && ($C0a1fd30f0173389 = BA89228dC958ce05(intval($c050a23c479bc67e['user']['member_id'])))) {
	goto label135;
}

echo '                                                                <option value="';
echo $E59d0debc75e7be8['id'];
goto label130;

label546:

include 'session.php';
include 'functions.php';

if (e6D500e19634d513()) {
	goto label554;
}

E72f42A93714Ba87();

label554:

goto label464;

label555:

if (isset($c050a23c479bc67e)) {
	goto label560;
}

echo 'Add';
goto label524;

label560:

echo 'Edit';
goto label524;

label562:

include 'footer.php';

?>