<?php

class User

{

	// Element BDD

	private $_id;
	private $_pwd
	private $_nom;
	private $_prenom;
	private $_email;

	// Constructeur

	public function __construct(array $data)
	{
		$this->hydrate($data);
	}

	public function hydrate(array $data)
	{
		foreach ($data as $key => $value) 
		{
			$method = 'set'.ucfirst($key);

			if(method_exists($this, $method))
				$this->$method($value);
		}
	}

	// Setters

	public function setId($id)
	{
		$id = (int) $id;

		if($id > 0)
			$this->_id = $id;
	}

	public function setPwd($pwd)
	{
	
		if(is_string($pwd))
			$this->_pwd = $pwd;
	}

	public function setNom($nom)
	{
	
		if(is_string($nom))
			$this->_nom = $nom;
	}

	public function setPrenom($prenom)
	{
	
		if(is_string($prenom))
			$this->_prenom = $prenom;
	}

	public function setEmail($email)
	{
	
		if(is_string($email))
			$this->_email = $email;
	}

	
	// Getters

	public function id()
	{
		return $this->_id;
	}

	public function pwd()
	{
		return $this->_pwd;
	}

	public function nom()
	{
		return $this->_nom;
	}

	public function prenom()
	{
		return $this->_prenom;
	}

	public function email()
	{
		return $this->_email;
	}


}


?>
