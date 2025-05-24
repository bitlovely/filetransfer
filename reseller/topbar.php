<?php


goto label1;

label1:

if (!(count(get_included_files()) == 1)) {
	goto label11;
}

exit();

label11:

$D7209256c56b1469 = D60f670923AdBf13();
$Abcb228699a7f743 = (isset(XUI::$rRequest['id']) ? intval(XUI::$rRequest['id']) : NULL);
goto label27;

label27:

$cb9992b923d4e5a8 = [
	'lines'            => [
	'Add Line'         => ['line', 'create_line'],
	'Live Connections' => ['live_connections', 'reseller_client_connection_logs'],
	'Activity Logs'    => ['line_activity', 'reseller_client_connection_logs']
],
	'live_connections' => [
	'Activity Logs' => ['line_activity', 'reseller_client_connection_logs']
],
	'line_activity'    => [
	'Live Connections' => ['live_connections', 'reseller_client_connection_logs']
],
	'mags'             => [
	'Add Device'       => ['mag', 'create_mag'],
	'Live Connections' => ['live_connections', 'reseller_client_connection_logs'],
	'Activity Logs'    => ['line_activity', 'reseller_client_connection_logs']
],
	'enigmas'          => [
	'Add Device'       => ['enigma', 'create_enigma'],
	'Live Connections' => ['live_connections', 'reseller_client_connection_logs'],
	'Activity Logs'    => ['line_activity', 'reseller_client_connection_logs']
],
	'users'            => [
	'Add User'      => ['user', 'create_sub_resellers'],
	'Client Logs'   => ['client_logs', 'reseller_client_connection_logs'],
	'Reseller Logs' => ['user_logs', NULL]
],
	'line'             => [
	'Manage Lines' => ['lines', 'create_line']
],
	'user'             => [
	'Manage Users' => ['users', 'create_sub_resellers']
],
	'mag'              => [
	'MAG Devices' => ['mags', 'create_mag']
],
	'enigma'           => [
	'Enigma Devices' => ['enigmas', 'create_enigma']
],
	'ticket'           => [
	'View Ticket'  => ['ticket_view?id=' . $Abcb228699a7f743, NULL],
	'View Tickets' => ['tickets', NULL]
],
	'ticket_view'      => [
	'Add Response' => ['ticket?id=' . $Abcb228699a7f743, NULL],
	'View Tickets' => ['tickets', NULL]
],
	'tickets'          => [
	'Create Ticket' => ['ticket', NULL]
]
];

