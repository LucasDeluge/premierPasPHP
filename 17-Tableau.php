<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 10:20
 */

$maTable = array (1 => "Toto", 5 => 10, 3 => "Dernier");

foreach ($maTable as $element)
{
    echo "$element<br>";
}
echo '<br><br>';
echo $maTable[3];
echo '<br><br>';
echo 'il ya a '.count($maTable).'elements dans ma table';