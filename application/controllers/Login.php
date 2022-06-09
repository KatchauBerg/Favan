<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('models/model.php');

class login extends CI_Controller {

	public function index()
	{
		// echo 123; exit;
		$this->load->view('users/login');
	}
}
