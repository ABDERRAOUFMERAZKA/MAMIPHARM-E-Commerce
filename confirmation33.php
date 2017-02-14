<?php 
session_start();
include_once("fonctions-panier.php");
   // on teste l'existence de nos variables. On teste également si elles ne sont pas vides 
   
	   $nbArticles=count($_SESSION['panier']['libelleProduit']);
	   
	   
	   
	   
	      for ($i=0 ;$i < $nbArticles ; $i++)
		  {
		  mysql_connect("localhost","root","");
           mysql_select_db("sitw");
           $reponse = mysql_query("SELECT * FROM produit WHERE id = '".$_SESSION['panier']['libelleProduit'][$i]."'"); 
           while($row = mysql_fetch_array($reponse,MYSQL_ASSOC))
						{
						$produit = $_SESSION['panier']['libelleProduit'][$i];
                         $qtt=$_SESSION['panier']['qteProduit'][$i];
			            $stotale = $_SESSION['panier']['prixProduit'][$i]*$_SESSION['panier']['qteProduit'][$i];
						mysql_query("UPDATE produit SET quant = quant - '" . $qtt . "' WHERE id = '" . $_SESSION['panier']['libelleProduit'][$i] . "'");
                        $produit=$_SESSION['panier']['libelleProduit'][$i];
						$qtte=MontantGlobal();
						$client = $_SESSION['user'];
						$datecom = date('Y/m/d');
												$re=mysql_query("select * from panierr");
						$res=mysql_num_rows($re);
						$n=$res+1;
						$a=$i+1;
					 mysql_query("INSERT INTO ligne VALUES ('". $a ."','". $n ."','". $produit ."','". $qtt ."','" . $stotale . "')");


						}

						}
						 mysql_query("INSERT INTO panierr VALUES ('', '" . $qtte . "')");
					  mysql_query("INSERT INTO commande VALUES ('', '" . $client . "', '" . $n . "','" . $datecom. "')"); 

?>
<html>
<style type="text/css">
<!--
.Style1 {color: #0066FF}
-->
</style>
<body>
<p>
  <?php 
  mysql_connect("localhost","root","");
           mysql_select_db("sitw");
		   $mou=$_SESSION['user'];
		   $ani=mysql_query ("SELECT * FROM client WHERE login='$mou'");
		   $im=mysql_fetch_array($ani);
?>
</p>

<center>

<table width="805" border="0">
  <tr>
    <th width="404" scope="col"><table width="352" border="0">
      <tr>
        <th width="346" scope="col"><div align="left"><span class="Style1">S.A.R.L. MAMI PROCOPHARM</span></div></th>
      </tr>
      <tr>
        <td height="28"> <div align="left"><span class="Style1">capitale social 20.000.000 DA</span></div></td>
      </tr>
      <tr>
        <td height="31"><div align="left"><span class="Style1">zone industrielle Oued Hamimime-Elkhroub-Constantine</span></div></td>
      </tr>
    </table>    
      <p>&nbsp;</p>      </th>
    <th width="385" scope="col"><p align="right">ECHEANCE</p>
      <p align="right">30 jours </p></th>
  </tr>
</table>

<p><strong>BON DE COMMANDE </strong></p>
<table width="802" height="169" border="0">
  <tr>
    <th width="406" scope="col"><fieldset> <legend>information</legend> 
        <table width="369" border="0">
          <tr>
            <td>id-clien : <?php echo $im['id']; ?></td>
          </tr>
          <tr>
            <td>Nom : <?php echo $im['nom']; ?></td>
          </tr>
          <tr>
            <td>Prènom : <?php echo $im['prenom']; ?></td>
          </tr>
          <tr>
            <td>Adresse : <?php echo $im['adresse']; ?></td>
          </tr>
          <tr>
            <td>No R.C : <?php echo $im['registrecommercial']; ?></td>
          </tr>
          <tr>
            <td>No M.F : <?php echo $im['matriculefiscale']; ?></td>
          </tr>
          <tr>
            <td>No A.I : <?php echo $im['ai']; ?></td>
          </tr>
        </table>
        
    </fieldset> </th>
    <th width="380" scope="col">
	<fieldset><legend> commande</legend><table width="200" border="0">
      <tr>
        <td>no commande : <?php $wa=mysql_query("SELECT * FROM commande WHERE id='$client'"); $hou=mysql_fetch_array($wa); echo $hou['idcomd']; ?></td>
      </tr>
      <tr>
        <td>Date :<?php  echo "$datecom ";?> </td>
      </tr>
    </table>
	</fieldset></th>
  </tr>
</table>

</center>


</body>
</html>
<?php
	
	echo"<center>";
	echo "<table width=\"100%\" cellpadding=\"3\" align=\"center\" border=\"0\" cellspacing=\"0\"><tr bgcolor=\"#0033CC\"><td align=\"center\" ><strong><font color=\"#FFFFFF\">Nom du produit</font></strong></td><td align=\"center\" ><strong><font color=\"#FFFFFF\">prix</font></strong></td><td align=\"center\" ><strong><font color=\"#FFFFFF\">
                                      Quantité</font></strong></td><td align=\"center\" ><strong><font color=\"#FFFFFF\">sous-totale</font></strong></td></tr>";
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
							echo "<tr><td> </td>";
							echo "<td> </td>";
							echo "<td> </td>";
							
							
							echo"<tr></tr>";
							echo"<tr></tr>";
							echo"<tr></tr>";
							echo "<tr><td> <td>";
					echo"</center>";					
		
							
                        }
						} 
						
						}
						}
						
						?>

						<?php
						echo"<td></td>";
						
						echo "<td> Montant global : ".MontantGlobal().",00 DA </td>";
						echo "<tr><td><a href=\"deconnexionclient.php\"><img src=\"0.jpg\" width=\"60\" height=\"60\"></a>";
					echo "<td> 					
	<a href=\"javascript:window.print()\"><img src=\"imprimer.jpg\" width=\"60\" height=\"60\"></a></td>";
							?>

					
					
						
						
						

