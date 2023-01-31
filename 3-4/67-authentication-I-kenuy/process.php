<?php
session_start();
require("new-connection.php");

// register
if (isset($_POST["action"]) && $_POST["action"] == "register") {
    register_user($_POST);
}
// login
else if (isset($_POST["action"]) && $_POST["action"] == "login") {
    login_user($_POST);
    // reset
} elseif (isset($_POST["action"]) && $_POST["action"] == "reset") {
    reset_user($_POST);
} else {
    session_destroy();
    header("location: index.php");
    die();
}

function register_user($post)
{
    $_SESSION["error_message"] = array();

    if (empty($post["first_name"])) {
        $_SESSION["errors"][] = "First name can't be blank!";
    }

    if (strlen($post["first_name"]) <= 2) {
        $_SESSION["errors"][] = "First name should be more than 2 characters";
    }

    if (empty($post["last_name"])) {
        $_SESSION["errors"][] = "Last name can't be blank!";
    }

    if (strlen($post["last_name"]) <= 2) {
        $_SESSION["errors"][] = "Last name should be more than 2 characters";
    }

    if (!filter_var($post["email"], FILTER_VALIDATE_EMAIL)) {
        $_SESSION["errors"][] = "Provide a valid email";
    }

    if (strlen($post["password"]) <= 7) {
        $_SESSION["errors"][] = "Password should have at least 8 characters";
    }

    if (!is_numeric($post["contact"])) {
        $_SESSION["errors"][] = "Password should only consist of integers";
    }

    if (empty($post["contact"])) {
        $_SESSION["errors"][] = "Contact number can't be blank!";
    }

    if (strlen($post["contact"]) < 11) {
        $_SESSION["errors"][] = "Not a valid Contact number";
    }

    if (count($_SESSION["errors"]) > 0) {
        header("location: index.php");
        die();
    } else {
        // md5 password
        $password_md5 = md5($post['password']);
        // Insert query
        $query = "INSERT INTO `user1`(`first_name`,`last_name`,`email`,`password`,`contact_num`,`created_at`,`updated_at`) 
                VALUES ('{$post['first_name']}', '{$post['last_name']}', '{$post['email']}', '$password_md5','{$post['contact']}', NOW(), NOW());";
        run_mysql_query($query);
        $_SESSION["success_message"] = "User successfully created!";
        header("location: index.php");
        die();
    }
}
function login_user($post)
{
    // md5 password
    $password_md5 = md5($post['password']);
    $query = "SELECT * FROM user1 WHERE user1.password = '$password_md5' 
            AND user1.email = '{$post['email']}';";
    $user = fetch_all($query);
    if (count($user) > 0) {
        $_SESSION["user_id"] = $user[0]["id"];
        $_SESSION["first_name"] = $user[0]["first_name"];
        $_SESSION["logged_in"] = TRUE;
        header("location: success.php");
    } else {
        $_SESSION["errors"][] = "Can't find a user with those credentials";
        header("location: index.php");
        die();
    }
}
function reset_user($post)
{
    if (empty($post["reset"])) {
        $_SESSION["reset_message"] = "Must provide a contact";
        header("Location: success.php");
        die();
    } else {
        // get input password
        $contact = escape_this_string($post["contact_num"]);
        // query
        $query = "SELECT * FROM user1 WHERE contact_num = '{$contact}'";
        $user = fetch_all($query);
        // logic
        $_SESSION["contact"] = $user[0]["contact_num"];
        $default_password = md5("village88");
        $query = "UPDATE `my_db`.`user1` SET `password` = '{$default_password}' WHERE (`contact_num` = '{$contact}');";
        run_mysql_query($query);
        header("Location: success.php");
        die();
    }
}

?>