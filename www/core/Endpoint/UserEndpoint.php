<?php

namespace Core\Endpoint;

class UserEndpoint extends ApiCaller {
	private $url;

	public function __construct($url) 
	{
		$this->url = $url;
	}

	public function getAll()
	{
		$results = $this->getAll($this->url);

		return $results;
	}

	public function postUser($user)
	{
		$this->post($this->url, $user);
	}
}
