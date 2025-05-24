<?php


goto label186;

label1:

echo '</option>' . "\n" . '                                                ';

foreach (f769E3F0C739D1A6('live') as $Dbcac322b4274e46) {
	echo '                                                <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label24;
	}

	echo ' selected';

	label24:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                                ';
}

echo '                                            </select>' . "\n" . '                                        </div>' . "\n" . '                                        <label class="col-md-1 col-2 col-form-label text-center" for="show_entries">';
echo $_['show'];
goto label96;

label34:

if (XUI::$rSettings['redis_handler']) {
	goto label89;
}

echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-5 col-6">' . "\n" . '                                            <input type="text" class="form-control" id="stream_search" value="" placeholder="';
echo $_['search_streams'];
echo '...">' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-4 col-6">' . "\n" . '                                            <select id="category_search" class="form-control" data-toggle="select2">' . "\n" . '                                                <option value="" selected>';
echo $_['all_categories'];
goto label1;

label45:

echo '</label>' . "\n" . '                                        <div class="col-md-1 col-2">' . "\n" . '                                            <input type="text" class="form-control text-center" id="font_size" value="36" placeholder="">' . "\n" . '                                        </div>' . "\n" . '                                        <label class="col-md-1 col-2 col-form-label text-center" for="font_color">';
echo $_['colour'];
echo '</label>' . "\n" . '                                        <div class="col-md-2 col-2">' . "\n" . '                                            <input type="text" id="font_color" class="form-control text-center" value="#ffffff">' . "\n" . '                                        </div>' . "\n" . '                                        <label class="col-md-1 col-2 col-form-label text-center" for="position">';
echo $_['position'];
echo '</label>' . "\n" . '                                        <div class="col-md-1 col-2">' . "\n" . '                                            <input type="text" class="form-control text-center" id="position_x" value="10" placeholder="X">' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-1 col-2">' . "\n" . '                                            <input type="text" class="form-control text-center" id="position_y" value="10" placeholder="Y">' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-1 col-2">' . "\n" . '                                            <button type="button" class="btn btn-info waves-effect waves-light" onClick="activateFingerprint()">' . "\n" . '                                                <i class="mdi mdi-fingerprint"></i>' . "\n" . '                                            </button>' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-12 col-2" style="margin-top:10px;display:none;" id="custom_message_div">' . "\n" . '                                            <input type="text" class="form-control" id="custom_message" value="" placeholder="';
goto label179;

label53:

$F6edd90960a3bd9d = 'Fingerprint Stream';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label126;
}

echo ' style="display: none;"';
goto label126;

label72:

echo $_['category'];
echo '</th>' . "\n" . '                                                    <th class="text-center">';
echo $_['clients'];
echo '</th>' . "\n" . '                                                    <th class="text-center"></th>' . "\n" . '                                                </tr>' . "\n" . '                                            </thead>' . "\n" . '                                            <tbody></tbody>' . "\n" . '                                        </table>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                                <div class="tab-pane" id="stream-activity">' . "\n" . '                                    <div class="row">' . "\n" . '                                        <div class="alert alert-warning alert-dismissible fade show col-md-12 col-12 text-center" role="alert">' . "\n" . '                                            ';
echo $_['warning_fingerprint'];
goto label132;

label81:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n" . '                        <div id="basicwizard">' . "\n" . '                            <ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n" . '                                <li class="nav-item" id="stream-selection-tab">' . "\n" . '                                    <a href="#stream-selection" id="stream-selection-nav" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n" . '                                        <i class="mdi mdi-play mr-1"></i>' . "\n" . '                                        <span class="d-none d-sm-inline">';
echo $_['stream'];
echo '</span>' . "\n" . '                                    </a>' . "\n" . '                                </li>' . "\n" . '                                <li class="nav-item disabled" id="stream-activity-tab">' . "\n" . '                                    <a href="#stream-activity" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n" . '                                        <i class="mdi mdi-account-group mr-1"></i>' . "\n" . '                                        <span class="d-none d-sm-inline">';
echo $_['activity'];
echo '</span>' . "\n" . '                                    </a>' . "\n" . '                                </li>' . "\n" . '                            </ul>' . "\n" . '                            <div class="tab-content b-0 mb-0 pt-0">' . "\n" . '                                <div class="tab-pane" id="stream-selection">' . "\n" . '                                    <div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t";
goto label34;

