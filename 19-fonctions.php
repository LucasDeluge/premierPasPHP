<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 11:07
 */

function direBonjour($nom, $prenom)
{
    echo 'Bonjour $prenom $nom';
    echo '<br>Bonjour ' . $prenom . ' ' . $nom;
    echo "<br>Bonjour  $prenom $nom";
    echo "<br>Bonjour " . $prenom . " " . $nom;
}

direBonjour('Lupine', 'Arthur');