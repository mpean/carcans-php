<h4><?php echo TXT_CHALET_TERRASSE_TITRE;?></h4>

<p><?php echo TXT_CHALET_TERRASSE;?></p>

<?php 
	$listeImages = array(
		array('terrasse3.JPG' => TXT_CHALET_TERRASE_IMG1),	
		array('terrasse4.JPG' => TXT_CHALET_TERRASE_IMG1)
		);
	$images = new Images($listeImages);
?>