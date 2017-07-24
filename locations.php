<div class="li-onglets">
<h3>
<?php 
	echo TXT_LOCATIONS_TITRE;
	echo ' <IMG SRC="icones/star.png">';
	echo '<IMG SRC="icones/star.png">';
	echo '<IMG SRC="icones/star.png">';
	echo '<IMG SRC="icones/star.png">';
	
	$listeOnglets = array(
		TXT_LOCATIONS_PRATIQUE_LNK => 'locations_pratique',	
		TXT_LOCATIONS_PROXIMITE_LNK => 'locations_proximite',
		);
	$onglets = new Onglets($page, $listeOnglets, 'locations_pratique', 'locations', $piece);
?>
</h3>
</div>

<?php $onglets->display();?>
<div id="zoneParagraphe">
 <p><?php echo TXT_LOCATIONS;?></p>
</div>

<?php $onglets->follow(); ?>
