<?php
	class Form {

public function open($tag, $arr = []){

			echo "<".$tag." "; array_walk($arr, function($val, $key){
			echo $key.'="'.$val.'" ';});
			echo ">";
		}

		public function input($arr = []){

			echo "<input "; array_walk($arr, function($val, $key){
			echo $key.'="'.$val.'" ';});
			echo ">";
		}

		public function close($tag) {
			return "</".$tag.">";
		}
	}
?>