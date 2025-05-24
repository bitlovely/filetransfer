<?php


goto label236;

label1:

echo '                                            </select>' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-1 col-2">' . "\n" . '                                            <button type="button" class="btn btn-info waves-effect waves-light" onClick="toggleStreams()">' . "\n" . '                                                <i class="mdi mdi-selection"></i>' . "\n" . '                                            </button>' . "\n" . '                                        </div>' . "\n" . '                                        <table id="datatable-mass" class="table table-borderless mb-0">' . "\n" . '                                            <thead class="bg-light">' . "\n" . '                                                <tr>' . "\n" . '                                                    <th class="text-center">ID</th>' . "\n" . '                                                    <th>Stream Name</th>' . "\n" . '                                                    <th>Category</th>' . "\n" . '                                                    <th class="text-center">Status</th>' . "\n" . '                                                </tr>' . "\n" . '                                            </thead>' . "\n" . '                                            <tbody></tbody>' . "\n" . '                                        </table>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                        ';
goto label611;

label3:

echo '                        <input type="hidden" name="save_changes" value="1" />' . "\n" . '                        <input type="hidden" name="save_categories" value="';
goto label834;

label5:

echo '                                        </tr>' . "\n" . '                                    </thead>' . "\n" . '                                    <tbody>' . "\n" . '                                        ';

foreach ($ac8a8c4b32f5a746 as $fe93a43f53d92a4e) {
	goto label105;

	label10:

	echo '                                            <td>' . "\n" . '                                                <select id="epg_api_';
	echo $fe93a43f53d92a4e['id'];
	echo '" data-id="';
	echo $fe93a43f53d92a4e['id'];
	echo '" class="form-control epg_api" data-toggle="select2"></select>' . "\n" . '                                            </td>' . "\n" . '                                            <td style="width: 80px;">' . "\n" . '                                                <input type="text" class="form-control text-center" id="epg_lang_';
	goto label22;

	label19:

	echo '                                        </tr>' . "\n" . '                                        ';
	goto label168;

	label22:

	echo $fe93a43f53d92a4e['id'];
	echo '" readonly value=""></input>' . "\n" . '                                            </td>' . "\n" . '                                            <td class="text-center">' . "\n" . '                                                <button onClick="clearEPG(this);" id="clear_epg_';
	echo $fe93a43f53d92a4e['id'];
	echo '" data-id="';
	echo $fe93a43f53d92a4e['id'];
	goto label96;

	label32:

	foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
		echo '                                                    <option ';

		if (!in_array($Dbcac322b4274e46['id'], $fe93a43f53d92a4e['category'])) {
			goto label47;
		}

		echo 'selected ';

		label47:

		echo 'value="';
		echo $Dbcac322b4274e46['id'];
		echo '">';
		echo $Dbcac322b4274e46['category_name'];
		echo '</option>' . "\n" . '                                                    ';
	}

	echo '                                                </select>' . "\n" . '                                            </td>' . "\n" . '                                            ';

	label57:

	if (!$Fff7d74ee020d096['bouquets']) {
		goto label152;
	}

	goto label159;

	label64:

	echo '" data-id="';
	echo $fe93a43f53d92a4e['id'];
	echo '">' . "\n" . '                                                    ';

	if (!$Fff7d74ee020d096['epg']) {
		goto label79;
	}

	echo '                                                    <div class="input-group-append">' . "\n" . '                                                        <a href="javascript: void(0);" onClick="scanEPG(';
	goto label76;

	label76:

	echo $fe93a43f53d92a4e['id'];
	echo ');" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-magnify text-white"></i></a>' . "\n" . '                                                    </div>' . "\n" . '                                                    ';

	label79:

	echo '                                                </div>' . "\n" . '                                            </td>' . "\n" . '                                            ';

	if (!$Fff7d74ee020d096['categories']) {
		goto label57;
	}

	goto label87;

	label87:

	echo '                                            <td>' . "\n" . '                                                <select id="category_id_';
	echo $fe93a43f53d92a4e['id'];
	echo '" class="form-control select2-multiple category_id" data-id="';
	echo $fe93a43f53d92a4e['id'];
	echo '" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                                    ';
	goto label32;

	label96:

	echo '" type="button" title="Clear EPG" class="tooltip btn btn-secondary btn-xs waves-effect waves-light"><i class="text-white fas fa-times"></i></button>' . "\n" . '                                                <button onClick="viewEPG(this);" id="view_epg_';
	echo $fe93a43f53d92a4e['id'];
	echo '" data-id="';
	echo $fe93a43f53d92a4e['id'];
	echo '" type="button" title="View EPG API" class="tooltip btn btn-secondary btn-xs waves-effect waves-light"><i class="text-white far fa-circle"></i></button>' . "\n" . '                                            </td>' . "\n" . '                                            ';
	goto label19;

	label105:

	echo '                                        <tr id="stream_';
	echo $fe93a43f53d92a4e['id'];
	echo '" data-id="';
	echo $fe93a43f53d92a4e['id'];
	echo '">' . "\n" . '                                            <td class="text-center">';
	goto label114;

	label114:

	echo $fe93a43f53d92a4e['id'];
	echo '</td>' . "\n" . '                                            <td>' . "\n" . '                                                <div class="input-group">' . "\n" . '                                                    <input type="text" class="form-control name_input" id="name_';
	echo $fe93a43f53d92a4e['id'];
	echo '" value="';
	echo htmlspecialchars($fe93a43f53d92a4e['title']);
	goto label64;

	label127:

	foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
		echo '                                                    <option ';

		if (!in_array($f155fef57262b32a['id'], $fe93a43f53d92a4e['bouquets'])) {
			goto label142;
		}

		echo 'selected ';

		label142:

		echo 'value="';
		echo $f155fef57262b32a['id'];
		echo '">';
		echo $f155fef57262b32a['bouquet_name'];
		echo '</option>' . "\n" . '                                                    ';
	}

	echo '                                                </select>' . "\n" . '                                            </td>' . "\n" . '                                            ';

	label152:

	if (!$Fff7d74ee020d096['epg']) {
		goto label19;
	}

	goto label10;

	label159:

	echo '                                            <td>' . "\n" . '                                                <select id="bouquets_';
	echo $fe93a43f53d92a4e['id'];
	echo '" data-id="';
	echo $fe93a43f53d92a4e['id'];
	echo '" class="form-control select2-multiple bouquet" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                                    ';
	goto label127;

	label168:
}

