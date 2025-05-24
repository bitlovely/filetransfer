<?php


goto label506;

label1:

echo ' style="display: none;"';

label2:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n\t\t\t\t\t\t";
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Proxy Servers</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">ID</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\n" . '                                    <th>Proxy Name</th>' . "\n" . '                                    <th>Proxied Server</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Proxy IP</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Network</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">CPU %</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">MEM %</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Ping</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";
goto label6;

label6:

foreach (XUI::$rServers as $Ec379295dc7029e6) {
	goto label182;

	label11:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" title="Proxy Tools" class="btn btn-light waves-effect waves-light btn-xs btn-reboot-server tooltip" data-id="';
	echo $Ec379295dc7029e6['id'];
	echo '"><i class="mdi mdi-creation"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" title="Kill All Connections" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'kill\');"><i class="fas fa-hammer"></i></button>' . "\n" . '                                            <a href="./proxy?id=';
	goto label437;

	label20:

	$b89534efad61c2e2 = ['total_mem_used_percent' => 0, 'cpu' => 0];

	label21:

	if (XUI::$rServers[$Ec379295dc7029e6['id']]['server_online']) {
		goto label34;
	}

	$b89534efad61c2e2['cpu'] = 0;
	$b89534efad61c2e2['total_mem_used_percent'] = 0;
	goto label34;

	label34:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="server-';
	echo $Ec379295dc7029e6['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">';
	echo $Ec379295dc7029e6['id'];
	goto label449;

	label42:

	echo '" data-fgColor="';
	echo $E65328c8afa8e30a;
	echo '" data-readOnly=true value="';
	echo intval($b89534efad61c2e2['cpu']);
	echo '"/>' . "\n" . '                                    </td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';
	goto label53;

	label53:

	if (intval($b89534efad61c2e2['total_mem_used_percent']) <= 34) {
		goto label207;
	}

	if (intval($b89534efad61c2e2['total_mem_used_percent']) <= 67) {
		goto label72;
	}

	$E65328c8afa8e30a = '#f0643b';
	goto label205;

	label72:

	goto label204;

	label74:

	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo !empty($Ec379295dc7029e6['domain_name']) ? '<br/><small>' . explode(',', $Ec379295dc7029e6['domain_name'])[0] . '</small>' : '';
	echo '</a></td>' . "\n" . '                                    <td><a href="server_view?id=';
	echo $Ec379295dc7029e6['parent_id'][0];
	goto label328;

	label98:

	echo '<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>';

	label99:

	echo '                                    </td>' . "\n" . '                                    <td><a href="server_view?id=';
	echo $Ec379295dc7029e6['id'];
	goto label74;

	label104:

	echo intval($Ec379295dc7029e6['id']);
	echo ');" type=\'button\' class=\'tooltip-left btn btn-info btn-xs waves-effect waves-light\'>+ ';
	echo count($Ec379295dc7029e6['parent_id']) - 1;
	echo '</button>';

	label117:

	goto label210;

	label119:

	goto label479;

	label121:

	echo '</small>' . "\n" . '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                        <button type="button" class="btn btn-dark bg-animate btn-xs waves-effect waves-light no-border"><span id="header_streams_up">';
	echo number_format($b89534efad61c2e2['bytes_sent'] / 125000, 0);
	echo '</span> <i class="mdi mdi-arrow-up-thick"></i> &nbsp; <span id="header_streams_down">';
	echo number_format($b89534efad61c2e2['bytes_received'] / 125000, 0);
	echo '</span> <i class="mdi mdi-arrow-down-thick"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<br/><small>';
	goto label355;

	label140:

	echo ', \'disable\');"><i class="mdi mdi-close-network-outline"></i></button>' . "\n" . '                                            ';

	label141:

	echo '                                            <button type="button" title="Delete Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t";
	goto label347;

	label147:

	echo $Ec379295dc7029e6['id'];
	echo ', \'delete\');">Delete Proxy</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t";

	label150:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label119;

	label153:

	goto label162;

	label155:

	$f8bd5a091fcdba80 = date($f1dcaed925076e67['datetime_format'], $Ec379295dc7029e6['last_check_ago']);

	label162:

	if ($Ec379295dc7029e6['status'] == 3) {
		goto label434;
	}

	goto label407;

	label169:

	echo '<i class="text-info fas fa-square tooltip" title="Updating..."></i>';

	label170:

	goto label432;

	label172:

	echo '<i class="text-warning fas fa-square tooltip" title="Installation Failed!"></i>';
	goto label432;

	label175:

	goto label178;

	label177:

	echo '<i class="text-success fas fa-square tooltip" title="Online"></i>';

	label178:

	goto label99;
	goto label98;

	label182:

	if (!($Ec379295dc7029e6['server_type'] != 1)) {
		goto label190;
	}

	goto label119;

	label190:

	$b89534efad61c2e2 = json_decode($Ec379295dc7029e6['watchdog_data'], true);

	if (is_array($b89534efad61c2e2)) {
		goto label21;
	}

	goto label20;

	label204:

	$E65328c8afa8e30a = '#f8cc6b';

	label205:

	goto label250;

	label207:

	$E65328c8afa8e30a = '#23b397';
	goto label250;

	label210:

	echo '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center"><a onClick="whois(\'';
	echo $Ec379295dc7029e6['server_ip'];
	echo '\');" href="javascript: void(0);">';
	echo $Ec379295dc7029e6['server_ip'];
	echo '</a></td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t";
	goto label219;

	label219:

	$a93d58fa34cf616f = D8Bb46CE92cE0066($Ec379295dc7029e6['id'], true);

	if (E589A4bF54a2dAd1('adv', 'live_connections')) {
		goto label241;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-dark bg-animate btn-xs waves-effect waves-light no-border\'>' . number_format($a93d58fa34cf616f, 0) . '</button>';
	goto label301;

	label241:

	goto label291;

	label243:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'disable\');">Disable Proxy</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

	label247:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	goto label147;

	label250:

	echo '                                        <input data-plugin="knob" data-width="48" data-height="48" data-bgColor="';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label402;
	}

	echo '#ebeff2';
	goto label403;
	goto label402;

	label261:

	echo '" data-readOnly=true value="';
	echo intval($b89534efad61c2e2['total_mem_used_percent']);
	echo '"/>' . "\n" . '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light\'>';
	echo number_format($Ec379295dc7029e6['server_online'] ? $Ec379295dc7029e6['ping'] : 0, 0);
	echo ' ms</button></td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";
	goto label311;

	label282:

	$E65328c8afa8e30a = '#23b397';

	label283:

	echo '                                        <input data-plugin="knob" data-width="48" data-height="48" data-bgColor="';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label392;
	}

	goto label389;

	label291:

	$a93d58fa34cf616f = '<a href="./live_connections?server=' . $Ec379295dc7029e6['id'] . '"><button type=\'button\' class=\'btn btn-dark bg-animate btn-xs waves-effect waves-light no-border\'>' . number_format($a93d58fa34cf616f, 0) . '</button></a>';

	label301:

	echo $a93d58fa34cf616f;
	echo "\t\t\t\t\t\t\t\t\t" . '<br/><small>of ';
	echo number_format($Ec379295dc7029e6['total_clients'], 0);
	goto label121;

	label311:

	if (E589A4Bf54a2dAD1('adv', 'edit_server')) {
		goto label321;
	}

	echo '--';
	goto label150;

	label321:

	if (XUI::$rSettings['group_buttons']) {
		goto label349;
	}

	goto label11;

	label328:

	echo '">';
	echo $Bcf70cba56392975[$Ec379295dc7029e6['parent_id'][0]]['server_name'];
	echo '</a>';

	if (!(1 < count($Ec379295dc7029e6['parent_id']))) {
		goto label117;
	}

	echo '&nbsp; <button title="View All Servers" onClick="viewServers(';
	goto label104;

	label347:

	goto label150;

	label349:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group dropdown">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dropdown-menu dropdown-menu-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item btn-reboot-server" href="javascript:void(0);" data-id="';
	echo $Ec379295dc7029e6['id'];
	echo '">Proxy Tools</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	goto label467;

	label355:

	echo number_format($Ec379295dc7029e6['network_guaranteed_speed'], 0);
	echo ' Mbps</small>' . "\n" . '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                        ';

	if (intval($b89534efad61c2e2['cpu']) <= 34) {
		goto label282;
	}

	if (intval($b89534efad61c2e2['cpu']) <= 67) {
		goto label397;
	}

	$E65328c8afa8e30a = '#f0643b';
	goto label395;

	label381:

	echo ', \'enable\');"><i class="mdi mdi-access-point-network"></i></button>' . "\n" . '                                            ';
	goto label141;

	label384:

	echo '                                            <button type="button" title="Disable Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	goto label140;

	label389:

	echo '#ebeff2';
	goto label393;

	label392:

	echo '#7e8e9d';

	label393:

	goto label42;

	label395:

	goto label398;

	label397:

	$E65328c8afa8e30a = '#f8cc6b';

	label398:

	goto label283;
	goto label282;

	label402:

	echo '#7e8e9d';

	label403:

	echo '" data-fgColor="';
	echo $E65328c8afa8e30a;
	goto label261;

	label407:

	if ($Ec379295dc7029e6['status'] == 4) {
		goto label172;
	}

	if ($Ec379295dc7029e6['status'] == 5) {
		goto label422;
	}

	echo '<i class="text-danger fas fa-square tooltip" title="Last Ping: ' . $f8bd5a091fcdba80 . '"></i>';
	goto label170;

	label422:

	goto label169;

	label424:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'enable\');">Enable Proxy</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label247;

	label430:

	goto label243;

	label432:

	goto label435;

	label434:

	echo '<i class="text-info fas fa-square tooltip" title="Installing..."></i>';

	label435:

	goto label175;

	label437:

	echo $Ec379295dc7029e6['id'];
	echo '"><button type="button" title="Edit Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n" . '                                            ';

	if ($Ec379295dc7029e6['enabled']) {
		goto label384;
	}

	echo '                                            <button type="button" title="Enable Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	goto label381;

	label449:

	echo '</td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';

	if (!$Ec379295dc7029e6['enabled']) {
		goto label98;
	}

	if ($Ec379295dc7029e6['server_online']) {
		goto label177;
	}

	if (0 < $Ec379295dc7029e6['last_check_ago']) {
		goto label155;
	}

	$f8bd5a091fcdba80 = 'Never';
	goto label153;

	label467:

	echo $Ec379295dc7029e6['id'];
	echo ', \'kill\');">Kill Connections</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="./proxy?id=';
	echo $Ec379295dc7029e6['id'];
	echo '">Edit Proxy</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

	if ($Ec379295dc7029e6['enabled']) {
		goto label430;
	}

	goto label424;

	label479:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label515;

label483:

XUI::$rServers = XUI::f76008F8dFE1898C(true);
$F6edd90960a3bd9d = 'Proxy Servers';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label2;
}

goto label1;

label506:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label514;
}

E72F42A93714BA87();

label514:

goto label483;

label515:

include 'footer.php';

?>