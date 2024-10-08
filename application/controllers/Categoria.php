<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends MY_Controller {

    public function listar() {

        $this->carregar('categoria');
        $dados['categoria'] = $this->categoria->listar();
        $this->exibir($dados);
    }

    public function cadastrar() {

        $this->exibir();
    }

    public function salvar() {

        $this->carregar('categoria');
        $this->categoria->salvar();
        $this->redirecionar(listar);
    }

}
