<?php


function sendFile($A2fc42bebdb639d0, $E111d28e9acc50b9, $d094d3e133ec8c03, $ac6b7b5a62a17feb = false)
{
	goto label5;

	label5:

	$Cd8e1820d4075a5c = md5_file($E111d28e9acc50b9);
	ssh2_scp_send($A2fc42bebdb639d0, $E111d28e9acc50b9, $d094d3e133ec8c03);
	$af037d046136fe98 = trim(explode(' ', E04601C350EfBe4b($A2fc42bebdb639d0, 'md5sum "' . $d094d3e133ec8c03 . '"')['output'])[0]);

	if (!($Cd8e1820d4075a5c != $af037d046136fe98)) {
		goto label68;
	}

	if (!$ac6b7b5a62a17feb) {
		goto label71;
	}

	goto label70;

	label40:

	try {
		$ba2d146bb5a55097 = @file_get_contents($E111d28e9acc50b9);

		if (!(@fwrite($fe93a43f53d92a4e, $ba2d146bb5a55097) === false)) {
			goto label58;
		}

		$c2a86ea1ba33cb07 = false;

		label58:

		fclose($fe93a43f53d92a4e);
	}
	catch (Exception $E0f0519e12b13b6b) {
		$c2a86ea1ba33cb07 = false;
		fclose($fe93a43f53d92a4e);
	}

	return $c2a86ea1ba33cb07;

	label68:

	return true;
	goto label86;

	label70:

	echo 'Failed to write using SCP, reverting to SFTP transfer... This will be take significantly longer!' . "\n";

	label71:

	$f6207a71dd236669 = ssh2_sftp($A2fc42bebdb639d0);
	$c2a86ea1ba33cb07 = true;
	$fe93a43f53d92a4e = @fopen('ssh2.sftp://' . $f6207a71dd236669 . $d094d3e133ec8c03, 'wb');
	goto label40;

	label86:
}

