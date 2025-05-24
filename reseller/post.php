<?php


goto label320;

label1:

$ba2d146bb5a55097 = json_decode(file_get_contents('php://input'), true);

label9:

if (!$ba2d146bb5a55097) {
	goto label349;
}

switch ($dabeadfcc3ba1288) {
case 'edit_profile':
	goto label27;

	label27:

	$B9869413eae86beb = ResellerAPI::d587583533E150c8($ba2d146bb5a55097);
	setcookie('hue', $ba2d146bb5a55097['hue'], time() + 315360000);
	setcookie('theme', $ba2d146bb5a55097['theme'], time() + 315360000);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label67;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	goto label65;

	label64:

	goto label83;

	label65:

	exit();
	goto label64;

	label67:

	echo json_encode(['result' => true, 'location' => 'edit_profile?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status'], 'reload' => true]);
	exit();
	goto label64;
case 'line':
	label83:

	$B9869413eae86beb = ResellerAPI::fcCAA0f750efa5B7($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label103;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label117;

	label103:

	echo json_encode(['result' => true, 'location' => 'lines?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'mag':
	label117:

	$B9869413eae86beb = ResellerAPI::B087C00F20554A9B($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label137;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label151;

	label137:

	echo json_encode(['result' => true, 'location' => 'mags?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'enigma':
	label151:

	$B9869413eae86beb = ResellerAPI::F5D44bE8B59f4E62($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label171;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label185;

	label171:

	echo json_encode(['result' => true, 'location' => 'enigmas?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'ticket':
	label185:

	$B9869413eae86beb = ResellerAPI::f29b6959409FC688($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label205;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label226;

	label205:

	echo json_encode(['result' => true, 'location' => 'ticket_view?id=' . intval($B9869413eae86beb['data']['insert_id']) . '&status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
case 'user':
	label226:

	$B9869413eae86beb = ResellerAPI::D3824406BC4f2a23($ba2d146bb5a55097);

	if ($B9869413eae86beb['status'] == STATUS_SUCCESS) {
		goto label246;
	}

	echo json_encode(['result' => false, 'data' => $B9869413eae86beb['data'], 'status' => $B9869413eae86beb['status']]);
	exit();
	goto label260;

	label246:

	echo json_encode(['result' => true, 'location' => 'users?status=' . intval($B9869413eae86beb['status']), 'status' => $B9869413eae86beb['status']]);
	exit();
}

label260:

goto label349;

label261:

echo ';' . "\r\n" . 'function submitForm(rType, rData, rCallback=callbackForm) {' . "\r\n" . '    $.ajax({' . "\r\n" . '        type: "POST",' . "\r\n" . '        url: "post.php?action=" + encodeURIComponent(rType),' . "\r\n" . '        data: rData,' . "\r\n" . '        processData: false,' . "\r\n" . '        contentType: false,' . "\r\n" . '        success: function(rReturn) {' . "\r\n" . '            try {' . "\r\n" . '                var rJSON = $.parseJSON(rReturn);' . "\r\n" . '            } catch (e) {' . "\r\n" . '                var rJSON = {"status": 0, "result": false};' . "\r\n" . '              }' . "\r\n" . '            rCallback(rJSON);' . "\r\n" . '        }' . "\r\n" . '    });' . "\r\n" . '}' . "\r\n" . 'function callbackForm(rData) {' . "\r\n" . '    if (rData.location) {' . "\r\n" . '        if (rData.reload) {' . "\r\n" . '            window.location.href = rData.location;' . "\r\n" . '        } else {' . "\r\n" . '            navigate(rData.location);' . "\r\n" . '        }' . "\r\n" . '    } else {' . "\r\n" . '        $(\':input[type="submit"]\').prop(\'disabled\', false);' . "\r\n\r\n" . '        switch (window.rCurrentPage) {' . "\r\n" . '            case "edit_profile":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_EMAIL":' . "\r\n" . '                        showError("Please enter a valid email address.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_INVALID_PASSWORD":' . "\r\n" . '                        showError("Your password must be at least ';
echo XUI::$rSettings['pass_length'];
echo ' characters long.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "mag":' . "\r\n" . '            case "enigma":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_TYPE":' . "\r\n" . '                        showError("This package is not supported.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_NO_TRIALS":' . "\r\n" . '                        showError("You cannot generate trials at this time.");' . "\r\n" . '                        break;' . "\r\n" . '                        ' . "\r\n" . '                    case "STATUS_INSUFFICIENT_CREDITS":' . "\r\n" . '                        showError("You do not have enough credits to make this purchase.");' . "\r\n" . '                        break;' . "\r\n" . '                        ' . "\r\n" . '                    case "STATUS_INVALID_PACKAGE":' . "\r\n" . '                        showError("Please select a valid package.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_INVALID_MAC":' . "\r\n" . '                        showError("Please enter a valid MAC address.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    case "STATUS_EXISTS_MAC":' . "\r\n" . '                        showError("The MAC address you entered is already in use.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "ticket":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_DATA":' . "\r\n" . '                        showError("Please ensure you enter both a title and message.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "line":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_TYPE":' . "\r\n" . '                        showError("This package is not supported.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_NO_TRIALS":' . "\r\n" . '                        showError("You cannot generate trials at this time.");' . "\r\n" . '                        break;' . "\r\n" . '                        ' . "\r\n" . '                    case "STATUS_INSUFFICIENT_CREDITS":' . "\r\n" . '                        showError("You do not have enough credits to make this purchase.");' . "\r\n" . '                        break;' . "\r\n" . '                        ' . "\r\n" . '                    case "STATUS_INVALID_PACKAGE":' . "\r\n" . '                        showError("Please select a valid package.");' . "\r\n" . '                        break;' . "\r\n" . '                        ' . "\r\n" . '                    case "STATUS_INVALID_USERNAME":' . "\r\n" . '                        showError("Username is too short! It must be at least ';
echo $db0a61ef32b89a27['minimum_username_length'];
echo ' characters long.");' . "\r\n" . '                        break;' . "\r\n" . '                        ' . "\r\n" . '                    case "STATUS_INVALID_PASSWORD":' . "\r\n" . '                        showError("Password is too short! It must be at least ';
goto label311;

label270:

session_write_close();
$E8870c6f95210f68 = d60f670923ADBF13();
$A15af5ebe30b3cdc = [];

foreach (get_defined_constants(true)['user'] as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	if (!(substr($Bb672d1983256a93, 0, 7) == 'STATUS_')) {
		goto label298;
	}

	$A15af5ebe30b3cdc[intval($ce0840c647e1bbc7)] = $Bb672d1983256a93;

	label298:
}

goto label332;

label301:

echo '<script>' . "\r\n" . 'var rCurrentPage = "';
echo $E8870c6f95210f68;
echo '";' . "\r\n" . 'var rErrors = ';
echo json_encode($A15af5ebe30b3cdc);
goto label261;

label309:

echo ' characters long.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_INSUFFICIENT_CREDITS":' . "\r\n" . '                        showError("You do not have enough credits to make this purchase.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_INVALID_SUBRESELLER":' . "\r\n" . '                        showError("You are not set up to create subresellers. Please open a ticket.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_EXISTS_USERNAME":' . "\r\n" . '                        showError("The username you selected already exists. Please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            default:' . "\r\n" . '                showError("An error occured while processing your request.");' . "\r\n" . '                break;' . "\r\n" . '        }' . "\r\n" . '    }' . "\r\n" . '}' . "\r\n" . '</script>' . "\r\n";
goto label356;

label311:

echo $db0a61ef32b89a27['minimum_password_length'];
echo ' characters long.");' . "\r\n" . '                        break;                    ' . "\r\n\r\n" . '                    case "STATUS_EXISTS_USERNAME":' . "\r\n" . '                        showError("The username you selected already exists. Please use another.");' . "\r\n" . '                        break;' . "\r\n\r\n" . '                    default:' . "\r\n" . '                        showError("An error occured while processing your request.");' . "\r\n" . '                        break;' . "\r\n" . '                }' . "\r\n" . '                break;' . "\r\n\r\n" . '            case "user":' . "\r\n" . '                switch (window.rErrors[rData.status]) {' . "\r\n" . '                    case "STATUS_INVALID_PASSWORD":' . "\r\n" . '                        showError("Password is too short! It must be at least ';
echo $db0a61ef32b89a27['minimum_password_length'];
echo ' characters long.");' . "\r\n" . '                        break;' . "\r\n" . '                    ' . "\r\n" . '                    case "STATUS_INVALID_USERNAME":' . "\r\n" . '                        showError("Username is too short! It must be at least ';
echo $db0a61ef32b89a27['minimum_username_length'];
goto label309;

label320:

echo ' ';
$Ae33c6c95ecad661 = count(get_included_files());
include 'session.php';
include 'functions.php';
session_start();
goto label270;

label332:

if (1 < $Ae33c6c95ecad661) {
	goto label301;
}

$dabeadfcc3ba1288 = XUI::$rRequest['action'];
$ba2d146bb5a55097 = XUI::$rRequest;
unset($ba2d146bb5a55097['action']);

if (!(count($ba2d146bb5a55097) == 0)) {
	goto label9;
}

goto label1;

label349:

echo json_encode(['result' => false]);
exit();
goto label356;
goto label301;

label356:

?>