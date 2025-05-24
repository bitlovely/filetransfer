<?php


class Person
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

	public function getProfile()
	{
		return $this->_data['profile_path'];
	}

	public function getBirthday()
	{
		return $this->_data['birthday'];
	}

	public function getPlaceOfBirth()
	{
		return $this->_data['place_of_birth'];
	}

	public function getImbdID()
	{
		return $this->_data['imdb_id'];
	}

	public function getPopularity()
	{
		return $this->_data['popularity'];
	}

	public function getMovieRoles()
	{
		$eb00082c9f55e629 = [];

		foreach ($this->_data['movie_credits']['cast'] as $Ae757d5b26893bfe) {
			$eb00082c9f55e629[] = new MovieRole($Ae757d5b26893bfe, $this->getID());
		}

		return $eb00082c9f55e629;
	}

	public function getTVShowRoles()
	{
		$c10583d190cc2f0e = [];

		foreach ($this->_data['tv_credits']['cast'] as $Ae757d5b26893bfe) {
			$c10583d190cc2f0e[] = new TVShowRole($Ae757d5b26893bfe, $this->getID());
		}

		return $c10583d190cc2f0e;
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