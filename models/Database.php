<?php

class Database {

    private $servername;
    private $username;
    private $userpsswd;
    private $dbname;
    private $charset;

    public function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->userpsswd = "";
        $this->dbname = "dawi";
        $this->charset = "utf8";
        $this->port = "3308";
        $this->options = [
            \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $dsn = "mysql:host=$this->servername;dbname=$this->dbname;charset=$this->charset;port=$this->port";
            $pdo = new \PDO($dsn, $this->username, $this->userpsswd, $this->options);
       } catch (\PDOException $e) {
            var_dump($e->getMessage());
       }
        return $pdo;
    }
}