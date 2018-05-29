<form action=<?php echo DIR_WEBROOT.'csujet/create';?> method="post">
	<p>Titre : <input type="text" name= 'titre'/></p>
	<p>Description :</p><textarea id="description" name="description"></textarea>
	<p>Commentaire:</p><textarea id="commentaire" name="commentaire"></textarea>
	
	<input type="submit" value="OK"/>
</form>

<!--
<?php
	$id_sujet=1;
 	$nom_sujet= "Les devs c'est les meilleurs !";
 	$description_sujet = "On est les meilleurs face aux réseaux de la classe STS2"; 
 	$id_utilisateur ="1";
 	$pseudo_utilisateur="Laewynn";
 

echo "<table id='sujet'>";
echo "<tr>";
		echo "<th class ='titre'>Sujet </th>";
		echo "<th class= 'titre'> Utilisateur </th>";
	echo "</tr>";

	//Pour chaque sujet afficher l'Id le nom et la description
foreach($this as $sujet=>$nomColonne){
	
	
	

	echo "<tr>";
	echo "<td class='sujet'> $id_sujet $nom_sujet $description_sujet </td>";
	echo "<td class='utilisateur'>$id_utilisateur $pseudo_utilisateur </td>";
	echo "</tr/>";
} 
echo "</table>";
 ?>
 */