function E04601c350EFBe4B($A2fc42bebdb639d0, $C6671ac66a4f1c57)
{
	$fe93a43f53d92a4e = ssh2_exec($A2fc42bebdb639d0, $C6671ac66a4f1c57);
	$c60b264a3c1c4445 = ssh2_fetch_stream($fe93a43f53d92a4e, SSH2_STREAM_STDERR);
	stream_set_blocking($c60b264a3c1c4445, true);
	stream_set_blocking($fe93a43f53d92a4e, true);
	return ['output' => stream_get_contents($fe93a43f53d92a4e), 'error' => stream_get_contents($c60b264a3c1c4445)];
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

goto label762;

label1:

$fd93c1f169b50c81 = (empty($argv[7]) ? 443 : intval($argv[7]));
$Ff28d708d905e33a = (empty($argv[8]) ? 0 : intval($argv[8]));
$F14090a02a938bce = (empty($argv[9]) ? 0 : intval($argv[9]));
$Ee7511dcb615b77d = (empty($argv[10]) ? [] : json_decode($argv[10], true));
$fecd6def1873b5e6 = '# XUI.one' . PHP_EOL . PHP_EOL . 'net.ipv4.tcp_congestion_control = bbr' . PHP_EOL . 'net.core.default_qdisc = fq' . PHP_EOL . 'net.ipv4.tcp_rmem = 8192 87380 134217728' . PHP_EOL . 'net.ipv4.udp_rmem_min = 16384' . PHP_EOL . 'net.core.rmem_default = 262144' . PHP_EOL . 'net.core.rmem_max = 268435456' . PHP_EOL . 'net.ipv4.tcp_wmem = 8192 65536 134217728' . PHP_EOL . 'net.ipv4.udp_wmem_min = 16384' . PHP_EOL . 'net.core.wmem_default = 262144' . PHP_EOL . 'net.core.wmem_max = 268435456' . PHP_EOL . 'net.core.somaxconn = 1000000' . PHP_EOL . 'net.core.netdev_max_backlog = 250000' . PHP_EOL . 'net.core.optmem_max = 65535' . PHP_EOL . 'net.ipv4.tcp_max_tw_buckets = 1440000' . PHP_EOL . 'net.ipv4.tcp_max_orphans = 16384' . PHP_EOL . 'net.ipv4.ip_local_port_range = 2000 65000' . PHP_EOL . 'net.ipv4.tcp_no_metrics_save = 1' . PHP_EOL . 'net.ipv4.tcp_slow_start_after_idle = 0' . PHP_EOL . 'net.ipv4.tcp_fin_timeout = 15' . PHP_EOL . 'net.ipv4.tcp_keepalive_time = 300' . PHP_EOL . 'net.ipv4.tcp_keepalive_probes = 5' . PHP_EOL . 'net.ipv4.tcp_keepalive_intvl = 15' . PHP_EOL . 'fs.file-max=20970800' . PHP_EOL . 'fs.nr_open=20970800' . PHP_EOL . 'fs.aio-max-nr=20970800' . PHP_EOL . 'net.ipv4.tcp_timestamps = 1' . PHP_EOL . 'net.ipv4.tcp_window_scaling = 1' . PHP_EOL . 'net.ipv4.tcp_mtu_probing = 1' . PHP_EOL . 'net.ipv4.route.flush = 1' . PHP_EOL . 'net.ipv6.route.flush = 1';
goto label644;

label136:

foreach (range(1, $B58e729ea1b688b7) as $df6991d59f367c7e) {
	$D44e681aa6953706 .= 'start-stop-daemon --start --quiet --pidfile ' . XUI_HOME . 'bin/php/sockets/' . $df6991d59f367c7e . '.pid --exec ' . XUI_HOME . 'bin/php/sbin/php-fpm -- --daemonize --fpm-config ' . XUI_HOME . 'bin/php/etc/' . $df6991d59f367c7e . '.conf' . "\n";
	$Df6cb645a89ccbec .= '    server unix:' . XUI_HOME . 'bin/php/sockets/' . $df6991d59f367c7e . '.sock;' . "\n";
	$d799202a12912af4 = TMP_PATH . md5(time() . $df6991d59f367c7e . '.conf');
	file_put_contents($d799202a12912af4, str_replace('#PATH#', XUI_HOME, str_replace('#ID#', $df6991d59f367c7e, $Ed57ec34fa5a51be)));
	sendFile($A2fc42bebdb639d0, $d799202a12912af4, XUI_HOME . 'bin/php/etc/' . $df6991d59f367c7e . '.conf');
}

$Df6cb645a89ccbec .= '}';
$d799202a12912af4 = TMP_PATH . md5(time() . 'daemons.sh');
file_put_contents($d799202a12912af4, $D44e681aa6953706);
goto label1096;

label213:

echo 'Adding sysctl.conf' . "\n";
E04601c350EfBE4b($A2fc42bebdb639d0, 'sudo modprobe ip_conntrack');
file_put_contents(TMP_PATH . 'sysctl_' . $C082ca9ed03f473c, $fecd6def1873b5e6);
sendFile($A2fc42bebdb639d0, TMP_PATH . 'sysctl_' . $C082ca9ed03f473c, '/etc/sysctl.conf');
goto label833;

label234:

$B58e729ea1b688b7 = intval(e04601c350EFBE4B($A2fc42bebdb639d0, 'sudo cat /proc/cpuinfo | grep "^processor" | wc -l')['output']) ?: 4;
e04601c350EFBE4B($A2fc42bebdb639d0, 'sudo rm ' . XUI_HOME . 'bin/php/etc/*.conf');
$D44e681aa6953706 = '#! /bin/bash' . "\n";
$Df6cb645a89ccbec = 'upstream php {' . "\n" . '    least_conn;' . "\n";
$Ed57ec34fa5a51be = file_get_contents(XUI_HOME . 'bin/php/etc/template');
goto label136;

label262:

e04601c350EFBe4b($A2fc42bebdb639d0, 'sudo ' . PHP_BIN . ' ' . CLI_PATH . 'update.php "post-update"');
E04601C350eFBE4b($A2fc42bebdb639d0, 'sudo ' . XUI_HOME . 'status 1');
E04601c350EFBE4b($A2fc42bebdb639d0, 'sudo -u xui ' . PHP_BIN . ' ' . CLI_PATH . 'startup.php');
e04601C350efBe4B($A2fc42bebdb639d0, 'sudo -u xui ' . PHP_BIN . ' ' . CRON_PATH . 'servers.php');

label299:

goto label300;

label300:

goto label750;

label301:

E04601c350EFBe4b($A2fc42bebdb639d0, 'sudo ' . XUI_HOME . 'status 1');
e04601c350efBe4B($A2fc42bebdb639d0, 'sudo -u xui ' . PHP_BIN . ' ' . CLI_PATH . 'startup.php');
e04601C350eFBe4B($A2fc42bebdb639d0, 'sudo -u xui ' . PHP_BIN . ' ' . CRON_PATH . 'servers.php');
goto label750;

label329:

e04601c350efbE4B($A2fc42bebdb639d0, 'sudo echo "tmpfs ' . STREAMS_PATH . ' tmpfs defaults,noatime,nosuid,nodev,noexec,mode=1777,size=90% 0 0" >> /etc/fstab');
E04601C350eFbe4b($A2fc42bebdb639d0, 'sudo echo "tmpfs ' . TMP_PATH . ' tmpfs defaults,noatime,nosuid,nodev,noexec,mode=1777,size=2G 0 0" >> /etc/fstab');

label343:

if (stripos(e04601C350efbE4B($A2fc42bebdb639d0, 'sudo cat /etc/sysctl.conf')['output'], 'XUI.one') === false) {
	goto label659;
}

if (!$Ff28d708d905e33a) {
	goto label1221;
}

goto label1213;

label360:

if ($F14090a02a938bce) {
	goto label380;
}

$Ff98c2587a98bbb0 = '; XUI Configuration' . "\n" . '; -----------------' . "\n\n" . '[XUI]' . "\n" . 'hostname    =   "' . XUI::$rServers[SERVER_ID]['server_ip'] . '"' . "\n" . 'port        =   ' . intval(XUI::$rServers[SERVER_ID]['http_broadcast_port']) . "\n" . 'server_id   =   ' . $C082ca9ed03f473c;
goto label802;

label380:

goto label785;

label381:

echo 'Failed to connect to server. Exiting' . "\n";
exit();
goto label832;

label384:

if ($ff5cf44f96903d64 == 'root') {
	goto label562;
}

goto label560;

label388:

goto label1156;

label389:

E04601c350EFBE4B($A2fc42bebdb639d0, 'sudo rm /home/xui/bin/nginx/conf/servers/*.conf');

foreach ($Ee7511dcb615b77d as $A3206fae422859ef) {
	goto label397;

	label397:

	if ($F14090a02a938bce) {
		goto label411;
	}

	$b38e11ffdc6a3abb = XUI::$rServers[$A3206fae422859ef]['server_ip'] . ':' . XUI::$rServers[$A3206fae422859ef]['http_broadcast_port'];
	goto label453;

	label411:

	$b38e11ffdc6a3abb = XUI::$rServers[$A3206fae422859ef]['private_ip'] . ':' . XUI::$rServers[$A3206fae422859ef]['http_broadcast_port'];
	goto label453;

	label422:

	$F0d99ffa8aa87812 = 'location / {' . "\n" . '    include options.conf;' . "\n" . '    proxy_pass http://' . $b38e11ffdc6a3abb . '$1;' . "\n" . '}';

	label425:

	$d799202a12912af4 = TMP_PATH . md5(time() . $Bb672d1983256a93 . '.conf');
	file_put_contents($d799202a12912af4, $F0d99ffa8aa87812);
	goto label441;

	label441:

	sendFile($A2fc42bebdb639d0, $d799202a12912af4, '/home/xui/bin/nginx/conf/servers/' . intval($A3206fae422859ef) . '.conf');
	goto label479;

	label453:

	if (XUI::$rServers[$A3206fae422859ef]['is_main']) {
		goto label422;
	}

	$Bb672d1983256a93 = md5($C082ca9ed03f473c . '_' . $A3206fae422859ef . '_' . OPENSSL_EXTRA);
	$F0d99ffa8aa87812 = 'location ~/' . $Bb672d1983256a93 . '(.*)$ {' . "\n" . '    include options.conf;' . "\n" . '    proxy_pass http://' . $b38e11ffdc6a3abb . '$1;' . "\n" . '    proxy_set_header X-Token "' . $Bb672d1983256a93 . '";' . "\n" . '}';
	goto label425;
	goto label422;

	label479:
}

goto label1138;

label482:

if ($A7d54b094ae83c95 == 2) {
	goto label301;
}

if ($A7d54b094ae83c95 == 3) {
	goto label499;
}

E04601c350efbE4b($A2fc42bebdb639d0, 'sudo -u xui ' . PHP_BIN . ' ' . INCLUDES_PATH . 'startup.php');
goto label299;

label499:

goto label262;

label500:

E04601C350EfBE4b($A2fc42bebdb639d0, 'sudo echo "" > "/home/xui/bin/nginx/conf/limit.conf"');
e04601c350EFBe4B($A2fc42bebdb639d0, 'sudo echo "" > "/home/xui/bin/nginx/conf/limit_queue.conf"');

if (!($A7d54b094ae83c95 == 2)) {
	goto label388;
}

$b38e11ffdc6a3abb = '127.0.0.1:' . XUI::$rServers[$C082ca9ed03f473c]['http_broadcast_port'];
E04601C350eFBE4b($A2fc42bebdb639d0, 'sudo echo "on_play http://' . $b38e11ffdc6a3abb . '/stream/rtmp; on_publish http://' . $b38e11ffdc6a3abb . '/stream/rtmp; on_play_done http://' . $b38e11ffdc6a3abb . '/stream/rtmp;" > "/home/xui/bin/nginx_rtmp/conf/live.conf"');
goto label234;

label529:

goto label832;

label530:

echo "\n" . 'Stopping any previous version of XUI' . "\n";
e04601c350eFbe4B($A2fc42bebdb639d0, 'sudo systemctl stop xuione');
E04601c350EFbE4b($A2fc42bebdb639d0, 'sudo killall -9 -u xui');
goto label630;

label540:

$e5bebfb39a19fe80 = intval($argv[3]);
$ff5cf44f96903d64 = $argv[4];
$fd093b5358e9a519 = $argv[5];
$c33bc7579afd561d = (empty($argv[6]) ? 80 : intval($argv[6]));
goto label1;

label560:

echo 'Connected! Authenticating as non-root user...' . "\n";
goto label563;

label562:

echo 'Connected! Authenticating as root user...' . "\n";

label563:

goto label725;

label564:

e04601c350EfBE4b($A2fc42bebdb639d0, 'sudo adduser --system --shell /bin/false --group --disabled-login xui');
e04601c350EFbE4b($A2fc42bebdb639d0, 'sudo mkdir ' . XUI_HOME);
e04601c350eFBE4B($A2fc42bebdb639d0, 'sudo rm -rf ' . BIN_PATH);

label580:

$df6991d59f367c7e = 0;
goto label845;

label582:

echo 'Installing service' . "\n";
E04601C350EfBE4B($A2fc42bebdb639d0, 'sudo rm /etc/systemd/system/xui.service');
$F47683a2386bece2 = '[Unit]' . "\n" . 'SourcePath=/home/xui/service' . "\n" . 'Description=XUI.one Service' . "\n" . 'After=network.target' . "\n" . 'StartLimitIntervalSec=0' . "\n\n" . '[Service]' . "\n" . 'Type=simple' . "\n" . 'User=root' . "\n" . 'Restart=always' . "\n" . 'RestartSec=1' . "\n" . 'ExecStart=/bin/bash /home/xui/service start' . "\n" . 'ExecRestart=/bin/bash /home/xui/service restart' . "\n" . 'ExecStop=/bin/bash /home/xui/service stop' . "\n\n" . '[Install]' . "\n" . 'WantedBy=multi-user.target';
file_put_contents(TMP_PATH . 'systemd_' . $C082ca9ed03f473c, $F47683a2386bece2);
sendFile($A2fc42bebdb639d0, TMP_PATH . 'systemd_' . $C082ca9ed03f473c, '/etc/systemd/system/xuione.service');
goto label997;

label604:

unlink(CACHE_TMP_PATH . 'servers');
XUI::$rServers = XUI::f76008f8Dfe1898C();
$A7d54b094ae83c95 = intval($argv[1]);
if (!(($A7d54b094ae83c95 != 1) && (Xui\Functions::getLicense()[9] == 1))) {
	goto label540;
}

exit('Not supported in Trial Mode.' . "\n");
goto label540;

label630:

echo "\n" . 'Updating system' . "\n";
e04601c350EFbe4b($A2fc42bebdb639d0, 'sudo rm /var/lib/dpkg/lock-frontend && sudo rm /var/cache/apt/archives/lock && sudo rm /var/lib/dpkg/lock');

if (!($A7d54b094ae83c95 == 2)) {
	goto label643;
}

e04601c350EfbE4B($A2fc42bebdb639d0, 'sudo add-apt-repository -y ppa:maxmind/ppa');

label643:

goto label1186;

label644:

$efa30287ce9fbeff = BIN_PATH . 'install/';
$dd6d6da4a65a40fa = ['lb' => 'loadbalancer.tar.gz', 'lb_update' => 'loadbalancer_update.tar.gz', 'proxy' => 'proxy.tar.gz'];

if ($A7d54b094ae83c95 == 1) {
	goto label675;
}

if ($A7d54b094ae83c95 == 2) {
	goto label1185;
}

if ($A7d54b094ae83c95 == 3) {
	goto label749;
}

goto label742;

label658:

goto label844;

label659:

if ($Ff28d708d905e33a) {
	goto label213;
}

e04601c350EFbe4B($A2fc42bebdb639d0, 'sudo rm ' . CONFIG_PATH . 'sysctl.on');
goto label844;
goto label213;

label670:

$b00d1d65528795d1 = ['cpufrequtils', 'iproute2', 'python', 'net-tools', 'dirmngr', 'gpg-agent', 'software-properties-common', 'libmaxminddb0', 'libmaxminddb-dev', 'mmdb-bin', 'libcurl4', 'libgeoip-dev', 'libxslt1-dev', 'libonig-dev', 'e2fsprogs', 'wget', 'sysstat', 'alsa-utils', 'v4l-utils', 'mcrypt', 'python3', 'certbot', 'iptables-persistent', 'libjpeg-dev', 'libpng-dev', 'php-ssh2', 'xz-utils', 'zip', 'unzip'];
$df078e3cd1896028 = [$dd6d6da4a65a40fa['lb']];

label674:

goto label1135;

label675:

goto label1131;

label676:

echo 'Generating configuration file' . "\n";
$ce4ad9c60bcb920a = parse_ini_file(CONFIG_PATH . 'config.ini');

if ($A7d54b094ae83c95 == 1) {
	goto label360;
}

$Ff98c2587a98bbb0 = '; XUI Configuration' . "\n" . '; -----------------' . "\n" . '; Your username and password will be encrypted and' . "\n" . '; saved to the \'credentials\' file in this folder' . "\n" . '; automatically.' . "\n" . ';' . "\n" . '; To change your username or password, modify BOTH' . "\n" . '; below and XUI will read and re-encrypt them.' . "\n\n" . '[XUI]' . "\n" . 'hostname    =   "' . XUI::$rServers[SERVER_ID]['server_ip'] . '"' . "\n" . 'database    =   "xui"' . "\n" . 'port        =   ' . intval(XUI::$rConfig['port']) . "\n" . 'server_id   =   ' . $C082ca9ed03f473c . "\n" . 'is_lb       =   1' . "\n\n" . '[Encrypted]' . "\n" . 'username    =   ""' . "\n" . 'password    =   ""';
goto label802;
goto label360;

label704:

if (!(strpos($b93619d95e11fcb2, 'nDefaultLimitNOFILESoft=1048576') === false)) {
	goto label720;
}

E04601C350EFBE4B($A2fc42bebdb639d0, 'sudo echo "' . "\n" . 'DefaultLimitNOFILESoft=1048576" >> "/etc/systemd/system.conf"');
E04601c350efbe4B($A2fc42bebdb639d0, 'sudo echo "' . "\n" . 'DefaultLimitNOFILESoft=1048576" >> "/etc/systemd/user.conf"');

label720:

E04601c350eFbe4b($A2fc42bebdb639d0, 'sudo systemctl stop apparmor');
goto label1073;

label725:

$D577b2a7889a5fb6 = @ssh2_auth_password($A2fc42bebdb639d0, $ff5cf44f96903d64, $fd093b5358e9a519);

if ($D577b2a7889a5fb6) {
	goto label530;
}

$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 4 WHERE `id` = ?;', $C082ca9ed03f473c);
echo 'Failed to authenticate using credentials. Exiting' . "\n";
exit();
goto label529;

label742:

$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 4 WHERE `id` = ?;', $C082ca9ed03f473c);
echo 'Invalid type specified!' . "\n";
exit();
goto label1184;

label749:

goto label1180;

label750:

if (in_array($A7d54b094ae83c95, [1, 2])) {
	goto label761;
}

$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 1 WHERE `id` = ?;', $C082ca9ed03f473c);
goto label827;

label761:

goto label820;

label762:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label773;
}

