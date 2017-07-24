<div class="li-onglets">
<h3>
<?php 
	echo TXT_LIENS_TITRE;
	$listeOnglets = array(
		TXT_LIENS_INFOS_TOURISTIQUES_LNK => 'infos_touristiques',
		TXT_LIENS_INFOS_PRATIQUES_LNK => 'infos_pratiques',
		TXT_LIENS_EMPRUNTS_LNK => 'emprunts',
		TXT_LIENS_DIVERS_LNK => 'divers'
		);
	$onglets = new Onglets($page, $listeOnglets, 'infos_touristiques', 'liens', $piece);
?>
</h3>
</div>

<p><?php $onglets->display();?></p>
<br>
<p><?php echo TXT_LIENS_TEXTE_1;?></p>


<?php $onglets->follow(); ?>
