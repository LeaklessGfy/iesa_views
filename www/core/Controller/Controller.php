<?php

namespace Core\Controller;

class Controller {
	public function __construct() 
	{
	}

	public function generate($router)
	{
		$router->map('GET', '/', function() {
    		require __DIR__ . '/../../views/index.php';
		});
		
		$router->map('GET', '/', function() {
    		require __DIR__ . '/../../views/connexion.php';
		});

		$router->map('GET', '/paul', function() {

		});

		return $router;
	}
}
