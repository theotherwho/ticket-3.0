<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {

	$this->twig->display('templates/login');
    }

    public function autenticar() {

        $this->load->model('usuario_model');
        if ($this->usuario_model->autenticar()) {
            $newdata = array('logado' => TRUE);
            $this->session->set_userdata($newdata);
            if ($this->session->userdata('ID_TIPO_USUARIO') == 1) {
                redirect('indicadores');
            } else {
                redirect('ordem_servico');
            }
        } else {
            $data['alerta'] = 'Usuário ou senha inválido.';
            $this->twig->display('templates/login', $data);
        }
    }

    public function logout() {

        $this->session->unset_userdata('logado');
        redirect();
    }

}
