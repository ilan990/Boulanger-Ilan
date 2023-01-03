<?php




require_once 'Modele/Login.php';
require_once 'Vue/Vue.php';

class ControleurLogin

{
    private $login;

    public function __construct()
    {
        $this->login = new Login();
        //session_start();
    }
    public function cnx()
    {
        $connections = $this->login->getConnexion();
        $vue = new Vue("Connexion");
        $vue->generer(array('connections'=>$connections));

    }
    public function getAuth($pseudo, $password)
    {
        $this->login->getAutho($pseudo, $password);

        $_SESSION["status"] = session_status();

        if($_SESSION['status'] == 2)
        {
            header("location:./");
            // session_start();
        }
        else{
            header("location:http://localhost/devoirRobertShopMake-Up/index.php?action=cnx1");
        }
    }
    public function getDeconnexion()
    {
        // session_start();
        // session_unset();
        // session_destroy();
        // $_SESSION = array();

        header("location:./");
        // exit();
    }
}