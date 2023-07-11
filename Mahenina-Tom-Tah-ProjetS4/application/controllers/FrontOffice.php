<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontOffice extends CI_Controller {

    public function about(){
        $idutilisateur['idutilisateur'] = $this->session->userdata('id');
        $this->load->view('Templates/header',$idutilisateur);
        $this->load->view('page/about');
        $this->load->view('Templates/footer');
    }  
    
    public function home(){
        $this->load->view('Templates/header');
        $this->load->view('page/home');
        $this->load->view('Templates/footer');
    } 
    

}
