<?php


class API
{
	static public $db;
	static public $rSettings = [];
	static public $rServers = [];
	static public $rProxyServers = [];
	static public $rUserInfo = [];

	static public function init($f7107e3a92443147 = NULL)
	{
		self::$rSettings = CDbE6bC7B26C4902();
		self::$rServers = c6a90BfCD425EB63();
		self::$rProxyServers = E988f4dE594A8E78();
		if (!(!$f7107e3a92443147 && isset($_SESSION['hash']))) {
			goto label24;
		}

		$f7107e3a92443147 = $_SESSION['hash'];

		label24:

		if (!$f7107e3a92443147) {
			goto label32;
		}

		self::$rUserInfo = ba89228dC958cE05($f7107e3a92443147);

		label32:
	}

	static private function a11aa39C8A0Bdf06($ba2d146bb5a55097)
	{
		switch (debug_backtrace()[1]['function']) {
		case 'scheduleRecording':
			return !empty($ba2d146bb5a55097['title']) && !empty($ba2d146bb5a55097['source_id']);
		case 'processProvider':
			return !empty($ba2d146bb5a55097['ip']) && !empty($ba2d146bb5a55097['port']) && !empty($ba2d146bb5a55097['username']) && !empty($ba2d146bb5a55097['password']) && !empty($ba2d146bb5a55097['name']);
		case 'processBouquet':
			return !empty($ba2d146bb5a55097['bouquet_name']);
		case 'processGroup':
			return !empty($ba2d146bb5a55097['group_name']);
		case 'processPackage':
			return !empty($ba2d146bb5a55097['package_name']);
		case 'processCategory':
			return !empty($ba2d146bb5a55097['category_name']) && !empty($ba2d146bb5a55097['category_type']);
		case 'processCode':
			return !empty($ba2d146bb5a55097['code']);
		case 'reorderBouquet':
		case 'setChannelOrder':
			return is_array(json_decode($ba2d146bb5a55097['stream_order_array'], true));
		case 'sortBouquets':
			return is_array(json_decode($ba2d146bb5a55097['bouquet_order_array'], true));
		case 'blockIP':
		case 'processRTMPIP':
			return !empty($ba2d146bb5a55097['ip']);
		case 'processChannel':
		case 'processStream':
		case 'processMovie':
		case 'processRadio':
			return !empty($ba2d146bb5a55097['stream_display_name']) || isset($ba2d146bb5a55097['review']) || isset($_FILES['m3u_file']);
		case 'processEpisode':
			return !empty($ba2d146bb5a55097['series']) && is_numeric($ba2d146bb5a55097['season_num']) && is_numeric($ba2d146bb5a55097['episode']);
		case 'processSeries':
			return !empty($ba2d146bb5a55097['title']);
		case 'processEPG':
			return !empty($ba2d146bb5a55097['epg_name']) && !empty($ba2d146bb5a55097['epg_file']);
		case 'massEditEpisodes':
		case 'massEditMovies':
		case 'massEditRadios':
		case 'massEditStreams':
		case 'massEditChannels':
		case 'massDeleteStreams':
			return is_array(json_decode($ba2d146bb5a55097['streams'], true));
		case 'massEditSeries':
		case 'massDeleteSeries':
			return is_array(json_decode($ba2d146bb5a55097['series'], true));
		case 'massEditLines':
		case 'massEditUsers':
			return is_array(json_decode($ba2d146bb5a55097['users_selected'], true));
		case 'massEditMags':
		case 'massEditEnigmas':
			return is_array(json_decode($ba2d146bb5a55097['devices_selected'], true));
		case 'processISP':
			return !empty($ba2d146bb5a55097['isp']);
		case 'massDeleteMovies':
			return is_array(json_decode($ba2d146bb5a55097['movies'], true));
		case 'massDeleteLines':
			return is_array(json_decode($ba2d146bb5a55097['lines'], true));
		case 'massDeleteUsers':
			return is_array(json_decode($ba2d146bb5a55097['users'], true));
		case 'massDeleteStations':
			return is_array(json_decode($ba2d146bb5a55097['radios'], true));
		case 'massDeleteMags':
			return is_array(json_decode($ba2d146bb5a55097['mags'], true));
		case 'massDeleteEnigmas':
			return is_array(json_decode($ba2d146bb5a55097['enigmas'], true));
		case 'massDeleteEpisodes':
			return is_array(json_decode($ba2d146bb5a55097['episodes'], true));
		case 'processMAG':
		case 'processEnigma':
			return !empty($ba2d146bb5a55097['mac']);
		case 'processProfile':
			return !empty($ba2d146bb5a55097['profile_name']);
		case 'processProxy':
		case 'processServer':
			return !empty($ba2d146bb5a55097['server_name']) && !empty($ba2d146bb5a55097['server_ip']);
		case 'installServer':
			return !empty($ba2d146bb5a55097['ssh_port']) && !empty($ba2d146bb5a55097['root_password']);
		case 'orderCategories':
			return is_array(json_decode($ba2d146bb5a55097['categories'], true));
		case 'orderServers':
			return is_array(json_decode($ba2d146bb5a55097['server_order'], true));
		case 'moveStreams':
			return !empty($ba2d146bb5a55097['content_type']) && !empty($ba2d146bb5a55097['source_server']) && !empty($ba2d146bb5a55097['replacement_server']);
		case 'replaceDNS':
			return !empty($ba2d146bb5a55097['old_dns']) && !empty($ba2d146bb5a55097['new_dns']);
		case 'processUA':
			return !empty($ba2d146bb5a55097['user_agent']);
		case 'processWatchFolder':
			return !empty($ba2d146bb5a55097['folder_type']) && !empty($ba2d146bb5a55097['selected_path']) && !empty($ba2d146bb5a55097['server_id']);
		}

		return true;
	}

	static public function F987238750272AAC($ba2d146bb5a55097)
	{
		goto label218;

		label2:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label20;
		}

		self::$db->query('SELECT MAX(`bouquet_order`) AS `max` FROM `bouquets`;');
		$F647a429f8089f01['bouquet_order'] = intval(self::$db->get_row()['max']) + 1;

		label20:

		$Fac87d38f7786df0 = C483a3a59265139E($F647a429f8089f01);
		goto label165;

		label25:

		$F647a429f8089f01['bouquet_channels'] = array_intersect(array_map('intval', array_values($c43c8b2aa1608e5c)), $D9846544dffb63c9[1]);
		$F647a429f8089f01['bouquet_movies'] = array_intersect(array_map('intval', array_values($a8d269a680a9c63b)), $D9846544dffb63c9[2]);
		$F647a429f8089f01['bouquet_radios'] = array_intersect(array_map('intval', array_values($Db39c350c0f82f50)), $D9846544dffb63c9[4]);
		$F647a429f8089f01['bouquet_series'] = array_intersect(array_map('intval', array_values($B10ddf7cd8d85fee)), $D9846544dffb63c9[5]);

		label81:

		goto label2;

		label82:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		F314129A46c64db0($E5b50d60c471d7d6);
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label94:

		goto label287;

		label95:

		goto label268;

		label96:

		if (E589a4bf54a2DaD1('adv', 'edit_bouquet')) {
			goto label103;
		}

		exit();

		label103:

		goto label259;

		label104:

		if (!(0 < count($E547cecc6bfa5dda))) {
			goto label150;
		}

		self::$db->query('SELECT `id`, `type` FROM `streams` WHERE `id` IN (' . implode(',', $E547cecc6bfa5dda) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			if (!(intval($Fb9da1713bff19ce['type']) == 3)) {
				goto label137;
			}

			$Fb9da1713bff19ce['type'] = 1;

			label137:

			$D9846544dffb63c9[intval($Fb9da1713bff19ce['type'])][] = intval($Fb9da1713bff19ce['id']);
		}

		label150:

		goto label186;

		label151:

		if (E589A4Bf54a2daD1('adv', 'add_bouquet')) {
			goto label158;
		}

		exit();

		label158:

		$F647a429f8089f01 = c73ed8D0B70CE12f('bouquets', $ba2d146bb5a55097);
		unset($F647a429f8089f01['id']);
		goto label95;

		label165:

		$B91645b8411dc88c = 'REPLACE INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label185;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label94;

		label185:

		goto label82;

		label186:

		if (!(0 < count($B10ddf7cd8d85fee))) {
			goto label217;
		}

		self::$db->query('SELECT `id` FROM `streams_series` WHERE `id` IN (' . implode(',', $B10ddf7cd8d85fee) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$D9846544dffb63c9[5][] = intval($Fb9da1713bff19ce['id']);
		}

		label217:

		goto label25;

		label218:

		global $_;

		if (self::a11aa39c8a0BDf06($ba2d146bb5a55097)) {
			goto label228;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label228:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label96;
		}

		goto label151;

		label232:

		$a8d269a680a9c63b = $edc2e948fe0884ca['movies'];
		$Db39c350c0f82f50 = $edc2e948fe0884ca['radios'];
		$B10ddf7cd8d85fee = $edc2e948fe0884ca['series'];
		$E547cecc6bfa5dda = confirmIDs(array_merge($c43c8b2aa1608e5c, $a8d269a680a9c63b, $Db39c350c0f82f50));
		$D9846544dffb63c9 = [];
		goto label104;

		label249:

		goto label81;

		label250:

		$edc2e948fe0884ca = json_decode($ba2d146bb5a55097['bouquet_data'], true);
		$c43c8b2aa1608e5c = $edc2e948fe0884ca['stream'];
		goto label232;

		label259:

		$F647a429f8089f01 = E42ed0B0860Db08A(B47fB5320e43F112($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label268:

		if (is_array(json_decode($ba2d146bb5a55097['bouquet_data'], true))) {
			goto label250;
		}

		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label249;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label249;

		label287:
	}

	static public function e791fBD5E55b2260($ba2d146bb5a55097)
	{
		goto label15;

		label2:

		if (!(0 < self::$db->num_rows())) {
			goto label13;
		}

		return ['status' => STATUS_EXISTS_CODE, 'data' => $ba2d146bb5a55097];

		label13:

		goto label139;
		goto label135;

		label15:

		if (self::A11aA39C8a0Bdf06($ba2d146bb5a55097)) {
			goto label24;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label24:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label71;
		}

		$F647a429f8089f01 = c73eD8D0b70Ce12F('access_codes', $ba2d146bb5a55097);
		goto label68;

		label33:

		goto label197;

		label34:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		d670A8140995CD6f();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6, 'orig_code' => $e190183d72e2ae69, 'new_code' => $ba2d146bb5a55097['code']]
		];
		goto label197;

		label49:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label59;
		}

		self::$db->query('SELECT `id` FROM `access_codes` WHERE `code` = ?;', $ba2d146bb5a55097['code']);
		goto label2;

		label59:

		self::$db->query('SELECT `id` FROM `access_codes` WHERE `code` = ? AND `id` <> ?;', $ba2d146bb5a55097['code'], $ba2d146bb5a55097['edit']);
		goto label2;

		label68:

		$e190183d72e2ae69 = NULL;
		unset($F647a429f8089f01['id']);
		goto label200;

		label71:

		$F647a429f8089f01 = E42ed0B0860DB08a(eACE9B35C7C59e8A($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		goto label198;

		label81:

		$F647a429f8089f01['enabled'] = 1;

		label83:

		if (!isset($ba2d146bb5a55097['groups'])) {
			goto label125;
		}

		$F647a429f8089f01['groups'] = [];
		goto label114;

		label90:

		$Fac87d38f7786df0 = c483A3a59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `access_codes`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label34;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label33;

		label114:

		foreach ($ba2d146bb5a55097['groups'] as $d81ce3a6e68c6760) {
			$F647a429f8089f01['groups'][] = intval($d81ce3a6e68c6760);
		}

		label125:

		if (in_array($ba2d146bb5a55097['type'], [0, 1, 3, 4])) {
			goto label142;
		}

		$F647a429f8089f01['groups'] = '[]';
		goto label141;

		label135:

		return ['status' => STATUS_RESERVED_CODE, 'data' => $ba2d146bb5a55097];

		label139:

		goto label191;

		label140:

		goto label187;

		label141:

		goto label155;

		label142:

		$F647a429f8089f01['groups'] = '[' . implode(',', array_map('intval', $F647a429f8089f01['groups'])) . ']';

		label155:

		if (isset($ba2d146bb5a55097['whitelist'])) {
			goto label161;
		}

		goto label159;

		label159:

		$F647a429f8089f01['whitelist'] = '[]';

		label161:
		if (($ba2d146bb5a55097['type'] != 2) && (strlen($ba2d146bb5a55097['code']) < 8)) {
			goto label192;
		}
		if (($ba2d146bb5a55097['type'] == 2) && empty($ba2d146bb5a55097['code'])) {
			goto label140;
		}

		if (in_array($ba2d146bb5a55097['code'], ['admin', 'stream', 'images', 'player_api', 'player', 'playlist', 'epg', 'live', 'movie', 'series', 'status', 'nginx_status', 'get', 'panel_api', 'xmltv', 'probe', 'thumb', 'timeshift', 'auth', 'vauth', 'tsauth', 'hls', 'play', 'key', 'api', 'c'])) {
			goto label135;
		}

		goto label49;

		label187:

		return ['status' => STATUS_INVALID_CODE, 'data' => $ba2d146bb5a55097];

		label191:

		goto label90;

		label192:

		return ['status' => STATUS_CODE_LENGTH, 'data' => $ba2d146bb5a55097];
		goto label90;

		label197:

		goto label207;

		label198:

		$e190183d72e2ae69 = $F647a429f8089f01['code'];

		label200:

		if (isset($ba2d146bb5a55097['enabled'])) {
			goto label81;
		}

		$F647a429f8089f01['enabled'] = 0;
		goto label83;
		goto label81;

		label207:
	}

	static public function e3784Bf595659221($ba2d146bb5a55097)
	{
		goto label149;

		label2:

		self::$db->query('SELECT `id` FROM `hmac_keys` WHERE `key` = ? AND `id` <> ?;', Xui\Functions::encrypt($ba2d146bb5a55097['keygen'], OPENSSL_EXTRA), $ba2d146bb5a55097['edit']);

		if (!(0 < self::$db->num_rows())) {
			goto label26;
		}

		return ['status' => STATUS_EXISTS_HMAC, 'data' => $ba2d146bb5a55097];

		label26:

		goto label27;

		label27:

		if (!($ba2d146bb5a55097['keygen'] != 'HMAC KEY HIDDEN')) {
			goto label40;
		}

		$F647a429f8089f01['key'] = Xui\Functions::encrypt($ba2d146bb5a55097['keygen'], OPENSSL_EXTRA);

		label40:

		$Fac87d38f7786df0 = c483A3a59265139e($F647a429f8089f01);
		goto label77;

		label45:

		if (isset($ba2d146bb5a55097['enabled'])) {
			goto label51;
		}

		$F647a429f8089f01['enabled'] = 0;
		goto label124;

		label51:

		$F647a429f8089f01['enabled'] = 1;
		goto label124;

		label54:

		unset($F647a429f8089f01['id']);
		goto label65;

		label56:

		$F647a429f8089f01 = e42ed0b0860DB08A(FA460ABDD5dcA199($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label65:

		goto label45;

		label66:

		return ['status' => STATUS_EXISTS_HMAC, 'data' => $ba2d146bb5a55097];

		label70:

		goto label27;

		label71:

		if (!($ba2d146bb5a55097['keygen'] != 'HMAC KEY HIDDEN')) {
			goto label26;
		}

		goto label2;

		label77:

		$B91645b8411dc88c = 'REPLACE INTO `hmac_keys`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label97;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label176;

		label97:

		goto label167;

		label98:

		return ['status' => STATUS_NO_DESCRIPTION, 'data' => $ba2d146bb5a55097];

		label102:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label71;
		}

		self::$db->query('SELECT `id` FROM `hmac_keys` WHERE `key` = ?;', Xui\Functions::encrypt($ba2d146bb5a55097['keygen'], OPENSSL_EXTRA));

		if (!(0 < self::$db->num_rows())) {
			goto label70;
		}

		goto label66;

		label124:
		if (!(($ba2d146bb5a55097['keygen'] != 'HMAC KEY HIDDEN') && (strlen($ba2d146bb5a55097['keygen']) != 32))) {
			goto label140;
		}

		return ['status' => STATUS_NO_KEY, 'data' => $ba2d146bb5a55097];

		label140:

		if (!(strlen($ba2d146bb5a55097['notes']) == 0)) {
			goto label102;
		}

		goto label98;

		label149:

		if (self::A11Aa39C8a0bdF06($ba2d146bb5a55097)) {
			goto label158;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label158:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label56;
		}

		$F647a429f8089f01 = C73Ed8d0B70ce12f('hmac_keys', $ba2d146bb5a55097);
		goto label54;

		label167:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label176:

		goto label177;

		label177:
	}

	static public function FCa0E640839b1f77($ba2d146bb5a55097)
	{
		if (self::a11Aa39c8a0BDF06($ba2d146bb5a55097)) {
			goto label10;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label10:

		$a2a53f18f4f95c8b = json_decode($ba2d146bb5a55097['stream_order_array'], true);
		$a2a53f18f4f95c8b['stream'] = confirmIDs($a2a53f18f4f95c8b['stream']);
		$a2a53f18f4f95c8b['series'] = confirmIDs($a2a53f18f4f95c8b['series']);
		$a2a53f18f4f95c8b['movie'] = confirmIDs($a2a53f18f4f95c8b['movie']);
		$a2a53f18f4f95c8b['radio'] = confirmIDs($a2a53f18f4f95c8b['radio']);
		self::$db->query('UPDATE `bouquets` SET `bouquet_channels` = ?, `bouquet_series` = ?, `bouquet_movies` = ?, `bouquet_radios` = ? WHERE `id` = ?;', '[' . implode(',', array_map('intval', $a2a53f18f4f95c8b['stream'])) . ']', '[' . implode(',', array_map('intval', $a2a53f18f4f95c8b['series'])) . ']', '[' . implode(',', array_map('intval', $a2a53f18f4f95c8b['movie'])) . ']', '[' . implode(',', array_map('intval', $a2a53f18f4f95c8b['radio'])) . ']', $ba2d146bb5a55097['reorder']);
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $ba2d146bb5a55097['reorder']]
		];
	}

	static public function a9076D2c2935cd1F($ba2d146bb5a55097)
	{
		goto label14;

		label2:

		if (0 < strlen($ba2d146bb5a55097['password'])) {
			goto label13;
		}

		$fd093b5358e9a519 = self::$rUserInfo['password'];
		goto label49;

		label13:

		goto label44;

		label14:

		if (self::A11aa39C8A0BdF06($ba2d146bb5a55097)) {
			goto label23;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label23:
		if (!((0 < strlen($ba2d146bb5a55097['email'])) && !filter_var($ba2d146bb5a55097['email'], FILTER_VALIDATE_EMAIL))) {
			goto label2;
		}

		return ['status' => STATUS_INVALID_EMAIL];
		goto label2;

		label44:

		$fd093b5358e9a519 = dEba522C14d0644c($ba2d146bb5a55097['password']);

		label49:
		if (!(!ctype_xdigit($ba2d146bb5a55097['api_key']) || (strlen($ba2d146bb5a55097['api_key']) != 32))) {
			goto label66;
		}

		$ba2d146bb5a55097['api_key'] = '';

		label66:

		goto label67;

		label67:

		self::$db->query('UPDATE `users` SET `password` = ?, `email` = ?, `theme` = ?, `hue` = ?, `timezone` = ?, `api_key` = ? WHERE `id` = ?;', $fd093b5358e9a519, $ba2d146bb5a55097['email'], $ba2d146bb5a55097['theme'], $ba2d146bb5a55097['hue'], $ba2d146bb5a55097['timezone'], $ba2d146bb5a55097['api_key'], self::$rUserInfo['id']);
		return ['status' => STATUS_SUCCESS];
		goto label89;

		label89:
	}

	static public function F7E2383F47283cb7($ba2d146bb5a55097)
	{
		goto label59;

		label2:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label12;

		label7:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label12:

		goto label37;

		label13:

		$B91645b8411dc88c = 'REPLACE INTO `blocked_ips`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label33;
		}

		$E5b50d60c471d7d6 = self::$db->last_insert_id();

		label33:

		if (isset($E5b50d60c471d7d6)) {
			goto label7;
		}

		goto label2;

		label37:

		goto label79;

		label38:

		goto label37;

		label39:

		$F647a429f8089f01 = ['ip' => $ba2d146bb5a55097['ip'], 'notes' => $ba2d146bb5a55097['notes'], 'date' => time()];
		touch(FLOOD_TMP_PATH . 'block_' . $ba2d146bb5a55097['ip']);
		$Fac87d38f7786df0 = c483A3A59265139e($F647a429f8089f01);
		goto label13;

		label59:

		if (self::A11aA39C8a0bdf06($ba2d146bb5a55097)) {
			goto label68;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label68:

		if (A35AB026c7590C99($ba2d146bb5a55097['ip'])) {
			goto label39;
		}

		return ['status' => STATUS_INVALID_IP, 'data' => $ba2d146bb5a55097];
		goto label38;

		label79:
	}

	static public function eF6CE97e3670f56e($ba2d146bb5a55097)
	{
		goto label2;

		label2:

		if (self::a11aa39c8A0bdF06($ba2d146bb5a55097)) {
			goto label11;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label11:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		goto label27;

		label19:

		if (isset($ba2d146bb5a55097['confirmReplace'])) {
			goto label26;
		}

		return ['status' => STATUS_SUCCESS];
		goto label133;

		label26:

		goto label55;

		label27:

		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);
		$a2a53f18f4f95c8b = json_decode($ba2d146bb5a55097['bouquet_order_array'], true);
		$C3552efd343ac0d5 = 1;

		foreach ($a2a53f18f4f95c8b as $b5fd3e3f0096d7f4) {
			self::$db->query('UPDATE `bouquets` SET `bouquet_order` = ? WHERE `id` = ?;', $C3552efd343ac0d5, $b5fd3e3f0096d7f4);
			$C3552efd343ac0d5++;
		}

		goto label19;

		label55:

		$d7bd0890458933bb = cfc02922066c4Cd5();

		foreach ($d7bd0890458933bb as $Caf4325605347834) {
			$f155fef57262b32a = json_decode($Caf4325605347834['bouquet'], true);
			$f155fef57262b32a = array_map('intval', sortArrayByArray($f155fef57262b32a, $a2a53f18f4f95c8b));
			self::$db->query('UPDATE `lines` SET `bouquet` = ? WHERE `id` = ?;', '[' . implode(',', $f155fef57262b32a) . ']', $Caf4325605347834['id']);
			XUI::cCb5075C679E7314($Caf4325605347834['id']);
		}

		$b00d1d65528795d1 = d8C8284136938EF0();

		foreach ($b00d1d65528795d1 as $cc386f9ba082650e) {
			$f155fef57262b32a = json_decode($cc386f9ba082650e['bouquets'], true);
			$f155fef57262b32a = array_map('intval', sortArrayByArray($f155fef57262b32a, $a2a53f18f4f95c8b));
			self::$db->query('UPDATE `users_packages` SET `bouquets` = ? WHERE `id` = ?;', '[' . implode(',', $f155fef57262b32a) . ']', $cc386f9ba082650e['id']);
		}

		goto label130;

		label130:

		return ['status' => STATUS_SUCCESS_REPLACE];

		label133:

		goto label134;

		label134:
	}

	static public function d66F5C0003F834bb($ba2d146bb5a55097)
	{
		goto label6;

		label2:

		return ['status' => STATUS_SUCCESS];
		goto label51;

		label6:

		if (self::a11Aa39c8a0bdF06($ba2d146bb5a55097)) {
			goto label15;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label15:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		goto label23;

		label23:

		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);
		$a2a53f18f4f95c8b = json_decode($ba2d146bb5a55097['stream_order_array'], true);
		$C3552efd343ac0d5 = 0;

		foreach ($a2a53f18f4f95c8b as $fe93a43f53d92a4e) {
			self::$db->query('UPDATE `streams` SET `order` = ? WHERE `id` = ?;', $C3552efd343ac0d5, $fe93a43f53d92a4e);
			$C3552efd343ac0d5++;
		}

		goto label2;

		label51:
	}

	static public function F1c265189A2dC086($ba2d146bb5a55097)
	{
		goto label181;

		label2:

		if (!$C7b0a4584580a53d) {
			goto label12;
		}

		D5612F049A8056A5([
			'action'     => 'stream',
			'sub'        => 'start',
			'stream_ids' => [$E5b50d60c471d7d6]
		]);

		label12:

		foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
			b8b65e8CB6a1DfE9('stream', $f155fef57262b32a, $E5b50d60c471d7d6);
		}

		goto label153;

		label22:

		goto label381;

		label23:

		$e6b00ffbf54a345a = [];

		foreach (json_decode($ba2d146bb5a55097['bouquet_create_list'], true) as $f155fef57262b32a) {
			$Fac87d38f7786df0 = C483a3a59265139e([
				'bouquet_name'     => $f155fef57262b32a,
				'bouquet_channels' => [],
				'bouquet_movies'   => [],
				'bouquet_series'   => [],
				'bouquet_radios'   => []
			]);
			$B91645b8411dc88c = 'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label63;
			}

			$b5fd3e3f0096d7f4 = self::$db->last_insert_id();
			$e6b00ffbf54a345a[$f155fef57262b32a] = $b5fd3e3f0096d7f4;

			label63:
		}

		goto label413;

		label66:

		$Fac87d38f7786df0 = c483A3a59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label143;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label142;

		label90:

		if (!self::$rSettings['download_images']) {
			goto label102;
		}

		$F647a429f8089f01['stream_icon'] = XUI::CCceE53491f4AF9C($F647a429f8089f01['stream_icon'], 3);

		label102:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label66;
		}

		$F647a429f8089f01['order'] = add0B2c53B2714a1();
		goto label66;

		label110:

		foreach (['allow_record', 'rtmp_output'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label120;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label122;

			label120:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label122:
		}

		$F647a429f8089f01['movie_properties'] = ['type' => intval($ba2d146bb5a55097['channel_type'])];

		if (intval($ba2d146bb5a55097['channel_type']) == 0) {
			goto label535;
		}

		$F647a429f8089f01['stream_source'] = $ba2d146bb5a55097['video_files'];
		goto label532;

		label142:

		goto label381;

		label143:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		$d5188a7c24fae75b = [];

		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label511;
		}

		goto label489;

		label153:

		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label177;
		}

		foreach (F964B9222b35ADdd() as $f155fef57262b32a) {
			if (in_array($f155fef57262b32a['id'], $Df5cd7b5dc4cc10c)) {
				goto label175;
			}

			f8e9ABb1F656e13f('stream', $f155fef57262b32a['id'], $E5b50d60c471d7d6);

			label175:
		}

		label177:

		XUI::cAC325153A658c37($E5b50d60c471d7d6);
		goto label376;

		label181:

		if (self::A11Aa39C8a0bDF06($ba2d146bb5a55097)) {
			goto label190;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label190:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label216;
		}

		if (e589A4Bf54A2dAd1('adv', 'create_channel')) {
			goto label397;
		}

		goto label396;

		label200:

		$F647a429f8089f01['series_no'] = intval($ba2d146bb5a55097['series_no']);

		label206:

		if ($ba2d146bb5a55097['transcode_profile_id'] == -1) {
			goto label382;
		}

		$F647a429f8089f01['movie_symlink'] = 0;
		goto label384;
		goto label382;

		label214:

		unset($F647a429f8089f01['id']);
		goto label233;

		label216:

		if (e589a4bf54A2dad1('adv', 'edit_cchannel')) {
			goto label224;
		}

		exit();
		goto label224;

		label224:

		$F647a429f8089f01 = E42eD0b0860db08a(F260b7a31F021E39($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label233:

		if (isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label484;
		}

		$C7b0a4584580a53d = false;
		goto label483;

		label238:

		$F771d40e8cf51e59 = [];

		foreach ($ba2d146bb5a55097['category_id'] as $Dbcac322b4274e46) {
			if (isset($Af54906d51bb2840[$Dbcac322b4274e46])) {
				goto label260;
			}

			if (!is_numeric($Dbcac322b4274e46)) {
				goto label258;
			}

			$F771d40e8cf51e59[] = intval($Dbcac322b4274e46);

			label258:

			goto label263;

			label260:

			$F771d40e8cf51e59[] = $Af54906d51bb2840[$Dbcac322b4274e46];

			label263:
		}

		$F647a429f8089f01['category_id'] = '[' . implode(',', array_map('intval', $F771d40e8cf51e59)) . ']';
		goto label90;

		label278:

		$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);

		foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
			goto label300;

			label288:

			goto label355;

			label290:

			$f6cad74ab6fb4eea = intval($Ec379295dc7029e6['parent']);
			goto label298;

			label297:

			$f6cad74ab6fb4eea = NULL;

			label298:

			goto label331;

			label300:

			if (!($Ec379295dc7029e6['parent'] != '#')) {
				goto label288;
			}

			$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);
			$F698c2c6c58adaf7[] = $C082ca9ed03f473c;
			$E8d26871dd3cdb88 = intval(in_array($C082ca9ed03f473c, $ba2d146bb5a55097['on_demand'] ?: []));

			if ($Ec379295dc7029e6['parent'] == 'source') {
				goto label297;
			}

			goto label290;

			label331:

			if (isset($d5188a7c24fae75b[$C082ca9ed03f473c])) {
				goto label345;
			}

			self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`, `on_demand`, `pids_create_channel`, `cchannel_rsources`) VALUES(?, ?, ?, ?, \'[]\', \'[]\');', $E5b50d60c471d7d6, $C082ca9ed03f473c, $f6cad74ab6fb4eea, $E8d26871dd3cdb88);
			goto label288;

			label345:

			self::$db->query('UPDATE `streams_servers` SET `parent_id` = ?, `on_demand` = ? WHERE `server_stream_id` = ?;', $f6cad74ab6fb4eea, $E8d26871dd3cdb88, $d5188a7c24fae75b[$C082ca9ed03f473c]);
			goto label288;

			label355:
		}

		foreach ($d5188a7c24fae75b as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
			if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
				goto label373;
			}

			fc84e25737908CB5($E5b50d60c471d7d6, $C082ca9ed03f473c, false, false);

			label373:
		}

		goto label513;

		label376:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label381:

		goto label543;

		label382:

		$F647a429f8089f01['movie_symlink'] = 1;

		label384:

		if (0 < count($F647a429f8089f01['stream_source'])) {
			goto label23;
		}

		return ['status' => STATUS_NO_SOURCES, 'data' => $ba2d146bb5a55097];
		goto label22;

		label396:

		exit();

		label397:

		$F647a429f8089f01 = c73Ed8d0B70ce12F('streams', $ba2d146bb5a55097);
		$F647a429f8089f01['type'] = 3;
		$F647a429f8089f01['added'] = time();
		goto label214;

		label409:

		$A4c41b9b5b0d667c = false;
		goto label412;

		label411:

		$A4c41b9b5b0d667c = true;

		label412:

		goto label110;

		label413:

		$Af54906d51bb2840 = [];

		foreach (json_decode($ba2d146bb5a55097['category_create_list'], true) as $Dbcac322b4274e46) {
			$Fac87d38f7786df0 = c483A3A59265139e(['category_type' => 'live', 'category_name' => $Dbcac322b4274e46, 'parent_id' => 0, 'cat_order' => 99, 'is_adult' => 0]);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label453;
			}

			$fe63f70cd74f3298 = self::$db->last_insert_id();
			$Af54906d51bb2840[$Dbcac322b4274e46] = $fe63f70cd74f3298;

			label453:
		}

		$Df5cd7b5dc4cc10c = [];

		foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
			if (isset($e6b00ffbf54a345a[$f155fef57262b32a])) {
				goto label477;
			}

			if (!is_numeric($f155fef57262b32a)) {
				goto label475;
			}

			$Df5cd7b5dc4cc10c[] = intval($f155fef57262b32a);

			label475:

			goto label480;

			label477:

			$Df5cd7b5dc4cc10c[] = $e6b00ffbf54a345a[$f155fef57262b32a];

			label480:
		}

		goto label238;

		label483:

		goto label485;

		label484:

		$C7b0a4584580a53d = true;

		label485:

		if (isset($ba2d146bb5a55097['reencode_on_edit'])) {
			goto label411;
		}

		goto label409;

		label489:

		self::$db->query('SELECT `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $E5b50d60c471d7d6);

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$d5188a7c24fae75b[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
		}

		label511:

		$F698c2c6c58adaf7 = [];
		goto label278;

		label513:

		if (!$A4c41b9b5b0d667c) {
			goto label531;
		}

		D5612f049A8056a5([
			'action'     => 'stream',
			'sub'        => 'stop',
			'stream_ids' => [$E5b50d60c471d7d6]
		]);
		self::$db->query('UPDATE `streams_servers` SET `pids_create_channel` = \'[]\', `cchannel_rsources` = \'[]\' WHERE `stream_id` = ?;', $E5b50d60c471d7d6);
		XUI::queueChannel($E5b50d60c471d7d6);

		label531:

		goto label2;

		label532:

		$F647a429f8089f01['series_no'] = 0;
		goto label206;

		label535:

		$Aac64ae34ff57fc4 = cda6Bf7272fceBb4($ba2d146bb5a55097['series_no']);
		$F647a429f8089f01['stream_source'] = $Aac64ae34ff57fc4;
		goto label200;

		label543:
	}

	static public function dD2cEDE3D30CE0dF($ba2d146bb5a55097)
	{
		goto label2;

		label2:

		if (self::a11aa39C8A0bdf06($ba2d146bb5a55097)) {
			goto label11;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label11:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label65;
		}

		if (E589a4bf54a2DaD1('adv', 'add_epg')) {
			goto label33;
		}

		goto label32;

		label21:

		goto label31;

		label22:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label31:

		goto label82;

		label32:

		exit();

		label33:

		$F647a429f8089f01 = C73eD8D0b70Ce12f('epg', $ba2d146bb5a55097);
		unset($F647a429f8089f01['id']);
		goto label41;
		goto label65;

		label41:

		$Fac87d38f7786df0 = C483A3A59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `epg`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label22;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label21;

		label65:

		if (e589a4BF54a2DAd1('adv', 'epg_edit')) {
			goto label72;
		}

		exit();

		label72:

		$F647a429f8089f01 = E42Ed0B0860db08a(getEPG($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		goto label41;

		label82:
	}

	static public function processProvider($ba2d146bb5a55097)
	{
		goto label77;

		label2:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label96;

		label7:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];
		goto label96;

		label17:

		if (E589a4BF54a2DAd1('adv', 'streams')) {
			goto label24;
		}

		exit();

		label24:

		$F647a429f8089f01 = e42eD0B0860dB08a(getStreamProvider($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		goto label97;

		label34:

		goto label45;

		label35:

		self::$db->query('SELECT `id` FROM `providers` WHERE `ip` = ? AND `username` = ? AND `id` <> ? LIMIT 1;', $F647a429f8089f01['ip'], $F647a429f8089f01['username'], $ba2d146bb5a55097['edit']);

		label45:

		if (!(0 < self::$db->num_rows())) {
			goto label57;
		}

		goto label53;

		label53:

		return ['status' => STATUS_EXISTS_IP, 'data' => $ba2d146bb5a55097];

		label57:

		$Fac87d38f7786df0 = c483A3A59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `providers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label7;
		}

		goto label2;

		label77:

		if (self::a11aa39c8a0bdf06($ba2d146bb5a55097)) {
			goto label86;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label86:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label17;
		}

		if (E589A4bf54A2dad1('adv', 'streams')) {
			goto label124;
		}

		goto label123;

		label96:

		goto label132;

		label97:

		foreach (['enabled', 'ssl', 'hls', 'legacy'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label107;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label109;

			label107:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label109:
		}

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label35;
		}

		self::$db->query('SELECT `id` FROM `providers` WHERE `ip` = ? AND `username` = ? LIMIT 1;', $F647a429f8089f01['ip'], $F647a429f8089f01['username']);
		goto label34;

		label123:

		exit();

		label124:

		$F647a429f8089f01 = C73ED8D0b70Ce12f('providers', $ba2d146bb5a55097);
		unset($F647a429f8089f01['id']);
		goto label97;
		goto label17;

		label132:
	}

	static public function E87d54803aFCB01e($ba2d146bb5a55097)
	{
		goto label448;

		label2:

		exit();

		label3:

		$F647a429f8089f01 = C73ed8d0b70CE12f('streams', $ba2d146bb5a55097);
		$F647a429f8089f01['type'] = 5;
		$F647a429f8089f01['added'] = time();
		goto label30;

		label15:

		exit();

		label16:

		$F647a429f8089f01 = e42ED0b0860Db08a(f260b7A31f021E39($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label25:

		$F647a429f8089f01['stream_source'] = [$ba2d146bb5a55097['stream_source']];
		goto label116;

		label30:

		$F647a429f8089f01['series_no'] = intval($ba2d146bb5a55097['series']);
		unset($F647a429f8089f01['id']);
		goto label25;

		label38:

		if (E589A4bF54A2DaD1('adv', 'edit_episode')) {
			goto label16;
		}

		goto label15;

		label45:

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key']);
		goto label61;

		label52:

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key'], self::$rSettings['tmdb_language']);

		label61:

		goto label171;

		label62:

		$Daecfbd6410b9c42 = pathinfo(explode('?', $ba2d146bb5a55097['stream_source'])[0])['extension'];

		if ($Daecfbd6410b9c42) {
			goto label113;
		}

		if ($Dd41a39d4bb950cf['target_container']) {
			goto label81;
		}

		$Dd41a39d4bb950cf['target_container'] = 'mp4';

		label81:

		goto label112;

		label82:

		$Dd41a39d4bb950cf = [
			'filename'         => $F647a429f8089f01['stream_source'][0],
			'properties'       => [],
			'name'             => $F647a429f8089f01['stream_display_name'],
			'episode'          => $ba2d146bb5a55097['episode'],
			'target_container' => $ba2d146bb5a55097['target_container']
		];

		if (!self::$rSettings['download_images']) {
			goto label105;
		}

		$ba2d146bb5a55097['movie_image'] = XUI::cCCEe53491F4af9c($ba2d146bb5a55097['movie_image'], 5);

		label105:

		$d03052828cab569a = intval($ba2d146bb5a55097['episode_run_time']) * 60;
		goto label718;

		label112:

		goto label115;

		label113:

		$Dd41a39d4bb950cf['target_container'] = $Daecfbd6410b9c42;

		label115:

		goto label793;

		label116:

		if (0 < strlen($ba2d146bb5a55097['movie_subtitles'])) {
			goto label126;
		}

		$F647a429f8089f01['movie_subtitles'] = NULL;
		goto label480;

		label126:

		$E3665d09b9cea208 = explode(':', $ba2d146bb5a55097['movie_subtitles']);
		goto label468;

		label133:

		foreach (['read_native', 'movie_symlink', 'direct_source', 'direct_proxy', 'remove_subtitles'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label143;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label145;

			label143:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label145:
		}

		if (isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label764;
		}

		$C7b0a4584580a53d = false;
		goto label765;
		goto label764;

		label153:

		if (isset($ba2d146bb5a55097['multi'])) {
			goto label164;
		}

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['series_id' => $ba2d146bb5a55097['series'], 'insert_id' => $E5b50d60c471d7d6]
		];
		goto label467;

		label164:

		return [
			'status' => STATUS_SUCCESS_MULTI,
			0        => ['series_id' => $ba2d146bb5a55097['series']]
		];
		goto label467;

		label171:

		$F36e7d4d6716c100 = json_decode($b41097c951ee83d3->getSeason($ba2d146bb5a55097['tmdb_id'], intval($ba2d146bb5a55097['season_num']))->getJSON(), true);

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $F48d5724f3b4ec96) {
			goto label406;

			label192:

			goto label214;

			label194:

			$Dd41a39d4bb950cf['name'] = $d02ef9ae10a41939['title'] . ' - S' . sprintf('%02d', intval($ba2d146bb5a55097['season_num'])) . 'E' . sprintf('%02d', $D3bdc43c3a3103fb) . ' - ';

			label214:

			goto label216;

			label216:

			$Dd41a39d4bb950cf['episode'] = $D3bdc43c3a3103fb;

			foreach ($F36e7d4d6716c100['episodes'] as $e61e6dcee1252fa2) {
				goto label224;

				label224:

				if (!(intval($e61e6dcee1252fa2['episode_number']) == $D3bdc43c3a3103fb)) {
					goto label276;
				}

				if (!(0 < strlen($e61e6dcee1252fa2['still_path']))) {
					goto label279;
				}

				$c68b76c7e42b19eb = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $e61e6dcee1252fa2['still_path'];

				if (!self::$rSettings['download_images']) {
					goto label279;
				}

				$c68b76c7e42b19eb = XUI::CCCEE53491f4aF9c($c68b76c7e42b19eb, 5);
				goto label279;

				label262:

				if (!(strlen($Dd41a39d4bb950cf['properties']['movie_image'][0]) == 0)) {
					goto label276;
				}

				unset($Dd41a39d4bb950cf['properties']['movie_image']);

				label276:

				goto label319;

				label279:

				$Dd41a39d4bb950cf['name'] .= $e61e6dcee1252fa2['name'];
				$d03052828cab569a = intval($d02ef9ae10a41939['episode_run_time']) * 60;
				$Dd41a39d4bb950cf['properties'] = [
					'tmdb_id'       => $e61e6dcee1252fa2['id'],
					'release_date'  => $e61e6dcee1252fa2['air_date'],
					'plot'          => $e61e6dcee1252fa2['overview'],
					'duration_secs' => $d03052828cab569a,
					'duration'      => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
					'movie_image'   => $c68b76c7e42b19eb,
					'video'         => [],
					'audio'         => [],
					'bitrate'       => 0,
					'rating'        => $e61e6dcee1252fa2['vote_average'],
					'season'        => $ba2d146bb5a55097['season_num']
				];
				goto label262;

				label319:
			}

			if (!(strlen($Dd41a39d4bb950cf['name']) == 0)) {
				goto label363;
			}

			$Dd41a39d4bb950cf['name'] = 'No Episode Title';
			goto label363;

			label334:

			goto label444;

			label336:

			$Dd41a39d4bb950cf['filename'] = 's:' . $ba2d146bb5a55097['server'] . ':' . $ba2d146bb5a55097['season_folder'] . $F48d5724f3b4ec96;
			$c68b76c7e42b19eb = '';
			if (isset($ba2d146bb5a55097['addName1']) && isset($ba2d146bb5a55097['addName2'])) {
				goto label194;
			}

			if (isset($ba2d146bb5a55097['addName1'])) {
				goto label400;
			}

			if (!isset($ba2d146bb5a55097['addName2'])) {
				goto label398;
			}

			goto label380;

			label363:

			$d88ca0c1f58e0dc1 = pathinfo(explode('?', $F48d5724f3b4ec96)[0]);
			$Dd41a39d4bb950cf['target_container'] = $d88ca0c1f58e0dc1['extension'];
			$f0e9377c9109ab28[] = $Dd41a39d4bb950cf;

			label378:

			goto label334;

			label380:

			$Dd41a39d4bb950cf['name'] = 'S' . sprintf('%02d', intval($ba2d146bb5a55097['season_num'])) . 'E' . sprintf('%02d', $D3bdc43c3a3103fb) . ' - ';

			label398:

			goto label192;

			label400:

			$Dd41a39d4bb950cf['name'] = $d02ef9ae10a41939['title'] . ' - ';
			goto label192;

			label406:

			$E3665d09b9cea208 = explode('_', $Bb672d1983256a93);
			if (!(($E3665d09b9cea208[0] == 'episode') && ($E3665d09b9cea208[2] == 'name'))) {
				goto label334;
			}

			if (!(0 < strlen($ba2d146bb5a55097['episode_' . $E3665d09b9cea208[1] . '_num']))) {
				goto label378;
			}

			$Dd41a39d4bb950cf = [
				'filename'         => '',
				'properties'       => [],
				'name'             => '',
				'episode'          => 0,
				'target_container' => ''
			];
			$D3bdc43c3a3103fb = intval($ba2d146bb5a55097['episode_' . $E3665d09b9cea208[1] . '_num']);
			goto label336;

			label444:
		}

		label446:

		$d524eb335fa631c9 = [];
		goto label488;

		label448:

		if (self::a11aa39c8A0bDf06($ba2d146bb5a55097)) {
			goto label457;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label457:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label38;
		}

		if (e589a4BF54A2dAd1('adv', 'add_episode')) {
			goto label3;
		}

		goto label2;

		label467:

		goto label804;

		label468:

		$F647a429f8089f01['movie_subtitles'] = [
			'files'    => [$E3665d09b9cea208[2]],
			'names'    => ['Subtitles'],
			'charset'  => ['UTF-8'],
			'location' => intval($E3665d09b9cea208[1])
		];

		label480:

		if (!(0 < $F647a429f8089f01['transcode_profile_id'])) {
			goto label487;
		}

		$F647a429f8089f01['enable_transcode'] = 1;

		label487:

		goto label133;

		label488:

		foreach ($f0e9377c9109ab28 as $Dd41a39d4bb950cf) {
			goto label589;

			label492:

			$F698c2c6c58adaf7 = [];
			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label526;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);
				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;

				if (isset($d5188a7c24fae75b[$C082ca9ed03f473c])) {
					goto label526;
				}

				self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `on_demand`) VALUES(?, ?, 0);', $E5b50d60c471d7d6, $C082ca9ed03f473c);

				label526:
			}

			foreach ($d5188a7c24fae75b as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label545;
				}

				FC84E25737908Cb5($E5b50d60c471d7d6, $C082ca9ed03f473c, true, false);

				label545:
			}

			goto label610;

			label549:

			goto label554;

			label551:

			$F647a429f8089f01['target_container'] = $Dd41a39d4bb950cf['target_container'];

			label554:

			$Fac87d38f7786df0 = c483a3a59265139E($F647a429f8089f01);
			goto label565;

			label560:

			XUI::cAC325153a658c37($E5b50d60c471d7d6);

			label563:

			goto label706;

			label565:

			$B91645b8411dc88c = 'REPLACE INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label587;
			}

			return ['status' => STATUS_FAILURE];
			goto label563;

			label587:

			goto label656;

			label589:

			$F647a429f8089f01['stream_source'] = [$Dd41a39d4bb950cf['filename']];
			$F647a429f8089f01['movie_properties'] = $Dd41a39d4bb950cf['properties'];
			$F647a429f8089f01['stream_display_name'] = $Dd41a39d4bb950cf['name'];

			if (!empty($Dd41a39d4bb950cf['target_container'])) {
				goto label551;
			}

			if (empty($ba2d146bb5a55097['target_container'])) {
				goto label691;
			}

			goto label686;

			label610:

			if (!$C7b0a4584580a53d) {
				goto label616;
			}

			$d524eb335fa631c9[] = $E5b50d60c471d7d6;

			label616:

			self::$db->query('UPDATE `streams_series` SET `last_modified` = ? WHERE `id` = ?;', time(), $ba2d146bb5a55097['streams_series']);
			goto label560;

			label627:

			if (!isset($ba2d146bb5a55097['edit'])) {
				goto label654;
			}

			self::$db->query('SELECT `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $E5b50d60c471d7d6);

			foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
				$d5188a7c24fae75b[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
			}

			label654:

			goto label492;

			label656:

			$E5b50d60c471d7d6 = self::$db->last_insert_id();
			self::$db->query('DELETE FROM `streams_episodes` WHERE `stream_id` = ?;', $E5b50d60c471d7d6);
			self::$db->query('INSERT INTO `streams_episodes`(`season_num`, `series_id`, `stream_id`, `episode_num`) VALUES(?, ?, ?, ?);', $ba2d146bb5a55097['season_num'], $ba2d146bb5a55097['series'], $E5b50d60c471d7d6, $Dd41a39d4bb950cf['episode']);
			F8D3626B322Aaf7F(intval($ba2d146bb5a55097['series']));
			$d5188a7c24fae75b = [];
			goto label627;

			label686:

			$F647a429f8089f01['target_container'] = $ba2d146bb5a55097['target_container'];
			goto label704;

			label691:

			$F647a429f8089f01['target_container'] = pathinfo(explode('?', $Dd41a39d4bb950cf['filename'])[0])['extension'];

			label704:

			goto label549;

			label706:
		}

		if (!$C7b0a4584580a53d) {
			goto label717;
		}

		D5612F049A8056a5(['action' => 'vod', 'sub' => 'start', 'stream_ids' => $d524eb335fa631c9]);

		label717:

		goto label153;

		label718:

		$Dd41a39d4bb950cf['properties'] = [
			'release_date'  => $ba2d146bb5a55097['release_date'],
			'plot'          => $ba2d146bb5a55097['plot'],
			'duration_secs' => $d03052828cab569a,
			'duration'      => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
			'movie_image'   => $ba2d146bb5a55097['movie_image'],
			'video'         => [],
			'audio'         => [],
			'bitrate'       => 0,
			'rating'        => $ba2d146bb5a55097['rating'],
			'season'        => $ba2d146bb5a55097['season_num'],
			'tmdb_id'       => $ba2d146bb5a55097['tmdb_id']
		];

		if (!(strlen($Dd41a39d4bb950cf['properties']['movie_image'][0]) == 0)) {
			goto label759;
		}

		unset($Dd41a39d4bb950cf['properties']['movie_image']);

		label759:

		if (!$ba2d146bb5a55097['direct_proxy']) {
			goto label115;
		}

		goto label62;

		label764:

		$C7b0a4584580a53d = true;

		label765:

		$f0e9377c9109ab28 = [];

		if (isset($ba2d146bb5a55097['multi'])) {
			goto label796;
		}

		goto label82;

		label770:

		set_time_limit(0);
		include INCLUDES_PATH . 'libs/tmdb.php';
		$d02ef9ae10a41939 = a2297542D8BD35F6(intval($ba2d146bb5a55097['series']));

		if (0 < strlen(self::$rSettings['tmdb_language'])) {
			goto label52;
		}

		goto label45;

		label793:

		$f0e9377c9109ab28[] = $Dd41a39d4bb950cf;
		goto label446;

		label796:

		if (E589A4Bf54a2DAd1('adv', 'import_episodes')) {
			goto label770;
		}

		exit();
		goto label770;

		label804:
	}

	static public function F7003F34d5471A0c($ba2d146bb5a55097)
	{
		goto label430;

		label2:

		if (!isset($ba2d146bb5a55097['reencode_on_edit'])) {
			goto label15;
		}

		foreach ($ef0f5d321b49e01b as $C082ca9ed03f473c => $b251d0186f46fa42) {
			XUI::queueMovies($b251d0186f46fa42, $C082ca9ed03f473c);
		}

		label15:

		if (!isset($ba2d146bb5a55097['reprocess_tmdb'])) {
			goto label276;
		}

		goto label272;

		label20:

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$d5188a7c24fae75b[intval($Fb9da1713bff19ce['stream_id'])][intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
			$Aa455b79a8de8c3f[intval($Fb9da1713bff19ce['stream_id'])][] = intval($Fb9da1713bff19ce['server_id']);
		}

		$C21b8218fb28a18d = '';

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			goto label124;

			label58:

			goto label213;

			label60:

			if (!isset($ba2d146bb5a55097['reencode_on_edit'])) {
				goto label73;
			}

			foreach ($Aa455b79a8de8c3f[$ee6d1fc5d801b43f] as $C082ca9ed03f473c) {
				$ef0f5d321b49e01b[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;
			}

			label73:

			foreach ($ef4c4dea281208bc as $C082ca9ed03f473c => $b4b8bc59289836c2) {
				deleteStreamsByServer($b4b8bc59289836c2, $C082ca9ed03f473c, true);
			}

			goto label58;

			label85:

			if (!($ba2d146bb5a55097['server_type'] == 'SET')) {
				goto label122;
			}

			foreach ($d5188a7c24fae75b[$ee6d1fc5d801b43f] as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label120;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;

				if (!(($Bb672d1983256a93 = array_search($C082ca9ed03f473c, $Aa455b79a8de8c3f[$ee6d1fc5d801b43f])) !== false)) {
					goto label120;
				}

				unset($Aa455b79a8de8c3f[$ee6d1fc5d801b43f][$Bb672d1983256a93]);

				label120:
			}

			label122:

			goto label60;

			label124:

			if (!isset($ba2d146bb5a55097['c_server_tree'])) {
				goto label122;
			}

			$F698c2c6c58adaf7 = [];
			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				goto label158;

				label141:

				$C21b8218fb28a18d .= '(' . intval($ee6d1fc5d801b43f) . ', ' . intval($C082ca9ed03f473c) . '),';
				$Aa455b79a8de8c3f[$ee6d1fc5d801b43f][] = $C082ca9ed03f473c;

				label155:

				goto label192;

				label158:

				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label155;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);

				if (in_array($ba2d146bb5a55097['server_type'], ['ADD', 'SET'])) {
					goto label198;
				}

				if (!isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label195;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;
				goto label195;

				label192:

				goto label209;

				label195:

				goto label155;

				label198:

				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;

				if (isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label155;
				}

				goto label141;

				label209:
			}

			goto label85;

			label213:
		}

		goto label240;

		label216:

		if (!isset($ba2d146bb5a55097['c_target_container'])) {
			goto label223;
		}

		$F647a429f8089f01['target_container'] = $ba2d146bb5a55097['target_container'];

		label223:

		if (!isset($ba2d146bb5a55097['c_transcode_profile_id'])) {
			goto label451;
		}

		$F647a429f8089f01['transcode_profile_id'] = $ba2d146bb5a55097['transcode_profile_id'];
		goto label348;

		label231:

		if (isset($ba2d146bb5a55097['read_native'])) {
			goto label237;
		}

		$F647a429f8089f01['read_native'] = 0;
		goto label338;

		label237:

		$F647a429f8089f01['read_native'] = 1;
		goto label338;

		label240:

		if (empty($C21b8218fb28a18d)) {
			goto label255;
		}

		$C21b8218fb28a18d = rtrim($C21b8218fb28a18d, ',');
		self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`) VALUES ' . $C21b8218fb28a18d . ';');

		label255:

		XUI::updateStreams($dec36723d7be7c49);
		goto label2;

		label259:

		$F647a429f8089f01['direct_proxy'] = 1;
		$F647a429f8089f01['direct_source'] = 1;

		label263:

		if (!isset($ba2d146bb5a55097['c_read_native'])) {
			goto label338;
		}

		goto label231;

		label268:

		goto label271;

		label269:

		$F647a429f8089f01['direct_source'] = 1;

		label271:

		goto label413;

		label272:

		XUI::refreshMovies($dec36723d7be7c49, 3);

		label276:

		return ['status' => STATUS_SUCCESS];
		goto label472;

		label280:

		self::$db->query('UPDATE `streams_episodes` SET `series_id` = ? WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');', $ba2d146bb5a55097['serie_name']);
		self::$db->query('UPDATE `streams` SET `series_no` = ? WHERE `id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');', $ba2d146bb5a55097['serie_name']);

		label312:

		$Fac87d38f7786df0 = c483a3A59265139E($F647a429f8089f01);

		if (!(0 < count($Fac87d38f7786df0['data']))) {
			goto label394;
		}

		goto label374;

		label325:

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label329:

		$F647a429f8089f01 = [];

		if (!isset($ba2d146bb5a55097['c_movie_symlink'])) {
			goto label362;
		}

		if (isset($ba2d146bb5a55097['movie_symlink'])) {
			goto label427;
		}

		goto label424;

		label338:

		if (!isset($ba2d146bb5a55097['c_remove_subtitles'])) {
			goto label361;
		}

		if (isset($ba2d146bb5a55097['remove_subtitles'])) {
			goto label359;
		}

		$F647a429f8089f01['remove_subtitles'] = 0;
		goto label358;

		label348:

		if (0 < $F647a429f8089f01['transcode_profile_id']) {
			goto label355;
		}

		$F647a429f8089f01['enable_transcode'] = 0;
		goto label451;

		label355:

		$F647a429f8089f01['enable_transcode'] = 1;
		goto label451;

		label358:

		goto label361;

		label359:

		$F647a429f8089f01['remove_subtitles'] = 1;

		label361:

		goto label216;

		label362:

		if (!isset($ba2d146bb5a55097['c_direct_source'])) {
			goto label271;
		}

		if (isset($ba2d146bb5a55097['direct_source'])) {
			goto label269;
		}

		$F647a429f8089f01['direct_source'] = 0;
		$F647a429f8089f01['direct_proxy'] = 0;
		goto label268;

		label374:

		$B91645b8411dc88c = 'UPDATE `streams` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');';
		self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

		label394:

		$ef4c4dea281208bc = $ef0f5d321b49e01b = $Aa455b79a8de8c3f = $d5188a7c24fae75b = [];
		self::$db->query('SELECT `stream_id`, `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');
		goto label20;

		label413:

		if (!isset($ba2d146bb5a55097['c_direct_proxy'])) {
			goto label263;
		}

		if (isset($ba2d146bb5a55097['direct_proxy'])) {
			goto label423;
		}

		$F647a429f8089f01['direct_proxy'] = 0;
		goto label263;

		label423:

		goto label259;

		label424:

		$F647a429f8089f01['movie_symlink'] = 0;
		goto label429;

		label427:

		$F647a429f8089f01['movie_symlink'] = 1;

		label429:

		goto label362;

		label430:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::A11AA39C8A0bdf06($ba2d146bb5a55097)) {
			goto label329;
		}

		goto label325;

		label451:

		$dec36723d7be7c49 = confirmIDs(json_decode($ba2d146bb5a55097['streams'], true));

		if (!(0 < count($dec36723d7be7c49))) {
			goto label276;
		}

		if (!isset($ba2d146bb5a55097['c_serie_name'])) {
			goto label312;
		}

		goto label280;

		label472:
	}

	static public function bc0c0dF5663423B9($ba2d146bb5a55097)
	{
		goto label223;

		label2:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		$b00d1d65528795d1 = json_decode($ba2d146bb5a55097['packages_selected'], true);

		foreach ($b00d1d65528795d1 as $cc386f9ba082650e) {
			self::$db->query('SELECT `groups` FROM `users_packages` WHERE `id` = ?;', $cc386f9ba082650e);

			if (!(self::$db->num_rows() == 1)) {
				goto label62;
			}

			$c65e1c212da2f6fc = json_decode(self::$db->get_row()['groups'], true);

			if (in_array($E5b50d60c471d7d6, $c65e1c212da2f6fc)) {
				goto label62;
			}

			$c65e1c212da2f6fc[] = $E5b50d60c471d7d6;
			self::$db->query('UPDATE `users_packages` SET `groups` = ? WHERE `id` = ?;', '[' . implode(',', array_map('intval', $c65e1c212da2f6fc)) . ']', $cc386f9ba082650e);

			label62:
		}

		self::$db->query('SELECT `id`, `groups` FROM `users_packages` WHERE JSON_CONTAINS(`groups`, ?, \'$\');', $E5b50d60c471d7d6);
		goto label136;

		label70:

		$B91645b8411dc88c = 'REPLACE INTO `users_groups`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label90;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label190;

		label90:

		goto label2;

		label91:

		foreach (['is_admin', 'is_reseller', 'allow_restrictions', 'create_sub_resellers', 'delete_users', 'allow_download', 'can_view_vod', 'reseller_client_connection_logs', 'allow_change_bouquets', 'allow_change_username', 'allow_change_password'] as $f284920b9991e04c) {
			if (isset($ba2d146bb5a55097[$f284920b9991e04c])) {
				goto label101;
			}

			$F647a429f8089f01[$f284920b9991e04c] = 0;
			goto label103;

			label101:

			$F647a429f8089f01[$f284920b9991e04c] = 1;

			label103:
		}
		if (!(!$F647a429f8089f01['can_delete'] && isset($ba2d146bb5a55097['edit']))) {
			goto label257;
		}

		$fb719dae9595b9fa = A752238c4005CBbc($ba2d146bb5a55097['edit']);
		goto label251;

		label119:

		if (E589A4Bf54A2dAD1('adv', 'edit_group')) {
			goto label126;
		}

		exit();

		label126:

		$F647a429f8089f01 = e42Ed0B0860dB08a(a752238C4005cbbC($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		goto label91;

		label136:

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			if (in_array($Fb9da1713bff19ce['id'], $b00d1d65528795d1)) {
				goto label183;
			}

			$c65e1c212da2f6fc = json_decode($Fb9da1713bff19ce['groups'], true);

			if (!(($Bb672d1983256a93 = array_search($E5b50d60c471d7d6, $c65e1c212da2f6fc)) !== false)) {
				goto label183;
			}

			unset($c65e1c212da2f6fc[$Bb672d1983256a93]);
			self::$db->query('UPDATE `users_packages` SET `groups` = ? WHERE `id` = ?;', '[' . implode(',', array_map('intval', $c65e1c212da2f6fc)) . ']', $Fb9da1713bff19ce['id']);

			label183:
		}

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label190:

		goto label276;

		label191:

		return ['status' => STATUS_INVALID_NAME, 'data' => $ba2d146bb5a55097];

		label195:

		$F647a429f8089f01['subresellers'] = '[' . implode(',', array_map('intval', json_decode($ba2d146bb5a55097['groups_selected'], true))) . ']';
		$F647a429f8089f01['notice_html'] = htmlentities($ba2d146bb5a55097['notice_html']);
		$Fac87d38f7786df0 = c483A3a59265139e($F647a429f8089f01);
		goto label70;

		label223:

		if (self::a11AA39c8a0bdF06($ba2d146bb5a55097)) {
			goto label232;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label232:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label119;
		}

		if (e589A4BF54a2DAD1('adv', 'add_group')) {
			goto label243;
		}

		goto label242;

		label242:

		exit();

		label243:

		$F647a429f8089f01 = c73ED8d0b70cE12f('users_groups', $ba2d146bb5a55097);
		unset($F647a429f8089f01['id']);
		goto label91;
		goto label119;

		label251:

		$F647a429f8089f01['is_admin'] = $fb719dae9595b9fa['is_admin'];
		$F647a429f8089f01['is_reseller'] = $fb719dae9595b9fa['is_reseller'];

		label257:

		$F647a429f8089f01['allowed_pages'] = array_values(json_decode($ba2d146bb5a55097['permissions_selected'], true));

		if (!(strlen($ba2d146bb5a55097['group_name']) == 0)) {
			goto label195;
		}

		goto label191;

		label276:
	}

	static public function dA7Dc6613edb583d($ba2d146bb5a55097)
	{
		goto label61;

		label2:

		$Fac87d38f7786df0 = c483A3a59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `blocked_isps`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label27;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label36;
		goto label27;

		label27:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label36:

		goto label104;

		label37:

		if (E589A4bf54a2daD1('adv', 'block_isps')) {
			goto label44;
		}

		exit();

		label44:

		$F647a429f8089f01 = e42ED0B0860DB08a(a298662c65177297($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		goto label54;

		label54:

		if (isset($ba2d146bb5a55097['blocked'])) {
			goto label60;
		}

		$F647a429f8089f01['blocked'] = 0;
		goto label82;

		label60:

		goto label80;

		label61:

		if (self::a11AA39c8a0bDf06($ba2d146bb5a55097)) {
			goto label70;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label70:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label37;
		}

		if (E589a4bf54A2DaD1('adv', 'block_isps')) {
			goto label96;
		}

		goto label95;

		label80:

		$F647a429f8089f01['blocked'] = 1;

		label82:

		if (!(strlen($F647a429f8089f01['isp']) == 0)) {
			goto label94;
		}

		return ['status' => STATUS_INVALID_NAME, 'data' => $ba2d146bb5a55097];

		label94:

		goto label2;

		label95:

		exit();

		label96:

		$F647a429f8089f01 = C73eD8D0B70CE12f('blocked_isps', $ba2d146bb5a55097);
		unset($F647a429f8089f01['id']);
		goto label54;
		goto label37;

		label104:
	}

	static public function E10e6F46945857EB($ba2d146bb5a55097, $d741c98ae96b4809 = false)
	{
		goto label155;

		label3:

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'ADMIN\', ?, ?, ?, ?, ?);', $Ae7171937d7e569f['id'], $E59d0debc75e7be8['id'], 'INVALID_CODE', $b38e11ffdc6a3abb, time());

		label16:

		return ['status' => STATUS_INVALID_CODE];
		goto label42;

		label20:

		goto label128;

		label21:

		$b38e11ffdc6a3abb = Dfac1B11d332C193();
		$E59d0debc75e7be8 = ADc21ef12C018a4c($ba2d146bb5a55097['username'], $ba2d146bb5a55097['password']);
		$Ae7171937d7e569f = c9359222B3E3D256(true);

		if (isset($E59d0debc75e7be8)) {
			goto label43;
		}

		goto label220;

		label39:

		return ['status' => STATUS_SUCCESS];

		label42:

		goto label127;

		label43:

		self::$db->query('SELECT COUNT(*) AS `count` FROM `access_codes`;');
		$b27c202ab93df9a5 = self::$db->get_row()['count'];
		if (($b27c202ab93df9a5 == 0) || in_array($E59d0debc75e7be8['member_group_id'], json_decode($Ae7171937d7e569f['groups'], true))) {
			goto label20;
		}

		if (!self::$rSettings['save_login_logs']) {
			goto label16;
		}

		goto label3;

		label73:

		goto label42;

		label74:

		$fc88aeb7b0e77a48 = DEbA522c14D0644c($ba2d146bb5a55097['password']);

		if ($E59d0debc75e7be8['password'] != $fc88aeb7b0e77a48) {
			goto label185;
		}

		self::$db->query('UPDATE `users` SET `last_login` = UNIX_TIMESTAMP(), `ip` = ? WHERE `id` = ?;', $b38e11ffdc6a3abb, $E59d0debc75e7be8['id']);
		goto label184;

		label91:

		$_SESSION['ip'] = $b38e11ffdc6a3abb;
		$_SESSION['code'] = C9359222B3e3d256();
		$_SESSION['verify'] = md5($E59d0debc75e7be8['username'] . '||' . $fc88aeb7b0e77a48);

		if (!self::$rSettings['save_login_logs']) {
			goto label39;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'ADMIN\', ?, ?, ?, ?, ?);', $Ae7171937d7e569f['id'], $E59d0debc75e7be8['id'], 'SUCCESS', $b38e11ffdc6a3abb, time());
		goto label39;

		label127:

		goto label263;

		label128:

		$db0a61ef32b89a27 = ACeb5cfE4194f4f0($E59d0debc75e7be8['member_group_id']);

		if ($db0a61ef32b89a27['is_admin']) {
			goto label202;
		}

		if (!self::$rSettings['save_login_logs']) {
			goto label154;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'ADMIN\', ?, ?, ?, ?, ?);', $Ae7171937d7e569f['id'], $E59d0debc75e7be8['id'], 'NOT_ADMIN', $b38e11ffdc6a3abb, time());

		label154:

		goto label198;

		label155:
		if (!(self::$rSettings['recaptcha_enable'] && !$d741c98ae96b4809)) {
			goto label21;
		}

		$Fca04b1755da7bd5 = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . self::$rSettings['recaptcha_v2_secret_key'] . '&response=' . $ba2d146bb5a55097['g-recaptcha-response']), true);

		if ($Fca04b1755da7bd5['success']) {
			goto label183;
		}

		return ['status' => STATUS_INVALID_CAPTCHA];

		label183:

		goto label21;

		label184:

		goto label193;

		label185:

		self::$db->query('UPDATE `users` SET `password` = ?, `last_login` = UNIX_TIMESTAMP(), `ip` = ? WHERE `id` = ?;', $fc88aeb7b0e77a48, $b38e11ffdc6a3abb, $E59d0debc75e7be8['id']);

		label193:

		$_SESSION['hash'] = $E59d0debc75e7be8['id'];
		goto label91;

		label198:

		return ['status' => STATUS_NOT_ADMIN];
		goto label42;

		label202:

		if ($E59d0debc75e7be8['status'] == 1) {
			goto label74;
		}
		if (!($db0a61ef32b89a27 && (($db0a61ef32b89a27['is_admin'] || $db0a61ef32b89a27['is_reseller']) && !$E59d0debc75e7be8['status']))) {
			goto label262;
		}

		goto label241;

		label220:

		if (!self::$rSettings['save_login_logs']) {
			goto label236;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'ADMIN\', ?, 0, ?, ?, ?);', $Ae7171937d7e569f['id'], 'INVALID_LOGIN', $b38e11ffdc6a3abb, time());

		label236:

		return ['status' => STATUS_FAILURE];
		goto label127;
		goto label43;

		label241:

		if (!self::$rSettings['save_login_logs']) {
			goto label259;
		}

		self::$db->query('INSERT INTO `login_logs`(`type`, `access_code`, `user_id`, `status`, `login_ip`, `date`) VALUES(\'ADMIN\', ?, ?, ?, ?, ?);', $Ae7171937d7e569f['id'], $E59d0debc75e7be8['id'], 'DISABLED', $b38e11ffdc6a3abb, time());

		label259:

		return ['status' => STATUS_DISABLED];

		label262:

		goto label73;

		label263:
	}

	static public function a36Ea57241A7fAb4($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11AA39c8A0bdf06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$D9846544dffb63c9 = json_decode($ba2d146bb5a55097['streams'], true);
		deleteStreams($D9846544dffb63c9, false);
		return ['status' => STATUS_SUCCESS];
	}

	static public function E90aAB8822Db3471($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11AA39C8A0BDF06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$B149a33cab1dcf5f = json_decode($ba2d146bb5a55097['movies'], true);
		deleteStreams($B149a33cab1dcf5f, true);
		return ['status' => STATUS_SUCCESS];
	}

	static public function db513dA74a80AA86($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11aA39C8A0BDF06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$d6fbf2cdbc7895f2 = json_decode($ba2d146bb5a55097['lines'], true);
		deleteLines($d6fbf2cdbc7895f2);
		return ['status' => STATUS_SUCCESS];
	}

	static public function b4d7fEbA5f4515f3($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::A11AA39c8A0bDf06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$d7bd0890458933bb = json_decode($ba2d146bb5a55097['users'], true);
		c05365DcB6D79618($d7bd0890458933bb);
		return ['status' => STATUS_SUCCESS];
	}

	static public function ECA87cE385946658($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::A11aA39c8a0BDf06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$D9846544dffb63c9 = json_decode($ba2d146bb5a55097['radios'], true);
		deleteStreams($D9846544dffb63c9, false);
		return ['status' => STATUS_SUCCESS];
	}

	static public function bc8340f8518F645b($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11aA39C8A0BDF06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$Af9802a47c92b987 = json_decode($ba2d146bb5a55097['mags'], true);
		deleteMAGs($Af9802a47c92b987);
		return ['status' => STATUS_SUCCESS];
	}

	static public function a6951fa57cE89958($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11aA39C8A0BDf06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$A7b3701b17eaab4b = json_decode($ba2d146bb5a55097['enigmas'], true);
		deleteEnigmas($A7b3701b17eaab4b);
		return ['status' => STATUS_SUCCESS];
	}

	static public function Ef244E3EBD7F3689($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11Aa39C8a0BDf06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$d02ef9ae10a41939 = json_decode($ba2d146bb5a55097['series'], true);
		deleteSeriesMass($d02ef9ae10a41939);
		return ['status' => STATUS_SUCCESS];
	}

	static public function e40efb7c8Fe0c75A($ba2d146bb5a55097)
	{
		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11aa39C8A0bdF06($ba2d146bb5a55097)) {
			goto label25;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label25:

		$D8329ce54de87aa5 = json_decode($ba2d146bb5a55097['episodes'], true);
		deleteStreams($D8329ce54de87aa5, true);
		return ['status' => STATUS_SUCCESS];
	}

	static public function BB0BF26077f756b6($ba2d146bb5a55097)
	{
		goto label715;

		label2:
		if (!(!empty($_FILES['m3u_file']['tmp_name']) && (strtolower(pathinfo(explode('?', $_FILES['m3u_file']['name'])[0], PATHINFO_EXTENSION)) == 'm3u'))) {
			goto label36;
		}

		$D6be258a9043b749 = file_get_contents($_FILES['m3u_file']['tmp_name']);

		label36:

		preg_match_all('/(?P<tag>#EXTINF:[-1,0])|(?:(?P<prop_key>[-a-z]+)=\\"(?P<prop_val>[^"]+)")|(?<name>,[^\\r\\n]+)|(?<url>http[^\\s]*:\\/\\/.*\\/.*)/', $D6be258a9043b749, $Ac97fb1939417214);
		$e02ff34f7d898a7b = [];
		goto label49;

		label43:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label48:

		goto label1454;

		label49:

		$ac5a5e03640888f4 = -1;
		$df6991d59f367c7e = 0;

		label51:

		if (!($df6991d59f367c7e < count($Ac97fb1939417214[0]))) {
			goto label910;
		}

		$B4a603c2a57d3acf = $Ac97fb1939417214[0][$df6991d59f367c7e];
		goto label823;

		label63:

		$d03052828cab569a = intval($ba2d146bb5a55097['episode_run_time']) * 60;
		$Dd41a39d4bb950cf['movie_properties'] = [
			'kinopoisk_url'          => $fd78f0fc1ab75e3f,
			'tmdb_id'                => $ba2d146bb5a55097['tmdb_id'],
			'name'                   => $F647a429f8089f01['stream_display_name'],
			'o_name'                 => $F647a429f8089f01['stream_display_name'],
			'cover_big'              => $ba2d146bb5a55097['movie_image'],
			'movie_image'            => $ba2d146bb5a55097['movie_image'],
			'release_date'           => $ba2d146bb5a55097['release_date'],
			'episode_run_time'       => $ba2d146bb5a55097['episode_run_time'],
			'youtube_trailer'        => $ba2d146bb5a55097['youtube_trailer'],
			'director'               => $ba2d146bb5a55097['director'],
			'actors'                 => $ba2d146bb5a55097['cast'],
			'cast'                   => $ba2d146bb5a55097['cast'],
			'description'            => $ba2d146bb5a55097['plot'],
			'plot'                   => $ba2d146bb5a55097['plot'],
			'age'                    => '',
			'mpaa_rating'            => '',
			'rating_count_kinopoisk' => 0,
			'country'                => $ba2d146bb5a55097['country'],
			'genre'                  => $ba2d146bb5a55097['genre'],
			'backdrop_path'          => [$ba2d146bb5a55097['backdrop_path']],
			'duration_secs'          => $d03052828cab569a,
			'duration'               => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
			'video'                  => [],
			'audio'                  => [],
			'bitrate'                => 0,
			'rating'                 => $ba2d146bb5a55097['rating']
		];

		if (!(strlen($Dd41a39d4bb950cf['movie_properties']['backdrop_path'][0]) == 0)) {
			goto label137;
		}

		unset($Dd41a39d4bb950cf['movie_properties']['backdrop_path']);

		label137:

		goto label630;

		label138:

		foreach ($C40c7290f7f7b51b as $A2fc3248dcf0b1e5) {
			goto label248;

			label142:

			foreach (F964B9222b35AddD() as $f155fef57262b32a) {
				if (in_array($f155fef57262b32a['id'], $Df5cd7b5dc4cc10c)) {
					goto label161;
				}

				F8E9aBb1f656E13F('movie', $f155fef57262b32a['id'], $E5b50d60c471d7d6);

				label161:
			}

			if (!$Ba90f6e2230cba27) {
				goto label172;
			}

			self::$db->query('INSERT INTO `watch_refresh`(`type`, `stream_id`, `status`) VALUES(1, ?, 0);', $E5b50d60c471d7d6);

			label172:

			goto label192;

			label174:

			foreach ($Af54906d51bb2840 as $Dbcac322b4274e46 => $Abcb228699a7f743) {
				$b62d6460eb33ea07->query('DELETE FROM `streams_categories` WHERE `id` = ?;', $Abcb228699a7f743);
			}

			return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
			goto label195;
			goto label214;

			label192:

			XUI::CaC325153A658C37($E5b50d60c471d7d6);

			label195:

			goto label512;

			label197:

			if (!$C7b0a4584580a53d) {
				goto label203;
			}

			$d524eb335fa631c9[] = $E5b50d60c471d7d6;

			label203:

			foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
				b8B65e8CB6A1DfE9('movie', $f155fef57262b32a, $E5b50d60c471d7d6);
			}

			goto label142;

			label214:

			$E5b50d60c471d7d6 = self::$db->last_insert_id();
			$d5188a7c24fae75b = [];

			if (!isset($ba2d146bb5a55097['edit'])) {
				goto label425;
			}

			self::$db->query('SELECT `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $E5b50d60c471d7d6);
			goto label408;

			label231:

			$E3665d09b9cea208 = explode(':', $E111d28e9acc50b9, 3);
			$E111d28e9acc50b9 = $E3665d09b9cea208[2];

			label239:

			self::$db->query('UPDATE `watch_logs` SET `status` = 1, `stream_id` = ? WHERE `filename` = ? AND `type` = 1;', $E5b50d60c471d7d6, $E111d28e9acc50b9);
			$F698c2c6c58adaf7 = [];
			goto label330;

			label248:

			$Dd41a39d4bb950cf = $F647a429f8089f01;

			if ($Fa5b400768f21899) {
				goto label458;
			}

			$Df5cd7b5dc4cc10c = [];

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				if (isset($e6b00ffbf54a345a[$f155fef57262b32a])) {
					goto label277;
				}

				if (!is_numeric($f155fef57262b32a)) {
					goto label274;
				}

				$Df5cd7b5dc4cc10c[] = intval($f155fef57262b32a);

				label274:

				goto label280;

				label277:

				$Df5cd7b5dc4cc10c[] = $e6b00ffbf54a345a[$f155fef57262b32a];

				label280:
			}

			goto label284;

			label284:

			$F771d40e8cf51e59 = [];

			foreach ($ba2d146bb5a55097['category_id'] as $Dbcac322b4274e46) {
				if (isset($Af54906d51bb2840[$Dbcac322b4274e46])) {
					goto label309;
				}

				if (!is_numeric($Dbcac322b4274e46)) {
					goto label306;
				}

				$F771d40e8cf51e59[] = intval($Dbcac322b4274e46);

				label306:

				goto label312;

				label309:

				$F771d40e8cf51e59[] = $Af54906d51bb2840[$Dbcac322b4274e46];

				label312:
			}

			$Dd41a39d4bb950cf['category_id'] = '[' . implode(',', array_map('intval', $F771d40e8cf51e59)) . ']';
			goto label478;
			goto label458;

			label330:

			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label363;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);
				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;

				if (isset($d5188a7c24fae75b[$C082ca9ed03f473c])) {
					goto label363;
				}

				self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `on_demand`) VALUES(?, ?, 0);', $E5b50d60c471d7d6, $C082ca9ed03f473c);

				label363:
			}

			foreach ($d5188a7c24fae75b as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label382;
				}

				fc84e25737908cB5($E5b50d60c471d7d6, $C082ca9ed03f473c, true, false);

				label382:
			}

			goto label197;

			label386:

			if (!isset($Dd41a39d4bb950cf['movie_properties']['rating'])) {
				goto label396;
			}

			$Dd41a39d4bb950cf['rating'] = $Dd41a39d4bb950cf['movie_properties']['rating'];

			label396:

			foreach (array_keys($A2fc3248dcf0b1e5) as $Bb672d1983256a93) {
				$Dd41a39d4bb950cf[$Bb672d1983256a93] = $A2fc3248dcf0b1e5[$Bb672d1983256a93];
			}

			goto label440;

			label408:

			foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
				$d5188a7c24fae75b[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
			}

			label425:

			$E111d28e9acc50b9 = $Dd41a39d4bb950cf['stream_source'][0];

			if (!(substr($E111d28e9acc50b9, 0, 2) == 's:')) {
				goto label239;
			}

			goto label231;

			label440:

			if (isset($ba2d146bb5a55097['edit'])) {
				goto label448;
			}

			$Dd41a39d4bb950cf['order'] = adD0b2C53b2714A1();

			label448:

			$Dd41a39d4bb950cf['tmdb_id'] = $A2fc3248dcf0b1e5['movie_properties']['tmdb_id'] ?: NULL;
			$Ba90f6e2230cba27 = $Dd41a39d4bb950cf['async'];
			goto label480;

			label458:

			$Dd41a39d4bb950cf['category_id'] = '[' . implode(',', array_map('intval', $A2fc3248dcf0b1e5['category_id'])) . ']';
			$Df5cd7b5dc4cc10c = array_map('intval', $A2fc3248dcf0b1e5['bouquets']);
			unset($A2fc3248dcf0b1e5['bouquets']);

			label478:

			goto label386;

			label480:

			unset($Dd41a39d4bb950cf['async']);
			$Fac87d38f7786df0 = c483a3A59265139e($Dd41a39d4bb950cf);
			$B91645b8411dc88c = 'REPLACE INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label214;
			}

			foreach ($e6b00ffbf54a345a as $f155fef57262b32a => $Abcb228699a7f743) {
				$b62d6460eb33ea07->query('DELETE FROM `bouquets` WHERE `id` = ?;', $Abcb228699a7f743);
			}

			goto label174;

			label512:
		}

		if (!$C7b0a4584580a53d) {
			goto label523;
		}

		D5612f049A8056A5(['action' => 'vod', 'sub' => 'start', 'stream_ids' => $d524eb335fa631c9]);

		label523:

		goto label43;

		label524:

		require_once XUI_HOME . 'includes/libs/tmdb.php';

		if (0 < strlen(self::$rSettings['tmdb_language'])) {
			goto label953;
		}

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key']);
		goto label962;
		goto label953;

		label543:

		$Cc94312f13005bd4 = [];
		self::$db->query('SELECT `stream_source` FROM `streams` WHERE `type` = 2;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			foreach (json_decode($Fb9da1713bff19ce['stream_source'], true) as $fd51b5505224fc7c) {
				if (!(0 < strlen($fd51b5505224fc7c))) {
					goto label571;
				}

				$Cc94312f13005bd4[] = $fd51b5505224fc7c;

				label571:
			}
		}

		$D6be258a9043b749 = '';
		goto label2;

		label577:

		$C7b0a4584580a53d = true;

		label578:

		$Fa5b400768f21899 = false;
		$C40c7290f7f7b51b = [];
		goto label742;

		label581:

		$F647a429f8089f01['enable_transcode'] = 1;

		label583:
		if (!(!is_numeric($F647a429f8089f01['year']) || ($F647a429f8089f01['year'] < 1900) || (intval(date('Y') + 1) < $F647a429f8089f01['year']))) {
			goto label608;
		}

		$F647a429f8089f01['year'] = NULL;

		label608:

		goto label657;

		label609:

		goto label951;

		label610:

		if (e589A4Bf54A2dAd1('adv', 'import_movies')) {
			goto label617;
		}

		exit();

		label617:

		goto label543;

		label618:

		if (0 < count($C40c7290f7f7b51b)) {
			goto label1324;
		}

		return ['status' => STATUS_NO_SOURCES, 'data' => $ba2d146bb5a55097];
		goto label48;
		goto label1324;

		label630:
		if (!($ba2d146bb5a55097['movie_symlink'] || $ba2d146bb5a55097['direct_proxy'])) {
			goto label732;
		}

		$Daecfbd6410b9c42 = pathinfo(explode('?', $ba2d146bb5a55097['stream_source'])[0])['extension'];

		if ($Daecfbd6410b9c42) {
			goto label678;
		}

		if ($Dd41a39d4bb950cf['target_container']) {
			goto label677;
		}

		$Dd41a39d4bb950cf['target_container'] = 'mp4';
		goto label677;

		label657:

		foreach (['read_native', 'movie_symlink', 'direct_source', 'direct_proxy', 'remove_subtitles'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label667;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label669;

			label667:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label669:
		}

		if (isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label577;
		}

		$C7b0a4584580a53d = false;
		goto label578;
		goto label577;

		label677:

		goto label680;

		label678:

		$Dd41a39d4bb950cf['target_container'] = $Daecfbd6410b9c42;

		label680:

		goto label732;

		label681:

		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label770;
		}

		if (E589a4bF54a2Dad1('adv', 'add_movie')) {
			goto label791;
		}

		exit();
		goto label791;

		label700:

		$e02ff34f7d898a7b[$ac5a5e03640888f4]['url'] = str_replace(' ', '%20', trim($B4a603c2a57d3acf));

		label711:

		$df6991d59f367c7e++;
		goto label51;
		goto label910;

		label715:

		if (self::a11aA39C8A0bDF06($ba2d146bb5a55097)) {
			goto label724;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label724:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		goto label681;

		label732:

		$C40c7290f7f7b51b[] = $Dd41a39d4bb950cf;
		goto label1279;

		label735:

		if (E589A4BF54a2DAD1('adv', 'import_movies')) {
			goto label864;
		}

		goto label863;

		label742:

		if (isset($ba2d146bb5a55097['review'])) {
			goto label524;
		}

		$C40c7290f7f7b51b = [];

		if (!empty($_FILES['m3u_file']['tmp_name'])) {
			goto label610;
		}

		if (!empty($ba2d146bb5a55097['import_folder'])) {
			goto label735;
		}

		$Dd41a39d4bb950cf = [
			'stream_source'       => [$ba2d146bb5a55097['stream_source']],
			'stream_icon'         => $F647a429f8089f01['stream_icon'],
			'stream_display_name' => $F647a429f8089f01['stream_display_name'],
			'movie_properties'    => [],
			'async'               => false,
			'target_container'    => $F647a429f8089f01['target_container']
		];
		goto label1231;

		label769:

		goto label1313;

		label770:

		if (e589a4bf54A2DaD1('adv', 'edit_movie')) {
			goto label777;
		}

		exit();

		label777:

		goto label1304;

		label778:

		goto label711;

		label779:

		$e02ff34f7d898a7b[$ac5a5e03640888f4]['name'] = trim(substr($B4a603c2a57d3acf, 1));
		goto label711;

		label790:

		goto label700;

		label791:

		$F647a429f8089f01 = C73Ed8d0b70Ce12F('streams', $ba2d146bb5a55097);
		$F647a429f8089f01['added'] = time();
		$F647a429f8089f01['type'] = 2;
		unset($F647a429f8089f01['id']);
		goto label769;

		label804:

		if (!self::$rSettings['download_images']) {
			goto label822;
		}

		$ba2d146bb5a55097['movie_image'] = XUI::CCCEE53491F4AF9C($ba2d146bb5a55097['movie_image'], 2);
		$ba2d146bb5a55097['backdrop_path'] = XUI::cccee53491f4AF9C($ba2d146bb5a55097['backdrop_path']);

		label822:

		goto label63;

		label823:

		if (!empty($Ac97fb1939417214['tag'][$df6991d59f367c7e])) {
			goto label897;
		}

		if (!empty($Ac97fb1939417214['prop_key'][$df6991d59f367c7e])) {
			goto label899;
		}

		if (!empty($Ac97fb1939417214['name'][$df6991d59f367c7e])) {
			goto label779;
		}

		if (!empty($Ac97fb1939417214['url'][$df6991d59f367c7e])) {
			goto label790;
		}

		goto label711;
		goto label897;

		label845:

		$ed78c78249db8aa9 = explode(':', $ba2d146bb5a55097['import_folder']);

		if (!is_numeric($ed78c78249db8aa9[1])) {
			goto label1279;
		}

		if (isset($ba2d146bb5a55097['scan_recursive'])) {
			goto label1442;
		}

		$dd6d6da4a65a40fa = [];
		goto label1413;

		label863:

		exit();

		label864:

		$Cc94312f13005bd4 = [];
		self::$db->query('SELECT `stream_source` FROM `streams` WHERE `type` = 2;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			foreach (json_decode($Fb9da1713bff19ce['stream_source'], true) as $fd51b5505224fc7c) {
				if (!(0 < strlen($fd51b5505224fc7c))) {
					goto label892;
				}

				$Cc94312f13005bd4[] = $fd51b5505224fc7c;

				label892:
			}
		}

		goto label845;

		label897:

		++$ac5a5e03640888f4;
		goto label711;

		label899:

		$e02ff34f7d898a7b[$ac5a5e03640888f4][$Ac97fb1939417214['prop_key'][$df6991d59f367c7e]] = trim($Ac97fb1939417214['prop_val'][$df6991d59f367c7e]);
		goto label778;

		label910:

		foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
			if (in_array($D577b2a7889a5fb6['url'], $Cc94312f13005bd4)) {
				goto label949;
			}

			$d88ca0c1f58e0dc1 = pathinfo(explode('?', $D577b2a7889a5fb6['url'])[0]);
			$Dd41a39d4bb950cf = [
				'stream_source'       => [$D577b2a7889a5fb6['url']],
				'stream_icon'         => $D577b2a7889a5fb6['tvg-logo'] ?: '',
				'stream_display_name' => $D577b2a7889a5fb6['name'] ?: '',
				'movie_properties'    => [],
				'async'               => true,
				'target_container'    => $d88ca0c1f58e0dc1['extension']
			];
			$C40c7290f7f7b51b[] = $Dd41a39d4bb950cf;

			label949:
		}

		label951:

		goto label618;
		goto label524;

		label953:

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key'], self::$rSettings['tmdb_language']);

		label962:

		$Fa5b400768f21899 = true;

		foreach ($ba2d146bb5a55097['review'] as $A2fc3248dcf0b1e5) {
			goto label1061;

			label968:

			$Df7b5971cf1d6194 = 'https://image.tmdb.org/t/p/w600_and_h900_bestv2' . $d2cbe962ad971030['poster_path'];
			$A0232f15a223f0e1 = 'https://image.tmdb.org/t/p/w1280' . $d2cbe962ad971030['backdrop_path'];

			if (!self::$rSettings['download_images']) {
				goto label1136;
			}

			$Df7b5971cf1d6194 = XUI::CcCEE53491f4AF9c($Df7b5971cf1d6194, 2);
			$A0232f15a223f0e1 = XUI::cCceE53491f4aF9c($A0232f15a223f0e1);
			goto label1136;

			label991:

			$Bbe4c2a2b1efd5b2 = [];

			foreach ($d2cbe962ad971030['genres'] as $cb7c230a28039130) {
				if (!(count($Bbe4c2a2b1efd5b2) < 3)) {
					goto label1007;
				}

				$Bbe4c2a2b1efd5b2[] = $cb7c230a28039130['name'];

				label1007:
			}

			$d03052828cab569a = intval($d2cbe962ad971030['runtime']) * 60;
			goto label1113;

			label1017:

			$C40c7290f7f7b51b[] = $A2fc3248dcf0b1e5;
			goto label1228;

			label1021:

			foreach ($d2cbe962ad971030['credits']['crew'] as $efdfec64a4041aa6) {
				if (!((count($Ddc486c18cb21e76) < 5) && (($efdfec64a4041aa6['department'] == 'Directing') || ($efdfec64a4041aa6['known_for_department'] == 'Directing')))) {
					goto label1045;
				}

				$Ddc486c18cb21e76[] = $efdfec64a4041aa6['name'];

				label1045:
			}

			$b8f81a9f6e93f6a9 = '';

			if (!isset($d2cbe962ad971030['production_countries'][0]['name'])) {
				goto label991;
			}

			$b8f81a9f6e93f6a9 = $d2cbe962ad971030['production_countries'][0]['name'];
			goto label991;

			label1061:

			if (!$A2fc3248dcf0b1e5['tmdb_id']) {
				goto label1225;
			}

			$Bf508e08aecfc95f = $b41097c951ee83d3->getMovie($A2fc3248dcf0b1e5['tmdb_id']);

			if (!$Bf508e08aecfc95f) {
				goto label1225;
			}

			$d2cbe962ad971030 = json_decode($Bf508e08aecfc95f->getJSON(), true);
			$d2cbe962ad971030['trailer'] = $Bf508e08aecfc95f->getTrailer();
			goto label968;

			label1088:

			$A2fc3248dcf0b1e5['async'] = false;
			$A2fc3248dcf0b1e5['target_container'] = pathinfo(explode('?', $A2fc3248dcf0b1e5['stream_source'][0])[0])['extension'];

			if (!empty($A2fc3248dcf0b1e5['target_container'])) {
				goto label1111;
			}

			$A2fc3248dcf0b1e5['target_container'] = 'mp4';

			label1111:

			goto label1017;

			label1113:

			if (0 < strlen($d2cbe962ad971030['release_date'])) {
				goto label1124;
			}

			$eca9936f0487fe83 = NULL;
			goto label1158;

			label1124:

			$eca9936f0487fe83 = intval(substr($d2cbe962ad971030['release_date'], 0, 4));
			goto label1158;

			label1136:

			$d5d6bbc743dab4c0 = [];

			foreach ($d2cbe962ad971030['credits']['cast'] as $efdfec64a4041aa6) {
				if (!(count($d5d6bbc743dab4c0) < 5)) {
					goto label1153;
				}

				$d5d6bbc743dab4c0[] = $efdfec64a4041aa6['name'];

				label1153:
			}

			$Ddc486c18cb21e76 = [];
			goto label1021;

			label1158:

			$A2fc3248dcf0b1e5['movie_properties'] = [
				'kinopoisk_url'          => 'https://www.themoviedb.org/movie/' . $d2cbe962ad971030['id'],
				'tmdb_id'                => $d2cbe962ad971030['id'],
				'name'                   => $d2cbe962ad971030['title'],
				'year'                   => $eca9936f0487fe83,
				'o_name'                 => $d2cbe962ad971030['original_title'],
				'cover_big'              => $Df7b5971cf1d6194,
				'movie_image'            => $Df7b5971cf1d6194,
				'release_date'           => $d2cbe962ad971030['release_date'],
				'episode_run_time'       => $d2cbe962ad971030['runtime'],
				'youtube_trailer'        => $d2cbe962ad971030['trailer'],
				'director'               => implode(', ', $Ddc486c18cb21e76),
				'actors'                 => implode(', ', $d5d6bbc743dab4c0),
				'cast'                   => implode(', ', $d5d6bbc743dab4c0),
				'description'            => $d2cbe962ad971030['overview'],
				'plot'                   => $d2cbe962ad971030['overview'],
				'age'                    => '',
				'mpaa_rating'            => '',
				'rating_count_kinopoisk' => 0,
				'country'                => $b8f81a9f6e93f6a9,
				'genre'                  => implode(', ', $Bbe4c2a2b1efd5b2),
				'backdrop_path'          => [$A0232f15a223f0e1],
				'duration_secs'          => $d03052828cab569a,
				'duration'               => sprintf('%02d:%02d:%02d', $d03052828cab569a / 3600, ($d03052828cab569a / 60) % 60, $d03052828cab569a % 60),
				'video'                  => [],
				'audio'                  => [],
				'bitrate'                => 0,
				'rating'                 => $d2cbe962ad971030['vote_average']
			];

			label1225:

			unset($A2fc3248dcf0b1e5['tmdb_id']);
			goto label1088;

			label1228:
		}

		goto label618;

		label1231:

		if (0 < strlen($ba2d146bb5a55097['tmdb_id'])) {
			goto label1240;
		}

		$fd78f0fc1ab75e3f = '';
		goto label804;

		label1240:

		$fd78f0fc1ab75e3f = 'https://www.themoviedb.org/movie/' . $ba2d146bb5a55097['tmdb_id'];
		goto label804;

		label1244:

		foreach ($dd6d6da4a65a40fa as $D6be258a9043b749) {
			$f6366894cab1970e = 's:' . intval($ed78c78249db8aa9[1]) . ':' . $D6be258a9043b749;

			if (in_array($f6366894cab1970e, $Cc94312f13005bd4)) {
				goto label1277;
			}

			$d88ca0c1f58e0dc1 = pathinfo($D6be258a9043b749);
			$Dd41a39d4bb950cf = [
				'stream_source'       => [$f6366894cab1970e],
				'stream_icon'         => '',
				'stream_display_name' => $d88ca0c1f58e0dc1['filename'],
				'movie_properties'    => [],
				'async'               => true,
				'target_container'    => $d88ca0c1f58e0dc1['extension']
			];
			$C40c7290f7f7b51b[] = $Dd41a39d4bb950cf;

			label1277:
		}

		label1279:

		goto label609;

		label1280:

		$E3665d09b9cea208 = explode(':', $ba2d146bb5a55097['movie_subtitles']);
		$F647a429f8089f01['movie_subtitles'] = [
			'files'    => [$E3665d09b9cea208[2]],
			'names'    => ['Subtitles'],
			'charset'  => ['UTF-8'],
			'location' => intval($E3665d09b9cea208[1])
		];

		label1298:

		if (!(0 < $F647a429f8089f01['transcode_profile_id'])) {
			goto label583;
		}

		goto label581;

		label1304:

		$F647a429f8089f01 = E42ED0B0860dB08A(f260b7a31f021E39($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label1313:

		if (0 < strlen($ba2d146bb5a55097['movie_subtitles'])) {
			goto label1280;
		}

		$F647a429f8089f01['movie_subtitles'] = NULL;
		goto label1298;
		goto label1280;

		label1324:

		$e6b00ffbf54a345a = [];
		$Af54906d51bb2840 = [];

		if ($Fa5b400768f21899) {
			goto label1411;
		}

		foreach (json_decode($ba2d146bb5a55097['bouquet_create_list'], true) as $f155fef57262b32a) {
			$Fac87d38f7786df0 = c483a3A59265139E([
				'bouquet_name'     => $f155fef57262b32a,
				'bouquet_channels' => [],
				'bouquet_movies'   => [],
				'bouquet_series'   => [],
				'bouquet_radios'   => []
			]);
			$B91645b8411dc88c = 'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label1367;
			}

			$b5fd3e3f0096d7f4 = self::$db->last_insert_id();
			$e6b00ffbf54a345a[$f155fef57262b32a] = $b5fd3e3f0096d7f4;

			label1367:
		}

		goto label1370;

		label1370:

		foreach (json_decode($ba2d146bb5a55097['category_create_list'], true) as $Dbcac322b4274e46) {
			$Fac87d38f7786df0 = C483a3A59265139E(['category_type' => 'movie', 'category_name' => $Dbcac322b4274e46, 'parent_id' => 0, 'cat_order' => 99, 'is_adult' => 0]);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label1409;
			}

			$fe63f70cd74f3298 = self::$db->last_insert_id();
			$Af54906d51bb2840[$Dbcac322b4274e46] = $fe63f70cd74f3298;

			label1409:
		}

		label1411:

		$d524eb335fa631c9 = [];
		goto label138;

		label1413:

		foreach (e3845984369e03A9(intval($ed78c78249db8aa9[1]), rtrim($ed78c78249db8aa9[2], '/'), ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'])['files'] as $D6be258a9043b749) {
			$dd6d6da4a65a40fa[] = rtrim($ed78c78249db8aa9[2], '/') . '/' . $D6be258a9043b749;
		}

		goto label1244;

		label1442:

		$dd6d6da4a65a40fa = d43f76ADAB938157(intval($ed78c78249db8aa9[1]), $ed78c78249db8aa9[2], ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts']);
		goto label1244;

		label1454:
	}

	static public function e7a12F961BB49Bc2($ba2d146bb5a55097)
	{
		goto label536;

		label2:

		goto label5;

		label3:

		$F647a429f8089f01['remove_subtitles'] = 1;

		label5:

		goto label405;

		label6:

		if (!isset($ba2d146bb5a55097['c_remove_subtitles'])) {
			goto label5;
		}

		if (isset($ba2d146bb5a55097['remove_subtitles'])) {
			goto label3;
		}

		$F647a429f8089f01['remove_subtitles'] = 0;
		goto label2;

		label16:

		foreach ($aa15ffb0d29cf18b as $b5fd3e3f0096d7f4 => $A45c0679bef6bf36) {
			f8e9ABB1f656e13F('movie', $b5fd3e3f0096d7f4, $A45c0679bef6bf36);
		}

		if (empty($C21b8218fb28a18d)) {
			goto label519;
		}

		$C21b8218fb28a18d = rtrim($C21b8218fb28a18d, ',');
		goto label512;

		label35:

		$F647a429f8089f01['direct_proxy'] = 1;
		$F647a429f8089f01['direct_source'] = 1;

		label39:

		if (!isset($ba2d146bb5a55097['c_read_native'])) {
			goto label6;
		}

		goto label557;

		label44:

		$af051e9776cb3ebc = $aa15ffb0d29cf18b = [];
		$C21b8218fb28a18d = '';

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			goto label105;

			label51:

			if (!($ba2d146bb5a55097['bouquets_type'] == 'DEL')) {
				goto label65;
			}

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$aa15ffb0d29cf18b[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			label65:

			goto label139;
			goto label131;

			label69:

			if (!isset($ba2d146bb5a55097['reencode_on_edit'])) {
				goto label349;
			}

			foreach ($Aa455b79a8de8c3f[$ee6d1fc5d801b43f] as $C082ca9ed03f473c) {
				$ef0f5d321b49e01b[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;
			}

			goto label349;

			label84:

			foreach ($F771d40e8cf51e59 as $fe63f70cd74f3298) {
				if (!(($Bb672d1983256a93 = array_search($fe63f70cd74f3298, $Bbaf8e3ba7b2daf9)) !== false)) {
					goto label98;
				}

				unset($Bbaf8e3ba7b2daf9[$Bb672d1983256a93]);

				label98:
			}

			$F771d40e8cf51e59 = $Bbaf8e3ba7b2daf9;

			label101:

			goto label197;
			goto label180;

			label105:

			if (!isset($ba2d146bb5a55097['c_category_id'])) {
				goto label361;
			}

			$F771d40e8cf51e59 = array_map('intval', $ba2d146bb5a55097['category_id']);

			if ($ba2d146bb5a55097['category_id_type'] == 'ADD') {
				goto label180;
			}

			if (!($ba2d146bb5a55097['category_id_type'] == 'DEL')) {
				goto label101;
			}

			$Bbaf8e3ba7b2daf9 = $F330b1e93afbd525[$ee6d1fc5d801b43f];
			goto label84;

			label131:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			label139:

			goto label69;
			goto label207;

			label143:

			if (!isset($ba2d146bb5a55097['c_bouquets'])) {
				goto label69;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'SET') {
				goto label207;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'ADD') {
				goto label131;
			}

			goto label51;

			label160:

			self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

			label166:

			if (!isset($ba2d146bb5a55097['c_server_tree'])) {
				goto label143;
			}

			$F698c2c6c58adaf7 = [];
			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);
			goto label235;

			label180:

			foreach ($F330b1e93afbd525[$ee6d1fc5d801b43f] ?: [] as $fe63f70cd74f3298) {
				if (in_array($fe63f70cd74f3298, $F771d40e8cf51e59)) {
					goto label195;
				}

				$F771d40e8cf51e59[] = $fe63f70cd74f3298;

				label195:
			}

			label197:

			$F647a429f8089f01['category_id'] = '[' . implode(',', $F771d40e8cf51e59) . ']';
			goto label361;

			label207:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
				if (in_array($f155fef57262b32a['id'], $ba2d146bb5a55097['bouquets'])) {
					goto label231;
				}

				$aa15ffb0d29cf18b[$f155fef57262b32a['id']][] = $ee6d1fc5d801b43f;

				label231:
			}

			goto label69;

			label235:

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				goto label274;

				label240:

				goto label308;

				label243:

				goto label271;

				label246:

				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;

				if (isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label271;
				}

				goto label257;

				label257:

				$C21b8218fb28a18d .= '(' . intval($ee6d1fc5d801b43f) . ', ' . intval($C082ca9ed03f473c) . '),';
				$Aa455b79a8de8c3f[$ee6d1fc5d801b43f][] = $C082ca9ed03f473c;

				label271:

				goto label240;

				label274:

				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label271;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);

				if (in_array($ba2d146bb5a55097['server_type'], ['ADD', 'SET'])) {
					goto label246;
				}

				if (!isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label243;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;
				goto label243;

				label308:
			}

			if (!($ba2d146bb5a55097['server_type'] == 'SET')) {
				goto label143;
			}

			foreach ($d5188a7c24fae75b[$ee6d1fc5d801b43f] as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label345;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;

				if (!(($Bb672d1983256a93 = array_search($C082ca9ed03f473c, $Aa455b79a8de8c3f[$ee6d1fc5d801b43f])) !== false)) {
					goto label345;
				}

				unset($Aa455b79a8de8c3f[$ee6d1fc5d801b43f][$Bb672d1983256a93]);

				label345:
			}

			goto label143;

			label349:

			foreach ($ef4c4dea281208bc as $C082ca9ed03f473c => $b4b8bc59289836c2) {
				deleteStreamsByServer($b4b8bc59289836c2, $C082ca9ed03f473c, true);
			}

			goto label383;

			label361:

			$Fac87d38f7786df0 = C483a3a59265139E($F647a429f8089f01);

			if (!(0 < count($Fac87d38f7786df0['data']))) {
				goto label166;
			}

			$Fac87d38f7786df0['data'][] = $ee6d1fc5d801b43f;
			$B91645b8411dc88c = 'UPDATE `streams` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` = ?;';
			goto label160;

			label383:
		}

		foreach ($af051e9776cb3ebc as $b5fd3e3f0096d7f4 => $fc524b8271e0d1a3) {
			b8b65e8CB6A1Dfe9('movie', $b5fd3e3f0096d7f4, $fc524b8271e0d1a3);
		}

		goto label16;

		label396:

		if (!isset($ba2d146bb5a55097['reprocess_tmdb'])) {
			goto label404;
		}

		XUI::refreshMovies($dec36723d7be7c49, 1);

		label404:

		goto label441;

		label405:

		if (!isset($ba2d146bb5a55097['c_target_container'])) {
			goto label412;
		}

		$F647a429f8089f01['target_container'] = $ba2d146bb5a55097['target_container'];

		label412:

		if (!isset($ba2d146bb5a55097['c_transcode_profile_id'])) {
			goto label426;
		}

		$F647a429f8089f01['transcode_profile_id'] = $ba2d146bb5a55097['transcode_profile_id'];
		goto label566;

		label420:

		$F647a429f8089f01['movie_symlink'] = 0;
		goto label425;

		label423:

		$F647a429f8089f01['movie_symlink'] = 1;

		label425:

		goto label500;

		label426:

		$dec36723d7be7c49 = json_decode($ba2d146bb5a55097['streams'], true);

		if (!(0 < count($dec36723d7be7c49))) {
			goto label441;
		}

		$F330b1e93afbd525 = [];
		goto label580;

		label441:

		return ['status' => STATUS_SUCCESS];
		goto label647;

		label445:

		$ef4c4dea281208bc = $ef0f5d321b49e01b = $Aa455b79a8de8c3f = $d5188a7c24fae75b = [];
		self::$db->query('SELECT `stream_id`, `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$d5188a7c24fae75b[intval($Fb9da1713bff19ce['stream_id'])][intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
			$Aa455b79a8de8c3f[intval($Fb9da1713bff19ce['stream_id'])][] = intval($Fb9da1713bff19ce['server_id']);
		}

		$Df5cd7b5dc4cc10c = F964b9222B35ADDD();
		goto label44;

		label500:

		if (!isset($ba2d146bb5a55097['c_direct_source'])) {
			goto label579;
		}

		if (isset($ba2d146bb5a55097['direct_source'])) {
			goto label577;
		}

		$F647a429f8089f01['direct_source'] = 0;
		$F647a429f8089f01['direct_proxy'] = 0;
		goto label576;

		label512:

		self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`) VALUES ' . $C21b8218fb28a18d . ';');

		label519:

		XUI::updateStreams($dec36723d7be7c49);

		if (!isset($ba2d146bb5a55097['reencode_on_edit'])) {
			goto label396;
		}

		foreach ($ef0f5d321b49e01b as $C082ca9ed03f473c => $b251d0186f46fa42) {
			XUI::queueMovies($b251d0186f46fa42, $C082ca9ed03f473c);
		}

		goto label396;

		label536:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::A11aA39c8a0bdf06($ba2d146bb5a55097)) {
			goto label627;
		}

		goto label623;

		label557:

		if (isset($ba2d146bb5a55097['read_native'])) {
			goto label563;
		}

		$F647a429f8089f01['read_native'] = 0;
		goto label6;

		label563:

		$F647a429f8089f01['read_native'] = 1;
		goto label6;

		label566:

		if (0 < $F647a429f8089f01['transcode_profile_id']) {
			goto label573;
		}

		$F647a429f8089f01['enable_transcode'] = 0;
		goto label426;

		label573:

		$F647a429f8089f01['enable_transcode'] = 1;
		goto label426;

		label576:

		goto label579;

		label577:

		$F647a429f8089f01['direct_source'] = 1;

		label579:

		goto label636;

		label580:
		if (!(isset($ba2d146bb5a55097['c_category_id']) && in_array($ba2d146bb5a55097['category_id_type'], ['ADD', 'DEL']))) {
			goto label622;
		}

		self::$db->query('SELECT `id`, `category_id` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$F330b1e93afbd525[$Fb9da1713bff19ce['id']] = json_decode($Fb9da1713bff19ce['category_id'], true) ?: [];
		}

		label622:

		goto label445;

		label623:

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label627:

		$F647a429f8089f01 = [];

		if (!isset($ba2d146bb5a55097['c_movie_symlink'])) {
			goto label500;
		}

		if (isset($ba2d146bb5a55097['movie_symlink'])) {
			goto label423;
		}

		goto label420;

		label636:

		if (!isset($ba2d146bb5a55097['c_direct_proxy'])) {
			goto label39;
		}

		if (isset($ba2d146bb5a55097['direct_proxy'])) {
			goto label646;
		}

		$F647a429f8089f01['direct_proxy'] = 0;
		goto label39;

		label646:

		goto label35;

		label647:
	}

	static public function CD3092ad83523301($ba2d146bb5a55097)
	{
		goto label89;

		label2:

		if (e589A4BF54a2DAD1('adv', 'edit_package')) {
			goto label9;
		}

		exit();

		label9:

		$F647a429f8089f01 = E42ED0b0860db08a(fddf8Da6ab3fE47B($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		goto label29;

		label19:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label28:

		goto label187;

		label29:

		if (!(strlen($ba2d146bb5a55097['package_name']) == 0)) {
			goto label41;
		}

		return ['status' => STATUS_INVALID_NAME, 'data' => $ba2d146bb5a55097];

		label41:

		foreach (['is_trial', 'is_official', 'is_mag', 'is_e2', 'is_line', 'lock_device', 'is_restreamer', 'is_isplock', 'check_compatible'] as $f284920b9991e04c) {
			if (isset($ba2d146bb5a55097[$f284920b9991e04c])) {
				goto label51;
			}

			$F647a429f8089f01[$f284920b9991e04c] = 0;
			goto label53;

			label51:

			$F647a429f8089f01[$f284920b9991e04c] = 1;

			label53:
		}

		goto label108;

		label56:

		exit();

		label57:

		$F647a429f8089f01 = C73Ed8d0b70ce12f('users_packages', $ba2d146bb5a55097);
		unset($F647a429f8089f01['id']);
		goto label29;
		goto label2;

		label65:

		$F647a429f8089f01['output_formats'] = [];

		foreach ($ba2d146bb5a55097['output_formats'] as $d094d3e133ec8c03) {
			$F647a429f8089f01['output_formats'][] = $d094d3e133ec8c03;
		}

		$F647a429f8089f01['output_formats'] = '[' . implode(',', array_map('intval', $F647a429f8089f01['output_formats'])) . ']';

		label88:

		goto label162;

		label89:

		if (self::a11Aa39C8a0Bdf06($ba2d146bb5a55097)) {
			goto label98;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label98:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label2;
		}

		if (e589A4bf54a2DaD1('adv', 'add_packages')) {
			goto label57;
		}

		goto label56;

		label108:

		$F647a429f8089f01['groups'] = '[' . implode(',', array_map('intval', json_decode($ba2d146bb5a55097['groups_selected'], true))) . ']';
		$F647a429f8089f01['bouquets'] = sortArrayByArray(array_values(json_decode($ba2d146bb5a55097['bouquets_selected'], true)), array_keys(BCA35E1D9e85240C()));
		$F647a429f8089f01['bouquets'] = '[' . implode(',', array_map('intval', $F647a429f8089f01['bouquets'])) . ']';

		if (!isset($ba2d146bb5a55097['output_formats'])) {
			goto label88;
		}

		goto label65;

		label162:

		$Fac87d38f7786df0 = C483a3a59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `users_packages`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label19;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label28;
		goto label19;

		label187:
	}

	static public function B087c00F20554a9B($ba2d146bb5a55097)
	{
		goto label37;

		label2:

		$f63b4ada8c9b56fa['is_isplock'] = 0;
		goto label7;

		label5:

		$f63b4ada8c9b56fa['is_isplock'] = 1;

		label7:

		goto label302;

		label8:

		$c050a23c479bc67e = $F647a429f8089f01;
		$c050a23c479bc67e['user'] = $f63b4ada8c9b56fa;

		if (!(0 < $c050a23c479bc67e['user']['pair_id'])) {
			goto label432;
		}

		$de6841e8f8f6c07b = B5AD1d95A92cE732($c050a23c479bc67e['user']['pair_id']);

		if ($de6841e8f8f6c07b) {
			goto label432;
		}

		goto label428;

		label26:

		self::$db->query('DELETE FROM `lines` WHERE `id` = ?;', $E5b50d60c471d7d6);

		label31:

		goto label137;

		label32:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		goto label338;

		label37:

		if (self::A11AA39c8a0bDF06($ba2d146bb5a55097)) {
			goto label46;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label46:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label161;
		}

		if (e589A4bF54a2DAD1('adv', 'add_mag')) {
			goto label369;
		}

		goto label368;

		label56:

		goto label209;

		label57:
		if (!((0 < strlen($ba2d146bb5a55097['exp_date'])) && ($ba2d146bb5a55097['exp_date'] != '1970-01-01'))) {
			goto label85;
		}

		try {
			$e36d2f5d3c9f0972 = new DateTime($ba2d146bb5a55097['exp_date']);
			$f63b4ada8c9b56fa['exp_date'] = $e36d2f5d3c9f0972->format('U');
		}
		catch (Exception $E0f0519e12b13b6b) {
			return ['status' => STATUS_INVALID_DATE, 'data' => $ba2d146bb5a55097];
		}

		label85:

		goto label209;

		label86:

		goto label93;

		label87:

		$f63b4ada8c9b56fa['pair_id'] = intval($ba2d146bb5a55097['pair_id']);

		label93:

		$f63b4ada8c9b56fa['allowed_outputs'] = '[' . implode(',', [1, 2]) . ']';
		goto label8;

		label102:

		self::$db->query('SELECT `mag_id` FROM `mag_devices` WHERE mac = ? AND `mag_id` <> ? LIMIT 1;', $F647a429f8089f01['mac'], $ba2d146bb5a55097['edit']);

		label110:

		if (!(0 < self::$db->num_rows())) {
			goto label121;
		}

		return ['status' => STATUS_EXISTS_MAC, 'data' => $ba2d146bb5a55097];

		label121:

		goto label311;

		label122:

		if (!(strlen($ba2d146bb5a55097['isp_clear']) == 0)) {
			goto label134;
		}

		$f63b4ada8c9b56fa['isp_desc'] = '';
		$f63b4ada8c9b56fa['as_number'] = NULL;

		label134:

		$f63b4ada8c9b56fa['is_mag'] = 1;
		goto label142;

		label137:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label467;

		label142:

		$f63b4ada8c9b56fa['is_e2'] = 0;
		$f63b4ada8c9b56fa['max_connections'] = 1;
		$f63b4ada8c9b56fa['is_restreamer'] = 0;

		if (isset($ba2d146bb5a55097['is_trial'])) {
			goto label362;
		}

		$f63b4ada8c9b56fa['is_trial'] = 0;
		goto label361;

		label154:

		$f63b4ada8c9b56fa['created_at'] = time();
		unset($F647a429f8089f01['mag_id']);
		unset($f63b4ada8c9b56fa['id']);
		goto label293;

		label161:

		goto label445;

		label162:

		$Fac87d38f7786df0 = c483A3a59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `mag_devices`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label32;
		}

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label31;
		}

		goto label26;

		label185:

		XUI::CCb5075C679e7314($F647a429f8089f01['user_id']);
		unset($F647a429f8089f01['user']);
		unset($F647a429f8089f01['paired']);

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label162;
		}

		$F647a429f8089f01['sn'] = $F647a429f8089f01['image_version'] = $F647a429f8089f01['stb_type'] = $F647a429f8089f01['hw_version'] = $F647a429f8089f01['device_id'] = $F647a429f8089f01['device_id2'] = $F647a429f8089f01['ver'] = '';
		goto label162;

		label209:

		if ($f63b4ada8c9b56fa['member_id']) {
			goto label216;
		}

		$f63b4ada8c9b56fa['member_id'] = self::$rUserInfo['id'];

		label216:

		if (isset($ba2d146bb5a55097['allowed_ips'])) {
			goto label417;
		}

		goto label414;

		label220:

		if ($Caf4325605347834) {
			goto label288;
		}

		$f63b4ada8c9b56fa = C73ed8D0B70CE12F('lines', $ba2d146bb5a55097);
		$f63b4ada8c9b56fa['created_at'] = time();
		unset($f63b4ada8c9b56fa['id']);
		goto label293;
		goto label288;

		label234:

		$f63b4ada8c9b56fa['bouquet'] = sortArrayByArray(array_values(json_decode($ba2d146bb5a55097['bouquets_selected'], true)), array_keys(bCa35e1D9E85240C()));
		$f63b4ada8c9b56fa['bouquet'] = '[' . implode(',', array_map('intval', $f63b4ada8c9b56fa['bouquet'])) . ']';
		if (isset($ba2d146bb5a55097['exp_date']) && !isset($ba2d146bb5a55097['no_expire'])) {
			goto label57;
		}

		$f63b4ada8c9b56fa['exp_date'] = NULL;
		goto label56;

		label276:

		$f63b4ada8c9b56fa['allowed_ips'] = json_encode($ba2d146bb5a55097['allowed_ips']);

		label282:

		if (isset($ba2d146bb5a55097['pair_id'])) {
			goto label87;
		}

		$f63b4ada8c9b56fa['pair_id'] = NULL;
		goto label86;

		label288:

		$f63b4ada8c9b56fa = E42ED0b0860dB08a($Caf4325605347834, $ba2d146bb5a55097);

		label293:

		if (!(strlen($f63b4ada8c9b56fa['username']) == 0)) {
			goto label400;
		}

		goto label395;

		label302:

		if (isset($ba2d146bb5a55097['lock_device'])) {
			goto label308;
		}

		$F647a429f8089f01['lock_device'] = 0;
		goto label234;

		label308:

		$F647a429f8089f01['lock_device'] = 1;
		goto label234;

		label311:

		$Fac87d38f7786df0 = C483a3a59265139e($f63b4ada8c9b56fa);
		$B91645b8411dc88c = 'REPLACE INTO `lines`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label137;
		}

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		$F647a429f8089f01['user_id'] = $E5b50d60c471d7d6;
		goto label185;

		label338:

		if (!(0 < $c050a23c479bc67e['user']['pair_id'])) {
			goto label355;
		}

		bD08b9C71A1CA5f5($c050a23c479bc67e['user']['pair_id'], $E5b50d60c471d7d6);
		XUI::ccb5075C679e7314($c050a23c479bc67e['user']['pair_id']);

		label355:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];
		goto label137;

		label361:

		goto label364;

		label362:

		$f63b4ada8c9b56fa['is_trial'] = 1;

		label364:

		if (isset($ba2d146bb5a55097['is_isplock'])) {
			goto label5;
		}

		goto label2;

		label368:

		exit();

		label369:

		$F647a429f8089f01 = C73ED8d0B70ce12F('mag_devices', $ba2d146bb5a55097);
		$F647a429f8089f01['theme_type'] = XUI::$rSettings['mag_default_type'];
		$f63b4ada8c9b56fa = C73eD8D0b70cE12F('lines', $ba2d146bb5a55097);
		goto label154;

		label384:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label394;
		}

		self::$db->query('SELECT `mag_id` FROM `mag_devices` WHERE mac = ? LIMIT 1;', $F647a429f8089f01['mac']);
		goto label110;

		label394:

		goto label102;

		label395:

		$f63b4ada8c9b56fa['username'] = FC34407b2842461B(32);

		label400:

		if (!(strlen($f63b4ada8c9b56fa['password']) == 0)) {
			goto label413;
		}

		$f63b4ada8c9b56fa['password'] = fC34407b2842461b(32);

		label413:

		goto label122;

		label414:

		$f63b4ada8c9b56fa['allowed_ips'] = '[]';
		goto label282;

		label417:

		if (is_array($ba2d146bb5a55097['allowed_ips'])) {
			goto label276;
		}

		$ba2d146bb5a55097['allowed_ips'] = [$ba2d146bb5a55097['allowed_ips']];
		goto label276;

		label428:

		return ['status' => STATUS_INVALID_USER, 'data' => $ba2d146bb5a55097];

		label432:

		if (filter_var($ba2d146bb5a55097['mac'], FILTER_VALIDATE_MAC)) {
			goto label384;
		}

		return ['status' => STATUS_INVALID_MAC, 'data' => $ba2d146bb5a55097];
		goto label384;

		label445:

		if (e589A4bf54a2DAD1('adv', 'edit_mag')) {
			goto label452;
		}

		exit();

		label452:

		$F647a429f8089f01 = e42ED0b0860dB08A(A32d85aEfA28959D($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		$Caf4325605347834 = b5Ad1d95a92CE732($F647a429f8089f01['user_id']);
		goto label220;

		label467:
	}

	static public function f5d44Be8b59f4E62($ba2d146bb5a55097)
	{
		goto label326;

		label2:

		unset($F647a429f8089f01['user']);
		unset($F647a429f8089f01['paired']);

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label19;
		}

		$F647a429f8089f01['modem_mac'] = $F647a429f8089f01['local_ip'] = $F647a429f8089f01['enigma_version'] = $F647a429f8089f01['cpu'] = $F647a429f8089f01['lversion'] = $F647a429f8089f01['token'] = '';

		label19:

		goto label150;

		label20:

		$f63b4ada8c9b56fa['max_connections'] = 1;
		$f63b4ada8c9b56fa['is_restreamer'] = 0;

		if (isset($ba2d146bb5a55097['is_trial'])) {
			goto label47;
		}

		$f63b4ada8c9b56fa['is_trial'] = 0;
		goto label49;
		goto label47;

		label31:

		exit();

		label32:

		$F647a429f8089f01 = c73ED8D0B70CE12f('enigma2_devices', $ba2d146bb5a55097);
		$f63b4ada8c9b56fa = c73ed8d0B70Ce12F('lines', $ba2d146bb5a55097);
		$f63b4ada8c9b56fa['created_at'] = time();
		goto label409;

		label47:

		$f63b4ada8c9b56fa['is_trial'] = 1;

		label49:

		if (isset($ba2d146bb5a55097['is_isplock'])) {
			goto label455;
		}

		$f63b4ada8c9b56fa['is_isplock'] = 0;
		goto label454;

		label55:

		$f63b4ada8c9b56fa['isp_desc'] = '';
		$f63b4ada8c9b56fa['as_number'] = NULL;

		label59:

		$f63b4ada8c9b56fa['is_e2'] = 1;
		$f63b4ada8c9b56fa['is_mag'] = 0;
		goto label20;

		label64:

		if (filter_var($ba2d146bb5a55097['mac'], FILTER_VALIDATE_MAC)) {
			goto label76;
		}

		return ['status' => STATUS_INVALID_MAC, 'data' => $ba2d146bb5a55097];

		label76:

		goto label419;

		label77:

		goto label95;

		label78:

		if (is_array($ba2d146bb5a55097['allowed_ips'])) {
			goto label88;
		}

		$ba2d146bb5a55097['allowed_ips'] = [$ba2d146bb5a55097['allowed_ips']];

		label88:

		goto label89;

		label89:

		$f63b4ada8c9b56fa['allowed_ips'] = json_encode($ba2d146bb5a55097['allowed_ips']);

		label95:

		if (isset($ba2d146bb5a55097['pair_id'])) {
			goto label438;
		}

		$f63b4ada8c9b56fa['pair_id'] = NULL;
		goto label444;
		goto label438;

		label102:

		if ($f63b4ada8c9b56fa['member_id']) {
			goto label109;
		}

		$f63b4ada8c9b56fa['member_id'] = self::$rUserInfo['id'];

		label109:

		if (isset($ba2d146bb5a55097['allowed_ips'])) {
			goto label78;
		}

		$f63b4ada8c9b56fa['allowed_ips'] = '[]';
		goto label77;

		label115:
		if (!((0 < strlen($ba2d146bb5a55097['exp_date'])) && ($ba2d146bb5a55097['exp_date'] != '1970-01-01'))) {
			goto label143;
		}

		try {
			$e36d2f5d3c9f0972 = new DateTime($ba2d146bb5a55097['exp_date']);
			$f63b4ada8c9b56fa['exp_date'] = $e36d2f5d3c9f0972->format('U');
		}
		catch (Exception $E0f0519e12b13b6b) {
			return ['status' => STATUS_INVALID_DATE, 'data' => $ba2d146bb5a55097];
		}

		label143:

		goto label102;

		label144:

		$F647a429f8089f01['lock_device'] = 0;
		goto label149;

		label147:

		$F647a429f8089f01['lock_device'] = 1;

		label149:

		goto label242;

		label150:

		$Fac87d38f7786df0 = C483a3a59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `enigma2_devices`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label191;
		}

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label190;
		}

		self::$db->query('DELETE FROM `lines` WHERE `id` = ?;', $E5b50d60c471d7d6);
		goto label190;

		label178:

		$f63b4ada8c9b56fa = C73ED8d0b70ce12f('lines', $ba2d146bb5a55097);
		$f63b4ada8c9b56fa['created_at'] = time();
		unset($f63b4ada8c9b56fa['id']);
		goto label290;

		label189:

		goto label285;

		label190:

		goto label325;

		label191:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();

		if (!(0 < $c050a23c479bc67e['user']['pair_id'])) {
			goto label320;
		}

		goto label309;

		label202:

		exit();

		label203:

		$F647a429f8089f01 = E42ED0B0860db08a(EF70A93e98Fb7cE9($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		$Caf4325605347834 = B5aD1D95a92Ce732($F647a429f8089f01['user_id']);

		if ($Caf4325605347834) {
			goto label189;
		}

		goto label178;

		label220:

		if (!(strlen($f63b4ada8c9b56fa['password']) == 0)) {
			goto label233;
		}

		$f63b4ada8c9b56fa['password'] = FC34407B2842461B(32);

		label233:

		if (!(strlen($ba2d146bb5a55097['isp_clear']) == 0)) {
			goto label59;
		}

		goto label55;

		label242:

		$f63b4ada8c9b56fa['bouquet'] = sortArrayByArray(array_values(json_decode($ba2d146bb5a55097['bouquets_selected'], true)), array_keys(bcA35e1d9e85240C()));
		$f63b4ada8c9b56fa['bouquet'] = '[' . implode(',', array_map('intval', $f63b4ada8c9b56fa['bouquet'])) . ']';
		if (isset($ba2d146bb5a55097['exp_date']) && !isset($ba2d146bb5a55097['no_expire'])) {
			goto label115;
		}

		$f63b4ada8c9b56fa['exp_date'] = NULL;
		goto label143;
		goto label115;

		label285:

		$f63b4ada8c9b56fa = E42ed0b0860dB08A($Caf4325605347834, $ba2d146bb5a55097);

		label290:

		if (!(strlen($f63b4ada8c9b56fa['username']) == 0)) {
			goto label220;
		}

		$f63b4ada8c9b56fa['username'] = FC34407B2842461b(32);
		goto label220;

		label304:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label461;

		label309:

		BD08b9c71A1Ca5f5($c050a23c479bc67e['user']['pair_id'], $E5b50d60c471d7d6);
		XUI::cCB5075c679e7314($c050a23c479bc67e['user']['pair_id']);

		label320:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label325:

		goto label304;

		label326:

		if (self::a11Aa39C8a0bdf06($ba2d146bb5a55097)) {
			goto label335;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label335:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label412;
		}

		if (e589a4bf54A2dAd1('adv', 'add_e2')) {
			goto label32;
		}

		goto label31;

		label345:

		$c050a23c479bc67e['user'] = $f63b4ada8c9b56fa;

		if (!(0 < $c050a23c479bc67e['user']['pair_id'])) {
			goto label64;
		}

		$de6841e8f8f6c07b = b5aD1D95a92cE732($c050a23c479bc67e['user']['pair_id']);

		if ($de6841e8f8f6c07b) {
			goto label64;
		}

		return ['status' => STATUS_INVALID_USER, 'data' => $ba2d146bb5a55097];
		goto label64;

		label366:

		$B91645b8411dc88c = 'REPLACE INTO `lines`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label304;
		}

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		$F647a429f8089f01['user_id'] = $E5b50d60c471d7d6;
		XUI::CCB5075C679E7314($F647a429f8089f01['user_id']);
		goto label2;

		label393:

		if (!(0 < self::$db->num_rows())) {
			goto label404;
		}

		return ['status' => STATUS_EXISTS_MAC, 'data' => $ba2d146bb5a55097];

		label404:

		$Fac87d38f7786df0 = c483a3A59265139E($f63b4ada8c9b56fa);
		goto label366;

		label409:

		unset($F647a429f8089f01['device_id']);
		unset($f63b4ada8c9b56fa['id']);
		goto label290;

		label412:

		if (E589a4bf54a2DAD1('adv', 'edit_e2')) {
			goto label203;
		}

		goto label202;

		label419:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label429;
		}

		self::$db->query('SELECT `device_id` FROM `enigma2_devices` WHERE mac = ? LIMIT 1;', $F647a429f8089f01['mac']);
		goto label393;

		label429:

		self::$db->query('SELECT `device_id` FROM `enigma2_devices` WHERE mac = ? AND `device_id` <> ? LIMIT 1;', $F647a429f8089f01['mac'], $ba2d146bb5a55097['edit']);
		goto label393;

		label438:

		$f63b4ada8c9b56fa['pair_id'] = intval($ba2d146bb5a55097['pair_id']);

		label444:

		$f63b4ada8c9b56fa['allowed_outputs'] = '[' . implode(',', [1, 2]) . ']';
		$c050a23c479bc67e = $F647a429f8089f01;
		goto label345;

		label454:

		goto label457;

		label455:

		$f63b4ada8c9b56fa['is_isplock'] = 1;

		label457:

		if (isset($ba2d146bb5a55097['lock_device'])) {
			goto label147;
		}

		goto label144;

		label461:
	}

	static public function cd25cC90161D1a86($ba2d146bb5a55097)
	{
		goto label954;

		label2:

		if (!(0 < strlen($ba2d146bb5a55097['resize']))) {
			goto label20;
		}

		$F53e4a272bc6a405[9] = ['cmd' => '-vf scale=' . escapeshellcmd($ba2d146bb5a55097['resize']), 'val' => $ba2d146bb5a55097['resize']];

		label20:

		if (!(0 < intval($ba2d146bb5a55097['deint']))) {
			goto label736;
		}

		$F53e4a272bc6a405[17] = ['cmd' => '-vf yadif', 'val' => 1];
		goto label736;

		label31:

		$C6671ac66a4f1c57 = [];
		$C6671ac66a4f1c57[] = '-hwaccel cuvid';
		$C6671ac66a4f1c57[] = '-hwaccel_device ' . $F53e4a272bc6a405['gpu']['device'];

		if (!(0 < strlen($ba2d146bb5a55097['resize']))) {
			goto label176;
		}

		goto label165;

		label48:

		if (!(0 < strlen($ba2d146bb5a55097['buffer_size']))) {
			goto label70;
		}

		$F53e4a272bc6a405[7] = ['cmd' => '-bufsize ' . intval($ba2d146bb5a55097['buffer_size']) . 'k', 'val' => intval($ba2d146bb5a55097['buffer_size'])];

		label70:

		if (!(0 < strlen($ba2d146bb5a55097['crf_value']))) {
			goto label112;
		}

		goto label102;

		label79:

		if (!$ba2d146bb5a55097['software_decoding']) {
			goto label422;
		}
		if (!((0 < intval($ba2d146bb5a55097['deint'])) && (0 < strlen($ba2d146bb5a55097['resize'])))) {
			goto label99;
		}

		$Ee7568949b5dc1a4 = true;

		label99:

		if ($Ee7568949b5dc1a4) {
			goto label737;
		}

		goto label2;

		label102:

		$F53e4a272bc6a405[8] = ['cmd' => '-crf ' . intval($ba2d146bb5a55097['crf_value']), 'val' => $ba2d146bb5a55097['crf_value']];

		label112:

		if (!(0 < strlen($ba2d146bb5a55097['aspect_ratio']))) {
			goto label130;
		}

		$F53e4a272bc6a405[10] = ['cmd' => '-aspect ' . escapeshellcmd($ba2d146bb5a55097['aspect_ratio']), 'val' => $ba2d146bb5a55097['aspect_ratio']];

		label130:

		goto label325;

		label131:

		$E280ced57acfad9d = '[0:v]scale=' . escapeshellcmd($ba2d146bb5a55097['resize']) . '[bg];[bg][1:v]';

		label138:

		$F53e4a272bc6a405[9] = ['cmd' => '', 'val' => $ba2d146bb5a55097['resize']];

		label143:

		goto label324;
		goto label145;

		label145:

		if (!$ba2d146bb5a55097['software_decoding']) {
			goto label156;
		}

		$E280ced57acfad9d = 'yadif,scale=' . escapeshellcmd($ba2d146bb5a55097['resize']);
		goto label317;

		label156:

		goto label310;

		label157:

		if (!isset($ba2d146bb5a55097['yadif_filter'])) {
			goto label163;
		}

		$F53e4a272bc6a405[17] = ['cmd' => '-vf yadif', 'val' => 1];

		label163:

		goto label953;
		goto label284;

		label165:

		$F53e4a272bc6a405['gpu']['resize'] = $ba2d146bb5a55097['resize'];
		$C6671ac66a4f1c57[] = '-resize ' . escapeshellcmd($ba2d146bb5a55097['resize']);

		label176:

		if (!(0 < $ba2d146bb5a55097['deint'])) {
			goto label221;
		}

		$F53e4a272bc6a405['gpu']['deint'] = intval($ba2d146bb5a55097['deint']);
		goto label214;

		label189:

		if (!$Ee7568949b5dc1a4) {
			goto label635;
		}
		if (!empty($E280ced57acfad9d) && (substr($E280ced57acfad9d, strlen($E280ced57acfad9d) - 1, 1) != ']')) {
			goto label483;
		}

		if (empty($E280ced57acfad9d)) {
			goto label213;
		}

		$Ccf1f9badb3ad522 = ' ' . $Ccf1f9badb3ad522;

		label213:

		goto label482;

		label214:

		$C6671ac66a4f1c57[] = '-deint ' . intval($ba2d146bb5a55097['deint']);

		label221:

		$a42d28fc2a08c3b1 = '';

		if (!(0 < strlen($ba2d146bb5a55097['video_codec_gpu']))) {
			goto label735;
		}

		$F53e4a272bc6a405['-vcodec'] = escapeshellcmd($ba2d146bb5a55097['video_codec_gpu']);
		goto label721;

		label237:

		$F53e4a272bc6a405['-preset'] = escapeshellcmd($ba2d146bb5a55097['preset_cpu']);

		label243:

		if (!(0 < strlen($ba2d146bb5a55097['video_profile_cpu']))) {
			goto label257;
		}

		$F53e4a272bc6a405['-profile:v'] = escapeshellcmd($ba2d146bb5a55097['video_profile_cpu']);

		label257:

		goto label759;

		label258:

		$F53e4a272bc6a405[15] = ['cmd' => '-threads ' . intval($ba2d146bb5a55097['threads']), 'val' => intval($ba2d146bb5a55097['threads'])];

		label271:

		$Ee7568949b5dc1a4 = false;
		$E280ced57acfad9d = $Ccf1f9badb3ad522 = $b491a691121af2ac = '';

		if (!(0 < strlen($ba2d146bb5a55097['logo_path']))) {
			goto label689;
		}

		goto label520;

		label284:
		if (isset($ba2d146bb5a55097['yadif_filter']) && (0 < strlen($ba2d146bb5a55097['scaling']))) {
			goto label608;
		}

		if (0 < strlen($ba2d146bb5a55097['scaling'])) {
			goto label879;
		}

		if (!isset($ba2d146bb5a55097['yadif_filter'])) {
			goto label878;
		}

		if (!$ba2d146bb5a55097['software_decoding']) {
			goto label633;
		}

		goto label631;

		label310:

		$E280ced57acfad9d = '[0:v]yadif,scale=' . escapeshellcmd($ba2d146bb5a55097['resize']) . '[bg];[bg][1:v]';

		label317:

		$F53e4a272bc6a405[9] = ['cmd' => '', 'val' => $ba2d146bb5a55097['resize']];
		$F53e4a272bc6a405[17] = ['cmd' => '', 'val' => 1];

		label324:

		goto label422;

		label325:

		if (!(0 < strlen($ba2d146bb5a55097['framerate']))) {
			goto label346;
		}

		$F53e4a272bc6a405[11] = ['cmd' => '-r ' . intval($ba2d146bb5a55097['framerate']), 'val' => intval($ba2d146bb5a55097['framerate'])];

		label346:

		if (!(0 < strlen($ba2d146bb5a55097['samplerate']))) {
			goto label540;
		}

		$F53e4a272bc6a405[12] = ['cmd' => '-ar ' . intval($ba2d146bb5a55097['samplerate']), 'val' => intval($ba2d146bb5a55097['samplerate'])];
		goto label540;

		label368:

		$Ee7568949b5dc1a4 = true;

		label369:

		if ($Ee7568949b5dc1a4) {
			goto label284;
		}

		if (!(0 < strlen($ba2d146bb5a55097['scaling']))) {
			goto label157;
		}

		$F53e4a272bc6a405[9] = ['cmd' => '-vf scale=' . escapeshellcmd($ba2d146bb5a55097['scaling']), 'val' => $ba2d146bb5a55097['scaling']];
		goto label157;

		label390:

		if (!$ba2d146bb5a55097['software_decoding']) {
			goto label31;
		}

		$a42d28fc2a08c3b1 = '';

		if (!(0 < strlen($ba2d146bb5a55097['video_codec_gpu']))) {
			goto label570;
		}

		$F53e4a272bc6a405['-vcodec'] = escapeshellcmd($ba2d146bb5a55097['video_codec_gpu']);

		switch ($ba2d146bb5a55097['video_codec_gpu']) {
		case 'hevc_nvenc':
			$a42d28fc2a08c3b1 = 'hevc';
			goto label570;
		default:
			$a42d28fc2a08c3b1 = 'h264';
			goto label570;
			goto label570;

			label422:

			goto label953;

			label423:
			if (!(isset($ba2d146bb5a55097['yadif_filter']) && (0 < strlen($ba2d146bb5a55097['scaling'])))) {
				goto label369;
			}

			goto label368;

			label435:

			$E280ced57acfad9d = 'yadif,scale=' . escapeshellcmd($ba2d146bb5a55097['scaling']);
			goto label449;

			label442:

			$E280ced57acfad9d = '[0:v]yadif,scale=' . escapeshellcmd($ba2d146bb5a55097['scaling']) . '[bg];[bg][1:v]';

			label449:

			goto label946;

			label450:

			$b491a691121af2ac = '-i ' . escapeshellarg($ba2d146bb5a55097['logo_path']);
			$F53e4a272bc6a405[16] = ['cmd' => '', 'val' => $ba2d146bb5a55097['logo_path'], 'pos' => implode(':', $E3db112882c72421)];
			if (($ba2d146bb5a55097['gpu_device'] != 0) && !$ba2d146bb5a55097['software_decoding']) {
				goto label683;
			}

			$Ccf1f9badb3ad522 = 'overlay=' . $E3db112882c72421[0] . ':' . $E3db112882c72421[1];
			goto label689;
			goto label683;

			label482:

			goto label485;

			label483:

			$Ccf1f9badb3ad522 = ',' . $Ccf1f9badb3ad522;

			label485:

			$F53e4a272bc6a405[16]['cmd'] = str_replace(['{SCALE}', '{OVERLAY}', '{LOGO}'], [$E280ced57acfad9d, $Ccf1f9badb3ad522, $b491a691121af2ac], '{LOGO} -filter_complex "{SCALE}{OVERLAY}"');
			goto label635;

			label497:

			if (!(0 < strlen($ba2d146bb5a55097['audio_codec']))) {
				goto label511;
			}

			$F53e4a272bc6a405['-acodec'] = escapeshellcmd($ba2d146bb5a55097['audio_codec']);

			label511:

			if (!(0 < strlen($ba2d146bb5a55097['video_bitrate']))) {
				goto label853;
			}

			goto label839;

			label520:

			$Ee7568949b5dc1a4 = true;
			$E3db112882c72421 = array_map('intval', explode(':', $ba2d146bb5a55097['logo_pos']));

			if (!(count($E3db112882c72421) != 2)) {
				goto label539;
			}

			$E3db112882c72421 = [10, 10];

			label539:

			goto label450;

			label540:

			if (!(0 < strlen($ba2d146bb5a55097['audio_channels']))) {
				goto label561;
			}

			$F53e4a272bc6a405[13] = ['cmd' => '-ac ' . intval($ba2d146bb5a55097['audio_channels']), 'val' => intval($ba2d146bb5a55097['audio_channels'])];

			label561:

			if (!(0 < strlen($ba2d146bb5a55097['threads']))) {
				goto label271;
			}

			goto label258;
		}

		label570:

		if (!(0 < strlen($ba2d146bb5a55097['preset_' . $a42d28fc2a08c3b1]))) {
			goto label613;
		}

		$F53e4a272bc6a405['-preset'] = escapeshellcmd($ba2d146bb5a55097['preset_' . $a42d28fc2a08c3b1]);
		goto label613;

		label587:

		if (!(0 < intval($ba2d146bb5a55097['deint']))) {
			goto label944;
		}

		if (!$ba2d146bb5a55097['software_decoding']) {
			goto label601;
		}

		$E280ced57acfad9d = 'yadif';
		goto label942;

		label601:

		goto label941;

		label602:

		$F53e4a272bc6a405[9] = ['cmd' => '', 'val' => $ba2d146bb5a55097['scaling']];

		label607:

		goto label953;

		label608:

		if (!$ba2d146bb5a55097['software_decoding']) {
			goto label442;
		}

		goto label435;

		label613:

		if (!(0 < strlen($ba2d146bb5a55097['video_profile_' . $a42d28fc2a08c3b1]))) {
			goto label629;
		}

		$F53e4a272bc6a405['-profile:v'] = escapeshellcmd($ba2d146bb5a55097['video_profile_' . $a42d28fc2a08c3b1]);

		label629:

		goto label720;
		goto label31;

		label631:

		$E280ced57acfad9d = 'yadif';
		goto label634;

		label633:

		$E280ced57acfad9d = '[0:v]yadif[bg];[bg][1:v]';

		label634:

		goto label876;

		label635:

		$F647a429f8089f01['profile_options'] = json_encode($F53e4a272bc6a405, JSON_UNESCAPED_UNICODE);

		if (!isset($ba2d146bb5a55097['edit'])) {
			goto label649;
		}

		$F647a429f8089f01['profile_id'] = $ba2d146bb5a55097['edit'];

		label649:

		goto label787;

		label650:

		if (!(0 < strlen($ba2d146bb5a55097['preset_' . $a42d28fc2a08c3b1]))) {
			goto label666;
		}

		$F53e4a272bc6a405['-preset'] = escapeshellcmd($ba2d146bb5a55097['preset_' . $a42d28fc2a08c3b1]);

		label666:

		if (!(0 < strlen($ba2d146bb5a55097['video_profile_' . $a42d28fc2a08c3b1]))) {
			goto label706;
		}

		$F53e4a272bc6a405['-profile:v'] = escapeshellcmd($ba2d146bb5a55097['video_profile_' . $a42d28fc2a08c3b1]);
		goto label706;

		label683:

		$Ccf1f9badb3ad522 = '[0:v]hwdownload,format=nv12 [base]; [base][1:v] overlay=' . $E3db112882c72421[0] . ':' . $E3db112882c72421[1];

		label689:

		if ($ba2d146bb5a55097['gpu_device'] == 0) {
			goto label423;
		}

		goto label79;

		label694:

		if (!$ba2d146bb5a55097['software_decoding']) {
			goto label705;
		}

		$E280ced57acfad9d = 'scale=' . escapeshellcmd($ba2d146bb5a55097['resize']);
		goto label138;

		label705:

		goto label131;

		label706:

		$C6671ac66a4f1c57[] = '-gpu ' . $F53e4a272bc6a405['gpu']['device'];
		$C6671ac66a4f1c57[] = '-drop_second_field 1';
		$F53e4a272bc6a405['gpu']['cmd'] = implode(' ', $C6671ac66a4f1c57);

		label720:

		goto label497;

		label721:

		$C6671ac66a4f1c57[] = '{INPUT_CODEC}';

		switch ($ba2d146bb5a55097['video_codec_gpu']) {
		case 'hevc_nvenc':
			$a42d28fc2a08c3b1 = 'hevc';
			goto label735;
		default:
			$a42d28fc2a08c3b1 = 'h264';
			goto label735;
		}

		label735:

		goto label650;

		label736:

		goto label422;

		label737:
		if ((0 < intval($ba2d146bb5a55097['deint'])) && (0 < strlen($ba2d146bb5a55097['resize']))) {
			goto label145;
		}

		if (0 < strlen($ba2d146bb5a55097['resize'])) {
			goto label694;
		}

		goto label587;

		label759:

		goto label497;

		label760:

		$F53e4a272bc6a405['software_decoding'] = intval($ba2d146bb5a55097['software_decoding']) ?: 0;
		$F53e4a272bc6a405['gpu'] = ['val' => $ba2d146bb5a55097['gpu_device'], 'cmd' => ''];
		$F53e4a272bc6a405['gpu']['device'] = intval(explode('_', $ba2d146bb5a55097['gpu_device'])[1]);
		goto label390;

		label787:

		$Fac87d38f7786df0 = c483A3a59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `profiles`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label886;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label895;
		goto label886;

		label812:

		if ($ba2d146bb5a55097['gpu_device'] != 0) {
			goto label760;
		}

		if (!(0 < strlen($ba2d146bb5a55097['video_codec_cpu']))) {
			goto label830;
		}

		$F53e4a272bc6a405['-vcodec'] = escapeshellcmd($ba2d146bb5a55097['video_codec_cpu']);

		label830:

		if (!(0 < strlen($ba2d146bb5a55097['preset_cpu']))) {
			goto label243;
		}

		goto label237;

		label839:

		$F53e4a272bc6a405[3] = ['cmd' => '-b:v ' . intval($ba2d146bb5a55097['video_bitrate']) . 'k', 'val' => intval($ba2d146bb5a55097['video_bitrate'])];

		label853:

		if (!(0 < strlen($ba2d146bb5a55097['audio_bitrate']))) {
			goto label875;
		}

		$F53e4a272bc6a405[4] = ['cmd' => '-b:a ' . intval($ba2d146bb5a55097['audio_bitrate']) . 'k', 'val' => intval($ba2d146bb5a55097['audio_bitrate'])];

		label875:

		goto label896;

		label876:

		$F53e4a272bc6a405[17] = ['cmd' => '', 'val' => 1];

		label878:

		goto label607;

		label879:

		$E280ced57acfad9d = 'scale=' . escapeshellcmd($ba2d146bb5a55097['scaling']);
		goto label602;

		label886:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label895:

		goto label969;

		label896:

		if (!(0 < strlen($ba2d146bb5a55097['min_tolerance']))) {
			goto label918;
		}

		$F53e4a272bc6a405[5] = ['cmd' => '-minrate ' . intval($ba2d146bb5a55097['min_tolerance']) . 'k', 'val' => intval($ba2d146bb5a55097['min_tolerance'])];

		label918:

		if (!(0 < strlen($ba2d146bb5a55097['max_tolerance']))) {
			goto label48;
		}

		$F53e4a272bc6a405[6] = ['cmd' => '-maxrate ' . intval($ba2d146bb5a55097['max_tolerance']) . 'k', 'val' => intval($ba2d146bb5a55097['max_tolerance'])];
		goto label48;

		label941:

		$E280ced57acfad9d = '[0:v]yadif[bg];[bg][1:v]';

		label942:

		$F53e4a272bc6a405[17] = ['cmd' => '', 'val' => 1];

		label944:

		goto label143;
		goto label694;

		label946:

		$F53e4a272bc6a405[9] = ['cmd' => '', 'val' => $ba2d146bb5a55097['scaling']];
		$F53e4a272bc6a405[17] = ['cmd' => '', 'val' => 1];

		label953:

		goto label189;

		label954:

		if (self::A11AA39c8A0BDF06($ba2d146bb5a55097)) {
			goto label963;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label963:

		$F647a429f8089f01 = ['profile_name' => $ba2d146bb5a55097['profile_name'], 'profile_options' => NULL];
		$F53e4a272bc6a405 = [];
		goto label812;

		label969:
	}

	static public function e584387C6F494C28($ba2d146bb5a55097)
	{
		goto label28;

		label2:

		$C7b0a4584580a53d = false;
		goto label5;

		label4:

		$C7b0a4584580a53d = true;

		label5:

		goto label178;

		label6:

		$F647a429f8089f01 = E42eD0B0860dB08A(f260B7A31F021E39($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label15:
		if (isset($ba2d146bb5a55097['days_to_restart']) && preg_match('/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/', $ba2d146bb5a55097['time_to_restart'])) {
			goto label156;
		}

		$F647a429f8089f01['auto_restart'] = '';
		goto label155;

		label28:

		if (self::a11aA39c8a0bdf06($ba2d146bb5a55097)) {
			goto label37;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label37:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label125;
		}

		if (E589a4BF54a2DAD1('adv', 'add_radio')) {
			goto label143;
		}

		goto label142;

		label47:

		goto label54;

		label48:

		$F647a429f8089f01['probesize_ondemand'] = intval($ba2d146bb5a55097['probesize_ondemand']);

		label54:

		if (isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label4;
		}

		goto label2;

		label58:

		goto label102;

		label59:

		$e6b00ffbf54a345a = [];

		foreach (json_decode($ba2d146bb5a55097['bouquet_create_list'], true) as $f155fef57262b32a) {
			$Fac87d38f7786df0 = c483a3A59265139E([
				'bouquet_name'     => $f155fef57262b32a,
				'bouquet_channels' => [],
				'bouquet_movies'   => [],
				'bouquet_series'   => [],
				'bouquet_radios'   => []
			]);
			$B91645b8411dc88c = 'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label99;
			}

			$b5fd3e3f0096d7f4 = self::$db->last_insert_id();
			$e6b00ffbf54a345a[$f155fef57262b32a] = $b5fd3e3f0096d7f4;

			label99:
		}

		goto label193;

		label102:

		goto label694;

		label103:

		$Dd41a39d4bb950cf = ['stream_source' => $ba2d146bb5a55097['stream_source'], 'stream_icon' => $F647a429f8089f01['stream_icon'], 'stream_display_name' => $F647a429f8089f01['stream_display_name']];
		$C40c7290f7f7b51b[] = $Dd41a39d4bb950cf;

		label112:

		if (0 < count($C40c7290f7f7b51b)) {
			goto label59;
		}

		return ['status' => STATUS_NO_SOURCES, 'data' => $ba2d146bb5a55097];
		goto label58;

		label123:

		unset($F647a429f8089f01['id']);
		goto label15;

		label125:

		if (e589a4BF54a2DAd1('adv', 'edit_radio')) {
			goto label6;
		}

		exit();
		goto label6;

		label133:

		$F647a429f8089f01['auto_restart'] = $A6873c45e1480690;

		label135:

		if (isset($ba2d146bb5a55097['direct_source'])) {
			goto label170;
		}

		$F647a429f8089f01['direct_source'] = 0;
		goto label172;
		goto label170;

		label142:

		exit();

		label143:

		$F647a429f8089f01 = c73ed8d0B70ce12f('streams', $ba2d146bb5a55097);
		$F647a429f8089f01['type'] = 4;
		$F647a429f8089f01['added'] = time();
		goto label123;

		label155:

		goto label135;

		label156:

		$A6873c45e1480690 = [
			'days' => [],
			'at'   => $ba2d146bb5a55097['time_to_restart']
		];

		foreach ($ba2d146bb5a55097['days_to_restart'] as $Abcb228699a7f743 => $ad246beea4e2bbaa) {
			$A6873c45e1480690['days'][] = $ad246beea4e2bbaa;
		}

		goto label133;

		label170:

		$F647a429f8089f01['direct_source'] = 1;

		label172:

		if (isset($ba2d146bb5a55097['probesize_ondemand'])) {
			goto label48;
		}

		$F647a429f8089f01['probesize_ondemand'] = 128000;
		goto label47;

		label178:

		$C40c7290f7f7b51b = [];

		if (0 < strlen($ba2d146bb5a55097['stream_source'][0])) {
			goto label192;
		}

		return ['status' => STATUS_NO_SOURCES, 'data' => $ba2d146bb5a55097];
		goto label112;

		label192:

		goto label103;

		label193:

		$Af54906d51bb2840 = [];

		foreach (json_decode($ba2d146bb5a55097['category_create_list'], true) as $Dbcac322b4274e46) {
			$Fac87d38f7786df0 = c483a3A59265139E(['category_type' => 'radio', 'category_name' => $Dbcac322b4274e46, 'parent_id' => 0, 'cat_order' => 99, 'is_adult' => 0]);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label233;
			}

			$fe63f70cd74f3298 = self::$db->last_insert_id();
			$Af54906d51bb2840[$Dbcac322b4274e46] = $fe63f70cd74f3298;

			label233:
		}

		foreach ($C40c7290f7f7b51b as $A2fc3248dcf0b1e5) {
			goto label503;

			label239:

			$F647a429f8089f01['category_id'] = '[' . implode(',', array_map('intval', $F771d40e8cf51e59)) . ']';
			$Dd41a39d4bb950cf = $F647a429f8089f01;

			if (!self::$rSettings['download_images']) {
				goto label399;
			}

			$A2fc3248dcf0b1e5['stream_icon'] = XUI::cccEE53491F4AF9C($A2fc3248dcf0b1e5['stream_icon'], 4);
			goto label399;

			label267:

			foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
				$e9f9661afea92940[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
			}

			label284:

			$F698c2c6c58adaf7 = [];
			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);
			goto label565;

			label293:
			if (!(isset($ba2d146bb5a55097['user_agent']) && (0 < strlen($ba2d146bb5a55097['user_agent'])))) {
				goto label312;
			}

			self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES(?, 1, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['user_agent']);

			label312:
			if (!(isset($ba2d146bb5a55097['http_proxy']) && (0 < strlen($ba2d146bb5a55097['http_proxy'])))) {
				goto label439;
			}

			self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES(?, 2, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['http_proxy']);
			goto label439;

			label333:

			foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
				b8B65e8cb6A1dFe9('radio', $f155fef57262b32a, $E5b50d60c471d7d6);
			}

			if (!isset($ba2d146bb5a55097['edit'])) {
				goto label388;
			}

			foreach (f964B9222B35ADdD() as $f155fef57262b32a) {
				if (in_array($f155fef57262b32a['id'], $Df5cd7b5dc4cc10c)) {
					goto label366;
				}

				f8E9ABB1f656E13f('radio', $f155fef57262b32a['id'], $E5b50d60c471d7d6);

				label366:
			}

			goto label388;

			label370:

			foreach ($Af54906d51bb2840 as $Dbcac322b4274e46 => $Abcb228699a7f743) {
				$b62d6460eb33ea07->query('DELETE FROM `streams_categories` WHERE `id` = ?;', $Abcb228699a7f743);
			}

			return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
			goto label397;
			goto label674;

			label388:

			XUI::cAc325153A658c37($E5b50d60c471d7d6);
			return [
				'status' => STATUS_SUCCESS,
				'data'   => ['insert_id' => $E5b50d60c471d7d6]
			];

			label397:

			goto label691;

			label399:

			foreach (array_keys($A2fc3248dcf0b1e5) as $Bb672d1983256a93) {
				$Dd41a39d4bb950cf[$Bb672d1983256a93] = $A2fc3248dcf0b1e5[$Bb672d1983256a93];
			}

			if (isset($ba2d146bb5a55097['edit'])) {
				goto label472;
			}

			$Dd41a39d4bb950cf['order'] = aDD0b2C53b2714A1();
			goto label472;

			label419:

			self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES(?, 19, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['headers']);

			label426:

			if (!$C7b0a4584580a53d) {
				goto label437;
			}

			d5612f049A8056A5([
				'action'     => 'stream',
				'sub'        => 'start',
				'stream_ids' => [$E5b50d60c471d7d6]
			]);

			label437:

			goto label333;

			label439:
			if (!(isset($ba2d146bb5a55097['cookie']) && (0 < strlen($ba2d146bb5a55097['cookie'])))) {
				goto label458;
			}

			self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES(?, 17, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['cookie']);

			label458:
			if (!(isset($ba2d146bb5a55097['headers']) && (0 < strlen($ba2d146bb5a55097['headers'])))) {
				goto label426;
			}

			goto label419;

			label472:

			$Fac87d38f7786df0 = C483a3A59265139E($Dd41a39d4bb950cf);
			$B91645b8411dc88c = 'REPLACE INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label674;
			}

			foreach ($e6b00ffbf54a345a as $f155fef57262b32a => $Abcb228699a7f743) {
				$b62d6460eb33ea07->query('DELETE FROM `bouquets` WHERE `id` = ?;', $Abcb228699a7f743);
			}

			goto label370;

			label503:

			$Df5cd7b5dc4cc10c = [];

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				if (isset($e6b00ffbf54a345a[$f155fef57262b32a])) {
					goto label528;
				}

				if (!is_numeric($f155fef57262b32a)) {
					goto label525;
				}

				$Df5cd7b5dc4cc10c[] = intval($f155fef57262b32a);

				label525:

				goto label531;

				label528:

				$Df5cd7b5dc4cc10c[] = $e6b00ffbf54a345a[$f155fef57262b32a];

				label531:
			}

			$F771d40e8cf51e59 = [];

			foreach ($ba2d146bb5a55097['category_id'] as $Dbcac322b4274e46) {
				if (isset($Af54906d51bb2840[$Dbcac322b4274e46])) {
					goto label558;
				}

				if (!is_numeric($Dbcac322b4274e46)) {
					goto label555;
				}

				$F771d40e8cf51e59[] = intval($Dbcac322b4274e46);

				label555:

				goto label561;

				label558:

				$F771d40e8cf51e59[] = $Af54906d51bb2840[$Dbcac322b4274e46];

				label561:
			}

			goto label239;

			label565:

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				goto label609;

				label570:

				if (isset($e9f9661afea92940[$C082ca9ed03f473c])) {
					goto label586;
				}

				self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`, `on_demand`) VALUES(?, ?, ?, ?);', $E5b50d60c471d7d6, $C082ca9ed03f473c, $f6cad74ab6fb4eea, $E8d26871dd3cdb88);
				goto label643;

				label586:

				self::$db->query('UPDATE `streams_servers` SET `parent_id` = ?, `on_demand` = ? WHERE `server_stream_id` = ?;', $f6cad74ab6fb4eea, $E8d26871dd3cdb88, $e9f9661afea92940[$C082ca9ed03f473c]);
				goto label643;

				label597:

				$f6cad74ab6fb4eea = intval($Ec379295dc7029e6['parent']);
				goto label606;

				label605:

				$f6cad74ab6fb4eea = NULL;

				label606:

				goto label570;

				label609:

				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label643;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);
				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;
				$E8d26871dd3cdb88 = intval(in_array($C082ca9ed03f473c, $ba2d146bb5a55097['on_demand'] ?: []));

				if ($Ec379295dc7029e6['parent'] == 'source') {
					goto label605;
				}

				goto label597;

				label643:

				goto label646;

				label646:
			}

			foreach ($e9f9661afea92940 as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label665;
				}

				fc84E25737908cB5($E5b50d60c471d7d6, $C082ca9ed03f473c, false, false);

				label665:
			}

			self::$db->query('DELETE FROM `streams_options` WHERE `stream_id` = ?;', $E5b50d60c471d7d6);
			goto label293;

			label674:

			$E5b50d60c471d7d6 = self::$db->last_insert_id();
			$e9f9661afea92940 = [];

			if (!isset($ba2d146bb5a55097['edit'])) {
				goto label284;
			}

			self::$db->query('SELECT `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $E5b50d60c471d7d6);
			goto label267;

			label691:
		}

		goto label102;

		label694:
	}

	static public function caa448aC1eddBE71($ba2d146bb5a55097)
	{
		goto label499;

		label2:

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label6:

		$F647a429f8089f01 = [];

		if (!isset($ba2d146bb5a55097['c_direct_source'])) {
			goto label15;
		}

		if (isset($ba2d146bb5a55097['direct_source'])) {
			goto label496;
		}

		goto label493;

		label15:

		if (!isset($ba2d146bb5a55097['c_custom_sid'])) {
			goto label22;
		}

		$F647a429f8089f01['custom_sid'] = $ba2d146bb5a55097['custom_sid'];

		label22:

		$dec36723d7be7c49 = json_decode($ba2d146bb5a55097['streams'], true);
		goto label520;

		label29:

		if (empty($C21b8218fb28a18d)) {
			goto label44;
		}

		$C21b8218fb28a18d = rtrim($C21b8218fb28a18d, ',');
		self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`, `on_demand`) VALUES ' . $C21b8218fb28a18d . ';');

		label44:

		XUI::updateStreams($dec36723d7be7c49);
		goto label455;

		label48:

		$Df5cd7b5dc4cc10c = f964B9222b35ADdD();
		$af051e9776cb3ebc = $aa15ffb0d29cf18b = [];
		$C21b8218fb28a18d = '';

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			goto label387;

			label58:

			if ($ba2d146bb5a55097['bouquets_type'] == 'ADD') {
				goto label365;
			}

			if (!($ba2d146bb5a55097['bouquets_type'] == 'DEL')) {
				goto label77;
			}

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$aa15ffb0d29cf18b[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			label77:

			goto label363;

			label79:

			foreach ($F330b1e93afbd525[$ee6d1fc5d801b43f] ?: [] as $fe63f70cd74f3298) {
				if (in_array($fe63f70cd74f3298, $F771d40e8cf51e59)) {
					goto label94;
				}

				$F771d40e8cf51e59[] = $fe63f70cd74f3298;

				label94:
			}

			label96:

			$F647a429f8089f01['category_id'] = '[' . implode(',', $F771d40e8cf51e59) . ']';
			goto label106;

			label106:

			$Fac87d38f7786df0 = c483A3a59265139E($F647a429f8089f01);

			if (!(0 < count($Fac87d38f7786df0['data']))) {
				goto label328;
			}

			$Fac87d38f7786df0['data'][] = $ee6d1fc5d801b43f;
			$B91645b8411dc88c = 'UPDATE `streams` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` = ?;';
			goto label322;

			label128:

			goto label375;

			label130:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
				if (in_array($f155fef57262b32a['id'], $ba2d146bb5a55097['bouquets'])) {
					goto label154;
				}

				$aa15ffb0d29cf18b[$f155fef57262b32a['id']][] = $ee6d1fc5d801b43f;

				label154:
			}

			goto label375;

			label158:

			$B1e2dfe6c3f03df0 = json_decode($ba2d146bb5a55097['od_tree_data'], true);

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				goto label181;

				label169:

				self::$db->query('UPDATE `streams_servers` SET `parent_id` = ?, `on_demand` = ? WHERE `server_stream_id` = ?;', $f6cad74ab6fb4eea, $E8d26871dd3cdb88, $d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c]);

				label178:

				goto label281;

				label181:

				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label178;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);

				if (in_array($ba2d146bb5a55097['server_type'], ['ADD', 'SET'])) {
					goto label261;
				}

				if (!isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label258;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;
				goto label258;

				label215:

				$f6cad74ab6fb4eea = intval($Ec379295dc7029e6['parent']);
				goto label224;

				label223:

				$f6cad74ab6fb4eea = NULL;

				label224:

				goto label227;

				label227:

				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;

				if (isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label255;
				}

				$C21b8218fb28a18d .= '(' . intval($ee6d1fc5d801b43f) . ', ' . intval($C082ca9ed03f473c) . ', ' . ($f6cad74ab6fb4eea ?: 'NULL') . ', ' . $E8d26871dd3cdb88 . '),';
				goto label178;

				label255:

				goto label169;

				label258:

				goto label178;

				label261:

				$E8d26871dd3cdb88 = intval(in_array($C082ca9ed03f473c, $ba2d146bb5a55097['on_demand'] ?: []));

				if ($Ec379295dc7029e6['parent'] == 'source') {
					goto label223;
				}

				goto label215;

				label281:
			}

			if (!($ba2d146bb5a55097['server_type'] == 'SET')) {
				goto label310;
			}

			foreach ($d5188a7c24fae75b[$ee6d1fc5d801b43f] as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label304;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;

				label304:
			}

			goto label310;

			label308:

			goto label413;

			label310:

			if (!isset($ba2d146bb5a55097['c_bouquets'])) {
				goto label375;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'SET') {
				goto label130;
			}

			goto label58;

			label322:

			self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

			label328:

			if (!isset($ba2d146bb5a55097['c_server_tree'])) {
				goto label310;
			}

			$F698c2c6c58adaf7 = [];
			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);
			goto label158;

			label342:

			foreach ($F771d40e8cf51e59 as $fe63f70cd74f3298) {
				if (!(($Bb672d1983256a93 = array_search($fe63f70cd74f3298, $Bbaf8e3ba7b2daf9)) !== false)) {
					goto label356;
				}

				unset($Bbaf8e3ba7b2daf9[$Bb672d1983256a93]);

				label356:
			}

			$F771d40e8cf51e59 = $Bbaf8e3ba7b2daf9;

			label359:

			goto label96;
			goto label79;

			label363:

			goto label373;

			label365:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			label373:

			goto label128;

			label375:

			foreach ($ef4c4dea281208bc as $C082ca9ed03f473c => $b4b8bc59289836c2) {
				deleteStreamsByServer($b4b8bc59289836c2, $C082ca9ed03f473c, false);
			}

			goto label308;

			label387:

			if (!isset($ba2d146bb5a55097['c_category_id'])) {
				goto label106;
			}

			$F771d40e8cf51e59 = array_map('intval', $ba2d146bb5a55097['category_id']);

			if ($ba2d146bb5a55097['category_id_type'] == 'ADD') {
				goto label79;
			}

			if (!($ba2d146bb5a55097['category_id_type'] == 'DEL')) {
				goto label359;
			}

			$Bbaf8e3ba7b2daf9 = $F330b1e93afbd525[$ee6d1fc5d801b43f];
			goto label342;

			label413:
		}

		goto label472;

		label416:

		$ef4c4dea281208bc = $d5188a7c24fae75b = [];
		self::$db->query('SELECT `stream_id`, `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$d5188a7c24fae75b[intval($Fb9da1713bff19ce['stream_id'])][intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
		}

		goto label48;

		label455:

		if (!isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label468;
		}

		D5612f049A8056a5(['action' => 'stream', 'sub' => 'start', 'stream_ids' => array_values($dec36723d7be7c49)]);

		label468:

		return ['status' => STATUS_SUCCESS];
		goto label571;

		label472:

		foreach ($af051e9776cb3ebc as $b5fd3e3f0096d7f4 => $fc524b8271e0d1a3) {
			B8B65e8cB6A1dFE9('radio', $b5fd3e3f0096d7f4, $fc524b8271e0d1a3);
		}

		foreach ($aa15ffb0d29cf18b as $b5fd3e3f0096d7f4 => $A45c0679bef6bf36) {
			F8E9ABB1f656e13f('radio', $b5fd3e3f0096d7f4, $A45c0679bef6bf36);
		}

		goto label29;

		label493:

		$F647a429f8089f01['direct_source'] = 0;
		goto label498;

		label496:

		$F647a429f8089f01['direct_source'] = 1;

		label498:

		goto label15;

		label499:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11aa39c8A0BDf06($ba2d146bb5a55097)) {
			goto label6;
		}

		goto label2;

		label520:

		if (!(0 < count($dec36723d7be7c49))) {
			goto label468;
		}

		$F330b1e93afbd525 = [];
		if (!(isset($ba2d146bb5a55097['c_category_id']) && in_array($ba2d146bb5a55097['category_id_type'], ['ADD', 'DEL']))) {
			goto label416;
		}

		self::$db->query('SELECT `id`, `category_id` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$F330b1e93afbd525[$Fb9da1713bff19ce['id']] = json_decode($Fb9da1713bff19ce['category_id'], true) ?: [];
		}

		goto label416;

		label571:
	}

	static public function D3824406Bc4f2A23($ba2d146bb5a55097, $a938a5bce978e815 = false)
	{
		goto label42;

		label3:

		$Caf4325605347834 = bA89228dc958Ce05($ba2d146bb5a55097['edit']);
		$F647a429f8089f01 = e42ED0B0860dB08A($Caf4325605347834, $ba2d146bb5a55097, ['password']);

		label14:

		if (!empty($ba2d146bb5a55097['member_group_id'])) {
			goto label66;
		}

		return ['status' => STATUS_INVALID_GROUP, 'data' => $ba2d146bb5a55097];
		goto label66;

		label23:

		return ['status' => STATUS_EXISTS_USERNAME, 'data' => $ba2d146bb5a55097];

		label27:

		if (!(0 < strlen($ba2d146bb5a55097['password']))) {
			goto label41;
		}

		$F647a429f8089f01['password'] = DEbA522C14D0644c($ba2d146bb5a55097['password']);

		label41:

		goto label169;

		label42:

		if (self::A11Aa39C8a0BDF06($ba2d146bb5a55097)) {
			goto label51;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label51:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label117;
		}
		if (!(!e589A4bf54A2Dad1('adv', 'add_reguser') && !$a938a5bce978e815)) {
			goto label158;
		}

		goto label157;

		label66:

		if (!(strlen($ba2d146bb5a55097['username']) == 0)) {
			goto label79;
		}

		$F647a429f8089f01['username'] = fC34407B2842461b(10);

		label79:

		if (!bD57390A052fd83B('users', 'username', $F647a429f8089f01['username'], 'id', $ba2d146bb5a55097['edit'])) {
			goto label27;
		}

		goto label23;

		label92:

		$Fac87d38f7786df0 = C483A3a59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `users`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label244;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label243;

		label116:

		goto label14;

		label117:
		if (!(!E589a4Bf54a2dAd1('adv', 'edit_reguser') && !$a938a5bce978e815)) {
			goto label129;
		}

		exit();

		label129:

		goto label3;

		label130:

		$F647a429f8089f01['override_packages'] = json_encode($dd3211a322da8474);
		if (!(isset($Caf4325605347834) && ($Caf4325605347834['credits'] != $ba2d146bb5a55097['credits']))) {
			goto label92;
		}

		$A24f62d5ced1a89b = $ba2d146bb5a55097['credits'] - $Caf4325605347834['credits'];
		$E141f5a434238777 = $ba2d146bb5a55097['credits_reason'];
		goto label92;

		label151:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label156:

		goto label266;

		label157:

		exit();

		label158:

		$F647a429f8089f01 = c73eD8D0B70Ce12F('users', $ba2d146bb5a55097);
		$F647a429f8089f01['date_registered'] = time();
		unset($F647a429f8089f01['id']);
		goto label116;

		label169:

		$dd3211a322da8474 = [];

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $E8f21e009ba7a8c5) {
			goto label191;

			label175:

			$E8f21e009ba7a8c5 = intval($E8f21e009ba7a8c5);

			label179:

			if (!$E8f21e009ba7a8c5) {
				goto label189;
			}

			$dd3211a322da8474[$Abcb228699a7f743] = ['assign' => 1, 'official_credits' => $E8f21e009ba7a8c5];
			goto label189;

			label189:

			goto label223;

			label191:

			if (!(substr($Bb672d1983256a93, 0, 9) == 'override_')) {
				goto label189;
			}

			$Abcb228699a7f743 = intval(explode('override_', $Bb672d1983256a93)[1]);

			if (0 < strlen($E8f21e009ba7a8c5)) {
				goto label175;
			}

			$E8f21e009ba7a8c5 = NULL;
			goto label179;
			goto label175;

			label223:
		}
		if (!(!ctype_xdigit($F647a429f8089f01['api_key']) || (strlen($F647a429f8089f01['api_key']) != 32))) {
			goto label130;
		}

		$F647a429f8089f01['api_key'] = '';
		goto label130;

		label243:

		goto label156;

		label244:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();

		if (!isset($A24f62d5ced1a89b)) {
			goto label151;
		}

		self::$db->query('INSERT INTO `users_credits_logs`(`target_id`, `admin_id`, `amount`, `date`, `reason`) VALUES(?, ?, ?, ?, ?);', $E5b50d60c471d7d6, self::$rUserInfo['id'], $A24f62d5ced1a89b, time(), $E141f5a434238777);
		goto label151;

		label266:
	}

	static public function fa73216009424093($ba2d146bb5a55097)
	{
		goto label106;

		label2:

		foreach (['push', 'pull'] as $f284920b9991e04c) {
			if (isset($ba2d146bb5a55097[$f284920b9991e04c])) {
				goto label12;
			}

			$F647a429f8089f01[$f284920b9991e04c] = 0;
			goto label14;

			label12:

			$F647a429f8089f01[$f284920b9991e04c] = 1;

			label14:
		}

		if (filter_var($ba2d146bb5a55097['ip'], FILTER_VALIDATE_IP)) {
			goto label28;
		}

		return ['status' => STATUS_INVALID_IP, 'data' => $ba2d146bb5a55097];

		label28:

		goto label65;

		label29:

		$Fac87d38f7786df0 = c483a3A59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `rtmp_ips`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label96;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label95;

		label53:

		unset($F647a429f8089f01['id']);
		goto label64;

		label55:

		$F647a429f8089f01 = E42ED0B0860dB08A(Dd77C27786c11aaD($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label64:

		goto label2;

		label65:

		if (!BD57390A052fD83B('rtmp_ips', 'ip', $ba2d146bb5a55097['ip'], 'id', $F647a429f8089f01['id'])) {
			goto label81;
		}

		return ['status' => STATUS_EXISTS_IP, 'data' => $ba2d146bb5a55097];

		label81:

		if (!(strlen($ba2d146bb5a55097['password']) == 0)) {
			goto label29;
		}

		$F647a429f8089f01['password'] = fC34407B2842461b(16);
		goto label29;

		label95:

		goto label105;

		label96:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label105:

		goto label124;

		label106:

		if (self::A11Aa39c8A0bdF06($ba2d146bb5a55097)) {
			goto label115;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label115:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label55;
		}

		$F647a429f8089f01 = C73ED8d0B70Ce12f('rtmp_ips', $ba2d146bb5a55097);
		goto label53;

		label124:
	}

	static public function importSeries($ba2d146bb5a55097)
	{
		goto label572;

		label2:

		unset($ba2d146bb5a55097['category_id']);
		unset($ba2d146bb5a55097['category_create_list']);
		$Bccd07953f314962 = [];

		foreach (json_decode($ba2d146bb5a55097['server_tree_data'], true) as $Ec379295dc7029e6) {
			if (!($Ec379295dc7029e6['parent'] != '#')) {
				goto label24;
			}

			$Bccd07953f314962[] = intval($Ec379295dc7029e6['id']);

			label24:
		}

		goto label92;

		label27:

		$D6be258a9043b749 = file_get_contents($_FILES['m3u_file']['tmp_name']);

		label34:

		preg_match_all('/(?P<tag>#EXTINF:[-1,0])|(?:(?P<prop_key>[-a-z]+)=\\"(?P<prop_val>[^"]+)")|(?<name>,[^\\r\\n]+)|(?<url>http[^\\s]*:\\/\\/.*\\/.*)/', $D6be258a9043b749, $Ac97fb1939417214);
		$e02ff34f7d898a7b = [];
		$ac5a5e03640888f4 = -1;
		goto label623;

		label42:

		if (!empty($Ac97fb1939417214['prop_key'][$df6991d59f367c7e])) {
			goto label80;
		}

		if (!empty($Ac97fb1939417214['name'][$df6991d59f367c7e])) {
			goto label173;
		}

		if (!empty($Ac97fb1939417214['url'][$df6991d59f367c7e])) {
			goto label184;
		}

		goto label196;

		label58:

		goto label78;

		label59:

		$b52154585ae961fd = $ba2d146bb5a55097;

		foreach (['read_native', 'movie_symlink', 'direct_source', 'direct_proxy', 'remove_subtitles'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label70;
			}

			$ba2d146bb5a55097[$Bb672d1983256a93] = 0;
			goto label72;

			label70:

			$ba2d146bb5a55097[$Bb672d1983256a93] = 1;

			label72:
		}

		if (isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label249;
		}

		goto label247;

		label78:

		++$ac5a5e03640888f4;
		goto label196;

		label80:

		$e02ff34f7d898a7b[$ac5a5e03640888f4][$Ac97fb1939417214['prop_key'][$df6991d59f367c7e]] = trim($Ac97fb1939417214['prop_val'][$df6991d59f367c7e]);
		goto label196;
		goto label173;

		label92:

		$Fd57b4ec233184cb = [1 => d9Aa526fDB80307A(1), 2 => d9Aa526Fdb80307A(2)];

		foreach ($C40c7290f7f7b51b as $A2fc3248dcf0b1e5) {
			$ba2d146bb5a55097 = [
				'import'               => true,
				'type'                 => 'series',
				'title'                => $A2fc3248dcf0b1e5['title'],
				'file'                 => $A2fc3248dcf0b1e5['url'],
				'subtitles'            => [],
				'servers'              => $Bccd07953f314962,
				'fb_category_id'       => $F771d40e8cf51e59,
				'fb_bouquets'          => $Df5cd7b5dc4cc10c,
				'disable_tmdb'         => false,
				'ignore_no_match'      => false,
				'bouquets'             => [],
				'category_id'          => [],
				'language'             => XUI::$rSettings['tmdb_language'],
				'watch_categories'     => $Fd57b4ec233184cb,
				'read_native'          => $ba2d146bb5a55097['read_native'],
				'movie_symlink'        => $ba2d146bb5a55097['movie_symlink'],
				'remove_subtitles'     => $ba2d146bb5a55097['remove_subtitles'],
				'direct_source'        => $ba2d146bb5a55097['direct_source'],
				'direct_proxy'         => $ba2d146bb5a55097['direct_proxy'],
				'auto_encode'          => $C7b0a4584580a53d,
				'auto_upgrade'         => false,
				'fallback_title'       => false,
				'ffprobe_input'        => false,
				'transcode_profile_id' => $ba2d146bb5a55097['transcode_profile_id'],
				'target_container'     => $A2fc3248dcf0b1e5['container'],
				'max_genres'           => intval(XUI::$rSettings['max_genres']),
				'duplicate_tmdb'       => true
			];
			$C6671ac66a4f1c57 = '/usr/bin/timeout 300 ' . PHP_BIN . ' ' . INCLUDES_PATH . 'cli/watch_item.php "' . base64_encode(json_encode($ba2d146bb5a55097, JSON_UNESCAPED_UNICODE)) . '" > /dev/null 2>/dev/null &';
			shell_exec($C6671ac66a4f1c57);
		}

		return ['status' => STATUS_SUCCESS];

		label172:

		goto label641;

		label173:

		$e02ff34f7d898a7b[$ac5a5e03640888f4]['name'] = trim(substr($B4a603c2a57d3acf, 1));
		goto label196;

		label184:

		$e02ff34f7d898a7b[$ac5a5e03640888f4]['url'] = str_replace(' ', '%20', trim($B4a603c2a57d3acf));
		goto label196;

		label196:

		$df6991d59f367c7e++;
		goto label624;

		label199:

		goto label375;

		label200:

		return ['status' => STATUS_NO_SOURCES, 'data' => $b52154585ae961fd];
		goto label172;

		label205:

		$Df5cd7b5dc4cc10c = [];

		foreach (json_decode($ba2d146bb5a55097['bouquet_create_list'], true) as $f155fef57262b32a) {
			$Fac87d38f7786df0 = C483a3A59265139E([
				'bouquet_name'     => $f155fef57262b32a,
				'bouquet_channels' => [],
				'bouquet_movies'   => [],
				'bouquet_series'   => [],
				'bouquet_radios'   => []
			]);
			$B91645b8411dc88c = 'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label244;
			}

			$Df5cd7b5dc4cc10c[] = self::$db->last_insert_id();

			label244:
		}

		goto label477;

		label247:

		$C7b0a4584580a53d = false;
		goto label250;

		label249:

		$C7b0a4584580a53d = true;

		label250:

		goto label589;

		label251:

		$dd6d6da4a65a40fa = D43F76adAb938157(intval($ed78c78249db8aa9[1]), $ed78c78249db8aa9[2], ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts']);

		label262:

		foreach ($dd6d6da4a65a40fa as $D6be258a9043b749) {
			$f6366894cab1970e = 's:' . intval($ed78c78249db8aa9[1]) . ':' . $D6be258a9043b749;
			if (!(!empty($f6366894cab1970e) && !in_array($f6366894cab1970e, $Cc94312f13005bd4))) {
				goto label315;
			}

			$d88ca0c1f58e0dc1 = pathinfo($D6be258a9043b749);

			if (!empty($d88ca0c1f58e0dc1['extension'])) {
				goto label299;
			}

			$d88ca0c1f58e0dc1['extension'] = $ba2d146bb5a55097['target_container'] ?: 'mp4';

			label299:
			$C40c7290f7f7b51b[] = ['url' => $f6366894cab1970e, 'title' => $d88ca0c1f58e0dc1['filename'], 'container' => $ba2d146bb5a55097['movie_symlink'] || $ba2d146bb5a55097['direct_source'] ? $d88ca0c1f58e0dc1['extension'] : $ba2d146bb5a55097['target_container']];

			label315:
		}

		label317:

		goto label447;

		label318:

		if (!empty($_FILES['m3u_file']['tmp_name'])) {
			goto label448;
		}

		if (empty($ba2d146bb5a55097['import_folder'])) {
			goto label447;
		}

		$ed78c78249db8aa9 = explode(':', $ba2d146bb5a55097['import_folder']);

		if (!is_numeric($ed78c78249db8aa9[1])) {
			goto label317;
		}

		if (isset($ba2d146bb5a55097['scan_recursive'])) {
			goto label374;
		}

		goto label344;

		label344:

		$dd6d6da4a65a40fa = [];

		foreach (e3845984369e03a9(intval($ed78c78249db8aa9[1]), rtrim($ed78c78249db8aa9[2], '/'), ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'])['files'] as $D6be258a9043b749) {
			$dd6d6da4a65a40fa[] = rtrim($ed78c78249db8aa9[2], '/') . '/' . $D6be258a9043b749;
		}

		goto label262;

		label374:

		goto label251;

		label375:

		foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
			if (!(!empty($D577b2a7889a5fb6['url']) && !in_array($D577b2a7889a5fb6['url'], $Cc94312f13005bd4))) {
				goto label431;
			}

			$d88ca0c1f58e0dc1 = pathinfo(explode('?', $D577b2a7889a5fb6['url'])[0]);

			if (!empty($d88ca0c1f58e0dc1['extension'])) {
				goto label412;
			}

			$d88ca0c1f58e0dc1['extension'] = $ba2d146bb5a55097['target_container'] ?: 'mp4';

			label412:
			$C40c7290f7f7b51b[] = ['url' => $D577b2a7889a5fb6['url'], 'title' => $D577b2a7889a5fb6['name'] ?: '', 'container' => $ba2d146bb5a55097['movie_symlink'] || $ba2d146bb5a55097['direct_source'] ? $d88ca0c1f58e0dc1['extension'] : $ba2d146bb5a55097['target_container']];

			label431:
		}

		label433:

		$e582de4d4a513639 = array_keys(f769E3f0c739d1a6('series'));

		if (0 < count($C40c7290f7f7b51b)) {
			goto label205;
		}

		goto label200;

		label447:

		goto label433;

		label448:

		$D6be258a9043b749 = '';
		if (!(!empty($_FILES['m3u_file']['tmp_name']) && (strtolower(pathinfo(explode('?', $_FILES['m3u_file']['name'])[0], PATHINFO_EXTENSION)) == 'm3u'))) {
			goto label34;
		}

		goto label27;

		label477:

		foreach ($ba2d146bb5a55097['bouquets'] as $b5fd3e3f0096d7f4) {
			if (!(is_numeric($b5fd3e3f0096d7f4) && in_array($b5fd3e3f0096d7f4, array_keys(XUI::$rBouquets)))) {
				goto label502;
			}

			$Df5cd7b5dc4cc10c[] = intval($b5fd3e3f0096d7f4);

			label502:
		}

		unset($ba2d146bb5a55097['bouquets']);
		unset($ba2d146bb5a55097['bouquet_create_list']);
		goto label507;

		label507:

		$F771d40e8cf51e59 = [];

		foreach (json_decode($ba2d146bb5a55097['category_create_list'], true) as $Dbcac322b4274e46) {
			$Fac87d38f7786df0 = C483A3a59265139e(['category_type' => 'series', 'category_name' => $Dbcac322b4274e46, 'parent_id' => 0, 'cat_order' => 99, 'is_adult' => 0]);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label546;
			}

			$F771d40e8cf51e59[] = self::$db->last_insert_id();

			label546:
		}

		foreach ($ba2d146bb5a55097['category_id'] as $fe63f70cd74f3298) {
			if (!(is_numeric($fe63f70cd74f3298) && in_array($fe63f70cd74f3298, $e582de4d4a513639))) {
				goto label569;
			}

			$F771d40e8cf51e59[] = intval($fe63f70cd74f3298);

			label569:
		}

		goto label2;

		label572:

		if (E589A4bF54a2dAd1('adv', 'import_movies')) {
			goto label579;
		}

		exit();

		label579:

		if (self::a11AA39C8a0bdf06($ba2d146bb5a55097)) {
			goto label59;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];
		goto label59;

		label589:

		$Cc94312f13005bd4 = [];
		self::$db->query('SELECT `stream_source` FROM `streams` WHERE `type` = 5;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			foreach (json_decode($Fb9da1713bff19ce['stream_source'], true) as $fd51b5505224fc7c) {
				if (!(0 < strlen($fd51b5505224fc7c))) {
					goto label617;
				}

				$Cc94312f13005bd4[] = $fd51b5505224fc7c;

				label617:
			}
		}

		$C40c7290f7f7b51b = [];
		goto label318;

		label623:

		$df6991d59f367c7e = 0;

		label624:

		if (!($df6991d59f367c7e < count($Ac97fb1939417214[0]))) {
			goto label199;
		}

		$B4a603c2a57d3acf = $Ac97fb1939417214[0][$df6991d59f367c7e];

		if (!empty($Ac97fb1939417214['tag'][$df6991d59f367c7e])) {
			goto label58;
		}

		goto label42;

		label641:
	}

	static public function importMovies($ba2d146bb5a55097)
	{
		goto label466;

		label2:

		return ['status' => STATUS_SUCCESS];

		label5:

		goto label656;

		label6:

		$e02ff34f7d898a7b[$ac5a5e03640888f4][$Ac97fb1939417214['prop_key'][$df6991d59f367c7e]] = trim($Ac97fb1939417214['prop_val'][$df6991d59f367c7e]);
		goto label463;

		label17:

		$e02ff34f7d898a7b[$ac5a5e03640888f4]['name'] = trim(substr($B4a603c2a57d3acf, 1));
		goto label463;
		goto label452;

		label29:

		$E1c159e502d39294 = array_keys(f769E3f0C739d1a6('movie'));

		if (0 < count($C40c7290f7f7b51b)) {
			goto label47;
		}

		return ['status' => STATUS_NO_SOURCES, 'data' => $b52154585ae961fd];
		goto label5;

		label47:

		goto label185;

		label48:

		$b52154585ae961fd = $ba2d146bb5a55097;

		foreach (['read_native', 'movie_symlink', 'direct_source', 'direct_proxy', 'remove_subtitles'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label59;
			}

			$ba2d146bb5a55097[$Bb672d1983256a93] = 0;
			goto label61;

			label59:

			$ba2d146bb5a55097[$Bb672d1983256a93] = 1;

			label61:
		}

		if (isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label450;
		}

		goto label448;

		label67:

		$C40c7290f7f7b51b = [];

		if (!empty($_FILES['m3u_file']['tmp_name'])) {
			goto label85;
		}

		if (empty($ba2d146bb5a55097['import_folder'])) {
			goto label84;
		}

		$ed78c78249db8aa9 = explode(':', $ba2d146bb5a55097['import_folder']);
		goto label408;

		label84:

		goto label373;

		label85:

		goto label551;

		label86:

		foreach (json_decode($ba2d146bb5a55097['server_tree_data'], true) as $Ec379295dc7029e6) {
			if (!($Ec379295dc7029e6['parent'] != '#')) {
				goto label105;
			}

			$Bccd07953f314962[] = intval($Ec379295dc7029e6['id']);

			label105:
		}

		$Fd57b4ec233184cb = [1 => d9aA526FDb80307a(1), 2 => d9Aa526FDb80307A(2)];

		foreach ($C40c7290f7f7b51b as $A2fc3248dcf0b1e5) {
			$ba2d146bb5a55097 = [
				'import'               => true,
				'type'                 => 'movie',
				'title'                => $A2fc3248dcf0b1e5['title'],
				'file'                 => $A2fc3248dcf0b1e5['url'],
				'subtitles'            => [],
				'servers'              => $Bccd07953f314962,
				'fb_category_id'       => $F771d40e8cf51e59,
				'fb_bouquets'          => $Df5cd7b5dc4cc10c,
				'disable_tmdb'         => $dc5dd050266c9ac4,
				'ignore_no_match'      => $a99c341a51cb8cf3,
				'bouquets'             => [],
				'category_id'          => [],
				'language'             => XUI::$rSettings['tmdb_language'],
				'watch_categories'     => $Fd57b4ec233184cb,
				'read_native'          => $ba2d146bb5a55097['read_native'],
				'movie_symlink'        => $ba2d146bb5a55097['movie_symlink'],
				'remove_subtitles'     => $ba2d146bb5a55097['remove_subtitles'],
				'direct_source'        => $ba2d146bb5a55097['direct_source'],
				'direct_proxy'         => $ba2d146bb5a55097['direct_proxy'],
				'auto_encode'          => $C7b0a4584580a53d,
				'auto_upgrade'         => false,
				'fallback_title'       => false,
				'ffprobe_input'        => false,
				'transcode_profile_id' => $ba2d146bb5a55097['transcode_profile_id'],
				'target_container'     => $A2fc3248dcf0b1e5['container'],
				'max_genres'           => intval(XUI::$rSettings['max_genres']),
				'duplicate_tmdb'       => true
			];
			$C6671ac66a4f1c57 = '/usr/bin/timeout 300 ' . PHP_BIN . ' ' . INCLUDES_PATH . 'cli/watch_item.php "' . base64_encode(json_encode($ba2d146bb5a55097, JSON_UNESCAPED_UNICODE)) . '" > /dev/null 2>/dev/null &';
			shell_exec($C6671ac66a4f1c57);
		}

		goto label2;

		label185:

		$Df5cd7b5dc4cc10c = [];

		foreach (json_decode($ba2d146bb5a55097['bouquet_create_list'], true) as $f155fef57262b32a) {
			$Fac87d38f7786df0 = c483A3a59265139e([
				'bouquet_name'     => $f155fef57262b32a,
				'bouquet_channels' => [],
				'bouquet_movies'   => [],
				'bouquet_series'   => [],
				'bouquet_radios'   => []
			]);
			$B91645b8411dc88c = 'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label224;
			}

			$Df5cd7b5dc4cc10c[] = self::$db->last_insert_id();

			label224:
		}

		foreach ($ba2d146bb5a55097['bouquets'] as $b5fd3e3f0096d7f4) {
			if (!(is_numeric($b5fd3e3f0096d7f4) && in_array($b5fd3e3f0096d7f4, array_keys(XUI::$rBouquets)))) {
				goto label251;
			}

			$Df5cd7b5dc4cc10c[] = intval($b5fd3e3f0096d7f4);

			label251:
		}

		goto label254;

		label254:

		unset($ba2d146bb5a55097['bouquets']);
		unset($ba2d146bb5a55097['bouquet_create_list']);
		$F771d40e8cf51e59 = [];

		foreach (json_decode($ba2d146bb5a55097['category_create_list'], true) as $Dbcac322b4274e46) {
			$Fac87d38f7786df0 = c483A3a59265139e(['category_type' => 'movie', 'category_name' => $Dbcac322b4274e46, 'parent_id' => 0, 'cat_order' => 99, 'is_adult' => 0]);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label295;
			}

			$F771d40e8cf51e59[] = self::$db->last_insert_id();

			label295:
		}

		goto label592;

		label298:

		$e02ff34f7d898a7b = [];
		$ac5a5e03640888f4 = -1;
		$df6991d59f367c7e = 0;

		label301:

		if (!($df6991d59f367c7e < count($Ac97fb1939417214[0]))) {
			goto label315;
		}

		goto label619;

		label310:

		goto label463;

		label311:

		++$ac5a5e03640888f4;
		goto label463;

		label313:

		goto label6;

		label314:

		goto label301;

		label315:

		foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
			if (!(!empty($D577b2a7889a5fb6['url']) && !in_array($D577b2a7889a5fb6['url'], $Cc94312f13005bd4))) {
				goto label371;
			}

			$d88ca0c1f58e0dc1 = pathinfo(explode('?', $D577b2a7889a5fb6['url'])[0]);

			if (!empty($d88ca0c1f58e0dc1['extension'])) {
				goto label352;
			}

			$d88ca0c1f58e0dc1['extension'] = $ba2d146bb5a55097['target_container'] ?: 'mp4';

			label352:
			$C40c7290f7f7b51b[] = ['url' => $D577b2a7889a5fb6['url'], 'title' => $D577b2a7889a5fb6['name'] ?: '', 'container' => $ba2d146bb5a55097['movie_symlink'] || $ba2d146bb5a55097['direct_source'] ? $d88ca0c1f58e0dc1['extension'] : $ba2d146bb5a55097['target_container']];

			label371:
		}

		label373:

		goto label29;

		label374:

		$a99c341a51cb8cf3 = true;

		label375:

		$Cc94312f13005bd4 = [];
		self::$db->query('SELECT `stream_source` FROM `streams` WHERE `type` = 2;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			foreach (json_decode($Fb9da1713bff19ce['stream_source'], true) as $fd51b5505224fc7c) {
				if (!(0 < strlen($fd51b5505224fc7c))) {
					goto label403;
				}

				$Cc94312f13005bd4[] = $fd51b5505224fc7c;

				label403:
			}
		}

		goto label67;

		label408:

		if (!is_numeric($ed78c78249db8aa9[1])) {
			goto label84;
		}

		if (isset($ba2d146bb5a55097['scan_recursive'])) {
			goto label484;
		}

		$dd6d6da4a65a40fa = [];

		foreach (E3845984369E03a9(intval($ed78c78249db8aa9[1]), rtrim($ed78c78249db8aa9[2], '/'), ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts'])['files'] as $D6be258a9043b749) {
			$dd6d6da4a65a40fa[] = rtrim($ed78c78249db8aa9[2], '/') . '/' . $D6be258a9043b749;
		}

		goto label483;

		label448:

		$C7b0a4584580a53d = false;
		goto label451;

		label450:

		$C7b0a4584580a53d = true;

		label451:

		goto label643;

		label452:

		$e02ff34f7d898a7b[$ac5a5e03640888f4]['url'] = str_replace(' ', '%20', trim($B4a603c2a57d3acf));

		label463:

		$df6991d59f367c7e++;
		goto label314;

		label466:

		if (e589A4Bf54a2dad1('adv', 'import_movies')) {
			goto label473;
		}

		exit();

		label473:

		if (self::a11AA39c8A0BDf06($ba2d146bb5a55097)) {
			goto label48;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];
		goto label48;

		label483:

		goto label495;

		label484:

		$dd6d6da4a65a40fa = d43F76aDaB938157(intval($ed78c78249db8aa9[1]), $ed78c78249db8aa9[2], ['mp4', 'mkv', 'avi', 'mpg', 'flv', '3gp', 'm4v', 'wmv', 'mov', 'ts']);

		label495:

		foreach ($dd6d6da4a65a40fa as $D6be258a9043b749) {
			$f6366894cab1970e = 's:' . intval($ed78c78249db8aa9[1]) . ':' . $D6be258a9043b749;
			if (!(!empty($f6366894cab1970e) && !in_array($f6366894cab1970e, $Cc94312f13005bd4))) {
				goto label548;
			}

			$d88ca0c1f58e0dc1 = pathinfo($D6be258a9043b749);

			if (!empty($d88ca0c1f58e0dc1['extension'])) {
				goto label532;
			}

			$d88ca0c1f58e0dc1['extension'] = $ba2d146bb5a55097['target_container'] ?: 'mp4';

			label532:
			$C40c7290f7f7b51b[] = ['url' => $f6366894cab1970e, 'title' => $d88ca0c1f58e0dc1['filename'], 'container' => $ba2d146bb5a55097['movie_symlink'] || $ba2d146bb5a55097['direct_source'] ? $d88ca0c1f58e0dc1['extension'] : $ba2d146bb5a55097['target_container']];

			label548:
		}

		goto label84;

		label551:

		$D6be258a9043b749 = '';
		if (!(!empty($_FILES['m3u_file']['tmp_name']) && (strtolower(pathinfo(explode('?', $_FILES['m3u_file']['name'])[0], PATHINFO_EXTENSION)) == 'm3u'))) {
			goto label586;
		}

		$D6be258a9043b749 = file_get_contents($_FILES['m3u_file']['tmp_name']);

		label586:

		preg_match_all('/(?P<tag>#EXTINF:[-1,0])|(?:(?P<prop_key>[-a-z]+)=\\"(?P<prop_val>[^"]+)")|(?<name>,[^\\r\\n]+)|(?<url>http[^\\s]*:\\/\\/.*\\/.*)/', $D6be258a9043b749, $Ac97fb1939417214);
		goto label298;

		label592:

		foreach ($ba2d146bb5a55097['category_id'] as $fe63f70cd74f3298) {
			if (!(is_numeric($fe63f70cd74f3298) && in_array($fe63f70cd74f3298, $E1c159e502d39294))) {
				goto label613;
			}

			$F771d40e8cf51e59[] = intval($fe63f70cd74f3298);

			label613:
		}

		unset($ba2d146bb5a55097['category_id']);
		unset($ba2d146bb5a55097['category_create_list']);
		$Bccd07953f314962 = [];
		goto label86;

		label619:

		$B4a603c2a57d3acf = $Ac97fb1939417214[0][$df6991d59f367c7e];

		if (!empty($Ac97fb1939417214['tag'][$df6991d59f367c7e])) {
			goto label311;
		}

		if (!empty($Ac97fb1939417214['prop_key'][$df6991d59f367c7e])) {
			goto label313;
		}

		if (!empty($Ac97fb1939417214['name'][$df6991d59f367c7e])) {
			goto label17;
		}

		if (!empty($Ac97fb1939417214['url'][$df6991d59f367c7e])) {
			goto label452;
		}

		goto label310;

		label643:

		if (isset($ba2d146bb5a55097['disable_tmdb'])) {
			goto label648;
		}

		$dc5dd050266c9ac4 = false;
		goto label650;

		label648:

		$dc5dd050266c9ac4 = true;
		goto label650;

		label650:

		if (isset($ba2d146bb5a55097['ignore_no_match'])) {
			goto label655;
		}

		$a99c341a51cb8cf3 = false;
		goto label375;

		label655:

		goto label374;

		label656:
	}

	static public function dBdD7075f827466E($ba2d146bb5a55097)
	{
		goto label2;

		label2:

		if (self::A11aa39c8A0bdF06($ba2d146bb5a55097)) {
			goto label11;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label11:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label194;
		}

		if (E589a4bF54a2Dad1('adv', 'add_series')) {
			goto label71;
		}

		goto label70;

		label21:

		foreach ($e6b00ffbf54a345a as $f155fef57262b32a => $Abcb228699a7f743) {
			$b62d6460eb33ea07->query('DELETE FROM `bouquets` WHERE `id` = ?;', $Abcb228699a7f743);
		}

		foreach ($Af54906d51bb2840 as $Dbcac322b4274e46 => $Abcb228699a7f743) {
			$b62d6460eb33ea07->query('DELETE FROM `streams_categories` WHERE `id` = ?;', $Abcb228699a7f743);
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label313;

		label44:

		foreach (F964b9222B35AdDD() as $f155fef57262b32a) {
			if (in_array($f155fef57262b32a['id'], $Df5cd7b5dc4cc10c)) {
				goto label62;
			}

			F8E9aBb1f656E13F('series', $f155fef57262b32a['id'], $E5b50d60c471d7d6);

			label62:
		}

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label69:

		goto label331;

		label70:

		exit();

		label71:

		$F647a429f8089f01 = c73ED8D0b70Ce12F('streams_series', $ba2d146bb5a55097);
		unset($F647a429f8089f01['id']);
		goto label175;
		goto label194;

		label79:

		foreach (json_decode($ba2d146bb5a55097['bouquet_create_list'], true) as $f155fef57262b32a) {
			$Fac87d38f7786df0 = C483A3A59265139E([
				'bouquet_name'     => $f155fef57262b32a,
				'bouquet_channels' => [],
				'bouquet_movies'   => [],
				'bouquet_series'   => [],
				'bouquet_radios'   => []
			]);
			$B91645b8411dc88c = 'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label118;
			}

			$b5fd3e3f0096d7f4 = self::$db->last_insert_id();
			$e6b00ffbf54a345a[$f155fef57262b32a] = $b5fd3e3f0096d7f4;

			label118:
		}

		$Af54906d51bb2840 = [];

		foreach (json_decode($ba2d146bb5a55097['category_create_list'], true) as $Dbcac322b4274e46) {
			$Fac87d38f7786df0 = c483a3A59265139e(['category_type' => 'series', 'category_name' => $Dbcac322b4274e46, 'parent_id' => 0, 'cat_order' => 99, 'is_adult' => 0]);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label160;
			}

			$fe63f70cd74f3298 = self::$db->last_insert_id();
			$Af54906d51bb2840[$Dbcac322b4274e46] = $fe63f70cd74f3298;

			label160:
		}

		goto label211;

		label163:

		$F647a429f8089f01['last_modified'] = time();
		$F647a429f8089f01['cover'] = $ba2d146bb5a55097['cover'];
		$F647a429f8089f01['cover_big'] = $ba2d146bb5a55097['cover'];
		$e6b00ffbf54a345a = [];
		goto label79;

		label175:

		if (!self::$rSettings['download_images']) {
			goto label193;
		}

		$ba2d146bb5a55097['cover'] = XUI::CccEe53491F4Af9C($ba2d146bb5a55097['cover'], 2);
		$ba2d146bb5a55097['backdrop_path'] = XUI::cCcEe53491f4af9c($ba2d146bb5a55097['backdrop_path']);

		label193:

		goto label266;

		label194:

		if (E589a4Bf54A2daD1('adv', 'edit_series')) {
			goto label201;
		}

		exit();

		label201:

		$F647a429f8089f01 = E42ed0b0860db08A(a2297542D8bD35f6($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		goto label175;

		label211:

		$Df5cd7b5dc4cc10c = [];

		foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
			if (isset($e6b00ffbf54a345a[$f155fef57262b32a])) {
				goto label233;
			}

			if (!is_numeric($f155fef57262b32a)) {
				goto label231;
			}

			$Df5cd7b5dc4cc10c[] = intval($f155fef57262b32a);

			label231:

			goto label236;

			label233:

			$Df5cd7b5dc4cc10c[] = $e6b00ffbf54a345a[$f155fef57262b32a];

			label236:
		}

		$F771d40e8cf51e59 = [];

		foreach ($ba2d146bb5a55097['category_id'] as $Dbcac322b4274e46) {
			if (isset($Af54906d51bb2840[$Dbcac322b4274e46])) {
				goto label260;
			}

			if (!is_numeric($Dbcac322b4274e46)) {
				goto label258;
			}

			$F771d40e8cf51e59[] = intval($Dbcac322b4274e46);

			label258:

			goto label263;

			label260:

			$F771d40e8cf51e59[] = $Af54906d51bb2840[$Dbcac322b4274e46];

			label263:
		}

		goto label281;

		label266:

		if (strlen($ba2d146bb5a55097['backdrop_path']) == 0) {
			goto label278;
		}

		$F647a429f8089f01['backdrop_path'] = [$ba2d146bb5a55097['backdrop_path']];
		goto label163;

		label278:

		$F647a429f8089f01['backdrop_path'] = [];
		goto label163;

		label281:

		$F647a429f8089f01['category_id'] = '[' . implode(',', array_map('intval', $F771d40e8cf51e59)) . ']';
		$Fac87d38f7786df0 = C483a3a59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `streams_series`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label314;
		}

		goto label21;

		label313:

		goto label69;

		label314:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		f8d3626B322AAF7f($E5b50d60c471d7d6);

		foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
			b8B65e8Cb6A1dFe9('series', $f155fef57262b32a, $E5b50d60c471d7d6);
		}

		goto label44;

		label331:
	}

	static public function E2864c69063daa47($ba2d146bb5a55097)
	{
		goto label277;

		label2:

		foreach ($d611c60168c266f6 as $E6f758b9be57a931) {
			if (!(0 < intval($E6f758b9be57a931))) {
				goto label17;
			}

			self::$db->query('INSERT INTO `watch_refresh`(`type`, `stream_id`, `status`) VALUES(2, ?, 0);', $E6f758b9be57a931);

			label17:
		}

		label19:

		return ['status' => STATUS_SUCCESS];
		goto label323;

		label23:

		$F330b1e93afbd525 = [];
		if (!(isset($ba2d146bb5a55097['c_category_id']) && in_array($ba2d146bb5a55097['category_id_type'], ['ADD', 'DEL']))) {
			goto label86;
		}

		self::$db->query('SELECT `id`, `category_id` FROM `streams_series` WHERE `id` IN (' . implode(',', array_map('intval', $d611c60168c266f6)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$F330b1e93afbd525[$Fb9da1713bff19ce['id']] = json_decode($Fb9da1713bff19ce['category_id'], true) ?: [];
		}

		goto label86;

		label67:

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label71:

		$F647a429f8089f01 = [];
		$d611c60168c266f6 = json_decode($ba2d146bb5a55097['series'], true);

		if (!(0 < count($d611c60168c266f6))) {
			goto label19;
		}

		goto label23;

		label86:

		$Df5cd7b5dc4cc10c = f964B9222B35adDD();
		$af051e9776cb3ebc = $aa15ffb0d29cf18b = [];

		foreach ($d611c60168c266f6 as $E6f758b9be57a931) {
			goto label214;

			label95:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $E6f758b9be57a931;
			}

			foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
				if (in_array($f155fef57262b32a['id'], $ba2d146bb5a55097['bouquets'])) {
					goto label119;
				}

				$aa15ffb0d29cf18b[$f155fef57262b32a['id']][] = $E6f758b9be57a931;

				label119:
			}

			goto label194;

			label123:

			self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

			label129:

			if (!isset($ba2d146bb5a55097['c_bouquets'])) {
				goto label194;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'SET') {
				goto label95;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'ADD') {
				goto label262;
			}

			goto label196;

			label146:

			foreach ($F330b1e93afbd525[$E6f758b9be57a931] ?: [] as $fe63f70cd74f3298) {
				if (in_array($fe63f70cd74f3298, $F771d40e8cf51e59)) {
					goto label161;
				}

				$F771d40e8cf51e59[] = $fe63f70cd74f3298;

				label161:
			}

			label163:

			$F647a429f8089f01['category_id'] = '[' . implode(',', $F771d40e8cf51e59) . ']';
			goto label240;

			label173:

			foreach ($F771d40e8cf51e59 as $fe63f70cd74f3298) {
				if (!(($Bb672d1983256a93 = array_search($fe63f70cd74f3298, $Bbaf8e3ba7b2daf9)) !== false)) {
					goto label187;
				}

				unset($Bbaf8e3ba7b2daf9[$Bb672d1983256a93]);

				label187:
			}

			$F771d40e8cf51e59 = $Bbaf8e3ba7b2daf9;

			label190:

			goto label163;
			goto label146;

			label194:

			goto label274;

			label196:

			if (!($ba2d146bb5a55097['bouquets_type'] == 'DEL')) {
				goto label210;
			}

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$aa15ffb0d29cf18b[$f155fef57262b32a][] = $E6f758b9be57a931;
			}

			label210:

			goto label270;
			goto label262;

			label214:

			if (!isset($ba2d146bb5a55097['c_category_id'])) {
				goto label240;
			}

			$F771d40e8cf51e59 = array_map('intval', $ba2d146bb5a55097['category_id']);

			if ($ba2d146bb5a55097['category_id_type'] == 'ADD') {
				goto label146;
			}

			if (!($ba2d146bb5a55097['category_id_type'] == 'DEL')) {
				goto label190;
			}

			$Bbaf8e3ba7b2daf9 = $F330b1e93afbd525[$E6f758b9be57a931];
			goto label173;

			label240:

			$Fac87d38f7786df0 = C483a3A59265139e($F647a429f8089f01);

			if (!(0 < count($Fac87d38f7786df0['data']))) {
				goto label129;
			}

			$Fac87d38f7786df0['data'][] = $E6f758b9be57a931;
			$B91645b8411dc88c = 'UPDATE `streams_series` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` = ?;';
			goto label123;

			label262:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $E6f758b9be57a931;
			}

			label270:

			goto label194;
			goto label95;

			label274:
		}

		goto label298;

		label277:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::A11Aa39C8a0Bdf06($ba2d146bb5a55097)) {
			goto label71;
		}

		goto label67;

		label298:

		foreach ($af051e9776cb3ebc as $b5fd3e3f0096d7f4 => $fc524b8271e0d1a3) {
			b8B65E8CB6A1dfE9('series', $b5fd3e3f0096d7f4, $fc524b8271e0d1a3);
		}

		foreach ($aa15ffb0d29cf18b as $b5fd3e3f0096d7f4 => $A45c0679bef6bf36) {
			f8e9ABB1f656E13F('series', $b5fd3e3f0096d7f4, $A45c0679bef6bf36);
		}

		if (!isset($ba2d146bb5a55097['reprocess_tmdb'])) {
			goto label19;
		}

		goto label2;

		label323:
	}

	static public function e9eB556bbd1E4448($ba2d146bb5a55097)
	{
		goto label416;

		label2:

		$F647a429f8089f01['domain_name'] = implode(',', $ba2d146bb5a55097['domain_name']);

		label9:
		if (!((strlen($ba2d146bb5a55097['server_ip']) == 0) || !filter_var($ba2d146bb5a55097['server_ip'], FILTER_VALIDATE_IP))) {
			goto label263;
		}

		return ['status' => STATUS_INVALID_IP, 'data' => $ba2d146bb5a55097];
		goto label263;

		label31:

		$F647a429f8089f01['geoip_countries'] = [];

		foreach ($ba2d146bb5a55097['geoip_countries'] as $b8f81a9f6e93f6a9) {
			$F647a429f8089f01['geoip_countries'][] = $b8f81a9f6e93f6a9;
		}

		label41:

		if (isset($ba2d146bb5a55097['isp_names'])) {
			goto label521;
		}

		goto label518;

		label45:

		if (isset($ba2d146bb5a55097['geoip_countries'])) {
			goto label51;
		}

		$F647a429f8089f01['geoip_countries'] = [];
		goto label41;

		label51:

		goto label31;

		label52:

		unset($ba2d146bb5a55097['http_broadcast_ports']);

		foreach ($ba2d146bb5a55097['https_broadcast_ports'] as $e5bebfb39a19fe80) {
			if (!(is_numeric($e5bebfb39a19fe80) && (80 <= $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535) && !in_array($e5bebfb39a19fe80, $c2339b431f4d68cb['http'] ?: []) && !in_array($e5bebfb39a19fe80, $c2339b431f4d68cb['https'] ?: []) && ($e5bebfb39a19fe80 != $ba2d146bb5a55097['rtmp_port']))) {
				goto label96;
			}

			$c2339b431f4d68cb['https'][] = $e5bebfb39a19fe80;

			label96:
		}

		$c2339b431f4d68cb['https'] = array_unique($c2339b431f4d68cb['https']);
		unset($ba2d146bb5a55097['https_broadcast_ports']);
		goto label148;

		label106:

		$Ec379295dc7029e6 = cbb79f154dB723a8($ba2d146bb5a55097['edit']);

		if ($Ec379295dc7029e6) {
			goto label117;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label117:

		goto label543;

		label118:

		if (!($Ec379295dc7029e6['php_version'] != $ba2d146bb5a55097['php_version_num'])) {
			goto label142;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $E5b50d60c471d7d6, time(), json_encode(['action' => 'switch_php' . intval($ba2d146bb5a55097['php_version_num'])]));

		label142:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label147:

		goto label613;

		label148:

		$F647a429f8089f01['http_broadcast_port'] = NULL;
		$F647a429f8089f01['http_ports_add'] = NULL;

		if (!(0 < count($c2339b431f4d68cb['http']))) {
			goto label305;
		}

		$F647a429f8089f01['http_broadcast_port'] = $c2339b431f4d68cb['http'][0];

		if (!(1 < count($c2339b431f4d68cb['http']))) {
			goto label305;
		}

		goto label288;

		label173:

		goto label186;

		label174:

		self::$db->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $E5b50d60c471d7d6, time(), json_encode(['action' => 'disable_ramdisk']));

		label186:

		goto label118;

		label187:

		$c2339b431f4d68cb = [
			'http'  => [],
			'https' => []
		];

		foreach (array_merge([intval($F647a429f8089f01['http_broadcast_port'])], explode(',', $F647a429f8089f01['http_ports_add'])) as $e5bebfb39a19fe80) {
			if (!(is_numeric($e5bebfb39a19fe80) && (0 < $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535))) {
				goto label223;
			}

			$c2339b431f4d68cb['http'][] = intval($e5bebfb39a19fe80);

			label223:
		}

		foreach (array_merge([intval($F647a429f8089f01['https_broadcast_port'])], explode(',', $F647a429f8089f01['https_ports_add'])) as $e5bebfb39a19fe80) {
			if (!(is_numeric($e5bebfb39a19fe80) && (0 < $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535))) {
				goto label260;
			}

			$c2339b431f4d68cb['https'][] = intval($e5bebfb39a19fe80);

			label260:
		}

		goto label343;

		label263:
		if (!((0 < strlen($ba2d146bb5a55097['private_ip'])) && !filter_var($ba2d146bb5a55097['private_ip'], FILTER_VALIDATE_IP))) {
			goto label284;
		}

		return ['status' => STATUS_INVALID_IP, 'data' => $ba2d146bb5a55097];

		label284:

		$F647a429f8089f01['total_services'] = $ba2d146bb5a55097['total_services'];
		goto label449;

		label288:

		$F647a429f8089f01['http_ports_add'] = implode(',', array_slice($c2339b431f4d68cb['http'], 1, count($c2339b431f4d68cb['http']) - 1));

		label305:

		$F647a429f8089f01['https_broadcast_port'] = NULL;
		$F647a429f8089f01['https_ports_add'] = NULL;
		goto label378;

		label310:

		if (!file_exists(CACHE_TMP_PATH . 'servers')) {
			goto label323;
		}

		unlink(CACHE_TMP_PATH . 'servers');

		label323:

		$Ba1ee0f788e9fee4 = c2b0c0f9dD458149($E5b50d60c471d7d6);
		$b9a4826fd314adfe = false;
		goto label474;

		label329:

		setGovernor($E5b50d60c471d7d6, $F647a429f8089f01['governor']);

		label334:

		if (empty($F647a429f8089f01['sysctl'])) {
			goto label342;
		}

		setSysctl($E5b50d60c471d7d6, $F647a429f8089f01['sysctl']);

		label342:

		goto label310;

		label343:

		c63CE1240e996bBC($E5b50d60c471d7d6, 0, $c2339b431f4d68cb['http'], false);
		C63cE1240E996bBc($E5b50d60c471d7d6, 1, $c2339b431f4d68cb['https'], false);
		C63ce1240e996BBC($E5b50d60c471d7d6, 2, [$F647a429f8089f01['rtmp_port']], false);
		E08262D3291c63F5($E5b50d60c471d7d6, intval($F647a429f8089f01['total_services']), true);

		if (empty($F647a429f8089f01['governor'])) {
			goto label334;
		}

		goto label329;

		label378:

		if (!(0 < count($c2339b431f4d68cb['https']))) {
			goto label592;
		}

		$F647a429f8089f01['https_broadcast_port'] = $c2339b431f4d68cb['https'][0];

		if (!(1 < count($c2339b431f4d68cb['https']))) {
			goto label415;
		}

		$F647a429f8089f01['https_ports_add'] = implode(',', array_slice($c2339b431f4d68cb['https'], 1, count($c2339b431f4d68cb['https']) - 1));

		label415:

		goto label592;

		label416:

		if (E589a4bf54a2DAD1('adv', 'edit_server')) {
			goto label423;
		}

		exit();

		label423:

		if (self::a11aA39c8A0bDf06($ba2d146bb5a55097)) {
			goto label106;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];
		goto label106;

		label433:

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label446;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label147;

		label446:

		$E5b50d60c471d7d6 = $ba2d146bb5a55097['edit'];
		goto label187;

		label449:

		$ed3f7bb55ca28ad9 = $F647a429f8089f01['php_version'];
		$F647a429f8089f01['php_version'] = $ba2d146bb5a55097['php_version_num'];
		$Fac87d38f7786df0 = C483a3a59265139e($F647a429f8089f01);
		$Fac87d38f7786df0['data'][] = $ba2d146bb5a55097['edit'];
		$B91645b8411dc88c = 'UPDATE `servers` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` = ?;';
		goto label433;

		label467:

		if (isset($ba2d146bb5a55097['domain_name'])) {
			goto label2;
		}

		$F647a429f8089f01['domain_name'] = '';
		goto label9;
		goto label2;

		label474:

		foreach ($Ba1ee0f788e9fee4 as $E6b9fe077cbe8aa0) {
			if (!($E6b9fe077cbe8aa0['mount'] == rtrim(STREAMS_PATH, '/'))) {
				goto label490;
			}

			$b9a4826fd314adfe = true;
			goto label492;

			label490:
		}

		label492:
		if ($ba2d146bb5a55097['disable_ramdisk'] && $b9a4826fd314adfe) {
			goto label174;
		}
		if (!(!$ba2d146bb5a55097['disable_ramdisk'] && !$b9a4826fd314adfe)) {
			goto label173;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', $E5b50d60c471d7d6, time(), json_encode(['action' => 'enable_ramdisk']));
		goto label173;

		label518:

		$F647a429f8089f01['isp_names'] = [];
		goto label467;

		label521:

		$F647a429f8089f01['isp_names'] = [];

		foreach ($ba2d146bb5a55097['isp_names'] as $fc07e00b86ce286c) {
			$F647a429f8089f01['isp_names'][] = strtolower(trim(preg_replace('/[^A-Za-z0-9 ]/', '', $fc07e00b86ce286c)));
		}

		goto label467;

		label543:

		$F647a429f8089f01 = c73Ed8D0B70cE12f('servers', $ba2d146bb5a55097, true);
		$c2339b431f4d68cb = [
			'http'  => [],
			'https' => []
		];

		foreach ($ba2d146bb5a55097['http_broadcast_ports'] as $e5bebfb39a19fe80) {
			if (!(is_numeric($e5bebfb39a19fe80) && (80 <= $e5bebfb39a19fe80) && ($e5bebfb39a19fe80 <= 65535) && !in_array($e5bebfb39a19fe80, $c2339b431f4d68cb['http'] ?: []) && ($e5bebfb39a19fe80 != $ba2d146bb5a55097['rtmp_port']))) {
				goto label583;
			}

			$c2339b431f4d68cb['http'][] = $e5bebfb39a19fe80;

			label583:
		}

		$c2339b431f4d68cb['http'] = array_unique($c2339b431f4d68cb['http']);
		goto label52;

		label592:

		foreach (['enable_gzip', 'timeshift_only', 'enable_https', 'random_ip', 'enable_geoip', 'enable_isp', 'enabled', 'enable_proxy'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label602;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label604;

			label602:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label604:
		}

		if (!$Ec379295dc7029e6['is_main']) {
			goto label45;
		}

		$F647a429f8089f01['enabled'] = 1;
		goto label45;

		label613:
	}

	static public function DdaC4b7C6F34a02f($ba2d146bb5a55097)
	{
		goto label116;

		label2:

		$F647a429f8089f01 = E42eD0B0860db08A(CBb79f154Db723A8($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		foreach (['enable_https', 'random_ip', 'enable_geoip', 'enabled'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label21;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = false;
			goto label23;

			label21:

			$F647a429f8089f01[$Bb672d1983256a93] = true;

			label23:
		}

		if (isset($ba2d146bb5a55097['geoip_countries'])) {
			goto label51;
		}

		goto label48;

		label29:

		if (!file_exists(CACHE_TMP_PATH . 'proxy_servers')) {
			goto label42;
		}

		unlink(CACHE_TMP_PATH . 'proxy_servers');

		label42:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label47:

		goto label177;

		label48:

		$F647a429f8089f01['geoip_countries'] = [];
		goto label170;

		label51:

		$F647a429f8089f01['geoip_countries'] = [];

		foreach ($ba2d146bb5a55097['geoip_countries'] as $b8f81a9f6e93f6a9) {
			$F647a429f8089f01['geoip_countries'][] = $b8f81a9f6e93f6a9;
		}

		goto label170;

		label62:

		$F647a429f8089f01['domain_name'] = implode(',', $ba2d146bb5a55097['domain_name']);

		label69:
		if (!((strlen($ba2d146bb5a55097['server_ip']) == 0) || !filter_var($ba2d146bb5a55097['server_ip'], FILTER_VALIDATE_IP))) {
			goto label133;
		}

		return ['status' => STATUS_INVALID_IP, 'data' => $ba2d146bb5a55097];
		goto label133;

		label91:

		$Fac87d38f7786df0 = C483a3a59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label152;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label47;
		goto label152;

		label116:

		if (self::A11aA39C8A0BDF06($ba2d146bb5a55097)) {
			goto label125;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label125:

		if (E589a4BF54A2dad1('adv', 'edit_server')) {
			goto label2;
		}

		exit();
		goto label2;

		label133:

		if (!Bd57390a052fd83b('servers', 'server_ip', $ba2d146bb5a55097['server_ip'], 'id', $F647a429f8089f01['id'])) {
			goto label149;
		}

		return ['status' => STATUS_EXISTS_IP, 'data' => $ba2d146bb5a55097];

		label149:

		$F647a429f8089f01['server_type'] = 1;
		goto label91;

		label152:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();

		if (!file_exists(CACHE_TMP_PATH . 'servers')) {
			goto label169;
		}

		unlink(CACHE_TMP_PATH . 'servers');

		label169:

		goto label29;

		label170:

		if (isset($ba2d146bb5a55097['domain_name'])) {
			goto label62;
		}

		$F647a429f8089f01['domain_name'] = '';
		goto label69;
		goto label62;

		label177:
	}

	static public function F7b37A01d2B82f24($ba2d146bb5a55097)
	{
		goto label293;

		label2:

		goto label73;

		label3:

		$C6671ac66a4f1c57 = PHP_BIN . ' ' . CLI_PATH . 'balancer.php ' . intval($ba2d146bb5a55097['type']) . ' ' . intval($E5b50d60c471d7d6) . ' ' . intval($ba2d146bb5a55097['ssh_port']) . ' ' . escapeshellarg($ba2d146bb5a55097['root_username']) . ' ' . escapeshellarg($ba2d146bb5a55097['root_password']) . ' ' . intval($ba2d146bb5a55097['http_broadcast_port']) . ' ' . intval($ba2d146bb5a55097['https_broadcast_port']) . ' ' . intval($Ff28d708d905e33a) . ' ' . intval($F14090a02a938bce) . ' "' . json_encode($Ee7511dcb615b77d) . '" > "' . BIN_PATH . 'install/' . intval($E5b50d60c471d7d6) . '.install" 2>/dev/null &';

		label73:

		shell_exec($C6671ac66a4f1c57);
		goto label353;

		label77:

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label90;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label358;

		label90:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		goto label223;

		label95:

		if ($ba2d146bb5a55097['type'] == 1) {
			goto label150;
		}

		$C6671ac66a4f1c57 = PHP_BIN . ' ' . CLI_PATH . 'balancer.php ' . intval($ba2d146bb5a55097['type']) . ' ' . intval($Ec379295dc7029e6['id']) . ' ' . intval($ba2d146bb5a55097['ssh_port']) . ' ' . escapeshellarg($ba2d146bb5a55097['root_username']) . ' ' . escapeshellarg($ba2d146bb5a55097['root_password']) . ' 80 443 ' . intval($Ff28d708d905e33a) . ' > "' . BIN_PATH . 'install/' . intval($Ec379295dc7029e6['id']) . '.install" 2>/dev/null &';
		goto label372;

		label150:

		$C6671ac66a4f1c57 = PHP_BIN . ' ' . CLI_PATH . 'balancer.php ' . intval($ba2d146bb5a55097['type']) . ' ' . intval($Ec379295dc7029e6['id']) . ' ' . intval($ba2d146bb5a55097['ssh_port']) . ' ' . escapeshellarg($ba2d146bb5a55097['root_username']) . ' ' . escapeshellarg($ba2d146bb5a55097['root_password']) . ' ' . intval($ba2d146bb5a55097['http_broadcast_port']) . ' ' . intval($ba2d146bb5a55097['https_broadcast_port']) . ' ' . intval($Ff28d708d905e33a) . ' ' . intval($F14090a02a938bce) . ' "' . json_encode($Ee7511dcb615b77d) . '" > "' . BIN_PATH . 'install/' . intval($Ec379295dc7029e6['id']) . '.install" 2>/dev/null &';
		goto label372;

		label223:

		if (!($F647a429f8089f01['server_type'] == 0)) {
			goto label233;
		}

		Xui\Functions::grantPrivileges('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0', $F647a429f8089f01['server_ip']);

		label233:

		if ($ba2d146bb5a55097['type'] == 1) {
			goto label3;
		}

		$C6671ac66a4f1c57 = PHP_BIN . ' ' . CLI_PATH . 'balancer.php ' . intval($ba2d146bb5a55097['type']) . ' ' . intval($E5b50d60c471d7d6) . ' ' . intval($ba2d146bb5a55097['ssh_port']) . ' ' . escapeshellarg($ba2d146bb5a55097['root_username']) . ' ' . escapeshellarg($ba2d146bb5a55097['root_password']) . ' 80 443 ' . intval($Ff28d708d905e33a) . ' > "' . BIN_PATH . 'install/' . intval($E5b50d60c471d7d6) . '.install" 2>/dev/null &';
		goto label2;

		label286:

		goto label471;

		label287:

		if (isset($ba2d146bb5a55097['update_sysctl'])) {
			goto label292;
		}

		$Ff28d708d905e33a = 0;
		goto label387;

		label292:

		goto label386;

		label293:

		if (self::a11aa39C8A0bDF06($ba2d146bb5a55097)) {
			goto label302;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label302:

		if (e589a4BF54A2dAd1('adv', 'add_server')) {
			goto label287;
		}

		exit();
		goto label287;

		label310:

		foreach (json_decode($ba2d146bb5a55097['parent_id'], true) as $C082ca9ed03f473c) {
			if (!(self::$rServers[$C082ca9ed03f473c]['server_type'] == 0)) {
				goto label330;
			}

			$Ee7511dcb615b77d[] = intval($C082ca9ed03f473c);

			label330:
		}

		label332:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label359;
		}

		$F647a429f8089f01 = c73eD8D0b70CE12f('servers', $ba2d146bb5a55097);
		goto label393;

		label341:

		$ba2d146bb5a55097['type'] = 3;

		label343:

		if ($ba2d146bb5a55097['type'] == 1) {
			goto label450;
		}

		$Ec379295dc7029e6 = self::$rServers[$ba2d146bb5a55097['edit']];
		goto label454;
		goto label450;

		label353:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label358:

		goto label286;

		label359:

		if (!isset($ba2d146bb5a55097['update_only'])) {
			goto label343;
		}

		goto label341;

		label364:

		$F14090a02a938bce = 1;

		label365:

		if (!($ba2d146bb5a55097['type'] == 1)) {
			goto label332;
		}

		$Ee7511dcb615b77d = [];
		goto label310;

		label372:

		shell_exec($C6671ac66a4f1c57);
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $Ec379295dc7029e6['id']]
		];

		label381:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label286;

		label386:

		$Ff28d708d905e33a = 1;

		label387:

		if (isset($ba2d146bb5a55097['use_private_ip'])) {
			goto label364;
		}

		$F14090a02a938bce = 0;
		goto label365;
		goto label364;

		label393:

		$F647a429f8089f01['status'] = 3;
		unset($F647a429f8089f01['id']);
		if (!((strlen($F647a429f8089f01['server_ip']) == 0) || !filter_var($F647a429f8089f01['server_ip'], FILTER_VALIDATE_IP))) {
			goto label417;
		}

		return ['status' => STATUS_INVALID_IP, 'data' => $ba2d146bb5a55097];

		label417:

		goto label418;

		label418:

		if ($ba2d146bb5a55097['type'] == 1) {
			goto label425;
		}

		$F647a429f8089f01['server_type'] = 0;
		goto label436;

		label425:

		$F647a429f8089f01['server_type'] = 1;
		goto label428;

		label428:

		$F647a429f8089f01['parent_id'] = '[' . implode(',', $Ee7511dcb615b77d) . ']';

		label436:

		$F647a429f8089f01['network_interface'] = 'auto';
		$Fac87d38f7786df0 = c483A3A59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'INSERT INTO `servers`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';
		goto label77;

		label450:

		$Ec379295dc7029e6 = self::$rProxyServers[$ba2d146bb5a55097['edit']];

		label454:

		if (!$Ec379295dc7029e6) {
			goto label381;
		}

		self::$db->query('UPDATE `servers` SET `status` = 3, `parent_id` = ? WHERE `id` = ?;', '[' . implode(',', $Ee7511dcb615b77d) . ']', $Ec379295dc7029e6['id']);
		goto label95;

		label471:
	}

	static public function d0d0E87Fb9aD0543($ba2d146bb5a55097)
	{
		goto label2;

		label2:

		if (self::A11Aa39C8a0BDF06($ba2d146bb5a55097)) {
			goto label11;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label11:

		foreach (['user_agent', 'http_proxy', 'cookie', 'headers'] as $Bb672d1983256a93) {
			self::$db->query('UPDATE `streams_arguments` SET `argument_default_value` = ? WHERE `argument_key` = ?;', $ba2d146bb5a55097[$Bb672d1983256a93] ?: NULL, $Bb672d1983256a93);
			unset($ba2d146bb5a55097[$Bb672d1983256a93]);
		}

		goto label96;

		label26:

		if (!(100 < $F647a429f8089f01['search_items'])) {
			goto label33;
		}

		$F647a429f8089f01['search_items'] = 100;

		label33:

		goto label122;

		label34:

		return ['status' => STATUS_SUCCESS];

		label37:

		goto label160;

		label38:

		if (isset($ba2d146bb5a55097['allowed_stb_types'])) {
			goto label43;
		}

		$F647a429f8089f01['allowed_stb_types'] = [];

		label43:

		if (isset($ba2d146bb5a55097['allow_countries'])) {
			goto label71;
		}

		goto label69;

		label47:

		goto label26;

		label48:

		if (file_exists(XUI_HOME . 'www/c/')) {
			goto label26;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', SERVER_ID, time(), json_encode(['action' => 'enable_ministra']));
		goto label26;

		label69:

		$F647a429f8089f01['allow_countries'] = ['ALL'];

		label71:

		if ($F647a429f8089f01['mag_legacy_redirect']) {
			goto label48;
		}

		if (!file_exists(XUI_HOME . 'www/c/')) {
			goto label47;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`) VALUES(?, ?, ?);', SERVER_ID, time(), json_encode(['action' => 'disable_ministra']));
		goto label47;

		label96:

		$F647a429f8089f01 = C73ed8D0B70CE12f('settings', $ba2d146bb5a55097, true);

		foreach (['php_loopback', 'restreamer_bypass_proxy', 'request_prebuffer', 'modal_edit', 'group_buttons', 'enable_search', 'on_demand_checker', 'ondemand_balance_equal', 'disable_mag_token', 'allow_cdn_access', 'dts_legacy_ffmpeg', 'mag_load_all_channels', 'disable_xmltv_restreamer', 'disable_playlist_restreamer', 'ffmpeg_warnings', 'auto_send_logs', 'reseller_ssl_domain', 'extract_subtitles', 'show_category_duplicates', 'vod_sort_newest', 'header_stats', 'mag_keep_extension', 'keep_protocol', 'read_native_hls', 'player_allow_playlist', 'player_allow_bouquet', 'player_hide_incompatible', 'player_allow_hevc', 'force_epg_timezone', 'check_vod', 'ignore_keyframes', 'save_login_logs', 'save_restart_logs', 'mag_legacy_redirect', 'restrict_playlists', 'monitor_connection_status', 'kill_rogue_ffmpeg', 'show_images', 'on_demand_instant_off', 'on_demand_failure_exit', 'playlist_from_mysql', 'ignore_invalid_users', 'legacy_mag_auth', 'ministra_allow_blank', 'block_proxies', 'block_streaming_servers', 'ip_subnet_match', 'debug_show_errors', 'restart_php_fpm', 'restream_deny_unauthorised', 'api_probe', 'legacy_panel_api', 'hide_failures', 'verify_host', 'encrypt_playlist', 'encrypt_playlist_restreamer', 'mag_disable_ssl', 'legacy_get', 'legacy_xmltv', 'save_closed_connection', 'show_tickets', 'stream_logs_save', 'client_logs_save', 'streams_grouped', 'cloudflare', 'cleanup', 'dashboard_stats', 'dashboard_status', 'dashboard_map', 'dashboard_display_alt', 'enable_epg_api', 'recaptcha_enable', 'ip_logout', 'disable_player_api', 'disable_playlist', 'disable_xmltv', 'disable_enigma2', 'disable_ministra', 'enable_isp_lock', 'block_svp', 'disable_ts', 'disable_ts_allow_restream', 'disable_hls', 'disable_hls_allow_restream', 'disable_rtmp', 'disable_rtmp_allow_restream', 'case_sensitive_line', 'county_override_1st', 'disallow_2nd_ip_con', 'use_mdomain_in_lists', 'encrypt_hls', 'disallow_empty_user_agents', 'detect_restream_block_user', 'download_images', 'api_redirect', 'use_buffer', 'audio_restart_loss', 'show_isps', 'priority_backup', 'rtmp_random', 'show_connected_video', 'show_not_on_air_video', 'show_banned_video', 'show_expired_video', 'show_expiring_video', 'show_all_category_mag', 'always_enabled_subtitles', 'enable_connection_problem_indication', 'show_tv_channel_logo', 'show_channel_logo_in_preview', 'disable_trial', 'restrict_same_ip', 'js_navigate'] as $Fd9e045cc4ea8a71) {
			if (isset($ba2d146bb5a55097[$Fd9e045cc4ea8a71])) {
				goto label112;
			}

			$F647a429f8089f01[$Fd9e045cc4ea8a71] = 0;
			goto label114;

			label112:

			$F647a429f8089f01[$Fd9e045cc4ea8a71] = 1;

			label114:
		}

		if (isset($ba2d146bb5a55097['allowed_stb_types_for_local_recording'])) {
			goto label38;
		}

		$F647a429f8089f01['allowed_stb_types_for_local_recording'] = [];
		goto label38;

		label122:

		if (!($F647a429f8089f01['search_items'] <= 0)) {
			goto label129;
		}

		$F647a429f8089f01['search_items'] = 1;

		label129:

		$Fac87d38f7786df0 = c483a3a59265139E($F647a429f8089f01);

		if (!(0 < count($Fac87d38f7786df0['data']))) {
			goto label37;
		}

		goto label142;

		label142:

		$B91645b8411dc88c = 'UPDATE `settings` SET ' . $Fac87d38f7786df0['update'] . ';';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label157;
		}

		return ['status' => STATUS_FAILURE];

		label157:

		DD93e05e9BFF8A1E();
		goto label34;

		label160:
	}

	static public function Bb69cF0A7DC01fc9($ba2d146bb5a55097)
	{
		goto label30;

		label2:

		$F647a429f8089f01['allowed_stb_types'] = [];

		label4:

		$Fac87d38f7786df0 = c483a3A59265139E($F647a429f8089f01);

		if (!(0 < count($Fac87d38f7786df0['data']))) {
			goto label77;
		}

		$B91645b8411dc88c = 'UPDATE `settings` SET ' . $Fac87d38f7786df0['update'] . ';';
		goto label60;

		label21:

		if (isset($ba2d146bb5a55097['allowed_stb_types_for_local_recording'])) {
			goto label26;
		}

		$F647a429f8089f01['allowed_stb_types_for_local_recording'] = [];

		label26:

		if (isset($ba2d146bb5a55097['allowed_stb_types'])) {
			goto label4;
		}

		goto label2;

		label30:

		if (self::A11Aa39c8a0bDF06($ba2d146bb5a55097)) {
			goto label39;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label39:

		$F647a429f8089f01 = c73Ed8D0b70Ce12F('settings', $ba2d146bb5a55097, true);

		foreach (['dropbox_remote'] as $Fd9e045cc4ea8a71) {
			if (isset($ba2d146bb5a55097[$Fd9e045cc4ea8a71])) {
				goto label55;
			}

			$F647a429f8089f01[$Fd9e045cc4ea8a71] = 0;
			goto label57;

			label55:

			$F647a429f8089f01[$Fd9e045cc4ea8a71] = 1;

			label57:
		}

		goto label21;

		label60:

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label71;
		}

		return ['status' => STATUS_FAILURE];

		label71:

		DD93e05E9BfF8a1E();
		return ['status' => STATUS_SUCCESS];
		goto label77;

		label77:

		goto label78;

		label78:
	}

	static public function editCacheCron($ba2d146bb5a55097)
	{
		goto label52;

		label2:

		preg_match($E5f5fbcd0c39ff43, $d811dda1f3a55644[1], $Ac97fb1939417214);
		$a6691616d494dd58[1] = 0 < count($Ac97fb1939417214);
		$e288afeb68243d10 = implode(' ', $d811dda1f3a55644);

		if (isset($ba2d146bb5a55097['cache_changes'])) {
			goto label25;
		}

		$fa19d14a9432c5e4 = false;
		goto label24;

		label24:

		goto label26;

		label25:

		$fa19d14a9432c5e4 = true;

		label26:
		if ($a6691616d494dd58[0] && $a6691616d494dd58[1]) {
			goto label89;
		}

		goto label85;

		label33:

		if (!file_exists(TMP_PATH . 'crontab')) {
			goto label46;
		}

		unlink(TMP_PATH . 'crontab');

		label46:

		DD93E05E9BFF8A1e();
		return ['status' => STATUS_SUCCESS];
		goto label64;

		label52:

		if (self::A11AA39c8A0bDf06($ba2d146bb5a55097)) {
			goto label61;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label61:

		$a6691616d494dd58 = [false, false];
		$d811dda1f3a55644 = ['*', '*', '*', '*', '*'];
		goto label65;

		label64:

		goto label102;

		label65:

		$E5f5fbcd0c39ff43 = '/^[0-9\\/*,-]+$/';
		$d811dda1f3a55644[0] = $ba2d146bb5a55097['minute'];
		preg_match($E5f5fbcd0c39ff43, $d811dda1f3a55644[0], $Ac97fb1939417214);
		$a6691616d494dd58[0] = 0 < count($Ac97fb1939417214);
		$d811dda1f3a55644[1] = $ba2d146bb5a55097['hour'];
		goto label2;

		label85:

		return ['status' => STATUS_FAILURE];
		goto label64;

		label89:

		self::$db->query('UPDATE `crontab` SET `time` = ? WHERE `filename` = \'cache_engine.php\';', $e288afeb68243d10);
		self::$db->query('UPDATE `settings` SET `cache_thread_count` = ?, `cache_changes` = ?;', $ba2d146bb5a55097['cache_thread_count'], $fa19d14a9432c5e4);
		goto label33;

		label102:
	}

	static public function editPlexSettings($ba2d146bb5a55097)
	{
		if (self::a11Aa39C8a0BdF06($ba2d146bb5a55097)) {
			goto label10;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label10:

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			goto label15;

			label15:

			$E3665d09b9cea208 = explode('_', $Bb672d1983256a93);

			if (!($E3665d09b9cea208[0] == 'genre')) {
				goto label59;
			}

			if (isset($ba2d146bb5a55097['bouquet_' . $E3665d09b9cea208[1]])) {
				goto label37;
			}

			$Df5cd7b5dc4cc10c = '[]';
			goto label51;
			goto label37;

			label37:

			$Df5cd7b5dc4cc10c = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['bouquet_' . $E3665d09b9cea208[1]])) . ']';

			label51:

			self::$db->query('UPDATE `watch_categories` SET `category_id` = ?, `bouquets` = ? WHERE `genre_id` = ? AND `type` = 3;', $ce0840c647e1bbc7, $Df5cd7b5dc4cc10c, $E3665d09b9cea208[1]);

			label59:

			goto label61;

			label61:

			goto label63;

			label63:
		}

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			goto label72;

			label70:

			goto label118;

			label72:

			$E3665d09b9cea208 = explode('_', $Bb672d1983256a93);

			if (!($E3665d09b9cea208[0] == 'genretv')) {
				goto label116;
			}

			if (isset($ba2d146bb5a55097['bouquettv_' . $E3665d09b9cea208[1]])) {
				goto label94;
			}

			$Df5cd7b5dc4cc10c = '[]';
			goto label108;
			goto label94;

			label94:

			$Df5cd7b5dc4cc10c = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['bouquettv_' . $E3665d09b9cea208[1]])) . ']';

			label108:

			self::$db->query('UPDATE `watch_categories` SET `category_id` = ?, `bouquets` = ? WHERE `genre_id` = ? AND `type` = 4;', $ce0840c647e1bbc7, $Df5cd7b5dc4cc10c, $E3665d09b9cea208[1]);

			label116:

			goto label70;

			label118:
		}

		self::$db->query('UPDATE `settings` SET `scan_seconds` = ?, `max_genres` = ?, `thread_count_movie` = ?, `thread_count_show` = ?;', $ba2d146bb5a55097['scan_seconds'], $ba2d146bb5a55097['max_genres'], $ba2d146bb5a55097['thread_count_movie'], $ba2d146bb5a55097['thread_count_show']);
		DD93e05E9BFF8A1E();
		return ['status' => STATUS_SUCCESS];
	}

	static public function CeD6182c3E420D08($ba2d146bb5a55097)
	{
		goto label21;

		label2:

		goto label4;

		label3:

		$ed2bd11b0a16f167 = true;

		label4:

		self::$db->query('UPDATE `settings` SET `percentage_match` = ?, `scan_seconds` = ?, `thread_count` = ?, `max_genres` = ?, `max_items` = ?, `alternative_titles` = ?, `fallback_parser` = ?;', $ba2d146bb5a55097['percentage_match'], $ba2d146bb5a55097['scan_seconds'], $ba2d146bb5a55097['thread_count'], $ba2d146bb5a55097['max_genres'], $ba2d146bb5a55097['max_items'], $Ca6267de5ab4207e, $ed2bd11b0a16f167);
		goto label92;

		label21:

		if (self::A11AA39c8A0bDf06($ba2d146bb5a55097)) {
			goto label30;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label30:

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			goto label59;

			label35:

			$Df5cd7b5dc4cc10c = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['bouquet_' . $E3665d09b9cea208[1]])) . ']';

			label49:

			self::$db->query('UPDATE `watch_categories` SET `category_id` = ?, `bouquets` = ? WHERE `genre_id` = ? AND `type` = 1;', $ce0840c647e1bbc7, $Df5cd7b5dc4cc10c, $E3665d09b9cea208[1]);

			label57:

			goto label81;

			label59:

			$E3665d09b9cea208 = explode('_', $Bb672d1983256a93);

			if (!($E3665d09b9cea208[0] == 'genre')) {
				goto label57;
			}

			if (isset($ba2d146bb5a55097['bouquet_' . $E3665d09b9cea208[1]])) {
				goto label35;
			}

			$Df5cd7b5dc4cc10c = '[]';
			goto label49;
			goto label35;

			label81:

			goto label83;

			label83:
		}

		goto label98;

		label86:

		$Ca6267de5ab4207e = true;

		label87:

		if (isset($ba2d146bb5a55097['fallback_parser'])) {
			goto label3;
		}

		$ed2bd11b0a16f167 = false;
		goto label2;

		label92:

		DD93e05E9BFF8A1E();
		return ['status' => STATUS_SUCCESS];
		goto label159;

		label98:

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			goto label103;

			label103:

			$E3665d09b9cea208 = explode('_', $Bb672d1983256a93);

			if (!($E3665d09b9cea208[0] == 'genretv')) {
				goto label149;
			}

			if (isset($ba2d146bb5a55097['bouquettv_' . $E3665d09b9cea208[1]])) {
				goto label127;
			}

			$Df5cd7b5dc4cc10c = '[]';
			goto label141;
			goto label127;

			label125:

			goto label151;

			label127:

			$Df5cd7b5dc4cc10c = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['bouquettv_' . $E3665d09b9cea208[1]])) . ']';

			label141:

			self::$db->query('UPDATE `watch_categories` SET `category_id` = ?, `bouquets` = ? WHERE `genre_id` = ? AND `type` = 2;', $ce0840c647e1bbc7, $Df5cd7b5dc4cc10c, $E3665d09b9cea208[1]);

			label149:

			goto label125;

			label151:
		}

		if (isset($ba2d146bb5a55097['alternative_titles'])) {
			goto label86;
		}

		$Ca6267de5ab4207e = false;
		goto label87;
		goto label86;

		label159:
	}

	static public function C0EC9F27E524d591($ba2d146bb5a55097)
	{
		goto label792;

		label2:

		$F647a429f8089f01['transcode_profile_id'] = $ba2d146bb5a55097['transcode_profile_id'];

		if (0 < $F647a429f8089f01['transcode_profile_id']) {
			goto label12;
		}

		$F647a429f8089f01['enable_transcode'] = 0;
		goto label678;

		label12:

		goto label676;

		label13:

		$F647a429f8089f01['auto_restart'] = '';
		goto label539;

		label16:

		$A6873c45e1480690 = [
			'days' => [],
			'at'   => $ba2d146bb5a55097['time_to_restart']
		];

		foreach ($ba2d146bb5a55097['days_to_restart'] as $Abcb228699a7f743 => $ad246beea4e2bbaa) {
			$A6873c45e1480690['days'][] = $ad246beea4e2bbaa;
		}

		goto label534;

		label30:

		$Df5cd7b5dc4cc10c = f964B9222b35AdDd();
		$D40edb940808ad1f = $af051e9776cb3ebc = $aa15ffb0d29cf18b = [];
		$a6b0b98538ff95bd = $C21b8218fb28a18d = '';

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			goto label189;

			label42:

			$D40edb940808ad1f[2][] = $ee6d1fc5d801b43f;
			$a6b0b98538ff95bd .= '(' . intval($ee6d1fc5d801b43f) . ', 2, ' . self::$db->escape($ba2d146bb5a55097['http_proxy']) . '),';

			label58:

			if (!isset($ba2d146bb5a55097['c_cookie'])) {
				goto label255;
			}

			goto label227;

			label65:

			$Fac87d38f7786df0 = C483A3a59265139e($F647a429f8089f01);

			if (!(0 < count($Fac87d38f7786df0['data']))) {
				goto label517;
			}

			$Fac87d38f7786df0['data'][] = $ee6d1fc5d801b43f;
			$B91645b8411dc88c = 'UPDATE `streams` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` = ?;';
			goto label511;

			label87:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
				if (in_array($f155fef57262b32a['id'], $ba2d146bb5a55097['bouquets'])) {
					goto label111;
				}

				$aa15ffb0d29cf18b[$f155fef57262b32a['id']][] = $ee6d1fc5d801b43f;

				label111:
			}

			label113:

			goto label215;

			label115:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$aa15ffb0d29cf18b[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			label123:

			goto label486;

			label125:

			goto label478;

			label127:

			foreach ($F330b1e93afbd525[$ee6d1fc5d801b43f] ?: [] as $fe63f70cd74f3298) {
				if (in_array($fe63f70cd74f3298, $F771d40e8cf51e59)) {
					goto label142;
				}

				$F771d40e8cf51e59[] = $fe63f70cd74f3298;

				label142:
			}

			label144:

			$F647a429f8089f01['category_id'] = '[' . implode(',', $F771d40e8cf51e59) . ']';
			goto label65;

			label154:

			if (!isset($ba2d146bb5a55097['c_headers'])) {
				goto label279;
			}
			if (!(isset($ba2d146bb5a55097['headers']) && (0 < strlen($ba2d146bb5a55097['headers'])))) {
				goto label187;
			}

			$D40edb940808ad1f[19][] = $ee6d1fc5d801b43f;
			$a6b0b98538ff95bd .= '(' . intval($ee6d1fc5d801b43f) . ', 19, ' . self::$db->escape($ba2d146bb5a55097['headers']) . '),';

			label187:

			goto label279;

			label189:

			if (!isset($ba2d146bb5a55097['c_category_id'])) {
				goto label65;
			}

			$F771d40e8cf51e59 = array_map('intval', $ba2d146bb5a55097['category_id']);

			if ($ba2d146bb5a55097['category_id_type'] == 'ADD') {
				goto label127;
			}

			if (!($ba2d146bb5a55097['category_id_type'] == 'DEL')) {
				goto label507;
			}

			$Bbaf8e3ba7b2daf9 = $F330b1e93afbd525[$ee6d1fc5d801b43f];
			goto label490;

			label215:

			foreach ($ef4c4dea281208bc as $C082ca9ed03f473c => $b4b8bc59289836c2) {
				deleteStreamsByServer($b4b8bc59289836c2, $C082ca9ed03f473c, false);
			}

			goto label531;

			label227:
			if (!(isset($ba2d146bb5a55097['cookie']) && (0 < strlen($ba2d146bb5a55097['cookie'])))) {
				goto label255;
			}

			$D40edb940808ad1f[17][] = $ee6d1fc5d801b43f;
			$a6b0b98538ff95bd .= '(' . intval($ee6d1fc5d801b43f) . ', 17, ' . self::$db->escape($ba2d146bb5a55097['cookie']) . '),';

			label255:

			goto label154;

			label257:

			if (!isset($ba2d146bb5a55097['c_user_agent'])) {
				goto label459;
			}
			if (!(isset($ba2d146bb5a55097['user_agent']) && (0 < strlen($ba2d146bb5a55097['user_agent'])))) {
				goto label459;
			}

			$D40edb940808ad1f[1][] = $ee6d1fc5d801b43f;
			goto label446;

			label279:

			if (!isset($ba2d146bb5a55097['c_bouquets'])) {
				goto label215;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'SET') {
				goto label488;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'ADD') {
				goto label125;
			}

			if (!($ba2d146bb5a55097['bouquets_type'] == 'DEL')) {
				goto label123;
			}

			goto label115;

			label302:

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				goto label338;

				label307:

				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;

				if (isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label335;
				}

				$C21b8218fb28a18d .= '(' . intval($ee6d1fc5d801b43f) . ', ' . intval($C082ca9ed03f473c) . ', ' . ($f6cad74ab6fb4eea ?: 'NULL') . ', ' . $E8d26871dd3cdb88 . '),';
				goto label416;

				label335:

				goto label407;

				label338:

				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label416;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);

				if (in_array($ba2d146bb5a55097['server_type'], ['ADD', 'SET'])) {
					goto label375;
				}

				if (!isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label372;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;
				goto label372;

				label372:

				goto label416;

				label375:

				$E8d26871dd3cdb88 = intval(in_array($C082ca9ed03f473c, $ba2d146bb5a55097['on_demand'] ?: []));

				if ($Ec379295dc7029e6['parent'] == 'source') {
					goto label403;
				}

				goto label395;

				label395:

				$f6cad74ab6fb4eea = intval($Ec379295dc7029e6['parent']);
				goto label404;

				label403:

				$f6cad74ab6fb4eea = NULL;

				label404:

				goto label307;

				label407:

				self::$db->query('UPDATE `streams_servers` SET `parent_id` = ?, `on_demand` = ? WHERE `server_stream_id` = ?;', $f6cad74ab6fb4eea, $E8d26871dd3cdb88, $d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c]);

				label416:

				goto label419;

				label419:
			}

			if (!($ba2d146bb5a55097['server_type'] == 'SET')) {
				goto label257;
			}

			foreach ($d5188a7c24fae75b[$ee6d1fc5d801b43f] as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label442;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;

				label442:
			}

			goto label257;

			label446:

			$a6b0b98538ff95bd .= '(' . intval($ee6d1fc5d801b43f) . ', 1, ' . self::$db->escape($ba2d146bb5a55097['user_agent']) . '),';

			label459:

			if (!isset($ba2d146bb5a55097['c_http_proxy'])) {
				goto label58;
			}
			if (!(isset($ba2d146bb5a55097['http_proxy']) && (0 < strlen($ba2d146bb5a55097['http_proxy'])))) {
				goto label58;
			}

			goto label42;

			label478:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			label486:

			goto label113;

			label488:

			goto label87;

			label490:

			foreach ($F771d40e8cf51e59 as $fe63f70cd74f3298) {
				if (!(($Bb672d1983256a93 = array_search($fe63f70cd74f3298, $Bbaf8e3ba7b2daf9)) !== false)) {
					goto label504;
				}

				unset($Bbaf8e3ba7b2daf9[$Bb672d1983256a93]);

				label504:
			}

			$F771d40e8cf51e59 = $Bbaf8e3ba7b2daf9;

			label507:

			goto label144;
			goto label127;

			label511:

			self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

			label517:

			if (!isset($ba2d146bb5a55097['c_server_tree'])) {
				goto label257;
			}

			$F698c2c6c58adaf7 = [];
			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);
			goto label302;

			label531:
		}

		goto label625;

		label534:

		$F647a429f8089f01['auto_restart'] = json_encode($A6873c45e1480690);

		label539:

		foreach (['gen_timestamps', 'allow_record', 'rtmp_output', 'fps_restart', 'stream_all', 'read_native'] as $Bb672d1983256a93) {
			if (!isset($ba2d146bb5a55097['c_' . $Bb672d1983256a93])) {
				goto label557;
			}

			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label555;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label557;

			label555:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label557:
		}

		goto label743;

		label560:

		foreach ($af051e9776cb3ebc as $b5fd3e3f0096d7f4 => $fc524b8271e0d1a3) {
			b8b65e8Cb6A1DFE9('stream', $b5fd3e3f0096d7f4, $fc524b8271e0d1a3);
		}

		foreach ($aa15ffb0d29cf18b as $b5fd3e3f0096d7f4 => $A45c0679bef6bf36) {
			F8e9abB1f656E13F('stream', $b5fd3e3f0096d7f4, $A45c0679bef6bf36);
		}

		goto label813;

		label581:

		$F330b1e93afbd525 = [];
		if (!(isset($ba2d146bb5a55097['c_category_id']) && in_array($ba2d146bb5a55097['category_id_type'], ['ADD', 'DEL']))) {
			goto label704;
		}

		self::$db->query('SELECT `id`, `category_id` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$F330b1e93afbd525[$Fb9da1713bff19ce['id']] = json_decode($Fb9da1713bff19ce['category_id'], true) ?: [];
		}

		goto label704;

		label625:

		foreach ($D40edb940808ad1f as $c5501d209f2ff23a => $Ec729973833fd9b2) {
			self::$db->query('DELETE FROM `streams_options` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') AND `argument_id` = 1;', $ee6d1fc5d801b43f);
		}

		if (empty($a6b0b98538ff95bd)) {
			goto label560;
		}

		$a6b0b98538ff95bd = rtrim($a6b0b98538ff95bd, ',');
		self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES ' . $a6b0b98538ff95bd . ';');
		goto label560;

		label661:

		goto label664;

		label662:

		$F647a429f8089f01['direct_source'] = 1;

		label664:

		goto label665;

		label665:

		if (!isset($ba2d146bb5a55097['c_direct_proxy'])) {
			goto label836;
		}

		if (isset($ba2d146bb5a55097['direct_proxy'])) {
			goto label675;
		}

		$F647a429f8089f01['direct_proxy'] = 0;
		goto label836;

		label675:

		goto label832;

		label676:

		$F647a429f8089f01['enable_transcode'] = 1;

		label678:

		$dec36723d7be7c49 = json_decode($ba2d146bb5a55097['streams'], true);

		if (!(0 < count($dec36723d7be7c49))) {
			goto label768;
		}

		goto label581;

		label692:

		if (!isset($ba2d146bb5a55097['c_custom_sid'])) {
			goto label699;
		}

		$F647a429f8089f01['custom_sid'] = $ba2d146bb5a55097['custom_sid'];

		label699:

		if (!isset($ba2d146bb5a55097['c_transcode_profile_id'])) {
			goto label678;
		}

		goto label2;

		label704:

		$ef4c4dea281208bc = $d5188a7c24fae75b = [];
		self::$db->query('SELECT `stream_id`, `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$d5188a7c24fae75b[intval($Fb9da1713bff19ce['stream_id'])][intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
		}

		goto label30;

		label743:

		if (!isset($ba2d146bb5a55097['c_direct_source'])) {
			goto label664;
		}

		if (isset($ba2d146bb5a55097['direct_source'])) {
			goto label662;
		}

		$F647a429f8089f01['direct_source'] = 0;
		$F647a429f8089f01['direct_proxy'] = 0;
		goto label661;

		label755:

		if (!isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label768;
		}

		D5612F049a8056a5(['action' => 'stream', 'sub' => 'start', 'stream_ids' => array_values($dec36723d7be7c49)]);

		label768:

		return ['status' => STATUS_SUCCESS];
		goto label853;

		label772:

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label776:

		$F647a429f8089f01 = [];

		if (!isset($ba2d146bb5a55097['c_days_to_restart'])) {
			goto label539;
		}
		if (isset($ba2d146bb5a55097['days_to_restart']) && preg_match('/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/', $ba2d146bb5a55097['time_to_restart'])) {
			goto label16;
		}

		goto label13;

		label792:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::A11aA39c8A0BDf06($ba2d146bb5a55097)) {
			goto label776;
		}

		goto label772;

		label813:

		if (empty($C21b8218fb28a18d)) {
			goto label828;
		}

		$C21b8218fb28a18d = rtrim($C21b8218fb28a18d, ',');
		self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`, `on_demand`) VALUES ' . $C21b8218fb28a18d . ';');

		label828:

		XUI::updateStreams($dec36723d7be7c49);
		goto label755;

		label832:

		$F647a429f8089f01['direct_proxy'] = 1;
		$F647a429f8089f01['direct_source'] = 1;

		label836:

		foreach (['tv_archive_server_id', 'vframes_server_id', 'tv_archive_duration', 'delay_minutes', 'probesize_ondemand', 'fps_threshold', 'llod'] as $Bb672d1983256a93) {
			if (!isset($ba2d146bb5a55097['c_' . $Bb672d1983256a93])) {
				goto label850;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = intval($ba2d146bb5a55097[$Bb672d1983256a93]);

			label850:
		}

		goto label692;

		label853:
	}

	static public function massEditChannels($ba2d146bb5a55097)
	{
		goto label498;

		label2:

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label6:

		$F647a429f8089f01 = [];

		foreach (['allow_record', 'rtmp_output'] as $Bb672d1983256a93) {
			if (!isset($ba2d146bb5a55097['c_' . $Bb672d1983256a93])) {
				goto label25;
			}

			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label23;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label25;

			label23:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label25:
		}

		goto label607;

		label28:

		$ef4c4dea281208bc = $Aa455b79a8de8c3f = $d5188a7c24fae75b = [];
		self::$db->query('SELECT `stream_id`, `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$d5188a7c24fae75b[intval($Fb9da1713bff19ce['stream_id'])][intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
			$Aa455b79a8de8c3f[intval($Fb9da1713bff19ce['stream_id'])][] = intval($Fb9da1713bff19ce['server_id']);
		}

		goto label79;

		label79:

		$Df5cd7b5dc4cc10c = f964b9222B35adDD();
		$D40edb940808ad1f = $af051e9776cb3ebc = $aa15ffb0d29cf18b = [];
		$f6b94724e8f7682e = $C21b8218fb28a18d = '';

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			goto label405;

			label91:

			self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

			label97:

			if (!isset($ba2d146bb5a55097['c_server_tree'])) {
				goto label227;
			}

			$F698c2c6c58adaf7 = [];
			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);
			goto label244;

			label111:

			if (!($ba2d146bb5a55097['bouquets_type'] == 'DEL')) {
				goto label125;
			}

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$aa15ffb0d29cf18b[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			label125:

			goto label466;
			goto label458;

			label129:

			foreach ($F771d40e8cf51e59 as $fe63f70cd74f3298) {
				if (!(($Bb672d1983256a93 = array_search($fe63f70cd74f3298, $Bbaf8e3ba7b2daf9)) !== false)) {
					goto label143;
				}

				unset($Bbaf8e3ba7b2daf9[$Bb672d1983256a93]);

				label143:
			}

			$F771d40e8cf51e59 = $Bbaf8e3ba7b2daf9;

			label146:

			goto label448;
			goto label431;

			label150:

			$Fac87d38f7786df0 = c483a3A59265139e($F647a429f8089f01);

			if (!(0 < count($Fac87d38f7786df0['data']))) {
				goto label97;
			}

			$Fac87d38f7786df0['data'][] = $ee6d1fc5d801b43f;
			$B91645b8411dc88c = 'UPDATE `streams` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` = ?;';
			goto label91;

			label172:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
				if (in_array($f155fef57262b32a['id'], $ba2d146bb5a55097['bouquets'])) {
					goto label196;
				}

				$aa15ffb0d29cf18b[$f155fef57262b32a['id']][] = $ee6d1fc5d801b43f;

				label196:
			}

			goto label200;

			label200:

			if (!isset($ba2d146bb5a55097['reencode_on_edit'])) {
				goto label470;
			}

			foreach ($Aa455b79a8de8c3f[$ee6d1fc5d801b43f] as $C082ca9ed03f473c) {
				$f6b94724e8f7682e .= '(\'channel\', ' . intval($ee6d1fc5d801b43f) . ', ' . intval($C082ca9ed03f473c) . ', ' . time() . '),';
			}

			goto label470;

			label227:

			if (!isset($ba2d146bb5a55097['c_bouquets'])) {
				goto label200;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'SET') {
				goto label172;
			}

			if ($ba2d146bb5a55097['bouquets_type'] == 'ADD') {
				goto label458;
			}

			goto label111;

			label244:

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				goto label299;

				label249:

				goto label362;

				label252:

				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;
				$E8d26871dd3cdb88 = intval(in_array($C082ca9ed03f473c, $ba2d146bb5a55097['on_demand'] ?: []));
				goto label333;

				label268:

				goto label365;

				label271:

				if (isset($d5188a7c24fae75b[$C082ca9ed03f473c])) {
					goto label296;
				}

				$C21b8218fb28a18d .= '(' . intval($ee6d1fc5d801b43f) . ', ' . intval($C082ca9ed03f473c) . ', ' . ($f6cad74ab6fb4eea ?: 'NULL') . ', ' . $E8d26871dd3cdb88 . '),';
				goto label359;

				label296:

				goto label351;

				label299:

				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label362;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);

				if (in_array($ba2d146bb5a55097['server_type'], ['ADD', 'SET'])) {
					goto label252;
				}

				if (!isset($d5188a7c24fae75b[$ee6d1fc5d801b43f][$C082ca9ed03f473c])) {
					goto label249;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;
				goto label249;

				label333:

				if ($Ec379295dc7029e6['parent'] == 'source') {
					goto label347;
				}

				$f6cad74ab6fb4eea = intval($Ec379295dc7029e6['parent']);
				goto label271;

				label347:

				$f6cad74ab6fb4eea = NULL;
				goto label271;

				label351:

				self::$db->query('UPDATE `streams_servers` SET `parent_id` = ?, `on_demand` = ? WHERE `server_stream_id` = ?;', $f6cad74ab6fb4eea, $E8d26871dd3cdb88, $d5188a7c24fae75b[$C082ca9ed03f473c]);

				label359:

				$Aa455b79a8de8c3f[$ee6d1fc5d801b43f][] = $C082ca9ed03f473c;

				label362:

				goto label268;

				label365:
			}

			if (!($ba2d146bb5a55097['server_type'] == 'SET')) {
				goto label227;
			}

			foreach ($d5188a7c24fae75b as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label401;
				}

				$ef4c4dea281208bc[$C082ca9ed03f473c][] = $ee6d1fc5d801b43f;

				if (!(($Bb672d1983256a93 = array_search($C082ca9ed03f473c, $Aa455b79a8de8c3f[$ee6d1fc5d801b43f])) !== false)) {
					goto label401;
				}

				unset($Aa455b79a8de8c3f[$ee6d1fc5d801b43f][$Bb672d1983256a93]);

				label401:
			}

			goto label227;

			label405:

			if (!isset($ba2d146bb5a55097['c_category_id'])) {
				goto label150;
			}

			$F771d40e8cf51e59 = array_map('intval', $ba2d146bb5a55097['category_id']);

			if ($ba2d146bb5a55097['category_id_type'] == 'ADD') {
				goto label431;
			}

			if (!($ba2d146bb5a55097['category_id_type'] == 'DEL')) {
				goto label146;
			}

			$Bbaf8e3ba7b2daf9 = $F330b1e93afbd525[$ee6d1fc5d801b43f];
			goto label129;

			label431:

			foreach ($F330b1e93afbd525[$ee6d1fc5d801b43f] ?: [] as $fe63f70cd74f3298) {
				if (in_array($fe63f70cd74f3298, $F771d40e8cf51e59)) {
					goto label446;
				}

				$F771d40e8cf51e59[] = $fe63f70cd74f3298;

				label446:
			}

			label448:

			$F647a429f8089f01['category_id'] = '[' . implode(',', $F771d40e8cf51e59) . ']';
			goto label150;

			label458:

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				$af051e9776cb3ebc[$f155fef57262b32a][] = $ee6d1fc5d801b43f;
			}

			label466:

			goto label200;
			goto label172;

			label470:

			foreach ($ef4c4dea281208bc as $C082ca9ed03f473c => $b4b8bc59289836c2) {
				deleteStreamsByServer($b4b8bc59289836c2, $C082ca9ed03f473c, false);
			}

			goto label482;

			label482:
		}

		goto label631;

		label485:

		D5612f049A8056a5(['action' => 'stream', 'sub' => 'stop', 'stream_ids' => array_values($dec36723d7be7c49)]);

		label494:

		return ['status' => STATUS_SUCCESS];
		goto label682;

		label498:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (self::a11aa39C8a0Bdf06($ba2d146bb5a55097)) {
			goto label6;
		}

		goto label2;

		label519:

		if (!(0 < count($dec36723d7be7c49))) {
			goto label494;
		}

		$F330b1e93afbd525 = [];
		if (!(isset($ba2d146bb5a55097['c_category_id']) && in_array($ba2d146bb5a55097['category_id_type'], ['ADD', 'DEL']))) {
			goto label28;
		}

		self::$db->query('SELECT `id`, `category_id` FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$F330b1e93afbd525[$Fb9da1713bff19ce['id']] = json_decode($Fb9da1713bff19ce['category_id'], true) ?: [];
		}

		goto label28;

		label570:

		if (empty($C21b8218fb28a18d)) {
			goto label585;
		}

		$C21b8218fb28a18d = rtrim($C21b8218fb28a18d, ',');
		self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`, `on_demand`) VALUES ' . $C21b8218fb28a18d . ';');

		label585:

		XUI::updateStreams($dec36723d7be7c49);
		goto label589;

		label589:

		if (isset($ba2d146bb5a55097['reencode_on_edit'])) {
			goto label652;
		}

		if (!isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label605;
		}

		D5612f049A8056a5(['action' => 'stream', 'sub' => 'start', 'stream_ids' => array_values($dec36723d7be7c49)]);

		label605:

		goto label494;
		goto label652;

		label607:

		if (!isset($ba2d146bb5a55097['c_transcode_profile_id'])) {
			goto label624;
		}

		$F647a429f8089f01['transcode_profile_id'] = $ba2d146bb5a55097['transcode_profile_id'];

		if (0 < $F647a429f8089f01['transcode_profile_id']) {
			goto label622;
		}

		$F647a429f8089f01['enable_transcode'] = 0;
		goto label624;
		goto label622;

		label622:

		$F647a429f8089f01['enable_transcode'] = 1;

		label624:

		$dec36723d7be7c49 = json_decode($ba2d146bb5a55097['streams'], true);
		goto label519;

		label631:

		foreach ($af051e9776cb3ebc as $b5fd3e3f0096d7f4 => $fc524b8271e0d1a3) {
			B8b65E8cb6a1dFE9('stream', $b5fd3e3f0096d7f4, $fc524b8271e0d1a3);
		}

		foreach ($aa15ffb0d29cf18b as $b5fd3e3f0096d7f4 => $A45c0679bef6bf36) {
			F8E9ABB1f656E13f('stream', $b5fd3e3f0096d7f4, $A45c0679bef6bf36);
		}

		goto label570;

		label652:

		self::$db->query('UPDATE `streams_servers` SET `pids_create_channel` = \'[]\', `cchannel_rsources` = \'[]\' WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ');');

		if (empty($f6b94724e8f7682e)) {
			goto label485;
		}

		$f6b94724e8f7682e = rtrim($f6b94724e8f7682e, ',');
		self::$db->query('INSERT INTO `queue`(`type`, `stream_id`, `server_id`, `added`) VALUES ' . $f6b94724e8f7682e . ';');
		goto label485;

		label682:
	}

	static public function C880aaAf942BB5eE($ba2d146bb5a55097)
	{
		goto label1378;

		label2:

		if (!(0 < self::$db->num_rows())) {
			goto label74;
		}

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			foreach (json_decode($Fb9da1713bff19ce['data'], true) as $b39b8fa9afa1ec53 => $F310149f6e092e85) {
				goto label25;

				label25:

				if (!isset($ecc06597b88472a7[$b39b8fa9afa1ec53])) {
					goto label67;
				}

				if (0 < count($F310149f6e092e85['langs'])) {
					goto label44;
				}

				$af9a244a6c82cb77 = '';
				goto label53;

				label44:

				goto label50;

				label47:

				goto label70;

				label50:

				$af9a244a6c82cb77 = $F310149f6e092e85['langs'][0];

				label53:

				foreach ($ecc06597b88472a7[$b39b8fa9afa1ec53] as $df6991d59f367c7e) {
					$C9cb5ff9bbf0d711[$df6991d59f367c7e] = ['channel_id' => $b39b8fa9afa1ec53, 'epg_lang' => $af9a244a6c82cb77, 'epg_id' => intval($Fb9da1713bff19ce['id'])];
				}

				label67:

				goto label47;

				label70:
			}
		}

		label74:

		goto label75;

		label75:

		$df6991d59f367c7e = 0;

		foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
			goto label233;

			label80:

			self::$db->query('SELECT `stream_source` FROM `streams` WHERE `id` = ?;', $D5d181030305a7b5);

			if (!(0 < self::$db->num_rows())) {
				goto label149;
			}

			$Ec0879f16d0cdddb = json_decode(self::$db->get_row()['stream_source'], true) ?: [];
			$Ec0879f16d0cdddb[] = $A7ca171405b19571;
			self::$db->query('UPDATE `streams` SET `stream_source` = ? WHERE `id` = ?;', json_encode($Ec0879f16d0cdddb), $D5d181030305a7b5);
			goto label145;

			label118:

			$Dd41a39d4bb950cf['id'] = $Eb22b2b5dec6756b;
			$C40c7290f7f7b51b[] = $Dd41a39d4bb950cf;

			label122:

			goto label149;

			label124:

			goto label80;

			label126:

			$D5d181030305a7b5 = $Cc94312f13005bd4[$b7319702635da556];

			label128:
			if ($D5d181030305a7b5 && !$Eb22b2b5dec6756b && isset($ba2d146bb5a55097['add_source_as_backup'])) {
				goto label124;
			}
			if ($Eb22b2b5dec6756b && isset($ba2d146bb5a55097['update_existing'])) {
				goto label286;
			}

			goto label279;

			label145:

			$C40c7290f7f7b51b[] = ['update' => true, 'id' => $D5d181030305a7b5];

			label149:

			$df6991d59f367c7e++;
			goto label277;

			label153:
			if (!empty($b7319702635da556) && isset($Cc94312f13005bd4[$b7319702635da556])) {
				goto label126;
			}
			if (!(!empty($Dd41a39d4bb950cf['channel_id']) && isset($bdf1b1e8953fa582[$Dd41a39d4bb950cf['channel_id']]))) {
				goto label174;
			}

			$D5d181030305a7b5 = $bdf1b1e8953fa582[$Dd41a39d4bb950cf['channel_id']];

			label174:

			goto label128;
			goto label126;

			label178:

			$b5a40c381c85db59 = md5(preg_replace('(^https?://)', '', str_replace(' ', '%20', $A7ca171405b19571)));

			if (!isset($e838d5a7348cd5ee[$b5a40c381c85db59])) {
				goto label199;
			}

			$Eb22b2b5dec6756b = $e838d5a7348cd5ee[$b5a40c381c85db59];

			label199:

			$b7319702635da556 = preg_replace('/[^A-Za-z0-9 ]/', '', strtolower($B654d1aff7429f67->getTitle()));
			goto label153;

			label212:

			$a2ebb817d88c810b = $C9cb5ff9bbf0d711[$df6991d59f367c7e] ?: NULL;

			if (!isset($a2ebb817d88c810b)) {
				goto label273;
			}

			$Dd41a39d4bb950cf['epg_id'] = $a2ebb817d88c810b['epg_id'];
			$Dd41a39d4bb950cf['channel_id'] = $a2ebb817d88c810b['channel_id'];

			if (empty($a2ebb817d88c810b['epg_lang'])) {
				goto label273;
			}

			goto label270;

			label233:

			$B654d1aff7429f67 = $D577b2a7889a5fb6->getExtTags()[0];

			if (!$B654d1aff7429f67) {
				goto label149;
			}

			$A7ca171405b19571 = $D577b2a7889a5fb6->getPath();
			$Dd41a39d4bb950cf = [
				'stream_source'       => [$A7ca171405b19571],
				'stream_icon'         => $B654d1aff7429f67->getAttribute('tvg-logo') ?: '',
				'stream_display_name' => $B654d1aff7429f67->getTitle() ?: '',
				'epg_id'              => NULL,
				'epg_lang'            => NULL,
				'channel_id'          => NULL
			];

			if (!$B654d1aff7429f67->getAttribute('tvg-id')) {
				goto label273;
			}

			goto label212;

			label270:

			$Dd41a39d4bb950cf['epg_lang'] = $a2ebb817d88c810b['epg_lang'];

			label273:

			$D5d181030305a7b5 = $Eb22b2b5dec6756b = NULL;
			goto label178;

			label277:

			goto label288;

			label279:

			if ($Eb22b2b5dec6756b) {
				goto label284;
			}

			$C40c7290f7f7b51b[] = $Dd41a39d4bb950cf;

			label284:

			goto label122;

			label286:

			goto label118;

			label288:
		}

		label290:

		goto label536;

		label291:
		if (!(empty($_FILES['m3u_file']['tmp_name']) || (strtolower(pathinfo(explode('?', $_FILES['m3u_file']['name'])[0], PATHINFO_EXTENSION)) != 'm3u'))) {
			goto label321;
		}

		return ['status' => STATUS_INVALID_FILE, 'data' => $ba2d146bb5a55097];

		label321:

		$e02ff34f7d898a7b = b4018DE13163B303($_FILES['m3u_file']['tmp_name']);

		if (!(0 < count($e02ff34f7d898a7b))) {
			goto label290;
		}

		goto label586;

		label336:

		$F647a429f8089f01 = E42ed0B0860Db08a(f260b7A31f021E39($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label345:
		if (isset($ba2d146bb5a55097['days_to_restart']) && preg_match('/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/', $ba2d146bb5a55097['time_to_restart'])) {
			goto label434;
		}

		$F647a429f8089f01['auto_restart'] = '';
		goto label450;
		goto label434;

		label359:

		$df6991d59f367c7e = 0;

		foreach ($e02ff34f7d898a7b as $D577b2a7889a5fb6) {
			$B654d1aff7429f67 = $D577b2a7889a5fb6->getExtTags()[0];

			if (!$B654d1aff7429f67) {
				goto label384;
			}

			if (!$B654d1aff7429f67->getAttribute('tvg-id')) {
				goto label384;
			}

			$Abcb228699a7f743 = $B654d1aff7429f67->getAttribute('tvg-id');
			$ecc06597b88472a7[$Abcb228699a7f743][] = $df6991d59f367c7e;

			label384:

			$df6991d59f367c7e++;
		}

		if (!(0 < count($ecc06597b88472a7))) {
			goto label74;
		}

		self::$db->query('SELECT `id`, `data` FROM `epg`;');
		goto label2;

		label400:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label405:

		goto label1395;

		label406:

		if (!isset($ba2d146bb5a55097['stream_source'])) {
			goto label427;
		}

		foreach ($ba2d146bb5a55097['stream_source'] as $Abcb228699a7f743 => $A7ca171405b19571) {
			if (!(0 < strlen($A7ca171405b19571))) {
				goto label425;
			}

			$Dd41a39d4bb950cf['stream_source'][] = $A7ca171405b19571;

			label425:
		}

		label427:

		$C40c7290f7f7b51b[] = $Dd41a39d4bb950cf;
		goto label470;

		label430:

		$C7b0a4584580a53d = false;
		goto label433;

		label432:

		$C7b0a4584580a53d = true;

		label433:

		goto label499;

		label434:

		$A6873c45e1480690 = [
			'days' => [],
			'at'   => $ba2d146bb5a55097['time_to_restart']
		];

		foreach ($ba2d146bb5a55097['days_to_restart'] as $Abcb228699a7f743 => $ad246beea4e2bbaa) {
			$A6873c45e1480690['days'][] = $ad246beea4e2bbaa;
		}

		$F647a429f8089f01['auto_restart'] = $A6873c45e1480690;
		goto label450;

		label450:

		foreach (['fps_restart', 'gen_timestamps', 'allow_record', 'rtmp_output', 'stream_all', 'direct_source', 'direct_proxy', 'read_native'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label460;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label462;

			label460:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label462:
		}

		if ($F647a429f8089f01['transcode_profile_id']) {
			goto label513;
		}

		$F647a429f8089f01['transcode_profile_id'] = 0;
		goto label513;

		label470:

		goto label290;

		label471:

		if (e589A4bF54A2DAd1('adv', 'import_streams')) {
			goto label478;
		}

		exit();

		label478:

		goto label291;

		label479:

		$F647a429f8089f01['channel_id'] = $ba2d146bb5a55097['epg_api_id'];
		$F647a429f8089f01['epg_id'] = 0;
		$F647a429f8089f01['epg_lang'] = NULL;

		label486:

		$Dd41a39d4bb950cf = [
			'stream_source'       => [],
			'stream_icon'         => $F647a429f8089f01['stream_icon'],
			'stream_display_name' => $F647a429f8089f01['stream_display_name'],
			'epg_id'              => $F647a429f8089f01['epg_id'],
			'epg_lang'            => $F647a429f8089f01['epg_lang'],
			'channel_id'          => $F647a429f8089f01['channel_id']
		];
		goto label406;

		label499:

		$Fa5b400768f21899 = false;
		$C40c7290f7f7b51b = [];

		if (isset($ba2d146bb5a55097['review'])) {
			goto label537;
		}

		if (isset($_FILES['m3u_file'])) {
			goto label471;
		}

		if (!$ba2d146bb5a55097['epg_api']) {
			goto label486;
		}

		goto label479;

		label513:

		if (!(0 < $F647a429f8089f01['transcode_profile_id'])) {
			goto label520;
		}

		$F647a429f8089f01['enable_transcode'] = 1;

		label520:

		if (isset($ba2d146bb5a55097['restart_on_edit'])) {
			goto label432;
		}

		goto label430;

		label524:

		if (0 < count($C40c7290f7f7b51b)) {
			goto label535;
		}

		return ['status' => STATUS_NO_SOURCES, 'data' => $ba2d146bb5a55097];
		goto label405;

		label535:

		goto label1332;

		label536:

		goto label524;

		label537:

		$Fa5b400768f21899 = true;

		foreach ($ba2d146bb5a55097['review'] as $A2fc3248dcf0b1e5) {
			goto label543;

			label543:
			if (!(!$A2fc3248dcf0b1e5['channel_id'] && $A2fc3248dcf0b1e5['tvg_id'])) {
				goto label581;
			}

			$a2ebb817d88c810b = d7d50845A0D5902F($A2fc3248dcf0b1e5['tvg_id']);

			if (!isset($a2ebb817d88c810b)) {
				goto label581;
			}

			$A2fc3248dcf0b1e5['epg_id'] = $a2ebb817d88c810b['epg_id'];
			$A2fc3248dcf0b1e5['channel_id'] = $a2ebb817d88c810b['channel_id'];
			goto label574;

			label570:

			$C40c7290f7f7b51b[] = $A2fc3248dcf0b1e5;
			goto label583;

			label574:

			if (empty($a2ebb817d88c810b['epg_lang'])) {
				goto label581;
			}

			$A2fc3248dcf0b1e5['epg_lang'] = $a2ebb817d88c810b['epg_lang'];

			label581:

			goto label570;

			label583:
		}

		goto label524;

		label586:

		$bdf1b1e8953fa582 = $e838d5a7348cd5ee = $Cc94312f13005bd4 = [];
		self::$db->query('SELECT `id`, `stream_display_name`, `stream_source`, `channel_id` FROM `streams` WHERE `type` = 1;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$b7319702635da556 = preg_replace('/[^A-Za-z0-9 ]/', '', strtolower($Fb9da1713bff19ce['stream_display_name']));

			if (empty($b7319702635da556)) {
				goto label615;
			}

			$Cc94312f13005bd4[$b7319702635da556] = $Fb9da1713bff19ce['id'];

			label615:

			$bdf1b1e8953fa582[$Fb9da1713bff19ce['channel_id']] = $Fb9da1713bff19ce['id'];

			foreach (json_decode($Fb9da1713bff19ce['stream_source'], true) as $fd51b5505224fc7c) {
				if (empty($fd51b5505224fc7c)) {
					goto label647;
				}

				$e838d5a7348cd5ee[md5(preg_replace('(^https?://)', '', str_replace(' ', '%20', $fd51b5505224fc7c)))] = $Fb9da1713bff19ce['id'];

				label647:
			}
		}

		$C9cb5ff9bbf0d711 = $ecc06597b88472a7 = [];
		goto label359;

		label654:

		$F647a429f8089f01 = C73ED8d0B70cE12f('streams', $ba2d146bb5a55097);
		$F647a429f8089f01['type'] = 1;
		$F647a429f8089f01['added'] = time();
		unset($F647a429f8089f01['id']);
		goto label1323;

		label667:

		foreach (json_decode($ba2d146bb5a55097['category_create_list'], true) as $Dbcac322b4274e46) {
			$Fac87d38f7786df0 = c483A3A59265139E(['category_type' => 'live', 'category_name' => $Dbcac322b4274e46, 'parent_id' => 0, 'cat_order' => 99, 'is_adult' => 0]);
			$B91645b8411dc88c = 'INSERT INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label706;
			}

			$fe63f70cd74f3298 = self::$db->last_insert_id();
			$Af54906d51bb2840[$Dbcac322b4274e46] = $fe63f70cd74f3298;

			label706:
		}

		label708:

		foreach ($C40c7290f7f7b51b as $A2fc3248dcf0b1e5) {
			goto label1222;

			label712:

			unset($A2fc3248dcf0b1e5['bouquets']);

			label713:

			foreach (array_keys($A2fc3248dcf0b1e5) as $Bb672d1983256a93) {
				$Dd41a39d4bb950cf[$Bb672d1983256a93] = $A2fc3248dcf0b1e5[$Bb672d1983256a93];
			}
			if (!(!isset($ba2d146bb5a55097['edit']) && !isset($A2fc3248dcf0b1e5['id']))) {
				goto label787;
			}

			goto label783;

			label735:
			if (!(($F647a429f8089f01['epg_id'] == 0) && !empty($F647a429f8089f01['channel_id']))) {
				goto label750;
			}

			processEPGAPI($E5b50d60c471d7d6, $F647a429f8089f01['channel_id']);

			label750:

			XUI::caC325153A658c37($E5b50d60c471d7d6);

			label753:

			goto label1299;

			label755:

			self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES(?, 1, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['user_agent']);

			label762:
			if (!(isset($ba2d146bb5a55097['http_proxy']) && (0 < strlen($ba2d146bb5a55097['http_proxy'])))) {
				goto label781;
			}

			self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES(?, 2, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['http_proxy']);

			label781:

			goto label1182;

			label783:

			$Dd41a39d4bb950cf['order'] = AdD0b2c53B2714a1();

			label787:

			$Dd41a39d4bb950cf['title_sync'] = $ba2d146bb5a55097['title_sync'] ?: NULL;

			if (!$Dd41a39d4bb950cf['title_sync']) {
				goto label833;
			}

			list($d86524ca574c2874, $e91152e6386fa135) = array_map('intval', explode('_', $Dd41a39d4bb950cf['title_sync']));
			goto label813;

			label813:

			self::$db->query('SELECT `stream_display_name` FROM `providers_streams` WHERE `provider_id` = ? AND `stream_id` = ?;', $d86524ca574c2874, $e91152e6386fa135);

			if (!(self::$db->num_rows() == 1)) {
				goto label833;
			}

			$Dd41a39d4bb950cf['stream_display_name'] = self::$db->get_row()['stream_display_name'];

			label833:

			goto label1013;

			label835:

			$E5b50d60c471d7d6 = self::$db->last_insert_id();
			$d5188a7c24fae75b = [];
			if (!(isset($ba2d146bb5a55097['edit']) || isset($A2fc3248dcf0b1e5['id']))) {
				goto label921;
			}

			self::$db->query('SELECT `server_stream_id`, `server_id` FROM `streams_servers` WHERE `stream_id` = ?;', $E5b50d60c471d7d6);

			foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
				$d5188a7c24fae75b[intval($Fb9da1713bff19ce['server_id'])] = intval($Fb9da1713bff19ce['server_stream_id']);
			}

			goto label921;

			label872:

			foreach ($Af54906d51bb2840 as $Dbcac322b4274e46 => $Abcb228699a7f743) {
				$b62d6460eb33ea07->query('DELETE FROM `streams_categories` WHERE `id` = ?;', $Abcb228699a7f743);
			}

			return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
			goto label753;

			label888:

			goto label835;

			label890:
			if (!(isset($ba2d146bb5a55097['edit']) || isset($A2fc3248dcf0b1e5['id']))) {
				goto label919;
			}

			foreach (F964b9222b35addD() as $f155fef57262b32a) {
				if (in_array($f155fef57262b32a['id'], $Df5cd7b5dc4cc10c)) {
					goto label917;
				}

				f8e9aBb1f656E13f('stream', $f155fef57262b32a['id'], $E5b50d60c471d7d6);

				label917:
			}

			label919:

			goto label735;

			label921:

			$F698c2c6c58adaf7 = [];
			$E23b1ca1f188e5ac = json_decode($ba2d146bb5a55097['server_tree_data'], true);

			foreach ($E23b1ca1f188e5ac as $Ec379295dc7029e6) {
				goto label945;

				label933:

				$f6cad74ab6fb4eea = intval($Ec379295dc7029e6['parent']);
				goto label942;

				label941:

				$f6cad74ab6fb4eea = NULL;

				label942:

				goto label979;

				label945:

				if (!($Ec379295dc7029e6['parent'] != '#')) {
					goto label1006;
				}

				$C082ca9ed03f473c = intval($Ec379295dc7029e6['id']);
				$F698c2c6c58adaf7[] = $C082ca9ed03f473c;
				$E8d26871dd3cdb88 = intval(in_array($C082ca9ed03f473c, $ba2d146bb5a55097['on_demand'] ?: []));

				if ($Ec379295dc7029e6['parent'] == 'source') {
					goto label941;
				}

				goto label933;

				label979:

				if (isset($d5188a7c24fae75b[$C082ca9ed03f473c])) {
					goto label995;
				}

				self::$db->query('INSERT INTO `streams_servers`(`stream_id`, `server_id`, `parent_id`, `on_demand`) VALUES(?, ?, ?, ?);', $E5b50d60c471d7d6, $C082ca9ed03f473c, $f6cad74ab6fb4eea, $E8d26871dd3cdb88);
				goto label1006;

				label995:

				self::$db->query('UPDATE `streams_servers` SET `parent_id` = ?, `on_demand` = ? WHERE `server_stream_id` = ?;', $f6cad74ab6fb4eea, $E8d26871dd3cdb88, $d5188a7c24fae75b[$C082ca9ed03f473c]);
				goto label1006;

				label1006:

				goto label1009;

				label1009:
			}

			goto label1238;

			label1013:

			$Fac87d38f7786df0 = c483a3A59265139E($Dd41a39d4bb950cf);
			$B91645b8411dc88c = 'REPLACE INTO `streams`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label888;
			}

			foreach ($e6b00ffbf54a345a as $f155fef57262b32a => $Abcb228699a7f743) {
				$b62d6460eb33ea07->query('DELETE FROM `bouquets` WHERE `id` = ?;', $Abcb228699a7f743);
			}

			goto label872;

			label1044:

			if (!$C7b0a4584580a53d) {
				goto label1055;
			}

			D5612f049A8056a5([
				'action'     => 'stream',
				'sub'        => 'start',
				'stream_ids' => [$E5b50d60c471d7d6]
			]);

			label1055:

			foreach ($Df5cd7b5dc4cc10c as $f155fef57262b32a) {
				B8b65E8cb6a1Dfe9('stream', $f155fef57262b32a, $E5b50d60c471d7d6);
			}

			goto label890;

			label1066:

			$F771d40e8cf51e59 = [];

			foreach ($ba2d146bb5a55097['category_id'] as $Dbcac322b4274e46) {
				if (isset($Af54906d51bb2840[$Dbcac322b4274e46])) {
					goto label1091;
				}

				if (!is_numeric($Dbcac322b4274e46)) {
					goto label1088;
				}

				$F771d40e8cf51e59[] = intval($Dbcac322b4274e46);

				label1088:

				goto label1094;

				label1091:

				$F771d40e8cf51e59[] = $Af54906d51bb2840[$Dbcac322b4274e46];

				label1094:
			}

			$Dd41a39d4bb950cf['category_id'] = '[' . implode(',', array_map('intval', $F771d40e8cf51e59)) . ']';
			goto label1110;

			label1110:
			if (isset($ba2d146bb5a55097['adaptive_link']) && (0 < count($ba2d146bb5a55097['adaptive_link']))) {
				goto label1125;
			}

			$Dd41a39d4bb950cf['adaptive_link'] = NULL;
			goto label1276;

			label1125:

			$Dd41a39d4bb950cf['adaptive_link'] = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['adaptive_link'])) . ']';
			goto label1276;

			label1140:

			$A2fc3248dcf0b1e5['stream_icon'] = XUI::CcCEe53491f4aF9C($A2fc3248dcf0b1e5['stream_icon'], 1);

			label1147:

			if ($Fa5b400768f21899) {
				goto label1278;
			}

			$Df5cd7b5dc4cc10c = [];

			foreach ($ba2d146bb5a55097['bouquets'] as $f155fef57262b32a) {
				if (isset($e6b00ffbf54a345a[$f155fef57262b32a])) {
					goto label1175;
				}

				if (!is_numeric($f155fef57262b32a)) {
					goto label1172;
				}

				$Df5cd7b5dc4cc10c[] = intval($f155fef57262b32a);

				label1172:

				goto label1178;

				label1175:

				$Df5cd7b5dc4cc10c[] = $e6b00ffbf54a345a[$f155fef57262b32a];

				label1178:
			}

			goto label1066;

			label1182:
			if (!(isset($ba2d146bb5a55097['cookie']) && (0 < strlen($ba2d146bb5a55097['cookie'])))) {
				goto label1201;
			}

			self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES(?, 17, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['cookie']);

			label1201:
			if (!(isset($ba2d146bb5a55097['headers']) && (0 < strlen($ba2d146bb5a55097['headers'])))) {
				goto label1044;
			}

			self::$db->query('INSERT INTO `streams_options`(`stream_id`, `argument_id`, `value`) VALUES(?, 19, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['headers']);
			goto label1044;

			label1222:

			if (!$A2fc3248dcf0b1e5['update']) {
				goto label1229;
			}

			goto label1299;

			label1229:

			$Dd41a39d4bb950cf = $F647a429f8089f01;

			if (!self::$rSettings['download_images']) {
				goto label1147;
			}

			goto label1140;

			label1238:

			foreach ($d5188a7c24fae75b as $C082ca9ed03f473c => $e3d8d6e5569e547b) {
				if (in_array($C082ca9ed03f473c, $F698c2c6c58adaf7)) {
					goto label1255;
				}

				fc84E25737908cb5($E5b50d60c471d7d6, $C082ca9ed03f473c, false, false);

				label1255:
			}

			self::$db->query('DELETE FROM `streams_options` WHERE `stream_id` = ?;', $E5b50d60c471d7d6);
			if (!(isset($ba2d146bb5a55097['user_agent']) && (0 < strlen($ba2d146bb5a55097['user_agent'])))) {
				goto label762;
			}

			goto label755;

			label1276:

			goto label713;

			label1278:

			$Dd41a39d4bb950cf['category_id'] = '[' . implode(',', array_map('intval', $A2fc3248dcf0b1e5['category_id'])) . ']';
			$Df5cd7b5dc4cc10c = array_map('intval', $A2fc3248dcf0b1e5['bouquets']);
			goto label712;

			label1299:

			goto label1301;

			label1301:
		}

		goto label400;

		label1304:

		ini_set('max_execution_time', 0);
		ini_set('default_socket_timeout', 0);

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label1324;
		}

		if (e589A4bF54A2DAd1('adv', 'add_stream')) {
			goto label654;
		}

		exit();
		goto label654;

		label1323:

		goto label345;

		label1324:

		if (E589A4bF54a2Dad1('adv', 'edit_stream')) {
			goto label1331;
		}

		exit();

		label1331:

		goto label336;

		label1332:

		$e6b00ffbf54a345a = [];
		$Af54906d51bb2840 = [];

		if ($Fa5b400768f21899) {
			goto label708;
		}

		foreach (json_decode($ba2d146bb5a55097['bouquet_create_list'], true) as $f155fef57262b32a) {
			$Fac87d38f7786df0 = C483A3A59265139e([
				'bouquet_name'     => $f155fef57262b32a,
				'bouquet_channels' => [],
				'bouquet_movies'   => [],
				'bouquet_series'   => [],
				'bouquet_radios'   => []
			]);
			$B91645b8411dc88c = 'INSERT INTO `bouquets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

			if (!self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
				goto label1375;
			}

			$b5fd3e3f0096d7f4 = self::$db->last_insert_id();
			$e6b00ffbf54a345a[$f155fef57262b32a] = $b5fd3e3f0096d7f4;

			label1375:
		}

		goto label667;

		label1378:

		if (self::A11aa39C8a0Bdf06($ba2d146bb5a55097)) {
			goto label1387;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label1387:

		set_time_limit(0);
		ini_set('mysql.connect_timeout', 0);
		goto label1304;

		label1395:
	}

	static public function Ae31Fe945C56D5df($ba2d146bb5a55097)
	{
		if (self::A11aa39c8A0BDF06($ba2d146bb5a55097)) {
			goto label10;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label10:

		$B255c244accf2c2b = json_decode($ba2d146bb5a55097['categories'], true);

		if (!(0 < count($B255c244accf2c2b))) {
			goto label39;
		}

		foreach ($B255c244accf2c2b as $a2a53f18f4f95c8b => $dc0d954a900ee1bc) {
			self::$db->query('UPDATE `streams_categories` SET `cat_order` = ?, `parent_id` = 0 WHERE `id` = ?;', intval($a2a53f18f4f95c8b) + 1, $dc0d954a900ee1bc['id']);
		}

		label39:

		return ['status' => STATUS_SUCCESS];
	}

	static public function orderServers($ba2d146bb5a55097)
	{
		if (self::a11AA39C8A0bDF06($ba2d146bb5a55097)) {
			goto label10;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label10:

		$E56fbbd83ebbff6f = json_decode($ba2d146bb5a55097['server_order'], true);

		if (!(0 < count($E56fbbd83ebbff6f))) {
			goto label39;
		}

		foreach ($E56fbbd83ebbff6f as $a2a53f18f4f95c8b => $be3c16da5b7df280) {
			self::$db->query('UPDATE `servers` SET `order` = ? WHERE `id` = ?;', intval($a2a53f18f4f95c8b) + 1, $be3c16da5b7df280['id']);
		}

		label39:

		return ['status' => STATUS_SUCCESS];
	}

	static public function EF92c3eBB0e25473($ba2d146bb5a55097)
	{
		goto label61;

		label2:

		$F647a429f8089f01['is_adult'] = 1;

		label4:

		$Fac87d38f7786df0 = c483A3A59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `streams_categories`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label44;
		}

		goto label39;

		label24:

		$F647a429f8089f01['cat_order'] = 99;
		unset($F647a429f8089f01['id']);
		goto label54;

		label28:

		$F647a429f8089f01 = e42eD0B0860db08a(D1132F737572929c($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);
		goto label54;

		label38:

		goto label79;

		label39:

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label38;

		label44:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];
		goto label38;

		label54:

		if (isset($ba2d146bb5a55097['is_adult'])) {
			goto label60;
		}

		$F647a429f8089f01['is_adult'] = 0;
		goto label4;

		label60:

		goto label2;

		label61:

		if (self::A11aa39C8A0bDf06($ba2d146bb5a55097)) {
			goto label70;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label70:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label28;
		}

		$F647a429f8089f01 = C73ED8D0B70cE12f('streams_categories', $ba2d146bb5a55097);
		goto label24;

		label79:
	}

	static public function e727614f4d646885($ba2d146bb5a55097)
	{
		goto label38;

		label2:

		self::$db->query('UPDATE `streams_servers` SET `server_id` = ? WHERE `server_id` = ?;', $Ef8b34475653a94c, $fd51b5505224fc7c);

		label8:

		return ['status' => STATUS_SUCCESS];
		goto label135;

		label12:

		$Ef8b34475653a94c = intval($ba2d146bb5a55097['replacement_server']);
		if (!((0 < $fd51b5505224fc7c) && (0 < $Ef8b34475653a94c) && ($fd51b5505224fc7c != $Ef8b34475653a94c))) {
			goto label8;
		}

		$E040f3dc6e7f2c7b = [];

		if ($A7d54b094ae83c95 == 0) {
			goto label117;
		}

		self::$db->query('SELECT `streams_servers`.`stream_id` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE `streams_servers`.`server_id` = ? AND `streams`.`type` = ?;', $Ef8b34475653a94c, $A7d54b094ae83c95);
		goto label103;

		label38:

		if (self::a11Aa39c8A0BdF06($ba2d146bb5a55097)) {
			goto label47;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label47:

		$A7d54b094ae83c95 = intval($ba2d146bb5a55097['content_type']);
		$fd51b5505224fc7c = intval($ba2d146bb5a55097['source_server']);
		goto label12;

		label58:

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$E040f3dc6e7f2c7b[] = intval($Fb9da1713bff19ce['stream_id']);
		}

		label71:

		self::$db->query('SELECT `stream_id` FROM `streams_servers` WHERE `server_id` = ?;', $fd51b5505224fc7c);

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			if (!in_array(intval($Fb9da1713bff19ce['stream_id']), $E040f3dc6e7f2c7b)) {
				goto label100;
			}

			self::$db->query('DELETE FROM `streams_servers` WHERE `stream_id` = ? AND `server_id` = ?;', $Fb9da1713bff19ce['stream_id'], $fd51b5505224fc7c);

			label100:
		}

		goto label123;

		label103:

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$E040f3dc6e7f2c7b[] = intval($Fb9da1713bff19ce['stream_id']);
		}

		goto label71;

		label117:

		self::$db->query('SELECT `stream_id` FROM `streams_servers` WHERE `server_id` = ?;', $Ef8b34475653a94c);
		goto label58;

		label123:

		if ($A7d54b094ae83c95 == 0) {
			goto label134;
		}

		self::$db->query('UPDATE `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` SET `streams_servers`.`server_id` = ? WHERE `streams_servers`.`server_id` = ? AND `streams`.`type` = ?;', $Ef8b34475653a94c, $fd51b5505224fc7c, $A7d54b094ae83c95);
		goto label8;

		label134:

		goto label2;

		label135:
	}

	static public function D76B22C5D89F4917($ba2d146bb5a55097)
	{
		if (self::a11Aa39C8a0BDF06($ba2d146bb5a55097)) {
			goto label10;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label10:

		$eca3e5a652234b1d = str_replace('/', '\\/', $ba2d146bb5a55097['old_dns']);
		$f5e711b3b2559b1e = str_replace('/', '\\/', $ba2d146bb5a55097['new_dns']);
		self::$db->query('UPDATE `streams` SET `stream_source` = REPLACE(`stream_source`, ?, ?);', $eca3e5a652234b1d, $f5e711b3b2559b1e);
		return ['status' => STATUS_SUCCESS];
	}

	static public function f29b6959409fc688($ba2d146bb5a55097)
	{
		goto label133;

		label2:

		goto label175;

		label3:

		if ($e980e66d0f7b6829) {
			goto label10;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label40;

		label10:

		if (intval(self::$rUserInfo['id']) == intval($e980e66d0f7b6829['member_id'])) {
			goto label105;
		}

		goto label87;

		label23:

		self::$db->query('INSERT INTO `tickets_replies`(`ticket_id`, `admin_reply`, `message`, `date`) VALUES(?, 0, ?, ?);', $ba2d146bb5a55097['respond'], $ba2d146bb5a55097['message'], time());

		label34:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $ba2d146bb5a55097['respond']]
		];

		label40:

		goto label2;
		goto label151;

		label42:

		unset($F647a429f8089f01['id']);
		goto label53;

		label44:

		$F647a429f8089f01 = e42ed0b0860db08a(Def05eCDB21B0A50($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label53:

		goto label54;

		label54:
		if (!(((strlen($ba2d146bb5a55097['title']) == 0) && !isset($ba2d146bb5a55097['respond'])) || (strlen($ba2d146bb5a55097['message']) == 0))) {
			goto label77;
		}

		return ['status' => STATUS_INVALID_DATA, 'data' => $ba2d146bb5a55097];

		label77:

		if (!isset($ba2d146bb5a55097['respond'])) {
			goto label151;
		}

		$e980e66d0f7b6829 = DeF05EcDB21b0a50($ba2d146bb5a55097['respond']);
		goto label3;

		label87:

		self::$db->query('UPDATE `tickets` SET `admin_read` = 0, `user_read` = 0 WHERE `id` = ?;', $ba2d146bb5a55097['respond']);
		self::$db->query('INSERT INTO `tickets_replies`(`ticket_id`, `admin_reply`, `message`, `date`) VALUES(?, 1, ?, ?);', $ba2d146bb5a55097['respond'], $ba2d146bb5a55097['message'], time());
		goto label34;

		label105:

		self::$db->query('UPDATE `tickets` SET `admin_read` = 0, `user_read` = 1 WHERE `id` = ?;', $ba2d146bb5a55097['respond']);
		goto label23;

		label112:

		goto label2;

		label113:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		self::$db->query('INSERT INTO `tickets_replies`(`ticket_id`, `admin_reply`, `message`, `date`) VALUES(?, 0, ?, ?);', $E5b50d60c471d7d6, $ba2d146bb5a55097['message'], time());
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];
		goto label2;

		label133:

		if (self::a11aa39c8A0BDf06($ba2d146bb5a55097)) {
			goto label142;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label142:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label44;
		}

		$F647a429f8089f01 = c73Ed8d0B70Ce12f('tickets', $ba2d146bb5a55097);
		goto label42;

		label151:

		$Fac87d38f7786df0 = c483a3a59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `tickets`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label113;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label112;

		label175:
	}

	static public function D73a37B0d9b54604($ba2d146bb5a55097)
	{
		goto label58;

		label2:

		if (isset($ba2d146bb5a55097['exact_match'])) {
			goto label8;
		}

		$F647a429f8089f01['exact_match'] = false;
		goto label34;

		label8:

		$F647a429f8089f01['exact_match'] = true;
		goto label34;

		label11:

		unset($F647a429f8089f01['id']);
		goto label22;

		label13:

		$F647a429f8089f01 = e42ed0b0860db08A(B603bF039AbA700F($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label22:

		goto label2;

		label23:

		goto label33;

		label24:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label33:

		goto label76;

		label34:

		$Fac87d38f7786df0 = c483A3a59265139e($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `blocked_uas`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label24;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label23;

		label58:

		if (self::a11aa39c8A0bDf06($ba2d146bb5a55097)) {
			goto label67;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label67:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label13;
		}

		$F647a429f8089f01 = c73ED8d0B70cE12f('blocked_uas', $ba2d146bb5a55097);
		goto label11;

		label76:
	}

	static public function processPlexSync($ba2d146bb5a55097)
	{
		goto label155;

		label2:

		$F647a429f8089f01['direct_proxy'] = 0;
		goto label7;

		label5:

		$F647a429f8089f01['direct_proxy'] = 1;

		label7:

		goto label173;

		label8:

		$F647a429f8089f01['directory'] = $ba2d146bb5a55097['library_id'];

		if (is_array($ba2d146bb5a55097['server_id'])) {
			goto label68;
		}

		$F647a429f8089f01['server_id'] = intval($ba2d146bb5a55097['server_id']);
		$F647a429f8089f01['server_add'] = NULL;
		goto label90;
		goto label68;

		label27:

		$F647a429f8089f01['plex_ip'] = $ba2d146bb5a55097['plex_ip'];
		$F647a429f8089f01['plex_port'] = $ba2d146bb5a55097['plex_port'];
		$F647a429f8089f01['plex_libraries'] = $ba2d146bb5a55097['libraries'];
		$F647a429f8089f01['plex_username'] = $ba2d146bb5a55097['username'];

		if (isset($ba2d146bb5a55097['direct_proxy'])) {
			goto label5;
		}

		goto label2;

		label43:

		$Fac87d38f7786df0 = C483a3A59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `watch_folders`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label106;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label115;
		goto label106;

		label68:

		$Bcf70cba56392975 = $ba2d146bb5a55097['server_id'];
		$F647a429f8089f01['server_id'] = intval(array_shift($Bcf70cba56392975));
		$F647a429f8089f01['server_add'] = '[' . implode(',', array_map('intval', $Bcf70cba56392975)) . ']';

		label90:

		goto label27;

		label91:

		if (!(0 < self::$db->get_row()['count'])) {
			goto label103;
		}

		return ['status' => STATUS_EXISTS_DIR, 'data' => $ba2d146bb5a55097];

		label103:

		$F647a429f8089f01['type'] = 'plex';
		goto label8;

		label106:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label115:

		goto label247;

		label116:

		unset($F647a429f8089f01['id']);
		goto label127;

		label118:

		$F647a429f8089f01 = e42Ed0B0860DB08A(D8ec9843FC5457dF($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label127:

		goto label128;

		label128:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label142;
		}

		self::$db->query('SELECT COUNT(*) AS `count` FROM `watch_folders` WHERE `directory` = ? AND `server_id` = ? AND `plex_ip` = ?;', $ba2d146bb5a55097['library_id'], $ba2d146bb5a55097['server_id'], $ba2d146bb5a55097['plex_ip']);
		goto label91;

		label142:

		self::$db->query('SELECT COUNT(*) AS `count` FROM `watch_folders` WHERE `directory` = ? AND `server_id` = ? AND `plex_ip` = ? AND `id` <> ?;', $ba2d146bb5a55097['library_id'], $ba2d146bb5a55097['server_id'], $ba2d146bb5a55097['plex_ip'], $F647a429f8089f01['id']);
		goto label91;

		label155:

		if (self::a11AA39C8a0BDF06($ba2d146bb5a55097)) {
			goto label164;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label164:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label118;
		}

		$F647a429f8089f01 = C73ED8D0b70ce12F('watch_folders', $ba2d146bb5a55097);
		goto label116;

		label173:

		if (!(0 < strlen($ba2d146bb5a55097['password']))) {
			goto label184;
		}

		$F647a429f8089f01['plex_password'] = $ba2d146bb5a55097['password'];

		label184:

		foreach (['remove_subtitles', 'check_tmdb', 'store_categories', 'scan_missing', 'auto_upgrade', 'read_native', 'movie_symlink', 'auto_encode', 'active'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label194;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label196;

			label194:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label196:
		}

		goto label199;

		label199:

		$F647a429f8089f01['category_id'] = intval($ba2d146bb5a55097['override_category']);
		$F647a429f8089f01['fb_category_id'] = intval($ba2d146bb5a55097['fallback_category']);
		$F647a429f8089f01['bouquets'] = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['override_bouquets'])) . ']';
		$F647a429f8089f01['fb_bouquets'] = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['fallback_bouquets'])) . ']';
		$F647a429f8089f01['target_container'] = ($ba2d146bb5a55097['target_container'] == 'auto' ? NULL : $ba2d146bb5a55097['target_container']);
		goto label43;

		label247:
	}

	static public function f2A688c54Caf9c4a($ba2d146bb5a55097)
	{
		goto label46;

		label2:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label11:

		goto label211;

		label12:

		goto label19;

		label13:

		$F647a429f8089f01['allowed_extensions'] = json_encode($ba2d146bb5a55097['allowed_extensions']);

		label19:

		$F647a429f8089f01['target_container'] = ($ba2d146bb5a55097['target_container'] == 'auto' ? NULL : $ba2d146bb5a55097['target_container']);
		goto label122;

		label29:

		$E111d28e9acc50b9 = $ba2d146bb5a55097['selected_path'];
		if ((0 < strlen($E111d28e9acc50b9)) && ($E111d28e9acc50b9 != '/')) {
			goto label45;
		}

		return ['status' => STATUS_INVALID_DIR, 'data' => $ba2d146bb5a55097];
		goto label11;

		label45:

		goto label64;

		label46:

		if (self::A11aa39c8a0BdF06($ba2d146bb5a55097)) {
			goto label55;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label55:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label91;
		}

		$F647a429f8089f01 = C73Ed8d0B70cE12F('watch_folders', $ba2d146bb5a55097);
		goto label89;

		label64:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label77;
		}

		self::$db->query('SELECT COUNT(*) AS `count` FROM `watch_folders` WHERE `directory` = ? AND `server_id` = ? AND `type` = ?;', $E111d28e9acc50b9, $F647a429f8089f01['server_id'], $ba2d146bb5a55097['folder_type']);
		goto label157;

		label77:

		self::$db->query('SELECT COUNT(*) AS `count` FROM `watch_folders` WHERE `directory` = ? AND `server_id` = ? AND `type` = ? AND `id` <> ?;', $E111d28e9acc50b9, $F647a429f8089f01['server_id'], $ba2d146bb5a55097['folder_type'], $F647a429f8089f01['id']);
		goto label157;

		label89:

		unset($F647a429f8089f01['id']);
		goto label100;

		label91:

		$F647a429f8089f01 = E42ED0b0860Db08A(d8ec9843Fc5457DF($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label100:

		goto label29;

		label101:

		$B91645b8411dc88c = 'REPLACE INTO `watch_folders`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label121;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label11;

		label121:

		goto label2;

		label122:

		$F647a429f8089f01['category_id'] = intval($ba2d146bb5a55097['category_id_' . $ba2d146bb5a55097['folder_type']]);
		$F647a429f8089f01['fb_category_id'] = intval($ba2d146bb5a55097['fb_category_id_' . $ba2d146bb5a55097['folder_type']]);

		foreach (['remove_subtitles', 'duplicate_tmdb', 'extract_metadata', 'fallback_title', 'disable_tmdb', 'ignore_no_match', 'auto_subtitles', 'auto_upgrade', 'read_native', 'movie_symlink', 'auto_encode', 'ffprobe_input', 'active'] as $Bb672d1983256a93) {
			if (isset($ba2d146bb5a55097[$Bb672d1983256a93])) {
				goto label148;
			}

			$F647a429f8089f01[$Bb672d1983256a93] = 0;
			goto label150;

			label148:

			$F647a429f8089f01[$Bb672d1983256a93] = 1;

			label150:
		}

		$Fac87d38f7786df0 = c483a3A59265139e($F647a429f8089f01);
		goto label101;

		label157:

		if (!(0 < self::$db->get_row()['count'])) {
			goto label169;
		}

		return ['status' => STATUS_EXISTS_DIR, 'data' => $ba2d146bb5a55097];

		label169:

		$F647a429f8089f01['type'] = $ba2d146bb5a55097['folder_type'];
		goto label173;

		label173:

		$F647a429f8089f01['directory'] = $E111d28e9acc50b9;
		$F647a429f8089f01['bouquets'] = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['bouquets'])) . ']';
		$F647a429f8089f01['fb_bouquets'] = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['fb_bouquets'])) . ']';

		if (0 < count($ba2d146bb5a55097['allowed_extensions'])) {
			goto label13;
		}

		$F647a429f8089f01['allowed_extensions'] = '[]';
		goto label12;

		label211:
	}

	static public function db89160f60B8A927($ba2d146bb5a55097)
	{
		goto label211;

		label2:

		if (isset($ba2d146bb5a55097['no_expire'])) {
			goto label18;
		}

		try {
			$e36d2f5d3c9f0972 = new DateTime($ba2d146bb5a55097['exp_date']);
			$F647a429f8089f01['exp_date'] = $e36d2f5d3c9f0972->format('U');
		}
		catch (Exception $E0f0519e12b13b6b) {
		}

		goto label21;

		label18:

		$F647a429f8089f01['exp_date'] = NULL;
		goto label21;

		label21:

		if (!isset($ba2d146bb5a55097['c_access_output'])) {
			goto label91;
		}

		$Cd826a7439b979ee = [];

		foreach ($ba2d146bb5a55097['access_output'] as $D7c990ef7ca44a60) {
			$Cd826a7439b979ee[] = $D7c990ef7ca44a60;
		}

		goto label79;

		label34:

		foreach (json_decode($ba2d146bb5a55097['bouquets_selected'], true) as $f155fef57262b32a) {
			if (!is_numeric($f155fef57262b32a)) {
				goto label51;
			}

			$F647a429f8089f01['bouquet'][] = $f155fef57262b32a;

			label51:
		}

		$F647a429f8089f01['bouquet'] = sortArrayByArray($F647a429f8089f01['bouquet'], array_keys(bcA35e1d9e85240c()));
		$F647a429f8089f01['bouquet'] = '[' . implode(',', array_map('intval', $F647a429f8089f01['bouquet'])) . ']';

		label78:

		goto label186;

		label79:

		$F647a429f8089f01['allowed_outputs'] = '[' . implode(',', array_map('intval', $Cd826a7439b979ee)) . ']';

		label91:

		if (!isset($ba2d146bb5a55097['c_bouquets'])) {
			goto label78;
		}

		$F647a429f8089f01['bouquet'] = [];
		goto label34;

		label98:

		$F647a429f8089f01['reseller_notes'] = $ba2d146bb5a55097['reseller_notes'];

		label101:

		if (!isset($ba2d146bb5a55097['c_forced_country'])) {
			goto label108;
		}

		$F647a429f8089f01['forced_country'] = $ba2d146bb5a55097['forced_country'];

		label108:

		goto label109;

		label109:

		if (!isset($ba2d146bb5a55097['c_member_id'])) {
			goto label119;
		}

		$F647a429f8089f01['member_id'] = intval($ba2d146bb5a55097['member_id']);

		label119:

		if (!isset($ba2d146bb5a55097['c_force_server_id'])) {
			goto label159;
		}

		$F647a429f8089f01['force_server_id'] = intval($ba2d146bb5a55097['force_server_id']);
		goto label159;

		label130:

		$Fac87d38f7786df0 = c483A3a59265139E($F647a429f8089f01);

		if (!(0 < count($Fac87d38f7786df0['data']))) {
			goto label158;
		}

		$B91645b8411dc88c = 'UPDATE `lines` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` IN (' . implode(',', $d7bd0890458933bb) . ');';
		self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

		label158:

		goto label242;

		label159:

		if (!isset($ba2d146bb5a55097['c_max_connections'])) {
			goto label169;
		}

		$F647a429f8089f01['max_connections'] = intval($ba2d146bb5a55097['max_connections']);

		label169:

		if (!isset($ba2d146bb5a55097['c_exp_date'])) {
			goto label21;
		}

		goto label2;

		label174:

		if (!isset($ba2d146bb5a55097['c_admin_notes'])) {
			goto label181;
		}

		$F647a429f8089f01['admin_notes'] = $ba2d146bb5a55097['admin_notes'];

		label181:

		if (!isset($ba2d146bb5a55097['c_reseller_notes'])) {
			goto label101;
		}

		goto label98;

		label186:

		if (!isset($ba2d146bb5a55097['reset_isp_lock'])) {
			goto label194;
		}

		$F647a429f8089f01['as_number'] = $F647a429f8089f01['isp_desc'] = '';

		label194:

		$d7bd0890458933bb = confirmIDs(json_decode($ba2d146bb5a55097['users_selected'], true));

		if (!(0 < count($d7bd0890458933bb))) {
			goto label266;
		}

		goto label130;

		label211:

		if (self::A11Aa39C8a0BdF06($ba2d146bb5a55097)) {
			goto label220;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label220:

		$F647a429f8089f01 = [];

		foreach (['is_stalker', 'is_isplock', 'is_restreamer', 'is_trial'] as $B4a603c2a57d3acf) {
			if (!isset($ba2d146bb5a55097['c_' . $B4a603c2a57d3acf])) {
				goto label239;
			}

			if (isset($ba2d146bb5a55097[$B4a603c2a57d3acf])) {
				goto label237;
			}

			$F647a429f8089f01[$B4a603c2a57d3acf] = 0;
			goto label239;

			label237:

			$F647a429f8089f01[$B4a603c2a57d3acf] = 1;

			label239:
		}

		goto label174;

		label242:

		self::$db->query('SELECT `pair_id` FROM `lines` WHERE `pair_id` IN (' . implode(',', $d7bd0890458933bb) . ');');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			bD08b9C71a1Ca5f5($Fb9da1713bff19ce['pair_id']);
		}

		XUI::updateLines($d7bd0890458933bb);

		label266:

		goto label267;

		label267:

		return ['status' => STATUS_SUCCESS];
		goto label271;

		label271:
	}

	static public function E7c08EDf9e4db430($ba2d146bb5a55097)
	{
		goto label407;

		label2:

		$f63b4ada8c9b56fa['member_id'] = intval($ba2d146bb5a55097['member_id']);

		label8:

		if (!isset($ba2d146bb5a55097['c_force_server_id'])) {
			goto label18;
		}

		$f63b4ada8c9b56fa['force_server_id'] = intval($ba2d146bb5a55097['force_server_id']);

		label18:

		goto label19;

		label19:

		if (!isset($ba2d146bb5a55097['c_exp_date'])) {
			goto label120;
		}

		if (isset($ba2d146bb5a55097['no_expire'])) {
			goto label39;
		}

		try {
			$e36d2f5d3c9f0972 = new DateTime($ba2d146bb5a55097['exp_date']);
			$f63b4ada8c9b56fa['exp_date'] = $e36d2f5d3c9f0972->format('U');
		}
		catch (Exception $E0f0519e12b13b6b) {
		}

		goto label120;

		label39:

		goto label118;

		label40:

		if (!isset($ba2d146bb5a55097['reset_isp_lock'])) {
			goto label48;
		}

		$f63b4ada8c9b56fa['as_number'] = $f63b4ada8c9b56fa['isp_desc'] = '';

		label48:

		if (!isset($ba2d146bb5a55097['reset_device_lock'])) {
			goto label189;
		}

		$F647a429f8089f01['sn'] = $F647a429f8089f01['stb_type'] = $F647a429f8089f01['image_version'] = $F647a429f8089f01['hw_version'] = $F647a429f8089f01['device_id'] = $F647a429f8089f01['device_id2'] = $F647a429f8089f01['ver'] = '';
		goto label189;

		label67:

		foreach (json_decode($ba2d146bb5a55097['bouquets_selected'], true) as $f155fef57262b32a) {
			if (!is_numeric($f155fef57262b32a)) {
				goto label84;
			}

			$f63b4ada8c9b56fa['bouquet'][] = $f155fef57262b32a;

			label84:
		}

		$f63b4ada8c9b56fa['bouquet'] = sortArrayByArray($f63b4ada8c9b56fa['bouquet'], array_keys(BCa35e1d9E85240C()));
		$f63b4ada8c9b56fa['bouquet'] = '[' . implode(',', array_map('intval', $f63b4ada8c9b56fa['bouquet'])) . ']';

		label111:

		goto label40;

		label112:

		$B01b73ce2533c7ba['reboot_after_ok'] = 0;

		label114:

		goto label230;

		label115:

		$B01b73ce2533c7ba['need_confirm'] = 1;
		goto label227;

		label118:

		$f63b4ada8c9b56fa['exp_date'] = NULL;

		label120:

		if (!isset($ba2d146bb5a55097['c_bouquets'])) {
			goto label111;
		}

		$f63b4ada8c9b56fa['bouquet'] = [];
		goto label67;

		label127:

		if (isset($ba2d146bb5a55097['modern_theme'])) {
			goto label133;
		}

		$F647a429f8089f01['theme_type'] = 1;
		goto label181;

		label133:

		$F647a429f8089f01['theme_type'] = 0;
		goto label181;

		label136:

		foreach (['lock_device'] as $B4a603c2a57d3acf) {
			if (!isset($ba2d146bb5a55097['c_' . $B4a603c2a57d3acf])) {
				goto label154;
			}

			if (isset($ba2d146bb5a55097[$B4a603c2a57d3acf])) {
				goto label152;
			}

			$F647a429f8089f01[$B4a603c2a57d3acf] = 0;
			goto label154;

			label152:

			$F647a429f8089f01[$B4a603c2a57d3acf] = 1;

			label154:
		}

		foreach (['is_isplock', 'is_trial'] as $B4a603c2a57d3acf) {
			if (!isset($ba2d146bb5a55097['c_' . $B4a603c2a57d3acf])) {
				goto label174;
			}

			if (isset($ba2d146bb5a55097[$B4a603c2a57d3acf])) {
				goto label172;
			}

			$f63b4ada8c9b56fa[$B4a603c2a57d3acf] = 0;
			goto label174;

			label172:

			$f63b4ada8c9b56fa[$B4a603c2a57d3acf] = 1;

			label174:
		}

		if (!isset($ba2d146bb5a55097['c_modern_theme'])) {
			goto label181;
		}

		goto label127;

		label181:

		if (!isset($ba2d146bb5a55097['c_parent_password'])) {
			goto label188;
		}

		$F647a429f8089f01['parent_password'] = $ba2d146bb5a55097['parent_password'];

		label188:

		goto label380;

		label189:

		if (empty($ba2d146bb5a55097['message_type'])) {
			goto label230;
		}

		$B01b73ce2533c7ba = ['event' => $ba2d146bb5a55097['message_type'], 'need_confirm' => 0, 'msg' => '', 'reboot_after_ok' => intval(isset($ba2d146bb5a55097['reboot_portal']))];

		if ($ba2d146bb5a55097['message_type'] == 'send_msg') {
			goto label115;
		}

		if ($ba2d146bb5a55097['message_type'] == 'play_channel') {
			goto label400;
		}

		goto label395;

		label211:

		if (!isset($ba2d146bb5a55097['c_forced_country'])) {
			goto label218;
		}

		$f63b4ada8c9b56fa['forced_country'] = $ba2d146bb5a55097['forced_country'];

		label218:

		if (!isset($ba2d146bb5a55097['c_member_id'])) {
			goto label8;
		}

		goto label2;

		label223:

		return ['status' => STATUS_SUCCESS];
		goto label419;

		label227:

		$B01b73ce2533c7ba['msg'] = $ba2d146bb5a55097['message'];

		label230:

		$e902d00b48fba8a8 = json_decode($ba2d146bb5a55097['devices_selected'], true);

		foreach ($e902d00b48fba8a8 as $c050a23c479bc67e) {
			goto label309;

			label240:

			if (!isset($d1f284eb9d636fef['user']['id'])) {
				goto label250;
			}

			$ec80784a08a705f6[] = $d1f284eb9d636fef['user']['id'];

			label250:

			if (!isset($d1f284eb9d636fef['user']['paired'])) {
				goto label339;
			}

			$ec80784a08a705f6[] = $d1f284eb9d636fef['paired']['id'];
			goto label339;

			label262:

			if (!(0 < count($F647a429f8089f01))) {
				goto label298;
			}

			$Fac87d38f7786df0 = c483A3a59265139E($F647a429f8089f01);

			if (!(0 < count($Fac87d38f7786df0['data']))) {
				goto label298;
			}

			$Fac87d38f7786df0['data'][] = $c050a23c479bc67e;
			$B91645b8411dc88c = 'UPDATE `mag_devices` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `mag_id` = ?;';
			goto label292;

			label292:

			self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

			label298:

			if (!(0 < count($f63b4ada8c9b56fa))) {
				goto label373;
			}

			$ec80784a08a705f6 = [];
			goto label240;

			label309:

			$d1f284eb9d636fef = A32D85AEFa28959D($c050a23c479bc67e);

			if (!$d1f284eb9d636fef) {
				goto label373;
			}

			if (empty($ba2d146bb5a55097['message_type'])) {
				goto label337;
			}

			self::$db->query('INSERT INTO `mag_events`(`status`, `mag_device_id`, `event`, `need_confirm`, `msg`, `reboot_after_ok`, `send_time`) VALUES (0, ?, ?, ?, ?, ?, ?);', $c050a23c479bc67e, $B01b73ce2533c7ba['event'], $B01b73ce2533c7ba['need_confirm'], $B01b73ce2533c7ba['msg'], $B01b73ce2533c7ba['reboot_after_ok'], time());

			label337:

			goto label262;

			label339:

			foreach ($ec80784a08a705f6 as $f7107e3a92443147) {
				$Fac87d38f7786df0 = C483a3a59265139e($f63b4ada8c9b56fa);

				if (!(0 < count($Fac87d38f7786df0['data']))) {
					goto label371;
				}

				$Fac87d38f7786df0['data'][] = $f7107e3a92443147;
				$B91645b8411dc88c = 'UPDATE `lines` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` = ?;';
				self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
				XUI::CCb5075c679E7314($f7107e3a92443147);

				label371:
			}

			label373:

			goto label375;

			label375:

			goto label377;

			label377:
		}

		goto label223;

		label380:

		if (!isset($ba2d146bb5a55097['c_admin_notes'])) {
			goto label387;
		}

		$f63b4ada8c9b56fa['admin_notes'] = $ba2d146bb5a55097['admin_notes'];

		label387:

		if (!isset($ba2d146bb5a55097['c_reseller_notes'])) {
			goto label211;
		}

		$f63b4ada8c9b56fa['reseller_notes'] = $ba2d146bb5a55097['reseller_notes'];
		goto label211;

		label395:

		$B01b73ce2533c7ba['need_confirm'] = 0;
		$B01b73ce2533c7ba['reboot_after_ok'] = 0;
		goto label114;

		label400:

		$B01b73ce2533c7ba['msg'] = intval($ba2d146bb5a55097['selected_channel']);
		goto label112;

		label407:

		if (self::a11AA39c8a0bdf06($ba2d146bb5a55097)) {
			goto label416;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label416:

		$F647a429f8089f01 = [];
		$f63b4ada8c9b56fa = [];
		goto label136;

		label419:
	}

	static public function BC0849619C65e85d($ba2d146bb5a55097)
	{
		goto label6;

		label2:

		return ['status' => STATUS_SUCCESS];
		goto label310;

		label6:

		if (self::A11AA39C8A0BdF06($ba2d146bb5a55097)) {
			goto label15;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label15:

		$F647a429f8089f01 = [];
		$f63b4ada8c9b56fa = [];
		goto label116;

		label18:

		if (!isset($ba2d146bb5a55097['c_bouquets'])) {
			goto label301;
		}

		$f63b4ada8c9b56fa['bouquet'] = [];

		foreach (json_decode($ba2d146bb5a55097['bouquets_selected'], true) as $f155fef57262b32a) {
			if (!is_numeric($f155fef57262b32a)) {
				goto label41;
			}

			$f63b4ada8c9b56fa['bouquet'][] = $f155fef57262b32a;

			label41:
		}

		$f63b4ada8c9b56fa['bouquet'] = sortArrayByArray($f63b4ada8c9b56fa['bouquet'], array_keys(BCa35E1D9e85240c()));
		goto label288;

		label56:

		if (!isset($ba2d146bb5a55097['c_member_id'])) {
			goto label66;
		}

		$f63b4ada8c9b56fa['member_id'] = intval($ba2d146bb5a55097['member_id']);

		label66:

		if (!isset($ba2d146bb5a55097['c_force_server_id'])) {
			goto label81;
		}

		goto label75;

		label71:

		goto label74;

		label72:

		$f63b4ada8c9b56fa['exp_date'] = NULL;

		label74:

		goto label18;

		label75:

		$f63b4ada8c9b56fa['force_server_id'] = intval($ba2d146bb5a55097['force_server_id']);

		label81:

		if (!isset($ba2d146bb5a55097['c_exp_date'])) {
			goto label74;
		}

		if (isset($ba2d146bb5a55097['no_expire'])) {
			goto label72;
		}

		try {
			$e36d2f5d3c9f0972 = new DateTime($ba2d146bb5a55097['exp_date']);
			$f63b4ada8c9b56fa['exp_date'] = $e36d2f5d3c9f0972->format('U');
		}
		catch (Exception $E0f0519e12b13b6b) {
		}

		goto label71;

		label101:

		if (!isset($ba2d146bb5a55097['c_reseller_notes'])) {
			goto label108;
		}

		$f63b4ada8c9b56fa['reseller_notes'] = $ba2d146bb5a55097['reseller_notes'];

		label108:

		if (!isset($ba2d146bb5a55097['c_forced_country'])) {
			goto label56;
		}

		$f63b4ada8c9b56fa['forced_country'] = $ba2d146bb5a55097['forced_country'];
		goto label56;

		label116:

		foreach (['is_isplock', 'is_trial'] as $B4a603c2a57d3acf) {
			if (!isset($ba2d146bb5a55097['c_' . $B4a603c2a57d3acf])) {
				goto label134;
			}

			if (isset($ba2d146bb5a55097[$B4a603c2a57d3acf])) {
				goto label132;
			}

			$f63b4ada8c9b56fa[$B4a603c2a57d3acf] = 0;
			goto label134;

			label132:

			$f63b4ada8c9b56fa[$B4a603c2a57d3acf] = 1;

			label134:
		}

		if (!isset($ba2d146bb5a55097['c_admin_notes'])) {
			goto label143;
		}

		$f63b4ada8c9b56fa['admin_notes'] = $ba2d146bb5a55097['admin_notes'];

		label143:

		goto label101;

		label144:

		if (!isset($ba2d146bb5a55097['reset_device_lock'])) {
			goto label160;
		}

		$F647a429f8089f01['local_ip'] = $F647a429f8089f01['modem_mac'] = $F647a429f8089f01['enigma_version'] = $F647a429f8089f01['cpu'] = $F647a429f8089f01['lversion'] = $F647a429f8089f01['token'] = '';

		label160:

		$e902d00b48fba8a8 = json_decode($ba2d146bb5a55097['devices_selected'], true);

		foreach ($e902d00b48fba8a8 as $c050a23c479bc67e) {
			goto label252;

			label170:

			if (!(0 < count($f63b4ada8c9b56fa))) {
				goto label283;
			}

			$ec80784a08a705f6 = [];

			if (!isset($d1f284eb9d636fef['user']['id'])) {
				goto label189;
			}

			$ec80784a08a705f6[] = $d1f284eb9d636fef['user']['id'];

			label189:

			goto label206;

			label191:

			$Fac87d38f7786df0['data'][] = $c050a23c479bc67e;
			$B91645b8411dc88c = 'UPDATE `enigma2_devices` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `device_id` = ?;';
			self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);

			label204:

			goto label170;

			label206:

			if (!isset($d1f284eb9d636fef['user']['paired'])) {
				goto label216;
			}

			$ec80784a08a705f6[] = $d1f284eb9d636fef['paired']['id'];

			label216:

			foreach ($ec80784a08a705f6 as $f7107e3a92443147) {
				$Fac87d38f7786df0 = C483A3a59265139e($f63b4ada8c9b56fa);

				if (!(0 < count($Fac87d38f7786df0['data']))) {
					goto label248;
				}

				$Fac87d38f7786df0['data'][] = $f7107e3a92443147;
				$B91645b8411dc88c = 'UPDATE `lines` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` = ?;';
				self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
				XUI::CCB5075c679E7314($f7107e3a92443147);

				label248:
			}

			goto label283;

			label252:

			$d1f284eb9d636fef = EF70A93E98fB7ce9($c050a23c479bc67e);

			if (!$d1f284eb9d636fef) {
				goto label283;
			}

			if (!(0 < count($F647a429f8089f01))) {
				goto label204;
			}

			$Fac87d38f7786df0 = c483a3A59265139e($F647a429f8089f01);

			if (!(0 < count($Fac87d38f7786df0['data']))) {
				goto label204;
			}

			goto label191;

			label283:

			goto label285;

			label285:
		}

		goto label2;

		label288:

		$f63b4ada8c9b56fa['bouquet'] = '[' . implode(',', array_map('intval', $f63b4ada8c9b56fa['bouquet'])) . ']';

		label301:

		if (!isset($ba2d146bb5a55097['reset_isp_lock'])) {
			goto label309;
		}

		$f63b4ada8c9b56fa['as_number'] = $f63b4ada8c9b56fa['isp_desc'] = '';

		label309:

		goto label144;

		label310:
	}

	static public function BF6b43C59EB87f95($ba2d146bb5a55097)
	{
		goto label123;

		label2:

		if (!isset($ba2d146bb5a55097['c_owner_id'])) {
			goto label12;
		}

		$F647a429f8089f01['owner_id'] = intval($ba2d146bb5a55097['owner_id']);

		label12:

		if (!isset($ba2d146bb5a55097['c_member_group_id'])) {
			goto label89;
		}

		goto label83;

		label17:

		if (!isset($ba2d146bb5a55097['c_override'])) {
			goto label97;
		}

		$dd3211a322da8474 = [];

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $E8f21e009ba7a8c5) {
			goto label27;

			label27:

			if (!(substr($Bb672d1983256a93, 0, 9) == 'override_')) {
				goto label59;
			}

			$Abcb228699a7f743 = intval(explode('override_', $Bb672d1983256a93)[1]);

			if (0 < strlen($E8f21e009ba7a8c5)) {
				goto label61;
			}

			$E8f21e009ba7a8c5 = NULL;
			goto label65;
			goto label61;

			label59:

			goto label75;

			label61:

			$E8f21e009ba7a8c5 = intval($E8f21e009ba7a8c5);

			label65:

			if (!$E8f21e009ba7a8c5) {
				goto label59;
			}

			$dd3211a322da8474[$Abcb228699a7f743] = ['assign' => 1, 'official_credits' => $E8f21e009ba7a8c5];
			goto label59;

			label75:
		}

		$F647a429f8089f01['override_packages'] = json_encode($dd3211a322da8474);
		goto label97;

		label83:

		$F647a429f8089f01['member_group_id'] = intval($ba2d146bb5a55097['member_group_id']);

		label89:

		if (!isset($ba2d146bb5a55097['c_reseller_dns'])) {
			goto label96;
		}

		$F647a429f8089f01['reseller_dns'] = $ba2d146bb5a55097['reseller_dns'];

		label96:

		goto label17;

		label97:

		$d7bd0890458933bb = confirmIDs(json_decode($ba2d146bb5a55097['users_selected'], true));

		if (!(0 < count($d7bd0890458933bb))) {
			goto label154;
		}
		if (!(isset($ba2d146bb5a55097['c_owner_id']) && ($Caf4325605347834 == $F647a429f8089f01['owner_id']))) {
			goto label158;
		}

		unset($F647a429f8089f01['owner_id']);
		goto label158;

		label123:

		if (self::A11aa39C8a0bDf06($ba2d146bb5a55097)) {
			goto label132;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label132:

		$F647a429f8089f01 = [];

		foreach (['status'] as $B4a603c2a57d3acf) {
			if (!isset($ba2d146bb5a55097['c_' . $B4a603c2a57d3acf])) {
				goto label151;
			}

			if (isset($ba2d146bb5a55097[$B4a603c2a57d3acf])) {
				goto label149;
			}

			$F647a429f8089f01[$B4a603c2a57d3acf] = 0;
			goto label151;

			label149:

			$F647a429f8089f01[$B4a603c2a57d3acf] = 1;

			label151:
		}

		goto label2;

		label154:

		return ['status' => STATUS_SUCCESS];
		goto label187;

		label158:

		$Fac87d38f7786df0 = c483A3A59265139e($F647a429f8089f01);

		if (!(0 < count($Fac87d38f7786df0['data']))) {
			goto label154;
		}

		$B91645b8411dc88c = 'UPDATE `users` SET ' . $Fac87d38f7786df0['update'] . ' WHERE `id` IN (' . implode(',', $d7bd0890458933bb) . ');';
		self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data']);
		goto label154;

		label187:
	}

	static public function fccaA0f750Efa5B7($ba2d146bb5a55097)
	{
		goto label73;

		label2:

		$F647a429f8089f01['allowed_outputs'] = '[' . implode(',', array_map('intval', $Cd826a7439b979ee)) . ']';

		if (!bd57390A052Fd83B('lines', 'username', $F647a429f8089f01['username'], 'id', $ba2d146bb5a55097['edit'])) {
			goto label122;
		}

		return ['status' => STATUS_EXISTS_USERNAME, 'data' => $ba2d146bb5a55097];
		goto label122;

		label31:

		$F647a429f8089f01['bouquet'] = sortArrayByArray(array_values(json_decode($ba2d146bb5a55097['bouquets_selected'], true)), array_keys(bcA35e1d9E85240c()));
		$F647a429f8089f01['bouquet'] = '[' . implode(',', array_map('intval', $F647a429f8089f01['bouquet'])) . ']';
		if (isset($ba2d146bb5a55097['exp_date']) && !isset($ba2d146bb5a55097['no_expire'])) {
			goto label93;
		}

		$F647a429f8089f01['exp_date'] = NULL;
		goto label92;

		label73:

		if (self::a11aa39C8A0BDF06($ba2d146bb5a55097)) {
			goto label82;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label82:

		if (isset($ba2d146bb5a55097['edit'])) {
			goto label218;
		}

		if (E589a4bF54a2dAD1('adv', 'add_user')) {
			goto label206;
		}

		goto label205;

		label92:

		goto label188;

		label93:
		if (!((0 < strlen($ba2d146bb5a55097['exp_date'])) && ($ba2d146bb5a55097['exp_date'] != '1970-01-01'))) {
			goto label121;
		}

		try {
			$e36d2f5d3c9f0972 = new DateTime($ba2d146bb5a55097['exp_date']);
			$F647a429f8089f01['exp_date'] = $e36d2f5d3c9f0972->format('U');
		}
		catch (Exception $E0f0519e12b13b6b) {
			return ['status' => STATUS_INVALID_DATE, 'data' => $ba2d146bb5a55097];
		}

		label121:

		goto label188;

		label122:

		$Fac87d38f7786df0 = c483a3A59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `lines`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label227;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label226;

		label146:

		$F647a429f8089f01 = e42Ed0B0860Db08a(B5Ad1d95a92ce732($ba2d146bb5a55097['edit']), $ba2d146bb5a55097);

		label155:

		if (!(strlen($ba2d146bb5a55097['username']) == 0)) {
			goto label168;
		}

		$F647a429f8089f01['username'] = fC34407b2842461b(10);

		label168:

		goto label238;

		label169:

		$F647a429f8089f01['allowed_ua'] = json_encode($ba2d146bb5a55097['allowed_ua']);

		label175:

		$Cd826a7439b979ee = [];

		if (!isset($ba2d146bb5a55097['access_output'])) {
			goto label2;
		}

		foreach ($ba2d146bb5a55097['access_output'] as $D7c990ef7ca44a60) {
			$Cd826a7439b979ee[] = $D7c990ef7ca44a60;
		}

		goto label2;

		label188:

		if ($F647a429f8089f01['member_id']) {
			goto label195;
		}

		$F647a429f8089f01['member_id'] = self::$rUserInfo['id'];

		label195:

		if (isset($ba2d146bb5a55097['allowed_ips'])) {
			goto label312;
		}

		goto label309;

		label199:

		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label204:

		goto label335;

		label205:

		exit();

		label206:

		$F647a429f8089f01 = c73eD8d0B70CE12F('lines', $ba2d146bb5a55097);
		$F647a429f8089f01['created_at'] = time();
		unset($F647a429f8089f01['id']);
		goto label217;

		label217:

		goto label155;

		label218:

		if (e589A4BF54A2DAD1('adv', 'edit_user')) {
			goto label225;
		}

		exit();

		label225:

		goto label146;

		label226:

		goto label204;

		label227:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		BD08b9C71A1CA5F5($E5b50d60c471d7d6);
		XUI::ccb5075c679E7314($E5b50d60c471d7d6);
		goto label199;

		label238:

		if (!(strlen($ba2d146bb5a55097['password']) == 0)) {
			goto label251;
		}

		$F647a429f8089f01['password'] = fC34407B2842461b(10);

		label251:

		foreach (['max_connections', 'enabled', 'admin_enabled'] as $f284920b9991e04c) {
			if (isset($ba2d146bb5a55097[$f284920b9991e04c])) {
				goto label261;
			}

			$F647a429f8089f01[$f284920b9991e04c] = 1;
			goto label267;

			label261:

			$F647a429f8089f01[$f284920b9991e04c] = intval($ba2d146bb5a55097[$f284920b9991e04c]);

			label267:
		}

		goto label270;

		label270:

		foreach (['is_stalker', 'is_restreamer', 'is_trial', 'is_isplock', 'bypass_ua'] as $f284920b9991e04c) {
			if (isset($ba2d146bb5a55097[$f284920b9991e04c])) {
				goto label280;
			}

			$F647a429f8089f01[$f284920b9991e04c] = 0;
			goto label282;

			label280:

			$F647a429f8089f01[$f284920b9991e04c] = 1;

			label282:
		}

		if (!(strlen($ba2d146bb5a55097['isp_clear']) == 0)) {
			goto label31;
		}

		$F647a429f8089f01['isp_desc'] = '';
		$F647a429f8089f01['as_number'] = NULL;
		goto label31;

		label297:

		goto label175;

		label298:

		if (is_array($ba2d146bb5a55097['allowed_ua'])) {
			goto label308;
		}

		$ba2d146bb5a55097['allowed_ua'] = [$ba2d146bb5a55097['allowed_ua']];

		label308:

		goto label169;

		label309:

		$F647a429f8089f01['allowed_ips'] = '[]';
		goto label329;

		label312:

		if (is_array($ba2d146bb5a55097['allowed_ips'])) {
			goto label323;
		}

		$ba2d146bb5a55097['allowed_ips'] = [$ba2d146bb5a55097['allowed_ips']];
		goto label323;

		label323:

		$F647a429f8089f01['allowed_ips'] = json_encode($ba2d146bb5a55097['allowed_ips']);

		label329:

		if (isset($ba2d146bb5a55097['allowed_ua'])) {
			goto label298;
		}

		$F647a429f8089f01['allowed_ua'] = '[]';
		goto label297;

		label335:
	}

	static public function scheduleRecording($ba2d146bb5a55097)
	{
		goto label62;

		label2:

		return ['status' => STATUS_NO_SOURCE];

		label5:

		$F647a429f8089f01 = C73ED8D0b70ce12f('recordings', $ba2d146bb5a55097);
		$F647a429f8089f01['bouquets'] = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['bouquets'])) . ']';
		$F647a429f8089f01['category_id'] = '[' . implode(',', array_map('intval', $ba2d146bb5a55097['category_id'])) . ']';
		goto label37;

		label37:

		$Fac87d38f7786df0 = c483A3a59265139E($F647a429f8089f01);
		$B91645b8411dc88c = 'REPLACE INTO `recordings`(' . $Fac87d38f7786df0['columns'] . ') VALUES(' . $Fac87d38f7786df0['placeholder'] . ');';

		if (self::$db->query($B91645b8411dc88c, ...$Fac87d38f7786df0['data'])) {
			goto label79;
		}

		return ['status' => STATUS_FAILURE, 'data' => $ba2d146bb5a55097];
		goto label88;
		goto label79;

		label62:

		if (self::A11aa39C8a0bdf06($ba2d146bb5a55097)) {
			goto label71;
		}

		return ['status' => STATUS_INVALID_INPUT, 'data' => $ba2d146bb5a55097];

		label71:

		if (E589a4BF54a2daD1('adv', 'add_stream')) {
			goto label89;
		}

		exit();
		goto label89;

		label79:

		$E5b50d60c471d7d6 = self::$db->last_insert_id();
		return [
			'status' => STATUS_SUCCESS,
			'data'   => ['insert_id' => $E5b50d60c471d7d6]
		];

		label88:

		goto label101;

		label89:

		if (!empty($ba2d146bb5a55097['title'])) {
			goto label96;
		}

		return ['status' => STATUS_NO_TITLE];

		label96:

		if (!empty($ba2d146bb5a55097['source_id'])) {
			goto label5;
		}

		goto label2;

		label101:
	}
}

?>