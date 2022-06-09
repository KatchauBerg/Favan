<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listacliente extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Locadoramodel', 'locadora');
	}

	public function index()
	{
		$dados ['listaCliente'] = $this->locadora->listaUsuario();
		$this->load->view('users/listaCliente', $dados);
	}
}
