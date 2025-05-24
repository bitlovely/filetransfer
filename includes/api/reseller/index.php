<?php


class APIWrapper
{
	static public $db;
	static public $rKey;

	static public function filterRow($ba2d146bb5a55097, $C17543903e9aa6ae, $c733678227713664, $B05582e97914c7eb = false)
	{
		goto label67;

		label5:

		goto label80;

		label6:

		$ba2d146bb5a55097['data'] = $B9869413eae86beb;
		return $ba2d146bb5a55097;
		goto label5;

		label10:

		return $B9869413eae86beb;
		goto label5;

		label12:

		goto label14;

		label13:

		$Fb9da1713bff19ce = $ba2d146bb5a55097;

		label14:

		$B9869413eae86beb = [];
		goto label16;

		label16:

		if (!$Fb9da1713bff19ce) {
			goto label64;
		}

		foreach (array_keys($Fb9da1713bff19ce) as $Bb672d1983256a93) {
			goto label43;

			label26:

			goto label62;

			label28:

			goto label26;

			label30:

			if (!in_array($Bb672d1983256a93, $C17543903e9aa6ae)) {
				goto label26;
			}

			$B9869413eae86beb[$Bb672d1983256a93] = $Fb9da1713bff19ce[$Bb672d1983256a93];
			goto label26;

			label43:

			if ($C17543903e9aa6ae) {
				goto label30;
			}

			if (!$c733678227713664) {
				goto label28;
			}

			if (in_array($Bb672d1983256a93, $c733678227713664)) {
				goto label60;
			}

			$B9869413eae86beb[$Bb672d1983256a93] = $Fb9da1713bff19ce[$Bb672d1983256a93];

			label60:

			goto label28;

			label62:
		}

		label64:

		if ($B05582e97914c7eb) {
			goto label10;
		}

		goto label6;

		label67:
		if (!(!$C17543903e9aa6ae && !$c733678227713664)) {
			goto label75;
		}

		return $ba2d146bb5a55097;

		label75:

		if ($B05582e97914c7eb) {
			goto label13;
		}

		$Fb9da1713bff19ce = $ba2d146bb5a55097['data'];
		goto label12;

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
		goto label9;

		label7:

		return $B9869413eae86beb;
		goto label90;

		label9:

		$F5a5942f97f5cf47 = 'http://127.0.0.1:' . XUI::$rServers[SERVER_ID]['http_broadcast_port'] . '/' . trim(dirname($_SERVER['PHP_SELF']), '/') . '/table.php';
		$ba2d146bb5a55097['api_key'] = self::$rKey;
		$ba2d146bb5a55097['id'] = $Abcb228699a7f743;
		$ba2d146bb5a55097['start'] = $bcfd61adc96d4b72;
		$ba2d146bb5a55097['length'] = $Cc2b5dfe75dc164b;
		goto label37;

		label37:

		$ba2d146bb5a55097['show_columns'] = $A4b9c81b159799b9;
		$ba2d146bb5a55097['hide_columns'] = $b0d7495c47b0a0bc;
		$ab701fbbd66214d9 = curl_init();
		curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $F5a5942f97f5cf47);
		curl_setopt($ab701fbbd66214d9, CURLOPT_POST, 1);
		goto label57;

		label57:

		curl_setopt($ab701fbbd66214d9, CURLOPT_POSTFIELDS, http_build_query($ba2d146bb5a55097));
		curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ab701fbbd66214d9, CURLOPT_HTTPHEADER, ['X-Requested-With: xmlhttprequest']);
		$B9869413eae86beb = json_decode(curl_exec($ab701fbbd66214d9), true);
		curl_close($ab701fbbd66214d9);
		goto label7;

		label90:
	}

	static public function createSession()
	{
		goto label1;

		label1:

		global $E59d0debc75e7be8;
		global $db0a61ef32b89a27;
		self::$db->query('SELECT * FROM `users` LEFT JOIN `users_groups` ON `users_groups`.`group_id` = `users`.`member_group_id` WHERE `api_key` = ? AND LENGTH(`api_key`) > 0 AND `is_reseller` = 1 AND `status` = 1;', self::$rKey);

		if (!(0 < self::$db->num_rows())) {
			goto label30;
		}

		ResellerAPI::$db = &self::$db;
		ResellerAPI::init(self::$db->get_row()['id']);
		goto label32;

		label29:

		return true;

		label30:

		return false;
		goto label51;

		label32:

		unset(ResellerAPI::$rUserInfo['password']);
		$E59d0debc75e7be8 = ResellerAPI::$rUserInfo;
		$db0a61ef32b89a27 = ResellerAPI::$rPermissions;

		if (!(0 < strlen($E59d0debc75e7be8['timezone']))) {
			goto label29;
		}

		date_default_timezone_set($E59d0debc75e7be8['timezone']);
		goto label29;

		label51:
	}

	static public function CC988751EebBF271()
	{
		global $E59d0debc75e7be8;
		global $db0a61ef32b89a27;
		return ['status' => 'STATUS_SUCCESS', 'data' => $E59d0debc75e7be8, 'permissions' => $db0a61ef32b89a27];
	}

	static public function d117e45424fE8F00()
	{
		global $E59d0debc75e7be8;

		if (!$E59d0debc75e7be8) {
			goto label55;
		}

		$b00d1d65528795d1 = [];
		$dd3211a322da8474 = json_decode($E59d0debc75e7be8['override_packages'], true);

		foreach (D8C8284136938Ef0($E59d0debc75e7be8['member_group_id']) as $cc386f9ba082650e) {
			if (isset($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']) && (0 < strlen($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']))) {
				goto label40;
			}

			$cc386f9ba082650e['official_credits'] = intval($cc386f9ba082650e['official_credits']);
			goto label48;

			label40:

			$cc386f9ba082650e['official_credits'] = intval($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']);

			label48:

			$b00d1d65528795d1[] = $cc386f9ba082650e;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $b00d1d65528795d1];

		label55:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function getLine($Abcb228699a7f743)
	{
		if (!(($F5ba2106d5227309 = b5AD1d95a92ce732($Abcb228699a7f743)) && E589A4bF54A2DAd1('line', $Abcb228699a7f743))) {
			goto label17;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $F5ba2106d5227309];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createLine($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(ResellerAPI::fCCAa0F750EFA5B7($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::getLine($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editLine($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		goto label27;

		label3:

		return ['status' => 'STATUS_FAILURE'];
		goto label42;

		label5:

		$B9869413eae86beb = parseerror(ResellerAPI::fCcaA0f750EFA5b7($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label25;
		}

		$B9869413eae86beb['data'] = self::getLine($B9869413eae86beb['data']['insert_id'])['data'];

		label25:

		return $B9869413eae86beb;
		goto label3;

		label27:

		if (!B5Ad1D95a92CE732($Abcb228699a7f743)) {
			goto label3;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;

		if (!isset($ba2d146bb5a55097['isp_clear'])) {
			goto label41;
		}

		$ba2d146bb5a55097['isp_clear'] = '';

		label41:

		goto label5;

		label42:
	}

	static public function CA81c8F24c099495($Abcb228699a7f743)
	{
		if (!B5ad1d95A92cE732($Abcb228699a7f743)) {
			goto label14;
		}

		if (!C24B1b1FdAD37C5E($Abcb228699a7f743)) {
			goto label14;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label14:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function disableLine($Abcb228699a7f743)
	{
		if (!b5Ad1D95A92cE732($Abcb228699a7f743)) {
			goto label13;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label13:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function enableLine($Abcb228699a7f743)
	{
		if (!B5ad1d95A92cE732($Abcb228699a7f743)) {
			goto label13;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label13:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function d6BCC99e8bAFa737($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = A32D85AEfa28959d($Abcb228699a7f743))) {
			goto label19;
		}

		if (!e589A4bf54A2dAd1('line', $c050a23c479bc67e['user_id'])) {
			goto label19;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $c050a23c479bc67e];

		label19:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createMAG($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(ResellerAPI::b087C00f20554a9b($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::d6bCC99E8bafa737($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editMAG($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		goto label25;

		label3:

		$B9869413eae86beb = parseerror(ResellerAPI::B087c00F20554A9b($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label23;
		}

		$B9869413eae86beb['data'] = self::D6BcC99e8BaFa737($B9869413eae86beb['data']['insert_id'])['data'];

		label23:

		return $B9869413eae86beb;
		goto label40;

		label25:

		if (!A32D85AEFa28959d($Abcb228699a7f743)) {
			goto label40;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;

		if (!isset($ba2d146bb5a55097['isp_clear'])) {
			goto label39;
		}

		$ba2d146bb5a55097['isp_clear'] = '';

		label39:

		goto label3;

		label40:

		return ['status' => 'STATUS_FAILURE'];
		goto label42;

		label42:
	}

	static public function b3E7cdF7aC99ab57($Abcb228699a7f743)
	{
		if (!A32d85AeFA28959D($Abcb228699a7f743)) {
			goto label14;
		}

		if (!dd81518D00a2dD90($Abcb228699a7f743)) {
			goto label14;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label14:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function disableMAG($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = a32D85AeFa28959D($Abcb228699a7f743))) {
			goto label15;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function enableMAG($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = A32D85AefA28959D($Abcb228699a7f743))) {
			goto label15;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function convertMAG($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = A32d85AEfA28959d($Abcb228699a7f743))) {
			goto label21;
		}

		Dd81518d00A2Dd90($Abcb228699a7f743, false, false, true);
		return ['status' => 'STATUS_SUCCESS', 'data' => b5ad1d95a92cE732($c050a23c479bc67e['user_id'])];

		label21:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function aB9DD80290F141De($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = ef70A93e98fb7Ce9($Abcb228699a7f743))) {
			goto label19;
		}

		if (!E589A4bf54a2dAD1('line', $c050a23c479bc67e['user_id'])) {
			goto label19;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $c050a23c479bc67e];

		label19:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createEnigma($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(ResellerAPI::f5D44bE8B59F4e62($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::AB9Dd80290f141DE($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editEnigma($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		goto label3;

		label3:

		if (!Ef70a93E98fb7cE9($Abcb228699a7f743)) {
			goto label18;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;

		if (!isset($ba2d146bb5a55097['isp_clear'])) {
			goto label17;
		}

		$ba2d146bb5a55097['isp_clear'] = '';

		label17:

		goto label20;

		label18:

		return ['status' => 'STATUS_FAILURE'];
		goto label42;

		label20:

		$B9869413eae86beb = parseerror(ResellerAPI::F5D44BE8B59F4e62($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label40;
		}

		$B9869413eae86beb['data'] = self::ab9dd80290F141DE($B9869413eae86beb['data']['insert_id'])['data'];

		label40:

		return $B9869413eae86beb;
		goto label18;

		label42:
	}

	static public function Ad38e07A7561acF3($Abcb228699a7f743)
	{
		if (!ef70a93e98fb7cE9($Abcb228699a7f743)) {
			goto label14;
		}

		if (!a486863E198221fA($Abcb228699a7f743)) {
			goto label14;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label14:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function disableEnigma($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = EF70A93E98Fb7Ce9($Abcb228699a7f743))) {
			goto label15;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 0 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function enableEnigma($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = Ef70a93e98Fb7ce9($Abcb228699a7f743))) {
			goto label15;
		}

		self::$db->query('UPDATE `lines` SET `enabled` = 1 WHERE `id` = ?;', $c050a23c479bc67e['user_id']);
		return ['status' => 'STATUS_SUCCESS'];

		label15:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function convertEnigma($Abcb228699a7f743)
	{
		if (!($c050a23c479bc67e = eF70A93e98fb7ce9($Abcb228699a7f743))) {
			goto label21;
		}

		A486863e198221Fa($Abcb228699a7f743, false, false, true);
		return ['status' => 'STATUS_SUCCESS', 'data' => B5Ad1D95A92CE732($c050a23c479bc67e['user_id'])];

		label21:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function b349523ecb058d86($Abcb228699a7f743)
	{
		if (!(($Caf4325605347834 = Ba89228dc958ce05($Abcb228699a7f743)) && e589a4Bf54A2dad1('user', $Caf4325605347834['id']))) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS', 'data' => $Caf4325605347834];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function createUser($ba2d146bb5a55097)
	{
		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label6;
		}

		unset($ba2d146bb5a55097['edit']);

		label6:

		$B9869413eae86beb = parseerror(ResellerAPI::d3824406bc4f2a23($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label26;
		}

		$B9869413eae86beb['data'] = self::b349523eCB058D86($B9869413eae86beb['data']['insert_id'])['data'];

		label26:

		return $B9869413eae86beb;
	}

	static public function editUser($Abcb228699a7f743, $ba2d146bb5a55097)
	{
		if (!(($Caf4325605347834 = self::b349523eCB058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label35;
		}

		$ba2d146bb5a55097['edit'] = $Abcb228699a7f743;
		$B9869413eae86beb = parseerror(ResellerAPI::D3824406bc4f2a23($ba2d146bb5a55097));

		if (!isset($B9869413eae86beb['data']['insert_id'])) {
			goto label34;
		}

		$B9869413eae86beb['data'] = self::B349523ECb058D86($B9869413eae86beb['data']['insert_id'])['data'];

		label34:

		return $B9869413eae86beb;

		label35:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function d8C5152aaA448bdD($Abcb228699a7f743)
	{
		if (!(($Caf4325605347834 = self::B349523ECb058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label18;
		}

		if (!c05365Dcb6d79618($Abcb228699a7f743)) {
			goto label18;
		}

		return ['status' => 'STATUS_SUCCESS'];

		label18:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function disableUser($Abcb228699a7f743)
	{
		if (!(($Caf4325605347834 = self::B349523ECB058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label17;
		}

		self::$db->query('UPDATE `users` SET `status` = 0 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function enableUser($Abcb228699a7f743)
	{
		if (!(($Caf4325605347834 = self::B349523ECB058D86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label17;
		}

		self::$db->query('UPDATE `users` SET `status` = 1 WHERE `id` = ?;', $Abcb228699a7f743);
		return ['status' => 'STATUS_SUCCESS'];

		label17:

		return ['status' => 'STATUS_FAILURE'];
	}

	static public function adjustCredits($Abcb228699a7f743, $E8f21e009ba7a8c5, $A2724e95b275e9d5)
	{
		goto label6;

		label4:

		return ['status' => 'STATUS_FAILURE'];
		goto label111;

		label6:

		global $E59d0debc75e7be8;

		if (!(strlen($A2724e95b275e9d5) == 0)) {
			goto label15;
		}

		$A2724e95b275e9d5 = 'Reseller API Adjustment';

		label15:
		if (!(($Caf4325605347834 = self::b349523ECb058d86($Abcb228699a7f743)) && isset($Caf4325605347834['data']))) {
			goto label4;
		}

		goto label26;

		label26:

		if (!is_numeric($E8f21e009ba7a8c5)) {
			goto label4;
		}

		$F26cb152c0824831 = intval($E59d0debc75e7be8['credits']) - intval($E8f21e009ba7a8c5);
		$D2b67ad109197cda = intval($Caf4325605347834['data']['credits']) + intval($E8f21e009ba7a8c5);
		if (!((0 <= $D2b67ad109197cda) && (0 <= $F26cb152c0824831))) {
			goto label110;
		}

		self::$db->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $F26cb152c0824831, $E59d0debc75e7be8['id']);
		goto label66;

		label66:

		self::$db->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $D2b67ad109197cda, $Caf4325605347834['data']['id']);
		self::$db->query('INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);', $Caf4325605347834['data']['id'], $E59d0debc75e7be8['id'], $E8f21e009ba7a8c5, time(), $A2724e95b275e9d5);
		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);', $E59d0debc75e7be8['id'], 'adjust_credits', $Abcb228699a7f743, intval($E8f21e009ba7a8c5), $F26cb152c0824831, time(), json_encode($Caf4325605347834['data']));
		return ['status' => 'STATUS_SUCCESS'];

		label110:

		goto label4;

		label111:
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

goto label603;

label1:

goto label9;

label2:

$A4b9c81b159799b9 = explode(',', XUI::$rRequest['show_columns']);

label9:

if (isset(XUI::$rRequest['hide_columns'])) {
	goto label519;
}

goto label517;

label14:

switch ($dabeadfcc3ba1288) {
case 'packages':
	echo json_encode(APIWrapper::filterRow(APIWrapper::D117E45424fE8F00(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'user_info':
	echo json_encode(APIWrapper::filterRow(APIWrapper::Cc988751EeBbf271(), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'get_lines':
	echo json_encode(APIWrapper::TableAPI('lines', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'get_mags':
	echo json_encode(APIWrapper::TableAPI('mags', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'get_enigmas':
	echo json_encode(APIWrapper::TableAPI('enigmas', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'get_users':
	echo json_encode(APIWrapper::TableAPI('reg_users', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'activity_logs':
	echo json_encode(APIWrapper::TableAPI('line_activity', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'live_connections':
	echo json_encode(APIWrapper::TableAPI('live_connections', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'user_logs':
	echo json_encode(APIWrapper::TableAPI('reg_user_logs', $bcfd61adc96d4b72, $Cc2b5dfe75dc164b, $ba2d146bb5a55097, $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'get_line':
	echo json_encode(APIWrapper::filterRow(APIWrapper::getLine(XUI::$rRequest['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'create_line':
	echo json_encode(APIWrapper::createLine(XUI::$rRequest));
	goto label516;
case 'edit_line':
	$ba2d146bb5a55097 = XUI::$rRequest;
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editLine(XUI::$rRequest['id'], $ba2d146bb5a55097));
	goto label516;
case 'delete_line':
	echo json_encode(APIWrapper::ca81C8F24C099495(XUI::$rRequest['id']));
	goto label516;
case 'disable_line':
	echo json_encode(APIWrapper::disableLine(XUI::$rRequest['id']));
	goto label516;
case 'enable_line':
	echo json_encode(APIWrapper::enableLine(XUI::$rRequest['id']));
	goto label516;
case 'get_mag':
	echo json_encode(APIWrapper::filterRow(APIWrapper::d6bcc99e8BAfa737(XUI::$rRequest['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'create_mag':
	echo json_encode(APIWrapper::createMAG(XUI::$rRequest));
	goto label516;
case 'edit_mag':
	$ba2d146bb5a55097 = XUI::$rRequest;
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editMAG(XUI::$rRequest['id'], $ba2d146bb5a55097));
	goto label516;
case 'delete_mag':
	echo json_encode(APIWrapper::B3E7Cdf7Ac99ab57(XUI::$rRequest['id']));
	goto label516;
case 'disable_mag':
	echo json_encode(APIWrapper::disableMAG(XUI::$rRequest['id']));
	goto label516;
case 'enable_mag':
	echo json_encode(APIWrapper::enableMAG(XUI::$rRequest['id']));
	goto label516;
case 'convert_mag':
	echo json_encode(APIWrapper::convertMAG(XUI::$rRequest['id']));
	goto label516;
case 'get_enigma':
	echo json_encode(APIWrapper::filterRow(APIWrapper::ab9dd80290F141DE(XUI::$rRequest['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'create_enigma':
	echo json_encode(APIWrapper::createEnigma(XUI::$rRequest));
	goto label516;
case 'edit_enigma':
	$ba2d146bb5a55097 = XUI::$rRequest;
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editEnigma(XUI::$rRequest['id'], $ba2d146bb5a55097));
	goto label516;
case 'delete_enigma':
	echo json_encode(APIWrapper::ad38e07A7561aCf3(XUI::$rRequest['id']));
	goto label516;
case 'disable_enigma':
	echo json_encode(APIWrapper::disableEnigma(XUI::$rRequest['id']));
	goto label516;
case 'enable_enigma':
	echo json_encode(APIWrapper::enableEnigma(XUI::$rRequest['id']));
	goto label516;
case 'convert_enigma':
	echo json_encode(APIWrapper::convertEnigma(XUI::$rRequest['id']));
	goto label516;
case 'get_user':
	if (in_array('password', $b0d7495c47b0a0bc)) {
		goto label435;
	}

	$b0d7495c47b0a0bc[] = 'password';

	label435:

	echo json_encode(APIWrapper::filterRow(APIWrapper::B349523ecb058d86($ba2d146bb5a55097['id']), $A4b9c81b159799b9, $b0d7495c47b0a0bc));
	goto label516;
case 'create_user':
	echo json_encode(APIWrapper::createUser($ba2d146bb5a55097));
	goto label516;
case 'edit_user':
	$Abcb228699a7f743 = $ba2d146bb5a55097['id'];
	unset($ba2d146bb5a55097['id']);
	echo json_encode(APIWrapper::editUser($Abcb228699a7f743, $ba2d146bb5a55097));
	goto label516;
case 'delete_user':
	echo json_encode(APIWrapper::D8c5152AAa448BDD($ba2d146bb5a55097['id']));
	goto label516;
case 'disable_user':
	echo json_encode(APIWrapper::disableUser($ba2d146bb5a55097['id']));
	goto label516;
case 'enable_user':
	echo json_encode(APIWrapper::enableUser($ba2d146bb5a55097['id']));
	goto label516;
case 'adjust_credits':
	echo json_encode(APIWrapper::adjustCredits($ba2d146bb5a55097['id'], $ba2d146bb5a55097['credits'], $ba2d146bb5a55097['note'] ?: ''));
	goto label516;
default:
	echo json_encode(['status' => 'STATUS_FAILURE', 'error' => 'Invalid action.']);
	goto label516;
}

label516:

goto label617;

label517:

$b0d7495c47b0a0bc = NULL;
goto label526;

label519:

$b0d7495c47b0a0bc = explode(',', XUI::$rRequest['hide_columns']);

label526:

goto label14;

label527:

foreach (get_defined_constants(true)['user'] as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
	if (!(substr($Bb672d1983256a93, 0, 7) == 'STATUS_')) {
		goto label549;
	}

	$A15af5ebe30b3cdc[intval($ce0840c647e1bbc7)] = $Bb672d1983256a93;

	label549:
}

$ba2d146bb5a55097 = XUI::$rRequest;
goto label556;

label556:

APIWrapper::$db = &$b62d6460eb33ea07;
APIWrapper::$rKey = $ba2d146bb5a55097['api_key'];
if (!empty(XUI::$rRequest['api_key']) && APIWrapper::createSession()) {
	goto label576;
}

echo json_encode(['status' => 'STATUS_FAILURE', 'error' => 'Invalid API key.']);
goto label617;
goto label576;

label576:

$dabeadfcc3ba1288 = $ba2d146bb5a55097['action'];
$bcfd61adc96d4b72 = intval($ba2d146bb5a55097['start']) ?: 0;
$Cc2b5dfe75dc164b = intval($ba2d146bb5a55097['limit']) ?: 50;
unset($ba2d146bb5a55097['api_key']);
goto label594;

label594:

unset($ba2d146bb5a55097['action']);
unset($ba2d146bb5a55097['start']);
unset($ba2d146bb5a55097['limit']);

if (isset(XUI::$rRequest['show_columns'])) {
	goto label2;
}

$A4b9c81b159799b9 = NULL;
goto label1;

label603:

if (defined('XUI_HOME')) {
	goto label612;
}

define('XUI_HOME', '/home/xui/');

label612:

require_once XUI_HOME . 'includes/admin.php';
$A15af5ebe30b3cdc = [];
goto label527;

label617:

?>