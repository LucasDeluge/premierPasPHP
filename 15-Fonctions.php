<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 09:25
 */

$nom = "Toto";

echo "\$nom = $nom<br>";

$nom = 'tata';

changeName($nom);

echo "de retour \$nom = $nom<br>";


function changeName (&$nom)
{
    $nom .= " Le Chien";
    echo "dans la fonction, \$nom = $nom<br>";
}

$nom = 'tata';
