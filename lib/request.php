<?php
	class Request{
		public function isPost() {
			if($_SERVER['REQUEST_METHOD'] === 'POST') {
				return true;
			}
			else {
				return false;
			}
		}

		public function getPost($name) {
			return (isset($_POST[$name])) ? $_POST[$name] : NULL;
		}
	}
?>