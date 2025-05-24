<?php


goto label172;

label1:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="limit_requests">Rate Limit - Per Second <i title="Limit requests per second. This can be enabled if your server can\'t keep up with the incoming requests. Set to 0 to disable." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="limit_requests" name="limit_requests" value="';
echo htmlspecialchars($B59d0718aa3e5332['limit_requests']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="limit_burst">Rate Limit - Burst Queue <i title="When the request limit is reached, excess requests will be dropped by default. You can push these requests into a queue which will be fulfilled in order rather than concurrently. This will help ease the flow of traffic and make sure service isn\'t disrupted by the rate limiting." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="limit_burst" name="limit_burst" value="';
echo htmlspecialchars($B59d0718aa3e5332['limit_burst']);
goto label242;

label14:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

if ($a6c312069fd40fb3) {
	goto label289;
}

$a3bf08a758c8cd26 = b647618532763671($B59d0718aa3e5332['id']);

if (!$a3bf08a758c8cd26) {
	goto label289;
}

goto label281;

label26:

if (!($B59d0718aa3e5332['enabled'] == 1)) {
	goto label32;
}

echo 'checked ';

label32:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="enable_proxy">Proxied <i title="Route connections through allocated proxies." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_proxy" id="enable_proxy" type="checkbox" ';

if (!($B59d0718aa3e5332['enable_proxy'] == 1)) {
	goto label83;
}

goto label82;

label39:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Domains & IP\'s</span>' . "\n" . '                                            ';

label40:

echo "\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Advanced</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#performance" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-flash mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Performance</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                    <li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#ssl-certificate" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-certificate mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">SSL Certificate</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="server-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_name">Server Name</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="server_name" name="server_name" value="';
echo htmlspecialchars($B59d0718aa3e5332['server_name']);
goto label298;

label47:

foreach (explode(',', $B59d0718aa3e5332['https_ports_add']) as $e5bebfb39a19fe80) {
	if (!(is_numeric($e5bebfb39a19fe80) && (80 <= $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535))) {
		goto label72;
	}

	echo '                                                            <option selected value="';
	echo $e5bebfb39a19fe80;
	echo '">';
	echo $e5bebfb39a19fe80;
	echo '</option>' . "\n" . '                                                            ';

	label72:
}

echo '                                                        </select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="rtmp_port">RTMP Port <i title="Enter the port to run the RTMP server on." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="rtmp_port" name="rtmp_port" value="';
echo htmlspecialchars($B59d0718aa3e5332['rtmp_port']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="disable_ramdisk">Disable Ramdisk <i title="If you have a fast NVMe SSD, you can disable ramdisk to allow streams to be run and output from your disk. Faster than you\'d think, but you could hit a IO bottleneck depending on your connections. This setting will take a minute or so to update as it requires root access." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="disable_ramdisk" id="disable_ramdisk" type="checkbox" ';
goto label676;

label82:

echo 'checked ';

label83:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="additional_ips">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                ';

if ($B59d0718aa3e5332['is_main']) {
	goto label181;
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="alert alert-info alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'By default, clients will be directed to the Server IP on the Details tab. You can add IP\'s or Domain Names here to force clients to be directed to those instead. If random IP / domain is selected, each client will be directed to a random entry in the list, otherwise the first entry in the list will be used to serve content.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';
goto label181;

label89:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    ';

if (!$B59d0718aa3e5332['is_main']) {
	goto label461;
}

echo '                                                    <div class="col-md-12" align="right">' . "\n" . '                                                    ';
goto label190;
goto label461;

label97:

if (!$a6c312069fd40fb3) {
	goto label127;
}

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="cert_serial">Certificate Serial</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="cert_serial" value="';
echo $B1a3986a5f168faf['serial'];
echo '" readonly>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="cert_subject">Certificate Subject</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="cert_subject" value="';
echo $B1a3986a5f168faf['subject'];
goto label126;

label107:

$dbf6ba9f4917ae91 = [
	['id' => 'A1', 'name' => 'Anonymous Proxy'],
	['id' => 'A2', 'name' => 'Satellite Provider'],
	['id' => 'O1', 'name' => 'Other Country'],
	['id' => 'AF', 'name' => 'Afghanistan'],
	['id' => 'AX', 'name' => 'Aland Islands'],
	['id' => 'AL', 'name' => 'Albania'],
	['id' => 'DZ', 'name' => 'Algeria'],
	['id' => 'AS', 'name' => 'American Samoa'],
	['id' => 'AD', 'name' => 'Andorra'],
	['id' => 'AO', 'name' => 'Angola'],
	['id' => 'AI', 'name' => 'Anguilla'],
	['id' => 'AQ', 'name' => 'Antarctica'],
	['id' => 'AG', 'name' => 'Antigua And Barbuda'],
	['id' => 'AR', 'name' => 'Argentina'],
	['id' => 'AM', 'name' => 'Armenia'],
	['id' => 'AW', 'name' => 'Aruba'],
	['id' => 'AU', 'name' => 'Australia'],
	['id' => 'AT', 'name' => 'Austria'],
	['id' => 'AZ', 'name' => 'Azerbaijan'],
	['id' => 'BS', 'name' => 'Bahamas'],
	['id' => 'BH', 'name' => 'Bahrain'],
	['id' => 'BD', 'name' => 'Bangladesh'],
	['id' => 'BB', 'name' => 'Barbados'],
	['id' => 'BY', 'name' => 'Belarus'],
	['id' => 'BE', 'name' => 'Belgium'],
	['id' => 'BZ', 'name' => 'Belize'],
	['id' => 'BJ', 'name' => 'Benin'],
	['id' => 'BM', 'name' => 'Bermuda'],
	['id' => 'BT', 'name' => 'Bhutan'],
	['id' => 'BO', 'name' => 'Bolivia'],
	['id' => 'BA', 'name' => 'Bosnia And Herzegovina'],
	['id' => 'BW', 'name' => 'Botswana'],
	['id' => 'BV', 'name' => 'Bouvet Island'],
	['id' => 'BR', 'name' => 'Brazil'],
	['id' => 'IO', 'name' => 'British Indian Ocean Territory'],
	['id' => 'BN', 'name' => 'Brunei Darussalam'],
	['id' => 'BG', 'name' => 'Bulgaria'],
	['id' => 'BF', 'name' => 'Burkina Faso'],
	['id' => 'BI', 'name' => 'Burundi'],
	['id' => 'KH', 'name' => 'Cambodia'],
	['id' => 'CM', 'name' => 'Cameroon'],
	['id' => 'CA', 'name' => 'Canada'],
	['id' => 'CV', 'name' => 'Cape Verde'],
	['id' => 'KY', 'name' => 'Cayman Islands'],
	['id' => 'CF', 'name' => 'Central African Republic'],
	['id' => 'TD', 'name' => 'Chad'],
	['id' => 'CL', 'name' => 'Chile'],
	['id' => 'CN', 'name' => 'China'],
	['id' => 'CX', 'name' => 'Christmas Island'],
	['id' => 'CC', 'name' => 'Cocos (Keeling) Islands'],
	['id' => 'CO', 'name' => 'Colombia'],
	['id' => 'KM', 'name' => 'Comoros'],
	['id' => 'CG', 'name' => 'Congo'],
	['id' => 'CD', 'name' => 'Congo, Democratic Republic'],
	['id' => 'CK', 'name' => 'Cook Islands'],
	['id' => 'CR', 'name' => 'Costa Rica'],
	['id' => 'CI', 'name' => 'Cote D\'Ivoire'],
	['id' => 'HR', 'name' => 'Croatia'],
	['id' => 'CU', 'name' => 'Cuba'],
	['id' => 'CY', 'name' => 'Cyprus'],
	['id' => 'CZ', 'name' => 'Czech Republic'],
	['id' => 'DK', 'name' => 'Denmark'],
	['id' => 'DJ', 'name' => 'Djibouti'],
	['id' => 'DM', 'name' => 'Dominica'],
	['id' => 'DO', 'name' => 'Dominican Republic'],
	['id' => 'EC', 'name' => 'Ecuador'],
	['id' => 'EG', 'name' => 'Egypt'],
	['id' => 'SV', 'name' => 'El Salvador'],
	['id' => 'GQ', 'name' => 'Equatorial Guinea'],
	['id' => 'ER', 'name' => 'Eritrea'],
	['id' => 'EE', 'name' => 'Estonia'],
	['id' => 'ET', 'name' => 'Ethiopia'],
	['id' => 'FK', 'name' => 'Falkland Islands (Malvinas)'],
	['id' => 'FO', 'name' => 'Faroe Islands'],
	['id' => 'FJ', 'name' => 'Fiji'],
	['id' => 'FI', 'name' => 'Finland'],
	['id' => 'FR', 'name' => 'France'],
	['id' => 'GF', 'name' => 'French Guiana'],
	['id' => 'PF', 'name' => 'French Polynesia'],
	['id' => 'TF', 'name' => 'French Southern Territories'],
	['id' => 'MK', 'name' => 'Fyrom'],
	['id' => 'GA', 'name' => 'Gabon'],
	['id' => 'GM', 'name' => 'Gambia'],
	['id' => 'GE', 'name' => 'Georgia'],
	['id' => 'DE', 'name' => 'Germany'],
	['id' => 'GH', 'name' => 'Ghana'],
	['id' => 'GI', 'name' => 'Gibraltar'],
	['id' => 'GR', 'name' => 'Greece'],
	['id' => 'GL', 'name' => 'Greenland'],
	['id' => 'GD', 'name' => 'Grenada'],
	['id' => 'GP', 'name' => 'Guadeloupe'],
	['id' => 'GU', 'name' => 'Guam'],
	['id' => 'GT', 'name' => 'Guatemala'],
	['id' => 'GG', 'name' => 'Guernsey'],
	['id' => 'GN', 'name' => 'Guinea'],
	['id' => 'GW', 'name' => 'Guinea-Bissau'],
	['id' => 'GY', 'name' => 'Guyana'],
	['id' => 'HT', 'name' => 'Haiti'],
	['id' => 'HM', 'name' => 'Heard Island & Mcdonald Islands'],
	['id' => 'VA', 'name' => 'Holy See (Vatican City State)'],
	['id' => 'HN', 'name' => 'Honduras'],
	['id' => 'HK', 'name' => 'Hong Kong'],
	['id' => 'HU', 'name' => 'Hungary'],
	['id' => 'IS', 'name' => 'Iceland'],
	['id' => 'IN', 'name' => 'India'],
	['id' => 'ID', 'name' => 'Indonesia'],
	['id' => 'IR', 'name' => 'Iran, Islamic Republic Of'],
	['id' => 'IQ', 'name' => 'Iraq'],
	['id' => 'IE', 'name' => 'Ireland'],
	['id' => 'IM', 'name' => 'Isle Of Man'],
	['id' => 'IL', 'name' => 'Israel'],
	['id' => 'IT', 'name' => 'Italy'],
	['id' => 'JM', 'name' => 'Jamaica'],
	['id' => 'JP', 'name' => 'Japan'],
	['id' => 'JE', 'name' => 'Jersey'],
	['id' => 'JO', 'name' => 'Jordan'],
	['id' => 'KZ', 'name' => 'Kazakhstan'],
	['id' => 'KE', 'name' => 'Kenya'],
	['id' => 'KI', 'name' => 'Kiribati'],
	['id' => 'KR', 'name' => 'Korea'],
	['id' => 'KW', 'name' => 'Kuwait'],
	['id' => 'KG', 'name' => 'Kyrgyzstan'],
	['id' => 'LA', 'name' => 'Lao People\'s Democratic Republic'],
	['id' => 'LV', 'name' => 'Latvia'],
	['id' => 'LB', 'name' => 'Lebanon'],
	['id' => 'LS', 'name' => 'Lesotho'],
	['id' => 'LR', 'name' => 'Liberia'],
	['id' => 'LY', 'name' => 'Libyan Arab Jamahiriya'],
	['id' => 'LI', 'name' => 'Liechtenstein'],
	['id' => 'LT', 'name' => 'Lithuania'],
	['id' => 'LU', 'name' => 'Luxembourg'],
	['id' => 'MO', 'name' => 'Macao'],
	['id' => 'MG', 'name' => 'Madagascar'],
	['id' => 'MW', 'name' => 'Malawi'],
	['id' => 'MY', 'name' => 'Malaysia'],
	['id' => 'MV', 'name' => 'Maldives'],
	['id' => 'ML', 'name' => 'Mali'],
	['id' => 'MT', 'name' => 'Malta'],
	['id' => 'MH', 'name' => 'Marshall Islands'],
	['id' => 'MQ', 'name' => 'Martinique'],
	['id' => 'MR', 'name' => 'Mauritania'],
	['id' => 'MU', 'name' => 'Mauritius'],
	['id' => 'YT', 'name' => 'Mayotte'],
	['id' => 'MX', 'name' => 'Mexico'],
	['id' => 'FM', 'name' => 'Micronesia, Federated States Of'],
	['id' => 'MD', 'name' => 'Moldova'],
	['id' => 'MC', 'name' => 'Monaco'],
	['id' => 'MN', 'name' => 'Mongolia'],
	['id' => 'ME', 'name' => 'Montenegro'],
	['id' => 'MS', 'name' => 'Montserrat'],
	['id' => 'MA', 'name' => 'Morocco'],
	['id' => 'MZ', 'name' => 'Mozambique'],
	['id' => 'MM', 'name' => 'Myanmar'],
	['id' => 'NA', 'name' => 'Namibia'],
	['id' => 'NR', 'name' => 'Nauru'],
	['id' => 'NP', 'name' => 'Nepal'],
	['id' => 'NL', 'name' => 'Netherlands'],
	['id' => 'AN', 'name' => 'Netherlands Antilles'],
	['id' => 'NC', 'name' => 'New Caledonia'],
	['id' => 'NZ', 'name' => 'New Zealand'],
	['id' => 'NI', 'name' => 'Nicaragua'],
	['id' => 'NE', 'name' => 'Niger'],
	['id' => 'NG', 'name' => 'Nigeria'],
	['id' => 'NU', 'name' => 'Niue'],
	['id' => 'NF', 'name' => 'Norfolk Island'],
	['id' => 'MP', 'name' => 'Northern Mariana Islands'],
	['id' => 'NO', 'name' => 'Norway'],
	['id' => 'OM', 'name' => 'Oman'],
	['id' => 'PK', 'name' => 'Pakistan'],
	['id' => 'PW', 'name' => 'Palau'],
	['id' => 'PS', 'name' => 'Palestinian Territory, Occupied'],
	['id' => 'PA', 'name' => 'Panama'],
	['id' => 'PG', 'name' => 'Papua New Guinea'],
	['id' => 'PY', 'name' => 'Paraguay'],
	['id' => 'PE', 'name' => 'Peru'],
	['id' => 'PH', 'name' => 'Philippines'],
	['id' => 'PN', 'name' => 'Pitcairn'],
	['id' => 'PL', 'name' => 'Poland'],
	['id' => 'PT', 'name' => 'Portugal'],
	['id' => 'PR', 'name' => 'Puerto Rico'],
	['id' => 'QA', 'name' => 'Qatar'],
	['id' => 'RE', 'name' => 'Reunion'],
	['id' => 'RO', 'name' => 'Romania'],
	['id' => 'RU', 'name' => 'Russian Federation'],
	['id' => 'RW', 'name' => 'Rwanda'],
	['id' => 'BL', 'name' => 'Saint Barthelemy'],
	['id' => 'SH', 'name' => 'Saint Helena'],
	['id' => 'KN', 'name' => 'Saint Kitts And Nevis'],
	['id' => 'LC', 'name' => 'Saint Lucia'],
	['id' => 'MF', 'name' => 'Saint Martin'],
	['id' => 'PM', 'name' => 'Saint Pierre And Miquelon'],
	['id' => 'VC', 'name' => 'Saint Vincent And Grenadines'],
	['id' => 'WS', 'name' => 'Samoa'],
	['id' => 'SM', 'name' => 'San Marino'],
	['id' => 'ST', 'name' => 'Sao Tome And Principe'],
	['id' => 'SA', 'name' => 'Saudi Arabia'],
	['id' => 'SN', 'name' => 'Senegal'],
	['id' => 'RS', 'name' => 'Serbia'],
	['id' => 'SC', 'name' => 'Seychelles'],
	['id' => 'SL', 'name' => 'Sierra Leone'],
	['id' => 'SG', 'name' => 'Singapore'],
	['id' => 'SK', 'name' => 'Slovakia'],
	['id' => 'SI', 'name' => 'Slovenia'],
	['id' => 'SB', 'name' => 'Solomon Islands'],
	['id' => 'SO', 'name' => 'Somalia'],
	['id' => 'ZA', 'name' => 'South Africa'],
	['id' => 'GS', 'name' => 'South Georgia And Sandwich Isl.'],
	['id' => 'ES', 'name' => 'Spain'],
	['id' => 'LK', 'name' => 'Sri Lanka'],
	['id' => 'SD', 'name' => 'Sudan'],
	['id' => 'SR', 'name' => 'Suriname'],
	['id' => 'SJ', 'name' => 'Svalbard And Jan Mayen'],
	['id' => 'SZ', 'name' => 'Swaziland'],
	['id' => 'SE', 'name' => 'Sweden'],
	['id' => 'CH', 'name' => 'Switzerland'],
	['id' => 'SY', 'name' => 'Syrian Arab Republic'],
	['id' => 'TW', 'name' => 'Taiwan'],
	['id' => 'TJ', 'name' => 'Tajikistan'],
	['id' => 'TZ', 'name' => 'Tanzania'],
	['id' => 'TH', 'name' => 'Thailand'],
	['id' => 'TL', 'name' => 'Timor-Leste'],
	['id' => 'TG', 'name' => 'Togo'],
	['id' => 'TK', 'name' => 'Tokelau'],
	['id' => 'TO', 'name' => 'Tonga'],
	['id' => 'TT', 'name' => 'Trinidad And Tobago'],
	['id' => 'TN', 'name' => 'Tunisia'],
	['id' => 'TR', 'name' => 'Turkey'],
	['id' => 'TM', 'name' => 'Turkmenistan'],
	['id' => 'TC', 'name' => 'Turks And Caicos Islands'],
	['id' => 'TV', 'name' => 'Tuvalu'],
	['id' => 'UG', 'name' => 'Uganda'],
	['id' => 'UA', 'name' => 'Ukraine'],
	['id' => 'AE', 'name' => 'United Arab Emirates'],
	['id' => 'GB', 'name' => 'United Kingdom'],
	['id' => 'US', 'name' => 'United States'],
	['id' => 'UM', 'name' => 'United States Outlying Islands'],
	['id' => 'UY', 'name' => 'Uruguay'],
	['id' => 'UZ', 'name' => 'Uzbekistan'],
	['id' => 'VU', 'name' => 'Vanuatu'],
	['id' => 'VE', 'name' => 'Venezuela'],
	['id' => 'VN', 'name' => 'Viet Nam'],
	['id' => 'VG', 'name' => 'Virgin Islands, British'],
	['id' => 'VI', 'name' => 'Virgin Islands, U.S.'],
	['id' => 'WF', 'name' => 'Wallis And Futuna'],
	['id' => 'EH', 'name' => 'Western Sahara'],
	['id' => 'YE', 'name' => 'Yemen'],
	['id' => 'ZM', 'name' => 'Zambia'],
	['id' => 'ZW', 'name' => 'Zimbabwe']
];
$F6edd90960a3bd9d = 'Edit Server';
include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label578;
}

goto label577;

label126:

echo '" readonly>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label127:

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="enable_https">Enable HTTPS <i title="Allow SSL connections to this server. Ensure the certificate is valid for the domains beforehand. Reseller DNS would probably fail under these circumstances as they would not have a valid certificate." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_https" id="enable_https" type="checkbox" ';

if (!($B59d0718aa3e5332['enable_https'] == 1)) {
	goto label14;
}

echo 'checked ';
goto label14;

label135:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="enable_geoip">GeoIP Load Balancing <i title="Route connections to the nearest server based on the location of the client." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_geoip" id="enable_geoip" type="checkbox" ';

if (!($B59d0718aa3e5332['enable_geoip'] == 1)) {
	goto label142;
}

echo 'checked ';

label142:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="isp_type">GeoISP Priority</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="isp_type" id="isp_type" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label469;

label144:

$f510294f35b9e2f6[3] = '* ' . $f510294f35b9e2f6[2] . ' - Freq: ' . round($f510294f35b9e2f6[0] / 1000000, 1) . 'GHz - ' . round($f510294f35b9e2f6[1] / 1000000, 1) . 'GHz';
echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="governor">CPU Governor <i title="Change default CPU governor for all cores. Default for Ubuntu is ondemand, with performance governor giving the best theoretical results. This may take a minute or so to change." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="governor" id="governor" class="form-control select2" data-toggle="select2">' . "\n" . '                                                            <option selected value="';
echo $f510294f35b9e2f6[2];
echo '">';
echo $f510294f35b9e2f6[3];
goto label582;

label172:

include 'session.php';
include 'functions.php';

if (E6d500e19634d513()) {
	goto label180;
}

e72F42A93714Ba87();

label180:

goto label319;

label181:

echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    ';

if (!$B59d0718aa3e5332['is_main']) {
	goto label342;
}

echo '                                                    <label class="col-md-4 col-form-label" for="ip_field">Domain Names</label>' . "\n" . '                                                    ';
goto label343;
goto label342;

label189:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6" align="right">' . "\n" . '                                                    ';

label190:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp()" class="btn btn-secondary"><i class="mdi mdi-chevron-up"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown()" class="btn btn-secondary"><i class="mdi mdi-chevron-down"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-options">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="http_broadcast_ports">HTTP Ports <i title="Enter one or more port numbers between 80 and 65535." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <select name="http_broadcast_ports[]" id="http_broadcast_ports" class="form-control col-md-12 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                                            ';
if (!(is_numeric($B59d0718aa3e5332['http_broadcast_port']) && (80 <= $B59d0718aa3e5332['http_broadcast_port']) && ($B59d0718aa3e5332['http_broadcast_port'] <= 65535))) {
	goto label225;
}

echo '                                                            <option selected value="';
goto label219;

label208:

goto label233;

label209:

$ba1606e875c3cddb = true;

if (!(time() < $B1a3986a5f168faf['expiration'])) {
	goto label226;
}

$a6c312069fd40fb3 = true;
goto label226;

label219:

echo $B59d0718aa3e5332['http_broadcast_port'];
echo '">';
echo $B59d0718aa3e5332['http_broadcast_port'];
echo '</option>' . "\n" . '                                                            ';

label225:

goto label612;

label226:

$Aa9ae65659c17fca = date($f1dcaed925076e67['datetime_format'], $B1a3986a5f168faf['expiration']);

label233:

if (!(count($B9fc9942b7e52dff) == 0)) {
	goto label413;
}

$B9fc9942b7e52dff = ['eth0'];
goto label413;

label242:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                ';

if (!$B59d0718aa3e5332['is_main']) {
	goto label384;
}

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="enable_gzip">GZIP Compression <i title="Compressing server output on your main server will reduce network output significantly, but will increase CPU usage. If you have CPU to spare but your network usage is high, you should enable this." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_gzip" id="enable_gzip" type="checkbox" ';

if (!($B59d0718aa3e5332['enable_gzip'] == 1)) {
	goto label383;
}

echo 'checked ';
goto label383;

label255:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="network_guaranteed_speed">Network Speed - Mbps <i title="Port speed to consider when connecting clients." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="network_guaranteed_speed" name="network_guaranteed_speed" value="';
echo htmlspecialchars($B59d0718aa3e5332['network_guaranteed_speed']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="geoip_type">GeoIP Priority</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="geoip_type" id="geoip_type" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['high_priority' => 'High Priority', 'low_priority' => 'Low Priority', 'strict' => 'Strict'] as $A7d54b094ae83c95 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($B59d0718aa3e5332['geoip_type'] == $A7d54b094ae83c95)) {
		goto label273;
	}

	echo 'selected ';

	label273:

	echo 'value="';
	echo $A7d54b094ae83c95;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label709;

label281:

echo '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="error_log">Error Log</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <textarea style="width: 100%;" rows="10" id="error_log" class="form-control" readonly>';
echo implode("\n", $a3bf08a758c8cd26['output']);
echo '</textarea>' . "\n" . '                                                    </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label289:

goto label657;

label290:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="enabled">Enabled <i title="Utilise this server for connections and streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input ';

if (!$B59d0718aa3e5332['is_main']) {
	goto label296;
}

echo 'readonly ';

label296:

echo 'name="enabled" id="enabled" type="checkbox" ';
goto label26;

label298:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_ip">Server IP <i title="This IP will be used for internal connections as well as broadcast if no domains are allocated." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="server_ip" name="server_ip" value="';
echo htmlspecialchars($B59d0718aa3e5332['server_ip']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="private_ip">Private IP <i title="Enter a private IP to route internal traffic between load balancers through the internal network." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="private_ip" name="private_ip" value="';
echo htmlspecialchars($B59d0718aa3e5332['private_ip']);
echo '">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="total_clients">Max Clients <i title="Maximum number of simultaneous connections to allow on this server." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="total_clients" name="total_clients" value="';
goto label367;

label312:

echo $B59d0718aa3e5332['https_broadcast_port'];
echo '">';
echo $B59d0718aa3e5332['https_broadcast_port'];
echo '</option>' . "\n" . '                                                            ';

label318:

goto label47;

label319:
if (!(!isset(XUI::$rRequest['id']) || !$B59d0718aa3e5332 = $Bcf70cba56392975[XUI::$rRequest['id']])) {
	goto label334;
}

E72F42A93714BA87();

label334:

$B9fc9942b7e52dff = [];
$e23be30f5a16d035 = json_decode($B59d0718aa3e5332['watchdog_data'], true);
goto label438;

label342:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ip_field">Domains & IP\'s</label>' . "\n" . '                                                    ';

label343:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="ip_field" class="form-control" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="domain_name">&nbsp;</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="domain_name" name="domain_name[]" size=6 class="form-control" multiple="multiple">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (explode(',', $B59d0718aa3e5332['domain_name']) as $b38e11ffdc6a3abb) {
	if (!(0 < strlen($b38e11ffdc6a3abb))) {
		goto label364;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b38e11ffdc6a3abb;
	echo '">';
	echo $b38e11ffdc6a3abb;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label364:
}

goto label89;

label367:

echo htmlspecialchars($B59d0718aa3e5332['total_clients']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="timeshift_only">Timeshift Only <i title="Don\'t allow connections to this server unless they are for timeshift." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="timeshift_only" id="timeshift_only" type="checkbox" ';

if (!($B59d0718aa3e5332['timeshift_only'] == 1)) {
	goto label379;
}

echo 'checked ';

label379:

goto label290;

label380:

echo '                                                <input id="submit_server_ssl" type="button" class="btn btn-info" value="Generate SSL" />' . "\n" . '                                                ';

label381:

echo '                                                <input name="submit_server" id="submit_button" type="submit" class="btn btn-primary" value="Save" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label752;

label383:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                ';

label384:

if (!(0 < count(json_decode($B59d0718aa3e5332['governors'], true)))) {
	goto label604;
}

$f510294f35b9e2f6 = json_decode($B59d0718aa3e5332['governor'], true);
goto label144;

label403:

echo $B59d0718aa3e5332['id'];
echo '" />' . "\n" . '                            <input type="hidden" id="regenerate_ssl" name="regenerate_ssl" value="0" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#server-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#additional_ips" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-web"></i>' . "\n" . '                                            ';

if (!$B59d0718aa3e5332['is_main']) {
	goto label39;
}

echo '                                            <span class="d-none d-sm-inline">Domains</span>' . "\n" . '                                            ';
goto label40;
goto label39;

label413:

$Ba1ee0f788e9fee4 = C2B0C0f9DD458149($B59d0718aa3e5332['id']);
$b9a4826fd314adfe = false;

foreach ($Ba1ee0f788e9fee4 as $E6b9fe077cbe8aa0) {
	if (!($E6b9fe077cbe8aa0['mount'] == rtrim(STREAMS_PATH, '/'))) {
		goto label435;
	}

	$b9a4826fd314adfe = true;
	goto label437;

	label435:
}

label437:

goto label107;

label438:

$A2c009328d5d6f4f = (0 < intval($e23be30f5a16d035['cpu_cores']) ? $e23be30f5a16d035['cpu_cores'] : 16);

if (!($A2c009328d5d6f4f < 4)) {
	goto label454;
}

$A2c009328d5d6f4f = 4;

label454:

$B9fc9942b7e52dff = json_decode($B59d0718aa3e5332['interfaces'], true);
goto label739;

label461:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="random_ip">Serve Random IP / Domain</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="random_ip" id="random_ip" type="checkbox" ';

if (!($B59d0718aa3e5332['random_ip'] == 1)) {
	goto label468;
}

echo 'checked ';

label468:

goto label189;

label469:

foreach (['high_priority' => 'High Priority', 'low_priority' => 'Low Priority', 'strict' => 'Strict'] as $A7d54b094ae83c95 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($B59d0718aa3e5332['isp_type'] == $A7d54b094ae83c95)) {
		goto label480;
	}

	echo 'selected ';

	label480:

	echo 'value="';
	echo $A7d54b094ae83c95;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="isp_names">GeoISP Names <i title="Select which ISP\'s should be prioritised to this server. Enter the exact ISP name as it will have to match 100%, but case insensitive and only alphanumeric characters." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n" . '                                                        <select name="isp_names[]" id="isp_names" class="form-control select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose ...">' . "\n" . '                                                            ';
$E1226a4ab814be8e = json_decode($B59d0718aa3e5332['isp_names'], true);

foreach ($E1226a4ab814be8e as $B4a603c2a57d3acf) {
	echo '                                                            <option value="';
	echo $B4a603c2a57d3acf;
	echo '" selected="selected">';
	echo $B4a603c2a57d3acf;
	echo '</option>' . "\n" . '                                                            ';
}

goto label563;

label504:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="performance">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="php_version">PHP Version <i title="Which version of PHP 7 to use." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="php_version_num" id="php_version" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach ([
	['72', 'PHP 7.2.34'],
	['74', 'PHP 7.4.10']
] as $B46d13165b878130) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($B59d0718aa3e5332['php_version'] == $B46d13165b878130[0])) {
		goto label516;
	}

	echo 'selected ';

	label516:

	echo 'value="';
	echo $B46d13165b878130[0];
	echo '">';
	echo $B46d13165b878130[1];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="total_services">PHP Services <i title="How many PHP-FPM daemons to run on this server. You can use up to a maximum of one per core." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="total_services" id="total_services" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (range(1, $A2c009328d5d6f4f) as $be083ab4cd4f4e7e) {
	goto label534;

	label534:

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if ($B59d0718aa3e5332['total_services'] == $be083ab4cd4f4e7e) {
		goto label550;
	}

	if (!($be083ab4cd4f4e7e == 4)) {
		goto label546;
	}

	echo 'selected ';

	label546:

	goto label548;

	label548:

	goto label551;

	label550:

	echo 'selected ';

	label551:

	echo 'value="';
	goto label554;

	label554:

	echo $be083ab4cd4f4e7e;
	echo '">';
	echo $be083ab4cd4f4e7e;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
	goto label560;

	label560:
}

goto label1;

label563:

echo '                                                        </select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="enable_isp">GeoISP Load Balancing <i title="Route connections to this server based on the ISP of the client." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_isp" id="enable_isp" type="checkbox" ';

if (!($B59d0718aa3e5332['enable_isp'] == 1)) {
	goto label570;
}

echo 'checked ';

label570:

goto label504;

label571:

if (!$a6c312069fd40fb3) {
	goto label575;
}

echo '                                                <input id="submit_server_ssl" type="button" class="btn btn-info" value="Force Update SSL" />' . "\n" . '                                                ';

label575:

goto label381;

label576:

goto label380;

label577:

echo ' style="display: none;"';

label578:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Edit Server</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
goto label403;

label582:

echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (json_decode($B59d0718aa3e5332['governors'], true) as $C3e7ad56e5c3b3d2) {
	if (!($C3e7ad56e5c3b3d2 != $f510294f35b9e2f6[2])) {
		goto label601;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $C3e7ad56e5c3b3d2;
	echo '">';
	echo $C3e7ad56e5c3b3d2;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label601:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';

label604:

goto label605;

label605:

echo '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="sysctl">Custom Sysctl.conf  <i title="Write a custom sysctl.conf to the server. You can break your server by inputting incorrect values here, this is for advanced usage only. The Default template is provided for restorative and informative purposes." class="tooltip text-secondary far fa-circle"></i><br/><br/><input onClick="setDefault();" type="button" class="btn btn-light btn-xs" value="Default" /></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<textarea class="form-control" id="sysctl" name="sysctl" rows="16">';
echo $B59d0718aa3e5332['sysctl'];
echo '</textarea>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n" . '                                                <a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                    <div class="tab-pane" id="ssl-certificate">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="expiration_date">Expiration Date</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="expiration_date" value="';
echo $Aa9ae65659c17fca;
echo '" readonly>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                ';
goto label97;

label612:

foreach (explode(',', $B59d0718aa3e5332['http_ports_add']) as $e5bebfb39a19fe80) {
	if (!(is_numeric($e5bebfb39a19fe80) && (80 <= $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535))) {
		goto label637;
	}

	echo '                                                            <option selected value="';
	echo $e5bebfb39a19fe80;
	echo '">';
	echo $e5bebfb39a19fe80;
	echo '</option>' . "\n" . '                                                            ';

	label637:
}

echo '                                                        </select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n" . '                                                <div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="https_broadcast_ports">HTTPS Ports <i title="Enter one or more port numbers between 80 and 65535." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="https_broadcast_ports[]" id="https_broadcast_ports" class="form-control col-md-12 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n" . '                                                            ';
if (!(is_numeric($B59d0718aa3e5332['https_broadcast_port']) && (80 <= $B59d0718aa3e5332['https_broadcast_port']) && ($B59d0718aa3e5332['https_broadcast_port'] <= 65535))) {
	goto label318;
}

echo '                                                            <option selected value="';
goto label312;

label657:

if ($a6c312069fd40fb3) {
	goto label660;
}

echo '                                                <div class="alert alert-info mb-4" role="alert">' . "\n" . '                                                    You can use Certbot to automatically generate a valid SSL certificate for your server by clicking the Generate Certificate button below. This will instruct XUI to attempt to generate certificates for each of the domain names listed in the Domains section.<br/><br/><strong>Please save your changes before clicking the Generate button to ensure the correct domains are used.</strong>' . "\n" . '                                                </div>' . "\n" . '                                                ';

label660:

echo "\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n" . '                                            <li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n" . '                                            <li class="list-inline-item float-right">' . "\n" . '                                                ';
if (!$a6c312069fd40fb3 && (0 < count(explode(',', $B59d0718aa3e5332['domain_name'])))) {
	goto label576;
}

goto label571;

label676:

if ($b9a4826fd314adfe) {
	goto label679;
}

echo 'checked ';

label679:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                </div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="network_interface">Network Interface <i title="Which network interface to use for statistics." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="network_interface" id="network_interface" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (array_merge(['auto'], json_decode($B59d0718aa3e5332['interfaces'], true) ?: []) as $B6de2c76015b2174) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($B59d0718aa3e5332['network_interface'] == $B6de2c76015b2174)) {
		goto label701;
	}

	echo 'selected ';

	label701:

	echo 'value="';
	echo $B6de2c76015b2174;
	echo '">';
	echo $B6de2c76015b2174;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label255;

label709:

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="geoip_countries">GeoIP Countries <i title="Select which countries should be prioritised to this server." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="geoip_countries[]" id="geoip_countries" class="form-control select2 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
$E1226a4ab814be8e = json_decode($B59d0718aa3e5332['geoip_countries'], true);

foreach ($dbf6ba9f4917ae91 as $b8f81a9f6e93f6a9) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!in_array($b8f81a9f6e93f6a9['id'], $E1226a4ab814be8e)) {
		goto label729;
	}

	echo 'selected ';

	label729:

	echo 'value="';
	echo $b8f81a9f6e93f6a9['id'];
	echo '">';
	echo $b8f81a9f6e93f6a9['name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

goto label135;

label739:

$B1a3986a5f168faf = json_decode($B59d0718aa3e5332['certbot_ssl'], true);
$a6c312069fd40fb3 = false;

if ($B1a3986a5f168faf['expiration']) {
	goto label209;
}

$ba1606e875c3cddb = false;
$Aa9ae65659c17fca = 'No Certificate Installed';
goto label208;

label752:

include 'footer.php';

?>