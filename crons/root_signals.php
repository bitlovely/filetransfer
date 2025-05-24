<?php


function Ab8369074Df2aAa3()
{
	goto label1613;

	label1:

	if (XUI::$rServers[SERVER_ID]['use_disk']) {
		goto label1655;
	}

	if ($b9a4826fd314adfe) {
		goto label17;
	}

	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'enable_ramdisk'])]);

	label17:

	goto label1654;

	label18:

	file_put_contents(BIN_PATH . 'nginx/conf/gzip.conf', 'gzip off;');
	$b0663135b9a59341 = true;

	label25:

	goto label1716;

	label26:

	goto label1447;

	label27:

	foreach (array_count_values($aa5e9504f19a58fe) as $b38e11ffdc6a3abb => $d353a4da8a0bb857) {
		if (!(1 < $d353a4da8a0bb857)) {
			goto label51;
		}

		echo $d353a4da8a0bb857 . "\n";

		foreach (range(1, $d353a4da8a0bb857 - 1) as $df6991d59f367c7e) {
			$be078c1ca44bbc2d[] = $b38e11ffdc6a3abb;
		}

		label51:
	}

	foreach ($c5feeca020e7bf5c as $b38e11ffdc6a3abb) {
		if (isset($e548609ccd7a89df[$b38e11ffdc6a3abb])) {
			goto label61;
		}

		$Fbf98624ba77dcaa[] = $b38e11ffdc6a3abb;

		label61:
	}

	foreach ($aa5e9504f19a58fe as $b38e11ffdc6a3abb) {
		if (isset($A3b5d011981d1568[$b38e11ffdc6a3abb])) {
			goto label71;
		}

		$be078c1ca44bbc2d[] = $b38e11ffdc6a3abb;

		label71:
	}

	goto label1989;

	label74:

	$b0663135b9a59341 = true;

	label75:

	goto label1252;

	label76:

	if (!empty($Bc5840c75ae6b805)) {
		goto label1252;
	}

	goto label1244;

	label81:

	$Fca04b1755da7bd5 = curl_exec($e23e1b2beefc1001);
	$E28b12c74d51f0b0 = curl_getinfo($e23e1b2beefc1001, CURLINFO_HTTP_CODE);

	if (!in_array($E28b12c74d51f0b0, [500, 502])) {
		goto label1674;
	}

	echo $E28b12c74d51f0b0 . ' ERROR - Restarting...';
	$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'PHP-FPM\', \'Restarted services due to ' . $E28b12c74d51f0b0 . ' error.\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
	goto label1667;

	label113:

	$Bc5840c75ae6b805 = trim(file_get_contents(BIN_PATH . 'nginx/conf/realip_cloudflare.conf')) ?: '';

	if (XUI::$rSettings['cloudflare']) {
		goto label76;
	}

	if (empty($Bc5840c75ae6b805)) {
		goto label75;
	}

	echo 'Disabling Cloudflare...' . "\n";
	file_put_contents(BIN_PATH . 'nginx/conf/realip_cloudflare.conf', '');
	goto label74;

	label139:

	if (!$a6691616d494dd58['ramdisk']) {
		goto label2114;
	}

	$b9a4826fd314adfe = false;
	exec('df -h', $d6fbf2cdbc7895f2);
	array_shift($d6fbf2cdbc7895f2);

	foreach ($d6fbf2cdbc7895f2 as $F5ba2106d5227309) {
		$E3665d09b9cea208 = explode(' ', preg_replace('!\\s+!', ' ', trim($F5ba2106d5227309)));

		if (!(implode(' ', array_slice($E3665d09b9cea208, 5, count($E3665d09b9cea208) - 5)) == rtrim(STREAMS_PATH, '/'))) {
			goto label192;
		}

		$b9a4826fd314adfe = true;
		goto label1;

		label192:
	}

	goto label1;

	label195:

	if (!(('listen ' . intval(XUI::$rServers[SERVER_ID]['rtmp_port']) . ';') != trim(file_get_contents(XUI_HOME . 'bin/nginx_rtmp/conf/port.conf')))) {
		goto label236;
	}

	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode([
		'action' => 'set_port',
		'type'   => 2,
		'ports'  => [intval(XUI::$rServers[SERVER_ID]['rtmp_port'])],
		'reload' => true
	])]);

	label236:

	goto label139;

	label237:

	$e548609ccd7a89df = array_flip($aa5e9504f19a58fe);
	$b62d6460eb33ea07->query('SELECT `ip` FROM `blocked_ips`;');
	$c5feeca020e7bf5c = array_keys($b62d6460eb33ea07->get_rows(true, 'ip'));
	$A3b5d011981d1568 = array_flip($c5feeca020e7bf5c);
	$Fbf98624ba77dcaa = $be078c1ca44bbc2d = [];
	goto label27;

	label259:

	if (!($Ef1173e70110cfda == 0)) {
		goto label1317;
	}

	echo 'PHP-FPM ERROR - Restarting...';
	$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'PHP-FPM\', \'Restarted PHP-FPM instances due to a suspected crash.\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
	shell_exec('sudo systemctl stop xuione');
	shell_exec('sudo systemctl start xuione');
	goto label1316;

	label279:

	if (!$b19d07dcd248e701) {
		goto label285;
	}

	B33B2d13A0e185AA();
	$b19d07dcd248e701 = false;

	label285:

	goto label1647;

	label286:

	if (!(0 < count($D8e7681dfae2905b))) {
		goto label1334;
	}

	foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
		$ba2d146bb5a55097 = json_decode($Fb9da1713bff19ce['custom_data'], true);

		if (!$Fb9da1713bff19ce['signal_id']) {
			goto label311;
		}

		$b62d6460eb33ea07->query('DELETE FROM `signals` WHERE `signal_id` = ?;', $Fb9da1713bff19ce['signal_id']);

		label311:

		switch ($ba2d146bb5a55097['action']) {
		case 'reboot':
			echo 'Rebooting system...' . "\n";
			$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'REBOOT\', \'System rebooted on request.\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
			$b62d6460eb33ea07->close_mysql();
			shell_exec('sudo reboot');
			goto label1241;
		case 'restart_services':
			echo 'Restarting services...' . "\n";
			$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'RESTART\', \'XUI services restarted on request.\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
			shell_exec('sudo systemctl stop xuione');
			shell_exec('sudo systemctl start xuione');
			goto label1241;
		case 'stop_services':
			echo 'Stopping services...' . "\n";
			$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'STOP\', \'XUI services stopped on request.\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
			shell_exec('sudo systemctl stop xuione');
			goto label1241;
		case 'reload_nginx':
			echo 'Reloading nginx...' . "\n";
			$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'RELOAD\', \'NGINX services reloaded on request.\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
			shell_exec('sudo ' . BIN_PATH . 'nginx_rtmp/sbin/nginx_rtmp -s reload');
			shell_exec('sudo ' . BIN_PATH . 'nginx/sbin/nginx -s reload');
			goto label1241;
		case 'disable_ramdisk':
			echo 'Disabling ramdisk...' . "\n";
			$Bcd51fbbd031fc59 = file_get_contents('/etc/fstab');
			$d094d3e133ec8c03 = [];

			foreach (explode("\n", $Bcd51fbbd031fc59) as $F5ba2106d5227309) {
				if (!(substr($F5ba2106d5227309, 0, 31) == 'tmpfs /home/xui/content/streams')) {
					goto label450;
				}

				$F5ba2106d5227309 = '#' . $F5ba2106d5227309;

				label450:

				$d094d3e133ec8c03[] = $F5ba2106d5227309;
			}

			file_put_contents('/etc/fstab', implode("\n", $d094d3e133ec8c03));
			shell_exec('sudo umount -l ' . STREAMS_PATH);
			shell_exec('sudo chown -R xui:xui ' . STREAMS_PATH);
			goto label1241;
		case 'enable_ramdisk':
			echo 'Enabling ramdisk...' . "\n";
			$Bcd51fbbd031fc59 = file_get_contents('/etc/fstab');
			$d094d3e133ec8c03 = [];

			foreach (explode("\n", $Bcd51fbbd031fc59) as $F5ba2106d5227309) {
				if (!(substr($F5ba2106d5227309, 0, 32) == '#tmpfs /home/xui/content/streams')) {
					goto label504;
				}

				$F5ba2106d5227309 = ltrim($F5ba2106d5227309, '#');

				label504:

				$d094d3e133ec8c03[] = $F5ba2106d5227309;
			}

			file_put_contents('/etc/fstab', implode("\n", $d094d3e133ec8c03));
			shell_exec('sudo mount ' . STREAMS_PATH);
			shell_exec('sudo chown -R xui:xui ' . STREAMS_PATH);
			goto label1241;
		case 'certbot_generate':
			echo 'Generating certbot certificate.' . "\n";
			$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'CERTBOT\', \'Attempting to generate certbot certificate on request.\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
			shell_exec('sudo ' . PHP_BIN . ' ' . INCLUDES_PATH . 'cli/certbot.php "' . base64_encode(json_encode($ba2d146bb5a55097)) . '" 2>&1 &');
			goto label1241;
		case 'update_binaries':
			echo 'Updating binaries...' . "\n";
			$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'BINARIES\', \'Updating XUI binaries from XUI server...\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
			shell_exec('sudo ' . PHP_BIN . ' ' . INCLUDES_PATH . 'cli/binaries.php 2>&1 &');
			goto label1241;
		case 'update':
			echo 'Updating...' . "\n";
			$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'UPDATE\', \'Updating XUI...\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
			shell_exec('sudo ' . PHP_BIN . ' ' . INCLUDES_PATH . 'cli/update.php "update" 2>&1 &');
			goto label1243;
		case 'enable_ministra':
			echo 'Enabling ministra /c...';
			shell_exec('sudo ln -sfn ' . XUI_HOME . 'ministra ' . XUI_HOME . 'www/c');
			shell_exec('sudo ln -sfn ' . XUI_HOME . 'ministra/portal.php ' . XUI_HOME . 'www/portal.php');
			goto label1241;
		case 'disable_ministra':
			echo 'Disabling ministra /c...';
			shell_exec('sudo rm ' . XUI_HOME . 'www/c');
			shell_exec('sudo rm ' . XUI_HOME . 'www/portal.php');
			goto label1241;
		case 'switch_php72':
			echo 'Switching to PHP 7.2' . "\n";

			if (!file_exists(PHP_BIN . '_7.2')) {
				goto label675;
			}

			shell_exec('sudo ln -sfn ' . PHP_BIN . '_7.2 ' . PHP_BIN);
			shell_exec('sudo ln -sfn ' . BIN_PATH . 'php/sbin/php-fpm_7.2 ' . BIN_PATH . 'php/sbin/php-fpm');
			shell_exec('sudo chown -R xui:xui ' . BIN_PATH . 'php');
			shell_exec('sudo service xuione restart');

			label675:

			goto label1241;
		case 'switch_php74':
			echo 'Switching to PHP 7.4' . "\n";

			if (!file_exists(PHP_BIN . '_7.4')) {
				goto label715;
			}

			shell_exec('sudo ln -sfn ' . PHP_BIN . '_7.4 ' . PHP_BIN);
			shell_exec('sudo ln -sfn ' . BIN_PATH . 'php/sbin/php-fpm_7.4 ' . BIN_PATH . 'php/sbin/php-fpm');
			shell_exec('sudo chown -R xui:xui ' . BIN_PATH . 'php');
			shell_exec('sudo service xuione restart');

			label715:

			goto label1241;
		case 'switch_php80':
			echo 'Switching to PHP 8.0' . "\n";

			if (!file_exists(PHP_BIN . '_8.0')) {
				goto label755;
			}

			shell_exec('sudo ln -sfn ' . PHP_BIN . '_8.0 ' . PHP_BIN);
			shell_exec('sudo ln -sfn ' . BIN_PATH . 'php/sbin/php-fpm_8.0 ' . BIN_PATH . 'php/sbin/php-fpm');
			shell_exec('sudo chown -R xui:xui ' . BIN_PATH . 'php');
			shell_exec('sudo service xuione restart');

			label755:

			goto label1241;
		case 'set_services':
			goto label834;

			label761:

			shell_exec('sudo rm ' . XUI_HOME . 'bin/php/etc/*.conf');
			$D44e681aa6953706 = '#! /bin/bash' . "\n";
			$Df6cb645a89ccbec = 'upstream php {' . "\n" . '    least_conn;' . "\n";
			$Ed57ec34fa5a51be = file_get_contents(XUI_HOME . 'bin/php/etc/template');

			foreach (range(1, $B58e729ea1b688b7) as $df6991d59f367c7e) {
				$D44e681aa6953706 .= 'start-stop-daemon --start --quiet --pidfile ' . XUI_HOME . 'bin/php/sockets/' . $df6991d59f367c7e . '.pid --exec ' . XUI_HOME . 'bin/php/sbin/php-fpm -- --daemonize --fpm-config ' . XUI_HOME . 'bin/php/etc/' . $df6991d59f367c7e . '.conf' . "\n";
				$Df6cb645a89ccbec .= '    server unix:' . XUI_HOME . 'bin/php/sockets/' . $df6991d59f367c7e . '.sock;' . "\n";
				file_put_contents(XUI_HOME . 'bin/php/etc/' . $df6991d59f367c7e . '.conf', str_replace('#PATH#', XUI_HOME, str_replace('#ID#', $df6991d59f367c7e, $Ed57ec34fa5a51be)));
			}

			goto label852;

			label825:

			shell_exec('sudo systemctl start xuione');

			label828:

			goto label1241;
			goto label880;

			label834:

			echo 'Setting PHP Services' . "\n";
			$B58e729ea1b688b7 = intval($ba2d146bb5a55097['count']);

			if (!$ba2d146bb5a55097['reload']) {
				goto label849;
			}

			shell_exec('sudo systemctl stop xuione');

			label849:

			goto label761;

			label852:

			file_put_contents(XUI_HOME . 'bin/daemons.sh', $D44e681aa6953706);
			file_put_contents(XUI_HOME . 'bin/nginx/conf/balance.conf', $Df6cb645a89ccbec . '}');
			shell_exec('sudo chown xui:xui ' . XUI_HOME . 'bin/php/etc/*');

			if (!$ba2d146bb5a55097['reload']) {
				goto label828;
			}

			goto label825;
		case 'set_governor':
			label880:

			goto label889;

			label883:

			goto label1241;
			goto label978;

			label889:

			$a3a36f4756987ad9 = $ba2d146bb5a55097['data'];
			if (!(!empty($a3a36f4756987ad9) && shell_exec('which cpufreq-info'))) {
				goto label883;
			}

			$C8674de38ad84225 = array_filter(explode(' ', trim(shell_exec('cpufreq-info -g'))));
			$C3e7ad56e5c3b3d2 = explode(' ', trim(shell_exec('cpufreq-info -p')));
			if (!(($C3e7ad56e5c3b3d2[2] != $a3a36f4756987ad9) && in_array($a3a36f4756987ad9, $C8674de38ad84225))) {
				goto label975;
			}

			goto label944;

			label944:

			shell_exec('sudo bash -c \'for ((i=0;i<$(nproc);i++)); do cpufreq-set -c ' . $df6991d59f367c7e . ' -g ' . $a3a36f4756987ad9 . '; done\'');
			sleep(2);
			$C3e7ad56e5c3b3d2 = explode(' ', trim(shell_exec('cpufreq-info -p')));
			$b62d6460eb33ea07->query('UPDATE `servers` SET `governor` = ? WHERE `id` = ?;', json_encode($C3e7ad56e5c3b3d2), SERVER_ID);

			label975:

			goto label883;
		case 'set_sysctl':
			label978:

			goto label1003;

			label981:

			goto label1241;
			goto label1026;

			label987:

			file_put_contents('/etc/sysctl.conf', $Ff98c2587a98bbb0);
			shell_exec('sudo sysctl -p > /dev/null');
			$b62d6460eb33ea07->query('UPDATE `servers` SET `sysctl` = ? WHERE `id` = ?;', $Ff98c2587a98bbb0, SERVER_ID);

			label1000:

			goto label981;

			label1003:

			$Ff98c2587a98bbb0 = $ba2d146bb5a55097['data'];

			if (empty($Ff98c2587a98bbb0)) {
				goto label1000;
			}

			$fecd6def1873b5e6 = file_get_contents('/etc/sysctl.conf');

			if (!($fecd6def1873b5e6 != $Ff98c2587a98bbb0)) {
				goto label1000;
			}

			shell_exec('sudo modprobe ip_conntrack > /dev/null');
			goto label987;
		case 'set_port':
			label1026:

			goto label1029;

			label1029:

			echo 'Setting NGINX Port' . "\n";

			if (intval($ba2d146bb5a55097['type']) == 0) {
				goto label1121;
			}

			if (intval($ba2d146bb5a55097['type']) == 1) {
				goto label1080;
			}

			if (!(intval($ba2d146bb5a55097['type']) == 2)) {
				goto label1234;
			}

			file_put_contents(XUI_HOME . 'bin/nginx_rtmp/conf/port.conf', 'listen ' . intval($ba2d146bb5a55097['ports'][0]) . ';');
			goto label1222;

			label1074:

			goto label1241;
			goto label1240;

			label1080:

			$b561b53d14596926 = [];

			foreach ($ba2d146bb5a55097['ports'] as $e5bebfb39a19fe80) {
				if (!(is_numeric($e5bebfb39a19fe80) && (80 <= $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535))) {
					goto label1106;
				}

				$b561b53d14596926[] = 'listen ' . intval($e5bebfb39a19fe80) . ' ssl;';

				label1106:
			}

			file_put_contents(XUI_HOME . 'bin/nginx/conf/ports/https.conf', implode(' ', $b561b53d14596926));
			goto label1204;

			label1121:

			$b561b53d14596926 = [];

			foreach ($ba2d146bb5a55097['ports'] as $e5bebfb39a19fe80) {
				if (!(is_numeric($e5bebfb39a19fe80) && (80 <= $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535))) {
					goto label1147;
				}

				$b561b53d14596926[] = 'listen ' . intval($e5bebfb39a19fe80) . ';';

				label1147:
			}

			file_put_contents(XUI_HOME . 'bin/nginx/conf/ports/http.conf', implode(' ', $b561b53d14596926));
			goto label1162;

			label1162:

			file_put_contents(XUI_HOME . 'bin/nginx_rtmp/conf/live.conf', 'on_play http://127.0.0.1:' . intval($ba2d146bb5a55097['ports'][0]) . '/stream/rtmp; on_publish http://127.0.0.1:' . intval($ba2d146bb5a55097['ports'][0]) . '/stream/rtmp; on_play_done http://127.0.0.1:' . intval($ba2d146bb5a55097['ports'][0]) . '/stream/rtmp;');

			if (!$ba2d146bb5a55097['reload']) {
				goto label1201;
			}

			shell_exec('sudo ' . BIN_PATH . 'nginx/sbin/nginx -s reload');

			label1201:

			goto label1074;

			label1204:

			if (!$ba2d146bb5a55097['reload']) {
				goto label1216;
			}

			shell_exec('sudo ' . BIN_PATH . 'nginx/sbin/nginx -s reload');

			label1216:

			goto label1201;
			goto label1121;

			label1222:

			if (!$ba2d146bb5a55097['reload']) {
				goto label1234;
			}

			shell_exec('sudo ' . BIN_PATH . 'nginx_rtmp/sbin/nginx_rtmp -s reload');

			label1234:

			goto label1216;
			goto label1080;
		default:

Warning: str_repeat(): Second argument has to be greater than or equal to 0 in | on line 1108
		}

		$b561b53d14596926 = [];
		goto label1106;
		$b561b53d14596926[] = 'listen ' . intval($e5bebfb39a19fe80) . ' ssl;';
		file_put_contents(XUI_HOME . 'bin/nginx/conf/ports/https.conf', implode(' ', $b561b53d14596926));
		goto label1204;
		$b561b53d14596926 = [];
		goto label1147;
		$b561b53d14596926[] = 'listen ' . intval($e5bebfb39a19fe80) . ';';
		file_put_contents(XUI_HOME . 'bin/nginx/conf/ports/http.conf', implode(' ', $b561b53d14596926));
		goto label1162;
		file_put_contents(XUI_HOME . 'bin/nginx_rtmp/conf/live.conf', 'on_play http://127.0.0.1:' . intval($ba2d146bb5a55097['ports'][0]) . '/stream/rtmp; on_publish http://127.0.0.1:' . intval($ba2d146bb5a55097['ports'][0]) . '/stream/rtmp; on_play_done http://127.0.0.1:' . intval($ba2d146bb5a55097['ports'][0]) . '/stream/rtmp;');
		goto label1201;
		shell_exec('sudo ' . BIN_PATH . 'nginx/sbin/nginx -s reload');
		goto label1074;
		goto label1216;
		shell_exec('sudo ' . BIN_PATH . 'nginx/sbin/nginx -s reload');
		goto label1201;
		goto label1121;
		goto label1234;
		shell_exec('sudo ' . BIN_PATH . 'nginx_rtmp/sbin/nginx_rtmp -s reload');
		goto label1216;
		goto label1080;

		label1240:

		label1241:
	}

	label1243:

	goto label1334;

	label1244:

	echo 'Enabling Cloudflare...' . "\n";
	file_put_contents(BIN_PATH . 'nginx/conf/realip_cloudflare.conf', 'set_real_ip_from 103.21.244.0/22;' . "\n" . 'set_real_ip_from 103.22.200.0/22;' . "\n" . 'set_real_ip_from 103.31.4.0/22;' . "\n" . 'set_real_ip_from 104.16.0.0/13;' . "\n" . 'set_real_ip_from 104.24.0.0/14;' . "\n" . 'set_real_ip_from 108.162.192.0/18;' . "\n" . 'set_real_ip_from 131.0.72.0/22;' . "\n" . 'set_real_ip_from 141.101.64.0/18;' . "\n" . 'set_real_ip_from 162.158.0.0/15;' . "\n" . 'set_real_ip_from 172.64.0.0/13;' . "\n" . 'set_real_ip_from 173.245.48.0/20;' . "\n" . 'set_real_ip_from 188.114.96.0/20;' . "\n" . 'set_real_ip_from 190.93.240.0/20;' . "\n" . 'set_real_ip_from 197.234.240.0/22;' . "\n" . 'set_real_ip_from 198.41.128.0/17;' . "\n" . 'set_real_ip_from 2400:cb00::/32;' . "\n" . 'set_real_ip_from 2606:4700::/32;' . "\n" . 'set_real_ip_from 2803:f800::/32;' . "\n" . 'set_real_ip_from 2405:b500::/32;' . "\n" . 'set_real_ip_from 2405:8100::/32;' . "\n" . 'set_real_ip_from 2c0f:f248::/32;' . "\n" . 'set_real_ip_from 2a06:98c0::/29;');
	$b0663135b9a59341 = true;

	label1252:

	goto label1395;

	label1253:

	echo 'Updating rate limit...' . "\n";
	file_put_contents(BIN_PATH . 'nginx/conf/limit.conf', $f508f870f31d7a73);
	$b0663135b9a59341 = true;

	label1261:

	if (0 < XUI::$rServers[SERVER_ID]['limit_requests']) {
		goto label1384;
	}

	goto label1382;

	label1269:

	if (!$a6691616d494dd58['services']) {
		goto label2158;
	}

	$eb5d77a6ea6d9524 = 0;
	$b0ab021e798ff958 = explode("\n", file_get_contents(XUI_HOME . 'bin/daemons.sh'));

	foreach ($b0ab021e798ff958 as $F5ba2106d5227309) {
		if (!(explode(' ', $F5ba2106d5227309)[0] == 'start-stop-daemon')) {
			goto label1298;
		}

		$eb5d77a6ea6d9524++;

		label1298:
	}

	goto label2135;

	label1301:

	echo 'Updating Crons...' . "\n";
	unlink(TMP_PATH . 'crontab');

	label1307:

	if (!file_exists(CONFIG_PATH . 'sysctl.on')) {
		goto label286;
	}

	goto label1678;

	label1316:

	exit();

	label1317:

	$e23e1b2beefc1001 = curl_init('http://127.0.0.1:' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/init');
	curl_setopt($e23e1b2beefc1001, CURLOPT_RETURNTRANSFER, true);
	goto label81;

	label1334:

	$b62d6460eb33ea07->query('DELETE FROM `signals` WHERE LENGTH(`custom_data`) > 0 AND UNIX_TIMESTAMP() - `time` >= 86400;');
	$b62d6460eb33ea07->close_mysql();
	goto label2183;

	label1340:

	$b62d6460eb33ea07->query('INSERT INTO `mysql_syslog`(`server_id`, `type`, `error`, `username`, `ip`, `database`, `date`) VALUES(?, \'FLUSH\', \'Flushed blocked IP\\\'s from iptables.\', \'root\', \'localhost\', NULL, ?);', SERVER_ID, time());
	$b62d6460eb33ea07->query('DELETE FROM `signals` WHERE `server_id` = ? AND `custom_data` = \'{"action":"flush"}\' AND `cache` = 0;', SERVER_ID);

	label1353:

	$b0663135b9a59341 = false;
	$d5664c31d3bad4b9 = XUI::De052f142A92e9BF();
	goto label1912;

	label1358:

	$bf165e21725a18ba = trim(file_get_contents(BIN_PATH . 'nginx/conf/limit_queue.conf')) ?: '';

	if (!($f508f870f31d7a73 != $bf165e21725a18ba)) {
		goto label1881;
	}

	echo 'Updating rate limit queue...' . "\n";
	file_put_contents(BIN_PATH . 'nginx/conf/limit_queue.conf', $f508f870f31d7a73);
	$b0663135b9a59341 = true;
	goto label1881;

	label1382:

	$f508f870f31d7a73 = '';
	goto label1394;

	label1384:

	$f508f870f31d7a73 = 'limit_req zone=two burst=' . intval(XUI::$rServers[SERVER_ID]['limit_burst']) . ';';

	label1394:

	goto label1358;

	label1395:

	if (!XUI::$rServers[SERVER_ID]['is_main']) {
		goto label1716;
	}

	$c57d4e0423bc86a1 = stripos(trim(file_get_contents(BIN_PATH . 'nginx/conf/gzip.conf')) ?: 'gzip off', 'gzip on') !== false;

	if (XUI::$rServers[SERVER_ID]['enable_gzip']) {
		goto label26;
	}

	if (!$c57d4e0423bc86a1) {
		goto label25;
	}

	echo 'Disabling GZIP...' . "\n";
	goto label18;

	label1429:

	if (!file_exists(XUI_HOME . 'www/c')) {
		goto label1445;
	}

	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'disable_ministra'])]);

	label1445:

	goto label1911;

	label1446:

	goto label1896;

	label1447:

	if ($c57d4e0423bc86a1) {
		goto label1457;
	}

	echo 'Enabling GZIP...' . "\n";
	file_put_contents(BIN_PATH . 'nginx/conf/gzip.conf', 'gzip on;' . "\n" . 'gzip_min_length 1000;' . "\n" . 'gzip_buffers 4 32k;' . "\n" . 'gzip_proxied any;' . "\n" . 'gzip_types application/json application/xml;' . "\n" . 'gzip_vary on;' . "\n" . 'gzip_disable "MSIE [1-6].(?!.*SV1)";');
	$b0663135b9a59341 = true;

	label1457:

	goto label1716;

	label1458:

	if (!$a6691616d494dd58['php']) {
		goto label1988;
	}

	$a5e3e30b2a4145d2 = basename(readlink(PHP_BIN));
	$e27d5a1b29cca7f9 = NULL;

	switch (XUI::$rServers[SERVER_ID]['php_version']) {
	case '74':
		$e27d5a1b29cca7f9 = 'php_7.4';
		goto label1968;
	case '72':
		$e27d5a1b29cca7f9 = 'php_7.2';
		goto label1968;
	case '80':
		$e27d5a1b29cca7f9 = 'php_8.0';
		goto label1968;
	default:
		goto label1968;

		label1493:

		$a6691616d494dd58 = ['mag' => true, 'php' => true, 'services' => true, 'ports' => true, 'ramdisk' => true];

		foreach ($D8e7681dfae2905b as $Fb9da1713bff19ce) {
			$ba2d146bb5a55097 = json_decode($Fb9da1713bff19ce['custom_data'], true);

			switch ($ba2d146bb5a55097['action']) {
			case 'disable_ramdisk':
			case 'enable_ramdisk':
				$a6691616d494dd58['ramdisk'] = false;
				goto label1549;
			case 'enable_ministra':
			case 'disable_ministra':
				$a6691616d494dd58['mag'] = false;
				goto label1549;
			case 'switch_php72':
			case 'switch_php74':
			case 'switch_php80':
				$a6691616d494dd58['php'] = false;
				goto label1549;
			case 'set_services':
				$a6691616d494dd58['services'] = false;
				goto label1549;
			case 'set_port':
				$a6691616d494dd58['ports'] = false;
				goto label1549;
			default:
			}

			label1549:
		}

		if (!$a6691616d494dd58['mag']) {
			goto label1911;
		}

		if (XUI::$rSettings['mag_legacy_redirect']) {
			goto label1446;
		}

		goto label1429;

		label1560:

		$Ef1173e70110cfda = $Ed3ae7262e121bb3 = 0;
		exec('ps -fp $(pgrep -u xui)', $d094d3e133ec8c03, $ced57d71bc7400ec);

		foreach ($d094d3e133ec8c03 as $d0bf680e3271ee34) {
			$E3665d09b9cea208 = explode(' ', preg_replace('!\\s+!', ' ', trim($d0bf680e3271ee34)));
			if (!(($E3665d09b9cea208[8] == 'php-fpm:') && ($E3665d09b9cea208[9] == 'master'))) {
				goto label1594;
			}

			$Ef1173e70110cfda++;

			label1594:
			if (!(($E3665d09b9cea208[8] == 'nginx:') && ($E3665d09b9cea208[9] == 'master'))) {
				goto label1606;
			}

			$Ed3ae7262e121bb3++;

			label1606:
		}

		if (!(0 < $Ed3ae7262e121bb3)) {
			goto label1317;
		}

		goto label259;

		label1613:

		global $b62d6460eb33ea07;
		global $b19d07dcd248e701;
		XUI::$rServers = XUI::F76008F8DFe1898c(true);
		$b62d6460eb33ea07->query('SELECT `signal_id` FROM `signals` WHERE `server_id` = ? AND `custom_data` = \'{"action":"flush"}\' AND `cache` = 0;', SERVER_ID);

		if (0 < $b62d6460eb33ea07->num_rows()) {
			goto label1648;
		}

		$aa5e9504f19a58fe = DC088f5BeC67cE39();
		goto label237;

		label1634:

		if (!($b90837c636443092 != $Bc5840c75ae6b805)) {
			goto label1646;
		}

		echo 'Updating XUI IP List...' . "\n";
		file_put_contents(BIN_PATH . 'nginx/conf/realip_xui.conf', $b90837c636443092);
		$b0663135b9a59341 = true;

		label1646:

		goto label113;

		label1647:

		goto label1353;

		label1648:

		echo 'Flushing IP\'s...';
		A0c5C8DE2109dD97();
		B33B2D13A0e185aA();
		goto label1340;

		label1654:

		goto label2114;

		label1655:

		if (!$b9a4826fd314adfe) {
			goto label1666;
		}

		array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'disable_ramdisk'])]);

		label1666:

		goto label2114;

		label1667:

		shell_exec('sudo systemctl stop xuione');
		shell_exec('sudo systemctl start xuione');
		exit();

		label1674:

		curl_close($e23e1b2beefc1001);
		goto label1869;

		label1678:

		if (!(strtoupper(substr(explode("\n", file_get_contents('/etc/sysctl.conf'))[0], 0, 9)) != '# XUI.ONE')) {
			goto label286;
		}

		echo 'Sysctl missing! Writing it.' . "\n";
		exec('sudo modprobe ip_conntrack');
		file_put_contents('/etc/sysctl.conf', implode(PHP_EOL, ['# XUI.one', '', 'net.core.somaxconn = 655350', 'net.ipv4.route.flush=1', 'net.ipv4.tcp_no_metrics_save=1', 'net.ipv4.tcp_moderate_rcvbuf = 1', 'fs.file-max = 6815744', 'fs.aio-max-nr = 6815744', 'fs.nr_open = 6815744', 'net.ipv4.ip_local_port_range = 1024 65000', 'net.ipv4.tcp_sack = 1', 'net.ipv4.tcp_rmem = 10000000 10000000 10000000', 'net.ipv4.tcp_wmem = 10000000 10000000 10000000', 'net.ipv4.tcp_mem = 10000000 10000000 10000000', 'net.core.rmem_max = 524287', 'net.core.wmem_max = 524287', 'net.core.rmem_default = 524287', 'net.core.wmem_default = 524287', 'net.core.optmem_max = 524287', 'net.core.netdev_max_backlog = 300000', 'net.ipv4.tcp_max_syn_backlog = 300000', 'net.netfilter.nf_conntrack_max=1215196608', 'net.ipv4.tcp_window_scaling = 1', 'vm.max_map_count = 655300', 'net.ipv4.tcp_max_tw_buckets = 50000', 'net.ipv6.conf.all.disable_ipv6 = 1', 'net.ipv6.conf.default.disable_ipv6 = 1', 'net.ipv6.conf.lo.disable_ipv6 = 1', 'kernel.shmmax=134217728', 'kernel.shmall=134217728', 'vm.overcommit_memory = 1', 'net.ipv4.tcp_tw_reuse=1']));
		exec('sudo sysctl -p > /dev/null');
		goto label286;

		label1716:

		if (0 < XUI::$rServers[SERVER_ID]['limit_requests']) {
			goto label1793;
		}

		$f508f870f31d7a73 = '';
		goto label1803;
		goto label1793;

		label1726:

		if (!(trim(implode(' ', $b561b53d14596926['http'])) != trim(file_get_contents(XUI_HOME . 'bin/nginx/conf/ports/http.conf')))) {
			goto label1759;
		}

		array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'set_port', 'type' => 0, 'ports' => $c2339b431f4d68cb['http'], 'reload' => true])]);

		label1759:

		if (!(trim(implode(' ', $b561b53d14596926['https'])) != trim(file_get_contents(XUI_HOME . 'bin/nginx/conf/ports/https.conf')))) {
			goto label195;
		}

		array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'set_port', 'type' => 1, 'ports' => $c2339b431f4d68cb['https'], 'reload' => true])]);
		goto label195;

		label1793:

		$f508f870f31d7a73 = 'limit_req_zone global zone=two:10m rate=' . intval(XUI::$rServers[SERVER_ID]['limit_requests']) . 'r/s;';

		label1803:

		$bf165e21725a18ba = trim(file_get_contents(BIN_PATH . 'nginx/conf/limit.conf')) ?: '';

		if (!($f508f870f31d7a73 != $bf165e21725a18ba)) {
			goto label1261;
		}

		goto label1253;

		label1819:

		$b62d6460eb33ea07->query('SELECT * FROM `crontab` WHERE `enabled` = 1;');

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$f9cf284bc570510f = CRON_PATH . $Fb9da1713bff19ce['filename'];
			if (!((pathinfo($f9cf284bc570510f, PATHINFO_EXTENSION) == 'php') && file_exists($f9cf284bc570510f))) {
				goto label1854;
			}

			$ce9825b82c768783[] = $Fb9da1713bff19ce['time'] . ' ' . PHP_BIN . ' ' . $f9cf284bc570510f . ' # XUI';

			label1854:
		}

		$B43468a52a6a69fd = trim(implode("\n", $ce9825b82c768783));

		if (!($D66f2e48f4ba23f3 != $B43468a52a6a69fd)) {
			goto label1307;
		}

		goto label1301;

		label1869:

		if ($b62d6460eb33ea07->query('SELECT `signal_id`, `custom_data` FROM `signals` WHERE `server_id` = ? AND `custom_data` <> \'\' AND `cache` = 0 ORDER BY signal_id ASC;', SERVER_ID)) {
			goto label1877;
		}

		exit();

		label1877:

		$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
		goto label1493;

		label1881:

		if (!$b0663135b9a59341) {
			goto label1890;
		}

		shell_exec('sudo ' . BIN_PATH . 'nginx/sbin/nginx -s reload');

		label1890:

		if (!XUI::$rSettings['restart_php_fpm']) {
			goto label1869;
		}

		goto label1560;

		label1896:

		if (file_exists(XUI_HOME . 'www/c')) {
			goto label1911;
		}

		array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'enable_ministra'])]);

		label1911:

		goto label1458;

		label1912:

		$b90837c636443092 = [];

		foreach ($d5664c31d3bad4b9 as $b38e11ffdc6a3abb) {
			if (!(!empty($b38e11ffdc6a3abb) && filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP) && !in_array('set_real_ip_from ' . $b38e11ffdc6a3abb . ';', $b90837c636443092))) {
				goto label1943;
			}

			$b90837c636443092[] = 'set_real_ip_from ' . $b38e11ffdc6a3abb . ';';

			label1943:
		}

		$b90837c636443092 = trim(implode("\n", array_unique($b90837c636443092)));
		$Bc5840c75ae6b805 = trim(file_get_contents(BIN_PATH . 'nginx/conf/realip_xui.conf')) ?: '';
		goto label1634;
	}

	global $b62d6460eb33ea07;
	global $b19d07dcd248e701;
	XUI::$rServers = XUI::F76008F8DFe1898c(true);
	$b62d6460eb33ea07->query('SELECT `signal_id` FROM `signals` WHERE `server_id` = ? AND `custom_data` = \'{"action":"flush"}\' AND `cache` = 0;', SERVER_ID);
	goto label1648;
	$aa5e9504f19a58fe = DC088f5BeC67cE39();
	goto label237;
	goto label1646;
	echo 'Updating XUI IP List...' . "\n";
	file_put_contents(BIN_PATH . 'nginx/conf/realip_xui.conf', $b90837c636443092);
	$b0663135b9a59341 = true;
	goto label113;
	goto label1353;
	echo 'Flushing IP\'s...';
	A0c5C8DE2109dD97();
	B33B2D13A0e185aA();
	goto label1340;
	goto label2114;
	goto label1666;
	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'disable_ramdisk'])]);
	goto label2114;
	shell_exec('sudo systemctl stop xuione');
	shell_exec('sudo systemctl start xuione');
	exit();
	curl_close($e23e1b2beefc1001);
	goto label1869;
	goto label286;
	echo 'Sysctl missing! Writing it.' . "\n";
	exec('sudo modprobe ip_conntrack');
	file_put_contents('/etc/sysctl.conf', implode(PHP_EOL, ['# XUI.one', '', 'net.core.somaxconn = 655350', 'net.ipv4.route.flush=1', 'net.ipv4.tcp_no_metrics_save=1', 'net.ipv4.tcp_moderate_rcvbuf = 1', 'fs.file-max = 6815744', 'fs.aio-max-nr = 6815744', 'fs.nr_open = 6815744', 'net.ipv4.ip_local_port_range = 1024 65000', 'net.ipv4.tcp_sack = 1', 'net.ipv4.tcp_rmem = 10000000 10000000 10000000', 'net.ipv4.tcp_wmem = 10000000 10000000 10000000', 'net.ipv4.tcp_mem = 10000000 10000000 10000000', 'net.core.rmem_max = 524287', 'net.core.wmem_max = 524287', 'net.core.rmem_default = 524287', 'net.core.wmem_default = 524287', 'net.core.optmem_max = 524287', 'net.core.netdev_max_backlog = 300000', 'net.ipv4.tcp_max_syn_backlog = 300000', 'net.netfilter.nf_conntrack_max=1215196608', 'net.ipv4.tcp_window_scaling = 1', 'vm.max_map_count = 655300', 'net.ipv4.tcp_max_tw_buckets = 50000', 'net.ipv6.conf.all.disable_ipv6 = 1', 'net.ipv6.conf.default.disable_ipv6 = 1', 'net.ipv6.conf.lo.disable_ipv6 = 1', 'kernel.shmmax=134217728', 'kernel.shmall=134217728', 'vm.overcommit_memory = 1', 'net.ipv4.tcp_tw_reuse=1']));
	exec('sudo sysctl -p > /dev/null');
	goto label286;
	goto label1793;
	$f508f870f31d7a73 = '';
	goto label1803;
	goto label1793;
	goto label1759;
	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'set_port', 'type' => 0, 'ports' => $c2339b431f4d68cb['http'], 'reload' => true])]);
	goto label195;
	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'set_port', 'type' => 1, 'ports' => $c2339b431f4d68cb['https'], 'reload' => true])]);
	goto label195;
	$f508f870f31d7a73 = 'limit_req_zone global zone=two:10m rate=' . intval(XUI::$rServers[SERVER_ID]['limit_requests']) . 'r/s;';
	$bf165e21725a18ba = trim(file_get_contents(BIN_PATH . 'nginx/conf/limit.conf')) ?: '';
	goto label1261;
	goto label1253;
	$b62d6460eb33ea07->query('SELECT * FROM `crontab` WHERE `enabled` = 1;');
	$f9cf284bc570510f = CRON_PATH . $Fb9da1713bff19ce['filename'];
	goto label1854;
	$ce9825b82c768783[] = $Fb9da1713bff19ce['time'] . ' ' . PHP_BIN . ' ' . $f9cf284bc570510f . ' # XUI';
	$B43468a52a6a69fd = trim(implode("\n", $ce9825b82c768783));
	goto label1307;
	goto label1301;
	goto label1877;
	exit();
	$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
	goto label1493;
	goto label1890;
	shell_exec('sudo ' . BIN_PATH . 'nginx/sbin/nginx -s reload');
	goto label1869;
	goto label1560;
	goto label1911;
	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'enable_ministra'])]);
	goto label1458;
	$b90837c636443092 = [];
	goto label1943;
	$b90837c636443092[] = 'set_real_ip_from ' . $b38e11ffdc6a3abb . ';';
	$b90837c636443092 = trim(implode("\n", array_unique($b90837c636443092)));
	$Bc5840c75ae6b805 = trim(file_get_contents(BIN_PATH . 'nginx/conf/realip_xui.conf')) ?: '';
	goto label1634;

	label1968:
	if (!($e27d5a1b29cca7f9 && ($e27d5a1b29cca7f9 != $a5e3e30b2a4145d2))) {
		goto label1988;
	}

	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'switch_php' . XUI::$rServers[SERVER_ID]['php_version']])]);

	label1988:

	goto label1269;

	label1989:

	if (!(0 < count($be078c1ca44bbc2d))) {
		goto label2163;
	}

	$b19d07dcd248e701 = true;

	foreach ($be078c1ca44bbc2d as $b38e11ffdc6a3abb) {
		echo 'Unblock IP: ' . $b38e11ffdc6a3abb . "\n";
		Bb574635b472ce89($b38e11ffdc6a3abb);
	}

	goto label2163;

	label2009:

	$b561b53d14596926 = $c2339b431f4d68cb = [
		'http'  => [],
		'https' => []
	];

	foreach (array_merge([intval(XUI::$rServers[SERVER_ID]['http_broadcast_port'])], explode(',', XUI::$rServers[SERVER_ID]['http_ports_add'])) as $e5bebfb39a19fe80) {
		if (!(is_numeric($e5bebfb39a19fe80) && (0 < $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535))) {
			goto label2060;
		}

		$b561b53d14596926['http'][] = 'listen ' . intval($e5bebfb39a19fe80) . ';';
		$c2339b431f4d68cb['http'][] = intval($e5bebfb39a19fe80);

		label2060:
	}

	foreach (array_merge([intval(XUI::$rServers[SERVER_ID]['https_broadcast_port'])], explode(',', XUI::$rServers[SERVER_ID]['https_ports_add'])) as $e5bebfb39a19fe80) {
		if (!(is_numeric($e5bebfb39a19fe80) && (0 < $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535))) {
			goto label2111;
		}

		$b561b53d14596926['https'][] = 'listen ' . intval($e5bebfb39a19fe80) . ' ssl;';
		$c2339b431f4d68cb['https'][] = intval($e5bebfb39a19fe80);

		label2111:
	}

	goto label1726;

	label2114:

	if (!file_exists(TMP_PATH . 'crontab')) {
		goto label1307;
	}

	exec('crontab -u xui -l', $F7f0e6a3ea460ca8);
	$D66f2e48f4ba23f3 = trim(implode("\n", $F7f0e6a3ea460ca8));
	goto label1819;

	label2135:

	if (!(XUI::$rServers[SERVER_ID]['total_services'] != $eb5d77a6ea6d9524)) {
		goto label2158;
	}

	array_unshift($D8e7681dfae2905b, ['custom_data' => json_encode(['action' => 'set_services', 'count' => XUI::$rServers[SERVER_ID]['total_services'], 'reload' => true])]);

	label2158:

	if (!$a6691616d494dd58['ports']) {
		goto label236;
	}

	goto label2009;

	label2163:

	if (!(0 < count($Fbf98624ba77dcaa))) {
		goto label279;
	}

	$b19d07dcd248e701 = true;

	foreach ($Fbf98624ba77dcaa as $b38e11ffdc6a3abb) {
		echo 'Block IP: ' . $b38e11ffdc6a3abb . "\n";
		AD3aA72d8893f402($b38e11ffdc6a3abb);
	}

	goto label279;

	label2183:
}

