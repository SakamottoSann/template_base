<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function findLogin($login)
	{
		$this->db->select('*')
			->from('users')
			->where('email', $login);

		return $this->db->get();
	}

	public function findList(){
		$this->db->select('*')
			->from('users');

		return $this->db->get();
	}
}