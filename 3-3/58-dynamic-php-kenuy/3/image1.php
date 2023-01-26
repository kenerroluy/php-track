<?php
header('Content-type: image/jpeg');
$rand = rand(10000000,50000000);
header("Content-type: image/png");
$my_img = imagecreate( 350, 200 );

$background = imagecolorallocate( $my_img, 233, 203, 242);
$color_black = imagecolorallocate( $my_img, 0, 0, 0 );
$white = imagecolorallocate( $my_img,255, 255, 255);
imagesetthickness ( $my_img, 5 );
imagefilledrectangle($my_img, 15,15,335,185,$white);
imagerectangle($my_img, 30, 30, 320, 170, $color_black);
imagestringup($my_img, 6, 65,130, "GET YOUR", $color_black);
imagestringup($my_img, 6, 85,130, "TICKETS", $color_black);
imagestring($my_img, 5, 140, 50, "No.". $rand , $color_black);
imagestring($my_img, 5, 150, 100, "BLACK PINK", $color_black);

imagepng( $my_img );
imagedestroy( $my_img );
?>