<?php defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->Model('Usuarios_Model');
		$this->load->library('bcrypt');
	}

	public function index()
	{
		if (!$_SESSION['token']) {
			$this->redirect->url('login')->send();
		}

		$info['usuarios'] = $this->Usuarios_Model->all()->result_array();

		if (isset($_POST["home"])) {
			$this->redirect->url('welcome')->send();
		}
		if (isset($_POST["logout"])) {
			$this->logout();
		}

		$this->template->view('usuarios.list', $info);
	}

	public function store()
	{
		if (!$_SESSION['token']) {
			$this->redirect->url('login')->send();
		}

		$this->template->view('usuarios.create');
		

		$data = $this->input->post();

		// if (!$data) {
		// 	return $this->redirect->url('usuarios')
		// 		->withError('Nenhum dado foi passado!')
		// 		->send();
		// }

		// $this->load->library('bcrypt');

		// $data['hash_senha'] = (!empty($data['hash_senha'])) ? $this->bcrypt->hash($data['hash_senha']) : "";

		// if ($id = $this->Usuarios_Model->save($data)) {
		// 	return $this->redirect->url('usuarios')
		// 		->withSuccess('Novo usuário cadastrado!')
		// 		->send();
		// }

		// return $this->redirect->url('usuarios')
		// 	->withError('Erro no cadastro!')
		// 	->send();
	}

	public function update($id)
	{
		if (!$_SESSION['token']) {
			$this->redirect->url('login')->send();
		}

		$data = $this->input->post();

		if (!$data || !$id) {
			return $this->redirect->url('usuarios/edit/' . $id)
				->withError('Erro nos dados passados!')
				->send();
		}

		$this->load->library('bcrypt');

		if (!empty($data['hash_senha'])) {
			$data['hash_senha'] = $this->bcrypt->hash($data['hash_senha']);
		} else {
			unset($data['hash_senha']);
		}

		if (!$this->Usuarios_Model->update($id, $data)) {
			return $this->redirect->url('usuarios/edit/' . $id)
				->withError('Erro na alteração!')
				->send();
		}

		return $this->redirect->url('usuarios')->withSuccess('Usuário alterado!')->send();
	}

	public function edit($id)
	{
		if (!$_SESSION['token']) {
			$this->redirect->url('login')->send();
		}

		if (!$id) {
			return $this->redirect->url('users')->send();
		}

		$info['usuario'] = $this->Usuarios_Model->find($id)->row_array();
		$this->template->view('usuarios.edit', $info);
	}

	public function delete($id)
	{
		if (!$_SESSION['token']) {
			$this->redirect->url('login')->send();
		}

		if (!$id) {
			return $this->redirect->url('usuarios')
				->withError('Informe um ID!')
				->send();
		}

		if (!$this->Usuarios_Model->delete($id)) {
			return $this->redirect->url('usuarios')
				->withError('Erro na exclusão!')
				->send();
		}

		return $this->redirect->url('usuarios')
			->withSuccess('Usuário excluído!')
			->send();
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$info['msg'] = "Logout realizado!";
		return $this->redirect->url('login')->send();
	}
}
