<?php

include_once("../models/Database.php");

class CreateAccount extends Database {

    private $selectMail = "SELECT `user_mail`";
    private $fromUser = " FROM `dawi`.`user`";
    private $whereMail = " WHERE `usr_mail` = '?'";

    public function getLogin($userMail){
        $req = $this->selectMail . $this->fromUser . $this->whereMail . $userMail;
        $stmt = $this->getConnexion()->prepare($req);
        $stmt->execute([$userMail]);
    }

    public function createUserAccount($userFirstName, $userName, $userMail, $userPwd, $userStatut){
        $req = "INSERT INTO `dawi`.`user` (`user_prenom`, `user_nom`, `user_mail`, `user_pwd`, `fk_usr_statut`) VALUES ('?', '?', '?', '?', '?')";
        $stmt = $this->getConnexion()->prepare($req);
        $pdoExec = $stmt->execute(array($userFirstName, $userName, $userMail, $userPwd, $userStatut));
        echo implode('<br>', array($userFirstName, $userName, $userMail, $userPwd, $userStatut)) . '<br>';
        if($pdoExec){
            echo "Data has been inserted.";
        } else {
            echo "Cannot insert data.";
        }
    }
}