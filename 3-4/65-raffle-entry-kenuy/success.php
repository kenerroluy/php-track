<?php
session_start();
require("new-connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        .container {
            margin: 0 auto;
            width: 500px;
            text-align: center;
        }

        table {
            margin: 0 auto;
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Success! Contact number
            <?= $_SESSION['number']; ?> is now added.
        </h1>
    </div>
    <table>
        <tr>
            <th>Contact Number</th>
            <th>Date Inserted</th>
        </tr>
        <tr>
            <?php foreach ($result as $info) { ?>
                <td>
                    <?= $info['phone_number'] ?>
                </td>
                <td>
                    <?= $info['updated_at'] ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>