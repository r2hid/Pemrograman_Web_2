<?php
$hasil;
if (isset($_POST["konversi"])) {
    if ($_POST["nilai"] == 0) {
        $hasil = "Nol";
    } else if ($_POST["nilai"] > 0 && $_POST["nilai"] < 10) {
        $hasil = "Satuan";
    }else if ($_POST["nilai"] == 10) {
        $hasil = "Puluhan";
    }else if ($_POST["nilai"] > 10 && $_POST["nilai"] < 20) {
        $hasil = "Belasan";
    }else if ($_POST["nilai"] >= 20 && $_POST["nilai"] < 100) {
        $hasil = "Puluhan";
    }else if ($_POST["nilai"] >= 100 && $_POST["nilai"] < 1000) {
        $hasil = "Ratusan";
    }else {
        $hasil = "Anda Menginput Melebihi Limit Bilangan";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>PRAK204</title>
    <style>
        li {
            list-style: none;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <li>
            <p>Output yang diinginkan: </p>
        </li>
        <li>
            <label for="nilai">Nilai: </label>
            <input type="text" name="nilai" id="nilai">
        </li>
        <li>
            <button type="submit" name="konversi">Konversi</button>
        </li>

        <?php if (isset($_POST["konversi"])) : ?>
            <li>
                <h1>Hasil: <?= $hasil; ?></h1>
            </li>
        <?php endif ?>
    </form>
</body>
</html>