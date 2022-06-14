<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 12/01/2016
 * Time: 12:51
 */
$maVariable = "1";
$maVariable = $maVariable * 1.1;

echo $maVariable;
echo ' est un '.gettype($maVariable);

$nom = 'toto';
echo "<br>$nom est de type ".gettype($nom);

