<?php 
require('model.php');
if (isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<head>
    <style>
        body{
            max-width: 900px;
            margin: auto;
        }
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
    <title>Member Perpus</title>
</head>
<body>
    <h2 style= "text-align:Center">Member</h2>
    <table border = "1">
        <thead>
            <tr>
                <th>ID Member</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilmember();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formmember.php"><button>Tambah Member</button></a> <br></br>
    <a href="index.php"><button>Kembali</button></a>
    </div>
</body>
</html>