exit('Please run as XUI!' . "\n");

label773:
if (!(!@$argc || ($argc < 6))) {
	goto label1040;
}

exit(0);
goto label1040;

label785:

$Ff98c2587a98bbb0 = '; XUI Configuration' . "\n" . '; -----------------' . "\n\n" . '[XUI]' . "\n" . 'hostname    =   "' . XUI::$rServers[SERVER_ID]['private_ip'] . '"' . "\n" . 'port        =   ' . intval(XUI::$rServers[SERVER_ID]['http_broadcast_port']) . "\n" . 'server_id   =   ' . $C082ca9ed03f473c;

label802:

file_put_contents(TMP_PATH . 'config_' . $C082ca9ed03f473c, $Ff98c2587a98bbb0);
sendFile($A2fc42bebdb639d0, TMP_PATH . 'config_' . $C082ca9ed03f473c, CONFIG_PATH . 'config.ini');
goto label582;

label820:

$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 1, `http_broadcast_port` = ?, `https_broadcast_port` = ?, `total_services` = ? WHERE `id` = ?;', $c33bc7579afd561d, $fd93c1f169b50c81, $B58e729ea1b688b7, $C082ca9ed03f473c);

label827:

unlink($efa30287ce9fbeff . $C082ca9ed03f473c . '.json');

