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
	  document.location.href = "supprimerclient2.php?idPersonne="+identifiant ;
	}
      }
    </script>
  </head>
<body>
 <?php
    //connection au serveur:
    $cnx = mysql_connect( "localhost", "root", "" ) ;
 
    //s�lection de la base de donn�es:
    $db = mysql_select_db( "sitw" ) ;
 
    //requ�te SQL:
    $sql = "SELECT *
	      FROM client
	      ORDER BY nom" ;
 
    //ex�cution de la requ�te:
    $requete = mysql_query( $sql, $cnx ) ; ?>
   <center><table width="528" border="1">
  <tr>
    <th width="106" scope="col">nom</th>
    <th width="137" scope="col">prenom</th>
	<th width="137" scope="col">Ville</th>
    <th width="126" scope="col">supprimer</th>
  </tr>
</table></center>

    <?php //affichage des donn�es:
    while( $result = mysql_fetch_array( $requete ) )
    {?>
 <center><table width="528" border="1">
  <tr>
    <th width="106" scope="col"><?php echo $result['nom'];?></th>
    <th width="137" scope="col"><?php echo $result['prenom'];?></th>
	<th width="137" scope="col"><?php echo $result['ville']; ?></th>
    <th width="126" scope="col"> <a href="#" onClick="confirme('<?php echo $result['id']; ?>')" ><img src="Corbeille.jpg" width="60" height="60"></a></th>
  </tr>
</table></center>

    <?php }
	
  ?>
 <div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="105" height="95" /></a>   </div>
  <a href="clientcondif.php">retour</a> </div>
</body>
</html>

