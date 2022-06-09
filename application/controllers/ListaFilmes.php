<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListaFilmes extends CI_Controller
{

	public function index()
	{
		$this->load->view('filmes/listaFilmes');
	}

	public function getFilmes()
	{
		$this->load->model('Locadoramodel', 'locadora');
		$retornaFilmes = $this->locadora->listaFilmes();
		print_r($retornaFilmes); exit;

	}

}
