<?php require_once('DisplayData.php'); ?>
<?php include('connect.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EduArt | ViperGloo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/landingPage1.css">
</head>
  <body>
  <?php
      include('header.php');
    ?>
    <div class="container items-1">
            <div class="row align-items-center">
              <div class="col-md-6 col-12 mt-2 mt-md-1">
                <h2>Platform <span class="green">Terbaik</span> Untuk <span class="green">Belajar Seni</span> Online dan Offline</h2>
                <p>Belajar seni sesuai dengan yang kamu mau</p>
                <div>
                  <a class="btn btn-primary" href="courses.php">
                    Explore Course
                  </a>
                  <a class="btn btn-danger" href="articles.php">
                    See Articles
                  </a>
                </div>
              </div>
              <div class="col-md-6 col-12">
                <img src="./assets/Saly-13.png" alt="carousel satu">
              </div>
            </div>
          </div>
        </div>
    <section class="section-page">
    <section class="container px-4 pt-4 mt-5">
      <div class="row text-center">
        <h2 class="green">Browse Our Courses</h2>
      </div>
      <div class="row content-container rounded-top justify-content-center">
      <?php
      DisplayData::displayKursusLandingPage($con);
        ?>
      </div>
    </section>
    </section>
    <section class="container px-4 mt-5 section-bawah">
      <div class="row justify-content-center align-items-center flex-column-reverse flex-md-row">
        <div class="col-12 col-lg-4 text-lg-start text-center">
          <h3>Tingkatkan skill dengan mengikuti puluhan kursus yang tersedia</h3>
          <p>Tersedia puluhan kursus yang siap membantu kamu mempelajari dan mengeksplorasi minat dan bakat kamu</p>
        </div>
        <div class="col-12 col-lg-4 text-center">
            <img class="gambar-section-bawah" src="./assets/gambar-tari.png" alt="gambar tari">
        </div>
      </div>
    </section>
    <section class="section-page">
    <section class="container px-4 mt-5 pt-4">
      <div class="row text-center">
        <h2 class="green">Browse Our Articles</h2>
      </div>
      <div class="row content-container rounded-top justify-content-center">
      <?php
      DisplayData::displayArtikelLandingPage($con);
      ?>
      </div>
    </section>
    </section>
    <section class="container px-4 mt-5 section-bawah">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-lg-4 text-center">
        <img class="gambar-section-bawah" src="./assets/gambar-instruktur.png" alt="gambar tari">
      </div>
      <div class="col-12 col-lg-4 text-lg-start text-center">
        <h3>Jadilah instruktur</h3>
        <p>Semua orang butuh bantuanmu, jadilah instruktur untuk terus membantu orang lain belajar</p>
      </div>
      </div>
    </section>
    <footer class="mt-5">
      <div class="row justify-content-center">
        <div class="col">
          <p class="text-center">Made by Siraj | Ridzky | Nurhaliza | Kaameila</p>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7ece949bc8.js" crossorigin="anonymous"></script>
  </body>
</html>