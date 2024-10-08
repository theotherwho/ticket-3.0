<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Setor extends MY_Controller {

    public function listar() {

        $this->carregar('setor');
        $dados['setor'] = $this->setor->listar();
        $this->exibir($dados);
    }

    public function cadastrar() {

        $this->exibir();
    }

    public function salvar() {

        $this->carregar('setor');
        $this->setor->salvar();
        $this->session->set_flashdata('success', 'Setor cadastrado com sucesso.');
        $this->redirecionar('listar');
    }

}
