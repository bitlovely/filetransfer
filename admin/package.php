<?php


goto label278;

label1:

echo '0';
goto label8;

label3:

echo htmlspecialchars($cc386f9ba082650e['official_duration']);

label8:

goto label349;

label9:

if (isset($cc386f9ba082650e)) {
	goto label15;
}

echo $_['add'];
goto label176;

label15:

echo $_['edit'];
goto label176;

label18:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="bouquets">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-bouquets" class="table table-striped table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['bouquet_name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label617;

label26:

echo htmlspecialchars($cc386f9ba082650e['package_name']);

label31:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <h4 class="m-t-0 header-title mb-4">Trial Package</h4>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_trial">Enabled</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_trial" id="is_trial" type="checkbox" ';

if (!isset($cc386f9ba082650e)) {
	goto label605;
}

if (!($cc386f9ba082650e['is_trial'] == 1)) {
	goto label605;
}

goto label604;

label42:

include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label59;
}

echo ' style="display: none;"';

label59:

goto label544;

label60:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="options">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_mag">MAG Device</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_mag" id="is_mag" type="checkbox" ';

if (!isset($cc386f9ba082650e)) {
	goto label287;
}

if (!($cc386f9ba082650e['is_mag'] == 1)) {
	goto label71;
}

echo 'checked ';

label71:

goto label287;

label72:

echo htmlspecialchars($cc386f9ba082650e['max_connections']);

label77:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="output_formats">';
echo $_['access_output'];
goto label102;

label81:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="is_isplock">Lock to ISP</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_isplock" id="is_isplock" type="checkbox" ';

if (!isset($cc386f9ba082650e)) {
	goto label299;
}

if (!($cc386f9ba082650e['is_isplock'] == 1)) {
	goto label299;
}

echo 'checked ';
goto label299;

label93:

echo 'checked ';
goto label335;

label95:

if (!($cc386f9ba082650e['check_compatible'] == 1)) {
	goto label335;
}

echo 'checked ';
goto label335;