echo '                                    </tbody>' . "\n" . '                                </table>' . "\n" . '                            </div>' . "\n" . '                        </div> ' . "\n" . '                        ';
goto label611;

label172:

echo '                        <input type="hidden" name="streams" id="streams" value="" />' . "\n" . '                        <div id="basicwizard">' . "\n" . '                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n" . '                                <li class="nav-item">' . "\n" . '                                    <a href="#stream-selection" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n" . '                                        <i class="mdi mdi-play mr-1"></i>' . "\n" . '                                        <span class="d-none d-sm-inline">Stream Selection</span>' . "\n" . '                                    </a>' . "\n" . '                                </li>' . "\n" . '                            </ul>' . "\n" . '                            <div class="tab-content b-0 mb-0 pt-0">' . "\n" . '                                <div class="tab-pane" id="stream-selection">' . "\n" . '                                    <div class="row" style="margin-bottom: 40px;">' . "\n" . '                                        <label class="col-md-2 col-form-label" for="edit_categories">Edit Categories</label>' . "\n" . '                                        <div class="col-md-2">' . "\n" . '                                            <input name="edit_categories" id="edit_categories" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                        </div>' . "\n" . '                                        <label class="col-md-2 col-form-label" for="edit_bouquets">Edit Bouquets</label>' . "\n" . '                                        <div class="col-md-2">' . "\n" . '                                            <input name="edit_bouquets" id="edit_bouquets" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                        </div>' . "\n" . '                                        <label class="col-md-2 col-form-label" for="edit_epg">Edit EPG</label>' . "\n" . '                                        <div class="col-md-2">' . "\n" . '                                            <input name="edit_epg" id="edit_epg" type="checkbox" checked data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="row">' . "\n" . '                                        <div class="col-md-3 col-6">' . "\n" . '                                            <input type="text" class="form-control" id="stream_search" value="" placeholder="Search Streams...">' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-3 col-6">' . "\n" . '                                            <select id="category_search" class="form-control" data-toggle="select2">' . "\n" . '                                                <option value="" selected>All Categories</option>' . "\n" . '                                                ';

foreach (f769E3F0c739D1a6('live') as $Dbcac322b4274e46) {
	echo '                                                <option value="';
	echo intval($Dbcac322b4274e46['id']);
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label198;
	}

	echo ' selected';

	label198:

	echo '>';
	echo htmlspecialchars($Dbcac322b4274e46['category_name']);
	echo '</option>' . "\n" . '                                                ';
}

