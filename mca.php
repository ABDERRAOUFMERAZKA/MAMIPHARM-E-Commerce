<?php 
session_start();
?>
<html>
<body>
<?php
$i=$_SESSION['user'];

   mysql_connect ("localhost","root","");
   mysql_select_db("sitw");
   $rep = mysql_query ("SELECT * FROM ca WHERE id ='$i'");
   $r = mysql_num_rows ($rep);
   if ($r == 0){
    echo "Votre Messagerie est vide !";
   }
   else {
   while($az= mysql_fetch_array($rep)){
?>

<center>
<table width="342" border="0">
  <tr>
    <th width="336" scope="col">Reponse de demande de cr&eacute;dit d'achat : </th>
  </tr>
  <tr></tr>
  <tr></tr>
   <tr></tr>
  <tr></tr>
   <tr></tr>
  <tr></tr>
  <tr>
    <th width="336"scope="col"><label> type de cr&eacute;dit : </label> <?php  echo $az['type_credit']; ?></th>
  </tr>
  <tr>
    <th width="336"scope="col"><label> la réponse de la commission &eacute;t&eacute; : </label> <?php  echo $az['reponse']; ?></th>
  </tr>
  
</table>
<?php } }?>
</center>
</body>
</html>