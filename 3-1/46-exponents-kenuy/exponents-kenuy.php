<?php
// part 1
$digits = array(3, 12, 30);
$new_arr = array();
function exponential($arr)
{
    foreach ($arr as $arr1) {
        $new_arr[] = $arr1 ** 3;
    }
    return $new_arr;
}

$result = exponential($digits);
var_dump($result);

/* expected output:
array (size=3)
0 => int 27
1 => int 1728
2 => int 27000
*/

// part 2

function exponential1($arr, $expo)
{
    foreach ($arr as $arr1) {
        $new_arr[] = $arr1 ** $expo;
    }
    return $new_arr;
}

$digits = array(8, 11, 4);
$result = exponential1($digits, 4);
var_dump($result);
/* this should dump which contains [4096, 14641,  256]. */

?>