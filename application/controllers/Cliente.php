<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function cadastro(){
        $this->load->model("cliente_model","Cliente");

        $dados = array(
            "titulo" => "Cadastre-se!",
            "estados" => $this->Cliente->listarEstado(),
            "cidades" => $this->Cliente->listarCidade()
        );

        $this->load->view('layout/topo', $dados);
        $this->load->view('cliente/cadastrar', $dados);
        $this->load->view('layout/rodape');
    }

	public function cadastrar(){
        $this->load->model("cliente_model","Cliente");

		$dados = array(
			"titulo" => "Cadastre-se!"
		);

		$this->load->view('layout/topo', $dados);
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('cpf', 'CPF', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        //$this->form_validation->set_rules('senhaconf', 'Password Confirmation', 'required');

        $this->form_validation->set_rules('telefone-fixo', 'telefone-fixo');
        //$this->form_validation->set_rules('telefone-cel', 'Telefone-cel', 'required');
        //$this->form_validation->set_rules('rua', 'Rua', 'required');
        $this->form_validation->set_rules('UF', 'UF', 'required');
        $this->form_validation->set_rules('cidade', 'cidade', 'required');                

        if ($this->form_validation->run() == FALSE)
        {
            echo "Não rolou";
        }
        else
        {
        	$nome = $this->input->post('nome');
            $cpf = $this->input->post('cpf');
            $email = $this->input->post('email');
            $senha = do_hash($this->input->post('senha'),'md5');

            $telefone = $this->input->post('telefone-fixo');
            //$telcel = $this->input->post('telefone-cel');
            //$rua = $this->input->post('rua');
            $uf = $this->input->post('UF');
            $cidade = $this->input->post('cidade');

        	$this->Cliente->nome = $nome;
            $this->Cliente->cpf = $cpf;
        	$this->Cliente->email = $email;
            $this->Cliente->senha = $senha;

            $this->Cliente->telefone = $telefone;
            //$this->Cliente->telcel = $telcel;
            //$this->Cliente->rua = $rua;
            $this->Cliente->uf = $uf;
            $this->Cliente->cidade = $cidade;

        	$this->Cliente->inserir();

            $this->load->view('formsuccess');
        }

		$this->load->view('layout/rodape');
	}

}
