<?php
$binary = array(1, 1, 0, 1, 1, 0, 1);
$count_zero = 0;
$count_one = 0;

function get_count($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == 0) {
            $count_zero += 1;
        } else {
            $count_one += 1;
        }
    }
    $new_array = array($count_zero, $count_one);
    return $new_array;

}

$output = get_count($binary);
var_dump($output);

?>