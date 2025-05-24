<?php


class Database
{
	public $result;
	public $dbh;
	public $connected = false;

	public function __construct()
	{
		$this->dbh = false;
	}

	public function close_mysql()
	{
		if (!$this->connected) {
			goto label8;
		}

		$this->connected = false;
		$this->dbh = NULL;

		label8:

		return true;
	}

	public function __destruct()
	{
		$this->close_mysql();
	}

	public function ping()
	{
		try {
			$this->dbh->query('SELECT 1');
		}
		catch (Exception $E0f0519e12b13b6b) {
			return false;
		}

		return true;
	}

	public function db_connect()
	{
		try {
			$this->dbh = Xui\Functions::connect('TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0');

			if ($this->dbh) {
				goto label12;
			}

			exit(json_encode(['error' => 'MySQL: Cannot connect to database! Please check credentials.']));
		}
		catch (PDOException $E0f0519e12b13b6b) {
			exit(json_encode(['error' => 'MySQL: ' . $E0f0519e12b13b6b->getMessage()]));
		}

		$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connected = true;
		$this->dbh->exec('SET NAMES utf8;');
		return true;
	}

	public function db_explicit_connect($C9febb240944fd1e, $e5bebfb39a19fe80, $D16061affd463058, $ff5cf44f96903d64, $fd093b5358e9a519)
	{
		try {
			$this->dbh = new PDO('mysql:host=' . $C9febb240944fd1e . ';port=' . $e5bebfb39a19fe80 . ';dbname=' . $D16061affd463058, $ff5cf44f96903d64, $fd093b5358e9a519);

			if ($this->dbh) {
				goto label21;
			}

			return false;
		}
		catch (PDOException $E0f0519e12b13b6b) {
			return false;
		}

		$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connected = true;
		$this->dbh->exec('SET NAMES utf8;');
		return true;
	}

	public function query($F3b2dd849fb4e793, $Efef92ddb7197c4b = false)
	{
		goto label8;

		label3:

		$B154d50995d45e25[] = NULL;

		label5:

		$df6991d59f367c7e++;
		goto label43;

		label8:

		if (!$this->dbh) {
			goto label70;
		}

		$B564ac2c2a0450bc = func_num_args();
		$ba43a273a5037ea2 = func_get_args();
		$B154d50995d45e25 = [];
		$df6991d59f367c7e = 1;
		goto label21;

		label21:

		if (!($df6991d59f367c7e < $B564ac2c2a0450bc)) {
			goto label44;
		}
		if (is_null($ba43a273a5037ea2[$df6991d59f367c7e]) || (strtolower($ba43a273a5037ea2[$df6991d59f367c7e]) == 'null')) {
			goto label3;
		}

		$B154d50995d45e25[] = $ba43a273a5037ea2[$df6991d59f367c7e];
		goto label5;
		goto label3;

		label43:

		goto label21;

		label44:

		if (!($Efef92ddb7197c4b === true)) {
			goto label54;
		}

		$this->dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);

		label54:

		goto label55;

		label55:

		try {
			$this->result = $this->dbh->prepare($F3b2dd849fb4e793);
			$this->result->execute($B154d50995d45e25);
		}
		catch (Exception $E0f0519e12b13b6b) {
			return false;
		}

		return true;

		label70:

		return false;
		goto label72;

		label72:
	}

	public function simple_query($F3b2dd849fb4e793)
	{
		try {
			$this->result = $this->dbh->query($F3b2dd849fb4e793);
		}
		catch (Exception $E0f0519e12b13b6b) {
			return false;
		}

		return true;
	}

	public function get_rows($E3b64e7de3fe7c53 = false, $D69f689c889eabec = '', $e01b7743d0e35da0 = true, $a038ec44c8b8bb32 = '')
	{
		if (!($this->dbh && $this->result)) {
			goto label93;
		}

		$e37bff7ee7fa7bd1 = [];

		if (!(0 < $this->result->rowCount())) {
			goto label90;
		}

		foreach ($this->result->fetchAll(PDO::FETCH_ASSOC) as $ead02b90b6e16dae) {
			goto label47;

			label28:
			if (!empty($a038ec44c8b8bb32) && array_key_exists($a038ec44c8b8bb32, $ead02b90b6e16dae)) {
				goto label45;
			}

			$e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]][] = $ead02b90b6e16dae;
			goto label72;

			label45:

			goto label67;

			label47:
			if ($E3b64e7de3fe7c53 && array_key_exists($D69f689c889eabec, $ead02b90b6e16dae)) {
				goto label60;
			}

			$e37bff7ee7fa7bd1[] = $ead02b90b6e16dae;
			goto label72;

			label60:

			if (isset($e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]])) {
				goto label77;
			}

			goto label74;

			label67:

			$e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]][$ead02b90b6e16dae[$a038ec44c8b8bb32]] = $ead02b90b6e16dae;

			label72:

			goto label88;

			label74:

			$e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]] = [];

			label77:

			if (!$e01b7743d0e35da0) {
				goto label28;
			}

			$e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]] = $ead02b90b6e16dae;
			goto label72;
			goto label28;

			label88:
		}

		label90:

		$this->result = NULL;
		return $e37bff7ee7fa7bd1;

		label93:

		return false;
	}

	public function get_row()
	{
		if (!($this->dbh && $this->result)) {
			goto label24;
		}

		$ead02b90b6e16dae = [];

		if (!(0 < $this->result->rowCount())) {
			goto label21;
		}

		$ead02b90b6e16dae = $this->result->fetch(PDO::FETCH_ASSOC);

		label21:

		$this->result = NULL;
		return $ead02b90b6e16dae;

		label24:

		return false;
	}

	public function get_col()
	{
		if (!($this->dbh && $this->result)) {
			goto label24;
		}

		$ead02b90b6e16dae = false;

		if (!(0 < $this->result->rowCount())) {
			goto label21;
		}

		$ead02b90b6e16dae = $this->result->fetch();
		$ead02b90b6e16dae = $ead02b90b6e16dae[0];

		label21:

		$this->result = NULL;
		return $ead02b90b6e16dae;

		label24:

		return false;
	}

	public function escape($fcebf3d4e9466db0)
	{
		return $this->dbh->quote($fcebf3d4e9466db0);
	}

	public function num_fields()
	{
		$fd7ac75a03430f67 = $this->result->columnCount();
		return empty($fd7ac75a03430f67) ? 0 : $fd7ac75a03430f67;
	}

	public function last_insert_id()
	{
		$E857c1f443186a9d = $this->dbh->lastInsertId();
		return empty($E857c1f443186a9d) ? 0 : $E857c1f443186a9d;
	}

	public function num_rows()
	{
		$c8e9fd6e9d106fa3 = $this->result->rowCount();
		return empty($c8e9fd6e9d106fa3) ? 0 : $c8e9fd6e9d106fa3;
	}
}

class XUI
{
	static public $db;
	static public $rRequest = [];
	static public $rSettings = [];
	static public $rServers = [];
	static public $rBlockedISP = [];
	static public $rBouquets = [];
	static public $rCategories = [];
	static public $rAllowedIPs = [];
	static public $rCached;

	static public function init()
	{
		goto label1;

		label1:

		if (empty($_GET)) {
			goto label8;
		}

		self::bEe6dCc538970DD6($_GET);

		label8:

		if (empty($_POST)) {
			goto label16;
		}

		self::BEe6Dcc538970dD6($_POST);
		goto label16;

		label16:

		if (empty($_SESSION)) {
			goto label23;
		}

		self::bee6DCc538970Dd6($_SESSION);

		label23:

		if (empty($_COOKIE)) {
			goto label81;
		}

		goto label77;

		label27:

		goto label104;

		label28:

		self::$rSettings = self::ac49B56DBe10e52C();
		self::$rBlockedISP = self::D0826dAD642A6222();
		self::$rBouquets = self::de27BB48f7bff12d();
		self::$rCategories = self::c721Bd954a5f072f();
		self::$rAllowedIPs = self::de052f142a92e9bF();
		goto label63;

		label49:

		if (empty(self::$rSettings['default_timezone'])) {
			goto label58;
		}

		date_default_timezone_set(self::$rSettings['default_timezone']);

		label58:

		self::$rServers = self::f76008f8dFE1898c();
		goto label27;

		label63:

		if (PLATFORM == 'xui') {
			goto label70;
		}

		self::$rCached = false;
		goto label49;

		label70:

		self::$rCached = self::$rSettings['enable_cache'] ?: false;
		goto label49;

		label77:

		self::BEE6dCC538970dD6($_COOKIE);

		label81:

		$Eace76317d47fe26 = @self::E24B3d34d46068EB($_GET, []);
		self::$rRequest = @self::E24b3d34D46068EB($_POST, $Eace76317d47fe26);

		if (!self::$db->connected) {
			goto label27;
		}

		goto label28;

		label104:
	}

	static public function serialize($ba2d146bb5a55097)
	{
		if (function_exists('igbinary_serialize') || (PLATFORM == 'xui')) {
			goto label15;
		}

		return serialize($ba2d146bb5a55097);
		goto label19;

		label15:

		return igbinary_serialize($ba2d146bb5a55097);

		label19:
	}

	static public function unserialize($ba2d146bb5a55097)
	{
		if (function_exists('igbinary_unserialize') || (PLATFORM == 'xui')) {
			goto label15;
		}

		return unserialize($ba2d146bb5a55097);
		goto label19;

		label15:

		return igbinary_unserialize($ba2d146bb5a55097);

		label19:
	}

	static public function f7A8933150230EaB($A66eee85d9566710, $ba2d146bb5a55097)
	{
		$ba2d146bb5a55097 = self::serialize($ba2d146bb5a55097);
		file_put_contents(TMP_PATH . $A66eee85d9566710, $ba2d146bb5a55097, LOCK_EX);
	}

	static public function E74a9A4510C4FFE4($A66eee85d9566710, $d03052828cab569a)
	{
		if (!file_exists(TMP_PATH . $A66eee85d9566710)) {
			goto label32;
		}

		if (!((time() - filemtime(TMP_PATH . $A66eee85d9566710)) < $d03052828cab569a)) {
			goto label32;
		}

		$ba2d146bb5a55097 = file_get_contents(TMP_PATH . $A66eee85d9566710);
		return self::unserialize($ba2d146bb5a55097);

		label32:

		return false;
	}

	static public function DE27bb48f7bff12D()
	{
		goto label206;

		label1:

		self::$db->query('SELECT *, IF(`bouquet_order` > 0, `bouquet_order`, 999) AS `order` FROM `bouquets` ORDER BY `order` ASC;');

		foreach (self::$db->get_rows(true, 'id') as $Abcb228699a7f743 => $A5a4a57a12bb19b3) {
			goto label76;

			label15:

			$d094d3e133ec8c03[$Abcb228699a7f743]['channels'] = json_decode($A5a4a57a12bb19b3['bouquet_channels'], true);
			$d094d3e133ec8c03[$Abcb228699a7f743]['movies'] = json_decode($A5a4a57a12bb19b3['bouquet_movies'], true);
			$d094d3e133ec8c03[$Abcb228699a7f743]['radios'] = json_decode($A5a4a57a12bb19b3['bouquet_radios'], true);

			label39:

			goto label141;

			label41:

			goto label39;

			label43:

			$d094d3e133ec8c03[$Abcb228699a7f743]['streams'] = array_merge(json_decode($A5a4a57a12bb19b3['bouquet_channels'], true), json_decode($A5a4a57a12bb19b3['bouquet_movies'], true), json_decode($A5a4a57a12bb19b3['bouquet_radios'], true));
			$d094d3e133ec8c03[$Abcb228699a7f743]['series'] = json_decode($A5a4a57a12bb19b3['bouquet_series'], true);
			goto label15;

			label76:

			$d094d3e133ec8c03[$Abcb228699a7f743]['id'] = $Abcb228699a7f743;
			$d094d3e133ec8c03[$Abcb228699a7f743]['bouquet_name'] = $A5a4a57a12bb19b3['bouquet_name'];
			$d094d3e133ec8c03[$Abcb228699a7f743]['order'] = $A5a4a57a12bb19b3['order'];

			if (PLATFORM == 'xui') {
				goto label43;
			}

			$d094d3e133ec8c03[$Abcb228699a7f743]['streams'] = json_decode($A5a4a57a12bb19b3['bouquet_channels'], true);
			goto label102;

			label102:

			$d094d3e133ec8c03[$Abcb228699a7f743]['series'] = json_decode($A5a4a57a12bb19b3['bouquet_series'], true);
			$d094d3e133ec8c03[$Abcb228699a7f743]['channels'] = [];
			$d094d3e133ec8c03[$Abcb228699a7f743]['movies'] = [];
			$d094d3e133ec8c03[$Abcb228699a7f743]['radios'] = [];

			foreach ($d094d3e133ec8c03[$Abcb228699a7f743]['streams'] as $ee6d1fc5d801b43f) {
				$A7d54b094ae83c95 = $b42f717d234fde64[intval($ee6d1fc5d801b43f)] ?: 'channels';
				$d094d3e133ec8c03[$Abcb228699a7f743][$A7d54b094ae83c95][] = intval($ee6d1fc5d801b43f);
			}

			goto label41;

			label141:
		}

		self::f7a8933150230Eab('bouquets', $d094d3e133ec8c03);
		goto label148;

		label148:

		return $d094d3e133ec8c03;
		goto label217;

		label150:

		if (!(PLATFORM != 'xui')) {
			goto label1;
		}

		$b42f717d234fde64 = [];
		self::$db->query('SELECT `id`, `type` FROM streams WHERE `type` IN (1,2,3,4);');

		foreach (self::$db->get_rows() as $fe93a43f53d92a4e) {
			switch ($fe93a43f53d92a4e['type']) {
			case '1':
			case '3':
				$b42f717d234fde64[intval($fe93a43f53d92a4e['id'])] = 'channels';
				goto label203;
			case '2':
				$b42f717d234fde64[intval($fe93a43f53d92a4e['id'])] = 'movies';
				goto label203;
			case '4':
				$b42f717d234fde64[intval($fe93a43f53d92a4e['id'])] = 'radios';
				goto label203;
			default:
			}

			label203:
		}

		goto label1;

		label206:

		$A66eee85d9566710 = self::E74a9a4510C4fFE4('bouquets', 60);

		if (empty($A66eee85d9566710)) {
			goto label215;
		}

		return $A66eee85d9566710;

		label215:

		$d094d3e133ec8c03 = [];
		goto label150;

		label217:
	}

