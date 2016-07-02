<?php 

namespace Core\Endpoint;

/**
 * @author Vincent Rasquier
 * Endpoint through API
 */
class ApiCaller {
	private $baseUrl;
	private $port;
	private $entry;

	public function __construct($creds)
	{
		$this->baseUrl = $creds->getApiUrl();
		$this->port = $creds->getApiPort();
		$this->entry = $creds->getApiEntry();
	}

	private function generateUrl($url, $opts = array())
	{
		$param = "";
		$length = count($opts);
		$i = 1;

		foreach ($opts as $key => $value) {
			$param = $param . $key . "=" . $value;

			if($i < $length) {
				$param = $param . "&";
			}
		}

		return $this->baseUrl . $this->port . $this->entry . $url . "?" . $param;
	}

	private function getTokens($tokens) 
	{
		$tok = "";
		if($tokens) {
			$tok = "TokensId: " . $tokens['id'] . "\r\nTokens: " . $tokens['password'];
		}

		return $tok;
	}

	public function get($url, $opts = array())
	{
		$url = $this->generateUrl($url, $opts);

		if($results = @file_get_contents($url)) {
			return json_decode($results, true);
		}
		
		return false;
	}

	public function post($url, $opts, $tokens = null)
	{
		$url = $this->generateUrl($url);
		$tokens = $this->getTokens($tokens);

		$options = array(
			'http' => array(
				'header' => "Content-type: application/json\r\n" . $tokens,
				'method' => "POST",
				'content' => json_encode($opts)
			)
		);

		$context = stream_context_create($options);

		if($results = @file_get_contents($url, false, $context)) {
			return json_decode($results, true);
		}

		return false;
	}

	public function put($url, $opts, $tokens = null)
	{
		$url = $this->generateUrl($url);
		$tokens = $this->getTokens($tokens);
		
		$options = array(
			'http' => array(
				'header' => "Content-type: application/json\r\n" . $tokens,
				'method' => "PUT",
				'content' => json_encode($opts)
			)
		);

		$context = stream_context_create($options);

		if($results = @file_get_contents($url, false, $context)) {
			return json_decode($results, true);
		}

		return false;
	}

	public function delete($url, $opts)
	{
		$url = $this->generateUrl($url);
		//Handle delete logic
	}
}
