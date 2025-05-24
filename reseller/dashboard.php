<?php


goto label442;

label1:

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label7;
}

echo 'text-purple';
goto label657;

label7:

echo 'text-white';
goto label657;

label9:

echo 'bg-success';

label10:

echo ' text-white">' . "\n" . '                        <div class="card-body online-users">' . "\n" . '                            <div class="media align-items-center">' . "\n" . '                                <div class="col-3">' . "\n" . '                                    <div class="avatar-sm bg-light">' . "\n" . '                                        <i class="fe-users avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label456;
}

echo 'text-success';
goto label455;

label17:

echo 'text-white';

label18:

echo '"></i>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                                <div class="col-9">' . "\n" . '                                    <div class="text-right">' . "\n" . '                                        <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>' . "\n" . '                                        <p class="text-white mb-1 text-truncate">';

if (1 < count($bc0b231fcce79374)) {
	goto label408;
}

goto label406;

label26:

echo '"></i>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                                <div class="col-9">' . "\n" . '                                    <div class="text-right">' . "\n" . '                                        <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>' . "\n" . '                                        <p class="text-white mb-1 text-truncate">Active Lines</p>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </a>' . "\n" . '            </div>' . "\n" . '            <div class="col-md-6 col-xl-3">' . "\n" . '                <a href="';
echo $db0a61ef32b89a27['create_sub_resellers'] ? 'users' : 'javascript: void(0);';
echo '">' . "\n" . '                    <div class="card cta-box ';

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label41;
}

echo 'bg-info';
goto label41;

label41:

echo ' text-white">' . "\n" . '                        <div class="card-body credits">' . "\n" . '                            <div class="media align-items-center">' . "\n" . '                                <div class="col-3">' . "\n" . '                                    <div class="avatar-sm bg-light">' . "\n" . '                                        <i class="fe-dollar-sign avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label17;
}

echo 'text-info';
goto label18;
goto label17;

label49:

echo '<div class="wrapper">' . "\n" . '    <div class="container-fluid">' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-12">' . "\n" . '                <div class="page-title-box">' . "\n" . '                    <h4 class="page-title">Welcome ';
echo htmlspecialchars($E59d0debc75e7be8['username']);
echo '</h4>' . "\n" . '                </div>' . "\n" . '                ';

if (empty($F5c08145e9d19ad1)) {
	goto label649;
}

echo '                <div class="card" style="padding: 1em 1em 0 1em;">' . "\n" . '                    ';
goto label647;

label61:

