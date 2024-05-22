<?php 
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
   <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Edit Data Peminjaman</title>": "<title>Tambah Data Peminjaman</title>" ?> 
</head>
<body>
    <h2>Form Peminjaman</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>ID Peminjaman</td>
                <td><input type="text" name="id_Peminjaman" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["id_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
                <td>Tanggal Peminjaman</td>
                <td><input type="date" name="pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_peminjaman"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>Tanggal Kembalian</td>
                <td><input type="date" name="kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br></td>
            </tr>
            <tr>
                <td>
                    <?php 
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Edit</button>";
                    }else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";    
                    }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahpeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    if (isset($_POST['update'])) {
       updatepeminjaman($_POST['id_Peminjaman'],$_POST['pinjam'],$_POST['kembali']);
    }
    ?>
</body>
</html>