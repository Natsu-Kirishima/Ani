<?php

	class View {
		function __construct() {}

		public function render($name, $showData=[]) {
			if(!is_array($showData)){
				return FALSE;
			}
			extract($showData, EXTR_OVERWRITE);

			require 'view/layout/header.php';
			require 'view/'.$name.'.php';
			include 'view/layout/footer.php';
		}
	}
?>