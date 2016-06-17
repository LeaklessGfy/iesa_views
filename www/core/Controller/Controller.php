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
    		require __DIR__ . '/../../views/index.php';
		});

		$router->map('GET', '/endpoint', function() {
			$results = $this->api->get("users");
			exit(var_dump($results));
		});

		$router->map('GET', '/ranking', function() {
			$results = $this->api->get("users");
			require __DIR__ . '/../../views/ranking.php';
		});

		$router->map('GET', '/api/ranking', function() {
			$results = $this->api->get($_GET['data']);

			echo json_encode($results);
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

		$router->map('GET', '/endpoint', function() {
			$results = $this->api->get("users");
			exit(var_dump($results));
		});

		$router->map('GET|POST', '/connexion', function() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				$user = $_POST['user'];

				$result = $this->api->post("users", $user);
			}

			require __DIR__ . '/../../views/connexion.php';
		});

		return $router;
	}
}
