<div id="includesEquipes">
<?php
    $reponse = $bdd->query('SELECT * FROM ecoles e, images i WHERE e.nom=i.nomEcole');
    while ($donnees = $reponse->fetch())
    {
        echo '<div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="'. $donnees['nom'] .'" alt="programme du festival"></div>'
            '<div id="r115" class="row">'
            '<div id="c1152" class="col-sm-2 col-xs-2"><h4>'".$donnees['nom']."'</h4></div>'
        ;
    }
    $reponse->closeCursor();
    ?>
<div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="img/ecole/logo.jpg" alt="Logo sponsor"></div>
<div id="r115" class="row">
<div id="c1152" class="col-sm-2 col-xs-2"><h4>Votre marque ici</h4></div>