echo '                                            </select>' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-3 col-6">' . "\n" . '                                            <select id="stream_filter" class="form-control" data-toggle="select2">' . "\n" . '                                                <option value="">No Filter</option>' . "\n" . '                                                <option value="1">Online</option>' . "\n" . '                                                <option value="2">Down</option>' . "\n" . '                                                <option value="3">Stopped</option>' . "\n" . '                                                <option value="4">Starting</option>' . "\n" . '                                                <option value="5">On Demand</option>' . "\n" . '                                                <option value="6">Direct</option>' . "\n" . '                                                <option value="7">Timeshift</option>' . "\n" . '                                                <option value="8">Looping</option>' . "\n" . '                                                <option value="9">Has EPG</option>' . "\n" . '                                                <option value="10">No EPG</option>' . "\n" . '                                            </select>' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-2 col-8">' . "\n" . '                                            <select id="show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                                ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                                <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label218;
	}

	echo ' selected';

	label218:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n" . '                                                ';
}

goto label1;

label226:

echo '">' . "\n" . '                                    <thead>' . "\n" . '                                        <tr>' . "\n" . '                                            <th width="10%" class="text-center">ID</th>' . "\n" . '                                            <th width="';
echo $f27e7fb2603dc5d1[0];
echo '%">Stream Name</th>' . "\n" . '                                            ';

if (!$Fff7d74ee020d096['categories']) {
	goto label262;
}

echo '                                            <th width="';
goto label259;

label236:

include 'session.php';
include 'functions.php';

if (e6d500e19634d513()) {
	goto label244;
}

e72f42a93714bA87();

label244:

goto label852;

label245:

echo $f27e7fb2603dc5d1[2];
echo '%">Bouquets</th>' . "\n" . '                                            ';

label248:

if (!$Fff7d74ee020d096['epg']) {
	goto label5;
}

echo '                                            <th>EPG Search</th>' . "\n" . '                                            <th class="text-center">Language</th>' . "\n" . '                                            <th></th>' . "\n" . '                                            ';
goto label5;

label254:

echo ' style="display: none;"';

label255:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n" . '        <form action="./stream_review" method="POST" id="stream_form" data-parsley-validate="">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n" . '                    <div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Mass Edit & Review <small id="selected_count"></small></h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
goto label667;

label259:

echo $f27e7fb2603dc5d1[1];
echo '%">Categories</th>' . "\n" . '                                            ';

label262:

if (!$Fff7d74ee020d096['bouquets']) {
	goto label248;
}

echo '                                            <th width="';
goto label245;

label268:
if (!(!$Fff7d74ee020d096['categories'] && !$Fff7d74ee020d096['bouquets'] && !$Fff7d74ee020d096['epg'])) {
	goto label282;
}

$f27e7fb2603dc5d1 = [90, 0, 0];

label282:

$ac8a8c4b32f5a746 = [];

if (!(0 < count($D9846544dffb63c9))) {
	goto label659;
}

goto label613;

label291:

$F1d68f79df3fd971 = [];

foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
	$Fcb3b5dd6bc21e23 = json_decode($f155fef57262b32a['bouquet_channels'], true);

	foreach ($Fcb3b5dd6bc21e23 as $ee6d1fc5d801b43f) {
		if (!in_array($ee6d1fc5d801b43f, $D9846544dffb63c9)) {
			goto label315;
		}

		$F1d68f79df3fd971[$ee6d1fc5d801b43f][] = $f155fef57262b32a['id'];

		label315:
	}
}

$Fff7d74ee020d096 = ['categories' => isset(XUI::$rRequest['edit_categories']), 'epg' => isset(XUI::$rRequest['edit_epg']), 'bouquets' => isset(XUI::$rRequest['edit_bouquets'])];
$f27e7fb2603dc5d1 = [25, 20, 20];
goto label268;

label331:

$B1d0cd7d7303c373 = [];

foreach (array_keys(XUI::$rRequest) as $Bb672d1983256a93) {
	$E3665d09b9cea208 = explode('_', $Bb672d1983256a93);
	if (!(($E3665d09b9cea208[0] == 'modified') && (XUI::$rRequest[$Bb672d1983256a93] == 1))) {
		goto label387;
	}

	$Abcb228699a7f743 = intval($E3665d09b9cea208[1]);
	$B1d0cd7d7303c373[$Abcb228699a7f743] = [];

	foreach (['name', 'channel_id', 'epg_id'] as $afc47d80dee67298) {
		$B1d0cd7d7303c373[$Abcb228699a7f743][$afc47d80dee67298] = XUI::$rRequest[$afc47d80dee67298 . '_' . $Abcb228699a7f743];
	}

	foreach (['bouquets', 'categories'] as $afc47d80dee67298) {
		$B1d0cd7d7303c373[$Abcb228699a7f743][$afc47d80dee67298] = json_decode(XUI::$rRequest[$afc47d80dee67298 . '_' . $Abcb228699a7f743], true);
	}

	label387:
}

