<?php
require_once 'autoload.php';
require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlAccueil;
    private $ctrlProduit;
    private $ctrlLogin;
    private $ctrlPanier;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlProduit = new ControleurProduit();
        $this->ctrlLogin = new ControleurLogin();
        $this->ctrlPanier = new ControleurPanier();

    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                 if($_GET['action']=='produits')
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

                    if(!isset($_SESSION))
                    {
                        session_start();
                    }

                    $pseudo = $this->getParametre($_POST, 'username');
                    $password = $this->getParametre($_POST, 'password');

                    $this->ctrlLogin->getAuth($pseudo, $password);

                }
                else if($_GET['action'] == 'getDeconnexion')
                {
                    session_start();
                    $_SESSION= [];
                    session_unset();
                    session_destroy();
                    $this->ctrlLogin->getDeconnexion();
                }
                else if ($_GET['action'] == 'panier') {

                    $this->ctrlPanier->Panier();
                }else if($_GET['action'] == 'histoire'){
                    $this->ctrlAccueil->histoire();
                }else if($_GET['action'] == 'cgv'){
                    $this->ctrlAccueil->CGV();
                }else if($_GET['action'] == 'cgu'){
                    $this->ctrlAccueil->CGU();
                }else if($_GET['action']=='accueil')
                {
                    $this->ctrlAccueil->accueil();
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
