<?php


goto label718;

label1:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#load-balancing" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-server-network mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Servers</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

if (!isset(XUI::$rRequest['import'])) {
	goto label9;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="m3u_file">M3U</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="file" id="m3u_file" name="m3u_file" style="padding-top: 5px;" />' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
goto label733;

label9:

goto label454;

label10:

echo 'selected ';

label11:

echo 'value="0">No EPG</option>' . "\n" . '                                                                    ';

foreach ($ac2f0b1c3a4502f1 as $a2ebb817d88c810b) {
	goto label19;

	label16:

	echo '</option>' . "\n" . '                                                                    ';
	goto label46;

	label19:

	echo '                                                                    <option ';

	if (!isset($fe93a43f53d92a4e)) {
		goto label38;
	}

	if (!(intval($fe93a43f53d92a4e['epg_id']) == $a2ebb817d88c810b['id'])) {
		goto label36;
	}

	echo 'selected ';

	label36:

	goto label38;

	label38:

	echo 'value="';
	echo $a2ebb817d88c810b['id'];
	echo '">';
	echo $a2ebb817d88c810b['epg_name'];
	goto label16;

	label46:
}

goto label1046;

label49:

echo htmlspecialchars($A508fa583604eb49[19]['value']);

label55:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="transcode_profile_id">Transcoding Profile <i title="Sometimes, in order to make a stream compatible with most devices, it must be transcoded. Please note that the transcode will only be applied to the server(s) that take the stream directly from the source, all other servers attached to the transcoding server will not transcode the stream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="transcode_profile_id" id="transcode_profile_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

if (!isset($fe93a43f53d92a4e)) {
	goto label940;
}

goto label931;

label61:

if (isset(XUI::$rRequest['import'])) {
	goto label66;
}

echo '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-sources" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-arrow-up-down-bold-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Sources</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';

label66:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Advanced</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t";

if (isset(XUI::$rRequest['import'])) {
	goto label443;
}

goto label439;

label72:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="fps_threshold">FPS Threshold % <i title="Stream will restart if it drops below x% of it\'s original FPS. Maximum of 100%." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="fps_threshold" name="fps_threshold" value="';

if (isset($fe93a43f53d92a4e)) {
	goto label78;
}

echo '90';
goto label746;

label78:

goto label744;

label79:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="read_native">Native Frames <i title="You should always read live streams as non-native frames. However if you are streaming static video files, set this to true otherwise the encoding process will fail." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="read_native" id="read_native" type="checkbox" ';

if (!isset($fe93a43f53d92a4e)) {
	goto label952;
}

if (!($fe93a43f53d92a4e['read_native'] == 1)) {
	goto label952;
}

goto label951;

label90:

goto label97;

label91:

echo htmlspecialchars($A508fa583604eb49[2]['value']);

label97:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="cookie">Cookie <i title="Format: key=value;" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="cookie" name="cookie" value="';
goto label999;

label99:

foreach ($e8d6a476285e9da1 as $C082ca9ed03f473c => $Ec0879f16d0cdddb) {
	foreach ($Ec0879f16d0cdddb as $fd51b5505224fc7c) {
		echo '                                                                <tr class="rtmp_info">' . "\n" . '                                                                    <td class="rtmp_server">' . "\n" . '                                                                        <select id="rtmp_push_';
		echo $df6991d59f367c7e;
		echo '" class="form-control" data-toggle="select2">' . "\n" . '                                                                            ';

		foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
			echo '                                                                            <option value="';
			echo $Ec379295dc7029e6['id'];
			echo '"';
			if (!(isset($fe93a43f53d92a4e) && ($C082ca9ed03f473c == $Ec379295dc7029e6['id']))) {
				goto label125;
			}

			echo ' selected';

			label125:

			echo '>';
			echo $Ec379295dc7029e6['server_name'];
			echo '</option>' . "\n" . '                                                                            ';
		}

		echo '                                                                        </select>' . "\n" . '                                                                    </td>' . "\n" . '                                                                    <td class="input-group">' . "\n" . '                                                                        <input type="text" class="form-control" value="';
		echo htmlspecialchars($fd51b5505224fc7c);
		echo '">' . "\n" . '                                                                        <div class="input-group-append">' . "\n" . '                                                                            <button class="btn btn-danger waves-effect waves-light btn-fixed-xs" onClick="removeRTMP(this);" type="button"><i class="mdi mdi-close"></i></button>' . "\n" . '                                                                        </div>' . "\n" . '                                                                    </td>' . "\n" . '                                                                </tr>' . "\n" . '                                                            ';
		$df6991d59f367c7e++;
	}
}

echo '                                                    </tbody>' . "\n" . '                                                </table>' . "\n" . '                                            </div>' . "\n" . '                                        </div>' . "\n" . '                                        <ul class="list-inline wizard mb-0" style="padding-top: 30px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                            </li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n" . '                                                <a onClick="addRTMP();" class="btn btn-info btn-pointer">Add RTMP URL</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn nextb btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n" . '                                    </div>' . "\n\t\t\t\t\t\t\t\t\t";

label144:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="load-balancing">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="servers">Server Tree</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="server_tree"></div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="on_demand">On-Demand Servers</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n" . '                                                        <select name="on_demand[]" id="on_demand" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label1350;

label146:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="tv_archive_server_id">Timeshift Server</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="tv_archive_server_id" id="tv_archive_server_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="0">Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset($fe93a43f53d92a4e) && ($fe93a43f53d92a4e['tv_archive_server_id'] == $Ec379295dc7029e6['id']))) {
		goto label164;
	}

	echo ' selected';

	label164:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="tv_archive_duration">Timeshift Days</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="tv_archive_duration" name="tv_archive_duration" value="';

