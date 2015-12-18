<div id="includesEquipes">
<?php
    $reponse = $bdd->query('SELECT * FROM ecoles e, images i WHERE e.nom=i.id ORDER BY date_envoi DESC LIMIT 0, 20');
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong>'. htmlspecialchars($donnees['date_envoi']) .' :</br>' . htmlspecialchars($donnees['message']) . '</p>';
    }
    $reponse->closeCursor();
    ?>

</div>
