<?php

class Cliente_model extends CI_Model {

	public function inserir(){
  		$dados = array(
  			'nome' => $this->nome,
  			'cpf' => $this->cpf,
  			'email' => $this->email,
  			'senha' => $this->senha,
        	'telefone' => $this->telefone,
        	'uf' => $this->uf,
        	'cidade' => $this->cidade
  		);

  		$this->db->insert('cliente', $dados);
  	}

  	public function listarEstado(){
  		$query = $this->db->get('tb_cidade');

  		$this->db->select('estado');
  		$this->db->distinct();
        $this->db->from('tb_cidade');
        $this->db->order_by('estado');
        $query = $this->db->get();
        return $query->result();
  	}

  	public function listarCidade($uf=NULL){
  		$query = $this->db->get('tb_cidade');

  		$this->db->select('nome');
        $this->db->from('tb_cidade');
        $this->db->where('estado', 'SP');
        $this->db->order_by('nome');
        $query = $this->db->get();
        return $query->result();
  	}
}