label832:

goto label1291;

label833:

e04601c350EfBe4b($A2fc42bebdb639d0, 'sudo sysctl -p');
e04601c350EfBe4b($A2fc42bebdb639d0, 'sudo touch ' . CONFIG_PATH . 'sysctl.on');

label844:

goto label676;

label845:

foreach ($df078e3cd1896028 as $D6be258a9043b749) {
	goto label875;

	label849:

	$b492c39d2d86c9b6 = E04601c350EfBe4b($A2fc42bebdb639d0, 'sudo tar -zxvf "/tmp/' . $D6be258a9043b749 . '" -C "' . XUI_HOME . '"');

	if (file_exists(XUI_HOME . 'status')) {
		goto label917;
	}

	$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 4 WHERE `id` = ?;', $C082ca9ed03f473c);
	echo 'Failed to extract files! Exiting' . "\n";
	exit();
	goto label917;

	label875:

	$df6991d59f367c7e++;
	echo 'Transferring compressed system files (' . $df6991d59f367c7e . ' of ' . count($df078e3cd1896028) . ')' . "\n";

	if (sendFile($A2fc42bebdb639d0, $efa30287ce9fbeff . $D6be258a9043b749, '/tmp/' . $D6be258a9043b749, true)) {
		goto label906;
	}

	$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 4 WHERE `id` = ?;', $C082ca9ed03f473c);
	echo 'Invalid MD5 checksum! Exiting' . "\n";
	goto label903;

	label903:

	exit();
	goto label917;

	label906:

	echo 'Extracting to directory' . "\n";
	$b492c39d2d86c9b6 = e04601c350eFbE4b($A2fc42bebdb639d0, 'sudo rm -rf ' . XUI_HOME . 'status');
	goto label849;

	label917:

	e04601C350EFBe4B($A2fc42bebdb639d0, 'sudo rm -f "/tmp/' . $D6be258a9043b749 . '.tar.gz"');
	goto label925;

	label925:
}

