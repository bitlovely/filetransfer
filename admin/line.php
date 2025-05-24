<?php


goto label629;

label1:

if (!is_null($F5ba2106d5227309['exp_date'])) {
	goto label10;
}

echo '" disabled="disabled';
goto label193;

label10:

echo date('Y-m-d H:i:s', $F5ba2106d5227309['exp_date']);
goto label193;

label17:

echo '" data-indicator="unindicator">' . "\n" . '                                                        <div id="unindicator">' . "\n" . '                                                            <div class="bar"></div>' . "\n" . '                                                            <div class="label"></div>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="password">Password</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="password" name="password" placeholder="Auto-generate if blank" value="';

if (!isset($F5ba2106d5227309)) {
	goto label27;
}

echo htmlspecialchars($F5ba2106d5227309['password']);

label27:

goto label256;

label28:

$b62d6460eb33ea07->query('SELECT `device_id` FROM `enigma2_devices` WHERE `user_id` = ?;', $F5ba2106d5227309['id']);

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label41;
}

E72f42a93714bA87();
goto label599;

label41:

goto label588;

label42:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label658;

label44:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="access_output">Access Output</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (Bf80879C11CddCc0() as $d094d3e133ec8c03) {
	goto label51;

	label51:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox form-check-inline">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input data-size="large" type="checkbox" id="access_output_';
	echo $d094d3e133ec8c03['access_output_id'];
	echo '" name="access_output[]" value="';
	echo $d094d3e133ec8c03['access_output_id'];
	echo '"';
	goto label60;

	label60:

	if (isset($F5ba2106d5227309)) {
		goto label67;
	}

	echo ' checked';
	goto label84;

	label67:

	if (!in_array($d094d3e133ec8c03['access_output_id'], json_decode($F5ba2106d5227309['allowed_outputs'], true))) {
		goto label84;
	}

	goto label83;

	label83:

	echo ' checked';

	label84:

	echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label for="access_output_';
	echo $d094d3e133ec8c03['access_output_id'];
	goto label89;

	label89:

	echo '"> ';
	echo $d094d3e133ec8c03['output_name'];
	echo ' </label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label95;

	label95:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="restrictions">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ip_field">Allowed IP Addresses</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="ip_field" class="form-control" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allowed_ips">&nbsp;</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="allowed_ips" name="allowed_ips[]" size=6 class="form-control" multiple="multiple">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label568;

label99:

echo $E59d0debc75e7be8['username'];
echo '</option>' . "\n" . '                                                            ';
goto label508;

label103:

echo '                                                            <option value="';
goto label499;

label105:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquets">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-bouquets" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Bouquet Name</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Streams</th>' . "\n" . '                                                                <th class="text-center">Movies</th>' . "\n" . '                                                                <th class="text-center">Series</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Stations</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F964b9222B35addd() as $f155fef57262b32a) {
	goto label129;

	label112:

	echo $f155fef57262b32a['id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_channels'], true));
	goto label163;

	label129:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr';
	if (!(isset($F5ba2106d5227309) && in_array($f155fef57262b32a['id'], json_decode($F5ba2106d5227309['bouquet'], true)))) {
		goto label148;
	}

	echo ' class=\'selected selectedfilter ui-selected\'';

	label148:

	echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label112;

	label151:

	echo count(json_decode($f155fef57262b32a['bouquet_radios'], true));
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label186;

	label163:

	echo '</td>' . "\n" . '                                                                <td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_movies'], true));
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_series'], true));
	echo '</td>' . "\n" . '                                                                <td class="text-center">';
	goto label151;

	label186:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="toggleBouquets()" class="btn btn-info">Toggle All</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_line" type="submit" class="btn btn-primary" value="';

if (isset($F5ba2106d5227309)) {
	goto label332;
}

goto label330;

label193:

echo '" data-toggle="date-picker" data-single-date-picker="true">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="exp_date">Never Expire</label>' . "\n" . '                                                    <div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="no_expire" id="no_expire" type="checkbox" ';

if (!isset($F5ba2106d5227309)) {
	goto label335;
}

if (!is_null($F5ba2106d5227309['exp_date'])) {
	goto label335;
}

goto label334;

label206:

if (isset($F5ba2106d5227309)) {
	goto label211;
}

echo 'Add';
goto label384;

label211:

echo 'Edit';
goto label384;

