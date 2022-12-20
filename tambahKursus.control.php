<?php
include('connect.php');
session_start();

$namaKursus = $_POST['judul'];
$linkFoto = $_POST['linkFoto'];
$email = $_SESSION['email'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];

$perintahSql = "INSERT INTO kursus (namaKursus, email_penulis, kategori, deskripsi,link_foto,harga) VALUES ('$namaKursus','$email','$kategori','$deskripsi','$linkFoto',$harga)";

$hasil = mysqli_query($con, $perintahSql);

if($hasil) {
    $_SESSION['sukses'] = 'sukses';
    header('location:buatKursus.php');
} else {
    die(mysqli_error($con));
}
?>