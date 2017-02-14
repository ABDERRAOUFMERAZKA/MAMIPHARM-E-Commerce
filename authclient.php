<!doctype html>

<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Bienvenue sur Proline | le site web officiel de l'entreprise Mami Procopharm</title>
 <link href="style.css" rel="stylesheet" type="text/css" />
 <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="js/belatedPNG.js"></script>
<script>
	DD_belatedPNG.fix('*');
</script>
<![endif]--><script src="js/jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/loopedslider.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#slider').loopedSlider({
			autoStart: 6000,
			restart: 5000
		});
		
	});
</script>
<style type="text/css">
<!--
.Style1 {font-weight: bold}
.Style2 {
	color: #000000;
	font-weight: bold;
}
.Style3 {color: #000000}
-->
</style>
</head>

<body>
<section id="page">
<div id="bodywrap">
<section id="top">
<nav>
<h1 id="sitename"><img name="logo" src="images/logo.JPG" width="188" height="54" alt=""></h1>
  
  <ul id="sitenav">
  	<li><a href="index.php">Acceuil</a></li>
  	<li class="current"><a href="authclient.php">Client</a></li>
    <li><a href="01emp.php">Employé</a></li>
    <li><a href="upload02.php">Recrutement</a></li>
    <li><a href="Nouveautes.php">Nouveautés</a></li>
    <li><a href="contactpro.php">Contact</a></li>
  
  </ul>
  
</nav>
<header id="homeheader">


<div id="slider">	
	<div class="container">
	<ul class="slides">
			<li>
			  <div class="thumbholder"><img src="images/mami5.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="index.html">Bienvenue sur PROLINE : le site web officiel de l'entreprise Mami Procopharm</a></h2>
            <p> </p>
			</div></li>
			<li><div class="thumbholder"><img src="images/mami3.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="index.html">Notre site web permet aux clients de rédiger leurs commandes en ligne</a></h2>
            <p> </p>
			</div></li>
			<li>
			  <div class="thumbholder"><img src="images/mami2.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="index.html">Le payement des factures et l'inscription des clients seront éffectués au sein de l'entreprise selon la loi interne de l'entreprise MAMI PROCOPHARM</a></h2>
            <p></p>
			</div></li>
			<li><div class="thumbholder"><img src="images/mamiproco.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="index.html">L'entreprise Mami procopharm cherche des diplomés en spécialités suivante :</a></h2>
            <p><a href="index.html">Informatique,commerce,chimie,biologie</a></p>
			</div></li>
	
			
		</ul>
	
	<ul class="pagination">
		<li><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>

	</ul>	
    </div>
</div>


</header>
</section>
<section id="contentwrap">
<div id="contents">
<div id="topcolumns">
<div class="col">
  <h2>Authentification</h2>
  <p><img name="authen" src="images/cadena.jpg" width="230" height="166" alt=""></p>
</div>
<div class="col">
  <h2>remplissez le formulaire</h2>
<div align="center" class="Style1"></div>
<center>
<form action="authclient.php" method="post">

<table width="293" height="117" border="0">
  <tr>
    <td colspan="2"><div align="center"></div></td>
  </tr>
  <tr>
    <td><span class="Style2">LOGIN :</span> </td>
    <td><input type="text" name="log" /></td>
  </tr>
  <tr>
    <td><span class="Style3"><strong>MOT DE PASSE </strong>:</span> </td>
    <td><input type="password" name="pass" /></td>
  </tr>
</table>
<input type="submit" name="connexion" value="connexion" />
</form>
</center>
<p>&nbsp;</p>
<?php
if (isset($_POST['log']) && isset($_POST['pass'])){
   $log= $_POST['log'];
   $mdp= $_POST['pass'];
   mysql_connect ("localhost","root","");
   mysql_select_db("sitw");
   $rep = mysql_query ( "SELECT * FROM client WHERE login ='$log' AND mdp ='$mdp' ");
   $r = mysql_num_rows($rep);
   $d= mysql_fetch_array($rep);
   if ($r == 0){
    echo "erreur login et mot de passe incorecte! ";
   }
   else {
   $g=$d['etat'];
   if($g=="non"){
    session_start();
   
   $_SESSION['user']=$log;
   
   header("location: persoclient.php");
           
           
         /**if ($_SESSION['timeout'] + 10 * 60 < time()) {
                session_destroy(oid);
                  } */




   }
   else  { echo "vous etes bloqué veuillez contacter l'enreprise SVP  merci !";}
   }
}


?>
</div>
<div class="col">
  <h2>&nbsp;</h2>
</div>
<div class="clear"></div>

</div>
<section id="normalpage">

<section id="left">

<h2>&nbsp;</h2>
<article></article>


</section>
<section id="sidebar">
<h2>&nbsp;</h2>
<article class="testimonials"></article>
</section>

<div class="clear"></div>
</section>
</div>
</section>
</div>
<footer id="pagefooter">
<div id="bottom">
<div class="block1">
<h2>les entreprises du groupe MAMI</h2>

<div class="teamimg">


<div class="imgthmb"> <a href="http://www.groupemamipharm.com/#!__francais/adwiya-mami"><img src="images/ADWI.JPG" width="76" height="74" alt="team"></a></div>
  <div class="imgthmb"> <a href="http://www.groupemamipharm.com/#!__francais/procopharm-constantine"><img src="images/25.JPG" width="76" height="75" alt="team"></a></div>
  <div class="imgthmb"> <a href="http://www.groupemamipharm.com/#!__francais/new-para-dis"><img src="images/NEW.JPG" width="77" height="75" alt="team"></a></div>
  <div class="imgthmb"> <a href="http://www.groupemamipharm.com/#!__francais/procopharm-oran"><img src="images/ORAN.JPG" width="78" height="77" alt="team"></a></div>
  <div class="imgthmb"> <a href="http://www.groupemamipharm.com/#!__francais/pharmelite-constantine"><img src="images/PHARME.JPG" width="73" height="75" alt="team"></a></div>
  <div class="imgthmb"> <a href="http://www.groupemamipharm.com/#!__francais/pharmelite-ghardaia"><img src="images/PHARMELIGHAR.JPG" width="74" height="75" alt="team"></a></div>
</div>
</div>
<div class="block2">
<h2>SARL PROCOPHARM</h2>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="projectthmb"> <a href="portfolio"></a>
  <p>Zone Industrielle Oued Hamimime EL Khroub<br>
    Constantine 25100<br>
    Algerie.</p>
  <p>&nbsp;</p>
  <p>Tel: +213 31 95 52 31/34/36</p>
</div>

</div>
<div class="block3">

<h2>Localisation</h2>
<p><a href="#"><img src="images/local.JPG" width="242" height="226" alt="project"></a></p>

</div>
<div class="clear"></div>
</div>
<div id="credits">
<p>
<span class="copyright">
copyrigth&copy; juin 2013|  All Rights Reserved </span>
<span id="designcredit">
 désigned by <a href="index.html">proline</a> service</span>
</p>
</div>
</footer>

</section>
</body>
</html>
