<?php


goto label79;

label1:

echo "\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label111;

label3:

include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $A647e7472a9c91b3['title'];
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="timeline" dir="ltr">' . "\r\n\t\t\t\t\t";

foreach ($A647e7472a9c91b3['replies'] as $Da1012a3a401fd39) {
	goto label16;

	label13:

	echo '</p>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '</article>' . "\r\n\t\t\t\t\t";
	goto label50;

	label16:

	echo "\t\t\t\t\t" . '<article class="timeline-item';

	if ($Da1012a3a401fd39['admin_reply']) {
		goto label22;
	}

	echo ' timeline-item-left';

	label22:

	echo '">' . "\r\n\t\t\t\t\t\t" . '<div class="timeline-desk">' . "\r\n\t\t\t\t\t\t\t" . '<div class="timeline-box">' . "\r\n\t\t\t\t\t\t\t\t" . '<span class="arrow-alt"></span>' . "\r\n\t\t\t\t\t\t\t\t" . '<span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>' . "\r\n\t\t\t\t\t\t\t\t" . '<h4 class="mt-0 font-16">';
	goto label25;

	label25:

	if (!$Da1012a3a401fd39['admin_reply']) {
		goto label33;
	}

	echo 'Owner';
	goto label38;

	label33:

	echo $A647e7472a9c91b3['user']['username'];
	goto label38;

	label38:

	echo '</h4>' . "\r\n\t\t\t\t\t\t\t\t" . '<p class="text-muted"><small>';
	echo date('Y-m-d H:i', $Da1012a3a401fd39['date']);
	echo '</small></p>' . "\r\n\t\t\t\t\t\t\t\t" . '<p class="mb-0">';
	echo $Da1012a3a401fd39['message'];
	goto label13;

	label50:
}

goto label1;

label53:
if (!(!isset(XUI::$rRequest['id']) || !($A647e7472a9c91b3 = DEf05eCdb21B0A50(XUI::$rRequest['id'])))) {
	goto label70;
}

E72F42A93714BA87();

label70:

if (e589A4bf54a2daD1('user', $A647e7472a9c91b3['member_id'])) {
	goto label88;
}

exit();
goto label88;

label79:

include 'session.php';
include 'functions.php';

if (BAf6e9eF7775B5a9()) {
	goto label87;
}

e72f42a93714bA87();

label87:

goto label53;

label88:

if ($E59d0debc75e7be8['id'] != $A647e7472a9c91b3['member_id']) {
	goto label100;
}

$b62d6460eb33ea07->query('UPDATE `tickets` SET `user_read` = 1 WHERE `id` = ?;', XUI::$rRequest['id']);
goto label107;

label100:

goto label101;

label101:

$b62d6460eb33ea07->query('UPDATE `tickets` SET `admin_read` = 1 WHERE `id` = ?;', XUI::$rRequest['id']);

label107:

$F6edd90960a3bd9d = 'View Ticket';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
goto label3;

label111:

include 'footer.php';

?>