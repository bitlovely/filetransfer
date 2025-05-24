<?php


goto label43;

label1:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['days_to_keep'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['last_updated'];
echo '</th>' . "\n" . '                                    <th class="text-center">Channels</th>' . "\n" . '                                    <th class="text-center">Listings</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label176;

label9:

echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['epg_name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['source'];
goto label1;

label18:

$F6edd90960a3bd9d = 'EPG Files';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label37;
}

echo ' style="display: none;"';
goto label37;

label37:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['epgs'];
goto label164;

label43:

include 'session.php';
include 'functions.php';

if (e6D500e19634D513()) {
	goto label51;
}

e72f42a93714ba87();

label51:

goto label18;

label52:

foreach (C8e66F17258aC811() as $a2ebb817d88c810b) {
	goto label58;

	label58:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="epg-';
	echo $a2ebb817d88c810b['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $a2ebb817d88c810b['id'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label67;

	label67:

	echo $a2ebb817d88c810b['epg_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo parse_url($a2ebb817d88c810b['epg_file'])['host'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">';
	echo $a2ebb817d88c810b['days_keep'];
	goto label149;

	label81:

	echo '" class="tooltip btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n" . '                                            <button type="button" title="Force Reload" class="tooltip btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	echo $a2ebb817d88c810b['id'];
	echo ', \'reload\');"><i class="mdi mdi-refresh"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" title="';
	echo $_['delete_epg'];
	echo '" class="tooltip btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	goto label143;

	label90:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./epg?id=';
	echo $a2ebb817d88c810b['id'];
	echo '"><button type="button" title="';
	echo $_['edit_epg'];
	goto label81;

	label98:

	echo date('Y-m-d H:i', $a2ebb817d88c810b['last_updated']);

	label104:

	echo '</td>' . "\n" . '                                    <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">';
	echo number_format(count(json_decode($a2ebb817d88c810b['data'], true)), 0);
	echo '</button></td>' . "\n" . '                                    <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">';
	goto label121;

	label121:

	echo isset($B189aa22fe72a1a5[$a2ebb817d88c810b['id']]) ? $B189aa22fe72a1a5[$a2ebb817d88c810b['id']] : 0;
	echo '</button></td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";

	if (e589a4bf54a2daD1('adv', 'epg_edit')) {
		goto label90;
	}

	echo '--';
	goto label146;
	goto label90;

	label143:

	echo $a2ebb817d88c810b['id'];
	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t";

	label146:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label160;

	label149:

	echo '</button></td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';

	if ($a2ebb817d88c810b['last_updated']) {
		goto label158;
	}

	echo $_['never'];
	goto label104;

	label158:

	goto label98;

	label160:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n";
goto label198;

label164:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label174;
}

echo "\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t" . 'EPG has been added and will be scanned during the next cron run.' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label174:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label9;

label176:

echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";
$B189aa22fe72a1a5 = [];
$b62d6460eb33ea07->query('SELECT `epg_id`, COUNT(*) AS `count` FROM `epg_data` GROUP BY `epg_id`;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$B189aa22fe72a1a5[$Fb9da1713bff19ce['epg_id']] = number_format($Fb9da1713bff19ce['count'], 0);
}

goto label52;

label198:

include 'footer.php';

?>