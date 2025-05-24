<?php


goto label717;

label1:

foreach ($Ba1ee0f788e9fee4 as $e9d62cc519a20b1b) {
	goto label106;

	label5:

	echo intval(XUI::$rRequest['server']);
	echo '&clear"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="';
	echo $_['clear_temp'];
	echo '" type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	label15:

	goto label23;

	label17:

	echo '" type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	label18:

	goto label15;

	label20:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./process_monitor?server=';
	goto label5;

	label23:

	echo "\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t";
	goto label119;

	label26:

	echo $e9d62cc519a20b1b['avail'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';

	if (80 <= intval(rtrim($e9d62cc519a20b1b['percentage'], '%'))) {
		goto label84;
	}

	echo $e9d62cc519a20b1b['percentage'];
	goto label88;
	goto label84;

	label47:

	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $e9d62cc519a20b1b['size'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $e9d62cc519a20b1b['used'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	goto label26;

	label56:

	if (!(substr($e9d62cc519a20b1b['mount'], strlen($e9d62cc519a20b1b['mount']) - 7, 7) == 'streams')) {
		goto label18;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./process_monitor?server=';
	echo intval(XUI::$rRequest['server']);
	echo '&clear_s"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="';
	echo $_['clear_streams'];
	goto label17;

	label84:

	echo '<span class=\'text-danger\'>' . $e9d62cc519a20b1b['percentage'] . '</span>';

	label88:

	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	if (substr($e9d62cc519a20b1b['mount'], strlen($e9d62cc519a20b1b['mount']) - 3, 3) == 'tmp') {
		goto label20;
	}

	goto label56;

	label106:

	if (!(80 <= $e9d62cc519a20b1b['percentage'])) {
		goto label114;
	}

	$cbcf0bbd5e139431 = STATUS_SPACE_ISSUE;

	label114:

	echo "\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $e9d62cc519a20b1b['mount'];
	goto label47;

	label119:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label122:
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SPACE_ISSUE))) {
	goto label727;
}

goto label726;

label131:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t";

foreach ($d828dca113bddc83 as $d0bf680e3271ee34) {
	goto label248;

	label136:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a href="';
	echo [1 => 'stream_view', 2 => 'stream_view', 3 => 'stream_view', 4 => 'stream_view', 5 => 'stream_view'][$D9846544dffb63c9[$d0bf680e3271ee34['pid']]['type']] . '?id=' . $D9846544dffb63c9[$d0bf680e3271ee34['pid']]['id'];
	echo '"><button data-toggle="tooltip" data-placement="top" title="" data-original-title="';
	echo $_['view'];
	goto label499;

	label152:

	echo "\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $d0bf680e3271ee34['pid'];
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>';
	echo $A7d54b094ae83c95;
	echo '</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>' . "\r\n" . '                                        ';
	goto label484;

	label160:

	$Bd92fffa215178e4 = $d0bf680e3271ee34['etime'];

	if (86400 <= $Bd92fffa215178e4) {
		goto label464;
	}

	$Bd92fffa215178e4 = sprintf('%02dh %02dm %02ds', $Bd92fffa215178e4 / 3600, ($Bd92fffa215178e4 / 60) % 60, $Bd92fffa215178e4 % 60);
	goto label476;
	goto label464;

	label181:

	echo intval(XUI::$rRequest['server']);
	echo ', ';
	echo $d0bf680e3271ee34['pid'];
	echo ');"><i class="mdi mdi-close"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</td>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t";
	goto label562;

	label193:

	$A7d54b094ae83c95 = ['pid' => $_['main'] . ' - ', 'vframes' => $_['thumbnail'] . ' - ', 'monitor_pid' => $_['monitor'] . ' - ', 'delay_pid' => $_['delayed'] . ' - ', 'activity' => $_['line_activity'] . ' - ', 'timeshift' => $_['timeshift'] . ' - ', NULL => ''][$D9846544dffb63c9[$d0bf680e3271ee34['pid']]['pid_type']] . [1 => $_['stream'], 2 => $_['movie'], 3 => $_['created_channel'], 4 => $_['radio'], 5 => $_['episode'], NULL => $_['system']][$D9846544dffb63c9[$d0bf680e3271ee34['pid']]['type']];
	goto label415;

	label236:

	$d0bf680e3271ee34['command'] = 'Redis Server';
	$A7d54b094ae83c95 = 'Redis';
	goto label415;

	label241:

	goto label365;

	label243:

	$d0bf680e3271ee34['command'] = 'NGINX Worker Process';
	$A7d54b094ae83c95 = 'NGINX Pool';
	goto label365;

	label248:

	$c1d0f727218bd463 = ['proxy' => 'Live Proxy', 'llod' => 'LLOD', 'loopback' => 'Loopback', 'queue' => 'VOD Queue', 'ondemand' => 'On-Demand Instant Off', 'plex_item' => 'Plex Item Scan', 'watch_item' => 'Watch Item Scan', 'cache_handler' => 'Cache Handler', 'certbot' => 'Certbot SSL Automation', 'closed_cons' => 'Closed Connection Handler', 'signals' => 'Signal Handler', 'watchdog' => 'Server Watchdog'];
	$F7f0e6a3ea460ca8 = ['plex' => 'Plex Sync', 'cache_engine' => 'Cache Generator', 'activity' => 'Activity Cron', 'backups' => 'Backup Cron', 'cache' => 'Cache Cron', 'epg' => 'EPG Cron', 'lines_logs' => 'Line Logging Cron', 'root_signals' => 'Root Signal Cron', 'series' => 'Series Cron', 'servers' => 'Servers Cron', 'stats' => 'Stats Cron', 'streams' => 'Streams Cron', 'streams_logs' => 'Stream Logging Cron', 'tmdb' => 'TMDb Refresh Cron', 'tmp' => 'Temp Cron', 'users' => 'Users Cron', 'vod' => 'VOD Cron', 'watch' => 'Watch Folder Cron'];

	if (isset($c1d0f727218bd463[basename(explode(' ', trim(explode('#', $d0bf680e3271ee34['command'])[0]))[0], '.php')])) {
		goto label508;
	}

	if (isset($c1d0f727218bd463[basename(trim(explode('#', $d0bf680e3271ee34['command'])[0]), '.php')])) {
		goto label345;
	}

	if (isset($F7f0e6a3ea460ca8[basename(explode(' ', trim(explode('#', $d0bf680e3271ee34['command'])[0]))[0], '.php')])) {
		goto label536;
	}

	goto label422;

	label318:

	echo '</small>%</td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td><button type="button" class="btn btn-light btn-xs waves-effect waves-light">';
	echo number_format($d0bf680e3271ee34['rss'] / 1024.0, 0);
	echo '</button></td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed">';
	echo $Bd92fffa215178e4;
	echo '</button></td>' . "\r\n" . '                                    <td><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed">';
	goto label331;

	label331:

	echo $e2c65515c85365ce;
	echo '</button></td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	if (isset($D9846544dffb63c9[$d0bf680e3271ee34['pid']])) {
		goto label136;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-eye"></i></button>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";
	goto label500;
	goto label136;

	label343:

	goto label506;

	label345:

	$d0bf680e3271ee34['command'] = $c1d0f727218bd463[basename(trim(explode('#', $d0bf680e3271ee34['command'])[0]), '.php')];
	$A7d54b094ae83c95 = 'XUI CLI';
	goto label506;

	label365:

	goto label534;

	label367:

	$d0bf680e3271ee34['command'] = 'NGINX Master Process';
	$A7d54b094ae83c95 = 'NGINX Master';
	goto label534;

	label372:

	echo '                                    </td>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<td><button type="button" class="btn btn-light btn-xs waves-effect waves-light">';
	echo number_format($d0bf680e3271ee34['cpu'], 2);
	echo '%</button><br/><small>avg: ';
	echo number_format($d0bf680e3271ee34['load_average'], 2);
	goto label318;

	label388:

	$e2c65515c85365ce = sprintf('%02dh %02dm %02ds', $e2c65515c85365ce / 3600, ($e2c65515c85365ce / 60) % 60, $e2c65515c85365ce % 60);
	goto label413;

	label401:

	$e2c65515c85365ce = sprintf('%02dd %02dh %02dm', $e2c65515c85365ce / 86400, ($e2c65515c85365ce / 3600) % 24, ($e2c65515c85365ce / 60) % 60);

	label413:

	goto label152;

	label415:

	goto label241;

	label417:

	$d0bf680e3271ee34['command'] = 'PHP Master Process';
	$A7d54b094ae83c95 = 'PHP Master';
	goto label241;

	label422:

	if (stripos($d0bf680e3271ee34['command'], 'nginx: master process') !== false) {
		goto label367;
	}

	if (stripos($d0bf680e3271ee34['command'], 'nginx: worker process') !== false) {
		goto label243;
	}

	if (stripos($d0bf680e3271ee34['command'], 'php-fpm: master process') !== false) {
		goto label417;
	}

	if (stripos($d0bf680e3271ee34['command'], 'redis-server') !== false) {
		goto label236;
	}

	$d0bf680e3271ee34['command'] = 'Command: ' . $d0bf680e3271ee34['command'];
	goto label193;

	label464:

	$Bd92fffa215178e4 = sprintf('%02dd %02dh %02dm', $Bd92fffa215178e4 / 86400, ($Bd92fffa215178e4 / 3600) % 24, ($Bd92fffa215178e4 / 60) % 60);

	label476:

	$e2c65515c85365ce = $d0bf680e3271ee34['time'];

	if (86400 <= $e2c65515c85365ce) {
		goto label401;
	}

	goto label388;

	label484:

	if (isset($D9846544dffb63c9[$d0bf680e3271ee34['pid']])) {
		goto label493;
	}

	echo $d0bf680e3271ee34['command'];
	goto label372;

	label493:

	echo $D9846544dffb63c9[$d0bf680e3271ee34['pid']]['title'];
	goto label372;

	label499:

	echo '" type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-eye"></i></button></a>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t";

	label500:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '<button data-toggle="tooltip" data-placement="top" title="" data-original-title="';
	echo $_['kill_process_info'];
	echo '" type="button" class="btn btn-light waves-effect waves-light btn-xs" onClick="kill(';
	goto label181;

	label506:

	goto label160;

	label508:

	$d0bf680e3271ee34['command'] = $c1d0f727218bd463[basename(explode(' ', trim(explode('#', $d0bf680e3271ee34['command'])[0]))[0], '.php')];
	$A7d54b094ae83c95 = 'XUI CLI';
	goto label160;

	label534:

	goto label343;

	label536:

	$d0bf680e3271ee34['command'] = $F7f0e6a3ea460ca8[basename(explode(' ', trim(explode('#', $d0bf680e3271ee34['command'])[0]))[0], '.php')];
	$A7d54b094ae83c95 = 'XUI Cron';
	goto label343;

	label562:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t" . '</div> ' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label943;

label566:

echo '                                    </tbody>' . "\r\n" . '                                </table>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                        <div class="col-md-6">' . "\r\n" . '                            <div class="card-box">' . "\r\n" . '                                <table class="table table-borderless mb-0">' . "\r\n" . '                                    <thead class="thead-light">' . "\r\n" . '                                        <tr>' . "\r\n" . '                                            <th class="text-center">Stream ID</th>' . "\r\n" . '                                            <th>Stream Name</th>' . "\r\n" . '                                            <th class="text-center">Bitrate</th>' . "\r\n" . '                                            <th class="text-center">Mount Usage</th>' . "\r\n" . '                                        </tr>' . "\r\n" . '                                    </thead>' . "\r\n" . '                                    <tbody>' . "\r\n" . '                                        ';

foreach ($e213a2d9e93f4c7d as $ee6d1fc5d801b43f => $fe2897cee6d64a44) {
	goto label598;

	label572:

	echo $ee6d1fc5d801b43f;
	echo '">';
	echo $Af1444cd652ebf84[$ee6d1fc5d801b43f]['stream_display_name'];
	echo '</a></td>' . "\r\n" . '                                            <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">';
	echo number_format($Af1444cd652ebf84[$ee6d1fc5d801b43f]['bitrate'], 0);
	goto label587;

	label587:

	echo ' Kbps</button></td>' . "\r\n" . '                                            <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">';
	echo number_format($fe2897cee6d64a44 / 1024 / 1024, 0);
	echo ' MB</button></td>' . "\r\n" . '                                        </tr>' . "\r\n" . '                                        ';
	goto label605;

	label598:

	echo '                                        <tr>' . "\r\n" . '                                            <td class="text-center"><a class="text-dark" href="stream_view?id=';
	echo $ee6d1fc5d801b43f;
	echo '">';
	echo $ee6d1fc5d801b43f;
	echo '</a></td>' . "\r\n" . '                                            <td><a class="text-dark" href="stream_view?id=';
	goto label572;

	label605:
}

echo '                                    </tbody>' . "\r\n" . '                                </table>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                    </div>' . "\r\n" . '                ';

label608:

goto label609;

label609:

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<form id="line_activity_search">' . "\r\n\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="live_search" value="" placeholder="';
echo $_['search_processes'];
echo '...">' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="live_filter">';
echo $_['server'];
goto label761;

label616:

$C02870ba5264464a = [];

foreach ($B4795585e1b5292e as $ee6d1fc5d801b43f => $fe2897cee6d64a44) {
	if (!isset($Af1444cd652ebf84[$ee6d1fc5d801b43f])) {
		goto label627;
	}

	$C02870ba5264464a[$ee6d1fc5d801b43f] = $fe2897cee6d64a44;

	label627:
}

asort($C02870ba5264464a);
$C02870ba5264464a = array_reverse($C02870ba5264464a, true);
goto label833;

label638:

header('Location: ./process_monitor?server=' . XUI::$rRequest['server']);
exit();

label645:

if (!isset(XUI::$rRequest['clear_s'])) {
	goto label908;
}

DdE85bb00B3A8AD3(XUI::$rRequest['server']);
goto label901;

label656:

$e213a2d9e93f4c7d = array_slice($C02870ba5264464a, $bf30e0c3eadb11ce, $bf30e0c3eadb11ce, true);

if (!(0 < $bf30e0c3eadb11ce)) {
	goto label608;
}

echo '                    <div class="row" style="overflow-x:auto;">' . "\r\n" . '                        <div class="col-md-6">' . "\r\n" . '                            <div class="card-box">' . "\r\n" . '                                <table class="table table-borderless mb-0">' . "\r\n" . '                                    <thead class="thead-light">' . "\r\n" . '                                        <tr>' . "\r\n" . '                                            <th class="text-center">Stream ID</th>' . "\r\n" . '                                            <th>Stream Name</th>' . "\r\n" . '                                            <th class="text-center">Bitrate</th>' . "\r\n" . '                                            <th class="text-center">Mount Usage</th>' . "\r\n" . '                                        </tr>' . "\r\n" . '                                    </thead>' . "\r\n" . '                                    <tbody>' . "\r\n" . '                                        ';

foreach ($d1c240ca3cbe28c7 as $ee6d1fc5d801b43f => $fe2897cee6d64a44) {
	goto label699;

	label673:

	echo ' Kbps</button></td>' . "\r\n" . '                                            <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">';
	echo number_format($fe2897cee6d64a44 / 1024 / 1024, 0);
	echo ' MB</button></td>' . "\r\n" . '                                        </tr>' . "\r\n" . '                                        ';
	goto label706;

	label684:

	echo $ee6d1fc5d801b43f;
	echo '">';
	echo $Af1444cd652ebf84[$ee6d1fc5d801b43f]['stream_display_name'];
	echo '</a></td>' . "\r\n" . '                                            <td class="text-center"><button type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">';
	echo number_format($Af1444cd652ebf84[$ee6d1fc5d801b43f]['bitrate'], 0);
	goto label673;

	label699:

	echo '                                        <tr>' . "\r\n" . '                                            <td class="text-center"><a class="text-dark" href="stream_view?id=';
	echo $ee6d1fc5d801b43f;
	echo '">';
	echo $ee6d1fc5d801b43f;
	echo '</a></td>' . "\r\n" . '                                            <td><a class="text-dark" href="stream_view?id=';
	goto label684;

	label706:
}

goto label566;

label709:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['used'];
echo ' %</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t";
goto label1;

label717:

include 'session.php';
include 'functions.php';

if (e6D500e19634d513()) {
	goto label725;
}

e72F42a93714Ba87();

label725:

goto label854;

label726:

echo '                <div class="alert alert-danger text-center" role="alert">' . "\r\n" . '                    <strong>You are running out of space on one or more of your mount points. You should resolve this before issues occur.</strong>' . "\r\n" . '                </div>' . "\r\n" . '                ';

label727:

$B4795585e1b5292e = getStreamsRamdisk(XUI::$rRequest['server']);
$b62d6460eb33ea07->query('SELECT `stream_id`, `stream_display_name`, `bitrate` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `pid` > 0;', XUI::$rRequest['server']);
$Af1444cd652ebf84 = $b62d6460eb33ea07->get_rows(true, 'stream_id');
goto label616;

label745:

echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['type'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['process'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
goto label892;

label753:

echo '" style="margin-right:10px;">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<button type="button" class="btn btn-dark waves-effect waves-light btn-sm">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-refresh"></i> ';
echo $_['refresh'];
echo "\t\t\t\t\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t" . '</ol>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">';
echo $_['process_monitor'];
echo '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div>' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n" . '                ';
goto label787;

label761:

echo '</label>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<select id="live_filter" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t";

foreach ($Bcf70cba56392975 as $Ec379295dc7029e6) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $Ec379295dc7029e6['id'];
	echo '"';

	if (!(XUI::$rRequest['server'] == $Ec379295dc7029e6['id'])) {
		goto label777;
	}

	echo ' selected';

	label777:

	echo '>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '<label class="col-md-1 col-form-label text-center" for="live_show_entries">';
echo $_['show'];
goto label921;

label787:

if ($Ebb0b63f7c597ba4) {
	goto label609;
}

if (!(0 < count($Ba1ee0f788e9fee4))) {
	goto label122;
}

echo "\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\r\n\t\t\t\t\t\t" . '<table class="table table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t" . '<thead class="thead-light">' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['mount_point'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
goto label801;

label801:

echo $_['size'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['used'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">';
echo $_['available'];
goto label709;

label810:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label825;
}

echo ' style="display: none;"';

label825:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n\t\t\t\t\t\t" . '<ol class="breadcrumb m-0">' . "\r\n\t\t\t\t\t\t\t" . '<li>' . "\r\n\t\t\t\t\t\t\t\t" . '<a href="process_monitor?server=';
echo intval(XUI::$rRequest['server']);
goto label753;

label833:

$bf30e0c3eadb11ce = ceil(count($C02870ba5264464a) / 2.0);

if (!(10 < $bf30e0c3eadb11ce)) {
	goto label846;
}

$bf30e0c3eadb11ce = 10;

label846:

$d1c240ca3cbe28c7 = array_slice($C02870ba5264464a, 0, $bf30e0c3eadb11ce, true);
goto label656;

label854:
if (!(!isset(XUI::$rRequest['server']) || !isset($Bcf70cba56392975[XUI::$rRequest['server']]))) {
	goto label870;
}

XUI::$rRequest['server'] = SERVER_ID;

label870:

if (!isset(XUI::$rRequest['clear'])) {
	goto label645;
}

FD0E20dFF7028A69(XUI::$rRequest['server']);
goto label638;

label881:

$d828dca113bddc83 = C87bc8E30A2b322d(XUI::$rRequest['server']);
$b9f049445aa9bd5d = ['D' => 'Uninterruptible Sleep', 'I' => 'Idle', 'R' => 'Running', 'S' => 'Interruptible Sleep', 'T' => 'Stopped', 'W' => 'Paging', 'X' => 'Dead', 'Z' => 'Zombie'];
$F6edd90960a3bd9d = 'Process Monitor';
include 'header.php';
echo '<div class="wrapper"';
goto label810;

label892:

echo $_['cpu_%'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['mem_mb'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>Runtime</th>' . "\r\n" . '                                    <th>CPU Time</th>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['actions'];
goto label131;

label901:

header('Location: ./process_monitor?server=' . XUI::$rRequest['server']);
exit();

label908:

$D9846544dffb63c9 = Df7F787e9f296801(XUI::$rRequest['server']);
$Ba1ee0f788e9fee4 = C2B0C0f9dd458149(XUI::$rRequest['server']);
goto label881;

label921:

echo '</label>' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="col-md-1">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<select id="live_show_entries" class="form-control" data-toggle="select2">' . "\r\n\t\t\t\t\t\t\t\t\t\t";

foreach ([10, 25, 50, 250, 500, 1000] as $C17543903e9aa6ae) {
	echo "\t\t\t\t\t\t\t\t\t\t" . '<option';

	if (!($f1dcaed925076e67['default_entries'] == $C17543903e9aa6ae)) {
		goto label932;
	}

	echo ' selected';

	label932:

	echo ' value="';
	echo $C17543903e9aa6ae;
	echo '">';
	echo $C17543903e9aa6ae;
	echo '</option>' . "\r\n\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t" . '</select>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</form>' . "\r\n\t\t\t\t\t\t" . '<table id="datatable-activity" class="table table-striped table-borderless dt-responsive nowrap">' . "\r\n\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<th>';
echo $_['pid'];
goto label745;

label943:

include 'footer.php';

?>