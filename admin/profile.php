<?php


goto label360;

label1:

if ($F53e4a272bc6a405['software_decoding']) {
	goto label532;
}

if (!isset($F53e4a272bc6a405['gpu']['resize'])) {
	goto label19;
}

$F53e4a272bc6a405[9]['val'] = str_replace('x', ':', $F53e4a272bc6a405['gpu']['resize']);

label19:

$F53e4a272bc6a405[17]['val'] = 0 < intval($F53e4a272bc6a405['gpu']['deint']);
goto label531;

label29:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-3">' . "\n" . '                                                        <input type="text" class="form-control text-center" id="logo_pos" name="logo_pos" value="';

if (isset($ce04b619c7630041)) {
	goto label667;
}

echo '10:10';
goto label675;
goto label667;

label36:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="gpu_h264" style="display:none;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="preset_h264">';
echo $_['preset'];
echo ' <i title="';
echo $_['profile_tooltip_1'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="preset_h264" name="preset_h264" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label180;

label44:

echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="min_tolerance" name="min_tolerance" value="';

if (!isset($ce04b619c7630041)) {
	goto label55;
}

echo htmlspecialchars($F53e4a272bc6a405[5]['val']);

label55:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="max_tolerance">';
goto label547;

label57:

echo '" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label807;

label59:

foreach (['' => 'Automatic', 'baseline -level 3.0' => 'Baseline - Level 3.0', 'baseline -level 3.1' => 'Baseline - Level 3.1', 'main -level 3.1' => 'Main - Level 3.1', 'main -level 4.0' => 'Main - Level 4.0', 'high -level 4.0' => 'High - Level 4.0', 'high -level 4.1' => 'High - Level 4.1', 'high -level 4.2' => 'High - Level 4.2', 'high -level 5.0' => 'High - Level 5.0', 'high -level 5.1' => 'High - Level 5.1', 'high444p -level 4.0' => 'High 444p - Level 4.0', 'high444p -level 4.1' => 'High 444p - Level 4.1', 'high444p -level 4.2' => 'High 444p - Level 4.2', 'high444p -level 5.0' => 'High 444p - Level 5.0', 'high444p -level 5.1' => 'High 444p - Level 5.1'] as $d92fd2acaadc527e => $Fde3bfab1298b6f5) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-profile:v'] == $d92fd2acaadc527e))) {
		goto label73;
	}

	echo 'selected ';

	label73:

	echo 'value="';
	echo $d92fd2acaadc527e;
	echo '">';
	echo $Fde3bfab1298b6f5;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="gpu_hevc" style="display:none;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="preset_hevc">';
echo $_['preset'];
echo ' <i title="';
goto label279;

label85:

echo $_['profile_tooltip_14'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="threads" name="threads" value="';

if (!isset($ce04b619c7630041)) {
	goto label98;
}

echo htmlspecialchars($F53e4a272bc6a405[15]['val']);

label98:

goto label737;

label99:

if (!isset($ce04b619c7630041)) {
	goto label109;
}

echo htmlspecialchars($F53e4a272bc6a405[8]['val']);

label109:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="framerate">';
echo $_['target_framerate'];
goto label420;

label113:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="gpu_device">GPU Accelerated Transcoding</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="gpu_device" name="gpu_device" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($e902d00b48fba8a8 as $Db0336509474eb3e => $Fb718cebe4c27492) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['gpu']['val'] == $Db0336509474eb3e))) {
		goto label129;
	}

	echo 'selected ';

	label129:

	echo 'value="';
	echo $Db0336509474eb3e;
	echo '">';
	echo $Fb718cebe4c27492;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="video_codec">';
goto label440;

label138:

$F53e4a272bc6a405['gpu']['deint'] = intval(isset($F53e4a272bc6a405[17]));

label145:

$e902d00b48fba8a8 = ['Off'];

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	$Ec379295dc7029e6['gpu_info'] = json_decode($Ec379295dc7029e6['gpu_info'], true);

	if (!isset($Ec379295dc7029e6['gpu_info']['gpus'])) {
		goto label177;
	}

	foreach ($Ec379295dc7029e6['gpu_info']['gpus'] as $A6c57a3ff6f232ae => $Fbd977da339c16e3) {
		$e902d00b48fba8a8[$Ec379295dc7029e6['id'] . '_' . $A6c57a3ff6f232ae] = $Ec379295dc7029e6['server_name'] . ' - ' . $Fbd977da339c16e3['name'];
	}

	label177:
}

