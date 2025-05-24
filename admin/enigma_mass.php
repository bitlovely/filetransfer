<?php


goto label207;

label1:

$F6edd90960a3bd9d = 'Mass Edit Devices';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label62;
}

echo ' style="display: none;"';
goto label62;

label20:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="forced_country" name="c_forced_country">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="forced_country">Forced Country</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($dbf6ba9f4917ae91 as $b8f81a9f6e93f6a9) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b8f81a9f6e93f6a9['id'];
	echo '">';
	echo $b8f81a9f6e93f6a9['name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label123;

label44:

echo '</th>' . "\r\n" . '                                                        <th class="text-center">';
echo $_['trial'];
echo '</th>' . "\r\n" . '                                                        <th class="text-center">';
echo $_['expiration'];
echo '</th>' . "\r\n" . '                                                        <th class="text-center">';
goto label105;

label52:

echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
echo '</option>' . "\r\n" . '                                                    ';

label61:

goto label83;

label62:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Mass Edit Devices <small id="selected_count"></small></h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label188;
}

goto label187;

label74:

echo $_['owner'];
echo '</th>' . "\r\n" . '                                                        <th class="text-center">';
echo $_['status'];
echo '</th>' . "\r\n" . '                                                        <th class="text-center">';
echo $_['online'];
goto label44;

label83:

echo '                                                </select>' . "\r\n" . '                                            </div>' . "\r\n" . '                                            <label class="col-md-1 col-form-label text-center" for="reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();">CLEAR</button></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="filter" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>No Filter</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1">Active</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="2">Disabled</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="3">Banned</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="4">Expired</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="5">Trial</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label94;
	}

	echo ' selected';

	label94:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleUsers()">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-mass" class="table table-borderless mb-0" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
goto label216;

label105:

echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'To mass edit any of the below options, tick the checkbox next to it and change the input value.' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="member_id" name="c_member_id">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="member_id">Owner</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="member_id" id="member_id" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (b36CE90E79Fb0E76() as $De48bf4d3fb2f3d2) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $De48bf4d3fb2f3d2['id'];
	echo '">';
	echo $De48bf4d3fb2f3d2['username'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n" . '                                                    <div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="exp_date" name="c_exp_date">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="exp_date">Expiry</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input disabled type="text" disabled class="form-control text-center date" id="exp_date" name="exp_date" value="" data-toggle="date-picker" data-single-date-picker="true">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-control custom-checkbox mt-1">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input disabled type="checkbox" class="custom-control-input" id="no_expire" name="no_expire">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="custom-control-label" for="no_expire">Never</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="admin_notes" name="c_admin_notes">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="admin_notes">Admin Notes</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea disabled id="admin_notes" name="admin_notes" class="form-control" rows="3" placeholder=""></textarea>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="reseller_notes" name="c_reseller_notes">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="reseller_notes">Reseller Notes</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea disabled id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder=""></textarea>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="force_server_id" name="c_force_server_id">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="force_server_id">Forced Connection</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select disabled name="force_server_id" id="force_server_id" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option selected value="0">Disabled</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label20;

label123:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="is_isplock" data-type="switch" name="c_is_isplock">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="is_isplock">Lock to ISP</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input disabled name="is_isplock" id="is_isplock" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-5 col-form-label" for="reset_isp_lock">Reset Current ISP</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" name="reset_isp_lock">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="activate" data-name="is_trial" data-type="switch" name="c_is_trial">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="is_trial">Trial Device</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input disabled name="is_trial" id="is_trial" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                    <label class="col-md-5 col-form-label" for="reset_device_lock">Reset Device Lock</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox checkbox-single col-md-1 checkbox-offset checkbox-primary">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" name="reset_device_lock">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquets">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-bouquets" class="table table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Bouquet Name</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Streams</th>' . "\r\n" . '                                                                <th class="text-center">Movies</th>' . "\r\n" . '                                                                <th class="text-center">Series</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Stations</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f964B9222B35AddD() as $f155fef57262b32a) {
	goto label130;

	label130:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $f155fef57262b32a['id'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label139;

	label139:

	echo count(json_decode($f155fef57262b32a['bouquet_channels'], true));
	echo '</td>' . "\r\n" . '                                                                <td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_movies'], true));
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_series'], true));
	goto label170;

	label170:

	echo '</td>' . "\r\n" . '                                                                <td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_radios'], true));
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label183;

	label183:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="custom-control col-md-12 custom-checkbox text-center" style="margin-top:20px;">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="checkbox" class="custom-control-input" id="c_bouquets" data-name="bouquets" data-type="bouquet" name="c_bouquets">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="custom-control-label" for="c_bouquets">Tick this box to apply the above bouquets to all selected devices. Selecting none will remove bouquets from devices.</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="toggleBouquets()" class="btn btn-info">Toggle Bouquets</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_device" type="submit" class="btn btn-primary" value="Mass Edit" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label224;

label187:

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'Mass edit of devices was successfully executed!' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label188:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="#" method="POST">' . "\r\n\t\t\t\t\t\t\t" . '<input type="hidden" name="devices_selected" id="devices_selected" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-group mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Devices</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquets" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-flower-tulip mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Bouquets</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-selection">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="user_search" value="" placeholder="Search Devices...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                            <div class="col-md-3">' . "\r\n" . '                                                <select id="reseller_search" class="form-control" data-toggle="select2">' . "\r\n" . '                                                    ';
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = ba89228DC958ce05(intval(XUI::$rRequest['owner']))))) {
	goto label61;
}

echo '                                                    <option value="';
goto label52;

label207:

include 'session.php';
include 'functions.php';

if (E6d500E19634d513()) {
	goto label215;
}

e72F42A93714BA87();

label215:

goto label1;

label216:

echo '</th>' . "\r\n" . '                                                        <th>';
echo $_['username'];
echo '</th>' . "\r\n" . '                                                        <th class="text-center">';
echo $_['mac_address'];
echo '</th>' . "\r\n" . '                                                        <th class="text-center">Device</th>' . "\r\n" . '                                                        <th>';
goto label74;

label224:

include 'footer.php';

?>