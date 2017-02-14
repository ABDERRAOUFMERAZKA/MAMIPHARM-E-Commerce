<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
.Style1 {color: #0099FF}
-->
</style>
</head>

<body>


<p align="center"><h1 align="center" class="Style1">Demmande de cong&eacute; </h1>
</p>
<?php
$me= $_SESSION['user'];
 mysql_connect("localhost","root","");
 mysql_select_db("sitw");
 $rep= mysql_query("SELECT * FROM employe WHERE login='$me'");
 $re= mysql_fetch_array($rep);
 $re['id'];
 $ss=$re['reponse'];
?>
<?php 
if (isset($_POST['datdb'])&& isset($_POST['datdf']) && isset($_POST['type'])){
$r = $re['id'];
$db = $_POST['datdb'];
$df = $_POST['datdf'];
$type = $_POST['type'];
mysql_connect("localhost","root","");
mysql_select_db("sitw");
mysql_query("INSERT INTO congé (idcongé,id,datedb,datedf,type,reponse) VALUES('','$r','$db','$df','$type','')");
echo "votre demande a &eacute;t&eacute; prise en charge , vous receverez la r&eacute;ponse de l'administration dans les plus brefs d&eacute;lais";
}
else {
?> 
<form action="cong2.php" method="post">

<center>
<table width="799" border="1">
  <tr>
    <th width="131" height="94" bgcolor="#999999" scope="col"><p>id : </p>
      <p><?php echo "$re[id]"; ?></p></th>
    <th width="197" bgcolor="#999999" scope="col"><p>date-debut(yyyy-mm-dd):</p>
      <p><input type="text" name="datdb"  /></p></th>
    <th width="187" bgcolor="#999999" scope="col"><p>date-fin(yyyy-mm-dd):</p>
      <p><input type="text" name="datdf"  /></p></th>
    <th width="131" bgcolor="#999999" scope="col"><p>type : </p>
      <p>
        <input type="radio" name="type" value="annuel" />    Anuell </p>
	  <p><input type="radio" name="type" value="maladie" />   Maladie</p>
	  <p><input type="radio" name="type" value="maternité" /> Maternit&eacute;</p>
	  </th>
    <th width="119" bgcolor="#999999" scope="col"><input type="submit" name="valider" value="Valider" /></th>
  </tr>
</table>


</center>
</form>
<p>
  <?php  echo $ss ; } ?>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="perso.php"><strong>Retour a mon escpace </strong></a>
  
</p>
</body>
</html>