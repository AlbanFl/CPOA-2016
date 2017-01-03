<?php
	$titre="Liste des VIP";
	ob_start();
    echo '<table class="ac_bord">
	<tr>
		<th>Nom</th>
		<th>Type</th>
		<th>Genre</th>
		<th>Echanges et actions</th>
		<th>Modifier</th>
	</tr>';
	foreach ($results as $ligne){
				echo '<tr>
				<td>'.$ligne['nomPersonne'].'</td>
				<td>'.$ligne['typeVIP'].'</td>
				<td>'.$ligne['genrePersonne'].'</td>
				<td><a href="index.php?action=echangeAction">Détails</a></td>
				<td><a href="index.php?action=modifierVip">modifier</a></td>
				</tr>';
	}
	echo '</table>';
	$contenu=ob_get_clean();
	require("Views/layout.php");

?>
