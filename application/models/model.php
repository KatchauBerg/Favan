<?php

class Model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cadastraUsuario()
    {
        
		$query = $this->db->get('locadora')->result_array();
		$query = (object) $query;

        print_r($query); exit;
    }
}
?>