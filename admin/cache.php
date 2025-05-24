<?php


goto label216;

label1:

echo '</button>' . "\n" . '                                                                </td>' . "\n" . '                                                            </tr>' . "\n" . '                                                        </tbody>' . "\n" . '                                                    </table>' . "\n" . '                                                </div>' . "\n" . '                                                ';

label2:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:30px;">' . "\n" . '                                            ';

if ($f1dcaed925076e67['enable_cache']) {
	goto label203;
}

echo '                                            <li class="list-inline-item">' . "\n" . '                                                <button id="enable_cache" onClick="api(\'enable_cache\')" class="btn btn-success" type="button">Enable Cache</button>' . "\n" . '                                            </li>' . "\n" . '                                            ';
goto label202;

label8:

$b067c356c4c929d4 = count(glob(STREAMS_TMP_PATH . 'stream_*'));
$a481c6bec7004bca = count(glob(SERIES_TMP_PATH . 'series_*')) - 2;

if (!($a481c6bec7004bca < 0)) {
	goto label32;
}

$a481c6bec7004bca = 0;

label32:

goto label74;

label33:

$A963e07ce47787da = 100;
$E65328c8afa8e30a = 'pink';
$Be3c637a16a727b1 = 'Maximum';
$cef8ac5fe6153726 = 'You\'re using both Caching and Redis Connection Handler, your service is optimised for <strong>maximum performance</strong>!';
goto label118;

label38:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n" . '                                                                </td>' . "\n" . '                                                            </tr>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <td class="text-center">Streams</td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    <button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-xl">';
echo number_format($b067c356c4c929d4, 0);
echo ' / ';
echo number_format($a725c9dd61a2f16d, 0);
goto label309;

label51:

$cef8ac5fe6153726 = 'You\'re using neither Caching or Redis Connection Handler, the server will perform poorly compared to having either enabled.';
goto label339;

label53:

$Be3c637a16a727b1 = 'Good';
$E65328c8afa8e30a = 'info';
goto label272;

label56:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label71;
}

echo ' style="display: none;"';

label71:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<form action="#" method="POST">' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t" . '<div class="page-title-box">' . "\n" . '                        <div class="page-title-right">' . "\n" . '                            ';
include 'topbar.php';
goto label149;

label74:

$Ad34009be139f287 = 100 - intval((disk_free_space(XUI_HOME . 'tmp') / disk_total_space(XUI_HOME . 'tmp')) * 100);

if (!(90 <= $Ad34009be139f287)) {
	goto label206;
}

echo '                                                <div class="alert alert-danger mb-4" role="alert">' . "\n" . '                                                    Your cache tmpfs mount is <strong>';
echo $Ad34009be139f287;
echo '% full</strong>! This can stop new lines and streams from caching and when the mount is completely full cache will not work correctly.<br/><br/><strong>You should increase the size of your tmpfs size in /etc/fstab and reboot.</strong>' . "\n" . '                                                </div>' . "\n" . '                                                ';
goto label206;

label99:

echo date($f1dcaed925076e67['datetime_format'], $f1dcaed925076e67['last_cache']);
echo '</strong>. If it takes longer to run a cron than the time between executions, you will have issues as the caching will be cut off before completion.<br/><br/>The default is to run the cron every 5 minutes, but when your Streams and Lines tables grow larger it can take a fair amount of time to grab and cache this data. You can change the time to achieve a better balance between performance and data accuracy.<br/><br/><strong>Please ensure the cron format is correct, otherwise it won\'t run.</strong></p>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <table class="table table-striped table-borderless mb-0" id="datatable-cache">' . "\n" . '                                                        <tbody>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <td class="text-center">Minute</td>' . "\n" . '                                                                <td style="width:250px;"><input type="text" class="form-control text-center" id="minute" name="minute" value="';
echo $bb8b0a36358f45b8;
echo '"></td>' . "\n" . '                                                                <td class="text-center">Hour</td>' . "\n" . '                                                                <td style="width:250px;"><input type="text" class="form-control text-center" id="hour" name="hour" value="';
echo $f4f8138a4ae6c15f;
goto label323;

