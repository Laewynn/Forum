<?php 

	foreach($utilisateur as $k => $v) {
		echo '</br><b>Id : </b>'.$v['id_utilisateur'].'</br></br>
		<b>Pseudo : </b>'.$v['pseudo_utilisateur'].'</br></br>
		<b>Mdp : </b>'.$v['mdp_utilisateur'].'</br></br>
		<b>Email : </b>'.$v['email_utilisateur'].'</br></br>';

	
		echo '<a href="'.DIR_WEBROOT.'cutilisateur/fupdate/'.$v['id_utilisateur'].'"><input type="submit" value="Modifier"/></a><a href="'.DIR_WEBROOT.'cutilisateur/delete/'.$v['id_utilisateur'].'"><input type="submit" value="Supprimer"/></a>';
	}

	
	
?>