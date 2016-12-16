<?php
	$titre="Liste des VIP";
	ob_start();
  echo'ici on modifie les VIP putain *-*';
  $contenu=ob_get_clean();
	require("Views/layout.php");

?>
