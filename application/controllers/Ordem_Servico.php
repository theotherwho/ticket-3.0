<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ordem_Servico extends MY_Controller {

    public function listar() {

        $this->carregar('ordem_servico');
        $dados['ordem_servico'] = $this->ordem_servico->listar();
        $this->exibir($dados);
    }

    public function cadastrar() {

        $this->carregar('categoria');
        $dados['categoria'] = $this->categoria->listar();
        $this->exibir($dados);
    }

    public function salvar() {

        $this->carregar('ordem_servico');
        $this->ordem_servico->salvar();
        $this->redirecionar('listar');
    }

    public function editar($id) {
        
        $this->carregar('ordem_servico');
        $this->carregar('status');
        $dados['ordem_servico'] = $this->ordem_servico->consultar($id);
        $dados['andamento'] = $this->ordem_servico->andamento($id);
        $dados['status'] = $this->status->listar();
        $this->exibir($dados);
    }

    public function atualizar($id) {

        $this->carregar('ordem_servico');
        $this->ordem_servico->atualizar($id);
        $this->redirecionar('listar');
    }

}
