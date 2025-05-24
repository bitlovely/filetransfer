<?php


goto label1944;

label1:

if (isset(XUI::$rRequest['server_id'])) {
	goto label1258;
}

$Cc2b5dfe75dc164b = 3600;
$Ab13f2545dd3df14 = time();
$fa59d8fa25ff8bf2 = $Ab13f2545dd3df14 - $Cc2b5dfe75dc164b;
goto label1371;

label12:

echo ' text-white">' . "\n" . '                    <div class="card-body active-streams">' . "\n" . '                        <div class="media align-items-center">' . "\n" . '                            <div class="col-3">' . "\n" . '                                <div class="avatar-sm bg-light">' . "\n" . '                                    <i class="fe-play avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label151;
}

echo 'text-info';
goto label152;
goto label151;

label20:

if (!(1000000 <= $Be0cffd1b0df2a01)) {
	goto label32;
}

$C8d2d044d6d8e940 = true;
echo '<div class="timeline-item">' . "\n" . '                                            <i class="timeline-icon bg-dark"></i>' . "\n" . '                                            <div class="timeline-item-info">' . "\n" . '                                                <a href="stream_errors" class="text-body font-weight-semibold mb-1 d-block bg"><strong>Stream Error Logs</strong></a>' . "\n" . '                                                <small>You have <strong>' . number_format($Be0cffd1b0df2a01, 0) . ' logs</strong> stored. <span class="text-secondary">This may indiciate some serious stream issues. You should investigate and clear old logs.</span></small><br/>' . "\n" . '                                                <p><br/></p>' . "\n" . '                                            </div>' . "\n" . '                                        </div>';

label32:

goto label1309;

label33:

echo 'text-white';

label34:

echo '"></i>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-9">' . "\n" . '                                <div class="text-right">' . "\n" . '                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span> <small>Mbps</small></h3>' . "\n" . '                                    <p class="text-white mb-1 text-truncate">Network Output</p>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            <div class="col-md-4">' . "\n" . '                <div class="card cta-box ';

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label1184;
}

echo 'bg-danger';
goto label1184;

label42:

$F6edd90960a3bd9d = 'Dashboard';
include 'header.php';
echo '<div class="wrapper">' . "\n" . '    <div class="container-fluid">' . "\n\t\t";

if (e589A4bf54a2DAd1('adv', 'index')) {
	goto label1897;
}

echo "\t\t" . '<div class="alert alert-danger show text-center" role="alert" style="margin-top:20px;">' . "\n\t\t\t";
goto label1115;

label53:

goto label55;

label54:

echo 'text-white';

label55:

echo '"></i>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-9">' . "\n" . '                                <div class="text-right">' . "\n" . '                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>' . "\n" . '                                    <p class="text-white mb-1 text-truncate">Active Lines</p>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '                ';
goto label1354;

label57:

goto label32;

