<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('models/model.php');

class homecontroller extends CI_Controller {

	public function index()
	{
		$this->load->view('homeView');
	}
}
