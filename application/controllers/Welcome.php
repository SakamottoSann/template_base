<?php defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$_SESSION['token']) {
			$this->redirect->url('login')->send();
		}
		$this->template->view('bemvindo');

		if (isset($_POST["list"])) {
			$this->redirect->url('users')->send();
		}
		if (isset($_POST["add"])) {
			$this->redirect->url('users/store')->send();
		}
		if (isset($_POST["edit"])) {
			echo "botão edit foi clicado";
		}
		if (isset($_POST["trash"])) {
			echo "botão foi clicado";
		}
	}
}
