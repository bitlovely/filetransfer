<?php


goto label265;

label1:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reencode_on_edit">Full re-encode on Edit</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="reencode_on_edit" id="reencode_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                    ';

label2:

echo '                                                    <label class="col-md-4 col-form-label" for="restart_on_edit">';

if (isset($aa4e95f1ed1932a8)) {
	goto label397;
}

echo 'Start After Creation';
goto label396;

label8:

foreach (f964b9222b35aDDD() as $f155fef57262b32a) {
	goto label25;

	label14:

	echo 'value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	goto label22;

	label22:

	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label48;

	label25:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($aa4e95f1ed1932a8)) {
		goto label14;
	}

	if (!in_array($aa4e95f1ed1932a8['id'], json_decode($f155fef57262b32a['bouquet_channels'], true))) {
		goto label46;
	}

	echo 'selected ';

	label46:

	goto label14;

	label48:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n" . '                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">' . "\r\n" . '                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>' . "\r\n" . '                                                        </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="channel_type">Selection Type <i title="You can create a channel by either syncing it to an existing series, selecting VOD you already have on your servers or by individually selecting files." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="channel_type" id="channel_type" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Series', 'File Browser', 'VOD Selection'] as $Abcb228699a7f743 => $A7d54b094ae83c95) {
	goto label65;

	label56:

	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label80;

	label59:

	echo 'value="';
	echo $Abcb228699a7f743;
	echo '">';
	echo $A7d54b094ae83c95;
	goto label56;

	label65:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($aa4e95f1ed1932a8)) {
		goto label59;
	}

	if (!($Ccbdf03f8a4df633['type'] == $Abcb228699a7f743)) {
		goto label78;
	}

	echo 'selected ';

	label78:

	goto label59;

	label80:
}

goto label798;

label83:

$F771d40e8cf51e59 = F769E3F0c739D1a6('live');
$Cf9848d22b37a744 = F93E9343c3D7Fd99();

if (!isset(XUI::$rRequest['id'])) {
	goto label549;
}

$aa4e95f1ed1932a8 = f260B7a31f021e39(XUI::$rRequest['id']);
if (!(!$aa4e95f1ed1932a8 || ($aa4e95f1ed1932a8['type'] != 3))) {
	goto label549;
}

goto label547;

label110:

foreach (f769e3f0c739d1a6('movie') as $Dbcac322b4274e46) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="0:';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

foreach (deCBAb9141f9eE50() as $d02ef9ae10a41939) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="1:';
	echo $d02ef9ae10a41939['id'];
	echo '">';
	echo $d02ef9ae10a41939['title'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="vod_search">Search</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="vod_search" value="">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-movies" class="table table-striped table-borderless nowrap">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Category / Series</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label651;

label139:

$df6991d59f367c7e = 0;

foreach ($e8d6a476285e9da1 as $C082ca9ed03f473c => $Ec0879f16d0cdddb) {
	foreach ($Ec0879f16d0cdddb as $fd51b5505224fc7c) {
		echo '                                                                <tr class="rtmp_info">' . "\r\n" . '                                                                    <td class="rtmp_server">' . "\r\n" . '                                                                        <select id="rtmp_push_';
		echo $df6991d59f367c7e;
		echo '" class="form-control select2" data-toggle="select2">' . "\r\n" . '                                                                            ';

		foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
			echo '                                                                            <option value="';
			echo $Ec379295dc7029e6['id'];
			echo '"';
			if (!(isset($aa4e95f1ed1932a8) && ($C082ca9ed03f473c == $Ec379295dc7029e6['id']))) {
				goto label166;
			}

			echo ' selected';

			label166:

			echo '>';
			echo $Ec379295dc7029e6['server_name'];
			echo '</option>' . "\r\n" . '                                                                            ';
		}

		echo '                                                                        </select>' . "\r\n" . '                                                                    </td>' . "\r\n" . '                                                                    <td class="input-group">' . "\r\n" . '                                                                        <input type="text" class="form-control" value="';
		echo htmlspecialchars($fd51b5505224fc7c);
		echo '">' . "\r\n" . '                                                                        <div class="input-group-append">' . "\r\n" . '                                                                            <button class="btn btn-danger waves-effect waves-light btn-fixed-xs" onClick="removeRTMP(this);" type="button"><i class="mdi mdi-close"></i></button>' . "\r\n" . '                                                                        </div>' . "\r\n" . '                                                                    </td>' . "\r\n" . '                                                                </tr>' . "\r\n" . '                                                            ';
		$df6991d59f367c7e++;
	}
}

