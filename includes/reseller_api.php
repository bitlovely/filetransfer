<?php


class ResellerAPI
{
	static public $db;
	static public $rSettings = [];
	static public $rServers = [];
	static public $rProxyServers = [];
	static public $rUserInfo = [];
	static public $rPermissions = [];

	static public function processData($A7d54b094ae83c95, $ba2d146bb5a55097)
	{
		$F647a429f8089f01 = [
			'line'    => ['edit', 'trial', 'bouquets_selected', 'pair_id', 'username', 'password', 'member_id', 'package', 'contact', 'reseller_notes', 'allowed_ips', 'allowed_ua', 'bypass_ua', 'is_isplock', 'isp_clear'],
			'mag'     => ['edit', 'trial', 'bouquets_selected', 'pair_id', 'mac', 'member_id', 'package', 'parent_password', 'sn', 'stb_type', 'image_version', 'hw_version', 'device_id', 'device_id2', 'ver', 'reseller_notes', 'allowed_ips', 'is_isplock', 'isp_clear'],
			'enigma'  => ['edit', 'trial', 'bouquets_selected', 'pair_id', 'mac', 'member_id', 'package', 'modem_mac', 'local_ip', 'enigma_version', 'cpu', 'lversion', 'token', 'reseller_notes', 'allowed_ips', 'is_isplock', 'isp_clear'],
			'user'    => ['edit', 'username', 'password', 'owner_id', 'email', 'reseller_dns', 'notes', 'member_group_id'],
			'ticket'  => ['edit', 'message', 'title', 'respond'],
			'profile' => ['email', 'password', 'api_key', 'reseller_dns', 'theme', 'hue', 'timezone']
		];

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			if (in_array($Bb672d1983256a93, $F647a429f8089f01[$A7d54b094ae83c95])) {
				goto label15;
			}

			unset($ba2d146bb5a55097[$Bb672d1983256a93]);

			label15:
		}

