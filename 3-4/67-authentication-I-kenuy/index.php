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
    <title>Authentication I</title>
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Register here</h2>
        <?php
        if (isset($_SESSION["errors"])) {
            foreach ($_SESSION["errors"] as $error) {
                echo "<p class='error'> $error</p>";
            }
            unset($_SESSION['errors']);
        }
        if (isset($_SESSION["success_message"])) {
            echo "<p class='success'> {$_SESSION['success_message']}</p>";
            unset($_SESSION['success_message']);
        }
        ?>
        <form action="process.php" method="POST">
            <label>First name: <span>*</span>
                <input type="text" name="first_name">
            </label>
            <label>Last name: <span>*</span>
                <input type="text" name="last_name">
            </label>
            <label>Email Address: <span>*</span>
                <input type="text" name="email">
            </label>
            <label>Password: <span>*</span>
                <input type="password" name="password">
            </label>
            <label>Contact number: <span>*</span>
                <input type="text" name="contact">
            </label>
            <input type="hidden" name="action" value="register">
            <input type="submit" value="Register">
        </form>
        <h2>Login here</h2>
        <form action="process.php" method="POST">
            <label>Email Address: <span>*</span>
                <input type="text" name="email">
            </label>
            <label>Password: <span>*</span>
                <input type="password" name="password">
            </label>
            <input type="hidden" name="action" value="login">
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>