goto label228;

label180:

foreach (['' => 'Default', 'losslesshp' => 'Lossless - High Performance', 'lossless' => 'Lossless', 'llhp' => 'Low Latency - High Performance', 'llhq' => 'Low Latency - High Quality', 'll' => 'Low Latency', 'bd' => 'Blu-Ray Disk', 'hq' => 'High Quality', 'hp' => 'High Performance', 'fast' => 'Fast', 'medium' => 'Medium', 'slow' => 'Slow'] as $d92fd2acaadc527e => $Fde3bfab1298b6f5) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-preset'] == $d92fd2acaadc527e))) {
		goto label194;
	}

	echo 'selected ';

	label194:

	echo 'value="';
	echo $d92fd2acaadc527e;
	echo '">';
	echo $Fde3bfab1298b6f5;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="video_profile_h264">';
echo $_['video_profile'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="video_profile_h264" name="video_profile_h264" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label59;

label206:

echo '</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="profile-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="profile_name">';
echo $_['profile_name'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="profile_name" name="profile_name" value="';

if (!isset($ce04b619c7630041)) {
	goto label113;
}

echo htmlspecialchars($ce04b619c7630041['profile_name']);
goto label113;

label220:

echo "\t\t\t\t" . '</div>' . "\n\t\t\t\t";

label221:

echo "\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($ce04b619c7630041)) {
	goto label471;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
goto label468;

label228:

$F6edd90960a3bd9d = 'Transcoding Profile';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label436;
}

goto label435;

label246:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="cpu_options">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="preset_cpu">';
echo $_['preset'];
echo ' <i title="';
echo $_['profile_tooltip_1'];
goto label253;

label253:

echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="preset_cpu" name="preset_cpu" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['' => 'Default', 'ultrafast' => 'Ultra Fast', 'superfast' => 'Super Fast', 'veryfast' => 'Very Fast', 'faster' => 'Faster', 'fast' => 'Fast', 'medium' => 'Medium', 'slow' => 'Slow', 'slower' => 'Slower', 'veryslow' => 'Very Slow', 'placebo' => 'Placebo'] as $d92fd2acaadc527e => $Fde3bfab1298b6f5) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-preset'] == $d92fd2acaadc527e))) {
		goto label268;
	}

	echo 'selected ';

	label268:

	echo 'value="';
	echo $d92fd2acaadc527e;
	echo '">';
	echo $Fde3bfab1298b6f5;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="video_profile_cpu">';
echo $_['video_profile'];
goto label766;

label279:

echo $_['profile_tooltip_1'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="preset_hevc" name="preset_hevc" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['' => 'Default', 'losslesshp' => 'Lossless - High Performance', 'lossless' => 'Lossless', 'llhp' => 'Low Latency - High Performance', 'llhq' => 'Low Latency - High Quality', 'll' => 'Low Latency', 'bd' => 'Blu-Ray Disk', 'hq' => 'High Quality', 'hp' => 'High Performance', 'fast' => 'Fast', 'medium' => 'Medium', 'slow' => 'Slow'] as $d92fd2acaadc527e => $Fde3bfab1298b6f5) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-preset'] == $d92fd2acaadc527e))) {
		goto label296;
	}

	echo 'selected ';

	label296:

	echo 'value="';
	echo $d92fd2acaadc527e;
	echo '">';
	echo $Fde3bfab1298b6f5;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="video_profile_hevc">';
goto label573;

label305:

if (!isset($ce04b619c7630041)) {
	goto label315;
}

echo htmlspecialchars($F53e4a272bc6a405['gpu']['resize']);

label315:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="deint">Deinterlace <i title="Set deinterlacing mode." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="deint" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Weave (default)', 'Bob', 'Adaptive'] as $be083ab4cd4f4e7e => $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['gpu']['deint'] == $be083ab4cd4f4e7e))) {
		goto label331;
	}

	echo 'selected ';

	label331:

	echo 'value="';
	echo $be083ab4cd4f4e7e;
	echo '">';
	echo $ce0840c647e1bbc7;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label246;

