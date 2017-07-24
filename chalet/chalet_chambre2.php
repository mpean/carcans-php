<h4><?php echo TXT_CHALET_CHAMBRE2_TITRE;?></h4>

<p><?php echo TXT_CHALET_CHAMBRE2;?></p>

<?php 
	$listeImages = array(
		array('chambre2.JPG' => TXT_CHALET_CHAMBRE2_IMG),	
		array('chambre2_1.JPG' => TXT_CHALET_CHAMBRE2_ARMOIRE)
		);
	$images = new Images($listeImages);
?>