<?php

namespace Core\Entity;

/**
 * @author Vincent Rasquier
 * User entity
 */
class User {
	private $password;
	private $name;
	private $lastname;
	private $age;
	private $facebook;
	private $snapchat;
	private $email;
	private $status;

	public function __construct()
	{
		$this->status = 0;
	}

	public function update($obj)
	{
		$this->id = $obj['id'];
		$this->password = $obj['password'];
		$this->name = $obj['name'];
		$this->lastname = $obj['lastname'];
		$this->age = $obj['age'];
		$this->facebook = $obj['id_facebook'];
		$this->snapchat = $obj['id_snapchat'];
		$this->email = $obj['email'];
	}

	public function setId($id) { $this->id = $id; }
	public function setPassword($password) { $this->password = $password; }
	public function setName($name) { $this->name = $name; }
	public function setLastName($lastname) { $this->lastname = $lastname; }
	public function setAge($age) { $this->age = $age; }
	public function setFacebook($facebook) { $this->facebook = $facebook; }
	public function setSnapchat($snapchat) { $this->snapchat = $snapchat; }
	public function setEmail($email) { $this->email = $email; }

	public function getId() { return $this->id; }
	public function getPassword() { return $this->password; }
	public function getName() { return $this->name; }
	public function getLastName() { return $this->lastname; }
	public function getAge() { return $this->age; }
	public function getFacebook() { return $this->facebook; }
	public function getSnapchat() { return $this->snapchat; }
	public function getEmail() { return $this->email; }
}
