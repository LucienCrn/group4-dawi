<?php

include_once('controllers/CheckStatus.php');

  
if(isset($_POST['confrm'])){
        
    if($_POST['confrm'] == "confirmer"){
            
        $status = new CheckStatus();

        if($status->getPermission() != 1){
            /**
             * destruction des variables de session
             * destruction de la session
             * redirection vers la page d'accueil
             */
            session_unset();
            session_destroy();
            header('location: index.php');
        } else {
            include_once('models/error_model.php');
            include_once('views/error_view.php');
            include_once('controllers/error_controller.php');
        }
    } else {
        echo "<p class='d-flex justify-content-center' style='color: red;'>Saisie incorrect.</p>";
    }
}