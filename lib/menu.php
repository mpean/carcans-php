<?php
class Menu {
	private $listeMenus;
	private $page;
	private $menuDefaut;
	private $menu;
	
	    function __construct($page, array $listeMenus, $menuDefaut, $menu) {
        $this->listeMenus=$listeMenus;
        $this->page=$page;
        $this->ongletDefaut=$menuDefaut;
        $this->menu=$menu;
    }
 
     public function display() {
    	$count=count($this->listeMenus);
		for ($i = 0; $i < $count; $i++) {
			
			if (current($this->listeMenus) == $this->menu) {
				echo '<li class=limenu>',key($this->listeMenus),'</li>';
			}
			else {
				echo '<li class=limenu><a href="index.php?page=', $this->page, '&lang=', $GLOBALS['lang'],'">', key($this->listeMenus),'</a>';	
			}
			
			next($this->listeMenus);
		}
    }   
    
    public function follow(){
    	if (!isset($_GET['menu'])) $menu=$this->menuDefaut; else $menu= $_GET['menu'];    	
		include("./$menu.php");
    }
}
?>