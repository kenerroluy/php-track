<?php
    $bingo = "BINGO";
    $row_skip = 2;
    $cell = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo Revisited Part 2</title><?php
    $bingo = "BINGO";
    $row_skip = 2;
    $cell = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo Revisited Part 2</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            border: 0;
        }

        .wrapper {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }

        h1 {
            display: inline-block;
            
        }

        table {
            margin: 0px auto;
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
    <div class="wrapper">
        <h1><?= BINGO ?></h1>
        <table>
<?php for ($i = 0; $i < strlen($bingo); $i++) { ?>
            <tr>
<?php for ($j = 0; $j < strlen($bingo); $j++) {
                $cell += $row_skip ?>
                <td class=<?= (($i+$j) % 2 == 1)?"color_red":"color_blue" ?> > <?= $cell ?> </td>
<?php }
        $cell = 0;
        $row_skip++; ?>
            </tr>
<?php } ?>
        </table>
    </div>
</body>

</html>
        * {
            margin: 0;
            padding: 0;
            border: 0;
        }

        .wrapper {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }

        h1 {
            display: inline-block;
            
        }

        table {
            margin: 0px auto;
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
    <div class="wrapper">
        <h1><?= BINGO ?></h1>
        <table>
<?php for ($i = 0; $i < strlen($bingo); $i++) { ?>
            <tr>
<?php for ($j = 0; $j < strlen($bingo); $j++) {
        $cell += $row_skip ?>
        <td class=<?= (($i+$j) % 2 == 1)?"color_red":"color_blue" ?> > <?= $cell ?> </td>
<?php }
        $cell = 0;
        $row_skip++; ?>
            </tr>
<?php } ?>
        </table>
    </div>
</body>

</html>