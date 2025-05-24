<?php


class APIWrapper
{
	static public $db;
	static public $rKey;

	static public function filterRow($ba2d146bb5a55097, $C17543903e9aa6ae, $c733678227713664, $B05582e97914c7eb = false)
	{
		goto label9;

		label5:

		goto label7;

		label6:

		$Fb9da1713bff19ce = $ba2d146bb5a55097;

		label7:

		$B9869413eae86beb = [];
		goto label22;

		label9:
		if (!(!$C17543903e9aa6ae && !$c733678227713664)) {
			goto label17;
		}

		return $ba2d146bb5a55097;

		label17:

		if ($B05582e97914c7eb) {
			goto label6;
		}

		$Fb9da1713bff19ce = $ba2d146bb5a55097['data'];
		goto label5;

		label22:

		if (!$Fb9da1713bff19ce) {
			goto label70;
		}

		foreach (array_keys($Fb9da1713bff19ce) as $Bb672d1983256a93) {
			goto label32;

			label32:

			if ($C17543903e9aa6ae) {
				goto label53;
			}

			if (!$c733678227713664) {
				goto label51;
			}

			if (in_array($Bb672d1983256a93, $c733678227713664)) {
				goto label49;
			}

			$B9869413eae86beb[$Bb672d1983256a93] = $Fb9da1713bff19ce[$Bb672d1983256a93];

			label49:

			goto label51;

			label51:

			goto label66;

			label53:

			if (!in_array($Bb672d1983256a93, $C17543903e9aa6ae)) {
				goto label66;
			}

			$B9869413eae86beb[$Bb672d1983256a93] = $Fb9da1713bff19ce[$Bb672d1983256a93];
			goto label66;

			label66:

			goto label68;

			label68:
		}

		label70:

		if ($B05582e97914c7eb) {
			goto label78;
		}

		goto label74;

		label73:

		goto label80;

		label74:

		$ba2d146bb5a55097['data'] = $B9869413eae86beb;
		return $ba2d146bb5a55097;
		goto label73;

		label78:

		return $B9869413eae86beb;
		goto label73;

		label80:
	}

	static public function filterRows($D8e7681dfae2905b, $C17543903e9aa6ae, $c733678227713664)
	{
		$B9869413eae86beb = [];

		if (!$D8e7681dfae2905b['data']) {
			goto label21;
		}

		foreach ($D8e7681dfae2905b['data'] as $Fb9da1713bff19ce) {
			$B9869413eae86beb[] = self::filterRow($Fb9da1713bff19ce, $C17543903e9aa6ae, $c733678227713664, true);
		}

		label21:

		return $B9869413eae86beb;
	}

	static public function TableAPI($Abcb228699a7f743, $bcfd61adc96d4b72 = 0, $Cc2b5dfe75dc164b = 10, $ba2d146bb5a55097 = [], $A4b9c81b159799b9 = [], $b0d7495c47b0a0bc = [])
	{
		goto label27;

		label7:

		$ba2d146bb5a55097['show_columns'] = $A4b9c81b159799b9;
		$ba2d146bb5a55097['hide_columns'] = $b0d7495c47b0a0bc;
		$ab701fbbd66214d9 = curl_init();
		curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $F5a5942f97f5cf47);
		curl_setopt($ab701fbbd66214d9, CURLOPT_POST, 1);
		goto label55;

		label27:

		$F5a5942f97f5cf47 = 'http://127.0.0.1:' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/' . trim(dirname($_SERVER['PHP_SELF']), '/') . '/table.php';
		$ba2d146bb5a55097['api_key'] = self::$rKey;
		$ba2d146bb5a55097['id'] = $Abcb228699a7f743;
		$ba2d146bb5a55097['start'] = $bcfd61adc96d4b72;
		$ba2d146bb5a55097['length'] = $Cc2b5dfe75dc164b;
		goto label7;

		label55:

