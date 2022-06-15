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
if(isset($_POST['nombre']) && $_POST['nombre'] !== ""){
    $nombre = intval($_POST['nombre']);
    if( $nombre >= 6 && $nombre <= 7){
        echo "Poussin";
    } elseif ( $nombre >= 8 && $nombre <= 9){
        echo "Pupille";
    } elseif ( $nombre >= 10 && $nombre <= 11){
        echo "Minime";
    } elseif ($nombre > 12){
        echo "Cadet";
    } elseif($nombre < 6) {
        echo "Enfant";
    }
    
 // var_dump($_POST);
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
</form>
</body>
</html>