<?php
	$titre="Actions et échanges";
	ob_start();
  echo '	<h1>Ajouter action</h1>
  <form method="post" action="index.php?action=echangeAction">
    <p>
      <br/>

	  <label for="date">Date de début de l\'action :</label>
    <select name="jour">';
    for($i=1 ; $i<=31 ; $i++){
      echo'<option>'.$i.'</option>';
    }
	  echo'</select>
	  <select name="mois">';
    for($i=1 ; $i<=12 ; $i++){
      echo'<option>'.$i.'</option>';
    }
	  echo'</select>
	  <select name="année">';
    for($i=2016 ; $i<=2020 ; $i++){
      echo'<option>'.$i.'</option>';
    }
	  echo'</select>

      <br/>
	  <br/>

	  <label for="objet">Contenu de l\'action :</label>
	  <textarea name="onjet" id="objet"></textarea>

	  <br/>
	  <br/>

	  <label for="date">Date de fin de l\'action :</label>
    <select name="jour">';
    for($i=1 ; $i<=31 ; $i++){
      echo'<option>'.$i.'</option>';
    }
	  echo'</select>
	  <select name="mois">';
    for($i=1 ; $i<=12 ; $i++){
      echo'<option>'.$i.'</option>';
    }
	  echo'</select>
	  <select name="année">';
    for($i=2016 ; $i<=2020 ; $i++){
      echo'<option>'.$i.'</option>';
    }
	  echo'</select>

	  <br/>
	  <br/>

      <input type="submit" value="Ajouter" />

    </p>
  </form>

  <form ';


  $contenu=ob_get_clean();
	require("Views/layout.php");

?>
