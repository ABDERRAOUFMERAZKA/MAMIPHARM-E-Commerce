<html>
  <head>
    <title>modification</title>
  </head>
<body>
  <?php
  include('entete.php');
  ?>
  <?php
  //connection au serveur:
  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
  //s�lection de la base de donn�es:
  $db = mysql_select_db( "sitw" ) ;
 
  //r�cup�ration de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idPersonne"] ;
 
  //requ�te SQL:
  $sql = "SELECT *
            FROM produit
	    WHERE id = ".$id ;
 
  //ex�cution de la requ�te:
  $requete = mysql_query( $sql, $cnx ) ;
 
  //affichage des donn�es:
  if( $result = mysql_fetch_object( $requete ) )
  {
  ?>
<form name="insertion" action="modification3.php" method="POST">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
  <table border="0" align="center" cellspacing="2" cellpadding="2">
    <tr align="center">
      <td>nom</td>
      <td><input type="text" name="nom" value="<?php echo($result->nom) ;?>"></td>
    </tr>
    <tr align="center">
      <td>prix</td>
      <td><input type="text" name="prix" value="<?php echo($result->prix) ;?>"></td>
    </tr>
    <tr align="center">
      <td>description</td>
      <td><input type="text" name="description" value="<?php echo($result->description) ;?>"></td>
    </tr>
    <tr align="center">
      <td>quantit&eacute;</td>
      <td><input type="text" name="qte" value="<?php echo($result->quant) ;?>"></td>
    </tr>
    <tr align="center">
      <td>image</td>
      <td><input type="text" name="image" value="<?php echo($result->image) ;?>"></td>
    </tr>
    <tr align="center">
      <td colspan="2"><input type="submit" value="modifier"></td>
    </tr>
  </table>
</form>
  <?php
  }//fin if 
  ?>
<p>  <a href="modifier2.php">retour</a></p>
</body>
</html>