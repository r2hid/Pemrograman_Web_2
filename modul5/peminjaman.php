<?php 
require('model.php');
if (isset($_GET['id_peminjaman'])){
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman </title>
    <style>
        body { 
            width: 900px;
            margin:auto;}
        table{
            border-collapse: collapse;
        }
        tr{
            border: black;
        }
        th{
            background-color: #a0a0a0;
        }
        td{
            background-color: #E8E8E8;
        }
    </style>
</head>
<body>
    <h2 style = "text-align:center">Peminjaman</h2>
    <table border = "1">
        <thead>
            <tr>
                <th>ID Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilpeminjaman();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formpeminjaman.php"><button>Tambah Data Peminjaman</button></a> <br></br>
    <a href="index.php"><button>Kembali</button></a>
    </div>
</body>
</html>