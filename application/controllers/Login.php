<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login_view');
	}

	public function validaLogin(){

		$emailLogin = $this->input->post('email');
		$senhaLogin = $this->input->post('senha');

	}
}
