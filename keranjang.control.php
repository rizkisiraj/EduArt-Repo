<?php
session_start();

$_SESSION['keranjang'] = array();
header("location:keranjang.php");
?>