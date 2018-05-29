<?php 
	
	foreach($sujet as $k => $v) {
		//var_dump($v);
		echo '</br><b>Titre : </b>'.$v['nom_sujet'].'</br></br>
		<b>Description : </b>'.$v['description_sujet'].'</br></br>
		<b>Créé par : </b>'.$v['id_utilisateur']->getPseudo().'</br></br>';

	
		echo '<a href="'.DIR_WEBROOT.'csujet/fupdate/'.$v['id_sujet'].'"><input type="submit" value="Modifier"/></a><a href="'.DIR_WEBROOT.'csujet/delete/'.$v['id_sujet'].'"><input type="submit" value="Supprimer"/></a>';
	}
?>