<?php

for ($i = 0; $i <= 50; $i++) {
    $score = rand(1, 100);

    echo "<h1>$score</h1>";
    switch ($score) {
        case $score < 50;
            echo "<h2>Never sing again, ever!</h2>";
            break;
        case $score > 50 || $score > 79;
            echo "<h2>Practice more!</h2>";
            break;
        case $score > 80 || $score < 94;
            echo "<h2>You're getting better!</h2>";
            break;
        case $score > 95 || $score < 100;
            echo "<h2>What an excellent singer!</h2>";
            break;
    }
}

?>