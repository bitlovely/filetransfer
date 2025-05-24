<?php


goto label91;

label1:

exit();
goto label7;

label3:

$Ec379295dc7029e6 = $a080f5083618911e[XUI::$rRequest['id']];

label7:

goto label418;

label8:

goto label10;

label9:

echo '                        <div class="text-center" style="padding-top: 15px;">' . "\r\n" . '                            <i class="mdi mdi-creation avatar-title font-24 text-info"></i><br/>' . "\r\n" . '                            <h4 class="header-title text-info">Installing...</h4>' . "\r\n" . '                            <textarea readonly style="padding: 15px; margin-top: 20px; background: #56c2d6; color: #fff; border: 0; width: 100%; height: 150px; scroll-y: auto;" id="server_install"></textarea>' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

label10:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";
goto label531;

label12:

if ($f1dcaed925076e67['dark_mode']) {
	goto label17;
}

echo 'text-pink';
goto label430;

label17:

echo 'text-white';
goto label430;

label19:

echo number_format($Ec379295dc7029e6['network_guaranteed_speed'], 0);
echo ' Mbps</small></h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent" id="watchdog_input">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">0 Mbps</span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<h5 class="mb-1 mt-0">Network Output<small class="text-muted ml-2">of ';
echo number_format($Ec379295dc7029e6['network_guaranteed_speed'], 0);
echo ' Mbps</small></h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent" id="watchdog_output">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">0 Mbps</span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

label33:

goto label8;

label34:

echo '"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-9">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="text-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1"><span data-plugin="counterup" class="entry" id="open_connections">0</span></h3>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-white mb-1 text-truncate">Connections</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t";

if (!E589A4BF54A2Dad1('adv', 'live_connections')) {
	goto label43;
}

echo '</a>';

label43:

goto label440;

label44:

echo $e23be30f5a16d035['cpu_cores'];
echo ' Cores</small></h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent" id="watchdog_cpu">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">0%</span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<h5 class="mb-1 mt-0">Memory Usage<small class="text-muted ml-2">of ';
echo round($e23be30f5a16d035['total_mem'] / 1024.0 / 1024.0, 0);
echo ' GB</small></h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent" id="watchdog_mem">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">0%</span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

if (!($Ec379295dc7029e6['server_type'] == 0)) {
	goto label240;
}

goto label212;

label62:

$a6c312069fd40fb3 = false;

if ($B1a3986a5f168faf['expiration']) {
	goto label825;
}

$ba1606e875c3cddb = false;
$Aa9ae65659c17fca = 'No Certificate Installed';
goto label77;
goto label825;

label70:

$Aa9ae65659c17fca = date($f1dcaed925076e67['datetime_format'], $B1a3986a5f168faf['expiration']);

label77:

if ($Ec379295dc7029e6['server_type'] == 0) {
	goto label409;
}

$F6edd90960a3bd9d = 'View Proxy';
goto label410;
goto label409;

label84:

echo '                <div class="alert alert-success alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'Certbot will run in the background and attempt to generate certificates for your server automatically, check back here shortly for a progress update. Once a certificate is installed, you can turn SSL on for this server.' . "\r\n\t\t\t\t" . '</div>' . "\r\n" . '                ';

label85:

echo "\t\t\t\t" . '<div class="row text-center">' . "\r\n" . '                    ';

if ($Ec379295dc7029e6['server_type'] == 0) {
	goto label244;
}

goto label242;

label91:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label99;
}

E72f42A93714ba87();

label99:

goto label189;

label100:
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label115;
}

echo ' style="display: none;"';

label115:

echo '>' . "\r\n" . '    <div class="container-fluid">' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-12">' . "\r\n\t\t\t\t" . '<div class="page-title-box">' . "\r\n\t\t\t\t\t" . '<div class="page-title-right">' . "\r\n" . '                        ';
include 'topbar.php';
goto label118;

