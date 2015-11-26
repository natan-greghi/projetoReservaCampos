<?php

class Detalhes_model extends CI_Model {

	public function topoDetalhes ($idHotel){
		$this->db->select('nome, endereco_fisico, telefone, link_site, latitude, longitude');
		$this->db->from('hotelpousada');
		$this->db->where('idHotelPousada',$idHotel);

		$query = $this->db->get();
		return $query->first_row();
	}

	public function servicoDetalhes ($idHotel){
		$this->db->select('servicos.nome, servicos.id_tiposervicos');
		$this->db->from('servicos');
		$this->db->join('hotelpousadaservicos','servicos.idservicos = hotelpousadaservicos.servicos_idservicos');
		$this->db->where('hotelpousadaservicos.hotelPousada_idHotelPousada', $idHotel);
		$query = $this->db->get();
		return $query->result();

	}

	public function cartoesDetalhes ($idHotel){
		$this->db->select('ccredito.bandeira, ccredito.img');
		$this->db->from('ccredito');
		$this->db->join('hotelpousada_has_ccredito', 'ccredito.idcCredito = hotelpousada_has_ccredito.cCredito_idcCredito');
		$this->db->where('hotelpousada_has_ccredito.hotelPousada_idHotelPousada', $idHotel);
		$query = $this->db->get();
		return $query->result();
	}

	public function tabelaDetalhes ($idHotel){
		$this->db->select('quartos.nome, quartos.imagem, quartos.nPessoas, quartos.precoFixo, quartos.precoPromo, tipoquarto.nome AS nomeTipoQuarto');
		$this->db->from('quartos');
		$this->db->join('tipoquarto', 'quartos.tipoQuarto_idtipoQuarto = tipoquarto.idtipoQuarto');
		$this->db->where('quartos.hotelPousada_idHotelPousada', $idHotel);
		$query = $this->db->get();
		return $query->result();
	}

	public function servico ($idHotel){
		$this->db->select('group_concat(tiposervicoquarto.nomeServico) as servicos');
		$this->db->from('tiposervicoquarto');
		$this->db->join('servicoquarto', 'servicoquarto.idServicoQuarto = tiposervicoquarto.idServicoQuarto');
		$this->db->join('quartos', 'quartos.idquartos = servicoquarto.idquarto');
		$this->db->where('quartos.hotelPousada_idHotelPousada', $idHotel);
		$this->db->group_by('quartos.idquartos');
		$query = $this->db->get();
		return $query->result_array();
	}

} 