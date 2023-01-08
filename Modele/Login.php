<?php

require_once 'Modele/Modele.php';

class Login extends Modele{
    public function getConnexion()
    {
        $sql = 'select * from register ';
        $connection = $this->executerRequete($sql);
        return $connection;
    }

    public function getAutho($pseudo, $password)
    {

        $sql = 'select * from register where username = ? and password = ?';
        $autho = $this->executerRequete($sql, array($pseudo, $password));
        if($autho->rowCount() > 0)
        {
            $_SESSION["status"] = session_status();
            return true;
        }
        else
        {

            session_unset();
            echo ' utilisateur && password introuvable ';
        }
    }

}

