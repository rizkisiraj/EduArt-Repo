<?php
include('connect.php');
session_start();

$idArtikel = $_GET['idArtikel'];
$namaArtikel = $_POST['judul'];
$email = $_SESSION['email'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$perintahSql = "UPDATE artikel
SET namaArtikel = '$namaArtikel', kategori = '$kategori', deskripsi = '$deskripsi'
WHERE idArtikel = $idArtikel";

$hasil = mysqli_query($con, $perintahSql);

if($hasil) {
    $_SESSION['sukses'] = 'sukses';
    header('location:editArtikel.php?idArtikel='.$idArtikel);
} else {
    die(mysqli_error($con));
}
?>