	static public function cb6eE16e86f09e61($Abcb228699a7f743)
	{
		goto label2;

		label2:

		if (PLATFORM == 'xui') {
			goto label12;
		}

		self::$db->query('SELECT * FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` WHERE `streams`.`id` = ?;', $Abcb228699a7f743);
		goto label18;

		label12:

		self::$db->query('SELECT * FROM `streams` WHERE `id` = ?;', $Abcb228699a7f743);
		goto label18;

		label18:

		if (!(self::$db->num_rows() == 1)) {
			goto label42;
		}

		$Fb9da1713bff19ce = self::$db->get_row();
		if (!((PLATFORM != 'xui') && $Fb9da1713bff19ce['title'])) {
			goto label41;
		}

		$Fb9da1713bff19ce['stream_display_name'] = $Fb9da1713bff19ce['title'];
		goto label41;

		label41:

		return $Fb9da1713bff19ce;

		label42:

		return NULL;
		goto label44;

		label44:
	}

	static public function c721Bd954A5f072f($A7d54b094ae83c95 = NULL)
	{
		goto label27;

		label2:

		if (PLATFORM == 'xui') {
			goto label12;
		}

		self::$db->query('SELECT t1.* FROM `stream_categories` t1 WHERE t1.category_type = ? GROUP BY t1.id ORDER BY t1.cat_order ASC', $A7d54b094ae83c95);
		goto label68;

		label12:

		goto label63;

		label13:

		if (PLATFORM == 'xui') {
			goto label22;
		}

		self::$db->query('SELECT t1.* FROM `stream_categories` t1 ORDER BY t1.cat_order ASC');
		goto label42;

		label22:

		self::$db->query('SELECT t1.* FROM `streams_categories` t1 ORDER BY t1.cat_order ASC');
		goto label42;

		label27:

		if (is_string($A7d54b094ae83c95)) {
			goto label2;
		}

		$A66eee85d9566710 = self::E74A9A4510c4FfE4('categories', 20);

		if (empty($A66eee85d9566710)) {
			goto label41;
		}

		return $A66eee85d9566710;

		label41:

		goto label13;

		label42:

		$F771d40e8cf51e59 = (0 < self::$db->num_rows() ? self::$db->get_rows(true, 'id') : []);
		self::f7A8933150230EAB('categories', $F771d40e8cf51e59);
		return $F771d40e8cf51e59;
		goto label82;
		goto label2;

		label63:

		self::$db->query('SELECT t1.* FROM `streams_categories` t1 WHERE t1.category_type = ? GROUP BY t1.id ORDER BY t1.cat_order ASC', $A7d54b094ae83c95);

		label68:

		return 0 < self::$db->num_rows() ? self::$db->get_rows(true, 'id') : [];

		label82:

		goto label83;

		label83:
	}

	static public function DE052f142a92e9bf()
	{
		if (empty(self::$rAllowedIPs)) {
			goto label5;
		}

		return self::$rAllowedIPs;

		label5:

		$A949e99ff8aff0fa = ['127.0.0.1', $_SERVER['SERVER_ADDR']];

		foreach (self::$rServers as $C082ca9ed03f473c => $dbaf3cd4fbd0f046) {
			if (empty($dbaf3cd4fbd0f046['whitelist_ips'])) {
				goto label28;
			}

			$A949e99ff8aff0fa = array_merge($A949e99ff8aff0fa, json_decode($dbaf3cd4fbd0f046['whitelist_ips'], true));

			label28:

			$A949e99ff8aff0fa[] = $dbaf3cd4fbd0f046['server_ip'];

			if (!$dbaf3cd4fbd0f046['private_ip']) {
				goto label39;
			}

			$A949e99ff8aff0fa[] = $dbaf3cd4fbd0f046['private_ip'];

			label39:
		}

		if (empty(self::$rSettings['allowed_ips_admin'])) {
			goto label56;
		}

		$A949e99ff8aff0fa = array_merge($A949e99ff8aff0fa, explode(',', self::$rSettings['allowed_ips_admin']));

		label56:

		return array_unique($A949e99ff8aff0fa);
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

			$B3fcb793038606a0 = array_merge($B3fcb793038606a0, self::C7b767C317F00408($ce0840c647e1bbc7));

			label36:

			goto label40;

			label38:

			$B3fcb793038606a0[] = $ce0840c647e1bbc7;

			label40:
		}

