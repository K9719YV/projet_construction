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
<div class="main-box">
    <div class="container">
        <h1 class="text-center">Recapitulatifs</h1>
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
    </div>
    <h3 class="text-center">Nous vous contacterons dans les brefs delais, Merci pour votre confiance !</h3>
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