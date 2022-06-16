<?php
// Permet l'affichage des erreurs
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$dsn = 'mysql:dbname=test;host=localhost;port=3306;charset=utf8';

$user = 'test';
$pwd = 'NQIj/djR3[X_o(_-';

// Crée la connexion à la BdD
$pdo = new PDO($dsn, $user, $pwd);
// Je prépare une requête
$stmt = $pdo->prepare('select * from article');
// Je l'exécute
$res = $stmt->execute();

// Tant qu'il y a une nouvelle ligne d'article à afficher
while($row = $stmt->fetch()) {
    // Je l'affiche
    var_dump($row);
}

echo 'ok';