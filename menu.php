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
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="restaurant.php">Le restaurant</a></li>
                        <li  class="active"><a href="menu.php">La carte<span class="sr-only">(current)</span></a></li>
                        <li><a href="vins.php">Les vins</a></li>
                        <li><a href="contact.php">Infos pratiques</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
</header>
<main class="contentMenu">
    <div class="row">
        <div class="col-md-6 col-sm-12 colNoPadding picMenu"></div>
        <div class="col-md-6 col-sm-12 menuFormules colNoPadding">
            <div class="ContentMenu">
                <h4>Menu philosophe</h4>
                <p class="descriptMenu">Entrée + Plat + Dessert</p>
                <p class="menuPrice">31.50€</p>
            </div>
            <hr>
            <div class="contentFormules">
                <h4>Formules</h4>
                <p class="descriptMenu">Plat + Dessert <span>ou</span> Entrée + Plat </p>
                <p class="menuPrice">28.50€</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 colNoPadding picEntree2"></div>
        <div class="col-md-6 col-sm-12 contentFood">
            <h4>Entrées</h4>
            <ul>
                <li>Foie-gras de canard aux poires, crumble pain d'épices, caramel de passion</li>
                <hr>
                <li>Fondu de camenbert, framboises, échalotes, salade de jeunes pousses, huile au curry</li>
                <hr>
                <li>Tartare de poisson, betteraves farcies au fromage frais, vinaigrette de soja</li>
                <hr>
                <li> Nougat au fromage de chèvre et pistaches, consommé de concombre, pétales de tomates confites</li>
                <hr>
                <li>Oeuf en "chaud-froid", brouillade d'oeuf au chorizo, mousseline d'oeuf, crumble de parmesan</li>
                <?php
                    /*$query = "SELECT * FROM menu WHERE cat_id = '1'";
                    $stmt = $db -> query($query);
                    $result = $stmt -> fetch_all(MYSQLI_ASSOC);
                    for ($i = 0; $i <count($result); $i++){
                        foreach($result[$i] as $key => $value) {
                            if($key == 'label'){
                                echo "<li>". $value . "</li>";
                                echo "<hr>";
                            }
                        }
                    }*/
                ?>
            </ul>
        </div>
        <div class="col-md-6 col-sm-12 colNoPadding picEntree"></div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 colNoPadding picPlat"></div>
        <div class="col-md-6 col-sm-12 contentFood">
            <h4>Plats</h4>
            <div class="wrap">
                <ul>
                    <li>Nems de boudin noir aux pommes, sauce légèrement pimentée</li>
                    <hr>
                    <li>Parmentier de légumes, lentilles, fèves, céleri, chèvre frais, concassé de tomates</li>
                    <hr>
                    <li>Magret de canard, porto, beure d'amandes, purée d'oignons à la verveine</li>
                    <hr>
                    <li>Dos de cabillaud, crème de haricot coco, marmelade de chorizo</li>
                    <hr>
                    <li>Côtes de porcelet juste grillée, sauce massala, lait de coco, curry rouge, gingembre et citronnelle</li>
                    <?php
                        /*$query = "SELECT * FROM menu WHERE cat_id = '2'";
                        $stmt = $db -> query($query);
                        $result = $stmt -> fetch_all(MYSQLI_ASSOC);
                        for ($i = 0; $i <count($result); $i++){
                            foreach($result[$i] as $key => $value) {
                                if($key == 'label'){
                                    echo "<li>". $value . "</li>";
                                    echo "<hr>";
                                }
                            }
                        }*/
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12 colNoPadding picDessert2"></div>
        <div class="col-md-6 col-sm-12 contentFood">
            <h4>Desserts</h4>
            <div class="wrap">
                <ul>
                    <li>Poire pochée, sauce chocolat au thé earl grey, fondant au café léger</li>
                    <hr>
                    <li>Cheesecake vanille et spéculos, gel de clémentines, éclats de sablé aux amandes, crème glacé au lait d'amandes</li>
                    <hr>
                    <li>Autour du citron, mousse au citron jaune, gel de citron vert, moelleux au citron yuzu, glace au yaourt</li>
                    <hr>
                    <li>Soupe d'ananas au gingembre et vanille bourbon, crémeux à la châtaigne</li>
                    <hr>
                    <li>Café gourmand, assortiment de 3 minis dessert<br><span>(Supplément de 3.00€ pour le menu)</span></li>
                    <?php
                        /*$query = "SELECT * FROM menu WHERE cat_id = '3'";
                        $stmt = $db -> query($query);
                        $result = $stmt -> fetch_all(MYSQLI_ASSOC);
                        for ($i = 0; $i <count($result); $i++){
                            foreach($result[$i] as $key => $value) {
                                if($key == 'label'){
                                    echo "<li>". $value . "</li>";
                                    echo "<hr>";
                                }
                            }
                        }*/
                    ?>
            </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 colNoPadding picDessert"></div>
    </div>
</main>
<?php
require 'footer.html';
?>
</body>
</html>