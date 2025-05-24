<?php


class Movie
{
	public $_data;
	public $_tmdb;

	public function __construct($Ae757d5b26893bfe)
	{
		$this->_data = $Ae757d5b26893bfe;
	}

	public function getID()
	{
		return $this->_data['id'];
	}

	public function getTitle()
	{
		return $this->_data['title'];
	}

	public function getTagline()
	{
		return $this->_data['tagline'];
	}

	public function getPoster()
	{
		return $this->_data['poster_path'];
	}

	public function getVoteAverage()
	{
		return $this->_data['vote_average'];
	}

	public function getVoteCount()
	{
		return $this->_data['vote_count'];
	}

	public function getTrailers()
	{
		return $this->_data['trailers'];
	}

	public function getTrailer()
	{
		$Dcdce11dc928a03e = $this->getTrailers();
		return $Dcdce11dc928a03e['youtube'][0]['source'];
	}

	public function getGenres()
	{
		$C51ba9089097f5b6 = [];

		foreach ($this->_data['genres'] as $Ae757d5b26893bfe) {
			$C51ba9089097f5b6[] = new Genre($Ae757d5b26893bfe);
		}

		return $C51ba9089097f5b6;
	}

	public function getReviews()
	{
		$f9637afc38682822 = [];

		foreach ($this->_data['review']['result'] as $Ae757d5b26893bfe) {
			$f9637afc38682822[] = new Review($Ae757d5b26893bfe);
		}

		return $f9637afc38682822;
	}

	public function getCompanies()
	{
		$e6144f538554144f = [];

		foreach ($this->_data['production_companies'] as $Ae757d5b26893bfe) {
			$e6144f538554144f[] = new Company($Ae757d5b26893bfe);
		}

		return $e6144f538554144f;
	}

	public function get($bfaffd59f038b138 = '')
	{
		return empty($bfaffd59f038b138) ? $this->_data : $this->_data[$bfaffd59f038b138];
	}

	public function setAPI($ad49c670d6a0dda8)
	{
		$this->_tmdb = $ad49c670d6a0dda8;
	}

	public function getJSON()
	{
		return json_encode($this->_data, JSON_PRETTY_PRINT);
	}
}

?>