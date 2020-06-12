<?php

class DisplayLogin{

    public function errorConnected(){
        $txt = "<p class='d-flex justify-content-center' style='color: red;'>"
            . "Identifiant ou mot de passe invalide.</p>";
        return $txt;
    }

    public function getConnected(){
        $txt = "<p class='d-flex justify-content-center' style='color: green;'>"
            . "Connexion bien effectué";
        return $txt;
    }
}