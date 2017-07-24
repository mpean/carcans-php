<h4><?php echo TXT_GOURBET_CHAMBRE4_TITRE;?></h4>

<p><?php echo TXT_GOURBET_CHAMBRE4;?></p>

<?php 
	$listeImages = array(
		array('g_c4_allg.jpg' => TXT_GOURBET_CHAMBRE4_1_IMG),	
		array('g_c4_jumeaux.jpg' => TXT_GOURBET_CHAMBRE4_2_IMG)
		);
	$images = new Images($listeImages);
?>