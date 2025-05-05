<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.html");
}
include "koneksi.php";

$query = "SELECT m .*, p.nama namaProdi FROM `mahasiswa` m JOIN prodi p ON m.id_prodi = id;";
$data = ambildata($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <br>
    <button><a href="tambahmahasiswa.php">Tambah</a></button>
    <br>
    <table border="1" cellspacing="0" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Telp</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php 
        $i = 1;
        foreach ($data as $d) :?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nim"]?></td>
                <td><?php echo $d["nama"]?></td>
                <td><?php echo $d["telp"]?></td>
                <td><?php echo $d["namaProdi"]?></td>
                <td><a href="deletemahasiswa.php?nim=<?php echo $d['nim']?>"onclick="return confirm('Yakin Ingin Hapus?')">Delete</a> | <a href="editmahasiswa.php?nim=<?php echo $d['nim']?>">Edit</a></td>
            </tr>
        <?php endforeach; ?>   
            </tr>
        </tbody>
    </table>
    <a href="logout.php">Keluar</a>
</body>
</html>