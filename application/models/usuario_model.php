<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Controller
{
	public function registraCliente($email, $senha, $cpf, $nome)
	{
		$dadosCliente = ['nome'=>$nome, 'cpf'=>$cpf, 'email'=>$email, 'senha'=>$senha];

//		print_r($dadosCliente);exit;

		$this->db->insert('cliente', $dadosCliente);

//		return $cadastraCliente;

	}
}
