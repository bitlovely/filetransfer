<?php


goto label253;

label1:

if (!isset(XUI::$rRequest['duration'])) {
	goto label10;
}

$D8713f4c40d502da['duration'] = XUI::$rRequest['duration'];

label10:

if (in_array(XUI::$rRequest['type'], ['live', 'timeshift'])) {
	goto label267;
}

$b62d6460eb33ea07->query('SELECT `server_id`, `on_demand` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE (`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 0 AND `streams_servers`.`stream_status` <> 1) AND `stream_id` = ?;', XUI::$rRequest['id']);
goto label266;

label25:

if (!isset(XUI::$rRequest['start'])) {
	goto label34;
}

$D8713f4c40d502da['start'] = XUI::$rRequest['start'];

label34:

goto label1;

label35:

echo in_array(XUI::$rRequest['type'], ['live', 'timeshift']) ? 'hls' : preg_replace('/[^A-Za-z0-9 ]/', '', $D8713f4c40d502da['container']);
echo '",' . "\n" . '            "autostart": true,' . "\n" . '            "width": "100%",' . "\n" . '            "height": "100%"' . "\n" . '        });' . "\n" . '        rPlayer.play();' . "\n" . '        ';

label53:

goto label275;

label54:

if ($A412a8fc85cbb7e7) {
	goto label57;
}

echo '    <script src="assets/libs/jwplayer/jwplayer.js"></script>' . "\n" . '    <script src="assets/libs/jwplayer/jwplayer.core.controls.js"></script>' . "\n" . '    ';

label57:

echo '    <style>html { overflow: hidden; }</style>' . "\n" . '    <body>' . "\n" . '        ';

if ($A412a8fc85cbb7e7) {
	goto label222;
}

goto label220;

label61:

if (e6D500e19634D513()) {
	goto label67;
}

E72f42A93714bA87();

label67:

$Dcd345fd677c6c87 = time() + 14400;
$D8713f4c40d502da = ['session_id' => session_id(), 'expires' => $Dcd345fd677c6c87, 'stream_id' => intval(XUI::$rRequest['id']), 'ip' => XUI::AD72B4259CA295B2()];
goto label152;

label86:

exit();

label87:

$A7ca171405b19571 = $Bf9be24c69c0f17b . '://' . ($Bcf70cba56392975[$C082ca9ed03f473c]['domain_name'] ? explode(',', $Bcf70cba56392975[$C082ca9ed03f473c]['domain_name'])[0] : $Bcf70cba56392975[$C082ca9ed03f473c]['server_ip']) . ':' . (a41659d47a278cEB() ? $Bcf70cba56392975[$C082ca9ed03f473c]['https_broadcast_port'] : $Bcf70cba56392975[$C082ca9ed03f473c]['http_broadcast_port']) . '/admin/' . (XUI::$rRequest['type'] == 'live' ? 'live' : (XUI::$rRequest['type'] == 'timeshift' ? 'timeshift' : 'vod')) . '?uitoken=' . $C28212d1be536d65 . (XUI::$rRequest['type'] == 'live' ? '&extension=.m3u8' : '');
echo '<html>' . "\n" . '    <script src="assets/js/vendor.min.js"></script>' . "\n" . '    ';
goto label54;

label145:

echo '" controls></video>' . "\n" . '        ';

label146:

echo '    </body>' . "\n" . '    <script>' . "\n" . '    $(document).ready(function() {' . "\n" . '        ';

if (!$A412a8fc85cbb7e7) {
	goto label262;
}

echo '        $("video").trigger("play");' . "\n" . '        ';
goto label261;

label152:

$A412a8fc85cbb7e7 = false;

if (!isset(XUI::$rRequest['container'])) {
	goto label25;
}

$D8713f4c40d502da['container'] = XUI::$rRequest['container'];

if (!($D8713f4c40d502da['container'] != 'mp4')) {
	goto label25;
}

$A412a8fc85cbb7e7 = true;
goto label25;

label169:

$C28212d1be536d65 = Xui\Functions::encrypt(json_encode($D8713f4c40d502da), XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);

if (!$Cc9b6078c1293a96) {
	goto label87;
}

$c7c0d0bb12ba9ddc = 'http://' . $Bcf70cba56392975[$C082ca9ed03f473c]['server_ip'] . ':' . $Bcf70cba56392975[$C082ca9ed03f473c]['http_broadcast_port'] . '/admin/live?password=' . XUI::$rSettings['live_streaming_pass'] . '&stream=' . intval(XUI::$rRequest['id']) . '&extension=.m3u8&odstart=1';

if (!(intval(file_get_contents($c7c0d0bb12ba9ddc, false, stream_context_create([
	'http' => ['timeout' => 20]
]))) == 0)) {
	goto label87;
}

goto label86;

label220:

echo '        <div id="now__playing__player"></div>' . "\n" . '        ';
goto label146;

label222:

echo '        <video id="video" width="100%" height="100%" src="';
echo $A7ca171405b19571;
goto label145;

label225:

$C082ca9ed03f473c = NULL;

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	if ($Fb9da1713bff19ce['server_id'] == SERVER_ID) {
		goto label243;
	}

	if ($C082ca9ed03f473c) {
		goto label241;
	}

	$C082ca9ed03f473c = $Fb9da1713bff19ce['server_id'];

	label241:

	goto label245;

	label243:

	$C082ca9ed03f473c = $Fb9da1713bff19ce['server_id'];

	label245:

	$Cc9b6078c1293a96 = $Fb9da1713bff19ce['on_demand'];
}

if ($C082ca9ed03f473c) {
	goto label169;
}

exit();
goto label169;

label253:

include 'session.php';
include 'functions.php';

if (isset(XUI::$rRequest['id'])) {
	goto label260;
}

exit();

label260:

goto label61;

label261:

goto label53;

label262:

echo '        var rPlayer = jwplayer("now__playing__player");' . "\n" . '        rPlayer.setup({' . "\n" . '            "file": "';
echo $A7ca171405b19571;
echo '",' . "\n" . '            "type": "';
goto label35;

label266:

goto label273;

label267:

$b62d6460eb33ea07->query('SELECT `server_id`, `on_demand` FROM `streams_servers` WHERE ((`streams_servers`.`monitor_pid` > 0 AND `streams_servers`.`pid` > 0) OR (`streams_servers`.`on_demand` = 1)) AND `stream_id` = ?;', XUI::$rRequest['id']);

label273:

$Cc9b6078c1293a96 = false;
goto label225;

label275:

echo '    });' . "\n" . '    </script>' . "\n" . '</html>';

?>