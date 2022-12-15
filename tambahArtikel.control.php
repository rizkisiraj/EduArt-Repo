<?php
include('connect.php');
session_start();

$namaArtikel = $_POST['judul'];
$email = $_SESSION['email'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$perintahSql = "INSERT INTO artikel (namaArtikel, email_penulis, kategori, deskripsi) VALUES ('$namaArtikel','$email','$kategori','$deskripsi')";

$hasil = mysqli_query($con, $perintahSql);

if($hasil) {
    $_SESSION['sukses'] = 'sukses';
    header('location:buatArtikel.php');
} else {
    die(mysqli_error($con));
}
?>