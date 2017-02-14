<?php 
session_start();
?>

<html>
<body>
<?php
$i=$_SESSION['iddd'];

   mysql_connect ("localhost","root","");
   mysql_select_db("sitw");
   $rep = mysql_query ("SELECT * FROM commentaire WHERE idemp ='$i'");
   $r = mysql_num_rows ($rep);
   if ($r == 0){
    echo "Votre Messagerie est vide !";
   }
   else {
   while($az= mysql_fetch_array($rep)){
?>

<center>
<table width="476" border="0">
  <tr>
    <th width="338" scope="col"><div align="left">Reponse de commentaire: </div></th>
  </tr>
  <tr>
    <td><?php  echo $az['repon']; ?></td>
  </tr>
</table>
<?php } }?>
</center>
</body>
</html>