echo '                                                    </tbody>' . "\r\n" . '                                                </table>' . "\r\n" . '                                            </div>' . "\r\n" . '                                        </div>' . "\r\n" . '                                        <ul class="list-inline wizard mb-0" style="padding-top: 30px;">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
echo $_['prev'];
goto label561;

label188:

echo htmlspecialchars($aa4e95f1ed1932a8['custom_sid']);

label193:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="notes">Notes</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">';

if (!isset($aa4e95f1ed1932a8)) {
	goto label515;
}

echo htmlspecialchars($aa4e95f1ed1932a8['notes']);
goto label515;

label204:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $aa4e95f1ed1932a8['id'];
echo '" />' . "\r\n\t\t\t\t\t\t\t";

label208:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="video_files" id="video_files" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\r\n" . '                            <input type="hidden" name="external_push" id="external_push" value="" />' . "\r\n" . '                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />' . "\r\n" . '                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />' . "\r\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\r\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item" id="selection_nav">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Selection</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item" id="review_nav">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#review" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-marker mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Review</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item" id="videos_nav">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#videos" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-movie mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Videos</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n" . '                                    ';
goto label642;

label210:

$Ccbdf03f8a4df633 = ['type' => 0];

label211:

$da19996718fd9dd9 = B25F6f50dfA04eb7(XUI::$rRequest['id']);
goto label431;

label218:

if (isset($aa4e95f1ed1932a8)) {
	goto label223;
}

echo 'checked ';
goto label425;

label223:

if (!($aa4e95f1ed1932a8['allow_record'] == 1)) {
	goto label425;
}

goto label424;

label229:

if (!isset(XUI::$rRequest['id'])) {
	goto label241;
}

echo '?id=' . intval(XUI::$rRequest['id']);

label241:

echo '" method="POST" id="stream_form" data-parsley-validate="">' . "\r\n\t\t\t\t\t\t\t";

if (!isset($aa4e95f1ed1932a8)) {
	goto label208;
}

goto label204;

label247:

echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label263;
}

echo ' style="display: none;"';

label263:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
goto label507;

label265:

include 'session.php';
include 'functions.php';

if (E6D500e19634D513()) {
	goto label273;
}

E72f42A93714BA87();

label273:

goto label83;

label274:

$e8d6a476285e9da1 = json_decode($aa4e95f1ed1932a8['external_push'], true);

if ($e8d6a476285e9da1) {
	goto label283;
}

$e8d6a476285e9da1 = [
	['']
];

label283:

goto label139;

label284:

echo 'Edit';

label285:

echo '" />' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t\t" . '<div id="file-browser" class="mfp-hide white-popup-block">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_id">Server Name</label>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<select id="server_id" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

foreach (c6A90bfCd425eB63() as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";
}

goto label383;

label300:

echo 'value="-1">Don\'t Transcode - Symlink Files</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Cf9848d22b37a744 as $b376970f4d4df746) {
	goto label316;

	label305:

	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label350;

	label308:

	echo 'value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	goto label305;

	label316:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (isset($aa4e95f1ed1932a8)) {
		goto label334;
	}

	if (!($b376970f4d4df746['profile_id'] == $Cf9848d22b37a744[0]['profile_id'])) {
		goto label330;
	}

	echo 'selected ';

	label330:

	goto label332;

	label332:

	goto label308;

	label334:

	if (!(intval($aa4e95f1ed1932a8['transcode_profile_id']) == intval($b376970f4d4df746['profile_id']))) {
		goto label348;
	}

	echo 'selected ';

	label348:

	goto label308;

	label350:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="rtmp_output">Output RTMP <i title="Feed stream to the RTMP server for output to RTMP clients." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="rtmp_output" id="rtmp_output" type="checkbox" ';

if (!isset($aa4e95f1ed1932a8)) {
	goto label537;
}

goto label531;

label358:

echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'videos\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'videos\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="Remove(\'videos\')" class="btn btn-warning"><i class="mdi mdi-close"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'videos\')" class="btn btn-info">A to Z</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                    <div class="tab-pane" id="rtmp-push">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n" . '                                                <div class="alert bg-info text-white border-0" role="alert">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'RTMP Push will allow you to push your channels to RTMP servers, such as the one that runs with XUI. The `Push From` server needs to be enabled in the servers tab for this to be activated.' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <table id="datatable-rtmp" class="table table-striped table-borderless mb-0">' . "\r\n" . '                                                    <thead>' . "\r\n" . '                                                        <tr>' . "\r\n" . '                                                            <th>Push From</th>' . "\r\n" . '                                                            <th>RTMP URL</th>' . "\r\n" . '                                                        </tr>' . "\r\n" . '                                                    </thead>' . "\r\n" . '                                                    <tbody class="rtmp">' . "\r\n" . '                                                        ';

