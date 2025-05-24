<?php


goto label25;

label1:

$f7d55d79e2700f0d = ['CLOSED', 'OPEN', 'RESPONDED TO', 'READ BY USER', 'NEW RESPONSE', 'READ BY ME', 'READ BY USER'];
$F6edd90960a3bd9d = 'Tickets';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label21;
}

goto label20;

label20:

echo ' style="display: none;"';

label21:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">Tickets</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>     ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="card-box">' . "\r\n\t\t\t\t\t" . '<table class="table table-striped table-borderless dt-responsive nowrap w-100" id="tickets-table">' . "\r\n\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th>Reseller</th>' . "\r\n" . '                                <th>Title</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">Created Date</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">Last Reply</th>' . "\r\n\t\t\t\t\t\t\t\t" . '<th class="text-center">Action</th>' . "\r\n\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t";
goto label34;

label25:

include 'session.php';
include 'functions.php';

if (E6D500e19634D513()) {
	goto label33;
}

E72F42A93714BA87();

label33:

goto label1;

label34:

$A8a58d9f67df1ccb = a58FDB6C7Fc6feb0($E59d0debc75e7be8['id'], true);

foreach ($A8a58d9f67df1ccb as $e980e66d0f7b6829) {
	goto label91;

	label44:

	echo $e980e66d0f7b6829['created'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $e980e66d0f7b6829['last_reply'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="btn-group dropdown">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="dropdown-menu dropdown-menu-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="./ticket_view?id=';
	echo intval($e980e66d0f7b6829['id']);
	goto label106;

	label57:

	echo ', \'close\');"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	label58:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo intval($e980e66d0f7b6829['id']);
	echo ', \'delete\');"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Delete</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";
	goto label139;

	label67:

	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center"><span class="badge badge-';
	echo ['secondary', 'warning', 'success', 'warning', 'info', 'purple', 'warning'][$e980e66d0f7b6829['status']];
	echo '">';
	echo $f7d55d79e2700f0d[$e980e66d0f7b6829['status']];
	echo '</span></td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label44;

	label78:

	echo intval($e980e66d0f7b6829['id']);
	echo '</a></td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td>';
	echo $e980e66d0f7b6829['username'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '<td>';
	echo $e980e66d0f7b6829['title'];
	goto label67;

	label91:

	echo "\t\t\t\t\t\t\t" . '<tr id="ticket-';
	echo intval($e980e66d0f7b6829['id']);
	echo '">' . "\r\n\t\t\t\t\t\t\t\t" . '<td class="text-center"><a href="./ticket_view?id=';
	echo intval($e980e66d0f7b6829['id']);
	echo '">';
	goto label78;

	label106:

	echo '"><i class="mdi mdi-eye mr-2 text-muted font-18 vertical-middle"></i>View Ticket</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	if (!E589A4bf54A2DaD1('adv', 'ticket')) {
		goto label139;
	}

	if (0 < $e980e66d0f7b6829['status']) {
		goto label131;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo intval($e980e66d0f7b6829['id']);
	goto label128;

	label128:

	echo ', \'reopen\');"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Re-Open</a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";
	goto label58;

	label131:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo intval($e980e66d0f7b6829['id']);
	goto label57;

	label139:

	echo "\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t";
	goto label142;

	label142:
}

echo "\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label146;

label146:

include 'footer.php';

?>