<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="28-methodePost.php" method="post">
        Veuillez indiquer vos Noms et Prénoms <br>
        Prénom: <input type="text" name="prenom"><br>
        Nom: <input type="text" name="nom"><br>
        <select name="couleur">
            <option selected>Choisir une couleur</option>
            <option value="bleue">bleue</option>
            <option value="rouge">rouge</option>
            <option value="vert">vert</option>
            <option value="jaune">jaune</option>
        </select>
        <br>
        France : <input type="checkbox" name="pays[]" value="france" />
        Belgique : <input type="checkbox" name="pays[]" value="belgique" />
        Colombie : <input type="checkbox" name="pays[]" value="colombie" />
        Philippines : <input type="checkbox" name="pays[]" value="philippines" />
        <br>
        <input type="submit">
    </form>
</body>
</html>