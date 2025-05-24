<?php


goto label169;

label1:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n" . '        <div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n" . '                ';
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label162;
}

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n" . '                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n" . '                        <span aria-hidden="true">&times;</span>' . "\n" . '                    </button>' . "\n" . '                    ';
echo $_['profile_success'];
echo '                </div>' . "\n" . '                ';
goto label162;

label15:

echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">GPU</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Video</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Audio</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Resolution</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Logo</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";

foreach (F93e9343c3d7fd99() as $b376970f4d4df746) {
	goto label89;

	label25:

	echo $b376970f4d4df746['profile_id'];
	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t";

	label28:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label132;

	label31:

	echo str_replace(':', 'x', $F53e4a272bc6a405[9]['val']);
	goto label53;

	label41:

	echo $F53e4a272bc6a405['gpu']['resize'] ?: str_replace(':', 'x', $F53e4a272bc6a405[9]['val']);

	label53:

	goto label103;

	label55:

	echo $F53e4a272bc6a405['-vcodec'] ?: 'None';
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $F53e4a272bc6a405['-acodec'] ?: 'None';
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";

	if (isset($F53e4a272bc6a405['gpu'])) {
		goto label41;
	}

	goto label31;

	label71:

	goto label74;

	label73:

	echo '<i class="text-success fas fa-square"></i>';

	label74:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label55;

	label77:

	echo '<i class="text-success fas fa-square"></i>';

	label78:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";

	if (e589A4BF54a2DAD1('adv', 'edit_tprofile')) {
		goto label126;
	}

	echo '--';
	goto label124;

	label89:

	$F53e4a272bc6a405 = json_decode($b376970f4d4df746['profile_options'], true);
	echo "\t\t\t\t\t\t\t\t" . '<tr id="profile-';
	echo $b376970f4d4df746['profile_id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $b376970f4d4df746['profile_id'];
	goto label113;

	label103:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";

	if (isset($F53e4a272bc6a405[16])) {
		goto label111;
	}

	echo '<i class="text-secondary fas fa-square"></i>';
	goto label78;

	label111:

	goto label77;

	label113:

	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $b376970f4d4df746['profile_name'];
	echo '</td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";

	if (isset($F53e4a272bc6a405['gpu'])) {
		goto label73;
	}

	echo '<i class="text-secondary fas fa-square"></i>';
	goto label71;

	label124:

	goto label28;

	label126:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./profile?id=';
	echo $b376970f4d4df746['profile_id'];
	echo '"><button type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="api(';
	goto label25;

	label132:
}

goto label154;

label135:

$F6edd90960a3bd9d = 'Transcoding Profiles';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label156;
}

echo ' style="display: none;"';
goto label156;

label154:

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label178;

label156:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['transcode_profiles'];
goto label1;

label162:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['id'];
echo '</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['profile_name'];
goto label15;

label169:

include 'session.php';
include 'functions.php';

if (E6D500e19634D513()) {
	goto label177;
}

e72f42A93714ba87();

label177:

goto label135;

label178:

include 'footer.php';

?>