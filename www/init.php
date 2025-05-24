<?php


goto label1;

label1:

require_once 'constants.php';
require_once INCLUDES_PATH . 'xui.php';
require_once INCLUDES_PATH . 'pdo.php';

if (!function_exists('getallheaders')) {
	function getallheaders()
	{
		$df59d69b3ccd0f39 = [];

		foreach ($_SERVER as $b7319702635da556 => $ce0840c647e1bbc7) {
			if (!(substr($b7319702635da556, 0, 5) == 'HTTP_')) {
				goto label37;
			}

			$df59d69b3ccd0f39[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($b7319702635da556, 5)))))] = $ce0840c647e1bbc7;

			label37:
		}

		return $df59d69b3ccd0f39;
	}
}

if (!(basename(__FILE__) == basename($_SERVER['SCRIPT_FILENAME']))) {
	goto label29;
}

goto label27;

label27:

f82199EFf9017bC9();

label29:

$F48d5724f3b4ec96 = strtolower(basename(get_included_files()[0], '.php'));
if (!in_array($F48d5724f3b4ec96, ['enigma2', 'epg', 'playlist', 'api', 'xplugin', 'live', 'proxy_api', 'thumb', 'timeshift', 'vod']) || @$argc) {
	goto label74;
}

$b62d6460eb33ea07 = new Database(NULL);
goto label58;

label58:

XUI::$db = &$b62d6460eb33ea07;
XUI::init(true);

if (XUI::$rCached) {
	goto label73;
}

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
goto label73;

label73:

goto label84;

label74:

$b62d6460eb33ea07 = new Database('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');
XUI::$db = &$b62d6460eb33ea07;
goto label81;

label81:

XUI::init();
goto label84;

label84:

?>