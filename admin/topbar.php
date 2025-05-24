<?php


goto label1387;

label1:

goto label9;

label2:

$cb9992b923d4e5a8['stream_view'] = [
	'Edit Stream'    => ['stream?id=' . $Abcb228699a7f743, 'edit_stream'],
	'Manage Streams' => ['streams', 'streams']
];

label9:

goto label1068;

label10:

$cb9992b923d4e5a8['stream_view'] = [
	'Edit Station'    => ['radio?id=' . $Abcb228699a7f743, 'edit_radio'],
	'Manage Stations' => ['radios', 'radio']
];

label17:

goto label986;

label18:

$cb9992b923d4e5a8['stream_view'] = [
	'Edit Channel'    => ['created_channel?id=' . $Abcb228699a7f743, 'edit_cchannel'],
	'Manage Channels' => ['created_channels', 'streams']
];
goto label986;

label26:

if (!($fe93a43f53d92a4e['type'] == 5)) {
	goto label50;
}

$cb9992b923d4e5a8['stream_view'] = [
	'Edit Episode'  => ['episode?id=' . $Abcb228699a7f743 . '&sid=' . intval($E6f758b9be57a931), 'edit_episode'],
	'View Episodes' => ['episodes?series=' . intval($E6f758b9be57a931), 'episodes'],
	'Manage Series' => ['series', 'series']
];

label50:

goto label17;

label51:

goto label10;

label52:

switch ($D7209256c56b1469) {
case 'streams':
case 'created_channels':
case 'movies':
case 'series':
case 'users':
case 'mags':
case 'client_logs':
case 'line_activity':
case 'live_connections':
case 'lines':
case 'radios':
case 'enigmas':
case 'ondemand':
case 'episodes':
	goto label158;

	label85:

	echo '<button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed-sm" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-caret-down"></i></button>' . "\r\n" . '                <div class="dropdown-menu">';

	foreach (array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d)) as $b7319702635da556 => $A7ca171405b19571) {
		goto label103;

		label103:

		if (!$b7319702635da556) {
			goto label149;
		}

		if ($A7ca171405b19571) {
			goto label115;
		}

		echo '<a class="dropdown-item" href="javascript: void(0);" onClick="showModal();">' . $b7319702635da556 . '</a>';
		goto label149;

		label115:

		goto label117;

		label117:

		if (substr($A7ca171405b19571, 0, 5) == 'code:') {
			goto label133;
		}

		echo '<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' . $A7ca171405b19571 . '\');">' . $b7319702635da556 . '</a>';
		goto label149;

		label133:

		echo '<a class="dropdown-item" href="javascript: void(0);" ' . substr($A7ca171405b19571, 5, strlen($A7ca171405b19571) - 5) . '>' . $b7319702635da556 . '</a>';
		goto label149;

		label149:

		goto label151;

		label151:
	}

	echo '</div>';

	label154:

	goto label155;

	label155:

	echo '</div>';
	goto label1413;
	goto label284;

	label158:

	echo '<div class="btn-group">';
	if (!(!$Ebb0b63f7c597ba4 && e589A4Bf54a2daD1('adv', $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][1]) && (0 < strlen(array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0])))) {
		goto label237;
	}

	if ($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0]) {
		goto label218;
	}

	if (isset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][2])) {
		goto label264;
	}

	echo '<button type="button" onClick="showModal();" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';
	goto label263;

	label218:

	echo '<button type="button" onClick="navigate(\'' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0] . '\');" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

	label236:

	echo '<span class="gap"></span>';

	label237:

	goto label238;

	label238:

	if (!$Ebb0b63f7c597ba4) {
		goto label242;
	}

	echo '<a class="btn btn-success waves-effect waves-light btn-sm btn-fixed-sm" data-toggle="collapse" href="#collapse_filters" role="button" aria-expanded="false">' . "\r\n" . '                    <i class="mdi mdi-filter"></i>' . "\r\n" . '                </a>';

	label242:

	echo '<button onClick="clearFilters();" type="button" class="btn btn-warning waves-effect waves-light btn-sm btn-fixed-sm" id="clearFilters">' . "\r\n" . '                <i class="mdi mdi-filter-remove"></i>' . "\r\n" . '            </button>' . "\r\n" . '            <button onClick="refreshTable();" type="button" class="btn btn-pink waves-effect waves-light btn-sm btn-fixed-sm">' . "\r\n" . '                <i class="mdi mdi-refresh"></i>' . "\r\n" . '            </button>';

	if (!(0 < count(array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d))))) {
		goto label154;
	}

	goto label85;

	label263:

	goto label282;

	label264:

	echo '<button type="button" ' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][2] . ' class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

	label282:

	goto label236;
	goto label218;
