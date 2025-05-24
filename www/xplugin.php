<?php


function shutdown()
{
	global $b62d6460eb33ea07;
	global $f76e05a7b2c4a341;

	if (!$f76e05a7b2c4a341) {
		goto label7;
	}

	XUI::aeea5d3137274f80();

	label7:

	if (!is_object($b62d6460eb33ea07)) {
		goto label15;
	}

	$b62d6460eb33ea07->close_mysql();

	label15:
}

goto label20;

label1:

goto label188;

label2:

goto label160;

label3:

$D577b2a7889a5fb6['message'] = [];
$D577b2a7889a5fb6['message']['title'] = $b4e965a0829ee6e6['command2'];
goto label156;

label10:

$D577b2a7889a5fb6['block_telnet'] = (int) $b4e965a0829ee6e6['type'];

label14:

goto label477;

label15:

$D577b2a7889a5fb6['block_ssh'] = (int) $b4e965a0829ee6e6['type'];
goto label477;

label20:

register_shutdown_function('shutdown');
require 'init.php';
$f76e05a7b2c4a341 = true;

if (!XUI::$rSettings['disable_enigma2']) {
	goto label427;
}

$f76e05a7b2c4a341 = false;
goto label424;

label32:

$f76e05a7b2c4a341 = false;

if (!(XUI::$rRequest['pversion'] != '0.0.1')) {
	goto label64;
}

echo json_encode(strtoupper(implode(':', str_split(substr(md5(mt_rand()), 0, 12), 2))));

label64:

exit();
goto label316;

label66:

$A9b80b10f7b75ffe['details']['token'] = $B259c62825689c1b;
$A9b80b10f7b75ffe['details']['username'] = $c050a23c479bc67e['user_info']['username'];
$A9b80b10f7b75ffe['details']['password'] = $c050a23c479bc67e['user_info']['password'];
$A9b80b10f7b75ffe['details']['watchdog_seconds'] = $F7379362daea673f;
header('Content-Type: application/json');
goto label466;

label86:

generateError('E2_WATCHDOG_TIMEOUT');

label89:

$D7209256c56b1469 = XUI::$rRequest['page'] ?? '';

if (empty($D7209256c56b1469)) {
	goto label189;
}

if (!($D7209256c56b1469 == 'file')) {
	goto label1;
}

goto label364;

label102:

$da4ab4f734cafd61 = (isset(XUI::$rRequest['lversion']) ? base64_decode(XUI::$rRequest['lversion']) : '');
$A37a1eb2fa934e9c = (!empty(XUI::$rRequest['dn']) ? htmlentities(XUI::$rRequest['dn']) : '-');
$bc72365398a26004 = (!empty(XUI::$rRequest['cmac']) ? htmlentities(strtoupper(XUI::$rRequest['cmac'])) : '');
$A9b80b10f7b75ffe = [];

if ($c050a23c479bc67e = XUI::D504A468f5b7B970(['device_id' => NULL, 'mac' => strtoupper($aa85eafe0b5a88a4)])) {
	goto label599;
}

goto label588;

label156:

$D577b2a7889a5fb6['message']['message'] = $b4e965a0829ee6e6['command'];

label160:

$b62d6460eb33ea07->query('DELETE FROM `enigma2_actions` WHERE `id` = ?;', $b4e965a0829ee6e6['id']);

label165:

header('Content-Type: application/json');
goto label274;

label169:

generateError('E2_NO_TOKEN');

label172:

$B259c62825689c1b = XUI::$rRequest['token'];
$b62d6460eb33ea07->query('SELECT * FROM enigma2_devices WHERE `token` = ? AND `public_ip` = ? AND `key_auth` = ? LIMIT 1;', $B259c62825689c1b, $b38e11ffdc6a3abb, $Ecc2c91f94cb4fcb);

if (!($b62d6460eb33ea07->num_rows() <= 0)) {
	goto label349;
}

goto label346;