if (!in_array($A7d54b094ae83c95, [2, 3])) {
	goto label844;
}

if (!(stripos(e04601C350EFBe4B($A2fc42bebdb639d0, 'sudo cat /etc/fstab')['output'], STREAMS_PATH) === false)) {
	goto label343;
}

echo 'Adding ramdisk mounts' . "\n";
goto label329;

label951:

sendFile($A2fc42bebdb639d0, CONFIG_PATH . 'credentials', CONFIG_PATH . 'credentials');
sendFile($A2fc42bebdb639d0, XUI_HOME . 'bin/nginx/conf/custom.conf', XUI_HOME . 'bin/nginx/conf/custom.conf');
sendFile($A2fc42bebdb639d0, XUI_HOME . 'bin/nginx/conf/realip_cdn.conf', XUI_HOME . 'bin/nginx/conf/realip_cdn.conf');
sendFile($A2fc42bebdb639d0, XUI_HOME . 'bin/nginx/conf/realip_cloudflare.conf', XUI_HOME . 'bin/nginx/conf/realip_cloudflare.conf');
sendFile($A2fc42bebdb639d0, XUI_HOME . 'bin/nginx/conf/realip_xui.conf', XUI_HOME . 'bin/nginx/conf/realip_xui.conf');
goto label500;

