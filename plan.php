<div class="li-onglets">
<h3>
<?php 
	echo TXT_ACCES_TITRE;
	$listeOnglets = array(
		TXT_ACCES_PLAN_LNK => 'plan',
		TXT_ACCES_AVION_LNK => 'avion',
		TXT_ACCES_TRAIN_LNK => 'train',
		TXT_ACCES_BUS_LNK => 'bus',
		TXT_ACCES_VELO_LNK => 'velo',
		TXT_ACCES_VOITURE_LNK => 'voiture',
		TXT_ACCES_PIED_LNK => 'pied'
		);
	$onglets = new Onglets($page, $listeOnglets, 'plan', 'acces', $piece);
?>
</h3>
</div>

<p><?php $onglets->display();?></p>
<br>
<p><?php echo TXT_ACCES_TEXTE_1;?></p>


<?php $onglets->follow(); ?>
