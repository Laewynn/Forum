<?php

 class Commentaire extends Model{
 	protected $id_commentaire;
 	protected $contenu_commentaire;
 	protected $date_commentaire;
 	protected $id_utilisateur;
 	protected $id_sujet; 

 	public function __construct($ID, $Contenu, $Date, $Id_util, $ID_sujet){
 		$this->id_commentaire=$ID;
 		$this->contenu_commentaire=$Contenu;
 		$this->date_commentaire=$Date;
 		$this->id_utilisateur=$Id_util;
 		$this->id_sujet=$ID_sujet;
 	}

 	public function getID(){
 		return $this->id_commentaire;
 	}

 	public function setID($var){
 		$this->id_commentaire=$var;
 	}

 	public function getContenu(){
 		return $this->contenu_commentaire;
 	}

 	public function setContenu($var){
 		$this->pseudo_sujet=$var;
 	}

 	public function getDate(){
 		return $this->date_commentaire;
 	}

 	public function setDate($var){
 		$this->date_commentaire=$var;
 	}

 	public function getIDutil(){
 		return $this->id_utilisateur;
 	}

 	public function setIDutil($var){
 		$this->id_utilisateur=$var;
 	}

 	public function getIDsujet(){
 		return $this->id_sujet;
 	}

 	public function setIDsujet($var){
 		$this->id_sujet=$var;
 	}




}


?>