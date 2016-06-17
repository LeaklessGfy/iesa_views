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
		session_unset();
		$_SESSION['user_id'] = $instance['id'];
		$_SESSION['login'] = $instance['login'];
		$_SESSION['name'] = $instance['name'];
		$_SESSION['lastname'] = $instance['lastname'];
		$_SESSION['age'] = $instance['age'];
		$_SESSION['email'] = $instance['email'];
		$_SESSION['facebook'] = $instance['id_facebook'];
		$_SESSION['snapchat'] = $instance['id_snapchat'];
	}

	public function generate($router)
	{
		$router->map('GET', '/', function() {
    		require __DIR__ . '/../../views/index.php';
		});

		$router->map('GET|POST', '/connexion', function() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				if($_POST["action"] == "login") {
					$user = $_POST['user'];
					$result = $this->api->get("users", $user);

					if(count($result) > 0) {
						$this->authentificator($result[0]);
						return header('Location: ' . generateUrl("")); 
					}
				}

				if($_POST["action"] == "register") {
					$user = $_POST['user'];
					$result = $this->api->post("users", $user);
					return header('Location: ' . generateUrl("connexion")); 
				}
			}

			require __DIR__ . '/../../views/connexion.php';
		});

		$router->map('GET|POST', '/profile', function() {
			$user = getUser();

			if(!$user) {
				exit("not");
			}

			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				$edit = $_POST['user'];
				$result = $this->api->put("users/" . $user["id"], $edit);

				if($result) {
					$updateUser = $this->api->get('users/' . $user['id']);
					$this->authentificator($updateUser);
					return header('Location: ' . generateUrl("profile")); 
				}
			}

			require __DIR__ . '/../../views/profil.php';
		});

		return $router;
	}
}
