<?php
session_start();
$coupon_num = rand(1000000, 7000000);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Free Coupon</title>
</head>

<body>
    <header>
        <h1>Welcome Customer!</h1>
        <p>Were Giving away <span>Free Coupons</span> as a token of appreciation
            <?php if (($_SESSION["count"] != 0) && ($_SESSION["count"] > 0)) { ?>
                <span>
                    <?= $_SESSION["count"] ?>
                </span> customer(s)
            </p>
        <?php } else { ?>
            <p>
            <?php } ?>
    </header>
    <main>
        <?php if ($_SESSION["count"] == 0) { ?>
            <h2>Sorry</h2>
            <p>Unavailable</p>
            <form method="POST" action="index.php">
                <input type="submit" name='reset' value="Reset Counter">
                <input type="submit" name='reset' value="Claim Again">
            </form>
        <?php } elseif (isset($_POST["name"]) && empty($_POST["name"])) { ?>
            <h2>You must enter your name</h2>
            <form action="index.php">
                <input type="submit" value="Go Back to Home">
            </form>
        <?php } elseif (isset($_POST["name"])) { ?>
            <h1>
                <?= $_POST["name"] ?>!
            </h1>
            </h2>
            You have a 50% Discount
            </h2>
            <p>
                <?= $coupon_num ?>
            </p>
            <form method="POST" action="index.php">
                <input type="submit" name='reset' value="Reset Counter">
                <input type="submit" name='claim_again' value="Claim Again">
            </form>
            <?php unset($_POST["name"]);
        } ?>
    </main>
</body>

</html>