label339:

echo $_['profile_tooltip_7'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="buffer_size" name="buffer_size" value="';

if (!isset($ce04b619c7630041)) {
	goto label352;
}

echo htmlspecialchars($F53e4a272bc6a405[7]['val']);

label352:

goto label758;

label353:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="min_tolerance">';
echo $_['minimum_bitrate_tolerance'];
echo ' <i title="';
echo $_['profile_tooltip_5'];
goto label44;

label360:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label368;
}

E72F42a93714ba87();

label368:

goto label504;

label369:

echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="samplerate" name="samplerate" value="';

if (!isset($ce04b619c7630041)) {
	goto label380;
}

echo htmlspecialchars($F53e4a272bc6a405[12]['val']);

label380:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="audio_channels">';
goto label599;

label382:

if (isset($ce04b619c7630041)) {
	goto label388;
}

echo $_['add_profile'];
goto label745;

label388:

echo $_['edit_profile'];
goto label745;

label391:

echo $_['add'];
goto label396;

label394:

echo $_['edit'];

label396:

goto label57;

label397:

echo htmlspecialchars($F53e4a272bc6a405[13]['val']);

label403:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="threads">';
echo $_['threads'];
echo ' <i title="';
goto label85;

label408:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="yadif_filter">Enable Deinterlace Filter <i title="De-interlace video using yadif filter. May be incompatible with other options that occupy the video filter. For GPU transcoding you should use the NVENC deinterlacing options." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="yadif_filter" id="yadif_filter" type="checkbox"';
if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405[17]['val'] == 1))) {
	goto label419;
}

echo ' checked ';

label419:

goto label799;

label420:

