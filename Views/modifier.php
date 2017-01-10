<?php
	$titre="Liste des VIP";
	ob_start();
  echo'<form method="post" action="./index.php?action=listeVIP">
    <p>
      <label for="Nom">Nom :</label>
      <input type="text" name="nom" id="nom" />
		</p>

		<p>
       Type du vip : <br />
       <input type="checkbox" name="Acteur" id="Acteur" /> <label for="Acteur">Acteur</label><br />
       <input type="checkbox" name="Realisateur" id="Realisateur" /> <label for="Realisateur">Realisateur</label><br />
       <input type="checkbox" name="Producteur" id="Producteur" /> <label for="Producteur">Producteur</label><br />
			 <input type="checkbox" name="Scenariste" id="Scenariste" /> <label for="Producteur">Scenariste</label><br />
			 <input type="text" name="autre" placeholder="Autre">
   </p>

	 <p>
		  <label for="Genre">Genre :</label><br/>
      <input type="radio" name="genre" value="male"> Homme<br/>
      <input type="radio" name="genre" value="female"> Femme<br/>
      <input type="radio" name="genre" value="other"> Autre
	 </p>
      <input class="image_bouton" type="submit" value=""/>
  </form>';
  $contenu=ob_get_clean();
	require("Views/layout.php");

?>
