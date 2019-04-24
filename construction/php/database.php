<?php
    $serveur = "localhost";
    $login = "root";
    $password = "";

try
{
    $connection = new PDO("mysql:host=$serveur;dbname=construction",$login,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    //echo 'Connected';
}
catch(PDOException $e)
{
    die('Impossible de se connecter a la base de donnée:'.$e->getMessage());
}
