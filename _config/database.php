<?php

class Database {

private static $connexion = false;

    public function __construct(){
        if(!self::$connexion) {
            $a=$this->dbconnect();
            echo $a;
        }
    }


    private function dbconnect(){
        $serverName = "";
        $database = "";
        $user = "";
        $password = "";
        try{
            self::$connexion = new PDO("sqlsrv:Server=" . $serverName .";Database=".$database, $user, $password);
        }
        catch(Exception $e){
            self::$connexion = false;
            die('Error : '.$e->getMessage());
        }
    }

    public function request($req){
        $prep = $this->dbconnect()->prepare($req);
        $prep->execute();

        return $prep;
    }

    public function getConnexion(){
        return self::$connexion;
    }
}