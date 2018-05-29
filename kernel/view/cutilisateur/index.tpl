<h2>Index des utilisateurs</h2>
<?php foreach($utilisateur as $k => $v) {
		echo '</br><a href =  "'.DIR_WEBROOT.'cutilisateur/read/'.$v['id_utilisateur'].'">'.$v['pseudo_utilisateur'].'</a> </br>';
	}
	//print_r($categ);
?>