<?php $t = explode('/',$_GET['p']); 
	foreach($sujet as $k => $v) {
		echo '<form action="'. DIR_WEBROOT.'csujet/update/'.$t[2].'" method="post">
				<p>Titre : <input type="text" name= "titre" value="'.$v['nom_sujet'].'"/></p>
				<p>Description :</p><textarea id="description" name="description">'.$v['description_sujet'].'</textarea>
				<input type="submit" value="OK"/>
			</form>';
	}
?>