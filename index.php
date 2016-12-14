<?php
	session_name("Utilisateur");
	session_start();
	require("Model/Model.php");
	require("Model/VIPManager.php");
  $vm = new VIPManager();
	$results = $vm -> getVIP();
	if(!isset($_GET["action"])=='listeVIP'){
		require("Views/connexion.php");
	}else{
  	require("Views/vip.php");
	}
?>
