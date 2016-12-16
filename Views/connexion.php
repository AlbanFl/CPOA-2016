<?php
	$titre="connexion";
	ob_start();
    echo '<form method="post" action="index.php?action=listeVIP">
       <p>
           <label for="identifiant">Identifiant :</label>
           <input type="text" name="identifiant" id="identifiant" />

           <br/>
           <label for="pass">Mot de passe :</label>
           <input type="password" name="pass" id="pass" />
           <br/>
           <br/>
           <input type="submit" value="se connecter" />

       </p>
    </form>';
	$contenu=ob_get_clean();
	require("Views/layout.php");

?>
mdr


lol
