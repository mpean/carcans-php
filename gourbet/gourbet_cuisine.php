<h4><?php echo TXT_GOURBET_CUISINE_TITRE;?></h4>

<p><?php echo TXT_GOURBET_CUISINE;?></p>

<?php 
	$listeImages = array(
		array('g c allg.jpg' => TXT_GOURBET_CUISINE_GAUCHE_IMG),	
		array('g c espace cuisson.jpg' => TXT_GOURBET_CUISINE_DROIT_IMG),
		array('g c four seche linge.jpg' => TXT_GOURBET_FOUR_IMG),
		array('g c frigo.jpg' => TXT_GOURBET_FRIGO_IMG),
		array('g c micro ondes.jpg' => TXT_GOURBET_MW_IMG),
		array('g c zzcagibi.jpg' => TXT_GOURBET_cagibi_IMG)
		);
	$images = new Images($listeImages);
?>