<?php
require 'database.php';
if(!empty($_POST) && isset($_POST))
{
    $nom = checkInput($_POST['nom']);
    $prenom = checkInput($_POST['prenom']);
    $tel = checkInput($_POST['tel']);
    $residence = checkInput($_POST['residence']);
    $email = checkInput($_POST['email']);
    $password = checkInput($_POST['password']);


    if ($nom == null || $prenom == null || $tel == null || $residence == null || $email == null || $password == null)
    {
        $err = '<h2 style="background:rgba(0,0,0,.6);color: red;">VEUILLEZ REMPLIR TOUT LES CHAMPS S\'IL VOUS PLAIT</h2>';
    }
    else
    {
        $request = $connection->prepare("INSERT INTO client(nom,prenom,tel,residence,email,password) VALUES(?,?,?,?,?,?)");
        $result = $request->execute(array($nom, $prenom,$tel,$residence, $email, $password));
        header('Location:connection.php');
    }

}


function checkInput($var)
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
    <title>IsoBat</title>
</head>
<body>

<!--Menu de navigation-->
<nav class="navbar navbar-expand-sm fixed-top">
    <a class="navbar-brand" href="../index.php">ISO-BAT</a>
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


<!-- Formulaire inscription -->
<div class="box-form">
    <div class="container">
        <div class="card-form">
        <h3 class="text-center">Inscription</h3>
            <form action="" method="post" class="formulaire animated rollIn">
                <?php
                if(isset($err))
                {
                    echo $err;
                }
                ?>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="nom"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control" type="text" name="nom" placeholder="Ecrivez votre nom..." aria-label="Recipient'snom" aria-describedby="nom">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="prenom"><i class="fa fa-user-plus"></i></span>
                    </div>
                    <input class="form-control" type="text" name="prenom" placeholder="Ecrivez votre prenom..." aria-label="Recipient'sprenom" aria-describedby="prenom">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="tel"><i class="fa fa-phone"></i></span>
                    </div>
                    <input class="form-control" type="text" name="tel" placeholder="Numero de telephone( Important !)..." aria-label="Recipient'stel" aria-describedby="tel">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="residence"><i class="fa fa-home"></i></span>
                    </div>
                    <input class="form-control" type="text" name="residence" placeholder="Lieu de residence..." aria-label="Recipient'sresidence" aria-describedby="residence">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email"><i class="fa fa-envelope"></i></span>
                    </div>
                    <input class="form-control" type="email" name="email" placeholder="Ecrivez votre email..." aria-label="Recipient'semail" aria-describedby="email">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="nom"><i class="fa fa-unlock-alt"></i></span>
                    </div>
                    <input class="form-control" type="password" name="password" placeholder="Ecrivez votre password..." aria-label="Recipient'spassword" aria-describedby="password">
                </div>
                <button  class="btn btn-success float-center btn-block btn-lg mt-3" data-target="#inscrit" data-toggle="modal" id="inscrit">S'inscrire</button>
            </form>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="text-uppercase">Bat<small>H</small>elp</h5>
                <p>Nous vous accompagnerons dans toutes vos demarches !</p>
            </div>
            <div class="col-md-3">
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
            <div class="col-md-3">
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
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/typed.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
