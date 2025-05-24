<?php


class Episode
{
	private $_data;

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

	public function getEpisodeNumber()
	{
		return $this->_data['episode_number'];
	}

	public function getOverview()
	{
		return $this->_data['overview'];
	}

	public function getStill()
	{
		return $this->_data['still_path'];
	}

	public function getAirDate()
	{
		return $this->_data['air_date'];
	}

	public function getVoteAverage()
	{
		return $this->_data['vote_average'];
	}

	public function getVoteCount()
	{
		return $this->_data['vote_count'];
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