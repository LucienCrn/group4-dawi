<?php

include_once("./models/account_model.php");

class DisplayAccount extends AccountModel {

    public function showMail($mail){
        $results = $this->getLogin();
        echo "E-mail : " . $results[0]['user_mail'];
    }

    public function alrdyLogin(){
        $txt = "<p class='d-flex justify-content-center' style='color: red;'>"
            . "[ERREUR] Le mail est déjà utilisé.</p>";
        return $txt;
    }

    public function errorPassword(){
        $txt = "<p class='d-flex justify-content-center' style='color: red;'>"
            . "[ERREUR] Vous n'avez pas confirmé votre mot de passe.</p>";
        return $txt;
    }

    public function getCreation(){
        $txt = "<p class='d-flex justify-content-center' style='color: green;'>"
            . "[VALIDER] Le compte à bien été créé.</p>";
        return $txt;
    }
}