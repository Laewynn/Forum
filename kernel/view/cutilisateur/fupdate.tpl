<?php $t = explode('/',$_GET['p']); 
foreach($utilisateur as $k => $v) {
echo '<form action="'.DIR_WEBROOT.'cutilisateur/update/'.$t[2].'" method="post">
<p>Pseudo : <input type="text" name= "pseudo" value="'.$v['pseudo_utilisateur'].'"/></p>
<p>Mdp : <input type="text" name= "mdp" value="'.$v['mdp_utilisateur'].'"/></p>
<p>Email : <input type="text" name= "email" value="'.$v['email_utilisateur'].'"/></p>
<input type="submit" value="OK"/>
</form>';
}
?>