if (isset($fe93a43f53d92a4e)) {
	goto label585;
}

goto label583;

label175:

echo '0';
goto label179;

label177:

echo $fe93a43f53d92a4e['delay_minutes'];

label179:

goto label265;

label180:

echo '                                                        </tr>' . "\n" . '                                                    </thead>' . "\n" . '                                                    <tbody class="streams">' . "\n" . '                                                        ';

if (isset($fe93a43f53d92a4e)) {
	goto label527;
}

if (isset(XUI::$rRequest['url'])) {
	goto label245;
}

$E48a11cab6fd380f = [''];
goto label244;

label190:

if (!strlen($fe93a43f53d92a4e['auto_restart'])) {
	goto label243;
}

$f1b1f15f38dab369 = json_decode($fe93a43f53d92a4e['auto_restart'], true);

if (isset($f1b1f15f38dab369['days'])) {
	goto label208;
}

$f1b1f15f38dab369['days'] = [];

label208:

goto label238;

label209:

if (isset($fe93a43f53d92a4e)) {
	goto label727;
}

if (!isset(XUI::$rRequest['icon'])) {
	goto label225;
}

echo str_replace('"', '&quot;', XUI::$rRequest['icon']);

label225:

goto label732;
goto label727;

label227:

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">';

if (isset($fe93a43f53d92a4e['id'])) {
	goto label743;
}

if (isset(XUI::$rRequest['import'])) {
	goto label741;
}

echo 'Add Stream';
goto label742;
goto label741;

label238:

if (isset($f1b1f15f38dab369['at'])) {
	goto label243;
}

$f1b1f15f38dab369['at'] = '06:00';

label243:

goto label1325;

label244:

goto label254;

label245:

$E48a11cab6fd380f = [str_replace('"', '&quot;', XUI::$rRequest['url'])];

label254:

goto label911;
goto label527;

label256:

$fe93a43f53d92a4e['epg_api_name'] = 'No longer available.';
goto label264;

label259:

$fe93a43f53d92a4e['epg_api_name'] = $b62d6460eb33ea07->get_row()['name'];

label264:

goto label1121;

label265:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="user_agent">User Agent</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="user_agent" name="user_agent" value="';

if (isset($A508fa583604eb49[1])) {
	goto label276;
}

echo htmlspecialchars($b5337d8a535cf6dd['user_agent']['argument_default_value']);
goto label900;

label276:

goto label894;

label277:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="headers">Headers <i title="FFmpeg -headers command." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="headers" name="headers" value="';

if (isset($A508fa583604eb49[19])) {
	goto label49;
}

echo htmlspecialchars($b5337d8a535cf6dd['headers']['argument_default_value']);
goto label55;
goto label49;

label289:

if (!($fe93a43f53d92a4e['rtmp_output'] == 1)) {
	goto label295;
}

echo 'checked ';

label295:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="alert bg-info text-white border-0" role="alert">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'RTMP Push will allow you to push your streams to RTMP servers, such as the one that runs with XUI. The `Push From` server needs to be enabled in the servers tab for this to be activated.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <table id="datatable-rtmp" class="table table-striped table-borderless mb-0">' . "\n" . '                                                    <thead>' . "\n" . '                                                        <tr>' . "\n" . '                                                            <th>Push From</th>' . "\n" . '                                                            <th>RTMP URL</th>' . "\n" . '                                                        </tr>' . "\n" . '                                                    </thead>' . "\n" . '                                                    <tbody class="rtmp">' . "\n" . '                                                        ';
goto label670;

label297:

goto label303;

label298:

echo htmlspecialchars($fe93a43f53d92a4e['stream_display_name']);

label303:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="stream_icon">Stream Logo</label>' . "\n" . '                                                    <div class="col-md-9 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_icon" name="stream_icon" value="';
goto label209;

label305:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset($fe93a43f53d92a4e) && ($fe93a43f53d92a4e['capture_server_id'] == $Ec379295dc7029e6['id']))) {
		goto label322;
	}

	echo ' selected';

	label322:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="video_device_id">Video Input</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="video_device_id" id="video_device_id" class="form-control" data-toggle="select2"></select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="audio_device_id">Audio Input</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="audio_device_id" id="audio_device_id" class="form-control" data-toggle="select2"></select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            </div>' . "\n" . '                                        </div>' . "\n" . '                                        <ul class="list-inline wizard mb-0" style="padding-top: 30px;">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n" . '                                            </li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span id="source_form">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a onClick="addStream();" class="btn btn-primary btn-pointer">Add Row</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

if ($Ebb0b63f7c597ba4) {
	goto label976;
}

echo '                                                <li class="list-inline-item">' . "\n" . '                                                    <button type="button" style="width: 100%" class="btn btn-pink btn-pointer" id="provider-streams">Providers</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a onClick="scanSources();" class="btn btn-info btn-pointer">Scan Sources</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
goto label976;

label333:

if (isset($fe93a43f53d92a4e)) {
	goto label338;
}

echo 'checked ';
goto label712;

label338:

if (!($fe93a43f53d92a4e['allow_record'] == 1)) {
	goto label712;
}

goto label711;

