<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!--Responsive meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Responsive meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>IsoBat</title>
</head>
<body style="background-image:url('img/img12.jpg');background-size: cover;" class="animated tada">

<!--Menu de navigation-->
<nav class="navbar navbar-expand-sm navbar-dark navbar-fixed">
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <h1><span><i class="fa fa-building"></i></span> Bat-Help <span><i class="fa fa-building"></i></span></h1>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="button1" id="inscription" href="php/inscription.php"><span><i class="fa fa-edit"></i></span>Inscription</a>
            </li>
            <li class="nav-item">
                <a class="button2" id="connection" href="php/connection.php"><span><i class="fa fa-book"></i></span>Connection</a>
            </li>
            <li class="nav-item">
                <a class="button3" id="Actions" href="php/action.php"><span><i class="fa fa-cart-arrow-down"></i></span>Actions</a>
            </li>
            <li class="nav-item">
                <a class="button5" id="dashboard" href="php/dashboard.php"><span><i class="fa fa-check-square"></i></span>Recapitulatifs</a>
            </li>
        </ul>
        <a href="index.php" class="button4"><span><i class="fa fa-home"></i></span>Accueil</a>
    </div>
</nav>


<!-- Carousel -->
<div id="my-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
        <li data-target="#my-carousel" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/img10.jpg" alt="">

            <div class="carousel-caption d-none d-md-block">
                <h3 style="background: rgba(0,0,0,.6);">Vous cherchez un terrain en construction ou non pour y vivre ?</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/search4.jpg" alt="">

            <div class="carousel-caption d-none d-md-block">
                <h3 style="background: rgba(0,0,0,.6);">Vous ne savez pas ou allez ?</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/img16.jpg" alt="">

            <div class="carousel-caption d-none d-md-block">
                <h3 style="color: #FFA958;background: rgba(0,0,0,.6);">Vous avez des projets de renovation ?</h3>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="img/img15.jpg" alt="">

            <div class="carousel-caption d-none d-md-block">
                <h3 style="color: #FFA958;background: rgba(0,0,0,.6);">Dans ce cas, vous avez trouvez ce qu'il vous faut !</h3>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    <!--Services -->

<h2 style="background: rgba(0,0,0,.5);"><span><i class="fa fa-arrow-circle-down"></i>Nos Services<i class="fa fa-arrow-circle-down"></i></span></h2>

<div class="container" id="container">
        <div class="row">
            <div class="col-md-4">
<!--                <button class="btn btn-success">Plus d'infos</button>-->
                <p class="p" id="p1">Localisation des maisons en vente ou en construction</p>
            </div>
            <div class="col-md-4">
                    <p class="p" id="p2">Solution de renovation</p>
            </div>
            <div class="col-md-4">
                <p class="p" id="p3">Nous vous offrons des plans d'architecture faits par des professionnels du domaine!</p>
            </div>
        </div>
    </div>

    <!-- Aide -->
    <h4 style="color: #ffffff;;font-size: 30px;font-weight: bold;background: rgba(0,0,0,.5);"><span><i class=" fa fa-arrow-circle-up"></i>Pour profiter de nos servives inscrivez-vous inscrire en cliquant sur le boutton inscription en haut de la page<i
                class=" fa fa-arrow-circle-up"></i></span></h4>
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
                <h5 class="text-uppercase">Bat<small>H</small>elp</h5>
                <p>Nous vous accompagnerons dans toutes vos demarches !</p></div>
            <hr class="clearfix w-100 d-md-none pb-3">
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">Liens</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Inscription</a>
                    </li>
                    <li>
                        <a href="#">Connection</a>
                    </li>
                    <li>
                        <a href="#">Actions</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 mb-md-0 mb-3">
                <h5 class="text-uppercase">Contacts</h5>
                <ul class="list-unstyled">
                    <li>
                        <p>9849849984</p>
                    </li>
                    <li>
                        <p>5894984964</p>
                    </li>
                    <li>
                        <p>98984949</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center py-3">2018 Copyright : isoNaN@2.19</div>
</footer>

<!-- script js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/typed.js"></script>
    <script src="js/main.js"></script>
</div>
</body>

</html>