label213:

echo '" />' . "\n\t\t\t\t\t\t\t";

label214:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#user-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Advanced</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#restrictions" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-hazard-lights mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Restrictions</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquets" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-flower-tulip mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Bouquets</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="user-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="username">Username</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="username" name="username" placeholder="Auto-generate if blank" value="';

if (!isset($F5ba2106d5227309)) {
	goto label17;
}

echo htmlspecialchars($F5ba2106d5227309['username']);
goto label17;

label225:

echo htmlspecialchars($F5ba2106d5227309['reseller_notes']);

label230:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-options">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="force_server_id">Forced Connection <i title="Force this user to connect to a specific server. Otherwise, the server with the lowest load will be selected." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="force_server_id" id="force_server_id" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($F5ba2106d5227309)) {
	goto label394;
}

if (!(intval($F5ba2106d5227309['force_server_id']) == 0)) {
	goto label394;
}

goto label393;

label244:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="contact">Contact Email</label>' . "\n" . '                                                    <div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="contact" name="contact" value="';

if (!isset($F5ba2106d5227309)) {
	goto label254;
}

echo htmlspecialchars($F5ba2106d5227309['contact']);

label254:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="admin_notes">Admin Notes</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="admin_notes" name="admin_notes" class="form-control" rows="3" placeholder="">';
goto label638;

label256:

echo '" data-indicator="pwindicator">' . "\n" . '                                                        <div id="pwindicator">' . "\n" . '                                                            <div class="bar"></div>' . "\n" . '                                                            <div class="label"></div>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="member_id">Owner</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="member_id" id="member_id" class="form-control select2" data-toggle="select2">' . "\n" . '                                                            ';
if (isset($F5ba2106d5227309['member_id']) && ($C0a1fd30f0173389 = ba89228Dc958Ce05(intval($F5ba2106d5227309['member_id'])))) {
	goto label103;
}

echo '                                                            <option value="';
echo $E59d0debc75e7be8['id'];
echo '">';
goto label99;

label275:

$dbf6ba9f4917ae91 = [
	['id' => '', 'name' => 'Off'],
	['id' => 'A1', 'name' => 'Anonymous Proxy'],
	['id' => 'A2', 'name' => 'Satellite Provider'],
	['id' => 'O1', 'name' => 'Other Country'],
	['id' => 'AF', 'name' => 'Afghanistan'],
	['id' => 'AX', 'name' => 'Aland Islands'],
	['id' => 'AL', 'name' => 'Albania'],
	['id' => 'DZ', 'name' => 'Algeria'],
	['id' => 'AS', 'name' => 'American Samoa'],
	['id' => 'AD', 'name' => 'Andorra'],
	['id' => 'AO', 'name' => 'Angola'],
	['id' => 'AI', 'name' => 'Anguilla'],
	['id' => 'AQ', 'name' => 'Antarctica'],
	['id' => 'AG', 'name' => 'Antigua And Barbuda'],
	['id' => 'AR', 'name' => 'Argentina'],
	['id' => 'AM', 'name' => 'Armenia'],
	['id' => 'AW', 'name' => 'Aruba'],
	['id' => 'AU', 'name' => 'Australia'],
	['id' => 'AT', 'name' => 'Austria'],
	['id' => 'AZ', 'name' => 'Azerbaijan'],
	['id' => 'BS', 'name' => 'Bahamas'],
	['id' => 'BH', 'name' => 'Bahrain'],
	['id' => 'BD', 'name' => 'Bangladesh'],
	['id' => 'BB', 'name' => 'Barbados'],
	['id' => 'BY', 'name' => 'Belarus'],
	['id' => 'BE', 'name' => 'Belgium'],
	['id' => 'BZ', 'name' => 'Belize'],
	['id' => 'BJ', 'name' => 'Benin'],
	['id' => 'BM', 'name' => 'Bermuda'],
	['id' => 'BT', 'name' => 'Bhutan'],
	['id' => 'BO', 'name' => 'Bolivia'],
	['id' => 'BA', 'name' => 'Bosnia And Herzegovina'],
	['id' => 'BW', 'name' => 'Botswana'],
	['id' => 'BV', 'name' => 'Bouvet Island'],
	['id' => 'BR', 'name' => 'Brazil'],
	['id' => 'IO', 'name' => 'British Indian Ocean Territory'],
	['id' => 'BN', 'name' => 'Brunei Darussalam'],
	['id' => 'BG', 'name' => 'Bulgaria'],
	['id' => 'BF', 'name' => 'Burkina Faso'],
	['id' => 'BI', 'name' => 'Burundi'],
	['id' => 'KH', 'name' => 'Cambodia'],
	['id' => 'CM', 'name' => 'Cameroon'],
	['id' => 'CA', 'name' => 'Canada'],
	['id' => 'CV', 'name' => 'Cape Verde'],
	['id' => 'KY', 'name' => 'Cayman Islands'],
	['id' => 'CF', 'name' => 'Central African Republic'],
	['id' => 'TD', 'name' => 'Chad'],
	['id' => 'CL', 'name' => 'Chile'],
	['id' => 'CN', 'name' => 'China'],
	['id' => 'CX', 'name' => 'Christmas Island'],
	['id' => 'CC', 'name' => 'Cocos (Keeling) Islands'],
	['id' => 'CO', 'name' => 'Colombia'],
	['id' => 'KM', 'name' => 'Comoros'],
	['id' => 'CG', 'name' => 'Congo'],
	['id' => 'CD', 'name' => 'Congo, Democratic Republic'],
	['id' => 'CK', 'name' => 'Cook Islands'],
	['id' => 'CR', 'name' => 'Costa Rica'],
	['id' => 'CI', 'name' => 'Cote D\'Ivoire'],
	['id' => 'HR', 'name' => 'Croatia'],
	['id' => 'CU', 'name' => 'Cuba'],
	['id' => 'CY', 'name' => 'Cyprus'],
	['id' => 'CZ', 'name' => 'Czech Republic'],
	['id' => 'DK', 'name' => 'Denmark'],
	['id' => 'DJ', 'name' => 'Djibouti'],
	['id' => 'DM', 'name' => 'Dominica'],
	['id' => 'DO', 'name' => 'Dominican Republic'],
	['id' => 'EC', 'name' => 'Ecuador'],
	['id' => 'EG', 'name' => 'Egypt'],
	['id' => 'SV', 'name' => 'El Salvador'],
	['id' => 'GQ', 'name' => 'Equatorial Guinea'],
	['id' => 'ER', 'name' => 'Eritrea'],
	['id' => 'EE', 'name' => 'Estonia'],
	['id' => 'ET', 'name' => 'Ethiopia'],
	['id' => 'FK', 'name' => 'Falkland Islands (Malvinas)'],
	['id' => 'FO', 'name' => 'Faroe Islands'],
	['id' => 'FJ', 'name' => 'Fiji'],
	['id' => 'FI', 'name' => 'Finland'],
	['id' => 'FR', 'name' => 'France'],
	['id' => 'GF', 'name' => 'French Guiana'],
	['id' => 'PF', 'name' => 'French Polynesia'],
	['id' => 'TF', 'name' => 'French Southern Territories'],
	['id' => 'MK', 'name' => 'Fyrom'],
	['id' => 'GA', 'name' => 'Gabon'],
	['id' => 'GM', 'name' => 'Gambia'],
	['id' => 'GE', 'name' => 'Georgia'],
	['id' => 'DE', 'name' => 'Germany'],
	['id' => 'GH', 'name' => 'Ghana'],
	['id' => 'GI', 'name' => 'Gibraltar'],
	['id' => 'GR', 'name' => 'Greece'],
	['id' => 'GL', 'name' => 'Greenland'],
	['id' => 'GD', 'name' => 'Grenada'],
	['id' => 'GP', 'name' => 'Guadeloupe'],
	['id' => 'GU', 'name' => 'Guam'],
	['id' => 'GT', 'name' => 'Guatemala'],
	['id' => 'GG', 'name' => 'Guernsey'],
	['id' => 'GN', 'name' => 'Guinea'],
	['id' => 'GW', 'name' => 'Guinea-Bissau'],
	['id' => 'GY', 'name' => 'Guyana'],
	['id' => 'HT', 'name' => 'Haiti'],
	['id' => 'HM', 'name' => 'Heard Island & Mcdonald Islands'],
	['id' => 'VA', 'name' => 'Holy See (Vatican City State)'],
	['id' => 'HN', 'name' => 'Honduras'],
	['id' => 'HK', 'name' => 'Hong Kong'],
	['id' => 'HU', 'name' => 'Hungary'],
	['id' => 'IS', 'name' => 'Iceland'],
	['id' => 'IN', 'name' => 'India'],
	['id' => 'ID', 'name' => 'Indonesia'],
	['id' => 'IR', 'name' => 'Iran, Islamic Republic Of'],
	['id' => 'IQ', 'name' => 'Iraq'],
	['id' => 'IE', 'name' => 'Ireland'],
	['id' => 'IM', 'name' => 'Isle Of Man'],
	['id' => 'IL', 'name' => 'Israel'],
	['id' => 'IT', 'name' => 'Italy'],
	['id' => 'JM', 'name' => 'Jamaica'],
	['id' => 'JP', 'name' => 'Japan'],
	['id' => 'JE', 'name' => 'Jersey'],
	['id' => 'JO', 'name' => 'Jordan'],
	['id' => 'KZ', 'name' => 'Kazakhstan'],
	['id' => 'KE', 'name' => 'Kenya'],
	['id' => 'KI', 'name' => 'Kiribati'],
	['id' => 'KR', 'name' => 'Korea'],
	['id' => 'KW', 'name' => 'Kuwait'],
	['id' => 'KG', 'name' => 'Kyrgyzstan'],
	['id' => 'LA', 'name' => 'Lao People\'s Democratic Republic'],
	['id' => 'LV', 'name' => 'Latvia'],
	['id' => 'LB', 'name' => 'Lebanon'],
	['id' => 'LS', 'name' => 'Lesotho'],
	['id' => 'LR', 'name' => 'Liberia'],
	['id' => 'LY', 'name' => 'Libyan Arab Jamahiriya'],
	['id' => 'LI', 'name' => 'Liechtenstein'],
	['id' => 'LT', 'name' => 'Lithuania'],
	['id' => 'LU', 'name' => 'Luxembourg'],
	['id' => 'MO', 'name' => 'Macao'],
	['id' => 'MG', 'name' => 'Madagascar'],
	['id' => 'MW', 'name' => 'Malawi'],
	['id' => 'MY', 'name' => 'Malaysia'],
	['id' => 'MV', 'name' => 'Maldives'],
	['id' => 'ML', 'name' => 'Mali'],
	['id' => 'MT', 'name' => 'Malta'],
	['id' => 'MH', 'name' => 'Marshall Islands'],
	['id' => 'MQ', 'name' => 'Martinique'],
	['id' => 'MR', 'name' => 'Mauritania'],
	['id' => 'MU', 'name' => 'Mauritius'],
	['id' => 'YT', 'name' => 'Mayotte'],
	['id' => 'MX', 'name' => 'Mexico'],
	['id' => 'FM', 'name' => 'Micronesia, Federated States Of'],
	['id' => 'MD', 'name' => 'Moldova'],
	['id' => 'MC', 'name' => 'Monaco'],
	['id' => 'MN', 'name' => 'Mongolia'],
	['id' => 'ME', 'name' => 'Montenegro'],
	['id' => 'MS', 'name' => 'Montserrat'],
	['id' => 'MA', 'name' => 'Morocco'],
	['id' => 'MZ', 'name' => 'Mozambique'],
	['id' => 'MM', 'name' => 'Myanmar'],
	['id' => 'NA', 'name' => 'Namibia'],
	['id' => 'NR', 'name' => 'Nauru'],
	['id' => 'NP', 'name' => 'Nepal'],
	['id' => 'NL', 'name' => 'Netherlands'],
	['id' => 'AN', 'name' => 'Netherlands Antilles'],
	['id' => 'NC', 'name' => 'New Caledonia'],
	['id' => 'NZ', 'name' => 'New Zealand'],
	['id' => 'NI', 'name' => 'Nicaragua'],
	['id' => 'NE', 'name' => 'Niger'],
	['id' => 'NG', 'name' => 'Nigeria'],
	['id' => 'NU', 'name' => 'Niue'],
	['id' => 'NF', 'name' => 'Norfolk Island'],
	['id' => 'MP', 'name' => 'Northern Mariana Islands'],
	['id' => 'NO', 'name' => 'Norway'],
	['id' => 'OM', 'name' => 'Oman'],
	['id' => 'PK', 'name' => 'Pakistan'],
	['id' => 'PW', 'name' => 'Palau'],
	['id' => 'PS', 'name' => 'Palestinian Territory, Occupied'],
	['id' => 'PA', 'name' => 'Panama'],
	['id' => 'PG', 'name' => 'Papua New Guinea'],
	['id' => 'PY', 'name' => 'Paraguay'],
	['id' => 'PE', 'name' => 'Peru'],
	['id' => 'PH', 'name' => 'Philippines'],
	['id' => 'PN', 'name' => 'Pitcairn'],
	['id' => 'PL', 'name' => 'Poland'],
	['id' => 'PT', 'name' => 'Portugal'],
	['id' => 'PR', 'name' => 'Puerto Rico'],
	['id' => 'QA', 'name' => 'Qatar'],
	['id' => 'RE', 'name' => 'Reunion'],
	['id' => 'RO', 'name' => 'Romania'],
	['id' => 'RU', 'name' => 'Russian Federation'],
	['id' => 'RW', 'name' => 'Rwanda'],
	['id' => 'BL', 'name' => 'Saint Barthelemy'],
	['id' => 'SH', 'name' => 'Saint Helena'],
	['id' => 'KN', 'name' => 'Saint Kitts And Nevis'],
	['id' => 'LC', 'name' => 'Saint Lucia'],
	['id' => 'MF', 'name' => 'Saint Martin'],
	['id' => 'PM', 'name' => 'Saint Pierre And Miquelon'],
	['id' => 'VC', 'name' => 'Saint Vincent And Grenadines'],
	['id' => 'WS', 'name' => 'Samoa'],
	['id' => 'SM', 'name' => 'San Marino'],
	['id' => 'ST', 'name' => 'Sao Tome And Principe'],
	['id' => 'SA', 'name' => 'Saudi Arabia'],
	['id' => 'SN', 'name' => 'Senegal'],
	['id' => 'RS', 'name' => 'Serbia'],
	['id' => 'SC', 'name' => 'Seychelles'],
	['id' => 'SL', 'name' => 'Sierra Leone'],
	['id' => 'SG', 'name' => 'Singapore'],
	['id' => 'SK', 'name' => 'Slovakia'],
	['id' => 'SI', 'name' => 'Slovenia'],
	['id' => 'SB', 'name' => 'Solomon Islands'],
	['id' => 'SO', 'name' => 'Somalia'],
	['id' => 'ZA', 'name' => 'South Africa'],
	['id' => 'GS', 'name' => 'South Georgia And Sandwich Isl.'],
	['id' => 'ES', 'name' => 'Spain'],
	['id' => 'LK', 'name' => 'Sri Lanka'],
	['id' => 'SD', 'name' => 'Sudan'],
	['id' => 'SR', 'name' => 'Suriname'],
	['id' => 'SJ', 'name' => 'Svalbard And Jan Mayen'],
	['id' => 'SZ', 'name' => 'Swaziland'],
	['id' => 'SE', 'name' => 'Sweden'],
	['id' => 'CH', 'name' => 'Switzerland'],
	['id' => 'SY', 'name' => 'Syrian Arab Republic'],
	['id' => 'TW', 'name' => 'Taiwan'],
	['id' => 'TJ', 'name' => 'Tajikistan'],
	['id' => 'TZ', 'name' => 'Tanzania'],
	['id' => 'TH', 'name' => 'Thailand'],
	['id' => 'TL', 'name' => 'Timor-Leste'],
	['id' => 'TG', 'name' => 'Togo'],
	['id' => 'TK', 'name' => 'Tokelau'],
	['id' => 'TO', 'name' => 'Tonga'],
	['id' => 'TT', 'name' => 'Trinidad And Tobago'],
	['id' => 'TN', 'name' => 'Tunisia'],
	['id' => 'TR', 'name' => 'Turkey'],
	['id' => 'TM', 'name' => 'Turkmenistan'],
	['id' => 'TC', 'name' => 'Turks And Caicos Islands'],
	['id' => 'TV', 'name' => 'Tuvalu'],
	['id' => 'UG', 'name' => 'Uganda'],
	['id' => 'UA', 'name' => 'Ukraine'],
	['id' => 'AE', 'name' => 'United Arab Emirates'],
	['id' => 'GB', 'name' => 'United Kingdom'],
	['id' => 'US', 'name' => 'United States'],
	['id' => 'UM', 'name' => 'United States Outlying Islands'],
	['id' => 'UY', 'name' => 'Uruguay'],
	['id' => 'UZ', 'name' => 'Uzbekistan'],
	['id' => 'VU', 'name' => 'Vanuatu'],
	['id' => 'VE', 'name' => 'Venezuela'],
	['id' => 'VN', 'name' => 'Viet Nam'],
	['id' => 'VG', 'name' => 'Virgin Islands, British'],
	['id' => 'VI', 'name' => 'Virgin Islands, U.S.'],
	['id' => 'WF', 'name' => 'Wallis And Futuna'],
	['id' => 'EH', 'name' => 'Western Sahara'],
	['id' => 'YE', 'name' => 'Yemen'],
	['id' => 'ZM', 'name' => 'Zambia'],
	['id' => 'ZW', 'name' => 'Zimbabwe']
];
$F6edd90960a3bd9d = 'Line';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label654;
}