function AD3aA72D8893f402($b38e11ffdc6a3abb)
{
	if (filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
		goto label29;
	}

	if (!filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
		goto label28;
	}

	exec('sudo ip6tables -I INPUT -s ' . escapeshellcmd($b38e11ffdc6a3abb) . ' -j DROP');

	label28:

	goto label37;

	label29:

	exec('sudo iptables -I INPUT -s ' . escapeshellcmd($b38e11ffdc6a3abb) . ' -j DROP');

	label37:

	touch(FLOOD_TMP_PATH . 'block_' . $b38e11ffdc6a3abb);
}

function bb574635B472CE89($b38e11ffdc6a3abb)
{
	goto label2;

	label2:

	if (filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
		goto label32;
	}

	if (!filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
		goto label29;
	}

	exec('sudo ip6tables -D INPUT -s ' . escapeshellcmd($b38e11ffdc6a3abb) . ' -j DROP');

	label29:

	goto label40;
	goto label32;

	label31:

	goto label56;

	label32:

	exec('sudo iptables -D INPUT -s ' . escapeshellcmd($b38e11ffdc6a3abb) . ' -j DROP');

	label40:

	if (!file_exists(FLOOD_TMP_PATH . 'block_' . $b38e11ffdc6a3abb)) {
		goto label31;
	}

	unlink(FLOOD_TMP_PATH . 'block_' . $b38e11ffdc6a3abb);
	goto label31;

	label56:
}

