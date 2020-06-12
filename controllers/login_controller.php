<?php

include_once("./models/Database.php");
include_once ("./models/login_model.php");
include_once ("./views/DisplayLogin.php");

$mdl = new LoginModel;
$dsp_login = new DisplayLogin();

if(isset($_POST['login'])){

    $data = $mdl->getPwd();

    $passVerif = password_verify($_POST['pwd'], $data[0]['user_pwd']);
    /* S'il y a une erreur lors de la connexion alors on affiche un message d'erreur */
    if(!$data[0]['user_pwd']){
        echo $dsp_login->errorConnected();
    } else {
        if($passVerif){
            /* Requete SQL pour recuperer les donnes affilie a l'utilisateur */
            $info = $mdl->getInfos();
            /* Ouverture de la session et initialisation des variables de session */
            session_start();
            $_SESSION['first_name'] = $info[0]['user_prenom'];
            $_SESSION['name'] = $info[0]['user_nom'];
            $_SESSION['mail'] = $info[0]['user_mail'];
            $_SESSION['status'] = $info[0]['fk_usr_statut'];

            /* Affiche le message pour valider la connexion */
            echo $dsp_login->getConnected();
            echo "<META HTTP-EQUIV='refresh' CONTENT='2; URL=index.php?page=home'>";
        } else {
            /* Si le mot de passe est different de celui stocke dans la base de donnees alors on affiche un message d'erreur */
            echo $dsp_login->errorConnected();
        }
    }
}