<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function __construct() { 		
        parent::__construct();
		$this->load->Model('Usuarios_Model');
    }

	public function index() {
		$users = $this->Usuarios_Model->all();
		$this->template->view('usuario.list', ['users' => $users]);
	}

	public function create() {
		$this->template->view('usuario.create');
	}

	public function store() {
		$dados = $this->input->post();
		$this->Usuarios_Model->save($dados);
	}

	public function edit($id) 
	{
		if (! $id) {
			return $this->redirect->url('users')->send();
		}

		$user = $this->Usuarios_Model->find($id)->row();
		$this->template->view('usuario.edit', ['user' => $user]);
	}

	public function update($id) {
		$dados = $this->input->post();

		$this->Usuarios_Model->update($dados, $id);

	}

	public function delete() {
		
	}
}