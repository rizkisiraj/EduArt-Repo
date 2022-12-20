<?php
session_start();

include("connect.php");

$email = $_SESSION['email'];
$linkFoto = $_POST['linkFoto'];
$nama = $_POST['nama'];
$noTelepon = $_POST['noTelepon'];

$perintahSql = "UPDATE akun
SET nama = '$nama', link_foto_akun = '$linkFoto', no_telepon = '$noTelepon'
WHERE email = '$email'";

$hasil = mysqli_query($con, $perintahSql);

if($hasil) {
    $_SESSION['sukses'] = "sukses";
    $_SESSION['nama'] = $nama;
    header("location:editProfile.php");
}
?>