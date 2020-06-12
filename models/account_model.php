<?php

include_once("./models/Database.php");

class AccountModel extends Database {

    private $selectMail = "SELECT user_mail";
    private $fromUser = " FROM user";
    private $whereMail = " WHERE usr_mail = '?'";

    public function getLogin($userMail){
        $sql = $this->selectMail . $this->fromUser . $this->whereMail . $userMail;
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userMail]);
    }

    public function createUserAccount($userFirstName, $userName, $userMail, $userPwd, $userStatut){
        $sql = "INSERT INTO user (user_prenom, user_nom, user_mail, user_pwd, fk_usr_statut) VALUES ('?', '?', '?', '?', '?')";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$userFirstName, $userName, $userMail, $userPwd, $userStatut]);
    }
}