if (isset($aa4e95f1ed1932a8)) {
	goto label364;
}

$e8d6a476285e9da1 = [
	['']
];
goto label283;

label364:

goto label274;

label365:

if (isset($aa4e95f1ed1932a8)) {
	goto label382;
}

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => 'offline',
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
}

goto label504;

label382:

goto label846;

label383:

echo "\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="current_path">Current Path</label>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="current_path" name="current_path" class="form-control" value="/">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<button class="btn btn-primary waves-effect waves-light" type="button" id="changeDir"><i class="mdi mdi-chevron-right"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th width="20px"></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Directory</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-files" class="table">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th width="20px"></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Filename</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="float-right">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<input id="select_folder" type="button" class="btn btn-info" value="Add This Directory" />' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label875;

label385:

if (!(intval($aa4e95f1ed1932a8['transcode_profile_id']) == 0)) {
	goto label394;
}

echo 'selected ';

label394:

echo 'value="0">Quick Transcode - Copy Codecs</option>' . "\r\n" . '                                                            <option ';
goto label861;

label396:

goto label398;

label397:

echo 'Restart on Edit';

label398:

echo '</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">';
goto label552;

label400:

$b56fbe2eecc89270 = a6fcc34Ea39454A9($aa4e95f1ed1932a8['id']);

foreach ($b56fbe2eecc89270 as $C082ca9ed03f473c => $b8f08f147ab2227d) {
	echo "\t\t\t\t" . '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . '<strong>Error on Server - ';
	echo $Bcf70cba56392975[$C082ca9ed03f473c]['server_name'];
	echo '</strong><br/>' . "\r\n\t\t\t\t\t";
	echo str_replace("\n", '<br/>', $b8f08f147ab2227d);
	echo "\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";
}

label422:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t" . '<form action="./created_channel';
goto label229;

label424:

echo 'checked ';

label425:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                </div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="custom_sid">Custom Channel SID <i title="Here you can specify the SID of the channel in order to work with the epg on the enigma2 devices. You have to specify the code with the \':\' but without the first number, 1 or 4097 . Example: if we have this code:  \'1:0:1:13f:157c:13e:820000:0:0:0:2097\' then you have to add on this field:  \':0:1:13f:157c:13e:820000:0:0:0:" class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="custom_sid" name="custom_sid" value="';

if (!isset($aa4e95f1ed1932a8)) {
	goto label193;
}

goto label188;

label431:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	goto label435;

	label435:

	if (isset($da19996718fd9dd9[intval($Ec379295dc7029e6['id'])])) {
		goto label446;
	}

	$f6cad74ab6fb4eea = 'offline';
	goto label491;

	label446:

	if ($da19996718fd9dd9[intval($Ec379295dc7029e6['id'])]['parent_id'] != 0) {
		goto label481;
	}

	goto label458;

	label458:

	if (!$da19996718fd9dd9[intval($Ec379295dc7029e6['id'])]['on_demand']) {
		goto label474;
	}

	$Cc9b6078c1293a96[] = intval($Ec379295dc7029e6['id']);

	label474:

	$f6cad74ab6fb4eea = 'source';
	goto label491;
	goto label481;

	label479:

	goto label502;

	label481:

	$f6cad74ab6fb4eea = intval($da19996718fd9dd9[intval($Ec379295dc7029e6['id'])]['parent_id']);

	label491:

	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => $f6cad74ab6fb4eea,
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
	goto label479;

	label502:
}

label504:

$F6edd90960a3bd9d = 'Created Channel';
include 'header.php';
goto label247;

label507:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($aa4e95f1ed1932a8)) {
	goto label539;
}

echo 'Create Channel';
goto label541;
goto label539;

label515:

echo '</textarea>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item nextb float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="selection">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_idc">Server Name</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="server_idc" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (C6a90BFcD425EB63() as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_name">Category / Series</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="category_idv" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="" selected>No Filter</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label110;

label531:

if (!($aa4e95f1ed1932a8['rtmp_output'] == 1)) {
	goto label537;
}

echo 'checked ';

