<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_model extends CI_Model {

    public function listar() {

        $this->db->order_by('ID_CATEGORIA');
        $query = $this->db->get('CATEGORIA');
        return $query->result_array();
    }

    public function salvar() {

        $data = ['descricao' => $this->input->post('descricao')];
        $sql = 'INSERT INTO CATEGORIA (ID_CATEGORIA, DESCRICAO) VALUES ((SELECT NVL(MAX(ID_CATEGORIA) + 1, 1) FROM CATEGORIA), ?)';
        return $this->db->query($sql, $data);
    }

}