case 'stream_view':
	label284:

	goto label285;

	label285:

	echo '<div class="btn-group">';
	if (($fe93a43f53d92a4e['type'] == 1) || ($fe93a43f53d92a4e['type'] == 3)) {
		goto label322;
	}
	if (!(($fe93a43f53d92a4e['type'] == 2) || ($fe93a43f53d92a4e['type'] == 5))) {
		goto label316;
	}

	echo '<a href="javascript:void(0);" onClick="player(' . intval($fe93a43f53d92a4e['id']) . ', \'' . htmlspecialchars($fe93a43f53d92a4e['target_container']) . '\');">' . "\r\n" . '                    <button type="button" title="Play" class="tooltip btn btn-info waves-effect waves-light btn-sm">' . "\r\n" . '                        <i class="mdi mdi-play"></i>' . "\r\n" . '                    </button>' . "\r\n" . '                </a>';

	label316:

	goto label321;

	label317:

	echo '</div>';

	label318:

	echo '</div>';
	goto label1413;
	goto label462;

	label321:

	goto label329;

	label322:

	echo '<a href="javascript:void(0);" onClick="player(' . intval($fe93a43f53d92a4e['id']) . ');">' . "\r\n" . '                    <button type="button" title="Play" class="tooltip btn btn-info waves-effect waves-light btn-sm">' . "\r\n" . '                        <i class="mdi mdi-play"></i>' . "\r\n" . '                    </button>' . "\r\n" . '                </a>';

	label329:
	if (!(!$Ebb0b63f7c597ba4 && e589A4bF54A2dAD1('adv', $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][1]) && (0 < strlen(array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0])))) {
		goto label378;
	}

	goto label360;

	label360:

	echo '<button type="button" onClick="navigate(\'' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0] . '\');" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

	label378:

	if (!(0 < count(array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d))))) {
		goto label318;
	}

	echo '<span class="gap"></span><button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed' . ($Ebb0b63f7c597ba4 ? '-xl' : '-sm') . '" data-toggle="dropdown" aria-expanded="false">' . ($Ebb0b63f7c597ba4 ? 'Options &nbsp; ' : '') . '<i class="fas fa-caret-down"></i></button>' . "\r\n" . '                <div class="dropdown-menu">';

	foreach (array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d)) as $b7319702635da556 => $A7ca171405b19571) {
		if (!$b7319702635da556) {
			goto label459;
		}

		if (substr($A7ca171405b19571, 0, 5) == 'code:') {
			goto label445;
		}

		echo '<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' . $A7ca171405b19571 . '\');">' . $b7319702635da556 . '</a>';
		goto label459;

		label445:

		echo '<a class="dropdown-item" href="javascript: void(0);" ' . substr($A7ca171405b19571, 5, strlen($A7ca171405b19571) - 5) . '>' . $b7319702635da556 . '</a>';

		label459:
	}

	goto label317;
}

label462:

goto label591;

label463:

goto label482;

label464:

echo '<button type="button" ' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][2] . ' class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

label482:

goto label568;
goto label550;

label484:

echo '<span class="gap"></span><button type="button" class="btn btn-sm btn-dark waves-effect waves-light dropdown-toggle btn-fixed' . ($Ebb0b63f7c597ba4 ? '-xl' : '-sm') . '" data-toggle="dropdown" aria-expanded="false">' . ($Ebb0b63f7c597ba4 ? 'Options &nbsp; ' : '') . '<i class="fas fa-caret-down"></i></button>' . "\r\n" . '                <div class="dropdown-menu">';

foreach (array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d)) as $b7319702635da556 => $A7ca171405b19571) {
	if (!$b7319702635da556) {
		goto label546;
	}

	if (substr($A7ca171405b19571, 0, 5) == 'code:') {
		goto label532;
	}

	echo '<a class="dropdown-item" href="javascript: void(0);" onClick="navigate(\'' . $A7ca171405b19571 . '\');">' . $b7319702635da556 . '</a>';
	goto label546;

	label532:

	echo '<a class="dropdown-item" href="javascript: void(0);" ' . substr($A7ca171405b19571, 5, strlen($A7ca171405b19571) - 5) . '>' . $b7319702635da556 . '</a>';

	label546:
}

echo '</div>';

label549:

goto label588;

label550:

echo '<button type="button" onClick="navigate(\'' . $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0] . '\');" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';

label568:

if (!(0 < count(array_slice($F0dbc8aa2a7e427d, $Ebb0b63f7c597ba4 ? 0 : 1, count($F0dbc8aa2a7e427d))))) {
	goto label549;
}

goto label484;

label588:

echo '</div>';
goto label1413;
goto label651;

label591:

echo '<div class="btn-group">';
if (!(!$Ebb0b63f7c597ba4 && e589a4bf54A2dad1('adv', $cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][1]) && (0 < strlen(array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0])))) {
	goto label568;
}

if ($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][0]) {
	goto label550;
}

if (isset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]][2])) {
	goto label464;
}

echo '<button type="button" onClick="showModal();" class="btn btn-sm btn-info waves-effect waves-light">' . array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0] . '</button>';
goto label463;

label651:

goto label1413;

label652:

if (!($D7209256c56b1469 == 'stream_view')) {
	goto label9;
}

if ($fe93a43f53d92a4e['type'] == 1) {
	goto label2;
}

if ($fe93a43f53d92a4e['type'] == 2) {
	goto label987;
}

