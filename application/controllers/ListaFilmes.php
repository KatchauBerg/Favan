<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('models/model.php');

class listafilmes extends CI_Controller {

	public function index()
	{
		$this->load->view('filmes/listaFilmes');
	}
}