goto label653;

label294:

header('Location: mag?id=' . intval($b62d6460eb33ea07->get_row()['mag_id']));

label305:

if (!$F5ba2106d5227309['is_e2']) {
	goto label599;
}

goto label28;

label310:

$F5ba2106d5227309 = b5ad1d95a92ce732(XUI::$rRequest['id']);
if (!(!$F5ba2106d5227309 || !e589A4BF54a2DaD1('adv', 'edit_user'))) {
	goto label329;
}

E72f42A93714BA87();

label329:

goto label438;

label330:

echo 'Add';
goto label333;

label332:

echo 'Edit';

label333:

goto label42;

label334:

echo 'checked ';

label335:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="max_connections">Max Connections</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="max_connections" name="max_connections" value="';

if (isset($F5ba2106d5227309)) {
	goto label612;
}

goto label610;

label340:

if (!isset($F5ba2106d5227309)) {
	goto label349;
}

echo htmlspecialchars($F5ba2106d5227309['access_token']);

label349:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onclick="generateToken()" class="btn btn-info waves-effect waves-light"><i class="mdi mdi-refresh"></i></a>' . "\n" . '                                                            <a href="javascript:void(0)" onclick="clearToken()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="forced_country">Forced Country <i title="Force user to connect to loadbalancer associated with the selected country." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($dbf6ba9f4917ae91 as $b8f81a9f6e93f6a9) {
	goto label362;

	label354:

	echo 'value="';
	echo $b8f81a9f6e93f6a9['id'];
	echo '">';
	echo $b8f81a9f6e93f6a9['name'];
	goto label378;

	label362:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($F5ba2106d5227309)) {
		goto label354;
	}

	if (!($F5ba2106d5227309['forced_country'] == $b8f81a9f6e93f6a9['id'])) {
		goto label376;
	}

	echo 'selected ';

	label376:

	goto label354;

	label378:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label381;

	label381:
}

