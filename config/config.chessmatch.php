<?php 
require_once "config.default.php";
class chessmatch_config extends default_config{
	public function chessmatch_config(){
		parent::default_config();
		
		$this->http_address="http://chessmatch";
	}
}
?>