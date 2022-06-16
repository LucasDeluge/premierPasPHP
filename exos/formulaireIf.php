<?php
// Détermine si une variable est déclarée et est différente de null et de ""
// if(isset($_POST['nombre']) && $_POST['nombre'] !== ""){
//     $nombre = intval($_POST['nombre']);
//     if($nombre>0){
//         echo "Positif";
//     } elseif ( $nombre === 0){
//         echo "vaut 0";
//     } else {
//         echo "Négatif";
//     }
    
 // var_dump($_POST);
// }
// if(isset($_POST['nombre']) && $_POST['nombre'] !== ""){
//     $nombre = intval($_POST['nombre']);
//     if( $nombre >= 6 && $nombre <= 7){
//         echo "Poussin";
//     } elseif ( $nombre >= 8 && $nombre <= 9){
//         echo "Pupille";
//     } elseif ( $nombre >= 10 && $nombre <= 11){
//         echo "Minime";
//     } elseif ($nombre > 12){
//         echo "Cadet";
//     } elseif($nombre < 6) {
//         echo "Enfant";
//     }
// }

// if(isset($_POST['nombre']) && $_POST['nombre'] !== ""){
//     $nombre = intval($_POST['nombre']);
//     if( $nombre <= 10){
//         $nbr1 = $nombre * 0.1;
//         echo "La facture est de : $nbr1";
//     } elseif ( $nombre > 10 && $nombre <= 30){
//         $nbr2 = (($nombre-10)*0.09) + 1;
//         echo "La facture est de : $nbr2";
//     } elseif ( $nombre > 30){
//         $nbr3 = (($nombre-30) * 0.08) + 2.8;
//         echo "La facture est de : $nbr3";
// }
// }

if(isset($_POST['nombre']) && $_POST['nombre'] !== ""){
    $nombre = intval($_POST['nombre']);
    $sexe = ($_POST['sexe']);
    if( $nombre > 20 && $sexe === "homme"){
        echo "Vous payez l'impôt";
    } elseif ( $nombre >= 18 && $nombre <= 35 && $sexe === "femme"){
        echo "Vous payez l'impôt";
    } else {
        echo "Vous ne payez pas l'impôt";
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire If</title>
</head>
<body>
<form action="" method="post">
 <label for="nombre">Nombre : 
    <input type="number" name="nombre" placeholder="Donnez un nombre" required>
 </label>
<button type="submit">Vérifier</button>
<br>
 <label for="sexe">Sexe : 
    <select type="text" name="sexe" placeholder="Indiquez votre sexe" required>
        <option value="homme">Homme</option>
        <option value="femme">Femme</option>
 </label>
<button type="submit">Vérifier</button>
</form>
</body>
</html>