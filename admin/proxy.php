<?php


goto label86;

label1:
if (!(!isset(XUI::$rRequest['id']) || !$B59d0718aa3e5332 = $a080f5083618911e[XUI::$rRequest['id']] || ($B59d0718aa3e5332['server_type'] != 1))) {
	goto label20;
}

E72f42A93714bA87();

label20:

$dbf6ba9f4917ae91 = [
	['id' => 'ALL', 'name' => 'All Countries'],
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
$F6edd90960a3bd9d = 'Edit Proxy';
goto label132;

label23:

echo htmlspecialchars($B59d0718aa3e5332['server_name']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_ip">Server IP <i title="This IP will be used for internal connections as well as broadcast if no domains are allocated." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="server_ip" name="server_ip" value="';
echo htmlspecialchars($B59d0718aa3e5332['server_ip']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="total_clients">Max Clients <i title="Maximum number of simultaneous connections to allow on this server." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="total_clients" name="total_clients" value="';
echo htmlspecialchars($B59d0718aa3e5332['total_clients']);
goto label150;

label41:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6" align="right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<li class="list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveUp()" class="btn btn-secondary"><i class="mdi mdi-chevron-up"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" onClick="MoveDown()" class="btn btn-secondary"><i class="mdi mdi-chevron-down"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0)" id="remove_ip" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-close"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="advanced-options">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="http_broadcast_port">HTTP Port <i title="Modifying this will not change the port on the proxy end, you would need to do this manually." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n" . '                                                        <input type="text" class="form-control text-center" id="http_broadcast_port" name="http_broadcast_port" value="';
echo htmlspecialchars($B59d0718aa3e5332['http_broadcast_port']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="https_broadcast_port">HTTPS Ports <i title="Modifying this will not change the port on the proxy end, you would need to do this manually." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="https_broadcast_port" name="https_broadcast_port" value="';
echo htmlspecialchars($B59d0718aa3e5332['https_broadcast_port']);
goto label159;

label54:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="enable_geoip">GeoIP Load Balancing <i title="Route connections to the nearest server based on the location of the client." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_geoip" id="enable_geoip" type="checkbox" ';

if (!($B59d0718aa3e5332['enable_geoip'] == 1)) {
	goto label61;
}

echo 'checked ';

label61:

goto label173;

label62:

foreach ($dbf6ba9f4917ae91 as $b8f81a9f6e93f6a9) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!in_array($b8f81a9f6e93f6a9['id'], $E1226a4ab814be8e)) {
		goto label75;
	}

	echo 'selected ';

	label75:

	echo 'value="';
	echo $b8f81a9f6e93f6a9['id'];
	echo '">';
	echo $b8f81a9f6e93f6a9['name'];
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="prevb list-inline-item">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Previous</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n" . '                                                <input name="submit_server" id="submit_button" type="submit" class="btn btn-primary" value="Save" />' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t" . '</form>' . "\n\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t" . '</div> ' . "\n\t\t\t" . '</div> ' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</div>' . "\n";
goto label200;

label86:

include 'session.php';
include 'functions.php';

if (e6D500E19634d513()) {
	goto label94;
}

E72F42A93714Ba87();

label94:

goto label1;

label95:

foreach (explode(',', $B59d0718aa3e5332['domain_name']) as $b38e11ffdc6a3abb) {
	if (!(0 < strlen($b38e11ffdc6a3abb))) {
		goto label115;
	}

	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option value="';
	echo $b38e11ffdc6a3abb;
	echo '">';
	echo $b38e11ffdc6a3abb;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

	label115:
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="random_ip">Serve Random IP / Domain</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="random_ip" id="random_ip" type="checkbox" ';

if (!($B59d0718aa3e5332['random_ip'] == 1)) {
	goto label41;
}

echo 'checked ';
goto label41;

label125:

echo '>' . "\n" . '    <div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t" . '<div class="page-title-box">' . "\n\t\t\t\t\t" . '<div class="page-title-right">' . "\n" . '                        ';
include 'topbar.php';
echo "\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t" . '<h4 class="page-title">Edit Proxy</h4>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</div>' . "\n\t\t" . '</div>     ' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-xl-12">' . "\n\t\t\t\t" . '<div class="card">' . "\n\t\t\t\t\t" . '<div class="card-body">' . "\n\t\t\t\t\t\t" . '<form action="#" method="POST" data-parsley-validate="">' . "\n\t\t\t\t\t\t\t" . '<input type="hidden" name="edit" value="';
echo $B59d0718aa3e5332['id'];
echo '" />' . "\n\t\t\t\t\t\t\t" . '<div id="basicwizard">' . "\n\t\t\t\t\t\t\t\t" . '<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#server-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> ' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-account-card-details-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Details</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#additional_ips" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-web"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Domains & IP\'s</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t" . '<li class="nav-item">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<a href="#advanced-options" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<i class="mdi mdi-folder-alert-outline mr-1"></i>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<span class="d-none d-sm-inline">Advanced</span>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t" . '<div class="tab-content b-0 mb-0 pt-0">' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="server-details">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="server_name">Server Name</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control" id="server_name" name="server_name" value="';
goto label23;

label132:

include 'header.php';
echo '<div class="wrapper boxed-layout"';
if (!(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'))) {
	goto label149;
}

echo ' style="display: none;"';

label149:

goto label125;

label150:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="enabled">Enabled <i title="Utilise this server for connections and streams." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enabled" id="enabled" type="checkbox" ';

if (!($B59d0718aa3e5332['enabled'] == 1)) {
	goto label157;
}

echo 'checked ';

label157:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '</div> ' . "\n\t\t\t\t\t\t\t\t\t\t" . '<ul class="list-inline wizard mb-0">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<li class="nextb list-inline-item float-right">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript: void(0);" class="btn btn-secondary">Next</a>' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '</li>' . "\n\t\t\t\t\t\t\t\t\t\t" . '</ul>' . "\n\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t" . '<div class="tab-pane" id="additional_ips">' . "\n\t\t\t\t\t\t\t\t\t\t" . '<div class="row">' . "\n\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-12">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="alert alert-info alert-dismissible fade show" role="alert">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<span aria-hidden="true">&times;</span>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</button>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . 'By default, clients will be directed to the Server IP on the Details tab. You can add IP\'s or Domain Names here to force clients to be directed to those instead. If random IP / domain is selected, each client will be directed to a random entry in the list, otherwise the first entry in the list will be used to serve content.' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="ip_field">Domains & IP\'s</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8 input-group">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" id="ip_field" class="form-control" value="">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="input-group-append">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<a href="javascript:void(0)" id="add_ip" class="btn btn-primary waves-effect waves-light"><i class="mdi mdi-plus"></i></a>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="domain_name">&nbsp;</label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select id="domain_name" name="domain_name[]" size=6 class="form-control" multiple="multiple">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
goto label95;

label159:

echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="network_guaranteed_speed">Network Speed - Mbps <i title="Port speed to consider when connecting clients." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input type="text" class="form-control text-center" id="network_guaranteed_speed" name="network_guaranteed_speed" value="';
echo htmlspecialchars($B59d0718aa3e5332['network_guaranteed_speed']);
echo '" required data-parsley-trigger="change">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n" . '                                                    <label class="col-md-4 col-form-label" for="enable_https">Enable SSL <i title="Allow HTTPS connections. You will have to configure this on the server manually." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<input name="enable_https" id="enable_https" type="checkbox" ';

if (!($B59d0718aa3e5332['enable_https'] == 1)) {
	goto label54;
}

echo 'checked ';
goto label54;

label173:

echo 'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-6">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="geoip_type" id="geoip_type" class="form-control select2" data-toggle="select2">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";

foreach (['high_priority' => 'High Priority', 'low_priority' => 'Low Priority', 'strict' => 'Strict'] as $A7d54b094ae83c95 => $fb173e63c96d4021) {
	echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<option ';

	if (!($B59d0718aa3e5332['geoip_type'] == $A7d54b094ae83c95)) {
		goto label185;
	}

	echo 'selected ';

	label185:

	echo 'value="';
	echo $A7d54b094ae83c95;
	echo '">';
	echo $fb173e63c96d4021;
	echo '</option>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
}

echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</select>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="form-group row mb-4">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<label class="col-md-4 col-form-label" for="geoip_countries">GeoIP Countries <i title="Select which countries should be prioritised to this server." class="tooltip text-secondary far fa-circle"></i></label>' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<div class="col-md-8">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t" . '<select name="geoip_countries[]" id="geoip_countries" class="form-control select2 select2-multiple" data-toggle="select2" multiple="multiple" data-placeholder="Choose...">' . "\n\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
$E1226a4ab814be8e = json_decode($B59d0718aa3e5332['geoip_countries'], true);
goto label62;

label200:

include 'footer.php';

?>