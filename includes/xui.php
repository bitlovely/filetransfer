<?php


class XUI
{
	static public $db;
	static public $redis;
	static public $rRequest = [];
	static public $rConfig = [];
	static public $rSettings = [];
	static public $rBouquets = [];
	static public $rServers = [];
	static public $rSegmentSettings = [];
	static public $rBlockedUA = [];
	static public $rBlockedISP = [];
	static public $rBlockedIPs = [];
	static public $rBlockedServers = [];
	static public $rAllowedIPs = [];
	static public $rProxies = [];
	static public $rAllowedDomains = [];
	static public $rCategories = [];
	static public $rFFMPEG_CPU;
	static public $rFFMPEG_GPU;
	static public $rFFPROBE;
	static public $rCached;

	static public function init($D50d4318c2f7217f = false)
	{
		goto label65;

		label2:

		date_default_timezone_set(self::$rSettings['default_timezone']);

		label7:

		if (!(self::$rSettings['on_demand_wait_time'] == 0)) {
			goto label16;
		}

		self::$rSettings['on_demand_wait_time'] = 15;

		label16:

		goto label92;

		label17:

		self::$rCached = self::$rSettings['enable_cache'];

		if ($D50d4318c2f7217f) {
			goto label91;
		}

		self::$rServers = self::f76008F8dFe1898c();
		self::$rBouquets = self::DE27bb48f7BfF12d();
		self::$rBlockedUA = self::df8943e432872275();
		goto label247;

		label36:

		self::bee6DCc538970dd6($_COOKIE);

		label40:

		$Eace76317d47fe26 = @self::E24B3d34d46068Eb($_GET, []);
		self::$rRequest = @self::E24B3d34d46068Eb($_POST, $Eace76317d47fe26);
		self::$rConfig = parse_ini_file(CONFIG_PATH . 'config.ini');
		goto label152;

		label65:

		if (empty($_GET)) {
			goto label72;
		}

		self::bEE6dCc538970dD6($_GET);

		label72:

		if (empty($_POST)) {
			goto label236;
		}

		self::BEE6dcC538970dD6($_POST);
		goto label236;

		label80:

		self::$rAllowedIPs = self::DE052F142a92E9bF();
		self::$rCategories = self::C721BD954A5f072F();
		self::fCDCF918e54CF869();
		goto label151;

		label91:

		goto label173;

		label92:

		self::$rSegmentSettings = ['seg_type' => self::$rSettings['segment_type'], 'seg_time' => intval(self::$rSettings['seg_time']), 'seg_list_size' => intval(self::$rSettings['seg_list_size']), 'seg_delete_threshold' => intval(self::$rSettings['seg_delete_threshold'])];

		switch (self::$rSettings['ffmpeg_cpu']) {
		case '4.4':
			self::$rFFMPEG_CPU = FFMPEG_BIN_44;
			self::$rFFPROBE = FFPROBE_BIN_44;
			goto label147;
		case '4.3':
			self::$rFFMPEG_CPU = FFMPEG_BIN_43;
			self::$rFFPROBE = FFPROBE_BIN_43;
			goto label147;
		default:
			self::$rFFMPEG_CPU = FFMPEG_BIN_40;
			self::$rFFPROBE = FFPROBE_BIN_40;
			goto label147;
		}

		label147:

		self::$rFFMPEG_GPU = FFMPEG_BIN_40;
		goto label17;

		label151:

		goto label268;

		label152:

		if (defined('SERVER_ID')) {
			goto label166;
		}

		define('SERVER_ID', intval(self::$rConfig['server_id']));

		label166:

		if ($D50d4318c2f7217f) {
			goto label200;
		}

		self::$rSettings = self::aC49b56dBe10e52c();
		goto label199;

		label173:

		self::$rServers = self::e74A9a4510C4FFe4('servers');
		self::$rBouquets = self::e74a9a4510C4FfE4('bouquets');
		self::$rBlockedUA = self::e74A9a4510C4fFE4('blocked_ua');
		self::$rBlockedISP = self::E74a9a4510C4FfE4('blocked_isp');
		self::$rBlockedIPs = self::E74a9a4510C4ffe4('blocked_ips');
		goto label210;

		label199:

		goto label205;

		label200:

		self::$rSettings = self::e74A9A4510c4FFE4('settings');

		label205:

		if (empty(self::$rSettings['default_timezone'])) {
			goto label7;
		}

		goto label2;

		label210:

		self::$rProxies = self::E74a9a4510c4fFE4('proxy_servers');
		self::$rBlockedServers = self::e74A9A4510c4FfE4('blocked_servers');
		self::$rAllowedDomains = self::E74a9A4510C4FfE4('allowed_domains');
		self::$rAllowedIPs = self::e74a9a4510c4Ffe4('allowed_ips');
		self::$rCategories = self::e74a9a4510c4fFE4('categories');
		goto label151;

		label236:

		if (empty($_SESSION)) {
			goto label243;
		}

		self::BeE6dcC538970DD6($_SESSION);

		label243:

		if (empty($_COOKIE)) {
			goto label40;
		}

		goto label36;

		label247:

		self::$rBlockedISP = self::d0826dad642A6222();
		self::$rBlockedIPs = self::aB69EcD4D7705061();
		self::$rProxies = self::e190F2b3b0819f7D();
		self::$rBlockedServers = self::c18B3Aa078DD5F59();
		self::$rAllowedDomains = self::Cb8207Cf2A2656c1();
		goto label80;

		label268:
	}

	static public function aC796C271Ecc13a6($Ea248c6503c74cd4)
	{
		$F748e99ac3141f49 = new DateTime('UTC', new DateTimeZone(date_default_timezone_get()));
		$a0fb8d5fb019f1ff = new DateTime('UTC', new DateTimeZone($Ea248c6503c74cd4));
		return $a0fb8d5fb019f1ff->getTimestamp() - $F748e99ac3141f49->getTimestamp();
	}

	static public function cb8207cf2A2656c1($ebb4852f69f0dca0 = false)
	{
		goto label42;

		label2:

		$E61255ffd23a6b49 = ['127.0.0.1', 'localhost'];
		self::$db->query('SELECT `server_ip`, `private_ip`, `domain_name` FROM `servers` WHERE `enabled` = 1;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			foreach (explode(',', $Fb9da1713bff19ce['domain_name']) as $f547aeca99c55c3e) {
				$E61255ffd23a6b49[] = $f547aeca99c55c3e;
			}

			if (!$Fb9da1713bff19ce['server_ip']) {
				goto label31;
			}

			$E61255ffd23a6b49[] = $Fb9da1713bff19ce['server_ip'];

			label31:

			if (!$Fb9da1713bff19ce['private_ip']) {
				goto label39;
			}

			$E61255ffd23a6b49[] = $Fb9da1713bff19ce['private_ip'];

			label39:
		}

		goto label57;

		label42:

		if ($ebb4852f69f0dca0) {
			goto label2;
		}

		$A66eee85d9566710 = self::e74a9a4510C4fFE4('allowed_domains', 20);

		if (!($A66eee85d9566710 !== false)) {
			goto label54;
		}

		return $A66eee85d9566710;

		label54:

		goto label2;

		label55:

		return $E61255ffd23a6b49;
		goto label88;

		label57:

		self::$db->query('SELECT `reseller_dns` FROM `users` WHERE `status` = 1;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			if (!$Fb9da1713bff19ce['reseller_dns']) {
				goto label74;
			}

			$E61255ffd23a6b49[] = $Fb9da1713bff19ce['reseller_dns'];

