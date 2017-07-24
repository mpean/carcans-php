<?php
$GLOBALS['lang']="fr";
header('Content-Type: text/html; charset=ISO-8859-1'); // écrase l'entête utf-8 envoyé par php
ini_set( 'default_charset', 'ISO-8859-1' );
?>

<html>
	
	<head>
	
	<title>Les Gourbets de Carcans Plage</title>
	
	<meta name="keywords" lang="fr"
		content="Carcans,carcan,Carcans plage,vacances,vélo,tourisme,touriste,site,été,soleil,ete,mer,vin,vignobles,Bordeaux,bronzer,natation,nager,baigner,location,ocÃ©an,ocean,MÃ©doc,Medoc,Gironde,Atlantique,France,appartement,villa,maison,Aquitaine,surf,Bombannes, Lacanau, Lacano,forÃªt,foret,Landes,">
	<meta name="keywords" lang="en"
		content="Carcans,carcan,Carcans plage,site,bicycle,swimm,sun,sea,wine,Tourist,Bordeaux,summer,bike,location,ocean,MÃ©doc,Medoc,Gironde,Atlantic,France,holiday,beach,rent,appartment,flat,holiday home, house,Aquitaine,Aquitania,surf,Bombannes, Lacanau, Lacano,forest,Landes,">
	<meta name="keywords" lang="de"
		content="Carcans,carcan,Carcans plage,Ozean,FeWo,Médoc,Medoc,Gironde,braeunen,brÃ¤unen,Wein,tourist,Fremdverkehr,baden,sunbathe,schwimmen,France,Ferien,Urlaub,Vermietung,vermieten,Ferienwohnung,Ferienvermietung,Aquitaine,Atlantik,Aquitanien,Frankreich,surf,wellenreiten,Wald,Bombannes, Lacanau, Lacano,bosque,Landes,Fahrrad,">
		
	<meta name=description lang="fr" content="Location de maisons de vacances à Carcans plage, Medoc, Gironde, France">
	<meta name=description lang="en" content="Home holiday let in Carcans plage, Medoc, Gironde, France">
	<meta name=description lang="de" content="Ferienhausvermietung in Carcans plage, Medoc, Gironde, Frankreich">
		
	<LINK REL="SHORTCUT ICON" HREF="./icones/soleil.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		
	<meta http-equiv="Carcans plage ocean"
	content="Location de maisons de vacances à Carcans plage, Médoc, Gironde, Atlantique, France - Ferienhaus vermietung in Carcans plage, medoc, Gironde, Atlantikkuste, Frankreich - Home holiday let in Carcans plage, Medoc, Gironde, Atlantic coast, France - Alquiler de un piso de vacacion en Carcans plage, Medoc, Gironde, Atlantico, Francia">
	
	<meta name="reply-to" content="">
	<meta name="category" content="holidays">
	<meta name="robots" content="index">
	<meta name="distribution" content="global">
	<meta name="revisit-after" content="30 days">
	<meta name="author" content="Carcans plage">
	<meta name="copyright" content="Carcans plage">
	<meta name="generator" content="Eclipse">
	<meta name="identifier-url" content="fmelaurenty-com.fr.nf/">
	<meta name="expires" content="never">
	<meta name="Date-Creation-yyyymmdd" content="20080418">
	<meta name="Date-Revision-yyyymmdd" content="20121027">
	
	<style type="text/css" media="screen">@import "./css/style_bleu.css";</style>
	
	</head>
	
	<body OnContextMenu='return false;'>
		<?php
		// positionnement de la langue
		if (isset($_GET['lang']))
		{
			$GLOBALS['lang']=$_GET['lang'];
		}
		
		require ("./lib/site.php");
		require("./langues/decide-lang.php");
		require("./lib/onglets.php");
		require("./lib/images.php");
		require("./lib/image.php");
		
		
		if (isset($_GET['piece'])) $piece=$_GET['piece']; else $piece='';
		if (isset($_GET['image'])) $image=$_GET['image']; else $image='';
		
		?>
	
		<div id="menu">	
		
			<div id="en-tete">
				<h1>Les Gourbets</h1>
				
							
			<ul class="limenu">
				
				<?php
				// menu de navigation
				echo '<p><li class=limenu><IMG SRC="icones/day.png" height="16" width="16"> ';
				echo '<a href="index.php?page=accueil&lang=', $GLOBALS['lang'], '">', TXT_MENU_ACCUEIL, '</a></li></p>';
				echo '<li class=limenu><IMG SRC="icones/home.png" height="16" width="16"> ';
				echo '<a href="index.php?page=gourbet&lang=' , $GLOBALS['lang'], '"> ', TXT_MENU_GOURBET, '</a></li>';
				echo '<li class=limenu><IMG SRC="icones/home.png" height="16" width="16"> ';
				echo '<a href="index.php?page=chalet&lang=' , $GLOBALS['lang'],'"> ', TXT_MENU_CHALET, '</a></li>';
				echo '<li class=limenu><IMG SRC="icones/bigsmile.png" height="16" width="16"> ';
				echo '<a href="index.php?page=locations&lang=', $GLOBALS['lang'], '">', TXT_MENU_LOCATIONS, '</a></li>';
				echo '<p><li class=limenu><IMG SRC="icones/addressbook.png" height="16" width="16"> ';
				echo '<a href="index.php?page=liens&lang=' , $GLOBALS['lang'], '">', TXT_MENU_LIENS, '</a></li>';
				echo '<li class=limenu><IMG SRC="icones/flag.png" height="16" width="16"> ';
				echo '<a href="index.php?page=plan&lang=' , $GLOBALS['lang'], '">', TXT_MENU_PLAN, '</a></li>';
				echo '<li class=limenu><IMG SRC="icones/cellphone.png" height="16" width="16"> ';
				echo '<a href="index.php?page=contact&lang=' , $GLOBALS['lang'], '">', TXT_MENU_CONTACT, '</a></li></p>';
				?>
			
				<br><br>
			
				<?php
				// recuperation des variables
				if (!isset($_GET['page']) || $_GET['page'] == '') $page= 'accueil'; else $page= $_GET['page'];
				
				
				// icones de choix de la langue
				echo '<a href="index.php?page=', $page, '&lang=fr';
				if(isset($_GET['piece'])) echo '&piece=', $piece;
				echo '"><img src="./icones/France.png" height="16" width="16"></a>';
			
				echo '<a href="index.php?page=', $page, '&lang=en';
				if(isset($_GET['piece'])) echo '&piece=', $piece;
				echo '"><img src="./icones/United Kingdom.png" height="16" width="16"></a>';
			
				echo '<a href="index.php?page=', $page, '&lang=de';
				if(isset($_GET['piece'])) echo '&piece=', $piece;
				echo '"><img src="./icones/Germany.png" height="16" width="16"></a>';
				echo '<br><br>';
				?>
				
			<br><br>
			
			</ul>
			<IMG SRC="./icones/f-me-contact.png" ALT="<?php echo TXT_CONTACT_FME_IMG;?>">
			<p><?php echo TXT_CONTACT_TEXTE_3;?></p>
			</div>
		</div>
		
		<div id="page">
			<div id="col-shadow"></div>
			<div>
				<?php include("./$page.php"); ?>
			</div>
		</div>
	</body>
</html>
