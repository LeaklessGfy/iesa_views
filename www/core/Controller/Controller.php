<?php

namespace Core\Controller;

use Core\Endpoint\ApiCaller;

class Controller {
	private $creds;

	public function __construct($api) 
	{
		$this->api = $api;
	}

	public function generate($router)
	{
		$router->map('GET', '/', function() {
    		require __DIR__ . '/../../views/home.php';
		});

		$router->map('GET', '/paul', function() {

		});

		$router->map('GET', '/endpoint', function() {
			$results = $this->api->get("users");
			exit(var_dump($results));
		});

		return $router;
	}
}
