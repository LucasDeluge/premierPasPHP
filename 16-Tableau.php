<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 10:11
 */

//$maTable = array (23, 18, 5.2, '55',"Dupont");

$maTable = [
    23,
    18,
    5.2,
    false,
    '55',
    "Dupont"
];

echo count($maTable). ' éléments dans le tableau';
echo'<br><br>';

for ($i = 0 ; $i < count($maTable) ; $i++)
{
    echo $maTable[$i].'<br>';
}

echo '<br><br>';
foreach ($maTable as $cle => $element)
{
    echo "item n° $cle = $element<br>";
}

$tabMulti = [
    [1,2,3,4,5,6,7,8,9],
    $maTable
];

foreach ($tabMulti as $tab){
    foreach ($tab as $value){
        echo $value;
    }

}