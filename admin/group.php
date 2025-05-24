<?php


goto label732;

label1:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_reseller">';
echo $_['is_reseller'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_reseller" id="is_reseller" type="checkbox" ';

if (!isset($fb719dae9595b9fa)) {
	goto label414;
}

if (!$fb719dae9595b9fa['is_reseller']) {
	goto label630;
}

goto label629;

label14:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="group_name" name="group_name" value="';

if (!isset($fb719dae9595b9fa)) {
	goto label24;
}

echo htmlspecialchars($fb719dae9595b9fa['group_name']);

label24:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="is_admin">';
goto label608;

label26:

$b62d6460eb33ea07->query('SELECT `id` FROM `users_packages` WHERE JSON_CONTAINS(`groups`, ?, \'$\');', $fb719dae9595b9fa['group_id']);

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$Dda77543504be2b2[] = $Fb9da1713bff19ce['id'];
}

$ef283dee605972af = json_decode($fb719dae9595b9fa['subresellers'], true);
$F5c08145e9d19ad1 = html_entity_decode($fb719dae9595b9fa['notice_html']);
goto label489;

label52:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="subreseller">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-10 col-form-label" for="create_sub_resellers">Allow Subreseller Creation</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="create_sub_resellers" id="create_sub_resellers" type="checkbox" ';

if (!isset($fb719dae9595b9fa)) {
	goto label142;
}

if (!$fb719dae9595b9fa['create_sub_resellers']) {
	goto label62;
}

echo 'checked ';

label62:

goto label142;

label63:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="allow_change_password">Change Passwords</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_change_password" id="allow_change_password" type="checkbox" ';

if (isset($fb719dae9595b9fa)) {
	goto label543;
}

echo 'checked ';
goto label542;

label69:

echo 'data-plugin="switchery" class="js-switch" data-color="#414d5f"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allow_change_bouquets">Allow Bouquet Editing</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_change_bouquets" id="allow_change_bouquets" type="checkbox" ';

if (!isset($fb719dae9595b9fa)) {
	goto label520;
}

if (!$fb719dae9595b9fa['allow_change_bouquets']) {
	goto label79;
}

echo 'checked ';

label79:

goto label520;

label80:

goto label86;

label81:

echo intval($fb719dae9595b9fa['total_allowed_gen_trials']);

label86:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="total_allowed_gen_in">';
goto label316;

label88:

