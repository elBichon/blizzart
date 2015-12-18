<div id="includesEntreprise">
<?php
    $reponse = $bdd->query('SELECT * FROM entreprises WHERE id=1');
    while ($donnees = $reponse->fetch())
    {
        echo '<p>'. $donnees['textEntreprise'] .'</p><p>'. $donnees['entrepriseP2'] .'</p>';
    }
    $reponse->closeCursor();
    ?>
</div>

