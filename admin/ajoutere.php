<?php
session_start();
?>
<html>
<body>
<div align="center">Ajouter un nouveau employ&eacute;
</div>
<fieldset>
<legend>Formulaire</legend>
<form action="ajoutere2.php" method="post">
<table width="554" border="0">
  <tr>
    <td width="299">Nom : </td>
    <td width="245"><input type="text" name="nom"></td>
  </tr>
  <tr>
    <td>Prenom:</td>
    <td><input type="text" name="prenom"></td>
  </tr>
  <tr>
    <td><div align="left">Date de naissance : </div></td>
    <td>
      <div align="left">
        <input type="text" name="date">
        </div></td>
  </tr>
  <tr>
    <td>adresse : </td>
    <td><input type="text" name="adr"></td>
  </tr>
  <tr>
    <td>status:</td>
    <td><input type="text" name="statu"></td>
  </tr>
  <tr>
    <td>Login : </td>
    <td><input type="text" name="login"></td>
  </tr>
  <tr>
    <td>Passeword : </td>
    <td><input type="text" name="mdp"></td>
  </tr>
</table> 
<center>
<input type="reset" value="annuler">
<input type="submit" value="ajouter"></center>
</form>

</fieldset>
<?php
if (isset($_POST['nom'])&& isset($_POST['prenom'])&&isset($_POST['date'])&&isset($_POST['adr'])&&isset($_POST['statu'])&&isset($_POST['login'])&&isset($_POST['mdp'])){
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$adr=$_POST['adr'];
$statu=$_POST['statu'];
$log=$_POST['login'];
$mdp=$_POST['mdp'];
mysql_connect("localhost","root","");
mysql_select_db("sitw");
mysql_query("insert into employe values('','$nom','$prenom','$date','$adr','$statu','$log','$mdp','')");
echo "employ&eacute; ajout&eacute; avec succ&eacute; !";
}
?>
<div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="105" height="95" /></a>
  <a href="empconfig.php">Retour </a>   </div>
</body>

</html>
