<?php


goto label73;

label1:

echo ' style="display: none;"';

label2:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label24;

label6:

$F6edd90960a3bd9d = 'View Ticket';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label2;
}

goto label1;

label24:

echo $A647e7472a9c91b3['title'];
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="timeline" dir="ltr">' . "\r\n\t\t\t\t\t";

foreach ($A647e7472a9c91b3['replies'] as $Da1012a3a401fd39) {
	goto label32;

	label32:

	echo "\t\t\t\t\t" . '<article class="timeline-item';

	if ($Da1012a3a401fd39['admin_reply']) {
		goto label38;
	}

	echo ' timeline-item-left';

	label38:

	echo '">' . "\r\n\t\t\t\t\t\t" . '<div class="timeline-desk">' . "\r\n\t\t\t\t\t\t\t" . '<div class="timeline-box">' . "\r\n\t\t\t\t\t\t\t\t" . '<span class="arrow-alt"></span>' . "\r\n\t\t\t\t\t\t\t\t" . '<span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>' . "\r\n\t\t\t\t\t\t\t\t" . '<h4 class="mt-0 font-16">';
	goto label44;

	label41:

	echo '</p>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '</article>' . "\r\n\t\t\t\t\t";
	goto label69;

	label44:

	if (!$Da1012a3a401fd39['admin_reply']) {
		goto label52;
	}

	echo 'Admin';
	goto label57;

	label52:

	echo $A647e7472a9c91b3['user']['username'];
	goto label57;

	label57:

	echo '</h4>' . "\r\n\t\t\t\t\t\t\t\t" . '<p class="text-muted"><small>';
	echo date('Y-m-d H:i', $Da1012a3a401fd39['date']);
	echo '</small></p>' . "\r\n\t\t\t\t\t\t\t\t" . '<p class="mb-0">';
	echo $Da1012a3a401fd39['message'];
	goto label41;

	label69:
}

echo "\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label112;

label73:

include 'session.php';
include 'functions.php';

if (E6d500E19634d513()) {
	goto label81;
}

e72f42a93714Ba87();

label81:

goto label82;

label82:
if (!(!isset(XUI::$rRequest['id']) || !($A647e7472a9c91b3 = DEf05eCdB21b0A50(XUI::$rRequest['id'])))) {
	goto label99;
}

E72F42a93714BA87();

label99:

if (!($E59d0debc75e7be8['id'] != $A647e7472a9c91b3['member_id'])) {
	goto label6;
}

$b62d6460eb33ea07->query('UPDATE `tickets` SET `admin_read` = 1 WHERE `id` = ?;', XUI::$rRequest['id']);
goto label6;

label112:

include 'footer.php';

?>