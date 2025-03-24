<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambahaksimahasiswa.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggalLahir"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="telp"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="emai" name="email" required></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="id_prodi">
                        <?php foreach ($data as $d) :?>
                        <option value="<?php echo $d['id'] ?>"><?php echo $d['nama']?></option>
                        <?php endforeach ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Simpan">
                    <input type="reset" value="Batal">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                   <button> <a href="index.php">Kembali</a> </button>
                </td>
            </tr>
           
        </table>
    </form>
</body>
</html>