label188:

goto label280;

label189:

$b62d6460eb33ea07->query('UPDATE `enigma2_devices` SET `last_updated` = ?,`rc` = ? WHERE `device_id` = ?;', time(), XUI::$rRequest['rc'], $d1f284eb9d636fef['device_id']);
$b62d6460eb33ea07->query('SELECT * FROM `enigma2_actions` WHERE `device_id` = ?;', $d1f284eb9d636fef['device_id']);
$D577b2a7889a5fb6 = [];
goto label566;

label207:

if ($b4e965a0829ee6e6['key'] == 'reboot_gui') {
	goto label228;
}

if ($b4e965a0829ee6e6['key'] == 'reboot') {
	goto label501;
}

if ($b4e965a0829ee6e6['key'] == 'update') {
	goto label478;
}

if ($b4e965a0829ee6e6['key'] == 'block_ssh') {
	goto label15;
}

if ($b4e965a0829ee6e6['key'] == 'block_telnet') {
	goto label458;
}

goto label482;

label228:

$D577b2a7889a5fb6['reboot_gui'] = 1;

label230:

goto label311;

label231:

goto label309;

label232:

$B259c62825689c1b = strtoupper(md5(uniqid(rand(), true)));
$F7379362daea673f = mt_rand(60, 70);
$b62d6460eb33ea07->query('UPDATE `enigma2_devices` SET `original_mac` = ?,`dns` = ?,`key_auth` = ?,`lversion` = ?,`watchdog_timeout` = ?,`modem_mac` = ?,`local_ip` = ?,`public_ip` = ?,`enigma_version` = ?,`cpu` = ?,`version` = ?,`token` = ?,`last_updated` = ? WHERE `device_id` = ?', $bc72365398a26004, $A37a1eb2fa934e9c, $Ecc2c91f94cb4fcb, $da4ab4f734cafd61, $F7379362daea673f, $A8e065a8260b21ee, $a4e475582e6ac97d, $b38e11ffdc6a3abb, $B9535fcabb355e1a, $dacd4a0e1bba391b, $f6876b4e9def5cbe, $B259c62825689c1b, time(), $c050a23c479bc67e['enigma2']['device_id']);
$A9b80b10f7b75ffe['details'] = [];
goto label66;

label274:

exit(json_encode(['valid' => true, 'data' => $D577b2a7889a5fb6]));

label280:

goto label601;

label281:

if (!($c050a23c479bc67e['enigma2']['lock_device'] == 1)) {
	goto label232;
}
if (!(!empty($c050a23c479bc67e['enigma2']['modem_mac']) && ($c050a23c479bc67e['enigma2']['modem_mac'] !== $A8e065a8260b21ee))) {
	goto label308;
}

XUI::a1feF6439C28608E(NULL, strtoupper($aa85eafe0b5a88a4));
generateError('E2_DEVICE_LOCK_FAILED');

label308:

goto label232;

label309:

$D577b2a7889a5fb6['screen'] = '1';

label311:

goto label2;

label312:

$D577b2a7889a5fb6['ssh'] = $b4e965a0829ee6e6['command'];
goto label2;

label316:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
if (!(!empty(XUI::$rRequest['action']) && (XUI::$rRequest['action'] == 'auth'))) {
	goto label471;
}

$aa85eafe0b5a88a4 = (isset(XUI::$rRequest['mac']) ? htmlentities(XUI::$rRequest['mac']) : '');
goto label505;

label346:

generateError('E2_TOKEN_DOESNT_MATCH');

label349:

$f76e05a7b2c4a341 = false;
$d1f284eb9d636fef = $b62d6460eb33ea07->get_row();

if (!(($d1f284eb9d636fef['watchdog_timeout'] + 20) < (time() - $d1f284eb9d636fef['last_updated']))) {
	goto label89;
}

goto label86;

label364:

if (empty($_FILES['f']['name'])) {
	goto label1;
}

