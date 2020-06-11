<?php

/**
 * Inclusion des fichiers nécessaires 
 */
include_once('_config/config.php');
include_once('_functions/functions.php');
include_once('views/includes/head.php');


// Définition de la page courante
if(isset($_GET['page']) AND !empty($_GET['page'])){
    $page = trim(lower($_GET['page']));
} else {
    $page = 'home';
}

/**
 * Tableau comportant toutes les pages
 */
$allPages = scandir('controllers/');

/**
 * Vérification de l'éxistence de la page
 */
if(in_array($page.'_controller.php', $allPages)){

    /**
     * Inclusion de la page
     */
    include_once('models/'.$page.'_model.php');
    include_once('views/'.$page.'_view.php');
    include_once('controllers/'.$page.'_controller.php');
    
} else {

    /**
     * Inclusion de la page d'erreur
     */
    include_once('models/error_model.php');
    include_once('controllers/error_controller.php');
    include_once('views/error_view.php');
}