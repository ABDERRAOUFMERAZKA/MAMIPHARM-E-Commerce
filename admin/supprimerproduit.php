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
	  document.location.href = "supprimerproduit2.php?idPersonne="+identifiant ;
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
	      FROM produit
	      ORDER BY nom" ;
 
    //exécution de la requête:
    $requete = mysql_query( $sql, $cnx ) ; ?>
   <center><table width="486" border="1">
  <tr>
    <th width="106" scope="col">nom</th>
    <th width="137" scope="col">prix</th>
	<th width="137" scope="col">Description</th>
	<th width="106" scope="col">supprimer</th>
  
  </tr>
</table></center>

    <?php //affichage des données:
    while( $result = mysql_fetch_array( $requete ) )
    {?>
 <center><table width="486" border="1">
  <tr>
    <th width="99" scope="col"><?php echo $result['nom'];?></th>
    <th width="125" scope="col"><?php echo $result['prix'];?></th>
	<th width="132" scope="col"><?php echo $result['description']; ?></th>
    <th width="102" scope="col"> <a href="#" onClick="confirme('<?php echo $result['id']; ?>')" ><img src="Corbeille.jpg" width="60" height="60"></a></th>
  </tr>
</table></center>

    <?php }
	
  ?>
  <div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="105" height="95" /><a href="produitconfig.php">retour</a></div>
</body>
</html>


