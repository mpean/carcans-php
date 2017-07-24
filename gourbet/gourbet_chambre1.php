<h4><?php echo TXT_GOURBET_CHAMBRE1_TITRE;?></h4>

<p><?php echo TXT_GOURBET_CHAMBRE1;?></p>

<?php 
	$listeImages = array(
		array('g_c1_fenetre.jpg' => TXT_GOURBET_CHAMBRE1_IMG),	
		array('g_c1_lits.jpg' => TXT_GOURBET_CHAMBRE1_IMG),
		array('g_c1_placard.jpg' => TXT_GOURBET_CHAMBRE1_IMG),
		array('g_c1_sdb.jpg' => TXT_GOURBET_CHAMBRE1_IMG2),
	
		);
	$images = new Images($listeImages);
?>