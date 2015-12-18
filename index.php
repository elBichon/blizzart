<!--au moment de l'insertion d'une image dans la base de données, toujours penser à mettre le chemin absolu-->


<!DOCTYPE html>
<html>
  <head lang="fr">
    <meta charset="utf-8">
    <meta name="description" content="site vitrine du blizzart evenement du bda de tmsp">
    <title>Blizzart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="JS/bootstrap-hover-dropdown.js"></script>
    <script src="JS/functions.js"></script>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="51">
    <?php  include("includes/connect.php"); ?>
    <?php  include("includes/menu.php"); ?>

       <!--Accueil-->
    <span class="anchor" id="section2"></span>
    <div id="s1" class="slide">
      <div id="b11" class="container-fluid">
	<div id="r111" class="row">
	  <div id="c1111" class="col-sm-4 col-xs-4"><img src="img/logo.jpg" class="img-responsive" alt="Logo League of Legends"id="lo1">
        <img class="img-responsive"src="img/logo.jpg" id="logotsp" alt="Logo TSP">
     </div>
	  <div id="c1112" class="col-sm-4 col-xs-4"><img class="img-responsive" src="img/logo.jpg" alt="Logo blizzart" id="lo2"></div>//logo principal
	  <div id="c1113" class="col-sm-4 col-xs-4"><img class="img-responsive" src="img/logo.jpg" alt="Logo"id="lo3">
        <img class="img-responsive" src="img/logo.jpg" id="logogate" alt="Logo GATE">
      </div>
	</div>
	<div id="r112" class="row">
	  <div id="c1121" class="col-sm-12 col-xs-12">
	    <h2>le Festival </h2>
	    <h4>festival artistique inter-écoles</h4>
            <?php  include("includes/includesFestival.php"); ?>
	  </div>
	</div>
	</section>

    <!--Programme-->
    <span class="anchor" id="section3"></span><!--pensez à rajouter script pour que tant que la date du festival est pas arrivée, ne pas mettre en mode visible-->
    <div id="s1" class="slide">
    <div id="r112" class="row">
            <h2>Au programme </h2>
            <h4>festival artistique inter-écoles</h4>
                <?php  include("includes/includesProgramme.php"); ?>
        </div>
    </div>
    </div>
</section>

    <!--Entreprises-->
    <span class="anchor" id="section4"></span>
    <div id="s3" class="slide">
      <div id="b31" class="container-fluid">
	<div id="r311" class="row">
	  <h2>Festival Entreprise</h2>
	  <h4>Vous êtes une entreprise et vous souhaitez aussi faire partie de l’aventure ? Nous avons pensé à vous !</h4>
                <?php  include("includes/includesEntreprise.php"); ?>
	  	</div>
      </div>
    </div>

        <!--L'équipe-->
    <span class="anchor" id="section5"></span>
<div id="s5" class="slide">
      <div id="b51" class="container-fluid">
	<div id="r511" class="row">
	  <h2>Notre équipe</h2>
        <div class="barre">&nbsp</div>
            <div id="r113" class="row"></div>
            <div id="r114" class="row">
                <div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="img/ecole/logo.jpg" alt="Logo sponsor"></div>
                <div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="img/ecole/logo.jpg" alt="Logo sponsor"></div>
                <div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="img/ecole/logo.jpg" alt="Logo sponsor"></div>
                <div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="img/ecole/logo.jpg" alt="Logo sponsor"></div>
                <div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="img/ecole/logo.jpg" alt="Logo sponsor"></div>
                <div id="c1141" class="col-sm-2 col-xs-2"><img id="sponso1" class="img-responsive" src="img/ecole/logo.jpg" alt="Logo sponsor"></div>
            </div>
            <div id="r115" class="row">
                <div id="c1151" class="col-sm-2 col-xs-2"><h4><?php  include("includes/nomEquipe.php"); ?></h4></div>
                <div id="c1152" class="col-sm-2 col-xs-2"><h4>Votre marque ici</h4></div>
                <div id="c1153" class="col-sm-2 col-xs-2"><h4>Votre marque ici</h4></div>
                <div id="c1154" class="col-sm-2 col-xs-2"><h4>Votre marque ici</h4></div>
                <div id="c1153" class="col-sm-2 col-xs-2"><h4>Votre marque ici</h4></div>
                <div id="c1154" class="col-sm-2 col-xs-2"><h4>Votre marque ici</h4></div>
            </div>
    </div>
</div>
    <div class="barre">&nbsp</div>

	</div>
      </div>
    </div>

    <!--Contact-->
    <span class="anchor" id="section6"></span>
    <div id="s8" class="slide">
      <div id="b81" class="container-fluid">
        <div class="jumbotron">
	  <h2>Contact</h2>
	  <p><a href="mailto:benjamin.veil@telecom-sudparis.eu">Envoyez-moi un e-mail si vous avez besoin d'informations complémentaires</a></p>
        </div>
        </div>
    </div>
  </body>
</html>

