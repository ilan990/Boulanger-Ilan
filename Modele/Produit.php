<?php

require_once 'Modele/Modele.php';
/**
 * Fournit les services d'accès aux genres musicaux 
 * 
 * @author Baptiste Pesquet
 */
class Produit extends Modele {

// Renvoie la liste des commentaires associés à un billet
    public function getProduits() {
        $sql = 'select * from produits';
        $produits = $this->executerRequete($sql);
        return $produits;
    }
    public function getProduitById($idProduit)
    {
        $sql = 'select * from produits where id = ?';
        $produit = $this->executerRequete($sql, array($idProduit));
        return $produit;
    }

    // Ajoute un commentaire dans la base
    /* public function ajouterCommentaire($auteur, $contenu, $idBillet) {
        $sql = 'insert into T_COMMENTAIRE(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)'
            . ' values(?, ?, ?, ?)';
        $date = date(DATE_W3C);  // Récupère la date courante
        $this->executerRequete($sql, array($date, $auteur, $contenu, $idBillet));
    } */
}