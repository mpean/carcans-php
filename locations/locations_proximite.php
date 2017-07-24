<p><?php echo TXT_LOCATIONS_PROXIMITE;?></p>

<h4><?php echo TXT_LOCATIONS_IMAGES_TITRE;?></h4>

<?php 
	$listeImages = array(
		array('oyat_portail.JPG' => TXT_CHALET_IMG),	
		array('gourbet_portail.jpg' => TXT_MAISON_IMG)
		);
	$images = new Images($listeImages);
?>