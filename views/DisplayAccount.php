<?php

class DisplayAccount{

    public function alrdyLogin(){
        $txt = "<p style='margin-top: 250px; margin-left: 645px'>"
            . "[ERREUR] Le mail est déjà utilisé.</p>";
        return $txt;
    }

    public function errorPassword(){
        $txt = "<p style='margin-top: 250px; margin-left: 645px'>"
            . "[ERREUR] Vous n'avez pas confirmé votre mot de passe.</p>";
        return $txt;
    }

    public function getCreation(){
        $txt = "<p style='margin-top: 250px; margin-left: 645px'>"
            . "[VALIDER] Le compte à bien été créé.</p>";
        return $txt;
    }
}