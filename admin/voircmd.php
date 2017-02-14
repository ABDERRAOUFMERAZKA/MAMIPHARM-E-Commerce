<?php
session_start();
?>
<center>
<table width="510" height="54" border="1">
  <tr>
    <th width="99" height="48" scope="col">Nom</th>
    <th width="90" scope="col">Prenom</th>
    <th width="86" scope="col">Ville</th>
    <th width="73" scope="col">Adresse</th>
    <th width="127" scope="col">Commande</th>
  </tr>
</table>
</center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sitw");
$req=mysql_query("SELECT * FROM client");
while($f=mysql_fetch_array($req)){?>
<center>
<table width="510" height="41" border="1">
  <tr>
    <th width="99" height="35" scope="col"><?php echo $f['nom'];?></th>
    <th width="90" scope="col"><?php echo $f['prenom']; ?></th>
    <th width="86" scope="col"><?php echo $f['ville']; ?></th>
    <th width="73" scope="col"><?php echo $f['adresse']; ?></th>
    <th width="127" scope="col"><?php $d=$f['login']; echo"<a href=\"detail.php?rep=$d\">voir commande</a>"; ?></th>
  </tr>
</table>
</center>
<?php } ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
  <div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="54" height="47" /></a> <a href="clientcondif.php">Retour </a> </div>
</div>
