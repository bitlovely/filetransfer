<?php


class TVShow
{
	private $_data;

	public function __construct($Ae757d5b26893bfe)
	{
		$this->_data = $Ae757d5b26893bfe;
	}

	public function getID()
	{
		return $this->_data['id'];
	}

	public function getName()
	{
		return $this->_data['name'];
	}

	public function getOriginalName()
	{
		return $this->_data['original_name'];
	}

	public function getNumSeasons()
	{
		return $this->_data['number_of_seasons'];
	}

	public function getNumEpisodes()
	{
		return $this->_data['number_of_episodes'];
	}

	public function getSeason($c946fae44ff7a585)
	{
		foreach ($this->_data['seasons'] as $bd744d2caf073654) {
			if (!($bd744d2caf073654['season_number'] == $c946fae44ff7a585)) {
				goto label14;
			}

			$Ae757d5b26893bfe = $bd744d2caf073654;
			goto label16;

			label14:
		}

		label16:

		return new Season($Ae757d5b26893bfe);
	}

	public function AeBEd02c29877168()
	{
		$A634c56bdfea579d = [];

		foreach ($this->_data['seasons'] as $Ae757d5b26893bfe) {
			$A634c56bdfea579d[] = new Season($Ae757d5b26893bfe, $this->getID());
		}

		return $A634c56bdfea579d;
	}

	public function getPoster()
	{
		return $this->_data['poster_path'];
	}

	public function getBackdrop()
	{
		return $this->_data['backdrop_path'];
	}

	public function getOverview()
	{
		return $this->_data['overview'];
	}

	public function getVoteAverage()
	{
		return $this->_data['vote_average'];
	}

	public function getVoteCount()
	{
		return $this->_data['vote_count'];
	}

	public function getInProduction()
	{
		return $this->_data['in_production'];
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