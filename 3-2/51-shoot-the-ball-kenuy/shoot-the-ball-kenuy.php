<?php

$count_success = 0;
$count_fail = 0;

for ($i = 1; $i <= 1000; $i++) {
    $tries = rand() & 1;
    if ($tries == 1) {
        $count_success += 1;
        echo "Shooting the ball.... Success! ... Got '$count_success'x success and '$count_fail'x epic fail(s) so far <br/>";
    } else {
        $count_fail += 1;
        echo "Shooting the ball.... Success! ... Got '$count_success'x success and '$count_fail'x epic fail(s) so far <br/>";
    }
}

?>