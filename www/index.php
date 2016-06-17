<?php
	session_start();
    header('content-type: text/html; charset=utf-8');
    ini_set('display_errors', 1);
    ini_set('error_reporting', E_ALL);

    require_once __DIR__.'/vendor/autoload.php';
    require_once __DIR__.'/core/autoload.php';

    $creds = new App\Creds;
    $api = new Core\Endpoint\ApiCaller($creds);
    $utils = new Core\Utils\Utils($creds);
    $controller = new Core\Controller\Controller($api, $utils);

    $router = new AltoRouter();
    $router->setBasePath($creds->getBasePath());

    $router = $controller->generate($router);
	$match = $router->match();
	
	if($match) {
		call_user_func_array( $match['target'], $match['params'] );
	} else {
		session_destroy();
	}
