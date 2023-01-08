<?php
require_once 'autoload.php';
class ControleurPanier {



    public function __construct() {

    }

// Affiche la liste de tous les billets du blog
    public function Panier() {

        $panier = [];
        $vue = new Vue("Panier");
        $vue->generer($panier);
    }



}

