

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduArt | ViperGloo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/editProfile.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <?php include('header.php'); ?>
    <?php
include('connect.php');

$email = $_SESSION['email'];

$perintahSql = "SELECT * FROM akun WHERE email = '$email'";
$hasil = mysqli_query($con, $perintahSql);

if(!$hasil) {
    die(mysqli_error($con));
}

$row = mysqli_fetch_assoc($hasil);
?>
    <section class="container px-4">
    <div class="text-center mb-3">
        <img src="<?php 
                if($row['link_foto_akun'] == null) {
                    echo "./assets/avatarTemplate.png";
                } else {
                    echo $row['link_foto_akun'];
                }
                ?>" alt="profilePic" class="profile-image rounded-circle">
    </div>
    <div class="form-container">
        <form action="editProfile.control.php" method="post">
            <div class="mb-3">
                <input value="<?php echo $row['nama'] ?>" required name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
            </div>
            <div class="mb-3">
                <input value="<?php echo $row['link_foto_akun'] ?>" name="linkFoto" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Link Foto">
            </div>
            <div class="mb-3">
                <input value="<?php echo $row['no_telepon'] ?>" required name="noTelepon" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No telepon">
            </div>
            <div class="mb-3 text-center">
                <input type="submit" value="Simpan Perubahan" class="btn btn-primary">
                <a href="profile.php" class="btn btn-danger">Cancel</a>
            </div>
            </form>
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
    <?php
    if(isset($_SESSION['sukses'])) {
        echo "
        <script>
        Swal.fire(
            'Berhasil!',
            'Profil telah diedit',
            'success'
            ).then(() => {
                window.location.href = 'profile.php';
            })
        </script>
        ";
        unset($_SESSION['sukses']);
    }
    ?>
</body>
</html>