label118:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<h4 class="page-title">' . "\r\n\t\t\t\t\t\t";
echo $Ec379295dc7029e6['server_name'];
echo "\t\t\t\t\t\t" . '<small style="margin-left: 5px;">';
echo $Ec379295dc7029e6['server_ip'];
echo '</small>' . "\r\n\t\t\t\t\t" . '</h4>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div>' . "\r\n\t\t" . '</div> ' . "\r\n\t\t" . '<div class="row">' . "\r\n\t\t\t" . '<div class="col-xl-12">' . "\r\n" . '                ';
goto label478;

label126:

echo 'text-white';

label127:

echo '"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-9">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="text-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1"><span data-plugin="counterup" class="entry" id="online_users">0</span></h3>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-white mb-1 text-truncate">Users</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t";

if (!E589A4BF54A2dad1('adv', 'live_connections')) {
	goto label523;
}

goto label522;

label136:

if ($f1dcaed925076e67['dark_mode']) {
	goto label141;
}

echo 'text-purple';
goto label34;

label141:

echo 'text-white';
goto label34;

label143:

echo "\t\t\t\t\t" . '</div>' . "\r\n" . '                    ';

label144:

echo "\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '<div class="card-box">' . "\r\n\t\t\t\t\t" . '<div class="col-md-12 align-self-center">' . "\r\n" . '                        ';

if (in_array($Ec379295dc7029e6['status'], [3, 4])) {
	goto label9;
}

goto label460;

label153:

echo ' text-white">' . "\r\n\t\t\t\t\t\t\t" . '<div class="card-body active-connections">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="avatar-sm bg-light">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-users avatar-title font-22 ';

if ($f1dcaed925076e67['dark_mode']) {
	goto label126;
}

echo 'text-success';
goto label127;
goto label126;

label160:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t";

if (!e589a4Bf54A2dAd1('adv', 'streams')) {
	goto label516;
}

echo '<a href="./streams?filter=2&server=';
echo $Ec379295dc7029e6['id'];
echo '">';
goto label516;

label173:

echo "\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#streams" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Online Streams' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';

label174:

echo "\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#connections" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Active Connections' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t" . '</ul>' . "\r\n\t\t\t\t\t" . '<div class="tab-content">' . "\r\n\t\t\t\t\t\t" . '<div class="tab-pane active" id="cpu">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div id="cpu_chart-col" class="pt-3 show" dir="ltr">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div id="cpu_chart" class="apex-charts"></div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<div class="tab-pane" id="network">' . "\r\n\t\t\t\t\t\t\t" . '<div class="col-xl-12">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="card">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="card-body">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div id="network_chart-col" class="pt-3 show" dir="ltr">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<div id="network_chart" class="apex-charts"></div>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div> ' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

if (!($Ec379295dc7029e6['server_type'] == 0)) {
	goto label413;
}

echo "\t\t\t\t\t\t" . '<div class="tab-pane" id="streams">' . "\r\n\t\t\t\t\t\t\t" . '<div class="table">' . "\r\n\t\t\t\t\t\t\t\t" . '<table id="datatable_streams" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>ID</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Name</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Clients</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Uptime</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th>Actions</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th></th>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td colspan="10" class="text-center">Loading stream information...</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';
goto label413;

label182:

echo ' text-white">' . "\r\n\t\t\t\t\t\t\t" . '<div class="card-body active-connections">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="avatar-sm bg-light">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-pause avatar-title font-22 ';

if ($f1dcaed925076e67['dark_mode']) {
	goto label188;
}

echo 'text-info';
goto label468;

label188:

goto label467;

label189:

if (isset(XUI::$rRequest['id'])) {
	goto label194;
}

exit();

label194:

if (isset($Bcf70cba56392975[XUI::$rRequest['id']])) {
	goto label419;
}

if (isset($a080f5083618911e[XUI::$rRequest['id']])) {
	goto label3;
}

goto label1;

label205:

echo $B1a3986a5f168faf['serial'];
echo '" readonly>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                        <div class="form-group row">' . "\r\n" . '                            <label class="col-md-4 col-form-label" for="cert_subject">Certificate Subject</label>' . "\r\n" . '                            <div class="col-md-8">' . "\r\n" . '                                <input type="text" class="form-control" id="cert_subject" value="';
echo $B1a3986a5f168faf['subject'];
echo '" readonly>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

label211:

goto label401;

label212:

