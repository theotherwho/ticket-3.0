<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Setor_model extends CI_Model {

    public function listar() {

        $this->db->order_by('ID_SETOR');
        $query = $this->db->get('SETOR');
        return $query->result_array();
    }

    public function salvar() {

        $data = ['description' => $this->input->post('descricao')];
        $sql = 'INSERT INTO SETOR (ID_SETOR, DESCRICAO) VALUES ((SELECT NVL(MAX(ID_SETOR) + 1, 1) FROM SETOR), ?)';
        return $this->db->query($sql, $data);
    }

}
