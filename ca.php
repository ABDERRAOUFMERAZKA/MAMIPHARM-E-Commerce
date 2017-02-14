<?php
session_start();
?>
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
.Style1 {color: #1b78a8}
.Style2 {color: #1b78a7}
.Style4 {color: #1b78a8; font-weight: bold; }
.Style6 {color: #1b78a7; font-weight: bold; }
.Style7 {color: #000000}
.Style9 {color: #FF0000}
.Style10 {color: #333333}
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
    <li class="current"><a href="01emp.php">Employé</a></li>
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
  <h2><a href="ca.php">Crédit d'achat</a></h2>
  <p align="center" class="Style1">&nbsp;</p>
 
 <h1>Bienvenue,<?php echo $_SESSION['user']; ?> dans l'espace de demande de crédit d'achat</h1>
 <p></p>
<label>
<p>Tu rève d'avoir :</p>
 <p>voiture  </p>
 <p>logement </p>
 <p>un projet personnel </p>
 <p>'entreprise MAMI PROCOPHARM vous offre l'occasion de realiser votre rève</p>
 <p>tu as une experiance dépasse 05 ans de travail au sein de l'entreprise ? </p>
 <p>tu peut bénificier d'un offre de crédit d'achat
 </p>

<p>
-veuillez remplisser le formulaire suivant, puis telechargez votre propre lettre de motivation  
</p>
<p> -en cas ou les informations saisies dans les champs sont fausses, </p><p> la demande ne sera pas prise en charge.</p>
</div>
<div class="col">
  <h2>Remplissez le formulaire suivant  </h2>
  <form method="post" enctype="multipart/form-data" action="ca.php">
<fieldset>
<p align="center">
  <span class="Style2">
  <label><strong>type</strong></label>
  </span> </br>
  <input type="radio" name="cre" value="voiture" ><label><span class="Style4">voiture</span></label> </br>
  <input type="radio" name="cre" value ="logement" ><label><span class="Style4">logement</span></label> 
  <span class="Style1"></br>
  </span>
  <input type="radio" name="cre" value ="autres" >
  <label><span class="Style6">autre<span class="Style9">*</span></span></label>
  <span class="Style6"></br>
  </span>  
<p>&nbsp;</p>
  <p>&nbsp;</p>
  <span class="Style7">
  <label><strong><span class="Style9">*</span> si "autre" vous devez nous préciser en lettre de motivation le type que vous voulez. </strong></label>
  </span>
  <p class="Style7">&nbsp;</p>
    <label><span class="Style6">E_mail</span></label>
    <span class="Style2"></br>
    </span>
    <input type="text" name="mail" ></br>
  <p>&nbsp;</p>
  <label><span class="Style6">Telephone </span></label>
  <span class="Style2"></br>
  </span>
  <input type="text" name="ph" ></br>
  <p>&nbsp;</p>
  <strong>
  <label><span class="Style2">tapper le nom de votre lettre a t&eacute;l&eacute;charg&eacute; dans le champs suivant </span></label>
  </strong>
  <label></label>
  <p>
      <input type="text" name="fich" >
      </br>
  </p>
  <p><span class="Style10">(nom.extention)</span> </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
<label><input type="file" name="fichier" size="30"></label>
</p>
<p align="center">&nbsp;</p>
<p align="center"> 
<input type="submit" name="upload" value="demander">
</label>
 <input type="reset" name="annule" value="annuler" >
</p>
</fieldset>
</form>

<div align="left">
  <?php

if( isset($_POST['upload']) ) // si formulaire soumis
{
    $content_dir = 'C:\wamp\www\proline\credit/'; // dossier où sera déplacé le fichier

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
if (isset ($_POST ['cre']) && isset ($_POST['mail'])  && isset ($_POST['ph']) && isset ($_POST['fich'])) {
  $r=$_SESSION['user'];
  $n=$_POST['cre'];
  $m=$_POST['mail'];
  $f=$_POST['ph'];
  $fic=$_POST['fich'];
  mysql_query("INSERT INTO ca  VALUES ('','$n','$r','','$m','$f','$fic')");
}
?>

</div>
<p class="rouge">extention : (<img src="images/pdf.png" width="49" height="48" />ou<img name="" src="images/word.jpg" width="49" height="48" alt="">)</p>
  <p>&nbsp;</p>
</div>
<div class="col">
  <h2>l'entreprise va vous contacter pour passer par la commission financiere </h2>
  <p>vous receverez la réponse par E-mail...</p>
  <p> <a href="perso.php">Retour a mon l'espace?  </a></p>
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
