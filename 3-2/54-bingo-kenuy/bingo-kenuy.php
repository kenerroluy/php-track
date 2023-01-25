<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
        }

        table {
            margin: 0px auto;
            position: relative;
            top: 300px
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
            width: 50px;
            height: 50px;
            font-size: 20px;
            text-align: center;
            background-color: whitesmoke;
        }

        .color_red {
            color: red;
        }

        .color_blue {
            color: blue;
        }
    </style>

</head>

<body>
    <?php
    $bingo = "BINGO";
    $length = 10;
    $count = 1;
    echo "<table>";
    // table head
    echo "<tr>";
    for ($i = 0; $i < strlen($bingo); $i++) {
        echo "<th>$bingo[$i]</th>";
    }
    echo "</tr>";
    // table data
    for ($i = 1; $i < strlen($bingo) + 1; $i++) {
        if ($i % 2 == 0) {
            $font_color = "color_red";
        } else {
            $font_color = "color_blue";
        }

        echo "<tr>";
        for ($j = 1; $j <= $length; $j++) {
            $j += $count;
            echo "<td class='$font_color'> $j </td>";
        }
        $length += 5;
        $count++;
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>