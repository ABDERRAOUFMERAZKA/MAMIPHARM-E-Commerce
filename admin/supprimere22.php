<?php 
session_start();
?>

<?php
  //connection au serveur:
  $cnx = mysql_connect("localhost", "root", "") ;
 
  //s�lection de la base de donn�es:
  $db = mysql_select_db("sitw") ;
 
  //r�cup�ration de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement supprimer:
  $id  = $_GET["idPersonne"] ;
 
  //requ�te SQL:
  $sql = "DELETE 
            FROM employe
	    WHERE id = ".$id ;
 	    
  //ex�cution de la requ�te:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des r�sultats, pour savoir si la suppression a march�e:
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
