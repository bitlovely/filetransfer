<?php


goto label679;

label1:

foreach (XUI::$rServers as $Ec379295dc7029e6) {
	goto label547;

	label6:

	echo $Ec379295dc7029e6['id'];
	echo ', \'stop\');">Stop All Streams</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'kill\');">Kill Connections</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="./server?id=';
	echo $Ec379295dc7029e6['id'];
	goto label402;

	label16:

	echo $Ec379295dc7029e6['id'];
	echo '"><button type="button" title="Edit Server" class="btn btn-light waves-effect waves-light btn-xs tooltip"><i class="mdi mdi-pencil-outline"></i></button></a>' . "\n" . '                                            ';

	if ($Ec379295dc7029e6['enable_proxy']) {
		goto label580;
	}

	echo '                                            <button type="button" title="Enable Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	goto label577;

	label28:

	echo $Ec379295dc7029e6['id'];
	echo '"><i class="mdi mdi-creation"></i></button>' . "\n" . '                                            <button type="button" title="Restart Live Streams" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'restart\');"><i class="mdi mdi-refresh"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" title="Start All Streams" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	goto label258;

	label38:

	if (!$Ec379295dc7029e6['enabled']) {
		goto label503;
	}

	if ($Ec379295dc7029e6['server_online']) {
		goto label95;
	}

	if (0 < $Ec379295dc7029e6['last_check_ago']) {
		goto label189;
	}

	$f8bd5a091fcdba80 = 'Never';
	goto label196;
	goto label189;

	label57:

	$b89534efad61c2e2 = ['total_mem_used_percent' => '0', 'cpu' => '0'];

	label58:

	if (XUI::$rServers[$Ec379295dc7029e6['id']]['server_online']) {
		goto label394;
	}

	$b89534efad61c2e2['cpu'] = 0;
	$b89534efad61c2e2['total_mem_used_percent'] = 0;
	goto label394;

	label71:

	echo '                                        <input data-plugin="knob" data-width="48" data-height="48" data-bgColor="';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label80;
	}

	echo '#ebeff2';
	goto label236;

	label80:

	goto label235;

	label82:

	echo ' R' . $Ec379295dc7029e6['xui_revision'];

	label85:

	echo '                                        </button>' . "\n" . '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t\t";

	if (E589a4bF54A2Dad1('adv', 'edit_server')) {
		goto label481;
	}

	goto label478;

	label95:
	if (!$E0a8102c8d2ef5b6 && !$a76857631510ce75 && $Ec379295dc7029e6['xui_version'] && (($Ec379295dc7029e6['xui_version'] != $Bcf70cba56392975[SERVER_ID]['xui_version']) || ($Ec379295dc7029e6['xui_revision'] != $Bcf70cba56392975[SERVER_ID]['xui_revision']))) {
		goto label122;
	}

	echo '<i class="text-success fas fa-square tooltip" title="Online"></i>';
	goto label501;

	label122:

	goto label489;

	label124:

	goto label136;

	label126:

	$a93d58fa34cf616f = '<a href="./live_connections?server=' . $Ec379295dc7029e6['id'] . '"><button type=\'button\' class=\'btn btn-dark bg-animate btn-xs waves-effect waves-light no-border\'>' . number_format($a93d58fa34cf616f, 0) . '</button></a>';

	label136:

	echo $a93d58fa34cf616f;
	goto label420;

	label139:

	echo '">Server Tools</a>' . "\n" . '                                                <a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'restart\');">Restart Live Streams</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'start\');">Start All Streams</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	goto label6;

	label148:

	echo '" href="server_view?id=';
	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo $Ec379295dc7029e6['order'] ?: $Ec379295dc7029e6['id'];
	echo '</a></td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';
	goto label38;

	label160:

	echo '<i class="text-danger fas fa-square tooltip" title="Can\'t connect on ' . htmlentities($Ec379295dc7029e6['server_ip']) . ':' . intval($Ec379295dc7029e6['http_broadcast_port']) . '<br/>Last Ping: ' . $f8bd5a091fcdba80 . '"></i>';

	label175:

	goto label230;

	label177:

	echo '<i class="text-info fas fa-square tooltip" title="Updating..."></i>';
	goto label230;

	label180:

	echo '<i class="text-secondary fas fa-square tooltip" title="Disabled"></i>';

	label181:

	echo '                                    </td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';

	if ($Ec379295dc7029e6['enable_proxy']) {
		goto label671;
	}

	echo '<i class="text-secondary fas fa-square"></i>';
	goto label669;

	label189:

	$f8bd5a091fcdba80 = date($f1dcaed925076e67['datetime_format'], $Ec379295dc7029e6['last_check_ago']);

	label196:

	if ($Ec379295dc7029e6['status'] == 3) {
		goto label415;
	}

	if ($Ec379295dc7029e6['status'] == 4) {
		goto label232;
	}

	goto label213;

	label208:

	goto label211;

	label210:

	$E65328c8afa8e30a = '#23b397';

	label211:

	goto label71;

	label213:

	if ($Ec379295dc7029e6['status'] == 5) {
		goto label177;
	}

	if (!$Ec379295dc7029e6['remote_status']) {
		goto label228;
	}

	echo '<i class="text-danger fas fa-square tooltip" title="Last Ping: ' . $f8bd5a091fcdba80 . '"></i>';
	goto label175;

	label228:

	goto label160;

	label230:

	goto label233;

	label232:

	echo '<i class="text-warning fas fa-square tooltip" title="Installation Failed!"></i>';

	label233:

	goto label413;

	label235:

	echo '#7e8e9d';

	label236:

	echo '" data-fgColor="';
	echo $E65328c8afa8e30a;
	echo '" data-readOnly=true value="';
	goto label522;

	label241:

	echo "\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t";
	goto label465;

	label244:

	echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group dropdown">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-menu"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="dropdown-menu dropdown-menu-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item btn-reboot-server" href="javascript:void(0);" data-id="';
	echo $Ec379295dc7029e6['id'];
	goto label139;

	label249:

	echo '                                        <br/><small style="font-size: 8pt;">private: <a onClick="whois(\'';
	echo $Ec379295dc7029e6['private_ip'];
	echo '\');" href="javascript: void(0);">';
	echo $Ec379295dc7029e6['private_ip'];
	echo '</a></small>' . "\n" . '                                        ';
	goto label321;

	label258:

	echo ', \'start\');"><i class="mdi mdi-play"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" title="Stop All Streams" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'stop\');"><i class="mdi mdi-stop"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" title="Kill All Connections" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'kill\');"><i class="fas fa-hammer"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<a href="./server?id=';
	goto label16;

	label267:

	echo '                                            <button type="button" title="Delete Server" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'delete\');"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t";

	label271:

	goto label241;

	label273:

	$a93d58fa34cf616f = $Ec379295dc7029e6['connections'];

	label275:

	if (e589A4Bf54A2DaD1('adv', 'live_connections')) {
		goto label126;
	}

	$a93d58fa34cf616f = '<button type=\'button\' class=\'btn btn-dark bg-animate btn-xs waves-effect waves-light no-border\'>' . number_format($a93d58fa34cf616f, 0) . '</button>';
	goto label124;

	label291:

	goto label267;

	label293:

	echo '                                            <button type="button" title="Disable Server" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'disable\');"><i class="mdi mdi-close-network-outline"></i></button>' . "\n" . '                                            ';
	goto label267;

	label299:

	goto label302;

	label301:

	$E65328c8afa8e30a = '#f8cc6b';

	label302:

	goto label439;
	goto label438;

	label306:

	if (!($Ec379295dc7029e6['is_main'] == 0)) {
		goto label464;
	}

	if ($Ec379295dc7029e6['enabled']) {
		goto label572;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	goto label569;

	label321:

	echo '                                    </td>' . "\n" . '                                    <td class="text-center">' . "\n\t\t\t\t\t\t\t\t\t";

	if (XUI::$rSettings['redis_handler']) {
		goto label273;
	}

	$a93d58fa34cf616f = d8Bb46ce92ce0066($Ec379295dc7029e6['id']);
	goto label275;
	goto label273;

	label336:

	goto label675;

	label338:

	echo $Ec379295dc7029e6['id'];
	echo '">';
	echo $Ec379295dc7029e6['server_name'];
	echo !empty($Ec379295dc7029e6['domain_name']) ? '<br/><small>' . explode(',', $Ec379295dc7029e6['domain_name'])[0] . '</small>' : '';
	echo '</a></td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        <a onClick="whois(\'';
	goto label447;

	label361:

	echo number_format($b89534efad61c2e2['bytes_received'] / 125000, 0);
	echo '</span> <i class="mdi mdi-arrow-down-thick"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t" . '<br/><small>';
	echo number_format($Ec379295dc7029e6['network_guaranteed_speed'], 0);
	echo ' Mbps</small>' . "\n" . '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                        ';

	if (intval($b89534efad61c2e2['cpu']) <= 34) {
		goto label210;
	}

	goto label643;

	label386:

	goto label306;

	label388:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'disable_proxy\');">Disable Proxy</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label306;

	label394:

	echo "\t\t\t\t\t\t\t\t" . '<tr id="server-';
	echo $Ec379295dc7029e6['id'];
	echo '">' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center"><a data-id="';
	echo $Ec379295dc7029e6['id'];
	goto label148;

	label402:

	echo '">Edit Server</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

	if ($Ec379295dc7029e6['enable_proxy']) {
		goto label388;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'enable_proxy\');">Enable Proxy</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label386;

	label413:

	goto label416;

	label415:

	echo '<i class="text-info fas fa-square tooltip" title="Installing..."></i>';

	label416:

	goto label501;
	goto label95;

	label420:

	echo "\t\t\t\t\t\t\t\t\t" . '<br/><small>of ';
	echo number_format($Ec379295dc7029e6['total_clients'], 0);
	echo '</small>' . "\n" . '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td class="text-center">' . "\n" . '                                        <button type="button" class="btn btn-dark bg-animate btn-xs waves-effect waves-light no-border"><span id="header_streams_up">';
	echo number_format($b89534efad61c2e2['bytes_sent'] / 125000, 0);
	echo '</span> <i class="mdi mdi-arrow-up-thick"></i> &nbsp; <span id="header_streams_down">';
	goto label361;

	label438:

	$E65328c8afa8e30a = '#23b397';

	label439:

	echo '                                        <input data-plugin="knob" data-width="48" data-height="48" data-bgColor="';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label519;
	}

	goto label516;

	label447:

	echo $Ec379295dc7029e6['server_ip'];
	echo '\');" href="javascript: void(0);">';
	echo $Ec379295dc7029e6['server_ip'];
	echo '</a>' . "\n" . '                                        ';

	if (!(0 < strlen($Ec379295dc7029e6['private_ip']))) {
		goto label321;
	}

	goto label249;

	label464:

	echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t";

	label465:

	echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t\t";
	goto label336;

	label468:

	if ($Ec379295dc7029e6['enabled']) {
		goto label293;
	}

	echo '                                            <button type="button" title="Enable Server" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'enable\');"><i class="mdi mdi-access-point-network"></i></button>' . "\n" . '                                            ';
	goto label291;

	label478:

	echo '--';
	goto label465;

	label481:

	if (XUI::$rSettings['group_buttons']) {
		goto label244;
	}

	echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="btn-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" title="Server Tools" class="btn btn-light waves-effect waves-light btn-xs btn-reboot-server tooltip" data-id="';
	goto label28;

	label489:

	echo '<a href="javascript: void(0);" onClick="api(' . intval($Ec379295dc7029e6['id']) . ', \'update\');"><i class="text-success mdi mdi-download tooltip" style="font-size:14pt;" title="An update is available! v' . $Bcf70cba56392975[SERVER_ID]['xui_version'] . '"></i></a>';

	label501:

	goto label181;

	label503:

	goto label180;

	label505:

	echo '" data-fgColor="';
	echo $E65328c8afa8e30a;
	echo '" data-readOnly=true value="';
	echo intval($b89534efad61c2e2['total_mem_used_percent']);
	echo '"/>' . "\n" . '                                    </td>' . "\n" . '                                    <td class="text-center"><button type=\'button\' class=\'btn btn-light btn-xs waves-effect waves-light\'>';
	goto label585;

	label516:

	echo '#ebeff2';
	goto label520;

	label519:

	echo '#7e8e9d';

	label520:

	goto label505;

	label522:

	echo intval($b89534efad61c2e2['cpu']);
	echo '"/>' . "\n" . '                                    </td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        ';

	if (intval($b89534efad61c2e2['total_mem_used_percent']) <= 34) {
		goto label438;
	}

	if (intval($b89534efad61c2e2['total_mem_used_percent']) <= 67) {
		goto label301;
	}

	$E65328c8afa8e30a = '#f0643b';
	goto label299;

	label547:

	if (!($Ec379295dc7029e6['server_type'] != 0)) {
		goto label555;
	}

	goto label336;

	label555:

	$b89534efad61c2e2 = json_decode($Ec379295dc7029e6['watchdog_data'], true);

	if (is_array($b89534efad61c2e2)) {
		goto label58;
	}

	goto label57;

	label569:

	echo ', \'enable\');">Enable Server</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label618;

	label572:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	goto label617;

	label577:

	echo ', \'enable_proxy\');"><i class="mdi mdi-shield-check-outline"></i></button>' . "\n" . '                                            ';
	goto label633;

	label580:

	echo '                                            <button type="button" title="Disable Proxy" class="btn btn-light waves-effect waves-light btn-xs tooltip" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	goto label632;

	label585:

	echo number_format($Ec379295dc7029e6['server_online'] ? $Ec379295dc7029e6['ping'] : 0, 0);
	echo ' ms</button></td>' . "\n" . '                                    <td class="text-center">' . "\n" . '                                        <button type=\'button\' class=\'btn ';
	if (($Ec379295dc7029e6['xui_version'] != $Bcf70cba56392975[SERVER_ID]['xui_version']) || ($Ec379295dc7029e6['xui_revision'] != $Bcf70cba56392975[SERVER_ID]['xui_revision'])) {
		goto label624;
	}

	echo 'btn-light';
	goto label625;
	goto label624;

	label617:

	echo ', \'disable\');">Disable Server</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";

	label618:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<a class="dropdown-item" href="javascript:void(0);" onClick="api(';
	echo $Ec379295dc7029e6['id'];
	echo ', \'delete\');">Delete Server</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label464;

	label624:

	echo 'btn-warning';

	label625:

	echo ' btn-xs waves-effect waves-light\'>' . "\n" . '                                            ';

	if ($Ec379295dc7029e6['xui_version']) {
		goto label660;
	}

	goto label657;

	label632:

	echo ', \'disable_proxy\');"><i class="mdi mdi-shield-off-outline"></i></button>' . "\n" . '                                            ';

	label633:

	if ($Ec379295dc7029e6['is_main'] == 0) {
		goto label468;
	}

	echo '                                            <button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-access-point-network"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<button disabled type="button" class="btn btn-light waves-effect waves-light btn-xs"><i class="mdi mdi-close"></i></button>' . "\n\t\t\t\t\t\t\t\t\t\t\t";
	goto label271;
	goto label468;

	label643:

	if (intval($b89534efad61c2e2['cpu']) <= 67) {
		goto label654;
	}

	$E65328c8afa8e30a = '#f0643b';
	goto label208;

	label654:

	$E65328c8afa8e30a = '#f8cc6b';
	goto label208;

	label657:

	echo 'N/A';
	goto label85;

	label660:

	echo $Ec379295dc7029e6['xui_version'];

	if (!$Ec379295dc7029e6['xui_revision']) {
		goto label85;
	}

	goto label82;

	label669:

	goto label672;

	label671:

	echo '<i class="text-success fas fa-square"></i>';

	label672:

	echo '                                    </td>' . "\n\t\t\t\t\t\t\t\t\t" . '<td><a href="server_view?id=';
	goto label338;

	label675:
}