label58:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_activity`;');
$B067043d61a156d5 = $b62d6460eb33ea07->get_row()['count'] ?: 0;

if (!(1000000 <= $B067043d61a156d5)) {
	goto label1280;
}

goto label1272;

label72:

echo '</strong>.<br/>The panel will continue operating until the timer runs out, however if you plan on continuing using XUI you\'ll need to pay your invoice with enough time left for it to verify and update your expiration date on the server.<br/>You can manually update your license by clicking License Info in the Settings dropdown menu.</p>' . "\n" . '                                <a href="https://xui.one/billing/" class="text-white font-weight-semibold text-uppercase">Go to Billing Panel <i class="mdi mdi-arrow-right"></i></a>' . "\n" . '                            </div>' . "\n" . '                            <img class="ml-3 whiteout" src="./assets/images/logo-topbar.png" width="80" style="margin-right: 20px;">' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '                ';

label73:

goto label1294;

label74:

echo '                <div class="card cta-box bg-info text-white">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <div class="media align-items-center">' . "\n" . '                            <div class="media-body">' . "\n" . '                                ';
goto label1133;

label76:

goto label78;

label77:

$F5fb28bd49709b5a = 'Trial';

label78:

goto label42;

label79:

echo '            </div>' . "\n" . '            <div class="col-md-4">' . "\n" . '                <div class="card cta-box ';

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label86;
}

echo 'bg-primary';

label86:

goto label1222;

label87:

echo 'value="">All Servers</option>' . "\n" . '                                ';

foreach ($Bcf70cba56392975 as $C815cfd0505ca88e) {
	goto label92;

	label92:

	if (!$C815cfd0505ca88e['enabled']) {
		goto label122;
	}

	echo '                                    <option value="';
	echo $C815cfd0505ca88e['id'];
	echo '"';
	if (!(isset(XUI::$rRequest['server_id']) && (XUI::$rRequest['server_id'] == $C815cfd0505ca88e['id']))) {
		goto label116;
	}

	goto label115;

	label115:

	echo ' selected';

	label116:

	echo '>';
	echo $C815cfd0505ca88e['server_name'];
	echo '</option>' . "\n" . '                                ';
	goto label122;

	label122:

	goto label124;

	label124:
}

echo '                            </select>' . "\n" . '                        </ol>' . "\n" . '                    </div>' . "\n" . '                    ';
goto label161;

label128:

if ($C8d2d044d6d8e940) {
	goto label131;
}

echo '                                <div class="timeline-item">' . "\n" . '                                    <i class="timeline-icon bg-dark"></i>' . "\n" . '                                    <div class="timeline-item-info">' . "\n" . '                                        <a href="#" class="text-body font-weight-semibold mb-1 d-block bg"><strong>No potential issues have been detected!</strong></a>' . "\n" . '                                        <p><br/></p>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                                ';

label131:

echo '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n\t\t\t";

label132:

goto label1413;

label133:

echo "\t\t" . '</div>' . "\n\t\t";

label134:

echo "\t" . '</div>' . "\n" . '</div>' . "\n";
goto label1963;

label136:

echo '</a>';

label137:

echo '            </div>' . "\n" . '            <div class="col-md-4">' . "\n" . '                ';

if (!E589A4BF54A2dAd1('adv', 'streams')) {
	goto label1295;
}

echo '<a href="./streams?filter=2">';
goto label1295;

label147:

echo '                                A new invoice should have been generated for you in the billing panel, please ensure you pay with enough time left for it to verify and update your expiration date on the server.<br/>You can manually update your license by clicking License Info in the Settings dropdown menu.</p>' . "\n" . '                                ';
goto label150;

label149:

echo '                                Your Beta license is linked to your Main license, to renew this license you should renew your Main license instead via the billing panel.</p>' . "\n" . '                                ';

label150:

goto label1432;

label151:

echo 'text-white';

label152:

echo '"></i>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-9">' . "\n" . '                                <div class="text-right">' . "\n" . '                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>' . "\n" . '                                    <p class="text-white mb-1 text-truncate">Live Streams</p>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '                ';

if (!e589A4BF54A2DaD1('adv', 'streams')) {
	goto label137;
}

goto label136;

label161:

if ($Ebb0b63f7c597ba4) {
	goto label1217;
}

echo '                    <h4 class="page-title">' . "\n" . '                    ';

if (isset(XUI::$rRequest['server_id'])) {
	goto label1192;
}

echo 'Dashboard';
goto label1216;
goto label1192;

label171:
if (!(!file_exists(CONFIG_PATH . 'signals.last') || (600 < (time() - filemtime(CONFIG_PATH . 'signals.last'))))) {
	goto label193;
}

$C8d2d044d6d8e940 = true;
echo '<div class="timeline-item">' . "\n" . '                                        <i class="timeline-icon bg-dark"></i>' . "\n" . '                                        <div class="timeline-item-info">' . "\n" . '                                            <a href="javascript:void(0);" class="text-body font-weight-semibold mb-1 d-block bg"><strong>Root Crons Missing</strong></a>' . "\n" . '                                            <small>Root cronjob hasn\'t run recently, please check root crontab or run <strong>/home/xui/status</strong></small><br/>' . "\n" . '                                            <p><br/></p>' . "\n" . '                                        </div>' . "\n" . '                                    </div>';

label193:

if (!XUI::$rSettings['use_buffer']) {
	goto label1453;
}

goto label1451;

label199:

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1;
}

$df6991d59f367c7e = 0;

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label224;

	label212:

	$Fb9da1713bff19ce['name'] = $B11711270ed77c61[$Fb9da1713bff19ce['geoip_country_code']];

	label216:

	$B1e93ae2ae39e1ff += $Fb9da1713bff19ce['count'];
	$B692d6e1f0cf1f67[] = $Fb9da1713bff19ce;
	$df6991d59f367c7e++;
	goto label245;

	label224:

	if ($df6991d59f367c7e < count($fc758e2d726b37ee)) {
		goto label240;
	}

	$Fb9da1713bff19ce['colour'] = $fc758e2d726b37ee[count($fc758e2d726b37ee) - 1];
	goto label247;

	label240:

	$Fb9da1713bff19ce['colour'] = $fc758e2d726b37ee[$df6991d59f367c7e];
	goto label247;

	label245:

	goto label258;

	label247:

	if (isset($B11711270ed77c61[$Fb9da1713bff19ce['geoip_country_code']])) {
		goto label256;
	}

	$Fb9da1713bff19ce['name'] = 'Unknown Country';
	goto label216;

	label256:

	goto label212;

	label258:
}

goto label1;

label261:
if (!(($a3c3f656c0bb428b[3] < time()) && (time() <= $a3c3f656c0bb428b[4]))) {
	goto label73;
}

echo '                <div class="card cta-box bg-danger text-white">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <div class="media align-items-center">' . "\n" . '                            <div class="media-body">' . "\n" . '                                <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title"><strong>';
echo $F5fb28bd49709b5a;
echo ' Expired!</strong></h3>' . "\n" . '                                <p class="text-light mt-2 ">XUI will shut down in <strong>';
echo XUI::A5D0A3407690f047($a3c3f656c0bb428b[4] - time());
goto label72;

label286:

echo ' will expire in <strong>';
echo XUI::A5D0a3407690f047($a3c3f656c0bb428b[3] - time());
echo '</strong>.<br/><br/>' . "\n" . '                                ';

if ($F5fb28bd49709b5a == 'Trial') {
	goto label1433;
}

if ($F5fb28bd49709b5a == 'Beta License') {
	goto label149;
}

goto label147;

label303:

echo 'text-white';

label304:

echo '"></i>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-9">' . "\n" . '                                <div class="text-right">' . "\n" . '                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>' . "\n" . '                                    <p class="text-white mb-1 text-truncate">Down Streams</p>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '                ';

if (!e589A4bF54a2daD1('adv', 'streams')) {
	goto label79;
}

echo '</a>';
goto label79;

label314:

foreach ($D2dab59f18f3fe06 as $Ec379295dc7029e6) {
	goto label463;

	label318:

	echo '_requests" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2">' . "\n" . '                            <h4 class="header-title">';
	echo $_['uptime'];
	echo '</h4>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2 text-center">' . "\n" . '                            <button id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_uptime" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0d 0h</button>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-4 col-4">' . "\n" . '                            <div class="progress-w-left">' . "\n" . '                                <h4 class="progress-value header-title">IO</h4>' . "\n" . '                                <div class="progress progress-xl">' . "\n" . '                                    <div class="progress-bar" id="s_';
	goto label344;

	label327:

	goto label598;

	label329:

	echo '            <div class="col-xl-6 col-md-12">' . "\n" . '                <a href="./server_view?id=';
	echo $Ec379295dc7029e6['id'];
	echo '">' . "\n" . '                    <div class="card-header bg-';
	goto label453;

	label335:

	echo '_conns" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button></a>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2">' . "\n" . '                            <h4 class="header-title">';
	echo $_['users'];
	echo '</h4>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2 text-center">' . "\n" . '                            <a href="live_connections?server=';
	echo $Ec379295dc7029e6['id'];
	echo '"><button id="s_';
	goto label481;

	label344:

	echo $Ec379295dc7029e6['id'];
	echo '_io" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                    <div class="row">' . "\n" . '                        <div class="col-md-2 col-2">' . "\n" . '                            <h4 class="header-title">';
	echo $_['input'];
	echo '<small>&nbsp;(Mbps)</small></h4>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2 text-center">' . "\n" . '                            <button id="s_';
	echo $Ec379295dc7029e6['id'];
	goto label578;

	label354:

	echo '_users">0</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['online'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_online">0</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	goto label602;

	label363:

	if ($Ec379295dc7029e6['enabled']) {
		goto label370;
	}

	$aa41a88080a3dd62 = 'Server Disabled';
	goto label373;

	label370:

	$aa41a88080a3dd62 = 'Load Balancer';
	goto label373;

	label373:

	goto label376;

	label375:

	$aa41a88080a3dd62 = 'Main Server';

	label376:

	goto label631;

	label378:

	echo ' bg-white';

	label379:

	echo '">' . "\n" . '                        <div class="row" style="margin-bottom:-20px;">' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['conns'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	goto label568;

	label385:

	echo '</small></h5>' . "\n" . '                    </div>' . "\n" . '                </a>' . "\n" . '                <div class="card-header no-margin-bottom py-3 text-white';

	if (!($E59d0debc75e7be8['theme'] == 0)) {
		goto label393;
	}

	echo ' bg-white';

	label393:

	echo '">' . "\n" . '                    <div class="row">' . "\n" . '                        <div class="col-md-2 col-2">' . "\n" . '                            <h4 class="header-title">';
	goto label546;

	label396:

	echo '" data-bgColor="#e8e7f4" value="0" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-4" align="center">' . "\n" . '                                <h4 class="header-title">MEM %</h4>' . "\n" . '                                <input class="knob" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_mem" data-plugin="knob" data-width="64" data-height="64" data-fgColor="';
	echo $Ab121eb6486019fe[$df6991d59f367c7e][1];
	echo '" data-bgColor="#e8e7f4" value="0" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-4" align="center">' . "\n" . '                                <h4 class="header-title">DISK %</h4>' . "\n" . '                                <input class="knob" id="s_';
	goto label491;

	label406:

	if ($Ec379295dc7029e6['server_type'] == 0) {
		goto label615;
	}

	if ($Ec379295dc7029e6['enabled']) {
		goto label418;
	}

	$aa41a88080a3dd62 = 'Proxy Disabled';
	goto label613;

	label418:

	goto label612;

	label420:

	echo '" data-stroke="';
	echo $Ab121eb6486019fe[$df6991d59f367c7e][2];
	echo '" data-width="100%" data-height="50" data-min="0" data-max="100">';
	echo is_array($d14a20b240a88fb2[$Ec379295dc7029e6['id']]) ? implode(',', $d14a20b240a88fb2[$Ec379295dc7029e6['id']]) : '';
	echo '</span>' . "\n" . '                    </div>' . "\n" . '                </a>' . "\n" . '            </div>' . "\n" . '            ';
	goto label327;

	label444:

	echo '&filter=1"><button id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_online" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button></a>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2">' . "\n" . '                            <h4 class="header-title">Down</h4>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2 text-center">' . "\n" . '                            <a href="streams?server=';
	echo $Ec379295dc7029e6['id'];
	echo '&filter=2"><button id="s_';
	goto label621;

	label453:

	echo $Ab121eb6486019fe[$df6991d59f367c7e][0];
	echo ' py-3 text-white">' . "\n" . '                        <div class="float-right">' . "\n" . '                            <i class="mdi mdi-chart-line"></i>' . "\n" . '                        </div>' . "\n" . '                        <h5 class="card-title mb-0 text-white">';
	echo $Ec379295dc7029e6['server_name'];
	echo '<br/><small>';
	echo $aa41a88080a3dd62;
	goto label385;

	label463:
	if (!($Ec379295dc7029e6['enabled'] && $Ec379295dc7029e6['server_online'])) {
		goto label598;
	}

	$df6991d59f367c7e++;

	if (!($df6991d59f367c7e == 5)) {
		goto label479;
	}

	$df6991d59f367c7e = 1;

	label479:

	goto label406;

	label481:

	echo $Ec379295dc7029e6['id'];
	echo '_users" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button></a>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-4 col-4">' . "\n" . '                            <div class="progress-w-left">' . "\n" . '                                <h4 class="progress-value header-title">CPU</h4>' . "\n" . '                                <div class="progress progress-xl">' . "\n" . '                                    <div class="progress-bar" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_cpu" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                    <div class="row">' . "\n" . '                        <div class="col-md-2 col-2">' . "\n" . '                            <h4 class="header-title">Streams&nbsp;Live</h4>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2 text-center">' . "\n" . '                            <a href="streams?server=';
	echo $Ec379295dc7029e6['id'];
	goto label444;

	label491:

	echo $Ec379295dc7029e6['id'];
	echo '_fs" data-plugin="knob" data-width="64" data-height="64" data-fgColor="';
	echo $Ab121eb6486019fe[$df6991d59f367c7e][1];
	echo '" data-bgColor="#e8e7f4" value="0" data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                    <div class="card-footer">' . "\n" . '                        <span data-plugin="peity-line" data-fill="';
	echo $Ab121eb6486019fe[$df6991d59f367c7e][2];
	goto label420;

	label503:

	echo $Ec379295dc7029e6['id'];
	echo '_uptime">0d 0h</p>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                    <div class="card-box no-margin-bottom light-grey">' . "\n" . '                        <div class="row">' . "\n" . '                            <div class="col-md-4 col-4" align="center">' . "\n" . '                                <h4 class="header-title">CPU %</h4>' . "\n" . '                                <input class="knob" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_cpu" data-plugin="knob" data-width="64" data-height="64" data-fgColor="';
	echo $Ab121eb6486019fe[$df6991d59f367c7e][1];
	goto label396;

	label514:

	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_output">0 Mbps</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['uptime'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	goto label503;

	label523:

	echo $Ec379295dc7029e6['server_name'];
	echo '<br/><small>';
	echo $aa41a88080a3dd62;
	echo '</small></h5>' . "\n" . '                    </div>' . "\n" . '                    <div class="card-header py-3 text-white';

	if (!($E59d0debc75e7be8['theme'] == 0)) {
		goto label379;
	}

	goto label378;

	label536:

	echo '            <div class="col-xl-3 col-md-6">' . "\n" . '                <a href="./server_view?id=';
	echo $Ec379295dc7029e6['id'];
	echo '">' . "\n" . '                    <div class="card-header bg-';
	echo $Ab121eb6486019fe[$df6991d59f367c7e][0];
	echo ' py-3 text-white text-center">' . "\n" . '                        <h5 class="card-title mb-0 text-white">';
	goto label523;

	label546:

	echo $_['connections'];
	echo '</h4>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2 text-center">' . "\n" . '                            <a href="live_connections?server=';
	echo $Ec379295dc7029e6['id'];
	echo '"><button id="s_';
	echo $Ec379295dc7029e6['id'];
	goto label335;

	label556:

	echo $Ec379295dc7029e6['id'];
	echo '_fs" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '                <div class="card-footer">' . "\n" . '                    <span data-plugin="peity-line" data-fill="';
	echo $Ab121eb6486019fe[$df6991d59f367c7e][2];
	echo '" data-stroke="';
	echo $Ab121eb6486019fe[$df6991d59f367c7e][2];
	goto label587;

	label568:

	echo $Ec379295dc7029e6['id'];
	echo '_conns">0</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['users'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	echo $Ec379295dc7029e6['id'];
	goto label354;

	label578:

	echo '_input" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2">' . "\n" . '                            <h4 class="header-title">';
	echo $_['output'];
	echo '<small>&nbsp;(Mbps)</small></h4>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2 text-center">' . "\n" . '                            <button id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_output" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-4 col-4">' . "\n" . '                            <div class="progress-w-left">' . "\n" . '                                <h4 class="progress-value header-title">DISK</h4>' . "\n" . '                                <div class="progress progress-xl">' . "\n" . '                                    <div class="progress-bar" id="s_';
	goto label556;

	label587:

	echo '" data-width="100%" data-height="50" data-min="0" data-max="100">';
	echo implode(',', $d14a20b240a88fb2[$Ec379295dc7029e6['id']] ?: []);
	echo '</span>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            ';

	label598:

	goto label600;

	label600:

	goto label649;

	label602:

	echo $_['input'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_input">0 Mbps</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['output'];
	goto label514;

	label612:

	$aa41a88080a3dd62 = 'Proxy Server';

	label613:

	goto label640;

	label615:

	if ($Ec379295dc7029e6['is_main']) {
		goto label375;
	}

	goto label363;

	label621:

	echo $Ec379295dc7029e6['id'];
	echo '_offline" type="button" class="btn btn-light btn-xs waves-effect waves-light btn-fixed-min">0</button></a>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-4 col-4">' . "\n" . '                            <div class="progress-w-left">' . "\n" . '                                <h4 class="progress-value header-title">MEM</h4>' . "\n" . '                                <div class="progress progress-xl">' . "\n" . '                                    <div class="progress-bar" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_mem" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                    <div class="row">' . "\n" . '                        <div class="col-md-2 col-2">' . "\n" . '                            <h4 class="header-title">Requests<small>&nbsp;/sec</small></small></h4>' . "\n" . '                        </div>' . "\n" . '                        <div class="col-md-2 col-2 text-center">' . "\n" . '                            <button id="s_';
	echo $Ec379295dc7029e6['id'];
	goto label318;

	label631:
	if (!($Ec379295dc7029e6['enable_proxy'] && $Ec379295dc7029e6['enabled'])) {
		goto label640;
	}

	$aa41a88080a3dd62 .= ' (proxied)';

	label640:
	if ($f1dcaed925076e67['dashboard_display_alt'] && !$Ebb0b63f7c597ba4) {
		goto label329;
	}

	goto label536;

	label649:
}

$df6991d59f367c7e = 0;

foreach ($D2dab59f18f3fe06 as $Ec379295dc7029e6) {
	goto label977;

	label656:

	echo $E59d0debc75e7be8['theme'] == 1 ? '#434b56' : '#7e8e9d';
	echo '" data-width="100%" data-height="50" data-min="0" data-max="100">';
	echo implode(',', $d14a20b240a88fb2[$Ec379295dc7029e6['id']] ?: []);
	echo '</span>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            ';

	label674:

	goto label896;

	label676:

	echo '"></i>' . "\n" . '                                <h4 class="header-title ';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label813;
	}

	echo 'text-info';
	goto label814;
	goto label813;

	label687:

	if ($Ec379295dc7029e6['enabled']) {
		goto label694;
	}

	$aa41a88080a3dd62 = 'Server Disabled';
	goto label972;

	label694:

	$aa41a88080a3dd62 = 'Load Balancer';
	goto label972;

	label697:

	echo '                        </div>' . "\n" . '                    </div>' . "\n" . '                    <div class="card-footer">' . "\n" . '                        <span data-plugin="peity-line" data-fill="';
	echo $E59d0debc75e7be8['theme'] == 1 ? '#434b56' : '#7e8e9d';
	echo '" data-stroke="';
	echo $E59d0debc75e7be8['theme'] == 1 ? '#434b56' : '#7e8e9d';
	echo '" data-width="100%" data-height="50" data-min="0" data-max="100">';
	goto label782;

	label716:

	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_output">0 Mbps</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['uptime'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	goto label898;

	label725:

	echo 'text-warning';
	goto label729;

	label728:

	echo 'text-white';

	label729:

	goto label879;

	label731:
	if (!($Ec379295dc7029e6['enable_proxy'] && $Ec379295dc7029e6['enabled'])) {
		goto label740;
	}

	$aa41a88080a3dd62 .= ' (proxied)';

	label740:
	if ($f1dcaed925076e67['dashboard_display_alt'] && !$Ebb0b63f7c597ba4) {
		goto label801;
	}

	goto label770;

	label749:

	echo $_['input'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_input">0 Mbps</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['output'];
	goto label716;

	label759:

	echo '                            <div class="col-12 text-center" style="padding-top: 15px;">' . "\n" . '                                <i class="fe-alert-triangle avatar-title font-22 ';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label945;
	}

	echo 'text-warning';
	goto label946;
	goto label945;

	label770:

	echo '            <div class="col-xl-3 col-md-6">' . "\n" . '                <a href="./server_view?id=';
	echo $Ec379295dc7029e6['id'];
	echo '">' . "\n" . '                    <div class="card-header ';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label922;
	}

	echo 'bg-dark';
	goto label920;

	label782:

	echo is_array($d14a20b240a88fb2[$Ec379295dc7029e6['id']]) ? implode(',', $d14a20b240a88fb2[$Ec379295dc7029e6['id']]) : '';
	echo '</span>' . "\n" . '                    </div>' . "\n" . '                </a>' . "\n" . '            </div>' . "\n" . '            ';
	goto label674;

	label801:

	echo '            <div class="col-xl-6 col-md-12">' . "\n" . '                <a href="./server_view?id=';
	goto label1019;

	label804:

	$aa41a88080a3dd62 = 'Proxy Server';

	label805:

	goto label740;

	label807:

	if ($Ec379295dc7029e6['is_main']) {
		goto label974;
	}

	goto label687;

	label813:

	echo 'text-white';

	label814:

	echo '">Installing...</h4>' . "\n" . '                            </div>' . "\n" . '                            ';

	label815:

	goto label697;

	label817:

	echo $Ec379295dc7029e6['server_name'];
	echo '<br/><small>';
	echo $aa41a88080a3dd62;
	echo '</small></h5>' . "\n" . '                    </div>' . "\n" . '                    <div class="card-header py-3 text-white';

	if (!($E59d0debc75e7be8['theme'] == 0)) {
		goto label867;
	}

	goto label866;

	label830:

	if ($Ec379295dc7029e6['server_type'] == 0) {
		goto label807;
	}

	if ($Ec379295dc7029e6['enabled']) {
		goto label842;
	}

	$aa41a88080a3dd62 = 'Proxy Disabled';
	goto label805;

	label842:

	goto label804;

	label844:

	echo '">' . "\n" . '                    <div class="col-12 text-center" style="padding-top: 70px;">' . "\n" . '                        <a href="./server_view?id=';
	echo $Ec379295dc7029e6['id'];
	echo '">' . "\n" . '                            <i class="fe-alert-triangle avatar-title font-22 ';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label876;
	}

	goto label873;

	label855:

	echo '"></i>' . "\n" . '                            <h4 class="header-title ';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label864;
	}

	echo 'text-danger';
	goto label997;

	label864:

	goto label996;

	label866:

	echo ' bg-white';

	label867:

	echo '">' . "\n" . '                        <div class="row" style="margin-bottom:-20px;">' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['conns'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	goto label935;

	label873:

	echo 'text-danger';
	goto label877;

	label876:

	echo 'text-white';

	label877:

	goto label855;

	label879:

	echo '">Install Failed!</h4>' . "\n" . '                            </div>' . "\n" . '                            ';

	label880:

	goto label815;

	label882:

	echo '                            <div class="col-12 text-center" style="padding-top: 15px;">' . "\n" . '                                <i class="mdi mdi-creation avatar-title font-22 ';
	goto label1008;

	label885:

	echo '"></i>' . "\n" . '                                <h4 class="header-title ';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label966;
	}

	echo 'text-danger';
	goto label967;
	goto label966;

	label896:

	goto label1043;

	label898:

	echo $Ec379295dc7029e6['id'];
	echo '_uptime">0d 0h</p>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                    <div class="card-box no-margin-bottom light-grey">' . "\n" . '                        <div class="row">' . "\n" . '                            ';

	if ($Ec379295dc7029e6['status'] == 3) {
		goto label882;
	}

	if ($Ec379295dc7029e6['status'] == 4) {
		goto label759;
	}

	echo '                            <div class="col-12 text-center" style="padding-top: 15px;">' . "\n" . '                                <i class="fe-alert-triangle avatar-title font-22 ';
	goto label1032;

	label914:

	echo 'bg-light';

	label915:

	echo ' py-3 text-white">' . "\n" . '                        <div class="float-right">' . "\n" . '                            <i class="mdi mdi-chart-line"></i>' . "\n" . '                        </div>' . "\n" . '                        <h5 class="card-title mb-0 text-white">';
	echo $Ec379295dc7029e6['server_name'];
	goto label954;

	label920:

	goto label923;

	label922:

	echo 'bg-light';

	label923:

	echo ' py-3 text-white text-center">' . "\n" . '                        <h5 class="card-title mb-0 text-white">';
	goto label817;

	label926:

	echo '_users">0</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['online'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	echo $Ec379295dc7029e6['id'];
	echo '_online">0</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	goto label749;

	label935:

	echo $Ec379295dc7029e6['id'];
	echo '_conns">0</p>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-md-4 col-6" align="center">' . "\n" . '                                <h4 class="header-title">';
	echo $_['users'];
	echo '</h4>' . "\n" . '                                <p class="sub-header" id="s_';
	echo $Ec379295dc7029e6['id'];
	goto label926;

	label945:

	echo 'text-white';

	label946:

	echo '"></i>' . "\n" . '                                <h4 class="header-title ';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label728;
	}

	goto label725;

	label954:

	echo '<br/><small>';
	echo $aa41a88080a3dd62;
	echo '</small></h5>' . "\n" . '                    </div>' . "\n" . '                </a>' . "\n" . '                <div class="card-header no-margin-bottom py-3 text-white';

	if (!($E59d0debc75e7be8['theme'] == 0)) {
		goto label844;
	}

	echo ' bg-white';
	goto label844;

	label966:

	echo 'text-white';

	label967:

	echo '">Server Offline</h4>' . "\n" . '                            </div>' . "\n" . '                            ';
	goto label880;
	goto label759;

	label972:

	goto label975;

	label974:

	$aa41a88080a3dd62 = 'Main Server';

	label975:

	goto label731;

	label977:
	if (!($Ec379295dc7029e6['enabled'] && !$Ec379295dc7029e6['server_online'])) {
		goto label896;
	}

	$df6991d59f367c7e++;

	if (!($df6991d59f367c7e == 5)) {
		goto label994;
	}

	$df6991d59f367c7e = 1;

	label994:

	goto label830;

	label996:

	echo 'text-white';

	label997:

	echo '">Server Offline</h4>' . "\n" . '                        </a>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '                <div class="card-footer">' . "\n" . '                    <span data-plugin="peity-line" data-fill="';
	echo $E59d0debc75e7be8['theme'] == 1 ? '#434b56' : '#7e8e9d';
	echo '" data-stroke="';
	goto label656;

	label1008:

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label1016;
	}

	echo 'text-info';
	goto label676;

	label1016:

	echo 'text-white';
	goto label676;

	label1019:

	echo $Ec379295dc7029e6['id'];
	echo '">' . "\n" . '                    <div class="card-header ';

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label914;
	}

	echo 'bg-dark';
	goto label915;
	goto label914;

	label1032:

	if ($E59d0debc75e7be8['theme'] == 1) {
		goto label1040;
	}

	echo 'text-danger';
	goto label885;

	label1040:

	echo 'text-white';
	goto label885;

	label1043:
}

goto label133;

label1046:
if (!($f1dcaed925076e67['save_closed_connection'] && $f1dcaed925076e67['dashboard_map'])) {
	goto label1918;
}

echo '            <div class="col-xl-12">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <h4 class="header-title mb-0">Connections by Location</h4>' . "\n" . '                        <div id="location-col" class="collapse pt-3 show">' . "\n" . '                            <div class="row">' . "\n" . '                                <div class="col-md-8 align-self-center">' . "\n" . '                                    <div id="map"  style="height: 450px" class="dash-map"></div>' . "\n" . '                                </div>' . "\n" . '                                <div class="col-md-4 align-self-center">' . "\n" . '                                    ';

foreach (array_slice($B692d6e1f0cf1f67, 0, 5) as $b8f81a9f6e93f6a9) {
	goto label1098;

	label1063:

	echo round(($b8f81a9f6e93f6a9['count'] / $B1e93ae2ae39e1ff) * 100, 0);
	echo '% </span>' . "\n" . '                                        <div class="progress progress-sm">' . "\n" . '                                            <div class="progress-bar ';
	echo $b8f81a9f6e93f6a9['colour'][1];
	echo '" role="progressbar" style="width: ';
	echo round(($b8f81a9f6e93f6a9['count'] / $B1e93ae2ae39e1ff) * 100, 0);
	goto label1086;

	label1086:

	echo '%;" aria-valuenow="';
	echo round(($b8f81a9f6e93f6a9['count'] / $B1e93ae2ae39e1ff) * 100, 0);
	echo '" aria-valuemin="0" aria-valuemax="100"></div>' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    ';
	goto label1111;

	label1098:

	echo '                                    <h5 class="mb-1 mt-0">';
	echo number_format($b8f81a9f6e93f6a9['count'], 0);
	echo ' <small class="text-muted ml-2">';
	echo $b8f81a9f6e93f6a9['name'];
	echo '</small></h5>' . "\n" . '                                    <div class="progress-w-percent">' . "\n" . '                                        <span class="progress-value font-weight-bold">';
	goto label1063;

	label1111:
}

echo '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            ';
goto label1918;

label1115:

echo $_['dashboard_no_permissions'];
echo '<br/>';
echo $_['dashboard_nav_top'];
echo "\t\t" . '</div>' . "\n\t\t";
goto label134;
goto label1897;

label1123:

echo '            </div>' . "\n" . '            ';

if ($Ebb0b63f7c597ba4) {
	goto label1918;
}

if (!$f1dcaed925076e67['dashboard_status']) {
	goto label132;
}

echo '            <div class="col-xl-6">' . "\n" . '                <div class="card" style="height: 390px; overflow:hidden;">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <h4 class="header-title mb-4">Service Status</h4>' . "\n" . '                        <div style="max-height: 288px; overflow-y: scroll;">' . "\n" . '                            <div class="timeline-alt">' . "\n" . '                                ';
$C8d2d044d6d8e940 = false;
goto label1141;

label1133:

if ($F5fb28bd49709b5a == 'Beta License') {
	goto label1914;
}

echo '                                <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title"><strong>';
echo $F5fb28bd49709b5a;
echo ' Expires Soon!</strong></h3>' . "\n" . '                                ';
goto label1915;
goto label1914;

label1141:

try {
	$D577b2a7889a5fb6 = $b62d6460eb33ea07->dbh->query('SELECT JSON_CONTAINS(\'0\', 0, \'$\') AS `json_test`;');
}
catch (Exception $E0f0519e12b13b6b) {
	$C8d2d044d6d8e940 = true;
	echo '<div class="timeline-item">' . "\n" . '                                        <i class="timeline-icon bg-danger"></i>' . "\n" . '                                        <div class="timeline-item-info">' . "\n" . '                                            <a href="javascript:void(0);" class="text-body font-weight-semibold mb-1 d-block bg"><strong>MariaDB Outdated!</strong></a>' . "\n" . '                                            <small>You\'re using an old version of MariaDB. Please update to at least v10.5 in order for XUI to work correctly.</small><br/>' . "\n" . '                                            <p><br/></p>' . "\n" . '                                        </div>' . "\n" . '                                    </div>';
}
if (!(empty(XUI::$rSettings['status_uuid']) || (XUI::$rSettings['status_uuid'] != md5(XUI_VERSION . (!!XUI_REVISION ? 'R' . XUI_REVISION : ''))))) {
	goto label1177;
}

$C8d2d044d6d8e940 = true;
echo '<div class="timeline-item">' . "\n" . '                                        <i class="timeline-icon bg-warning"></i>' . "\n" . '                                        <div class="timeline-item-info">' . "\n" . '                                            <a href="javascript:void(0);" class="text-body font-weight-semibold mb-1 d-block bg"><strong>Database Incomplete</strong></a>' . "\n" . '                                            <small>Your database is outdated, please run <strong>/home/xui/status</strong> as root user to update your tables.</small><br/>' . "\n" . '                                            <p><br/></p>' . "\n" . '                                        </div>' . "\n" . '                                    </div>';

label1177:

goto label171;

label1178:

if ($a76857631510ce75) {
	goto label1182;
}

$F5fb28bd49709b5a = 'License';
goto label76;

label1182:

$F5fb28bd49709b5a = 'Beta License';
goto label76;

label1184:

echo ' text-white">' . "\n" . '                    <div class="card-body input-flow">' . "\n" . '                        <div class="media align-items-center">' . "\n" . '                            <div class="col-3">' . "\n" . '                                <div class="avatar-sm bg-light">' . "\n" . '                                    <i class="fe-trending-down avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label1238;
}

echo 'text-danger';
goto label1239;
goto label1238;

label1192:

echo XUI::$rServers[intval(XUI::$rRequest['server_id'])]['server_name'] . '&nbsp; <a href=\'server_view?id=' . intval(XUI::$rRequest['server_id']) . '\' class=\'btn btn-light waves-effect waves-light btn-xs tooltip-right\' title=\'View Server\'><i class=\'mdi mdi-chart-line\'></i></a><a href=\'process_monitor?server=' . intval(XUI::$rRequest['server_id']) . '\' class=\'btn btn-light waves-effect waves-light btn-xs tooltip-right\' title=\'Process Monitor\'><i class=\'mdi mdi-chart-bar\'></i></a>';

label1216:

echo '</h4>' . "\n" . '                    ';

label1217:

goto label1903;

label1218:

goto label1221;

label1219:

$Ab121eb6486019fe = [
	1 => ['secondary', '#7e8e9d', '#ffffff'],
	2 => ['secondary', '#7e8e9d', '#ffffff'],
	3 => ['secondary', '#7e8e9d', '#ffffff'],
	4 => ['secondary', '#7e8e9d', '#ffffff']
];
$fc758e2d726b37ee = [
	['#7e8e9d', 'bg-map-dark-1'],
	['#6c7b8a', 'bg-map-dark-2'],
	['#5a6977', 'bg-map-dark-3'],
	['#485765', 'bg-map-dark-4'],
	['#374654', 'bg-map-dark-5'],
	['#273643', 'bg-map-dark-6']
];

label1221:

goto label1397;

label1222:

echo ' text-white">' . "\n" . '                    <div class="card-body output-flow">' . "\n" . '                        <div class="media align-items-center">' . "\n" . '                            <div class="col-3">' . "\n" . '                                <div class="avatar-sm bg-light">' . "\n" . '                                    <i class="fe-trending-up avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label1229;
}

echo 'text-primary';
goto label34;

label1229:

goto label33;

label1230:

echo '100%';

label1231:

echo ';">' . "\n" . '                            <select id="server_id" class="form-control">' . "\n" . '                                <option ';

if (isset(XUI::$rRequest['server_id'])) {
	goto label87;
}

echo 'selected ';
goto label87;

label1238:

echo 'text-white';

label1239:

echo '"></i>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-9">' . "\n" . '                                <div class="text-right">' . "\n" . '                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span> <small>Mbps</small></h3>' . "\n" . '                                    <p class="text-white mb-1 text-truncate">Network Input</p>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            <div class="col-12">' . "\n" . '            ';
if (((time() < $a3c3f656c0bb428b[3]) && (($a3c3f656c0bb428b[3] - time()) < 604800)) || $E0a8102c8d2ef5b6 || $a76857631510ce75) {
	goto label74;
}

goto label261;

label1258:

$D2dab59f18f3fe06 = $Bcf70cba56392975;
array_multisort(array_column($D2dab59f18f3fe06, 'order'), SORT_ASC, $D2dab59f18f3fe06);

if ($E0a8102c8d2ef5b6) {
	goto label77;
}

goto label1178;

label1272:

$C8d2d044d6d8e940 = true;
echo '<div class="timeline-item">' . "\n" . '                                            <i class="timeline-icon bg-dark"></i>' . "\n" . '                                            <div class="timeline-item-info">' . "\n" . '                                                <a href="line_activity" class="text-body font-weight-semibold mb-1 d-block bg"><strong>Activity Logs</strong></a>' . "\n" . '                                                <small>You have <strong>' . number_format($B067043d61a156d5, 0) . ' logs</strong> stored. <span class="text-secondary">This can significantly slow down the user interface. You should consider clearing these.</span></small><br/>' . "\n" . '                                                <p><br/></p>' . "\n" . '                                            </div>' . "\n" . '                                        </div>';

label1280:

$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_errors`;');
$Be0cffd1b0df2a01 = $b62d6460eb33ea07->get_row()['count'] ?: 0;
goto label20;

