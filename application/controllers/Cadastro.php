<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// require_once('models/model.php');

class cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view('users/cadastro');
	}

	public function cadastraUsuario()
	{
		$getDados = $this->input->post();
		$getDados = (object) $getDados;

		// print_r($getDados); exit;

		$this->inserDadosCadastro($getDados->nome, $getDados->email, $getDados->senha);
		
	}

	public function inserDadosCadastro($nome, $email, $senha)
    {

		$dadosUsuario = 
		[
			'nome'=>$nome,
			'email'=>$email,
			'senha'=>$senha
		];

		$this->db->insert('usuario', $dadosUsuario);
        
    }
}
