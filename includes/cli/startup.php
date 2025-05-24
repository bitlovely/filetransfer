<?php


goto label55;

label1:

$ed8bec081c874582 = tempnam(TMP_PATH, 'crontab');
file_put_contents($ed8bec081c874582, implode("\n", $d094d3e133ec8c03) . "\n");
exec('sudo chattr -i /var/spool/cron/crontabs/root');
exec('sudo crontab -r');
exec('sudo crontab ' . $ed8bec081c874582);
goto label309;

label27:

$F7f0e6a3ea460ca8[] = '* * * * * ' . PHP_BIN . ' ' . CRON_PATH . 'root_mysql.php # XUI';

label35:

$af4a3f6194eb59c9 = false;
exec('sudo crontab -l', $d094d3e133ec8c03);

foreach ($F7f0e6a3ea460ca8 as $d811dda1f3a55644) {
	if (in_array($d811dda1f3a55644, $d094d3e133ec8c03)) {
		goto label52;
	}

	$d094d3e133ec8c03[] = $d811dda1f3a55644;
	$af4a3f6194eb59c9 = true;

	label52:
}

goto label290;

label55:

set_time_limit(0);

if (@$argc) {
	goto label64;
}

exit(0);

label64:

$e82031892817d5a0 = false;
goto label211;

label66:
if (!(file_exists(CRON_PATH . 'cache_engine.php') && !file_exists(CACHE_TMP_PATH . 'cache_complete'))) {
	goto label92;
}

echo 'Generating cache...' . "\n";
exec('sudo -u xui ' . PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php >/dev/null 2>/dev/null &');

label92:

goto label93;

label93:

goto label326;

label94:

$F7f0e6a3ea460ca8 = [];

if (!file_exists(CRON_PATH . 'root_signals.php')) {
	goto label111;
}

$F7f0e6a3ea460ca8[] = '* * * * * ' . PHP_BIN . ' ' . CRON_PATH . 'root_signals.php # XUI';

label111:

if (!file_exists(CRON_PATH . 'root_mysql.php')) {
	goto label35;
}

goto label27;

label120:

exec(PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php >/dev/null 2>/dev/null &');

label128:

goto label93;

label129:

goto label94;

label130:

$D44e681aa6953706 = '#! /bin/bash' . "\n";
$Df6cb645a89ccbec = 'upstream php {' . "\n" . '    least_conn;' . "\n";
$Ed57ec34fa5a51be = file_get_contents(XUI_HOME . 'bin/php/etc/template');
exec('rm -f ' . XUI_HOME . 'bin/php/etc/*.conf');

foreach (range(1, 4) as $df6991d59f367c7e) {
	$D44e681aa6953706 .= 'start-stop-daemon --start --quiet --pidfile ' . XUI_HOME . 'bin/php/sockets/' . $df6991d59f367c7e . '.pid --exec ' . XUI_HOME . 'bin/php/sbin/php-fpm -- --daemonize --fpm-config ' . XUI_HOME . 'bin/php/etc/' . $df6991d59f367c7e . '.conf' . "\n";
	$Df6cb645a89ccbec .= '    server unix:' . XUI_HOME . 'bin/php/sockets/' . $df6991d59f367c7e . '.sock;' . "\n";
	file_put_contents(XUI_HOME . 'bin/php/etc/' . $df6991d59f367c7e . '.conf', str_replace('#PATH#', XUI_HOME, str_replace('#ID#', $df6991d59f367c7e, $Ed57ec34fa5a51be)));
}

goto label295;

label192:

define('XUI_HOME', '/home/xui/');
require XUI_HOME . 'www/stream/init.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(32767);
goto label228;

label211:

if (!(1 < count($argv))) {
	goto label227;
}

if (!(intval($argv[1]) == 1)) {
	goto label227;
}

$e82031892817d5a0 = true;

label227:

goto label192;

label228:

if (!file_exists(XUI_HOME . 'status')) {
	goto label242;
}

exec('sudo ' . XUI_HOME . 'status 1');

label242:

if (!(filesize(XUI_HOME . 'bin/daemons.sh') == 0)) {
	goto label308;
}

echo 'Daemons corrupted! Regenerating...' . "\n";
goto label130;

label253:

if (posix_getpwuid(posix_geteuid())['name'] == 'root') {
	goto label129;
}

if ($e82031892817d5a0) {
	goto label128;
}

exec(PHP_BIN . ' ' . CRON_PATH . 'cache.php 1');
if (!(file_exists(CRON_PATH . 'cache_engine.php') && !file_exists(CACHE_TMP_PATH . 'cache_complete'))) {
	goto label128;
}

echo 'Generating cache...' . "\n";
goto label120;

label290:

if ($af4a3f6194eb59c9) {
	goto label294;
}

echo 'Crontab already installed' . "\n";
goto label313;

label294:

goto label1;

label295:

$Df6cb645a89ccbec .= '}';
file_put_contents(XUI_HOME . 'bin/daemons.sh', $D44e681aa6953706);
file_put_contents(XUI_HOME . 'bin/nginx/conf/balance.conf', $Df6cb645a89ccbec);

label308:

goto label253;

label309:

exec('sudo chattr +i /var/spool/cron/crontabs/root');
echo 'Crontab installed' . "\n";

label313:

if ($e82031892817d5a0) {
	goto label92;
}

exec('sudo -u xui ' . PHP_BIN . ' ' . CRON_PATH . 'cache.php 1', $d094d3e133ec8c03);
goto label66;

label326:

echo "\n";

?>