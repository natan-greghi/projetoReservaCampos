<?php

class Principal_model extends CI_Model {

	public $nomeHotel;

	public function consulta($dados = null)
	{
		if($dados != null){
			$this->db->select('h.*, t.nome AS "tipoquarto",r.*');
			$this->db->select_min('q.precoFixo');
			$this->db->select_min('q.precoPromo');
			$this->db->from('hotelpousada h');
			$this->db->join('quartos q', 'h.idHotelPousada = q.hotelPousada_idHotelPousada');
			$this->db->join('tipoquarto t','q.tipoQuarto_idtipoQuarto = t.idtipoQuarto');
			$this->db->join('reservas r', 'r.quartos_idquartos = q.idquartos');
			$this->db->where('t.idtipoQuarto',$dados['tipoQuarto']);
			$this->db->where('r.dataInicio !=',$dados['dataInicio']);
			$this->db->where('r.dataFim !=',$dados['dataFim']);
			$this->db->like('h.nome',$dados['nome']);
			$this->db->group_by('h.nome');
			$this->db->order_by('q.precoFixo','asc');
			$query = $this->db->get();
			return $query->result_array();
			
		}
		else{
			$this->db->select('h.*,t.nome AS "tipoquarto"');
			$this->db->select_min('q.precoFixo');
			$this->db->select_min('q.precoPromo');
			$this->db->from('hotelpousada h');
			$this->db->join('quartos q', 'h.idHotelPousada = q.hotelPousada_idHotelPousada');
			$this->db->join('tipoquarto t','q.tipoQuarto_idtipoQuarto = t.idtipoQuarto');
			$this->db->group_by('h.nome');
			$this->db->order_by('q.precoFixo','asc');
			$query = $this->db->get();
			return $query->result_array();
		}
	}
	public function consultarServico($dados = null){

		if($dados !=0){

			$this->db->select('h.hotelPousada_idHotelPousada, h.servicos_idservicos, s.nome ,s.img');
			$this->db->from('hotelpousadaservicos h'); 
            $this->db->join('servicos s', 'h.servicos_idservicos = s.idservicos');
            $this->db->where('h.hotelPousada_idHotelPousada =',$dados);        
            $query = $this->db->get();
             if($query->num_rows() != 0)
            {
                return $query->result_array();
            }
            else
            {
                return false;
            } 

		}
	}
} 