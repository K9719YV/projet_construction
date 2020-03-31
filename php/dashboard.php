<?php
    require 'database.php';
    $request = $connection->query("SELECT client.id,client.nom,client.prenom,client.residence,action.commune,action.ville,action.plan,action.message,action.renovation
                                FROM client
                                LEFT JOIN action
                                ON client.id = action.id");
    //$result = $request->execute(array($_POST['id']));
    //var_dump($result);
    $tab = $request->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($tab);

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

<body class="font">
<!--Menu de navigation-->
<nav class="navbar navbar-expand-sm navbar-dark navbar-fixed">
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <h2><span><i class="fa fa-building"></i></span> Bat-Help <span><i class="fa fa-building"></i></span></h2>
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
<h1 style="text-align: center">Recapitulatifs</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenoms</th>
        <th scope="col">Residence</th>
        <th scope="col">Commune de construction</th>
        <th scope="col">Ville de construction</th>
        <th scope="col">Plan architectes</th>
        <th scope="col">Materiels</th>
        <th scope="col">Renovation</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($tab as $keys => $value): ?>
    <tr>
        <?php foreach($value as $tab_keys => $tab_value): ?>
            <?php if($tab_keys == 'id' && $value == 'id') {   ?>
                <th scope="row"><?= $tab_value ?></th>
        <?php } else { ?>
        <td><?= $tab_value ?></td>
        <?php } ?>
        <?php endforeach ?>
    </tr>
    <?php endforeach ?>
    </tbody>
</table>

<!-- Message de remerciement -->
<h3 style="text-align:center;">Nous vous contacterons dans les brefs delais, Merci pour votre confiance !</h3>


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
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/typed.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>