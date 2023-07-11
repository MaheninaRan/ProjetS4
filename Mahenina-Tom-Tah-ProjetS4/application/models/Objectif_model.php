<?php

class Objectif_model extends CI_Model {
    public function insert_Objectif($data) {
        return $this->db->insert('objectif', $data);
    }
    public function getsession() {
        $this->db->select('*');
        $this->db->from('session');
        $this->db->order_by('idsession' , 'desc');
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function getTypeObjectif($id,$colonne){
        $this->db->select($colonne);
        $this->db->from('objectif');
        $this->db->where('iduser' , $id);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getCountMaigrir(){
        $this->db->select('COUNT(but) as count');
        $this->db->from('objectif');
        $this->db->where('but' , 'Maigrir');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['count'];
    }

    public function getCountGrossir(){
        $this->db->select('COUNT(but) as count');
        $this->db->from('objectif');
        $this->db->where('but' , 'Grossir');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['count'];
    }

    public function insert_session($data) {
        return $this->db->insert('session', $data);
    }

}