<?php
session_start();

include("connect.php");
$sql = '';
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);

if(isset($_POST['login'])) {
    $sql = "SELECT * FROM `akun` WHERE email = '$email' and password = '$password'";
} else {
    $no_telepon = $_POST["no_telepon"];
    $nama = $_POST['nama'];
    $sql = "INSERT INTO `akun` (nama,email,password,no_telepon) VALUES ('$nama','$email','$password','$no_telepon')";
}
$result = mysqli_query($con, $sql);
if(!$result) {
    die(mysqli_error($con));
}

if(isset($_POST['login'])) {
    if(mysqli_num_rows($result) == 0) {
        header("location:loginv2.php?error=email atau password salah");
        exit();
    }
    
    while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['login'] = "OK";
        $_SESSION['email'] = $email;
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['keranjang'] = array();
    }
} else {
    $_SESSION['login'] = "OK";
    $_SESSION['email'] = $email;
    $_SESSION['nama'] = $nama;
    $_SESSION['keranjang'] = array();
}

header("location:index.php");


?>