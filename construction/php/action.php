<?php
session_start();
require 'database.php';

if(isset($_GET['id']) && $_GET['id'] > 0 )

{


$request = $connection->prepare("SELECT * FROM `client` WHERE id = ?");
$result = $request->execute(array($_GET['id']));
$tab = $request->fetch();
    //var_dump($tab);



    if(!empty($_POST) && isset($_POST))
    {
        if($_POST['commune'] == null || $_POST['ville'] == null || $_POST['plan'] == null || $_POST['renovation'] == null)
        {
            $err = '<h2 style="color: red;background: rgba(0,0,0,.5);">NE LAISSER PAS CES CHAMPS VIDES</h2>';
        }
        else
        {
            $request = $connection->prepare("INSERT INTO `action`(commune,ville,plan,message,renovation) VALUES (?,?,?,?,?)");
            $result = $request->execute(array($_POST['commune'],$_POST['ville'],$_POST['plan'],$_POST['message'],$_POST['renovation']));
            header('Location:dashboard.php');
        }
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!--Responsive meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <style>
        body
        {
            background-size: cover;
            background: url("../img/img8.jpg") no-repeat center;
        }
        a
        {
            text-decoration: none;
            color: #FFF;
        }
        nav
        {
            background: -webkit-linear-gradient(left,#FFA958,#733104,#FFA958);
            background: -moz-linear-gradient(left,#FFA958,#733104,#FFA958);
            background: -o-linear-gradient(left,#FFA958,#733104,#FFA958);
        }
        h1
        {
            text-align: center;
            font-size: 20px;
            color: #FFF;
            margin: 0 80px 0 0;
        }
        h2
        {
            text-align: center;
            margin-top: 30px;
            color:#FFF;
            font-size: 40px;
            font-style: italic;
        }
        .button1
        {
            font-style: italic;
            font-size: 15px;
            color: #FFF;
            border: 3px solid #FFA958;
            padding: 10px;
            border-radius: 6px;
            background: transparent;
            margin-right: 7px;
        }
        .button2
        {
            margin-right: 7px;
            font-style: italic;
            font-size: 15px;
            color: #FFF;
            border: 3px solid #FFA958;
            padding: 10px;
            border-radius: 6px;
            background: transparent;
        }
        .button3
        {
            list-style: none;
            text-decoration: none;
            font-style: italic;
            font-size: 15px;
            color: #FFF;
            border: 3px solid #FFA958;
            padding: 10px;
            border-radius: 6px;
            background: transparent;
        }
        .button4
        {
            font-style: italic;
            font-size: 15px;
            color: #FFF;
            border: 3px solid #FFA958;
            padding: 10px;
            border-radius: 6px;
            background: transparent;
            margin-right: 7px;
        }
        .button1:hover
        {
            list-style: none;
            text-decoration: none;
            font-style: italic;
            font-size: 15px;
            background: transparent;
            color: #FFA958;
            font-weight: bold;
            border: 3px solid whitesmoke;
        }
        .button2:hover
        {
            list-style: none;
            text-decoration: none;
            font-style: italic;
            font-size: 15px;
            background: transparent;
            color: #FFA958;
            font-weight: bold;
            border: 3px solid whitesmoke;
        }
        .button3:hover
        {
            list-style: none;
            text-decoration: none;
            font-style: italic;
            font-size: 15px;
            background: transparent;
            color: #FFA958;
            font-weight: bold;
            border: 3px solid whitesmoke;
        }
        .button4:hover
        {
            list-style: none;
            text-decoration: none;
            font-style: italic;
            font-size: 15px;
            background: transparent;
            color: #FFA958;
            font-weight: bold;
            border: 3px solid whitesmoke;
        }
        .button5
        {
            font-style: italic;
            font-size: 15px;
            color: #FFF;
            border: 3px solid #FFA958;
            padding: 10px;
            border-radius: 6px;
            background: transparent;
            margin-left: 7px;
        }
        .button5:hover
        {
            list-style: none;
            text-decoration: none;
            font-style: italic;
            font-size: 15px;
            background: transparent;
            color: #FFA958;
            font-weight: bold;
            border: 3px solid whitesmoke;
        }
        .formulaire
        {
            margin-top: 100px;
            margin-bottom: 60px;
            border: 1px solid #FFA958 ;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            padding: 10px;
            background: rgba(0,0,0,.5);
            box-shadow: 20px 20px 20px black;
        }

        .centre
        {
            margin: 0 auto;
        }
        .page-footer
        {
            background: #0B0B0B;
        }
        .center
        {
            margin-left:50px;
        }
    </style>
    <title>Actions</title>
</head>
<body>
<!--Menu de navigation-->
<nav class="navbar navbar-expand-sm navbar-dark navbar-fixed">
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <h1><span><i class="fa fa-building"></i></span> Bat-Help <span><i class="fa fa-building"></i></span></h1>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="button1" id="inscription" href="inscription.php"><span><i class="fa fa-edit"></i></span>Inscription</a>
            </li>
            <li class="nav-item">
                <a class="button2" id="connection" href="connection.php"><span><i class="fa fa-book"></i></span>Connection</a>
            </li>
            <li class="nav-item">
                <a class="button3" id="Actions" href="action.php"><span><i class="fa fa-cart-arrow-down"></i></span>Actions</a>
            </li>
            <li class="nav-item">
                <a class="button5" id="dashboard" href="dashboard.php"><span><i class="fa fa-check-square"></i></span>Recapitulatifs</a>
            </li>

        </ul>
        <a href="../index.php" class="button4"><span><i class="fa fa-home"></i></span>Accueil</a>
    </div>
</nav>
<div class="center animated fadeInLeft">
    <h1 style="background: rgba(255,169,36,.4);font-size: 50px;color:#FFF;font-weight: bold;">Bienvenu(e) <?= $tab['nom'] . "      " . $tab['prenom'] ?></h1>
</div>
<!-- Formulaire de renseignement -->
<div class="corps">
    <div class="container">
        <div class="col-md-8 centre">

            <form id="form" action="" method="post" class="formulaire animated zoomInUp">
                <?php
                if(isset($err))
                {
                    echo $err;
                }
                ?>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="commune"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" type="text" name="commune" placeholder="Dans quelle commune voulez-vous construire ? ..."
                           aria-label="Recipient'scommune" aria-describedby="commune">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="ville"><i class="fa fa-user-plus"></i></span>
                    </div>
                    <input class="form-control" type="text" name="ville" placeholder="Precisez la ville..."
                           aria-label="Recipient'sville" aria-describedby="ville">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="plan"><i class="fa fa-home"></i></span>
                    </div>
                    <input class="form-control" type="text" name="plan" placeholder="Voulez-vous des plans architectes ? (Oui/Non)..."
                           aria-label="Recipient'sresidence" aria-describedby="plan">
                </div>
                <div class="input-group mt-3">
                    <label for="message" style="color: #FFF">Si avez besoin de materiels,listez les ici ! </label>
                    <textarea name="message" id="message" class="form-control" rows="3"></textarea>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="renovation"><i class="fa fa-home"></i></span>
                    </div>
                    <input class="form-control" type="text" name="renovation" placeholder="Voulez-vous renover votre maison ? (Oui/Non)..."
                           aria-label="Recipient'srenovation" aria-describedby="renonation">
                </div>
                <input type="submit" class="btn btn-success float-center submit_btn btn-block btn-lg" value="Faire sa demande...">
            </form>
        </div>
    </div>
</div>

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
                <h5 class="text-uppercase">Contact</h5>
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
</body>
</html>
<?php
}
else
{   echo '<div class="col-md-6">';
    echo '<h1 style="text-align: center;font-size: 80px;">ERROR <span style="color: red">404</span></h1>';
    echo '<h3 style="text-align: center;">Vous ne pouvez effectuer aucune action tant que vous n\'etes pas inscrit,veuillez vous <a href="inscription.php">inscrire</a>.</h3>';
    echo '<h3 style="text-align: center">Si vous avez deja un compte <a href="connection.php">connectez</a> vous.</h3>';
    echo '</div>';
}
?>