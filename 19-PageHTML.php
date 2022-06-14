<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma Page</title>

</head>
<body>
<?php

    require_once ("19-Parametres.php");
    require_once ("19-fonctions.php");

    echo '<h1>';
    direBonjour($monNom,$monPrenom);
    echo '</h1>';
?>
</body>
</html>