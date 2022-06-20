<?php
// Permet l'affichage des erreurs
ini_set('display_errors', 'On');
error_reporting(E_ALL);
$dsn = 'mysql:dbname=test;host=localhost;port=3306;charset=utf8';

$user = 'test';
$pwd = 'NQIj/djR3[X_o(_-';

// Crée la connexion à la BdD
$pdo = new PDO($dsn, $user, $pwd, [
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Permet d'activer le mode verbeux pour les erreurs
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Lire les enregistrements comme un tableau
]);

// Requête simple sans paramètres
// $sql = 'select * from article';

// foreach ($pdo->query($sql) as $row){
//     echo "<p>
//     id : {$row['id']} <br>
//     nom : {$row['nom']} <br>
//     poids : {$row['poids']} <br>
//     prix : {$row['prix']} <br>
//     </p>";
// }


// // Requête préparée avec paramètres
// $sql = 'select * from article where nom = :nom';

// $stmt = $pdo->prepare($sql); // Je prépare une requête paramétrée

// // J'associe les valeurs à mes paramètres
// $stmt->bindValue('nom', 'Article 1', PDO::PARAM_STR);

// // J'exécute la requête (/!\ Je ne récupère pas les données ici)
// // Je regarde si la requête a créée une erreur
// $rst = $stmt->execute();

// J'affiche mon résultat (Si j'en ai un)
// if ($rst){
//     // Je récupère TOUTES les lignes & je les range dans un tableau ( cf : PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC )
//     $data = $stmt->fetchAll();
//     // Je lis le résultat
//     foreach ($data as $article){
//         echo "<p>
//         id : {$article['id']} <br>
//         nom : {$article['nom']} <br>
//         poids : {$article['poids']} <br>
//         prix : {$article['prix']} <br>
//         </p>";
//     }
// }

// Je prépare une requête
// $stmt = $pdo->prepare('select * from article');
// Je l'exécute
// $res = $stmt->execute();

// Tant qu'il y a une nouvelle ligne d'article à afficher
// while($row = $stmt->fetch()) {
//     Je l'affiche
//     var_dump($row);
// }

// echo 'ok';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test formulaire recherche</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" placeholder="Nom de l'article recherché" required>
            <br>
            <button type="submit">Rechercher</button>
        </div>
    </form>
</body>
</html>

<?php
$nom = $_POST['nom'] ?? false;

if ($nom !== false && $nom !== '') // Mon formulaire est posté ?
{
// Je nettoie la variable
// $nom = filter_var($nom, FILTER_SANITIZE_ENCODED);
$nom = htmlspecialchars($nom);

// Requête préparée avec paramètres
$sql = "select * from article where nom like :nom";

$stmt = $pdo->prepare($sql); // Je prépare une requête paramétrée

// J'associe les valeurs à mes paramètres
$stmt->bindValue('nom', "%$nom%", PDO::PARAM_STR);

// J'exécute la requête (/!\ Je ne récupère pas les données ici)
// Je regarde si la requête a créée une erreur
$rst = $stmt->execute();

// J'affiche mon résultat (Si j'en ai un)
if ($rst){
    var_dump($stmt->debugDumpParams());
    // Je récupère TOUTES les lignes & je les range dans un tableau ( cf : PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC )
    $data = $stmt->fetchAll();
    // Je lis le résultat
    foreach ($data as $article) {
        echo "<p>
        id : {$article['id']} <br>
        nom : {$article['nom']} <br>
        poids : {$article['poids']} <br>
        prix : {$article['prix']} <br>
        </p>";
    }
}
}