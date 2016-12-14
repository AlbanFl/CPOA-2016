<?php
	session_name("Utilisateur");
	session_start();
	require("Model/Model.php");
	require("Model/VIPManager.php");
  $vm = new VIPManager();
	$results = $vm -> getVIP();

  require("Views/vip.php");
?>
