<?php
	$titre="Liste des VIP";
	ob_start();
	$contenu=ob_get_clean();
    echo '<table class="ac_bord">
	<tr>
		<th>Nom</th>
		<th>Type</th>
		<th>Sexe</th>
		<th>Echanges et actions</th>
		<th></th>
	</tr>';
	foreach ($results as $ligne){
				echo '<tr>
				<td>'.$ligne['nomPersonne'].'</td>
				<td>'.$ligne['typeVIP'].'</td>
				<td>'.$ligne['genrePersonne'].'</td>
				<td></td>
				<td></td>
				</tr>';
	}
	require("Views/layout.php");
	
?>