label344:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	goto label348;

	label348:

	if (isset($bfeef7b0d44ec01c[intval($Ec379295dc7029e6['id'])])) {
		goto label359;
	}

	$f6cad74ab6fb4eea = 'offline';
	goto label402;

	label359:

	if ($bfeef7b0d44ec01c[intval($Ec379295dc7029e6['id'])]['parent_id'] != 0) {
		goto label374;
	}

	goto label371;

	label371:

	$f6cad74ab6fb4eea = 'source';
	goto label384;

	label374:

	$f6cad74ab6fb4eea = intval($bfeef7b0d44ec01c[intval($Ec379295dc7029e6['id'])]['parent_id']);

	label384:

	goto label386;

	label386:

	if (!$bfeef7b0d44ec01c[intval($Ec379295dc7029e6['id'])]['on_demand']) {
		goto label402;
	}

	$Cc9b6078c1293a96[] = intval($Ec379295dc7029e6['id']);

	label402:

	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => $f6cad74ab6fb4eea,
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
	goto label413;

	label413:

	goto label415;

	label415:
}
if (!($fe93a43f53d92a4e['epg_api'] && (0 < strlen($fe93a43f53d92a4e['channel_id'])))) {
	goto label1121;
}

$b62d6460eb33ea07->query('SELECT `name` FROM `epg_api` WHERE `callSign` = ?;', $fe93a43f53d92a4e['channel_id']);

if (0 < $b62d6460eb33ea07->num_rows()) {
	goto label259;
}

goto label256;

label439:

echo "\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-map" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-map mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Map</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#epg-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-television-guide mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">EPG</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';

if ($Ebb0b63f7c597ba4) {
	goto label443;
}

echo '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#rtmp-push" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-upload-network-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">RTMP Push</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';

label443:

goto label1;

label444:

echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    ';

if (isset(XUI::$rRequest['import'])) {
	goto label977;
}

echo '                                    <div class="tab-pane" id="stream-sources">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <table id="datatable-sources" class="table table-striped table-borderless mb-0">' . "\n" . '                                                    <thead>' . "\n" . '                                                        <tr>' . "\n" . '                                                            <th>URL</th>' . "\n" . '                                                            ';

if ($Ebb0b63f7c597ba4) {
	goto label180;
}

echo '                                                            <th class="text-center">Stream Info</th>' . "\n" . '                                                            ';
goto label180;

label454:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="stream_display_name">Stream Name</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="stream_display_name" name="stream_display_name" value="';

if (isset($fe93a43f53d92a4e)) {
	goto label298;
}

if (!isset(XUI::$rRequest['title'])) {
	goto label471;
}

echo str_replace('"', '&quot;', XUI::$rRequest['title']);

label471:

goto label297;

label472:

if (!isset($fe93a43f53d92a4e)) {
	goto label482;
}

if (!($fe93a43f53d92a4e['fps_restart'] == 1)) {
	goto label482;
}

echo 'checked ';

label482:

goto label72;

label483:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="probesize_ondemand">On Demand Probesize <i title="Adjustable probesize for ondemand streams. Adjust this setting if you experience issues with no audio." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="probesize_ondemand" name="probesize_ondemand" value="';

if (isset($fe93a43f53d92a4e)) {
	goto label734;
}

echo $f1dcaed925076e67['probesize_ondemand'];
goto label736;
goto label734;

label491:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    ';
$Ebc983494a99df63 = (isset($fe93a43f53d92a4e) ? json_decode($fe93a43f53d92a4e['adaptive_link'], true) ?: [] : []);
$fe831e4685cbaa8c = [];

if (!(0 < count($Ebc983494a99df63))) {
	goto label551;
}

$b62d6460eb33ea07->query('SELECT `id`, `stream_display_name` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $Ebc983494a99df63)) . ');');
goto label537;

label527:

$E48a11cab6fd380f = json_decode($fe93a43f53d92a4e['stream_source'], true);

if ($E48a11cab6fd380f) {
	goto label536;
}

$E48a11cab6fd380f = [''];

label536:

goto label911;

label537:

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$fe831e4685cbaa8c[$Fb9da1713bff19ce['id']] = '[' . $Fb9da1713bff19ce['id'] . '] ' . $Fb9da1713bff19ce['stream_display_name'];
}

label551:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="adaptive_link">Adaptive Link  <i title="Link multiple streams together when HLS is requested, the player will select a suitable stream based on the available bandwidth. The selected streams do not need to be in the line\'s bouquet, or any bouquet at all. MPEG-TS will play this stream normally." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="adaptive_link[]" id="adaptive_link" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">' . "\n" . '                                                            ';

foreach ($Ebc983494a99df63 as $D60e2f1362c3973c) {
	echo '                                                            <option value="';
	echo $D60e2f1362c3973c;
	echo '" selected="selected">';
	echo $fe831e4685cbaa8c[$D60e2f1362c3973c];
	echo '</option>' . "\n" . '                                                            ';
}

goto label1081;

label563:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label581;
}

echo '<option value="' . $A49cd9d2bf9ab4f1 . '_' . $c97f2fac0a624e3b . '" selected="selected">[' . $c97f2fac0a624e3b . '] ' . $b62d6460eb33ea07->get_row()['stream_display_name'] . '</option>';

label581:

echo '                                                        </select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <div class="col-md-2">' . "\n" . '                                                        <a href="javascript: void(0);" onClick="clearTitle();" class="btn btn-warning" style="width: 100%">Clear</a>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t";
goto label757;

label583:

echo '0';
goto label587;

label585:

echo $fe93a43f53d92a4e['tv_archive_duration'];

label587:

goto label682;

label588:

echo '" id="xui-epg">' . "\n" . '                                                        <div class="form-group row mb-4">' . "\n" . '                                                            <label class="col-md-3 col-form-label" for="epg_api_name">Channel Name</label>' . "\n" . '                                                            <div class="col-md-5">' . "\n" . '                                                                <input readonly id="epg_api_name" name="epg_api_name" type="text" class="form-control" value="';
if (!(isset($fe93a43f53d92a4e) && $fe93a43f53d92a4e['epg_api'])) {
	goto label598;
}

echo $fe93a43f53d92a4e['epg_api_name'];

label598:

echo '">' . "\n" . '                                                            </div>' . "\n" . '                                                            <div class="col-md-2">' . "\n" . '                                                                <input readonly id="epg_api_id" name="epg_api_id" type="text" class="form-control text-center" value="';
goto label772;

label600:

foreach ($Cf9848d22b37a744 as $b376970f4d4df746) {
	goto label615;

	label604:

	echo 'value="';
	echo $b376970f4d4df746['profile_id'];
	echo '">';
	echo $b376970f4d4df746['profile_name'];
	goto label612;

	label612:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label637;

	label615:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($fe93a43f53d92a4e)) {
		goto label604;
	}

	if (!(intval($fe93a43f53d92a4e['transcode_profile_id']) == intval($b376970f4d4df746['profile_id']))) {
		goto label635;
	}

	echo 'selected ';

	label635:

	goto label604;

	label637:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="days_to_restart">Auto-Restart</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-7">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
$f1b1f15f38dab369 = [
	'days' => [],
	'at'   => '06:00'
];

if (!isset($fe93a43f53d92a4e)) {
	goto label243;
}

goto label190;

label646:

echo '" id="quick-search">' . "\n" . '                                                        <div class="form-group row mb-4">' . "\n" . '                                                            <label class="col-md-3 col-form-label" for="quick_search">Search EPG</label>' . "\n" . '                                                            <div class="col-md-9">' . "\n" . '                                                                <select id="quick_search" class="form-control" data-toggle="select2"></select>' . "\n" . '                                                            </div>' . "\n" . '                                                        </div>' . "\n" . '                                                    </div>' . "\n" . '                                                    <div class="tab-pane';
if (!(isset($fe93a43f53d92a4e) && $fe93a43f53d92a4e['epg_api'])) {
	goto label655;
}

echo ' active';

label655:

goto label588;

label656:

goto label1121;

label657:

$A508fa583604eb49 = b2Be0b935A31df18(XUI::$rRequest['id']);
$bfeef7b0d44ec01c = b25F6f50dfa04EB7(XUI::$rRequest['id']);
goto label344;

label670:

if (isset($fe93a43f53d92a4e)) {
	goto label675;
}

$e8d6a476285e9da1 = [
	['']
];
goto label1305;

label675:

$e8d6a476285e9da1 = json_decode($fe93a43f53d92a4e['external_push'], true);
goto label1302;

label682:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="vframes_server_id">Thumbnail Server</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="vframes_server_id" id="vframes_server_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="0">Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset($fe93a43f53d92a4e) && ($fe93a43f53d92a4e['vframes_server_id'] == $Ec379295dc7029e6['id']))) {
		goto label700;
	}

	echo ' selected';

	label700:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="restart_on_edit">';

if (isset($fe93a43f53d92a4e['id'])) {
	goto label1119;
}

goto label1117;

label711:

echo 'checked ';

label712:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="direct_source">Direct Source <i title="Don\'t run source through XUI, just redirect instead." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_source" id="direct_source" type="checkbox" ';

if (!isset($fe93a43f53d92a4e)) {
	goto label834;
}

goto label828;

label718:

include 'session.php';
include 'functions.php';

if (e6D500E19634D513()) {
	goto label726;
}

e72F42A93714ba87();

label726:

goto label1132;

label727:

echo htmlspecialchars($fe93a43f53d92a4e['stream_icon']);

label732:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" onclick="openImage(this)" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-eye"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

label733:

goto label1211;

label734:

echo $fe93a43f53d92a4e['probesize_ondemand'];

label736:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="delay_minutes">Minute Delay <i title="Delay stream by X minutes. Will not work with on demand streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="delay_minutes" name="delay_minutes" value="';

if (isset($fe93a43f53d92a4e)) {
	goto label177;
}

goto label175;

label741:

echo 'Import Streams';

label742:

goto label991;

label743:

goto label989;

label744:

echo $fe93a43f53d92a4e['fps_threshold'];

label746:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="custom_sid">Custom Channel SID <i title="Here you can specify the SID of the channel in order to work with the epg on the enigma2 devices. You have to specify the code with the \':\' but without the first number, 1 or 4097 . Example: if we have this code:  \'1:0:1:13f:157c:13e:820000:0:0:0:2097\' then you have to add on this field:  \':0:1:13f:157c:13e:820000:0:0:0:" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="custom_sid" name="custom_sid" value="';

if (!isset($fe93a43f53d92a4e)) {
	goto label483;
}

echo htmlspecialchars($fe93a43f53d92a4e['custom_sid']);
goto label483;

label757:

if (isset(XUI::$rRequest['import'])) {
	goto label144;
}

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="stream-map">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <div class="alert bg-info text-white border-0" role="alert">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'Custom maps can only be applied to single source streams, if you have more than one and the active source changes, a custom map could prevent that source from working.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <table class="table table-striped table-borderless mb-4">' . "\n" . '                                                    <thead>' . "\n" . '                                                        <tr>' . "\n" . '                                                            <th>Custom Map</th>' . "\n" . '                                                        </tr>' . "\n" . '                                                    </thead>' . "\n" . '                                                    <tbody>' . "\n" . '                                                        <tr>' . "\n" . '                                                            <td class="input-group">' . "\n" . '                                                                <input type="text" class="form-control" id="custom_map" name="custom_map" value="';

if (!isset($fe93a43f53d92a4e)) {
	goto label771;
}

echo htmlspecialchars($fe93a43f53d92a4e['custom_map']);

label771:

goto label958;

label772:
if (!(isset($fe93a43f53d92a4e) && $fe93a43f53d92a4e['epg_api'])) {
	goto label781;
}

echo $fe93a43f53d92a4e['channel_id'];

label781:

