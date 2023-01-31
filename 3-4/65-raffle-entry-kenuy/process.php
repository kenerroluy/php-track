<?php
session_start();
require("new-connection.php");

if (isset($_POST["action"]) && $_POST["action"] == "submit") {
    $phone_number1 = $_POST["phone_number"];
    if (empty($phone_number1) || strlen($phone_number1) != 11) {
        $_SESSION["error_message"] = "Please fill-up correctly! and enter 11 digits numbers";
        header("Location: index.php");
        exit(0);
    } elseif ($phone_number1[0] != 0 || $phone_number1[1] != 9) {
        $_SESSION["error_message"] = "Number should start with 09";
        header("Location: index.php");
        exit(0);
    } else {
        $query = "INSERT INTO 'contact_info' ('phone_number','created_at','updated_at') VALUES ('$phone_number1',NOW(),NOW());";
        run_mysql_query($query);
        header('Location: success.php');
        $_SESSION['number'] = $phone_number1;
    }
}

$query = "SELECT phone_number, DATE_FORMAT(created_at,'%m-%d-%y %I:%i%p') as updated_date FROM contact_info;";
$result = fetch_all($query);

?>