label1290:

if ($Ebb0b63f7c597ba4) {
	goto label1293;
}

echo '                            <img class="ml-3 whiteout" src="./assets/images/logo-topbar.png" width="80" style="margin-right: 20px;">' . "\n" . '                            ';

label1293:

echo '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '                ';

label1294:

goto label1123;

label1295:

echo '                <div class="card cta-box ';

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label1302;
}

echo 'bg-pink';

label1302:

goto label1924;

label1303:

echo '>' . "\n" . '                        <ol class="breadcrumb m-0" style="width: ';

if ($Ebb0b63f7c597ba4) {
	goto label1308;
}

echo '250px';
goto label1231;

label1308:

goto label1230;

label1309:

if (isset(XUI::$rRequest['server_id'])) {
	goto label1461;
}

$f8bd5a091fcdba80 = array_column(XUI::$rServers, 'last_check_ago');
array_multisort($f8bd5a091fcdba80, SORT_DESC, XUI::$rServers);
$cd87d639f25864fe = XUI::$rServers;
goto label1467;
goto label1461;

label1330:

if (isset(XUI::$rRequest['server_id'])) {
	goto label1338;
}

$b62d6460eb33ea07->query('SELECT `geoip_country_code`, COUNT(`geoip_country_code`) AS `count` FROM `lines_activity` GROUP BY `geoip_country_code` ORDER BY `count` DESC;');
goto label199;

