<h4><?php echo TXT_CHALET_SEJOUR_TITRE;?></h4>

<p><?php echo TXT_CHALET_SEJOUR;?></p>

<?php
$listeImages = array(
	array('sejour2.JPG' => TXT_CHALET_SEJOUR1_IMG),
	array('sejour3.JPG' => TXT_CHALET_SEJOUR2_IMG)
);

$images = new Images($listeImages);
?>
