<?php

require_once 'Modele/Billet.php';
require_once 'Vue/Vue.php';

class ControleurAccueil {

    private $billet;

    public function __construct() {
        $this->billet = new Billet();
        session_start();
    }

// Affiche la liste de tous les billets du blog
    public function accueil() {
        $billets = "";
        $vue = new Vue("Accueil");
        $vue->generer(array('billets' => $billets));
    }
    public function histoire() {
        $billets = "";
        $vue = new Vue("histoire");
        $vue->generer(array('billets' => $billets));
    }
    public function CGV() {
        $billets = "";
        $vue = new Vue("CGV");
        $vue->generer(array('billets' => $billets));
    }
    public function CGU() {
        $billets = "";
        $vue = new Vue("CGU");
        $vue->generer(array('billets' => $billets));
    }

}

