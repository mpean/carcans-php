<?php

abstract class Site{
	protected $page;
	protected $image;
	protected $piece;
	
	protected function getContexte(){
		global $page;
		global $image;
		global $piece;
		
		$this->page=$page;
		$this->image=$image;
		$this->piece=$piece;
		
	}
}

?>