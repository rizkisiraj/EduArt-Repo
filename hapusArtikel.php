<?php
include('connect.php');
session_start();
$id = $_GET['idArtikel'];

$perintahSql = "DELETE FROM artikel WHERE idArtikel = $id";
$result = mysqli_query($con, $perintahSql);

if($result) {
    $_SESSION['sukses'] = 'sukses';
    header("location:artikelTabel.php");
} else {
    die(mysqli_error($con));
}
?>