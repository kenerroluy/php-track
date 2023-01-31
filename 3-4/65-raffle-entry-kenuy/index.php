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
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Raffle Entry</title>
</head>

<body>
    <div class="container">
        <form action="process.php" method="POST">
            <h1>Welcome to Raffle Entry!</h1>
            <h2>
                <?php
                if (isset($_SESSION["error_message"])) {
                    echo $_SESSION["error_message"];
                    unset($_SESSION["error_message"]);
                }
                ?>
            </h2>
            <label>Enter a valid phone number:
                <input type="text" name="phone_number">
            </label>
            <input type="hidden" name="action" value="submit" />
            <input type="submit" value="Submit" />
        </form>
    </div>
</body>

</html>