label1338:

$b62d6460eb33ea07->query('SELECT `geoip_country_code`, COUNT(`geoip_country_code`) AS `count` FROM `lines_activity` WHERE (`server_id` = ? OR `proxy_id` = ?) GROUP BY `geoip_country_code` ORDER BY `count` DESC;', intval(XUI::$rRequest['server_id']), intval(XUI::$rRequest['server_id']));
goto label199;

label1354:

if (!E589A4bf54A2DAd1('adv', 'live_connections')) {
	goto label1362;
}

echo '</a>';

label1362:

echo '            </div>' . "\n" . '            <div class="col-md-4">' . "\n" . '                ';

if (!E589a4Bf54A2DAd1('adv', 'streams')) {
	goto label1955;
}

goto label1954;

label1371:

$d14a20b240a88fb2 = [];
$b62d6460eb33ea07->query('SELECT * FROM `servers_stats` WHERE `time` >= ? ORDER BY `time` ASC;', $fa59d8fa25ff8bf2);

if (!(0 < $b62d6460eb33ea07->num_rows())) {
	goto label1258;
}

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	$d14a20b240a88fb2[intval($Fb9da1713bff19ce['server_id'])][] = $Fb9da1713bff19ce['cpu'];
}

goto label1258;

label1397:
if (!(isset(XUI::$rRequest['server_id']) && !isset($Bcf70cba56392975[XUI::$rRequest['server_id']]))) {
	goto label1410;
}

