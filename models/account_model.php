<?php

include_once("./models/account_model.php");
include("MonPDO.php");

class AccountModel {

    function afficheErreur($e) {
		echo 'Erreur : ' . utf8_encode($e->getMessage()) . '<br />';
		echo 'N° : ' . $e->getCode();
    }

    function getLogin($mail){
	$unlogin = null;

		$sql = "SELECT user_mail FROM user WHERE user_mail = '?'";
		try {
	 		$stmt = MonPDO::getInstance()->prepare($sql);
 			$stmt->execute(array(
 				$mail
 			));
			$unlogin = $stmt->fetch();
		}
		catch(PDOException $e) {
			afficheErreur($e);
		}
		return $unlogin;
	}
    
    function setLogin($first_name, $name, $mail, $passwd, $statut){
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