$F5c08145e9d19ad1 = preg_replace('#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?expression[\\x00-\\x20]*\\([^>]*+>#i', '$1>', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?behaviour[\\x00-\\x20]*\\([^>]*+>#i', '$1>', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:*[^>]*+>#iu', '$1>', $F5c08145e9d19ad1);

label106:

$F6edd90960a3bd9d = 'Group';
goto label238;

label108:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="allow_download">Show M3U Download</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_download" id="allow_download" type="checkbox" ';

if (isset($fb719dae9595b9fa)) {
	goto label529;
}

echo 'checked ';
goto label528;

label114:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="permissions">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
echo $_['advanced_permissions_info'];
echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-permissions" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th style="display:none;">';
echo $_['id'];
goto label665;

label121:

echo 'checked ';
goto label441;

label123:

if (!$fb719dae9595b9fa['can_view_vod']) {
	goto label441;
}

echo 'checked ';
goto label441;

label129:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['package_name'];
echo '</th>' . "\n" . '                                                                <th class="text-center">';
echo $_['trial'];
echo '</th>' . "\n" . '                                                                <th class="text-center">';
goto label549;

label137:

goto label140;

label138:

echo $_['edit_group'];

label140:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";
goto label270;

label142:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-groups" class="table table-striped table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Group Name</th>' . "\n" . '                                                                <th class="text-center">Allowed Subresellers</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (Ad052a625c6ac011() as $A6d64ff71c9f7e6d) {
	goto label175;

	label152:

	echo ' class=\'selected selectedfilter ui-selected\'';

	label153:

	echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $A6d64ff71c9f7e6d['group_id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label163;

	label159:

	echo '                                                                    <i class=\'text-success mdi mdi-circle\'></i>' . "\n" . '                                                                    ';

	label160:

	echo '                                                                </td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label161:

	goto label203;

	label163:

	echo $A6d64ff71c9f7e6d['group_name'];
	echo '</td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    ';

	if ($A6d64ff71c9f7e6d['create_sub_resellers']) {
		goto label159;
	}

	echo '                                                                    <i class=\'text-secondary mdi mdi-circle\'></i>' . "\n" . '                                                                    ';
	goto label160;
	goto label159;

	label175:
	if (!(!$A6d64ff71c9f7e6d['is_reseller'] || (isset($fb719dae9595b9fa) && ($fb719dae9595b9fa['group_id'] == $A6d64ff71c9f7e6d['group_id'])))) {
		goto label191;
	}

	goto label161;

	label191:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr';

	if (!in_array($A6d64ff71c9f7e6d['group_id'], $ef283dee605972af)) {
		goto label153;
	}

	goto label152;

	label203:
}

goto label446;

label206:

$F5c08145e9d19ad1 = html_entity_decode($F5c08145e9d19ad1, ENT_COMPAT, 'UTF-8');
$F5c08145e9d19ad1 = preg_replace('#(<[^>]+?[\\x00-\\x20"\'])(?:on|xmlns)[^>]*+[>\\b]?#iu', '$1>', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#([a-z]*)[\\x00-\\x20]*=[\\x00-\\x20]*([`\'"]*)[\\x00-\\x20]*j[\\x00-\\x20]*a[\\x00-\\x20]*v[\\x00-\\x20]*a[\\x00-\\x20]*s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:#iu', '$1=$2nojavascript...', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#([a-z]*)[\\x00-\\x20]*=([\'"]*)[\\x00-\\x20]*v[\\x00-\\x20]*b[\\x00-\\x20]*s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:#iu', '$1=$2novbscript...', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#([a-z]*)[\\x00-\\x20]*=([\'"]*)[\\x00-\\x20]*-moz-binding[\\x00-\\x20]*:#u', '$1=$2nomozbinding...', $F5c08145e9d19ad1);
goto label88;

label238:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label255;
}

echo ' style="display: none;"';

label255:

goto label688;

label256:

goto label262;

label257:

echo intval($fb719dae9595b9fa['minimum_username_length']);

label262:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="minimum_password_length">Minimum Password Length</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="minimum_password_length" name="minimum_password_length" value="';
goto label643;

label264:

echo 'checked ';

label265:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="allow_change_username">Change Usernames</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_change_username" id="allow_change_username" type="checkbox" ';

if (isset($fb719dae9595b9fa)) {
	goto label766;
}

goto label764;

label270:

if (!isset($fb719dae9595b9fa)) {
	goto label278;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $fb719dae9595b9fa['group_id'];
echo '" />' . "\n\t\t\t\t\t\t\t";

label278:

goto label279;

label279:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="permissions_selected" id="permissions_selected" value="" />' . "\n" . '                            <input type="hidden" name="packages_selected" id="packages_selected" value="" />' . "\n" . '                            <input type="hidden" name="groups_selected" id="groups_selected" value="" />' . "\n" . '                            <input type="hidden" name="notice_html" id="notice_html" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#group-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item" id="package_tab">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#packages" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-package mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Packages</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item" id="reseller_tab">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#reseller" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-badge-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Permissions</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item" id="subreseller_tab">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#subreseller" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-multiple-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Subresellers</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item" id="notice_tab">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#notice" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-note mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Dashboard</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";
if (!(!isset($fb719dae9595b9fa) || $fb719dae9595b9fa['can_delete'])) {
	goto label760;
}

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item"  id="admin_tab">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#permissions" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-badge-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label757;

label293:
if (!(isset(XUI::$rRequest['id']) && !($fb719dae9595b9fa = a752238c4005cBBc(XUI::$rRequest['id'])))) {
	goto label309;
}

e72f42A93714BA87();

label309:

$ef283dee605972af = $Dda77543504be2b2 = [];

if (!isset($fb719dae9595b9fa)) {
	goto label106;
}

goto label26;

label316:

echo $_['allowed_trials_in'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="total_allowed_gen_in" id="total_allowed_gen_in" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Day', 'Month'] as $C37899efeb2f3cd8) {
	goto label335;

	label323:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label353;

	label326:

	echo 'value="';
	echo strtolower($C37899efeb2f3cd8);
	echo '">';
	echo $C37899efeb2f3cd8;
	goto label323;

	label335:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($fb719dae9595b9fa)) {
		goto label326;
	}

	if (!($fb719dae9595b9fa['total_allowed_gen_in'] == strtolower($C37899efeb2f3cd8))) {
		goto label351;
	}

	echo 'selected ';

	label351:

	goto label326;

	label353:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="minimum_trial_credits">';
goto label656;

label357:

echo htmlspecialchars($fb719dae9595b9fa['create_sub_resellers_price']);

label362:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="minimum_username_length">Minimum Username Length</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="minimum_username_length" name="minimum_username_length" value="';

if (isset($fb719dae9595b9fa)) {
	goto label257;
}

echo '8';
goto label256;

label368:

foreach ($d9557973ff68d879 as $f51fdbb70a8cbb4b) {
	goto label385;

	label372:

	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label407;

	label375:

	echo $f51fdbb70a8cbb4b[0];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $f51fdbb70a8cbb4b[1];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $f51fdbb70a8cbb4b[2];
	goto label372;

	label385:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr';
	if (!(isset($fb719dae9595b9fa) && in_array($f51fdbb70a8cbb4b[0], json_decode($fb719dae9595b9fa['allowed_pages'], true)))) {
		goto label404;
	}

	echo ' class=\'selected selectedfilter ui-selected\'';

	label404:

	echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td style="display:none;">';
	goto label375;

	label407:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="selectAll()" class="btn btn-info">';
goto label713;

label414:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_group" type="submit" class="btn btn-primary" value="';

if (isset($fb719dae9595b9fa)) {
	goto label483;
}

echo $_['add'];
goto label485;
goto label483;

label422:

if (!$fb719dae9595b9fa['allow_restrictions']) {
	goto label427;
}

echo 'checked ';

label427:

goto label69;

label428:

echo $_['add'];
goto label433;

label431:

echo $_['edit'];

label433:

goto label681;

label434:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="create_sub_resellers_price" name="create_sub_resellers_price" value="';

if (isset($fb719dae9595b9fa)) {
	goto label440;
}

echo '0';
goto label362;

label440:

goto label357;

label441:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_client_connection_logs">';
echo $_['can_view_live_connections'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="reseller_client_connection_logs" id="reseller_client_connection_logs" type="checkbox" ';
goto label747;

label446:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_group" type="submit" class="btn btn-primary" value="';

if (isset($fb719dae9595b9fa)) {
	goto label431;
}

goto label428;

label454:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="total_allowed_gen_trials">';
echo $_['allowed_trials'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="total_allowed_gen_trials" name="total_allowed_gen_trials" value="';

if (isset($fb719dae9595b9fa)) {
	goto label81;
}

echo '0';
goto label80;

label463:

echo intval($fb719dae9595b9fa['minimum_trial_credits']);

label468:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="create_sub_resellers_price">';
echo $_['subreseller_price'];
goto label434;

label472:

echo $_['add'];
goto label477;

label475:

echo $_['edit'];

label477:

goto label52;

label478:

if ($fb719dae9595b9fa['can_delete']) {
	goto label482;
}

echo 'disabled ';

label482:

goto label1;

label483:

echo $_['edit'];

label485:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="packages">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-packages" class="table table-striped table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
goto label129;

label489:

$F5c08145e9d19ad1 = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#</*\\w+:\\w[^>]*+>#i', '', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = str_replace(['&amp;', '&lt;', '&gt;'], ['&amp;amp;', '&amp;lt;', '&amp;gt;'], $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('/(&#*\\w+)[\\x00-\\x20]+;/u', '$1;', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $F5c08145e9d19ad1);
goto label206;

label520:

echo 'data-plugin="switchery" class="js-switch" data-color="#414d5f"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="delete_users">';
echo $_['can_delete_users'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="delete_users" id="delete_users" type="checkbox" ';

if (isset($fb719dae9595b9fa)) {
	goto label675;
}

goto label673;

label528:

goto label635;

label529:

if (!$fb719dae9595b9fa['allow_download']) {
	goto label534;
}

echo 'checked ';

label534:

goto label635;

label535:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="allow_restrictions">Allow Line Restrictions</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_restrictions" id="allow_restrictions" type="checkbox" ';

if (isset($fb719dae9595b9fa)) {
	goto label422;
}

echo 'checked ';
goto label427;
goto label422;

label542:

goto label621;

label543:

if (!$fb719dae9595b9fa['allow_change_password']) {
	goto label548;
}

echo 'checked ';

label548:

goto label621;

label549:

echo $_['official'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (D8c8284136938eF0() as $cc386f9ba082650e) {
	goto label570;

	label558:

	echo $cc386f9ba082650e['id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $cc386f9ba082650e['package_name'];
	echo '</td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    ';

	if ($cc386f9ba082650e['is_trial']) {
		goto label587;
	}

	goto label584;

	label570:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr';

	if (!in_array($cc386f9ba082650e['id'], $Dda77543504be2b2)) {
		goto label581;
	}

	echo ' class=\'selected selectedfilter ui-selected\'';

	label581:

	echo '>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label558;

	label584:

	echo '                                                                    <i class=\'text-secondary mdi mdi-circle\'></i>' . "\n" . '                                                                    ';
	goto label588;

	label587:

	echo '                                                                    <i class=\'text-success mdi mdi-circle\'></i>' . "\n" . '                                                                    ';

	label588:

	goto label594;

	label590:

	echo '                                                                    <i class=\'text-success mdi mdi-circle\'></i>' . "\n" . '                                                                    ';

	label591:

	echo '                                                                </td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label604;

	label594:

	echo '                                                                </td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    ';

	if ($cc386f9ba082650e['is_official']) {
		goto label602;
	}

	echo '                                                                    <i class=\'text-secondary mdi mdi-circle\'></i>' . "\n" . '                                                                    ';
	goto label591;

	label602:

	goto label590;

	label604:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label697;

label608:

echo $_['is_admin'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="is_admin" id="is_admin" type="checkbox" ';

if (!isset($fb719dae9595b9fa)) {
	goto label482;
}

if (!$fb719dae9595b9fa['is_admin']) {
	goto label478;
}

echo 'checked ';
goto label478;

label621:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_group" type="submit" class="btn btn-primary" value="';

if (isset($fb719dae9595b9fa)) {
	goto label475;
}

goto label472;

label629:

echo 'checked ';

label630:

if ($fb719dae9595b9fa['can_delete']) {
	goto label634;
}

echo 'disabled ';

label634:

goto label414;

label635:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="can_view_vod">';
echo $_['can_view_vod_streams'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="can_view_vod" id="can_view_vod" type="checkbox" ';

if (isset($fb719dae9595b9fa)) {
	goto label123;
}

goto label121;

label643:

if (isset($fb719dae9595b9fa)) {
	goto label648;
}

echo '8';
goto label535;

label648:

echo htmlspecialchars($fb719dae9595b9fa['minimum_password_length']);
goto label535;

label654:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label772;

label656:

echo $_['minimum_credit_for_trials'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="minimum_trial_credits" name="minimum_trial_credits" value="';

if (isset($fb719dae9595b9fa)) {
	goto label463;
}

echo '0';
goto label468;
goto label463;

label665:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['permission'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['description'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label368;

label673:

echo 'checked ';
goto label108;

label675:

if (!$fb719dae9595b9fa['delete_users']) {
	goto label108;
}

echo 'checked ';
goto label108;

label681:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="notice">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'Display a notice for this group when they\'ve logged into the Reseller Dashboard.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</p>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div id="notice-editor" style="height: 400px;">';
echo $F5c08145e9d19ad1;
echo '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_group" type="submit" class="btn btn-primary" value="';
goto label723;

label688:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($fb719dae9595b9fa)) {
	goto label138;
}

echo $_['add_group'];
goto label137;

label697:

echo $_['prev'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n" . '                                                <a href="javascript: void(0);" onClick="togglePackages()" class="btn btn-info">Toggle Packages</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_group" type="submit" class="btn btn-primary" value="';

if (isset($fb719dae9595b9fa)) {
	goto label707;
}

echo $_['add'];
goto label709;
goto label707;

label707:

echo $_['edit'];

label709:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="reseller">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<p class="sub-header">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
echo $_['permissions_info'];
goto label454;

label713:

echo $_['select_all'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="selectNone()" class="btn btn-warning">';
echo $_['deselect_all'];
echo '</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_group" type="submit" class="btn btn-primary" value="';

if (isset($fb719dae9595b9fa)) {
	goto label744;
}

goto label741;

label723:

if (isset($fb719dae9595b9fa)) {
	goto label729;
}

echo $_['add'];
goto label114;

label729:

echo $_['edit'];
goto label114;

label732:

include 'session.php';
include 'functions.php';

if (e6D500e19634D513()) {
	goto label740;
}

e72F42a93714Ba87();

label740:

goto label293;

label741:

echo $_['add'];
goto label746;

label744:

echo $_['edit'];

label746:

goto label654;

label747:

if (isset($fb719dae9595b9fa)) {
	goto label752;
}

echo 'checked ';
goto label265;

label752:

if (!$fb719dae9595b9fa['reseller_client_connection_logs']) {
	goto label265;
}

goto label264;

label757:

echo $_['admin_permissions'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

label760:

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="group-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="group_name">';
echo $_['group_name'];
goto label14;

label764:

echo 'checked ';
goto label63;

label766:

if (!$fb719dae9595b9fa['allow_change_username']) {
	goto label63;
}

echo 'checked ';
goto label63;

label772:

include 'footer.php';

?>