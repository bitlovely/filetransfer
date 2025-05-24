<?php


goto label36;

label1:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['date'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['mac_address'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
goto label45;

label9:

echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label54;

label11:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n" . '                    <div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['mag_events'];
goto label1;

label17:

$F6edd90960a3bd9d = 'MAG Events';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label11;
}

echo ' style="display: none;"';
goto label11;

label36:

include 'session.php';
include 'functions.php';

if (e6d500E19634d513()) {
	goto label44;
}

e72F42A93714bA87();

label44:

goto label17;

label45:

echo $_['event'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['message'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
goto label9;

label54:

include 'footer.php';

?>