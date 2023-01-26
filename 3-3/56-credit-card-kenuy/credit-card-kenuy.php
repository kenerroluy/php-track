<!DOCTYPE html>
<?php
$users = array(
    array('cardholder_name' => "Michael Choi", 'cvc' => 123, 'acc_num' => '1234 5678 9876 5432'),
    array('cardholder_name' => "John Supsupin", 'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
    array('cardholder_name' => "Michael Choi", 'cvc' => 123, 'acc_num' => '1234 5678 9876 5432'),
    array('cardholder_name' => "KB Tonel", 'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
    array('cardholder_name' => "John Supsupin", 'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
    array('cardholder_name' => "KB Tonel", 'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
    array('cardholder_name' => "John Supsupin", 'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
    array('cardholder_name' => "KB Tonel", 'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
    array('cardholder_name' => "Mark Guillen", 'cvc' => 345, 'acc_num' => '123 123 123 123')
);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            border: 0px;
        }

        table {
            background-color: black;
            margin: 0px auto;
            position: relative;
            top: 200px;
        }

        th,
        td {
            padding: 2px 5px;
            text-align: center;
            font-size: 20px;
            background-color: whitesmoke;
        }

        tr.bg_gray td{
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Name in uppercase</th>
            <th>Account Num</th>
            <th>CVC Num</th>
            <th>Full account</th>
            <th>Length of full account</th>
            <th>is valid</th>
        </tr>
<?php for ($i = 0; $i < count($users); $i++) { ?>
<?php $length_of_full_acc = strlen($users[$i]["acc_num"]) ?>
<?php if ($i % 3 == 0) { ?>
        <tr class="bg_gray">
<?php } else { ?>
        <tr>
<?php } ?>
            <td><?= $i + 1 ?></td>
            <td><?= $users[$i]["cardholder_name"] ?></td>
            <td><?= strtoupper($users[$i]["cardholder_name"]) ?></td>
            <td><?= $users[$i]["acc_num"] ?></td>
            <td><?= $users[$i]["cvc"] ?></td>
            <td><?= $users[$i]["acc_num"], " ", $users[$i]["cvc"] ?></td>
            <td><?= $length_of_full_acc ?></td>
<?php if ($length_of_full_acc == 19) { ?>
            <td>yes</td>
<?php } else { ?>
            <td>no</td>
<?php } ?>
        </tr>
<?php } ?>
    </table>
</body>

</html>