<?php
require_once 'autoload.php';

class ControleurProduit {

    private $produit;

    public function __construct() {
        $this->produit = new Produit();
    }


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

