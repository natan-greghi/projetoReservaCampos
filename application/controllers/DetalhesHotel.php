<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DetalhesHotel extends CI_controller{


	public function index($id){

		print_r($id);

		$this->load->view('layout/topo');
		$this->load->view('cliente/maisDetalhes');
		$this->load->view('layout/rodape');
	}


}