<?php session_start(); ?>


<?php
mysql_connect("localhost","root","");
mysql_select_db("sitw");
$r=mysql_query("select * from reclamation");
?>
<center><table width="542" border="1">
  <tr>
    <th width="69" scope="col">nom</th>
    <th width="256" scope="col">E_mail</th>
    <th width="195" scope="col">Probleme</th>
	
  </tr>
</table></center> 
<?php
while($rep=mysql_fetch_array($r)){?>
<center><table width="542" border="1">
  <tr>
    <th width="69" scope="col"><?php echo $rep['id'];  ?></th>
    <th width="257" scope="col"><?php echo $rep['E_mail']; ?></th>
    <th width="194" scope="col"><?php $s=$rep['idrec']; echo"<a href=\"mizou2.php?reponse=$s\">lire</a>";?></th>
	
  </tr>
</table></center> 

<?php } 
  
?>
 <div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="60" height="50" /></a><a href="clientcondif.php">retour</a></div>