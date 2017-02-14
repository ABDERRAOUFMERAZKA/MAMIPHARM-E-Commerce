
<center><table width="437" border="1">
  <tr>
    <th width="109" scope="col">Nom</th>
    <th width="126" scope="col">Prenom</th>
    <th width="80" scope="col">Etat</th>
    <th width="94" scope="col">Action</th>
  </tr>
</table></center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sitw");
$req=mysql_query("SELECT * FROM client ");
 while ($re=mysql_fetch_array($req)){

?>
<center><table width="437" border="0">
  <tr>
    <th width="109" scope="col"><?php echo $re['nom'];?></th>
    <th width="126" scope="col"><?php echo $re['prenom'];?></th>
    <th width="80" scope="col"><?php echo $re['etat'];?></th>
    <th width="94" scope="col"><?php $id=$re['id'];$p=$re['etat']; if ($p=="oui"){echo"<a href=\"debloquer.php?id=$id\">Debloquer</a>";}else{echo"<a href=\"bloquer.php?id=$id\">Bloquer</a>";}?></th>
  </tr>
</table></center>
<?php } ?>
<div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="105" height="95" /></a>  <a href="clientcondif.php"> Retour </a>  </div>
 </div>