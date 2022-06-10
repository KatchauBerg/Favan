<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('locadoramodel','locadora');

	}

	public function index()
	{
		$this->load->view('users/login');
	}

	public function login()
	{
		$getDadosLogin = $this->input->post();
		$getDadosLogin = (object) $getDadosLogin;

		$this->validaLogin($getDadosLogin->email, $getDadosLogin->senha);
	}

	public function validaLogin($email, $senha)
	{

		// var_dump([$email, $senha]); exit;
		$retornaDados = $this->locadora->listaUsuario();

		foreach ($retornaDados as $usuario)
		{
			$usuario = (object) $usuario;
			if($usuario->email != $email && $usuario->senha != $senha)
			{
				return "Dados Incorretos";
			}
			else
			{
				return "Logado";
			}
		}

	}
}
