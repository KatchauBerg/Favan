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
		  return $this->db->get('usuario')->result_array();

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

    public function listaFilmes()
    {
      return $this->db->get('filme')->result_array();
    }

    public function cadastraFilmes($titulo, $genero)
    {
      $dadosFilme =
      [
        'titulo'=>$titulo,
        'genero'=>$genero,
      ];

      $this->db->insert('filme', $dadosFilme);
    }
}