if ($fe93a43f53d92a4e['type'] == 3) {
	goto label18;
}

if ($fe93a43f53d92a4e['type'] == 4) {
	goto label51;
}

goto label26;

label673:

$Cf9afd442cc40b3d = (isset(XUI::$rRequest['sid']) ? intval(XUI::$rRequest['sid']) : NULL);
$cb9992b923d4e5a8 = [
	'ondemand'             => [
	'Manage Streams'    => ['streams', 'streams'],
	'Mass Delete'       => ['mass_delete', 'mass_delete'],
	'Mass Edit'         => ['stream_mass', 'mass_edit_streams'],
	'Stream Tools'      => ['stream_tools', 'stream_tools'],
	'Stream Error Logs' => ['stream_errors', 'stream_errors'],
	'Export as CSV'     => [NULL, NULL, 'id="btn-export-csv"']
],
	'streams'              => [
	'Add Stream'        => ['stream', 'add_stream'],
	'Import & Review'   => $Ebb0b63f7c597ba4 ? [] : ['review?type=1', 'import_streams'],
	'Categories'        => ['stream_categories', 'categories'],
	'Channel Order'     => $Ebb0b63f7c597ba4 ? [] : ['channel_order', 'channel_order'],
	'EPG\'s'            => ['epgs', 'epg'],
	'Fingerprint'       => ['fingerprint', 'fingerprint'],
	'On-Demand Scanner' => ['ondemand', 'streams'],
	'Mass Delete'       => ['mass_delete', 'mass_delete'],
	'Mass Edit'         => ['stream_mass', 'mass_edit_streams'],
	'Quick Tools'       => ['quick_tools', 'quick_tools'],
	'Stream Tools'      => ['stream_tools', 'stream_tools'],
	'Stream Error Logs' => ['stream_errors', 'stream_errors'],
	'Export as CSV'     => [NULL, NULL, 'id="btn-export-csv"']
],
	'created_channels'     => [
	'Create Channel' => ['created_channel', 'create_channel'],
	'Categories'     => ['stream_categories', 'categories'],
	'Channel Order'  => $Ebb0b63f7c597ba4 ? [] : ['channel_order', 'channel_order'],
	'Mass Delete'    => ['mass_delete', 'mass_delete'],
	'Mass Edit'      => ['created_channel_mass', NULL],
	'Export as CSV'  => [NULL, NULL, 'id="btn-export-csv"']
],
	'stream_review'        => [
	isset($ac8a8c4b32f5a746) ? 'Save Changes' : 'Review Streams' => [NULL, NULL, 'id="btn-submit"']
],
	'panel_logs'           => [
	'Send to XUI.one' => [NULL, NULL, 'id="btn-send-xui"']
],
	'movies'               => [
	'Add Movie'         => ['movie', 'add_movie'],
	'Import & Review'   => $Ebb0b63f7c597ba4 ? [] : ['review?type=2', 'import_movies'],
	'Categories'        => ['stream_categories', 'categories'],
	'Channel Order'     => $Ebb0b63f7c597ba4 ? [] : ['channel_order', 'channel_order'],
	'Mass Delete'       => ['mass_delete', 'mass_delete'],
	'Mass Edit'         => ['movie_mass', 'mass_sedits_vod'],
	'Watch Folder'      => ['watch', 'folder_watch'],
	'Watch Output Logs' => ['watch_output', 'folder_watch_output'],
	'Export as CSV'     => [NULL, NULL, 'id="btn-export-csv"']
],
	'series'               => [
	'Add Series'        => ['serie', 'add_series'],
	'Episodes'          => ['episodes', 'episodes'],
	'Categories'        => ['stream_categories', 'categories'],
	'Channel Order'     => $Ebb0b63f7c597ba4 ? [] : ['channel_order', 'channel_order'],
	'Mass Delete'       => ['mass_delete', 'mass_delete'],
	'Mass Edit'         => ['series_mass', 'mass_sedits'],
	'Watch Folder'      => ['watch', 'folder_watch'],
	'Watch Output Logs' => ['watch_output', 'folder_watch_output'],
	'Export as CSV'     => [NULL, NULL, 'id="btn-export-csv"']
],
	'episodes'             => [
	'Add Episode'   => [NULL, 'add_episode'],
	'TV Series'     => ['series', 'series'],
	'Categories'    => ['stream_categories', 'categories'],
	'Channel Order' => $Ebb0b63f7c597ba4 ? [] : ['channel_order', 'channel_order'],
	'Mass Delete'   => ['mass_delete', 'mass_delete'],
	'Mass Edit'     => ['episodes_mass', 'mass_sedits'],
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"']
],
	'radios'               => [
	'Add Station'   => ['radio', 'add_radio'],
	'Categories'    => ['stream_categories', 'categories'],
	'Channel Order' => $Ebb0b63f7c597ba4 ? [] : ['channel_order', 'channel_order'],
	'Mass Delete'   => ['mass_delete', 'mass_delete'],
	'Mass Edit'     => ['radio_mass', 'mass_edit_radio'],
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"']
],
	'lines'                => [
	'Add Line'            => ['line', 'add_user'],
	'Blocked ASN\'s'      => ['asns', 'block_isps'],
	'Blocked IP\'s'       => ['ips', 'block_ips'],
	'Blocked ISP\'s'      => ['isps', 'block_isps'],
	'Blocked User-Agents' => ['useragents', 'block_uas'],
	'Live Connections'    => ['live_connections', 'live_connections'],
	'Activity Logs'       => ['line_activity', 'connection_logs'],
	'IP\'s per Line'      => ['line_ips', 'connection_logs'],
	'Mass Delete'         => ['mass_delete', 'mass_delete'],
	'Mass Edit'           => ['line_mass', 'mass_edit_users'],
	'Quick Tools'         => ['quick_tools', 'quick_tools'],
	'Export as CSV'       => [NULL, NULL, 'id="btn-export-csv"']
],
	'live_connections'     => [
	'Export as CSV'  => [NULL, NULL, 'id="btn-export-csv"'],
	'Activity Logs'  => ['line_activity', 'connection_logs'],
	'IP\'s per Line' => ['line_ips', 'connection_logs']
],
	'mags'                 => [
	'Add Device'       => ['mag', 'add_mag'],
	'Blocked IP\'s'    => ['ips', 'block_ips'],
	'Blocked ISP\'s'   => ['isps', 'block_isps'],
	'Live Connections' => ['live_connections', 'connection_logs'],
	'Activity Logs'    => ['line_activity', 'connection_logs'],
	'MAG Event Logs'   => ['mag_events', 'manage_events'],
	'Mass Delete'      => ['mass_delete', 'mass_delete'],
	'Mass Edit'        => ['mag_mass', 'mass_edit_mags'],
	'Quick Tools'      => ['quick_tools', 'quick_tools'],
	'Export as CSV'    => [NULL, NULL, 'id="btn-export-csv"']
],
	'enigmas'              => [
	'Add Device'       => ['enigma', 'add_e2'],
	'Blocked IP\'s'    => ['ips', 'block_ips'],
	'Blocked ISP\'s'   => ['isps', 'block_isps'],
	'Live Connections' => ['live_connections', 'connection_logs'],
	'Activity Logs'    => ['line_activity', 'connection_logs'],
	'Mass Delete'      => ['mass_delete', 'mass_delete'],
	'Mass Edit'        => ['enigma_mass', 'mass_edit_enigmas'],
	'Quick Tools'      => ['quick_tools', 'quick_tools'],
	'Export as CSV'    => [NULL, NULL, 'id="btn-export-csv"']
],
	'users'                => [
	'Add User'      => ['user', 'add_reguser'],
	'Groups'        => ['groups', 'mng_groups'],
	'Packages'      => ['packages', 'mng_packages'],
	'Subresellers'  => ['subresellers', 'subreseller'],
	'Client Logs'   => ['client_logs', 'client_request_log'],
	'Credit Logs'   => ['credit_logs', 'credits_log'],
	'Reseller Logs' => ['user_logs', 'reg_userlog'],
	'Mass Delete'   => ['mass_delete', 'mass_delete'],
	'Mass Edit'     => ['user_mass', 'mass_edit_reguser'],
	'Quick Tools'   => ['quick_tools', 'quick_tools'],
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"']
],
	'bouquet'              => [
	'Manage Bouquets' => ['bouquets', 'bouquets'],
	'Sort Bouquet'    => ['bouquet_sort?id=' . $Abcb228699a7f743, 'edit_bouquet']
],
	'bouquet_sort'         => [
	'Manage Bouquets' => ['bouquets', 'bouquets'],
	'Edit Bouquet'    => ['bouquet?id=' . $Abcb228699a7f743, 'edit_bouquet']
],
	'bouquet_order'        => [
	'Manage Bouquets' => ['bouquets', 'bouquets'],
	'Add Bouquet'     => ['bouquet', 'add_bouquet']
],
	'archive'              => [
	'View Stream'      => ['stream_view?id=' . $Abcb228699a7f743, 'streams'],
	'Edit Stream'      => ['stream?id=' . $Abcb228699a7f743, 'edit_stream'],
	'Create Recording' => ['record', 'add_movie'],
	'Manage Streams'   => ['streams', 'streams']
],
	'asns'                 => [
	'Quick Tools' => ['quick_tools', 'quick_tools']
],
	'backups'              => [
	'General Settings' => ['settings', 'settings'],
	'Watch Settings'   => ['settings_watch', 'folder_watch_settings'],
	'Plex Settings'    => ['settings_plex', 'folder_watch_settings'],
	'Cache Settings'   => ['cache', 'backups']
],
	'cache'                => [
	'General Settings' => ['settings', 'settings'],
	'Watch Settings'   => ['settings_watch', 'folder_watch_settings'],
	'Plex Settings'    => ['settings_plex', 'folder_watch_settings'],
	'Backup Settings'  => ['backups', 'database']
],
	'settings'             => [
	'Backup Settings' => ['backups', 'database'],
	'Watch Settings'  => ['settings_watch', 'folder_watch_settings'],
	'Plex Settings'   => ['settings_plex', 'folder_watch_settings'],
	'Cache Settings'  => ['cache', 'backups']
],
	'settings_watch'       => [
	'Folders'           => ['watch', 'folder_watch'],
	'General Settings'  => ['settings', 'settings'],
	'Backup Settings'   => ['backups', 'database'],
	'Plex Settings'     => ['settings_plex', 'folder_watch_settings'],
	'Watch Folder Logs' => ['watch_output', 'folder_watch_output']
],
	'settings_plex'        => [
	'Libraries'         => ['plex', 'folder_watch'],
	'General Settings'  => ['settings', 'settings'],
	'Backup Settings'   => ['backups', 'database'],
	'Watch Settings'    => ['settings_watch', 'folder_watch_settings'],
	'Watch Folder Logs' => ['watch_output', 'folder_watch_output']
],
	'channel_order'        => [
	'Categories' => ['stream_categories', 'categories'],
	'Bouquets'   => ['bouquets', 'bouquets']
],
	'bouquets'             => [
	'Add Bouquet'    => ['bouquet', 'add_bouquet'],
	'Order Bouquets' => $Ebb0b63f7c597ba4 ? [] : ['bouquet_order', 'edit_bouquet'],
	'Channel Order'  => $Ebb0b63f7c597ba4 ? [] : ['channel_order', 'channel_order'],
	'Categories'     => ['stream_categories', 'categories']
],
	'stream_categories'    => [
	'Add Category'  => ['stream_category', 'add_cat'],
	'Channel Order' => $Ebb0b63f7c597ba4 ? [] : ['channel_order', 'channel_order'],
	'Bouquets'      => ['bouquets', 'bouquets']
],
	'client_logs'          => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"'],
	'Clear Logs'    => [NULL, NULL, 'id="btn-clear-logs"']
],
	'credit_logs'          => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"'],
	'Clear Logs'    => [NULL, NULL, 'id="btn-clear-logs"']
],
	'user_logs'            => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"'],
	'Clear Logs'    => [NULL, NULL, 'id="btn-clear-logs"']
],
	'stream_errors'        => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"'],
	'Clear Logs'    => [NULL, NULL, 'id="btn-clear-logs"']
],
	'line_activity'        => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"'],
	'Clear Logs'    => [NULL, NULL, 'id="btn-clear-logs"']
],
	'watch_output'         => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"'],
	'Clear Logs'    => [NULL, NULL, 'id="btn-clear-logs"'],
	'Watch Folder'  => ['watch', 'folder_watch']
],
	'code'                 => [
	'Access Codes' => ['codes', 'add_code']
],
	'codes'                => [
	'Add Code' => ['code', 'add_code']
],
	'hmacs'                => [
	'Add HMAC' => ['hmac', 'add_hmac']
],
	'hmac'                 => [
	'HMAC Keys' => ['hmacs', 'add_hmac']
],
	'stream'               => [
	'View Stream'     => ['stream_view?id=' . $Abcb228699a7f743, 'streams'],
	'Import'          => ['stream?import', 'import_streams'],
	'Add Single'      => ['stream', 'add_stream'],
	'Manage Streams'  => ['streams', 'streams'],
	'Import & Review' => $Ebb0b63f7c597ba4 ? [] : ['review?type=1', 'import_streams']
],
	'movie'                => [
	'View Movie'      => ['stream_view?id=' . $Abcb228699a7f743, 'movies'],
	'Import'          => ['movie?import', 'import_movies'],
	'Add Single'      => ['movie', 'add_movie'],
	'Manage Movies'   => ['movies', 'movies'],
	'Import & Review' => $Ebb0b63f7c597ba4 ? [] : ['review?type=2', 'import_movies']
],
	'episode'              => [
	'Add Multiple'  => ['episode?sid=' . $Cf9afd442cc40b3d . '&multi', 'add_episode'],
	'Add Single'    => ['episode?sid=' . $Cf9afd442cc40b3d, 'add_episode'],
	'View Episodes' => ['episodes?series=' . $Cf9afd442cc40b3d, 'episodes'],
	'Manage Series' => ['series', 'series']
],
	'serie'                => [
	'Import'        => ['serie?import', 'import_streams'],
	'Add Single'    => ['serie', 'add_series'],
	'Manage Series' => ['series', 'series'],
	'View Episodes' => ['episodes?series=' . $Abcb228699a7f743, 'episodes']
],
	'created_channel'      => [
	'View Channel'    => ['stream_view?id=' . $Abcb228699a7f743, 'streams'],
	'Manage Channels' => ['created_channels', 'streams']
],
	'epg'                  => [
	'Manage EPG\'s' => ['epgs', 'epg']
],
	'epgs'                 => [
	'Add EPG'      => ['epg', 'add_epg'],
	'Force Reload' => [NULL, 'add_epg', 'onClick="forceUpdate();" id="force_update"']
],
	'fingerprint'          => [
	'Manage Streams' => ['streams', 'streams']
],
	'group'                => [
	'Manage Groups' => ['groups', 'mng_groups']
],
	'groups'               => [
	'Add Group' => ['group', 'add_group']
],
	'package'              => [
	'Manage Packages' => ['packages', 'mng_packages']
],
	'packages'             => [
	'Add Package' => ['package', 'add_packages']
],
	'provider'             => [
	'Providers' => ['providers', 'streams']
],
	'providers'            => [
	'Add Provider' => ['provider', 'streams']
],
	'ip'                   => [
	'Blocked IPs' => ['ips', 'block_ips']
],
	'ips'                  => [
	'Block IP'     => ['ip', 'block_ips'],
	'Flush Blocks' => ['ips?flush=1', 'block_ips']
],
	'isp'                  => [
	'Blocked ISPs' => ['isps', 'block_isps']
],
	'isps'                 => [
	'Block ISP' => ['isp', 'block_isps']
],
	'line'                 => [
	'Manage Lines' => ['lines', 'users']
],
	'user'                 => [
	'Manage Users' => ['users', 'mng_regusers']
],
	'mag'                  => [
	'MAG Devices' => ['mags', 'manage_mag']
],
	'enigma'               => [
	'Enigma Devices' => ['enigmas', 'manage_e2']
],
	'line_ips'             => [
	'Manage Lines' => ['lines', 'users']
],
	'line_mass'            => [
	'Manage Lines' => ['lines', 'users'],
	'Mass Delete'  => ['mass_delete', 'mass_delete'],
	'Quick Tools'  => ['quick_tools', 'quick_tools']
],
	'user_mass'            => [
	'Manage Users' => ['users', 'mng_regusers'],
	'Mass Delete'  => ['mass_delete', 'mass_delete'],
	'Quick Tools'  => ['quick_tools', 'quick_tools']
],
	'mag_mass'             => [
	'Manage Devices' => ['mags', 'manage_mag'],
	'Mass Delete'    => ['mass_delete', 'mass_delete'],
	'Quick Tools'    => ['quick_tools', 'quick_tools']
],
	'enigma_mass'          => [
	'Manage Devices' => ['enigmas', 'manage_e2'],
	'Mass Delete'    => ['mass_delete', 'mass_delete'],
	'Quick Tools'    => ['quick_tools', 'quick_tools']
],
	'stream_mass'          => [
	'Manage Streams' => ['streams', 'streams'],
	'Mass Delete'    => ['mass_delete', 'mass_delete'],
	'Quick Tools'    => ['quick_tools', 'quick_tools'],
	'Stream Tools'   => ['stream_tools', 'stream_tools']
],
	'created_channel_mass' => [
	'Manage Channels' => ['created_channels', 'streams'],
	'Mass Delete'     => ['mass_delete', 'mass_delete'],
	'Quick Tools'     => ['quick_tools', 'quick_tools'],
	'Stream Tools'    => ['stream_tools', 'stream_tools']
],
	'movie_mass'           => [
	'Manage Movies' => ['movies', 'movies'],
	'Mass Delete'   => ['mass_delete', 'mass_delete'],
	'Quick Tools'   => ['quick_tools', 'quick_tools'],
	'Stream Tools'  => ['stream_tools', 'stream_tools']
],
	'radio_mass'           => [
	'Manage Stations' => ['radios', 'radio'],
	'Mass Delete'     => ['mass_delete', 'mass_delete'],
	'Quick Tools'     => ['quick_tools', 'quick_tools'],
	'Stream Tools'    => ['stream_tools', 'stream_tools']
],
	'series_mass'          => [
	'Manage Series'   => ['series', 'series'],
	'Manage Episodes' => ['episodes', 'episodes'],
	'Mass Delete'     => ['mass_delete', 'mass_delete'],
	'Quick Tools'     => ['quick_tools', 'quick_tools']
],
	'episodes_mass'        => [
	'Manage Episodes' => ['episodes', 'episodes'],
	'Manage Series'   => ['series', 'series'],
	'Mass Delete'     => ['mass_delete', 'mass_delete'],
	'Quick Tools'     => ['quick_tools', 'quick_tools'],
	'Stream Tools'    => ['stream_tools', 'stream_tools']
],
	'mag_events'           => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"'],
	'MAG Devices'   => ['mags', 'manage_mag']
],
	'login_logs'           => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"']
],
	'mysql_syslog'         => [
	'Export as CSV' => [NULL, NULL, 'id="btn-export-csv"']
],
	'mass_delete'          => [
	'Manage Streams'  => ['streams', 'streams'],
	'Manage Channels' => ['created_channels', 'streams'],
	'Manage Series'   => ['series', 'series'],
	'Manage Episodes' => ['episodes', 'episodes'],
	'Manage Stations' => ['radios', 'radio'],
	'Manage Lines'    => ['lines', 'users'],
	'Manage Users'    => ['users', 'mng_regusers'],
	'Manage MAGs'     => ['mags', 'manage_mag'],
	'Manage Enigmas'  => ['enigmas', 'manage_e2']
],
	'quick_tools'          => [
	'Stream Tools' => ['stream_tools', 'stream_tools']
],
	'stream_tools'         => [
	'Quick Tools' => ['quick_tools', 'quick_tools']
],
	'profile'              => [
	'Manage Profiles' => ['profiles', 'tprofiles']
],
	'profiles'             => [
	'Create Profile' => ['profile', 'tprofile']
],
	'rtmp_ips'             => [
	'Add IP' => ['rtmp_ip', 'add_rtmp']
],
	'rtmp_ip'              => [
	'RTMP IPs' => ['rtmp_ips', 'rtmp']
],
	'server'               => [
	'View Server'    => ['server_view?id=' . $Abcb228699a7f743, 'servers'],
	'Manage Servers' => ['servers', 'servers']
],
	'proxy'                => [
	'View Proxy'     => ['server_view?id=' . $Abcb228699a7f743, 'servers'],
	'Manage Proxies' => ['proxies', 'servers']
],
	'server_install'       => [
	'Manage Servers' => ['servers', 'servers'],
	'Manage Proxies' => ['proxies', 'servers']
],
	'servers'              => [
	'Install Server'       => ['server_install', 'add_server'],
	'Server Order'         => ['server_order', 'servers'],
	'Proxies'              => ['proxies', 'servers'],
	'Process Monitor'      => ['process_monitor', 'process_monitor'],
	'Update All Servers'   => [NULL, 'servers', 'onClick="updateAll();"'],
	'Update All Binaries'  => [NULL, 'servers', 'onClick="updateBinaries();"'],
	'Restart All Services' => [NULL, 'servers', 'onClick="restartServices();"']
],
	'server_order'         => [
	'Servers'         => ['servers', 'servers'],
	'Proxies'         => ['proxies', 'servers'],
	'Process Monitor' => ['process_monitor', 'process_monitor']
],
	'proxies'              => [
	'Install Proxy'   => ['server_install?proxy=1', 'add_server'],
	'Servers'         => ['servers', 'servers'],
	'Process Monitor' => ['process_monitor', 'process_monitor']
],
	'stream_category'      => [
	'Manage Categories' => ['stream_categories', 'categories']
],
	'ticket'               => [
	'View Ticket'  => ['ticket_view?id=' . $Abcb228699a7f743, 'ticket'],
	'View Tickets' => ['tickets', 'manage_tickets']
],
	'ticket_view'          => [
	'Add Response' => ['ticket?id=' . $Abcb228699a7f743, 'ticket'],
	'View Tickets' => ['tickets', 'manage_tickets']
],
	'useragent'            => [
	'Blocked User-Agents' => ['useragents', 'block_uas']
],
	'useragents'           => [
	'Block User-Agent' => ['useragent', 'block_uas']
],
	'watch'                => [
	'Add Folder'        => ['watch_add', 'folder_watch_add'],
	'Settings'          => ['settings_watch', 'folder_watch_settings'],
	'Watch Output Logs' => ['watch_output', 'folder_watch_output'],
	'Kill Running'      => [NULL, 'folder_watch_settings', 'onClick="killWatchFolder();"'],
	'Enable All'        => [NULL, 'folder_watch_settings', 'onClick="enableAll();"'],
	'Disable All'       => [NULL, 'folder_watch_settings', 'onClick="disableAll();"']
],
	'watch_add'            => [
	'Manage Folders' => ['watch', 'folder_watch']
],
	'plex'                 => [
	'Add Library'       => ['plex_add', 'folder_watch_add'],
	'Settings'          => ['settings_plex', 'folder_watch_settings'],
	'Watch Folder Logs' => ['watch_output', 'folder_watch_output'],
	'Kill Running'      => [NULL, 'folder_watch_settings', 'onClick="killPlexSync();"'],
	'Enable All'        => [NULL, 'folder_watch_settings', 'onClick="enableAll();"'],
	'Disable All'       => [NULL, 'folder_watch_settings', 'onClick="disableAll();"']
],
	'plex_add'             => [
	'Manage Libraries' => ['plex', 'folder_watch']
]
];
if (!($E0a8102c8d2ef5b6 || $a76857631510ce75)) {
	goto label985;
}

