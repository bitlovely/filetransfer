<?php


function ed28Cb44bc386D46()
{
	$Ed3ae7262e121bb3 = 0;
	exec('ps -fp $(pgrep -u xui)', $d094d3e133ec8c03, $ced57d71bc7400ec);

	foreach ($d094d3e133ec8c03 as $d0bf680e3271ee34) {
		$E3665d09b9cea208 = explode(' ', preg_replace('!\\s+!', ' ', trim($d0bf680e3271ee34)));
		if (!(($E3665d09b9cea208[8] == 'nginx:') && ($E3665d09b9cea208[9] == 'master'))) {
			goto label33;
		}

		$Ed3ae7262e121bb3++;

		label33:
	}

	return 0 < $Ed3ae7262e121bb3;
}

goto label104;

label1:

goto label248;

label2:

$e5bebfb39a19fe80 = intval(explode(';', explode(' ', trim(explode('listen ', file_get_contents('/home/xui/bin/nginx/conf/ports/http.conf'))[1]))[0])[0]) ?: 80;
$Dbdc22406030e489 = Xui\Functions::updateLicense('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $e5bebfb39a19fe80);

if ($Dbdc22406030e489['status']) {
	goto label47;
}

echo 'Failed to generate license! Error: ' . $Dbdc22406030e489['error'] . "\n";
exit();
goto label46;

label46:

goto label48;

label47:

echo 'Updated XUI License' . "\n";

label48:

goto label49;

label49:

if (Xui\Functions::verifyLicense()) {
	goto label56;
}

echo 'License is invalid.' . "\n";
exit();
goto label1;

label56:

goto label190;

label57:
if (is_array($B8630a7c92543099) && $B8630a7c92543099['version'] && ((0 < version_compare($B8630a7c92543099['version'], XUI_VERSION)) || ((version_compare($B8630a7c92543099['version'], XUI_VERSION) == 0) && (intval(XUI_REVISION) < intval($B8630a7c92543099['revision']))))) {
	goto label102;
}

$b62d6460eb33ea07->query('UPDATE `settings` SET `update_data` = NULL, `reissues` = ?;', json_encode($b7a2be4a9b9c6aad));
goto label1;

label102:

echo 'Update is available!' . "\n";
goto label122;

label104:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label115;
}

exit('Please run as XUI!' . "\n");

label115:

if (@$argc) {
	goto label164;
}

exit(0);
goto label164;

label122:

$b5623b9e0e1b77f8 = [];

foreach ($B8630a7c92543099['changelog'] as $B4a603c2a57d3acf) {
	if (!(($B4a603c2a57d3acf['version'] == XUI_VERSION) && (intval($B4a603c2a57d3acf['revision']) <= intval(XUI_REVISION)))) {
		goto label146;
	}

	goto label150;

	label146:

	$b5623b9e0e1b77f8[] = $B4a603c2a57d3acf;
}

label150:

$B8630a7c92543099['changelog'] = $b5623b9e0e1b77f8;
$b62d6460eb33ea07->query('UPDATE `settings` SET `update_data` = ?, `reissues` = ?;', json_encode($B8630a7c92543099), json_encode($b7a2be4a9b9c6aad));
goto label1;

label164:

if (!ed28cb44bc386d46()) {
	goto label248;
}

$a998abd856b07a59 = parse_ini_string(file_get_contents('/home/xui/config/config.ini'));
if (!($a998abd856b07a59['license'] && (!isset($a998abd856b07a59['is_lb']) || !$a998abd856b07a59['is_lb']))) {
	goto label48;
}

goto label2;

label190:

$ba2d146bb5a55097 = Xui\Functions::getLicense('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
echo 'License is valid, expires: ' . gmdate('Y-m-d', $ba2d146bb5a55097[3]) . "\n";
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
$b7a2be4a9b9c6aad = Xui\Functions::checkReissues('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
$B8630a7c92543099 = json_decode(str_replace('<', '&lt;', str_replace('>', '&gt;', file_get_contents('https://update.xui.one/update' . (XUI_BETA ? '_beta' : '') . '.json', false, stream_context_create([
	'http' => ['timeout' => 5]
])))), true);
goto label57;

label248:

?>