label111:

echo '                                                                </td>' . "\n" . '                                                            </tr>' . "\n" . '                                                        </tbody>' . "\n" . '                                                    </table>' . "\n" . '                                                </div>' . "\n" . '                                                ';

label112:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0" style="margin-top:30px;">' . "\n" . '                                            ';

if ($f1dcaed925076e67['redis_handler']) {
	goto label359;
}

echo '                                            <li class="list-inline-item">' . "\n" . '                                                <button id="enable_handler" onClick="api(\'enable_handler\')" class="btn btn-success" type="button">Enable Handler</button>' . "\n" . '                                            </li>' . "\n" . '                                            ';
goto label358;

label118:

echo "\t\t\t\t\t\t\t" . '<h5 class="card-title">';
echo $Be3c637a16a727b1;
echo ' Performance</h5>' . "\n\t\t\t\t\t\t\t" . '<p>';
echo $cef8ac5fe6153726;
goto label123;

label123:

echo '</p>' . "\n\t\t\t\t\t\t\t" . '<div class="progress mb-2">' . "\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar progress-bar-striped progress-bar-animated bg-';
echo $E65328c8afa8e30a;
echo '" role="progressbar" aria-valuenow="';
echo $A963e07ce47787da;
echo '" aria-valuemin="0" aria-valuemax="100" style="width: ';
goto label362;

label129:
if (XUI::$rSettings['enable_cache'] && XUI::$rSettings['redis_handler']) {
	goto label33;
}
if (XUI::$rSettings['enable_cache'] || XUI::$rSettings['redis_handler']) {
	goto label53;
}

$A963e07ce47787da = 25;
$Be3c637a16a727b1 = 'Poor';
$E65328c8afa8e30a = 'secondary';
goto label51;

label149:

echo '                        </div>' . "\n\t\t\t\t\t\t" . '<h4 class="page-title">Cache & Redis Settings</h4>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>     ' . "\n\t\t\t" . '<div class="row">' . "\n\t\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t\t";
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_SUCCESS))) {
	goto label159;
}

echo "\t\t\t\t\t" . '<div class="alert alert-success alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t" . 'Cache & Redis settings sucessfully updated!' . "\n\t\t\t\t\t" . '</div>' . "\n" . '                    ';

label159:

echo "\t\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t";
goto label129;

label161:

$b62d6460eb33ea07->query('SELECT `time` FROM `crontab` WHERE `filename` = \'cache_engine.php\';');
list($bb8b0a36358f45b8, $f4f8138a4ae6c15f, $Ff049ed6fa71c805, $bd2ed222ba9617a1, $d30916c273a48ec8) = explode(' ', $b62d6460eb33ea07->get_row()['time']);
$b62d6460eb33ea07->query('SELECT `id` FROM `lines`;');
$C50e4262dbc7b171 = $b62d6460eb33ea07->result->rowCount();
goto label243;

label191:

XUI::$rSettings = XUI::aC49B56DBe10e52c(true);
$f1dcaed925076e67 = XUI::$rSettings;
$F6edd90960a3bd9d = 'Cache & Redis Settings';
include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
goto label56;

label202:

goto label204;

label203:

echo '                                            <li class="list-inline-item">' . "\n" . '                                                <button id="disable_cache" onClick="api(\'disable_cache\')" class="btn btn-danger" type="button">Disable Cache</button>' . "\n" . '                                                <button id="regenerate_cache" onClick="api(\'regenerate_cache\')" class="btn btn-info" type="button">Regenerate Cache</button>' . "\n" . '                                            </li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item float-right">' . "\n" . '                                                <input name="submit_settings" type="submit" class="btn btn-primary" value="Save Cron" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                            ';

label204:

