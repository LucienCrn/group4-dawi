<?php


class CheckStatus{

    /** Status :
         @anonyme = 1;
         @étudiant = 2;
         @entreprise = 4;
         @enseignant = 8;
         @personnel miaw = 16;
     */

    public function getDroitSession(){
        if(isset($_SESSION['status'])){
            return $_SESSION['status'];
        } else {
            return 1;
        }
    }

    public function getPermission($level = 1){
        /** ET logique */
        if($this->getDroitSession() & $level){
            return true;
        } else {
            return false;
        }
    }
}