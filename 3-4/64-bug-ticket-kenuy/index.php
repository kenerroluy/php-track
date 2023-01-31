<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Money Button Game</title>
</head>

<body>
    <div class="container">
        <form action="process.php" method="post">
            <?php
            if (isset($_SESSION["errors"])) {
                foreach ($_SESSION["errors"] as $error) {
                    echo "<p id='error_message'>" . $error . "</p>";
                }
                unset($_SESSION["errors"]);
            }
            ?>
            <label>Date Today <span>*</span>
                <input type="text" name="date" placeholder="M/D/Y">
            </label>
            <label>Enter First Name <span>*</span>
                <input type="text" name="first_name" placeholder="First Name">
            </label>
            <label>Enter Last Name <span>*</span>
                <input type="text" name="last_name" placeholder="Last Name">
            </label>
            <label>Email Address <span>*</span>
                <input type="text" name="email" placeholder="Email Address">
            </label>
            <label>Issue Title <span>*</span>
                <input type="text" name="issue_title" placeholder="Issue Title">
            </label>
            <label>Issue Details: <span>*</span>
                <textarea name="issue_details" id="txt_box"></textarea>
            </label>
            <input type="hidden" name="action" value="submit">
            <input type="submit" id="submit_btn" value="Submit">
        </form>
    </div>
</body>

</html>