echo '                        <h5 class="mb-1 mt-0">Disk Usage<small class="text-muted ml-2"> of ';
echo 1099511627776.0 < $e23be30f5a16d035['total_disk_space'] ? number_format($e23be30f5a16d035['total_disk_space'] / 1024 / 1024 / 1024 / 1024, 0) . ' TB' : number_format($e23be30f5a16d035['total_disk_space'] / 1024 / 1024 / 1024, 0) . ' GB';
echo '</small></h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent" id="watchdog_disk">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">0%</span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        <h5 class="mb-1 mt-0">IO Wait<small class="text-muted ml-2" id="watchdog_idle"> 0% Idle</small></h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent" id="watchdog_io">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">0%</span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n" . '                        ';

label240:

echo "\t\t\t\t\t\t" . '<h5 class="mb-1 mt-0">Network Input<small class="text-muted ml-2">of ';
goto label19;

label242:

echo '                    <div class="col-md-6">' . "\r\n" . '                    ';
goto label245;

label244:

echo "\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n" . '                    ';

label245:

goto label246;

label246:

if (!e589a4Bf54a2Dad1('adv', 'live_connections')) {
	goto label257;
}

echo '<a href="./live_connections?server_id=';
echo $Ec379295dc7029e6['id'];
echo '">';

label257:

goto label818;

label258:

$Ec379295dc7029e6['gpu_info'] = json_decode($Ec379295dc7029e6['gpu_info'], true);
$Bf3377811d8e2b3a = [
	'cpu'    => [],
	'memory' => [],
	'io'     => [],
	'input'  => [],
	'output' => [],
	'dates'  => [NULL, NULL]
];

foreach (A28a55B8F823E432($Ec379295dc7029e6['id']) as $ba2d146bb5a55097) {
	goto label337;

	label274:

	$Bf3377811d8e2b3a['cpu'][] = [$ba2d146bb5a55097['time'] * 1000, floatval(rtrim($ba2d146bb5a55097['cpu'], '%'))];
	$Bf3377811d8e2b3a['memory'][] = [$ba2d146bb5a55097['time'] * 1000, floatval(rtrim($ba2d146bb5a55097['total_mem_used_percent'], '%'))];
	$Bf3377811d8e2b3a['io'][] = [$ba2d146bb5a55097['time'] * 1000, floatval(json_decode($ba2d146bb5a55097['iostat_info'], true)['avg-cpu']['iowait'])];
	$Bf3377811d8e2b3a['input'][] = [$ba2d146bb5a55097['time'] * 1000, round($ba2d146bb5a55097['bytes_received'] / 125000, 0)];
	goto label377;

	label337:
	if (!(!$Bf3377811d8e2b3a['dates'][0] || (($ba2d146bb5a55097['time'] * 1000) <= $Bf3377811d8e2b3a['dates'][0]))) {
		goto label356;
	}

	$Bf3377811d8e2b3a['dates'][0] = $ba2d146bb5a55097['time'] * 1000;

	label356:
	if (!(!$Bf3377811d8e2b3a['dates'][1] || ($Bf3377811d8e2b3a['dates'][1] <= $ba2d146bb5a55097['time'] * 1000))) {
		goto label274;
	}

	$Bf3377811d8e2b3a['dates'][1] = $ba2d146bb5a55097['time'] * 1000;
	goto label274;

	label377:

	$Bf3377811d8e2b3a['output'][] = [$ba2d146bb5a55097['time'] * 1000, round($ba2d146bb5a55097['bytes_sent'] / 125000, 0)];
	goto label392;

	label392:
}

$B1a3986a5f168faf = json_decode($Ec379295dc7029e6['certbot_ssl'], true);
goto label62;

label401:

echo "\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label402:

echo "\t\t\t\t" . '<div class="card-box">' . "\r\n\t\t\t\t\t" . '<ul class="nav nav-tabs nav-bordered nav-justified">' . "\r\n\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#cpu" data-toggle="tab" aria-expanded="true" class="nav-link active">' . "\r\n\t\t\t\t\t\t\t\t" . 'Resources' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n\t\t\t\t\t\t" . '<li class="nav-item">' . "\r\n\t\t\t\t\t\t\t" . '<a href="#network" data-toggle="tab" aria-expanded="false" class="nav-link">' . "\r\n\t\t\t\t\t\t\t\t" . 'Network Traffic' . "\r\n\t\t\t\t\t\t\t" . '</a>' . "\r\n\t\t\t\t\t\t" . '</li>' . "\r\n" . '                        ';