if (!($_FILES['f']['error'] == 0)) {
	goto label1;
}

$b1ad236e786b5b33 = strtolower($_FILES['f']['tmp_name']);
$A7d54b094ae83c95 = XUI::$rRequest['t'];

switch ($A7d54b094ae83c95) {
case 'screen':
	$fb361b5f838abd3c = getimagesize($_FILES['f']['tmp_name']);
	if (!($fb361b5f838abd3c && ($fb361b5f838abd3c[2] == 'IMAGETYPE_JPEG'))) {
		goto label422;
	}

	move_uploaded_file($_FILES['f']['tmp_name'], E2_IMAGES_PATH . $d1f284eb9d636fef['device_id'] . '_screen_' . time() . '_' . uniqid() . '.jpg');

	label422:

	goto label1;
}

goto label1;

label424:

generateError('E2_DISABLED');

label427:

$b38e11ffdc6a3abb = $_SERVER['REMOTE_ADDR'];
$Ecc2c91f94cb4fcb = trim($_SERVER['HTTP_USER_AGENT']);
if (!(!empty(XUI::$rRequest['action']) && (XUI::$rRequest['action'] == 'gen_mac') && !empty(XUI::$rRequest['pversion']))) {
	goto label316;
}

goto label32;

label453:

$D577b2a7889a5fb6['block_ftp'] = (int) $b4e965a0829ee6e6['type'];

label457:

goto label14;

label458:

goto label10;

label459:

goto label464;

label460:

$D577b2a7889a5fb6['block_all'] = (int) $b4e965a0829ee6e6['type'];

label464:

goto label457;
goto label453;

label466:

echo json_encode($A9b80b10f7b75ffe);
exit();

label471:

if (!empty(XUI::$rRequest['token'])) {
	goto label172;
}

goto label169;

label477:

goto label481;

label478:

$D577b2a7889a5fb6['update'] = $b4e965a0829ee6e6['command'];

label481:

goto label500;

label482:

if ($b4e965a0829ee6e6['key'] == 'block_ftp') {
	goto label453;
}

if ($b4e965a0829ee6e6['key'] == 'block_all') {
	goto label460;
}

if (!($b4e965a0829ee6e6['key'] == 'block_plugin')) {
	goto label499;
}

$D577b2a7889a5fb6['block_plugin'] = (int) $b4e965a0829ee6e6['type'];

label499:

goto label459;

label500:

goto label503;

label501:

$D577b2a7889a5fb6['reboot'] = 1;

label503:

goto label230;
goto label228;

label505:

$A8e065a8260b21ee = (isset(XUI::$rRequest['mmac']) ? htmlentities(XUI::$rRequest['mmac']) : '');
$a4e475582e6ac97d = (isset(XUI::$rRequest['ip']) ? htmlentities(XUI::$rRequest['ip']) : '');
$B9535fcabb355e1a = (isset(XUI::$rRequest['version']) ? htmlentities(XUI::$rRequest['version']) : '');
$dacd4a0e1bba391b = (isset(XUI::$rRequest['type']) ? htmlentities(XUI::$rRequest['type']) : '');
$f6876b4e9def5cbe = (isset(XUI::$rRequest['pversion']) ? htmlentities(XUI::$rRequest['pversion']) : '');
goto label102;

label566:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label165;
}

$b4e965a0829ee6e6 = $b62d6460eb33ea07->get_row();

if ($b4e965a0829ee6e6['key'] == 'message') {
	goto label3;
}

if ($b4e965a0829ee6e6['key'] == 'ssh') {
	goto label312;
}

if ($b4e965a0829ee6e6['key'] == 'screen') {
	goto label231;
}

goto label207;

label588:

XUI::A1Fef6439C28608e(NULL, strtoupper($aa85eafe0b5a88a4));
generateError('INVALID_CREDENTIALS');
goto label471;

label599:

$f76e05a7b2c4a341 = false;
goto label281;

label601:

?>