echo "\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="connections">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <h5 class="card-title">Redis Connection Handler</h5>' . "\n" . '                                                <p>The handler will allow all connections from clients to load balancers to be verified and managed using Redis rather than through mysql connections.<br/><br/><strong>Disabling Redis handler will disconnect all of your active clients, enabling it however should move the live connections from MySQL to Redis without disconnects.</strong></p>' . "\n" . '                                                <h5 class="card-title mt-4">Pros & Cons</h5>' . "\n" . '                                                <p>Before deciding whether Redis Connection Handler is right for you, you should know a few things. Firstly, enabling Redis will significantly increase XUI\'s ability to handle connections as the previous bottleneck would be from MySQL not being able to handle the amount of incoming client requests. You\'ll also find that zap time will be quicker, CPU should be lower and things will generally run quite smoothly.<br/><br/>The drawbacks from using Redis is that the live connection database is stored in memory, although a backup is periodically written, restarting XUI can result in connection losses. In addition to this, your ability to filter or search some content in the Admin or Reseller interface will be diminished. For example, with Redis on you can only sort Live Connections by Time Active ascending or descending and you cannot search the live connection list. You also lose the ability to sort by Active Connections in Lines or Content pages etc.<br/><br/>The best way to decide if Redis is right for you is to try it for yourself.</p>' . "\n" . '                                                ';
goto label281;

label206:

if (file_exists(CACHE_TMP_PATH . 'cache_complete')) {
	goto label214;
}

echo '                                                <div class="alert alert-warning mb-4" role="alert">' . "\n" . '                                                    Cache isn\'t complete yet! If you have a lot of streams and lines, the caching process can take a while to complete. For now, no users will be able to connect to the service.<br/><br/>Player API and Playlist functionality will be limited until cache is complete. This is a requirement regardless of whether cache is enabled or not.' . "\n" . '                                                </div>' . "\n" . '                                                ';

label214:

echo '                                                <h5 class="card-title">Cache Cron Execution</h5>' . "\n" . '                                                <p>Your last cron execution was at <strong>';
goto label99;

label216:

include 'session.php';
include 'functions.php';

if (E6d500e19634D513()) {
	goto label224;
}

E72f42A93714Ba87();

label224:

goto label191;

label225:

echo number_format($a481c6bec7004bca, 0);
echo ' / ';
echo number_format($B8e46b4ae3593577, 0);
echo '</button>' . "\n" . '                                                                </td>' . "\n" . '                                                                <td class="text-center">Time Taken</td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    <button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-xl">';
echo XUI::A5D0a3407690f047($f1dcaed925076e67['last_cache_taken']);
goto label1;

label243:

$b62d6460eb33ea07->query('SELECT `id` FROM `streams`;');
$a725c9dd61a2f16d = $b62d6460eb33ea07->result->rowCount();
$b62d6460eb33ea07->query('SELECT `id` FROM `streams_series`;');
$B8e46b4ae3593577 = $b62d6460eb33ea07->result->rowCount();
$c4eeabce252a6d30 = count(glob(LINES_TMP_PATH . 'line_i_*'));
goto label8;

label267:

echo '                                                                    <button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed-xl">ONLINE</button>' . "\n" . '                                                                    ';

label268:

echo '                                                                </td>' . "\n" . '                                                                <td class="text-center">Authentication</td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    ';

if ($Ed95f35cd6708aa6) {
	goto label307;
}

goto label305;

label272:

if (!XUI::$rSettings['enable_cache']) {
	goto label280;
}

$A963e07ce47787da = 75;
$cef8ac5fe6153726 = 'Redis Connection Handler is disabled on your service, if you have a lot of throughput you will see better performance with Redis enabled.<br/>If you maintain active connections of over 10,000 for example you should consider this. Below this amount you\'re unlikely to see any benefit.';
goto label339;

label280:

goto label337;

label281:

if ($f1dcaed925076e67['redis_handler']) {
	goto label286;
}

echo '                                                <p><strong>You have chosen to disable Redis Connection Handler. Click the button below to re-enable it.</strong></p>' . "\n" . '                                                ';
goto label112;

label286:

