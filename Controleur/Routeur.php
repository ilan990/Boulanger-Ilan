<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurBillet.php';
require_once 'Controleur/ControleurProduit.php';
require_once 'Controleur/ControleurLogin.php';
require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlAccueil;
    private $ctrlBillet;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlBillet = new ControleurBillet();
        $this->ctrlProduit = new ControleurProduit();
        $this->ctrlLogin = new ControleurLogin();

    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'billet') {
                    $idBillet = intval($this->getParametre($_GET, 'id'));
                    if ($idBillet != 0) {
                        $this->ctrlBillet->billet($idBillet);
                    }
                    else
                        throw new Exception("Identifiant de billet non valide");
                }
                else if($_GET['action']=='produits')
                {
                    $this->ctrlProduit->Produits();
                }
                else if($_GET['action']=='produitId')
                {
                    $idProduit =intval($this->getParametre($_GET, 'id'));
                    if($idProduit != 0)
                    {
                        $this->ctrlProduit->produitById($idProduit);
                    }
                    else{
                        throw new Exception("identifiant de produit non validée");

                    }
                }
                else if($_GET['action']=='connexion')
                {
                    $this->ctrlLogin->cnx();
                }
                else if($_GET['action']=='getAuth')
                {

                    if(!isset($_SESSION)){
                        session_start();

                    }

                    $pseudo = $this->getParametre($_POST, 'pseudo');

                    $password = $this->getParametre($_POST, 'mdp');
                    if(isset($_SESSION['username']) && isset($_SESSION['password'])) {

                        $this->ctrlLogin->getAuth($pseudo, $password);


                        // var_dump(session_status());
                    }else{
                        var_dump(  'Identifiants Incorrect');
                    }
                }
                else if($_GET['action'] == 'getDeconnexion')
                {
                    session_start();
                    $_SESSION= [];
                    session_destroy();
                    session_unset();
                    $this->ctrlLogin->getDeconnexion();
                }
                else if ($_GET['action'] == 'commenter') {
                    $auteur = $this->getParametre($_POST, 'auteur');
                    $contenu = $this->getParametre($_POST, 'contenu');
                    $idBillet = $this->getParametre($_POST, 'id');
                    $this->ctrlBillet->commenter($auteur, $contenu, $idBillet);
                }
                else
                    throw new Exception("Action non valide");
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }

}
