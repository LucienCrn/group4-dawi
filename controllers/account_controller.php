<?php

include_once("./models/Database.php");
include_once ("./models/account_model.php");
include_once ("./views/DisplayAccount.php");

$database = new Database();
$creation = new AccountModel();
$m_creation = new DisplayAccount();

/* Declaration des variables pour garder en memoires les donnees */
$name = null;
$first_name = null;
$password = null;
$password2 = null;
$mail = null;
$statut = null;

/* On verifie que les donnees du formulaire ne soient pas null */
if(isset($_POST['name'])){
    $name = strtolower($_POST['name']);
}
if(isset($_POST['first-name'])){
    $first_name = strtolower($_POST['first-name']);
}

/* On verifie si l'identifiant (e-mail) existe deja */
if(isset($_POST['login'])){
    $mail = strtolower($_POST['login']);

    $creation->getLogin($mail);

    /* S'il existe on affichage un message et interrompt la création du compte */
    if($creation->getLogin($mail)){
        echo $m_creation->alrdyLogin();
        exit();
    }
}

if(isset($_POST['statut'])){
    $statut = $_POST['statut'];
    switch($statut){
        case "Etudiant":
            $statut = 2;
        break;
        case "Entreprise":
            $statut = 4;
        break;
        case "Enseignant":
            $statut = 8;
        break;
        case "Personnel MIAW":
            $statut = 16;
        break;
    }
}

if(isset($_POST['pwd'])){
    $password = $_POST['pwd'];
}
if(isset($_POST['pwd2'])){
    $password2 = $_POST['pwd2'];
}

/* On vérifie la valeur des deux champs */
if($password != null && $password2 != null){
    /* Si le contenu n'est pas le même on affiche un message d'erreur */
    if($password != $password2){
        $m_creation->errorPassword();
        exit();
    } else {

        /* Verification du mot de passe crypte */
        $pass_hache = password_hash($password, PASSWORD_DEFAULT);
        
        /* On insert donc les données */
        $userId = $creation->setLogin($first_name, $name, $mail, $pass_hache, $statut);

        /* Sinon on valide la création de compte et on invite l'utilisateur à se connecter */
        if($userId){
            echo $m_creation->getCreation();
        }        
    }
}
?>