<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        * {
            padding: 0;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            /* outline: 1px solid black; */
        }

        h1 {
            margin: 20px 0;
        }

        .container {
            padding: 20px;
            margin: 0 auto;
            border: 2px solid black;
            width: 600px;
            min-height: 200px;
            text-align: center;
        }

        span {
            vertical-align: top;
            font-size: 12px;
            color: red;
        }

        label {
            font-size: 18px;
            margin: 5px;
        }

        input {
            padding: 5px;
            margin: 5px;
        }

        .reset {
            color: red;
            font-weight: 400;
            font-size: 20px;
            margin: 10px 0;
        }
    </style>
    <title>Authentication I</title>
</head>

<body>
    <div class="container">
        <h1>
            Reset Password From
        </h1>
        <form action="process.php" method="POST">
            <h2>
                <?php if (isset($_SESSION["reset_message"])) {
                    echo "<p class='reset'> {$_SESSION['reset_message']}</p>";
                    unset($_SESSION['reset_message']);
                } ?>
            </h2>
            <label>Contact number: <span>*</span>
                <input type="text" name="contact_num">
            </label>
            <input type="hidden" name="action" value="reset">
            <input type="submit" value="Reset">
        </form>
        <?php
        echo "<a href='process.php'> log Off!</a>"
            ?>
    </div>
</body>

</html>