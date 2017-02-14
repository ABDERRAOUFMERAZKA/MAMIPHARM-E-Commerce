<?php
session_start();
?>

<html>
  <head>
    <title>suppression </title>
    <script language="javascript">
      function confirme( identifiant )
      {
        var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ;
	if( confirmation )
	{
	  document.location.href = "supprimere2.php?idPersonne="+identifiant ;
	}
      }
    </script>
  </head>
<body>
 <?php
    //connection au serveur:
    $cnx = mysql_connect( "localhost", "root", "" ) ;
 
    //sélection de la base de données:
    $db = mysql_select_db( "sitw" ) ;
 
    //requête SQL:
    $sql = "SELECT *
	      FROM employe
	      ORDER BY nom" ;
 
    //exécution de la requête:
    $requete = mysql_query( $sql, $cnx ) ; ?>
   <center><table width="391" border="1">
  <tr>
    <th width="106" scope="col">nom</th>
    <th width="137" scope="col">prenom</th>
    <th width="126" scope="col">supprimer</th>
  </tr>
</table></center>

    <?php //affichage des données:
    while( $result = mysql_fetch_array( $requete ) )
    {?>
 <center><table width="391" border="1">
  <tr>
    <th width="106" scope="col"><?php echo $result['nom'];?></th>
    <th width="137" scope="col"><?php echo $result['prenom'];?></th>
    <th width="126" scope="col"> <a href="#" onClick="confirme('<?php echo $result['id']; ?>')" ><img src="Corbeille.jpg" width="60" height="60"></a></th>
  </tr>
</table></center>

    <?php }
	echo "<a href=\"empconfig.php\">revenir au espace de gestion des employ&eacute;</a>";
  ?>
</body>
</html>