$cb9992b923d4e5a8['servers'] = [
	'Proxies'         => ['proxies', 'servers'],
	'Process Monitor' => ['process_monitor', 'process_monitor']
];

label985:

goto label652;

label986:

goto label994;

label987:

$cb9992b923d4e5a8['stream_view'] = [
	'Edit Movie'    => ['movie?id=' . $Abcb228699a7f743, 'edit_movie'],
	'Manage Movies' => ['movies', 'movies']
];

label994:

goto label1;

label995:

$F0dbc8aa2a7e427d = [];

if (!isset($cb9992b923d4e5a8[$D7209256c56b1469])) {
	goto label52;
}

foreach ($cb9992b923d4e5a8[$D7209256c56b1469] as $b7319702635da556 => $ba2d146bb5a55097) {
	goto label1021;

	label1006:

	if (!(0 < count($ba2d146bb5a55097))) {
		goto label1017;
	}

	$F0dbc8aa2a7e427d[$b7319702635da556] = $ba2d146bb5a55097[0];

	label1017:

	goto label1063;

	label1019:

	goto label1059;

	label1021:
	if (!(($b7319702635da556 == 'Export as CSV') && !E589a4Bf54A2dAd1('adv', 'backups'))) {
		goto label1035;
	}

	goto label1063;

	label1035:
	if (!($b7319702635da556 && (!$ba2d146bb5a55097[1] || e589A4Bf54a2dAd1('adv', $ba2d146bb5a55097[1])))) {
		goto label1063;
	}

	if (count($ba2d146bb5a55097) == 3) {
		goto label1019;
	}

	goto label1006;

	label1059:

	$F0dbc8aa2a7e427d[$b7319702635da556] = 'code:' . $ba2d146bb5a55097[2];

	label1063:

	goto label1065;

	label1065:
}

