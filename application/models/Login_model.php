<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Controller
{
	public function registraCliente($email, $senha, $cpf, $nome)
	{
		$dadosCliente = [
			'nome'=>$nome,
			'cpf'=>$cpf,
			'email'=>$email,
			'senha'=>$senha
			];

		$this->db->insert('mytable', $dadosCliente);
	}
}
