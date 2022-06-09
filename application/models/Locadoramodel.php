<?php

class Locadoramodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listaUsuario()
    {
      // FUNCAO REALIAZA "SELECT * FROM locadora
		  $query = $this->db->get('usuario')->result_array();
		  $query = (object) $query;

    }

    public function inserirDadosCadastro($nome, $email, $senha)
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

