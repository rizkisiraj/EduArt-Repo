<?php require_once('connect.php'); ?>
<?php include('DisplayData.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/courses.css">
    <title>EduArt | ViperGloo</title>
</head>
<body>
<?php
    include('header.php');
?>
      <section class="bg-green mt-3">
        <section class="container py-3">
        <h1 class="h3 text-center">Kursus</h1>
        <div class="mb-4">
          <form class="d-flex" role="search" action="courses.php" method="get">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Cari</button>
          </form>
       </div>
        <div class="mb-4">
            <h2 class="h4">Kategori</h2>
            <div>
                <?php
                include('kategoriKursus.php');
                ?>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
        <?php
        if(isset($_GET['kategori'])) {
          DisplayData::displayKursusDenganKategori($_GET['kategori'], $con);
        } else {

          DisplayData::displayKursus($con);
        }
        ?>
        </div>
      </section>
    </section>
    <?php
    include('footer.php');
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
  </body>
</html>