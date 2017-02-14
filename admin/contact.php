<?php 
session_start();
?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sitw");
$r=mysql_query("select * from message ");?>
<style type="text/css">
<!--
.Style1 {color: #0066FF}
-->
</style>

<div align="left">
  <table width="769" border="0">
    <tr>
      <th width="138" scope="col"><span class="Style1">Id_message</span></th>
    <th width="139" scope="col"><span class="Style1">Nom</span></th>
    <th width="150" scope="col"><span class="Style1">Prenom</span></th>
    <th width="162" scope="col"><span class="Style1">E_mail</span></th>
    <th width="146" scope="col"><span class="Style1">Message</span></th>
    </tr>
  </table>
  <?php
while($rep=mysql_fetch_array($r)){ ?>
  <table width="770" border="0">
    <tr>
      <th width="137" scope="col"><?php echo $rep['ID_message'];?></th>
      <th width="140" scope="col"><?php echo $rep['nom_emetteur'];?></th>
      <th width="149" scope="col"><?php echo $rep['prenom_emetteur'];?></th>
      <th width="162"  scope="col" with="109"><?php echo $rep['E_mail'];?></th>
       <th width="148" scope="col"><?php echo $rep['Message'];?></th>
    </tr>
  </table>
  <?php 
	} 
	
	?>
  
</div>