echo "\t\t\t\t\t\t\t" . '</tbody>' . "\n\t\t\t\t\t\t" . '</table>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label716;

label679:

include 'session.php';
include 'functions.php';

if (e6D500E19634D513()) {
	goto label687;
}

E72f42A93714BA87();

label687:

goto label693;

label688:

echo ' style="display: none;"';

label689:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n\t\t\t\t\t\t";
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Servers</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body" style="overflow-x:auto;">' . "\n\t\t\t\t\t\t" . '<table id="datatable" class="table table-striped table-borderless dt-responsive nowrap">' . "\n\t\t\t\t\t\t\t" . '<thead>' . "\n\t\t\t\t\t\t\t\t" . '<tr>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Order</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Status</th>' . "\n" . '                                    <th class="text-center">Proxied</th>' . "\n" . '                                    <th>Server Name</th>' . "\n" . '                                    <th class="text-center">Server IP</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Connections</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Network</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">CPU %</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">MEM %</th>' . "\n" . '                                    <th class="text-center">Ping</th>' . "\n" . '                                    <th class="text-center">Version</th>' . "\n\t\t\t\t\t\t\t\t\t" . '<th class="text-center">Actions</th>' . "\n\t\t\t\t\t\t\t\t" . '</tr>' . "\n\t\t\t\t\t\t\t" . '</thead>' . "\n\t\t\t\t\t\t\t" . '<tbody>' . "\n\t\t\t\t\t\t\t\t";
goto label1;

label693:

XUI::$rServers = XUI::f76008f8DfE1898c(true);
$F6edd90960a3bd9d = 'Servers';
include 'header.php';
echo '<div class="wrapper"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label689;
}

goto label688;

label716:

include 'footer.php';

?>