label537:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                    <label class="col-md-3 col-form-label" for="allow_record">Allow Recording <i title="Allow MAG devices to record this channel." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_record" id="allow_record" type="checkbox" ';
goto label218;

label539:

echo $aa4e95f1ed1932a8['stream_display_name'];

label541:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t";

if (!isset($aa4e95f1ed1932a8)) {
	goto label422;
}

goto label400;

label547:

e72f42A93714ba87();

label549:

$Cc9b6078c1293a96 = [];
$E23b1ca1f188e5ac = [
	[
	'id'     => 'source',
	'parent' => '#',
	'text'   => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Online</strong>',
	'icon'   => 'mdi mdi-play',
	'state'  => ['opened' => true]
],
	[
	'id'     => 'offline',
	'parent' => '#',
	'text'   => '<strong class=\'btn btn-secondary waves-effect waves-light btn-xs\'>Offline</strong>',
	'icon'   => 'mdi mdi-stop',
	'state'  => ['opened' => true]
]
];
goto label365;

label552:

echo $_['prev'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_stream" type="submit" class="btn btn-primary" value="';

if (isset($aa4e95f1ed1932a8)) {
	goto label284;
}

echo 'Create';
goto label285;
goto label284;

label561:

echo '</a>' . "\r\n" . '                                            </li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\r\n" . '                                                <a onClick="addRTMP();" class="btn btn-info btn-pointer">Add RTMP URL</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn nextb btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n" . '                                    </div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="load-balancing">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="servers">Server Tree</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="server_tree"></div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <label class="col-md-4 col-form-label" for="on_demand">On-Demand Servers</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n" . '                                                        <select name="on_demand[]" id="on_demand" class="form-control select2-multiple select2" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset($fe93a43f53d92a4e) && in_array($Ec379295dc7029e6['id'], $Cc9b6078c1293a96))) {
		goto label581;
	}

	echo ' selected';

	label581:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n" . '                                                    ';

if (!isset($aa4e95f1ed1932a8)) {
	goto label2;
}

goto label1;

label593:

foreach (json_decode($aa4e95f1ed1932a8['stream_source'], true) as $fd51b5505224fc7c) {
	goto label602;

	label602:

	if (substr($fd51b5505224fc7c, 0, 2) == 's:') {
		goto label614;
	}

	$E111d28e9acc50b9 = $fd51b5505224fc7c;
	goto label631;

	label614:

	$E3665d09b9cea208 = explode(':', $fd51b5505224fc7c, 3);
	goto label626;

	label622:

	echo $E111d28e9acc50b9;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label636;

	label626:

	$E111d28e9acc50b9 = urldecode($E3665d09b9cea208[2]);

	label631:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $fd51b5505224fc7c;
	echo '">';
	goto label622;

	label636:
}

label638:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="prevb btn btn-secondary">';
echo $_['prev'];
goto label358;

label642:

if ($Ebb0b63f7c597ba4) {
	goto label645;
}

echo '                                    <li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#rtmp-push" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-upload-network-outline mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">RTMP Push</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n" . '                                    ';

label645:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server-network mr-1"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Servers</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_display_name">Channel Name</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="';

if (!isset($aa4e95f1ed1932a8)) {
	goto label719;
}

goto label714;

label651:

