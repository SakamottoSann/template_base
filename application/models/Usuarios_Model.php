<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios_Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function all()
    {
        $this->db->select('*');
        $this->db->from('usuarios');

        return $this->db->get();
    }

    public function find($id)
    {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('id_usuario', $id);

        return $this->db->get();
    }


    public function save($data)
    {
        if (!$data) {
            return false;
        }

        $insert  =  array(
            'nome'  =>  $data['name'],
            'email'  =>  $data['email'],
            'telefone'  =>  $data['tel'],
            'hash_senha' => $data['hash_senha']
        );

        $this->db->insert('usuarios',  $insert);

        return true;
    }

    public function update($id, $data)
    {
        if (!$id) {
            return false;
        }

        $this->db->where('id_usuario', $id);
        return $this->db->update('usuarios', $data);
    }

    public function updateSenha($id, $email, $senha)
    {
        $this->db->set('hash_senha', $senha);
        $this->db->where('id_usuario', $id);
        $this->db->where('email', $email);
        $this->db->update('usuarios');

        return (!$this->db->affected_rows()) ? false : true;
    }

    public function delete($id)
    {
        $this->db->where('id_usuario', $id);
        return $this->db->delete('usuarios');
    }
}
