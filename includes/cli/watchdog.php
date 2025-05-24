<?php


goto label377;

label1:

$d817487de81ff041 = $e23be30f5a16d035['cpu_average_array'] ?: [];

label5:

if (false) {
	goto label179;
}

if ($b62d6460eb33ea07->ping()) {
	goto label416;
}

goto label179;
goto label416;

label13:

foreach ($b22ffa1c8726cc43 as $Fcb4a7d9a9652882 => $D6d607c92d4200ae) {
	$dacd4a0e1bba391b[$Fcb4a7d9a9652882] = round(($D6d607c92d4200ae / $f284dbe435ee25e6) * 100, 2);
}

$Bf3377811d8e2b3a['cpu'] = $dacd4a0e1bba391b['user'] + $dacd4a0e1bba391b['sys'];
$d817487de81ff041[] = $Bf3377811d8e2b3a['cpu'];

if (!(30 < count($d817487de81ff041))) {
	goto label369;
}

goto label359;

label42:

$b62d6460eb33ea07->query('UPDATE `settings` SET `total_users` = ?;', count(array_unique($Db81435e2146d166)));

label52:

sleep(2);
goto label5;
goto label179;

label57:

if ($D577b2a7889a5fb6) {
	goto label61;
}

echo 'Failed, break.' . "\n";
goto label179;

label61:

goto label469;

label62:

$e02ff34f7d898a7b = $d344a66178d455b1->exec();
$Db81435e2146d166 = [];
$df6991d59f367c7e = 0;

foreach (array_keys(XUI::$rServers) as $C082ca9ed03f473c) {
	if (!XUI::$rServers[$C082ca9ed03f473c]['server_online']) {
		goto label113;
	}

	$b62d6460eb33ea07->query('UPDATE `servers` SET `connections` = ?, `users` = ? WHERE `id` = ?;', $e02ff34f7d898a7b[$df6991d59f367c7e * 2], count(array_unique(array_values($e02ff34f7d898a7b[($df6991d59f367c7e * 2) + 1]))), $C082ca9ed03f473c);
	$Db81435e2146d166 = array_merge(array_values($e02ff34f7d898a7b[($df6991d59f367c7e * 2) + 1]), $Db81435e2146d166);
	$df6991d59f367c7e++;

	label113:
}

goto label42;

label116:

list($da32a1d3ae1bd2e0, $c8064ac38939d29c, $e5beb91a139bd85f) = explode(' ', trim($Ed3ae7262e121bb3[2]));
$Dcc33f0a730486a1 = ($A882ac155458eaa7 ? intval(floatval($e5beb91a139bd85f - $A882ac155458eaa7) / (time() - $e55ec86518529d93)) : 0);
$A882ac155458eaa7 = $e5beb91a139bd85f;
$e55ec86518529d93 = time();
$Bf3377811d8e2b3a = XUI::aFF015c358EB0964();
goto label218;

label155:

XUI::f79F5d7aFa165cBD(true);
XUI::f79F5D7aFa165Cbd(false);
$f8bd5a091fcdba80 = time();

label164:

