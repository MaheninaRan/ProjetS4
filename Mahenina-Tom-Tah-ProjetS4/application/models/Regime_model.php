<?php

class Regime_model extends CI_Model {
    public function insert_Regime($data) {
        return $this->db->insert('regime', $data);
    }

    public function insert_Detail($data) {
        return $this->db->insert('detailregime', $data);
    }
    public function getAllRegime() {
        $query = $this->db->query(
            'select * from regimeDetail'
        );
        return $query->result_array();
    }

    public function getEfficaceMin(){
        $this->db->select('*');
        $this->db->from('regimeDetail');
        $this->db->where('efficacite <' , 0.2);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getIdRegime($nom){
        $this->db->select('id');
        $this->db->from('regime');
        $this->db->where('nom' , $nom);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getEfficaceMax(){
        $this->db->select('*');
        $this->db->from('regimeDetail');
        $this->db->where('efficacite >' , 0.2);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPerson(){
        $this->db->select('prixjour');
        $this->db->from('regime');
        $this->db->where('efficacite >' , 0.2);
        
        $query = $this->db->get();
        return $query->result_array();
    }

  
}