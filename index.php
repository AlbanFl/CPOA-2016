<?php
	session_name("Utilisateur");
	session_start();
	$activeList='0';
	$activeAdd='0';
	require("Model/Model.php");
	require("Model/VIPManager.php");
  $vm = new VIPManager();
	$results = $vm -> getVIP();
	if(!isset($_GET["action"])){
		require("Views/connexion.php");
	}
	else{

		if($_GET["action"] == "listeVIP"){
			$activeList='active';
			require("Views/vip.php");
		}

		elseif ($_GET["action"] == "modifierVip") {
			require("Views/modifier.php");
		}

		elseif($_GET["action"] == "ajoutVIP"){
			$activeAdd="active";
			require("Views/ajoutVIP.php");
			if(isset($_POST['nom'])){
				$nom=$_POST['nom'];
				$type=$_POST['type'];
				$genre=$_POST['genre'];
				$nat=$_POST['Nationalite'];
				$typeM="";
				foreach ($type as $key => $value) {
						$typeM=$typeM.$value;
						$typeM=$typeM." ";
				}
				$vm -> addVIP($nom,$nat,$genre,$typeM);

			}
		}

		elseif($_GET["action"] == "echangeAction"){
			if(isset($_POST['echange'])){
				require("Views/echange.php");
			}

			elseif(isset($_POST['action'])){
				require("Views/action.php");
			}

			else{
				require("Views/echangeAction.php");
			}
		}
	}
?>