goto label52;

label1068:

if (!($D7209256c56b1469 == 'server_view')) {
	goto label1110;
}

if ($Ec379295dc7029e6['server_type'] == 0) {
	goto label1088;
}

$cb9992b923d4e5a8['server_view'] = [
	'Edit Proxy'      => ['proxy?id=' . $Abcb228699a7f743, 'edit_server'],
	'Reinstall Proxy' => ['server_install?proxy=1&id=' . $Abcb228699a7f743, 'add_server'],
	'Manage Proxies'  => ['proxies', 'servers']
];
goto label1110;

label1088:

goto label1089;

label1089:

$cb9992b923d4e5a8['server_view'] = [
	'Process Monitor'  => ['process_monitor?server=' . $Abcb228699a7f743, 'process_monitor'],
	'Edit Server'      => ['server?id=' . $Abcb228699a7f743, 'edit_server'],
	'Reinstall Server' => ['server_install?id=' . $Abcb228699a7f743, 'add_server'],
	'View FPM Status'  => [NULL, 'servers', 'onClick="getFPMStatus(' . $Abcb228699a7f743 . ');"'],
	'Manage Servers'   => ['servers', 'servers']
];

label1110:

switch ($D7209256c56b1469) {
case 'archive':
	if (!is_null($ee34d49b6caaedbc)) {
		goto label1156;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[2]]);
	goto label1170;

	label1156:

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[1]]);
	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label1170:

	goto label995;