goto label44;

label384:

echo ' Line</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($F5ba2106d5227309)) {
	goto label214;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $F5ba2106d5227309['id'];
goto label213;

label393:

echo 'selected ';

label394:

echo 'value="0">Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	goto label413;

	label399:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label435;

	label402:

	echo 'value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo htmlspecialchars($Ec379295dc7029e6['server_name']);
	goto label399;

	label413:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($F5ba2106d5227309)) {
		goto label402;
	}

	if (!(intval($F5ba2106d5227309['force_server_id']) == intval($Ec379295dc7029e6['id']))) {
		goto label433;
	}

	echo 'selected ';

	label433:

	goto label402;

	label435:
}

goto label476;

label438:

if (!$F5ba2106d5227309['is_mag']) {
	goto label305;
}

$b62d6460eb33ea07->query('SELECT `mag_id` FROM `mag_devices` WHERE `user_id` = ?;', $F5ba2106d5227309['id']);

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label294;
}

e72f42a93714bA87();
goto label305;
goto label294;

label456:

if (!isset($F5ba2106d5227309)) {
	goto label474;
}

foreach (json_decode($F5ba2106d5227309['allowed_ua'], true) as $Bc11ab076e603a99) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Bc11ab076e603a99;
	echo '">';
	echo $Bc11ab076e603a99;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

