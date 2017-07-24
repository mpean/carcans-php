<?php
class Images extends Site {
	private $listeImages;	
	
    function __construct(  array $listeImages) {
    	
        $this->getContexte();
    	$this->listeImages=$listeImages;
        if ($this->image == '') {
			$this->image=0;
		}
        $this->display();
    }
    
	public function display() {
    	$imagePrecedante='';
    	$imageSuivante='';
    	$imageAffichee='';
    	$listeImagesAffichees;
    	
    	// premiere image affichee
    	$imageAffichee = new Image(key($this->listeImages[$this->image]), current($this->listeImages[$this->image]), $this->image);
    	$listeImagesAffichees = array($imageAffichee);
    	
    	// deuxieme image affichee
		if (array_key_exists($this->image+1, $this->listeImages) != null) {
			$imageAffichee = new Image(key($this->listeImages[$this->image+1]), current($this->listeImages[$this->image+1]), $this->image+1);
			array_push($listeImagesAffichees, $imageAffichee);
    	}
    	
    	if (array_key_exists($this->image+2, $this->listeImages) != null) {
    		$imageSuivante = new Image(key($this->listeImages[$this->image+2]), current($this->listeImages[$this->image+2]), $this->image+2);
    	}
    	
		if (array_key_exists($this->image-2, $this->listeImages)) {
			$imagePrecedante = new Image(key($this->listeImages[$this->image-2]), current($this->listeImages[$this->image-2]), $this->image-2);
    	}
    	elseif (array_key_exists($this->image-1, $this->listeImages)) {
    		$imagePrecedante = new Image(key($this->listeImages[$this->image-1]), current($this->listeImages[$this->image-1]), $this->image-1);
    	}
    	
    	// affichage de la avigation
		echo '<div class="zoneImages"><p>';
		
		if (count($this->listeImages)>2) {
		
			// image precedante
			if ($imagePrecedante != '') {
				echo '<a class="accesImage" HREF="index.php?page=', $this->page, '&lang=', $GLOBALS['lang'],'&piece=',$this->piece,'&image=' ,$imagePrecedante->getIndice(),'">', '<IMG SRC="icones/previous_cyan.png" ALT="Image precedente">','</a>';
			}
			else {
				echo '<IMG SRC="icones/previous_tan.png" ALT="Image precedente">';
			}
			
			// image suivante
			if ($imageSuivante != '') {
				echo '<a class="accesImage" HREF="index.php?page=', $this->page, '&lang=', $GLOBALS['lang'],'&piece=',$this->piece,'&image=' ,$imageSuivante->getIndice(),'">','<IMG SRC="icones/next_cyan.png" ALT="Image suivante">','</a>';
			}
			else {
				echo '<IMG SRC="icones/next_tan.png" ALT="Image suivante">';
			}		
			echo '<br>';
		
		}
		
		// affichage des images
		foreach ($listeImagesAffichees as $image) {
			$imagePath="./photos/" . $this->page . "/" . $image->getFichier();
			$imagePetitePath="./photos/" . $this->page . "/petites/" . $image->getFichier();
			echo '<IMG SRC="',$imagePetitePath,'" ALT="',$image->getLegende(),'">';
		}
		
		echo '</p></div>';
    	
    }
    
}
?>