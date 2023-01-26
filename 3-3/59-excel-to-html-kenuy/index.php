<?php
ini_set('auto_detect_line_endings', true);
$csv_file_name = "us-500.csv";
$row = 1;
?>
<style>   
    * {
        margin: 0px;
        padding: 0px;
    }

    th,
    td {
        padding: 5px;
        text-align: center;
        background-color: white;
    }

    table {
        margin: 0px auto;
        background-color: black;
    }

    tr.light_gray td{
        background-color: lightgray;
    }
</style>
    <table>
<?php   if (($handle = fopen($csv_file_name, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
        $column_count = count($data);
        // light gray background every 10th row
        if ($row % 10 != 0) { ?>
        <tr>
<?php } else { ?>
            <tr class="light_gray">
<?php } ?>
<?php for ($i = 0; $i < $column_count; $i++) { ?>
            <td><?= $data[$i] ?></td>
<?php }
        $row++ ?>
        </tr>
<?php       }
        fclose($handle); ?>
<?php   } ?>
    </table>