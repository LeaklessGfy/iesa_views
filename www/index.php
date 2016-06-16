<?php
	session_start();
    header('content-type: text/html; charset=utf-8');
    ini_set('display_errors', 1);
    ini_set('error_reporting', E_ALL);

    require_once __DIR__.'/vendor/autoload.php';
    require_once __DIR__.'/core/autoload.php';

    $controller = new Core\Controller\Controller();

    $router = new AltoRouter();
    $router->setBasePath('/public/iesa_views/www');

    $router = $controller->generate($router);

	$match = $router->match();
	if($match) {
		call_user_func_array( $match['target'], $match['params'] );
	} else {
		session_destroy();
	}
