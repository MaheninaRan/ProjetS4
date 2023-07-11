<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fonction extends CI_Controller {

    function arrondiSpecial($nombre){
        $partieEntiere = floor($nombre); // Partie entière du nombre
        $partieDecimale = $nombre - $partieEntiere; // Partie décimale du nombre
        
        if ($partieDecimale < 0.3) {
            return $partieEntiere; // Arrondi vers le bas
        } else {
            return $partieEntiere + 1; // Arrondi vers le haut
        }
    }
}