foreach ($B1d0cd7d7303c373 as $Abcb228699a7f743 => $fe93a43f53d92a4e) {
	goto label413;

	label394:
	if (XUI::$rRequest['save_epg'] && !empty($fe93a43f53d92a4e['channel_id']) && ($fe93a43f53d92a4e['epg_id'] == 0)) {
		goto label410;
	}

	$a9df61f7918613f5 = 0;
	goto label516;

	label410:

	$a9df61f7918613f5 = 1;
	goto label516;

	label413:

	if (!XUI::$rRequest['save_bouquets']) {
		goto label487;
	}

	$Bef3fcbcbd740835 = [];

	foreach (XUI::$rBouquets as $b5fd3e3f0096d7f4 => $f155fef57262b32a) {
		if (!(in_array($Abcb228699a7f743, $f155fef57262b32a['streams']) || in_array($Abcb228699a7f743, $f155fef57262b32a['channels']))) {
			goto label443;
		}

		$Bef3fcbcbd740835[] = $b5fd3e3f0096d7f4;

		label443:
	}

	$aa15ffb0d29cf18b = $af051e9776cb3ebc = [];
	goto label449;

	label449:

	foreach ($Bef3fcbcbd740835 as $b5fd3e3f0096d7f4) {
		if (in_array($b5fd3e3f0096d7f4, $fe93a43f53d92a4e['bouquets'])) {
			goto label465;
		}

		f8e9aBB1f656E13f('stream', $b5fd3e3f0096d7f4, $Abcb228699a7f743);

		label465:
	}

	foreach ($fe93a43f53d92a4e['bouquets'] as $b5fd3e3f0096d7f4) {
		if (in_array($b5fd3e3f0096d7f4, $Bef3fcbcbd740835)) {
			goto label485;
		}

		$af051e9776cb3ebc[] = $b5fd3e3f0096d7f4;
		b8b65e8cB6A1dfe9('stream', $b5fd3e3f0096d7f4, $Abcb228699a7f743);

		label485:
	}

	label487:

	goto label394;

	label489:

	goto label512;

	label491:

	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_display_name` = ?, `channel_id` = ?, `epg_id` = ?, `epg_api` = ? WHERE `id` = ?;', $fe93a43f53d92a4e['name'], $fe93a43f53d92a4e['channel_id'] ?: NULL, is_null($fe93a43f53d92a4e['epg_id']) ? NULL : $fe93a43f53d92a4e['epg_id'], $a9df61f7918613f5, $Abcb228699a7f743);

	label512:

	goto label596;
	goto label578;

	label516:
	if (XUI::$rRequest['save_categories'] && XUI::$rRequest['save_epg']) {
		goto label598;
	}

	if (XUI::$rRequest['save_categories']) {
		goto label578;
	}

	if (XUI::$rRequest['save_epg']) {
		goto label491;
	}

	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_display_name` = ? WHERE `id` = ?;', $fe93a43f53d92a4e['name'], $Abcb228699a7f743);
	goto label489;

	label543:

	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_display_name` = ?, `category_id` = ?, `channel_id` = ?, `epg_id` = ?, `epg_api` = ? WHERE `id` = ?;', $fe93a43f53d92a4e['name'], '[' . implode(',', array_map('intval', $fe93a43f53d92a4e['categories'])) . ']', $fe93a43f53d92a4e['channel_id'] ?: NULL, is_null($fe93a43f53d92a4e['epg_id']) ? NULL : $fe93a43f53d92a4e['epg_id'], $a9df61f7918613f5, $Abcb228699a7f743);

	label576:

	goto label600;

	label578:

	$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_display_name` = ?, `category_id` = ? WHERE `id` = ?;', $fe93a43f53d92a4e['name'], '[' . implode(',', array_map('intval', $fe93a43f53d92a4e['categories'])) . ']', $Abcb228699a7f743);

	label596:

	goto label576;

	label598:

	goto label543;

	label600:
}

goto label603;

label603:

header('Location: ./streams?status=' . STATUS_SUCCESS);
exit();

label609:

$F6edd90960a3bd9d = 'Review';
goto label811;

label611:

echo '                    </div> ' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '        </form>' . "\n" . '    </div>' . "\n" . '</div>' . "\n";
goto label876;

label613:

$b62d6460eb33ea07->query('SELECT * FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $D9846544dffb63c9)) . ');');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$ac8a8c4b32f5a746[] = ['id' => $Fb9da1713bff19ce['id'], 'channel_id' => $Fb9da1713bff19ce['channel_id'] ?: '', 'epg_id' => $Fb9da1713bff19ce['epg_id'] ?: '', 'title' => $Fb9da1713bff19ce['stream_display_name'] ?: '', 'category' => json_decode($Fb9da1713bff19ce['category_id'], true), 'bouquets' => $F1d68f79df3fd971[$Fb9da1713bff19ce['id']] ?: []];
}

label659:

if (!(count($ac8a8c4b32f5a746) == 0)) {
	goto label809;
}

goto label806;

label667:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_NO_SOURCES))) {
	goto label676;
}

echo '                <div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    No streams were selected for review.' . "\n" . '                </div>' . "\n" . '                ';

label676:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n" . '                        ';

if (isset($ac8a8c4b32f5a746)) {
	goto label3;
}

goto label172;

label681:

echo '" />' . "\n" . '                        ';

foreach ($ac8a8c4b32f5a746 as $fe93a43f53d92a4e) {
	goto label686;

	label686:

	echo '<input type="hidden" name="modified_' . $fe93a43f53d92a4e['id'] . '" id="modified_' . $fe93a43f53d92a4e['id'] . '" value="0" />';
	echo '<input type="hidden" name="name_' . $fe93a43f53d92a4e['id'] . '" id="name_s_' . $fe93a43f53d92a4e['id'] . '" value="' . htmlentities($fe93a43f53d92a4e['title']) . '" />';

	if (!$Fff7d74ee020d096['bouquets']) {
		goto label730;
	}

	echo '<input type="hidden" name="bouquets_' . $fe93a43f53d92a4e['id'] . '" id="bouquets_s_' . $fe93a43f53d92a4e['id'] . '" value="' . htmlentities('[' . implode(',', $fe93a43f53d92a4e['bouquets']) . ']') . '" />';

	label730:

	goto label732;

	label732:

	if (!$Fff7d74ee020d096['categories']) {
		goto label756;
	}

	echo '<input type="hidden" name="categories_' . $fe93a43f53d92a4e['id'] . '" id="categories_s_' . $fe93a43f53d92a4e['id'] . '" value="' . htmlentities('[' . implode(',', $fe93a43f53d92a4e['category']) . ']') . '" />';

	label756:

	if (!$Fff7d74ee020d096['epg']) {
		goto label796;
	}

	echo '<input type="hidden" name="channel_id_' . $fe93a43f53d92a4e['id'] . '" id="channel_id_s_' . $fe93a43f53d92a4e['id'] . '" value="' . htmlentities($fe93a43f53d92a4e['channel_id']) . '" />';
	goto label776;

	label776:

	echo '<input type="hidden" name="epg_id_' . $fe93a43f53d92a4e['id'] . '" id="epg_id_s_' . $fe93a43f53d92a4e['id'] . '" value="' . htmlentities($fe93a43f53d92a4e['epg_id']) . '" />';
	echo '<input type="hidden" name="epg_type_' . $fe93a43f53d92a4e['id'] . '" id="epg_type_s_' . $fe93a43f53d92a4e['id'] . '" value="0" />';

	label796:

	goto label798;

	label798:
}

echo '                        <div class="row">' . "\n" . '                            <div class="col-12">' . "\n" . '                                <table id="datatable" class="table table-striped table-borderless dt-responsive nowrap" data-count="';
echo count($ac8a8c4b32f5a746);
goto label226;

label806:

$cbcf0bbd5e139431 = STATUS_NO_SOURCES;
$ac8a8c4b32f5a746 = NULL;

label809:

goto label609;
goto label331;

label811:

include 'header.php';
echo '<div class="wrapper';
echo $ac8a8c4b32f5a746 ? '' : ' boxed-layout-ext';
echo '"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label255;
}

goto label254;

label834:

echo intval($Fff7d74ee020d096['categories']);
echo '" />' . "\n" . '                        <input type="hidden" name="save_bouquets" value="';
echo intval($Fff7d74ee020d096['bouquets']);
echo '" />' . "\n" . '                        <input type="hidden" name="save_epg" value="';
echo intval($Fff7d74ee020d096['epg']);
goto label681;

label852:

if (isset(XUI::$rRequest['save_changes'])) {
	goto label331;
}

if (!isset(XUI::$rRequest['streams'])) {
	goto label809;
}

$D9846544dffb63c9 = json_decode(XUI::$rRequest['streams'], true);
$F771d40e8cf51e59 = F769e3f0c739D1a6('live');
$Df5cd7b5dc4cc10c = F964b9222B35ADDD();
goto label291;

label876:

include 'footer.php';

?>