<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	public function index()
	{
		$this->load->view('cadastro_view');
	}

	public function registraUsuario()
	{
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
		$repeteSenha = $this->input->post('$repeteSenha');
		$cpf = $this->input->post('$cpf');
		$nome = $this->input->post('$nome');
		$sobreNome = $this->input->post('$sobreNome');

		echo 'entrou';
	}
}
