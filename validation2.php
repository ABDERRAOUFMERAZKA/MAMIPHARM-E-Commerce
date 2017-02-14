<?php
   // on teste l'existence de nos variables. On teste également si elles ne sont pas vides 
session_start(); 
include_once("fonctions-panier.php");
if (isset($_SESSION['user'])and(creationPanier())) { ?>
<html>
<style type="text/css"> 
<!--
.Style1 {color: #0033CC}
-->
</style>
<meta charest="UTF-8"/>
<body>
<table width="954" border="0">
  <tr>
    <th width="841" scope="col">Vous avez oubli&eacute; un article ?<a href="panierr.php">modifiez votre panier</a></th>
    <th width="103" scope="col"><a href="deconnexionclient.php">D&eacute;connexion</a></th>
  </tr>
</table>
<p class="Style1">Conditions g&eacute;n&eacute;rales : </p>

  <li>Le d&eacute;lai de livraison est de 48 heures apr&eacute;s confirmation de bon de commande.</li>
  <li>Aucune commande ne sera acc&eacute;pt&eacute; autant qu'un retour apr&eacute;s le d&eacute;lai d'une semaine.</li>
  <li>En cas de littige sur la comformit&eacute; de la commande, veuillez pr&eacute;senter votre bon de commande &eacute;lectronique.</li>
  <p>&nbsp;</p>
  <p>&nbsp;</p>

<?php
	
	echo "<table width=\"90%\" cellpadding=\"3\" align=\"center\" border=\"0\" cellspacing=\"0\"><tr bgcolor=\"#0033CC\"><td align=\"center\" ><strong><font color=\"#FFFFFF\">Nom du produit</font></strong></td><td align=\"center\" ><strong><font color=\"#FFFFFF\">prix</font></strong></td><td align=\"center\" ><strong><font color=\"#FFFFFF\">
                                      Quantit&eacute;</font></strong></td><td align=\"center\" ><strong><font color=\"#FFFFFF\">sous-totale</font></strong></td></tr>";
if (creationPanier())
	{
	   $nbArticles=count($_SESSION['panier']['libelleProduit']);
	   if ($nbArticles <= 0)
	   echo "<tr><td>Votre panier est vide </ td></tr>";
	   else
	   {
	      for ($i=0 ;$i < $nbArticles ; $i++)
	      {
		  mysql_connect("localhost","root","");
           mysql_select_db("sitw");
           $reponse = mysql_query("SELECT * FROM produit WHERE id= '".$_SESSION['panier']['libelleProduit'][$i]."'"); 
           while($row = mysql_fetch_array($reponse,MYSQL_ASSOC))
						{
						$a=$row['prix']*$_SESSION['panier']['qteProduit'][$i];
                            echo "<tr bgcolor=\"#FFFFFF\"><td align=\"center\" style=\"BORDER-BOTTOM: #AE888C 1px solid\" class=normalprof>".$row['nom']."</td><td align=\"center\" style=\"BORDER-BOTTOM: #AE888C 1px solid\" class=normalprof>".$row['prix']."</td><td align=\"center\" style=\"BORDER-BOTTOM: #AE888C 1px solid\" class=normalprof> ".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."</td><td align=\"center\" style=\"BORDER-BOTTOM: #AE888C 1px solid\" class=normalprof>";
                            echo " $a";
							echo "</td>";
                            echo"</tr>";
							echo "</td></tr>";
							
                        
	        } }
	    	
		  echo "<tr><td>  </td>";
		   echo " <td><a href=\"confirmation.php\"><img src=\"valider.jpg\" width=\"60\" height=\"60\"></a></td>";
			   echo "<td><a href=\"persoclient.php\"><img src=\"annuler.png\" width=\"60\" height=\"60\"></a></td>";  
			   
			    echo "<td> Montant global : ".MontantGlobal().",00 DA </td></tr>";						
		
		   }   
 }
 } ?>
</body>
</html>