e72f42A93714bA87();

label1410:

$B692d6e1f0cf1f67 = [];
$B1e93ae2ae39e1ff = 0;
goto label1330;

label1413:

if (!$f1dcaed925076e67['dashboard_stats']) {
	goto label1918;
}

echo '            <div class="col-xl-6">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <h4 class="header-title mb-0">CPU & Memory</h4>' . "\n" . '                        <div id="cpu_chart-col" class="pt-3 show" dir="ltr">' . "\n" . '                            <div id="cpu_chart" class="apex-charts"></div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            <div class="col-xl-6">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <h4 class="header-title mb-0">Network Traffic</h4>' . "\n" . '                        <div id="network_chart-col" class="pt-3 show" dir="ltr">' . "\n" . '                            <div id="network_chart" class="apex-charts"></div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            ';

if (!$f1dcaed925076e67['save_closed_connection']) {
	goto label1423;
}

echo '            <div class="col-xl-6">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <h4 class="header-title mb-0">Connections</h4>' . "\n" . '                        <div id="connections_chart-col" class="pt-3 show" dir="ltr">' . "\n" . '                            <div id="connections_chart" class="apex-charts"></div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            ';

label1423:

goto label1046;

label1424:

echo 'bg-success';

label1425:

echo ' text-white">' . "\n" . '                    <div class="card-body online-users">' . "\n" . '                        <div class="media align-items-center">' . "\n" . '                            <div class="col-3">' . "\n" . '                                <div class="avatar-sm bg-light">' . "\n" . '                                    <i class="fe-users avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label54;
}

