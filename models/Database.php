<?php

class Database {

    private static $connexion = false;

    /**
     * Database constructor.
     * @param bool $connexion
     */
    public function __construct(){
        if(!self::$connexion) {
            $a = $this->dbconnect();
            echo $a;
        }
    }

    /* Fonction de connexion a la base de donnees */
    private function dbconnect(){
        $tblparam = parse_ini_file("database.ini"); //On dit que le contenu de la variable '$tblparam' se situe dans le fichier database.ini
        try{
            self::$connexion = new PDO('mysql:host=' . $tblparam['hostname'] .';dbname='.$tblparam['dbname'].';charset=' .$tblparam['dbcollation'] , $tblparam['usrname'], $tblparam['usrpwd']);
        }
        catch(Exception $e){
            self::$connexion = false;
            die('Error : '.$e->getMessage());
        }
    }

    /**
     * @return bool
     */
    public function getConnexion(){
        return self::$connexion;
    }
}