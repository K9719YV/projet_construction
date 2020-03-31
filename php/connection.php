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

    <!--Responsive meta Tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>IsoBat</title>
</head>
<body>

<!--Menu de navigation-->
<nav class="navbar navbar-expand-sm fixed-top">
    <a class="navbar-brand" href="index.php">ISO-BAT</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">+</button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="inscription.php">Inscription</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="connection.php">Connexion<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="action.php">Actions<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">Dashboard<span class="sr-only">(current)</span></a>
            </li>
        </ul>
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
    <!-- script js -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/typed.js"></script>
    <script src="../js/main.js"></script>
</footer>
</body>
</html>
