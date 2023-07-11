<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends CI_Controller {

    public function admin(){
        $this->load->view('page/AdminLogin');
    }   
    public function adminAccueil(){
        $this->load->view('page/headerAdmin');
        $this->load->view('page/adminAccueil');
    }   
    public function checklogin(){
        $this->load->model('Admin_model');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $result = $this->Admin_model->get_admin($email, $password);
        $this->load->view('page/headerAdmin');
        $this->load->view('page/adminAccueil');
    }

    public function stat(){
        $this->load->model('Utilisateur_model');
        $this->load->model('Objectif_model');
        $utilisateur=$this->Utilisateur_model->getCountPersonne(); 
        $maigrir=$this->Objectif_model->getCountMaigrir(); 
        $grossir=$this->Objectif_model->getCountGrossir();
        $homme=$this->Utilisateur_model->getCountHomme(); 
        $femme=$this->Utilisateur_model->getCountFemme(); 
        
        $data['utilisateur']=$utilisateur;
        $data['maigrir']=$maigrir;
        $data['grossir']=$grossir;
        $data['homme']=$homme;
        $data['femme']=$femme;
        $this->load->view('page/headerAdmin',$data); 
        $this->load->view('page/stat'); 
        $this->load->view('page/footerAdmin'); 
    } 

    public function effacer(){
        $this->load->model('Regime_model');
        $this->load->view('page/headerAdmin'); 
        $regime['regime']=$this->Regime_model->getAllRegime(); 
        $this->load->view('page/Effacer',$regime); 
    } 

    public function formulaireRegime(){
        $this->load->view('page/headerAdmin'); 
        $this->load->view('page/formulaireRegime'); 
    } 

    public function modifierRegime(){
        $this->load->model('Regime_model');
        $this->load->view('page/headerAdmin'); 
        $regime['regime']=$this->Regime_model->getAllRegime(); 
        $this->load->view('page/modifierRegime',$regime); 
    } 

    public function formulaireSport(){
        $this->load->view('page/headerAdmin'); 
        $this->load->view('page/formulaireSport'); 
    } 
    
  
    public function saveRegime(){ 
        $this->load->model('Objectif_model'); 
        $this->load->model('Utilisateur_model'); 
        $this->load->model('Regime_model');
        $objectif = array (
            'nom' => $this->input->post('nom'),
            'prixjour' => $this->input->post('prix'),
            'efficacite' => $this->input->post('efficacite')
        );
        $nom =$this->input->post('nom'); 
        $this->Regime_model->insert_Regime($objectif); 
        $id['id']=$this->Regime_model->getIdRegime($nom); 
        $this->load->view('page/headerAdmin'); 
        $this->load->view('page/insertRegimeDetail',$id);
    }
    
    public function saveDetailRegime(){ 
        $this->load->model('Objectif_model'); 
        $this->load->model('Utilisateur_model'); 
        $this->load->model('Regime_model');
        $objectif = array (
            'idRegime' => $this->input->post('idRegime'),
            'petitDejeuner' => $this->input->post('dejeuner'),
            'repas' => $this->input->post('repas'),
            'dinner' => $this->input->post('dinner'),
        );  
        $this->Regime_model->insert_Detail($objectif); 
        $this->load->view('page/adminAccueil');
    }

    public function effacerSport(){
        $this->load->model('Sport_model');
        $this->load->view('page/headerAdmin'); 
        $sport['sport']=$this->Sport_model->getAllSport(); 
        $this->load->view('page/effacerSport',$sport); 
    } 
    public function saveSport(){ 
        $this->load->model('Objectif_model'); 
        $this->load->model('Sport_model'); 
        $this->load->model('Regime_model');
        $objectif = array (
            'idRegime' => $this->input->post('regime'),
            'nom' => $this->input->post('nom'),
            'duree' => $this->input->post('duree')
        );
        $nom =$this->input->post('nom'); 
        $this->Sport_model->insert_Sport($objectif); 
        $this->load->view('page/adminAccueil');
    }

    public function deleteRegime(){ 
        $this->load->model('Supprimer_model'); 
        $this->load->model('Regime_model');
        $this->load->view('page/headerAdmin');
        $idregime=$_GET['idRegime'];
        $this->Supprimer_model->supprimerRegime($idregime); 
        $regime['regime']=$this->Regime_model->getAllRegime(); 
        $this->load->view('page/Effacer',$regime); 
    }

    public function deleteSport(){ 
        $this->load->model('Supprimer_model'); 
        $this->load->model('Sport_model');
        $this->load->view('page/headerAdmin');
        $idSport=$_GET['idSport'];
        $this->Supprimer_model->supprimerSport($idSport); 
        $sport['sport']=$this->Sport_model->getAllSport(); 
        $this->load->view('page/EffacerSport',$sport); 
    }

    

}