label474:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="bypass_ua">Bypass UA Restrictions</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="bypass_ua" id="bypass_ua" type="checkbox" ';
goto label618;

label476:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_stalker">Ministra Portal <i title="Select this option if you intend to use this account with your Ministra portal. Output formats, expiration and connections below will be ignored. Only MPEG-TS output is allowed." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_stalker" id="is_stalker" type="checkbox" ';

if (!isset($F5ba2106d5227309)) {
	goto label543;
}

if (!($F5ba2106d5227309['is_stalker'] == 1)) {
	goto label543;
}

echo 'checked ';
goto label543;

label488:

if (!isset($F5ba2106d5227309)) {
	goto label498;
}

if (!($F5ba2106d5227309['is_isplock'] == 1)) {
	goto label498;
}

echo 'checked ';

label498:

goto label509;

label499:

echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
echo '</option>' . "\n" . '                                                            ';

label508:

goto label554;

label509:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="isp_clear">Current ISP</label>' . "\n" . '                                                    <div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" readonly id="isp_clear" name="isp_clear" value="';

if (!isset($F5ba2106d5227309)) {
	goto label519;
}

echo htmlspecialchars($F5ba2106d5227309['isp_desc']);

label519:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onclick="clearISP()" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="access_token">Access Token <i title="Generate an access token that can be used in place of username and password. If you use this option, playlists generated will contain the access token as auth." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" readonly class="form-control" id="access_token" name="access_token" value="';
goto label340;