label997:

E04601C350eFbE4B($A2fc42bebdb639d0, 'sudo chmod +x /etc/systemd/system/xuione.service');
e04601c350EfBe4b($A2fc42bebdb639d0, 'sudo rm /etc/init.d/xuione');
e04601c350EFbe4b($A2fc42bebdb639d0, 'sudo systemctl daemon-reload');
E04601c350efBE4b($A2fc42bebdb639d0, 'sudo systemctl enable xuione');

if ($A7d54b094ae83c95 == 1) {
	goto label389;
}

goto label951;

label1017:

$b93619d95e11fcb2 = e04601C350EFBe4B($A2fc42bebdb639d0, 'sudo cat "/etc/systemd/system.conf"')['output'];

if (!(strpos($b93619d95e11fcb2, 'DefaultLimitNOFILE=1048576') === false)) {
	goto label1039;
}

E04601C350EfBe4B($A2fc42bebdb639d0, 'sudo echo "' . "\n" . 'DefaultLimitNOFILE=1048576" >> "/etc/systemd/system.conf"');
e04601C350EfBE4B($A2fc42bebdb639d0, 'sudo echo "' . "\n" . 'DefaultLimitNOFILE=1048576" >> "/etc/systemd/user.conf"');

label1039:

goto label704;

label1040:

