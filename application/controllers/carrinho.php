<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Carrinho extends CI_controller{

	public function __construct(){
		parent::__construct();

		$this->load->model("carrinho_model");

	}

	public function index(){


		$this->load->view('layout/topo');
		$this->load->view('cliente/carrinho');
		$this->load->view('layout/rodape');
	}

	function inserirCarrinho(){

		$quarto = $this->input->post();		


		if(!empty($quarto)){
			$data = array(
				'id'      => $quarto['idquartos'],
				'qty'     => 1,
				'price'   => $quarto['precoPromo'],
				'name'    => $quarto['nome'],
				'options' => array(
					'NumeroPessoas' => $quarto['NumeroPessoas'], 
					'Serviços' => implode(" ",$quarto['servicos']))
				);

			$this->cart->insert($data);
		}
		$this->index();

	}

	function updateCarrinho(){
		$contCarrinho = $this->input->post();
		//var_dump($contCarrinho);
		foreach( $contCarrinho as $id => $carrinho)
		{
			$rowid = $carrinho['rowid'];
			$qty = $carrinho['qty'];

			$data = array(
				'rowid' => $rowid,
				'qty' => $qty
				);
			
			$this->cart->update($data);
		}
		$this->index();
	}

	function limparCarrinho(){
		$this->cart->destroy();
		$this->index();
	}


}