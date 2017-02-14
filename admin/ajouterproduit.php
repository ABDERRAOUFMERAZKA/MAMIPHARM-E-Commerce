<?php
session_start();
?>
<html>
<style type="text/css">
<!--
.Style2 {
	color: #000000;
	font-weight: bold;
}
.Style6 {
	font-size: 16px;
	color: #0033CC;
	font-weight: bold;
}
-->
</style>
<body>
<fieldset>
<legend class="Style6">Ajouter produit</legend>
<form action="resultatajouterproduit.php" method="post">
<table width="372" border="0">
  <tr>
    <td width="115"><span class="Style2">Nom </span>: </td>
    <td width="241"><input type="text" name="nom"></td>
  </tr>
  <tr>
    <td class="Style2">Prix : </td>
    <td><input type="text" name="prix"></td>
  </tr>
  <tr>
    <td><span class="Style2">Description : </span></td>
    <td><input type="text" name="des"></td>
  </tr>
  <tr>
    <td class="Style2">Quantit&eacute; : </td>
    <td><input type="text" name="qte"></td>
  </tr>
  <tr>
    <td class="Style2">Image</td>
    <td><input type="text" name="image"> image.extention</td>
  </tr>
</table>
<input type="reset" value="Annuler">
<input type="submit" value="Ajouter">
</form>
</fieldset>
</body>
</html>
