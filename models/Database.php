<?php

class Database {

    private $servername;
    private $username;
    private $userpsswd;
    private $dbname;
    private $charset;

    public function connect(){
        $this->servername = "localhost:3308";
        $this->username = "root";
        $this->userpsswd = "";
        $this->dbname = "dawi";
        $this->charset = "utf-8";

        try{
            $dsn = "mysql:host=".$this->servername.";dbname".$this->dbname.";charset=".$this->charset;
            $pdo = new PDO($dsn, $this->username, $this->userpsswd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $pdo;
    }
}