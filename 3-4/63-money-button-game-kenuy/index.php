<?php
session_start();
date_default_timezone_set("Asia/Hong_Kong");
$message = $_SESSION["message"];
$date = date("m/d/Y g:i A");

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
        <header>
            <h1>Your money:
                <?= $_SESSION["money"] ?>
            </h1>
            <h2>Your chance left:
                <?= $_SESSION["chances"] ?>
            </h2>
            <form action="process.php" method="POST" class="reset_btn">
                <input type="hidden" name="reset_game" value="reset_game" />
                <input type="submit" id="reset" value="Reset Game" />
            </form>
        </header>
        <main>
            <section class="risk_btn_section">
                <form action="process.php" method="POST">
                    <h3>Low Risk</h3>
                    <input type="submit" value="Bet" />
                    <input type="hidden" name="risk" value="low" />
                    <h4>by -25 up to 100</h4>
                </form>
                <form action="process.php" method="POST">
                    <h3>Moderate Risk</h3>
                    <input type="submit" value="Bet" />
                    <input type="hidden" name="risk" value="moderate" />
                    <h4>by -100 up to 1000</h4>
                </form>
                <form action="process.php" method="POST">
                    <h3>High Risk</h3>
                    <input type="submit" value="Bet" />
                    <input type="hidden" name="risk" value="high" />
                    <h4>by -500 up to 2500</h4>
                </form>
                <form action="process.php" method="POST">
                    <h3>Severe Risk</h3>
                    <input type="submit" value="Bet" />
                    <input type="hidden" name="risk" value="severe" />
                    <h4>by -3000 up to 5000</h4>
                </form>
            </section>
            <section class="game_host_section">
                <h2>Game Host:</h2>
                <div class="game_host_box">
                    <p>[
                        <?= $date ?> ] Welcome to Money Button Game, risk taker! All you need to do is to push buttons
                        to
                        try your luck. You have free 10 chances with initial money 500. Choose wisely and good luck!
                    </p>
                    <?php
                    foreach ($message as $msgs) {
                        ?>
                        <p class="<?= $msgs["color"] ?>">[ <?= $date ?> ]<?= $msgs["msg"] ?></p>
                    <?php } ?>
                    <?php if ($_SESSION["chances"] == 0) { ?>
                        <p>GAME OVER!</p>
                    <?php } ?>
                </div>
            </section>
        </main>
    </div>
</body>

</html>