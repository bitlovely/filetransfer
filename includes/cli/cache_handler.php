<?php


goto label46;

label1:

set_time_limit(0);
$C98e11437faf4199 = getmypid();
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
shell_exec('kill -9 $(ps aux | grep cache_handler | grep -v grep | grep -v ' . $C98e11437faf4199 . ' | awk \'{print $2}\')');
goto label24;

label24:

$f8bd5a091fcdba80 = NULL;
$Df19f1dc3a6ffd8b = 60;
$Cd8e1820d4075a5c = md5_file(__FILE__);
XUI::$rSettings = XUI::AC49B56dbE10E52c(true);

if (XUI::$rSettings['enable_cache']) {
	goto label42;
}

goto label40;

label40:

echo 'Cache disabled.' . "\n";
exit();

label42:

if (false) {
	goto label325;
}

goto label64;

label45:

goto label334;

label46:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label57;
}

exit('Please run as XUI!' . "\n");

label57:

if (@$argc) {
	goto label1;
}

exit(0);
goto label1;

label64:

try {
	goto label66;

	label66:

	if ($b62d6460eb33ea07->ping()) {
		goto label71;
	}

	goto label325;

	label71:
	if (!(!$f8bd5a091fcdba80 || ($Df19f1dc3a6ffd8b <= time() - $f8bd5a091fcdba80))) {
		goto label112;
	}

	XUI::$rSettings = XUI::ac49b56DBe10E52C(true);
	goto label100;

	label87:

	if (!(md5_file(__FILE__) != $Cd8e1820d4075a5c)) {
		goto label96;
	}

	echo 'File changed! Break.' . "\n";
	goto label325;

	label96:

	$f8bd5a091fcdba80 = time();
	goto label112;

	label100:

	XUI::$rServers = XUI::f76008F8DfE1898C(true);

	if (XUI::$rSettings['enable_cache']) {
		goto label111;
	}

	echo 'Cache disabled! Break.' . "\n";
	goto label325;

	label111:

	goto label87;

	label112:

	$d2c58080f592907c = [];

	foreach (glob(SIGNALS_TMP_PATH . 'cache_*') as $d648c9c0657a6792) {
		list($Bb672d1983256a93, $ba2d146bb5a55097) = json_decode(file_get_contents($d648c9c0657a6792), true);
		$Be3c637a16a727b1 = explode('/', $Bb672d1983256a93)[0];

		switch ($Be3c637a16a727b1) {
		case 'restream_block_user':
			list($c6a176dd37ce65dd, $f7107e3a92443147, $ee6d1fc5d801b43f, $b38e11ffdc6a3abb) = explode('/', $Bb672d1983256a93);
			$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;', $f7107e3a92443147);
			$b62d6460eb33ea07->query('INSERT INTO `detect_restream_logs`(`user_id`, `stream_id`, `ip`, `time`) VALUES(?, ?, ?, ?);', $f7107e3a92443147, $ee6d1fc5d801b43f, $b38e11ffdc6a3abb, time());
			$d2c58080f592907c[] = $f7107e3a92443147;
			goto label299;
		case 'forced_country':
			$f7107e3a92443147 = intval(explode('/', $Bb672d1983256a93)[1]);
			$b62d6460eb33ea07->query('UPDATE `lines` SET `forced_country` = ? WHERE `id` = ?', $ba2d146bb5a55097, $f7107e3a92443147);
			$d2c58080f592907c[] = $f7107e3a92443147;
			goto label299;
		case 'isp':
			$f7107e3a92443147 = intval(explode('/', $Bb672d1983256a93)[1]);
			$Ba64c50a2f01beb8 = json_decode($ba2d146bb5a55097, true);
			$b62d6460eb33ea07->query('UPDATE `lines` SET `isp_desc` = ?, `as_number` = ? WHERE `id` = ?', $Ba64c50a2f01beb8[0], $Ba64c50a2f01beb8[1], $f7107e3a92443147);
			$d2c58080f592907c[] = $f7107e3a92443147;
			goto label299;
		case 'expiring':
			$f7107e3a92443147 = intval(explode('/', $Bb672d1983256a93)[1]);
			$b62d6460eb33ea07->query('UPDATE `lines` SET `last_expiration_video` = ? WHERE `id` = ?;', time(), $f7107e3a92443147);
			$d2c58080f592907c[] = $f7107e3a92443147;
			goto label299;
		case 'flood_attack':
			list($c6a176dd37ce65dd, $b38e11ffdc6a3abb) = explode('/', $Bb672d1983256a93);
			$b62d6460eb33ea07->query('INSERT INTO `blocked_ips` (`ip`,`notes`,`date`) VALUES(?,?,?)', $b38e11ffdc6a3abb, 'FLOOD ATTACK', time());
			touch(FLOOD_TMP_PATH . 'block_' . $b38e11ffdc6a3abb);
			goto label299;
		case 'bruteforce_attack':
			list($c6a176dd37ce65dd, $b38e11ffdc6a3abb) = explode('/', $Bb672d1983256a93);
			$b62d6460eb33ea07->query('INSERT INTO `blocked_ips` (`ip`,`notes`,`date`) VALUES(?,?,?)', $b38e11ffdc6a3abb, 'BRUTEFORCE ATTACK', time());
			touch(FLOOD_TMP_PATH . 'block_' . $b38e11ffdc6a3abb);
			goto label299;
		}

		label299:

		unlink($d648c9c0657a6792);
	}

	$d2c58080f592907c = array_unique($d2c58080f592907c);
	goto label309;

	label309:

	foreach ($d2c58080f592907c as $f7107e3a92443147) {
		XUI::cCb5075c679E7314($f7107e3a92443147);
	}

	sleep(1);
	goto label320;
}
catch (Exception $E0f0519e12b13b6b) {
	echo 'Error!' . "\n";
	goto label325;
}

goto label42;

label325:

if (!is_object($b62d6460eb33ea07)) {
	goto label45;
}

$b62d6460eb33ea07->close_mysql();
goto label45;

label334:

shell_exec('(sleep 1; ' . PHP_BIN . ' ' . __FILE__ . ' ) > /dev/null 2>/dev/null &');

?>