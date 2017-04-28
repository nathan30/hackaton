<?php
    include_once 'class/dbconnection.php';
    $db = new dbconnection();
?>
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
                        <li class="active"><a href="restaurant.php">Le restaurant<span class="sr-only">(current)</span></a></li>
                        <li><a href="menu.php">La carte</a></li>
                        <li><a href="vins.php">Les vins</a></li>
                        <li><a href="contact.php">Infos pratiques</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row restaurant">
                <div class="col-md-6 col-xs-12">
                    <h2>
                        Le restaurant
                    </h2>
                </div>
                <div class="col-md-6 col-xs-12">
                    <p>
                        Au coeur du quartier Saint-Roch à Montpellier, l’Alchimiste vous accueille tous les soirs du lundi au samedi et propose une cuisine traditionnelle et de saison.
                        Depuis 15 ans, Nadia et Bruno Tendey se donnent corps et âme afin d’offrir à leurs clients une véritable expérience le temps d’un dîner et ont a coeur de proposer une carte de plats faits maison.
                        Dans une ambiance intimiste et tamisée l’Alchimiste saura vous séduire avec 4 cartes différentes au fil des saisons.
                    </p>
                </div>
            </div>
            <div class="row incontournable">
                <h2>
                    L'incontournable
                </h2>
                <div class="wrap">
                    <div class="col-md-6 col-xs-12 texte">
                        <p>
                            L’Alchimiste a son plat emblématique : le Fondu de camembert, framboises, échalotes, salade de jeunes pousses, huile au curry.
                            Tout au long de l'année, ce met saura ravir votre palet entre saveurs du terroir et du marché.
                        </p>
                    </div>
                    <div class="col-md-6 col-xs-12 picture">
                        <img src="imgs/camembert.jpg" alt="Camembert à la framboise" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="row newsletter">
                <div class="col-md-12">
                    <h2>
                        Newsletter
                    </h2>
                    <p>
                        Inscrivez vous à notre newsletter afin de recevoir en avant première nos nouvelles cartes saisonnières
                    </p>
                    <form name="newsletter" class="form-inline" action="restaurant.php" method="POST" autocomplete="off">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Entrez votre e-mail">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="form-control" value="Inscrivez vous !">
                        </div>
                    </form>
                    <div id='newsletterSuccess'><p>Votre inscription est bien confirmée</p></div>
                    <div id='newsletterError'><p>Erreur lors de l'inscription</p></div>
                    <div id='newsletterExist'><p>Votre adresse existe déjà dans notre base de données clients</p></div>
                    <?php
                        if(isset($_POST['submit'])){
                            if($_POST['email'] != ''){
                                $error = 0;
                                $email = $_POST['email'];
                                $queryEmail = "SELECT email FROM user";
                                $checkEmail = $db -> query($queryEmail);
                                $result = $checkEmail -> fetch_all(MYSQLI_ASSOC);
                                for($i = 0; $i < count($result); $i++){
                                    foreach($result[$i] as $key => $value){
                                        if($value == $email){
                                            echo "<script>displayPopup('exist')</script>";
                                            $error = 1;
                                            exit();
                                        }else{
                                            $error = 0;
                                        }
                                    }
                                }
                                if($error == 0){
                                    $query = "INSERT INTO user(email) VALUES('". $email . "')";
                                    $stmt = $db ->query($query);
                                    if($stmt){
                                        echo "<script>displayPopup('success')</script>";
                                    }else{
                                        echo "<script>displayPopup('error')</script>";
                                    }
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php
        require 'footer.html';
    ?>
</body>
</html>