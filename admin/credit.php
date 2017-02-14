<?php 
session_start();
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sitw");
$r=mysql_query("select * from ca ");?>
<div align="left">
  <table width="727" border="1">
    <tr>
      <th width="109" scope="col">nom</th>
    <th width="110" scope="col">Type de cr&eacute;dit</th>
    <th width="107" scope="col">E_mail</th>
    <th width="110" scope="col">telephone</th>
    <th width="109" scope="col">nom du lettre</th>
    <th width="142" scope="col">repondre</th>
    </tr>
  </table>
  <?php
while($rep=mysql_fetch_array($r)){ ?>
  <table width="725" border="1">
    <tr>
      <th width="109" scope="col"><?php echo $rep['id']; ?></th>
      <th width="109" scope="col"><?php echo $rep['type_credit'];?></th>
      <th width="109" scope="col"><?php echo $rep['mail'];?></th>
      <th width="109" scope="col"><?php echo $rep['tef'];?></th>
      <th width="109" scope="col"><?php echo $rep['fichier'];?></th>
      <th width="140" scope="col"><?php $s=$rep['id_credit']; echo"<a href=\"reponse8.php?reponse=$s\">accepter/</a>"; echo"<a href=\"reponse28.php?reponse=$s\">refuser</a>"; ?></th>
    </tr>
    </table>
  <?php 
	} 
	
	?>
  
</div>
