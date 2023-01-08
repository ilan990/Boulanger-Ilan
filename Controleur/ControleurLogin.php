<?php
require_once 'autoload.php';

class ControleurLogin

{
    private $login;

    public function __construct()
    {
        $this->login = new Login();
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

        if($_SESSION['status'] == 2)
        {
            header("location:./");
        }
        else{
            header("location:./index.php?action=connexion");
        }
    }
    public function getDeconnexion()
    {

        header("location:./");
    }
}