try {
	XUI::$redis = new Redis();
	XUI::$redis->connect(XUI::$rServers[SERVER_ID]['server_ip'], 6379);
	$b9f049445aa9bd5d = true;
}
catch (Exception $E0f0519e12b13b6b) {
	$b9f049445aa9bd5d = false;
}

goto label341;

label305:

echo '                                                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light btn-fixed-xl">INVALID PASSWORD</button>' . "\n" . '                                                                    ';
goto label308;

label307:

echo '                                                                    <button type="button" class="btn btn-success btn-xs waves-effect waves-light btn-fixed-xl">AUTHENTICATED</button>' . "\n" . '                                                                    ';

label308:

goto label111;

label309:

echo '</button>' . "\n" . '                                                                </td>' . "\n" . '                                                                <td class="text-center">Lines</td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    <button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-xl">';
echo number_format($c4eeabce252a6d30, 0);
echo ' / ';
echo number_format($C50e4262dbc7b171, 0);
echo '</button>' . "\n" . '                                                                </td>' . "\n" . '                                                            </tr>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <td class="text-center">Series</td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    <button type="button" class="btn btn-info btn-xs waves-effect waves-light btn-fixed-xl">';
goto label225;

label323:

echo '"></td>' . "\n" . '                                                            </tr>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <td class="text-center">Thread Count</td>' . "\n" . '                                                                <td style="width:250px;"><input type="text" class="form-control text-center" id="cache_thread_count" name="cache_thread_count" value="';
echo intval($f1dcaed925076e67['cache_thread_count']);
echo '"></td>' . "\n" . '                                                                <td class="text-center">Update Changes Only</td>' . "\n" . '                                                                <td style="width:250px;">' . "\n" . '                                                                    <input name="cache_changes" id="cache_changes" type="checkbox"';

if (!($f1dcaed925076e67['cache_changes'] == 1)) {
	goto label38;
}

echo ' checked ';
goto label38;

label337:

$A963e07ce47787da = 50;
$cef8ac5fe6153726 = 'Caching is disabled on your service, this will impact performance significantly under load compared to having it enabled.';

label339:

goto label118;
goto label33;

label341:

try {
	XUI::$redis->auth(XUI::$rSettings['redis_password']);
	$Ed95f35cd6708aa6 = true;
}
catch (Exception $E0f0519e12b13b6b) {
	$Ed95f35cd6708aa6 = false;
}

echo '                                                <div class="form-group row mb-4 mt-4">' . "\n" . '                                                    <table class="table table-striped table-borderless mb-0" id="datatable-redis">' . "\n" . '                                                        <tbody>' . "\n" . '                                                            <tr>' . "\n" . '                                                                <td class="text-center">Server Status</td>' . "\n" . '                                                                <td class="text-center">' . "\n" . '                                                                    ';

if ($b9f049445aa9bd5d) {
	goto label267;
}

echo '                                                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light btn-fixed-xl">OFFLINE</button>' . "\n" . '                                                                    ';
goto label268;
goto label267;

label358:

goto label360;

label359:

echo '                                            <li class="list-inline-item">' . "\n" . '                                                <button id="disable_handler" onClick="api(\'disable_handler\')" class="btn btn-danger" type="button">Disable Handler</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<button id="clear_redis" onClick="api(\'clear_redis\')" class="btn btn-info" type="button">Clear Database</button>' . "\n" . '                                            </li>' . "\n" . '                                            ';

label360:

echo "\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</form>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label370;

label362:

echo $A963e07ce47787da;
echo '%"></div>' . "\n\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#cache" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-cached mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">XUI Caching System</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#connections" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-lan-connect mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Redis Connection Handler</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="cache">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                ';

if ($f1dcaed925076e67['enable_cache']) {
	goto label161;
}

echo '                                                <h5 class="card-title">Cache is Disabled</h5>' . "\n" . '                                                <p>You have chosen to disable Cache system. You can re-enable it by clicking the Enable Cache box below, however when doing so you would get best results restarting XUI on this server.</p>' . "\n" . '                                                ';
goto label2;
goto label161;

label370:

include 'footer.php';

?>