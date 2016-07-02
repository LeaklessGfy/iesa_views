<?php

namespace Core\Controller;

/**
 * @author Vincent Rasquier
 * Controller for web server
 */
class Controller {
	private $creds;

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
            require __DIR__ . '/../../views/candidates.php';
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
				$result = $this->api->get("users/auth", $_POST['user']);

				if(count($result) > 0) {
					$this->utils->authentificator($result[0]);

					return header('Location: ' . $this->utils->getUrl("/")); 
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
				$result = $this->api->put("users/" . $user->getId(), $_POST['user']);

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
				$username = $_POST['username'];
				$password = $_POST['password'];

				$admin = $this->utils->getAdmin();

				if($username === $admin['username'] && $password === $admin['password']) {
					$_SESSION['admin'] = 1;
				}

				return header('Location: ' . $this->utils->getUrl("/"));
			}

			return __DIR__ . '/../../views/backoffice/login.php';
		});

		$router->map('GET', '/admin', function() {
			if(!isset($_SESSION['admin'])) {
				return header('Location: ' . $this->utils->getUrl("/"));
			}

			return __DIR__ . '/../../views/backoffice/index.php';
		});

		$router->map('GET', '/deconnexion', function() {
			session_destroy();
		});

		return $router;
	}
}
