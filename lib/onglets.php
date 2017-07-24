<?php
class Onglets {
	
	private $listeOnglets;
	const separateur =' | ';
	private $page;
	private $ongletDefaut;
	private $dir;
	private $piece;

    function __construct($page, array $listeOnglets, $ongletDefaut, $dir, $piece) {
        $this->listeOnglets=$listeOnglets;
        $this->page=$page;
        $this->ongletDefaut=$ongletDefaut;
        $this->dir=$dir;
        if ($piece == '') {
			$piece=$ongletDefaut;
		}
        $this->piece=$piece;
    }
    
    public function display() {
    	$count=count($this->listeOnglets);
    	echo '<div id="zoneOnglet"><p>';
		for ($i = 0; $i < $count; $i++) {
			if (current($this->listeOnglets) == $this->piece) {
				echo '<div class="caseOnglet"><u class="titreOnglet">',key($this->listeOnglets),'</u></div>';
			}
			else {
				echo '<div class="caseOnglet"><a class="accesOnglet" HREF="index.php?page=', $this->page, '&lang=', $GLOBALS['lang'],'&piece=' ,current($this->listeOnglets),'">', key($this->listeOnglets),'</a></div>';	
			}
			
			
//			if($i < $count -1){
//				echo self::separateur;
//			}
			next($this->listeOnglets);
		}
		echo '</p></div>';
    }
    
    public function follow(){
    	if (!isset($_GET['piece']) || $_GET['piece']=='') $piece= $this->ongletDefaut; else $piece= $_GET['piece'];
		include("./$this->dir/$piece.php");
    }
}
?>
