<?php

namespace Core\Controller;

use Core\Endpoint\ApiCaller;

class Controller {
	private $creds;

	public function __construct($api) 
	{
		$this->api = $api;
	}

	public function authentificator($instance)
	{
		$_SESSION['user'] = $instance['login'];
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

		$router->map('GET|POST', '/connexion', function() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				if($_POST["action"] == "login") {
					$user = $_POST['user'];
					$result = $this->api->get("users", $user);

					if(count($result) > 0) {
						$this->authentificator($result[0]);
					}
				}

				if($_POST["action"] == "register") {
					$user = $_POST['user'];
					$result = $this->api->post("users", $user);
				}
			}

			require __DIR__ . '/../../views/connexion.php';
		});

		return $router;
	}
}