echo $_['prev'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="review">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4 stream-url">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select multiple id="review_sort" name="review_sort" class="form-control" style="min-height:400px;">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
if (!(isset($aa4e95f1ed1932a8) && in_array(intval($Ccbdf03f8a4df633['type']), [2]))) {
	goto label730;
}

foreach (json_decode($aa4e95f1ed1932a8['stream_source'], true) as $fd51b5505224fc7c) {
	goto label691;

	label677:

	echo $E111d28e9acc50b9;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label711;

	label681:

	$E111d28e9acc50b9 = urldecode($E3665d09b9cea208[2]);

	label686:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $fd51b5505224fc7c;
	echo '">';
	goto label677;

	label691:

	if (substr($fd51b5505224fc7c, 0, 2) == 's:') {
		goto label703;
	}

	$E111d28e9acc50b9 = $fd51b5505224fc7c;
	goto label686;

	label703:

	$E3665d09b9cea208 = explode(':', $fd51b5505224fc7c, 3);
	goto label681;

	label711:
}

goto label730;

label714:

echo htmlspecialchars($aa4e95f1ed1932a8['stream_display_name']);

label719:

echo '" required data-parsley-trigger="change">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_icon">Channel Logo</label>' . "\r\n" . '                                                    <div class="col-md-8 input-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_icon" name="stream_icon" value="';

if (!isset($aa4e95f1ed1932a8)) {
	goto label749;
}

echo htmlspecialchars($aa4e95f1ed1932a8['stream_icon']);
goto label749;

label730:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\r\n" . '                                                <a href="javascript: void(0);" class="prevb btn btn-secondary">';
echo $_['prev'];
echo '</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp(\'review\')" class="btn btn-purple"><i class="mdi mdi-chevron-up"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown(\'review\')" class="btn btn-purple"><i class="mdi mdi-chevron-down"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="AtoZ(\'review\')" class="btn btn-info">A to Z</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="videos">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4 stream-url">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="import_folder">Import Folder</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9 input-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="import_folder" name="import_folder" readonly class="form-control" value="">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="#file-browser" id="filebrowser" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-folder-open-outline"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-12 add-margin-top-20">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select multiple id="videos_sort" name="videos_sort" class="form-control" style="min-height:400px;">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
if (!(isset($aa4e95f1ed1932a8) && in_array(intval($Ccbdf03f8a4df633['type']), [1]))) {
	goto label638;
}

goto label593;

label749:

echo '">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onclick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="category_id">Categories</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n" . '                                                        <select name="category_id[]" id="category_id" class="form-control select2 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f769E3f0C739d1a6('live') as $Dbcac322b4274e46) {
	goto label768;

	label757:

	echo 'value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label765;

	label765:

	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label794;

	label768:

	echo '                                                            <option ';

	if (!isset($aa4e95f1ed1932a8)) {
		goto label757;
	}

	if (!in_array(intval($Dbcac322b4274e46['id']), json_decode($aa4e95f1ed1932a8['category_id'], true))) {
		goto label792;
	}

	echo 'selected ';

	label792:

	goto label757;

	label794:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n" . '                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">' . "\r\n" . '                                                            <strong>New Categories:</strong> <span id="category_new"></span>' . "\r\n" . '                                                        </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="bouquets">Bouquets</label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquets[]" id="bouquets" class="form-control select2-multiple select2" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label8;

label798:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4" id="series_nav">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="series_no">24/7 Series <i title="Select a series to sync with." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="series_no" id="series_no" class="form-control select2" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="0">Select a series...</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (f5e03449E4B2215c() as $d02ef9ae10a41939) {
	goto label808;

	label805:

	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label838;

	label808:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($aa4e95f1ed1932a8)) {
		goto label830;
	}

	if (!(intval($aa4e95f1ed1932a8['series_no']) == intval($d02ef9ae10a41939['id']))) {
		goto label828;
	}

	echo 'selected ';

	label828:

	goto label830;

	label830:

	echo 'value="';
	echo $d02ef9ae10a41939['id'];
	echo '">';
	echo $d02ef9ae10a41939['title'];
	goto label805;

	label838:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n" . '                                                <div class="form-group row mb-4">' . "\r\n" . '                                                    <div class="col-md-12" style="margin-bottom:10px; display:none;" id="warning">' . "\r\n" . '                                                        <div class="alert alert-warning" role="alert">' . "\r\n" . '                                                            Not all videos are supported as-is when streaming live, this could mean no video or audio displays. If this happens, you will need to transcode.<br/>' . "\r\n" . '                                                            Symlink\'s will only be created on the server the file originates from, if you\'re streaming to another server it will be downloaded normally.' . "\r\n" . '                                                        </div>' . "\r\n" . '                                                    </div>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Transcode videos using a profile, copy them or symlink them directly." class="tooltip text-secondary far fa-circle"></i></label>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="transcode_profile_id" id="transcode_profile_id" class="form-control select2" data-toggle="select2">' . "\r\n" . '                                                            <option ';

if (!isset($aa4e95f1ed1932a8)) {
	goto label394;
}

goto label385;

label846:

$Ccbdf03f8a4df633 = json_decode($aa4e95f1ed1932a8['movie_properties'], true);

if ($Ccbdf03f8a4df633) {
	goto label211;
}

if (0 < $aa4e95f1ed1932a8['series_no']) {
	goto label210;
}

$Ccbdf03f8a4df633 = ['type' => 1];
goto label211;
goto label210;

label861:

if (!isset($aa4e95f1ed1932a8)) {
	goto label874;
}

if (!(intval($aa4e95f1ed1932a8['transcode_profile_id']) == -1)) {
	goto label874;
}

echo 'selected ';

label874:

goto label300;

label875:

include 'footer.php';

?>