echo '">' . "\n" . '                                                            </div>' . "\n" . '                                                            <div class="col-md-2">' . "\n" . '                                                                <button type="button" style="width: 100%" class="btn btn-info waves-effect waves-light btn-xl" id="epg-api"><i class="mdi mdi-magnify"></i></button>' . "\n" . '                                                            </div>' . "\n" . '                                                        </div>' . "\n" . '                                                        <div class="table-responsive" id="table-epg-data" style="display: none; padding-bottom: 30px;">' . "\n" . '                                                            <table class="table table-striped table-borderless mb-0">' . "\n" . '                                                                <thead>' . "\n" . '                                                                    <tr>' . "\n" . '                                                                        <th class="text-center">Time</th>' . "\n" . '                                                                        <th>Title</th>' . "\n" . '                                                                        <th>Description</th>' . "\n" . '                                                                    </tr>' . "\n" . '                                                                </thead>' . "\n" . '                                                                <tbody></tbody>' . "\n" . '                                                            </table>' . "\n" . '                                                        </div>' . "\n" . '                                                    </div>' . "\n" . '                                                    <div class="tab-pane';
if (!(isset($fe93a43f53d92a4e) && !$fe93a43f53d92a4e['epg_api'])) {
	goto label1019;
}

goto label1018;

label791:

echo '                                                                </select>' . "\n" . '                                                            </div>' . "\n" . '                                                        </div>' . "\n" . '                                                        <div class="form-group row mb-4">' . "\n" . '                                                            <label class="col-md-4 col-form-label" for="epg_lang">EPG Language</label>' . "\n" . '                                                            <div class="col-md-4">' . "\n" . '                                                                <select name="epg_lang" id="epg_lang" class="form-control" data-toggle="select2">' . "\n" . '                                                                ';

if (!isset($fe93a43f53d92a4e)) {
	goto label1125;
}

foreach (json_decode($ac2f0b1c3a4502f1[intval($fe93a43f53d92a4e['epg_id'])]['data'], true)[$fe93a43f53d92a4e['channel_id']]['langs'] as $Abcb228699a7f743 => $bc6b825af9e46f5b) {
	echo '                                                                    <option value="';
	echo $bc6b825af9e46f5b;
	echo '"';

	if (!($fe93a43f53d92a4e['epg_lang'] == $bc6b825af9e46f5b)) {
		goto label822;
	}

	echo ' selected';

	label822:

	echo '>';
	echo $bc6b825af9e46f5b;
	echo '</option>' . "\n" . '                                                                    ';
}

goto label1125;

label828:

if (!($fe93a43f53d92a4e['direct_source'] == 1)) {
	goto label834;
}

echo 'checked ';

label834:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="direct_proxy">Direct Stream <i title="When using direct source, hide the original URL by proxying the live stream through your servers via UDP. MPEG-TS and HLS is supported as an input format, however only MPEG-TS is supported as an output format to clients.<br/><br/>Experimental! This may not work for all streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="direct_proxy" id="direct_proxy" type="checkbox" ';
goto label1106;

label836:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                        <div id="bouquet_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">' . "\n" . '                                                            <strong>New Bouquets:</strong> <span id="bouquet_new"></span>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="notes">Notes</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea id="notes" name="notes" class="form-control" rows="3" placeholder="">';

if (!isset($fe93a43f53d92a4e)) {
	goto label846;
}

echo htmlspecialchars($fe93a43f53d92a4e['notes']);

label846:

goto label444;

label847:

echo ' action="#" method="POST" id="stream_form" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t";

if (!isset($fe93a43f53d92a4e['id'])) {
	goto label966;
}

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $fe93a43f53d92a4e['id'];
goto label965;

label856:

$E23b1ca1f188e5ac = [
	[
	'id'     => 'source',
	'parent' => '#',
	'text'   => '<strong class=\'btn btn-success waves-effect waves-light btn-xs\'>Online</strong>',
	'icon'   => 'mdi mdi-play',
	'state'  => ['opened' => true]
],
	[
	'id'     => 'offline',
	'parent' => '#',
	'text'   => '<strong class=\'btn btn-secondary waves-effect waves-light btn-xs\'>Offline</strong>',
	'icon'   => 'mdi mdi-stop',
	'state'  => ['opened' => true]
]
];
$F8fd43ce0ecc7632 = $E1c0ea255b6f1a96 = [];

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	$E1c0ea255b6f1a96[$Ec379295dc7029e6['id']] = $Ec379295dc7029e6['video_devices'];
	$F8fd43ce0ecc7632[$Ec379295dc7029e6['id']] = $Ec379295dc7029e6['audio_devices'];
}

goto label1187;

label872:
if (!(!$fe93a43f53d92a4e || ($fe93a43f53d92a4e['type'] != 1))) {
	goto label882;
}

E72f42a93714ba87();

label882:

$ac2f0b1c3a4502f1 = E91c9873459EC2Ba();
goto label1166;

label886:

if (!($fe93a43f53d92a4e['stream_all'] == 1)) {
	goto label892;
}

echo 'checked ';

label892:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allow_record">Allow Recording</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_record" id="allow_record" type="checkbox" ';
goto label333;

label894:

echo htmlspecialchars($A508fa583604eb49[1]['value']);

label900:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="http_proxy">HTTP Proxy <i title="Format: ip:port" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="http_proxy" name="http_proxy" value="';

if (isset($A508fa583604eb49[2])) {
	goto label91;
}

echo htmlspecialchars($b5337d8a535cf6dd['proxy']['argument_default_value']);
goto label90;

label911:

$df6991d59f367c7e = 0;

