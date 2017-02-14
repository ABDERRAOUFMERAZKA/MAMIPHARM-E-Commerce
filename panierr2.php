<?php
session_start();
include_once("fonctions-panier.php");

$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
    $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;
   		  mysql_connect("localhost","root","");
           mysql_select_db("sitw");
		   $prix=mysql_query("SELECT prix FROM produit WHERE id='$l'");
		   while($rowe = mysql_fetch_array($prix,MYSQL_ASSOC))
						{
						$p=$rowe['prix'];}

   

   //Suppression des espaces verticaux
      


   //On verifie que $q soit un float
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}
   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
	
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
		  break;
		 Case "totale" :
            MontantStotale($l);
          break;

      Default:
         break;
   }
}

echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>Votre panier</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>


<form name="b" method="post" action="panierr.php">

	<?php

	
	if (creationPanier())
	{
	   $nbArticles=count($_SESSION['panier']['libelleProduit']);
	   if ($nbArticles <= 0)
	   {header("location:recherche.php");}
	   else
	   { 
	   
	   echo "<table width=\"90%\" cellpadding=\"3\" align=\"center\" border=\"0\" cellspacing=\"0\">
	   <tr bgcolor=\"#3399CC\">
	   <td align=\"center\" ><strong><font color=\"#FFFFFF\">Nom du produit</font></strong></td>
	   <td align=\"center\" ><strong><font color=\"#FFFFFF\">Prix</font></strong></td>
	   <td align=\"center\" ><strong><font color=\"#FFFFFF\">Quantit&eacute;</font></strong></td>
	   <td align=\"center\" ><strong><font color=\"#FFFFFF\">Sous-totale</font></strong></td>
	   <td align=\"center\" ><strong><font color=\"#FFFFFF\">Retirer</font></strong></td></tr>";
	    
		  for ($i=0 ;$i < $nbArticles ; $i++){

mysql_connect("localhost","root","");
mysql_select_db("sitw");
$reponse = mysql_query("SELECT * FROM produit WHERE id = '".$_SESSION['panier']['libelleProduit'][$i]."'"); 
while($row = mysql_fetch_array($reponse,MYSQL_ASSOC)) {
						
$a=$row['prix']*$_SESSION['panier']['qteProduit'][$i];
						
					
						
                            echo "<tr bgcolor=\"#FFFFFF\"><td align=\"center\" style=\"BORDER-BOTTOM: #AE888C 1px solid\" class=normalprof>".$row['nom']."</td><td align=\"center\" style=\"BORDER-BOTTOM: #AE888C 1px solid\" class=normalprof>".$row['prix'].",00 DA</td><td align=\"center\" style=\"BORDER-BOTTOM: #AE888C 1px solid\" class=normalprof> <input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td><td align=\"center\" style=\"BORDER-BOTTOM: #AE888C 1px solid\" class=normalprof>";
                            echo " $a,00 DA ";	
							echo "</td>";
                            echo"<td style=\"BORDER-BOTTOM: #AE888C 1px solid ; BORDER-RIGHT: #AE888C 1px solid\" class=normalprof align=\"center\" valign=\"bottom\"><a href=\"".htmlspecialchars("panierr.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\"><img src=\"corbeille.jpg\"></a></td></tr>";
							echo "</td></tr>";
                        }
							
							
                       }
	         
	      }
          
	      echo "<tr><td colspan=\"4\" align=\"right\">";
	      echo "<input type=\"submit\" value=\"Mettre &agrave; jour\"/>";
	      echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
          echo "<td> Montant global : ".MontantGlobal().",00 DA </td>";
	      echo "</td></tr>";
	   
	  }
	
			  
		?>	  
</form>

</html>
</table>
</body>
</html>
<html><head></head><body><form name="a" method="post" action="validation.php">
<?php
	
  echo "<input type=\"submit\" value=\"Commander\">";
  


	?>
	<center><a href="recherche.php">poursuivre mes achats </a></center>
