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

		$router->map('GET', '/endpoint', function() {
			$results = $this->api->get("users");
			exit(var_dump($results));
		});

		$router->map('GET|POST', '/connexion', function() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				$user = $_POST['user'];

				$result = $this->api->get("users");

				if($result) {
					$_SESSION['username'] = $user['name'];
				}
			}

			require __DIR__ . '/../../views/login.php';
		});

		return $router;
	}
}
