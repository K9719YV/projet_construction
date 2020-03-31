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
<!-- Formulaire de renseignement -->
<div class="box-form-act">
    <div class="container">
        <div class="card-form">
            <div class="center animated fadeInLeft">
                <h1>Bienvenu(e) <?= $tab['nom'] . "      " . $tab['prenom'] ?></h1>
            </div>
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
                    <input class="form-control" type="text" name="commune" placeholder="Dans quelle commune voulez-vous construire ? ..." aria-label="Recipient'scommune" aria-describedby="commune">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="ville"><i class="fa fa-user-plus"></i></span>
                    </div>
                    <input class="form-control" type="text" name="ville" placeholder="Precisez la ville..." aria-label="Recipient'sville" aria-describedby="ville">
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="plan"><i class="fa fa-home"></i></span>
                    </div>
                    <input class="form-control" type="text" name="plan" placeholder="Voulez-vous des plans architectes ? (Oui/Non)..." aria-label="Recipient'sresidence" aria-describedby="plan">
                </div>
                <div class="input-group mt-3">
                    <label for="message" style="color: #FFF">Si avez besoin de materiels,listez les ici ! </label>
                    <textarea name="message" id="message" class="form-control w-100" rows="3"></textarea>
                </div>
                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="renovation"><i class="fa fa-home"></i></span>
                    </div>
                    <input class="form-control" type="text" name="renovation" placeholder="Voulez-vous renover votre maison ? (Oui/Non)..." aria-label="Recipient'srenovation" aria-describedby="renonation">
                </div>
                <input type="submit" class="btn btn-success float-center submit_btn btn-block btn-lg mt-3" value="Faire sa demande...">
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
<?php
}
else
{   
    echo '<div class="col-md-6">';
    echo '<h3 style="text-align: center;">Vous ne pouvez effectuer aucune action tant que vous n\'etes pas inscrit,veuillez vous <a href="inscription.php">inscrire</a>.</h3>';
    echo '<h3 style="text-align: center">Si vous avez deja un compte <a href="connection.php">connectez</a> vous.</h3>';
    echo '</div>';
}
?>