echo 'text-success';
goto label53;

label1432:

goto label1434;

label1433:

echo '                                If you want to continue using XUI, you will need to order a normal license via the billing panel.<br/>This installation is non-transferable however you can backup your database and restore it on the non-trial version of XUI.</p>' . "\n" . '                                ';

label1434:

echo '                                <a href="https://xui.one/billing/" class="text-white font-weight-semibold text-uppercase">Go to Billing Panel <i class="mdi mdi-arrow-right"></i></a>' . "\n" . '                            </div>' . "\n" . '                            ';
goto label1290;

label1436:

echo '"></i>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                            <div class="col-9">' . "\n" . '                                <div class="text-right">' . "\n" . '                                    <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>' . "\n" . '                                    <p class="text-white mb-1 text-truncate">Online Connections</p>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '                ';

if (!E589a4bF54a2DaD1('adv', 'live_connections')) {
	goto label1445;
}

echo '</a>';

label1445:

echo '            </div>' . "\n" . '            <div class="col-md-4">' . "\n" . '                ';
goto label1882;

label1447:

echo 'text-purple';
goto label1450;

label1449:

echo 'text-white';

label1450:

goto label1436;

label1451:

$C8d2d044d6d8e940 = true;
echo '<div class="timeline-item">' . "\n" . '                                        <i class="timeline-icon bg-dark"></i>' . "\n" . '                                        <div class="timeline-item-info">' . "\n" . '                                            <a href="settings" class="text-body font-weight-semibold mb-1 d-block bg"><strong>NGINX Buffer</strong></a>' . "\n" . '                                            <small>You have enabled <strong>NGINX Buffer</strong> in settings. <span class="text-secondary">While this isn\'t an issue, if you don\'t know what this does you should disable this.</span></small><br/>' . "\n" . '                                            <p><br/></p>' . "\n" . '                                        </div>' . "\n" . '                                    </div>';

