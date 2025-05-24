<?php


goto label5127;

label1:

foreach (get_defined_constants(true)['user'] as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	if (!(substr($Bb672d1983256a93, 0, 7) == 'STATUS_')) {
		goto label23;
	}

	$A15af5ebe30b3cdc[intval($ce0840c647e1bbc7)] = $Bb672d1983256a93;

	label23:
}

if (1 < $Ae33c6c95ecad661) {
	goto label48;
}

if (E6D500e19634d513($E8870c6f95210f68)) {
	goto label59;
}

echo json_encode(['result' => false]);
goto label58;

label38:

$C7c58dad8ae2bc6c = XUI::$rRequest['referer'];
unset(XUI::$rRequest['referer']);

label43:

$dabeadfcc3ba1288 = XUI::$rRequest['action'];
goto label66;

label47:

goto label5146;

label48:

echo '<script>' . "\r\n" . 'var rCurrentPage = "';
echo $E8870c6f95210f68;
echo '";' . "\r\n" . 'var rReferer = null;' . "\r\n" . 'var rErrors = ';
goto label52;

label52:

echo json_encode($A15af5ebe30b3cdc);
echo ';' . "\r\n" . 'function submitForm(rType, rData, rReferer=null) {' . "\r\n" . '    $(".wrapper").fadeOut();' . "\r\n" . '    $("#status").fadeIn();' . "\r\n" . '    if (!rReferer) {' . "\r\n" . '        rReferer = "";' . "\r\n" . '    }' . "\r\n" . '    $.ajax({' . "\r\n" . '        type: "POST",' . "\r\n" . '        url: "post.php?action=" + encodeURIComponent(rType) + "&referer=" + encodeURIComponent(rReferer),' . "\r\n" . '        data: rData,' . "\r\n" . '        processData: false,' . "\r\n" . '        contentType: false,' . "\r\n" . '        success: function(rReturn) {' . "\r\n" . '            try {' . "\r\n" . '                var rJSON = $.parseJSON(rReturn);' . "\r\n" . '            } catch (e) {' . "\r\n" . '                var rJSON = {"status": 0, "result": false};' . "\r\n" . '              }' . "\r\n" . '            callbackForm(rJSON);' . "\r\n" . '        }' . "\r\n" . '    });' . "\r\n" . '}' . "\r\n" . 'function callbackForm(rData) {' . "\r\n" . '    if (rData.location) {' . "\r\n\t\t" . 'if (self !== top) {' . "\r\n\t\t\t" . 'parent.closeEditModal();' . "\r\n\t\t\t" . 'parent.showSuccess("Item has been saved.");' . "\r\n\t\t" . '} else if (rData.reload) {' . "\r\n" . '            window.location.href = rData.location;' . "\r\n" . '        } else {' . "\r\n" . '            navigate(rData.location);' . "\r\n" . '        }' . "\r\n" . '    } else {' . "\r\n" . '        $(".wrapper").fadeIn();' . "\r\n" . '        $("#status").fadeOut();' . "\r\n" . '        $(\':input[type="submit"]\').prop(\'disabled\', false);' . "\r\n\r\n" . '        if (window.rErrors[rData.status] == "STATUS_INVALID_INPUT") {' . "\r\n" . '            showError("Required entry fields have not been populated. Please check the form.");' . "\r\n" . '            return;' . "\r\n" . '        }' . "\r\n\r\n" . '        switch (window.rCurrentPage) {' . "\r\n" . '            case "record":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_NO_TITLE":' . "\r\n" . '                        showError("Please enter a title for the recorded event.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_NO_SOURCE":' . "\r\n" . '                        showError("Please select a source server to record the event from.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_NO_DESTINATION":' . "\r\n" . '                        showError("Please select a destination server to record the event to.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "quick_tools":' . "\r\n" . '                showSuccess("Quick tool was successfully executed.");' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "code":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_CODE_LENGTH":' . "\r\n" . '                        showError("Your access code needs to be at least 8 characters long.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_INVALID_CODE":' . "\r\n" . '                        showError("Please enter an access code.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_RESERVED_CODE":' . "\r\n" . '                        showError("Sorry, this code is reserved for system functions.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_EXISTS_CODE":' . "\r\n" . '                        showError("This access code already exists, please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n" . '            ' . "\r\n" . '            case "hmac":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_NO_DESCRIPTION":' . "\r\n" . '                        showError("Please enter a description.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_EXISTS_HMAC":' . "\r\n" . '                        showError("This HMAC Key already exists, please use another.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_NO_KEY":' . "\r\n" . '                        showError("Please generate a key.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "edit_profile":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_EMAIL":' . "\r\n" . '                        showError("Please enter a valid email address.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "ip":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_IP":' . "\r\n" . '                        showError("Please enter a valid IP address / CIDR.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n\t\t\t" . 'case "user":' . "\r\n\t\t\t\t" . 'switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_GROUP":' . "\r\n" . '                        showError("Please select a member group.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_EXISTS_USERNAME":' . "\r\n" . '                        showError("The username you selected already exists. Please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n" . '            ' . "\r\n" . '            case "provider":' . "\r\n\t\t\t\t" . 'switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_EXISTS_IP":' . "\r\n" . '                        showError("This provider is already being tracked on the system.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "created_channel":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_NO_SOURCES":' . "\r\n" . '                        showError("Please select at least one source for your channel.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "group":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_NAME":' . "\r\n" . '                        showError("This group name is already in use. Please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "isp":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_NAME":' . "\r\n" . '                        showError("This ISP has already been blocked.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "package":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_NAME":' . "\r\n" . '                        showError("This package name is already in use. Please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "mag":' . "\r\n" . '            case "enigma":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_DATE":' . "\r\n" . '                        showError("Please enter a valid date.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_INVALID_USER":' . "\r\n" . '                        showError("The paired user does not exist! Please unlink it.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_INVALID_MAC":' . "\r\n" . '                        showError("Please enter a valid MAC address.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_EXISTS_MAC":' . "\r\n" . '                        showError("The MAC address you entered is already in use.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n\t\t\t" . 'case "serie":' . "\r\n\t\t\t\t" . 'switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_EXISTS_CODE":' . "\r\n" . '                        showError("This series already exists in your database.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_NO_SOURCES":' . "\r\n" . '                        showError("No new episodes could be found in the playlist or folder.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "movie":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_EXISTS_NAME":' . "\r\n" . '                        showError("This movie already exists in your database. Please use another name.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_NO_SOURCES":' . "\r\n" . '                        showError("Please select at least one source for your movie.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "radio":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_EXISTS_SOURCE":' . "\r\n" . '                        showError("This station source is already in your database. Please use another URL.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_NO_SOURCES":' . "\r\n" . '                        showError("Please select at least one source for your station.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "server_install":' . "\r\n" . '            case "proxy":' . "\r\n" . '            case "server":' . "\r\n" . '            case "rtmp_ip":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_IP":' . "\r\n" . '                        showError("Please enter a valid IP address / CIDR.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_EXISTS_IP":' . "\r\n" . '                        showError("This IP address is already in the database. Please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "stream":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_FILE":' . "\r\n" . '                        showError("Could not process M3U file, please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_EXISTS_SOURCE":' . "\r\n" . '                        showError("This stream source is already in your database. Please use another URL.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_NO_SOURCES":' . "\r\n" . '                        showError("Please select at least one source for your stream.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "ticket":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_DATA":' . "\r\n" . '                        showError("Please ensure you enter both a title and message.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "watch_add":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_EXISTS_DIR":' . "\r\n" . '                        showError("This directory is already being watched, please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_INVALID_DIR":' . "\r\n" . '                        showError("An invalid directory was entered, please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n" . '            ' . "\r\n" . '            case "plex_add":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_EXISTS_DIR":' . "\r\n" . '                        showError("This library is already being synced, please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "line":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_DATE":' . "\r\n" . '                        showError("Please enter a valid date.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_EXISTS_USERNAME":' . "\r\n" . '                        showError("The username you selected already exists. Please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            default:' . "\r\n" . '                showError("An error occured while processing your request.");' . "\r\n" . '                break;' . "\r\n" . '        }' . "\r\n" . '    }' . "\r\n" . '}' . "\r\n" . '</script>' . "\r\n";
goto label5146;

label58:

exit();

label59:

if (isset(XUI::$rRequest['referer'])) {
	goto label38;
}

$C7c58dad8ae2bc6c = NULL;
goto label43;
goto label38;

label66:

$ba2d146bb5a55097 = XUI::$rRequest;
unset($ba2d146bb5a55097['action']);

if (!(count($ba2d146bb5a55097) == 0)) {
	goto label95;
}

$ba2d146bb5a55097 = json_decode(file_get_contents('php://input'), true);

if (is_array($ba2d146bb5a55097)) {
	goto label95;
}

goto label90;

label90:

$ba2d146bb5a55097 = [file_get_contents('php://input') => 1];

label95:

if (!$ba2d146bb5a55097) {
	goto label5140;
}

switch ($dabeadfcc3ba1288) {
case 'quick_tools':
	goto label2130;

	label225:

	$b62d6460eb33ea07->query('TRUNCATE `lines_activity`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label236:

	goto label2157;
	goto label2146;

	label238:

	$Bccd07953f314962 = $dec36723d7be7c49 = [];
	$b62d6460eb33ea07->query('SELECT DISTINCT(`stream_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
	}

	goto label1245;

	label256:

	if (isset($ba2d146bb5a55097['block_all_businesses'])) {
		goto label787;
	}

	if (isset($ba2d146bb5a55097['unblock_all_businesses'])) {
		goto label1064;
	}

	if (isset($ba2d146bb5a55097['purge_unlinked_lines_mag'])) {
		goto label1010;
	}

	if (isset($ba2d146bb5a55097['purge_unlinked_lines_e2'])) {
		goto label2189;
	}

	if (isset($ba2d146bb5a55097['symlink_all_movies'])) {
		goto label2342;
	}

	goto label454;

	label272:

	$Bccd07953f314962 = $dec36723d7be7c49 = [];
	$b62d6460eb33ea07->query('SELECT DISTINCT(`stream_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0 AND `streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
	}

	goto label2377;

	label290:

	exit();

	label291:

	goto label808;

	label292:

	$b62d6460eb33ea07->query('SELECT `id` FROM `streams` WHERE `type` = 3;');
	goto label1209;

	label296:

	goto label1125;

	label297:

	$b62d6460eb33ea07->query('TRUNCATE `streams_errors`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label1124;

	label308:

	goto label291;

	label309:

	shell_exec(PHP_BIN . ' ' . CLI_PATH . 'tools.php "duplicates" > /dev/null 2>/dev/null &');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label290;

	label325:

	goto label1325;

	label326:

	$b62d6460eb33ea07->query('TRUNCATE `blocked_isps`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label1325;

	label338:

	if (isset($ba2d146bb5a55097['block_trial_lines'])) {
		goto label714;
	}

	if (isset($ba2d146bb5a55097['regenerate_security_key'])) {
		goto label1896;
	}

	if (isset($ba2d146bb5a55097['unblock_trial_lines'])) {
		goto label1942;
	}

	if (isset($ba2d146bb5a55097['flush_blocked_asns'])) {
		goto label720;
	}

	if (isset($ba2d146bb5a55097['flush_blocked_ips'])) {
		goto label1326;
	}

	goto label543;

	label354:

	exit();

	label355:

	goto label2338;

	label356:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `is_isplock` = 1 WHERE `is_mag` = 1 AND `is_e2` = 0;');
	goto label2330;

	label360:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label368:

	goto label541;

	label369:

	goto label530;

	label370:

	exit();

	label371:

	goto label2256;

	label372:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `is_mag` = 0 AND `is_e2` = 0;');
	goto label2248;

	label376:

	goto label1041;

	label377:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `is_isplock` = 0 WHERE `is_mag` = 0 AND `is_e2` = 0;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label1041;

	label389:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 1 WHERE `type` = \'education\';');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label400:

	goto label2106;

	label401:

	$b62d6460eb33ea07->query('SELECT DISTINCT(`server_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND `streams_servers`.`pid` IS NOT NULL AND `streams_servers`.`pid` > 0 AND `streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label702;
	}

	$b492c39d2d86c9b6 = D5612F049a8056a5(['action' => 'stream', 'sub' => 'start', 'stream_ids' => $dec36723d7be7c49, 'servers' => $Bccd07953f314962]);
	goto label702;

	label432:

	exit();

	label433:

	goto label1807;

	label434:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 0 WHERE `type` = \'isp\';');
	goto label1799;

	label438:

	if (isset($ba2d146bb5a55097['clear_panel_logs'])) {
		goto label1126;
	}

	if (isset($ba2d146bb5a55097['clear_stream_errors'])) {
		goto label297;
	}

	if (isset($ba2d146bb5a55097['clear_stream_logs'])) {
		goto label1944;
	}

	if (isset($ba2d146bb5a55097['clear_user_logs'])) {
		goto label1130;
	}

	if (isset($ba2d146bb5a55097['clear_watch_logs'])) {
		goto label1932;
	}

	goto label338;

	label454:

	if (isset($ba2d146bb5a55097['symlink_all_episodes'])) {
		goto label809;
	}

	if (isset($ba2d146bb5a55097['recreate_channels'])) {
		goto label292;
	}

	if (isset($ba2d146bb5a55097['delete_duplicates'])) {
		goto label309;
	}

	if (isset($ba2d146bb5a55097['restore_images'])) {
		goto label2409;
	}

	if (isset($ba2d146bb5a55097['replace_movie_years'])) {
		goto label1390;
	}

	goto label1024;

	label470:

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label490;
	}

	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `id` IN (' . implode(',', array_map('intval', $Fe53bcd53690fff4)) . ');');

	label490:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label1063;

	label499:

	$b62d6460eb33ea07->query('SELECT DISTINCT(`server_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND (`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NULL OR `streams_servers`.`monitor_pid` <= 0) AND `streams_servers`.`on_demand` = 0);');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label2289;
	}

	$b492c39d2d86c9b6 = D5612F049A8056a5(['action' => 'stream', 'sub' => 'start', 'stream_ids' => $dec36723d7be7c49, 'servers' => $Bccd07953f314962]);
	goto label2289;

	label530:

	$b62d6460eb33ea07->query('TRUNCATE `mag_events`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label541:

	goto label784;
	goto label773;

	label543:

	if (isset($ba2d146bb5a55097['flush_blocked_isps'])) {
		goto label326;
	}

	if (isset($ba2d146bb5a55097['flush_blocked_uas'])) {
		goto label813;
	}

	if (isset($ba2d146bb5a55097['flush_country_lock'])) {
		goto label1285;
	}

	if (isset($ba2d146bb5a55097['force_epg_update'])) {
		goto label2121;
	}

	if (isset($ba2d146bb5a55097['force_update_movies'])) {
		goto label1855;
	}

	goto label2007;

	label559:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label567:

	goto label2268;
	goto label2258;

	label569:

	goto label1320;

	label570:

	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `username` IS NULL AND `password` IS NULL;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label1319;

	label581:

	$b62d6460eb33ea07->query('TRUNCATE `watch_logs`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label592:

	goto label1141;
	goto label1130;

	label594:

	goto label598;

	label595:

	$b62d6460eb33ea07->query('UPDATE `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` SET `to_analyze` = 1, `pid` = IF(`pid`, `pid`, 1) WHERE `type` IN (2,5) AND `direct_source` = 0;');

	label598:

	goto label616;
	goto label737;

	label600:

	goto label2094;

	label601:

	$b62d6460eb33ea07->query('UPDATE `mag_devices` SET `lock_device` = 1;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label2094;

	label613:

	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `compatible` = 0 WHERE `stream_info` IS NULL;');

	label616:

	goto label1779;

	label617:

	goto label1588;

	label618:

	$b62d6460eb33ea07->query('SELECT `id`, `movie_properties`, `rating` FROM `streams` WHERE `type` = 2;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);
		$Ad59eff1763511c9 = floatval($Ccbdf03f8a4df633['rating']) ?: 0;

		if (!($Fb9da1713bff19ce['rating'] != $Ad59eff1763511c9)) {
			goto label650;
		}

		$b62d6460eb33ea07->query('UPDATE `streams` SET `rating` = ? WHERE `id` = ?;', $Ad59eff1763511c9, $Fb9da1713bff19ce['id']);

		label650:
	}

	label652:

	goto label594;

	label653:

	goto label1348;

	label654:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `is_isplock` = 1 WHERE `is_mag` = 0 AND `is_e2` = 1;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label1348;

	label666:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label674:

	goto label710;
	goto label755;

	label676:

	$b62d6460eb33ea07->query('UPDATE `mag_devices` SET `ip` = NULL, `ver` = NULL, `image_version` = NULL, `stb_type` = NULL, `sn` = NULL, `device_id` = NULL, `device_id2` = NULL, `hw_version` = NULL, `token` = NULL;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label687:

	goto label1798;
	goto label1787;

	label689:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 0 WHERE `type` = \'education\';');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label700:

	goto label400;
	goto label389;

	label702:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label710:

	goto label567;
	goto label238;

	label712:

	exit();

	label713:

	goto label1931;

	label714:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `is_trial` = 1;');
	goto label1923;

	label718:

	exit();

	label719:

	goto label1941;

	label720:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 0;');
	goto label1933;

	label724:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `forced_country` = \'\';');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label735:

	goto label824;
	goto label813;

	label737:

	$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` WHERE `stream_info` IS NOT NULL;');
	$d353a4da8a0bb857 = $b62d6460eb33ea07->get_row()['count'];

	if (!(0 < $d353a4da8a0bb857)) {
		goto label613;
	}

	$C455840d1f015c68 = range(0, $d353a4da8a0bb857, 1000);
	goto label1809;

	label755:

	$Bccd07953f314962 = $dec36723d7be7c49 = [];
	$b62d6460eb33ea07->query('SELECT DISTINCT(`stream_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND `streams_servers`.`pid` IS NOT NULL AND `streams_servers`.`pid` > 0 AND `streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
	}

	goto label401;

	label773:

	$b62d6460eb33ea07->query('TRUNCATE `login_logs`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label784:

	goto label1101;

	label785:

	exit();

	label786:

	goto label1008;

	label787:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 1 WHERE `type` = \'business\';');
	goto label1000;

	label791:

	if (isset($ba2d146bb5a55097['remove_expired_trial_e2'])) {
		goto label1858;
	}

	if (isset($ba2d146bb5a55097['flush_isp_e2'])) {
		goto label1349;
	}

	if (isset($ba2d146bb5a55097['enable_isp_e2'])) {
		goto label654;
	}

	if (isset($ba2d146bb5a55097['disable_isp_e2'])) {
		goto label2146;
	}

	if (isset($ba2d146bb5a55097['clear_activity_logs'])) {
		goto label1062;
	}

	goto label1976;

	label807:

	exit();

	label808:

	goto label2341;

	label809:

	$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams_servers`.`server_id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `type` = 5 AND `movie_symlink` = 1;');
	goto label2158;

	label813:

	$b62d6460eb33ea07->query('TRUNCATE `blocked_uas`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label824:

	goto label325;

	label825:

	if (isset($ba2d146bb5a55097['unblock_all_isps'])) {
		goto label434;
	}

	if (isset($ba2d146bb5a55097['block_all_servers'])) {
		goto label1337;
	}

	if (isset($ba2d146bb5a55097['unblock_all_servers'])) {
		goto label2107;
	}

	if (isset($ba2d146bb5a55097['block_all_education'])) {
		goto label389;
	}

	if (isset($ba2d146bb5a55097['unblock_all_education'])) {
		goto label1009;
	}

	goto label256;

	label841:

	goto label876;

	label842:

	$b62d6460eb33ea07->query('DELETE FROM `enigma2_devices` WHERE `user_id` IN (SELECT `id` FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 1 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP()));');
	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 1 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP());');
	goto label868;

	label849:

	goto label2185;

	label850:

	$b62d6460eb33ea07->query('DELETE FROM `watch_refresh` WHERE `type` = 3;');
	$b62d6460eb33ea07->query('SELECT `id` FROM `streams` WHERE `type` = 5;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b62d6460eb33ea07->query('INSERT INTO `watch_refresh`(`type`, `stream_id`, `status`) VALUES(3, ?, 0);', $Fb9da1713bff19ce['id']);
	}

	goto label2177;

	label868:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label876:

	goto label687;

	label877:

	goto label676;

	label878:

	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = NULL, `current_source` = NULL, `to_analyze` = 0, `pid` = NULL, `stream_started` = NULL, `stream_info` = NULL, `stream_status` = 0, `monitor_pid` = NULL WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ');');

	label887:

	foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
		XUI::queueMovie($fe93a43f53d92a4e['id'], $fe93a43f53d92a4e['server_id']);
	}

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label2340;

	label905:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label913:

	goto label1974;
	goto label272;

	label915:

	if (isset($ba2d146bb5a55097['restart_down_streams'])) {
		goto label2299;
	}

	if (isset($ba2d146bb5a55097['start_offline_streams'])) {
		goto label982;
	}

	if (isset($ba2d146bb5a55097['stop_down_streams'])) {
		goto label272;
	}

	if (isset($ba2d146bb5a55097['stop_online_streams'])) {
		goto label1191;
	}

	if (isset($ba2d146bb5a55097['block_all_isps'])) {
		goto label1808;
	}

	goto label825;

	label931:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `is_trial` = 1;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label942:

	goto label713;
	goto label1896;

	label944:

	$b62d6460eb33ea07->query('DELETE FROM `watch_refresh` WHERE `type` = 1;');
	$b62d6460eb33ea07->query('SELECT `id` FROM `streams` WHERE `type` = 2;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b62d6460eb33ea07->query('INSERT INTO `watch_refresh`(`type`, `stream_id`, `status`) VALUES(1, ?, 0);', $Fb9da1713bff19ce['id']);
	}

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label2119;

	label969:

	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 1 AND `is_trial` = 1 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP());');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label980:

	goto label841;
	goto label1360;

	label982:

	$Bccd07953f314962 = $dec36723d7be7c49 = [];
	$b62d6460eb33ea07->query('SELECT DISTINCT(`stream_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND (`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NULL OR `streams_servers`.`monitor_pid` <= 0) AND `streams_servers`.`on_demand` = 0);');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
	}

	goto label499;

	label1000:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1008:

	goto label700;

	label1009:

	goto label689;

	label1010:

	$Fe53bcd53690fff4 = [];
	$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `is_mag` = 1 AND `id` NOT IN (SELECT `user_id` FROM `mag_devices`);');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Fe53bcd53690fff4[] = $Fb9da1713bff19ce['id'];
	}

	goto label470;

	label1024:

	if (isset($ba2d146bb5a55097['replace_series_years'])) {
		goto label617;
	}

	if (isset($ba2d146bb5a55097['check_compatibility'])) {
		goto label737;
	}

	if (isset($ba2d146bb5a55097['rescan_vod'])) {
		goto label595;
	}

	if (isset($ba2d146bb5a55097['update_ratings'])) {
		goto label618;
	}

	if (!isset($ba2d146bb5a55097['add_tmdb_ids'])) {
		goto label1317;
	}

	goto label1286;

	label1041:

	goto label371;

	label1042:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `is_isplock` = 1 WHERE `is_mag` = 0 AND `is_e2` = 0;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label370;

	label1053:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1061:

	goto label236;

	label1062:

	goto label225;

	label1063:

	goto label786;

	label1064:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 0 WHERE `type` = \'business\';');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label785;

	label1075:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1083:

	goto label1389;

	label1084:

	goto label1375;

	label1085:

	if (isset($ba2d146bb5a55097['remove_expired_trial'])) {
		goto label2257;
	}

	if (isset($ba2d146bb5a55097['flush_isp'])) {
		goto label372;
	}

	if (isset($ba2d146bb5a55097['enable_isp'])) {
		goto label1042;
	}

	if (isset($ba2d146bb5a55097['disable_isp'])) {
		goto label377;
	}

	if (isset($ba2d146bb5a55097['remove_expired_mag'])) {
		goto label1084;
	}

	goto label1142;

	label1101:

	goto label2269;

	label1102:

	$b62d6460eb33ea07->query('DELETE FROM `login_logs` WHERE `status` = \'INVALID_LOGIN\';');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label2269;

	label1114:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1122:

	goto label5140;
	goto label2420;

	label1124:

	exit();

	label1125:

	goto label368;

	label1126:

	$b62d6460eb33ea07->query('TRUNCATE `panel_logs`;');
	goto label360;

	label1130:

	$b62d6460eb33ea07->query('TRUNCATE `users_logs`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1141:

	goto label1943;

	label1142:

	if (isset($ba2d146bb5a55097['remove_trial_mag'])) {
		goto label2282;
	}

	if (isset($ba2d146bb5a55097['remove_expired_trial_mag'])) {
		goto label1992;
	}

	if (isset($ba2d146bb5a55097['flush_isp_mag'])) {
		goto label2339;
	}

	if (isset($ba2d146bb5a55097['enable_isp_mag'])) {
		goto label356;
	}

	if (isset($ba2d146bb5a55097['disable_isp_mag'])) {
		goto label2095;
	}

	goto label1880;

	label1158:

	$b62d6460eb33ea07->query('SELECT `id` FROM `lines` WHERE `is_e2` = 1 AND `id` NOT IN (SELECT `user_id` FROM `enigma2_devices`);');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Fe53bcd53690fff4[] = $Fb9da1713bff19ce['id'];
	}

	if (!(0 < count($Fe53bcd53690fff4))) {
		goto label1956;
	}

	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `id` IN (' . implode(',', array_map('intval', $Fe53bcd53690fff4)) . ');');
	goto label1956;

	label1191:

	$Bccd07953f314962 = $dec36723d7be7c49 = [];
	$b62d6460eb33ea07->query('SELECT DISTINCT(`stream_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND `streams_servers`.`pid` IS NOT NULL AND `streams_servers`.`pid` > 0 AND `streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
	}

	goto label2204;

	label1209:

	$dec36723d7be7c49 = array_map('intval', array_keys($b62d6460eb33ea07->get_rows(true, 'id')));

	if (!(0 < count($dec36723d7be7c49))) {
		goto label1237;
	}

	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `cchannel_rsources` = \'[]\', `pids_create_channel` = \'[]\', `bitrate` = NULL,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`stream_status` = 0,`monitor_pid` = NULL WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ');');

	label1237:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label807;

	label1245:

	$b62d6460eb33ea07->query('SELECT DISTINCT(`server_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label559;
	}

	$b492c39d2d86c9b6 = d5612F049A8056A5(['action' => 'stream', 'sub' => 'start', 'stream_ids' => $dec36723d7be7c49, 'servers' => $Bccd07953f314962]);
	goto label559;

	label1276:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1284:

	goto label735;

	label1285:

	goto label724;

	label1286:

	$b62d6460eb33ea07->query('SELECT `id`, `movie_properties`, `tmdb_id` FROM `streams` WHERE `type` = 2 AND `tmdb_id` IS NULL;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Ccbdf03f8a4df633 = json_decode($Fb9da1713bff19ce['movie_properties'], true);
		$D7f17b03d6498825 = $Ccbdf03f8a4df633['tmdb_id'] ?: NULL;

		if (!($Fb9da1713bff19ce['tmdb_id'] != $D7f17b03d6498825)) {
			goto label1315;
		}

		$b62d6460eb33ea07->query('UPDATE `streams` SET `tmdb_id` = ? WHERE `id` = ?;', $D7f17b03d6498825, $Fb9da1713bff19ce['id']);

		label1315:
	}

	label1317:

	goto label652;
	goto label618;

	label1319:

	exit();

	label1320:

	goto label1122;

	label1321:

	$b62d6460eb33ea07->query('DELETE FROM `streams_servers` WHERE (`server_id` NOT IN (SELECT `id` FROM `servers`)) OR (`stream_id` NOT IN (SELECT `id` FROM `streams`));');
	goto label1114;

	label1325:

	goto label719;

	label1326:

	A0C5c8de2109dd97();
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label718;

	label1336:

	goto label433;

	label1337:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 1 WHERE `type` = \'hosting\';');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label432;

	label1348:

	goto label1857;

	label1349:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `is_mag` = 0 AND `is_e2` = 1;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label1856;

	label1360:

	$b62d6460eb33ea07->query('DELETE FROM `enigma2_devices` WHERE `user_id` IN (SELECT `id` FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 1 AND `is_trial` = 1);');
	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 1 AND `is_trial` = 1;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label841;

	label1375:

	$b62d6460eb33ea07->query('DELETE FROM `mag_devices` WHERE `user_id` IN (SELECT `id` FROM `lines` WHERE `is_mag` = 1 AND `is_e2` = 0 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP()));');
	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 1 AND `is_e2` = 0 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP());');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1389:

	goto label376;

	label1390:

	$b62d6460eb33ea07->query('SELECT `id`, `year`, `movie_properties`, `stream_display_name` FROM `streams` WHERE `type` = 2 ORDER BY `id` DESC;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label1484;

		label1399:

		preg_match($dc09dd4fd63b71f5, $Fb9da1713bff19ce['stream_display_name'], $Ac97fb1939417214, PREG_OFFSET_CAPTURE, 0);
		$c33446be83a416e9 = NULL;
		$Aab0552159527eb3 = 0;

		if (count($Ac97fb1939417214) == 2) {
			goto label1571;
		}

		$E3665d09b9cea208 = explode('-', $Fb9da1713bff19ce['stream_display_name']);
		goto label1450;

		label1425:

		goto label1585;

		label1427:
		if (!(($Fb9da1713bff19ce['year'] != $b449ec5c1f7b1f2d['year']) || ($Fb9da1713bff19ce['stream_display_name'] != $b449ec5c1f7b1f2d['stream_display_name']))) {
			goto label1448;
		}

		$b62d6460eb33ea07->query('UPDATE `streams` SET `stream_display_name` = ?, `year` = ? WHERE `id` = ?;', $Fb9da1713bff19ce['stream_display_name'], $Fb9da1713bff19ce['year'], $Fb9da1713bff19ce['id']);

		label1448:

		goto label1425;

		label1450:
		if (!((1 < count($E3665d09b9cea208)) && is_numeric(trim(end($E3665d09b9cea208))))) {
			goto label1480;
		}

		$c33446be83a416e9 = intval(trim(end($E3665d09b9cea208)));
		$Aab0552159527eb3 = 2;

		label1480:

		goto label1578;
		goto label1571;

		label1484:

		$b449ec5c1f7b1f2d = $Fb9da1713bff19ce;

		if (!empty($Fb9da1713bff19ce['year'])) {
			goto label1504;
		}

		$Fb9da1713bff19ce['year'] = substr(json_decode($Fb9da1713bff19ce['movie_properties'], true)['release_date'], 0, 4);

		label1504:

		$dc09dd4fd63b71f5 = '/\\(([0-9)]+)\\)/';
		goto label1399;

		label1507:
		if (!((1900 <= $c33446be83a416e9) && ($c33446be83a416e9 <= intval(date('Y') + 1)))) {
			goto label1427;
		}

		if (!empty($Fb9da1713bff19ce['year'])) {
			goto label1529;
		}

		$Fb9da1713bff19ce['year'] = $c33446be83a416e9;

		label1529:

		if ($Aab0552159527eb3 == 1) {
			goto label1551;
		}

		goto label1535;

		label1535:

		$Fb9da1713bff19ce['stream_display_name'] = trim(implode('-', array_slice($E3665d09b9cea208, 0, -1)));
		goto label1569;

		label1551:

		$Fb9da1713bff19ce['stream_display_name'] = trim(preg_replace('!\\s+!', ' ', str_replace($Ac97fb1939417214[0][0], '', $Fb9da1713bff19ce['stream_display_name'])));

		label1569:

		goto label1427;

		label1571:

		$c33446be83a416e9 = intval($Ac97fb1939417214[1][0]);
		$Aab0552159527eb3 = 1;

		label1578:

		if (!(0 < $Aab0552159527eb3)) {
			goto label1427;
		}

		goto label1507;

		label1585:
	}

	label1587:

	goto label2408;

	label1588:

	$b62d6460eb33ea07->query('SELECT `id`, `year`, `release_date`, `title` FROM `streams_series`;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		goto label1661;

		label1597:

		goto label1777;

		label1599:

		$Fb9da1713bff19ce['title'] = trim(implode('-', array_slice($E3665d09b9cea208, 0, -1)));
		goto label1633;

		label1615:

		$Fb9da1713bff19ce['title'] = trim(preg_replace('!\\s+!', ' ', str_replace($Ac97fb1939417214[0][0], '', $Fb9da1713bff19ce['title'])));

		label1633:

		goto label1754;

		label1635:

		preg_match($dc09dd4fd63b71f5, $Fb9da1713bff19ce['title'], $Ac97fb1939417214, PREG_OFFSET_CAPTURE, 0);
		$c33446be83a416e9 = NULL;
		$Aab0552159527eb3 = 0;

		if (count($Ac97fb1939417214) == 2) {
			goto label1706;
		}

		$E3665d09b9cea208 = explode('-', $Fb9da1713bff19ce['title']);
		goto label1720;

		label1661:

		$b449ec5c1f7b1f2d = $Fb9da1713bff19ce;

		if (!empty($Fb9da1713bff19ce['year'])) {
			goto label1675;
		}

		$Fb9da1713bff19ce['year'] = substr($Fb9da1713bff19ce['release_date'], 0, 4);

		label1675:

		$dc09dd4fd63b71f5 = '/\\(([0-9)]+)\\)/';
		goto label1635;

		label1678:
		if (!((1900 <= $c33446be83a416e9) && ($c33446be83a416e9 <= intval(date('Y') + 1)))) {
			goto label1754;
		}

		if (!empty($Fb9da1713bff19ce['year'])) {
			goto label1700;
		}

		$Fb9da1713bff19ce['year'] = $c33446be83a416e9;

		label1700:

		if ($Aab0552159527eb3 == 1) {
			goto label1615;
		}

		goto label1599;

		label1706:

		$c33446be83a416e9 = intval($Ac97fb1939417214[1][0]);
		$Aab0552159527eb3 = 1;

		label1713:

		if (!(0 < $Aab0552159527eb3)) {
			goto label1754;
		}

		goto label1678;

		label1720:
		if (!((1 < count($E3665d09b9cea208)) && is_numeric(trim(end($E3665d09b9cea208))))) {
			goto label1750;
		}

		$c33446be83a416e9 = intval(trim(end($E3665d09b9cea208)));
		$Aab0552159527eb3 = 2;

		label1750:

		goto label1713;
		goto label1706;

		label1754:
		if (!(($Fb9da1713bff19ce['year'] != $b449ec5c1f7b1f2d['year']) || ($Fb9da1713bff19ce['title'] != $b449ec5c1f7b1f2d['title']))) {
			goto label1775;
		}

		$b62d6460eb33ea07->query('UPDATE `streams_series` SET `title` = ?, `year` = ? WHERE `id` = ?;', $Fb9da1713bff19ce['title'], $Fb9da1713bff19ce['year'], $Fb9da1713bff19ce['id']);

		label1775:

		goto label1597;

		label1777:
	}

	label1779:

	goto label1587;
	goto label1390;

	label1781:

	exit();

	label1782:

	goto label1061;

	label1783:

	$b62d6460eb33ea07->query('TRUNCATE `lines_logs`;');
	goto label1053;

	label1787:

	$b62d6460eb33ea07->query('UPDATE `mag_devices` SET `lock_device` = 0;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1798:

	goto label600;

	label1799:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1807:

	goto label2246;

	label1808:

	goto label2235;

	label1809:

	if ($C455840d1f015c68) {
		goto label1812;
	}

	$C455840d1f015c68 = [0];

	label1812:

	foreach ($C455840d1f015c68 as $Feb130957c9ca68a) {
		$b62d6460eb33ea07->query('SELECT `server_stream_id`, `stream_info`, `compatible` FROM `streams_servers` WHERE `stream_info` IS NOT NULL LIMIT ' . $Feb130957c9ca68a . ', 1000;');

		foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
			$ec173304ea5bcb05 = XUI::d00c33C8075d14a5($Fb9da1713bff19ce['stream_info']);

			if (!($ec173304ea5bcb05 != $Fb9da1713bff19ce['compatible'])) {
				goto label1841;
			}

			$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `compatible` = ? WHERE `server_stream_id` = ?;', $ec173304ea5bcb05, $Fb9da1713bff19ce['server_stream_id']);

			label1841:
		}
	}

	goto label613;

	label1846:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1854:

	goto label2120;

	label1855:

	goto label944;

	label1856:

	exit();

	label1857:

	goto label980;

	label1858:

	$b62d6460eb33ea07->query('DELETE FROM `enigma2_devices` WHERE `user_id` IN (SELECT `id` FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 1 AND `is_trial` = 1 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP()));');
	goto label969;

	label1862:

	$b62d6460eb33ea07->query('DELETE FROM `watch_refresh` WHERE `type` = 2;');
	$b62d6460eb33ea07->query('SELECT `id` FROM `streams_series`;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$b62d6460eb33ea07->query('INSERT INTO `watch_refresh`(`type`, `stream_id`, `status`) VALUES(2, ?, 0);', $Fb9da1713bff19ce['id']);
	}

	goto label1846;

	label1880:

	if (isset($ba2d146bb5a55097['enable_mag_lock'])) {
		goto label601;
	}

	if (isset($ba2d146bb5a55097['disable_mag_lock'])) {
		goto label1787;
	}

	if (isset($ba2d146bb5a55097['clear_mag_lock'])) {
		goto label877;
	}

	if (isset($ba2d146bb5a55097['remove_expired_e2'])) {
		goto label842;
	}

	if (isset($ba2d146bb5a55097['remove_trial_e2'])) {
		goto label1360;
	}

	goto label791;

	label1896:

	$d62aa5edabe8f001 = md5(random_bytes(16) . strval(time()));
	$b62d6460eb33ea07->query('UPDATE `settings` SET `security_key` = ?;', $d62aa5edabe8f001);
	dD93e05E9BFf8a1e();
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label712;

	label1923:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1931:

	goto label592;

	label1932:

	goto label581;

	label1933:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1941:

	goto label942;

	label1942:

	goto label931;

	label1943:

	goto label296;

	label1944:

	$b62d6460eb33ea07->query('TRUNCATE `streams_logs`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label296;

	label1956:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1964:

	goto label1063;
	goto label1010;

	label1966:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label1974:

	goto label2297;
	goto label982;

	label1976:

	if (isset($ba2d146bb5a55097['clear_client_logs'])) {
		goto label1783;
	}

	if (isset($ba2d146bb5a55097['clear_credit_logs'])) {
		goto label2270;
	}

	if (isset($ba2d146bb5a55097['clear_login_flood'])) {
		goto label1102;
	}

	if (isset($ba2d146bb5a55097['clear_login_logs'])) {
		goto label773;
	}

	if (isset($ba2d146bb5a55097['clear_mag_events'])) {
		goto label369;
	}

	goto label438;

	label1992:

	$b62d6460eb33ea07->query('DELETE FROM `mag_devices` WHERE `user_id` IN (SELECT `id` FROM `lines` WHERE `is_mag` = 1 AND `is_e2` = 0 AND `is_trial` = 1 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP()));');
	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 1 AND `is_e2` = 0 AND `is_trial` = 1 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP());');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label2281;

	label2007:

	if (isset($ba2d146bb5a55097['force_update_series'])) {
		goto label1862;
	}

	if (isset($ba2d146bb5a55097['force_update_episodes'])) {
		goto label850;
	}

	if (isset($ba2d146bb5a55097['reauthorise_mysql'])) {
		goto label2258;
	}

	if (isset($ba2d146bb5a55097['restart_all_streams'])) {
		goto label238;
	}

	if (isset($ba2d146bb5a55097['restart_online_streams'])) {
		goto label755;
	}

	goto label915;

	label2023:

	$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows();
	$dec36723d7be7c49 = [];

	foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
		$dec36723d7be7c49[] = $fe93a43f53d92a4e['id'];
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label2064;
	}

	goto label2055;

	label2042:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `isp_desc` = \'\', `as_number` = NULL WHERE `is_mag` = 1 AND `is_e2` = 0;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2053:

	goto label2281;
	goto label1992;

	label2055:

	$b62d6460eb33ea07->query('UPDATE `streams_servers` SET `bitrate` = NULL, `current_source` = NULL, `to_analyze` = 0, `pid` = NULL, `stream_started` = NULL, `stream_info` = NULL, `stream_status` = 0, `monitor_pid` = NULL WHERE `stream_id` IN (' . implode(',', $dec36723d7be7c49) . ');');

	label2064:

	foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
		XUI::queueMovie($fe93a43f53d92a4e['id'], $fe93a43f53d92a4e['server_id']);
	}

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label2187;

	label2082:

	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 0 AND `is_trial` = 1;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2093:

	goto label2191;

	label2094:

	goto label355;

	label2095:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `is_isplock` = 0 WHERE `is_mag` = 1 AND `is_e2` = 0;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label354;

	label2106:

	goto label1336;

	label2107:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 0 WHERE `type` = \'hosting\';');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label1336;

	label2119:

	exit();

	label2120:

	goto label1284;

	label2121:

	shell_exec(XUI_HOME . '/php/bin/php ' . XUI_HOME . '/crons/epg.php > /dev/null 2>/dev/null &');
	goto label1276;

	label2130:

	set_time_limit(0);

	if (isset($ba2d146bb5a55097['cleanup_streams'])) {
		goto label1321;
	}

	if (isset($ba2d146bb5a55097['remove_null_lines'])) {
		goto label570;
	}

	if (isset($ba2d146bb5a55097['remove_expired'])) {
		goto label2192;
	}

	if (isset($ba2d146bb5a55097['remove_trial'])) {
		goto label2082;
	}

	goto label1085;

	label2146:

	$b62d6460eb33ea07->query('UPDATE `lines` SET `is_isplock` = 0 WHERE `is_mag` = 0 AND `is_e2` = 1;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2157:

	goto label653;

	label2158:

	$D9846544dffb63c9 = $b62d6460eb33ea07->get_rows();
	$dec36723d7be7c49 = [];

	foreach ($D9846544dffb63c9 as $fe93a43f53d92a4e) {
		$dec36723d7be7c49[] = $fe93a43f53d92a4e['id'];
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label887;
	}

	goto label878;

	label2177:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2185:

	goto label1854;
	goto label1862;

	label2187:

	exit();

	label2188:

	goto label1964;

	label2189:

	$Fe53bcd53690fff4 = [];
	goto label1158;

	label2191:

	goto label569;

	label2192:

	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 0 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP());');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label569;

	label2204:

	$b62d6460eb33ea07->query('SELECT DISTINCT(`server_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND `streams_servers`.`pid` IS NOT NULL AND `streams_servers`.`pid` > 0 AND `streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label905;
	}

	$b492c39d2d86c9b6 = d5612f049A8056a5(['action' => 'stream', 'sub' => 'stop', 'stream_ids' => $dec36723d7be7c49, 'servers' => $Bccd07953f314962]);
	goto label905;

	label2235:

	$b62d6460eb33ea07->query('UPDATE `blocked_asns` SET `blocked` = 1 WHERE `type` = \'isp\';');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2246:

	goto label913;
	goto label1191;

	label2248:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2256:

	goto label2328;

	label2257:

	goto label2317;

	label2258:

	EDa0b738B69cf18f();
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2268:

	goto label849;

	label2269:

	goto label1782;

	label2270:

	$b62d6460eb33ea07->query('TRUNCATE `users_credits_logs`;');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	goto label1781;

	label2281:

	goto label1083;

	label2282:

	$b62d6460eb33ea07->query('DELETE FROM `mag_devices` WHERE `user_id` IN (SELECT `id` FROM `lines` WHERE `is_mag` = 1 AND `is_e2` = 0 AND `is_trial` = 1);');
	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 1 AND `is_e2` = 0 AND `is_trial` = 1;');
	goto label1075;

	label2289:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2297:

	goto label674;
	goto label2299;

	label2299:

	$Bccd07953f314962 = $dec36723d7be7c49 = [];
	$b62d6460eb33ea07->query('SELECT DISTINCT(`stream_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0 AND `streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$dec36723d7be7c49[] = intval($Fb9da1713bff19ce['stream_id']);
	}

	goto label2346;

	label2317:

	$b62d6460eb33ea07->query('DELETE FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 0 AND `is_trial` = 1 AND (`exp_date` IS NOT NULL AND `exp_date` < UNIX_TIMESTAMP());');
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2328:

	goto label2093;
	goto label2082;

	label2330:

	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();

	label2338:

	goto label2053;

	label2339:

	goto label2042;

	label2340:

	exit();

	label2341:

	goto label2188;

	label2342:

	$b62d6460eb33ea07->query('SELECT `streams`.`id`, `streams_servers`.`server_id` FROM `streams` LEFT JOIN `streams_servers` ON `streams_servers`.`stream_id` = `streams`.`id` WHERE `type` = 2 AND `movie_symlink` = 1;');
	goto label2023;

	label2346:

	$b62d6460eb33ea07->query('SELECT DISTINCT(`server_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0 AND `streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label666;
	}

	$b492c39d2d86c9b6 = D5612F049a8056a5(['action' => 'stream', 'sub' => 'start', 'stream_ids' => $dec36723d7be7c49, 'servers' => $Bccd07953f314962]);
	goto label666;

	label2377:

	$b62d6460eb33ea07->query('SELECT DISTINCT(`server_id`) FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams`.`type` = 1 AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0 AND `streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0;');

	foreach ($b62d6460eb33ea07->get_rows() as $Fb9da1713bff19ce) {
		$Bccd07953f314962[] = intval($Fb9da1713bff19ce['server_id']);
	}

	if (!(0 < count($dec36723d7be7c49))) {
		goto label1966;
	}

	$b492c39d2d86c9b6 = d5612f049a8056a5(['action' => 'stream', 'sub' => 'stop', 'stream_ids' => $dec36723d7be7c49, 'servers' => $Bccd07953f314962]);
	goto label1966;

	label2408:

	goto label308;

	label2409:

	restoreImages();
	echo json_encode(['result' => true, 'status' => STATUS_SUCCESS]);
	exit();
	goto label308;
case 'stream_tools':
	label2420:

	goto label2430;

	label2421:

	goto label2447;

	label2422:

	API::D76B22c5D89F4917($ba2d146bb5a55097);
	echo json_encode(['result' => true, 'location' => 'stream_tools?status=1', 'status' => 1]);
	goto label2446;

	label2430:

	if (isset($ba2d146bb5a55097['replace_dns'])) {
		goto label2422;
	}

	if (!isset($ba2d146bb5a55097['move_streams'])) {
		goto label2421;
	}

	API::E727614f4D646885($ba2d146bb5a55097);
	echo json_encode(['result' => true, 'location' => 'stream_tools?status=2', 'status' => 2]);
	exit();
	goto label2421;

	label2446:

	exit();

	label2447:

	goto label5140;
	goto label2449;
case 'bouquet':
	label2449:

	$B9869413eae86beb = API::f987238750272Aac($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2469;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2483;

	label2469:

	echo json_encode(['result' => true, 'location' => 'bouquets?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'stream':
	label2483:

	goto label2530;

	label2484:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'streams')) {
		goto label2520;
	}

	if (isset($_FILES['m3u_file'])) {
		goto label2553;
	}

	echo json_encode(['result' => true, 'location' => 'stream_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2552;

	label2519:

	goto label2529;

	label2520:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();

	label2529:

	goto label2551;

	label2530:

	$B9869413eae86beb = API::C880aAAf942BB5Ee($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2484;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2551;
	goto label2484;

	label2551:

	goto label2568;

	label2552:

	goto label2567;

	label2553:

	echo json_encode(['result' => true, 'location' => 'streams?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();

	label2567:

	goto label2519;
case 'movie':
	label2568:

	goto label2658;

	label2569:

	echo json_encode(['result' => true, 'location' => 'movies?status=2', 'status' => $B9869413eae86beb['status']]);
	exit();

	label2578:

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2644;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	goto label2642;

	label2593:

	exit();

	label2594:

	goto label2678;

	label2595:

	exit();

	label2596:

	goto label2594;

	label2597:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	goto label2593;

	label2606:

	echo json_encode(['result' => true, 'location' => 'stream_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2596;

	label2628:

	echo json_encode(['result' => true, 'location' => 'movies?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	goto label2595;

	label2642:

	exit();
	goto label2594;

	label2644:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'movies')) {
		goto label2597;
	}

	if (isset($_FILES['m3u_file'])) {
		goto label2628;
	}

	goto label2606;

	label2658:
	if (!empty($ba2d146bb5a55097['import_folder']) || !empty($_FILES['m3u_file']['tmp_name'])) {
		goto label2673;
	}

	$B9869413eae86beb = API::Bb0bf26077f756B6($ba2d146bb5a55097);
	goto label2578;

	label2673:

	$B9869413eae86beb = API::importMovies($ba2d146bb5a55097);
	goto label2569;
case 'backups':
	label2678:

	$B9869413eae86beb = API::BB69cF0a7Dc01Fc9($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2698;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2712;

	label2698:

	echo json_encode(['result' => true, 'location' => 'backups?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'cache':
	label2712:

	$B9869413eae86beb = API::editCacheCron($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2732;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2746;

	label2732:

	echo json_encode(['result' => true, 'location' => 'cache?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'bouquet_order':
	label2746:

	goto label2763;

	label2747:

	goto label2762;

	label2748:

	echo json_encode(['result' => true, 'location' => 'bouquet_order?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();

	label2762:

	goto label2804;

	label2763:

	$B9869413eae86beb = API::eF6cE97E3670F56E($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2748;
	}

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS_REPLACE) {
		goto label2789;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2788;

	label2788:

	goto label2803;

	label2789:

	echo json_encode(['result' => true, 'location' => 'bouquet_order?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();

	label2803:

	goto label2747;
case 'bouquet_sort':
	label2804:

	$B9869413eae86beb = API::fCa0E640839b1f77($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2824;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2845;

	label2824:

	echo json_encode(['result' => true, 'location' => 'bouquet_sort?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'channel_order':
	label2845:

	$B9869413eae86beb = API::d66F5c0003F834Bb($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2865;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2879;

	label2865:

	echo json_encode(['result' => true, 'location' => 'channel_order?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'code':
	label2879:

	goto label2903;

	label2880:

	if (C9359222B3E3D256() == $B9869413eae86beb['data']['orig_code']) {
		goto label2924;
	}

	echo json_encode(['result' => true, 'location' => 'codes?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2954;
	goto label2924;

	label2903:

	$B9869413eae86beb = API::E791Fbd5e55B2260($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2880;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2954;
	goto label2880;

	label2924:

	echo json_encode(['result' => true, 'location' => c54e7b1D4554677f() . '://' . $Bcf70cba56392975[SERVER_ID]['server_ip'] . ':' . $_SERVER['SERVER_PORT'] . '/' . $B9869413eae86beb['data']['new_code'] . '/codes?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();

	label2954:

	goto label2955;
case 'hmac':
	label2955:

	$B9869413eae86beb = API::e3784bF595659221($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label2975;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label2989;

	label2975:

	echo json_encode(['result' => true, 'location' => 'hmacs?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'record':
	label2989:

	$B9869413eae86beb = API::scheduleRecording($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3009;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3023;

	label3009:

	echo json_encode(['result' => true, 'location' => 'archive?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'created_channel':
	label3023:

	goto label3034;

	label3024:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();

	label3033:

	goto label3087;

	label3034:

	$B9869413eae86beb = API::f1c265189a2Dc086($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3055;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3033;
	goto label3055;

	label3055:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'created_channels')) {
		goto label3024;
	}

	echo json_encode(['result' => true, 'location' => 'stream_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3033;
	goto label3024;
case 'edit_profile':
	label3087:

	goto label3089;

	label3088:

	goto label3144;

	label3089:

	$B9869413eae86beb = API::A9076d2C2935cD1F($ba2d146bb5a55097);
	setcookie('hue', $ba2d146bb5a55097['hue'], time() + 315360000);
	setcookie('theme', $ba2d146bb5a55097['theme'], time() + 315360000);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3128;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	goto label3126;

	label3126:

	exit();
	goto label3088;

	label3128:

	echo json_encode(['result' => true, 'location' => 'edit_profile?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status'], 'reload' => true]);
	exit();
	goto label3088;
case 'epg':
	label3144:

	$B9869413eae86beb = API::dd2Cede3D30Ce0dF($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3164;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3178;

	label3164:

	echo json_encode(['result' => true, 'location' => 'epgs?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'provider':
	label3178:

	$B9869413eae86beb = API::processProvider($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3198;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3212;

	label3198:

	echo json_encode(['result' => true, 'location' => 'providers?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'episode':
	label3212:

	goto label3213;

	label3213:

	$B9869413eae86beb = API::E87d54803afCB01E($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3294;
	}

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS_MULTI) {
		goto label3262;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3261;

	label3238:

	goto label3248;

	label3239:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();

	label3248:

	goto label3293;

	label3249:

	exit();
	goto label3329;

	label3251:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3329;

	label3261:

	goto label3293;

	label3262:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'episodes')) {
		goto label3239;
	}

	echo json_encode(['result' => true, 'location' => 'episodes?series=' . intval($B9869413eae86beb['data']['series_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3238;

	label3293:

	goto label3329;

	label3294:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'episodes')) {
		goto label3251;
	}

	echo json_encode(['result' => true, 'location' => 'stream_view?sid=' . intval($B9869413eae86beb['data']['series_id']) . '&id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status'])]);
	goto label3249;

	label3329:

	goto label3330;
case 'episodes_mass':
	label3330:

	$B9869413eae86beb = API::f7003f34d5471a0c($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3350;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3364;

	label3350:

	echo json_encode(['result' => true, 'location' => 'episodes_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'line_mass':
	label3364:

	$B9869413eae86beb = API::db89160F60b8a927($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3384;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3398;

	label3384:

	echo json_encode(['result' => true, 'location' => 'line_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'user_mass':
	label3398:

	$B9869413eae86beb = API::bF6B43c59eB87f95($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3418;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3432;

	label3418:

	echo json_encode(['result' => true, 'location' => 'user_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mag_mass':
	label3432:

	$B9869413eae86beb = API::E7C08Edf9E4dB430($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3452;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3466;

	label3452:

	echo json_encode(['result' => true, 'location' => 'mag_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'enigma_mass':
	label3466:

	$B9869413eae86beb = API::bC0849619c65E85D($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3486;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3500;

	label3486:

	echo json_encode(['result' => true, 'location' => 'enigma_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'stream_mass':
	label3500:

	$B9869413eae86beb = API::C0ec9F27E524d591($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3520;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3534;

	label3520:

	echo json_encode(['result' => true, 'location' => 'stream_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'created_channel_mass':
	label3534:

	$B9869413eae86beb = API::massEditChannels($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3554;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3568;

	label3554:

	echo json_encode(['result' => true, 'location' => 'created_channel_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'movie_mass':
	label3568:

	$B9869413eae86beb = API::E7a12F961bB49bc2($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3588;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3602;

	label3588:

	echo json_encode(['result' => true, 'location' => 'movie_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'radio_mass':
	label3602:

	$B9869413eae86beb = API::cAa448aC1EDDbe71($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3622;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3636;

	label3622:

	echo json_encode(['result' => true, 'location' => 'radio_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'series_mass':
	label3636:

	$B9869413eae86beb = API::E2864c69063dAa47($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3656;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3670;

	label3656:

	echo json_encode(['result' => true, 'location' => 'series_mass?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'group':
	label3670:

	$B9869413eae86beb = API::BC0c0Df5663423b9($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3690;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3704;

	label3690:

	echo json_encode(['result' => true, 'location' => 'groups?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'ip':
	label3704:

	$B9869413eae86beb = API::f7e2383F47283cb7($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3724;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3738;

	label3724:

	echo json_encode(['result' => true, 'location' => 'ips?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'isp':
	label3738:

	$B9869413eae86beb = API::dA7Dc6613EDB583d($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3758;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3772;

	label3758:

	echo json_encode(['result' => true, 'location' => 'isps?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'line':
	label3772:

	goto label3773;

	label3773:

	$B9869413eae86beb = API::fCCaA0F750EFA5B7($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3804;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3803;
	goto label3804;

	label3794:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();

	label3803:

	goto label3829;

	label3804:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'lines')) {
		goto label3794;
	}

	echo json_encode(['result' => true, 'location' => 'lines?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3803;
	goto label3794;
case 'mag':
	label3829:

	goto label3865;

	label3830:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();

	label3839:

	goto label3886;

	label3840:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'mags')) {
		goto label3830;
	}

	echo json_encode(['result' => true, 'location' => 'mags?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3839;
	goto label3830;

	label3865:

	$B9869413eae86beb = API::b087C00F20554a9B($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3840;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3839;
	goto label3840;
case 'enigma':
	label3886:

	goto label3922;

	label3887:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'enigmas')) {
		goto label3912;
	}

	echo json_encode(['result' => true, 'location' => 'enigmas?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3921;
	goto label3912;

	label3912:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();

	label3921:

	goto label3943;

	label3922:

	$B9869413eae86beb = API::F5d44be8b59f4E62($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3887;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3921;
	goto label3887;
case 'mass_delete_streams':
	label3943:

	$B9869413eae86beb = API::a36Ea57241A7fAB4($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3963;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label3977;

	label3963:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mass_delete_movies':
	label3977:

	$B9869413eae86beb = API::E90AAB8822Db3471($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label3997;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4011;

	label3997:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mass_delete_lines':
	label4011:

	$B9869413eae86beb = API::dB513DA74A80aa86($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4031;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4045;

	label4031:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mass_delete_series':
	label4045:

	$B9869413eae86beb = API::eF244e3eBd7F3689($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4065;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4079;

	label4065:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mass_delete_episodes':
	label4079:

	$B9869413eae86beb = API::e40EFB7C8fE0c75a($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4099;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4113;

	label4099:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mass_delete_radios':
	label4113:

	$B9869413eae86beb = API::eca87ce385946658($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4133;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4147;

	label4133:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mass_delete_users':
	label4147:

	$B9869413eae86beb = API::B4d7FEba5F4515f3($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4167;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4181;

	label4167:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mass_delete_mags':
	label4181:

	$B9869413eae86beb = API::bC8340f8518F645B($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4201;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4215;

	label4201:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mass_delete_enigmas':
	label4215:

	$B9869413eae86beb = API::a6951fA57Ce89958($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4235;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4249;

	label4235:

	echo json_encode(['result' => true, 'location' => 'mass_delete?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'package':
	label4249:

	$B9869413eae86beb = API::Cd3092aD83523301($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4269;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4283;

	label4269:

	echo json_encode(['result' => true, 'location' => 'packages?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'profile':
	label4283:

	$B9869413eae86beb = API::cd25Cc90161D1a86($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4303;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4317;

	label4303:

	echo json_encode(['result' => true, 'location' => 'profiles?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'radio':
	label4317:

	goto label4360;

	label4318:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();

	label4327:

	goto label4381;

	label4328:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'radios')) {
		goto label4318;
	}

	echo json_encode(['result' => true, 'location' => 'stream_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4327;
	goto label4318;

	label4360:

	$B9869413eae86beb = API::E584387c6F494c28($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4328;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4327;
	goto label4328;
case 'rtmp_ip':
	label4381:

	$B9869413eae86beb = API::Fa73216009424093($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4401;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4415;

	label4401:

	echo json_encode(['result' => true, 'location' => 'rtmp_ips?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'serie':
	label4415:

	goto label4465;

	label4416:

	echo json_encode(['result' => true, 'location' => 'series?status=2', 'status' => $B9869413eae86beb['status']]);
	exit();

	label4425:

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4442;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	goto label4440;

	label4440:

	exit();
	goto label4485;

	label4442:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'series')) {
		goto label4488;
	}

	echo json_encode(['result' => true, 'location' => 'series?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	goto label4486;

	label4465:
	if (!empty($ba2d146bb5a55097['import_folder']) || !empty($_FILES['m3u_file']['tmp_name'])) {
		goto label4480;
	}

	$B9869413eae86beb = API::DBDd7075f827466E($ba2d146bb5a55097);
	goto label4425;

	label4480:

	$B9869413eae86beb = API::importSeries($ba2d146bb5a55097);
	goto label4416;

	label4485:

	goto label4498;

	label4486:

	exit();
	goto label4485;

	label4488:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4485;
case 'proxy':
	label4498:

	$B9869413eae86beb = API::dDAc4b7c6f34a02F($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4518;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4539;

	label4518:

	echo json_encode(['result' => true, 'location' => 'server_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'server':
	label4539:

	goto label4665;

	label4540:

	echo json_encode(['result' => true, 'location' => 'server_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . STATUS_CERTBOT, 'status' => STATUS_CERTBOT]);
	exit();

	label4558:

	goto label4687;

	label4559:

	goto label4558;

	label4560:

	$b62d6460eb33ea07->query('UPDATE `servers` SET `certbot_ssl` = null WHERE `id` = ?;', $B9869413eae86beb['data']['insert_id']);
	$A2d49761b62f935a = [
		'action' => 'certbot_generate',
		'domain' => []
	];

	if (is_array($ba2d146bb5a55097['domain_name'])) {
		goto label4614;
	}

	goto label4607;

	label4574:

	echo json_encode(['result' => true, 'location' => 'server_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . STATUS_CERTBOT_INVALID, 'status' => STATUS_CERTBOT_INVALID]);
	exit();
	goto label4558;

	label4593:

	$b62d6460eb33ea07->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $B9869413eae86beb['data']['insert_id'], time(), json_encode($A2d49761b62f935a));
	goto label4540;

	label4607:

	$ba2d146bb5a55097['domain_name'] = explode(',', $ba2d146bb5a55097['domain_name']);

	label4614:

	foreach ($ba2d146bb5a55097['domain_name'] as $f547aeca99c55c3e) {
		if (filter_var($f547aeca99c55c3e, FILTER_VALIDATE_IP)) {
			goto label4628;
		}

		$A2d49761b62f935a['domain'][] = $f547aeca99c55c3e;

		label4628:
	}

	if (0 < count($A2d49761b62f935a['domain'])) {
		goto label4593;
	}

	goto label4574;

	label4638:

	goto label4558;

	label4639:

	if ($ba2d146bb5a55097['regenerate_ssl'] == 1) {
		goto label4560;
	}

	echo json_encode(['result' => true, 'location' => 'server_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4559;

	label4665:

	$ba2d146bb5a55097['server_type'] = 0;
	$B9869413eae86beb = API::e9EB556bbD1E4448($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4639;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4638;
case 'server_install':
	label4687:

	$B9869413eae86beb = API::F7b37A01d2b82f24($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4707;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4728;

	label4707:

	echo json_encode(['result' => true, 'location' => 'server_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'settings':
	label4728:

	$B9869413eae86beb = API::D0D0E87FB9AD0543($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4748;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4762;

	label4748:

	echo json_encode(['result' => true, 'location' => 'settings?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'settings_plex':
	label4762:

	$B9869413eae86beb = API::editPlexSettings($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4782;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4796;

	label4782:

	echo json_encode(['result' => true, 'location' => 'settings_plex?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'settings_watch':
	label4796:

	$B9869413eae86beb = API::CEd6182c3e420D08($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4816;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4830;

	label4816:

	echo json_encode(['result' => true, 'location' => 'settings_watch?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'server_order':
	label4830:

	$B9869413eae86beb = API::orderServers($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4850;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4861;

	label4850:

	echo json_encode(['result' => true, 'location' => 'server_order?status=' . STATUS_SUCCESS, 'status' => $B9869413eae86beb['status']]);
	exit();
case 'stream_categories':
	label4861:

	$B9869413eae86beb = API::aE31FE945c56D5df($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4881;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4892;

	label4881:

	echo json_encode(['result' => true, 'location' => 'stream_categories?status=' . STATUS_SUCCESS_MULTI, 'status' => $B9869413eae86beb['status']]);
	exit();
case 'stream_category':
	label4892:

	$B9869413eae86beb = API::eF92c3ebb0E25473($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4912;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4926;

	label4912:

	echo json_encode(['result' => true, 'location' => 'stream_categories?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'ticket':
	label4926:

	$B9869413eae86beb = API::F29B6959409Fc688($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4946;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4967;

	label4946:

	echo json_encode(['result' => true, 'location' => 'ticket_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'user':
	label4967:

	goto label4978;

	label4968:

	echo json_encode(['result' => true, 'location' => $C7c58dad8ae2bc6c, 'status' => $B9869413eae86beb['status']]);
	exit();

	label4977:

	goto label5024;

	label4978:

	$B9869413eae86beb = API::d3824406bC4f2a23($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label4999;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4977;
	goto label4999;

	label4999:
	if (isset($ba2d146bb5a55097['edit']) && (getPageFromURL($C7c58dad8ae2bc6c) == 'users')) {
		goto label4968;
	}

	echo json_encode(['result' => true, 'location' => 'users?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label4977;
	goto label4968;
case 'useragent':
	label5024:

	$B9869413eae86beb = API::D73a37B0D9B54604($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label5044;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label5058;

	label5044:

	echo json_encode(['result' => true, 'location' => 'useragents?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'watch_add':
	label5058:

	$B9869413eae86beb = API::f2a688C54CAf9C4a($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label5078;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label5092;

	label5078:

	echo json_encode(['result' => true, 'location' => 'watch?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'plex_add':
	label5092:

	$B9869413eae86beb = API::processPlexSync($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label5112;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label5126;

	label5112:

	echo json_encode(['result' => true, 'location' => 'plex?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
}

label5126:

goto label5140;

label5127:

$Ae33c6c95ecad661 = count(get_included_files());
include 'session.php';
include 'functions.php';
$E8870c6f95210f68 = D60f670923ADbF13();
$A15af5ebe30b3cdc = [];
goto label1;

label5140:

echo json_encode(['result' => false]);
exit();
goto label47;

label5146:

?>