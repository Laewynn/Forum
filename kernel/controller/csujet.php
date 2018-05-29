<?php
require_once(DIR_CTRL.'/controller.php');
class csujet extends controller {
	
	var $models = array('sujet');

	public function index(){
		//$this->render('index');
		$data = array ('sujet' => $this->sujet->find('1=1'));
		$this->set($data);
		$this->render('index');
	}
	
	public function fcreate(){
			//$this->set($this->sujet->find());
			$this->render('fcreate');
	}

	public function create() {
			$this->sujet->setIDutil('2');
			$this->sujet->setNom($_POST['titre']);
			$this->sujet->setDescription($_POST['description']);
			$this->sujet->create();
			$this->render('create');
	}

	public function read($id){
			$this->sujet->read($id);
			$data['sujet'] = $this->sujet->totable();
			$this->set($data);
			$this->render('read');

	}

	public function fupdate($id) {
			$this->sujet->read($id);
			$data['sujet'] = $this->sujet->totable();
			$this->set($data);
			$this->render('fupdate');
	}
		
	public function update($id) {
			$this->sujet->read($id);
			$this->sujet->setID($this->sujet->getID());
			$this->sujet->setNom($_POST['titre']);
			$this->sujet->setDescription($_POST['description']);
			$this->sujet->setIDutil($this->sujet->getIDutil()->getID());
			$this->sujet->update();
			$this->render('update');
	}

	public function delete($id){
			$this->sujet->read($id);
			$this->sujet->delete();
			$this->render('delete');

	}

}
?>