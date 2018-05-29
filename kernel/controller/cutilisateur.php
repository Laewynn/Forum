<?php
require(DIR_CTRL.'/controller.php');
//require(DIR_CORE.'class/classCategories.php');
	class cutilisateur extends Controller {

		//attribs
		var $models = array('utilisateur');

		public function index() {
			$data['utilisateur'] = $this->utilisateur->find('1=1');
			$this->set($data);
			$this->render('index');
		}

		public function read($id) {
			$utilisateur = new utilisateur();
			$this->utilisateur->read($id);
			$data['utilisateur'] = $this->utilisateur->totable();
			$this->set($data);
			$this->render('read');
		}

		public function create() {
			$this->utilisateur->setpseudo($_POST['pseudo']);
			$this->utilisateur->setmdp($_POST['mdp']);
			$this->utilisateur->setemail($_POST['email']);
			$this->utilisateur->create();
			$this->render('create');
		}
		public function fcreate(){
			
			$this->render('fcreate');
		}


		public function fupdate($id){
			$this->utilisateur->read($id);
			$data['utilisateur'] = $this->utilisateur->totable();
			$this->set($data);
			
			$this->render('fupdate');
		}
		
		public function update($id) {
			$this->utilisateur->setid($id);
			$this->utilisateur->setpseudo($_POST['pseudo']);
			$this->utilisateur->setmdp($_POST['mdp']);
			$this->utilisateur->setemail($_POST['email']);
			$this->utilisateur->update();
			$this->render('update');
		}

		public function delete($id){
			$this->utilisateur->read($id);
			$this->utilisateur->delete();
			$this->render('delete');

		}
	}
?>