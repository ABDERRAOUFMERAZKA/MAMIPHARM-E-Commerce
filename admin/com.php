<?php session_start(); ?>


<?php
mysql_connect("localhost","root","");
mysql_select_db("sitw");
$r=mysql_query("select * from commentaire");
?>
<center><table width="542" border="1">
  <tr>
    <th width="73" scope="col">nom</th>
    <th width="77" scope="col">prenom</th>
    <th width="400" scope="col">commentaire</th>
	
  </tr>
</table></center> 
<?php
while($rep=mysql_fetch_array($r)){?>
<center><table width="542" border="1">
  <tr>
    <th width="73" scope="col"><?php $g=$rep['idemp']; $f=mysql_query("select * from employe where id='$g'"); $a=mysql_fetch_array($f); echo $a['nom']; ?></th>
    <th width="77" scope="col"><?php echo $a['prenom']; ?></th>
    <th width="400" scope="col"><?php $s=$rep['idcom']; echo"<a href=\"comm.php?reponse=$s\">lire</a>";?></th>
	
  </tr>
</table></center> 

<?php } 
  
?>
<p>&nbsp;</p>
<div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="60" height="50" /></a><a href="empconfig.php">retour</a></div>