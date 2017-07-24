<div class="li-onglets">
<h3>
<?php 
	echo TXT_GOURBET_TITRE;
	echo ' <IMG SRC="icones/star.png" height="16" width="16">';
	echo '<IMG SRC="icones/star.png" height="16" width="16">';
	echo '<IMG SRC="icones/star.png" height="16" width="16">';
	echo '<IMG SRC="icones/star.png" height="16" width="16">';
	echo ' <IMG SRC="icones/handicap_symbole_small.gif">';
	$listeOnglets = array(
		TXT_GOURBET_ACCUEIL_LNK => 'gourbet_accueil',
		TXT_GOURBET_SEJOUR_LNK => 'gourbet_sejour',	
		TXT_GOURBET_CUISINE_LNK => 'gourbet_cuisine',
		TXT_GOURBET_CHAMBRE1_LNK => 'gourbet_chambre1',
		TXT_GOURBET_CHAMBRE2_LNK => 'gourbet_chambre2',
		TXT_GOURBET_CHAMBRE3_LNK => 'gourbet_chambre3',
		TXT_GOURBET_CHAMBRE4_LNK => 'gourbet_chambre4',
		TXT_GOURBET_TERRASSE_LNK => 'gourbet_terrasse',
		);
	$onglets = new Onglets($page, $listeOnglets, 'gourbet_accueil', 'gourbet', $piece);
?>
</h3>
</div>

<?php $onglets->display();?>
<div id="zoneParagraphe">
 <p>
 <?php
 	echo TXT_GOURBET;
 ?></p>
 
</div>

<?php $onglets->follow(); ?>