<?php
	include 'config/paths.php';
	include 'system/bootstrap.php';
	include 'config/databaseconfig.php';
	include 'system/database.php';
	include 'system/model.php';
	include 'system/view.php';
	include 'system/controller.php';
	include 'controller/studentcontroller.php';
	include 'controller/teachercontroller.php';

	require 'lib/request.php';
	require 'lib/form.php';
	require 'lib/redirect.php';
	$btstr = new Bootstrap();

?>