		return $ba2d146bb5a55097;
	}

	static public function init($f7107e3a92443147 = NULL)
	{
		self::$rSettings = CDBe6bC7B26C4902();
		self::$rServers = c6A90bFcD425EB63();
		self::$rProxyServers = E988f4dE594A8e78();
		if (!(!$f7107e3a92443147 && isset($_SESSION['reseller']))) {
			goto label24;
		}

		$f7107e3a92443147 = $_SESSION['reseller'];

		label24:

		if (!$f7107e3a92443147) {
			goto label52;
		}

		self::$rUserInfo = ba89228Dc958CE05($f7107e3a92443147);
		self::$rPermissions = array_merge(acEb5CFe4194f4f0(self::$rUserInfo['member_group_id']) ?: [], a0BB5AdF0f9ccC8E(self::$rUserInfo['id']) ?: []);

		label52:
	}

	static public function d587583533e150C8($ba2d146bb5a55097)
	{
		goto label38;

		label2:

		return ['status' => STATUS_INVALID_PASSWORD];

		label5:

		$fd093b5358e9a519 = dEba522c14d0644c($ba2d146bb5a55097['password']);

		label10:
		if (!(!ctype_xdigit($ba2d146bb5a55097['api_key']) || (strlen($ba2d146bb5a55097['api_key']) != 32))) {
			goto label28;
		}

		goto label26;

		label26:

		$ba2d146bb5a55097['api_key'] = '';

		label28:

		if (in_array($ba2d146bb5a55097['hue'], $f1b18060c577d4da)) {
			goto label37;
		}

		$ba2d146bb5a55097['hue'] = '';

		label37:

		goto label65;

		label38:

		global $f1b18060c577d4da;
		$ba2d146bb5a55097 = self::processData('profile', $ba2d146bb5a55097);
		if (!((0 < strlen($ba2d146bb5a55097['email'])) && !filter_var($ba2d146bb5a55097['email'], FILTER_VALIDATE_EMAIL))) {
			goto label64;
		}

		return ['status' => STATUS_INVALID_EMAIL];

		label64:

		goto label98;

		label65:

		if (in_array($ba2d146bb5a55097['theme'], [0, 1])) {
			goto label74;
		}

		$ba2d146bb5a55097['theme'] = 0;

		label74:

		self::$db->query('UPDATE `users` SET `password` = ?, `email` = ?, `reseller_dns` = ?, `theme` = ?, `hue` = ?, `timezone` = ?, `api_key` = ? WHERE `id` = ?;', $fd093b5358e9a519, $ba2d146bb5a55097['email'], $ba2d146bb5a55097['reseller_dns'], $ba2d146bb5a55097['theme'], $ba2d146bb5a55097['hue'], $ba2d146bb5a55097['timezone'], $ba2d146bb5a55097['api_key'], self::$rUserInfo['id']);
		return ['status' => STATUS_SUCCESS];
		goto label131;

		label98:

		if (0 < strlen($ba2d146bb5a55097['password'])) {
			goto label109;
		}

		$fd093b5358e9a519 = self::$rUserInfo['password'];
		goto label10;

		label109:
		if (!((strlen($ba2d146bb5a55097['password']) < intval(self::$rPermissions['minimum_password_length'])) && (0 < intval(self::$rPermissions['minimum_password_length'])))) {
			goto label5;
		}

		goto label2;

		label131:
	}

	static public function E10e6F46945857eb($ba2d146bb5a55097)
	{
		goto label104;

		label2:

		if (!self::$rSettings['save_login_logs']) {
			goto label20;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'RESELLER\', ?, ?, ?, ?, ?);', $Ae7171937d7e569f['id'], $E59d0debc75e7be8['id'], 'NOT_ADMIN', $b38e11ffdc6a3abb, time());

		label20:

		return ['status' => STATUS_NOT_RESELLER];
		goto label64;
		goto label130;

		label25:
		if (in_array($E59d0debc75e7be8['member_group_id'], json_decode($Ae7171937d7e569f['groups'], true)) || (count(Cdf3aaB9A6eddF47()) == 0)) {
			goto label245;
		}

		if (!self::$rSettings['save_login_logs']) {
			goto label63;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'RESELLER\', ?, ?, ?, ?, ?);', $Ae7171937d7e569f['id'], $E59d0debc75e7be8['id'], 'INVALID_CODE', $b38e11ffdc6a3abb, time());

		label63:

		goto label241;

		label64:

		goto label254;

		label65:

		$b38e11ffdc6a3abb = DFaC1B11d332c193();
		$E59d0debc75e7be8 = ADC21ef12C018A4c($ba2d146bb5a55097['username'], $ba2d146bb5a55097['password']);
		$Ae7171937d7e569f = C9359222B3E3d256(true);

		if (isset($E59d0debc75e7be8)) {
			goto label25;
		}

		goto label83;

		label83:

		if (!self::$rSettings['save_login_logs']) {
			goto label99;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'RESELLER\', ?, 0, ?, ?, ?);', $Ae7171937d7e569f['id'], 'INVALID_LOGIN', $b38e11ffdc6a3abb, time());

		label99:

		return ['status' => STATUS_FAILURE];
		goto label64;
		goto label25;

		label104:

		if (!self::$rSettings['recaptcha_enable']) {
			goto label65;
		}

		$Fca04b1755da7bd5 = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . self::$rSettings['recaptcha_v2_secret_key'] . '&response=' . $ba2d146bb5a55097['g-recaptcha-response']), true);

		if ($Fca04b1755da7bd5['success']) {
			goto label129;
		}

		return ['status' => STATUS_INVALID_CAPTCHA];

		label129:

		goto label65;

		label130:

		if ($E59d0debc75e7be8['status'] == 1) {
			goto label219;
		}
		if (!($db0a61ef32b89a27 && (($db0a61ef32b89a27['is_admin'] || $db0a61ef32b89a27['is_reseller']) && !$E59d0debc75e7be8['status']))) {
			goto label218;
		}

		if (!self::$rSettings['save_login_logs']) {
			goto label215;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'RESELLER\', ?, ?, ?, ?, ?);', $Ae7171937d7e569f['id'], $E59d0debc75e7be8['id'], 'DISABLED', $b38e11ffdc6a3abb, time());
		goto label215;

		label166:

		$_SESSION['rverify'] = md5($E59d0debc75e7be8['username'] . '||' . $fc88aeb7b0e77a48);

		if (!self::$rSettings['save_login_logs']) {
			goto label193;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'RESELLER\', ?, ?, ?, ?, ?);', $Ae7171937d7e569f['id'], $E59d0debc75e7be8['id'], 'SUCCESS', $b38e11ffdc6a3abb, time());

		label193:

		return ['status' => STATUS_SUCCESS];
		goto label64;

		label197:

		$fc88aeb7b0e77a48 = DebA522c14d0644C($ba2d146bb5a55097['password']);

		if ($E59d0debc75e7be8['password'] != $fc88aeb7b0e77a48) {
			goto label214;
		}

		self::$db->query('UPDATE `users` SET `last_login` = UNIX_TIMESTAMP(), `ip` = ? WHERE `id` = ?;', $b38e11ffdc6a3abb, $E59d0debc75e7be8['id']);
		goto label228;

		label214:

		goto label220;

		label215:

		return ['status' => STATUS_DISABLED];

		label218:

		goto label64;

		label219:

		goto label197;

		label220:

		self::$db->query('UPDATE `users` SET `password` = ?, `last_login` = UNIX_TIMESTAMP(), `ip` = ? WHERE `id` = ?;', $fc88aeb7b0e77a48, $b38e11ffdc6a3abb, $E59d0debc75e7be8['id']);

		label228:

		$_SESSION['reseller'] = $E59d0debc75e7be8['id'];
		$_SESSION['rip'] = $b38e11ffdc6a3abb;
		$_SESSION['rcode'] = c9359222B3E3D256();
		goto label166;

		label241:

		return ['status' => STATUS_INVALID_CODE];
		goto label64;

		label245:

		$db0a61ef32b89a27 = AceB5cfe4194F4f0($E59d0debc75e7be8['member_group_id']);

		if ($db0a61ef32b89a27['is_reseller']) {
			goto label130;
		}

		goto label2;

		label254:
	}

	static public function b087c00f20554A9b($ba2d146bb5a55097)
	{
		goto label68;

		label2:

		if (!isset($f63b4ada8c9b56fa['id'])) {
			goto label783;
		}
		if (!(isset($ba2d146bb5a55097['edit']) && $f63b4ada8c9b56fa['package_id'])) {
			goto label446;
		}

		$cc386f9ba082650e = FDdF8DA6AB3Fe47b($f63b4ada8c9b56fa['package_id']);
		$Df5cd7b5dc4cc10c = array_values(json_decode($cc386f9ba082650e['bouquets'], true));
		if (!(self::$rPermissions['allow_change_bouquets'] && (0 < count($ba2d146bb5a55097['bouquets_selected'])))) {
			goto label422;
		}

		goto label757;

		label40:

		$Fac87d38f7786df0 = C483a3A59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `mag_devices`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label641;
		}

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label640;
		}

		self::$db->query('DELETE FROM `lines` WHERE `id` = ?;', $E5b50d60c471d7d6);
		goto label640;

		label68:

		$ba2d146bb5a55097 = self::processData('mag', $ba2d146bb5a55097);

		if (self::$rPermissions['create_mag']) {
			goto label78;
		}

		return false;

		label78:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label227;
		}

		goto label789;

		label82:

		$f63b4ada8c9b56fa['pair_id'] = intval($ba2d146bb5a55097['pair_id']);

		label88:

		$Fac87d38f7786df0 = C483a3a59265139E($f63b4ada8c9b56fa);
		$B91645b8411dc88c = 'REPLACE INTO `lines`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
		goto label682;

		label100:

		$cc386f9ba082650e = fDdF8dA6AB3fe47B($ba2d146bb5a55097['package']);

		if ($cc386f9ba082650e['is_mag']) {
			goto label112;
		}

		return ['status' => STATUS_INVALID_TYPE, 'data' => $ba2d146bb5a55097];

		label112:

		goto label273;

		label113:

		if ($c9da08d48008775a <= intval(self::$rUserInfo['credits'])) {
			goto label126;
		}

		return ['status' => STATUS_INSUFFICIENT_CREDITS, 'data' => $ba2d146bb5a55097];
		goto label510;

		label126:

		if ($ba2d146bb5a55097['trial']) {
			goto label817;
		}

		goto label319;

		label130:

		$f63b4ada8c9b56fa['bouquet'] = sortArrayByArray($Df5cd7b5dc4cc10c, array_keys(BcA35e1D9E85240c()));
		$f63b4ada8c9b56fa['bouquet'] = '[' . implode(',', array_map('intval', $f63b4ada8c9b56fa['bouquet'])) . ']';
		$f63b4ada8c9b56fa['max_connections'] = $cc386f9ba082650e['max_connections'];
		$f63b4ada8c9b56fa['is_restreamer'] = $cc386f9ba082650e['is_restreamer'];
		goto label501;

		label161:

		$f63b4ada8c9b56fa['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in']);
		goto label193;

		label175:

		$f63b4ada8c9b56fa['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in'], intval($f63b4ada8c9b56fa['exp_date']));

		label193:

		goto label814;

		label194:

		$f63b4ada8c9b56fa['is_mag'] = 1;
		$f63b4ada8c9b56fa['is_e2'] = 0;
		$ba4f280bd137bfad = e167d33DBf12d418(self::$rUserInfo['id']);

		if (!empty($ba2d146bb5a55097['package'])) {
			goto label100;
		}

		goto label2;

		label209:

		$f63b4ada8c9b56fa['member_id'] = $C0a1fd30f0173389;

		label211:

		if (!self::$rPermissions['allow_restrictions']) {
			goto label468;
		}

		if (isset($ba2d146bb5a55097['allowed_ips'])) {
			goto label617;
		}

		goto label614;

		label220:

		$f63b4ada8c9b56fa['created_at'] = time();
		unset($F647a429f8089f01['mag_id']);
		unset($f63b4ada8c9b56fa['id']);
		goto label194;

		label227:

		goto label477;

		label228:

		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, null, ?, ?, ?, ?);', self::$rUserInfo['id'], 'edit', $E5b50d60c471d7d6, 0, self::$rUserInfo['credits'], time(), json_encode($ba2d146bb5a55097));
		goto label535;

		label249:

		$D2b67ad109197cda = intval(self::$rUserInfo['credits']) - intval($c9da08d48008775a);
		self::$db->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $D2b67ad109197cda, self::$rUserInfo['id']);
		goto label831;

		label268:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label840;

		label273:
		if ((0 < intval($f63b4ada8c9b56fa['package_id'])) && $cc386f9ba082650e['check_compatible']) {
			goto label285;
		}

		$ec173304ea5bcb05 = true;
		goto label736;

		label285:

		$ec173304ea5bcb05 = dbA308160c3f6ca5($f63b4ada8c9b56fa['package_id'], $cc386f9ba082650e['id']);
		goto label736;

		label293:

		$Cd826a7439b979ee = [];
		$A0230b5ec5f4044b = json_decode($cc386f9ba082650e['output_formats'], true);

		foreach ($A0230b5ec5f4044b as $D7c990ef7ca44a60) {
			$Cd826a7439b979ee[] = $D7c990ef7ca44a60;
		}

		$f63b4ada8c9b56fa['allowed_outputs'] = '[' . implode(',', array_map('intval', $Cd826a7439b979ee)) . ']';
		goto label561;

		label319:
		if (isset($f63b4ada8c9b56fa['id']) && $ec173304ea5bcb05) {
			goto label338;
		}

		$f63b4ada8c9b56fa['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in']);
		goto label814;

		label338:

		if (time() <= $f63b4ada8c9b56fa['exp_date']) {
			goto label175;
		}

		goto label161;

		label345:

		$A7d54b094ae83c95 = 'edit';
		goto label348;

		label347:

		$A7d54b094ae83c95 = 'extend';

		label348:

		goto label511;

		label349:

		if ($ba2d146bb5a55097['trial']) {
			goto label657;
		}

		$dd3211a322da8474 = json_decode(self::$rUserInfo['override_packages'], true);
		if (isset($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']) && (0 < strlen($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']))) {
			goto label649;
		}

		$c9da08d48008775a = intval($cc386f9ba082650e['official_credits']);
		goto label656;
		goto label649;

		label380:

		$F647a429f8089f01['mac'] = $ba2d146bb5a55097['mac'];
		if (isset($ba2d146bb5a55097['pair_id']) && e589a4bf54a2DAd1('line', $ba2d146bb5a55097['pair_id'])) {
			goto label82;
		}

		$f63b4ada8c9b56fa['pair_id'] = NULL;
		goto label88;
		goto label82;

		label397:

		$f63b4ada8c9b56fa['is_trial'] = 1;

		label399:

		$Df5cd7b5dc4cc10c = array_values(json_decode($cc386f9ba082650e['bouquets'], true));
		if (!(self::$rPermissions['allow_change_bouquets'] && (0 < count($ba2d146bb5a55097['bouquets_selected'])))) {
			goto label130;
		}

		$b168b0dd4c8719d2 = [];
		goto label658;

		label422:

		$f63b4ada8c9b56fa['bouquet'] = sortArrayByArray($Df5cd7b5dc4cc10c, array_keys(bCa35E1d9E85240C()));
		$f63b4ada8c9b56fa['bouquet'] = '[' . implode(',', array_map('intval', $f63b4ada8c9b56fa['bouquet'])) . ']';

		label446:

		goto label782;

		label447:

		$f63b4ada8c9b56fa['reseller_notes'] = $ba2d146bb5a55097['reseller_notes'];
		$C0a1fd30f0173389 = $ba2d146bb5a55097['member_id'];

		if (e589A4bf54a2DAd1('user', $C0a1fd30f0173389)) {
			goto label209;
		}

		$f63b4ada8c9b56fa['member_id'] = self::$rUserInfo['id'];
		goto label211;
		goto label209;

		label464:

		$f63b4ada8c9b56fa['isp_desc'] = '';
		$f63b4ada8c9b56fa['as_number'] = NULL;

		label468:

		if (filter_var($ba2d146bb5a55097['mac'], FILTER_VALIDATE_MAC)) {
			goto label591;
		}

		goto label587;

		label477:

		$F647a429f8089f01 = A32d85AEfA28959d($ba2d146bb5a55097['edit']);
		if (!(!$F647a429f8089f01 || !E589A4bF54a2DAd1('line', $F647a429f8089f01['user_id']))) {
			goto label495;
		}

		return false;

		label495:

		$f63b4ada8c9b56fa = b5AD1d95a92Ce732($F647a429f8089f01['user_id']);
		goto label194;

		label501:

		$f63b4ada8c9b56fa['force_server_id'] = $cc386f9ba082650e['force_server_id'];
		$f63b4ada8c9b56fa['forced_country'] = $cc386f9ba082650e['forced_country'];
		$f63b4ada8c9b56fa['is_isplock'] = $cc386f9ba082650e['is_isplock'];

		label510:

		goto label293;

		label511:

		$ba2d146bb5a55097 = a32D85AEfA28959d($E5b50d60c471d7d6);
		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'mag\', ?, ?, ?, ?, ?, ?, ?);', self::$rUserInfo['id'], $A7d54b094ae83c95, $E5b50d60c471d7d6, $cc386f9ba082650e['id'], $c9da08d48008775a, $D2b67ad109197cda, time(), json_encode($ba2d146bb5a55097));

		label535:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];
		goto label268;

		label541:

		self::$db->query('SELECT `mag_id` FROM `mag_devices` WHERE mac = ? AND `mag_id` <> ? LIMIT 1;', $F647a429f8089f01['mac'], $ba2d146bb5a55097['edit']);

		label549:

		if (!(0 < self::$db->num_rows())) {
			goto label380;
		}

		return ['status' => STATUS_EXISTS_MAC, 'data' => $ba2d146bb5a55097];
		goto label380;

		label561:

		$f63b4ada8c9b56fa['package_id'] = $cc386f9ba082650e['id'];
		$F647a429f8089f01['lock_device'] = $cc386f9ba082650e['lock_device'];

		label567:

		foreach (['parent_password', 'sn', 'stb_type', 'image_version', 'hw_version', 'device_id', 'device_id2', 'ver'] as $Bb672d1983256a93) {
			$F647a429f8089f01[$Bb672d1983256a93] = $ba2d146bb5a55097[$Bb672d1983256a93];
		}

		goto label447;

		label575:

		if ($ba4f280bd137bfad) {
			goto label581;
		}

		return ['status' => STATUS_NO_TRIALS, 'data' => $ba2d146bb5a55097];

		label581:

		$c9da08d48008775a = intval($cc386f9ba082650e['trial_credits']);

		label586:

		goto label113;

		label587:

		return ['status' => STATUS_INVALID_MAC, 'data' => $ba2d146bb5a55097];

		label591:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label541;
		}

		self::$db->query('SELECT `mag_id` FROM `mag_devices` WHERE mac = ? LIMIT 1;', $F647a429f8089f01['mac']);
		goto label549;
		goto label541;

		label602:

		goto label605;

		label603:

		$f63b4ada8c9b56fa['is_isplock'] = 1;

		label605:

		if (!(strlen($ba2d146bb5a55097['isp_clear']) == 0)) {
			goto label468;
		}

		goto label464;

		label614:

		$f63b4ada8c9b56fa['allowed_ips'] = '[]';
		goto label634;

		label617:

		if (is_array($ba2d146bb5a55097['allowed_ips'])) {
			goto label628;
		}

		$ba2d146bb5a55097['allowed_ips'] = [$ba2d146bb5a55097['allowed_ips']];
		goto label628;

		label628:

		$f63b4ada8c9b56fa['allowed_ips'] = json_encode($ba2d146bb5a55097['allowed_ips']);

		label634:

		if (isset($ba2d146bb5a55097['is_isplock'])) {
			goto label603;
		}

		$f63b4ada8c9b56fa['is_isplock'] = 0;
		goto label602;

		label640:

		goto label268;

		label641:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();

		if (isset($cc386f9ba082650e)) {
			goto label249;
		}

		goto label228;

		label649:

		$c9da08d48008775a = intval($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']);

		label656:

		goto label586;

		label657:

		goto label575;

		label658:

		foreach ($ba2d146bb5a55097['bouquets_selected'] as $b5fd3e3f0096d7f4) {
			if (!in_array($b5fd3e3f0096d7f4, $Df5cd7b5dc4cc10c)) {
				goto label671;
			}

			$b168b0dd4c8719d2[] = $b5fd3e3f0096d7f4;

			label671:
		}

		if (!(0 < count($b168b0dd4c8719d2))) {
			goto label681;
		}

		$Df5cd7b5dc4cc10c = $b168b0dd4c8719d2;

		label681:

		goto label130;

		label682:

		if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label268;
		}

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		bd08b9c71A1CA5F5($E5b50d60c471d7d6);
		self::$db->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', SERVER_ID, time(), json_encode(['type' => 'update_line', 'id' => $E5b50d60c471d7d6]));
		$F647a429f8089f01['user_id'] = $E5b50d60c471d7d6;
		goto label716;

		label716:

		unset($F647a429f8089f01['user']);
		unset($F647a429f8089f01['paired']);

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label735;
		}

		$F647a429f8089f01['sn'] = $F647a429f8089f01['image_version'] = $F647a429f8089f01['stb_type'] = $F647a429f8089f01['hw_version'] = $F647a429f8089f01['device_id'] = $F647a429f8089f01['device_id2'] = $F647a429f8089f01['ver'] = '';

		label735:

		goto label40;

		label736:
		if ($cc386f9ba082650e && in_array(self::$rUserInfo['member_group_id'], json_decode($cc386f9ba082650e['groups'], true))) {
			goto label756;
		}

		return ['status' => STATUS_INVALID_PACKAGE, 'data' => $ba2d146bb5a55097];
		goto label510;

		label756:

		goto label349;

		label757:

		$b168b0dd4c8719d2 = [];

		foreach ($ba2d146bb5a55097['bouquets_selected'] as $b5fd3e3f0096d7f4) {
			if (!in_array($b5fd3e3f0096d7f4, $Df5cd7b5dc4cc10c)) {
				goto label771;
			}

			$b168b0dd4c8719d2[] = $b5fd3e3f0096d7f4;

			label771:
		}

		if (!(0 < count($b168b0dd4c8719d2))) {
			goto label422;
		}

		$Df5cd7b5dc4cc10c = $b168b0dd4c8719d2;
		goto label422;

		label782:

		goto label787;

		label783:

		return ['status' => STATUS_INVALID_PACKAGE, 'data' => $ba2d146bb5a55097];

		label787:

		goto label567;
		goto label100;

		label789:

		$F647a429f8089f01 = C73ed8D0b70Ce12f('mag_devices', $ba2d146bb5a55097);
		$F647a429f8089f01['theme_type'] = self::$rSettings['mag_default_type'];
		$f63b4ada8c9b56fa = C73eD8d0B70ce12F('lines', $ba2d146bb5a55097);
		$f63b4ada8c9b56fa['username'] = Fc34407B2842461b(32);
		$f63b4ada8c9b56fa['password'] = fC34407B2842461B(32);
		goto label220;

		label814:

		$f63b4ada8c9b56fa['is_trial'] = 0;
		goto label399;

		label817:

		$f63b4ada8c9b56fa['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['trial_duration']) . ' ' . $cc386f9ba082650e['trial_duration_in']);
		goto label397;

		label831:

		if (isset($F647a429f8089f01['id'])) {
			goto label836;
		}

		$A7d54b094ae83c95 = 'new';
		goto label511;

		label836:

		if ($f63b4ada8c9b56fa['package_id']) {
			goto label347;
		}

		goto label345;

		label840:
	}

	static public function F5D44be8b59F4E62($ba2d146bb5a55097)
	{
		goto label172;

		label2:

		unset($F647a429f8089f01['paired']);

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label18;
		}

		$F647a429f8089f01['modem_mac'] = $F647a429f8089f01['local_ip'] = $F647a429f8089f01['enigma_version'] = $F647a429f8089f01['cpu'] = $F647a429f8089f01['lversion'] = $F647a429f8089f01['token'] = '';

		label18:

		$Fac87d38f7786df0 = c483A3A59265139E($F647a429f8089f01);
		goto label29;

		label23:

		return ['status' => STATUS_INVALID_PACKAGE, 'data' => $ba2d146bb5a55097];

		label27:

		goto label272;

		label28:

		goto label385;

		label29:

		$B91645b8411dc88c = 'REPLACE INTO `enigma2_devices`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label144;
		}

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label52;
		}

		self::$db->query('DELETE FROM `lines` WHERE `id` = ?;', $E5b50d60c471d7d6);

		label52:

		goto label143;

		label53:

		self::$db->query('SELECT `device_id` FROM `enigma2_devices` WHERE mac = ? AND `device_id` <> ? LIMIT 1;', $F647a429f8089f01['mac'], $ba2d146bb5a55097['edit']);

		label61:

		if (!(0 < self::$db->num_rows())) {
			goto label72;
		}

		return ['status' => STATUS_EXISTS_MAC, 'data' => $ba2d146bb5a55097];

		label72:

		goto label249;

		label73:

		$f63b4ada8c9b56fa['bouquet'] = sortArrayByArray($Df5cd7b5dc4cc10c, array_keys(bcA35e1D9E85240c()));
		$f63b4ada8c9b56fa['bouquet'] = '[' . implode(',', array_map('intval', $f63b4ada8c9b56fa['bouquet'])) . ']';

		label97:

		goto label27;
		goto label23;

		label99:
		if (!(isset($ba2d146bb5a55097['edit']) && $f63b4ada8c9b56fa['package_id'])) {
			goto label97;
		}

		$cc386f9ba082650e = fDdf8dA6ab3Fe47B($f63b4ada8c9b56fa['package_id']);
		$Df5cd7b5dc4cc10c = array_values(json_decode($cc386f9ba082650e['bouquets'], true));
		if (!(self::$rPermissions['allow_change_bouquets'] && (0 < count($ba2d146bb5a55097['bouquets_selected'])))) {
			goto label73;
		}

		$b168b0dd4c8719d2 = [];
		goto label481;

		label134:

		if (!(0 < count($b168b0dd4c8719d2))) {
			goto label142;
		}

		$Df5cd7b5dc4cc10c = $b168b0dd4c8719d2;

		label142:

		goto label754;

		label143:

		goto label656;

		label144:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();

		if (isset($cc386f9ba082650e)) {
			goto label560;
		}

		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'enigma\', ?, ?, null, ?, ?, ?, ?);', self::$rUserInfo['id'], 'edit', $E5b50d60c471d7d6, 0, self::$rUserInfo['credits'], time(), json_encode($ba2d146bb5a55097));
		goto label559;

		label172:

		$ba2d146bb5a55097 = self::processData('enigma', $ba2d146bb5a55097);

		if (self::$rPermissions['create_enigma']) {
			goto label182;
		}

		return false;

		label182:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label446;
		}

		goto label186;

		label186:

		$F647a429f8089f01 = C73ED8D0b70ce12f('enigma2_devices', $ba2d146bb5a55097);
		$f63b4ada8c9b56fa = c73eD8d0b70Ce12f('lines', $ba2d146bb5a55097);
		$f63b4ada8c9b56fa['username'] = Fc34407b2842461B(32);
		$f63b4ada8c9b56fa['password'] = Fc34407B2842461B(32);
		$f63b4ada8c9b56fa['created_at'] = time();
		goto label443;

		label211:

		$Df5cd7b5dc4cc10c = array_values(json_decode($cc386f9ba082650e['bouquets'], true));
		if (!(self::$rPermissions['allow_change_bouquets'] && (0 < count($ba2d146bb5a55097['bouquets_selected'])))) {
			goto label142;
		}

		$b168b0dd4c8719d2 = [];

		foreach ($ba2d146bb5a55097['bouquets_selected'] as $b5fd3e3f0096d7f4) {
			if (!in_array($b5fd3e3f0096d7f4, $Df5cd7b5dc4cc10c)) {
				goto label246;
			}

			$b168b0dd4c8719d2[] = $b5fd3e3f0096d7f4;

			label246:
		}

		goto label134;

		label249:

		$F647a429f8089f01['mac'] = $ba2d146bb5a55097['mac'];
		if (isset($ba2d146bb5a55097['pair_id']) && E589A4bF54A2DaD1('line', $ba2d146bb5a55097['pair_id'])) {
			goto label265;
		}

		$f63b4ada8c9b56fa['pair_id'] = NULL;
		goto label526;

		label265:

		goto label520;

		label266:

		goto label268;

		label267:

		$A7d54b094ae83c95 = 'extend';

		label268:

		goto label627;

		label269:

		$F647a429f8089f01['lock_device'] = $cc386f9ba082650e['lock_device'];

		label272:

		foreach (['modem_mac', 'local_ip', 'enigma_version', 'cpu', 'lversion', 'token'] as $Bb672d1983256a93) {
			$F647a429f8089f01[$Bb672d1983256a93] = $ba2d146bb5a55097[$Bb672d1983256a93];
		}

		$f63b4ada8c9b56fa['reseller_notes'] = $ba2d146bb5a55097['reseller_notes'];
		goto label306;

		label283:

		$ec173304ea5bcb05 = true;
		goto label292;

		label285:

		$ec173304ea5bcb05 = DbA308160c3f6CA5($f63b4ada8c9b56fa['package_id'], $cc386f9ba082650e['id']);

		label292:

		goto label348;

		label293:

		$f63b4ada8c9b56fa['forced_country'] = $cc386f9ba082650e['forced_country'];
		$f63b4ada8c9b56fa['is_isplock'] = $cc386f9ba082650e['is_isplock'];

		label299:

		$Cd826a7439b979ee = [];
		goto label320;

		label301:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label834;

		label306:

		$C0a1fd30f0173389 = $ba2d146bb5a55097['member_id'];

		if (e589A4bF54A2DAd1('user', $C0a1fd30f0173389)) {
			goto label319;
		}

		$f63b4ada8c9b56fa['member_id'] = self::$rUserInfo['id'];
		goto label743;

		label319:

		goto label741;

		label320:

		$A0230b5ec5f4044b = json_decode($cc386f9ba082650e['output_formats'], true);

		foreach ($A0230b5ec5f4044b as $D7c990ef7ca44a60) {
			$Cd826a7439b979ee[] = $D7c990ef7ca44a60;
		}

		$f63b4ada8c9b56fa['allowed_outputs'] = '[' . implode(',', array_map('intval', $Cd826a7439b979ee)) . ']';
		$f63b4ada8c9b56fa['package_id'] = $cc386f9ba082650e['id'];
		goto label269;

		label348:
		if ($cc386f9ba082650e && in_array(self::$rUserInfo['member_group_id'], json_decode($cc386f9ba082650e['groups'], true))) {
			goto label368;
		}

		return ['status' => STATUS_INVALID_PACKAGE, 'data' => $ba2d146bb5a55097];
		goto label299;

		label368:

		if ($ba2d146bb5a55097['trial']) {
			goto label478;
		}

		goto label408;

		label372:

		$f63b4ada8c9b56fa['is_isplock'] = 1;

		label374:

		if (!(strlen($ba2d146bb5a55097['isp_clear']) == 0)) {
			goto label507;
		}

		$f63b4ada8c9b56fa['isp_desc'] = '';
		goto label505;

		label385:

		$cc386f9ba082650e = fdDF8Da6Ab3Fe47b($ba2d146bb5a55097['package']);

		if ($cc386f9ba082650e['is_e2']) {
			goto label397;
		}

		return ['status' => STATUS_INVALID_TYPE, 'data' => $ba2d146bb5a55097];

		label397:
		if ((0 < intval($f63b4ada8c9b56fa['package_id'])) && $cc386f9ba082650e['check_compatible']) {
			goto label285;
		}

		goto label283;

		label408:

		$dd3211a322da8474 = json_decode(self::$rUserInfo['override_packages'], true);
		if (isset($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']) && (0 < strlen($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']))) {
			goto label435;
		}

		$c9da08d48008775a = intval($cc386f9ba082650e['official_credits']);
		goto label477;

		label435:

		goto label470;

		label436:

		$A7d54b094ae83c95 = 'new';
		goto label268;

		label438:

		if ($F647a429f8089f01['package_id']) {
			goto label267;
		}

		$A7d54b094ae83c95 = 'edit';
		goto label266;

		label443:

		unset($F647a429f8089f01['device_id']);
		unset($f63b4ada8c9b56fa['id']);
		goto label701;

		label446:

		$F647a429f8089f01 = eF70A93e98fb7CE9($ba2d146bb5a55097['edit']);
		goto label683;

		label452:

		return ['status' => STATUS_NO_TRIALS, 'data' => $ba2d146bb5a55097];

		label456:

		$c9da08d48008775a = intval($cc386f9ba082650e['trial_credits']);

		label461:

		if ($c9da08d48008775a <= intval(self::$rUserInfo['credits'])) {
			goto label825;
		}

		goto label820;

		label470:

		$c9da08d48008775a = intval($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']);

		label477:

		goto label461;

		label478:

		if ($ba4f280bd137bfad) {
			goto label456;
		}

		goto label452;

		label481:

		foreach ($ba2d146bb5a55097['bouquets_selected'] as $b5fd3e3f0096d7f4) {
			if (!in_array($b5fd3e3f0096d7f4, $Df5cd7b5dc4cc10c)) {
				goto label494;
			}

			$b168b0dd4c8719d2[] = $b5fd3e3f0096d7f4;

			label494:
		}

		if (!(0 < count($b168b0dd4c8719d2))) {
			goto label504;
		}

		$Df5cd7b5dc4cc10c = $b168b0dd4c8719d2;

		label504:

		goto label73;

		label505:

		$f63b4ada8c9b56fa['as_number'] = NULL;

		label507:

		if (filter_var($ba2d146bb5a55097['mac'], FILTER_VALIDATE_MAC)) {
			goto label582;
		}

		return ['status' => STATUS_INVALID_MAC, 'data' => $ba2d146bb5a55097];
		goto label582;

		label520:

		$f63b4ada8c9b56fa['pair_id'] = intval($ba2d146bb5a55097['pair_id']);

		label526:

		$Fac87d38f7786df0 = c483a3A59265139e($f63b4ada8c9b56fa);
		$B91645b8411dc88c = 'REPLACE INTO `lines`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label301;
		}

		goto label657;

		label547:

		goto label794;

		label548:

		if (is_array($ba2d146bb5a55097['allowed_ips'])) {
			goto label558;
		}

		$ba2d146bb5a55097['allowed_ips'] = [$ba2d146bb5a55097['allowed_ips']];

		label558:

		goto label788;

		label559:

		goto label651;

		label560:

		$D2b67ad109197cda = intval(self::$rUserInfo['credits']) - intval($c9da08d48008775a);
		self::$db->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $D2b67ad109197cda, self::$rUserInfo['id']);

		if (isset($F647a429f8089f01['id'])) {
			goto label438;
		}

		goto label436;

		label582:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label592;
		}

		self::$db->query('SELECT `device_id` FROM `enigma2_devices` WHERE mac = ? LIMIT 1;', $F647a429f8089f01['mac']);
		goto label61;

		label592:

		goto label53;

		label593:

		$f63b4ada8c9b56fa['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in']);
		goto label721;

		label607:

		if (time() <= $f63b4ada8c9b56fa['exp_date']) {
			goto label703;
		}

		$f63b4ada8c9b56fa['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in']);
		goto label702;

		label627:

		$ba2d146bb5a55097 = EF70a93e98FB7CE9($E5b50d60c471d7d6);
		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'enigma\', ?, ?, ?, ?, ?, ?, ?);', self::$rUserInfo['id'], $A7d54b094ae83c95, $E5b50d60c471d7d6, $cc386f9ba082650e['id'], $c9da08d48008775a, $D2b67ad109197cda, time(), json_encode($ba2d146bb5a55097));

		label651:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label656:

		goto label301;

		label657:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		bd08b9C71A1cA5f5($E5b50d60c471d7d6);
		self::$db->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', SERVER_ID, time(), json_encode(['type' => 'update_line', 'id' => $E5b50d60c471d7d6]));
		$F647a429f8089f01['user_id'] = $E5b50d60c471d7d6;
		unset($F647a429f8089f01['user']);
		goto label2;

		label683:
		if (!(!$F647a429f8089f01 || !e589A4Bf54a2DAD1('line', $F647a429f8089f01['user_id']))) {
			goto label696;
		}

		return false;

		label696:

		$f63b4ada8c9b56fa = b5aD1d95a92CE732($F647a429f8089f01['user_id']);

		label701:

		goto label722;

		label702:

		goto label721;

		label703:

		$f63b4ada8c9b56fa['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in'], intval($f63b4ada8c9b56fa['exp_date']));

		label721:

		goto label801;

		label722:

		$f63b4ada8c9b56fa['is_mag'] = 0;
		$f63b4ada8c9b56fa['is_e2'] = 1;
		$ba4f280bd137bfad = E167d33DBf12d418(self::$rUserInfo['id']);

		if (!empty($ba2d146bb5a55097['package'])) {
			goto label28;
		}

		if (!isset($f63b4ada8c9b56fa['id'])) {
			goto label23;
		}

		goto label99;

		label741:

		$f63b4ada8c9b56fa['member_id'] = $C0a1fd30f0173389;

		label743:

		if (!self::$rPermissions['allow_restrictions']) {
			goto label507;
		}

		if (isset($ba2d146bb5a55097['allowed_ips'])) {
			goto label548;
		}

		$f63b4ada8c9b56fa['allowed_ips'] = '[]';
		goto label547;

		label754:

		$f63b4ada8c9b56fa['bouquet'] = sortArrayByArray($Df5cd7b5dc4cc10c, array_keys(bca35E1D9E85240c()));
		$f63b4ada8c9b56fa['bouquet'] = '[' . implode(',', array_map('intval', $f63b4ada8c9b56fa['bouquet'])) . ']';
		$f63b4ada8c9b56fa['max_connections'] = $cc386f9ba082650e['max_connections'];
		$f63b4ada8c9b56fa['is_restreamer'] = $cc386f9ba082650e['is_restreamer'];
		$f63b4ada8c9b56fa['force_server_id'] = $cc386f9ba082650e['force_server_id'];
		goto label293;

		label788:

		$f63b4ada8c9b56fa['allowed_ips'] = json_encode($ba2d146bb5a55097['allowed_ips']);

		label794:

		if (isset($ba2d146bb5a55097['is_isplock'])) {
			goto label372;
		}

		$f63b4ada8c9b56fa['is_isplock'] = 0;
		goto label374;
		goto label372;

		label801:

		$f63b4ada8c9b56fa['is_trial'] = 0;
		goto label211;

		label804:

		$f63b4ada8c9b56fa['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['trial_duration']) . ' ' . $cc386f9ba082650e['trial_duration_in']);
		$f63b4ada8c9b56fa['is_trial'] = 1;
		goto label211;

		label820:

		return ['status' => STATUS_INSUFFICIENT_CREDITS, 'data' => $ba2d146bb5a55097];
		goto label299;

		label825:

		if ($ba2d146bb5a55097['trial']) {
			goto label804;
		}
		if (isset($f63b4ada8c9b56fa['id']) && $ec173304ea5bcb05) {
			goto label607;
		}

		goto label593;

		label834:
	}

	static public function d3824406bc4f2a23($ba2d146bb5a55097)
	{
		goto label198;

		label2:

		if (!((self::$rUserInfo['credits'] - $c9da08d48008775a) < 0)) {
			goto label13;
		}

		return ['status' => STATUS_INSUFFICIENT_CREDITS, 'data' => $ba2d146bb5a55097];

		label13:
		if (isset($ba2d146bb5a55097['member_group_id']) && in_array($ba2d146bb5a55097['member_group_id'], self::$rPermissions['subresellers'])) {
			goto label64;
		}

		goto label26;

		label26:

		if (0 < count(self::$rPermissions['subresellers'])) {
			goto label39;
		}

		return ['status' => STATUS_INVALID_SUBRESELLER, 'data' => $ba2d146bb5a55097];
		goto label63;

		label39:

		$F647a429f8089f01['member_group_id'] = self::$rPermissions['subresellers'][0];
		goto label63;

		label45:

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label58;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label68;

		label58:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		goto label111;

		label63:

		goto label67;

		label64:

		$F647a429f8089f01['member_group_id'] = $ba2d146bb5a55097['member_group_id'];

		label67:

		goto label256;

		label68:

		goto label403;

		label69:

		$D2b67ad109197cda = intval(self::$rUserInfo['credits']) - intval($c9da08d48008775a);
		self::$db->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $D2b67ad109197cda, self::$rUserInfo['id']);
		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);', self::$rUserInfo['id'], 'new', $E5b50d60c471d7d6, $c9da08d48008775a, $D2b67ad109197cda, time(), json_encode($ba2d146bb5a55097));

		label105:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];
		goto label68;

		label111:

		$ba2d146bb5a55097 = bA89228Dc958CE05($E5b50d60c471d7d6);

		if (isset($c9da08d48008775a)) {
			goto label139;
		}

		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'user\', ?, ?, null, ?, ?, ?, ?);', self::$rUserInfo['id'], 'edit', $E5b50d60c471d7d6, 0, self::$rUserInfo['credits'], time(), json_encode($ba2d146bb5a55097));
		goto label105;

		label139:

		goto label69;

		label140:

		if (!BD57390A052Fd83b('users', 'username', $F647a429f8089f01['username'], 'id', $ba2d146bb5a55097['edit'])) {
			goto label156;
		}

		return ['status' => STATUS_EXISTS_USERNAME, 'data' => $ba2d146bb5a55097];

		label156:

		$F647a429f8089f01['username'] = $ba2d146bb5a55097['username'];

		if (!(0 < strlen($ba2d146bb5a55097['password']))) {
			goto label283;
		}

		goto label277;

		label168:

		return ['status' => STATUS_INVALID_USERNAME, 'data' => $ba2d146bb5a55097];

		label172:
		if (!((strlen($ba2d146bb5a55097['password']) < self::$rPermissions['minimum_password_length']) && !(isset($ba2d146bb5a55097['edit']) && (strlen($ba2d146bb5a55097['password']) == 0)))) {
			goto label197;
		}

		return ['status' => STATUS_INVALID_PASSWORD, 'data' => $ba2d146bb5a55097];

		label197:

		goto label140;

		label198:

		$ba2d146bb5a55097 = self::processData('user', $ba2d146bb5a55097);

		if (self::$rPermissions['create_sub_resellers']) {
			goto label208;
		}

		return false;

		label208:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label255;
		}

		goto label244;

		label212:

		if (self::$rPermissions['allow_change_password']) {
			goto label346;
		}

		if (isset($F647a429f8089f01['id'])) {
			goto label344;
		}

		$ba2d146bb5a55097['password'] = fc34407B2842461b(10 < self::$rPermissions['minimum_password_length'] ? self::$rPermissions['minimum_password_length'] : 10);
		goto label346;
		goto label344;

		label235:

		return false;

		label236:

		if (self::$rPermissions['allow_change_username']) {
			goto label212;
		}

		if (isset($F647a429f8089f01['id'])) {
			goto label399;
		}

		goto label384;

		label244:

		$F647a429f8089f01 = c73Ed8d0b70CE12F('users', $ba2d146bb5a55097);
		$F647a429f8089f01['date_registered'] = time();
		unset($F647a429f8089f01['id']);
		goto label236;

		label255:

		goto label318;

		label256:

		$F647a429f8089f01['email'] = $ba2d146bb5a55097['email'];
		$F647a429f8089f01['reseller_dns'] = $ba2d146bb5a55097['reseller_dns'];
		$F647a429f8089f01['notes'] = $ba2d146bb5a55097['notes'];
		$Fac87d38f7786df0 = C483a3a59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `users`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
		goto label45;

		label277:

		$F647a429f8089f01['password'] = deBA522c14D0644c($ba2d146bb5a55097['password']);

		label283:
		if ((0 < count(self::$rPermissions['all_reports'])) && in_array(intval($ba2d146bb5a55097['owner_id']), self::$rPermissions['all_reports']) && (!isset($F647a429f8089f01['id']) || ($F647a429f8089f01['id'] != $ba2d146bb5a55097['owner_id']))) {
			goto label368;
		}

		$F647a429f8089f01['owner_id'] = self::$rUserInfo['id'];
		goto label374;
		goto label368;

		label318:

		$F647a429f8089f01 = BA89228Dc958ce05($ba2d146bb5a55097['edit']);
		if (!(!$F647a429f8089f01 || !e589a4BF54a2dad1('user', $F647a429f8089f01['id']))) {
			goto label336;
		}

		return false;

		label336:

		if (!($F647a429f8089f01['id'] == self::$rUserInfo['id'])) {
			goto label236;
		}

		goto label235;

		label344:

		$ba2d146bb5a55097['password'] = '';

		label346:
		if (!((strlen($ba2d146bb5a55097['username']) < self::$rPermissions['minimum_username_length']) && !(isset($ba2d146bb5a55097['edit']) && (strlen($ba2d146bb5a55097['username']) == 0)))) {
			goto label172;
		}

		goto label168;

		label368:

		$F647a429f8089f01['owner_id'] = intval($ba2d146bb5a55097['owner_id']);

		label374:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label13;
		}

		$c9da08d48008775a = intval(self::$rPermissions['create_sub_resellers_price']);
		goto label2;

		label384:

		$ba2d146bb5a55097['username'] = fc34407B2842461B(10 < self::$rPermissions['minimum_username_length'] ? self::$rPermissions['minimum_username_length'] : 10);
		goto label402;

		label399:

		$ba2d146bb5a55097['username'] = $F647a429f8089f01['username'];

		label402:

		goto label212;

		label403:
	}

	static public function F29B6959409fc688($ba2d146bb5a55097)
	{
		goto label105;

		label2:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label193;

		label7:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		self::$db->query('INSERT INTO `tickets_replies`(`ticket_id`, `admin_reply`, `message`, `date`) VALUES(?, 0, ?, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['message'], time());
		goto label188;

		label22:

		if (!isset($ba2d146bb5a55097['respond'])) {
			goto label40;
		}

		$e980e66d0f7b6829 = Def05ECDB21B0a50($ba2d146bb5a55097['respond']);

		if ($e980e66d0f7b6829) {
			goto label46;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label39;
		goto label46;

		label39:

		goto label193;

		label40:

		$F647a429f8089f01['title'] = $ba2d146bb5a55097['title'];
		$F647a429f8089f01['status'] = 1;
		goto label164;

		label46:

		if (intval(self::$rUserInfo['id']) == intval($e980e66d0f7b6829['member_id'])) {
			goto label121;
		}

		self::$db->query('UPDATE `tickets` SET `admin_read` = 0, `user_read` = 0 WHERE `id` = ?;', $ba2d146bb5a55097['respond']);
		self::$db->query('INSERT INTO `tickets_replies`(`ticket_id`, `admin_reply`, `message`, `date`) VALUES(?, 1, ?, ?);', $ba2d146bb5a55097['respond'], $ba2d146bb5a55097['message'], time());
		goto label138;
		goto label121;

		label77:
		if (!(((strlen($ba2d146bb5a55097['title']) == 0) && !isset($ba2d146bb5a55097['respond'])) || (strlen($ba2d146bb5a55097['message']) == 0))) {
			goto label100;
		}

		return ['status' => STATUS_INVALID_DATA, 'data' => $ba2d146bb5a55097];

		label100:

		$F647a429f8089f01['member_id'] = self::$rUserInfo['id'];
		goto label22;

		label105:

		$ba2d146bb5a55097 = self::processData('ticket', $ba2d146bb5a55097);

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label145;
		}

		$F647a429f8089f01 = c73eD8d0B70cE12F('tickets', $ba2d146bb5a55097);
		unset($F647a429f8089f01['id']);
		goto label77;
		goto label145;

		label121:

		self::$db->query('UPDATE `tickets` SET `admin_read` = 0, `user_read` = 1 WHERE `id` = ?;', $ba2d146bb5a55097['respond']);
		self::$db->query('INSERT INTO `tickets_replies`(`ticket_id`, `admin_reply`, `message`, `date`) VALUES(?, 0, ?, ?);', $ba2d146bb5a55097['respond'], $ba2d146bb5a55097['message'], time());

		label138:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $ba2d146bb5a55097['respond']]
		];
		goto label39;

		label145:

		$F647a429f8089f01 = DEf05EcDb21B0A50($ba2d146bb5a55097['edit']);
		if (!(!$F647a429f8089f01 || !e589a4bF54A2DaD1('user', $F647a429f8089f01['member_id']))) {
			goto label163;
		}

		return false;

		label163:

		goto label77;

		label164:

		$F647a429f8089f01['admin_read'] = 0;
		$F647a429f8089f01['user_read'] = 0;
		$Fac87d38f7786df0 = C483a3a59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `tickets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label7;
		}

		goto label2;

		label188:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label193:

		goto label194;

		label194:
	}

	static public function Fccaa0f750EFA5B7($ba2d146bb5a55097)
	{
		goto label761;

		label2:

		if (E589A4BF54a2dad1('user', $C0a1fd30f0173389)) {
			goto label13;
		}

		$F647a429f8089f01['member_id'] = self::$rUserInfo['id'];
		goto label607;

		label13:

		$F647a429f8089f01['member_id'] = $C0a1fd30f0173389;
		goto label607;

		label16:

		if (strlen($ba2d146bb5a55097['username']) == 0) {
			goto label860;
		}

		if (!(strlen($ba2d146bb5a55097['username']) < self::$rPermissions['minimum_username_length'])) {
			goto label859;
		}
		if (!(!isset($ba2d146bb5a55097['edit']) || ($ba2d146bb5a55097['username'] != $f4a4e43b37638ae5['username']))) {
			goto label859;
		}

		goto label855;

		label44:

		$cc386f9ba082650e = Fddf8Da6AB3FE47b($ba2d146bb5a55097['package']);

		if ($cc386f9ba082650e['is_line']) {
			goto label56;
		}

		return ['status' => STATUS_INVALID_TYPE, 'data' => $ba2d146bb5a55097];

		label56:

		goto label563;

		label57:

		if (isset($F647a429f8089f01['id'])) {
			goto label63;
		}

		$ba2d146bb5a55097['password'] = '';
		goto label16;

		label63:

		$ba2d146bb5a55097['password'] = $F647a429f8089f01['password'];
		goto label16;

		label67:

		$ba2d146bb5a55097 = b5ad1d95a92ce732($E5b50d60c471d7d6);
		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, ?, ?, ?, ?, ?);', self::$rUserInfo['id'], $A7d54b094ae83c95, $E5b50d60c471d7d6, $cc386f9ba082650e['id'], $c9da08d48008775a, $D2b67ad109197cda, time(), json_encode($ba2d146bb5a55097));

		label91:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label96:

		goto label899;

		label97:
		if ($cc386f9ba082650e && in_array(self::$rUserInfo['member_group_id'], json_decode($cc386f9ba082650e['groups'], true))) {
			goto label117;
		}

		return ['status' => STATUS_INVALID_PACKAGE, 'data' => $ba2d146bb5a55097];
		goto label526;

		label117:

		goto label861;

		label118:

		$F647a429f8089f01['is_trial'] = 1;

		label120:

		$Df5cd7b5dc4cc10c = array_values(json_decode($cc386f9ba082650e['bouquets'], true));
		if (!(self::$rPermissions['allow_change_bouquets'] && (0 < count($ba2d146bb5a55097['bouquets_selected'])))) {
			goto label189;
		}

		$b168b0dd4c8719d2 = [];
		goto label831;

		label143:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		bD08B9C71A1cA5f5($E5b50d60c471d7d6);
		self::$db->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', SERVER_ID, time(), json_encode(['type' => 'update_line', 'id' => $E5b50d60c471d7d6]));

		if (isset($cc386f9ba082650e)) {
			goto label784;
		}

		self::$db->query('INSERT INTO `users_logs`(`owner`, `type`, `action`, `log_id`, `package_id`, `cost`, `credits_after`, `date`, `deleted_info`) VALUES(?, \'line\', ?, ?, null, ?, ?, ?, ?);', self::$rUserInfo['id'], 'edit', $E5b50d60c471d7d6, 0, self::$rUserInfo['credits'], time(), json_encode($ba2d146bb5a55097));
		goto label783;

		label189:

		$F647a429f8089f01['bouquet'] = sortArrayByArray($Df5cd7b5dc4cc10c, array_keys(BCA35E1D9E85240c()));
		$F647a429f8089f01['bouquet'] = '[' . implode(',', array_map('intval', $F647a429f8089f01['bouquet'])) . ']';
		$F647a429f8089f01['max_connections'] = $cc386f9ba082650e['max_connections'];
		$F647a429f8089f01['is_restreamer'] = $cc386f9ba082650e['is_restreamer'];
		goto label517;

		label220:

		return ['status' => STATUS_INVALID_PASSWORD, 'data' => $ba2d146bb5a55097];

		label224:

		goto label703;

		label225:

		goto label680;

		label226:

		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label234;
		}

		$ba2d146bb5a55097['username'] = $F647a429f8089f01['username'];
		goto label422;

		label234:

		$ba2d146bb5a55097['username'] = Fc34407b2842461b(10 < self::$rPermissions['minimum_username_length'] ? self::$rPermissions['minimum_username_length'] : 10);
		goto label422;

		label249:

		$F647a429f8089f01['bouquet'] = sortArrayByArray($Df5cd7b5dc4cc10c, array_keys(bCA35E1d9E85240c()));
		$F647a429f8089f01['bouquet'] = '[' . implode(',', array_map('intval', $F647a429f8089f01['bouquet'])) . ']';

		label273:

		goto label305;

		label274:

		if (isset($ba2d146bb5a55097['allowed_ua'])) {
			goto label280;
		}

		$F647a429f8089f01['allowed_ua'] = '[]';
		goto label667;

		label280:

		goto label651;

		label281:

		goto label283;

		label282:

		$A7d54b094ae83c95 = 'extend';

		label283:

		goto label67;

		label284:

		$B91645b8411dc88c = 'REPLACE INTO `lines`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label304;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label96;

		label304:

		goto label143;

		label305:

		goto label310;

		label306:

		return ['status' => STATUS_INVALID_PACKAGE, 'data' => $ba2d146bb5a55097];

		label310:

		goto label598;
		goto label44;

		label312:

		$F647a429f8089f01['is_mag'] = 0;
		$F647a429f8089f01['is_e2'] = 0;
		$ba4f280bd137bfad = e167d33DBF12d418(self::$rUserInfo['id']);

		if (!empty($ba2d146bb5a55097['package'])) {
			goto label44;
		}

		goto label361;

		label327:

		if (is_array($ba2d146bb5a55097['allowed_ips'])) {
			goto label337;
		}

		$ba2d146bb5a55097['allowed_ips'] = [$ba2d146bb5a55097['allowed_ips']];

		label337:

		$F647a429f8089f01['allowed_ips'] = json_encode($ba2d146bb5a55097['allowed_ips']);
		goto label274;

		label344:

		if ($c9da08d48008775a <= intval(self::$rUserInfo['credits'])) {
			goto label357;
		}

		return ['status' => STATUS_INSUFFICIENT_CREDITS, 'data' => $ba2d146bb5a55097];
		goto label526;

		label357:

		if ($ba2d146bb5a55097['trial']) {
			goto label503;
		}

		goto label465;

		label361:

		if (!isset($F647a429f8089f01['id'])) {
			goto label306;
		}
		if (!(isset($ba2d146bb5a55097['edit']) && $F647a429f8089f01['package_id'])) {
			goto label273;
		}

		$cc386f9ba082650e = FDdF8da6ab3Fe47B($F647a429f8089f01['package_id']);
		$Df5cd7b5dc4cc10c = array_values(json_decode($cc386f9ba082650e['bouquets'], true));
		if (!(self::$rPermissions['allow_change_bouquets'] && (0 < count($ba2d146bb5a55097['bouquets_selected'])))) {
			goto label249;
		}

		goto label806;

		label399:

		foreach ($A0230b5ec5f4044b as $D7c990ef7ca44a60) {
			$Cd826a7439b979ee[] = $D7c990ef7ca44a60;
		}

		$F647a429f8089f01['allowed_outputs'] = '[' . implode(',', array_map('intval', $Cd826a7439b979ee)) . ']';

		label417:

		$Fac87d38f7786df0 = c483a3a59265139E($F647a429f8089f01);
		goto label284;

		label422:

		if (strlen($ba2d146bb5a55097['password']) == 0) {
			goto label225;
		}

		if (!(strlen($ba2d146bb5a55097['password']) < self::$rPermissions['minimum_password_length'])) {
			goto label224;
		}
		if (!(!isset($ba2d146bb5a55097['edit']) || ($ba2d146bb5a55097['password'] != $f4a4e43b37638ae5['password']))) {
			goto label224;
		}

		goto label220;

		label450:

		$F647a429f8089f01['is_isplock'] = 1;

		label452:

		if (!(strlen($ba2d146bb5a55097['isp_clear']) == 0)) {
			goto label551;
		}

		$F647a429f8089f01['isp_desc'] = '';
		$F647a429f8089f01['as_number'] = NULL;
		goto label551;

		label465:
		if (isset($F647a429f8089f01['id']) && $ec173304ea5bcb05) {
			goto label484;
		}

		$F647a429f8089f01['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in']);
		goto label500;

		label484:

		if (time() <= $F647a429f8089f01['exp_date']) {
			goto label632;
		}

		goto label618;

		label491:

		$c9da08d48008775a = intval($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']);

		label498:

		goto label760;

		label499:

		goto label749;

		label500:

		$F647a429f8089f01['is_trial'] = 0;
		goto label120;

		label503:

		$F647a429f8089f01['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['trial_duration']) . ' ' . $cc386f9ba082650e['trial_duration_in']);
		goto label118;

		label517:

		$F647a429f8089f01['force_server_id'] = $cc386f9ba082650e['force_server_id'];
		$F647a429f8089f01['forced_country'] = $cc386f9ba082650e['forced_country'];
		$F647a429f8089f01['is_isplock'] = $cc386f9ba082650e['is_isplock'];

		label526:

		goto label595;

		label527:

		$F647a429f8089f01 = B5aD1D95a92Ce732($ba2d146bb5a55097['edit']);
		$f4a4e43b37638ae5 = ['username' => $F647a429f8089f01['username'], 'password' => $F647a429f8089f01['password']];
		if (!(!$F647a429f8089f01 || !E589A4bF54a2dAD1('line', $F647a429f8089f01['id']))) {
			goto label550;
		}

		return false;

		label550:

		goto label312;

		label551:

		if (!isset($cc386f9ba082650e)) {
			goto label417;
		}

		$Cd826a7439b979ee = [];
		$A0230b5ec5f4044b = json_decode($cc386f9ba082650e['output_formats'], true);
		goto label399;

		label563:
		if ((0 < intval($F647a429f8089f01['package_id'])) && $cc386f9ba082650e['check_compatible']) {
			goto label575;
		}

		$ec173304ea5bcb05 = true;
		goto label97;

		label575:

		$ec173304ea5bcb05 = dba308160C3f6cA5($F647a429f8089f01['package_id'], $cc386f9ba082650e['id']);
		goto label97;

		label583:

		if (!self::$rPermissions['allow_restrictions']) {
			goto label551;
		}

		if (isset($ba2d146bb5a55097['allowed_ips'])) {
			goto label327;
		}

		$F647a429f8089f01['allowed_ips'] = '[]';
		goto label274;
		goto label327;

		label595:

		$F647a429f8089f01['package_id'] = $cc386f9ba082650e['id'];

		label598:

		$F647a429f8089f01['contact'] = $ba2d146bb5a55097['contact'];
		$F647a429f8089f01['reseller_notes'] = $ba2d146bb5a55097['reseller_notes'];
		$C0a1fd30f0173389 = $ba2d146bb5a55097['member_id'];
		goto label2;

		label607:

		if (self::$rPermissions['allow_change_username']) {
			goto label778;
		}

		if (isset($F647a429f8089f01['id'])) {
			goto label775;
		}

		$ba2d146bb5a55097['username'] = '';
		goto label778;
		goto label775;

		label618:

		$F647a429f8089f01['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in']);
		goto label650;

		label632:

		$F647a429f8089f01['exp_date'] = strtotime('+' . intval($cc386f9ba082650e['official_duration']) . ' ' . $cc386f9ba082650e['official_duration_in'], intval($F647a429f8089f01['exp_date']));

		label650:

		goto label500;

		label651:

		if (is_array($ba2d146bb5a55097['allowed_ua'])) {
			goto label661;
		}

		$ba2d146bb5a55097['allowed_ua'] = [$ba2d146bb5a55097['allowed_ua']];

		label661:

		$F647a429f8089f01['allowed_ua'] = json_encode($ba2d146bb5a55097['allowed_ua']);

		label667:

		goto label710;

		label668:

		$F647a429f8089f01 = c73eD8D0B70Ce12F('lines', $ba2d146bb5a55097);
		$F647a429f8089f01['created_at'] = time();
		unset($F647a429f8089f01['id']);
		goto label312;

		label679:

		goto label527;

		label680:

		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label688;
		}

		$ba2d146bb5a55097['password'] = $F647a429f8089f01['password'];
		goto label703;

		label688:

		$ba2d146bb5a55097['password'] = fC34407B2842461B(10 < self::$rPermissions['minimum_password_length'] ? self::$rPermissions['minimum_password_length'] : 10);
		goto label703;

		label703:

		if (empty($ba2d146bb5a55097['username'])) {
			goto label709;
		}

		$F647a429f8089f01['username'] = $ba2d146bb5a55097['username'];

		label709:

		goto label726;

		label710:

		if (isset($ba2d146bb5a55097['bypass_ua'])) {
			goto label716;
		}

		$F647a429f8089f01['bypass_ua'] = 0;
		goto label892;

		label716:

		$F647a429f8089f01['bypass_ua'] = 1;
		goto label892;

		label719:

		$A7d54b094ae83c95 = 'new';
		goto label283;

		label721:

		if ($F647a429f8089f01['package_id']) {
			goto label282;
		}

		$A7d54b094ae83c95 = 'edit';
		goto label281;

		label726:

		if (empty($ba2d146bb5a55097['password'])) {
			goto label732;
		}

		$F647a429f8089f01['password'] = $ba2d146bb5a55097['password'];

		label732:

		if (!bD57390a052fd83B('lines', 'username', $F647a429f8089f01['username'], 'id', $ba2d146bb5a55097['edit'])) {
			goto label583;
		}

		return ['status' => STATUS_EXISTS_USERNAME, 'data' => $ba2d146bb5a55097];
		goto label583;

		label749:

		if ($ba4f280bd137bfad) {
			goto label755;
		}

		return ['status' => STATUS_NO_TRIALS, 'data' => $ba2d146bb5a55097];

		label755:

		$c9da08d48008775a = intval($cc386f9ba082650e['trial_credits']);

		label760:

		goto label344;

		label761:

		$ba2d146bb5a55097 = self::processData('line', $ba2d146bb5a55097);

		if (self::$rPermissions['create_line']) {
			goto label771;
		}

		return false;

		label771:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label679;
		}

		goto label668;

		label775:

		$ba2d146bb5a55097['username'] = $F647a429f8089f01['username'];

		label778:

		if (self::$rPermissions['allow_change_password']) {
			goto label16;
		}

		goto label57;

		label783:

		goto label91;

		label784:

		$D2b67ad109197cda = intval(self::$rUserInfo['credits']) - intval($c9da08d48008775a);
		self::$db->query('UPDATE `users` SET `credits` = ? WHERE `id` = ?;', $D2b67ad109197cda, self::$rUserInfo['id']);

		if (isset($F647a429f8089f01['id'])) {
			goto label721;
		}

		goto label719;

		label806:

		$b168b0dd4c8719d2 = [];

		foreach ($ba2d146bb5a55097['bouquets_selected'] as $b5fd3e3f0096d7f4) {
			if (!in_array($b5fd3e3f0096d7f4, $Df5cd7b5dc4cc10c)) {
				goto label820;
			}

			$b168b0dd4c8719d2[] = $b5fd3e3f0096d7f4;

			label820:
		}

		if (!(0 < count($b168b0dd4c8719d2))) {
			goto label249;
		}

		$Df5cd7b5dc4cc10c = $b168b0dd4c8719d2;
		goto label249;

		label831:

		foreach ($ba2d146bb5a55097['bouquets_selected'] as $b5fd3e3f0096d7f4) {
			if (!in_array($b5fd3e3f0096d7f4, $Df5cd7b5dc4cc10c)) {
				goto label844;
			}

			$b168b0dd4c8719d2[] = $b5fd3e3f0096d7f4;

			label844:
		}

		if (!(0 < count($b168b0dd4c8719d2))) {
			goto label854;
		}

		$Df5cd7b5dc4cc10c = $b168b0dd4c8719d2;

		label854:

		goto label189;

		label855:

		return ['status' => STATUS_INVALID_USERNAME, 'data' => $ba2d146bb5a55097];

		label859:

		goto label422;

		label860:

		goto label226;

		label861:

		if ($ba2d146bb5a55097['trial']) {
			goto label499;
		}

		$dd3211a322da8474 = json_decode(self::$rUserInfo['override_packages'], true);
		if (isset($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']) && (0 < strlen($dd3211a322da8474[$cc386f9ba082650e['id']]['official_credits']))) {
			goto label491;
		}

		$c9da08d48008775a = intval($cc386f9ba082650e['official_credits']);
		goto label498;
		goto label491;

		label892:

		if (isset($ba2d146bb5a55097['is_isplock'])) {
			goto label898;
		}

		$F647a429f8089f01['is_isplock'] = 0;
		goto label452;

		label898:

		goto label450;

		label899:
	}
}

?>