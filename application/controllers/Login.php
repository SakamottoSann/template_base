<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('bcrypt');
        $this->load->Model('Login_Model');
    }

    public function index()
    {
        $this->template->view('login');

        $dados = $this->input->post();

        if ($dados) {
            $email = $dados['email'];
            $senha = $dados['password'];

            if (!!$this->verifica($email, $senha)) {
                return $this->redirect->url('welcome')->withSuccess('Olá  ' . $_SESSION['nome'])->send();
            }
        }
    }

    private function verifica($email, $senha)
    {
        $usuario = $this->Login_Model->findLogin($email)->row_array();

        if ($usuario['id_usuario']) {
            if ($this->bcrypt->compare($senha, $usuario['hash_senha'])) {
                set_user_session($usuario);
                return true;
            }
        }
        return false;
    }
}