function A0C5c8De2109dd97()
{
	exec('sudo iptables -F && sudo ip6tables -F');
	shell_exec('sudo rm ' . FLOOD_TMP_PATH . 'block_*');
}

function b33B2d13A0e185Aa()
{
	exec('sudo iptables-save && sudo ip6tables-save');
}

function Dc088f5beC67CE39()
{
	$B9869413eae86beb = [];
	exec('sudo iptables -nL --line-numbers -t filter', $d6fbf2cdbc7895f2);

	foreach ($d6fbf2cdbc7895f2 as $F5ba2106d5227309) {
		$F5ba2106d5227309 = explode(' ', preg_replace('!\\s+!', ' ', $F5ba2106d5227309));

		if (!($F5ba2106d5227309[1] == 'DROP')) {
			goto label26;
		}

		$B9869413eae86beb[] = $F5ba2106d5227309[4];

		label26:
	}

	$d6fbf2cdbc7895f2 = '';
	exec('sudo ip6tables -nL --line-numbers -t filter', $d6fbf2cdbc7895f2);

	foreach ($d6fbf2cdbc7895f2 as $F5ba2106d5227309) {
		$F5ba2106d5227309 = explode(' ', preg_replace('!\\s+!', ' ', $F5ba2106d5227309));

		if (!($F5ba2106d5227309[1] == 'DROP')) {
			goto label54;
		}

		$B9869413eae86beb[] = $F5ba2106d5227309[3];

		label54:
	}

	return $B9869413eae86beb;
}

