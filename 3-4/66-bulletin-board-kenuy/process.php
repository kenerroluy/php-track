<?php
session_start();
require("new-connection.php");

if (isset($_POST["action"]) && $_POST["action"] == "Skip") {

    header("Location: main.php");
    unset($_action["action"]);
    session_destroy();

}

if (isset($_POST["action"]) && $_POST["action"] == "submit") {
    $subject = $_POST["subject"];
    $details = $_POST["details"];

    if (empty($subject && $details) || empty($subject || $details)) {
        $_SESSION["error_message"] = "Please fill in the blank fields";
        header("Location: index.php");
        exit(0);
    } elseif (strlen($subject) >= 50) {
        $_SESSION["error_message"] = "Subject should contain maximum of 50 characters only";
        header("Location: index.php");
        exit(0);
    } elseif (strlen($details) >= 255) {
        $_SESSION["error_message"] = "Subject should contain maximum of 50 characters only";
        header("Location: index.php");
        exit(0);
    } else {
        $query = "INSERT INTO `bulletin-board-entry`(`subject`, `details`, `created_at`) VALUES ('$subject','$details',NOW());";
        run_mysql_query($query);
        header("Location: main.php?msg=success");
        unset($_action["action"]);
        session_destroy();
    }
}

if (isset($_POST["action"]) && $_POST["action"] == "Back") {

    header("Location: index.php");
    unset($_action["action"]);
    session_destroy();

}

?>