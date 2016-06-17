<?php

namespace Core\Utils;

use Core\Entity\User;

/*
 * Class to handle common task (to refacto if front becomes more complicated)
 */
class Utils {
	private $creds;

	public function __construct($creds)
	{
		$this->creds = $creds;
	}

	public function authentificator($instance)
	{
		session_unset();

		if(!isset($_SESSION['user'])) {
			$user = new User();
		} else {
			$user = unserialize($user);
		}
		$user->update($instance);
		
		$_SESSION['user'] = serialize($user);
	}

	public function generateUrl($url)
	{
		echo $this->creds->getBasePath() . $url;
	}

	public function getUrl($url)
	{
		return $this->creds->getBasePath() . $url;
	}

	public function getUser() 
	{
		return unserialize($_SESSION['user']); 
	}


}
