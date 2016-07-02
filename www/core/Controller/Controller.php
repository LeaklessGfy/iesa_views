<?php

namespace Core\Controller;

/**
 * @author Vincent Rasquier
 * Controller for web server
 */
class Controller {
	private $api;
	private $utils;

	public function __construct($api, $utils) 
	{
		$this->api = $api;
		$this->utils = $utils;
	}

	public function generate($router)
	{
		$router->map('GET', '/', function() {
    		require __DIR__ . '/../../views/index.php';
		});

     	$router->map('GET', '/mentions-legales', function() {
    		require __DIR__ . '/../../views/legal_notice.php';
		});

        $router->map('GET', '/live', function() {
    		require __DIR__ . '/../../views/live.php';
		});
      
        $router->map('GET', '/candidates', function() {
        	$results = $this->api->get('candidates', array("join" => "users"));

            require __DIR__ . '/../../views/candidates.php';
        });

		$router->map('GET', '/ranking', function() {
			$raw = $this->api->get('users', array("join" => "candidates"));
			$rankingValue = 1;
			$results = array();

			foreach ($raw as $value) {
				if($value['candidate'] != null) {
					$results[] = $value;
				}
			}

			require __DIR__ . '/../../views/ranking.php';
		});

		$router->map('GET', '/api/ranking', function() {
			$opts = array();
			if($_GET['data'] == "users") {
				$opts = array("join" => "candidates");
			}

			$results = $this->api->get($_GET['data'], $opts);

			echo(json_encode($results));
		});

		$router->map('GET', '/api/swipes', function() {
			$user = $this->utils->getUser();

			if(!$user) {
				echo(false);
			}

			$result = $this->api->post('swipes');
			echo($result);
		});

		$router->map('GET|POST', '/connexion', function() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				$result = $this->api->post('users/auth', $_POST['user']);

				if($result && count($result) > 0) {
					$this->utils->authentificator($result[0]);

					return header('Location: ' . $this->utils->getUrl("/")); 
				} else {
					echo "Wrong values";die;
				}
			}

			require __DIR__ . '/../../views/login.php';
		});

		$router->map('GET|POST', '/inscription', function() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				$result = $this->api->post("users", $_POST['user']);

				return header('Location: ' . $this->utils->getUrl("/connexion")); 
			}

			require __DIR__ . '/../../views/register.php';
		});

		$router->map('GET|POST', '/profile', function() {
			$user = $this->utils->getUser();

			if(!$user) {
				return header('Location: ' . $this->utils->getUrl("/connexion"));
			}

			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				$result = $this->api->put("users/" . $user->getId(), $_POST['user'], $user->getTokens());

				if($result) {
					$updateUser = $this->api->get('users/' . $user->getId());
					$this->utils->authentificator($updateUser);

					return header('Location: ' . $this->utils->getUrl("/profile")); 
				}
			}

			require __DIR__ . '/../../views/profile.php';
		});

		$router->map('GET|POST', '/admin/login', function() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				$username = $_POST['login'];
				$password = $_POST['password'];

				$admin = $this->utils->getAdmin();

				if($username === $admin['username'] && $password === $admin['password']) {
					$_SESSION['admin'] = 1;
					return header('Location: ' . $this->utils->getUrl("/"));
				}
			}

			require __DIR__ . '/../../views/backoffice/login.php';
		});

		$router->map('GET', '/admin', function() {
			if(!isset($_SESSION['admin'])) {
				return header('Location: ' . $this->utils->getUrl("/"));
			}

			$results = $this->api->get('homepage');

			require __DIR__ . '/../../views/backoffice/index.php';
		});

		$router->map('GET', '/deconnexion', function() {
			session_destroy();
		});

		return $router;
	}
}
