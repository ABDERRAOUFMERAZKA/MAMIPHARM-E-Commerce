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
<script src="js/loopedslider.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript"> 
function verif() {
if(document.monform.04.value=="") {
  alert("Veuillez vérifier le champ");
}
}
</script>
<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#slider').loopedSlider({
			autoStart: 6000,
			restart: 5000
		});
		
	});
</script>
</head>

<body>
<section id="page">
<div id="bodywrap">
<section id="top">
<nav>
<h1 id="sitename"><img src="images/logo.JPG" name="logo" width="188" height="54"></h1>
  
  <ul id="sitenav">
  	<li><a href="index.php">Acceuil</a></li>
  	<li><a href="authclient.php">Client</a></li>
    <li><a href="01emp.php">Employé</a></li>
    <li><a href="upload02.php">Recrutement</a></li>
    <li><a href="Nouveautes.php">Nouveautés</a></li>
    <li class="current"><a href="contactpro.php">Contact</a></li>
  
  </ul>
  
</nav>
<header id="homeheader">


<div id="slider">	
	<div class="container">
	<ul class="slides">
			<li>
			  <div class="thumbholder"><img src="images/mami5.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="../../../Users/utilisateur/Downloads/Compressed/portfolio/index.html">Bienvenue sur PROLINE : le site web officiel de l'entreprise Mami Procopharm</a></h2>
            <p> </p>
			</div></li>
			<li><div class="thumbholder"><img src="images/mami3.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="../../../Users/utilisateur/Downloads/Compressed/portfolio/index.html">Notre site web permet aux clients de rédiger leurs commandes en ligne</a></h2>
            <p> </p>
			</div></li>
			<li>
			  <div class="thumbholder"><img src="images/mami2.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="../../../Users/utilisateur/Downloads/Compressed/portfolio/index.html">Le payement des factures et l'inscription des clients seront éffectués au sein de l'entreprise selon la loi interne de l'entreprise MAMI PROCOPHARM</a></h2>
            <p></p>
			</div></li>
			<li><div class="thumbholder"><img src="images/mamiproco.jpg" width="413" height="220" alt="First Image" /></div><div class="txtholder">
            <h2><a href="../../../Users/utilisateur/Downloads/Compressed/portfolio/index.html">L'entreprise Mami procopharm cherche des diplomés en spécialités suivante :</a></h2>
            <p><a href="../../../Users/utilisateur/Downloads/Compressed/portfolio/index.html">Informatique,commerce,chimie,biologie</a></p>
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
  <img src="images/enveloppe.jpg" width="97" height="96" alt="graph" class="imgright">
  <h2>Contact</h2>
<p>Pour contacter l'entreprise Mami Procopharm, Veuillez remplissez le formulaire...</p>
<p>L'administration vous répondra par E_MAIL </p>
</div>
<div class="col">
<table width="121%" height="313" border="0">

                             <tr>
                              <form name="monform" action="resultcontact.php" METHOD="POST" >
                               <th width="48%" scope="col">Nom</th>
                               <th width="52%" scope="col"><label>
                                 <div align="left">
                                   <input name="01" type="text" id="01" />
                                 </div>
                               </label></th>
                             </tr>
                             <tr>
                               <th scope="row">Prénom</th>
                               <td><label>
                                 <input name="02" type="text" id="02" />
                               </label></td>
                             </tr>
                             <tr>
                               <th scope="row">E_mail</th>
                               <td><label>
                                 <input name="03" type="text" id="03" />
                               </label></td>
                             </tr>
                             <tr>
                               <th scope="row">Message</th>
                               <td><label>
                                 <textarea name="04" id="04"></textarea>
                               </label></td>
                             </tr>
                             <tr>
                               <th scope="row">&nbsp;</th>
                               <td><label>

                                 <div align="left">
                                   <input type="submit" name="Submit2" value="Envoyer" onClick="verif()"  />
                                   <input type="reset" name="Submit3" value="annuler" />
                                 </div>
                                 </label></td></tr>
                             <tr>
                               <th scope="row">&nbsp;</th>
                               <td><label></label></td>
                             </tr>
            </table>
                      </form>
  <h2>&nbsp;</h2>
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
<div class="projectthmb"> <a href="../../../Users/utilisateur/Downloads/Compressed/portfolio/portfolio"></a>
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
Do Not Remove this Credits and Link back to CSSHeaven from the template--> désigned by <a href="../../../Users/utilisateur/Downloads/Compressed/portfolio/index.html">proline</a> service</span>
</p>
</div>
</footer>

</section>
</body>
</html>
