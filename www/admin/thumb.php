<?php


function shutdown()
{
	global $b62d6460eb33ea07;

	if (!is_object($b62d6460eb33ea07)) {
		goto label9;
	}

	$b62d6460eb33ea07->close_mysql();

	label9:
}

goto label190;

label1:

if (SERVER_ID == $fe93a43f53d92a4e['vframes_server_id']) {
	goto label165;
}

$A7ca171405b19571 = XUI::$rServers[$fe93a43f53d92a4e['vframes_server_id']]['site_url'];
header('Location: ' . $A7ca171405b19571 . 'admin/thumb?stream=' . $ee6d1fc5d801b43f . '&aid=' . intval(XUI::$rRequest['aid']) . '&uitoken=' . urlencode(XUI::$rRequest['uitoken']) . '&expires=' . intval(XUI::$rRequest['expires']));
exit();
goto label189;
goto label165;

label41:

if (!empty(XUI::$rRequest['uitoken'])) {
	goto label49;
}

F82199eff9017BC9();
goto label65;

label49:

$D8713f4c40d502da = json_decode(Xui\Functions::decrypt(XUI::$rRequest['uitoken'], XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA), true);
goto label79;

label65:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
$ee6d1fc5d801b43f = intval(XUI::$rRequest['stream']);
$fe93a43f53d92a4e = [];
goto label204;

label79:

XUI::$rRequest['stream'] = $D8713f4c40d502da['stream_id'];
$Ed48a28037cd1e3e = (XUI::$rSettings['ip_subnet_match'] ? implode('.', array_slice(explode('.', $D8713f4c40d502da['ip']), 0, -1)) == implode('.', array_slice(explode('.', XUI::aD72b4259Ca295B2()), 0, -1)) : $D8713f4c40d502da['ip'] == XUI::Ad72b4259cA295B2());
if (!(($D8713f4c40d502da['expires'] < time()) || !$Ed48a28037cd1e3e)) {
	goto label136;
}

f82199EfF9017Bc9();

label136:

goto label65;

label137:

header('Age: ' . intval(time() - filemtime(STREAMS_PATH . $ee6d1fc5d801b43f . '_.jpg')));
header('Content-type: image/jpg');
echo file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.jpg');
exit();

label164:

goto label189;

label165:
if (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.jpg') && ((time() - filemtime(STREAMS_PATH . $ee6d1fc5d801b43f . '_.jpg')) < 60)) {
	goto label188;
}

F82199eff9017bC9();
goto label164;

label188:

goto label137;

label189:

goto label220;

label190:

register_shutdown_function('shutdown');
header('Access-Control-Allow-Origin: *');
set_time_limit(0);
require '../init.php';
$b38e11ffdc6a3abb = XUI::Ad72B4259ca295b2();
goto label41;

label204:

$b62d6460eb33ea07->query('SELECT * FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type AND t2.live = 1 LEFT JOIN `profiles` t4 ON t1.transcode_profile_id = t4.profile_id WHERE t1.direct_source = 0 AND t1.id = ?', $ee6d1fc5d801b43f);

if (!($b62d6460eb33ea07->num_rows() <= 0)) {
	goto label216;
}

F82199efF9017Bc9();

label216:

$fe93a43f53d92a4e = $b62d6460eb33ea07->get_row();
goto label1;

label220:

?>