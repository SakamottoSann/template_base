<?php

function validateModule()
{
	$CI =& get_instance();
	$CI->load->library('session');

	$tipo = $CI->session->tipo;
}