echo ' <i title="';
echo $_['profile_tooltip_11'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="framerate" name="framerate" value="';

if (!isset($ce04b619c7630041)) {
	goto label792;
}

echo htmlspecialchars($F53e4a272bc6a405[11]['val']);
goto label792;

label435:

echo ' style="display: none;"';

label436:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';
goto label382;

label440:

echo $_['video_codec'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9" id="video_codec_cpu_container">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="video_codec_cpu" name="video_codec_cpu" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['copy' => 'Copy Video Codec', 'libx264' => 'H.264 / MPEG-4 AVC', 'libx265' => 'H.265 / HEVC', 'mpegvideo' => 'H.262 / MPEG-2'] as $a42d28fc2a08c3b1 => $de454d1849ccbf2b) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-vcodec'] == $a42d28fc2a08c3b1))) {
		goto label457;
	}

	echo 'selected ';

	label457:

	echo 'value="';
	echo $a42d28fc2a08c3b1;
	echo '">';
	echo $a42d28fc2a08c3b1 . ' - ' . $de454d1849ccbf2b;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                    </div>' . "\n" . '                                                    <div class="col-md-6" id="video_codec_gpu_container" style="display: none;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="video_codec_gpu" name="video_codec_gpu" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label691;

label468:

echo $ce04b619c7630041['profile_id'];
echo '" />' . "\n\t\t\t\t\t\t\t";

label471:

echo "\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#profile-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">';
echo $_['details'];
goto label206;

label475:

echo ' <i title="';
echo $_['profile_tooltip_9'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="scaling" name="scaling" value="';

if (!isset($ce04b619c7630041)) {
	goto label408;
}

echo htmlspecialchars($F53e4a272bc6a405[9]['val']);
goto label408;

label490:

if (!isset($ce04b619c7630041)) {
	goto label500;
}

echo htmlspecialchars($F53e4a272bc6a405[3]['val']);

label500:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="audio_bitrate">';
echo $_['average_audio_bitrate'];
goto label558;

label504:
if (!(isset(XUI::$rRequest['id']) && !($ce04b619c7630041 = b11216Ab01AAA78C(XUI::$rRequest['id'])))) {
	goto label520;
}

e72F42a93714Ba87();

label520:

if (!isset($ce04b619c7630041)) {
	goto label145;
}

$F53e4a272bc6a405 = json_decode($ce04b619c7630041['profile_options'], true);
goto label1;

label531:

goto label145;

label532:

if (!isset($F53e4a272bc6a405[9])) {
	goto label546;
}

$F53e4a272bc6a405['gpu']['resize'] = str_replace(':', 'x', $F53e4a272bc6a405[9]['val']);

label546:

goto label138;

label547:

echo $_['maximum_bitrate_tolerance'];
echo ' <i title="';
echo $_['profile_tooltip_6'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="max_tolerance" name="max_tolerance" value="';

if (!isset($ce04b619c7630041)) {
	goto label686;
}

goto label680;

label558:

echo ' <i title="';
echo $_['profile_tooltip_4'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="audio_bitrate" name="audio_bitrate" value="';

if (!isset($ce04b619c7630041)) {
	goto label353;
}

echo htmlspecialchars($F53e4a272bc6a405[4]['val']);
goto label353;

label573:

echo $_['video_profile'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="video_profile_hevc" name="video_profile_hevc" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['' => 'Automatic', 'main -level 4.0' => 'Main - Level 4.0', 'main -level 4.1' => 'Main - Level 4.1', 'main -level 4.2' => 'Main - Level 4.2', 'main -level 5.0' => 'Main - Level 5.0', 'main -level 5.1' => 'Main - Level 5.1', 'main -level 5.2' => 'Main - Level 5.2', 'main -level 6.0' => 'Main - Level 6.0', 'main -level 6.1' => 'Main - Level 6.1', 'main -level 6.2' => 'Main - Level 6.2', 'main10 -level 4.0' => 'Main 10bit - Level 4.0', 'main10 -level 4.1' => 'Main 10bit - Level 4.1', 'main10 -level 4.2' => 'Main 10bit - Level 4.2', 'main10 -level 5.0' => 'Main 10bit - Level 5.0', 'main10 -level 5.1' => 'Main 10bit - Level 5.1', 'main10 -level 5.2' => 'Main 10bit - Level 5.2', 'main10 -level 6.0' => 'Main 10bit - Level 6.0', 'main10 -level 6.1' => 'Main 10bit - Level 6.1', 'main10 -level 6.2' => 'Main 10bit - Level 6.2', 'rext -level 4.0' => 'REXT - Level 4.0', 'rext -level 4.1' => 'REXT - Level 4.1', 'rext -level 4.2' => 'REXT - Level 4.2', 'rext -level 5.0' => 'REXT - Level 5.0', 'rext -level 5.1' => 'REXT - Level 5.1', 'rext -level 5.2' => 'REXT - Level 5.2', 'rext -level 6.0' => 'REXT - Level 6.0', 'rext -level 6.1' => 'REXT - Level 6.1', 'rext -level 6.2' => 'REXT - Level 6.2'] as $d92fd2acaadc527e => $Fde3bfab1298b6f5) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-profile:v'] == $d92fd2acaadc527e))) {
		goto label590;
	}

	echo 'selected ';

	label590:

	echo 'value="';
	echo $d92fd2acaadc527e;
	echo '">';
	echo $Fde3bfab1298b6f5;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="gpu_options" style="display:none;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="resize">Resize <i title="Resize command for GPU acceleration. Example: 1920x1080" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="resize" name="resize" value="';
goto label305;

label599:

echo $_['audio_channels'];
echo ' <i title="';
echo $_['profile_tooltip_13'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="audio_channels" name="audio_channels" value="';

if (!isset($ce04b619c7630041)) {
	goto label403;
}

goto label397;

label610:

echo ' <i title="';
echo $_['profile_tooltip_16'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="logo_path" name="logo_path" value="';

if (!isset($ce04b619c7630041)) {
	goto label29;
}

echo htmlspecialchars($F53e4a272bc6a405[16]['val']);
goto label29;

label625:

if (!isset($ce04b619c7630041)) {
	goto label635;
}

echo htmlspecialchars($F53e4a272bc6a405[10]['val']);

label635:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="logo_path">';
echo $_['logo_path_url'];
goto label610;

label639:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="audio_codec">';
echo $_['audio_codec'];
echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="audio_codec" name="audio_codec" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['copy' => 'Copy Audio Codec', 'aac' => 'AAC Advanced Audio Coding', 'ac3' => 'AC3 Dolby Digital', 'eac3' => 'E-AC3 Dolby Digital Plus', 'mp2' => 'MP2 MPEG Audio Layer 2', 'libmp3lame' => 'MP3 MPEG Audio Layer 2'] as $a42d28fc2a08c3b1 => $de454d1849ccbf2b) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-acodec'] == $a42d28fc2a08c3b1))) {
		goto label657;
	}

	echo 'selected ';

	label657:

	echo 'value="';
	echo $a42d28fc2a08c3b1;
	echo '">';
	echo $a42d28fc2a08c3b1 . ' - ' . $de454d1849ccbf2b;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label36;

label667:

echo htmlspecialchars($F53e4a272bc6a405[16]['pos'] ?: '10:10');

label675:

echo '" placeholder="pos x:x">' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_profile" type="submit" class="btn btn-primary" value="';

if (isset($ce04b619c7630041)) {
	goto label394;
}

goto label391;

label680:

echo htmlspecialchars($F53e4a272bc6a405[6]['val']);

label686:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="buffer_size">';
echo $_['buffer_size'];
echo ' <i title="';
goto label339;

label691:

foreach (['h264_nvenc' => 'CUVID NVENC H264', 'hevc_nvenc' => 'CUVID NVENC HEVC'] as $a42d28fc2a08c3b1 => $de454d1849ccbf2b) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-vcodec'] == $a42d28fc2a08c3b1))) {
		goto label705;
	}

	echo 'selected ';

	label705:

	echo 'value="';
	echo $a42d28fc2a08c3b1;
	echo '">';
	echo $a42d28fc2a08c3b1 . ' - ' . $de454d1849ccbf2b;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3" id="video_decoding_container" style="display: none;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="software_decoding" name="software_decoding" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Hardware Decoding', 'Software Decoding'] as $ce0840c647e1bbc7 => $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['software_decoding'] == $ce0840c647e1bbc7))) {
		goto label729;
	}

	echo 'selected ';

	label729:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label639;

label737:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="aspect_ratio">';
echo $_['aspect_ratio'];
echo ' <i title="';
echo $_['profile_tooltip_10'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="aspect_ratio" name="aspect_ratio" value="';
goto label625;

label745:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_FAILURE))) {
	goto label221;
}

