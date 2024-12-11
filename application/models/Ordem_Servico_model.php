<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Ordem_Servico_model extends CI_Model {

    public function listar() {

        $sql = "select OS.ID_ORDEM_SERVICO, U2.NOME_COMPLETO AS SOLICITANTE, C.DESCRICAO as CATEGORIA, SOS2.DESCRICAO as PROBLEMA, DECODE(SOS.ID_STATUS, 1, 2, 2, 3, 3, 5) as ID_STATUS, S.DESCRICAO as STATUS, DECODE (SOS.ID_STATUS, 1, null, U.NOME_COMPLETO) as RESPONSAVEL, TO_CHAR(SOS.DATA_ANDAMENTO, 'DD/MM/YY RR:MM') AS DATA_ANDAMENTO, DECODE(SOS.ID_STATUS, 1, 'success', 2, 'warning', 3, 'danger', 4, 'info') AS CLASSE FROM ordem_servico os,
                    STATUS_OS sos,
                    STATUS_OS sos2,
                    STATUS s,
                    USUARIO u,
                    USUARIO u2,
                    CATEGORIA c
                WHERE SOS.ID_ORDEM_SERVICO = OS.ID_ORDEM_SERVICO
                AND SOS.ID_STATUS_OS       = OS.ID_ULT_STATUS_OS
                AND SOS.ID_USUARIO         = U.ID_USUARIO
                AND SOS2.ID_ORDEM_SERVICO  = OS.ID_ORDEM_SERVICO
                AND SOS2.ID_STATUS_OS      = 1 -- Abertura
                AND SOS2.ID_USUARIO        = U2.ID_USUARIO
                AND SOS.ID_STATUS          = S.ID_STATUS
                AND OS.ID_CATEGORIA        = C.ID_CATEGORIA
                AND SOS.ID_STATUS NOT IN  (4, 5)";
        if ($this->session->userdata('ID_TIPO_USUARIO') == 2) { 
                $sql = $sql.' and SOS2.ID_USUARIO    = '.$this->session->userdata('ID_USUARIO');
        }
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function consultar($id) {

        $data = ['id' => $id];
        $sql = "select OS.ID_ORDEM_SERVICO, C.DESCRICAO as CATEGORIA, SOS.DESCRICAO as PROBLEMA, S.DESCRICAO as STATUS, U.NOME_COMPLETO as RESPONSAVEL, TO_CHAR(SOS.DATA_ANDAMENTO, 'DD/MM/YYYY HH:MM:SS') AS DATA_ANDAMENTO, ID_ULT_STATUS_OS
                from ordem_servico os, STATUS_OS sos, STATUS s, USUARIO u, CATEGORIA c
                where OS.ID_ORDEM_SERVICO = SOS.ID_ORDEM_SERVICO
                and SOS.ID_USUARIO = U.ID_USUARIO
                and SOS.ID_STATUS = S.ID_STATUS
                and OS.ID_CATEGORIA = C.ID_CATEGORIA
                and SOS.ID_STATUS_OS = 1 -- Abertura
                and OS.ID_ORDEM_SERVICO = ?";
        $query = $this->db->query($sql, $data);
        return $query->row_array();
    }

    public function andamento($id) {

        $data = ['id' => $id];
        $sql = "select SOS.ID_STATUS_OS, SOS.DESCRICAO as PROBLEMA, S.DESCRICAO as STATUS, U.NOME_COMPLETO as RESPONSAVEL, TO_CHAR(SOS.DATA_ANDAMENTO, 'DD/MM/YYYY HH:MM:SS') AS DATA_ANDAMENTO
                from ordem_servico os, STATUS_OS sos, STATUS s, USUARIO u
                where OS.ID_ORDEM_SERVICO = SOS.ID_ORDEM_SERVICO
                and SOS.ID_USUARIO = U.ID_USUARIO
                and SOS.ID_STATUS = S.ID_STATUS
                and SOS.ID_STATUS_OS <> 1 -- Abertura
                and OS.ID_ORDEM_SERVICO = ?";
        $query = $this->db->query($sql, $data);
        return $query->result_array();
    }

    public function salvar() {

        $this->db->trans_begin();

        $data = ['categoria' => $this->input->post('categoria')];
        $sql = 'INSERT INTO ORDEM_SERVICO (ID_ORDEM_SERVICO, ID_CATEGORIA, ID_ULT_STATUS_OS) VALUES ((SELECT NVL(MAX(ID_ORDEM_SERVICO) + 1, 1) FROM ORDEM_SERVICO), ?, 1)';
        $this->db->query($sql, $data);

        $data2 = ['id' => $this->session->userdata('ID_USUARIO'), 'problema' => $this->input->post('problema')];
        $sql2 = 'INSERT INTO STATUS_OS (ID_STATUS_OS, ID_ORDEM_SERVICO, ID_STATUS, ID_USUARIO, DESCRICAO, DATA_ANDAMENTO) VALUES ((SELECT NVL(MAX(ID_STATUS_OS), 1) FROM STATUS_OS WHERE ID_ORDEM_SERVICO = (SELECT NVL(MAX(ID_ORDEM_SERVICO), 1) FROM ORDEM_SERVICO)), (SELECT NVL(MAX(ID_ORDEM_SERVICO), 1) FROM ORDEM_SERVICO), 1, ?, ?, SYSDATE)';
        $this->db->query($sql2, $data2);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $this->session->set_flashdata('danger', 'Não foi possível cadastrar o Ticket.');
        } else {
            $this->db->trans_commit();
            $this->session->set_flashdata('success', 'Ticket cadastrado com sucesso.');
        }
    }

    public function atualizar($id) {

        $this->db->trans_begin();

        $data = ["id" => $id, "status" => $this->input->post('status'), "id_session" => $this->session->userdata('ID_USUARIO'), "andamento" => $this->input->post('andamento')];
        $sql = 'INSERT INTO STATUS_OS (ID_STATUS_OS,
         ID_ORDEM_SERVICO,
          ID_STATUS,
           ID_USUARIO,
            DESCRICAO,
             DATA_ANDAMENTO) VALUES (
             (SELECT NVL(MAX(ID_STATUS_OS) + 1, 1) FROM STATUS_OS), ?,
              ?, 
              ?, 
              ?,
               SYSDATE)';
        $this->db->query($sql, $data);

        $data2 = ["id" => $id, "id2" => $id];
        $sql2 = 'UPDATE ORDEM_SERVICO SET ID_ULT_STATUS_OS = (SELECT NVL(MAX(ID_STATUS_OS), 1) FROM STATUS_OS WHERE ID_ORDEM_SERVICO = ?) WHERE ID_ORDEM_SERVICO = ?';
        $this->db->query($sql2, $data2);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            $this->session->set_flashdata('danger', 'Não foi possível atualizar o Ticket.');
        } else {
            $this->db->trans_commit();
            $this->session->set_flashdata('success', 'Ticket atualizado com sucesso.');
        }
    }

}
