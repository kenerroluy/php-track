<?php
echo "Part 1: <br/>";
$list1 = array(6, 1, 3, 5, 7);
function convert_to_blanks($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < $arr[$i]; $j++) {
            echo "_ ";
        }
        echo "<br>";
    }
}
$output = convert_to_blanks($list1);
echo $output;

echo "Part 2: <br/>";

$list2 = array(4, "Michael", 3, "Karen", 2, "Rogie");

function convert_to_blanks1($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if (is_string($arr[$i])) {
            echo $arr[$i][0];
            for ($j = 0; $j < strlen($arr[$i]); $j++) {
                echo "_ ";
            }
            echo "<br/>";
        } else {
            for ($k = 0; $k < $arr[$i]; $k++) {
                echo "_ ";
            }
            echo "<br/>";
        }
    }
}
$output1 = convert_to_blanks1($list2);
echo $output1;

?>