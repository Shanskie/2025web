<?php
include "koneksi.php";

$nim = $_POST["nim"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$tanggalLahir = $_POST["tanggalLahir"];
$telp = $_POST["telp"];
$email = $_POST["email"];
$id_prodi = $_POST["id_prodi"];

$namafile = $_FILES['foto']['name'];
$tmpname = $_FILES['foto']['tmp_name'];

$ekstensifoto = explode('.', $namafile);
$ekstensifoto = strtolower(end($ekstensifoto));

$namaFileBaru = $nim;
$namaFileBaru .= '.';
$namaFileBaru .= $ekstensifoto;

move_uploaded_file($tmpname, 'assets/img/' . $namaFileBaru);


$hashPass = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO mahasiswa (nim, nama, tanggalLahir, telp, email, id_prodi, password, foto) values ('$nim','$nama','$tanggalLahir','$telp','$email','$id_prodi','$hashPass','$namaFileBaru')";

mysqli_query($conn, $query);

header("location: index.php");