$C082ca9ed03f473c = intval($argv[2]);

if (!($C082ca9ed03f473c == 0)) {
	goto label1050;
}

exit();

label1050:

goto label1229;

label1051:

$C9febb240944fd1e = XUI::$rServers[$C082ca9ed03f473c]['server_ip'];
echo 'Connecting to ' . $C9febb240944fd1e . ':' . $e5bebfb39a19fe80 . "\n";

if ($A2fc42bebdb639d0 = ssh2_connect($C9febb240944fd1e, $e5bebfb39a19fe80)) {
	goto label384;
}

$b62d6460eb33ea07->query('UPDATE `servers` SET `status` = 4 WHERE `id` = ?;', $C082ca9ed03f473c);
goto label381;

label1073:

E04601c350eFbe4b($A2fc42bebdb639d0, 'sudo systemctl disable apparmor');
e04601C350efbe4b($A2fc42bebdb639d0, 'sudo mount -a');
E04601C350eFBe4B($A2fc42bebdb639d0, 'sudo echo \'net.ipv4.ip_unprivileged_port_start=0\' > /etc/sysctl.d/50-allports-nonroot.conf && sudo sysctl --system');
sleep(3);
E04601c350eFbE4b($A2fc42bebdb639d0, 'sudo chown -R xui:xui ' . XUI_HOME . 'tmp');
goto label1157;

label1096:

sendFile($A2fc42bebdb639d0, $d799202a12912af4, XUI_HOME . 'bin/daemons.sh');
$d799202a12912af4 = TMP_PATH . md5(time() . 'balance.conf');
file_put_contents($d799202a12912af4, $Df6cb645a89ccbec);
sendFile($A2fc42bebdb639d0, $d799202a12912af4, XUI_HOME . 'bin/nginx/conf/balance.conf');
e04601C350efbE4B($A2fc42bebdb639d0, 'sudo chmod +x ' . XUI_HOME . 'bin/daemons.sh');
goto label388;