$F5c08145e9d19ad1 = preg_replace('#([a-z]*)[\\x00-\\x20]*=([\'"]*)[\\x00-\\x20]*-moz-binding[\\x00-\\x20]*:#u', '$1=$2nomozbinding...', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?expression[\\x00-\\x20]*\\([^>]*+>#i', '$1>', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?behaviour[\\x00-\\x20]*\\([^>]*+>#i', '$1>', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#(<[^>]+?)style[\\x00-\\x20]*=[\\x00-\\x20]*[`\'"]*.*?s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:*[^>]*+>#iu', '$1>', $F5c08145e9d19ad1);
include 'header.php';
goto label49;

label87:

echo '">' . "\n" . '                    <div class="card cta-box ';

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label94;
}

echo 'bg-purple';

label94:

echo ' text-white">' . "\n" . '                        <div class="card-body active-connections">' . "\n" . '                            <div class="media align-items-center">' . "\n" . '                                <div class="col-3">' . "\n" . '                                    <div class="avatar-sm bg-light">' . "\n" . '                                        <i class="fe-zap avatar-title font-22 ';
goto label1;

label96:

echo '</p>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </a>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-xl-6">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <a href="user_logs"><h4 class="header-title mb-4">Recent Activity</h4></a>' . "\n" . '                        <div style="height: 350px; overflow-y: auto;">' . "\n" . '                            <table class="table table-striped table-borderless m-0 table-centered dt-responsive nowrap w-100" id="users-table">' . "\n" . '                                <thead>' . "\n" . '                                    <tr>' . "\n" . '                                        <th class="text-center">Reseller</th>' . "\n" . '                                        <th class="text-center">Line / User</th>' . "\n" . '                                        <th>Action</th>' . "\n" . '                                        <th class="text-center">Date</th>' . "\n" . '                                    </tr>' . "\n" . '                                </thead>' . "\n" . '                                <tbody>' . "\n" . '                                    ';
$b00d1d65528795d1 = D8c8284136938Ef0();
$b62d6460eb33ea07->query('SELECT * FROM `users_logs` LEFT JOIN `users` ON `users`.`id` = `users_logs`.`owner` WHERE `users_logs`.`owner` IN (' . implode(',', array_map('intval', array_merge([$E59d0debc75e7be8['id']], $db0a61ef32b89a27['all_reports']))) . ') ORDER BY `date` DESC LIMIT 250;');

foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
	goto label126;

	label126:

	$C0a1fd30f0173389 = '<a class=\'text-dark\' href=\'user?id=' . $Fb9da1713bff19ce['owner'] . '\'>' . $Fb9da1713bff19ce['username'] . '</a>';
	$c050a23c479bc67e = ['line' => 'User Line', 'mag' => 'MAG Device', 'enigma' => 'Enigma2 Device', 'user' => 'Reseller'][$Fb9da1713bff19ce['type']];
	$fb173e63c96d4021 = '';

	switch ($Fb9da1713bff19ce['action']) {
	case 'new':
		if ($Fb9da1713bff19ce['package_id']) {
			goto label169;
		}

		$fb173e63c96d4021 = 'Created New ' . $c050a23c479bc67e;
		goto label177;

		label169:

		$fb173e63c96d4021 = 'Created New ' . $c050a23c479bc67e . ' with Package:<br/>' . $b00d1d65528795d1[$Fb9da1713bff19ce['package_id']]['package_name'];

		label177:

		goto label304;
	case 'extend':
		if ($Fb9da1713bff19ce['package_id']) {
			goto label191;
		}

		$fb173e63c96d4021 = 'Extended ' . $c050a23c479bc67e;
		goto label199;

		label191:

		$fb173e63c96d4021 = 'Extended ' . $c050a23c479bc67e . ' with Package:<br/>' . $b00d1d65528795d1[$Fb9da1713bff19ce['package_id']]['package_name'];

		label199:

		goto label304;
	case 'convert':
		$fb173e63c96d4021 = 'Converted Device to User Line';
		goto label304;
	case 'edit':
		$fb173e63c96d4021 = 'Edited ' . $c050a23c479bc67e;
		goto label304;
	case 'enable':
		$fb173e63c96d4021 = 'Enabled ' . $c050a23c479bc67e;
		goto label304;
	case 'disable':
		$fb173e63c96d4021 = 'Disabled ' . $c050a23c479bc67e;
		goto label304;
	case 'delete':
		$fb173e63c96d4021 = 'Deleted ' . $c050a23c479bc67e;
		goto label304;
	case 'send_event':
		$fb173e63c96d4021 = 'Sent Event to ' . $c050a23c479bc67e;
		goto label304;
	case 'adjust_credits':
		$fb173e63c96d4021 = 'Adjusted Credits by ' . $Fb9da1713bff19ce['cost'];
		goto label304;
	default:
		goto label304;

		label246:

		if (isset($a60b15f35e32ef1b['mac'])) {
			goto label256;
		}

		$f4e5ef13910179a5 = '<span class=\'text-secondary\'>' . $a60b15f35e32ef1b['username'] . '</span>';
		goto label301;

		label256:

		goto label297;

		label258:

		if ($f4e5ef13910179a5) {
			goto label301;
		}

		$a60b15f35e32ef1b = json_decode($Fb9da1713bff19ce['deleted_info'], true);

		if (is_array($a60b15f35e32ef1b)) {
			goto label246;
		}

		$f4e5ef13910179a5 = '<span class=\'text-secondary\'>DELETED</span>';
		goto label301;
		goto label246;

		label278:

		echo '</td>' . "\n" . '                                        <td class="text-center">';
		echo date($f1dcaed925076e67['date_format'] . ' H:i', $Fb9da1713bff19ce['date']);
		echo '</td>' . "\n" . '                                    </tr>' . "\n" . '                                    ';
		goto label403;

		label290:

		echo $C0a1fd30f0173389;
		echo '</td>' . "\n" . '                                        <td class="text-center">';
		echo $f4e5ef13910179a5;
		echo '</td>' . "\n" . '                                        <td>';
		echo $fb173e63c96d4021;
		goto label278;

		label297:

		$f4e5ef13910179a5 = '<span class=\'text-secondary\'>' . $a60b15f35e32ef1b['mac'] . '</span>';

		label301:

		echo '                                    <tr>' . "\n" . '                                        <td class="text-center">';
		goto label290;
	}

	label304:

	$f4e5ef13910179a5 = NULL;

	switch ($Fb9da1713bff19ce['type']) {
	case 'line':
		$F5ba2106d5227309 = b5Ad1D95A92ce732($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label334;
		}

		$f4e5ef13910179a5 = '<a class=\'text-dark\' href=\'line?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['username'] . '</a>';

		label334:

		goto label401;
	case 'user':
		$F5ba2106d5227309 = ba89228dC958Ce05($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label355;
		}

		$f4e5ef13910179a5 = '<a class=\'text-dark\' href=\'user?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['username'] . '</a>';

		label355:

		goto label401;
	case 'mag':
		$F5ba2106d5227309 = a32d85AEFA28959D($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label376;
		}

		$f4e5ef13910179a5 = '<a class=\'text-dark\' href=\'mag?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['mac'] . '</a>';

		label376:

		goto label401;
	case 'enigma':
		$F5ba2106d5227309 = Ef70a93E98fB7Ce9($Fb9da1713bff19ce['log_id']);

		if (!$F5ba2106d5227309) {
			goto label397;
		}

		$f4e5ef13910179a5 = '<a class=\'text-dark\' href=\'enigma?id=' . $Fb9da1713bff19ce['log_id'] . '\'>' . $F5ba2106d5227309['mac'] . '</a>';

		label397:

		goto label401;
	default:
	}

	label401:

	goto label258;

	label403:
}

