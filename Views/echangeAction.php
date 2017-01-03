<?php
	$titre="Actions et échanges";
	ob_start();
  echo'<p><form method="post" action="index.php?action=echangeAction">
    <input type="submit" name="echange" value="Ajouter Echange">
  </form>
  </p>

  <form method="post" action="index.php?action=echangeAction">
    <input type="submit" name="action" value="Ajouter Action">
  </form>';
  $contenu=ob_get_clean();
	require("Views/layout.php");

?>
