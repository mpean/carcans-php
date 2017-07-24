<h4><?php echo TXT_CHALET_CHAMBRE3_TITRE;?></h4>

<p><?php echo TXT_CHALET_CHAMBRE3;?></p>

<?php 
	$listeImages = array(
		array('chambre3_3.JPG' => TXT_CHALET_CHAMBRE3_IMG_LIT),	
		array('chambre3_4.JPG' => TXT_CHALET_CHAMBRE3_IMG_PLACARD)
		);
	$images = new Images($listeImages);
?>