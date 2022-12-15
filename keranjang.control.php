<?php
include('connect.php');
session_start();

for ($i = 0; $i < count($_SESSION['keranjang']); $i++) {
    $id_kursus = $_SESSION['keranjang'][$i];
    $email = $_SESSION['email'];
    $perintahSql = "INSERT INTO `transaksi` (id_kursus,email_pembeli) VALUES ('$id_kursus','$email')";
    $hasil = mysqli_query($con, $perintahSql);
}

$_SESSION['keranjang'] = array();
header("location:keranjang.php");
?>