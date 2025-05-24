<?php


goto label99;

label1:

echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
echo '</option>' . "\n" . '                                                    ';

label5:

echo '                                                </select>' . "\n" . '                                            </div>' . "\n" . '                                            <label class="col-md-1 col-form-label text-center" for="mag_reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearMagOwner();">CLEAR</button></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="mag_filter" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>No Filter</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1">Active</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="2">Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="3">Banned</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="4">Expired</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="5">Trial</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="mag_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label627;

label7:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n" . '                                                <select id="radio_filter" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="">No Filter</option>' . "\n" . '                                                    <option value="1">Online</option>' . "\n" . '                                                    <option value="2">Down</option>' . "\n" . '                                                    <option value="3">Stopped</option>' . "\n" . '                                                    <option value="4">Starting</option>' . "\n" . '                                                    <option value="5">On Demand</option>' . "\n" . '                                                    <option value="6">Direct</option>' . "\n" . '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="radio_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label18;
	}

	echo ' selected';

	label18:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleRadios()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md6" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                                        <th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Station Name</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Category</th>' . "\n" . '                                                        <th>';
echo $_['servers'];
goto label301;

label29:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="3">';
echo $_['down'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="4">';
echo $_['ready'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="5">';
goto label116;

label37:

echo '</option>' . "\n" . '                                                    <option value="-1">No Categories</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769E3f0C739d1a6('live') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n" . '                                                <select id="stream_filter" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="">No Filter</option>' . "\n" . '                                                    <option value="1">Online</option>' . "\n" . '                                                    <option value="2">Down</option>' . "\n" . '                                                    <option value="3">Stopped</option>' . "\n" . '                                                    <option value="4">Starting</option>' . "\n" . '                                                    <option value="5">On Demand</option>' . "\n" . '                                                    <option value="6">Direct</option>' . "\n" . '                                                    <option value="7">Timeshift</option>' . "\n" . '                                                    <option value="8">Looping</option>' . "\n" . '                                                    <option value="9">Has EPG</option>' . "\n" . '                                                    <option value="10">No EPG</option>' . "\n" . '                                                    <option value="11">Adaptive Link</option>' . "\n" . '                                                    <option value="12">Title Sync</option>' . "\n" . '                                                    <option value="13">Transcoding</option>' . "\n" . '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label63;
	}

	echo ' selected';

	label63:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label286;

label71:

echo '...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3 col-6">' . "\n" . '                                                <select id="stream_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>All Servers</option>' . "\n" . '                                                    <option value="-1">No Servers</option>' . "\n" . '                                                    ';

foreach (c6A90bFcD425eb63() as $Ec379295dc7029e6) {
	echo '                                                    <option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                                    ';
}

echo '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="stream_category_search" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_categories'];
goto label37;

label92:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleEnigmas()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md9" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n" . '                                                        <th>';
echo $_['username'];
goto label384;

label99:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label107;
}

E72f42A93714ba87();

label107:

goto label400;

label108:

echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['status'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['online'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
goto label493;

label116:

echo $_['direct'];
echo '</option>' . "\n" . '                                                    <option value="7">Transcoding</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="episode_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label129;
	}

	echo ' selected';

	label129:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleEpisodes()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md5" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n" . '                                                        <th class="text-center">';
goto label270;

label138:
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = bA89228DC958Ce05(intval(XUI::$rRequest['owner']))))) {
	goto label251;
}

echo '                                                    <option value="';
echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
goto label250;

label164:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_mags" type="submit" class="btn btn-primary" value="Delete Devices" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                <div class="tab-pane" id="enigma-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="enigma_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="enigmas" id="enigmas" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="enigma_search" value="" placeholder="Search Devices...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3">' . "\n" . '                                                <select id="enigma_reseller_search" class="form-control" data-toggle="select2">' . "\n" . '                                                    ';
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = bA89228dC958ce05(intval(XUI::$rRequest['owner']))))) {
	goto label436;
}

echo '                                                    <option value="';
echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
goto label433;

label189:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleLines()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md3" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Username</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Owner</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Trial</th>' . "\n" . '                                                        <th class="text-center">Restreamer</th>' . "\n" . '                                                        <th></th>' . "\n" . '                                                        <th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Expiration</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_lines" type="submit" class="btn btn-primary" value="Delete Lines" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                <div class="tab-pane" id="user-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="user_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="users" id="users" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="user_search" value="" placeholder="Search Users...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3">' . "\n" . '                                                <select id="user_reseller_search" class="form-control" data-toggle="select2">' . "\n" . '                                                    ';
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = bA89228dC958cE05(intval(XUI::$rRequest['owner']))))) {
	goto label532;
}

echo '                                                    <option value="';
echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
goto label529;

label214:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3 col-6">' . "\n" . '                                                <select id="episode_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>All Servers</option>' . "\n" . '                                                    <option value="-1">No Servers</option>' . "\n" . '                                                    ';

foreach (C6a90bfcD425eb63() as $Ec379295dc7029e6) {
	echo '                                                    <option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                                    ';
}

