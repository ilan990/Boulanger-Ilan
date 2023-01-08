<?php
require_once 'autoload.php';

class ControleurAccueil {


    public function __construct() {
        session_start();
    }


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

