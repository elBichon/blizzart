<?php include("connect.php"); ?>
<?php
    $reponse = $bdd->query('SELECT * FROM images WHERE id=2');
    while ($donnees = $reponse->fetch())
    {
        echo '<div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="'. $donnees['nom'] .'" alt="programme du festival"></div>';
    }
    $reponse->closeCursor();
?>


