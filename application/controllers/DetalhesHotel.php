<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DetalhesHotel extends CI_controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Detalhes_model");

	}

	public function index(){

		$idHotel= $this->uri->segment(3);
		$dados = array(
			"topoDetalhes" => $this->Detalhes_model->topoDetalhes($idHotel),
			"servicos" => $this->Detalhes_model->servicoDetalhes($idHotel),
			"cartoes" => $this->Detalhes_model->cartoesDetalhes($idHotel),
			"tabela" => $this->Detalhes_model->tabelaDetalhes($idHotel),
			"servicoQuarto" => $this->Detalhes_model->servico($idHotel)
		);
	
		


		$this->load->view('layout/topo');
		$this->load->view('cliente/maisDetalhes', $dados);
		$this->load->view('layout/rodape');
	}


}