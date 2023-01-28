<?php
session_start();
header('Location: index.php');
$range1 = 0;
$range2 = 0;
$msg = "";

if (isset($_POST['reset_game']) && ($_POST['reset_game']) == 'reset_game') {
    $_SESSION['money'] = 500;
    $_SESSION['chances'] = 10;
    $_SESSION['message'] = null;
    unset($_SESSION);
} elseif (isset($_POST['risk'])) {

    if ($_POST['risk'] == "low") {

        $range1 = -25;
        $range2 = 100;
        $msg = "Low Risk";

    } elseif ($_POST['risk'] == "moderate") {

        $range1 = -100;
        $range2 = 1000;
        $msg = "Moderate Risk";

    } elseif ($_POST['risk'] == "high") {

        $range1 = -500;
        $range2 = 2500;
        $msg = "High Risk";

    } elseif ($_POST['risk'] == "severe") {

        $range1 = -3000;
        $range2 = 5000;
        $msg = "Severe Risk";
    }

    if ($_SESSION['chances'] > 0) {

        $_SESSION['bet'] = rand($range1, $range2);
        $_SESSION['money'] += $_SESSION['bet'];
        $_SESSION['chances']--;
        $log = game_host_messages($msg, $_SESSION['bet'], $_SESSION['money'], $_SESSION['chances']);
        $_SESSION['message'][] = $log;

    }
}

function game_host_messages($risk, $value, $money, $chances)
{
    $color = ($value >= 0) ? "profit" : "loss";
    $msg = " You pushed " . $risk . ". Value is " . $value . ". Your current money now is " . $money . " with " . $chances .
        " chance(s) left";

    $log = ['msg' => $msg, 'color' => $color];

    return $log;
}
?>