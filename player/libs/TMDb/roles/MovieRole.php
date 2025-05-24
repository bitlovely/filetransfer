<?php


class MovieRole extends Role
{
	private $_data;

	public function __construct($Ae757d5b26893bfe, $Bb6efcdf5168c97c)
	{
		$this->_data = $Ae757d5b26893bfe;
		parent::__construct($Ae757d5b26893bfe, $Bb6efcdf5168c97c);
	}

	public function getMovieTitle()
	{
		return $this->_data['title'];
	}

	public function getMovieID()
	{
		return $this->_data['id'];
	}

	public function getMovieOriginalTitle()
	{
		return $this->_data['original_title'];
	}

	public function getMovieReleaseDate()
	{
		return $this->_data['release_date'];
	}

	public function getJSON()
	{
		return json_encode($this->_data, JSON_PRETTY_PRINT);
	}
}

?>