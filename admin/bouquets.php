<?php


goto label56;

label1:

echo $_['bouquets'];
echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label13;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    Bouquet has been added / modified.' . "\n" . '                </div>' . "\n" . '                ';

label13:

goto label48;

label14:

$Df5cd7b5dc4cc10c = f964b9222b35Addd();
$F6edd90960a3bd9d = 'Bouquets';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label36;
}

goto label35;

label35:

echo ' style="display: none;"';

label36:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n\t\t\t\t\t\t";
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label1;

label40:

echo '</th>' . "\n" . '                                    <th class="text-center">';
echo $_['stations'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";
goto label74;

label48:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['bouquet_name'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label65;

label56:

include 'session.php';
include 'functions.php';

if (E6D500e19634D513()) {
	goto label64;
}

e72F42a93714ba87();

label64:

goto label14;

label65:

echo $_['streams'];
echo '</th>' . "\n" . '                                    <th class="text-center">';
echo $_['movies'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['series'];
goto label40;

label74:

foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
	goto label152;

	label78:

	echo $_['delete_bouquet'];
	echo '" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo intval($f155fef57262b32a['id']);
	echo ', \'delete\');""><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t";

	label87:

	goto label167;

	label89:

	echo htmlspecialchars($f155fef57262b32a['bouquet_name']);
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light">';
	echo number_format(count(json_decode($f155fef57262b32a['bouquet_channels'], true)), 0);
	echo '</button></td>' . "\n" . '                                    <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light">';
	echo number_format(count(json_decode($f155fef57262b32a['bouquet_movies'], true)), 0);
	goto label170;

	label124:

	echo '"><button type="button" title="';
	echo $_['edit_bouquet'];
	echo '" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./bouquet?duplicate=';
	echo intval($f155fef57262b32a['id']);
	echo '"><button type="button" title="Duuplicate Bouquet" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-content-copy"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" title="';
	goto label78;

	label136:

	echo intval($f155fef57262b32a['id']);
	echo '"><button type="button" title="';
	echo $_['reorder_bouquet'];
	echo '" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-format-line-spacing"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./bouquet?id=';
	echo intval($f155fef57262b32a['id']);
	goto label124;

	label152:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="bouquet-';
	echo intval($f155fef57262b32a['id']);
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo intval($f155fef57262b32a['id']);
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	goto label89;

	label167:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label214;

	label170:

	echo '</button></td>' . "\n" . '                                    <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light">';
	echo number_format(count(json_decode($f155fef57262b32a['bouquet_series'], true)), 0);
	echo '</button></td>' . "\n" . '                                    <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light">';
	echo number_format(count(json_decode($f155fef57262b32a['bouquet_radios'], true)), 0);
	echo '</button></td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";
	goto label201;

	label201:

	if (e589A4BF54A2daD1('adv', 'edit_bouquet')) {
		goto label211;
	}

	echo '--';
	goto label87;

	label211:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./bouquet_sort?id=';
	goto label136;

	label214:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label218;

label218:

include 'footer.php';

?>