<?php


function Ed8dbF4549416fa2()
{
	goto label177;

	label1:

	if (!is_array($Aa1ed9476fca75e9)) {
		goto label147;
	}

	foreach ($Aa1ed9476fca75e9['files'] as $D6be258a9043b749) {
		goto label108;

		label12:

		$ab701fbbd66214d9 = curl_init();
		curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $cd1012bfb33df5d5 . $D6be258a9043b749['md5']);
		curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ab701fbbd66214d9, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ab701fbbd66214d9, CURLOPT_TIMEOUT, 300);
		goto label46;

		label43:

		$f79030b7c8fd8a77 = true;

		label44:

		goto label145;

		label46:

		$ba2d146bb5a55097 = curl_exec($ab701fbbd66214d9);
		$Cd8e1820d4075a5c = md5($ba2d146bb5a55097);

		if (!($D6be258a9043b749['md5'] == $Cd8e1820d4075a5c)) {
			goto label44;
		}

		echo 'Updated binary: ' . $D6be258a9043b749['path'] . "\n";
		shell_exec('sudo rm -rf "' . $D6be258a9043b749['path'] . '"');
		goto label72;

		label72:

		file_put_contents($D6be258a9043b749['path'], $ba2d146bb5a55097);
		shell_exec('sudo chown xui:xui "' . $D6be258a9043b749['path'] . '"');
		shell_exec('sudo chmod ' . $db0a61ef32b89a27 . ' "' . $D6be258a9043b749['path'] . '"');
		$C43a906501e17594 = true;

		if (!(substr(basename($D6be258a9043b749['path']), 0, 3) == 'php')) {
			goto label44;
		}

		goto label43;

		label108:
		if (!(!file_exists($D6be258a9043b749['path']) || (md5_file($D6be258a9043b749['path']) != $D6be258a9043b749['md5']))) {
			goto label44;
		}

		$d1c40c8afabdbeba = pathinfo($D6be258a9043b749['path'])['dirname'] . '/';

		if (file_exists($d1c40c8afabdbeba)) {
			goto label143;
		}

		shell_exec('sudo mkdir -p "' . $d1c40c8afabdbeba . '"');

		label143:

		goto label12;

		label145:
	}

	label147:

	if (!$C43a906501e17594) {
		goto label251;
	}

	goto label246;

	label151:

	$f79030b7c8fd8a77 = $C43a906501e17594 = false;
	exec('sudo lsb_release -r -s', $Cc60421df201fddd);
	$Aa1ed9476fca75e9 = json_decode(file_get_contents(($cd1012bfb33df5d5 . '?version=' . XUI_VERSION . '&ubv=' . floatval($Cc60421df201fddd[0])) ?: ''), true);
	goto label1;

	label177:

	global $cd1012bfb33df5d5;
	global $db0a61ef32b89a27;
	global $d240a42146d16fcc;

	if (!shell_exec('which apparmor_status')) {
		goto label151;
	}

	exec('sudo apparmor_status', $e8246dbb3f29ff7d);

	if (!(strtolower(trim($e8246dbb3f29ff7d[0])) == 'apparmor module is loaded.')) {
		goto label151;
	}

	exec('sudo systemctl is-active apparmor', $b9f049445aa9bd5d);
	goto label227;

	label206:

	shell_exec('sudo ln -sfn ' . BIN_PATH . 'php/sbin/php-fpm_' . $B46d13165b878130 . ' ' . BIN_PATH . 'php/sbin/php-fpm');
	shell_exec('sudo chown -R xui:xui ' . BIN_PATH . 'php');
	shell_exec('sudo service xuione restart');

	label226:

	goto label273;

	label227:

	if (!(strtolower(trim($b9f049445aa9bd5d[0])) == 'active')) {
		goto label245;
	}

	echo 'AppArmor is loaded! Disabling...' . "\n";
	shell_exec('sudo systemctl stop apparmor');
	shell_exec('sudo systemctl disable apparmor');

	label245:

	goto label151;

	label246:

	shell_exec('sudo chown -R xui:xui "' . $d240a42146d16fcc . '"');

	label251:

	if (!$f79030b7c8fd8a77) {
		goto label226;
	}

	$B46d13165b878130 = [72 => '7.2', 74 => '7.4'][XUI::$rServers[SERVER_ID]['php_version']] ?: '7.4';
	shell_exec('sudo ln -sfn ' . PHP_BIN . '_' . $B46d13165b878130 . ' ' . PHP_BIN);
	goto label206;

	label273:
}

function shutdown()
{
	global $b62d6460eb33ea07;

	if (!is_object($b62d6460eb33ea07)) {
		goto label9;
	}

	$b62d6460eb33ea07->close_mysql();

	label9:
}

goto label1;

label1:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'root')) {
	goto label12;
}

exit('Please run as root!' . "\n");

label12:

if (@$argc) {
	goto label19;
}

exit(0);
goto label19;

label19:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
$d240a42146d16fcc = '/home/xui/bin/';
$cd1012bfb33df5d5 = 'https://update.xui.one/binaries/';
goto label36;

label36:

$db0a61ef32b89a27 = '0755';
ed8dbf4549416fa2();
goto label41;

label41:

?>