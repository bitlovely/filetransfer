<?php


class Collection
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

	public function getOverview()
	{
		return $this->_data['overview'];
	}

	public function getPoster()
	{
		return $this->_data['poster_path'];
	}

	public function getBackdrop()
	{
		return $this->_data['backdrop_path'];
	}

	public function getMovies()
	{
		$f14aac46bd8beb89 = [];

		foreach ($this->_data['parts'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function get($bfaffd59f038b138 = '')
	{
		return empty($bfaffd59f038b138) ? $this->_data : $this->_data[$bfaffd59f038b138];
	}
}

?>