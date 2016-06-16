<?php

namespace Core\Controller;

class Controller {
	public function __construct() 
	{
	}

	public function generate($router)
	{
		$router->map('GET', '/', function() {
    		require __DIR__ . '/../../views/home.php';
		});

		$router->map('GET', '/paul', function() {

		});

		return $router;
	}
}
