<?php
$samsung = array("S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "X5" => "Samsung Galaxy Xcover 5");
?>

<!DOCTYPE html>
<head>
    <title>PRAK105</title>
    <style>
        table {
            font-family: sans-serif;
            color: black;
        }
        table, th, td{
            border: 1px solid;
        }
        th {
            background-color: red;
            padding: 20px 25px;
        }
    </style>
</head>
<body>
   <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <tr>
            <td> <?= $samsung["S22"] ?> </td>
        </tr>
        <tr>
            <td> <?= $samsung["S22+"] ?> </td>
        </tr>
        <tr>
            <td> <?= $samsung["A03"] ?> </td>
        </tr>
        <tr>
            <td> <?= $samsung["X5"] ?> </td>
        </tr>
    </table>
</body>
</html>