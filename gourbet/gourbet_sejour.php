<h4><?php echo TXT_GOURBET_SEJOUR_TITRE;?></h4>

<p><?php echo TXT_GOURBET_SEJOUR;?></p>

<?php 
	$listeImages = array(
		array('g_s_allg.jpg' => TXT_GOURBET_SEJOUR1_IMG),	
		array('g_s_repas 1.jpg' => TXT_GOURBET_SEJOUR2_IMG),
		array('g_s_repas 2.jpg' => TXT_GOURBET_SEJOUR2_IMG),
		array('g_s_salon_droite.jpg' => TXT_GOURBET_SEJOUR3_IMG),
		array('g_s_salon.jpg' => TXT_GOURBET_SEJOUR3_IMG),
		array('g_s_scouchage.jpg' => TXT_GOURBET_SEJOUR4_IMG),
		array('g_s_scouchage2.jpg' => TXT_GOURBET_SEJOUR4_IMG),
		array('g_s_sdb2.jpg' => TXT_GOURBET_SEJOUR7_IMG),
		array('g_s_sdb.jpg' => TXT_GOURBET_SEJOUR5_IMG),
		array('g_s_WC.jpg' => TXT_GOURBET_SEJOUR6_IMG)
		);
	$images = new Images($listeImages);
?>