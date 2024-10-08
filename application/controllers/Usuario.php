<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends MY_Controller {

    public function listar() {

        $this->carregar('usuario');
        $dados['usuario'] = $this->usuario->listar();
        $this->exibir($dados);
    }

    public function cadastrar() {

        $this->carregar('usuario');
        $this->carregar('setor');
        $dados['tipo_usuario'] = $this->usuario->tipo_usuario();
        $dados['setor'] = $this->setor->listar();
        $this->exibir($dados);
    }

    public function salvar() {

        $this->carregar('usuario');
        $this->usuario->salvar();
        $this->session->set_flashdata('success', 'Usuário cadastrado com sucesso.');
        $this->redirecionar('listar');
    }

}
