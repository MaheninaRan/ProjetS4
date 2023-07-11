<?php

class Admin_model extends CI_Model {
    public function insert_Admin($data) {
        return $this->db->insert('admins', $data);
    }

    public function get_admin($email, $password) {
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where('email' , $email);
        $this->db->where('motdepasse', $password);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result_array();
        } else {
            return false;
        }
    }


}