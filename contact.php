<?php include_once 'class/dbconnection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>L'alchimiste</title>

    <!-- CSS files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body id="contact">
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
                    <li><a href="vins.php">Les vins</a></li>
                    <li class="active"><a href="contact.php">Infos pratiques<span class="sr-only">(current)</span></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
    <main>
        <div class="container-fluid">
            <div class="row contact">
                <div class="col-md-6 col-xs-12">
                    <h2>
                        Contactez nous
                    </h2>
                    <h3>
                        Réservations uniquement par téléphone...
                    </h3>
                    <form name="contact" action="send_mail.php" autocomplete="off">
                        <div class="form-group">
                            <label for="firstname">Prénom </label>
                            <input type="text" class="form-control" name="firstname" id="firstname">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Nom </label>
                            <input type="text" class="form-control" name="lastname" id="lastname">
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse e-mail </label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="demande">Votre demande</label>
                            <textarea class="form-control" name="demande" id="demande" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Envoyer votre demande">
                        </div>
                    </form>
                </div>
                <hr>
                <div class="col-md-6 col-xs-12">
                    <h2>
                        Retrouvez nous
                    </h2>
                    <h3>
                        Nadia et Bruno Tendey
                    </h3>
                    <p>
                        <a href="https://www.google.fr/maps/place/19+Rue+Roucher,+34000+Montpellier/@43.6082359,3.8724127,17z/data=!3m1!4b1!4m5!3m4!1s0x12b6afa8611e1119:0x17b87310cab3991e!8m2!3d43.6082359!4d3.8746014?hl=fr-FR"
                           target="_blank">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            19 Rue Roucher, 34000 Montpellier<br><br>
                        </a>
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        A partir de 19h, service tardif
                    </p>
                    <div class="maps">

                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php
            include 'footer.html';
        ?>
    </footer>
</body>
</html>