$Ed3ae7262e121bb3 = explode("\n", file_get_contents('http://127.0.0.1:' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/nginx_status'));
goto label116;

label179:

if (!is_object($b62d6460eb33ea07)) {
	goto label187;
}

$b62d6460eb33ea07->close_mysql();

label187:

goto label512;

label188:

$d638dd306e8c8f8d = explode(' ', preg_replace('!cpu +!', '', $A9ed1a8d34caf994[0]));
$C499691c33e35307 = explode(' ', preg_replace('!cpu +!', '', $A8278867ce08f2c8[0]));
$A9ed1a8d34caf994 = $A8278867ce08f2c8;
$b22ffa1c8726cc43 = [];
$b22ffa1c8726cc43['user'] = $C499691c33e35307[0] - $d638dd306e8c8f8d[0];
goto label395;

label218:

if ($A9ed1a8d34caf994) {
	goto label227;
}

$A9ed1a8d34caf994 = file('/proc/stat');
sleep(2);

label227:

$A8278867ce08f2c8 = file('/proc/stat');
goto label188;

label232:

echo 'File changed! Break.' . "\n";
goto label179;

label234:

XUI::$rServers = XUI::F76008F8dFe1898C(true);
XUI::$rSettings = XUI::ac49b56DBe10e52c(true);
goto label155;

label245:

require str_replace('\\', '/', dirname($argv[0])) . '/../../www/init.php';
shell_exec('kill $(ps aux | grep watchdog | grep -v grep | grep -v ' . getmypid() . ' | awk \'{print $2}\')');
$Df19f1dc3a6ffd8b = intval(XUI::$rSettings['online_capacity_interval']) ?: 10;
$A882ac155458eaa7 = $e55ec86518529d93 = $A9ed1a8d34caf994 = $f8bd5a091fcdba80 = NULL;
goto label491;

label276:

if (XUI::AB992B2373F7beCA()) {
	goto label282;
}

echo 'Not running! Break.' . "\n";
goto label179;

label282:

if (!(md5_file(__FILE__) != $Cd8e1820d4075a5c)) {
	goto label234;
}

goto label232;

label290:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `hls_end` = 0 AND `server_id` = ?;', SERVER_ID);
$A1a73957c6feb09a = $b62d6460eb33ea07->get_row()['count'];
$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 AND `server_id` = ? GROUP BY `user_id`;', SERVER_ID);
$d7bd0890458933bb = $b62d6460eb33ea07->num_rows();
$D577b2a7889a5fb6 = $b62d6460eb33ea07->query('UPDATE `servers` SET `watchdog_data` = ?, `last_check_ago` = UNIX_TIMESTAMP(), `requests_per_second` = ?, `php_pids` = ?, `connections` = ?, `users` = ? WHERE `id` = ?;', json_encode($Bf3377811d8e2b3a, JSON_PARTIAL_OUTPUT_ON_ERROR), $Dcc33f0a730486a1, json_encode($daca82e98f511305), $A1a73957c6feb09a, $d7bd0890458933bb, SERVER_ID);
goto label57;

label327:

goto label52;

label328:

$d344a66178d455b1 = XUI::$redis->multi();

foreach (array_keys(XUI::$rServers) as $C082ca9ed03f473c) {
	if (!XUI::$rServers[$C082ca9ed03f473c]['server_online']) {
		goto label356;
	}

	$d344a66178d455b1->zCard('SERVER#' . $C082ca9ed03f473c);
	$d344a66178d455b1->zRangeByScore('SERVER_LINES#' . $C082ca9ed03f473c, '-inf', '+inf', ['withscores' => true]);

	label356:
}

goto label62;

label359:

$d817487de81ff041 = array_slice($d817487de81ff041, count($d817487de81ff041) - 30, 30);

label369:

$Bf3377811d8e2b3a['cpu_average_array'] = $d817487de81ff041;
$daca82e98f511305 = [];
exec('ps -u xui | grep php-fpm | awk {\'print $1\'}', $daca82e98f511305);
goto label443;

label377:

if (!(posix_getpwuid(posix_geteuid())['name'] != 'xui')) {
	goto label388;
}

exit('Please run as XUI!' . "\n");

label388:

if (@$argc) {
	goto label245;
}

exit(0);
goto label245;

label395:

$b22ffa1c8726cc43['nice'] = $C499691c33e35307[1] - $d638dd306e8c8f8d[1];
$b22ffa1c8726cc43['sys'] = $C499691c33e35307[2] - $d638dd306e8c8f8d[2];
$b22ffa1c8726cc43['idle'] = $C499691c33e35307[3] - $d638dd306e8c8f8d[3];
$f284dbe435ee25e6 = array_sum($b22ffa1c8726cc43);
$dacd4a0e1bba391b = [];
goto label13;

label416:
if (!(XUI::$rSettings['redis_handler'] && (!XUI::$redis || !XUI::$redis->ping()))) {
	goto label432;
}

goto label179;

label432:
if (!(!$f8bd5a091fcdba80 || ($Df19f1dc3a6ffd8b <= time() - $f8bd5a091fcdba80))) {
	goto label164;
}

goto label276;

label443:

$A1a73957c6feb09a = $d7bd0890458933bb = 0;

if (!XUI::$rSettings['redis_handler']) {
	goto label468;
}

$D577b2a7889a5fb6 = $b62d6460eb33ea07->query('UPDATE `servers` SET `watchdog_data` = ?, `last_check_ago` = UNIX_TIMESTAMP(), `requests_per_second` = ?, `php_pids` = ? WHERE `id` = ?;', json_encode($Bf3377811d8e2b3a, JSON_PARTIAL_OUTPUT_ON_ERROR), $Dcc33f0a730486a1, json_encode($daca82e98f511305), SERVER_ID);
goto label57;

label468:

goto label290;

label469:

if (!XUI::$rServers[SERVER_ID]['is_main']) {
	goto label52;
}

if (XUI::$rSettings['redis_handler']) {
	goto label328;
}

$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;');
$Db81435e2146d166 = $b62d6460eb33ea07->num_rows();
$b62d6460eb33ea07->query('UPDATE `settings` SET `total_users` = ?;', $Db81435e2146d166);
goto label327;

label491:

$Cd8e1820d4075a5c = md5_file(__FILE__);

if (!XUI::$rSettings['redis_handler']) {
	goto label502;
}

XUI::d6aEb3175A43f301();

label502:

$e23be30f5a16d035 = json_decode(XUI::$rServers[SERVER_ID]['watchdog_data'], true);
goto label1;

label512:

shell_exec('(sleep 1; ' . PHP_BIN . ' ' . __FILE__ . ' ) > /dev/null 2>/dev/null &');

?>