<?php

include("MonPDO.php");

class LoginModel {

    function afficheErreur($e) {
		echo 'Erreur : ' . utf8_encode($e->getMessage()) . '<br />';
		echo 'N° : ' . $e->getCode();
    }

    public function getPwd(){
	$unpsswd = null;

		$sql = "SELECT user_pwd FROM user WHERE user_mail = '" . $_POST['login'] . "'";
		try {
            $stmt = MonPDO::getInstance()->query($sql);
            $unpsswd = $stmt->fetchAll();
           }
           catch(PDOException $e) {
               afficheErreur($e);
           }
           return $unpsswd;
    }

    public function getInfos(){
        $infos = null;

		$sql = "SELECT * FROM user WHERE user_mail = '" . $_POST['login'] . "'";
		try {
            $stmt = MonPDO::getInstance()->query($sql);
            $infos = $stmt->fetchAll();
           }
           catch(PDOException $e) {
               afficheErreur($e);
           }
           return $infos;
    }

    
    public function setLogin($first_name, $name, $mail, $passwd, $statut){
        $ret = false;
        
        try {
            $sql = "INSERT INTO user (user_prenom, user_nom, user_mail, user_pwd, fk_usr_statut) VALUES (:a, :b, :c, :d, :e)";
            $stmt = MonPDO::getInstance()->prepare($sql); // Préparation de la requête
            $stmt->execute([
                ":a"=>$first_name,
                ":b"=>$name, 
                ":c"=>$mail, 
                ":d"=>$passwd,
                ":e"=>$statut
                ]);
            $ret = true;
        } catch(PDOException $e) {
            $this->afficheErreur($e);
        }
        return $ret;    
    }
}