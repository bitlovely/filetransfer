<?php


class Database
{
	public $result;
	public $last_query;
	protected $key;
	public $dbh;
	public $connected = false;

	public function __construct($B9b6051782843c94 = NULL, $a33c575af08d2dd9 = false)
	{
		$this->dbh = false;

		if (!$B9b6051782843c94) {
			goto label12;
		}

		$this->key = $B9b6051782843c94;
		$this->db_connect($a33c575af08d2dd9);

		label12:
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

	public function db_connect($a33c575af08d2dd9 = false)
	{
		try {
			$this->dbh = Xui\Functions::connect($this->key, $a33c575af08d2dd9);

			if ($this->dbh) {
				goto label19;
			}

			if (!$a33c575af08d2dd9) {
				goto label15;
			}

			return false;

			label15:

			exit(json_encode(['error' => 'MySQL: Cannot connect to database! Please check credentials.']));
		}
		catch (PDOException $E0f0519e12b13b6b) {
			exit(json_encode(['error' => 'MySQL: ' . $E0f0519e12b13b6b->getMessage()]));
		}

		$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connected = true;
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
		return true;
	}

	public function debugString($Abe061fc0129a79b)
	{
		ob_start();
		$Abe061fc0129a79b->debugDumpParams();
		$Ad3bb587d14a74fe = ob_get_contents();
		ob_end_clean();
		return $Ad3bb587d14a74fe;
	}

	public function query($F3b2dd849fb4e793, $Efef92ddb7197c4b = false)
	{
		goto label3;

		label3:

		if (!$this->dbh) {
			goto label111;
		}

		$B564ac2c2a0450bc = func_num_args();
		$ba43a273a5037ea2 = func_get_args();
		$B154d50995d45e25 = [];
		$df6991d59f367c7e = 1;
		goto label21;

		label16:

		$B154d50995d45e25[] = NULL;

		label18:

		$df6991d59f367c7e++;
		goto label43;

		label21:

		if (!($df6991d59f367c7e < $B564ac2c2a0450bc)) {
			goto label44;
		}
		if (is_null($ba43a273a5037ea2[$df6991d59f367c7e]) || (strtolower($ba43a273a5037ea2[$df6991d59f367c7e]) == 'null')) {
			goto label16;
		}

		$B154d50995d45e25[] = $ba43a273a5037ea2[$df6991d59f367c7e];
		goto label18;
		goto label16;

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
			$cb99170d0eb2d5ca = trim(explode("\n", explode('Sent SQL:', $this->debugString($this->result))[1])[0]);

			if (!(strlen($cb99170d0eb2d5ca) == 0)) {
				goto label96;
			}

			$cb99170d0eb2d5ca = $F3b2dd849fb4e793;

			label96:

			if (!class_exists('XUI')) {
				goto label109;
			}

			XUI::fc023cd5aafC77F3('pdo', $E0f0519e12b13b6b->getMessage(), $cb99170d0eb2d5ca);

			label109:

			return false;
		}

		return true;

		label111:

		return false;
		goto label113;

		label113:
	}

	public function simple_query($F3b2dd849fb4e793)
	{
		try {
			$this->result = $this->dbh->query($F3b2dd849fb4e793);
		}
		catch (Exception $E0f0519e12b13b6b) {
			if (!class_exists('XUI')) {
				goto label22;
			}

			XUI::FC023CD5aafc77F3('pdo', $E0f0519e12b13b6b->getMessage(), $F3b2dd849fb4e793);

			label22:

			return false;
		}

		return true;
	}

	public function get_rows($E3b64e7de3fe7c53 = false, $D69f689c889eabec = '', $e01b7743d0e35da0 = true, $a038ec44c8b8bb32 = '')
	{
		if (!($this->dbh && $this->result)) {
			goto label105;
		}

		$e37bff7ee7fa7bd1 = [];

		if (!(0 < $this->result->rowCount())) {
			goto label102;
		}

		foreach ($this->result->fetchAll(PDO::FETCH_ASSOC) as $ead02b90b6e16dae) {
			goto label28;

			label28:
			if ($E3b64e7de3fe7c53 && array_key_exists($D69f689c889eabec, $ead02b90b6e16dae)) {
				goto label44;
			}

			$e37bff7ee7fa7bd1[] = $this->clean_row($ead02b90b6e16dae);
			goto label98;

			label44:

			if (isset($e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]])) {
				goto label54;
			}

