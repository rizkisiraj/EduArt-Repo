<?php
require_once('connect.php');
require_once('DisplayData.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduArt | ViperGloo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/articles.css">
</head>
<body>
    <?php
    include('header.php')
    ?>
    <section class="px-4 header-page mb-4 article-header">
        <div class="row mb-2">
            <h1 class="text-center">ARTICLES</h1>
        </div>
        <div class="row">
            <?php
            DisplayData::displayArtikelSlider($con);
            ?>
            <div class="col-lg-4 col-12 container">
            <?php
            DisplayData::displayArtikelSliderTipe2($con);
            ?>
            </div>
        </div>
    </section>
    <section class="container-fluid px-4">
        <div class="row">
            <h3>Daftar Artikel</h3>
        </div>
        <?php
        include('kategoriArtikel.php');
        ?>
        <div class="row mt-2">
            <?php
            if(isset($_GET['kategori'])) {
                DisplayData::displayArtikelDenganKategori($_GET['kategori'], $con);
            } else {
                DisplayData::displayArtikel($con);
            }
            ?>
        </div>
    </section>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
</body>
</html>