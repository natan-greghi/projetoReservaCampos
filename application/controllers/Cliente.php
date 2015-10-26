<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function cadastrar(){

		$dados = array(
			"titulo" => "Cadastre-se!"
		);

		$this->load->view('layout/topo', $dados);
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('senha', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('senhaconf', 'Password Confirmation', 'required');

        $this->form_validation->set_rules('telefone-fixo', 'Telefone-fixo');
        $this->form_validation->set_rules('telefone-cel', 'Telefone-cel', 'required');
        $this->form_validation->set_rules('rua', 'Rua', 'required');
        $this->form_validation->set_rules('UF', 'UF', 'required');
        $this->form_validation->set_rules('cidade', 'Cidade', 'required');                

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('cliente/cadastrar');
        }
        else
        {
        	$nome = $this->input->post('nome');
            $cpf = $this->input->post('cpf');
            $email = $this->input->post('email');
            $senha = $this->input->post('senha');

            $telfixo = $this->input->post('telefone-fixo');
            $telcel = $this->input->post('telefone-cel');
            $rua = $this->input->post('rua');
            $UF = $this->input->post('UF');
            $cidade = $this->input->post('cidade');

        	$this->Cliente->nome = $nome;
            $this->Cliente->cpf = $cpf;
        	$this->Cliente->email = $email;
            $this->Cliente->senha = $senha;

            $this->Cliente->telfixo = $telfixo;
            $this->Cliente->telcel = $telcel;
            $this->Cliente->rua = $rua;
            $this->Cliente->UF = $UF;
            $this->Cliente->cidade = $cidade;

        	$this->Cliente->inserir();

            $this->load->view('formsuccess');
        }

		$this->load->view('layout/rodape');
	}
}