		return $B3fcb793038606a0;
	}

	static public function D0826dad642A6222()
	{
		goto label1;

		label1:

		$A66eee85d9566710 = self::e74a9a4510C4FFE4('blocked_isp', 20);

		if (!($A66eee85d9566710 !== false)) {
			goto label11;
		}

		return $A66eee85d9566710;

		label11:

		if (PLATFORM == 'xui') {
			goto label31;
		}

		goto label26;

		label16:

		$d094d3e133ec8c03 = self::$db->get_rows();
		self::F7a8933150230eAb('blocked_isp', $d094d3e133ec8c03);
		return $d094d3e133ec8c03;
		goto label36;

		label26:

		self::$db->query('SELECT id, isp, blocked FROM `isp_addon`');
		goto label35;

		label31:

		self::$db->query('SELECT id, isp, blocked FROM `blocked_isps`');

		label35:

		goto label16;

		label36:
	}

	static public function f76008f8dfE1898c()
	{
		goto label218;

		label1:

		$_SERVER['REQUEST_SCHEME'] = 'http';

		label4:

		if (PLATFORM == 'xui') {
			goto label212;
		}

		self::$db->query('SELECT * FROM `streaming_servers`');
		$ef08a17118b68045 = json_decode(self::$rSettings['use_https'], true) ?: [];
		goto label211;

		label22:

		$bb09da03c2515c8c = [1];

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			goto label174;

			label30:

			$Bcf70cba56392975[intval($Fb9da1713bff19ce['id'])] = $Fb9da1713bff19ce;
			goto label203;

			label38:

			if (PLATFORM == 'xui') {
				goto label164;
			}

			if (in_array($Fb9da1713bff19ce['id'], $ef08a17118b68045)) {
				goto label104;
			}

			$Bf9be24c69c0f17b = 'http';
			goto label105;
			goto label104;

			label56:

			$Fb9da1713bff19ce['request_port'] = $e5bebfb39a19fe80;
			$Fb9da1713bff19ce['site_url'] = $Bf9be24c69c0f17b . '://' . $A7ca171405b19571 . ':' . $e5bebfb39a19fe80 . '/';
			$Fb9da1713bff19ce['http_url'] = 'http://' . $A7ca171405b19571 . ':' . intval($Fb9da1713bff19ce['http_broadcast_port']) . '/';
			$Fb9da1713bff19ce['https_url'] = 'https://' . $A7ca171405b19571 . ':' . intval($Fb9da1713bff19ce['https_broadcast_port']) . '/';
			$Fb9da1713bff19ce['domains'] = ['protocol' => $Bf9be24c69c0f17b, 'port' => $e5bebfb39a19fe80, 'urls' => array_filter(array_map('escapeshellcmd', explode(',', $Fb9da1713bff19ce['domain_name'])))];
			goto label116;

			label104:

			$Bf9be24c69c0f17b = 'https';

			label105:

			$Fb9da1713bff19ce['enable_https'] = in_array($Fb9da1713bff19ce['id'], $ef08a17118b68045);
			goto label146;
			goto label164;

			label116:

			if (is_numeric($Fb9da1713bff19ce['parent_id'])) {
				goto label136;
			}

			$Fb9da1713bff19ce['parent_id'] = array_map('intval', json_decode($Fb9da1713bff19ce['parent_id'], true));
			goto label30;

			label136:

			$Fb9da1713bff19ce['parent_id'] = [intval($Fb9da1713bff19ce['parent_id'])];
			goto label30;

			label145:

			$Bf9be24c69c0f17b = 'https';

			label146:

			$e5bebfb39a19fe80 = ($Bf9be24c69c0f17b == 'http' ? intval($Fb9da1713bff19ce['http_broadcast_port']) : intval($Fb9da1713bff19ce['https_broadcast_port']));
			$Fb9da1713bff19ce['server_protocol'] = $Bf9be24c69c0f17b;
			goto label56;

			label164:

			if ($Fb9da1713bff19ce['enable_https'] == 1) {
				goto label172;
			}

			$Bf9be24c69c0f17b = 'http';
			goto label146;

			label172:

			goto label145;

			label174:

			if (empty($Fb9da1713bff19ce['domain_name'])) {
				goto label196;
			}

			$A7ca171405b19571 = str_replace(['http://', '/', 'https://'], '', escapeshellcmd(explode(',', $Fb9da1713bff19ce['domain_name'])[0]));
			goto label38;

			label196:

			$A7ca171405b19571 = escapeshellcmd($Fb9da1713bff19ce['server_ip']);
			goto label38;

			label203:
		}

		self::f7A8933150230eAB('servers', $Bcf70cba56392975);
		return $Bcf70cba56392975;
		goto label233;

		label211:

		goto label216;

		label212:

		self::$db->query('SELECT * FROM `servers`');

		label216:

		$Bcf70cba56392975 = [];
		goto label22;

		label218:

		$A66eee85d9566710 = self::e74A9a4510c4FFe4('servers', 10);

		if (empty($A66eee85d9566710)) {
			goto label227;
		}

		return $A66eee85d9566710;

		label227:

		if (!empty($_SERVER['REQUEST_SCHEME'])) {
			goto label4;
		}

		goto label1;

		label233:
	}

	static public function ac49b56dBe10e52C()
	{
		goto label24;

		label1:

		self::$db->query('SELECT * FROM `settings`');
		$D8e7681dfae2905b = self::$db->get_row();

		foreach ($D8e7681dfae2905b as $Bb672d1983256a93 => $ce0840c647e1bbc7) {
			$d094d3e133ec8c03[$Bb672d1983256a93] = $ce0840c647e1bbc7;
		}

		$d094d3e133ec8c03['allow_countries'] = json_decode($d094d3e133ec8c03['allow_countries'], true);
		goto label35;

		label24:

		$A66eee85d9566710 = self::E74A9a4510C4FFe4('settings', 20);

		if (empty($A66eee85d9566710)) {
			goto label33;
		}

		return $A66eee85d9566710;

		label33:

		$d094d3e133ec8c03 = [];
		goto label1;

		label35:

		self::F7a8933150230EAb('settings', $d094d3e133ec8c03);
		return $d094d3e133ec8c03;
		goto label41;

		label41:
	}

	static public function Bee6DCc538970dd6(&$ba2d146bb5a55097, $c40a96ec32e40497 = 0)
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

			self::BEe6dCC538970dD6($ba2d146bb5a55097[$Bb672d1983256a93], ++$c40a96ec32e40497);
			goto label12;

			label67:
		}
	}

	static public function E24b3D34D46068EB(&$ba2d146bb5a55097, $Eace76317d47fe26 = [], $c40a96ec32e40497 = 0)
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

			$Bb672d1983256a93 = self::c9a009A333d98407($Bb672d1983256a93);
			$ce0840c647e1bbc7 = self::fdEBdb3616a89cE1($ce0840c647e1bbc7);
			$Eace76317d47fe26[$Bb672d1983256a93] = $ce0840c647e1bbc7;
			goto label44;

			label35:

			$Eace76317d47fe26[$Bb672d1983256a93] = self::E24b3d34d46068Eb($ba2d146bb5a55097[$Bb672d1983256a93], [], $c40a96ec32e40497 + 1);

			label44:
		}

		return $Eace76317d47fe26;
	}

	static public function c9a009a333D98407($Bb672d1983256a93)
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

	static public function fdEBDB3616a89cE1($ce0840c647e1bbc7)
	{
		goto label38;

		label2:

		$ce0840c647e1bbc7 = str_replace('<!--', '&#60;&#33;--', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = str_replace('-->', '--&#62;', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = str_ireplace('<script', '&#60;script', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = preg_replace('/&amp;#([0-9]+);/s', '&#\\1;', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = preg_replace('/&#(\\d+?)([^\\d;])/i', '&#\\1;\\2', $ce0840c647e1bbc7);
		goto label33;

		label33:

		return trim($ce0840c647e1bbc7);
		goto label59;

		label38:

		if (!($ce0840c647e1bbc7 == '')) {
			goto label43;
		}

		return '';

		label43:

		$ce0840c647e1bbc7 = str_replace('&#032;', ' ', stripslashes($ce0840c647e1bbc7));
		$ce0840c647e1bbc7 = str_replace(["\r\n", "\n\r", "\r"], "\n", $ce0840c647e1bbc7);
		goto label2;

		label59:
	}

	static public function a844F50027d143d3()
	{
		return strtolower(basename(get_included_files()[0], '.php'));
	}

	static public function b3dAcF6Ac7E9C796($C082ca9ed03f473c)
	{
		return array_rand(array_keys(self::getProxies($C082ca9ed03f473c, false))) ?: NULL;
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

	static public function c65C7f64e35C199f($e3901a370c2ce233 = false)
	{
		goto label4;

		label2:

		return $aa049d3d6d423a70;
		goto label117;

		label4:

		$aa049d3d6d423a70 = NULL;
		$Bb672d1983256a93 = ($e3901a370c2ce233 ? 'https_url' : 'site_url');

		if (self::$rSettings['use_mdomain_in_lists'] == 1) {
			goto label94;
		}

		list($bb4374e240d7f242, $ab45da3b91decf09) = explode(':', $_SERVER['HTTP_HOST']);
		if ((PLATFORM == 'xui') && ($bb4374e240d7f242 == self::$rServers[SERVER_ID]['server_ip']) && self::$rServers[SERVER_ID]['enable_proxy']) {
			goto label45;
		}

		goto label54;

		label44:

		goto label93;

		label45:

		$Bdf1a4d575de41e8 = self::B3DacF6aC7e9C796(SERVER_ID);

		if (!$Bdf1a4d575de41e8) {
			goto label93;
		}

		goto label89;

		label54:

		if ($e3901a370c2ce233) {
			goto label71;
		}

		$aa049d3d6d423a70 = self::$rServers[SERVER_ID]['server_protocol'] . '://' . $bb4374e240d7f242 . ':' . self::$rServers[SERVER_ID]['request_port'] . '/';
		goto label44;

		label71:

		$aa049d3d6d423a70 = 'https://' . $bb4374e240d7f242 . ':' . self::$rServers[SERVER_ID]['https_broadcast_port'] . '/';
		goto label44;

		label81:

		if (!$Bdf1a4d575de41e8) {
			goto label88;
		}

		$aa049d3d6d423a70 = self::$rServers[$Bdf1a4d575de41e8][$Bb672d1983256a93];

		label88:

		goto label2;

		label89:

		$aa049d3d6d423a70 = self::$rServers[$Bdf1a4d575de41e8][$Bb672d1983256a93];

		label93:

		goto label88;

		label94:

		goto label95;

		label95:
		if ((PLATFORM == 'xui') && self::$rServers[SERVER_ID]['enable_proxy']) {
			goto label111;
		}

		$aa049d3d6d423a70 = self::$rServers[SERVER_ID][$Bb672d1983256a93];
		goto label88;

		label111:

		$Bdf1a4d575de41e8 = self::B3dAcf6ac7e9C796(SERVER_ID);
		goto label81;

		label117:
	}

	static public function b6dd3d9B5b90653b($A377ba6c37a0d3c2)
	{
		$B9869413eae86beb = [];
		$bcdd218e0737d516 = ['live' => 1, 'movie' => 2, 'created_live' => 3, 'radio_streams' => 4, 'series' => 5];

		foreach ($A377ba6c37a0d3c2 as $A7d54b094ae83c95) {
			$B9869413eae86beb[] = $bcdd218e0737d516[$A7d54b094ae83c95];
		}

		return $B9869413eae86beb;
	}

	static public function D15DcE7a49f71fea($F771d40e8cf51e59, $A7d54b094ae83c95 = 'movie')
	{
		goto label18;

		label3:

		if ($A7d54b094ae83c95 != 'live') {
			goto label11;
		}

		array_unshift($B9869413eae86beb, ['id' => '0', 'cat_order' => 0, 'title' => 'Most Popular']);
		goto label16;

		label11:

		array_unshift($B9869413eae86beb, ['id' => '0', 'cat_order' => 0, 'title' => 'All Genres']);
		goto label16;

		label16:

		return $B9869413eae86beb;
		goto label55;

		label18:

		$B9869413eae86beb = [];

		foreach (self::c721BD954A5f072f($A7d54b094ae83c95) as $Dbcac322b4274e46) {
			if (!in_array($Dbcac322b4274e46['id'], $F771d40e8cf51e59)) {
				goto label41;
			}

			$B9869413eae86beb[] = ['title' => $Dbcac322b4274e46['category_name'], 'id' => $Dbcac322b4274e46['id'], 'cat_order' => $Dbcac322b4274e46['cat_order']];

			label41:
		}

		$b87030f28ff32396 = array_column($B9869413eae86beb, 'cat_order');
		array_multisort($b87030f28ff32396, SORT_ASC, $B9869413eae86beb);
		goto label3;

		label55:
	}

	static public function eE26F6AdBD1e84e9($A5a4a57a12bb19b3)
	{
		goto label29;

		label2:

		$A5a4a57a12bb19b3 = array_flip($A5a4a57a12bb19b3);
		$e40a84c2bb6de229 = [];

		foreach ($a2a53f18f4f95c8b as $Abcb228699a7f743) {
			if (!isset($A5a4a57a12bb19b3[$Abcb228699a7f743])) {
				goto label16;
			}

			$e40a84c2bb6de229[] = $Abcb228699a7f743;

			label16:
		}

		if (!(0 < count($e40a84c2bb6de229))) {
			goto label27;
		}

		goto label26;

		label26:

		return $e40a84c2bb6de229;

		label27:

		return $A5a4a57a12bb19b3;
		goto label64;

		label29:

		if (!(PLATFORM != 'xui')) {
			goto label35;
		}

		return $A5a4a57a12bb19b3;

		label35:
		if (!((0 < count($A5a4a57a12bb19b3)) && file_exists(CACHE_TMP_PATH . 'channel_order') && (self::$rSettings['channel_number_type'] != 'bouquet'))) {
			goto label27;
		}

		$a2a53f18f4f95c8b = self::unserialize(file_get_contents(CACHE_TMP_PATH . 'channel_order'));
		goto label2;

		label64:
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

	static public function ca290dc77E86B74B($E59d0debc75e7be8, $A377ba6c37a0d3c2 = [], $fe63f70cd74f3298 = NULL, $e9fb21bb0c6585bf = NULL, $e4829bf95c7424f6 = NULL, $Eac3da04c89f6001 = NULL, $C92f406d98c77d35 = [], $bcfd61adc96d4b72 = 0, $Cc2b5dfe75dc164b = 10, $Fe53bcd53690fff4 = false)
	{
		goto label151;

		label11:

		if (PLATFORM == 'xui') {
			goto label18;
		}

		$cf0aab70014807af[] = '`category_id` = ?';
		goto label57;

		label18:

		goto label55;

		label19:

		if (empty($e9fb21bb0c6585bf)) {
			goto label536;
		}

		$eadf01082ef9d786 = [];

		foreach ($A377ba6c37a0d3c2 as $A7d54b094ae83c95) {
			foreach ($E59d0debc75e7be8['fav_channels'][$A7d54b094ae83c95] as $ee6d1fc5d801b43f) {
				$eadf01082ef9d786[] = intval($ee6d1fc5d801b43f);
			}
		}

		$A5a4a57a12bb19b3 = array_intersect($eadf01082ef9d786, $A5a4a57a12bb19b3);
		goto label536;

		label44:

		$D9846544dffb63c9 = [
			'count'   => 0,
			'streams' => []
		];
		$Bb672d1983256a93 = $bcfd61adc96d4b72 + 1;
		$B03cfeca75020c69 = $cf0aab70014807af = [];

		if (!self::$rSettings['player_hide_incompatible']) {
			goto label328;
		}

		goto label326;

		label55:

		$cf0aab70014807af[] = 'JSON_CONTAINS(`category_id`, ?, \'$\')';

		label57:

		$B03cfeca75020c69[] = $fe63f70cd74f3298;

		label59:

		if (!$C92f406d98c77d35['filter']) {
			goto label469;
		}

		goto label455;

		label64:

		if (PLATFORM == 'xui') {
			goto label75;
		}

		$B91645b8411dc88c = 'SELECT `id` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';';
		goto label312;

		label75:

		$B91645b8411dc88c = 'SELECT `id` FROM `streams` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';';
		goto label312;

		label82:

		$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

		switch ($e4829bf95c7424f6) {
		case 'name':
			uasort($D9846544dffb63c9['streams'], 'sortArrayStreamName');
			$a2a53f18f4f95c8b = '`stream_display_name` ASC';
			goto label136;
		case 'top':
		case 'rating':
			$a2a53f18f4f95c8b = '`rating` DESC';
			goto label136;
		case 'added':
			$a2a53f18f4f95c8b = '`added` DESC';
			goto label136;
		case 'release':
			$a2a53f18f4f95c8b = '`year` DESC, `stream_display_name` ASC';
			goto label136;
		case 'number':
		default:
			if ((self::$rSettings['channel_number_type'] != 'manual') && (0 < count($A5a4a57a12bb19b3))) {
				goto label128;
			}

			$a2a53f18f4f95c8b = '`order` ASC';
			goto label135;

			label128:

			$a2a53f18f4f95c8b = 'FIELD(id,' . implode(',', $A5a4a57a12bb19b3) . ')';

			label135:

			goto label136;
		}

		label136:

		if (0 < count($A5a4a57a12bb19b3)) {
			goto label427;
		}

		goto label425;

		label143:

		$B91645b8411dc88c = 'SELECT (SELECT `stream_info` FROM `streams_servers` WHERE `streams_servers`.`pid` IS NOT NULL AND `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) AS `stream_info`, `id`, `stream_display_name`, `movie_properties`, `target_container`, `added`, `year`, `category_id`, `channel_id`, `epg_id`, `tv_archive_duration`, `stream_icon`, `allow_record`, `type` FROM `streams` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';';

		label149:

		goto label312;

		label150:

		goto label64;

		label151:

		self::verifyLicense();
		global $b62d6460eb33ea07;
		$b2958c7c4cd0bba2 = false;
		$A5a4a57a12bb19b3 = [];

		foreach ($A377ba6c37a0d3c2 as $A7d54b094ae83c95) {
			switch ($A7d54b094ae83c95) {
			case 'live':
			case 'created_live':
				if (!$b2958c7c4cd0bba2) {
					goto label176;
				}

				goto label209;

				label176:

				$A5a4a57a12bb19b3 = array_merge($A5a4a57a12bb19b3, $E59d0debc75e7be8['live_ids']);
				$b2958c7c4cd0bba2 = true;
				goto label209;
			case 'movie':
				$A5a4a57a12bb19b3 = array_merge($A5a4a57a12bb19b3, $E59d0debc75e7be8['vod_ids']);
				goto label209;
			case 'radio_streams':
				$A5a4a57a12bb19b3 = array_merge($A5a4a57a12bb19b3, $E59d0debc75e7be8['radio_ids']);
				goto label209;
			case 'series':
				$A5a4a57a12bb19b3 = array_merge($A5a4a57a12bb19b3, $E59d0debc75e7be8['episode_ids']);
				goto label209;
			}

			label209:
		}

		goto label44;

		label212:

		if (!empty($fe63f70cd74f3298)) {
			goto label11;
		}
		if (!(in_array('live', $A377ba6c37a0d3c2) && empty($Eac3da04c89f6001))) {
			goto label534;
		}

		$bcfd61adc96d4b72 = 0;
		$Cc2b5dfe75dc164b = 200;
		$Cf056574208e92dd = self::unserialize(file_get_contents(CONTENT_PATH . 'live_popular'));
		goto label513;

		label238:

		foreach ($D8e7681dfae2905b as $fe93a43f53d92a4e) {
			goto label253;

			label242:

			$fe93a43f53d92a4e['category_id'] = $fe63f70cd74f3298;

			label244:

			$fe93a43f53d92a4e['stream_info'] = json_decode($fe93a43f53d92a4e['stream_info'], true);
			goto label285;

			label253:

			$fe93a43f53d92a4e['number'] = $Bb672d1983256a93;

			if (!(PLATFORM == 'xui')) {
				goto label244;
			}

			if (in_array($fe63f70cd74f3298, json_decode($fe93a43f53d92a4e['category_id'], true))) {
				goto label242;
			}

			$fe93a43f53d92a4e['category_id'] = json_decode($fe93a43f53d92a4e['category_id'], true)[0];
			goto label244;
			goto label242;

			label285:

			$D9846544dffb63c9['streams'][$fe93a43f53d92a4e['id']] = $fe93a43f53d92a4e;
			$Bb672d1983256a93++;
			goto label293;

			label293:
		}

		return $D9846544dffb63c9;
		goto label299;

		label297:

		goto label298;

		label298:

		return $D8e7681dfae2905b;

		label299:

		goto label546;

		label300:

		goto label311;

		label301:

		$B91645b8411dc88c = 'SELECT `id` FROM `streams` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';

		label311:

		goto label316;

		label312:

		goto label316;

		label313:

		if ($Fe53bcd53690fff4) {
			goto label384;
		}

		goto label399;

		label316:

		$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
		$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();

		label323:

		if ($Fe53bcd53690fff4) {
			goto label297;
		}

		goto label238;

		label326:

		$cf0aab70014807af[] = '(SELECT MAX(`compatible`) FROM `streams_servers` WHERE `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) = 1';

		label328:

		if (!(0 < count($A377ba6c37a0d3c2))) {
			goto label346;
		}

		$cf0aab70014807af[] = '`type` IN (' . implode(',', self::b6DD3D9B5b90653B($A377ba6c37a0d3c2)) . ')';

		label346:

		goto label212;

		label347:

		if (!is_array($C92f406d98c77d35['year_range'])) {
			goto label364;
		}

		$cf0aab70014807af[] = '(`year` >= ? AND `year` <= ?)';
		$B03cfeca75020c69[] = $C92f406d98c77d35['year_range'][0];
		$B03cfeca75020c69[] = $C92f406d98c77d35['year_range'][1];

		label364:

		goto label365;

		label365:

		if (!is_array($C92f406d98c77d35['rating_range'])) {
			goto label382;
		}

		$cf0aab70014807af[] = '(`rating` >= ? AND `rating` <= ?)';
		$B03cfeca75020c69[] = $C92f406d98c77d35['rating_range'][0];
		$B03cfeca75020c69[] = $C92f406d98c77d35['rating_range'][1];

		label382:

		goto label474;

		label383:

		goto label311;

		label384:

		if (PLATFORM == 'xui') {
			goto label301;
		}

		$B91645b8411dc88c = 'SELECT `id` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
		goto label300;

		label399:

		if (PLATFORM == 'xui') {
			goto label414;
		}

		$B91645b8411dc88c = 'SELECT (SELECT `stream_info` FROM `streams_sys` WHERE `streams_sys`.`pid` IS NOT NULL AND `streams_sys`.`stream_id` = `streams`.`id` LIMIT 1) AS `stream_info`, `id`, `stream_display_name`, `title`, `movie_propeties`, `target_container`, `added`, `year`, `category_id`, `channel_id`, `epg_id`, `tv_archive_duration`, `stream_icon`, `allow_record`, `type` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
		goto label383;

		label414:

		$B91645b8411dc88c = 'SELECT (SELECT `stream_info` FROM `streams_servers` WHERE `streams_servers`.`pid` IS NOT NULL AND `streams_servers`.`stream_id` = `streams`.`id` LIMIT 1) AS `stream_info`, `id`, `stream_display_name`, `movie_properties`, `target_container`, `added`, `year`, `category_id`, `channel_id`, `epg_id`, `tv_archive_duration`, `stream_icon`, `allow_record`, `type` FROM `streams` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
		goto label383;

		label425:

		$D8e7681dfae2905b = [];
		goto label323;

		label427:

		if (PLATFORM == 'xui') {
			goto label500;
		}

		$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ';', ...$B03cfeca75020c69);
		goto label499;

		label439:

		if ($Cc2b5dfe75dc164b) {
			goto label313;
		}

		if ($Fe53bcd53690fff4) {
			goto label150;
		}

		if (PLATFORM == 'xui') {
			goto label143;
		}

		$B91645b8411dc88c = 'SELECT (SELECT `stream_info` FROM `streams_sys` WHERE `streams_sys`.`pid` IS NOT NULL AND `streams_sys`.`stream_id` = `streams`.`id` LIMIT 1) AS `stream_info`, `id`, `stream_display_name`, `title`, `movie_propeties`, `target_container`, `added`, `year`, `category_id`, `channel_id`, `epg_id`, `tv_archive_duration`, `stream_icon`, `allow_record`, `type` FROM `streams` LEFT JOIN `webplayer_data` ON `webplayer_data`.`stream_id` = `streams`.`id` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';';
		goto label149;
		goto label143;

		label455:

		switch ($C92f406d98c77d35['filter']) {
		case 'all':
			goto label469;
		case 'timeshift':
			$cf0aab70014807af[] = '`tv_archive_duration` > 0 AND `tv_archive_server_id` > 0';
			goto label469;
		default:
		}

		label469:

		$A5a4a57a12bb19b3 = self::EE26f6ADBd1e84E9($A5a4a57a12bb19b3);
		goto label19;

		label474:

		$A5a4a57a12bb19b3 = self::confirmIDs($A5a4a57a12bb19b3);

		if (!(count($A5a4a57a12bb19b3) == 0)) {
			goto label486;
		}

		return $D9846544dffb63c9;

		label486:

		$cf0aab70014807af[] = '`id` IN (' . implode(',', array_map('intval', $A5a4a57a12bb19b3)) . ')';
		goto label82;

		label499:

		goto label507;

		label500:

		$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `streams` ' . $F5190fed237fabec . ';', ...$B03cfeca75020c69);

		label507:

		$D9846544dffb63c9['count'] = $b62d6460eb33ea07->get_row()['count'];
		goto label439;

		label513:
		if (!($Cf056574208e92dd && (0 < count($Cf056574208e92dd)))) {
			goto label534;
		}

		$cf0aab70014807af[] = '`id` IN (' . implode(',', array_map('intval', $Cf056574208e92dd)) . ')';

		label534:

		goto label59;
		goto label11;

		label536:

		if (empty($Eac3da04c89f6001)) {
			goto label545;
		}

		$cf0aab70014807af[] = '`stream_display_name` LIKE ?';
		$B03cfeca75020c69[] = '%' . $Eac3da04c89f6001 . '%';

		label545:

		goto label347;

		label546:
	}

	static public function AD7C990925f39c05($E59d0debc75e7be8, $fe63f70cd74f3298 = NULL, $e9fb21bb0c6585bf = NULL, $e4829bf95c7424f6 = NULL, $Eac3da04c89f6001 = NULL, $C92f406d98c77d35 = [], $bcfd61adc96d4b72 = 0, $Cc2b5dfe75dc164b = 10, $D2c5c3f4714d7e74 = NULL)
	{
		goto label314;

		label10:

		$cf0aab70014807af[] = '`id` IN (' . implode(',', array_map('intval', $d02ef9ae10a41939)) . ')';
		$F5190fed237fabec = 'WHERE ' . implode(' AND ', $cf0aab70014807af);

		switch ($e4829bf95c7424f6) {
		case 'name':
			uasort($D9846544dffb63c9['streams'], 'sortArrayStreamName');
			$a2a53f18f4f95c8b = '`title` ASC';
			goto label323;
		case 'top':
		case 'rating':
			$a2a53f18f4f95c8b = '`rating` DESC';
			goto label323;
		case 'added':
			if (PLATFORM == 'xui') {
				goto label57;
			}

			$a2a53f18f4f95c8b = '`id` DESC';
			goto label58;

			label57:

			$a2a53f18f4f95c8b = '`last_modified` DESC';

			label58:

			goto label323;
		case 'release':
			if (PLATFORM == 'xui') {
				goto label65;
			}

			$a2a53f18f4f95c8b = '`releaseDate` DESC';
			goto label66;

			label65:

			$a2a53f18f4f95c8b = '`release_date` DESC';

			label66:

			goto label323;
		case 'number':
		default:
			if ((PLATFORM == 'xui') && XUI::$rSettings['vod_sort_newest']) {
				goto label83;
			}

			$a2a53f18f4f95c8b = 'FIELD(id,' . implode(',', $d02ef9ae10a41939) . ')';
			goto label84;

			label83:

			$a2a53f18f4f95c8b = '`last_modified` DESC';

			label84:

			goto label323;
			goto label323;

			label86:

			if (PLATFORM == 'xui') {
				goto label93;
			}

			$cf0aab70014807af[] = '`category_id` = ?';
			goto label132;

			label93:

			$cf0aab70014807af[] = 'JSON_CONTAINS(`category_id`, ?, \'$\')';
			goto label132;

			label96:

			if (PLATFORM == 'xui') {
				goto label111;
			}

			$B91645b8411dc88c = 'SELECT `id`, `title`, `category_id`, `cover`, `rating`, `releaseDate`, `tmdb_id`, `seasons`, `backdrop_path` FROM `series` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';
			goto label267;

			label111:

			goto label257;

			label112:

			if (PLATFORM == 'xui') {
				goto label124;
			}

			$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `series` ' . $F5190fed237fabec . ';', ...$B03cfeca75020c69);
			goto label230;

			label124:

			$b62d6460eb33ea07->query('SELECT COUNT(`id`) AS `count` FROM `streams_series` ' . $F5190fed237fabec . ';', ...$B03cfeca75020c69);
			goto label230;

			label132:

			$B03cfeca75020c69[] = $fe63f70cd74f3298;

			label134:

			if (!is_array($C92f406d98c77d35['year_range'])) {
				goto label206;
			}

			if (PLATFORM == 'xui') {
				goto label311;
			}

			goto label308;

			label146:

			foreach ($D8e7681dfae2905b as $fe93a43f53d92a4e) {
				goto label150;

				label150:

				$fe93a43f53d92a4e['number'] = $Bb672d1983256a93;

				if (!(PLATFORM == 'xui')) {
					goto label184;
				}

				if (in_array($fe63f70cd74f3298, json_decode($fe93a43f53d92a4e['category_id'], true))) {
					goto label182;
				}

				$fe93a43f53d92a4e['category_id'] = json_decode($fe93a43f53d92a4e['category_id'], true)[0];
				goto label184;
				goto label182;

				label182:

				$fe93a43f53d92a4e['category_id'] = $fe63f70cd74f3298;

				label184:

				$D9846544dffb63c9['streams'][$fe93a43f53d92a4e['id']] = $fe93a43f53d92a4e;
				goto label190;

				label190:

				$Bb672d1983256a93++;
				goto label194;

				label194:
			}

			return $D9846544dffb63c9;
			goto label334;

			label198:

			$B03cfeca75020c69[] = $C92f406d98c77d35['year_range'][0];
			$B03cfeca75020c69[] = $C92f406d98c77d35['year_range'][1];

			label206:

			if (!is_array($C92f406d98c77d35['rating_range'])) {
				goto label224;
			}

			$cf0aab70014807af[] = '(`rating` >= ? AND `rating` <= ?)';
			goto label216;

			label216:

			$B03cfeca75020c69[] = $C92f406d98c77d35['rating_range'][0];
			$B03cfeca75020c69[] = $C92f406d98c77d35['rating_range'][1];

			label224:

			if (empty($Eac3da04c89f6001)) {
				goto label292;
			}

			$cf0aab70014807af[] = '`title` LIKE ?';
			goto label288;

			label230:

			$D9846544dffb63c9['count'] = $b62d6460eb33ea07->get_row()['count'];

			if ($Cc2b5dfe75dc164b) {
				goto label96;
			}

			if (PLATFORM == 'xui') {
				goto label249;
			}

			$B91645b8411dc88c = 'SELECT `id`, `title`, `category_id`, `cover`, `rating`, `releaseDate`, `tmdb_id`, `seasons`, `backdrop_path` FROM `series` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';';
			goto label248;

			label248:

			goto label255;

			label249:

			$B91645b8411dc88c = 'SELECT `id`, `title`, `category_id`, `cover`, `rating`, `release_date`, `last_modified`, `tmdb_id`, `seasons`, `backdrop_path`, `year` FROM `streams_series` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ';';

			label255:

			goto label267;
			goto label96;

			label257:

			$B91645b8411dc88c = 'SELECT `id`, `title`, `category_id`, `cover`, `rating`, `release_date`, `last_modified`, `tmdb_id`, `seasons`, `backdrop_path`, `year` FROM `streams_series` ' . $F5190fed237fabec . ' ORDER BY ' . $a2a53f18f4f95c8b . ' LIMIT ' . $bcfd61adc96d4b72 . ', ' . $Cc2b5dfe75dc164b . ';';

			label267:

			$b62d6460eb33ea07->query($B91645b8411dc88c, ...$B03cfeca75020c69);
			$D8e7681dfae2905b = $b62d6460eb33ea07->get_rows();
			goto label146;

			label275:

			$B03cfeca75020c69 = $cf0aab70014807af = [];

			if (!self::$rSettings['player_hide_incompatible']) {
				goto label284;
			}

			$cf0aab70014807af[] = '(SELECT MAX(`compatible`) FROM `streams_servers` LEFT JOIN `streams_episodes` ON `streams_episodes`.`stream_id` = `streams_servers`.`stream_id` WHERE `streams_episodes`.`series_id` = `streams_series`.`id`) = 1';

			label284:

			if (empty($fe63f70cd74f3298)) {
				goto label134;
			}

			goto label86;

			label288:

			$B03cfeca75020c69[] = '%' . $Eac3da04c89f6001 . '%';

			label292:

			$d02ef9ae10a41939 = self::confirmIDs($d02ef9ae10a41939);

			if (!(count($d02ef9ae10a41939) == 0)) {
				goto label10;
			}

			return $D9846544dffb63c9;
			goto label10;

			label305:

			return NULL;

			label306:

			goto label146;

			label307:

			goto label112;

			label308:

			$cf0aab70014807af[] = '(LEFT(`releaseDate`, 4) >= ? AND LEFT(`releaseDate`, 4) <= ?)';
			goto label313;

			label311:

			$cf0aab70014807af[] = '(`year` >= ? AND `year` <= ?)';

			label313:

			goto label198;

			label314:

			self::verifyLicense();
			global $b62d6460eb33ea07;
			$d02ef9ae10a41939 = $E59d0debc75e7be8['series_ids'];
			$D9846544dffb63c9 = [
				'count'   => 0,
				'streams' => []
			];
			$Bb672d1983256a93 = $bcfd61adc96d4b72 + 1;
			goto label275;
		}

		label323:

		if (0 < count($d02ef9ae10a41939)) {
			goto label307;
		}

		if ($D2c5c3f4714d7e74) {
			goto label305;
		}

		$D8e7681dfae2905b = [];
		goto label306;
		goto label305;

		label334:
	}

	static public function ba2E785F0326D499($Abcb228699a7f743)
	{
		if (PLATFORM == 'xui') {
			goto label11;
		}

		self::$db->query('SELECT `series`.*, `webplayer_data`.`similar` FROM `series` LEFT JOIN `webplayer_data` ON `webplayer_data`.`series_id` = `series`.`id` WHERE `id` = ?;', $Abcb228699a7f743);
		goto label16;

		label11:

		self::$db->query('SELECT * FROM `streams_series` WHERE `id` = ?;', $Abcb228699a7f743);

		label16:

		if (!(self::$db->num_rows() == 1)) {
			goto label27;
		}

		return self::$db->get_row();

		label27:

		return NULL;
	}

	static public function aED9009b5Dc15cAe($b38e11ffdc6a3abb)
	{
		goto label27;

		label2:

		return $Fca04b1755da7bd5;
		goto label71;

		label4:

		$Fca04b1755da7bd5 = $C9d42cf3fc64130c->get($b38e11ffdc6a3abb);
		$C9d42cf3fc64130c->close();

		if (!$Fca04b1755da7bd5) {
			goto label26;
		}

		file_put_contents(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_geo2', json_encode($Fca04b1755da7bd5));

		label26:

		goto label2;

		label27:

		if (!(PLATFORM != 'xui')) {
			goto label33;
		}

		return false;

		label33:

		if (!empty($b38e11ffdc6a3abb)) {
			goto label39;
		}

		return false;
		goto label39;

		label39:

		if (!file_exists(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_geo2')) {
			goto label65;
		}

		return json_decode(file_get_contents(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_geo2'), true);

		label65:

		$C9d42cf3fc64130c = new MaxMind\Db\Reader(GEOLITE2_BIN);
		goto label4;

		label71:
	}

	static public function d6B3157e40ff47D6($b38e11ffdc6a3abb)
	{
		goto label57;

		label2:

		if (!file_exists(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_isp')) {
			goto label28;
		}

		return json_decode(file_get_contents(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_isp'), true);

		label28:

		$C9d42cf3fc64130c = new MaxMind\Db\Reader(GEOISP_BIN);
		goto label34;

		label34:

		$Fca04b1755da7bd5 = $C9d42cf3fc64130c->get($b38e11ffdc6a3abb);
		$C9d42cf3fc64130c->close();

		if (!$Fca04b1755da7bd5) {
			goto label56;
		}

		file_put_contents(CONS_TMP_PATH . md5($b38e11ffdc6a3abb) . '_isp', json_encode($Fca04b1755da7bd5));

		label56:

		goto label69;

		label57:

		if (!(PLATFORM != 'xui')) {
			goto label63;
		}

		return false;

		label63:

		if (!empty($b38e11ffdc6a3abb)) {
			goto label2;
		}

		return false;
		goto label2;

		label69:

		return $Fca04b1755da7bd5;
		goto label71;

		label71:
	}

	static public function EFF2889A3e3E9c34($Debf76f3b5719ca3)
	{
		if (!(PLATFORM != 'xui')) {
			goto label7;
		}

		return false;

		label7:

		foreach (self::$rBlockedISP as $fc07e00b86ce286c) {
			if (!(strtolower($Debf76f3b5719ca3) == strtolower($fc07e00b86ce286c['isp']))) {
				goto label28;
			}

			return intval($fc07e00b86ce286c['blocked']);

			label28:
		}

		return 0;
	}

	static public function cC988751eEBBF271($f7107e3a92443147 = NULL, $ff5cf44f96903d64 = NULL, $fd093b5358e9a519 = NULL, $Abca9d7ba75bcfb9 = false, $D67591a963888d63 = false, $b38e11ffdc6a3abb = '')
	{
		goto label734;

		label7:

		$f7107e3a92443147 = intval(file_get_contents(LINES_TMP_PATH . 'line_c_' . $ff5cf44f96903d64 . '_' . $fd093b5358e9a519));

		label19:

		goto label395;

		label20:

		goto label761;

		label21:

		if (PLATFORM == 'xui') {
			goto label34;
		}

		self::$db->query('UPDATE `users` SET `forced_country` = ? WHERE `id` = ?', $E59d0debc75e7be8['forced_country'], $E59d0debc75e7be8['id']);
		goto label149;

		label34:

		self::$db->query('UPDATE `lines` SET `forced_country` = ? WHERE `id` = ?', $E59d0debc75e7be8['forced_country'], $E59d0debc75e7be8['id']);
		goto label149;

		label43:

		$E59d0debc75e7be8['con_isp_name'] = NULL;
		$E59d0debc75e7be8['isp_violate'] = 0;
		$E59d0debc75e7be8['isp_is_server'] = 0;
		goto label928;

		label50:

		if (!empty($f7107e3a92443147)) {
			goto label56;
		}

		return false;
		goto label722;

		label56:

		if (PLATFORM == 'xui') {
			goto label598;
		}

		goto label592;

		label61:

		goto label75;

		label62:

		self::c59e849742699501('isp/' . $E59d0debc75e7be8['id'], json_encode([$E59d0debc75e7be8['con_isp_name'], $E59d0debc75e7be8['isp_asn']]));

		label75:

		goto label409;

		label76:

		foreach ($E59d0debc75e7be8['series_ids'] as $E6f758b9be57a931) {
			if (!isset($c0d75a4d66502538[$E6f758b9be57a931])) {
				goto label106;
			}

			foreach (array_values($c0d75a4d66502538[$E6f758b9be57a931]) as $fe63f70cd74f3298) {
				if (!($fe63f70cd74f3298 && !in_array($fe63f70cd74f3298, $F05acfe4a87b8eb0))) {
					goto label104;
				}

				$F05acfe4a87b8eb0[] = $fe63f70cd74f3298;

				label104:
			}

			label106:
		}

		label108:

		$E59d0debc75e7be8['category_ids'] = array_map('intval', array_unique($F05acfe4a87b8eb0));
		goto label236;

		label118:

		goto label43;

		label119:

		foreach (self::unserialize(file_get_contents(CACHE_TMP_PATH . 'output_formats')) as $Fb9da1713bff19ce) {
			if (!in_array(intval($Fb9da1713bff19ce['access_output_id']), $E59d0debc75e7be8['allowed_outputs'])) {
				goto label146;
			}

			$E59d0debc75e7be8['output_formats'][] = $Fb9da1713bff19ce['output_key'];

			label146:
		}

		goto label43;

		label149:

		goto label157;

		label150:

		self::c59E849742699501('forced_country/' . $E59d0debc75e7be8['id'], $E59d0debc75e7be8['forced_country']);

		label157:

		goto label798;

		label158:

		$E59d0debc75e7be8['isp_asn'] = $d6525b7c1d8c7582['autonomous_system_number'];
		$E59d0debc75e7be8['isp_violate'] = self::efF2889a3e3e9C34($E59d0debc75e7be8['con_isp_name']);

		label167:
		if (!(!empty($E59d0debc75e7be8['con_isp_name']) && (self::$rSettings['enable_isp_lock'] == 1) && ($E59d0debc75e7be8['is_stalker'] == 0) && ($E59d0debc75e7be8['is_isplock'] == 1) && !empty($E59d0debc75e7be8['isp_desc']) && (strtolower($E59d0debc75e7be8['con_isp_name']) != strtolower($E59d0debc75e7be8['isp_desc'])))) {
			goto label698;
		}

		goto label696;

		label201:

		if (!$E59d0debc75e7be8) {
			goto label237;
		}
		if (!((PLATFORM == 'xui') && (self::$rSettings['county_override_1st'] == 1) && empty($E59d0debc75e7be8['forced_country']) && !empty($b38e11ffdc6a3abb) && ($E59d0debc75e7be8['max_connections'] == 1))) {
			goto label798;
		}

		$E59d0debc75e7be8['forced_country'] = self::aed9009B5DC15CAe($b38e11ffdc6a3abb)['registered_country']['iso_code'];

		if (self::$rCached) {
			goto label150;
		}

		goto label21;

		label236:

		return $E59d0debc75e7be8;

		label237:

		return false;
		goto label979;

		label239:

		if (self::$rCached) {
			goto label960;
		}

		if (!(0 < count($E59d0debc75e7be8['channel_ids']))) {
			goto label563;
		}

		self::$db->query('SELECT DISTINCT(`category_id`) FROM `streams` WHERE `id` IN (' . implode(',', array_map('intval', $E59d0debc75e7be8['channel_ids'])) . ');');

		foreach (self::$db->get_rows(true, 'category_id') as $fb719dae9595b9fa) {
			if (PLATFORM == 'xui') {
				goto label282;
			}

			$F05acfe4a87b8eb0[] = $fb719dae9595b9fa['category_id'];
			goto label301;

			label282:

			foreach (json_decode($fb719dae9595b9fa['category_id'], true) as $fe63f70cd74f3298) {
				if (in_array($fe63f70cd74f3298, $F05acfe4a87b8eb0)) {
					goto label299;
				}

				$F05acfe4a87b8eb0[] = $fe63f70cd74f3298;

				label299:
			}

			label301:
		}

		goto label563;

		label304:
		if (!empty($ff5cf44f96903d64) && !empty($fd093b5358e9a519)) {
			goto label891;
		}

		if (!empty($f7107e3a92443147)) {
			goto label317;
		}

		return false;

		label317:

		goto label19;
		goto label891;

		label319:

		$E59d0debc75e7be8['channel_ids'] = array_map('intval', array_unique($deec1aac68da5dbb));
		$E59d0debc75e7be8['series_ids'] = array_map('intval', array_unique($d611c60168c266f6));
		$E59d0debc75e7be8['vod_ids'] = array_map('intval', array_unique($a43c9d9b6968d829));
		$E59d0debc75e7be8['live_ids'] = array_map('intval', array_unique($Cf056574208e92dd));
		$E59d0debc75e7be8['radio_ids'] = array_map('intval', array_unique($cd0a97ba1e38e34f));
		goto label239;

		label365:

		goto label118;

		label366:

		self::$db->query('SELECT `access_output_id`, `output_key` FROM `output_formats`;');

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			if (!in_array(intval($Fb9da1713bff19ce['access_output_id']), $E59d0debc75e7be8['allowed_outputs'])) {
				goto label392;
			}

			$E59d0debc75e7be8['output_formats'][] = $Fb9da1713bff19ce['output_key'];

			label392:
		}

		goto label118;

		label395:

		if (!$f7107e3a92443147) {
			goto label408;
		}

		$E59d0debc75e7be8 = self::unserialize(file_get_contents(LINES_TMP_PATH . 'line_i_' . $f7107e3a92443147));

		label408:

		goto label201;

		label409:

		if (!$Abca9d7ba75bcfb9) {
			goto label236;
		}

		$Cf056574208e92dd = $a43c9d9b6968d829 = $cd0a97ba1e38e34f = $F05acfe4a87b8eb0 = $deec1aac68da5dbb = $d611c60168c266f6 = [];

		foreach ($E59d0debc75e7be8['bouquet'] as $Abcb228699a7f743) {
			goto label449;

			label423:

			goto label506;

			label425:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['channels'])) {
				goto label440;
			}

			$Cf056574208e92dd = array_merge($Cf056574208e92dd, self::$rBouquets[$Abcb228699a7f743]['channels']);

			label440:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['movies'])) {
				goto label489;
			}

			goto label481;

			label449:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['streams'])) {
				goto label464;
			}

			$deec1aac68da5dbb = array_merge($deec1aac68da5dbb, self::$rBouquets[$Abcb228699a7f743]['streams']);

			label464:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['series'])) {
				goto label425;
			}

			$d611c60168c266f6 = array_merge($d611c60168c266f6, self::$rBouquets[$Abcb228699a7f743]['series']);
			goto label425;

			label481:

			$a43c9d9b6968d829 = array_merge($a43c9d9b6968d829, self::$rBouquets[$Abcb228699a7f743]['movies']);

			label489:

			if (!isset(self::$rBouquets[$Abcb228699a7f743]['radios'])) {
				goto label504;
			}

			$cd0a97ba1e38e34f = array_merge($cd0a97ba1e38e34f, self::$rBouquets[$Abcb228699a7f743]['radios']);

			label504:

			goto label423;

			label506:
		}

		goto label319;

		label509:

		self::$db->query('SELECT DISTINCT(`category_id`) FROM `streams_series` WHERE `id` IN (' . implode(',', array_map('intval', $E59d0debc75e7be8['series_ids'])) . ');');

		label524:

		foreach (self::$db->get_rows(true, 'category_id') as $fb719dae9595b9fa) {
			if (PLATFORM == 'xui') {
				goto label541;
			}

			$F05acfe4a87b8eb0[] = $fb719dae9595b9fa['category_id'];
			goto label560;

			label541:

			foreach (json_decode($fb719dae9595b9fa['category_id'], true) as $fe63f70cd74f3298) {
				if (in_array($fe63f70cd74f3298, $F05acfe4a87b8eb0)) {
					goto label558;
				}

				$F05acfe4a87b8eb0[] = $fe63f70cd74f3298;

				label558:
			}

			label560:
		}

		goto label959;

		label563:

		if (!(0 < count($E59d0debc75e7be8['series_ids']))) {
			goto label959;
		}

		if (PLATFORM == 'xui') {
			goto label509;
		}

		self::$db->query('SELECT DISTINCT(`category_id`) FROM `series` WHERE `id` IN (' . implode(',', array_map('intval', $E59d0debc75e7be8['series_ids'])) . ');');
		goto label524;
		goto label509;

		label592:

		self::$db->query('SELECT * FROM `users` WHERE `id` = ?', $f7107e3a92443147);
		goto label603;

		label598:

		self::$db->query('SELECT * FROM `lines` WHERE `id` = ?', $f7107e3a92443147);

		label603:

		goto label722;

		label604:

		$E59d0debc75e7be8['output_formats'] = [];

		if (self::$rCached) {
			goto label119;
		}

		if (PLATFORM == 'xui') {
			goto label366;
		}

		self::$db->query('SELECT `user_output`.`access_output_id`, `access_output`.`output_key` FROM `user_output` LEFT JOIN `access_output` ON `user_output`.`access_output_id` = `access_output`.`access_output_id` WHERE `user_output`.`user_id` = ?;', $E59d0debc75e7be8['id']);

		foreach (self::$db->get_rows() as $Fb9da1713bff19ce) {
			$E59d0debc75e7be8['allowed_outputs'][] = $Fb9da1713bff19ce['access_output_id'];
			$E59d0debc75e7be8['output_formats'][] = $Fb9da1713bff19ce['output_key'];
		}

		goto label365;

		label635:

		goto label642;

		label636:

		self::$db->query('SELECT * FROM `lines` WHERE `username` = ? AND `password` = ? LIMIT 1', $ff5cf44f96903d64, $fd093b5358e9a519);

		label642:

		goto label790;

		label643:

		$E59d0debc75e7be8 = self::$db->get_row();

		label647:

		goto label201;

		label648:
		if (empty($fd093b5358e9a519) && empty($f7107e3a92443147) && (strlen($ff5cf44f96903d64) == 32)) {
			goto label20;
		}

		goto label304;

		label661:

		self::$db->query('UPDATE `users` SET `isp_desc` = ? WHERE `id` = ?', $E59d0debc75e7be8['con_isp_name'], $E59d0debc75e7be8['id']);
		goto label680;

		label670:

		self::$db->query('UPDATE `lines` SET `isp_desc` = ?, `as_number` = ? WHERE `id` = ?', $E59d0debc75e7be8['con_isp_name'], $E59d0debc75e7be8['isp_asn'], $E59d0debc75e7be8['id']);

		label680:

		goto label61;

		label681:

		$E59d0debc75e7be8['allowed_outputs'] = [];
		goto label695;

		label684:

		$E59d0debc75e7be8['allowed_outputs'] = array_map('intval', json_decode($E59d0debc75e7be8['allowed_outputs'], true));

		label695:

		goto label604;

		label696:

		$E59d0debc75e7be8['isp_violate'] = 1;

		label698:
		if (!(($E59d0debc75e7be8['isp_violate'] == 0) && (strtolower($E59d0debc75e7be8['con_isp_name']) != strtolower($E59d0debc75e7be8['isp_desc'])))) {
			goto label75;
		}

		if (self::$rCached) {
			goto label62;
		}

		if (PLATFORM == 'xui') {
			goto label670;
		}

		goto label661;

		label722:

		goto label642;

		label723:

		if (PLATFORM == 'xui') {
			goto label636;
		}

		self::$db->query('SELECT * FROM `users` WHERE `username` = ? AND `password` = ? LIMIT 1', $ff5cf44f96903d64, $fd093b5358e9a519);
		goto label635;

		label734:

		self::verifyLicense();
		$E59d0debc75e7be8 = NULL;

		if (self::$rCached) {
			goto label648;
		}
		if (empty($fd093b5358e9a519) && empty($f7107e3a92443147) && (strlen($ff5cf44f96903d64) == 32)) {
			goto label791;
		}
		if (!empty($ff5cf44f96903d64) && !empty($fd093b5358e9a519)) {
			goto label723;
		}

		goto label50;

		label761:

		if (self::$rSettings['case_sensitive_line']) {
			goto label779;
		}

		$f7107e3a92443147 = intval(file_get_contents(LINES_TMP_PATH . 'line_t_' . strtolower($ff5cf44f96903d64)));
		goto label395;

		label779:

		$f7107e3a92443147 = intval(file_get_contents(LINES_TMP_PATH . 'line_t_' . $ff5cf44f96903d64));
		goto label395;

		label790:

		goto label920;

		label791:

		if (PLATFORM == 'xui') {
			goto label915;
		}

		return false;
		goto label920;
		goto label915;

		label798:

		$E59d0debc75e7be8['bouquet'] = json_decode($E59d0debc75e7be8['bouquet'], true);
		$E59d0debc75e7be8['allowed_ips'] = @array_filter(array_map('trim', json_decode($E59d0debc75e7be8['allowed_ips'], true)));
		$E59d0debc75e7be8['allowed_ua'] = @array_filter(array_map('trim', json_decode($E59d0debc75e7be8['allowed_ua'], true)));

		if (PLATFORM == 'xui') {
			goto label684;
		}

		goto label681;

		label842:

		if (!(0 < count($E59d0debc75e7be8['channel_ids']))) {
			goto label882;
		}

		foreach ($E59d0debc75e7be8['channel_ids'] as $ee6d1fc5d801b43f) {
			if (!isset($fb318e985b54877a[$ee6d1fc5d801b43f])) {
				goto label880;
			}

			foreach (array_values($fb318e985b54877a[$ee6d1fc5d801b43f]) as $fe63f70cd74f3298) {
				if (!($fe63f70cd74f3298 && !in_array($fe63f70cd74f3298, $F05acfe4a87b8eb0))) {
					goto label878;
				}

				$F05acfe4a87b8eb0[] = $fe63f70cd74f3298;

				label878:
			}

			label880:
		}

		label882:

		if (!(0 < count($E59d0debc75e7be8['series_ids']))) {
			goto label108;
		}

		goto label76;

		label891:

		if (self::$rSettings['case_sensitive_line']) {
			goto label914;
		}

		$f7107e3a92443147 = intval(file_get_contents(LINES_TMP_PATH . 'line_c_' . strtolower($ff5cf44f96903d64) . '_' . strtolower($fd093b5358e9a519)));
		goto label19;

		label914:

		goto label7;

		label915:

		self::$db->query('SELECT * FROM `lines` WHERE `is_mag` = 0 AND `is_e2` = 0 AND `access_token` = ? AND LENGTH(`access_token`) = 32', $ff5cf44f96903d64);

		label920:

		if (!(0 < self::$db->num_rows())) {
			goto label647;
		}

		goto label643;

		label928:
		if (!((PLATFORM == 'xui') && (self::$rSettings['show_isps'] == 1) && !empty($b38e11ffdc6a3abb))) {
			goto label409;
		}

		$d6525b7c1d8c7582 = self::D6b3157e40Ff47d6($b38e11ffdc6a3abb);

		if (!is_array($d6525b7c1d8c7582)) {
			goto label167;
		}

		if (empty($d6525b7c1d8c7582['isp'])) {
			goto label167;
		}

		$E59d0debc75e7be8['con_isp_name'] = $d6525b7c1d8c7582['isp'];
		goto label158;

		label959:

		goto label108;

		label960:

		$fb318e985b54877a = self::unserialize(file_get_contents(STREAMS_TMP_PATH . 'channels_categories'));
		$c0d75a4d66502538 = self::unserialize(file_get_contents(SERIES_TMP_PATH . 'series_categories'));
		goto label842;

		label979:
	}

	static public function C59E849742699501($Bb672d1983256a93, $ba2d146bb5a55097)
	{
		if (!(PLATFORM != 'xui')) {
			goto label8;
		}

		return false;

		label8:

		file_put_contents(SIGNALS_TMP_PATH . 'cache_' . md5($Bb672d1983256a93), json_encode([$Bb672d1983256a93, $ba2d146bb5a55097]));
	}

	static public function c3520d240f17DcB1()
	{
		foreach (self::$rServers as $C082ca9ed03f473c => $Ec379295dc7029e6) {
			if (!((isset($Ec379295dc7029e6['is_main']) && ($Ec379295dc7029e6['is_main'] == 1)) || (isset($Ec379295dc7029e6['can_delete']) && ($Ec379295dc7029e6['can_delete'] == 0)))) {
				goto label22;
			}

			return $C082ca9ed03f473c;

			label22:
		}

		return NULL;
	}

	static public function Ad72b4259ca295B2()
	{
		return $_SERVER['REMOTE_ADDR'];
	}

	static public function AeEA5D3137274f80($b38e11ffdc6a3abb = NULL)
	{
		goto label126;

		label2:

		file_put_contents($f6ff4010830f506a, json_encode(['requests' => 0, 'last_request' => time()]), LOCK_EX);
		goto label125;

		label16:

		$a0ad81cfc6461351 = json_decode(file_get_contents($f6ff4010830f506a), true);
		$dadc1de464d1afa3 = self::$rSettings['flood_seconds'];
		goto label99;

		label28:

		goto label81;

		label29:

		$a0ad81cfc6461351['requests']++;
		$a0ad81cfc6461351['last_request'] = time();
		file_put_contents($f6ff4010830f506a, json_encode($a0ad81cfc6461351), LOCK_EX);
		goto label72;

		label46:
		if (!(empty($b38e11ffdc6a3abb) || in_array($b38e11ffdc6a3abb, self::$rAllowedIPs))) {
			goto label58;
		}

		return NULL;

		label58:

		$d60462706e4336d6 = array_filter(array_unique(explode(',', self::$rSettings['flood_ips_exclude'])));
		goto label82;

		label72:

		if (!($D8bc2d87364696dd <= $a0ad81cfc6461351['requests'])) {
			goto label81;
		}

		sleep(10);
		exit();

		label81:

		goto label125;

		label82:

		if (!in_array($b38e11ffdc6a3abb, $d60462706e4336d6)) {
			goto label90;
		}

		return NULL;

		label90:

		$f6ff4010830f506a = TMP_PATH . $b38e11ffdc6a3abb;

		if (file_exists($f6ff4010830f506a)) {
			goto label16;
		}

		goto label2;

		label99:

		$D8bc2d87364696dd = self::$rSettings['flood_limit'];

		if ((time() - $a0ad81cfc6461351['last_request']) <= $dadc1de464d1afa3) {
			goto label29;
		}

		$a0ad81cfc6461351['requests'] = 0;
		$a0ad81cfc6461351['last_request'] = time();
		file_put_contents($f6ff4010830f506a, json_encode($a0ad81cfc6461351), LOCK_EX);
		goto label28;

		label125:

		goto label139;

		label126:

		if (!(self::$rSettings['flood_limit'] == 0)) {
			goto label133;
		}

		return NULL;

		label133:

		if ($b38e11ffdc6a3abb) {
			goto label46;
		}

		$b38e11ffdc6a3abb = self::aD72b4259Ca295b2();
		goto label46;

		label139:
	}

	static public function fca722697178454B($A7ca171405b19571, $af3ce326c4e9445e = NULL)
	{
		goto label32;

		label3:

		goto label48;

		label4:

		return '';
		goto label12;

		label6:

		return $B447bd0870faed42 . 'images/' . basename($A7ca171405b19571);

		label12:

		goto label3;

		label13:

		goto label3;

		label14:

		$E3665d09b9cea208 = explode(':', $A7ca171405b19571, 3);
		$B447bd0870faed42 = self::D7ee5125f91E2e04(intval($E3665d09b9cea208[1]), $af3ce326c4e9445e);

		if ($B447bd0870faed42) {
			goto label6;
		}

		goto label4;

		label32:

		if (!(PLATFORM != 'xui')) {
			goto label38;
		}

		return $A7ca171405b19571;

		label38:

		if (substr($A7ca171405b19571, 0, 2) == 's:') {
			goto label14;
		}

		return $A7ca171405b19571;
		goto label13;

		label48:
	}

	static public function d7ee5125F91e2e04($C082ca9ed03f473c = NULL, $af3ce326c4e9445e = NULL)
	{
		goto label128;

		label3:

		if (!(count($d41f77c23bf44d28) == 0)) {
			goto label11;
		}

		return '';

		label11:

		$Befea2b2ae7dbf72 = $C082ca9ed03f473c;
		goto label13;

		label13:

		$C082ca9ed03f473c = $d41f77c23bf44d28[array_rand($d41f77c23bf44d28)];

		label18:

		$C9febb240944fd1e = (defined('host') ? HOST : NULL);
		if ($C9febb240944fd1e && in_array(strtolower($C9febb240944fd1e), array_map('strtolower', self::$rServers[$C082ca9ed03f473c]['domains']['urls']))) {
			goto label138;
		}

		$f547aeca99c55c3e = (empty(self::$rServers[$C082ca9ed03f473c]['domain_name']) ? self::$rServers[$C082ca9ed03f473c]['server_ip'] : explode(',', self::$rServers[$C082ca9ed03f473c]['domain_name'])[0]);
		goto label137;

		label66:

		goto label68;

		label67:

		$Bf9be24c69c0f17b = $af3ce326c4e9445e;

		label68:

		goto label150;

		label69:
		if (isset($_SERVER['SERVER_PORT']) && self::$rSettings['keep_protocol']) {
			goto label82;
		}

		$Bf9be24c69c0f17b = self::$rServers[$C082ca9ed03f473c]['server_protocol'];
		goto label66;

		label82:
		$Bf9be24c69c0f17b = ((!empty($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] !== 'off')) || ($_SERVER['SERVER_PORT'] == 443) ? 'https' : 'http');
		goto label66;

		label101:
		if (!((self::$rServers[$C082ca9ed03f473c]['server_type'] == 1) && $Befea2b2ae7dbf72 && (self::$rServers[$Befea2b2ae7dbf72]['is_main'] == 0))) {
			goto label126;
		}

		$B447bd0870faed42 .= md5($C082ca9ed03f473c . '_' . $Befea2b2ae7dbf72 . '_' . OPENSSL_EXTRA) . '/';

		label126:

		return $B447bd0870faed42;

		label127:

		goto label184;

		label128:

		$Befea2b2ae7dbf72 = NULL;

		if (isset($C082ca9ed03f473c)) {
			goto label134;
		}

		$C082ca9ed03f473c = SERVER_ID;

		label134:

		if ($af3ce326c4e9445e) {
			goto label67;
		}

		goto label69;

		label137:

		goto label139;

		label138:

		$f547aeca99c55c3e = $C9febb240944fd1e;

		label139:

		$B447bd0870faed42 = $Bf9be24c69c0f17b . '://' . $f547aeca99c55c3e . ':' . self::$rServers[$C082ca9ed03f473c][$Bf9be24c69c0f17b . '_broadcast_port'] . '/';
		goto label101;

		label150:

		if (!self::$rServers[$C082ca9ed03f473c]) {
			goto label127;
		}

		if (!self::$rServers[$C082ca9ed03f473c]['enable_proxy']) {
			goto label18;
		}

		$d41f77c23bf44d28 = array_keys(self::getProxies($C082ca9ed03f473c));

		if (!(count($d41f77c23bf44d28) == 0)) {
			goto label3;
		}

		$d41f77c23bf44d28 = array_keys(self::getProxies($C082ca9ed03f473c, false));
		goto label3;

		label184:

		return NULL;
		goto label186;

		label186:
	}

	static public function getMovieTMDB($Abcb228699a7f743)
	{
		if (0 < strlen(self::$rSettings['tmdb_language'])) {
			goto label16;
		}

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key']);
		goto label25;

		label16:

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key'], self::$rSettings['tmdb_language']);

		label25:

		return $b41097c951ee83d3->getMovie($Abcb228699a7f743) ?: NULL;
	}

	static public function getSeriesTMDB($Abcb228699a7f743)
	{
		if (0 < strlen(self::$rSettings['tmdb_language'])) {
			goto label16;
		}

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key']);
		goto label25;

		label16:

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key'], self::$rSettings['tmdb_language']);

		label25:

		return json_decode($b41097c951ee83d3->getTVShow($Abcb228699a7f743)->getJSON(), true) ?: NULL;
	}

	static public function getSeasonTMDB($Abcb228699a7f743, $Bb9fda5ebf825f11)
	{
		if (0 < strlen(self::$rSettings['tmdb_language'])) {
			goto label17;
		}

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key']);
		goto label26;

		label17:

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key'], self::$rSettings['tmdb_language']);

		label26:

		return json_decode($b41097c951ee83d3->getSeason($Abcb228699a7f743, intval($Bb9fda5ebf825f11))->getJSON(), true);
	}

	static public function getSimilarMovies($Abcb228699a7f743, $D7209256c56b1469 = 1)
	{
		if (0 < strlen(self::$rSettings['tmdb_language'])) {
			goto label17;
		}

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key']);
		goto label26;

		label17:

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key'], self::$rSettings['tmdb_language']);

		label26:

		return json_decode(json_encode($b41097c951ee83d3->getSimilarMovies($Abcb228699a7f743, $D7209256c56b1469)), true);
	}

	static public function getSimilarSeries($Abcb228699a7f743, $D7209256c56b1469 = 1)
	{
		if (0 < strlen(self::$rSettings['tmdb_language'])) {
			goto label17;
		}

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key']);
		goto label26;

		label17:

		$b41097c951ee83d3 = new TMDB(self::$rSettings['tmdb_api_key'], self::$rSettings['tmdb_language']);

		label26:

		return json_decode(json_encode($b41097c951ee83d3->getSimilarSeries($Abcb228699a7f743, $D7209256c56b1469)), true);
	}

	static public function getYear($b87030f28ff32396, $Ccbdf03f8a4df633)
	{
		goto label99;

		label3:

		$Aab0552159527eb3 = 1;

		label4:

		if (!(0 < $Aab0552159527eb3)) {
			goto label132;
		}
		if (!((1900 <= $c33446be83a416e9) && ($c33446be83a416e9 <= intval(date('Y') + 1)))) {
			goto label132;
		}

		if (!empty($eca9936f0487fe83)) {
			goto label134;
		}

		goto label133;

		label27:

		$eca9936f0487fe83 = substr($Ccbdf03f8a4df633['releaseDate'], 0, 4);

		label34:

		$dc09dd4fd63b71f5 = '/\\(([0-9)]+)\\)/';
		preg_match($dc09dd4fd63b71f5, $b87030f28ff32396, $Ac97fb1939417214, PREG_OFFSET_CAPTURE, 0);
		$c33446be83a416e9 = NULL;
		goto label58;

		label45:

		$Aab0552159527eb3 = 2;

		label46:

		goto label4;

		label47:

		$c33446be83a416e9 = intval($Ac97fb1939417214[1][0]);
		goto label3;

		label54:

		return ['title' => $b87030f28ff32396, 'year' => $eca9936f0487fe83];
		goto label152;

		label58:

		$Aab0552159527eb3 = 0;

		if (count($Ac97fb1939417214) == 2) {
			goto label47;
		}

		$E3665d09b9cea208 = explode('-', $b87030f28ff32396);
		if (!((1 < count($E3665d09b9cea208)) && is_numeric(trim(end($E3665d09b9cea208))))) {
			goto label46;
		}

		$c33446be83a416e9 = intval(trim(end($E3665d09b9cea208)));
		goto label45;

		label99:

		$eca9936f0487fe83 = NULL;

		if (!isset($Ccbdf03f8a4df633['release_date'])) {
			goto label111;
		}

		$eca9936f0487fe83 = substr($Ccbdf03f8a4df633['release_date'], 0, 4);

		label111:

		if (!isset($Ccbdf03f8a4df633['releaseDate'])) {
			goto label34;
		}

		goto label27;

		label116:

		$b87030f28ff32396 = trim(preg_replace('!\\s+!', ' ', str_replace($Ac97fb1939417214[0][0], '', $b87030f28ff32396)));

		label132:

		goto label54;

		label133:

		$eca9936f0487fe83 = $c33446be83a416e9;

		label134:

		if ($Aab0552159527eb3 == 1) {
			goto label116;
		}

		$b87030f28ff32396 = trim(implode('-', array_slice($E3665d09b9cea208, 0, -1)));
		goto label132;
		goto label116;

		label152:
	}

	static public function verifyLicense()
	{
		if (extension_loaded('xui') && (PLATFORM == 'xui')) {
			goto label30;
		}

		$Ffc2f317a32f24c0 = self::getLicense();
		if (!(!$Ffc2f317a32f24c0 || ($Ffc2f317a32f24c0[5] != self::getMAC()) || ($Ffc2f317a32f24c0[3] < time()))) {
			goto label29;
		}

		exit('This server is unlicensed. Please check the billing panel for more information.');

		label29:

		goto label31;

		label30:

		return true;

		label31:
	}

	static public function encrypt($ba2d146bb5a55097, $F7df04783a436472, $Db0336509474eb3e)
	{
		return self::base64url_encode(openssl_encrypt($ba2d146bb5a55097, 'aes-256-cbc', md5(sha1($Db0336509474eb3e) . $F7df04783a436472), OPENSSL_RAW_DATA, substr(md5(sha1($F7df04783a436472)), 0, 16)));
	}

	static public function decrypt($ba2d146bb5a55097, $F7df04783a436472, $Db0336509474eb3e)
	{
		return openssl_decrypt(self::base64url_decode($ba2d146bb5a55097), 'aes-256-cbc', md5(sha1($Db0336509474eb3e) . $F7df04783a436472), OPENSSL_RAW_DATA, substr(md5(sha1($F7df04783a436472)), 0, 16));
	}

	static private function base64url_encode($ba2d146bb5a55097)
	{
		return rtrim(strtr(base64_encode($ba2d146bb5a55097), '+/', '-_'), '=');
	}

	static private function base64url_decode($ba2d146bb5a55097)
	{
		return base64_decode(strtr($ba2d146bb5a55097, '-_', '+/'));
	}

	static private function getLicense()
	{
		global $A8dfaf9c3f32573e;

		if ($A8dfaf9c3f32573e) {
			goto label5;
		}

		return NULL;
		goto label15;

		label5:

		return explode('::', self::decrypt($A8dfaf9c3f32573e, '0d01d1dc470b0b3a4d676ec49fb42261', 'faa33a7d87219846e40b75dbf5bc7932'));

		label15:
	}

	static public function getMAC()
	{
		exec('ip --json address list', $d094d3e133ec8c03);
		$Fee36b56c9a521cf = json_decode(implode('', $d094d3e133ec8c03), true);
		$ca155a1ae6a5bb31 = NULL;

		foreach ($Fee36b56c9a521cf as $B77c4808efe777e0) {
			foreach ($B77c4808efe777e0['addr_info'] as $B6de2c76015b2174) {
				if (!(($B6de2c76015b2174['label'] != 'lo') && !empty($B6de2c76015b2174['local']))) {
					goto label50;
				}
				if (!(filter_var($B77c4808efe777e0['address'], FILTER_VALIDATE_MAC) && ($B77c4808efe777e0['address'] != '00:00:00:00:00:00'))) {
					goto label50;
				}

				$ca155a1ae6a5bb31 = $B77c4808efe777e0['address'];
				goto label54;

				label50:
			}
		}

		label54:

		return $ca155a1ae6a5bb31;
	}

	static public function updateLicense($Ffc2f317a32f24c0 = NULL)
	{
		goto label73;

		label2:

		return NULL;

		label3:

		goto label98;

		label4:

		if ($Dbdc22406030e489['status']) {
			goto label12;
		}

		return $Dbdc22406030e489['error'] ?: 'Couldn\'t contact license server.';
		goto label3;

		label12:

		file_put_contents($Aada683fa06f68b7 . 'license.php', '<?php $rLicenseEnc = "' . str_replace('"', '\\"', $Dbdc22406030e489['license']) . '"; ?>');
		goto label2;

		label26:

		curl_setopt($Daaec03d386c8f6a, CURLOPT_POSTFIELDS, http_build_query(['data' => self::encrypt(json_encode(['license_key' => $Ffc2f317a32f24c0, 'mac' => $aa85eafe0b5a88a4]), '0d01d1dc470b0b3a4d676ec49fb42261', 'faa33a7d87219846e40b75dbf5bc7932')]));
		curl_setopt($Daaec03d386c8f6a, CURLOPT_POST, 1);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_TIMEOUT, 30);
		curl_setopt($Daaec03d386c8f6a, CURLOPT_RETURNTRANSFER, true);
		$Dbdc22406030e489 = json_decode(curl_exec($Daaec03d386c8f6a), true);
		goto label4;

		label73:

		global $a998abd856b07a59;
		global $Aada683fa06f68b7;

		if ($Ffc2f317a32f24c0) {
			goto label79;
		}

		$Ffc2f317a32f24c0 = $a998abd856b07a59['license'];

		label79:

		$aa85eafe0b5a88a4 = self::getMAC();
		goto label83;

		label83:

		if (!empty($aa85eafe0b5a88a4)) {
			goto label88;
		}

		return false;

		label88:

		$Daaec03d386c8f6a = curl_init();
		curl_setopt($Daaec03d386c8f6a, CURLOPT_URL, 'https://license.xui.one:2053/webplayer.php');
		goto label26;

		label98:
	}
}

