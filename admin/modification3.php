<html>
  <head>
    <title>modification</title>
  </head>
<body>
  <?php
  include('entete.php');
  ?>
<?php
  //connection au serveur
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //s�lection de la base de donn�es:
  $db  = mysql_select_db( "sitw" ) ;
 
  //r�cup�ration des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $prix = $_POST["prix"] ;
  //adresse:
  $description = $_POST["description"] ;
  //code postal:
  $qte        = $_POST["qte"] ;
  //num�ro de t�l�phone:
  $image        = $_POST["image"] ;
 
  //r�cup�ration de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //cr�ation de la requ�te SQL:
  $sql = "UPDATE produit
            SET nom         = '$nom', 
	          prix    = '$prix',
		  description    = '$description',
		  quant      = '$qte',
		  image = '$image'
           WHERE id = '$id' " ;
 
  //ex�cution de la requ�te SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des r�sultats, pour savoir si la modification a march�e:
  if($requete)
  {
    echo("La modification &agrave; &eacute;t&eacute; correctement effectu&eacute;e") ;
  }
  else
  {
    echo("La modification � �chou�e") ;
  }
?>
<p><a href="modifier2.php">retour</a></p>