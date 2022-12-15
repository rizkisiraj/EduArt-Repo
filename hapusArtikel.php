<?php
include('connect.php');
session_start();
$id = $_GET['idArtikel'];

$perintahSql = "DELETE FROM artikel WHERE idArtikel = $id";
$result = mysqli_query($con, $perintahSql);

if($result) {
    header("location:kursusTabel.php");
    $_SESSION['sukses'] = 'sukses';
} else {
    die(mysqli_error($con));
}
?>