echo "\t\t\t\t" . '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t";
echo $_['generic_fail'];
goto label220;

label758:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="crf_value">';
echo $_['crf_value'];
echo ' <i title="';
echo $_['profile_tooltip_8'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="crf_value" name="crf_value" value="';
goto label99;

label766:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="video_profile_cpu" name="video_profile_cpu" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['' => 'Automatic', 'baseline -level 3.0' => 'Baseline - Level 3.0', 'baseline -level 3.1' => 'Baseline - Level 3.1', 'main -level 3.1' => 'Main - Level 3.1', 'main -level 4.0' => 'Main - Level 4.0', 'high -level 4.0' => 'High - Level 4.0', 'high -level 4.1' => 'High - Level 4.1', 'high -level 4.2' => 'High - Level 4.2', 'high -level 5.0' => 'High - Level 5.0', 'high -level 5.1' => 'High - Level 5.1'] as $d92fd2acaadc527e => $Fde3bfab1298b6f5) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';
	if (!(isset($ce04b619c7630041) && ($F53e4a272bc6a405['-profile:v'] == $d92fd2acaadc527e))) {
		goto label781;
	}

	echo 'selected ';

	label781:

	echo 'value="';
	echo $d92fd2acaadc527e;
	echo '">';
	echo $Fde3bfab1298b6f5;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="scaling">';
echo $_['scaling'];
goto label475;

label792:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="samplerate">';
echo $_['audio_sample_rate'];
echo ' <i title="';
echo $_['profile_tooltip_12'];
goto label369;

label799:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="video_bitrate">';
echo $_['average_video_bitrate'];
echo ' <i title="';
echo $_['profile_tooltip_3'];
echo '" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="video_bitrate" name="video_bitrate" value="';
goto label490;

label807:

include 'footer.php';

?>