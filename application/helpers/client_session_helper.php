<?php 

function set_user_session($data='')
{
	$CI = & get_instance();
	$CI->load->library('session');
    
	$CI->session->set_userdata($data);
}

function get_user_session()
{
	$CI = & get_instance();
	$CI->load->library('session');
    
    return $CI->session->userdata('id_usuario');
}

function get_user_name()
{
	$CI = & get_instance();
	$CI->load->library('session');
    
    return $CI->session->userdata('nome');
}

function get_empresa_id()
{
	$CI = & get_instance();
	$CI->load->library('session');
    
    return $CI->session->userdata('empresa_id');
}

function get_user_tipo()
{
	$CI = & get_instance();
	$CI->load->library('session');
    
    return $CI->session->userdata('tipo');
}