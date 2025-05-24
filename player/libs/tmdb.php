<?php


class TMDB
{
	public const Ccb37d194fcaf0ef = 'http://api.themoviedb.org/3/';
	public const a1f3838b40110e3f = '0.0.3.0';

	private $_config;
	private $_apikey;
	private $_lang;
	private $_adult;
	private $_apiconfiguration;
	private $_debug;

	public function __construct($a51800349cf8965f = NULL, $d6633f00b24396e2 = NULL, $b61f4585b85f80e3 = NULL, $C29e5cdafdb8af43 = NULL)
	{
		require_once 'TMDb/config/config.php';
		$this->setConfig($af98337fbd3c3a9c);
		$this->setApikey(isset($a51800349cf8965f) ? $a51800349cf8965f : $af98337fbd3c3a9c['apikey']);
		$this->setLang(isset($d6633f00b24396e2) ? $d6633f00b24396e2 : $af98337fbd3c3a9c['lang']);
		$this->setAdult(isset($b61f4585b85f80e3) ? $b61f4585b85f80e3 : $af98337fbd3c3a9c['adult']);
		$this->setDebug(isset($C29e5cdafdb8af43) ? $C29e5cdafdb8af43 : $af98337fbd3c3a9c['debug']);

		if ($this->_loadConfig()) {
			goto label53;
		}

		echo _('Unable to read configuration, verify that the API key is valid');
		exit();

		label53:
	}

	private function setConfig($c9b7f5ad275bdd3a)
	{
		$this->_config = $c9b7f5ad275bdd3a;
	}

	private function getConfig()
	{
		return $this->_config;
	}

	private function setApikey($a51800349cf8965f)
	{
		$this->_apikey = (string) $a51800349cf8965f;
	}

	private function getApikey()
	{
		return $this->_apikey;
	}

	public function setLang($d6633f00b24396e2 = 'en')
	{
		$this->_lang = (string) $d6633f00b24396e2;
	}

	public function getLang()
	{
		return $this->_lang;
	}

	public function setAdult($b61f4585b85f80e3 = false)
	{
		$this->_adult = $b61f4585b85f80e3;
	}

	public function getAdult()
	{
		return $this->_adult ? 'true' : 'false';
	}

	public function setDebug($C29e5cdafdb8af43 = false)
	{
		$this->_debug = $C29e5cdafdb8af43;
	}

	public function getDebug()
	{
		return $this->_debug;
	}

	private function _loadConfig()
	{
		$this->_apiconfiguration = new APIConfiguration($this->_call('configuration'));
		return !empty($this->_apiconfiguration);
	}

	public function getAPIConfig()
	{
		return $this->_apiconfiguration;
	}

	public function getImageURL($size = 'original')
	{
		return $this->_apiconfiguration->getImageBaseURL() . $size;
	}