function E79886964334425A($a5fd10913e5b22d3, $bbbe5eca9c8056cb)
{
	$E8d2f47901b176c3 = (isset($a5fd10913e5b22d3['stream_display_name']) ? 'stream_display_name' : 'title');
	return strcmp($a5fd10913e5b22d3[$E8d2f47901b176c3], $bbbe5eca9c8056cb[$E8d2f47901b176c3]);
}

function dBc3E29F55C945Ab()
{
	global $_SESSION;

	foreach (['phash', 'pverify'] as $Bb672d1983256a93) {
		if (!isset($_SESSION[$Bb672d1983256a93])) {
			goto label14;
		}

		unset($_SESSION[$Bb672d1983256a93]);

		label14:
	}
}

function sortArrayByArray($F647a429f8089f01, $C3552efd343ac0d5)
{
	if (!(empty($F647a429f8089f01) || empty($C3552efd343ac0d5))) {
	}
	else {
		return [];
	}

	$e6570651eec8c25e = [];

	foreach ($C3552efd343ac0d5 as $ce0840c647e1bbc7) {
		if (!(($Bb672d1983256a93 = array_search($ce0840c647e1bbc7, $F647a429f8089f01)) !== false)) {
			goto label26;
		}

		$e6570651eec8c25e[] = $ce0840c647e1bbc7;
		unset($F647a429f8089f01[$Bb672d1983256a93]);

		label26:
	}

	return $e6570651eec8c25e + $F647a429f8089f01;
}
if (!(!isset($A2369d6b9e3c5c6e) && (php_sapi_name() == 'cli'))) {
	goto label11;
}

