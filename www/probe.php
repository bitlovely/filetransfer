<?php


function shutdown()
{
	if (!is_object(XUI::$db)) {
		goto label10;
	}

	XUI::$db->close_mysql();

	label10:
}

goto label314;

label1:

goto label246;

label2:

if ($ee6d1fc5d801b43f) {
	goto label143;
}

goto label159;

label5:

$ee6d1fc5d801b43f = intval($ba2d146bb5a55097[3]);
$E59d0debc75e7be8 = XUI::cC988751EeBbF271(NULL, $ba2d146bb5a55097[1], $ba2d146bb5a55097[2], true);

label19:

goto label292;

label20:

if ($ee6d1fc5d801b43f) {
	goto label289;
}

$B91645b8411dc88c = '/\\/(.*)\\/(.*)\\/(\\d+)\\.(.*)$/m';
preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 5)) {
	goto label289;
}

goto label275;

label36:

$ee6d1fc5d801b43f = intval($ba2d146bb5a55097['stream_id']);
$E59d0debc75e7be8 = XUI::cc988751eEbbf271(NULL, $ba2d146bb5a55097['username'], $ba2d146bb5a55097['password'], true);

label50:

if ($ee6d1fc5d801b43f) {
	goto label19;
}

goto label213;

label53:

preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 4)) {
	goto label79;
}

$ee6d1fc5d801b43f = intval($Ac97fb1939417214[3]);
$E59d0debc75e7be8 = XUI::cc988751EEBBf271(NULL, $Ac97fb1939417214[1], $Ac97fb1939417214[2], true);

label79:

goto label1;

label80:

if ($ee6d1fc5d801b43f) {
	goto label50;
}

$B91645b8411dc88c = '/\\/auth\\/(.*)$/m';
preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 2)) {
	goto label50;
}

$ba2d146bb5a55097 = json_decode(Xui\Functions::decrypt($Ac97fb1939417214[1], XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA), true);
goto label36;

label110:

if (!($E59d0debc75e7be8['admin_enabled'] == 0)) {
	goto label117;
}

F82199EFf9017bc9();

label117:

if (!($E59d0debc75e7be8['enabled'] == 0)) {
	goto label144;
}

F82199eFf9017BC9();
goto label144;

label125:

exit();

label126:

f82199eFF9017bC9();
goto label491;

label129:

$ee6d1fc5d801b43f = intval($ba2d146bb5a55097[3]);
$E59d0debc75e7be8 = XUI::cC988751EEBbf271(NULL, $ba2d146bb5a55097[1], $ba2d146bb5a55097[2], true);

label143:

goto label408;

label144:

if ($E59d0debc75e7be8['is_restreamer']) {
	goto label149;
}

f82199EFF9017bC9();

label149:

$Bf9899a172ecff52 = XUI::f520B2272cdE299c($ee6d1fc5d801b43f, 'ts', $E59d0debc75e7be8, NULL, '', 'live');
goto label429;

label159:

$B91645b8411dc88c = '/\\/play\\/(.*)\\/(.*)$/m';
preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 3)) {
	goto label143;
}

$ba2d146bb5a55097 = explode('/', Xui\Functions::decrypt($Ac97fb1939417214[1], XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA));

if (!($ba2d146bb5a55097[0] == 'live')) {
	goto label143;
}

goto label129;

label192:

$e21fe0c575cd9a6e = count(explode('/', $E111d28e9acc50b9));
$E59d0debc75e7be8 = $ee6d1fc5d801b43f = NULL;

if ($e21fe0c575cd9a6e == 3) {
	goto label247;
}

if ($e21fe0c575cd9a6e == 4) {
	goto label2;
}

if (!($e21fe0c575cd9a6e == 5)) {
	goto label1;
}

goto label333;

label213:

$B91645b8411dc88c = '/\\/play\\/(.*)$/m';
preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 2)) {
	goto label19;
}

$ba2d146bb5a55097 = explode('/', Xui\Functions::decrypt($Ac97fb1939417214[1], XUI::$rSettings['live_streaming_pass'], OPENSSL_EXTRA));

if (!($ba2d146bb5a55097[0] == 'live')) {
	goto label19;
}

goto label5;

label246:

goto label292;

label247:

goto label80;

