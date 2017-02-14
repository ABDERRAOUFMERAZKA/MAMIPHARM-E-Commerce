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
.Style1 {color: #0066FF}
.Style2 {color: #CC0000}
.Style4 {color: #0066FF; font-weight: bold; }
.Style6 {color: #1b78a8; font-weight: bold; }
.Style7 {color: #1b78a8}
.Style8 {
	color: #000000;
	font-weight: bold;
}
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
  	<li><a href="authclient.php">Client</a></li>
    <li><a href="01emp.php">Employé</a></li>
    <li class="current"><a href="upload01.php">Recrutement</a></li>
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
  <h2><a href="upload02.php">Recrutement</a></h2>
  <p align="center" class="Style1">&nbsp;</p>
 
 <legend ><strong> Les Different Services de <a href="index.php">la SARL MAMI PROCOPHARM :</a></strong></legend>
 <p></p>
<label>
<li>informaatique : Diplome d'informatique</li>
 <li>operatrice :Diplome de licence au minimum </li>
 <li>commercial : Diplome en commerce</li>
 <li>comptabilité :Diplome de comptabilité</li>
 <li>magasinier : niveau BEM au minimum</li>
 <li>agent commercial :Diplome de licence au minimum </li>
 <li>chauffeur légé,lourd,transport :permis de conduire + experiance +age > 25 ans</li>
 </p>
<p>
vous souhaitez travailler au sein de la SARL MAMI PROCOPHARM , envoyez vos cv via le formulaire suivant.
</p>
<p class="Style8">
NB :</p>
<p> -les numeros de telephone  sont obligatoires dans les CV pour qu'on puisse vous contacter! Merci. </p>
<p> -si les informations saisies dans les champs ne correspend pas a ceux du fiche de CV, la demande ne sera pas prise en charge.</p>
</div>
<div class="col">
<h2> Remplissez le formulaire </h2>
  <form method="post" enctype="multipart/form-data" action="upload02.php">
<fieldset>
<p align="center">
  <label></label>
  </br>
  <label><span class="Style6">nom</span></label>
<p align="center">
  <input type="text" name="nom" > 
  </br>
  <label><span class="Style6">Prénom</span></label>
  <span class="Style7"></br>
    </span>
  <input type="text" name="prenom"> 
  </br>
  <span class="Style4">
    <label><span class="Style7">E_mail</span></label>
    <span class="Style7"></br>
      </span></span>
  <input type="text" name="mail" >
  </br>
  <span class="Style7">
    <label><strong>Telephone </strong></label>
    <strong></br>
      </strong></span>  
  <input type="text" name="ph" >
  </br>
  <label><span class="Style4"><span class="Style7">tapper le nom du fichier a t&eacute;l&eacute;charg&eacute; dans le champs suivant </span></span></label>
  <span class="Style6"></br>
    </span><span class="Style4">  </span><span class="Style1">  </span>
  <input type="text" name="fich" >
  </br>
<p>&nbsp;</p>
  <p>&nbsp;</p>
<label><input type="file" name="fichier" size="30"></label>
</p>
<p align="center">&nbsp;</p>
<p align="center"> 
<input type="submit" name="upload" value="postuler">
</label>
 <input type="reset" name="annule" value="annuler" >
</p>
</fieldset>
</form>

<div align="left">
  <?php

if( isset($_POST['upload']) ) // si formulaire soumis
{
    $content_dir = 'C:\wamp\www\proline\cv/'; // dossier où sera déplacé le fichier

    $tmp_file = $_FILES['fichier']['tmp_name'];

    if( !is_uploaded_file($tmp_file) )
    {
        exit("Le fichier est introuvable");
    }

    // on vérifie maintenant l'extension
    $type_file = $_FILES['fichier']['type'];

    if( !strstr($type_file, 'JPEG') && !strstr($type_file, 'doc') && !strstr($type_file, 'pdf') && !strstr($type_file, 'docx') && !strstr($type_file, 'PNG'))
    {
        exit("Le fichier n'est pas un document");
    }

    // on copie le fichier dans le dossier de destination
    $name_file = $_FILES['fichier']['name'];

    if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
    {
        exit("Impossible de copier le fichier dans $content_dir");
    }

    echo "Le fichier a bien été uploadé";
}

?>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sitw");
if (isset ($_POST ['nom']) && isset ($_POST['prenom']) && isset ($_POST['mail']) && isset ($_POST['ph']) && isset ($_POST['fich'])) {
  $n=$_POST['nom'];
  $p=$_POST['prenom'];
  $m=$_POST['mail'];
  $f=$_POST['ph'];
  $fic=$_POST['fich'];
  mysql_query("INSERT INTO cv (id_cv , nom_post , prenom_post , E_mail , tel , fichier) VALUES ('','$n','$p','$m','$f','$fic')");
}
?>

</div>
<p class="rouge"><span class="Style2">extention :</span> (<img src="images/pdf.png" width="49" height="48" /><span class="Style1">ou</span><img name="" src="images/word.jpg" width="49" height="48" alt="">)</p>
  <p>&nbsp;</p>
</div>
<div class="col">
  <h2>Votre cv sera transmis a la comission de recrutement</h2>
  <p>vous receverez la réponse par E-mail...</p>
  <p> <a href="index.php">Retour au page D'acceuil ?  </a></p>
</div>
<div class="clear"></div>

</div>
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