exit();

label11:

session_start();
goto label66;

label14:

$E59d0debc75e7be8 = XUI::cC988751eebbF271($_SESSION['phash'], NULL, NULL, true);
if (!(!$E59d0debc75e7be8 || ($_SESSION['pverify'] != md5($E59d0debc75e7be8['username'] . '||' . $E59d0debc75e7be8['password'])) || (!is_null($E59d0debc75e7be8['exp_date']) && ($E59d0debc75e7be8['exp_date'] <= time())) || ($E59d0debc75e7be8['admin_enabled'] == 0) || ($E59d0debc75e7be8['enabled'] == 0))) {
	goto label308;
}

DBc3e29f55c945Ab();
header('Location: login.php');
goto label307;

label66:

list($Aada683fa06f68b7) = get_included_files();
$Aada683fa06f68b7 = pathinfo($Aada683fa06f68b7)['dirname'] . '/';

if (!file_exists('config.php')) {
	goto label84;
}

require_once 'config.php';

label84:

goto label405;

label85:

if (isset($_SESSION['phash'])) {
	goto label14;
}

header('Location: login.php');
exit();
goto label312;
goto label14;

label95:

foreach (['server_name', 'tmdb_api_key'] as $Bb672d1983256a93) {
	if (empty($a998abd856b07a59[$Bb672d1983256a93])) {
		goto label105;
	}

	XUI::$rSettings[$Bb672d1983256a93] = $a998abd856b07a59[$Bb672d1983256a93];

	label105:
}

