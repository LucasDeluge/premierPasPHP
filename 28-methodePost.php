<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 12/01/2016
 * Time: 13:27
 */
//echo "Nom =".$_POST['nom']." <br> ";
//echo "Prénom =". $_POST["prenom"]." <br> ";

//echo '<pre>'.var_dump($_POST['pays']).'</pre>';

//echo var_dump(get_defined_vars());

$nom = strtoupper($_POST['nom']);
$prenom = ucwords($_POST['prenom']);

$tabPrenom = explode('-', $prenom);
for ($i = 0; $i<count($tabPrenom); $i++){
    $tabPrenom[$i] = ucfirst($tabPrenom[$i]);
}
$prenom = implode('-', $tabPrenom);

echo "résultat obtenu : <br> 
Nom : $nom <br>
Prénom : $prenom <br>
couleur : {$_POST['couleur']}<br>
<ul>";


foreach ($_POST['pays'] as $pays) {
    echo "<li>$pays</li>";
}

echo "</ul>";