label248:
if (!((0 < $Bf9899a172ecff52['monitor_pid']) && (0 < $Bf9899a172ecff52['pid']) && (XUI::$rServers[$C082ca9ed03f473c]['last_status'] == 1))) {
	goto label126;
}

if (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.stream_info')) {
	goto label443;
}

$fb361b5f838abd3c = $Bf9899a172ecff52['stream_info'];
goto label450;
goto label443;

label275:

$ee6d1fc5d801b43f = intval($Ac97fb1939417214[3]);
$E59d0debc75e7be8 = XUI::cc988751eEbbf271(NULL, $Ac97fb1939417214[1], $Ac97fb1939417214[2], true);

label289:

if ($ee6d1fc5d801b43f) {
	goto label246;
}

goto label380;

label292:
if (!($ee6d1fc5d801b43f && $E59d0debc75e7be8)) {
	goto label126;
}
if (!(!is_null($E59d0debc75e7be8['exp_date']) && ($E59d0debc75e7be8['exp_date'] <= time()))) {
	goto label313;
}

F82199EfF9017bC9();

label313:

goto label110;

label314:

register_shutdown_function('shutdown');
include './stream/init.php';

if (!isset(XUI::$rRequest['data'])) {
	goto label126;
}

$b38e11ffdc6a3abb = XUI::ad72b4259cA295b2();
$E111d28e9acc50b9 = base64_decode(XUI::$rRequest['data']);
goto label192;

label333:

if ($ee6d1fc5d801b43f) {
	goto label487;
}

$B91645b8411dc88c = '/\\/live\\/(.*)\\/(.*)\\/(\\d+)\\.(.*)$/m';
preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 5)) {
	goto label487;
}

$ee6d1fc5d801b43f = intval($Ac97fb1939417214[3]);
goto label478;

label354:

preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 4)) {
	goto label379;
}

$ee6d1fc5d801b43f = intval($Ac97fb1939417214[2]);
$E59d0debc75e7be8 = XUI::cC988751EEBBf271(NULL, $Ac97fb1939417214[1], NULL, true);

label379:

goto label20;

label380:

$B91645b8411dc88c = '/\\/(.*)\\/(.*)\\/(\\d+)$/m';
preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 4)) {
	goto label246;
}

$ee6d1fc5d801b43f = intval($Ac97fb1939417214[3]);
$E59d0debc75e7be8 = XUI::cC988751EebbF271(NULL, $Ac97fb1939417214[1], $Ac97fb1939417214[2], true);
goto label246;

label408:

if ($ee6d1fc5d801b43f) {
	goto label474;
}

$B91645b8411dc88c = '/\\/live\\/(.*)\\/(\\d+)$/m';
preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

if (!(count($Ac97fb1939417214) == 3)) {
	goto label474;
}

$ee6d1fc5d801b43f = intval($Ac97fb1939417214[2]);
goto label466;

label429:
if (isset($Bf9899a172ecff52['redirect_id']) && ($Bf9899a172ecff52['redirect_id'] != SERVER_ID)) {
	goto label440;
}

$C082ca9ed03f473c = SERVER_ID;
goto label248;

label440:

$C082ca9ed03f473c = $Bf9899a172ecff52['redirect_id'];
goto label248;

label443:

$fb361b5f838abd3c = file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.stream_info');

label450:

$fb361b5f838abd3c = json_decode($fb361b5f838abd3c, true);
echo json_encode(['codecs' => $fb361b5f838abd3c['codecs'], 'container' => $fb361b5f838abd3c['container'], 'bitrate' => $fb361b5f838abd3c['bitrate']]);
goto label125;

label466:

$E59d0debc75e7be8 = XUI::CC988751eebBf271(NULL, $Ac97fb1939417214[1], NULL, true);

label474:

if ($ee6d1fc5d801b43f) {
	goto label20;
}

$B91645b8411dc88c = '/\\/live\\/(.*)\\/(\\d+)\\.(.*)$/m';
goto label354;

label478:

$E59d0debc75e7be8 = XUI::cc988751EEBBF271(NULL, $Ac97fb1939417214[1], $Ac97fb1939417214[2], true);

label487:

if ($ee6d1fc5d801b43f) {
	goto label1;
}

$B91645b8411dc88c = '/\\/live\\/(.*)\\/(.*)\\/(\\d+)$/m';
goto label53;

label491:

?>