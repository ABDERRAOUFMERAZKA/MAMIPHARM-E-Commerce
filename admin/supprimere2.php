<!doctype html>

<html lang="en-US">
<head>
<meta charset="UTF-8" />
<title>Bienvenue sur l'espace administratif Proline | </title>
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
</script></head>

<body>
<section id="page">
<div id="bodywrap">
<section id="top">
<nav>
<h1 id="sitename"><img name="logo" src="images/logo.JPG" width="188" height="54" alt=""></h1>
  
  <ul id="sitenav">
  	<li><a href="clientcondif.php">Gérer client</a></li>
    <li class="current"><a href="empconfig.php">Gérer employé</a></li>
    <li><a href="produitconfig.php">Gérer produits</a></li>
    <li><a href="cvconfig.php">Les CV</a></li>
    <li><a href="contactpro.php">Messages</a></li>
  
  </ul>
  
</nav>
<header id="homeheader">


<div id="slider">	
	<div class="container">
	<ul class="slides">
			<li>
			  <div class="thumbholder"><img src="images/mami5.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="index.html">Bienvenue sur l'espace administratif de proline</a></h2>
            <p> </p>
			</div></li>
			<li><div class="thumbholder"><img src="images/mami3.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="index.html">c'est un espace sécurisé</a></h2>
            <p> </p>
			</div></li>
			<li>
			  <div class="thumbholder"><img src="images/mami2.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="index.html">veuillez vous authentifier pour acceder au espace de configuration de site web</a></h2>
            <p></p>
			</div></li>
			<li><div class="thumbholder"><img src="images/mamiproco.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="index.html">remplissez le formulaire pour acceder</a></h2>
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

<?php
include('supprimere22.php');
?>

  <p>&nbsp;</p>
  <p align="right">&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div class="col">
  </a>   </div>
 </div>
 
</div>
<div class="col">
  <h2>&nbsp;</h2>
</div>
<div align="center"><a href="deconnexionadmin.php"><img src="images/16624448-deconnexion-rouge-brillant-reflete-bouton-carre.jpg" width="105" height="95" />
<div class="clear"></div>

</div>
</div>
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
<p><a href="portfolio"><img src="images/local.JPG" width="242" height="226" alt="project"></a></p>

</div>
<div class="clear"></div>
</div>
<div id="credits">
<p>
<span class="copyright">
copyrigth&copy; juin 2013|  All Rights Reserved </span>
<span id="designcredit">
<!--Creative Common Non-Commercial, Attribution License
Designed by : Roshan Ravi
Author URI : cssheaven.org
Do Not Remove this Credits and Link back to CSSHeaven from the template--> désigned by <a href="index.html">proline</a> service</span>
</p>
</div>
</footer>

</section>
</body>
</html>
