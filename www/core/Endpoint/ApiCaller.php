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

	public function generateUrl($url, $opts = array())
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

	public function get($url, $opts = array())
	{
		$url = $this->generateUrl($url, $opts);

		if($results = file_get_contents($url)) {
			return json_decode($results, true);
		}
		
		return false;
	}

	public function post($url, $opts, $tokens = null)
	{
		$url = $this->generateUrl($url);

		$tok = "";
		if($tokens) {
			$tok = "TokenId: " . $tokens['id'] . "\r\nToken: " . $tokens['password'];
		}

		$options = array(
			'http' => array(
				'header' => "Content-type: application/json\r\n" . $tok,
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

	public function put($url, $opts)
	{
		$user = unserialize($_SESSION['user']);
		$url = $this->generateUrl($url);
		
		$options = array(
			'http' => array(
				'header' => "Content-type: application/json\r\nToken: " . $user->getPassword() . "\r\n",
				'method' => "PUT",
				'content' => json_encode($opts)
			)
		);

		$context = stream_context_create($options);

		if($results = file_get_contents($url, false, $context)) {
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
