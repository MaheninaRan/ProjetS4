<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class Supprimer_model extends CI_Model{

    public function supprimerRegime($id){
        $this->db->where('id', $id); 
        $this->db->delete('regime');
    }

    public function supprimerSport($id){
        $this->db->where('id', $id); 
        $this->db->delete('sport');
    }
    

}
?>
