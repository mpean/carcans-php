<?php 

class Image {
	private $fichier = '';
	private $legende = '';
	private $indice;
	
	function __construct($fichier, $legende, $indice=0) {
		$this->setFichier($fichier);
		$this->setLegende($legende);
		$this->setIndice($indice);
	}
	
	public function setFichier($fichier) {
		$this->fichier=$fichier;
	}
	
	public function getFichier() {
		return $this->fichier;
	}
	
	public function setLegende($legende) {
		$this->legende=$legende;
	}
	
	public function getLegende() {
		return $this->legende;
	}
	
	public function setIndice($indice) {
		$this->indice=$indice;
	}
	
	public function getIndice() {
		return $this->indice;
	}
	
}

?>