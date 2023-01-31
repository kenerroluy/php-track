<?php
session_start();
include("new-connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Bulletin Board Entry</title>
</head>

<body>
    <div class="container">
        <form action="process.php" method="POST">
            <h1>Bulletin Board Entry</h1>
            <h3>
                <?php
                if (isset($_SESSION["error_message"])) {
                    echo $_SESSION["error_message"];
                    unset($_SESSION["error_message"]);
                }
                ?>
            </h3>
            <label>Subject: <span>*</span>
                <input type="text" name="subject">
            </label>
            <label>Details: <span>*</span>
                <textarea name="details" id="details" cols="33" rows="10"></textarea>
            </label>
            <input type="hidden" name="action" value="submit" />
            <input type="submit" value="Add" />
            <input type="submit" value="Skip" />
        </form>
    </div>
</body>

</html>