case 'movie':
case 'stream':
	goto label1188;

	label1172:

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[2]]);

	label1179:

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label1186:

	goto label995;
	goto label1233;

	label1188:
	if (!isset($fe93a43f53d92a4e) && !isset($Bf508e08aecfc95f)) {
		goto label1219;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[4]]);
	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[2]]);
	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[1]]);
	goto label1186;
	goto label1219;

	label1219:

	if (!isset(XUI::$rRequest['import'])) {
		goto label1232;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[1]]);
	goto label1179;

	label1232:

	goto label1172;
case 'episode':
	label1233:

	goto label1255;

	label1234:

	goto label995;
	goto label1275;

	label1236:

	if (isset($d344a66178d455b1)) {
		goto label1247;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[1]]);
	goto label1234;

	label1247:

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);
	goto label1234;

	label1255:

	if (!isset($e61e6dcee1252fa2)) {
		goto label1274;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[1]]);
	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);
	goto label1234;

	label1274:

	goto label1236;
case 'serie':
	label1275:

	if (isset($F955f269a1230501)) {
		goto label1285;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[3]]);

	label1285:

	if (!isset(XUI::$rRequest['import'])) {
		goto label1298;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);
	goto label1305;

	label1298:

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[1]]);

	label1305:

	goto label995;
