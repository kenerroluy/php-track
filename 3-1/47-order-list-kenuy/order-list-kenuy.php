<?php

$x = array('Spaghetti', 'Pizza', 'Iced tea');
$y = array('Chocolate', 'Fries', 'Mountain Dew');

function print_orders($arr)
{
    echo "<ol>";
    for ($i = 0; $i < count($arr); $i++) {
        echo "<li>$arr[$i]</li>";
    }
    echo "</ol>";
    return $arr;
}

print_orders($x);
print_orders($y);

?>