<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Status_model extends CI_Model {

    public function listar() {

        $this->db->where('ID_STATUS !=', 1);
        $this->db->order_by('ID_STATUS');
        $query = $this->db->get('STATUS');
        return $query->result_array();
    }

}
