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
        'nomeFilme'=>$titulo,
        'categoria'=>$genero,
      ];

      $this->db->insert('filme', $dadosFilme);
    }

    public function deletar($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete('filme');
    }

}

