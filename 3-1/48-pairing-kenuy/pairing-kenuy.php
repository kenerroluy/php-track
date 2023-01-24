<?php

$cards = array(
    'Kings' => 13,
    'Queen' => 12,
    'Jack' => 11,
    'Ace' => 1,
);
function list_of_keys($arr)
{
    echo "List of keys in the array: <ul>";
    foreach ($arr as $key => $value) {
        echo "<li>$key</li>";
    }
    echo "<br/>";
    foreach ($arr as $key => $value) {
        echo "The value of $key in Pyramid Solitaire is $value<br/>";
    }
    return $arr;
}

list_of_keys($cards);

?>