<?php
include('connect.php');
$id = $_GET['idArtikel'];

$perintahSql = "SELECT idArtikel,namaArtikel,deskripsi,kategori,nama FROM artikel JOIN akun ON artikel.email_penulis = akun.email WHERE idArtikel = $id";
$hasil = mysqli_query($con,$perintahSql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/articleDetail.css">
</head>
<body>
    <?php
    include('header.php');
    ?>
    <section class="container">
        <?php while($row = mysqli_fetch_assoc($hasil)): ?>
            <img class="cover-photo mb-3" src="https://picsum.photos/300/200" alt="img4" id="img4">
        <div id="right">
            <h1 class="h2 mb-2"><?php echo $row['namaArtikel'] ?></h1>
            <p></p>
            <p class="penulis mb-4">Penulis : <?php echo $row['nama'] ?> | Kategori : <?php echo $row['kategori'] ?></p>
            <p><?php echo $row['deskripsi'] ?></p>
        </div>
        <?php endwhile ?>
    </section>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
</body>
</html>