			goto label51;

			label51:

			$e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]] = [];

			label54:

			if (!$e01b7743d0e35da0) {
				goto label68;
			}

			$e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]] = $this->clean_row($ead02b90b6e16dae);
			goto label98;
			goto label68;

			label68:
			if (!empty($a038ec44c8b8bb32) && array_key_exists($a038ec44c8b8bb32, $ead02b90b6e16dae)) {
				goto label88;
			}

			$e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]][] = $this->clean_row($ead02b90b6e16dae);
			goto label98;

			label88:

			goto label90;

			label90:

			$e37bff7ee7fa7bd1[$ead02b90b6e16dae[$D69f689c889eabec]][$ead02b90b6e16dae[$a038ec44c8b8bb32]] = $this->clean_row($ead02b90b6e16dae);

			label98:

			goto label100;

			label100:
		}

		label102:

		$this->result = NULL;
		return $e37bff7ee7fa7bd1;

		label105:

		return false;
	}

	public function get_row()
	{
		if (!($this->dbh && $this->result)) {
			goto label27;
		}

		$ead02b90b6e16dae = [];

		if (!(0 < $this->result->rowCount())) {
			goto label21;
		}

		$ead02b90b6e16dae = $this->result->fetch(PDO::FETCH_ASSOC);

		label21:

		$this->result = NULL;
		return $this->clean_row($ead02b90b6e16dae);

		label27:

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
		if (!$this->dbh) {
			goto label10;
		}

		return $this->dbh->quote($fcebf3d4e9466db0);

		label10:

		return NULL;
	}

	public function num_fields()
	{
		if (!($this->dbh && $this->result)) {
			goto label17;
		}

		$fd7ac75a03430f67 = $this->result->columnCount();
		return empty($fd7ac75a03430f67) ? 0 : $fd7ac75a03430f67;

		label17:

		return 0;
	}

	public function last_insert_id()
	{
		if (!$this->dbh) {
			goto label14;
		}

		$E857c1f443186a9d = $this->dbh->lastInsertId();
		return empty($E857c1f443186a9d) ? 0 : $E857c1f443186a9d;

		label14:

		return NULL;
	}

	public function num_rows()
	{
		if (!($this->dbh && $this->result)) {
			goto label17;
		}

		$c8e9fd6e9d106fa3 = $this->result->rowCount();
		return empty($c8e9fd6e9d106fa3) ? 0 : $c8e9fd6e9d106fa3;

		label17:

		return 0;
	}

	static public function FDebdB3616A89CE1($ce0840c647e1bbc7)
	{
		goto label2;

		label2:

		if (!($ce0840c647e1bbc7 == '')) {
			goto label7;
		}

		return '';

		label7:

		$ce0840c647e1bbc7 = str_replace(["\r\n", "\n\r", "\r"], "\n", $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = str_replace('<', '&lt;', str_replace('>', '&gt;', $ce0840c647e1bbc7));
		goto label25;

		label25:

		$ce0840c647e1bbc7 = str_replace('<!--', '&#60;&#33;--', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = str_replace('-->', '--&#62;', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = str_ireplace('<script', '&#60;script', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = preg_replace('/&amp;#([0-9]+);/s', '&#\\1;', $ce0840c647e1bbc7);
		$ce0840c647e1bbc7 = preg_replace('/&#(\\d+?)([^\\d;])/i', '&#\\1;\\2', $ce0840c647e1bbc7);
		goto label56;

		label56:

		return trim($ce0840c647e1bbc7);
		goto label61;

		label61:
	}

	public function clean_row($ead02b90b6e16dae)
	{
		foreach ($ead02b90b6e16dae as $B9b6051782843c94 => $Dd720b88efeee5c3) {
			if (!$Dd720b88efeee5c3) {
			}
			else {
				$ead02b90b6e16dae[$B9b6051782843c94] = self::FdEBDb3616A89cE1($Dd720b88efeee5c3);
			}
		}

		return $ead02b90b6e16dae;
	}
}

?>