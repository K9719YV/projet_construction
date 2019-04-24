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
            font-size: 40px;
            color: #000;
            margin: 0 80px 0 0;
            text-transform: uppercase;
        }
        h2
        {
            text-align: center;
            font-size: 20px;
            color: #FFF;
            margin: 0 80px 0 0;

        }
        h3
        {
            text-align: center;
            font-size: 50px;
            text-transform: uppercase;
            color: #000;
            margin-bottom: 70px;
        }
        tr td
        {
            font-size: 25px;
            color: antiquewhite;
            font-weight: bold;
            background: rgba(0,0,0,.3);

        }
        tr th
        {
            color: #FFF;
            font-weight: bold;
            background: rgba(0,0,0,.6);
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
        .page-footer
        {
            background: #0B0B0B;
        }
        .table
        {
            margin-bottom: 150px;
        }
        .font
        {
            background-image: url('../img/img7.jpg');
            background-size: cover;

        }
    </style>
<title></title>
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
</body>
</html>