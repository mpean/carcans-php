<h4><?php echo TXT_CHALET_CHAMBRE1_TITRE;?></h4>

<p><?php echo TXT_CHALET_CHAMBRE1;?></p>

<?php 
	$listeImages = array(
		array('chambre1.JPG' => TXT_CHALET_CHAMBRE1_IMG),	
		array('chambre1_bebe.JPG' => TXT_CHALET_CHAMBRE1_IMG_BEBE)
		);
	$images = new Images($listeImages);
?>