<?php

class Utilisateur_model extends CI_Model {
    public function insert_Utilisateur($data) {
        return $this->db->insert('utilisateur', $data);
    }

    public function insert_Detail($data) {
        return $this->db->insert('detailutilisateur', $data);
    }
    public function getAllPersonne() {
        $query = $this->db->query(
            'select * from utilisateur'
        );

        return $query->result_array();
    }

    public function getsession() {
        $this->db->select('*');
        $this->db->from('session');
        $this->db->order_by('idsession' , 'desc');
        $this->db->limit(1);

        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert_session($data) {
        return $this->db->insert('session', $data);
    }

    public function getPersonne($iduser){
        $this->db->select('*');
        $this->db->from('profilUtilisateur');
        $this->db->where('id' , $iduser);
        
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getNbrUtilisateur($iduser){
        $this->db->select_Count('id');
        $this->db->from('utilisateur');
        
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getIdPersonne($nom){
        $this->db->select('id');
        $this->db->from('utilisateur');
        $this->db->where('nom' , $nom);
        
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getCountPersonne(){
        $this->db->select('COUNT(id) as count');
        $this->db->from('utilisateur');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['count'];
    }

    public function getCountHomme(){
        $this->db->select('COUNT(id) as count');
        $this->db->from('utilisateur');
        $this->db->where('genre','Homme');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['count'];
    }

    public function getCountFemme(){
        $this->db->select('COUNT(id) as count');
        $this->db->from('utilisateur');
        $this->db->where('genre','Femme');
        $query = $this->db->get();
        $result = $query->row_array();
        return $result['count'];
    }   


    public function get_user($email, $password) {
        $this->db->select('*');
        $this->db->from('utilisateur');
        $this->db->where('email' , $email);
        $this->db->where('motdepasse', $password);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }


  
}