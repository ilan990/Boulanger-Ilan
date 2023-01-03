<?php

require_once 'Vue/Vue.php';
require_once 'Modele/Produit.php';

class ControleurProduit {

    private $produit;

    public function __construct() {
        $this->produit = new Produit();
    }

// Affiche la liste de tous les billets du blog
    public function Produits() {
        $produits = $this->produit->getProduits();
        $vue = new Vue("Produit");
        $vue->generer(array('produits' => $produits));
    }
    public function produitById($idProduit)
    {
        $produit = $this->produit->getProduitById($idProduit);
        $vue = new Vue("FicheProduit");
        $vue->generer(array('produit'=>$produit));
    }

}

