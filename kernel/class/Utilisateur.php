<?php
 
require_once(DIR_CORE.'/Model.php');
 
 class Utilisateur extends Model{
 	protected $id_utilisateur;
 	protected $pseudo_utilisateur;
 	protected $email_utilisateur;
 	protected $mdp_utilisateur; 

	 
    // Attributs techniques
    //                      - ne sont plus nécessaires puisqu'on les passe en paramètre du constructeur parent 
    // protected $table = 'utilisateur';
    // protected $pk = 'id_utilisateur';
 	
    // Constructeur de la classe Utilisateur
	public function __construct($ID=null, $Pseudo=null, $Email=null, $MDP=null) {
		parent::__construct('utilisateur', 'id_utilisateur', true,null); // savoir si le nom de la table est auto-incrémenté
        $this->id_utilisateur = $ID;
		$this->pseudo_utilisateur = $Pseudo;
        $this->email_utilisateur = $Email;
        $this->mdp_utilisateur = $MDP;
       
        // $this->table = 'utilisateur';
        // $this->pk='id_utilisateur';

	} 

    // Destructeur de la classe Utilisateur
    public function __destruct(){
        //echo"Suppression de l'objet";

        // unset vide la mémoire 
        unset($id_utilisateur); 
        unset($pseudo_utilisateur);
        unset($email_utilisateur);
        unset($mdp_utilisateur);
    }
 
    // Accesseurs d'ID (Get)
    public function getID(){
    	return $this->id_utilisateur;
    }

    // Muttateurs d'ID (Set)
    public function setID($var){
        $this->id_utilisateur=$var;
    }

    // Accesseurs et Mutateurs du Pseudo
    public function getPseudo(){
		return $this->pseudo_utilisateur;
	}

    public function setPseudo($var){
        $this->pseudo_utilisateur=$var;
    }

    // Accesseurs d'ID (Get)
    public function getEmail(){
    	return $this->email_utilisateur;
    }

    public function setEmail($var){
        $this->email_utilisateur=$var;
    }

    // Accesseurs d'ID (Get)
    public function getMDP(){
    	return $this->mdp_utilisateur;
    }

    public function setMDP($var){
        $this->mdp_utilisateur=$var;
    }
  


}

?> 