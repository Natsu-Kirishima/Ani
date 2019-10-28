<?php

	class Bootstrap {
		function __construct(){
			$ctrl = $_GET;

			if (empty($ctrl)) {
				require 'controller/homecontroller.php';
				$home = new HomeController;
				$home->index(); return false;
			}

			if (count($ctrl) == 1 && isset($ctrl['controller'])) {
				$controller = ucfirst($ctrl['controller']).'Controller';
				$conr = new $controller;
				$conr->index();
			}

			if (count($ctrl) == 2 && isset($ctrl['action'])) {
				$controller = ucfirst($ctrl['controller']).'Controller';
				$conr = new $controller;
				$action = 'action'.ucfirst($ctrl['action']);
				$conr->$action();
				return false;
			}

			if (count($ctrl) == 3 && isset($ctrl['action']) && isset($ctrl['param'])) {
				$controller = ucfirst($ctrl['controller']).'Controller';
				$conr = new $controller;
				$action = 'action'.ucfirst($ctrl['action']);
				$param = $ctrl['param'];
				$conr->$action($param);
				return false;
			}
		}
	}
?>