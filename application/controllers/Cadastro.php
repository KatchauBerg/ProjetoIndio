<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {
	public function index()
	{
		$this->load->view('cadastro_view');
	}

	function __construct()
	{
		parent::__construct();
		$this->load->model('usuario_model', 'usuario');

	}

	public function registraUsuario()
	{
		$email = $this->input->post('email');
		$senha = $this->input->post('senha');
		$repeteSenha = $this->input->post('repeteSenha');
		$cpf = $this->input->post('cpf');
		$nome = $this->input->post('nome');

//		var_dump([$email, $senha, $cpf, $nome]); exit;

		if($senha === $repeteSenha)
		{
			$this->usuario->registraCliente($email, $senha, $cpf, $nome);
		}

	}
}