label1453:

if (!isset(XUI::$rRequest['server_id'])) {
	goto label58;
}

$Be0cffd1b0df2a01 = $B067043d61a156d5 = 0;
goto label57;

label1461:

$cd87d639f25864fe = [XUI::$rServers[XUI::$rRequest['server_id']]];

label1467:

foreach ($cd87d639f25864fe as $Ec379295dc7029e6) {
	goto label1758;

	label1471:

	if (!$c60b264a3c1c4445['clients']) {
		goto label1490;
	}

	echo '<small>Current connections is <strong>' . number_format($ce95ea5d02ef202d, 0) . ' / ' . number_format($Ec379295dc7029e6['total_clients'], 0) . '</strong>. <span class="text-secondary">Clients will be unable to connect if the limit is reached.</span></small><br/>';

	label1490:

	if (!$c60b264a3c1c4445['input']) {
		goto label1794;
	}

	goto label1778;

	label1497:

	goto label1879;

	label1499:

	if (!$c60b264a3c1c4445['cpu']) {
		goto label1517;
	}

	echo '<small>CPU usage is currently <strong>' . ceil($e23be30f5a16d035['cpu'] <= 100 ? $e23be30f5a16d035['cpu'] : 100) . '%</strong>. <span class="text-secondary">To ensure stability please lower CPU usage or investigate any issues.</span></small><br/>';

	label1517:

	goto label1519;

	label1519:

	if (!$c60b264a3c1c4445['memory']) {
		goto label1537;
	}

	echo '<small>Memory usage is currently <strong>' . ceil($e23be30f5a16d035['total_mem_used_percent'] <= 100 ? $e23be30f5a16d035['total_mem_used_percent'] : 100) . '%</strong>. <span class="text-secondary">Check stream usage in Process Monitor for anomolies if this seems high.</span></small><br/>';

	label1537:

	if (!$c60b264a3c1c4445['disk']) {
		goto label1471;
	}

	echo '<small>Disk usage is currently <strong>' . intval((($e23be30f5a16d035['total_disk_space'] - $e23be30f5a16d035['free_disk_space']) / $e23be30f5a16d035['total_disk_space']) * 100) . '%</strong>. <span class="text-secondary">If usage hits 100% the server will become unusable.</span></small><br/>';
	goto label1471;

	label1556:

	echo '<small>Server has been unreachable for <strong>' . XUI::A5D0a3407690F047(time() - $Ec379295dc7029e6['last_check_ago']) . '</strong></small><br/>';

	label1566:

	goto label1499;

	label1568:

	echo '<small>Server cannot be accessed remotely on its IP and Port. Please check that they are correct and ensure nothing is already running on port ' . $Ec379295dc7029e6['http_broadcast_port'] . '.</small><br/>';
	goto label1499;

	label1574:

	$c60b264a3c1c4445['offline'] = true;

	label1576:
	if (!($c60b264a3c1c4445['offline'] || $c60b264a3c1c4445['cpu'] || $c60b264a3c1c4445['memory'] || $c60b264a3c1c4445['disk'] || $c60b264a3c1c4445['clients'] || $c60b264a3c1c4445['output'] || $c60b264a3c1c4445['input'] || $c60b264a3c1c4445['offset'])) {
		goto label1693;
	}

	$C8d2d044d6d8e940 = true;
	echo '                                    <div class="timeline-item">' . "\n" . '                                        <i class="timeline-icon bg-dark"></i>' . "\n" . '                                        <div class="timeline-item-info">' . "\n" . '                                            <a href="server_view?id=';
	goto label1695;

	label1606:

	$ce95ea5d02ef202d = $Ec379295dc7029e6['connections'];

	label1608:

	$e23be30f5a16d035 = json_decode($Ec379295dc7029e6['watchdog_data'], true);
	$c60b264a3c1c4445 = ['offline' => false, 'cpu' => false, 'memory' => false, 'disk' => false, 'clients' => false, 'output' => false, 'input' => false, 'offset' => false];
	if (!$Ec379295dc7029e6['server_online'] && $Ec379295dc7029e6['enabled'] && ($Ec379295dc7029e6['status'] == 1)) {
		goto label1756;
	}

	goto label1817;

	label1629:

	if (!$Ec379295dc7029e6['remote_status']) {
		goto label1568;
	}

	if ($Ec379295dc7029e6['last_check_ago']) {
		goto label1641;
	}

	echo '<small>Server has never sent a callback to XUI. Please check the server for install issues.</small><br/>';
	goto label1566;

	label1641:

	goto label1556;

	label1643:

	$c60b264a3c1c4445['memory'] = true;

	label1645:
	if (!(($Ec379295dc7029e6['server_type'] == 0) && (0 < $e23be30f5a16d035['total_disk_space']) && (intval(XUI::$rSettings['threshold_disk']) <= intval((($e23be30f5a16d035['total_disk_space'] - $e23be30f5a16d035['free_disk_space']) / $e23be30f5a16d035['total_disk_space']) * 100)))) {
		goto label1674;
	}

	$c60b264a3c1c4445['disk'] = true;

	label1674:

	goto label1708;

	label1676:

	if (!$c60b264a3c1c4445['offset']) {
		goto label1692;
	}

	echo '<small>Server time is offset to main server time by <strong>' . number_format(abs($Ec379295dc7029e6['time_offset']), 0) . '</strong> seconds. <span class="text-secondary">This will affect timeshift, EPG, connections and all sorts of queries.</span></small><br/>';

	label1692:

	echo '                                            <p><br/></p>' . "\n" . '                                        </div>' . "\n" . '                                    </div>' . "\n" . '                                    ';

	label1693:

	goto label1497;

	label1695:

	echo $Ec379295dc7029e6['id'];
	echo '" class="text-body font-weight-semibold mb-1 d-block bg"><strong>';
	echo $Ec379295dc7029e6['server_name'];
	echo '</strong></a>' . "\n" . '                                            ';

	if (!$c60b264a3c1c4445['offline']) {
		goto label1499;
	}

	goto label1629;

	label1708:
	if (!((0 < $Ec379295dc7029e6['network_guaranteed_speed']) && (($Ec379295dc7029e6['network_guaranteed_speed'] * (intval(XUI::$rSettings['threshold_network']) / 100)) <= $e23be30f5a16d035['bytes_sent'] / 125000))) {
		goto label1729;
	}

	$c60b264a3c1c4445['output'] = true;

	label1729:
	if (!((0 < $Ec379295dc7029e6['network_guaranteed_speed']) && (($Ec379295dc7029e6['network_guaranteed_speed'] * (intval(XUI::$rSettings['threshold_network']) / 100)) <= $e23be30f5a16d035['bytes_received'] / 125000))) {
		goto label1848;
	}

	$c60b264a3c1c4445['input'] = true;
	goto label1848;

	label1752:

	$c60b264a3c1c4445['offset'] = true;

	label1754:

	goto label1576;

	label1756:

	goto label1574;

	label1758:

	if (XUI::$rSettings['redis_handler']) {
		goto label1776;
	}

	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE (`server_id` = ? OR `proxy_id` = ?) AND `hls_end` = 0;', $Ec379295dc7029e6['id'], $Ec379295dc7029e6['id']);
	$ce95ea5d02ef202d = $b62d6460eb33ea07->get_row()['count'];
	goto label1608;

	label1776:

	goto label1606;

	label1778:

	echo '<small>Network input is currently <strong>' . number_format($e23be30f5a16d035['bytes_received'] / 125000, 0) . ' Mbps / ' . number_format($Ec379295dc7029e6['network_guaranteed_speed'], 0) . ' Mbps</strong>. <span class="text-secondary">Streams will suffer restarts if the limit is reached.</span></small><br/>';

	label1794:

	if (!$c60b264a3c1c4445['output']) {
		goto label1815;
	}

	echo '<small>Network output is currently <strong>' . number_format($e23be30f5a16d035['bytes_sent'] / 125000, 0) . ' Mbps / ' . number_format($Ec379295dc7029e6['network_guaranteed_speed'], 0) . ' Mbps</strong>. <span class="text-secondary">Clients will be unable to connect if the limit is reached.</span></small><br/>';

	label1815:

	goto label1676;

	label1817:

	if (!$Ec379295dc7029e6['server_online']) {
		goto label1754;
	}

	if (!(intval(XUI::$rSettings['threshold_cpu']) <= $e23be30f5a16d035['cpu'])) {
		goto label1835;
	}

	$c60b264a3c1c4445['cpu'] = true;

	label1835:

	if (!(intval(XUI::$rSettings['threshold_mem']) < $e23be30f5a16d035['total_mem_used_percent'])) {
		goto label1645;
	}

	goto label1643;

	label1848:
	if (!((0 < $Ec379295dc7029e6['total_clients']) && (($Ec379295dc7029e6['total_clients'] * (intval(XUI::$rSettings['threshold_clients']) / 100)) <= $ce95ea5d02ef202d))) {
		goto label1867;
	}

	$c60b264a3c1c4445['clients'] = true;

	label1867:
	if (!((5 < $Ec379295dc7029e6['time_offset']) || ($Ec379295dc7029e6['time_offset'] < -5))) {
		goto label1754;
	}

	goto label1752;

	label1879:
}