switch ($D7209256c56b1469) {
case 'ticket':
	if (isset($e980e66d0f7b6829)) {
		goto label67;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label67:

	goto label81;
case 'ticket_view':
	if (!($A647e7472a9c91b3['status'] == 0)) {
		goto label80;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label80:

	goto label81;
}

label81:

$F0dbc8aa2a7e427d = [];
goto label84;

label83:

goto label506;

label84:

if (!isset($cb9992b923d4e5a8[$D7209256c56b1469])) {
	goto label124;
}

foreach ($cb9992b923d4e5a8[$D7209256c56b1469] as $b7319702635da556 => $ba2d146bb5a55097) {
	if (!($b7319702635da556 && (!$ba2d146bb5a55097[1] || A7dC2607457949eC($ba2d146bb5a55097[1])))) {
		goto label122;
	}

	if (count($ba2d146bb5a55097) == 3) {
		goto label118;
	}

	$F0dbc8aa2a7e427d[$b7319702635da556] = $ba2d146bb5a55097[0];
	goto label122;

	label118:

	$F0dbc8aa2a7e427d[$b7319702635da556] = 'javascript: void(0);" ' . $ba2d146bb5a55097[2];

	label122:
}

label124:

switch ($D7209256c56b1469) {
case 'streams':
case 'created_channels':
case 'movies':
case 'users':
case 'mags':
case 'client_logs':
case 'line_activity':
case 'live_connections':
case 'lines':
case 'radios':
case 'enigmas':
case 'episodes':
	goto label259;

	label153:

	goto label172;

	label154:

	echo '<button type="button" ' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][2] . ' class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

	label172:

	goto label257;
	goto label239;

	label174:

	echo '<button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed-sm" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-caret-down"></i></button>' . "\r\n" . '                <div class="dropdown-menu">';

	foreach (array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d)) as $b7319702635da556 => $A7ca171405b19571) {
		if (!$b7319702635da556) {
			goto label207;
		}

		if ($A7ca171405b19571) {
			goto label202;
		}

		echo '<a class="dropdown-item" href="javascript: void(0);" onClick="showModal();">' . $b7319702635da556 . '</a>';
		goto label207;

		label202:

		echo '<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' . $A7ca171405b19571 . '\');">' . $b7319702635da556 . '</a>';

		label207:
	}

	echo '</div>';

	label210:

	goto label211;

	label211:

	echo '</div>';
	goto label506;
	goto label329;

	label214:

	if (!$Ebb0b63f7c597ba4) {
		goto label218;
	}

	echo '<a class="btn btn-success waves-effect waves-light btn-sm btn-fixed-sm" data-toggle="collapse" href="#collapse_filters" role="button" aria-expanded="false">' . "\r\n" . '                    <i class="mdi mdi-filter"></i>' . "\r\n" . '                </a>';

	label218:

	echo '<button onClick="clearFilters();" type="button" class="btn btn-warning waves-effect waves-light btn-sm btn-fixed-sm" id="clearFilters">' . "\r\n" . '                <i class="mdi mdi-filter-remove"></i>' . "\r\n" . '            </button>' . "\r\n" . '            <button onClick="refreshTable();" type="button" class="btn btn-pink waves-effect waves-light btn-sm btn-fixed-sm">' . "\r\n" . '                <i class="mdi mdi-refresh"></i>' . "\r\n" . '            </button>';

	if (!(0 < count(array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d))))) {
		goto label210;
	}

	goto label174;

	label239:

	echo '<button type="button" onClick="navigate(\'' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0] . '\');" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

	label257:

	echo '<span class="gap"></span>';

	label258:

	goto label214;

	label259:

	echo '<div class="btn-group">';
	if (!(!$Ebb0b63f7c597ba4 && (!$cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][1] || A7DC2607457949ec($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][1])) && (0 < strlen(array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0])))) {
		goto label258;
	}

	if ($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0]) {
		goto label239;
	}

	if (isset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][2])) {
		goto label154;
	}

	echo '<button type="button" onClick="showModal();" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';
	goto label153;
case 'user_logs':
	label329:

	echo '<div class="btn-group">' . "\r\n" . '            <button onClick="refreshTable();" type="button" class="btn btn-pink waves-effect waves-light btn-sm btn-fixed-sm">' . "\r\n" . '                <i class="mdi mdi-refresh"></i>' . "\r\n" . '            </button>' . "\r\n" . '        </div>';
	goto label506;
default:
	goto label332;

	label332:

	echo '<div class="btn-group">';
	if (!(!$Ebb0b63f7c597ba4 && (!$cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][1] || a7DC2607457949EC($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][1])) && (0 < strlen(array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0])))) {
		goto label485;
	}

	if ($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0]) {
		goto label467;
	}

	if (isset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][2])) {
		goto label406;
	}

	echo '<button type="button" onClick="showModal();" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';
	goto label405;

	label402:

	echo '</div>';
	goto label506;
	goto label505;

	label405:

	goto label424;

	label406:

	echo '<button type="button" ' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][2] . ' class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

	label424:

	goto label485;
	goto label467;

	label426:

	echo '<span class="gap"></span><button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed' . ($Ebb0b63f7c597ba4 ? '-xl' : '-sm') . '" data-toggle="dropdown" aria-expanded="false">' . ($Ebb0b63f7c597ba4 ? 'Options &nbsp; ' : '') . '<i class="fas fa-caret-down"></i></button>' . "\r\n" . '                <div class="dropdown-menu">';

	foreach (array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d)) as $b7319702635da556 => $A7ca171405b19571) {
		if (!$b7319702635da556) {
			goto label463;
		}

		echo '<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' . $A7ca171405b19571 . '\');">' . $b7319702635da556 . '</a>';

		label463:
	}

	echo '</div>';

	label466:

	goto label402;

	label467:

	echo '<button type="button" onClick="navigate(\'' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0] . '\');" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

	label485:

	if (!(0 < count(array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d))))) {
		goto label466;
	}

	goto label426;

	label505:

	goto label83;
}

label506:

?>