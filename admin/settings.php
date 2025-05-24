<?php


goto label448;

label1:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="epg_api_days_fetch">Days to Fetch <i title="How many days to fetch when grabbing EPG data." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="epg_api_days_fetch" name="epg_api_days_fetch" value="';
echo intval($f1dcaed925076e67['epg_api_days_fetch']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="epg_api_days_keep">Days to Keep <i title="How many days to keep when storing EPG data." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="epg_api_days_keep" name="epg_api_days_keep" value="';
echo intval($f1dcaed925076e67['epg_api_days_keep']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">API Services</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allowed_ips_admin">Admin Streaming IP\'s <i title="Allowed IP\'s to access streaming using the Live Streaming Pass. Separate each IP with a comma." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="allowed_ips_admin" name="allowed_ips_admin" value="';
goto label1337;

label15:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="case_sensitive_line">Case Sensitive Lines <i title="Case sensitive username and password." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="case_sensitive_line" id="case_sensitive_line" type="checkbox"';

if (!($f1dcaed925076e67['case_sensitive_line'] == 1)) {
	goto label22;
}

echo ' checked ';

label22:

goto label1724;

label23:

if (!($f1dcaed925076e67['enable_isp_lock'] == 1)) {
	goto label29;
}

echo ' checked ';

label29:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="block_svp">Enable ASN Lock <i title="Enable / Disable ASN lock globally." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="block_svp" id="block_svp" type="checkbox"';

if (!($f1dcaed925076e67['block_svp'] == 1)) {
	goto label526;
}

goto label525;

label36:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="kill_rogue_ffmpeg">Kill Rogue FFMPEG PID\'s <i title="When enabled, ffmpeg PID\'s will be scanned every minute for streams that shouldn\'t be live and killed accordingly. This will also run when starting a stream to ensure any running instances are sufficiently removed." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="kill_rogue_ffmpeg" id="kill_rogue_ffmpeg" type="checkbox"';

if (!($f1dcaed925076e67['kill_rogue_ffmpeg'] == 1)) {
	goto label43;
}

echo ' checked ';

label43:

goto label1364;

label44:

foreach ([0 => 'Forever', 3600 => '1 Hour', 21600 => '6 Hours', 43200 => '12 Hours', 86400 => '1 Day', 259200 => '3 Days', 604800 => '7 Days', 1209600 => '14 Days', 16934400 => '28 Days', 15552000 => '180 Days', 31536000 => '365 Days'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['keep_activity'] == $ce0840c647e1bbc7)) {
		goto label55;
	}

	echo 'selected ';

	label55:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="client_logs_save">Client Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="client_logs_save" id="client_logs_save" type="checkbox"';

if (!($f1dcaed925076e67['client_logs_save'] == 1)) {
	goto label1234;
}

echo ' checked ';
goto label1234;

label70:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">Segment Settings</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="seg_time">Segment Duration <i title="Duration of individual segments when using HLS. This cannot be guaranteed due to keyframes, but should work on most streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="seg_time" name="seg_time" value="';
echo htmlspecialchars($f1dcaed925076e67['seg_time']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="seg_list_size">List Size <i title="Number of segments in the HLS playlist." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="seg_list_size" name="seg_list_size" value="';
echo htmlspecialchars($f1dcaed925076e67['seg_list_size']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="seg_delete_threshold">Delete Threshold <i title="How many old segments to keep when generating HLS playlist. Lowering this will lower RAM usage but it\'s good to keep a buffer for connecting clients. A 30 second prebuffer for example would need 3 x 10 second segments to work." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="seg_delete_threshold" name="seg_delete_threshold" value="';
goto label1149;

label84:

echo ' checked ';

label85:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allowed_stb_types">Allowed STB Types</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="allowed_stb_types[]" id="allowed_stb_types" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (json_decode($f1dcaed925076e67['allowed_stb_types'], true) as $b49a83639cb5905a) {
	echo '                                                            <option selected value="';
	echo $b49a83639cb5905a;
	echo '">';
	echo $b49a83639cb5905a;
	echo '</option>' . "\n" . '                                                            ';
}

goto label1558;

label101:

echo '"><strong>XUI Forum</strong></a> for instructions on how to update.</p>' . "\n\t\t\t\t\t\t\t";

foreach ($B8630a7c92543099['changelog'] as $B4a603c2a57d3acf) {
	echo "\t\t\t\t\t\t\t" . '<h5 class="card-title text-white mt-4">Changelog - v';
	echo $B4a603c2a57d3acf['version'] . ($B4a603c2a57d3acf['revision'] ? ' R' . intval($B4a603c2a57d3acf['revision']) : '');
	echo '</h5>' . "\n\t\t\t\t\t\t\t" . '<ul>';

	foreach ($B4a603c2a57d3acf['changes'] as $b95cf91e07bff7a1) {
		echo "\t\t\t\t\t\t\t\t" . '<li>';
		echo $b95cf91e07bff7a1;
		echo '</li>' . "\n\t\t\t\t\t\t\t";
	}

	echo '</ul>' . "\n\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t" . '<br/><a href="';
echo str_replace('"', '\\"', $B8630a7c92543099['url']);
goto label205;

label140:

echo htmlspecialchars($f1dcaed925076e67['on_demand_wait_time']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="request_prebuffer">Request Prebuffer <i title="When you request a stream on-demand, ask the provider to send a prebuffer so the stream starts quicker. This will only work if your provider is using XUI. The prebuffer will mean your source could be 10 seconds or so behind, but it will load significantly quicker.<br/><br/>On - URL means automatically append ?prebuffer=1 to the URL, On - Header sends the prebuffer request as a header instead. Header requests are only accepted when requesting from XUI v1.4.4+" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n" . '                                                        <input name="request_prebuffer" id="request_prebuffer" type="checkbox"';

if (!($f1dcaed925076e67['request_prebuffer'] == 1)) {
	goto label152;
}

echo ' checked ';

label152:

goto label1056;

label153:

echo ' checked ';

label154:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="mag_container">Default Container</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="mag_container" id="mag_container" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['ts' => 'TS', 'm3u8' => 'M3U8'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['mag_container'] == $ce0840c647e1bbc7)) {
		goto label166;
	}

	echo 'selected ';

	label166:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1451;

label174:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="allow_cdn_access">Allow CDN / Forwarding <i title="Allow X-Forwarded-For to forward the correct IP to XUI and turn off path encryption in favour of token based encryption when streaming.<br/>To set up allowed IP\'s for forwarding, follow the CDN setup tutorial on the Billing Panel. Advanced usage only." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="allow_cdn_access" id="allow_cdn_access" type="checkbox"';

if (!($f1dcaed925076e67['allow_cdn_access'] == 1)) {
	goto label181;
}

echo ' checked ';

label181:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="stop_failures">Max Failures <i title="How many failures before exiting stream monitor. For example, if set to 3 then the stream monitor will allow 3 failures, break, then the monitor will be restarted by the streams Cron at the next minute marker. If set to 0 streams will continue to restart forever." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="stop_failures" name="stop_failures" value="';
goto label214;

label183:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="expired_video_path" name="expired_video_path" value="';
echo htmlspecialchars($f1dcaed925076e67['expired_video_path']);
echo '" placeholder="Leave blank to use default XUI video.">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_expiring_video">Expiring Video <i title="Show this video once per day 7 days prior to a line expiring." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_expiring_video" id="show_expiring_video" type="checkbox"';

if (!($f1dcaed925076e67['show_expiring_video'] == 1)) {
	goto label1813;
}

goto label1812;

label196:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="php_loopback">Loopback Streams via PHP <i title="Don\'t use FFMPEG to handle loopback streams, have PHP read them directly and generate HLS." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="php_loopback" id="php_loopback" type="checkbox"';

if (!($f1dcaed925076e67['php_loopback'] == 1)) {
	goto label203;
}

echo ' checked ';

label203:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <h5 class="card-title mb-4">Stream Monitor Settings</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="audio_restart_loss">Restart on Audio Loss <i title="Restart stream periodically if no audio is detected." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="audio_restart_loss" id="audio_restart_loss" type="checkbox"';
goto label695;

label205:

echo '" class="text-white font-weight-semibold text-uppercase">Go to Release Thread <i class="mdi mdi-arrow-right"></i></a>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t";

label206:

echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#interface" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">General</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#security" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi mdi-shield-lock mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Security</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#api" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-code-tags mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">API</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#streaming" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-play mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Streaming</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#mag" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-tablet mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">MAG</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#webplayer" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-web mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Web Player</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#logs" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-file-document-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Logs</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="interface">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title mb-4">Preferences</h5>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_name">Server Name <i title="The name of your streaming service." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="server_name" name="server_name" value="';
echo htmlspecialchars($f1dcaed925076e67['server_name']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="default_timezone">Server Timezone <i title="Default timezone for the Admin & Reseller Interface, this will be the default for all users unless they change their profile timezone." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="default_timezone" id="default_timezone" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label1669;

label214:

echo htmlspecialchars($f1dcaed925076e67['stop_failures']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">On-Demand Settings</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="on_demand_instant_off">Instant Off <i title="When a client disconnects from an on-demand stream, check the current total connections for that stream and turn it off if nobody is watching." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="on_demand_instant_off" id="on_demand_instant_off" type="checkbox"';

if (!($f1dcaed925076e67['on_demand_instant_off'] == 1)) {
	goto label226;
}

echo ' checked ';

label226:

goto label843;

label227:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="ip_logout">Logout On IP Change <i title="Enable to destroy sessions if the IP changes during use, this will safeguard you from cookie attacks." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ip_logout" id="ip_logout" type="checkbox"';

if (!($f1dcaed925076e67['ip_logout'] == 1)) {
	goto label234;
}

echo ' checked ';

label234:

goto label1190;

label235:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="cleanup">Auto-Cleanup Files <i title="Automatically clean up redundant files in the background. Recommended." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="cleanup" id="cleanup" type="checkbox"';

if (!($f1dcaed925076e67['cleanup'] == 1)) {
	goto label242;
}

echo ' checked ';

label242:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="check_vod">Check VOD Cron <i title="Check that VOD exists periodically, if not set it to not-encoded. Not recommended if you have a lot of VOD." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="check_vod" id="check_vod" type="checkbox"';
goto label613;

label244:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="dashboard_display_alt">Alternate Server View <i title="Display servers on the dashboard with an alternate layout, wide vs square layout." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="dashboard_display_alt" id="dashboard_display_alt" type="checkbox"';

if (!($f1dcaed925076e67['dashboard_display_alt'] == 1)) {
	goto label251;
}

echo ' checked ';

label251:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="header_stats_sh">Show Header Stats <i title="Show server statistics in header menu." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="header_stats" id="header_stats_sh" type="checkbox"';
goto label777;

label253:

echo htmlspecialchars($f1dcaed925076e67['auth_flood_limit']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="auth_flood_seconds">Auth Flood Seconds <i title="Number of seconds to calculate number of requests for." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="auth_flood_seconds" name="auth_flood_seconds" value="';
echo htmlspecialchars($f1dcaed925076e67['auth_flood_seconds']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="auth_flood_sleep">Auth Flood Sleep <i title="How long to sleep for when when the limit has been reached. The request will continue after this sleep." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="auth_flood_sleep" name="auth_flood_sleep" value="';
echo htmlspecialchars($f1dcaed925076e67['auth_flood_sleep']);
goto label308;

label271:

if (!($f1dcaed925076e67['enable_connection_problem_indication'] == 1)) {
	goto label277;
}

echo ' checked ';

label277:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_tv_channel_logo">Show Channel Logos</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_tv_channel_logo" id="show_tv_channel_logo" type="checkbox"';

if (!($f1dcaed925076e67['show_tv_channel_logo'] == 1)) {
	goto label1463;
}

goto label1462;

label284:

echo htmlspecialchars($f1dcaed925076e67['bruteforce_username_attempts']) ?: 0;
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="bruteforce_frequency">Bruteforce Frequency <i title="Time between attempts for MAC and Username bruteforce. X attempts per X seconds." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="bruteforce_frequency" name="bruteforce_frequency" value="';
echo htmlspecialchars($f1dcaed925076e67['bruteforce_frequency']) ?: 0;
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="login_flood">Maximum Login Attempts <i title="How many login attempts are permitted before banning IP address. Use 0 for unlimited, or if you have other measures in place such as reCAPTCHA or access code." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="login_flood" name="login_flood" value="';
echo htmlspecialchars($f1dcaed925076e67['login_flood']) ?: 0;
goto label1167;

label308:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="flood_ips_exclude">Flood IP Exclusions <i title="Separate each IP with a comma." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="flood_ips_exclude" name="flood_ips_exclude" value="';
echo htmlspecialchars($f1dcaed925076e67['flood_ips_exclude']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="bruteforce_mac_attempts">Detect MAC Bruteforce <i title="Automatically detect and block IP addresses trying to bruteforce MAG / Enigma devices. Enter 0 attempts to disable." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="bruteforce_mac_attempts" name="bruteforce_mac_attempts" value="';
echo htmlspecialchars($f1dcaed925076e67['bruteforce_mac_attempts']) ?: 0;
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="bruteforce_username_attempts">Detect Username Bruteforce <i title="Automatically detect and block IP addresses trying to bruteforce lines. Enter 0 attempts to disable." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="bruteforce_username_attempts" name="bruteforce_username_attempts" value="';
goto label284;

label324:

$f1dcaed925076e67 = CdbE6BC7B26c4902();
$b5337d8a535cf6dd = b20D33b2749ADfec();
$F6edd90960a3bd9d = 'Settings';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
goto label1124;

label334:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="read_buffer_size">Read Buffer Size <i title="Amount of buffer to use when reading files in chunks." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="read_buffer_size" name="read_buffer_size" value="';
echo htmlspecialchars($f1dcaed925076e67['read_buffer_size']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="connection_sync_timer">Redis Connection Sync Timer <i title="Time between runs of the Redis Connection Sync script." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="connection_sync_timer" name="connection_sync_timer" value="';
echo htmlspecialchars($f1dcaed925076e67['connection_sync_timer']);
goto label174;

label347:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="playback_limit">Playback Limit <i title="Show warning message and stop stream after X hours of continuous playback." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="playback_limit" name="playback_limit" value="';
echo htmlspecialchars($f1dcaed925076e67['playback_limit']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="tv_channel_default_aspect">Default Aspect Ratio <i title="Set the default aspect ratio of streams. Fit being the recommended option." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="tv_channel_default_aspect" id="tv_channel_default_aspect" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['fit', 'big', 'opt', 'exp', 'cmb'] as $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['tv_channel_default_aspect'] == $ce0840c647e1bbc7)) {
		goto label364;
	}

	echo 'selected ';

	label364:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $ce0840c647e1bbc7;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1103;

label372:

echo ' checked ';

label373:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="group_buttons">Group Buttons <i title="Group action buttons into a drop-down list on compatible pages." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="group_buttons" id="group_buttons" type="checkbox"';

if (!($f1dcaed925076e67['group_buttons'] == 1)) {
	goto label1074;
}

echo ' checked ';
goto label1074;

label381:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="auto_send_logs">Auto-Send Logs to XUI <i title="Sends panel error logs automatically to be parsed and verified by the XUI team." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="auto_send_logs" id="auto_send_logs" type="checkbox"';

if (!($f1dcaed925076e67['auto_send_logs'] == 1)) {
	goto label388;
}

echo ' checked ';

label388:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">reCAPTCHA</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label">Enable reCAPTCHA <i title="Click here to show active domains for your servers and resellers that you should consider adding to reCAPTCHA." class="tooltip text-secondary far fa-circle" data-toggle="modal" data-target=".bs-domains"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="recaptcha_enable" id="recaptcha_enable" type="checkbox"';
goto label852;

label390:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div> -->' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="message_of_day">Message of the Day <i title="Message to show in the player API. Used by some android apps." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="message_of_day" name="message_of_day" value="';
echo htmlspecialchars($f1dcaed925076e67['message_of_day']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="default_entries">Show Entries <i title="Number of table entries to show by default in the Admin & Reseller Interface." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="default_entries" id="default_entries" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo '    ' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label407;
	}

	echo ' selected';

	label407:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1391;

label415:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_ts_allow_restream">Allow Restreamers - MPEG-TS <i title="Override to allow restreamers to still use MPEG-TS while it is disabled." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_ts_allow_restream" id="disable_ts_allow_restream" type="checkbox"';

if (!($f1dcaed925076e67['disable_ts_allow_restream'] == 1)) {
	goto label422;
}

echo ' checked ';

label422:

goto label652;

label423:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="probesize">Probe Size <i title="Amount of data to be probed in bytes." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="probesize" name="probesize" value="';
echo htmlspecialchars($f1dcaed925076e67['probesize']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ffmpeg_cpu">FFMPEG Version <i title="Which version of FFMPEG to use for movies, created channels and normal streams.<br/><br/>v4.0 - Legacy version from 2018, shipped with XUI originally.<br/>v4.3.2 & v4.4 compiled by XUI.one with all libraries from v4.0 plus many more. Compatible with DASH and NVENC." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="ffmpeg_cpu" id="ffmpeg_cpu" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['4.4', '4.3', '4.0'] as $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['ffmpeg_cpu'] == $ce0840c647e1bbc7)) {
		goto label440;
	}

	echo 'selected ';

	label440:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">v';
	echo $ce0840c647e1bbc7;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1821;

label448:

include 'session.php';
include 'functions.php';

if (e6d500e19634d513()) {
	goto label456;
}

e72f42A93714BA87();

label456:

goto label324;

label457:

echo intval($f1dcaed925076e67['player_opacity']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="extract_subtitles">Extract Subtitles <i title="Automatically extract subtitles from movies and episodes while they\'re being processed. Allows for subtitles to be used in Web Player." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="extract_subtitles" id="extract_subtitles" type="checkbox"';

if (!($f1dcaed925076e67['extract_subtitles'] == 1)) {
	goto label469;
}

echo ' checked ';

label469:

goto label1873;

label470:

echo htmlspecialchars($f1dcaed925076e67['not_on_air_video_path']);
echo '" placeholder="Leave blank to use default XUI video.">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_banned_video">Banned Video <i title="Show this video when a banned line accesses a stream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_banned_video" id="show_banned_video" type="checkbox"';

if (!($f1dcaed925076e67['show_banned_video'] == 1)) {
	goto label482;
}

echo ' checked ';

label482:

goto label737;

label483:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="disable_player_api">Disable Player API <i title="Enable to stop Android Apps / Smart TV\'s from accessing the API." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_player_api" id="disable_player_api" type="checkbox"';

if (!($f1dcaed925076e67['disable_player_api'] == 1)) {
	goto label490;
}

echo ' checked ';

label490:

goto label865;

label491:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="search_items">Number of Items <i title="How many search results to display. Maximum of 100." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="search_items" name="search_items" value="';
echo intval($f1dcaed925076e67['search_items']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">Reseller</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_trial">Disable Trials <i title="Use this option to temporarily disable generating trials for all lines." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_trial" id="disable_trial" type="checkbox"';

if (!($f1dcaed925076e67['disable_trial'] == 1)) {
	goto label605;
}

goto label604;

label504:

echo ' checked ';

label505:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="keep_restarts">Keep Logs For</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="keep_restarts" id="keep_restarts" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([0 => 'Forever', 3600 => '1 Hour', 21600 => '6 Hours', 43200 => '12 Hours', 86400 => '1 Day', 259200 => '3 Days', 604800 => '7 Days', 1209600 => '14 Days', 16934400 => '28 Days', 15552000 => '180 Days', 31536000 => '365 Days'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['keep_restarts'] == $ce0840c647e1bbc7)) {
		goto label517;
	}

	echo 'selected ';

	label517:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1460;

label525:

echo ' checked ';

label526:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_ts">Disable MPEG-TS Output <i title="Disable MPEG-TS for all clients and devices." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_ts" id="disable_ts" type="checkbox"';

if (!($f1dcaed925076e67['disable_ts'] == 1)) {
	goto label415;
}

echo ' checked ';
goto label415;

label534:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="legacy_xmltv">Legacy XMLTV URL <i title="Rewrite xmltv.php requests to the new epg URL." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="legacy_xmltv" id="legacy_xmltv" type="checkbox"';

if (!($f1dcaed925076e67['legacy_xmltv'] == 1)) {
	goto label541;
}

echo ' checked ';

label541:

goto label931;

label542:

echo ' value="maxclients">Max Clients</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

if (!($f1dcaed925076e67['split_by'] == 'guar_band')) {
	goto label549;
}

echo ' selected';

label549:

echo ' value="guar_band">Network Speed</option>' . "\n" . '                                                            <option';
goto label918;

label551:

echo ' checked ';

label552:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="restart_php_fpm">Auto-Restart Crashed PHP-FPM <i title="Run a cron that restarts PHP-FPM if it crashes and errors are found." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restart_php_fpm" id="restart_php_fpm" type="checkbox"';

if (!($f1dcaed925076e67['restart_php_fpm'] == 1)) {
	goto label36;
}

echo ' checked ';
goto label36;

label560:

echo ' checked ';

label561:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="probe_extra_wait">Probe Duration <i title="How long to wait after analyze duration before cancelling stream probe." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="probe_extra_wait" name="probe_extra_wait" value="';
echo htmlspecialchars($f1dcaed925076e67['probe_extra_wait']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="stream_fail_sleep">Stream Failure Sleep <i title="How long to wait in seconds after a stream start failure before starting again." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="stream_fail_sleep" name="stream_fail_sleep" value="';
goto label803;

label569:

foreach (['default' => 'Default', 'digital' => 'Digital', 'emerald' => 'Emerald', 'cappucino' => 'Cappucino', 'ocean_blue' => 'Ocean Blue'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['stalker_theme'] == $ce0840c647e1bbc7)) {
		goto label580;
	}

	echo 'selected ';

	label580:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="mag_legacy_redirect">Legacy URL Redirect <i title="Redirect /c to Ministra folder using symlinks. This will allow legacy devices to access the Ministra portal using the old address, however it isn\'t recommended for security purposes. Root access is required so this will action within the next minute during the cron run." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="mag_legacy_redirect" id="mag_legacy_redirect" type="checkbox"';

if (!($f1dcaed925076e67['mag_legacy_redirect'] == 1)) {
	goto label687;
}

echo ' checked ';
goto label687;

label595:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="mag_disable_ssl">Disable SSL <i title="Force MAG\'s to use non-SSL URL\'s, you should think about removing support for old MAG devices that don\'t support newer SSL protocols rather than disabling this." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="mag_disable_ssl" id="mag_disable_ssl" type="checkbox"';

if (!($f1dcaed925076e67['mag_disable_ssl'] == 1)) {
	goto label602;
}

echo ' checked ';

label602:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="mag_load_all_channels">Load Channels on Startup <i title="Load all channel listings on startup instead of when selecting a category. This may be useful for some legacy devices that don\'t adhere to Ministra standards." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="mag_load_all_channels" id="mag_load_all_channels" type="checkbox"';
goto label1378;

label604:

echo ' checked ';

label605:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="reseller_ssl_domain">SSL Custom DNS <i title="Use HTTPS in playlist downloads if the main server has SSL on and the reseller has a custom DNS." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="reseller_ssl_domain" id="reseller_ssl_domain" type="checkbox"';

if (!($f1dcaed925076e67['reseller_ssl_domain'] == 1)) {
	goto label1026;
}

echo ' checked ';
goto label1026;

label613:

if (!($f1dcaed925076e67['check_vod'] == 1)) {
	goto label619;
}

echo ' checked ';

label619:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="show_images">Show Images & Picons <i title="Show channel logos and VOD images in the management pages." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_images" id="show_images" type="checkbox"';

if (!($f1dcaed925076e67['show_images'] == 1)) {
	goto label373;
}

goto label372;

label626:

if (!($f1dcaed925076e67['ignore_invalid_users'] == 1)) {
	goto label632;
}

echo ' checked ';

label632:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="client_prebuffer">Client Prebuffer <i title="How much data in seconds will be sent to the client when connecting to a stream. Larger values will create larger prebuffers." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="client_prebuffer" name="client_prebuffer" value="';
echo htmlspecialchars($f1dcaed925076e67['client_prebuffer']);
goto label1498;

label639:

if (!($f1dcaed925076e67['on_demand_checker'] == 1)) {
	goto label645;
}

echo ' checked ';

label645:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="on_demand_scan_time">Scan Time <i title="How often to scan a stream in seconds." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="on_demand_scan_time" name="on_demand_scan_time" value="';
echo htmlspecialchars($f1dcaed925076e67['on_demand_scan_time']);
goto label1905;

label652:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_hls">Disable HLS Output <i title="Disable HLS for all clients and devices." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_hls" id="disable_hls" type="checkbox"';

if (!($f1dcaed925076e67['disable_hls'] == 1)) {
	goto label659;
}

echo ' checked ';

label659:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_hls_allow_restream">Allow Restreamers - HLS <i title="Override to allow restreamers to still use HLS while it is disabled." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_hls_allow_restream" id="disable_hls_allow_restream" type="checkbox"';
goto label1416;

label661:

if (!($f1dcaed925076e67['vod_sort_newest'] == 1)) {
	goto label667;
}

echo ' checked ';

label667:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="use_buffer">Use Nginx Buffer <i title="Sets the proxy buffering for this connection. Setting this to “no” will allow unbuffered responses suitable for Comet and HTTP streaming applications. Setting this to “yes” will allow the response to be cached." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="use_buffer" id="use_buffer" type="checkbox"';

if (!($f1dcaed925076e67['use_buffer'] == 1)) {
	goto label1200;
}

goto label1199;

label674:

if (!($f1dcaed925076e67['streams_grouped'] == 1)) {
	goto label680;
}

echo ' checked ';

label680:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="js_navigate">Seamless Navigation <i title="Enable seamless navigation by utilising javascript to load pages. Turned off on mobile devices." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="js_navigate" id="js_navigate" type="checkbox"';

if (!($f1dcaed925076e67['js_navigate'] == 1)) {
	goto label1990;
}

goto label1989;

label687:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="mag_keep_extension">Keep URL Extension <i title="Keep extension of live streams, timeshift and VOD. Some older devices can\'t determine it for themselves and use the extension to select the playback method." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="mag_keep_extension" id="mag_keep_extension" type="checkbox"';

if (!($f1dcaed925076e67['mag_keep_extension'] == 1)) {
	goto label694;
}

echo ' checked ';

label694:

goto label595;

label695:

if (!($f1dcaed925076e67['audio_restart_loss'] == 1)) {
	goto label701;
}

echo ' checked ';

label701:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="priority_backup">Priority Backup <i title="Switch back to the first source if it is detected as working again." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="priority_backup" id="priority_backup" type="checkbox"';

if (!($f1dcaed925076e67['priority_backup'] == 1)) {
	goto label561;
}

goto label560;

label708:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="keep_protocol">Keep Request Protocol <i title="Keep the requested protocol (http or https) in playlists and streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="keep_protocol" id="keep_protocol" type="checkbox"';

if (!($f1dcaed925076e67['keep_protocol'] == 1)) {
	goto label715;
}

echo ' checked ';

label715:

goto label1847;

label716:

if (!($f1dcaed925076e67['disable_ministra'] == 1)) {
	goto label722;
}

echo ' checked ';

label722:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="verify_host">Verify Hosts <i title="Verify domain names and IP\'s against allowed hosts in the database. This will include server IP\'s, domains and reseller DNS\'s." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="verify_host" id="verify_host" type="checkbox"';

if (!($f1dcaed925076e67['verify_host'] == 1)) {
	goto label1297;
}

goto label1296;

label729:

echo ' value="bouquet_new">Bouquet</option>' . "\n" . '                                                            <option';

if (!($f1dcaed925076e67['channel_number_type'] == 'bouquet')) {
	goto label736;
}

echo ' selected';

label736:

goto label1255;

label737:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="banned_video_path" name="banned_video_path" value="';
echo htmlspecialchars($f1dcaed925076e67['banned_video_path']);
echo '" placeholder="Leave blank to use default XUI video.">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_expired_video">Expired Video <i title="Show this video when an expired line accesses a stream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_expired_video" id="show_expired_video" type="checkbox"';

if (!($f1dcaed925076e67['show_expired_video'] == 1)) {
	goto label183;
}

echo ' checked ';
goto label183;

label751:

if (!($f1dcaed925076e67['player_hide_incompatible'] == 1)) {
	goto label757;
}

echo ' checked ';

label757:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="player_allow_hevc">Mark HEVC as Compatible <i title="Mark HEVC as compatible, there are some browsers such as Edge and Safari that support HEVC, however most mainstream browsers such as Firefox and Chrome do not." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="player_allow_hevc" id="player_allow_hevc" type="checkbox"';

if (!($f1dcaed925076e67['player_allow_hevc'] == 1)) {
	goto label1048;
}

goto label1047;

label764:

if (!($f1dcaed925076e67['show_category_duplicates'] == 1)) {
	goto label770;
}

echo ' checked ';

label770:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <h5 class="card-title mb-4">EPG API</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="enable_epg_api">Enable EPG API <i title="Enable EPG API in the Admin interface." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_epg_api" id="enable_epg_api" type="checkbox"';

if (!($f1dcaed925076e67['enable_epg_api'] == 1)) {
	goto label1938;
}

goto label1937;

label777:

if (!($f1dcaed925076e67['header_stats'] == 1)) {
	goto label783;
}

echo ' checked ';

label783:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="dashboard_status">Show Service Status <i title="Show warning information based on server stats." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="dashboard_status" id="dashboard_status" type="checkbox"';

if (!($f1dcaed925076e67['dashboard_status'] == 1)) {
	goto label910;
}

goto label909;

label790:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="cache_playlists">Cache Playlists for <i title="If this value is more than 0, playlists downloaded by clients will be cached to file for that many seconds. This can use a lot of disk space if you have a lot of clients, however will save a lot of resources in execution time." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="cache_playlists" name="cache_playlists" value="';
echo intval($f1dcaed925076e67['cache_playlists']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="playlist_from_mysql">Grab Playlists from MySQL <i title="Enable this to read streams from MySQL instead of from the local cache. This may be faster when you have a significant amount of streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="playlist_from_mysql" id="playlist_from_mysql" type="checkbox"';

if (!($f1dcaed925076e67['playlist_from_mysql'] == 1)) {
	goto label1897;
}

goto label1896;

label803:

echo htmlspecialchars($f1dcaed925076e67['stream_fail_sleep']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="fps_delay">FPS Start Delay <i title="How long in seconds to wait before checking if FPS drops below threshold." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="fps_delay" name="fps_delay" value="';
echo htmlspecialchars($f1dcaed925076e67['fps_delay']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="fps_check_type">FPS Check Type <i title="Whether to use progress info after the start delay to determine real FPS or probe the segment to return avg_frame_rate." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="fps_check_type" id="fps_check_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Progress Info', 'avg_frame_rate'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['fps_check_type'] == $ce0840c647e1bbc7)) {
		goto label826;
	}

	echo 'selected ';

	label826:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1981;

label834:

echo ' checked ';

label835:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="encrypt_playlist">Encrypt Playlists <i title="Encrypt line credentials in playlist files." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="encrypt_playlist" id="encrypt_playlist" type="checkbox"';

if (!($f1dcaed925076e67['encrypt_playlist'] == 1)) {
	goto label1804;
}

echo ' checked ';
goto label1804;

label843:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="on_demand_failure_exit">Exit on Failure <i title="If an on-demand stream fails to start, do not retry, cancel the stream and disconnect the client. It will retry on the next connection but will ensure it doesn\'t sit forever trying to start and using source connections for example." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="on_demand_failure_exit" id="on_demand_failure_exit" type="checkbox"';

if (!($f1dcaed925076e67['on_demand_failure_exit'] == 1)) {
	goto label850;
}

echo ' checked ';

label850:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="on_demand_wait_time">Wait Timeout <i title="How long should the client wait for an on-demand stream to start. After this time has elapsed, the connection will close. This will also apply to normal streams while they\'re starting or not yet available." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="on_demand_wait_time" name="on_demand_wait_time" value="';
goto label140;

label852:

if (!($f1dcaed925076e67['recaptcha_enable'] == 1)) {
	goto label858;
}

echo ' checked ';

label858:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="recaptcha_v2_site_key">reCAPTCHA V2 - Site Key <i title="Please visit https://google.com/recaptcha/admin to obtain your API keys." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="recaptcha_v2_site_key" name="recaptcha_v2_site_key" value="';
echo htmlspecialchars($f1dcaed925076e67['recaptcha_v2_site_key']);
goto label2016;

label865:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_enigma2">Disable Enigma2 API <i title="Enable to stop Enigma devices from connecting." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_enigma2" id="disable_enigma2" type="checkbox"';

if (!($f1dcaed925076e67['disable_enigma2'] == 1)) {
	goto label872;
}

echo ' checked ';

label872:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_ministra">Disable Ministra API <i title="Enable to stop MAG devices from connecting." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_ministra" id="disable_ministra" type="checkbox"';
goto label716;

label874:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="keep_errors">Keep Logs For</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="keep_errors" id="keep_errors" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([0 => 'Forever', 3600 => '1 Hour', 21600 => '6 Hours', 43200 => '12 Hours', 86400 => '1 Day', 259200 => '3 Days', 604800 => '7 Days', 1209600 => '14 Days', 16934400 => '28 Days', 15552000 => '180 Days', 31536000 => '365 Days'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['keep_errors'] == $ce0840c647e1bbc7)) {
		goto label886;
	}

	echo 'selected ';

	label886:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="save_restart_logs">Stream Restart Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="save_restart_logs" id="save_restart_logs" type="checkbox"';

if (!($f1dcaed925076e67['save_restart_logs'] == 1)) {
	goto label505;
}

goto label504;

label900:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="restrict_playlists">Restrictions on Playlists & EPG <i title="Verify user-agent, IP restrictions, ISP and country restrictions before allowing playlist / EPG download. If disabled the playlist can be downloaded from any IP but restrictions still apply to streams themselves." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restrict_playlists" id="restrict_playlists" type="checkbox"';

if (!($f1dcaed925076e67['restrict_playlists'] == 1)) {
	goto label907;
}

echo ' checked ';

label907:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="ignore_invalid_users">Ignore Invalid Credentials <i title="Enabling this option will make authentication completely ignore a connection if the username and password are incorrect, this means the flood limit won\'t activate but will also quickly close an invalid connection much faster without loading any XUI functions or classes. If you have a lot of throughput, enabling this may save you some CPU usage." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ignore_invalid_users" id="ignore_invalid_users" type="checkbox"';
goto label626;

label909:

echo ' checked ';

label910:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="threshold_cpu">CPU Threshold % <i title="When CPU usage is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="threshold_cpu" name="threshold_cpu" value="';
echo intval($f1dcaed925076e67['threshold_cpu']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="threshold_mem">Memory Threshold % <i title="When memory usage is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="threshold_mem" name="threshold_mem" value="';
goto label1772;

label918:

if (!($f1dcaed925076e67['split_by'] == 'band')) {
	goto label924;
}

echo ' selected';

label924:

echo ' value="band">Detected Network Speed</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="restreamer_bypass_proxy">Restreamer Bypass Proxy <i title="Route restreamers directly to load balancers instead of through proxies where proxy service has been enabled." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restreamer_bypass_proxy" id="restreamer_bypass_proxy" type="checkbox"';

if (!($f1dcaed925076e67['restreamer_bypass_proxy'] == 1)) {
	goto label1279;
}

goto label1278;

label931:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="legacy_panel_api">Legacy Panel API <i title="Rewrite panel_api.php requests to the new XUI Player API." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="legacy_panel_api" id="legacy_panel_api" type="checkbox"';

if (!($f1dcaed925076e67['legacy_panel_api'] == 1)) {
	goto label938;
}

echo ' checked ';

label938:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="show_category_duplicates">Duplicate Streams in Legacy Apps <i title="XUI was the first to add multiple categories, which means most apps don\'t support it. The default behaviour of the API is to show the item once when ALL is requested, however apps tend to request all streams then filter them into categories themself. This option will change the default behaviour to show the stream duplicated for each additional category, therefore the stream shows correctly in each category. The downside is that when searching or displaying All category, the stream will be show up multiple times." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_category_duplicates" id="show_category_duplicates" type="checkbox"';
goto label764;

label940:

echo htmlspecialchars(str_replace(['&lt;', '&gt;'], ['<', '>'], $f1dcaed925076e67['mag_message']));
echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="webplayer">' . "\n" . '                                        <div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title mb-4">Preferences</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="player_allow_playlist">Allow Playlist Download <i title="Allow clients to generate playlist URL\'s from the web player." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="player_allow_playlist" id="player_allow_playlist" type="checkbox"';

if (!($f1dcaed925076e67['player_allow_playlist'] == 1)) {
	goto label957;
}

echo ' checked ';

label957:

goto label1520;

label958:

echo ' value="conn">Connections</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

if (!($f1dcaed925076e67['split_by'] == 'maxclients')) {
	goto label965;
}

echo ' selected';

label965:

goto label542;

label966:

echo XUI_BETA ? 'Beta Release ' : 'Official Release ';
echo ' v';
echo $B8630a7c92543099['version'] . ($B8630a7c92543099['revision'] ? ' R' . intval($B8630a7c92543099['revision']) : '');
echo ' is now available to download. If you\'re interested, head over to the <a class="text-white" href="';
echo str_replace('"', '\\"', $B8630a7c92543099['url']);
goto label101;

label995:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="hide_failures">Disable Restart Counter <i title="Removes the restart count next to stream uptime." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="hide_failures" id="hide_failures" type="checkbox"';

if (!($f1dcaed925076e67['hide_failures'] == 1)) {
	goto label1002;
}

echo ' checked ';

label1002:

goto label235;

label1003:

echo ' checked ';

label1004:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_rtmp_allow_restream">Allow Restreamers - RTMP <i title="Override to allow restreamers to still use RTMP while it is disabled." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_rtmp_allow_restream" id="disable_rtmp_allow_restream" type="checkbox"';

if (!($f1dcaed925076e67['disable_rtmp_allow_restream'] == 1)) {
	goto label15;
}

echo ' checked ';
goto label15;

label1012:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="probesize_ondemand">On Demand Probesize <i title="Adjustable probesize for ondemand streams. Adjust this setting if you experience issues with no audio." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="probesize_ondemand" name="probesize_ondemand" value="';
echo intval($f1dcaed925076e67['probesize_ondemand']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="security">' . "\n" . '                                        <div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title mb-4">IP Security</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="ip_subnet_match">Match Subnet of IP <i title="Some IP\'s change quite often, however usually within the same /24 subnet. Enable this if you want to keep the IP security but loosen the IP matching a little. An example being IP 159.55.26.0 will verify as being the same as 159.55.26.255 instead of failing." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ip_subnet_match" id="ip_subnet_match" type="checkbox"';

if (!($f1dcaed925076e67['ip_subnet_match'] == 1)) {
	goto label227;
}

echo ' checked ';
goto label227;

label1026:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <h5 class="card-title mb-4">Debug</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="debug_show_errors">Debug Mode <i title="Automatically clean up redundant files in the background. Recommended." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="debug_show_errors" id="debug_show_errors" type="checkbox"';

if (!($f1dcaed925076e67['debug_show_errors'] == 1)) {
	goto label1033;
}

echo ' checked ';

label1033:

goto label381;

label1034:

if (!($f1dcaed925076e67['disable_xmltv_restreamer'] == 1)) {
	goto label1040;
}

echo ' checked ';

label1040:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_playlist">Disable Playlist Download - Line <i title="Enable to remove the ability for lines to download their HLS / device playlists." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_playlist" id="disable_playlist" type="checkbox"';

if (!($f1dcaed925076e67['disable_playlist'] == 1)) {
	goto label1307;
}

goto label1306;

label1047:

echo ' checked ';

label1048:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="player_blur">Background Blur px <i title="Blur the background images by X pixels." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="player_blur" name="player_blur" value="';
echo intval($f1dcaed925076e67['player_blur']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="player_opacity">Background Opacity % <i title="Adjust the background image opacity. Default is 10%." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="player_opacity" name="player_opacity" value="';
goto label457;

label1056:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ondemand_balance_equal">Balance As Live <i title="Treat on-demand servers equal to live servers when load balancing, this will mean an on-demand server will be started up to load balance even if there\'s already a server live for that stream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ondemand_balance_equal" id="ondemand_balance_equal" type="checkbox"';

if (!($f1dcaed925076e67['ondemand_balance_equal'] == 1)) {
	goto label1063;
}

echo ' checked ';

label1063:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<h5 class="card-title mb-4">On-Demand Scanner</h5>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="on_demand_checker">Enable Scanner <i title="Periodically probe on-demand streams to check their current status, resolution, codecs and FPS, as well as response time and log any errors incurred to the database. Streams will scan one at a time, per server, to avoid any connection issues." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="on_demand_checker" id="on_demand_checker" type="checkbox"';
goto label639;

label1065:

echo ' checked ';

label1066:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="block_streaming_servers">Block Hosting Servers <i title="Automatically block servers from server hosting providers. This won\'t affect allowed restreamers." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="block_streaming_servers" id="block_streaming_servers" type="checkbox"';

if (!($f1dcaed925076e67['block_streaming_servers'] == 1)) {
	goto label1635;
}

echo ' checked ';
goto label1635;

label1074:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="modal_edit">Quick Edit Modal <i title="When clicking Edit, open in a modal without navigating away from the page." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="modal_edit" id="modal_edit" type="checkbox"';

if (!($f1dcaed925076e67['modal_edit'] == 1)) {
	goto label1081;
}

echo ' checked ';

label1081:

goto label1958;

label1082:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="stream_logs_save">Stream Error Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="stream_logs_save" id="stream_logs_save" type="checkbox"';

if (!($f1dcaed925076e67['stream_logs_save'] == 1)) {
	goto label1089;
}

echo ' checked ';

label1089:

goto label874;

label1090:

if (!($f1dcaed925076e67['encrypt_hls'] == 1)) {
	goto label1096;
}

echo ' checked ';

label1096:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disallow_empty_user_agents">Disallow Empty UA <i title="Don\'t allow connections from clients with no user-agent." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disallow_empty_user_agents" id="disallow_empty_user_agents" type="checkbox"';

if (!($f1dcaed925076e67['disallow_empty_user_agents'] == 1)) {
	goto label1973;
}

goto label1972;

label1103:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="mag_default_type">Default Theme Type <i title="Whether to use Modern or Legacy theme by default for newly added devices." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="mag_default_type" id="mag_default_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Modern', 'Legacy'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['mag_default_type'] == $ce0840c647e1bbc7)) {
		goto label1115;
	}

	echo 'selected ';

	label1115:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stalker_theme">Legacy Theme <i title="Default Ministra theme to be used by MAG devices." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="stalker_theme" id="stalker_theme" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label569;

label1124:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label1139;
}

echo ' style="display: none;"';

label1139:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<form action="#" method="POST">' . "\n" . '            <div style="display:none;"><input type="text"><input type="password"></div> <!-- Chrome tries to autofill username / password, fool it into filling this in instead. -->' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t\t" . '<div class="page-title-right">' . "\n\t\t\t\t\t\t\t" . '<input name="submit_settings" type="submit" class="btn btn-primary" value="Save Changes" />' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '<h4 class="page-title">Settings</h4>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label1594;
}

goto label1593;

label1149:

echo htmlspecialchars($f1dcaed925076e67['seg_delete_threshold']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="segment_wait_time">Max Segment Wait Time <i title="Maximum amount of seconds to wait for a new segment to be created before exiting the clients connection due to having no new data that can be delivered." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="segment_wait_time" name="segment_wait_time" value="';
echo htmlspecialchars($f1dcaed925076e67['segment_wait_time']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_max_analyze">Analysis Duration <i title="How long to analyse a stream, longer duration will increase sample accuracy. 5,000,000 microseconds = 5s." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="stream_max_analyze" name="stream_max_analyze" value="';
echo htmlspecialchars($f1dcaed925076e67['stream_max_analyze']);
goto label423;

label1167:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="max_simultaneous_downloads">Max Simultaneous Downloads <i title="Max number of simultaneous EPG & Playlist downloads per user (restreamers aren\'t affected). Any additional requests will be served a 429 Too Many Requests error. Set this to 0 to disable." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="max_simultaneous_downloads" name="max_simultaneous_downloads" value="';
echo htmlspecialchars($f1dcaed925076e67['max_simultaneous_downloads']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            </div>' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="tab-pane" id="api">' . "\n" . '                                        <div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title mb-4">Preferences</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="tmdb_api_key">TMDb Key <i title="Get your API key at <a href=\'https://www.themoviedb.org/settings/api\'>https://www.themoviedb.org/settings/api</a>" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="tmdb_api_key" name="tmdb_api_key" value="';
echo htmlspecialchars($f1dcaed925076e67['tmdb_api_key']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="tmdb_language">TMDb Language <i title="Default language for TMDb requests, you can override this per movie or series." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="tmdb_language" id="tmdb_language" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label1208;

label1181:

echo ' checked ';

label1182:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                        </div>' . "\n" . '                                        <div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title mb-4">Legacy Support</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="legacy_get">Legacy Playlist URL <i title="Rewrite get.php requests to the new playlist URL." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="legacy_get" id="legacy_get" type="checkbox"';

if (!($f1dcaed925076e67['legacy_get'] == 1)) {
	goto label534;
}

echo ' checked ';
goto label534;

label1190:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="restrict_same_ip">Restrict to Same IP <i title="Tie HLS connections to their IP address. Turn this off if you\'re having issues with dynamic IP\'s." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restrict_same_ip" id="restrict_same_ip" type="checkbox"';

if (!($f1dcaed925076e67['restrict_same_ip'] == 1)) {
	goto label1197;
}

echo ' checked ';

label1197:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="rtmp_random">Random RTMP IP <i title="Use a random IP for RMTP connections." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="rtmp_random" id="rtmp_random" type="checkbox"';
goto label1711;

label1199:

echo ' checked ';

label1200:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_isps">Log Client ISP\'s <i title="Grab ISP information for each client that connects and store it in the database." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_isps" id="show_isps" type="checkbox"';

if (!($f1dcaed925076e67['show_isps'] == 1)) {
	goto label1315;
}

echo ' checked ';
goto label1315;

label1208:

foreach ($b991f823f0dd214d as $Bb672d1983256a93 => $rLanguage) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['tmdb_language'] == $Bb672d1983256a93)) {
		goto label1219;
	}

	echo ' selected';

	label1219:

	echo ' value="';
	echo $Bb672d1983256a93;
	echo '">';
	echo $rLanguage;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="download_images">Download Images <i title="If this option is set, images from TMDb for example will be downloaded to the main server." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="download_images" id="download_images" type="checkbox"';

if (!($f1dcaed925076e67['download_images'] == 1)) {
	goto label1512;
}

echo ' checked ';
goto label1512;

label1234:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="keep_client">Keep Logs For</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="keep_client" id="keep_client" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([0 => 'Forever', 3600 => '1 Hour', 21600 => '6 Hours', 43200 => '12 Hours', 86400 => '1 Day', 259200 => '3 Days', 604800 => '7 Days', 1209600 => '14 Days', 16934400 => '28 Days', 15552000 => '180 Days', 31536000 => '365 Days'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['keep_client'] == $ce0840c647e1bbc7)) {
		goto label1246;
	}

	echo 'selected ';

	label1246:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="save_login_logs">Login Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="save_login_logs" id="save_login_logs" type="checkbox"';
goto label1643;

label1255:

echo ' value="bouquet">Legacy</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

if (!($f1dcaed925076e67['channel_number_type'] == 'manual')) {
	goto label1262;
}

echo ' selected';

label1262:

echo ' value="manual">Manual</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="vod_sort_newest">Sort VOD by Date <i title="Change default sorting for VOD to be by date added descending, showing newest first. This only works as expected if Channel Sorting Type is set to Bouquet, otherwise VOD order will be overwritten." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="vod_sort_newest" id="vod_sort_newest" type="checkbox"';
goto label661;

label1264:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">Spam Prevention</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="flood_limit">Flood Limit <i title="Number of attempts before IP is blocked. Enter 0 to disable flood detection." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="flood_limit" name="flood_limit" value="';
echo htmlspecialchars($f1dcaed925076e67['flood_limit']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="flood_seconds">Per Seconds <i title="Number of seconds between requests." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="flood_seconds" name="flood_seconds" value="';
echo htmlspecialchars($f1dcaed925076e67['flood_seconds']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="auth_flood_limit">Auth Flood Limit <i title="Number of attempts before connections are slowed down. Enter 0 to disable authorised flood detection.<br/><br/>This is separate to the normal Flood Limit as it only affects legitimate clients with valid credentials. As an example you can set this up so that after 30 connections in 10 seconds, the requests for the next 10 seconds will sleep for 1 second first to slow them down." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="auth_flood_limit" name="auth_flood_limit" value="';
goto label253;

label1278:

echo ' checked ';

label1279:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="channel_number_type">Channel Sorting Type <i title="Preferred method of channel sorting in playlists and apps." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="channel_number_type" id="channel_number_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

if (!($f1dcaed925076e67['channel_number_type'] == 'bouquet_new')) {
	goto label729;
}

echo ' selected';
goto label729;

label1287:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">Off Air Videos</h5>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_not_on_air_video">Stream Down Video <i title="Show this video when a stream isn\'t on air." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_not_on_air_video" id="show_not_on_air_video" type="checkbox"';

if (!($f1dcaed925076e67['show_not_on_air_video'] == 1)) {
	goto label1294;
}

echo ' checked ';

label1294:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="not_on_air_video_path" name="not_on_air_video_path" value="';
goto label470;

label1296:

echo ' checked ';

label1297:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">Ministra</h5>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="stream_pass">Streaming Password</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" readonly class="form-control" id="stream_pass" value="';
echo htmlspecialchars(XUI::$rSettings['live_streaming_pass']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            </div>' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="tab-pane" id="streaming">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title mb-4">Preferences</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="enable_isp_lock">Enable ISP Lock <i title="Enable / Disable ISP lock globally." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_isp_lock" id="enable_isp_lock" type="checkbox"';
goto label23;

label1306:

echo ' checked ';

label1307:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="disable_playlist_restreamer">Disable Playlist Download - Restreamer <i title="Enable to remove the ability for lines to download their HLS / device playlists." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_playlist_restreamer" id="disable_playlist_restreamer" type="checkbox"';

if (!($f1dcaed925076e67['disable_playlist_restreamer'] == 1)) {
	goto label483;
}

echo ' checked ';
goto label483;

label1315:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="online_capacity_interval">Online Capacity Interval <i title="Interval at which to check server activity for connection limits." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="online_capacity_interval" name="online_capacity_interval" value="';
echo htmlspecialchars($f1dcaed925076e67['online_capacity_interval']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="monitor_connection_status">Monitor Connection Status <i title="Monitor PHP\'s connection_status() return while delivering stream and VOD content. This will abort the connection correctly when CONNECTION_NORMAL is not returned." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="monitor_connection_status" id="monitor_connection_status" type="checkbox"';

if (!($f1dcaed925076e67['monitor_connection_status'] == 1)) {
	goto label552;
}

goto label551;

label1328:

echo ' checked ';

label1329:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ignore_keyframes">Ignore Keyframes <i title="Allow segments to start on frames other than keyframes. This improves behavior on some players when the time between keyframes is inconsistent, but may make things worse on others, and can cause some oddities during startup with blank screen until video kicks in." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ignore_keyframes" id="ignore_keyframes" type="checkbox"';

if (!($f1dcaed925076e67['ignore_keyframes'] == 1)) {
	goto label1550;
}

echo ' checked ';
goto label1550;

label1337:

echo htmlspecialchars($f1dcaed925076e67['allowed_ips_admin']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="api_ips">API IP\'s <i title="Allowed IP\'s to access the XUI Admin API. Separate each IP with a comma." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="api_ips" name="api_ips" value="';
echo htmlspecialchars($f1dcaed925076e67['api_ips']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="api_ips">API Password <i title="Password required to access the XUI Admin API. Leave blank to use IP whitelist only." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="password" class="form-control" id="api_pass" name="api_pass" value="';
echo htmlspecialchars($f1dcaed925076e67['api_pass']);
goto label1355;

label1355:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_xmltv">Disable EPG Download - Line <i title="Enable to disallow EPG downloads in XMLTV format." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_xmltv" id="disable_xmltv" type="checkbox"';

if (!($f1dcaed925076e67['disable_xmltv'] == 1)) {
	goto label1362;
}

echo ' checked ';

label1362:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="disable_xmltv_restreamer">Disable EPG Download - Restreamer <i title="Enable to disallow EPG downloads in XMLTV format." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_xmltv_restreamer" id="disable_xmltv_restreamer" type="checkbox"';
goto label1034;

label1364:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="create_expiration">Redirect Expiration <i title="How long in seconds before a redirect from the main server to a load balancer will expire. If you get a lot of TOKEN_EXPIRED errors in your logs, increase this." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="create_expiration" name="create_expiration" value="';
echo htmlspecialchars($f1dcaed925076e67['create_expiration']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="read_native_hls">HLS Read Native <i title="Force Read Native on for all HLS streams. Turn this off if you\'d rather set it manually for each applicable stream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="read_native_hls" id="read_native_hls" type="checkbox"';

if (!($f1dcaed925076e67['read_native_hls'] == 1)) {
	goto label334;
}

echo ' checked ';
goto label334;

label1378:

if (!($f1dcaed925076e67['mag_load_all_channels'] == 1)) {
	goto label1384;
}

echo ' checked ';

label1384:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="disable_mag_token">Disable MAG Token <i title="Disable verification of MAG token when streaming, reduces security but can have better compatibility." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_mag_token" id="disable_mag_token" type="checkbox"';

if (!($f1dcaed925076e67['disable_mag_token'] == 1)) {
	goto label85;
}

goto label84;

label1391:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="fails_per_time">Fails Per Time <i title="How long to track stream failures for on Streams view page. Fails per X seconds." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="fails_per_time" name="fails_per_time" value="';
echo intval($f1dcaed925076e67['fails_per_time']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <!--<label class="col-md-4 col-form-label" for="default_entries">Fingerprint Max <i title="Maximum number of concurrent fingerprint sessions. A higher limit will result in significant CPU usage during fingerprinting. Select 0 for no limit." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="fingerprint_max" id="fingerprint_max" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([0, 5, 10, 25, 50, 100] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['fingerprint_max'] == $C17543903e9aa6ae)) {
		goto label1408;
	}

	echo ' selected';

	label1408:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1882;

label1416:

if (!($f1dcaed925076e67['disable_hls_allow_restream'] == 1)) {
	goto label1422;
}

echo ' checked ';

label1422:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="disable_rtmp">Disable RTMP Output <i title="Disable RTMP for all clients and devices." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_rtmp" id="disable_rtmp" type="checkbox"';

if (!($f1dcaed925076e67['disable_rtmp'] == 1)) {
	goto label1004;
}

goto label1003;

label1429:

if (!($f1dcaed925076e67['show_connected_video'] == 1)) {
	goto label1435;
}

echo ' checked ';

label1435:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="connected_video_path" name="connected_video_path" value="';
echo htmlspecialchars($f1dcaed925076e67['connected_video_path']);
goto label2052;

label1442:

echo ' checked ';

label1443:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="disallow_2nd_ip_max">Disallow if Connections <= <i title="Maximum amount of connections a line can have before Disallow 2nd IP is disabled. If you set this to 3, any line with 3 or less connections will be disconnected if they connect from a different IP." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="disallow_2nd_ip_max" name="disallow_2nd_ip_max" value="';
echo intval($f1dcaed925076e67['disallow_2nd_ip_max']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">Restream Prevention</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="restream_deny_unauthorised">XUI Detect - Deny <i title="Deny connections from non-restreamers who are trying to use XUI.one to restream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="restream_deny_unauthorised" id="restream_deny_unauthorised" type="checkbox"';
goto label2031;

label1451:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="always_enabled_subtitles">Always Enabled Subtitles <i title="Force subtitles to be enabled at all times." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="always_enabled_subtitles" id="always_enabled_subtitles" type="checkbox"';

if (!($f1dcaed925076e67['always_enabled_subtitles'] == 1)) {
	goto label1458;
}

echo ' checked ';

label1458:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="enable_connection_problem_indication">Connection Problem Indiciation</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_connection_problem_indication" id="enable_connection_problem_indication" type="checkbox"';
goto label271;

label1460:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                            </div>' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</form>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label2085;

label1462:

echo ' checked ';

label1463:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_channel_logo_in_preview">Show Preview Channel Logos</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_channel_logo_in_preview" id="show_channel_logo_in_preview" type="checkbox"';

if (!($f1dcaed925076e67['show_channel_logo_in_preview'] == 1)) {
	goto label347;
}

echo ' checked ';
goto label347;

label1471:

foreach (array_udiff($Fa138f2d2a6da23d, json_decode($f1dcaed925076e67['allowed_stb_types_for_local_recording'], true), 'strcasecmp') as $b49a83639cb5905a) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b49a83639cb5905a;
	echo '">';
	echo $b49a83639cb5905a;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="test_download_url">Speedtest URL <i title="URL to a file to download during speedtest on MAG devices." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="test_download_url" name="test_download_url" value="';
echo htmlspecialchars($f1dcaed925076e67['test_download_url']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="mag_message">Information Message <i title="Message to display when a user selects Information in My Account tab. Text entered should be in HTML format, although newlines will be converted to <br/>." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea rows="6" class="form-control" id="mag_message" name="mag_message">';
goto label940;

label1498:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="restreamer_prebuffer">Restreamer Prebuffer <i title="How much data in seconds will be sent to the client when connecting to a stream. Larger values will create larger prebuffers." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="restreamer_prebuffer" name="restreamer_prebuffer" value="';
echo htmlspecialchars($f1dcaed925076e67['restreamer_prebuffer']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="split_by">Load Balancing <i title="Preferred method of load balancing connections." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="split_by" id="split_by" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

if (!($f1dcaed925076e67['split_by'] == 'conn')) {
	goto label958;
}

echo ' selected';
goto label958;

label1512:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="api_redirect">API Redirect <i title="Redirect API stream requests using AES encrypted tokens instead of defaulting the app to user / pass requests. This will be more widely used in the future and can remain disabled for now." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="api_redirect" id="api_redirect" type="checkbox"';

if (!($f1dcaed925076e67['api_redirect'] == 1)) {
	goto label1519;
}

echo ' checked ';

label1519:

goto label1733;

label1520:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="player_allow_bouquet">Allow Bouquet Ordering <i title="Allow clients to reorder their bouquets from the web player." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="player_allow_bouquet" id="player_allow_bouquet" type="checkbox"';

if (!($f1dcaed925076e67['player_allow_bouquet'] == 1)) {
	goto label1527;
}

echo ' checked ';

label1527:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="player_hide_incompatible">Hide Incompatible Streams <i title="Hide streams that aren\'t compatible with most browsers, this will limit streams to H264 and AV1 mostly. This option will also hide streams and movies that aren\'t available." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="player_hide_incompatible" id="player_hide_incompatible" type="checkbox"';
goto label751;

label1529:

echo htmlspecialchars($b5337d8a535cf6dd['proxy']['argument_default_value']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="cookie">Cookie <i title="Format: key=value;" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="cookie" name="cookie" value="';
echo htmlspecialchars($b5337d8a535cf6dd['cookie']['argument_default_value']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="headers">Headers <i title="FFmpeg -headers command." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="headers" name="headers" value="';
echo htmlspecialchars($b5337d8a535cf6dd['headers']['argument_default_value']);
goto label1012;

label1550:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="dts_legacy_ffmpeg">DTS - Use FFMPEG v4.0 <i title="Automatically switch to legacy FFMPEG v4.0 for streams with DTS audio, in some cases this has been known to fix desynchronised audio. Generate PTS needs to be turned off for this to function." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="dts_legacy_ffmpeg" id="dts_legacy_ffmpeg" type="checkbox"';

if (!($f1dcaed925076e67['dts_legacy_ffmpeg'] == 1)) {
	goto label1557;
}

echo ' checked ';

label1557:

goto label196;

label1558:

foreach (array_udiff($Fa138f2d2a6da23d, json_decode($f1dcaed925076e67['allowed_stb_types'], true), 'strcasecmp') as $b49a83639cb5905a) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b49a83639cb5905a;
	echo '">';
	echo $b49a83639cb5905a;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="allowed_stb_types_for_local_recording">Allowed STB Recording</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="allowed_stb_types_for_local_recording[]" id="allowed_stb_types_for_local_recording" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                                            ';

foreach (json_decode($f1dcaed925076e67['allowed_stb_types_for_local_recording'], true) as $b49a83639cb5905a) {
	echo '                                                            <option selected value="';
	echo $b49a83639cb5905a;
	echo '">';
	echo $b49a83639cb5905a;
	echo '</option>' . "\n" . '                                                            ';
}

goto label1471;

label1593:

echo "\t\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t" . 'Settings have been updated.' . "\n\t\t\t\t\t" . '</div>' . "\n" . '                    ';

label1594:

echo "\t\t\t\t\t" . '<div class="card bg-info text-white cta-box">' . "\n\t\t\t\t\t\t";
if (!(is_array($B8630a7c92543099) && $B8630a7c92543099['version'] && ((0 < version_compare($B8630a7c92543099['version'], XUI_VERSION)) || ((version_compare($B8630a7c92543099['version'], XUI_VERSION) == 0) && (intval(XUI_REVISION) < intval($B8630a7c92543099['revision'])))))) {
	goto label206;
}

echo "\t\t\t\t\t\t" . '<div class="card-body" style="max-height: 250px;">' . "\n\t\t\t\t\t\t\t" . '<h5 class="card-title text-white">Update Available</h5>' . "\n\t\t\t\t\t\t\t" . '<p>';
goto label966;

label1635:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="block_proxies">Block Proxies / VPN\'s <i title="Automatically block proxies and VPN\'s based on their ASN. This won\'t affect allowed restreamers." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="block_proxies" id="block_proxies" type="checkbox"';

if (!($f1dcaed925076e67['block_proxies'] == 1)) {
	goto label1642;
}

echo ' checked ';

label1642:

goto label1264;

label1643:

if (!($f1dcaed925076e67['save_login_logs'] == 1)) {
	goto label1649;
}

echo ' checked ';

label1649:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="keep_login">Keep Logs For</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="keep_login" id="keep_login" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([0 => 'Forever', 3600 => '1 Hour', 21600 => '6 Hours', 43200 => '12 Hours', 86400 => '1 Day', 259200 => '3 Days', 604800 => '7 Days', 1209600 => '14 Days', 16934400 => '28 Days', 15552000 => '180 Days', 31536000 => '365 Days'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['keep_login'] == $ce0840c647e1bbc7)) {
		goto label1661;
	}

	echo 'selected ';

	label1661:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1082;

label1669:

foreach ($b763a8051452ee57 as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['default_timezone'] == $ce0840c647e1bbc7)) {
		goto label1680;
	}

	echo 'selected ';

	label1680:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <!-- <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="language">Interface Language <i title="Default language for the Admin & Reseller Interface, this will be the default for all users unless they change their profile language." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . ' <select name="language" id="language" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (A214aEd1599664ca() as $rLanguage) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['language'] == $rLanguage['key'])) {
		goto label1701;
	}

	echo ' selected';

	label1701:

	echo ' value="';
	echo $rLanguage['key'];
	echo '">';
	echo $rLanguage['language'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label390;

label1711:

if (!($f1dcaed925076e67['rtmp_random'] == 1)) {
	goto label1717;
}

echo ' checked ';

label1717:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="disallow_2nd_ip_con">Disallow 2nd IP <i title="Disallow connection from different IP when a connection is in use." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disallow_2nd_ip_con" id="disallow_2nd_ip_con" type="checkbox"';

if (!($f1dcaed925076e67['disallow_2nd_ip_con'] == 1)) {
	goto label1443;
}

goto label1442;

label1724:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="county_override_1st">Override Country with First <i title="Override country with first connected." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="county_override_1st" id="county_override_1st" type="checkbox"';

if (!($f1dcaed925076e67['county_override_1st'] == 1)) {
	goto label1731;
}

echo ' checked ';

label1731:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="encrypt_hls">Encrypt HLS Segments <i title="Encrypt all HLS streams with AES-256 while they are being watched. This will increase CPU usage but is more secure and packets cannot be analysed." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="encrypt_hls" id="encrypt_hls" type="checkbox"';
goto label1090;

label1733:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="movie_year_append">Append Movie Year <i title="Automatically append the movie year when using TMDb or watch folder." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="movie_year_append" id="movie_year_append" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Brackets', 'Hyphen', 'Disabled'] as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['movie_year_append'] == $Bb672d1983256a93)) {
		goto label1745;
	}

	echo ' selected';

	label1745:

	echo ' value="';
	echo $Bb672d1983256a93;
	echo '">';
	echo $ce0840c647e1bbc7;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="api_container">API Container <i title="Default container to use in Android / Smart TV apps." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="api_container" id="api_container" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['ts' => 'MPEG-TS', 'm3u8' => 'HLS'] as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['api_container'] == $Bb672d1983256a93)) {
		goto label1764;
	}

	echo ' selected';

	label1764:

	echo ' value="';
	echo $Bb672d1983256a93;
	echo '">';
	echo $ce0840c647e1bbc7;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label790;

label1772:

echo intval($f1dcaed925076e67['threshold_mem']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="threshold_disk">Disk Threshold % <i title="When disk usage is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="threshold_disk" name="threshold_disk" value="';
echo intval($f1dcaed925076e67['threshold_disk']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="threshold_network">Network Threshold % <i title="When network usage is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="threshold_network" name="threshold_network" value="';
echo intval($f1dcaed925076e67['threshold_network']);
goto label1790;

label1790:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="threshold_clients">Clients Threshold % <i title="When number of clients as a percent of max server clients is above this percentage it will show as a warning in the service status box." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="threshold_clients" name="threshold_clients" value="';
echo intval($f1dcaed925076e67['threshold_clients']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<h5 class="card-title mb-4">Search</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="enable_search">Enable Search <i title="Toggle the search box in the top right of the header and allow the cache engine to write search queries to the database." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_search" id="enable_search" type="checkbox"';

if (!($f1dcaed925076e67['enable_search'] == 1)) {
	goto label491;
}

echo ' checked ';
goto label491;

label1804:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="encrypt_playlist_restreamer">Encrypt Restreamer Playlists <i title="Encrypt line credentials in restreamer playlist files." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="encrypt_playlist_restreamer" id="encrypt_playlist_restreamer" type="checkbox"';

if (!($f1dcaed925076e67['encrypt_playlist_restreamer'] == 1)) {
	goto label1811;
}

echo ' checked ';

label1811:

goto label900;

label1812:

echo ' checked ';

label1813:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="expiring_video_path" name="expiring_video_path" value="';
echo htmlspecialchars($f1dcaed925076e67['expiring_video_path']);
echo '" placeholder="Leave blank to use default XUI video.">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_connected_video">2nd IP Connected Video <i title="Show this video when a client connects but gets denied to already watching on another IP." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_connected_video" id="show_connected_video" type="checkbox"';
goto label1429;

label1821:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="segment_type">FFMPEG Segment Type <i title="Whether to use -f segment or -f hls when processing streams. -f hls is designed to be used with HLS streaming so should perform better. Using segment will disable delete threshold option. Segment will be used by default for on-demand streams to increase speed." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="segment_type" id="segment_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['-f hls', '-f segment'] as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($f1dcaed925076e67['segment_type'] == $ce0840c647e1bbc7)) {
		goto label1833;
	}

	echo 'selected ';

	label1833:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="ffmpeg_warnings">FFMPEG Show Warnings <i title="Instruct FFMPEG to save warnings to stream errors table. Turning this off will save only errors instead." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="ffmpeg_warnings" id="ffmpeg_warnings" type="checkbox"';

if (!($f1dcaed925076e67['ffmpeg_warnings'] == 1)) {
	goto label1329;
}

goto label1328;

label1847:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="parse_type">VOD Parser <i title="Whether to use GuessIt or PTN to parse filenames for Watch Folder etc. GuessIt is far better but uses more resources." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="parse_type" id="parse_type" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['guessit' => 'GuessIt', 'ptn' => 'PTN'] as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['parse_type'] == $Bb672d1983256a93)) {
		goto label1859;
	}

	echo ' selected';

	label1859:

	echo ' value="';
	echo $Bb672d1983256a93;
	echo '">';
	echo $ce0840c647e1bbc7;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="cloudflare">Enable Cloudflare <i title="Allow Cloudflare IP\'s to connect to your service and relay the true client IP to XUI." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="cloudflare" id="cloudflare" type="checkbox"';

if (!($f1dcaed925076e67['cloudflare'] == 1)) {
	goto label1182;
}

goto label1181;

label1873:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                            </div>' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    <div class="tab-pane" id="logs">' . "\n" . '                                        <div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title mb-4">Preferences</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="save_closed_connection">Activity Logs <i title="Activity logs are saved when an active connection is closed. This is useful information to keep and should be kept for as long as possible, however can build up if you have high throughput." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="save_closed_connection" id="save_closed_connection" type="checkbox"';

if (!($f1dcaed925076e67['save_closed_connection'] == 1)) {
	goto label1880;
}

echo ' checked ';

label1880:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="keep_activity">Keep Logs For</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="keep_activity" id="keep_activity" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label44;

label1882:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>-->' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="date_format">Date Format <i title="Default date format to use. Please look up PHP date formatting before changing this." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="date_format" name="date_format" value="';
echo htmlspecialchars($f1dcaed925076e67['date_format']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="datetime_format">Datetime Format <i title="Default datetime format to use. Please look up PHP date formatting before changing this." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="datetime_format" name="datetime_format" value="';
echo htmlspecialchars($f1dcaed925076e67['datetime_format']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="streams_grouped">Group Streams Table <i title="Toggle to group multiple servers per stream into a single row, this will reduce the amount of rows to display." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="streams_grouped" id="streams_grouped" type="checkbox"';
goto label674;

label1896:

echo ' checked ';

label1897:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="force_epg_timezone">Force EPG to UTC Timezone <i title="Ensure all EPG is generated as UTC and times shown in API\'s are UTC. This will change the timezone in player API to UTC also to sync with apps." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="force_epg_timezone" id="force_epg_timezone" type="checkbox"';

if (!($f1dcaed925076e67['force_epg_timezone'] == 1)) {
	goto label708;
}

echo ' checked ';
goto label708;

label1905:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="on_demand_max_probe">Max Probe Time <i title="How many seconds to probe the stream for before cancelling." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="on_demand_max_probe" name="on_demand_max_probe" value="';
echo htmlspecialchars($f1dcaed925076e67['on_demand_max_probe']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="on_demand_scan_keep">Keep Logs For <i title="How many seconds to keep logs for. This will affect your Up and Down statistics in the logs page. Default is 604800, 1 week." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="on_demand_scan_keep" name="on_demand_scan_keep" value="';
echo htmlspecialchars($f1dcaed925076e67['on_demand_scan_keep']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <h5 class="card-title mb-4">Encoding Queue Settings</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="max_encode_movies">Max Movie Encodes <i title="Maximum number of movies to encode at once, per server. If all of your content is symlinked, you can set this to a higher number, otherwise set it to how many encodes your servers can realistically perform at once without overloading." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="max_encode_movies" name="max_encode_movies" value="';
goto label1998;

label1919:

echo htmlspecialchars($f1dcaed925076e67['vod_limit_perc']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="user_auto_kick_hours">Auto-Kick Hours <i title="Automatically kick connections that are online for more than X hours." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="user_auto_kick_hours" name="user_auto_kick_hours" value="';
echo htmlspecialchars($f1dcaed925076e67['user_auto_kick_hours']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="use_mdomain_in_lists">Use Domain Name in API <i title="Use domain name in lists." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="use_mdomain_in_lists" id="use_mdomain_in_lists" type="checkbox"';

if (!($f1dcaed925076e67['use_mdomain_in_lists'] == 1)) {
	goto label835;
}

goto label834;

label1937:

echo ' checked ';

label1938:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-3 col-form-label" for="epg_api_extended">Append Extra Data <i title="Modify the incoming EPG data with extra data such as the name of the event." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="epg_api_extended" id="epg_api_extended" class="form-control" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['Default Format', 'Extended Title', 'Extended Description'] as $ce0840c647e1bbc7 => $A7d54b094ae83c95) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['epg_api_extended'] == $ce0840c647e1bbc7)) {
		goto label1950;
	}

	echo ' selected';

	label1950:

	echo ' value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $A7d54b094ae83c95;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label1;

label1958:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="mysql_sleep_kill">MySQL Sleep Timeout <i title="How long to allow mysql connections to remain in Sleep before killing them. Set to 0 to disable." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="mysql_sleep_kill" name="mysql_sleep_kill" value="';
echo intval($f1dcaed925076e67['mysql_sleep_kill']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <h5 class="card-title mb-4">Dashboard</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="dashboard_stats">Show Graphs <i title="Enable dashboard statistic graphs for System Resources, Network and Connections." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="dashboard_stats" id="dashboard_stats" type="checkbox"';

if (!($f1dcaed925076e67['dashboard_stats'] == 1)) {
	goto label2044;
}

echo ' checked ';
goto label2044;

label1972:

echo ' checked ';

label1973:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="vod_bitrate_plus">VOD Bitrate Buffer <i title="Additional buffer when streaming VOD." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="vod_bitrate_plus" name="vod_bitrate_plus" value="';
echo htmlspecialchars($f1dcaed925076e67['vod_bitrate_plus']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="vod_limit_perc">VOD Limit At % <i title="Limit VOD after x% has streamed. Use 0 to limit immediately and 100 to turn off entirely." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="vod_limit_perc" name="vod_limit_perc" value="';
goto label1919;

label1981:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="api_probe">Probe via API <i title="Use API calls to probe sources from XUI servers." class="tooltip text-secondary far fa-circle"></i></label>' . "\n" . '                                                    <div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="api_probe" id="api_probe" type="checkbox"';

if (!($f1dcaed925076e67['api_probe'] == 1)) {
	goto label1988;
}

echo ' checked ';

label1988:

goto label1287;

label1989:

echo ' checked ';

label1990:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="show_tickets">Show Tickets Icon <i title="Show tickets icon in the top right of the navigation menu. Turning this off will move Tickets to the Management menu." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_tickets" id="show_tickets" type="checkbox"';

if (!($f1dcaed925076e67['show_tickets'] == 1)) {
	goto label995;
}

echo ' checked ';
goto label995;

label1998:

echo htmlspecialchars($f1dcaed925076e67['max_encode_movies']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="max_encode_cc">Max Channel Encodes <i title="Maximum number of created channels to encode at once, per server. It\'s best to set this to 1 unless you\'re symlinking all created channels." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="max_encode_cc" name="max_encode_cc" value="';
echo htmlspecialchars($f1dcaed925076e67['max_encode_cc']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="queue_loop">Queue Loop Timer <i title="How long to wait between queue checks. If you\'re symlinking content you should set this to 1 second." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="queue_loop" name="queue_loop" value="';
echo htmlspecialchars($f1dcaed925076e67['queue_loop']);
goto label70;

label2016:

echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="recaptcha_v2_secret_key">reCAPTCHA V2 - Secret Key <i title="Please visit https://google.com/recaptcha/admin to obtain your API keys." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="recaptcha_v2_secret_key" name="recaptcha_v2_secret_key" value="';
echo htmlspecialchars($f1dcaed925076e67['recaptcha_v2_secret_key']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <h5 class="card-title mb-4">Default Arguments</h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="user_agent">User Agent</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="user_agent" name="user_agent" value="';
echo htmlspecialchars($b5337d8a535cf6dd['user_agent']['argument_default_value']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-3 col-form-label" for="http_proxy">HTTP Proxy <i title="Format: ip:port" class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-9">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="http_proxy" name="http_proxy" value="';
goto label1529;

label2031:

if (!($f1dcaed925076e67['restream_deny_unauthorised'] == 1)) {
	goto label2037;
}

echo ' checked ';

label2037:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="detect_restream_block_user">XUI Detect - Ban Lines <i title="Ban lines of non-restreamers who are trying to use XUI.one to restream." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="detect_restream_block_user" id="detect_restream_block_user" type="checkbox"';

if (!($f1dcaed925076e67['detect_restream_block_user'] == 1)) {
	goto label1066;
}

goto label1065;

label2044:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="dashboard_map">Show Connections Map <i title="Show connection map on the dashboard." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="dashboard_map" id="dashboard_map" type="checkbox"';

if (!($f1dcaed925076e67['dashboard_map'] == 1)) {
	goto label2051;
}

echo ' checked ';

label2051:

goto label244;

label2052:

echo '" placeholder="Leave blank to use default XUI video.">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <h5 class="card-title mb-4">Allowed Countries <i title="Select individual countries to allow. This is a global geo-lock, selet All Countries to allow everyone." class="tooltip text-secondary far fa-circle"></i></h5>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <div class="col-md-12">' . "\n" . '                                                        <select name="allow_countries[]" id="allow_countries" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ($D2acd05e090587e2 as $ce0840c647e1bbc7 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!in_array($ce0840c647e1bbc7, json_decode($f1dcaed925076e67['allow_countries'], true))) {
		goto label2071;
	}

	echo 'selected ';

	label2071:

	echo 'value="';
	echo $ce0840c647e1bbc7;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="mag">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title mb-4">Preferences</h5>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="show_all_category_mag">Show All Categories <i title="Show All category on MAG devices." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="show_all_category_mag" id="show_all_category_mag" type="checkbox"';

if (!($f1dcaed925076e67['show_all_category_mag'] == 1)) {
	goto label154;
}

goto label153;

label2085:

include 'footer.php';

?>