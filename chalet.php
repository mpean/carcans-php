<div class="li-onglets">
<h3>
<?php 
	echo TXT_CHALET_TITRE;
	echo ' <IMG SRC="icones/star.png" height="16" width="16">';
	echo '<IMG SRC="icones/star.png" height="16" width="16">';
	echo '<IMG SRC="icones/star.png" height="16" width="16">';
	$listeOnglets = array(
		TXT_CHALET_ACCUEIL_LNK => 'chalet_accueil',
		TXT_CHALET_SEJOUR_LNK => 'chalet_sejour',	
		TXT_CHALET_CUISINE_LNK => 'chalet_cuisine',
		TXT_CHALET_CHAMBRE1_LNK => 'chalet_chambre1',
		TXT_CHALET_CHAMBRE2_LNK => 'chalet_chambre2',
		TXT_CHALET_CHAMBRE3_LNK => 'chalet_chambre3',
		TXT_CHALET_TERRASSE_LNK => 'chalet_terrasse'
		);
	$onglets = new Onglets($page, $listeOnglets, 'chalet_accueil', 'chalet', $piece);
?>
</h3>
</div>

<?php $onglets->display();?>
<div id="zoneParagraphe">
	<p><?php echo TXT_CHALET;?></p>
</div>


<?php $onglets->follow(); ?>