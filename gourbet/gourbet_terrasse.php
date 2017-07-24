<h4><?php echo TXT_GOURBET_TERRASSE_TITRE;?></h4>

<p><?php echo TXT_GOURBET_TERRASSE;?></p>

<?php 
	$listeImages = array(
		array('g t 8.jpg' => TXT_GOURBET_TERRASSE_2_IMG),	
		array('g t 9.jpg' => TXT_GOURBET_TERRASSE_2_IMG)
		);
	$images = new Images($listeImages);
?>