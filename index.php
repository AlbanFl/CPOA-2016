<?php
	session_name("Utilisateur");
	session_start();
	require("Model/Model.php");
	require("Model/VIPManager.php");
  $vm = new VIPManager();
	$results = $vm -> getVIP();
	if(!isset($_GET["action"])){
		require("Views/connexion.php");
	}
	else{

		if($_GET["action"] == "listeVIP"){
			require("Views/vip.php");
		}

		elseif ($_GET["action"] == "modifierVip") {
			require("Views/modifier.php");
		}
	}
?>
