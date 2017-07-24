<h4><?php echo TXT_GOURBET_CHAMBRE2_TITRE;?></h4>

<p><?php echo TXT_GOURBET_CHAMBRE2;?></p>

<?php 
	$listeImages = array(
		array('g_c2_jumeaux.jpg' => TXT_GOURBET_CHAMBRE2_1_IMG),	
		array('g_c2_superposes.jpg' => TXT_GOURBET_CHAMBRE2_2_IMG),
		array('g_c2_vue.jpg' => TXT_GOURBET_CHAMBRE2_3_IMG),
		array('g_c2c4_sdb.jpg' => TXT_GOURBET_CHAMBRE2_4_IMG)
		);
	$images = new Images($listeImages);
?>