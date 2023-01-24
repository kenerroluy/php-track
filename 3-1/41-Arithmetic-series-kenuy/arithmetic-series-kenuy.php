<?php 
    $numbers = array(2,5,8,11,14);

    $total = 0;

    for($i = 0; $i < count($numbers); $i++) {
        $total += $numbers[$i];
        echo $total. "<br/>";
    }
?>