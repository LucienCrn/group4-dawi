<?php

include("MonPDO.php");

class AccountModel {

    function afficheErreur($e) {
		echo 'Erreur : ' . utf8_encode($e->getMessage()) . '<br />';
		echo 'N° : ' . $e->getCode();
    }

    function getLogin($mail) {
		$ret = false;
		$sql = "SELECT count(*) as nb FROM user WHERE user_mail = :a";
		try {
			$stmt = MonPDO::getInstance()->prepare($sql); // Préparation de la requête
			$stmt->execute(array( // Exécution de la requête avec affectation des paramètres
			':a'=>$mail
			));
			$resultat = $stmt->fetch();
			$nb = $resultat['nb'];
			$stmt->closeCursor();
			if ($nb != 0) {
				$ret = true;
			} 
		} catch(PDOException $e) { 
			$this->afficheErreur($e);
		}
		return $ret;
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