foreach ($E48a11cab6fd380f as $fd51b5505224fc7c) {
	$df6991d59f367c7e++;
	echo '                                                        <tr class="stream_info">' . "\n" . '                                                            <td class="input-group">' . "\n" . '                                                                <div class="input-group-append">' . "\n" . '                                                                    <button class="btn btn-secondary waves-effect waves-light btn-fixed-xs" onClick="moveUp(this);" type="button"><i class="mdi mdi-chevron-up"></i></button>' . "\n" . '                                                                    <button class="btn btn-secondary waves-effect waves-light btn-fixed-xs" onClick="moveDown(this);" type="button"><i class="mdi mdi-chevron-down"></i></button>' . "\n" . '                                                                </div>' . "\n" . '                                                                <input type="text" id="stream_source" name="stream_source[]" class="form-control" value="';
	echo htmlspecialchars($fd51b5505224fc7c);
	echo '">' . "\n" . '                                                                <div class="input-group-append">' . "\n" . '                                                                    <button class="btn btn-danger waves-effect waves-light btn-fixed-xs" onClick="removeStream(this);" type="button"><i class="mdi mdi-close"></i></button>' . "\n" . '                                                                </div>' . "\n" . '                                                            </td>' . "\n" . '                                                            ';

	if ($Ebb0b63f7c597ba4) {
		goto label926;
	}

	echo '                                                            <td class="text-center" id="stream_info" style="width:380px;">' . "\n" . '                                                                <table class=\'table-data\' style=\'width: 380px;\' align=\'center\'><tbody><tr><td colspan=\'5\'>Not scanned</td></tr></tbody></table>' . "\n" . '                                                            </td>' . "\n" . '                                                            ';

	label926:

	echo '                                                        </tr>' . "\n" . '                                                        ';
}

echo '                                                    </tbody>' . "\n" . '                                                </table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div id="capture_form" style="display: none;">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="capture_server_id">Capture Server</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="capture_server_id" id="capture_server_id" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label305;

label931:

if (!(intval($fe93a43f53d92a4e['transcode_profile_id']) == 0)) {
	goto label940;
}

echo 'selected ';

label940:

echo 'value="0">Transcoding Disabled</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label600;

label942:

echo 'checked ';
goto label79;

label944:

if (!($fe93a43f53d92a4e['gen_timestamps'] == 1)) {
	goto label79;
}

echo 'checked ';
goto label79;

label951:

echo 'checked ';

label952:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="stream_all">Stream All Codecs <i title="This option will stream all codecs from your stream. Some streams have more than one audio/video/subtitles channels." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="stream_all" id="stream_all" type="checkbox" ';

if (!isset($fe93a43f53d92a4e)) {
	goto label892;
}

goto label886;

label958:

echo '">' . "\n" . '                                                                <div class="input-group-append">' . "\n" . '                                                                    <button class="btn btn-primary waves-effect waves-light" id="load_maps" type="button"><i class="mdi mdi-magnify"></i></button>' . "\n" . '                                                                </div>' . "\n" . '                                                            </td>' . "\n" . '                                                        </tr>' . "\n" . '                                                    </tbody>' . "\n" . '                                                </table>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<table id="datatable-map" class="table table-striped table-borderless mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>#</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Type</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<th>Information</th>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<tbody></tbody>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="epg-options">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <ul class="nav nav-pills navtab-bg nav-justified">' . "\n" . '                                                    <li class="nav-item">' . "\n" . '                                                        <a href="#quick-search" data-toggle="tab" aria-expanded="true" class="nav-link';

if (isset($fe93a43f53d92a4e)) {
	goto label963;
}

echo ' active';

label963:

echo '">' . "\n" . '                                                            Quick Search' . "\n" . '                                                        </a>' . "\n" . '                                                    </li>' . "\n" . '                                                    <li class="nav-item">' . "\n" . '                                                        <a href="#xui-epg" id="tab-xui-epg" data-toggle="tab" aria-expanded="true" class="nav-link';
goto label1398;

label965:

echo '" />' . "\n\t\t\t\t\t\t\t";

label966:

echo "\t\t\t\t\t\t\t" . '<input type="hidden" name="server_tree_data" id="server_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="od_tree_data" id="od_tree_data" value="" />' . "\n" . '                            <input type="hidden" name="epg_api" id="epg_api" value="';
echo isset($fe93a43f53d92a4e) ? $fe93a43f53d92a4e['epg_api'] : 0;
echo '" />' . "\n" . '                            <input type="hidden" name="external_push" id="external_push" value="" />' . "\n" . '                            <input type="hidden" name="bouquet_create_list" id="bouquet_create_list" value="" />' . "\n" . '                            <input type="hidden" name="category_create_list" id="category_create_list" value="" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#stream-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    ';
goto label61;

label976:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<!--<a onClick="toggleCapture();" class="btn btn-info btn-pointer">Toggle Mode</a>-->' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary nextb">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n" . '                                    </div>' . "\n" . '                                    ';

label977:

echo "\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-options">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="gen_timestamps">Generate PTS <i title="Allow FFmpeg to generate presentation timestamps for you to achieve better synchronization with the stream codecs. In some streams this can cause de-sync." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="gen_timestamps" id="gen_timestamps" type="checkbox" ';

if (isset($fe93a43f53d92a4e)) {
	goto label944;
}

goto label942;

label982:

echo ' active';

label983:

echo '">' . "\n" . '                                                            XMLTV EPG' . "\n" . '                                                        </a>' . "\n" . '                                                    </li>' . "\n" . '                                                </ul>' . "\n" . '                                                <div class="tab-content" style="padding-top: 30px;">' . "\n" . '                                                    <div class="tab-pane';

if (isset($fe93a43f53d92a4e)) {
	goto label646;
}

echo ' active';
goto label646;

label989:

echo $fe93a43f53d92a4e['stream_display_name'];

label991:

echo '</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form';

