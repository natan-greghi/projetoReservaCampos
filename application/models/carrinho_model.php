<?php

class Carrinho_model extends CI_Model {

	public function buscaQuarto ($idQuarto){
		$this->db->select('quartos.idquartos, quartos.nome, quartos.imagem, quartos.nPessoas, quartos.precoFixo, quartos.precoPromo');
		$this->db->from('quartos');
		$this->db->where('quartos.idquartos', $idQuarto);
		$query = $this->db->get();
		return $query->row();
	}

	public function servicoQuarto ($idQuarto){
		$this->db->select('group_concat(tiposervicoquarto.nomeServico) as servicos');
		$this->db->from('tiposervicoquarto');
		$this->db->join('servicoquarto', 'servicoquarto.idServicoQuarto = tiposervicoquarto.idServicoQuarto');
		$this->db->join('quartos', 'quartos.idquartos = servicoquarto.idquarto');
		$this->db->where('quartos.idquartos', $idQuarto);
		$query = $this->db->get();
		return $query->row();
	}


} 