			label74:
		}

		$E61255ffd23a6b49 = array_filter(array_unique($E61255ffd23a6b49));
		self::F7a8933150230eab('allowed_domains', $E61255ffd23a6b49);
		goto label55;

		label88:
	}

	static public function e190F2b3b0819F7D($ebb4852f69f0dca0 = false)
	{
		goto label32;

		label2:

		$d094d3e133ec8c03 = [];

		foreach (self::$rServers as $Ec379295dc7029e6) {
			if (!($Ec379295dc7029e6['server_type'] == 1)) {
				goto label23;
			}

			$d094d3e133ec8c03[$Ec379295dc7029e6['server_ip']] = $Ec379295dc7029e6;

			if (!$Ec379295dc7029e6['private_ip']) {
				goto label23;
			}

			$d094d3e133ec8c03[$Ec379295dc7029e6['private_ip']] = $Ec379295dc7029e6;

			label23:
		}

		self::f7a8933150230eab('proxy_servers', $d094d3e133ec8c03);
		goto label30;

		label30:

		return $d094d3e133ec8c03;
		goto label45;

		label32:

		if ($ebb4852f69f0dca0) {
			goto label2;
		}

		$A66eee85d9566710 = self::E74A9A4510C4FfE4('proxy_servers', 20);

		if (!($A66eee85d9566710 !== false)) {
			goto label44;
		}

		return $A66eee85d9566710;

		label44:

		goto label2;

		label45:
	}

	static public function EFd47D0aB821C8Af($b38e11ffdc6a3abb)
	{
		if (!isset(self::$rProxies[$b38e11ffdc6a3abb])) {
			goto label9;
		}

		return self::$rProxies[$b38e11ffdc6a3abb];

		label9:

		return NULL;
	}

	static public function DF8943E432872275($ebb4852f69f0dca0 = false)
	{
		if ($ebb4852f69f0dca0) {
			goto label13;
		}

		$A66eee85d9566710 = self::E74A9A4510c4FFE4('blocked_ua', 20);

		if (!($A66eee85d9566710 !== false)) {
			goto label13;
		}

		return $A66eee85d9566710;

		label13:

		self::$db->query('SELECT id,exact_match,LOWER(user_agent) as blocked_ua FROM `blocked_uas`');
		$d094d3e133ec8c03 = self::$db->get_rows(true, 'id');
		self::f7a8933150230Eab('blocked_ua', $d094d3e133ec8c03);
		return $d094d3e133ec8c03;
	}

	static public function aB69EcD4D7705061($ebb4852f69f0dca0 = false)
	{
		goto label2;

		label2:

		if ($ebb4852f69f0dca0) {
			goto label21;
		}

		$A66eee85d9566710 = self::E74a9a4510c4FFe4('blocked_ips', 20);

		if (!($A66eee85d9566710 !== false)) {
			goto label14;
		}

		return $A66eee85d9566710;

		label14:

		goto label21;

		label15:

		self::F7A8933150230eaB('blocked_ips', $d094d3e133ec8c03);
		return $d094d3e133ec8c03;
		goto label37;

		label21:

		$d094d3e133ec8c03 = [];
		self::$db->query('SELECT `ip` FROM `blocked_ips`');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$d094d3e133ec8c03[] = $Fb9da1713bff19ce['ip'];
		}

		goto label15;

		label37:
	}

	static public function d0826dad642A6222($ebb4852f69f0dca0 = false)
	{
		if ($ebb4852f69f0dca0) {
			goto label13;
		}

		$A66eee85d9566710 = self::E74A9a4510C4Ffe4('blocked_isp', 20);

		if (!($A66eee85d9566710 !== false)) {
			goto label13;
		}

		return $A66eee85d9566710;

		label13:

		self::$db->query('SELECT id,isp,blocked FROM `blocked_isps`');
		$d094d3e133ec8c03 = self::$db->get_rows();
		self::f7A8933150230EAb('blocked_isp', $d094d3e133ec8c03);
		return $d094d3e133ec8c03;
	}

	static public function c18B3aa078Dd5f59($ebb4852f69f0dca0 = false)
	{
		goto label24;

		label2:

		self::f7A8933150230eAB('blocked_servers', $d094d3e133ec8c03);
		return $d094d3e133ec8c03;
		goto label37;

		label8:

		$d094d3e133ec8c03 = [];
		self::$db->query('SELECT `asn` FROM `blocked_asns` WHERE `blocked` = 1;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$d094d3e133ec8c03[] = $Fb9da1713bff19ce['asn'];
		}

		goto label2;

		label24:

		if ($ebb4852f69f0dca0) {
			goto label8;
		}

		$A66eee85d9566710 = self::e74a9A4510C4ffe4('blocked_servers', 20);

		if (!($A66eee85d9566710 !== false)) {
			goto label36;
		}

		return $A66eee85d9566710;

		label36:

		goto label8;

		label37:
	}

	static public function DE27Bb48f7BFF12d($ebb4852f69f0dca0 = false)
	{
		goto label73;

		label2:

		$d094d3e133ec8c03 = [];
		self::$db->query('SELECT *, IF(`bouquet_order` > 0, `bouquet_order`, 999) AS `order` FROM `bouquets` ORDER BY `order` ASC;');

		foreach (self::$db->get_rows(true, 'id') as $Abcb228699a7f743 => $A5a4a57a12bb19b3) {
			$d094d3e133ec8c03[$Abcb228699a7f743]['streams'] = array_merge(json_decode($A5a4a57a12bb19b3['bouquet_channels'], true), json_decode($A5a4a57a12bb19b3['bouquet_movies'], true), json_decode($A5a4a57a12bb19b3['bouquet_radios'], true));
			$d094d3e133ec8c03[$Abcb228699a7f743]['series'] = json_decode($A5a4a57a12bb19b3['bouquet_series'], true);
			$d094d3e133ec8c03[$Abcb228699a7f743]['channels'] = json_decode($A5a4a57a12bb19b3['bouquet_channels'], true);
			$d094d3e133ec8c03[$Abcb228699a7f743]['movies'] = json_decode($A5a4a57a12bb19b3['bouquet_movies'], true);
			$d094d3e133ec8c03[$Abcb228699a7f743]['radios'] = json_decode($A5a4a57a12bb19b3['bouquet_radios'], true);
		}

		goto label85;

		label73:

		if ($ebb4852f69f0dca0) {
			goto label2;
		}

		$A66eee85d9566710 = self::e74a9a4510C4fFE4('bouquets', 60);

		if (empty($A66eee85d9566710)) {
			goto label84;
		}

		return $A66eee85d9566710;

		label84:

		goto label2;

		label85:

		self::F7a8933150230eaB('bouquets', $d094d3e133ec8c03);
		return $d094d3e133ec8c03;
		goto label91;

		label91:
	}

	static public function AC49B56dbE10e52C($ebb4852f69f0dca0 = false)
	{
		goto label91;

		label2:

		$d094d3e133ec8c03['allow_countries'] = json_decode($d094d3e133ec8c03['allow_countries'], true);
		$d094d3e133ec8c03['allowed_stb_types'] = array_map('strtolower', json_decode($d094d3e133ec8c03['allowed_stb_types'], true));
		$d094d3e133ec8c03['stalker_lock_images'] = json_decode($d094d3e133ec8c03['stalker_lock_images'], true);

		if (!array_key_exists('bouquet_name', $d094d3e133ec8c03)) {
			goto label43;
		}

		goto label35;

		label35:

		$d094d3e133ec8c03['bouquet_name'] = str_replace(' ', '_', $d094d3e133ec8c03['bouquet_name']);

		label43:

		$d094d3e133ec8c03['api_ips'] = explode(',', $d094d3e133ec8c03['api_ips']);
		$d094d3e133ec8c03['live_streaming_pass'] = md5(sha1(self::$rSettings['license'] . (self::$rSettings['security_key'] ?: '')) . OPENSSL_EXTRA);
		self::f7a8933150230EAb('settings', $d094d3e133ec8c03);
		goto label72;

		label72:

		return $d094d3e133ec8c03;
		goto label103;

		label74:

		$d094d3e133ec8c03 = [];
		self::$db->query('SELECT * FROM `settings`');
		$D8e7681dfae2905b = self::$db->get_row();

		foreach ($D8e7681dfae2905b as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			$d094d3e133ec8c03[$Bb672d1983256a93] = $ce0840c647e1bbc7;
		}

		goto label2;

		label91:

		if ($ebb4852f69f0dca0) {
			goto label74;
		}

		$A66eee85d9566710 = self::E74A9a4510c4FFe4('settings', 20);

		if (empty($A66eee85d9566710)) {
			goto label102;
		}

		return $A66eee85d9566710;

		label102:

		goto label74;

		label103:
	}

	static public function f7a8933150230eAb($A66eee85d9566710, $ba2d146bb5a55097)
	{
		$ba2d146bb5a55097 = igbinary_serialize($ba2d146bb5a55097);
		file_put_contents(CACHE_TMP_PATH . $A66eee85d9566710, $ba2d146bb5a55097, LOCK_EX);
	}

	static public function e74A9A4510C4fFE4($A66eee85d9566710, $d03052828cab569a = NULL)
	{
		if (!file_exists(CACHE_TMP_PATH . $A66eee85d9566710)) {
			goto label35;
		}
		if (!(!$d03052828cab569a || ((time() - filemtime(CACHE_TMP_PATH . $A66eee85d9566710)) < $d03052828cab569a))) {
			goto label35;
		}

		$ba2d146bb5a55097 = file_get_contents(CACHE_TMP_PATH . $A66eee85d9566710);
		return igbinary_unserialize($ba2d146bb5a55097);

		label35:

		return false;
	}

	static public function f76008f8Dfe1898c($ebb4852f69f0dca0 = false)
	{
		goto label337;

		label2:

		$Bcf70cba56392975 = [];
		$bb09da03c2515c8c = [1];

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			goto label212;

			label11:

			$Fb9da1713bff19ce['watchdog'] = json_decode($Fb9da1713bff19ce['watchdog_data'], true);
			$Fb9da1713bff19ce['server_online'] = ($Fb9da1713bff19ce['enabled'] && (in_array($Fb9da1713bff19ce['status'], $bb09da03c2515c8c) && ((time() - $Fb9da1713bff19ce['last_check_ago']) <= $f0bad4f5408fb256))) || (SERVER_ID == $Fb9da1713bff19ce['id']);
			$Bcf70cba56392975[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
			goto label315;

			label48:

			$Fb9da1713bff19ce['rtmp_mport_url'] = 'http://127.0.0.1:31210/';
			$Fb9da1713bff19ce['api_url_ip'] = 'http://' . escapeshellcmd($Fb9da1713bff19ce['server_ip']) . ':' . intval($Fb9da1713bff19ce['http_broadcast_port']) . '/api?password=' . urlencode(self::$rSettings['live_streaming_pass']);
			$Fb9da1713bff19ce['api_url'] = $Fb9da1713bff19ce['api_url_ip'];
			$Fb9da1713bff19ce['site_url_ip'] = $Bf9be24c69c0f17b . '://' . escapeshellcmd($Fb9da1713bff19ce['server_ip']) . ':' . $e5bebfb39a19fe80 . '/';
			$Fb9da1713bff19ce['private_url_ip'] = (!empty($Fb9da1713bff19ce['private_ip']) ? 'http://' . escapeshellcmd($Fb9da1713bff19ce['private_ip']) . ':' . intval($Fb9da1713bff19ce['http_broadcast_port']) . '/' : NULL);
			goto label257;

			label106:

			$Fb9da1713bff19ce['allow_http'] = true;
			goto label112;

			label110:

			$Fb9da1713bff19ce['allow_http'] = false;

			label112:

			goto label124;

			label114:

			if ($Fb9da1713bff19ce['enable_https'] == 1) {
				goto label122;
			}

			$Bf9be24c69c0f17b = 'http';
			goto label136;

			label122:

			goto label135;

			label124:

			if ($Fb9da1713bff19ce['server_type'] == 1) {
				goto label132;
			}

			$f0bad4f5408fb256 = 90;
			goto label11;

			label132:

			$f0bad4f5408fb256 = 180;
			goto label11;

			label135:

			$Bf9be24c69c0f17b = 'https';

			label136:

			$e5bebfb39a19fe80 = ($Bf9be24c69c0f17b == 'http' ? intval($Fb9da1713bff19ce['http_broadcast_port']) : intval($Fb9da1713bff19ce['https_broadcast_port']));
			$Fb9da1713bff19ce['server_protocol'] = $Bf9be24c69c0f17b;
			$Fb9da1713bff19ce['request_port'] = $e5bebfb39a19fe80;
			goto label156;

			label156:

			$Fb9da1713bff19ce['site_url'] = $Bf9be24c69c0f17b . '://' . $A7ca171405b19571 . ':' . $e5bebfb39a19fe80 . '/';
			$Fb9da1713bff19ce['http_url'] = 'http://' . $A7ca171405b19571 . ':' . intval($Fb9da1713bff19ce['http_broadcast_port']) . '/';
			$Fb9da1713bff19ce['https_url'] = 'https://' . $A7ca171405b19571 . ':' . intval($Fb9da1713bff19ce['https_broadcast_port']) . '/';
			$Fb9da1713bff19ce['rtmp_server'] = 'rtmp://' . $A7ca171405b19571 . ':' . intval($Fb9da1713bff19ce['rtmp_port']) . '/live/';
			$Fb9da1713bff19ce['domains'] = ['protocol' => $Bf9be24c69c0f17b, 'port' => $e5bebfb39a19fe80, 'urls' => array_filter(array_map('escapeshellcmd', explode(',', $Fb9da1713bff19ce['domain_name'])))];
			goto label48;

			label212:

			if (empty($Fb9da1713bff19ce['domain_name'])) {
				goto label234;
			}

			$A7ca171405b19571 = str_replace(['http://', '/', 'https://'], '', escapeshellcmd(explode(',', $Fb9da1713bff19ce['domain_name'])[0]));
			goto label114;

			label234:

			$A7ca171405b19571 = escapeshellcmd($Fb9da1713bff19ce['server_ip']);
			goto label114;

			label241:

			goto label250;

			label243:

			$Fb9da1713bff19ce['parent_id'] = [intval($Fb9da1713bff19ce['parent_id'])];

			label250:

			if ($Fb9da1713bff19ce['enable_https'] == 2) {
				goto label110;
			}

			goto label106;

			label257:

			$Fb9da1713bff19ce['public_url_ip'] = 'http://' . escapeshellcmd($Fb9da1713bff19ce['server_ip']) . ':' . intval($Fb9da1713bff19ce['http_broadcast_port']) . '/';
			$Fb9da1713bff19ce['geoip_countries'] = (empty($Fb9da1713bff19ce['geoip_countries']) ? [] : json_decode($Fb9da1713bff19ce['geoip_countries'], true));
			$Fb9da1713bff19ce['isp_names'] = (empty($Fb9da1713bff19ce['isp_names']) ? [] : json_decode($Fb9da1713bff19ce['isp_names'], true));

			if (is_numeric($Fb9da1713bff19ce['parent_id'])) {
				goto label243;
			}

			$Fb9da1713bff19ce['parent_id'] = array_map('intval', json_decode($Fb9da1713bff19ce['parent_id'], true));
			goto label241;

			label315:
		}

		self::f7A8933150230eab('servers', $Bcf70cba56392975);
		goto label335;

		label322:

		if (!empty($_SERVER['REQUEST_SCHEME'])) {
			goto label330;
		}

		$_SERVER['REQUEST_SCHEME'] = 'http';

		label330:

		self::$db->query('SELECT * FROM `servers`');
		goto label2;

		label335:

		return $Bcf70cba56392975;
		goto label349;

		label337:

		if ($ebb4852f69f0dca0) {
			goto label322;
		}

		$A66eee85d9566710 = self::E74a9a4510C4ffE4('servers', 10);

		if (empty($A66eee85d9566710)) {
			goto label348;
		}

		return $A66eee85d9566710;

		label348:

		goto label322;

		label349:
	}

	static public function b2EF9c6C7AfA4EEc($F83b167f3cf044be, $d7a85245907a06e7 = NULL, $F7379362daea673f = 5)
	{
		goto label118;

		label4:

		$e02ff34f7d898a7b = [];
		$d344a66178d455b1 = curl_multi_init();

		foreach ($F83b167f3cf044be as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			goto label13;

			label13:

			if (self::$rServers[$Bb672d1983256a93]['server_online']) {
				goto label23;
			}

			$e1aa0fcc2c644398[] = $Bb672d1983256a93;
			goto label34;

			label23:

			$Daaec03d386c8f6a[$Bb672d1983256a93] = curl_init();
			goto label76;

			label29:

			curl_multi_add_handle($d344a66178d455b1, $Daaec03d386c8f6a[$Bb672d1983256a93]);

			label34:

			goto label114;

			label36:

			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_SSL_VERIFYPEER, 0);

			if (!($ce0840c647e1bbc7['postdata'] != NULL)) {
				goto label29;
			}

			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_POST, true);
			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_POSTFIELDS, http_build_query($ce0840c647e1bbc7['postdata']));
			goto label29;

			label76:

			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_URL, $ce0840c647e1bbc7['url']);
			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_RETURNTRANSFER, true);
			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_CONNECTTIMEOUT, 5);
			curl_setopt($Daaec03d386c8f6a[$Bb672d1983256a93], CURLOPT_TIMEOUT, $F7379362daea673f);
			goto label36;

			label114:
		}

		$Da8120ce4761cb4b = NULL;
		goto label126;

		label118:

		if (!empty($F83b167f3cf044be)) {
			goto label123;
		}

		return [];

		label123:

		$e1aa0fcc2c644398 = [];
		$Daaec03d386c8f6a = [];
		goto label4;

		label126:

		$c0d4825bdd44428f = curl_multi_exec($d344a66178d455b1, $Da8120ce4761cb4b);

		if ($c0d4825bdd44428f == CURLM_CALL_MULTI_PERFORM) {
			goto label126;
		}

		label135:

		goto label138;

		label136:

		return $e02ff34f7d898a7b;
		goto label204;

		label138:
		if (!($Da8120ce4761cb4b && ($c0d4825bdd44428f == CURLM_OK))) {
			goto label166;
		}

		if (!(curl_multi_select($d344a66178d455b1) == -1)) {
			goto label155;
		}

		usleep(50000);

		label155:

		goto label156;

		label156:

		$c0d4825bdd44428f = curl_multi_exec($d344a66178d455b1, $Da8120ce4761cb4b);

		if ($c0d4825bdd44428f == CURLM_CALL_MULTI_PERFORM) {
			goto label155;
		}

		goto label135;

		label166:

		goto label167;

		label167:

		foreach ($Daaec03d386c8f6a as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			$e02ff34f7d898a7b[$Bb672d1983256a93] = curl_multi_getcontent($ce0840c647e1bbc7);

			if (!($d7a85245907a06e7 != NULL)) {
				goto label188;
			}

			$e02ff34f7d898a7b[$Bb672d1983256a93] = call_user_func($d7a85245907a06e7, $e02ff34f7d898a7b[$Bb672d1983256a93], true);

			label188:

			curl_multi_remove_handle($d344a66178d455b1, $ce0840c647e1bbc7);
		}

		foreach ($e1aa0fcc2c644398 as $Bb672d1983256a93) {
			$e02ff34f7d898a7b[$Bb672d1983256a93] = false;
		}

		curl_multi_close($d344a66178d455b1);
		goto label136;

		label204:
	}

	static public function BEE6DcC538970dd6(&$ba2d146bb5a55097, $c40a96ec32e40497 = 0)
	{
		if (!(10 <= $c40a96ec32e40497)) {
			goto label7;
		}

		return NULL;

		label7:

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			goto label14;

			label12:

			goto label67;

			label14:

			if (is_array($ce0840c647e1bbc7)) {
				goto label59;
			}

			$ce0840c647e1bbc7 = str_replace(chr('0'), '', $ce0840c647e1bbc7);
			$ce0840c647e1bbc7 = str_replace("\0", '', $ce0840c647e1bbc7);
			$ce0840c647e1bbc7 = str_replace("\0", '', $ce0840c647e1bbc7);
			$ce0840c647e1bbc7 = str_replace('../', '&#46;&#46;/', $ce0840c647e1bbc7);
			goto label49;

			label49:

			$ce0840c647e1bbc7 = str_replace('&#8238;', '', $ce0840c647e1bbc7);
			$ba2d146bb5a55097[$Bb672d1983256a93] = $ce0840c647e1bbc7;
			goto label12;

			label59:

			self::bEe6dcc538970DD6($ba2d146bb5a55097[$Bb672d1983256a93], ++$c40a96ec32e40497);
			goto label12;

			label67:
		}
	}

	static public function e24B3d34D46068eB(&$ba2d146bb5a55097, $Eace76317d47fe26 = [], $c40a96ec32e40497 = 0)
	{
		if (!(20 <= $c40a96ec32e40497)) {
			goto label8;
		}

		return $Eace76317d47fe26;

		label8:

		if (is_array($ba2d146bb5a55097)) {
			goto label14;
		}

		return $Eace76317d47fe26;

		label14:

		foreach ($ba2d146bb5a55097 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			if (is_array($ce0840c647e1bbc7)) {
				goto label35;
			}

			$Bb672d1983256a93 = self::C9a009a333d98407($Bb672d1983256a93);
			$ce0840c647e1bbc7 = self::FdEbdb3616a89cE1($ce0840c647e1bbc7);
			$Eace76317d47fe26[$Bb672d1983256a93] = $ce0840c647e1bbc7;
			goto label44;

			label35:

			$Eace76317d47fe26[$Bb672d1983256a93] = self::e24B3D34D46068EB($ba2d146bb5a55097[$Bb672d1983256a93], [], $c40a96ec32e40497 + 1);

			label44:
		}

		return $Eace76317d47fe26;
	}

	static public function C9A009A333D98407($Bb672d1983256a93)
	{
		if (!($Bb672d1983256a93 === '')) {
			goto label6;
		}

		return '';

		label6:

		$Bb672d1983256a93 = htmlspecialchars(urldecode($Bb672d1983256a93));
		$Bb672d1983256a93 = str_replace('..', '', $Bb672d1983256a93);
		$Bb672d1983256a93 = preg_replace('/\\_\\_(.+?)\\_\\_/', '', $Bb672d1983256a93);
		return preg_replace('/^([\\w\\.\\-\\_]+)$/', '$1', $Bb672d1983256a93);
	}

	static public function FDeBDb3616A89ce1($ce0840c647e1bbc7)
	{
		goto label2;

		label2:

		if (!($ce0840c647e1bbc7 == '')) {
			goto label7;
		}

		return '';

		label7:

		$ce0840c647e1bbc7 = str_replace('&#032;', ' ', stripslashes($ce0840c647e1bbc7));
		$ce0840c647e1bbc7 = str_replace(["\r\n", "\n\r", "\r"], "\n", $ce0840c647e1bbc7);
		goto label28;

		label23:

		return trim($ce0840c647e1bbc7);
		goto label59;

		label28:

		$ce0840c647e1bbc7 = str_replace('<!--', '&#60;&#33;--', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = str_replace('-->', '--&#62;', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = str_ireplace('<script', '&#60;script', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = preg_replace('/&amp;#([0-9]+);/s', '&#\\1;', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = preg_replace('/&#(\\d+?)([^\\d;])/i', '&#\\1;\\2', $ce0840c647e1bbc7);
		goto label23;

		label59:
	}

	static public function fC023cD5aAfC77f3($A7d54b094ae83c95, $cef8ac5fe6153726, $dfee9ca8292e4734 = '', $F5ba2106d5227309 = 0)
	{
		if (!((stripos($dfee9ca8292e4734, 'panel_logs') === false) && (stripos($cef8ac5fe6153726, 'timeout exceeded') === false) && (stripos($cef8ac5fe6153726, 'lock wait timeout') === false) && (stripos($cef8ac5fe6153726, 'duplicate entry') === false))) {
			goto label39;
		}

		panelLog($A7d54b094ae83c95, $cef8ac5fe6153726, $dfee9ca8292e4734, $F5ba2106d5227309);

		label39:
	}

	static public function aE400Ee4D91071a5($Fc7fdb080dbcd39f = 10)
	{
		goto label18;

		label2:

		return $e5ed22dc86d465a8;
		goto label27;

		label4:

		if (!($df6991d59f367c7e < $Fc7fdb080dbcd39f)) {
			goto label2;
		}

		$e5ed22dc86d465a8 .= $A545d770b42f7e1b[rand(0, $a19cea75625f6914)];
		$df6991d59f367c7e++;
		goto label26;
		goto label2;

		label18:

		$A545d770b42f7e1b = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789qwertyuiopasdfghjklzxcvbnm';
		$e5ed22dc86d465a8 = '';
		$a19cea75625f6914 = strlen($A545d770b42f7e1b) - 1;
		$df6991d59f367c7e = 0;

		label26:

		goto label4;

		label27:
	}

	static public function c7B767C317f00408($F647a429f8089f01)
	{
		if (is_array($F647a429f8089f01)) {
			goto label7;
		}

		return $F647a429f8089f01;

		label7:

		$B3fcb793038606a0 = [];

		foreach ($F647a429f8089f01 as $ce0840c647e1bbc7) {
			if (is_scalar($ce0840c647e1bbc7) || is_resource($ce0840c647e1bbc7)) {
				goto label38;
			}

			if (!is_array($ce0840c647e1bbc7)) {
				goto label36;
			}

			$B3fcb793038606a0 = array_merge($B3fcb793038606a0, self::c7B767C317f00408($ce0840c647e1bbc7));

			label36:

			goto label40;

			label38:

			$B3fcb793038606a0[] = $ce0840c647e1bbc7;

			label40:
		}

		return $B3fcb793038606a0;
	}

	static public function F66a691382b23b0B()
	{
		$f284dbe435ee25e6 = 0;
		exec('df | grep tmpfs', $d094d3e133ec8c03);

		foreach ($d094d3e133ec8c03 as $F5ba2106d5227309) {
			$E3665d09b9cea208 = explode(' ', preg_replace('!\\s+!', ' ', $F5ba2106d5227309));

			if (!($E3665d09b9cea208[0] == 'tmpfs')) {
				goto label28;
			}

			$f284dbe435ee25e6 += intval($E3665d09b9cea208[2]);

			label28:
		}

		return $f284dbe435ee25e6;
	}

	static public function aFf015C358EB0964()
	{
		goto label37;

		label1:

		$F36e7d4d6716c100['gpu_info'] = self::b495d28428f94791();

		label5:

		if (!shell_exec('which v4l2-ctl')) {
			goto label15;
		}

		$F36e7d4d6716c100['video_devices'] = self::efa8C571Da8D379B();

		label15:

		goto label186;

		label16:

		$c6d2892f7e67d9a3 = intval($De8b7c956a7b60de[2]);
		$F33eb31ff5ac8357 = intval($De8b7c956a7b60de[1]);
		$F36e7d4d6716c100['total_mem'] = $F33eb31ff5ac8357;
		$F36e7d4d6716c100['total_mem_free'] = $F33eb31ff5ac8357 - $c6d2892f7e67d9a3;
		$F36e7d4d6716c100['total_mem_used'] = $c6d2892f7e67d9a3 + self::f66a691382b23B0B();
		goto label151;

		label37:

		$F36e7d4d6716c100 = [];
		$F36e7d4d6716c100['cpu'] = round(self::BA138d74BdEf4e80(), 2);
		$F36e7d4d6716c100['cpu_cores'] = intval(shell_exec('cat /proc/cpuinfo | grep "^processor" | wc -l'));
		$F36e7d4d6716c100['cpu_avg'] = round((sys_getloadavg()[0] * 100) / ($F36e7d4d6716c100['cpu_cores'] ?: 1), 2);
		$F36e7d4d6716c100['cpu_name'] = trim(shell_exec('cat /proc/cpuinfo | grep \'model name\' | uniq | awk -F: \'{print $2}\''));
		goto label77;

		label77:

		if (!(100 < $F36e7d4d6716c100['cpu_avg'])) {
			goto label84;
		}

		$F36e7d4d6716c100['cpu_avg'] = 100;

		label84:

		$c9d6fd0f1be59680 = explode("\n", trim(shell_exec('free')));
		$De8b7c956a7b60de = preg_split('/[\\s]+/', $c9d6fd0f1be59680[1]);
		goto label16;

		label102:

		$F36e7d4d6716c100['network_speed'] = 0;
		$F36e7d4d6716c100['interfaces'] = self::d9aD43d1024F9cec();
		$F36e7d4d6716c100['network_speed'] = 0;

		if (!(100 < $F36e7d4d6716c100['cpu'])) {
			goto label136;
		}

		$F36e7d4d6716c100['cpu'] = 100;
		goto label136;

		label118:

		$F36e7d4d6716c100['total_running_streams'] = (int) trim(shell_exec('ps ax | grep -v grep | grep -c ffmpeg'));
		$F36e7d4d6716c100['bytes_sent'] = 0;
		$F36e7d4d6716c100['bytes_sent_total'] = 0;
		$F36e7d4d6716c100['bytes_received'] = 0;
		$F36e7d4d6716c100['bytes_received_total'] = 0;
		goto label102;

		label136:

		if (!($F36e7d4d6716c100['total_mem'] < $F36e7d4d6716c100['total_mem_used'])) {
			goto label145;
		}

		$F36e7d4d6716c100['total_mem_used'] = $F36e7d4d6716c100['total_mem'];

		label145:

		if (!(100 < $F36e7d4d6716c100['total_mem_used_percent'])) {
			goto label230;
		}

		goto label228;

		label151:

		$F36e7d4d6716c100['total_mem_used_percent'] = round(($F36e7d4d6716c100['total_mem_used'] / $F36e7d4d6716c100['total_mem']) * 100, 2);
		$F36e7d4d6716c100['total_disk_space'] = disk_total_space(XUI_HOME);
		$F36e7d4d6716c100['free_disk_space'] = disk_free_space(XUI_HOME);
		$F36e7d4d6716c100['kernel'] = trim(shell_exec('uname -r'));
		$F36e7d4d6716c100['uptime'] = self::ee1a1bfD48615d6C();
		goto label118;

		label186:

		if (!shell_exec('which arecord')) {
			goto label196;
		}

		$F36e7d4d6716c100['audio_devices'] = self::e1E13aED68E60F51();

		label196:

		$F36e7d4d6716c100['cpu_load_average'] = sys_getloadavg()[0];
		return $F36e7d4d6716c100;
		goto label332;

		label203:

		$F36e7d4d6716c100['iostat_info'] = $F36e7d4d6716c100['gpu_info'] = $F36e7d4d6716c100['video_devices'] = $F36e7d4d6716c100['audio_devices'] = [];

		if (!shell_exec('which iostat')) {
			goto label221;
		}

		$F36e7d4d6716c100['iostat_info'] = self::a11f4D5d89da5821();

		label221:

		if (!shell_exec('which nvidia-smi')) {
			goto label5;
		}

		goto label1;

		label228:

		$F36e7d4d6716c100['total_mem_used_percent'] = 100;

		label230:

		$F36e7d4d6716c100['network_info'] = XUI::getNetwork(self::$rServers[SERVER_ID]['network_interface'] == 'auto' ? NULL : self::$rServers[SERVER_ID]['network_interface']);

		foreach ($F36e7d4d6716c100['network_info'] as $B6de2c76015b2174 => $ba2d146bb5a55097) {
			goto label296;

			label254:

			$F36e7d4d6716c100['bytes_sent_total'] = intval(trim(file_get_contents('/sys/class/net/' . $B6de2c76015b2174 . '/statistics/tx_bytes'))) ?: 0;
			$F36e7d4d6716c100['bytes_received_total'] = intval(trim(file_get_contents('/sys/class/net/' . $B6de2c76015b2174 . '/statistics/tx_bytes'))) ?: 0;
			$F36e7d4d6716c100['bytes_sent'] += $ba2d146bb5a55097['out_bytes'];
			$F36e7d4d6716c100['bytes_received'] += $ba2d146bb5a55097['in_bytes'];
			goto label294;

			label294:

			goto label329;

			label296:

			if (!file_exists('/sys/class/net/' . $B6de2c76015b2174 . '/speed')) {
				goto label254;
			}

			$cfa1a4e7c0db9986 = intval(file_get_contents('/sys/class/net/' . $B6de2c76015b2174 . '/speed'));
			if (!((0 < $cfa1a4e7c0db9986) && ($F36e7d4d6716c100['network_speed'] == 0))) {
				goto label327;
			}

			$F36e7d4d6716c100['network_speed'] = $cfa1a4e7c0db9986;

			label327:

			goto label254;

			label329:
		}

		goto label203;

		label332:
	}

	static public function D9AD43d1024f9cEC()
	{
		$B9869413eae86beb = [];
		exec('ls /sys/class/net/', $d094d3e133ec8c03, $ced57d71bc7400ec);

		foreach ($d094d3e133ec8c03 as $B6de2c76015b2174) {
			$B6de2c76015b2174 = trim(rtrim($B6de2c76015b2174, ':'));
			if (!(($B6de2c76015b2174 != 'lo') && (substr($B6de2c76015b2174, 0, 4) != 'bond'))) {
				goto label31;
			}

			$B9869413eae86beb[] = $B6de2c76015b2174;

			label31:
		}

		return $B9869413eae86beb;
	}

	static public function efa8C571DA8D379B()
	{
		$B9869413eae86beb = [];
		$Abcb228699a7f743 = 0;

		try {
			$e902d00b48fba8a8 = array_values(array_filter(explode("\n", shell_exec('v4l2-ctl --list-devices'))));

			if (!is_array($e902d00b48fba8a8)) {
				goto label48;
			}

			foreach ($e902d00b48fba8a8 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
				if (!(($Bb672d1983256a93 % 2) == 0)) {
					goto label46;
				}

				$B9869413eae86beb[$Abcb228699a7f743]['name'] = $ce0840c647e1bbc7;
				$B9869413eae86beb[$Abcb228699a7f743]['video_device'] = explode('/dev/', $e902d00b48fba8a8[$Bb672d1983256a93 + 1])[1];
				$Abcb228699a7f743++;

				label46:
			}
		}
		catch (Exception $E0f0519e12b13b6b) {
		}

		return $B9869413eae86beb;
	}

	static public function E1e13AEd68e60F51()
	{
		try {
			return array_filter(explode("\n", shell_exec('arecord -L | grep "hw:CARD="')));
		}
		catch (Exception $E0f0519e12b13b6b) {
			return [];
		}
	}

	static public function a11F4d5D89Da5821()
	{
		exec('iostat -o JSON -m', $d094d3e133ec8c03, $ced57d71bc7400ec);
		$d094d3e133ec8c03 = implode('', $d094d3e133ec8c03);
		$F36e7d4d6716c100 = json_decode($d094d3e133ec8c03, true);

		if (isset($F36e7d4d6716c100['sysstat'])) {
			goto label20;
		}

		return [];
		goto label26;

		label20:

		return $F36e7d4d6716c100['sysstat']['hosts'][0]['statistics'][0];

		label26:
	}

	static public function B495d28428f94791()
	{
		goto label70;

		label1:

		$Fbd977da339c16e3 = [
			'attached_gpus'  => $F36e7d4d6716c100['attached_gpus'],
			'driver_version' => $F36e7d4d6716c100['driver_version'],
			'cuda_version'   => $F36e7d4d6716c100['cuda_version'],
			'gpus'           => []
		];

		if (!isset($F36e7d4d6716c100['gpu']['board_id'])) {
			goto label18;
		}

		$F36e7d4d6716c100['gpu'] = [$F36e7d4d6716c100['gpu']];

		label18:

		foreach ($F36e7d4d6716c100['gpu'] as $D85ea588b481c21b) {
			$F647a429f8089f01 = [
				'name'           => $D85ea588b481c21b['product_name'],
				'power_readings' => $D85ea588b481c21b['power_readings'],
				'utilisation'    => $D85ea588b481c21b['utilization'],
				'memory_usage'   => $D85ea588b481c21b['fb_memory_usage'],
				'fan_speed'      => $D85ea588b481c21b['fan_speed'],
				'temperature'    => $D85ea588b481c21b['temperature'],
				'clocks'         => $D85ea588b481c21b['clocks'],
				'uuid'           => $D85ea588b481c21b['uuid'],
				'id'             => intval($D85ea588b481c21b['pci']['pci_device']),
				'processes'      => []
			];

			foreach ($D85ea588b481c21b['processes']['process_info'] as $d0bf680e3271ee34) {
				$F647a429f8089f01['processes'][] = ['pid' => intval($d0bf680e3271ee34['pid']), 'memory' => $d0bf680e3271ee34['used_memory']];
			}

			$Fbd977da339c16e3['gpus'][] = $F647a429f8089f01;
		}

		goto label67;

		label67:

		return $Fbd977da339c16e3;

		label68:

		return [];
		goto label104;

		label70:

		exec('nvidia-smi -x -q', $d094d3e133ec8c03, $ced57d71bc7400ec);
		$d094d3e133ec8c03 = implode('', $d094d3e133ec8c03);

		if (!(stripos($d094d3e133ec8c03, '<?xml') !== false)) {
			goto label68;
		}

		$F36e7d4d6716c100 = json_decode(json_encode(simplexml_load_string($d094d3e133ec8c03)), true);

		if (!isset($F36e7d4d6716c100['driver_version'])) {
			goto label68;
		}

		goto label1;

		label104:
	}

	static public function dF5fF7B084990190($F647a429f8089f01, $Bb672d1983256a93, $ce0840c647e1bbc7)
	{
		$e02ff34f7d898a7b = [];
		self::abFCC2b0B542B879($F647a429f8089f01, $Bb672d1983256a93, $ce0840c647e1bbc7, $e02ff34f7d898a7b);
		return $e02ff34f7d898a7b;
	}

	static public function AbFcc2b0b542b879($F647a429f8089f01, $Bb672d1983256a93, $ce0840c647e1bbc7, &$e02ff34f7d898a7b)
	{
		if (is_array($F647a429f8089f01)) {
			goto label10;
		}

		return NULL;

		label10:
		if (!(isset($F647a429f8089f01[$Bb672d1983256a93]) && ($F647a429f8089f01[$Bb672d1983256a93] == $ce0840c647e1bbc7))) {
			goto label20;
		}

		$e02ff34f7d898a7b[] = $F647a429f8089f01;

		label20:

		foreach ($F647a429f8089f01 as $f9b18348dc530e95) {
			self::aBfcc2b0b542b879($f9b18348dc530e95, $Bb672d1983256a93, $ce0840c647e1bbc7, $e02ff34f7d898a7b);
		}
	}

	static public function a3cf732C257BD804($F48d5724f3b4ec96, $Ab13f2545dd3df14 = 1800)
	{
		goto label17;

		label3:
		if (!(is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
			goto label16;
		}

		posix_kill($C98e11437faf4199, 9);

		label16:

		goto label49;

		label17:

		if (!file_exists($F48d5724f3b4ec96)) {
			goto label49;
		}

		$C98e11437faf4199 = trim(file_get_contents($F48d5724f3b4ec96));

		if (!file_exists('/proc/' . $C98e11437faf4199)) {
			goto label16;
		}

		if (!((time() - filemtime($F48d5724f3b4ec96)) < $Ab13f2545dd3df14)) {
			goto label3;
		}

		exit('Running...');
		goto label3;

		label49:

		file_put_contents($F48d5724f3b4ec96, getmypid());
		return false;
		goto label57;

		label57:
	}

	static public function AEEA5D3137274F80($b38e11ffdc6a3abb = NULL)
	{
		goto label136;

		label2:

		if (!in_array($b38e11ffdc6a3abb, $d60462706e4336d6)) {
			goto label10;
		}

		return NULL;

		label10:

		$f6ff4010830f506a = FLOOD_TMP_PATH . $b38e11ffdc6a3abb;

		if (file_exists($f6ff4010830f506a)) {
			goto label59;
		}

		goto label45;

		label19:

		$D8bc2d87364696dd = self::$rSettings['flood_limit'];

		if ((time() - $a0ad81cfc6461351['last_request']) <= $dadc1de464d1afa3) {
			goto label150;
		}

		$a0ad81cfc6461351['requests'] = 0;
		$a0ad81cfc6461351['last_request'] = time();
		file_put_contents($f6ff4010830f506a, json_encode($a0ad81cfc6461351), LOCK_EX);
		goto label149;

		label45:

		file_put_contents($f6ff4010830f506a, json_encode(['requests' => 0, 'last_request' => time()]), LOCK_EX);
		goto label71;

		label59:

		$a0ad81cfc6461351 = json_decode(file_get_contents($f6ff4010830f506a), true);
		$dadc1de464d1afa3 = self::$rSettings['flood_seconds'];
		goto label19;

		label71:

		goto label166;

		label72:

		return NULL;

		label73:

		$a0ad81cfc6461351['last_request'] = time();
		file_put_contents($f6ff4010830f506a, json_encode($a0ad81cfc6461351), LOCK_EX);

		label86:

		goto label71;

		label87:

		self::$db->query('INSERT INTO `blocked_ips` (`ip`,`notes`,`date`) VALUES(?,?,?)', $b38e11ffdc6a3abb, 'FLOOD ATTACK', time());
		self::$rBlockedIPs = self::AB69ECD4D7705061();

		label100:

		touch(FLOOD_TMP_PATH . 'block_' . $b38e11ffdc6a3abb);
		unlink($f6ff4010830f506a);
		goto label72;

		label110:
		if (!(empty($b38e11ffdc6a3abb) || in_array($b38e11ffdc6a3abb, self::$rAllowedIPs))) {
			goto label122;
		}

		return NULL;

		label122:

		$d60462706e4336d6 = array_filter(array_unique(explode(',', self::$rSettings['flood_ips_exclude'])));
		goto label2;

		label136:

		if (!(self::$rSettings['flood_limit'] == 0)) {
			goto label143;
		}

		return NULL;

		label143:

		if ($b38e11ffdc6a3abb) {
			goto label110;
		}

		$b38e11ffdc6a3abb = self::AD72b4259CA295b2();
		goto label110;

		label149:

		goto label86;

		label150:

		$a0ad81cfc6461351['requests']++;

		if (!($D8bc2d87364696dd <= $a0ad81cfc6461351['requests'])) {
			goto label73;
		}

		if (in_array($b38e11ffdc6a3abb, self::$rBlockedIPs)) {
			goto label100;
		}

		goto label87;

		label166:
	}

	static public function a1FeF6439C28608e($b38e11ffdc6a3abb = NULL, $aa85eafe0b5a88a4 = NULL, $ff5cf44f96903d64 = NULL)
	{
		goto label131;

		label4:

		$f23658ae5c2456c3 = (!is_null($aa85eafe0b5a88a4) ? $aa85eafe0b5a88a4 : $ff5cf44f96903d64);
		$f6ff4010830f506a = FLOOD_TMP_PATH . $b38e11ffdc6a3abb . '_' . $ed4486f6114caf96;

		if (file_exists($f6ff4010830f506a)) {
			goto label182;
		}

		$a0ad81cfc6461351 = [
			'attempts' => [$f23658ae5c2456c3 => time()]
		];
		file_put_contents($f6ff4010830f506a, json_encode($a0ad81cfc6461351), LOCK_EX);
		goto label181;

		label38:

		goto label204;

		label39:

		$b38e11ffdc6a3abb = self::AD72B4259CA295B2();

		label42:
		if (!(empty($b38e11ffdc6a3abb) || in_array($b38e11ffdc6a3abb, self::$rAllowedIPs))) {
			goto label54;
		}

		return NULL;

		label54:

		goto label100;

		label55:

		$a0ad81cfc6461351['attempts'] = self::badBC06fA73a156D($a0ad81cfc6461351['attempts'], $dadc1de464d1afa3);

		if (in_array($f23658ae5c2456c3, array_keys($a0ad81cfc6461351['attempts']))) {
			goto label38;
		}

		$a0ad81cfc6461351['attempts'][$f23658ae5c2456c3] = time();

		if (!($D8bc2d87364696dd <= count($a0ad81cfc6461351['attempts']))) {
			goto label171;
		}

		self::$db->query('INSERT INTO `blocked_ips` (`ip`,`notes`,`date`) VALUES(?,?,?)', $b38e11ffdc6a3abb, 'BRUTEFORCE ' . strtoupper($ed4486f6114caf96) . ' ATTACK', time());
		goto label161;

		label100:

		$d60462706e4336d6 = array_filter(array_unique(explode(',', self::$rSettings['flood_ips_exclude'])));

		if (!in_array($b38e11ffdc6a3abb, $d60462706e4336d6)) {
			goto label121;
		}

		return NULL;

		label121:

		$ed4486f6114caf96 = (!is_null($aa85eafe0b5a88a4) ? 'mac' : 'user');
		goto label4;

		label131:
		if (!(!$aa85eafe0b5a88a4 && !$ff5cf44f96903d64)) {
			goto label139;
		}

		return NULL;

		label139:
		if (!($aa85eafe0b5a88a4 && (self::$rSettings['bruteforce_mac_attempts'] == 0))) {
			goto label149;
		}

		return NULL;
		goto label149;

		label149:
		if (!($ff5cf44f96903d64 && (self::$rSettings['bruteforce_username_attempts'] == 0))) {
			goto label158;
		}

		return NULL;

		label158:

		if ($b38e11ffdc6a3abb) {
			goto label42;
		}

		goto label39;

		label161:

		touch(FLOOD_TMP_PATH . 'block_' . $b38e11ffdc6a3abb);
		unlink($f6ff4010830f506a);
		return NULL;

		label171:

		file_put_contents($f6ff4010830f506a, json_encode($a0ad81cfc6461351), LOCK_EX);
		goto label38;

		label181:

		goto label38;

		label182:

		$a0ad81cfc6461351 = json_decode(file_get_contents($f6ff4010830f506a), true);
		$dadc1de464d1afa3 = intval(self::$rSettings['bruteforce_frequency']);
		$D8bc2d87364696dd = intval(self::$rSettings[['mac' => 'bruteforce_mac_attempts', 'user' => 'bruteforce_username_attempts'][$ed4486f6114caf96]]);
		goto label55;

		label204:
	}

	static public function bAdbC06fa73a156d($d855b0cead9260ca, $Accb2708b2cf19a7, $Cf6971a7f2ab0752 = false)
	{
		goto label18;

		label4:

		goto label17;

		label5:

		foreach ($d855b0cead9260ca as $Beefeeeb4086cb7f) {
			if (!(($Ab13f2545dd3df14 - $Beefeeeb4086cb7f) <= $Accb2708b2cf19a7)) {
				goto label15;
			}

			$B7f682eab31f6322[] = $Beefeeeb4086cb7f;

			label15:
		}

		label17:

		goto label38;

		label18:

		$B7f682eab31f6322 = [];
		$Ab13f2545dd3df14 = time();

		if ($Cf6971a7f2ab0752) {
			goto label5;
		}

		foreach ($d855b0cead9260ca as $a4a80a5d096c0345 => $Beefeeeb4086cb7f) {
			if (!(($Ab13f2545dd3df14 - $Beefeeeb4086cb7f) <= $Accb2708b2cf19a7)) {
				goto label35;
			}

			$B7f682eab31f6322[$a4a80a5d096c0345] = $Beefeeeb4086cb7f;

			label35:
		}

		goto label4;

		label38:

		return $B7f682eab31f6322;
		goto label40;

		label40:
	}

	static public function Ba138D74bDEF4e80()
	{
		$B207562e3519bb40 = 0;
		exec('ps -Ao pid,pcpu', $ceeab59dd97cdafc);

		foreach ($ceeab59dd97cdafc as $Dd4abeed771c5e4e) {
			$D53f80536ad41136 = explode(' ', preg_replace('!\\s+!', ' ', trim($Dd4abeed771c5e4e)));
			$B207562e3519bb40 += floatval($D53f80536ad41136[1]);
		}

		return $B207562e3519bb40 / intval(shell_exec('grep -P \'^processor\' /proc/cpuinfo|wc -l'));
	}

	static public function c721BD954a5F072f($A7d54b094ae83c95 = NULL, $ebb4852f69f0dca0 = false)
	{
		goto label27;

		label3:

		self::$db->query('SELECT t1.* FROM `streams_categories` t1 ORDER BY t1.cat_order ASC');
		$F771d40e8cf51e59 = (0 < self::$db->num_rows() ? self::$db->get_rows(true, 'id') : []);
		self::f7A8933150230eaB('categories', $F771d40e8cf51e59);
		goto label44;

		label26:

		goto label66;

		label27:

		if (is_string($A7d54b094ae83c95)) {
			goto label46;
		}

		if ($ebb4852f69f0dca0) {
			goto label3;
		}

		$A66eee85d9566710 = self::E74A9a4510c4FFE4('categories', 20);

		if (empty($A66eee85d9566710)) {
			goto label3;
		}

		return $A66eee85d9566710;
		goto label3;

		label44:

		return $F771d40e8cf51e59;
		goto label26;

		label46:

		self::$db->query('SELECT t1.* FROM `streams_categories` t1 WHERE t1.category_type = ? GROUP BY t1.id ORDER BY t1.cat_order ASC', $A7d54b094ae83c95);
		return 0 < self::$db->num_rows() ? self::$db->get_rows(true, 'id') : [];
		goto label26;

		label66:
	}

	static public function a336B0dAd3EaF634()
	{
		return substr(md5(self::$rSettings['live_streaming_pass']), 0, 15);
	}

	static public function b610A1487350b689($Bd6a1628ef63931f)
	{
		goto label41;

		label2:

		$A486d2019332744a += $c99954774a4fb4f5 + 1;
		$ba2d146bb5a55097 = igbinary_unserialize(substr($Bd6a1628ef63931f, $A486d2019332744a));
		$B9869413eae86beb[$bf4ef3d164ec4dff] = $ba2d146bb5a55097;
		$A486d2019332744a += strlen(igbinary_serialize($ba2d146bb5a55097));
		goto label43;
		goto label39;

		label23:

		return [];

		label24:

		$E3db112882c72421 = strpos($Bd6a1628ef63931f, '|', $A486d2019332744a);
		$c99954774a4fb4f5 = $E3db112882c72421 - $A486d2019332744a;
		$bf4ef3d164ec4dff = substr($Bd6a1628ef63931f, $A486d2019332744a, $c99954774a4fb4f5);
		goto label2;

		label39:

		return $B9869413eae86beb;
		goto label61;

		label41:

		$B9869413eae86beb = [];
		$A486d2019332744a = 0;

		label43:

		if (!($A486d2019332744a < strlen($Bd6a1628ef63931f))) {
			goto label39;
		}

		if (strstr(substr($Bd6a1628ef63931f, $A486d2019332744a), '|')) {
			goto label24;
		}

		goto label23;

		label61:
	}

	static public function A7CF79752B1Ae214($E59d0debc75e7be8, $C40c179de6ba94af, $ad7ee38ca629358c = 'ts', $d7f8ec73fe5d64c5 = NULL, $a7c147e53ad84ee6 = false, $A1f381c3d6825384 = false)
	{
		goto label1829;

		label7:

		foreach (array_chunk($deec1aac68da5dbb, 1000) as $ce4a207d565929f5) {
			goto label15;

			label15:
			if (self::$rSettings['playlist_from_mysql'] || !self::$rCached) {
				goto label750;
			}

			$D8e7681dfae2905b = [];

			foreach ($ce4a207d565929f5 as $Abcb228699a7f743) {
				$D8e7681dfae2905b[] = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($Abcb228699a7f743)))['info'];
			}

			goto label778;
			goto label750;

			label48:

			foreach ($D8e7681dfae2905b as $aa4e95f1ed1932a8) {
				goto label633;

				label53:

				$a998abd856b07a59 = str_replace('xui-id="{XUI_ID}" ', '', $a998abd856b07a59);

				label59:
				if (!((0 < $aa4e95f1ed1932a8['tv_archive_server_id']) && (0 < $aa4e95f1ed1932a8['tv_archive_duration']))) {
					goto label82;
				}

				$a998abd856b07a59 = str_replace('#EXTINF:-1 ', '#EXTINF:-1 timeshift="' . intval($aa4e95f1ed1932a8['tv_archive_duration']) . '" ', $a998abd856b07a59);

				label82:

				goto label151;

				label85:

				$A7ca171405b19571 = $aa049d3d6d423a70 . ($aa4e95f1ed1932a8['type_output'] . '/' . $E59d0debc75e7be8['access_token'] . '/' . $aa4e95f1ed1932a8['id'] . '.' . $aa4e95f1ed1932a8['target_container']);

				label98:

				if (empty($Ccbdf03f8a4df633['movie_image'])) {
					goto label105;
				}

				$B080674c55093935 = $Ccbdf03f8a4df633['movie_image'];

				label105:

				goto label375;

				label108:

				$C082ca9ed03f473c = $B075a4c00323e8f8[array_rand($B075a4c00323e8f8, 1)];

				label114:

				goto label122;

				label117:

				goto label120;

				label120:

				$C082ca9ed03f473c = $E59d0debc75e7be8['force_server_id'];

				label122:

				if (strlen($E59d0debc75e7be8['access_token']) == 32) {
					goto label661;
				}

				if ($C0b8e6f4de700ad2) {
					goto label545;
				}

				$A7ca171405b19571 = self::$rServers[$C082ca9ed03f473c]['rtmp_server'] . ($aa4e95f1ed1932a8['id'] . '?username=' . $E59d0debc75e7be8['username'] . '&password=' . $E59d0debc75e7be8['password']);
				goto label542;

				label151:

				$Ccbdf03f8a4df633 = (!is_array($aa4e95f1ed1932a8['movie_properties']) ? json_decode($aa4e95f1ed1932a8['movie_properties'], true) : $aa4e95f1ed1932a8['movie_properties']);

				if ($aa4e95f1ed1932a8['type_key'] == 'series') {
					goto label501;
				}

				$aa4e95f1ed1932a8['stream_display_name'] = self::cF5d4A2F3DE8982C($aa4e95f1ed1932a8['stream_display_name'], $aa4e95f1ed1932a8['year']);
				goto label350;
				goto label501;

				label187:

				$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, self::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
				$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b . '#.') . $aa4e95f1ed1932a8['target_container'];

				label203:

				goto label98;

				label206:

				goto label85;

				label209:

				if ($C0b8e6f4de700ad2) {
					goto label232;
				}

				$A7ca171405b19571 = $aa049d3d6d423a70 . ($aa4e95f1ed1932a8['type_output'] . '/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $aa4e95f1ed1932a8['id'] . '.' . $aa4e95f1ed1932a8['target_container']);
				goto label203;

				label232:

				$Ccbe1c85185d3717 = $aa4e95f1ed1932a8['type_output'] . '/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $aa4e95f1ed1932a8['id'] . '/' . $aa4e95f1ed1932a8['target_container'];
				goto label187;

				label250:

				$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b . '/' . $F0950fa4fdd70068);
				goto label263;

				label259:

				$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b);

				label263:

				goto label690;

				label266:

				$A7ca171405b19571 = $aa049d3d6d423a70 . ($E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $aa4e95f1ed1932a8['id'] . '.' . $F0950fa4fdd70068);
				goto label291;

				label281:

				$A7ca171405b19571 = $aa049d3d6d423a70 . ($E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $aa4e95f1ed1932a8['id']);

				label291:

				goto label597;

				label294:

				$B080674c55093935 = $aa4e95f1ed1932a8['stream_icon'];
				goto label375;

				label299:

				if (strlen($E59d0debc75e7be8['access_token']) == 32) {
					goto label206;
				}

				goto label209;

				label311:

				$B075a4c00323e8f8 = array_values(array_keys($f15ae92bd2a0b6af[$aa4e95f1ed1932a8['id']]));

				if (in_array($E59d0debc75e7be8['force_server_id'], $B075a4c00323e8f8)) {
					goto label117;
				}

				if (self::$rSettings['rtmp_random'] == 1) {
					goto label108;
				}

				$C082ca9ed03f473c = $B075a4c00323e8f8[0];
				goto label114;
				goto label108;

				label344:

				$aa4e95f1ed1932a8['type_output'] = 'series';
				$aa4e95f1ed1932a8['category_id'] = $E84de30ab6e5b0c1[$E6f758b9be57a931]['category_id'];

				label350:

				if ($aa4e95f1ed1932a8['live'] == 0) {
					goto label299;
				}
				if (($ad7ee38ca629358c != 'rtmp') || !array_key_exists($aa4e95f1ed1932a8['id'], $f15ae92bd2a0b6af)) {
					goto label720;
				}

				goto label311;

				label372:

				goto label745;

				label375:

				$f0cdc05cced2ce10 = ($aa4e95f1ed1932a8['live'] == 1 ? 1 : 4097);
				$Cf9afd442cc40b3d = (!empty($aa4e95f1ed1932a8['custom_sid']) ? $aa4e95f1ed1932a8['custom_sid'] : ':0:1:0:0:0:0:0:0:0:');
				$F05acfe4a87b8eb0 = json_decode($aa4e95f1ed1932a8['category_id'], true);

				foreach ($F05acfe4a87b8eb0 as $fe63f70cd74f3298) {
					goto label428;

					label402:

					echo $ba2d146bb5a55097;
					unset($ba2d146bb5a55097);

					if (!(stripos($d1f284eb9d636fef['device_conf'], '{CATEGORY}') === false)) {
						goto label420;
					}

					goto label372;

					label420:

					goto label424;

					label424:

					goto label496;

					label428:

					if (!isset(self::$rCategories[$fe63f70cd74f3298])) {
						goto label424;
					}

					$ba2d146bb5a55097 = str_replace(['&lt;', '&gt;'], ['<', '>'], str_replace([$E5f5fbcd0c39ff43, '{ESR_ID}', '{SID}', '{CHANNEL_NAME}', '{CHANNEL_ID}', '{XUI_ID}', '{CATEGORY}', '{CHANNEL_ICON}'], [str_replace($E989fd5d5b5ac766, array_map('urlencode', $E989fd5d5b5ac766), $A7ca171405b19571), $f0cdc05cced2ce10, $Cf9afd442cc40b3d, $aa4e95f1ed1932a8['stream_display_name'], $aa4e95f1ed1932a8['channel_id'], $aa4e95f1ed1932a8['id'], self::$rCategories[$fe63f70cd74f3298]['category_name'], self::FcA722697178454b($B080674c55093935)], $a998abd856b07a59)) . "\r\n";

					if (!$A094dc919f41225f) {
						goto label492;
					}

					fwrite($A094dc919f41225f, $ba2d146bb5a55097);

					label492:

					goto label402;

					label496:
				}

				goto label372;

				label501:

				$E6f758b9be57a931 = $bfd80cda92d4303a[$aa4e95f1ed1932a8['id']];
				$aa4e95f1ed1932a8['live'] = 0;
				$aa4e95f1ed1932a8['stream_display_name'] = $E84de30ab6e5b0c1[$E6f758b9be57a931]['title'] . ' S' . sprintf('%02d', $aab84fb0c3e4fd47[$aa4e95f1ed1932a8['id']][0]) . 'E' . sprintf('%02d', $aab84fb0c3e4fd47[$aa4e95f1ed1932a8['id']][1]);
				$aa4e95f1ed1932a8['movie_properties'] = ['movie_image' => !empty($Ccbdf03f8a4df633['movie_image']) ? $Ccbdf03f8a4df633['movie_image'] : $E84de30ab6e5b0c1['cover']];
				goto label344;

				label542:

				goto label658;

				label545:

				$Ccbe1c85185d3717 = $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'];
				$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, self::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
				$A7ca171405b19571 = self::$rServers[$C082ca9ed03f473c]['rtmp_server'] . ($aa4e95f1ed1932a8['id'] . '?token=' . $B259c62825689c1b);
				goto label658;

				label572:

				if (!($d1f284eb9d636fef['device_key'] == 'm3u_plus')) {
					goto label151;
				}

				if ($aa4e95f1ed1932a8['live']) {
					goto label590;
				}

				$a998abd856b07a59 = str_replace('tvg-id="{CHANNEL_ID}" ', '', $a998abd856b07a59);

				label590:

				if ($C0b8e6f4de700ad2) {
					goto label59;
				}

				goto label53;

				label597:

				goto label690;

				label600:

				$Ccbe1c85185d3717 = $aa4e95f1ed1932a8['type_output'] . '/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/' . $aa4e95f1ed1932a8['id'];
				$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, self::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
				if (self::$rSettings['cloudflare'] && ($F0950fa4fdd70068 == 'ts')) {
					goto label259;
				}

				goto label250;

				label633:
				if (!(!$d7f8ec73fe5d64c5 || in_array($aa4e95f1ed1932a8['type_output'], $d7f8ec73fe5d64c5))) {
					goto label372;
				}

				if ($aa4e95f1ed1932a8['target_container']) {
					goto label653;
				}

				$aa4e95f1ed1932a8['target_container'] = 'mp4';

				label653:

				$a998abd856b07a59 = $d1f284eb9d636fef['device_conf'];
				goto label572;

				label658:

				goto label671;

				label661:

				$A7ca171405b19571 = self::$rServers[$C082ca9ed03f473c]['rtmp_server'] . ($aa4e95f1ed1932a8['id'] . '?token=' . $E59d0debc75e7be8['access_token']);

				label671:

				goto label717;

				label674:

				goto label687;

				label677:

				$A7ca171405b19571 = $aa049d3d6d423a70 . ($aa4e95f1ed1932a8['type_output'] . '/' . $E59d0debc75e7be8['access_token'] . '/' . $aa4e95f1ed1932a8['id']);

				label687:

				goto label294;

				label690:

				goto label687;

				label693:
				if (self::$rSettings['cloudflare'] && ($F0950fa4fdd70068 == 'ts')) {
					goto label677;
				}

				$A7ca171405b19571 = $aa049d3d6d423a70 . ($aa4e95f1ed1932a8['type_output'] . '/' . $E59d0debc75e7be8['access_token'] . '/' . $aa4e95f1ed1932a8['id'] . '.' . $F0950fa4fdd70068);
				goto label674;

				label717:

				goto label294;

				label720:

				if (strlen($E59d0debc75e7be8['access_token']) == 32) {
					goto label693;
				}

				if ($C0b8e6f4de700ad2) {
					goto label600;
				}
				if (self::$rSettings['cloudflare'] && ($F0950fa4fdd70068 == 'ts')) {
					goto label281;
				}

				goto label266;

				label745:
			}

			unset($D8e7681dfae2905b);
			goto label780;

			label750:

			$a2a53f18f4f95c8b = 'FIELD(`t1`.`id`,' . implode(',', $ce4a207d565929f5) . ')';
			self::$db->query('SELECT t1.id,t1.channel_id,t1.year,t1.movie_properties,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t2.type_output,t2.type_key,t1.target_container,t2.live,t1.tv_archive_duration,t1.tv_archive_server_id FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type WHERE `t1`.`id` IN (' . implode(',', array_map('intval', $ce4a207d565929f5)) . (') ORDER BY ' . $a2a53f18f4f95c8b . ';'));
			$D8e7681dfae2905b = self::$db->get_rows();

			label778:

			goto label48;

			label780:
		}

		$ba2d146bb5a55097 = trim(str_replace(['&lt;', '&gt;'], ['<', '>'], $d1f284eb9d636fef['device_footer']));

		if (!$A094dc919f41225f) {
			goto label1067;
		}

		goto label1063;

		label796:

		foreach ($d7f8ec73fe5d64c5 as $A7d54b094ae83c95) {
			switch ($A7d54b094ae83c95) {
			case 'live':
			case 'created_live':
				if (!$b2958c7c4cd0bba2) {
					goto label816;
				}

				goto label849;

				label816:

				$deec1aac68da5dbb = array_merge($deec1aac68da5dbb, $E59d0debc75e7be8['live_ids']);
				$b2958c7c4cd0bba2 = true;
				goto label849;
			case 'movie':
				$deec1aac68da5dbb = array_merge($deec1aac68da5dbb, $E59d0debc75e7be8['vod_ids']);
				goto label849;
			case 'radio_streams':
				$deec1aac68da5dbb = array_merge($deec1aac68da5dbb, $E59d0debc75e7be8['radio_ids']);
				goto label849;
			case 'series':
				$deec1aac68da5dbb = array_merge($deec1aac68da5dbb, $E59d0debc75e7be8['episode_ids']);
				goto label849;
			}

			label849:
		}

		label851:

		if (!in_array(self::$rSettings['channel_number_type'], ['bouquet_new', 'manual'])) {
			goto label897;
		}

		$deec1aac68da5dbb = self::eE26F6adbD1E84E9($deec1aac68da5dbb);
		goto label897;

		label865:

		$ba2d146bb5a55097 = str_replace(['&lt;', '&gt;'], ['<', '>'], str_replace(['{BOUQUET_NAME}', '{USERNAME}', '{PASSWORD}', '{SERVER_URL}', '{OUTPUT_KEY}'], [self::$rSettings['server_name'], $E59d0debc75e7be8['username'], $E59d0debc75e7be8['password'], $aa049d3d6d423a70, $ad7ee38ca629358c], $d1f284eb9d636fef['device_header'] . $Beec46b135bd7d33)) . "\n";

		if (!$A094dc919f41225f) {
			goto label895;
		}

		fwrite($A094dc919f41225f, $ba2d146bb5a55097);

		label895:

		echo $ba2d146bb5a55097;
		goto label979;

		label897:

		unset($E59d0debc75e7be8['live_ids']);
		unset($E59d0debc75e7be8['vod_ids']);
		unset($E59d0debc75e7be8['radio_ids']);
		unset($E59d0debc75e7be8['episode_ids']);
		goto label1817;

		label902:

		if ($aa049d3d6d423a70) {
			goto label905;
		}

		exit();

		label905:

		if (!$A1f381c3d6825384) {
			goto label1128;
		}

		if (!($ad7ee38ca629358c == 'rtmp')) {
			goto label1127;
		}

		goto label1126;

		label913:

		goto label1845;

		label914:

		$d094d3e133ec8c03 = [];
		$d094d3e133ec8c03['iptvstreams_list'] = [];
		$d094d3e133ec8c03['iptvstreams_list']['@version'] = 1;
		goto label1213;

		label921:

		header('Cache-Control: must-revalidate');
		header('Pragma: public');

		if (strlen($E59d0debc75e7be8['access_token']) == 32) {
			goto label1772;
		}

		header('Content-Disposition: attachment; filename="' . str_replace('{USERNAME}', $E59d0debc75e7be8['username'], $d1f284eb9d636fef['device_filename']) . '"');
		goto label1784;
		goto label1772;

		label948:

		$E59d0debc75e7be8['episode_ids'] = [];

		if (!(0 < count($E59d0debc75e7be8['series_ids']))) {
			goto label1867;
		}

		if (self::$rCached) {
			goto label1693;
		}

		self::$db->query('SELECT * FROM `streams_series` WHERE `id` IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ')');
		$E84de30ab6e5b0c1 = self::$db->get_rows(true, 'id');
		goto label1007;

		label979:

		unset($ba2d146bb5a55097);

		label980:

		if (empty($d1f284eb9d636fef['device_conf'])) {
			goto label1069;
		}

		if (preg_match('/\\{URL\\#(.*?)\\}/', $d1f284eb9d636fef['device_conf'], $Ac97fb1939417214)) {
			goto label1809;
		}

		$E989fd5d5b5ac766 = [];
		goto label1807;

		label993:

		readfile(PLAYLIST_PATH . md5($A64fb7a616b73cea));
		exit();

		label1002:

		$ba2d146bb5a55097 = '';
		$bfd80cda92d4303a = $aab84fb0c3e4fd47 = $E84de30ab6e5b0c1 = [];
		goto label948;

		label1007:

		if (!(0 < count($E59d0debc75e7be8['series_ids']))) {
			goto label1062;
		}

		self::$db->query('SELECT stream_id, series_id, season_num, episode_num FROM `streams_episodes` WHERE series_id IN (' . implode(',', $E59d0debc75e7be8['series_ids']) . ') ORDER BY FIELD(series_id,' . implode(',', $E59d0debc75e7be8['series_ids']) . '), season_num ASC, episode_num ASC');

		foreach (self::$db->get_rows(true, 'series_id', false) as $E6f758b9be57a931 => $D8329ce54de87aa5) {
			foreach ($D8329ce54de87aa5 as $e61e6dcee1252fa2) {
				$aab84fb0c3e4fd47[$e61e6dcee1252fa2['stream_id']] = [$e61e6dcee1252fa2['season_num'], $e61e6dcee1252fa2['episode_num']];
				$bfd80cda92d4303a[$e61e6dcee1252fa2['stream_id']] = $E6f758b9be57a931;
				$E59d0debc75e7be8['episode_ids'][] = $e61e6dcee1252fa2['stream_id'];
			}
		}

		label1062:

		goto label1692;

		label1063:

		fwrite($A094dc919f41225f, $ba2d146bb5a55097);

		label1067:

		echo $ba2d146bb5a55097;
		unset($ba2d146bb5a55097);

		label1069:

		goto label913;

		label1070:

		$A094dc919f41225f = fopen($C02e26846f43c472, 'w');

		label1075:

		if ($C40c179de6ba94af == 'starlivev5') {
			goto label914;
		}

		if (empty($d1f284eb9d636fef['device_header'])) {
			goto label980;
		}

		$Beec46b135bd7d33 = ($d1f284eb9d636fef['device_header'] == '#EXTM3U' ? "\n" . '#EXT-X-SESSION-DATA:DATA-ID="com.xui.' . str_replace('.', '_', XUI_VERSION) . (XUI_REVISION ? 'r' . XUI_REVISION : '') . '"' : '');
		goto label865;

		label1105:

		$d1f284eb9d636fef = self::$db->get_row();

		if (strlen($E59d0debc75e7be8['access_token']) == 32) {
			goto label1125;
		}

		$F48d5724f3b4ec96 = str_replace('{USERNAME}', $E59d0debc75e7be8['username'], $d1f284eb9d636fef['device_filename']);
		goto label1165;

		label1125:

		goto label1157;

		label1126:

		$ad7ee38ca629358c = 'ts';

		label1127:

		goto label1771;

		label1128:

		$f15ae92bd2a0b6af = [];
		goto label1755;

		label1130:

		if (!(self::$db->num_rows() <= 0)) {
			goto label1138;
		}

		return false;

		label1138:

		$A64fb7a616b73cea = $E59d0debc75e7be8['id'] . '_' . $C40c179de6ba94af . '_' . $ad7ee38ca629358c . '_' . implode('_', $d7f8ec73fe5d64c5 ?: []);
		$F0950fa4fdd70068 = self::$db->get_col();
		goto label1191;

		label1157:

		$F48d5724f3b4ec96 = str_replace('{USERNAME}', $E59d0debc75e7be8['access_token'], $d1f284eb9d636fef['device_filename']);

		label1165:
		if (!((0 < self::$rSettings['cache_playlists']) && !$a7c147e53ad84ee6 && file_exists(PLAYLIST_PATH . md5($A64fb7a616b73cea)))) {
			goto label1002;
		}

		header('Content-Description: File Transfer');
		header('Content-Type: audio/mpegurl');
		goto label1885;

		label1191:

		$C0b8e6f4de700ad2 = ($E59d0debc75e7be8['is_restreamer'] ? self::$rSettings['encrypt_playlist_restreamer'] : self::$rSettings['encrypt_playlist']);

		if (!$E59d0debc75e7be8['is_stalker']) {
			goto label1206;
		}

		$C0b8e6f4de700ad2 = false;

		label1206:

		$aa049d3d6d423a70 = self::c65C7f64e35C199f();
		goto label902;

		label1210:

		exit();

		label1211:

		return false;
		goto label1912;

		label1213:

		$d094d3e133ec8c03['iptvstreams_list']['group'] = [];
		$d094d3e133ec8c03['iptvstreams_list']['group']['name'] = 'IPTV';
		$d094d3e133ec8c03['iptvstreams_list']['group']['channel'] = [];

		foreach (array_chunk($deec1aac68da5dbb, 1000) as $ce4a207d565929f5) {
			goto label1262;

			label1232:

			$a2a53f18f4f95c8b = 'FIELD(`t1`.`id`,' . implode(',', $ce4a207d565929f5) . ')';
			self::$db->query('SELECT t1.id,t1.channel_id,t1.year,t1.movie_properties,t1.stream_icon,t1.custom_sid,t1.category_id,t1.stream_display_name,t2.type_output,t2.type_key,t1.target_container,t2.live FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type WHERE `t1`.`id` IN (' . implode(',', array_map('intval', $ce4a207d565929f5)) . (') ORDER BY ' . $a2a53f18f4f95c8b . ';'));
			$D8e7681dfae2905b = self::$db->get_rows();

			label1260:

			goto label1295;

			label1262:
			if (self::$rSettings['playlist_from_mysql'] || !self::$rCached) {
				goto label1232;
			}

			$D8e7681dfae2905b = [];

			foreach ($ce4a207d565929f5 as $Abcb228699a7f743) {
				$D8e7681dfae2905b[] = igbinary_unserialize(file_get_contents(STREAMS_TMP_PATH . 'stream_' . intval($Abcb228699a7f743)))['info'];
			}

			goto label1260;
			goto label1232;

			label1295:

			foreach ($D8e7681dfae2905b as $Bf9899a172ecff52) {
				goto label1329;

				label1300:

				$aa4e95f1ed1932a8 = [];
				$aa4e95f1ed1932a8['name'] = $Bf9899a172ecff52['stream_display_name'];
				$aa4e95f1ed1932a8['icon'] = self::fca722697178454b($B080674c55093935);
				$aa4e95f1ed1932a8['stream_url'] = $A7ca171405b19571;
				$aa4e95f1ed1932a8['stream_type'] = 0;
				goto label1563;

				label1316:

				$A7ca171405b19571 .= $Bf9899a172ecff52['id'];

				label1318:

				goto label1571;

				label1321:

				$A7ca171405b19571 .= $Bf9899a172ecff52['id'] . '.' . $Bf9899a172ecff52['target_container'];
				goto label1571;

				label1329:
				if (!($d7f8ec73fe5d64c5 && !in_array($Bf9899a172ecff52['type_output'], $d7f8ec73fe5d64c5))) {
					goto label1345;
				}

				goto label1568;

				label1345:

				if ($Bf9899a172ecff52['target_container']) {
					goto label1355;
				}

				$Bf9899a172ecff52['target_container'] = 'mp4';
				goto label1355;

				label1355:

				$Ccbdf03f8a4df633 = (!is_array($Bf9899a172ecff52['movie_properties']) ? json_decode($Bf9899a172ecff52['movie_properties'], true) : $Bf9899a172ecff52['movie_properties']);

				if ($Bf9899a172ecff52['type_key'] == 'series') {
					goto label1522;
				}

				$Bf9899a172ecff52['stream_display_name'] = self::cF5D4a2F3de8982c($Bf9899a172ecff52['stream_display_name'], $Bf9899a172ecff52['year']);
				goto label1617;
				goto label1522;

				label1391:

				$A7ca171405b19571 .= $Bf9899a172ecff52['id'];

				label1393:

				goto label1638;

				label1396:

				goto label1633;

				label1399:

				if ($Bf9899a172ecff52['live'] == 0) {
					goto label1504;
				}
				if (self::$rSettings['cloudflare'] && ($F0950fa4fdd70068 == 'ts')) {
					goto label1421;
				}

				$Ccbe1c85185d3717 .= $Bf9899a172ecff52['id'] . '/' . $F0950fa4fdd70068;
				goto label1501;

				label1421:

				goto label1499;

				label1424:

				$A7ca171405b19571 = $aa049d3d6d423a70 . ($Bf9899a172ecff52['type_output'] . '/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/');

				if ($Bf9899a172ecff52['live'] == 0) {
					goto label1396;
				}
				if (self::$rSettings['cloudflare'] && ($F0950fa4fdd70068 == 'ts')) {
					goto label1391;
				}

				$A7ca171405b19571 .= $Bf9899a172ecff52['id'] . '.' . $F0950fa4fdd70068;
				goto label1393;
				goto label1391;

				label1460:

				if ($Bf9899a172ecff52['live'] == 0) {
					goto label1321;
				}
				if (self::$rSettings['cloudflare'] && ($F0950fa4fdd70068 == 'ts')) {
					goto label1482;
				}

				$A7ca171405b19571 .= $Bf9899a172ecff52['id'] . '.' . $F0950fa4fdd70068;
				goto label1318;

				label1482:

				goto label1316;

				label1485:

				goto label1571;

				label1488:

				$A7ca171405b19571 = $aa049d3d6d423a70 . ($Bf9899a172ecff52['type_output'] . '/' . $E59d0debc75e7be8['access_token'] . '/');
				goto label1460;

				label1499:

				$Ccbe1c85185d3717 .= $Bf9899a172ecff52['id'];

				label1501:

				goto label1585;

				label1504:

				$Ccbe1c85185d3717 .= $Bf9899a172ecff52['id'] . '/' . $Bf9899a172ecff52['target_container'];
				goto label1585;

				label1512:

				if (empty($Ccbdf03f8a4df633['movie_image'])) {
					goto label1519;
				}

				$B080674c55093935 = $Ccbdf03f8a4df633['movie_image'];

				label1519:

				goto label1300;

				label1522:

				$E6f758b9be57a931 = $bfd80cda92d4303a[$Bf9899a172ecff52['id']];
				$Bf9899a172ecff52['live'] = 0;
				$Bf9899a172ecff52['stream_display_name'] = $E84de30ab6e5b0c1[$E6f758b9be57a931]['title'] . ' S' . sprintf('%02d', $aab84fb0c3e4fd47[$Bf9899a172ecff52['id']][0]) . 'E' . sprintf('%02d', $aab84fb0c3e4fd47[$Bf9899a172ecff52['id']][1]);
				$Bf9899a172ecff52['movie_properties'] = ['movie_image' => !empty($Ccbdf03f8a4df633['movie_image']) ? $Ccbdf03f8a4df633['movie_image'] : $E84de30ab6e5b0c1['cover']];
				goto label1611;

				label1563:

				$d094d3e133ec8c03['iptvstreams_list']['group']['channel'][] = $aa4e95f1ed1932a8;

				label1568:

				goto label1654;

				label1571:

				if ($Bf9899a172ecff52['live'] == 0) {
					goto label1512;
				}

				$B080674c55093935 = $Bf9899a172ecff52['stream_icon'];
				goto label1519;
				goto label1512;

				label1585:

				$B259c62825689c1b = Xui\Functions::encrypt($Ccbe1c85185d3717, self::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
				$A7ca171405b19571 = $aa049d3d6d423a70 . ('play/' . $B259c62825689c1b);

				if (!($Bf9899a172ecff52['live'] == 0)) {
					goto label1485;
				}

				$A7ca171405b19571 .= '#.' . $Bf9899a172ecff52['target_container'];
				goto label1485;

				label1611:

				$Bf9899a172ecff52['type_output'] = 'series';
				$Bf9899a172ecff52['category_id'] = $E84de30ab6e5b0c1[$E6f758b9be57a931]['category_id'];

				label1617:

				if (strlen($E59d0debc75e7be8['access_token']) == 32) {
					goto label1488;
				}

				if ($C0b8e6f4de700ad2) {
					goto label1641;
				}

				goto label1424;

				label1633:

				$A7ca171405b19571 .= $Bf9899a172ecff52['id'] . '.' . $Bf9899a172ecff52['target_container'];

				label1638:

				goto label1485;

				label1641:

				$Ccbe1c85185d3717 = $Bf9899a172ecff52['type_output'] . '/' . $E59d0debc75e7be8['username'] . '/' . $E59d0debc75e7be8['password'] . '/';
				goto label1399;

				label1654:
			}

			unset($D8e7681dfae2905b);
			goto label1659;

			label1659:
		}

		goto label1840;

		label1662:

		if (!empty($F0950fa4fdd70068)) {
			goto label1667;
		}

		$F0950fa4fdd70068 = 'ts';

		label1667:

		self::$db->query('SELECT t1.*,t2.* FROM `output_devices` t1 LEFT JOIN `output_formats` t2 ON t2.access_output_id = t1.default_output WHERE t1.device_key = ? LIMIT 1', $C40c179de6ba94af);

		if (!(0 < self::$db->num_rows())) {
			goto label1211;
		}

		goto label1105;

		label1680:

		self::$db->query('SELECT t1.output_ext FROM `output_formats` t1 WHERE `output_key` = ?', $ad7ee38ca629358c);
		goto label1691;

		label1686:

		self::$db->query('SELECT t1.output_ext FROM `output_formats` t1 INNER JOIN `output_devices` t2 ON t2.default_output = t1.access_output_id AND `device_key` = ?', $C40c179de6ba94af);

		label1691:

		goto label1130;

		label1692:

		goto label1747;

		label1693:

		foreach ($E59d0debc75e7be8['series_ids'] as $E6f758b9be57a931) {
			$E84de30ab6e5b0c1[$E6f758b9be57a931] = igbinary_unserialize(file_get_contents(SERIES_TMP_PATH . 'series_' . intval($E6f758b9be57a931)));
			$A55099550c0c9805 = igbinary_unserialize(file_get_contents(SERIES_TMP_PATH . 'episodes_' . intval($E6f758b9be57a931)));

			foreach ($A55099550c0c9805 as $bfa04599404c5627 => $D8329ce54de87aa5) {
				foreach ($D8329ce54de87aa5 as $e61e6dcee1252fa2) {
					$aab84fb0c3e4fd47[$e61e6dcee1252fa2['stream_id']] = [$bfa04599404c5627, $e61e6dcee1252fa2['episode_num']];
					$bfd80cda92d4303a[$e61e6dcee1252fa2['stream_id']] = $E6f758b9be57a931;
					$E59d0debc75e7be8['episode_ids'][] = $e61e6dcee1252fa2['stream_id'];
				}
			}
		}

		label1747:

		goto label1867;

		label1748:

		$b2958c7c4cd0bba2 = false;

		if ($d7f8ec73fe5d64c5) {
			goto label1754;
		}

		$deec1aac68da5dbb = $E59d0debc75e7be8['channel_ids'];
		goto label851;

		label1754:

		goto label796;

		label1755:

		if (!($ad7ee38ca629358c == 'rtmp')) {
			goto label1771;
		}

		self::$db->query('SELECT t1.id,t2.server_id FROM `streams` t1 INNER JOIN `streams_servers` t2 ON t2.stream_id = t1.id WHERE t1.rtmp_output = 1');
		$f15ae92bd2a0b6af = self::$db->get_rows(true, 'id', false, 'server_id');

		label1771:

		goto label1662;

		label1772:

		header('Content-Disposition: attachment; filename="' . str_replace('{USERNAME}', $E59d0debc75e7be8['access_token'], $d1f284eb9d636fef['device_filename']) . '"');

		label1784:

		if (!(0 < self::$rSettings['cache_playlists'])) {
			goto label1075;
		}

		$C02e26846f43c472 = PLAYLIST_PATH . md5($A64fb7a616b73cea) . '.write';
		goto label1070;

		label1798:

		if (!($ad7ee38ca629358c == 'hls')) {
			goto label1803;
		}

		$ad7ee38ca629358c = 'm3u8';

		label1803:

		if (empty($ad7ee38ca629358c)) {
			goto label1686;
		}

		goto label1680;

		label1807:

		$E5f5fbcd0c39ff43 = '{URL}';
		goto label7;

		label1809:

		$E989fd5d5b5ac766 = str_split($Ac97fb1939417214[1]);
		$E5f5fbcd0c39ff43 = $Ac97fb1939417214[0];
		goto label7;

		label1817:

		unset($E59d0debc75e7be8['channel_ids']);
		$A094dc919f41225f = NULL;
		header('Content-Description: File Transfer');
		header('Content-Type: application/octet-stream');
		header('Expires: 0');
		goto label921;

		label1829:

		if (!empty($C40c179de6ba94af)) {
			goto label1834;
		}

		return false;

		label1834:

		if (!($ad7ee38ca629358c == 'mpegts')) {
			goto label1798;
		}

		$ad7ee38ca629358c = 'ts';
		goto label1798;

		label1840:

		$ba2d146bb5a55097 = json_encode((object) $d094d3e133ec8c03);

		label1845:

		if (!$A094dc919f41225f) {
			goto label1210;
		}

		fclose($A094dc919f41225f);
		rename(PLAYLIST_PATH . md5($A64fb7a616b73cea) . '.write', PLAYLIST_PATH . md5($A64fb7a616b73cea));
		goto label1210;

		label1867:

		if (!(0 < count($E59d0debc75e7be8['episode_ids']))) {
			goto label1883;
		}

		$E59d0debc75e7be8['channel_ids'] = array_merge($E59d0debc75e7be8['channel_ids'], $E59d0debc75e7be8['episode_ids']);

		label1883:

		$deec1aac68da5dbb = [];
		goto label1748;

		label1885:

		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Disposition: attachment; filename="' . $F48d5724f3b4ec96 . '"');
		header('Content-Length: ' . filesize(PLAYLIST_PATH . md5($A64fb7a616b73cea)));
		goto label993;

		label1912:
	}

	static public function FcDcF918E54cF869()
	{
		goto label1;

		label1:

		if (!file_exists(TMP_PATH . 'crontab')) {
			goto label10;
		}

		return false;

		label10:

		$ce9825b82c768783 = [];
		self::$db->query('SELECT * FROM `crontab` WHERE `enabled` = 1;');
		goto label45;

		label16:

		fwrite($e23e1b2beefc1001, implode("\n", $ce9825b82c768783) . "\n");
		fclose($e23e1b2beefc1001);
		shell_exec('crontab -u xui ' . $Bba88c9bf8a1cdc2);
		@unlink($Bba88c9bf8a1cdc2);
		file_put_contents(TMP_PATH . 'crontab', 1);
		goto label94;

		label45:

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$f9cf284bc570510f = CRON_PATH . $Fb9da1713bff19ce['filename'];
			if (!((pathinfo($f9cf284bc570510f, PATHINFO_EXTENSION) == 'php') && file_exists($f9cf284bc570510f))) {
				goto label78;
			}

			$ce9825b82c768783[] = $Fb9da1713bff19ce['time'] . ' ' . PHP_BIN . ' ' . $f9cf284bc570510f . ' # XUI';

			label78:
		}

		shell_exec('crontab -r');
		$Bba88c9bf8a1cdc2 = tempnam('/tmp', 'crontab');
		$e23e1b2beefc1001 = fopen($Bba88c9bf8a1cdc2, 'w');
		goto label16;

		label94:

		return true;
		goto label96;

		label96:
	}

	static public function ee1A1bFd48615D6C()
	{
		if (!(file_exists('/proc/uptime') && is_readable('/proc/uptime'))) {
			goto label27;
		}

		$e8b20f7fbf6ab7b7 = explode(' ', file_get_contents('/proc/uptime'));
		return self::a5d0A3407690F047(intval($e8b20f7fbf6ab7b7[0]));

		label27:

		return '';
	}

	static public function a5d0A3407690F047($E6e0dd650e4e523b, $F8a82c66e2605b52 = true)
	{
		goto label42;

		label3:

		$Aa6711f02f4e8165 = (int) floor($d323a8568eb7d316 / ($C107e77776982867 ?: 1));
		$Cbb2ebd164a31478 = $d323a8568eb7d316 % $C107e77776982867;
		$C01784a58c8748e0 = (int) floor($Cbb2ebd164a31478 / ($b7f3d57458312751 ?: 1));
		$Fdc1c59343e7fc90 = $Cbb2ebd164a31478 % $b7f3d57458312751;
		$d03052828cab569a = (int) ceil($Fdc1c59343e7fc90);
		goto label29;

		label29:

		$d094d3e133ec8c03 = '';

		if (!($A1337727c59c9463 != 0)) {
			goto label37;
		}

		$d094d3e133ec8c03 .= $A1337727c59c9463 . 'd ';

		label37:

		if (!($Aa6711f02f4e8165 != 0)) {
			goto label61;
		}

		goto label58;

		label42:

		$b7f3d57458312751 = 60;
		$C107e77776982867 = 60 * $b7f3d57458312751;
		$fb559f4ba9fd1dec = 24 * $C107e77776982867;
		$A1337727c59c9463 = (int) floor($E6e0dd650e4e523b / ($fb559f4ba9fd1dec ?: 1));
		$d323a8568eb7d316 = $E6e0dd650e4e523b % $fb559f4ba9fd1dec;
		goto label3;

		label58:

		$d094d3e133ec8c03 .= $Aa6711f02f4e8165 . 'h ';

		label61:

		if (!($C01784a58c8748e0 != 0)) {
			goto label68;
		}

		$d094d3e133ec8c03 .= $C01784a58c8748e0 . 'm ';

		label68:

		goto label69;

		label69:

		if (!$F8a82c66e2605b52) {
			goto label75;
		}

		$d094d3e133ec8c03 .= $d03052828cab569a . 's';

		label75:

		return $d094d3e133ec8c03;
		goto label77;

		label77:
	}

	static public function AC489097c3AbFa57($C5239e379b87a838, $A480aa67ca5eba71, $b11b536d4367995c)
	{
		if (is_array($C5239e379b87a838)) {
			goto label13;
		}

		$C5239e379b87a838 = [intval($C5239e379b87a838)];

		label13:

		$A480aa67ca5eba71 = array_map('intval', $A480aa67ca5eba71);
		$d094d3e133ec8c03 = [];

		foreach ($C5239e379b87a838 as $C082ca9ed03f473c) {
			goto label25;

			label23:

			goto label68;

			label25:

			if (array_key_exists($C082ca9ed03f473c, self::$rServers)) {
				goto label35;
			}

			goto label23;

			label35:

			$Fca04b1755da7bd5 = self::d74539D55f65B965($C082ca9ed03f473c, self::$rServers[$C082ca9ed03f473c]['api_url_ip'] . '&action=pidsAreRunning', ['program' => $b11b536d4367995c, 'pids' => $A480aa67ca5eba71]);

			if ($Fca04b1755da7bd5) {
				goto label56;
			}

			goto label52;

			label52:

			$d094d3e133ec8c03[$C082ca9ed03f473c] = false;
			goto label66;

			label56:

			$d094d3e133ec8c03[$C082ca9ed03f473c] = array_map('trim', json_decode($Fca04b1755da7bd5, true));

			label66:

			goto label23;

			label68:
		}

		return $d094d3e133ec8c03;
	}

	static public function A633007d15904f34($C082ca9ed03f473c, $C98e11437faf4199, $b11b536d4367995c)
	{
		if (!(is_null($C98e11437faf4199) || !is_numeric($C98e11437faf4199) || !array_key_exists($C082ca9ed03f473c, self::$rServers))) {
			goto label24;
		}

		return false;

		label24:

		if (!($d094d3e133ec8c03 = self::AC489097c3AbfA57($C082ca9ed03f473c, [$C98e11437faf4199], $b11b536d4367995c))) {
			goto label37;
		}

		return $d094d3e133ec8c03[$C082ca9ed03f473c][$C98e11437faf4199];

		label37:

		return false;
	}

	static public function d74539d55F65B965($C082ca9ed03f473c, $A7ca171405b19571, $b52154585ae961fd = [])
	{
		goto label4;

		label4:

		if (self::$rServers[$C082ca9ed03f473c]['server_online']) {
			goto label10;
		}

		return false;

		label10:

		$d094d3e133ec8c03 = false;
		$df6991d59f367c7e = 1;
		goto label66;

		label13:

		curl_setopt($Daaec03d386c8f6a, CURLOPT_HEADER, 0);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_TIMEOUT, 10);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_FOLLOWLOCATION, true);
		goto label114;

		label44:

		$df6991d59f367c7e++;
		goto label66;
		goto label86;

		label48:

		$c60b264a3c1c4445 = curl_errno($Daaec03d386c8f6a);
		@curl_close($Daaec03d386c8f6a);
		if (($c60b264a3c1c4445 != 0) || ($Fe4cb93e4bebb3b1 != 200)) {
			goto label44;
		}

		goto label86;
		goto label44;
		goto label44;

		label66:

		if (!($df6991d59f367c7e <= 2)) {
			goto label86;
		}

		$Daaec03d386c8f6a = curl_init();
		curl_setopt($Daaec03d386c8f6a, CURLOPT_URL, $A7ca171405b19571);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0) Gecko/20100101 Firefox/9.0');
		goto label13;

		label86:

		return $d094d3e133ec8c03;
		goto label142;

		label88:

		curl_setopt($Daaec03d386c8f6a, CURLOPT_POST, true);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_POSTFIELDS, http_build_query($b52154585ae961fd));

		label103:

		$d094d3e133ec8c03 = curl_exec($Daaec03d386c8f6a);
		$Fe4cb93e4bebb3b1 = curl_getinfo($Daaec03d386c8f6a, CURLINFO_HTTP_CODE);
		goto label48;

		label114:

		curl_setopt($Daaec03d386c8f6a, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_FORBID_REUSE, true);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_SSL_VERIFYPEER, 0);

		if (empty($b52154585ae961fd)) {
			goto label103;
		}

		goto label88;

		label142:
	}

	static public function ED95de2789CE39FB($Ec0879f16d0cdddb)
	{
		if (!empty($Ec0879f16d0cdddb)) {
		}
		else {
			return NULL;
		}

		foreach ($Ec0879f16d0cdddb as $fd51b5505224fc7c) {
			if (!file_exists(CACHE_TMP_PATH . md5($fd51b5505224fc7c))) {
				goto label28;
			}

			unlink(CACHE_TMP_PATH . md5($fd51b5505224fc7c));

			label28:
		}
	}

	static public function queueChannel($ee6d1fc5d801b43f, $C082ca9ed03f473c = NULL)
	{
		if ($C082ca9ed03f473c) {
			goto label6;
		}

		$C082ca9ed03f473c = SERVER_ID;

		label6:

		self::$db->query('SELECT `id` FROM `queue` WHERE `stream_id` = ? AND `server_id` = ?;', $ee6d1fc5d801b43f, $C082ca9ed03f473c);

		if (!(self::$db->num_rows() == 0)) {
			goto label28;
		}

		self::$db->query('INSERT INTO `queue`(`type`, `stream_id`, `server_id`, `added`) VALUES(\'channel\', ?, ?, ?);', $ee6d1fc5d801b43f, $C082ca9ed03f473c, time());

		label28:
	}

	static public function c8EF91E4040DDD07($ee6d1fc5d801b43f)
	{
		shell_exec(PHP_BIN . ' ' . CLI_PATH . 'created.php ' . intval($ee6d1fc5d801b43f) . ' >/dev/null 2>/dev/null &');
		return true;
	}

	static public function E462180cF8b466f4($ee6d1fc5d801b43f, $fd51b5505224fc7c)
	{
		goto label228;

		label3:

		$C6671ac66a4f1c57 = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']) ? self::$rFFMPEG_GPU : self::$rFFMPEG_CPU) . ' -y -nostdin -hide_banner -loglevel ' . (self::$rSettings['ffmpeg_warnings'] ? 'warning' : 'error') . ' -err_detect ignore_err {GPU} -fflags +genpts -async 1 -i {STREAM_SOURCE} {LOGO} ';

		if (array_key_exists('-acodec', $fe93a43f53d92a4e['stream_info']['transcode_attributes'])) {
			goto label62;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-acodec'] = 'copy';
		goto label62;

		label35:

		$C6671ac66a4f1c57 = str_replace(['{GPU}', '{INPUT_CODEC}', '{LOGO}', '{STREAM_SOURCE}'], [$a13b8c0c9cf36a9b, $Afa981cde090430b, $c998b20482f21b6b, escapeshellarg($A8af9dfacedf87f3)], $C6671ac66a4f1c57);
		goto label273;

		label49:

		$Daecfbd6410b9c42 = pathinfo($fd51b5505224fc7c)['extension'];

		if (!(strlen($Daecfbd6410b9c42) == 0)) {
			goto label244;
		}

		goto label243;

		label62:

		if (array_key_exists('-vcodec', $fe93a43f53d92a4e['stream_info']['transcode_attributes'])) {
			goto label74;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-vcodec'] = 'copy';

		label74:

		if (!isset($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu'])) {
			goto label301;
		}

		goto label291;

		label81:

		$fe93a43f53d92a4e['server_info'] = self::$db->get_row();
		$Cd8e1820d4075a5c = md5($fd51b5505224fc7c);

		if (substr($fd51b5505224fc7c, 0, 2) == 's:') {
			goto label212;
		}

		$C082ca9ed03f473c = SERVER_ID;
		$A8af9dfacedf87f3 = $fd51b5505224fc7c;
		goto label211;

		label102:
		if (($C082ca9ed03f473c == SERVER_ID) && ($fe93a43f53d92a4e['stream_info']['movie_symlink'] == 1)) {
			goto label49;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes'] = json_decode($fe93a43f53d92a4e['stream_info']['profile_options'], true);
		$c998b20482f21b6b = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes'][16]) && !$Adabcfa0a2afb126 ? $fe93a43f53d92a4e['stream_info']['transcode_attributes'][16]['cmd'] : '');
		$a13b8c0c9cf36a9b = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']) ? $fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']['cmd'] : '');
		goto label165;

		label148:

		return intval(file_get_contents(CREATED_PATH . intval($ee6d1fc5d801b43f) . ('_' . $Cd8e1820d4075a5c . '.pid')));
		goto label342;

		label165:

		$Afa981cde090430b = '';

		if (empty($a13b8c0c9cf36a9b)) {
			goto label3;
		}

		$E9de85a1ad46b96d = self::e57006536CD5655d($A8af9dfacedf87f3);

		if (!in_array($E9de85a1ad46b96d['codecs']['video']['codec_name'], ['h264', 'hevc', 'mjpeg', 'mpeg1', 'mpeg2', 'mpeg4', 'vc1', 'vp8', 'vp9'])) {
			goto label3;
		}

		$Afa981cde090430b = '-c:v ' . $E9de85a1ad46b96d['codecs']['video']['codec_name'] . '_cuvid';
		goto label3;

		label190:

		$fe93a43f53d92a4e['stream_info'] = self::$db->get_row();
		self::$db->query('SELECT * FROM `streams_servers` WHERE stream_id  = ? AND `server_id` = ?', $ee6d1fc5d801b43f, SERVER_ID);

		if (!(self::$db->num_rows() <= 0)) {
			goto label210;
		}

		return false;

		label210:

		goto label81;

		label211:

		goto label102;

		label212:

		$E3665d09b9cea208 = explode(':', $fd51b5505224fc7c, 3);
		$C082ca9ed03f473c = intval($E3665d09b9cea208[1]);

		if ($C082ca9ed03f473c != SERVER_ID) {
			goto label280;
		}

		goto label277;

		label228:

		$fe93a43f53d92a4e = [];
		self::$db->query('SELECT * FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type AND t1.type = 3 LEFT JOIN `profiles` t4 ON t1.transcode_profile_id = t4.profile_id WHERE t1.direct_source = 0 AND t1.id = ?', $ee6d1fc5d801b43f);

		if (!(self::$db->num_rows() <= 0)) {
			goto label242;
		}

		return false;

		label242:

		goto label190;

		label243:

		$Daecfbd6410b9c42 = 'mp4';

		label244:

		$C6671ac66a4f1c57 = 'ln -sfn ' . escapeshellarg($A8af9dfacedf87f3) . ' "' . CREATED_PATH . intval($ee6d1fc5d801b43f) . '_' . $Cd8e1820d4075a5c . '.' . escapeshellcmd($Daecfbd6410b9c42) . '" >/dev/null 2>/dev/null & echo $! > "' . CREATED_PATH . intval($ee6d1fc5d801b43f) . '_' . $Cd8e1820d4075a5c . '.pid"';

		label273:

		shell_exec($C6671ac66a4f1c57);
		goto label148;

		label277:

		$A8af9dfacedf87f3 = $E3665d09b9cea208[2];
		goto label290;

		label280:

		$A8af9dfacedf87f3 = self::$rServers[$C082ca9ed03f473c]['api_url'] . '&action=getFile&filename=' . urlencode($E3665d09b9cea208[2]);

		label290:

		goto label102;

		label291:

		$C6671ac66a4f1c57 .= '-gpu ' . intval($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']['device']) . ' ';

		label301:

		$C6671ac66a4f1c57 .= implode(' ', self::f6eFe57edF62E7DF($fe93a43f53d92a4e['stream_info']['transcode_attributes'])) . ' ';
		$C6671ac66a4f1c57 .= '-strict -2 -mpegts_flags +initial_discontinuity -f mpegts "' . CREATED_PATH . intval($ee6d1fc5d801b43f) . '_' . $Cd8e1820d4075a5c . '.ts"';
		$C6671ac66a4f1c57 .= ' >/dev/null 2>"' . CREATED_PATH . intval($ee6d1fc5d801b43f) . '_' . $Cd8e1820d4075a5c . '.errors" & echo $! > "' . CREATED_PATH . intval($ee6d1fc5d801b43f) . '_' . $Cd8e1820d4075a5c . '.pid"';
		goto label35;

		label342:
	}

	static public function extractSubtitle($ee6d1fc5d801b43f, $E0e4b0ee8a5dddf8, $ac5a5e03640888f4)
	{
		goto label41;

		label4:

		goto label40;

		label5:

		if (!(filesize(VOD_PATH . intval($ee6d1fc5d801b43f) . '_' . intval($ac5a5e03640888f4) . '.srt') == 0)) {
			goto label39;
		}

		unlink(VOD_PATH . intval($ee6d1fc5d801b43f) . '_' . intval($ac5a5e03640888f4) . '.srt');
		return false;
		goto label39;

		label39:

		return true;

		label40:

		goto label99;

		label41:

		$F7379362daea673f = 10;
		$C6671ac66a4f1c57 = 'timeout ' . $F7379362daea673f . ' ' . self::$rFFMPEG_CPU . ' -y -nostdin -hide_banner -loglevel ' . (self::$rSettings['ffmpeg_warnings'] ? 'warning' : 'error') . (' -err_detect ignore_err -i "' . $E0e4b0ee8a5dddf8 . '" -map 0:s:') . intval($ac5a5e03640888f4) . ' ' . VOD_PATH . intval($ee6d1fc5d801b43f) . '_' . intval($ac5a5e03640888f4) . '.srt';
		exec($C6671ac66a4f1c57, $d094d3e133ec8c03);

		if (file_exists(VOD_PATH . intval($ee6d1fc5d801b43f) . '_' . intval($ac5a5e03640888f4) . '.srt')) {
			goto label5;
		}

		return false;
		goto label4;

		label99:
	}

	static public function e57006536Cd5655D($E0e4b0ee8a5dddf8, $de11de6855c66abb = [], $E2d51c06aec69b36 = '', $daed1910c3ad370d = true)
	{
		goto label28;

		label5:

		return self::C24Ac2006B36a530(json_decode($fce92a8fdd7f418c, true));

		label13:

		goto label81;

		label14:

		$fce92a8fdd7f418c = implode("\n", $B9869413eae86beb);

		if ($daed1910c3ad370d) {
			goto label27;
		}

		return json_decode($fce92a8fdd7f418c, true);
		goto label13;

		label27:

		goto label5;

		label28:

		$Fe2ee13c1d643ec7 = abs(intval(self::$rSettings['stream_max_analyze']));
		$ea5e624c582e2c75 = abs(intval(self::$rSettings['probesize']));
		$F7379362daea673f = intval($Fe2ee13c1d643ec7 / 1000000) + self::$rSettings['probe_extra_wait'];
		$C6671ac66a4f1c57 = $E2d51c06aec69b36 . 'timeout ' . $F7379362daea673f . ' ' . self::$rFFPROBE . (' -probesize ' . $ea5e624c582e2c75 . ' -analyzeduration ' . $Fe2ee13c1d643ec7 . ' ') . implode(' ', $de11de6855c66abb) . (' -i "' . $E0e4b0ee8a5dddf8 . '" -v quiet -print_format json -show_streams -show_format');
		exec($C6671ac66a4f1c57, $B9869413eae86beb);
		goto label14;

		label81:
	}

	static public function c24ac2006b36a530($B0c60ed834e1e0ab)
	{
		goto label2;

		label2:

		if (empty($B0c60ed834e1e0ab)) {
			goto label122;
		}

		if (empty($B0c60ed834e1e0ab['codecs'])) {
			goto label9;
		}

		return $B0c60ed834e1e0ab;

		label9:

		$d094d3e133ec8c03 = [];
		goto label124;

		label11:

		$d094d3e133ec8c03['of_duration'] = (!empty($B0c60ed834e1e0ab['format']['duration']) ? $B0c60ed834e1e0ab['format']['duration'] : 'N/A');
		$d094d3e133ec8c03['duration'] = (!empty($B0c60ed834e1e0ab['format']['duration']) ? gmdate('H:i:s', intval($B0c60ed834e1e0ab['format']['duration'])) : 'N/A');

		foreach ($B0c60ed834e1e0ab['streams'] as $a42d28fc2a08c3b1) {
			goto label54;

			label45:

			$d094d3e133ec8c03['codecs'][$a42d28fc2a08c3b1['codec_type']][] = $a42d28fc2a08c3b1;

			label50:

			goto label89;

			label52:

			goto label78;

			label54:

			if (isset($a42d28fc2a08c3b1['codec_type'])) {
				goto label60;
			}

			goto label89;

			label60:
			if (!(($a42d28fc2a08c3b1['codec_type'] != 'audio') && ($a42d28fc2a08c3b1['codec_type'] != 'video') && ($a42d28fc2a08c3b1['codec_type'] != 'subtitle'))) {
				goto label91;
			}

			goto label89;
			goto label91;

			label78:

			if (!empty($d094d3e133ec8c03['codecs'][$a42d28fc2a08c3b1['codec_type']])) {
				goto label89;
			}

			$d094d3e133ec8c03['codecs'][$a42d28fc2a08c3b1['codec_type']] = $a42d28fc2a08c3b1;

			label89:

			goto label118;

			label91:
			if (($a42d28fc2a08c3b1['codec_type'] == 'audio') || ($a42d28fc2a08c3b1['codec_type'] == 'video')) {
				goto label52;
			}

			if (!($a42d28fc2a08c3b1['codec_type'] == 'subtitle')) {
				goto label50;
			}

			if (isset($d094d3e133ec8c03['codecs'][$a42d28fc2a08c3b1['codec_type']])) {
				goto label45;
			}

			$d094d3e133ec8c03['codecs'][$a42d28fc2a08c3b1['codec_type']] = [];
			goto label45;

			label118:
		}

		return $d094d3e133ec8c03;
		goto label122;

		label122:

		return false;
		goto label150;

		label124:

		$d094d3e133ec8c03['codecs']['video'] = '';
		$d094d3e133ec8c03['codecs']['audio'] = '';
		$d094d3e133ec8c03['container'] = $B0c60ed834e1e0ab['format']['format_name'];
		$d094d3e133ec8c03['filename'] = $B0c60ed834e1e0ab['format']['filename'];
		$d094d3e133ec8c03['bitrate'] = (!empty($B0c60ed834e1e0ab['format']['bit_rate']) ? $B0c60ed834e1e0ab['format']['bit_rate'] : NULL);
		goto label11;

		label150:
	}

	static public function Ee173b194544b3a2($ee6d1fc5d801b43f, $e7d4a79fdee9a1a0 = false)
	{
		goto label165;

		label3:
		if (!(self::AFF5E1429BA4f27c($C98e11437faf4199, [$ee6d1fc5d801b43f . '_.m3u8', $ee6d1fc5d801b43f . '_%d.ts', 'LLOD[' . $ee6d1fc5d801b43f . ']', 'XUIProxy[' . $ee6d1fc5d801b43f . ']', 'Loopback[' . $ee6d1fc5d801b43f . ']']) && is_numeric($C98e11437faf4199) && (0 < $C98e11437faf4199))) {
			goto label40;
		}

		posix_kill($C98e11437faf4199, 9);

		label40:

		if (!file_exists(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f))) {
			goto label145;
		}

		goto label136;

		label53:

		$Bafd292a6f2a760b = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor'));

		label63:

		if (!(0 < $Bafd292a6f2a760b)) {
			goto label111;
		}
		if (!(self::AFf5e1429BA4f27c($Bafd292a6f2a760b, ['XUI[' . $ee6d1fc5d801b43f . ']', 'XUIProxy[' . $ee6d1fc5d801b43f . ']']) && is_numeric($Bafd292a6f2a760b) && (0 < $Bafd292a6f2a760b))) {
			goto label111;
		}

		posix_kill($Bafd292a6f2a760b, 9);
		goto label111;

		label95:

		goto label106;

		label96:

		$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'));

		label106:

		if (!(0 < $C98e11437faf4199)) {
			goto label40;
		}

		goto label3;

		label111:

		if (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) {
			goto label96;
		}

		self::$db->query('SELECT `pid` FROM `streams_servers` WHERE `server_id` = ? AND `stream_id` = ? LIMIT 1;', SERVER_ID, $ee6d1fc5d801b43f);
		$C98e11437faf4199 = intval(self::$db->get_row()['pid']);
		goto label95;

		label136:

		unlink(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f));

		label145:

		self::D242Df32Bd80320f($ee6d1fc5d801b43f, SERVER_ID, 'STREAM_STOP');
		shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*');

		if (!$e7d4a79fdee9a1a0) {
			goto label211;
		}

		goto label191;

		label165:

		if (file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.monitor')) {
			goto label190;
		}

		self::$db->query('SELECT `monitor_pid` FROM `streams_servers` WHERE `server_id` = ? AND `stream_id` = ? LIMIT 1;', SERVER_ID, $ee6d1fc5d801b43f);
		$Bafd292a6f2a760b = intval(self::$db->get_row()['monitor_pid']);
		goto label63;

		label190:

		goto label53;

		label191:

		shell_exec('rm -f ' . DELAY_PATH . intval($ee6d1fc5d801b43f) . '_*');
		self::$db->query('UPDATE `streams_servers` SET `bitrate` = NULL,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`audio_codec` = NULL,`video_codec` = NULL,`resolution` = NULL,`compatible` = 0,`stream_status` = 0,`monitor_pid` = NULL WHERE `stream_id` = ? AND `server_id` = ?', $ee6d1fc5d801b43f, SERVER_ID);
		self::CAc325153a658C37($ee6d1fc5d801b43f);

		label211:

		goto label212;

		label212:
	}

	static public function Aff5E1429ba4F27C($C98e11437faf4199, $A3aa81b5d3e27866)
	{
		if (is_array($A3aa81b5d3e27866)) {
			goto label9;
		}

		$A3aa81b5d3e27866 = [$A3aa81b5d3e27866];

		label9:

		if (!file_exists('/proc/' . $C98e11437faf4199)) {
			goto label40;
		}

		$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));

		foreach ($A3aa81b5d3e27866 as $f23658ae5c2456c3) {
			if (!stristr($C6671ac66a4f1c57, $f23658ae5c2456c3)) {
				goto label38;
			}

			return true;

			label38:
		}

		label40:

		return false;
	}

	static public function B820C3eB85Ebd48c($ee6d1fc5d801b43f, $C7b0a4584580a53d = 0)
	{
		shell_exec(PHP_BIN . ' ' . CLI_PATH . 'monitor.php ' . intval($ee6d1fc5d801b43f) . ' ' . intval($C7b0a4584580a53d) . ' >/dev/null 2>/dev/null &');
		return true;
	}

	static public function startProxy($ee6d1fc5d801b43f)
	{
		shell_exec(PHP_BIN . ' ' . CLI_PATH . 'proxy.php ' . intval($ee6d1fc5d801b43f) . ' >/dev/null 2>/dev/null &');
		return true;
	}

	static public function d1B70980B1181c05($ee6d1fc5d801b43f)
	{
		shell_exec(PHP_BIN . ' ' . CLI_PATH . 'thumbnail.php ' . intval($ee6d1fc5d801b43f) . ' >/dev/null 2>/dev/null &');
		return true;
	}

	static public function d6CC5a7DE37Fa642($ee6d1fc5d801b43f, $ebb4852f69f0dca0 = false)
	{
		shell_exec('kill -9 `ps -ef | grep \'/' . intval($ee6d1fc5d801b43f) . '.\' | grep -v grep | awk \'{print $2}\'`;');

		if ($ebb4852f69f0dca0) {
			goto label28;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `time`, `custom_data`, `cache`) VALUES(?, ?, ?, 1);', SERVER_ID, time(), json_encode(['type' => 'delete_vod', 'id' => $ee6d1fc5d801b43f]));
		goto label39;

		label28:

		exec('rm ' . XUI_HOME . 'content/vod/' . intval($ee6d1fc5d801b43f) . '.*');

		label39:

		self::$db->query('UPDATE `streams_servers` SET `bitrate` = NULL,`current_source` = NULL,`to_analyze` = 0,`pid` = NULL,`stream_started` = NULL,`stream_info` = NULL,`audio_codec` = NULL,`video_codec` = NULL,`resolution` = NULL,`compatible` = 0,`stream_status` = 0 WHERE `stream_id` = ? AND `server_id` = ?', $ee6d1fc5d801b43f, SERVER_ID);
		self::cAC325153A658c37($ee6d1fc5d801b43f);
	}

	static public function queueMovie($ee6d1fc5d801b43f, $C082ca9ed03f473c = NULL)
	{
		if ($C082ca9ed03f473c) {
			goto label6;
		}

		$C082ca9ed03f473c = SERVER_ID;

		label6:

		self::$db->query('DELETE FROM `queue` WHERE `stream_id` = ? AND `server_id` = ?;', $ee6d1fc5d801b43f, $C082ca9ed03f473c);
		self::$db->query('INSERT INTO `queue`(`type`, `stream_id`, `server_id`, `added`) VALUES(\'movie\', ?, ?, ?);', $ee6d1fc5d801b43f, $C082ca9ed03f473c, time());
	}

	static public function queueMovies($dec36723d7be7c49, $C082ca9ed03f473c = NULL)
	{
		goto label3;

		label3:

		if ($C082ca9ed03f473c) {
			goto label7;
		}

		$C082ca9ed03f473c = SERVER_ID;

		label7:

		if (!(0 < count($dec36723d7be7c49))) {
			goto label71;
		}

		self::$db->query('DELETE FROM `queue` WHERE `stream_id` IN (' . implode(',', array_map('intval', $dec36723d7be7c49)) . ') AND `server_id` = ?;', $C082ca9ed03f473c);
		goto label30;

		label30:

		$B91645b8411dc88c = '';

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			if (!(0 < $ee6d1fc5d801b43f)) {
				goto label53;
			}

			$B91645b8411dc88c .= '(\'movie\', ' . intval($ee6d1fc5d801b43f) . ', ' . intval($C082ca9ed03f473c) . ', ' . time() . '),';

			label53:
		}

		if (empty($B91645b8411dc88c)) {
			goto label71;
		}

		$B91645b8411dc88c = rtrim($B91645b8411dc88c, ',');
		goto label64;

		label64:

		self::$db->query('INSERT INTO `queue`(`type`, `stream_id`, `server_id`, `added`) VALUES ' . $B91645b8411dc88c . ';');

		label71:

		goto label72;

		label72:
	}

	static public function refreshMovies($Fe53bcd53690fff4, $A7d54b094ae83c95 = 1)
	{
		if (!(0 < count($Fe53bcd53690fff4))) {
			goto label60;
		}

		self::$db->query('DELETE FROM `watch_refresh` WHERE `type` = ? AND `stream_id` IN (' . implode(',', array_map('intval', $Fe53bcd53690fff4)) . ');', $A7d54b094ae83c95);
		$B91645b8411dc88c = '';

		foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
			if (!(0 < $Abcb228699a7f743)) {
				goto label43;
			}

			$B91645b8411dc88c .= '(' . intval($A7d54b094ae83c95) . ', ' . intval($Abcb228699a7f743) . ', 0),';

			label43:
		}

		if (empty($B91645b8411dc88c)) {
			goto label60;
		}

		$B91645b8411dc88c = rtrim($B91645b8411dc88c, ',');
		self::$db->query('INSERT INTO `watch_refresh`(`type`, `stream_id`, `status`) VALUES ' . $B91645b8411dc88c . ';');

		label60:
	}

	static public function a0d6Da3165b447B7($ee6d1fc5d801b43f)
	{
		goto label186;

		label2:

		if ($bfe0795d7498567d['location'] == SERVER_ID) {
			goto label23;
		}

		$A49bd175882ae87b .= '-sub_charenc ' . $b6111cc087b0efc8 . ' -i "' . self::$rServers[$bfe0795d7498567d['location']]['api_url'] . '&action=getFile&filename=' . urlencode($ad534a35db1b1d01) . '" ';
		goto label609;

		label23:

		$A49bd175882ae87b .= '-sub_charenc ' . $b6111cc087b0efc8 . ' -i ' . $ad534a35db1b1d01 . ' ';
		goto label609;

		label30:

		if (substr($b45008dac88f7d0a, 0, 1) == '/') {
			goto label89;
		}

		$Bf9be24c69c0f17b = substr($b45008dac88f7d0a, 0, strpos($b45008dac88f7d0a, '://'));
		$Aa67586dd3803ca0 = str_replace(' ', '%20', $b45008dac88f7d0a);
		$cfec4a34eff5c713 = implode(' ', self::a0779CB0a5bDf6FF($fe93a43f53d92a4e['stream_arguments'], $Bf9be24c69c0f17b, 'fetch'));
		goto label93;
		goto label89;

		label67:

		$df6991d59f367c7e = 0;

		label68:

		if (!($df6991d59f367c7e < count($bfe0795d7498567d['files']))) {
			goto label612;
		}

		$ad534a35db1b1d01 = escapeshellarg($bfe0795d7498567d['files'][$df6991d59f367c7e]);
		$b6111cc087b0efc8 = escapeshellarg($bfe0795d7498567d['charset'][$df6991d59f367c7e]);
		goto label2;

		label89:

		$d1c611768be583f9 = SERVER_ID;
		$Aa67586dd3803ca0 = $b45008dac88f7d0a;
		$Bf9be24c69c0f17b = NULL;

		label93:

		goto label395;

		label94:

		$A9bb0ba05fdbc059 .= ' >/dev/null 2>' . VOD_PATH . intval($ee6d1fc5d801b43f) . '.errors & echo $! > ' . VOD_PATH . intval($ee6d1fc5d801b43f) . '_.pid';
		$A9bb0ba05fdbc059 = str_replace(['{GPU}', '{INPUT_CODEC}', '{LOGO}', '{FETCH_OPTIONS}', '{STREAM_SOURCE}', '{READ_NATIVE}'], [$a13b8c0c9cf36a9b, $Afa981cde090430b, $c998b20482f21b6b, empty($cfec4a34eff5c713) ? '' : $cfec4a34eff5c713, escapeshellarg($Aa67586dd3803ca0), empty($fe93a43f53d92a4e['stream_info']['custom_ffmpeg']) ? $f170cb25d91509b3 : ''], $A9bb0ba05fdbc059);
		goto label510;

		label136:

		goto label480;

		label137:

		$Aa67586dd3803ca0 = $Dfa434fb466da5d3[2];
		goto label150;

		label140:

		$Aa67586dd3803ca0 = self::$rServers[$d1c611768be583f9]['api_url'] . '&action=getFile&filename=' . urlencode($Dfa434fb466da5d3[2]);

		label150:

		goto label222;

		label151:

		$f170cb25d91509b3 = '';
		goto label154;

		label153:

		$f170cb25d91509b3 = '-re';

		label154:

		goto label155;

		label155:

		if ($fe93a43f53d92a4e['stream_info']['enable_transcode'] == 1) {
			goto label164;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes'] = [];
		goto label409;

		label164:

		if ($fe93a43f53d92a4e['stream_info']['transcode_profile_id'] == -1) {
			goto label451;
		}

		goto label441;

		label170:

		if ($fe93a43f53d92a4e['stream_info']['target_container'] == 'mp4') {
			goto label587;
		}

		if ($fe93a43f53d92a4e['stream_info']['target_container'] == 'mkv') {
			goto label582;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-scodec'] = 'copy';
		goto label586;
		goto label582;

		label186:

		$fe93a43f53d92a4e = [];
		self::$db->query('SELECT * FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type AND t2.live = 0 LEFT JOIN `profiles` t4 ON t1.transcode_profile_id = t4.profile_id WHERE t1.direct_source = 0 AND t1.id = ?', $ee6d1fc5d801b43f);

		if (!(self::$db->num_rows() <= 0)) {
			goto label200;
		}

		return false;

		label200:

		goto label201;

		label201:

		$fe93a43f53d92a4e['stream_info'] = self::$db->get_row();
		self::$db->query('SELECT * FROM `streams_servers` WHERE stream_id  = ? AND `server_id` = ?', $ee6d1fc5d801b43f, SERVER_ID);

		if (!(self::$db->num_rows() <= 0)) {
			goto label221;
		}

		return false;

		label221:

		goto label329;

		label222:

		$Bf9be24c69c0f17b = NULL;

		label223:
		if (((isset($d1c611768be583f9) && ($d1c611768be583f9 == SERVER_ID)) || file_exists($Aa67586dd3803ca0)) && ($fe93a43f53d92a4e['stream_info']['movie_symlink'] == 1)) {
			goto label136;
		}

		$bfe0795d7498567d = json_decode($fe93a43f53d92a4e['stream_info']['movie_subtitles'], true);
		$A49bd175882ae87b = '';
		goto label67;

		label249:

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-scodec'] = 'mov_text';

		label253:

		$Cd826a7439b979ee = [];
		$Cd826a7439b979ee[$fe93a43f53d92a4e['stream_info']['target_container']] = '-movflags +faststart -dn ' . $F08d616f6c857fc2 . ' -ignore_unknown ' . $dca4009fc9668536 . ' ' . VOD_PATH . intval($ee6d1fc5d801b43f) . '.' . escapeshellcmd($fe93a43f53d92a4e['stream_info']['target_container']);

		foreach ($Cd826a7439b979ee as $ad7ee38ca629358c => $C0b1e51a934e21b0) {
			$A9bb0ba05fdbc059 .= implode(' ', self::f6EFe57edF62E7dF($fe93a43f53d92a4e['stream_info']['transcode_attributes'])) . ' ';
			$A9bb0ba05fdbc059 .= $C0b1e51a934e21b0;
		}

		goto label94;

		label294:

		$dca4009fc9668536 = '';
		$df6991d59f367c7e = 0;

		label296:

		if (!($df6991d59f367c7e < count($bfe0795d7498567d['files']))) {
			goto label474;
		}

		$dca4009fc9668536 .= '-map ' . ($df6991d59f367c7e + 1) . (' -metadata:s:s:' . $df6991d59f367c7e . ' title=') . escapeshellcmd($bfe0795d7498567d['names'][$df6991d59f367c7e]) . (' -metadata:s:s:' . $df6991d59f367c7e . ' language=') . escapeshellcmd($bfe0795d7498567d['names'][$df6991d59f367c7e]) . ' ';
		goto label471;

		label329:

		$fe93a43f53d92a4e['server_info'] = self::$db->get_row();
		self::$db->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = ? AND t1.argument_id = t2.id', $ee6d1fc5d801b43f);
		$fe93a43f53d92a4e['stream_arguments'] = self::$db->get_rows();
		$b45008dac88f7d0a = json_decode($fe93a43f53d92a4e['stream_info']['stream_source'], true)[0];

		if (substr($b45008dac88f7d0a, 0, 2) == 's:') {
			goto label396;
		}

		goto label30;

		label361:

		goto label369;

		label362:

		$F08d616f6c857fc2 = escapeshellcmd($fe93a43f53d92a4e['stream_info']['custom_map']) . ' -copy_unknown ';

		label369:

		goto label370;

		label370:

		if (array_key_exists('-acodec', $fe93a43f53d92a4e['stream_info']['transcode_attributes'])) {
			goto label382;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-acodec'] = 'copy';

		label382:

		if (array_key_exists('-vcodec', $fe93a43f53d92a4e['stream_info']['transcode_attributes'])) {
			goto label170;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-vcodec'] = 'copy';
		goto label170;

		label395:

		goto label223;

		label396:

		$Dfa434fb466da5d3 = explode(':', $b45008dac88f7d0a, 3);
		$d1c611768be583f9 = $Dfa434fb466da5d3[1];

		if ($d1c611768be583f9 != SERVER_ID) {
			goto label140;
		}

		goto label137;

		label409:
		$c998b20482f21b6b = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes'][16]) && !$Adabcfa0a2afb126 ? $fe93a43f53d92a4e['stream_info']['transcode_attributes'][16]['cmd'] : '');
		$a13b8c0c9cf36a9b = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']) ? $fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']['cmd'] : '');
		$Afa981cde090430b = '';

		if (empty($a13b8c0c9cf36a9b)) {
			goto label608;
		}

		goto label588;

		label441:

		$fe93a43f53d92a4e['stream_info']['transcode_attributes'] = json_decode($fe93a43f53d92a4e['stream_info']['profile_options'], true);
		goto label470;

		label451:

		$fe93a43f53d92a4e['stream_info']['transcode_attributes'] = array_merge(self::A0779cB0a5BdF6Ff($fe93a43f53d92a4e['stream_arguments'], $Bf9be24c69c0f17b, 'transcode'), json_decode($fe93a43f53d92a4e['stream_info']['transcode_attributes'], true));

		label470:

		goto label409;

		label471:

		$df6991d59f367c7e++;
		goto label296;

		label474:

		if ($fe93a43f53d92a4e['stream_info']['read_native'] == 1) {
			goto label153;
		}

		goto label151;

		label480:

		$A9bb0ba05fdbc059 = 'ln -sfn ' . escapeshellarg($Aa67586dd3803ca0) . ' ' . VOD_PATH . intval($ee6d1fc5d801b43f) . '.' . escapeshellcmd(pathinfo($Aa67586dd3803ca0)['extension']) . ' >/dev/null 2>/dev/null & echo $! > ' . VOD_PATH . intval($ee6d1fc5d801b43f) . '_.pid';

		label510:

		shell_exec($A9bb0ba05fdbc059);
		file_put_contents(VOD_PATH . $ee6d1fc5d801b43f . '_.ffmpeg', $A9bb0ba05fdbc059);
		$C98e11437faf4199 = intval(file_get_contents(VOD_PATH . $ee6d1fc5d801b43f . '_.pid'));
		goto label531;

		label531:

		self::$db->query('UPDATE `streams_servers` SET `to_analyze` = 1,`stream_started` = ?,`stream_status` = 0,`pid` = ? WHERE `stream_id` = ? AND `server_id` = ?', time(), $C98e11437faf4199, $ee6d1fc5d801b43f, SERVER_ID);
		self::cAc325153A658c37($ee6d1fc5d801b43f);
		return $C98e11437faf4199;
		goto label613;

		label547:

		$A9bb0ba05fdbc059 = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']) ? self::$rFFMPEG_GPU : self::$rFFMPEG_CPU) . ' -y -nostdin -hide_banner -loglevel ' . (self::$rSettings['ffmpeg_warnings'] ? 'warning' : 'error') . (' -err_detect ignore_err {GPU} {FETCH_OPTIONS} -fflags +genpts -async 1 {READ_NATIVE} -i {STREAM_SOURCE} {LOGO} ' . $A49bd175882ae87b);
		$F08d616f6c857fc2 = '-map 0 -copy_unknown ';

		if (!empty($fe93a43f53d92a4e['stream_info']['custom_map'])) {
			goto label362;
		}

		if (!($fe93a43f53d92a4e['stream_info']['remove_subtitles'] == 1)) {
			goto label361;
		}

		$F08d616f6c857fc2 = '-map 0:a -map 0:v';
		goto label361;

		label582:

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-scodec'] = 'srt';

		label586:

		goto label253;

		label587:

		goto label249;

		label588:

		$E9de85a1ad46b96d = self::E57006536cD5655D($Aa67586dd3803ca0);

		if (!in_array($E9de85a1ad46b96d['codecs']['video']['codec_name'], ['h264', 'hevc', 'mjpeg', 'mpeg1', 'mpeg2', 'mpeg4', 'vc1', 'vp8', 'vp9'])) {
			goto label608;
		}

		$Afa981cde090430b = '-c:v ' . $E9de85a1ad46b96d['codecs']['video']['codec_name'] . '_cuvid';

		label608:

		goto label547;

		label609:

		$df6991d59f367c7e++;
		goto label68;

		label612:

		goto label294;

		label613:
	}

	static public function AeFeA986184CA49e($Cc08b488984ab476)
	{
		goto label21;

		label2:

		if ($f547aeca99c55c3e) {
			goto label5;
		}

		$Cc08b488984ab476 .= 'domain=;';

		label5:

		return $Cc08b488984ab476;
		goto label62;

		label7:

		if (!(!substr($Cc08b488984ab476, -1) == ';')) {
			goto label17;
		}

		$Cc08b488984ab476 .= ';';

		label17:

		if ($E111d28e9acc50b9) {
			goto label2;
		}

		$Cc08b488984ab476 .= 'path=/;';
		goto label2;

		label21:

		$E111d28e9acc50b9 = false;
		$f547aeca99c55c3e = false;
		$E3665d09b9cea208 = explode(';', $Cc08b488984ab476);

		foreach ($E3665d09b9cea208 as $ab8782c89c1e5476) {
			list($Bb672d1983256a93, $ce0840c647e1bbc7) = explode('=', $ab8782c89c1e5476, 1);

			if (strtolower($Bb672d1983256a93) == 'path') {
				goto label58;
			}

			if (!(strtolower($Bb672d1983256a93) == 'domain')) {
				goto label56;
			}

			$f547aeca99c55c3e = true;

			label56:

			goto label59;

			label58:

			$E111d28e9acc50b9 = true;

			label59:
		}

		goto label7;

		label62:
	}

	static public function a26bF0F7ce9b3F6B($ee6d1fc5d801b43f)
	{
	}

	static public function F7da8229d2d44874($ee6d1fc5d801b43f, $D9d6a5d0b76a9aaf, $b5337d8a535cf6dd, $d1262bf56a392f1b = NULL)
	{
		goto label32;

		label5:

		$Bb672d1983256a93 = openssl_random_pseudo_bytes(16);
		file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.key', $Bb672d1983256a93);
		$E088a35129311baf = openssl_cipher_iv_length('AES-128-CBC');
		$bb7d05c80dea0f44 = openssl_random_pseudo_bytes($E088a35129311baf);
		file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.iv', $bb7d05c80dea0f44);
		goto label128;

		label32:

		shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*.ts');

		if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) {
			goto label57;
		}

		unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid');

		label57:

		$Ec0879f16d0cdddb = ($d1262bf56a392f1b ? [$d1262bf56a392f1b] : json_decode($D9d6a5d0b76a9aaf['stream_source'], true));
		goto label69;

		label69:

		$f7a009fc2333a8d0 = [];

		foreach ($b5337d8a535cf6dd as $Eff0c8da565b49b8) {
			$f7a009fc2333a8d0[$Eff0c8da565b49b8['argument_key']] = ['value' => $Eff0c8da565b49b8['value'], 'argument_default_value' => $Eff0c8da565b49b8['argument_default_value']];
		}

		shell_exec(PHP_BIN . ' ' . CLI_PATH . 'llod.php ' . intval($ee6d1fc5d801b43f) . ' "' . base64_encode(json_encode($Ec0879f16d0cdddb)) . '" "' . base64_encode(json_encode($f7a009fc2333a8d0)) . '" >/dev/null 2>/dev/null & echo $! > ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_.pid');
		$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'));
		goto label5;

		label128:

		self::$db->query('UPDATE `streams_servers` SET `delay_available_at` = ?,`to_analyze` = 0,`stream_started` = ?,`stream_info` = ?,`stream_status` = 2,`pid` = ?,`progress_info` = ?,`current_source` = ? WHERE `stream_id` = ? AND `server_id` = ?', NULL, time(), NULL, $C98e11437faf4199, json_encode([]), $Ec0879f16d0cdddb[0], $ee6d1fc5d801b43f, SERVER_ID);
		self::CaC325153a658C37($ee6d1fc5d801b43f);
		return ['main_pid' => $C98e11437faf4199, 'stream_source' => $Ec0879f16d0cdddb[0], 'delay_enabled' => false, 'parent_id' => 0, 'delay_start_at' => NULL, 'playlist' => STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8', 'transcode' => false, 'offset' => 0];
		goto label164;

		label164:
	}

	static public function startLoopback($ee6d1fc5d801b43f)
	{
		goto label2;

		label2:

		shell_exec('rm -f ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_*.ts');

		if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) {
			goto label27;
		}

		unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid');

		label27:

		$fe93a43f53d92a4e = [];
		goto label29;

		label29:

		self::$db->query('SELECT * FROM `streams` WHERE direct_source = 0 AND id = ?', $ee6d1fc5d801b43f);

		if (!(self::$db->num_rows() <= 0)) {
			goto label42;
		}

		return false;

		label42:

		$fe93a43f53d92a4e['stream_info'] = self::$db->get_row();
		goto label48;

		label48:

		self::$db->query('SELECT * FROM `streams_servers` WHERE stream_id  = ? AND `server_id` = ?', $ee6d1fc5d801b43f, SERVER_ID);

		if (!(self::$db->num_rows() <= 0)) {
			goto label63;
		}

		return false;

		label63:

		$fe93a43f53d92a4e['server_info'] = self::$db->get_row();
		goto label151;

		label69:

		self::$db->query('UPDATE `streams_servers` SET `delay_available_at` = ?,`to_analyze` = 0,`stream_started` = ?,`stream_info` = ?,`stream_status` = 2,`pid` = ?,`progress_info` = ?,`current_source` = ? WHERE `stream_id` = ? AND `server_id` = ?', NULL, time(), NULL, $C98e11437faf4199, json_encode([]), $Ec0879f16d0cdddb[0], $ee6d1fc5d801b43f, SERVER_ID);
		self::Cac325153A658C37($ee6d1fc5d801b43f);
		$f1909b8abf41f80d = (!is_null(self::$rServers[SERVER_ID]['private_url_ip']) && !is_null(self::$rServers[$fe93a43f53d92a4e['server_info']['parent_id']]['private_url_ip']) ? self::$rServers[$fe93a43f53d92a4e['server_info']['parent_id']]['private_url_ip'] : self::$rServers[$fe93a43f53d92a4e['server_info']['parent_id']]['public_url_ip']);
		return ['main_pid' => $C98e11437faf4199, 'stream_source' => $f1909b8abf41f80d . 'admin/live?stream=' . intval($ee6d1fc5d801b43f) . '&password=' . urlencode(self::$rSettings['live_streaming_pass']) . '&extension=ts', 'delay_enabled' => false, 'parent_id' => 0, 'delay_start_at' => NULL, 'playlist' => STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8', 'transcode' => false, 'offset' => 0];
		goto label223;

		label151:

		if (!($fe93a43f53d92a4e['server_info']['parent_id'] == 0)) {
			goto label158;
		}

		return 0;

		label158:

		shell_exec(PHP_BIN . ' ' . CLI_PATH . 'loopback.php ' . intval($ee6d1fc5d801b43f) . ' ' . intval($fe93a43f53d92a4e['server_info']['parent_id']) . ' >/dev/null 2>/dev/null & echo $! > ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_.pid');
		$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'));
		goto label196;

		label196:

		$Bb672d1983256a93 = openssl_random_pseudo_bytes(16);
		file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.key', $Bb672d1983256a93);
		$E088a35129311baf = openssl_cipher_iv_length('AES-128-CBC');
		$bb7d05c80dea0f44 = openssl_random_pseudo_bytes($E088a35129311baf);
		file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.iv', $bb7d05c80dea0f44);
		goto label69;

		label223:
	}

	static public function fFA26438E002C2B7($ee6d1fc5d801b43f, $D48924cbd42e0e79 = false, $d1262bf56a392f1b = NULL, $D1819284a1a68f53 = false, $a9513c1db6b97bd8 = 0)
	{
		goto label230;

		label6:

		$A9bb0ba05fdbc059 .= implode(' ', self::F6efE57EdF62e7Df($fe93a43f53d92a4e['stream_info']['transcode_attributes'])) . ' ';

		if (self::$rSegmentSettings['seg_type'] == 0) {
			goto label56;
		}

		$A9bb0ba05fdbc059 .= '{MAP} -individual_header_trailer 0 -f segment -segment_format mpegts -segment_time ' . intval(self::$rSegmentSettings['seg_time']) . ' -segment_list_size ' . (intval($fe93a43f53d92a4e['stream_info']['delay_minutes']) * 6) . (' -segment_start_number ' . $d66f821047a8f8dd . ' -segment_format_options "mpegts_flags=+initial_discontinuity:mpegts_copyts=1" -segment_list_type m3u8 -segment_list_flags +live+delete -segment_list "') . DELAY_PATH . intval($ee6d1fc5d801b43f) . '_.m3u8" "' . DELAY_PATH . intval($ee6d1fc5d801b43f) . '_%d.ts" ';
		goto label1522;

		label56:

		goto label1489;

		label57:

		$ec173304ea5bcb05 = 0;
		$Ea0fade993e4268b = $Dcf2a78a4c7b0c6f = $C98609e3115bee61 = NULL;

		if (!$E9de85a1ad46b96d) {
			goto label505;
		}

		$ec173304ea5bcb05 = intval(self::D00c33C8075D14A5($E9de85a1ad46b96d));
		$Ea0fade993e4268b = $E9de85a1ad46b96d['codecs']['audio']['codec_name'] ?: NULL;
		goto label1088;

		label78:

		file_put_contents(DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8_old', file_get_contents(DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8_old') . file_get_contents(DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8'));
		shell_exec('sed -i \'/EXTINF\\|.ts/!d\' ' . DELAY_PATH . intval($ee6d1fc5d801b43f) . '_.m3u8_old');

		label108:

		goto label6;

		label109:

		$F08d616f6c857fc2 = '-map 0 -copy_unknown ';

		label110:
		if ((($fe93a43f53d92a4e['stream_info']['gen_timestamps'] == 1) || empty($Bf9be24c69c0f17b)) && ($fe93a43f53d92a4e['stream_info']['type_key'] != 'created_live')) {
			goto label1377;
		}
		if (!(in_array($E9de85a1ad46b96d['codecs']['audio']['codec_name'], ['ac3', 'eac3']) && self::$rSettings['dts_legacy_ffmpeg'])) {
			goto label351;
		}

		self::$rFFMPEG_CPU = FFMPEG_BIN_40;
		goto label348;

		label141:

		if (!(self::$db->num_rows() <= 0)) {
			goto label149;
		}

		return false;

		label149:

		$fe93a43f53d92a4e['server_info'] = self::$db->get_row();
		self::$db->query('SELECT t1.*, t2.* FROM `streams_options` t1, `streams_arguments` t2 WHERE t1.stream_id = ? AND t1.argument_id = t2.id', $ee6d1fc5d801b43f);
		goto label559;

		label160:

		if (!(0 < count($Ec0879f16d0cdddb))) {
			goto label1418;
		}

		if (!empty($d1262bf56a392f1b)) {
			goto label1623;
		}

		if (!(self::$rSettings['priority_backup'] != 1)) {
			goto label1622;
		}

		goto label1360;

		label178:

		if ($Adabcfa0a2afb126) {
			goto label182;
		}

		$Fff7d74ee020d096 = '{GPU} {FETCH_OPTIONS}';
		goto label1550;

		label182:

		$Fff7d74ee020d096 = '{FETCH_OPTIONS}';
		goto label1550;

		label184:
		$Cfdcbbc0d96f50bd = (0 < $fe93a43f53d92a4e['stream_info']['delay_minutes']) && !$fe93a43f53d92a4e['server_info']['parent_id'];
		$Bf6f1380ac9a8017 = ($Cfdcbbc0d96f50bd ? time() + $A5ee2c01a684b004 : 0);

		if (!$fe93a43f53d92a4e['stream_info']['enable_transcode']) {
			goto label207;
		}

		$E9de85a1ad46b96d = [];

		label207:

		goto label57;

		label208:

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-vcodec'] = 'copy';

		label212:

		if (array_key_exists('-scodec', $fe93a43f53d92a4e['stream_info']['transcode_attributes'])) {
			goto label1297;
		}

		if (self::$rSegmentSettings['seg_type'] == 0) {
			goto label1293;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-scodec'] = 'copy';
		goto label1292;

		label230:

		if (!file_exists(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid')) {
			goto label245;
		}

		unlink(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid');

		label245:

		$fe93a43f53d92a4e = [];
		self::$db->query('SELECT * FROM `streams` t1 INNER JOIN `streams_types` t2 ON t2.type_id = t1.type AND t2.live = 1 LEFT JOIN `profiles` t4 ON t1.transcode_profile_id = t4.profile_id WHERE t1.direct_source = 0 AND t1.id = ?', $ee6d1fc5d801b43f);
		goto label1707;

		label252:

		if (!($A5ee2c01a684b004 <= 0)) {
			goto label257;
		}

		$A5ee2c01a684b004 = 0;

		label257:

		goto label1606;
		goto label1567;

		label259:

		shell_exec(PHP_BIN . ' ' . CLI_PATH . 'archive.php ' . intval($ee6d1fc5d801b43f) . ' >/dev/null 2>/dev/null & echo $!');

		label272:

		if (!($fe93a43f53d92a4e['stream_info']['vframes_server_id'] == SERVER_ID)) {
			goto label282;
		}

		self::D1b70980B1181c05($ee6d1fc5d801b43f);

		label282:

		goto label184;

		label283:

		if (!file_exists(DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8')) {
			goto label108;
		}

		$D6be258a9043b749 = file(DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8');

		if (stristr($D6be258a9043b749[count($D6be258a9043b749) - 1], $ee6d1fc5d801b43f . '_')) {
			goto label364;
		}

		if (!preg_match('/\\_(.*?)\\.ts/', $D6be258a9043b749[count($D6be258a9043b749) - 2], $Ac97fb1939417214)) {
			goto label363;
		}

		$d66f821047a8f8dd = intval($Ac97fb1939417214[1]) + 1;
		goto label363;

		label331:

		$Fbc90dfe9ec33cdb = '';

		foreach ($ab3c1f168f2aac8b as $B4a603c2a57d3acf) {
			$Fbc90dfe9ec33cdb .= 'file \'' . $B4a603c2a57d3acf . '\'' . "\n";
		}

		file_put_contents(CREATED_PATH . $ee6d1fc5d801b43f . '_.tlist', $Fbc90dfe9ec33cdb);

		label347:

		goto label160;

		label348:

		self::$rFFPROBE = FFPROBE_BIN_40;

		label351:

		$c72720600beee982 = (self::$rFFMPEG_CPU == FFMPEG_BIN_40 ? '-nofix_dts' : '');
		$ffbe23814710c213 = $c72720600beee982 . ' -start_at_zero -copyts -vsync 0 -correct_ts_overflow 0 -avoid_negative_ts disabled -max_interleave_delta 0';
		goto label1378;
		goto label1377;

		label363:

		goto label1109;

		label364:

		if (!preg_match('/\\_(.*?)\\.ts/', $D6be258a9043b749[count($D6be258a9043b749) - 1], $Ac97fb1939417214)) {
			goto label1109;
		}

		$d66f821047a8f8dd = intval($Ac97fb1939417214[1]) + 1;
		goto label1109;

		label384:

		$df6991d59f367c7e++;
		goto label1376;

		label387:

		$Ec0879f16d0cdddb = array_values($Ec0879f16d0cdddb);

		label391:

		goto label1622;

		label392:
		$F281bc9db7aaa002 = ($D1819284a1a68f53 && !$Adabcfa0a2afb126 ? '-fflags nobuffer -flags low_delay -strict experimental' : '');
		$Cd826a7439b979ee = [];

		if ($Adabcfa0a2afb126) {
			goto label600;
		}

		$Fff7d74ee020d096 = '{MAP} {LLOD}';
		goto label598;

		label405:

		goto label425;

		label406:

		$fe93a43f53d92a4e['stream_info']['transcode_attributes'] = array_merge(self::A0779cB0a5Bdf6FF($fe93a43f53d92a4e['stream_arguments'], $Bf9be24c69c0f17b, 'transcode'), json_decode($fe93a43f53d92a4e['stream_info']['transcode_attributes'], true));

		label425:

		goto label999;

		label426:

		if (empty($fe93a43f53d92a4e['stream_info']['custom_ffmpeg'])) {
			goto label463;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes'] = [];
		$A9bb0ba05fdbc059 = (stripos($fe93a43f53d92a4e['stream_info']['custom_ffmpeg'], 'nvenc') !== false ? self::$rFFMPEG_GPU : self::$rFFMPEG_CPU) . ' -y -nostdin -hide_banner -loglevel ' . (self::$rSettings['ffmpeg_warnings'] ? 'warning' : 'error') . (' -progress "' . $F9be7f2a8cce0061 . '" ') . $fe93a43f53d92a4e['stream_info']['custom_ffmpeg'];
		goto label392;

		label463:

		goto label178;

		label464:

		goto label466;

		label465:

		$f170cb25d91509b3 = '-re';

		label466:
		if (!$fe93a43f53d92a4e['server_info']['parent_id'] && ($fe93a43f53d92a4e['stream_info']['enable_transcode'] == 1) && ($fe93a43f53d92a4e['stream_info']['type_key'] != 'created_live')) {
			goto label984;
		}

		goto label980;

		label482:

		return 0;

		label483:

		$e80901930ad0cef7 = json_decode($fe93a43f53d92a4e['stream_info']['external_push'], true);
		$F9be7f2a8cce0061 = 'http://127.0.0.1:' . intval(self::$rServers[SERVER_ID]['http_broadcast_port']) . '/progress?stream_id=' . intval($ee6d1fc5d801b43f);
		goto label426;

		label505:

		self::$db->query('UPDATE `streams_servers` SET `delay_available_at` = ?,`to_analyze` = 0,`stream_started` = ?,`stream_info` = ?,`audio_codec` = ?, `video_codec` = ?, `resolution` = ?,`compatible` = ?,`stream_status` = 2,`pid` = ?,`progress_info` = ?,`current_source` = ? WHERE `stream_id` = ? AND `server_id` = ?', $Bf6f1380ac9a8017, time(), json_encode($E9de85a1ad46b96d), $Ea0fade993e4268b, $Dcf2a78a4c7b0c6f, $C98609e3115bee61, $ec173304ea5bcb05, $C98e11437faf4199, json_encode([]), $fd51b5505224fc7c, $ee6d1fc5d801b43f, SERVER_ID);
		self::CaC325153a658C37($ee6d1fc5d801b43f);
		$Aac64ae34ff57fc4 = (!$Cfdcbbc0d96f50bd ? STREAMS_PATH . $ee6d1fc5d801b43f . '_.m3u8' : DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8');
		return ['main_pid' => $C98e11437faf4199, 'stream_source' => $e4e67f6bddd67d31, 'delay_enabled' => $Cfdcbbc0d96f50bd, 'parent_id' => $fe93a43f53d92a4e['server_info']['parent_id'], 'delay_start_at' => $Bf6f1380ac9a8017, 'playlist' => $Aac64ae34ff57fc4, 'transcode' => $fe93a43f53d92a4e['stream_info']['enable_transcode'], 'offset' => $A486d2019332744a];
		goto label1955;

		label559:

		$fe93a43f53d92a4e['stream_arguments'] = self::$db->get_rows();

		if ($fe93a43f53d92a4e['server_info']['on_demand'] == 1) {
			goto label1534;
		}

		$Fe2ee13c1d643ec7 = abs(intval(self::$rSettings['stream_max_analyze']));
		$ea5e624c582e2c75 = abs(intval(self::$rSettings['probesize']));
		goto label1541;
		goto label1534;

		label589:

		$F08d616f6c857fc2 = escapeshellcmd($fe93a43f53d92a4e['stream_info']['custom_map']) . ' -copy_unknown ';

		label596:

		goto label110;

		label597:

		goto label109;

		label598:

		$D82ac9c0f29f8f83 = '{MAP} {AAC_FILTER}';
		goto label1239;

		label600:

		$Fff7d74ee020d096 = '{MAP}';
		$D82ac9c0f29f8f83 = '{MAP}';
		goto label1238;

		label603:

		self::Ed95dE2789ce39fb($Ec0879f16d0cdddb);

		label606:

		foreach ($Ec0879f16d0cdddb as $fd51b5505224fc7c) {
			goto label848;

			label610:
			$E9de85a1ad46b96d = json_decode(shell_exec(str_replace(['{FETCH_OPTIONS}', '{CONCAT}', '{STREAM_SOURCE}'], [$D922f0ac9b529bac, ($fe93a43f53d92a4e['stream_info']['type_key'] == 'created_live') && !$fe93a43f53d92a4e['server_info']['parent_id'] ? '-safe 0 -f concat' : '', escapeshellarg($b45008dac88f7d0a)], $b7ce96d09b50faff)), true);
			if (!($E9de85a1ad46b96d && isset($E9de85a1ad46b96d['streams']))) {
				goto label651;
			}

			echo 'Got stream information via ffprobe' . "\n";
			goto label958;

			label651:

			goto label767;

			label653:

			foreach (array_keys($B2d0b38ec0647bf8) as $Abcb228699a7f743) {
				if (!($B2d0b38ec0647bf8[$Abcb228699a7f743]['argument_key'] == 'headers')) {
					goto label670;
				}

				$B2d0b38ec0647bf8[$Abcb228699a7f743]['value'] .= "\r\n" . 'X-XUI-Prebuffer:1';
				$de578ef493699315 = true;

				label670:
			}

			if ($de578ef493699315) {
				goto label863;
			}

			$B2d0b38ec0647bf8[] = ['value' => 'X-XUI-Prebuffer:1', 'argument_key' => 'headers', 'argument_cat' => 'fetch', 'argument_wprotocol' => 'http', 'argument_type' => 'text', 'argument_cmd' => '-headers \'%s' . "\r\n" . '\''];
			goto label863;

			label679:

			$E69320832f358c18 = ($Adabcfa0a2afb126 ? true : self::c6c3738AeeBb9958($b45008dac88f7d0a));
			if (!($E69320832f358c18 && !$Adabcfa0a2afb126 && self::$rSettings['send_xui_header'])) {
				goto label772;
			}

			foreach (array_keys($fe93a43f53d92a4e['stream_arguments']) as $Abcb228699a7f743) {
				if (!($fe93a43f53d92a4e['stream_arguments'][$Abcb228699a7f743]['argument_key'] == 'headers')) {
					goto label718;
				}

				$fe93a43f53d92a4e['stream_arguments'][$Abcb228699a7f743]['value'] .= "\r\n" . 'X-XUI-Detect:1';
				$de578ef493699315 = true;

				label718:
			}

			if ($de578ef493699315) {
				goto label772;
			}

			goto label769;

			label725:
			if (!(!$fe93a43f53d92a4e['server_info']['on_demand'] || !$D1819284a1a68f53)) {
				goto label767;
			}
			if (!($E69320832f358c18 && self::$rSettings['api_probe'])) {
				goto label800;
			}

			$Dfd95aa1f46fdf22 = $d24a79ef5aa1793c['scheme'] . '://' . $d24a79ef5aa1793c['host'] . ':' . $d24a79ef5aa1793c['port'] . '/probe/' . base64_encode($d24a79ef5aa1793c['path']);
			$E9de85a1ad46b96d = json_decode(self::c6CeEC588476Ec43($Dfd95aa1f46fdf22), true);
			goto label790;

			label767:

			goto label956;

			label769:

			$fe93a43f53d92a4e['stream_arguments'][] = ['value' => 'X-XUI-Detect:1', 'argument_key' => 'headers', 'argument_cat' => 'fetch', 'argument_wprotocol' => 'http', 'argument_type' => 'text', 'argument_cmd' => '-headers \'%s' . "\r\n" . '\''];

			label772:

			$B2d0b38ec0647bf8 = $fe93a43f53d92a4e['stream_arguments'];
			if (!($E69320832f358c18 && ($fe93a43f53d92a4e['server_info']['on_demand'] == 1) && (self::$rSettings['request_prebuffer'] == 1))) {
				goto label653;
			}

			goto label926;

			label790:
			if (!($E9de85a1ad46b96d && isset($E9de85a1ad46b96d['codecs']))) {
				goto label800;
			}

			echo 'Got stream information via API' . "\n";
			goto label958;

			label800:

			goto label610;

			label802:

			$E9de85a1ad46b96d = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . md5($b45008dac88f7d0a)));
			if (!($E9de85a1ad46b96d && (isset($E9de85a1ad46b96d['streams']) || isset($E9de85a1ad46b96d['codecs'])))) {
				goto label827;
			}

			echo 'Got stream information via cache' . "\n";
			goto label958;

			label827:

			goto label725;

			label829:
			if (!($D48924cbd42e0e79 && file_exists(CACHE_TMP_PATH . md5($fd51b5505224fc7c)))) {
				goto label844;
			}

			$D48924cbd42e0e79 = false;

			label844:

			goto label725;

			label846:

			goto label802;

			label848:

			$de578ef493699315 = false;
			$e4e67f6bddd67d31 = $fd51b5505224fc7c;
			$b45008dac88f7d0a = self::C1F42CA38aD7a48d($fd51b5505224fc7c);
			echo 'Checking source: ' . $fd51b5505224fc7c . "\n";
			$d24a79ef5aa1793c = parse_url($b45008dac88f7d0a);
			goto label679;

			label863:

			$Bf9be24c69c0f17b = strtolower(substr($b45008dac88f7d0a, 0, strpos($b45008dac88f7d0a, '://')));
			$D922f0ac9b529bac = implode(' ', self::a0779Cb0a5BDf6Ff($B2d0b38ec0647bf8, $Bf9be24c69c0f17b, 'fetch'));
			$cfec4a34eff5c713 = implode(' ', self::a0779CB0a5Bdf6FF($fe93a43f53d92a4e['stream_arguments'], $Bf9be24c69c0f17b, 'fetch'));
			if ($D48924cbd42e0e79 && file_exists(CACHE_TMP_PATH . md5($fd51b5505224fc7c)) && ((time() - filemtime(CACHE_TMP_PATH . md5($fd51b5505224fc7c))) <= 300)) {
				goto label846;
			}

			goto label829;

			label926:

			foreach (array_keys($fe93a43f53d92a4e['stream_arguments']) as $Abcb228699a7f743) {
				if (!($fe93a43f53d92a4e['stream_arguments'][$Abcb228699a7f743]['argument_key'] == 'headers')) {
					goto label946;
				}

				$fe93a43f53d92a4e['stream_arguments'][$Abcb228699a7f743]['value'] .= "\r\n" . 'X-XUI-Prebuffer:1';
				$de578ef493699315 = true;

				label946:
			}

			if ($de578ef493699315) {
				goto label954;
			}

			$fe93a43f53d92a4e['stream_arguments'][] = ['value' => 'X-XUI-Prebuffer:1', 'argument_key' => 'headers', 'argument_cat' => 'fetch', 'argument_wprotocol' => 'http', 'argument_type' => 'text', 'argument_cmd' => '-headers \'%s' . "\r\n" . '\''];

			label954:

			goto label653;

			label956:
		}

		label958:
		if (!(!$fe93a43f53d92a4e['server_info']['on_demand'] || !$D1819284a1a68f53)) {
			goto label483;
		}

		goto label1048;

		label968:

		goto label160;

		label969:

		$Ec0879f16d0cdddb = [CREATED_PATH . $ee6d1fc5d801b43f . '_.list'];

		if (!(0 < $a9513c1db6b97bd8)) {
			goto label160;
		}

		$ab3c1f168f2aac8b = [];
		goto label1061;

		label980:

		$fe93a43f53d92a4e['stream_info']['transcode_attributes'] = [];
		goto label425;

		label984:

		if ($fe93a43f53d92a4e['stream_info']['transcode_profile_id'] == -1) {
			goto label406;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes'] = json_decode($fe93a43f53d92a4e['stream_info']['profile_options'], true);
		goto label405;

		label999:

		$A9bb0ba05fdbc059 = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']) ? self::$rFFMPEG_GPU : self::$rFFMPEG_CPU) . ' -y -nostdin -hide_banner -loglevel ' . (self::$rSettings['ffmpeg_warnings'] ? 'warning' : 'error') . (' -err_detect ignore_err ' . $Fff7d74ee020d096 . ' {GEN_PTS} {READ_NATIVE} -probesize ' . $ea5e624c582e2c75 . ' -analyzeduration ' . $Fe2ee13c1d643ec7 . ' -progress "' . $F9be7f2a8cce0061 . '" {CONCAT} -i {STREAM_SOURCE} {LOGO} ');

		if (array_key_exists('-acodec', $fe93a43f53d92a4e['stream_info']['transcode_attributes'])) {
			goto label1039;
		}

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-acodec'] = 'copy';

		label1039:

		if (array_key_exists('-vcodec', $fe93a43f53d92a4e['stream_info']['transcode_attributes'])) {
			goto label212;
		}

		goto label208;

		label1048:

		if (isset($E9de85a1ad46b96d['codecs'])) {
			goto label1055;
		}

		$E9de85a1ad46b96d = self::c24AC2006b36a530($E9de85a1ad46b96d);

		label1055:

		if (empty($E9de85a1ad46b96d)) {
			goto label1145;
		}

		if ($D48924cbd42e0e79) {
			goto label1144;
		}

		goto label1132;

		label1061:

		$fec00097a13da173 = [];
		$d39b06d67f28803d = json_decode($fe93a43f53d92a4e['server_info']['cc_info'], true);

		foreach ($d39b06d67f28803d as $B4a603c2a57d3acf) {
			$fec00097a13da173[$B4a603c2a57d3acf['path']] = intval(explode('.', $B4a603c2a57d3acf['seconds'])[0]);
		}

		$d78b5d74bc5c2761 = 0;
		goto label1626;

		label1088:

		$Dcf2a78a4c7b0c6f = $E9de85a1ad46b96d['codecs']['video']['codec_name'] ?: NULL;
		$C98609e3115bee61 = $E9de85a1ad46b96d['codecs']['video']['height'] ?: NULL;

		if (!$C98609e3115bee61) {
			goto label1108;
		}

		$C98609e3115bee61 = self::B954Bd7C2bEC3C82([240, 360, 480, 576, 720, 1080, 1440, 2160], $C98609e3115bee61);

		label1108:

		goto label505;

		label1109:

		if (file_exists(DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8_old')) {
			goto label78;
		}

		copy(DELAY_PATH . $ee6d1fc5d801b43f . '_.m3u8', DELAY_PATH . intval($ee6d1fc5d801b43f) . '_.m3u8_old');
		goto label108;
		goto label78;

		label1132:

		file_put_contents(CACHE_TMP_PATH . md5($fd51b5505224fc7c), igbinary_serialize($E9de85a1ad46b96d));

		label1144:

		goto label483;

		label1145:

		self::$db->query('UPDATE `streams_servers` SET `progress_info` = \'\',`to_analyze` = 0,`pid` = -1,`stream_status` = 1 WHERE `server_id` = ? AND `stream_id` = ?', SERVER_ID, $ee6d1fc5d801b43f);
		goto label482;

		label1153:

		if (!($fe93a43f53d92a4e['stream_info']['rtmp_output'] == 1)) {
			goto label1186;
		}

		$Cd826a7439b979ee['flv'][] = $D82ac9c0f29f8f83 . ' -f flv -flvflags no_duration_filesize rtmp://127.0.0.1:' . intval(self::$rServers[$fe93a43f53d92a4e['server_info']['server_id']]['rtmp_port']) . '/live/' . intval($ee6d1fc5d801b43f) . '?password=' . urlencode(self::$rSettings['live_streaming_pass']) . ' ';

		label1186:

		if (empty($e80901930ad0cef7[SERVER_ID])) {
			goto label1427;
		}

		foreach ($e80901930ad0cef7[SERVER_ID] as $a5bba1eda3d3318b) {
			$Cd826a7439b979ee['flv'][] = $D82ac9c0f29f8f83 . ' -f flv -flvflags no_duration_filesize ' . escapeshellarg($a5bba1eda3d3318b) . ' ';
		}

		goto label1427;

		label1207:
		if (!(($fe93a43f53d92a4e['stream_info']['type_key'] == 'created_live') && file_exists(CREATED_PATH . $ee6d1fc5d801b43f . '_.info'))) {
			goto label1235;
		}

		self::$db->query('UPDATE `streams_servers` SET `cc_info` = ? WHERE `server_id` = ? AND `stream_id` = ?;', file_get_contents(CREATED_PATH . $ee6d1fc5d801b43f . '_.info'), SERVER_ID, $ee6d1fc5d801b43f);

		label1235:

		if ($D48924cbd42e0e79) {
			goto label606;
		}

		goto label603;

		label1238:

		$F08d616f6c857fc2 = '-map 0 -copy_unknown ';

		label1239:

		if (self::$rSegmentSettings['seg_type'] == 0) {
			goto label1871;
		}

		$B3e67d2ee02076f5 = (self::$rSettings['ignore_keyframes'] ? ' -break_non_keyframes 1' : '');
		$Cd826a7439b979ee['mpegts'][] = $Fff7d74ee020d096 . ' -individual_header_trailer 0 -f segment -segment_format mpegts -segment_time ' . intval(self::$rSegmentSettings['seg_time']) . ' -segment_list_size ' . intval(self::$rSegmentSettings['seg_list_size']) . (' -segment_format_options "mpegts_flags=+initial_discontinuity:mpegts_copyts=1" -segment_list_type m3u8 -segment_list_flags +live+delete' . $B3e67d2ee02076f5 . ' -segment_list "') . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_.m3u8" "' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_%d.ts" ';
		goto label1870;

		label1288:

		goto label1290;

		label1289:

		$F08d616f6c857fc2 = '-map 0:a? ';

		label1290:

		goto label596;
		goto label589;

		label1292:

		goto label1297;

		label1293:

		$fe93a43f53d92a4e['stream_info']['transcode_attributes']['-sn'] = '';

		label1297:

		goto label392;

		label1298:
		if (!(!empty($a13b8c0c9cf36a9b) && in_array($E9de85a1ad46b96d['codecs']['video']['codec_name'], ['h264', 'hevc', 'mjpeg', 'mpeg1', 'mpeg2', 'mpeg4', 'vc1', 'vp8', 'vp9']))) {
			goto label1318;
		}

		$Afa981cde090430b = '-c:v ' . $E9de85a1ad46b96d['codecs']['video']['codec_name'] . '_cuvid';

		label1318:
		if (!((0 < $fe93a43f53d92a4e['stream_info']['delay_minutes']) && !$fe93a43f53d92a4e['server_info']['parent_id'])) {
			goto label1567;
		}

		$d66f821047a8f8dd = 0;
		goto label283;

		label1331:

		$Ec0879f16d0cdddb = [$f1909b8abf41f80d . 'admin/live?stream=' . intval($ee6d1fc5d801b43f) . '&password=' . urlencode(self::$rSettings['live_streaming_pass']) . '&extension=ts'];
		goto label1418;

		label1347:

		if ($fe93a43f53d92a4e['stream_info']['type_key'] == 'created_live') {
			goto label969;
		}

		$Ec0879f16d0cdddb = json_decode($fe93a43f53d92a4e['stream_info']['stream_source'], true);
		goto label968;

		label1360:

		if (empty($fe93a43f53d92a4e['server_info']['current_source'])) {
			goto label1622;
		}

		$db399c129e6fdb57 = array_search($fe93a43f53d92a4e['server_info']['current_source'], $Ec0879f16d0cdddb);

		if (!($db399c129e6fdb57 !== false)) {
			goto label391;
		}

		$df6991d59f367c7e = 0;

		label1376:

		goto label1943;

		label1377:

		$ffbe23814710c213 = '-fflags +genpts -async 1';

		label1378:
		if (!$fe93a43f53d92a4e['server_info']['parent_id'] && (($fe93a43f53d92a4e['stream_info']['read_native'] == 1) || (stristr($E9de85a1ad46b96d['container'], 'hls') && self::$rSettings['read_native_hls']) || empty($Bf9be24c69c0f17b) || stristr($E9de85a1ad46b96d['container'], 'mp4') || stristr($E9de85a1ad46b96d['container'], 'matroska'))) {
			goto label465;
		}

		$f170cb25d91509b3 = '';
		goto label464;

		label1418:

		if (!$fe93a43f53d92a4e['server_info']['on_demand']) {
			goto label1207;
		}

		self::$rSegmentSettings['seg_type'] = 1;
		goto label1207;

		label1427:
		$c998b20482f21b6b = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes'][16]) && !$Adabcfa0a2afb126 ? $fe93a43f53d92a4e['stream_info']['transcode_attributes'][16]['cmd'] : '');
		$a13b8c0c9cf36a9b = (isset($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']) ? $fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']['cmd'] : '');
		$Afa981cde090430b = '';
		goto label1298;

		label1456:

		$E088a35129311baf = openssl_cipher_iv_length('AES-128-CBC');
		$bb7d05c80dea0f44 = openssl_random_pseudo_bytes($E088a35129311baf);
		file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.iv', $bb7d05c80dea0f44);
		$C98e11437faf4199 = intval(file_get_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.pid'));

		if (!($fe93a43f53d92a4e['stream_info']['tv_archive_server_id'] == SERVER_ID)) {
			goto label272;
		}

		goto label259;

		label1489:

		$A9bb0ba05fdbc059 .= '{MAP} -individual_header_trailer 0 -f hls -hls_time ' . intval(self::$rSegmentSettings['seg_time']) . ' -hls_list_size ' . (intval($fe93a43f53d92a4e['stream_info']['delay_minutes']) * 6) . (' -hls_delete_threshold 4 -start_number ' . $d66f821047a8f8dd . ' -hls_flags delete_segments+discont_start+omit_endlist -hls_segment_type mpegts -hls_segment_filename "') . DELAY_PATH . intval($ee6d1fc5d801b43f) . '_%d.ts" "' . DELAY_PATH . intval($ee6d1fc5d801b43f) . '_.m3u8" ';

		label1522:

		$A5ee2c01a684b004 = $fe93a43f53d92a4e['stream_info']['delay_minutes'] * 60;

		if (!(0 < $d66f821047a8f8dd)) {
			goto label257;
		}

		$A5ee2c01a684b004 -= ($d66f821047a8f8dd - 1) * 10;
		goto label252;

		label1534:

		$ea5e624c582e2c75 = intval($fe93a43f53d92a4e['stream_info']['probesize_ondemand']);
		$Fe2ee13c1d643ec7 = '10000000';

		label1541:

		$F7379362daea673f = intval($Fe2ee13c1d643ec7 / 1000000) + self::$rSettings['probe_extra_wait'];
		goto label1922;

		label1550:

		if ($fe93a43f53d92a4e['stream_info']['stream_all'] == 1) {
			goto label597;
		}

		if (!empty($fe93a43f53d92a4e['stream_info']['custom_map'])) {
			goto label589;
		}

		if ($fe93a43f53d92a4e['stream_info']['type_key'] == 'radio_streams') {
			goto label1289;
		}

		$F08d616f6c857fc2 = '';
		goto label1288;

		label1567:

		foreach ($Cd826a7439b979ee as $ad7ee38ca629358c => $da6c2bba1b01d465) {
			foreach ($da6c2bba1b01d465 as $C0b1e51a934e21b0) {
				if (!isset($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu'])) {
					goto label1590;
				}

				$A9bb0ba05fdbc059 .= '-gpu ' . intval($fe93a43f53d92a4e['stream_info']['transcode_attributes']['gpu']['device']) . ' ';

				label1590:

				$A9bb0ba05fdbc059 .= implode(' ', self::f6eFe57eDf62e7dF($fe93a43f53d92a4e['stream_info']['transcode_attributes'])) . ' ';
				$A9bb0ba05fdbc059 .= $C0b1e51a934e21b0;
			}
		}

		label1606:

		$A9bb0ba05fdbc059 .= ' >/dev/null 2>>' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '.errors & echo $! > ' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_.pid';
		goto label1728;

		label1622:

		goto label1418;

		label1623:

		$Ec0879f16d0cdddb = [$d1262bf56a392f1b];
		goto label1418;

		label1626:

		$Aca70474e26e8967 = true;

		foreach (explode("\n", file_get_contents(CREATED_PATH . $ee6d1fc5d801b43f . '_.list')) as $B4a603c2a57d3acf) {
			goto label1671;

			label1641:

			$d78b5d74bc5c2761 += $f7037fc395d8fcad;

			label1642:

			goto label1696;

			label1644:

			$f7037fc395d8fcad = $fec00097a13da173[$E111d28e9acc50b9];
			if (($d78b5d74bc5c2761 <= $a9513c1db6b97bd8) && ($a9513c1db6b97bd8 < ($d78b5d74bc5c2761 + $f7037fc395d8fcad))) {
				goto label1666;
			}

			if (!($a9513c1db6b97bd8 < ($d78b5d74bc5c2761 + $f7037fc395d8fcad))) {
				goto label1664;
			}

			$ab3c1f168f2aac8b[] = $E111d28e9acc50b9;
			goto label1664;

			label1664:

			goto label1641;

			label1666:

			$A486d2019332744a = $d78b5d74bc5c2761;
			$ab3c1f168f2aac8b[] = $E111d28e9acc50b9;
			goto label1641;

			label1671:

			$E111d28e9acc50b9 = explode('\'', explode('file \'', $B4a603c2a57d3acf)[1])[0];

			if (!$E111d28e9acc50b9) {
				goto label1642;
			}

			if ($fec00097a13da173[$E111d28e9acc50b9]) {
				goto label1644;
			}

			$Aca70474e26e8967 = false;
			goto label1642;
			goto label1644;

			label1696:
		}

		if (!$Aca70474e26e8967) {
			goto label347;
		}

		$Ec0879f16d0cdddb = [CREATED_PATH . $ee6d1fc5d801b43f . '_.tlist'];
		goto label331;

		label1707:

		if (!(self::$db->num_rows() <= 0)) {
			goto label1715;
		}

		return false;

		label1715:

		$fe93a43f53d92a4e['stream_info'] = self::$db->get_row();
		self::$db->query('SELECT * FROM `streams_servers` WHERE stream_id  = ? AND `server_id` = ?', $ee6d1fc5d801b43f, SERVER_ID);
		goto label141;

		label1728:
		$A9bb0ba05fdbc059 = str_replace(['{FETCH_OPTIONS}', '{GEN_PTS}', '{STREAM_SOURCE}', '{MAP}', '{READ_NATIVE}', '{CONCAT}', '{AAC_FILTER}', '{GPU}', '{INPUT_CODEC}', '{LOGO}', '{LLOD}'], [empty($fe93a43f53d92a4e['stream_info']['custom_ffmpeg']) ? $cfec4a34eff5c713 : '', empty($fe93a43f53d92a4e['stream_info']['custom_ffmpeg']) ? $ffbe23814710c213 : '', escapeshellarg($b45008dac88f7d0a), empty($fe93a43f53d92a4e['stream_info']['custom_ffmpeg']) ? $F08d616f6c857fc2 : '', empty($fe93a43f53d92a4e['stream_info']['custom_ffmpeg']) ? $f170cb25d91509b3 : '', ($fe93a43f53d92a4e['stream_info']['type_key'] == 'created_live') && !$fe93a43f53d92a4e['server_info']['parent_id'] ? '-safe 0 -f concat' : '', !stristr($E9de85a1ad46b96d['container'], 'flv') && ($E9de85a1ad46b96d['codecs']['audio']['codec_name'] == 'aac') && ($fe93a43f53d92a4e['stream_info']['transcode_attributes']['-acodec'] == 'copy') ? '-bsf:a aac_adtstoasc' : '', $a13b8c0c9cf36a9b, $Afa981cde090430b, $c998b20482f21b6b, $F281bc9db7aaa002], $A9bb0ba05fdbc059);
		shell_exec($A9bb0ba05fdbc059);
		file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.ffmpeg', $A9bb0ba05fdbc059);
		$Bb672d1983256a93 = openssl_random_pseudo_bytes(16);
		file_put_contents(STREAMS_PATH . $ee6d1fc5d801b43f . '_.key', $Bb672d1983256a93);
		goto label1456;

		label1828:

		$Adabcfa0a2afb126 = true;

		if (!$fe93a43f53d92a4e['server_info']['on_demand']) {
			goto label1835;
		}

		$D1819284a1a68f53 = true;

		label1835:
		$f1909b8abf41f80d = (!is_null(self::$rServers[SERVER_ID]['private_url_ip']) && !is_null(self::$rServers[$fe93a43f53d92a4e['server_info']['parent_id']]['private_url_ip']) ? self::$rServers[$fe93a43f53d92a4e['server_info']['parent_id']]['private_url_ip'] : self::$rServers[$fe93a43f53d92a4e['server_info']['parent_id']]['public_url_ip']);
		goto label1331;

		label1870:

		goto label1921;

		label1871:

		$B3e67d2ee02076f5 = (self::$rSettings['ignore_keyframes'] ? '+split_by_time' : '');
		$Cd826a7439b979ee['mpegts'][] = $Fff7d74ee020d096 . ' -individual_header_trailer 0 -f hls -hls_time ' . intval(self::$rSegmentSettings['seg_time']) . ' -hls_list_size ' . intval(self::$rSegmentSettings['seg_list_size']) . ' -hls_delete_threshold ' . intval(self::$rSegmentSettings['seg_delete_threshold']) . (' -hls_flags delete_segments+discont_start+omit_endlist' . $B3e67d2ee02076f5 . ' -hls_segment_type mpegts -hls_segment_filename "') . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_%d.ts" "' . STREAMS_PATH . intval($ee6d1fc5d801b43f) . '_.m3u8" ';

		label1921:

		goto label1153;

		label1922:

		$b7ce96d09b50faff = 'timeout ' . $F7379362daea673f . ' ' . self::$rFFPROBE . (' {FETCH_OPTIONS} -probesize ' . $ea5e624c582e2c75 . ' -analyzeduration ' . $Fe2ee13c1d643ec7 . ' {CONCAT} -i {STREAM_SOURCE} -v quiet -print_format json -show_streams -show_format');
		$cfec4a34eff5c713 = [];
		$Adabcfa0a2afb126 = false;
		$A486d2019332744a = 0;

		if (!$fe93a43f53d92a4e['server_info']['parent_id']) {
			goto label1347;
		}

		goto label1828;

		label1943:

		if (!($df6991d59f367c7e <= $db399c129e6fdb57)) {
			goto label387;
		}

		$D489114b6822c2c1 = $Ec0879f16d0cdddb[$df6991d59f367c7e];
		unset($Ec0879f16d0cdddb[$df6991d59f367c7e]);
		array_push($Ec0879f16d0cdddb, $D489114b6822c2c1);
		goto label384;

		label1955:
	}

	static public function CD4D6b9A09110114($a5fd10913e5b22d3, $bbbe5eca9c8056cb)
	{
		if (substr($a5fd10913e5b22d3, 0, 3) == '-i ') {
			goto label12;
		}

		return 1;
		goto label13;

		label12:

		return -1;

		label13:
	}

	static public function A0779CB0a5BDF6fF($d2ad997f4540e3ec, $Bf9be24c69c0f17b, $A7d54b094ae83c95)
	{
		$B9869413eae86beb = [];

		if (empty($d2ad997f4540e3ec)) {
			goto label85;
		}

		foreach ($d2ad997f4540e3ec as $c03392fa4a75fd1b => $a432d48e728c3fca) {
			goto label12;

			label12:

			if (!($a432d48e728c3fca['argument_cat'] != $A7d54b094ae83c95)) {
				goto label20;
			}

			goto label81;

			label20:
			if (!(!is_null($a432d48e728c3fca['argument_wprotocol']) && !stristr($Bf9be24c69c0f17b, $a432d48e728c3fca['argument_wprotocol']) && !is_null($Bf9be24c69c0f17b))) {
				goto label47;
			}

			goto label81;
			goto label47;

			label47:

			if (!($a432d48e728c3fca['argument_key'] == 'cookie')) {
				goto label59;
			}

			$a432d48e728c3fca['value'] = self::AeFEa986184Ca49e($a432d48e728c3fca['value']);

			label59:

			if ($a432d48e728c3fca['argument_type'] == 'text') {
				goto label71;
			}

			goto label66;

			label66:

			$B9869413eae86beb[] = $a432d48e728c3fca['argument_cmd'];
			goto label79;

			label71:

			$B9869413eae86beb[] = sprintf($a432d48e728c3fca['argument_cmd'], $a432d48e728c3fca['value']);

			label79:

			goto label81;

			label81:

			goto label83;

			label83:
		}

		label85:

		return $B9869413eae86beb;
	}

	static public function f6Efe57edF62E7DF($B792efb991603d69)
	{
		goto label65;

		label2:

		$cd389a8fb9bec4c2 = [];

		foreach ($B792efb991603d69 as $Bb672d1983256a93 => $Fc405774e6827a0e) {
			goto label8;

			label8:

			if (!($Bb672d1983256a93 == 'gpu')) {
				goto label15;
			}

			goto label40;

			label15:

			if (!($Bb672d1983256a93 == 'software_decoding')) {
				goto label24;
			}

			goto label40;
			goto label24;

			label24:

			if (is_numeric($Bb672d1983256a93)) {
				goto label36;
			}

			$cd389a8fb9bec4c2[] = $Bb672d1983256a93 . ' ' . $Fc405774e6827a0e;
			goto label40;

			label36:

			goto label38;

			label38:

			$cd389a8fb9bec4c2[] = $Fc405774e6827a0e;

			label40:

			goto label42;

			label42:
		}

		$cd389a8fb9bec4c2 = array_filter($cd389a8fb9bec4c2);
		goto label49;

		label49:

		uasort($cd389a8fb9bec4c2, [__CLASS__, 'customOrder']);
		return array_map('trim', array_values(array_filter($cd389a8fb9bec4c2)));
		goto label137;

		label65:

		$F6ec9e9081f03c9f = [];

		foreach ($B792efb991603d69 as $Bb672d1983256a93 => $a432d48e728c3fca) {
			goto label97;

			label71:

			if (!preg_match('/-filter_complex "(.*?)"/', $a432d48e728c3fca, $Ac97fb1939417214)) {
				goto label95;
			}

			$B792efb991603d69[$Bb672d1983256a93] = trim(str_replace($Ac97fb1939417214[0], '', $B792efb991603d69[$Bb672d1983256a93]));
			$F6ec9e9081f03c9f[] = $Ac97fb1939417214[1];

			label95:

			goto label121;

			label97:
			if (!(($Bb672d1983256a93 == 'gpu') || ($Bb672d1983256a93 == 'software_decoding') || ($Bb672d1983256a93 == '16'))) {
				goto label110;
			}

			goto label121;

			label110:

			if (!isset($a432d48e728c3fca['cmd'])) {
				goto label71;
			}

			$B792efb991603d69[$Bb672d1983256a93] = $a432d48e728c3fca = $a432d48e728c3fca['cmd'];
			goto label71;

			label121:

			goto label123;

			label123:
		}

		if (empty($F6ec9e9081f03c9f)) {
			goto label2;
		}

		$B792efb991603d69[] = '-filter_complex "' . implode(',', $F6ec9e9081f03c9f) . '"';
		goto label2;

		label137:
	}

	static public function c1f42CA38aD7A48d($A7ca171405b19571)
	{
		goto label59;

		label2:

		goto label29;

		label3:

		if (!stristr($A7ca171405b19571, '$OPT')) {
			goto label28;
		}

		$E5f5fbcd0c39ff43 = 'rtmp://$OPT:rtmp-raw=';
		$A7ca171405b19571 = trim(substr($A7ca171405b19571, stripos($A7ca171405b19571, $E5f5fbcd0c39ff43) + strlen($E5f5fbcd0c39ff43)));
		goto label28;

		label28:

		$A7ca171405b19571 .= ' live=1 timeout=10';

		label29:

		return $A7ca171405b19571;
		goto label88;

		label31:

		if (!in_array($C9febb240944fd1e, $Fb9152bb91934de3)) {
			goto label58;
		}

		$F83b167f3cf044be = trim(shell_exec(YOUTUBE_BIN . ' ' . escapeshellarg($A7ca171405b19571) . ' -q --get-url --skip-download -f best'));
		$A7ca171405b19571 = explode("\n", $F83b167f3cf044be)[0];

		label58:

		goto label2;

		label59:

		$Bf9be24c69c0f17b = strtolower(substr($A7ca171405b19571, 0, 4));

		if ($Bf9be24c69c0f17b == 'rtmp') {
			goto label3;
		}

		if (!($Bf9be24c69c0f17b == 'http')) {
			goto label58;
		}

		$Fb9152bb91934de3 = ['livestream.com', 'ustream.tv', 'twitch.tv', 'vimeo.com', 'facebook.com', 'dailymotion.com', 'cnn.com', 'edition.cnn.com', 'youtube.com', 'youtu.be'];
		$C9febb240944fd1e = str_ireplace('www.', '', parse_url($A7ca171405b19571, PHP_URL_HOST));
		goto label31;

		label88:
	}

	static public function C6c3738aEebB9958($A7ca171405b19571)
	{
		$E111d28e9acc50b9 = parse_url($A7ca171405b19571)['path'];
		$e21fe0c575cd9a6e = count(explode('/', $E111d28e9acc50b9));
		$dc09dd4fd63b71f5 = ['/\\/auth\\/(.*)$/m' => 3, '/\\/play\\/(.*)$/m' => 3, '/\\/play\\/(.*)\\/(.*)$/m' => 4, '/\\/live\\/(.*)\\/(\\d+)$/m' => 4, '/\\/live\\/(.*)\\/(\\d+)\\.(.*)$/m' => 4, '/\\/(.*)\\/(.*)\\/(\\d+)\\.(.*)$/m' => 4, '/\\/(.*)\\/(.*)\\/(\\d+)$/m' => 4, '/\\/live\\/(.*)\\/(.*)\\/(\\d+)\\.(.*)$/m' => 5, '/\\/live\\/(.*)\\/(.*)\\/(\\d+)$/m' => 5];

		foreach ($dc09dd4fd63b71f5 as $B91645b8411dc88c => $d353a4da8a0bb857) {
			if (!($e21fe0c575cd9a6e == $d353a4da8a0bb857)) {
				goto label38;
			}

			preg_match($B91645b8411dc88c, $E111d28e9acc50b9, $Ac97fb1939417214);

			if (!(0 < count($Ac97fb1939417214))) {
				goto label38;
			}

			return true;

			label38:
		}

		return false;
	}

	static public function de052F142A92e9Bf($ebb4852f69f0dca0 = false)
	{
		goto label2;

		label2:

		if ($ebb4852f69f0dca0) {
			goto label35;
		}

		$A66eee85d9566710 = self::e74a9a4510c4FFE4('allowed_ips', 60);

		if (!($A66eee85d9566710 !== false)) {
			goto label14;
		}

		return $A66eee85d9566710;

		label14:

		goto label35;

		label15:

		$A949e99ff8aff0fa = array_merge($A949e99ff8aff0fa, explode(',', self::$rSettings['allowed_ips_admin']));

		label26:

		self::f7A8933150230eaB('allowed_ips', $A949e99ff8aff0fa);
		return array_unique($A949e99ff8aff0fa);
		goto label97;

		label35:

		$A949e99ff8aff0fa = ['127.0.0.1', $_SERVER['SERVER_ADDR']];

		foreach (self::$rServers as $C082ca9ed03f473c => $dbaf3cd4fbd0f046) {
			if (empty($dbaf3cd4fbd0f046['whitelist_ips'])) {
				goto label58;
			}

			$A949e99ff8aff0fa = array_merge($A949e99ff8aff0fa, json_decode($dbaf3cd4fbd0f046['whitelist_ips'], true));

			label58:

			$A949e99ff8aff0fa[] = $dbaf3cd4fbd0f046['server_ip'];

			if (!$dbaf3cd4fbd0f046['private_ip']) {
				goto label69;
			}

			$A949e99ff8aff0fa[] = $dbaf3cd4fbd0f046['private_ip'];

			label69:

			foreach (explode(',', $dbaf3cd4fbd0f046['domain_name']) as $b38e11ffdc6a3abb) {
				if (!filter_var($b38e11ffdc6a3abb, FILTER_VALIDATE_IP)) {
					goto label88;
				}

				$A949e99ff8aff0fa[] = $b38e11ffdc6a3abb;

				label88:
			}
		}

		if (empty(self::$rSettings['allowed_ips_admin'])) {
			goto label26;
		}

		goto label15;

		label97:
	}

	static public function cc988751EEbbf271($f7107e3a92443147 = NULL, $ff5cf44f96903d64 = NULL, $fd093b5358e9a519 = NULL, $Abca9d7ba75bcfb9 = false, $D67591a963888d63 = false, $b38e11ffdc6a3abb = '')
	{
		goto label455;

		label7:

		$db964e4a3b739f81 = [];
		$F330b1e93afbd525 = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'category_map'));

		foreach ($E59d0debc75e7be8['bouquet'] as $Abcb228699a7f743) {
			$db964e4a3b739f81 = array_merge($db964e4a3b739f81, $F330b1e93afbd525[$Abcb228699a7f743] ?: []);
		}

		$E59d0debc75e7be8['category_ids'] = array_values(array_unique($db964e4a3b739f81));
		goto label185;

		label39:

		goto label484;

		label40:

		if (self::$rSettings['case_sensitive_line']) {
			goto label512;
		}

		goto label498;

		label45:

		return false;
		goto label52;

		label47:

		self::$db->query('SELECT `lines`.*, `mag_devices`.`token` AS `mag_token` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` WHERE `id` = ?', $f7107e3a92443147);

		label52:

		goto label214;

		label53:

		self::C59E849742699501('forced_country/' . $E59d0debc75e7be8['id'], $E59d0debc75e7be8['forced_country']);

		label60:

		$E59d0debc75e7be8['bouquet'] = json_decode($E59d0debc75e7be8['bouquet'], true);
		goto label551;

		label68:

		if (!empty($f7107e3a92443147)) {
			goto label73;
		}

		return false;

		label73:

		goto label39;

		label74:

		goto label105;

		label75:

		self::$db->query('SELECT `access_output_id`, `output_key` FROM `output_formats`;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			if (!in_array(intval($Fb9da1713bff19ce['access_output_id']), $E59d0debc75e7be8['allowed_outputs'])) {
				goto label101;
			}

			$E59d0debc75e7be8['output_formats'][] = $Fb9da1713bff19ce['output_key'];

			label101:
		}

		goto label357;

		label104:

		goto label328;

		label105:

		if (self::$rSettings['case_sensitive_line']) {
			goto label128;
		}

		$f7107e3a92443147 = intval(file_get_contents(LINES_TMP_PATH . 'line_c_' . strtolower($ff5cf44f96903d64) . '_' . strtolower($fd093b5358e9a519)));
		goto label39;

		label128:

		$f7107e3a92443147 = intval(file_get_contents(LINES_TMP_PATH . 'line_c_' . $ff5cf44f96903d64 . '_' . $fd093b5358e9a519));
		goto label39;

		label141:

		if (!($ff5cf44f96903d64 != $E59d0debc75e7be8['access_token'])) {
			goto label147;
		}

		return false;

		label147:

		goto label418;

		label148:

		$E59d0debc75e7be8['series_ids'] = array_map('intval', array_unique($d611c60168c266f6));
		$E59d0debc75e7be8['vod_ids'] = array_map('intval', array_unique($a43c9d9b6968d829));
		$E59d0debc75e7be8['live_ids'] = array_map('intval', array_unique($Cf056574208e92dd));
		$E59d0debc75e7be8['radio_ids'] = array_map('intval', array_unique($cd0a97ba1e38e34f));

		label184:

		goto label7;

		label185:

		return $E59d0debc75e7be8;

		label186:

		return false;
		goto label709;

		label188:

		$E59d0debc75e7be8['isp_is_server'] = 0;
		if (!((self::$rSettings['show_isps'] == 1) && !empty($b38e11ffdc6a3abb))) {
			goto label378;
		}

		$d6525b7c1d8c7582 = self::d6b3157e40Ff47D6($b38e11ffdc6a3abb);

		if (!is_array($d6525b7c1d8c7582)) {
			goto label261;
		}

		if (empty($d6525b7c1d8c7582['isp'])) {
			goto label261;
		}

		goto label523;

		label214:

		goto label221;

		label215:

		self::$db->query('SELECT `lines`.*, `mag_devices`.`token` AS `mag_token` FROM `lines` LEFT JOIN `mag_devices` ON `mag_devices`.`user_id` = `lines`.`id` WHERE `username` = ? AND `password` = ? LIMIT 1', $ff5cf44f96903d64, $fd093b5358e9a519);

		label221:

		goto label384;
		goto label379;

		label223:

		if (!$E59d0debc75e7be8) {
			goto label186;
		}

		if (!self::$rCached) {
			goto label147;
		}
		if (empty($fd093b5358e9a519) && empty($f7107e3a92443147) && (strlen($ff5cf44f96903d64) == 32)) {
			goto label364;
		}
		if (!(!empty($ff5cf44f96903d64) && !empty($fd093b5358e9a519))) {
			goto label363;
		}
		if (!(($ff5cf44f96903d64 != $E59d0debc75e7be8['username']) || ($fd093b5358e9a519 != $E59d0debc75e7be8['password']))) {
			goto label363;
		}

		goto label362;

		label261:
		if (!(!empty($E59d0debc75e7be8['con_isp_name']) && (self::$rSettings['enable_isp_lock'] == 1) && ($E59d0debc75e7be8['is_stalker'] == 0) && ($E59d0debc75e7be8['is_isplock'] == 1) && !empty($E59d0debc75e7be8['isp_desc']) && (strtolower($E59d0debc75e7be8['con_isp_name']) != strtolower($E59d0debc75e7be8['isp_desc'])))) {
			goto label297;
		}

		$E59d0debc75e7be8['isp_violate'] = 1;
		goto label297;

		label297:
		if (!(($E59d0debc75e7be8['isp_violate'] == 0) && (strtolower($E59d0debc75e7be8['con_isp_name']) != strtolower($E59d0debc75e7be8['isp_desc'])))) {
			goto label378;
		}

		if (self::$rCached) {
			goto label365;
		}

		self::$db->query('UPDATE `lines` SET `isp_desc` = ?, `as_number` = ? WHERE `id` = ?', $E59d0debc75e7be8['con_isp_name'], $E59d0debc75e7be8['isp_asn'], $E59d0debc75e7be8['id']);
		goto label378;
		goto label365;

		label328:

		foreach (igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'output_formats')) as $Fb9da1713bff19ce) {
			if (!in_array(intval($Fb9da1713bff19ce['access_output_id']), $E59d0debc75e7be8['allowed_outputs'])) {
				goto label355;
			}

			$E59d0debc75e7be8['output_formats'][] = $Fb9da1713bff19ce['output_key'];

			label355:
		}

		label357:

		$E59d0debc75e7be8['con_isp_name'] = NULL;
		$E59d0debc75e7be8['isp_violate'] = 0;
		goto label188;

		label362:

		return false;

		label363:

		goto label147;

		label364:

		goto label141;

		label365:

		self::c59e849742699501('isp/' . $E59d0debc75e7be8['id'], json_encode([$E59d0debc75e7be8['con_isp_name'], $E59d0debc75e7be8['isp_asn']]));

		label378:

		goto label600;

		label379:

		self::$db->query('SELECT * FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 0 AND `access_token` = ? AND LENGTH(`access_token`) = 32', $ff5cf44f96903d64);

		label384:

		if (!(0 < self::$db->num_rows())) {
			goto label396;
		}

		$E59d0debc75e7be8 = self::$db->get_row();
		goto label396;

		label396:

		goto label497;

		label397:
		if (empty($fd093b5358e9a519) && empty($f7107e3a92443147) && (strlen($ff5cf44f96903d64) == 32)) {
			goto label40;
		}
		if (!empty($ff5cf44f96903d64) && !empty($fd093b5358e9a519)) {
			goto label74;
		}

		goto label68;

		label418:
		if (!((self::$rSettings['county_override_1st'] == 1) && empty($E59d0debc75e7be8['forced_country']) && !empty($b38e11ffdc6a3abb) && ($E59d0debc75e7be8['max_connections'] == 1))) {
			goto label60;
		}

		$E59d0debc75e7be8['forced_country'] = self::AED9009B5DC15Cae($b38e11ffdc6a3abb)['registered_country']['iso_code'];

		if (self::$rCached) {
			goto label53;
		}

		self::$db->query('UPDATE `lines` SET `forced_country` = ? WHERE `id` = ?', $E59d0debc75e7be8['forced_country'], $E59d0debc75e7be8['id']);
		goto label60;
		goto label53;

		label455:

		$E59d0debc75e7be8 = NULL;

		if (self::$rCached) {
			goto label397;
		}
		if (empty($fd093b5358e9a519) && empty($f7107e3a92443147) && (strlen($ff5cf44f96903d64) == 32)) {
			goto label379;
		}
		if (!empty($ff5cf44f96903d64) && !empty($fd093b5358e9a519)) {
			goto label215;
		}

		if (!empty($f7107e3a92443147)) {
			goto label47;
		}

		goto label45;

		label484:

		if (!$f7107e3a92443147) {
			goto label497;
		}

		$E59d0debc75e7be8 = igbinary_unserialize(file_get_contents(LINES_TMP_PATH . 'line_i_' . $f7107e3a92443147));

		label497:

		goto label223;

		label498:

		$f7107e3a92443147 = intval(file_get_contents(LINES_TMP_PATH . 'line_t_' . strtolower($ff5cf44f96903d64)));
		goto label522;

		label512:

		$f7107e3a92443147 = intval(file_get_contents(LINES_TMP_PATH . 'line_t_' . $ff5cf44f96903d64));

		label522:

		goto label484;

		label523:

		$E59d0debc75e7be8['con_isp_name'] = $d6525b7c1d8c7582['isp'];
		$E59d0debc75e7be8['isp_asn'] = $d6525b7c1d8c7582['autonomous_system_number'];
		$E59d0debc75e7be8['isp_violate'] = self::eFF2889a3E3E9C34($E59d0debc75e7be8['con_isp_name']);

		if (!(self::$rSettings['block_svp'] == 1)) {
			goto label261;
		}

		$E59d0debc75e7be8['isp_is_server'] = intval(self::FA85F18587477968($E59d0debc75e7be8['isp_asn']));
		goto label261;

		label551:

		$E59d0debc75e7be8['allowed_ips'] = @array_filter(array_map('trim', json_decode($E59d0debc75e7be8['allowed_ips'], true)));
		$E59d0debc75e7be8['allowed_ua'] = @array_filter(array_map('trim', json_decode($E59d0debc75e7be8['allowed_ua'], true)));
		$E59d0debc75e7be8['allowed_outputs'] = array_map('intval', json_decode($E59d0debc75e7be8['allowed_outputs'], true));
		$E59d0debc75e7be8['output_formats'] = [];

		if (self::$rCached) {
			goto label104;
		}

		goto label75;

		label600:

		if (!$Abca9d7ba75bcfb9) {
			goto label184;
		}

		$Cf056574208e92dd = $a43c9d9b6968d829 = $cd0a97ba1e38e34f = $F05acfe4a87b8eb0 = $deec1aac68da5dbb = $d611c60168c266f6 = [];

		foreach ($E59d0debc75e7be8['bouquet'] as $Abcb228699a7f743) {
			goto label616;

			label614:

			goto label697;

			label616:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['streams'])) {
				goto label631;
			}

			$deec1aac68da5dbb = array_merge($deec1aac68da5dbb, self::$rBouquets[$Abcb228699a7f743]['streams']);

			label631:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['series'])) {
				goto label673;
			}

			$d611c60168c266f6 = array_merge($d611c60168c266f6, self::$rBouquets[$Abcb228699a7f743]['series']);
			goto label673;

			label648:

			$a43c9d9b6968d829 = array_merge($a43c9d9b6968d829, self::$rBouquets[$Abcb228699a7f743]['movies']);

			label656:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['radios'])) {
				goto label671;
			}

			$cd0a97ba1e38e34f = array_merge($cd0a97ba1e38e34f, self::$rBouquets[$Abcb228699a7f743]['radios']);

			label671:

			goto label614;

			label673:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['channels'])) {
				goto label688;
			}

			$Cf056574208e92dd = array_merge($Cf056574208e92dd, self::$rBouquets[$Abcb228699a7f743]['channels']);

			label688:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['movies'])) {
				goto label656;
			}

			goto label648;

			label697:
		}

		$E59d0debc75e7be8['channel_ids'] = array_map('intval', array_unique($deec1aac68da5dbb));
		goto label148;

		label709:
	}

	static public function E753f191dE7bc185()
	{
		$B9869413eae86beb = [];

		foreach (self::$rCategories as $Dbcac322b4274e46) {
			if (!$Dbcac322b4274e46['is_adult']) {
				goto label15;
			}

			$B9869413eae86beb[] = intval($Dbcac322b4274e46['id']);

			label15:
		}

		return $B9869413eae86beb;
	}

	static public function cFD7F4C936d3cc01($C3269be3f620664d = NULL, $aa85eafe0b5a88a4 = NULL, $Abca9d7ba75bcfb9 = false, $f0075efa073096ab = false, $D67591a963888d63 = false)
	{
		goto label52;

		label6:

		return false;
		goto label98;

		label8:

		return $d10c5f874f560f0e;

		label9:

		goto label6;

		label10:

		if (!(0 < self::$db->num_rows())) {
			goto label9;
		}

		$d10c5f874f560f0e = [];
		$d10c5f874f560f0e['mag_device'] = self::$db->get_row();
		$d10c5f874f560f0e['mag_device']['mac'] = base64_decode($d10c5f874f560f0e['mag_device']['mac']);
		goto label32;

		label32:

		$d10c5f874f560f0e['user_info'] = [];

		if (!($E59d0debc75e7be8 = self::cC988751EEBBf271($d10c5f874f560f0e['mag_device']['user_id'], NULL, NULL, $Abca9d7ba75bcfb9, $D67591a963888d63))) {
			goto label49;
		}

		$d10c5f874f560f0e['user_info'] = $E59d0debc75e7be8;

		label49:

		$d10c5f874f560f0e['pair_line_info'] = [];
		goto label70;

		label52:

		if (empty($C3269be3f620664d)) {
			goto label61;
		}

		self::$db->query('SELECT * FROM `mag_devices` WHERE `mag_id` = ?', $C3269be3f620664d);
		goto label10;

		label61:

		self::$db->query('SELECT * FROM `mag_devices` WHERE `mac` = ?', base64_encode($aa85eafe0b5a88a4));
		goto label10;

		label70:

		if (empty($d10c5f874f560f0e['user_info'])) {
			goto label8;
		}

		$d10c5f874f560f0e['pair_line_info'] = [];

		if (is_null($d10c5f874f560f0e['user_info']['pair_id'])) {
			goto label8;
		}

		if (!($E59d0debc75e7be8 = self::cc988751eebbf271($d10c5f874f560f0e['user_info']['pair_id'], NULL, NULL, $Abca9d7ba75bcfb9, $D67591a963888d63))) {
			goto label8;
		}

		$d10c5f874f560f0e['pair_line_info'] = $E59d0debc75e7be8;
		goto label8;

		label98:
	}

	static public function D504A468F5B7b970($c050a23c479bc67e, $Abca9d7ba75bcfb9 = false, $f0075efa073096ab = false, $D67591a963888d63 = false)
	{
		goto label5;

		label5:

		if (empty($c050a23c479bc67e['device_id'])) {
			goto label15;
		}

		self::$db->query('SELECT * FROM `enigma2_devices` WHERE `device_id` = ?', $c050a23c479bc67e['device_id']);
		goto label50;

		label15:

		self::$db->query('SELECT * FROM `enigma2_devices` WHERE `mac` = ?', $c050a23c479bc67e['mac']);
		goto label50;

		label22:

		$B9869413eae86beb['pair_line_info'] = [];

		if (is_null($B9869413eae86beb['user_info']['pair_id'])) {
			goto label47;
		}

		if (!($E59d0debc75e7be8 = self::Cc988751EeBBf271($B9869413eae86beb['user_info']['pair_id'], NULL, NULL, $Abca9d7ba75bcfb9, $D67591a963888d63))) {
			goto label46;
		}

		$B9869413eae86beb['pair_line_info'] = $E59d0debc75e7be8;

		label46:

		goto label47;

		label47:

		return $B9869413eae86beb;

		label48:

		return false;
		goto label87;

		label50:

		if (!(0 < self::$db->num_rows())) {
			goto label48;
		}

		$B9869413eae86beb = [];
		$B9869413eae86beb['enigma2'] = self::$db->get_row();
		$B9869413eae86beb['user_info'] = [];
		goto label66;

		label66:

		if (!($E59d0debc75e7be8 = self::cc988751EeBBF271($B9869413eae86beb['enigma2']['user_id'], NULL, NULL, $Abca9d7ba75bcfb9, $D67591a963888d63))) {
			goto label81;
		}

		$B9869413eae86beb['user_info'] = $E59d0debc75e7be8;

		label81:

		$B9869413eae86beb['pair_line_info'] = [];

		if (empty($B9869413eae86beb['user_info'])) {
			goto label47;
		}

		goto label22;

		label87:
	}

	static public function e5AF2e0e9Ad188B4()
	{
		$A7ca171405b19571 = self::$rServers[SERVER_ID]['rtmp_mport_url'] . 'stat';
		$b46218714d674656 = stream_context_create([
			'http' => ['timeout' => 1]
		]);
		$D27fe13c26d2e218 = file_get_contents($A7ca171405b19571, false, $b46218714d674656);
		return json_decode(json_encode(simplexml_load_string($D27fe13c26d2e218, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
	}

	static public function B0020C716fdf67bB($fc6701f880be9dd9, $Ad918567d34100ee = true, $b54a5805c0b9816e = true)
	{
		goto label222;

		label4:

		if (!$fc6701f880be9dd9['user_id']) {
			goto label16;
		}

		$ed6449291d7f1a64->zRem('SERVER_LINES#' . $fc6701f880be9dd9['server_id'], $fc6701f880be9dd9['uuid']);

		label16:

		if (!$fc6701f880be9dd9['proxy_id']) {
			goto label59;
		}

		$ed6449291d7f1a64->zRem('PROXY#' . $fc6701f880be9dd9['proxy_id'], $fc6701f880be9dd9['uuid']);
		goto label59;

		label29:

		goto label267;

		label30:

		if ($fc6701f880be9dd9['server_id'] == SERVER_ID) {
			goto label252;
		}

		if (self::$rSettings['redis_handler']) {
			goto label243;
		}

		self::$db->query('INSERT INTO `signals` (`pid`,`server_id`,`rtmp`,`time`) VALUES(?,?,?,UNIX_TIMESTAMP())', $fc6701f880be9dd9['pid'], $fc6701f880be9dd9['server_id'], 1);
		goto label242;

		label49:

		posix_kill(intval($fc6701f880be9dd9['pid']), 9);

		label57:

		goto label353;

		label58:

		goto label200;

		label59:

		$ed6449291d7f1a64->del($fc6701f880be9dd9['uuid']);
		$ed6449291d7f1a64->zRem('CONNECTIONS', $fc6701f880be9dd9['uuid']);
		$ed6449291d7f1a64->zRem('LIVE', $fc6701f880be9dd9['uuid']);
		$ed6449291d7f1a64->sRem('ENDED', $fc6701f880be9dd9['uuid']);
		goto label274;

		label79:

		if (is_array($fc6701f880be9dd9)) {
			goto label124;
		}

		if (!self::$rSettings['redis_handler']) {
			goto label99;
		}

		$fc6701f880be9dd9 = igbinary_unserialize(self::$redis->get($fc6701f880be9dd9));
		goto label124;
		goto label99;

		label99:

		if (strlen(strval($fc6701f880be9dd9)) == 32) {
			goto label114;
		}

		self::$db->query('SELECT * FROM `lines_live` WHERE `activity_id` = ?', $fc6701f880be9dd9);
		goto label120;

		label114:

		goto label115;

		label115:

		self::$db->query('SELECT * FROM `lines_live` WHERE `uuid` = ?', $fc6701f880be9dd9);

		label120:

		$fc6701f880be9dd9 = self::$db->get_row();

		label124:

		goto label373;

		label125:

		$ed6449291d7f1a64 = self::$redis->multi();
		$ed6449291d7f1a64->zRem('LINE#' . $fc6701f880be9dd9['identity'], $fc6701f880be9dd9['uuid']);
		$ed6449291d7f1a64->zRem('LINE_ALL#' . $fc6701f880be9dd9['identity'], $fc6701f880be9dd9['uuid']);
		$ed6449291d7f1a64->zRem('STREAM#' . $fc6701f880be9dd9['stream_id'], $fc6701f880be9dd9['uuid']);
		$ed6449291d7f1a64->zRem('SERVER#' . $fc6701f880be9dd9['server_id'], $fc6701f880be9dd9['uuid']);
		goto label4;

		label162:

		self::a9451F831f72AcA3($fc6701f880be9dd9['pid'], $fc6701f880be9dd9['server_id'], 0);

		label169:

		goto label57;

		label170:
		if (!(($fc6701f880be9dd9['pid'] != getmypid()) && is_numeric($fc6701f880be9dd9['pid']) && (0 < $fc6701f880be9dd9['pid']))) {
			goto label57;
		}

		goto label49;

		label188:

		if (self::$rSettings['redis_handler']) {
			goto label199;
		}

		self::$db->query('DELETE FROM `lines_live` WHERE `activity_id` = ?', $fc6701f880be9dd9['activity_id']);
		goto label276;

		label199:

		goto label125;

		label200:
		if (!(!$Ad918567d34100ee && $b54a5805c0b9816e && ($fc6701f880be9dd9['hls_end'] == 0))) {
			goto label353;
		}

		if (self::$rSettings['redis_handler']) {
			goto label221;
		}

		self::$db->query('UPDATE `lines_live` SET `hls_end` = 1 WHERE `activity_id` = ?', $fc6701f880be9dd9['activity_id']);
		goto label342;

		label221:

		goto label337;

		label222:

		if (!empty($fc6701f880be9dd9)) {
			goto label227;
		}

		return false;

		label227:
		if (!(self::$rSettings['redis_handler'] && !is_object(self::$redis))) {
			goto label79;
		}

		self::D6Aeb3175a43F301();
		goto label79;

		label242:

		goto label250;

		label243:

		self::a9451f831F72ACA3($fc6701f880be9dd9['pid'], $fc6701f880be9dd9['server_id'], 1);

		label250:

		goto label267;
		goto label252;

		label252:

		shell_exec('wget --timeout=2 -O /dev/null -o /dev/null "' . self::$rServers[SERVER_ID]['rtmp_mport_url'] . 'control/drop/client?clientid=' . intval($fc6701f880be9dd9['pid']) . '" >/dev/null 2>/dev/null &');

		label267:

		if (!($fc6701f880be9dd9['server_id'] == SERVER_ID)) {
			goto label316;
		}

		goto label308;

		label274:

		$ed6449291d7f1a64->exec();

		label276:

		self::f4ae3d111268e851($fc6701f880be9dd9['server_id'], $fc6701f880be9dd9['proxy_id'], $fc6701f880be9dd9['user_id'], $fc6701f880be9dd9['stream_id'], $fc6701f880be9dd9['date_start'], $fc6701f880be9dd9['user_agent'], $fc6701f880be9dd9['user_ip'], $fc6701f880be9dd9['container'], $fc6701f880be9dd9['geoip_country_code'], $fc6701f880be9dd9['isp'], $fc6701f880be9dd9['external_device'], $fc6701f880be9dd9['divergence'], $fc6701f880be9dd9['hmac_id'], $fc6701f880be9dd9['hmac_identifier']);
		return true;
		goto label388;

		label308:

		@unlink(CONS_TMP_PATH . $fc6701f880be9dd9['uuid']);

		label316:

		if (!$Ad918567d34100ee) {
			goto label276;
		}

		if (!($fc6701f880be9dd9['server_id'] == SERVER_ID)) {
			goto label188;
		}

		@unlink(CONS_TMP_PATH . $fc6701f880be9dd9['stream_id'] . '/' . $fc6701f880be9dd9['uuid']);
		goto label188;

		label337:

		self::e0F521E9e3bf0855($fc6701f880be9dd9, [], 'close');

		label342:

		@unlink(CONS_TMP_PATH . $fc6701f880be9dd9['stream_id'] . '/' . $fc6701f880be9dd9['uuid']);

		label353:

		goto label29;

		label354:

		if ($fc6701f880be9dd9['server_id'] == SERVER_ID) {
			goto label170;
		}

		if (self::$rSettings['redis_handler']) {
			goto label372;
		}

		self::$db->query('INSERT INTO `signals` (`pid`,`server_id`,`time`) VALUES(?,?,UNIX_TIMESTAMP())', $fc6701f880be9dd9['pid'], $fc6701f880be9dd9['server_id']);
		goto label169;

		label372:

		goto label162;

		label373:

		if (is_array($fc6701f880be9dd9)) {
			goto label379;
		}

		return false;

		label379:

		if ($fc6701f880be9dd9['container'] == 'rtmp') {
			goto label30;
		}

		if ($fc6701f880be9dd9['container'] == 'hls') {
			goto label58;
		}

		goto label354;

		label388:
	}

	static public function F4Ae3D111268E851($C082ca9ed03f473c, $Bdf1a4d575de41e8, $f7107e3a92443147, $ee6d1fc5d801b43f, $bcfd61adc96d4b72, $Ecc2c91f94cb4fcb, $b38e11ffdc6a3abb, $Daecfbd6410b9c42, $C9d42cf3fc64130c, $fc07e00b86ce286c, $Bbd6141cfdd8bf9e = '', $af895dada1de7cb4 = 0, $B42b41618bca71aa = NULL, $F2db9d2971f5c8c4 = '')
	{
		if (!(self::$rSettings['save_closed_connection'] == 0)) {
			goto label21;
		}

		return NULL;

		label21:
		if (!($C082ca9ed03f473c && $f7107e3a92443147 && $ee6d1fc5d801b43f)) {
			goto label87;
		}

		$fc6701f880be9dd9 = ['user_id' => intval($f7107e3a92443147), 'stream_id' => intval($ee6d1fc5d801b43f), 'server_id' => intval($C082ca9ed03f473c), 'proxy_id' => intval($Bdf1a4d575de41e8), 'date_start' => intval($bcfd61adc96d4b72), 'user_agent' => $Ecc2c91f94cb4fcb, 'user_ip' => htmlentities($b38e11ffdc6a3abb), 'date_end' => time(), 'container' => $Daecfbd6410b9c42, 'geoip_country_code' => $C9d42cf3fc64130c, 'isp' => $fc07e00b86ce286c, 'external_device' => htmlentities($Bbd6141cfdd8bf9e), 'divergence' => intval($af895dada1de7cb4), 'hmac_id' => $B42b41618bca71aa, 'hmac_identifier' => $F2db9d2971f5c8c4];
		file_put_contents(LOGS_TMP_PATH . 'activity', base64_encode(json_encode($fc6701f880be9dd9)) . "\n", FILE_APPEND | LOCK_EX);

		label87:
	}

	static public function D242dF32Bd80320F($ee6d1fc5d801b43f, $C082ca9ed03f473c, $dabeadfcc3ba1288, $fd51b5505224fc7c = '')
	{
		if (!(self::$rSettings['save_restart_logs'] == 0)) {
			goto label11;
		}

		return NULL;

		label11:

		$ba2d146bb5a55097 = ['server_id' => $C082ca9ed03f473c, 'stream_id' => $ee6d1fc5d801b43f, 'action' => $dabeadfcc3ba1288, 'source' => $fd51b5505224fc7c, 'time' => time()];
		file_put_contents(LOGS_TMP_PATH . 'stream_log.log', base64_encode(json_encode($ba2d146bb5a55097)) . "\n", FILE_APPEND);
	}

	static public function B0FBCff8A7d2659D($Aac64ae34ff57fc4, $A432ec14fb9a1e04 = 0, $Eee5b898522a4b6b = 10)
	{
		goto label35;

		label4:

		preg_match('/_(.*)\\./', array_pop($Ac97fb1939417214[0]), $F7d15e8c2cc29d08);
		return $F7d15e8c2cc29d08[1];
		goto label19;

		label16:

		return $Ac97fb1939417214[0];
		goto label19;

		label19:

		goto label60;

		label20:

		$F238092e4e4d82a9 = intval($A432ec14fb9a1e04 / ($Eee5b898522a4b6b ?: 1));
		return array_slice($Ac97fb1939417214[0], -1 * $F238092e4e4d82a9);
		goto label60;

		label35:

		if (!file_exists($Aac64ae34ff57fc4)) {
			goto label60;
		}

		$fd51b5505224fc7c = file_get_contents($Aac64ae34ff57fc4);

		if (!preg_match_all('/(.*?).ts/', $fd51b5505224fc7c, $Ac97fb1939417214)) {
			goto label60;
		}

		if (0 < $A432ec14fb9a1e04) {
			goto label20;
		}

		if ($A432ec14fb9a1e04 == -1) {
			goto label16;
		}

		goto label4;

		label60:

		return NULL;
		goto label62;

		label62:
	}

	static public function c527CFdb95c0A595($A340a270d47d5f5a, $fd093b5358e9a519, $ee6d1fc5d801b43f, $C28212d1be536d65)
	{
		if (!file_exists($A340a270d47d5f5a)) {
			goto label55;
		}

		$fd51b5505224fc7c = file_get_contents($A340a270d47d5f5a);

		if (!preg_match_all('/(.*?)\\.ts/', $fd51b5505224fc7c, $Ac97fb1939417214)) {
			goto label55;
		}

		foreach ($Ac97fb1939417214[0] as $f7cd7a19c0a73464) {
			if ($C28212d1be536d65) {
				goto label42;
			}

			$fd51b5505224fc7c = str_replace($f7cd7a19c0a73464, '/admin/live?password=' . $fd093b5358e9a519 . '&extension=m3u8&segment=' . $f7cd7a19c0a73464 . '&stream=' . $ee6d1fc5d801b43f, $fd51b5505224fc7c);
			goto label52;

			label42:

			$fd51b5505224fc7c = str_replace($f7cd7a19c0a73464, '/admin/live?extension=m3u8&segment=' . $f7cd7a19c0a73464 . '&uitoken=' . $C28212d1be536d65, $fd51b5505224fc7c);

			label52:
		}

		return $fd51b5505224fc7c;

		label55:

		return false;
	}

	static public function BD0C896a193633eb($Ecc2c91f94cb4fcb, $B9869413eae86beb = false)
	{
		goto label13;

		label3:

		self::$db->query('UPDATE `blocked_uas` SET `attempts_blocked` = `attempts_blocked`+1 WHERE `id` = ?', $b1b9057587d5d0e8);

		if ($B9869413eae86beb) {
			goto label12;
		}

		exit();
		goto label66;

		label12:

		goto label65;

		label13:

		$Ecc2c91f94cb4fcb = strtolower($Ecc2c91f94cb4fcb);
		$b1b9057587d5d0e8 = false;

		foreach (self::$rBlockedUA as $Bb672d1983256a93 => $c5feeca020e7bf5c) {
			goto label26;

			label24:

			goto label58;

			label26:

			if ($c5feeca020e7bf5c['exact_match'] == 1) {
				goto label47;
			}

			if (!stristr($Ecc2c91f94cb4fcb, $c5feeca020e7bf5c['blocked_ua'])) {
				goto label43;
			}

			$b1b9057587d5d0e8 = $Bb672d1983256a93;
			goto label60;

			label43:

			goto label45;

			label45:

			goto label24;

			label47:

			if (!($c5feeca020e7bf5c['blocked_ua'] == $Ecc2c91f94cb4fcb)) {
				goto label24;
			}

			$b1b9057587d5d0e8 = $Bb672d1983256a93;
			goto label60;
			goto label24;

			label58:
		}

		label60:

		if (!(0 < $b1b9057587d5d0e8)) {
			goto label66;
		}

		goto label3;

		label65:

		return true;

		label66:

		goto label67;

		label67:
	}

	static public function D93Af048A0e404F2($C98e11437faf4199, $ee6d1fc5d801b43f, $b11b536d4367995c = PHP_BIN)
	{
		goto label4;

		label4:

		if (!empty($C98e11437faf4199)) {
			goto label9;
		}

		return false;

		label9:

		clearstatcache(true);
		if (!(file_exists('/proc/' . $C98e11437faf4199) && is_readable('/proc/' . $C98e11437faf4199 . '/exe') && (strpos(basename(readlink('/proc/' . $C98e11437faf4199 . '/exe')), basename($b11b536d4367995c)) === 0))) {
			goto label71;
		}

		goto label47;

		label45:

		return false;
		goto label72;

		label47:

		$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
		if (!(($C6671ac66a4f1c57 == 'XUI[' . $ee6d1fc5d801b43f . ']') || ($C6671ac66a4f1c57 == 'XUIProxy[' . $ee6d1fc5d801b43f . ']'))) {
			goto label71;
		}

		return true;

		label71:

		goto label45;

		label72:
	}

	static public function BC5337836b080227($C98e11437faf4199, $ee6d1fc5d801b43f, $b11b536d4367995c = PHP_BIN)
	{
		goto label4;

		label4:

		if (!empty($C98e11437faf4199)) {
			goto label9;
		}

		return false;

		label9:

		clearstatcache(true);
		if (!(file_exists('/proc/' . $C98e11437faf4199) && is_readable('/proc/' . $C98e11437faf4199 . '/exe') && (strpos(basename(readlink('/proc/' . $C98e11437faf4199 . '/exe')), basename($b11b536d4367995c)) === 0))) {
			goto label63;
		}

		goto label45;

		label45:

		$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));

		if (!($C6671ac66a4f1c57 == 'Thumbnail[' . $ee6d1fc5d801b43f . ']')) {
			goto label63;
		}

		return true;

		label63:

		goto label64;

		label64:

		return false;
		goto label66;

		label66:
	}

	static public function C64F62A7Af653Bd1($C98e11437faf4199, $ee6d1fc5d801b43f, $b11b536d4367995c = PHP_BIN)
	{
		goto label25;

		label4:

		$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));

		if (!($C6671ac66a4f1c57 == 'TVArchive[' . $ee6d1fc5d801b43f . ']')) {
			goto label22;
		}

		return true;

		label22:

		goto label23;

		label23:

		return false;
		goto label66;

		label25:

		if (!empty($C98e11437faf4199)) {
			goto label30;
		}

		return false;

		label30:

		clearstatcache(true);
		if (!(file_exists('/proc/' . $C98e11437faf4199) && is_readable('/proc/' . $C98e11437faf4199 . '/exe') && (strpos(basename(readlink('/proc/' . $C98e11437faf4199 . '/exe')), basename($b11b536d4367995c)) === 0))) {
			goto label22;
		}

		goto label4;

		label66:
	}

	static public function d69230d2A98C2fd4($C98e11437faf4199, $ee6d1fc5d801b43f)
	{
		goto label22;

		label3:

		$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));

		if (!($C6671ac66a4f1c57 == 'XUIDelay[' . $ee6d1fc5d801b43f . ']')) {
			goto label21;
		}

		return true;

		label21:

		goto label45;

		label22:

		if (!empty($C98e11437faf4199)) {
			goto label27;
		}

		return false;

		label27:

		clearstatcache(true);
		if (!(file_exists('/proc/' . $C98e11437faf4199) && is_readable('/proc/' . $C98e11437faf4199 . '/exe'))) {
			goto label21;
		}

		goto label3;

		label45:

		return false;
		goto label47;

		label47:
	}

	static public function b4AB2a8eb0aa68eE($C98e11437faf4199, $ee6d1fc5d801b43f)
	{
		goto label5;

		label3:

		return false;
		goto label93;

		label5:

		if (!empty($C98e11437faf4199)) {
			goto label10;
		}

		return false;

		label10:

		clearstatcache(true);
		if (!(file_exists('/proc/' . $C98e11437faf4199) && is_readable('/proc/' . $C98e11437faf4199 . '/exe'))) {
			goto label3;
		}

		goto label59;

		label28:

		$C6671ac66a4f1c57 = trim(file_get_contents('/proc/' . $C98e11437faf4199 . '/cmdline'));
		if (!(stristr($C6671ac66a4f1c57, '/' . $ee6d1fc5d801b43f . '_.m3u8') || stristr($C6671ac66a4f1c57, '/' . $ee6d1fc5d801b43f . '_%d.ts'))) {
			goto label58;
		}

		return true;

		label58:

		goto label3;

		label59:

		if (strpos(basename(readlink('/proc/' . $C98e11437faf4199 . '/exe')), 'ffmpeg') === 0) {
			goto label28;
		}

		if (!(strpos(basename(readlink('/proc/' . $C98e11437faf4199 . '/exe')), 'php') === 0)) {
			goto label91;
		}

		return true;

		label91:

		goto label3;
		goto label28;

		label93:
	}

	static public function E764F10e99C26365($C98e11437faf4199, $b11b536d4367995c = NULL)
	{
		if (!empty($C98e11437faf4199)) {
			goto label7;
		}

		return false;

		label7:

		clearstatcache(true);
		if (!((file_exists('/proc/' . $C98e11437faf4199) && is_readable('/proc/' . $C98e11437faf4199 . '/exe') && (strpos(basename(readlink('/proc/' . $C98e11437faf4199 . '/exe')), basename($b11b536d4367995c)) === 0)) || !$b11b536d4367995c)) {
			goto label46;
		}

		return true;

		label46:

		return false;
	}

	static public function AeDcfE9CCb2C4A4b($Aac64ae34ff57fc4, $C98e11437faf4199)
	{
		return (self::e764F10e99C26365($C98e11437faf4199, 'ffmpeg') || self::E764f10E99C26365($C98e11437faf4199, 'php')) && file_exists($Aac64ae34ff57fc4);
	}

	static public function findKeyframe($a1eb372116d9e2f0)
	{
		goto label144;

		label2:

		$b591153210e45472 = fread($B3299684b062e356, $b6eee2ba660a2e00);
		$df6991d59f367c7e = 0;

		label8:

		if (!($df6991d59f367c7e < strlen($D42b0d205229567f))) {
			goto label28;
		}

		$ac6c0220cdf54994 = unpack('N', substr($D42b0d205229567f, $df6991d59f367c7e, 4))[1];
		goto label176;

		label27:

		goto label8;

		label28:

		$E6ebe1d751d53850 .= fread($B3299684b062e356, ($b6eee2ba660a2e00 * 64) - strlen($E6ebe1d751d53850));

		if (empty($E6ebe1d751d53850)) {
			goto label136;
		}

		goto label50;

		label42:

		fseek($B3299684b062e356, $df6991d59f367c7e);
		goto label28;

		label47:

		$df6991d59f367c7e++;
		goto label27;

		label50:

		foreach (str_split($E6ebe1d751d53850, $b6eee2ba660a2e00) as $c887a284a62c4f33) {
			goto label101;

			label58:

			goto label61;

			label60:

			$Cc9d4e9b4b64e591 = $aa8757e440328b92;

			label61:

			goto label63;

			label63:

			$aa8757e440328b92 += strlen($c887a284a62c4f33);
			goto label134;

			label69:

			if (!(($bbae58f184e65cf9 & 2) === 2)) {
				goto label99;
			}
			if (!((0 < $Cc9d4e9b4b64e591) && ((unpack('C', $c887a284a62c4f33[4])[1] == 7) && (substr($c887a284a62c4f33, 4, 2) == "\x7" . 'P')))) {
				goto label99;
			}

			goto label139;

			label99:

			goto label58;

			label101:

			$Be3c637a16a727b1 = unpack('N', substr($c887a284a62c4f33, 0, 4))[1];
			$Ba90f6e2230cba27 = ($Be3c637a16a727b1 >> 24) & 255;

			if (!($Ba90f6e2230cba27 == 71)) {
				goto label61;
			}

			if (substr($c887a284a62c4f33, 6, 4) == "\xb0" . '' . "\r" . '' . "\0" . '' . "\x1") {
				goto label60;
			}

			$bbae58f184e65cf9 = ($Be3c637a16a727b1 >> 4) & 3;
			goto label69;

			label134:
		}

		label136:

		$E6ebe1d751d53850 = '';
		goto label163;
		goto label139;

		label139:

		fclose($B3299684b062e356);

		label142:

		return $Cc9d4e9b4b64e591;
		goto label202;

		label144:

		$b6eee2ba660a2e00 = 188;
		$Cc9d4e9b4b64e591 = $aa8757e440328b92 = 0;
		$a3e91d19213fd36d = false;

		if (!file_exists($a1eb372116d9e2f0)) {
			goto label142;
		}

		$B3299684b062e356 = fopen($a1eb372116d9e2f0, 'rb');
		goto label160;

		label160:

		if (!$B3299684b062e356) {
			goto label142;
		}

		label163:

		if (feof($B3299684b062e356)) {
			goto label139;
		}

		if ($a3e91d19213fd36d) {
			goto label28;
		}

		$D42b0d205229567f = fread($B3299684b062e356, $b6eee2ba660a2e00);
		goto label2;

		label176:

		$d3213d00115d6a07 = unpack('N', substr($b591153210e45472, $df6991d59f367c7e, 4))[1];
		$Ba90f6e2230cba27 = ((($ac6c0220cdf54994 >> 24) & 255) == 71) && ((($d3213d00115d6a07 >> 24) & 255) == 71);

		if (!$Ba90f6e2230cba27) {
			goto label47;
		}

		$a3e91d19213fd36d = true;
		$aa8757e440328b92 = $df6991d59f367c7e;
		goto label42;

		label202:
	}

	static public function AD72b4259ca295B2()
	{
		return $_SERVER['REMOTE_ADDR'];
	}

	static public function e0117654B65AE897($A7d54b094ae83c95, $E111d28e9acc50b9, $B28ddea0da495e21 = NULL)
	{
		clearstatcache();

		if (file_exists($E111d28e9acc50b9)) {
			goto label11;
		}

		return false;

		label11:

		switch ($A7d54b094ae83c95) {
		case 'movie':
			if (is_null($B28ddea0da495e21)) {
				goto label52;
			}

			sscanf($B28ddea0da495e21, '%d:%d:%d', $Aa6711f02f4e8165, $C01784a58c8748e0, $d03052828cab569a);
			$Ab13f2545dd3df14 = (isset($d03052828cab569a) ? ($Aa6711f02f4e8165 * 3600) + ($C01784a58c8748e0 * 60) + $d03052828cab569a : ($Aa6711f02f4e8165 * 60) + $C01784a58c8748e0);
			$Bf1105c589a3fe51 = round((filesize($E111d28e9acc50b9) * 0.008) / ($Ab13f2545dd3df14 ?: 1));

			label52:

			goto label163;
		case 'live':
			goto label122;

			label54:

			$A963e07ce47787da = filesize(dirname($E111d28e9acc50b9) . '/' . $f73a0c8f2d0c1725) * 0.008;
			$D0151557c4eb49dd[] = $A963e07ce47787da / ($d03052828cab569a ?: 1);

			label69:

			goto label128;
			goto label71;

			label71:

			fclose($B3299684b062e356);
			$Bf1105c589a3fe51 = (0 < count($D0151557c4eb49dd) ? round(array_sum($D0151557c4eb49dd) / count($D0151557c4eb49dd)) : 0);
			goto label163;
			goto label163;

			label95:

			if (!stristr($F5ba2106d5227309, 'EXTINF')) {
				goto label69;
			}

			list($eee38963a3fe8a18, $d03052828cab569a) = explode(':', $F5ba2106d5227309);
			$d03052828cab569a = rtrim($d03052828cab569a, ',');

			if (!($d03052828cab569a <= 0)) {
				goto label141;
			}

			goto label128;
			goto label141;

			label122:

			$B3299684b062e356 = fopen($E111d28e9acc50b9, 'r');
			$D0151557c4eb49dd = [];

			label128:

			if (feof($B3299684b062e356)) {
				goto label71;
			}

			$F5ba2106d5227309 = trim(fgets($B3299684b062e356));
			goto label95;

			label141:

			$f73a0c8f2d0c1725 = trim(fgets($B3299684b062e356));

			if (file_exists(dirname($E111d28e9acc50b9) . '/' . $f73a0c8f2d0c1725)) {
				goto label54;
			}

			fclose($B3299684b062e356);
			return false;
			goto label54;
		}

		label163:

		return 0 < $Bf1105c589a3fe51 ? $Bf1105c589a3fe51 : false;
	}

	static public function d6b3157E40Ff47d6($b38e11ffdc6a3abb)
	{
		goto label32;

		label2:

		file_put_contents(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_isp', json_encode($Fca04b1755da7bd5));

		label15:

		return $Fca04b1755da7bd5;
		goto label64;

		label17:

		$C9d42cf3fc64130c = new MaxMind\Db\Reader(GEOISP_BIN);
		$Fca04b1755da7bd5 = $C9d42cf3fc64130c->get($b38e11ffdc6a3abb);
		$C9d42cf3fc64130c->close();

		if (!$Fca04b1755da7bd5) {
			goto label15;
		}

		goto label2;

		label32:

		if (!empty($b38e11ffdc6a3abb)) {
			goto label37;
		}

		return false;

		label37:

		if (!file_exists(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_isp')) {
			goto label17;
		}

		return json_decode(file_get_contents(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_isp'), true);
		goto label17;

		label64:
	}

	static public function eff2889a3e3E9C34($Debf76f3b5719ca3)
	{
		foreach (self::$rBlockedISP as $fc07e00b86ce286c) {
			if (!(strtolower($Debf76f3b5719ca3) == strtolower($fc07e00b86ce286c['isp']))) {
				goto label22;
			}

			return intval($fc07e00b86ce286c['blocked']);

			label22:
		}

		return 0;
	}

	static public function FA85f18587477968($df9ce9bd5a53be95)
	{
		return in_array($df9ce9bd5a53be95, self::$rBlockedServers);
	}

	static public function Aed9009B5Dc15CAe($b38e11ffdc6a3abb)
	{
		goto label17;

		label2:

		file_put_contents(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_geo2', json_encode($Fca04b1755da7bd5));

		label15:

		return $Fca04b1755da7bd5;
		goto label64;

		label17:

		if (!empty($b38e11ffdc6a3abb)) {
			goto label22;
		}

		return false;

		label22:

		if (!file_exists(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_geo2')) {
			goto label49;
		}

		return json_decode(file_get_contents(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_geo2'), true);
		goto label49;

		label49:

		$C9d42cf3fc64130c = new MaxMind\Db\Reader(GEOLITE2_BIN);
		$Fca04b1755da7bd5 = $C9d42cf3fc64130c->get($b38e11ffdc6a3abb);
		$C9d42cf3fc64130c->close();

		if (!$Fca04b1755da7bd5) {
			goto label15;
		}

		goto label2;

		label64:
	}

	static public function AB992b2373F7BEca()
	{
		$Ed3ae7262e121bb3 = 0;
		exec('ps -fp $(pgrep -u xui)', $d094d3e133ec8c03, $ced57d71bc7400ec);

		foreach ($d094d3e133ec8c03 as $d0bf680e3271ee34) {
			$E3665d09b9cea208 = explode(' ', preg_replace('!\\s+!', ' ', trim($d0bf680e3271ee34)));
			if (!(($E3665d09b9cea208[8] == 'nginx:') && ($E3665d09b9cea208[9] == 'master'))) {
				goto label33;
			}

			$Ed3ae7262e121bb3++;

			label33:
		}

		return 0 < $Ed3ae7262e121bb3;
	}

	static public function D6A9D4057776e78D($B1a3986a5f168faf = NULL)
	{
		goto label100;

		label2:

		if (!$B1a3986a5f168faf) {
			goto label98;
		}

		$B9869413eae86beb['path'] = pathinfo($B1a3986a5f168faf)['dirname'];
		exec('openssl x509 -serial -enddate -subject -noout -in ' . escapeshellarg($B1a3986a5f168faf), $d094d3e133ec8c03, $ced57d71bc7400ec);

		foreach ($d094d3e133ec8c03 as $F5ba2106d5227309) {
			goto label37;

			label24:

			$B9869413eae86beb['serial'] = trim(explode('serial=', $F5ba2106d5227309)[1]);

			label35:

			goto label95;

			label37:

			if (stripos($F5ba2106d5227309, 'serial=') !== false) {
				goto label24;
			}

			if (stripos($F5ba2106d5227309, 'subject=') !== false) {
				goto label80;
			}

			if (!(stripos($F5ba2106d5227309, 'notAfter=') !== false)) {
				goto label76;
			}

			$B9869413eae86beb['expiration'] = strtotime(trim(explode('notAfter=', $F5ba2106d5227309)[1]));

			label76:

			goto label78;

			label78:

			goto label91;

			label80:

			$B9869413eae86beb['subject'] = trim(explode('subject=', $F5ba2106d5227309)[1]);

			label91:

			goto label35;
			goto label24;

			label95:
		}

		goto label98;

		label98:

		return $B9869413eae86beb;
		goto label143;

		label100:

		$B9869413eae86beb = ['serial' => NULL, 'expiration' => NULL, 'subject' => NULL, 'path' => NULL];

		if ($B1a3986a5f168faf) {
			goto label2;
		}

		$a998abd856b07a59 = explode("\n", file_get_contents(BIN_PATH . 'nginx/conf/ssl.conf'));

		foreach ($a998abd856b07a59 as $F5ba2106d5227309) {
			if (!(stripos($F5ba2106d5227309, 'ssl_certificate ') !== false)) {
				goto label140;
			}

			$B1a3986a5f168faf = rtrim(trim(explode('ssl_certificate ', $F5ba2106d5227309)[1]), ';');
			goto label142;

			label140:
		}

		label142:

		goto label2;

		label143:
	}

	static public function Cccee53491f4Af9c($c68b76c7e42b19eb, $A7d54b094ae83c95 = NULL)
	{
		goto label62;

		label3:

		$F48d5724f3b4ec96 = Xui\Functions::encrypt($c68b76c7e42b19eb, self::$rSettings['live_streaming_pass'], OPENSSL_EXTRA);
		$a325d670de291ca7 = IMAGES_PATH . $F48d5724f3b4ec96 . '.' . $E3f5ab103227acc2;

		if (file_exists($a325d670de291ca7)) {
			goto label118;
		}

		$Daaec03d386c8f6a = curl_init();
		curl_setopt($Daaec03d386c8f6a, CURLOPT_URL, $c68b76c7e42b19eb);
		goto label32;

		label32:

		curl_setopt($Daaec03d386c8f6a, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_TIMEOUT, 5);
		$ba2d146bb5a55097 = curl_exec($Daaec03d386c8f6a);

		if (!(0 < strlen($ba2d146bb5a55097))) {
			goto label117;
		}

		goto label126;

		label62:
		if (!((0 < strlen($c68b76c7e42b19eb)) && (substr(strtolower($c68b76c7e42b19eb), 0, 4) == 'http'))) {
			goto label93;
		}

		$d88ca0c1f58e0dc1 = pathinfo($c68b76c7e42b19eb);
		$E3f5ab103227acc2 = $d88ca0c1f58e0dc1['extension'];

		if ($E3f5ab103227acc2) {
			goto label106;
		}

		$C0b9b91118f9138c = getimagesize($c68b76c7e42b19eb);
		goto label95;

		label93:

		return $c68b76c7e42b19eb;
		goto label149;

		label95:

		if (!$C0b9b91118f9138c['mime']) {
			goto label106;
		}

		$E3f5ab103227acc2 = explode('/', $C0b9b91118f9138c['mime'])[1];

		label106:

		if (!in_array(strtolower($E3f5ab103227acc2), ['jpg', 'jpeg', 'png'])) {
			goto label93;
		}

		goto label3;

		label117:

		goto label125;

		label118:

		return 's:' . SERVER_ID . ':/images/' . $F48d5724f3b4ec96 . '.' . $E3f5ab103227acc2;

		label125:

		goto label93;

		label126:

		$E111d28e9acc50b9 = IMAGES_PATH . $F48d5724f3b4ec96 . '.' . $E3f5ab103227acc2;
		file_put_contents($E111d28e9acc50b9, $ba2d146bb5a55097);

		if (!file_exists($E111d28e9acc50b9)) {
			goto label148;
		}

		return 's:' . SERVER_ID . ':/images/' . $F48d5724f3b4ec96 . '.' . $E3f5ab103227acc2;

		label148:

		goto label117;

		label149:
	}

	static public function E0FF83479Ca0FF34($B7d8cc28e3e1d1d0, $d3b47f338b3a06be, $D34e9a57f9f2ea59, $ef1a33e2798d23ed)
	{
		goto label37;

		label5:

		$d2d13a36f63d68b0 = (int) $d3b47f338b3a06be * $c8f99206383d5078;

		label8:

		return ['height' => round($d2d13a36f63d68b0, 0), 'width' => round($f9fbf5dea2a37027, 0)];
		goto label55;

		label20:

		$f08deccb5646dc1b = $D34e9a57f9f2ea59 / ($B7d8cc28e3e1d1d0 ?: 1);
		$F2db63485ee4bbef = $ef1a33e2798d23ed / ($d3b47f338b3a06be ?: 1);
		$c8f99206383d5078 = min($f08deccb5646dc1b, $F2db63485ee4bbef);

		if ($c8f99206383d5078 < 1) {
			goto label51;
		}

		goto label48;

		label37:

		if (!($D34e9a57f9f2ea59 == 0)) {
			goto label42;
		}

		$D34e9a57f9f2ea59 = $B7d8cc28e3e1d1d0;

		label42:

		if (!($ef1a33e2798d23ed == 0)) {
			goto label20;
		}

		$ef1a33e2798d23ed = $d3b47f338b3a06be;
		goto label20;

		label48:

		$d2d13a36f63d68b0 = $d3b47f338b3a06be;
		$f9fbf5dea2a37027 = $B7d8cc28e3e1d1d0;
		goto label8;

		label51:

		$f9fbf5dea2a37027 = (int) $B7d8cc28e3e1d1d0 * $c8f99206383d5078;
		goto label5;

		label55:
	}

	static public function c64e4F6977540315($A7ca171405b19571)
	{
		$E5f5fbcd0c39ff43 = '/^(?:ftp|https?|feed)?:?\\/\\/(?:(?:(?:[\\w\\.\\-\\+!$&\'\\(\\)*\\+,;=]|%[0-9a-f]{2})+:)*' . "\n" . '        (?:[\\w\\.\\-\\+%!$&\'\\(\\)*\\+,;=]|%[0-9a-f]{2})+@)?(?:' . "\n" . '        (?:[a-z0-9\\-\\.]|%[0-9a-f]{2})+|(?:\\[(?:[0-9a-f]{0,4}:)*(?:[0-9a-f]{0,4})\\]))(?::[0-9]+)?(?:[\\/|\\?]' . "\n" . '        (?:[\\w#!:\\.\\?\\+\\|=&@$\'~*,;\\/\\(\\)\\[\\]\\-]|%[0-9a-f]{2})*)?$/xi';
		return (bool) preg_match($E5f5fbcd0c39ff43, $A7ca171405b19571);
	}

	static public function d6647aad199Cc107($c68b76c7e42b19eb, $A7d54b094ae83c95)
	{
		goto label20;

		label3:

		$e67d13066773cc34 = 96;
		$c4689ba24233da2d = 32;

		label5:

		$Daecfbd6410b9c42 = explode('.', strtolower(pathinfo($c68b76c7e42b19eb)['extension']))[0];
		goto label74;

		label20:
		if (($A7d54b094ae83c95 == 1) || ($A7d54b094ae83c95 == 5) || ($A7d54b094ae83c95 == 4)) {
			goto label3;
		}

		if ($A7d54b094ae83c95 == 2) {
			goto label132;
		}

		if ($A7d54b094ae83c95 == 5) {
			goto label70;
		}

		return false;
		goto label72;
		goto label70;

		label38:

		imagesavealpha($Fae3e8768480a34e, true);
		imagecopyresampled($Fae3e8768480a34e, $c68b76c7e42b19eb, 0, 0, 0, 0, $a1977ecf8aadf4c3['width'], $a1977ecf8aadf4c3['height'], $f27e7fb2603dc5d1, $f12539b4260f79de);
		imagepng($Fae3e8768480a34e, $Cf5e0f5f58fe7b78);

		label60:

		goto label61;

		label61:

		if (!file_exists($Cf5e0f5f58fe7b78)) {
			goto label68;
		}

		return true;

		label68:

		return false;
		goto label165;

		label70:

		$e67d13066773cc34 = 32;
		$c4689ba24233da2d = 64;

		label72:

		goto label134;
		goto label132;

		label74:

		if (!in_array($Daecfbd6410b9c42, ['png', 'jpg', 'jpeg'])) {
			goto label68;
		}

		$Cf5e0f5f58fe7b78 = IMAGES_PATH . 'admin/' . md5($c68b76c7e42b19eb) . '_' . $e67d13066773cc34 . '_' . $c4689ba24233da2d . '.' . $Daecfbd6410b9c42;

		if (file_exists($Cf5e0f5f58fe7b78)) {
			goto label60;
		}

		if (self::c64e4f6977540315($c68b76c7e42b19eb)) {
			goto label122;
		}

		$D6248a373ed1c81c = IMAGES_PATH . basename($c68b76c7e42b19eb);
		goto label121;

		label111:

		goto label116;

		label112:

		$c68b76c7e42b19eb = imagecreatefrompng($D6248a373ed1c81c);

		label116:

		imagealphablending($Fae3e8768480a34e, false);
		goto label38;

		label121:

		goto label123;

		label122:

		$D6248a373ed1c81c = $c68b76c7e42b19eb;

		label123:

		list($f27e7fb2603dc5d1, $f12539b4260f79de) = getimagesize($D6248a373ed1c81c);
		goto label136;

		label132:

		$e67d13066773cc34 = 58;
		$c4689ba24233da2d = 32;

		label134:

		goto label5;
		goto label3;

		label136:

		$a1977ecf8aadf4c3 = self::E0Ff83479Ca0Ff34($f27e7fb2603dc5d1, $f12539b4260f79de, $e67d13066773cc34, $c4689ba24233da2d);
		if (!($a1977ecf8aadf4c3['width'] && $a1977ecf8aadf4c3['height'])) {
			goto label60;
		}

		$Fae3e8768480a34e = imagecreatetruecolor($a1977ecf8aadf4c3['width'], $a1977ecf8aadf4c3['height']);

		if ($Daecfbd6410b9c42 == 'png') {
			goto label112;
		}

		$c68b76c7e42b19eb = imagecreatefromjpeg($D6248a373ed1c81c);
		goto label111;

		label165:
	}

	static public function fcA722697178454b($A7ca171405b19571, $af3ce326c4e9445e = NULL)
	{
		goto label24;

		label3:

		return $B447bd0870faed42 . 'images/' . basename($A7ca171405b19571);

		label9:

		goto label41;

		label10:

		$B447bd0870faed42 = self::D7ee5125f91e2E04(intval($E3665d09b9cea208[1]), $af3ce326c4e9445e);

		if ($B447bd0870faed42) {
			goto label23;
		}

		return '';
		goto label9;

		label23:

		goto label3;

		label24:

		if (substr($A7ca171405b19571, 0, 2) == 's:') {
			goto label34;
		}

		return $A7ca171405b19571;
		goto label9;

		label34:

		$E3665d09b9cea208 = explode(':', $A7ca171405b19571, 3);
		goto label10;

		label41:
	}

	static public function c49146760374D4cc($ee6d1fc5d801b43f, $d7f009ef0da38922 = false)
	{
		goto label5;

		label3:

		return [];
		goto label62;

		label5:

		self::$db->query('SELECT `type`,`movie_propeties`,`epg_id`,`channel_id` FROM `streams` WHERE `id` = ?', $ee6d1fc5d801b43f);

		if (!(0 < self::$db->num_rows())) {
			goto label3;
		}

		$ba2d146bb5a55097 = self::$db->get_row();

		if ($ba2d146bb5a55097['type'] != 2) {
			goto label50;
		}

		return json_decode($ba2d146bb5a55097['movie_propeties'], true);
		goto label49;

		label32:

		self::$db->query('SELECT * FROM `epg_data` WHERE `epg_id` = ? AND `channel_id` = ? AND `end` >= ?;', $ba2d146bb5a55097['epg_id'], $ba2d146bb5a55097['channel_id'], date('Y-m-d H:i:00'));

		label44:

		return self::$db->get_rows();

		label48:

		goto label3;

		label49:

		goto label48;

		label50:

		if ($d7f009ef0da38922) {
			goto label32;
		}

		self::$db->query('SELECT * FROM `epg_data` WHERE `epg_id` = ? AND `channel_id` = ?;', $ba2d146bb5a55097['epg_id'], $ba2d146bb5a55097['channel_id']);
		goto label44;
		goto label32;

		label62:
	}

	static public function D7EE5125f91e2e04($C082ca9ed03f473c = NULL, $af3ce326c4e9445e = NULL)
	{
		goto label16;

		label3:

		goto label5;

		label4:

		$f547aeca99c55c3e = $C9febb240944fd1e;

		label5:

		$B447bd0870faed42 = $Bf9be24c69c0f17b . '://' . $f547aeca99c55c3e . ':' . self::$rServers[$C082ca9ed03f473c][$Bf9be24c69c0f17b . '_broadcast_port'] . '/';
		goto label27;

		label16:

		$Befea2b2ae7dbf72 = NULL;

		if (isset($C082ca9ed03f473c)) {
			goto label22;
		}

		$C082ca9ed03f473c = SERVER_ID;

		label22:

		if ($af3ce326c4e9445e) {
			goto label131;
		}

		goto label98;

		label25:

		return NULL;
		goto label186;

		label27:
		if (!((self::$rServers[$C082ca9ed03f473c]['server_type'] == 1) && $Befea2b2ae7dbf72 && (self::$rServers[$Befea2b2ae7dbf72]['is_main'] == 0))) {
			goto label52;
		}

		$B447bd0870faed42 .= md5($C082ca9ed03f473c . '_' . $Befea2b2ae7dbf72 . '_' . OPENSSL_EXTRA) . '/';

		label52:

		return $B447bd0870faed42;

		label53:

		goto label25;

		label54:

		if (!self::$rServers[$C082ca9ed03f473c]) {
			goto label53;
		}

		if (!self::$rServers[$C082ca9ed03f473c]['enable_proxy']) {
			goto label138;
		}

		$d41f77c23bf44d28 = array_keys(self::getProxies($C082ca9ed03f473c));

		if (!(count($d41f77c23bf44d28) == 0)) {
			goto label88;
		}

		$d41f77c23bf44d28 = array_keys(self::getProxies($C082ca9ed03f473c, false));
		goto label88;

		label88:

		if (!(count($d41f77c23bf44d28) == 0)) {
			goto label96;
		}

		return '';

		label96:

		$Befea2b2ae7dbf72 = $C082ca9ed03f473c;
		goto label133;

		label98:
		if (isset($_SERVER['SERVER_PORT']) && self::$rSettings['keep_protocol']) {
			goto label111;
		}

		$Bf9be24c69c0f17b = self::$rServers[$C082ca9ed03f473c]['server_protocol'];
		goto label130;

		label111:
		$Bf9be24c69c0f17b = ((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off')) || ($_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http');
		goto label130;

		label130:

		goto label132;

		label131:

		$Bf9be24c69c0f17b = $af3ce326c4e9445e;

		label132:

		goto label54;

		label133:

		$C082ca9ed03f473c = $d41f77c23bf44d28[array_rand($d41f77c23bf44d28)];

		label138:

		$C9febb240944fd1e = (defined('host') ? HOST : NULL);
		if ($C9febb240944fd1e && in_array(strtolower($C9febb240944fd1e), array_map('strtolower', self::$rServers[$C082ca9ed03f473c]['domains']['urls']))) {
			goto label4;
		}

		$f547aeca99c55c3e = (empty(self::$rServers[$C082ca9ed03f473c]['domain_name']) ? self::$rServers[$C082ca9ed03f473c]['server_ip'] : explode(',', self::$rServers[$C082ca9ed03f473c]['domain_name'])[0]);
		goto label3;

		label186:
	}

	static public function c6CeEc588476eC43($A7ca171405b19571, $c5abff2a19997159 = true)
	{
		$ab701fbbd66214d9 = curl_init();
		curl_setopt($ab701fbbd66214d9, CURLOPT_CONNECTTIMEOUT, 3);
		curl_setopt($ab701fbbd66214d9, CURLOPT_TIMEOUT, 3);
		curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $A7ca171405b19571);
		curl_setopt($ab701fbbd66214d9, CURLOPT_USERAGENT, 'XUI/' . XUI_VERSION);
		curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, $c5abff2a19997159);
		$B9869413eae86beb = curl_exec($ab701fbbd66214d9);
		curl_close($ab701fbbd66214d9);
		return $B9869413eae86beb;
	}

	static public function bC4858bA4c3cd1Fd($A7d54b094ae83c95, $Caf4325605347834, $Ddca38688d17e48c)
	{
		goto label4;

		label4:

		$D8bc2d87364696dd = intval(self::$rSettings['max_simultaneous_downloads']);

		if (!($D8bc2d87364696dd == 0)) {
			goto label15;
		}

		return true;

		label15:

		if (!$Caf4325605347834['is_restreamer']) {
			goto label76;
		}

		goto label75;

		label20:

		$A76340360833c748 = false;

		if (!(count($a0ad81cfc6461351[$A7d54b094ae83c95]) < $D8bc2d87364696dd)) {
			goto label34;
		}

		$a0ad81cfc6461351[$A7d54b094ae83c95][] = $Ddca38688d17e48c;
		$A76340360833c748 = true;
		goto label34;

		label34:

		file_put_contents($D6be258a9043b749, json_encode($a0ad81cfc6461351), LOCK_EX);
		return $A76340360833c748;
		goto label97;

		label45:

		goto label20;

		label46:

		$a0ad81cfc6461351[$A7d54b094ae83c95] = [];

		foreach (json_decode(file_get_contents($D6be258a9043b749), true)[$A7d54b094ae83c95] as $C98e11437faf4199) {
			if (!(self::e764f10E99C26365($C98e11437faf4199, 'php-fpm') && ($C98e11437faf4199 != $Ddca38688d17e48c))) {
				goto label72;
			}

			$a0ad81cfc6461351[$A7d54b094ae83c95][] = $C98e11437faf4199;

			label72:
		}

		goto label20;

		label75:

		return true;

		label76:

		$D6be258a9043b749 = FLOOD_TMP_PATH . $Caf4325605347834['id'] . '_downloads';
		if (file_exists($D6be258a9043b749) && ((time() - filemtime($D6be258a9043b749)) < 10)) {
			goto label46;
		}

		$a0ad81cfc6461351 = [
			'epg'      => [],
			'playlist' => []
		];
		goto label45;

		label97:
	}

	static public function f655a951d8e1e798($A7d54b094ae83c95, $Caf4325605347834, $Ddca38688d17e48c)
	{
		goto label33;

		label4:

		$a0ad81cfc6461351[$A7d54b094ae83c95] = [];

		foreach (json_decode(file_get_contents($D6be258a9043b749), true)[$A7d54b094ae83c95] as $C98e11437faf4199) {
			if (!(self::e764f10E99c26365($C98e11437faf4199, 'php-fpm') && ($C98e11437faf4199 != $Ddca38688d17e48c))) {
				goto label30;
			}

			$a0ad81cfc6461351[$A7d54b094ae83c95][] = $C98e11437faf4199;

			label30:
		}

		label32:

		goto label49;

		label33:

		if (!(intval(self::$rSettings['max_simultaneous_downloads']) == 0)) {
			goto label43;
		}

		return NULL;

		label43:

		if (!$Caf4325605347834['is_restreamer']) {
			goto label59;
		}

		return NULL;
		goto label59;

		label49:

		file_put_contents($D6be258a9043b749, json_encode($a0ad81cfc6461351), LOCK_EX);
		goto label72;

		label59:

		$D6be258a9043b749 = FLOOD_TMP_PATH . $Caf4325605347834['id'] . '_downloads';

		if (file_exists($D6be258a9043b749)) {
			goto label4;
		}

		$a0ad81cfc6461351 = [
			'epg'      => [],
			'playlist' => []
		];
		goto label32;
		goto label4;

		label72:
	}

	static public function F1359f4b41C091ec($Caf4325605347834, $b38e11ffdc6a3abb = NULL)
	{
		goto label107;

		label3:

		$a0ad81cfc6461351['attempts'][] = time();
		file_put_contents($Cdaa649ec8154266, json_encode($a0ad81cfc6461351), LOCK_EX);

		label17:

		goto label160;

		label18:

		$a0ad81cfc6461351 = json_decode(file_get_contents($Cdaa649ec8154266), true);
		if (!(isset($a0ad81cfc6461351['block_until']) && (time() < $a0ad81cfc6461351['block_until']))) {
			goto label44;
		}

		sleep(intval(self::$rSettings['auth_flood_sleep']));

		label44:

		goto label45;

		label45:

		$dadc1de464d1afa3 = self::$rSettings['auth_flood_seconds'];
		$D8bc2d87364696dd = self::$rSettings['auth_flood_limit'];
		$a0ad81cfc6461351['attempts'] = self::BaDbC06Fa73a156D($a0ad81cfc6461351['attempts'], $dadc1de464d1afa3, true);

		if (!($D8bc2d87364696dd <= count($a0ad81cfc6461351['attempts']))) {
			goto label3;
		}

		$a0ad81cfc6461351['block_until'] = time() + intval(self::$rSettings['auth_flood_seconds']);
		goto label3;

		label78:

		$Cdaa649ec8154266 = FLOOD_TMP_PATH . intval($Caf4325605347834['id']) . '_' . $b38e11ffdc6a3abb;

		if (file_exists($Cdaa649ec8154266)) {
			goto label18;
		}

		file_put_contents($Cdaa649ec8154266, json_encode([
			'attempts' => [time()]
		]), LOCK_EX);
		goto label17;
		goto label18;

		label107:

		if (!(self::$rSettings['auth_flood_limit'] == 0)) {
			goto label114;
		}

		return NULL;

		label114:

		if (!$Caf4325605347834['is_restreamer']) {
			goto label120;
		}

		return NULL;
		goto label120;

		label120:

		if ($b38e11ffdc6a3abb) {
			goto label125;
		}

		$b38e11ffdc6a3abb = self::Ad72b4259CA295B2();

		label125:
		if (!(empty($b38e11ffdc6a3abb) || in_array($b38e11ffdc6a3abb, self::$rAllowedIPs))) {
			goto label138;
		}

		goto label137;

		label137:

		return NULL;

		label138:

		$d60462706e4336d6 = array_filter(array_unique(explode(',', self::$rSettings['flood_ips_exclude'])));

		if (!in_array($b38e11ffdc6a3abb, $d60462706e4336d6)) {
			goto label78;
		}

		return NULL;
		goto label78;

		label160:
	}

	static public function f79F5d7afa165Cbd($A1f381c3d6825384 = false)
	{
		goto label125;

		label2:

		$d50b916cb4fe151a = [];

		foreach (array_keys(self::$rServers) as $C082ca9ed03f473c) {
			goto label11;

			label11:

			$F02df1ff50814d51 = json_decode(self::$rServers[$C082ca9ed03f473c]['server_hardware'], true);

			if (!empty($F02df1ff50814d51['network_speed'])) {
				goto label44;
			}

			if (0 < self::$rServers[$C082ca9ed03f473c]['network_guaranteed_speed']) {
				goto label37;
			}

			$d50b916cb4fe151a[$C082ca9ed03f473c] = 1000;
			goto label42;
			goto label37;

			label37:

			$d50b916cb4fe151a[$C082ca9ed03f473c] = self::$rServers[$C082ca9ed03f473c]['network_guaranteed_speed'];

			label42:

			goto label50;

			label44:

			goto label46;

			label46:

			$d50b916cb4fe151a[$C082ca9ed03f473c] = (float) $F02df1ff50814d51['network_speed'];

			label50:

			goto label52;

			label52:
		}

		foreach ($D8e7681dfae2905b as $C082ca9ed03f473c => $Fb9da1713bff19ce) {
			$E575ee46496371df = intval(self::$rServers[$C082ca9ed03f473c]['watchdog']['bytes_sent'] / 125000);
			$D8e7681dfae2905b[$C082ca9ed03f473c]['capacity'] = (float) ($E575ee46496371df / ($d50b916cb4fe151a[$C082ca9ed03f473c] ?: 1000));
		}

		goto label163;

		label77:

		foreach ($D8e7681dfae2905b as $C082ca9ed03f473c => $Fb9da1713bff19ce) {
			$D8e7681dfae2905b[$C082ca9ed03f473c]['capacity'] = (float) ($Fb9da1713bff19ce['online_clients'] / (self::$rServers[$C082ca9ed03f473c]['total_clients'] ?: 1));
		}

		label93:

		goto label163;
		goto label2;

		label95:

		$df6991d59f367c7e = 0;

		foreach (array_keys(self::$rServers) as $C082ca9ed03f473c) {
			if (!self::$rServers[$C082ca9ed03f473c]['server_online']) {
				goto label117;
			}

			$D8e7681dfae2905b[$C082ca9ed03f473c] = ['online_clients' => $e02ff34f7d898a7b[$df6991d59f367c7e] ?: 0];
			$df6991d59f367c7e++;

			label117:
		}

		label119:

		if (self::$rSettings['split_by'] == 'band') {
			goto label2;
		}

		goto label222;

		label125:

		$D6be258a9043b749 = ($A1f381c3d6825384 ? 'proxy_capacity' : 'servers_capacity');
		if (!(self::$rSettings['redis_handler'] && $A1f381c3d6825384 && (self::$rSettings['split_by'] == 'maxclients'))) {
			goto label146;
		}

		self::$rSettings['split_by'] == 'guar_band';

		label146:

		if (self::$rSettings['redis_handler']) {
			goto label162;
		}

		goto label176;

		label151:

		self::$db->query('SELECT `proxy_id`, COUNT(*) AS `online_clients` FROM `lines_live` WHERE `proxy_id` <> 0 AND `hls_end` = 0 GROUP BY `proxy_id`;');
		$D8e7681dfae2905b = self::$db->get_rows(true, 'proxy_id');

		label161:

		goto label119;

		label162:

		goto label190;

		label163:

		file_put_contents(CACHE_TMP_PATH . $D6be258a9043b749, json_encode($D8e7681dfae2905b), LOCK_EX);
		return $D8e7681dfae2905b;
		goto label269;

		label176:

		if ($A1f381c3d6825384) {
			goto label189;
		}

		self::$db->query('SELECT `server_id`, COUNT(*) AS `online_clients` FROM `lines_live` WHERE `server_id` <> 0 AND `hls_end` = 0 GROUP BY `server_id`;');
		$D8e7681dfae2905b = self::$db->get_rows(true, 'server_id');
		goto label161;

		label189:

		goto label151;

		label190:

		$D8e7681dfae2905b = [];
		$d344a66178d455b1 = self::$redis->multi();

		foreach (array_keys(self::$rServers) as $C082ca9ed03f473c) {
			if (!self::$rServers[$C082ca9ed03f473c]['server_online']) {
				goto label216;
			}

			$d344a66178d455b1->zCard(($A1f381c3d6825384 ? 'PROXY#' : 'SERVER#') . $C082ca9ed03f473c);

			label216:
		}

		$e02ff34f7d898a7b = $d344a66178d455b1->exec();
		goto label95;

		label222:

		if (self::$rSettings['split_by'] == 'maxclients') {
			goto label77;
		}

		if (self::$rSettings['split_by'] == 'guar_band') {
			goto label243;
		}

		foreach ($D8e7681dfae2905b as $C082ca9ed03f473c => $Fb9da1713bff19ce) {
			$D8e7681dfae2905b[$C082ca9ed03f473c]['capacity'] = $Fb9da1713bff19ce['online_clients'];
		}

		goto label267;
		goto label243;

		label243:

		foreach ($D8e7681dfae2905b as $C082ca9ed03f473c => $Fb9da1713bff19ce) {
			$E575ee46496371df = intval(self::$rServers[$C082ca9ed03f473c]['watchdog']['bytes_sent'] / 125000);
			$D8e7681dfae2905b[$C082ca9ed03f473c]['capacity'] = (float) ($E575ee46496371df / (self::$rServers[$C082ca9ed03f473c]['network_guaranteed_speed'] ?: 1));
		}

		label267:

		goto label93;
		goto label77;

		label269:
	}

	static public function E7C45286B27f999B($C082ca9ed03f473c = NULL, $f7107e3a92443147 = NULL, $ee6d1fc5d801b43f = NULL)
	{
		goto label102;

		label4:

		$ca8155fd3c07c1ee = self::$redis->zRangeByScore('LINE#' . $f7107e3a92443147, '-inf', '+inf');

		label12:

		goto label22;

		label13:

		$ca8155fd3c07c1ee = self::$redis->zRangeByScore('SERVER#' . $C082ca9ed03f473c, '-inf', '+inf');
		goto label22;

		label22:

		if (!(0 < count($ca8155fd3c07c1ee))) {
			goto label40;
		}

		return [$ca8155fd3c07c1ee, array_map('igbinary_unserialize', self::$redis->mGet($ca8155fd3c07c1ee))];

		label40:

		goto label137;

		label41:

		$dfee9ca8292e4734 = '';

		if (!(0 < count($cf0aab70014807af))) {
			goto label55;
		}

		$dfee9ca8292e4734 = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

		label55:

		goto label56;

		label56:

		$B91645b8411dc88c = 'SELECT t2.*,t3.*,t5.bitrate,t1.*,t1.uuid AS `uuid` FROM `lines_live` t1 LEFT JOIN `lines` t2 ON t2.id = t1.user_id LEFT JOIN `streams` t3 ON t3.id = t1.stream_id LEFT JOIN `streams_servers` t5 ON t5.stream_id = t1.stream_id AND t5.server_id = t1.server_id ' . $dfee9ca8292e4734 . ' ORDER BY t1.activity_id ASC';
		self::$db->query($B91645b8411dc88c);
		return self::$db->get_rows(true, 'user_id', false);
		goto label40;

		label72:

		goto label122;

		label73:

		$ca8155fd3c07c1ee = self::$redis->zRangeByScore('STREAM#' . $ee6d1fc5d801b43f, '-inf', '+inf');

		label81:

		goto label12;

		label82:

		goto label4;

		label83:

		if (empty($C082ca9ed03f473c)) {
			goto label92;
		}

		$cf0aab70014807af[] = 't1.server_id = ' . intval($C082ca9ed03f473c);

		label92:

		if (empty($f7107e3a92443147)) {
			goto label41;
		}

		$cf0aab70014807af[] = 't1.user_id = ' . intval($f7107e3a92443147);
		goto label41;

		label102:
		if (!(self::$rSettings['redis_handler'] && !is_object(self::$redis))) {
			goto label116;
		}

		self::D6AeB3175A43F301();

		label116:

		if (self::$rSettings['redis_handler']) {
			goto label72;
		}

		$cf0aab70014807af = [];
		goto label83;

		label122:

		if ($C082ca9ed03f473c) {
			goto label13;
		}

		if ($f7107e3a92443147) {
			goto label82;
		}

		if ($ee6d1fc5d801b43f) {
			goto label73;
		}

		$ca8155fd3c07c1ee = self::$redis->zRangeByScore('LIVE', '-inf', '+inf');
		goto label81;
		goto label73;

		label137:
	}

	static public function getEnded()
	{
		if (is_object(self::$redis)) {
			goto label8;
		}

		self::D6AeB3175A43F301();

		label8:

		$ca8155fd3c07c1ee = self::$redis->sMembers('ENDED');

		if (!(0 < count($ca8155fd3c07c1ee))) {
			goto label29;
		}

		return array_map('igbinary_unserialize', self::$redis->mGet($ca8155fd3c07c1ee));

		label29:
	}

	static public function getBouquetMap($ee6d1fc5d801b43f)
	{
		$B51da85892620f9b = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'bouquet_map'));
		$B9869413eae86beb = $B51da85892620f9b[$ee6d1fc5d801b43f] ?: [];
		unset($B51da85892620f9b);
		return $B9869413eae86beb;
	}

	static public function CaC325153A658C37($ee6d1fc5d801b43f, $ebb4852f69f0dca0 = false)
	{
		if (self::$rCached) {
			goto label6;
		}

		return false;

		label6:

		self::$db->query('SELECT COUNT(*) AS `count` FROM `signals` WHERE `server_id` = ? AND `cache` = 1 AND `custom_data` = ?;', self::c3520d240F17Dcb1(), json_encode(['type' => 'update_stream', 'id' => $ee6d1fc5d801b43f]));

		if (!(self::$db->get_row()['count'] == 0)) {
			goto label43;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', self::c3520d240f17Dcb1(), time(), json_encode(['type' => 'update_stream', 'id' => $ee6d1fc5d801b43f]));

		label43:

		return true;
	}

	static public function updateStreams($dec36723d7be7c49)
	{
		if (self::$rCached) {
			goto label5;
		}

		return false;

		label5:

		self::$db->query('SELECT COUNT(*) AS `count` FROM `signals` WHERE `server_id` = ? AND `cache` = 1 AND `custom_data` = ?;', self::c3520D240F17Dcb1(), json_encode(['type' => 'update_streams', 'id' => $dec36723d7be7c49]));

		if (!(self::$db->get_row()['count'] == 0)) {
			goto label42;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', self::C3520d240F17dCb1(), time(), json_encode(['type' => 'update_streams', 'id' => $dec36723d7be7c49]));

		label42:

		return true;
	}

	static public function cA81c8F24c099495($f7107e3a92443147, $ebb4852f69f0dca0 = false)
	{
		self::cCB5075C679E7314($f7107e3a92443147, $ebb4852f69f0dca0);
	}

	static public function deleteLines($ec80784a08a705f6, $ebb4852f69f0dca0 = false)
	{
		self::updateLines($ec80784a08a705f6);
	}

	static public function CCb5075c679E7314($f7107e3a92443147, $ebb4852f69f0dca0 = false)
	{
		if (self::$rCached) {
			goto label6;
		}

		return false;

		label6:

		self::$db->query('SELECT COUNT(*) AS `count` FROM `signals` WHERE `server_id` = ? AND `cache` = 1 AND `custom_data` = ?;', self::C3520D240F17DcB1(), json_encode(['type' => 'update_line', 'id' => $f7107e3a92443147]));

		if (!(self::$db->get_row()['count'] == 0)) {
			goto label43;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', self::C3520D240F17DcB1(), time(), json_encode(['type' => 'update_line', 'id' => $f7107e3a92443147]));

		label43:

		return true;
	}

	static public function updateLines($ec80784a08a705f6)
	{
		if (self::$rCached) {
			goto label5;
		}

		return false;

		label5:

		self::$db->query('SELECT COUNT(*) AS `count` FROM `signals` WHERE `server_id` = ? AND `cache` = 1 AND `custom_data` = ?;', self::c3520D240f17dCb1(), json_encode(['type' => 'update_lines', 'id' => $ec80784a08a705f6]));

		if (!(self::$db->get_row()['count'] == 0)) {
			goto label42;
		}

		self::$db->query('INSERT INTO `signals`(`server_id`, `cache`, `time`, `custom_data`) VALUES(?, 1, ?, ?);', self::C3520d240F17DcB1(), time(), json_encode(['type' => 'update_lines', 'id' => $ec80784a08a705f6]));

		label42:

		return true;
	}

	static public function C3520D240f17DCb1()
	{
		foreach (self::$rServers as $C082ca9ed03f473c => $Ec379295dc7029e6) {
			if (!$Ec379295dc7029e6['is_main']) {
				goto label11;
			}

			return $C082ca9ed03f473c;

			label11:
		}

		return NULL;
	}

	static public function A60d4C9F99F8330b($ee6d1fc5d801b43f, $bd196a721e1673c7)
	{
		$ddc1e5c94ac28e95 = $A480aa67ca5eba71 = [];

		if (!file_exists(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f))) {
			goto label29;
		}

		$A480aa67ca5eba71 = igbinary_unserialize(file_get_contents(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f)));

		label29:

		foreach ($A480aa67ca5eba71 as $C98e11437faf4199) {
			if (!self::E764f10E99C26365($C98e11437faf4199, 'php-fpm')) {
				goto label41;
			}

			$ddc1e5c94ac28e95[] = $C98e11437faf4199;

			label41:
		}

		if (in_array($ddc1e5c94ac28e95, $bd196a721e1673c7)) {
			goto label51;
		}

		$ddc1e5c94ac28e95[] = $bd196a721e1673c7;

		label51:

		file_put_contents(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f), igbinary_serialize($ddc1e5c94ac28e95));
	}

	static public function e1E756bD417E235B($ee6d1fc5d801b43f, $C98e11437faf4199)
	{
		$ddc1e5c94ac28e95 = [];

		foreach (igbinary_unserialize(file_get_contents(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f))) ?: [] as $f40a649807631c6f) {
			if (!(self::E764F10e99C26365($f40a649807631c6f, 'php-fpm') && ($C98e11437faf4199 != $f40a649807631c6f))) {
				goto label32;
			}

			$ddc1e5c94ac28e95[] = $f40a649807631c6f;

			label32:
		}

		if (0 < count($ddc1e5c94ac28e95)) {
			goto label50;
		}

		unlink(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f));
		goto label63;

		label50:

		file_put_contents(SIGNALS_TMP_PATH . 'queue_' . intval($ee6d1fc5d801b43f), igbinary_serialize($ddc1e5c94ac28e95));

		label63:
	}

	static public function B3DAcF6Ac7e9C796($C082ca9ed03f473c)
	{
		return array_rand(array_keys(self::getProxies($C082ca9ed03f473c, false))) ?: NULL;
	}

	static public function CF5d4a2F3DE8982c($b87030f28ff32396, $eca9936f0487fe83)
	{
		goto label3;

		label3:
		if (!(is_numeric($eca9936f0487fe83) && (1900 <= $eca9936f0487fe83) && ($eca9936f0487fe83 <= intval(date('Y') + 1)))) {
			goto label52;
		}

		if (self::$rSettings['movie_year_append'] == 0) {
			goto label44;
		}

		if (!(self::$rSettings['movie_year_append'] == 0)) {
			goto label40;
		}

		return trim($b87030f28ff32396) . (' - ' . $eca9936f0487fe83);

		label40:

		goto label43;

		label41:

		return $b87030f28ff32396;
		goto label53;

		label43:

		goto label52;

		label44:

		return trim($b87030f28ff32396) . (' (' . $eca9936f0487fe83 . ')');

		label52:

		goto label41;

		label53:
	}

	static public function ee26f6aDBd1E84e9($A5a4a57a12bb19b3)
	{
		goto label11;

		label2:

		if (!(0 < count($e40a84c2bb6de229))) {
			goto label10;
		}

		return $e40a84c2bb6de229;

		label10:

		goto label56;

		label11:
		if (!((0 < count($A5a4a57a12bb19b3)) && file_exists(CACHE_TMP_PATH . 'channel_order') && (self::$rSettings['channel_number_type'] != 'bouquet'))) {
			goto label10;
		}

		$a2a53f18f4f95c8b = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'channel_order'));
		$A5a4a57a12bb19b3 = array_flip($A5a4a57a12bb19b3);
		$e40a84c2bb6de229 = [];

		foreach ($a2a53f18f4f95c8b as $Abcb228699a7f743) {
			if (!isset($A5a4a57a12bb19b3[$Abcb228699a7f743])) {
				goto label53;
			}

			$e40a84c2bb6de229[] = $Abcb228699a7f743;

			label53:
		}

		goto label2;

		label56:

		return $A5a4a57a12bb19b3;
		goto label58;

		label58:
	}

	static public function sortSeries($d02ef9ae10a41939)
	{
		goto label2;

		label2:
		if (!((0 < count($d02ef9ae10a41939)) && file_exists(CACHE_TMP_PATH . 'series_order'))) {
			goto label52;
		}

		$a2a53f18f4f95c8b = igbinary_unserialize(file_get_contents(CACHE_TMP_PATH . 'series_order'));
		$d02ef9ae10a41939 = array_flip($d02ef9ae10a41939);
		$e40a84c2bb6de229 = [];

		foreach ($a2a53f18f4f95c8b as $Abcb228699a7f743) {
			if (!isset($d02ef9ae10a41939[$Abcb228699a7f743])) {
				goto label39;
			}

			$e40a84c2bb6de229[] = $Abcb228699a7f743;

			label39:
		}

		goto label44;

		label42:

		return $d02ef9ae10a41939;
		goto label53;

		label44:

		if (!(0 < count($e40a84c2bb6de229))) {
			goto label52;
		}

		return $e40a84c2bb6de229;

		label52:

		goto label42;

		label53:
	}

	static public function c59E849742699501($Bb672d1983256a93, $ba2d146bb5a55097)
	{
		file_put_contents(SIGNALS_TMP_PATH . 'cache_' . md5($Bb672d1983256a93), json_encode([$Bb672d1983256a93, $ba2d146bb5a55097]));
	}

	static public function d6AEB3175A43f301()
	{
		if (is_object(self::$redis)) {
			goto label28;
		}

		try {
			self::$redis = new Redis();
			self::$redis->connect(self::$rConfig['hostname'], 6379);
			self::$redis->auth(self::$rSettings['redis_password']);
		}
		catch (Exception $E0f0519e12b13b6b) {
			self::$redis = NULL;
			return false;
		}

		label28:

		return true;
	}

	static public function E0f521E9E3Bf0855($ba2d146bb5a55097, $B1d0cd7d7303c373 = [], $C37899efeb2f3cd8 = NULL)
	{
		goto label21;

		label4:

		$ba2d146bb5a55097['hls_end'] = 0;

		if (!$ba2d146bb5a55097['user_id']) {
			goto label20;
		}

		$ed6449291d7f1a64->zAdd('SERVER_LINES#' . $ba2d146bb5a55097['server_id'], $ba2d146bb5a55097['user_id'], $ba2d146bb5a55097['uuid']);

		label20:

		goto label150;

		label21:

		if (is_object(self::$redis)) {
			goto label29;
		}

		self::D6AEb3175A43F301();

		label29:

		$eb1324e124eb8d2c = $ba2d146bb5a55097;

		foreach ($B1d0cd7d7303c373 as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			$ba2d146bb5a55097[$Bb672d1983256a93] = $ce0840c647e1bbc7;
		}

		goto label38;

		label38:

		$ed6449291d7f1a64 = self::$redis->multi();

		if ($C37899efeb2f3cd8 == 'open') {
			goto label117;
		}

		if (!($C37899efeb2f3cd8 == 'close')) {
			goto label115;
		}

		$ed6449291d7f1a64->sAdd('ENDED', $ba2d146bb5a55097['uuid']);
		goto label165;

		label55:

		return $ba2d146bb5a55097;

		label56:

		goto label199;

		label57:

		$ed6449291d7f1a64->zRem('PROXY#' . $eb1324e124eb8d2c['proxy_id'], $ba2d146bb5a55097['uuid']);

		label65:

		if (!($ba2d146bb5a55097['hls_end'] == 0)) {
			goto label115;
		}

		$ba2d146bb5a55097['hls_end'] = 1;

		if (!$ba2d146bb5a55097['user_id']) {
			goto label115;
		}

		goto label107;

		label77:

		$ed6449291d7f1a64->zAdd('SERVER#' . $ba2d146bb5a55097['server_id'], $ba2d146bb5a55097['date_start'], $ba2d146bb5a55097['uuid']);

		if (!$ba2d146bb5a55097['proxy_id']) {
			goto label101;
		}

		$ed6449291d7f1a64->zAdd('PROXY#' . $ba2d146bb5a55097['proxy_id'], $ba2d146bb5a55097['date_start'], $ba2d146bb5a55097['uuid']);

		label101:

		if (!($ba2d146bb5a55097['hls_end'] == 1)) {
			goto label20;
		}

		goto label4;

		label107:

		$ed6449291d7f1a64->zRem('SERVER_LINES#' . $eb1324e124eb8d2c['server_id'], $ba2d146bb5a55097['uuid']);

		label115:

		goto label150;
		goto label117;

		label117:

		$ed6449291d7f1a64->sRem('ENDED', $ba2d146bb5a55097['uuid']);
		$ed6449291d7f1a64->zAdd('LIVE', $ba2d146bb5a55097['date_start'], $ba2d146bb5a55097['uuid']);
		$ed6449291d7f1a64->zAdd('LINE#' . $ba2d146bb5a55097['identity'], $ba2d146bb5a55097['date_start'], $ba2d146bb5a55097['uuid']);
		$ed6449291d7f1a64->zAdd('STREAM#' . $ba2d146bb5a55097['stream_id'], $ba2d146bb5a55097['date_start'], $ba2d146bb5a55097['uuid']);
		goto label77;

		label150:

		$ed6449291d7f1a64->set($ba2d146bb5a55097['uuid'], igbinary_serialize($ba2d146bb5a55097));

		if ($ed6449291d7f1a64->exec()) {
			goto label55;
		}

		return NULL;
		goto label56;
		goto label55;

		label165:

		$ed6449291d7f1a64->zRem('LIVE', $ba2d146bb5a55097['uuid']);
		$ed6449291d7f1a64->zRem('LINE#' . $eb1324e124eb8d2c['identity'], $ba2d146bb5a55097['uuid']);
		$ed6449291d7f1a64->zRem('STREAM#' . $eb1324e124eb8d2c['stream_id'], $ba2d146bb5a55097['uuid']);
		$ed6449291d7f1a64->zRem('SERVER#' . $eb1324e124eb8d2c['server_id'], $ba2d146bb5a55097['uuid']);

		if (!$ba2d146bb5a55097['proxy_id']) {
			goto label65;
		}

		goto label57;

		label199:
	}

	static public function A9451F831F72Aca3($C98e11437faf4199, $C082ca9ed03f473c, $E1d0d1559693ad85, $Fc7d7bc87567c1a5 = NULL)
	{
		if (is_object(self::$redis)) {
			goto label12;
		}

		self::d6Aeb3175A43f301();

		label12:

		$Bb672d1983256a93 = 'SIGNAL#' . md5($C082ca9ed03f473c . '#' . $C98e11437faf4199 . '#' . $E1d0d1559693ad85);
		$ba2d146bb5a55097 = ['pid' => $C98e11437faf4199, 'server_id' => $C082ca9ed03f473c, 'rtmp' => $E1d0d1559693ad85, 'time' => time(), 'custom_data' => $Fc7d7bc87567c1a5, 'key' => $Bb672d1983256a93];
		return self::$redis->multi()->sAdd('SIGNALS#' . $C082ca9ed03f473c, $Bb672d1983256a93)->set($Bb672d1983256a93, igbinary_serialize($ba2d146bb5a55097))->exec();
	}

	static public function A96Ab74f1921D4Ad($ec80784a08a705f6, $d353a4da8a0bb857 = false, $Bb2f487acd69cd7c = false)
	{
		goto label4;

		label4:

		if (is_object(self::$redis)) {
			goto label12;
		}

		self::d6aEB3175A43F301();

		label12:

		$ed6449291d7f1a64 = self::$redis->multi();

		foreach ($ec80784a08a705f6 as $f7107e3a92443147) {
			$ed6449291d7f1a64->zRevRangeByScore('LINE#' . $f7107e3a92443147, '+inf', '-inf');
		}

		goto label27;

		label27:

		$c65e1c212da2f6fc = $ed6449291d7f1a64->exec();
		$B692d6e1f0cf1f67 = $aeb4f6f6c59b99cc = [];

		foreach ($c65e1c212da2f6fc as $d81ce3a6e68c6760 => $ca8155fd3c07c1ee) {
			if ($d353a4da8a0bb857) {
				goto label53;
			}

			if (!(0 < count($ca8155fd3c07c1ee))) {
				goto label51;
			}

			$aeb4f6f6c59b99cc = array_merge($aeb4f6f6c59b99cc, $ca8155fd3c07c1ee);

			label51:

			goto label59;

			label53:

			$B692d6e1f0cf1f67[$ec80784a08a705f6[$d81ce3a6e68c6760]] = count($ca8155fd3c07c1ee);

			label59:
		}

		goto label62;

		label62:

		$aeb4f6f6c59b99cc = array_unique($aeb4f6f6c59b99cc);

		if (!$Bb2f487acd69cd7c) {
			goto label70;
		}

		return $aeb4f6f6c59b99cc;

		label70:

		if ($d353a4da8a0bb857) {
			goto label89;
		}

		goto label73;

		label73:

		foreach (self::$redis->mGet($aeb4f6f6c59b99cc) as $Fb9da1713bff19ce) {
			$Fb9da1713bff19ce = igbinary_unserialize($Fb9da1713bff19ce);
			$B692d6e1f0cf1f67[$Fb9da1713bff19ce['user_id']][] = $Fb9da1713bff19ce;
		}

		label89:

		return $B692d6e1f0cf1f67;
		goto label91;

		label91:
	}

	static public function getServerConnections($Bccd07953f314962, $A1f381c3d6825384 = false, $d353a4da8a0bb857 = false, $Bb2f487acd69cd7c = false)
	{
		goto label51;

		label5:

		$c65e1c212da2f6fc = $ed6449291d7f1a64->exec();
		$B692d6e1f0cf1f67 = $aeb4f6f6c59b99cc = [];

		foreach ($c65e1c212da2f6fc as $d81ce3a6e68c6760 => $ca8155fd3c07c1ee) {
			if ($d353a4da8a0bb857) {
				goto label31;
			}

			if (!(0 < count($ca8155fd3c07c1ee))) {
				goto label29;
			}

			$aeb4f6f6c59b99cc = array_merge($aeb4f6f6c59b99cc, $ca8155fd3c07c1ee);

			label29:

			goto label37;

			label31:

			$B692d6e1f0cf1f67[$Bccd07953f314962[$d81ce3a6e68c6760]] = count($ca8155fd3c07c1ee);

			label37:
		}

		goto label40;

		label40:

		$aeb4f6f6c59b99cc = array_unique($aeb4f6f6c59b99cc);

		if (!$Bb2f487acd69cd7c) {
			goto label48;
		}

		return $aeb4f6f6c59b99cc;

		label48:

		if ($d353a4da8a0bb857) {
			goto label95;
		}

		goto label79;

		label51:

		if (is_object(self::$redis)) {
			goto label59;
		}

		self::D6aeb3175A43F301();

		label59:

		$ed6449291d7f1a64 = self::$redis->multi();

		foreach ($Bccd07953f314962 as $C082ca9ed03f473c) {
			$ed6449291d7f1a64->zRevRangeByScore($A1f381c3d6825384 ? 'PROXY#' . $C082ca9ed03f473c : 'SERVER#' . $C082ca9ed03f473c, '+inf', '-inf');
		}

		goto label5;

		label79:

		foreach (self::$redis->mGet($aeb4f6f6c59b99cc) as $Fb9da1713bff19ce) {
			$Fb9da1713bff19ce = igbinary_unserialize($Fb9da1713bff19ce);
			$B692d6e1f0cf1f67[$Fb9da1713bff19ce['server_id']][] = $Fb9da1713bff19ce;
		}

		label95:

		return $B692d6e1f0cf1f67;
		goto label97;

		label97:
	}

	static public function getFirstConnection($ec80784a08a705f6)
	{
		goto label2;

		label2:

		if (is_object(self::$redis)) {
			goto label10;
		}

		self::D6aEB3175A43f301();

		label10:

		$ed6449291d7f1a64 = self::$redis->multi();

		foreach ($ec80784a08a705f6 as $f7107e3a92443147) {
			$ed6449291d7f1a64->zRevRangeByScore('LINE#' . $f7107e3a92443147, '+inf', '-inf', [
				'limit' => [0, 1]
			]);
		}

		goto label26;

		label26:

		$c65e1c212da2f6fc = $ed6449291d7f1a64->exec();
		$B692d6e1f0cf1f67 = $aeb4f6f6c59b99cc = [];

		foreach ($c65e1c212da2f6fc as $d81ce3a6e68c6760 => $ca8155fd3c07c1ee) {
			if (!(0 < count($ca8155fd3c07c1ee))) {
				goto label45;
			}

			$aeb4f6f6c59b99cc[] = $ca8155fd3c07c1ee[0];

			label45:
		}

		goto label48;

		label48:

		foreach (self::$redis->mGet(array_unique($aeb4f6f6c59b99cc)) as $Fb9da1713bff19ce) {
			$Fb9da1713bff19ce = igbinary_unserialize($Fb9da1713bff19ce);
			$B692d6e1f0cf1f67[$Fb9da1713bff19ce['user_id']] = $Fb9da1713bff19ce;
		}

		return $B692d6e1f0cf1f67;
		goto label68;

		label68:
	}

	static public function getStreamConnections($dec36723d7be7c49, $fb719dae9595b9fa = true, $d353a4da8a0bb857 = false)
	{
		goto label4;

		label4:

		if (is_object(self::$redis)) {
			goto label12;
		}

		self::D6AEB3175a43F301();

		label12:

		$ed6449291d7f1a64 = self::$redis->multi();

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			$ed6449291d7f1a64->zRevRangeByScore('STREAM#' . $ee6d1fc5d801b43f, '+inf', '-inf');
		}

		goto label27;

		label27:

		$c65e1c212da2f6fc = $ed6449291d7f1a64->exec();
		$B692d6e1f0cf1f67 = $aeb4f6f6c59b99cc = [];

		foreach ($c65e1c212da2f6fc as $d81ce3a6e68c6760 => $ca8155fd3c07c1ee) {
			if ($d353a4da8a0bb857) {
				goto label53;
			}

			if (!(0 < count($ca8155fd3c07c1ee))) {
				goto label51;
			}

			$aeb4f6f6c59b99cc = array_merge($aeb4f6f6c59b99cc, $ca8155fd3c07c1ee);

			label51:

			goto label59;

			label53:

			$B692d6e1f0cf1f67[$dec36723d7be7c49[$d81ce3a6e68c6760]] = count($ca8155fd3c07c1ee);

			label59:
		}

		goto label62;

		label62:

		if ($d353a4da8a0bb857) {
			goto label94;
		}

		foreach (self::$redis->mGet(array_unique($aeb4f6f6c59b99cc)) as $Fb9da1713bff19ce) {
			$Fb9da1713bff19ce = igbinary_unserialize($Fb9da1713bff19ce);

			if ($fb719dae9595b9fa) {
				goto label88;
			}

			$B692d6e1f0cf1f67[$Fb9da1713bff19ce['stream_id']][$Fb9da1713bff19ce['server_id']][] = $Fb9da1713bff19ce;
			goto label92;

			label88:

			$B692d6e1f0cf1f67[$Fb9da1713bff19ce['stream_id']][] = $Fb9da1713bff19ce;

			label92:
		}

		label94:

		return $B692d6e1f0cf1f67;
		goto label96;

		label96:
	}

	static public function D72c0f56211B6F7C($f7107e3a92443147 = NULL, $C082ca9ed03f473c = NULL, $ee6d1fc5d801b43f = NULL, $C07dfadb522c6a88 = false, $d513e7473350a509 = false, $fb719dae9595b9fa = true, $e7d87025fd109d23 = false)
	{
		goto label8;

		label8:

		$B9869413eae86beb = ($d513e7473350a509 ? [0, 0] : []);

		if (is_object(self::$redis)) {
			goto label21;
		}

		self::D6aeB3175a43F301();

		label21:

		$Ce217c411f2b4d0d = [];
		goto label42;

		label23:

		return $B9869413eae86beb;
		goto label227;

		label25:

		goto label34;

		label26:

		$ca8155fd3c07c1ee = self::$redis->zRangeByScore('LINE#' . $f7107e3a92443147, '-inf', '+inf');

		label34:

		if (!(0 < count($ca8155fd3c07c1ee))) {
			goto label186;
		}

		goto label83;

		label42:

		$f7107e3a92443147 = (0 < intval($f7107e3a92443147) ? intval($f7107e3a92443147) : NULL);
		$C082ca9ed03f473c = (0 < intval($C082ca9ed03f473c) ? intval($C082ca9ed03f473c) : NULL);
		$ee6d1fc5d801b43f = (0 < intval($ee6d1fc5d801b43f) ? intval($ee6d1fc5d801b43f) : NULL);

		if ($f7107e3a92443147) {
			goto label26;
		}

		if ($ee6d1fc5d801b43f) {
			goto label218;
		}

		goto label198;

		label83:

		foreach (self::$redis->mGet(array_unique($ca8155fd3c07c1ee)) as $Fb9da1713bff19ce) {
			goto label160;

			label94:

			$B9869413eae86beb[$c6407c71209d9290] = [];

			label96:

			$B9869413eae86beb[$c6407c71209d9290][] = $Fb9da1713bff19ce;

			label99:

			goto label145;
			goto label140;

			label103:
			if (!($e7d87025fd109d23 && ($Fb9da1713bff19ce['container'] == 'hls'))) {
				goto label113;
			}

			goto label145;

			label113:

			$c6407c71209d9290 = $Fb9da1713bff19ce['user_id'] ?: ($Fb9da1713bff19ce['hmac_id'] . '_' . $Fb9da1713bff19ce['hmac_identifier']);

			if ($d513e7473350a509) {
				goto label140;
			}

			goto label147;

			label126:

			goto label145;

			label128:
			if (!($f7107e3a92443147 && ($f7107e3a92443147 != $Fb9da1713bff19ce['user_id']))) {
				goto label138;
			}

			goto label145;

			label138:

			goto label103;

			label140:

			$B9869413eae86beb[0]++;
			$Ce217c411f2b4d0d[] = $c6407c71209d9290;

			label145:

			goto label184;

			label147:

			if ($fb719dae9595b9fa) {
				goto label154;
			}

			$B9869413eae86beb[] = $Fb9da1713bff19ce;
			goto label99;

			label154:

			if (isset($B9869413eae86beb[$c6407c71209d9290])) {
				goto label96;
			}

			goto label94;

			label160:

			$Fb9da1713bff19ce = igbinary_unserialize($Fb9da1713bff19ce);
			if (!($C082ca9ed03f473c && ($C082ca9ed03f473c != $Fb9da1713bff19ce['server_id']))) {
				goto label174;
			}

			goto label145;

			label174:
			if (!($ee6d1fc5d801b43f && ($ee6d1fc5d801b43f != $Fb9da1713bff19ce['stream_id']))) {
				goto label128;
			}

			goto label126;

			label184:
		}

		label186:

		if (!$d513e7473350a509) {
			goto label23;
		}

		$B9869413eae86beb[1] = count(array_unique($Ce217c411f2b4d0d));
		goto label23;

		label198:

		if ($C082ca9ed03f473c) {
			goto label208;
		}

		$ca8155fd3c07c1ee = self::$redis->zRangeByScore('LIVE', '-inf', '+inf');
		goto label217;

		label208:

		$ca8155fd3c07c1ee = self::$redis->zRangeByScore('SERVER#' . $C082ca9ed03f473c, '-inf', '+inf');
		goto label217;

		label217:

		goto label226;

		label218:

		$ca8155fd3c07c1ee = self::$redis->zRangeByScore('STREAM#' . $ee6d1fc5d801b43f, '-inf', '+inf');

		label226:

		goto label25;

		label227:
	}

	static public function C65C7F64E35c199F($e3901a370c2ce233 = false)
	{
		goto label2;

		label2:

		$Befea2b2ae7dbf72 = NULL;
		$C082ca9ed03f473c = SERVER_ID;

		if ($e3901a370c2ce233) {
			goto label119;
		}
		if (isset($_SERVER['SERVER_PORT']) && self::$rSettings['keep_protocol']) {
			goto label99;
		}

		$Bf9be24c69c0f17b = self::$rServers[$C082ca9ed03f473c]['server_protocol'];
		goto label98;

		label20:

		goto label28;

		label21:

		$f547aeca99c55c3e = escapeshellcmd(self::$rServers[$C082ca9ed03f473c]['server_ip']);

		label28:

		goto label42;
		goto label42;

		label30:

		$B447bd0870faed42 .= md5($C082ca9ed03f473c . '_' . $Befea2b2ae7dbf72 . '_' . OPENSSL_EXTRA) . '/';

		label40:

		return $B447bd0870faed42;
		goto label193;

		label42:

		$B447bd0870faed42 = $Bf9be24c69c0f17b . '://' . $f547aeca99c55c3e . ':' . self::$rServers[$C082ca9ed03f473c][$Bf9be24c69c0f17b . '_broadcast_port'] . '/';
		if (!((self::$rServers[$C082ca9ed03f473c]['server_type'] == 1) && $Befea2b2ae7dbf72 && (self::$rServers[$Befea2b2ae7dbf72]['is_main'] == 0))) {
			goto label40;
		}

		goto label30;

		label68:

		$d41f77c23bf44d28 = array_keys(self::getProxies($C082ca9ed03f473c));

		if (!(count($d41f77c23bf44d28) == 0)) {
			goto label90;
		}

		$d41f77c23bf44d28 = array_keys(self::getProxies($C082ca9ed03f473c, false));

		label90:

		if (!(count($d41f77c23bf44d28) == 0)) {
			goto label129;
		}

		goto label128;

		label98:

		goto label117;

		label99:
		$Bf9be24c69c0f17b = ((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off')) || ($_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http');

		label117:

		goto label120;
		goto label119;

		label119:

		$Bf9be24c69c0f17b = 'https';

		label120:

		$ca38e0193add4f93 = self::$rServers[$C082ca9ed03f473c]['enable_proxy'];

		if (!$ca38e0193add4f93) {
			goto label135;
		}

		goto label68;

		label128:

		return '';

		label129:

		$Befea2b2ae7dbf72 = $C082ca9ed03f473c;
		$C082ca9ed03f473c = $d41f77c23bf44d28[array_rand($d41f77c23bf44d28)];

		label135:

		goto label136;

		label136:

		list($f547aeca99c55c3e, $B996c0b3ac571ac4) = explode(':', $_SERVER['HTTP_HOST']);
		if (!($ca38e0193add4f93 || (self::$rSettings['use_mdomain_in_lists'] == 1))) {
			goto label42;
		}

		if (in_array(strtolower($f547aeca99c55c3e), self::e74a9A4510c4fFe4('reseller_domains') ?: [])) {
			goto label42;
		}

		if (empty(self::$rServers[$C082ca9ed03f473c]['domain_name'])) {
			goto label21;
		}

		$f547aeca99c55c3e = str_replace(['http://', '/', 'https://'], '', escapeshellcmd(explode(',', self::$rServers[$C082ca9ed03f473c]['domain_name'])[0]));
		goto label20;

		label193:
	}

	static public function d00C33C8075d14a5($ba2d146bb5a55097)
	{
		goto label2;

		label2:

		if (is_array($ba2d146bb5a55097)) {
			goto label12;
		}

		$ba2d146bb5a55097 = json_decode($ba2d146bb5a55097, true);

		label12:

		$B247e2c3d7cb24f2 = ['aac', 'libfdk_aac', 'opus', 'vorbis', 'pcm_s16le', 'mp2', 'mp3', 'flac', NULL];
		$e2631b4e50927afe = ['h264', 'vp8', 'vp9', 'ogg', 'av1', NULL];
		goto label15;

		label15:

		if (!self::$rSettings['player_allow_hevc']) {
			goto label26;
		}

		$e2631b4e50927afe[] = 'hevc';
		$e2631b4e50927afe[] = 'h265';
		$B247e2c3d7cb24f2[] = 'ac3';

		label26:

		goto label27;

		label27:
		return ($ba2d146bb5a55097['codecs']['audio']['codec_name'] || $ba2d146bb5a55097['codecs']['video']['codec_name']) && in_array(strtolower($ba2d146bb5a55097['codecs']['audio']['codec_name']), $B247e2c3d7cb24f2) && in_array(strtolower($ba2d146bb5a55097['codecs']['video']['codec_name']), $e2631b4e50927afe);
		goto label61;

		label61:
	}

	static public function B954bD7c2bEC3C82($f8eff582a589238e, $a01d93244ad473e6)
	{
		$A4a83c33b43d63e2 = NULL;

		foreach ($f8eff582a589238e as $bfaffd59f038b138) {
			if (!(($A4a83c33b43d63e2 === NULL) || (abs($bfaffd59f038b138 - $a01d93244ad473e6) < abs($a01d93244ad473e6 - $A4a83c33b43d63e2)))) {
				goto label22;
			}

			$A4a83c33b43d63e2 = $bfaffd59f038b138;

			label22:
		}

		return $A4a83c33b43d63e2;
	}

	static public function submitPanelLogs()
	{
		goto label27;

		label1:

		self::$db->query('TRUNCATE `panel_logs`;');
		$ab701fbbd66214d9 = curl_init();
		curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $Aa1ed9476fca75e9);
		curl_setopt($ab701fbbd66214d9, CURLOPT_POST, true);
		curl_setopt($ab701fbbd66214d9, CURLOPT_POSTFIELDS, $c34589bb44ab4b2a);
		goto label53;

		label27:

		ini_set('default_socket_timeout', 60);
		self::$db->query('SELECT `type`, `log_message`, `log_extra`, `line`, `date` FROM `panel_logs` WHERE `type` <> \'epg\' GROUP BY CONCAT(`type`, `log_message`, `log_extra`) ORDER BY `date` DESC LIMIT 1000;');
		$Aa1ed9476fca75e9 = 'https://xui.one/report.php';
		$ba2d146bb5a55097 = ['errors' => self::$db->get_rows(), 'license' => self::$rConfig['license'], 'version' => XUI_VERSION, 'revision' => XUI_REVISION];
		$c34589bb44ab4b2a = http_build_query($ba2d146bb5a55097);
		goto label1;

		label53:

		curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ab701fbbd66214d9, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($ab701fbbd66214d9, CURLOPT_TIMEOUT, 60);
		return curl_exec($ab701fbbd66214d9);
		goto label76;

		label76:
	}

	static public function confirmIDs($Fe53bcd53690fff4)
	{
		$B9869413eae86beb = [];

		foreach ($Fe53bcd53690fff4 as $Abcb228699a7f743) {
			if (!(0 < intval($Abcb228699a7f743))) {
				goto label14;
			}

			$B9869413eae86beb[] = $Abcb228699a7f743;

			label14:
		}

		return $B9869413eae86beb;
	}

	static public function getTSInfo($F48d5724f3b4ec96)
	{
		return json_decode(shell_exec(BIN_PATH . 'tsinfo ' . escapeshellarg($F48d5724f3b4ec96)), true);
	}

	static public function getEPG($ee6d1fc5d801b43f, $cef812722e0345be = NULL, $Cb3142d0e6e76fd5 = NULL, $f3eb6357ae26430b = false)
	{
		$B9869413eae86beb = [];
		$ba2d146bb5a55097 = (file_exists(EPG_PATH . 'stream_' . $ee6d1fc5d801b43f) ? igbinary_unserialize(file_get_contents(EPG_PATH . 'stream_' . $ee6d1fc5d801b43f)) : []);

		foreach ($ba2d146bb5a55097 as $B4a603c2a57d3acf) {
			if (!(!$cef812722e0345be || (($cef812722e0345be < $B4a603c2a57d3acf['end']) && ($B4a603c2a57d3acf['start'] < $Cb3142d0e6e76fd5)))) {
				goto label50;
			}

			if ($f3eb6357ae26430b) {
				goto label47;
			}

			$B9869413eae86beb[] = $B4a603c2a57d3acf;
			goto label50;

			label47:

			$B9869413eae86beb[$B4a603c2a57d3acf['id']] = $B4a603c2a57d3acf;

			label50:
		}

		return $B9869413eae86beb;
	}

	static public function e2caB4ACe32264bb($dec36723d7be7c49, $cef812722e0345be = NULL, $Cb3142d0e6e76fd5 = NULL)
	{
		$B9869413eae86beb = [];

		foreach ($dec36723d7be7c49 as $ee6d1fc5d801b43f) {
			$B9869413eae86beb[$ee6d1fc5d801b43f] = self::getEPG($ee6d1fc5d801b43f, $cef812722e0345be, $Cb3142d0e6e76fd5);
		}

		return $B9869413eae86beb;
	}

	static public function getProgramme($ee6d1fc5d801b43f, $D19acd40a74b38f0)
	{
		$ba2d146bb5a55097 = self::getEPG($ee6d1fc5d801b43f, NULL, NULL, true);

		if (!isset($ba2d146bb5a55097[$D19acd40a74b38f0])) {
			goto label15;
		}

		return $ba2d146bb5a55097[$D19acd40a74b38f0];

		label15:

		return NULL;
	}

	static public function getNetwork($B6de2c76015b2174 = NULL)
	{
		$B9869413eae86beb = [];

		if (!file_exists(LOGS_TMP_PATH . 'network')) {
			goto label77;
		}

		$Cca419e136ea7788 = json_decode(file_get_contents(LOGS_TMP_PATH . 'network'), true);

		foreach ($Cca419e136ea7788 as $F5ba2106d5227309) {
			if (!($B6de2c76015b2174 && ($F5ba2106d5227309[0] != $B6de2c76015b2174))) {
				goto label32;
			}

			goto label75;

			label32:
			if (!(($F5ba2106d5227309[0] == 'lo') || (!$B6de2c76015b2174 && (substr($F5ba2106d5227309[0], 0, 4) == 'bond')))) {
				goto label52;
			}

			goto label75;

			label52:

			$B9869413eae86beb[$F5ba2106d5227309[0]] = ['in_bytes' => intval($F5ba2106d5227309[1] / 2), 'in_packets' => $F5ba2106d5227309[2], 'in_errors' => $F5ba2106d5227309[3], 'out_bytes' => intval($F5ba2106d5227309[4] / 2), 'out_packets' => $F5ba2106d5227309[5], 'out_errors' => $F5ba2106d5227309[6]];

			label75:
		}

		label77:

		return $B9869413eae86beb;
	}

	static public function getProxies($C082ca9ed03f473c, $F0b2d14f22704d6a = true)
	{
		$B9869413eae86beb = [];

		foreach (self::$rServers as $Bdf1a4d575de41e8 => $dbaf3cd4fbd0f046) {
			if (!(($dbaf3cd4fbd0f046['server_type'] == 1) && (in_array($C082ca9ed03f473c, $dbaf3cd4fbd0f046['parent_id']) && ($dbaf3cd4fbd0f046['server_online'] || !$F0b2d14f22704d6a)))) {
				goto label28;
			}

			$B9869413eae86beb[$Bdf1a4d575de41e8] = $dbaf3cd4fbd0f046;

			label28:
		}

		return $B9869413eae86beb;
	}
}

?>