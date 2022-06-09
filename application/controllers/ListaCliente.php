<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('models/model.php');

class listacliente extends CI_Controller {

	public function index()
	{
		$this->load->view('users/listaCliente');
	}
}
