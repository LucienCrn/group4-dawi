<?php

/**
 * Permet de sécuriser une chaine de caractères
 * @param $string : chaien de caractères à sécuriser
 */
function str_secu($string){
    return trim(htmlspecialchars($string));
}

/**
 * Améliore le visuel lors d'un débug
 * @param $var : contenu à débugger
 */
function debug($var){
    echo "<pre>";
        var_dump($var);
    echo "</pre>";
}

/**
 * Simplifie la fonction strtolower en lower
 * @param $string : contenu à transformer en minuscule
 */
function lower($string){
    return strtolower($string);
}

/**
 * Simplifie la fonction strtoupper en upper
 * @param $string : contenu à transformer en majuscule
 */
function upper($string){
    return strtoupper($string);
}