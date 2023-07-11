<?php

class Sport_model extends CI_Model {
    public function insert_Sport($data) {
        return $this->db->insert('sport', $data);
    }
    public function getAllSport() {
        $query = $this->db->query(
            'select * from sport'
        );
        return $query->result_array();
    }
    public function insert_session($data) {
        return $this->db->insert('session', $data);
    }

}