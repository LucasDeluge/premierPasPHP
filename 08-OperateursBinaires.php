<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 12/01/2016
 * Time: 13:49
 */

$a=10;
$b=13;
$c=2;
echo "$a & $b = ".($a&$b); //ET
echo '<br>';
echo "$a | $b = ".($a|$b); // OU
echo '<br>';
echo "$a ^ $b = ".($a ^ $b); // XOR
echo '<br>';
echo "~$a = ".(~$a); // NON
echo '<br>';
echo "$a << $c = ".($a << $c); // Décalage à gauche
echo '<br>';
echo "$a >> $c = ".($a >> $c); // Décalage à droite