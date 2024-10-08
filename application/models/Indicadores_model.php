<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Indicadores_model extends CI_Model {

    public function os_abertas() {

        $this->db->where('ID_STATUS', 1);
        $this->db->join('ORDEM_SERVICO', 'STATUS_OS.ID_ORDEM_SERVICO = ORDEM_SERVICO.ID_ORDEM_SERVICO AND STATUS_OS.ID_STATUS_OS = ORDEM_SERVICO.ID_ULT_STATUS_OS');
        return $this->db->count_all_results('STATUS_OS');
    }

    public function os_em_andamento() {

        $this->db->where('ID_STATUS', 2);
        $this->db->join('ORDEM_SERVICO', 'STATUS_OS.ID_ORDEM_SERVICO = ORDEM_SERVICO.ID_ORDEM_SERVICO AND STATUS_OS.ID_STATUS_OS = ORDEM_SERVICO.ID_ULT_STATUS_OS');
        return $this->db->count_all_results('STATUS_OS');
    }

    public function os_em_impedimento() {

        $this->db->where('ID_STATUS', 3);
        $this->db->join('ORDEM_SERVICO', 'STATUS_OS.ID_ORDEM_SERVICO = ORDEM_SERVICO.ID_ORDEM_SERVICO AND STATUS_OS.ID_STATUS_OS = ORDEM_SERVICO.ID_ULT_STATUS_OS');
        return $this->db->count_all_results('STATUS_OS');
    }

    public function os_encerradas() {

        $this->db->where('ID_STATUS', 4);
        $this->db->join('ORDEM_SERVICO', 'STATUS_OS.ID_ORDEM_SERVICO = ORDEM_SERVICO.ID_ORDEM_SERVICO AND STATUS_OS.ID_STATUS_OS = ORDEM_SERVICO.ID_ULT_STATUS_OS');
        return $this->db->count_all_results('STATUS_OS');
    }

}
