<?php


class Review
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

	public function getAuthor()
	{
		return $this->_data['author'];
	}

	public function getContent()
	{
		return $this->_data['content'];
	}

	public function c6ceEc588476ec43()
	{
		return $this->_data['url'];
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