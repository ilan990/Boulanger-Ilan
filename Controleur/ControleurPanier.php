<?php
require_once 'autoload.php';
class ControleurPanier {


    public function Panier() {

        $panier = [];
        $vue = new Vue("Panier");
        $vue->generer($panier);
    }

}

