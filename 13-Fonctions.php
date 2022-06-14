<?php
/**
 * Created by PhpStorm.
 * User: François
 * Date: 13/01/2016
 * Time: 09:12
 */

echo additionne(1,5,6,9,8,7,4);
echo '<br>';
echo additionne(1,2);
echo '<br>';
echo additionne(1,5,8);
echo '<br>';
echo additionne(1,9,8,14,7,5,8,6,9,88,54,74,5,8,4,7,8,5,6,6,4,5,8,5,4,18);

function additionne()
{
    $res = 0;
    for ($i = 0 ; $i < func_num_args(); $i++)
    {
        $res += func_get_arg($i);
    }
    return $res;
}