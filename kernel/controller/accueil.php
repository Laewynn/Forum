<?php
require_once(DIR_CTRL.'/controller.php');
class accueil extends controller {
	// protected $models = array('');

	public function index(){
		$this->render('index');
	}
}

?>
