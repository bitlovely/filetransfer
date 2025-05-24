<?php


class TVShowRole extends Role
{
	private $_data;

	public function __construct($Ae757d5b26893bfe, $Bb6efcdf5168c97c)
	{
		$this->_data = $Ae757d5b26893bfe;
		parent::__construct($Ae757d5b26893bfe, $Bb6efcdf5168c97c);
	}

	public function getTVShowName()
	{
		return $this->_data['name'];
	}

	public function getTVShowID()
	{
		return $this->_data['id'];
	}

	public function getTVShowOriginalTitle()
	{
		return $this->_data['original_name'];
	}

	public function getTVShowFirstAirDate()
	{
		return $this->_data['first_air_date'];
	}

	public function getJSON()
	{
		return json_encode($this->_data, JSON_PRETTY_PRINT);
	}
}

?>