label89:

echo '                                        <div class="col-md-6 col-6">' . "\n" . '                                            <input type="text" class="form-control" id="stream_search" value="" placeholder="';
echo $_['search_streams'];
echo '...">' . "\n" . '                                        </div>' . "\n" . '                                        <div class="col-md-6 col-6">' . "\n" . '                                            <select id="category_search" class="form-control" data-toggle="select2">' . "\n" . '                                                <option value="" selected>';
echo $_['all_categories'];
goto label140;

label96:

echo '</label>' . "\n" . '                                        <div class="col-md-2 col-8">' . "\n" . '                                            <select id="show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                                ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '                                                <option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label107;
	}

	echo ' selected';

	label107:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n" . '                                                ';
}

echo '                                            </select>' . "\n" . '                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t";
goto label170;
goto label89;

label117:

echo $_['username'];
echo '</option>' . "\n" . '                                                <option value="3">';
echo $_['message'];
echo '</option>' . "\n" . '                                            </select>' . "\n" . '                                        </div>' . "\n" . '                                        <label class="col-md-1 col-2 col-form-label text-center" for="font_size">';
echo $_['size'];
goto label45;

label126:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['fingerprint_stream'];
goto label81;

label132:

echo '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="row" id="filter_selection">' . "\n" . '                                        <label class="col-md-1 col-2 col-form-label text-center" for="fingerprint_type">';
echo $_['type'];
echo '</label>' . "\n" . '                                        <div class="col-md-2 col-6">' . "\n" . '                                            <select id="fingerprint_type" class="form-control text-center" data-toggle="select2">' . "\n" . '                                                <option value="1">';
echo $_['activity_id'];
echo '</option>' . "\n" . '                                                <option value="2">';
goto label117;

label140:

echo '</option>' . "\n" . '                                                ';

foreach (F769E3F0c739D1a6('live') as $Dbcac322b4274e46) {
	echo '                                                <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label163;
	}

	echo ' selected';

	label163:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                                ';
}

echo '                                            </select>' . "\n" . '                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t";

label170:

goto label171;

label171:

echo '                                        <table id="datatable-md1" class="table table-striped table-borderless mb-0">' . "\n" . '                                            <thead>' . "\n" . '                                                <tr>' . "\n" . '                                                    <th class="text-center">';
echo $_['id'];
echo '</th>' . "\n" . '                                                    <th>';
echo $_['stream_name'];
echo '</th>' . "\n" . '                                                    <th>';
goto label72;

label179:

echo $_['custom_message'];
echo '">' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="row">' . "\n" . '                                        <table id="datatable-md2" class="table table-striped table-borderless mb-0">' . "\n" . '                                            <thead>' . "\n" . '                                                <tr>' . "\n" . '                                                    <th></th>' . "\n" . '                                                    <th></th>' . "\n" . '                                                    <th>Username</th>' . "\n" . '                                                    <th>Stream</th>' . "\n" . '                                                    <th></th>' . "\n" . '                                                    <th></th>' . "\n" . '                                                    <th></th>' . "\n" . '                                                    <th class="text-center">IP</th>' . "\n" . '                                                    <th class="text-center">Duration</th>' . "\n" . '                                                    <th></th>' . "\n" . '                                                    <th></th>' . "\n" . '                                                    <th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n" . '                                                </tr>' . "\n" . '                                            </thead>' . "\n" . '                                            <tbody></tbody>' . "\n" . '                                        </table>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label195;

label186:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label194;
}

E72f42a93714bA87();

label194:

goto label53;

label195:

include 'footer.php';

?>