label1131:

$b00d1d65528795d1 = ['iproute2', 'net-tools', 'libcurl4', 'libxslt1-dev', 'libonig-dev', 'e2fsprogs', 'wget', 'sysstat', 'mcrypt', 'python3', 'certbot', 'iptables-persistent', 'libjpeg-dev', 'libpng-dev', 'php-ssh2', 'xz-utils', 'zip', 'unzip'];
$df078e3cd1896028 = [$dd6d6da4a65a40fa['proxy']];

label1135:

goto label1259;

label1138:

e04601c350efbe4b($A2fc42bebdb639d0, 'sudo echo "listen ' . $c33bc7579afd561d . ';" > "/home/xui/bin/nginx/conf/ports/http.conf"');
e04601c350efbe4b($A2fc42bebdb639d0, 'sudo echo "listen ' . $fd93c1f169b50c81 . ' ssl;" > "/home/xui/bin/nginx/conf/ports/https.conf"');
e04601c350efbe4b($A2fc42bebdb639d0, 'sudo chmod 0777 /home/xui/bin');

label1156:

goto label1017;

label1157:

e04601c350efbe4b($A2fc42bebdb639d0, 'sudo chown -R xui:xui ' . XUI_HOME . 'content/streams');
e04601c350efbe4b($A2fc42bebdb639d0, 'sudo chown -R xui:xui ' . XUI_HOME);
Xui\Functions::grantPrivileges('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $C9febb240944fd1e);
echo 'Installation complete! Starting XUI' . "\n";
e04601c350efbe4b($A2fc42bebdb639d0, 'sudo service xuione restart');
goto label482;

label1180:

$b00d1d65528795d1 = ['cpufrequtils'];
$df078e3cd1896028 = [$dd6d6da4a65a40fa['lb_update']];

label1184:

goto label674;

label1185:

goto label670;

label1186:

e04601c350efbe4b($A2fc42bebdb639d0, 'sudo apt-get update');

foreach ($b00d1d65528795d1 as $cc386f9ba082650e) {
	echo 'Installing package: ' . $cc386f9ba082650e . "\n";
	e04601c350efbe4b($A2fc42bebdb639d0, 'sudo DEBIAN_FRONTEND=noninteractive apt-get -yq install ' . $cc386f9ba082650e);
}

if (!in_array($A7d54b094ae83c95, [1, 2])) {
	goto label580;
}

echo 'Creating XUI system user' . "\n";
goto label564;

label1213:

e04601c350efbe4b($A2fc42bebdb639d0, 'sudo touch ' . CONFIG_PATH . 'sysctl.on');
goto label1228;

label1221:

e04601c350efbe4b($A2fc42bebdb639d0, 'sudo rm ' . CONFIG_PATH . 'sysctl.on');

label1228:

goto label658;

label1229:

shell_exec('kill -9 `ps -ef | grep \'XUI Install\\[' . $C082ca9ed03f473c . '\\]\' | grep -v grep | awk \'{print $2}\'`;');
set_time_limit(0);
cli_set_process_title('XUI Install[' . $C082ca9ed03f473c . ']');
register_shutdown_function('shutdown');
require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
goto label604;

label1259:

if ($A7d54b094ae83c95 == 1) {
	goto label1275;
}

file_put_contents($efa30287ce9fbeff . $C082ca9ed03f473c . '.json', json_encode(['root_username' => $ff5cf44f96903d64, 'root_password' => $fd093b5358e9a519, 'ssh_port' => $e5bebfb39a19fe80]));
goto label1051;

label1275:

file_put_contents($efa30287ce9fbeff . $C082ca9ed03f473c . '.json', json_encode(['root_username' => $ff5cf44f96903d64, 'root_password' => $fd093b5358e9a519, 'ssh_port' => $e5bebfb39a19fe80, 'http_broadcast_port' => $c33bc7579afd561d, 'https_broadcast_port' => $fd93c1f169b50c81, 'parent_id' => $Ee7511dcb615b77d]));
goto label1051;

label1291:

?>