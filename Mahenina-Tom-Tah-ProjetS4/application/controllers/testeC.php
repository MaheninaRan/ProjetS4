<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testeC extends CI_Controller {

    public function teste() {
        $this->load->model('Objectif_model');
        $this->load->model('Regime_model');
        $listePersonne['listePersonne'] =$this->Regime_model->getEfficaceMax();   //le liste io antsona ao @view/teste.php
        $this->load->view('page/teste_Liste', $listePersonne);
    }

    public function insertUtilisateur(){ 
        $this->load->model('Utilisateur_model'); 
        $personne = array (
            'nom' => $this->input->post('nom'),
            'naissance' => $this->input->post('naissance'),
            'genre' => $this->input->post('genre'),
            'email' => $this->input->post('email'),
            'motdepasse' => $this->input->post('password')
        );
        $nom =$this->input->post('nom'); 
        $this->Utilisateur_model->insert_Utilisateur($personne); 
        $id['id']=$this->Utilisateur_model->getIdPersonne($nom); 
        $this->load->view('page/DetailUtilisateur',$id);
    }

    public function saveDetail(){ 
        $this->load->model('Utilisateur_model'); 
        $detail = array( 
            'idUser' => $this->input->post('idUser'),
            'taille' => $this->input->post('taille'),
            'poids' => $this->input->post('poids')
        );
        $idUser = array('idUser' => $this->input->post('idUser')); 
        $this->Utilisateur_model->insert_Detail($detail); 
        $this->load->view('page/Objectif',$idUser);
    }
    
    public function login() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->view('Templates/login_form');
    }

    public function saveObjectif(){ 
        $this->load->model('Objectif_model'); 
        $this->load->model('Utilisateur_model'); 
        $this->load->model('Regime_model');
        $objectif = array (
            'idUser' => $this->input->post('idUser'),
            'but' => $this->input->post('objectif'),
            'valeur' => $this->input->post('valeur')
        );
        $idUser = $this->input->post('idUser');
        $this->Objectif_model->insert_Objectif($objectif); 
        $this->session->set_userdata('id',$idUser);
        $idutilisateur['idutilisateur'] = $this->session->userdata('id');
        $this->load->view('Templates/header',$idutilisateur);
        $pers['pers'] = $this->Utilisateur_model->getPersonne($idUser); 

        $typeObjectif=$this->Objectif_model->getTypeObjectif($idUser,"but"); 
        if ($typeObjectif == "Maigrir"){
            $regimeMety = $this->Regime_model->getEfficaceMin();
        }else{
            $regimeMety = $this->Regime_model->getEfficaceMax();
        }
        $data['regimeMety'] = $regimeMety;
        $data['pers']=$pers;
        $this->load->view('page/home', $data);
        $this->load->view('Templates/footer');
    }

    public function checklogin() {
        $this->load->model('Utilisateur_model');
        $this->load->model('Objectif_model');
        $this->load->model('Regime_model');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $result = $this->Utilisateur_model->get_user($email, $password);
        $iduser = null;
        $nom = null;

        if ($result){
            foreach ($result as $d1) {
                $iduser = $d1['id'];
                $nom = $d1['nom'];
            }
            $pers['pers'] = $this->Utilisateur_model->getPersonne($iduser);   
            $tab = array(
                'id' => $iduser,
                'nom' => $nom
            );  
            $regimeMety = "";            
            $typeObjectif=$this->Objectif_model->getTypeObjectif($iduser,"but"); 
            if ($typeObjectif == "Maigrir"){
                $regimeMety = $this->Regime_model->getEfficaceMin();
            }else{
                $regimeMety = $this->Regime_model->getEfficaceMax();
            }
            $this->session->set_userdata('id',$iduser);
            $idutilisateur['idutilisateur'] = $this->session->userdata('id');
            $data['regimeMety'] = $regimeMety;
            $data['pers']=$pers;
            $this->load->view('Templates/header',$idutilisateur);
            $this->load->view('page/home', $data);
            $this->load->view('Templates/footer');
        } else {
            // Login failed
            redirect('index.php/register/login');
        }
    }
}
