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
 
  //sélection de la base de données:
  $db  = mysql_select_db( "sitw" ) ;
 
  //récupération des valeurs des champs:
  //nom:
  $nom     = $_POST["nom"] ;
  //prenom:
  $prix = $_POST["prix"] ;
  //adresse:
  $description = $_POST["description"] ;
  //code postal:
  $qte        = $_POST["qte"] ;
  //numéro de téléphone:
  $image        = $_POST["image"] ;
 
  //récupération de l'identifiant de la personne:
  $id         = $_POST["id"] ;
 
  //création de la requête SQL:
  $sql = "UPDATE produit
            SET nom         = '$nom', 
	          prix    = '$prix',
		  description    = '$description',
		  quant      = '$qte',
		  image = '$image'
           WHERE id = '$id' " ;
 
  //exécution de la requête SQL:
  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
 
 
  //affichage des résultats, pour savoir si la modification a marchée:
  if($requete)
  {
    echo("La modification &agrave; &eacute;t&eacute; correctement effectu&eacute;e") ;
  }
  else
  {
    echo("La modification à échouée") ;
  }
?>
<p><a href="modifier2.php">retour</a></p>