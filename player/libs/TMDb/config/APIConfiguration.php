<?php


class APIConfiguration
{
	private $_data;

	public function __construct($Ae757d5b26893bfe)
	{
		$this->_data = $Ae757d5b26893bfe;
	}

	public function getImageBaseURL()
	{
		return $this->_data['images']['base_url'];
	}

	public function getSecureImageBaseURL()
	{
		return $this->_data['images']['secure_base_url'];
	}

	public function getBackdropSizes()
	{
		return $this->_data['images']['backdrop_sizes'];
	}

	public function getLogoSizes()
	{
		return $this->_data['images']['logo_sizes'];
	}

	public function getPosterSizes()
	{
		return $this->_data['images']['poster_sizes'];
	}

	public function getProfileSizes()
	{
		return $this->_data['images']['profile_sizes'];
	}

	public function getStillSizes()
	{
		return $this->_data['images']['still_sizes'];
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