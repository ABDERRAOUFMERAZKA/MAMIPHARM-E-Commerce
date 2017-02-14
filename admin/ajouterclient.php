<?php 
session_start();
?>
<html>
<body>
<fieldset>
<legend>Formulaire d'jout </legend>
<form action="ajouterclient2.php" method="post">
<table width="372" border="1">
  <tr>
    <td width="153">Nom:</td>
    <td width="203"><input type="text" name="nom"></td>
  </tr>
  <tr>
    <td>Prenom : </td>
    <td><input type="text" name="prenom"></td>
  </tr>
  <tr>
    <td>Adresse:</td>
    <td><input type="text" name="adresse"></td>
  </tr>
  <tr>
    <td>Code Postal : </td>
    <td><input type="text" name="cp"></td>
  </tr>
  <tr>
    <td>Ville :</td>
    <td><input type="text" name="ville"></td>
  </tr>
  <tr>
    <td>Telephone :</td>
    <td><input type="text" name="tel"></td>
  </tr>
  <tr>
    <td>Login : </td>
    <td><input type="text" name="log"></td>
  </tr>
  <tr>
    <td>Mot De Passe : </td>
    <td><input type="text" name="mdp"></td>
  </tr>
  <tr>
    <td>Mtricul Fiscal : </td>
    <td><input type="text" name="mf"></td>
  </tr>
  <tr>
    <td>Registre De Commerce : </td>
    <td><input type="text" name="rg"></td>
  </tr>
  <tr>
    <td>A.I</td>
    <td><input type="text" name="ai"></td>
  </tr>
</table>
<input type="reset" value="Annuler">
<input type="submit" value="Ajouter">
</form>
</fieldset>
<div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="105" height="95" /></a>   </div>
<a href="clientcondif.php">Retour</a> </div>
<?php

if (isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['adresse'])&&isset($_POST['cp'])&&isset($_POST['ville'])&&isset($_POST['tel'])&&isset($_POST['log'])&&isset($_POST['mdp'])&&isset($_POST['mf'])&&isset($_POST['rg'])&&isset($_POST['ai'])){

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adr=$_POST['adresse'];
$cp=$_POST['cp'];
$ville=$_POST['ville'];
$tel=$_POST['tel'];
$log=$_POST['log'];
$mdp=$_POST['mdp'];
$mf=$_POST['mf'];
$rg=$_POST['rg'];
$ai=$_POST['ai'];
$etat="non";
mysql_connect("localhost","root","");
mysql_select_db("sitw");
mysql_query("insert into client values ('','$nom','$prenom','$log','$adr','$cp','$ville','$tel','$mdp','$mf','$rg','$ai','$etat')");
echo "succ&eacute; d'ajout";
}

?>
</body>
</html>
