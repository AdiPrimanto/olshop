<?php

class LoginModel {
	
	private $table = 'account';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function checkLogin($data)
	{
		$query = "SELECT * FROM account WHERE username = :username AND password = :password";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', md5($data['password']));

		// $this->db->execute();
		// return $this->db->rowCount();

		// return $this->db->resultSet();

		$data =  $this->db->single();
		return $data;
	}

}