if (!isset(XUI::$rRequest['import'])) {
	goto label847;
}

echo ' enctype="multipart/form-data"';
goto label847;

label999:

if (isset($A508fa583604eb49[17])) {
	goto label1009;
}

echo htmlspecialchars($b5337d8a535cf6dd['cookie']['argument_default_value']);
goto label277;

label1009:

echo htmlspecialchars($A508fa583604eb49[17]['value']);
goto label277;

label1016:

echo '</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restart_on_edit" id="restart_on_edit" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                            <li class="list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="submit_stream" type="submit" class="btn btn-primary" value="Save" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label1416;

label1018:

echo ' active';

label1019:

echo '" id="xmltv-epg">' . "\n" . '                                                        <div class="form-group row mb-4">' . "\n" . '                                                            <label class="col-md-4 col-form-label" for="epg_id">EPG Source</label>' . "\n" . '                                                            <div class="col-md-8">' . "\n" . '                                                                <select name="epg_id" id="epg_id" class="form-control" data-toggle="select2">' . "\n" . '                                                                    <option ';

if (!isset($fe93a43f53d92a4e)) {
	goto label11;
}

if (!(intval($fe93a43f53d92a4e['epg_id']) == 0)) {
	goto label11;
}

goto label10;

label1033:

echo intval($fe93a43f53d92a4e['epg_offset']) ?: 0;

label1040:

echo '" required data-parsley-trigger="change">' . "\n" . '                                                            </div>' . "\n" . '                                                        </div>' . "\n" . '                                                    </div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="rtmp-push">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-9 col-form-label" for="rtmp_output">Output RTMP <i title="Feed stream to the RTMP server for output to RTMP clients." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-3">' . "\n" . '                                                        <input name="rtmp_output" id="rtmp_output" type="checkbox" ';

if (!isset($fe93a43f53d92a4e)) {
	goto label295;
}

goto label289;

label1046:

echo '                                                                </select>' . "\n" . '                                                            </div>' . "\n" . '                                                        </div>' . "\n" . '                                                        <div class="form-group row mb-4">' . "\n" . '                                                            <label class="col-md-4 col-form-label" for="channel_id">EPG Channel ID</label>' . "\n" . '                                                            <div class="col-md-8">' . "\n" . '                                                                <select name="channel_id" id="channel_id" class="form-control" data-toggle="select2">' . "\n" . '                                                                ';

if (!isset($fe93a43f53d92a4e)) {
	goto label791;
}

foreach (json_decode($ac2f0b1c3a4502f1[intval($fe93a43f53d92a4e['epg_id'])]['data'], true) as $Bb672d1983256a93 => $a6ad94a54909ecf2) {
	echo '                                                                    <option value="';
	echo $Bb672d1983256a93;
	echo '"';

	if (!($fe93a43f53d92a4e['channel_id'] == $Bb672d1983256a93)) {
		goto label1074;
	}

	echo ' selected';

	label1074:

	echo '>';
	echo $a6ad94a54909ecf2['display_name'];
	echo '</option>' . "\n" . '                                                                    ';
}

goto label791;

label1081:

echo '                                                        </select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="title_sync">Sync Title <i title="Synchronise stream title with a provider stream. You need to add your strema providers to XUI in order for this to work, the title will be updated every time the cron runs." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-7">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="title_sync" name="title_sync" class="form-control" data-toggle="select2">' . "\n" . '                                                            ';

if (!isset($fe93a43f53d92a4e['title_sync'])) {
	goto label581;
}

list($A49cd9d2bf9ab4f1, $c97f2fac0a624e3b) = array_map('intval', explode('_', $fe93a43f53d92a4e['title_sync']));
$b62d6460eb33ea07->query('SELECT `stream_display_name` FROM `providers_streams` WHERE `provider_id` = ? AND `stream_id` = ?;', $A49cd9d2bf9ab4f1, $c97f2fac0a624e3b);
goto label563;

label1106:

if (!isset($fe93a43f53d92a4e)) {
	goto label1116;
}

if (!($fe93a43f53d92a4e['direct_proxy'] == 1)) {
	goto label1116;
}

echo 'checked ';

label1116:

goto label1157;

label1117:

echo 'Start Stream Now';
goto label1120;

label1119:

echo 'Restart on Edit';

label1120:

goto label1016;

label1121:

$F6edd90960a3bd9d = 'Stream';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
goto label1307;

label1125:

echo '                                                                </select>' . "\n" . '                                                            </div>' . "\n" . '                                                            <label class="col-md-2 col-form-label" for="epg_offset">Minute Offset</label>' . "\n" . '                                                            <div class="col-md-2">' . "\n" . '                                                                <input type="text" class="form-control text-center" id="epg_offset" name="epg_offset" value="';

if (isset($fe93a43f53d92a4e)) {
	goto label1033;
}

echo '0';
goto label1040;
goto label1033;

label1132:

if (!isset(XUI::$rRequest['id'])) {
	goto label882;
}
if (!(isset(XUI::$rRequest['import']) || !e589a4Bf54a2Dad1('adv', 'edit_stream'))) {
	goto label1150;
}

exit();

label1150:

$fe93a43f53d92a4e = F260b7a31F021E39(XUI::$rRequest['id']);
goto label872;

label1157:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

if (!isset(XUI::$rRequest['import'])) {
	goto label1164;
}

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="add_source_as_backup">Add Source as Backup <i title="If an identical stream name is found, or the XMLTV ID matches an existing stream, the source will be added as a backup. The existing stream options will be kept." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="add_source_as_backup" id="add_source_as_backup" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="update_existing">Update Existing <i title="If the source exists, overwrite it with the new title and stream options." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="update_existing" id="update_existing" type="checkbox" data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label1164:

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="fps_restart">Restart on FPS Drop <i title="Enable restart on FPS drop, set the threshold accordingly." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="fps_restart" id="fps_restart" type="checkbox" ';
goto label472;