label102:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (Bf80879C11cDDcc0() as $d094d3e133ec8c03) {
	goto label115;

	label109:

	echo '"> ';
	echo $d094d3e133ec8c03['output_name'];
	echo ' </label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label153;

	label115:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="checkbox form-check-inline">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input data-size="large" type="checkbox" id="output_formats_';
	echo $d094d3e133ec8c03['access_output_id'];
	echo '" name="output_formats[]" value="';
	echo $d094d3e133ec8c03['access_output_id'];
	echo '"';
	goto label124;

	label124:

	if (isset($cc386f9ba082650e)) {
		goto label131;
	}

	echo ' checked';
	goto label148;

	label131:

	if (!in_array($d094d3e133ec8c03['access_output_id'], json_decode($cc386f9ba082650e['output_formats'], true))) {
		goto label148;
	}

	goto label147;

	label147:

	echo ' checked';

	label148:

	echo ' />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label for="output_formats_';
	echo $d094d3e133ec8c03['access_output_id'];
	goto label109;

	label153:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
goto label519;

label159:

echo $_['max_connections'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="max_connections" name="max_connections" value="';

if (isset($cc386f9ba082650e)) {
	goto label72;
}

echo '1';
goto label77;
goto label72;

label168:

echo '0';
goto label175;

label170:

echo htmlspecialchars($cc386f9ba082650e['trial_credits']);

label175:

goto label610;

label176:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label685;

label178:

goto label81;

label179:

if (!($cc386f9ba082650e['is_line'] == 1)) {
	goto label185;
}

echo 'checked ';

label185:

goto label81;

label186:

echo htmlspecialchars($cc386f9ba082650e['trial_duration']);

label191:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="trial_duration_in" id="trial_duration_in" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([$_['hours'] => 'hours', $_['days'] => 'Days'] as $fb173e63c96d4021 => $C37899efeb2f3cd8) {
	goto label201;

	label201:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($cc386f9ba082650e)) {
		goto label216;
	}

	if (!($cc386f9ba082650e['trial_duration_in'] == $C37899efeb2f3cd8)) {
		goto label214;
	}

	echo 'selected ';

	label214:

	goto label216;

	label216:

	echo 'value="';
	echo $C37899efeb2f3cd8;
	echo '">';
	echo $fb173e63c96d4021;
	goto label222;

	label222:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label225;

	label225:
}

goto label637;

label228:

echo $_['group_name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (aD052A625C6ac011() as $fb719dae9595b9fa) {
	goto label237;

	label237:

	if (!$fb719dae9595b9fa['is_reseller']) {
		goto label263;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr';
	if (!(isset($cc386f9ba082650e) && in_array($fb719dae9595b9fa['group_id'], json_decode($cc386f9ba082650e['groups'], true)))) {
		goto label261;
	}

	echo ' class=\'selected selectedfilter ui-selected\'';

	label261:

	goto label265;

	label263:

	goto label274;

	label265:

	echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $fb719dae9595b9fa['group_id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $fb719dae9595b9fa['group_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label263;

	label274:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label412;

label278:

include 'session.php';
include 'functions.php';

if (E6D500e19634D513()) {
	goto label286;
}

E72F42A93714ba87();

label286:

goto label393;

label287:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_e2">Enigma Device</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_e2" id="is_e2" type="checkbox" ';

if (!isset($cc386f9ba082650e)) {
	goto label513;
}

if (!($cc386f9ba082650e['is_e2'] == 1)) {
	goto label513;
}

echo 'checked ';
goto label513;

label299:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_restreamer">Restreamer</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_restreamer" id="is_restreamer" type="checkbox" ';

if (!isset($cc386f9ba082650e)) {
	goto label554;
}

if (!($cc386f9ba082650e['is_restreamer'] == 1)) {
	goto label554;
}

goto label553;

label310:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="official_credits">Credit Cost</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="official_credits" name="official_credits" onkeypress="return isNumberKey(event)" value="';

if (isset($cc386f9ba082650e)) {
	goto label317;
}

echo '0';
goto label322;
goto label317;

label317:

echo htmlspecialchars($cc386f9ba082650e['official_credits']);

label322:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="official_duration">Duration</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="official_duration" name="official_duration" value="';

if (isset($cc386f9ba082650e)) {
	goto label3;
}

goto label1;

label327:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="bouquets_selected" id="bouquets_selected" value="" />' . "\n" . '                            <input type="hidden" name="groups_selected" id="groups_selected" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#package-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Options</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n" . '                                    </li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#groups" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-group mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['groups'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#bouquets" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-flower-tulip mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label626;

label335:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="force_server_id">Forced Connection <i title="Force this user to connect to a specific server. Otherwise, the server with the lowest load will be selected." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="force_server_id" id="force_server_id" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($cc386f9ba082650e)) {
	goto label560;
}

if (!(intval($cc386f9ba082650e['force_server_id']) == 0)) {
	goto label560;
}

goto label559;

label349:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="official_duration_in" id="official_duration_in" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([$_['hours'] => 'hours', $_['days'] => 'days', $_['months'] => 'months', $_['years'] => 'years'] as $fb173e63c96d4021 => $C37899efeb2f3cd8) {
	goto label372;

	label363:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label387;

	label366:

	echo 'value="';
	echo $C37899efeb2f3cd8;
	echo '">';
	echo $fb173e63c96d4021;
	goto label363;

	label372:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($cc386f9ba082650e)) {
		goto label366;
	}

	if (!($cc386f9ba082650e['official_duration_in'] == $C37899efeb2f3cd8)) {
		goto label385;
	}

	echo 'selected ';

	label385:

	goto label366;

	label387:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
goto label60;

label393:
if (!(isset(XUI::$rRequest['id']) && !($cc386f9ba082650e = FdDf8Da6ab3fE47B(XUI::$rRequest['id'])))) {
	goto label409;
}

E72f42a93714BA87();

label409:

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
$F6edd90960a3bd9d = 'Package';
goto label42;

label412:

echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n" . '                                                <a href="javascript: void(0);" onClick="toggleGroups()" class="btn btn-info">';
echo $_['toggle_groups'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary nextb">';
echo $_['next'];
goto label18;

label421:

goto label424;

label422:

echo $_['edit_package'];

label424:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";
goto label535;

label426:

echo '</th>' . "\n" . '                                                                <th class="text-center">';
echo $_['stations'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f964b9222b35addD() as $f155fef57262b32a) {
	goto label436;

	label436:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr';
	if (!(isset($cc386f9ba082650e) && in_array($f155fef57262b32a['id'], json_decode($cc386f9ba082650e['bouquets'], true)))) {
		goto label455;
	}

	echo ' class=\'selected selectedfilter ui-selected\'';

	label455:

	echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label470;

	label458:

	echo count(json_decode($f155fef57262b32a['bouquet_radios'], true));
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label510;

	label470:

	echo $f155fef57262b32a['id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $f155fef57262b32a['bouquet_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_channels'], true));
	goto label487;

	label487:

	echo '</td>' . "\n" . '                                                                <td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_movies'], true));
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo count(json_decode($f155fef57262b32a['bouquet_series'], true));
	echo '</td>' . "\n" . '                                                                <td class="text-center">';
	goto label458;

	label510:
}

goto label527;

label513:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_line">Standard Line</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_line" id="is_line" type="checkbox" ';

if (isset($cc386f9ba082650e)) {
	goto label179;
}

echo 'checked ';
goto label178;

label519:

echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['next'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="groups">' . "\n" . '                                        <div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-groups" class="table table-striped table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
goto label228;

label527:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="toggleBouquets()" class="btn btn-info">';
echo $_['toggle_bouquets'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_package" type="submit" class="btn btn-primary" value="';
goto label9;

label535:

if (!isset($cc386f9ba082650e)) {
	goto label543;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $cc386f9ba082650e['id'];
echo '" />' . "\n\t\t\t\t\t\t\t";

label543:

goto label327;

label544:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($cc386f9ba082650e)) {
	goto label422;
}

echo $_['add_package'];
goto label421;

label553:

echo 'checked ';

label554:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="check_compatible">Verify Compatibility <i title="Check that the existing package is compatible with the new package when extending lines. If it is not compatible, the package will be replaced with the current date as the original expiration date." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="check_compatible" id="check_compatible" type="checkbox" ';

if (isset($cc386f9ba082650e)) {
	goto label95;
}

goto label93;

label559:

echo 'selected ';

label560:

echo 'value="0">Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	goto label565;

	label565:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($cc386f9ba082650e)) {
		goto label587;
	}

	if (!(intval($cc386f9ba082650e['force_server_id']) == intval($Ec379295dc7029e6['id']))) {
		goto label585;
	}

	echo 'selected ';

	label585:

	goto label587;

	label587:

	echo 'value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo htmlspecialchars($Ec379295dc7029e6['server_name']);
	goto label598;

	label598:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label601;

	label601:
}

goto label649;

label604:

echo 'checked ';

label605:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="trial_credits">Credit Cost</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="trial_credits" name="trial_credits" onkeypress="return isNumberKey(event)" value="';

if (isset($cc386f9ba082650e)) {
	goto label170;
}

goto label168;

label610:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="trial_duration">Duration</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="trial_duration" name="trial_duration" value="';

if (isset($cc386f9ba082650e)) {
	goto label616;
}

echo '0';
goto label191;

label616:

goto label186;

label617:

echo $_['streams'];
echo '</th>' . "\n" . '                                                                <th class="text-center">';
echo $_['movies'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['series'];
goto label426;

label626:

echo $_['bouquets'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="package-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="package_name">';
echo $_['package_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="package_name" name="package_name" value="';

if (!isset($cc386f9ba082650e)) {
	goto label31;
}

goto label26;

label637:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <h4 class="m-t-0 header-title mb-4">Standard Package</h4>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_official">Enabled</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_official" id="is_official" type="checkbox" ';

if (!isset($cc386f9ba082650e)) {
	goto label310;
}

if (!($cc386f9ba082650e['is_official'] == 1)) {
	goto label648;
}

echo 'checked ';

label648:

goto label310;

label649:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="forced_country">Forced Country <i title="Force user to connect to loadbalancer associated with the selected country." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="forced_country" id="forced_country" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($dbf6ba9f4917ae91 as $b8f81a9f6e93f6a9) {
	goto label665;

	label654:

	echo 'value="';
	echo $b8f81a9f6e93f6a9['id'];
	echo '">';
	echo $b8f81a9f6e93f6a9['name'];
	goto label662;

	label662:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label681;

	label665:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($cc386f9ba082650e)) {
		goto label654;
	}

	if (!($cc386f9ba082650e['forced_country'] == $b8f81a9f6e93f6a9['id'])) {
		goto label679;
	}

	echo 'selected ';

	label679:

	goto label654;

	label681:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="max_connections">';
goto label159;

label685:

include 'footer.php';

?>