goto label128;

label1882:

if (!e589A4BF54a2Dad1('adv', 'live_connections')) {
	goto label1890;
}

echo '<a href="./live_connections">';

label1890:

echo '                <div class="card cta-box ';

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label1425;
}

goto label1424;

label1897:

echo '        <div class="row">' . "\n" . '            <div class="col-12">' . "\n" . '                <div class="page-title-box">' . "\n" . '                    <div class="page-title-right"';

if (!$Ebb0b63f7c597ba4) {
	goto label1902;
}

echo ' style="width: 100%"';

label1902:

goto label1303;

label1903:

echo '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '        <div class="row mb-4">' . "\n" . '            <div class="col-md-4">' . "\n" . '                ';

if (!E589A4BF54A2DaD1('adv', 'live_connections')) {
	goto label1912;
}

echo '<a href="./live_connections">';

label1912:

echo '                <div class="card cta-box ';
goto label1932;

label1914:

echo '                                <h3 class="m-0 font-weight-normal text-white sp-line-1 cta-box-title"><strong>XUI Beta Programme</strong></h3>' . "\n" . '                                ';

label1915:

echo '                                <p class="text-light mt-2 ">';
echo $F5fb28bd49709b5a;
goto label286;

label1918:

if (isset(XUI::$rRequest['server_id'])) {
	goto label133;
}

$df6991d59f367c7e = 0;
goto label314;

label1924:

echo ' text-white">' . "\n" . '                    <div class="card-body offline-streams">' . "\n" . '                        <div class="media align-items-center">' . "\n" . '                            <div class="col-3">' . "\n" . '                                <div class="avatar-sm bg-light">' . "\n" . '                                    <i class="fe-alert-triangle avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label1931;
}

echo 'text-pink';
goto label304;

label1931:

goto label303;

label1932:

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label1938;
}

echo 'bg-purple';

label1938:

echo ' text-white">' . "\n" . '                    <div class="card-body active-connections">' . "\n" . '                        <div class="media align-items-center">' . "\n" . '                            <div class="col-3">' . "\n" . '                                <div class="avatar-sm bg-light">' . "\n" . '                                    <i class="fe-zap avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label1449;
}

goto label1447;

label1944:

include 'session.php';
include 'functions.php';

if ($cc474bf3b4c0707e[$E59d0debc75e7be8['theme']]['dark']) {
	goto label1219;
}

$Ab121eb6486019fe = [
	1 => ['purple', '#675db7', '#675db7'],
	2 => ['success', '#23b397', '#23b397'],
	3 => ['pink', '#e36498', '#e36498'],
	4 => ['info', '#56C3D6', '#56C3D6']
];
$fc758e2d726b37ee = [
	['#23b397', 'bg-success'],
	['#56c2d6', 'bg-info'],
	['#5089de', 'bg-primary'],
	['#675db7', 'bg-purple'],
	['#e36498', 'bg-pink'],
	['#98a6ad', 'bg-secondary']
];
goto label1218;

label1954:

echo '<a href="./streams?filter=1">';

label1955:

echo '                <div class="card cta-box ';

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label12;
}

echo 'bg-info';
goto label12;

label1963:

include 'footer.php';

?>