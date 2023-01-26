<?php
header('Content-type: text/css');
$random1 = rand(16, 32);
$random2 = rand(32, 62);
?>
p { font-size: <?= $random1 ?>px; }
em { font-size: <?= $random2 ?>px; }