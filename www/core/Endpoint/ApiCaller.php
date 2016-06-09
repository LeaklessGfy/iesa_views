<?php 

namespace Core\Endpoint;

class ApiCaller {
	private $base_url;
	private $port;

	public function __construct($base_url, $port)
	{
		$this->base_url = $base_url;
		$this->port = $port; 
	}

	public function generateUrl($url)
	{
		return $this->base_url . ":" . $this->port . "/" . $url;
	}

	public function get($url, $opts)
	{
		$url = $this->generateUrl($url);
		
		return file_get_contents($url);
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
