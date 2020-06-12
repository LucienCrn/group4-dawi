<?php
	/**
	* Classe MonPdo
	* Gère les accès à la base de données
	*/
	class MonPdo {
	 /**
	 * Attributs privés
	 */
		private static $HOTE; // serveur hôte de la bdd
		private static $PORT; // port
		private static $USER; // nom utilisateur
		private static $PASS; // mot passe utilisateur
		private static $BDD; // nom de la base de données

		private $PDOInstance = null; // Instance de la classe PDO
		private static $instance = null; // Instance de la classe MonPdo
		// Options pour les accès à la BDD
		private $sql_options = array (
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
		);
		/**
		 * Constructeur
		 * Crée une instance de la classe PDO pour l’accès à la base de données
		 */
		private function __construct(){
			self::$HOTE = 'localhost';
			self::$PORT = 3308;
			self::$BDD = 'dawi';
			self::$USER = 'root';
			self::$PASS = '';
			$dsn = "mysql:host=" . self::$HOTE . ";port=" . self::$PORT .
			";dbname=" . self::$BDD;
			$this->PDOInstance = new PDO($dsn, self::$USER, self::$PASS,
				$this->sql_options );
		}
		/**
		 * Singleton permettant d'instancier un objet unique MonPdo
		 * @return instance de la classe MonPdo
		 */
		public static function getInstance(){
			if (is_null(self::$instance)) {
			self::$instance = new MonPdo();
			}
			return self::$instance;
		}
		/**
		 * Exécute une requête SQL avec PDO
		 *
		 * @param string $query La requête SQL
		 * @return PDOStatement Retourne l'objet PDOStatement
		 */
		public function query($query){
		return $this->PDOInstance->query($query);
		}

		/**
		* Prépare une requête SQL avec PDO
		*
		* @param string $query La requête SQL
		* @return PDOStatement Retourne l'objet PDOStatement
		*/
		public function prepare($query) {
		return $this->PDOInstance->prepare($query);
		}
	}
?>