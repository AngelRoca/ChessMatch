<?php
	class core{
		public $config;

		public function __construct($config){
			$this->config = $config;
		}

		public function load_controller(){
			$controller_name = isset($_GET["controller"]) ? $_GET["controller"] : $this->config->default_controller;
			$action_name = isset($_GET["action"]) ? $_GET["action"] : $this->config->default_action;

			$controller_file="{$this->config->document_root}controller/controller.$controller_name.php";
			if(file_exists($controller_file)){
				include_once $controller_file;
				$controller = new $controller_name($this->config);
				if(method_exists($controller, $action_name)){
					$controller->$action_name();
				}else{
					echo "este action no sirve";
				}
			}else{
				echo "<p> $controller_name doesn't exist </p>";
			}
		}
	}
?>