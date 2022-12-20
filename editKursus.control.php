<?php
include('connect.php');
session_start();

$idKursus = $_GET['idKursus'];
$namaKursus = $_POST['judul'];
$email = $_SESSION['email'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];

$perintahSql = "UPDATE kursus
SET namaKursus = '$namaKursus', kategori = '$kategori', deskripsi = '$deskripsi', harga = $harga
WHERE id_kursus = $idKursus";

$hasil = mysqli_query($con, $perintahSql);

if($hasil) {
    $_SESSION['sukses'] = 'sukses';
    header('location:editKursus.php?idKursus='.$idKursus);
} else {
    die(mysqli_error($con));
}
?>