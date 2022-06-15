<?php
if(isset($_POST['nombre']))
 var_dump($_POST);
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
 <label for="nombre">Nombre
    <input type="number" name="nombre" placeholder="Donnez un nombre" required>
 </label>
<button type="submit">Vérifier</button>
</form>
</body>
</html>