function shutdown()
{
	global $b62d6460eb33ea07;
	global $F2db9d2971f5c8c4;
	global $b19d07dcd248e701;

	if (!$b19d07dcd248e701) {
		goto label8;
	}

	b33b2d13a0e185aa();

	label8:

	if (!is_object($b62d6460eb33ea07)) {
		goto label16;
	}

	$b62d6460eb33ea07->close_mysql();

	label16:

	@unlink($F2db9d2971f5c8c4);
}

goto label5;

label1:

ab8369074df2aaa3();
goto label75;

label5:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'root')) {
	goto label16;
}

exit('Please run as root!' . "\n");

label16:

set_time_limit(0);

if (@$argc) {
	goto label26;
}

goto label25;

label25:

exit(0);

label26:

register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../www/init.php';
$F2db9d2971f5c8c4 = CRONS_TMP_PATH . md5(XUI::a336B0Dad3EAf634() . __FILE__);
goto label56;

label50:

$b19d07dcd248e701 = false;
goto label1;

label56:

XUI::a3CF732c257bD804($F2db9d2971f5c8c4);
shell_exec('sudo kill -9 `ps -ef | grep \'XUISignals\' | grep -v grep | awk \'{print $2}\'`;');
cli_set_process_title('XUISignals');
file_put_contents(CONFIG_PATH . 'signals.last', time());
goto label50;

label75:

?>