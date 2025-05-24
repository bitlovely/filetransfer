<?php


goto label177;

label1:

echo '>Online</option>' . "\n" . '                                    <option value="2"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label13;
}

echo ' selected';

label13:

echo '>Down</option>' . "\n" . '                                    <option value="3"';
goto label186;

label15:

echo htmlspecialchars(XUI::$rRequest['search']);

label21:

echo '" placeholder="Search Stations...">' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="station_server_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value="" selected>';
echo $_['all_servers'];
echo '</option>' . "\n" . '                                    <option value="-1"';
goto label26;

label26:
if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == -1))) {
	goto label37;
}

echo ' selected';

label37:

echo '>No Servers</option>' . "\n" . '                                    ';

foreach (C6A90BFcd425EB63() as $Ec379295dc7029e6) {
	echo '                                    <option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server']) && (XUI::$rRequest['server'] == $Ec379295dc7029e6['id']))) {
		goto label59;
	}

	echo ' selected';

	label59:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n" . '                                    ';
}

goto label134;

label66:

echo ' selected';

label67:

echo '>Starting</option>' . "\n" . '                                    <option value="5"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label209;
}

echo ' selected';
goto label209;

label80:

echo ' style="display: none;"';

label81:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Radio Stations</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n" . '                        <div id="collapse_filters" class="';
goto label265;

label85:

echo '>Direct</option>' . "\n" . '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <label class="col-md-1 col-form-label text-center" for="station_show_entries">Show</label>' . "\n" . '                            <div class="col-md-1">' . "\n" . '                                <select id="station_show_entries" class="form-control" data-toggle="select2">' . "\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label111;

	label90:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label108;

	label96:

	goto label90;

	label98:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label106;
	}

	echo ' selected';

	label106:

	goto label90;

	label108:

	echo '</option>' . "\n" . '                                    ';
	goto label126;

	label111:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label98;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label124;
	}

	echo ' selected';

	label124:

	goto label96;

	label126:
}

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n\t\t\t\t\t\t" . '<table id="datatable-streampage" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n" . '                                    <th class="text-center">Icon</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\n\t\t\t\t\t\t\t\t\t";

if ($f1dcaed925076e67['streams_grouped'] == 1) {
	goto label264;
}

goto label259;

label134:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-3">' . "\n" . '                                <select id="station_category_id" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value="" selected>';
echo $_['all_categories'];
echo '</option>' . "\n" . '                                    <option value="-1"';
if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == -1))) {
	goto label150;
}

goto label149;

label149:

echo ' selected';

label150:

echo '>No Categories</option>' . "\n" . '                                    ';

foreach ($F771d40e8cf51e59 as $Dbcac322b4274e46) {
	echo '                                    <option value="';
	echo $Dbcac322b4274e46['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['category']) && (XUI::$rRequest['category'] == $Dbcac322b4274e46['id']))) {
		goto label170;
	}

	echo ' selected';

	label170:

	echo '>';
	echo $Dbcac322b4274e46['category_name'];
	echo '</option>' . "\n" . '                                    ';
}

goto label276;

label177:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label185;
}

e72F42A93714ba87();

label185:

goto label222;

label186:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label197;
}

echo ' selected';

label197:

echo '>Stopped</option>' . "\n" . '                                    <option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label67;
}

goto label66;

label209:

echo '>On Demand</option>' . "\n" . '                                    <option value="6"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 6))) {
	goto label221;
}

echo ' selected';

label221:

goto label85;

label222:

$F771d40e8cf51e59 = f769E3F0c739D1A6('radio');
$F6edd90960a3bd9d = 'Radio Stations';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label81;
}

goto label80;

label244:

echo $_['no_filter'];
echo '</option>' . "\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label258;
}

echo ' selected';

label258:

goto label1;

label259:

echo '                                    <th>';
echo $_['server'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t";
goto label288;

label264:

goto label284;

label265:

if (!$Ebb0b63f7c597ba4) {
	goto label269;
}

echo 'collapse';

label269:

echo ' form-group row mb-4">' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <input type="text" class="form-control" id="station_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label21;
}

goto label15;

label276:

echo '                                </select>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-2">' . "\n" . '                                <select id="station_filter" class="form-control" data-toggle="select2">' . "\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label282;
}

echo ' selected';

label282:

echo '>';
goto label244;

label284:

echo "\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['servers'];
echo '</th>' . "\n" . '                                    ';

label288:

echo "\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Clients</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Uptime</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Stream Info</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label290;

label290:

include 'footer.php';

?>