	public function getDiscoverMovies($b669f99ffc6c6dd1 = 1)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('discover/movie', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function getDiscoverTVShows($b669f99ffc6c6dd1 = 1)
	{
		$eef0de83929edb0b = [];
		$fce92a8fdd7f418c = $this->_call('discover/tv', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$eef0de83929edb0b[] = new TVShow($Ae757d5b26893bfe);
		}

		return $eef0de83929edb0b;
	}

	public function getDiscoverMovie($b669f99ffc6c6dd1 = 1)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('discover/movie', 'page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function getLatestMovie()
	{
		return new Movie($this->_call('movie/latest'));
	}

	public function getNowPlayingMovies($b669f99ffc6c6dd1 = 1)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('movie/now_playing', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function getPopularMovies($b669f99ffc6c6dd1 = 1)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('movie/popular', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function getTopRatedMovies($b669f99ffc6c6dd1 = 1)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('movie/top_rated', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function getUpcomingMovies($b669f99ffc6c6dd1 = 1)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('movie/upcoming', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function getSimilarMovies($B361603840197dca, $b669f99ffc6c6dd1 = 1)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('movie/' . $B361603840197dca . '/similar', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function getLatestTVShow()
	{
		return new TVShow($this->_call('tv/latest'));
	}

	public function getOnTheAirTVShows($b669f99ffc6c6dd1 = 1)
	{
		$eef0de83929edb0b = [];
		$fce92a8fdd7f418c = $this->_call('tv/on_the_air', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$eef0de83929edb0b[] = new TVShow($Ae757d5b26893bfe);
		}

		return $eef0de83929edb0b;
	}

	public function getSimilarSeries($B361603840197dca, $b669f99ffc6c6dd1 = 1)
	{
		$fce92a8fdd7f418c = $this->_call('tv/' . $B361603840197dca . '/similar', '&page=' . $b669f99ffc6c6dd1);
		return $fce92a8fdd7f418c['results'];
	}

	public function getAiringTodayTVShows($b669f99ffc6c6dd1 = 1, $Bed6a5289a45d849 = 'Europe/Madrid')
	{
		$eef0de83929edb0b = [];
		$fce92a8fdd7f418c = $this->_call('tv/airing_today', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$eef0de83929edb0b[] = new TVShow($Ae757d5b26893bfe);
		}

		return $eef0de83929edb0b;
	}

	public function getTopRatedTVShows($b669f99ffc6c6dd1 = 1)
	{
		$eef0de83929edb0b = [];
		$fce92a8fdd7f418c = $this->_call('tv/top_rated', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$eef0de83929edb0b[] = new TVShow($Ae757d5b26893bfe);
		}

		return $eef0de83929edb0b;
	}

	public function getPopularTVShows($b669f99ffc6c6dd1 = 1)
	{
		$eef0de83929edb0b = [];
		$fce92a8fdd7f418c = $this->_call('tv/popular', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$eef0de83929edb0b[] = new TVShow($Ae757d5b26893bfe);
		}

		return $eef0de83929edb0b;
	}

	public function getLatestPerson()
	{
		return new Person($this->_call('person/latest'));
	}

	public function getPopularPersons($b669f99ffc6c6dd1 = 1)
	{
		$d63585658a34374b = [];
		$fce92a8fdd7f418c = $this->_call('person/popular', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$d63585658a34374b[] = new Person($Ae757d5b26893bfe);
		}

		return $d63585658a34374b;
	}

	private function _call($e33d7b9c6305435e, $c8bf29b8210cadd5 = '')
	{
		goto label42;

		label3:

		curl_setopt($ab701fbbd66214d9, CURLOPT_URL, $a3ad18f2da1c7178);
		curl_setopt($ab701fbbd66214d9, CURLOPT_HEADER, 0);
		curl_setopt($ab701fbbd66214d9, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ab701fbbd66214d9, CURLOPT_FAILONERROR, 1);
		$aa5b0aa0f01104f9 = curl_exec($ab701fbbd66214d9);
		goto label32;

		label32:

		curl_close($ab701fbbd66214d9);
		return (array) json_decode($aa5b0aa0f01104f9, true);
		goto label74;

		label42:

		$a3ad18f2da1c7178 = 'http://api.themoviedb.org/3/' . $e33d7b9c6305435e . '?api_key=' . $this->getApikey() . '&language=' . $this->getLang() . '&append_to_response=' . implode(',', (array) $c8bf29b8210cadd5) . '&include_adult=' . $this->getAdult();

		if (!$this->_debug) {
			goto label70;
		}

		echo '<pre><a href="' . $a3ad18f2da1c7178 . '">check request</a></pre>';

		label70:

		$ab701fbbd66214d9 = curl_init();
		goto label3;

		label74:
	}

	public function getMovie($f54d717f4b11d11a, $c8bf29b8210cadd5 = NULL)
	{
		$c8bf29b8210cadd5 = (isset($c8bf29b8210cadd5) ? $c8bf29b8210cadd5 : $this->getConfig()['appender']['movie']['default']);
		return new Movie($this->_call('movie/' . $f54d717f4b11d11a, $c8bf29b8210cadd5));
	}

	public function getTVShow($cd6041978f7e8712, $c8bf29b8210cadd5 = NULL)
	{
		$c8bf29b8210cadd5 = (isset($c8bf29b8210cadd5) ? $c8bf29b8210cadd5 : $this->getConfig()['appender']['tvshow']['default']);
		return new TVShow($this->_call('tv/' . $cd6041978f7e8712, $c8bf29b8210cadd5));
	}

	public function getSeason($cd6041978f7e8712, $c946fae44ff7a585, $c8bf29b8210cadd5 = NULL)
	{
		$c8bf29b8210cadd5 = (isset($c8bf29b8210cadd5) ? $c8bf29b8210cadd5 : $this->getConfig()['appender']['season']['default']);
		return new Season($this->_call('tv/' . $cd6041978f7e8712 . '/season/' . $c946fae44ff7a585, $c8bf29b8210cadd5), $cd6041978f7e8712);
	}

	public function getEpisode($cd6041978f7e8712, $c946fae44ff7a585, $ccbec99512a46f53, $c8bf29b8210cadd5 = NULL)
	{
		$c8bf29b8210cadd5 = (isset($c8bf29b8210cadd5) ? $c8bf29b8210cadd5 : $this->getConfig()['appender']['episode']['default']);
		return new Episode($this->_call('tv/' . $cd6041978f7e8712 . '/season/' . $c946fae44ff7a585 . '/episode/' . $ccbec99512a46f53, $c8bf29b8210cadd5), $cd6041978f7e8712);
	}

	public function getPerson($Bb6efcdf5168c97c, $c8bf29b8210cadd5 = NULL)
	{
		$c8bf29b8210cadd5 = (isset($c8bf29b8210cadd5) ? $c8bf29b8210cadd5 : $this->getConfig()['appender']['person']['default']);
		return new Person($this->_call('person/' . $Bb6efcdf5168c97c, $c8bf29b8210cadd5));
	}

	public function getCollection($B3297c2fc2a77fbc, $c8bf29b8210cadd5 = NULL)
	{
		$c8bf29b8210cadd5 = (isset($c8bf29b8210cadd5) ? $c8bf29b8210cadd5 : $this->getConfig()['appender']['collection']['default']);
		return new Collection($this->_call('collection/' . $B3297c2fc2a77fbc, $c8bf29b8210cadd5));
	}

	public function getCompany($e27d01e126afa317, $c8bf29b8210cadd5 = NULL)
	{
		$c8bf29b8210cadd5 = (isset($c8bf29b8210cadd5) ? $c8bf29b8210cadd5 : $this->getConfig()['appender']['company']['default']);
		return new Company($this->_call('company/' . $e27d01e126afa317, $c8bf29b8210cadd5));
	}

	public function searchMovie($d8ee6f12b04ddf57)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('search/movie', '&query=' . urlencode($d8ee6f12b04ddf57));

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}

	public function searchTVShow($Adcae15910703b49)
	{
		$eef0de83929edb0b = [];
		$fce92a8fdd7f418c = $this->_call('search/tv', '&query=' . urlencode($Adcae15910703b49));

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$eef0de83929edb0b[] = new TVShow($Ae757d5b26893bfe);
		}

		return $eef0de83929edb0b;
	}

	public function searchPerson($dbf7a631f276f236)
	{
		$d63585658a34374b = [];
		$fce92a8fdd7f418c = $this->_call('search/person', '&query=' . urlencode($dbf7a631f276f236));

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$d63585658a34374b[] = new Person($Ae757d5b26893bfe);
		}

		return $d63585658a34374b;
	}

	public function searchCollection($bb2f2cbe38f65000)
	{
		$D0222b2b366963dc = [];
		$fce92a8fdd7f418c = $this->_call('search/collection', '&query=' . urlencode($bb2f2cbe38f65000));

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$D0222b2b366963dc[] = new Collection($Ae757d5b26893bfe);
		}

		return $D0222b2b366963dc;
	}

	public function searchCompany($e091403bfca7d2f3)
	{
		$e6144f538554144f = [];
		$fce92a8fdd7f418c = $this->_call('search/company', '&query=' . urlencode($e091403bfca7d2f3));

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$e6144f538554144f[] = new Company($Ae757d5b26893bfe);
		}

		return $e6144f538554144f;
	}

	public function find($B361603840197dca, $c6deee8a7ad758cc = 'imdb_id')
	{
		goto label26;

		label3:

		foreach ($fce92a8fdd7f418c['tv_results'] as $Ae757d5b26893bfe) {
			$f2d55a36e57a9527['tvshows'][] = new TVShow($Ae757d5b26893bfe);
		}

		foreach ($fce92a8fdd7f418c['tv_season_results'] as $Ae757d5b26893bfe) {
			$f2d55a36e57a9527['seasons'][] = new Season($Ae757d5b26893bfe);
		}

		goto label60;

		label26:

		$f2d55a36e57a9527 = [];
		$fce92a8fdd7f418c = $this->_call('find/' . $B361603840197dca, '&external_source=' . urlencode($c6deee8a7ad758cc));

		foreach ($fce92a8fdd7f418c['movie_results'] as $Ae757d5b26893bfe) {
			$f2d55a36e57a9527['movies'][] = new Movie($Ae757d5b26893bfe);
		}

		foreach ($fce92a8fdd7f418c['person_results'] as $Ae757d5b26893bfe) {
			$f2d55a36e57a9527['persons'][] = new Person($Ae757d5b26893bfe);
		}

		goto label3;

		label60:

		foreach ($fce92a8fdd7f418c['tv_episode_results'] as $Ae757d5b26893bfe) {
			$f2d55a36e57a9527['episodes'][] = new Episode($Ae757d5b26893bfe);
		}

		return $f2d55a36e57a9527;
		goto label73;

		label73:
	}

	public function getTimezones()
	{
		return $this->_call('timezones/list');
	}

	public function getJobs()
	{
		return $this->_call('job/list');
	}

	public function getMovieGenres()
	{
		$C51ba9089097f5b6 = [];
		$fce92a8fdd7f418c = $this->_call('genre/movie/list');

		foreach ($fce92a8fdd7f418c['genres'] as $Ae757d5b26893bfe) {
			$C51ba9089097f5b6[] = new Genre($Ae757d5b26893bfe);
		}

		return $C51ba9089097f5b6;
	}

	public function getTVGenres()
	{
		$C51ba9089097f5b6 = [];
		$fce92a8fdd7f418c = $this->_call('genre/tv/list');

		foreach ($fce92a8fdd7f418c['genres'] as $Ae757d5b26893bfe) {
			$C51ba9089097f5b6[] = new Genre($Ae757d5b26893bfe);
		}

		return $C51ba9089097f5b6;
	}

	public function getMoviesByGenre($D8c02646c5d1acef, $b669f99ffc6c6dd1 = 1)
	{
		$f14aac46bd8beb89 = [];
		$fce92a8fdd7f418c = $this->_call('genre/' . $D8c02646c5d1acef . '/movies', '&page=' . $b669f99ffc6c6dd1);

		foreach ($fce92a8fdd7f418c['results'] as $Ae757d5b26893bfe) {
			$f14aac46bd8beb89[] = new Movie($Ae757d5b26893bfe);
		}

		return $f14aac46bd8beb89;
	}
}

goto label10;

label1:

include 'TMDb/Role.php';
include 'TMDb/roles/MovieRole.php';
include 'TMDb/roles/TVShowRole.php';
include 'TMDb/Collection.php';
include 'TMDb/Company.php';
goto label7;

label7:

include 'TMDb/Genre.php';
include 'TMDb/config/APIConfiguration.php';
goto label16;

label10:

include 'TMDb/Movie.php';
include 'TMDb/TVShow.php';
include 'TMDb/Season.php';
include 'TMDb/Episode.php';
include 'TMDb/Person.php';
goto label1;

label16:

?>