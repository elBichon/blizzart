<div id="includesFestival">
<?php
    $reponse = $bdd->query('SELECT * FROM event WHERE id=1');
    while ($donnees = $reponse->fetch())
    {
        echo '<p>'. $donnees['festival'] .'</p><p>'. $donnees['quand'] .'</p><p>'. $donnees['equipe'] .'</p><p>'. $donnees['qui'] .'</p>';
    }
    $reponse->closeCursor();
    ?>
</div>
