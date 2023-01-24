<?php 
    $numbers = array(13,143,88,65,120);
    $total = 0;
    $count = count($numbers);
    for($i = 0; $i < $count; $i++){
        $total += $numbers[$i];
        echo $avg = $total / $count. "<br/>";
    }
?>