<?php

include("MonPDO.php");

class AdminModel {

    function afficheErreur($e) {
		echo 'Erreur : ' . utf8_encode($e->getMessage()) . '<br />';
		echo 'N° : ' . $e->getCode();
    }

    public function getUsers(){
        $users = null;

		$sql = "SELECT * FROM dawi.user
                LEFT JOIN dawi.statut
                ON dawi.user.fk_usr_statut = dawi.statut.sta_code
                ORDER BY user_id ASC;";
		try {
            $stmt = MonPDO::getInstance()->query($sql);
            $users = $stmt->fetchAll();
           }
           catch(PDOException $e) {
               $this->afficheErreur($e);
           }
           return $users;
    }
}