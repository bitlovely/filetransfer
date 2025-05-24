<?php


goto label238;

label1:

echo ' selected';

label2:

echo '>Stopped</option>' . "\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label225;
}

echo ' selected';
goto label225;

label15:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label26;
}

echo ' selected';

label26:

echo '>Online</option>' . "\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label2;
}

goto label1;

label38:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Created Channels</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';

if (!$Ebb0b63f7c597ba4) {
	goto label58;
}

goto label57;

label45:

echo '                                    <th>Server</th>' . "\n\t\t\t\t\t\t\t\t\t";
goto label48;

label47:

echo "\t\t\t\t\t\t\t\t\t" . '<th>Servers</th>' . "\n" . '                                    ';

label48:

goto label173;

label49:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="stream_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label55;
}

echo ' selected';

label55:

echo '>No Filter</option>' . "\n" . '                                    <option value="1"';
goto label15;

label57:

echo 'collapse';

label58:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <input type="text" class="form-control" id="stream_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label160;
}

echo htmlspecialchars(XUI::$rRequest['search']);
goto label160;

label71:

echo '>No Servers</option>' . "\n" . '                                    ';

foreach (c6A90BFcd425EB63() as $Ec379295dc7029e6) {
	echo '                                    <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label93;
	}

	echo ' selected';

	label93:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                    ';
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="stream_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value="" selected>All Categories</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == -1))) {
	goto label176;
}

goto label175;

label111:

echo '>Transcoding</option>' . "\n" . '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="stream_show_entries">Show</label>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="stream_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label134;

	label116:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label149;

	label122:

	goto label116;

	label124:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label132;
	}

	echo ' selected';

	label132:

	goto label116;

	label134:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label124;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label147;
	}

	echo ' selected';

	label147:

	goto label122;

	label149:

	echo '</option>' . "\n" . '                                    ';
	goto label152;

	label152:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-borderless table-striped dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                    <th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n" . '                                    ';

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label47;
}

goto label45;

label160:

echo '" placeholder="Search Channels...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="stream_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value="" selected>All Servers</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == -1))) {
	goto label172;
}

echo ' selected';

label172:

goto label71;

label173:

echo "\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Clients</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Uptime</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Player</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Channel Info</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label247;

label175:

echo ' selected';

label176:

echo '>No Categories</option>' . "\n" . '                                    ';

foreach (f769e3f0C739D1A6('live') as $Dbcac322b4274e46) {
	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label199;
	}

	echo ' selected';

	label199:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
}

goto label49;

label206:

$F6edd90960a3bd9d = 'Created Channels';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label38;
}

echo ' style="display: none;"';
goto label38;

label225:

echo '>Creating</option>' . "\n\t\t\t\t\t\t\t\t\t" . '<option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label237;
}

echo ' selected';

label237:

goto label111;

label238:

include 'session.php';
include 'functions.php';

if (e6d500E19634d513()) {
	goto label246;
}

E72f42A93714ba87();

label246:

goto label206;

label247:

include 'footer.php';

?>