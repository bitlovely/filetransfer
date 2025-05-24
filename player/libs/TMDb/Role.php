<?php


class Role
{
	private $_data;

	protected function __construct($Ae757d5b26893bfe, $Db2bde196b22f37f)
	{
		$this->_data = $Ae757d5b26893bfe;
		$this->_data['person_id'] = $Db2bde196b22f37f;
	}

	public function getCharacter()
	{
		return $this->_data['character'];
	}

	public function getPoster()
	{
		return $this->_data['poster_path'];
	}

	public function get($bfaffd59f038b138 = '')
	{
		return empty($bfaffd59f038b138) ? $this->_data : $this->_data[$bfaffd59f038b138];
	}
}

?>