if (!($Ec379295dc7029e6['server_type'] == 0)) {
	goto label174;
}

goto label173;

label409:

$F6edd90960a3bd9d = 'View Server';

label410:

include 'header.php';
echo '<div class="wrapper boxed-layout-ext"';
goto label100;

label413:

echo "\t\t\t\t\t\t" . '<div class="tab-pane" id="connections">' . "\r\n\t\t\t\t\t\t\t" . '<div class="table">' . "\r\n\t\t\t\t\t\t\t\t" . '<table id="datatable_connections" class="table table-striped table-borderless mb-0">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<thead>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\r\n" . '                                            <th class="text-center">Quality</th>' . "\r\n" . '                                            <th>Username</th>' . "\r\n" . '                                            <th>Stream</th>' . "\r\n" . '                                            <th>Server</th>' . "\r\n" . '                                            <th>Player</th>' . "\r\n" . '                                            <th>ISP</th>' . "\r\n" . '                                            <th class="text-center">IP</th>' . "\r\n" . '                                            <th class="text-center">Duration</th>' . "\r\n" . '                                            <th class="text-center">Output</th>' . "\r\n" . '                                            <th class="text-center">Restreamer</th>' . "\r\n" . '                                            <th class="text-center">';
echo $_['actions'];
echo '</th>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</thead>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<tbody>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<tr>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<td colspan="9" class="text-center">Loading user information...</td>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</tr>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</tbody>' . "\r\n\t\t\t\t\t\t\t\t" . '</table>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t" . '</div> ' . "\r\n\t\t" . '</div>' . "\r\n\t" . '</div>' . "\r\n" . '</div>' . "\r\n";
goto label849;

label418:

goto label423;

label419:

$Ec379295dc7029e6 = $Bcf70cba56392975[XUI::$rRequest['id']];

label423:

$e23be30f5a16d035 = json_decode($Ec379295dc7029e6['watchdog_data'], true);
goto label258;

label430:

echo '"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-9">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="text-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1"><span data-plugin="counterup" class="entry" id="total_running_streams">0</span></h3>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-white mb-1 text-truncate">Streams</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t";

if (!E589a4Bf54A2dAD1('adv', 'streams')) {
	goto label439;
}

echo '</a>';

label439:

goto label160;

label440:

echo "\t\t\t\t\t" . '</div>' . "\r\n" . '                    ';

if ($Ec379295dc7029e6['server_type'] == 0) {
	goto label447;
}

echo '                    <div class="col-md-6">' . "\r\n" . '                    ';
goto label449;

label447:

goto label448;

label448:

echo "\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n" . '                    ';

label449:

if (!e589A4bF54A2dad1('adv', 'live_connections')) {
	goto label836;
}

echo '<a href="./live_connections?server_id=';
echo $Ec379295dc7029e6['id'];
goto label835;

label460:

if ($Ec379295dc7029e6['server_online']) {
	goto label465;
}

echo '                        <div class="text-center" style="padding-top: 15px;">' . "\r\n" . '                            <i class="fe-alert-triangle avatar-title font-24 text-danger"></i><br/>' . "\r\n" . '                        <h4 class="header-title text-danger">Server Offline</h4>' . "\r\n" . '                        </div>' . "\r\n" . '                        ';
goto label33;

label465:

echo "\t\t\t\t\t\t" . '<h5 class="mb-1 mt-0">CPU Usage<small class="text-muted ml-2">of ';
goto label44;

label467:

echo 'text-white';

label468:

echo '"></i>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-9">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="text-right">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<h3 class="text-white my-1"><span data-plugin="counterup" class="entry" id="offline_streams">0</span></h3>' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<p class="text-white mb-1 text-truncate">Down</p>' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t";

if (!E589A4bf54A2dAd1('adv', 'streams')) {
	goto label143;
}

