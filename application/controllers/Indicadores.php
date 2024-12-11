<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Indicadores extends MY_Controller {

    public function index() {

        $this->carregar('indicadores');
        $dados['os_abertas'] = $this->indicadores->os_abertas();
        $dados['os_em_andamento'] = $this->indicadores->os_em_andamento();
        $dados['os_em_impedimento'] = $this->indicadores->os_em_impedimento();
        $dados['os_encerradas'] = $this->indicadores->os_encerradas();
        $this->exibir($dados);
    }

}