XUI::$rSettings['player_hide_incompatible'] = false;
XUI::$rSettings['disable_hls'] = false;
goto label394;

label114:

define('PLATFORM', $a998abd856b07a59['platform']);
define('TMP_PATH', $a998abd856b07a59['tmp_path']);
define('CACHE_TMP_PATH', TMP_PATH);
if (!(TMP_PATH && !file_exists(TMP_PATH))) {
	goto label419;
}

goto label415;

label141:

$b62d6460eb33ea07->db_connect();
define('STREAMS_TMP_PATH', XUI_HOME . 'tmp/cache/streams/');
define('SERIES_TMP_PATH', XUI_HOME . 'tmp/cache/series/');
define('LINES_TMP_PATH', XUI_HOME . 'tmp/cache/lines/');
define('CONS_TMP_PATH', XUI_HOME . 'tmp/opened_cons/');
goto label313;

label168:

XUI::$rSettings['live_streaming_pass'] = md5(sha1((XUI::$rSettings['security_key'] ?: '') . XUI::$rServers[SERVER_ID]['server_name'] . XUI::$rServers[SERVER_ID]['server_ip']) . '5f13a731fb85944e5c69ce863b0c990d');

if (isset($A2369d6b9e3c5c6e)) {
	goto label432;
}
if (!(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on') && !XUI::$rServers[SERVER_ID]['enable_https'])) {
	goto label85;
}

header('Location: ' . XUI::$rServers[SERVER_ID]['http_url'] . ltrim($_SERVER['REQUEST_URI'], '/'));
exit();
goto label85;

label229:

define('PLATFORM', 'xui');
define('TMP_PATH', XUI_HOME . 'tmp/player/');
define('CACHE_TMP_PATH', XUI_HOME . 'tmp/cache/');

label245:

goto label419;
goto label114;

label247:

if (@$argc) {
	goto label285;
}

goto label270;

label257:

exit();
goto label245;

label259:

define('XUI_HOME', '/home/xui/');
define('BIN_PATH', XUI_HOME . 'bin/');
goto label229;

label270:

define('HOST', trim(explode(':', $_SERVER['HTTP_HOST'])[0]));

label285:

if (isset($a998abd856b07a59)) {
	goto label114;
}

if (extension_loaded('xui')) {
	goto label259;
}

echo 'No platform found.';
goto label257;

label295:

define('CONS_TMP_PATH', TMP_PATH);
define('CONTENT_PATH', TMP_PATH);

label305:

goto label337;

label306:

goto label141;

label307:

exit();

label308:

sort($E59d0debc75e7be8['bouquet']);

label312:

goto label432;

label313:

define('SIGNALS_TMP_PATH', XUI_HOME . 'tmp/signals/');
define('GEOLITE2_BIN', BIN_PATH . 'maxmind/GeoLite2.mmdb');
define('GEOISP_BIN', BIN_PATH . 'maxmind/GeoIP2-ISP.mmdb');
define('CONTENT_PATH', XUI_HOME . 'content/');

label337:

goto label338;

label338:

XUI::$db = &$b62d6460eb33ea07;
XUI::init();
define('SERVER_ID', XUI::C3520D240f17DCb1());

if (!(PLATFORM != 'xui')) {
	goto label400;
}

foreach (['player_allow_bouquet', 'player_allow_playlist', 'player_opacity', 'player_blur', 'tmdb_language'] as $Bb672d1983256a93) {
	XUI::$rSettings[$Bb672d1983256a93] = $a998abd856b07a59[$Bb672d1983256a93];
}

goto label95;

label362:

if (!PLATFORM) {
	goto label305;
}

$b62d6460eb33ea07->db_explicit_connect($a998abd856b07a59['db_host'], $a998abd856b07a59['db_port'], $a998abd856b07a59['db_name'], $a998abd856b07a59['db_user'], $a998abd856b07a59['db_pass']);
define('STREAMS_TMP_PATH', TMP_PATH);
define('SERIES_TMP_PATH', TMP_PATH);
define('LINES_TMP_PATH', TMP_PATH);
goto label295;

label394:

XUI::$rSettings['cloudflare'] = true;
XUI::$rSettings['custom_ip_header'] = NULL;

label400:

$E7d8244cf456584e = '1.1.8';
$E8870c6f95210f68 = XUI::A844f50027d143d3();
goto label168;

label405:

if (!file_exists('license.php')) {
	goto label412;
}

require_once 'license.php';

label412:

require_once 'libs/tmdb.php';
goto label247;

label415:

mkdir(TMP_PATH);

label419:

$b62d6460eb33ea07 = new Database();
if (extension_loaded('xui') && (PLATFORM == 'xui')) {
	goto label306;
}

goto label362;

label432:

?>