echo '</a>';
goto label143;

label478:
if (isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_CERTBOT)) {
	goto label84;
}
if (!(isset($cbcf0bbd5e139431) && ($cbcf0bbd5e139431 == STATUS_CERTBOT_INVALID))) {
	goto label494;
}

echo '                <div class="alert alert-danger alert-dismissible fade show" role="alert">' . "\r\n\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\r\n\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\r\n\t\t\t\t\t" . '</button>' . "\r\n\t\t\t\t\t" . 'No valid domains were selected for Certbot automation. Please try again.' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";

label494:

goto label85;
goto label84;

label496:

echo '                <div class="card-box">' . "\r\n\t\t\t\t\t" . '<div class="col-md-12 align-self-center">' . "\r\n" . '                        <div class="form-group row mb-4">' . "\r\n" . '                            <label class="col-md-4 col-form-label" for="expiration_date">Certificate Expiration Date</label>' . "\r\n" . '                            <div class="col-md-8">' . "\r\n" . '                                <input type="text" class="form-control" id="expiration_date" value="';
echo $Aa9ae65659c17fca;
echo '" readonly>' . "\r\n" . '                            </div>' . "\r\n" . '                        </div>' . "\r\n" . '                        ';

if (!$a6c312069fd40fb3) {
	goto label211;
}

echo '                        <div class="form-group row mb-4">' . "\r\n" . '                            <label class="col-md-4 col-form-label" for="cert_serial">Certificate Serial</label>' . "\r\n" . '                            <div class="col-md-8">' . "\r\n" . '                                <input type="text" class="form-control" id="cert_serial" value="';
goto label205;

label504:

if (!E589a4bf54A2DAD1('adv', 'streams')) {
	goto label515;
}

echo '<a href="./streams?filter=1&server=';
echo $Ec379295dc7029e6['id'];
echo '">';

label515:

goto label842;

label516:

echo "\t\t\t\t\t\t" . '<div class="card cta-box ';

if ($f1dcaed925076e67['dark_mode']) {
	goto label521;
}

echo 'bg-info';

label521:

goto label182;

label522:

echo '</a>';

label523:

echo "\t\t\t\t\t" . '</div>' . "\r\n" . '                    ';

if (!($Ec379295dc7029e6['server_type'] == 0)) {
	goto label144;
}

echo "\t\t\t\t\t" . '<div class="col-md-3">' . "\r\n\t\t\t\t\t\t";
goto label504;

label531:

if (!is_array($Ec379295dc7029e6['gpu_info'])) {
	goto label402;
}

$A6c57a3ff6f232ae = 0;

