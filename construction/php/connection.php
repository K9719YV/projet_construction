<?php
session_start();
require 'database.php';
if(!empty($_POST) && isset($_POST))
{
        $email = Check($_POST['email']);
        $password = Check($_POST['password']);
        $password2 = Check($_POST['password2']);


        if ($email == '' || $password == '')
        {
            $err = '<h2 style="background:rgba(0,0,0,.6);color: red;">MERCI DE BIEN REMPLIR CES TROIS CHAMPS </h2>';

            if($password != $password2)
            {
                $err2 = '<h2>MOTS DE PASSE DIFFERENTS ! </h2>';
            }
        }
        else
        {
            //$password = password_hash($password,PASSWORD_DEFAULT);
            $request = $connection->prepare("SELECT * FROM client WHERE email = ? AND password = ?");
            $result = $request->execute(array($email, $password));
            $tab = $request->fetch();
            $_SESSION['id'] = $tab['id'];
            //var_dump($tab);
            //$_SESSION = $tab;
            header("Location:action.php?id=".$_SESSION['id']);
        }
}

function Check($var)
{
    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);
    return $var;
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
            margin-bottom: 198px;
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
        body
        {
            background-image: url("../img/img11.jpg");
            background-size: cover;
        }
        .page-footer
        {
            background: #0B0B0B;
        }

    </style>
    <title>Connection</title>
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

<!-- Formulaire de connection-->

<div class="corps">
    <div class="container">
        <div class="col-md-6 centre">

            <form action="" method="post" class="formulaire animated fadeInUp">
                <?php
                if(isset($err))
                {
                    echo $err;

                    if (isset($err2))
                    {
                        echo $err2;
                    }
                }
                ?>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input class="form-control" type="email" name="email" placeholder="Ecrivez votre email..."
                           aria-label="Recipient'semail" aria-describedby="email">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="password"><i class="fa fa-unlock-alt"></i></span>
                    </div>
                    <input class="form-control" type="password" name="password" placeholder="Ecrivez votre password..."
                           aria-label="Recipient'spassword" aria-describedby="password">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="password2"><i class="fa fa-unlock-alt"></i></span>
                    </div>
                    <input class="form-control" type="password" name="password2" placeholder="Confirmer le password..."
                           aria-label="Recipient'spassword2" aria-describedby="password2">
                </div>

                <button type="submit" class="btn btn-success float-center submit_btn btn-block btn-lg">Se Connecter</button>
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
</body>
</html>
