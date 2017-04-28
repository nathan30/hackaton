<?php include_once 'class/dbconnection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="L'alchimiste, une bouffée d'art frais. Votre restaurant traditionnel sur Montpellier">
    <meta name="author" content="Manou Falzone">
    <meta name="author" content="Nathan Cheval">
    <title>L'alchimiste</title>

    <!-- CSS files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/divers.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/styleManou.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<header>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="restaurant.php">L'alchimiste</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="restaurant.php">Le restaurant</a></li>
                    <li><a href="menu.php">La carte</a></li>
                    <li class="active"><a href="vins.php">Les vins<span class="sr-only">(current)</span></a></li>
                    <li><a href="contact.php">Infos pratiques</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<main class="contentMenu">
    <div class="row">
        <div class="col-md-6 col-sm-12 contentFood">
            <h4>Vins rouges</h4>
            <ul>
                <li>Terrasse du Larzac Famille Cros-Pujol <span>2012</span> - 40,00 </li>
                <hr>
                <li>Grès de Montpellier Famille Cros Pujol <span>2012</span> - 38,00</li>
                <hr>
                <li>Minervois domaine des Homs J-M Crozals bio <span>2014</span> - 39,00</li>
                <hr>
                <li>Domaine d'Auphilhac Lou Mazet Sylvain Fadat bio <span>2013</span> - 37,00</li>
                <hr>
                <li>La clape "Hortala" tradition <span>2013</span> - 26,00</li>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12 colNoPadding picVinsRouge"></div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 colNoPadding picRose"></div>
        <div class="col-md-6 col-sm-12 contentFood">
            <h4>Vins rosés</h4>
            <ul>
                <li>Faugère "Mas Olivier" - 23.00</li>
                <hr>
                <li>La cuvée Mythique IGP <span>2015</span> - 30.00</li>
                <hr>
                <li>Montpeyroux L'Hortgrand "la cigale" <span>2014</span> Marc Cros - 32.00</li>
                <hr>
                <li> Saint chinian "l'excellence de St Laurent - 20.00</li>
                <hr>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12 colNoPadding picRose2"></div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 contentFood">
            <h4>Vins blancs</h4>
            <div class="wrap">
                <ul>
                    <li>Colline du bourdic chardonnay - 22.00</li>
                    <hr>
                    <li>Chevalier Georges Viognier - 25.00</li>
                    <hr>
                    <li>Saint chinian "l'excellence de St Laurent - 20.00</li>
                    <hr>
                    <li>Tariquet 1/2 sec gros manseng, chardonnay - 26.00</li>
                    <hr>
                    <li>La clape château La Négly famille Paul Rosset - 32.00</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 colNoPadding picBlanc"></div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 colNoPadding picChampagne"></div>
        <div class="col-md-6 col-sm-12 contentFood">
            <h4>Champagnes</h4>
            <div class="wrap">
                <ul>
                    <li>Mini bouteille champagne 20 cl - 14.00</li>
                    <hr>
                    <li>Champagne Pelletier 37.5 cl - 27.00</li>
                    <hr>
                    <li>Pipier-Heidsieck 75 cl - 27.00</li>
                    <hr>
                    <li>Veuve Clicqot - 110.00</li>
                    <hr>
                    <li>Ruinart blanc de blanc - 130.00</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 colNoPadding picChampagne2"></div>
    </div>
</main>
<?php
require 'footer.html';
?>
</body>
</html>