foreach ($Ec379295dc7029e6['gpu_info']['gpus'] as $Fbd977da339c16e3) {
	goto label608;

	label545:

	echo ' Memory Usage<small class="text-muted ml-2"> ';
	echo number_format(explode(' ', $Fbd977da339c16e3['memory_usage']['used'])[0], 0);
	echo 'MB / ';
	echo number_format(explode(' ', $Fbd977da339c16e3['memory_usage']['total'])[0], 0);
	echo 'MB</small></h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">';
	goto label662;

	label576:

	echo '</small></h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">';
	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['gpu_util'])[0]);
	echo '% </span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar ';
	echo E66aE2739944Eb3A(intval(explode(' ', $Fbd977da339c16e3['utilisation']['gpu_util'])[0]));
	echo '" role="progressbar" style="width: ';
	goto label783;

	label608:

	$ff0b39290662c444 = number_format((intval(explode(' ', $Fbd977da339c16e3['memory_usage']['used'])[0]) / intval(explode(' ', $Fbd977da339c16e3['memory_usage']['total'])[0])) * 100, 0);
	echo "\t\t\t\t" . '<div class="card-box">' . "\r\n\t\t\t\t\t" . '<div class="col-md-12 align-self-center">' . "\r\n\t\t\t\t\t\t" . '<h5 class="mb-1 mt-0">GPU';
	echo $A6c57a3ff6f232ae;
	echo ' Usage<small class="text-muted ml-2"> ';
	echo $Fbd977da339c16e3['name'];
	goto label576;

	label644:

	echo '%;" aria-valuenow="';
	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['encoder_util'])[0]);
	echo '" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<h5 class="mb-1 mt-0">GPU';
	echo $A6c57a3ff6f232ae;
	echo ' Decoder Usage</h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">';
	goto label740;

	label662:

	echo $ff0b39290662c444;
	echo '% </span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar ';
	echo E66Ae2739944eb3a($ff0b39290662c444);
	echo '" role="progressbar" style="width: ';
	echo $ff0b39290662c444;
	goto label715;

	label672:

	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['encoder_util'])[0]);
	echo '% </span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar ';
	echo E66ae2739944eB3a(intval(explode(' ', $Fbd977da339c16e3['utilisation']['encoder_util'])[0]));
	echo '" role="progressbar" style="width: ';
	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['encoder_util'])[0]);
	goto label644;

	label715:

	echo '%;" aria-valuenow="';
	echo $ff0b39290662c444;
	echo '" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<h5 class="mb-1 mt-0">GPU';
	echo $A6c57a3ff6f232ae;
	echo ' Encoder Usage</h5>' . "\r\n\t\t\t\t\t\t" . '<div class="progress-w-percent">' . "\r\n\t\t\t\t\t\t\t" . '<span class="progress-value font-weight-bold">';
	goto label672;

	label722:

	echo '%;" aria-valuenow="';
	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['decoder_util'])[0]);
	echo '" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t" . '</div>' . "\r\n\t\t\t\t";
	$A6c57a3ff6f232ae++;
	goto label812;

	label740:

	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['decoder_util'])[0]);
	echo '% </span>' . "\r\n\t\t\t\t\t\t\t" . '<div class="progress progress-sm">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="progress-bar ';
	echo E66aE2739944eB3A(intval(explode(' ', $Fbd977da339c16e3['utilisation']['decoder_util'])[0]));
	echo '" role="progressbar" style="width: ';
	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['decoder_util'])[0]);
	goto label722;

	label783:

	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['gpu_util'])[0]);
	echo '%;" aria-valuenow="';
	echo intval(explode(' ', $Fbd977da339c16e3['utilisation']['gpu_util'])[0]);
	echo '" aria-valuemin="0" aria-valuemax="100"></div>' . "\r\n\t\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '</div>' . "\r\n\t\t\t\t\t\t" . '<h5 class="mb-1 mt-0">GPU';
	echo $A6c57a3ff6f232ae;
	goto label545;

	label812:
}

if (!$ba1606e875c3cddb) {
	goto label402;
}

goto label496;

label818:

echo "\t\t\t\t\t\t" . '<div class="card cta-box ';

if ($f1dcaed925076e67['dark_mode']) {
	goto label823;
}

echo 'bg-purple';

label823:

echo ' text-white">' . "\r\n\t\t\t\t\t\t\t" . '<div class="card-body active-connections">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="avatar-sm bg-light">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-zap avatar-title font-22 ';
goto label136;

label825:

$ba1606e875c3cddb = true;

if (!(time() < $B1a3986a5f168faf['expiration'])) {
	goto label834;
}

$a6c312069fd40fb3 = true;

label834:

goto label70;

label835:

echo '">';

label836:

echo "\t\t\t\t\t\t" . '<div class="card cta-box ';

if ($f1dcaed925076e67['dark_mode']) {
	goto label153;
}

echo 'bg-success';
goto label153;

label842:

echo "\t\t\t\t\t\t" . '<div class="card cta-box ';

if ($f1dcaed925076e67['dark_mode']) {
	goto label847;
}

echo 'bg-pink';

label847:

echo ' text-white">' . "\r\n\t\t\t\t\t\t\t" . '<div class="card-body active-connections">' . "\r\n\t\t\t\t\t\t\t\t" . '<div class="media align-items-center">' . "\r\n\t\t\t\t\t\t\t\t\t" . '<div class="col-3">' . "\r\n\t\t\t\t\t\t\t\t\t\t" . '<div class="avatar-sm bg-light">' . "\r\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="fe-play avatar-title font-22 ';
goto label12;

label849:

include 'footer.php';

?>