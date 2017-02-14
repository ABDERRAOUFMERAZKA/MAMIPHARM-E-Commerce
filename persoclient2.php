<?php
session_start();
?>

<html>
<head>
<title>Recherche par mot-clé</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1 align="center" > Rechercher produit <img src="images/recherche.gif" width="65" height="62"> </h1>
<div align="center">
  <?php
if(isset($_POST['a'])){
$nom=$_POST['a'];
$log=$_SESSION['user'];
mysql_connect("localhost","root","");
mysql_select_db("sitw");
$r=mysql_query ( "SELECT * FROM client WHERE login ='$log'");
$ff=mysql_fetch_array($r);
$_SESSION['id']=$ff['id'];
$re=mysql_query("select * from produit where nom='$nom'");
 $r = mysql_num_rows($re);
 if($r==0){
    echo "aucun prduit trouv&eacute; !";
  }
 else {
while($res = mysql_fetch_array($re))
{
 $p=$res['id'];
?>    
      <table width="258" border="0" callspacing="3" >
	            <tr>
		  <div align="center">
		    <td><div align="center"><img src="<?php echo  $res['image']?>" width="135" height="135"/></td>
		      
            </div>
          </tr>
		  </table>
      <table width="258" border="0" cellspacing="3">
           <tr> <td width="250" ><b><?php echo $res['nom']  ?></b></td>
          </tr>
        <tr>
            <td width="250" ><b><?php echo $res['description']  ?></b></td>
        </tr>
          <tr>
            <td><b>Prix : <?php echo $res['prix']?>, 00 DA </b></td>
          </tr>
          <tr>
            <td>
            <?php echo "<a href=\"panierr.php?action=ajout&amp;l=$p&amp;q=1&amp; onclick=\"window.open(this.href, '');\">Ajouter au panier</a><p>" ?></td> 
        </tr>
      </table>
      <?php } }} else { ?><?php } ?>
<p align="center"><a href="deconnexionclient.php"><img src="images/0.jpg" width="67" height="73"></a>
<a href="recherche.php"><img src="images/recherche2.jpg" width="109" height="71"></a>
</body>
</html> 