label1166:

$b5337d8a535cf6dd = B20D33B2749AdFEc();
$Cf9848d22b37a744 = f93E9343c3d7fD99();
$Cc9b6078c1293a96 = [];
$B1e0cd85c78d12b4 = [
	[]
];

foreach ($ac2f0b1c3a4502f1 as $a2ebb817d88c810b) {
	$B1e0cd85c78d12b4[$a2ebb817d88c810b['id']] = json_decode($a2ebb817d88c810b['data'], true);
}

goto label856;

label1187:

if (isset($fe93a43f53d92a4e)) {
	goto label657;
}

if (E589a4bf54a2daD1('adv', 'add_stream')) {
	goto label1197;
}

exit();

label1197:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	$E23b1ca1f188e5ac[] = [
		'id'     => $Ec379295dc7029e6['id'],
		'parent' => 'offline',
		'text'   => $Ec379295dc7029e6['server_name'],
		'icon'   => 'mdi mdi-server-network',
		'state'  => ['opened' => true]
	];
}

goto label656;

label1211:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="category_id">Categories</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n" . '                                                        <select name="category_id[]" id="category_id" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F769e3f0C739d1A6('live') as $Dbcac322b4274e46) {
	goto label1227;

	label1219:

	echo 'value="';
	echo $Dbcac322b4274e46['id'];
	echo '">';
	echo $Dbcac322b4274e46['category_name'];
	goto label1253;

	label1227:

	echo '                                                            <option ';

	if (!isset($fe93a43f53d92a4e)) {
		goto label1219;
	}

	if (!in_array(intval($Dbcac322b4274e46['id']), json_decode($fe93a43f53d92a4e['category_id'], true))) {
		goto label1251;
	}

	echo 'selected ';

	label1251:

	goto label1219;

	label1253:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label1256;

	label1256:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n" . '                                                        <div id="category_create" class="alert bg-dark text-white border-0 mt-2 mb-0" role="alert" style="display: none;">' . "\n" . '                                                            <strong>New Categories:</strong> <span id="category_new"></span>' . "\n" . '                                                        </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="bouquets">Bouquets</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="bouquets[]" id="bouquets" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (F964b9222b35addD() as $f155fef57262b32a) {
	goto label1276;

	label1265:

	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label1299;

	label1268:

	echo 'value="';
	echo $f155fef57262b32a['id'];
	echo '">';
	echo $f155fef57262b32a['bouquet_name'];
	goto label1265;

	label1276:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!isset($fe93a43f53d92a4e)) {
		goto label1268;
	}

	if (!in_array($fe93a43f53d92a4e['id'], json_decode($f155fef57262b32a['bouquet_channels'], true))) {
		goto label1297;
	}

	echo 'selected ';

	label1297:

	goto label1268;

	label1299:
}

goto label836;

label1302:

if ($e8d6a476285e9da1) {
	goto label1305;
}

$e8d6a476285e9da1 = [
	['']
];

label1305:

$df6991d59f367c7e = 0;
goto label99;

label1307:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1322;
}

echo ' style="display: none;"';

label1322:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
goto label227;

label1325:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="days_to_restart" name="days_to_restart[]" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $ad246beea4e2bbaa) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $ad246beea4e2bbaa;
	echo '"';

	if (!in_array($ad246beea4e2bbaa, $f1b1f15f38dab369['days'])) {
		goto label1341;
	}

	echo ' selected';

	label1341:

	echo '>';
	echo $ad246beea4e2bbaa;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input id="time_to_restart" name="time_to_restart" type="text" class="form-control text-center" value="';
echo $f1b1f15f38dab369['at'];
goto label491;

label1350:

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';
	if (!(isset($fe93a43f53d92a4e) && in_array($Ec379295dc7029e6['id'], $Cc9b6078c1293a96))) {
		goto label1369;
	}

	echo ' selected';

	label1369:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="llod">Low Latency On-Demand <i title="<strong>LLOD v2 - FFMPEG</strong><br/>The first source is selected without probing and passed directly to FFMPEG for processing. If the first source is down, the stream will not start.<br/><br/>LLOD v3 - PHP<br/>A bespoke segment parser developed by XUI.one to take incoming MPEG-TS streams and identify keyframes in order to segment the stream to deliver back to the client. Very fast, still experimental however. This method doesn\'t suffer from issues such as lost audio as ffmpeg isn\'t involved at all but does not support anything but MPEG-TS sources." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="llod" id="llod" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Disabled', 'LLOD v2 - FFMPEG', 'LLOD v3 - PHP'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $ce0840c647e1bbc7;
	echo '"';
	if (!(isset($fe93a43f53d92a4e) && ($fe93a43f53d92a4e['llod'] == $ce0840c647e1bbc7))) {
		goto label1392;
	}

	echo ' selected';

	label1392:

	echo '>';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label146;

label1398:
if (!(isset($fe93a43f53d92a4e) && $fe93a43f53d92a4e['epg_api'])) {
	goto label1406;
}

echo ' active';

label1406:

echo '">' . "\n" . '                                                            XUI EPG' . "\n" . '                                                        </a>' . "\n" . '                                                    </li>' . "\n" . '                                                    <li class="nav-item">' . "\n" . '                                                        <a href="#xmltv-epg" id="tab-xml-epg" data-toggle="tab" aria-expanded="false" class="nav-link';
if (!(isset($fe93a43f53d92a4e) && !$fe93a43f53d92a4e['epg_api'])) {
	goto label983;
}

goto label982;

label1416:

include 'footer.php';

?>