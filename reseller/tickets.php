<?php


goto label103;

label1:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Tickets</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card-box">' . "\r\n\t\t\t\t\t" . '<table class="table table-striped table-borderless dt-responsive nowrap w-100" id="tickets-table">' . "\r\n\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th>Reseller</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th>Subject</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">Created Date</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Reply</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">Action</th>' . "\r\n\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t";
$A8a58d9f67df1ccb = A58fdB6C7fC6fEB0($E59d0debc75e7be8['id']);

foreach ($A8a58d9f67df1ccb as $e980e66d0f7b6829) {
	goto label37;

	label11:

	echo intval($e980e66d0f7b6829['id']);
	echo '</a></td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td>';
	echo $e980e66d0f7b6829['username'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td>';
	echo $e980e66d0f7b6829['title'];
	goto label73;

	label24:

	echo $e980e66d0f7b6829['created'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $e980e66d0f7b6829['last_reply'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="btn-group dropdown">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="dropdown-menu dropdown-menu-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="./ticket_view?id=';
	echo intval($e980e66d0f7b6829['id']);
	goto label52;

	label37:

	echo "\t\t\t\t\t\t\t" . '<tr id="ticket-';
	echo intval($e980e66d0f7b6829['id']);
	echo '">' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center"><a href="./ticket_view?id=';
	echo intval($e980e66d0f7b6829['id']);
	echo '">';
	goto label11;

	label52:

	echo '"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>View Ticket</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	if (0 < $e980e66d0f7b6829['status']) {
		goto label87;
	}

	if (!($e980e66d0f7b6829['member_id'] != $E59d0debc75e7be8['id'])) {
		goto label85;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo intval($e980e66d0f7b6829['id']);
	goto label84;

	label73:

	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center"><span class="badge badge-';
	echo ['secondary', 'warning', 'success', 'warning', 'info', 'purple', 'warning'][$e980e66d0f7b6829['status']];
	echo '">';
	echo $f7d55d79e2700f0d[$e980e66d0f7b6829['status']];
	echo '</span></td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label24;

	label84:

	echo ', \'reopen\');"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Re-Open</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	label85:

	goto label96;

	label87:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	goto label90;

	label90:

	echo intval($e980e66d0f7b6829['id']);
	echo ', \'close\');"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	label96:

	echo "\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t";
	goto label99;

	label99:
}

echo "\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label118;

label103:

include 'session.php';
include 'functions.php';

if (BaF6e9Ef7775B5A9()) {
	goto label111;
}

E72f42A93714bA87();

label111:

goto label112;

label112:

$f7d55d79e2700f0d = ['CLOSED', 'OPEN', 'RESPONDED TO', 'READ BY ME', 'NEW RESPONSE', 'READ BY ADMIN', 'READ BY USER'];
$F6edd90960a3bd9d = 'Tickets';
include 'header.php';
echo '<div class="wrapper">' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
goto label1;

label118:

include 'footer.php';

?>