label521:

if (!($F5ba2106d5227309['is_trial'] == 1)) {
	goto label527;
}

echo 'checked ';

label527:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_isplock" id="is_isplock" type="checkbox" ';
goto label488;

label529:

if (isset(XUI::$rRequest['id'])) {
	goto label310;
}

if (e589A4Bf54A2dAD1('adv', 'add_user')) {
	goto label541;
}

e72F42a93714Ba87();

label541:

goto label599;
goto label310;

label543:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_restreamer">Restreamer <i title="If selected, this user will not be blocked for restreaming channels." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_restreamer" id="is_restreamer" type="checkbox" ';

if (!isset($F5ba2106d5227309)) {
	goto label604;
}

if (!($F5ba2106d5227309['is_restreamer'] == 1)) {
	goto label604;
}

goto label603;

label554:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <a href="javascript: void(0);" onClick="clearOwner();" class="btn btn-warning" style="width: 100%">Clear</a>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="exp_date">Expiry</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center date" id="exp_date" name="exp_date" value="';

if (isset($F5ba2106d5227309)) {
	goto label567;
}

echo date('Y-m-d H:i:s', time() + 2592000);
goto label193;

label567:

goto label1;

label568:

if (!isset($F5ba2106d5227309)) {
	goto label586;
}

foreach (json_decode($F5ba2106d5227309['allowed_ips'], true) as $b38e11ffdc6a3abb) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b38e11ffdc6a3abb;
	echo '">';
	echo $b38e11ffdc6a3abb;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

label586:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ua_field">Allowed User-Agents</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="ua_field" class="form-control" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="add_ua" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="remove_ua" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allowed_ua">&nbsp;</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="allowed_ua" name="allowed_ua[]" size=6 class="form-control" multiple="multiple">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label456;

label588:

header('Location: enigma?id=' . intval($b62d6460eb33ea07->get_row()['device_id']));

label599:

$bc0b231fcce79374 = B36cE90E79FB0E76();
goto label275;

label603:

echo 'checked ';

label604:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_trial">Trial Account</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_trial" id="is_trial" type="checkbox" ';

if (!isset($F5ba2106d5227309)) {
	goto label527;
}

goto label521;

label610:

echo '1';
goto label617;

label612:

echo htmlspecialchars($F5ba2106d5227309['max_connections']);

label617:

goto label244;

label618:

if (!isset($F5ba2106d5227309)) {
	goto label628;
}

if (!($F5ba2106d5227309['bypass_ua'] == 1)) {
	goto label628;
}

echo 'checked ';

label628:

goto label105;

label629:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label637;
}

e72f42A93714Ba87();

label637:

goto label529;

label638:

if (!isset($F5ba2106d5227309)) {
	goto label647;
}

echo htmlspecialchars($F5ba2106d5227309['admin_notes']);

label647:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_notes">Reseller Notes</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="reseller_notes" name="reseller_notes" class="form-control" rows="3" placeholder="">';

if (!isset($F5ba2106d5227309)) {
	goto label230;
}

goto label225;

label653:

echo ' style="display: none;"';

label654:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label206;

label658:

include 'footer.php';

?>