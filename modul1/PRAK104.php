<?php
$samsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>

<!DOCTYPE html>
<head>
    <title>PRAK104</title>
    <style>
        table {
            font-family: sans-serif;
            color: black;
        }
        table, th, td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>

        <?php foreach($samsung as $S) : ?>
        <tr>
            <td> <?= $S; ?> </td>
        </tr>
        <?php endforeach ?>

    </table>
</body>
</html>