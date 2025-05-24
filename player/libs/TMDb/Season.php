<?php


class Season
{
	private $_data;
	private $_idTVShow;

	public function __construct($Ae757d5b26893bfe, $cd6041978f7e8712 = 0)
	{
		$this->_data = $Ae757d5b26893bfe;
		$this->_data['tvshow_id'] = $cd6041978f7e8712;
	}

	public function getID()
	{
		return $this->_data['id'];
	}

	public function getName()
	{
		return $this->_data['name'];
	}

	public function getTVShowID()
	{
		return $this->_data['tvshow_id'];
	}

	public function getSeasonNumber()
	{
		return $this->_data['season_number'];
	}

	public function getNumEpisodes()
	{
		return count($this->_data['episodes']);
	}

	public function getEpisode($ccbec99512a46f53)
	{
		return new Episode($this->_data['episodes'][$ccbec99512a46f53]);
	}

	public function getEpisodes()
	{
		$E1903aedf514c722 = [];

		foreach ($this->_data['episodes'] as $Ae757d5b26893bfe) {
			$E1903aedf514c722[] = new Episode($Ae757d5b26893bfe, $this->getTVShowID());
		}

		return $E1903aedf514c722;
	}

	public function getPoster()
	{
		return $this->_data['poster_path'];
	}

	public function getAirDate()
	{
		return $this->_data['air_date'];
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