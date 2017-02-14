<?php
session_start();
?>
<html>
  <head>
    <title>modification de données en PHP :: partie 1</title>
  </head>
<body>
<center>       <table width="739" border="1">
  <tr>
    <th width="111" scope="col">Nom</th>
    <th width="114" scope="col">Image</th>
    <th width="130" scope="col">Prix</th>
    <th width="183" scope="col">Description</th>
    <th width="69" scope="col">Quantit&eacute;</th>
	<th width="78" scope="col">Modifier</th>
  </tr>
</table></center>

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
    $requete = mysql_query( $sql, $cnx ) ;
 
    //affichage des données:
    while( $result = mysql_fetch_array( $requete ) )
    { ?>
<center>       <table width="739" border="1">
  <tr>
    <th width="111" scope="col"><?php echo $result['nom'];?></th>
    <th width="114" scope="col"><img src="<?php echo $result['image'];?>" width="60" height="60"></th>
    <th width="130" scope="col"><?php echo $result['prix'];?></th>
    <th width="183" scope="col"><?php echo $result['description'];?></th>
    <th width="69" scope="col"><?php echo $result['quant'];?></th>
	<th width="78" scope="col"><?php $r=$result['id']; echo" <a href=\"modification2.php?idPersonne=".$r."\">modifier</a>";?></th>
  </tr>
</table></center>

      
    <?php }
  ?>
    
  <div align="center"><a href="index.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="105" height="95" /> <a href="produitconfig.php">retour</a> </div>
</body>
</html>
