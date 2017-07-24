<?php 
	if ($GLOBALS["lang"]=='fr')
	{ // si la langue est 'fr' (français) on inclut le fichier lang-fr.php 
		include('./langues/lang-fr.php');
	}
	else if ($GLOBALS["lang"]=='en')
	{ // si la langue est 'en' (anglais) on inclut le fichier lang-en.php
		include('./langues/lang-en.php');
	}
	else if ($GLOBALS["lang"]=='de')
	{ // si la langue est 'de' (Allemand) on inclut le fichier lang-en.php
		include('./langues/lang-de.php');
	}
	else 
	{ // si aucune langue n'est déclarée on inclut le fichier lang-en.php par défaut  
		include('./langues/lang-en.php');
	}
?>