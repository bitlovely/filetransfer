<?php


class Company
{
	private $_data;

	public function __construct($Ae757d5b26893bfe)
	{
		$this->_data = $Ae757d5b26893bfe;
	}

	public function getName()
	{
		return $this->_data['name'];
	}

	public function getID()
	{
		return $this->_data['id'];
	}

	public function getDescription()
	{
		return $this->_data['description'];
	}

	public function getHeadquarters()
	{
		return $this->_data['headquarters'];
	}

	public function getHomepage()
	{
		return $this->_data['homepage'];
	}

	public function getLogo()
	{
		return $this->_data['logo_path'];
	}

	public function getParentCompanyID()
	{
		return $this->_data['parent_company'];
	}

	public function getMovies()
	{
		$f14aac46bd8beb89 = [];

		foreach ($this->_data['movies']['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function get($bfaffd59f038b138 = '')
	{
		return empty($bfaffd59f038b138) ? $this->_data : $this->_data[$bfaffd59f038b138];
	}

	public function getJSON()
	{
		return json_encode($this->_data, JSON_PRETTY_PRINT);
	}
}

?>