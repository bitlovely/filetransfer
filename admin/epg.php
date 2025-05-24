<?php


goto label144;

label1:

foreach ($b1eed3fdb609052d as $bead13e60f1ecfe5 => $Ac8c03ed27c04ef2) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>    ' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $bead13e60f1ecfe5;
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $Ac8c03ed27c04ef2['display_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<td>';
	echo implode(', ', $Ac8c03ed27c04ef2['langs']);
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label197;

label21:

echo $_['edit'];

label23:

echo ' ';
echo $_['epg'];
goto label67;

label27:

echo $_['key'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['channel_name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['languages'];
goto label153;

label36:
if (!(isset(XUI::$rRequest['id']) && !($Aad101cd7234926b = getEPG(XUI::$rRequest['id'])))) {
	goto label51;
}

exit();

label51:

$F6edd90960a3bd9d = 'EPG';
include 'header.php';
goto label86;

label54:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#view-channels" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['view_channels'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

label58:

echo "\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="category-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="epg_name">';
goto label112;

label60:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="offset">Minute Offset</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="offset" name="offset" value="';

if (isset($Aad101cd7234926b)) {
	goto label66;
}

echo '0';
goto label132;

label66:

goto label125;

label67:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($Aad101cd7234926b)) {
	goto label174;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $Aad101cd7234926b['id'];
echo '" />' . "\n\t\t\t\t\t\t\t";
goto label174;

label77:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($Aad101cd7234926b)) {
	goto label21;
}

echo $_['add'];
goto label23;
goto label21;

label86:

echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label102;
}

echo ' style="display: none;"';

label102:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
goto label77;

label104:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="days_keep">';
echo $_['days_to_keep'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="days_keep" name="days_keep" value="';

if (isset($Aad101cd7234926b)) {
	goto label168;
}

goto label166;

label112:

echo $_['epg_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="epg_name" name="epg_name" value="';

if (!isset($Aad101cd7234926b)) {
	goto label124;
}

echo htmlspecialchars($Aad101cd7234926b['epg_name']);

label124:

goto label183;

label125:

echo intval($Aad101cd7234926b['offset']) ?: 0;

label132:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_epg" type="submit" class="btn btn-primary" value="';

if (isset($Aad101cd7234926b)) {
	goto label140;
}

echo $_['add'];
goto label139;

label139:

goto label142;

label140:

echo $_['edit'];

label142:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="view-channels">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable" class="table dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>';
goto label27;

label144:

include 'session.php';
include 'functions.php';

if (E6D500E19634D513()) {
	goto label152;
}

e72F42a93714BA87();

label152:

goto label36;

label153:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
$b1eed3fdb609052d = [];

if (!isset($Aad101cd7234926b['data'])) {
	goto label165;
}

$b1eed3fdb609052d = json_decode($Aad101cd7234926b['data'], true);

label165:

goto label1;

label166:

echo '7';
goto label173;

label168:

echo htmlspecialchars($Aad101cd7234926b['days_keep']);

label173:

goto label60;

label174:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#category-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

if (!isset($Aad101cd7234926b)) {
	goto label58;
}

goto label54;

label183:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="epg_file">';
echo $_['source'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="epg_file" name="epg_file" value="';

if (!isset($Aad101cd7234926b)) {
	goto label104;
}

echo htmlspecialchars($Aad101cd7234926b['epg_file']);
goto label104;

label197:

include 'footer.php';

?>