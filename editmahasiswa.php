<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$nim = $_GET['nim'];
$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$datamahasiswa = ambildata($querymahasiswa);
// var_dump($datamahasiswa);
// die;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="editaksimahasiswa.php" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value ="<?= $datamahasiswa[0]['nim'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value ="<?= $datamahasiswa[0]['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggalLahir" value ="<?= $datamahasiswa[0]['tanggalLahir'] ?>"></td>
            </tr>
            <tr>
                <td>Telp</td>
                <td><input type="text" name="telp" value ="<?= $datamahasiswa[0]['telp'] ?>"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="emai" name="email" value ="<?= $datamahasiswa[0]['email'] ?>"></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>
                    <select name="id_prodi">
                        <?php foreach ($data as $d) :?>
                        <option value="<?php echo $d['id'] ?>"
                        <?=
                        $d['id'] == $datamahasiswa[0]['id_prodi'] ?
                        "SELECTED" : ""
                        ?>
                        ><?php echo $d['nama']?></option>
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