		curl_setopt($ab701fbbd66214d9, CURLOPT_POSTFIELDS, http_build_query($ba2d146bb5a55097));
		curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ab701fbbd66214d9, CURLOPT_HTTPHEADER, ['X-Requested-With: xmlhttprequest']);
		$B9869413eae86beb = json_decode(curl_exec($ab701fbbd66214d9), true);
		curl_close($ab701fbbd66214d9);
		goto label88;

		label88:

		return $B9869413eae86beb;
		goto label90;

		label90:
	}

	static public function createSession()
	{
		goto label8;

		label1:

		date_default_timezone_set($E59d0debc75e7be8['timezone']);

		label5:

		return true;

		label6:

		return false;
		goto label56;

		label8:

		global $E59d0debc75e7be8;
		global $db0a61ef32b89a27;
		self::$db->query('SELECT * FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `api_key` = ? AND LENGTH(`api_key`) > 0 AND `is_admin` = 1 AND `status` = 1;', self::$rKey);

		if (!(0 < self::$db->num_rows())) {
			goto label6;
		}

		API::$db = &self::$db;
		API::init(self::$db->get_row()['id']);
		goto label36;

		label36:

		unset(API::$rUserInfo['password']);
		$E59d0debc75e7be8 = API::$rUserInfo;
		$db0a61ef32b89a27 = ACeb5cFE4194F4F0($E59d0debc75e7be8['member_group_id']);
		$db0a61ef32b89a27['advanced'] = [];

		if (!(0 < strlen($E59d0debc75e7be8['timezone']))) {
			goto label5;
		}

		goto label1;

		label56:
	}

	static public function Cc988751EeBBF271()
	{
		global $E59d0debc75e7be8;
		global $db0a61ef32b89a27;
		return ['status' => 'STATUS_SUCCESS', 'data' => $E59d0debc75e7be8, 'permissions' => $db0a61ef32b89a27];
	}

	static public function getLine($Abcb228699a7f743)
	{
		if (!($F5ba2106d5227309 = b5aD1d95a92ce732($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $F5ba2106d5227309];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createLine($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::FCCaa0f750Efa5b7($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getLine($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editLine($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		goto label3;

		label3:
		if (!(($F5ba2106d5227309 = self::getLine($Abcb228699a7f743)) && isset($F5ba2106d5227309['data']))) {
			goto label22;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;

		if (!isset($ba2d146bb5a55097['isp_clear'])) {
			goto label21;
		}

		$ba2d146bb5a55097['isp_clear'] = '';

		label21:

		goto label24;

		label22:

		return ['status' => 'STATUS_FAILURE'];
		goto label46;

		label24:

		$B9869413eae86beb = parseerror(API::FccAA0F750EfA5B7($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label44;
		}

		$B9869413eae86beb['data'] = self::getLine($B9869413eae86beb['data']['insert_id'])['data'];

		label44:

		return $B9869413eae86beb;
		goto label22;

		label46:
	}

	static public function Ca81C8f24C099495($Abcb228699a7f743)
	{
		if (!(($F5ba2106d5227309 = self::getLine($Abcb228699a7f743)) && isset($F5ba2106d5227309['data']))) {
			goto label18;
		}

		if (!c24b1B1fDaD37C5E($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function disableLine($Abcb228699a7f743)
	{
		if (!(($F5ba2106d5227309 = self::getLine($Abcb228699a7f743)) && isset($F5ba2106d5227309['data']))) {
			goto label17;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function enableLine($Abcb228699a7f743)
	{
		if (!(($F5ba2106d5227309 = self::getLine($Abcb228699a7f743)) && isset($F5ba2106d5227309['data']))) {
			goto label17;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function banLine($Abcb228699a7f743)
	{
		if (!(($F5ba2106d5227309 = self::getLine($Abcb228699a7f743)) && isset($F5ba2106d5227309['data']))) {
			goto label17;
		}

		self::$db->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function unbanLine($Abcb228699a7f743)
	{
		if (!(($F5ba2106d5227309 = self::getLine($Abcb228699a7f743)) && isset($F5ba2106d5227309['data']))) {
			goto label17;
		}

		self::$db->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function B349523eCB058D86($Abcb228699a7f743)
	{
		if (!($Caf4325605347834 = BA89228Dc958cE05($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $Caf4325605347834];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createUser($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::d3824406Bc4f2a23($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::b349523ecB058d86($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editUser($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($Caf4325605347834 = self::b349523ECb058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::d3824406BC4f2A23($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::B349523ecb058D86($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function D8C5152Aaa448bdD($Abcb228699a7f743)
	{
		if (!(($Caf4325605347834 = self::b349523EcB058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label18;
		}

		if (!C05365dcB6D79618($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function disableUser($Abcb228699a7f743)
	{
		if (!(($Caf4325605347834 = self::B349523eCb058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label17;
		}

		self::$db->query('UPDATE `users` SET `status` = 0 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function enableUser($Abcb228699a7f743)
	{
		if (!(($Caf4325605347834 = self::b349523ECB058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label17;
		}

		self::$db->query('UPDATE `users` SET `status` = 1 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function D6BCc99e8baFA737($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = A32D85aEfA28959D($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $c050a23c479bc67e];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createMAG($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::B087c00f20554A9B($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::d6bcC99e8Bafa737($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editMAG($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		goto label3;

		label3:
		if (!(($c050a23c479bc67e = self::D6BcC99E8baFa737($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label22;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;

		if (!isset($ba2d146bb5a55097['isp_clear'])) {
			goto label21;
		}

		$ba2d146bb5a55097['isp_clear'] = '';

		label21:

		goto label24;

		label22:

		return ['status' => 'STATUS_FAILURE'];
		goto label46;

		label24:

		$B9869413eae86beb = parseerror(API::b087c00F20554a9B($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label44;
		}

		$B9869413eae86beb['data'] = self::D6bcC99e8bAFa737($B9869413eae86beb['data']['insert_id'])['data'];

		label44:

		return $B9869413eae86beb;
		goto label22;

		label46:
	}

	static public function B3e7cdF7aC99ab57($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::D6BCc99E8baFa737($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		if (!dd81518D00A2DD90($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function disableMAG($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::D6BcC99e8BAfa737($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function enableMAG($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::d6BcC99e8bAfA737($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function banMAG($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::d6BCC99e8bAfa737($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		self::$db->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function unbanMAG($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::D6BCC99e8BaFa737($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		self::$db->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function convertMAG($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::D6BCC99e8bafA737($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label24;
		}

		dd81518D00A2DD90($Abcb228699a7f743, false, false, true);
		return ['status' => 'STATUS_SUCCESS', 'data' => self::getLine($c050a23c479bc67e['user_id'])];

		label24:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function aB9dD80290F141De($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = Ef70A93e98Fb7ce9($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $c050a23c479bc67e];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createEnigma($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::f5D44bE8B59f4E62($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::D6BcC99e8baFA737($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editEnigma($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		goto label25;

		label3:

		$B9869413eae86beb = parseerror(API::F5D44be8B59F4E62($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label23;
		}

		$B9869413eae86beb['data'] = self::d6bcc99e8bafa737($B9869413eae86beb['data']['insert_id'])['data'];

		label23:

		return $B9869413eae86beb;
		goto label44;

		label25:
		if (!(($c050a23c479bc67e = self::AB9DD80290f141dE($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label44;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;

		if (!isset($ba2d146bb5a55097['isp_clear'])) {
			goto label43;
		}

		$ba2d146bb5a55097['isp_clear'] = '';

		label43:

		goto label3;

		label44:

		return ['status' => 'STATUS_FAILURE'];
		goto label46;

		label46:
	}

	static public function Ad38E07A7561ACF3($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::AB9DD80290f141DE($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		if (!A486863E198221Fa($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function disableEnigma($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::ab9DD80290f141de($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function enableEnigma($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::ab9Dd80290f141dE($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function banEnigma($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::Ab9Dd80290f141DE($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		self::$db->query('UPDATE `lines` SET `admin_enabled` = 0 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function unbanEnigma($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::ab9DD80290f141De($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label18;
		}

		self::$db->query('UPDATE `lines` SET `admin_enabled` = 1 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function convertEnigma($Abcb228699a7f743)
	{
		if (!(($c050a23c479bc67e = self::ab9DD80290f141dE($Abcb228699a7f743)) && isset($c050a23c479bc67e['data']))) {
			goto label24;
		}

		a486863E198221fa($Abcb228699a7f743, false, false, true);
		return ['status' => 'STATUS_SUCCESS', 'data' => self::getLine($c050a23c479bc67e['user_id'])];

		label24:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function DE27Bb48f7bFF12d()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => f964b9222b35AdDD()];
	}

	static public function a64Ba92a18B425ED($Abcb228699a7f743)
	{
		if (!($f155fef57262b32a = B47Fb5320E43f112($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $f155fef57262b32a];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createBouquet($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::F987238750272AAc($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::A64BA92a18b425Ed($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editBouquet($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($f155fef57262b32a = self::A64BA92a18B425eD($Abcb228699a7f743)) && isset($f155fef57262b32a['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::F987238750272AAC($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::a64ba92a18b425eD($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function cF129337b2b64858($Abcb228699a7f743)
	{
		if (!(($f155fef57262b32a = self::a64bA92A18B425ed($Abcb228699a7f743)) && isset($f155fef57262b32a['data']))) {
			goto label18;
		}

		if (!aE08cDA9F888114F($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getAccessCodes()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => eFAdb87d8C867176()];
	}

	static public function getAccessCode($Abcb228699a7f743)
	{
		if (!($E28b12c74d51f0b0 = EACE9b35c7c59E8a($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $E28b12c74d51f0b0];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createAccessCode($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::E791fbD5e55B2260($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getAccessCode($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editAccessCode($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($E28b12c74d51f0b0 = self::getAccessCode($Abcb228699a7f743)) && isset($E28b12c74d51f0b0['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::E791fbd5e55b2260($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getAccessCode($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function deleteAccessCode($Abcb228699a7f743)
	{
		if (!(($E28b12c74d51f0b0 = self::getAccessCode($Abcb228699a7f743)) && isset($E28b12c74d51f0b0['data']))) {
			goto label18;
		}

		if (!BAe6B79F4A41Ee46($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getHMACs()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => Ab3a786B762a1806()];
	}

	static public function getHMAC($Abcb228699a7f743)
	{
		if (!($B259c62825689c1b = FA460aBDD5DCA199($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $B259c62825689c1b];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createHMAC($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::e3784BF595659221($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getHMAC($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editHMAC($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($B259c62825689c1b = self::getHMAC($Abcb228699a7f743)) && isset($B259c62825689c1b['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::E3784Bf595659221($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getHMAC($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function DDA4d03970E2cA94($Abcb228699a7f743)
	{
		if (!(($B259c62825689c1b = self::getHMAC($Abcb228699a7f743)) && isset($B259c62825689c1b['data']))) {
			goto label18;
		}

		if (!eB09D3583Fd7e3d6($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function E2cAb4ace32264BB()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => C8E66f17258aC811()];
	}

	static public function getEPG($Abcb228699a7f743)
	{
		if (!($a2ebb817d88c810b = getEPG($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $a2ebb817d88c810b];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createEPG($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::DD2CeDE3d30CE0DF($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getEPG($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editEPG($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($a2ebb817d88c810b = self::getEPG($Abcb228699a7f743)) && isset($a2ebb817d88c810b['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::dd2Cede3d30cE0DF($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getEPG($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function A9c0D3A737017A30($Abcb228699a7f743)
	{
		if (!(($a2ebb817d88c810b = self::getEPG($Abcb228699a7f743)) && isset($a2ebb817d88c810b['data']))) {
			goto label18;
		}

		if (!d7eAe25709B24003($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function reloadEPG($Abcb228699a7f743 = NULL)
	{
		if ($Abcb228699a7f743) {
			goto label12;
		}

		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'epg.php > /dev/null 2>/dev/null &');
		goto label25;

		label12:

		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'epg.php "' . intval($Abcb228699a7f743) . '" > /dev/null 2>/dev/null &');

		label25:

		return ['status' => 'STATUS_SUCCESS'];
	}

	static public function getProviders()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => getStreamProviders()];
	}

	static public function getProvider($Abcb228699a7f743)
	{
		if (!($A2ff75fed18f4512 = getStreamProvider($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $A2ff75fed18f4512];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createProvider($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::processProvider($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getProvider($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editProvider($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($A2ff75fed18f4512 = self::getProvider($Abcb228699a7f743)) && isset($A2ff75fed18f4512['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::processProvider($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getProvider($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function deleteProvider($Abcb228699a7f743)
	{
		if (!(($A2ff75fed18f4512 = self::getProvider($Abcb228699a7f743)) && isset($A2ff75fed18f4512['data']))) {
			goto label18;
		}

		if (!deleteProvider($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function reloadProvider($Abcb228699a7f743 = NULL)
	{
		if ($Abcb228699a7f743) {
			goto label12;
		}

		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'providers.php > /dev/null 2>/dev/null &');
		goto label25;

		label12:

		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'providers.php "' . intval($Abcb228699a7f743) . '" > /dev/null 2>/dev/null &');

		label25:

		return ['status' => 'STATUS_SUCCESS'];
	}

	static public function getGroups()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => aD052A625C6AC011()];
	}

	static public function getGroup($Abcb228699a7f743)
	{
		if (!($fb719dae9595b9fa = a752238C4005cbBC($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $fb719dae9595b9fa];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createGroup($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::bC0C0df5663423b9($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getGroup($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editGroup($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($fb719dae9595b9fa = self::getGroup($Abcb228699a7f743)) && isset($fb719dae9595b9fa['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::Bc0c0dF5663423b9($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getGroup($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function BE56e3Da8aED7f8b($Abcb228699a7f743)
	{
		if (!(($fb719dae9595b9fa = self::getGroup($Abcb228699a7f743)) && isset($fb719dae9595b9fa['data']))) {
			goto label18;
		}

		if (!b23579Cde727d32f($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function d117e45424fE8F00()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => D8c8284136938Ef0()];
	}

	static public function fF68F9EFd227763f($Abcb228699a7f743)
	{
		if (!($cc386f9ba082650e = fddF8DA6Ab3fE47B($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $cc386f9ba082650e];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createPackage($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::cD3092ad83523301($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::ff68f9eFd227763F($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editPackage($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($cc386f9ba082650e = self::Ff68F9efd227763F($Abcb228699a7f743)) && isset($cc386f9ba082650e['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::cD3092aD83523301($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::ff68F9EfD227763F($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function eFc1502D889C4091($Abcb228699a7f743)
	{
		if (!(($cc386f9ba082650e = self::ff68f9EFD227763f($Abcb228699a7f743)) && isset($cc386f9ba082650e['data']))) {
			goto label18;
		}

		if (!EB37711A9250A829($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function b8b821Fd5B9528D4()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => f93e9343c3d7fd99()];
	}

	static public function a9Dc9Bb8f74d8E4d($Abcb228699a7f743)
	{
		if (!($b376970f4d4df746 = B11216Ab01AAa78c($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $b376970f4d4df746];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createTranscodeProfile($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::cD25CC90161d1a86($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::a9Dc9BB8f74D8e4d($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editTranscodeProfile($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($b376970f4d4df746 = self::a9dC9BB8F74d8E4D($Abcb228699a7f743)) && isset($b376970f4d4df746['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::Cd25cC90161d1A86($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::a9dC9bB8F74D8e4d($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function deleteTranscodeProfile($Abcb228699a7f743)
	{
		if (!(($b376970f4d4df746 = self::a9DC9Bb8f74d8e4D($Abcb228699a7f743)) && isset($b376970f4d4df746['data']))) {
			goto label18;
		}

		if (!e6397083b98CA4b5($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function B5943F8605Dac186()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => d5De20Bca4dd43Ab()];
	}

	static public function f6e1A36D39166281($Abcb228699a7f743)
	{
		if (!($b38e11ffdc6a3abb = Dd77C27786C11AaD($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $b38e11ffdc6a3abb];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function addRTMPIP($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::fa73216009424093($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::f6E1A36D39166281($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editRTMPIP($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($b38e11ffdc6a3abb = self::F6E1A36D39166281($Abcb228699a7f743)) && isset($b38e11ffdc6a3abb['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::FA73216009424093($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::f6E1a36d39166281($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function c6886fc2197a448c($Abcb228699a7f743)
	{
		if (!(($b38e11ffdc6a3abb = self::F6E1a36D39166281($Abcb228699a7f743)) && isset($b38e11ffdc6a3abb['data']))) {
			goto label18;
		}

		if (!F2476161e17B4Aa7($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function c721BD954a5F072F()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => f769E3F0C739d1A6()];
	}

	static public function A5611693E0A4Ea89($Abcb228699a7f743)
	{
		if (!($Dbcac322b4274e46 = D1132f737572929c($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $Dbcac322b4274e46];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createCategory($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::Ef92c3EBB0E25473($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::a5611693E0a4Ea89($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editCategory($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($Dbcac322b4274e46 = self::a5611693E0a4ea89($Abcb228699a7f743)) && isset($Dbcac322b4274e46['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::EF92C3eBb0e25473($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::A5611693e0A4ea89($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function B293e956aFb2b06B($Abcb228699a7f743)
	{
		if (!(($Dbcac322b4274e46 = self::a5611693E0a4EA89($Abcb228699a7f743)) && isset($Dbcac322b4274e46['data']))) {
			goto label18;
		}

		if (!D30222255BCfe230($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function b44e34D9Ba4FB8c4()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => dFfCdAFe3A02352C()];
	}

	static public function C3A279725b215929($Abcb228699a7f743)
	{
		if (!($E2461a25530fd8a2 = D8Ec9843fc5457Df($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $E2461a25530fd8a2];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createWatchFolder($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::F2a688c54caF9C4a($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::C3a279725b215929($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editWatchFolder($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($E2461a25530fd8a2 = self::c3A279725b215929($Abcb228699a7f743)) && isset($E2461a25530fd8a2['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::F2A688c54CAf9c4A($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::C3A279725b215929($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function A82FF612fe0312c0($Abcb228699a7f743)
	{
		if (!(($E2461a25530fd8a2 = self::c3a279725b215929($Abcb228699a7f743)) && isset($E2461a25530fd8a2['data']))) {
			goto label18;
		}

		if (!ed770984CfB04dfa($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function reloadWatchFolder($C082ca9ed03f473c, $Abcb228699a7f743)
	{
		forceWatch($C082ca9ed03f473c, $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];
	}

	static public function getBlockedISPs()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => E87AdE454d6C69d1()];
	}

	static public function addBlockedISP($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::da7dc6613EDb583d($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label22;
		}

		$B9869413eae86beb['data'] = $B9869413eae86beb['data']['insert_id'];

		label22:

		return $B9869413eae86beb;
	}

	static public function F8A610043421B14e($Abcb228699a7f743)
	{
		if (!eBa75CeCad9d3196($Abcb228699a7f743)) {
			goto label8;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label8:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getBlockedUAs()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => eAC02e498611cE84()];
	}

	static public function addBlockedUA($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::d73A37B0D9b54604($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label22;
		}

		$B9869413eae86beb['data'] = $B9869413eae86beb['data']['insert_id'];

		label22:

		return $B9869413eae86beb;
	}

	static public function b40EC96654C66F48($Abcb228699a7f743)
	{
		if (!Ab10108Edd7cE309($Abcb228699a7f743)) {
			goto label8;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label8:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function ab69ecd4D7705061()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => dC088f5Bec67CE39()];
	}

	static public function addBlockedIP($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::f7e2383F47283cB7($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label22;
		}

		$B9869413eae86beb['data'] = $B9869413eae86beb['data']['insert_id'];

		label22:

		return $B9869413eae86beb;
	}

	static public function C7Ef58C0F7acDB05($Abcb228699a7f743)
	{
		if (!c43C3cE5c5838f3D($Abcb228699a7f743)) {
			goto label8;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label8:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function flushBlockedIPs()
	{
		A0C5c8DE2109DD97();
		return ['status' => 'STATUS_SUCCESS'];
	}

	static public function cB6Ee16e86F09E61($Abcb228699a7f743)
	{
		if (!(($fe93a43f53d92a4e = F260B7a31f021e39($Abcb228699a7f743)) && ($fe93a43f53d92a4e['type'] == 1))) {
			goto label15;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $fe93a43f53d92a4e];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createStream($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::C880AaAF942BB5ee($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::Cb6ee16E86f09E61($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editStream($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($fe93a43f53d92a4e = self::Cb6ee16E86f09e61($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::c880AaaF942BB5eE($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::cB6Ee16e86F09E61($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function e7f8e8ECC8B6667b($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if (!(($fe93a43f53d92a4e = self::CB6ee16E86F09e61($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label20;
		}

		if (!fC84E25737908Cb5($Abcb228699a7f743, $C082ca9ed03f473c)) {
			goto label20;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label20:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function ffa26438E002C2B7($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if ($C082ca9ed03f473c == -1) {
			goto label19;
		}

		$ba2d146bb5a55097 = json_decode(a730C6DE034BA241($C082ca9ed03f473c, [
			'action'     => 'stream',
			'stream_ids' => [$Abcb228699a7f743],
			'function'   => 'start'
		]), true);
		goto label36;

		label19:

		$ba2d146bb5a55097 = json_decode(d5612f049a8056a5([
			'action'     => 'stream',
			'sub'        => 'start',
			'stream_ids' => [$Abcb228699a7f743],
			'servers'    => array_keys(XUI::$rServers)
		]), true);

		label36:

		if (!$ba2d146bb5a55097['result']) {
			goto label41;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label41:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function Ee173b194544b3a2($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if ($C082ca9ed03f473c == -1) {
			goto label19;
		}

		$ba2d146bb5a55097 = json_decode(A730C6DE034ba241($C082ca9ed03f473c, [
			'action'     => 'stream',
			'stream_ids' => [$Abcb228699a7f743],
			'function'   => 'stop'
		]), true);
		goto label36;

		label19:

		$ba2d146bb5a55097 = json_decode(D5612F049A8056A5([
			'action'     => 'stream',
			'sub'        => 'stop',
			'stream_ids' => [$Abcb228699a7f743],
			'servers'    => array_keys(XUI::$rServers)
		]), true);

		label36:

		if (!$ba2d146bb5a55097['result']) {
			goto label41;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label41:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getChannel($Abcb228699a7f743)
	{
		if (!(($fe93a43f53d92a4e = F260b7a31F021e39($Abcb228699a7f743)) && ($fe93a43f53d92a4e['type'] == 3))) {
			goto label15;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $fe93a43f53d92a4e];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function c8Ef91e4040ddd07($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::f1C265189a2dc086($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getChannel($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editChannel($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($fe93a43f53d92a4e = self::getChannel($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::F1C265189a2dc086($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getChannel($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function deleteChannel($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if (!(($fe93a43f53d92a4e = self::getChannel($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label20;
		}

		if (!FC84e25737908cB5($Abcb228699a7f743, $C082ca9ed03f473c)) {
			goto label20;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label20:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getStation($Abcb228699a7f743)
	{
		if (!(($fe93a43f53d92a4e = F260B7a31f021E39($Abcb228699a7f743)) && ($fe93a43f53d92a4e['type'] == 4))) {
			goto label15;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $fe93a43f53d92a4e];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createStation($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::e584387c6f494C28($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getStation($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editStation($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($fe93a43f53d92a4e = self::getStation($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::E584387C6f494c28($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getStation($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function deleteStation($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if (!(($fe93a43f53d92a4e = self::getStation($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label20;
		}

		if (!FC84E25737908CB5($Abcb228699a7f743, $C082ca9ed03f473c)) {
			goto label20;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label20:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getMovie($Abcb228699a7f743)
	{
		if (!(($fe93a43f53d92a4e = f260b7a31F021e39($Abcb228699a7f743)) && ($fe93a43f53d92a4e['type'] == 2))) {
			goto label15;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $fe93a43f53d92a4e];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createMovie($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::bb0bf26077F756b6($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getMovie($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editMovie($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($fe93a43f53d92a4e = self::getMovie($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::Bb0Bf26077F756b6($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getMovie($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function deleteMovie($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if (!(($fe93a43f53d92a4e = self::getMovie($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label20;
		}

		if (!Fc84e25737908cb5($Abcb228699a7f743, $C082ca9ed03f473c)) {
			goto label20;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label20:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function a0D6dA3165b447b7($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if ($C082ca9ed03f473c == -1) {
			goto label19;
		}

		$ba2d146bb5a55097 = json_decode(a730c6de034BA241($C082ca9ed03f473c, [
			'action'     => 'vod',
			'stream_ids' => [$Abcb228699a7f743],
			'function'   => 'start'
		]), true);
		goto label36;

		label19:

		$ba2d146bb5a55097 = json_decode(d5612f049a8056A5([
			'action'     => 'vod',
			'sub'        => 'start',
			'stream_ids' => [$Abcb228699a7f743],
			'servers'    => array_keys(XUI::$rServers)
		]), true);

		label36:

		if (!$ba2d146bb5a55097['result']) {
			goto label41;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label41:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function d6Cc5A7dE37Fa642($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if ($C082ca9ed03f473c == -1) {
			goto label19;
		}

		$ba2d146bb5a55097 = json_decode(A730c6DE034BA241($C082ca9ed03f473c, [
			'action'     => 'vod',
			'stream_ids' => [$Abcb228699a7f743],
			'function'   => 'stop'
		]), true);
		goto label36;

		label19:

		$ba2d146bb5a55097 = json_decode(d5612F049a8056a5([
			'action'     => 'vod',
			'sub'        => 'stop',
			'stream_ids' => [$Abcb228699a7f743],
			'servers'    => array_keys(XUI::$rServers)
		]), true);

		label36:

		if (!$ba2d146bb5a55097['result']) {
			goto label41;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label41:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getEpisode($Abcb228699a7f743)
	{
		if (!(($fe93a43f53d92a4e = f260B7a31f021E39($Abcb228699a7f743)) && ($fe93a43f53d92a4e['type'] == 5))) {
			goto label15;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $fe93a43f53d92a4e];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createEpisode($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::E87D54803AFcB01e($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getEpisode($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editEpisode($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($fe93a43f53d92a4e = self::getEpisode($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::E87D54803AfcB01E($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getEpisode($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function deleteEpisode($Abcb228699a7f743, $C082ca9ed03f473c = -1)
	{
		if (!(($fe93a43f53d92a4e = self::getEpisode($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label20;
		}

		if (!Fc84E25737908cB5($Abcb228699a7f743, $C082ca9ed03f473c)) {
			goto label20;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label20:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function B977eA070B44F074($Abcb228699a7f743)
	{
		if (!($d02ef9ae10a41939 = a2297542D8bd35F6($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $d02ef9ae10a41939];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createSeries($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(API::DbDD7075f827466E($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::b977Ea070b44f074($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editSeries($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($fe93a43f53d92a4e = self::B977Ea070b44F074($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::dbdd7075F827466E($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::b977eA070b44F074($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function C21831D749Ba3774($Abcb228699a7f743)
	{
		if (!(($fe93a43f53d92a4e = self::B977ea070B44F074($Abcb228699a7f743)) && isset($fe93a43f53d92a4e['data']))) {
			goto label18;
		}

		if (!DBBe1508fA3e591f($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function F76008f8Dfe1898c()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => C6a90bFCd425Eb63()];
	}

	static public function getServer($Abcb228699a7f743)
	{
		if (!($Ec379295dc7029e6 = cBB79F154dB723A8($Abcb228699a7f743))) {
			goto label11;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $Ec379295dc7029e6];

		label11:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function f7B37A01d2B82F24($ba2d146bb5a55097)
	{
		goto label2;

		label2:
		if (!(empty($ba2d146bb5a55097['type']) || empty($ba2d146bb5a55097['ssh_port']) || empty($ba2d146bb5a55097['root_username']) || empty($ba2d146bb5a55097['root_password']))) {
			goto label16;
		}

		return ['status' => 'STATUS_INVALID_INPUT'];

		label16:
		if (!(($ba2d146bb5a55097['type'] == 1) && (empty($ba2d146bb5a55097['type']) || empty($ba2d146bb5a55097['ssh_port'])))) {
			goto label31;
		}

		return ['status' => 'STATUS_INVALID_INPUT'];
		goto label31;

		label29:

		return ['status' => 'STATUS_FAILURE'];
		goto label51;

		label31:

		$B9869413eae86beb = parseerror(API::f7b37a01d2b82f24($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label50;
		}

		$B9869413eae86beb['data'] = self::getServer($B9869413eae86beb['data']['insert_id']);

		label50:

		goto label29;

		label51:
	}

	static public function editServer($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($Ec379295dc7029e6 = self::getServer($Abcb228699a7f743)) && isset($Ec379295dc7029e6['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::e9eB556bBd1E4448($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getServer($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function editProxy($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($Ec379295dc7029e6 = self::getServer($Abcb228699a7f743)) && isset($Ec379295dc7029e6['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(API::dDaC4b7C6F34a02F($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::getServer($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function aA735B84Dcbc9D64($Abcb228699a7f743)
	{
		if (!(($Ec379295dc7029e6 = self::getServer($Abcb228699a7f743)) && isset($Ec379295dc7029e6['data']))) {
			goto label18;
		}

		if (!eFa9379345817B87($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function Ac49B56DbE10E52c()
	{
		return ['status' => 'STATUS_SUCCESS', 'data' => cDbe6bc7b26c4902()];
	}

	static public function d0d0E87fB9ad0543($ba2d146bb5a55097)
	{
		$B9869413eae86beb = parseerror(API::D0D0E87FB9AD0543($ba2d146bb5a55097));
		$B9869413eae86beb['data'] = self::ac49b56dbE10e52c()['data'];
		return $B9869413eae86beb;
	}

	static public function AFF015C358EB0964($C082ca9ed03f473c)
	{
		goto label77;

		label2:

		$ba2d146bb5a55097['total_connections'] = $b62d6460eb33ea07->get_row()['count'];

		label7:

		$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0 GROUP BY `user_id`;', $C082ca9ed03f473c);

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label22;
		}

		$ba2d146bb5a55097['online_users'] = $b62d6460eb33ea07->num_rows();
		goto label22;

		label22:

		$b62d6460eb33ea07->query('SELECT `activity_id` FROM `lines_live` WHERE `hls_end` = 0 GROUP BY `user_id`;');

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label35;
		}

		$ba2d146bb5a55097['total_users'] = $b62d6460eb33ea07->num_rows();

		label35:

		goto label57;

		label36:

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label47;
		}

		$ba2d146bb5a55097['open_connections'] = $b62d6460eb33ea07->get_row()['count'];

		label47:

		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `hls_end` = 0;');

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label7;
		}

		goto label2;

		label57:

		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `stream_status` <> 2 AND `type` = 1;', $C082ca9ed03f473c);

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label72;
		}

		$ba2d146bb5a55097['total_streams'] = $b62d6460eb33ea07->get_row()['count'];

		label72:

		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `pid` > 0 AND `type` = 1;', $C082ca9ed03f473c);
		goto label116;

		label77:

		global $b62d6460eb33ea07;
		$ba2d146bb5a55097 = json_decode(A730C6DE034BA241($C082ca9ed03f473c, ['action' => 'stats']), true);

		if (!$ba2d146bb5a55097) {
			goto label113;
		}

		$ba2d146bb5a55097['requests_per_second'] = XUI::$rServers[$C082ca9ed03f473c]['requests_per_second'];
		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `lines_live` WHERE `server_id` = ? AND `hls_end` = 0;', $C082ca9ed03f473c);
		goto label36;

		label100:

		$ba2d146bb5a55097['offline_streams'] = $b62d6460eb33ea07->get_row()['count'];

		label105:

		$ba2d146bb5a55097['network_guaranteed_speed'] = XUI::$rServers[$C082ca9ed03f473c]['network_guaranteed_speed'];
		return ['status' => 'STATUS_SUCCESS', 'data' => $ba2d146bb5a55097];

		label113:

		goto label114;

		label114:

		return ['status' => 'STATUS_FAILURE'];
		goto label138;

		label116:

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label127;
		}

		$ba2d146bb5a55097['total_running_streams'] = $b62d6460eb33ea07->get_row()['count'];

		label127:

		$b62d6460eb33ea07->query('SELECT COUNT(*) AS `count` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `server_id` = ? AND `type` = 1 AND (`streams`.`direct_source` = 0 AND (`streams_servers`.`monitor_pid` IS NOT NULL AND `streams_servers`.`monitor_pid` > 0) AND (`streams_servers`.`pid` IS NULL OR `streams_servers`.`pid` <= 0) AND `streams_servers`.`stream_status` <> 0);', $C082ca9ed03f473c);

		if (!(0 < $b62d6460eb33ea07->num_rows())) {
			goto label105;
		}

		goto label100;

		label138:
	}

	static public function getFPMStatus($C082ca9ed03f473c)
	{
		$ba2d146bb5a55097 = a730c6dE034ba241($C082ca9ed03f473c, ['action' => 'fpm_status']);

		if (!$ba2d146bb5a55097) {
			goto label12;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $ba2d146bb5a55097];

		label12:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function E5Af2e0e9aD188b4($C082ca9ed03f473c)
	{
		$ba2d146bb5a55097 = json_decode(A730c6de034BA241($C082ca9ed03f473c, ['action' => 'rtmp_stats']), true);

		if (!$ba2d146bb5a55097) {
			goto label16;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $ba2d146bb5a55097];

		label16:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function C61402197478cAF1($C082ca9ed03f473c)
	{
		$ba2d146bb5a55097 = json_decode(A730C6DE034BA241($C082ca9ed03f473c, ['action' => 'get_free_space']), true);

		if (!$ba2d146bb5a55097) {
			goto label16;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $ba2d146bb5a55097];

		label16:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function aC675966591FEE08($C082ca9ed03f473c)
	{
		$ba2d146bb5a55097 = json_decode(a730c6dE034Ba241($C082ca9ed03f473c, ['action' => 'get_pids']), true);

		if (!$ba2d146bb5a55097) {
			goto label16;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $ba2d146bb5a55097];

		label16:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function d6A9D4057776E78D($C082ca9ed03f473c)
	{
		$ba2d146bb5a55097 = json_decode(A730C6DE034ba241($C082ca9ed03f473c, ['action' => 'get_certificate_info']), true);

		if (!$ba2d146bb5a55097) {
			goto label16;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $ba2d146bb5a55097];

		label16:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function d69c16FBFb19997C($C082ca9ed03f473c)
	{
		A730C6dE034Ba241($C082ca9ed03f473c, ['action' => 'reload_nginx']);
		return ['status' => 'STATUS_SUCCESS'];
	}

	static public function clearTemp($C082ca9ed03f473c)
	{
		$ba2d146bb5a55097 = json_decode(a730c6de034ba241($C082ca9ed03f473c, ['action' => 'free_temp']), true);

		if (!$ba2d146bb5a55097['result']) {
			goto label15;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function clearStreams($C082ca9ed03f473c)
	{
		$ba2d146bb5a55097 = json_decode(a730c6dE034BA241($C082ca9ed03f473c, ['action' => 'free_streams']), true);

		if (!$ba2d146bb5a55097['result']) {
			goto label15;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getDirectory($C082ca9ed03f473c, $c13177660204b2bb)
	{
		$ba2d146bb5a55097 = json_decode(a730c6de034Ba241($C082ca9ed03f473c, ['action' => 'scandir', 'dir' => $c13177660204b2bb]), true);

		if (!$ba2d146bb5a55097) {
			goto label29;
		}

		unset($ba2d146bb5a55097['result']);
		if (!(isset($ba2d146bb5a55097['result']) && !$ba2d146bb5a55097['result'])) {
			goto label26;
		}

		return ['status' => 'STATUS_FAILURE'];

		label26:

		return ['status' => 'STATUS_SUCCESS', 'data' => $ba2d146bb5a55097];

		label29:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function killPID($C082ca9ed03f473c, $C98e11437faf4199)
	{
		$ba2d146bb5a55097 = json_decode(A730c6DE034ba241($C082ca9ed03f473c, ['action' => 'kill_pid', 'pid' => intval($C98e11437faf4199)]), true);

		if (!$ba2d146bb5a55097['result']) {
			goto label21;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label21:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function killConnection($C082ca9ed03f473c, $df02d8ad3c0e8f06)
	{
		$ba2d146bb5a55097 = json_decode(a730C6De034bA241($C082ca9ed03f473c, ['action' => 'closeConnection', 'activity_id' => intval($df02d8ad3c0e8f06)]), true);

		if (!$ba2d146bb5a55097['result']) {
			goto label21;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label21:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function adjustCredits($Abcb228699a7f743, $E8f21e009ba7a8c5, $E141f5a434238777 = '')
	{
		global $b62d6460eb33ea07;
		global $E59d0debc75e7be8;
		if (!(is_numeric($E8f21e009ba7a8c5) && ($Caf4325605347834 = self::b349523Ecb058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label51;
		}

		$E8f21e009ba7a8c5 = intval($Caf4325605347834['data']['credits']) + intval($E8f21e009ba7a8c5);

		if (!(0 <= $E8f21e009ba7a8c5)) {
			goto label51;
		}

		$b62d6460eb33ea07->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $E8f21e009ba7a8c5, $Abcb228699a7f743);
		$b62d6460eb33ea07->query('INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);', $Abcb228699a7f743, $E59d0debc75e7be8['id'], $E8f21e009ba7a8c5, time(), $E141f5a434238777);
		return ['status' => 'STATUS_SUCCESS'];

		label51:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function reloadCache()
	{
		shell_exec(PHP_BIN . ' ' . CRON_PATH . 'cache_engine.php > /dev/null 2>/dev/null &');
		return ['status' => 'STATUS_SUCCESS'];
	}

	static public function runQuery($B91645b8411dc88c)
	{
		global $b62d6460eb33ea07;

		if (!$b62d6460eb33ea07->query($B91645b8411dc88c)) {
			goto label16;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $b62d6460eb33ea07->get_rows(), 'insert_id' => $b62d6460eb33ea07->last_insert_id()];

		label16:

		return ['status' => 'STATUS_FAILURE'];
	}
}

function parseError($F647a429f8089f01)
{
	global $A15af5ebe30b3cdc;
	if (!(isset($F647a429f8089f01['status']) && is_numeric($F647a429f8089f01['status']))) {
		goto label16;
	}

	$F647a429f8089f01['status'] = $A15af5ebe30b3cdc[$F647a429f8089f01['status']];

	label16:

	if ($F647a429f8089f01) {
		goto label20;
	}

	$F647a429f8089f01['status'] = 'STATUS_NO_PERMISSIONS';

	label20:

	return $F647a429f8089f01;
}

goto label2437;

label1:

goto label9;

label2:

$A4b9c81b159799b9 = explode(',', XUI::$rRequest['show_columns']);

label9:

if (isset(XUI::$rRequest['hide_columns'])) {
	goto label2411;
}

goto label2409;

label14:

APIWrapper::$db = &$b62d6460eb33ea07;
APIWrapper::$rKey = $ba2d146bb5a55097['api_key'];
if (!empty(XUI::$rRequest['api_key']) && APIWrapper::createSession()) {
	goto label2419;
}

echo json_encode(['status' => 'STATUS_FAILURE', 'error' => 'Invalid API key.']);
goto label2451;
goto label2419;

label34:

switch ($dabeadfcc3ba1288) {
case 'mysql_query':
	echo json_encode(APIWrapper::runQuery($ba2d146bb5a55097['query']));
	goto label2370;
case 'user_info':
	echo json_encode(APIWrapper::filterRow(APIWrapper::CC988751eeBbF271(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_lines':
	echo json_encode(APIWrapper::TableAPI('lines', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_mags':
	echo json_encode(APIWrapper::TableAPI('mags', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_enigmas':
	echo json_encode(APIWrapper::TableAPI('enigmas', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_users':
	echo json_encode(APIWrapper::TableAPI('reg_users', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_streams':
	echo json_encode(APIWrapper::TableAPI('streams', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_provider_streams':
	echo json_encode(APIWrapper::TableAPI('provider_streams', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_channels':
	$ba2d146bb5a55097['created'] = true;
	echo json_encode(APIWrapper::TableAPI('streams', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_stations':
	echo json_encode(APIWrapper::TableAPI('radios', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_movies':
	echo json_encode(APIWrapper::TableAPI('movies', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_series_list':
	echo json_encode(APIWrapper::TableAPI('series', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_episodes':
	echo json_encode(APIWrapper::TableAPI('episodes', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'activity_logs':
	echo json_encode(APIWrapper::TableAPI('line_activity', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'live_connections':
	echo json_encode(APIWrapper::TableAPI('live_connections', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'credit_logs':
	echo json_encode(APIWrapper::TableAPI('credits_log', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'client_logs':
	echo json_encode(APIWrapper::TableAPI('client_logs', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'user_logs':
	echo json_encode(APIWrapper::TableAPI('reg_user_logs', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'stream_errors':
	echo json_encode(APIWrapper::TableAPI('stream_errors', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'watch_output':
	echo json_encode(APIWrapper::TableAPI('watch_output', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'system_logs':
	echo json_encode(APIWrapper::TableAPI('mysql_syslog', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'login_logs':
	echo json_encode(APIWrapper::TableAPI('login_logs', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'restream_logs':
	echo json_encode(APIWrapper::TableAPI('restream_logs', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'mag_events':
	echo json_encode(APIWrapper::TableAPI('mag_events', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_line':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getLine($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_line':
	echo json_encode(APIWrapper::createLine($ba2d146bb5a55097));
	goto label2370;
case 'edit_line':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editLine($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_line':
	echo json_encode(APIWrapper::Ca81C8F24c099495($ba2d146bb5a55097['id']));
	goto label2370;
case 'disable_line':
	echo json_encode(APIWrapper::disableLine($ba2d146bb5a55097['id']));
	goto label2370;
case 'enable_line':
	echo json_encode(APIWrapper::enableLine($ba2d146bb5a55097['id']));
	goto label2370;
case 'unban_line':
	echo json_encode(APIWrapper::unbanLine($ba2d146bb5a55097['id']));
	goto label2370;
case 'ban_line':
	echo json_encode(APIWrapper::banLine($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_user':
	echo json_encode(APIWrapper::filterRow(APIWrapper::B349523ecb058D86($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_user':
	echo json_encode(APIWrapper::createUser($ba2d146bb5a55097));
	goto label2370;
case 'edit_user':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editUser($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_user':
	echo json_encode(APIWrapper::D8C5152aAa448BdD($ba2d146bb5a55097['id']));
	goto label2370;
case 'disable_user':
	echo json_encode(APIWrapper::disableUser($ba2d146bb5a55097['id']));
	goto label2370;
case 'enable_user':
	echo json_encode(APIWrapper::enableUser($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_mag':
	echo json_encode(APIWrapper::filterRow(APIWrapper::d6BCc99E8BafA737($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_mag':
	echo json_encode(APIWrapper::createMAG($ba2d146bb5a55097));
	goto label2370;
case 'edit_mag':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editMAG($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_mag':
	echo json_encode(APIWrapper::b3e7cdF7AC99aB57($ba2d146bb5a55097['id']));
	goto label2370;
case 'disable_mag':
	echo json_encode(APIWrapper::disableMAG($ba2d146bb5a55097['id']));
	goto label2370;
case 'enable_mag':
	echo json_encode(APIWrapper::enableMAG($ba2d146bb5a55097['id']));
	goto label2370;
case 'unban_mag':
	echo json_encode(APIWrapper::unbanMAG($ba2d146bb5a55097['id']));
	goto label2370;
case 'ban_mag':
	echo json_encode(APIWrapper::banMAG($ba2d146bb5a55097['id']));
	goto label2370;
case 'convert_mag':
	echo json_encode(APIWrapper::convertMAG($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_enigma':
	echo json_encode(APIWrapper::filterRow(APIWrapper::AB9DD80290f141dE($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_enigma':
	echo json_encode(APIWrapper::createEnigma($ba2d146bb5a55097));
	goto label2370;
case 'edit_enigma':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editEnigma($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_enigma':
	echo json_encode(APIWrapper::ad38e07a7561ACf3($ba2d146bb5a55097['id']));
	goto label2370;
case 'disable_enigma':
	echo json_encode(APIWrapper::disableEnigma($ba2d146bb5a55097['id']));
	goto label2370;
case 'enable_enigma':
	echo json_encode(APIWrapper::enableEnigma($ba2d146bb5a55097['id']));
	goto label2370;
case 'unban_enigma':
	echo json_encode(APIWrapper::unbanEnigma($ba2d146bb5a55097['id']));
	goto label2370;
case 'ban_enigma':
	echo json_encode(APIWrapper::banEnigma($ba2d146bb5a55097['id']));
	goto label2370;
case 'convert_enigma':
	echo json_encode(APIWrapper::convertEnigma($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_bouquets':
	echo json_encode(APIWrapper::filterRows(APIWrapper::de27bb48f7bfF12d(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_bouquet':
	echo json_encode(APIWrapper::filterRow(APIWrapper::a64bA92a18b425Ed($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_bouquet':
	echo json_encode(APIWrapper::createBouquet($ba2d146bb5a55097));
	goto label2370;
case 'edit_bouquet':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editBouquet($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_bouquet':
	echo json_encode(APIWrapper::Cf129337B2b64858($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_access_codes':
	echo json_encode(APIWrapper::filterRows(APIWrapper::getAccessCodes(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_access_code':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getAccessCode($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_access_code':
	echo json_encode(APIWrapper::createAccessCode($ba2d146bb5a55097));
	goto label2370;
case 'edit_access_code':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editAccessCode($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_access_code':
	echo json_encode(APIWrapper::deleteAccessCode($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_hmacs':
	echo json_encode(APIWrapper::filterRows(APIWrapper::getHMACs(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_hmac':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getHMAC($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_hmac':
	echo json_encode(APIWrapper::createHMAC($ba2d146bb5a55097));
	goto label2370;
case 'edit_hmac':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editHMAC($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_hmac':
	echo json_encode(APIWrapper::dDa4D03970e2cA94($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_epgs':
	echo json_encode(APIWrapper::filterRows(APIWrapper::e2cAB4aCe32264bB(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_epg':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getEPG($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_epg':
	echo json_encode(APIWrapper::createEPG($ba2d146bb5a55097));
	goto label2370;
case 'edit_epg':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editEPG($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_epg':
	echo json_encode(APIWrapper::A9C0d3a737017A30($ba2d146bb5a55097['id']));
	goto label2370;
case 'reload_epg':
	echo json_encode(APIWrapper::reloadEPG(isset($ba2d146bb5a55097['id']) ? intval($ba2d146bb5a55097['id']) : NULL));
	goto label2370;
case 'get_providers':
	echo json_encode(APIWrapper::filterRows(APIWrapper::getProviders(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_provider':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getProvider($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_provider':
	echo json_encode(APIWrapper::createProvider($ba2d146bb5a55097));
	goto label2370;
case 'edit_provider':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editProvider($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_provider':
	echo json_encode(APIWrapper::deleteProvider($ba2d146bb5a55097['id']));
	goto label2370;
case 'reload_provider':
	echo json_encode(APIWrapper::reloadProvider(isset($ba2d146bb5a55097['id']) ? intval($ba2d146bb5a55097['id']) : NULL));
	goto label2370;
case 'get_groups':
	echo json_encode(APIWrapper::filterRows(APIWrapper::getGroups(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_group':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getGroup($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_group':
	echo json_encode(APIWrapper::createGroup($ba2d146bb5a55097));
	goto label2370;
case 'edit_group':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editGroup($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_group':
	echo json_encode(APIWrapper::be56e3dA8aeD7F8b($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_packages':
	echo json_encode(APIWrapper::filterRows(APIWrapper::D117E45424fE8F00(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_package':
	echo json_encode(APIWrapper::filterRow(APIWrapper::Ff68F9EFD227763f($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_package':
	echo json_encode(APIWrapper::createPackage($ba2d146bb5a55097));
	goto label2370;
case 'edit_package':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editPackage($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_package':
	echo json_encode(APIWrapper::EFC1502D889c4091($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_transcode_profiles':
	echo json_encode(APIWrapper::filterRows(APIWrapper::b8B821fD5B9528D4(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_transcode_profile':
	echo json_encode(APIWrapper::filterRow(APIWrapper::a9dC9Bb8F74D8e4d($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_transcode_profile':
	echo json_encode(APIWrapper::createTranscodeProfile($ba2d146bb5a55097));
	goto label2370;
case 'edit_transcode_profile':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editTranscodeProfile($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_transcode_profile':
	echo json_encode(APIWrapper::deleteTranscodeProfile($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_rtmp_ips':
	echo json_encode(APIWrapper::filterRows(APIWrapper::b5943F8605Dac186(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_rtmp_ip':
	echo json_encode(APIWrapper::filterRow(APIWrapper::f6E1a36d39166281($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_rtmp_ip':
	echo json_encode(APIWrapper::addRTMPIP($ba2d146bb5a55097));
	goto label2370;
case 'edit_rtmp_ip':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editRTMPIP($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_rtmp_ip':
	echo json_encode(APIWrapper::C6886fC2197A448c($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_categories':
	echo json_encode(APIWrapper::filterRows(APIWrapper::c721bd954a5f072f(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_category':
	echo json_encode(APIWrapper::filterRow(APIWrapper::a5611693E0a4eA89($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_category':
	echo json_encode(APIWrapper::createCategory($ba2d146bb5a55097));
	goto label2370;
case 'edit_category':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editCategory($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_category':
	echo json_encode(APIWrapper::b293e956AfB2b06B($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_watch_folders':
	echo json_encode(APIWrapper::filterRows(APIWrapper::B44E34d9BA4fb8C4(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_watch_folder':
	echo json_encode(APIWrapper::filterRow(APIWrapper::c3a279725b215929($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_watch_folder':
	echo json_encode(APIWrapper::createWatchFolder($ba2d146bb5a55097));
	goto label2370;
case 'edit_watch_folder':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editWatchFolder($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_watch_folder':
	echo json_encode(APIWrapper::A82ff612fe0312C0($ba2d146bb5a55097['id']));
	goto label2370;
case 'reload_watch_folder':
	echo json_encode(APIWrapper::reloadWatchFolder($ba2d146bb5a55097['server_id'] ?? SERVER_ID, $ba2d146bb5a55097['id']));
	goto label2370;
case 'get_blocked_isps':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getBlockedISPs(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'add_blocked_isp':
	echo json_encode(APIWrapper::addBlockedISP($ba2d146bb5a55097['id']));
	goto label2370;
case 'delete_blocked_isp':
	echo json_encode(APIWrapper::F8a610043421b14e($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_blocked_uas':
	echo json_encode(APIWrapper::filterRows(APIWrapper::getBlockedUAs(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'add_blocked_ua':
	echo json_encode(APIWrapper::addBlockedUA($ba2d146bb5a55097));
	goto label2370;
case 'delete_blocked_ua':
	echo json_encode(APIWrapper::b40EC96654c66f48($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_blocked_ips':
	echo json_encode(APIWrapper::filterRows(APIWrapper::Ab69ECd4d7705061(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'add_blocked_ip':
	echo json_encode(APIWrapper::addBlockedIP($ba2d146bb5a55097['id']));
	goto label2370;
case 'delete_blocked_ip':
	echo json_encode(APIWrapper::c7EF58c0F7aCdb05($ba2d146bb5a55097['id']));
	goto label2370;
case 'flush_blocked_ips':
	echo json_encode(APIWrapper::flushBlockedIPs());
	goto label2370;
case 'get_stream':
	echo json_encode(APIWrapper::filterRow(APIWrapper::cB6ee16e86F09E61($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_stream':
	echo json_encode(APIWrapper::createStream($ba2d146bb5a55097));
	goto label2370;
case 'edit_stream':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editStream($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_stream':
	echo json_encode(APIWrapper::e7f8e8Ecc8B6667B($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id'] ?? -1));
	goto label2370;
case 'start_station':
case 'start_channel':
case 'start_stream':
	echo json_encode(APIWrapper::fFa26438E002c2b7($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id']));
	goto label2370;
case 'stop_station':
case 'stop_channel':
case 'stop_stream':
	echo json_encode(APIWrapper::eE173b194544b3a2($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id']));
	goto label2370;
case 'get_channel':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getChannel($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_channel':
	echo json_encode(APIWrapper::C8EF91e4040dDd07($ba2d146bb5a55097));
	goto label2370;
case 'edit_channel':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editChannel($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_channel':
	echo json_encode(APIWrapper::deleteChannel($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id'] ?? -1));
	goto label2370;
case 'get_station':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getStation($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_station':
	echo json_encode(APIWrapper::createStation($ba2d146bb5a55097));
	goto label2370;
case 'edit_station':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editStation($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_station':
	echo json_encode(APIWrapper::deleteStation($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id'] ?? -1));
	goto label2370;
case 'get_movie':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getMovie($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_movie':
	echo json_encode(APIWrapper::createMovie($ba2d146bb5a55097));
	goto label2370;
case 'edit_movie':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editMovie($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_movie':
	echo json_encode(APIWrapper::deleteMovie($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id'] ?? -1));
	goto label2370;
case 'start_episode':
case 'start_movie':
	echo json_encode(APIWrapper::A0d6Da3165b447b7($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id']));
	goto label2370;
case 'stop_episode':
case 'stop_movie':
	echo json_encode(APIWrapper::d6CC5a7De37FA642($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id']));
	goto label2370;
case 'get_episode':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getEpisode($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_episode':
	echo json_encode(APIWrapper::createEpisode($ba2d146bb5a55097));
	goto label2370;
case 'edit_episode':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editEpisode($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_episode':
	echo json_encode(APIWrapper::deleteEpisode($ba2d146bb5a55097['id'], $ba2d146bb5a55097['server_id'] ?? -1));
	goto label2370;
case 'get_series':
	echo json_encode(APIWrapper::filterRow(APIWrapper::B977eA070b44f074($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'create_series':
	echo json_encode(APIWrapper::createSeries($ba2d146bb5a55097));
	goto label2370;
case 'edit_series':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editSeries($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_series':
	echo json_encode(APIWrapper::c21831D749bA3774($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_servers':
	echo json_encode(APIWrapper::filterRows(APIWrapper::F76008f8dFe1898C(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'get_server':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getServer($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'install_server':
	$ba2d146bb5a55097['type'] = 0;
	echo json_encode(APIWrapper::F7b37A01d2B82F24($ba2d146bb5a55097));
	goto label2370;
case 'install_proxy':
	$ba2d146bb5a55097['type'] = 1;
	echo json_encode(APIWrapper::f7B37A01D2b82f24($ba2d146bb5a55097));
	goto label2370;
case 'edit_server':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editServer($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'edit_proxy':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editProxy($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label2370;
case 'delete_server':
	echo json_encode(APIWrapper::aA735B84dcbc9D64($ba2d146bb5a55097['id']));
	goto label2370;
case 'get_settings':
	echo json_encode(APIWrapper::filterRow(APIWrapper::ac49B56dbe10E52C(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label2370;
case 'edit_settings':
	echo json_encode(APIWrapper::d0d0e87FB9aD0543($ba2d146bb5a55097));
	goto label2370;
case 'get_server_stats':
	echo json_encode(APIWrapper::afF015C358eb0964($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'get_fpm_status':
	echo json_encode(APIWrapper::getFPMStatus($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'get_rtmp_stats':
	echo json_encode(APIWrapper::E5aF2E0e9Ad188B4($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'get_free_space':
	echo json_encode(APIWrapper::c61402197478CaF1($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'get_pids':
	echo json_encode(APIWrapper::aC675966591fEe08($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'get_certificate_info':
	echo json_encode(APIWrapper::d6a9D4057776E78d($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'reload_nginx':
	echo json_encode(APIWrapper::D69C16Fbfb19997C($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'clear_temp':
	echo json_encode(APIWrapper::clearTemp($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'clear_streams':
	echo json_encode(APIWrapper::clearStreams($ba2d146bb5a55097['server_id'] ?? SERVER_ID));
	goto label2370;
case 'get_directory':
	echo json_encode(APIWrapper::getDirectory($ba2d146bb5a55097['server_id'] ?? SERVER_ID, $ba2d146bb5a55097['dir']));
	goto label2370;
case 'kill_pid':
	echo json_encode(APIWrapper::killPID($ba2d146bb5a55097['server_id'] ?? SERVER_ID, $ba2d146bb5a55097['pid']));
	goto label2370;
case 'kill_connection':
	echo json_encode(APIWrapper::killConnection($ba2d146bb5a55097['server_id'] ?? SERVER_ID, $ba2d146bb5a55097['activity_id']));
	goto label2370;
case 'adjust_credits':
	echo json_encode(APIWrapper::adjustCredits($ba2d146bb5a55097['id'], $ba2d146bb5a55097['credits'], $ba2d146bb5a55097['reason'] ?? ''));
	goto label2370;
case 'reload_cache':
	echo json_encode(APIWrapper::reloadCache());
	goto label2370;
default:
	echo json_encode(['status' => 'STATUS_FAILURE', 'error' => 'Invalid action.']);
	goto label2370;
}

label2370:

goto label2451;

label2371:

foreach (get_defined_constants(true)['user'] as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	if (!(substr($Bb672d1983256a93, 0, 7) == 'STATUS_')) {
		goto label2393;
	}

	$A15af5ebe30b3cdc[intval($ce0840c647e1bbc7)] = $Bb672d1983256a93;

	label2393:
}

$ba2d146bb5a55097 = XUI::$rRequest;
goto label14;

label2400:

unset($ba2d146bb5a55097['action']);
unset($ba2d146bb5a55097['start']);
unset($ba2d146bb5a55097['limit']);

if (isset(XUI::$rRequest['show_columns'])) {
	goto label2;
}

$A4b9c81b159799b9 = NULL;
goto label1;

label2409:

$b0d7495c47b0a0bc = NULL;
goto label2418;

label2411:

$b0d7495c47b0a0bc = explode(',', XUI::$rRequest['hide_columns']);

label2418:

goto label34;

label2419:

$dabeadfcc3ba1288 = $ba2d146bb5a55097['action'];
$bcfd61adc96d4b72 = intval($ba2d146bb5a55097['start']) ?: 0;
$Cc2b5dfe75dc164b = intval($ba2d146bb5a55097['limit']) ?: 50;
unset($ba2d146bb5a55097['api_key']);
goto label2400;

label2437:

if (defined('XUI_HOME')) {
	goto label2446;
}

define('XUI_HOME', '/home/xui/');

label2446:

require_once XUI_HOME . 'includes/admin.php';
$A15af5ebe30b3cdc = [];
goto label2371;

label2451:

?>