goto label503;

label406:

echo 'Total Credits';
goto label409;

label408:

echo 'Assigned Credits';

label409:

goto label96;

label410:

$F5c08145e9d19ad1 = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = html_entity_decode($F5c08145e9d19ad1, ENT_COMPAT, 'UTF-8');
$F5c08145e9d19ad1 = preg_replace('#(<[^>]+?[\\x00-\\x20"\'])(?:on|xmlns)[^>]*+[>\\b]?#iu', '$1>', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#([a-z]*)[\\x00-\\x20]*=[\\x00-\\x20]*([`\'"]*)[\\x00-\\x20]*j[\\x00-\\x20]*a[\\x00-\\x20]*v[\\x00-\\x20]*a[\\x00-\\x20]*s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:#iu', '$1=$2nojavascript...', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#([a-z]*)[\\x00-\\x20]*=([\'"]*)[\\x00-\\x20]*v[\\x00-\\x20]*b[\\x00-\\x20]*s[\\x00-\\x20]*c[\\x00-\\x20]*r[\\x00-\\x20]*i[\\x00-\\x20]*p[\\x00-\\x20]*t[\\x00-\\x20]*:#iu', '$1=$2novbscript...', $F5c08145e9d19ad1);
goto label61;

label442:

include 'session.php';
include 'functions.php';
$F6edd90960a3bd9d = 'Dashboard';
$bc0b231fcce79374 = getResellers($E59d0debc75e7be8['id'], true);
$c65e1c212da2f6fc = aD052a625c6AC011();
goto label471;

label455:

goto label457;

label456:

echo 'text-white';

label457:

echo '"></i>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                                <div class="col-9">' . "\n" . '                                    <div class="text-right">' . "\n" . '                                        <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>' . "\n" . '                                        <p class="text-white mb-1 text-truncate">Lines Online</p>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </a>' . "\n" . '            </div>' . "\n" . '            <div class="col-md-6 col-xl-3">' . "\n" . '                <a href="javascript:void(0);" id="manage_lines">' . "\n" . '                    <div class="card cta-box ';
goto label459;

label459:

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label465;
}

echo 'bg-pink';

label465:

echo ' text-white">' . "\n" . '                        <div class="card-body active-accounts">' . "\n" . '                            <div class="media align-items-center">' . "\n" . '                                <div class="col-3">' . "\n" . '                                    <div class="avatar-sm bg-light">' . "\n" . '                                        <i class="fe-check-circle avatar-title font-22 ';

if ($E59d0debc75e7be8['theme'] == 1) {
	goto label645;
}

goto label643;

label471:

$F5c08145e9d19ad1 = html_entity_decode($c65e1c212da2f6fc[$E59d0debc75e7be8['member_group_id']]['notice_html']);
$F5c08145e9d19ad1 = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('#</*\\w+:\\w[^>]*+>#i', '', $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = str_replace(['&amp;', '&lt;', '&gt;'], ['&amp;amp;', '&amp;lt;', '&amp;gt;'], $F5c08145e9d19ad1);
$F5c08145e9d19ad1 = preg_replace('/(&#*\\w+)[\\x00-\\x20]+;/u', '$1;', $F5c08145e9d19ad1);
goto label410;

label503:

echo '                                </tbody>' . "\n" . '                            </table>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '            <div class="col-xl-6">' . "\n" . '                <div class="card">' . "\n" . '                    <div class="card-body">' . "\n" . '                        <a href="lines"><h4 class="header-title mb-4">Expiring Lines</h4></a>' . "\n" . '                        <div style="height: 350px; overflow-y: auto;">' . "\n" . '                            <table class="table table-striped table-borderless m-0 table-centered dt-responsive nowrap w-100" id="users-table">' . "\n" . '                                <thead>' . "\n" . '                                    <tr>' . "\n" . '                                        <th class="text-center">Type</th>' . "\n" . '                                        <th class="text-center">Identity</th>' . "\n" . '                                        <th class="text-center">Owner</th>' . "\n" . '                                        <th class="text-center">Expires</th>' . "\n" . '                                    </tr>' . "\n" . '                                </thead>' . "\n" . '                                <tbody>' . "\n" . '                                    ';

foreach (ebd26d3621708b16() as $Caf4325605347834) {
	goto label622;

	label510:

	echo !empty($Caf4325605347834['reseller_notes']) ? ' &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . htmlspecialchars($Caf4325605347834['reseller_notes']) . '"><i class="mdi mdi-note"></i></button>' : '';
	echo '</a></td>' . "\n" . '                                        ';

	label524:

	goto label567;

	label526:

	goto label576;

	label528:

	echo '                                        <td class="text-center">Enigma2 Device</td>' . "\n" . '                                        <td class="text-center"><a class="text-dark" href="enigma?id=';
	echo intval($Caf4325605347834['e2_id']);
	echo '">';
	echo htmlspecialchars($Caf4325605347834['e2_mac']);
	goto label510;

	label542:

	echo '">';
	echo htmlspecialchars($Caf4325605347834['username']);
	echo !empty($Caf4325605347834['reseller_notes']) ? ' &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . htmlspecialchars($Caf4325605347834['reseller_notes']) . '"><i class="mdi mdi-note"></i></button>' : '';
	echo '</a></td>' . "\n" . '                                        ';
	goto label524;
	goto label528;

	label566:

	echo '</a></td>' . "\n" . '                                        ';

	label567:

	echo '                                        <td class="text-center"><a class="text-dark" href="user?id=';
	echo intval($Caf4325605347834['member_id']);
	echo '">';
	goto label603;

	label576:

	echo '                                        <td class="text-center">MAG Device</td>' . "\n" . '                                        <td class="text-center"><a class="text-dark" href="mag?id=';
	echo intval($Caf4325605347834['mag_id']);
	echo '">';
	echo htmlspecialchars($Caf4325605347834['mag_mac']);
	echo !empty($Caf4325605347834['reseller_notes']) ? ' &nbsp; <button type="button" class="btn btn-light waves-effect waves-light btn-xs tooltip" title="' . htmlspecialchars($Caf4325605347834['reseller_notes']) . '"><i class="mdi mdi-note"></i></button>' : '';
	goto label566;

	label603:

	echo htmlspecialchars($bc0b231fcce79374[$Caf4325605347834['member_id']]['username']);
	echo '</td>' . "\n" . '                                        <td class="text-center">';
	echo date($f1dcaed925076e67['date_format'] . ' H:i', $Caf4325605347834['exp_date']);
	echo '</td>' . "\n" . '                                    </tr>' . "\n" . '                                    ';
	goto label639;

	label622:

	echo '                                    <tr>' . "\n" . '                                        ';

	if ($Caf4325605347834['is_mag']) {
		goto label526;
	}

	if ($Caf4325605347834['is_e2']) {
		goto label528;
	}

	echo '                                        <td class="text-center">User Line</td>' . "\n" . '                                        <td class="text-center"><a class="text-dark" href="line?id=';
	echo intval($Caf4325605347834['line_id']);
	goto label542;

	label639:
}

echo '                                </tbody>' . "\n" . '                            </table>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label671;

label643:

echo 'text-pink';
goto label646;

label645:

echo 'text-white';

label646:

goto label26;

label647:

echo $F5c08145e9d19ad1;
echo '                </div>' . "\n" . '                ';

label649:

echo '            </div>' . "\n" . '        </div>' . "\n" . '        <div class="row">' . "\n" . '            <div class="col-md-6 col-xl-3">' . "\n" . '                <a href="';
echo $db0a61ef32b89a27['reseller_client_connection_logs'] ? 'live_connections' : 'javascript: void(0);';
goto label87;

label657:

echo '"></i>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                                <div class="col-9">' . "\n" . '                                    <div class="text-right">' . "\n" . '                                        <h3 class="text-white my-1"><span data-plugin="counterup" class="entry">0</span></h3>' . "\n" . '                                        <p class="text-white mb-1 text-truncate">Connections</p>' . "\n" . '                                    </div>' . "\n" . '                                </div>' . "\n" . '                            </div>' . "\n" . '                        </div>' . "\n" . '                    </div>' . "\n" . '                </a>' . "\n" . '            </div>' . "\n" . '            <div class="col-md-6 col-xl-3">' . "\n" . '                <a href="';
echo $db0a61ef32b89a27['reseller_client_connection_logs'] ? 'live_connections' : 'javascript: void(0);';
echo '">' . "\n" . '                    <div class="card cta-box ';

if (!($E59d0debc75e7be8['theme'] == 0)) {
	goto label10;
}

goto label9;

label671:

include 'footer.php';

?>