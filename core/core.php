<?php
	class core{
		public $config;

		public function core($config){
			$this->config = $config;
		}

		public function load_controller(){
			echo "Cargar controlador";
		}
	}
?>