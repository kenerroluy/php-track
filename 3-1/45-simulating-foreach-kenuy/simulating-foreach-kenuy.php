<?php
// 1.
$list = array(2, 4, 6, 8);
foreach ($list as $key => $value) {
    echo $key . " - " . $value . "<br />";
}
/* 
0 - 2
1 - 4
2 - 6
3 - 8
*/

// 2.
$list = array(2, 4, 6, 8);
foreach ($list as $value) {
    echo $value . "<br />";
}
/*
2
4
6
8 
*/

// 3.
$fruits = array("A" => "Apple", "B" => "Banana");
foreach ($fruits as $key => $value) {
    echo $key . " - " . $value . "<br />";
}
/* 
A - Apple
B - Banana
*/

// 4.
$fruits = array("A" => "Apple", "B" => "Banana");
foreach ($fruits as $key => $value) {
    echo $value . "<br />";
}
/*
Apple
Banana 
*/

// 5.
$fruits = array("A" => "Apple", "B" => "Banana");
foreach ($fruits as $key => $value) {
    echo $key . "<br />";
}
/*
A
B 
*/

// 6.
$plots = array(
    array("a1", "a2", "a3"),
    array("b1", "b2", "b3"),
    array("c1", "c2", "c3")
);
foreach ($plots as $key => $value) {
    echo "Key is {$key}<br />";
    echo "logging the value";
    var_dump($value);
}
/*
Key is 0
logging the valuearray(3) { [0]=> string(2) "a1" [1]=> string(2) "a2" [2]=> string(2) "a3" } Key is 1
logging the valuearray(3) { [0]=> string(2) "b1" [1]=> string(2) "b2" [2]=> string(2) "b3" } Key is 2
logging the valuearray(3) { [0]=> string(2) "c1" [1]=> string(2) "c2" [2]=> string(2) "c3" }
*/

// 7.
$plots = array(
    array("a1", "a2", "a3"),
    array("b1", "b2", "b3"),
    array("c1", "c2", "c3")
);
foreach ($plots as $value) {
    echo "logging the value";
    var_dump($value);
}
/*
logging the valuearray(3) { [0]=> string(2) "a1" [1]=> string(2) "a2" [2]=> string(2) "a3" } logging the valuearray(3) { [0]=> string(2) "b1" [1]=> string(2) "b2" [2]=> string(2) "b3" } logging the valuearray(3) { [0]=> string(2) "c1" [1]=> string(2) "c2" [2]=> string(2) "c3" }
*/

// 8.
$nations = array(
    array("PH" => "Philippines", "KR" => "South Korea"),
    array("PHP" => "Philippine peso", "KRW" => "South Korean won"),
    array("Manila" => "Maynilad", "Seoul" => "Seorabeol")
);
foreach ($nations as $key => $value) {
    echo "key is {$key}<br />";
    foreach ($value as $key2 => $value2) {
        echo $key2 . " - " . $value2 . "<br />";
    }
}
/*
key is 0
PH - Philippines
KR - South Korea
key is 1
PHP - Philippine peso
KRW - South Korean won
key is 2
Manila - Maynilad
Seoul - Seorabeol
*/

// 9.
$nations = array(
    array("PH" => "Philippines", "KR" => "South Korea"),
    array("PHP" => "Philippine peso", "KRW" => "South Korean won"),
    array("Manila" => "Maynilad", "Seoul" => "Seorabeol")
);
foreach ($nations as $nation) {
    foreach ($nation as $key => $value) {
        echo $key . " - " . $value . "<br />";
    }
}
/*
PH - Philippines
KR - South Korea
PHP - Philippine peso
KRW - South Korean won
Manila - Maynilad
Seoul - Seorabeol
*/
?>