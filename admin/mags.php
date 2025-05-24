<?php


goto label65;

label1:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['username'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['mac_address'];
echo '</th>' . "\r\n" . '                                    <th class="text-center">Device</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
goto label37;

label9:

echo '>';
echo $_['expired'];
echo '</option>' . "\r\n" . '                                    <option value="5"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 5))) {
	goto label238;
}

echo ' selected';
goto label238;

label25:

echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label35;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n" . '                        <span aria-hidden="true">&times;</span>' . "\r\n" . '                    </button>' . "\r\n" . '                    Device has been added / modified.' . "\r\n" . '                </div>' . "\r\n" . '                ';

label35:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n" . '                        <div id="collapse_filters" class="';
goto label227;

label37:

echo $_['owner'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['status'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['online'];
goto label168;

label46:

$F6edd90960a3bd9d = 'MAG Devices';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label136;
}

echo ' style="display: none;"';
goto label136;

label65:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label73;
}

E72f42A93714BA87();

label73:

goto label46;

label74:
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 2))) {
	goto label85;
}

echo ' selected';

label85:

echo '>';
echo $_['disabled'];
goto label253;

label89:

echo $_['banned'];
echo '</option>' . "\r\n" . '                                    <option value="4"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 4))) {
	goto label103;
}

echo ' selected';

label103:

goto label9;

label104:

echo ' selected';

label105:

echo '>';
echo $_['active'];
echo '</option>' . "\r\n" . '                                    <option value="2"';
goto label74;

label110:

echo htmlspecialchars(XUI::$rRequest['search']);

label116:

echo '" placeholder="';
echo $_['search_devices'];
echo '...">' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-2 col-form-label text-center" for="mag_reseller">Filter Results &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="clearOwner();"><i class="mdi mdi-close"></i></button></label>' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <select id="mag_reseller" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';
goto label142;

label121:

echo '>';
echo $_['no_filter'];
echo '</option>' . "\r\n" . '                                    <option value="1"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 1))) {
	goto label105;
}

goto label104;

label136:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['mag_devices'];
goto label25;

label142:
if (!(isset(XUI::$rRequest['owner']) && ($C0a1fd30f0173389 = Ba89228DC958ce05(intval(XUI::$rRequest['owner']))))) {
	goto label246;
}

echo '                                    <option value="';
echo intval($C0a1fd30f0173389['id']);
echo '" selected="selected">';
echo $C0a1fd30f0173389['username'];
goto label245;

label168:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['trial'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['expiration'];
echo '</th>' . "\r\n" . '                                    <th class="text-center">Last Connection</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label176;

label176:

echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label267;

label180:

echo '</label>' . "\r\n" . '                            <div class="col-md-1">' . "\r\n" . '                                <select id="mag_show_entries" class="form-control" data-toggle="select2">' . "\r\n" . '                                    ';

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	goto label191;

	label185:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	goto label206;

	label191:

	echo '                                    <option';

	if (isset(XUI::$rRequest['entries'])) {
		goto label211;
	}

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label204;
	}

	echo ' selected';

	label204:

	goto label209;

	label206:

	echo '</option>' . "\r\n" . '                                    ';
	goto label221;

	label209:

	goto label185;

	label211:

	if (!(XUI::$rRequest['entries'] == $C17543903e9aa6ae)) {
		goto label219;
	}

	echo ' selected';

	label219:

	goto label185;

	label221:
}

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-users" class="table table-striped table-borderless dt-responsive nowrap font-normal">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
goto label1;

label227:

if (!$Ebb0b63f7c597ba4) {
	goto label231;
}

echo 'collapse';

label231:

echo ' form-group row mb-4">' . "\r\n" . '                            <div class="col-md-3">' . "\r\n" . '                                <input type="text" class="form-control" id="mag_search" value="';

if (!isset(XUI::$rRequest['search'])) {
	goto label116;
}

goto label110;

label238:

echo '>';
echo $_['trial'];
echo '</option>' . "\r\n" . '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <label class="col-md-1 col-form-label text-center" for="mag_show_entries">';
echo $_['show'];
goto label180;

label245:

echo '</option>' . "\r\n" . '                                    ';

label246:

echo '                                </select>' . "\r\n" . '                            </div>' . "\r\n" . '                            <div class="col-md-2">' . "\r\n" . '                                <select id="mag_filter" class="form-control" data-toggle="select2">' . "\r\n" . '                                    <option value=""';

if (isset(XUI::$rRequest['filter'])) {
	goto label121;
}

echo ' selected';
goto label121;

label253:

echo '</option>' . "\r\n" . '                                    <option value="3"';
if (!(isset(XUI::$rRequest['filter']) && (XUI::$rRequest['filter'] == 3))) {
	goto label265;
}

echo ' selected';

label265:

echo '>';
goto label89;

label267:

include 'footer.php';

?>