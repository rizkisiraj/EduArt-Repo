<?php
include('connect.php');
session_start();
$id = $_GET['idKursus'];

$perintahSql = "DELETE FROM kursus WHERE id_kursus = $id";
$result = mysqli_query($con, $perintahSql);

if($result) {
    $_SESSION['sukses'] = 'sukses';
    header("location:kursusTabel.php");
} else {
    die(mysqli_error($con));
}
?>