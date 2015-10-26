<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("Principal_model","p");

	}

	public function pesquisa(){
		$title = array(
			"titulo" => "Reserva Campos"
		);
		$this->load->view('layout/topo', $title);

		$dados = array('nome' => $this->input->post("filtro"),
						'tipoQuarto' => $this->input->post("quarto"));
		if($dados['nome'] != "" || $dados['tipoQuarto']){

		echo "entro no if";
		print_r($dados);

		$hotel = array('hoteis'=> $this->p->consulta($dados));

		for($i=0 ; $i < count($hotel['hoteis']) ; $i++) {
			if($this->p->consultarServico($hotel['hoteis'][$i]['idHotelPousada']))
			{
				$hotel['hoteis'][$i]['servicos'] =  $this->p->consultarServico($hotel['hoteis'][$i]['idHotelPousada']);
			}else
			{
				$hotel['hoteis'][$i]['servicos'] = 0;
			}

		}

		
		$this->load->view('cliente/principal', $hotel);
		$this->load->view('layout/rodape');
	}
	else
	{
		echo "entro no else";
		redirect('Home/index');
	}

	}


	public function index(){

		$title = array(
			"titulo" => "Reserva Campos",
		);

		$this->load->view('layout/topo', $title);

		$hotel = array(
			'hoteis'=> $this->p->consulta(null),
			'tipoQuarto' => $this->input->post("quarto")
			);


		for($i=0 ; $i < count($hotel['hoteis']) ; $i++) {
			if($this->p->consultarServico($hotel['hoteis'][$i]['idHotelPousada']))
			{
				$hotel['hoteis'][$i]['servicos'] =  $this->p->consultarServico($hotel['hoteis'][$i]['idHotelPousada']);
			}else
			{
				$hotel['hoteis'][$i]['servicos'] = 0;
			}			
		}
				
		$this->load->view('cliente/principal',$hotel);
		$this->load->view('layout/rodape');
		
	}

	public function detalhes(){
		$title = array(
			"titulo" => "Detalhes",
		);

		$this->load->view('layout/topo', $title);
		$this->load->view('cliente/maisDetalhes');
		$this->load->view('layout/rodape');
	}

}

