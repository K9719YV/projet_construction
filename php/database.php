<?php
    $serveur = "localhost";
    $dbname = 'construction';
    $login = "root";
    $password = "";

try
{
    $connection = new PDO("mysql:host=$serveur;dbname=$dbname",$login,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    // echo 'Connected';
}
catch(PDOException $e)
{
    die('Impossible de se connecter a la base de donnée:'.$e->getMessage());
}
