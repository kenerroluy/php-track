<?php
session_start();
require("new-connection.php");
$query = "SELECT `subject`,`details`,`created_at` FROM `bulletin-board-entry` ORDER BY created_at DESC;";
$view = fetch_all($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            padding: 20px;
            margin: 0 auto;
            border: 2px solid black;
            width: 600px;
            min-height: 500px;
        }

        h1 {
            text-align: center;
        }

        p {
            padding-bottom: 10px;
            border-bottom: 2px solid black;
        }
    </style>
    <title>Bulletin Board Entry</title>
</head>

<body>
    <div class="container">
        <h1>Bulletin Board View</h1>
        <section>
            <?php foreach ($view as $row) { ?>
                <h2>
                    <?= $row["subject"] ?>
                    -
                    <?= $row["created_at"] ?>

                </h2>
                <p>
                    <?= $row["details"]; ?>
                </p>
            <?php } ?>
        </section>
        <form action="process.php" method="POST">
            <input type="hidden" name="action" value="submit" />
            <input type="submit" value="Back" />
        </form>
    </div>
</body>

</html>