echo '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="episode_filter" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
goto label375;

label233:

echo '</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#radio-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-radio mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['stations'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#episodes-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-open-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['episodes'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#series-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-youtube-tv mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
goto label241;

label241:

echo $_['series'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#line-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-wallet-membership mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['lines'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#user-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Users</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#mag-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-monitor mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">MAGs</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#enigma-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-desktop-tower-monitor mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Enigmas</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="stream_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="streams" id="streams" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_search" value="" placeholder="';
echo $_['search_streams'];
goto label71;

label250:

echo '</option>' . "\n" . '                                                    ';

label251:

echo '                                                </select>' . "\n" . '                                            </div>' . "\n" . '                                            <label class="col-md-1 col-form-label text-center" for="reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();">CLEAR</button></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="line_filter" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>No Filter</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1">Active</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="2">Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="3">Banned</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="4">Expired</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="5">Trial</option>' . "\n" . '                                                    <option value="6">Restreamer</option>' . "\n" . '                                                    <option value="7">Ministra</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="line_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label262;
	}

	echo ' selected';

	label262:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label189;

label270:

echo $_['id'];
echo '</th>' . "\n" . '                                                        <th class="text-center">Image</th>' . "\n" . '                                                        <th>';
echo $_['name'];
echo '</th>' . "\n" . '                                                        <th>';
echo $_['server'];
goto label293;

label279:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['streams'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t" . '<a href="#movie-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['movies'];
goto label233;

label286:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md1" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                                        <th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Stream Name</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Category</th>' . "\n" . '                                                        <th>Server</th>' . "\n" . '                                                        <th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_streams" type="submit" class="btn btn-primary" value="';
echo $_['delete_streams'];
echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="movie-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="movie_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="movies" id="movies" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="movie_search" value="" placeholder="';
echo $_['search_movies'];
goto label455;

label293:

echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['status'];
echo '</th>' . "\n" . '                                                    </tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_episodes" type="submit" class="btn btn-primary" value="';
echo $_['delete_episodes'];
echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="line-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="line_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="lines" id="lines" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="line_search" value="" placeholder="Search Lines...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n" . '                                                <select id="reseller_search" class="form-control" data-toggle="select2">' . "\n" . '                                                    ';
goto label138;

label301:

echo '</th>' . "\n" . '                                                        <th class="text-center">Status</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_streams" type="submit" class="btn btn-primary" value="Delete Stations" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="series-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="series_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="series" id="series" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="series_search" value="" placeholder="';
echo $_['search_series'];
echo '...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="series_category_search" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_categories'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="-1">';
goto label608;

label309:

echo $_['search_episodes'];
echo '...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="episode_series" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="">';
echo $_['all_series'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F5E03449E4b2215C() as $F8e69f8a7a0c470c) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $F8e69f8a7a0c470c['id'];
	echo '">';
	echo $F8e69f8a7a0c470c['title'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label214;

label329:

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['mass_delete'];
echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == 1))) {
	goto label279;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'Mass delete has been executed.' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";
goto label279;

label342:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleUsers()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md7" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                                        <th>Username</th>' . "\n" . '                                                        <th>Owner</th>' . "\n" . '                                                        <th class="text-center">IP</th>' . "\n" . '                                                        <th class="text-center">Type</th>' . "\n" . '                                                        <th class="text-center">Status</th>' . "\n" . '                                                        <th class="text-center">Credits</th>' . "\n" . '                                                        <th class="text-center">Users</th>' . "\n" . '                                                        <th class="text-center">Last Login</th>' . "\n" . '                                                        <th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_users" type="submit" class="btn btn-primary" value="Delete Users" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                <div class="tab-pane" id="mag-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="mag_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="mags" id="mags" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="mag_search" value="" placeholder="Search Devices...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3">' . "\n" . '                                                <select id="mag_reseller_search" class="form-control" data-toggle="select2">' . "\n" . '                                                    ';
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = bA89228dc958cE05(intval(XUI::$rRequest['owner']))))) {
	goto label5;
}

echo '                                                    <option value="';
echo intval($C0a1fd30f0173389['id']);
goto label1;

label366:

echo $_['category'];
echo '</th>' . "\n" . '                                                        <th>';
echo $_['servers'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['status'];
goto label587;

label375:

echo $_['no_filter'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1">';
echo $_['encoded'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="2">';
echo $_['encoding'];
goto label29;

label384:

echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['mac_address'];
echo '</th>' . "\n" . '                                                        <th class="text-center">Device</th>' . "\n" . '                                                        <th>';
echo $_['owner'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
goto label578;

label392:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1">';
echo $_['encoded'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="2">';
echo $_['encoding'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="3">';
goto label484;

label400:

set_time_limit(0);
ini_set('max_execution_time', 0);
$F6edd90960a3bd9d = 'Mass Delete';
include 'header.php';
echo '<div class="wrapper boxed-layout-xl"';
goto label551;

label411:

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label421;
	}

	echo ' selected';

	label421:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleSeries()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md4" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                                        <th class="text-center">Image</th>' . "\n" . '                                                        <th>Name</th>' . "\n" . '                                                        <th>Category</th>' . "\n" . '                                                        <th class="text-center">Seasons</th>' . "\n" . '                                                        <th class="text-center">Episodes</th>' . "\n" . '                                                        <th class="text-center">TMDb</th>' . "\n" . '                                                        <th class="text-center">First Aired</th>' . "\n" . '                                                        <th class="text-center">Last Updated</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_series" type="submit" class="btn btn-primary" value="';
echo $_['delete_series'];
echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="episodes-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="episodes_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="episodes" id="episodes" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="episode_search" value="" placeholder="';
goto label309;

label433:

echo $C0a1fd30f0173389['username'];
echo '</option>' . "\n" . '                                                    ';

label436:

echo '                                                </select>' . "\n" . '                                            </div>' . "\n" . '                                            <label class="col-md-1 col-form-label text-center" for="enigma_reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearE2Owner();">CLEAR</button></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="enigma_filter" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>No Filter</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1">Active</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="2">Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="3">Banned</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="4">Expired</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="5">Trial</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="enigma_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label447;
	}

	echo ' selected';

	label447:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label92;

label455:

echo '...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3 col-6">' . "\n" . '                                                <select id="movie_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>All Servers</option>' . "\n" . '                                                    <option value="-1">No Servers</option>' . "\n" . '                                                    ';

foreach (C6A90bFcD425EB63() as $Ec379295dc7029e6) {
	echo '                                                    <option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                                    ';
}

echo '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="movie_category_search" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_categories'];
goto label510;

label476:

echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['expiration'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_enigmas" type="submit" class="btn btn-primary" value="Delete Devices" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label690;

label484:

echo $_['down'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="4">';
echo $_['ready'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="5">';
echo $_['direct'];
goto label668;

label493:

echo $_['trial'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['expiration'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['actions'];
goto label164;

label502:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleMovies()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md2" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n" . '                                                        <th class="text-center">Image</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
goto label366;

label510:

echo '</option>' . "\n" . '                                                    <option value="-1">No Categories</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F769E3F0c739D1a6('movie') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="movie_filter" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['no_filter'];
goto label392;

label529:

echo $C0a1fd30f0173389['username'];
echo '</option>' . "\n" . '                                                    ';

label532:

echo '                                                </select>' . "\n" . '                                            </div>' . "\n" . '                                            <label class="col-md-1 col-form-label text-center" for="user_reseller_search"><button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearUserOwner();">CLEAR</button></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="user_filter" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>No Filter</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="-1">Active</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="-2">Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="user_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label543;
	}

	echo ' selected';

	label543:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label342;

label551:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label566;
}

echo ' style="display: none;"';

label566:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n" . '                    <div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
goto label329;

label569:

echo $_['username'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['mac_address'];
echo '</th>' . "\n" . '                                                        <th class="text-center">Device</th>' . "\n" . '                                                        <th>';
echo $_['owner'];
goto label108;

label578:

echo $_['status'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['online'];
echo '</th>' . "\n" . '                                                        <th class="text-center">';
echo $_['trial'];
goto label476;

label587:

echo '</th>' . "\n" . '                                                        <th class="text-center">TMDb</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:20px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_movies" type="submit" class="btn btn-primary" value="';
echo $_['delete_movies'];
echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                <div class="tab-pane" id="radio-selection">' . "\n\t\t\t\t\t\t\t\t\t" . '<form action="#" method="POST" id="radio_form">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<input type="hidden" name="radios" id="radios" value="" />' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="radio_search" value="" placeholder="Search Stations...">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            <div class="col-md-3 col-6">' . "\n" . '                                                <select id="station_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                                    <option value="" selected>All Servers</option>' . "\n" . '                                                    <option value="-1">No Servers</option>' . "\n" . '                                                    ';

foreach (c6a90BfcD425EB63() as $Ec379295dc7029e6) {
	echo '                                                    <option value="';
	echo intval($Ec379295dc7029e6['id']);
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                                    ';
}

goto label649;

label608:

echo $_['no_tmdb_match'];
echo '</option>' . "\n" . '                                                    <option value="-2">No Categories</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F769e3F0c739d1a6('series') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="series_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label411;

label627:

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label637;
	}

	echo ' selected';

	label637:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleMags()" style="width: 100%">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-selection"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-md8" class="table table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead class="bg-light">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n" . '                                                        <th>';
goto label569;

label649:

echo '                                                </select>' . "\n" . '                                            </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="radio_category_search" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>';
echo $_['all_categories'];
echo '</option>' . "\n" . '                                                    <option value="-1">No Categories</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769E3f0c739D1A6('radio') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label7;

label668:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="6">';
echo $_['no_tmdb_match'];
echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-1 col-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="movie_show_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label682;
	}

	echo ' selected';

	label682:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label502;

label690:

include 'footer.php';

?>