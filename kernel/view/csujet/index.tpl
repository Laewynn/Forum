<div id="content">

<h2>Index des sujets</h2>
<a href =  "<?php echo DIR_WEBROOT; ?>cutilisateur/fcreate"> <input type='submit' class="myButton" value='Créer un utilisateur' /></a></br></br>
<a href =  "<?php echo DIR_WEBROOT; ?>cutilisateur/index"> <input type='submit' class="myButton" value='Voir les utilisateurs' /></a></br></br>
<a href =  "<?php echo DIR_WEBROOT; ?>csujet/fcreate"> <input type='submit' class="myButton" value='Créer un sujet' /></a></br></br>
<a href =  "<?php echo DIR_WEBROOT; ?>ccommentaire/fcreate"> <input type='submit' class="myButton" value='Créer un commentaire' /></a></br></br>
<?php foreach($sujet as $k => $v) {
	echo '</br><a href="'.DIR_WEBROOT.'csujet/read/'.$v['ID_Sujet'].'">'.$v['Nom_Sujet'].'</a></br>';
	}

?>

</div>
