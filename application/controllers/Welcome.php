<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	public function __construct()
    { 
        parent::__construct();
        // if (! get_user_session()) {
        	// return $this->redirect->url('login/logout')
                // ->send();
        // }
    }

	public function index()
	{
		$this->template->view('bemvindo');
	}
}