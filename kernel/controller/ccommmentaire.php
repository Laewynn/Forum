<?php
require_once(DIR_CTRL.'/controller.php');
class ccommentaire extends controller {
	
	var $models = array('sujet', 'utilisateur');

	public function index(){
		//$this->render('index');
		$data = array ('sujet' => $this->sujet->find('1=1'));
		$date = array ('utilisateur' => $this->utilisateur->find('1=1'));
		$this->set($data);
		$this->render('index');
	}

	public function fcreate(){
			//$this->set($this->sujet->find());
			$this->render('fcreate');
	}

	public function create() {
			$this->commentaire->setIDutil('2');
			$this->commentaire->setNom($_POST['titre']);
			$this->commentaire->setDescription($_POST['description']);
			$this->commentaire->create();
			$this->render('create');
	}

}

?>