<?php

include_once("./models/Database.php");
include_once ("./models/login_model.php");
include_once ("./views/DisplayLogin.php");

$mdl = new LoginModel;
$dsp_login = new DisplayLogin();

if(isset($_POST['login'])){

    $data = $mdl->getPwd();

    if(password_verify($_POST['pwd'], $data[0]['user_pwd'])){
        $info = $mdl->getInfos();
            /* Ouverture de la session et initialisation des variables de session */
            $_SESSION['first_name'] = $info[0]['user_prenom'];
            $_SESSION['name'] = $info[0]['user_nom'];
            $_SESSION['mail'] = $info[0]['user_mail'];
            $_SESSION['status'] = $info[0]['fk_usr_statut'];

            header('location: index.php');

    } else {
        echo $dsp_login->errorConnected();
    }
}