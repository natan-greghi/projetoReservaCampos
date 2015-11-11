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
			'tipoQuarto' => $this->input->post("quarto"),
			'dataInicio' => $this->input->post("start"),
			'dataFim' => $this->input->post("end"));
		
		if($dados['nome'] != "" || $dados['tipoQuarto']){


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

	public function filtroAvancado()
	{
		$title = array(
			"titulo" => "Detalhes",
			);


		$dados = array(
			'estrelas' => $this->input->post("rating"),
			'categoria' => $this->input->post("categoria"),
			'preco' => $this->input->post("preco")
			);
		print_r($dados);
		$hotel = array(
			'hoteis'=> $this->p->pesquisaAvancada($dados));

		for($i=0 ; $i < count($hotel['hoteis']) ; $i++) {
			if($this->p->consultarServico($hotel['hoteis'][$i]['idHotelPousada']))
			{
				$hotel['hoteis'][$i]['servicos'] =  $this->p->consultarServico($hotel['hoteis'][$i]['idHotelPousada']);
			}else
			{
				$hotel['hoteis'][$i]['servicos'] = 0;
			}			
		}

		$this->load->view('layout/topo', $title);
		$this->load->view('cliente/principal',$hotel);
		$this->load->view('layout/rodape');

	}

}

