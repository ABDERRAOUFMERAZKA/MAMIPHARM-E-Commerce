<?php 
session_start();
?>

<?php
  //connection au serveur:
  $cnx = mysql_connect("localhost", "root", "") ;
 
  //sélection de la base de données:
  $db = mysql_select_db("sitw") ;
 
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement supprimer:
  $id  = $_GET["idPersonne"] ;
 
  //requête SQL:
  $sql = "DELETE 
            FROM employe
	    WHERE id = ".$id ;
 	    
  //exécution de la requête:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des résultats, pour savoir si la suppression a marchée:
  if($requete)
  {
    echo("La suppression &Agrave; &eacute;t&eacute; correctement effectu&eacute;e") ;
  }
  else
  {
    echo("La suppression &Agrave; &Eacute;t&Eacute; &Eacute;chou&Eacute;e") ;
  }
  echo "<a href=\"supprimeremp.php\">retour</a>";
?>
