<?php


goto label43;

label1:

echo '                    Your service is set up to detect restreaming without permission, however it won\'t automatically block IP addresses or lines.' . "\n" . '                    ';
goto label4;

label3:

echo '                    Your service is set up to automatically block the lines of those detected restreaming without permission. IP\'s will not be automatically blocked.' . "\n" . '                    ';

label4:

goto label39;

label5:

echo '                    Your service is set up to automatically block the lines and IP addresses of those detected restreaming without permission.' . "\n" . '                    ';

label6:

echo '                </div>' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
goto label29;

label10:

$F6edd90960a3bd9d = 'Restream Detection Logs';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label61;
}

echo ' style="display: none;"';
goto label61;

label29:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['username'];
echo '</th>' . "\n" . '                                    <th>';
echo $_['stream'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label52;

label37:

echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label89;

label39:

goto label41;

label40:

echo '                    Your service is set up to automatically block the IP addresses of those detected restreaming without permission. Lines will remain active.' . "\n" . '                    ';

label41:

goto label6;
goto label5;

label43:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label51;
}

e72F42A93714ba87();

label51:

goto label10;

label52:

echo $_['ip'];
echo '</th>' . "\n" . '                                    <th class="text-center">';
echo $_['date'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
goto label37;

label61:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<h4 class="page-title">Restream Detection Logs</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                <div class="alert alert-info" role="alert">' . "\n" . '                    ';
if (XUI::$rSettings['detect_restream_block_user'] && XUI::$rSettings['detect_restream_block_ip']) {
	goto label5;
}
if (!XUI::$rSettings['detect_restream_block_user'] && XUI::$rSettings['detect_restream_block_ip']) {
	goto label40;
}
if (XUI::$rSettings['detect_restream_block_user'] && !XUI::$rSettings['detect_restream_block_ip']) {
	goto label3;
}

goto label1;

label89:

include 'footer.php';

?>