<h4><?php echo TXT_CHALET_CUISINE_TITRE;?></h4>

<p><?php echo TXT_CHALET_CUISINE;?></p>

<?php 
	$listeImages = array(
		array('cuisine4.JPG' => TXT_CUISINE_GAUCHE_IMG),	
		array('cuisine1.JPG' => TXT_CUISINE_DROIT_IMG)
		);
	$images = new Images($listeImages);
?>
