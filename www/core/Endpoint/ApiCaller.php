<?php 

namespace Core\Endpoint;

class ApiCaller {
	private $base_url;
	private $port;

	public function __construct($creds)
	{
		$this->baseUrl = $creds->getApiUrl();
		$this->port = $creds->getApiPort();
	}

	public function generateUrl($url)
	{
		return $this->baseUrl . ":" . $this->port . "/" . $url;
	}

	public function get($url, $opts = array())
	{
		$url = $this->generateUrl($url);

		try {
			$results = file_get_contents($url);
		} catch(Exception $e) {
			$results = $e;
		}
		
		return json_decode($results, true);
	}

	public function post($url, $opts)
	{
		$url = $this->generateUrl($url);
		//Handle post logic
	}

	public function put($url, $opts)
	{
		$url = $this->generateUrl($url);
		//Handle put logic
	}

	public function delete($url, $opts)
	{
		$url = $this->generateUrl($url);
		//Handle delete logic
	}
}
