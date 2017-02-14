<?php 
session_start();
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sitw");
$r=mysql_query("select * from congé ");?>
<div align="left">
  <table width="727" border="1">
    <tr>
      <th width="109" scope="col">nom</th>
    <th width="110" scope="col">prenom</th>
    <th width="107" scope="col">date_debut</th>
    <th width="110" scope="col">date_fin</th>
    <th width="109" scope="col">type</th>
    <th width="142" scope="col">repondre</th>
    </tr>
  </table>
  <?php
while($rep=mysql_fetch_array($r)){ ?>
  <table width="725" border="1">
    <tr>
      <th width="109" scope="col"><?php $g=$rep['id']; $f=mysql_query("select * from employe where id='$g'"); $a=mysql_fetch_array($f); echo $a['nom']; ?></th>
      <th width="109" scope="col"><?php echo $a['prenom'];?></th>
      <th width="109" scope="col"><?php echo $rep['datedb'];?></th>
      <th width="109" scope="col"><?php echo $rep['datedf'];?></th>
      <th width="109" scope="col"><?php echo $rep['type'];?></th>
      <th width="140" scope="col"><?php $s=$rep['idcongé']; echo"<a href=\"reponse.php?reponse=$s\">accepter/</a>"; echo"<a href=\"reponse2.php?reponse=$s\">refuser</a>"; ?></th>
    </tr>
    </table>
  <?php 
	} 
	
	?>
  
</div>
