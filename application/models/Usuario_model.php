<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    public function listar() {

        $sql = 'SELECT ID_USUARIO, NOME_COMPLETO, DESCRICAO AS SETOR, RAMAL, LOGIN FROM USUARIO JOIN SETOR ON USUARIO.ID_SETOR = SETOR.ID_SETOR';
        $query = $this->db->query($sql);
        return $query->result_array();
    }


    public function salvar() {

        $data = ['nome_completo' => $this->input->post('nome_completo'), 'setor' => $this->input->post('setor'), 'ramal' => $this->input->post('ramal'), 'usuario' => $this->input->post('usuario'), 'senha' => $this->input->post('senha'), 'tipo_usuario' => $this->input->post('tipo_usuario')];
        $sql = 'INSERT INTO USUARIO (ID_USUARIO, NOME_COMPLETO, ID_SETOR, RAMAL, LOGIN, SENHA, ID_TIPO_USUARIO, DATA_CADASTRO) VALUES ((SELECT NVL(MAX(ID_USUARIO) + 1, 1) FROM USUARIO), ?, ?, ?, ?, ?, ?, SYSDATE)';
        return $this->db->query($sql, $data);
    }

    public function tipo_usuario() {

        $this->db->order_by('ID_TIPO_USUARIO');
        $query = $this->db->get('TIPO_USUARIO');
        return $query->result_array();
    }


    public function autenticar() {

        $data = ['usuario' => $this->input->post('usuario'), 'senha' => $this->input->post('senha')];
        $sql = 'SELECT ID_USUARIO, ID_TIPO_USUARIO, NOME_COMPLETO FROM USUARIO WHERE LOGIN = ? AND SENHA = ?';
        $query = $this->db->query($sql, $data);
        $newdata = $query->row_array();
        $this->session->set_userdata($newdata);
        return $query->num_rows() == 1;
    }

}
