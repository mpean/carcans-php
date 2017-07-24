<h4><?php echo TXT_GOURBET_CHAMBRE3_TITRE;?></h4>

<p><?php echo TXT_GOURBET_CHAMBRE3;?></p>

<?php 
	$listeImages = array(
		array('g_c3_allg.jpg' => TXT_GOURBET_CHAMBRE3_1_IMG),	
		array('g_c3_fenetre.jpg' => TXT_GOURBET_CHAMBRE3_3_IMG),	
		array('g_c3_sdb1.jpg' => TXT_GOURBET_CHAMBRE3_2_IMG),
		array('g_c3_sdb2.jpg' => TXT_GOURBET_CHAMBRE3_2_IMG)
		);
	$images = new Images($listeImages);
?>