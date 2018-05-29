<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title> FORUM </title>
<h1><center>FORUM </center></h1>
</head>
<body>
<?php 

include ('\kernel\class\Model.php');
include ('\kernel\class\Sujet.php');
include ('\kernel\class\Commentaire.php');
include ('\kernel\class\Utilisateur.php');

  echo "Création d'un nouvel utilisateur : <br/>";
  $JeanPaul = new Utilisateur(100, "JeanPaul", "jeanpaul@gmail.com", "jp");
  echo "Son pseudo : ".$JeanPaul->getPseudo() . "<br/>";
  echo "Son email : ".$JeanPaul->getEmail() . "<br/>";
  echo "<b>Son MDP</b> : ".$JeanPaul->getMDP() . "<br/> <br/>" ;
/*
  $NomColonne = array("pseudo_utilisateur", "email_utilisateur", "mdp_utilisateur");
  $NouvelleValeur= array( "Caca" , "troudeschiottes@gmail.com", "lecacacestdelicieux");
  
  //Création d'un utilisateur
  $JeanPaul->create(); 

    // Lire l'utilisateur
  	echo "Lire une ligne de la table utilisateur : <br/>";
  	$JeanPaul->read();
  	print_r($JeanPaul);

    // 
  	echo "<br/> <br/> <br/>";
  	print_r($JeanPaul->find("pseudo_utilisateur='JeanPaul'"));
    echo "<br/> <br/> <br/>"; 

    // Mettre à jour l'utilisateur
  	$JeanPaul->update();


 //Supprimer un utilisateur 
  $SupprimerUtil = $JeanPaul->delete(); */

  // Création d'un sujet 
  $NRJ = new Sujet(1, "NRJ", "Délire de Management en TMG3", $JeanPaul->getID());
  echo "Création d'un sujet :  <br/> "; 
  $NRJ->create();

  // Lire le sujet 
  echo "<br/>Lire une ligne de la table Sujet : <br/>";
  $NRJ->read();

  // Trouver la ligne 
  /*echo "<br/> Trouver une ligne de la table Sujet : <br/>";
  print_r($NRJ->find("description_sujet LIKE '%Délire%'"));*/


  // Mettre à jour une ligne de la table Sujet
  $NRJ->update();


  // Supprimer un sujet
  $NRJ->delete();


  // Création d'un commentaire


?>
</body>
</html>