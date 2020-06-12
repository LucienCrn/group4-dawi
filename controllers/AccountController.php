<?php

class AccountController extends AccountModel {

    public function createLogin($first_name, $name, $mail, $passwd, $statut){
        $this->setLogin($first_name, $name, $mail, $passwd, $statut);
    }
    
}