case 'mag':
case 'enigma':
case 'line':
	goto label995;
case 'server':
case 'proxy':
	if (isset($Ec379295dc7029e6)) {
		goto label1317;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label1317:

	goto label995;
case 'server_install':
	if ($A7d54b094ae83c95 == 1) {
		goto label1329;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[1]]);
	goto label1336;

	label1329:

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label1336:

	goto label995;
case 'ticket':
	if (isset($e980e66d0f7b6829)) {
		goto label1347;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label1347:

	goto label995;
case 'ticket_view':
	if (!(isset($A647e7472a9c91b3) && ($A647e7472a9c91b3['status'] == 0))) {
		goto label1363;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label1363:

	goto label995;
case 'bouquet':
	if (isset($c723ecd706cad673)) {
		goto label1374;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[1]]);

	label1374:

	goto label995;
case 'created_channel':
	if (isset($aa4e95f1ed1932a8)) {
		goto label1385;
	}

	unset($cb9992b923d4e5a8[$D7209256c56b1469][array_keys($cb9992b923d4e5a8[$D7209256c56b1469])[0]]);

	label1385:

	goto label995;
}

goto label995;

label1387:

if (!(count(get_included_files()) == 1)) {
	goto label1397;
}

exit();

label1397:

$D7209256c56b1469 = D60F670923aDBf13();
$Abcb228699a7f743 = (isset(XUI::$rRequest['id']) ? intval(XUI::$rRequest['id']) : NULL);
goto label673;

label1413:

?>