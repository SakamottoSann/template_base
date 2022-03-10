<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('bcrypt');
        $this->load->Model('Usuarios_Model');
        
    }

    public function index()
    {
        $this->template->view('login');

        $dados = $this->input->post(); 
        $info['info'] = 'info vazio';

        if ($dados) {
            $email = $dados['email'];
            $senha = $dados['password'];

            if (!!$this->verifica($email, $senha)) {
                return $this->redirect->url('index.php/welcome')->withSuccess('user ok')->send();
            }
        }
    }
    
    private function verifica($email, $senha)
    {
        $usuario = $this->Usuarios_Model->findLogin($email)->row_array();

        if ($usuario['idU']) {
            if ($this->bcrypt->compare($senha,$usuario['hash_senha'])) {
                set_user_session($usuario);
                return true;
            }
        }
        return false;
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $info['msg'] = "Logout realizado!";
        $this->template->view('login', $info);
    }

}