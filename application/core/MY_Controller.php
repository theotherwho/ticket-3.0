<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if ($this->session->userdata('logado') != TRUE) {
            redirect('login');
        }
    }

    public function carregar($model) {

        $this->load->model($model.'_model', $model);
    }

    public function exibir($data = []) {

	$this->twig->addGlobal('session', $this->session);
	$this->twig->display('pages/'.$this->router->class.'/'.$this->router->method, $data);
    }

    public function redirecionar($page) {

        redirect($this->router->class.'/'.$page);
    }

}
