<?php
 require_once(DIR_CORE.'/model.php');
 
 class Sujet extends Model{
 	protected $id_sujet;
 	protected $nom_sujet;
 	protected $description_sujet; 
 	protected $id_utilisateur;
 	


 	public function __construct(){ 
 		parent::__construct('sujet', 'id_sujet', true, array('Utilisateur' => 'id_utilisateur'));	
 	}

 	public function getID(){
 		return $this->id_sujet;
 	}

 	public function setID($var){
 		$this->id_sujet=$var;
 	}

 	public function getNom(){
 		return $this->nom_sujet;
 	}

 	public function setNom($var){
 		$this->nom_sujet=$var;
 	}

 	public function getDescription(){
 		return $this->description_sujet;
 	}

 	public function setDescription($var){
 		$this->description_sujet=$var;
 	}

 	public function getIDutil(){
 		return $this->id_utilisateur;
 	}

 	public function setIDutil($var){
 		$this->id_utilisateur=$var;
 	}

}

?>